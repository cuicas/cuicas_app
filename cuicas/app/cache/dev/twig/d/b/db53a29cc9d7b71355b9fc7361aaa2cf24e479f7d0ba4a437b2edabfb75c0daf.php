<?php

/* SistemaEncuestaPrincipalBundle:Default:resumenEncuestas.pdf.twig */
class __TwigTemplate_db53a29cc9d7b71355b9fc7361aaa2cf24e479f7d0ba4a437b2edabfb75c0daf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<!DOCTYPE pdf SYSTEM \"%resources%/dtd/doctype.dtd\">
<pdf>
<dynamic-page>\t
<placeholders>
    <footer>
    ";
        // line 7
        $context["margen"] = ('' === $tmp = "<page-number/>") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "        <div height=\"20px\" text-align= \"right\">
            Página <page-number/>
        </div>
    </footer>
</placeholders>
<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('ps_pdf')->getImagePath("banner_sesm.jpeg"), "html", null, true);
        echo "\" width=\"700px\" height=\"50px\" />
<div text-align= \"right\"> Usuario: ";
        // line 14
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombres", array()), "html", null, true);
        echo "</div>
<br/>
<div text-align= \"right\"> Fecha: ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</div>
<br/>
<div text-align= \"right\"> Hora: ";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "H:i", "America/Caracas"), "html", null, true);
        echo "</div>
<br/><br/>
\t\t<stylesheet>            
            <complex-attribute name=\"border\" color=\"white\" size=\"3px\" />
        </stylesheet>
\t\t<table>
        <stylesheet>            
            <complex-attribute name=\"border\" color=\"white\" size=\"3px\" />
        </stylesheet>
\t\t\t<tr padding=\"3px 10px\" background.color=\"#f34235\" font-size=\"13px\" text-align=\"center\" >
\t\t\t\t<td padding=\"3px 0px 8px 0px\">Nombre</td>
\t\t\t\t<td padding=\"3px 0px 8px 0px\">Descripción</td>
\t\t\t\t<td padding=\"3px 0px 8px 0px\">Tipo de Encuesta</td>
\t\t\t\t<td padding=\"3px 0px 8px 0px\">Total</td>
\t\t\t\t<td padding=\"3px 0px 8px 0px\">Contactados</td>
\t\t\t\t
\t\t\t</tr>
\t\t\t";
        // line 38
        echo "\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")));
        foreach ($context['_seq'] as $context["_key"] => $context["encuestaP"]) {
            // line 39
            echo "\t\t\t\t<tr>\t
\t\t\t\t\t<td border.color=\"#f34235\" background.color=\"#e6e7e8\" padding=\"3px 0px 8px 2px\">";
            // line 40
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["encuestaP"], "nombreEncuesta", array()), "html", null, true);
            echo "</td>\t\t\t\t
\t\t\t\t\t<td border.color=\"#f34235\" background.color=\"#e6e7e8\" padding=\"3px 0px 8px 2px\">";
            // line 41
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["encuestaP"], "descripcion", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t";
            // line 42
            $context["tipo"] = twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array());
            // line 43
            echo "\t\t\t\t\t";
            if ((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "general")) {
                // line 44
                echo "\t\t\t\t\t\t";
                $context["tipo"] = "Socio-Política";
                // line 45
                echo "\t\t\t\t\t";
            }
            // line 46
            echo "\t\t\t\t\t";
            if ((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "estatal")) {
                // line 47
                echo "\t\t\t\t\t\t";
                $context["tipo"] = "Sufragio - Por Estado";
                // line 48
                echo "\t\t\t\t\t";
            }
            // line 49
            echo "\t\t\t\t\t";
            if ((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "alcalde")) {
                // line 50
                echo "\t\t\t\t\t\t";
                $context["tipo"] = "Sufragio - Por Municipio";
                // line 51
                echo "\t\t\t\t\t";
            }
            // line 52
            echo "\t\t\t\t\t";
            if ((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "circuito")) {
                // line 53
                echo "\t\t\t\t\t\t";
                $context["tipo"] = "Sufragio - Por Circuito";
                // line 54
                echo "\t\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t\t";
            if ((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "fase1")) {
                // line 56
                echo "\t\t\t\t\t\t";
                $context["tipo"] = "Sufragio - 1era Fase";
                // line 57
                echo "\t\t\t\t\t";
            }
            // line 58
            echo "\t\t\t\t\t";
            if ((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "fase2")) {
                // line 59
                echo "\t\t\t\t\t\t";
                $context["tipo"] = "Sufragio - 2da Fase";
                // line 60
                echo "\t\t\t\t\t";
            }
            // line 61
            echo "\t\t\t\t\t";
            if ((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "comando")) {
                // line 62
                echo "\t\t\t\t\t\t";
                $context["tipo"] = "Comando Campaña";
                // line 63
                echo "\t\t\t\t\t";
            }
            // line 64
            echo "\t\t\t\t\t";
            if ((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "voto-lista")) {
                // line 65
                echo "\t\t\t\t\t\t";
                $context["tipo"] = "Sufragio - Por Circuito - Voto Lista";
                // line 66
                echo "\t\t\t\t\t";
            }
            // line 67
            echo "\t\t\t\t\t
\t\t\t\t\t<td border.color=\"#f34235\" background.color=\"#e6e7e8\" padding=\"3px 0px 8px 2px\">";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")), "html", null, true);
            echo "</td>
\t\t\t\t\t<td border.color=\"#f34235\" background.color=\"#e6e7e8\" padding=\"3px 0px 8px 2px\">";
            // line 69
            if ((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "general")) {
                echo " 
\t\t\t    \t\t";
                // line 70
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_template_get_attributes($this, $context["encuestaP"], "contactados", array())), "html", null, true);
                echo "
\t\t\t    \t";
            }
            // line 72
            echo "\t\t\t    \t";
            if ((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "comando")) {
                echo " 
\t\t\t    \t\t";
                // line 73
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_template_get_attributes($this, $context["encuestaP"], "contactadoComando", array())), "html", null, true);
                echo "
\t\t\t    \t";
            }
            // line 75
            echo "\t\t\t    \t";
            if (((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "fase1") || (twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "fase2"))) {
                // line 76
                echo "\t\t\t    \t\t";
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["encuestaP"], "totalContactadosSufragio", array()), "html", null, true);
                echo "
\t\t\t    \t";
            }
            // line 78
            echo "\t\t\t    \t";
            if ((((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "circuito") || (twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "alcalde")) || (twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "estatal"))) {
                // line 79
                echo "\t\t\t    \t\t \t";
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["encuestaP"], "totalContactadosSufragio", array()), "html", null, true);
                echo "
\t\t\t    \t";
            }
            // line 81
            echo "\t\t\t    </td>
\t\t\t    <td border.color=\"#f34235\" background.color=\"#e6e7e8\" padding=\"3px 0px 8px 2px\">
\t\t\t    \t";
            // line 83
            if ((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "general")) {
                echo " 
\t\t\t    \t\t";
                // line 84
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["encuestaP"], "totalContactadosSi", array(0 => "si"), "method"), "html", null, true);
                echo "
\t\t\t    \t";
            }
            // line 86
            echo "\t\t\t    \t";
            if (((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "fase1") || (twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "fase2"))) {
                // line 87
                echo "\t\t\t    \t\t";
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["encuestaP"], "totalContactadosSufragio", array()), "html", null, true);
                echo "
\t\t\t    \t";
            }
            // line 88
            echo " 
\t\t\t    \t";
            // line 89
            if ((((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "circuito") || (twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "alcalde")) || (twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "estatal"))) {
                // line 90
                echo "\t\t\t   \t\t\t";
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["encuestaP"], "totalContactadosSufragio", array()), "html", null, true);
                echo "   \t\t
\t\t\t    \t";
            }
            // line 92
            echo "\t\t\t    \t";
            if ((twig_template_get_attributes($this, $context["encuestaP"], "tipoEncuesta", array()) == "comando")) {
                echo " 
\t\t\t    \t\t";
                // line 93
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["encuestaP"], "totalContactadoComandoSi", array(0 => "si"), "method"), "html", null, true);
                echo "
\t\t\t    \t";
            }
            // line 95
            echo "\t\t\t    </td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['encuestaP'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "\t\t</table> 
</dynamic-page>
</pdf>";
    }

    public function getTemplateName()
    {
        return "SistemaEncuestaPrincipalBundle:Default:resumenEncuestas.pdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 99,  247 => 95,  242 => 93,  237 => 92,  231 => 90,  229 => 89,  226 => 88,  220 => 87,  217 => 86,  212 => 84,  208 => 83,  204 => 81,  198 => 79,  195 => 78,  189 => 76,  186 => 75,  181 => 73,  176 => 72,  171 => 70,  167 => 69,  163 => 68,  160 => 67,  157 => 66,  154 => 65,  151 => 64,  148 => 63,  145 => 62,  142 => 61,  139 => 60,  136 => 59,  133 => 58,  130 => 57,  127 => 56,  124 => 55,  121 => 54,  118 => 53,  115 => 52,  112 => 51,  109 => 50,  106 => 49,  103 => 48,  100 => 47,  97 => 46,  94 => 45,  91 => 44,  88 => 43,  86 => 42,  82 => 41,  78 => 40,  75 => 39,  70 => 38,  50 => 18,  45 => 16,  40 => 14,  36 => 13,  29 => 8,  27 => 7,  19 => 1,);
    }
}
