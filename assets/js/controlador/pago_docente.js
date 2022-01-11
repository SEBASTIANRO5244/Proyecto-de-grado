 $(document).on("click", "#New_doc", function () {
  $(".modal-title").html("Nuevo");
  $("#Guardar").show();
  $("#Cerrar").show();
  $("#Actualizar_doc").hide();
  //$("#exampleModal").modal();
});

  $(document).on("click", "#Actualizar_doc1", function () {
  $(".modal-title").html("Editar");
  
  $("#Guardar").hide();
  $("#Cerrar").show();
  $("#Actualizar_doc").show();
  //$("#exampleModal").modal();
});

function guardar() {
    // body...

    var acum = 0;
    var fecha = "";
    var numdoc_docente = "";
    var nombre ="";
    var apellido = 0;
    var valor="";
    var rectora = "";
    var periodo_academico ="";
    var mes_academico ="";

    fecha = document.getElementById("Fecha").value;
    numdoc_docente = document.getElementById("Identificacion").value;
    nombre = document.getElementById("Nombres").value;
    apellido =  document.getElementById("Apellidos").value;
    valor = document.getElementById("Valor").value;
    rectora = document.getElementById("Admin").value;
    periodo_academico =  document.getElementById("Periodo_academico").value;
    mes_academico =  document.getElementById("Mes_academico").value;


    if(!fecha||!numdoc_docente||!apellido||!valor||!rectora||!periodo_academico||!mes_academico){
    
     acum++;
 }

 if(acum<1){



    ruta = url + cpago_docente + 'guardar';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'fecha': fecha ,
                    'numdoc_docente': numdoc_docente,
                    'nombre': nombre,
                    'apellido': apellido,
                    'valor': valor,
                    'rectora': rectora,
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
            tpago_doc();
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
    $("#Fecha").val(""); 
    $("#Admin").val("");
    $("#Identificacion").val("");
    $("#Valor").val("");  
    $("#Periodo_academico").val("");  
    $("#Mes_academico").val("");  
}



function buscarespecifico() {
    // body...
    var acum = 0;
    var identifiacion = 0;  
    var ruta = "";
    identificacion = document.getElementById("Identificacion").value;

    if(!identificacion){
    
     acum++;
 }

 if(acum<1){

    ruta = url + cpago_docente + 'buscarespecifico';
    
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
            $("#Valor").val(obj.respuesta[0].valorContrato);  
            Swal.fire({
           icon: 'success',
            title: 'Documento encontrado con exito!!',
            showConfirmButton: false,
            timer: 900
          })
        }else{
          Swal.fire(
             'Error, numero documento no registrado',
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

function tpago_doc(){
   var ruta = "";
   var id_html = "";
   ruta=url+cpago_docente+"tpago_doc";
   id_html = "tpago_doc";
    
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
   tpago_doc();

});

$(document).ready(function(){
 $("#form_buscarPDoc").keyup(function(){
 _this = this;
 // Show only matching TR, hide rest of them


 $.each($("#tpago_doc tbody tr"), function() {
 if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
 $(this).hide();
 else
 $(this).show();
 });
 });
});


function actualizar() {
    // body...

    var acum = 0;
    var id="";
    var fecha = "";
    var numdoc_docente = "";
    var nombre ="";
    var apellido = 0;
    var valor="";
    var rectora = "";
    var periodo_academico ="";
    var mes_academico ="";

    id = $("#Id").val();
   
    fecha = document.getElementById("Fecha").value;
    numdoc_docente = document.getElementById("Identificacion").value;
    nombre = document.getElementById("Nombres").value;
    apellido =  document.getElementById("Apellidos").value;
    valor = document.getElementById("Valor").value;
    rectora = document.getElementById("Admin").value;
    periodo_academico =  document.getElementById("Periodo_academico").value;
    mes_academico =  document.getElementById("Mes_academico").value;


    if(!fecha||!numdoc_docente||!apellido||!valor||!rectora||!periodo_academico||!mes_academico){
    
     acum++;
 }

 if(acum<1){


    ruta = url + cpago_docente + 'actualizar';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'id': id , 
                    'fecha': fecha ,
                    'numdoc_docente': numdoc_docente,
                    'nombre': nombre,
                    'apellido': apellido,
                    'valor': valor,
                    'rectora': rectora,
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
            actualizarDoc();
            limpiar();
            tpago_doc();
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


function cargarmodalPDoc(id, fecha,  valor, nombre_docente, apellido_docente,
  numDoc_docente, nombre_rectora, mes_academico, periodo_academico){
 
    $("#Id").val(id);
    $("#Nombres").val(nombre_docente);
    $("#Apellidos").val(apellido_docente);
    $("#Fecha").val(fecha); 
    $("#Admin").val(nombre_rectora);
    $("#Identificacion").val(numDoc_docente);
    $("#Valor").val(valor);  
    $("#Periodo_academico").val(periodo_academico);
    $("#Mes_academico").val(mes_academico);
    
}

function actualizarmodalPDoc(){
  actualizar();
  tpago_doc();
}

function actualizarDoc(){
  var nombre = "";
  var apellidos = "";
  var identificacion = 0;


  nombre = $("#Nombres").val();
  apellidos = $("#Apellidos").val();
  identificacion = $("#Identificacion").val();

 


   ruta = url + cpago_docente + 'actualizarDoc';
    
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
            tpago_doc();
            cargar_tabla();
             
        
        }else{
          
        }
            
  }).fail(function() {
     
  })

}

$(document).on('click', '.reportePagoDoc', function(e){
      e.preventDefault();
    let fecha = '';
    let numDocumento = 0;   
    fecha = $(this).parents("tr").find("td").eq(0).text();
    numDocumento = $(this).parents("tr").find("td").eq(1).text();
    numDocumento = numDocumento.trim();
    fecha = fecha.trim();

  viewPdfPago(fecha, numDocumento);

    return false;
})


function viewPdfPago(fecha, documento ){
  let fecha1  = fecha;
  var documento1 = documento; 
     var url = `http://localhost/Proyecto-de-grado/index.php/pago_Docente/${fecha1}/${documento1}`;
    window.open(url, '_blank');
    return false; 
}



