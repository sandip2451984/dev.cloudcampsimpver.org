<?php 
class geocoder{
    private $url = "https://maps.google.com/maps/api/geocode/json";
    private $address ;
    public function __construct($address = null)
    {
      if($address !== null){
			  $this->address = $address;
		  }
    }
     public function getResult(){
      
        $resp_json = file_get_contents($this->url . "?address=".urlencode($this->address)."&sensor=false");
        $resp = json_decode($resp_json, true);
        $result =  array();
        if($resp['status']=='OK'){
            $result['formatted_address'] = $resp['results'][0]['formatted_address'];
            $result['geometry'] = $resp['results'][0]['geometry']['location'];
            return $result;
            
        }else{
           // if no result is found 
            return false;
        }
    }

}

?>