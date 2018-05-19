<?php

/* UsuarioBundle:Default:index.html.twig */
class __TwigTemplate_83b1c0fd326486b2e2d087ef6582bde3f78114cd2744e75a23f0c8a0fbec83b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "UsuarioBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Módulo de Usuario";
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 6
            echo "\t<p class=\"info\">";
            echo twig_escape_filter($this->env, $context["mensaje"], "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "Bienvenido";
        echo " <strong>";
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombres", array()), "html", null, true);
        echo "</strong>

<br /><br />
<a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("sistema_Encuesta_principal_homepage");
        echo "\"><h1>Página principal</h1></a>

";
        // line 13
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 14
            echo "\t";
            // line 15
            echo "\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("usuario_registro");
            echo "\"><h1>Registrar Usuario</h1></a>
\t<a href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("usuario_totales");
            echo "\"><h1>Usuarios totales</h1></a>
";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            // line 18
            echo "\t";
            // line 19
            echo "\t";
            // line 20
            echo "\t";
            // line 21
            echo "\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_ver", array("rol" => twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombres", array()))), "html", null, true);
            echo "\"><h1>Ver Usuario <strong>";
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombres", array()), "html", null, true);
            echo "</strong></h1></a>

";
        }
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 21,  82 => 20,  80 => 19,  78 => 18,  73 => 16,  68 => 15,  66 => 14,  64 => 13,  59 => 11,  51 => 8,  42 => 6,  38 => 5,  35 => 4,  29 => 2,  11 => 1,);
    }
}
