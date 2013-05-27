<?php

include_once("model/Model.php");

class Controller {
	public $model;
	
	public function __construct($o__ObjDB){
    $this->model = new Model($o__ObjDB);
    
  }
	public function invoke()
	{
      $event_data=$this->model->displayEvent();
      $attendeelist = $this->model->attendeeList();
      if($event_data){
        $address= $event_data[0]['address'].",".$event_data[0]['city'].",".$event_data[0]['state'].",".$event_data[0]['country'];
    	
    	  $locationData=  $this->model->displayEventMap($address);
    	  
      }
      include 'view/homepage.php';
	
	}
	public function register()
  {
    // if data is submitted then save it
    if( isset($_POST) && ( isset($_POST['submit']) && $_POST['submit']=='Register')){
      // Here we have to save into database
       $userId = $this->model->saveUser($_POST,$o__objDB);
       
       // we also have to save the eventid and the userid
       $this->model->saveUserEvent($userId);
       // Now redirect to homepage
       header("Location:index.php");
    }
    
    include "view/register.php";
  }
}

?>