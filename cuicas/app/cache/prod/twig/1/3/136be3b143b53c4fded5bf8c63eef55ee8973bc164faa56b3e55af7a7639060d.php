<?php

/* EncuestasBundle:Encuestas:encuestasCrear.html.twig */
class __TwigTemplate_136be3b143b53c4fded5bf8c63eef55ee8973bc164faa56b3e55af7a7639060d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "EncuestasBundle:Encuestas:encuestasCrear.html.twig", 1);
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
        echo "Crear Encuesta";
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        echo "Crear Encuesta";
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "
<form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("encuestas_crear");
        echo "\" id=\"forms\" method=\"post\"  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'enctype');
        echo " >
\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'errors');
        echo "
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
        echo "\t<div class=\"col-xs-12 col-md-4 col-md-offset-2\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<strong>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nombreEncuesta", array()), 'label');
        echo "</strong>
\t\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nombreEncuesta", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<strong>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "descripcion", array()), 'label');
        echo "</strong>
\t\t\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "descripcion", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<strong>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "tipoEncuesta", array()), 'label');
        echo "</strong>
\t\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "tipoEncuesta", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\" style=\"display:none\" id=\"form_encuestaFase2\" >
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<strong><label>Seleccionar encuesta de fase 2</label></strong>
\t\t\t\t<select name=\"encuestaFase2\" class=\"form-control input-sm validate[required]\">
\t\t\t\t\t<option value=\"\">Seleccionar</option>
\t\t\t\t\t\t";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["encuestasFase2"]) ? $context["encuestasFase2"] : $this->getContext($context, "encuestasFase2")));
        foreach ($context['_seq'] as $context["_key"] => $context["encuestaFase2"]) {
            // line 54
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["encuestaFase2"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["encuestaFase2"], "nombreEncuesta", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['encuestaFase2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-xs-12 col-md-4\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<strong>";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "fechaInicio", array()), 'label');
        echo "</strong>
\t\t\t\t";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "fechaInicio", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<strong>";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "fechaFin", array()), 'label');
        echo "</strong>
\t\t\t\t";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "fechaFin", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<label>¿La encuesta es definitiva?</label>
\t\t\t\tSi&nbsp;<input type=\"radio\" name=\"definitiva\" id=\"definitiva1\" value=\"true\" class=\"validate[required]\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
\t\t\t\tNo&nbsp;<input type=\"radio\" name=\"definitiva\" id=\"definitiva2\" value=\"false\" class=\"validate[required]\">
\t\t\t\t";
        // line 80
        echo "\t\t\t</div>
\t\t</div>
\t\t";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'rest');
        echo "
\t</div>
\t<div class=\"col-xs-12 col-md-12\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<center><input type=\"submit\" class=\"fueraoverflow btn btn-default\" value=\"Guardar\" /> <a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("encuestas_totales", array("tipoEncuesta" => "general"));
        echo "\"><input class=\"fueraoverflow btn btn-default\" type=\"button\" value=\"Cancelar\" name=\"form[boton_cancelar]\" /></a></center>
\t\t\t</div>
\t\t</div>
\t</div>

</form>
\t<script type=\"text/javascript\">
\t\$(document).ready(function(){

\t\t\$(\"#SistemaEncuesta_EncuestasBundle_encuestatype_tipoEncuesta\").change(function(){

\t\t\tif(\$(this).val() != \"fase2\" && \$(this).val() != \"fase1\" && \$(this).val() != \"comando\" && \$(this).val() != \"general\" && \$(this).val() != \"\"){
\t\t\t\t\$(\"#form_encuestaFase2\").css(\"display\",\"block\");
\t\t\t}
\t\t\telse{
\t\t\t\t\$(\"#form_encuestaFase2\").css(\"display\",\"none\");
\t\t\t}
\t\t});

\t\t\$(\"#SistemaEncuesta_EncuestasBundle_encuestatype_nombreEncuesta\").on(\"blur\", function(){
      \t\tvar url2 =  \"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("encuestas_buscar_nombre_encuesta", array("nombreEncuesta" => "x"));
        echo "\";
      \t});

\t\t\$('#SistemaEncuesta_EncuestasBundle_encuestatype_fechaInicio').change(function(){
\t\t\tvar primera = \$('#SistemaEncuesta_EncuestasBundle_encuestatype_fechaInicio').val();
\t\t\t\$('.datepicker1').datepicker({
\t\t        format: 'dd/mm/yyyy',
\t\t        language: \"es\",
\t\t        autoclose: true,
\t\t        orientation: \"top right\",
\t\t        todayHighlight: true,
\t\t\t\tstartDate: 'today'
\t\t    }).on('changeDate', function(e){
\t\t      \$(this).datepicker('hide');
\t\t    });
\t\t});
\t\t
\t\t\$(\".datepicker\").datepicker({
\t    \tformat: 'dd/mm/yyyy',
\t        language: \"es\",
\t        autoclose: true,
\t        orientation: \"top right\",
\t        todayHighlight: true,
\t        startDate: 'today'\t
\t        }).on('changeDate', function(e){
\t            \$(this).datepicker('hide');
\t        
\t    });

\t    \$('#forms').submit(function(event){
\t    \tvar fecha = \$('#SistemaEncuesta_EncuestasBundle_encuestatype_fechaInicio').val();
\t    \tvar fecha2 = \$('#SistemaEncuesta_EncuestasBundle_encuestatype_fechaFin').val();

\t    \tif (Date.parse(fecha) > Date.parse(fecha2)) {
\t    \t\talert('La Fecha de Fin es menor que la Fecha de Inicio');
\t    \t\tevent.preventDefault();
\t    \t}

\t    });
\t   
    });
    </script>
";
    }

    public function getTemplateName()
    {
        return "EncuestasBundle:Encuestas:encuestasCrear.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 107,  197 => 87,  189 => 82,  185 => 80,  174 => 70,  170 => 69,  162 => 64,  158 => 63,  149 => 56,  138 => 54,  134 => 53,  123 => 45,  119 => 44,  111 => 39,  107 => 38,  99 => 33,  95 => 32,  90 => 29,  69 => 14,  62 => 9,  58 => 8,  54 => 7,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
