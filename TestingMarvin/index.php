<?php
/*
 *---------------------------------------------------------------
 * APPLICATION DEMO BY MARVIN EMMAX DEVELOPER
 * PHP SIMPLE NO FRAMEWORK
 *---------------------------------------------------------------
 * 22/07/2022 :: PHP 7.1+
 *---------------------------------------------------------------
 */
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="author" content="Marvin Emmax Developer">
    
   <title>Proyecto Prueba</title>
   
   <link href="assets/css/bootstrap.min.css" rel="stylesheet">
   <link href="assets/css/animate.min.css" rel="stylesheet">
   <link href="assets/css/theme.css" rel="stylesheet">
   <link href="assets/css/emmax.css" rel="stylesheet">
   <link rel="shortcut icon" href="assets/img/favicon.png">
  </head>
  <body>
     
   
<div class="d-flex flex-column flex-md-row align-items-cente p-3 px-md-4 mb-3 shadow animated fadeInDown slower fixed-top" style="border-radius: 15px; background: #eef0f2;">
  <div class="col-sm-6">
  <img src="assets/img/logo.png" alt="Marvin Emmax Developer" style="height: 60px;" class="float-left ml-2 mr-1 mb-0">              
  </div>
  
</div>
<div class="mt-5 mb-3">&nbsp;</div>
<div class="ceap-header mt-5 px-3 py-3 pt-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4 animated slideInLeft">Bootstrap 5 + Backend PHP</h1>
  <p class="lead animated slideInRight">Prueba Integral de conocimientos basicos Frontend HTML + Bootstrap + Custom CSS + Vue JS. Y Backend PHP simple.</p>
</div>


<div class="container">



  <div class="row align-items-center my-5 animated fadeIn slower border-bottom pb-5" id="app-1">
      <div class="col-lg-7">
        <div class="jumbotron text-left">            
            <blockquote class="blockquote">                
                <p class="mb-0 small">{{host}}</p>
                <p class="mb-0 small">{{protocol}}</p>
                <p class="mb-0 small">{{software}}</p>
                <p class="mb-0 small">{{navigator}}</p>                
            </blockquote>
      </div>        
      </div>

      <div class="col-lg-5">
        <h1 class="font-weight-light">Prueba PHP 1</h1>
        <p>Al pulsar el botón <strong>Obtener Info</strong> se envia una peticion mediante Ajax y devuelve los datos del servidor de alojamiento actual.</p>
        <a class="btn btn-danger-gradient text-white" href="javascript:void(this)" v-on:click="GetServerInfo">Obtener Info</a>     
      </div>
      
</div>


<div class="row align-items-center my-5 animated fadeIn slower border-bottom pb-5" id="app-2">
<form class="row" action="#" method="POST">
      <div class="col-lg-7">
        <div class="jumbotron text-left">                        
            <blockquote class="blockquote">                
               <div class="row px-3"> <label class="mb-1">
                <h6 class="mb-0 text-sm">Escribe algún Texto:</h6>
                </label> <input class="form-control mb-4" type="text" name="text" maxlength="50" autocomplete="off">
              </div>
                <p class="mb-0 small">Su hash MD5 es: <br/> {{md5_hash}}</p>                
            </blockquote>            
      </div>        
      </div>

      <div class="col-lg-5">
        <h1 class="font-weight-light">Prueba PHP 2</h1>
        <p>Al pulsar el botón <strong>Calcular</strong> se envia una peticion mediante Ajax y calcula el hash MD5 de la cadena dada, el campo tiene validacion simple de servidor.</p>
        <button type="submit" class="btn btn-danger-gradient text-white" href="javascript:void(this)" v-on:click="ConvertStringToMD5">Calcular Hash</button>     
      </div>
</form>
</div>


<div class="row align-items-center my-5 animated fadeIn slower" id="app-3">
<form class="row" action="#" method="POST">
      <div class="col-lg-7">
        <div class="jumbotron text-left">                        
            <blockquote class="blockquote">                
               <div class="row px-3"> <label class="mb-1">
                <h6 class="mb-0 text-sm">Escribe algún Texto:</h6>
                </label> <input class="form-control mb-4" type="text" name="text" maxlength="50" autocomplete="off" v-model="mtext">
              </div>
                
              <ul v-for="(item, index) in list" :key="index">
               <li>{{item.text_data}}</li> 
              </ul>  

            </blockquote>            
      </div>        
      </div>

      <div class="col-lg-5">
        <h1 class="font-weight-light">Prueba PHP 3</h1>
        <p>Al pulsar el botón <strong>Guardar en BD</strong> se envia una peticion mediante Ajax, se realiza la validaciòn simple de servidor y se guarda el texto en la base de datos. Al pulsar el botón <strong>Leer BD</strong> se muestra la información guardada. (Requiere Conexión MySQL)</p>
        <button type="submit" class="btn btn-danger-gradient text-white" href="javascript:void(this)" v-on:click="AddToDatabase">Guardar en DB</button>
        <button class="btn btn-danger-gradient text-white" href="javascript:void(this)" v-on:click="GetFromDatabase">Leer DB</button>          
      </div>
</form>
</div>
 
  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <small class="d-block mb-3 text-muted text-center animated slideInUp slower">&copy; 2022. Proyecto Prueba - Copyright.
          <div class="badge btn-outline-danger mycursor">Created by: Marvin Emmax Developer.</div>
       </small>
      </div>
     
    </div>
  </footer>
</div>

    <script src="assets/js/axios.min.js"></script>
    <script src="assets/js/vue.min.js"></script>
    <script src="assets/js/app.js"></script>
    
  </body>
</html>

