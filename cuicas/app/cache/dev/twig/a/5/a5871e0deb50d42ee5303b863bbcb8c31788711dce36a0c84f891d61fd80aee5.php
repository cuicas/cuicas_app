<?php

/* EncuestasBundle:Encuestas:detalleVentanaReporteFase2.html.twig */
class __TwigTemplate_a5871e0deb50d42ee5303b863bbcb8c31788711dce36a0c84f891d61fd80aee5 extends Twig_Template
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
        echo "id CV, Nombre CV, Mesas Instaladas, Cant. Mesas, Cant. Testigo, Chavistas, Opositores, Mesas Cerradas, Cant. Cerradas, Tipo Incidencia, Incidencia
";
        // line 2
        if (array_key_exists("encuesta", $context)) {
            // line 3
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["municipios"]) ? $context["municipios"] : $this->getContext($context, "municipios"))));
            foreach ($context['_seq'] as $context["_key"] => $context["municipio"]) {
                // line 4
                $context["encontrado"] = "";
                // line 5
                $context["totalCh"] = 0;
                $context["totalOp"] = 0;
                // line 6
                $context["totalMesas"] = 0;
                // line 7
                $context["totalTestigos"] = 0;
                // line 8
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos"))));
                foreach ($context['_seq'] as $context["_key"] => $context["contactadosSufragio"]) {
                    if ((twig_template_get_attributes($this, $context["contactadosSufragio"], "municipio", array()) == twig_template_get_attributes($this, $context["municipio"], "id", array()))) {
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["contactadosSufragio"], "id_cv", array()), "html", null, true);
                        echo ",";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["contactadosSufragio"], "cv", array()), "html", null, true);
                        echo ",";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["contactadosSufragio"], "apertura", array()), "html", null, true);
                        echo ",";
                        if ((twig_template_get_attributes($this, $context["contactadosSufragio"], "apertura", array()) != "Ninguna")) {
                            $context["mesas"] = twig_split_filter($this->env, twig_template_get_attributes($this, $context["contactadosSufragio"], "apertura", array()), "-");
                            $context["totalMesas"] = ((isset($context["totalMesas"]) ? $context["totalMesas"] : $this->getContext($context, "totalMesas")) + twig_length_filter($this->env, (isset($context["mesas"]) ? $context["mesas"] : $this->getContext($context, "mesas"))));
                        }
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["contactadosSufragio"], "cantMesas", array()), "html", null, true);
                        echo ",";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["contactadosSufragio"], "testigos", array()), "html", null, true);
                        echo ",";
                        if (((twig_template_get_attributes($this, $context["contactadosSufragio"], "testigos", array()) != "Ninguna") && (twig_template_get_attributes($this, $context["contactadosSufragio"], "testigos", array()) != ""))) {
                            $context["testigos"] = twig_template_get_attributes($this, $context["contactadosSufragio"], "testigos", array());
                            $context["totalTestigos"] = ((isset($context["totalTestigos"]) ? $context["totalTestigos"] : $this->getContext($context, "totalTestigos")) + (isset($context["testigos"]) ? $context["testigos"] : $this->getContext($context, "testigos")));
                        }
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["contactadosSufragio"], "oficialistas", array()), "html", null, true);
                        echo ",";
                        $context["totalCh"] = ((isset($context["totalCh"]) ? $context["totalCh"] : $this->getContext($context, "totalCh")) + twig_template_get_attributes($this, $context["contactadosSufragio"], "oficialistas", array()));
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["contactadosSufragio"], "opositores", array()), "html", null, true);
                        echo ",";
                        $context["totalOp"] = ((isset($context["totalOp"]) ? $context["totalOp"] : $this->getContext($context, "totalOp")) + twig_template_get_attributes($this, $context["contactadosSufragio"], "opositores", array()));
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["contactadosSufragio"], "cierre", array()), "html", null, true);
                        echo ",";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["contactadosSufragio"], "cantCierre", array()), "html", null, true);
                        echo ",";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["contactadosSufragio"], "tipoIncidencia", array()), "html", null, true);
                        echo ",";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["contactadosSufragio"], "incidencia", array()), "html", null, true);
                        echo "
";
                        // line 9
                        $context["encontrado"] = "si";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contactadosSufragio'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                if (((isset($context["encontrado"]) ? $context["encontrado"] : $this->getContext($context, "encontrado")) == "")) {
                    // line 13
                    echo ",No existen datos registrados para el municipio ";
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["municipio"], "nombreMunicipio", array()), "html", null, true);
                    echo "
";
                }
                // line 15
                if (((isset($context["encontrado"]) ? $context["encontrado"] : $this->getContext($context, "encontrado")) == "si")) {
                    // line 16
                    echo ",Total de mesas aperturadas y cantidad de testigos,";
                    echo twig_escape_filter($this->env, (isset($context["totalMesas"]) ? $context["totalMesas"] : $this->getContext($context, "totalMesas")), "html", null, true);
                    echo ",,";
                    echo twig_escape_filter($this->env, (isset($context["totalTestigos"]) ? $context["totalTestigos"] : $this->getContext($context, "totalTestigos")), "html", null, true);
                    echo "
,Total de movilizacion,,,,";
                    // line 17
                    echo twig_escape_filter($this->env, (isset($context["totalCh"]) ? $context["totalCh"] : $this->getContext($context, "totalCh")), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, (isset($context["totalOp"]) ? $context["totalOp"] : $this->getContext($context, "totalOp")), "html", null, true);
                    echo "
";
                }
                // line 19
                echo ",
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['municipio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "EncuestasBundle:Encuestas:detalleVentanaReporteFase2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 19,  99 => 17,  92 => 16,  90 => 15,  84 => 13,  82 => 12,  75 => 9,  37 => 8,  35 => 7,  33 => 6,  30 => 5,  28 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
