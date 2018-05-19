<?php

/* EncuestasBundle:Encuestas:mostrarDatosComando.html.twig */
class __TwigTemplate_e27d5a4fe8043847dd078db4f63ec8cb73a85fb90f17dcc59dda67687a324894 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "EncuestasBundle:Encuestas:mostrarDatosComando.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titulo' => array($this, 'block_titulo'),
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::frontend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Datos del Encuestado";
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "nombreEncuesta", array()), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 6
        echo "
  <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_datosEncuestaComando", array("id_encuesta" => $this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'enctype');
        echo ">
    ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 9
            echo "      <script language=Javascript>
      \$(document).ready(function(){
        \$(this).tab('show');
        BootstrapDialog.show({
          title: 'Mensaje',
          message: ('";
            // line 14
            echo twig_escape_filter($this->env, $context["mensaje"], "html", null, true);
            echo "'),
          buttons: [{
            id: 'btn-ok',   
            //icon: 'glyphicon glyphicon-check',       
            label: 'Aceptar',
            cssClass: 'btn btn-default',
            autospin: false,
            action: function(dialogRef){    
              dialogRef.close();
            }
          }]
        })
      });
      </script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    ";
        $context["id"] = "";
        // line 30
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results"))));
        foreach ($context['_seq'] as $context["indice"] => $context["llave"]) {
            // line 31
            echo "      ";
            if ((($context["indice"] == 0) && ($context["llave"] == "id_bene_misiones"))) {
                echo " 
        ";
                // line 32
                $context["id"] = $this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "id_bene_misiones", array());
                // line 33
                echo "      ";
            }
            // line 34
            echo "      ";
            if ((($context["indice"] == 0) && ($context["llave"] == "id_clp"))) {
                echo " 
        ";
                // line 35
                $context["id"] = $this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "id_clp", array());
                // line 36
                echo "      ";
            }
            // line 37
            echo "      ";
            if ((($context["indice"] == 0) && ($context["llave"] == "id_militancia"))) {
                echo " 
        ";
                // line 38
                $context["id"] = $this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "id_militancia", array());
                // line 39
                echo "      ";
            }
            // line 40
            echo "      ";
            if ((($context["indice"] == 0) && ($context["llave"] == "id_rep"))) {
                echo " 
        ";
                // line 41
                $context["id"] = $this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "id_rep", array());
                // line 42
                echo "      ";
            }
            // line 43
            echo "      ";
            if ((($context["indice"] == 0) && ($context["llave"] == "id_trab_patria"))) {
                echo " 
        ";
                // line 44
                $context["id"] = $this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "id_trab_patria", array());
                // line 45
                echo "      ";
            }
            // line 46
            echo "      ";
            if ((($context["indice"] == 0) && ($context["llave"] == "id_ubch"))) {
                echo " 
        ";
                // line 47
                $context["id"] = $this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "id_ubch", array());
                // line 48
                echo "      ";
            }
            // line 49
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['indice'], $context['llave'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    <div class=\"col-xs-12 col-md-7 col-md-offset-2\">
      <div class=\"row\">
        <div class=\"col-xs-12\">
          <table class=\"table1 table-striped table-bordered\" id=\"mytable\">
            <thead>
              ";
        // line 55
        if (($this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "area", array()) == "municipio")) {
            // line 56
            echo "                <tr>
                  <td><strong>Municipio</strong></td>
                  <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "identificador", array()), "html", null, true);
            echo "</td>
                  <td ><strong>Tel&eacute;fono</strong></td>
                  <td ><div class=\"editarTelf1\" id=\"";
            // line 60
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "telefono_1", array())), "html", null, true);
            echo "</div></td>
              ";
        }
        // line 62
        echo "              ";
        if (($this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "area", array()) == "circuito")) {
            // line 63
            echo "                  <td><strong>Circuito</strong></td>
                  <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "identificador", array()), "html", null, true);
            echo "</td>
                  <td ><strong>Tel&eacute;fono</strong></td>
                  <td ><div class=\"editarTelf1\" id=\"";
            // line 66
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "telefono_1", array())), "html", null, true);
            echo "</div></td>
                </tr>
              ";
        }
        // line 69
        echo "            </thead> 
          </table><br>
        </div>
      </div>
      </div>
    <div class=\"col-xs-12 col-md-8 col-md-offset-2\" style=\"font-size:17px;\">
      <div style=\"width:750px; height:330px; overflow: auto; position:relative; \">
        <div class=\"row\">
          <div class=\"col-xs-12\">
            ¿Respondieron la llamada?&nbsp;&nbsp; <strong>Si <input type=\"radio\" name=\"form[1]\" class=\"validate[required]\" id=\"resp_1\" value=\"si\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No <input type=\"radio\" name=\"form[1]\" id=\"resp_1\" class=\"validate[required]\" value=\"norespondio\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tel&eacute;fono No Asignado <input type=\"radio\" name=\"form[1]\" id=\"resp_1\" class=\"validate[required]\" value=\"noasignado\"></strong> 
          </div>
        </div><br>
        <div class=\"row\">
          <div class=\"col-xs-12\">
            <div id=\"form_identificacion\" style=\"display: none;\"><strong>1-</strong> Buenos ( días/tarde ) ¿Es usted <strong><b class=\"editarNombres\" style=\"display: inline\" id=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "apellidos_nombres", array()), "html", null, true);
        echo "</b></strong> y su Cédula de Identidad es <strong><b class=\"editarCedula\" style=\"display: inline\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "cedula", array())), "html", null, true);
        echo "</b></strong>?
            </div>
            <div id=\"form_identificacion_resp\" style=\"display: none;\">
              Si <input type=\"radio\" name=\"form[2]\" class=\"validate[required]\" value=\"si\">&nbsp;&nbsp;
              Número Errado <input type=\"radio\" name=\"form[2]\" class=\"validate[required]\" value=\"cambiodenumero\">
            </div>
          </div>
        </div><br>
        <div class=\"row\">
            <div class=\"col-xs-12\">
              <div id=\"form_pregun_3\" style=\"display: none;\">
             <strong>2-</strong> ¿Usted pertenece al <strong>Comando de Campaña</strong> y su Cargo es <strong>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "id_cargo_comando", array()), "html", null, true);
        echo "</strong>?
            </div>
    
            <div id=\"form_pregun_3_resp\" style=\"display: none;\">
              Si <input type=\"radio\" name=\"form[3]\" class=\"validate[required]\" id=\"resp_1\" value=\"si\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No <input type=\"radio\" name=\"form[3]\" id=\"resp_1\" class=\"validate[required]\" value=\"norespondio\">
          </div>
            </div>
        </div><br>
        <div class=\"row\">
          ";
        // line 103
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "getPreguntas", array()), "getPregunta4", array(), "method"))) {
            // line 104
            echo "          <div class=\"col-xs-12\">
              <div id=\"form_pregun_4\" style=\"display: none;\">
                <strong>3-</strong> ";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "getPreguntas", array()), "getPregunta4", array(), "method"), "html", null, true);
            echo "
              </div>
              <div id=\"form_pregun_4_resp\" style=\"display: none;\">
                Si <input type=\"radio\" name=\"form[4]\" value=\"si\">
                &nbsp;&nbsp;&nbsp;&nbsp;No <input type=\"radio\" class=\"validate[required]\" name=\"form[4]\" value=\"no\">
                &nbsp;&nbsp;&nbsp;No sabe <input type=\"radio\" class=\"validate[required]\" name=\"form[4]\" value=\"nosabe\">
                </div>
        </div>
        ";
        }
        // line 115
        echo "        </div><br>
        <div class=\"row\">
          ";
        // line 117
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "getPreguntas", array()), "getPregunta5", array(), "method"))) {
            // line 118
            echo "            <div class=\"col-xs-12\">
              <div id=\"form_pregun_5\" style=\"display: none;\">
                <strong>4-</strong> ";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "getPreguntas", array()), "getPregunta5", array(), "method"), "html", null, true);
            echo "
              </div>
              <div id=\"form_pregun_5_resp\" style=\"display: none;\">
                  Si <input type=\"radio\" name=\"form[5]\" value=\"si\">
                  &nbsp;&nbsp;&nbsp;&nbsp;No <input type=\"radio\" class=\"validate[required]\" name=\"form[5]\" value=\"no\">
                  &nbsp;&nbsp;&nbsp;No sabe <input type=\"radio\" class=\"validate[required]\" name=\"form[5]\" value=\"nosabe\">
              </div>
            </div>
        ";
        }
        // line 129
        echo "        </div>
      </div>
      </div>
    <div class=\"col-xs-12 col-md-12\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <center><input class=\"fueraoverflow2 btn btn-default\" type=\"submit\" onclick=\"return validar()\" value=\"Guardar\" name=\"form[boton_guardar]\" /> <input class=\"fueraoverflow2 btn btn-default\" type=\"submit\" id=\"otro\" value=\"Buscar Otro\" name=\"form[boton_buscar]\" /> <a href=\"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("encuestas_totales", array("tipoEncuesta" => "general"));
        echo "\">
        <input class=\"fueraoverflow2 btn btn-default\" type=\"button\" value=\"Cancelar\" name=\"form[boton_cancelar]\" /></a></center>
        </div>
      </div>
    </div> 
    </div> 
  </form>
<script type=\"text/javascript\">

  \$(document).ready(function(){

    \$('#otro').on( \"click\", function() {
      \$('*[type=\"radio\"]').removeClass( \"validate[required]\" )
    });

    \$( \"#mytable td:even\" ).css( \"background-color\", \"#d0d2d3\" ); 

    \$('*[type=\"radio\"]').click(function(evento){


      if (\$(this).attr(\"name\")==\"form[1]\"){
        if (\$(this).attr(\"value\")==\"si\"){
          \$(\"#form_identificacion\").css(\"display\", \"block\") && \$(\"#form_identificacion_resp\").css(\"display\", \"block\");          
        }

          
        if (\$(this).attr(\"value\")==\"norespondio\"){
          \$('input:radio[name=\"form[2]\"]').attr ('checked',false);
          \$('input:radio[name=\"form[3]\"]').attr ('checked',false);
          \$('input:radio[name=\"form[4]\"]').attr ('checked',false);
          \$('input:radio[name=\"form[5]\"]').attr ('checked',false);
          \$(\"#form_identificacion\").css(\"display\", \"none\") && \$(\"#form_identificacion_resp\").css(\"display\", \"none\") && \$(\"#form_pregun_3\").css(\"display\", \"none\") && \$(\"#form_pregun_3_resp\").css(\"display\", \"none\") && \$(\"#form_pregun_4\").css(\"display\", \"none\") && \$(\"#form_pregun_4_resp\").css(\"display\", \"none\") && \$(\"#form_pregun_5\").css(\"display\", \"none\") && \$(\"#form_pregun_5_resp\").css(\"display\", \"none\");
         
        }
      }

      if (\$(this).attr(\"name\")==\"form[2]\") { 

        if (\$(this).attr(\"value\")==\"si\"){  
           
            \$(\"#form_pregun_3\").css(\"display\", \"block\") && \$(\"#form_pregun_3_resp\").css(\"display\", \"block\") && \$(\"#form_pregun_4\").css(\"display\", \"block\") && \$(\"#form_pregun_4_resp\").css(\"display\", \"block\") && \$(\"#form_pregun_5\").css(\"display\", \"block\") && \$(\"#form_pregun_5_resp\").css(\"display\", \"block\");
        }

        if (\$(this).attr(\"value\")==\"no\"){
          \$('input:radio[name=\"form[3]\"]').attr ('checked',false);
          \$('input:radio[name=\"form[4]\"]').attr ('checked',false);
          \$('input:radio[name=\"form[5]\"]').attr ('checked',false);

          \$(\"#form_pregun_3\").css(\"display\", \"none\") && \$(\"#form_pregun_3_resp\").css(\"display\", \"none\") && \$(\"#form_pregun_4\").css(\"display\", \"none\") && \$(\"#form_pregun_4_resp\").css(\"display\", \"none\") && \$(\"#form_pregun_5\").css(\"display\", \"none\") && \$(\"#form_pregun_5_resp\").css(\"display\", \"none\");
        }

        if (\$(this).attr(\"value\")==\"dicenoser\"){
          \$(\"#form_pregun_3\").css(\"display\", \"block\") && \$(\"#form_pregun_3_resp\").css(\"display\", \"block\") && \$(\"#form_pregun_4\").css(\"display\", \"block\") && \$(\"#form_pregun_4_resp\").css(\"display\", \"block\") && \$(\"#form_pregun_5\").css(\"display\", \"block\") && \$(\"#form_pregun_5_resp\").css(\"display\", \"block\");
        }

        if (\$(this).attr(\"value\")==\"cambiodenumero\"){
          \$('input:radio[name=\"form[3]\"]').attr ('checked',false);
          \$('input:radio[name=\"form[4]\"]').attr ('checked',false);
          \$('input:radio[name=\"form[5]\"]').attr ('checked',false);
          \$(\"#form_pregun_3\").css(\"display\", \"none\") && \$(\"#form_pregun_3_resp\").css(\"display\", \"none\") && \$(\"#form_pregun_4\").css(\"display\", \"none\") && \$(\"#form_pregun_4_resp\").css(\"display\", \"none\") && \$(\"#form_pregun_5\").css(\"display\", \"none\") && \$(\"#form_pregun_5_resp\").css(\"display\", \"none\") ;
         
        }
      }
        
    });
      
    /* campo editables */
    \$('.editarNombres').editable('";
        // line 202
        echo $this->env->getExtension('routing')->getPath("encuestas_editar_datos", array("tipo" => "comando_camp"));
        echo "', {
       //indicator : \"Guardando...\",
       indicator : \"<img src='";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/bx_loader.gif"), "html", null, true);
        echo "'>\",
       tooltip   : 'Doble clic para editar...',
       id   : 'nombres',
       event  : \"dblclick\",
       submit  : 'OK'
    });

    /* campo editables */
    \$('.editarCedula').editable('";
        // line 212
        echo $this->env->getExtension('routing')->getPath("encuestas_editar_datos", array("tipo" => "comando_camp"));
        echo "', {
       //indicator : \"Guardando...\",
       indicator : \"<img src='";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/bx_loader.gif"), "html", null, true);
        echo "'>\",
       tooltip   : 'Doble clic para editar...',
       id   : 'cedula',
       event  : \"dblclick\",
       submit  : 'OK'
    });

    /* campo editables telefono*/
    \$('.editarTelf1').editable('";
        // line 222
        echo $this->env->getExtension('routing')->getPath("encuestas_editar_datos", array("tipo" => "comando_camp"));
        echo "', {
       indicator : \"<img src='";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/bx_loader.gif"), "html", null, true);
        echo "'>\",
       tooltip   : 'Doble clic para editar...',
       id   : 'telefono',
       event  : \"dblclick\",
       submit  : 'OK'
    });

  });

  function validar() {

    var a = 0, radio=document.getElementsByName(\"form[1]\")
      for(i=0;i<radio.length;i++) {
        if(radio.item(i).checked == false) {
          a++;
        }
      }
        if(a == radio.length) {
          alert('Debe seleccionar una Respuesta');
            return false;
        } else {
            return true;
          }
  }

</script>
";
    }

    public function getTemplateName()
    {
        return "EncuestasBundle:Encuestas:mostrarDatosComando.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 223,  404 => 222,  393 => 214,  388 => 212,  377 => 204,  372 => 202,  302 => 135,  294 => 129,  282 => 120,  278 => 118,  276 => 117,  272 => 115,  260 => 106,  256 => 104,  254 => 103,  242 => 94,  222 => 83,  206 => 69,  198 => 66,  193 => 64,  190 => 63,  187 => 62,  180 => 60,  175 => 58,  171 => 56,  169 => 55,  162 => 50,  156 => 49,  153 => 48,  151 => 47,  146 => 46,  143 => 45,  141 => 44,  136 => 43,  133 => 42,  131 => 41,  126 => 40,  123 => 39,  121 => 38,  116 => 37,  113 => 36,  111 => 35,  106 => 34,  103 => 33,  101 => 32,  96 => 31,  91 => 30,  88 => 29,  67 => 14,  60 => 9,  56 => 8,  50 => 7,  47 => 6,  44 => 5,  36 => 3,  30 => 2,  11 => 1,);
    }
}
