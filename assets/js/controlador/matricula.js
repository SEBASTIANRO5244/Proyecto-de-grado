$( document ).ready(function() {
  CargarCombo();
});

 $(document).on("click", "#New_Mat", function () {
  $(".modal-title").html("Nuevo");

  $("#Guardar").show();
  $("#Cerrar").show();
  $("#Actualizar_mat").hide();
  $("#Eliminar_mat").hide();
  //$("#exampleModal").modal();
});

  $(document).on("click", "#Actualizar_mat1", function () {
  $(".modal-title").html("Editar");

  $("#Guardar").hide();
  $("#Cerrar").show();
  $("#Actualizar_mat").show();
  $("#Eliminar_mat").hide();
  //$("#exampleModal").modal();
});

$(document).on("click", "#Eliminar_mat1", function () {
  $(".modal-title").html("Eliminar");
  
  $("#Guardar").hide();
  $("#Cerrar").show();
  $("#Actualizar_mat").hide();
  $("#Eliminar_mat").show();
  //$("#exampleModal").modal();
});

  

function buscarespecifico() {
    // body...
    var acum= 0;
    var identificacion = 0;  
    var ruta = "";
    identificacion = document.getElementById("Identificacion").value;

    if(!identificacion){
    
     acum++;
 }

 if(acum<1){

    ruta = url + cmatriculas + 'buscarespecifico';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'identificacion': identificacion 
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
            $("#Nombres").val(obj.respuesta[0].nombre);
            $("#Apellidos").val(obj.respuesta[0].apellido);
               Swal.fire({
           icon: 'success',
            title: 'Documento encontrado con exito!!',
            showConfirmButton: false,
            timer: 900
          })
        
        }else{
           Swal.fire(
             'Error al buscar, Intenta nuevamente!!',
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
             'Error, digite un numero documento',
             '',
             'error')
        }  

}

function CargarCombo() {
    var base_url="";
    base_url="http://localhost/Proyecto-de-grado/cmatriculas/CargarCombo";
    $.ajax({
        'url' : base_url,
        'type' : 'GET',
        success : function(data){
            let curso = JSON.parse(data)
            curso.forEach(Curso =>{
                $('#G_Cursar').append(`<option value="${Curso.id}">${Curso.nombre}</option>`)
            });
        }
    })
}

function buscarespecifico1() {
    // body...
    var acum=0;
    var identificacion1 = 0;  
    var ruta = "";
    identificacion1 = document.getElementById("Identificacion1").value;

    if(!identificacion1){
    
     acum++;
 }

 if(acum<1){

    ruta = url + cmatriculas + 'buscarespecifico1';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'identificacion1': identificacion1 
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
            $("#Nombres1").val(obj.respuesta[0].nombre);
            $("#Apellidos1").val(obj.respuesta[0].apellido);  
              Swal.fire({
           icon: 'success',
            title: 'Documento encontrado con exito!!',
            showConfirmButton: false,
            timer: 900
          })
        
        }else{
           Swal.fire(
             'Error al buscar, Intenta nuevamente!!',
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
             'Error, digite un numero documento',
             '',
             'error')
        }  

}

function guardar() {
    // body...
    
    var acum=0;
    var nombres = "";
    var apellidos = "";
    var identificacion = 0;
    var nombres1="";
    var apellidos1 = "";
    var identificacion1="";
    var valor="";
    var fecha="";
    var curso="";
    var estado="Matriculado";
    var ruta = "";

    nombres = document.getElementById("Nombres").value;
    apellidos = document.getElementById("Apellidos").value;
    identificacion = document.getElementById("Identificacion").value;
    nombres1 = document.getElementById("Nombres1").value;
    apellidos1 = document.getElementById("Apellidos1").value;
    identificacion1 =  document.getElementById("Identificacion1").value;
    valor =  document.getElementById("Valor").value;
    fecha = document.getElementById("Fecha").value;
    curso = document.getElementById("G_Cursar").value;

    if(!nombres||!apellidos||!identificacion||!nombres1||!apellidos1||!identificacion1||
        !valor||!fecha||!curso){
    
     acum++;
 }

 estudiante_estado = document.getElementById("Estado_est").value;

 if(acum<1 && estudiante_estado == "Inactivo"){
    ruta = url + cmatriculas + 'guardar';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'nombres': nombres ,
                    'apellidos': apellidos,
                    'identificacion': identificacion,
                    'nombres1': nombres1,
                    'apellidos1': apellidos1,
                    'identificacion1': identificacion1,
                    'valor': valor,
                    'fecha': fecha,
                    'curso': curso,
                    'estado': estado

        },
        'type' : 'POST',
        'statusCode': {
            404: function() {
              alertify.error("La Ruta de la pagina no es la correcta" );
            }
          }
    }).done(function( data ) {
        if(data == 1){
            cambiarestado();
            cambiarestadoAcu();
            limpiar();
            tmatriculas();
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
             'Error, campos vacios',
             '',
             'error')
  });

  }else{
    if (estudiante_estado == "Matriculado"){
      Swal.fire(
        '¡Ya hay una matricula relaciona con este estudiante!',
        '',
        'error')
    }else{
      Swal.fire(
        'Error, campos vacios',
        '',
        'error')
    }    
        }  

}

function val_estado_est() {
  // body...
  var acum= 0;
  var identificacion = 0;  
  var ruta = "";
  identificacion = document.getElementById("Identificacion").value;

  if(!identificacion){
  
   acum++;
}

if(acum<1){

  ruta = url + cmatriculas + 'val_estado_est';
  
  $.ajax({
      'url'  : ruta,
      'data' : {
                  'identificacion': identificacion 
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
          $("#Estado_est").val(obj.respuesta[0].estado);
      }

      guardar();
          
}).fail(function() {
         Swal.fire(
           'Error',
           '',
           'error')
});
}else{
  Swal.fire(
   '¡El estudiante no existe!',
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

$('.input-direccion').on('input', function () {
  this.value = this.value.replace(/[^-a-zA-Z0-9# ]/g,'');
});

function limpiar(){
    $("#Nombres").val("");
    $("#Apellidos").val("");
    $("#Identificacion").val("");
    $("#Nombres1").val(""); 
    $("#Apellidos1").val("");
    $("#Identificacion1").val("");
    $("#Fecha").val("");
    $("#G_Cursar").val("Seleccione");
    $("#Valor").val("");
    $("#Estado_est").val("");  
}

function actualizar() {

  fecha="";
  valor ="";
  numero_doc_Es = "";
  nombre_estu ="";
  apellido_Estu ="";
  numero_doc_acu ="";
  nombre_acu ="";
  apellido_acu = "";
  curso ="";
  estado = "Matriculado";
  ruta="";

  fecha = $("#Fecha").val();
  valor = $("#Valor").val();
  numero_doc_Es = $("#Identificacion").val();
  nombre_estu = $("#Nombres").val();
  apellido_Estu = $("#Apellidos").val();
  numero_doc_acu = $("#Identificacion1").val();
  nombre_acu = $("#Nombres1").val();
  apellido_acu = $("#Apellidos1").val();
  curso = $("#G_Cursar").val();
  ruta = url + cmatriculas + 'actualizar';
  $.ajax({
   'url'  : ruta,
        'data' : {
              'fecha': fecha,
              'valor': valor,
              'numero_doc_Es': numero_doc_Es,
              'nombre_estu': nombre_estu,
              'apellido_Estu': apellido_Estu,
              'numero_doc_acu': numero_doc_acu,
              'nombre_acu': nombre_acu,
              'apellido_acu': apellido_acu,
              'curso': curso
        },
        'type' : 'POST',
        'statusCode': {
            404: function() {
              alertify.error("La Ruta de la pagina no es la correcta" );
            }
          }
  }).done(function( data ) {
    
        if(data == 1){
            actualizarEst();
            actualizarAcu();
            actualizarPago();
            limpiar();
            tmatriculas();
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
  })
  
}

function cargarmodalmat(fk_numero_documento_estudiante, nombre_estudiante, apellido_estudiante,fk_id_curso,
    fk_numero_documento_acudiente, nombre_acudiente, apellido_acudiente, fecha, valor){
 
    $("#Identificacion").val(fk_numero_documento_estudiante);
    $("#Nombres").val(nombre_estudiante);
    $("#Apellidos").val(apellido_estudiante);
    $("#G_Cursar").val(fk_id_curso);
    $("#Nombres1").val(nombre_acudiente); 
    $("#Apellidos1").val(apellido_acudiente);
    $("#Identificacion1").val(fk_numero_documento_acudiente);
    $("#Fecha").val(fecha);
    $("#Valor").val(valor);  
}

function actualizarmodalmat(){
  actualizar();
  tmatriculas();
}

function tmatriculas(){
   var ruta = "";
   var id_html = "";
   ruta=url+cmatriculas+"tmatriculas";
   id_html = "tmatriculas";
    
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
   tmatriculas();

});


$(document).ready(function(){
 $("#form_buscarMat").keyup(function(){
 _this = this;
 // Show only matching TR, hide rest of them


 $.each($("#tmatriculas tbody tr"), function() {
 if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
 $(this).hide();
 else
 $(this).show();
 });
 });
});

function cambiarestado(){

     let identificacion = $("#Identificacion").val();
     console.log(identificacion)

     ruta = url + cmatriculas + 'cambiarestado';
     $.ajax({

     'url'  : ruta, 
     'type' : 'POST',
     'data' : {
          'documento' : identificacion
     },
     success :  function(data){

     } 
 
    })
}
     
function cambiarestadoAcu(){

     let identificacion1 = $("#Identificacion1").val();
     console.log(identificacion1)

     ruta = url + cmatriculas + 'cambiarestadoAcu';
     $.ajax({

     'url'  : ruta, 
     'type' : 'POST',
     'data' : {
          'documento' : identificacion1
     },
     success :  function(data){

     } 
 
    })
}
        
function EliminarestadoEst(){

     let identificacion = $("#Identificacion").val();
     console.log(identificacion)

     ruta = url + cmatriculas + 'EliminarestadoEst';
     $.ajax({

     'url'  : ruta, 
     'type' : 'POST',
     'data' : {
          'documento' : identificacion
     },
     success :  function(data){

     } 
 
    })
}

function EliminarestadoAcu(){

     let identificacion1 = $("#Identificacion1").val();
     console.log(identificacion1)

     ruta = url + cmatriculas + 'EliminarestadoAcu';
     $.ajax({

     'url'  : ruta, 
     'type' : 'POST',
     'data' : {
          'documento' : identificacion1
     },
     success :  function(data){

     } 
 
    })
}


function eliminar() {
numero_doc_Es = $("#Identificacion").val();
estado = "Inactivo";
ruta="";

ruta = url + cmatriculas + 'eliminar';
$.ajax({
'url'  : ruta,
        'data' : {
        'numero_doc_Es': numero_doc_Es,
        'estado': estado
        },
        'type' : 'POST',
        'statusCode': {
            404: function() {
              alertify.error("La Ruta de la pagina no es la correcta" );
            }
          }
    }).done(function( data ) {
    
        if(data == 0){
           EliminarestadoEst();
           EliminarestadoAcu();          
           cargar_tabla();
           tmatriculas();
           
              Swal.fire({
           icon: 'success',
            title: 'Matricula eliminada con exito!!',
            showConfirmButton: false,
            timer: 900
          })
          limpiar();
        }else{
           Swal.fire(
             'Error al eliminar, Intenta nuevamente!!',
             '',
             'error')
        }
            
}).fail(function() {
   alertify.error( "error" );
})
}

function actualizarEst(){
  var nombre = "";
  var apellidos = "";
  var identificacion = 0;

  nombre = $("#Nombres").val();
  apellidos = $("#Apellidos").val();
  identificacion = $("#Identificacion").val();

   ruta = url + cmatriculas + 'actualizarEst';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'nombres': nombre , 
                    'apellidos': apellidos,
                    'identificacion': identificacion
                    
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
            tmatriculas();
            cargar_tabla();
             
        
        }else{
          
        }
            
  }).fail(function() {
     
  })

}

function actualizarAcu(){
  var nombre = "";
  var apellidos = "";
  var identificacion = 0;

  nombre = $("#Nombres1").val();
  apellidos = $("#Apellidos1").val();
  identificacion = $("#Identificacion1").val();

   ruta = url + cmatriculas + 'actualizarAcu';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'nombres': nombre , 
                    'apellidos': apellidos,
                    'identificacion': identificacion
                    
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
            tmatriculas();
            cargar_tabla();
             
        
        }else{
          
        }
            
  }).fail(function() {
     
  })

}

function actualizarPago(){
  var nombre = "";
  var apellidos = "";
  var nombre1 = "";
  var apellidos1 = "";


  nombre = $("#Nombres").val();
  apellidos = $("#Apellidos").val();
  identificacion = $("#Identificacion").val();  
 


   ruta = url + cmatriculas + 'actualizarPago';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'nombres': nombre , 
                    'apellidos': apellidos,
                    'identificacion': identificacion                  
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
            tmatriculas();
            cargar_tabla();
             
        
        }else{
          
        }
            
  }).fail(function() {
     
  })

}




