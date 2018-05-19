<?php

/* ::base.html.twig */
class __TwigTemplate_1cd7126c777e1bc88996a4c0d567ea9a6ea9e6564ac28efb1131e52c6b44c157 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
      <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - SESM</title>
       ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "       ";
        // line 8
        echo "       <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.8.1.min.js"), "html", null, true);
        echo "\"></script>
       <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.js"), "html", null, true);
        echo "\"></script>
       <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ventanas-modales.js"), "html", null, true);
        echo "\"></script>
       
    </head>

    <body> 
      
     ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "
      ";
        // line 18
        $this->displayBlock('footer', $context, $blocks);
        // line 19
        echo "
      ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "  </body>  
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "<h1>Principal</h1>";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    // line 18
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 20,  90 => 18,  84 => 16,  79 => 6,  73 => 5,  68 => 21,  66 => 20,  63 => 19,  61 => 18,  58 => 17,  56 => 16,  47 => 10,  43 => 9,  38 => 8,  36 => 7,  34 => 6,  30 => 5,  24 => 1,);
    }
}
