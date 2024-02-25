$(document).ready(function(){

    let edit = false;
    listar();
    $('#search').on('keyup',function(){

        if($('#search').val()!="") {
            let search = $('#search').val();
            $.ajax({
            url: './busqueda.php',
            data: {search},
            type: 'POST',
            success: function(response){
                let tareas = JSON.parse(response);
                let template ='';
                tareas.map((d, i) =>{
                    Object.keys(d).map((di, i) =>{
                      template += `<tr id="${tareas[0][di].id}">
                        <td>${tareas[0][di].id}</td>
                        <td><a href="#" class="nombre-link">${tareas[0][di].email}</a></td>
                        <td>${tareas[0][di].nombre}</td>
                        <td>${tareas[0][di].fecha}</td>
                        <td>${tareas[0][di].psw}</td>
                        <td><button class="borrar btn btn-danger mx-auto d-block"><i class="fa-solid fa-trash"></i></button></td>
                  </tr>`
                    })
                });
                $('#cuerpo').html(template);

            }
        })
        }else{
            listar();
        }
        
    });

    
    $('#tareas-form').on("submit", function(e){
        
        let datosForm ={
            id: $('#id').val(),
            email: $('#email').val(),
            nombre: $('#nombre').val(),
            fecha: $('#fecha').val(),
            psw: $('#psw').val(),
        };
        let direccion = edit === false ? './guardar.php' : './actualizar.php';
        
        $.post(direccion, datosForm, (response)=>{
            $('#tareas-form').trigger('reset');
            
            listar();
        });
        e.preventDefault();

    });


    function listar() {
        $.ajax({
          url: 'listar.php',
          type: 'GET',
          success: function(response) {
            const tareas = JSON.parse(response);
            let template = '';
            
            tareas.map((d, i) =>{
                Object.keys(d).map((di, i) =>{
                  template += `<tr id="${tareas[0][di].id}">
                        <td>${tareas[0][di].id}</td>
                        <td><a href="#" class="nombre-link">${tareas[0][di].email}</a></td>
                        <td>${tareas[0][di].nombre}</td>
                        <td>${tareas[0][di].fecha}</td>
                        <td>${tareas[0][di].psw}</td>
                        <td><button class="borrar btn btn-danger mx-auto d-block"><i class="fa-solid fa-trash"></i></button></td>
                  </tr>`
                })
            });
            $('#cuerpo').html(template);
          }

        });
    };


    $(document).on('click', '.nombre-link', (e) => {
        const element = $(this)[0].activeElement.parentElement.parentElement;
        const id = $(element).attr('id');
        $.post('./listaruno.php', {id}, (response) => {
            const tareas = JSON.parse(response);
            $('#email').val(tareas.email);
            $('#nombre').val(tareas.nombre);
            $('#fecha').val(tareas.fecha);
            $('#psw').val(tareas.psw);
            $('#id').val(tareas.id);
            edit = true; 
        });
        e.preventDefault();
    });

    $(document).on('click', '.borrar', (e) => {
          const element = $(this)[0].activeElement.parentElement.parentElement;
          const id = $(element).attr('id');
          Swal.fire({
  title: 'Estas seguro de eliminarlo?',
  text: "Este no se podra revertir despues!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, puedes borrarlo!'
}).then((result) => {

  if (result.isConfirmed) {
    $.post('./eliminar.php', {id}, (response) => {
         Swal.fire(
      'Eliminado!',
      'El usuario fue eliminado con exito.',
      'success'
    )
            listar();
          });
   
  }
})      
    });

});



