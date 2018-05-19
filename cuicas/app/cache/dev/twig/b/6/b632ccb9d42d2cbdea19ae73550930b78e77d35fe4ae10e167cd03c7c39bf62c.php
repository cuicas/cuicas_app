<?php

/* EncuestasBundle:Encuestas:mostrarDatosFase2.html.twig */
class __TwigTemplate_b632ccb9d42d2cbdea19ae73550930b78e77d35fe4ae10e167cd03c7c39bf62c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "EncuestasBundle:Encuestas:mostrarDatosFase2.html.twig", 1);
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
        echo "Datos del Encuestado";
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "nombreEncuesta", array()), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "  ";
        // line 6
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_datosEncuestaSufragio", array("id_encuesta" => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" onsubmit=\"return validar()\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'enctype');
        echo " novalidate>\t
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 8
            echo "      <script language=Javascript>
      \$(document).ready(function(){
        \$(this).tab('show');
        BootstrapDialog.show({
          title: 'Mensaje',
          message: ('";
            // line 13
            echo twig_escape_filter($this->env, $context["mensaje"], "html", null, true);
            echo "'),
          buttons: [{
            id: 'btn-ok',
            //icon: 'glyphicon glyphicon-check',       
            label: 'Aceptar',
            cssClass: 'btn btn-default',
            autospin: false,
            action: function(dialogRef){
              dialogRef.close();
            }
          }]
        })
      });
      </script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "  \t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'errors');
        echo "
    <div class=\"col-xs-13 col-md-3 col-md-offset-2\">
      <div class=\"row\">
        <div class=\"col-xs-13\">
          <table class=\"table1 table-striped table-bordered\" id=\"mytable1\" style=\"margin-left:-30px;\">
            <thead>
              <tr>
              \t<td ><strong>Municipio</strong></td>
              \t<td>";
        // line 36
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "municipio", array()), "nombre", array()), "html", null, true);
        echo "</td>
              </tr> 
            \t<tr>
              \t<td><strong>Parroquia</strong></td>
              \t<td>";
        // line 40
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "parroquia", array()), "nombre", array()), "html", null, true);
        echo "</td>
              </tr>
            \t<tr>
              \t<td><strong>Centro</strong></td>
              \t<td>";
        // line 44
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "nombreCentro", array()), "html", null, true);
        echo "</td>
            \t</tr>
            \t<tr>
              \t<td ><strong>Coordinador de UBCH</strong></td>
              \t<td ><div class=\"editarNombre\" id=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "coordinador", array()), "id_ubch", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "coordinador", array()), "apellidos_nombres", array()), "html", null, true);
        echo " (CI.";
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "coordinador", array()), "cedula", array()), "html", null, true);
        echo ")</div></td>
              </tr>
              <tr>
              \t<td><strong>Tel&eacute;fonos</strong></td>
              \t<td><div class=\"editarTelf\" id=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "coordinador", array()), "id_ubch", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, trim(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "coordinador", array()), "telefono_1", array())), "html", null, true);
        echo "
                  ";
        // line 53
        if (twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : null), "coordinador", array(), "any", false, true), "telefono_2", array(), "any", true, true)) {
            // line 54
            echo "                    ";
            if ((twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "coordinador", array()), "telefono_2", array()) == "''")) {
                // line 55
                echo "                    ";
            } else {
                echo twig_escape_filter($this->env, trim(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "coordinador", array()), "telefono_2", array())), "html", null, true);
                echo "
                    ";
            }
            // line 57
            echo "                  ";
        }
        // line 58
        echo "                </div></td>
              </tr>
              <tr>
              \t<td><strong>Responsable Log&iacute;stica</strong></td>
              \t<td><div class=\"editarNombre\" id=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "logistica", array()), "id_ubch", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "logistica", array()), "apellidos_nombres", array()), "html", null, true);
        echo " (CI.";
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "logistica", array()), "cedula", array()), "html", null, true);
        echo ")</div></td>
              </tr>
              <tr>
              \t<td><strong>Tel&eacute;fonos</strong></td>
              \t<td>
                  <div class=\"editarTelf\" id=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "logistica", array()), "id_ubch", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, trim(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "logistica", array()), "telefono_1", array())), "html", null, true);
        echo "
                    ";
        // line 68
        if (twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : null), "logistica", array(), "any", false, true), "telefono_2", array(), "any", true, true)) {
            // line 69
            echo "                      ";
            if ((twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "logistica", array()), "telefono_2", array()) == "''")) {
                // line 70
                echo "                      ";
            } else {
                echo twig_escape_filter($this->env, trim(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "logistica", array()), "telefono_2", array())), "html", null, true);
                echo "
                      ";
            }
            // line 72
            echo "                    ";
        }
        // line 73
        echo "                  </div>
                </td>
              </tr>
              <tr>
              \t<td><strong>Responsable Movilizaci&oacute;n</strong></td>
              \t<td><div class=\"editarNombre\" id=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "movilizacion", array()), "id_ubch", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "movilizacion", array()), "apellidos_nombres", array()), "html", null, true);
        echo " (CI.";
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "movilizacion", array()), "cedula", array()), "html", null, true);
        echo ")</div></td>
              </tr>
              <tr>
              \t<td><strong>Tel&eacute;fonos</strong></td>
              \t<td><div class=\"editarTelf\" id=\"";
        // line 82
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "movilizacion", array()), "id_ubch", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, trim(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "movilizacion", array()), "telefono_1", array())), "html", null, true);
        echo " 
                  ";
        // line 83
        if (twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : null), "movilizacion", array(), "any", false, true), "telefono_2", array(), "any", true, true)) {
            // line 84
            echo "                    ";
            if ((twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "movilizacion", array()), "telefono_2", array()) == "''")) {
                // line 85
                echo "                    ";
            } else {
                echo twig_escape_filter($this->env, trim(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "movilizacion", array()), "telefono_2", array())), "html", null, true);
                echo "
                    ";
            }
            // line 87
            echo "                  ";
        }
        // line 88
        echo "                </div></td>
              </tr>
              <tr>
              \t<td><strong>Responsable Testigos</strong></td>
              \t<td><div class=\"editarNombre\" id=\"";
        // line 92
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "testigo", array()), "id_ubch", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "testigo", array()), "apellidos_nombres", array()), "html", null, true);
        echo " (CI.";
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "testigo", array()), "cedula", array()), "html", null, true);
        echo ")</div></td>
              </tr>
              <tr>
              \t<td><strong>Tel&eacute;fonos</strong></td>
              \t<td><div class=\"editarTelf\" id=\"";
        // line 96
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "testigo", array()), "id_ubch", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, trim(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "testigo", array()), "telefono_1", array())), "html", null, true);
        echo "
                  ";
        // line 97
        if (twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : null), "testigo", array(), "any", false, true), "telefono_2", array(), "any", true, true)) {
            // line 98
            echo "                    ";
            if ((twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "testigo", array()), "telefono_2", array()) == "''")) {
                // line 99
                echo "                    ";
            } else {
                echo twig_escape_filter($this->env, trim(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "testigo", array()), "telefono_2", array())), "html", null, true);
                echo "
                    ";
            }
            // line 101
            echo "                  ";
        }
        // line 102
        echo "                </div></td>
              </tr>
              <tr>
                <td colspan=\"2\" align=\"center\"><a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_datosEncuestaSufragio", array("id_encuesta" => twig_template_get_attributes($this, (isset($context["encuestaFase2"]) ? $context["encuestaFase2"] : $this->getContext($context, "encuestaFase2")), "id", array()))), "html", null, true);
        echo "?totalizacion=totalizacion\" target=\"_blank\"><strong><input class=\"btn-default\" type=\"button\" value=\"Totalizaci&oacute;n\" name=\"form[boton_buscar]\" ";
        if ((twig_template_get_attributes($this, (isset($context["encuestaFase2"]) ? $context["encuestaFase2"] : $this->getContext($context, "encuestaFase2")), "id", array()) == 0)) {
            echo "onclick=\"javascript:\$(document).ready(function(){\$(this).tab('show'); BootstrapDialog.show({title: 'ERROR',message: ('No existe una encuesta de sufragio fase 3 configurada'),buttons: [{id: 'btn-ok',label: 'Aceptar', cssClass: 'btn btn-default', autospin: false, action: function(dialogRef){dialogRef.close();}}]})}); event.preventDefault();\"";
        }
        echo "/></strong></a></td>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>

    <div class=\"col-xs-12 col-md-1\">
      <div class=\"row\">
        <div class=\"col-xs-12\">
         \t<div style=\"width:490px; height:360px; overflow: auto; position:relative; \">
            <table class=\"table1\" id=\"mytable\" border=\"0\">
            \t<thead>
            \t\t<tr>
            \t\t\t<td colspan=\"0\" bgcolor=\"#d0d2d3\" width=\"120\"><strong> Finalizaci&oacute;n <input type=\"checkbox\" id='form_f' name=\"form[apertura]\" value=\"si\" onclick=\"mostrar();\"> </strong></td>
                  <td colspan=\"0\" align=\"center\"><div class=\"primero\"><strong>¿Apertura?</strong></div></td>
                  <td colspan=\"0\" align=\"center\"><div class=\"primero\"><strong>¿Testigos?</strong></div></td>
                  <td colspan=\"0\" align=\"center\"><div class=\"finalizacion\" style=\"display:none;\"><strong>¿Cierre?</strong></div></td>
                  <td colspan=\"2\" align=\"center\"><div class=\"finalizacion\" style=\"display:none;\"><strong>¿Participaci&oacute;n?</strong></div></td>
            \t\t</tr>
              \t";
        // line 126
        $context["contactados"] = twig_template_get_attributes($this, (isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "getContactadosSufragioEncuesta", array(0 => (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta"))), "method");
        // line 127
        echo "            \t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_template_get_attributes($this, (isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "cantidadMesas", array())));
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
        foreach ($context['_seq'] as $context["_key"] => $context["cant_mesas"]) {
            // line 128
            echo "                  ";
            list($context["no1"], $context["no2"], $context["no3"], $context["no4"], $context["no5"]) =             array("", "", "", "", "");
            // line 129
            echo "               \t\t<tr>
                    <td colspan=\"0\">
                      <strong>&nbsp;Mesa ";
            // line 131
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["loop"], "index", array()), "html", null, true);
            echo "</strong>
                 \t\t</td>
                 \t\t<td align=\"center\">
                 \t\t\t<div class=\"primero\">
                        Si&nbsp;<input type=\"radio\" id=\"apertura_";
            // line 135
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["loop"], "index", array()), "html", null, true);
            echo "\" name=\"form[apertura_";
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["loop"], "index", array()), "html", null, true);
            echo "]\" value=\"si\" ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["contactados"]) ? $context["contactados"] : $this->getContext($context, "contactados")));
            foreach ($context['_seq'] as $context["_key"] => $context["gg"]) {
                if ((twig_template_get_attributes($this, $context["gg"], "getRepuestaEncuesta", array(0 => 1, 1 => $context["cant_mesas"]), "method") == "si")) {
                    echo "checked";
                }
                if ((twig_template_get_attributes($this, $context["gg"], "getRepuestaEncuesta", array(0 => 1, 1 => $context["cant_mesas"]), "method") == "no")) {
                    $context["no1"] = "checked";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " class=\"validate[required]\">&nbsp;&nbsp;&nbsp;No&nbsp;<input id=\"apertura_";
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["loop"], "index", array()), "html", null, true);
            echo "\" type=\"radio\" name=\"form[apertura_";
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["loop"], "index", array()), "html", null, true);
            echo "]\" value=\"no\" ";
            echo twig_escape_filter($this->env, (isset($context["no1"]) ? $context["no1"] : $this->getContext($context, "no1")), "html", null, true);
            echo " class=\"validate[required]\" >
            \t        </div>
                  \t</td>
              \t\t  <td align=\"center\">
                      <div class=\"primero\">
                        <select id=\"testigos_";
            // line 140
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["loop"], "index", array()), "html", null, true);
            echo "\" name=\"form[testigos_";
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["loop"], "index", array()), "html", null, true);
            echo "]\" class=\"form-control validate[required]\">
                          <option value=\"0\" ";
            // line 141
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["contactados"]) ? $context["contactados"] : $this->getContext($context, "contactados")));
            foreach ($context['_seq'] as $context["_key"] => $context["gg"]) {
                if ((twig_template_get_attributes($this, $context["gg"], "getRepuestaEncuesta", array(0 => 2, 1 => $context["cant_mesas"]), "method") == 0)) {
                    echo "selected";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">0</option>
                          <option value=\"1\" ";
            // line 142
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["contactados"]) ? $context["contactados"] : $this->getContext($context, "contactados")));
            foreach ($context['_seq'] as $context["_key"] => $context["gg"]) {
                if ((twig_template_get_attributes($this, $context["gg"], "getRepuestaEncuesta", array(0 => 2, 1 => $context["cant_mesas"]), "method") == 1)) {
                    echo "selected";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">1</option>
                          <option value=\"2\" ";
            // line 143
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["contactados"]) ? $context["contactados"] : $this->getContext($context, "contactados")));
            foreach ($context['_seq'] as $context["_key"] => $context["gg"]) {
                if ((twig_template_get_attributes($this, $context["gg"], "getRepuestaEncuesta", array(0 => 2, 1 => $context["cant_mesas"]), "method") == 2)) {
                    echo "selected";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">2</option>
                          <option value=\"3\" ";
            // line 144
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["contactados"]) ? $context["contactados"] : $this->getContext($context, "contactados")));
            foreach ($context['_seq'] as $context["_key"] => $context["gg"]) {
                if ((twig_template_get_attributes($this, $context["gg"], "getRepuestaEncuesta", array(0 => 2, 1 => $context["cant_mesas"]), "method") == 3)) {
                    echo "selected";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">3</option>
                        </select>
            \t        </div>
                    </td>                    
                    <td align=\"center\">
                      <div class=\"finalizacion\" style=\"display:none;\">
                      Si <input type=\"radio\" name=\"form[cierre_";
            // line 150
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["loop"], "index", array()), "html", null, true);
            echo "]\" value=\"si\" ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["contactados"]) ? $context["contactados"] : $this->getContext($context, "contactados")));
            foreach ($context['_seq'] as $context["_key"] => $context["gg"]) {
                if ((twig_template_get_attributes($this, $context["gg"], "getRepuestaEncuesta", array(0 => 5, 1 => $context["cant_mesas"]), "method") == "si")) {
                    echo "checked";
                }
                if ((twig_template_get_attributes($this, $context["gg"], "getRepuestaEncuesta", array(0 => 5, 1 => $context["cant_mesas"]), "method") == "no")) {
                    $context["no5"] = "checked";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
                      &nbsp;&nbsp;&nbsp;No <input type=\"radio\" name=\"form[cierre_";
            // line 151
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["loop"], "index", array()), "html", null, true);
            echo "]\" value=\"no\" ";
            echo twig_escape_filter($this->env, (isset($context["no5"]) ? $context["no5"] : $this->getContext($context, "no5")), "html", null, true);
            echo ">
                      </div>
                    </td>
                    <td align=\"center\">
                      ";
            // line 155
            if (($context["cant_mesas"] == 1)) {
                // line 156
                echo "                        <div class=\"finalizacion\" style=\"display:none;\">Chavistas
                          <input style=\"width:70px;\" class=\"form-control\" type=\"number\"  id=\"o_participacion_";
                // line 157
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["loop"], "index", array()), "html", null, true);
                echo "\" min=\"0\" name=\"form[o_participacion_";
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["loop"], "index", array()), "html", null, true);
                echo "]\" value=\"";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["contactados"]) ? $context["contactados"] : $this->getContext($context, "contactados")));
                foreach ($context['_seq'] as $context["_key"] => $context["gg"]) {
                    if (twig_template_get_attributes($this, $context["gg"], "getRepuestaEncuesta", array(0 => 3, 1 => $context["cant_mesas"]), "method", true, true)) {
                        echo twig_escape_filter($this->env, trim(twig_template_get_attributes($this, $context["gg"], "getRepuestaEncuesta", array(0 => 3, 1 => $context["cant_mesas"]), "method")), "html", null, true);
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\">
                        </div>
                      ";
            } else {
                // line 160
                echo "                        <div class=\"finalizacion\" style=\"display:none;\">
                          <input style=\"width:70px;\" class=\"form-control\" type=\"hidden\"  id=\"o_participacion_";
                // line 161
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["loop"], "index", array()), "html", null, true);
                echo "\" min=\"0\" name=\"form[o_participacion_";
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["loop"], "index", array()), "html", null, true);
                echo "]\" value=\"0\">
                        </div>
                      ";
            }
            // line 164
            echo "                    </td>
                    <td align=\"center\">
                      ";
            // line 166
            if (($context["cant_mesas"] == 1)) {
                // line 167
                echo "                        <div class=\"finalizacion\" style=\"display:none;\">Opositores
                          <input style=\"width:70px;\"  class=\"form-control\" type=\"number\" id=\"op_participacion_";
                // line 168
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["loop"], "index", array()), "html", null, true);
                echo "\" min=\"0\" name=\"form[op_participacion_";
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["loop"], "index", array()), "html", null, true);
                echo "]\" value=\"";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["contactados"]) ? $context["contactados"] : $this->getContext($context, "contactados")));
                foreach ($context['_seq'] as $context["_key"] => $context["gg"]) {
                    if (twig_template_get_attributes($this, $context["gg"], "getRepuestaEncuesta", array(0 => 4, 1 => $context["cant_mesas"]), "method", true, true)) {
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["gg"], "getRepuestaEncuesta", array(0 => 4, 1 => $context["cant_mesas"]), "method"), "html", null, true);
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\">
                        </div>
                      ";
            } else {
                // line 171
                echo "                         <div class=\"finalizacion\" style=\"display:none;\">
                          <input style=\"width:70px;\"  class=\"form-control\" type=\"hidden\" id=\"op_participacion_";
                // line 172
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["loop"], "index", array()), "html", null, true);
                echo "\" min=\"0\" name=\"form[op_participacion_";
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["loop"], "index", array()), "html", null, true);
                echo "]\" value=\"0\">
                        </div>
                      ";
            }
            // line 175
            echo "                    </td>
                  </tr>
                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cant_mesas'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "                <tr class=\"incidencias\">
                  <td colspan=\"6\"><br><strong for=\"form_tipo_incidencia\" id='label_form_tipo_incidencia'>Tipo de incidencia</strong></td>
                 <tr>
                   <td colspan=\"2\"><select id=\"form_tipo_incidencia\" name=\"form[tipo_incidencia]\" class=\"form-control input-sm validate[required]\">
                    <option value=\"\">Seleccionar</option>
                    <option value=\"ninguna\" ";
        // line 183
        if ( !(null === (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")))) {
            if ((trim(twig_template_get_attributes($this, (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")), "tipoIncidencia", array())) == "ninguna")) {
                echo "selected=\"selected\"";
            }
        }
        echo ">Ninguna</option>
                    <option value=\"logistica\" ";
        // line 184
        if ( !(null === (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")))) {
            if ((trim(twig_template_get_attributes($this, (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")), "tipoIncidencia", array())) == "logistica")) {
                echo "selected=\"selected\"";
            }
        }
        echo ">Log&iacute;stica</option>
                    <option value=\"seguridad\" ";
        // line 185
        if ( !(null === (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")))) {
            if ((trim(twig_template_get_attributes($this, (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")), "tipoIncidencia", array())) == "seguridad")) {
                echo "selected=\"selected\"";
            }
        }
        echo ">Seguridad/Orden P&uacute;blico</option>
                    <option value=\"energia\" ";
        // line 186
        if ( !(null === (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")))) {
            if ((trim(twig_template_get_attributes($this, (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")), "tipoIncidencia", array())) == "energia")) {
                echo "selected=\"selected\"";
            }
        }
        echo ">Energia/Servicios</option>
                    <option value=\"meteorologicos\" ";
        // line 187
        if ( !(null === (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")))) {
            if ((trim(twig_template_get_attributes($this, (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")), "tipoIncidencia", array())) == "meteorologicos")) {
                echo "selected=\"selected\"";
            }
        }
        echo ">Meteorol&oacute;gicos</option>
                    <option value=\"cne\" ";
        // line 188
        if ( !(null === (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")))) {
            if ((trim(twig_template_get_attributes($this, (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")), "tipoIncidencia", array())) == "cne")) {
                echo "selected=\"selected\"";
            }
        }
        echo ">CNE</option>
                    <option value=\"otras\" ";
        // line 189
        if ( !(null === (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")))) {
            if ((trim(twig_template_get_attributes($this, (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")), "tipoIncidencia", array())) == "otras")) {
                echo "selected=\"selected\"";
            }
        }
        echo ">Otras</option>
                    <option value=\"resuelta\" ";
        // line 190
        if ( !(null === (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")))) {
            if ((trim(twig_template_get_attributes($this, (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")), "tipoIncidencia", array())) == "resuelta")) {
                echo "selected=\"selected\"";
            }
        }
        echo ">Resuelta</option>
                  </select>
                  </td>
                </tr>
            \t\t<tr class=\"incidencias\">
              \t\t<td colspan=\"9\">
                \t\t<strong>Incidencias</strong>
             \t\t\t</td>
            \t\t</tr>
            \t\t<tr class=\"incidencias\">
              \t\t<td colspan=\"9\"><textarea style=\"width:450px; height:100px; resize:none;\" id=\"label2p\" class=\"textarea form-control\" name=\"form[incidencias]\" maxlength=\"255\">";
        // line 200
        if ( !twig_test_empty((isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")))) {
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")), "getDescripcion", array()), "html", null, true);
        }
        echo "</textarea></td>
              \t</tr>
              </thead>   
            </table>
          </div>
        </div>
      </div>
    </div>
   
    <div class=\"col-xs-12 col-md-12\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <center></a><input class=\"fueraoverflow2 btn btn-default\" type=\"submit\" value=\"Guardar\" name=\"form[boton_guardar_fase2]\" />";
        // line 212
        if (((isset($context["buscarTodo"]) ? $context["buscarTodo"] : $this->getContext($context, "buscarTodo")) == "todos")) {
            echo " <input class=\"fueraoverflow2 btn btn-default\" type=\"submit\" id=\"otro\" value=\"Buscar Otro\" name=\"form[boton_buscar]\" />";
        }
        echo " <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_datosEncuestaSufragio", array("id_encuesta" => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "id", array()))), "html", null, true);
        echo "\"><input class=\"fueraoverflow2 btn btn-default\" type=\"button\" value=\"Cancelar\" name=\"form[boton_cancelar]\" /></a></center>
        </div>
      </div>
    </div> 

  </form>
  <script>

    \$(document).ready(function(){ 

      \$( \"#mytable1 tr:even\" ).css( \"background-color\", \"#d0d2d3\" ); 

      \$('#otro').on( \"click\", function() {
        \$('*[type=\"radio\"]').removeClass( \"validate[required]\" );
        \$('#form_tipo_incidencia').removeClass( \"validate[required]\" );
      });
      
      \$( \"#mytable tr:odd\" ).css( \"background-color\", \"#d0d2d3\" );
      \$('#mytable tr').each(function() {
        if(\$(this).attr(\"class\") == \"incidencias\"){
          \$(this).css( \"background-color\", \"\" );
          
        }
      });

      \$('#form_f').click( function(){ 
        if(this.checked == true){
          \$(\".primero\").css(\"display\",\"none\")
          \$(\".finalizacion\").css(\"display\",\"block\");

        }
        else{ 
          \$(\".primero\").css(\"display\",\"block\")
          \$(\".finalizacion\").css(\"display\",\"none\");
        }
      });
      
      /* campo editables */
      \$('.editarNombre').editable('";
        // line 250
        echo $this->env->getExtension('routing')->getPath("encuestas_editar_datos", array("tipo" => "ubch"));
        echo "', {
         //indicator : \"Guardando...\",
         indicator : \"<img src='";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/bx_loader.gif"), "html", null, true);
        echo "'>\",         
         tooltip   : 'Doble clic para editar...',
         id   : 'nombre',
         event  : \"dblclick\",
         submit  : 'OK'
      });
      /*  */

      /* campo editables telefono*/
      \$('.editarTelf').editable('";
        // line 261
        echo $this->env->getExtension('routing')->getPath("encuestas_editar_datos", array("tipo" => "ubch"));
        echo "', {
         indicator : 'Guardando...',
         tooltip   : 'Doble clic para editar...',
         id   : 'telefono',
         event  : \"dblclick\",
         submit  : 'OK'
      });
      /*  */
    });
  </script>
";
    }

    public function getTemplateName()
    {
        return "EncuestasBundle:Encuestas:mostrarDatosFase2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  705 => 261,  693 => 252,  688 => 250,  643 => 212,  626 => 200,  609 => 190,  601 => 189,  593 => 188,  585 => 187,  577 => 186,  569 => 185,  561 => 184,  553 => 183,  546 => 178,  530 => 175,  522 => 172,  519 => 171,  500 => 168,  497 => 167,  495 => 166,  491 => 164,  483 => 161,  480 => 160,  461 => 157,  458 => 156,  456 => 155,  447 => 151,  429 => 150,  411 => 144,  398 => 143,  385 => 142,  372 => 141,  366 => 140,  336 => 135,  329 => 131,  325 => 129,  322 => 128,  304 => 127,  302 => 126,  274 => 105,  269 => 102,  266 => 101,  259 => 99,  256 => 98,  254 => 97,  248 => 96,  237 => 92,  231 => 88,  228 => 87,  221 => 85,  218 => 84,  216 => 83,  210 => 82,  199 => 78,  192 => 73,  189 => 72,  182 => 70,  179 => 69,  177 => 68,  171 => 67,  159 => 62,  153 => 58,  150 => 57,  143 => 55,  140 => 54,  138 => 53,  132 => 52,  121 => 48,  114 => 44,  107 => 40,  100 => 36,  88 => 28,  67 => 13,  60 => 8,  56 => 7,  49 => 6,  47 => 5,  44 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
