<?php

/* PsPdfBundle:Example:usingAutomaticFormatGuessing.html.twig */
class __TwigTemplate_bab49f0bd155757a7f8e3cd3837ea7e40eaa45e61657fee1aa4328ac345a43b6 extends Twig_Template
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
        echo "Hello <b>";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</b>!";
    }

    public function getTemplateName()
    {
        return "PsPdfBundle:Example:usingAutomaticFormatGuessing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
