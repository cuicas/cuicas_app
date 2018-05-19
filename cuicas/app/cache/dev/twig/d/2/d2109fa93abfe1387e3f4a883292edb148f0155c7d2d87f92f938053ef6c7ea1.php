<?php

/* EncuestasBundle:Encuestas:detalleVentana.html (copia) (copia).twig */
class __TwigTemplate_d2109fa93abfe1387e3f4a883292edb148f0155c7d2d87f92f938053ef6c7ea1 extends Twig_Template
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
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 277
        echo "   
";
        // line 278
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        // line 4
        $context["Fecha"] = twig_date_format_filter($this->env, "Now", "d-m-Y", "America/Caracas");
        // line 5
        $context["Hora"] = twig_date_format_filter($this->env, "Now", "h:i:s", "America/Caracas");
        // line 6
        echo "  <div style=\"font-family: sans-serif;\">Reporte: ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "nombreEncuesta", array())), "html", null, true);
        echo " / Fecha: ";
        echo twig_escape_filter($this->env, (isset($context["Fecha"]) ? $context["Fecha"] : $this->getContext($context, "Fecha")), "html", null, true);
        echo " Hora: ";
        echo twig_escape_filter($this->env, (isset($context["Hora"]) ? $context["Hora"] : $this->getContext($context, "Hora")), "html", null, true);
        echo "</div>
";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/marco.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />  
  <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/ventanas-modales.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/tooltip.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
";
    }

    // line 14
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 15
        echo "
<center>
  ";
        // line 18
        echo "  ";
        if (array_key_exists("encuesta", $context)) {
            // line 19
            echo "
  ";
            // line 40
            echo " 
    ";
            // line 41
            if ((twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "total", array()) != 0)) {
                // line 42
                echo "      ";
                $context["porcentajeSi"] = ((twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "si1", array()) / twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "total", array())) * 100);
                // line 43
                echo "      ";
                $context["porcentajeNo"] = ((twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "norespondio1", array()) / twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "total", array())) * 100);
                // line 44
                echo "      ";
                $context["porcentajeNoAsignado"] = ((twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "noasignado1", array()) / twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "total", array())) * 100);
                // line 45
                echo "
        <table class=\"table stacktable table-hover\" border=\"1\">
          <thead> 
            <tr>
              <th>Preguntas</th>
              <th align=\"center\">Si</th>
              <th align=\"center\">No</th>
              <th align=\"center\">Telf. No Asignado</th>
              <th align=\"center\">No sabe</th>
              <th align=\"center\">Telf. Errado</th>
            </tr>
          </thead>
          <tr>
              <td>Respondió</td>
              <td align=\"center\">";
                // line 59
                echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? (twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "si1", array())) : (0)), "html", null, true);
                echo "</td>
              <td align=\"center\">";
                // line 60
                echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? (twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "norespondio1", array())) : (0)), "html", null, true);
                echo "</td>
               <td align=\"center\">";
                // line 61
                echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? (twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "noasignado1", array())) : (0)), "html", null, true);
                echo "</td>
              <td align=\"center\">N/A</td>
              <td align=\"center\">N/A</td>
          </tr>
          <tr>
              <td></td>
              <td align=\"center\">";
                // line 67
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["porcentajeSi"]) ? $context["porcentajeSi"] : $this->getContext($context, "porcentajeSi")), 2, ".", ""), "html", null, true);
                echo "%</td>
              <td align=\"center\">";
                // line 68
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["porcentajeNo"]) ? $context["porcentajeNo"] : $this->getContext($context, "porcentajeNo")), 2, ".", ""), "html", null, true);
                echo "%</td>
              <td align=\"center\">";
                // line 69
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["porcentajeNoAsignado"]) ? $context["porcentajeNoAsignado"] : $this->getContext($context, "porcentajeNoAsignado")), 2, ".", ""), "html", null, true);
                echo "%</td>
               <td align=\"center\" colspan=\"2\"></td>
          </tr>

          <tr>
              <td>Idenficación</td>
              <td align=\"center\">";
                // line 75
                echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? (twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "si2", array())) : (0)), "html", null, true);
                echo "</td>
              <td align=\"center\">N/A</td>
              <td align=\"center\">N/A</td>
              <td align=\"center\">N/A</td>
              <td align=\"center\">";
                // line 79
                echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? (twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "cambiodenumero2", array())) : (0)), "html", null, true);
                echo "</td>
          </tr>
          ";
                // line 82
                echo "          <tr>
            ";
                // line 83
                if ( !twig_test_empty(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta3", array()))) {
                    // line 84
                    echo "              <td>Pertenece a la empresa encuestada</td><!-- encuesta.preguntas.pregunta3 -->
              <td align=\"center\">";
                    // line 85
                    echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? (twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "si3", array())) : (0)), "html", null, true);
                    echo "</td>
              <td align=\"center\">";
                    // line 86
                    echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? (twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "no3", array())) : (0)), "html", null, true);
                    echo "</td>
              <td align=\"center\">N/A</td>
              <td align=\"center\">N/A</td>
              <td align=\"center\">N/A</td>
              
            ";
                }
                // line 92
                echo "          
          </tr>
          <tr>
            ";
                // line 95
                if ( !twig_test_empty(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta4", array()))) {
                    // line 96
                    echo "              <td>";
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta4", array()), "html", null, true);
                    echo "</td>
              <td align=\"center\">";
                    // line 97
                    echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? (twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "si4", array())) : (0)), "html", null, true);
                    echo "</td>
              <td align=\"center\">";
                    // line 98
                    echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? (twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "no4", array())) : (0)), "html", null, true);
                    echo "</td>
              <td align=\"center\">N/A</td>
               <td align=\"center\">";
                    // line 100
                    echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? (twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "nosabe4", array())) : (0)), "html", null, true);
                    echo "</td>
             <td align=\"center\">N/A</td>
            ";
                }
                // line 102
                echo "        
          </tr>
          <tr>
            ";
                // line 105
                if ( !twig_test_empty(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta5", array()))) {
                    // line 106
                    echo "              <td>";
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta5", array()), "html", null, true);
                    echo "</td>
              <td align=\"center\">";
                    // line 107
                    echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? (twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "si5", array())) : (0)), "html", null, true);
                    echo "</td>
              <td align=\"center\">";
                    // line 108
                    echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? (twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "no5", array())) : (0)), "html", null, true);
                    echo "</td>
              <td align=\"center\">N/A</td>
              <td align=\"center\">";
                    // line 110
                    echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? (twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "nosabe5", array())) : (0)), "html", null, true);
                    echo "</td>
              <td align=\"center\">N/A</td>
            ";
                }
                // line 112
                echo "         
          </tr>
          ";
                // line 115
                echo "          <tr>
            <td align=\"center\"><strong>TOTAL DE LLAMADAS</strong></td><td align=\"center\" colspan=\"2\"><strong>";
                // line 116
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "total", array()), "html", null, true);
                echo "</strong></td>
            <td align=\"center\"><strong>TOTAL DE LLAMADAS EFECTIVAS</strong></td><td align=\"center\" colspan=\"2\"><strong>";
                // line 117
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "si1", array()), "html", null, true);
                echo "</strong></td>  
          </tr>
        </table>

        ";
                // line 121
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "datosEmpresas", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
                    // line 122
                    echo "          <h2><strong>";
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "empresa", array()), "html", null, true);
                    echo "</strong></h2>
        <table class=\"table stacktable table-hover\" border=\"1\">
           <thead> 
            <tr>
              <th>Preguntas</th>
              <th align=\"center\">Si</th>
              <th align=\"center\">No</th>
              <th align=\"center\">Telf. No Asignado</th>
              <th align=\"center\">No sabe</th>
              <th align=\"center\">Telf. Errado</th>
            </tr>
          </thead>
          <tbody>
              <tr>
                <td>Respondió</td>
                ";
                    // line 137
                    $context["porcentajeSi"] = 0;
                    // line 138
                    echo "                ";
                    if (((twig_template_get_attributes($this, $context["empresa"], "si1", array()) + twig_template_get_attributes($this, $context["empresa"], "no1", array())) != 0)) {
                        // line 139
                        echo "                  ";
                        $context["porcentajeSi"] = ((twig_template_get_attributes($this, $context["empresa"], "si1", array()) / (twig_template_get_attributes($this, $context["empresa"], "si1", array()) + twig_template_get_attributes($this, $context["empresa"], "no1", array()))) * 100);
                        // line 140
                        echo "                ";
                    }
                    // line 141
                    echo "                ";
                    $context["porcentajeNo"] = 0;
                    // line 142
                    echo "                ";
                    if (((twig_template_get_attributes($this, $context["empresa"], "si1", array()) + twig_template_get_attributes($this, $context["empresa"], "no1", array())) != 0)) {
                        // line 143
                        echo "                  ";
                        $context["porcentajeNo"] = ((twig_template_get_attributes($this, $context["empresa"], "no1", array()) / (twig_template_get_attributes($this, $context["empresa"], "si1", array()) + twig_template_get_attributes($this, $context["empresa"], "no1", array()))) * 100);
                        // line 144
                        echo "                ";
                    }
                    // line 145
                    echo "                <td align=\"center\">";
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "si1", array()), "html", null, true);
                    echo "</td>
                <td align=\"center\">";
                    // line 146
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "no1", array()), "html", null, true);
                    echo "</td>
                <td align=\"center\">";
                    // line 147
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "noasignado1", array()), "html", null, true);
                    echo "</td>
                <td align=\"center\">N/A</td>
                <td align=\"center\">N/A</td>
                
              </tr>
              <tr>
                <td></td>
                ";
                    // line 154
                    $context["porcentajeSi"] = 0;
                    // line 155
                    echo "                ";
                    if (((twig_template_get_attributes($this, $context["empresa"], "si1", array()) + twig_template_get_attributes($this, $context["empresa"], "no1", array())) != 0)) {
                        // line 156
                        echo "                  ";
                        $context["porcentajeSi"] = ((twig_template_get_attributes($this, $context["empresa"], "si1", array()) / (twig_template_get_attributes($this, $context["empresa"], "si1", array()) + twig_template_get_attributes($this, $context["empresa"], "no1", array()))) * 100);
                        // line 157
                        echo "                ";
                    }
                    // line 158
                    echo "                ";
                    $context["porcentajeNo"] = 0;
                    // line 159
                    echo "                ";
                    if (((twig_template_get_attributes($this, $context["empresa"], "si1", array()) + twig_template_get_attributes($this, $context["empresa"], "no1", array())) != 0)) {
                        // line 160
                        echo "                  ";
                        $context["porcentajeNo"] = ((twig_template_get_attributes($this, $context["empresa"], "no1", array()) / (twig_template_get_attributes($this, $context["empresa"], "si1", array()) + twig_template_get_attributes($this, $context["empresa"], "no1", array()))) * 100);
                        // line 161
                        echo "                ";
                    }
                    // line 162
                    echo "                ";
                    $context["porcentajeNo"] = 0;
                    // line 163
                    echo "                ";
                    if (((twig_template_get_attributes($this, $context["empresa"], "si1", array()) + twig_template_get_attributes($this, $context["empresa"], "no1", array())) != 0)) {
                        // line 164
                        echo "                  ";
                        $context["porcentajeNo"] = ((twig_template_get_attributes($this, $context["empresa"], "no1", array()) / (twig_template_get_attributes($this, $context["empresa"], "si1", array()) + twig_template_get_attributes($this, $context["empresa"], "no1", array()))) * 100);
                        // line 165
                        echo "                ";
                    }
                    // line 166
                    echo "                <td align=\"center\">";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["porcentajeSi"]) ? $context["porcentajeSi"] : $this->getContext($context, "porcentajeSi")), 2, ".", ""), "html", null, true);
                    echo "%</td>
                <td align=\"center\">";
                    // line 167
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["porcentajeNo"]) ? $context["porcentajeNo"] : $this->getContext($context, "porcentajeNo")), 2, ".", ""), "html", null, true);
                    echo "%</td>
                <td align=\"center\" colspan=\"3\"></td>
                
              </tr>
              <tr>
                <td>Idenficación</td>
                <td align=\"center\">";
                    // line 173
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "si2", array()), "html", null, true);
                    echo "</td>
                <td align=\"center\">N/A</td>
                <td align=\"center\">N/A</td>
                <td align=\"center\">N/A</td>
                <td align=\"center\">";
                    // line 177
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "no2", array()), "html", null, true);
                    echo "</td>
              </tr>
              <tr>
                <td>Pertenece a la empresa encuestada</td>
                <td align=\"center\">";
                    // line 181
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "si3", array()), "html", null, true);
                    echo "</td>
                <td align=\"center\">";
                    // line 182
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "no3", array()), "html", null, true);
                    echo "</td>
                <td align=\"center\">N/A</td>
                <td align=\"center\">N/A</td>
                <td align=\"center\">N/A</td>
              </tr>
              <tr>
                <td>";
                    // line 188
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta4", array()), "html", null, true);
                    echo "</td>
                <td align=\"center\">";
                    // line 189
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "si4", array()), "html", null, true);
                    echo "</td>
                <td align=\"center\">";
                    // line 190
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "no4", array()), "html", null, true);
                    echo "</td>
                <td align=\"center\">N/A</td>
                <td align=\"center\">";
                    // line 192
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "nosabe4", array()), "html", null, true);
                    echo "</td>
                <td align=\"center\">N/A</td>
              </tr>
              <tr>
                <td colspan=\"6\">
                  Total de Limitaciones:";
                    // line 197
                    echo twig_escape_filter($this->env, ((((((twig_template_get_attributes($this, $context["empresa"], "movilizacion", array()) + twig_template_get_attributes($this, $context["empresa"], "logistico", array())) + twig_template_get_attributes($this, $context["empresa"], "seguridad", array())) + twig_template_get_attributes($this, $context["empresa"], "salud", array())) + twig_template_get_attributes($this, $context["empresa"], "metereologico", array())) + twig_template_get_attributes($this, $context["empresa"], "electrico", array())) + twig_template_get_attributes($this, $context["empresa"], "otro", array())), "html", null, true);
                    echo "<br />
                  Movilización: ";
                    // line 198
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "movilizacion", array()), "html", null, true);
                    echo ", Logística: ";
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "logistico", array()), "html", null, true);
                    echo ", Seguridad: ";
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "seguridad", array()), "html", null, true);
                    echo ", Salud: ";
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "salud", array()), "html", null, true);
                    echo ", Metereológico: ";
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "metereologico", array()), "html", null, true);
                    echo ", Eléctrico: ";
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "electrico", array()), "html", null, true);
                    echo ", Otro: ";
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "otro", array()), "html", null, true);
                    echo "
                </td>
              </tr>

          </tbody>
        </table>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 205
                echo "
        <table class=\"table stacktable table-hover\" border=\"1\">
          <thead>
            <th>Total de limitantes reportadas</th>
            <th style=\" text-align: center;\">Total</th>
          </thead>
          <tbody>
            <tr>
              <td>
                Limitantes de Logística
              </td>
              <td align=\"center\">
                ";
                // line 217
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "logistico", array()), "html", null, true);
                echo "
              </td>
            </tr>
            <tr>
              <td>
                Limitantes de Movilización
              </td>
              <td align=\"center\">
                ";
                // line 225
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "movilizacion", array()), "html", null, true);
                echo "
              </td>
            </tr>
            <tr>
              <td>
                Limitantes de Seguridad
              </td>
              <td align=\"center\">
                ";
                // line 233
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "seguridad", array()), "html", null, true);
                echo "
              </td>
            </tr>
            <tr>
              <td>
                Limitantes de Salud
              </td>
              <td align=\"center\">
                ";
                // line 241
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "salud", array()), "html", null, true);
                echo "
              </td>
            </tr>
            <tr>
              <td>
                Limitantes Metereologico
              </td>
              <td align=\"center\">
                ";
                // line 249
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "metereologico", array()), "html", null, true);
                echo "
              </td>
            </tr>
            <tr>
              <td>
                Limitantes Eléctrico
              </td>
              <td align=\"center\">
                ";
                // line 257
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "electrico", array()), "html", null, true);
                echo "
              </td>
            </tr>
            <tr>
              <td>
                Limitantes Otro
              </td>
              <td align=\"center\">
                ";
                // line 265
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "otro", array()), "html", null, true);
                echo "
              </td>
            </tr>
          </tbody>

        </table>
      ";
            }
            // line 272
            echo "  ";
        }
        // line 273
        echo "</center>

<center><input type=\"button\" class=\"btn btn-default\" onclick=\"javascript:window.print();\" name=\"Imprimir\" value=\"Imprimir\"></center>
";
    }

    // line 278
    public function block_javascripts($context, array $blocks = array())
    {
        // line 279
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
        return "EncuestasBundle:Encuestas:detalleVentana.html (copia) (copia).twig";
    }

    public function getDebugInfo()
    {
        return array (  560 => 279,  557 => 278,  550 => 273,  547 => 272,  537 => 265,  526 => 257,  515 => 249,  504 => 241,  493 => 233,  482 => 225,  471 => 217,  457 => 205,  432 => 198,  428 => 197,  420 => 192,  415 => 190,  411 => 189,  407 => 188,  398 => 182,  394 => 181,  387 => 177,  380 => 173,  371 => 167,  366 => 166,  363 => 165,  360 => 164,  357 => 163,  354 => 162,  351 => 161,  348 => 160,  345 => 159,  342 => 158,  339 => 157,  336 => 156,  333 => 155,  331 => 154,  321 => 147,  317 => 146,  312 => 145,  309 => 144,  306 => 143,  303 => 142,  300 => 141,  297 => 140,  294 => 139,  291 => 138,  289 => 137,  270 => 122,  266 => 121,  259 => 117,  255 => 116,  252 => 115,  248 => 112,  242 => 110,  237 => 108,  233 => 107,  228 => 106,  226 => 105,  221 => 102,  215 => 100,  210 => 98,  206 => 97,  201 => 96,  199 => 95,  194 => 92,  185 => 86,  181 => 85,  178 => 84,  176 => 83,  173 => 82,  168 => 79,  161 => 75,  152 => 69,  148 => 68,  144 => 67,  135 => 61,  131 => 60,  127 => 59,  111 => 45,  108 => 44,  105 => 43,  102 => 42,  100 => 41,  97 => 40,  94 => 19,  91 => 18,  87 => 15,  84 => 14,  78 => 12,  74 => 11,  70 => 10,  65 => 9,  62 => 8,  51 => 6,  49 => 5,  47 => 4,  44 => 3,  39 => 2,  35 => 278,  32 => 277,  30 => 14,  28 => 8,  26 => 3,  24 => 2,);
    }
}
