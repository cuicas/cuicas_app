<?php

/* MapasEstadisticosBundle:Default:mapa.html.twig */
class __TwigTemplate_04d147fb5eb4ebe4431f2d9763b4396c4de70b57bc4ccfd11e2b4134268b8a8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "MapasEstadisticosBundle:Default:mapa.html.twig", 1);
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
        echo "
  <div class=\"titulo\" id=\"titulo\">
  <div align=\"center\" >Estado M&eacute;rida </div>
</div>
<div class=\"datos\">
";
        // line 29
        echo "
</div>
<div class=\"logo1\">
<div class=\"botones_menu\">

<div class=\"mensaje_sesion\">
<?php echo \"Usuario: \".\$_SESSION['usuario'];?></div>

<img id=\"eje_metropolitano\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/ejes/1/1.png"), "html", null, true);
        echo " \" width=\"752\" height=\"314\" class=\"metropolitano\"> 
<img id=\"eje_panamericano\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/ejes/2/1.png"), "html", null, true);
        echo " \" width=\"752\" height=\"314\" class=\"panamericano\" >
<img id=\"eje_paramo\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/ejes/3/1.png"), "html", null, true);
        echo " \" name=\"paramo\" width=\"752\" height=\"314\" class=\"paramo\" >
<img id=\"eje_mocoties\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/ejes/5/1.png"), "html", null, true);
        echo " \" width=\"752\" height=\"314\" class=\"mocoties\">
<img id=\"eje_sur\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/ejes/4/1.png"), "html", null, true);
        echo " \" width=\"752\" height=\"314\" class=\"sur\">
<img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/Transparencia.png"), "html", null, true);
        echo " \" width=\"752\" height=\"314\" class=\"transparencia\" usemap=\"#mapa\" >
<script type=\"text/javascript\"> 

//debo acomodarlos para que sea mas elegante la programci�n CARLOS AZUAJE
//adem�s ke sea parametrizable
function divColorChange(id) {

  if(id==1){
    document.getElementById('eje_metropolitano').src = \"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/ejes/1/4.png"), "html", null, true);
        echo "\";    
  }
  if(id==2){
    document.getElementById('eje_panamericano').src = \"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/ejes/2/4.png"), "html", null, true);
        echo "\";    
  }
  if(id==3){
    document.getElementById('eje_paramo').src = \"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/ejes/3/4.png"), "html", null, true);
        echo "\";    
  }
  if(id==4){
    document.getElementById('eje_sur').src = \"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/ejes/4/4.png"), "html", null, true);
        echo "\";    
  }
  if(id==5){
    document.getElementById('eje_mocoties').src = \"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/ejes/5/4.png"), "html", null, true);
        echo "\";    
  }
  
}

//debo acomodarlos para que sea mas elegante la programci�n CARLOS AZUAJE
//adem�s ke sea parametrizable
function volverImagen(id) {
  //document.getElementById('eje_metropolitano').src = \"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/ejes/\"~id~\"/1.png"), "html", null, true);
        echo "\";
  
  if(id==1){
  document.getElementById('eje_metropolitano').src = \"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/ejes/1/1.png"), "html", null, true);
        echo "\";
  }
  if(id==2){
  document.getElementById('eje_panamericano').src = \"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/ejes/2/1.png"), "html", null, true);
        echo "\";
  }
  if(id==3){
  document.getElementById('eje_paramo').src = \"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/ejes/3/1.png"), "html", null, true);
        echo "\";
  }
  if(id==4){
  document.getElementById('eje_sur').src = \"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/ejes/4/1.png"), "html", null, true);
        echo "\";
  }
  if(id==5){
  document.getElementById('eje_mocoties').src = \"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/ejes/5/1.png"), "html", null, true);
        echo "\";
  }
  
} 

</script>

<map name=\"mapa\">
  <area shape=\"poly\" coords=\"520,212,522,202,505,198,502,188,493,172,486,165,496,154,514,147,546,147,535,137,513,131,482,131,448,124,434,120,408,115,388,108,373,99,360,100,344,104,335,90,320,81,305,77,298,67,288,75,278,82,269,80,260,84,252,89,236,98,227,107,221,118,205,118,189,123,180,131,189,146,190,156,198,153,212,157,227,158,239,157,243,163,248,172,270,172,293,176,316,181,325,194,342,199,365,202,380,211,380,222,386,233,394,252,398,260,418,248,450,247,488,237,497,225\" href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_mapa2", array("id_eje" => 1));
        echo "\" title=\"Eje Metropolitano\" alt=\"Eje Metropolitano\" onmouseover=\"divColorChange(1)\" onmouseout=\"volverImagen(1)\">

  
  <area shape=\"poly\" coords=\"742,178,709,174,699,165,702,155,706,147,700,142,694,136,687,131,676,127,672,124,673,109,651,107,647,115,636,128,620,144,608,150,590,150,569,150,549,150,520,149,498,154,486,165,494,176,502,188,511,202,518,209,540,220,569,230,589,222,586,213,589,205,613,204,637,203,654,202,668,202,677,209,690,216,705,209,725,205,748,196,745,186\" href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_mapa2", array("id_eje" => 3));
        echo "\"  title=\"Eje P�ramo\" alt=\"Eje P�ramo\" onmouseover=\"divColorChange(3)\" onmouseout=\"volverImagen(3)\">
  
  <area shape=\"poly\" coords=\"519,212,521,202,504,198,501,188,492,172,485,165,495,154,513,147,545,147,534,137,512,131,481,131,447,124,433,120,407,115,387,108,372,99,359,100,343,104,334,90,319,81,304,77,297,67,287,75,277,82,268,80,259,84,251,89,235,98,226,107,220,118,204,118,188,123,179,131,188,146,189,156,197,153,211,157,226,158,238,157,242,163,247,172,269,172,292,176,315,181,324,194,341,199,364,202,379,211,379,222,385,233,393,252,397,260,417,248,449,247,487,237,496,225\" href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_mapa2", array("id_eje" => 1));
        echo "\" title=\"Eje Pan\" alt=\"Eje Panamericano\" onmouseover=\"divColorChange(2)\" onmouseout=\"volverImagen(2)\">
  
  <area shape=\"poly\" coords=\"689,131,684,119,692,107,695,91,622,84,616,75,615,61,601,49,593,34,584,43,590,63,589,79,471,69,462,58,456,51,268,35,208,2,179,4,196,28,192,48,194,61,246,71,241,79,264,76,276,85,298,69,320,85,347,106,369,99,413,116,469,128,525,134,559,148,618,147,637,124,646,114,659,107,676,131\" href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_mapa2", array("id_eje" => 2));
        echo "\" title=\"Eje Panamericano\" alt=\"Eje Panamericano\" onmouseover=\"divColorChange(2)\" onmouseout=\"volverImagen(2)\">

  <area shape=\"poly\" coords=\"256,265,286,262,317,261,333,252,341,242,357,246,375,262,395,259,379,226,371,209,353,199,330,199,316,187,294,180,276,174,261,174,245,172,241,157,220,157,202,152,184,152,187,142,175,133,165,125,153,108,136,111,111,104,89,102,69,107,54,112,54,132,51,149,57,163,78,165,98,171,94,186,92,203,76,219,54,225,28,238,12,254,13,267,33,254,62,252,138,257,220,265\" href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_mapa2", array("id_eje" => 4));
        echo "\" title=\"Eje Pueblos del Sur\" alt=\"Eje Pueblos del Sur\" onmouseover=\"divColorChange(4)\" onmouseout=\"volverImagen(4)\">
  
  <area shape=\"poly\" coords=\"192,43,169,63,147,64,143,71,127,71,120,79,70,81,37,86,42,98,53,107,85,108,130,111,160,119,178,133,199,122,222,109,245,97,241,82,237,68,217,64,191,61\" href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_mapa2", array("id_eje" => 5));
        echo "\" title=\"Eje Mocot�es\" alt=\"Eje Mocot�es\"  onmouseover=\"divColorChange(5)\" onmouseout=\"volverImagen(5)\">
</map>
</p>
<div class=\"punto_1 Estilo4 Estilo7\"> Eje Metropolitano</div>
 
<div class=\"punto_2 Estilo4 Estilo7\">
\tEje Panamericano\t</div>
\t<div class=\"punto_3 Estilo4 Estilo7\">
\tEje P�ramo\t</div>
\t<div class=\"punto_4 Estilo4 Estilo7\">
\tEje Mocot�es\t</div>
\t\t<div class=\"punto_5 Estilo4 Estilo7\">
\tEje Pueblos del Sur\t</div>


";
    }

    public function getTemplateName()
    {
        return "MapasEstadisticosBundle:Default:mapa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 104,  182 => 102,  177 => 100,  172 => 98,  167 => 96,  161 => 93,  150 => 85,  144 => 82,  138 => 79,  132 => 76,  126 => 73,  120 => 70,  109 => 62,  103 => 59,  97 => 56,  91 => 53,  85 => 50,  74 => 42,  70 => 41,  66 => 40,  62 => 39,  58 => 38,  54 => 37,  44 => 29,  37 => 4,  34 => 3,  29 => 2,  11 => 1,);
    }
}
