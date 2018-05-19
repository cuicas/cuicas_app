<?php

/* PsPdfBundle:Example:usingFacadeDirectly.pdf.twig */
class __TwigTemplate_bcad10db16265f03af82d9c1ee2d1045ff6ea3aa252f10c7141876441f86e298 extends Twig_Template
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
\t\tHello!
    </dynamic-page>
</pdf>";
    }

    public function getTemplateName()
    {
        return "PsPdfBundle:Example:usingFacadeDirectly.pdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
