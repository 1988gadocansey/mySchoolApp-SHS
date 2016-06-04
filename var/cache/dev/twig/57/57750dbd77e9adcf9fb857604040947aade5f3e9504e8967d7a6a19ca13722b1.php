<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_29c3fe74738d46572e752af49f296550b5df87acb1dae44b8d25787612c26ab4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d89f8fecd5c06bc6557ad16237da0e77fe4a7a311f546ea9d3cd5fa0a1b973d2 = $this->env->getExtension("native_profiler");
        $__internal_d89f8fecd5c06bc6557ad16237da0e77fe4a7a311f546ea9d3cd5fa0a1b973d2->enter($__internal_d89f8fecd5c06bc6557ad16237da0e77fe4a7a311f546ea9d3cd5fa0a1b973d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d89f8fecd5c06bc6557ad16237da0e77fe4a7a311f546ea9d3cd5fa0a1b973d2->leave($__internal_d89f8fecd5c06bc6557ad16237da0e77fe4a7a311f546ea9d3cd5fa0a1b973d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8f07f8a8f243f8722b41ec44c8ac6b15036dfdcbdd5439be797b68941117c6a6 = $this->env->getExtension("native_profiler");
        $__internal_8f07f8a8f243f8722b41ec44c8ac6b15036dfdcbdd5439be797b68941117c6a6->enter($__internal_8f07f8a8f243f8722b41ec44c8ac6b15036dfdcbdd5439be797b68941117c6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8f07f8a8f243f8722b41ec44c8ac6b15036dfdcbdd5439be797b68941117c6a6->leave($__internal_8f07f8a8f243f8722b41ec44c8ac6b15036dfdcbdd5439be797b68941117c6a6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dfe666888b5abbe98af6bb33413fbeb4b61be35f0b68ac5fe23fe6ccf0783ceb = $this->env->getExtension("native_profiler");
        $__internal_dfe666888b5abbe98af6bb33413fbeb4b61be35f0b68ac5fe23fe6ccf0783ceb->enter($__internal_dfe666888b5abbe98af6bb33413fbeb4b61be35f0b68ac5fe23fe6ccf0783ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dfe666888b5abbe98af6bb33413fbeb4b61be35f0b68ac5fe23fe6ccf0783ceb->leave($__internal_dfe666888b5abbe98af6bb33413fbeb4b61be35f0b68ac5fe23fe6ccf0783ceb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_62c00c77f2a0591e26fac0e1fe14ab91cd3f804ca13411b46eabd000094617e6 = $this->env->getExtension("native_profiler");
        $__internal_62c00c77f2a0591e26fac0e1fe14ab91cd3f804ca13411b46eabd000094617e6->enter($__internal_62c00c77f2a0591e26fac0e1fe14ab91cd3f804ca13411b46eabd000094617e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_62c00c77f2a0591e26fac0e1fe14ab91cd3f804ca13411b46eabd000094617e6->leave($__internal_62c00c77f2a0591e26fac0e1fe14ab91cd3f804ca13411b46eabd000094617e6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
