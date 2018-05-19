<?php

/* SistemaEncuestaPrincipalBundle:Default:contacto.html.twig */
class __TwigTemplate_166d31768560bc9066dfe6b041b9313d28933a30028ec300b2b69483183b570a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("::frontend.html.twig", "SistemaEncuestaPrincipalBundle:Default:contacto.html.twig", 5);
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

    // line 6
    public function block_titulo($context, array $blocks = array())
    {
        echo "Contáctenos";
    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 8
        echo "<div>
  ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 10
            echo "    <script language=Javascript>
      \$(document).ready(function(){
        \$(this).tab('show');
        BootstrapDialog.show({
          title: 'Mensaje',
          message: ('";
            // line 15
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
        // line 30
        echo "</div>
<form action=\" ";
        // line 31
        echo $this->env->getExtension('routing')->getPath("sistema_Encuesta_principal_contacto");
        echo "\" method=\"POST\" novalidate>
<div class=\"col-xs-12 col-md-8 col-md-offset-2\">
  <div class=\"row\">
    <div class=\"col-xs-12\">
      <table border=\"0\">
          <tr>
            <td><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/telefono.png"), "html", null, true);
        echo "\"/></td>
            <td>0416.4705754 <br> 0416.0479570</td>
          </tr> 
          <tr>
            <td><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/correo.png"), "html", null, true);
        echo "\"/></td>
            <td>Gobernación Socialista: nader0303@gmail.com <br> Guardián Del ALBA, S.A.: araquega@guardiandelalba.pdvsa.com </td>
          </tr>
          <tr>
            <td><img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/sugerencia.png"), "html", null, true);
        echo "\"/></td>
            <td>Sugerencias <br></td>
             </tr>
          <tr> 
            <td></td>
            <td>
              <div class=\"col-xs-12 col-md-8\">
                <div class=\"row\">
                  <div class=\"col-xs-12\"><strong>Asunto</strong><input type=\"text\" name=\"Subject\"  class=\"form-control validate[required]\"></div>
                </div>
                <div class=\"row\">
                  <div class=\"col-xs-12\">
                    <strong>Correo Electrónico</strong>
                    <input type=\"email\" name=\"email\" class=\" form-control validate[required,custom[email]]\">
                  </div>
                </div>
                <div class=\"row\">
                  <div class=\"col-xs-12\">
                    <strong>Mensaje</strong>
                    <textarea name=\"message\" class=\" form-control validate[required]\" ></textarea></td>
                  </div>
                </div>
              </div>
              </td>
              </tr> 
              <tr>
                <td></td>
                <td> 
                  <div class=\"col-xs-12 col-md-12\">
                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <input type=\"submit\" value=\"Enviar\" class=\"btn btn-default\" />
                      </div>
                    </div>
                  </div>  
                </td>         
              </tr>
      </table>
      </div>
  </div>
  </div>
</form>

";
    }

    public function getTemplateName()
    {
        return "SistemaEncuestaPrincipalBundle:Default:contacto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 45,  92 => 41,  85 => 37,  76 => 31,  73 => 30,  52 => 15,  45 => 10,  41 => 9,  38 => 8,  35 => 7,  29 => 6,  11 => 5,);
    }
}
