<?php
class RoomsController extends AppController {
    
    var $name = "Rooms";
    var $paginate = array(
        'Room' => array(
            'limit' => 5,
            'order' => array(
                'Room.id' => 'Desc'
            )
        )
    );
    
    public function index() {
        $rooms = $this->Room->find('all');
        $p = $this->paginate('Room');
        $this->set('rooms', $p );
    }
    
    public function view($id) {
        $id = $this->request['pass']['0'];
        $room = $this->Room->find('first', array('conditions' =>(array('room.id' => $id))));
        $this->set('room', $room);
    }
    
    public function booking($id) {
        
    }
}