$(function(){
     
    $("select[name=estado]").change(function(){
 
        estado = $(this).val();
         
        if ( estado === '')
            return false;
         
        resetaCombo('municipio');
             
        $.getJSON( path + 'registro_datos/getmunicipios/' + estado, function (data){
        	
            var option = new Array();
 
            $.each(data, function(i, obj){
                option[i] = document.createElement('option');
                $( option[i] ).attr( {value : obj.id} );
                $( option[i] ).append( obj.nombre_municipio );
 
                $("select[name='municipio']").append( option[i] );
         
            });
     
        });
     
    });
    
    $("select[name=municipio]").change(function(){
    	 
        municipio = $(this).val();
         
        if ( municipio === '')
            return false;
         
        resetaCombo('parroquia');
             
        $.getJSON( path + 'registro_datos/getparroquias/' + municipio, function (data){
        	
            var option = new Array();
 
            $.each(data, function(i, obj){
                option[i] = document.createElement('option');
                $( option[i] ).attr( {value : obj.id} );
                $( option[i] ).append( obj.nombre_parroquia );
 
                $("select[name='parroquia']").append( option[i] );
         
            });
     
        });
     
    });
 
});
 
function resetaCombo( el ) {
   $("select[name='"+el+"']").empty();
   var option = document.createElement('option');                                 
   $( option ).attr( {value : ''} );
   $( option ).append( 'Seleccione' );
   $("select[name='"+el+"']").append( option );
}