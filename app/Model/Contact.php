 <?php class Contact extends AppModel {
    
    public $useTable = false;
    public $validate = array(
        'name' => array(
            'rule' => 'notempty',
            'requiered'=> true,
            'message' => "Vous devez entrer un nom."
        ),
        'email' => array(
            'rule' => 'email',
            'requiered'=> true,
            'message' => "Vous devez entrer un email valide."
        ),
        'content' => array(
            'rule' => 'notempty',
            'requiered'=> true,
            'message' => "Vous devez entrer un message."
        )
    );
    
    public function send($d){
        App::uses('CakeEmail', 'Network/Email');
        $mail = new CakeEmail;
        $mail->to('M2L.reservation@gmail.com')
            ->from($d['email'], $d['name'])
            ->EmailFormat('html')
            ->subject('Contact::M2L Réservation de salle');
        return $mail->send(htmlspecialchars(nl2br($d['content'])));
    }
}