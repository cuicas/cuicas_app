<?php

/* SistemaEncuestaPrincipalBundle:Default:correo.html.twig */
class __TwigTemplate_23c43d329c86a306b54cbce3842914dfb9bcd759ed6b9a4267b1fdbf12154b1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "SistemaEncuestaPrincipalBundle:Default:correo.html.twig", 1);
        $this->blocks = array(
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
    public function block_titulo($context, array $blocks = array())
    {
        echo "Contáctenos";
    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 4
        echo "<div>
    ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 6
            echo "        <script language=Javascript>
            alert('";
            // line 7
            echo twig_escape_filter($this->env, $context["mensaje"], "html", null, true);
            echo "')
        </script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</div>
<div>
    
   
    <form action=\" ";
        // line 14
        echo $this->env->getExtension('routing')->getPath("sistema_Encuesta_principal_correo");
        echo "\" method=\"POST\" novalidate>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-md-3\">
            <strong><label>Asunto</label> </strong>
        </div>
        <div class=\"col-xs-12 col-md-3\">
            <input type=\"text\" name=\"Subject\"  class=\"form-control validate[required]\">
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-3\">
            <strong><label>Correo Electrónico</label></strong>
        </div>
        <div class=\"col-xs-3\">      
            <input type=\"email\" name=\"email\" class=\" form-control validate[required,custom[email]]\">
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-3\">          
            <strong><label>Mensaje</label></strong>
        </div>
        <div class=\"col-xs-3 select\">           
            <textarea style=\"width:263px; height:100px; resize:none;\" name=\"message\" class=\" form-control validate[required]\" ></textarea>
        </div>  
    </div>
    <input type=\"submit\" value=\"Enviar\" class=\"fueraoverflow btn btn-default\" />
</div>  


    </form>

";
    }

    public function getTemplateName()
    {
        return "SistemaEncuestaPrincipalBundle:Default:correo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  57 => 10,  48 => 7,  45 => 6,  41 => 5,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }
}
