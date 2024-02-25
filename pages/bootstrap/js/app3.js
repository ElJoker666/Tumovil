$(document).ready(function(){

	fetch();
	//add
	

function fetch(){
$.ajax({
       		 type:"POST",
       		 url:"fetch3.php",
    		 dataType: 'html',
    		 success:function(){
        }
   })
    .done(function(respuesta){
    	$('#div-carrito').html(respuesta);
    	
    });
}


	$(document).ready(function(){

	/* Funcion para leer la tabla y mostrar todos los contactos */
	readContactos(); 

	function readContactos(consulta){
		$.ajax({
       		 type:"POST",
       		 url:"fetch3.php",
    		 dataType: 'html',
        	data: {consulta},
   })
    .done(function(respuesta){
    	$('#div-carrito').html(respuesta);
    });

	}


			
	});

	});
