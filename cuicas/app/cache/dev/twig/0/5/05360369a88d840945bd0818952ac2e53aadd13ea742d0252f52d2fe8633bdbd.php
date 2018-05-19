<?php

/* UsuarioBundle:Usuario:perfil.html.twig */
class __TwigTemplate_05360369a88d840945bd0818952ac2e53aadd13ea742d0252f52d2fe8633bdbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "UsuarioBundle:Usuario:perfil.html.twig", 1);
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
        echo "Editar perfil de Usuario";
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("usuario_perfil");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'enctype');
        echo ">
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
        echo "\t";
        // line 29
        echo "\t
\t<div class=\"col-xs-12 col-md-4 col-md-offset-2\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<strong>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nombres", array()), 'label');
        echo "</strong>
\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nombres", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<strong>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "apellidos", array()), 'label');
        echo "</strong>
\t\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "apellidos", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<strong>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "cedula", array()), 'label');
        echo "</strong>
\t\t\t\t";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "cedula", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<strong>";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "email", array()), 'label');
        echo "</strong>
\t\t\t\t";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "email", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-xs-12 col-md-4\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<strong>";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "password", array()), "first", array()), 'label');
        echo "</strong>
\t\t\t\t";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "password", array()), "first", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<strong>";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "password", array()), "second", array()), 'label');
        echo "</strong>
\t\t\t\t";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "password", array()), "second", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<label>Rol</label>
\t\t\t
\t\t\t";
        // line 73
        $context["rol"] = twig_template_get_attributes($this, (isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "getRol", array());
        // line 74
        echo "\t\t\t";
        if ((twig_template_get_attributes($this, (isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "getRol", array()) == "ROLE_ADMIN")) {
            // line 75
            echo "\t\t\t\t";
            $context["rol"] = "Administrador";
            // line 76
            echo "\t\t\t";
        }
        // line 77
        echo "\t\t\t";
        if ((twig_template_get_attributes($this, (isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "getRol", array()) == "ROLE_USUARIO")) {
            // line 78
            echo "\t\t\t\t";
            $context["rol"] = "Usuario";
            // line 79
            echo "\t\t\t";
        }
        // line 80
        echo "\t\t\t";
        if ((twig_template_get_attributes($this, (isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "getRol", array()) == "ROLE_SUPERVISOR")) {
            // line 81
            echo "\t\t\t\t";
            $context["rol"] = "Supervisor";
            // line 82
            echo "\t\t\t";
        }
        // line 83
        echo "\t\t
\t\t\t";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<strong>";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "prioridad", array()), 'label');
        echo "</strong>
\t\t\t\t";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "prioridad", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "_token", array()), 'widget');
        echo "

\t<div class=\"col-xs-12 col-md-12\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<center><input class=\"fueraoverflow btn btn-default\" type=\"submit\" value=\"Guardar\" />
\t \t\t\t<a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("usuario_verperfil");
        echo "\" > <input class=\"fueraoverflow btn btn-default\" type=\"button\" value=\"Cancelar\" /></a></center>
\t\t\t</div>
\t\t</div>
\t</div>
</form>
<script type=\"text/javascript\">
\$(document).ready(function(){
    \$(\"#sistemaEncuesta_usuariobundle_usuariostype_cedula\").on(\"blur\", function(){
      var url =  \"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("usuario_modificar_cedula", array("cedula" => "x"));
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
});
</script>
";
    }

    // line 134
    public function block_title($context, array $blocks = array())
    {
        echo "Módulo de Usuario";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Usuario:perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 134,  238 => 109,  227 => 101,  218 => 95,  210 => 90,  206 => 89,  198 => 84,  195 => 83,  192 => 82,  189 => 81,  186 => 80,  183 => 79,  180 => 78,  177 => 77,  174 => 76,  171 => 75,  168 => 74,  166 => 73,  156 => 66,  152 => 65,  144 => 60,  140 => 59,  130 => 52,  126 => 51,  118 => 46,  114 => 45,  106 => 40,  102 => 39,  94 => 34,  90 => 33,  84 => 29,  82 => 28,  61 => 13,  54 => 8,  50 => 7,  46 => 6,  39 => 5,  36 => 4,  30 => 2,  11 => 1,);
    }
}
