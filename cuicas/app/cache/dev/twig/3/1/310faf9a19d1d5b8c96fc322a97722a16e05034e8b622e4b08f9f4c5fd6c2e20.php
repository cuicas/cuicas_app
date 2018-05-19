<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_310faf9a19d1d5b8c96fc322a97722a16e05034e8b622e4b08f9f4c5fd6c2e20 extends Twig_Template
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
        if (twig_template_get_attributes($this, (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array())) {
            // line 2
            echo "    at ";
            echo ((twig_template_get_attributes($this, (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class", array()) . twig_template_get_attributes($this, (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type", array())) . twig_template_get_attributes($this, (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array()));
            echo "(";
            echo $this->env->getExtension('code')->formatArgsAsText(twig_template_get_attributes($this, (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args", array()));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if ((twig_template_get_attributes($this, (isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && twig_template_get_attributes($this, (isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo twig_template_get_attributes($this, (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file", array());
            echo " line ";
            echo twig_template_get_attributes($this, (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line", array());
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  33 => 6,  29 => 4,  21 => 2,  19 => 1,);
    }
}
