<?php

/*
Abstraction layer for GMaps Geocoding Api
*/
class Coding
{

	//json api
	private $url = "https://maps.googleapis.com/maps/api/geocode/json";
	
	private $address;
	
	
	public function __construct($address = null){
		if($address !== null){
			$this->address = $address;
		}
	
	}
	
	public function getResults(){
	
		$response = json_decode(file_get_contents($this->url . "?address=".urlencode($this->address)."&sensor=false"));
		
		$response_results = $response->results;
		$results = Array();
		foreach($response_results as $result){
		  
			//generate Location entity;
			$result['location']['types'] = $result->types;
			$result['location']['formatted_address'] = $result->formatted_address;
			$result['location']['latitude'] = $result->geometry->location->lat;
			$result['location']['longitude'] = $result->geometry->location->lng;
			
			/*$location = new Location();
			$location->setTypes($result->types);
			$location->setFormattedAddress($result->formatted_address);
			$location->setLatitude($result->geometry->location->lat);
			$location->setLongitude($result->geometry->location->lng);*/
			foreach($result->address_components as $address_component){
        $result['location']['address']['short_name'] = $address_component->short_name;
        $result['location']['address']['long_name'] = $address_component->long_name;
        $result['location']['address']['types'] = $address_component->types;
         
				/*$component = new AddressComponent();
				$component->setShortName($address_component->short_name);
				$component->setLongName($address_component->long_name);
				$component->setTypes($address_component->types);*/
				
				/* We're not talking about persisting! 
				$existing_component = $em->getReository('GoogleMapsBundle:AddressComponent')->findOneBy(Array(
				'long_name' => $long_name,
				'types' => $component->getNumericTypes());
				
				if($existing_component){
					$location->addAddressComponent($existing_component);
				}else{
					$location->addAddressComponent($component);
				}
				*/
					//$location->addAddressComponent($component);

			}
			$results[] = $result;
			
		}
		
		return $results;
	}
	
	
	public function setAddress($address){
		$this->address = $address;
	}
	
	public function getAddress(){
		return $this->address;
	}
}
