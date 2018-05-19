<?php

/* MapasEstadisticosBundle:Default:mapaVentana.html.twig */
class __TwigTemplate_320b350f36fea3665c299b21c789b7c4633f816e34fceb54c37fa7f07a65eda4 extends Twig_Template
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
        echo "  ";
        if (( !twig_test_empty((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta"))) && ($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) != "circuito"))) {
            // line 12
            echo "    <div class=\"datagrid2\">
      <table border=\"1\">
        ";
            // line 14
            $context["total"] = 0;
            $context["totalO"] = 0;
            $context["totalM"] = 0;
            $context["totalOtros"] = 0;
            echo "        
        ";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["candidatos"]) ? $context["candidatos"] : $this->getContext($context, "candidatos")));
            foreach ($context['_seq'] as $context["_key"] => $context["candidato"]) {
                // line 16
                echo "          ";
                if (((("" != $context["candidato"]) && ($this->getAttribute($context["candidato"], "getPartido", array()) == "psuv")) || ($this->getAttribute($context["candidato"], "getPartido", array()) == "psuv-gpp"))) {
                    // line 17
                    echo "            ";
                    $context["totalO"] = ((isset($context["totalO"]) ? $context["totalO"] : $this->getContext($context, "totalO")) + $this->getAttribute($context["candidato"], "cantidadVotosTotal", array()));
                    // line 18
                    echo "          ";
                }
                // line 19
                echo "          ";
                if ((("" != $context["candidato"]) && ($this->getAttribute($context["candidato"], "getPartido", array()) == "mud"))) {
                    // line 20
                    echo "            ";
                    $context["totalM"] = ((isset($context["totalM"]) ? $context["totalM"] : $this->getContext($context, "totalM")) + $this->getAttribute($context["candidato"], "cantidadVotosTotal", array()));
                    // line 21
                    echo "          ";
                }
                // line 22
                echo "          ";
                if ((("" != $context["candidato"]) && ($this->getAttribute($context["candidato"], "getPartido", array()) == "otros"))) {
                    // line 23
                    echo "            ";
                    $context["totalOtros"] = ((isset($context["totalOtros"]) ? $context["totalOtros"] : $this->getContext($context, "totalOtros")) + $this->getAttribute($context["candidato"], "cantidadVotosTotal", array()));
                    // line 24
                    echo "          ";
                }
                // line 25
                echo "          ";
                $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + $this->getAttribute($context["candidato"], "cantidadVotosTotal", array()));
                // line 26
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidato'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        <thead>
          <tr>
            <th align=\"center\">Total Votos</th><th align=\"center\">Oficialismo</th><th align=\"center\">MUD</th><th align=\"center\">Otros</th>
          </tr>
        </thead>
        <tr>
          <td align=\"center\">";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
            echo "</td><td align=\"center\">";
            echo twig_escape_filter($this->env, (isset($context["totalO"]) ? $context["totalO"] : $this->getContext($context, "totalO")), "html", null, true);
            echo "</td><td align=\"center\">";
            echo twig_escape_filter($this->env, (isset($context["totalM"]) ? $context["totalM"] : $this->getContext($context, "totalM")), "html", null, true);
            echo "</td><td align=\"center\">";
            echo twig_escape_filter($this->env, (isset($context["totalOtros"]) ? $context["totalOtros"] : $this->getContext($context, "totalOtros")), "html", null, true);
            echo "</td>
        </tr>
      </table>
    </div>
  ";
        }
        // line 38
        echo "</div>

<img id=\"eje_1\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("imagenes/merida/ejes/colores/" . $this->getAttribute($this->getAttribute((isset($context["colores"]) ? $context["colores"] : $this->getContext($context, "colores")), 1, array(), "array"), "color", array())) . "/1.png")), "html", null, true);
        echo " \" class=\"transparencia\"> 
<img id=\"eje_2\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("imagenes/merida/ejes/colores/" . $this->getAttribute($this->getAttribute((isset($context["colores"]) ? $context["colores"] : $this->getContext($context, "colores")), 2, array(), "array"), "color", array())) . "/2.png")), "html", null, true);
        echo " \" class=\"transparencia\" >
<img id=\"eje_3\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("imagenes/merida/ejes/colores/" . $this->getAttribute($this->getAttribute((isset($context["colores"]) ? $context["colores"] : $this->getContext($context, "colores")), 3, array(), "array"), "color", array())) . "/3.png")), "html", null, true);
        echo " \" name=\"paramo\" class=\"transparencia\" >
<img id=\"eje_4\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("imagenes/merida/ejes/colores/" . $this->getAttribute($this->getAttribute((isset($context["colores"]) ? $context["colores"] : $this->getContext($context, "colores")), 4, array(), "array"), "color", array())) . "/4.png")), "html", null, true);
        echo " \" class=\"transparencia\">
<img id=\"eje_5\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("imagenes/merida/ejes/colores/" . $this->getAttribute($this->getAttribute((isset($context["colores"]) ? $context["colores"] : $this->getContext($context, "colores")), 5, array(), "array"), "color", array())) . "/5.png")), "html", null, true);
        echo " \" class=\"transparencia\">
<img id=\"\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/merida/ejes.png"), "html", null, true);
        echo " \" class=\"transparencia\" usemap=\"#mapa\" style=\"\">
<script type=\"text/javascript\"> 

  \$(document).ready(function(){ 

    var identificador = \"\";
    \$( \"area\" ).each( function( index, element ){
      console.log( \$( this ).attr('href') );
      \$( this ).easyTooltip({
        useElement: \$( this ).attr('href').substring(\$( this ).attr('href').lastIndexOf('/')+1)  
      });

      \$(this).mouseenter(function() {
        identificador = \"eje_\"+\$( this ).attr('href').substring(\$( this ).attr('href').lastIndexOf('/')+1)
        \$( \"#\"+identificador ).css(\"opacity\",\"0.8\");
        \$( \"#\"+identificador ).css(\"width\",\"705px\");
        \$( \"#\"+identificador ).css(\"height\",\"521px\");
      });

      \$(this).mouseout(function() {
        identificador = \"eje_\"+\$( this ).attr('href').substring(\$( this ).attr('href').lastIndexOf('/')+1)
        \$( \"#\"+identificador ).css(\"opacity\",\"1.0\");
        \$( \"#\"+identificador ).css(\"width\",\"700px\");
        \$( \"#\"+identificador ).css(\"height\",\"517px\");
      });

    });
  });

</script>

<map name=\"mapa\">
  <area shape=\"poly\" coords=\"488,199,461,190,425,197,413,199,383,195,364,198,354,201,310,184,294,197,288,203,283,191,249,180,228,171,220,196,212,194,202,210,194,232,198,247,179,260,171,274,167,284,176,297,184,303,195,299,208,307,221,297,236,305,243,311,256,305,276,305,308,305,314,306,322,321,352,315,364,323,375,331,384,343,395,346,405,362,419,375,430,363,453,354,477,338,489,324,491,304,496,286,485,277,473,271,460,260,440,248,433,238,440,221,460,209,470,202\" href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_mapa_ventana2", array("id_eje" => 1));
        echo "\" onmouseover=\"\" onmouseout=\"\">
  <div id=\"1\" style=\"display:none\">Eje Metropolitano
    ";
        // line 79
        if ((( !twig_test_empty((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta"))) && ($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) != "general")) && ($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) != "circuito"))) {
            // line 80
            echo "      <div class=\"datagrid\">
        <table border=\"1\">
          <thead>
          <tr>
            <th align=\"center\">Partido</th><th align=\"center\">Votos</th>
          </tr>
          </thead>
          ";
            // line 87
            list($context["psuv"], $context["mud"], $context["otros"]) =             array(0, 0, 0);
            // line 88
            echo "          ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["candidatos"]) ? $context["candidatos"] : $this->getContext($context, "candidatos")));
            foreach ($context['_seq'] as $context["_key"] => $context["candidato"]) {
                if (($this->getAttribute($this->getAttribute($context["candidato"], "encuesta", array()), "id", array()) == $this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "id", array()))) {
                    // line 89
                    echo "            ";
                    if ((twig_in_filter($this->getAttribute($context["candidato"], "identificador", array()), (isset($context["munEje1"]) ? $context["munEje1"] : $this->getContext($context, "munEje1"))) || ($this->getAttribute($context["candidato"], "identificador", array()) == "todos"))) {
                        // line 90
                        echo "              ";
                        $context["votosTotal"] = 0;
                        // line 91
                        echo "              ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["candidato"], "cvCandidatos", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["c"], "centroVotacion", array()), "parroquia", array()), "municipio", array()), "eje", array()), "id", array()) == 1)) {
                                // line 92
                                echo "                ";
                                $context["votosTotal"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + $this->getAttribute($context["c"], "votos", array()));
                                // line 93
                                echo "              ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 94
                        echo "              ";
                        if (($this->getAttribute($context["candidato"], "partido", array()) == "psuv")) {
                            // line 95
                            echo "                ";
                            $context["psuv"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + (isset($context["psuv"]) ? $context["psuv"] : $this->getContext($context, "psuv")));
                            // line 96
                            echo "              ";
                        }
                        // line 97
                        echo "              ";
                        if (($this->getAttribute($context["candidato"], "partido", array()) == "mud")) {
                            // line 98
                            echo "                ";
                            $context["mud"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + (isset($context["mud"]) ? $context["mud"] : $this->getContext($context, "mud")));
                            // line 99
                            echo "              ";
                        }
                        // line 100
                        echo "              ";
                        if (($this->getAttribute($context["candidato"], "partido", array()) == "otros")) {
                            // line 101
                            echo "                ";
                            $context["otros"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + (isset($context["otros"]) ? $context["otros"] : $this->getContext($context, "otros")));
                            // line 102
                            echo "              ";
                        }
                        // line 103
                        echo "            ";
                    }
                    // line 104
                    echo "          ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidato'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "          <tr>
            <td bgcolor=\"#cececf\" align=\"center\">PSUV</td><td bgcolor=\"#cececf\" align=\"center\">";
            // line 106
            echo twig_escape_filter($this->env, (isset($context["psuv"]) ? $context["psuv"] : $this->getContext($context, "psuv")), "html", null, true);
            echo "</td>
          </tr>
          <tr>
            <td bgcolor=\"#cececf\" align=\"center\">MUD</td><td bgcolor=\"#cececf\" align=\"center\">";
            // line 109
            echo twig_escape_filter($this->env, (isset($context["mud"]) ? $context["mud"] : $this->getContext($context, "mud")), "html", null, true);
            echo "</td>
          </tr>
          <tr>
            <td bgcolor=\"#cececf\" align=\"center\">OTROS</td><td bgcolor=\"#cececf\" align=\"center\">";
            // line 112
            echo twig_escape_filter($this->env, (isset($context["otros"]) ? $context["otros"] : $this->getContext($context, "otros")), "html", null, true);
            echo "</td>
          </tr>
        </table>
      </div>
    ";
        }
        // line 117
        echo "  </div>  

  <area shape=\"poly\" coords=\"576,124,551,121,552,138,546,149,551,172,537,187,520,188,515,197,495,179,494,201,467,208,447,222,441,239,446,247,464,260,481,278,493,279,499,293,527,293,553,293,562,279,559,262,582,251,622,237,650,248,657,231,671,223,688,198,671,181,639,183,629,181,620,160,618,138,607,132,592,144,579,138\" href=\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_mapa_ventana2", array("id_eje" => 3));
        echo "\" onmouseover=\"\" onmouseout=\"\">
  <div id=\"3\" style=\"display:none\">Eje P&aacute;ramo
    ";
        // line 121
        if ((( !twig_test_empty((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta"))) && ($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) != "general")) && ($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) != "circuito"))) {
            // line 122
            echo "      <div class=\"datagrid\">
        <table border=\"1\">
          <thead>
          <tr>
            <th align=\"center\">Partido</th><th align=\"center\">Votos</th>
          </tr>
          </thead>
          ";
            // line 129
            list($context["psuv"], $context["mud"], $context["otros"]) =             array(0, 0, 0);
            // line 130
            echo "          ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["candidatos"]) ? $context["candidatos"] : $this->getContext($context, "candidatos")));
            foreach ($context['_seq'] as $context["_key"] => $context["candidato"]) {
                if (($this->getAttribute($this->getAttribute($context["candidato"], "encuesta", array()), "id", array()) == $this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "id", array()))) {
                    // line 131
                    echo "            ";
                    if ((twig_in_filter($this->getAttribute($context["candidato"], "identificador", array()), (isset($context["munEje3"]) ? $context["munEje3"] : $this->getContext($context, "munEje3"))) || ($this->getAttribute($context["candidato"], "identificador", array()) == "todos"))) {
                        // line 132
                        echo "              ";
                        $context["votosTotal"] = 0;
                        // line 133
                        echo "              ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["candidato"], "cvCandidatos", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["c"], "centroVotacion", array()), "parroquia", array()), "municipio", array()), "eje", array()), "id", array()) == 3)) {
                                // line 134
                                echo "                ";
                                $context["votosTotal"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + $this->getAttribute($context["c"], "votos", array()));
                                // line 135
                                echo "                ";
                                $context["votosTotalLista"] = ((isset($context["votosTotalLista"]) ? $context["votosTotalLista"] : $this->getContext($context, "votosTotalLista")) + $this->getAttribute($context["c"], "votosLista", array()));
                                // line 136
                                echo "              ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 137
                        echo "              ";
                        if (($this->getAttribute($context["candidato"], "partido", array()) == "psuv")) {
                            // line 138
                            echo "                ";
                            $context["psuv"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + (isset($context["psuv"]) ? $context["psuv"] : $this->getContext($context, "psuv")));
                            // line 139
                            echo "                ";
                            $context["psuvLista"] = ((isset($context["votosTotalLista"]) ? $context["votosTotalLista"] : $this->getContext($context, "votosTotalLista")) + (isset($context["psuvLista"]) ? $context["psuvLista"] : $this->getContext($context, "psuvLista")));
                            // line 140
                            echo "              ";
                        }
                        // line 141
                        echo "              ";
                        if (($this->getAttribute($context["candidato"], "partido", array()) == "mud")) {
                            // line 142
                            echo "                ";
                            $context["mud"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + (isset($context["mud"]) ? $context["mud"] : $this->getContext($context, "mud")));
                            // line 143
                            echo "                ";
                            $context["mudLista"] = ((isset($context["votosTotalLista"]) ? $context["votosTotalLista"] : $this->getContext($context, "votosTotalLista")) + (isset($context["mudLista"]) ? $context["mudLista"] : $this->getContext($context, "mudLista")));
                            // line 144
                            echo "              ";
                        }
                        // line 145
                        echo "              ";
                        if (($this->getAttribute($context["candidato"], "partido", array()) == "otros")) {
                            // line 146
                            echo "                ";
                            $context["otros"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + (isset($context["otros"]) ? $context["otros"] : $this->getContext($context, "otros")));
                            // line 147
                            echo "                ";
                            $context["otrosLista"] = ((isset($context["votosTotalLista"]) ? $context["votosTotalLista"] : $this->getContext($context, "votosTotalLista")) + (isset($context["otrosLista"]) ? $context["otrosLista"] : $this->getContext($context, "otrosLista")));
                            // line 148
                            echo "              ";
                        }
                        // line 149
                        echo "            ";
                    }
                    // line 150
                    echo "          ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidato'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "          <tr>
            <td bgcolor=\"#cececf\" align=\"center\">PSUV</td><td bgcolor=\"#cececf\" align=\"center\">";
            // line 152
            echo twig_escape_filter($this->env, (isset($context["psuv"]) ? $context["psuv"] : $this->getContext($context, "psuv")), "html", null, true);
            echo "</td>
          </tr>
          <tr>
            <td bgcolor=\"#cececf\" align=\"center\">MUD</td><td bgcolor=\"#cececf\" align=\"center\">";
            // line 155
            echo twig_escape_filter($this->env, (isset($context["mud"]) ? $context["mud"] : $this->getContext($context, "mud")), "html", null, true);
            echo "</td>
          </tr>
          <tr>
            <td bgcolor=\"#cececf\" align=\"center\">OTROS</td><td bgcolor=\"#cececf\" align=\"center\">";
            // line 158
            echo twig_escape_filter($this->env, (isset($context["otros"]) ? $context["otros"] : $this->getContext($context, "otros")), "html", null, true);
            echo "</td>
          </tr>
        </table>
      </div>
    ";
        }
        // line 163
        echo "  </div>  

  <area shape=\"poly\" coords=\"602,132,590,120,587,85,600,74,595,55,588,45,585,31,564,14,546,31,538,46,512,53,508,39,503,19,462,29,469,46,472,64,166,118,148,119,128,115,113,103,69,96,78,110,88,125,108,127,124,143,124,156,127,175,140,165,140,182,151,187,192,182,193,195,203,204,207,188,220,193,222,178,233,168,254,180,267,180,291,192,305,185,342,194,362,199,380,195,409,194,428,196,445,190,466,190,494,198,496,179,516,193,542,180,552,166,550,147,551,121,580,122,589,138,600,140\" href=\"";
        // line 165
        echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_mapa_ventana2", array("id_eje" => 2));
        echo "\" onmouseover=\"\" onmouseout=\"\">
  <div id=\"2\" style=\"display:none\">Eje Panamericano
    ";
        // line 167
        if ((( !twig_test_empty((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta"))) && ($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) != "general")) && ($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) != "circuito"))) {
            // line 168
            echo "      <div class=\"datagrid\">
        <table border=\"1\">
          <thead>
          <tr>
            <th align=\"center\">Partido</th><th align=\"center\">Votos</th>
          </tr>
          </thead>
          ";
            // line 175
            list($context["psuv2"], $context["mud2"], $context["otros2"]) =             array(0, 0, 0);
            // line 176
            echo "          ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["candidatos"]) ? $context["candidatos"] : $this->getContext($context, "candidatos")));
            foreach ($context['_seq'] as $context["_key"] => $context["candidato"]) {
                if (($this->getAttribute($this->getAttribute($context["candidato"], "encuesta", array()), "id", array()) == $this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "id", array()))) {
                    // line 177
                    echo "            ";
                    if ((twig_in_filter($this->getAttribute($context["candidato"], "identificador", array()), (isset($context["munEje2"]) ? $context["munEje2"] : $this->getContext($context, "munEje2"))) || ($this->getAttribute($context["candidato"], "identificador", array()) == "todos"))) {
                        // line 178
                        echo "              ";
                        $context["votosTotal"] = 0;
                        // line 179
                        echo "              ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["candidato"], "cvCandidatos", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["c"], "centroVotacion", array()), "parroquia", array()), "municipio", array()), "eje", array()), "id", array()) == 2)) {
                                // line 180
                                echo "                ";
                                $context["votosTotal"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + $this->getAttribute($context["c"], "votos", array()));
                                // line 181
                                echo "              ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 182
                        echo "              ";
                        if (($this->getAttribute($context["candidato"], "partido", array()) == "psuv")) {
                            // line 183
                            echo "                ";
                            $context["psuv"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + (isset($context["psuv"]) ? $context["psuv"] : $this->getContext($context, "psuv")));
                            // line 184
                            echo "              ";
                        }
                        // line 185
                        echo "              ";
                        if (($this->getAttribute($context["candidato"], "partido", array()) == "mud")) {
                            // line 186
                            echo "                ";
                            $context["mud"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + (isset($context["mud"]) ? $context["mud"] : $this->getContext($context, "mud")));
                            // line 187
                            echo "              ";
                        }
                        // line 188
                        echo "              ";
                        if (($this->getAttribute($context["candidato"], "partido", array()) == "otros")) {
                            // line 189
                            echo "                ";
                            $context["otros"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + (isset($context["otros"]) ? $context["otros"] : $this->getContext($context, "otros")));
                            // line 190
                            echo "              ";
                        }
                        // line 191
                        echo "            ";
                    }
                    // line 192
                    echo "          ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidato'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 193
            echo "          <tr>
            <td bgcolor=\"#cececf\" align=\"center\">PSUV</td><td bgcolor=\"#cececf\" align=\"center\">";
            // line 194
            echo twig_escape_filter($this->env, (isset($context["psuv"]) ? $context["psuv"] : $this->getContext($context, "psuv")), "html", null, true);
            echo "</td>
          </tr>
          <tr>
            <td bgcolor=\"#cececf\" align=\"center\">MUD</td><td bgcolor=\"#cececf\" align=\"center\">";
            // line 197
            echo twig_escape_filter($this->env, (isset($context["mud"]) ? $context["mud"] : $this->getContext($context, "mud")), "html", null, true);
            echo "</td>
          </tr>
          <tr>
            <td bgcolor=\"#cececf\" align=\"center\">OTROS</td><td bgcolor=\"#cececf\" align=\"center\">";
            // line 200
            echo twig_escape_filter($this->env, (isset($context["otros"]) ? $context["otros"] : $this->getContext($context, "otros")), "html", null, true);
            echo "</td>
          </tr>
        </table>
      </div>
    ";
        }
        // line 205
        echo "  </div>   

  <area shape=\"poly\" coords=\"420,377,403,365,388,348,379,340,362,327,344,321,328,324,320,323,304,308,257,308,251,312,246,317,232,305,215,302,203,308,194,304,183,310,172,295,161,289,153,288,128,268,111,266,77,272,51,286,46,296,53,316,56,337,66,344,74,355,99,359,116,359,115,373,121,385,128,404,102,434,95,450,78,464,82,499,103,499,104,479,114,464,126,469,166,456,199,455,228,450,245,438,288,435,315,431,342,408,360,403,364,385,376,375,391,379,394,388,412,389,423,374\" href=\"";
        // line 207
        echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_mapa_ventana2", array("id_eje" => 4));
        echo "\" onmouseover=\"\" onmouseout=\"\">
  <div id=\"4\" style=\"display:none\">Eje Pueblos del Sur
    ";
        // line 209
        if ((( !twig_test_empty((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta"))) && ($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) != "general")) && ($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) != "circuito"))) {
            // line 210
            echo "      <div class=\"datagrid\">
        <table border=\"1\">
          <thead>
          <tr>
            <th align=\"center\">Partido</th><th align=\"center\">Votos</th>
          </tr>
          </thead>
          ";
            // line 217
            list($context["psuv"], $context["mud"], $context["otros"]) =             array(0, 0, 0);
            // line 218
            echo "          ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["candidatos"]) ? $context["candidatos"] : $this->getContext($context, "candidatos")));
            foreach ($context['_seq'] as $context["_key"] => $context["candidato"]) {
                if (($this->getAttribute($this->getAttribute($context["candidato"], "encuesta", array()), "id", array()) == $this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "id", array()))) {
                    // line 219
                    echo "            ";
                    if ((twig_in_filter($this->getAttribute($context["candidato"], "identificador", array()), (isset($context["munEje4"]) ? $context["munEje4"] : $this->getContext($context, "munEje4"))) || ($this->getAttribute($context["candidato"], "identificador", array()) == "todos"))) {
                        // line 220
                        echo "              ";
                        $context["votosTotal"] = 0;
                        // line 221
                        echo "              ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["candidato"], "cvCandidatos", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["c"], "centroVotacion", array()), "parroquia", array()), "municipio", array()), "eje", array()), "id", array()) == 4)) {
                                // line 222
                                echo "                ";
                                $context["votosTotal"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + $this->getAttribute($context["c"], "votos", array()));
                                // line 223
                                echo "              ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 224
                        echo "              ";
                        if (($this->getAttribute($context["candidato"], "partido", array()) == "psuv")) {
                            // line 225
                            echo "                ";
                            $context["psuv"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + (isset($context["psuv"]) ? $context["psuv"] : $this->getContext($context, "psuv")));
                            // line 226
                            echo "              ";
                        }
                        // line 227
                        echo "              ";
                        if (($this->getAttribute($context["candidato"], "partido", array()) == "mud")) {
                            // line 228
                            echo "                ";
                            $context["mud"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + (isset($context["mud"]) ? $context["mud"] : $this->getContext($context, "mud")));
                            // line 229
                            echo "              ";
                        }
                        // line 230
                        echo "              ";
                        if (($this->getAttribute($context["candidato"], "partido", array()) == "otros")) {
                            // line 231
                            echo "                ";
                            $context["otros"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + (isset($context["otros"]) ? $context["otros"] : $this->getContext($context, "otros")));
                            // line 232
                            echo "              ";
                        }
                        // line 233
                        echo "            ";
                    }
                    // line 234
                    echo "          ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidato'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            echo "          <tr>
            <td bgcolor=\"#cececf\" align=\"center\">PSUV</td><td bgcolor=\"#cececf\" align=\"center\">";
            // line 236
            echo twig_escape_filter($this->env, (isset($context["psuv"]) ? $context["psuv"] : $this->getContext($context, "psuv")), "html", null, true);
            echo "</td>
          </tr>
          <tr>
            <td bgcolor=\"#cececf\" align=\"center\">MUD</td><td bgcolor=\"#cececf\" align=\"center\">";
            // line 239
            echo twig_escape_filter($this->env, (isset($context["mud"]) ? $context["mud"] : $this->getContext($context, "mud")), "html", null, true);
            echo "</td>
          </tr>
          <tr>
            <td bgcolor=\"#cececf\" align=\"center\">OTROS</td><td bgcolor=\"#cececf\" align=\"center\">";
            // line 242
            echo twig_escape_filter($this->env, (isset($context["otros"]) ? $context["otros"] : $this->getContext($context, "otros")), "html", null, true);
            echo "</td>
          </tr>
        </table>
      </div>
    ";
        }
        // line 247
        echo "  </div>
  
  <area shape=\"poly\" coords=\"158,290,176,259,195,247,190,231,201,207,188,189,146,188,137,173,122,189,104,199,80,219,77,232,56,243,28,254,15,264,15,275,34,276,41,287,62,274,84,269,105,266,125,262,143,272,163,283\" href=\"";
        // line 249
        echo $this->env->getExtension('routing')->getPath("mapas_estadisticos_mapa_ventana2", array("id_eje" => 5));
        echo "\" onmouseover=\"\" onmouseout=\"\">
  <div id=\"5\" style=\"display:none\">Eje Mocot&iacute;es
    ";
        // line 251
        if ((( !twig_test_empty((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta"))) && ($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) != "general")) && ($this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) != "circuito"))) {
            // line 252
            echo "      <div class=\"datagrid\">
        <table border=\"1\">
          <thead>
          <tr>
            <th align=\"center\">Partido</th><th align=\"center\">Votos</th>
          </tr>
          </thead>
          ";
            // line 259
            list($context["psuv"], $context["mud"], $context["otros"]) =             array(0, 0, 0);
            // line 260
            echo "          ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["candidatos"]) ? $context["candidatos"] : $this->getContext($context, "candidatos")));
            foreach ($context['_seq'] as $context["_key"] => $context["candidato"]) {
                if (($this->getAttribute($this->getAttribute($context["candidato"], "encuesta", array()), "id", array()) == $this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "id", array()))) {
                    // line 261
                    echo "            ";
                    if ((twig_in_filter($this->getAttribute($context["candidato"], "identificador", array()), (isset($context["munEje5"]) ? $context["munEje5"] : $this->getContext($context, "munEje5"))) || ($this->getAttribute($context["candidato"], "identificador", array()) == "todos"))) {
                        // line 262
                        echo "              ";
                        $context["votosTotal"] = 0;
                        // line 263
                        echo "              ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["candidato"], "cvCandidatos", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["c"], "centroVotacion", array()), "parroquia", array()), "municipio", array()), "eje", array()), "id", array()) == 5)) {
                                // line 264
                                echo "                ";
                                $context["votosTotal"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + $this->getAttribute($context["c"], "votos", array()));
                                // line 265
                                echo "              ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 266
                        echo "              ";
                        if (($this->getAttribute($context["candidato"], "partido", array()) == "psuv")) {
                            // line 267
                            echo "                ";
                            $context["psuv"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + (isset($context["psuv"]) ? $context["psuv"] : $this->getContext($context, "psuv")));
                            // line 268
                            echo "              ";
                        }
                        // line 269
                        echo "              ";
                        if (($this->getAttribute($context["candidato"], "partido", array()) == "mud")) {
                            // line 270
                            echo "                ";
                            $context["mud"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + (isset($context["mud"]) ? $context["mud"] : $this->getContext($context, "mud")));
                            // line 271
                            echo "              ";
                        }
                        // line 272
                        echo "              ";
                        if (($this->getAttribute($context["candidato"], "partido", array()) == "otros")) {
                            // line 273
                            echo "                ";
                            $context["otros"] = ((isset($context["votosTotal"]) ? $context["votosTotal"] : $this->getContext($context, "votosTotal")) + (isset($context["otros"]) ? $context["otros"] : $this->getContext($context, "otros")));
                            // line 274
                            echo "              ";
                        }
                        // line 275
                        echo "            ";
                    }
                    // line 276
                    echo "          ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidato'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 277
            echo "          <tr>
            <td bgcolor=\"#cececf\" align=\"center\">PSUV</td><td bgcolor=\"#cececf\" align=\"center\">";
            // line 278
            echo twig_escape_filter($this->env, (isset($context["psuv"]) ? $context["psuv"] : $this->getContext($context, "psuv")), "html", null, true);
            echo "</td>
          </tr>
          <tr>
            <td bgcolor=\"#cececf\" align=\"center\">MUD</td><td bgcolor=\"#cececf\" align=\"center\">";
            // line 281
            echo twig_escape_filter($this->env, (isset($context["mud"]) ? $context["mud"] : $this->getContext($context, "mud")), "html", null, true);
            echo "</td>
          </tr>
          <tr>
            <td bgcolor=\"#cececf\" align=\"center\">OTROS</td><td bgcolor=\"#cececf\" align=\"center\">";
            // line 284
            echo twig_escape_filter($this->env, (isset($context["otros"]) ? $context["otros"] : $this->getContext($context, "otros")), "html", null, true);
            echo "</td>
          </tr>
        </table>
      </div>
    ";
        }
        // line 289
        echo "  </div>  
</map>

<div class=\"punto_1\"> Eje Metropolitano</div> 
<div class=\"punto_2\"> Eje Panamericano </div>
<div class=\"punto_3\"> Eje P&aacute;ramo </div>
<div class=\"punto_4\"> Eje Mocot&iacute;es </div>
<div class=\"punto_5\"> Eje Pueblos del Sur </div>";
    }

    public function getTemplateName()
    {
        return "MapasEstadisticosBundle:Default:mapaVentana.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  740 => 289,  732 => 284,  726 => 281,  720 => 278,  717 => 277,  710 => 276,  707 => 275,  704 => 274,  701 => 273,  698 => 272,  695 => 271,  692 => 270,  689 => 269,  686 => 268,  683 => 267,  680 => 266,  673 => 265,  670 => 264,  664 => 263,  661 => 262,  658 => 261,  652 => 260,  650 => 259,  641 => 252,  639 => 251,  634 => 249,  630 => 247,  622 => 242,  616 => 239,  610 => 236,  607 => 235,  600 => 234,  597 => 233,  594 => 232,  591 => 231,  588 => 230,  585 => 229,  582 => 228,  579 => 227,  576 => 226,  573 => 225,  570 => 224,  563 => 223,  560 => 222,  554 => 221,  551 => 220,  548 => 219,  542 => 218,  540 => 217,  531 => 210,  529 => 209,  524 => 207,  520 => 205,  512 => 200,  506 => 197,  500 => 194,  497 => 193,  490 => 192,  487 => 191,  484 => 190,  481 => 189,  478 => 188,  475 => 187,  472 => 186,  469 => 185,  466 => 184,  463 => 183,  460 => 182,  453 => 181,  450 => 180,  444 => 179,  441 => 178,  438 => 177,  432 => 176,  430 => 175,  421 => 168,  419 => 167,  414 => 165,  410 => 163,  402 => 158,  396 => 155,  390 => 152,  387 => 151,  380 => 150,  377 => 149,  374 => 148,  371 => 147,  368 => 146,  365 => 145,  362 => 144,  359 => 143,  356 => 142,  353 => 141,  350 => 140,  347 => 139,  344 => 138,  341 => 137,  334 => 136,  331 => 135,  328 => 134,  322 => 133,  319 => 132,  316 => 131,  310 => 130,  308 => 129,  299 => 122,  297 => 121,  292 => 119,  288 => 117,  280 => 112,  274 => 109,  268 => 106,  265 => 105,  258 => 104,  255 => 103,  252 => 102,  249 => 101,  246 => 100,  243 => 99,  240 => 98,  237 => 97,  234 => 96,  231 => 95,  228 => 94,  221 => 93,  218 => 92,  212 => 91,  209 => 90,  206 => 89,  200 => 88,  198 => 87,  189 => 80,  187 => 79,  182 => 77,  147 => 45,  143 => 44,  139 => 43,  135 => 42,  131 => 41,  127 => 40,  123 => 38,  109 => 33,  101 => 27,  95 => 26,  92 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 21,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  61 => 15,  54 => 14,  50 => 12,  47 => 11,  41 => 7,  37 => 6,  33 => 5,  29 => 4,  24 => 2,  19 => 1,);
    }
}
