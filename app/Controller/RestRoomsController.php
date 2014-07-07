<?php
class RestRoomsController extends AppController {

    public $uses = array('Room');
    public $helpers = array('Html', 'Form');
    public $components = array('RequestHandler');
 
 
    public function index() {
        $rooms = $this->Room->find('all');
        $this->set(array(
            'rooms' => $rooms,
            '_serialize' => array('rooms')
        ));
    }
 
    public function add() {
        $this->Room->create();
        if ($this->Room->save($this->request->data)) {
             $message = 'Created';
        } else {
            $message = 'Error';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }
     
    public function view($id) {
        $room = $this->Room->findById($id);
        $this->set(array(
            'room' => $room,
            '_serialize' => array('room')
        ));
    }
 
     
    public function edit($id) {
        $this->Room->id = $id;
        if ($this->room->save($this->request->data)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }
     
    public function delete($id) {
        if ($this->Room->delete($id)) {
            $message = 'Deleted';
        } else {
            $message = 'Error';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }
}       