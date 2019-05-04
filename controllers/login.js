$(document).ready(function () {
    $("input:submit").click(function () {
        return false;
    });

});

function login(){
    var usuario = $('#inputUsuario').val();
    var password = $('#inputPassword').val();

 if(usuario.trim().length==""){
     swal("ERROR", "USUARIO VACIO", "error");
     return  false;
 }else{
     if(password.trim().length==""){
         swal("ERROR", "PASSWORD VACIO", "error");
         return false;
     }
 }//FIN

var url ='models/login.php';
    $.ajax({
        type:'POST',
        url:url,
        data:{

            phpUsuario:usuario,
            phpPassword:password

        },
        success: function(datos){

            if(datos ==100){
                swal("ERROR", "DATOS ERRONEOS", "error");
                $('#inputUsuario').val("");
                $('#inputPassword').val("");
                return false;
            }else if(datos == 0){
                location.href ='Desarrollo/index.php';
            }else if(datos ==1){
                location.href ='Administrador/index.php';
            }else if(datos ==2){
                location.href='Ventas/index.php';
            }else if(datos ==3){
                location.href ='Taller/index.php';
            }else if(datos ==4){
                location.href = 'Logistica/index.php';
            }

            return false;


        }
    });

    return false;
}

function loginLock (){
    var usuario = $('#inputUsuario').val();
    var password = $('#inputPassword').val();

    if(usuario.trim().length==""){
        swal("ERROR", "USUARIO VACIO", "error");
        return  false;
    }else{
        if(password.trim().length==""){
            swal("ERROR", "PASSWORD VACIO", "error");
            return false;
        }
    }//FIN

    var url ='models/login.php';
    $.ajax({
        type:'POST',
        url:url,
        data:{

            phpUsuario:usuario,
            phpPassword:password

        },
        success: function(datos){

            if(datos ==100){
                swal("ERROR", "DATOS ERRONEOS", "error");
                $('#inputPassword').val("");
                return false;
            }else if(datos == 0){
                location.href ='Desarrollo/index.php';
            }else if(datos ==1){
                location.href ='Administrador/index.php';
            }else if(datos ==2){
                location.href='Ventas/index.php';
            }else if(datos ==3){
                location.href ='Taller/index.php';
            }else if(datos ==4){
                location.href = 'Logistica/index.php';
            }

            return false;


        }
    });

}