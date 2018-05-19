<?php

/* EncuestasBundle:Encuestas:adminCsv.html.twig */
class __TwigTemplate_8252bb67213baa91410f8aaca45f2e76c5ff2d0ea3f997d0b31bb5088d82c067 extends Twig_Template
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
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 3
            echo "circuito ";
            echo twig_template_get_attributes($this, $context["row"], "id_circuito", array());
            echo ",";
            echo twig_template_get_attributes($this, $context["row"], "nombre_municipio", array());
            echo ",";
            echo twig_template_get_attributes($this, $context["row"], "nombre_parroquia", array());
            echo ",";
            echo twig_template_get_attributes($this, $context["row"], "apellidos_nombres", array());
            echo ",";
            echo twig_template_get_attributes($this, $context["row"], "cedula", array());
            echo ",";
            echo twig_template_get_attributes($this, $context["row"], "telefono_1", array());
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "EncuestasBundle:Encuestas:adminCsv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 2,);
    }
}
