$(document).ready(function() {
    
    function explode(){
      alert("Boom!");
    }
    //setTimeout(explode, 2000);
/*
    $("input, select").live('change', function() {
      
        var listo = "";
        $("input").each(function () {
            if($(this).val() == "" ){
                listo = "todavia";          
            }
        });

        $("select").each(function () {
            if($(this).val() == "" ){
                listo = "todavia";      
            }
        });

        $("file").each(function (i, elem) {
            if($(this).val() == "" ){
                listo = "todavia";
            }
            else{
                alert($(this).val()+' '+$(elem).attr('name'));
            }
        });

        if(listo == ""){
            $("#boton_Guardar").attr("disabled",false);
        }
    });
*/
    $("form").validationEngine('attach',{
        promptPosition : "bottomLeft:-10", 
        scroll: true,
        showOneMessage: true,
        maxErrorsPerField: 1,
        autoHidePrompt: true,
        autoHideDelay: 5000,
    });
    $(".datepicker").datepicker({
    	language: "es",
    	autoclose: true,
    	format: 'yyyy-mm-dd',
    	orientation: "top right",
    	todayHighlight: true
    });
    $("input:file").change(function(){
        $("#inputfile").prop("disabled",true);
        $("#inputfile").val($("input:file").val());
    });
    //Validacion para el campo busqueda: si la busqueda es invalida 
    $("form").on('submit',function(e) {
        if ($("#oculto").val() == 0) {
            e.preventDefault();
            $("#tablabusqueda").empty();
            $("#tablabusqueda").append("<tr><th colspan='2'>Productores</th></tr>");
            $("#tablabusqueda").append("<div class='ErrorContent' >Por favor realice una busqueda valida</div>");
            $("#tablabusqueda").append("<input type='hidden' id='oculto' value='0' >");
            return false;
        }
    });
});
