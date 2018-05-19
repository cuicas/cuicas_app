<?php

/* EncuestasBundle:Encuestas:detalleVentanaReporteFase1.html.twig */
class __TwigTemplate_1c12022ea3875d74ba6a6b6dacb79b5db0bef0165831a89927c37c6e233e97bd extends Twig_Template
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
        echo "id CV, Nombre CV, Mesas Instaladas, Cant. Mesas, Testigo, Miembros UBCH
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
                $context["totalMiembros"] = 0;
                // line 6
                $context["totalTestigos"] = 0;
                // line 7
                $context["totalMesas"] = 0;
                // line 8
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos"))));
                foreach ($context['_seq'] as $context["_key"] => $context["contactadosSufragio"]) {
                    if ((twig_template_get_attributes($this, $context["contactadosSufragio"], "municipio", array()) == twig_template_get_attributes($this, $context["municipio"], "id", array()))) {
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["contactadosSufragio"], "id_cv", array()), "html", null, true);
                        echo ",";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["contactadosSufragio"], "cv", array()), "html", null, true);
                        echo ",";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["contactadosSufragio"], "mi", array()), "html", null, true);
                        echo ",";
                        if ((twig_template_get_attributes($this, $context["contactadosSufragio"], "mi", array()) != "Ninguna")) {
                            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["contactadosSufragio"], "cantMesas", array()), "html", null, true);
                            echo ",";
                            $context["mesas"] = twig_split_filter($this->env, twig_template_get_attributes($this, $context["contactadosSufragio"], "mi", array()), "-");
                            $context["totalMesas"] = ((isset($context["totalMesas"]) ? $context["totalMesas"] : $this->getContext($context, "totalMesas")) + twig_length_filter($this->env, (isset($context["mesas"]) ? $context["mesas"] : $this->getContext($context, "mesas"))));
                        }
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["contactadosSufragio"], "testigos", array()), "html", null, true);
                        if ((twig_template_get_attributes($this, $context["contactadosSufragio"], "testigos", array()) != "no")) {
                            $context["totalTestigos"] = ((isset($context["totalTestigos"]) ? $context["totalTestigos"] : $this->getContext($context, "totalTestigos")) + 1);
                        }
                        echo ",";
                        echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["contactadosSufragio"], "miembros", array()), "html", null, true);
                        echo "
";
                        // line 9
                        if (((twig_template_get_attributes($this, $context["contactadosSufragio"], "miembros", array()) != "Ninguna") && (twig_template_get_attributes($this, $context["contactadosSufragio"], "miembros", array()) != "no"))) {
                            // line 10
                            $context["miembros"] = twig_split_filter($this->env, twig_template_get_attributes($this, $context["contactadosSufragio"], "miembros", array()), ",");
                            // line 11
                            $context["totalMiembros"] = ((isset($context["totalMiembros"]) ? $context["totalMiembros"] : $this->getContext($context, "totalMiembros")) + twig_length_filter($this->env, (isset($context["miembros"]) ? $context["miembros"] : $this->getContext($context, "miembros"))));
                        }
                        // line 13
                        $context["encontrado"] = "si";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contactadosSufragio'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                if (((isset($context["encontrado"]) ? $context["encontrado"] : $this->getContext($context, "encontrado")) == "")) {
                    // line 17
                    echo "No existen datos registrados para el municipio ";
                    echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["municipio"], "nombreMunicipio", array()), "html", null, true);
                    echo "
";
                }
                // line 19
                if (((isset($context["encontrado"]) ? $context["encontrado"] : $this->getContext($context, "encontrado")) == "si")) {
                    // line 20
                    echo ",Total de mesas instaladas - de testigos y miembros UBCH que asistieron,";
                    echo twig_escape_filter($this->env, (isset($context["totalMesas"]) ? $context["totalMesas"] : $this->getContext($context, "totalMesas")), "html", null, true);
                    echo ",,";
                    echo twig_escape_filter($this->env, (isset($context["totalTestigos"]) ? $context["totalTestigos"] : $this->getContext($context, "totalTestigos")), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, (isset($context["totalMiembros"]) ? $context["totalMiembros"] : $this->getContext($context, "totalMiembros")), "html", null, true);
                    echo "
";
                }
                // line 22
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
        return "EncuestasBundle:Encuestas:detalleVentanaReporteFase1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 22,  85 => 20,  83 => 19,  77 => 17,  75 => 16,  68 => 13,  65 => 11,  63 => 10,  61 => 9,  36 => 8,  34 => 7,  32 => 6,  30 => 5,  28 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
