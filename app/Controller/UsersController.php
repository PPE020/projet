<?php
class UsersController extends AppController {
    
    public function beforeFilter() {
        $this->Auth->allow('login');
    }
    
    public function index(){
        
    }
    
    public function login() {
        if($this->request->is('post')) {
            if($this->Auth->login()) {
                $this->Session->setFlash("Vous êtes maintenant connecté.", "notif");
                $this->redirect('/');
            }
            else {
                $this->Session->setFlash("Identifiants incorrectes.", "notif", array('type' => 'error'));
            }
        }
    }
    
    public function logout() {
        $this->Auth->logout();
        $this->redirect($this->referer());
    }
    
    public function edit() {
        $user_id = $this->Auth->user('id');
        if(!$user_id){
            $this->redirect('/');
            die();
        }
        $this->User->id = $user_id;
        $passError = false;
        if($this->request->is('put') || $this->request->is('post')){
            $d = $this->request->data;
            $d['User']['password'];
            $d['User']['id'] = $user_id;
            if(!empty($d['User']['pass1'])){
                if($d['User']['pass1'] == $d['User']['pass2']){
                    $d['User']['password'] = Security::hash($d['User']['pass1'], null, true);
                }
                else {
                    $passError = true;
                }
            }
            if($this->User->save($d, true, array('firstname', 'lastname', 'password', 'email', 'RNA_association', 'poste_association')))
            {
                $this->Session->setFlash("Votre profil a bien été édité.", "notif");
            }
            else {
                $this->Session->setFlash("Impossible de sauvegarder.", "notif", array('type' => 'error'));
            }
            if($passError){
                $this->User->validationErrors['pass2'] = array("Les mots de passe ne correspondent pas.");
            }
        }
        else
        {
            $this->request->data = $this->User->read();
        }
        $this->request->data['User']['pass1'] = $this->request->data['User']['pass2'] = '';
    }
}