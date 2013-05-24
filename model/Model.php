<?php

include_once("model/Event.php");
include_once("model/geocoder.php");
class Model {

  public function __construct($o__ObjDB)
  {
    $this->oObjDB = $o__ObjDB;
    $this->event = new Event();
    //$this->Coding = new Coding();
  }
  
	
	public function saveUser($data){
	
	  $keys= array();
	  
	  foreach($data as $key=>$fields)
      $keys[] = $data["$key"];
    
    
    // unset the last element    
    unset($keys[count($data)-1]);
    // now implode with comman
    $value = implode("','",$keys);
		
    //var_dump($data);exit;
    $qry = "INSERT INTO user (id,first_name,last_name,address,city,state,zipcode,country,job_title,company,website,blog)
            VALUES (NULL ,'$value');";
    return $this->oObjDB->db_altertable($qry);
    
  }
  
  public function saveUserEvent($userId)
  {
    $eventId = $this->event->eventId; 
    $qry = "INSERT INTO event_user (event_id, user_id)
            VALUES ('$eventId' ,'$userId');";
    return $this->oObjDB->db_altertable($qry);
    
  }
  
  public function displayEvent()
  {
			$event_qry = "SELECT * from event  ORDER BY from_date DESC LIMIT 1 ";
		  $event_data = $this->oObjDB->db_accesstable($event_qry);
		  
		  if($event_data)
		    return $event_data;
		  else{
		       // First we have to create Data
           $this->event->addEventData();  
           
        	 $event_qry = "SELECT * from event  ORDER BY from_date DESC LIMIT 1 ";
		       return  $this->oObjDB->db_accesstable($event_qry);
		   }
  }
  public function attendeeList()
  {
    $eventId = $this->event->eventId;
    $userEvent_qry = "SELECT user.* FROM `event_user` LEFT JOIN user ON user.id = event_user.user_id LEFT JOIN event ON event.id = event_user.event_id WHERE event_id = $eventId";
  	$userEvent_data = $this->oObjDB->db_accesstable($userEvent_qry);
		return $userEvent_data;
    
  }
  public function displayEventMap($address)
  {
    $geoCoder = new geocoder($address);
    return $geoCoder->getResult();
    
  }	
}

?>