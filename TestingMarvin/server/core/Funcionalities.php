<?php
/*
 *---------------------------------------------------------------
 * APPLICATION DEMO BY MARVIN EMMAX DEVELOPER
 * PHP SIMPLE NO FRAMEWORK
 *---------------------------------------------------------------
 * 22/07/2022 :: PHP 7.1+
 *---------------------------------------------------------------
 */

namespace server\core;


class Funcionalities {
    
 
 public static $db;
 
 public static $con;


 //---------------------------------------------------------------
 // Get info about Server
 //---------------------------------------------------------------
 
 public static function GetServerInfo(){

  return array('navigator' => $_SERVER['HTTP_USER_AGENT'],
  	           'software'  => $_SERVER['SERVER_SOFTWARE'],
  	           'protocol'  => $_SERVER['SERVER_PROTOCOL'],
  	           'host'      => $_SERVER['HTTP_HOST']);
  }


 //---------------------------------------------------------------
 // Get Hash MD5 for String Parameter
 //---------------------------------------------------------------
 
 public static function ConvertStringToMD5($string){

  return md5($string);

}

 

//---------------------------------------------------------------
 // Save Data in Database
 //---------------------------------------------------------------
 
 public static function AddToDatabase($string){

 self::$db = self::connectToDatabase();

 if(self::$db === false)
   return false;  
 
 $text = mysqli_real_escape_string(self::$db,strip_tags($string,ENT_QUOTES));
 
 $sql = "INSERT INTO master_table (text_data) VALUES ('$text')";
 $query_new_insert = mysqli_query(self::$db,$sql);
 
 if ($query_new_insert === false){
   
   return false;
 
 } 
 
 return true;

} 


 //---------------------------------------------------------------
 // Connect MySQL Server
 //---------------------------------------------------------------

 private static function connectToDatabase(){
  
  include('config/config.php');
  
  self::$con = new \mysqli($config['host'],$config['user'],$config['pass'],$config['database']);
  
  if(!empty(self::$con->connect_error)){
   
   return false;
  
  }
  
  self::$con->query("set sql_mode=''");  
  
  return self::$con;
 
 }



 //---------------------------------------------------------------
 // Get info about Server
 //---------------------------------------------------------------
 
 public static function GetFromDatabase(){

 self::$db = self::connectToDatabase();

 if(self::$db === false){
   return false;  
 }
  
  $sql = "SELECT * FROM master_table";
  $query_get_info = mysqli_query(self::$db,$sql);
 
  $data = null;  

  while ($row=mysqli_fetch_array($query_get_info)){
 
  $data[] = $row;

  }
 
 return $data;

}

}


?>










