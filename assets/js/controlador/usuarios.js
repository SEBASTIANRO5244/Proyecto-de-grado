 $(document).on("click", "#New_usuario", function () {
  $(".modal-title").html("Nuevo");
  limpiar();
  $("#Guardar").show();
  $("#Cerrar").show();
  $("#Actualizar_usu").hide();
  $("#Eliminar_usu").hide();
  //$("#exampleModal").modal();
});

  $(document).on("click", "#Actualizar_usu1", function () {
  $(".modal-title").html("Editar");
  
  $("#Guardar").hide();
  $("#Cerrar").show();
  $("#Actualizar_usu").show();
  $("#Eliminar_usu").hide();
  //$("#exampleModal").modal();
});

  $(document).on("click", "#Eliminar_usu1", function () {
  $(".modal-title").html("Editar");
  
  $("#Guardar").hide();
  $("#Cerrar").show();
  $("#Actualizar_usu").hide();
  $("#Eliminar_usu").show();
  //$("#exampleModal").modal();
});

function buscarespecifico(valor) {
  // body...
  var acum = 0;
  var nit = 0;  
  var ruta = "";

  nit = document.getElementById("Numero_NIT").value;

  if(!nit){
  
   acum++;
}

if(acum<1){

  ruta = url + cusuarios + 'buscarespecifico';
  
  $.ajax({
      'url'  : ruta,
      'data' : {
                  'nit': nit 
      },
      'type' : 'POST',
      'statusCode': {
          404: function() {
            alertify.error("La Ruta de la pagina no es la correcta" );
          }
        }
  }).done(function( data ) {
      var respuesta="";
      var obj="";
      respuesta = '{"respuesta": ['+data+']}';
      obj = JSON.parse(respuesta);
      if (obj.respuesta[0]!=false) {
          $("#Colegio").val(obj.respuesta[0].nombre_colegio);
          if(valor != 1){
            Swal.fire({
              icon: 'success',
               title: 'Colegio encontrado con exito!!',
               showConfirmButton: false,
               timer: 900
             })
          }
      }else{
        Swal.fire(
           'Error, colegio no registrado',
           '',
           'error')
      }            
  }).fail(function() {
      alertify.error( "error" );
  });

}else{
          Swal.fire(
           'Error, campo vacio, digite un documento',
           '',
           'error')
      }  

}

function guardar() {
	// body...
  var acum= 0;
	var nombres = "";
	var tipo = "";
  var id_tipo_usu = 0;
  var nombre_colegio = "";
  var nit = "";
  var users ="";
  var pass = 0;
  var ruta = "";


  nombres = document.getElementById("Nombres").value;
  tipo = document.getElementById("Tipo_Usuario").value;
  users = document.getElementById("Nom_Usuario").value;
  pass = document.getElementById("Contraseña").value;
  nombre_colegio = document.getElementById("Colegio").value;
  nit = document.getElementById("Numero_NIT").value;
  
  if(!nombres||!tipo||!users||!pass||!nit||!nombre_colegio){
    
     acum++;
 }


 if(acum<1){

  if(tipo == "Admin"){
    id_tipo_usu = 1
  }

    ruta = url + cusuarios + 'guardar';
	
	$.ajax({
        'url'  : ruta,
        'data' : {
        			'nombres': nombres ,
        	 		'tipo': tipo,
              'users': users,
              'id_tipo_usu' : id_tipo_usu,
              'nit' : nit,
              'pass': pass

        },
        'type' : 'POST',
        'statusCode': {
            404: function() {
              alertify.error("La Ruta de la pagina no es la correcta" );
            }
          }
    }).done(function( data ) {
        if(data == 1){
            limpiar();
            tusuarios();
            cargar_tabla();
                  Swal.fire({
           icon: 'success',
            title: 'Datos guardados con exito!!',
            showConfirmButton: false,
            timer: 900
          })
        
        }else{
           Swal.fire(
             'Error al guardar, Intenta nuevamente!!',
             '',
             'error')
        }
            
  }).fail(function() {
           Swal.fire(
             'Error',
             '',
             'error')
  });

  }else{
            Swal.fire(
             'Error, campos vacios',
             '',
             'error')
        }  

}

$('.input-letter').on('input', function () {
  this.value = this.value.replace(/[^a-zA-Z ]/g,'');
});

$('.input-number').on('input', function () {
  this.value = this.value.replace(/[^0-9 ]/g,'');
});


function limpiar(){
    $("#Nombres").val("");
    $("#Tipo_Usuario").val("");
    $("#Nom_Usuario").val("");
    $("#Contraseña").val(""); 
    $("#Numero_NIT").val(""); 
    $("#Colegio").val(""); 
}

function tusuarios(){
   var ruta = "";
   var id_html = "";
   ruta=url+cusuarios+"tusuarios";
   id_html = "tusuarios";
    
   cargar_tabla(ruta,id_html);
}

function cargar_tabla(ruta, id_html){
   $.ajax({
       'url'  : ruta,
       'statusCode': {
           404: function() {
             alertify.error("La Ruta de la pagina no es la correcta" );
           }
         }
   }).done(function( data ) { 

       $("#"+id_html).html(data);           
   }).fail(function() {
       alertify.error( "error" );
   })
}

$(document).ready(function(){
   tusuarios();

});

$(document).ready(function(){
 $("#form_buscarUsu").keyup(function(){
 _this = this;
 // Show only matching TR, hide rest of them


 $.each($("#tusuarios tbody tr"), function() {
 if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
 $(this).hide();
 else
 $(this).show();
 });
 });
});

function actualizar() {
    // body...
    var acum= 0;
    var id="";
    var nombre = "";
    var tipo = "";
    var id_tipo_usu = 0;
    var nombre_colegio = "";
    var nit = "";
    var users ="";
    var pass = 0;
    var ruta = "";

    id = $("#Id").val(); 

    nombres = document.getElementById("Nombres").value;
    tipo = document.getElementById("Tipo_Usuario").value;
    users = document.getElementById("Nom_Usuario").value;
    pass = document.getElementById("Contraseña").value;
    nombre_colegio = document.getElementById("Colegio").value;
  nit = document.getElementById("Numero_NIT").value;
  
  if(!nombres||!tipo||!users||!pass||!nit||!nombre_colegio){
    
     acum++;
  }

  if(acum<1){

    if(tipo == "Admin"){
      id_tipo_usu = 1
    }

    ruta = url + cusuarios + 'actualizar';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'id': id , 
                    'nombres': nombres ,
                    'tipo': tipo,
                    'id_tipo_usu' : id_tipo_usu,
                    'users': users,
                    'nit' : nit,
                    'pass': pass
                    
         },
        'type' : 'POST',
        'statusCode': {
            404: function() {
             alertify.error("La Ruta de la pagina no es la correcta" );
           }
          }
    }).done(function( data ) {
        if(data == 1){
            limpiar();
            tusuarios();
            cargar_tabla();
                Swal.fire({
           icon: 'success',
            title: 'Datos actualizados con exito!!',
            showConfirmButton: false,
            timer: 900
          })
        
        }else{
           Swal.fire(
             'Error al actualizar, Intenta nuevamente!!',
             '',
             'error')
        }
            
  }).fail(function() {
           Swal.fire(
             'Error',
             '',
             'error')
  });

  }else{
            Swal.fire(
             'Error, campos vacios',
             '',
             'error')
        }  

}

function cargarmodalusu(id, nombre, tipo_usuario, usuario, password, id_colegio){
 $("#Id").val(id);
 $("#Nombres").val(nombre);
 $("#Tipo_Usuario").val(tipo_usuario);
 $("#Nom_Usuario").val(usuario);
 $("#Contraseña").val(password); 
 $("#Numero_NIT").val(id_colegio); 
}

function actualizarmodalusu(){
  actualizar();
  tusuarios();
}

function eliminar() {
    // body...
    var id = 0;
    
    id = $("#Id").val();
        
    ruta = url + cusuarios + 'eliminar';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'id': id
        },
       'type' : 'POST',
            'statusCode': {
                404: function() {
        alertify.error("La Ruta de la pagina no es la correcta" );
                }  
            }
        }).done (function(data) {
            limpiar();
            tusuarios();
            cargar_tabla();
        }).fail(function() {
           
        })
    
    }


    function eliminarmodalusuarios() {
  Swal.fire({
    title: 'Estas Seguro?',
    text: "No podrás revertir esto!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Eliminar'
  }).then((result) => {
    if (result.value) {

      Swal.fire(
        'Datos eliminados con exito!!',
        '',
        'success'
      )
      eliminar();
      tusuarios();
    }
  })

}