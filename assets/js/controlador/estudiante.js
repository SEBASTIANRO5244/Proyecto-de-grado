 $(document).on("click", "#New_est", function () {
  $(".modal-title").html("Nuevo");

  $("#Guardar").show();
  $("#Cerrar").show();
  $("#Actualizar_est").hide();
  //$("#exampleModal").modal();
});

  $(document).on("click", "#Actualizar_est1", function () {
  $(".modal-title").html("Editar");
  
  $("#Guardar").hide();
  $("#Cerrar").show();
  $("#Actualizar_est").show();
  //$("#exampleModal").modal();
});

function val_id_est() {
  // body...
  var acum= 0;
  var identificacion = 0;  
  var ruta = "";
  identificacion = document.getElementById("Identificacion").value;

  if(!identificacion){
  
   acum++;
}

if(acum<1){

  ruta = url + cestudiantes + 'val_id_est';
  
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
        Swal.fire(
          '¡Este estudiante ya está registrado!',
          '',
          'error')
      }else{
        guardar();
      } 
})
}else{
  Swal.fire(
   'Error, campos vacios',
   '',
   'error')
} 
}

function guardar() {
	// body...

    var acum = 0;
	  var nombres = "";
	  var apellidos = "";
    var genero ="";
    var fecha_nac="";
    var lugar_nac="";
    var identificacion = 0;
    var tipo_identificacion="";
    var direccion = "";
    var eps="";
    var estado="Inactivo";
    var ruta = "";

    
    nombres = document.getElementById("Nombres").value;
    apellidos = document.getElementById("Apellidos").value;
    genero = document.getElementById("Genero").value;
    fecha_nac = document.getElementById("Fecha_Nac").value;
    lugar_nac =	 document.getElementById("Lugar_Nac").value;	
	  identificacion =  document.getElementById("Identificacion").value;
    tipo_identificacion =  document.getElementById("Tipo").value;
    direccion =  document.getElementById("Direccion").value;
    eps =  document.getElementById("Eps").value;

    if(!nombres||!apellidos||!genero||!identificacion||!tipo_identificacion||!fecha_nac||!direccion||!lugar_nac||!eps){
    
     acum++;
 }

 if(acum<1){
    ruta = url + cestudiantes + 'guardar';
	
	$.ajax({
        'url'  : ruta,
        'data' : {

        			      'nombres': nombres ,
        	 		      'apellidos': apellidos,
                    'genero': genero,
                    'fecha_nac': fecha_nac,
                    'lugar_nac': lugar_nac,
                    'identificacion': identificacion,
                    'tipo_identificacion': tipo_identificacion,
                    'direccion': direccion,
                    'eps': eps,
                    'estado' : estado

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
            testudiante();
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
             'Error, el numero documento del estudiante ya existe',
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

$('.input-direccion').on('input', function () {
  this.value = this.value.replace(/[^-a-zA-Z0-9# ]/g,'');
});


function limpiar(){
    $("#Nombres").val("");
    $("#Apellidos").val("");
    $("#Genero").val("Seleccione");
    $("#Fecha_Nac").val(""); 
    $("#Lugar_Nac").val("");
    $("#Identificacion").val("");
    $("#Tipo").val("Seleccione");
    $("#Direccion").val("");
    $("#Eps").val("");  
}

function testudiante(){
   var ruta = "";
   var id_html = "";
   ruta=url+cestudiantes+"testudiante";
   id_html = "testudiante";
    
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
   testudiante();

});

 
function actualizar() {
    // body...
    var acum = 0;
    var id = "";
    var nombres = "";
    var apellidos = "";
    var genero ="";
    var fecha_nac="";
    var lugar_nac="";
    var identificacion = 0;
    var tipo_identificacion="";
    var direccion = "";
    var eps="";
    var ruta = "";

    
    id = $("#Id_est").val();
    nombres = document.getElementById("Nombres").value;
    apellidos = document.getElementById("Apellidos").value;
    genero = document.getElementById("Genero").value;
    fecha_nac = document.getElementById("Fecha_Nac").value;
    lugar_nac =  document.getElementById("Lugar_Nac").value;  
    identificacion =  document.getElementById("Identificacion").value;
    tipo_identificacion =  document.getElementById("Tipo").value;
    direccion =  document.getElementById("Direccion").value;
    eps =  document.getElementById("Eps").value;

    if(!nombres||!apellidos||!genero||!identificacion||!tipo_identificacion||!fecha_nac||!direccion||!lugar_nac||!eps){
    
     acum++;
 }

 if(acum<1){
     
    ruta = url + cestudiantes + 'actualizar';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'id': id , 
                    'nombres': nombres ,
                    'apellidos': apellidos,
                    'genero': genero,
                    'fecha_nac': fecha_nac,
                    'lugar_nac': lugar_nac,
                    'identificacion': identificacion,
                    'tipo_identificacion': tipo_identificacion,
                    'direccion': direccion,
                    'eps': eps
                    
         },
        'type' : 'POST',
        'statusCode': {
            404: function() {
             alertify.error("La Ruta de la pagina no es la correcta" );
           }
          }
    }).done(function( data ) {
        if(data == 1){
            actualizarMat();
            limpiar();
            testudiante();
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

function cargarmodalest(id, nombre, apellido, genero, fecha_nacimiento, lugar_nacimiento, 
    numero_documento, tipo_documento, direccion, eps, estado){
 $("#Id_est").val(id);
 $("#Nombres").val(nombre);
 $("#Apellidos").val(apellido);
 $("#Genero").val(genero);
 $("#Fecha_Nac").val(fecha_nacimiento);
 $("#Lugar_Nac").val(lugar_nacimiento);
 $("#Identificacion").val(numero_documento);
 $("#Tipo").val(tipo_documento);
 $("#Direccion").val(direccion);
 $("#Eps").val(eps);
 $("#Estado_est").val(estado);
}

function cargarestadoform(estado){
 $("#Estado_est").val(estado);   
}


function actualizarmodalest(){
  actualizar();
  testudiante();
}

function actualizarmodalacu(){
  actualizar();
  tacudiente();
}

//BUSCAR

$(document).ready(function(){
 $("#form_buscarEst").keyup(function(){
 _this = this;
 // Show only matching TR, hide rest of them


 $.each($("#testudiante tbody tr"), function() {
 if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
 $(this).hide();
 else
 $(this).show();
 });
 });
});

function actualizarMat(){
  var nombre = "";
  var apellidos = "";
  var identificacion = 0;

  nombre = $("#Nombres").val();
  apellidos = $("#Apellidos").val();
  identificacion = $("#Identificacion").val();

   ruta = url + cestudiantes + 'actualizarMat';
    
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
            testudiante();
            cargar_tabla();
             
        
        }else{
          
        }
            
  }).fail(function() {
     
  })

}