<?php

/* EncuestasBundle:Encuestas:mostrarDatos.html.twig */
class __TwigTemplate_d458440b23e90f4fec1ea7128907e45fb927f3f2dcf79f1c20469badd1219abc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "EncuestasBundle:Encuestas:mostrarDatos.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_datosEncuesta", array("id_encuesta" => $this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "id", array()))), "html", null, true);
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
        // line 28
        echo "    ";
        $context["id"] = "";
        // line 29
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results"))));
        foreach ($context['_seq'] as $context["indice"] => $context["llave"]) {
            // line 30
            echo "      ";
            if ((($context["indice"] == 0) && ($context["llave"] == "id_bene_misiones"))) {
                echo " 
        ";
                // line 31
                $context["id"] = $this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "id_bene_misiones", array());
                // line 32
                echo "      ";
            }
            // line 33
            echo "      ";
            if ((($context["indice"] == 0) && ($context["llave"] == "id_clp"))) {
                echo " 
        ";
                // line 34
                $context["id"] = $this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "id_clp", array());
                // line 35
                echo "      ";
            }
            // line 36
            echo "      ";
            if ((($context["indice"] == 0) && ($context["llave"] == "id_militancia"))) {
                echo " 
        ";
                // line 37
                $context["id"] = $this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "id_militancia", array());
                // line 38
                echo "      ";
            }
            // line 39
            echo "      ";
            if ((($context["indice"] == 0) && ($context["llave"] == "id_rep"))) {
                echo " 
        ";
                // line 40
                $context["id"] = $this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "id_rep", array());
                // line 41
                echo "      ";
            }
            // line 42
            echo "      ";
            if ((($context["indice"] == 0) && ($context["llave"] == "id_trab_patria"))) {
                echo " 
        ";
                // line 43
                $context["id"] = $this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "id_trab_patria", array());
                // line 44
                echo "      ";
            }
            // line 45
            echo "      ";
            if ((($context["indice"] == 0) && ($context["llave"] == "id_ubch"))) {
                echo " 
        ";
                // line 46
                $context["id"] = $this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "id_ubch", array());
                // line 47
                echo "      ";
            }
            // line 48
            echo "      ";
            if ((($context["indice"] == 0) && ($context["llave"] == "id_patrullas_sectoriales"))) {
                echo " 
        ";
                // line 49
                $context["id"] = $this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "id_patrullas_sectoriales", array());
                // line 50
                echo "      ";
            }
            // line 51
            echo "      ";
            if ((($context["indice"] == 0) && ($context["llave"] == "id_gmvv"))) {
                echo " 
        ";
                // line 52
                $context["id"] = $this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "id_gmvv", array());
                // line 53
                echo "      ";
            }
            // line 54
            echo "      ";
            if ((($context["indice"] == 0) && ($context["llave"] == "id_poder_popular"))) {
                echo " 
        ";
                // line 55
                $context["id"] = $this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "id_poder_popular", array());
                // line 56
                echo "      ";
            }
            // line 57
            echo "       ";
            if ((($context["indice"] == 0) && ($context["llave"] == "id_patrulleros"))) {
                echo " 
        ";
                // line 58
                $context["id"] = $this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "id_patrulleros", array());
                // line 59
                echo "      ";
            }
            // line 60
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['indice'], $context['llave'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "    <div class=\"col-xs-12 col-md-8 col-md-offset-2\">
      <div class=\"row\">
        <div class=\"col-xs-12\">
          <table class=\"table1 table-striped table-bordered\" id=\"mytable\">
            <thead>
              <tr>
                <td><strong>Municipio</strong></td>
                <td>";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["municipios"]) ? $context["municipios"] : $this->getContext($context, "municipios")), "html", null, true);
        echo "</td>
                <td><strong>Parroquia</strong></td>
                <td>";
        // line 70
        if ((array_key_exists("parroquia", $context) && ((isset($context["parroquia"]) ? $context["parroquia"] : $this->getContext($context, "parroquia")) != "todos"))) {
            echo twig_escape_filter($this->env, (isset($context["parroquia"]) ? $context["parroquia"] : $this->getContext($context, "parroquia")), "html", null, true);
        } else {
            echo "Todas las Parroquias";
        }
        echo "</td>
                <td ><strong>Tel&eacute;fono 1</strong></td>
                <td ><div class=\"editarTelf1\" id=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" style=\"font-size:18px;\">";
        echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "telefono_1", array())), "html", null, true);
        echo "</td>
                <td ><strong>Tel&eacute;fono 2</strong></td>
                <td ><div class=\"editarTelf2\" id=\"";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" style=\"font-size:18px;\">";
        echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "telefono_2", array())), "html", null, true);
        echo "</td>
              </tr>
            </thead> 
          </table>
          <br>
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
        // line 91
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
        ";
        // line 99
        $context["equipos"] = (isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo"));
        // line 100
        echo "        ";
        if (((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")) == "beneficiarios_misiones")) {
            // line 101
            echo "          ";
            $context["equipos"] = "Beneficiario";
            // line 102
            echo "        ";
        }
        // line 103
        echo "        ";
        if (((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")) == "clp")) {
            // line 104
            echo "          ";
            $context["equipos"] = "Circulo de Lucha";
            // line 105
            echo "        ";
        }
        // line 106
        echo "        ";
        if (((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")) == "militancia")) {
            // line 107
            echo "          ";
            $context["equipos"] = "Militancia";
            // line 108
            echo "        ";
        }
        // line 109
        echo "        ";
        if (((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")) == "patrullas_sectoriales")) {
            // line 110
            echo "          ";
            $context["equipos"] = "Patrulla Sectorial";
            // line 111
            echo "        ";
        }
        // line 112
        echo "         ";
        if (((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")) == "rep")) {
            // line 113
            echo "          ";
            $context["equipos"] = (isset($context["Rep"]) ? $context["Rep"] : $this->getContext($context, "Rep"));
            // line 114
            echo "        ";
        }
        // line 115
        echo "        ";
        if (((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")) == "trabajadores_patria")) {
            // line 116
            echo "          ";
            $context["equipos"] = "Trabajadores";
            // line 117
            echo "        ";
        }
        // line 118
        echo "        ";
        if (((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")) == "ubch")) {
            // line 119
            echo "          ";
            $context["equipos"] = "Ubch";
            // line 120
            echo "        ";
        }
        // line 121
        echo "        ";
        if (((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")) == "gmvv")) {
            // line 122
            echo "          ";
            $context["equipos"] = "Gmvv";
            // line 123
            echo "        ";
        }
        // line 124
        echo "        ";
        if (((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")) == "poder_popular")) {
            // line 125
            echo "          ";
            $context["equipos"] = "Poder Popular";
            // line 126
            echo "        ";
        }
        // line 127
        echo "        ";
        if (((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")) == "patrulleros")) {
            // line 128
            echo "          ";
            $context["equipos"] = "Patrulleros";
            // line 129
            echo "        ";
        }
        // line 130
        echo "        <div class=\"row\">
          <div class=\"col-xs-12\">
            <div id=\"form_pregun_3\" style=\"display: none;\">
             <strong>2-</strong> ¿Usted pertenece a <strong>";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")), "html", null, true);
        echo "</strong>  ";
        if ($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "cargo", array(), "any", true, true)) {
            echo " con el Cargo <strong>";
            echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "cargo", array())), "html", null, true);
            echo "</strong> ";
        }
        if ($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "mision", array(), "any", true, true)) {
            echo " con la <strong>";
            echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "mision", array())), "html", null, true);
            echo "</strong> ";
        }
        echo " y vota en <strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["centrodevotacion"]) ? $context["centrodevotacion"] : $this->getContext($context, "centrodevotacion")), "nombreCentro", array()), "html", null, true);
        echo "</strong>  ?
            </div>
    
            <div id=\"form_pregun_3_resp\" style=\"display: none;\">
              Si <input type=\"radio\" name=\"form[3]\" class=\"validate[required]\" id=\"resp_1\" value=\"si\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No <input type=\"radio\" name=\"form[3]\" id=\"resp_1\" class=\"validate[required]\" value=\"norespondio\">
          </div>
          </div>
        </div><br>
        <div class=\"row\">
          ";
        // line 142
        if (($this->getAttribute($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : null), "getPreguntas", array(), "any", false, true), "pregunta4", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "getPreguntas", array()), "pregunta4", array(), "method")))) {
            // line 143
            echo "            <div class=\"col-xs-12\">
              <div id=\"form_pregun_4\" style=\"display: none;\">
                <strong>3-</strong> ";
            // line 145
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
        // line 154
        echo "        </div><br>
        <div class=\"row\">
          ";
        // line 156
        if (($this->getAttribute($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : null), "getPreguntas", array(), "any", false, true), "pregunta5", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "getPreguntas", array()), "getPregunta5", array(), "method")))) {
            // line 157
            echo "            <div class=\"col-xs-12\">
              <div id=\"form_pregun_5\" style=\"display: none;\">
                <strong>4-</strong> ";
            // line 159
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
        // line 168
        echo "        </div>
      </div>
    </div>

    <div class=\"col-xs-12 col-md-12\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <center><input class=\"fueraoverflow2 btn btn-default\" type=\"submit\" onclick=\"return validar()\" value=\"Guardar\" name=\"form[boton_guardar]\" /> <input class=\"fueraoverflow2 btn btn-default\" type=\"submit\" id=\"otro\" value=\"Buscar Otro\" name=\"form[boton_buscar]\" /> <a href=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_datosEncuesta", array("id_encuesta" => $this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "id", array()))), "html", null, true);
        echo "\">
        <input class=\"fueraoverflow2 btn btn-default\" type=\"button\" value=\"Cancelar\" name=\"form[boton_cancelar]\" /></a></center>

        </div>
      </div>
    </div>  
  </form>
  <script type=\"text/javascript\">

    \$(document).ready(function(){

      \$( \"#mytable td:even\" ).css( \"background-color\", \"#d0d2d3\" ); 

      \$('#otro').on( \"click\", function() {
        \$('*[type=\"radio\"]').removeClass( \"validate[required]\" )
      });

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

          if (\$(this).attr(\"value\")==\"noasignado\"){
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

            /*if (\$(this).attr(\"value\")==\"dicenoser\"){
              \$(\"#form_pregun_3\").css(\"display\", \"block\") && \$(\"#form_pregun_3_resp\").css(\"display\", \"block\") && \$(\"#form_pregun_4\").css(\"display\", \"block\") && \$(\"#form_pregun_4_resp\").css(\"display\", \"block\") && \$(\"#form_pregun_5\").css(\"display\", \"block\") && \$(\"#form_pregun_5_resp\").css(\"display\", \"block\");
            }*/

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
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_editar_datos", array("tipo" => (isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")))), "html", null, true);
        echo "', {
         //indicator : \"Guardando...\",
         indicator : \"<img src='";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/bx_loader.gif"), "html", null, true);
        echo "'>\",
         tooltip   : 'Doble clic para editar...',
         id   : 'nombres',
         event  : \"dblclick\",
         submit  : 'OK'
      });

      /* campo editables */
      \$('.editarCedula').editable('";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_editar_datos", array("tipo" => (isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")))), "html", null, true);
        echo "', {
         //indicator : \"Guardando...\",
         indicator : \"<img src='";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/bx_loader.gif"), "html", null, true);
        echo "'>\",
         tooltip   : 'Doble clic para editar...',
         id   : 'cedula',
         event  : \"dblclick\",
         submit  : 'OK'
      });

      /* campo editables telefono*/
      \$('.editarTelf1').editable('";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_editar_datos", array("tipo" => (isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")))), "html", null, true);
        echo "', {
         indicator : \"<img src='";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/bx_loader.gif"), "html", null, true);
        echo "'>\",
         tooltip   : 'Doble clic para editar...',
         id   : 'telefono1',
         event  : \"dblclick\",
         submit  : 'OK'
      });

      \$('.editarTelf2').editable('";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_editar_datos", array("tipo" => (isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")))), "html", null, true);
        echo "', {
         indicator : \"<img src='";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/bx_loader.gif"), "html", null, true);
        echo "'>\",
         tooltip   : 'Doble clic para editar...',
         id   : 'telefono2',
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
        return "EncuestasBundle:Encuestas:mostrarDatos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  570 => 280,  566 => 279,  556 => 272,  552 => 271,  541 => 263,  536 => 261,  525 => 253,  520 => 251,  441 => 175,  432 => 168,  420 => 159,  416 => 157,  414 => 156,  410 => 154,  398 => 145,  394 => 143,  392 => 142,  367 => 133,  362 => 130,  359 => 129,  356 => 128,  353 => 127,  350 => 126,  347 => 125,  344 => 124,  341 => 123,  338 => 122,  335 => 121,  332 => 120,  329 => 119,  326 => 118,  323 => 117,  320 => 116,  317 => 115,  314 => 114,  311 => 113,  308 => 112,  305 => 111,  302 => 110,  299 => 109,  296 => 108,  293 => 107,  290 => 106,  287 => 105,  284 => 104,  281 => 103,  278 => 102,  275 => 101,  272 => 100,  270 => 99,  253 => 91,  231 => 74,  224 => 72,  215 => 70,  210 => 68,  201 => 61,  195 => 60,  192 => 59,  190 => 58,  185 => 57,  182 => 56,  180 => 55,  175 => 54,  172 => 53,  170 => 52,  165 => 51,  162 => 50,  160 => 49,  155 => 48,  152 => 47,  150 => 46,  145 => 45,  142 => 44,  140 => 43,  135 => 42,  132 => 41,  130 => 40,  125 => 39,  122 => 38,  120 => 37,  115 => 36,  112 => 35,  110 => 34,  105 => 33,  102 => 32,  100 => 31,  95 => 30,  90 => 29,  87 => 28,  67 => 14,  60 => 9,  56 => 8,  50 => 7,  47 => 6,  44 => 5,  36 => 3,  30 => 2,  11 => 1,);
    }
}
