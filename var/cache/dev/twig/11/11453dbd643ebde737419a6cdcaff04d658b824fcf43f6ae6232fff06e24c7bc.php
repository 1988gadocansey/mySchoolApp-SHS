<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_18263ff6962db6976513c49e3328cffce89391f94e250800d5e7fd04aee394d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_3e040dfaaf9278a5e676a35f2b04592679eacc37693df18dffde102443626d54 = $this->env->getExtension("native_profiler");
        $__internal_3e040dfaaf9278a5e676a35f2b04592679eacc37693df18dffde102443626d54->enter($__internal_3e040dfaaf9278a5e676a35f2b04592679eacc37693df18dffde102443626d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e040dfaaf9278a5e676a35f2b04592679eacc37693df18dffde102443626d54->leave($__internal_3e040dfaaf9278a5e676a35f2b04592679eacc37693df18dffde102443626d54_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3b3393eb1de2e3d5dc447bedbecddf24c01dd4151df0e57d9c2d13d71832a50e = $this->env->getExtension("native_profiler");
        $__internal_3b3393eb1de2e3d5dc447bedbecddf24c01dd4151df0e57d9c2d13d71832a50e->enter($__internal_3b3393eb1de2e3d5dc447bedbecddf24c01dd4151df0e57d9c2d13d71832a50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_3b3393eb1de2e3d5dc447bedbecddf24c01dd4151df0e57d9c2d13d71832a50e->leave($__internal_3b3393eb1de2e3d5dc447bedbecddf24c01dd4151df0e57d9c2d13d71832a50e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/*     {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
