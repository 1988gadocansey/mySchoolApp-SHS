<?php

/* page/home.html.twig */
class __TwigTemplate_d8868584e7088a9b6692f91176a35932084e51f79658633631e2bb5b1a12e7b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "page/home.html.twig", 1);
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
        $__internal_312ad6ef8faa9e4d2d180db4c15f8624b57d54c52c83022682f0ee808d67d43b = $this->env->getExtension("native_profiler");
        $__internal_312ad6ef8faa9e4d2d180db4c15f8624b57d54c52c83022682f0ee808d67d43b->enter($__internal_312ad6ef8faa9e4d2d180db4c15f8624b57d54c52c83022682f0ee808d67d43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_312ad6ef8faa9e4d2d180db4c15f8624b57d54c52c83022682f0ee808d67d43b->leave($__internal_312ad6ef8faa9e4d2d180db4c15f8624b57d54c52c83022682f0ee808d67d43b_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_14523b2c5daeeb59bc2014323b913274a560c669e0a0513e506a10bec4c292b2 = $this->env->getExtension("native_profiler");
        $__internal_14523b2c5daeeb59bc2014323b913274a560c669e0a0513e506a10bec4c292b2->enter($__internal_14523b2c5daeeb59bc2014323b913274a560c669e0a0513e506a10bec4c292b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    Homepage
";
        
        $__internal_14523b2c5daeeb59bc2014323b913274a560c669e0a0513e506a10bec4c292b2->leave($__internal_14523b2c5daeeb59bc2014323b913274a560c669e0a0513e506a10bec4c292b2_prof);

    }

    public function getTemplateName()
    {
        return "page/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block main %}*/
/*     Homepage*/
/* {% endblock %}*/
/* */
