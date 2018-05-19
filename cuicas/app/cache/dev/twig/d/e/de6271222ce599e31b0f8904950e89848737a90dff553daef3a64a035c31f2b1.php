<?php

/* EncuestasBundle:Encuestas:datosEncuestaComando.html.twig */
class __TwigTemplate_de6271222ce599e31b0f8904950e89848737a90dff553daef3a64a035c31f2b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "EncuestasBundle:Encuestas:datosEncuestaComando.html.twig", 1);
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
        echo "Datos Encuesta Comando de campaña";
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
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_datosEncuestaComando", array("id_encuesta" => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "id", array()))), "html", null, true);
        echo "\" novalidate method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'enctype');
        echo ">
\t";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 7
            echo "\t\t<script language=Javascript>
\t\t\$(document).ready(function(){
\t\t\t\$(this).tab('show');
\t\t\tBootstrapDialog.show({
\t\t\t\ttitle: 'Mensaje',
\t\t\t\tmessage: ('";
            // line 12
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
        // line 27
        echo "\t<div class=\"col-xs-12 col-md-2 col-md-offset-5\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<label for=\"form_cargos\" id='label_form_cargos'>Cargos</label>
\t\t\t\t<select id=\"form_cargos\" name=\"form[cargo]\" class=\"form-control input-sm validate[required]\"/>
\t\t\t\t\t<option value=\"\">Seleccionar</option>
\t\t\t\t\t";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cargosComando"]) ? $context["cargosComando"] : $this->getContext($context, "cargosComando")));
        foreach ($context['_seq'] as $context["_key"] => $context["cargo"]) {
            // line 34
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["cargo"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["cargo"], "nombre", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cargo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t\t\t<option value=\"todos\">Todos</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"col-xs-12 col-md-2 col-md-offset-5\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-13\">
\t\t\t\t<label><center>Seleccionar</center></label>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-xs-12 col-md-4 col-md-offset-4\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-13\">
\t\t\t\t<center>
\t\t\t\t\tCircuitos&nbsp;<input type=\"radio\" name=\"form[area]\" id=\"area1\" value=\"circuito\" class=\"validate[required]\">&nbsp;&nbsp;
\t\t\t\t\tMunicipios&nbsp;<input type=\"radio\" name=\"form[area]\" id=\"area2\" value=\"municipio\" class=\"validate[required]\">
\t\t\t\t</center>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-xs-12 col-md-2 col-md-offset-5\">
\t\t<div class=\"row\" style=\"display:none\" id=\"circuitos\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<label for=\"form_circuito\" id='label_form_circuito'>Circuitos</label>
\t\t\t\t<select id=\"form_circuito\" name=\"form[circuito]\" class=\"form-control input-sm\"/>
\t\t\t\t\t<option value=\"\">Seleccionar</option>
\t\t\t\t\t";
        // line 66
        echo "\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["circuitos"]) ? $context["circuitos"] : $this->getContext($context, "circuitos")));
        foreach ($context['_seq'] as $context["_key"] => $context["circuito"]) {
            // line 67
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["circuito"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["circuito"], "getNombreCircuito", array(), "method"), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['circuito'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "\t\t\t\t</select>
\t\t\t</div>\t\t\t\t
\t\t</div>
\t\t<div class=\"row\" style=\"display:none\" id=\"municipios\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<label for=\"form_municipio\" id='label_form_municipio'>Municipios</label>
\t\t\t\t<select id=\"form_municipio\" name=\"form[municipio]\" class=\"form-control input-sm\"/>
\t\t\t\t\t<option value=\"\">Seleccionar</option>
\t\t\t\t\t";
        // line 78
        echo "\t\t\t\t\t";
        if ((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) != "circuito")) {
            // line 79
            echo "\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["municipios"]) ? $context["municipios"] : $this->getContext($context, "municipios")));
            foreach ($context['_seq'] as $context["_key"] => $context["municipio"]) {
                // line 80
                echo "\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["municipio"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["municipio"], "getNombreMunicipio", array(), "method"), "html", null, true);
                echo "</option>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['municipio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "\t\t\t\t\t";
        }
        // line 83
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'widget');
        echo "
\t</div>
\t<div class=\"col-xs-12 col-md-12\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<center><input id='buscar_encuestas' class=\"fueraoverflow btn btn-default\" type=\"submit\" value=\"Siguiente\" /> <a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("encuestas_totales", array("tipoEncuesta" => "general"));
        echo "\"><input class=\"fueraoverflow btn btn-default\" type=\"button\" value=\"Cancelar\" name=\"form[boton_cancelar]\" /></a></center>
\t\t\t</div>
\t\t</div>
\t</div>
</form>
<script>
\t";
        // line 97
        $context["circu"] = "x";
        // line 98
        echo "\t";
        $context["mun"] = "x";
        // line 99
        echo "\t";
        $context["paq"] = "x";
        // line 100
        echo "\t\$(document).ready(function(){

\t\t\$('#area1').on( \"click\", function() {
\t\t  //alert(\"ll\");
\t\t  \$('#municipios').css(\"display\",\"none\")
\t\t  \$('#circuitos').css(\"display\",\"block\")
\t\t});
\t\t\$('#area2').on( \"click\", function() {
\t\t  //alert(\"ll\");
\t\t  \$('#municipios').css(\"display\",\"block\")
\t\t  \$('#circuitos').css(\"display\",\"none\")
\t\t});
\t\t/* esto se hace para añadir o kitar la seleccion obligatoria del identificador (un circuito o un municipio) en caso de ke seleccione el cargo todos */
\t\t\$('#form_cargos').change(function(){
\t\t\tif(\$(this).val() == \"todos\"){
\t\t\t\t\$( \"#form_municipio\" ).toggleClass( \"validate[required]\" )
\t\t\t\t\$( \"#form_circuito\" ).toggleClass( \"validate[required]\" )
\t\t\t}
\t\t\telse{
\t\t\t\t\$( \"#form_municipio\" ).removeClass( \"validate[required]\" )
\t\t\t\t\$( \"#form_circuito\" ).removeClass( \"validate[required]\" )
\t\t\t}\t\t\t

\t\t});
\t});
</script>
";
    }

    public function getTemplateName()
    {
        return "EncuestasBundle:Encuestas:datosEncuestaComando.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 100,  213 => 99,  210 => 98,  208 => 97,  199 => 91,  191 => 86,  186 => 83,  183 => 82,  172 => 80,  167 => 79,  164 => 78,  154 => 69,  143 => 67,  138 => 66,  107 => 36,  96 => 34,  92 => 33,  84 => 27,  63 => 12,  56 => 7,  52 => 6,  45 => 5,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
