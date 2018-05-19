<?php

/* EncuestasBundle:Encuestas:mostrarDatos.html.twig */
class __TwigTemplate_69fe0fd7190c2c50e549d6fdeeb22460ea316d7954f9a7add9dda67e4617b6ae extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "nombreEncuesta", array()), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 6
        echo "
  <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_datosEncuesta", array("id_encuesta" => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'enctype');
        echo ">
    ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
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
                $context["id"] = twig_template_get_attributes($this, (isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "id_bene_misiones", array());
                // line 32
                echo "      ";
            }
            // line 33
            echo "      ";
            if ((($context["indice"] == 0) && ($context["llave"] == "id_clp"))) {
                echo " 
        ";
                // line 34
                $context["id"] = twig_template_get_attributes($this, (isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "id_clp", array());
                // line 35
                echo "      ";
            }
            // line 36
            echo "      ";
            if ((($context["indice"] == 0) && ($context["llave"] == "id_militancia"))) {
                echo " 
        ";
                // line 37
                $context["id"] = twig_template_get_attributes($this, (isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "id_militancia", array());
                // line 38
                echo "      ";
            }
            // line 39
            echo "      ";
            if ((($context["indice"] == 0) && ($context["llave"] == "id_rep"))) {
                echo " 
        ";
                // line 40
                $context["id"] = twig_template_get_attributes($this, (isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "id_rep", array());
                // line 41
                echo "      ";
            }
            // line 42
            echo "      ";
            if ((($context["indice"] == 0) && ($context["llave"] == "id_trab_patria"))) {
                echo " 
        ";
                // line 43
                $context["id"] = twig_template_get_attributes($this, (isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "id_trab_patria", array());
                // line 44
                echo "      ";
            }
            // line 45
            echo "      ";
            if ((($context["indice"] == 0) && ($context["llave"] == "id_ubch"))) {
                echo " 
        ";
                // line 46
                $context["id"] = twig_template_get_attributes($this, (isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "id_ubch", array());
                // line 47
                echo "      ";
            }
            // line 48
            echo "      ";
            if ((($context["indice"] == 0) && ($context["llave"] == "id_patrullas_sectoriales"))) {
                echo " 
        ";
                // line 49
                $context["id"] = twig_template_get_attributes($this, (isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "id_patrullas_sectoriales", array());
                // line 50
                echo "      ";
            }
            // line 51
            echo "      ";
            if ((($context["indice"] == 0) && ($context["llave"] == "id_gmvv"))) {
                echo " 
        ";
                // line 52
                $context["id"] = twig_template_get_attributes($this, (isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "id_gmvv", array());
                // line 53
                echo "      ";
            }
            // line 54
            echo "      ";
            if ((($context["indice"] == 0) && ($context["llave"] == "id_poder_popular"))) {
                echo " 
        ";
                // line 55
                $context["id"] = twig_template_get_attributes($this, (isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "id_poder_popular", array());
                // line 56
                echo "      ";
            }
            // line 57
            echo "       ";
            if ((($context["indice"] == 0) && ($context["llave"] == "id_patrulleros"))) {
                echo " 
        ";
                // line 58
                $context["id"] = twig_template_get_attributes($this, (isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "id_patrulleros", array());
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
                <!-- <td><strong>Municipio</strong></td>
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
        echo "</td> -->
                <td ><strong style=\" background-color='#f34235 !important'\">Tel&eacute;fono 1</strong></td>
                <td ><div class=\"editarTelf1\" id=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" style=\"font-size:18px;\">";
        echo twig_escape_filter($this->env, trim(twig_template_get_attributes($this, (isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "telefono_1", array())), "html", null, true);
        echo "</td>
                <td background-color=\"#f34235\" ><strong>Empresa</strong></td>
                <td ><div class=\"editarTelf2\" id=\"";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" style=\"font-size:18px;\">";
        echo twig_escape_filter($this->env, trim(twig_template_get_attributes($this, (isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "institucion", array())), "html", null, true);
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
            <div id=\"form_identificacion\" style=\"display: none;\"><strong>1-</strong> Buenos días/tardes , le hablo de PDVSA Industrial ¿Es usted <strong><b class=\"editarNombres\" style=\"display: inline\" id=\"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "apellidos_nombres", array()), "html", null, true);
        echo "</b></strong> y su Cédula de Identidad es <strong><b class=\"editarCedula\" style=\"display: inline\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, trim(twig_template_get_attributes($this, (isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "cedula", array())), "html", null, true);
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
             <strong>2-</strong> ¿Es usted trabajador de la empresa <strong>";
        // line 133
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "institucion", array()), "html", null, true);
        echo "</strong>  ";
        if (twig_template_get_attributes($this, (isset($context["results"]) ? $context["results"] : null), "cargo", array(), "any", true, true)) {
            echo " con el Cargo <strong>";
            echo twig_escape_filter($this->env, trim(twig_template_get_attributes($this, (isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "cargo", array())), "html", null, true);
            echo "</strong> ";
        }
        if (twig_template_get_attributes($this, (isset($context["results"]) ? $context["results"] : null), "mision", array(), "any", true, true)) {
            echo " con la <strong>";
            echo twig_escape_filter($this->env, trim(twig_template_get_attributes($this, (isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "mision", array())), "html", null, true);
            echo "</strong> ";
        }
        echo "?
            </div>
    
            <div id=\"form_pregun_3_resp\" style=\"display: none;\">
              Si <input type=\"radio\" name=\"form[3]\" class=\"validate[required]\" id=\"resp_1\" value=\"si\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No <input type=\"radio\" name=\"form[3]\" id=\"resp_1\" class=\"validate[required]\" value=\"norespondio\">
          </div>
          </div>
        </div><br>
        <div class=\"row\">
          ";
        // line 142
        if ((twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : null), "getPreguntas", array(), "any", false, true), "pregunta4", array(), "any", true, true) &&  !twig_test_empty(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "getPreguntas", array()), "pregunta4", array(), "method")))) {
            // line 143
            echo "            <div class=\"col-xs-12\">
              <div id=\"form_pregun_4\" style=\"display: none;\">
                <strong>3-</strong> ";
            // line 145
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "getPreguntas", array()), "getPregunta4", array(), "method"), "html", null, true);
            echo "
              </div>
              <div id=\"form_pregun_4_resp\" style=\"display: none;\">
                Si <input type=\"radio\" name=\"form[4]\" value=\"si\">
                &nbsp;&nbsp;&nbsp;&nbsp;No <input type=\"radio\" class=\"\" name=\"form[4]\" value=\"no\">

                &nbsp;&nbsp;&nbsp;&nbsp;No sabe<input type=\"radio\" class=\"\" name=\"form[4]\" value=\"no_sabe\">

              </div>


                ";
            // line 156
            if ((twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : null), "getPreguntas", array(), "any", false, true), "pregunta5", array(), "any", true, true) &&  !twig_test_empty(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "getPreguntas", array()), "getPregunta5", array(), "method")))) {
                // line 157
                echo "                  
                    <div id=\"form_pregun_5\" style=\"display: none;\">
                      <strong>¿</strong> ";
                // line 159
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "getPreguntas", array()), "getPregunta5", array(), "method"), "html", null, true);
                echo "<strong>?</strong>
                    </div>
                    <div id=\"form_pregun_5_resp\" style=\"display: none;\">
                     <select name=\"form[5]\" class=\"form-control input-sm validate[required]\">
                        <option value=\"\">Seleccionar</option>
                        <option value=\"1\">Guerra económica</option>
                        <option value=\"2\">Seguridad</option>
                        <option value=\"3\">Transporte</option>
                        <option value=\"4\">Servicos</option>
                        <option value=\"5\">Distrito Capital</option>
                        <option value=\"6\">Otros</option>
                        <!--
                        -->
                      </select>
                    </div>
                  
                ";
            }
            // line 176
            echo "
            </div>
          ";
        }
        // line 179
        echo "        </div><br>
        <div class=\"row\">
          
        </div>
        <div class=\"row\">
          ";
        // line 184
        if ((twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : null), "getPreguntas", array(), "any", false, true), "pregunta6", array(), "any", true, true) &&  !twig_test_empty(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "getPreguntas", array()), "pregunta6", array(), "method")))) {
            // line 185
            echo "            <div class=\"col-xs-12\">
              <div id=\"form_pregun_6\" style=\"display: none;\">
                <strong>6-</strong> ";
            // line 187
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "getPreguntas", array()), "getPregunta6", array(), "method"), "html", null, true);
            echo "
              </div>
              <div id=\"form_pregun_6_resp\" style=\"display: none;\">

                <select name=\"form[6]\" class=\"form-control input-sm validate[required]\" id=\"estados\">
                  <option value=\"\">Seleccionar</option>
                  <option value=\"1\">Amazonas</option>
                  <option value=\"2\">Aragua</option>
                  <option value=\"3\">Anzoátegui</option>
                  <option value=\"4\">Apure</option>
                  <option value=\"5\">Barinas</option>
                  <option value=\"6\">Bolivar</option>
                  <option value=\"7\">Carabobo</option>
                  <option value=\"8\">Cojedes</option>
                  <option value=\"9\">Delta Amacuro</option>

                  <option value=\"10\">Falcón</option>
                  <option value=\"11\">Guárico</option>
                  <option value=\"12\">Lara</option>
                  <option value=\"13\">Mérida</option>
                  <option value=\"14\">Miranda</option>
                  <option value=\"15\">Monagas</option>
                  <option value=\"16\">Nueva Esparta</option>
                  <option value=\"17\">Portuguesa</option>
                  <option value=\"18\">Sucre</option>

                  <option value=\"19\">Táchira</option>
                  <option value=\"20\">Trujillo</option>
                  <option value=\"21\">Vargas</option>
                  <option value=\"22\">Yaracuy</option>
                  <option value=\"23\">Zulia</option>


                  <option value=\"24\"><strong>Distrito Capital</strong></option>

                  <option value=\"25\"><strong>NINGUNO</strong></option>
                  <!--
                  -->
                </select>
              </div>
            </div>
          ";
        }
        // line 229
        echo "        </div><br>
        <div class=\"row\">
          ";
        // line 231
        if ((twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : null), "getPreguntas", array(), "any", false, true), "pregunta7", array(), "any", true, true) &&  !twig_test_empty(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "getPreguntas", array()), "getPregunta7", array(), "method")))) {
            // line 232
            echo "            <div class=\"col-xs-12\">
              <div id=\"form_pregun_7\" style=\"display: none;\">
                <strong>7-</strong> ";
            // line 234
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "getPreguntas", array()), "getPregunta7", array(), "method"), "html", null, true);
            echo "
              </div>
              <div id=\"form_pregun_7_resp\" style=\"display: none;\">
                <br>
                <select name=\"form[7]\" class=\"form-control input-sm validate[required]\" style=\"width:200px;\">
                        <option value=\"\">Seleccionar</option>
                        <option value=\"1\">Polo patriotico</option>
                        <option value=\"2\">Avanzada Progresista</option>
                        <option value=\"3\">Otro</option>
                        <!--
                        -->
                      </select>
                      <br><br>
                <!-- <select name=\"form[6]\" class=\"form-control input-sm validate[required]\">
                  <option value=\"\">Seleccionar</option>
                  <option value=\"1\">Amazonas | M</option>
                  <option value=\"2\">Aragua</option>
                  <option value=\"3\">Anzoátegui</option>
                  <option value=\"4\">Apure</option>
                  <option value=\"5\">Barinas</option>
                  <option value=\"6\">Bolivar</option>
                  <option value=\"7\">Carabobo</option>
                  <option value=\"8\">Cojedes</option>
                  <option value=\"9\">Delta Amacuro</option>

                  <option value=\"10\">Falcón</option>
                  <option value=\"11\">Guárico</option>
                  <option value=\"12\">Lara</option>
                  <option value=\"13\">Mérida</option>
                  <option value=\"14\">Miranda</option>
                  <option value=\"15\">Monagas</option>
                  <option value=\"16\">Nueva Esparta</option>
                  <option value=\"17\">Portuguesa</option>
                  <option value=\"18\">Sucre</option>

                  <option value=\"19\">Táchira</option>
                  <option value=\"20\">Trujillo</option>
                  <option value=\"21\">Vargas</option>
                  <option value=\"22\">Yaracuy</option>
                  <option value=\"23\">Zulia</option>

                </select> -->
              </div>
            </div>
          ";
        }
        // line 279
        echo "        </div>
        <div class=\"row\">
          ";
        // line 281
        if ((twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : null), "getPreguntas", array(), "any", false, true), "pregunta8", array(), "any", true, true) &&  !twig_test_empty(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "getPreguntas", array()), "getPregunta8", array(), "method")))) {
            // line 282
            echo "            <div class=\"col-xs-12\">
              <div id=\"form_pregun_8\" style=\"display: none;\">
                <strong>8-</strong> ";
            // line 284
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "getPreguntas", array()), "getPregunta8", array(), "method"), "html", null, true);
            echo "
              </div>
              <div id=\"form_pregun_8_resp\" style=\"display: none;\">
                <table class=\"table-striped table\">
                  <thead>
                <th>Logístico <input type=\"radio\" name=\"form[8]\" value=\"logistico\"></th>
                <th>Movilización <input type=\"radio\" class=\"\" name=\"form[8]\" value=\"movilizacion\"></th>
                <th>Seguridad <input type=\"radio\" class=\"\" name=\"form[8]\" value=\"seguridad\"></th>
                <th>Salud <input type=\"radio\" class=\"\" name=\"form[8]\" value=\"salud\"></th>
                <th>Metereológico <input type=\"radio\" class=\"\" name=\"form[8]\" value=\"metereologico\"></th>
                <th>Eléctrico <input type=\"radio\" class=\"\" name=\"form[8]\" value=\"electrico\"></th>
                <th>Otro <input type=\"radio\" class=\"\" name=\"form[8]\" value=\"otro\"></th>
                </thead>
                </table>
              </div>
            </div>
          ";
        }
        // line 301
        echo "        </div>
      </div>
    </div>

    <div class=\"col-xs-12 col-md-12\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <center><input class=\"fueraoverflow2 btn btn-default\" type=\"submit\" onclick=\"return validar()\" value=\"Guardar\" name=\"form[boton_guardar]\" /> <input class=\"fueraoverflow2 btn btn-default\" type=\"submit\" id=\"otro\" value=\"Buscar Otro\" name=\"form[boton_buscar]\" /> <a href=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_datosEncuesta", array("id_encuesta" => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "id", array()))), "html", null, true);
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
             
              \$(\"#form_pregun_3\").css(\"display\", \"block\") && \$(\"#form_pregun_3_resp\").css(\"display\", \"block\") && \$(\"#form_pregun_4\").css(\"display\", \"block\") && \$(\"#form_pregun_4_resp\").css(\"display\", \"inline-block\") && \$(\"#form_pregun_6\").css(\"display\", \"inline-block\") && \$(\"#form_pregun_6_resp\").css(\"display\", \"inline-block\") && \$(\"#form_pregun_7\").css(\"display\", \"block\") && \$(\"#form_pregun_7_resp\").css(\"display\", \"block\") && \$(\"#form_pregun_8\").css(\"display\", \"block\") && \$(\"#form_pregun_8_resp\").css(\"display\", \"block\");
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


        /*if (\$(this).attr(\"name\")==\"form[4]\") { 
          //alert('vamos')
          if (\$(this).attr(\"value\")==\"no\"){ 
            \$(\"#form_pregun_5\").css(\"display\", \"inline-block\") && \$(\"#form_pregun_5_resp\").css(\"display\", \"inline-block\") 

          }
          else{
            \$('input:radio[name=\"form[5]\"]').attr ('val',\"\");
            \$(\"#form_pregun_5\").css(\"display\", \"none\") && \$(\"#form_pregun_5_resp\").css(\"display\", \"none\") 


          }

        }*/

        if (\$(this).attr(\"name\")==\"form[6]\") {

        }
          
      });
  

      \$('#estados').on( \"change\", function() {
        //alert(\$(this).attr(\"value\"))
        var estates = [ \"\",\"Amazonas\",\"Aragua\",\"Anzoátegui\",\"Apure\",\"Barinas\",\"Bolivar\",\"Carabobo\",\"Cojedes\",\"Delta Amacuro\",\"Falcón\", \"Guárico\", \"Lara\", \"Mérida\", \"Miranda\", \"Monagas\", \"Nueva Esparta\", \"Portuguesa\", \"Sucre\", \"Táchira\", \"Trujillo\", \"Vargas\", \"Yaracuy\", \"Zulia\"]


        var cand_psuv = [\"\",\"Miguel Rodríguez\",\"Rodolfo Torres\", \"Aristobulo Isturiz\", \"Ramón Carrizales\", \"Argenis Chávez\", \"Justo Noguera Pietri\", \"Rafael Lacava\", \"Margaud Godoy\", \"Lizeta Hernández\", \"Víctor Clark\", \"José Vasquez\", \"Carmen Meléndez\", \"Jehyson Guzman\", \"Héctor Rodríguez\", \"Yelitza Santaella\", \"Carlos Mata Figueroa\", \"Rafael Calles\", \"Edwin Rojas\", \"José Vielma Mora\", \"Rangel Silva\", \"Jorge Garcia Carneiro\", \"Néstor Léon Heredia\", \"Francisco Arias Cardenas\"];


        var mud = [\"\", \"Bernabe Gutierrez\", \"Ismael Garcia\", \"Antonio Barreto\", \"José Montilla\", \"Freddy Superlano\", \"Andrés Velásquez\", \"Alejandro Feo La Cruz\", \"Alberto Galindez\", \"Larissa González\", \"Eliezer Sirit\", \"Pedro Loreto\", \"Henri Falcón\", \"Ramón Guevara\", \"Carlos Ocariz\", \"Guillermo Call\", \"Alfredo Díaz\", \"María Beatriz Martínez\", \"Robert Alcalá\", \"Laidy Gómez\", \"Carlos Andrés González\", \"José Manuel Olivarez\", \"Luis Parra\", \"Juan Pablo Guanipa\" ];





        \$('#form_pregun_7_resp').html( \"<br> <strong>Estado: </strong> \"+estates[\$(this).attr(\"value\")]+ '<br> '+\"<strong> GPP: </strong> \"+cand_psuv[\$(this).attr(\"value\")]+ ' <input type=\"radio\" name=\"form[7]\" value=\"psuv\">'+\"<strong> | Sin candidatos: </strong> \"+ '  '+mud[\$(this).attr(\"value\")]+  ' <input type=\"radio\" name=\"form[7]\" value=\"mud\"><br> <br> ')
        
        if (\$(this).attr(\"value\") ==\"25\" || \$(this).attr(\"value\") ==\"24\"){ 
            \$('#form_pregun_7_resp').html( \"<br> <strong>Estado: </strong> NINGUNO\"+'<br> '+\"<strong> GPP: </strong> NINGUNO\"+ ' <input type=\"radio\" name=\"form[7]\" value=\"ninguno\"><br> <br> ')
        }
                  /*11\"></option>
                  12\"></option>
                  13\"></option>
                  14\"></option>
                  15\"></option>
                  16\"></option>
                  17\"></option>
                  18\"></option>

                  19\"></option>
                  20\"></option>
                  21\"></option>
                  22\"></option>
                  23\"></option>]*/
            //\$(this).attr(\"value\")
      }
      );


      /* campo editables */
      \$('.editarNombres').editable('";
        // line 443
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_editar_datos", array("tipo" => (isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")))), "html", null, true);
        echo "', {
         //indicator : \"Guardando...\",
         indicator : \"<img src='";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/bx_loader.gif"), "html", null, true);
        echo "'>\",
         tooltip   : 'Doble clic para editar...',
         id   : 'nombres',
         event  : \"dblclick\",
         submit  : 'OK'
      });

      /* campo editables */
      \$('.editarCedula').editable('";
        // line 453
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_editar_datos", array("tipo" => (isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")))), "html", null, true);
        echo "', {
         //indicator : \"Guardando...\",
         indicator : \"<img src='";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/bx_loader.gif"), "html", null, true);
        echo "'>\",
         tooltip   : 'Doble clic para editar...',
         id   : 'cedula',
         event  : \"dblclick\",
         submit  : 'OK'
      });

      /* campo editables telefono*/
      \$('.editarTelf1').editable('";
        // line 463
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_editar_datos", array("tipo" => (isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")))), "html", null, true);
        echo "', {
         indicator : \"<img src='";
        // line 464
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/bx_loader.gif"), "html", null, true);
        echo "'>\",
         tooltip   : 'Doble clic para editar...',
         id   : 'telefono1',
         event  : \"dblclick\",
         submit  : 'OK'
      });

      \$('.editarTelf2').editable('";
        // line 471
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_editar_datos", array("tipo" => (isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")))), "html", null, true);
        echo "', {
         indicator : \"<img src='";
        // line 472
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
        return array (  784 => 472,  780 => 471,  770 => 464,  766 => 463,  755 => 455,  750 => 453,  739 => 445,  734 => 443,  596 => 308,  587 => 301,  567 => 284,  563 => 282,  561 => 281,  557 => 279,  509 => 234,  505 => 232,  503 => 231,  499 => 229,  454 => 187,  450 => 185,  448 => 184,  441 => 179,  436 => 176,  416 => 159,  412 => 157,  410 => 156,  396 => 145,  392 => 143,  390 => 142,  367 => 133,  362 => 130,  359 => 129,  356 => 128,  353 => 127,  350 => 126,  347 => 125,  344 => 124,  341 => 123,  338 => 122,  335 => 121,  332 => 120,  329 => 119,  326 => 118,  323 => 117,  320 => 116,  317 => 115,  314 => 114,  311 => 113,  308 => 112,  305 => 111,  302 => 110,  299 => 109,  296 => 108,  293 => 107,  290 => 106,  287 => 105,  284 => 104,  281 => 103,  278 => 102,  275 => 101,  272 => 100,  270 => 99,  253 => 91,  231 => 74,  224 => 72,  215 => 70,  210 => 68,  201 => 61,  195 => 60,  192 => 59,  190 => 58,  185 => 57,  182 => 56,  180 => 55,  175 => 54,  172 => 53,  170 => 52,  165 => 51,  162 => 50,  160 => 49,  155 => 48,  152 => 47,  150 => 46,  145 => 45,  142 => 44,  140 => 43,  135 => 42,  132 => 41,  130 => 40,  125 => 39,  122 => 38,  120 => 37,  115 => 36,  112 => 35,  110 => 34,  105 => 33,  102 => 32,  100 => 31,  95 => 30,  90 => 29,  87 => 28,  67 => 14,  60 => 9,  56 => 8,  50 => 7,  47 => 6,  44 => 5,  36 => 3,  30 => 2,  11 => 1,);
    }
}
