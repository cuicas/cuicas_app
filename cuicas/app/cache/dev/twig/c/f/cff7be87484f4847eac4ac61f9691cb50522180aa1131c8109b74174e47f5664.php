<?php

/* MapasEstadisticosBundle:Default:mapa2.html.twig */
class __TwigTemplate_cff7be87484f4847eac4ac61f9691cb50522180aa1131c8109b74174e47f5664 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "MapasEstadisticosBundle:Default:mapa2.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "
<div class=\"datos\">
";
        // line 8
        if (((isset($context["nombreCampos"]) ? $context["nombreCampos"] : $this->getContext($context, "nombreCampos")) != "")) {
            // line 9
            echo "  <table border=\"1\">
      <tr>
        ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nombreCampos"]) ? $context["nombreCampos"] : $this->getContext($context, "nombreCampos")));
            foreach ($context['_seq'] as $context["_key"] => $context["nombreCampo"]) {
                // line 12
                echo "          ";
                if (("" != $context["nombreCampo"])) {
                    // line 13
                    echo "            <td align=\"center\">";
                    echo twig_escape_filter($this->env, $context["nombreCampo"], "html", null, true);
                    echo "</td>
          ";
                }
                // line 15
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nombreCampo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "      </tr>
      <tr>
      ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["datosProyecto"]) ? $context["datosProyecto"] : $this->getContext($context, "datosProyecto")));
            foreach ($context['_seq'] as $context["_key"] => $context["campo"]) {
                // line 19
                echo "        ";
                if (("" != $context["campo"])) {
                    // line 20
                    echo "          <td align=\"center\">";
                    echo twig_escape_filter($this->env, $context["campo"], "html", null, true);
                    echo "</td>
        ";
                }
                // line 22
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "      </tr>

  </table>
";
        }
        // line 27
        echo "</div>
\t 
</div>
<div class=\"logo1\">
<div class=\"botones_menu\">

";
        // line 34
        if (((isset($context["id_eje"]) ? $context["id_eje"] : $this->getContext($context, "id_eje")) == 1)) {
            // line 35
            echo "<map name=\"Metropolitano\">

  <area shape=\"poly\" coords=\"344,198,351,174,348,163,367,159,392,147,420,127,449,124,404,111,377,106,357,102,334,110,343,129,338,139,328,147,307,155,286,156,264,167,306,177,325,195\" href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio", array("id_municipio" => 2));
            echo "\" \"title=\"Campo Elias\" alt=\"Campo Elias\">
   <area shape=\"poly\" coords=\"458,245,461,200,441,172,453,155,496,151,543,150,534,140,488,132,445,125,407,134,384,152,359,168,349,185,355,200,374,224,395,254,427,247\"  href=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio", array("id_municipio" => 1));
            echo "\" \"title=\"Libertador\" alt=\"Libertador\">
   <area shape=\"poly\" coords=\"282,161\" href=\"#\"><area shape=\"poly\" coords=\"251,176\" href=\"#\"><area shape=\"poly\" coords=\"274,161,295,153,330,146,344,130,332,117,339,94,313,82,297,70,278,80,258,83,241,99,227,110,213,119,191,121,186,142,209,156,244,164,257,174\"  href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio", array("id_municipio" => 3));
            echo "\" \"title=\"Sucre\" alt=\"Sucre\">
 <area shape=\"poly\" coords=\"489,228\"  href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio", array("id_municipio" => 2));
            echo "\" \"title=\"Santos Marquina\" alt=\"Santos Marquina\"> <area shape=\"poly\" coords=\"467,246,483,237,504,225,518,209,512,200,502,190,491,175,485,169,498,157,488,150,471,154,448,156,440,165,451,177,462,189,460,211,457,230,460,246\" href=\"detalle_municipio.php?id=2\" \"title=\"Santos Marquina\" alt=\"Santos Marquina\">

</map>
 <img src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Imagenes/merida/municipios/1/1.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"metropolitano\">
 <img src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Imagenes/merida/municipios/1/2.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"metropolitano\">
 <img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Imagenes/merida/municipios/1/3.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\"  class=\"metropolitano\">
 <img src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Imagenes/merida/municipios/1/4.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\"  class=\"metropolitano\">
 <img src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Imagenes/merida/Transparencia.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" class=\"metropolitano\" usemap=\"#Metropolitano\" >
      
    ";
        }
        // line 49
        echo " 
  

";
        // line 52
        if (((isset($context["id_eje"]) ? $context["id_eje"] : $this->getContext($context, "id_eje")) == 2)) {
            // line 53
            echo " <map name=\"panamericano\">

<area shape=\"poly\" coords=\"197,31,187,54,202,48,196,59,247,72,247,84,265,73,273,80,294,67,334,68,337,51,330,39,266,37,214,5,190,5\" href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio", array("id_municipio" => 5));
            echo "\" \"title=\"Alberto Adriani\" alt=\"Alberto Adriani\">



<area shape=\"poly\" coords=\"303,76,346,95,364,96,388,107,416,113,439,119,422,87,393,69,388,64,362,62,340,68\" href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio", array("id_municipio" => 6));
            echo "\" \"title=\"Andres Bello\" alt=\"Andres Bello\">



<area shape=\"poly\" coords=\"441,63,439,78,431,81,437,119,527,134,553,121,532,111,517,106,520,91,511,78,495,69,462,59\" href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio", array("id_municipio" => 7));
            echo "\" \"title=\"Caracciolo Parra Olmedo\" alt=\"Caracciolo Parra Olmedo\">



<area shape=\"poly\" coords=\"666,90,656,85,632,88,616,72,620,64,607,49,599,31,581,40,588,60,589,78,506,72,523,88,524,104,546,108,559,115,591,102,589,90,635,99,622,88,652,94,633,93\" href=\"detalle_municipio.php?id=8\" title=\"Tulio Febres Cordero\" alt=\"Tulio Febres Cordero\">


<area shape=\"poly\" coords=\"673,128,678,109,669,96,664,85,693,90,687,131\" href=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio", array("id_municipio" => 9));
            echo "\" \"title=\"Julio Cesar Salas\" alt=\"Julio Cesar Salas\">


<area shape=\"poly\" coords=\"614,80,606,89,597,80,596,97,582,106,551,122,532,135,546,144,575,145,610,149,628,133,640,115,647,105,673,111,667,95,645,97,628,87\" href=\"";
            // line 73
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio", array("id_municipio" => 10));
            echo "\" \"title=\"Justo Brice�o\" alt=\"Justo Brice�o\">

<area shape=\"poly\" coords=\"332,34,461,44,461,53,441,64,439,75,425,97,395,60,363,61,344,64,338,49\" href=\"";
            // line 75
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio", array("id_municipio" => 11));
            echo "\" \"title=\"Obispo Ramos de Lora\" alt=\"Obispo Ramos de Lora\">

</map>

<img src=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Imagenes/merida/municipios/2/5.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"panamericano\">
<img src=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Imagenes/merida/municipios/2/6.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\"  class=\"panamericano\">
<img src=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Imagenes/merida/municipios/2/7.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\"  class=\"panamericano\">
 <img src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Imagenes/merida/municipios/2/8.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\"  class=\"panamericano\">
 <img src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Imagenes/merida/municipios/2/9.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\"  class=\"panamericano\">
 <img src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Imagenes/merida/municipios/2/10.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\"  class=\"panamericano\">
<img src=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Imagenes/merida/municipios/2/11.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"panamericano\">
<img src=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Imagenes/merida/Transparencia.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" class=\"panamericano\" usemap=\"#panamericano\" >

";
        }
        // line 89
        echo " 
 ";
        // line 90
        if (((isset($context["id_eje"]) ? $context["id_eje"] : $this->getContext($context, "id_eje")) == 3)) {
            // line 91
            echo " <map name=\"Paramo\">

<area shape=\"poly\" coords=\"384,142,418,152,439,146,455,154,479,150,497,167,511,181,543,186,573,174,613,169,647,173,652,191,614,208,571,215,548,230,537,231,519,225,506,223,487,214,454,212,422,212,392,214,374,209,378,195,362,188,339,182,350,170,367,169,375,155\" href=\"";
            // line 93
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio", array("id_municipio" => 12));
            echo "\" title=\"Cardenal Quintero\" alt=\"Cardenal Quintero\">
<area shape=\"poly\" coords=\"457,15,504,29,501,45,496,51,513,60,541,63,546,77,552,89,567,101,562,131,559,149,537,149,516,147,500,145,469,150,429,150,388,146,382,127,374,107,395,91,418,82,429,50\" href=\"";
            // line 94
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio", array("id_municipio" => 13));
            echo "\" \"title=\"Miranda\" alt=\"Miranda\">
<area shape=\"poly\" coords=\"490,142,515,146,536,150,564,150,585,151,619,159,645,162,645,173,600,172,585,178,567,176,545,182,516,184,506,171,485,154\" href=\"";
            // line 95
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio", array("id_municipio" => 14));
            echo "\" \"title=\"Pueblo Llano\" alt=\"Pueblo Llano\">
<area shape=\"poly\" coords=\"334,102,319,106,306,102,278,102,246,100,216,100,187,97,159,106,132,123,124,136,143,156,157,180,165,200,191,207,195,222,189,232,222,240,248,244,274,253,301,259,326,252,340,243,332,218,368,211,374,194,350,187,332,182,341,175,359,163,375,150,375,128,364,100\" href=\"detalle_municipio.php?id=15\" \"title=\"Rangel\" alt=\"Rangel\">

</map>
  <img src=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Imagenes/merida/municipios/2/12.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"paramo\" >
  <img src=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Imagenes/merida/municipios/2/13.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"paramo\" >
  <img src=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Imagenes/merida/municipios/2/14.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"paramo\" >
    <img src=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Imagenes/merida/municipios/2/15.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"paramo\" >
\t<img src=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Imagenes/merida/Transparencia.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" class=\"paramo\"  usemap=\"#Paramo\">
 
 ";
        }
        // line 105
        echo " 
 
 ";
        // line 107
        if (((isset($context["id_eje"]) ? $context["id_eje"] : $this->getContext($context, "id_eje")) == 4)) {
            // line 108
            echo "<map name=\"Pueblos_Sur\">

<area shape=\"poly\" coords=\"171,137,158,119,128,112,98,107,70,109,56,123,52,149,63,164,90,172,104,179,110,159,116,146,143,141,160,142\"  href=\"detalle_municipio.php?id=18\" \"title=\"Guaraque\" alt=\"Guaraque\">
<area shape=\"poly\" coords=\"97,250,101,240,100,230,70,231,65,223,46,235,24,242,10,261,25,269,38,254,64,253,88,254\"  href=\"";
            // line 111
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio", array("id_municipio" => 19));
            echo "\" \"title=\"Padre Noguera\" alt=\"Padre Noguera\">
<area shape=\"poly\" coords=\"150,257,175,245,211,241,234,232,239,215,267,210,301,206,321,200,319,186,301,183,275,176,254,176,239,166,228,159,212,159,201,156,185,156,184,143,168,139,154,145,131,142,114,152,114,167,99,186,92,198,91,213,76,226,97,232,101,242,115,253\"  href=\"";
            // line 112
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio", array("id_municipio" => 17));
            echo "\" \"title=\"Arzobispo Chac�n\" alt=\"Arzobispo Chacooon\">
<area shape=\"poly\" coords=\"388,240,370,213,351,200,332,199,308,207,272,212,240,216,234,233,220,239,189,242,165,249,153,258,205,262,269,265,308,260,334,252,345,245,369,251,375,259,394,261\"  href=\"detalle_municipio.php?id=16\" \"title=\"Aricagua\" alt=\"Aricagua\">


</map>
<img src=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Imagenes/merida/municipios/2/16.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\"  class=\"sur\">
<img src=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Imagenes/merida/municipios/2/17.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"sur\">
<img src=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Imagenes/merida/municipios/2/18.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\"  class=\"sur\">
<img src=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Imagenes/merida/municipios/2/19.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\"  class=\"sur\">
<img src=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Imagenes/merida/Transparencia.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" class=\"sur\"  usemap=\"#Pueblos_Sur\">

";
        }
        // line 123
        echo " 

";
        // line 125
        if (((isset($context["id_eje"]) ? $context["id_eje"] : $this->getContext($context, "id_eje")) == 5)) {
            // line 126
            echo "<map name=\"Mocoties\">

<area shape=\"poly\" coords=\"243,107,279,101,322,97,359,104,356,121,345,143,317,135,260,146,255,131,244,126,226,122,233,116\" href=\"";
            // line 128
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio", array("id_municipio" => 20));
            echo "\" \"title=\"Rivas Davila\" alt=\"Rivas Davila\">

<area shape=\"poly\" coords=\"359,99,417,99,446,92,461,95,452,124,430,133,403,147,379,147,341,139,359,125,366,112\" href=\"";
            // line 130
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio", array("id_municipio" => 21));
            echo "\" \"title=\"Tovar\" alt=\"Tovar\">

<area shape=\"poly\" coords=\"490,75,554,87,542,100,556,117,536,133,518,157,484,161,465,172,435,185,408,151,438,131,464,102\" href=\"";
            // line 132
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio", array("id_municipio" => 22));
            echo "\" \"title=\"Antonio Pinto Salinas\" alt=\"Antonio Pinto Salinas\">

<area shape=\"poly\" coords=\"399,73,443,69,465,57,476,69,483,81,467,98,446,93,422,101,363,99,364,87,390,86\" href=\"detalle_municipio.php?id=23\" title=\"Zea\" alt=\"Zea\">
</map>
<img src=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Imagenes/merida/municipios/2/20.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"mocoties\" >
<img src=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Imagenes/merida/municipios/2/21.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"mocoties\" >
<img src=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Imagenes/merida/municipios/2/22.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"mocoties\"  >
<img src=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Imagenes/merida/municipios/2/23.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"mocoties\" >
<img src=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Imagenes/merida/Transparencia.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" usemap=\"#Mocoties\" class=\"mocoties\" >
 

";
        }
        // line 143
        echo " 

";
    }

    public function getTemplateName()
    {
        return "MapasEstadisticosBundle:Default:mapa2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 143,  370 => 140,  366 => 139,  362 => 138,  358 => 137,  354 => 136,  347 => 132,  342 => 130,  337 => 128,  333 => 126,  331 => 125,  327 => 123,  321 => 121,  317 => 120,  313 => 119,  309 => 118,  305 => 117,  297 => 112,  293 => 111,  288 => 108,  286 => 107,  282 => 105,  276 => 103,  272 => 102,  268 => 101,  264 => 100,  260 => 99,  253 => 95,  249 => 94,  245 => 93,  241 => 91,  239 => 90,  236 => 89,  230 => 86,  226 => 85,  222 => 84,  218 => 83,  214 => 82,  210 => 81,  206 => 80,  202 => 79,  195 => 75,  190 => 73,  184 => 70,  174 => 63,  167 => 59,  160 => 55,  156 => 53,  154 => 52,  149 => 49,  143 => 47,  139 => 46,  135 => 45,  131 => 44,  127 => 43,  121 => 40,  117 => 39,  113 => 38,  109 => 37,  105 => 35,  103 => 34,  95 => 27,  89 => 23,  83 => 22,  77 => 20,  74 => 19,  70 => 18,  66 => 16,  60 => 15,  54 => 13,  51 => 12,  47 => 11,  43 => 9,  41 => 8,  37 => 5,  34 => 4,  29 => 2,  11 => 1,);
    }
}
