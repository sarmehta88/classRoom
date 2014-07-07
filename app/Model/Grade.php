<?php
class Grade extends AppModel {
	public $hasMany = array(
      'Room' => array(
        'className' => 'Room',
        
        
    )  
    );
}