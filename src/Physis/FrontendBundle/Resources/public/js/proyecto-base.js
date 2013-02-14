jQuery(document).ready(function() {   
    $('#link_ajax').click(function(){        
        
        $("#msg").html("<span class='label label-info'>Cargando...</span>");

        $('#div_carga_con_ajax').load(Routing.generate('carga_con_ajax'), function(){
            $("#msg").html("");
        }); 
        

    });
});