<?php 
  include_once('includes/sm_mainconfig.inc');
  define('WEB_PATH' ,'web/');
  
	include_once("controller/Controller.php");
  
	$controller = new Controller($o__objDB);
	$controller->register();

?>