<?php

/* UsuarioBundle:Default:usuarios.html.twig */
class __TwigTemplate_77aba1ffb9995d0ee16f7b885c1b0e3c543c029e9822565210476f8341bd7674 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "UsuarioBundle:Default:usuarios.html.twig", 1);
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
        echo "Usuarios Totales";
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        echo "Usuarios Totales";
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 6
            echo "\t\t<script language=Javascript>
\t\t\t\$(document).ready(function(){
\t\t\t\t\$(this).tab('show');
\t\t\t\tBootstrapDialog.show({
\t\t\t\t\ttitle: 'Mensaje',
\t\t\t\t\tmessage: ('";
            // line 11
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
        // line 26
        echo "\t<div class=\"col-xs-12 col-md-8 col-md-offset-2\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<table id=\"tabla5\" class=\"table stacktable\" border=\"0\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<th >Usuarios Registrados</th>
\t\t\t\t\t\t<th>Rol</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</thead>
\t\t\t";
        // line 36
        echo "\t\t\t<tbody>
\t\t\t";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 38
            echo "\t\t\t\t<tr>\t
\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, $context["usuario"], "html", null, true);
            echo "</td>
\t\t\t\t\t";
            // line 40
            $context["rol"] = twig_template_get_attributes($this, $context["usuario"], "getRol", array());
            // line 41
            echo "\t\t\t\t\t";
            if ((twig_template_get_attributes($this, $context["usuario"], "getRol", array()) == "ROLE_ADMIN")) {
                // line 42
                echo "\t\t\t\t\t\t";
                $context["rol"] = "Administrador";
                // line 43
                echo "\t\t\t\t\t";
            }
            // line 44
            echo "\t\t\t\t\t";
            if ((twig_template_get_attributes($this, $context["usuario"], "getRol", array()) == "ROLE_USUARIO")) {
                // line 45
                echo "\t\t\t\t\t\t";
                $context["rol"] = "Usuario";
                // line 46
                echo "\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t\t";
            if ((twig_template_get_attributes($this, $context["usuario"], "getRol", array()) == "ROLE_SUPERVISOR")) {
                // line 48
                echo "\t\t\t\t\t\t";
                $context["rol"] = "Supervisor";
                // line 49
                echo "\t\t\t\t\t";
            }
            // line 50
            echo "\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, (isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")), "html", null, true);
            echo "</td>
                                        <td><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_eliminar", array("usuario_id" => twig_template_get_attributes($this, $context["usuario"], "id", array()))), "html", null, true);
            echo "\" class=\"clsBoton\" title=\"Eliminar Usuario\" alt=\"confirma eliminar\" onclick=\"javascript:var agree=confirm('¿Está seguro que desea eliminar este usuario? '); if (agree) return true; else return false;\" class=\"clsBoton\">Eliminar</a> </td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t\t</tbody>
\t\t</table> 
\t</table>
\t</div>
\t</div>
\t</div>
\t<div class=\"col-xs-12 col-md-5 col-md-offset-5 text-right\">
\t<div class=\"row\">
\t\t<div class=\"col-xs-12\">
\t\t\t";
        // line 63
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
\t\t</div>
\t</div>
</div>
<script>
\$(document).ready(function() {
\t\$('#tabla5').stacktable();
});
</script>
\t";
        // line 72
        $context["usuario"] = twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array());
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:usuarios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 72,  157 => 63,  146 => 54,  137 => 51,  132 => 50,  129 => 49,  126 => 48,  123 => 47,  120 => 46,  117 => 45,  114 => 44,  111 => 43,  108 => 42,  105 => 41,  103 => 40,  99 => 39,  96 => 38,  92 => 37,  89 => 36,  78 => 26,  57 => 11,  50 => 6,  45 => 5,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
