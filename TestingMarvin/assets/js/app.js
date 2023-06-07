 /*================================================================================================*/
 /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * ** * * ** * ** * * * * * * * *
  Proyecto Prueba :: VueJS 2
  Escrito por MARVIN EMMAX.
  * * * ** * * * * * * * * * * * ** * * * * * ** *** * * ** ** * ** * ** ** ** ** * ** * ** * ** **/
 
/*================================================================================================*/
// Init VUE APP 1
/*================================================================================================*/

const app_1 = new Vue({


 el: '#app-1', 
 
data() {
    return {
     navigator: '[...]',
     software: '[...]',
     host: '[...]',
     protocol: '[...]'
    }
  },


 methods: {

 // ==========================================================================================
 // GetServerInfo :: Get Server Variables
 // ==========================================================================================
 GetServerInfo (event) {
  
  let ParentObj = this;
  event.toElement.disabled = true;

  axios.get('./server/GetServerInfo.php')  
  
  .then(function(result) {    
     
   if(result.data.ok){

     ParentObj.navigator = result.data.result.navigator;
     ParentObj.software = result.data.result.software;
     ParentObj.host = result.data.result.host;
     ParentObj.protocol = result.data.result.protocol;
    
    event.toElement.disabled = false;

     setTimeout(() => {
      alert('Listo, datos obtenidos correctamente.');   
      }, 1000);
   }  
      
  }).catch(function(error) {    
    
     alert('Ocurrio un error en la llamada al sevidor');   
               
  })

 }

}

});



/*================================================================================================*/
// Init VUE APP 2
/*================================================================================================*/

const app_2 = new Vue({


 el: '#app-2', 
 
data() {
    return {
     md5_hash: '[...]',
    }
  },


 methods: {

 // ==========================================================================================
 // ConvertStringToMD5 :: Get MD5 has for String
 // ==========================================================================================
 ConvertStringToMD5 (event) {
   
  event.preventDefault();
  event.stopPropagation();
 
  let form = new FormData(event.toElement.form);
  let ParentObj = this;
  
  event.toElement.disabled = true;

  axios.post('./server/CalculaHash.php',form)  
  
  .then(function(result) {    
         
    event.toElement.disabled = false;

    if(result.data.ok){
    
     ParentObj.md5_hash = result.data.result;
     
     setTimeout(() => {
      alert('Listo, Hash MD5 obtenido correctamente.');   
      }, 1000);
    
    } else {

     alert(result.data.error);   

    }         
      
  }).catch(function(error) {    
    
     alert('Ocurrio un error en la llamada al sevidor');   
               
  })

 }

}

});



/*================================================================================================*/
// Init VUE APP 3
/*================================================================================================*/

const app_3 = new Vue({


 el: '#app-3', 
 
data() {
    return {
     md5_hash: '[...]',
     mtext: '',
     list: []
    }
  },


 methods: {

 // ==========================================================================================
 // AddToDatabase :: Put Text in Database
 // ==========================================================================================
 AddToDatabase (event) {
   
  event.preventDefault();
  event.stopPropagation();
 
  let form = new FormData(event.toElement.form);
  let ParentObj = this;
  
  event.toElement.disabled = true;

  axios.post('./server/SaveInfoDB.php',form)  
  
  .then(function(result) {    
         
    event.toElement.disabled = false;

    if(result.data.ok){
    
     setTimeout(() => {
      
      ParentObj.mtext = '';
      
      alert('Listo, El texto se guardo correctamente.');   
      
      }, 1000);
    
    } else {

     alert(result.data.error);   

    }         
      
  }).catch(function(error) {    
    
     alert('Ocurrio un error en la llamada al sevidor');   
               
  })

 }, 

 // ==========================================================================================
 // GetFromDatabase :: Get All Text in Database
 // ==========================================================================================
 GetFromDatabase (event) {
   
  event.preventDefault();
  event.stopPropagation();
 
  let ParentObj = this;
  
  event.toElement.disabled = true;

  axios.get('./server/GetInfoDB.php')  
  
  .then(function(result) {    
         
    event.toElement.disabled = false;

    if(result.data.ok){
    
     ParentObj.list = result.data.result;

     setTimeout(() => {      
      
      alert('Listo, datos obtenidos satisfactoriamente.');   
      
      }, 1000);
    
    } else {

     alert(result.data.error);   

    }         
      
  }).catch(function(error) {    
    
     alert('Ocurrio un error en la llamada al sevidor');   
               
  })

 }

}

});