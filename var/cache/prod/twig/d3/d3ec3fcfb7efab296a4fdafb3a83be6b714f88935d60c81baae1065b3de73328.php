<?php

/* post/index.html.twig */
class __TwigTemplate_9ec401b30cf7da65ccfc69d7dbe336550453d807b700b2defa0c812d6512747e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "post/index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
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

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo $this->env->getExtension('sg_datatables_twig_extension')->datatableRender((isset($context["datatable"]) ? $context["datatable"] : null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block main %}*/
/*     {{ datatable_render(datatable) }}*/
/* {% endblock %}*/
/* */
