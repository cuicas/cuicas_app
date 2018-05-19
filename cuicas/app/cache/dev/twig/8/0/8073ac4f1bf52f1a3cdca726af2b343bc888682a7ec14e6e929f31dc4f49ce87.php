<?php

/* SistemaEncuestaPrincipalBundle:Default:Principal.html.twig */
class __TwigTemplate_8073ac4f1bf52f1a3cdca726af2b343bc888682a7ec14e6e929f31dc4f49ce87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "SistemaEncuestaPrincipalBundle:Default:Principal.html.twig", 1);
        $this->blocks = array(
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
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"menu\">
\t\t<h1>Pagina Principal </h1>
\t\t<h1>Encuesta</h1>
\t\t";
        // line 7
        echo "\t\t<a href=\"";
        echo $this->env->getExtension('routing')->getPath("usuario_principal");
        echo "\"><h1>Usuarios</h1></a>
\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "SistemaEncuestaPrincipalBundle:Default:Principal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  31 => 3,  28 => 2,  11 => 1,);
    }
}
