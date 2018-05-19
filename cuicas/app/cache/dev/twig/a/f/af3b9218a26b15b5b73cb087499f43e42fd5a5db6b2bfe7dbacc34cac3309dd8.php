<?php

/* PsPdfBundle:Example:pdfStylesheet.xml.twig */
class __TwigTemplate_af3b9218a26b15b5b73cb087499f43e42fd5a5db6b2bfe7dbacc34cac3309dd8 extends Twig_Template
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
<stylesheet>
\t<any>
\t\t<attribute name=\"color\" value=\"blue\" />
\t</any>
</stylesheet>";
    }

    public function getTemplateName()
    {
        return "PsPdfBundle:Example:pdfStylesheet.xml.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
