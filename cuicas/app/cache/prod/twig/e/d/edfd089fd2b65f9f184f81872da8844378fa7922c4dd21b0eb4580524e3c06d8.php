<?php

/* EncuestasBundle:Encuestas:datosEncuestaSufragio.html.twig */
class __TwigTemplate_edfd089fd2b65f9f184f81872da8844378fa7922c4dd21b0eb4580524e3c06d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "EncuestasBundle:Encuestas:datosEncuestaSufragio.html.twig", 1);
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
        echo "Datos Encuesta Sufragio";
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
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_datosEncuestaSufragio", array("id_encuesta" => $this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "id", array()))), "html", null, true);
        echo "\" novalidate method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'enctype');
        echo ">
\t";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
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
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 29
        if (($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "circuito")) {
            // line 30
            echo "\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t<label for=\"form_circuito\" id='label_form_circuito'>Circuitos</label>
\t\t\t\t\t<select id=\"form_circuito\" name=\"form[circuitos]\" class=\"form-control input-sm validate[required]\"/>
\t\t\t\t\t\t<option value=\"\">Seleccionar</option>
\t\t\t\t\t\t";
            // line 35
            echo "\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["circuitos"]) ? $context["circuitos"] : $this->getContext($context, "circuitos")));
            foreach ($context['_seq'] as $context["_key"] => $context["circuito"]) {
                // line 36
                echo "\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["circuito"], "getId", array(), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["circuito"], "getNombreCircuito", array(), "method"), "html", null, true);
                echo "</option>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['circuito'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t\t\t\t<option value=\"todos\">Todos</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 42
        echo "\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t<label for=\"form_municipio\" id='label_form_municipio'>Municipios</label>
\t\t\t\t\t<select id=\"form_municipio\" name=\"form[municipios]\" class=\"form-control input-sm validate[required]\"/>
\t\t\t\t\t\t<option value=\"\">Seleccionar</option>
\t\t\t\t\t\t";
        // line 48
        if (($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) != "circuito")) {
            // line 49
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["municipios"]) ? $context["municipios"] : $this->getContext($context, "municipios")));
            foreach ($context['_seq'] as $context["_key"] => $context["municipio"]) {
                // line 50
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
            // line 52
            echo "\t\t\t\t\t\t";
        }
        // line 53
        echo "\t\t\t\t\t\t<option value=\"todos\">Todos</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t<label for=\"form_parroquia\" id='label_form_parroquia'>Parroquias</label>
\t\t\t\t\t<select id=\"form_parroquia\" name=\"form[parroquia]\" class=\"form-control input-sm validate[required]\"/>
\t\t\t\t\t\t<option value=\"\">Seleccionar</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-13\">
\t\t\t\t\t<label for=\"form_cv\" id='label_form_cv'>Centro de Votaci&oacute;n</label>
\t\t\t\t\t<select id=\"form_cv\" name=\"form[cv]\" class=\"form-control input-sm validate[required]\"/>
\t\t\t\t\t\t<option value=\"\">Seleccionar</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'widget');
        echo "
\t</div>
\t<div class=\"col-xs-12 col-md-12\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<center><input id='buscar_encuestas' class=\"fueraoverflow btn btn-default\" type=\"submit\" value=\"Siguiente\" /> <a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("encuestas_totales", array("tipoEncuesta" => "general"));
        echo "\"><input class=\"fueraoverflow btn btn-default\" type=\"button\" value=\"Cancelar\" name=\"form[boton_cancelar]\" /></a></center>
\t\t\t</div>
\t\t</div>
\t</div>
</form>
<script>
\t";
        // line 85
        $context["circu"] = "x";
        // line 86
        echo "\t";
        $context["mun"] = "x";
        // line 87
        echo "\t";
        $context["paq"] = "x";
        // line 88
        echo "\t\$(document).ready(function(){
\t\t\$('#form_circuito').change(function(){
    \t//declaro una variable myUrl ke contenga la url de la accion para donde va la id del municipio y luego sustituyo la letra x por el valor
    \t//obtenido de la selección de la lista select\t
      var myUrl = \"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_cargarMunicipios", array("id_circuito" => (isset($context["circu"]) ? $context["circu"] : $this->getContext($context, "circu")))), "html", null, true);
        echo "\";\t\t\t\t\t
\t\t\t
\t\t\tmyUrl = myUrl.replace('x', \$(this).val());

\t\t\t//esto se hace para eliminar todos los elementos de la lista y le añado eñ primero ke es seleccionar
\t\t\t\$('#form_municipio').empty();
\t\t\t\$('#form_municipio').append('<option value='+0+'>Seleccionar</option>');
\t\t\t//////////////////////////

\t\t\t//getJson obtine un diccionario codificado en Json ke viene de la accion myUrl, data es el Json devuelto por la acción
\t\t\t\$.getJSON( myUrl, function (data){
\t\t\t\t//recorre cada uno de los elementos ke se encuentra en data y luego le añade cada option al select
      \t\$.each(data, function(key, valor){
\t \t\t\t\t\$('#form_municipio').append('<option value='+valor.id_mun+'>'+valor.mun+'</option>');
       \t});
      });


\t\t\tif(\$('#form_circuito').val() == \"todos\"){
\t\t\t\t\$('#form_municipio').append('<option value=\\'todos\\' selected >Todos</option>');\t
\t\t\t\t\$('#form_parroquia').append('<option value=\\'todos\\' selected>Todos</option>');
\t\t\t\t\$('#form_cv').append('<option value=\\'todos\\' selected >Todos</option>');
\t\t\t}
\t\t\telse{
\t\t\t\t\$('#form_parroquia').empty();
\t\t\t\t\$('#form_parroquia').append('<option value=\\'\\'>Seleccionar</option>');
\t\t\t\t\$('#form_parroquia').append('<option value=\\'todos\\' >Todos</option>');

\t\t\t\t\$('#form_municipio').empty();
\t\t\t\t\$('#form_municipio').append('<option value=\\'\\'>Seleccionar</option>');
\t\t\t\t\$('#form_municipio').append('<option value=\\'todos\\' >Todos</option>');\t

\t\t\t\t\$('#form_cv').empty();
\t\t\t\t\$('#form_cv').append('<option value=\\'\\'>Seleccionar</option>');
\t\t\t\t\$('#form_cv').append('<option value=\\'todos\\'>Todos</option>');
\t\t\t}

\t\t\t
    });

    \$('#form_municipio').change(function(){
    \t//declaro una variable myUrl ke contenga la url de la accion para donde va la id del municipio y luego sustituyo la letra x por el valor
    \t//obtenido de la selección de la lista select
      var myUrl = \"";
        // line 135
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

      if(\$('#form_municipio').val() == \"todos\"){
\t\t\t\t\$('#form_parroquia').append('<option value=\\'todos\\' selected>Todos</option>');
\t\t\t\t\$('#form_cv').append('<option value=\\'todos\\' selected >Todos</option>');
\t\t\t}
\t\t\telse{
\t\t\t\t\$('#form_parroquia').empty();
\t\t\t\t\$('#form_parroquia').append('<option value=\\'\\'>Seleccionar</option>');
\t\t\t\t\$('#form_parroquia').append('<option value=\\'todos\\' >Todos</option>');

\t\t\t\t\$('#form_cv').empty();
\t\t\t\t\$('#form_cv').append('<option value=\\'\\'>Seleccionar</option>');
\t\t\t\t\$('#form_cv').append('<option value=\\'todos\\' >Todos</option>');
\t\t\t}
\t\t\t
    });

   \t\$('#form_parroquia').change(function(){ 
    \t//declaro una variable myUrl ke contenga la url de la accion para donde va la id del municipio y luego sustituyo la letra x por el valor
    \t//optenido de la selección de la lista select
      var myUrl = \"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_cargarCV", array("id_parroquia" => (isset($context["paq"]) ? $context["paq"] : $this->getContext($context, "paq")))), "html", null, true);
        echo "\";\t\t\t\t\t
\t\t\tmyUrl = myUrl.replace('x', \$(this).val());

\t\t\t//esto se hace para eliminar todos los elementos de la lista de cv y le añado el primero ke es seleccionar
\t\t\t\$('#form_cv').empty();
\t\t\t\$('#form_cv').append('<option value=\\'\\'>Seleccionar</option>');
\t\t\t//////////////////////////

\t\t\t//getJson obtine un diccionario codificado en Json ke viene de la accion myUrl, data es el Json devuelto por la acción
\t\t\t\$.getJSON( myUrl, function (data){ 
\t\t\t\t//recorre cada uno de los elementos ke se encuentra en data y luego le añade cada option al select
\t    \t\$.each(data, function(key, valor){
\t\t\t\t\t\$('#form_cv').append('<option value='+valor.id_cv+'>'+valor.cv+'</option>');
       \t});
      });

      if(\$('#form_parroquia').val() == \"todos\"){
\t\t\t\t\$('#form_cv').empty();
\t\t\t\t\$('#form_cv').append('<option value=\\'\\'>Seleccionar</option>');
      \t\$('#form_cv').append('<option value=\\'todos\\' selected >Todos</option>');
      }
      else{
\t\t\t\t\$('#form_cv').empty();
\t\t\t\t\$('#form_cv').append('<option value=\\'\\'>Seleccionar</option>');
\t\t\t\t\$('#form_cv').append('<option value=\\'todos\\' >Todos</option>');
      }

    });

\t});
</script>
";
    }

    public function getTemplateName()
    {
        return "EncuestasBundle:Encuestas:datosEncuestaSufragio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 171,  247 => 135,  201 => 92,  195 => 88,  192 => 87,  189 => 86,  187 => 85,  178 => 79,  170 => 74,  147 => 53,  144 => 52,  133 => 50,  128 => 49,  126 => 48,  118 => 42,  112 => 38,  101 => 36,  96 => 35,  90 => 30,  88 => 29,  84 => 27,  63 => 12,  56 => 7,  52 => 6,  45 => 5,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
