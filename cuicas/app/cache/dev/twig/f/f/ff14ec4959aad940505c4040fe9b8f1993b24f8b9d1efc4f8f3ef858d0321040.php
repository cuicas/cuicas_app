<?php

/* MapasEstadisticosBundle:Default:detalle_parroquiaVentana.html.twig */
class __TwigTemplate_ff14ec4959aad940505c4040fe9b8f1993b24f8b9d1efc4f8f3ef858d0321040 extends Twig_Template
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

    \$( \"a\" ).each( function( index, element ){
      console.log( \$( this ).attr('href') );
      \$( this ).easyTooltip({
        useElement: \$( this ).attr('href').substring(\$( this ).attr('href').lastIndexOf('/')+1)  
      });
    });
  });
</script>

<div class=\"datos\" style=\"left:555px;\">
";
        // line 25
        echo "  ";
        if (((isset($context["parroquia"]) ? $context["parroquia"] : $this->getContext($context, "parroquia")) != "")) {
            // line 26
            echo "    <div class=\"datagrid2\">
      <table border=\"1\">
        <thead>
          <th align=\"center\">Foto</th><th align=\"center\">Nombre(s) y Apellido(s)</th><th align=\"center\">Partido</th><th align=\"center\">Votos</th>";
            // line 29
            if ((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "circuito")) {
                echo "<th align=\"center\">Votos Lista</th>";
            }
            // line 30
            echo "        </thead> 
        
          ";
            // line 32
            list($context["candidato1"], $context["candidato2"], $context["candidato3"], $context["totalOtros"]) =             array("Sin Candidato", "Sin Candidato", "Sin Candidato", "Sin Candidato");
            // line 33
            echo "          ";
            list($context["partido1"], $context["partido2"], $context["partido3"]) =             array(0, 0, 0);
            // line 34
            echo "          ";
            list($context["totalVotos1"], $context["totalVotos2"], $context["totalVotos3"]) =             array(0, 0, 0);
            // line 35
            echo "          ";
            list($context["totalVotosLista1"], $context["totalVotosLista2"], $context["totalVotosLista3"]) =             array(0, 0, 0);
            // line 36
            echo "          ";
            list($context["foto1"], $context["foto2"], $context["foto3"]) =             array("sin_foto.png", "sin_foto.png", "sin_foto.png");
            // line 37
            echo "
          ";
            // line 38
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_template_get_attributes($this, (isset($context["parroquia"]) ? $context["parroquia"] : $this->getContext($context, "parroquia")), "centroVotacion", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["centrosVotacion"]) {
                // line 39
                echo "            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_template_get_attributes($this, $context["centrosVotacion"], "cvCandidatos", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["cvCandidato"]) {
                    if (((twig_template_get_attributes($this, $context["cvCandidato"], "idParroquia", array()) == (isset($context["id_parroquia"]) ? $context["id_parroquia"] : $this->getContext($context, "id_parroquia"))) && (twig_template_get_attributes($this, $context["cvCandidato"], "idEncuesta", array()) == twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "id", array())))) {
                        // line 40
                        echo "              ";
                        // line 41
                        echo "                
                ";
                        // line 42
                        if (((twig_template_get_attributes($this, twig_template_get_attributes($this, $context["cvCandidato"], "candidato", array()), "partido", array()) == "psuv") || (twig_template_get_attributes($this, twig_template_get_attributes($this, $context["cvCandidato"], "candidato", array()), "partido", array()) == "psuv-gpp"))) {
                            // line 43
                            echo "                  ";
                            $context["totalVotos1"] = ((isset($context["totalVotos1"]) ? $context["totalVotos1"] : $this->getContext($context, "totalVotos1")) + twig_template_get_attributes($this, $context["cvCandidato"], "votos", array()));
                            // line 44
                            echo "                  ";
                            $context["totalVotosLista1"] = ((isset($context["totalVotosLista1"]) ? $context["totalVotosLista1"] : $this->getContext($context, "totalVotosLista1")) + twig_template_get_attributes($this, $context["cvCandidato"], "votosLista", array()));
                            // line 45
                            echo "                  ";
                            $context["candidato1"] = twig_template_get_attributes($this, twig_template_get_attributes($this, $context["cvCandidato"], "candidato", array()), "apellidoNombre", array());
                            // line 46
                            echo "                  ";
                            $context["partido1"] = twig_template_get_attributes($this, twig_template_get_attributes($this, $context["cvCandidato"], "candidato", array()), "partido", array());
                            // line 47
                            echo "                  ";
                            $context["foto1"] = twig_template_get_attributes($this, twig_template_get_attributes($this, $context["cvCandidato"], "candidato", array()), "rutaFoto", array());
                            // line 48
                            echo "                ";
                        }
                        // line 49
                        echo "                 ";
                        if ((twig_template_get_attributes($this, twig_template_get_attributes($this, $context["cvCandidato"], "candidato", array()), "partido", array()) == "mud")) {
                            // line 50
                            echo "                  ";
                            $context["totalVotos2"] = ((isset($context["totalVotos2"]) ? $context["totalVotos2"] : $this->getContext($context, "totalVotos2")) + twig_template_get_attributes($this, $context["cvCandidato"], "votos", array()));
                            // line 51
                            echo "                  ";
                            $context["totalVotosLista2"] = ((isset($context["totalVotosLista2"]) ? $context["totalVotosLista2"] : $this->getContext($context, "totalVotosLista2")) + twig_template_get_attributes($this, $context["cvCandidato"], "votosLista", array()));
                            // line 52
                            echo "                  ";
                            $context["candidato2"] = twig_template_get_attributes($this, twig_template_get_attributes($this, $context["cvCandidato"], "candidato", array()), "apellidoNombre", array());
                            // line 53
                            echo "                  ";
                            $context["partido2"] = twig_template_get_attributes($this, twig_template_get_attributes($this, $context["cvCandidato"], "candidato", array()), "partido", array());
                            // line 54
                            echo "                  ";
                            $context["foto2"] = twig_template_get_attributes($this, twig_template_get_attributes($this, $context["cvCandidato"], "candidato", array()), "rutaFoto", array());
                            // line 55
                            echo "                ";
                        }
                        echo " 
                 ";
                        // line 56
                        if ((twig_template_get_attributes($this, twig_template_get_attributes($this, $context["cvCandidato"], "candidato", array()), "partido", array()) == "otros")) {
                            // line 57
                            echo "                  ";
                            $context["totalVotos3"] = ((isset($context["totalVotos3"]) ? $context["totalVotos3"] : $this->getContext($context, "totalVotos3")) + twig_template_get_attributes($this, $context["cvCandidato"], "votos", array()));
                            // line 58
                            echo "                  ";
                            $context["totalVotosLista3"] = ((isset($context["totalVotosLista3"]) ? $context["totalVotosLista3"] : $this->getContext($context, "totalVotosLista3")) + twig_template_get_attributes($this, $context["cvCandidato"], "votosLista", array()));
                            // line 59
                            echo "                  ";
                            $context["candidato3"] = twig_template_get_attributes($this, twig_template_get_attributes($this, $context["cvCandidato"], "candidato", array()), "apellidoNombre", array());
                            // line 60
                            echo "                  ";
                            $context["partido3"] = twig_template_get_attributes($this, twig_template_get_attributes($this, $context["cvCandidato"], "candidato", array()), "partido", array());
                            // line 61
                            echo "                  ";
                            $context["foto3"] = twig_template_get_attributes($this, twig_template_get_attributes($this, $context["cvCandidato"], "candidato", array()), "rutaFoto", array());
                            // line 62
                            echo "                ";
                        }
                        echo "                
                  
              ";
                        // line 65
                        echo "            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cvCandidato'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "            
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['centrosVotacion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "        ";
            if (((isset($context["candidato1"]) ? $context["candidato1"] : $this->getContext($context, "candidato1")) != (isset($context["candidato2"]) ? $context["candidato2"] : $this->getContext($context, "candidato2")))) {
                // line 68
                echo "          ";
                if (((isset($context["candidato1"]) ? $context["candidato1"] : $this->getContext($context, "candidato1")) != "Sin Candidato")) {
                    // line 69
                    echo "            <tr>
              <td bgcolor=\"#cececf\"><img class=\"img-rounded\" alt=\"Imagen\" title=\"";
                    // line 70
                    echo twig_escape_filter($this->env, (isset($context["candidato1"]) ? $context["candidato1"] : $this->getContext($context, "candidato1")), "html", null, true);
                    echo "\" id=\"img\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("imagenes/fotosCandidatos/" . (isset($context["foto1"]) ? $context["foto1"] : $this->getContext($context, "foto1"))) . "")), "html", null, true);
                    echo "\" align=\"center\" height=\"50\" width=\"60\" ></td><td bgcolor=\"#cececf\">";
                    echo twig_escape_filter($this->env, (isset($context["candidato1"]) ? $context["candidato1"] : $this->getContext($context, "candidato1")), "html", null, true);
                    echo "</td><td bgcolor=\"#cececf\">";
                    echo twig_escape_filter($this->env, (isset($context["partido1"]) ? $context["partido1"] : $this->getContext($context, "partido1")), "html", null, true);
                    echo "</td><td bgcolor=\"#cececf\">";
                    echo twig_escape_filter($this->env, (isset($context["totalVotos1"]) ? $context["totalVotos1"] : $this->getContext($context, "totalVotos1")), "html", null, true);
                    echo "</td>";
                    if ((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "circuito")) {
                        echo "<td bgcolor=\"#cececf\">";
                        echo twig_escape_filter($this->env, (isset($context["totalVotosLista1"]) ? $context["totalVotosLista1"] : $this->getContext($context, "totalVotosLista1")), "html", null, true);
                        echo "</td>";
                    }
                    // line 71
                    echo "            </tr>
          ";
                }
                // line 73
                echo "          ";
                if (((isset($context["candidato2"]) ? $context["candidato2"] : $this->getContext($context, "candidato2")) != "Sin Candidato")) {
                    // line 74
                    echo "            <tr>
              <td bgcolor=\"#cececf\"><img class=\"img-rounded\" alt=\"Imagen\" title=\"";
                    // line 75
                    echo twig_escape_filter($this->env, (isset($context["candidato2"]) ? $context["candidato2"] : $this->getContext($context, "candidato2")), "html", null, true);
                    echo "\" id=\"img\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("imagenes/fotosCandidatos/" . (isset($context["foto2"]) ? $context["foto2"] : $this->getContext($context, "foto2"))) . "")), "html", null, true);
                    echo "\" align=\"center\" height=\"50\" width=\"60\" ></td><td bgcolor=\"#cececf\">";
                    echo twig_escape_filter($this->env, (isset($context["candidato2"]) ? $context["candidato2"] : $this->getContext($context, "candidato2")), "html", null, true);
                    echo "</td><td bgcolor=\"#cececf\">";
                    echo twig_escape_filter($this->env, (isset($context["partido2"]) ? $context["partido2"] : $this->getContext($context, "partido2")), "html", null, true);
                    echo "</td><td bgcolor=\"#cececf\">";
                    echo twig_escape_filter($this->env, (isset($context["totalVotos2"]) ? $context["totalVotos2"] : $this->getContext($context, "totalVotos2")), "html", null, true);
                    echo "</td>";
                    if ((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "circuito")) {
                        echo "<td bgcolor=\"#cececf\">";
                        echo twig_escape_filter($this->env, (isset($context["totalVotosLista2"]) ? $context["totalVotosLista2"] : $this->getContext($context, "totalVotosLista2")), "html", null, true);
                        echo "</td>";
                    }
                    // line 76
                    echo "            </tr>
          ";
                }
                // line 78
                echo "          ";
                if (((isset($context["candidato3"]) ? $context["candidato3"] : $this->getContext($context, "candidato3")) != "Sin Candidato")) {
                    // line 79
                    echo "            <tr>
              <td bgcolor=\"#cececf\"><img class=\"img-rounded\" alt=\"Imagen\" title=\"";
                    // line 80
                    echo twig_escape_filter($this->env, (isset($context["candidato3"]) ? $context["candidato3"] : $this->getContext($context, "candidato3")), "html", null, true);
                    echo "\" id=\"img\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("imagenes/fotosCandidatos/" . (isset($context["foto3"]) ? $context["foto3"] : $this->getContext($context, "foto3"))) . "")), "html", null, true);
                    echo "\" align=\"center\" height=\"50\" width=\"60\" ></td><td bgcolor=\"#cececf\">";
                    echo twig_escape_filter($this->env, (isset($context["candidato3"]) ? $context["candidato3"] : $this->getContext($context, "candidato3")), "html", null, true);
                    echo "</td><td bgcolor=\"#cececf\">";
                    echo twig_escape_filter($this->env, (isset($context["partido3"]) ? $context["partido3"] : $this->getContext($context, "partido3")), "html", null, true);
                    echo "</td><td bgcolor=\"#cececf\">";
                    echo twig_escape_filter($this->env, (isset($context["totalVotos3"]) ? $context["totalVotos3"] : $this->getContext($context, "totalVotos3")), "html", null, true);
                    echo "</td>";
                    if ((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "circuito")) {
                        echo "<td bgcolor=\"#cececf\">";
                        echo twig_escape_filter($this->env, (isset($context["totalVotosLista3"]) ? $context["totalVotosLista3"] : $this->getContext($context, "totalVotosLista3")), "html", null, true);
                        echo "</td>";
                    }
                    // line 81
                    echo "            </tr>
          ";
                }
                // line 83
                echo "        ";
            } else {
                // line 84
                echo "          <tr>
            <td bgcolor=\"#cececf\"><img class=\"img-rounded\" alt=\"Imagen\" title=\"";
                // line 85
                echo twig_escape_filter($this->env, (isset($context["candidato2"]) ? $context["candidato2"] : $this->getContext($context, "candidato2")), "html", null, true);
                echo "\" id=\"img\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/fotosCandidatos/sin_foto.png"), "html", null, true);
                echo "\" align=\"center\" height=\"50\" width=\"60\" ></td><td bgcolor=\"#cececf\">Sin candidatos</td><td bgcolor=\"#cececf\"> </td><td bgcolor=\"#cececf\">0</td>";
                if ((twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tipoEncuesta", array()) == "circuito")) {
                    echo "<td bgcolor=\"#cececf\">0</td>";
                }
                // line 86
                echo "          </tr>
        ";
            }
            // line 87
            echo "        
      </table>
    </div>
  ";
        }
        // line 91
        echo "</div>

<div class=\"titulo\">
  <div align=\"center\" >Parroquia ";
        // line 94
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["parroquia"]) ? $context["parroquia"] : $this->getContext($context, "parroquia")), "nombreParroquia", array()), "html", null, true);
        echo " </div>
</div>


<div class=\"botones_menu\" style=\"position: absolute; top: 50px; \">
  <a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mapas_estadisticos_detalle_municipio_ventana", array("id_municipio" => twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["parroquia"]) ? $context["parroquia"] : $this->getContext($context, "parroquia")), "municipio", array()), "id", array()))), "html", null, true);
        echo "\">Regresar al Mcpio. ";
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["parroquia"]) ? $context["parroquia"] : $this->getContext($context, "parroquia")), "municipio", array()), "nombreMunicipio", array()), "html", null, true);
        echo "<br> 

";
        // line 105
        echo "
  ";
        // line 106
        echo twig_template_get_attributes($this, $this, "boton", array(0 => twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["parroquia"]) ? $context["parroquia"] : $this->getContext($context, "parroquia")), "municipio", array()), "id", array())), "method");
        echo "


<div style=\"position: absolute; top: -30px; height:400px; width: 400qpx;\"><img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((((("imagenes/merida/parroquias/colores/individual/" . (isset($context["colorParroquia"]) ? $context["colorParroquia"] : $this->getContext($context, "colorParroquia"))) . "/") . (isset($context["id_parroquia"]) ? $context["id_parroquia"] : $this->getContext($context, "id_parroquia"))) . ".png")), "html", null, true);
        echo "\" border=\"0\" class=\"parroquia\"><!-- width=\"500\"
  height=\"400\" --></div>
</div>
<div id=\"";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["id_parroquia"]) ? $context["id_parroquia"] : $this->getContext($context, "id_parroquia")), "html", null, true);
        echo "\" style=\"display:none\">";
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["parroquia"]) ? $context["parroquia"] : $this->getContext($context, "parroquia")), "nombreParroquia", array()), "html", null, true);
        echo "</div>


<div style=\"position: absolute; left:555px; top: 60px;\">
  <div style=\"width:375px; height:240px; overflow: auto; position:absolute; \">
  <div class=\"datagrid2\">
    <table border=\"1\">
      <thead>
        <th align=\"center\">Centros de Votaci&oacute;n</th>
      </thead>
      ";
        // line 122
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_template_get_attributes($this, (isset($context["parroquia"]) ? $context["parroquia"] : $this->getContext($context, "parroquia")), "centroVotacion", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["cv"]) {
            // line 123
            echo "        <tr><td><strong>";
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["cv"], "nombreCentro", array()), "html", null, true);
            echo "</strong></td><tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "  </div>
</div>
</div>
";
    }

    // line 101
    public function getboton($__idMunicipio__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "idMunicipio" => $__idMunicipio__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 102
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("imagenes/merida/municipios/regresar/" . (isset($context["idMunicipio"]) ? $context["idMunicipio"] : $this->getContext($context, "idMunicipio"))) . ".png")), "html", null, true);
            echo "\" border=\"0\"></a> 
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
        return "MapasEstadisticosBundle:Default:detalle_parroquiaVentana.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 102,  362 => 101,  355 => 125,  346 => 123,  342 => 122,  327 => 112,  321 => 109,  315 => 106,  312 => 105,  305 => 99,  297 => 94,  292 => 91,  286 => 87,  282 => 86,  274 => 85,  271 => 84,  268 => 83,  264 => 81,  248 => 80,  245 => 79,  242 => 78,  238 => 76,  222 => 75,  219 => 74,  216 => 73,  212 => 71,  196 => 70,  193 => 69,  190 => 68,  187 => 67,  174 => 65,  168 => 62,  165 => 61,  162 => 60,  159 => 59,  156 => 58,  153 => 57,  151 => 56,  146 => 55,  143 => 54,  140 => 53,  137 => 52,  134 => 51,  131 => 50,  128 => 49,  125 => 48,  122 => 47,  119 => 46,  116 => 45,  113 => 44,  110 => 43,  108 => 42,  105 => 41,  103 => 40,  97 => 39,  93 => 38,  90 => 37,  87 => 36,  84 => 35,  81 => 34,  78 => 33,  76 => 32,  72 => 30,  68 => 29,  63 => 26,  60 => 25,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  24 => 3,  19 => 2,);
    }
}
