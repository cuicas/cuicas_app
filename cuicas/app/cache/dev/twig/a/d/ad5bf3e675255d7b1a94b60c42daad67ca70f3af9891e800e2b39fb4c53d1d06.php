<?php

/* PsPdfBundle:Example:index.html.twig */
class __TwigTemplate_ad5bf3e675255d7b1a94b60c42daad67ca70f3af9891e800e2b39fb4c53d1d06 extends Twig_Template
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
        echo "<h1>PdfBundle examples</h1>

<ul>
\t<li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("_pdf_examples");
        echo "\">Standard examples of PHPPdf library</a></li>
\t<li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("_pdf_using_facade_directly");
        echo "\">Manually created pdf</a></li>
\t<li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("_pdf_using_automatic_format_detection", array("name" => "Guest"));
        echo "\">Hello action in html format</a></li>
\t<li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_pdf_using_automatic_format_detection", array("name" => "Guest", "_format" => "pdf")), "html", null, true);
        echo "\">Hello action in pdf format</a></li>
\t<li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("_pdf_markdown");
        echo "\">Pdf from markdown document</a></li>
\t
</ul>";
    }

    public function getTemplateName()
    {
        return "PsPdfBundle:Example:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  36 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
