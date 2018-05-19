<?php

/* EncuestasBundle:Encuestas:mostrarDatosFase3.html.twig */
class __TwigTemplate_58bdfb2d97c32fd0be5520bbfe7a63f15459cb23eb780b5707a11695b766f667 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "EncuestasBundle:Encuestas:mostrarDatosFase3.html.twig", 1);
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

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 6
        echo "
  <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_datosEncuestaSufragio", array("id_encuesta" => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "id", array()))), "html", null, true);
        echo "\" class=\"formgrande\"  method=\"post\" onsubmit=\"return validar()\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'enctype');
        echo " >
    ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 9
            echo "      <script language=Javascript>
      \$(document).ready(function(){
        \$(this).tab('show');
        BootstrapDialog.show({
          title: 'Mensaje',
          message: ('";
            // line 14
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
        // line 29
        echo "      
    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'errors');
        echo "
    <div class=\"col-xs-13 col-md-4 col-md-offset-2\">
      <div class=\"row\">
        <div class=\"col-xs-13\">
          <table class=\"table1 table-striped table-bordered\" id=\"mytable\">
            <thead>
              <tr>
                <td><strong>Municipio</strong></td>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "municipio", array()), "nombre", array()), "html", null, true);
        echo "</td>
              </tr> 
              <tr>
                <td><strong>Parroquia</strong></td>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "parroquia", array()), "nombre", array()), "html", null, true);
        echo "</td>
              </tr> 
              <tr>
                <td><strong>Centro</strong></td>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "nombreCentro", array()), "html", null, true);
        echo "</td>
              </tr>
              <tr>        
                <td ><strong>Coordinador de UBCH</strong></td> 
                <td ><div class=\"editarNombre\" id=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "coordinador", array()), "id_ubch", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "coordinador", array()), "apellidos_nombres", array()), "html", null, true);
        echo " (CI.";
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "coordinador", array()), "cedula", array()), "html", null, true);
        echo ")</div></td>
              </tr>
              <tr>
                <td ><strong>Tel&eacute;fonos</strong></td>
                <td ><div class=\"editarTelf\" id=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "coordinador", array()), "id_ubch", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, trim(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "coordinador", array()), "telefono_1", array())), "html", null, true);
        echo " 
                  ";
        // line 55
        if (twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : null), "coordinador", array(), "any", false, true), "telefono_2", array(), "any", true, true)) {
            // line 56
            echo "                    ";
            if ((twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "coordinador", array()), "telefono_2", array()) == "''")) {
                // line 57
                echo "                    ";
            } else {
                echo twig_escape_filter($this->env, trim(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "coordinador", array()), "telefono_2", array())), "html", null, true);
                echo "
                    ";
            }
            // line 59
            echo "                  ";
        }
        // line 60
        echo "                </div></td>
              </tr>
              <tr>
                <td><strong>Responsable Log&iacute;stica</strong></td>
              <td><div class=\"editarNombre\" id=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "logistica", array()), "id_ubch", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "logistica", array()), "apellidos_nombres", array()), "html", null, true);
        echo " (CI.";
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "logistica", array()), "cedula", array()), "html", null, true);
        echo ")</div></td>
              <tr>
                <td ><strong>Tel&eacute;fonos</strong></td>
                <td ><div class=\"editarTelf\" id=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "logistica", array()), "id_ubch", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, trim(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "logistica", array()), "telefono_1", array())), "html", null, true);
        echo " 
                  ";
        // line 68
        if (twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : null), "logistica", array(), "any", false, true), "telefono_2", array(), "any", true, true)) {
            // line 69
            echo "                    ";
            if ((twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "logistica", array()), "telefono_2", array()) == "''")) {
                // line 70
                echo "                    ";
            } else {
                echo twig_escape_filter($this->env, trim(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "logistica", array()), "telefono_2", array())), "html", null, true);
                echo "
                    ";
            }
            // line 72
            echo "                  ";
        }
        // line 73
        echo "                </div></td>
              </tr>   
              <tr>
                <td><strong>Responsable Movilizaci&oacute;n</strong></td>
                <td><div class=\"editarNombre\" id=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "movilizacion", array()), "id_ubch", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "movilizacion", array()), "apellidos_nombres", array()), "html", null, true);
        echo " (CI.";
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "movilizacion", array()), "cedula", array()), "html", null, true);
        echo ")</div></td>
              </tr> 
              <tr>
                <td ><strong>Tel&eacute;fonos</strong></td>
                <td ><div class=\"editarTelf\" id=\"";
        // line 81
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "movilizacion", array()), "id_ubch", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, trim(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "movilizacion", array()), "telefono_1", array())), "html", null, true);
        echo " 
                  ";
        // line 82
        if (twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : null), "movilizacion", array(), "any", false, true), "telefono_2", array(), "any", true, true)) {
            // line 83
            echo "                    ";
            if ((twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "movilizacion", array()), "telefono_2", array()) == "''")) {
                // line 84
                echo "                    ";
            } else {
                echo twig_escape_filter($this->env, trim(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "movilizacion", array()), "telefono_2", array())), "html", null, true);
                echo "
                    ";
            }
            // line 86
            echo "                  ";
        }
        // line 87
        echo "                </div></td>
              </tr>
            <tr>
              <td><strong>Responsable Testigos</strong></td>
              <td><div class=\"editarNombre\" id=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "testigo", array()), "id_ubch", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "testigo", array()), "apellidos_nombres", array()), "html", null, true);
        echo " (CI.";
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "testigo", array()), "cedula", array()), "html", null, true);
        echo ")</div></td>
            </tr>  
            <tr>
              <td><strong>Tel&eacute;fonos</strong></td>
              <td><div class=\"editarTelf\" id=\"";
        // line 95
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "testigo", array()), "id_ubch", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, trim(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "testigo", array()), "telefono_1", array())), "html", null, true);
        echo " 
                ";
        // line 96
        if (twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : null), "testigo", array(), "any", false, true), "telefono_2", array(), "any", true, true)) {
            // line 97
            echo "                  ";
            if ((twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "testigo", array()), "telefono_2", array()) == "''")) {
                // line 98
                echo "                  ";
            } else {
                echo twig_escape_filter($this->env, trim(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "testigo", array()), "telefono_2", array())), "html", null, true);
                echo "
                  ";
            }
            // line 100
            echo "                ";
        }
        // line 101
        echo "              </div></td>
            </tr>
            </thead> 
          </table>
        </div>
      </div>
    </div>
    <div class=\"col-xs-12 col-md-3\">
      <div class=\"row\">
        <div class=\"col-xs-12\">
          <div style=\"width:395px; \">
            <table class=\"table1\" id=\"mytable\" border=\"0\">
              <thead>
                <tr>
                  ";
        // line 115
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["candidatos"]) ? $context["candidatos"] : $this->getContext($context, "candidatos")));
        foreach ($context['_seq'] as $context["_key"] => $context["candidato"]) {
            // line 116
            echo "                    ";
            if (twig_template_get_attributes($this, $context["candidato"], "apellidoNombre", array(), "any", true, true)) {
                // line 117
                echo "                      <td width=130><strong>";
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["candidato"], "apellidoNombre", array()), "html", null, true);
                echo "</strong><br><img class=\"img-rounded\" alt=\"Imagen\" title=\"";
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["candidato"], "apellidoNombre", array()), "html", null, true);
                echo "\" id=\"img\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("imagenes/fotosCandidatos/" . twig_template_get_attributes($this, $context["candidato"], "rutaFoto", array())) . "")), "html", null, true);
                echo "\" height=\"50\" width=\"60\" >
                      </td>
                    ";
            }
            // line 120
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "                </tr>
              </thead>
            </table>
          </div>
          <div style=\"width:399px; height:300px; overflow: auto; position:relative; \">
            <table class=\"table1\" id=\"mytable1\" border=\"0\">
              
              ";
        // line 128
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
            // line 129
            echo "                <tr>
                  ";
            // line 130
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["candidatos"]) ? $context["candidatos"] : $this->getContext($context, "candidatos")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["candidato"]) {
                // line 131
                echo "                    ";
                if (twig_template_get_attributes($this, $context["candidato"], "apellidoNombre", array(), "any", true, true)) {
                    // line 132
                    echo "                      ";
                    $context["valueVoto"] = "";
                    // line 133
                    echo "                      ";
                    $context["valueVotoLista"] = "";
                    // line 134
                    echo "                      ";
                    $context["mesaActual"] = twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, $context["loop"], "parent", array()), "loop", array()), "index", array());
                    // line 135
                    echo "                      ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["votosMesa"]) ? $context["votosMesa"] : $this->getContext($context, "votosMesa")));
                    foreach ($context['_seq'] as $context["_key"] => $context["votoMesa"]) {
                        // line 136
                        echo "                        ";
                        if ((((twig_template_get_attributes($this, twig_template_get_attributes($this, $context["votoMesa"], "candidato", array()), "id", array()) == twig_template_get_attributes($this, $context["candidato"], "id", array())) && (twig_template_get_attributes($this, $context["votoMesa"], "nroMesa", array()) == (isset($context["mesaActual"]) ? $context["mesaActual"] : $this->getContext($context, "mesaActual")))) && (twig_template_get_attributes($this, twig_template_get_attributes($this,                         // line 137
$context["votoMesa"], "centroVotacion", array()), "id", array()) == twig_template_get_attributes($this, (isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "id", array())))) {
                            // line 138
                            echo "                          ";
                            $context["valueVoto"] = twig_template_get_attributes($this, $context["votoMesa"], "votos", array());
                            // line 139
                            echo "                          ";
                            $context["valueVotoLista"] = twig_template_get_attributes($this, $context["votoMesa"], "votosLista", array());
                            // line 140
                            echo "                        ";
                        }
                        // line 141
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['votoMesa'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 142
                    echo "                      <td width=130>
                        <strong>Mesa ";
                    // line 143
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "</strong>
                        <input style=\"width:78px;\"  class=\"form-control\" type=\"number\" id=\"candidato_";
                    // line 144
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" name=\"form[";
                    echo twig_escape_filter($this->env, ((twig_template_get_attributes($this, $context["candidato"], "id", array()) . "_") . twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, $context["loop"], "parent", array()), "loop", array()), "index", array())), "html", null, true);
                    echo "]\" min=\"0\" maxlength=\"10\" onkeypress=\"return isNumber(event);\" placeholder=\"Nominal\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["valueVoto"]) ? $context["valueVoto"] : $this->getContext($context, "valueVoto")), "html", null, true);
                    echo "\" ";
                    if ( !twig_test_empty((isset($context["valueVoto"]) ? $context["valueVoto"] : $this->getContext($context, "valueVoto")))) {
                        echo "readonly='true'";
                    }
                    echo "><input style=\"width:78px;\"  class=\"form-control\" type=\"number\" id=\"candidato_";
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" name=\"form[lista_";
                    echo twig_escape_filter($this->env, ((twig_template_get_attributes($this, $context["candidato"], "id", array()) . "_") . twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, $context["loop"], "parent", array()), "loop", array()), "index", array())), "html", null, true);
                    echo "]\" min=\"0\" maxlength=\"10\" onkeypress=\"return isNumber(event);\" placeholder=\"lista\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["valueVotoLista"]) ? $context["valueVotoLista"] : $this->getContext($context, "valueVotoLista")), "html", null, true);
                    echo "\" ";
                    if ( !twig_test_empty((isset($context["valueVotoLista"]) ? $context["valueVotoLista"] : $this->getContext($context, "valueVotoLista")))) {
                        echo "readonly='true'";
                    }
                    echo ">
                      </td>";
                }
                // line 146
                echo "                  ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidato'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "                </tr>
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
        // line 149
        echo "              ";
        if (twig_test_empty((isset($context["candidatos"]) ? $context["candidatos"] : $this->getContext($context, "candidatos")))) {
            // line 150
            echo "                <tr>
                  <td colspan=\"15\"><strong>Sin candidatos</strong></td>
                </tr>
              ";
        }
        // line 154
        echo "              <tr class=\"incidencias\">
                  <td colspan=\"9\"><br /><strong for=\"form_tipo_incidencia\" id='label_form_tipo_incidencia'>Tipo de incidencia</strong></td>
              <tr>
                <td colspan=\"2\"><select id=\"form_tipo_incidencia\" name=\"form[tipo_incidencia]\" class=\"form-control input-sm validate[required]\">
                    <option value=\"ninguna\" ";
        // line 158
        if ( !(null === (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")))) {
            if ((trim(twig_template_get_attributes($this, (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")), "tipoIncidencia", array())) == "ninguna")) {
                echo "selected=\"selected\"";
            }
        }
        echo ">Ninguna</option>
                    <option value=\"logistica\" ";
        // line 159
        if ( !(null === (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")))) {
            if ((trim(twig_template_get_attributes($this, (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")), "tipoIncidencia", array())) == "logistica")) {
                echo "selected=\"selected\"";
            }
        }
        echo ">Log&iacute;stica</option>
                    <option value=\"seguridad\" ";
        // line 160
        if ( !(null === (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")))) {
            if ((trim(twig_template_get_attributes($this, (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")), "tipoIncidencia", array())) == "seguridad")) {
                echo "selected=\"selected\"";
            }
        }
        echo ">Seguridad/Orden P&uacute;blico</option>
                    <option value=\"energia\" ";
        // line 161
        if ( !(null === (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")))) {
            if ((trim(twig_template_get_attributes($this, (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")), "tipoIncidencia", array())) == "energia")) {
                echo "selected=\"selected\"";
            }
        }
        echo ">Energia/Servicios</option>
                    <option value=\"meteorologicos\" ";
        // line 162
        if ( !(null === (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")))) {
            if ((trim(twig_template_get_attributes($this, (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")), "tipoIncidencia", array())) == "meteorologicos")) {
                echo "selected=\"selected\"";
            }
        }
        echo ">Meteorol&oacute;gicos</option>
                    <option value=\"cne\" ";
        // line 163
        if ( !(null === (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")))) {
            if ((trim(twig_template_get_attributes($this, (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")), "tipoIncidencia", array())) == "cne")) {
                echo "selected=\"selected\"";
            }
        }
        echo ">CNE</option>
                    <option value=\"otras\" ";
        // line 164
        if ( !(null === (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")))) {
            if ((trim(twig_template_get_attributes($this, (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")), "tipoIncidencia", array())) == "otras")) {
                echo "selected=\"selected\"";
            }
        }
        echo ">Otras</option>
                    <option value=\"resuelta\" ";
        // line 165
        if ( !(null === (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")))) {
            if ((trim(twig_template_get_attributes($this, (isset($context["incidencias"]) ? $context["incidencias"] : $this->getContext($context, "incidencias")), "tipoIncidencia", array())) == "resuelta")) {
                echo "selected=\"selected\"";
            }
        }
        echo ">Resuelta</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td colspan=\"15\"><strong>Incidencias</strong></td>
              </tr>
              <tr>
                <td colspan=\"15\">
                  <textarea style=\"width:380px; height:100px; resize:none;\" class=\"form-control\" name=\"form[incidencias]\" maxlength=\"255\"></textarea>
                </td>
              </tr>                            
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class=\"col-xs-12 col-md-12\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <center> <input class=\"fueraoverflow2 btn btn-default\" type=\"submit\" value=\"Guardar\" name=\"form[boton_guardar_fase3]\" /> ";
        // line 186
        if ((((isset($context["totalizacion"]) ? $context["totalizacion"] : $this->getContext($context, "totalizacion")) != "totalizacion") && ((isset($context["buscarTodo"]) ? $context["buscarTodo"] : $this->getContext($context, "buscarTodo")) == "todos"))) {
            echo "<input class=\"fueraoverflow2 btn btn-default\" type=\"submit\" id=\"otro\" value=\"Buscar Otro\" name=\"form[boton_buscar]\" /> ";
        }
        // line 187
        echo "            <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuestas_datosEncuestaSufragio", array("id_encuesta" => twig_template_get_attributes($this, (isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "id", array()))), "html", null, true);
        echo "\"><input class=\"fueraoverflow2 btn btn-default\" type=\"button\" value=\"Cancelar\" name=\"form[boton_cancelar]\" /></a>
          </center>
        </div>
      </div>
    </div>
  </form>
  <script type=\"text/javascript\">
    
    \$(document).ready(function(){ 
      
      \$( \"#mytable1 tr:even\" ).css( \"background-color\", \"#d0d2d3\" ); 

      \$('#otro').on( \"click\", function() {
        \$('*[type=\"number\"]').removeClass( \"validate[required]\" );
        \$('#form_tipo_incidencia').removeClass( \"validate[required]\" );
      });

      \$( \"#mytable tr:even\" ).css( \"background-color\", \"#d0d2d3\" ); 
      var candidatos = \"";
        // line 205
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["candidatos"]) ? $context["candidatos"] : $this->getContext($context, "candidatos"))), "html", null, true);
        echo "\";
      
      if(candidatos == 0){

        \$(this).tab('show');
        BootstrapDialog.show({
          title: 'Mensaje',
          message: ('Este centro de votación no tiene candidatos asignados'),
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
      }
      /* campo editables */
      \$('.editarNombre').editable('";
        // line 226
        echo $this->env->getExtension('routing')->getPath("encuestas_editar_datos", array("tipo" => "ubch"));
        echo "', {
         //indicator : \"Guardando...\",
         indicator : \"<img src='";
        // line 228
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
        // line 237
        echo $this->env->getExtension('routing')->getPath("encuestas_editar_datos", array("tipo" => "ubch"));
        echo "', {
         indicator : \"<img src='";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/bx_loader.gif"), "html", null, true);
        echo "'>\",
         tooltip   : 'Doble clic para editar...',
         id   : 'telefono',
         event  : \"dblclick\",
         submit  : 'OK'
      });
      /*  */


    });

    function isNumber(e) {
      k = (document.all) ? e.keyCode : e.which;
      if (k==8 || k==0) return true;
      patron = /\\d/;
      n = String.fromCharCode(k);
      return patron.test(n);
    }

  </script> 
";
    }

    public function getTemplateName()
    {
        return "EncuestasBundle:Encuestas:mostrarDatosFase3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  619 => 238,  615 => 237,  603 => 228,  598 => 226,  574 => 205,  552 => 187,  548 => 186,  520 => 165,  512 => 164,  504 => 163,  496 => 162,  488 => 161,  480 => 160,  472 => 159,  464 => 158,  458 => 154,  452 => 150,  449 => 149,  434 => 147,  420 => 146,  397 => 144,  393 => 143,  390 => 142,  384 => 141,  381 => 140,  378 => 139,  375 => 138,  373 => 137,  371 => 136,  366 => 135,  363 => 134,  360 => 133,  357 => 132,  354 => 131,  337 => 130,  334 => 129,  317 => 128,  308 => 121,  302 => 120,  291 => 117,  288 => 116,  284 => 115,  268 => 101,  265 => 100,  258 => 98,  255 => 97,  253 => 96,  247 => 95,  236 => 91,  230 => 87,  227 => 86,  220 => 84,  217 => 83,  215 => 82,  209 => 81,  198 => 77,  192 => 73,  189 => 72,  182 => 70,  179 => 69,  177 => 68,  171 => 67,  161 => 64,  155 => 60,  152 => 59,  145 => 57,  142 => 56,  140 => 55,  134 => 54,  123 => 50,  116 => 46,  109 => 42,  102 => 38,  91 => 30,  88 => 29,  67 => 14,  60 => 9,  56 => 8,  50 => 7,  47 => 6,  44 => 5,  36 => 3,  30 => 2,  11 => 1,);
    }
}
