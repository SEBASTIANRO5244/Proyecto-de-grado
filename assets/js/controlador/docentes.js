 $(document).on("click", "#New_doc", function () {
  $(".modal-title").html("Nuevo");

  $("#Guardar").show();
  $("#Cerrar").show();
  $("#Actualizar_doc").hide();
  $("#Eliminar_doc").hide();
  //$("#exampleModal").modal();
});

  $(document).on("click", "#Actualizar_doc1", function () {
  $(".modal-title").html("Editar");
  
  $("#Guardar").hide();
  $("#Cerrar").show();
  $("#Actualizar_doc").show();
  $("#Eliminar_doc").hide();
  //$("#exampleModal").modal();
});

$(document).on("click", "#Eliminar_doc1", function () {
  $(".modal-title").html("Eliminar");
  
  $("#Guardar").hide();
  $("#Cerrar").show();
  $("#Actualizar_doc").hide();
  $("#Eliminar_doc").show();
  //$("#exampleModal").modal();
});

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
    var contrato="";
    var valor="";
    var estado="Activo";
    var ruta = "";


    nombres = document.getElementById("Nombres").value;
    apellidos = document.getElementById("Apellidos").value;
    genero = document.getElementById("Genero").value;
    identificacion = document.getElementById("Identificacion").value;
    tipo_identificacion = document.getElementById("Tipo").value;
    telefono = document.getElementById("Telefono").value;
    contrato = document.getElementById("Contrato").value;
    valor = document.getElementById("ValorContrato").value;
    direccion = document.getElementById("Direccion").value;
    Profesion = document.getElementById("Profesion").value;

if(!nombres||!apellidos||!genero||!identificacion||!tipo_identificacion||!telefono||!contrato||!valor||!direccion||!Profesion){
    
     acum++;
 }

 if(acum<1){


    ruta = url + cdocentes + 'guardar';
	
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
                    'contrato' : contrato,
                    'valor' : valor,
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
            limpiar();
            tdocente();
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
    $("#Contrato").val("Seleccione");
    $("#ValorContrato").val("");
    $("#Direccion").val("");  
}

function tdocente(){
   var ruta = "";
   var id_html = "";
   ruta=url+cdocentes+"tdocente";
   id_html = "tdocente";
    
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
   tdocente();

});

function actualizar() {
    // body...

    var acum= 0;
    var id="";
    var nombres = "";
    var apellidos = "";
    var genero ="";
    var identificacion = 0;
    var tipo_identificacion="";
    var direccion = "";
    var Profesion="";
    var telefono="";
    var contrato="";
    var valor="";
    var ruta = "";

    id = $("#Id_doc").val();
    nombres = document.getElementById("Nombres").value;
    apellidos = document.getElementById("Apellidos").value;
    genero = document.getElementById("Genero").value;
    identificacion = document.getElementById("Identificacion").value;
    tipo_identificacion = document.getElementById("Tipo").value;
    telefono = document.getElementById("Telefono").value;
    direccion = document.getElementById("Direccion").value;
    Profesion = document.getElementById("Profesion").value;
    contrato = document.getElementById("Contrato").value;
    valor = document.getElementById("ValorContrato").value;


if(!nombres||!apellidos||!genero||!identificacion||!tipo_identificacion||!telefono||!direccion||!Profesion||!contrato||!valor){
    
     acum++;
 }

 if(acum<1){

   
    ruta = url + cdocentes + 'actualizar';
    
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
                    'telefono': telefono,
                     'contrato' : contrato,
                    'valor' : valor
                    
         },
        'type' : 'POST',
        'statusCode': {
            404: function() {
             alertify.error("La Ruta de la pagina no es la correcta" );
           }
          }
    }).done(function( data ) {
        if(data == 1){
            actualizarPago();
            limpiar();
            tdocente();
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

function cargarmodaldoc(id, nombre, apellido, genero, numero_documento, tipo_documento, direccion, telefono, profesion, contrato, valorContrato){
 
 $("#Id_doc").val(id);
 $("#Nombres").val(nombre);
 $("#Apellidos").val(apellido);
 $("#Genero").val(genero);
 $("#Identificacion").val(numero_documento);
 $("#Tipo").val(tipo_documento);
 $("#Direccion").val(direccion);
 $("#Telefono").val(telefono); 
 $("#Profesion").val(profesion);
 $("#Contrato").val(contrato);
 $("#ValorContrato").val(valorContrato);
}

function actualizarmodaldoc(){
  actualizar();
  tdocente();
}

$(document).ready(function(){
 $("#form_buscarDoc").keyup(function(){
 _this = this;
 // Show only matching TR, hide rest of them


 $.each($("#tdocente tbody tr"), function() {
 if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
 $(this).hide();
 else
 $(this).show();
 });
 });
});

function eliminar() {
    // body...
    var id = 0;
    var estado = "Inactivo";
 
    
    id = $("#Id_doc").val();
        
    ruta = url + cdocentes + 'eliminar';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'id': id,
                    'estado': estado
        },
        'type' : 'POST',
            'statusCode': {
                404: function() {
        alertify.error("La Ruta de la pagina no es la correcta" );
                }  
            }
        }).done (function(data) {
            limpiar();
            tdocente();
            cargar_tabla();
        }).fail(function() {
           
        })
    
    }


function eliminarmodaldocente() {
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

       Swal.fire({
           icon: 'error',
            title: 'Datos eliminados con exito!!',
            showConfirmButton: false,
            timer: 900
          })
      eliminar();
      tdocente();
    }
  })

}

function actualizarPago(){
  var nombre = "";
  var apellidos = "";
  var identificacion = 0;


  nombre = $("#Nombres").val();
  apellidos = $("#Apellidos").val();
  identificacion = $("#Identificacion").val();  
 


   ruta = url + cdocentes + 'actualizarPago';
    
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
            tdocente();
            cargar_tabla();
             
        
        }else{
          
        }
            
  }).fail(function() {
     
  })

}
