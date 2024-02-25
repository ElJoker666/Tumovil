$(document).ready(function(){
	fetch();
	//add
	

function fetch(){
$.ajax({
       		 type:"POST",
       		 url:"fetch.php",
    		 dataType: 'html',
    		 success:function(){
        }
   })
    .done(function(respuesta){
    	$('#div-productos').html(respuesta);
    });
}


	$(document).ready(function(){

	/* Funcion para leer la tabla y mostrar todos los contactos */
	readContactos(); 

	function readContactos(consulta){
		$.ajax({
       		 type:"POST",
       		 url:"fetch.php",
    		 dataType: 'html',
        	data: {consulta},
   })
    .done(function(respuesta){
    	$('#div-productos').html(respuesta);
    });

	}

	$(document).on('keyup','#caja_busqueda', function(){
		let valor = $('#caja_busqueda').val();
			if (valor != "") {
				readContactos(valor);
			}
			else {
				readContactos();
			}
	});

	$(document).on('keydoun','#caja_busqueda', function(){
	let valor = $('#caja_busqueda').val();
		if (valor != "") {
			readContactos();
		}
	
	});
			
	});
});