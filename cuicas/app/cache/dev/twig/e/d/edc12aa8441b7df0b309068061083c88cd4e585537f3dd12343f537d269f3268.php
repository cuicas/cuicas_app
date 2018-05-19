<?php

/* EncuestasBundle:Encuestas:buscarFechaEncuestas.html.twig */
class __TwigTemplate_edc12aa8441b7df0b309068061083c88cd4e585537f3dd12343f537d269f3268 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "EncuestasBundle:Encuestas:buscarFechaEncuestas.html.twig", 1);
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
        echo "Buscar Encuestas por Fecha";
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        echo "Buscar Encuesta";
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("encuestas_buscar_fecha");
        echo "\" method=\"post\" id=\"forms\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'enctype');
        echo " >
    ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 7
            echo "        <script language=Javascript>
        \$(document).ready(function(){
            \$(this).tab('show');
            BootstrapDialog.show({
                title: 'Mensaje',
                message: ('";
            // line 12
            echo twig_escape_filter($this->env, $context["mensaje"], "html", null, true);
            echo "'),
                buttons: [{
                    id: 'btn-ok',   
                    //icon: 'glyphicon glyphicon-check',       
                    label: 'Aceptar',
                    cssClass: 'btn btn-default',
                    autospin: false,
                    action: function(dialogRef){    
                        dialogRef.close();
                    }
                }]
            })
        });
        </script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    <div class=\"col-xs-12 col-md-5 col-md-offset-5\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-7\">
                <strong>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "fechaInicio", array()), 'label');
        echo "</strong>
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "fechaInicio", array()), 'widget');
        echo "
                <div class=\"error\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "fechaInicio", array()), 'errors');
        echo "</div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-7\">
                <strong>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "fechaFinal", array()), 'label');
        echo "</strong>
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "fechaFinal", array()), 'widget');
        echo "
                <div class=\"error\">";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "fechaFinal", array()), 'errors');
        echo "</div>
            </div>
        </div>
        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'rest');
        echo "
        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'errors');
        echo "
    </div>
    <div class=\"col-xs-12 col-md-12\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <center><input class=\"fueraoverflow btn btn-default\" id=\"form_buscar\" type=\"submit\" value=\"Buscar\" /></center>
            </div> 
        </div>
    </div>
</form>
<script type=\"text/javascript\">
    \$(document).ready(function(){


          \$(\".datepicker\").datepicker({
        language: \"es\",
        autoclose: true,
        format: 'dd/mm/yyyy',
        orientation: \"top right\",
        todayHighlight: true
    });
    \$('.datepicker').datepicker({
        format: 'dd/mm/yyyy',
        }).on('changeDate', function(e){
            \$(this).datepicker('hide');
    });

        \$('#forms').submit(function(event){
            var fecha = \$('#form_fechaInicio').val();
            var fecha2 = \$('#form_fechaFinal').val();

            if (Date.parse(fecha) > Date.parse(fecha2)) {
                alert('La Fecha de Fin es menor que la Fecha de Inicio');
                event.preventDefault();
            }

        });
       
    });
    </script>
";
    }

    public function getTemplateName()
    {
        return "EncuestasBundle:Encuestas:buscarFechaEncuestas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 43,  119 => 42,  113 => 39,  109 => 38,  105 => 37,  97 => 32,  93 => 31,  89 => 30,  84 => 27,  63 => 12,  56 => 7,  52 => 6,  45 => 5,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
