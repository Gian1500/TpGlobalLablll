$("#mostrar").click(function(){
    
    $.ajax({url: "php/listar_tarea.php",success: function(result){
        $("#tablaTareas").html(result);

    }});

    
});


function pagina(pagina){
    
    $.ajax({url: "php/listar_tarea.php?p="+pagina ,success: function(result){
        $("#tablaTareas").html(result);
    }});

};

