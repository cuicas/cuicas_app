<?php

/* UsuarioBundle:Login:login.html.twig */
class __TwigTemplate_f609338844a94c731948ddade696e4fab6a538a2af6a58e31f87972078800818 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "UsuarioBundle:Login:login.html.twig", 1);
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
        echo "Ingreso  de Usuario";
    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("usuario_login_check");
        echo "\" method=\"post\"  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'enctype');
        echo ">\t
\t";
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
        echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-md-4 col-md-offset-6\">
\t\t\t\t<div class=\"col-xs-1 hidden-xs hidden-sm hidden-md\" style=\"margin-top:15px;\">
\t\t\t\t\t<div class=\"glyphicon glyphicon-user\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-11\">
\t\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "_username", array()), 'widget', array("attr" => array("placeholder" => "Correo electrónico")));
        echo "
\t\t\t\t\t\t\t\t";
        // line 36
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-1 hidden-xs hidden-sm hidden-md\" style=\"margin-top:15px;\">
\t\t\t\t\t<div class=\"glyphicon glyphicon-lock\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-11\">
\t\t\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "_password", array()), 'widget', array("attr" => array("placeholder" => "Contraseña")));
        echo "
\t\t\t\t\t\t\t\t";
        // line 43
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-11 col-md-offset-1\">
\t\t\t\t\t<input class=\"btn btn-lg btn-block inputloginbtn\" type=\"submit\" value=\"Acceder\"/>
\t\t\t\t</div>
\t\t\t</div>

\t\t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'rest');
        echo "
\t\t
\t\t";
        // line 51
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 52
            echo "\t\t";
            $context["mensajeError"] = twig_template_get_attributes($this, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array());
            // line 53
            echo "\t\t\t";
            if ((twig_template_get_attributes($this, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()) == "Bad credentials")) {
                // line 54
                echo "\t\t\t    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
                    // line 55
                    echo "\t\t\t    \t<div class=\"alert alert-warning\" role=\"alert\">";
                    echo twig_escape_filter($this->env, $context["mensaje"], "html", null, true);
                    echo "</div>
\t\t\t\t\t";
                    // line 57
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "\t\t\t";
            }
            // line 59
            echo "\t\t";
        }
        // line 60
        echo "\t</div>
</form>
";
    }

    // line 70
    public function block_title($context, array $blocks = array())
    {
        echo "Formulario de acceso ";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 70,  148 => 60,  145 => 59,  142 => 58,  136 => 57,  131 => 55,  126 => 54,  123 => 53,  120 => 52,  118 => 51,  113 => 49,  105 => 43,  101 => 41,  94 => 36,  90 => 34,  82 => 28,  61 => 13,  54 => 8,  50 => 7,  46 => 6,  39 => 5,  36 => 3,  30 => 2,  11 => 1,);
    }
}
