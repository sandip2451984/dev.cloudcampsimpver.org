
<?php

  /**
  *** This is the 1st Level file which containing global variable of entire application
  *** @version 1.0
  **/

  // Including the configuration file
  require_once('includes/sm_config.inc');


  /**
  ** We are just make all database variables globals for all modules that can able to access that variables
  **/  
  
   $GLOBALS['DB_HOST']=$as__sm['DB_HOST'];
   $GLOBALS['DB_USERNAME']=$as__sm['DB_USERNAME'];
   $GLOBALS['DB_PASSWORD']=$as__sm['DB_PASSWORD'];
   $GLOBALS['DB_NAME']=$as__sm['DB_NAME'];

  /**
  ** Declare the paths 
  **/
  $as__sm['basePath'] = '';
  $as__sm['path_web'] = $as__sm['basePath'] . 'web/';
  
  $as__sm['path_js'] = $as__sm['path_web']."/js";
  $as__sm['path_css'] = $as__sm['path_web']."/css";

?>