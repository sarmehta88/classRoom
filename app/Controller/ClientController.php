<?php
App::uses('HttpSocket', 'Network/Http');

class ClientController extends AppController {

    public $components = array('Security', 'RequestHandler');
     
    public function index(){
         
    }
 
    public function request_index(){
        //get all rooms with grades info
        // remotely post the information to the server
        $link =  "http://" . $_SERVER['HTTP_HOST'] . $this->webroot.'rest_rooms.json';
         
        $data = null;
        $httpSocket = new HttpSocket();
        $response = $httpSocket->get($link, $data );
        $this->set('response_code', $response->code);
        $this->set('response_body', $response->body);
         $this->set('location',$response->getHeader('Location'));
        $this -> render('/Client/request_response');
    }
     
    public function request_view($id){
     
        // remotely post the information to the server
        $link =  "http://" . $_SERVER['HTTP_HOST'] . $this->webroot.'rest_rooms/'.$id.'.json';
 
        $data = null;
        $httpSocket = new HttpSocket();
        $response = $httpSocket->get($link, $data );
        $this->set('response_code', $response->code);
        $this->set('response_body', $response->body);
         
        $this -> render('/Client/request_response');
    }
     
    public function request_edit($id){
     
        // remotely post the information to the server
        $link =  "http://" . $_SERVER['HTTP_HOST'] . $this->webroot.'rest_rooms/'.$id.'.json';
 
        $data = null;
        $httpSocket = new HttpSocket();
        $data['Room']['roomName'] = 'Updated Room Name';
        $data['Room']['length'] = '100';
        $data['Room']['width'] = '100';
        $data['Room']['height'] = '100';
        $data['Room']['roomDescr'] = 'Updated Room  Description';
        $data['Room']['numDesks'] = '100';
        $response = $httpSocket->put($link, $data );
        $this->set('response_code', $response->code);
        $this->set('response_body', $response->body);
         
        $this -> render('/Client/request_response');
    }
     
    public function request_add(){
     
        // remotely post the information to the server
        $link =  "http://" . $_SERVER['HTTP_HOST'] . $this->webroot.'rest_rooms.json';
 
        $data = null;
        $httpSocket = new HttpSocket();
        $data['Room']['roomName'] = 'New Room Name';
        $data['Room']['length'] = '10';
        $data['Room']['width'] = '10';
        $data['Room']['height'] = '10';
        $data['Room']['roomDescr'] = 'New Room  Description';
        $data['Room']['numDesks'] = '10';
        $data['Room']['grade_id'] = '8';
        $response = $httpSocket->post($link, $data );
        $this->set('response_code', $response->code);
        $this->set('response_body', $response->body);
         
        $this -> render('/Client/request_response');
    }
     
    public function request_delete($id){
     
        // remotely post the information to the server
        $link =  "http://" . $_SERVER['HTTP_HOST'] . $this->webroot.'rest_rooms/'.$id.'.json';
 
        $data = null;
        $httpSocket = new HttpSocket();
        $response = $httpSocket->delete($link, $data );
        $this->set('response_code', $response->code);
        $this->set('response_body', $response->body);
         
        $this ->render('/Client/request_response');
    }
}