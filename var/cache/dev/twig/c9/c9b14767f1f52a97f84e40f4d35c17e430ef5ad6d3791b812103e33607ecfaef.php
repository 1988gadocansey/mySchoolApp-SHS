<?php

/* bootstrap3.html.twig */
class __TwigTemplate_2d171aa34ccb08c2fcdaa5ee41cff362891049e036355b18794c56078002b8a0 extends Twig_Template
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
        $__internal_adf7b66eb5572ea5fbe20c796543662368bce400734f804f879ac6e93ed37c11 = $this->env->getExtension("native_profiler");
        $__internal_adf7b66eb5572ea5fbe20c796543662368bce400734f804f879ac6e93ed37c11->enter($__internal_adf7b66eb5572ea5fbe20c796543662368bce400734f804f879ac6e93ed37c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap3.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adf7b66eb5572ea5fbe20c796543662368bce400734f804f879ac6e93ed37c11->leave($__internal_adf7b66eb5572ea5fbe20c796543662368bce400734f804f879ac6e93ed37c11_prof);

    }

    // line 3
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_8c4f3167673cdd55820d739e8365df15f774838bacec32b0f19d65ab2e403b5c = $this->env->getExtension("native_profiler");
        $__internal_8c4f3167673cdd55820d739e8365df15f774838bacec32b0f19d65ab2e403b5c->enter($__internal_8c4f3167673cdd55820d739e8365df15f774838bacec32b0f19d65ab2e403b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 4
        echo "    ";
        $this->displayParentBlock("form_label", $context, $blocks);
        echo "

    ";
        // line 6
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 7
            echo "        <span class=\"required\" title=\"This field is required\">*</span>
    ";
        }
        
        $__internal_8c4f3167673cdd55820d739e8365df15f774838bacec32b0f19d65ab2e403b5c->leave($__internal_8c4f3167673cdd55820d739e8365df15f774838bacec32b0f19d65ab2e403b5c_prof);

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
        return array (  48 => 7,  46 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
