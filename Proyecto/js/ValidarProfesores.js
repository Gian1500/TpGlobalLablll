function ValidarConsulta(){
    
    var dni;

    dni=document.getElementById("dniBusqueda").value;

    if (dni.length===0) {
        alert("Rellene el Campo DNI");
        return false;

    }
    else if (isNaN(dni.length)==true) {
        alert("Utilice Números");
        return false;
    }
    else if (dni.length<8 || dni.length>8) {
        alert("El DNI no puede ser mayor o menor a 8 DIGITOS");
        return false;
    }
}

function ValidarNotas(){
    var nombre,mat,len,soc,ing,nat,fis,inf;

    nombre=document.getElementById("nombre").value;
    mat=document.getElementById("mat").value;
    len=document.getElementById("len").value;
    soc=document.getElementById("soc").value;
    ing=document.getElementById("ing").value;
    nat=document.getElementById("nat").value;
    fis=document.getElementById("fis").value;
    inf=document.getElementById("inf").value;

    
    

    if (nombre.length==="" || mat.length===0 || len.length===0 || soc.length===0 || ing.length===0 || nat.length===0 || fis.inf===0) {
        alert("Todos los campos deben estar COMPLETOS");
        return false;
    }

    else if (mat==0 || mat<=11 || len==0 || len<=11 || soc==0 || soc<=11 || ing==0 || ing<=11 || nat==0 || nat<=11 || fis==0 || fis<=11 || inf==0 || inf<=11){

        alert("Las notas no pueden ser iguales a 0 o tener mas de 10");
        return false;
    }
    else if(nombre.length>80){
        alert("Te has excedido del máximo de caracteres (45 caracteres)");
        return false;
    }
    else if(isNaN(mat,len,soc,ing,nat,fis,inf)==true){
        alert("Se han ingresado caracteres en vez de números COMPRUEBE!");
        return false;
    }
}

function ValidarEliminar(){
    
    var dni;

    dni=document.getElementById("dniEliminar").value;

    if (dni.length===0) {
        alert("Rellene el Campo DNI");
        return false;

    }
    else if (isNaN(dni.length)==true) {
        alert("Utilice Números");
        return false;
    }
    else if (dni.length<8 || dni.length>8) {
        alert("El DNI no puede ser mayor o menor a 8 DIGITOS");
        return false;
    }
    alert("Eliminado");
}
