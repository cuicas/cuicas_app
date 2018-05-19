<?php

/* EncuestasBundle:Encuestas:datosEncuesta.html.twig */
class __TwigTemplate_5a360d0c71a384f7eefbe39441649d2f441bda422384384ef2ae2fa13579334f extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "nombreEncuesta", array()), "html", null, true);
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "\t<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_datosEncuesta", array("id_encuesta" => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "id", array()))), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
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
        echo "\t\t<div class=\"col-xs-12 \">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t<input type=\"hidden\" id=\"form_municipio\" name=\"form[municipios]\" value=\"1\">
\t\t\t\t\t<!-- <label for=\"form_municipio\" id='label_form_municipio'>Municipios</label>
\t\t\t\t\t<select id=\"form_municipio\" name=\"form[municipios]\" class=\"form-control input-sm validate[required]\">
\t\t\t\t\t\t<option value=\"\">Seleccionar</option>
\t\t\t\t\t\t\t";
        // line 36
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["municipios"]) ? $context["municipios"] : $this->getContext($context, "municipios")));
        foreach ($context['_seq'] as $context["_key"] => $context["municipio"]) {
            // line 37
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["municipio"], "getId", array(), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["municipio"], "getNombreMunicipio", array(), "method"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['municipio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t\t\t\t\t</select>
\t\t\t\t\t-->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t
\t\t\t\t\t<input type=\"hidden\" id=\"form_parroquia\" name=\"form[parroquia]\" value=\"1\">
\t\t\t\t\t<!-- 
\t\t\t\t\t\t<label for=\"form_parroquia\" id='label_form_parroquia'>Parroquias</label>
\t\t\t\t\t\t<select id=\"form_parroquia\" name=\"form[parroquia]\" class=\"form-control input-sm validate[required]\">
\t\t\t\t\t\t\t<option value=\"\">Seleccionar</option>
\t\t\t\t\t\t</select> -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t<div class=\"informacion\" style=\"max-width: 260px; margin: auto; text-align: center\">
\t\t\t\t\t\t<label for=\"form_equipos\" id='label_form_equipos'>Empresa</label>
\t\t\t\t\t\t<select id=\"form_equipos\" name=\"form[equipos]\" class=\"form-control input-sm validate[required]\">
\t\t\t\t\t\t\t<option value=\"\">Seleccionar</option>
\t\t\t\t\t\t\t<option value=\"astimarca\">ASTIMARCA</option>
\t\t\t\t\t\t\t<option value=\"cimla\">CIMLA</option>
\t\t\t\t\t\t\t<option value=\"corsobain\">CORSOBAIN</option>
\t\t\t\t\t\t\t<option value=\"diques\">DIQUES Y ASTILLEROS</option>
\t\t\t\t\t\t\t<option value=\"enasal\">ENASAL</option>
\t\t\t\t\t\t\t<option value=\"enatex\">ENATEXCA</option>
\t\t\t\t\t\t\t<option value=\"juncal\">ENATUB EL JUNCAL</option>
\t\t\t\t\t\t\t<option value=\"imosa\">ENATUB IMOSA</option>
\t\t\t\t\t\t\t<option value=\"anzoategui\">ENATUB JOSE ANTONIO ANZOATEGUI</option>
\t\t\t\t\t\t\t<option value=\"revestimiento\">ENATUB REVESTIMIENTO</option>
\t\t\t\t\t\t\t<option value=\"simon\">ENATUB SIMON BOLIVAR</option>
\t\t\t\t\t\t\t<option value=\"horcones\">ENATUB LOS HORCONES</option>
\t\t\t\t\t\t\t<option value=\"enaval\">ENAVAL</option>
\t\t\t\t\t\t\t<option value=\"zaraza\">FABRICA DE BLOQUES PEDRO ZARAZA</option>
\t\t\t\t\t\t\t<option value=\"galba\">GUARDIAN DEL ALBA</option>
\t\t\t\t\t\t\t<option value=\"icvt\">ICVT</option>
\t\t\t\t\t\t\t<option value=\"paca\">PACA</option>
\t\t\t\t\t\t\t<option value=\"pilotes\">PILOTES</option>
\t\t\t\t\t\t\t<option value=\"asfalto\">PDVSA ASFALTO</option>
\t\t\t\t\t\t\t<option value=\"matriz\">PDVSA INDUSTRIAL CASA MATRIZ</option>
\t\t\t\t\t\t\t<option value=\"pignv\">PIGNV</option>
\t\t\t\t\t\t\t<option value=\"pmvca\">PMVCA</option>
\t\t\t\t\t\t\t<option value=\"probasim\">PROBASIM</option>
\t\t\t\t\t\t\t<option value=\"recuvensa\">RECUVENSA</option>
\t\t\t\t\t\t\t<option value=\"unerven\">UNERVEN</option>
\t\t\t\t\t\t\t<option value=\"vensoplast\">VENSOPLAST</option>
\t\t\t\t\t\t\t<option value=\"vhicoa\">VHICOA</option>
\t\t\t\t\t\t\t<option value=\"vietven\">VIETVEN</option>
\t\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t</div>
\t<div class=\"col-xs-12 col-md-12\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<center><input id='buscar_encuestas' class=\"fueraoverflow btn btn-default\" type=\"submit\" value=\"Siguiente\" /> <a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("encuestas_totales", array("tipoEncuesta" => "general"));
        echo "\"><input class=\"fueraoverflow btn btn-default\" type=\"button\" value=\"Cancelar\" name=\"form[boton_cancelar]\" /></a></center>
\t\t\t</div>
\t\t</div>
\t</div>
</form>
<script>
\t";
        // line 103
        $context["mun"] = "x";
        // line 104
        echo "\t";
        $context["paq"] = "x";
        // line 105
        echo "\t\$(document).ready(function(){
    \$('#form_municipio').change(function(){
    \t//declaro una variable myUrl ke contenga la url de la accion para donde va la id del municipio y luego sustituyo la letra x por el valor
    \t//obtenido de la selección de la lista select
      var myUrl = \"";
        // line 109
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
        return array (  193 => 109,  187 => 105,  184 => 104,  182 => 103,  173 => 97,  113 => 39,  102 => 37,  97 => 36,  88 => 28,  67 => 13,  60 => 8,  56 => 7,  52 => 6,  45 => 5,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
