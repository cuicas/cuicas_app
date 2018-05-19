<?php

/* EncuestasBundle:Encuestas:detalleVentana.html.twig */
class __TwigTemplate_44438e1c2970dabb92a9e49016088acc2fd36ab8416c245a9506be69524a1d20 extends Twig_Template
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
        // line 233
        echo "   
";
        // line 234
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
        echo "
</div>
<div style=\"font-family: sans-serif;\">Hora: ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["Hora"]) ? $context["Hora"] : $this->getContext($context, "Hora")), "html", null, true);
        echo "</div>";
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
  ";
            // line 41
            echo " 
    ";
            // line 42
            if (($this->getAttribute((isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "total", array()) != 0)) {
                // line 43
                echo "      ";
                $context["porcentajeSi"] = (($this->getAttribute((isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "si1", array()) / $this->getAttribute((isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "total", array())) * 100);
                // line 44
                echo "      ";
                $context["porcentajeNo"] = (($this->getAttribute((isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "norespondio1", array()) / $this->getAttribute((isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "total", array())) * 100);
                // line 45
                echo "      ";
                $context["porcentajeNoAsignado"] = (($this->getAttribute((isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "noasignado1", array()) / $this->getAttribute((isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "total", array())) * 100);
                // line 46
                echo "        <table class=\"table stacktable table-hover\" border=\"1\">
          <thead> 
            <tr>
              <th>Preguntas</th><th align=\"center\">Si</th><th align=\"center\">No</th><th align=\"center\">Telf. No Asignado</th><th align=\"center\">No sabe</th><th align=\"center\">Telf. Errado</th>
            </tr>
          </thead>
          <tr>
              <td>Respondió</td>
              <td align=\"center\">";
                // line 54
                echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? ($this->getAttribute((isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "si1", array())) : (0)), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["porcentajeSi"]) ? $context["porcentajeSi"] : $this->getContext($context, "porcentajeSi")), 2, ".", ""), "html", null, true);
                echo "%)</td>
              <td align=\"center\">";
                // line 55
                echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? ($this->getAttribute((isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "norespondio1", array())) : (0)), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["porcentajeNo"]) ? $context["porcentajeNo"] : $this->getContext($context, "porcentajeNo")), 2, ".", ""), "html", null, true);
                echo "%)</td>
               <td align=\"center\">";
                // line 56
                echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? ($this->getAttribute((isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "noasignado1", array())) : (0)), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["porcentajeNoAsignado"]) ? $context["porcentajeNoAsignado"] : $this->getContext($context, "porcentajeNoAsignado")), 2, ".", ""), "html", null, true);
                echo "%)</td>
              <td align=\"center\">N/A</td>
              <td align=\"center\">N/A</td>
          </tr>

          <tr>
              <td>Idenficación</td>
              <td align=\"center\">";
                // line 63
                echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? ($this->getAttribute((isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "si2", array())) : (0)), "html", null, true);
                echo "</td>
              <td align=\"center\">N/A</td>
              <td align=\"center\">N/A</td>
              <td align=\"center\">N/A</td>
              <td align=\"center\">";
                // line 67
                echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? ($this->getAttribute((isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "cambiodenumero2", array())) : (0)), "html", null, true);
                echo "</td>
          </tr>
          ";
                // line 70
                echo "          <tr>
            ";
                // line 71
                if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta3", array()))) {
                    // line 72
                    echo "              <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta3", array()), "html", null, true);
                    echo "</td>
              <td align=\"center\">";
                    // line 73
                    echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? ($this->getAttribute((isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "si3", array())) : (0)), "html", null, true);
                    echo "</td>
              <td align=\"center\">";
                    // line 74
                    echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? ($this->getAttribute((isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "no3", array())) : (0)), "html", null, true);
                    echo "</td>
              <td align=\"center\">N/A</td>
              <td align=\"center\">N/A</td>
              <td align=\"center\">N/A</td>
              
            ";
                }
                // line 80
                echo "          
          </tr>
          <tr>
            ";
                // line 83
                if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta4", array()))) {
                    // line 84
                    echo "              <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta4", array()), "html", null, true);
                    echo "</td>
              <td align=\"center\">";
                    // line 85
                    echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? ($this->getAttribute((isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "si4", array())) : (0)), "html", null, true);
                    echo "</td>
              <td align=\"center\">";
                    // line 86
                    echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? ($this->getAttribute((isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "no4", array())) : (0)), "html", null, true);
                    echo "</td>
              <td align=\"center\">N/A</td>
               <td align=\"center\">";
                    // line 88
                    echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? ($this->getAttribute((isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "nosabe4", array())) : (0)), "html", null, true);
                    echo "</td>
             <td align=\"center\">N/A</td>
            ";
                }
                // line 90
                echo "        
          </tr>
          <tr>
            ";
                // line 93
                if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta5", array()))) {
                    // line 94
                    echo "              <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta5", array()), "html", null, true);
                    echo "</td>
              <td align=\"center\">";
                    // line 95
                    echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? ($this->getAttribute((isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "si5", array())) : (0)), "html", null, true);
                    echo "</td>
              <td align=\"center\">";
                    // line 96
                    echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? ($this->getAttribute((isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "no5", array())) : (0)), "html", null, true);
                    echo "</td>
              <td align=\"center\">N/A</td>
              <td align=\"center\">";
                    // line 98
                    echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? ($this->getAttribute((isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "nosabe5", array())) : (0)), "html", null, true);
                    echo "</td>
              <td align=\"center\">N/A</td>
            ";
                }
                // line 100
                echo "         
          </tr>
          ";
                // line 103
                echo "          <tr>
            <td align=\"center\"><strong>TOTAL DE LLAMADAS</strong></td><td align=\"center\" colspan=\"2\"><strong>";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "total", array()), "html", null, true);
                echo "</strong></td>
            <td align=\"center\"><strong>TOTAL DE LLAMADAS EFECTIVAS</strong></td><td align=\"center\" colspan=\"2\"><strong>";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "si1", array()), "html", null, true);
                echo "</strong></td>  
          </tr>
        </table>
      ";
            }
            // line 109
            echo "  ";
        }
        // line 110
        echo "</center>
<center>
      <table class=\"table stacktable table-hover\" border=\"1\">

      ";
        // line 114
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["circuitos"]) ? $context["circuitos"] : $this->getContext($context, "circuitos"))));
        foreach ($context['_seq'] as $context["_key"] => $context["circuito"]) {
            // line 115
            echo "      ";
            if (twig_test_empty((isset($context["totalGlobal"]) ? $context["totalGlobal"] : $this->getContext($context, "totalGlobal")))) {
                // line 116
                echo "        <thead>       
          <th colspan=\"1\">Circuito: ";
                // line 117
                echo twig_escape_filter($this->env, $context["circuito"], "html", null, true);
                echo "</th>
        </thead>  
             ";
            }
            // line 119
            echo "        
        
        ";
            // line 121
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["municipios"]) ? $context["municipios"] : $this->getContext($context, "municipios")));
            foreach ($context['_seq'] as $context["_key"] => $context["municipio"]) {
                // line 122
                echo "          ";
                if (($this->getAttribute($this->getAttribute($context["municipio"], "circuito", array()), "id", array()) == $this->getAttribute($context["circuito"], "id", array()))) {
                    // line 123
                    echo "            ";
                    if (twig_test_empty((isset($context["totalGlobal"]) ? $context["totalGlobal"] : $this->getContext($context, "totalGlobal")))) {
                        // line 124
                        echo "              <thead> 
                <tr>
                  <th colspan=\"6\">Municipio: ";
                        // line 126
                        echo twig_escape_filter($this->env, $this->getAttribute($context["municipio"], "nombreMunicipio", array()), "html", null, true);
                        echo "</th>
                </tr>  
              </thead> 
            ";
                    }
                    // line 130
                    echo "          ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["parroquias"]) ? $context["parroquias"] : $this->getContext($context, "parroquias")));
                    foreach ($context['_seq'] as $context["_key"] => $context["parroquia"]) {
                        if (($this->getAttribute($this->getAttribute($context["parroquia"], "municipio", array()), "id", array()) == $this->getAttribute($context["municipio"], "id", array()))) {
                            // line 131
                            echo "            ";
                            if (twig_test_empty((isset($context["totalGlobal"]) ? $context["totalGlobal"] : $this->getContext($context, "totalGlobal")))) {
                                // line 132
                                echo "              <thead> 
                <tr>
                  <th colspan=\"6\">Parroquia: ";
                                // line 134
                                echo twig_escape_filter($this->env, $this->getAttribute($context["parroquia"], "nombreParroquia", array()), "html", null, true);
                                echo "</th> 
                </tr>
              </thead> 
            ";
                            }
                            // line 138
                            echo "            ";
                            $context["totalContactados"] = 0;
                            // line 139
                            echo "            ";
                            $context["total"] = 0;
                            // line 140
                            echo "            ";
                            $context["votosOtrosTotal"] = 0;
                            // line 141
                            echo "              ";
                            if (twig_test_empty((isset($context["totalGlobal"]) ? $context["totalGlobal"] : $this->getContext($context, "totalGlobal")))) {
                                // line 142
                                echo "                <tr>
                  <td align=\"center\"><strong>Pregunta</strong></td><td align=\"center\"><strong>Si</strong></td><td align=\"center\"><strong>No</strong></td><td align=\"center\"><strong>Telf. No Asignado</strong></td><td align=\"center\"><strong>No sabe</strong></v><td align=\"center\"><strong>Telf. Errado</strong></td>
                </tr>         
                <tr>
                  <td>Respondio</td><td>";
                                // line 146
                                $context["si"] = 0;
                                $context["no"] = 0;
                                $context["noasignado"] = 0;
                                $context['_parent'] = (array) $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "contactados", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["encuestado"]) {
                                    if ((($this->getAttribute($context["encuestado"], "getParroquia", array()) == $context["parroquia"]) && ($this->getAttribute($context["encuestado"], "resp1", array()) == "si"))) {
                                        $context["si"] = ((isset($context["si"]) ? $context["si"] : $this->getContext($context, "si")) + 1);
                                    }
                                    if ((($this->getAttribute($context["encuestado"], "getParroquia", array()) == $context["parroquia"]) && ($this->getAttribute($context["encuestado"], "resp1", array()) == "norespondio"))) {
                                        $context["no"] = ((isset($context["no"]) ? $context["no"] : $this->getContext($context, "no")) + 1);
                                    }
                                    if ((($this->getAttribute($context["encuestado"], "getParroquia", array()) == $context["parroquia"]) && ($this->getAttribute($context["encuestado"], "resp1", array()) == "noasignado"))) {
                                        $context["noasignado"] = ((isset($context["noasignado"]) ? $context["noasignado"] : $this->getContext($context, "noasignado")) + 1);
                                    }
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['encuestado'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                echo twig_escape_filter($this->env, (isset($context["si"]) ? $context["si"] : $this->getContext($context, "si")), "html", null, true);
                                echo "</td><td>";
                                echo twig_escape_filter($this->env, (isset($context["no"]) ? $context["no"] : $this->getContext($context, "no")), "html", null, true);
                                echo "</td><td>";
                                echo twig_escape_filter($this->env, (isset($context["noasignado"]) ? $context["noasignado"] : $this->getContext($context, "noasignado")), "html", null, true);
                                echo "</td><td>N/A</td><td>N/A</td>
                </tr>
                  <tr>
                    <td>Identificaci&oacute;n</td>
                    <td>
                      ";
                                // line 151
                                $context["si"] = 0;
                                $context["cambiodenumero"] = 0;
                                // line 152
                                echo "                      ";
                                $context["si3"] = 0;
                                $context["no3"] = 0;
                                $context["nosabe3"] = 0;
                                // line 153
                                echo "                      ";
                                $context["si4"] = 0;
                                $context["no4"] = 0;
                                $context["nosabe4"] = 0;
                                // line 154
                                echo "                      ";
                                $context["si5"] = 0;
                                $context["no5"] = 0;
                                $context["nosabe5"] = 0;
                                // line 155
                                echo "                      ";
                                $context['_parent'] = (array) $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "contactados", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["encuestado"]) {
                                    // line 156
                                    echo "                        ";
                                    if (($this->getAttribute($context["encuestado"], "getParroquia", array()) == $context["parroquia"])) {
                                        // line 157
                                        echo "                          ";
                                        if (($this->getAttribute($context["encuestado"], "resp2", array()) == "si")) {
                                            // line 158
                                            echo "                            ";
                                            $context["si"] = ((isset($context["si"]) ? $context["si"] : $this->getContext($context, "si")) + 1);
                                            // line 159
                                            echo "                          ";
                                        }
                                        // line 160
                                        echo "                          ";
                                        if (($this->getAttribute($context["encuestado"], "resp2", array()) == "cambiodenumero")) {
                                            // line 161
                                            echo "                            ";
                                            $context["cambiodenumero"] = ((isset($context["cambiodenumero"]) ? $context["cambiodenumero"] : $this->getContext($context, "cambiodenumero")) + 1);
                                            // line 162
                                            echo "                          ";
                                        }
                                        // line 163
                                        echo "                          ";
                                        if (($this->getAttribute($context["encuestado"], "resp3", array()) == "si")) {
                                            // line 164
                                            echo "                            ";
                                            $context["si3"] = ((isset($context["si3"]) ? $context["si3"] : $this->getContext($context, "si3")) + 1);
                                            // line 165
                                            echo "                          ";
                                        }
                                        // line 166
                                        echo "                          ";
                                        if (($this->getAttribute($context["encuestado"], "resp3", array()) == "no")) {
                                            // line 167
                                            echo "                            ";
                                            $context["no3"] = ((isset($context["no3"]) ? $context["no3"] : $this->getContext($context, "no3")) + 1);
                                            // line 168
                                            echo "                          ";
                                        }
                                        // line 169
                                        echo "                          ";
                                        if (($this->getAttribute($context["encuestado"], "resp3", array()) == "nosabe")) {
                                            // line 170
                                            echo "                            ";
                                            $context["nosabe3"] = ((isset($context["nosabe3"]) ? $context["nosabe3"] : $this->getContext($context, "nosabe3")) + 1);
                                            // line 171
                                            echo "                          ";
                                        }
                                        // line 172
                                        echo "                          ";
                                        if (($this->getAttribute($context["encuestado"], "resp4", array()) == "si")) {
                                            // line 173
                                            echo "                            ";
                                            $context["si4"] = ((isset($context["si4"]) ? $context["si4"] : $this->getContext($context, "si4")) + 1);
                                            // line 174
                                            echo "                          ";
                                        }
                                        // line 175
                                        echo "                          ";
                                        if (($this->getAttribute($context["encuestado"], "resp4", array()) == "no")) {
                                            // line 176
                                            echo "                            ";
                                            $context["no4"] = ((isset($context["no4"]) ? $context["no4"] : $this->getContext($context, "no4")) + 1);
                                            // line 177
                                            echo "                          ";
                                        }
                                        // line 178
                                        echo "                          ";
                                        if (($this->getAttribute($context["encuestado"], "resp4", array()) == "nosabe")) {
                                            // line 179
                                            echo "                            ";
                                            $context["nosabe4"] = ((isset($context["nosabe4"]) ? $context["nosabe4"] : $this->getContext($context, "nosabe4")) + 1);
                                            // line 180
                                            echo "                          ";
                                        }
                                        // line 181
                                        echo "                          ";
                                        if (($this->getAttribute($context["encuestado"], "resp5", array()) == "si")) {
                                            // line 182
                                            echo "                            ";
                                            $context["si5"] = ((isset($context["si5"]) ? $context["si5"] : $this->getContext($context, "si5")) + 1);
                                            // line 183
                                            echo "                          ";
                                        }
                                        // line 184
                                        echo "                          ";
                                        if (($this->getAttribute($context["encuestado"], "resp5", array()) == "no")) {
                                            // line 185
                                            echo "                            ";
                                            $context["no5"] = ((isset($context["no5"]) ? $context["no5"] : $this->getContext($context, "no5")) + 1);
                                            // line 186
                                            echo "                          ";
                                        }
                                        // line 187
                                        echo "                          ";
                                        if (($this->getAttribute($context["encuestado"], "resp5", array()) == "nosabe")) {
                                            // line 188
                                            echo "                            ";
                                            $context["nosabe5"] = ((isset($context["nosabe5"]) ? $context["nosabe5"] : $this->getContext($context, "nosabe5")) + 1);
                                            // line 189
                                            echo "                          ";
                                        }
                                        // line 190
                                        echo "                        ";
                                    }
                                    // line 191
                                    echo "                      ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['encuestado'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                echo twig_escape_filter($this->env, (isset($context["si"]) ? $context["si"] : $this->getContext($context, "si")), "html", null, true);
                                echo "</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>";
                                // line 195
                                echo twig_escape_filter($this->env, (isset($context["cambiodenumero"]) ? $context["cambiodenumero"] : $this->getContext($context, "cambiodenumero")), "html", null, true);
                                echo "</td>
                  </tr>
                  ";
                                // line 197
                                if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "getPregunta3", array()))) {
                                    // line 198
                                    echo "                  <tr>            
                    <td>";
                                    // line 199
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "getPregunta3", array()), "html", null, true);
                                    echo "</td><td>";
                                    echo twig_escape_filter($this->env, (isset($context["si3"]) ? $context["si3"] : $this->getContext($context, "si3")), "html", null, true);
                                    echo "</td><td>";
                                    echo twig_escape_filter($this->env, (isset($context["no3"]) ? $context["no3"] : $this->getContext($context, "no3")), "html", null, true);
                                    echo "</td><td>N/A</td><td>";
                                    echo twig_escape_filter($this->env, (isset($context["nosabe3"]) ? $context["nosabe3"] : $this->getContext($context, "nosabe3")), "html", null, true);
                                    echo "</td><td>N/A</td>
                  </tr>
                  ";
                                }
                                // line 202
                                echo "                  ";
                                if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "getPregunta4", array()))) {
                                    // line 203
                                    echo "                  <tr>            
                    <td>";
                                    // line 204
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "getPregunta4", array()), "html", null, true);
                                    echo "</td><td>";
                                    echo twig_escape_filter($this->env, (isset($context["si4"]) ? $context["si4"] : $this->getContext($context, "si4")), "html", null, true);
                                    echo "</td><td>";
                                    echo twig_escape_filter($this->env, (isset($context["no4"]) ? $context["no4"] : $this->getContext($context, "no4")), "html", null, true);
                                    echo "</td><td>N/A</td><td>";
                                    echo twig_escape_filter($this->env, (isset($context["nosabe4"]) ? $context["nosabe4"] : $this->getContext($context, "nosabe4")), "html", null, true);
                                    echo "</td><td>N/A</td>              
                  </tr>
                  ";
                                }
                                // line 207
                                echo "                  ";
                                if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "getPregunta5", array()))) {
                                    // line 208
                                    echo "                  <tr>            
                    <td>";
                                    // line 209
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "getPregunta5", array()), "html", null, true);
                                    echo "</td><td>";
                                    echo twig_escape_filter($this->env, (isset($context["si5"]) ? $context["si5"] : $this->getContext($context, "si5")), "html", null, true);
                                    echo "</td><td>";
                                    echo twig_escape_filter($this->env, (isset($context["no5"]) ? $context["no5"] : $this->getContext($context, "no5")), "html", null, true);
                                    echo "</td><td>N/A</td><td>";
                                    echo twig_escape_filter($this->env, (isset($context["nosabe5"]) ? $context["nosabe5"] : $this->getContext($context, "nosabe5")), "html", null, true);
                                    echo "</td><td>N/A</td>          
                  </tr>
                  ";
                                }
                                // line 212
                                echo "                  <tr>
                    <td><strong>Total contactados en la parroquia ";
                                // line 213
                                echo twig_escape_filter($this->env, $this->getAttribute($context["parroquia"], "nombreParroquia", array()), "html", null, true);
                                echo "</strong></td>
                    <td colspan=\"6\"><strong>";
                                // line 214
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadosParroquia", array(0 => $this->getAttribute($context["parroquia"], "id", array()), 1 => "si"), "method"), "html", null, true);
                                echo "</strong></td>
                  </tr>
                ";
                            }
                            // line 217
                            echo "          ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parroquia'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 218
                    echo "          ";
                    if ( !twig_test_empty((isset($context["totalGlobal"]) ? $context["totalGlobal"] : $this->getContext($context, "totalGlobal")))) {
                        // line 219
                        echo "            <tr>
              <td><strong>Total contactados en el municipio ";
                        // line 220
                        echo twig_escape_filter($this->env, $this->getAttribute($context["municipio"], "nombreMunicipio", array()), "html", null, true);
                        echo "</strong></td><td colspan=\"6\"><strong>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactados", array(0 => $this->getAttribute($context["municipio"], "id", array()), 1 => "si"), "method"), "html", null, true);
                        echo "</strong></td>
            </tr>
          ";
                    }
                    // line 223
                    echo "          ";
                }
                // line 224
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['municipio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "        ";
            if ( !twig_test_empty((isset($context["totalGlobal"]) ? $context["totalGlobal"] : $this->getContext($context, "totalGlobal")))) {
                // line 226
                echo "         <tr><td><h1><strong>Total contactados en el ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["circuito"], "nombreCircuito", array()), "html", null, true);
                echo "</strong></h1></td><td colspan=\"6\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadosCircuito", array(0 => $this->getAttribute($context["circuito"], "id", array()), 1 => "si"), "method"), "html", null, true);
                echo "</strong></td></tr>
      ";
            }
            // line 228
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['circuito'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 229
        echo "      </table>
</center>
<center><input type=\"button\" class=\"btn btn-default\" onclick=\"javascript:window.print();\" name=\"Imprimir\" value=\"Imprimir\"></center>
";
    }

    // line 234
    public function block_javascripts($context, array $blocks = array())
    {
        // line 235
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
        return "EncuestasBundle:Encuestas:detalleVentana.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  643 => 235,  640 => 234,  633 => 229,  627 => 228,  619 => 226,  616 => 225,  610 => 224,  607 => 223,  599 => 220,  596 => 219,  593 => 218,  586 => 217,  580 => 214,  576 => 213,  573 => 212,  561 => 209,  558 => 208,  555 => 207,  543 => 204,  540 => 203,  537 => 202,  525 => 199,  522 => 198,  520 => 197,  515 => 195,  503 => 191,  500 => 190,  497 => 189,  494 => 188,  491 => 187,  488 => 186,  485 => 185,  482 => 184,  479 => 183,  476 => 182,  473 => 181,  470 => 180,  467 => 179,  464 => 178,  461 => 177,  458 => 176,  455 => 175,  452 => 174,  449 => 173,  446 => 172,  443 => 171,  440 => 170,  437 => 169,  434 => 168,  431 => 167,  428 => 166,  425 => 165,  422 => 164,  419 => 163,  416 => 162,  413 => 161,  410 => 160,  407 => 159,  404 => 158,  401 => 157,  398 => 156,  393 => 155,  388 => 154,  383 => 153,  378 => 152,  375 => 151,  344 => 146,  338 => 142,  335 => 141,  332 => 140,  329 => 139,  326 => 138,  319 => 134,  315 => 132,  312 => 131,  306 => 130,  299 => 126,  295 => 124,  292 => 123,  289 => 122,  285 => 121,  281 => 119,  275 => 117,  272 => 116,  269 => 115,  265 => 114,  259 => 110,  256 => 109,  249 => 105,  245 => 104,  242 => 103,  238 => 100,  232 => 98,  227 => 96,  223 => 95,  218 => 94,  216 => 93,  211 => 90,  205 => 88,  200 => 86,  196 => 85,  191 => 84,  189 => 83,  184 => 80,  175 => 74,  171 => 73,  166 => 72,  164 => 71,  161 => 70,  156 => 67,  149 => 63,  137 => 56,  131 => 55,  125 => 54,  115 => 46,  112 => 45,  109 => 44,  106 => 43,  104 => 42,  101 => 41,  98 => 20,  95 => 19,  91 => 16,  88 => 15,  82 => 13,  78 => 12,  74 => 11,  69 => 10,  66 => 9,  61 => 8,  55 => 6,  53 => 5,  51 => 4,  44 => 3,  39 => 2,  35 => 234,  32 => 233,  30 => 15,  28 => 9,  26 => 3,  24 => 2,);
    }
}
