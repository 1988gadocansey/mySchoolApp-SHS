<?php

/* SgDatatablesBundle:Datatable:datatable.html.twig */
class __TwigTemplate_5fe7cedfd5286b0824680c6e44ad76b6add2238259e1c7999174499bb8666632 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sg_datatable' => array($this, 'block_sg_datatable'),
            'sg_datatable_html' => array($this, 'block_sg_datatable_html'),
            'sg_datatable_js' => array($this, 'block_sg_datatable_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sg_datatable', $context, $blocks);
    }

    public function block_sg_datatable($context, array $blocks = array())
    {
        // line 2
        echo "
    ";
        // line 3
        $this->displayBlock('sg_datatable_html', $context, $blocks);
        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('sg_datatable_js', $context, $blocks);
        // line 14
        echo "
";
    }

    // line 3
    public function block_sg_datatable_html($context, array $blocks = array())
    {
        // line 4
        echo "
        ";
        // line 5
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_html.html.twig", "SgDatatablesBundle:Datatable:datatable.html.twig", 5)->display($context);
        // line 6
        echo "
    ";
    }

    // line 9
    public function block_sg_datatable_js($context, array $blocks = array())
    {
        // line 10
        echo "
        ";
        // line 11
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_js.html.twig", "SgDatatablesBundle:Datatable:datatable.html.twig", 11)->display($context);
        // line 12
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Datatable:datatable.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  62 => 11,  59 => 10,  56 => 9,  51 => 6,  49 => 5,  46 => 4,  43 => 3,  38 => 14,  36 => 9,  33 => 8,  31 => 3,  28 => 2,  22 => 1,);
    }
}
/* {% block sg_datatable %}*/
/* */
/*     {% block sg_datatable_html %}*/
/* */
/*         {% include "SgDatatablesBundle:Datatable:datatable_html.html.twig" %}*/
/* */
/*     {% endblock %}*/
/* */
/*     {% block sg_datatable_js %}*/
/* */
/*         {% include "SgDatatablesBundle:Datatable:datatable_js.html.twig" %}*/
/* */
/*     {% endblock %}*/
/* */
/* {% endblock  %}*/
/* */
