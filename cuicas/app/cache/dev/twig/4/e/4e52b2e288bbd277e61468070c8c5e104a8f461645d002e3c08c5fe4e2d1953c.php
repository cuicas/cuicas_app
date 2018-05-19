<?php

/* MapasEstadisticosBundle:Default:cartografiaVentana.html.twig */
class __TwigTemplate_4e52b2e288bbd277e61468070c8c5e104a8f461645d002e3c08c5fe4e2d1953c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('title', $context, $blocks);
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        $this->displayBlock('cuerpo', $context, $blocks);
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/marco.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fondo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/solapamiento.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/solapamiento_municipios.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/ventanas-modales.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

";
    }

    // line 11
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 12
        echo "

\t 
</div>
<div class=\"logo1\">
<div class=\"botones_menu\">


";
        // line 21
        echo " ";
        if (((isset($context["id_parroquia"]) ? $context["id_parroquia"] : $this->getContext($context, "id_parroquia")) == 1)) {
            // line 22
            echo "
<div class=\"botones_menu\">

<a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 1));
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/regresar_3.png"), "html", null, true);
            echo "\" alt=\"Regresar\" title=\"Regresar\" border=\"0\"></a> 

</div>

   <div align=\"center\"></a><a href=\"\"><img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/cartografia/UBCH/1.jpg"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"parroquia\"></a></div>
</div>
";
        }
        // line 31
        echo " 

";
        // line 33
        if (((isset($context["id_parroquia"]) ? $context["id_parroquia"] : $this->getContext($context, "id_parroquia")) == 2)) {
            // line 34
            echo "
<div class=\"botones_menu\">
<a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 2));
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/regresar_3.png"), "html", null, true);
            echo "\" alt=\"Regresar\" title=\"Regresar\" border=\"0\"></a> 
</div>

   <div align=\"center\"></a><a href=\"\"><img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/cartografia/UBCH/2.jpg"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"parroquia\"></a></div>
</div>
";
        }
        // line 41
        echo " 
";
        // line 42
        if (((isset($context["id_parroquia"]) ? $context["id_parroquia"] : $this->getContext($context, "id_parroquia")) == 3)) {
            // line 43
            echo "
<div class=\"botones_menu\">
<a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 3));
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/regresar_3.png"), "html", null, true);
            echo "\" alt=\"Regresar\" title=\"Regresar\" border=\"0\"></a> 
</div>

   <div align=\"center\"></a><a href=\"\"><img src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/cartografia/UBCH/3.jpg"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"parroquia\"></a></div>
</div>
";
        }
        // line 50
        echo " 
";
        // line 51
        if (((isset($context["id_parroquia"]) ? $context["id_parroquia"] : $this->getContext($context, "id_parroquia")) == 4)) {
            // line 52
            echo "
<div class=\"botones_menu\">
<a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 4));
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/regresar_3.png"), "html", null, true);
            echo "\" alt=\"Regresar\" title=\"Regresar\" border=\"0\"></a> 
</div>

   <div align=\"center\"></a><a href=\"\"><img src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/cartografia/UBCH/4.jpg"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"parroquia\"></a></div>
</div>
";
        }
        // line 59
        echo " 
";
        // line 60
        if (((isset($context["id_parroquia"]) ? $context["id_parroquia"] : $this->getContext($context, "id_parroquia")) == 5)) {
            // line 61
            echo "
<div class=\"botones_menu\">
<a href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 5));
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/regresar_3.png"), "html", null, true);
            echo "\" alt=\"Regresar\" title=\"Regresar\" border=\"0\"></a> 
</div>

   <div align=\"center\"></a><a href=\"\"><img src=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/cartografia/UBCH/5.jpg"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"parroquia\"></a></div>
</div>
";
        }
        // line 68
        echo " 
";
        // line 69
        if (((isset($context["id_parroquia"]) ? $context["id_parroquia"] : $this->getContext($context, "id_parroquia")) == 6)) {
            // line 70
            echo "
<div class=\"botones_menu\">
<a href=\"";
            // line 72
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 6));
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/regresar_3.png"), "html", null, true);
            echo "\" alt=\"Regresar\" title=\"Regresar\" border=\"0\"></a> 
</div>

   <div align=\"center\"></a><a href=\"\"><img src=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/cartografia/UBCH/6.jpg"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"parroquia\"></a></div>
</div>
";
        }
        // line 77
        echo " 
";
        // line 78
        if (((isset($context["id_parroquia"]) ? $context["id_parroquia"] : $this->getContext($context, "id_parroquia")) == 7)) {
            // line 79
            echo "
<div class=\"botones_menu\">
<a href=\"";
            // line 81
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 7));
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/regresar_3.png"), "html", null, true);
            echo "\" alt=\"Regresar\" title=\"Regresar\" border=\"0\"></a> 
</div>

   <div align=\"center\"></a><a href=\"\"><img src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/cartografia/UBCH/7.jpg"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"parroquia\"></a></div>
</div>
";
        }
        // line 86
        echo " 
";
        // line 87
        if (((isset($context["id_parroquia"]) ? $context["id_parroquia"] : $this->getContext($context, "id_parroquia")) == 8)) {
            // line 88
            echo "
<div class=\"botones_menu\">
<a href=\"";
            // line 90
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 8));
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/regresar_3.png"), "html", null, true);
            echo "\" alt=\"Regresar\" title=\"Regresar\" border=\"0\"></a> 
</div>

   <div align=\"center\"></a><a href=\"\"><img src=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/cartografia/UBCH/8.jpg"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"parroquia\"></a></div>
</div>
";
        }
        // line 95
        echo " 
";
        // line 96
        if (((isset($context["id_parroquia"]) ? $context["id_parroquia"] : $this->getContext($context, "id_parroquia")) == 9)) {
            // line 97
            echo "
<div class=\"botones_menu\">
<a href=\"";
            // line 99
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 9));
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/regresar_3.png"), "html", null, true);
            echo "\" alt=\"Regresar\" title=\"Regresar\" border=\"0\"></a> 
</div>

   <div align=\"center\"></a><a href=\"\"><img src=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/cartografia/UBCH/9.jpg"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"parroquia\"></a></div>
</div>
";
        }
        // line 104
        echo " 
";
        // line 114
        if (((isset($context["id_parroquia"]) ? $context["id_parroquia"] : $this->getContext($context, "id_parroquia")) == 11)) {
            // line 115
            echo "
<div class=\"botones_menu\">
<a href=\"";
            // line 117
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 11));
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/regresar_3.png"), "html", null, true);
            echo "\" alt=\"Regresar\" title=\"Regresar\" border=\"0\"></a> 
</div>

   <div align=\"center\"></a><a href=\"\"><img src=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/cartografia/UBCH/11.jpg"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"parroquia\"></a></div>
</div>
";
        }
        // line 122
        echo " 
";
        // line 123
        if (((isset($context["id_parroquia"]) ? $context["id_parroquia"] : $this->getContext($context, "id_parroquia")) == 12)) {
            // line 124
            echo "
<div class=\"botones_menu\">
<a href=\"";
            // line 126
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 12));
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/regresar_3.png"), "html", null, true);
            echo "\" alt=\"Regresar\" title=\"Regresar\" border=\"0\"></a> 
</div>

   <div align=\"center\"></a><a href=\"\"><img src=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/cartografia/UBCH/12.jpg"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"parroquia\"></a></div>
</div>
";
        }
        // line 131
        echo " 
";
        // line 132
        if (((isset($context["id_parroquia"]) ? $context["id_parroquia"] : $this->getContext($context, "id_parroquia")) == 13)) {
            // line 133
            echo "
<div class=\"botones_menu\">
<a href=\"";
            // line 135
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 13));
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/regresar_3.png"), "html", null, true);
            echo "\" alt=\"Regresar\" title=\"Regresar\" border=\"0\"></a> 
</div>

   <div align=\"center\"></a><a href=\"\"><img src=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/cartografia/13.jpg"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"parroquia\"></a></div>
</div>
";
        }
        // line 140
        echo " 
";
        // line 159
        echo "

";
    }

    public function getTemplateName()
    {
        return "MapasEstadisticosBundle:Default:cartografiaVentana.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  355 => 159,  352 => 140,  346 => 138,  338 => 135,  334 => 133,  332 => 132,  329 => 131,  323 => 129,  315 => 126,  311 => 124,  309 => 123,  306 => 122,  300 => 120,  292 => 117,  288 => 115,  286 => 114,  283 => 104,  277 => 102,  269 => 99,  265 => 97,  263 => 96,  260 => 95,  254 => 93,  246 => 90,  242 => 88,  240 => 87,  237 => 86,  231 => 84,  223 => 81,  219 => 79,  217 => 78,  214 => 77,  208 => 75,  200 => 72,  196 => 70,  194 => 69,  191 => 68,  185 => 66,  177 => 63,  173 => 61,  171 => 60,  168 => 59,  162 => 57,  154 => 54,  150 => 52,  148 => 51,  145 => 50,  139 => 48,  131 => 45,  127 => 43,  125 => 42,  122 => 41,  116 => 39,  108 => 36,  104 => 34,  102 => 33,  98 => 31,  92 => 29,  83 => 25,  78 => 22,  75 => 21,  65 => 12,  62 => 11,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  38 => 4,  35 => 3,  30 => 2,  26 => 11,  24 => 3,  22 => 2,);
    }
}
