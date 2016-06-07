<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_be4d553a92decfb2f464ac414d5b55c5deba9892d625f23681900cc7c4a0dbb2 extends Twig_Template
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
        $__internal_75da86e8e1358a5da617f5be27bd96239a09f1a9a74529f6faf221db2d251a9e = $this->env->getExtension("native_profiler");
        $__internal_75da86e8e1358a5da617f5be27bd96239a09f1a9a74529f6faf221db2d251a9e->enter($__internal_75da86e8e1358a5da617f5be27bd96239a09f1a9a74529f6faf221db2d251a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75da86e8e1358a5da617f5be27bd96239a09f1a9a74529f6faf221db2d251a9e->leave($__internal_75da86e8e1358a5da617f5be27bd96239a09f1a9a74529f6faf221db2d251a9e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0ba7f4688b27c3d03590ac5020f4aaf19a147da62210f45359af47a0d391d400 = $this->env->getExtension("native_profiler");
        $__internal_0ba7f4688b27c3d03590ac5020f4aaf19a147da62210f45359af47a0d391d400->enter($__internal_0ba7f4688b27c3d03590ac5020f4aaf19a147da62210f45359af47a0d391d400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0ba7f4688b27c3d03590ac5020f4aaf19a147da62210f45359af47a0d391d400->leave($__internal_0ba7f4688b27c3d03590ac5020f4aaf19a147da62210f45359af47a0d391d400_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0abed3eb5a1c07a2beb5f148dd933e89504f83912d9d187d4bba3c24d3f1388 = $this->env->getExtension("native_profiler");
        $__internal_e0abed3eb5a1c07a2beb5f148dd933e89504f83912d9d187d4bba3c24d3f1388->enter($__internal_e0abed3eb5a1c07a2beb5f148dd933e89504f83912d9d187d4bba3c24d3f1388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e0abed3eb5a1c07a2beb5f148dd933e89504f83912d9d187d4bba3c24d3f1388->leave($__internal_e0abed3eb5a1c07a2beb5f148dd933e89504f83912d9d187d4bba3c24d3f1388_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_954ce1f6d0a33ef98d930700ad63e31d9fdce759c514a92a57be41df160f852b = $this->env->getExtension("native_profiler");
        $__internal_954ce1f6d0a33ef98d930700ad63e31d9fdce759c514a92a57be41df160f852b->enter($__internal_954ce1f6d0a33ef98d930700ad63e31d9fdce759c514a92a57be41df160f852b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_954ce1f6d0a33ef98d930700ad63e31d9fdce759c514a92a57be41df160f852b->leave($__internal_954ce1f6d0a33ef98d930700ad63e31d9fdce759c514a92a57be41df160f852b_prof);

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
