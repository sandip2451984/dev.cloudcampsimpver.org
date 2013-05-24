<?php

  /**
    *** This File is containing Database realated functions 
    *** @author THK Groups
    *** @package packages
    *** @copyright virtueinfo
    *** @version 1.0
    **/
    

class db_class
{
  /* Making connection object publicly */	
	public $o__con;  
	public $o__i_con;
  
 /*
  * Function which is connecting application with mysql
  * @param Server Name, User Name, Password , Database Name
  * @return connection Object along with database name
  */
		public function db_connect($as__server,$as__username,$as__password,$as__dbname)
		{
			$this->o__con = mysql_connect($as__server,$as__username,$as__password);
			$this->db_selection($as__dbname);
		}
  
  /*
   * Function that use to select database from mysql
   * @param Database Name, Connection Object
   * @return success else error
   */
  		function db_selection($as__dbname)
  		{
  			if(!mysql_select_db($as__dbname,$this->o__con))
  			{
  				return;
  			}
  			else
  			{
  	  			mysql_select_db($as__dbname,$this->o__con);
  			}
  		}	  

  /*
   * Function use to access table with given query
   * @param query to be exicuted in mysql
   * @return array values from database
   */
  		public function db_accesstable($s__query=NULL)
  		{
  			$as__data = array();  	
		  	if($s__query != NULL)
  			{
  	 			if(!mysql_query($s__query,$this->o__con))
  	 			{
  		 			return;
     			}
     			else
     			{	
       				$ma__return = mysql_query($s__query,$this->o__con);  	
       				while($rows =  mysql_fetch_assoc($ma__return))
       				{
       	 				$as__data[] = $rows;
       				}
     			} 
   			}   
  			else
   			{
   	  			return;
   			}
   			return $as__data;
  		}  
  
  /*
   * Function that use to alter table like insert query and update query etc
   * @param query to be exicuted in mysql
   * @return if error then error msg
   */ 
  		function db_altertable($s__query=NULL)
  		{
			if($s__query != NULL)
			{
				mysql_query($s__query,$this->o__con); 
        $id = mysql_insert_id(); 	 
				return $id;
			}
			else
			{
				return;
			}
  		}
    
  /*
   *  To release the connection object from the application 
   */
		function db_closeconnection()
		{
			mysql_close($this->o__con);	
		}
  
  /*
   * Functions to access MySqli 
   * Purpose to exicute store procedures
   */

  /*
   * Function that can able to connect mysqli to exicute procedures and functions
   * @param Server Name, User Name ,Password, Database Name
   * @return connection Object
   */
		function dbi_connect($as__servername,$as__username,$as__password,$as__dbname)
		{   	  
			$this->o__i_con = mysqli_connect($as__servername,$as__username,$as__password);
			$this->dbi_selection($as__dbname);
		}
   
  /*
   * Function that use to select database from mysql
   * @param Database Name, Connection Object
   * @return success else error
   */
 		function dbi_selection($as__dbname)
  		{  	      
  			if(!mysqli_select_db($this->o__i_con,$as__dbname))
  			{  		
  				return;
  			}
  			else
  			{
  	  			mysqli_select_db($this->o__i_con,$as__dbname);
  			}
  		}
 
  /*
   * Function use to access table with given query
   * @param query to be exicuted in mysql
   * @return array values from database
   */
 		public function dbi_callprocedure($s__query=NULL)
   		{
  	 		$as__data = array();  	
     		if($s__query != NULL)
  	 		{
  	   			if(!mysqli_query($this->o__i_con,$s__query))
  	   			{
  		 			return;  
       			}
       			else
       			{
         			$ma__return = mysqli_query($this->o__i_con,$s__query);  	
         			while($rows =  mysqli_fetch_assoc($ma__return))
         			{
       	   				$as__data[] = $rows;
         			}
       			} 
     		}
     		else
     		{
            return false;
     		}
    		return $as__data;
  		}
  
  /*
   *  To release the connection object from the application 
   */
		function dbi_closeconnection()
		{
    			mysqli_close($this->o__i_con);	
		}
  
  /*
   * Function that returns number of rows for given table
   * @param sql_query 
   */
  		function db_numrows($s__sql_qry)
  		{
     		$o__result_set = mysql_query($s__sql_qry,$this->o__con);
	 		$i__total_rec = mysql_num_rows($o__result_set);
	 		return $i__total_rec;
  		} 
   
}
?>