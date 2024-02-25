$(document).ready(function(){

	fetch();
	//add
	

function fetch(){
$.ajax({
       		 type:"POST",
       		 url:"fetch4.php",
    		 dataType: 'html',
    		 success:function(){
        }
   })
    .done(function(respuesta){
    	$('#div-pedidos').html(respuesta);
    	
    });
}


	$(document).ready(function(){

	/* Funcion para leer la tabla y mostrar todos los contactos */
	readContactos(); 

	function readContactos(consulta){
		$.ajax({
       		 type:"POST",
       		 url:"fetch4.php",
    		 dataType: 'html',
        	data: {consulta},
   })
    .done(function(respuesta){
    	$('#div-pedidos').html(respuesta);
    });

	}


			
	});

	});
