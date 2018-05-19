<?php

/* EncuestasBundle:Default:encuestasCrear.html.twig */
class __TwigTemplate_3aedeff0d9cbec66e0e2c4e2e8c514d88a61710eaa0e77222b6f22e33f738097 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::frontend.html.twig", "EncuestasBundle:Default:encuestasCrear.html.twig", 2);
        $this->blocks = array(
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

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"datagrid\" id=\"posiciontabla\"><table>
<thead><tr><th>header</th><th>header</th><th>header</th><th>header</th><th>otro</th></tr></thead>
<tfoot><tr><td colspan=\"5\"><div id=\"paging\"><ul><li><a href=\"#\"><span>Anterior</span></a></li>
                    <li><a href=\"#\" class=\"active\"><span>1</span></a></li>
                    <li><a href=\"#\"><span>2</span></a></li>
                    <li><a href=\"#\"><span>3</span></a></li>
                    <li><a href=\"#\"><span>4</span></a></li>
                    <li><a href=\"#\"><span>5</span></a></li>
                    <li><a href=\"#\"><span>Siguiente</span></a></li></ul></div></tr></tfoot>
<tbody><tr><td>data</td><td>data</td><td>data</td><td>data</td><td>otro</td></tr>
<tr class=\"alt\"><td>data</td><td>data</td><td>data</td><td>data</td><td>otro</td></tr>
<tr><td>data</td><td>data</td><td>data</td><td>data</td><td>otro</td></tr>
<tr class=\"alt\"><td>data</td><td>data</td><td>data</td><td>data</td><td>otro</td></tr>
<tr><td>data</td><td>data</td><td>data</td><td>data</td><td>otro</td></tr>
</tbody>
</table></div>
";
    }

    public function getTemplateName()
    {
        return "EncuestasBundle:Default:encuestasCrear.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 2,);
    }
}
