<?php
class GradesController extends AppController {
    public $helpers = array('Html', 'Form');
    public $components = array('Session');

    public function index() {
        //$this->set('rooms', $this->Room->find('all'));
        //sort grades all, asc order
        //for each grade add the all the rooms for that grade
        $grades = $this->Grade->find('all');
        /*foreach($grades as $grade){
            $room = $grade['Grade']['grade_id'];
        }
        echo '<pre>';
        print_r($grades);
        die;*/
        $this->set(array(
            'grades' => $grades,
            '_serialize' => array('grades')
        ));
    }
}
    

    

