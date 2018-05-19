<?php

/* EncuestasBundle:Encuestas:detalleVentanaComando.html.twig */
class __TwigTemplate_9017f825c44c85950c893b43578a6d0c54b28e75954a61c2ddc79d1b84ea3fa2 extends Twig_Template
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
        // line 94
        echo "   
";
        // line 95
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
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "nombreEncuesta", array())), "html", null, true);
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
            echo "  ";
            $context["total"] = ((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "si", 1 => 1), "method") + twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "norespondio", 1 => 1), "method")) + twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "noasignado", 1 => 1), "method"));
            // line 21
            echo "    ";
            if (((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) != 0)) {
                // line 22
                echo "      ";
                $context["porcentajeSi"] = ((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "si", 1 => 1), "method") / (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total"))) * 100);
                // line 23
                echo "      ";
                $context["porcentajeNo"] = ((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "norespondio", 1 => 1), "method") / (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total"))) * 100);
                // line 24
                echo "      ";
                $context["porcentajeNoAsignado"] = ((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "noasignado", 1 => 1), "method") / (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total"))) * 100);
                // line 25
                echo "        <table class=\"table stacktable table-hover\" border=\"1\">
          <thead> 
            <tr>
              <th>Preguntas</th><th align=\"center\">Si</th><th align=\"center\">No</th><th align=\"center\">Telf. No Asignado</th><th align=\"center\">No sabe</th><th align=\"center\">Telf. Errado</th>
            </tr>
          </thead>
          <tr>
              <td>Respondió</td>
              <td align=\"center\">";
                // line 33
                echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "comando")) ? (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "si", 1 => 1), "method")) : (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "si", 1 => 1), "method"))), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["porcentajeSi"]) ? $context["porcentajeSi"] : $this->getContext($context, "porcentajeSi")), 2, ".", ""), "html", null, true);
                echo "%)</td>
              <td align=\"center\">";
                // line 34
                echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "comando")) ? (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "norespondio", 1 => 1), "method")) : (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "norespondio", 1 => 1), "method"))), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["porcentajeNo"]) ? $context["porcentajeNo"] : $this->getContext($context, "porcentajeNo")), 2, ".", ""), "html", null, true);
                echo "%)</td>
              <td align=\"center\">";
                // line 35
                echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "noasignado", 1 => 1), "method")) : (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "noasignado", 1 => 1), "method"))), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["porcentajeNoAsignado"]) ? $context["porcentajeNoAsignado"] : $this->getContext($context, "porcentajeNoAsignado")), 2, ".", ""), "html", null, true);
                echo "%)</td>
              <td align=\"center\">N/A</td>
              <td align=\"center\">N/A</td>
          </tr>

          <tr>
              <td>Idenficación</td>
              <td align=\"center\">";
                // line 42
                echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "comando")) ? (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "si", 1 => 2), "method")) : (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "si", 1 => 2), "method"))), "html", null, true);
                echo "</td>
              <td align=\"center\">N/A</td>
              <td align=\"center\">N/A</td>
              <td align=\"center\">N/A</td>
              <td align=\"center\">";
                // line 46
                echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "comando")) ? (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "cambiodenumero", 1 => 2), "method")) : (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "cambiodenumero", 1 => 2), "method"))), "html", null, true);
                echo "</td>
          </tr>
          ";
                // line 49
                echo "          <tr>
            ";
                // line 50
                if ( !twig_test_empty(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta3", array()))) {
                    // line 51
                    echo "              <td>";
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta3", array()), "html", null, true);
                    echo "</td>
              <td align=\"center\">";
                    // line 52
                    echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "comando")) ? (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "si", 1 => 3), "method")) : (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "si", 1 => 3), "method"))), "html", null, true);
                    echo "</td>
              <td align=\"center\">";
                    // line 53
                    echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "comando")) ? (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "no", 1 => 3), "method")) : (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "no", 1 => 3), "method"))), "html", null, true);
                    echo "</td>
              <td align=\"center\">N/A</td>
              <td align=\"center\">N/A</td>
              <td align=\"center\">N/A</td>
              
            ";
                }
                // line 59
                echo "          
          </tr>
          <tr>
            ";
                // line 62
                if ( !twig_test_empty(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta4", array()))) {
                    // line 63
                    echo "              <td>";
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta4", array()), "html", null, true);
                    echo "</td>
              <td align=\"center\">";
                    // line 64
                    echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "comando")) ? (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "si", 1 => 4), "method")) : (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "si", 1 => 4), "method"))), "html", null, true);
                    echo "</td>
              <td align=\"center\">";
                    // line 65
                    echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "comando")) ? (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "no", 1 => 4), "method")) : (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "no", 1 => 4), "method"))), "html", null, true);
                    echo "</td>
              <td align=\"center\">N/A</td>
               <td align=\"center\">";
                    // line 67
                    echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "comando")) ? (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "nosabe", 1 => 4), "method")) : (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "nosabe", 1 => 4), "method"))), "html", null, true);
                    echo "</td>
             <td align=\"center\">N/A</td>
            ";
                }
                // line 69
                echo "        
          </tr>
          <tr>
            ";
                // line 72
                if ( !twig_test_empty(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta5", array()))) {
                    // line 73
                    echo "              <td>";
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta5", array()), "html", null, true);
                    echo "</td>
              <td align=\"center\">";
                    // line 74
                    echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "comando")) ? (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "si", 1 => 5), "method")) : (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "si", 1 => 5), "method"))), "html", null, true);
                    echo "</td>
              <td align=\"center\">";
                    // line 75
                    echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "comando")) ? (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "no", 1 => 5), "method")) : (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "no", 1 => 5), "method"))), "html", null, true);
                    echo "</td>
              <td align=\"center\">N/A</td>
              <td align=\"center\">";
                    // line 77
                    echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "comando")) ? (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "nosabe", 1 => 5), "method")) : (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "nosabe", 1 => 5), "method"))), "html", null, true);
                    echo "</td>
              <td align=\"center\">N/A</td>
            ";
                }
                // line 79
                echo "         
          </tr>
          ";
                // line 82
                echo "          <!-- <tr>
            <td align=\"center\">Sub totales</td><td align=\"center\">";
                // line 83
                $context["totalSi"] = ((((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "si", 1 => 1), "method") + twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "si", 1 => 2), "method")) + twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "si", 1 => 3), "method")) + twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "si", 1 => 4), "method")) + twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "si", 1 => 5), "method"));
                echo twig_escape_filter($this->env, (isset($context["totalSi"]) ? $context["totalSi"] : $this->getContext($context, "totalSi")), "html", null, true);
                echo "</td><td align=\"center\">";
                $context["totalNo"] = ((((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "norespondio", 1 => 1), "method") + twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "no", 1 => 2), "method")) + twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "no", 1 => 3), "method")) + twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "no", 1 => 4), "method")) + twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "no", 1 => 5), "method"));
                echo twig_escape_filter($this->env, (isset($context["totalNo"]) ? $context["totalNo"] : $this->getContext($context, "totalNo")), "html", null, true);
                echo "</td><td align=\"center\">";
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "dicenoser", 1 => 2), "method"), "html", null, true);
                echo "</td><td align=\"center\">";
                $context["totalNoSabe"] = ((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "nosabe", 1 => 3), "method") + twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "nosabe", 1 => 4), "method")) + twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "nosabe", 1 => 5), "method"));
                echo twig_escape_filter($this->env, (isset($context["totalNoSabe"]) ? $context["totalNoSabe"] : $this->getContext($context, "totalNoSabe")), "html", null, true);
                echo "</td><td align=\"center\">";
                $context["totalCambioNumero"] = ((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "cambiodenumero", 1 => 3), "method") + twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "cambiodenumero", 1 => 4), "method")) + twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "cambiodenumero", 1 => 5), "method"));
                echo twig_escape_filter($this->env, (isset($context["totalCambioNumero"]) ? $context["totalCambioNumero"] : $this->getContext($context, "totalCambioNumero")), "html", null, true);
                echo "</td>
          </tr> -->
          <tr>
            <td align=\"center\"><strong>TOTAL DE LLAMADAS</strong></td><td align=\"center\" colspan=\"2\"><strong>";
                // line 86
                echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
                echo "</strong></td><td align=\"center\"><strong>TOTAL DE LLAMADAS EFECTIVAS</strong></td><td align=\"center\" colspan=\"2\"><strong>";
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "totalContactadoComandoSiPregunta", array(0 => "si", 1 => 1), "method"), "html", null, true);
                echo "</strong></td>  
          </tr>
        </table>
      ";
            }
            // line 90
            echo "  ";
        }
        // line 91
        echo "</center>
<center><input type=\"button\" class=\"btn btn-default\" onclick=\"javascript:window.print();\" name=\"Imprimir\" value=\"Imprimir\"></center>
";
    }

    // line 95
    public function block_javascripts($context, array $blocks = array())
    {
        // line 96
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
        return "EncuestasBundle:Encuestas:detalleVentanaComando.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  282 => 96,  279 => 95,  273 => 91,  270 => 90,  261 => 86,  243 => 83,  240 => 82,  236 => 79,  230 => 77,  225 => 75,  221 => 74,  216 => 73,  214 => 72,  209 => 69,  203 => 67,  198 => 65,  194 => 64,  189 => 63,  187 => 62,  182 => 59,  173 => 53,  169 => 52,  164 => 51,  162 => 50,  159 => 49,  154 => 46,  147 => 42,  135 => 35,  129 => 34,  123 => 33,  113 => 25,  110 => 24,  107 => 23,  104 => 22,  101 => 21,  98 => 20,  95 => 19,  91 => 16,  88 => 15,  82 => 13,  78 => 12,  74 => 11,  69 => 10,  66 => 9,  61 => 8,  55 => 6,  53 => 5,  51 => 4,  44 => 3,  39 => 2,  35 => 95,  32 => 94,  30 => 15,  28 => 9,  26 => 3,  24 => 2,);
    }
}
