<?php

/* EncuestasBundle:Encuestas:detalleVentanaFase2.html.twig */
class __TwigTemplate_f8d0fe00ffd57dc153d0f9e620e7540c17edf88cc3c897ed31ab9909cab95cb2 extends Twig_Template
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
        // line 15
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 213
        echo "   
";
        // line 214
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
        echo "</div>
<div style=\"font-family: sans-serif;\"> </div>
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

    // line 15
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 16
        echo "<br><br><br>
<center>
  ";
        // line 19
        echo "  ";
        if (array_key_exists("encuesta", $context)) {
            // line 20
            echo "
      <table class=\"table stacktable table-hover\" border=\"1\" style=\"position: absolute; top:150px;\">
        ";
            // line 22
            $context["totalMesaEstadal"] = 0;
            // line 23
            echo "        ";
            $context["totalTestigosEstadal"] = 0;
            // line 24
            echo "        ";
            $context["totalCierreEstadal"] = 0;
            // line 25
            echo "        ";
            $context["totalChEstadal"] = 0;
            // line 26
            echo "        ";
            $context["totalOpEstadal"] = 0;
            // line 27
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["circuitos"]) ? $context["circuitos"] : $this->getContext($context, "circuitos"))));
            foreach ($context['_seq'] as $context["_key"] => $context["circuito"]) {
                // line 28
                echo "        ";
                if (twig_test_empty((isset($context["totalGlobal"]) ? $context["totalGlobal"] : $this->getContext($context, "totalGlobal")))) {
                    // line 29
                    echo "        <thead>
          <td></td><th colspan=\"4\">Circuito: ";
                    // line 30
                    echo twig_escape_filter($this->env, $context["circuito"], "html", null, true);
                    echo "</th> <td colspan=\"4\"></td>
        </thead>
        ";
                }
                // line 33
                echo "            ";
                $context["totalTestigosCircuito"] = 0;
                // line 34
                echo "            ";
                $context["totalMesasCircuito"] = 0;
                // line 35
                echo "            ";
                $context["totalCierreCircuito"] = 0;
                // line 36
                echo "            ";
                $context["totalChCircuito"] = 0;
                echo " 
            ";
                // line 37
                $context["totalOpCircuito"] = 0;
                // line 38
                echo "        
        ";
                // line 39
                if ( !twig_test_empty((isset($context["totalGlobal"]) ? $context["totalGlobal"] : $this->getContext($context, "totalGlobal")))) {
                    // line 40
                    echo "              <thead>
                <th colspan=\"\" align=\"center\">Total Por Municipio y Circuito</th>
               <th align=\"center\">Apertura</th>
                <th align=\"center\">Testigos</th>
                <th align=\"center\">Cierre</th>
                <th align=\"center\">Chavistas</th>
                <th align=\"center\">Opositores</th>
              </thead>
            ";
                }
                // line 49
                echo "        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["municipios"]) ? $context["municipios"] : $this->getContext($context, "municipios"))));
                foreach ($context['_seq'] as $context["_key"] => $context["municipio"]) {
                    // line 50
                    echo "          ";
                    if (($this->getAttribute($this->getAttribute($context["municipio"], "circuito", array()), "id", array()) == $this->getAttribute($context["circuito"], "id", array()))) {
                        // line 51
                        echo "          ";
                        if (twig_test_empty((isset($context["totalGlobal"]) ? $context["totalGlobal"] : $this->getContext($context, "totalGlobal")))) {
                            // line 52
                            echo "          <thead>
            <tr>
              <th colspan=\"7\">Municipio: ";
                            // line 54
                            echo twig_escape_filter($this->env, $this->getAttribute($context["municipio"], "nombreMunicipio", array()), "html", null, true);
                            echo "</th>
            </tr>
            <tr>
              <th>Parroquia</th><th align=\"center\">Centro de Votaci&oacute;n</th>
              ";
                            // line 58
                            if ( !twig_test_empty((isset($context["asistencia"]) ? $context["asistencia"] : $this->getContext($context, "asistencia")))) {
                                // line 59
                                echo "                <th align=\"center\">Apertura</th>
                <th align=\"center\">Testigos</th>
                <th align=\"center\">Cierre</th>
              ";
                            }
                            // line 63
                            echo "              ";
                            if (twig_test_empty((isset($context["asistencia"]) ? $context["asistencia"] : $this->getContext($context, "asistencia")))) {
                                // line 64
                                echo "                <th align=\"center\">Chavistas</th>
                <th align=\"center\">Opositores</th>
              ";
                            }
                            // line 67
                            echo "              <th>Tipo de Incidencias</th>
              <th>Incidencias</th>
            </tr>
          </thead>
          ";
                        }
                        // line 72
                        echo "          ";
                        $context["encontrado"] = "";
                        // line 73
                        echo "          ";
                        $context["totalCh"] = 0;
                        // line 74
                        echo "          ";
                        $context["totalOp"] = 0;
                        // line 75
                        echo "          ";
                        $context["totalMiembros"] = 0;
                        // line 76
                        echo "          ";
                        $context["totalMiembrosSi"] = 0;
                        // line 77
                        echo "          
          ";
                        // line 78
                        $context["mesas"] = 0;
                        // line 79
                        echo "          ";
                        $context["cierre"] = 0;
                        // line 80
                        echo "          ";
                        $context["testigos"] = 0;
                        // line 81
                        echo "          ";
                        $context["totalMesas"] = 0;
                        // line 82
                        echo "          ";
                        $context["totalTestigos"] = 0;
                        // line 83
                        echo "          ";
                        $context["totalCierre"] = 0;
                        // line 84
                        echo "          ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos"))));
                        foreach ($context['_seq'] as $context["_key"] => $context["contactadosSufragio"]) {
                            // line 85
                            echo "            ";
                            if (($this->getAttribute($context["contactadosSufragio"], "municipio", array()) == $this->getAttribute($context["municipio"], "id", array()))) {
                                // line 86
                                echo "
              <tr>
                ";
                                // line 88
                                if (twig_test_empty((isset($context["totalGlobal"]) ? $context["totalGlobal"] : $this->getContext($context, "totalGlobal")))) {
                                    // line 89
                                    echo "                <th>
                      ";
                                    // line 90
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["contactadosSufragio"], "paq", array()), "html", null, true);
                                    echo "
                </th>
                <th>
                      ";
                                    // line 93
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["contactadosSufragio"], "cv", array()), "html", null, true);
                                    echo "
                </th>
                ";
                                }
                                // line 96
                                echo "                ";
                                if ( !twig_test_empty((isset($context["asistencia"]) ? $context["asistencia"] : $this->getContext($context, "asistencia")))) {
                                    // line 97
                                    echo "                <th>
                      ";
                                    // line 98
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["contactadosSufragio"], "apertura", array()), "html", null, true);
                                    echo "

                 </th>
                <th>
                      ";
                                    // line 102
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["contactadosSufragio"], "testigos", array()), "html", null, true);
                                    echo "
                    </th>
                <th>
                      ";
                                    // line 105
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["contactadosSufragio"], "cierre", array()), "html", null, true);
                                    echo "
                </th>
                ";
                                }
                                // line 108
                                echo "                ";
                                if (($this->getAttribute($context["contactadosSufragio"], "apertura", array()) != "Ninguna")) {
                                    // line 109
                                    echo "                        ";
                                    $context["mesas"] = twig_split_filter($this->env, $this->getAttribute($context["contactadosSufragio"], "apertura", array()), ",");
                                    // line 110
                                    echo "                        ";
                                    $context["totalMesas"] = ((isset($context["totalMesas"]) ? $context["totalMesas"] : $this->getContext($context, "totalMesas")) + twig_length_filter($this->env, (isset($context["mesas"]) ? $context["mesas"] : $this->getContext($context, "mesas"))));
                                    // line 111
                                    echo "                     ";
                                }
                                // line 112
                                echo "                      ";
                                $context["totalMesasCircuito"] = (twig_length_filter($this->env, (isset($context["mesas"]) ? $context["mesas"] : $this->getContext($context, "mesas"))) + (isset($context["totalMesasCircuito"]) ? $context["totalMesasCircuito"] : $this->getContext($context, "totalMesasCircuito")));
                                // line 113
                                echo "                       ";
                                $context["totalMesaEstadal"] = (twig_length_filter($this->env, (isset($context["mesas"]) ? $context["mesas"] : $this->getContext($context, "mesas"))) + (isset($context["totalMesaEstadal"]) ? $context["totalMesaEstadal"] : $this->getContext($context, "totalMesaEstadal")));
                                // line 114
                                echo "                 
                ";
                                // line 115
                                if ((($this->getAttribute($context["contactadosSufragio"], "testigos", array()) != "Ninguna") && ($this->getAttribute($context["contactadosSufragio"], "testigos", array()) != ""))) {
                                    // line 116
                                    echo "                        ";
                                    $context["testigos"] = twig_split_filter($this->env, $this->getAttribute($context["contactadosSufragio"], "testigos", array()), ",");
                                    // line 117
                                    echo "                        ";
                                    $context["totalTestigos"] = ((isset($context["totalTestigos"]) ? $context["totalTestigos"] : $this->getContext($context, "totalTestigos")) + $this->getAttribute($context["contactadosSufragio"], "testigos", array()));
                                    // line 118
                                    echo "                        ";
                                    $context["totalTestigosCircuito"] = ($this->getAttribute($context["contactadosSufragio"], "testigos", array()) + (isset($context["totalTestigosCircuito"]) ? $context["totalTestigosCircuito"] : $this->getContext($context, "totalTestigosCircuito")));
                                    // line 119
                                    echo "                        ";
                                    $context["totalTestigosEstadal"] = ($this->getAttribute($context["contactadosSufragio"], "testigos", array()) + (isset($context["totalTestigosEstadal"]) ? $context["totalTestigosEstadal"] : $this->getContext($context, "totalTestigosEstadal")));
                                    // line 120
                                    echo "                        ";
                                    // line 121
                                    echo "                      ";
                                }
                                // line 122
                                echo "
                      ";
                                // line 123
                                if ((($this->getAttribute($context["contactadosSufragio"], "cierre", array()) != "Ninguna") && ($this->getAttribute($context["contactadosSufragio"], "cierre", array()) != ""))) {
                                    // line 124
                                    echo "                        ";
                                    $context["cierre"] = twig_split_filter($this->env, $this->getAttribute($context["contactadosSufragio"], "cierre", array()), ",");
                                    // line 125
                                    echo "                        ";
                                    $context["totalCierre"] = ((isset($context["totalCierre"]) ? $context["totalCierre"] : $this->getContext($context, "totalCierre")) + twig_length_filter($this->env, (isset($context["cierre"]) ? $context["cierre"] : $this->getContext($context, "cierre"))));
                                    // line 126
                                    echo "                      ";
                                }
                                // line 127
                                echo "                      ";
                                $context["totalCierreCircuito"] = (twig_length_filter($this->env, (isset($context["cierre"]) ? $context["cierre"] : $this->getContext($context, "cierre"))) + (isset($context["totalCierreCircuito"]) ? $context["totalCierreCircuito"] : $this->getContext($context, "totalCierreCircuito")));
                                // line 128
                                echo "                      ";
                                $context["totalCierreEstadal"] = (twig_length_filter($this->env, (isset($context["cierre"]) ? $context["cierre"] : $this->getContext($context, "cierre"))) + (isset($context["totalCierreEstadal"]) ? $context["totalCierreEstadal"] : $this->getContext($context, "totalCierreEstadal")));
                                // line 129
                                echo "
                ";
                                // line 130
                                if (twig_test_empty((isset($context["asistencia"]) ? $context["asistencia"] : $this->getContext($context, "asistencia")))) {
                                    // line 131
                                    echo "                ";
                                    if (twig_test_empty((isset($context["totalGlobal"]) ? $context["totalGlobal"] : $this->getContext($context, "totalGlobal")))) {
                                        // line 132
                                        echo "                <th>
                      ";
                                        // line 133
                                        echo twig_escape_filter($this->env, $this->getAttribute($context["contactadosSufragio"], "oficialistas", array()), "html", null, true);
                                        echo "
                </th>
                 <th>
                      ";
                                        // line 136
                                        echo twig_escape_filter($this->env, $this->getAttribute($context["contactadosSufragio"], "opositores", array()), "html", null, true);
                                        echo "
                </th>
                ";
                                    }
                                    // line 139
                                    echo "                ";
                                }
                                // line 140
                                echo "                ";
                                $context["totalCh"] = ((isset($context["totalCh"]) ? $context["totalCh"] : $this->getContext($context, "totalCh")) + $this->getAttribute($context["contactadosSufragio"], "oficialistas", array()));
                                // line 141
                                echo "                ";
                                $context["totalChCircuito"] = ($this->getAttribute($context["contactadosSufragio"], "oficialistas", array()) + (isset($context["totalChCircuito"]) ? $context["totalChCircuito"] : $this->getContext($context, "totalChCircuito")));
                                // line 142
                                echo "                ";
                                $context["totalChEstadal"] = ($this->getAttribute($context["contactadosSufragio"], "oficialistas", array()) + (isset($context["totalChEstadal"]) ? $context["totalChEstadal"] : $this->getContext($context, "totalChEstadal")));
                                // line 143
                                echo "                ";
                                $context["totalOp"] = ((isset($context["totalOp"]) ? $context["totalOp"] : $this->getContext($context, "totalOp")) + $this->getAttribute($context["contactadosSufragio"], "opositores", array()));
                                // line 144
                                echo "                ";
                                $context["totalOpCircuito"] = ($this->getAttribute($context["contactadosSufragio"], "opositores", array()) + (isset($context["totalOpCircuito"]) ? $context["totalOpCircuito"] : $this->getContext($context, "totalOpCircuito")));
                                // line 145
                                echo "                ";
                                $context["totalOpEstadal"] = ($this->getAttribute($context["contactadosSufragio"], "opositores", array()) + (isset($context["totalOpEstadal"]) ? $context["totalOpEstadal"] : $this->getContext($context, "totalOpEstadal")));
                                // line 146
                                echo "
                ";
                                // line 147
                                $context['_parent'] = (array) $context;
                                $context['_seq'] = twig_ensure_traversable((isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")));
                                foreach ($context['_seq'] as $context["_key"] => $context["incidencia"]) {
                                    // line 148
                                    echo "                  ";
                                    if (($this->getAttribute($context["contactadosSufragio"], "cvid", array()) == $this->getAttribute($context["incidencia"], "centroVotacion", array()))) {
                                        // line 149
                                        echo "                  ";
                                        if (twig_test_empty((isset($context["totalGlobal"]) ? $context["totalGlobal"] : $this->getContext($context, "totalGlobal")))) {
                                            // line 150
                                            echo "
                  <th>";
                                            // line 151
                                            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["incidencia"], "tipoIncidencia", array())), "html", null, true);
                                            echo "</th>
                  <th>";
                                            // line 152
                                            echo twig_escape_filter($this->env, $this->getAttribute($context["incidencia"], "descripcion", array()), "html", null, true);
                                            echo "</th> 
                  ";
                                        }
                                        // line 154
                                        echo "                   ";
                                    }
                                    // line 155
                                    echo "                  ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['incidencia'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 156
                                echo "
              </tr>
              ";
                                // line 158
                                $context["encontrado"] = "si";
                                // line 159
                                echo "            ";
                            }
                            // line 160
                            echo "          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contactadosSufragio'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 161
                        echo "          ";
                        if (twig_test_empty((isset($context["totalGlobal"]) ? $context["totalGlobal"] : $this->getContext($context, "totalGlobal")))) {
                            // line 162
                            echo "          ";
                            if (((isset($context["encontrado"]) ? $context["encontrado"] : $this->getContext($context, "encontrado")) == "")) {
                                // line 163
                                echo "            <tr>
              <th colspan=\"7\"> No existen datos registrados en las parroquias del municipio ";
                                // line 164
                                echo twig_escape_filter($this->env, $this->getAttribute($context["municipio"], "nombreMunicipio", array()), "html", null, true);
                                echo "</th>
            </tr>
          ";
                            }
                            // line 167
                            echo "           ";
                        }
                        // line 168
                        echo "          ";
                        if (((isset($context["encontrado"]) ? $context["encontrado"] : $this->getContext($context, "encontrado")) == "si")) {
                            // line 169
                            echo "            <tr>
              ";
                            // line 170
                            if ( !twig_test_empty((isset($context["totalGlobal"]) ? $context["totalGlobal"] : $this->getContext($context, "totalGlobal")))) {
                                // line 171
                                echo "              <td colspan=\"\"> ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["municipio"], "nombreMunicipio", array()), "html", null, true);
                                echo " </td><th>";
                                echo twig_escape_filter($this->env, (isset($context["totalMesas"]) ? $context["totalMesas"] : $this->getContext($context, "totalMesas")), "html", null, true);
                                echo "</th><th>";
                                echo twig_escape_filter($this->env, (isset($context["totalTestigos"]) ? $context["totalTestigos"] : $this->getContext($context, "totalTestigos")), "html", null, true);
                                echo "</th><th colspan=\"\">";
                                echo twig_escape_filter($this->env, (isset($context["totalCierre"]) ? $context["totalCierre"] : $this->getContext($context, "totalCierre")), "html", null, true);
                                echo "</th><th>";
                                echo twig_escape_filter($this->env, (isset($context["totalCh"]) ? $context["totalCh"] : $this->getContext($context, "totalCh")), "html", null, true);
                                echo "</th><th>";
                                echo twig_escape_filter($this->env, (isset($context["totalOp"]) ? $context["totalOp"] : $this->getContext($context, "totalOp")), "html", null, true);
                                echo "</th>
              ";
                            }
                            // line 173
                            echo "            </tr>
            <tr>
            </tr>
          ";
                        }
                        // line 177
                        echo "          ";
                    }
                    // line 178
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['municipio'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 179
                echo "          
          ";
                // line 180
                if ( !twig_test_empty((isset($context["totalGlobal"]) ? $context["totalGlobal"] : $this->getContext($context, "totalGlobal")))) {
                    // line 181
                    echo "          <tr>
            <th colspan=\"\">CIRCUITO ";
                    // line 182
                    echo twig_escape_filter($this->env, $context["circuito"], "html", null, true);
                    echo "</th><th>";
                    echo twig_escape_filter($this->env, (isset($context["totalMesasCircuito"]) ? $context["totalMesasCircuito"] : $this->getContext($context, "totalMesasCircuito")), "html", null, true);
                    echo "</th>
          <th>";
                    // line 183
                    echo twig_escape_filter($this->env, (isset($context["totalTestigosCircuito"]) ? $context["totalTestigosCircuito"] : $this->getContext($context, "totalTestigosCircuito")), "html", null, true);
                    echo "</th><th>";
                    echo twig_escape_filter($this->env, (isset($context["totalCierreCircuito"]) ? $context["totalCierreCircuito"] : $this->getContext($context, "totalCierreCircuito")), "html", null, true);
                    echo "</th><th>";
                    echo twig_escape_filter($this->env, (isset($context["totalChCircuito"]) ? $context["totalChCircuito"] : $this->getContext($context, "totalChCircuito")), "html", null, true);
                    echo "</th><th>";
                    echo twig_escape_filter($this->env, (isset($context["totalOpCircuito"]) ? $context["totalOpCircuito"] : $this->getContext($context, "totalOpCircuito")), "html", null, true);
                    echo "</th>
              ";
                }
                // line 185
                echo "            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['circuito'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "
      </table> 
      ";
            // line 189
            if (twig_test_empty((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")))) {
                // line 190
                echo "
            No hay datos que mostrar para encuestas

      ";
            }
            // line 194
            echo "
       ";
            // line 195
            if ( !twig_test_empty((isset($context["totalGlobal"]) ? $context["totalGlobal"] : $this->getContext($context, "totalGlobal")))) {
                // line 196
                echo "       <table class=\"table stacktable table-hover\" border=\"1\" style=\"position: absolute; top:100px;\">
        <thead>
          <tr>
          <th>Total Estadal</th>
            <td>Mesas Aperturadas: ";
                // line 200
                echo twig_escape_filter($this->env, (isset($context["totalMesaEstadal"]) ? $context["totalMesaEstadal"] : $this->getContext($context, "totalMesaEstadal")), "html", null, true);
                echo "</td><td>Testigos: ";
                echo twig_escape_filter($this->env, (isset($context["totalTestigosEstadal"]) ? $context["totalTestigosEstadal"] : $this->getContext($context, "totalTestigosEstadal")), "html", null, true);
                echo "</td><td>Cierre: ";
                echo twig_escape_filter($this->env, (isset($context["totalCierreEstadal"]) ? $context["totalCierreEstadal"] : $this->getContext($context, "totalCierreEstadal")), "html", null, true);
                echo "</td><td>Chavistas: ";
                echo twig_escape_filter($this->env, (isset($context["totalChEstadal"]) ? $context["totalChEstadal"] : $this->getContext($context, "totalChEstadal")), "html", null, true);
                echo "</td><td>Opositores: ";
                echo twig_escape_filter($this->env, (isset($context["totalOpEstadal"]) ? $context["totalOpEstadal"] : $this->getContext($context, "totalOpEstadal")), "html", null, true);
                echo "</td>
          </tr>
         

        </thead>
    
        ";
            }
            // line 206
            echo " 
  ";
        }
        // line 208
        echo "</center>
<center><input type=\"button\" class=\"btn btn-default\" style=\"position: absolute; top:50px;\" onclick=\"javascript:window.print();\" name=\"Imprimir\" value=\"Imprimir\"></center>
";
    }

    // line 214
    public function block_javascripts($context, array $blocks = array())
    {
        // line 215
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
        return "EncuestasBundle:Encuestas:detalleVentanaFase2.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  594 => 215,  591 => 214,  585 => 208,  581 => 206,  563 => 200,  557 => 196,  555 => 195,  552 => 194,  546 => 190,  544 => 189,  540 => 187,  533 => 185,  522 => 183,  516 => 182,  513 => 181,  511 => 180,  508 => 179,  502 => 178,  499 => 177,  493 => 173,  477 => 171,  475 => 170,  472 => 169,  469 => 168,  466 => 167,  460 => 164,  457 => 163,  454 => 162,  451 => 161,  445 => 160,  442 => 159,  440 => 158,  436 => 156,  430 => 155,  427 => 154,  422 => 152,  418 => 151,  415 => 150,  412 => 149,  409 => 148,  405 => 147,  402 => 146,  399 => 145,  396 => 144,  393 => 143,  390 => 142,  387 => 141,  384 => 140,  381 => 139,  375 => 136,  369 => 133,  366 => 132,  363 => 131,  361 => 130,  358 => 129,  355 => 128,  352 => 127,  349 => 126,  346 => 125,  343 => 124,  341 => 123,  338 => 122,  335 => 121,  333 => 120,  330 => 119,  327 => 118,  324 => 117,  321 => 116,  319 => 115,  316 => 114,  313 => 113,  310 => 112,  307 => 111,  304 => 110,  301 => 109,  298 => 108,  292 => 105,  286 => 102,  279 => 98,  276 => 97,  273 => 96,  267 => 93,  261 => 90,  258 => 89,  256 => 88,  252 => 86,  249 => 85,  244 => 84,  241 => 83,  238 => 82,  235 => 81,  232 => 80,  229 => 79,  227 => 78,  224 => 77,  221 => 76,  218 => 75,  215 => 74,  212 => 73,  209 => 72,  202 => 67,  197 => 64,  194 => 63,  188 => 59,  186 => 58,  179 => 54,  175 => 52,  172 => 51,  169 => 50,  164 => 49,  153 => 40,  151 => 39,  148 => 38,  146 => 37,  141 => 36,  138 => 35,  135 => 34,  132 => 33,  126 => 30,  123 => 29,  120 => 28,  115 => 27,  112 => 26,  109 => 25,  106 => 24,  103 => 23,  101 => 22,  97 => 20,  94 => 19,  90 => 16,  87 => 15,  81 => 13,  77 => 12,  73 => 11,  68 => 10,  65 => 9,  55 => 6,  53 => 5,  51 => 4,  44 => 3,  39 => 2,  35 => 214,  32 => 213,  30 => 15,  28 => 9,  26 => 3,  24 => 2,);
    }
}
