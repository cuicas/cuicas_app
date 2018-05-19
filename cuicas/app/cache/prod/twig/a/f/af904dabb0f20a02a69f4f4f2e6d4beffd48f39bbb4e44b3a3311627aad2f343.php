<?php

/* EncuestasBundle:Encuestas:encuestastotales.html.twig */
class __TwigTemplate_af904dabb0f20a02a69f4f4f2e6d4beffd48f39bbb4e44b3a3311627aad2f343 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "EncuestasBundle:Encuestas:encuestastotales.html.twig", 1);
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
        echo "Encuestas Totales";
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        echo "Encuestas";
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 6
            echo "    <script language=Javascript>
    \$(document).ready(function(){
      \$(this).tab('show');
      BootstrapDialog.show({
        title: 'Mensaje',
        message: ('";
            // line 11
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
        // line 26
        echo "
<div class=\"col-xs-12 col-md-8 col-md-offset-2\">
\t<div class=\"row\">
\t\t<div class=\"col-xs-12\">
\t\t\t<table id=\"tabla1\" class=\"table stacktable table-hover\" border=\"0\">
\t\t\t\t<thead>
\t\t\t\t\t<th>Encuestas</th>
\t\t\t\t\t<th>Tipo</th>
\t\t\t\t\t<th>Configurar</th>
\t\t\t\t\t<th>Realizar</th>
\t\t\t\t\t<th>Mapa</th>
\t\t\t\t\t";
        // line 37
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array") != "ROLE_USUARIO")) {
            // line 38
            echo "\t\t\t\t\t<th></th>
\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t</thead>                 
    \t\t\t";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["encuesta"]) {
            // line 42
            echo "\t  \t\t\t\t<tr>\t
\t\t\t\t\t\t\t<td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["encuesta"], "nombreEncuesta", array()), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t";
            // line 45
            $context["tipo"] = $this->getAttribute($context["encuesta"], "tipoEncuesta", array());
            // line 46
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["encuesta"], "tipoEncuesta", array()) == "general")) {
                // line 47
                echo "\t\t\t\t\t\t\t\t";
                $context["tipo"] = "Socio-Política";
                // line 48
                echo "\t\t\t\t\t\t\t";
            }
            // line 49
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["encuesta"], "tipoEncuesta", array()) == "estatal")) {
                // line 50
                echo "\t\t\t\t\t\t\t\t";
                $context["tipo"] = "Sufragio - Por Estado";
                // line 51
                echo "\t\t\t\t\t\t\t";
            }
            // line 52
            echo "
\t\t\t\t\t\t\t";
            // line 53
            if (($this->getAttribute($context["encuesta"], "tipoEncuesta", array()) == "alcalde")) {
                // line 54
                echo "\t\t\t\t\t\t\t\t";
                $context["tipo"] = "Sufragio - Por Municipio";
                // line 55
                echo "\t\t\t\t\t\t\t";
            }
            // line 56
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["encuesta"], "tipoEncuesta", array()) == "circuito")) {
                // line 57
                echo "\t\t\t\t\t\t\t\t";
                $context["tipo"] = "Sufragio - Por Circuito";
                // line 58
                echo "\t\t\t\t\t\t\t";
            }
            // line 59
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["encuesta"], "tipoEncuesta", array()) == "fase1")) {
                // line 60
                echo "\t\t\t\t\t\t\t\t";
                $context["tipo"] = "Sufragio - 1era Fase";
                // line 61
                echo "\t\t\t\t\t\t\t";
            }
            // line 62
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["encuesta"], "tipoEncuesta", array()) == "fase2")) {
                // line 63
                echo "\t\t\t\t\t\t\t\t";
                $context["tipo"] = "Sufragio - 2da Fase";
                // line 64
                echo "\t\t\t\t\t\t\t";
            }
            // line 65
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["encuesta"], "tipoEncuesta", array()) == "voto-lista")) {
                // line 66
                echo "\t\t\t\t\t\t\t\t";
                $context["tipo"] = "Sufragio - Por Circuito - Voto Lista";
                // line 67
                echo "\t\t\t\t\t\t\t";
            }
            // line 68
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["encuesta"], "tipoEncuesta", array()) == "comando")) {
                // line 69
                echo "\t\t\t\t\t\t\t\t";
                $context["tipo"] = "Comando de campaña";
                // line 70
                echo "\t\t\t\t\t\t\t";
            }
            // line 71
            echo "\t\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, (isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td align=\"center\"> 
\t\t\t\t\t\t\t\t";
            // line 73
            if ((($this->getAttribute($context["encuesta"], "tipoEncuesta", array()) == "general") || ($this->getAttribute($context["encuesta"], "tipoEncuesta", array()) == "comando"))) {
                // line 74
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_crearPreguntas", array("id_encuesta" => $this->getAttribute($context["encuesta"], "id", array()))), "html", null, true);
                echo "\" class=\"clsBoton\">Preguntas</a>
\t\t\t\t\t\t\t\t";
            }
            // line 76
            echo "\t\t\t\t\t\t\t\t";
            if ((($this->getAttribute($context["encuesta"], "tipoEncuesta", array()) == "fase1") || ($this->getAttribute($context["encuesta"], "tipoEncuesta", array()) == "fase2"))) {
                // line 77
                echo "\t\t\t\t\t\t\t\t\t<a href= \"\" onclick=\"javascript:\$(document).ready(function(){\$(this).tab('show'); BootstrapDialog.show({title: 'Mensaje',message: ('No se pueden configurar las preguntas'),buttons: [{id: 'btn-ok',label: 'Aceptar', cssClass: 'btn btn-default', autospin: false, action: function(dialogRef){dialogRef.close();}}]})}); event.preventDefault();\" class=\"clsBoton\">Preguntas</a>
\t\t\t\t\t\t\t\t";
            }
            // line 79
            echo "
\t\t\t\t\t\t\t\t";
            // line 80
            if ((((($this->getAttribute($context["encuesta"], "tipoEncuesta", array()) == "alcalde") || ($this->getAttribute($context["encuesta"], "tipoEncuesta", array()) == "circuito")) || ($this->getAttribute($context["encuesta"], "tipoEncuesta", array()) == "estatal")) || ($this->getAttribute($context["encuesta"], "tipoEncuesta", array()) == "voto-lista"))) {
                // line 81
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_cargar_candidato", array("id_encuesta" => $this->getAttribute($context["encuesta"], "id", array()))), "html", null, true);
                echo "\" class=\"clsBoton\">Candidatos</a>
\t\t\t\t\t\t\t\t";
            }
            // line 83
            echo "
\t    \t\t\t\t<td align=\"center\">
\t    \t\t\t\t\t<a href=";
            // line 85
            if (($this->getAttribute($context["encuesta"], "tipoEncuesta", array()) == "general")) {
                echo "\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_datosEncuesta", array("id_encuesta" => $this->getAttribute($context["encuesta"], "id", array()))), "html", null, true);
                echo "\" 
\t    \t\t\t\t\t";
            } else {
                // line 87
                echo "\t\t    \t\t\t\t\t";
                if (($this->getAttribute($context["encuesta"], "tipoEncuesta", array()) == "comando")) {
                    echo "\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_datosEncuestaComando", array("id_encuesta" => $this->getAttribute($context["encuesta"], "id", array()))), "html", null, true);
                    echo "\" 
\t\t    \t\t\t\t\t";
                } else {
                    // line 89
                    echo "\t\t    \t\t\t\t\t\t\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_datosEncuestaSufragio", array("id_encuesta" => $this->getAttribute($context["encuesta"], "id", array()))), "html", null, true);
                    echo "\"
\t\t    \t\t\t\t\t";
                }
                // line 91
                echo "\t    \t\t\t\t\t";
            }
            if (($this->getAttribute($context["encuesta"], "definitiva", array()) == 0)) {
                echo " title='La encuesta no es definitiva' alt='La encuesta no es definitiva' onclick=\"javascript:\$(document).ready(function(){\$(this).tab('show'); BootstrapDialog.show({title: 'Mensaje',message: ('La encuesta no es definitiva'),buttons: [{id: 'btn-ok',label: 'Aceptar', cssClass: 'btn btn-default', autospin: false, action: function(dialogRef){dialogRef.close();}}]})}); event.preventDefault();\"";
            }
            echo " class=\"clsBoton\" >Encuesta</a> 


\t    \t\t\t\t</td>
\t    \t\t\t\t<td align=\"center\">
\t    \t\t\t\t\t<a href=";
            // line 96
            if ((($this->getAttribute($context["encuesta"], "tipoEncuesta", array()) == "circuito") || ($this->getAttribute($context["encuesta"], "tipoEncuesta", array()) == "voto-lista"))) {
                echo "\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mapas_circuito_ventana", array("id_encuesta" => $this->getAttribute($context["encuesta"], "id", array()))), "html", null, true);
                echo "\" class=\"clsVentanaIFrame clsBoton1\" 
\t    \t\t\t\t\t";
            } elseif ((($this->getAttribute(            // line 97
$context["encuesta"], "tipoEncuesta", array()) == "estatal") || ($this->getAttribute($context["encuesta"], "tipoEncuesta", array()) == "alcalde"))) {
                echo "\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mapas_cargar_proyecto_ventana", array("id_encuesta" => $this->getAttribute($context["encuesta"], "id", array()))), "html", null, true);
                echo "\" class=\"clsVentanaIFrame clsBoton1\" ";
            } else {
                echo " \"\" title='Esta encuesta no tiene asociado un mapa' alt='Esta encuesta no tiene asociado un mapa' onclick=\"javascript:\$(document).ready(function(){\$(this).tab('show'); BootstrapDialog.show({title: 'Mensaje',message: ('Esta encuesta no tiene configurado un Mapa'),buttons: [{id: 'btn-ok',label: 'Aceptar', cssClass: 'btn btn-default', autospin: false, action: function(dialogRef){dialogRef.close();}}]})}); event.preventDefault();\"
\t    \t\t\t\t\t";
            }
            // line 98
            echo " rel=\"SESM - Estado Bolivariano de M&eacute;rida\" >Ver</a> 
\t    \t\t\t\t</td>
\t    \t\t\t\t";
            // line 100
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array") != "ROLE_USUARIO")) {
                // line 101
                echo "\t    \t\t\t\t<td align=\"center\">
\t    \t\t\t\t \t<a href=\"";
                // line 102
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_eliminar", array("id_encuesta" => $this->getAttribute($context["encuesta"], "id", array()))), "html", null, true);
                echo "\" class=\"clsBoton\" alt=\"confirma eliminar\" onclick=\"javascript:var agree=confirm('¿Está seguro que desea eliminar esta encuesta y todos sus datos? '); if (agree) return true; else return false;\">Eliminar</a>
\t    \t\t\t\t</td>
\t    \t\t\t\t";
            }
            // line 105
            echo "\t    \t\t\t</tr>
    \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['encuesta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "\t\t\t</table>
\t\t</div>
\t</div>
</div>

<div class=\"col-xs-12 col-md-5 col-md-offset-5 text-right\">
\t<div class=\"row\">
\t\t<div class=\"col-xs-12\">
\t\t\t";
        // line 115
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
\t\t</div>
\t</div>
</div>

<script>
\$(document).ready(function() {
\t\$('#tabla1').stacktable();
});
</script>

";
    }

    public function getTemplateName()
    {
        return "EncuestasBundle:Encuestas:encuestastotales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 115,  294 => 107,  287 => 105,  281 => 102,  278 => 101,  276 => 100,  272 => 98,  263 => 97,  257 => 96,  245 => 91,  239 => 89,  231 => 87,  224 => 85,  220 => 83,  214 => 81,  212 => 80,  209 => 79,  205 => 77,  202 => 76,  196 => 74,  194 => 73,  188 => 71,  185 => 70,  182 => 69,  179 => 68,  176 => 67,  173 => 66,  170 => 65,  167 => 64,  164 => 63,  161 => 62,  158 => 61,  155 => 60,  152 => 59,  149 => 58,  146 => 57,  143 => 56,  140 => 55,  137 => 54,  135 => 53,  132 => 52,  129 => 51,  126 => 50,  123 => 49,  120 => 48,  117 => 47,  114 => 46,  112 => 45,  107 => 43,  104 => 42,  100 => 41,  97 => 40,  93 => 38,  91 => 37,  78 => 26,  57 => 11,  50 => 6,  45 => 5,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
