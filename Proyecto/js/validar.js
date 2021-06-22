function validar(){

    var nombre,apellido,correo,dni,telefono;

    nombre=document.getElementById("nombre").value;
    apellido=document.getElementById("apellido").value;
    correo=document.getElementById("email").value;
    dni=document.getElementById("dni").value;
    telefono=document.getElementById("tel").value;

    if(nombre==="" || apellido==="" || correo===""  || dni==="" || telefono===""){
        alert("Todos los campos deben estar COMPLETOS");
        return false;
    }

    else if(nombre.length>45){
        alert("Te has excedido del máximo de caracteres (45 caracteres)");
        return false;
    }
    else if(apellido.length>45){
        alert("Te has excedido del máximo de caracteres (45 caracteres)");
        return false;
    }
    else if(correo.length>100){
        alert("Te has excedido del máximo de caracteres (100 caracteres)");
        return false;
    }

    else if(isNaN(telefono)){
        alert("Se han ingresado caracteres en vez de números COMPRUEBE!");
        return false;
    }

    else if(telefono.length>10){
        alert("Recuerda poner tu número de teléfono sin 0 ni 15");
        return false;
    }

    else if(telefono.length<10){
        alert("Revisa el campo TELEFONO");
        return false;
    }

   
    else if(dni.length>8 || dni.length<8){
        alert("Comprueba tu DNI");
        return false;
    }



    alert("DATOS ENVIADOS CORRECTAMENTE!");
}