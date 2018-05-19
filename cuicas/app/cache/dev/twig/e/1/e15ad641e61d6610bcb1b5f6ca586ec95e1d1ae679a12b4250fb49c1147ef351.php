<?php

/* ::frontend.html.twig */
class __TwigTemplate_e15ad641e61d6610bcb1b5f6ca586ec95e1d1ae679a12b4250fb49c1147ef351 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "::frontend.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'titulo' => array($this, 'block_titulo'),
            'imagen_fondo' => array($this, 'block_imagen_fondo'),
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Sistema Encuesta - SESM";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/marco.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <style type=\"text/css\">

  </style>
  <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/slicebox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/demo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  ";
        // line 14
        echo " 
  ";
        // line 16
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/solapamiento.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  ";
        // line 18
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/formulario.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/ventanas-modales.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  ";
        // line 22
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
  <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/stacktable.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
  <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.bxslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/validationEngine.jquery.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/datepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/tooltip.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/easyTooltip.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-submenu.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-dialog.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

 ";
    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        // line 37
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.custom.46884.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.slicebox.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.bxslider.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.bxslider.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.validationEngine-es.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.validationEngine.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/validacion.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/easyTooltip.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-submenu.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/stacktable.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-dialog.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.jeditable.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        // line 56
        echo "

<div class=\"container-fluid\">
  <div class=\"row\">
    <header class=\"col-xs-12\">
      <div class=\"col-xs-11\">
      <img alt=\"Baner del sistema\" class=\"hidden-xs\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/banner_gobierno.png"), "html", null, true);
        echo "\">
      </div>
      <div class=\"col-xs-1\">
      <img alt=\"Baner del sistema\" class=\"hidden-xs\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/banner_gobierno2.png"), "html", null, true);
        echo "\">
      </div>
    </header>
    
  </div>
</div>
  <nav class=\"navbar navbar-static-top navbar-inverse\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>                        
      </button>
      <a class=\"navbar-brand hidden-xs\" href=\"#\"><img alt=\"Baner del sistema\" class=\"hidden-xs\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/identificador-03-03.png"), "html", null, true);
        echo "\"></a>
    </div>
    <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
      <ul class=\"nav navbar-nav\">
        <li class=\"\"><a href='";
        // line 83
        echo $this->env->getExtension('routing')->getPath("sistema_Encuesta_principal_homepage");
        echo "'>Principal</a></li>
        ";
        // line 84
        if (twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 85
            echo "        <li class=\"dropdown\">

          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"> Encuesta<span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu\">
                                <li><a href='";
            // line 89
            echo $this->env->getExtension('routing')->getPath("encuestas_crear");
            echo "' >Generar</a></li>
                                <li class=\"dropdown-submenu\">
                                    <a tabindex=\"-1\" href=\"#\">Visualizar</a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href='";
            // line 93
            echo $this->env->getExtension('routing')->getPath("encuestas_totales", array("tipoEncuesta" => "general"));
            echo "'>Todas</a></li>
                                        <li><a href='";
            // line 94
            echo $this->env->getExtension('routing')->getPath("encuestas_buscar_nombre");
            echo "'>Por Nombre</a></li>
                                        <li><a href='";
            // line 95
            echo $this->env->getExtension('routing')->getPath("encuestas_buscar_fecha");
            echo "'>Por Fecha</a></li>
                                        <li><a href='";
            // line 96
            echo $this->env->getExtension('routing')->getPath("encuestas_totales", array("tipoEncuesta" => "sufragio"));
            echo "'>Sufragio</a></li>
                                    </ul>
                                </li>
                                <li><a href='";
            // line 99
            echo $this->env->getExtension('routing')->getPath("encuestas_resumen");
            echo "'>Resumen</a></li>
                            </ul>

        </li>
        ";
        }
        // line 104
        echo "        <li><a href='";
        echo $this->env->getExtension('routing')->getPath("sistema_Encuesta_principal_contacto");
        echo "'>Contacto</a></li>
        <!-- <li><a href='";
        // line 105
        echo $this->env->getExtension('routing')->getPath("encuestas_buscar_csv");
        echo "'>Exportar</a></li> -->
      </ul>
      <ul class=\"nav navbar-nav1 navbar-right\">
      ";
        // line 108
        if (twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 109
            echo "        <ul class=\"nav navbar-nav1 navusuario\"  >
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"> ";
            // line 111
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombres", array()), "html", null, true);
            echo "</span></a>
              <ul class=\"dropdown-menu\" role=\"menu\"> 
                 <li class=\"dropdown-submenu\" >
                  <a tabindex=\"-1\" href=\"#\">Perfil</a>
                  <ul class=\"dropdown-menu\">
                    <li><a href='";
            // line 116
            echo $this->env->getExtension('routing')->getPath("usuario_verperfil");
            echo "'>Ver</a></li>
                    ";
            // line 117
            if ((twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array") != "ROLE_USUARIO")) {
                // line 118
                echo "                    <li><a href='";
                echo $this->env->getExtension('routing')->getPath("usuario_perfil");
                echo "'>Modificar</a></li>
                    ";
            }
            // line 120
            echo "                  </ul>
                </li>
                  <li class=\"dropdown-submenu\" >
                    ";
            // line 123
            if ((twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array") != "ROLE_USUARIO")) {
                // line 124
                echo "                      <a tabindex=\"-1\" href=\"#\">Usuario</a>
                      <ul class=\"dropdown-menu\">
                        <li><a href='";
                // line 126
                echo $this->env->getExtension('routing')->getPath("usuario_registro");
                echo "'>Crear</a></li>
                        <li><a href='";
                // line 127
                echo $this->env->getExtension('routing')->getPath("usuarios_buscar_nombre");
                echo "'>Buscar Por Nombre</a></li>
                        <li><a href='";
                // line 128
                echo $this->env->getExtension('routing')->getPath("usuario_totales");
                echo "'>Buscar Todos</a></li>
                      </ul>
                    ";
            }
            // line 131
            echo "                  </li>
              </ul>
            </li>
          </ul>
          ";
        }
        // line 136
        echo "          ";
        if (twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 137
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("usuario_logout");
            echo "\"><span class=\"glyphicon glyphicon-log-out\"></span> Salir</a></li>
          ";
        } else {
            // line 139
            echo "            <li><a href='";
            echo $this->env->getExtension('routing')->getPath("usuario_login");
            echo "'><span class=\"glyphicon glyphicon-log-in\"></span> Ingresar</a></li>
          ";
        }
        // line 141
        echo "      </ul>
    </div>
  </div>
</nav>
  <div class=\"container\">
      <div class=\"col-xs-8 col-md-offset-2 text-right\" id=\"titulo\">
          <h1>";
        // line 147
        $this->displayBlock('titulo', $context, $blocks);
        echo "</h1>
      </div>
  <div class=\"row\">
    <div class=\"col-xs-12 col-md-4\" id=\"contenido\">
      <div id=\"posicionfonfoblanco\" class=\"hidden-xs hidden-sm hidden-md\"><img src=\"";
        // line 151
        $this->displayBlock('imagen_fondo', $context, $blocks);
        echo "\" align=\"center\"></div>
      
    </div>

    ";
        // line 156
        echo "  ";
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 159
        echo "  </div>
</div>
     

";
    }

    // line 147
    public function block_titulo($context, array $blocks = array())
    {
    }

    // line 151
    public function block_imagen_fondo($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/fondo_ventana_emergente.png"), "html", null, true);
    }

    // line 156
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 157
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "::frontend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 157,  396 => 156,  390 => 151,  385 => 147,  377 => 159,  374 => 156,  367 => 151,  360 => 147,  352 => 141,  346 => 139,  340 => 137,  337 => 136,  330 => 131,  324 => 128,  320 => 127,  316 => 126,  312 => 124,  310 => 123,  305 => 120,  299 => 118,  297 => 117,  293 => 116,  285 => 111,  281 => 109,  279 => 108,  273 => 105,  268 => 104,  260 => 99,  254 => 96,  250 => 95,  246 => 94,  242 => 93,  235 => 89,  229 => 85,  227 => 84,  223 => 83,  216 => 79,  199 => 65,  193 => 62,  185 => 56,  182 => 54,  176 => 50,  172 => 49,  168 => 48,  164 => 47,  160 => 46,  156 => 45,  152 => 44,  148 => 43,  144 => 42,  140 => 41,  136 => 40,  132 => 39,  128 => 38,  123 => 37,  120 => 36,  113 => 31,  109 => 30,  105 => 29,  101 => 28,  97 => 27,  93 => 26,  89 => 25,  85 => 24,  81 => 23,  76 => 22,  72 => 19,  67 => 18,  62 => 16,  59 => 14,  55 => 12,  51 => 11,  43 => 7,  40 => 6,  34 => 4,  11 => 3,);
    }
}
