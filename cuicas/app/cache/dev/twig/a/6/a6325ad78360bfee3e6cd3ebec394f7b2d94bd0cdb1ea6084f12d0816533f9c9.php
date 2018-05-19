<?php

/* UsuarioBundle:Default:ver.html.twig */
class __TwigTemplate_a6325ad78360bfee3e6cd3ebec394f7b2d94bd0cdb1ea6084f12d0816533f9c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "UsuarioBundle:Default:ver.html.twig", 1);
        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
            'title' => array($this, 'block_title'),
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

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "este es  ";
        echo twig_escape_filter($this->env, (isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")), "html", null, true);
        echo "!
<br />
<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("usuario_logout");
        echo "\">Cerrar sesión</a>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Formulario de acceso";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:ver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  38 => 7,  32 => 5,  29 => 4,  11 => 1,);
    }
}
