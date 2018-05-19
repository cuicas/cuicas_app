<?php

/* UsuarioBundle:Usuario:crearUsuario.html.twig */
class __TwigTemplate_f06fc6db6b7aa2c702390f18066eea01afbab2bb0148a68a65589fa16c1d8639 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "UsuarioBundle:Usuario:crearUsuario.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titulo' => array($this, 'block_titulo'),
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
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["titulo"]) ? $context["titulo"] : $this->getContext($context, "titulo")), "html", null, true);
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["titulo"]) ? $context["titulo"] : $this->getContext($context, "titulo")), "html", null, true);
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "\t<form action=\"";
        echo $this->env->getExtension('routing')->getPath((isset($context["accion"]) ? $context["accion"] : $this->getContext($context, "accion")));
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'enctype');
        echo " >\t
";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'errors');
        echo "
\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 8
            echo "\t\t<script language=Javascript>
\t\t\t\$(document).ready(function(){
\t\t\t\t\$(this).tab('show');
\t\t\t\tBootstrapDialog.show({
\t\t\t\t\ttitle: 'Mensaje',
\t\t\t\t\tmessage: ('";
            // line 13
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
        // line 28
        echo "\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'rest');
        echo "
\t";
        // line 29
        if (((isset($context["titulo"]) ? $context["titulo"] : $this->getContext($context, "titulo")) == "Modificar Perfil del Usuario")) {
            // line 30
            echo "  \t<input type=\"submit\" class=\"boton_guardar_ventanas btn btn-default\" value=\"Guardar\" />
  \t";
        }
        // line 32
        echo "  \t";
        if (((isset($context["titulo"]) ? $context["titulo"] : $this->getContext($context, "titulo")) == "Registrar Usuario")) {
            // line 33
            echo "  \t\t<input type=\"submit\" class=\"boton_guardar_ventanas btn btn-default\" value=\"Guardar\" />
  \t";
        }
        // line 35
        echo "\t\t<a href='";
        echo $this->env->getExtension('routing')->getPath("sistema_mapas_principal_homepage");
        echo "'><input class=\"boton_salir_ventanas btn btn-default\" type=\"button\" value=\"Salir\" /></a>
\t</form>
";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Usuario:crearUsuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 35,  104 => 33,  101 => 32,  97 => 30,  95 => 29,  90 => 28,  69 => 13,  62 => 8,  58 => 7,  54 => 6,  47 => 5,  44 => 4,  37 => 3,  30 => 2,  11 => 1,);
    }
}
