$(document).ready(function () {
    $("input:submit").click(function () {
        return false;
    });

});
var cont =1;
function agregarOtroAccesorio (){
    if(cont ==7){
        swal("ERROR", "LIMITE DE ACCESORIOS ALCANZADO", "error");
        return false;
    }else{
        cont++;
        var input = '<div class="form-group form-animate-text" style="margin-top:20px !important;" !important;" id="'+cont+'" >\n' +
            '                                <input style="text-transform: uppercase" type="text" class="form-text"   name="validate_firstname itemE[]" required="" aria-required="true" >\n' +
            '                                <span class="bar"></span>\n' +
            '                                <label >ACCESORIO '+cont+' </label>';

        $('#divAccesorios').append(input);
    }

}

function remover(){
    if(cont ==1){
        swal("ERROR", "DEBE EXISTIR POR LO MENOS 1 ACCESORIO", "error");
        return false;
    }

    $('#'+cont).remove();
    cont= cont-1;
}

$('#selectMarcaRegistrarEquipo').on('change',function(){
   var idMarca = document.getElementById('selectMarcaRegistrarEquipo').value;

if(idMarca.trim().length==""){

    $('#modalMarcaNueva').modal({
        show:true,
        backdrop:'static'
    });//FIN ABRIR MODAL
    return false;
}
   var url = '../models/crearSelects.php';
    $.ajax({
        url:url,
        method :"POST",
        data:{idBuscador:idMarca,select:"modelos"},
        success: function (datos) {
            $('#divSelectModelos').html(datos);
            return false;
        }
    });
});

$('#selectModelos').on('change',function () {
    var modelo = document.getElementById('selectModelos').value;
    alert("EJECUTANDO FUNCION");
     if(modelo.trim().length ==""){
         $('#modalModeloNuevo').modal({
             show:true,
             backdrop:'static'
         });//FIN ABRIR MODAL
         return false;
     }

});


$('#modalMarcaNueva').on('hidden.bs.modal', function () {
    document.getElementById('selectMarcaRegistrarEquipo').value= 0;

});

function guardarMarca() {
    var marca1 = $('#inputRegistrarMarca').val();
    var marca = marca1.toUpperCase();


    if(marca1.trim().length ==""){
        swal("ERROR", "CAMPO MARCA VACIO", "error");
        return false;
    }
    var url = '../models/guardarMarcaEquipo.php';
    $.ajax({
        url:url,
        method :"POST",
        data:{phpMarca:marca},
        success: function (datos) {
            //SUCCESS
            if(datos == 1){
                $('#inputRegistrarMarca').val("");
                swal("ERROR", "MARCA YA REGISTRADA", "error");
            }else{
                $('#divSelectMarca').html(datos);
                swal("MARCA", "REGISTRADA EXITOSAMENTE", "success");
                $('#inputRegistrarMarca').val("");
                $('#modalMarcaNueva').modal('toggle');
            }
            return false;
        }
    });
}

function  guardarEquipoDemo(){
    alert("RECOGIENDO DATOS PARA GUARDAR EQUIPO DEMO");
}
