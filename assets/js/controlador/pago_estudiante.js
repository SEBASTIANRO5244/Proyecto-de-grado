 $(document).on("click", "#New_PEst", function () {
  $(".modal-title").html("Nuevo");

  $("#Guardar").show();
  $("#Cerrar").show();
  $("#ActualizarPEst").hide();
  //$("#exampleModal").modal();
});

  $(document).on("click", "#Actualizar_pension1", function () {
  $(".modal-title").html("Editar");
  
  $("#Guardar").hide();
  $("#Cerrar").show();
  $("#ActualizarPEst").show();
  //$("#exampleModal").modal();
});

function obtener_id_matricula(){
    var identificacion = 0;  
    var ruta = "";
    identificacion = document.getElementById("Identificacion").value;
 
    ruta = url + cpago_estudiante + 'obtener_id_matricula';
    
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
          estado_estudiante = obj.respuesta[0].estado

              $("#Id_matricula").val(obj.respuesta[0].id);
              guardar();
        }else{
           Swal.fire(
             'Error, numero documento no registrado',
             '',
             'error')
        }            
    }).fail(function() {
        alertify.error( "Error" );
    });
}

function guardar() {
    var acum = 0;
    var fecha = "";
    var valor = "";
    var nombres = "";
    var apellidos ="";
    var nombres1 = "";
    var apellidos1="";
    var admin = "";
    var id ="";
    var id_matricula = "";
    var periodo_academico ="";
    var mes_academico ="";

    fecha =  document.getElementById("Fecha").value;
    valor =   document.getElementById("Valor").value;
    nombres =  document.getElementById("Nombres").value;
    apellidos =   document.getElementById("Apellidos").value;
    nombres1 =  document.getElementById("Nombres1").value;
    apellidos1 =   document.getElementById("Apellidos1").value;        
    admin =  document.getElementById("Admin").value;
    id = document.getElementById("Identificacion").value;
    id_matricula = document.getElementById("Id_matricula").value;
    periodo_academico =  document.getElementById("Periodo_academico").value;
    mes_academico =  document.getElementById("Mes_academico").value;


    if(!fecha||!valor||!nombres||!apellidos||!nombres1||!apellidos1||!admin
      ||!id||!periodo_academico||!mes_academico){
    
     acum++;
 }

 if(acum<1){
    ruta = url + cpago_estudiante + 'guardar';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'fecha': fecha,
                    'valor': valor,
                    'admin': admin,
                    'id': id,
                    'id_matricula' : id_matricula,
                    'periodo_academico': periodo_academico,
                    'mes_academico': mes_academico
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
            tpago_est();
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
    $("#Apellidos").val("");
    $("#Nombres1").val("");
    $("#Apellidos1").val("");
    $("#Fecha").val(""); 
    $("#Admin").val("");
    $("#Identificacion").val("");
    $("#Valor").val("");  
    $("#Periodo_academico").val("");  
    $("#Mes_academico").val("");  
    $("#Id_matricula").val("");  
}

function buscarespecifico() {
    // body...

    var acum = 0;
    var identificacion = 0;  
    var ruta = "";
    identificacion = document.getElementById("Identificacion").value;



    if(!identificacion){
    
     acum++;
 }

 if(acum<1){
 
    ruta = url + cpago_estudiante + 'buscarespecifico';
    
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
        var estado_estudiante = "";
        respuesta = '{"respuesta": ['+data+']}';
        obj = JSON.parse(respuesta);
        if (obj.respuesta[0]!=false) {
          estado_estudiante = obj.respuesta[0].estado

            if(estado_estudiante == "Inactivo"){
              Swal.fire(
                '¡Este estudiante no se encuentra matriculado!',
                '',
                'error')
            }else{
              $("#Nombres").val(obj.respuesta[0].nombre_estudiante);
              $("#Apellidos").val(obj.respuesta[0].apellido_estudiante);
              $("#Nombres1").val(obj.respuesta[0].nombre_acudiente);
              $("#Apellidos1").val(obj.respuesta[0].apellido_acudiente);
              $("#Identificacion_acu").val(obj.respuesta[0].fk_numero_documento_acudiente);
              
              Swal.fire({
                icon: 'success',
                title: 'Documento encontrado con exito!!',
                showConfirmButton: false,
                timer: 900
              })
            }
         
        }else{
           Swal.fire(
             'Error, numero documento no registrado',
             '',
             'error')
        }            
    }).fail(function() {
        alertify.error( "Error" );
    });

  }else{
            Swal.fire(
             'Error, campo vacio, digite un documento',
             '', 
             'error')
        }  

}
function tpago_est(){
   var ruta = "";
   var id_html = "";
   ruta=url+cpago_estudiante+"tpago_est";
   id_html = "tpago_est";
    
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
       alertify.error( "Error" );
   })
}

$(document).ready(function(){
   tpago_est();

});

$(document).ready(function(){
 $("#form_buscarPEst").keyup(function(){
 _this = this;
 // Show only matching TR, hide rest of them


 $.each($("#tpago_est tbody tr"), function() {
 if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
 $(this).hide();
 else
 $(this).show();
 });
 });
});

function actualizar() {
    // body...
    var acum=0;
    var id="";
    var fecha = "";
    var valor = "";
    var nombres = "";
    var apellidos ="";
    var nombres1 = "";
    var apellidos1="";
    var admin = "";
    var doc_estudiante ="";
    var id_matricula = "";
    var periodo_academico ="";
    var mes_academico ="";

    id = $("#Id").val();
    fecha = document.getElementById("Fecha").value;
    valor = document.getElementById("Valor").value;
    nombres = document.getElementById("Nombres").value;
    apellidos = document.getElementById("Apellidos").value;
    nombres1 = document.getElementById("Nombres1").value;
    apellidos1 = document.getElementById("Apellidos1").value;        
    admin = document.getElementById("Admin").value;
    doc_estudiante = document.getElementById("Identificacion").value;
    id_matricula = document.getElementById("Id_matricula").value;
    periodo_academico =  document.getElementById("Periodo_academico").value;
    mes_academico =  document.getElementById("Mes_academico").value;


    if(!fecha||!valor||!nombres||!apellidos||!nombres1||!apellidos1||!admin
      ||!doc_estudiante||!periodo_academico||!mes_academico){
    
     acum++;
 }

 if(acum<1){

   
    ruta = url + cpago_estudiante + 'actualizar';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'id': id , 
                    'fecha': fecha,
                    'valor': valor,
                    'admin': admin,
                    'doc_estudiante': doc_estudiante,
                    'id_matricula': id_matricula,
                    'periodo_academico': periodo_academico,
                    'mes_academico': mes_academico
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
           actualizarMat();
           actualizarAcu();
            limpiar();
            tpago_est();
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

function cargarmodalPEst(id, fecha, valor, nombre_estudiante, apellido_estudiante, nombre_acudiente, 
  apellido_acudiente, nombre_admin, fk_id_estudiante, mes_academico, periodo_academico, fk_numero_documento_acudiente){
 
    $("#Id").val(id);
    $("#Fecha").val(fecha); 
    $("#Valor").val(valor);
    $("#Nombres").val(nombre_estudiante);
    $("#Apellidos").val(apellido_estudiante);
    $("#Nombres1").val(nombre_acudiente);
    $("#Apellidos1").val(apellido_acudiente);
    $("#Admin").val(nombre_admin);
    $("#Periodo_academico").val(periodo_academico);
    $("#Mes_academico").val(mes_academico);
    $("#Identificacion").val(fk_id_estudiante);
    $("#Identificacion_acu").val(fk_numero_documento_acudiente);
    
}

function actualizarmodalPEst(){
  actualizar();
  tpago_est();
}

function actualizarMat(){
  var nombre = "";
  var apellidos = "";
  var identificacion=0;
  var nombre1 = "";
  var apellidos1 = "";


  nombre = $("#Nombres").val();
  apellidos = $("#Apellidos").val();
  identificacion = $("#Identificacion").val();  
  nombre1 = $("#Nombres1").val();
  apellidos1 = $("#Apellidos1").val();


   ruta = url + cpago_estudiante + 'actualizarMat';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'nombres': nombre , 
                    'apellidos': apellidos,
                    'identificacion': identificacion,
                    'nombres1': nombre1 , 
                    'apellidos1': apellidos1                    
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
            tpago_est();
            cargar_tabla();

        }else{
          
        }
            
  }).fail(function() {
     
  })

}

function actualizarEst(){
  var nombre = "";
  var apellidos = "";
  var identificacion=0;


  nombre = $("#Nombres").val();
  apellidos = $("#Apellidos").val();
  identificacion = $("#Identificacion").val();  


   ruta = url + cpago_estudiante + 'actualizarEst';
    
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
            tpago_est();
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
  identificacion = $("#Identificacion_acu").val();

   ruta = url + cpago_estudiante + 'actualizarAcu';
    
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

$(document).on('click', '.reportePago', function(e){
      e.preventDefault();
    let fecha = '';
    let id = 0;   
    fecha = $(this).parents("tr").find("td").eq(2).text();
    id = $(this).parents("tr").find("td").eq(1).text();
    id = id.trim();
    fecha = fecha.trim();

  viewPdfPago(fecha, id);

    return false;
})


function viewPdfPago(fecha, id ){
  let fecha1  = fecha;
  var id1 = id; 
     var url = `http://localhost/Proyecto-de-grado/index.php/pension/${fecha1}/${id1}`;
    window.open(url, '_blank');
    return false; 
}

