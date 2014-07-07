<?php
class Room extends AppModel {
	public $belongsTo = array(
        'Grade' => array(
            'type' => 'INNER',
            'className' => 'Grade',
     )
    );

	public $validate = array(
        'length' => array(
            'rule' =>  array('range', 0, 11000),
            'message'=> 'Enter a positive value >0'
        ),
        'height' => array(
            'rule' =>  array('range', 0, 11000),
            'message'=> 'Enter a positive value >0'
        ),
        'width' => array(
            'rule' =>  array('range', 0, 11000),
            'message'=> 'Enter a positive value >0'
        ),
        'numDesks' => array(
            'rule' =>  array('validateNumDesks'),
            'message'=> 'Enter a positive value >0'
        ),
        'grade_id' => array(
            'rule' => 'notEmpty'
        ),
        'roomName' => array(
            'rule' => 'notEmpty'
        )
    );

    function validateNumDesks(){
        $passed=true;
    
        if(($this->data['Room']['grade_id']<=5 and ($this->data['Room']['numDesks'])<=20) or ($this->data['Room']['grade_id']>5 and ($this->data['Room']['numDesks'])<=35)){
                $passed=true;
        }else{                 
                $passed=false;
        }
        
        
        return $passed;
    }

}






