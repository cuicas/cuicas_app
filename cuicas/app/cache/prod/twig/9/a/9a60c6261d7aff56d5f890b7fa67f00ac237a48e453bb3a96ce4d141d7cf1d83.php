<?php

/* EncuestasBundle:Encuestas:detalleVentanaFase1.html.twig */
class __TwigTemplate_9a60c6261d7aff56d5f890b7fa67f00ac237a48e453bb3a96ce4d141d7cf1d83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titulo' => array($this, 'block_titulo'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('title', $context, $blocks);
        // line 3
        $this->displayBlock('titulo', $context, $blocks);
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 159
        echo "   
";
        // line 160
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        echo "<div style=\"font-family: sans-serif;\">Reporte: ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "nombreEncuesta", array())), "html", null, true);
        echo "</div>
";
        // line 4
        $context["Fecha"] = twig_date_format_filter($this->env, "Now", "d-m-Y", "America/Caracas");
        // line 5
        $context["Hora"] = twig_date_format_filter($this->env, "Now", "h:i:s", "America/Caracas");
        // line 6
        echo "<div style=\"font-family: sans-serif;\">Fecha: ";
        echo twig_escape_filter($this->env, (isset($context["Fecha"]) ? $context["Fecha"] : $this->getContext($context, "Fecha")), "html", null, true);
        echo ", Hora: ";
        echo twig_escape_filter($this->env, (isset($context["Hora"]) ? $context["Hora"] : $this->getContext($context, "Hora")), "html", null, true);
        echo "
</div>
";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/marco.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />  
  <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/ventanas-modales.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/tooltip.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">

";
    }

    // line 16
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 17
        echo "<br><br><br>
<center>
  ";
        // line 19
        if (array_key_exists("encuesta", $context)) {
            // line 20
            echo "      <table class=\"table stacktable table-hover\" border=\"1\" style=\"position: absolute; top:150px;\">
        ";
            // line 21
            $context["totalMesaEstadal"] = 0;
            // line 22
            echo "        ";
            $context["totalTestigosEstadal"] = 0;
            // line 23
            echo "        ";
            $context["totalMiembrosEstadal"] = 0;
            // line 24
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["circuitos"]) ? $context["circuitos"] : $this->getContext($context, "circuitos"))));
            foreach ($context['_seq'] as $context["_key"] => $context["circuito"]) {
                // line 25
                echo "            ";
                $context["totalMiembrosCircuito"] = 0;
                // line 26
                echo "            ";
                $context["totalTestigosCircuito"] = 0;
                // line 27
                echo "            ";
                $context["totalMesasCircuito"] = 0;
                // line 28
                echo "            ";
                if ( !twig_test_empty((isset($context["totalGlobal"]) ? $context["totalGlobal"] : $this->getContext($context, "totalGlobal")))) {
                    // line 29
                    echo "              <thead>
                <th colspan=\"2\" align=\"center\">Total Por Municipio y Circuito</th>
                <th align=\"center\">Mesas Instaladas</th>
                <th align=\"center\">Testigos</th>
                <th align=\"center\">Miembros</th>
              </thead>
            ";
                }
                // line 36
                echo "              <thead>
                ";
                // line 37
                if ( !twig_test_empty((isset($context["instalacion"]) ? $context["instalacion"] : $this->getContext($context, "instalacion")))) {
                    // line 38
                    echo "                  <tr>
                    <td></td><th colspan=\"2\">Circuito: ";
                    // line 39
                    echo twig_escape_filter($this->env, $context["circuito"], "html", null, true);
                    echo "</th> <td colspan=\"2\"></td>
                  </tr>
                ";
                }
                // line 42
                echo "              </thead>
          ";
                // line 43
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["municipios"]) ? $context["municipios"] : $this->getContext($context, "municipios"))));
                foreach ($context['_seq'] as $context["_key"] => $context["municipio"]) {
                    // line 44
                    echo "            ";
                    if (($this->getAttribute($this->getAttribute($context["municipio"], "circuito", array()), "id", array()) == $this->getAttribute($context["circuito"], "id", array()))) {
                        // line 45
                        echo "            ";
                        if ( !twig_test_empty((isset($context["instalacion"]) ? $context["instalacion"] : $this->getContext($context, "instalacion")))) {
                            // line 46
                            echo "              <thead>
                <tr>
                  <th colspan=\"5\">Municipio: ";
                            // line 48
                            echo twig_escape_filter($this->env, $this->getAttribute($context["municipio"], "nombreMunicipio", array()), "html", null, true);
                            echo "</th>
                </tr>
                <tr>
                  <th>Parroquias</th>
                  <th align=\"center\">Centros de Votaci&oacute;n</th>
                  <th align=\"center\">Mesas Instaladas</th>
                  <th align=\"center\">Testigos</th>
                  <th align=\"center\">Miembros</th>
                </tr>
              </thead>
            ";
                        }
                        // line 59
                        echo "            ";
                        $context["encontrado"] = "";
                        // line 60
                        echo "            ";
                        $context["totalMiembros"] = 0;
                        // line 61
                        echo "            ";
                        $context["totalTestigos"] = 0;
                        // line 62
                        echo "            ";
                        $context["totalMesas"] = 0;
                        // line 63
                        echo "            ";
                        $context["mesas"] = 0;
                        // line 64
                        echo "            ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos"))));
                        foreach ($context['_seq'] as $context["_key"] => $context["contactadosSufragio"]) {
                            // line 65
                            echo "              ";
                            if (($this->getAttribute($context["contactadosSufragio"], "municipio", array()) == $this->getAttribute($context["municipio"], "id", array()))) {
                                // line 66
                                echo "                ";
                                if ( !twig_test_empty((isset($context["instalacion"]) ? $context["instalacion"] : $this->getContext($context, "instalacion")))) {
                                    // line 67
                                    echo "                  <tr>
                    <td>
                      ";
                                    // line 69
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["contactadosSufragio"], "paq", array()), "html", null, true);
                                    echo "
                    </td>
                    <td>
                      ";
                                    // line 72
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["contactadosSufragio"], "cv", array()), "html", null, true);
                                    echo "
                    </td>
                    <td>
                      ";
                                    // line 75
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["contactadosSufragio"], "mi", array()), "html", null, true);
                                    echo "
                    </td>
                ";
                                }
                                // line 78
                                echo "                ";
                                if (($this->getAttribute($context["contactadosSufragio"], "mi", array()) != "Ninguna")) {
                                    // line 79
                                    echo "                      ";
                                    $context["mesas"] = twig_split_filter($this->env, $this->getAttribute($context["contactadosSufragio"], "mi", array()), ",");
                                    // line 80
                                    echo "                      ";
                                    $context["totalMesas"] = ((isset($context["totalMesas"]) ? $context["totalMesas"] : $this->getContext($context, "totalMesas")) + twig_length_filter($this->env, (isset($context["mesas"]) ? $context["mesas"] : $this->getContext($context, "mesas"))));
                                    // line 81
                                    echo "                      ";
                                    $context["totalMesasCircuito"] = (twig_length_filter($this->env, (isset($context["mesas"]) ? $context["mesas"] : $this->getContext($context, "mesas"))) + (isset($context["totalMesasCircuito"]) ? $context["totalMesasCircuito"] : $this->getContext($context, "totalMesasCircuito")));
                                    // line 82
                                    echo "                      ";
                                    $context["totalMesaEstadal"] = (twig_length_filter($this->env, (isset($context["mesas"]) ? $context["mesas"] : $this->getContext($context, "mesas"))) + (isset($context["totalMesaEstadal"]) ? $context["totalMesaEstadal"] : $this->getContext($context, "totalMesaEstadal")));
                                    // line 83
                                    echo "                ";
                                }
                                // line 84
                                echo "                ";
                                if ( !twig_test_empty((isset($context["instalacion"]) ? $context["instalacion"] : $this->getContext($context, "instalacion")))) {
                                    echo "  
                    <td>
                      ";
                                    // line 86
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["contactadosSufragio"], "testigos", array()), "html", null, true);
                                    echo "
                    </td>
                ";
                                }
                                // line 89
                                echo "                ";
                                if (($this->getAttribute($context["contactadosSufragio"], "testigos", array()) != 0)) {
                                    // line 90
                                    echo "                  ";
                                    $context["testigos"] = twig_split_filter($this->env, $this->getAttribute($context["contactadosSufragio"], "testigos", array()), ",");
                                    // line 91
                                    echo "                  ";
                                    // line 92
                                    echo "                  ";
                                    $context["totalTestigos"] = ((isset($context["totalTestigos"]) ? $context["totalTestigos"] : $this->getContext($context, "totalTestigos")) + twig_length_filter($this->env, (isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos"))));
                                    // line 93
                                    echo "                  ";
                                    $context["totalTestigosCircuito"] = (twig_length_filter($this->env, (isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos"))) + (isset($context["totalTestigosCircuito"]) ? $context["totalTestigosCircuito"] : $this->getContext($context, "totalTestigosCircuito")));
                                    // line 94
                                    echo "                  ";
                                    $context["totalTestigosEstadal"] = (twig_length_filter($this->env, (isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos"))) + (isset($context["totalTestigosEstadal"]) ? $context["totalTestigosEstadal"] : $this->getContext($context, "totalTestigosEstadal")));
                                    // line 95
                                    echo "                ";
                                }
                                // line 96
                                echo "                ";
                                if ( !twig_test_empty((isset($context["instalacion"]) ? $context["instalacion"] : $this->getContext($context, "instalacion")))) {
                                    echo "  
                    <td>
                      ";
                                    // line 98
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["contactadosSufragio"], "miembros", array()), "html", null, true);
                                    echo "
                    </td>
                  </tr>
                ";
                                }
                                // line 102
                                echo "                ";
                                if ((($this->getAttribute($context["contactadosSufragio"], "miembros", array()) != "Ninguna") && ($this->getAttribute($context["contactadosSufragio"], "miembros", array()) != "no"))) {
                                    // line 103
                                    echo "                          ";
                                    $context["miembros"] = twig_split_filter($this->env, $this->getAttribute($context["contactadosSufragio"], "miembros", array()), ",");
                                    // line 104
                                    echo "                          ";
                                    $context["totalMiembros"] = ((isset($context["totalMiembros"]) ? $context["totalMiembros"] : $this->getContext($context, "totalMiembros")) + twig_length_filter($this->env, (isset($context["miembros"]) ? $context["miembros"] : $this->getContext($context, "miembros"))));
                                    // line 105
                                    echo "                          ";
                                    $context["totalMiembrosCircuito"] = (twig_length_filter($this->env, (isset($context["miembros"]) ? $context["miembros"] : $this->getContext($context, "miembros"))) + (isset($context["totalMiembrosCircuito"]) ? $context["totalMiembrosCircuito"] : $this->getContext($context, "totalMiembrosCircuito")));
                                    // line 106
                                    echo "                          ";
                                    $context["totalMiembrosEstadal"] = (twig_length_filter($this->env, (isset($context["miembros"]) ? $context["miembros"] : $this->getContext($context, "miembros"))) + (isset($context["totalMiembrosEstadal"]) ? $context["totalMiembrosEstadal"] : $this->getContext($context, "totalMiembrosEstadal")));
                                    // line 107
                                    echo "                        ";
                                }
                                echo "                
                ";
                                // line 108
                                $context["encontrado"] = "si";
                                // line 109
                                echo "              ";
                            }
                            // line 110
                            echo "            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contactadosSufragio'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 111
                        echo "            ";
                        if (((isset($context["encontrado"]) ? $context["encontrado"] : $this->getContext($context, "encontrado")) == "")) {
                            // line 112
                            echo "              ";
                            if ( !twig_test_empty((isset($context["instalacion"]) ? $context["instalacion"] : $this->getContext($context, "instalacion")))) {
                                echo " 
                <tr>
                  <th colspan=\"7\"> No existen datos registrados en el municipio ";
                                // line 114
                                echo twig_escape_filter($this->env, $this->getAttribute($context["municipio"], "nombreMunicipio", array()), "html", null, true);
                                echo "</th>
                </tr>
              ";
                            }
                            // line 117
                            echo "            ";
                        }
                        // line 118
                        echo "            ";
                        if (((isset($context["encontrado"]) ? $context["encontrado"] : $this->getContext($context, "encontrado")) == "si")) {
                            // line 119
                            echo "              ";
                            if ( !twig_test_empty((isset($context["totalGlobal"]) ? $context["totalGlobal"] : $this->getContext($context, "totalGlobal")))) {
                                // line 120
                                echo "              <tr>
                <td colspan=\"2\"> ";
                                // line 121
                                echo twig_escape_filter($this->env, $this->getAttribute($context["municipio"], "nombreMunicipio", array()), "html", null, true);
                                echo "</td><th>";
                                echo twig_escape_filter($this->env, (isset($context["totalMesas"]) ? $context["totalMesas"] : $this->getContext($context, "totalMesas")), "html", null, true);
                                echo "</th><th>";
                                echo twig_escape_filter($this->env, (isset($context["totalTestigos"]) ? $context["totalTestigos"] : $this->getContext($context, "totalTestigos")), "html", null, true);
                                echo "</th><th>";
                                echo twig_escape_filter($this->env, (isset($context["totalMiembros"]) ? $context["totalMiembros"] : $this->getContext($context, "totalMiembros")), "html", null, true);
                                echo "</th>
              </tr>
              ";
                            }
                            // line 124
                            echo "            ";
                        }
                        // line 125
                        echo "          ";
                    }
                    // line 126
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['municipio'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                echo "        ";
                if ( !twig_test_empty((isset($context["totalGlobal"]) ? $context["totalGlobal"] : $this->getContext($context, "totalGlobal")))) {
                    // line 128
                    echo "          <tr>
            <th colspan=\"2\"> CIRCUITO ";
                    // line 129
                    echo twig_escape_filter($this->env, $context["circuito"], "html", null, true);
                    echo "</th><th>";
                    echo twig_escape_filter($this->env, (isset($context["totalMesasCircuito"]) ? $context["totalMesasCircuito"] : $this->getContext($context, "totalMesasCircuito")), "html", null, true);
                    echo "</th><th>";
                    echo twig_escape_filter($this->env, (isset($context["totalTestigosCircuito"]) ? $context["totalTestigosCircuito"] : $this->getContext($context, "totalTestigosCircuito")), "html", null, true);
                    echo "</th><th>";
                    echo twig_escape_filter($this->env, (isset($context["totalMiembrosCircuito"]) ? $context["totalMiembrosCircuito"] : $this->getContext($context, "totalMiembrosCircuito")), "html", null, true);
                    echo "</th>
          </tr>
        ";
                }
                // line 132
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['circuito'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "      </table>
      ";
            // line 134
            if (twig_test_empty((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")))) {
                // line 135
                echo "        <tr>
          <th>
            No hay datos que mostrar para encuestas
          </th>
        </tr> 
      ";
            }
            // line 141
            echo "
      ";
            // line 142
            if ( !twig_test_empty((isset($context["totalGlobal"]) ? $context["totalGlobal"] : $this->getContext($context, "totalGlobal")))) {
                // line 143
                echo "       <table class=\"table stacktable table-hover\" border=\"1\" style=\"position: absolute; top:100px;\">
        <thead>
          <tr>
          <th>Total Estadal</th>
            <td>Mesas Instaladas: ";
                // line 147
                echo twig_escape_filter($this->env, (isset($context["totalMesaEstadal"]) ? $context["totalMesaEstadal"] : $this->getContext($context, "totalMesaEstadal")), "html", null, true);
                echo "</td><td>Testigos: ";
                echo twig_escape_filter($this->env, (isset($context["totalTestigosEstadal"]) ? $context["totalTestigosEstadal"] : $this->getContext($context, "totalTestigosEstadal")), "html", null, true);
                echo "</td><td>Miembros: ";
                echo twig_escape_filter($this->env, (isset($context["totalMiembrosEstadal"]) ? $context["totalMiembrosEstadal"] : $this->getContext($context, "totalMiembrosEstadal")), "html", null, true);
                echo "</td>
          </tr>
         

        </thead>
    
        ";
            }
            // line 153
            echo " 
  ";
        }
        // line 155
        echo "</center>
";
        // line 157
        echo "<center><input type=\"button\" class=\"btn btn-default\" style=\"position: absolute; top:50px;\" onclick=\"javascript:window.print();\" name=\"Imprimir\" value=\"Imprimir\"></center>
";
    }

    // line 160
    public function block_javascripts($context, array $blocks = array())
    {
        // line 161
        echo "  <script>
    \$(document).ready(function(){


      \$('.clsVentanaCerrar').live('click',function(eEvento){ alert('o');
        //prevenimos el comportamiento normal del enlace
        eEvento.preventDefault();
        //buscamos la ventana padre (del boton \"cerrar\")
        var \$objVentana=\$(\$(this).parents().get(1));
        
        //cerramos la ventana suavemente
        \$objVentana.fadeOut(300,function(){
          //eliminamos la ventana del DOM
          \$(this).remove();
          //ocultamos el overlay suavemente
          \$('#divOverlay').fadeOut(500,function(){
            //eliminamos el overlay del DOM
            \$(this).remove();
          });
        });
      });

    }
  </script>
";
    }

    public function getTemplateName()
    {
        return "EncuestasBundle:Encuestas:detalleVentanaFase1.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  449 => 161,  446 => 160,  441 => 157,  438 => 155,  434 => 153,  420 => 147,  414 => 143,  412 => 142,  409 => 141,  401 => 135,  399 => 134,  396 => 133,  390 => 132,  378 => 129,  375 => 128,  372 => 127,  366 => 126,  363 => 125,  360 => 124,  348 => 121,  345 => 120,  342 => 119,  339 => 118,  336 => 117,  330 => 114,  324 => 112,  321 => 111,  315 => 110,  312 => 109,  310 => 108,  305 => 107,  302 => 106,  299 => 105,  296 => 104,  293 => 103,  290 => 102,  283 => 98,  277 => 96,  274 => 95,  271 => 94,  268 => 93,  265 => 92,  263 => 91,  260 => 90,  257 => 89,  251 => 86,  245 => 84,  242 => 83,  239 => 82,  236 => 81,  233 => 80,  230 => 79,  227 => 78,  221 => 75,  215 => 72,  209 => 69,  205 => 67,  202 => 66,  199 => 65,  194 => 64,  191 => 63,  188 => 62,  185 => 61,  182 => 60,  179 => 59,  165 => 48,  161 => 46,  158 => 45,  155 => 44,  151 => 43,  148 => 42,  142 => 39,  139 => 38,  137 => 37,  134 => 36,  125 => 29,  122 => 28,  119 => 27,  116 => 26,  113 => 25,  108 => 24,  105 => 23,  102 => 22,  100 => 21,  97 => 20,  95 => 19,  91 => 17,  88 => 16,  81 => 13,  77 => 12,  73 => 11,  68 => 10,  65 => 9,  55 => 6,  53 => 5,  51 => 4,  44 => 3,  39 => 2,  35 => 160,  32 => 159,  30 => 16,  28 => 9,  26 => 3,  24 => 2,);
    }
}
