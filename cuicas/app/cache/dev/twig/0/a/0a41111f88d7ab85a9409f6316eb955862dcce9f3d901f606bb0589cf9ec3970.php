<?php

/* EncuestasBundle:Default:index.html.twig */
class __TwigTemplate_0a41111f88d7ab85a9409f6316eb955862dcce9f3d901f606bb0589cf9ec3970 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("::frontend.html.twig", "EncuestasBundle:Default:index.html.twig", 6);
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
        echo "Principal";
    }

    // line 9
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 11
        echo "    <div id=\"posicionslider\" class=\"wrapper\">
\t<ul id=\"sb-slider\" class=\"sb-slider\">
\t\t\t\t\t<li>
                                            <a <!--href=\"http://www.flickr.com/photos/strupler/2969141180\" target=\"_blank\"--><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/1.jpg"), "html", null, true);
        echo "\" alt=\"image1\"/></a>
\t\t\t\t\t\t<div class=\"sb-description\">
\t\t\t\t\t\t\t<h3>Chávez Vive, la Patria sigue..!!!</h3>
                                                        <h4>“Debemos continuar siendo soldados de Chávez, consecuentes y disciplinados para empujar el desarrollo del socialismo y de la verdadera justicia social, contra el imperialismo(…), somos leales al Presidente Obrero Nicolás Maduro y al Comandante Chávez” Alexis Ramírez</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/2.jpg"), "html", null, true);
        echo "\" alt=\"image2\"/></a>
\t\t\t\t\t\t<div class=\"sb-description\">
                                                    <h3>Monitoreo y seguimiento en tiempo real.</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/3.jpg"), "html", null, true);
        echo "\" alt=\"image1\"/></a>
\t\t\t\t\t\t<div class=\"sb-description\">
                                                    <h3>Usando la tecnologia para estar en contacto con la sabiduria del pueblo.</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/4.jpg"), "html", null, true);
        echo "\" alt=\"image1\"/></a>
\t\t\t\t\t\t<div class=\"sb-description\">
                                                    <h4>Gobierno Municipal y Regional de la mano, un solo gobierno.</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/5.jpg"), "html", null, true);
        echo "\" alt=\"image1\"/></a>
\t\t\t\t\t\t<div class=\"sb-description\">
                                                    <h3>Todos los hijos de Chávez, rodilla en tierra con la revolución</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a><img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/7.jpg"), "html", null, true);
        echo "\" alt=\"image1\"/></a>
\t\t\t\t\t\t<div class=\"sb-description\">
\t\t\t\t\t\t\t<h3>Gobierno de Eficiencia en la Calle</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>

\t\t\t\t<div id=\"shadow\" class=\"shadow\"></div>

\t\t\t\t<div id=\"nav-arrows\" class=\"nav-arrows\">
\t\t\t\t\t<a href=\"#\">Next</a>
\t\t\t\t\t<a href=\"#\">Previous</a>
\t\t\t\t</div>
                                
                                <div id=\"nav-options\" class=\"nav-options\">
\t\t\t\t\t<span id=\"navPlay\">Play</span>
\t\t\t\t\t<span id=\"navPause\">Pause</span>
\t\t\t\t</div>

\t\t\t</div><!-- /wrapper -->
\t\t\t<!--<p class=\"info\"><strong>Informacion</strong> Informacion adicional</p>-->

\t\t<script type=\"text/javascript\">
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
                        
                        
\t\t</script>
     
   ";
        // line 140
        echo "                
                <div><h6 id=\"tituloslider2\">Enlaces de Interes<big></h6>              
 <div id=\"posicionslider2\">
    <ul  class = \" bxslider ex1\"> \t
        <li><a href=\"http://www.teleinformatica.gob.ve/\" target=\"_blank\"><img id=\"img\"  src = \"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/171.jpg"), "html", null, true);
        echo "\"/></a></li>
\t<li><a href=\"http://www.avn.info.ve/\" target=\"_blank\"><img id=\"img\" src = \"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/avn.jpg"), "html", null, true);
        echo "\"/></a></li> 
\t<li><a href=\"http://www.bomberosmerida.gov.ve/\" target=\"_blank\"><img id=\"img\" src = \"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/bomberos.jpg"), "html", null, true);
        echo "\"/></a></li> 
\t<li><a href=\"http://www.fomdes.gob.ve/\" target=\"_blank\"><img id=\"img\" src = \"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/fomdes.jpg"), "html", null, true);
        echo "\"/></a></li> 
\t<li><a href=\"http://www.fundacite-merida.gob.ve/\" target=\"_blank\"><img id=\"img\" src = \"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/fundacite.jpg"), "html", null, true);
        echo "\"/></a></li> 
\t<li><a href=\"http://www.gobiernoenlinea.ve/\" target=\"_blank\" ><img id=\"img\" src = \"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/gobierno_linea.jpg"), "html", null, true);
        echo "\"/></a></li> 
\t<li><a href=\"http://www.pcmerida.gob.ve/\" target=\"_blank\"><img id=\"img\"  src = \"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pcmerida.jpg"), "html", null, true);
        echo "\"/></a></li> 
\t<li><a href=\"http://www.polimer.gob.ve/\" target=\"_blank\"><img id=\"img\"  src = \"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/policia.jpg"), "html", null, true);
        echo "\"/></a></li> 
\t<li><a href=\"http://www.rnv.gov.ve/\" target=\"_blank\" ><img id=\"img\" src = \"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/rnv.jpg"), "html", null, true);
        echo "\"/></a></li> 
\t<li><a href=\"http://www.minci.gob.ve/\" target=\"_blank\"><img id=\"img\"  src = \"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/sibci.jpg"), "html", null, true);
        echo "\"/></a></li> 
\t<li><a href=\"http://www.telesurtv.net/\" target=\"_blank\"><img id=\"img\" src = \"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/telesur.jpg"), "html", null, true);
        echo "\"/></a></li> 
\t<li><a href=\"http://www.yvkemerida.com.ve/\" target=\"_blank\"><img id=\"img\"  src = \"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/yvke.jpg"), "html", null, true);
        echo "\"/></a></li>
        <li><a href=\"http://www.psuv.org.ve/\" target=\"_blank\"><img id=\"img\"  src = \"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/psuv.jpg"), "html", null, true);
        echo "\"/></a></li>
        <li><a href=\"http://www.merida.gob.ve/\" target=\"_blank\"><img id=\"img\"  src = \"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/gobernacion.jpg"), "html", null, true);
        echo "\"/></a></li>
        <li><a href=\"http://www.pdvsa.com/\" target=\"_blank\"><img id=\"img\"  src = \"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pdvsa.jpg"), "html", null, true);
        echo "\"/></a></li>
</ul>
</div>
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
</div>
";
    }

    public function getTemplateName()
    {
        return "EncuestasBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 158,  244 => 157,  240 => 156,  236 => 155,  232 => 154,  228 => 153,  224 => 152,  220 => 151,  216 => 150,  212 => 149,  208 => 148,  204 => 147,  200 => 146,  196 => 145,  192 => 144,  186 => 140,  89 => 45,  80 => 39,  71 => 33,  62 => 27,  53 => 21,  43 => 14,  38 => 11,  35 => 9,  29 => 8,  11 => 6,);
    }
}
