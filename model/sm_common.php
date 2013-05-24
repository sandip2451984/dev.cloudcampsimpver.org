<?php
   /**
    *** This File is containing common functions that can acessed by entire application
    *** @package packages
    *** @version 1.0
    **/
    
/*
 * Including database class to access function of db class
 */    
include('db/class.db.php');
class Common
{
	/*
	 * This is the function which check whether request is POST or GET method
 	 * @param $_POST or $_GET
 	 * @return array
	 */  
  		function checkRequest()
  		{
  	 		$fileds = array();  
  	 		$totalItems = 0;
  	  		if($_POST)
  	  		{  
  	  	  		foreach($_POST as $s__fieldname=>$m__value)
  	  	  		{
  	  	   	  		$totalItems = $totalItems+1;	  
  	  	   	  		$fileds[$s__fieldname]  = $m__value;
  	  	  		}
  	  		}
  	  		elseif($_GET)
  	  		{
  	  	  		foreach($_GET as $s__fieldname=>$m__value)
  	  	  		{
  	  	   	  		$totalItems++;  	  	  
  	  	   	  		$fileds[$s__fieldname]  = $m__value;
  	  	  		}
  	  		}  	  
  	  		return $fileds;
  		}
  
  	/*
   	 * Function that 
     */
  		function clearRequest()
  		{
  	 		if($_POST)
  	 		{
  	 	  		$_POST = array();
  	 		} 
  	 		else
  	 		{
  	 	 		$_GET = array();
  	 		}
  		}
	
	/*
	 * This is the function that check entered text is not blank
	 * @param string
	 * @return true if valid
	 */
  		function checkString($s__text=NULL)
  		{ 
	 		$output =  ($s__text == "" ||  $s__text == " ") ? "false" : (ereg('\ ',$s__text,$reg)) ? "false" : ereg('([^a-z0-9A-ZЅј…»“”ўЏбаийтущъЁмнэћЌќ џ‘е≈дƒць÷№Ћыпл_.-])',$s__text,$reg) ? "false": "true";
	 		return $output;
  		}

	/*
     * Function Name: CheckEmpty
	 * @param String
	 * @return Boolean
	 * Check for Empty String Values
     */
  		function checkEmpty($str)
  		{
			if((!isset($str) || trim($str) == ""))
			{
	 	  		return true;
			}
			return false;
  		}
  
 	/*
  	 * This is the email checker which checks email entered by the user
  	 * @param email_address
  	 * @return true if valid
  	 */
  		function checkEmail($s__emailaddress)
  		{
	  		ereg('([a-zA-Z0-9\_]+@[a-zA-Z]+\.[a-zA-Z\_\.]+$)',$s__emailaddress,$ms__reg);
	  		$s__output = ($ms__reg) ? "true" : "false";
	  		return $s__output;
  		}


	/*
  	 * This is the validation function that check Numeric Fields
     * @param number
  	 * @retun true if valid
  	 */
   		function checkNumber($i__phonenumber)
   		{
  	  		ereg('[^0-9]',$i__phonenumber,$ms__reg);
  	  		$s__output = ($ms__reg) ? "false" : "true";
  	  		return $s__output;
   		}  
  
    /*
     * Function that take the date as 29-12-2009 formate and convert it to timestamp
	 * @param date with stirng format
	 * @return timestamp 
     */ 
   		function Set_date($date)
   		{
   	  		$str_str = explode("/",$date); 
   	  		$datestr =  $str_str[2]."-".$str_str[1]."-".$str_str[0];
      		$mktime = mktime(0,0,0,$str_str[1],$str_str[2],$str_str[0]);
      		return $mktime;
    	}
  
    /* 
     * Function that take the timestamp and show the date as Date-Month-Year Format
     */ 
    	function Get_date($timestamp)
    	{
     	  	$date = date("d-M-Y",$timestamp);
          	return $date;
    	}
    	
    	/* 
     * Function that take the timestamp and show the date as Date-Month-Year Format For Events
     */ 
    	function Get_date_event($timestamp)
    	{
     	  	$date = date("Y/m/d",$timestamp);
          	return $date;
    	}
   
   /* 
     * Function that take the timestamp and show the date as Date-Month-Year Format For Events
     */ 
    	function Get_date_event_comp($timestamp)
    	{
     	  	$date = date("Y-m-d",$timestamp);
          	return $date;
    	}
   
    /*
	 * Function Name:Check Url
	 * @param string
	 * @return Boolean
	 * Check For Prioper URL
	 */	 
    	function checkUrl($ss__url='')
		{
			//if(eregi("^http://[a-z0-9]{1}[-_./~a-z0-9]{1,}[a-z0-9?&=:]{0,}$",$ss__url))
			if(preg_match("/^(http|https|ftp):\/\/([a-z0-9]([a-z0-9_-]*[a-z0-9])?\.)+[a-z]{2,6}\/?([a-z0-9\?\._-~&#=+%]*)?/", $ss__url))
			return false;
			return true;		
		}
	
	/*
	 * Function that use to get origianal Image name from rescaled one
	 * @param image_name
	 * @return Actual Image Name
	 */
		function getImageName($s__imgname)
		{	
          	$i__rescale_pos =  strpos($s__imgname,'_rescale');
          	$s__new_string =substr($s__imgname,$i__rescale_pos,8);
          	$a__imageprops = explode($s__new_string,$s__imgname);
          	$s__actualimage_name = implode("",$a__imageprops);
          	return trim($s__actualimage_name); 
		}	
	
	/*
  	 * Checks movie screens that inputted elements must be correct
  	 * @param time in string formate(2-9)
  	 * @return validated input or not 
  	 */
  		function checkmoviescreen($time)
  		{
  			ereg('[^0-9,:, ,-]',$time,$ms__reg);
  			$s__output = ($ms__reg) ? "true" : "false";		 
	   		if($s__output=="true")
	   		{
	     		return true; 
	   		}
	   		else
	   		{
	     		return false; 
	   		}
  		}
		function checkextra_char($moviename)
		{
			ereg('[^0-9,a-z,A-Z, ]',$moviename,$ms__reg);
			$s__output = ($ms__reg) ? "true" : "false";		 
	   		if($s__output=="true")
	   		{
	     		return true; 
	   		}
	   		else
	   		{
	     		return false; 
	   		}
		
		
		}
  
 	/**
	 * Method to pass header. It first checks whether referer page is present or not, if it is 
	 * then redirects to that page else redirects to the  page provided as an argument of this function.
	 * @param string $ss__url URL where page is to be directed.
	 * @param string $ss__message Message text to be shown into next page.
	 * @access public 
	 */
		public function passHeader($ss__message='',$ss__url='index.php')
		{		
			if(trim($ss__message) != '')
			{
				echo "hello".$ss__message;
				//$_SESSION['ss__message']=$ss__message;
				//$GLOBALS['an__fl']['remMessage']=0;
			}		
			header('Location: '.$ss__url);
		}
	}
?>