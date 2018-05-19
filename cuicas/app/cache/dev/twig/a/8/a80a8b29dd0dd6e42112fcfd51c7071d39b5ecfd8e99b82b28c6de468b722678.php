<?php

/* EncuestasBundle:Encuestas:detalleVentanaFase3.html.twig */
class __TwigTemplate_a80a8b29dd0dd6e42112fcfd51c7071d39b5ecfd8e99b82b28c6de468b722678 extends Twig_Template
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

    // line 16
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 17
        echo "<br><br><br>
<center>
  ";
        // line 20
        echo "  ";
        if (array_key_exists("encuesta", $context)) {
            // line 21
            echo "      <table class=\"table stacktable table-hover\" border=\"1\">
        ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["circuitos"]) ? $context["circuitos"] : $this->getContext($context, "circuitos"))));
            foreach ($context['_seq'] as $context["_key"] => $context["circuito"]) {
                // line 23
                echo "            ";
                $context["votosPsuvTotalCircuito"] = 0;
                // line 24
                echo "            ";
                $context["votosMudTotalCircuito"] = 0;
                // line 25
                echo "            ";
                $context["votosOtrosTotalCircuito"] = 0;
                // line 26
                echo "        <thead>       
          <th colspan=\"1\">Circuito: ";
                // line 27
                echo twig_escape_filter($this->env, $context["circuito"], "html", null, true);
                echo "</th>
        </thead>        
          ";
                // line 29
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["municipios"]) ? $context["municipios"] : $this->getContext($context, "municipios")));
                foreach ($context['_seq'] as $context["_key"] => $context["municipio"]) {
                    // line 30
                    echo "            ";
                    if ((twig_template_get_attributes($this, twig_template_get_attributes($this, $context["municipio"], "circuito", array()), "id", array()) == twig_template_get_attributes($this, $context["circuito"], "id", array()))) {
                        // line 31
                        echo "          <thead> 
            <tr>
              <th>Municipio: ";
                        // line 33
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["municipio"], "nombreMunicipio", array()), "html", null, true);
                        echo "</th><th align=\"center\">PSUV / PSUV-GPP</th><th align=\"center\">MUD</th><th align=\"center\">OTRO</th>
            </tr>   
          </thead> 
            ";
                        // line 36
                        $context["votosPsuvTotal"] = 0;
                        // line 37
                        echo "            ";
                        $context["votosMudTotal"] = 0;
                        // line 38
                        echo "            ";
                        $context["votosOtrosTotal"] = 0;
                        // line 39
                        echo "            ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["parroquias"]) ? $context["parroquias"] : $this->getContext($context, "parroquias")));
                        foreach ($context['_seq'] as $context["_key"] => $context["parroquia"]) {
                            if ((twig_template_get_attributes($this, twig_template_get_attributes($this, $context["parroquia"], "municipio", array()), "id", array()) == twig_template_get_attributes($this, $context["municipio"], "id", array()))) {
                                // line 40
                                echo "            <tr>
              ";
                                // line 41
                                $context["votosPsuv"] = 0;
                                // line 42
                                echo "              ";
                                $context["votosMud"] = 0;
                                // line 43
                                echo "              ";
                                $context["votosOtros"] = 0;
                                // line 44
                                echo "              ";
                                $context["tipoIncidenciasCv"] = "";
                                // line 45
                                echo "              ";
                                $context["incidenciasCv"] = "";
                                // line 46
                                echo "                ";
                                $context['_parent'] = (array) $context;
                                $context['_seq'] = twig_ensure_traversable((isset($context["cvCandidatos"]) ? $context["cvCandidatos"] : $this->getContext($context, "cvCandidatos")));
                                foreach ($context['_seq'] as $context["_key"] => $context["cvCandidato"]) {
                                    // line 47
                                    echo "                  ";
                                    if ((twig_template_get_attributes($this, $context["parroquia"], "id", array()) == twig_template_get_attributes($this, $context["cvCandidato"], "idParroquia", array()))) {
                                        // line 48
                                        echo "                    ";
                                        if (((twig_template_get_attributes($this, twig_template_get_attributes($this, $context["cvCandidato"], "candidato", array()), "partido", array()) == "psuv") || (twig_template_get_attributes($this, twig_template_get_attributes($this, $context["cvCandidato"], "candidato", array()), "partido", array()) == "psuv-gpp"))) {
                                            // line 49
                                            echo "                      ";
                                            $context["votosPsuv"] = ((isset($context["votosPsuv"]) ? $context["votosPsuv"] : $this->getContext($context, "votosPsuv")) + twig_template_get_attributes($this, $context["cvCandidato"], "votos", array()));
                                            // line 50
                                            echo "                    ";
                                        }
                                        // line 51
                                        echo "                    ";
                                        if ((twig_template_get_attributes($this, twig_template_get_attributes($this, $context["cvCandidato"], "candidato", array()), "partido", array()) == "mud")) {
                                            // line 52
                                            echo "                      ";
                                            $context["votosMud"] = ((isset($context["votosMud"]) ? $context["votosMud"] : $this->getContext($context, "votosMud")) + twig_template_get_attributes($this, $context["cvCandidato"], "votos", array()));
                                            // line 53
                                            echo "                    ";
                                        }
                                        // line 54
                                        echo "                    ";
                                        if ((twig_template_get_attributes($this, twig_template_get_attributes($this, $context["cvCandidato"], "candidato", array()), "partido", array()) == "otros")) {
                                            // line 55
                                            echo "                      ";
                                            $context["votosOtros"] = ((isset($context["votosOtros"]) ? $context["votosOtros"] : $this->getContext($context, "votosOtros")) + twig_template_get_attributes($this, $context["cvCandidato"], "votos", array()));
                                            // line 56
                                            echo "                    ";
                                        }
                                        // line 57
                                        echo "                  ";
                                    }
                                    // line 58
                                    echo "                ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cvCandidato'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                echo " 
              <td>";
                                // line 59
                                echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["parroquia"], "nombreParroquia", array()), "html", null, true);
                                echo "</td><td>";
                                echo twig_escape_filter($this->env, (isset($context["votosPsuv"]) ? $context["votosPsuv"] : $this->getContext($context, "votosPsuv")), "html", null, true);
                                echo "</td><td>";
                                echo twig_escape_filter($this->env, (isset($context["votosMud"]) ? $context["votosMud"] : $this->getContext($context, "votosMud")), "html", null, true);
                                echo "</td><td>";
                                echo twig_escape_filter($this->env, (isset($context["votosOtros"]) ? $context["votosOtros"] : $this->getContext($context, "votosOtros")), "html", null, true);
                                echo "</td>
            </tr>
            ";
                                // line 61
                                $context["votosPsuvTotal"] = ((isset($context["votosPsuv"]) ? $context["votosPsuv"] : $this->getContext($context, "votosPsuv")) + (isset($context["votosPsuvTotal"]) ? $context["votosPsuvTotal"] : $this->getContext($context, "votosPsuvTotal")));
                                // line 62
                                echo "            ";
                                $context["votosMudTotal"] = ((isset($context["votosMud"]) ? $context["votosMud"] : $this->getContext($context, "votosMud")) + (isset($context["votosMudTotal"]) ? $context["votosMudTotal"] : $this->getContext($context, "votosMudTotal")));
                                // line 63
                                echo "            ";
                                $context["votosOtrosTotal"] = ((isset($context["votosOtros"]) ? $context["votosOtros"] : $this->getContext($context, "votosOtros")) + (isset($context["votosOtrosTotal"]) ? $context["votosOtrosTotal"] : $this->getContext($context, "votosOtrosTotal")));
                                // line 64
                                echo "            ";
                                $context["votosPsuvTotalCircuito"] = ((isset($context["votosPsuv"]) ? $context["votosPsuv"] : $this->getContext($context, "votosPsuv")) + (isset($context["votosPsuvTotalCircuito"]) ? $context["votosPsuvTotalCircuito"] : $this->getContext($context, "votosPsuvTotalCircuito")));
                                // line 65
                                echo "            ";
                                $context["votosMudTotalCircuito"] = ((isset($context["votosMud"]) ? $context["votosMud"] : $this->getContext($context, "votosMud")) + (isset($context["votosMudTotalCircuito"]) ? $context["votosMudTotalCircuito"] : $this->getContext($context, "votosMudTotalCircuito")));
                                // line 66
                                echo "            ";
                                $context["votosOtrosTotalCircuito"] = ((isset($context["votosOtros"]) ? $context["votosOtros"] : $this->getContext($context, "votosOtros")) + (isset($context["votosOtrosTotalCircuito"]) ? $context["votosOtrosTotalCircuito"] : $this->getContext($context, "votosOtrosTotalCircuito")));
                                // line 67
                                echo "            ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parroquia'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 68
                        echo "            <tr>
              <td><strong>TOTAL</strong></td><td><strong>";
                        // line 69
                        echo twig_escape_filter($this->env, (isset($context["votosPsuvTotal"]) ? $context["votosPsuvTotal"] : $this->getContext($context, "votosPsuvTotal")), "html", null, true);
                        echo "</strong></td><td><strong>";
                        echo twig_escape_filter($this->env, (isset($context["votosMudTotal"]) ? $context["votosMudTotal"] : $this->getContext($context, "votosMudTotal")), "html", null, true);
                        echo "</strong></td><td><strong>";
                        echo twig_escape_filter($this->env, (isset($context["votosOtrosTotal"]) ? $context["votosOtrosTotal"] : $this->getContext($context, "votosOtrosTotal")), "html", null, true);
                        echo "</strong></td>
            </tr>
            ";
                    }
                    // line 72
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['municipio'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "          <tr>
              <td><strong>TOTAL POR CIRCUITO</strong></td><td><strong>";
                // line 74
                echo twig_escape_filter($this->env, (isset($context["votosPsuvTotalCircuito"]) ? $context["votosPsuvTotalCircuito"] : $this->getContext($context, "votosPsuvTotalCircuito")), "html", null, true);
                echo "</strong></td><td><strong>";
                echo twig_escape_filter($this->env, (isset($context["votosMudTotalCircuito"]) ? $context["votosMudTotalCircuito"] : $this->getContext($context, "votosMudTotalCircuito")), "html", null, true);
                echo "</strong></td><td><strong>";
                echo twig_escape_filter($this->env, (isset($context["votosOtrosTotalCircuito"]) ? $context["votosOtrosTotalCircuito"] : $this->getContext($context, "votosOtrosTotalCircuito")), "html", null, true);
                echo "</strong></td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['circuito'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "    
      </table>
  ";
        }
        // line 79
        echo "</center>
<center><input type=\"button\" class=\"btn btn-default\" onclick=\"javascript:window.print();\" name=\"Imprimir\" value=\"Imprimir\"></center>
";
        // line 83
        echo "<script>
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
        return "EncuestasBundle:Encuestas:detalleVentanaFase3.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  290 => 83,  286 => 79,  281 => 76,  268 => 74,  265 => 73,  259 => 72,  249 => 69,  246 => 68,  239 => 67,  236 => 66,  233 => 65,  230 => 64,  227 => 63,  224 => 62,  222 => 61,  211 => 59,  203 => 58,  200 => 57,  197 => 56,  194 => 55,  191 => 54,  188 => 53,  185 => 52,  182 => 51,  179 => 50,  176 => 49,  173 => 48,  170 => 47,  165 => 46,  162 => 45,  159 => 44,  156 => 43,  153 => 42,  151 => 41,  148 => 40,  142 => 39,  139 => 38,  136 => 37,  134 => 36,  128 => 33,  124 => 31,  121 => 30,  117 => 29,  112 => 27,  109 => 26,  106 => 25,  103 => 24,  100 => 23,  96 => 22,  93 => 21,  90 => 20,  86 => 17,  83 => 16,  76 => 13,  72 => 12,  68 => 11,  63 => 10,  60 => 9,  55 => 8,  49 => 6,  47 => 5,  45 => 4,  38 => 3,  33 => 2,  29 => 16,  27 => 9,  25 => 3,  23 => 2,);
    }
}
