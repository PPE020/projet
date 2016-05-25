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
        $id = $this->request['pass']['0'];
        $room = $this->Room->find('first', array('conditions' =>array('room.id' => $id)));
        $this->set('room', $room);
    }
    
    public function booking_2(){
        $id = $this->data['room']['id_room'];
        $room = $this->Room->find('first', array('conditions' =>array('room.id' => $id)));
        $this->set('room', $room);
        $this->set('dateResa', $this->data['room']['dateAAfficher']);
    }
    
    public function booking_3(){
        $id = $this->data['room']['id_room'];
            $room = $this->Room->find('first', array('conditions' =>array('room.id' => $id)));
            $this->set('room', $room);
            $this->set('infoResa', $this->data['room']);
        if($this->data['room']['hour_start'] < $this->data['room']['hour_end']){
            $this->set('hourSup', 1);
        }
        else{
            $this->set('hourSup', 0);
        }
        $hours = 1;
        foreach($room['Reservation'] as $resa){
            if($this->data['room']['hour_start']['hour']<substr($resa['hour_end'], 0, 2) && $this->data['room']['hour_start']['hour']>=substr($resa['hour_start'], 0, 2)){
                    $hours = 0;
            }
            if($this->data['room']['hour_end']['hour']<substr($resa['hour_end'], 0, 2) && $this->data['room']['hour_end']['hour']>=substr($resa['hour_start'], 0, 2)){
                $hours = 0;
            }
            if($this->data['room']['hour_start']<6){
                $hours = 0;
            }
        }
        if($hours == 1){
            $data = array('hour_start' => $this->data['room']['hour_start'], 'hour_end' => $this->data['room']['hour_end'], 'room_id' => $this->data['room']['id_room'], 'date_reservation' => date('Y-m-d', strtotime($this->data['room']['date_reservation'])), 'user_id' => $this->Auth->user('id'));
            $this->loadModel('Reservation');
            if($this->Reservation->save($data, array('validate' => true, 'fieldlist' => array('id', 'room_id', 'user_id', 'created', 'date_reservation', 'hour_start', 'hour_end')))){
                $hours = 1;
            }
            else {
                $hours = 0;
            }
        }
        $this->set('hours', $hours);
    }
  
}
