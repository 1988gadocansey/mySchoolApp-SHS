<?php

/* bootstrap3.html.twig */
class __TwigTemplate_9d035da763bd128c5165b97cbc1a33938f74c054b6f7f9a3946aeddc4e8cfbff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap3.html.twig", 1);
        $this->blocks = array(
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap_3_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_label($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("form_label", $context, $blocks);
        echo "

    ";
        // line 6
        if ((isset($context["required"]) ? $context["required"] : null)) {
            // line 7
            echo "        <span class=\"required\" title=\"This field is required\">*</span>
    ";
        }
    }

    public function getTemplateName()
    {
        return "bootstrap3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  37 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'bootstrap_3_layout.html.twig' %}*/
/* */
/* {% block form_label %}*/
/*     {{ parent() }}*/
/* */
/*     {% if required %}*/
/*         <span class="required" title="This field is required">*</span>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
