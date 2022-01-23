$( document ).ready(function() {
    buscarespecifico();
});

function buscarespecifico(){
    var id_col = 0;  
    var ruta = "";
    id_col = document.getElementById("Id_col").value;

    ruta = url + cmenu + 'buscarespecifico';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'id_col': id_col 
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
            document.getElementById("Titulo").innerHTML = "¡Bienvenido, "+obj.respuesta[0].nombre_colegio+"!";    
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
}

  