<?php

/* UsuarioBundle:Usuario:verPerfil.html.twig */
class __TwigTemplate_678c8ef8caddd8c559cf07a0233ec88fcd1d25220f69ee35dfc0418d9089d9f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "UsuarioBundle:Usuario:verPerfil.html.twig", 1);
        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
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

    // line 2
    public function block_titulo($context, array $blocks = array())
    {
        echo "Perfil de Usuario";
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "

";
        // line 8
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("usuario_verperfil");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'enctype');
        echo ">
\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'errors');
        echo "
\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 11
            echo "\t\t<script language=Javascript>
\t\t\t\$(document).ready(function(){
\t\t\t\t\$(this).tab('show');
\t\t\t\tBootstrapDialog.show({
\t\t\t\t\ttitle: 'Mensaje',
\t\t\t\t\tmessage: ('";
            // line 16
            echo twig_escape_filter($this->env, $context["mensaje"], "html", null, true);
            echo "'),
\t\t\t\t\tbuttons: [{
\t\t\t\t\t\tid: 'btn-ok',   
\t\t\t\t\t\t//icon: 'glyphicon glyphicon-check',       
\t\t\t\t\t\tlabel: 'Aceptar',
\t\t\t\t\t\tcssClass: 'btn btn-default',
\t\t\t\t\t\tautospin: false,
\t\t\t\t\t\taction: function(dialogRef){    
\t\t\t\t\t\t\tdialogRef.close();
\t\t\t\t\t\t}
\t\t\t\t\t}]
\t\t\t\t})
\t\t\t});
\t\t</script>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t<div class=\"col-xs-12 col-md-4 col-md-offset-2\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<strong>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nombres", array()), 'label');
        echo "</strong>
\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nombres", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<strong>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "apellidos", array()), 'label');
        echo "</strong>
\t\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "apellidos", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<strong>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "cedula", array()), 'label');
        echo "</strong>
\t\t\t\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "cedula", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<strong>";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "email", array()), 'label');
        echo "</strong>
\t\t\t\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "email", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<label>Rol</label>
\t\t\t
\t\t\t";
        // line 60
        $context["rol"] = twig_template_get_attributes($this, (isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "getRol", array());
        // line 61
        echo "\t\t\t";
        if ((twig_template_get_attributes($this, (isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "getRol", array()) == "ROLE_ADMIN")) {
            // line 62
            echo "\t\t\t\t";
            $context["rol"] = "Administrador";
            // line 63
            echo "\t\t\t";
        }
        // line 64
        echo "\t\t\t";
        if ((twig_template_get_attributes($this, (isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "getRol", array()) == "ROLE_USUARIO")) {
            // line 65
            echo "\t\t\t\t";
            $context["rol"] = "Usuario";
            // line 66
            echo "\t\t\t";
        }
        // line 67
        echo "\t\t\t";
        if ((twig_template_get_attributes($this, (isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "getRol", array()) == "ROLE_SUPERVISOR")) {
            // line 68
            echo "\t\t\t\t";
            $context["rol"] = "Supervisor";
            // line 69
            echo "\t\t\t";
        }
        // line 70
        echo "\t\t
\t\t\t";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "_token", array()), 'widget');
        echo "

\t<div class=\"col-xs-12 col-md-12\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<center><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("usuario_perfil");
        echo "\" > <input class=\"fueraoverflow btn btn-default\" type=\"button\" value=\"Editar\" /></a>
        <a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("sistema_Encuesta_principal_homepage");
        echo "\" > <input class=\"fueraoverflow btn btn-default\" type=\"button\" value=\"Salir\" /></a></center>
\t\t\t</div>
\t\t</div>
\t</div>

</form>
";
    }

    // line 94
    public function block_title($context, array $blocks = array())
    {
        echo "Módulo de Usuario";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Usuario:verPerfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 94,  193 => 82,  189 => 81,  181 => 76,  173 => 71,  170 => 70,  167 => 69,  164 => 68,  161 => 67,  158 => 66,  155 => 65,  152 => 64,  149 => 63,  146 => 62,  143 => 61,  141 => 60,  131 => 53,  127 => 52,  119 => 47,  115 => 46,  107 => 41,  103 => 40,  95 => 35,  91 => 34,  86 => 31,  65 => 16,  58 => 11,  54 => 10,  50 => 9,  43 => 8,  39 => 5,  36 => 4,  30 => 2,  11 => 1,);
    }
}
