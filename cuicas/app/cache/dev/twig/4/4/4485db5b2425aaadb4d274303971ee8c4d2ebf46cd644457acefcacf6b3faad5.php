<?php

/* UsuarioBundle:Default:resumenUsuarios.html.twig */
class __TwigTemplate_4485db5b2425aaadb4d274303971ee8c4d2ebf46cd644457acefcacf6b3faad5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "UsuarioBundle:Default:resumenUsuarios.html.twig", 1);
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
        echo "Usuarios";
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "
<div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 8
            echo "        <script language=Javascript>
\t\t\talert('";
            // line 9
            echo twig_escape_filter($this->env, $context["mensaje"], "html", null, true);
            echo "')
\t\t</script>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</div>

\t<div class=\"col-xs-12 col-md-8 col-md-offset-2\">
\t<div class=\"row\">
\t\t<div class=\"col-xs-12\">
<table id=\"tabla4\" class=\"table stacktable\" border=\"0\">
\t\t\t";
        // line 18
        if ( !twig_test_empty((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 19
            echo "\t\t\t<thead><tr>
\t\t";
            // line 21
            echo "\t\t    <th";
            if (twig_template_get_attributes($this, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "a.nombres"), "method")) {
                echo " class=\"sorted\"";
            }
            echo ">";
            echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre(s)", "a.nombres");
            echo "</th>
\t\t    <th";
            // line 22
            if (twig_template_get_attributes($this, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "a.nombres"), "method")) {
                echo " class=\"sorted\"";
            }
            echo ">";
            echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Apellido(S)", "a.apellidos");
            echo "</th>
\t\t\t<th>Cédula</th>
\t\t\t<th>Correo Electrónico</th>
\t\t\t  <th>Rol</th>
\t\t\t</thead>

\t\t\t";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["usuarioP"]) {
                // line 29
                echo "\t\t\t<tr ";
                if ((twig_template_get_attributes($this, $context["loop"], "index", array()) % 2 == 1)) {
                    echo "class=\"color\"";
                }
                echo ">
\t\t\t    <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["usuarioP"], "nombres", array()), "html", null, true);
                echo "</td>
\t\t\t    <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["usuarioP"], "apellidos", array()), "html", null, true);
                echo "</td>
\t\t\t    <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["usuarioP"], "cedula", array()), "html", null, true);
                echo "</td>
\t\t\t    <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["usuarioP"], "email", array()), "html", null, true);
                echo "</td>
\t\t\t    ";
                // line 34
                $context["rol"] = twig_template_get_attributes($this, $context["usuarioP"], "getRol", array());
                // line 35
                echo "\t\t\t\t\t";
                if ((twig_template_get_attributes($this, $context["usuarioP"], "getRol", array()) == "ROLE_ADMIN")) {
                    // line 36
                    echo "\t\t\t\t\t\t";
                    $context["rol"] = "Administrador";
                    // line 37
                    echo "\t\t\t\t\t";
                }
                // line 38
                echo "\t\t\t\t\t";
                if ((twig_template_get_attributes($this, $context["usuarioP"], "getRol", array()) == "ROLE_USUARIO")) {
                    // line 39
                    echo "\t\t\t\t\t\t";
                    $context["rol"] = "Usuario";
                    // line 40
                    echo "\t\t\t\t\t";
                }
                // line 41
                echo "\t\t\t\t\t";
                if ((twig_template_get_attributes($this, $context["usuarioP"], "getRol", array()) == "ROLE_SUPERVISOR")) {
                    // line 42
                    echo "\t\t\t\t\t\t";
                    $context["rol"] = "Supervisor";
                    // line 43
                    echo "\t\t\t\t\t";
                }
                // line 44
                echo "\t\t\t    <td>";
                echo twig_escape_filter($this->env, (isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")), "html", null, true);
                echo "</td>


\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuarioP'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t";
        }
        // line 49
        echo "\t\t";
        if (twig_test_empty((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 50
            echo "\t\t\t<tr>
\t\t\t    <td><center>No existe un usuario con estos Datos</center></td> 
\t\t  \t</tr>
\t\t";
        }
        // line 54
        echo "\t\t</table>
\t</div>
\t</div>
\t</div>
\t<div class=\"col-xs-12 col-md-12\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<center><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("sistema_Encuesta_principal_homepage");
        echo "\" > <input class=\"fueraoverflow btn btn-default\" type=\"button\" value=\"Salir\" /></a></center>
\t\t\t</div>
\t\t</div>
<script>
\$(document).ready(function() {
\t\$('#tabla4').stacktable();
});
</script>

\t";
        // line 70
        $context["usuario"] = twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array());
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:resumenUsuarios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 70,  209 => 61,  200 => 54,  194 => 50,  191 => 49,  188 => 48,  169 => 44,  166 => 43,  163 => 42,  160 => 41,  157 => 40,  154 => 39,  151 => 38,  148 => 37,  145 => 36,  142 => 35,  140 => 34,  136 => 33,  132 => 32,  128 => 31,  124 => 30,  117 => 29,  100 => 28,  87 => 22,  78 => 21,  75 => 19,  73 => 18,  65 => 12,  56 => 9,  53 => 8,  49 => 7,  45 => 5,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
