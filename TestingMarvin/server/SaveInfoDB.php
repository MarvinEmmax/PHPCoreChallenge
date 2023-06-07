<?php
  /*
 *---------------------------------------------------------------
 * APPLICATION DEMO BY MARVIN EMMAX DEVELOPER
 * PHP SIMPLE NO FRAMEWORK
 *---------------------------------------------------------------
 * 22/07/2022 :: PHP 7.1+
 *---------------------------------------------------------------
 */ 
 
  require_once 'core/Funcionalities.php';     // Required Class Method File

 

  use server\core\Funcionalities;             // Use NameSpaces
 
  
  if(!isset($_POST['text'])){
  die(json_encode(array('ok' => false, 'error' => 'Debes enviarse el campo del formulario para el hash')));  
  }
  
  
  $string = trim($_POST['text']);


  if(empty($string) or (strlen($string) < 5) ){
  die(json_encode(array('ok' => false, 'error' => 'Debes introducir algún texto en el campo, con minimo de 5 caracteres.')));  
  } 

  $result = Funcionalities::AddToDatabase($string);  // Put AddToDatabase Method
  
  if($result === false){
  die(json_encode(array('ok' => false, 'error' => 'Hay un problema con la base de datos, revise la configuracion y que la misma exista en el host.')));  
  }    
  
  die(json_encode(array('ok' => true, 'error' => '', 'result' => '')));  // Print Info in JSON Format.  

?>