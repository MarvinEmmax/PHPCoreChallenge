<?php
  /*
 *---------------------------------------------------------------
 * APPLICATION DEMO BY MARVIN EMMAX DEVELOPER
 * PHP SIMPLE NO FRAMEWORK
 *---------------------------------------------------------------
 * 22/07/2022 :: PHP 7.1+
 *---------------------------------------------------------------
 */ 
 
  require_once 'core/Funcionalities.php';                                     // Required Class Method File

 

  use server\core\Funcionalities;                                             // Use NameSpaces
 
 
  $result = Funcionalities::GetServerInfo();                                  // Get GetServerInfo Method
 
  die(json_encode(array('ok' => true, 'error' => '', 'result' => $result)));  // Print Info in JSON Format. 

?>