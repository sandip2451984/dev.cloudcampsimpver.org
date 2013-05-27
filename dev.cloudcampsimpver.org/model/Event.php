<?php


	/*
	Class Event
	Use :: Event Class Used For  Event Data
	*/
	
class Event extends common{

	public $eventId = 1;
	
	public function addEventData()
	{
	 //var_dump($data);exit;
    $date = date("y-m-d h:m:s");
   $qry = "INSERT INTO event (id, name, description, from_date, to_date, address,
     city, state, country, zipcode, is_active, createdat, updatedat) 
     VALUES (1, 'Marketingcamp chicago', 'This is Test For Marketingcamp Chicago',
     '$date', '$date', '200 S. Wacker Drive, 15th Floor',
    'Chicago', 'IL', 'USA', '60606', '1', '$date', '$date');";
    
    $GLOBALS['o__objDB']->db_altertable($qry);
  }
}

?>