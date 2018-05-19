<?php

/* EncuestasBundle:Encuestas:cargarCandidato.html.twig */
class __TwigTemplate_6a0c46851eea113c4eb6d5a38ac8d8f540f5ca33f9f95873a829f793ce6d1dd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "EncuestasBundle:Encuestas:cargarCandidato.html.twig", 1);
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
        echo "Candidato";
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        echo " Candidato de ";
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "nombreEncuesta", array()), "html", null, true);
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "
";
        // line 7
        echo "
<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_cargar_candidato", array("id_encuesta" => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" novalidate ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'enctype');
        echo " >
\t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 10
            echo "\t\t<script language=Javascript>
\t\t\$(document).ready(function(){
\t\t\t\$(this).tab('show');
\t\t\tBootstrapDialog.show({
\t\t\t\ttitle: 'Mensaje',
\t\t\t\tmessage: ('";
            // line 15
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
        // line 30
        echo "\t<div class=\"col-xs-12 col-md-4 col-md-offset-2\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<strong><label>Apellido(s) y Nombre(s)</label></strong>
\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "apellidoNombre", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<strong><label id=\"label_partido\">Partido politico</label></strong>
\t\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "partido", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div id=\"municipios_alcalde\" style=\"display: ";
        // line 44
        if ((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "alcalde")) {
            echo "block;";
        } else {
            echo "none;";
        }
        echo "\">
\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t<strong><label for=\"form_municipio\" id='label_form_municipio_candidato'>Municipio</label></strong>
\t\t\t\t\t<select id=\"form_municipio_candidato\" name=\"form[municipios]\" ";
        // line 47
        if ((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "alcalde")) {
            echo "required=\"required\" class=\"form-control validate[requiredSelect] input-sm\"";
        }
        echo "/>
\t\t\t\t<option value=\"\">Seleccionar</option>
\t\t\t\t";
        // line 50
        echo "\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["municipios"]) ? $context["municipios"] : $this->getContext($context, "municipios")));
        foreach ($context['_seq'] as $context["_key"] => $context["municipio"]) {
            // line 51
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["municipio"], "getId", array(), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["municipio"], "getNombreMunicipio", array(), "method"), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['municipio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t\t\t</select>\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t";
        // line 58
        if ((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "alcalde")) {
            // line 59
            echo "\t\t\t\t<div class=\"col-xs-12 col-md-12 divupload\" id = \"foto\">
\t\t\t\t\t<strong><label>Fotografía</label></strong>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"inputfile\" class=\"form-control validate[required]\"  />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-5 text-right\">
\t\t\t\t\t\t\t\t<div class=\"upload\">
\t\t\t\t\t\t\t\t\t<p>Buscar</p>
\t\t\t\t\t\t\t\t\t";
            // line 68
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "foto", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 74
        echo "\t\t</div>

\t\t<div class=\"row\">
\t\t\t";
        // line 77
        if ((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "circuito")) {
            // line 78
            echo "\t\t\t\t<div class=\"col-xs-12 col-md-12 divupload\" id = \"foto\">
\t\t\t\t\t<strong><label>Fotografía</label></strong>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"inputfile\" class=\"form-control validate[required]\"  />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-5 text-right\">
\t\t\t\t\t\t\t\t<div class=\"upload\">
\t\t\t\t\t\t\t\t\t<p>Buscar</p>
\t\t\t\t\t\t\t\t\t";
            // line 87
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "foto", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 93
        echo "\t\t</div>

\t\t<div class=\"row\">
\t\t\t";
        // line 96
        if (((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "estatal") || (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "voto-lista"))) {
            // line 97
            echo "\t\t\t<div class=\"col-xs-12 col-md-12\" id = \"foto_estatal\">
\t\t\t\t\t<strong><label>Fotografía</label></strong>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"inputfile\" class=\"form-control validate[required]\"  />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-5 text-right\">
\t\t\t\t\t\t\t\t<div class=\"upload\">
\t\t\t\t\t\t\t\t\t<p>Buscar</p>
\t\t\t\t\t\t\t\t\t";
            // line 106
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "foto", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 112
        echo "\t\t</div>

\t\t<div class=\"row\">\t
\t\t\t<div class=\"col-md-12\" id=\"circuitos\" style=\"display:";
        // line 115
        if ((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "circuito")) {
            echo "block;";
        } else {
            echo "none;";
        }
        echo "\">
\t\t\t\t<strong><label>Seleccionar el circuito</label></strong>
\t\t\t\t<div>Circuito 1 <input type=\"radio\" class=\"validate[minCheckbox[1]]\" name=\"form[circuito]\" value=\"1\">
\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;Circuito 2 <input type=\"radio\" class=\"validate[minCheckbox[1]]\" name=\"form[circuito]\" value=\"2\"></div>
\t\t\t\t<br />
\t\t\t\t<div>Circuito 3 <input type=\"radio\" class=\"validate[minCheckbox[1]]\" name=\"form[circuito]\" value=\"3\">
\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;Circuito 4 <input type=\"radio\" class=\"validate[minCheckbox[1]]\" name=\"form[circuito]\" value=\"4\"></div>
\t\t\t</div>
\t\t</div>
\t</div>

\t\t<div class=\"col-xs-12 col-md-12\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<center><input class=\"fueraoverflow1 btn btn-default\" type=\"submit\" value=\"Guardar\" name=\"form[Guardar]\" /> <a href=\"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("encuestas_totales", array("tipoEncuesta" => "general"));
        echo "\"><input class=\"fueraoverflow1 btn btn-default\" type=\"button\" value=\"Cancelar\" name=\"form[boton_cancelar]\" /></a></center>
\t\t\t</div>
\t\t</div>
\t\t</div>
\t\t
</form>
<script>
\t\$(document).ready(function() { 
\t\t

\t\t\$('#SistemaEncuesta_candidatostype_tipo_eleccion').change(function(){
\t\t\tif(\$(this).val() == 'alcalde'){ 
\t\t\t\t\$('#municipios_alcalde').css('display','block');
\t\t\t\t\$('input:radio[name=\"form[circuito]\"]').attr(\"checked\",false);
\t\t\t\t\$('#circuitos').css('display','none');
\t\t\t\t\$('#estatal').css('display','none');
\t\t\t}else{
\t\t\t\tif(\$(this).val() == 'circuito'){ //alert('hola '+\$(this).val());
\t\t\t\t\t\$('#circuitos').css('display','block');
\t\t\t\t\t\$('#municipios_alcalde').css('display','none');
\t\t\t\t\t\$('#estatal').css('display','none');
\t\t\t\t}else{
\t\t\t\t\t\$('#circuitos').css('display','none');
\t\t\t\t\t\$('#municipios_alcalde').css('display','none');
\t\t\t\t\t\$('#estatal').css('display','block');
\t\t\t\t\t\$('input:radio[name=\"form[circuito]\"]').attr(\"checked\",false);
\t\t\t\t}
\t\t\t}
\t\t});
\t});
\t
\t\$(\"input:file\").change(function(){
    \$(\"#inputfile\").prop(\"disabled\",true);
    \$(\"#inputfile\").val(\$(\"input:file\").val());
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "EncuestasBundle:Encuestas:cargarCandidato.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 129,  233 => 115,  228 => 112,  219 => 106,  208 => 97,  206 => 96,  201 => 93,  192 => 87,  181 => 78,  179 => 77,  174 => 74,  165 => 68,  154 => 59,  152 => 58,  145 => 53,  134 => 51,  129 => 50,  122 => 47,  112 => 44,  105 => 40,  96 => 34,  90 => 30,  69 => 15,  62 => 10,  58 => 9,  52 => 8,  49 => 7,  46 => 5,  43 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
