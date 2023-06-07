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
 
  
  $result = Funcionalities::GetFromDatabase();  // Get GetServerInfo Method
  
  
  if($result === false){
  die(json_encode(array('ok' => false, 'error' => 'Hay un problema con la base de datos, revise la configuracion y que la misma exista en el host.')));
  } else if ($result === null) {
   
   die(json_encode(array('ok' => false, 'error' => 'No existen datos que leer.')));

  }

  die(json_encode(array('ok' => true, 'error' => '', 'result' => $result)));  // Print Info in JSON Format. 

?>