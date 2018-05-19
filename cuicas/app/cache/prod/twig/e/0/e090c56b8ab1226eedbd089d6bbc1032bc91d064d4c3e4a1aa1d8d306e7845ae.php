<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e090c56b8ab1226eedbd089d6bbc1032bc91d064d4c3e4a1aa1d8d306e7845ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontend.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "frontend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_titulo($context, array $blocks = array())
    {
        // line 5
        echo "    Acceso Denegado ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
    }

    // line 8
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 9
        echo "    <br /><br /><br /><br /><br />
    ";
        // line 10
        if (((isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")) == 500)) {
            // line 11
            echo "    <center>ERROR!!<br /> No tienes autorización para acceder a esta página</center>
    ";
        }
        // line 13
        echo "    
    ";
        // line 14
        if (((isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")) == 403)) {
            // line 15
            echo "    <center>ERROR!!<br /> No tienes autorización para acceder a esta página</center>
    ";
        }
        // line 17
        echo "    
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  54 => 15,  52 => 14,  49 => 13,  45 => 11,  43 => 10,  40 => 9,  37 => 8,  32 => 5,  29 => 4,  11 => 1,);
    }
}
