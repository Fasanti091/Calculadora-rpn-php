function send(stack,command){

   const data = new FormData();
      alert("Enviando");
      data.append('command', command);
      for(i=0;i<stack.length; i++){
         data.append(i,stack[i]);
      }
   
   fetch(
      'http://localhost/terminalEj/backEnd/index.php',

      {
         method: 'POST',
         body: data
      }
   )
   .then(function(response) {
      if(response.ok) {
         return response.text()
         //console.log(response.json())
      } else {
         throw "Error en la llamada Fetch";
      }

   })
   .then(function(respuestaDelServidor) {
   document.getElementById('term').innerHTML=respuestaDelServidor
      console.log(respuestaDelServidor);
   })
   .catch(function(err) {
      console.log(err);
   });

}
