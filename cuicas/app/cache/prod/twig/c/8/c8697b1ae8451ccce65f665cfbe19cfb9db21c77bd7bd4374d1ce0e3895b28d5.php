<?php

/* EncuestasBundle:Encuestas:mostrarDatosFase1.html.twig */
class __TwigTemplate_c8697b1ae8451ccce65f665cfbe19cfb9db21c77bd7bd4374d1ce0e3895b28d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "EncuestasBundle:Encuestas:mostrarDatosFase1.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_datosEncuestaSufragio", array("id_encuesta" => $this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" onsubmit=\"return validar()\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'enctype');
        echo " novalidate >
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
        echo "    <div class=\"col-xs-12 col-md-4 col-md-offset-2\">
      <div class=\"row\">
        <div class=\"col-xs-13\">
          <table class=\"table1 table-striped table-bordered\" id=\"mytable\">
            <thead>
              <tr>
                <td><strong >Municipio</strong></td>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "municipio", array()), "nombre", array()), "html", null, true);
        echo "</td>
              </tr> 
              <tr>
                <td><strong>Parroquia</strong></td>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "parroquia", array()), "nombre", array()), "html", null, true);
        echo "</td>
              </tr> 
              <tr>
                <td><strong>Centro</strong></td>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "nombreCentro", array()), "html", null, true);
        echo "</td>
              </tr>
              <tr>
                <td ><strong>Coordinador de UBCH</strong></td> 
                <td ><div class=\"editarNombre\" id=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "coordinador", array()), "id_ubch", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "coordinador", array()), "apellidos_nombres", array()), "html", null, true);
        echo " (CI.";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "coordinador", array()), "cedula", array()), "html", null, true);
        echo ")</div></td>
              </tr>
              <tr>
                <td ><strong>Tel&eacute;fonos</strong></td>
                <td ><div class=\"editarTelf\" id=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "coordinador", array()), "id_ubch", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "coordinador", array()), "telefono_1", array())), "html", null, true);
        echo " 
                  ";
        // line 53
        if ($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "coordinador", array(), "any", false, true), "telefono_2", array(), "any", true, true)) {
            // line 54
            echo "                    ";
            if (($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "coordinador", array()), "telefono_2", array()) == "''")) {
                echo " 
                    ";
            } else {
                // line 55
                echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "coordinador", array()), "telefono_2", array())), "html", null, true);
                echo "
                    ";
            }
            // line 57
            echo "                  ";
        }
        // line 58
        echo "                </div></td>
              </tr>
              <tr>
                <td><strong>Responsable Log&iacute;stica</strong></td>
                <td><div class=\"editarNombre\" id=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "logistica", array()), "id_ubch", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "logistica", array()), "apellidos_nombres", array()), "html", null, true);
        echo " (CI.";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "logistica", array()), "cedula", array()), "html", null, true);
        echo ")</div></td>
              <tr>
                <td ><strong>Tel&eacute;fonos</strong></td>
                <td ><div class=\"editarTelf\" id=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "logistica", array()), "id_ubch", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "logistica", array()), "telefono_1", array())), "html", null, true);
        echo " 
                  ";
        // line 66
        if ($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "logistica", array(), "any", false, true), "telefono_2", array(), "any", true, true)) {
            echo " 
                    ";
            // line 67
            if (($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "logistica", array()), "telefono_2", array()) == "''")) {
                echo " 
                    ";
            } else {
                // line 68
                echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "logistica", array()), "telefono_2", array())), "html", null, true);
                echo "
                    ";
            }
            // line 70
            echo "                  ";
        }
        // line 71
        echo "                </div></td>
              </tr>   
              <tr>
                <td><strong>Responsable Movilizaci&oacute;n</strong></td>
                <td><div class=\"editarNombre\" id=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "movilizacion", array()), "id_ubch", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "movilizacion", array()), "apellidos_nombres", array()), "html", null, true);
        echo " (CI.";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "movilizacion", array()), "cedula", array()), "html", null, true);
        echo ")</div></td>
              </tr> 
              <tr>
                <td ><strong>Tel&eacute;fonos</strong></td>
                <td ><div class=\"editarTelf\" id=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "movilizacion", array()), "id_ubch", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "movilizacion", array()), "telefono_1", array())), "html", null, true);
        echo " 
                  ";
        // line 80
        if ($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "movilizacion", array(), "any", false, true), "telefono_2", array(), "any", true, true)) {
            // line 81
            echo "                    ";
            if (($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "movilizacion", array()), "telefono_2", array()) == "''")) {
                echo " 
                    ";
            } else {
                // line 82
                echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "movilizacion", array()), "telefono_2", array())), "html", null, true);
                echo "
                    ";
            }
            // line 84
            echo "                  ";
        }
        // line 85
        echo "                </div></td>
              </tr>
              <tr>
                <td><strong>Responsable Testigos</strong></td>
                <td><div class=\"editarNombre\" id=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "testigo", array()), "id_ubch", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "testigo", array()), "apellidos_nombres", array()), "html", null, true);
        echo " (CI.";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "testigo", array()), "cedula", array()), "html", null, true);
        echo ")</div></td>
              </tr>  
              <tr>
                <td><strong>Tel&eacute;fonos</strong></td>
                <td><div class=\"editarTelf\" id=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "testigo", array()), "id_ubch", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "testigo", array()), "telefono_1", array())), "html", null, true);
        echo " 
                  ";
        // line 94
        if ($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "testigo", array(), "any", false, true), "telefono_2", array(), "any", true, true)) {
            echo " 
                    ";
            // line 95
            if (($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "testigo", array()), "telefono_2", array()) == "''")) {
                echo " 
                    ";
            } else {
                // line 96
                echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "testigo", array()), "telefono_2", array())), "html", null, true);
                echo "
                    ";
            }
            // line 98
            echo "                  ";
        }
        // line 99
        echo "                </div></td>
              </tr>
            </thead> 
          </table>
        </div>
      </div>
    </div>

    <div class=\"col-xs-12 col-md-4\">
        <div class=\"row\">
          <div class=\"col-xs-13\">
            <strong>¿Cuáles mesas de votaci&oacute;n est&aacute;n instaladas?</strong>
            ";
        // line 111
        $context["mesas"] = $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "cantidadMesas", array());
        // line 112
        echo "              <div>";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["mesas"]) ? $context["mesas"] : $this->getContext($context, "mesas"))));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["mesa"]) {
            // line 113
            echo "                ";
            $context["checked"] = "";
            // line 114
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["contactados"]) ? $context["contactados"] : $this->getContext($context, "contactados")));
            foreach ($context['_seq'] as $context["_key"] => $context["contactado"]) {
                // line 115
                echo "                  ";
                if ((($this->getAttribute($context["contactado"], "numeroMesa", array()) == $context["mesa"]) && ($this->getAttribute($context["contactado"], "respuesta", array()) == "si"))) {
                    // line 116
                    echo "                    ";
                    $context["checked"] = "checked disabled='disabled'";
                    // line 117
                    echo "                  ";
                }
                // line 118
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contactado'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "                Mesa ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "&nbsp;<input for=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" type=\"checkbox\" name=\"form[mesa";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "]\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" value=\"si\" ";
            echo twig_escape_filter($this->env, (isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked")), "html", null, true);
            echo " >&nbsp;
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mesa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "</div>
          </div>
        </div><br>
        <div class=\"row\">
          <div class=\"col-xs-13\">
            
            <div><strong>¿Cuantos testigos asistieron?</strong>
            </div>
            <div class=\"col-xs-3\">
              <div>
                <select id=\"form_municipio\" name=\"form[testigos]\" class=\"form-control input-sm validate[required]\">
                  <option value=\"0\" ";
        // line 131
        if ( !twig_test_empty((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")))) {
            if (($this->getAttribute((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")), "respuesta", array()) == 0)) {
                echo "selected";
            }
        }
        echo ">0</option>
                  <option value=\"1\" ";
        // line 132
        if ( !twig_test_empty((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")))) {
            if (($this->getAttribute((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")), "respuesta", array()) == 1)) {
                echo "selected";
            }
        }
        echo ">1</option>
                  <option value=\"2\" ";
        // line 133
        if ( !twig_test_empty((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")))) {
            if (($this->getAttribute((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")), "respuesta", array()) == 2)) {
                echo "selected";
            }
        }
        echo ">2</option>
                  <option value=\"3\" ";
        // line 134
        if ( !twig_test_empty((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")))) {
            if (($this->getAttribute((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")), "respuesta", array()) == 3)) {
                echo "selected";
            }
        }
        echo ">3</option>
                  <option value=\"4\" ";
        // line 135
        if ( !twig_test_empty((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")))) {
            if (($this->getAttribute((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")), "respuesta", array()) == 4)) {
                echo "selected";
            }
        }
        echo ">4</option>
                  <option value=\"5\" ";
        // line 136
        if ( !twig_test_empty((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")))) {
            if (($this->getAttribute((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")), "respuesta", array()) == 5)) {
                echo "selected";
            }
        }
        echo ">5</option>
                  <option value=\"6\" ";
        // line 137
        if ( !twig_test_empty((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")))) {
            if (($this->getAttribute((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")), "respuesta", array()) == 6)) {
                echo "selected";
            }
        }
        echo ">6</option>
                  <option value=\"7\" ";
        // line 138
        if ( !twig_test_empty((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")))) {
            if (($this->getAttribute((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")), "respuesta", array()) == 7)) {
                echo "selected";
            }
        }
        echo ">7</option>
                  <option value=\"8\" ";
        // line 139
        if ( !twig_test_empty((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")))) {
            if (($this->getAttribute((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")), "respuesta", array()) == 8)) {
                echo "selected";
            }
        }
        echo ">8</option>
                  <option value=\"9\" ";
        // line 140
        if ( !twig_test_empty((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")))) {
            if (($this->getAttribute((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")), "respuesta", array()) == 9)) {
                echo "selected";
            }
        }
        echo ">9</option>
                  <option value=\"10\" ";
        // line 141
        if ( !twig_test_empty((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")))) {
            if (($this->getAttribute((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")), "respuesta", array()) == 10)) {
                echo "selected";
            }
        }
        echo ">10</option>
                  <option value=\"11\" ";
        // line 142
        if ( !twig_test_empty((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")))) {
            if (($this->getAttribute((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")), "respuesta", array()) == 11)) {
                echo "selected";
            }
        }
        echo ">11</option>
                  <option value=\"12\" ";
        // line 143
        if ( !twig_test_empty((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")))) {
            if (($this->getAttribute((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")), "respuesta", array()) == 12)) {
                echo "selected";
            }
        }
        echo ">12</option>
                  <option value=\"13\" ";
        // line 144
        if ( !twig_test_empty((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")))) {
            if (($this->getAttribute((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")), "respuesta", array()) == 13)) {
                echo "selected";
            }
        }
        echo ">13</option>
                  <option value=\"14\" ";
        // line 145
        if ( !twig_test_empty((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")))) {
            if (($this->getAttribute((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")), "respuesta", array()) == 14)) {
                echo "selected";
            }
        }
        echo ">14</option>
                  <option value=\"15\" ";
        // line 146
        if ( !twig_test_empty((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")))) {
            if (($this->getAttribute((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")), "respuesta", array()) == 15)) {
                echo "selected";
            }
        }
        echo ">15</option>
                  <option value=\"16\" ";
        // line 147
        if ( !twig_test_empty((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")))) {
            if (($this->getAttribute((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")), "respuesta", array()) == 16)) {
                echo "selected";
            }
        }
        echo ">16</option>
                  <option value=\"17\" ";
        // line 148
        if ( !twig_test_empty((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")))) {
            if (($this->getAttribute((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")), "respuesta", array()) == 17)) {
                echo "selected";
            }
        }
        echo ">17</option>
                  <option value=\"18\" ";
        // line 149
        if ( !twig_test_empty((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")))) {
            if (($this->getAttribute((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")), "respuesta", array()) == 18)) {
                echo "selected";
            }
        }
        echo ">18</option>
                  <option value=\"19\" ";
        // line 150
        if ( !twig_test_empty((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")))) {
            if (($this->getAttribute((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")), "respuesta", array()) == 19)) {
                echo "selected";
            }
        }
        echo ">19</option>
                  <option value=\"20\" ";
        // line 151
        if ( !twig_test_empty((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")))) {
            if (($this->getAttribute((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")), "respuesta", array()) == 20)) {
                echo "selected";
            }
        }
        echo ">20</option>
                  <option value=\"21\" ";
        // line 152
        if ( !twig_test_empty((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")))) {
            if (($this->getAttribute((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")), "respuesta", array()) == 21)) {
                echo "selected";
            }
        }
        echo ">21</option>
                  <option value=\"22\" ";
        // line 153
        if ( !twig_test_empty((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")))) {
            if (($this->getAttribute((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")), "respuesta", array()) == 22)) {
                echo "selected";
            }
        }
        echo ">22</option>
                  <option value=\"23\" ";
        // line 154
        if ( !twig_test_empty((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")))) {
            if (($this->getAttribute((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")), "respuesta", array()) == 23)) {
                echo "selected";
            }
        }
        echo ">23</option>
                  <option value=\"24\" ";
        // line 155
        if ( !twig_test_empty((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")))) {
            if (($this->getAttribute((isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")), "respuesta", array()) == 24)) {
                echo "selected";
            }
        }
        echo ">24</option>

                </select>
              </div>
            </div>
          </div>
        </div><br>
        <div class=\"row\">
          <div class=\"col-xs-13\">
    
            <div>
              <strong>¿UBCH presente?</strong>
            </div>
   
            <div>Si&nbsp;&nbsp;<input type=\"radio\" class=\"validate[required]\" name=\"form[miembros]\" value=\"si\" ";
        // line 169
        if ( !twig_test_empty((isset($context["miembros"]) ? $context["miembros"] : $this->getContext($context, "miembros")))) {
            if (($this->getAttribute((isset($context["miembros"]) ? $context["miembros"] : $this->getContext($context, "miembros")), "respuesta", array()) == "si")) {
                echo "checked=\"checked\"";
            }
        }
        echo ">&nbsp;&nbsp; No&nbsp;&nbsp;<input type=\"radio\" name=\"form[miembros]\" value=\"no\" ";
        if ( !twig_test_empty((isset($context["miembros"]) ? $context["miembros"] : $this->getContext($context, "miembros")))) {
            if (($this->getAttribute((isset($context["miembros"]) ? $context["miembros"] : $this->getContext($context, "miembros")), "respuesta", array()) == "no")) {
                echo "checked=\"checked\"";
            }
        }
        echo "></div>
    
          </div>
        </div>
    </div>

    <div class=\"col-xs-12 col-md-12\">
    <div class=\"row\">
      <div class=\"col-md-13\">
        <center><input class=\"fueraoverflow btn btn-default\" type=\"submit\" value=\"Guardar\" name=\"form[boton_guardar]\" /> <input class=\"fueraoverflow btn btn-default\" type=\"submit\" id=\"otro\" value=\"Buscar Otro\" name=\"form[boton_buscar]\" /> <a href=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_datosEncuestaSufragio", array("id_encuesta" => $this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "id", array()))), "html", null, true);
        echo "\"> <input class=\"fueraoverflow btn btn-default\" type=\"button\" value=\"Cancelar\" name=\"form[boton_cancelar]\"/></a></center>
      </div>
    </div>
    </div> 
  </form>

  <script>

    \$(document).ready(function(){ 

      \$( \"#mytable tr:even\" ).css( \"background-color\", \"#d0d2d3\" ); 

      \$('#otro').on( \"click\", function() {
        \$('*[type=\"radio\"]').removeClass( \"validate[required]\" )
      });

      /* campo editables */
      \$('.editarNombre').editable('";
        // line 195
        echo $this->env->getExtension('routing')->getPath("encuestas_editar_datos", array("tipo" => "ubch"));
        echo "', {
         //indicator : \"Guardando...\",
         indicator : \"<img src='";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/bx_loader.gif"), "html", null, true);
        echo "'>\",
         tooltip   : 'Doble clic para editar...',
         id   : 'nombre',
         event  : \"dblclick\",
         submit  : 'OK'
      });
      /*  */

      /* campo editables telefono*/
      \$('.editarTelf').editable('";
        // line 206
        echo $this->env->getExtension('routing')->getPath("encuestas_editar_datos", array("tipo" => "ubch"));
        echo "', {
         indicator : \"<img src='";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/bx_loader.gif"), "html", null, true);
        echo "'>\",
         tooltip   : 'Doble clic para editar...',
         id   : 'telefono',
         event  : \"dblclick\",
         submit  : 'OK'
      });
      /*  */

    });
  </script>
";
    }

    public function getTemplateName()
    {
        return "EncuestasBundle:Encuestas:mostrarDatosFase1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  640 => 207,  636 => 206,  624 => 197,  619 => 195,  599 => 178,  577 => 169,  556 => 155,  548 => 154,  540 => 153,  532 => 152,  524 => 151,  516 => 150,  508 => 149,  500 => 148,  492 => 147,  484 => 146,  476 => 145,  468 => 144,  460 => 143,  452 => 142,  444 => 141,  436 => 140,  428 => 139,  420 => 138,  412 => 137,  404 => 136,  396 => 135,  388 => 134,  380 => 133,  372 => 132,  364 => 131,  351 => 120,  326 => 119,  320 => 118,  317 => 117,  314 => 116,  311 => 115,  306 => 114,  303 => 113,  285 => 112,  283 => 111,  269 => 99,  266 => 98,  261 => 96,  256 => 95,  252 => 94,  246 => 93,  235 => 89,  229 => 85,  226 => 84,  221 => 82,  215 => 81,  213 => 80,  207 => 79,  196 => 75,  190 => 71,  187 => 70,  182 => 68,  177 => 67,  173 => 66,  167 => 65,  157 => 62,  151 => 58,  148 => 57,  143 => 55,  137 => 54,  135 => 53,  129 => 52,  118 => 48,  111 => 44,  104 => 40,  97 => 36,  88 => 29,  67 => 14,  60 => 9,  56 => 8,  50 => 7,  47 => 6,  44 => 5,  36 => 3,  30 => 2,  11 => 1,);
    }
}
