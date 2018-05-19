<?php

/* EncuestasBundle:Encuestas:configurarEncuesta.html.twig */
class __TwigTemplate_1433539e0ded9c30df921e7a9ffbc633caf4e1da02539e01028f28d4f6921acf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "EncuestasBundle:Encuestas:configurarEncuesta.html.twig", 1);
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
        echo "Configurar Encuesta";
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "nombreEncuesta", array()), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "
";
        // line 7
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_configurar", array("id_encuesta" => $this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" onsubmit=\"return\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'enctype');
        echo " novalidate >
\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 9
            echo "\t\t<script language=Javascript>
\t\t/*\$(document).ready(function(){
\t\t\t\$(this).tab('show');
\t\t\tBootstrapDialog.show({
\t\t\t\ttitle: 'Mensaje',
\t\t\t\tmessage: ('";
            // line 14
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
\t\t});*/
\t\t</script>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t<div class=\"col-xs-12 col-md-4 col-md-offset-2\">
\t\t";
        // line 30
        $context["total"] = (isset($context["cantidad"]) ? $context["cantidad"] : $this->getContext($context, "cantidad"));
        echo "\t
\t\t\t";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["preguntas"]) {
            echo "\t\t
\t\t\t";
            // line 32
            $context["i"] = $this->getAttribute($context["loop"], "index", array());
            // line 33
            echo "\t\t\t\t";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) <= (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")))) {
                // line 34
                echo "\t\t\t\t\t";
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 1)) {
                    // line 35
                    echo "\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<strong><label>Pregunta Nro 1</label> </strong>
\t\t\t\t\t\t\t\t<input name=\"preguntastype[pregunta1]\" id=\"preguntastype_pregunta1\" class=\"form-control input-sm\" style=\"height:25px; resize:none;\" placeholder=\"\" value=\"¿El encuestado respondio la llamada?\" readonly=\"readonly\"><!-- ¿El encuestado respondio la llamada? -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 42
                echo "\t\t\t\t";
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 2)) {
                    // line 43
                    echo "\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<strong><label>Pregunta Nro 2</label></strong>
\t\t\t\t\t\t\t\t<input name=\"preguntastype[pregunta2]\" id=\"preguntastype_pregunta2\" class=\"form-control input-sm\" style=\"height:25px; resize:none;\" placeholder=\"\" value=\"Identificaci&oacute;n\" readonly=\"readonly\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 50
                echo "\t\t\t\t";
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 3)) {
                    // line 51
                    echo "\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<strong><label>Pregunta Nro 3</label></strong>
\t\t\t\t\t\t\t\t<input name=\"preguntastype[pregunta3]\" id=\"preguntastype_pregunta3\" class=\"form-control input-sm\" style=\"height:25px; resize:none;\" placeholder=\"\" value=\"Equipo/Cargo/Misi&oacute;n/Centro de Votaci&oacute;n\" readonly=\"readonly\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 58
                echo "\t\t\t";
            }
            // line 59
            echo "\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['preguntas'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t</div>


\t<div class=\"col-xs-12 col-md-4\">
\t\t";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["preguntas"]) {
            echo "\t\t
\t\t\t";
            // line 65
            $context["i"] = $this->getAttribute($context["loop"], "index", array());
            // line 66
            echo "\t\t\t\t";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) <= (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")))) {
                // line 67
                echo "\t\t\t\t";
                if ((((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 4) || ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 5))) {
                    // line 68
                    echo "\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<strong>";
                    // line 70
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["preguntas"], 'label');
                    echo "</strong>
\t\t\t\t\t\t\t\t";
                    // line 71
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["preguntas"], 'widget');
                    echo "
\t\t\t\t\t\t\t\t<div class=\"error\">";
                    // line 72
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["preguntas"], 'errors');
                    echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 76
                echo "\t\t\t";
            }
            // line 77
            echo "\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['preguntas'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<strong><label>¿La encuesta es definitiva?</label></strong>
\t\t\t\t";
        // line 81
        $context["checked"] = "";
        // line 82
        echo "\t\t\t\t";
        $context["checkedNo"] = "";
        // line 83
        echo "\t\t\t\t";
        if (($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "definitiva", array()) == "true")) {
            // line 84
            echo "\t\t\t\t\t";
            $context["checked"] = "checked";
            // line 85
            echo "\t\t\t\t\t
\t\t\t\t";
        } else {
            // line 87
            echo "\t\t\t\t\t";
            $context["checkedNo"] = "checked";
            // line 88
            echo "\t\t\t\t";
        }
        // line 89
        echo "\t\t\t\tSi&nbsp;&nbsp;<input type=\"radio\" class=\"validate[required]\" name=\"form[definitiva]\" value=\"si\" ";
        echo twig_escape_filter($this->env, (isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked")), "html", null, true);
        echo ">&nbsp;&nbsp; No&nbsp;&nbsp; <input type=\"radio\" class=\"validate[required]\" name=\"form[definitiva]\" value=\"no\" ";
        echo twig_escape_filter($this->env, (isset($context["checkedNo"]) ? $context["checkedNo"] : $this->getContext($context, "checkedNo")), "html", null, true);
        echo ">
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"col-xs-12 col-md-12\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<center><input class=\"fueraoverflow btn btn-default\" type=\"submit\" value=\"Guardar\"/> <a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("encuestas_totales", array("tipoEncuesta" => "general"));
        echo "\"><input class=\"fueraoverflow btn btn-default\" type=\"button\" value=\"Cancelar\" name=\"form[boton_cancelar]\" /></a></center>
\t\t\t</div>
\t\t</div>
\t</div>
\t\t\t\t
\t";
        // line 173
        echo "\t\t
\t\t
\t\t";
        // line 175
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "_token", array()), 'widget');
        echo "
\t\t";
        // line 177
        echo "\t</form>
\t<script>

function validar(){
\t
\t";
        // line 182
        $context["total"] = (isset($context["cantidad"]) ? $context["cantidad"] : $this->getContext($context, "cantidad"));
        echo "\t
\tvar todo_correcto = true;
\tvar pregunta='';
\t";
        // line 185
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["preguntas"]) {
            echo "\t
\t\t";
            // line 186
            $context["i"] = $this->getAttribute($context["loop"], "index", array());
            // line 187
            echo "\t\t\t";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) <= (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")))) {
                // line 188
                echo "\t\t\t\t\t
\t\t\t\tif(!document.getElementById(\"";
                // line 189
                echo twig_escape_filter($this->env, ("si" . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
                echo "\").checked && !document.getElementById(\"";
                echo twig_escape_filter($this->env, ("no" . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
                echo "\").checked && !document.getElementById(\"";
                echo twig_escape_filter($this->env, ("norespondio" . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
                echo "\").checked && !document.getElementById(\"";
                echo twig_escape_filter($this->env, ("cambiodenumero" . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
                echo "\").checked && !document.getElementById(\"";
                echo twig_escape_filter($this->env, ("dicenoser" . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
                echo "\").checked){
\t\t\t    \ttodo_correcto = false;
\t\t\t    \tif (pregunta==''){
\t\t\t    \t  pregunta = ";
                // line 192
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo ";
\t\t\t    \t}
\t\t\t      \t   else{
\t\t\t    \t    pregunta = pregunta+ \",\"+";
                // line 195
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo ";
\t\t\t    \t   }
\t\t\t    }
 \t\t\t";
            }
            // line 199
            echo "\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['preguntas'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "  

\tif(!todo_correcto){
\t\talert('Debe seleccionar al menos una Respuesta en la pregunta:'+pregunta);
\t\treturn false;
\t}
\t    return true;
}

</script>
";
    }

    public function getTemplateName()
    {
        return "EncuestasBundle:Encuestas:configurarEncuesta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 199,  358 => 195,  352 => 192,  338 => 189,  335 => 188,  332 => 187,  330 => 186,  311 => 185,  305 => 182,  298 => 177,  294 => 175,  290 => 173,  282 => 97,  268 => 89,  265 => 88,  262 => 87,  258 => 85,  255 => 84,  252 => 83,  249 => 82,  247 => 81,  242 => 78,  228 => 77,  225 => 76,  218 => 72,  214 => 71,  210 => 70,  206 => 68,  203 => 67,  200 => 66,  198 => 65,  179 => 64,  173 => 60,  159 => 59,  156 => 58,  147 => 51,  144 => 50,  135 => 43,  132 => 42,  123 => 35,  120 => 34,  117 => 33,  115 => 32,  96 => 31,  92 => 30,  89 => 29,  68 => 14,  61 => 9,  57 => 8,  50 => 7,  47 => 5,  44 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
