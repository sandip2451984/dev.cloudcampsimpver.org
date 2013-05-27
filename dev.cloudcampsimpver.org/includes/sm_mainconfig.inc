<?php

/***
 *** This File is for main configuration file
 *** @version 1.0
 ***/


/* Globaly start Session so it's not require in any model to start session with session_start() variable*/
  session_start(); 
  
  header("Expires: Thu, 15 Apr 2010 20:00:00 GMT");    
   
/*
 * Including 1st Level global.inc file which containing global paths and global variables 
 * @return global variables 
 */
  include('includes/sm_global.inc');
  
  /*
   * Including common functions which may help models to access all common functions and it may also help in controller   
   */
  include("model/sm_common.php");
  
  /*  Declaring Object for Database */
  $o__objDB = new db_class();  
  
  /* Connecting the database with our application along with database
  * @parameter Database_hostname,Database_ServerName,Database_Password,Database_Name
  * @return Database Connection Object   
  */
  $o__objDB->db_connect($GLOBALS['DB_HOST'],$GLOBALS['DB_SERVERNAME'],$GLOBALS['DB_PASSWORD'],$GLOBALS['DB_NAME']);
  
  /* Just make Database Object global so we can able to access it in any class(model) */
  $GLOBALS['o__objDB'] = $o__objDB;
  
  
 

?>