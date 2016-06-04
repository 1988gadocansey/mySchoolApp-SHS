<?php

/* SgDatatablesBundle:Datatable:datatable.html.twig */
class __TwigTemplate_3544ffd3ea8ca5c04572553176d3fce3f8d3721e034b1f454308f2797908bbbe extends Twig_Template
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
        $__internal_944e2de9acebf44990074ca09af63de96be0745d590e75bee45298aa166b3d83 = $this->env->getExtension("native_profiler");
        $__internal_944e2de9acebf44990074ca09af63de96be0745d590e75bee45298aa166b3d83->enter($__internal_944e2de9acebf44990074ca09af63de96be0745d590e75bee45298aa166b3d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:datatable.html.twig"));

        // line 1
        $this->displayBlock('sg_datatable', $context, $blocks);
        
        $__internal_944e2de9acebf44990074ca09af63de96be0745d590e75bee45298aa166b3d83->leave($__internal_944e2de9acebf44990074ca09af63de96be0745d590e75bee45298aa166b3d83_prof);

    }

    public function block_sg_datatable($context, array $blocks = array())
    {
        $__internal_528aebc2837b2b440c1b946171598cce011defdde6c770b872aa47f7d6c6f557 = $this->env->getExtension("native_profiler");
        $__internal_528aebc2837b2b440c1b946171598cce011defdde6c770b872aa47f7d6c6f557->enter($__internal_528aebc2837b2b440c1b946171598cce011defdde6c770b872aa47f7d6c6f557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

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
        
        $__internal_528aebc2837b2b440c1b946171598cce011defdde6c770b872aa47f7d6c6f557->leave($__internal_528aebc2837b2b440c1b946171598cce011defdde6c770b872aa47f7d6c6f557_prof);

    }

    // line 3
    public function block_sg_datatable_html($context, array $blocks = array())
    {
        $__internal_f6d965814ec82c045bcb47f2656bf8f0706987f190d66f5e3c96b1cedadb50aa = $this->env->getExtension("native_profiler");
        $__internal_f6d965814ec82c045bcb47f2656bf8f0706987f190d66f5e3c96b1cedadb50aa->enter($__internal_f6d965814ec82c045bcb47f2656bf8f0706987f190d66f5e3c96b1cedadb50aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        // line 4
        echo "
        ";
        // line 5
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_html.html.twig", "SgDatatablesBundle:Datatable:datatable.html.twig", 5)->display($context);
        // line 6
        echo "
    ";
        
        $__internal_f6d965814ec82c045bcb47f2656bf8f0706987f190d66f5e3c96b1cedadb50aa->leave($__internal_f6d965814ec82c045bcb47f2656bf8f0706987f190d66f5e3c96b1cedadb50aa_prof);

    }

    // line 9
    public function block_sg_datatable_js($context, array $blocks = array())
    {
        $__internal_1f891cf31c3cce2ff5f5ecb2a97fefd439b8b343969542fb6f8943214856d61f = $this->env->getExtension("native_profiler");
        $__internal_1f891cf31c3cce2ff5f5ecb2a97fefd439b8b343969542fb6f8943214856d61f->enter($__internal_1f891cf31c3cce2ff5f5ecb2a97fefd439b8b343969542fb6f8943214856d61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        // line 10
        echo "
        ";
        // line 11
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_js.html.twig", "SgDatatablesBundle:Datatable:datatable.html.twig", 11)->display($context);
        // line 12
        echo "
    ";
        
        $__internal_1f891cf31c3cce2ff5f5ecb2a97fefd439b8b343969542fb6f8943214856d61f->leave($__internal_1f891cf31c3cce2ff5f5ecb2a97fefd439b8b343969542fb6f8943214856d61f_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Datatable:datatable.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 12,  83 => 11,  80 => 10,  74 => 9,  66 => 6,  64 => 5,  61 => 4,  55 => 3,  47 => 14,  45 => 9,  42 => 8,  40 => 3,  37 => 2,  25 => 1,);
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
