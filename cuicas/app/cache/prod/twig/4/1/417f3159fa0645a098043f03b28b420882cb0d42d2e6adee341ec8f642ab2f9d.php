<?php

/* EncuestasBundle:Encuestas:datosEncuesta.html.twig */
class __TwigTemplate_417f3159fa0645a098043f03b28b420882cb0d42d2e6adee341ec8f642ab2f9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "EncuestasBundle:Encuestas:datosEncuesta.html.twig", 1);
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
        echo "Datos Encuesta";
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "nombreEncuesta", array()), "html", null, true);
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "\t<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_datosEncuesta", array("id_encuesta" => $this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'enctype');
        echo ">
\t\t";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'errors');
        echo "
\t\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 8
            echo "\t\t<script language=Javascript>
\t\t\$(document).ready(function(){
\t\t\t\$(this).tab('show');
\t\t\tBootstrapDialog.show({
\t\t\t\ttitle: 'Mensaje',
\t\t\t\tmessage: ('";
            // line 13
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
        // line 28
        echo "\t\t<div class=\"col-xs-12 col-md-2 col-md-offset-5\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t<label for=\"form_municipio\" id='label_form_municipio'>Municipios</label>
\t\t\t\t\t<select id=\"form_municipio\" name=\"form[municipios]\" class=\"form-control input-sm validate[required]\">
\t\t\t\t\t\t<option value=\"\">Seleccionar</option>
\t\t\t\t\t\t\t";
        // line 35
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["municipios"]) ? $context["municipios"] : $this->getContext($context, "municipios")));
        foreach ($context['_seq'] as $context["_key"] => $context["municipio"]) {
            // line 36
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["municipio"], "getId", array(), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["municipio"], "getNombreMunicipio", array(), "method"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['municipio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t<label for=\"form_parroquia\" id='label_form_parroquia'>Parroquias</label>
\t\t\t\t\t<select id=\"form_parroquia\" name=\"form[parroquia]\" class=\"form-control input-sm validate[required]\">
\t\t\t\t\t\t<option value=\"\">Seleccionar</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t<label for=\"form_equipos\" id='label_form_equipos'>Equipos</label>
\t\t\t\t\t<select id=\"form_equipos\" name=\"form[equipos]\" class=\"form-control input-sm validate[required]\">
\t\t\t\t\t\t<option value=\"\">Seleccionar</option>
\t\t\t\t\t\t<option value=\"beneficiarios_misiones\">Beneficiario</option>
\t\t\t\t\t\t<option value=\"clp\">Circulo de Lucha</option>
\t\t\t\t\t\t<option value=\"militancia\">Militancia</option>
\t\t\t\t\t\t<option value=\"patrullas_sectoriales\">Patrulla Sectorial</option>
\t\t\t\t\t\t<option value=\"rep\">Rep</option>
\t\t\t\t\t\t<option value=\"trabajadores_patria\">Trabajadores</option>
\t\t\t\t\t\t<option value=\"ubch\">Ubch</option>
\t\t\t\t\t\t<option value=\"gmvv\">Gmvv</option>
\t\t\t\t\t\t<option value=\"poder_popular\">Poder Popular</option>
\t\t\t\t\t\t<option value=\"patrulleros\">Patrulleros</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t</div>
\t<div class=\"col-xs-12 col-md-12\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<center><input id='buscar_encuestas' class=\"fueraoverflow btn btn-default\" type=\"submit\" value=\"Siguiente\" /> <a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("encuestas_totales", array("tipoEncuesta" => "general"));
        echo "\"><input class=\"fueraoverflow btn btn-default\" type=\"button\" value=\"Cancelar\" name=\"form[boton_cancelar]\" /></a></center>
\t\t\t</div>
\t\t</div>
\t</div>
</form>
<script>
\t";
        // line 77
        $context["mun"] = "x";
        // line 78
        echo "\t";
        $context["paq"] = "x";
        // line 79
        echo "\t\$(document).ready(function(){
    \$('#form_municipio').change(function(){
    \t//declaro una variable myUrl ke contenga la url de la accion para donde va la id del municipio y luego sustituyo la letra x por el valor
    \t//obtenido de la selección de la lista select
      var myUrl = \"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_cargarParroquias", array("id_municipio" => (isset($context["mun"]) ? $context["mun"] : $this->getContext($context, "mun")))), "html", null, true);
        echo "\";\t\t\t\t\t
\t\t\t
\t\t\tmyUrl = myUrl.replace('x', \$(this).val());

\t\t\t//esto se hace para eliminar todos los elementos de la lista y le añado eñ primero ke es seleccionar
\t\t\t\$('#form_parroquia').empty();
\t\t\t\$('#form_parroquia').append('<option value='+0+'>Seleccionar</option>');
\t\t\t//////////////////////////

\t\t\t//getJson obtine un diccionario codificado en Json ke viene de la accion myUrl, data es el Json devuelto por la acción
\t\t\t\$.getJSON( myUrl, function (data){
\t\t\t\t//recorre cada uno de los elementos ke se encuentra en data y luego le añade cada option al select
      \t\$.each(data, function(key, valor){
\t \t\t\t\t\$('#form_parroquia').append('<option value='+valor.id_paq+'>'+valor.paq+'</option>');
       \t});
      });
\t\t\t//alert(\$('#form_municipio').val());
\t\t\tif(\$('#form_municipio').val() == \"todos\"){
\t\t\t\t\$('#form_parroquia').append('<option value=\\'todos\\' selected readonly>Todos</option>');\t
\t\t\t}
\t\t\telse{
\t\t\t\t\$('#form_parroquia').append('<option value=\\'todos\\' >Todos</option>');\t
\t\t\t}
\t\t\t
\t\t\t
    });\t\t
\t});
</script>
";
    }

    public function getTemplateName()
    {
        return "EncuestasBundle:Encuestas:datosEncuesta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 83,  161 => 79,  158 => 78,  156 => 77,  147 => 71,  112 => 38,  101 => 36,  96 => 35,  88 => 28,  67 => 13,  60 => 8,  56 => 7,  52 => 6,  45 => 5,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
