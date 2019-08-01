$(document).ready(function () {

    $("#finalizar").click(function (e) { 
        var cont = $('#pss').val();
        var cont2 = $('#pss_validado').val(); 
        if(($("#usuario").val()=='')){
            alert('El campo usuario se encuentra vacío.'); 
            return false;
        }
        if(($("#pss").val()=='')){
            alert('El campo contraseña se encuentra vacío.'); 
            return false;
        }
        if(($("#pss_validado").val()=='')){
            alert('Valide las contraseñas.'); 
            return false;
        }
        if(($("#correo").val()=='')){
            alert('El campo correo se encuentra vacío.'); 
            return false;
        }
        if(($("#nombre").val()=='')){
            alert('El campo nombre se encuentra vacío.'); 
            return false;
        }
        if(($("#apellidop").val()=='')){
            alert('El campo apellido paterno se encuentra vacío.'); 
            return false;
        }
        if(($("#apellidom").val()=='')){
            alert('El campo apellido materno se encuentra vacío.'); 
            return false;
        }
        if(($("#rfc").val()=='')){
            alert('El campo RFC se encuentra vacío.'); 
            return false;
        }
        if(($("#fechana").val()=='')){
            alert('El campo fecha de nacimiento se encuentra vacío.'); 
            return false;
        }
        if(cont != cont2){
            alert("Las contraseñas no coinciden.");
            return false;
        }
    });
});