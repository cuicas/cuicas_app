<?php

/* MapasEstadisticosBundle:Default:detalle_municipioVentana.html.twig */
class __TwigTemplate_a44f47f82641699c40513e35f89599e89024bc968ccde00c731b76c7f8745087 extends Twig_Template
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
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.11.1.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/easyTooltip.js"), "html", null, true);
        echo "\"></script>

<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/marco.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/solapamiento_municipios.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/tablas.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/easyTooltip.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

<script type=\"text/javascript\"> 

  \$(document).ready(function(){ 

    \$( \"area\" ).each( function( index, element ){
      console.log( \$( this ).attr('href') );
      \$( this ).easyTooltip({
        useElement: \$( this ).attr('href').substring(\$( this ).attr('href').lastIndexOf('/')+1)  
      });

      \$(this).mouseenter(function() {
        identificador = \"paq_\"+\$( this ).attr('href').substring(\$( this ).attr('href').lastIndexOf('/')+1)
        \$( \"#\"+identificador ).css(\"opacity\",\"0.8\");
      });

      \$(this).mouseout(function() {
        identificador = \"paq_\"+\$( this ).attr('href').substring(\$( this ).attr('href').lastIndexOf('/')+1)
        \$( \"#\"+identificador ).css(\"opacity\",\"1.0\");
      });
    });
  });
</script>

";
        // line 66
        echo "
";
        // line 142
        echo "
";
        // line 148
        echo "
<div class=\"datos\">
";
        // line 151
        echo "  ";
        if ( !twig_test_empty((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")))) {
            // line 152
            echo "    <div class=\"datagrid2";
            if ((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "circuito")) {
                echo " datagrid3";
            }
            echo "\" style=\"width: 505;\">
      <table border=\"1\">
         <thead> <th align=\"center\">Total Votos</th><th align=\"center\">Oficialismo</th><th align=\"center\">MUD</th><th align=\"center\">Otros</th>";
            // line 154
            if ((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "circuito")) {
                echo "<th align=\"center\">Votos Lista</th><th align=\"center\">Oficialismo</th><th align=\"center\">MUD</th><th align=\"center\">Otros</th>";
            }
            echo "</thead>
          <tr>
          ";
            // line 156
            list($context["total"], $context["totalO"], $context["totalM"], $context["totalOtros"]) =             array(0, 0, 0, 0);
            // line 157
            echo "          ";
            list($context["totalLista"], $context["totalListaO"], $context["totalListaM"], $context["totalListaOtros"]) =             array(0, 0, 0, 0);
            // line 158
            echo "          ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")));
            foreach ($context['_seq'] as $context["_key"] => $context["votos"]) {
                // line 159
                echo "            ";
                $context["total"] = (twig_template_get_attributes($this, $context["votos"], "votos", array()) + (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")));
                // line 160
                echo "            ";
                $context["totalLista"] = (twig_template_get_attributes($this, $context["votos"], "votosLista", array()) + (isset($context["totalLista"]) ? $context["totalLista"] : $this->getContext($context, "totalLista")));
                // line 161
                echo "             ";
                if (((twig_template_get_attributes($this, twig_template_get_attributes($this, $context["votos"], "candidato", array()), "partido", array()) == "psuv") || (twig_template_get_attributes($this, twig_template_get_attributes($this, $context["votos"], "candidato", array()), "partido", array()) == "psuv-gpp"))) {
                    // line 162
                    echo "              ";
                    $context["totalO"] = ((isset($context["totalO"]) ? $context["totalO"] : $this->getContext($context, "totalO")) + twig_template_get_attributes($this, $context["votos"], "votos", array()));
                    // line 163
                    echo "              ";
                    $context["totalListaO"] = ((isset($context["totalListaO"]) ? $context["totalListaO"] : $this->getContext($context, "totalListaO")) + twig_template_get_attributes($this, $context["votos"], "votosLista", array()));
                    // line 164
                    echo "            ";
                }
                // line 165
                echo "             ";
                if ((twig_template_get_attributes($this, twig_template_get_attributes($this, $context["votos"], "candidato", array()), "partido", array()) == "mud")) {
                    // line 166
                    echo "              ";
                    $context["totalM"] = ((isset($context["totalM"]) ? $context["totalM"] : $this->getContext($context, "totalM")) + twig_template_get_attributes($this, $context["votos"], "votos", array()));
                    // line 167
                    echo "              ";
                    $context["totalListaM"] = ((isset($context["totalListaM"]) ? $context["totalListaM"] : $this->getContext($context, "totalListaM")) + twig_template_get_attributes($this, $context["votos"], "votosLista", array()));
                    // line 168
                    echo "            ";
                }
                // line 169
                echo "             ";
                if ((twig_template_get_attributes($this, twig_template_get_attributes($this, $context["votos"], "candidato", array()), "partido", array()) == "otros")) {
                    // line 170
                    echo "              ";
                    $context["totalOtros"] = ((isset($context["totalOtros"]) ? $context["totalOtros"] : $this->getContext($context, "totalOtros")) + twig_template_get_attributes($this, $context["votos"], "votos", array()));
                    // line 171
                    echo "              ";
                    $context["totalListaOtros"] = ((isset($context["totalListaOtros"]) ? $context["totalListaOtros"] : $this->getContext($context, "totalListaOtros")) + twig_template_get_attributes($this, $context["votos"], "votosLista", array()));
                    // line 172
                    echo "            ";
                }
                // line 173
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['votos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "          <td>";
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, (isset($context["totalO"]) ? $context["totalO"] : $this->getContext($context, "totalO")), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, (isset($context["totalM"]) ? $context["totalM"] : $this->getContext($context, "totalM")), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, (isset($context["totalOtros"]) ? $context["totalOtros"] : $this->getContext($context, "totalOtros")), "html", null, true);
            echo "</td>";
            if ((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "circuito")) {
                echo "<td>";
                echo twig_escape_filter($this->env, (isset($context["totalLista"]) ? $context["totalLista"] : $this->getContext($context, "totalLista")), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, (isset($context["totalListaO"]) ? $context["totalListaO"] : $this->getContext($context, "totalListaO")), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, (isset($context["totalListaM"]) ? $context["totalListaM"] : $this->getContext($context, "totalListaM")), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, (isset($context["totalListaOtros"]) ? $context["totalListaOtros"] : $this->getContext($context, "totalListaOtros")), "html", null, true);
                echo "</td>";
            }
            // line 175
            echo "          </tr>
      </table>
    </div>
  ";
        }
        // line 179
        echo "</div>

";
        // line 181
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 1)) {
            // line 182
            echo "
  <div class=\"titulo\" id=\"titulo\">
    <div align=\"center\" >Municipio Libertador </div>
  </div>

  ";
            // line 187
            echo twig_template_get_attributes($this, $this, "boton", array(0 => 1, 1 => 3, 2 => "Eje 1 3d", 3 => "Eje Metropolitano", 4 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "

  <map name=\"libertador\">
    <area shape=\"poly\" coords=\"280,274,276,270,279,268,281,261,286,258,291,259,295,263,293,267,290,270,287,274,284,274,279,274\" href=\"";
            // line 190
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 1));
            echo "\">
    <div id=\"1\" style=\"display:none\">Antonio Spinetti Dini
        ";
            // line 192
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 1, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>

    <area shape=\"poly\" coords=\"368,365,353,365,347,358,340,352,331,345,327,341,319,341,317,343,316,345,310,343,310,341,307,341,301,338,298,335,292,330,288,328,290,321,293,310,294,305,296,299,295,293,294,287,290,282,289,278,289,276,296,278,304,279,305,278,304,285,308,291,310,295,316,292,317,291,322,295,327,304,329,308,330,310,346,317,355,319,355,322,352,323,352,327,352,331,358,334,361,336,364,343,365,351,368,357,370,363,369,366\" href=\"";
            // line 195
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 2));
            echo "\">
    <div id=\"2\" style=\"display:none\">Arias
        ";
            // line 197
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 2, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"263,284,270,284,272,282,277,279,275,277,269,277,267,277,258,280,258,281,263,284\" href=\"";
            // line 200
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 3));
            echo "\">
    <div id=\"3\" style=\"display:none\">Caracciolo Parra Perez
        ";
            // line 202
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 3, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"250,274,250,268,251,263,254,259,255,255,254,249,253,243,252,237,252,233,249,239,246,245,245,252,243,262,239,266,236,269,240,273,248,275,250,275\" href=\"";
            // line 205
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 4));
            echo "\">
    <div id=\"4\" style=\"display:none\">Domingo Peña
      ";
            // line 207
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 4, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"259,281,263,279,266,277,266,275,256,275,249,274,244,274,237,268,229,273,232,275,235,275,238,276,243,280,247,280,250,278,255,278,258,281,263,279,267,277\" href=\"";
            // line 210
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 5));
            echo "\">
    <div id=\"5\" style=\"display:none\">El Llano
      ";
            // line 212
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 5, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"316,262,312,256,314,252,326,247,331,243,345,234,354,229,359,224,368,221,375,217,382,211,390,207,399,205,405,202,414,200,425,199,429,196,434,190,431,187,425,184,413,182,404,179,394,171,386,171,377,175,370,175,364,175,360,179,355,180,347,182,340,188,336,191,329,190,321,190,320,199,319,213,317,221,311,230,312,242,311,249,308,253,308,261,310,266,314,263,315,261\" href=\"";
            // line 215
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 6));
            echo "\">
    <div id=\"6\" style=\"display:none\">Gonzalo Pic&oacute;n Febres
      ";
            // line 217
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 6, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"288,330,281,334,277,335,270,335,262,336,256,335,250,331,247,328,239,322,243,322,245,321,247,318,248,316,247,315,243,314,239,309,237,303,233,297,233,291,234,285,235,282,236,277,242,278,246,279,251,279,257,277,260,282,266,284,270,283,276,281,283,278,288,283,294,287,296,292,298,298,295,302,292,307,294,314,291,321,289,323,288,331,282,334,277,336\" href=\"";
            // line 220
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 7));
            echo "\">
    <div id=\"7\" style=\"display:none\">Jacinto Plaza
      ";
            // line 222
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 7, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"266,274,267,276,269,278,273,278,276,278,276,280,283,280,285,280,284,275,268,274\" href=\"";
            // line 225
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 8));
            echo "\">
    <div id=\"8\" style=\"display:none\">Juan Rodriguez Suarez
      ";
            // line 227
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 8, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"281,252,282,246,284,237,285,230,285,224,285,218,285,213,282,208,277,202,272,203,268,207,261,210,257,213,253,217,253,223,255,227,253,231,254,236,254,239,255,243,255,247,257,252,257,257,255,259,252,265,251,267,251,271,251,274\" href=\"";
            // line 230
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 9));
            echo "\" title=\"Lasso de la Vega\" alt=\"Lasso de la Vega\">
    <div id=\"9\" style=\"display:none\">Lasso de la Vega
      ";
            // line 232
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 9, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"279,275,267,274,265,270,268,267,268,261,275,254,279,252,282,251,285,257,284,260,280,263,280,268,275,269,280,275,267,275\" href=\"";
            // line 235
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 10));
            echo "\" title=\"Mariano Pic&oacute;n Salas\" alt=\"Mariano Pic&oacute;n Salas\">
    <div id=\"10\" style=\"display:none\">Mariano Picón Salas
      ";
            // line 237
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 10, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"310,264,306,270,305,278,297,278,290,276,288,275,292,270,294,264,294,261,291,259,285,256,283,251,284,236,285,230,287,225,285,218,284,212,278,202,282,197,288,197,293,193,298,188,305,186,309,184,318,187,322,190,321,203,318,217,315,224,311,229,310,244,311,251,308,252,309,261,309,268,306,271,305,277\" href=\"";
            // line 240
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 11));
            echo "\">
    <div id=\"11\" style=\"display:none\">Milla
      ";
            // line 242
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 11, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"254,274,267,274,265,269,268,267,269,257,262,261,262,266,260,269,256,271,254,271,254,274\" href=\"";
            // line 245
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 12));
            echo "\">
    <div id=\"12\" style=\"display:none\">Osuna Rodríguez
      ";
            // line 247
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 12, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"288,282,288,277,286,275,283,277,284,279,287,282\" href=\"";
            // line 250
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 13));
            echo "\" title=\"Sagrario\" alt=\"Sagrario\">
    <div id=\"13\" style=\"display:none\">Sagrario
      ";
            // line 252
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 13, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"274,337,257,334,244,323,231,318,224,315,220,307,208,313,202,318,213,346,216,357,224,359,226,372,223,384,231,389,243,391,254,391,250,405,263,412,271,414,276,426,278,434,291,440,300,442,308,452,310,463,317,476,326,483,335,492,343,481,356,466,368,459,388,453,401,442,393,430,384,409,380,391,374,370,360,367,347,371,329,384,315,395,303,406,292,406,279,398,278,385,267,375,260,365,260,360\" href=\"";
            // line 255
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 14));
            echo "\">
    <div id=\"14\" style=\"display:none\">El Morro
      ";
            // line 257
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 14, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"277,336,269,348,264,358,263,369,278,381,283,386,285,398,296,407,315,402,325,392,336,384,346,374,361,371,369,372,370,367,361,365,352,364,343,352,327,340,318,343,304,336,296,333\" href=\"";
            // line 260
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 15));
            echo "\">
    <div id=\"15\" style=\"display:none\">Los Nevados
      ";
            // line 262
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 15, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
  </map>
  ";
            // line 266
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["paq"]) {
                // line 267
                echo "
    ";
                // line 268
                echo twig_template_get_attributes($this, $this, "elColor", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => $context["paq"], 2 => "transparencia", 3 => $context["paq"]), "method");
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 270
            echo "  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/colores/transparencia.png"), "html", null, true);
            echo "\" class=\"transparencia\" usemap=\"#libertador\" >
   
";
        }
        // line 272
        echo " 
  
";
        // line 274
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 2)) {
            // line 275
            echo "
  <div class=\"titulo\" id=\"titulo\">
    <div align=\"center\" >Municipio Santos Marquina </div>
  </div>
  ";
            // line 279
            echo twig_template_get_attributes($this, $this, "boton", array(0 => 1, 1 => 3, 2 => "Eje 1 3d", 3 => "Eje Metropolitano", 4 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "

  <map name=\"Santos_Marquina\">
    <area shape=\"poly\" coords=\"323,153,302,166,281,178,264,192,228,211,234,226,224,228,217,238,218,258,220,266,227,257,251,285,271,292,287,300,282,313,293,323,303,350,305,373,318,397,324,431,336,450,343,462,340,478,353,457,370,449,380,420,397,407,390,392,403,361,405,344,404,324,405,316,383,304,370,304,362,305,343,261,327,254,318,238,306,237,291,225,295,213,305,204,298,194,306,179,316,171,324,160\" href=\"";
            // line 282
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 16));
            echo "\">
    <div id=\"16\" style=\"display:none\">Tabay
      ";
            // line 284
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 16, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
  </map>
  ";
            // line 288
            echo twig_template_get_attributes($this, $this, "elColor", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 16, 2 => "libertador", 3 => "2"), "method");
            echo "
  <img src=\"";
            // line 289
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/colores/transparencia.png"), "html", null, true);
            echo "\" class=\"transparencia\" usemap=\"#Santos_Marquina\" >
  
";
        }
        // line 291
        echo " 
  
";
        // line 293
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 3)) {
            // line 294
            echo "
  <div class=\"titulo\" id=\"titulo\">
    <div align=\"center\" >Municipio Sucre </div>
  </div>
  ";
            // line 298
            echo twig_template_get_attributes($this, $this, "boton", array(0 => 1, 1 => 4, 2 => "Eje 1 3d", 3 => "Eje Metropolitano", 4 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "

  <map name=\"sucre\">
    <area shape=\"poly\" coords=\"294,182,295,229,267,213,269,225,256,244,255,267,255,276,251,276,255,283,269,285,281,284,284,305,294,304,299,306,306,307,317,295,329,285,341,280,349,279,359,283,363,282,364,256,363,248,356,235,350,231,342,229,336,221,338,212,336,208,331,190,324,186,313,181,310,175,307,169\" href=\"";
            // line 301
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 17));
            echo "\">
    <div id=\"17\" style=\"display:none\">Chiguar&aacute;
      ";
            // line 303
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 17, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"249,278,253,283,259,287,267,287,276,287,281,289,281,299,281,305,280,308,285,306,290,306,295,306,298,308,302,307,308,310,312,313,314,317,314,323,317,330,314,342,314,347,313,353,306,356,301,356,287,355,281,360,278,366,275,371,271,375,266,376,263,380,263,387,264,396,269,402,274,406,281,408,288,410,290,415,292,423,290,430,287,435,285,448,279,452,275,457,271,466,268,470,261,472,253,470,234,455,230,456,225,458,218,469,214,469,209,464,208,457,207,443,204,435,189,419,186,411,187,404,191,398,195,395,194,386,199,378,203,377,206,367,210,363,216,362,225,365,231,363,233,356,234,352,242,347,246,345,246,305,244,304,238,303,236,303,231,307,229,306,236,300,239,292,243,287,249,285,250,284,248,281,247,279\" href=\"";
            // line 306
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 18));
            echo "\">
    <div id=\"18\" style=\"display:none\">Estanquez
      ";
            // line 308
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 18, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"417,298,408,305,402,311,394,316,389,324,388,333,386,340,387,352,391,363,393,366,388,362,381,358,373,354,367,352,360,350,350,345,340,344,335,346,329,346,324,345,323,338,323,332,317,327,315,323,315,315,310,308,317,300,324,290,334,285,341,281,351,280,357,283,361,285,364,283,365,282,377,285,386,290,390,296,399,303,405,303,411,302,415,298,417,298\" href=\"";
            // line 311
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 19));
            echo "\" title=\"Lagunillas\" alt=\"Lagunillas\">
    <div id=\"19\" style=\"display:none\">Lagunillas
      ";
            // line 313
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 19, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"333,194,338,206,339,216,339,224,345,228,352,231,357,237,362,242,366,248,366,251,365,260,365,266,365,273,365,278,366,281,374,283,381,286,387,289,393,295,396,298,400,301,408,298,413,297,420,295,417,293,412,284,410,277,407,270,402,260,400,256,406,244,407,237,406,230,405,219,400,211,393,209,388,207,379,207,372,204,368,198,365,192,360,195,355,197,349,197,348,197\" href=\"";
            // line 316
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 20));
            echo "\" title=\"La Trampa\" alt=\"La Trampa\">
    <div id=\"20\" style=\"display:none\">La Trampa
      ";
            // line 318
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 20, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"315,329,317,339,316,347,311,354,306,357,295,357,287,357,281,363,279,367,275,374,267,379,264,385,265,394,270,402,279,405,286,408,291,413,292,419,292,425,290,433,288,436,286,447,290,448,294,446,299,446,305,450,312,460,314,466,317,472,321,479,328,483,336,487,342,485,345,476,348,468,348,467,343,459,342,450,342,443,347,438,354,434,362,431,368,429,372,429,375,427,373,420,373,414,376,407,382,403,388,398,391,393,394,390,398,387,397,376,393,367,386,361,374,356,367,353,363,354,355,352,347,346,336,346,334,348,325,346,323,346,323,333,316,329\" href=\"";
            // line 321
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 21));
            echo "\" title=\"Pueblo Nuevo del Sur\" alt=\"Pueblo Nuevo del Sur\">
    <div id=\"21\" style=\"display:none\">Pueblo Nuevo del Sur
      ";
            // line 323
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 21, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"433,292,421,296,406,312,399,314,392,319,389,329,388,336,390,347,394,368,396,377,400,386,405,386,407,387,417,379,428,364,430,358,427,351,425,345,428,338,435,335,435,318,430,314,431,309,433,302,436,296,433,292,420,296\" href=\"";
            // line 326
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 22));
            echo "\" title=\"San Juan\" alt=\"San Juan\">
    <div id=\"22\" style=\"display:none\">San Juan
      ";
            // line 328
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 22, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
  </map>
  ";
            // line 332
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(17, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["paq"]) {
                // line 333
                echo "    ";
                echo twig_template_get_attributes($this, $this, "elColor", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => $context["paq"], 2 => "transparencia", 3 => $context["paq"]), "method");
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 334
            echo " 
  <img src=\"";
            // line 335
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/colores/transparencia.png"), "html", null, true);
            echo "\" class=\"transparencia\" usemap=\"#Sucre\" >
     
";
        }
        // line 338
        echo "     
";
        // line 339
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 4)) {
            // line 340
            echo "
  <div class=\"titulo\" id=\"titulo\">
    <div align=\"center\" >Municipio Campo Elias </div>
  </div>

  ";
            // line 345
            echo twig_template_get_attributes($this, $this, "boton", array(0 => 1, 1 => 4, 2 => "Eje 1 3d", 3 => "Eje Metropolitano", 4 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "

  <map name=\"Campo_Elias\">
    <area shape=\"poly\" coords=\"384,378,380,378,368,375,358,370,352,363,347,362,326,374,325,382,328,389,332,397,326,394,317,387,316,382,308,378,304,372,298,364,294,362,282,355,285,348,286,336,279,335,277,329,275,322,280,319,295,322,299,322,309,319,314,324,321,323,332,316,338,315,342,318,350,315,356,318,360,318,362,323,367,328,370,328,369,335,366,345,366,352,374,367,376,372,384,376\" href=\"";
            // line 348
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 23));
            echo "\" title=\"Fernandez Pe&ntilde;a\" alt=\"Fernandez Pe&ntilde;a\">
    <div id=\"23\" style=\"display:none\">Fernandez Pe&ntilde;a
      ";
            // line 350
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 23, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"285,319,294,320,307,317,315,319,316,322,324,319,330,313,334,311,338,314,346,298,346,293,345,275,345,272,353,267,355,266,346,261,340,265,330,267,329,268,328,275,327,281,325,286,322,290,318,294,315,298,314,301,309,306,304,309,301,311,297,310,291,312,287,317,287,318,293,320,299,320,308,317,310,317,313,319,317,320,316,322,326,317,333,311,339,314\" href=\"";
            // line 353
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 24));
            echo "\" title=\"Matriz\" alt=\"Matriz\">
    <div id=\"24\" style=\"display:none\">Matriz
      ";
            // line 355
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 24, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"460,197,460,196,434,195,428,197,426,202,415,201,405,206,392,210,387,215,379,211,373,211,371,212,372,220,372,228,367,231,366,236,367,243,363,247,360,249,357,254,355,256,350,259,354,263,357,265,358,268,355,269,348,272,347,275,347,283,347,290,349,297,347,303,342,312,340,315,345,313,352,315,359,315,363,311,369,310,375,308,380,301,382,296,383,287,386,276,390,266,392,257,393,253,392,246,392,242,402,231,410,226,419,222,429,218,433,213,438,210,446,211,448,205,455,200,460,200\" href=\"";
            // line 358
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 25));
            echo "\" title=\"Montalban\" alt=\"Montalban\">
    <div id=\"25\" style=\"display:none\">Montalban
      ";
            // line 360
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 25, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"278,337,277,347,269,358,260,365,261,370,259,377,254,385,253,390,254,400,252,401,254,403,257,404,263,406,268,416,271,425,274,432,275,437,275,444,278,454,280,455,285,451,290,449,296,449,302,452,303,457,308,462,312,466,312,473,316,478,317,483,320,487,322,495,325,494,329,490,333,486,338,477,356,478,355,472,351,463,349,458,352,451,354,448,355,436,350,430,343,427,339,420,337,412,334,403,332,398,324,393,316,387,314,383,305,378,300,372,295,366,290,364,283,358,281,355,283,348,286,338\" href=\"";
            // line 363
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 26));
            echo "\" title=\"Acequias\" alt=\"campo_elias\">
    <div id=\"26\" style=\"display:none\">Acequias
      ";
            // line 365
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 26, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"281,289,287,287,292,287,296,285,299,279,302,275,307,270,310,264,311,260,318,258,328,257,333,255,337,258,343,258,348,258,354,254,356,252,358,248,361,246,364,244,365,240,364,233,368,228,370,225,371,220,370,213,369,212,373,209,367,206,355,201,349,198,341,198,328,197,321,195,311,187,301,179,294,176,289,180,284,184,275,188,270,193,270,201,269,209,263,212,258,216,254,218,253,224,249,231,248,233,254,239,258,248,262,258,264,266,269,266,275,264,278,260,283,265,283,267,285,271,283,279,280,285,279,289,280,290\" href=\"";
            // line 368
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 27));
            echo "\" title=\"Jaji\" alt=\"Jaji\">
    <div id=\"27\" style=\"display:none\">Jaji
      ";
            // line 370
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 27, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"283,318,285,315,284,309,284,298,286,294,283,291,287,289,295,287,298,286,298,282,305,276,310,271,311,264,314,262,321,260,327,259,333,258,337,259,342,259,344,260,340,262,333,264,325,266,327,275,325,281,322,288,315,293,312,295,311,301,303,307,297,309,293,309,288,313,286,315\" href=\"";
            // line 373
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 28));
            echo "\" title=\"La Mesa\" alt=\"La Mesa\">
    <div id=\"28\" style=\"display:none\">La Mesa
      ";
            // line 375
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 28, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"259,367,259,375,251,387,252,397,248,401,252,404,260,406,268,416,270,426,272,431,274,438,274,444,273,446,277,454,277,455,267,454,262,451,253,454,237,457,231,460,223,457,215,453,208,447,200,447,195,448,192,449,184,439,184,431,187,426,189,421,196,419,203,418,207,415,213,414,222,413,222,410,221,404,217,398,219,391,226,387,235,382,238,374,242,370,250,370,255,370\" href=\"";
            // line 378
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 29));
            echo "\" title=\"San Jos&eacute; de Sur\" alt=\"San Jos&eacute; del Sur\">
    <div id=\"29\" style=\"display:none\">San José de Sur
      ";
            // line 380
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 29, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
  </map>
  ";
            // line 384
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(23, 29));
            foreach ($context['_seq'] as $context["_key"] => $context["paq"]) {
                // line 385
                echo "   ";
                echo twig_template_get_attributes($this, $this, "elColor", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => $context["paq"], 2 => "transparencia", 3 => $context["paq"]), "method");
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 387
            echo "  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/colores/transparencia.png"), "html", null, true);
            echo "\" class=\"transparencia\" usemap=\"#Campo_Elias\" >
     
";
        }
        // line 390
        echo "    
";
        // line 391
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 5)) {
            // line 392
            echo "
  <div class=\"titulo\" id=\"titulo\">
    <div align=\"center\" >Municipio Alberto Adriani </div>
  </div>

  ";
            // line 397
            echo twig_template_get_attributes($this, $this, "boton", array(0 => 2, 1 => 1, 2 => "Eje 2 3d", 3 => "Eje Panamericano", 4 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "

  <map name=\"adriani\">
    <area shape=\"poly\" coords=\"314,258,365,247,365,254,369,262,380,275,376,290,372,303,370,317,369,324,367,328,365,323,364,322,358,321,352,318,350,313,348,310,341,309,334,302,333,298,323,287,324,284,323,272,318,265,315,265\" href=\"";
            // line 400
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 30));
            echo "\" title=\"Presidente Betancourt\" alt=\"Presidente Betancourt\">
    <div id=\"30\" style=\"display:none\">Presidente Betancourt
      ";
            // line 402
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 30, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"365,333,364,323,356,322,350,316,348,311,338,311,332,305,332,299,325,293,319,286,322,276,321,271,314,265,312,258,290,261,285,257,276,250,264,249,250,248,245,247,234,229,222,222,206,217,191,212,168,207,164,211,160,213,162,221,168,226,169,233,171,237,166,238,169,244,172,252,180,264,188,269,204,266,213,268,221,271,225,276,226,282,233,287,239,295,244,302,252,300,265,301,277,303,286,306,292,312,295,312,301,317,307,320,315,317,328,318,335,317,344,320,353,324,359,332,366,332\" href=\"";
            // line 405
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 31));
            echo "\" title=\"Presidente Paez\" alt=\"Presidente Paez\">
    <div id=\"31\" style=\"display:none\">Presidente Paez
      ";
            // line 407
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 31, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"253,363,250,352,249,345,245,336,247,332,245,305,246,302,260,302,273,304,285,307,291,313,294,314,302,320,307,322,313,320,326,320,331,320,335,319,343,320,353,325,356,329,359,334,365,334,365,342,369,347,369,351,366,359,357,362,352,362,347,367,343,373,342,378,283,386,266,391,263,386,270,380,270,373,270,367,268,364,269,359,272,350,268,346,265,345,259,346,257,352,255,360,254,362\" href=\"";
            // line 410
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 32));
            echo "\" title=\"Presidente Romulo Gallegos\" alt=\"Presidente Romulo Gallegos\">
    <div id=\"32\" style=\"display:none\">Presidente Romulo Gallegos
      ";
            // line 412
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 32, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"344,378,347,370,353,364,354,367,359,363,367,358,370,355,374,358,375,366,377,377,381,388,377,390,377,395,380,400,377,408,373,414,369,421,364,425,362,423,361,407,347,403,346,400,348,392,353,382,352,376,345,377,344,377\" href=\"";
            // line 415
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 33));
            echo "\" title=\"Gabriel Pic&oacute;n Gonzales\" alt=\"Gabriel Pic&oacute;n Gonzales\">
    <div id=\"33\" style=\"display:none\">Gabriel Picón Gonzales
      ";
            // line 417
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 33, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"445,229,409,238,407,246,408,261,407,264,401,269,404,275,405,278,403,282,403,285,404,290,403,293,396,300,386,303,385,308,385,323,389,329,392,333,397,333,400,335,404,339,408,342,413,346,416,350,418,347,417,339,416,335,418,332,425,335,433,339,448,340,457,340,462,340,468,334,474,330,476,327,472,320,466,310,464,303,463,293,461,285,456,278,448,274,444,271,436,272,434,268,435,260,437,248,440,244,445,240\" href=\"";
            // line 420
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 34));
            echo "\" title=\"Hector Amable Mora\" alt=\"Hector Amable Mora\">
    <div id=\"34\" style=\"display:none\">Hector Amable Mora
      ";
            // line 422
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 34, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"408,238,367,247,367,253,372,264,376,270,381,274,379,284,376,295,375,300,382,302,386,302,395,298,402,292,402,287,402,284,405,279,403,274,400,269,404,264,406,262,407,255,407,244\"  href=\"";
            // line 425
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 35));
            echo "\" title=\"Jose Nucete Sardi\" alt=\"Jose Nucete Sardi\">
    <div id=\"35\" style=\"display:none\">Jose Nucete Sardi
      ";
            // line 427
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 35, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"403,364,402,404,383,389,380,384,378,377,377,372,376,356,372,354,368,351,370,348,367,344,365,337,365,330,369,326,370,322,370,317,372,313,373,307,374,300,381,304,385,303,384,324,390,333,394,333,398,336,405,342,411,347,414,352,403,363\" href=\"";
            // line 430
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 36));
            echo "\" title=\"Pulido Mendez\" alt=\"Pulido Mendez\">
    <div id=\"36\" style=\"display:none\">Pulido Mendez
      ";
            // line 432
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 36, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
  </map>
  ";
            // line 436
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(30, 36));
            foreach ($context['_seq'] as $context["_key"] => $context["paq"]) {
                // line 437
                echo "    ";
                echo twig_template_get_attributes($this, $this, "elColor", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => $context["paq"], 2 => "transparencia", 3 => $context["paq"]), "method");
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 439
            echo "  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/colores/transparencia.png"), "html", null, true);
            echo "\" class=\"transparencia\" usemap=\"#Adriani\" >
  
";
        }
        // line 442
        echo "
";
        // line 443
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 6)) {
            // line 444
            echo "
  <div class=\"titulo\" id=\"titulo\">
    <div align=\"center\" >Municipio Andres Bello </div>
  </div>

  ";
            // line 449
            echo twig_template_get_attributes($this, $this, "boton", array(0 => 2, 1 => 2, 2 => "Eje 2 3d", 3 => "Eje Panamericano", 4 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "

  <map name=\"Map\">
    <area shape=\"poly\" coords=\"311,228,312,276,287,285,268,287,260,280,250,277,241,277,238,289,220,300,212,310,184,306,173,306,160,301,161,314,165,338,173,341,179,343,191,352,202,353,212,354,225,348,234,359,243,368,252,367,260,367,274,376,281,387,279,403,281,406,292,400,294,382,307,372,322,361,341,372,359,384,372,389,390,388,409,399,430,405,446,399,460,390,469,390,474,384,462,371,459,358,452,341,442,327,430,313,416,301,393,287,358,273,345,267,333,258,319,229\"  href=\"";
            // line 452
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 37));
            echo "\" title=\"La Azulita\" alt=\"La Azulita\">
    <div id=\"37\" style=\"display:none\">La Azulita
      ";
            // line 454
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 37, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
  </map>

  ";
            // line 459
            echo twig_template_get_attributes($this, $this, "elColor", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 37, 2 => "transparencia", 3 => "6"), "method");
            echo "
  <img src=\"";
            // line 460
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/colores/transparencia.png"), "html", null, true);
            echo "\" class=\"transparencia\" usemap=\"#Map\" >

";
        }
        // line 463
        echo " 
";
        // line 464
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 7)) {
            // line 465
            echo "
  <div class=\"titulo\" id=\"titulo\">
    <div align=\"center\" >Municipio Caracciolo Parra Olmedo </div>
  </div>

  ";
            // line 470
            echo twig_template_get_attributes($this, $this, "boton", array(0 => 2, 1 => 2, 2 => "Eje 2 3d", 3 => "Eje Panamericano", 4 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "

  <map name=\"Caracciolo\">
    <area shape=\"poly\" coords=\"344,171,396,160,421,201,417,216,422,234,423,249,420,265,412,279,399,290,387,301,389,316,376,329,371,343,369,357,374,370,389,383,402,383,425,376,440,388,452,398,458,409,455,416,453,427,443,450,429,458,418,456,403,461,385,458,371,469,361,469,348,479,334,484,319,483,302,475,294,471,287,474,290,448,293,438,293,428,283,406,286,404,283,393,287,386,285,373,287,360,291,353,290,338,287,331,292,312,301,308,312,299,308,285,306,273,315,263,324,250,328,242,328,226,326,206,343,196,344,172\" href=\"";
            // line 473
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 38));
            echo "\" title=\"Tucaní\" alt=\"Tucaní\">
    <div id=\"38\" style=\"display:none\">Tucaní
      ";
            // line 475
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 38, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"341,172,194,204,199,212,203,228,207,240,213,255,213,273,201,296,193,315,202,327,202,338,191,348,198,376,202,387,217,410,228,425,234,438,241,456,249,468,269,471,288,471,290,448,291,432,286,410,281,406,283,392,285,382,284,368,290,351,288,336,284,330,287,308,303,303,306,299,304,281,304,272,310,260,321,246,324,237,323,222,325,207,335,198,341,193,340,171\" href=\"";
            // line 478
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 39));
            echo "\" title=\"Florencio Ramírez\" alt=\"Florencio Ramírez\">
    <div id=\"39\" style=\"display:none\">Florencio Ramírez
      ";
            // line 480
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 39, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
  </map>
  ";
            // line 484
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(38, 39));
            foreach ($context['_seq'] as $context["_key"] => $context["paq"]) {
                // line 485
                echo "   ";
                echo twig_template_get_attributes($this, $this, "elColor", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => $context["paq"], 2 => "transparencia", 3 => $context["paq"]), "method");
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 487
            echo "  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/colores/transparencia.png"), "html", null, true);
            echo "\" class=\"transparencia\" usemap=\"#Caracciolo\">
    
";
        }
        // line 490
        echo "  
";
        // line 491
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 8)) {
            // line 492
            echo "
  <div class=\"titulo\" id=\"titulo\">
    <div align=\"center\" >Municipio Tulio Febres Cordero </div>
  </div>

  ";
            // line 497
            echo twig_template_get_attributes($this, $this, "boton", array(0 => 2, 1 => 2, 2 => "Eje 2 3d", 3 => "Eje Panamericano", 4 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "

  <map name=\"Tulio\">
    <area shape=\"poly\" coords=\"430,274,422,276,416,282,415,292,411,299,407,302,405,308,399,318,401,329,401,350,397,365,399,373,404,379,409,379,415,374,424,362,430,351,441,345,450,340,439,320,432,304,430,290,431,273\" href=\"";
            // line 500
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 40));
            echo "\" title=\"Independencia\" alt=\"Independencia\">
    <div id=\"40\" style=\"display:none\">Independencia
      ";
            // line 502
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 40, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"255,179,321,159,330,162,332,184,332,200,333,209,340,215,332,227,322,237,310,240,305,247,304,250,292,256,289,260,292,265,278,270,256,270,241,270,232,267,272,250,273,238,273,223,263,212,256,181\" href=\"";
            // line 505
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 41));
            echo "\" title=\"Maria de la Concepcion Palacios Blanco\" alt=\"Maria de la Concepcion Palacios Blanco\">
    <div id=\"41\" style=\"display:none\">Maria de la Concepcion Palacios Blanco
      ";
            // line 507
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 41, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"230,266,245,275,262,273,281,272,297,263,289,261,298,253,307,251,317,238,322,237,324,232,333,232,339,220,346,226,351,229,372,221,399,217,406,196,418,232,426,251,430,272,422,274,412,280,415,293,378,306,338,318,331,329,333,344,336,357,336,360,321,349,309,342,296,343,293,349,287,349,285,346,250,342,249,335,244,322,244,312,245,301,230,271\" href=\"";
            // line 510
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 42));
            echo "\" title=\"Nueva Bolivia\" alt=\"Nueva Bolivia\">
    <div id=\"42\" style=\"display:none\">Nueva Bolivia
      ";
            // line 512
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 42, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"248,342,286,346,289,350,293,351,296,362,302,378,312,381,320,392,324,400,322,410,320,421,312,429,297,441,293,456,276,484,245,463,239,464,225,468,211,468,200,450,200,437,203,426,216,412,216,397,227,385,234,376,245,369,248,343\" href=\"";
            // line 515
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 43));
            echo "\" title=\"Santa Apolonia\" alt=\"Santa Apolonia\">
    <div id=\"43\" style=\"display:none\">Santa Apolonia
      ";
            // line 517
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 43, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
  </map>
   ";
            // line 521
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(40, 43));
            foreach ($context['_seq'] as $context["_key"] => $context["paq"]) {
                // line 522
                echo "   ";
                echo twig_template_get_attributes($this, $this, "elColor", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => $context["paq"], 2 => "transparencia", 3 => $context["paq"]), "method");
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 524
            echo "   <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/colores/transparencia.png"), "html", null, true);
            echo "\" usemap=\"#Tulio\" class=\"transparencia\">

";
        }
        // line 527
        echo "
";
        // line 528
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 9)) {
            // line 529
            echo "
  <div class=\"titulo\" id=\"titulo\">
    <div align=\"center\" >Municipio Julio Cesar Salas </div>
  </div>

  ";
            // line 534
            echo twig_template_get_attributes($this, $this, "boton", array(0 => 2, 1 => 2, 2 => "Eje 2 3d", 3 => "Eje Panamericano", 4 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "

 <map name=\"Julio\">
  <area shape=\"poly\" coords=\"283,184,285,201,285,215,285,224,285,234,285,248,285,255,280,261,290,301,288,329,300,357,309,371,307,378,317,381,320,392,330,405,334,416,332,454,335,465,344,466,360,480,378,470,384,462,359,441,352,425,349,405,350,383,349,372,343,363,351,313,370,307,362,293,370,279,370,270,349,247,345,231,341,204,323,173,319,173,301,162\" href=\"";
            // line 537
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 44));
            echo "\" title=\"Arapuey\" alt=\"Arapuey\">
  <div id=\"44\" style=\"display:none\">Arapuey
    ";
            // line 539
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 44, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "          
  </div>
  
  <area shape=\"poly\" coords=\"282,185,284,208,284,220,283,238,285,253,278,259,263,213,270,203,270,193,280,185\" href=\"";
            // line 542
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 45));
            echo "\" title=\"Palmira\" alt=\"Palmira\">
  <div id=\"45\" style=\"display:none\">Palmira
    ";
            // line 544
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 45, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
  </div>
  
  </map>
  ";
            // line 548
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(44, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["paq"]) {
                // line 549
                echo "    ";
                echo twig_template_get_attributes($this, $this, "elColor", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => $context["paq"], 2 => "transparencia", 3 => $context["paq"]), "method");
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 551
            echo "  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/colores/transparencia.png"), "html", null, true);
            echo "\" usemap=\"#Julio\" class=\"transparencia\">

";
        }
        // line 554
        echo "
";
        // line 555
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 10)) {
            // line 556
            echo "
  <div class=\"titulo\" id=\"titulo\">
    <div align=\"center\" >Municipio Justo Brice&ntilde;o </div>
  </div>

  ";
            // line 561
            echo twig_template_get_attributes($this, $this, "boton", array(0 => 2, 1 => 2, 2 => "Eje 2 3d", 3 => "Eje Panamericano", 4 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "

  <map name=\"Justo\">
    <area shape=\"poly\" coords=\"365,252,384,227,405,213,411,210,423,219,425,227,438,248,440,252,419,255,396,255,387,250,379,250,371,257,366,254\" href=\"";
            // line 564
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 46));
            echo "\" title=\"San Cristobal de Torondy\" alt=\"San Cristobal de Torondoy\">
    <div id=\"46\" style=\"display:none\">San Cristobal de Torondoy
      ";
            // line 566
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 46, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"285,177,354,156,355,160,346,172,347,185,347,205,349,218,343,235,346,246,362,255,373,261,383,280,384,296,382,307,368,322,368,340,371,359,377,372,378,377,372,391,371,403,372,409,356,426,342,438,341,439,330,435,313,440,301,447,298,459,279,456,270,447,262,433,244,423,239,436,238,451,242,475,238,475,228,461,206,457,189,453,180,446,198,425,207,407,208,397,211,389,211,376,221,360,235,328,255,304,266,283,268,270,252,251,238,239,231,209,243,208,257,215,274,228,282,223,276,198,283,178,293,176\" href=\"";
            // line 569
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 47));
            echo "\" title=\"Torondoy\" alt=\"Torondoy\">
    <div id=\"47\" style=\"display:none\">Torondoy
      ";
            // line 571
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 47, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
  </map>

  ";
            // line 576
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(46, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["paq"]) {
                // line 577
                echo "   ";
                echo twig_template_get_attributes($this, $this, "elColor", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => $context["paq"], 2 => "transparencia", 3 => $context["paq"]), "method");
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 579
            echo "   <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/colores/transparencia.png"), "html", null, true);
            echo "\" usemap=\"#Justo\" class=\"transparencia\">

";
        }
        // line 581
        echo " 

";
        // line 583
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 11)) {
            // line 584
            echo "
  <div class=\"titulo\" id=\"titulo\">
    <div align=\"center\" >Municipio Obispo Ramos de Lora </div>
  </div>

  ";
            // line 589
            echo twig_template_get_attributes($this, $this, "boton", array(0 => 2, 1 => 2, 2 => "Eje 2 3d", 3 => "Eje Panamericano", 4 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "

  <map name=\"Obispo\">
    <area shape=\"poly\" coords=\"271,260,269,274,272,280,282,284,282,309,278,320,280,330,284,339,283,354,280,365,283,373,282,386,274,397,282,415,284,419,284,432,312,421,311,370,317,362,327,365,337,373,342,388,351,403,372,416,398,425,416,434,411,424,413,419,413,408,408,391,405,367,404,350,403,340,415,330,419,314,421,303,419,296,417,290,418,283,412,269,408,266,410,258,409,250,409,243,404,238,404,228\" href=\"";
            // line 592
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 48));
            echo "\" title=\"Eloy Paredes\" alt=\"Eloy Paredes\">
    <div id=\"48\" style=\"display:none\">Eloy Paredes
      ";
            // line 594
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 48, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"406,229,404,237,409,244,409,255,408,265,413,272,415,279,417,285,418,294,423,304,418,324,416,334,405,342,404,347,407,356,408,377,411,399,414,408,412,415,413,420,412,423,415,434,429,443,440,446,452,459,465,472,465,470,463,463,454,455,452,452,451,443,444,430,441,400,447,394,458,386,459,379,443,365,446,349,463,322,471,298,471,289,469,277,461,263,458,254,457,239,453,234,450,229,445,220\" href=\"";
            // line 597
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 49));
            echo "\" title=\"San Rafael de Alcazar\" alt=\"San Rafael de Alcazar\">
    <div id=\"49\" style=\"display:none\">San Rafael de Alcazar
      ";
            // line 599
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 49, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"269,259,267,272,267,278,280,285,281,290,282,302,283,307,279,316,278,329,281,337,281,355,279,364,282,372,282,384,275,395,274,399,282,418,285,430,268,435,266,435,258,426,248,420,236,420,227,430,222,435,215,424,208,406,207,395,205,379,196,364,183,353,171,348,159,347,162,315,174,301,176,280,237,267\" href=\"";
            // line 602
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 50));
            echo "\" title=\"Santa Elena de Arenales\" alt=\"Santa Elena de Arenales\">
    <div id=\"50\" style=\"display:none\">Santa Elena de Arenales
      ";
            // line 604
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 50, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
  </map>

  ";
            // line 609
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(48, 50));
            foreach ($context['_seq'] as $context["_key"] => $context["paq"]) {
                // line 610
                echo "    ";
                echo twig_template_get_attributes($this, $this, "elColor", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => $context["paq"], 2 => "transparencia", 3 => $context["paq"]), "method");
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 612
            echo "  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/colores/transparencia.png"), "html", null, true);
            echo "\" usemap=\"#Obispo\" class=\"transparencia\">

";
        }
        // line 614
        echo " 
 
";
        // line 616
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 12)) {
            // line 617
            echo "
  <div class=\"titulo\" id=\"titulo\">
    <div align=\"center\" >Municipio Cardenal Quintero </div>
  </div>

  ";
            // line 622
            echo twig_template_get_attributes($this, $this, "boton", array(0 => 3, 1 => 2, 2 => "Eje 2 3d", 3 => "Eje Páramo", 4 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
  
  <map name=\"Cardenal\">
    <area shape=\"poly\" coords=\"329,313,329,323,333,330,322,352,323,358,327,364,311,365,289,376,243,402,225,410,206,410,204,399,211,368,204,370,193,368,178,369,166,370,157,357,164,341,175,331,184,331,177,308,186,296,207,297,226,292,236,282,252,280,274,270,285,274,301,283,304,294,310,302,318,304,325,310,328,314\" href=\"";
            // line 625
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 51));
            echo "\" title=\"Santo Domingo\" alt=\"Santo Domingo\">
    <div id=\"51\" style=\"display:none\">Santo Domingo
      ";
            // line 627
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 51, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"330,314,336,330,324,351,330,364,336,365,351,378,358,377,363,377,380,383,391,382,398,370,403,351,413,333,432,325,449,315,446,307,456,290,470,275,475,259,468,249,458,243,434,245,412,253,407,259,401,273,388,275,381,277,371,285,361,300,356,306,345,311\" href=\"";
            // line 630
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 52));
            echo "\" title=\"Las Piedras\" alt=\"Las Piedras\">
    <div id=\"52\" style=\"display:none\">Las Piedras
      ";
            // line 632
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 52, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
  </map>

  ";
            // line 637
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(51, 52));
            foreach ($context['_seq'] as $context["_key"] => $context["paq"]) {
                // line 638
                echo "   ";
                echo twig_template_get_attributes($this, $this, "elColor", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => $context["paq"], 2 => "transparencia", 3 => $context["paq"]), "method");
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 640
            echo "   <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/colores/transparencia.png"), "html", null, true);
            echo "\" usemap=\"#Cardenal\" class=\"transparencia\">

";
        }
        // line 642
        echo " 
 
";
        // line 644
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 13)) {
            // line 645
            echo "
  <div class=\"titulo\" id=\"titulo\">
    <div align=\"center\" >Municipio Miranda </div>
  </div>

  ";
            // line 650
            echo twig_template_get_attributes($this, $this, "boton", array(0 => 3, 1 => 2, 2 => "Eje 2 3d", 3 => "Eje Páramo", 4 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "

  <map name=\"Miranda\">
    <area shape=\"poly\" coords=\"292,338,287,340,289,347,271,350,269,354,264,357,258,357,253,359,251,373,260,375,267,382,267,392,274,398,274,405,292,412,300,415,303,420,302,425,307,432,308,451,319,451,339,444,353,425,350,422,341,409,340,388,343,382,332,381,326,374,317,370,306,364,292,337\" href=\"";
            // line 653
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 53));
            echo "\" title=\"Andres Eloy Blanco\" alt=\"Andres Eloy Blanco\">
    <div id=\"53\" style=\"display:none\">Andres Eloy Blanco
      ";
            // line 655
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 53, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"308,450,307,436,303,425,304,420,275,403,275,399,266,391,266,384,258,374,251,374,251,363,251,360,237,369,227,369,215,359,188,384,187,388,191,400,198,405,203,419,211,440,220,447,224,456,235,465,251,471,266,472,287,468,294,463,301,451,307,451\" href=\"";
            // line 658
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 54));
            echo "\" title=\"La Venta\" alt=\"La Venta\">
    <div id=\"54\" style=\"display:none\">La Venta
      ";
            // line 660
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 54, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"221,164,233,162,243,168,291,168,293,218,301,225,311,227,327,239,334,246,328,263,329,277,328,285,319,293,314,295,307,294,295,296,292,302,292,316,291,329,292,335,285,339,285,345,275,346,270,349,263,353,255,354,249,359,245,364,237,367,230,367,224,364,216,355,217,342,216,331,226,312,226,306,218,290,216,276,214,258,213,247,222,231,230,221,233,206,230,194,227,181,218,171\" href=\"";
            // line 663
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 55));
            echo "\" title=\"Pi&ntilde;ango\" alt=\"Pi&ntilde;ango\">
    <div id=\"55\" style=\"display:none\">Piñango
      ";
            // line 665
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 55, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"292,335,293,300,304,295,318,296,329,285,328,271,328,261,332,247,364,230,382,214,400,228,411,245,412,262,403,293,408,307,414,316,425,348,417,364,437,400,424,407,418,412,406,409,401,414,390,408,378,416,363,420,353,428,347,418,340,407,341,389,344,381,331,380,326,375,318,372,309,366,306,362,291,338\" href=\"";
            // line 668
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 56));
            echo "\" title=\"Timotes\" alt=\"Timotes\">
    <div id=\"56\" style=\"display:none\">Timotes
      ";
            // line 670
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 56, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
  </map>

  ";
            // line 675
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(53, 56));
            foreach ($context['_seq'] as $context["_key"] => $context["paq"]) {
                // line 676
                echo "   ";
                echo twig_template_get_attributes($this, $this, "elColor", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => $context["paq"], 2 => "transparencia", 3 => $context["paq"]), "method");
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 678
            echo "  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/colores/transparencia.png"), "html", null, true);
            echo "\" class=\"transparencia\" usemap=\"#Miranda\" >

";
        }
        // line 680
        echo " 

";
        // line 682
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 14)) {
            // line 683
            echo "
  <div class=\"titulo\" id=\"titulo\">
    <div align=\"center\" >Municipio Pueblo Llano </div>
  </div>

  ";
            // line 688
            echo twig_template_get_attributes($this, $this, "boton", array(0 => 3, 1 => 2, 2 => "Eje 2 3d", 3 => "Eje Páramo", 4 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "

  <map name=\"P_llano\">
    <area shape=\"poly\" coords=\"273,403,289,391,302,385,306,366,316,351,339,340,348,338,363,337,381,324,390,303,416,292,432,283,477,273,461,252,457,249,435,254,418,253,391,253,288,264,283,279,277,285,271,285,256,295,250,297,239,294,225,303,207,295,196,301,167,309,152,323,207,351,208,375,216,387,235,388,245,400,259,406,279,402\" href=\"";
            // line 691
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 57));
            echo "\" title=\"Pueblo Llano\" alt=\"Pueblo Llano\">
    <div id=\"57\" style=\"display:none\">Pueblo Llano
      ";
            // line 693
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 57, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
  </map>
  ";
            // line 697
            echo twig_template_get_attributes($this, $this, "elColor", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 57, 2 => "transparencia", 3 => "14"), "method");
            echo "
  <img src=\"";
            // line 698
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/colores/transparencia.png"), "html", null, true);
            echo "\" class=\"transparencia\" usemap=\"#P_llano\" >

";
        }
        // line 700
        echo " 
 
";
        // line 702
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 15)) {
            // line 703
            echo "
  <div class=\"titulo\" id=\"titulo\">
    <div align=\"center\" >Municipio Rangel </div>
  </div>

  ";
            // line 708
            echo twig_template_get_attributes($this, $this, "boton", array(0 => 3, 1 => 2, 2 => "Eje 3 3d", 3 => "Eje Páramo", 4 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "

  <map name=\"Rangel\">
    <area shape=\"poly\" coords=\"192,342,192,335,188,332,188,327,189,325,188,319,185,316,182,317,181,297,174,283,172,285,171,290,173,300,174,304,170,309,168,317,161,321,159,321,164,326,168,331,172,336,176,338,181,336,186,336,192,341\" href=\"";
            // line 711
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 58));
            echo "\" title=\"Cacute\" alt=\"Cacute\">
    <div id=\"58\" style=\"display:none\">Cacute
      ";
            // line 713
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 58, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"352,188,341,198,339,209,337,218,340,228,340,233,345,241,343,246,335,256,335,265,334,272,339,286,346,301,350,284,357,282,365,273,368,267,377,253,379,234,379,220,377,211,353,189\" href=\"";
            // line 716
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 59));
            echo "\" title=\"La Toma\" alt=\"La Toma\">
    <div id=\"59\" style=\"display:none\">La Toma
     ";
            // line 718
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 59, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "       
    </div>
    
    <area shape=\"poly\" coords=\"291,161,288,172,288,185,290,213,275,212,268,217,267,220,269,233,267,244,262,244,263,258,270,272,270,279,269,282,268,298,258,317,255,329,253,346,234,360,229,367,227,386,237,399,243,415,245,420,251,423,263,418,284,426,296,431,300,435,300,439,293,453,296,459,327,464,363,470,380,474,425,468,442,454,444,443,438,439,400,439,401,429,402,417,401,403,373,392,362,376,362,374,379,371,382,368,382,353,365,325,347,307,336,285,333,273,333,264,332,255,342,243,342,238,336,231,337,227,333,218,336,209,337,198,318,192,305,171,291,161\" href=\"";
            // line 721
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 60));
            echo "\" title=\"Mucuchies\" alt=\"Mucuchies\">
    <div id=\"60\" style=\"display:none\">Mucuchies
      ";
            // line 723
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 60, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"264,221,269,234,269,243,262,241,263,255,265,264,271,275,268,287,267,299,258,311,253,325,252,342,241,351,229,360,225,376,220,366,210,359,195,350,194,341,194,335,190,329,191,325,183,316,185,298,176,281,189,267,200,249,204,242,224,231,249,225,265,219\" href=\"";
            // line 726
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 61));
            echo "\" title=\"Mucurub&aacute;\" alt=\"Mucurub&aacute;\">
    <div id=\"61\" style=\"display:none\">Mucurub&aacute;
      ";
            // line 728
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 61, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"352,186,368,178,373,173,387,176,393,180,402,188,406,201,415,220,424,232,432,240,436,248,428,258,434,274,427,279,418,292,408,302,411,317,420,328,441,325,462,329,457,348,458,360,453,367,441,374,436,383,443,405,450,435,448,440,445,444,439,438,402,438,403,402,372,391,363,373,375,373,382,368,384,350,349,305,351,284,360,283,376,263,380,246,379,210,352,186,353,186\" href=\"";
            // line 731
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 62));
            echo "\" title=\"San Rafael\" alt=\"San Rafael\">
    <div id=\"62\" style=\"display:none\">San Rafael
      ";
            // line 733
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 62, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
  </map>
  ";
            // line 737
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(58, 62));
            foreach ($context['_seq'] as $context["_key"] => $context["paq"]) {
                // line 738
                echo "   ";
                echo twig_template_get_attributes($this, $this, "elColor", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => $context["paq"], 2 => "transparencia", 3 => $context["paq"]), "method");
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 740
            echo "   <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/colores/transparencia.png"), "html", null, true);
            echo "\" usemap=\"#Rangel\" class=\"transparencia\">

";
        }
        // line 743
        echo " 
";
        // line 744
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 16)) {
            // line 745
            echo "
  <div class=\"titulo\" id=\"titulo\">
    <div align=\"center\" >Municipio Aricagua </div>
  </div>

  ";
            // line 750
            echo twig_template_get_attributes($this, $this, "boton", array(0 => 4, 1 => 4, 2 => "Eje 4 3d", 3 => "Eje Pueblos del Sur", 4 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "

  <map name=\"aricagua\">
    <area shape=\"poly\" coords=\"267,272,269,292,293,301,295,314,301,320,309,325,309,334,309,337,297,344,293,354,292,356,295,363,299,372,302,378,307,390,308,391,318,392,327,382,340,377,348,372,365,351,370,353,384,349,390,342,394,336,396,323,396,309,412,301,423,299,434,305,438,317,445,323,457,316,470,320,477,302,468,302,462,293,452,281,447,275,449,268,441,261,440,253,423,246,414,240,409,224,405,219,392,216,384,208,383,198,375,199,369,196,358,201,351,199,344,210,340,211,332,212,324,221,317,235,310,242,297,250,288,257,283,265,266,275\" href=\"";
            // line 753
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 63));
            echo "\" title=\"Aricagua\" alt=\"Aricagua\">
    <div id=\"63\" style=\"display:none\">Aricagua
      ";
            // line 755
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 63, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
    <area shape=\"poly\" coords=\"267,275,266,284,268,294,293,305,294,314,300,322,306,329,306,336,293,351,291,358,297,371,303,384,308,393,300,400,295,403,282,401,272,408,264,404,245,404,220,412,208,414,201,419,200,423,190,431,175,431,166,437,157,430,161,420,166,404,178,400,177,385,191,377,199,365,204,365,212,367,227,358,237,349,238,339,241,331,235,318,242,311,240,298,266,275\" href=\"";
            // line 758
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 64));
            echo "\" title=\"San Antonio\" alt=\"San Antonio\">
    <div id=\"64\" style=\"display:none\">San Antonio
      ";
            // line 760
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 64, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    
  </map>

  ";
            // line 765
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(63, 64));
            foreach ($context['_seq'] as $context["_key"] => $context["paq"]) {
                // line 766
                echo "   ";
                echo twig_template_get_attributes($this, $this, "elColor", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => $context["paq"], 2 => "transparencia", 3 => $context["paq"]), "method");
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 768
            echo "   <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/colores/transparencia.png"), "html", null, true);
            echo "\" usemap=\"#Aricagua\" class=\"transparencia\">
   
";
        }
        // line 771
        echo "
";
        // line 772
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 17)) {
            // line 773
            echo "
  <div class=\"titulo\" id=\"titulo\">
    <div align=\"center\" >Municipio Arzobispo Chac&oacute;n </div>
  </div>
  
  ";
            // line 778
            echo twig_template_get_attributes($this, $this, "boton", array(0 => 4, 1 => 4, 2 => "Eje 4 3d", 3 => "Eje Pueblos del Sur", 4 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "

  <map name=\"Arzobispo\">
    <area shape=\"poly\" coords=\"175,299,178,318,169,319,158,345,176,350,185,349,209,361,216,348,222,341,221,329,237,325,253,322,254,332,263,328,272,326,283,319,292,317,303,318,328,294,337,289,327,286,308,279,293,269,287,264,286,243,271,244,265,252,265,255,257,259,245,262,236,275,227,281,210,291,204,294,200,294,192,298\" href=\"";
            // line 781
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 65));
            echo "\" title=\"Canagua\" alt=\"Canagua\">
    <div id=\"65\" style=\"display:none\">Canagua
      ";
            // line 783
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 65, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>

    <area shape=\"poly\" coords=\"227,184,215,193,209,200,203,203,196,205,178,211,175,226,171,235,157,245,160,252,173,270,176,286,177,300,188,299,197,292,206,292,216,287,224,281,230,276,203,245,203,237,210,231,219,222,222,217\"  href=\"";
            // line 786
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 66));
            echo "\" title=\"Capuri\" alt=\"Capuri\">
    <div id=\"66\" style=\"display:none\">Capuri
      ";
            // line 788
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 66, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>

    <area shape=\"poly\" coords=\"331,196,318,201,305,215,304,220,288,214,288,222,282,224,286,236,288,254,289,264,303,274,332,285,335,287,339,278,333,266,331,256,333,247,344,240,354,242,363,244,369,232,377,231,384,212,379,214,368,226,364,231,357,230,346,217\" href=\"";
            // line 791
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 67));
            echo "\" title=\"Chacant&aacute;\" alt=\"Chacant&aacute;\">
    <div id=\"67\" style=\"display:none\">Chacant&aacute;
      ";
            // line 793
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 67, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>

    <area shape=\"poly\" coords=\"234,172,228,182,229,192,228,198,226,203,226,214,213,232,202,241,210,253,219,263,231,275,238,267,244,259,254,258,263,255,264,249,268,243,281,242,288,242,280,226,280,222,287,221,287,212,287,211,277,205,276,205,265,217,256,210,251,198,251,193,248,185\"  href=\"";
            // line 796
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 68));
            echo "\" title=\"El Molino\" alt=\"El Molino\">
    <div id=\"68\" style=\"display:none\">El Molino
      ";
            // line 798
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 68, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>

    <area shape=\"poly\" coords=\"159,348,168,360,174,378,179,391,172,404,164,423,161,425,166,435,168,448,169,453,172,455,199,435,206,436,214,445,215,427,228,417,238,409,239,399,234,387,235,376,241,364,251,353,254,345,254,332,253,325,238,327,224,331,225,338,221,345,214,355,210,362,201,360,186,351,179,351,158,348\" href=\"";
            // line 801
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 69));
            echo "\" title=\"Guaymaral\" alt=\"Guaymaral\">
    <div id=\"69\" style=\"display:none\">Guaymaral
      ";
            // line 803
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 69, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>

    <area shape=\"poly\" coords=\"385,212,382,226,379,231,369,233,364,246,373,271,378,292,388,304,397,317,408,308,415,301,423,300,430,294,438,286,451,280,456,277,476,244,471,231,470,226,460,213,453,213,444,216,432,215,408,220,404,219\" href=\"";
            // line 806
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 70));
            echo "\" title=\"Mucutuy\" alt=\"Mucutuy\">
    <div id=\"70\" style=\"display:none\">Mucutuy
      ";
            // line 808
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 70, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>

    <area shape=\"poly\" coords=\"363,246,343,242,338,246,333,252,335,260,335,267,339,271,341,285,336,289,333,294,328,295,316,306,304,321,292,318,279,323,270,326,260,332,255,335,254,351,246,358,239,369,235,379,236,385,240,398,239,408,224,423,215,427,216,440,214,446,213,460,216,468,223,469,226,474,224,490,225,492,234,486,248,485,262,479,273,479,288,483,299,463,305,446,315,440,315,431,324,420,337,408,340,404,352,406,360,405,374,392,377,385,376,382,381,374,374,359,381,347,382,341,386,330,396,319,391,309,378,292,375,280,362,246\" href=\"";
            // line 811
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 71));
            echo "\" title=\"Mucuchachi\" alt=\"Mucuchachi\">
    <div id=\"71\" style=\"display:none\">Mucuchachi
      ";
            // line 813
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 71, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>

  </map>
  ";
            // line 817
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(65, 71));
            foreach ($context['_seq'] as $context["_key"] => $context["paq"]) {
                // line 818
                echo "    ";
                echo twig_template_get_attributes($this, $this, "elColor", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => $context["paq"], 2 => "transparencia", 3 => $context["paq"]), "method");
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 820
            echo "  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/colores/transparencia.png"), "html", null, true);
            echo "\" usemap=\"#Arzobispo\" class=\"transparencia\" >

";
        }
        // line 823
        echo "
";
        // line 824
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 18)) {
            // line 825
            echo "
  <div class=\"titulo\" id=\"titulo\">
    <div align=\"center\" >Municipio Guaraque </div>
  </div>

  ";
            // line 830
            echo twig_template_get_attributes($this, $this, "boton", array(0 => 4, 1 => 4, 2 => "Eje 4 3d", 3 => "Eje Pueblos del Sur", 4 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "

  <map name=\"Guaraque\">

    <area shape=\"poly\" coords=\"332,180,322,226,311,242,305,263,303,287,302,300,277,306,263,315,194,318,186,298,182,288,172,284,164,263,168,240,167,237,180,221,191,208,211,201,221,194,220,191,233,186,251,188,271,195,292,183,305,177,330,178\" href=\"";
            // line 834
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 72));
            echo "\" title=\"Guaraque\" alt=\"Guaraque\">
    <div id=\"72\" style=\"display:none\">Guaraque
      ";
            // line 836
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 72, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>

    <area shape=\"poly\" coords=\"361,474,373,471,369,443,369,420,371,401,350,372,340,359,344,343,315,318,303,302,281,308,266,316,196,320,194,336,191,357,191,373,200,390,216,403,225,408,225,419,232,438,243,458,246,462,265,452,284,443,303,441,322,443,342,448,352,459,362,475\" href=\"";
            // line 839
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 73));
            echo "\" title=\"Mesa de Quintero\" alt=\"Mesa de Quintero\">
    <div id=\"73\" style=\"display:none\">Mesa de Quintero
      ";
            // line 841
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 73, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>

    <area shape=\"poly\" coords=\"373,158,344,177,332,180,326,209,324,225,314,243,306,268,304,291,304,302,316,310,317,317,347,342,364,332,371,321,371,311,376,292,379,285,411,277,421,280,434,275,438,265,448,253,454,247,455,245,434,202\" href=\"";
            // line 844
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 74));
            echo "\" title=\"Rio Negro\" alt=\"Rio Negro\">
    <div id=\"74\" style=\"display:none\">Rio Negro
      ";
            // line 846
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 74, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>

  </map>

  ";
            // line 851
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(72, 74));
            foreach ($context['_seq'] as $context["_key"] => $context["paq"]) {
                // line 852
                echo "    ";
                echo twig_template_get_attributes($this, $this, "elColor", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => $context["paq"], 2 => "transparencia", 3 => $context["paq"]), "method");
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 854
            echo "  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/colores/transparencia.png"), "html", null, true);
            echo "\" usemap=\"#Guaraque\" class=\"transparencia\">

";
        }
        // line 857
        echo "
";
        // line 858
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 19)) {
            // line 859
            echo "
  <div class=\"titulo\" id=\"titulo\">
    <div align=\"center\" >Municipio Padre Noguera </div>
  </div>

  ";
            // line 864
            echo twig_template_get_attributes($this, $this, "boton", array(0 => 4, 1 => 4, 2 => "Eje 4 3d", 3 => "Eje Pueblos del Sur", 4 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "

  <map name=\"Noguera\">
    <area shape=\"poly\" coords=\"310,157,276,195,272,215,264,229,249,237,243,261,236,289,207,314,191,333,199,354,203,367,199,390,204,403,211,408,206,436,191,467,188,470,191,475,203,474,212,473,220,469,231,474,243,468,257,463,275,464,275,425,266,422,262,416,270,386,275,360,304,331,323,325,338,331,357,342,374,334,390,328,415,324,435,321,450,304,456,289,460,263,438,257,430,245,427,214,427,195,405,180,344,227,333,224,322,214,322,185\" href=\"";
            // line 867
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 75));
            echo "\" title=\"Santa Maria de Caparo\" alt=\"Santa Maria de Caparo\">
    <div id=\"75\" style=\"display:none\">Santa Maria de Caparo
      ";
            // line 869
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 75, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>

  </map>
  ";
            // line 873
            echo twig_template_get_attributes($this, $this, "elColor", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 75, 2 => "transparencia", 3 => "19"), "method");
            echo "
  <img src=\"";
            // line 874
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/colores/transparencia.png"), "html", null, true);
            echo "\" class=\"transparencia\" usemap=\"#Noguera\" >

";
        }
        // line 877
        echo "
";
        // line 878
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 20)) {
            // line 879
            echo "  <div class=\"titulo\" id=\"titulo\">
    <div align=\"center\" >Municipio Rivas Dávila </div>
  </div>

  ";
            // line 883
            echo twig_template_get_attributes($this, $this, "boton", array(0 => 5, 1 => 4, 2 => "Eje 5 3d", 3 => "Eje Mocotíes", 4 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "

  <map name=\"Rivas\">
    <area shape=\"poly\" coords=\"417,390,406,365,401,347,397,338,393,325,388,296,388,280,397,268,396,249,390,238,396,220,402,210,432,211,455,216,472,228,474,257,474,281,468,296,469,313,464,337,462,356,461,370,467,384,456,394,445,395,412,387\" href=\"";
            // line 886
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 76));
            echo "\" title=\"Geronimo Maldonado\" alt=\"Geronimo Maldonado\">
    <div id=\"76\" style=\"display:none\">Geronimo Maldonado
      ";
            // line 888
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 76, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>
    <area shape=\"poly\" coords=\"397,211,192,319,183,323,167,345,157,403,165,417,172,418,187,414,194,411,239,412,246,427,249,435,276,462,290,455,304,436,315,419,341,410,356,406,368,391,386,382,399,381,412,387\" href=\"";
            // line 890
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 77));
            echo "\" title=\"Bailadores\" alt=\"Bailadores\">
    <div id=\"77\" style=\"display:none\">Bailadores
      ";
            // line 892
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 77, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>

  </map>
  ";
            // line 896
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(76, 77));
            foreach ($context['_seq'] as $context["_key"] => $context["paq"]) {
                // line 897
                echo "    ";
                echo twig_template_get_attributes($this, $this, "elColor", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => $context["paq"], 2 => "transparencia", 3 => $context["paq"]), "method");
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 899
            echo "  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/colores/transparencia.png"), "html", null, true);
            echo "\" usemap=\"#Rivas\" class=\"transparencia\" >

";
        }
        // line 902
        echo "
";
        // line 903
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 21)) {
            // line 904
            echo "
  <div class=\"titulo\" id=\"titulo\">
    <div align=\"center\" >Municipio Tovar </div>
  </div>

  ";
            // line 909
            echo twig_template_get_attributes($this, $this, "boton", array(0 => 5, 1 => 1, 2 => "Eje 5 3d", 3 => "Eje Mocotíes", 4 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "

  <map name=\"Tovar\">
    <area shape=\"poly\" coords=\"170,257,179,240,317,253,301,263,257,266,240,266,221,259,171,256\" href=\"";
            // line 912
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 78));
            echo "\" title=\"El Amparo\" alt=\"El Amparo\">
    <div id=\"78\" style=\"display:none\">El Amparo
      ";
            // line 914
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 78, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>

    <area shape=\"poly\" coords=\"169,258,163,268,186,275,206,282,224,293,233,309,232,346,230,364,223,378,221,388,226,399,224,414,218,431,215,447,219,465,222,470,230,466,228,447,230,431,229,417,244,379,249,366,256,356,258,343,252,324,264,317,277,311,282,295,267,282,253,280,238,278,218,271,210,261,170,258\" href=\"";
            // line 917
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 79));
            echo "\" title=\"El Llano\" alt=\"El Llano\">
    <div id=\"79\" style=\"display:none\">El Llano
      ";
            // line 919
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 79, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>

    <area shape=\"poly\" coords=\"243,390,269,390,280,391,293,392,305,398,318,404,323,404,337,417,340,421,362,433,349,441,334,448,323,455,314,460,287,461,264,458,245,459,231,465,230,440,233,425,236,408,242,389\" href=\"";
            // line 922
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 80));
            echo "\" title=\"San Francisco\" alt=\"San Francisco\">
    <div id=\"80\" style=\"display:none\">San Francisco
      ";
            // line 924
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 80, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>

    <area shape=\"poly\" coords=\"215,262,225,271,245,278,262,278,271,280,282,292,281,303,278,315,256,327,259,338,259,353,255,365,244,388,255,388,274,390,292,390,298,391,306,397,319,402,322,399,333,408,341,419,345,418,365,433,375,425,382,414,388,394,399,378,405,368,423,350,428,338,427,318,428,297,437,283,450,286,463,291,466,291,481,277,478,261,467,227,465,212,462,181,456,158,425,159,394,170,375,188,366,214,348,221,337,232,331,249,315,256,301,262,273,265,252,267,235,264,212,259\" href=\"";
            // line 927
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 81));
            echo "\" title=\"Tovar\" alt=\"Tovar\">
    <div id=\"81\" style=\"display:none\">Tovar
      ";
            // line 929
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 81, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>

  </map>

  ";
            // line 934
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(78, 81));
            foreach ($context['_seq'] as $context["_key"] => $context["paq"]) {
                // line 935
                echo "    ";
                echo twig_template_get_attributes($this, $this, "elColor", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => $context["paq"], 2 => "transparencia", 3 => $context["paq"]), "method");
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 937
            echo "  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/colores/transparencia.png"), "html", null, true);
            echo "\" usemap=\"#Tovar\" class=\"transparencia\">

";
        }
        // line 940
        echo "
";
        // line 941
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 22)) {
            // line 942
            echo "
  <div class=\"titulo\" id=\"titulo\">
    <div align=\"center\" >Municipio Antonio Pinto Salinas </div>
  </div>

  ";
            // line 947
            echo twig_template_get_attributes($this, $this, "boton", array(0 => 5, 1 => 1, 2 => "Eje 5 3d", 3 => "Eje Mocotíes", 4 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "

  <map name=\"Antonio\">
    <area shape=\"poly\" coords=\"344,162,267,171,274,195,264,201,268,206,264,226,259,239,256,257,261,281,263,299,269,319,267,327,260,331,241,329,243,342,239,359,227,375,213,395,226,410,241,420,247,421,257,432,269,437,276,453,294,479,300,468,304,464,306,449,314,437,318,432,318,417,331,407,337,389,346,385,345,375,354,359,346,341,337,334,337,324,322,305,335,301,356,294,360,294,374,281,352,273,338,265,331,261,309,259,302,252,305,244,309,225,318,221,326,209,339,206,334,203,342,193,344,163,267,173\" href=\"";
            // line 950
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 82));
            echo "\" title=\"Santa Cruz de Mora\" alt=\"Santa Cruz de Mora\">
    <div id=\"82\" style=\"display:none\">Santa Cruz de Mora
      ";
            // line 952
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 82, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>

    <area shape=\"poly\" coords=\"373,158,344,163,343,193,345,196,336,203,342,207,334,211,330,210,317,225,310,228,309,234,304,251,311,261,329,260,347,266,363,273,386,282,391,273,397,263,400,231,393,230,389,227,387,204,376,203,363,195,362,186\" href=\"";
            // line 955
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 83));
            echo "\" title=\"Mesa Bolivar\" alt=\"Mesa Bolivar\">
    <div id=\"83\" style=\"display:none\">Mesa Bolivar
     ";
            // line 957
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 83, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>

    <area shape=\"poly\" coords=\"386,285,374,283,360,296,355,296,324,305,333,319,339,323,340,330,348,343,356,356,356,362,347,375,349,381,354,382,362,386,369,385,373,372,388,360,387,312,375,322,369,317,366,308,371,305,378,290,386,282,377,285,374,284,360,297,355,295,344,303,329,303,322,305\" href=\"";
            // line 960
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 84));
            echo "\" title=\"Mesa de las Palmas\" alt=\"Mesa de las Palmas\">
    <div id=\"84\" style=\"display:none\">Mesa de las Palmas
      ";
            // line 962
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 84, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>

  </map>

  ";
            // line 967
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(82, 84));
            foreach ($context['_seq'] as $context["_key"] => $context["paq"]) {
                // line 968
                echo "    ";
                echo twig_template_get_attributes($this, $this, "elColor", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => $context["paq"], 2 => "transparencia", 3 => $context["paq"]), "method");
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 970
            echo "  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/colores/transparencia.png"), "html", null, true);
            echo "\" usemap=\"#Antonio\" class=\"transparencia\">

";
        }
        // line 973
        echo "
";
        // line 974
        if (((isset($context["id_municipio"]) ? $context["id_municipio"] : $this->getContext($context, "id_municipio")) == 23)) {
            // line 975
            echo "
  <div class=\"titulo\" id=\"titulo\">
    <div align=\"center\" >Municipio Zea </div>
  </div>

  ";
            // line 980
            echo twig_template_get_attributes($this, $this, "boton", array(0 => 5, 1 => 1, 2 => "Eje 5 3d", 3 => "Eje Mocotíes", 4 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "

  <map name=\"Zea\">
    <area shape=\"poly\" coords=\"431,154,418,158,412,168,411,183,408,196,392,208,387,235,376,257,372,274,361,300,351,306,318,325,300,338,288,342,308,343,327,345,355,348,376,349,388,349,382,340,396,326,396,321,397,306,405,297,411,291,420,275,413,244,421,231,431,214,422,200,422,196,422,195,428,169\"  href=\"";
            // line 983
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 85));
            echo "\" title=\"Ca&ntilde;o Tigre\" alt=\"Ca&ntilde;o Tigre\">
    <div id=\"85\" style=\"display:none\">Caño Tigre
      ";
            // line 985
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 85, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "
    </div>

    <area shape=\"poly\" coords=\"419,276,455,265,468,291,453,304,457,315,458,321,457,350,448,367,441,377,435,385,418,393,395,397,370,410,363,415,356,431,351,443,338,446,329,453,320,461,318,472,194,464,188,456,189,443,199,431,222,410,255,372,262,362,288,342,306,344,329,345,344,348,360,351,389,349,384,339,398,325,395,310,404,297,413,288,417,277\" href=\"";
            // line 988
            echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_parroquia_ventana", array("id_parroquia" => 86));
            echo "\" title=\"Zea\" alt=\"Zea\">
    <div id=\"86\" style=\"display:none\">Zea
      ";
            // line 990
            echo twig_template_get_attributes($this, $this, "datosPaq", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => 86, 2 => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array())), "method");
            echo "  </div>
    </div>
  </map>
  ";
            // line 993
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(85, 86));
            foreach ($context['_seq'] as $context["_key"] => $context["paq"]) {
                // line 994
                echo "    ";
                echo twig_template_get_attributes($this, $this, "elColor", array(0 => (isset($context["votosEje"]) ? $context["votosEje"] : $this->getContext($context, "votosEje")), 1 => $context["paq"], 2 => "transparencia", 3 => $context["paq"]), "method");
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 996
            echo "  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/parroquias/colores/transparencia.png"), "html", null, true);
            echo "\" usemap=\"#Zea\" class=\"transparencia\">

";
        }
        // line 998
        echo " ";
    }

    // line 33
    public function getelColor($__losVotos__ = null, $__idPaq__ = null, $__laClass__ = null, $__municipio__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "losVotos" => $__losVotos__,
            "idPaq" => $__idPaq__,
            "laClass" => $__laClass__,
            "municipio" => $__municipio__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 34
            echo "  
  ";
            // line 35
            list($context["totalVotos1"], $context["totalVotos2"], $context["totalVotos3"]) =             array(0, 0, 0);
            // line 36
            echo "  ";
            list($context["totalVotosLista1"], $context["totalVotosLista2"], $context["totalVotosLista3"]) =             array(0, 0, 0);
            // line 37
            echo "  ";
            $context["colorMunicipio"] = "verde";
            // line 38
            echo "
  ";
            // line 39
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["losVotos"]) ? $context["losVotos"] : $this->getContext($context, "losVotos")));
            foreach ($context['_seq'] as $context["_key"] => $context["votos"]) {
                if ((twig_template_get_attributes($this, $context["votos"], "getIdParroquia", array()) == (isset($context["idPaq"]) ? $context["idPaq"] : $this->getContext($context, "idPaq")))) {
                    echo "                  
    ";
                    // line 40
                    if (((twig_template_get_attributes($this, twig_template_get_attributes($this, $context["votos"], "candidato", array()), "partido", array()) == "psuv") || (twig_template_get_attributes($this, twig_template_get_attributes($this, $context["votos"], "candidato", array()), "partido", array()) == "psuv-gpp"))) {
                        echo "      
      ";
                        // line 41
                        $context["totalVotos1"] = ((isset($context["totalVotos1"]) ? $context["totalVotos1"] : $this->getContext($context, "totalVotos1")) + twig_template_get_attributes($this, $context["votos"], "votos", array()));
                        // line 42
                        echo "      ";
                        $context["totalVotosLista1"] = ((isset($context["totalVotosLista1"]) ? $context["totalVotosLista1"] : $this->getContext($context, "totalVotosLista1")) + twig_template_get_attributes($this, $context["votos"], "votosLista", array()));
                        // line 43
                        echo "    ";
                    }
                    // line 44
                    echo "    ";
                    if ((twig_template_get_attributes($this, twig_template_get_attributes($this, $context["votos"], "candidato", array()), "partido", array()) == "mud")) {
                        // line 45
                        echo "      ";
                        $context["totalVotos2"] = ((isset($context["totalVotos2"]) ? $context["totalVotos2"] : $this->getContext($context, "totalVotos2")) + twig_template_get_attributes($this, $context["votos"], "votos", array()));
                        // line 46
                        echo "      ";
                        $context["totalVotosLista2"] = ((isset($context["totalVotosLista2"]) ? $context["totalVotosLista2"] : $this->getContext($context, "totalVotosLista2")) + twig_template_get_attributes($this, $context["votos"], "votosLista", array()));
                        // line 47
                        echo "    ";
                    }
                    // line 48
                    echo "    ";
                    if ((twig_template_get_attributes($this, twig_template_get_attributes($this, $context["votos"], "candidato", array()), "partido", array()) == "otros")) {
                        // line 49
                        echo "      ";
                        $context["totalVotos3"] = ((isset($context["totalVotos3"]) ? $context["totalVotos3"] : $this->getContext($context, "totalVotos3")) + twig_template_get_attributes($this, $context["votos"], "votos", array()));
                        // line 50
                        echo "      ";
                        $context["totalVotosLista3"] = ((isset($context["totalVotosLista3"]) ? $context["totalVotosLista3"] : $this->getContext($context, "totalVotosLista3")) + twig_template_get_attributes($this, $context["votos"], "votosLista", array()));
                        // line 51
                        echo "    ";
                    }
                    // line 52
                    echo "  ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['votos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "  
  ";
            // line 54
            if ((((isset($context["totalVotos1"]) ? $context["totalVotos1"] : $this->getContext($context, "totalVotos1")) > (isset($context["totalVotos2"]) ? $context["totalVotos2"] : $this->getContext($context, "totalVotos2"))) && ((isset($context["totalVotos1"]) ? $context["totalVotos1"] : $this->getContext($context, "totalVotos1")) > (isset($context["totalVotos3"]) ? $context["totalVotos3"] : $this->getContext($context, "totalVotos3"))))) {
                // line 55
                echo "    ";
                $context["colorMunicipio"] = "rojo";
                // line 56
                echo "  ";
            }
            // line 57
            echo "  ";
            if ((((isset($context["totalVotos2"]) ? $context["totalVotos2"] : $this->getContext($context, "totalVotos2")) > (isset($context["totalVotos1"]) ? $context["totalVotos1"] : $this->getContext($context, "totalVotos1"))) && ((isset($context["totalVotos2"]) ? $context["totalVotos2"] : $this->getContext($context, "totalVotos2")) > (isset($context["totalVotos3"]) ? $context["totalVotos3"] : $this->getContext($context, "totalVotos3"))))) {
                // line 58
                echo "    ";
                $context["colorMunicipio"] = "azul";
                // line 59
                echo "  ";
            }
            // line 60
            echo "  ";
            if ((((isset($context["totalVotos3"]) ? $context["totalVotos3"] : $this->getContext($context, "totalVotos3")) > (isset($context["totalVotos1"]) ? $context["totalVotos1"] : $this->getContext($context, "totalVotos1"))) && ((isset($context["totalVotos3"]) ? $context["totalVotos3"] : $this->getContext($context, "totalVotos3")) > (isset($context["totalVotos2"]) ? $context["totalVotos2"] : $this->getContext($context, "totalVotos2"))))) {
                // line 61
                echo "    ";
                $context["colorMunicipio"] = "amarillo";
                // line 62
                echo "  ";
            }
            // line 63
            echo "  ";
            // line 64
            echo "  <img id=\"paq_";
            echo twig_escape_filter($this->env, (isset($context["idPaq"]) ? $context["idPaq"] : $this->getContext($context, "idPaq")), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((((("imagenes/merida/parroquias/colores/" . (isset($context["colorMunicipio"]) ? $context["colorMunicipio"] : $this->getContext($context, "colorMunicipio"))) . "/") . (isset($context["idPaq"]) ? $context["idPaq"] : $this->getContext($context, "idPaq"))) . ".png")), "html", null, true);
            echo "\" border=\"0\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["laClass"]) ? $context["laClass"] : $this->getContext($context, "laClass")), "html", null, true);
            echo "\">
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 67
    public function getdatosPaq($__losVotos__ = null, $__idPaq__ = null, $__tipoEncuesta__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "losVotos" => $__losVotos__,
            "idPaq" => $__idPaq__,
            "tipoEncuesta" => $__tipoEncuesta__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 68
            echo "  ";
            if ((twig_length_filter($this->env, (isset($context["losVotos"]) ? $context["losVotos"] : $this->getContext($context, "losVotos"))) > 0)) {
                // line 69
                echo "    <div class=\"datagrid2\">
      <table  border=\"1\">
        <thead>
          <th align=\"center\">Nombre(s) y Apellido(s)</th><th align=\"center\">Partido</th><th align=\"center\">Votos</th>";
                // line 72
                if (((isset($context["tipoEncuesta"]) ? $context["tipoEncuesta"] : $this->getContext($context, "tipoEncuesta")) == "circuito")) {
                    echo "<th align=\"center\">Votos Lista</th>";
                }
                // line 73
                echo "        </thead>              
        ";
                // line 74
                list($context["candidato1"], $context["candidato2"], $context["candidato3"]) =                 array("Sin Candidato", "Sin Candidato", "Sin Candidato");
                // line 75
                echo "        ";
                list($context["partido1"], $context["partido2"], $context["partido3"]) =                 array(0, 0, 0);
                // line 76
                echo "        ";
                list($context["totalVotos1"], $context["totalVotos2"], $context["totalVotos3"]) =                 array(0, 0, 0);
                // line 77
                echo "        ";
                list($context["totalVotosLista1"], $context["totalVotosLista2"], $context["totalVotosLista3"]) =                 array(0, 0, 0);
                // line 78
                echo "        ";
                $context["totalOtros"] = "Sin Candidato";
                // line 79
                echo "        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["losVotos"]) ? $context["losVotos"] : $this->getContext($context, "losVotos")));
                foreach ($context['_seq'] as $context["_key"] => $context["votos"]) {
                    if ((twig_template_get_attributes($this, $context["votos"], "getIdParroquia", array()) == (isset($context["idPaq"]) ? $context["idPaq"] : $this->getContext($context, "idPaq")))) {
                        echo "                  
          ";
                        // line 80
                        if (((twig_template_get_attributes($this, twig_template_get_attributes($this, $context["votos"], "candidato", array()), "partido", array()) == "psuv") || (twig_template_get_attributes($this, twig_template_get_attributes($this, $context["votos"], "candidato", array()), "partido", array()) == "psuv-gpp"))) {
                            // line 81
                            echo "            ";
                            if (( !(null === twig_template_get_attributes($this, twig_template_get_attributes($this, $context["votos"], "candidato", array()), "apellidoNombre", array())) &&  !(null === twig_template_get_attributes($this, twig_template_get_attributes($this, $context["votos"], "candidato", array()), "partido", array())))) {
                                // line 82
                                echo "              ";
                                $context["candidato1"] = twig_template_get_attributes($this, twig_template_get_attributes($this, $context["votos"], "candidato", array()), "apellidoNombre", array());
                                // line 83
                                echo "              ";
                                $context["partido1"] = twig_template_get_attributes($this, twig_template_get_attributes($this, $context["votos"], "candidato", array()), "partido", array());
                                // line 84
                                echo "            ";
                            }
                            // line 85
                            echo "            ";
                            $context["totalVotos1"] = ((isset($context["totalVotos1"]) ? $context["totalVotos1"] : $this->getContext($context, "totalVotos1")) + twig_template_get_attributes($this, $context["votos"], "votos", array()));
                            // line 86
                            echo "            ";
                            $context["totalVotosLista1"] = ((isset($context["totalVotosLista1"]) ? $context["totalVotosLista1"] : $this->getContext($context, "totalVotosLista1")) + twig_template_get_attributes($this, $context["votos"], "votosLista", array()));
                            // line 87
                            echo "          ";
                        }
                        // line 88
                        echo "          ";
                        if ((twig_template_get_attributes($this, twig_template_get_attributes($this, $context["votos"], "candidato", array()), "partido", array()) == "mud")) {
                            // line 89
                            echo "            ";
                            if (( !(null === twig_template_get_attributes($this, twig_template_get_attributes($this, $context["votos"], "candidato", array()), "apellidoNombre", array())) &&  !(null === twig_template_get_attributes($this, twig_template_get_attributes($this, $context["votos"], "candidato", array()), "partido", array())))) {
                                // line 90
                                echo "              ";
                                $context["candidato2"] = twig_template_get_attributes($this, twig_template_get_attributes($this, $context["votos"], "candidato", array()), "apellidoNombre", array());
                                // line 91
                                echo "              ";
                                $context["partido2"] = twig_template_get_attributes($this, twig_template_get_attributes($this, $context["votos"], "candidato", array()), "partido", array());
                                // line 92
                                echo "            ";
                            }
                            // line 93
                            echo "            ";
                            $context["totalVotos2"] = ((isset($context["totalVotos2"]) ? $context["totalVotos2"] : $this->getContext($context, "totalVotos2")) + twig_template_get_attributes($this, $context["votos"], "votos", array()));
                            // line 94
                            echo "            ";
                            $context["totalVotosLista2"] = ((isset($context["totalVotosLista2"]) ? $context["totalVotosLista2"] : $this->getContext($context, "totalVotosLista2")) + twig_template_get_attributes($this, $context["votos"], "votosLista", array()));
                            // line 95
                            echo "          ";
                        }
                        // line 96
                        echo "          ";
                        if ((twig_template_get_attributes($this, twig_template_get_attributes($this, $context["votos"], "candidato", array()), "partido", array()) == "otros")) {
                            // line 97
                            echo "            ";
                            if (( !(null === twig_template_get_attributes($this, twig_template_get_attributes($this, $context["votos"], "candidato", array()), "apellidoNombre", array())) &&  !(null === twig_template_get_attributes($this, twig_template_get_attributes($this, $context["votos"], "candidato", array()), "partido", array())))) {
                                // line 98
                                echo "              ";
                                $context["candidato3"] = twig_template_get_attributes($this, twig_template_get_attributes($this, $context["votos"], "candidato", array()), "apellidoNombre", array());
                                // line 99
                                echo "              ";
                                $context["partido3"] = twig_template_get_attributes($this, twig_template_get_attributes($this, $context["votos"], "candidato", array()), "partido", array());
                                // line 100
                                echo "            ";
                            }
                            // line 101
                            echo "            ";
                            $context["totalVotos3"] = ((isset($context["totalVotos3"]) ? $context["totalVotos3"] : $this->getContext($context, "totalVotos3")) + twig_template_get_attributes($this, $context["votos"], "votos", array()));
                            // line 102
                            echo "            ";
                            $context["totalVotosLista3"] = ((isset($context["totalVotosLista3"]) ? $context["totalVotosLista3"] : $this->getContext($context, "totalVotosLista3")) + twig_template_get_attributes($this, $context["votos"], "votosLista", array()));
                            // line 103
                            echo "          ";
                        }
                        // line 104
                        echo "        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['votos'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo "
        ";
                // line 106
                if (((isset($context["candidato1"]) ? $context["candidato1"] : $this->getContext($context, "candidato1")) != (isset($context["candidato2"]) ? $context["candidato2"] : $this->getContext($context, "candidato2")))) {
                    // line 107
                    echo "          ";
                    if (((isset($context["candidato1"]) ? $context["candidato1"] : $this->getContext($context, "candidato1")) != "Sin Candidato")) {
                        // line 108
                        echo "            <tr>
              <td bgcolor=\"#cececf\">";
                        // line 109
                        echo twig_escape_filter($this->env, (isset($context["candidato1"]) ? $context["candidato1"] : $this->getContext($context, "candidato1")), "html", null, true);
                        echo "</td><td bgcolor=\"#cececf\">";
                        echo twig_escape_filter($this->env, (isset($context["partido1"]) ? $context["partido1"] : $this->getContext($context, "partido1")), "html", null, true);
                        echo "</td><td bgcolor=\"#cececf\">";
                        echo twig_escape_filter($this->env, (isset($context["totalVotos1"]) ? $context["totalVotos1"] : $this->getContext($context, "totalVotos1")), "html", null, true);
                        echo "</td>";
                        if (((isset($context["tipoEncuesta"]) ? $context["tipoEncuesta"] : $this->getContext($context, "tipoEncuesta")) == "circuito")) {
                            echo "<td bgcolor=\"#cececf\">";
                            echo twig_escape_filter($this->env, (isset($context["totalVotosLista1"]) ? $context["totalVotosLista1"] : $this->getContext($context, "totalVotosLista1")), "html", null, true);
                            echo "</td>";
                        }
                        // line 110
                        echo "            </tr>
          ";
                    }
                    // line 112
                    echo "          ";
                    if (((isset($context["candidato2"]) ? $context["candidato2"] : $this->getContext($context, "candidato2")) != "Sin Candidato")) {
                        // line 113
                        echo "            <tr>
              <td bgcolor=\"#cececf\">";
                        // line 114
                        echo twig_escape_filter($this->env, (isset($context["candidato2"]) ? $context["candidato2"] : $this->getContext($context, "candidato2")), "html", null, true);
                        echo "</td><td bgcolor=\"#cececf\">";
                        echo twig_escape_filter($this->env, (isset($context["partido2"]) ? $context["partido2"] : $this->getContext($context, "partido2")), "html", null, true);
                        echo "</td><td bgcolor=\"#cececf\">";
                        echo twig_escape_filter($this->env, (isset($context["totalVotos2"]) ? $context["totalVotos2"] : $this->getContext($context, "totalVotos2")), "html", null, true);
                        echo "</td>";
                        if (((isset($context["tipoEncuesta"]) ? $context["tipoEncuesta"] : $this->getContext($context, "tipoEncuesta")) == "circuito")) {
                            echo "<td bgcolor=\"#cececf\">";
                            echo twig_escape_filter($this->env, (isset($context["totalVotosLista2"]) ? $context["totalVotosLista2"] : $this->getContext($context, "totalVotosLista2")), "html", null, true);
                            echo "</td>";
                        }
                        // line 115
                        echo "            </tr>
          ";
                    }
                    // line 117
                    echo "          ";
                    if (((isset($context["candidato3"]) ? $context["candidato3"] : $this->getContext($context, "candidato3")) != "Sin Candidato")) {
                        // line 118
                        echo "            <tr>
              <td bgcolor=\"#cececf\">";
                        // line 119
                        echo twig_escape_filter($this->env, (isset($context["candidato3"]) ? $context["candidato3"] : $this->getContext($context, "candidato3")), "html", null, true);
                        echo "</td><td bgcolor=\"#cececf\">";
                        echo twig_escape_filter($this->env, (isset($context["partido3"]) ? $context["partido3"] : $this->getContext($context, "partido3")), "html", null, true);
                        echo "</td><td bgcolor=\"#cececf\">";
                        echo twig_escape_filter($this->env, (isset($context["totalVotos3"]) ? $context["totalVotos3"] : $this->getContext($context, "totalVotos3")), "html", null, true);
                        echo "</td>";
                        if (((isset($context["tipoEncuesta"]) ? $context["tipoEncuesta"] : $this->getContext($context, "tipoEncuesta")) == "circuito")) {
                            echo "<td bgcolor=\"#cececf\">";
                            echo twig_escape_filter($this->env, (isset($context["totalVotosLista3"]) ? $context["totalVotosLista3"] : $this->getContext($context, "totalVotosLista3")), "html", null, true);
                            echo "</td>";
                        }
                        // line 120
                        echo "            </tr>
          ";
                    }
                    // line 122
                    echo "        ";
                } else {
                    // line 123
                    echo "          <tr>
            <td bgcolor=\"#cececf\">Sin candidatos</td><td bgcolor=\"#cececf\"> </td><td bgcolor=\"#cececf\">0</td>";
                    // line 124
                    if (((isset($context["tipoEncuesta"]) ? $context["tipoEncuesta"] : $this->getContext($context, "tipoEncuesta")) == "circuito")) {
                        echo "<td bgcolor=\"#cececf\">0</td>";
                    }
                    // line 125
                    echo "          </tr>
        ";
                }
                // line 126
                echo "        
      </table>
    </div>
  ";
            } else {
                // line 130
                echo "    <div class=\"datagrid2\">
      <table  border=\"1\">
        <thead>
          <th align=\"center\">Nombre(s) y Apellido(s)</th><th align=\"center\">Partido</th><th align=\"center\">Votos</th>";
                // line 133
                if (((isset($context["tipoEncuesta"]) ? $context["tipoEncuesta"] : $this->getContext($context, "tipoEncuesta")) == "circuito")) {
                    echo "<th align=\"center\">Votos Lista</th>";
                }
                // line 134
                echo "        </thead>   
        <tr>
          <td bgcolor=\"#cececf\">Sin candidatos</td><td bgcolor=\"#cececf\"> </td><td bgcolor=\"#cececf\">0</td>";
                // line 136
                if (((isset($context["tipoEncuesta"]) ? $context["tipoEncuesta"] : $this->getContext($context, "tipoEncuesta")) == "circuito")) {
                    echo "<td bgcolor=\"#cececf\">0</td>";
                }
                // line 137
                echo "        </tr>
      </table>
    </div>
  ";
            }
            // line 140
            echo "    
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 143
    public function getboton($__idEje__ = null, $__idCircuito__ = null, $__nombreImagen__ = null, $__tooltip__ = null, $__laEncuesta__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "idEje" => $__idEje__,
            "idCircuito" => $__idCircuito__,
            "nombreImagen" => $__nombreImagen__,
            "tooltip" => $__tooltip__,
            "laEncuesta" => $__laEncuesta__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 144
            echo "  <div class=\"botones_menu\">
    <a href=\"";
            // line 145
            if (((isset($context["laEncuesta"]) ? $context["laEncuesta"] : $this->getContext($context, "laEncuesta")) != "circuito")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mapas_estadisticos_mapa_ventana2", array("id_eje" => (isset($context["idEje"]) ? $context["idEje"] : $this->getContext($context, "idEje")))), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mapas_estadisticos_mapaCircuito2", array("id_circuito" => (isset($context["idCircuito"]) ? $context["idCircuito"] : $this->getContext($context, "idCircuito")))), "html", null, true);
            }
            echo "\">Regresar al ";
            if (((isset($context["laEncuesta"]) ? $context["laEncuesta"] : $this->getContext($context, "laEncuesta")) != "circuito")) {
                echo twig_escape_filter($this->env, (isset($context["tooltip"]) ? $context["tooltip"] : $this->getContext($context, "tooltip")), "html", null, true);
                echo "<br><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("imagenes/merida/" . (isset($context["nombreImagen"]) ? $context["nombreImagen"] : $this->getContext($context, "nombreImagen"))) . ".png")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, (isset($context["tooltip"]) ? $context["tooltip"] : $this->getContext($context, "tooltip")), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["tooltip"]) ? $context["tooltip"] : $this->getContext($context, "tooltip")), "html", null, true);
                echo "\" border=\"0\">";
            } else {
                echo "Circuito ";
                echo twig_escape_filter($this->env, (isset($context["idCircuito"]) ? $context["idCircuito"] : $this->getContext($context, "idCircuito")), "html", null, true);
                echo "<br><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("imagenes/merida/circuitos/regresar/" . (isset($context["idCircuito"]) ? $context["idCircuito"] : $this->getContext($context, "idCircuito"))) . ".png")), "html", null, true);
                echo "\" alt=\"Circuito ";
                echo twig_escape_filter($this->env, (isset($context["idCircuito"]) ? $context["idCircuito"] : $this->getContext($context, "idCircuito")), "html", null, true);
                echo "\" title=\"Circuito ";
                echo twig_escape_filter($this->env, (isset($context["idCircuito"]) ? $context["idCircuito"] : $this->getContext($context, "idCircuito")), "html", null, true);
                echo "\" border=\"0\">";
            }
            echo "</a> 
  </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "MapasEstadisticosBundle:Default:detalle_municipioVentana.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2405 => 145,  2402 => 144,  2387 => 143,  2375 => 140,  2369 => 137,  2365 => 136,  2361 => 134,  2357 => 133,  2352 => 130,  2346 => 126,  2342 => 125,  2338 => 124,  2335 => 123,  2332 => 122,  2328 => 120,  2316 => 119,  2313 => 118,  2310 => 117,  2306 => 115,  2294 => 114,  2291 => 113,  2288 => 112,  2284 => 110,  2272 => 109,  2269 => 108,  2266 => 107,  2264 => 106,  2261 => 105,  2254 => 104,  2251 => 103,  2248 => 102,  2245 => 101,  2242 => 100,  2239 => 99,  2236 => 98,  2233 => 97,  2230 => 96,  2227 => 95,  2224 => 94,  2221 => 93,  2218 => 92,  2215 => 91,  2212 => 90,  2209 => 89,  2206 => 88,  2203 => 87,  2200 => 86,  2197 => 85,  2194 => 84,  2191 => 83,  2188 => 82,  2185 => 81,  2183 => 80,  2175 => 79,  2172 => 78,  2169 => 77,  2166 => 76,  2163 => 75,  2161 => 74,  2158 => 73,  2154 => 72,  2149 => 69,  2146 => 68,  2133 => 67,  2115 => 64,  2113 => 63,  2110 => 62,  2107 => 61,  2104 => 60,  2101 => 59,  2098 => 58,  2095 => 57,  2092 => 56,  2089 => 55,  2087 => 54,  2084 => 53,  2077 => 52,  2074 => 51,  2071 => 50,  2068 => 49,  2065 => 48,  2062 => 47,  2059 => 46,  2056 => 45,  2053 => 44,  2050 => 43,  2047 => 42,  2045 => 41,  2041 => 40,  2034 => 39,  2031 => 38,  2028 => 37,  2025 => 36,  2023 => 35,  2020 => 34,  2006 => 33,  2002 => 998,  1995 => 996,  1986 => 994,  1982 => 993,  1976 => 990,  1971 => 988,  1965 => 985,  1960 => 983,  1954 => 980,  1947 => 975,  1945 => 974,  1942 => 973,  1935 => 970,  1926 => 968,  1922 => 967,  1914 => 962,  1909 => 960,  1903 => 957,  1898 => 955,  1892 => 952,  1887 => 950,  1881 => 947,  1874 => 942,  1872 => 941,  1869 => 940,  1862 => 937,  1853 => 935,  1849 => 934,  1841 => 929,  1836 => 927,  1830 => 924,  1825 => 922,  1819 => 919,  1814 => 917,  1808 => 914,  1803 => 912,  1797 => 909,  1790 => 904,  1788 => 903,  1785 => 902,  1778 => 899,  1769 => 897,  1765 => 896,  1758 => 892,  1753 => 890,  1748 => 888,  1743 => 886,  1737 => 883,  1731 => 879,  1729 => 878,  1726 => 877,  1720 => 874,  1716 => 873,  1709 => 869,  1704 => 867,  1698 => 864,  1691 => 859,  1689 => 858,  1686 => 857,  1679 => 854,  1670 => 852,  1666 => 851,  1658 => 846,  1653 => 844,  1647 => 841,  1642 => 839,  1636 => 836,  1631 => 834,  1624 => 830,  1617 => 825,  1615 => 824,  1612 => 823,  1605 => 820,  1596 => 818,  1592 => 817,  1585 => 813,  1580 => 811,  1574 => 808,  1569 => 806,  1563 => 803,  1558 => 801,  1552 => 798,  1547 => 796,  1541 => 793,  1536 => 791,  1530 => 788,  1525 => 786,  1519 => 783,  1514 => 781,  1508 => 778,  1501 => 773,  1499 => 772,  1496 => 771,  1489 => 768,  1480 => 766,  1476 => 765,  1468 => 760,  1463 => 758,  1457 => 755,  1452 => 753,  1446 => 750,  1439 => 745,  1437 => 744,  1434 => 743,  1427 => 740,  1418 => 738,  1414 => 737,  1407 => 733,  1402 => 731,  1396 => 728,  1391 => 726,  1385 => 723,  1380 => 721,  1374 => 718,  1369 => 716,  1363 => 713,  1358 => 711,  1352 => 708,  1345 => 703,  1343 => 702,  1339 => 700,  1333 => 698,  1329 => 697,  1322 => 693,  1317 => 691,  1311 => 688,  1304 => 683,  1302 => 682,  1298 => 680,  1291 => 678,  1282 => 676,  1278 => 675,  1270 => 670,  1265 => 668,  1259 => 665,  1254 => 663,  1248 => 660,  1243 => 658,  1237 => 655,  1232 => 653,  1226 => 650,  1219 => 645,  1217 => 644,  1213 => 642,  1206 => 640,  1197 => 638,  1193 => 637,  1185 => 632,  1180 => 630,  1174 => 627,  1169 => 625,  1163 => 622,  1156 => 617,  1154 => 616,  1150 => 614,  1143 => 612,  1134 => 610,  1130 => 609,  1122 => 604,  1117 => 602,  1111 => 599,  1106 => 597,  1100 => 594,  1095 => 592,  1089 => 589,  1082 => 584,  1080 => 583,  1076 => 581,  1069 => 579,  1060 => 577,  1056 => 576,  1048 => 571,  1043 => 569,  1037 => 566,  1032 => 564,  1026 => 561,  1019 => 556,  1017 => 555,  1014 => 554,  1007 => 551,  998 => 549,  994 => 548,  987 => 544,  982 => 542,  976 => 539,  971 => 537,  965 => 534,  958 => 529,  956 => 528,  953 => 527,  946 => 524,  937 => 522,  933 => 521,  926 => 517,  921 => 515,  915 => 512,  910 => 510,  904 => 507,  899 => 505,  893 => 502,  888 => 500,  882 => 497,  875 => 492,  873 => 491,  870 => 490,  863 => 487,  854 => 485,  850 => 484,  843 => 480,  838 => 478,  832 => 475,  827 => 473,  821 => 470,  814 => 465,  812 => 464,  809 => 463,  803 => 460,  799 => 459,  791 => 454,  786 => 452,  780 => 449,  773 => 444,  771 => 443,  768 => 442,  761 => 439,  752 => 437,  748 => 436,  741 => 432,  736 => 430,  730 => 427,  725 => 425,  719 => 422,  714 => 420,  708 => 417,  703 => 415,  697 => 412,  692 => 410,  686 => 407,  681 => 405,  675 => 402,  670 => 400,  664 => 397,  657 => 392,  655 => 391,  652 => 390,  645 => 387,  636 => 385,  632 => 384,  625 => 380,  620 => 378,  614 => 375,  609 => 373,  603 => 370,  598 => 368,  592 => 365,  587 => 363,  581 => 360,  576 => 358,  570 => 355,  565 => 353,  559 => 350,  554 => 348,  548 => 345,  541 => 340,  539 => 339,  536 => 338,  530 => 335,  527 => 334,  518 => 333,  514 => 332,  507 => 328,  502 => 326,  496 => 323,  491 => 321,  485 => 318,  480 => 316,  474 => 313,  469 => 311,  463 => 308,  458 => 306,  452 => 303,  447 => 301,  441 => 298,  435 => 294,  433 => 293,  429 => 291,  423 => 289,  419 => 288,  412 => 284,  407 => 282,  401 => 279,  395 => 275,  393 => 274,  389 => 272,  382 => 270,  374 => 268,  371 => 267,  367 => 266,  360 => 262,  355 => 260,  349 => 257,  344 => 255,  338 => 252,  333 => 250,  327 => 247,  322 => 245,  316 => 242,  311 => 240,  305 => 237,  300 => 235,  294 => 232,  289 => 230,  283 => 227,  278 => 225,  272 => 222,  267 => 220,  261 => 217,  256 => 215,  250 => 212,  245 => 210,  239 => 207,  234 => 205,  228 => 202,  223 => 200,  217 => 197,  212 => 195,  206 => 192,  201 => 190,  195 => 187,  188 => 182,  186 => 181,  182 => 179,  176 => 175,  155 => 174,  149 => 173,  146 => 172,  143 => 171,  140 => 170,  137 => 169,  134 => 168,  131 => 167,  128 => 166,  125 => 165,  122 => 164,  119 => 163,  116 => 162,  113 => 161,  110 => 160,  107 => 159,  102 => 158,  99 => 157,  97 => 156,  90 => 154,  82 => 152,  79 => 151,  75 => 148,  72 => 142,  69 => 66,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  24 => 3,  19 => 2,);
    }
}
