
function ingresar() {
    // body...
    var acum = 0;
    var user = ""; 
    var pass = ""; 
    var ruta = "";
    user = document.getElementById("usuario").value;
    pass = document.getElementById("contraseña").value;
    ruta = url + clogin + 'ingresar';
   
    if(!user||!pass){
      
     acum++;
 }

 if(acum<1){

    $.ajax({
        'url'  : ruta,
        'data' : {
                    'user': user,
                    'pass': pass 
        },
        'type' : 'POST',
        'statusCode': {
            404: function() {
              alertify.error("La Ruta de la pagina no es la correcta" );
            }
          }
    }).done(function( data ) { 

         if(data!= false){
            location.href= url + clogin + "menu";           
            //alertify.success("Dato Encontrado");
        }else{
            alertify.error("Error al buscar");
        }            
    }).fail(function() {
        alertify.error( "Error" );
    });

  }else{
            alertify.error( "Error, campos vacios" );
        }  

}

$(document).on('click', '#cerrarSession', function(e){
       e.preventDefault();
    
        $.ajax({
            url : 'http://localhost/Proyecto-de-grado/' + 'index.php/Clogin/logout',
            success : function(data){
                window.location='http://localhost/Proyecto-de-grado/index.php/clogin';
            }

        })
    })