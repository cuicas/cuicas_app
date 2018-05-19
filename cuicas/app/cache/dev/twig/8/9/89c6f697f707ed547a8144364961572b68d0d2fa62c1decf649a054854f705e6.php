<?php

/* MapasEstadisticosBundle:Default:mapaCircuito2.html.twig */
class __TwigTemplate_89c6f697f707ed547a8144364961572b68d0d2fa62c1decf649a054854f705e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.11.1.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/easyTooltip.js"), "html", null, true);
        echo "\"></script>

<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/marco.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/solapamiento.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />  
<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/tablas.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/easyTooltip.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

";
        // line 12
        $context["forms"] = $this->loadTemplate("MapasEstadisticosBundle:Default:mapa2Ventana.html.twig", "MapasEstadisticosBundle:Default:mapaCircuito2.html.twig", 12);
        // line 13
        echo "
<script type=\"text/javascript\"> 

  \$(document).ready(function(){ 

    \$( \"area\" ).each( function( index, element ){
      console.log( \$( this ).attr('href') );
      \$( this ).easyTooltip({
        useElement: \$( this ).attr('href').substring(\$( this ).attr('href').lastIndexOf('/')+1)  
      });

      \$(this).mouseenter(function() {
        identificador = \"mun_\"+\$( this ).attr('href').substring(\$( this ).attr('href').lastIndexOf('/')+1)
        \$( \"#\"+identificador ).css(\"opacity\",\"0.8\");
      });

      \$(this).mouseout(function() {
        identificador = \"mun_\"+\$( this ).attr('href').substring(\$( this ).attr('href').lastIndexOf('/')+1)
        \$( \"#\"+identificador ).css(\"opacity\",\"1.0\");
      });
    });

  });

</script>

<div class=\"datos\" >
  ";
        // line 41
        echo "  ";
        if ((( !twig_test_empty((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta"))) && (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "circuito")) || (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "voto-lista"))) {
            // line 42
            echo "    <div class=\"datagrid2 datagrid3\" style=\"width: 505;\">
      <table border=\"1\">
        <thead> <th align=\"center\">Total Votos</th><th align=\"center\">Oficialismo</th><th align=\"center\">MUD</th><th align=\"center\">Otros</th><th align=\"center\">Votos Lista</th><th align=\"center\">Oficialismo</th><th align=\"center\">MUD</th><th align=\"center\">Otros</th>
        </thead>
        <tr>
          ";
            // line 47
            $context["total"] = 0;
            $context["totalO"] = 0;
            $context["totalM"] = 0;
            $context["totalOtros"] = 0;
            // line 48
            echo "          ";
            $context["totalLista"] = 0;
            $context["totalListaO"] = 0;
            $context["totalListaM"] = 0;
            $context["totalListaOtros"] = 0;
            // line 49
            echo "          ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["votosCircuito"]) ? $context["votosCircuito"] : $this->getContext($context, "votosCircuito")));
            foreach ($context['_seq'] as $context["_key"] => $context["votos"]) {
                // line 50
                echo "            ";
                $context["total"] = (twig_template_get_attributes($this, $context["votos"], "votos", array()) + (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")));
                // line 51
                echo "            ";
                $context["totalLista"] = (twig_template_get_attributes($this, $context["votos"], "votosLista", array()) + (isset($context["totalLista"]) ? $context["totalLista"] : $this->getContext($context, "totalLista")));
                // line 52
                echo "            ";
                if (((twig_template_get_attributes($this, twig_template_get_attributes($this, $context["votos"], "candidato", array()), "partido", array()) == "psuv") || (twig_template_get_attributes($this, twig_template_get_attributes($this, $context["votos"], "candidato", array()), "partido", array()) == "psuv-gpp"))) {
                    // line 53
                    echo "              ";
                    $context["totalO"] = ((isset($context["totalO"]) ? $context["totalO"] : $this->getContext($context, "totalO")) + twig_template_get_attributes($this, $context["votos"], "votos", array()));
                    // line 54
                    echo "              ";
                    $context["totalListaO"] = ((isset($context["totalListaO"]) ? $context["totalListaO"] : $this->getContext($context, "totalListaO")) + twig_template_get_attributes($this, $context["votos"], "votosLista", array()));
                    // line 55
                    echo "            ";
                }
                echo " 
            ";
                // line 56
                if ((twig_template_get_attributes($this, twig_template_get_attributes($this, $context["votos"], "candidato", array()), "partido", array()) == "mud")) {
                    // line 57
                    echo "              ";
                    $context["totalM"] = ((isset($context["totalM"]) ? $context["totalM"] : $this->getContext($context, "totalM")) + twig_template_get_attributes($this, $context["votos"], "votos", array()));
                    // line 58
                    echo "              ";
                    $context["totalListaM"] = ((isset($context["totalListaM"]) ? $context["totalListaM"] : $this->getContext($context, "totalListaM")) + twig_template_get_attributes($this, $context["votos"], "votosLista", array()));
                    // line 59
                    echo "            ";
                }
                echo " 
            ";
                // line 60
                if ((twig_template_get_attributes($this, twig_template_get_attributes($this, $context["votos"], "candidato", array()), "partido", array()) == "otros")) {
                    // line 61
                    echo "              ";
                    $context["totalOtros"] = ((isset($context["totalOtros"]) ? $context["totalOtros"] : $this->getContext($context, "totalOtros")) + twig_template_get_attributes($this, $context["votos"], "votos", array()));
                    // line 62
                    echo "              ";
                    $context["totalListaOtros"] = ((isset($context["totalListaOtros"]) ? $context["totalListaOtros"] : $this->getContext($context, "totalListaOtros")) + twig_template_get_attributes($this, $context["votos"], "votosLista", array()));
                    // line 63
                    echo "            ";
                }
                echo " 
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['votos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "          <td>";
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, (isset($context["totalO"]) ? $context["totalO"] : $this->getContext($context, "totalO")), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, (isset($context["totalM"]) ? $context["totalM"] : $this->getContext($context, "totalM")), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, (isset($context["totalOtros"]) ? $context["totalOtros"] : $this->getContext($context, "totalOtros")), "html", null, true);
            echo "</td><td align=\"center\">";
            echo twig_escape_filter($this->env, (isset($context["totalLista"]) ? $context["totalLista"] : $this->getContext($context, "totalLista")), "html", null, true);
            echo "</td><td align=\"center\">";
            echo twig_escape_filter($this->env, (isset($context["totalListaO"]) ? $context["totalListaO"] : $this->getContext($context, "totalListaO")), "html", null, true);
            echo "</td><td align=\"center\">";
            echo twig_escape_filter($this->env, (isset($context["totalListaM"]) ? $context["totalListaM"] : $this->getContext($context, "totalListaM")), "html", null, true);
            echo "</td><td align=\"center\">";
            echo twig_escape_filter($this->env, (isset($context["totalListaOtros"]) ? $context["totalListaOtros"] : $this->getContext($context, "totalListaOtros")), "html", null, true);
            echo "</td>
        </tr>
      </table>
    </div>
  ";
        }
        // line 70
        echo "</div>
\t 
<div class=\"botones_menu\">
  <a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mapas_circuito_ventana", array("id_encuesta" => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "id", array()))), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/Merida1.png"), "html", null, true);
        echo "\" height=\"60px\" width=\"60px\" alt=\"Estado Mérida\" title=\"Estado Mérida\" border=\"0\"><br>Estado Mérida</a>
</div>

";
        // line 76
        if (((isset($context["id_circuito"]) ? $context["id_circuito"] : $this->getContext($context, "id_circuito")) == 1)) {
            // line 77
            echo "
  <div class=\"titulo\">
    <div align=\"center\" >Circuito 1 </div>
  </div>

  <map name=\"Metropolitano\">
    <area shape=\"poly\" coords=\"81,117,122,129,130,141,150,142,158,149,253,130,250,140,249,154,262,160,269,184,275,190,264,200,248,200,237,196,237,207,227,214,229,240,212,231,215,244,206,252,203,253,199,243,192,241,194,223,149,231,142,232,139,227,143,219,143,214,142,204,140,203,134,214,133,217,128,198,130,185,120,168,116,158,106,155,98,153,88,154,81,145,79,136,78,130,76,119,77,116\" href=\"";
            // line 83
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio_ventana", array("id_municipio" => 5));
            echo "\" title=\"Alberto Adriani\" alt=\"Alberto Adriani\">
    <div id=\"5\" style=\"display:none\">Alberto Adriani
      ";
            // line 85
            echo $context["forms"]->getdatosMunicipio((isset($context["votosCircuito"]) ? $context["votosCircuito"] : $this->getContext($context, "votosCircuito")), 5, "circuito");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"150,231,196,222,191,233,192,240,200,241,200,249,206,252,206,265,201,273,192,286,194,288,202,285,204,307,196,309,193,319,180,316,176,326,169,337,167,347,167,352,160,357,151,342,131,324,128,320,139,302,139,292,146,294,151,290,145,259,152,246,152,238,150,229\" href=\"";
            // line 88
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio_ventana", array("id_municipio" => 22));
            echo "\" title=\"Antonio Pinto Salinas\" alt=\"Antonio Pinto Salinas\">
    <div id=\"22\" style=\"display:none\">Antonio Pinto Salinas
      ";
            // line 90
            echo $context["forms"]->getdatosMunicipio((isset($context["votosCircuito"]) ? $context["votosCircuito"] : $this->getContext($context, "votosCircuito")), 22, "circuito");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"85,280,82,286,94,293,96,305,93,322,92,332,101,328,113,329,127,322,135,309,139,303,139,290,146,292,151,290,148,277,144,260,132,263,125,270,123,274,116,282,95,280,84,279,80,286\" href=\"";
            // line 93
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio_ventana", array("id_municipio" => 21));
            echo "\" title=\"Tovar\" alt=\"Tovar\">
    <div id=\"21\" style=\"display:none\">Tovar
      ";
            // line 95
            echo $context["forms"]->getdatosMunicipio((isset($context["votosCircuito"]) ? $context["votosCircuito"] : $this->getContext($context, "votosCircuito")), 21, "circuito");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"133,215,138,204,144,204,142,213,143,219,139,224,139,231,146,231,148,228,153,236,145,261,133,263,126,271,123,274,118,276,117,281,84,280,90,266,102,254,115,244,129,234,134,213,134,216\" href=\"";
            // line 98
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio_ventana", array("id_municipio" => 23));
            echo "\" title=\"Zea\" alt=\"Zea\">
    <div id=\"23\" style=\"display:none\">Zea
      ";
            // line 100
            echo $context["forms"]->getdatosMunicipio((isset($context["votosCircuito"]) ? $context["votosCircuito"] : $this->getContext($context, "votosCircuito")), 23, "circuito");
            echo "
    </div>
    
  </map>
  ";
            // line 104
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(array(0 => 5, 1 => 22, 2 => 21, 3 => 23));
            foreach ($context['_seq'] as $context["_key"] => $context["municipio"]) {
                // line 105
                echo "    
    ";
                // line 106
                if (($context["municipio"] == 5)) {
                    // line 107
                    echo "      ";
                    echo $context["forms"]->getelColor((isset($context["votosCircuito"]) ? $context["votosCircuito"] : $this->getContext($context, "votosCircuito")), $context["municipio"], "mocotiesCircuito");
                    echo "  
    ";
                } else {
                    // line 109
                    echo "      ";
                    echo $context["forms"]->getelColor((isset($context["votosCircuito"]) ? $context["votosCircuito"] : $this->getContext($context, "votosCircuito")), $context["municipio"], "mocotiesCircuito");
                    echo "
    ";
                }
                // line 111
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['municipio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/transparencia.png"), "html", null, true);
            echo "\" class=\"mocotiesCircuito\" usemap=\"#Metropolitano\" >

";
        }
        // line 115
        echo "
";
        // line 116
        if (((isset($context["id_circuito"]) ? $context["id_circuito"] : $this->getContext($context, "id_circuito")) == 2)) {
            // line 117
            echo "
  <div class=\"titulo\" id=\"titulo\">
    <div align=\"center\" >Circuito 2 </div>
  </div>

  <map name=\"Paramo\">
    <area shape=\"poly\" coords=\"237,206,246,218,256,224,262,225,269,221,274,227,282,229,291,232,295,237,294,247,295,251,302,244,303,235,311,230,316,227,331,233,337,239,349,239,358,244,367,249,374,246,383,244,387,242,394,237,387,232,381,221,376,213,366,202,353,192,341,187,332,182,317,173,315,166,314,163,314,181,313,187,301,191,291,193,287,187,281,187,278,190,271,199,260,203,252,200,243,200,238,197\" href=\"";
            // line 123
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio_ventana", array("id_municipio" => 6));
            echo "\" title=\"Andres Bello\" alt=\"Andres Bello\">
    <div id=\"6\" style=\"display:none\">Andres Bello
      ";
            // line 125
            echo $context["forms"]->getdatosMunicipio((isset($context["votosCircuito"]) ? $context["votosCircuito"] : $this->getContext($context, "votosCircuito")), 6, "circuito");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"388,236,380,221,375,212,365,201,364,193,362,179,361,175,365,169,365,166,359,158,369,144,370,134,368,123,364,116,360,105,466,83,469,92,475,102,475,109,474,113,475,121,477,127,475,133,473,140,468,143,464,149,459,152,459,163,453,169,449,173,449,178,453,184,453,191,459,192,469,191,475,190,476,188,485,196,489,197,496,201,495,205,492,215,489,223,483,230,477,233,470,230,461,231,453,233,447,237,437,242,428,243,416,242,409,241,405,237\" href=\"";
            // line 128
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio_ventana", array("id_municipio" => 7));
            echo "\" title=\"Caracciolo Parra Olmedo\" alt=\"Caracciolo Parra Olmedo\">
    <div id=\"7\" style=\"display:none\">Caracciolo Parra Olmedo
      ";
            // line 130
            echo $context["forms"]->getdatosMunicipio((isset($context["votosCircuito"]) ? $context["votosCircuito"] : $this->getContext($context, "votosCircuito")), 7, "circuito");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"493,201,480,190,475,189,463,193,453,188,448,177,456,163,459,158,458,152,474,137,476,132,477,123,473,113,473,102,467,84,486,79,487,64,481,53,480,40,516,27,518,29,520,40,519,49,524,56,530,62,541,61,556,58,560,46,563,57,566,69,572,79,573,94,575,107,580,119,584,125,573,134,563,144,554,141,556,128,554,112,561,102,522,114,522,126,524,136,521,137,515,128,504,125,501,126,502,135,506,143,511,149,516,152,518,157,517,162,505,176\" href=\"";
            // line 133
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio_ventana", array("id_municipio" => 8));
            echo "\" title=\"Tulio Febres Cordero\" alt=\"Tulio Febres Cordero\">
    <div id=\"8\" style=\"display:none\">Tulio Febres Cordero
     ";
            // line 135
            echo $context["forms"]->getdatosMunicipio((isset($context["votosCircuito"]) ? $context["votosCircuito"] : $this->getContext($context, "votosCircuito")), 8, "circuito");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"621,168,614,173,608,178,602,172,597,171,594,161,597,148,587,130,582,126,574,111,571,102,572,86,569,75,560,49,579,21,585,21,589,27,597,33,600,39,600,52,606,64,615,74,611,85,612,90,606,96,604,114,602,119,605,125,606,145,606,152\" href=\"";
            // line 138
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio_ventana", array("id_municipio" => 9));
            echo "\" title=\"Julio Cesar Salas\" alt=\"Julio Cesar Salas\">
    <div id=\"9\" style=\"display:none\">Julio Cesar Salas
      ";
            // line 140
            echo $context["forms"]->getdatosMunicipio((isset($context["votosCircuito"]) ? $context["votosCircuito"] : $this->getContext($context, "votosCircuito")), 9, "circuito");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"495,198,502,186,507,175,511,165,518,154,513,148,508,140,503,130,502,126,510,126,515,132,519,135,524,135,522,123,523,115,525,112,559,101,559,105,556,114,555,124,555,135,554,140,559,147,569,137,577,127,584,127,589,137,595,145,596,149,570,147,567,149,571,158,571,165,569,171,565,176,565,186,568,195,568,201,566,212,566,217,558,225,554,232,545,229,537,232,530,240,518,238,516,233,511,225,508,226,509,237,510,249,502,243,495,238,486,238,479,234,481,230,490,222,494,216,496,201\" href=\"";
            // line 143
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio_ventana", array("id_municipio" => 10));
            echo "\" title=\"Justo Briceño\" alt=\"Justo Briceño\">
    <div id=\"10\" style=\"display:none\">Justo Briceño
      ";
            // line 145
            echo $context["forms"]->getdatosMunicipio((isset($context["votosCircuito"]) ? $context["votosCircuito"] : $this->getContext($context, "votosCircuito")), 10, "circuito");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"254,131,251,142,249,153,250,158,264,163,266,170,271,183,273,191,282,183,290,190,312,184,310,164,317,165,322,177,338,184,353,192,361,198,369,203,369,199,360,185,359,175,364,167,359,160,363,148,371,136,370,125,366,118,363,110,359,106\" href=\"";
            // line 148
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio_ventana", array("id_municipio" => 11));
            echo "\" title=\"Obispo Ramos de Lora\" alt=\"Obispo Ramos de Lora\">
    <div id=\"11\" style=\"display:none\">Obispo Ramos de Lora
      ";
            // line 150
            echo $context["forms"]->getdatosMunicipio((isset($context["votosCircuito"]) ? $context["votosCircuito"] : $this->getContext($context, "votosCircuito")), 11, "circuito");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"616,250,599,255,591,262,575,261,572,267,573,274,566,281,562,287,565,295,572,296,585,296,582,306,584,314,592,313,607,306,636,292,643,295,650,300,655,299,662,302,669,300,673,283,679,278,693,272,692,266,701,255,704,249,704,243,699,238,685,238,675,244,672,252,665,253,656,258,656,263,643,269,637,266,630,264,629,255\" href=\"";
            // line 153
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio_ventana", array("id_municipio" => 12));
            echo " \" title=\"Cardenal Quintero\" alt=\"Cardenal Quintero\">
    <div id=\"12\" style=\"display:none\">Cardenal Quintero
      ";
            // line 155
            echo $context["forms"]->getdatosMunicipio((isset($context["votosCircuito"]) ? $context["votosCircuito"] : $this->getContext($context, "votosCircuito")), 12, "circuito");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"596,150,566,147,568,153,572,164,566,176,564,188,567,200,566,210,566,216,553,230,560,241,564,250,571,259,576,262,588,262,597,257,599,254,608,254,615,250,620,244,631,238,641,240,649,233,641,221,642,213,634,198,638,179,627,167,619,173,610,177,601,171,595,169\" href=\"";
            // line 158
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio_ventana", array("id_municipio" => 13));
            echo "\" title=\"Miranda\" alt=\"Miranda\">
    <div id=\"13\" style=\"display:none\">Miranda
      ";
            // line 160
            echo $context["forms"]->getdatosMunicipio((isset($context["votosCircuito"]) ? $context["votosCircuito"] : $this->getContext($context, "votosCircuito")), 13, "circuito");
            echo "
    </div>
     
    <area shape=\"poly\" coords=\"692,230,658,231,648,232,646,239,633,240,621,242,617,248,630,255,633,264,641,268,648,267,655,257,660,252,668,251,675,242,687,237,696,236\" href=\"";
            // line 163
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio_ventana", array("id_municipio" => 14));
            echo "\" title=\"Pueblo Llano\" alt=\"Pueblo Llano\">
    <div id=\"14\" style=\"display:none\">Pueblo Llano
      ";
            // line 165
            echo $context["forms"]->getdatosMunicipio((isset($context["votosCircuito"]) ? $context["votosCircuito"] : $this->getContext($context, "votosCircuito")), 14, "circuito");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"509,223,509,246,505,246,494,250,479,254,469,258,467,267,456,280,456,289,454,293,451,294,458,302,464,303,470,312,480,317,481,323,489,339,500,340,512,344,512,355,548,362,570,359,579,345,573,323,582,314,585,298,568,296,562,291,563,284,573,275,570,266,574,260,565,249,560,238,555,231,546,229,535,234,532,240,523,239,524,239\" href=\"";
            // line 168
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio_ventana", array("id_municipio" => 15));
            echo "\" title=\"Rangel\" alt=\"Rangel\">
    <div id=\"15\" style=\"display:none\">Rangel
      ";
            // line 170
            echo $context["forms"]->getdatosMunicipio((isset($context["votosCircuito"]) ? $context["votosCircuito"] : $this->getContext($context, "votosCircuito")), 15, "circuito");
            echo "
    </div>
    
  </map>
  ";
            // line 174
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(6, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["municipio"]) {
                echo "    
    ";
                // line 175
                echo $context["forms"]->getelColor((isset($context["votosCircuito"]) ? $context["votosCircuito"] : $this->getContext($context, "votosCircuito")), $context["municipio"], "paramoCircuito");
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['municipio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/transparencia.png"), "html", null, true);
            echo "\" class=\"paramoCircuito\" usemap=\"#Paramo\" >

";
        }
        // line 180
        echo "
";
        // line 181
        if (((isset($context["id_circuito"]) ? $context["id_circuito"] : $this->getContext($context, "id_circuito")) == 3)) {
            // line 182
            echo "
  <div class=\"titulo\" id=\"titulo\">
    <div align=\"center\" >Circuito 3</div>
  </div>

  <map name=\"Paramo\">
    <area shape=\"poly\" coords=\"505,248,494,239,484,238,475,232,460,231,448,237,442,241,434,246,414,241,402,242,394,247,385,252,376,258,374,261,370,274,368,282,365,295,363,303,359,311,357,316,357,326,361,332,364,339,359,340,352,334,345,331,337,333,334,340,339,352,344,361,349,371,350,376,350,386,353,390,361,391,368,390,368,396,378,404,385,407,387,421,400,427,406,429,408,438,409,439,412,448,421,456,426,464,432,462,437,445,446,440,462,436,474,430,477,422,463,402,460,389,456,377,456,365,451,352,444,345,447,336,431,331,418,316,411,319,411,302,418,296,415,289,437,276,457,266,468,260,490,250,502,246\"  href=\"";
            // line 188
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio_ventana", array("id_municipio" => 1));
            echo "\">
    <div id=\"1\" style=\"display:none\">Libertador
      ";
            // line 190
            echo $context["forms"]->getdatosMunicipio((isset($context["votosCircuito"]) ? $context["votosCircuito"] : $this->getContext($context, "votosCircuito")), 1, "circuito");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"469,262,442,272,419,287,419,297,412,303,412,320,417,317,430,332,448,336,445,345,453,355,462,398,477,427,489,416,497,400,506,394,502,384,508,373,510,365,511,355,511,344,501,340,490,340,481,324,480,315,471,313,465,302,458,302,451,295,458,290,458,286,457,279,457,278\" href=\"";
            // line 193
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio_ventana", array("id_municipio" => 2));
            echo "\" >
    <div id=\"2\" style=\"display:none\">Santos Marquina
      ";
            // line 195
            echo $context["forms"]->getdatosMunicipio((isset($context["votosCircuito"]) ? $context["votosCircuito"] : $this->getContext($context, "votosCircuito")), 2, "circuito");
            echo "
    </div>
    
  </map>
  ";
            // line 199
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(array(0 => 1, 1 => 2));
            foreach ($context['_seq'] as $context["_key"] => $context["municipio"]) {
                echo "    
    ";
                // line 200
                echo $context["forms"]->getelColor((isset($context["votosCircuito"]) ? $context["votosCircuito"] : $this->getContext($context, "votosCircuito")), $context["municipio"], "metropolitanoCircuito");
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['municipio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            echo "  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/transparencia.png"), "html", null, true);
            echo "\" class=\"metropolitanoCircuito\" usemap=\"#Paramo\" >

";
        }
        // line 205
        echo "
";
        // line 206
        if (((isset($context["id_circuito"]) ? $context["id_circuito"] : $this->getContext($context, "id_circuito")) == 4)) {
            // line 207
            echo "
  <div class=\"titulo\" id=\"titulo\">
    <div align=\"center\" >Circuito 4</div>
  </div>
  <map name=\"Pueblos_Sur\">
    <area shape=\"poly\" coords=\"410,239,391,236,382,239,366,248,356,245,348,239,332,239,317,226,305,234,303,243,294,248,290,258,301,278,308,275,310,281,307,287,310,295,312,302,305,307,306,316,294,331,285,335,282,339,275,348,275,353,263,359,256,364,261,378,267,375,284,381,300,377,308,379,319,376,330,402,338,394,341,391,350,390,347,380,351,368,344,362,335,337,347,329,362,339,366,337,359,327,355,319,358,308,353,306,360,299,368,282,370,270,370,263,383,254,394,249,398,249,409,239\" href=\"";
            // line 212
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio_ventana", array("id_municipio" => 4));
            echo "\" >
    <div id=\"4\" style=\"display:none\">Campo Elias
      ";
            // line 214
            echo $context["forms"]->getdatosMunicipio((isset($context["votosCircuito"]) ? $context["votosCircuito"] : $this->getContext($context, "votosCircuito")), 4, "circuito");
            echo "
    </div>
      
    <area shape=\"poly\" coords=\"430,462,424,463,409,443,409,436,405,427,387,420,382,404,370,402,365,389,351,392,341,393,338,399,330,400,321,419,302,428,296,436,279,446,268,460,267,467,264,474,268,484,263,499,253,508,240,505,231,514,223,522,227,529,217,534,212,550,209,553,215,556,225,553,241,545,241,542,254,537,270,533,284,534,290,537,297,528,302,532,313,521,319,523,337,513,350,496,358,498,371,490,371,476,374,466,392,460,399,465,401,476,408,476,416,472,425,473,429,461\"  href=\"";
            // line 217
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio_ventana", array("id_municipio" => 16));
            echo "\" title=\"Aricagua\" alt=\"Aricagua\">
    <div id=\"16\" style=\"display:none\">Aricagua
      ";
            // line 219
            echo $context["forms"]->getdatosMunicipio((isset($context["votosCircuito"]) ? $context["votosCircuito"] : $this->getContext($context, "votosCircuito")), 16, "circuito");
            echo "
    </div>
    
    <area shape=\"poly\"coords=\"331,399,321,379,314,376,306,381,300,377,285,380,266,374,253,388,240,380,229,366,221,369,211,379,193,371,185,379,178,372,175,358,166,349,160,358,149,371,134,372,128,374,127,388,122,394,116,396,115,402,128,417,127,434,130,448,120,449,117,465,123,479,129,496,117,519,123,527,122,540,127,541,145,526,154,532,153,543,155,548,163,549,159,562,176,558,191,552,207,555,216,532,225,528,221,522,239,505,249,509,263,489,267,485,259,474,266,467,266,459,273,450,285,441,294,436,304,423,314,424\"  href=\"";
            // line 222
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio_ventana", array("id_municipio" => 17));
            echo "\" title=\"Arzobispo Chac&oacute;n\" alt=\"Arzobispo Chacon\">
    <div id=\"17\" style=\"display:none\">Arzobispo Chac&oacute;n
      ";
            // line 224
            echo $context["forms"]->getdatosMunicipio((isset($context["votosCircuito"]) ? $context["votosCircuito"] : $this->getContext($context, "votosCircuito")), 17, "circuito");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"160,356,153,340,141,328,129,322,114,330,98,328,86,337,72,331,46,351,47,369,57,384,56,405,68,421,73,436,77,443,91,433,105,431,116,435,124,446,129,448,126,428,127,418,116,403,115,397,125,391,129,374,140,371,150,371,155,364\"  href=\"";
            // line 227
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio_ventana", array("id_municipio" => 18));
            echo "\" title=\"Guaraque\" alt=\"Guaraque\">
    <div id=\"18\" style=\"display:none\">Guaraque
      ";
            // line 229
            echo $context["forms"]->getdatosMunicipio((isset($context["votosCircuito"]) ? $context["votosCircuito"] : $this->getContext($context, "votosCircuito")), 18, "circuito");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"157,566,161,548,152,548,153,534,146,525,127,540,121,537,123,527,118,520,102,538,98,557,82,568,86,587,87,592,88,598,82,611,93,610,106,609,107,598,102,594,105,585,109,577,116,571,121,569,132,575,158,567\"  href=\"";
            // line 232
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio_ventana", array("id_municipio" => 19));
            echo "\" title=\"Padre Noguera\" alt=\"Padre Noguera\">
    <div id=\"19\" style=\"display:none\">Padre Noguera
      ";
            // line 234
            echo $context["forms"]->getdatosMunicipio((isset($context["votosCircuito"]) ? $context["votosCircuito"] : $this->getContext($context, "votosCircuito")), 19, "circuito");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"82,287,93,293,94,306,92,333,87,335,74,333,62,340,47,353,37,341,18,338,21,320,43,305,66,291,81,288\" href=\"";
            // line 237
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio_ventana", array("id_municipio" => 20));
            echo "\" title=\"Rivas D�vila\" alt=\"Rivas D�vila\">
    <div id=\"20\" style=\"display:none\">Rivas D&aacute;vila
      ";
            // line 239
            echo $context["forms"]->getdatosMunicipio((isset($context["votosCircuito"]) ? $context["votosCircuito"] : $this->getContext($context, "votosCircuito")), 20, "circuito");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"237,206,228,214,229,240,212,230,214,241,205,250,205,266,191,286,193,288,200,283,200,306,195,310,193,317,179,318,176,329,173,330,173,336,166,346,178,360,181,378,186,378,195,371,210,379,213,379,224,366,233,366,241,378,251,389,257,381,263,377,257,368,259,360,274,355,278,354,275,349,281,340,287,333,297,330,306,317,305,309,307,303,310,303,309,293,308,287,312,279,310,275,300,277,292,260,293,247,294,237,287,230,284,229,276,229,269,220,264,224,257,222,253,223,246,216,239,206,236,206\"  href=\"";
            // line 242
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio_ventana", array("id_municipio" => 3));
            echo "\" >
    <div id=\"3\" style=\"display:none\">Sucre      
      ";
            // line 244
            echo $context["forms"]->getdatosMunicipio((isset($context["votosCircuito"]) ? $context["votosCircuito"] : $this->getContext($context, "votosCircuito")), 3, "circuito");
            echo "
    </div>
    
  </map>
  ";
            // line 248
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(array(0 => 4, 1 => 16, 2 => 17, 3 => 18, 4 => 19, 5 => 20, 6 => 3));
            foreach ($context['_seq'] as $context["_key"] => $context["municipio"]) {
                echo "    
    ";
                // line 249
                echo $context["forms"]->getelColor((isset($context["votosCircuito"]) ? $context["votosCircuito"] : $this->getContext($context, "votosCircuito")), $context["municipio"], "metropolitano");
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['municipio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 251
            echo "  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/transparencia.png"), "html", null, true);
            echo "\" class=\"metropolitano\" usemap=\"#Pueblos_Sur\" >

";
        }
    }

    public function getTemplateName()
    {
        return "MapasEstadisticosBundle:Default:mapaCircuito2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  586 => 251,  578 => 249,  572 => 248,  565 => 244,  560 => 242,  554 => 239,  549 => 237,  543 => 234,  538 => 232,  532 => 229,  527 => 227,  521 => 224,  516 => 222,  510 => 219,  505 => 217,  499 => 214,  494 => 212,  487 => 207,  485 => 206,  482 => 205,  475 => 202,  467 => 200,  461 => 199,  454 => 195,  449 => 193,  443 => 190,  438 => 188,  430 => 182,  428 => 181,  425 => 180,  418 => 177,  410 => 175,  404 => 174,  397 => 170,  392 => 168,  386 => 165,  381 => 163,  375 => 160,  370 => 158,  364 => 155,  359 => 153,  353 => 150,  348 => 148,  342 => 145,  337 => 143,  331 => 140,  326 => 138,  320 => 135,  315 => 133,  309 => 130,  304 => 128,  298 => 125,  293 => 123,  285 => 117,  283 => 116,  280 => 115,  273 => 112,  267 => 111,  261 => 109,  255 => 107,  253 => 106,  250 => 105,  246 => 104,  239 => 100,  234 => 98,  228 => 95,  223 => 93,  217 => 90,  212 => 88,  206 => 85,  201 => 83,  193 => 77,  191 => 76,  183 => 73,  178 => 70,  155 => 65,  146 => 63,  143 => 62,  140 => 61,  138 => 60,  133 => 59,  130 => 58,  127 => 57,  125 => 56,  120 => 55,  117 => 54,  114 => 53,  111 => 52,  108 => 51,  105 => 50,  100 => 49,  94 => 48,  89 => 47,  82 => 42,  79 => 41,  50 => 13,  48 => 12,  43 => 9,  39 => 8,  35 => 7,  31 => 6,  26 => 4,  22 => 3,  19 => 2,);
    }
}
