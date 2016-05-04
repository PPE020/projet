<?php
class Room extends AppModel {
    public $hasMany = 'Reservation';
}