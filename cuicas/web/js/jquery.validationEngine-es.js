
(function($){
    $.fn.validationEngineLanguage = function(){
    };
    //alert(window.location.pathname/*" action of the {{ get_controller_name() }}"*/);
    var pathname = window.location.pathname; 
    var arr = pathname.split('/');
    //var tam = parseInt(arr.length)-2;
    
    if (arr[parseInt(arr.length)-2] == "registro") {
        var url = "buscarCedula";
        var url1 = "buscarEmail"
    }

    if(arr[parseInt(arr.length)-2] == "perfil"){
            var url = "buscarCedula"
        }

    if(arr[parseInt(arr.length)-2] == "crear"){
            var url2 = "buscarPorNombreEncuesta"
        }
    if(arr[parseInt(arr.length)-2] == "cargarCandidato"){
            var url3 = "buscarPorNombreCandidato/"
        }

    $.validationEngineLanguage = {
        newLang: function(){
            $.validationEngineLanguage.allRules = {
                "required": { // Add your regex rules here, you can take telephone as an example
                    "regex": "none",
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> Los campos obligatorios no pueden estar vacíos",
                    "alertTextCheckboxMultiple": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> Por favor seleccione una opción",
                    "alertTextCheckboxe": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> Debe seleccionar al menos una opción"
                },
                "requiredSelect": {
                    "regex": "none",
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> Debe seleccionar un elemento de la lista"
                },
                "requiredInFunction": { 
                    "func": function(field, rules, i, options){
                        return (field.val() == "test") ? true : false;
                    },
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> Field must equal test"
                },
                "minSize": {
                    "regex": "none",
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> La contraseña debe tener al menos ",
                    "alertText2": " caracteres"
                },
				"groupRequired": {
                    "regex": "none",
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> Debe seleccionar un elemento de la lista"
                },
                "maxSize": {
                    "regex": "none",
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> Máximo de ",
                    "alertText2": " caracteres autorizados"
                },
		        "min": {
                    "regex": "none",
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> El valor mínimo es "
                },
                "max": {
                    "regex": "none",
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> El valor máximo es "
                },
		        "past": {
                    "regex": "none",
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> Fecha anterior a "
                },
                "future": {
                    "regex": "none",
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> Fecha posterior a "
                },	
                "maxCheckbox": {
                    "regex": "none",
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> Se ha excedido el número de opciones permitidas"
                },
                "minCheckbox": {
                    "regex": "none",
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> Por favor seleccione ",
                    "alertText2": " opciones"
                },
                "equals": {
                    "regex": "none",
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> El campo contraseña y confirmar contraseña no coinciden"
                },
                "creditCard": {
                    "regex": "none",
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> La tarjeta de crédito no es válida"
                },
                "phone": {
                    "regex": /^([0-9]{4,4})[\-]([0-9]{7,7})$/,
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> El valor ingresado no es válido, debe cumplir con el formato correspondiente: 0000-0000000 "
                },
                "email": {
                    // Shamelessly lifted from Scott Gonzalez via the Bassistance Validation plugin http://projects.scottsplayground.com/email_address_validation/
                    "regex": /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\ u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i,
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> El valor ingresado no es válido, debe cumplir con el formato correspondiente: correo@electronico.com"
                },
                "integer": {
                    "regex": /^[\-\+]?\d+$/,
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> No es un valor entero válido"
                },
                "number": {
                    // Number, including positive, negative, and floating decimal. credit: orefalo
                    "regex": /^[\-\+]?((([0-9]{1,3})([,][0-9]{3})*)|([0-9]+))?([\.]([0-9]+))?$/,
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> No es un valor decimal válido"
                },
                "date": {
                    "regex": /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/,
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> Fecha inválida, por favor utilize el formato DD/MM/AAAA"
                },
                "ipv4": {
                	"regex": /^((([01]?[0-9]{1,2})|(2[0-4][0-9])|(25[0-5]))[.]){3}(([0-1]?[0-9]{1,2})|(2[0-4][0-9])|(25[0-5]))$/,
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> Direccion IP inválida"
                },
                "url": {
                    "regex": /^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i,
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> Url inválida"
                },
                "areasis": {
                    "regex": /^([N-N]|[W-W])\s([-+]?([0-9]){1,3})[\°][-+]?([0-9]){1,2}[\'][-+]?([0-9]){1,2}[\.][-+]?([0-9]){1,3}[\"]\s([N-N]|[W-W])\s([-+]?([0-9]){1,3})[\°][-+]?([0-9]){1,2}[\'][-+]?([0-9]){1,2}[\.][-+]?([0-9]){1,3}[\"]$/,
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> La Ubicación Geográfica no es valida, por favor utilize el formato<br>N 5°40'15.2\" W 5°40'15.2\"  "
                },
                "cedula": {
                    "regex": /^([V-V]|[E-E])[\-]([0-9]{7,7}|[0-9]{8,8})$/,
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> El valor ingresado no es válido, debe cumplir con el formato correspondiente:<br>V-00000000 o E-00000000"
                },
                "rif": {
                    "regex": /^([V-V]|[J-J]|[G-G])[\-]([0-9]{8,8}|[0-9]{9,9})$/,
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> Rif inválido, por favor utilize el formato<br>V-00000000, J-00000000 o G-00000001"
                },
                "delunoalcinco": {
                    "regex": /^([1-5]{1,1})$/,
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> Solo se permite un caracter con rango del 1 al 5"
                },
                "aesubcategoria": {
                    "regex": /^[0-9a-zA-Zñ-ñÑ-Ñ áéíóó ÁÉÍÓÚ\ \,\-\(\)\.\/]+$/,
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> El valor ingresado no es válido,  solo se permiten caracteres alfanuméricos o los siguientes carácteres especiales  \(\, - () . \)\ "
                },
                "aeempresas": {
                    "regex": /^[0-9a-zA-Zñ-ñÑ-Ñ\ \,\(\)\&\"\.]+$/,
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> El valor ingresado no es válido, solo se permiten los siguientes caracteres especiales: ,  () & \"\" . "
                },
                 "aenombreproceso": {
                    "regex": /^[0-9a-zA-Zñ-ñÑ-Ñ\s]+$/,
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> El valor ingresado no es válido, solo se permitecaracter especial guion: (-)"
                },
                "aesubcda": {
                    "regex": /^[0-9a-zA-Zñ-ñÑ-Ñ\s\-]+$/,
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> El valor ingresado no es válido, caracter especial guion: (-) "
                },
                "aefamiliarubro": {
                    "regex": /^([0-9a-zA-Zñ-ñÑ-Ñ])([0-9a-zA-Zñ-ñÑ-Ñ\ \,])+([0-9a-zA-Zñ-ñÑ-Ñ])$/,
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> El valor ingresado no es válido, solo se permiten letras o carácter especial coma \(,\)\  "
                },
                "aealianzaduracion": {
                    "regex": /^[0-9a-zA-Zñ-ñÑ-Ñ\ ]+$/,
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> El valor ingresado no es válido, solo se permiten caracteres alfanumericos"
                },
                "aealianza": {
                    "regex": /^[0-9a-zA-Zñ-ñÑ-Ñ\-]+$/,
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> El valor ingresado no es válido, solo se permite caracter especial guion: (-) "
                },
                "aealcance": {
                    "regex": /^[0-9a-zA-Zñ-ñÑ-Ñ áéíóú ÁÉÍÓÚ\s]+$/,
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> El valor ingresado no es válido, sólo se permiten caracteres alfanuméricos"
                },
                "onlyNumberSp": {
                    "regex": /^[0-9\ ]+$/,
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> El valor ingresado no es válido, sólo se permiten números enteros"
                },
			    "onlyLetterSp": {
                    "regex": /^[a-zA-Z\ \']+$/,
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> El valor ingresado no es válido, sólo se permiten caracteres alfabeticos"
                },
				"onlyLetterAccentSp":{
                    "regex": /^[a-z áéíóú]+$/i,
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> El valor ingresado no es válido, sólo se permiten caracteres alfabeticos"
                },
                "onlyLetterNumber": {
                    "regex": /^[0-9a-zA-Zñ-ñÑ-Ñ]+$/,
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> El valor ingresado no es válido, sólo se permiten caracteres alfabeticos"
                },
				// --- CUSTOM RULES -- Those are specific to the demos, they can be removed or changed to your likings
                /*"ajaxUserCall": {
                    "url": "ajaxValidateFieldUser",
					// you may want to pass extra data on the ajax call
                    "extraData": "name=eric",
                    "alertTextLoad": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> Cargando, espere por favor",
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> Este nombre de usuario ya se encuentra usado"
                },*/
                "ajaxUserCall": {                    
                    "url": url,
                    //"alertTextOk": "All good!",
                    "alertTextLoad": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> Buscando, espere por favor",
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> La cédula ya ha sido registrada"
                },

                "ajaxEmailCall": {                    
                    "url": url1,
                    //"alertTextOk": "All good!",
                    "alertTextLoad": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> Buscando, espere por favor",
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> El correo electrónico ya se encuestra registrado"
                },

                "ajaxNombreCall": {                    
                    "url": url2,
                    //"alertTextOk": "All good!",
                    "alertTextLoad": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> Buscando, espere por favor",
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> El nombre de la encuesta ya esta registrado"
                },

                "ajaxNombreCandidatoCall": {                    
                    "url": url3,
                    //"alertTextOk": "All good!",
                    "alertTextLoad": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> Buscando, espere por favor",
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> El nombre del candidato ya esta registrado"
                },

                "ajaxNameCall": {
					// remote json service location
                    "url": "ajaxValidateFieldName",
					// error
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> Este nombre ya se encuentra usado",
					// if you provide an "alertTextOk", it will show as a green prompt when the field validates
                    "alertTextOk": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> Este nombre está disponible",
					// speaks by itself
                    "alertTextLoad": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> Cargando, espere por favor"
                },
                "validate2fields": {
                    "alertText": "<i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></i> Por favor entrar HELLO"
                }
            };
            
        }
    };
    $.validationEngineLanguage.newLang();
})(jQuery);
