 $(document).on("click", "#New_curso", function () {
  $(".modal-title").html("Nuevo Curso");

  $("#Guardar").show();
  $("#Cerrar").show();
  $("#Actualizar_curso").hide();
  //$("#exampleModal").modal();
});

  $(document).on("click", "#Actualizar_curso1", function () {
  $(".modal-title").html("Editar Curso");
  
  $("#Guardar").hide();
  $("#Cerrar").show();
  $("#Actualizar_curso").show();
  //$("#exampleModal").modal();
});


function guardar() {
	// body...
    var acum = 0;
	  var nombres = "";
    var ruta = "";

    nombres = document.getElementById("Nombres").value;

     if(!nombres){
     acum++;
 }

 if(acum<1){

    ruta = url + ccurso + 'guardar';
	
	$.ajax({
        'url'  : ruta,
        'data' : {
        			'nombres': nombres
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
            tcursos();
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
  this.value = this.value.replace(/[^a-zA-Z]/g,'');
});

function limpiar(){
    $("#Nombres").val("");  
}

function tcursos(){
   var ruta = "";
   var id_html = "";
   ruta=url+ccurso+"tcurso";
   id_html = "tcurso";
    
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
   tcursos();

});

 

 function actualizar() {
    // body...
  var acum = 0;
  var nombres="";
  var id_cur=0;
  var ruta="";

  id_cur = document.getElementById("Id_curso").value;
  nombres = document.getElementById("Nombres").value;

     if(!nombres||!id_cur){
     acum++;
 }

 if(acum<1){

          ruta = url + ccurso + 'actualizar';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'id': id_cur,
                    'nombre': nombres
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
            tcursos();
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

function cargarmodalcurso(nombre,id){
 $("#Nombres").val(nombre);
 $("#Id_curso").val(id);
}

function actualizarmodalcurso(){
  actualizar();
  tcursos();
}

$(document).ready(function(){
 $("#form_buscar").keyup(function(){
 _this = this;
 // Show only matching TR, hide rest of them


 $.each($("#tcurso tbody tr"), function() {
 if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
 $(this).hide();
 else
 $(this).show();
 });
 });
});


