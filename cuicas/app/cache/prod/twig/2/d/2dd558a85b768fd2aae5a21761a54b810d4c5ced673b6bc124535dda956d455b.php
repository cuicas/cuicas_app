<?php

/* UsuarioBundle:Usuario:registro.html.twig */
class __TwigTemplate_2dd558a85b768fd2aae5a21761a54b810d4c5ced673b6bc124535dda956d455b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::frontend.html.twig", "UsuarioBundle:Usuario:registro.html.twig", 2);
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

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        echo "Registro de Usuario";
    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 7
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("usuario_registro");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'enctype');
        echo ">
\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'errors');
        echo "
\t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 10
            echo "\t\t<script language=Javascript>
\t\t\t\$(document).ready(function(){
\t\t\t\t\$(this).tab('show');
\t\t\t\tBootstrapDialog.show({
\t\t\t\t\ttitle: 'Mensaje',
\t\t\t\t\tmessage: ('";
            // line 15
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
        // line 29
        echo "\t
\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'errors');
        echo "
\t";
        // line 32
        echo "\t
\t<div class=\"col-xs-12 col-md-4 col-md-offset-2\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<strong>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nombres", array()), 'label');
        echo "</strong>
\t\t\t\t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nombres", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<strong>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "apellidos", array()), 'label');
        echo "</strong>
\t\t\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "apellidos", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<strong>";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "cedula", array()), 'label');
        echo "</strong>
\t\t\t\t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "cedula", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<strong>";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "email", array()), 'label');
        echo "</strong>
\t\t\t\t";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "email", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-xs-12 col-md-4\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<strong>";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "password", array()), "first", array()), 'label');
        echo "</strong>
\t\t\t\t";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "password", array()), "first", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<strong>";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "password", array()), "second", array()), 'label');
        echo "</strong>
\t\t\t\t";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "password", array()), "second", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<strong>";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "roles", array()), 'label');
        echo "</strong>
\t\t\t\t";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "roles", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<strong>";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "prioridad", array()), 'label');
        echo "</strong>
\t\t\t\t";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "prioridad", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "_token", array()), 'widget');
        echo "

\t<div class=\"col-xs-12 col-md-12\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<center><input class=\"fueraoverflow btn btn-default\" type=\"submit\" value=\"Guardar\" />
\t \t\t\t<a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("sistema_Encuesta_principal_homepage");
        echo "\" > <input class=\"fueraoverflow btn btn-default\" type=\"button\" value=\"Cancelar\" /></a></center>
\t\t\t</div>
\t\t</div>
\t</div>
</form>
";
        // line 102
        echo "<script type=\"text/javascript\">
\$(document).ready(function(){

    \$(\"#sistemaEncuesta_usuariobundle_usuariostype_cedula\").on(\"blur\", function(){
      var url =  \"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("usuario_buscar_cedula", array("cedula" => "x"));
        echo "\";
      
      /*var datobusqueda = \$('#sistemamapas_usuariobundle_usuariostype_apellidos').val();
      //alert(\"datobusqueda : \"+datobusqueda);
      //url = url.replace('x', datobusqueda);
     // alert(\"calidad : \"+url);
      \$.ajax({
          url : url,
          data : datobusqueda,
          type : 'POST',
          dataType : 'json',
          success : function(response) {
              if (response.length == 0) {
              \talert(\"calidad : \"+response);
              } 
              else {
              \talert(\"nada : \"+response);
              }
          }
      });*/
        
    });

    \$(\"#sistemaEncuesta_usuariobundle_usuariostype_email\").on(\"blur\", function(){
      var url1 =  \"";
        // line 130
        echo $this->env->getExtension('routing')->getPath("usuario_buscar_email", array("email" => "x"));
        echo "\";

\t});
});
</script>
";
    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        echo "Módulo de Usuario";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Usuario:registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 136,  243 => 130,  216 => 106,  210 => 102,  202 => 92,  193 => 86,  185 => 81,  181 => 80,  173 => 75,  169 => 74,  161 => 69,  157 => 68,  149 => 63,  145 => 62,  135 => 55,  131 => 54,  123 => 49,  119 => 48,  111 => 43,  107 => 42,  99 => 37,  95 => 36,  89 => 32,  85 => 30,  82 => 29,  61 => 15,  54 => 10,  50 => 9,  46 => 8,  39 => 7,  36 => 5,  30 => 3,  11 => 2,);
    }
}
