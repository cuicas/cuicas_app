<?php

/* SistemaEncuestaPrincipalBundle:Default:index.html.twig */
class __TwigTemplate_3165a547c8ae668b99232cfa01c011ecbf6ec6dc743513ec4a62e07d658e1c38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("::frontend.html.twig", "SistemaEncuestaPrincipalBundle:Default:index.html.twig", 6);
        $this->blocks = array(
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

    // line 8
    public function block_titulo($context, array $blocks = array())
    {
    }

    // line 9
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 10
        echo "
\t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 12
            echo "\t\t<script language=Javascript>
\t\t\t\$(document).ready(function(){
\t\t\t\t\$(this).tab('show');
\t\t\t\tBootstrapDialog.show({
\t\t\t\t\ttitle: 'Mensaje',
\t\t\t\t\tmessage: ('";
            // line 17
            echo twig_escape_filter($this->env, $context["mensaje"], "html", null, true);
            echo "'),
\t\t\t\t\tbuttons: [{
\t\t\t\t\t\tid: 'btn-ok',   
\t\t\t\t\t\t//icon: 'glyphicon glyphicon-check',       
\t\t\t\t\t\tlabel: 'Aceptar',
\t\t\t\t\t\tcssClass: 'btn btn-default',
\t\t\t\t\t\tautospin: false,
\t\t\t\t\t\taction: function(dialogRef){    
\t\t\t\t\t\t\tdialogRef.close();
\t\t\t\t\t\t}
\t\t\t\t\t}]
\t\t\t\t})
\t\t\t});
\t\t</script>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
<div class=\"container-fluid\" id=\"posicionslider\">
\t";
        // line 35
        echo "\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"wrapper hidden-xs\">
\t\t\t\t\t<ul id=\"sb-slider\" class=\"sb-slider\">
\t\t\t\t\t<li>
                                            <a <!--href=\"http://www.flickr.com/photos/strupler/2969141180\" target=\"_blank\"--><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/1.png"), "html", null, true);
        echo "\" alt=\"image1\"/></a>
\t\t\t\t\t\t";
        // line 45
        echo "\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/2.png"), "html", null, true);
        echo "\" alt=\"image2\"/></a>
\t\t\t\t\t\t";
        // line 51
        echo "\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a><img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/3.png"), "html", null, true);
        echo "\" alt=\"image1\"/></a>
\t\t\t\t\t\t";
        // line 57
        echo "\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a><img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/4.png"), "html", null, true);
        echo "\" alt=\"image1\"/></a>
\t\t\t\t\t\t";
        // line 63
        echo "\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a><img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/5.png"), "html", null, true);
        echo "\" alt=\"image1\"/></a>
\t\t\t\t\t\t";
        // line 69
        echo "\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a><img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/6.png"), "html", null, true);
        echo "\" alt=\"image1\"/></a>
\t\t\t\t\t\t";
        // line 75
        echo "\t\t\t\t\t</li>
\t\t\t\t</ul>

\t\t\t\t";
        // line 79
        echo "
\t\t\t\t<div id=\"nav-arrows\" class=\"nav-arrows\">
\t\t\t\t\t<a >Next</a>
\t\t\t\t\t<a >Previous</a>
\t\t\t\t</div>
                                
                ";
        // line 89
        echo "
\t\t\t</div><!-- /wrapper -->
\t\t</div>
\t</div>


\t<div class=\"row\">
\t\t<div class=\"col-md-12 hidden-xs\">
\t\t\t";
        // line 97
        echo "            
\t\t\t    <ul  class = \"bxslider ex1\"> \t
\t\t\t        <li><a href=\"http://www.teleinformatica.gob.ve/\" target=\"_blank\"><img id=\"img\"  src = \"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/171.jpg"), "html", null, true);
        echo "\"/></a></li>
\t\t\t\t\t<li><a href=\"http://www.avn.info.ve/\" target=\"_blank\"><img id=\"img\" src = \"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/avn.jpg"), "html", null, true);
        echo "\"/></a></li> 
\t\t\t\t\t<li><a href=\"http://www.bomberosmerida.gov.ve/\" target=\"_blank\"><img id=\"img\" src = \"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/bomberos.jpg"), "html", null, true);
        echo "\"/></a></li> 
\t\t\t\t\t<li><a href=\"http://www.fomdes.gob.ve/\" target=\"_blank\"><img id=\"img\" src = \"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/fomdes.jpg"), "html", null, true);
        echo "\"/></a></li> 
\t\t\t\t\t<li><a href=\"http://www.fundacite-merida.gob.ve/\" target=\"_blank\"><img id=\"img\" src = \"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/fundacite.jpg"), "html", null, true);
        echo "\"/></a></li> 
\t\t\t\t\t<li><a href=\"http://www.gobiernoenlinea.ve/\" target=\"_blank\" ><img id=\"img\" src = \"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/gobierno_linea.jpg"), "html", null, true);
        echo "\"/></a></li> 
\t\t\t\t\t<li><a href=\"http://www.pcmerida.gob.ve/\" target=\"_blank\"><img id=\"img\"  src = \"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pcmerida.jpg"), "html", null, true);
        echo "\"/></a></li> 
\t\t\t\t\t<li><a href=\"http://www.polimer.gob.ve/\" target=\"_blank\"><img id=\"img\"  src = \"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/policia.jpg"), "html", null, true);
        echo "\"/></a></li> 
\t\t\t\t\t<li><a href=\"http://www.rnv.gov.ve/\" target=\"_blank\" ><img id=\"img\" src = \"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/rnv.jpg"), "html", null, true);
        echo "\"/></a></li> 
\t\t\t\t\t<li><a href=\"http://www.minci.gob.ve/\" target=\"_blank\"><img id=\"img\"  src = \"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/sibci.jpg"), "html", null, true);
        echo "\"/></a></li> 
\t\t\t\t\t<li><a href=\"http://www.telesurtv.net/\" target=\"_blank\"><img id=\"img\" src = \"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/telesur.jpg"), "html", null, true);
        echo "\"/></a></li> 
\t\t\t\t\t<li><a href=\"http://www.yvkemerida.com.ve/\" target=\"_blank\"><img id=\"img\"  src = \"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/yvke.jpg"), "html", null, true);
        echo "\"/></a></li>
\t\t\t        <li><a href=\"http://www.psuv.org.ve/\" target=\"_blank\"><img id=\"img\"  src = \"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/psuv.jpg"), "html", null, true);
        echo "\"/></a></li>
\t\t\t        <li><a href=\"http://www.merida.gob.ve/\" target=\"_blank\"><img id=\"img\"  src = \"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/gobernacion.jpg"), "html", null, true);
        echo "\"/></a></li>
\t\t\t        <li><a href=\"http://www.pdvsa.com/\" target=\"_blank\"><img id=\"img\"  src = \"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pdvsa.jpg"), "html", null, true);
        echo "\"/></a></li>
\t\t\t\t</ul>
\t\t</div>
\t\t</div>
</div>

<script type=\"text/javascript\">
\t\$(function() {
\t\t\t\t
\t\t\t\tvar Page = (function() {

\t\t\t\t\tvar \$navArrows = \$( '#nav-arrows' ).hide(),
                                                \$navOptions = \$( '#nav-options' ).hide(),
\t\t\t\t\t\t\$shadow = \$( '#shadow' ).hide(),
\t\t\t\t\t\tslicebox = \$( '#sb-slider' ).slicebox( {
\t\t\t\t\t\t\tonReady : function() {

\t\t\t\t\t\t\t\t\$navArrows.show();
                                                                \$navOptions.show();
\t\t\t\t\t\t\t\t\$shadow.show();

\t\t\t\t\t\t\t},
                                                        intervernal: 9000,
\t\t\t\t\t\t\torientation : 'r',
\t\t\t\t\t\t\tcuboidsRandom : true,
\t\t\t\t\t\t\tdisperseFactor : 30
\t\t\t\t\t\t} ),
\t\t\t\t\t\t
\t\t\t\t\t\tinit = function() {

\t\t\t\t\t\t\tinitEvents();
                                                        slicebox.play();
\t\t\t\t\t\t\t
\t\t\t\t\t\t},
\t\t\t\t\t\tinitEvents = function() {

\t\t\t\t\t\t\t// add navigation events
\t\t\t\t\t\t\t\$navArrows.children( ':first' ).on( 'click', function() {

\t\t\t\t\t\t\t\tslicebox.next();
\t\t\t\t\t\t\t\treturn false;

\t\t\t\t\t\t\t} );

\t\t\t\t\t\t\t\$navArrows.children( ':last' ).on( 'click', function() {
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tslicebox.previous();
\t\t\t\t\t\t\t\treturn false;

\t\t\t\t\t\t\t} );
                                                        
                                                        \$( '#navPlay' ).on( 'click', function() {
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tslicebox.play();
\t\t\t\t\t\t\t\treturn false;

\t\t\t\t\t\t\t} );

\t\t\t\t\t\t\t\$( '#navPause' ).on( 'click', function() {
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tslicebox.pause();
\t\t\t\t\t\t\t\treturn false;

\t\t\t\t\t\t\t} );

\t\t\t\t\t\t};

\t\t\t\t\t\treturn { init : init };

\t\t\t\t})();

\t\t\t\tPage.init();

\t\t\t});
</script>

<script type=\"text/javascript\">
    \$(document).ready(function(){
            \$ ( '.bxslider' ). bxSlider ({
            speed: 50000 ,
            pager: false,
            minSlides: 15 ,
            maxSlides: 15,
            slideWidth: 50 ,
            slideMargin: 1 ,
            ticker: true,
            autoHover: true
            
                    });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "SistemaEncuestaPrincipalBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 113,  206 => 112,  202 => 111,  198 => 110,  194 => 109,  190 => 108,  186 => 107,  182 => 106,  178 => 105,  174 => 104,  170 => 103,  166 => 102,  162 => 101,  158 => 100,  154 => 99,  150 => 97,  140 => 89,  132 => 79,  127 => 75,  123 => 71,  119 => 69,  115 => 65,  111 => 63,  107 => 59,  103 => 57,  99 => 53,  95 => 51,  91 => 47,  87 => 45,  83 => 40,  76 => 35,  72 => 32,  51 => 17,  44 => 12,  40 => 11,  37 => 10,  34 => 9,  29 => 8,  11 => 6,);
    }
}
