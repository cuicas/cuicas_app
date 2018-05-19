<?php

/* UsuarioBundle:Default:rol.html.twig */
class __TwigTemplate_25a7515e061352d3e7cc7cc84f0c3443223f2e6a447b377ed057b846d0d7850c extends Twig_Template
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
        echo "<br />BIENVENIDO<br />
este es ROL ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")), "html", null, true);
        echo "!<br />

ROLDEL USUARIO: ";
        // line 4
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array"), "html", null, true);
        echo "


<br />
<a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("usuario_logout");
        echo "\">Cerrar sesión</a>";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:rol.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  27 => 4,  22 => 2,  19 => 1,);
    }
}
