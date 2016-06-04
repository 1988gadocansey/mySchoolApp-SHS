<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_92ba8d2973246c81efa99a266a6cd9977c19e85cf8c039d8d44e4b7758ccff07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a1dd368a21970811d519a226c882cb9ec0a1657f2c0641b8b4ad08de59aa89a = $this->env->getExtension("native_profiler");
        $__internal_2a1dd368a21970811d519a226c882cb9ec0a1657f2c0641b8b4ad08de59aa89a->enter($__internal_2a1dd368a21970811d519a226c882cb9ec0a1657f2c0641b8b4ad08de59aa89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a1dd368a21970811d519a226c882cb9ec0a1657f2c0641b8b4ad08de59aa89a->leave($__internal_2a1dd368a21970811d519a226c882cb9ec0a1657f2c0641b8b4ad08de59aa89a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_06a3d6210b1cef92433d75b33a1f7e648640b1a988f9c1a3d5561d7d27e6ab3f = $this->env->getExtension("native_profiler");
        $__internal_06a3d6210b1cef92433d75b33a1f7e648640b1a988f9c1a3d5561d7d27e6ab3f->enter($__internal_06a3d6210b1cef92433d75b33a1f7e648640b1a988f9c1a3d5561d7d27e6ab3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_06a3d6210b1cef92433d75b33a1f7e648640b1a988f9c1a3d5561d7d27e6ab3f->leave($__internal_06a3d6210b1cef92433d75b33a1f7e648640b1a988f9c1a3d5561d7d27e6ab3f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
