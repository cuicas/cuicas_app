<?php

/* PsPdfBundle:Example:usingAutomaticFormatGuessing.pdf.twig */
class __TwigTemplate_8e4696b4629f7e1d345d57c114ce84e7c937bfb7962e01f0cfb65817eac08abc extends Twig_Template
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
    <dynamic-page>
\t\tHello <b>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</b>!
    </dynamic-page>
</pdf>";
    }

    public function getTemplateName()
    {
        return "PsPdfBundle:Example:usingAutomaticFormatGuessing.pdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }
}
