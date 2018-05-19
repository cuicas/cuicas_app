<?php

/* EncuestasBundle:Encuestas:detalleVentana.html.twig */
class __TwigTemplate_14431ea8049f25b14628a7ad5b4104b82ba23b7716b8ef1b4ac658367582a8bb extends Twig_Template
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
        // line 387
        echo "   
";
        // line 388
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
      ";
                // line 46
                list($context["economica"], $context["transporte"], $context["servicios"], $context["capital"], $context["seguridad5"], $context["otros"]) =                 array(0, 0, 0, 0, 0, 0);
                // line 47
                echo "        
      ";
                // line 48
                list($context["amazonas"], $context["aragua"], $context["anzoategui"], $context["apure"], $context["barinas"], $context["bolivar"], $context["carabobo"], $context["cojedes"], $context["delta"], $context["falcon"], $context["guarico"], $context["lara"], $context["merida"], $context["miranda"], $context["monagas"], $context["nueva"], $context["portuguesa"], $context["sucre"], $context["tachira"], $context["trujillo"], $context["vargas"], $context["yaracuy"], $context["zulia"], $context["capitalE"], $context["ninguno"]) =                 array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                // line 49
                echo "

      ";
                // line 51
                list($context["psuv"], $context["mud"]) =                 array(0, 0);
                // line 52
                echo "

      ";
                // line 54
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "datosEmpresas", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
                    // line 55
                    echo "
        ";
                    // line 56
                    $context["amazonas"] = (twig_template_get_attributes($this, $context["empresa"], "amazonas", array()) + (isset($context["amazonas"]) ? $context["amazonas"] : $this->getContext($context, "amazonas")));
                    // line 57
                    echo "        ";
                    $context["aragua"] = ((isset($context["aragua"]) ? $context["aragua"] : $this->getContext($context, "aragua")) + twig_template_get_attributes($this, $context["empresa"], "aragua", array()));
                    // line 58
                    echo "        ";
                    $context["anzoategui"] = ((isset($context["anzoategui"]) ? $context["anzoategui"] : $this->getContext($context, "anzoategui")) + twig_template_get_attributes($this, $context["empresa"], "anzoategui", array()));
                    // line 59
                    echo "        ";
                    $context["apure"] = ((isset($context["apure"]) ? $context["apure"] : $this->getContext($context, "apure")) + twig_template_get_attributes($this, $context["empresa"], "apure", array()));
                    // line 60
                    echo "        ";
                    $context["barinas"] = ((isset($context["barinas"]) ? $context["barinas"] : $this->getContext($context, "barinas")) + twig_template_get_attributes($this, $context["empresa"], "barinas", array()));
                    // line 61
                    echo "        ";
                    $context["bolivar"] = ((isset($context["bolivar"]) ? $context["bolivar"] : $this->getContext($context, "bolivar")) + twig_template_get_attributes($this, $context["empresa"], "bolivar", array()));
                    // line 62
                    echo "
        ";
                    // line 63
                    $context["carabobo"] = (twig_template_get_attributes($this, $context["empresa"], "carabobo", array()) + (isset($context["carabobo"]) ? $context["carabobo"] : $this->getContext($context, "carabobo")));
                    // line 64
                    echo "        ";
                    $context["carabobo"] = ((isset($context["carabobo"]) ? $context["carabobo"] : $this->getContext($context, "carabobo")) + twig_template_get_attributes($this, $context["empresa"], "carabobo", array()));
                    // line 65
                    echo "        ";
                    $context["cojedes"] = ((isset($context["cojedes"]) ? $context["cojedes"] : $this->getContext($context, "cojedes")) + twig_template_get_attributes($this, $context["empresa"], "cojedes", array()));
                    // line 66
                    echo "        ";
                    $context["delta"] = ((isset($context["delta"]) ? $context["delta"] : $this->getContext($context, "delta")) + twig_template_get_attributes($this, $context["empresa"], "delta", array()));
                    // line 67
                    echo "        ";
                    $context["falcon"] = ((isset($context["falcon"]) ? $context["falcon"] : $this->getContext($context, "falcon")) + twig_template_get_attributes($this, $context["empresa"], "falcon", array()));
                    // line 68
                    echo "        ";
                    $context["guarico"] = ((isset($context["guarico"]) ? $context["guarico"] : $this->getContext($context, "guarico")) + twig_template_get_attributes($this, $context["empresa"], "guarico", array()));
                    // line 69
                    echo "
        ";
                    // line 70
                    $context["lara"] = (twig_template_get_attributes($this, $context["empresa"], "lara", array()) + (isset($context["lara"]) ? $context["lara"] : $this->getContext($context, "lara")));
                    // line 71
                    echo "        ";
                    $context["merida"] = ((isset($context["merida"]) ? $context["merida"] : $this->getContext($context, "merida")) + twig_template_get_attributes($this, $context["empresa"], "merida", array()));
                    // line 72
                    echo "        ";
                    $context["miranda"] = ((isset($context["miranda"]) ? $context["miranda"] : $this->getContext($context, "miranda")) + twig_template_get_attributes($this, $context["empresa"], "miranda", array()));
                    // line 73
                    echo "        ";
                    $context["monagas"] = ((isset($context["monagas"]) ? $context["monagas"] : $this->getContext($context, "monagas")) + twig_template_get_attributes($this, $context["empresa"], "monagas", array()));
                    // line 74
                    echo "        ";
                    $context["nueva"] = ((isset($context["nueva"]) ? $context["nueva"] : $this->getContext($context, "nueva")) + twig_template_get_attributes($this, $context["empresa"], "nueva", array()));
                    // line 75
                    echo "        ";
                    $context["portuguesa"] = ((isset($context["portuguesa"]) ? $context["portuguesa"] : $this->getContext($context, "portuguesa")) + twig_template_get_attributes($this, $context["empresa"], "portuguesa", array()));
                    // line 76
                    echo "
        ";
                    // line 77
                    $context["sucre"] = (twig_template_get_attributes($this, $context["empresa"], "sucre", array()) + (isset($context["sucre"]) ? $context["sucre"] : $this->getContext($context, "sucre")));
                    // line 78
                    echo "        ";
                    $context["tachira"] = ((isset($context["tachira"]) ? $context["tachira"] : $this->getContext($context, "tachira")) + twig_template_get_attributes($this, $context["empresa"], "tachira", array()));
                    // line 79
                    echo "        ";
                    $context["trujillo"] = ((isset($context["trujillo"]) ? $context["trujillo"] : $this->getContext($context, "trujillo")) + twig_template_get_attributes($this, $context["empresa"], "trujillo", array()));
                    // line 80
                    echo "        ";
                    $context["vargas"] = ((isset($context["vargas"]) ? $context["vargas"] : $this->getContext($context, "vargas")) + twig_template_get_attributes($this, $context["empresa"], "vargas", array()));
                    // line 81
                    echo "        ";
                    $context["yaracuy"] = ((isset($context["yaracuy"]) ? $context["yaracuy"] : $this->getContext($context, "yaracuy")) + twig_template_get_attributes($this, $context["empresa"], "yaracuy", array()));
                    // line 82
                    echo "        ";
                    $context["zulia"] = ((isset($context["zulia"]) ? $context["zulia"] : $this->getContext($context, "zulia")) + twig_template_get_attributes($this, $context["empresa"], "zulia", array()));
                    // line 83
                    echo "
        ";
                    // line 84
                    $context["capitalE"] = ((isset($context["capitalE"]) ? $context["capitalE"] : $this->getContext($context, "capitalE")) + twig_template_get_attributes($this, $context["empresa"], "capitalE", array()));
                    // line 85
                    echo "        ";
                    $context["zulia"] = ((isset($context["zulia"]) ? $context["zulia"] : $this->getContext($context, "zulia")) + twig_template_get_attributes($this, $context["empresa"], "zulia", array()));
                    // line 86
                    echo "
        ";
                    // line 87
                    $context["economica"] = (twig_template_get_attributes($this, $context["empresa"], "economica", array()) + (isset($context["economica"]) ? $context["economica"] : $this->getContext($context, "economica")));
                    // line 88
                    echo "        ";
                    $context["servicios"] = ((isset($context["servicios"]) ? $context["servicios"] : $this->getContext($context, "servicios")) + twig_template_get_attributes($this, $context["empresa"], "servicios", array()));
                    // line 89
                    echo "        ";
                    $context["seguridad5"] = ((isset($context["seguridad5"]) ? $context["seguridad5"] : $this->getContext($context, "seguridad5")) + twig_template_get_attributes($this, $context["empresa"], "seguridad5", array()));
                    // line 90
                    echo "        ";
                    $context["transporte"] = ((isset($context["transporte"]) ? $context["transporte"] : $this->getContext($context, "transporte")) + twig_template_get_attributes($this, $context["empresa"], "transporte", array()));
                    // line 91
                    echo "        ";
                    $context["capital"] = ((isset($context["capital"]) ? $context["capital"] : $this->getContext($context, "capital")) + twig_template_get_attributes($this, $context["empresa"], "capital", array()));
                    // line 92
                    echo "        ";
                    $context["otros"] = ((isset($context["otros"]) ? $context["otros"] : $this->getContext($context, "otros")) + twig_template_get_attributes($this, $context["empresa"], "otros", array()));
                    // line 93
                    echo "        ";
                    $context["psuv"] = ((isset($context["psuv"]) ? $context["psuv"] : $this->getContext($context, "psuv")) + twig_template_get_attributes($this, $context["empresa"], "psuv", array()));
                    // line 94
                    echo "        ";
                    $context["mud"] = ((isset($context["mud"]) ? $context["mud"] : $this->getContext($context, "mud")) + twig_template_get_attributes($this, $context["empresa"], "mud", array()));
                    // line 95
                    echo "
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
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
                // line 111
                echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? (twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "si1", array())) : (0)), "html", null, true);
                echo "</td>
              <td align=\"center\">";
                // line 112
                echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? (twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "norespondio1", array())) : (0)), "html", null, true);
                echo "</td>
               <td align=\"center\">";
                // line 113
                echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? (twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "noasignado1", array())) : (0)), "html", null, true);
                echo "</td>
              <td align=\"center\">N/A</td>
              <td align=\"center\">N/A</td>
          </tr>
          <tr>
              <td></td>
              <td align=\"center\">";
                // line 119
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["porcentajeSi"]) ? $context["porcentajeSi"] : $this->getContext($context, "porcentajeSi")), 2, ".", ""), "html", null, true);
                echo "%</td>
              <td align=\"center\">";
                // line 120
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["porcentajeNo"]) ? $context["porcentajeNo"] : $this->getContext($context, "porcentajeNo")), 2, ".", ""), "html", null, true);
                echo "%</td>
              <td align=\"center\">";
                // line 121
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["porcentajeNoAsignado"]) ? $context["porcentajeNoAsignado"] : $this->getContext($context, "porcentajeNoAsignado")), 2, ".", ""), "html", null, true);
                echo "%</td>
               <td align=\"center\" colspan=\"2\"></td>
          </tr>

          <tr>
              <td>Idenficación</td>
              <td align=\"center\">";
                // line 127
                echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? (twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "si2", array())) : (0)), "html", null, true);
                echo "</td>
              <td align=\"center\">N/A</td>
              <td align=\"center\">N/A</td>
              <td align=\"center\">N/A</td>
              <td align=\"center\">";
                // line 131
                echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? (twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "cambiodenumero2", array())) : (0)), "html", null, true);
                echo "</td>
          </tr>
          ";
                // line 134
                echo "          <tr>
            ";
                // line 135
                if ( !twig_test_empty(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta3", array()))) {
                    // line 136
                    echo "              <td>Pertenece a la empresa encuestada</td><!-- encuesta.preguntas.pregunta3 -->
              <td align=\"center\">";
                    // line 137
                    echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? (twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "si3", array())) : (0)), "html", null, true);
                    echo "</td>
              <td align=\"center\">";
                    // line 138
                    echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? (twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "no3", array())) : (0)), "html", null, true);
                    echo "</td>
              <td align=\"center\">N/A</td>
              <td align=\"center\">N/A</td>
              <td align=\"center\">N/A</td>
              
            ";
                }
                // line 144
                echo "          
          </tr>
          <tr>
            ";
                // line 147
                if ( !twig_test_empty(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta4", array()))) {
                    // line 148
                    echo "              <td>";
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta4", array()), "html", null, true);
                    echo "</td>
              <td align=\"center\">";
                    // line 149
                    echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? (twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "si4", array())) : (0)), "html", null, true);
                    echo "</td>
              <td align=\"center\">";
                    // line 150
                    echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? (twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "no4", array())) : (0)), "html", null, true);
                    echo "</td>
              <td align=\"center\">N/A</td>
               <td align=\"center\">";
                    // line 152
                    echo twig_escape_filter($this->env, (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "general")) ? (twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "nosabe4", array())) : (0)), "html", null, true);
                    echo "</td>
             <td align=\"center\">N/A</td>
            ";
                }
                // line 154
                echo "        
          </tr>
          <tr>
            ";
                // line 157
                if ( !twig_test_empty(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta5", array()))) {
                    // line 158
                    echo "              <td>";
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta5", array()), "html", null, true);
                    echo "</td>



              <td colspan=\"5\">
                Total de motivos: <strong>";
                    // line 163
                    echo twig_escape_filter($this->env, ((((((isset($context["economica"]) ? $context["economica"] : $this->getContext($context, "economica")) + (isset($context["servicios"]) ? $context["servicios"] : $this->getContext($context, "servicios"))) + (isset($context["seguridad5"]) ? $context["seguridad5"] : $this->getContext($context, "seguridad5"))) + (isset($context["transporte"]) ? $context["transporte"] : $this->getContext($context, "transporte"))) + (isset($context["capital"]) ? $context["capital"] : $this->getContext($context, "capital"))) + (isset($context["otros"]) ? $context["otros"] : $this->getContext($context, "otros"))), "html", null, true);
                    echo "</strong><br />
                Guerra económica: <strong>";
                    // line 164
                    echo twig_escape_filter($this->env, (isset($context["economica"]) ? $context["economica"] : $this->getContext($context, "economica")), "html", null, true);
                    echo "</strong>, Seguridad: <strong>";
                    echo twig_escape_filter($this->env, (isset($context["seguridad5"]) ? $context["seguridad5"] : $this->getContext($context, "seguridad5")), "html", null, true);
                    echo "</strong>, Transporte: <strong>";
                    echo twig_escape_filter($this->env, (isset($context["transporte"]) ? $context["transporte"] : $this->getContext($context, "transporte")), "html", null, true);
                    echo "</strong>, Servicios: <strong>";
                    echo twig_escape_filter($this->env, (isset($context["servicios"]) ? $context["servicios"] : $this->getContext($context, "servicios")), "html", null, true);
                    echo "</strong>, Distrito Capital: <strong>";
                    echo twig_escape_filter($this->env, (isset($context["capital"]) ? $context["capital"] : $this->getContext($context, "capital")), "html", null, true);
                    echo "</strong>, Otros: <strong>";
                    echo twig_escape_filter($this->env, (isset($context["otros"]) ? $context["otros"] : $this->getContext($context, "otros")), "html", null, true);
                    echo "</strong>
              </td>

            ";
                }
                // line 167
                echo "         
          </tr>



          <tr>
            ";
                // line 173
                if ( !twig_test_empty(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta6", array()))) {
                    // line 174
                    echo "              <td>";
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta6", array()), "html", null, true);
                    echo "</td>
              <td colspan=\"5\">
                amazonas: <strong>";
                    // line 176
                    echo twig_escape_filter($this->env, (isset($context["amazonas"]) ? $context["amazonas"] : $this->getContext($context, "amazonas")), "html", null, true);
                    echo "</strong>, aragua: <strong>";
                    echo twig_escape_filter($this->env, (isset($context["aragua"]) ? $context["aragua"] : $this->getContext($context, "aragua")), "html", null, true);
                    echo "</strong>, anzoategui: <strong>";
                    echo twig_escape_filter($this->env, (isset($context["anzoategui"]) ? $context["anzoategui"] : $this->getContext($context, "anzoategui")), "html", null, true);
                    echo "</strong>, apure: <strong>";
                    echo twig_escape_filter($this->env, (isset($context["apure"]) ? $context["apure"] : $this->getContext($context, "apure")), "html", null, true);
                    echo "</strong>, barinas: <strong>";
                    echo twig_escape_filter($this->env, (isset($context["barinas"]) ? $context["barinas"] : $this->getContext($context, "barinas")), "html", null, true);
                    echo "</strong>, bolivar: <strong>";
                    echo twig_escape_filter($this->env, (isset($context["bolivar"]) ? $context["bolivar"] : $this->getContext($context, "bolivar")), "html", null, true);
                    echo "</strong>, carabobo: <strong>";
                    echo twig_escape_filter($this->env, (isset($context["carabobo"]) ? $context["carabobo"] : $this->getContext($context, "carabobo")), "html", null, true);
                    echo "</strong>, cojedes: <strong>";
                    echo twig_escape_filter($this->env, (isset($context["cojedes"]) ? $context["cojedes"] : $this->getContext($context, "cojedes")), "html", null, true);
                    echo "</strong>, <br>delta: <strong>";
                    echo twig_escape_filter($this->env, (isset($context["delta"]) ? $context["delta"] : $this->getContext($context, "delta")), "html", null, true);
                    echo "</strong>,  falcon: <strong>";
                    echo twig_escape_filter($this->env, (isset($context["falcon"]) ? $context["falcon"] : $this->getContext($context, "falcon")), "html", null, true);
                    echo "</strong>,guarico: <strong>";
                    echo twig_escape_filter($this->env, (isset($context["guarico"]) ? $context["guarico"] : $this->getContext($context, "guarico")), "html", null, true);
                    echo "</strong>, lara: <strong>";
                    echo twig_escape_filter($this->env, (isset($context["lara"]) ? $context["lara"] : $this->getContext($context, "lara")), "html", null, true);
                    echo "</strong>, merida: <strong>";
                    echo twig_escape_filter($this->env, (isset($context["merida"]) ? $context["merida"] : $this->getContext($context, "merida")), "html", null, true);
                    echo "</strong>, miranda: <strong>";
                    echo twig_escape_filter($this->env, (isset($context["miranda"]) ? $context["miranda"] : $this->getContext($context, "miranda")), "html", null, true);
                    echo "</strong>, monagas: <strong>";
                    echo twig_escape_filter($this->env, (isset($context["monagas"]) ? $context["monagas"] : $this->getContext($context, "monagas")), "html", null, true);
                    echo "</strong>, nueva esparta: <strong>";
                    echo twig_escape_filter($this->env, (isset($context["nueva"]) ? $context["nueva"] : $this->getContext($context, "nueva")), "html", null, true);
                    echo "</strong>, portuguesa: <strong>";
                    echo twig_escape_filter($this->env, (isset($context["portuguesa"]) ? $context["portuguesa"] : $this->getContext($context, "portuguesa")), "html", null, true);
                    echo "</strong>, <br>sucre: <strong>";
                    echo twig_escape_filter($this->env, (isset($context["sucre"]) ? $context["sucre"] : $this->getContext($context, "sucre")), "html", null, true);
                    echo "</strong>,  tachira: <strong>";
                    echo twig_escape_filter($this->env, (isset($context["tachira"]) ? $context["tachira"] : $this->getContext($context, "tachira")), "html", null, true);
                    echo "</strong>,trujillo: <strong>";
                    echo twig_escape_filter($this->env, (isset($context["trujillo"]) ? $context["trujillo"] : $this->getContext($context, "trujillo")), "html", null, true);
                    echo "</strong>, vargas: <strong>";
                    echo twig_escape_filter($this->env, (isset($context["vargas"]) ? $context["vargas"] : $this->getContext($context, "vargas")), "html", null, true);
                    echo "</strong>, yaracuy: <strong>";
                    echo twig_escape_filter($this->env, (isset($context["yaracuy"]) ? $context["yaracuy"] : $this->getContext($context, "yaracuy")), "html", null, true);
                    echo "</strong>, zulia: <strong>";
                    echo twig_escape_filter($this->env, (isset($context["zulia"]) ? $context["zulia"] : $this->getContext($context, "zulia")), "html", null, true);
                    echo "</strong>, Dtto Capital: <strong>";
                    echo twig_escape_filter($this->env, (isset($context["capitalE"]) ? $context["capitalE"] : $this->getContext($context, "capitalE")), "html", null, true);
                    echo "</strong>, Ninguno: <strong>";
                    echo twig_escape_filter($this->env, (isset($context["ninguno"]) ? $context["ninguno"] : $this->getContext($context, "ninguno")), "html", null, true);
                    echo "</strong>
              </td>
            ";
                }
                // line 178
                echo "        
          </tr>
          <tr>
            ";
                // line 181
                if ( !twig_test_empty(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta7", array()))) {
                    // line 182
                    echo "              <td>";
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta7", array()), "html", null, true);
                    echo "</td>
              <td colspan=\"5\">
                 GPP: <strong>";
                    // line 184
                    echo twig_escape_filter($this->env, (isset($context["psuv"]) ? $context["psuv"] : $this->getContext($context, "psuv")), "html", null, true);
                    echo "</strong>  MUD: <strong>";
                    echo twig_escape_filter($this->env, (isset($context["mud"]) ? $context["mud"] : $this->getContext($context, "mud")), "html", null, true);
                    echo "</strong>
               </td>
            ";
                }
                // line 187
                echo "          </tr>


          ";
                // line 191
                echo "          <tr>
            <td align=\"center\"><strong>TOTAL DE LLAMADAS </strong></td><td align=\"center\" colspan=\"2\"><strong>";
                // line 192
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "total", array()), "html", null, true);
                echo "</strong></td>
            <td align=\"center\"><strong>TOTAL DE LLAMADAS EFECTIVAS </strong></td><td align=\"center\" colspan=\"2\"><strong>";
                // line 193
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "si1", array()), "html", null, true);
                echo "</strong></td>  
          </tr>
        </table>

        ";
                // line 197
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "datosEmpresas", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
                    // line 198
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
                    // line 213
                    $context["porcentajeSi"] = 0;
                    // line 214
                    echo "                ";
                    if (((twig_template_get_attributes($this, $context["empresa"], "si1", array()) + twig_template_get_attributes($this, $context["empresa"], "no1", array())) != 0)) {
                        // line 215
                        echo "                  ";
                        $context["porcentajeSi"] = ((twig_template_get_attributes($this, $context["empresa"], "si1", array()) / (twig_template_get_attributes($this, $context["empresa"], "si1", array()) + twig_template_get_attributes($this, $context["empresa"], "no1", array()))) * 100);
                        // line 216
                        echo "                ";
                    }
                    // line 217
                    echo "                ";
                    $context["porcentajeNo"] = 0;
                    // line 218
                    echo "                ";
                    if (((twig_template_get_attributes($this, $context["empresa"], "si1", array()) + twig_template_get_attributes($this, $context["empresa"], "no1", array())) != 0)) {
                        // line 219
                        echo "                  ";
                        $context["porcentajeNo"] = ((twig_template_get_attributes($this, $context["empresa"], "no1", array()) / (twig_template_get_attributes($this, $context["empresa"], "si1", array()) + twig_template_get_attributes($this, $context["empresa"], "no1", array()))) * 100);
                        // line 220
                        echo "                ";
                    }
                    // line 221
                    echo "                <td align=\"center\">";
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "si1", array()), "html", null, true);
                    echo "</td>
                <td align=\"center\">";
                    // line 222
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "no1", array()), "html", null, true);
                    echo "</td>
                <td align=\"center\">";
                    // line 223
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "noasignado1", array()), "html", null, true);
                    echo "</td>
                <td align=\"center\">N/A</td>
                <td align=\"center\">N/A</td>
                
              </tr>
              <tr>
                <td></td>
                ";
                    // line 230
                    $context["porcentajeSi"] = 0;
                    // line 231
                    echo "                ";
                    if (((twig_template_get_attributes($this, $context["empresa"], "si1", array()) + twig_template_get_attributes($this, $context["empresa"], "no1", array())) != 0)) {
                        // line 232
                        echo "                  ";
                        $context["porcentajeSi"] = ((twig_template_get_attributes($this, $context["empresa"], "si1", array()) / (twig_template_get_attributes($this, $context["empresa"], "si1", array()) + twig_template_get_attributes($this, $context["empresa"], "no1", array()))) * 100);
                        // line 233
                        echo "                ";
                    }
                    // line 234
                    echo "                ";
                    $context["porcentajeNo"] = 0;
                    // line 235
                    echo "                ";
                    if (((twig_template_get_attributes($this, $context["empresa"], "si1", array()) + twig_template_get_attributes($this, $context["empresa"], "no1", array())) != 0)) {
                        // line 236
                        echo "                  ";
                        $context["porcentajeNo"] = ((twig_template_get_attributes($this, $context["empresa"], "no1", array()) / (twig_template_get_attributes($this, $context["empresa"], "si1", array()) + twig_template_get_attributes($this, $context["empresa"], "no1", array()))) * 100);
                        // line 237
                        echo "                ";
                    }
                    // line 238
                    echo "                ";
                    $context["porcentajeNo"] = 0;
                    // line 239
                    echo "                ";
                    if (((twig_template_get_attributes($this, $context["empresa"], "si1", array()) + twig_template_get_attributes($this, $context["empresa"], "no1", array())) != 0)) {
                        // line 240
                        echo "                  ";
                        $context["porcentajeNo"] = ((twig_template_get_attributes($this, $context["empresa"], "no1", array()) / (twig_template_get_attributes($this, $context["empresa"], "si1", array()) + twig_template_get_attributes($this, $context["empresa"], "no1", array()))) * 100);
                        // line 241
                        echo "                ";
                    }
                    // line 242
                    echo "                <td align=\"center\">";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["porcentajeSi"]) ? $context["porcentajeSi"] : $this->getContext($context, "porcentajeSi")), 2, ".", ""), "html", null, true);
                    echo "%</td>
                <td align=\"center\">";
                    // line 243
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["porcentajeNo"]) ? $context["porcentajeNo"] : $this->getContext($context, "porcentajeNo")), 2, ".", ""), "html", null, true);
                    echo "%</td>
                <td align=\"center\" colspan=\"3\"></td>
                
              </tr>
              <tr>
                <td>Idenficación</td>
                <td align=\"center\">";
                    // line 249
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "si2", array()), "html", null, true);
                    echo "</td>
                <td align=\"center\">N/A</td>
                <td align=\"center\">N/A</td>
                <td align=\"center\">N/A</td>
                <td align=\"center\">";
                    // line 253
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "no2", array()), "html", null, true);
                    echo "</td>
              </tr>
              <tr>
                <td>Pertenece a la empresa encuestada</td>
                <td align=\"center\">";
                    // line 257
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "si3", array()), "html", null, true);
                    echo "</td>
                <td align=\"center\">";
                    // line 258
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "no3", array()), "html", null, true);
                    echo "</td>
                <td align=\"center\">N/A</td>
                <td align=\"center\">N/A</td>
                <td align=\"center\">N/A</td>
              </tr>
              <tr>
                <td>";
                    // line 264
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta4", array()), "html", null, true);
                    echo "</td>
                <td align=\"center\">";
                    // line 265
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "si4", array()), "html", null, true);
                    echo "</td>
                <td align=\"center\">";
                    // line 266
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "no4", array()), "html", null, true);
                    echo "</td>
                <td align=\"center\">N/A</td>
                <td align=\"center\">";
                    // line 268
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "nosabe4", array()), "html", null, true);
                    echo "</td>
                <td align=\"center\">N/A</td>
              </tr>
              
            ";
                    // line 272
                    if ( !twig_test_empty(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta5", array()))) {
                        // line 273
                        echo "              <td>";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta5", array()), "html", null, true);
                        echo "</td>



              <td colspan=\"5\">
                Total de motivos: <strong>";
                        // line 278
                        echo twig_escape_filter($this->env, (((((twig_template_get_attributes($this, $context["empresa"], "economica", array()) + twig_template_get_attributes($this, $context["empresa"], "servicios", array())) + twig_template_get_attributes($this, $context["empresa"], "seguridad5", array())) + twig_template_get_attributes($this, $context["empresa"], "transporte", array())) + twig_template_get_attributes($this, $context["empresa"], "capital", array())) + twig_template_get_attributes($this, $context["empresa"], "otros", array())), "html", null, true);
                        echo "</strong><br />
                Guerra económica: <strong>";
                        // line 279
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "economica", array()), "html", null, true);
                        echo "</strong>, Seguridad: <strong>";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "seguridad5", array()), "html", null, true);
                        echo "</strong>, Transporte: <strong>";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "transporte", array()), "html", null, true);
                        echo "</strong>, Servicios: <strong>";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "servicios", array()), "html", null, true);
                        echo "</strong>, Distrito Capital: <strong>";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "capital", array()), "html", null, true);
                        echo "</strong>, Otros: <strong>";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "otros", array()), "html", null, true);
                        echo "</strong>
              </td>

            ";
                    }
                    // line 282
                    echo "         
          </tr>



          <tr>
            ";
                    // line 288
                    if ( !twig_test_empty(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta6", array()))) {
                        // line 289
                        echo "              <td>";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta6", array()), "html", null, true);
                        echo "</td>
              <td colspan=\"5\">
                amazonas: <strong>";
                        // line 291
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "amazonas", array()), "html", null, true);
                        echo "</strong>, aragua: <strong>";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "aragua", array()), "html", null, true);
                        echo "</strong>, anzoategui: <strong>";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "anzoategui", array()), "html", null, true);
                        echo "</strong>, apure: <strong>";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "apure", array()), "html", null, true);
                        echo "</strong>, barinas: <strong>";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "barinas", array()), "html", null, true);
                        echo "</strong>, bolivar: <strong>";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "bolivar", array()), "html", null, true);
                        echo "</strong>, carabobo: <strong>";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "carabobo", array()), "html", null, true);
                        echo "</strong>, cojedes: <strong>";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "cojedes", array()), "html", null, true);
                        echo "</strong>, <br>delta: <strong>";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "delta", array()), "html", null, true);
                        echo "</strong>,  falcon: <strong>";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "falcon", array()), "html", null, true);
                        echo "</strong>,guarico: <strong>";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "guarico", array()), "html", null, true);
                        echo "</strong>, lara: <strong>";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "lara", array()), "html", null, true);
                        echo "</strong>, merida: <strong>";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "merida", array()), "html", null, true);
                        echo "</strong>, miranda: <strong>";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "miranda", array()), "html", null, true);
                        echo "</strong>, monagas: <strong>";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "monagas", array()), "html", null, true);
                        echo "</strong>, nueva esparta: <strong>";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "nueva", array()), "html", null, true);
                        echo "</strong>, portuguesa: <strong>";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "portuguesa", array()), "html", null, true);
                        echo "</strong>, <br>sucre: <strong>";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "sucre", array()), "html", null, true);
                        echo "</strong>,  tachira: <strong>";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "tachira", array()), "html", null, true);
                        echo "</strong>,trujillo: <strong>";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "trujillo", array()), "html", null, true);
                        echo "</strong>, vargas: <strong>";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "vargas", array()), "html", null, true);
                        echo "</strong>, yaracuy: <strong>";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "yaracuy", array()), "html", null, true);
                        echo "</strong>, zulia: <strong>";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "zulia", array()), "html", null, true);
                        echo "</strong>, Dtto Capital: <strong>";
                        echo twig_escape_filter($this->env, (isset($context["capitalE"]) ? $context["capitalE"] : $this->getContext($context, "capitalE")), "html", null, true);
                        echo "</strong>, Ninguno: <strong>";
                        echo twig_escape_filter($this->env, (isset($context["ninguno"]) ? $context["ninguno"] : $this->getContext($context, "ninguno")), "html", null, true);
                        echo "</strong>
              </td>
            ";
                    }
                    // line 293
                    echo "        
          </tr>
          <tr>
            ";
                    // line 296
                    if ( !twig_test_empty(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta7", array()))) {
                        // line 297
                        echo "              <td>";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "preguntas", array()), "pregunta7", array()), "html", null, true);
                        echo "</td>
              <td colspan=\"5\">
                 GPP: <strong>";
                        // line 299
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "psuv", array()), "html", null, true);
                        echo "</strong>  MUD: <strong>";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["empresa"], "mud", array()), "html", null, true);
                        echo "</strong>
               </td>
            ";
                    }
                    // line 302
                    echo "          </tr>


              <tr>
                <td colspan=\"6\">8
                  Total de Limitaciones:";
                    // line 307
                    echo twig_escape_filter($this->env, ((((((twig_template_get_attributes($this, $context["empresa"], "movilizacion", array()) + twig_template_get_attributes($this, $context["empresa"], "logistico", array())) + twig_template_get_attributes($this, $context["empresa"], "seguridad", array())) + twig_template_get_attributes($this, $context["empresa"], "salud", array())) + twig_template_get_attributes($this, $context["empresa"], "metereologico", array())) + twig_template_get_attributes($this, $context["empresa"], "electrico", array())) + twig_template_get_attributes($this, $context["empresa"], "otro", array())), "html", null, true);
                    echo "<br />
                  Movilización: ";
                    // line 308
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
                // line 315
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
                // line 327
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
                // line 335
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
                // line 343
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
                // line 351
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
                // line 359
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
                // line 367
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
                // line 375
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["datosGenerales"]) ? $context["datosGenerales"] : $this->getContext($context, "datosGenerales")), "otro", array()), "html", null, true);
                echo "
              </td>
            </tr>
          </tbody>

        </table>
      ";
            }
            // line 382
            echo "  ";
        }
        // line 383
        echo "</center>

<center><input type=\"button\" class=\"btn btn-default\" onclick=\"javascript:window.print();\" name=\"Imprimir\" value=\"Imprimir\"></center>
";
    }

    // line 388
    public function block_javascripts($context, array $blocks = array())
    {
        // line 389
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
        return array (  936 => 389,  933 => 388,  926 => 383,  923 => 382,  913 => 375,  902 => 367,  891 => 359,  880 => 351,  869 => 343,  858 => 335,  847 => 327,  833 => 315,  808 => 308,  804 => 307,  797 => 302,  789 => 299,  783 => 297,  781 => 296,  776 => 293,  722 => 291,  716 => 289,  714 => 288,  706 => 282,  689 => 279,  685 => 278,  676 => 273,  674 => 272,  667 => 268,  662 => 266,  658 => 265,  654 => 264,  645 => 258,  641 => 257,  634 => 253,  627 => 249,  618 => 243,  613 => 242,  610 => 241,  607 => 240,  604 => 239,  601 => 238,  598 => 237,  595 => 236,  592 => 235,  589 => 234,  586 => 233,  583 => 232,  580 => 231,  578 => 230,  568 => 223,  564 => 222,  559 => 221,  556 => 220,  553 => 219,  550 => 218,  547 => 217,  544 => 216,  541 => 215,  538 => 214,  536 => 213,  517 => 198,  513 => 197,  506 => 193,  502 => 192,  499 => 191,  494 => 187,  486 => 184,  480 => 182,  478 => 181,  473 => 178,  419 => 176,  413 => 174,  411 => 173,  403 => 167,  386 => 164,  382 => 163,  373 => 158,  371 => 157,  366 => 154,  360 => 152,  355 => 150,  351 => 149,  346 => 148,  344 => 147,  339 => 144,  330 => 138,  326 => 137,  323 => 136,  321 => 135,  318 => 134,  313 => 131,  306 => 127,  297 => 121,  293 => 120,  289 => 119,  280 => 113,  276 => 112,  272 => 111,  256 => 97,  249 => 95,  246 => 94,  243 => 93,  240 => 92,  237 => 91,  234 => 90,  231 => 89,  228 => 88,  226 => 87,  223 => 86,  220 => 85,  218 => 84,  215 => 83,  212 => 82,  209 => 81,  206 => 80,  203 => 79,  200 => 78,  198 => 77,  195 => 76,  192 => 75,  189 => 74,  186 => 73,  183 => 72,  180 => 71,  178 => 70,  175 => 69,  172 => 68,  169 => 67,  166 => 66,  163 => 65,  160 => 64,  158 => 63,  155 => 62,  152 => 61,  149 => 60,  146 => 59,  143 => 58,  140 => 57,  138 => 56,  135 => 55,  131 => 54,  127 => 52,  125 => 51,  121 => 49,  119 => 48,  116 => 47,  114 => 46,  111 => 45,  108 => 44,  105 => 43,  102 => 42,  100 => 41,  97 => 40,  94 => 19,  91 => 18,  87 => 15,  84 => 14,  78 => 12,  74 => 11,  70 => 10,  65 => 9,  62 => 8,  51 => 6,  49 => 5,  47 => 4,  44 => 3,  39 => 2,  35 => 388,  32 => 387,  30 => 14,  28 => 8,  26 => 3,  24 => 2,);
    }
}
