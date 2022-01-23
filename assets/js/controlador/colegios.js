 $(document).on("click", "#New_colegio", function () {
  $(".modal-title").html("Nuevo Colegio");
  limpiar();
  $("#Guardar").show();
  $("#Cerrar").show();
  $("#Actualizar_colegio").hide();
  //$("#exampleModal").modal();
});

  $(document).on("click", "#Actualizar_colegio1", function () {
  $(".modal-title").html("Editar Colegio");
  
  $("#Guardar").hide();
  $("#Cerrar").show();
  $("#Actualizar_colegio").show();
  //$("#exampleModal").modal();
});

function Validar_Dane() {
  // body...
  var acum= 0;
  var dane_colegio = 0;  
  var ruta = "";
  dane_colegio = document.getElementById("DANE_colegios").value;

  if(!dane_colegio){
  
   acum++;
}

if(acum<1){

  ruta = url + ccolegios + 'Validar_Dane';
  
  $.ajax({
      'url'  : ruta,
      'data' : {
                  'dane_colegio': dane_colegio 
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
          '¡Este Colegio ya está registrado!',
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
    var dane = "";
	var nombre_colegio = "";
    var ruta = "";

    dane = document.getElementById("DANE_colegios").value;
    nombre_colegio = document.getElementById("Nombre_Colegio").value;

     if(!nombre_colegio||!dane){
     acum++;
 }

 if(acum<1){

    ruta = url + ccolegios + 'guardar';
	
	$.ajax({
        'url'  : ruta,
        'data' : {

        			'dane': dane,
                    'nombre_colegio': nombre_colegio
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
            tcolegios();
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


function limpiar(){
    $("#DANE_colegios").val("");
    $("#Nombre_Colegio").val("");  
}


$('.input-letter').on('input', function () {
  this.value = this.value.replace(/[^a-zA-Z -]/g,'');
});

function tcolegios(){
   var ruta = "";
   var id_html = "";
   ruta=url+ccolegios+"tcolegios";
   id_html = "tcolegios";
    
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
  tcolegios();
});

 
 function actualizar() {
    // body...
  var acum = 0;
  var id_colegio = "";
  var nombre_colegio="";
  var dane= "";
  var ruta="";

  
  id_colegio = $("#Id_Colegio").val();
  dane = document.getElementById("DANE_colegios").value;
  nombre_colegio = document.getElementById("Nombre_Colegio").value;

     if(!nombre_colegio||!dane){
     acum++;
 }

 if(acum<1){

          ruta = url + ccolegios + 'actualizar';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'id_colegio': id_colegio,
                    'dane': dane,
                    'nombre_colegio': nombre_colegio
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
            tcolegios();
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

function cargarmodalcolegios(id_colegio,nombre_colegio,dane_colegio){
 $("#Id_Colegio").val(id_colegio);
 $("#DANE_colegios").val(dane_colegio);
 $("#Nombre_Colegio").val(nombre_colegio);
}

function actualizarmodalcolegio(){
  actualizar();
  tcolegios();
}

$(document).ready(function(){
 $("#form_buscar").keyup(function(){
 _this = this;
 // Show only matching TR, hide rest of them


 $.each($("#tcolegios tbody tr"), function() {
 if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
 $(this).hide();
 else
 $(this).show();
 });
 });
});


