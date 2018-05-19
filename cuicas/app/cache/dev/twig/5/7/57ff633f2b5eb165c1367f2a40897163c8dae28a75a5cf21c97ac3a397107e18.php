<?php

/* MapasEstadisticosBundle:Default:mapaCircuito.html.twig */
class __TwigTemplate_57ff633f2b5eb165c1367f2a40897163c8dae28a75a5cf21c97ac3a397107e18 extends Twig_Template
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
        // line 1
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.11.1.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/easyTooltip.js"), "html", null, true);
        echo "\"></script>

<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/marco.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/solapamiento.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/tablas.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/easyTooltip.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

<div class=\"datos\">
  ";
        // line 11
        echo "    <div class=\"datagrid2 datagrid3\" style=\"width: 505;\">
      <table border=\"1\" >
         ";
        // line 13
        if ((( !twig_test_empty((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta"))) && (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "circuito")) || (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "voto-lista"))) {
            // line 14
            echo "        <thead>
          <tr>
            <th align=\"center\">Total Votos</th><th align=\"center\">Oficialismo</th><th align=\"center\">MUD</th><th align=\"center\">Otros</th>
            <th align=\"center\">Votos Lista</th><th align=\"center\">Oficialismo</th><th align=\"center\">MUD</th><th align=\"center\">Otros</th>
          </tr>
        </thead>
        ";
            // line 20
            $context["total"] = 0;
            $context["totalO"] = 0;
            $context["totalM"] = 0;
            $context["totalOtros"] = 0;
            // line 21
            echo "        ";
            $context["totalLista"] = 0;
            $context["totalListaO"] = 0;
            $context["totalListaM"] = 0;
            $context["totalListaOtros"] = 0;
            // line 22
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["candidatos"]) ? $context["candidatos"] : $this->getContext($context, "candidatos")));
            foreach ($context['_seq'] as $context["_key"] => $context["candidato"]) {
                // line 23
                echo "          ";
                if (((("" != $context["candidato"]) && (twig_template_get_attributes($this, $context["candidato"], "getPartido", array()) == "psuv")) || (twig_template_get_attributes($this, $context["candidato"], "getPartido", array()) == "psuv-gpp"))) {
                    // line 24
                    echo "            ";
                    $context["totalO"] = ((isset($context["totalO"]) ? $context["totalO"] : $this->getContext($context, "totalO")) + twig_template_get_attributes($this, $context["candidato"], "cantidadVotosTotal", array()));
                    // line 25
                    echo "            ";
                    $context["totalListaO"] = ((isset($context["totalListaO"]) ? $context["totalListaO"] : $this->getContext($context, "totalListaO")) + twig_template_get_attributes($this, $context["candidato"], "cantidadVotosTotalLista", array()));
                    // line 26
                    echo "          ";
                }
                // line 27
                echo "          ";
                if ((("" != $context["candidato"]) && (twig_template_get_attributes($this, $context["candidato"], "getPartido", array()) == "mud"))) {
                    // line 28
                    echo "            ";
                    $context["totalM"] = ((isset($context["totalM"]) ? $context["totalM"] : $this->getContext($context, "totalM")) + twig_template_get_attributes($this, $context["candidato"], "cantidadVotosTotal", array()));
                    // line 29
                    echo "            ";
                    $context["totalListaM"] = ((isset($context["totalListaM"]) ? $context["totalListaM"] : $this->getContext($context, "totalListaM")) + twig_template_get_attributes($this, $context["candidato"], "cantidadVotosTotalLista", array()));
                    // line 30
                    echo "          ";
                }
                // line 31
                echo "          ";
                if ((("" != $context["candidato"]) && (twig_template_get_attributes($this, $context["candidato"], "getPartido", array()) == "otros"))) {
                    // line 32
                    echo "            ";
                    $context["totalOtros"] = ((isset($context["totalOtros"]) ? $context["totalOtros"] : $this->getContext($context, "totalOtros")) + twig_template_get_attributes($this, $context["candidato"], "cantidadVotosTotal", array()));
                    // line 33
                    echo "            ";
                    $context["totalListaOtros"] = ((isset($context["totalListaOtros"]) ? $context["totalListaOtros"] : $this->getContext($context, "totalListaOtros")) + twig_template_get_attributes($this, $context["candidato"], "cantidadVotosTotalLista", array()));
                    // line 34
                    echo "          ";
                }
                // line 35
                echo "          ";
                $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + twig_template_get_attributes($this, $context["candidato"], "cantidadVotosTotal", array()));
                // line 36
                echo "          ";
                $context["totalLista"] = ((isset($context["totalLista"]) ? $context["totalLista"] : $this->getContext($context, "totalLista")) + twig_template_get_attributes($this, $context["candidato"], "cantidadVotosTotalLista", array()));
                // line 37
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidato'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "        <tr>
          <td align=\"center\">";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
            echo "</td><td align=\"center\">";
            echo twig_escape_filter($this->env, (isset($context["totalO"]) ? $context["totalO"] : $this->getContext($context, "totalO")), "html", null, true);
            echo "</td><td align=\"center\">";
            echo twig_escape_filter($this->env, (isset($context["totalM"]) ? $context["totalM"] : $this->getContext($context, "totalM")), "html", null, true);
            echo "</td><td align=\"center\">";
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
         ";
        }
        // line 42
        echo "
      </table>
    </div>
 
</div>

<img id=\"circuito_1\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("imagenes/merida/circuitos/" . twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["colores"]) ? $context["colores"] : $this->getContext($context, "colores")), 1, array(), "array"), "color", array())) . "/1.png")), "html", null, true);
        echo "\" class=\"transparencia\"> 
<img id=\"circuito_2\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("imagenes/merida/circuitos/" . twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["colores"]) ? $context["colores"] : $this->getContext($context, "colores")), 2, array(), "array"), "color", array())) . "/2.png")), "html", null, true);
        echo "\"  class=\"transparencia\" >
<img id=\"circuito_3\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("imagenes/merida/circuitos/" . twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["colores"]) ? $context["colores"] : $this->getContext($context, "colores")), 3, array(), "array"), "color", array())) . "/3.png")), "html", null, true);
        echo "\" name=\"paramo\" class=\"transparencia\" >
<img id=\"circuito_4\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("imagenes/merida/circuitos/" . twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["colores"]) ? $context["colores"] : $this->getContext($context, "colores")), 4, array(), "array"), "color", array())) . "/4.png")), "html", null, true);
        echo "\" class=\"transparencia\">
<img id=\"eje_sur\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/circuitos.png"), "html", null, true);
        echo "\" class=\"transparencia\" usemap=\"#mapa\" >
<script type=\"text/javascript\"> 

  \$(document).ready(function(){

    \$( \"area\" ).each( function( index, element ){
      console.log( \$( this ).attr('href') );
      \$( this ).easyTooltip({
        useElement: \$( this ).attr('href').substring(\$( this ).attr('href').lastIndexOf('/')+1)  
      });

      \$(this).mouseenter(function() {
        identificador = \"circuito_\"+\$( this ).attr('href').substring(\$( this ).attr('href').lastIndexOf('/')+1)
        \$( \"#\"+identificador ).css(\"opacity\",\"0.8\");
      });

      \$(this).mouseout(function() {
        identificador = \"circuito_\"+\$( this ).attr('href').substring(\$( this ).attr('href').lastIndexOf('/')+1)
        \$( \"#\"+identificador ).css(\"opacity\",\"1.0\");
      });

    });

  });

</script>

<map name=\"mapa\">
  <area shape=\"poly\" coords=\"244,106,154,121,142,113,125,114,119,104,76,93,72,100,79,111,77,113,89,128,103,126,120,138,125,151,123,161,128,170,126,186,117,192,90,214,78,230,92,239,90,268,107,267,125,261,140,270,150,276,157,287,170,262,179,258,183,258,198,248,196,231,188,232,199,217,200,202,206,188,219,193,222,178,228,166,229,153,253,163,266,155,255,132,240,127,240,126,246,102\" href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_mapaCircuito2", array("id_circuito" => 1));
        echo "\" onmouseover=\"\" onmouseout=\"\" >
  <div id=\"1\" style=\"display:none\">Circuito 1
    ";
        // line 82
        if ((( !twig_test_empty((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta"))) && (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "circuito")) || (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "voto-lista"))) {
            // line 83
            echo "      <div class=\"datagrid\">
        <table border=\"1\">
          <thead> 
            <tr>
              <th align=\"center\">Partido</th><th align=\"center\">Votos</th><th align=\"center\">Votos Lista</th>
            </tr>
          </thead>
          ";
            // line 90
            list($context["psuv"], $context["mud"], $context["otros"]) =             array(0, 0, 0);
            list($context["psuvLista"], $context["mudLista"], $context["otrosLista"]) =             array(0, 0, 0);
            // line 91
            echo "          ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["candidatos"]) ? $context["candidatos"] : $this->getContext($context, "candidatos")));
            foreach ($context['_seq'] as $context["_key"] => $context["candidato"]) {
                if ((twig_template_get_attributes($this, twig_template_get_attributes($this, $context["candidato"], "encuesta", array()), "id", array()) == twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "id", array()))) {
                    // line 92
                    echo "            ";
                    list($context["votosTotal"], $context["votosTotalLista"]) =                     array(0, 0);
                    // line 93
                    echo "            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(twig_template_get_attributes($this, $context["candidato"], "cvCandidatos", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                        if ((twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, $context["c"], "centroVotacion", array()), "parroquia", array()), "municipio", array()), "circuito", array()), "id", array()) == 1)) {
                            echo "              
              ";
                            // line 94
                            $context["votosTotal"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + twig_template_get_attributes($this, $context["c"], "votos", array()));
                            // line 95
                            echo "              ";
                            $context["votosTotalLista"] = ((isset($context["votosTotalLista"]) ? $context["votosTotalLista"] : $this->getContext($context, "votosTotalLista")) + twig_template_get_attributes($this, $context["c"], "votosLista", array()));
                            // line 96
                            echo "            ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 97
                    echo "            ";
                    if ((twig_template_get_attributes($this, $context["candidato"], "partido", array()) == "psuv")) {
                        // line 98
                        echo "              ";
                        $context["psuv"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + (isset($context["psuv"]) ? $context["psuv"] : $this->getContext($context, "psuv")));
                        // line 99
                        echo "              ";
                        $context["psuvLista"] = ((isset($context["votosTotalLista"]) ? $context["votosTotalLista"] : $this->getContext($context, "votosTotalLista")) + (isset($context["psuvLista"]) ? $context["psuvLista"] : $this->getContext($context, "psuvLista")));
                        // line 100
                        echo "            ";
                    }
                    // line 101
                    echo "            ";
                    if ((twig_template_get_attributes($this, $context["candidato"], "partido", array()) == "mud")) {
                        // line 102
                        echo "              ";
                        $context["mud"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + (isset($context["mud"]) ? $context["mud"] : $this->getContext($context, "mud")));
                        // line 103
                        echo "              ";
                        $context["mudLista"] = ((isset($context["votosTotalLista"]) ? $context["votosTotalLista"] : $this->getContext($context, "votosTotalLista")) + (isset($context["mudLista"]) ? $context["mudLista"] : $this->getContext($context, "mudLista")));
                        // line 104
                        echo "            ";
                    }
                    // line 105
                    echo "            ";
                    if ((twig_template_get_attributes($this, $context["candidato"], "partido", array()) == "otros")) {
                        // line 106
                        echo "              ";
                        $context["otros"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + (isset($context["otros"]) ? $context["otros"] : $this->getContext($context, "otros")));
                        // line 107
                        echo "              ";
                        $context["otrosLista"] = ((isset($context["votosTotalLista"]) ? $context["votosTotalLista"] : $this->getContext($context, "votosTotalLista")) + (isset($context["otrosLista"]) ? $context["otrosLista"] : $this->getContext($context, "otrosLista")));
                        // line 108
                        echo "            ";
                    }
                    // line 109
                    echo "          ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidato'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "          <tr>
            <td bgcolor=\"#cececf\" align=\"center\">PSUV</td><td bgcolor=\"#cececf\" align=\"center\">";
            // line 111
            echo twig_escape_filter($this->env, (isset($context["psuv"]) ? $context["psuv"] : $this->getContext($context, "psuv")), "html", null, true);
            echo "</td><td bgcolor=\"#cececf\" align=\"center\">";
            echo twig_escape_filter($this->env, (isset($context["psuvLista"]) ? $context["psuvLista"] : $this->getContext($context, "psuvLista")), "html", null, true);
            echo "</td>
            </tr>
            <tr>
              <td bgcolor=\"#cececf\" align=\"center\">MUD</td><td bgcolor=\"#cececf\" align=\"center\">";
            // line 114
            echo twig_escape_filter($this->env, (isset($context["mud"]) ? $context["mud"] : $this->getContext($context, "mud")), "html", null, true);
            echo "</td><td bgcolor=\"#cececf\" align=\"center\">";
            echo twig_escape_filter($this->env, (isset($context["mudLista"]) ? $context["mudLista"] : $this->getContext($context, "mudLista")), "html", null, true);
            echo "</td>
            </tr>
            <tr>
              <td bgcolor=\"#cececf\" align=\"center\">OTROS</td><td bgcolor=\"#cececf\" align=\"center\">";
            // line 117
            echo twig_escape_filter($this->env, (isset($context["otros"]) ? $context["otros"] : $this->getContext($context, "otros")), "html", null, true);
            echo "</td><td bgcolor=\"#cececf\" align=\"center\">";
            echo twig_escape_filter($this->env, (isset($context["otrosLista"]) ? $context["otrosLista"] : $this->getContext($context, "otrosLista")), "html", null, true);
            echo "</td>
            </tr>
        </table>
      </div>
    ";
        }
        // line 122
        echo "  </div>

  <area shape=\"poly\" coords=\"248,104,472,61,473,50,466,42,464,32,501,21,507,27,505,41,514,50,540,46,558,22,566,17,583,28,584,43,598,59,597,77,589,78,586,93,587,100,588,109,591,126,603,135,614,136,623,145,622,150,619,160,627,175,623,179,629,188,676,186,680,193,688,198,676,214,679,222,660,228,649,247,635,247,621,241,571,254,559,260,566,281,558,291,523,295,499,293,498,280,476,273,469,261,465,257,442,242,448,227,457,215,476,205,492,201,492,198,464,185,444,189,421,196,394,191,377,192,357,200,339,194,321,192,308,185,296,188,290,199,281,187,270,183,262,178,250,178,234,172,232,163,255,165,269,157,272,153,265,144,258,133,245,123\" href=\"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_mapaCircuito2", array("id_circuito" => 2));
        echo "\" onmouseover=\"\" onmouseout=\"\">
  <div id=\"2\" style=\"display:none\">Circuito 2
    ";
        // line 126
        if ((( !twig_test_empty((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta"))) && (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "circuito")) || (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "voto-lista"))) {
            // line 127
            echo "      <div class=\"datagrid\">
        <table border=\"1\">
          <thead> 
            <tr>
              <th align=\"center\">Partido</th><th align=\"center\">Votos</th><th align=\"center\">Votos Lista</th>
            </tr>
          </thead>
          ";
            // line 134
            list($context["psuv"], $context["mud"], $context["otros"]) =             array(0, 0, 0);
            list($context["psuvLista"], $context["mudLista"], $context["otrosLista"]) =             array(0, 0, 0);
            // line 135
            echo "          ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["candidatos"]) ? $context["candidatos"] : $this->getContext($context, "candidatos")));
            foreach ($context['_seq'] as $context["_key"] => $context["candidato"]) {
                if ((twig_template_get_attributes($this, twig_template_get_attributes($this, $context["candidato"], "encuesta", array()), "id", array()) == twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "id", array()))) {
                    // line 136
                    echo "            ";
                    list($context["votosTotal"], $context["votosTotalLista"]) =                     array(0, 0);
                    // line 137
                    echo "            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(twig_template_get_attributes($this, $context["candidato"], "cvCandidatos", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                        if ((twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, $context["c"], "centroVotacion", array()), "parroquia", array()), "municipio", array()), "circuito", array()), "id", array()) == 2)) {
                            echo "              
              ";
                            // line 138
                            $context["votosTotal"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + twig_template_get_attributes($this, $context["c"], "votos", array()));
                            // line 139
                            echo "              ";
                            $context["votosTotalLista"] = ((isset($context["votosTotalLista"]) ? $context["votosTotalLista"] : $this->getContext($context, "votosTotalLista")) + twig_template_get_attributes($this, $context["c"], "votosLista", array()));
                            // line 140
                            echo "            ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 141
                    echo "            ";
                    if ((twig_template_get_attributes($this, $context["candidato"], "partido", array()) == "psuv")) {
                        // line 142
                        echo "              ";
                        $context["psuv"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + (isset($context["psuv"]) ? $context["psuv"] : $this->getContext($context, "psuv")));
                        // line 143
                        echo "              ";
                        $context["psuvLista"] = ((isset($context["votosTotalLista"]) ? $context["votosTotalLista"] : $this->getContext($context, "votosTotalLista")) + (isset($context["psuvLista"]) ? $context["psuvLista"] : $this->getContext($context, "psuvLista")));
                        // line 144
                        echo "            ";
                    }
                    // line 145
                    echo "            ";
                    if ((twig_template_get_attributes($this, $context["candidato"], "partido", array()) == "mud")) {
                        // line 146
                        echo "              ";
                        $context["mud"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + (isset($context["mud"]) ? $context["mud"] : $this->getContext($context, "mud")));
                        // line 147
                        echo "              ";
                        $context["mudLista"] = ((isset($context["votosTotalLista"]) ? $context["votosTotalLista"] : $this->getContext($context, "votosTotalLista")) + (isset($context["mudLista"]) ? $context["mudLista"] : $this->getContext($context, "mudLista")));
                        // line 148
                        echo "            ";
                    }
                    // line 149
                    echo "            ";
                    if ((twig_template_get_attributes($this, $context["candidato"], "partido", array()) == "otros")) {
                        // line 150
                        echo "              ";
                        $context["otros"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + (isset($context["otros"]) ? $context["otros"] : $this->getContext($context, "otros")));
                        // line 151
                        echo "              ";
                        $context["otrosLista"] = ((isset($context["votosTotalLista"]) ? $context["votosTotalLista"] : $this->getContext($context, "votosTotalLista")) + (isset($context["otrosLista"]) ? $context["otrosLista"] : $this->getContext($context, "otrosLista")));
                        // line 152
                        echo "            ";
                    }
                    // line 153
                    echo "          ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidato'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "          <tr>
            <td bgcolor=\"#cececf\" align=\"center\">PSUV</td><td bgcolor=\"#cececf\" align=\"center\">";
            // line 155
            echo twig_escape_filter($this->env, (isset($context["psuv"]) ? $context["psuv"] : $this->getContext($context, "psuv")), "html", null, true);
            echo "</td><td bgcolor=\"#cececf\" align=\"center\">";
            echo twig_escape_filter($this->env, (isset($context["psuvLista"]) ? $context["psuvLista"] : $this->getContext($context, "psuvLista")), "html", null, true);
            echo "</td>
          </tr>
          <tr>
            <td bgcolor=\"#cececf\" align=\"center\">MUD</td><td bgcolor=\"#cececf\" align=\"center\">";
            // line 158
            echo twig_escape_filter($this->env, (isset($context["mud"]) ? $context["mud"] : $this->getContext($context, "mud")), "html", null, true);
            echo "</td><td bgcolor=\"#cececf\" align=\"center\">";
            echo twig_escape_filter($this->env, (isset($context["mudLista"]) ? $context["mudLista"] : $this->getContext($context, "mudLista")), "html", null, true);
            echo "</td>
          </tr>
          <tr>
            <td bgcolor=\"#cececf\" align=\"center\">OTROS</td><td bgcolor=\"#cececf\" align=\"center\">";
            // line 161
            echo twig_escape_filter($this->env, (isset($context["otros"]) ? $context["otros"] : $this->getContext($context, "otros")), "html", null, true);
            echo "</td><td bgcolor=\"#cececf\" align=\"center\">";
            echo twig_escape_filter($this->env, (isset($context["otrosLista"]) ? $context["otrosLista"] : $this->getContext($context, "otrosLista")), "html", null, true);
            echo "</td>
          </tr>
        </table>
      </div>
    ";
        }
        // line 166
        echo "  </div>
  
  <area shape=\"poly\" coords=\"497,294,490,311,493,319,480,339,467,353,429,363,419,375,396,362,391,347,374,339,371,328,359,327,355,316,342,317,337,309,339,298,333,288,327,275,337,269,355,276,357,276,348,264,350,255,346,250,352,246,360,223,361,216,382,206,397,198,411,200,423,199,441,192,459,190,476,195,486,199,468,207,453,211,442,228,440,240,447,248,463,260,471,272,479,276,494,281\" href=\"";
        // line 168
        echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_mapaCircuito2", array("id_circuito" => 3));
        echo "\" onmouseover=\"\" onmouseout=\"\">
  <div id=\"3\" style=\"display:none\">Circuito 3
   ";
        // line 170
        if ((( !twig_test_empty((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta"))) && (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "circuito")) || (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "voto-lista"))) {
            // line 171
            echo "      <div class=\"datagrid\">
        <table border=\"1\">
          <thead> 
            <tr>
              <th align=\"center\">Partido</th><th align=\"center\">Votos</th><th align=\"center\">Votos Lista</th>
            </tr>
          </thead>
          ";
            // line 178
            list($context["psuv"], $context["mud"], $context["otros"]) =             array(0, 0, 0);
            list($context["psuvLista"], $context["mudLista"], $context["otrosLista"]) =             array(0, 0, 0);
            // line 179
            echo "          ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["candidatos"]) ? $context["candidatos"] : $this->getContext($context, "candidatos")));
            foreach ($context['_seq'] as $context["_key"] => $context["candidato"]) {
                if ((twig_template_get_attributes($this, twig_template_get_attributes($this, $context["candidato"], "encuesta", array()), "id", array()) == twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "id", array()))) {
                    // line 180
                    echo "            ";
                    list($context["votosTotal"], $context["votosTotalLista"]) =                     array(0, 0);
                    // line 181
                    echo "            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(twig_template_get_attributes($this, $context["candidato"], "cvCandidatos", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                        if ((twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, $context["c"], "centroVotacion", array()), "parroquia", array()), "municipio", array()), "circuito", array()), "id", array()) == 3)) {
                            echo "              
              ";
                            // line 182
                            $context["votosTotal"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + twig_template_get_attributes($this, $context["c"], "votos", array()));
                            // line 183
                            echo "              ";
                            $context["votosTotalLista"] = ((isset($context["votosTotalLista"]) ? $context["votosTotalLista"] : $this->getContext($context, "votosTotalLista")) + twig_template_get_attributes($this, $context["c"], "votosLista", array()));
                            // line 184
                            echo "            ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 185
                    echo "            ";
                    if ((twig_template_get_attributes($this, $context["candidato"], "partido", array()) == "psuv")) {
                        // line 186
                        echo "              ";
                        $context["psuv"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + (isset($context["psuv"]) ? $context["psuv"] : $this->getContext($context, "psuv")));
                        // line 187
                        echo "              ";
                        $context["psuvLista"] = ((isset($context["votosTotalLista"]) ? $context["votosTotalLista"] : $this->getContext($context, "votosTotalLista")) + (isset($context["psuvLista"]) ? $context["psuvLista"] : $this->getContext($context, "psuvLista")));
                        // line 188
                        echo "            ";
                    }
                    // line 189
                    echo "            ";
                    if ((twig_template_get_attributes($this, $context["candidato"], "partido", array()) == "mud")) {
                        // line 190
                        echo "              ";
                        $context["mud"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + (isset($context["mud"]) ? $context["mud"] : $this->getContext($context, "mud")));
                        // line 191
                        echo "              ";
                        $context["mudLista"] = ((isset($context["votosTotalLista"]) ? $context["votosTotalLista"] : $this->getContext($context, "votosTotalLista")) + (isset($context["mudLista"]) ? $context["mudLista"] : $this->getContext($context, "mudLista")));
                        // line 192
                        echo "            ";
                    }
                    // line 193
                    echo "            ";
                    if ((twig_template_get_attributes($this, $context["candidato"], "partido", array()) == "otros")) {
                        // line 194
                        echo "              ";
                        $context["otros"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + (isset($context["otros"]) ? $context["otros"] : $this->getContext($context, "otros")));
                        // line 195
                        echo "              ";
                        $context["otrosLista"] = ((isset($context["votosTotalLista"]) ? $context["votosTotalLista"] : $this->getContext($context, "votosTotalLista")) + (isset($context["otrosLista"]) ? $context["otrosLista"] : $this->getContext($context, "otrosLista")));
                        // line 196
                        echo "            ";
                    }
                    // line 197
                    echo "          ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidato'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            echo "          <tr>
            <td bgcolor=\"#cececf\" align=\"center\">PSUV</td><td bgcolor=\"#cececf\" align=\"center\">";
            // line 199
            echo twig_escape_filter($this->env, (isset($context["psuv"]) ? $context["psuv"] : $this->getContext($context, "psuv")), "html", null, true);
            echo "</td><td bgcolor=\"#cececf\" align=\"center\">";
            echo twig_escape_filter($this->env, (isset($context["psuvLista"]) ? $context["psuvLista"] : $this->getContext($context, "psuvLista")), "html", null, true);
            echo "</td>
          </tr>
          <tr>
            <td bgcolor=\"#cececf\" align=\"center\">MUD</td><td bgcolor=\"#cececf\" align=\"center\">";
            // line 202
            echo twig_escape_filter($this->env, (isset($context["mud"]) ? $context["mud"] : $this->getContext($context, "mud")), "html", null, true);
            echo "</td><td bgcolor=\"#cececf\" align=\"center\">";
            echo twig_escape_filter($this->env, (isset($context["mudLista"]) ? $context["mudLista"] : $this->getContext($context, "mudLista")), "html", null, true);
            echo "</td>
          </tr>
          <tr>
            <td bgcolor=\"#cececf\" align=\"center\">OTROS</td><td bgcolor=\"#cececf\" align=\"center\">";
            // line 205
            echo twig_escape_filter($this->env, (isset($context["otros"]) ? $context["otros"] : $this->getContext($context, "otros")), "html", null, true);
            echo "</td><td bgcolor=\"#cececf\" align=\"center\">";
            echo twig_escape_filter($this->env, (isset($context["otrosLista"]) ? $context["otrosLista"] : $this->getContext($context, "otrosLista")), "html", null, true);
            echo "</td>
          </tr>
        </table>
      </div>
    ";
        }
        // line 210
        echo "  </div> 
  
  <area shape=\"poly\" coords=\"80,501,108,495,99,484,114,465,131,467,165,456,195,452,216,452,237,445,262,435,297,433,307,423,344,405,359,402,364,385,381,375,392,381,393,387,413,385,418,378,405,368,397,358,390,347,375,341,367,330,361,327,356,318,340,316,334,305,337,294,323,279,327,267,343,267,350,270,344,257,339,247,346,241,354,231,357,214,391,196,368,202,346,204,320,195,310,190,301,191,290,204,280,202,275,192,263,186,243,181,227,175,226,182,221,193,210,193,201,205,200,227,201,240,203,250,194,257,176,269,168,273,163,286,153,288,143,282,130,267,119,267,93,271,84,267,89,242,82,236,68,238,42,250,20,256,15,272,19,278,35,277,45,288,44,297,54,311,53,324,55,337,66,341,74,357,96,353,115,361,120,364,116,380,127,393,126,405,117,418,106,431,97,445,89,457,80,463,85,483,79,498\"          href=\"";
        // line 212
        echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_mapaCircuito2", array("id_circuito" => 4));
        echo "\" onmouseover=\"\" onmouseout=\"\">
  <div id=\"4\" style=\"display:none\">Circuito 4
    ";
        // line 214
        if ((( !twig_test_empty((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta"))) && (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "circuito")) || (twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "voto-lista"))) {
            // line 215
            echo "      <div class=\"datagrid\">
        <table border=\"1\">
          <thead> 
            <tr>
              <th align=\"center\">Partido</th><th align=\"center\">Votos</th><th align=\"center\">Votos Lista</th>
            </tr>
          </thead>
          ";
            // line 222
            list($context["psuv"], $context["mud"], $context["otros"]) =             array(0, 0, 0);
            list($context["psuvLista"], $context["mudLista"], $context["otrosLista"]) =             array(0, 0, 0);
            // line 223
            echo "          ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["candidatos"]) ? $context["candidatos"] : $this->getContext($context, "candidatos")));
            foreach ($context['_seq'] as $context["_key"] => $context["candidato"]) {
                if ((twig_template_get_attributes($this, twig_template_get_attributes($this, $context["candidato"], "encuesta", array()), "id", array()) == twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "id", array()))) {
                    // line 224
                    echo "            ";
                    list($context["votosTotal"], $context["votosTotalLista"]) =                     array(0, 0);
                    // line 225
                    echo "            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(twig_template_get_attributes($this, $context["candidato"], "cvCandidatos", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                        if ((twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, $context["c"], "centroVotacion", array()), "parroquia", array()), "municipio", array()), "circuito", array()), "id", array()) == 4)) {
                            echo "              
              ";
                            // line 226
                            $context["votosTotal"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + twig_template_get_attributes($this, $context["c"], "votos", array()));
                            // line 227
                            echo "              ";
                            $context["votosTotalLista"] = ((isset($context["votosTotalLista"]) ? $context["votosTotalLista"] : $this->getContext($context, "votosTotalLista")) + twig_template_get_attributes($this, $context["c"], "votosLista", array()));
                            // line 228
                            echo "            ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 229
                    echo "            ";
                    if ((twig_template_get_attributes($this, $context["candidato"], "partido", array()) == "psuv")) {
                        // line 230
                        echo "              ";
                        $context["psuv"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + (isset($context["psuv"]) ? $context["psuv"] : $this->getContext($context, "psuv")));
                        // line 231
                        echo "              ";
                        $context["psuvLista"] = ((isset($context["votosTotalLista"]) ? $context["votosTotalLista"] : $this->getContext($context, "votosTotalLista")) + (isset($context["psuvLista"]) ? $context["psuvLista"] : $this->getContext($context, "psuvLista")));
                        // line 232
                        echo "            ";
                    }
                    // line 233
                    echo "            ";
                    if ((twig_template_get_attributes($this, $context["candidato"], "partido", array()) == "mud")) {
                        // line 234
                        echo "              ";
                        $context["mud"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + (isset($context["mud"]) ? $context["mud"] : $this->getContext($context, "mud")));
                        // line 235
                        echo "              ";
                        $context["mudLista"] = ((isset($context["votosTotalLista"]) ? $context["votosTotalLista"] : $this->getContext($context, "votosTotalLista")) + (isset($context["mudLista"]) ? $context["mudLista"] : $this->getContext($context, "mudLista")));
                        // line 236
                        echo "            ";
                    }
                    // line 237
                    echo "            ";
                    if ((twig_template_get_attributes($this, $context["candidato"], "partido", array()) == "otros")) {
                        // line 238
                        echo "              ";
                        $context["otros"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + (isset($context["otros"]) ? $context["otros"] : $this->getContext($context, "otros")));
                        // line 239
                        echo "              ";
                        $context["otrosLista"] = ((isset($context["votosTotalLista"]) ? $context["votosTotalLista"] : $this->getContext($context, "votosTotalLista")) + (isset($context["otrosLista"]) ? $context["otrosLista"] : $this->getContext($context, "otrosLista")));
                        // line 240
                        echo "            ";
                    }
                    // line 241
                    echo "          ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidato'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 242
            echo "          <tr>
            <td bgcolor=\"#cececf\" align=\"center\">PSUV</td><td bgcolor=\"#cececf\" align=\"center\">";
            // line 243
            echo twig_escape_filter($this->env, (isset($context["psuv"]) ? $context["psuv"] : $this->getContext($context, "psuv")), "html", null, true);
            echo "</td><td bgcolor=\"#cececf\" align=\"center\">";
            echo twig_escape_filter($this->env, (isset($context["psuvLista"]) ? $context["psuvLista"] : $this->getContext($context, "psuvLista")), "html", null, true);
            echo "</td>
          </tr>
          <tr>
            <td bgcolor=\"#cececf\" align=\"center\">MUD</td><td bgcolor=\"#cececf\" align=\"center\">";
            // line 246
            echo twig_escape_filter($this->env, (isset($context["mud"]) ? $context["mud"] : $this->getContext($context, "mud")), "html", null, true);
            echo "</td><td bgcolor=\"#cececf\" align=\"center\">";
            echo twig_escape_filter($this->env, (isset($context["mudLista"]) ? $context["mudLista"] : $this->getContext($context, "mudLista")), "html", null, true);
            echo "</td>
          </tr>
          <tr>
            <td bgcolor=\"#cececf\" align=\"center\">OTROS</td><td bgcolor=\"#cececf\" align=\"center\">";
            // line 249
            echo twig_escape_filter($this->env, (isset($context["otros"]) ? $context["otros"] : $this->getContext($context, "otros")), "html", null, true);
            echo "</td><td bgcolor=\"#cececf\" align=\"center\">";
            echo twig_escape_filter($this->env, (isset($context["otrosLista"]) ? $context["otrosLista"] : $this->getContext($context, "otrosLista")), "html", null, true);
            echo "</td>
          </tr>
        </table>
      </div>
    ";
        }
        // line 254
        echo "  </div>
 
</map>

<div class=\"punto_4\"> Circuito 1 </div> 
<div class=\"punto_2\"> Circuito 2 </div>
<div class=\"punto_1\"> Circuito 3 </div>
<div class=\"punto_5\"> Circuito 4 </div>

";
    }

    public function getTemplateName()
    {
        return "MapasEstadisticosBundle:Default:mapaCircuito.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  695 => 254,  685 => 249,  677 => 246,  669 => 243,  666 => 242,  659 => 241,  656 => 240,  653 => 239,  650 => 238,  647 => 237,  644 => 236,  641 => 235,  638 => 234,  635 => 233,  632 => 232,  629 => 231,  626 => 230,  623 => 229,  616 => 228,  613 => 227,  611 => 226,  603 => 225,  600 => 224,  594 => 223,  591 => 222,  582 => 215,  580 => 214,  575 => 212,  571 => 210,  561 => 205,  553 => 202,  545 => 199,  542 => 198,  535 => 197,  532 => 196,  529 => 195,  526 => 194,  523 => 193,  520 => 192,  517 => 191,  514 => 190,  511 => 189,  508 => 188,  505 => 187,  502 => 186,  499 => 185,  492 => 184,  489 => 183,  487 => 182,  479 => 181,  476 => 180,  470 => 179,  467 => 178,  458 => 171,  456 => 170,  451 => 168,  447 => 166,  437 => 161,  429 => 158,  421 => 155,  418 => 154,  411 => 153,  408 => 152,  405 => 151,  402 => 150,  399 => 149,  396 => 148,  393 => 147,  390 => 146,  387 => 145,  384 => 144,  381 => 143,  378 => 142,  375 => 141,  368 => 140,  365 => 139,  363 => 138,  355 => 137,  352 => 136,  346 => 135,  343 => 134,  334 => 127,  332 => 126,  327 => 124,  323 => 122,  313 => 117,  305 => 114,  297 => 111,  294 => 110,  287 => 109,  284 => 108,  281 => 107,  278 => 106,  275 => 105,  272 => 104,  269 => 103,  266 => 102,  263 => 101,  260 => 100,  257 => 99,  254 => 98,  251 => 97,  244 => 96,  241 => 95,  239 => 94,  231 => 93,  228 => 92,  222 => 91,  219 => 90,  210 => 83,  208 => 82,  203 => 80,  172 => 52,  168 => 51,  164 => 50,  160 => 49,  156 => 48,  148 => 42,  128 => 39,  125 => 38,  119 => 37,  116 => 36,  113 => 35,  110 => 34,  107 => 33,  104 => 32,  101 => 31,  98 => 30,  95 => 29,  92 => 28,  89 => 27,  86 => 26,  83 => 25,  80 => 24,  77 => 23,  72 => 22,  66 => 21,  61 => 20,  53 => 14,  51 => 13,  47 => 11,  41 => 7,  37 => 6,  33 => 5,  29 => 4,  24 => 2,  19 => 1,);
    }
}
