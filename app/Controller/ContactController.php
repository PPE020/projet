<?php class ContactController extends AppController {
    
    public function beforeFilter(){
        $this->Auth->allow('index');
    }
    
    public function index(){
        if($this->request->is('post')){
            $this->Contact->send($this->request->data['Contact']);
        }
    }
}