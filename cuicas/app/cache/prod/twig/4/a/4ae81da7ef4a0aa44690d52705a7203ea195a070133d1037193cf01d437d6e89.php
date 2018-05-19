<?php

/* EncuestasBundle:Encuestas:csv.html.twig */
class __TwigTemplate_4ae81da7ef4a0aa44690d52705a7203ea195a070133d1037193cf01d437d6e89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "EncuestasBundle:Encuestas:csv.html.twig", 1);
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
        echo "CSV";
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        echo "CSV";
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "
\t<div class=\"col-xs-12 col-md-8 col-md-offset-2\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<table id=\"tabla1\" class=\"table stacktable table-hover\" border=\"0\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<th>Encuestas</th>
\t\t\t\t\t\t<th colspan=\"2\"><center>Exportar a un archivo CSV</center></th>
\t\t\t\t\t</thead>                 
\t    \t\t\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["encuesta"]) {
            // line 15
            echo "\t\t  \t\t\t\t<tr>\t
\t\t\t\t\t\t\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["encuesta"], "nombreEncuesta", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t";
            // line 17
            if (($this->getAttribute($context["encuesta"], "tipoEncuesta", array()) == "general")) {
                // line 18
                echo "\t\t\t\t\t\t\t\t\t<td align=\"center\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_csv", array("id_encuesta" => $this->getAttribute($context["encuesta"], "id", array()), "repuesta" => "no_asignado")), "html", null, true);
                echo "\" class=\"clsBoton\">Tel&eacute;fonos no asginados</a></td>
\t\t\t\t\t\t\t\t\t<td align=\"center\"> 
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_csv", array("id_encuesta" => $this->getAttribute($context["encuesta"], "id", array()), "repuesta" => "errado")), "html", null, true);
                echo "\" class=\"clsBoton\">Tel&eacute;fonos errados</a>
\t\t\t    \t\t\t\t</td>
\t\t    \t\t\t\t";
            }
            // line 23
            echo "\t\t    \t\t\t\t";
            if (($this->getAttribute($context["encuesta"], "tipoEncuesta", array()) != "general")) {
                // line 24
                echo "\t\t    \t\t\t\t\t<td align=\"center\" colspan=\"2\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_ver_detalles_reporte", array("id_encuesta" => $this->getAttribute($context["encuesta"], "id", array()))), "html", null, true);
                echo "\" class=\"clsBoton\">Reporte de ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["encuesta"], "tipoEncuesta", array()), "html", null, true);
                echo "</a></td>
\t\t    \t\t\t\t";
            }
            // line 25
            echo "\t\t    \t\t\t\t
\t\t    \t\t\t</tr>
\t    \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['encuesta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"col-xs-12 col-md-5 col-md-offset-5 text-right\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t";
        // line 36
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
\t\t\t</div>
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "EncuestasBundle:Encuestas:csv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 36,  100 => 28,  92 => 25,  84 => 24,  81 => 23,  75 => 20,  69 => 18,  67 => 17,  63 => 16,  60 => 15,  56 => 14,  45 => 5,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
