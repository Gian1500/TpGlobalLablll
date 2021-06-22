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
    var autor,dniAutor,archivo,extension;

    autor=document.getElementById("nameTarea").value;
    dniAutor=document.getElementById("dniTarea").value;
    archivo = document.getElementById("tarea").value;
    extension = archivo.substring(archivo.lastIndexOf('.'),archivo.length);

    if(document.getElementById("tarea").getAttribute("accept").split(',').indexOf(extension) < 0) {
        alert('Archivo inválido. No se permite la extensión ' + extension + ' Solo se permiten --> .jpeg,.jpg,.png,.pdf,.doc,.docx,.ppt,.pptx');
        return false;
    }

    else if (autor.length==="" || dniAutor.length===0) {
        alert("Todos los campos deben estar COMPLETOS");
        return false;
    }
    else if (isNaN(dniAutor.length)==true) {
        alert("Utilice Números");
        return false;
    }
    else if (dniAutor.length<8 || dniAutor.length>8) {
        alert("El DNI no puede ser mayor o menor a 8 DIGITOS");
        return false;
    }
    else if(autor.length>80){
        alert("Te has excedido del máximo de caracteres (45 caracteres)");
        return false;
    }
    alert("Tarea Enviada!");
}

