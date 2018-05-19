<?php

/* MapasEstadisticosBundle:Default:detalle_municipio.html.twig */
class __TwigTemplate_597c42588640c8b542976f6d54f24b1d406f6918c02d95fb23205063058aa58d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "MapasEstadisticosBundle:Default:detalle_municipio.html.twig", 1);
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

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 4
        echo "\t
\t";
        // line 6
        echo "\t";
        // line 7
        echo "\t";
        // line 8
        echo "


\t 
</div>
<div class=\"logo1\">
<div class=\"botones_menu\">

<div class=\"mensaje_sesion\">
<?php echo \"Usuario: \".\$_SESSION['usuario'];?></div>
";
        // line 19
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 1)) {
            // line 20
            echo "  <map name=\"libertador\">
<area shape=\"poly\" coords=\"469,76,455,98,469,103,485,96,493,91,483,87\"  href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 1));
            echo "\" \" title=\"Antonio Spinetti Dini\" alt=\"Antonio Spinetti Dini\">

<area shape=\"poly\" coords=\"469,101,522,114,510,139,575,204,575,223,518,194,496,195,454,169,478,149,487,126\" href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 2));
            echo "\" \" title=\"Arias\" alt=\"Arias\">

<area shape=\"poly\" coords=\"430,78,406,96,434,105,438,92\" href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 3));
            echo "\" \" title=\"Caracciolo Parra Perez\" alt=\"Caracciolo Parra Perez\">

<area shape=\"poly\" coords=\"451,99,410,100,413,117,452,117,457,110\" href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 4));
            echo "\" \" title=\"Domingo Pe�a\" alt=\"Domingo Pe�a\">

<area shape=\"poly\" coords=\"422,95,470,98,470,112,425,105\" href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 5));
            echo "\" \" title=\"El Llano\" alt=\"El Llano\">

<area shape=\"poly\" coords=\"565,27,534,62,520,94,544,103,655,85,720,83,790,85,812,74,774,61,750,41,702,38,626,37,589,35\" href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 6));
            echo "\" \" title=\"Gonzalo Pic�n Febres\" alt=\"Gonzalo Pic�n Febres\">

<area shape=\"poly\" coords=\"468,110,416,112,408,102,351,91,330,112,318,115,332,141,365,149,389,164,430,174,455,165,468,151,482,128\" href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 7));
            echo "\" \" title=\"Jacinto PLaza\" alt=\"Jacinto Plaza\">

<area shape=\"poly\" coords=\"354,84,355,81,386,89,421,96,430,103,404,110,375,105,350,96\" href=\"";
            // line 35
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 8));
            echo "\" \" title=\"Juan Rodriguez Suarez\" alt=\"Juan Rodriguez Suarez\">

<area shape=\"poly\" coords=\"437,30,488,26,490,42,475,66,459,80,430,86,418,97,393,95,418,71,420,54\" href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 9));
            echo "\" \" title=\"Lasso de la Vega\" alt=\"Lasso de la Vega\">

<area shape=\"poly\" coords=\"438,79,468,69,470,88,466,100,439,103,425,102,432,92\" href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 10));
            echo "\" \" title=\"Mariano Pic�n Salas\" alt=\"Mariano Pic�n Salas\">

<area shape=\"poly\" coords=\"502,18,520,27,556,22,536,59,525,83,529,110,482,107,491,89,473,76,488,41,489,25\" href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 11));
            echo "\" \" title=\"Milla\" alt=\"Milla\">

<area shape=\"poly\" coords=\"369,85,420,51\" href=\"detalle_parroquia.php?id=12\" \" title=\"Sagrario\" alt=\"Sagrario\">
<area shape=\"poly\" coords=\"371,83,417,53,421,79,398,92,379,95\" href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 12));
            echo "\" \" title=\"Osuna Rodr�guez\" alt=\"Osuna Rodr�guez\">

<area shape=\"poly\" coords=\"459,96,455,115,473,120,478,101\" href=\"";
            // line 46
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 13));
            echo "\" \" title=\"Sagrario\" alt=\"Sagrario\">
 
<area shape=\"poly\" coords=\"429,171,379,161,342,146,323,121,263,131,266,163,257,215,260,233,287,225,303,246,331,266,349,298,367,319,374,351,386,379,417,386,475,353,544,354,558,328,554,286,564,237,526,245,461,259,435,252,416,236,401,222,392,188\" href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 14));
            echo "\" \" title=\"El Morro\" alt=\"El Morro\">

<area shape=\"poly\" coords=\"455,164,499,188,537,195,572,221,526,236,479,250,441,250,422,240,425,217,400,204,396,184,432,175\"href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 15));
            echo "\" \" title=\"Los Nevados\" alt=\"Los Nevados\">
</map>

  <img src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/1.png"), "html", null, true);
            echo "\" width=\"1031\" height=\"443\" border=\"0\"  class=\"libertador\" >
    <img src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/2.png"), "html", null, true);
            echo "\" width=\"1031\" height=\"443\" border=\"0\" class=\"libertador\" >
   <img src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/3.png"), "html", null, true);
            echo "\" width=\"1031\" height=\"443\" border=\"0\" class=\"libertador\">
    <img src=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/4.png"), "html", null, true);
            echo "\" width=\"1031\" height=\"443\" border=\"0\" class=\"libertador\" >
  <img src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/5.png"), "html", null, true);
            echo "\" width=\"1031\" height=\"443\" border=\"0\"  class=\"libertador\"  >
   <img src=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/6.png"), "html", null, true);
            echo "\" width=\"1031\" height=\"443\" border=\"0\"  class=\"libertador\" >
    <img src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/7.png"), "html", null, true);
            echo "\" width=\"1031\" height=\"443\" border=\"0\" class=\"libertador\">
    <img src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/8.png"), "html", null, true);
            echo "\" width=\"1031\" height=\"443\" border=\"0\"  class=\"libertador\">
    <img src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/9.png"), "html", null, true);
            echo "\" width=\"1031\" height=\"443\" border=\"0\"  class=\"libertador\" >
    <img src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/10.png"), "html", null, true);
            echo "\" width=\"1031\" height=\"443\" border=\"0\"  class=\"libertador\" >
    <img src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/11.png"), "html", null, true);
            echo "\" width=\"1031\" height=\"443\" border=\"0\"   class=\"libertador\">
   <img src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/12.png"), "html", null, true);
            echo "\" width=\"1031\" height=\"443\" border=\"0\"   class=\"libertador\">
   <img src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/13.png"), "html", null, true);
            echo "\" width=\"1031\" height=\"443\" border=\"0\"  class=\"libertador\" >
   <img src=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/14.png"), "html", null, true);
            echo "\" width=\"1031\" height=\"443\" border=\"0\"  class=\"libertador\" >
     <img src=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/15.png"), "html", null, true);
            echo "\" width=\"1031\" height=\"434\" border=\"0\" class=\"libertador\" >
\t <img src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/Transparencia.png"), "html", null, true);
            echo "\" width=\"1031\" height=\"434\" class=\"libertador\" usemap=\"#libertador\" >
   
   ";
        }
        // line 70
        echo " 
  
  ";
        // line 72
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 2)) {
            // line 73
            echo "  <map name=\"Santos_Marquina\">
<area shape=\"poly\" coords=\"156,260,280,263,345,246,372,249,390,264,397,260,375,217,345,200,296,210,256,214,241,214,232,236,199,242,170,244\"  href=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 16));
            echo "\" \" title=\"Tabay\" alt=\"Tabay\">
</map>
  <img src=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/municipios/2/16.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"santos_marquina\"  usemap=\"#Santos_Marquina\">
<img src=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/Transparencia.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" class=\"santos_marquina\" usemap=\"#Santos_Marquina\" >
  
   ";
        }
        // line 79
        echo " 
  
  ";
        // line 81
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 3)) {
            // line 82
            echo "  <map name=\"sucre\">
<area shape=\"poly\" coords=\"382,61,409,31,433,27,433,44,435,60,418,71,428,105,403,113,395,120,386,127,356,132,331,117,314,96,320,75,347,61,360,44\"  href=\"detalle_parroquia.php?id=17\" \" title=\"Chiguar�\" alt=\"Chiguar�\">

<area shape=\"poly\" coords=\"317,152,315,152,352,137,331,118,328,111,314,91,281,101,260,128,259,139,237,146,216,142,183,154,160,171,171,191,175,205,176,223,201,220,225,233,246,234,276,230,290,228,305,213,312,204,295,190,293,168,301,160\"  href=\"";
            // line 85
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 18));
            echo "\" \" title=\"Estanquez\" alt=\"Estanquez\">

<area shape=\"poly\" coords=\"507,120,459,116,440,110,423,106,405,115,392,123,344,141,373,166,392,150,456,179,503,162,515,148\"  href=\"";
            // line 87
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 19));
            echo "\" \" title=\"Lagunillas\" alt=\"Lagunillas\">

<area shape=\"poly\" coords=\"482,61,446,46,434,28,432,52,431,67,420,71,425,95,441,114,462,118,506,122,534,109,541,94,527,84\"  href=\"";
            // line 89
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 20));
            echo "\" \" title=\"La Trampa\" alt=\"La Trampa\">

<area shape=\"poly\" coords=\"456,179,398,149,380,163,346,142,297,164,293,188,318,203,297,229,303,250,308,264,311,270,349,266,345,250,365,237,404,236,413,223,429,213,447,197\"  href=\"";
            // line 91
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 21));
            echo "\" \" title=\"Pueblo Nuevo del Sur\" alt=\"Pueblo Nuevo del Sur\">

<area shape=\"poly\" coords=\"418,227,450,221,510,209,519,194,531,176,539,154,518,151,485,171,458,177,449,202\"  href=\"detalle_parroquia.php?id=22\" \" title=\"San Juan\" alt=\"San Juan\">
</map>
  <img src=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/17.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\"  class=\"municipio\">
   <img src=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/18.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\"  class=\"municipio\">
    <img src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/19.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\"  class=\"municipio\">
\t<img src=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/20.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"municipio\">
\t <img src=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/21.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"municipio\">
\t  <img src=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/22.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"municipio\">
\t   <img src=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/Transparencia.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" class=\"municipio\" usemap=\"#Sucre\" >
\t   
\t   ";
        }
        // line 104
        echo "\t   
\t   ";
        // line 105
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 4)) {
            // line 106
            echo "\t   <map name=\"Campo_Elias\">
<area shape=\"poly\" coords=\"445,142,415,137,378,128,327,121,330,134,341,142,341,157,356,183,391,177,410,163,426,157\"   href=\"";
            // line 107
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 23));
            echo "\" \" title=\"Fernandez Pe�a\" alt=\"Fernandez Pe�a\">
 
<area shape=\"poly\" coords=\"357,120,399,121,428,107,475,92,487,98,460,118,439,135,407,134,359,126\"   href=\"";
            // line 109
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 24));
            echo "\" \" title=\"Matriz\" alt=\"Matriz\">

<area shape=\"poly\" coords=\"523,56,570,62,628,81,588,83,552,83,529,93,520,108,493,123,459,143,434,135,482,102,485,91\"   href=\"";
            // line 111
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 25));
            echo "\" \" title=\"Montalban\" alt=\"Montalban\">

<area shape=\"poly\" coords=\"356,270,351,248,363,217,367,199,346,169,336,156,330,138,307,142,301,157,288,172,271,177,275,189,286,208,284,221,287,244,291,263,302,275\"   href=\"";
            // line 113
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 26));
            echo "\" \" title=\"Acequias\" alt=\"campo_elias\">

<area shape=\"poly\" coords=\"518,57,475,35,455,37,417,12,375,12,363,26,321,39,314,60,334,77,349,82,360,92,390,97,445,81,479,88,514,75\"   href=\"";
            // line 115
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 27));
            echo "\" \" title=\"Jaji\" alt=\"Jaji\">

<area shape=\"poly\" coords=\"404,114,427,106,453,98,464,93,433,84,392,97,380,101,349,91,337,103,327,117,350,124,381,119\"   href=\"";
            // line 117
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 28));
            echo "\" \" title=\"La Mesa\" alt=\"La Mesa\">

<area shape=\"poly\" coords=\"275,229,237,219,220,223,193,213,173,213,162,200,135,200,139,177,192,174,203,166,203,152,232,155,263,149,294,149,271,173,275,195,281,217\"   href=\"";
            // line 119
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 29));
            echo "\" \" title=\"San Jos� de Sur\" alt=\"San Jos� del Sur\">
</map>

 <img src=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/23.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\"  class=\"campo_elias\">
  <img src=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/24.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\"  class=\"campo_elias\">
   <img src=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/25.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\"  class=\"campo_elias\">
     <img src=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/26.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"campo_elias\">
    <img src=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/27.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"campo_elias\">
\t  <img src=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/28.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\"class=\"campo_elias\">
\t  <img src=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/29.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"campo_elias\">
\t  \t<img src=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/Transparencia.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" class=\"campo_elias\" usemap=\"#Campo_Elias\" >
\t   
\t   ";
        }
        // line 132
        echo "    
 ";
        // line 133
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 5)) {
            // line 134
            echo "  <map name=\"adriani\">
<area shape=\"poly\" coords=\"301,54,376,103,418,99,408,113,417,131,411,145,395,154,381,171,364,152,348,137,345,124,342,109,342,89,321,86,297,66\" href=\"detalle_parroquia.php?id=30\" \" title=\"Presidente Betancourt\" alt=\"Presidente Betancourt\">

<area shape=\"poly\" coords=\"161,13,189,18,209,18,232,18,296,54,298,67,336,87,341,100,346,133,368,154,329,150,307,142,258,119,216,125,179,144,170,144,176,115,190,83,173,56,161,30\" href=\"";
            // line 137
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 31));
            echo "\" \" title=\"Presidente Paez\" alt=\"Presidente Paez\">

<area shape=\"poly\" coords=\"367,157,315,149,258,115,222,122,201,133,191,146,183,159,177,174,237,180,293,188,321,197,348,186,375,182,375,166\" href=\"";
            // line 139
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 32));
            echo "\" \" title=\"Presidente Romulo Gallegos\" alt=\"Presidente Romulo Gallegos\">

<area shape=\"poly\" coords=\"382,189,372,216,359,238,331,244,316,236,305,226,300,215,328,198,356,187\" href=\"";
            // line 141
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 33));
            echo "\" \" title=\"Gabriel Pic�n Gonzales\" alt=\"Gabriel Pic�n Gonzales\">

<area shape=\"poly\" coords=\"478,103,552,108,541,125,560,135,576,148,574,169,572,185,532,197,524,206,480,203,466,191,441,200,408,165,438,155,455,129,463,120\" href=\"";
            // line 143
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 34));
            echo "\" \" title=\"Hector Amable Mora\" alt=\"Hector Amable Mora\">

<area shape=\"poly\" coords=\"420,101,474,105,446,150,412,151,413,123,413,111\" href=\"";
            // line 145
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 35));
            echo "\" \" title=\"Jose Nucete Sardi\" alt=\"Jose Nucete Sardi\">

<area shape=\"poly\" coords=\"402,148,370,182,386,192,381,210,392,238,435,201,413,174,410,159\" href=\"";
            // line 147
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 36));
            echo "\" \" title=\"Pulido Mendez\" alt=\"Pulido Mendez\">
</map>
<img src=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/30.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"parroquia_adriani\" >
<img src=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/31.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\"  class=\"parroquia_adriani\" >
<img src=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/32.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\"  class=\"parroquia_adriani\" >
<img src=\"";
            // line 152
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/33.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\"  class=\"parroquia_adriani\" >
<img src=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/34.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\"  class=\"parroquia_adriani\" >
<img src=\"";
            // line 154
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/35.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\"  class=\"parroquia_adriani\" >
<img src=\"";
            // line 155
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/36.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\"  class=\"parroquia_adriani\" >
<img src=\"";
            // line 156
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/Transparencia.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" class=\"parroquia_adriani\" usemap=\"#adriani\" >
  
  ";
        }
        // line 159
        echo "  
   ";
        // line 160
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 6)) {
            // line 161
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/municipios/2/6.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" usemap=\"#Map\" class=\"parroquia_azulita\" >
<map name=\"Map\">
<area shape=\"poly\" coords=\"302,76,335,69,361,59,390,60,419,90,438,124,378,103,356,106,335,88\"  href=\"";
            // line 163
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 37));
            echo "\" \" title=\"La Azulita\" alt=\"La Azulita\">
</map>
    ";
        }
        // line 166
        echo "\t
\t";
        // line 167
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 7)) {
            // line 168
            echo "\t<map name=\"Caracciolo\">
<area shape=\"poly\" coords=\"382,51,434,60,422,72,477,113,466,141,486,164,533,165,547,181,566,203,557,216,500,236,471,233,442,228,421,228,399,228,332,223,287,208,327,158,332,119,340,100,369,74\"  href=\"";
            // line 169
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 38));
            echo "\" \" title=\"Tucan�\" alt=\"Tucan�\">

<area shape=\"poly\" coords=\"384,52,325,44,302,11,254,31,233,51,242,70,209,78,214,114,216,141,229,173,236,199,284,212,308,181,319,152,323,127,334,113,335,98,368,81\"  href=\"";
            // line 171
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 39));
            echo "\" \" title=\"Florencio Ram�rez\" alt=\"Florencio Ram�rez\">
</map>
  <img src=\"";
            // line 173
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/38.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"parroquia\" >
   <img src=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/39.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"parroquia\" >
   <img src=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/Transparencia.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314') }}\"  usemap=\"#Caracciolo\" class=\"parroquia\" >
    
\t";
        }
        // line 178
        echo "\t
    ";
        // line 179
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 8)) {
            echo "\t
\t<map name=\"Tulio\">
<area shape=\"poly\" coords=\"381,66,396,29,420,19,433,56,443,79,436,100,430,116,411,116,401,85\"  href=\"";
            // line 181
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 40));
            echo "\" \" title=\"Independencia\" alt=\"Independencia\">

<area shape=\"poly\" coords=\"524,162,526,172,519,192,565,180,595,181,586,165,550,165\"  href=\"";
            // line 183
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 41));
            echo "\" \" title=\"Maria de la Concepcion Palacios Blanco\" alt=\"Maria de la Concepcion Palacios Blanco\">

<area shape=\"poly\" coords=\"451,79,480,99,474,116,473,129,458,144,451,164,438,173,406,149,413,116,434,118,439,94,449,87\" href=\"";
            // line 185
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 42));
            echo "\" \" title=\"Nueva Bolivia\" alt=\"Nueva Bolivia\">

<area shape=\"poly\" coords=\"205,125,393,145,401,160,412,188,402,212,347,230,318,247,295,232,246,219,225,195,240,179,202,156,198,134\" href=\"";
            // line 187
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 43));
            echo "\" \" title=\"Santa Apolonia\" alt=\"Santa Apolonia\">
</map>
 <img src=\"";
            // line 189
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/40.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"parroquia\"  >
 <img src=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/41.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"parroquia\" >
 <img src=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/42.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"parroquia\"  >
<img src=\"";
            // line 192
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/43.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"parroquia\"  >
<img src=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/Transparencia.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\"  usemap=\"#Tulio\" class=\"parroquia\" >

";
        }
        // line 196
        echo "
 ";
        // line 197
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 9)) {
            // line 198
            echo " <map name=\"Julio\">
<area shape=\"poly\" coords=\"320,28,326,43,331,63,352,66,350,52,344,31,335,26\"href=\"";
            // line 199
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 44));
            echo "\" \" title=\"Arapuey\" alt=\"Arapuey\">
   
<area shape=\"poly\" coords=\"345,29,455,37,430,67,445,92,410,139,404,161,426,193,401,198,359,184,370,156,384,130,376,74,351,65,350,51\" href=\"";
            // line 201
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 45));
            echo "\" \" title=\"Palmira\" alt=\"Palmira\">
</map>
<img src=\"";
            // line 203
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/44.png"), "html", null, true);
            echo "\" border=\"0\" class=\"parroquia\" >
 <img src=\"";
            // line 204
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/45.png"), "html", null, true);
            echo "\" border=\"0\" class=\"parroquia\" >
 <img src=\"";
            // line 205
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/Transparencia.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\"  usemap=\"#Julio\" class=\"parroquia\">

";
        }
        // line 208
        echo "
";
        // line 209
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 10)) {
            // line 210
            echo "<map name=\"Justo\">
<area shape=\"poly\" coords=\"489,76,550,57,591,70,605,81,612,119,531,102,503,86\"  href=\"";
            // line 211
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 46));
            echo "\" title=\"San Cristobal de Torondy\" alt=\"San Cristobal de Torondoy\">
<area shape=\"poly\" coords=\"353,47,348,18,397,37,397,48,416,39,421,18,442,15,448,30,498,39,485,78,519,98,520,127,480,160,468,195,417,221,399,228,374,221,336,220,331,233,305,224,273,224,243,222,220,205,195,199,176,184,224,167,251,149,251,139,272,136,296,117,328,108,354,97,366,82,369,65\"  href=\"";
            // line 212
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 47));
            echo "\" title=\"Torondoy\" alt=\"Torondoy\">
</map>
  <img src=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/46.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"parroquia\">
  <img src=\"";
            // line 215
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/47.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"parroquia\">
  <img src=\"";
            // line 216
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/Transparencia.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" usemap=\"#Justo\" class=\"parroquia\">\t

";
        }
        // line 218
        echo "\t

";
        // line 220
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 11)) {
            // line 221
            echo "<map name=\"Obispo\">
<area shape=\"poly\" coords=\"178,33,350,47,352,61,317,84,289,102,212,122,202,101,210,84,196,71,173,56,170,43\" href=\"";
            // line 222
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 48));
            echo "\" title=\"Eloy Paredes\" alt=\"Eloy Paredes\">

<area shape=\"poly\" coords=\"509,59,594,66,596,92,562,102,536,119,520,135,532,151,500,167,495,190,502,224,472,207,471,162,476,132,499,101,501,74\" href=\"";
            // line 224
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 49));
            echo "\" title=\"San Rafael de Alcazar\" alt=\"San Rafael de Alcazar\">

<area shape=\"poly\" coords=\"353,44,509,60,496,78,498,101,479,116,475,137,466,189,392,153,367,108,334,106,298,101,344,67\" href=\"";
            // line 226
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 50));
            echo "\" title=\"Santa Elena de Arenales\" alt=\"Santa Elena de Arenales\">
</map>
<img src=\"";
            // line 228
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/48.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"parroquia_obispo\" >
<img src=\"";
            // line 229
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/49.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"parroquia_obispo\" >
<img src=\"";
            // line 230
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/50.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"parroquia_obispo\"  >
<img src=\"";
            // line 231
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/Transparencia.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" usemap=\"#Obispo\" class=\"parroquia_obispo\" >

";
        }
        // line 233
        echo "\t
 
 ";
        // line 235
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 12)) {
            // line 236
            echo "<map name=\"Cardenal\">
<area shape=\"poly\" coords=\"201,157,243,164,305,163,326,160,376,136,379,110,367,86,337,74,302,73,264,78,241,72,221,67,205,73,204,87,188,92,171,97,152,115,176,117,197,122,213,131,200,144\" href=\"";
            // line 237
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 51));
            echo "\" \" title=\"Santo Domingo\" alt=\"Santo Domingo\">
<area shape=\"poly\" coords=\"388,117,416,125,456,110,495,110,528,100,559,100,577,105,589,120,589,127,567,137,543,143,532,158,505,154,480,156,461,164,454,174,442,187,422,188,405,181,395,177,381,166,370,159,343,157,335,147,364,142,378,124\" href=\"";
            // line 238
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 52));
            echo "\" \" title=\"Las Piedras\" alt=\"Las Piedras\">
</map>
 <img src=\"";
            // line 240
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/51.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" usemap=\"#Map\" class=\"parroquia\" >
<img src=\"";
            // line 241
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/52.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" usemap=\"#Map2\" class=\"parroquia\" >
<img src=\"";
            // line 242
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/Transparencia.png"), "html", null, true);
            echo "\" width=\"1031\" height=\"434\"  usemap=\"#Cardenal\" class=\"parroquia\" >

";
        }
        // line 244
        echo "\t
 
 ";
        // line 246
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 13)) {
            // line 247
            echo "<map name=\"Miranda\">
<area shape=\"poly\" coords=\"328,152,370,155,403,183,404,196,392,218,356,224,353,215,363,210,365,188,344,167,333,162\" href=\"";
            // line 248
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 53));
            echo "\" \" title=\"Andres Eloy Blanco\" alt=\"Andres Eloy Blanco\">
<area shape=\"poly\" coords=\"278,137,295,157,323,154,339,170,368,184,362,211,349,215,319,220,272,212,251,205,246,184,242,163,253,146\" href=\"";
            // line 249
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 54));
            echo "\" \" title=\"La Venta\" alt=\"La Venta\">
<area shape=\"poly\" coords=\"362,23,436,43,419,75,444,91,431,113,400,121,390,132,367,154,314,154,293,153,279,135,304,115,309,88,335,67,357,53\" href=\"";
            // line 250
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 55));
            echo "\" \" title=\"Pi�ango\" alt=\"Pi�ango\">
<area shape=\"poly\" coords=\"451,92\" href=\"#\"><area shape=\"poly\" coords=\"450,96,490,97,489,123,525,145,513,170,501,183,506,218,446,214,420,213,393,219,407,186,374,154,390,143,390,128,428,124\" href=\"";
            // line 251
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 56));
            echo "\" \" title=\"Timotes\" alt=\"Timotes\">
</map>

 <img src=\"";
            // line 254
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/53.png"), "html", null, true);
            echo "\" border=\"0\" class=\"parroquia_miranda\" >
 <img src=\"";
            // line 255
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/54.png"), "html", null, true);
            echo "\" border=\"0\" class=\"parroquia_miranda\" >
 <img src=\"";
            // line 256
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/55.png"), "html", null, true);
            echo "\" border=\"0\" class=\"parroquia_miranda\">
 <img src=\"";
            // line 257
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/56.png"), "html", null, true);
            echo "\" border=\"0\" class=\"parroquia_miranda\" >
<img src=\"";
            // line 258
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/Transparencia.png"), "html", null, true);
            echo "\" width=\"1031\" height=\"434\"  usemap=\"#Miranda\" class=\"parroquia_miranda\">

";
        }
        // line 260
        echo "\t

 ";
        // line 262
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 14)) {
            // line 263
            echo "<map name=\"P_llano\">
<area shape=\"poly\" coords=\"493,144,518,149,548,150,609,156,643,161,646,168,611,172,584,176,560,176,539,183,509,183,505,162,484,154\" href=\"";
            // line 264
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 57));
            echo "\" \" title=\"Pueblo Llano\" alt=\"Pueblo Llano\">
</map>
<img src=\"";
            // line 266
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/municipios/2/14.png"), "html", null, true);
            echo "\" border=\"0\" usemap=\"#P_llano\" class=\"parroquia\">

";
        }
        // line 268
        echo "\t
 
 ";
        // line 270
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 15)) {
            // line 271
            echo "<map name=\"Rangel\">
<area shape=\"poly\" coords=\"244,31,192,67,190,83,217,101,244,118,248,90,236,74,248,52\" href=\"";
            // line 272
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 58));
            echo "\" \" title=\"Cacute\" alt=\"Cacute\">
<area shape=\"poly\" coords=\"434,34,450,36,466,37,486,44,475,58,459,67,440,85,424,87,413,96,392,90,401,68,410,57,414,40,424,37\" href=\"";
            // line 273
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 59));
            echo "\" \" title=\"La Toma\" alt=\"La Toma\">
<area shape=\"poly\" coords=\"448,29,433,25,406,27,380,25,357,26,358,39,347,42,339,53,331,60,323,72,326,87,304,95,295,104,244,118,244,160,283,176,293,187,280,199,307,211,330,221,352,222,366,231,384,236,407,240,429,243,459,235,478,229,487,223,483,200,483,183,469,182,453,179,432,175,433,161,429,142,400,137,421,127,420,98,415,94,388,91,395,65,408,45,417,37\" href=\"";
            // line 274
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 60));
            echo "\" \" title=\"Mucuchies\" alt=\"Mucuchies\">
<area shape=\"poly\" coords=\"356,29,251,28,253,51,237,71,253,88,248,117,297,103,325,84,329,57,359,42\" href=\"";
            // line 275
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 61));
            echo "\" \" title=\"Mucurub�\" alt=\"Mucurub�\">
<area shape=\"poly\" coords=\"499,24,536,35,543,59,549,88,538,102,525,115,501,124,483,141,535,151,530,165,527,179,479,182,435,170,440,144,412,137,431,133,427,111,420,91,448,82,481,55\" href=\"";
            // line 276
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 62));
            echo "\" \" title=\"San Rafael\" alt=\"San Rafael\">
</map>
 <img src=\"";
            // line 278
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/58.png"), "html", null, true);
            echo "\" border=\"0\" class=\"parroquia_rangel\" >
 <img src=\"";
            // line 279
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/59.png"), "html", null, true);
            echo "\" border=\"0\"  class=\"parroquia_rangel\" >
<img src=\"";
            // line 280
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/60.png"), "html", null, true);
            echo "\" border=\"0\"  class=\"parroquia_rangel\" >
<img src=\"";
            // line 281
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/61.png"), "html", null, true);
            echo "\" border=\"0\"  class=\"parroquia_rangel\" >
 <img src=\"";
            // line 282
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/62.png"), "html", null, true);
            echo "\" border=\"0\"  class=\"parroquia_rangel\" >
<img src=\"";
            // line 283
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/Transparencia.png"), "html", null, true);
            echo "\" width=\"1031\" height=\"434\" border=\"0\" usemap=\"#Rangel\" class=\"parroquia_rangel\" >

";
        }
        // line 286
        echo " 
 ";
        // line 287
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 16)) {
            // line 288
            echo " <map name=\"aricagua\">
<area shape=\"poly\" coords=\"642,197,639,178,626,172,620,165,610,159,602,161,590,156,577,156,572,164,552,160,535,170,517,171,498,172,491,180,485,188,489,200,494,213,476,216,457,223,448,236,443,253,456,261,477,261,505,260,527,257,550,252,574,249,581,239,589,230,607,234,627,236,630,249,643,253,659,252,673,251,678,243,664,231,655,212,652,204\" href=\"";
            // line 289
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 63));
            echo "\" title=\"Aricagua\" alt=\"Aricagua\">
<area shape=\"poly\" coords=\"496,207,490,199,483,192,491,186,492,178,476,175,440,179,429,190,426,202,425,210,399,221,378,220,365,221,318,235,303,246,306,254,340,253,373,254,412,256,437,261,444,238,452,221,482,216\" href=\"";
            // line 290
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 64));
            echo "\" title=\"San Antonio\" alt=\"San Antonio\">
</map>
<img src=\"";
            // line 292
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/64.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\"  class=\"parroquia\">
<img src=\"";
            // line 293
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/63.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"parroquia\" >
<img src=\"";
            // line 294
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/Transparencia.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" class=\"parroquia\" usemap=\"#aricagua\">

";
        }
        // line 297
        echo "
 ";
        // line 298
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 17)) {
            // line 299
            echo "<map name=\"Arzobispo\">
<area shape=\"poly\" coords=\"292,160,319,158,346,162,383,150,342,132,342,113,286,125,235,132,207,142,210,156,237,163,255,157,274,151\"  href=\"";
            // line 300
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 65));
            echo "\" title=\"Canagua\" alt=\"Canagua\">
<area shape=\"poly\" coords=\"238,130,282,122,261,101,299,82,268,72,254,85,238,87,250,103\"  href=\"";
            // line 301
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 66));
            echo "\" title=\"Capuri\" alt=\"Capuri\">
<area shape=\"poly\" coords=\"392,146,389,134,418,127,435,123,439,115,433,99,392,99,374,91,352,94,349,111,346,123,359,137,378,144\"  href=\"";
            // line 302
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 67));
            echo "\" title=\"Chacant�\" alt=\"Chacant�\">
<area shape=\"poly\" coords=\"321,118,345,114,350,94,357,79,341,64,306,77,290,95,259,103,276,117,297,116\"  href=\"";
            // line 303
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 68));
            echo "\" title=\"El Molino\" alt=\"El Molino\">
<area shape=\"poly\" coords=\"222,206,261,196,258,186,287,162,267,153,239,164,211,160,204,177,185,190,179,206,201,208\"  href=\"";
            // line 304
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 69));
            echo "\" title=\"Guaymaral\" alt=\"Guaymaral\">
<area shape=\"poly\" coords=\"495,124,525,131,549,136,559,157,537,169,505,174,476,177,433,183,418,156,420,128,448,124,477,120\"  href=\"";
            // line 305
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 70));
            echo "\" title=\"Mucutuy\" alt=\"Mucutuy\">
<area shape=\"poly\" coords=\"292,245,336,226,376,220,408,218,424,202,433,186,425,160,421,146,408,129,394,135,393,150,360,156,325,160,301,160,283,173,261,179,259,192,241,205,229,209,222,227,237,244,273,243\"  href=\"";
            // line 306
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 71));
            echo "\" title=\"Mucuchachi\" alt=\"Mucuchachi\">
</map>
<img src=\"";
            // line 308
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/65.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"municipio\">
<img src=\"";
            // line 309
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/66.png"), "html", null, true);
            echo "\" name=\"m66\" width=\"752\" height=\"314\" border=\"0\"  class=\"municipio\" id=\"m66\" >
<img src=\"";
            // line 310
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/67.png"), "html", null, true);
            echo "\" name=\"m66\" width=\"752\" height=\"314\" border=\"0\" class=\"municipio\" id=\"m67\" >
<img src=\"";
            // line 311
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/68.png"), "html", null, true);
            echo "\" name=\"m68\" width=\"752\" height=\"314\" border=\"0\"  class=\"municipio\" id=\"m68\" >
<img src=\"";
            // line 312
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/69.png"), "html", null, true);
            echo "\" name=\"m69\" width=\"752\" height=\"314\" border=\"0\" class=\"municipio\" id=\"m69\" >
<img src=\"";
            // line 313
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/70.png"), "html", null, true);
            echo "\" name=\"m69\" width=\"752\" height=\"314\" border=\"0\"  class=\"municipio\" id=\"m70\" >
<img src=\"";
            // line 314
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/71.png"), "html", null, true);
            echo "\" name=\"m69\" width=\"752\" height=\"314\" border=\"0\"  class=\"municipio\" id=\"m71\" >
<img src=\"";
            // line 315
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/Transparencia.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" usemap=\"#Arzobispo\" class=\"municipio\" >

";
        }
        // line 318
        echo "
";
        // line 319
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 18)) {
            // line 320
            echo "<map name=\"Guaraque\">
<area shape=\"poly\" coords=\"197,82,213,74,214,51,257,31,257,23,212,16,160,26,152,38,156,57,147,73,156,88,179,83\" href=\"";
            // line 321
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 72));
            echo "\" title=\"Guaraque\" alt=\"Guaraque\">
<area shape=\"poly\" coords=\"168,110,193,111,217,113,231,131,242,114,248,101,237,88,211,80,162,86,157,103\" href=\"";
            // line 322
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 73));
            echo "\" title=\"Mesa de Quintero\" alt=\"Mesa de Quintero\">
<area shape=\"poly\" coords=\"212,77,238,84,261,80,263,69,298,74,328,63,322,46,303,32,288,26,259,30\" href=\"";
            // line 323
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 74));
            echo "\" title=\"Rio Negro\" alt=\"Rio Negro\">
</map>
<img src=\"";
            // line 325
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/72.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"guaraque\" >
 <img src=\"";
            // line 326
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/73.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"guaraque\" >
 <img src=\"";
            // line 327
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/74.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"guaraque\" >
<img src=\"";
            // line 328
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/Transparencia.png"), "html", null, true);
            echo "\" usemap=\"#Guaraque\" class=\"guaraque\">

";
        }
        // line 331
        echo "
";
        // line 332
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 19)) {
            // line 333
            echo "<map name=\"Noguera\">
<area shape=\"poly\" coords=\"275,194,295,197,323,203,332,184,365,160,405,162,459,172,485,169,470,149,483,135,479,113,413,120,417,96,395,100,360,120,307,141,297,167\" href=\"";
            // line 334
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 75));
            echo "\" title=\"Santa Maria de Caparo\" alt=\"Santa Maria de Caparo\">
</map>
<img src=\"";
            // line 336
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/75.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"noguera\">
<img src=\"";
            // line 337
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/Transparencia.png"), "html", null, true);
            echo "\" usemap=\"#Noguera\" class=\"noguera\">

";
        }
        // line 340
        echo "
";
        // line 341
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 20)) {
            // line 342
            echo "<map name=\"Rivas\">
<area shape=\"poly\" coords=\"450,137,491,95,493,87,530,89,529,76,550,57,576,77,576,102,549,111,543,129,521,146,517,163,489,170,454,160,442,150\"  href=\"";
            // line 343
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 76));
            echo "\" title=\"Geronimo Maldonado\" alt=\"Geronimo Maldonado\">

<area shape=\"poly\" coords=\"195,94,211,69,259,64,301,55,346,53,380,59,406,53,446,44,467,48,495,45,522,52,549,58,524,76,528,90,493,88,483,106,466,128,435,148,398,153,384,161,353,162,323,169,287,179,266,153,266,127,237,120,223,128,179,116,177,110\" href=\"";
            // line 345
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 77));
            echo "\" title=\"Bailadores\" alt=\"Bailadores\">
</map>
<img src=\"";
            // line 347
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/76.png"), "html", null, true);
            echo "\" border=\"0\" class=\"parroquia\">
<img src=\"";
            // line 348
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/77.png"), "html", null, true);
            echo "\" border=\"0\" class=\"parroquia\"  >
<img src=\"";
            // line 349
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/Transparencia.png"), "html", null, true);
            echo "\" usemap=\"#Rivas\" class=\"parroquia\" >

";
        }
        // line 352
        echo "
";
        // line 353
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 21)) {
            // line 354
            echo "<map name=\"Tovar\">
<area shape=\"poly\" coords=\"266,47,413,54,385,71,348,66,300,70,283,58\" href=\"";
            // line 355
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 78));
            echo "\" title=\"El Amparo\" alt=\"El Amparo\">

<area shape=\"poly\" coords=\"269,56,344,87,261,137,227,158,248,126,258,110,288,99,287,82\" href=\"";
            // line 357
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 79));
            echo "\" title=\"El Llano\" alt=\"El Llano\">

<area shape=\"poly\" coords=\"319,107,358,134,381,179,349,188,308,194,289,182,247,175,221,167,249,142,279,124,301,111\" href=\"";
            // line 359
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 80));
            echo "\" title=\"San Francisco\" alt=\"San Francisco\">

<area shape=\"poly\" coords=\"529,33,563,41,558,86,542,126,504,116,492,140,452,163,405,182,381,177,318,108,340,92,300,68,375,74,426,54,495,34\" href=\"";
            // line 361
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 81));
            echo "\" title=\"Tovar\" alt=\"Tovar\">
</map>

<img src=\"";
            // line 364
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/78.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"parroquia_tovar\" >
<img src=\"";
            // line 365
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/79.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"parroquia_tovar\" >
<img src=\"";
            // line 366
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/80.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"parroquia_tovar\" >
<img src=\"";
            // line 367
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/81.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"parroquia_tovar\" >
<img src=\"";
            // line 368
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/Transparencia.png"), "html", null, true);
            echo "\" usemap=\"#Tovar\" class=\"parroquia_tovar\">

";
        }
        // line 371
        echo "
";
        // line 372
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 22)) {
            // line 373
            echo "<map name=\"Antonio\">
<area shape=\"poly\" coords=\"383,20,510,42,488,66,448,83,421,89,414,98,440,112,459,126,452,133,403,129,411,149,416,160,397,174,389,184,345,197,336,210,316,223,289,231,280,214,275,200,248,177,239,155,269,144,293,119,314,118,330,106,318,100,333,77,337,66\" href=\"";
            // line 374
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 82));
            echo "\" title=\"Santa Cruz de Mora\" alt=\"Santa Cruz de Mora\">

<area shape=\"poly\" coords=\"489,67,477,77,450,83,417,90,415,103,445,112,464,126,485,129,505,114,518,95,504,81\" href=\"";
            // line 376
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 83));
            echo "\" title=\"Mesa Bolivar\" alt=\"Mesa Bolivar\">
<area shape=\"poly\" coords=\"406,128,461,131,445,161,437,181,425,189,407,188,389,177,409,168,416,152\" href=\"";
            // line 377
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 84));
            echo "\" title=\"Mesa de las Palmas\" alt=\"Mesa de las Palmas\">
</map>

  <img src=\"";
            // line 380
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/82.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" usemap=\"#Map\" class=\"parroquia\" >
  <img src=\"";
            // line 381
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/83.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" usemap=\"#Map2\" class=\"parroquia\" >
   <img src=\"";
            // line 382
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/84.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" usemap=\"#Map3\" class=\"parroquia\" >
   <img src=\"";
            // line 383
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/Transparencia.png"), "html", null, true);
            echo "\" usemap=\"#Antonio\" class=\"parroquia\">

";
        }
        // line 386
        echo "
";
        // line 387
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 23)) {
            // line 388
            echo "<map name=\"Zea\">
<area shape=\"poly\" coords=\"342,98,415,91,468,67,489,43,510,47,547,21,550,36,531,65,512,90,488,103,460,114,432,123,415,128,380,114\"  href=\"";
            // line 389
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 85));
            echo "\" title=\"Ca�o Tigre\" alt=\"Ca�o Tigre\">

<area shape=\"poly\" coords=\"344,99,418,129,462,114,506,89,550,101,554,130,515,144,500,163,468,171,432,162,390,174,347,181,327,183,201,181,190,150,227,132,278,136,286,112,294,104,314,102\" href=\"";
            // line 391
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia", array("id_parroquia" => 86));
            echo "\" title=\"Zea\" alt=\"Zea\">
</map>
  <img src=\"";
            // line 393
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/85.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"parroquia\"  >
    <img src=\"";
            // line 394
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/2/86.png"), "html", null, true);
            echo "\" width=\"752\" height=\"314\" border=\"0\" class=\"parroquia\"   >
\t  <img src=\"";
            // line 395
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/Transparencia.png"), "html", null, true);
            echo "\" usemap=\"#Zea\" class=\"parroquia\">

 

";
        }
        // line 399
        echo " 

";
    }

    public function getTemplateName()
    {
        return "MapasEstadisticosBundle:Default:detalle_municipio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1126 => 399,  1118 => 395,  1114 => 394,  1110 => 393,  1105 => 391,  1100 => 389,  1097 => 388,  1095 => 387,  1092 => 386,  1086 => 383,  1082 => 382,  1078 => 381,  1074 => 380,  1068 => 377,  1064 => 376,  1059 => 374,  1056 => 373,  1054 => 372,  1051 => 371,  1045 => 368,  1041 => 367,  1037 => 366,  1033 => 365,  1029 => 364,  1023 => 361,  1018 => 359,  1013 => 357,  1008 => 355,  1005 => 354,  1003 => 353,  1000 => 352,  994 => 349,  990 => 348,  986 => 347,  981 => 345,  976 => 343,  973 => 342,  971 => 341,  968 => 340,  962 => 337,  958 => 336,  953 => 334,  950 => 333,  948 => 332,  945 => 331,  939 => 328,  935 => 327,  931 => 326,  927 => 325,  922 => 323,  918 => 322,  914 => 321,  911 => 320,  909 => 319,  906 => 318,  900 => 315,  896 => 314,  892 => 313,  888 => 312,  884 => 311,  880 => 310,  876 => 309,  872 => 308,  867 => 306,  863 => 305,  859 => 304,  855 => 303,  851 => 302,  847 => 301,  843 => 300,  840 => 299,  838 => 298,  835 => 297,  829 => 294,  825 => 293,  821 => 292,  816 => 290,  812 => 289,  809 => 288,  807 => 287,  804 => 286,  798 => 283,  794 => 282,  790 => 281,  786 => 280,  782 => 279,  778 => 278,  773 => 276,  769 => 275,  765 => 274,  761 => 273,  757 => 272,  754 => 271,  752 => 270,  748 => 268,  742 => 266,  737 => 264,  734 => 263,  732 => 262,  728 => 260,  722 => 258,  718 => 257,  714 => 256,  710 => 255,  706 => 254,  700 => 251,  696 => 250,  692 => 249,  688 => 248,  685 => 247,  683 => 246,  679 => 244,  673 => 242,  669 => 241,  665 => 240,  660 => 238,  656 => 237,  653 => 236,  651 => 235,  647 => 233,  641 => 231,  637 => 230,  633 => 229,  629 => 228,  624 => 226,  619 => 224,  614 => 222,  611 => 221,  609 => 220,  605 => 218,  599 => 216,  595 => 215,  591 => 214,  586 => 212,  582 => 211,  579 => 210,  577 => 209,  574 => 208,  568 => 205,  564 => 204,  560 => 203,  555 => 201,  550 => 199,  547 => 198,  545 => 197,  542 => 196,  536 => 193,  532 => 192,  528 => 191,  524 => 190,  520 => 189,  515 => 187,  510 => 185,  505 => 183,  500 => 181,  495 => 179,  492 => 178,  486 => 175,  482 => 174,  478 => 173,  473 => 171,  468 => 169,  465 => 168,  463 => 167,  460 => 166,  454 => 163,  448 => 161,  446 => 160,  443 => 159,  437 => 156,  433 => 155,  429 => 154,  425 => 153,  421 => 152,  417 => 151,  413 => 150,  409 => 149,  404 => 147,  399 => 145,  394 => 143,  389 => 141,  384 => 139,  379 => 137,  374 => 134,  372 => 133,  369 => 132,  363 => 129,  359 => 128,  355 => 127,  351 => 126,  347 => 125,  343 => 124,  339 => 123,  335 => 122,  329 => 119,  324 => 117,  319 => 115,  314 => 113,  309 => 111,  304 => 109,  299 => 107,  296 => 106,  294 => 105,  291 => 104,  285 => 101,  281 => 100,  277 => 99,  273 => 98,  269 => 97,  265 => 96,  261 => 95,  254 => 91,  249 => 89,  244 => 87,  239 => 85,  234 => 82,  232 => 81,  228 => 79,  222 => 77,  218 => 76,  213 => 74,  210 => 73,  208 => 72,  204 => 70,  198 => 68,  194 => 67,  190 => 66,  186 => 65,  182 => 64,  178 => 63,  174 => 62,  170 => 61,  166 => 60,  162 => 59,  158 => 58,  154 => 57,  150 => 56,  146 => 55,  142 => 54,  138 => 53,  132 => 50,  127 => 48,  122 => 46,  117 => 44,  111 => 41,  106 => 39,  101 => 37,  96 => 35,  91 => 33,  86 => 31,  81 => 29,  76 => 27,  71 => 25,  66 => 23,  61 => 21,  58 => 20,  56 => 19,  44 => 8,  42 => 7,  40 => 6,  37 => 4,  34 => 3,  29 => 2,  11 => 1,);
    }
}
