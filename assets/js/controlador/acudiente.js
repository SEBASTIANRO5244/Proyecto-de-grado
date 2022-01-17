 $(document).on("click", "#New_acu", function () {
  $(".modal-title").html("Nuevo");

  $("#Guardar").show();
  $("#Cerrar").show();
  $("#Actualizar_acu").hide();
  //$("#exampleModal").modal();
});

  $(document).on("click", "#Actualizar_acu1", function () {
  $(".modal-title").html("Editar");
  
  $("#Guardar").hide();
  $("#Cerrar").show();
  $("#Actualizar_acu").show();
  //$("#exampleModal").modal();
});

function val_id_acu() {
  // body...
  var acum= 0;
  var identificacion = 0;  
  var ruta = "";
  identificacion = document.getElementById("Identificacion").value;

  if(!identificacion){
  
   acum++;
}

if(acum<1){

  ruta = url + cacudiente + 'val_id_acu';
  
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
          '¡Este acudiente ya está registrado!',
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
    var identificacion = 0;
    var tipo_identificacion="";
    var direccion = "";
    var Profesion="";
    var telefono="";
    var estado="Inactivo";
    var ruta = "";


nombres = document.getElementById("Nombres").value;
apellidos = document.getElementById("Apellidos").value;
genero = document.getElementById("Genero").value;
identificacion = document.getElementById("Identificacion").value;
tipo_identificacion = document.getElementById("Tipo").value;
telefono = document.getElementById("Telefono").value;
direccion = document.getElementById("Direccion").value;
Profesion = document.getElementById("Profesion").value;
     
     if(!nombres||!apellidos||!genero||!identificacion||!tipo_identificacion||!telefono||!direccion||!Profesion){
	  
     acum++;
 }

 if(acum<1){


    ruta = url + cacudiente + 'guardar';
	
	$.ajax({
        'url'  : ruta,
        'data' : {
        			'nombres': nombres ,
        	 		'apellidos': apellidos,
                    'genero': genero,
                    'identificacion': identificacion,
                    'tipo_identificacion': tipo_identificacion,
                    'direccion': direccion,
                    'Profesion': Profesion,
                    'telefono': telefono,
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
            tacudiente();
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
             'Error, el numero documento del acudiente ya existe',
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
    $("#Telefono").val(""); 
    $("#Profesion").val("");
    $("#Identificacion").val("");
    $("#Tipo").val("Seleccione");
    $("#Direccion").val("");  
}

function tacudiente(){
   var ruta = "";
   var id_html = "";
   ruta=url+cacudiente+"tacudiente";
   id_html = "tacudiente";
    
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
   tacudiente();

});


function actualizar() {
    // body...

    var acum = 0;
    var id="";
    var nombres = "";
    var apellidos = "";
    var genero ="";
    var identificacion = 0;
    var tipo_identificacion="";
    var direccion = "";
    var Profesion="";
    var telefono="";
    var ruta = "";


    id = $("#Id_acu").val();
    nombres = document.getElementById("Nombres").value;
    apellidos = document.getElementById("Apellidos").value;
    genero = document.getElementById("Genero").value;
    identificacion = document.getElementById("Identificacion").value;
    tipo_identificacion = document.getElementById("Tipo").value;
    telefono = document.getElementById("Telefono").value;
    direccion = document.getElementById("Direccion").value;
    Profesion = document.getElementById("Profesion").value;

      if(!nombres||!apellidos||!genero||!identificacion||!tipo_identificacion||!telefono||!direccion||!Profesion){
    
     acum++;
 }

 if(acum<1){


    ruta = url + cacudiente + 'actualizar';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'id': id , 
                    'nombres': nombres ,
                    'apellidos': apellidos,
                    'genero': genero,
                    'identificacion': identificacion,
                    'tipo_identificacion': tipo_identificacion,
                    'direccion': direccion,
                    'Profesion': Profesion,
                    'telefono': telefono
                    
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
            tacudiente();
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

function cargarmodalacu(id, nombre, apellido, genero, numero_documento, tipo_documento, direccion, telefono, profesion){
 
 $("#Id_acu").val(id);
 $("#Nombres").val(nombre);
 $("#Apellidos").val(apellido);
 $("#Genero").val(genero);
 $("#Identificacion").val(numero_documento);
 $("#Tipo").val(tipo_documento);
 $("#Direccion").val(direccion);
 $("#Telefono").val(telefono); 
 $("#Profesion").val(profesion);
}

function actualizarmodalacu(){
  actualizar();
  tacudiente();
}

$(document).ready(function(){
 $("#form_buscarAcu").keyup(function(){
 _this = this;
 // Show only matching TR, hide rest of them


 $.each($("#tacudiente tbody tr"), function() {
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

   ruta = url + cacudiente + 'actualizarMat';
    
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
            tacudiente();
            cargar_tabla();
             
        
        }else{
          
        }
            
  }).fail(function() {
     
  })

}