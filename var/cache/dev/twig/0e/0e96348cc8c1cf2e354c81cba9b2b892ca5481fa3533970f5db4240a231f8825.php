<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_193183acc5b504bd6df14333908421207eea98d142630c51e199ca130bd7592e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_efdf30d957ed329ba66235a8c3699771520ca54ca2925c04f14d5e2945368bfa = $this->env->getExtension("native_profiler");
        $__internal_efdf30d957ed329ba66235a8c3699771520ca54ca2925c04f14d5e2945368bfa->enter($__internal_efdf30d957ed329ba66235a8c3699771520ca54ca2925c04f14d5e2945368bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efdf30d957ed329ba66235a8c3699771520ca54ca2925c04f14d5e2945368bfa->leave($__internal_efdf30d957ed329ba66235a8c3699771520ca54ca2925c04f14d5e2945368bfa_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_159d8032bdbc5f3e38762e2ab8c7697407a4c68612831498bed60e09145a9965 = $this->env->getExtension("native_profiler");
        $__internal_159d8032bdbc5f3e38762e2ab8c7697407a4c68612831498bed60e09145a9965->enter($__internal_159d8032bdbc5f3e38762e2ab8c7697407a4c68612831498bed60e09145a9965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_159d8032bdbc5f3e38762e2ab8c7697407a4c68612831498bed60e09145a9965->leave($__internal_159d8032bdbc5f3e38762e2ab8c7697407a4c68612831498bed60e09145a9965_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
