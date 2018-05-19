<?php

/* EncuestasBundle:Encuestas:encuestasAsignar.html.twig */
class __TwigTemplate_26e0a3f205d322e078adeae4cbc751a2685963413cc54730978e5b765863a9a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "EncuestasBundle:Encuestas:encuestasAsignar.html.twig", 1);
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
        echo "Datos de la Encuesta ";
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        echo "Encuesta: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "nombreEncuesta", array()), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "

<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_configurar", array("id_encuesta" => $this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" novalidate >
\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 9
            echo "\t\t<script language=Javascript>
\t\t\t\$(document).ready(function(){
\t\t\t\t\$(this).tab('show');
\t\t\t\tBootstrapDialog.show({
\t\t\t\t\ttitle: 'Mensaje',
\t\t\t\t\tmessage: ('";
            // line 14
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
        echo "\t\t<div class=\"col-xs-12 col-md-4 col-md-offset-4\">
\t\t\t<div class=\"row\" style=\"margin-left:40px;\">
\t\t\t\t<div class=\"col-xs-9 col-md-9\">
\t\t\t\t\t<strong><label>Cantidad de Preguntas </label></strong>
\t\t\t\t<input class= \"cantidad form-control validate[required,custom[delunoalcinco],maxSize[1]]\" type=\"number\" id=\"cantidad\" name=\"sistemaencuesta_usuariobundle_encuestatype[cantidad]\" min=\"1\" max=\"5\" data-prompt-position=\"bottomRight:-66,3\" style=\"text-align:center;\" onkeypress=\"return isNumber(event);\" />
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-xs-12 col-md-12\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<center><input class=\"fueraoverflow btn btn-default\" type=\"submit\" value=\"Siguiente\" /> <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("encuestas_totales", array("tipoEncuesta" => "general"));
        echo "\"><input class=\"fueraoverflow btn btn-default\" type=\"button\" value=\"Cancelar\" name=\"form[boton_cancelar]\" /></a></center>
\t\t\t</div>
\t\t</div>
\t</div>\t\t
    </form>
    <script type=\"text/javascript\">
\t\tfunction isNumber(e) {
\t\tk = (document.all) ? e.keyCode : e.which;
\t\tif (k==8 || k==0) return true;
\t\tpatron = /\\d/;
\t\tn = String.fromCharCode(k);
\t\treturn patron.test(n);
\t\t}
\t</script>

\t";
        // line 55
        $context["usuario"] = $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array());
    }

    public function getTemplateName()
    {
        return "EncuestasBundle:Encuestas:encuestasAsignar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 55,  100 => 40,  87 => 29,  66 => 14,  59 => 9,  55 => 8,  51 => 7,  47 => 5,  44 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
