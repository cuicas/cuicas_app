<?php

/* EncuestasBundle:Encuestas:resumenEncuestas.html.twig */
class __TwigTemplate_5b827e4ce2084369b77938eb8b7775a741b22e474fb29efbcedf79465791a508 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "EncuestasBundle:Encuestas:resumenEncuestas.html.twig", 1);
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
        echo "Encuestas Totales";
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        echo "Encuestas";
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"col-xs-12 col-md-8 col-md-offset-2\">
\t<div class=\"row\">
\t\t<div class=\"col-xs-12\">
<table id=\"tabla2\" class=\"table stacktable\" border=\"0\">
\t\t";
        // line 9
        if ( !twig_test_empty((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 10
            echo "\t\t<thead>
\t\t\t<tr>
\t\t";
            // line 13
            echo "\t\t    <th>Nombre</th>
\t\t    <th width=\"120\">Tipo</th>
\t\t    <th>Total</th>
\t\t  \t<th width=\"50\">Contactados</th>
\t\t  \t<th colspan=\"4\">Detalles</th>
\t\t  \t</tr>
\t\t</thead>
\t
\t\t
\t\t";
            // line 23
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["encuestaP"]) {
                // line 24
                echo "\t\t\t<tr ";
                if ((twig_template_get_attributes($this, $context["loop"], "index", array()) % 2 == 1)) {
                    echo "class=\"color\"";
                }
                echo ">
\t\t\t    <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["encuestaP"], "nombreEncuesta", array()), "html", null, true);
                echo "</td>
\t\t\t    ";
                // line 26
                $context["tipo"] = twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array());
                // line 27
                echo "\t\t\t\t\t\t";
                if ((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "general")) {
                    // line 28
                    echo "\t\t\t\t\t\t\t";
                    $context["tipo"] = "Socio-Política";
                    // line 29
                    echo "\t\t\t\t\t\t";
                }
                // line 30
                echo "\t\t\t\t\t\t";
                if ((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "estatal")) {
                    // line 31
                    echo "\t\t\t\t\t\t\t";
                    $context["tipo"] = "Sufragio - Por Estado";
                    // line 32
                    echo "\t\t\t\t\t\t";
                }
                // line 33
                echo "\t\t\t\t\t\t";
                if ((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "alcalde")) {
                    // line 34
                    echo "\t\t\t\t\t\t\t";
                    $context["tipo"] = "Sufragio - Por Municipio";
                    // line 35
                    echo "\t\t\t\t\t\t";
                }
                // line 36
                echo "\t\t\t\t\t\t";
                if ((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "circuito")) {
                    // line 37
                    echo "\t\t\t\t\t\t\t";
                    $context["tipo"] = "Sufragio - Por Circuito";
                    // line 38
                    echo "\t\t\t\t\t\t";
                }
                // line 39
                echo "\t\t\t\t\t\t";
                if ((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "fase1")) {
                    // line 40
                    echo "\t\t\t\t\t\t\t";
                    $context["tipo"] = "Sufragio - 1era Fase";
                    // line 41
                    echo "\t\t\t\t\t\t";
                }
                // line 42
                echo "\t\t\t\t\t\t";
                if ((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "fase2")) {
                    // line 43
                    echo "\t\t\t\t\t\t\t";
                    $context["tipo"] = "Sufragio - 2da Fase";
                    // line 44
                    echo "\t\t\t\t\t\t";
                }
                // line 45
                echo "\t\t\t\t\t\t";
                if ((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "voto-lista")) {
                    // line 46
                    echo "\t\t\t\t\t\t\t";
                    $context["tipo"] = "Sufragio - Por Circuito - Voto Lista";
                    // line 47
                    echo "\t\t\t\t\t\t";
                }
                // line 48
                echo "\t\t\t\t\t\t";
                if ((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "comando")) {
                    // line 49
                    echo "\t\t\t\t\t\t\t";
                    $context["tipo"] = "Comando Campaña";
                    // line 50
                    echo "\t\t\t\t\t\t";
                }
                // line 51
                echo "\t\t\t\t\t<td>";
                echo twig_escape_filter($this->env, (isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")), "html", null, true);
                echo "</td>
\t\t\t    <td valign=\"middle\" align=\"center\">
\t\t\t    \t";
                // line 53
                if ((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "general")) {
                    echo " 
\t\t\t    \t\t";
                    // line 54
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_template_get_attributes($this, $context["encuestaP"], "contactados", array())), "html", null, true);
                    echo "
\t\t\t    \t";
                }
                // line 56
                echo "\t\t\t    \t";
                if ((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "comando")) {
                    echo " 
\t\t\t    \t\t";
                    // line 57
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_template_get_attributes($this, $context["encuestaP"], "contactadoComando", array())), "html", null, true);
                    echo "
\t\t\t    \t";
                }
                // line 59
                echo "\t\t\t    \t";
                if (((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "fase1") || (twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "fase2"))) {
                    // line 60
                    echo "\t\t\t    \t\t";
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["encuestaP"], "totalContactadosSufragio", array()), "html", null, true);
                    echo "
\t\t\t    \t";
                }
                // line 62
                echo "\t\t\t    \t";
                if (((((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "circuito") || (twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "alcalde")) || (twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "estatal")) || (twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "voto-lista"))) {
                    // line 63
                    echo "\t\t\t    \t\t \t";
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["encuestaP"], "totalContactadosSufragio", array()), "html", null, true);
                    echo "
\t\t\t    \t";
                }
                // line 65
                echo "\t\t\t    </td>
\t\t\t    <td valign=\"middle\" align=\"center\">
\t\t\t    \t";
                // line 67
                if ((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "general")) {
                    echo " 
\t\t\t    \t\t";
                    // line 68
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["encuestaP"], "totalContactadosSi", array(0 => "si"), "method"), "html", null, true);
                    echo "
\t\t\t    \t";
                }
                // line 70
                echo "\t\t\t    \t";
                if (((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "fase1") || (twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "fase2"))) {
                    // line 71
                    echo "\t\t\t    \t\t";
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["encuestaP"], "totalContactadosSufragio", array()), "html", null, true);
                    echo "
\t\t\t    \t";
                }
                // line 72
                echo " 
\t\t\t    \t";
                // line 73
                if (((((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "circuito") || (twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "alcalde")) || (twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "estatal")) || (twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "voto-lista"))) {
                    // line 74
                    echo "\t\t\t   \t\t\t";
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["encuestaP"], "totalContactadosSufragio", array()), "html", null, true);
                    echo "   \t\t
\t\t\t    \t";
                }
                // line 76
                echo "\t\t\t    \t";
                if ((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "comando")) {
                    echo " 
\t\t\t    \t\t";
                    // line 77
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["encuestaP"], "totalContactadoComandoSi", array(0 => "si"), "method"), "html", null, true);
                    echo "
\t\t\t    \t";
                }
                // line 79
                echo "\t\t\t    </td>
\t\t\t    ";
                // line 80
                if ((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "fase1")) {
                    // line 81
                    echo "\t\t\t\t\t\t";
                    // line 87
                    echo "\t\t\t\t\t\t<td align=\"center\" colspan=\"2\">
\t\t\t\t\t\t\t<center><a href=\"";
                    // line 88
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_ver_detalles", array("id_encuesta" => twig_template_get_attributes($this, $context["encuestaP"], "id", array()), "tipo" => "uno")), "html", null, true);
                    echo "?instalacion=instalacion\" class=\"clsVentanaIFrame clsBoton1\" rel=\"SESPI - PDVSA INDUSTRIAL INDUSTRIL\"  class=\"clsBoton\">Inst.</a></center>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td colspan=\"2\" valign=\"middle\" align=\"center\">
\t\t\t\t\t\t\t<a href= \"";
                    // line 91
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_ver_detalles", array("id_encuesta" => twig_template_get_attributes($this, $context["encuestaP"], "id", array()), "tipo" => "uno")), "html", null, true);
                    echo "?totalGlobal=totalGlobal\" class=\"clsVentanaIFrame clsBoton1\" rel=\"SESPI - PDVSA INDUSTRIAL\"  class=\"clsBoton\" >Total</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
                }
                // line 94
                echo "\t\t\t    ";
                if ((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "fase2")) {
                    // line 95
                    echo "\t\t\t\t\t  <td valign=\"middle\" align=\"center\">
\t\t\t\t\t\t\t<a href= \"";
                    // line 96
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_ver_detalles", array("id_encuesta" => twig_template_get_attributes($this, $context["encuestaP"], "id", array()), "tipo" => "uno")), "html", null, true);
                    echo "?asistencia=asistencia\" class=\"clsVentanaIFrame clsBoton1\" rel=\"SESPI - PDVSA INDUSTRIAL\"  class=\"clsBoton\" >Asist.</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td valign=\"middle\" align=\"center\">
\t\t\t\t\t\t\t<a href= \"";
                    // line 99
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_ver_detalles", array("id_encuesta" => twig_template_get_attributes($this, $context["encuestaP"], "id", array()), "tipo" => "uno")), "html", null, true);
                    echo "?=movilizacion\" class=\"clsVentanaIFrame clsBoton1\" rel=\"SESPI - PDVSA INDUSTRIAL\"  class=\"clsBoton\" >Movil.</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td valign=\"middle\" align=\"center\">
\t\t\t\t\t\t\t<a href= \"";
                    // line 102
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_ver_detalles", array("id_encuesta" => twig_template_get_attributes($this, $context["encuestaP"], "id", array()), "tipo" => "uno")), "html", null, true);
                    echo "?totalGlobal=totalGlobal\" class=\"clsVentanaIFrame clsBoton1\" rel=\"SESPI - PDVSA INDUSTRIAL\"  class=\"clsBoton\" >Total</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td valign=\"middle\" align=\"center\">
\t\t\t\t\t\t\t<a href= \"";
                    // line 105
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_ver_detalles", array("id_encuesta" => twig_template_get_attributes($this, $context["encuestaP"], "id", array()), "tipo" => "uno")), "html", null, true);
                    echo "?totalizacion=totalizacion\" class=\"clsVentanaIFrame clsBoton1\" rel=\"SESPI - PDVSA INDUSTRIAL\"  class=\"clsBoton\" >Totalización</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
                }
                // line 108
                echo "
\t\t\t\t\t";
                // line 109
                if ((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "general")) {
                    // line 110
                    echo "\t\t\t\t\t<td align=\"center\" colspan=\"2\">
\t\t\t\t\t\t\t<center><a href=\"";
                    // line 111
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_ver_detalles", array("id_encuesta" => twig_template_get_attributes($this, $context["encuestaP"], "id", array()), "tipo" => "dos")), "html", null, true);
                    echo "\" class=\"clsVentanaIFrame clsBoton1\" rel=\"SESPI - PDVSA INDUSTRIAL\"  class=\"clsBoton\">Ver</a></center>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<center><a href=\"";
                    // line 114
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_ver_detalles", array("id_encuesta" => twig_template_get_attributes($this, $context["encuestaP"], "id", array()), "tipo" => "uno")), "html", null, true);
                    echo "\" class=\"clsVentanaIFrame clsBoton1\" rel=\"SESPI - PDVSA INDUSTRIAL\"  class=\"clsBoton\">Otros</a></center>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td valign=\"middle\" align=\"center\">
\t\t\t\t\t\t\t<a href= \"";
                    // line 117
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_ver_detalles", array("id_encuesta" => twig_template_get_attributes($this, $context["encuestaP"], "id", array()), "tipo" => "uno")), "html", null, true);
                    echo "?totalGlobal=totalGlobal\" class=\"clsVentanaIFrame clsBoton1\" rel=\"SESPI - PDVSA INDUSTRIAL\"  class=\"clsBoton\" >Total</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
                }
                // line 120
                echo "
\t\t\t\t\t";
                // line 121
                if ((((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) != "fase1") && (twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) != "fase2")) && (twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) != "general"))) {
                    // line 122
                    echo "\t\t\t\t\t\t<td align=\"center\" colspan=\"4\">
\t\t\t\t\t\t\t<center><a href=\"";
                    // line 123
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_ver_detalles", array("id_encuesta" => twig_template_get_attributes($this, $context["encuestaP"], "id", array()), "tipo" => "uno")), "html", null, true);
                    echo "\" class=\"clsVentanaIFrame clsBoton1\" rel=\"SESPI - PDVSA INDUSTRIAL\"  class=\"clsBoton\">Ver</a></center>
\t\t\t\t\t\t</td>
\t\t\t    ";
                }
                // line 126
                echo "\t\t    
\t\t  \t</tr>
\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['encuestaP'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "\t\t";
        }
        // line 130
        echo "\t\t";
        if (twig_test_empty((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 131
            echo "\t\t\t<tr>
\t\t\t    <td><center>No existe una encuesta con estos Datos</center></td> 
\t\t  \t</tr>
\t\t";
        }
        // line 135
        echo "\t</table>
\t</div>
\t</div>
\t</div>
";
        // line 140
        echo "
<div class=\"col-xs-12 col-md-5 col-md-offset-5 text-right\">
\t<div class=\"row\">
\t\t<div class=\"col-xs-12\">
\t\t\t
\t";
        // line 145
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
</div>
</div>
</div>
<div class=\"col-xs-12 col-md-12\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<center>";
        // line 152
        if (((isset($context["buscar"]) ? $context["buscar"] : $this->getContext($context, "buscar")) == "nombre")) {
            // line 153
            echo "\t\t\t\t<a class=\"btn btn-default\" href=\"";
            echo $this->env->getExtension('routing')->getPath("encuestas_buscar_nombre");
            echo "\" >Buscar Otro</a>
\t\t\t";
        }
        // line 155
        echo "\t\t\t";
        if (((isset($context["buscar"]) ? $context["buscar"] : $this->getContext($context, "buscar")) == "fecha")) {
            // line 156
            echo "\t\t\t\t<a class=\"btn btn-default\" href=\"";
            echo $this->env->getExtension('routing')->getPath("encuestas_buscar_fecha");
            echo "\" >Buscar Otro</a>
\t\t\t";
        }
        // line 158
        echo "\t\t\t";
        if (twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 159
            echo "\t\t\t\t<a class=\"btn btn-default\" href=\"";
            echo $this->env->getExtension('routing')->getPath("pdf_resumen_encuestas");
            echo "\" target=\"blank\" >Imprimir</a>
\t\t\t";
        }
        // line 160
        echo "</center>
\t\t\t</div>
\t\t</div>
\t</div>
<script>
\$(document).ready(function() {
\t\$('#tabla2').stacktable();
});
</script>
\t
";
    }

    public function getTemplateName()
    {
        return "EncuestasBundle:Encuestas:resumenEncuestas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  426 => 160,  420 => 159,  417 => 158,  411 => 156,  408 => 155,  402 => 153,  400 => 152,  390 => 145,  383 => 140,  377 => 135,  371 => 131,  368 => 130,  365 => 129,  349 => 126,  343 => 123,  340 => 122,  338 => 121,  335 => 120,  329 => 117,  323 => 114,  317 => 111,  314 => 110,  312 => 109,  309 => 108,  303 => 105,  297 => 102,  291 => 99,  285 => 96,  282 => 95,  279 => 94,  273 => 91,  267 => 88,  264 => 87,  262 => 81,  260 => 80,  257 => 79,  252 => 77,  247 => 76,  241 => 74,  239 => 73,  236 => 72,  230 => 71,  227 => 70,  222 => 68,  218 => 67,  214 => 65,  208 => 63,  205 => 62,  199 => 60,  196 => 59,  191 => 57,  186 => 56,  181 => 54,  177 => 53,  171 => 51,  168 => 50,  165 => 49,  162 => 48,  159 => 47,  156 => 46,  153 => 45,  150 => 44,  147 => 43,  144 => 42,  141 => 41,  138 => 40,  135 => 39,  132 => 38,  129 => 37,  126 => 36,  123 => 35,  120 => 34,  117 => 33,  114 => 32,  111 => 31,  108 => 30,  105 => 29,  102 => 28,  99 => 27,  97 => 26,  93 => 25,  86 => 24,  68 => 23,  57 => 13,  53 => 10,  51 => 9,  45 => 5,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
