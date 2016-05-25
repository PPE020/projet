<?php
class Room extends AppModel {

    public $hasMany = array(
        'Reservation' => array(
            'className' => 'Reservation',
            'conditions' => array('Reservation.date_reservation >= CURRENT_DATE' )
        )
    );
}