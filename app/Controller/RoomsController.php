<?php
class RoomsController extends AppController {
    public $helpers = array('Html', 'Form');
    public $components = array('Session','RequestHandler');
   

    public function index() {
       $rooms=$this->Room->find('all'); 
       $this->set('rooms',$rooms);
    
    }

    public function add() {
        
        if ($this->request->is('post')) {
            $this->Room->create();
            if ($this->Room->save($this->request->data)) {
                $this->Session->setFlash(__('Your Room Information has been saved.'));
                return $this->redirect(array('controller' => 'grades','action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your Room Information.'));
        }
    }
    public function view($id=null) {

        if (!$id) {
            throw new NotFoundException(__('Invalid room id'));
        }
 
        $room = $this->Room->findById($id);
        if (!$room) {
            throw new NotFoundException(__('Invalid room id'));
        }
        $this->set('room', $room);

    }

    public function edit($id = null) {
    if (!$id) {
        throw new NotFoundException(__('Invalid Room Number'));
    }

    $room = $this->Room->findById($id);
    if (!$room) {
        throw new NotFoundException(__('Invalid Room Number'));
    }

    if ($this->request->is(array('post', 'put'))) {
        $this->Room->id = $id;
        if ($this->Room->save($this->request->data)) {
            $this->Session->setFlash(__('Your room info has been updated.'));
            return $this->redirect(array('controller' => 'grades','action' => 'index'));
        }
        $this->Session->setFlash(__('Unable to update your room info.'));
    }

    if (!$this->request->data) {
        $this->request->data = $room;
    }
}

    public function delete($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }

    if ($this->Room->delete($id)) {
        $this->Session->setFlash(
            __('Room with ID: %s has been deleted.', h($id))
        );
        return $this->redirect(array('controller' => 'grades','action' => 'index'));
    }

}

    public function graph($id = null) {
        if (!$id) {
        throw new NotFoundException(__('Invalid Room Number'));
    }

    $room = $this->Room->findById($id);
    if (!$room) {
        throw new NotFoundException(__('Invalid Room Number'));
    }

    if ($this->request->is(array('post', 'put'))) {
        $this->Room->id = $id;
        if ($this->Room->save($this->request->data)) {
            $this->Session->setFlash(__('Your room info has been updated.'));
            return $this->redirect(array('controller' => 'grades','action' => 'index'));
        }
        $this->Session->setFlash(__('Unable to update your room info.'));
    }

    if (!$this->request->data) {
        $this->request->data = $room;
    }
    
    }

    public function redraw($id=null) {
        //similar to <script src=url>
        $this->layout = 'javascript';
        //get the json from database for that id
        if (!$id) {
            throw new NotFoundException(__('Invalid Room Number'));
        }

        $room = $this->Room->findById($id);
        
        if (!$room) {
            throw new NotFoundException(__('Invalid Room Number'));
        }   
        $this->set('room', $room);
    }
    
}



