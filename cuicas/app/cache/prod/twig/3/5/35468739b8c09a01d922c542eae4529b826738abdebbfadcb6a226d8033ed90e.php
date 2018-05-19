<?php

/* EncuestasBundle:Encuestas:buscarNombreEncuestas.html.twig */
class __TwigTemplate_35468739b8c09a01d922c542eae4529b826738abdebbfadcb6a226d8033ed90e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "EncuestasBundle:Encuestas:buscarNombreEncuestas.html.twig", 1);
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
        echo "Buscar Encuestas por Nombre";
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        echo "Buscar Encuesta";
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "

<form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("encuestas_buscar_nombre");
        echo "\" method=\"post\" novalidate ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'enctype');
        echo " >
\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 9
            echo "\t\t<script language=Javascript>
\t\t\$(document).ready(function(){
\t\t\t\$(this).tab('show');
\t\t\tBootstrapDialog.show({
\t\t\t\ttitle: 'Mensaje',
\t\t\t\tmessage: ('";
            // line 14
            echo twig_escape_filter($this->env, $context["mensaje"], "html", null, true);
            echo "'),
\t\t\t\tbuttons: [{
\t\t\t\t\tid: 'btn-ok',   
\t\t\t\t\t//icon: 'glyphicon glyphicon-check',       
\t\t\t\t\tlabel: 'Aceptar',
\t\t\t\t\tcssClass: 'btn btn-default',
\t\t\t\t\tautospin: false,
\t\t\t\t\taction: function(dialogRef){    
\t\t\t\t\t\tdialogRef.close();
\t\t\t\t\t}
\t\t\t\t}]
\t\t\t})
\t\t});
\t\t</script>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'errors');
        echo "
\t<div class=\"col-xs-12 col-md-4 col-md-offset-5\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-md-7\">
\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'rest');
        echo "
\t</div>

\t<div class=\"col-xs-12 col-md-12\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <center><input class=\"boton_nombre_buscar fueraoverflow btn btn-default\" type=\"submit\" value=\"Buscar\" /></center>
            </div> 
        </div>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "EncuestasBundle:Encuestas:buscarNombreEncuestas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 37,  97 => 34,  90 => 30,  87 => 29,  66 => 14,  59 => 9,  55 => 8,  49 => 7,  45 => 5,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
