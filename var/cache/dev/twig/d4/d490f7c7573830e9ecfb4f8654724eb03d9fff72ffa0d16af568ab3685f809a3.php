<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_f6b5e73ea9eedb7d3c2ce24ace1a4ec721e0fe20e321471188ff1cd242021ea0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0066ab7131d7276b4bc855009581a8d66ba8defc7c57f368d6e52fd6e97f28a = $this->env->getExtension("native_profiler");
        $__internal_b0066ab7131d7276b4bc855009581a8d66ba8defc7c57f368d6e52fd6e97f28a->enter($__internal_b0066ab7131d7276b4bc855009581a8d66ba8defc7c57f368d6e52fd6e97f28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h2 class=\"panel-title\">Register</h2>
    </div>
    <div class=\"panel-body\">
        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <div>
            <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </div>
        ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
</div>



";
        
        $__internal_b0066ab7131d7276b4bc855009581a8d66ba8defc7c57f368d6e52fd6e97f28a->leave($__internal_b0066ab7131d7276b4bc855009581a8d66ba8defc7c57f368d6e52fd6e97f28a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 13,  39 => 11,  34 => 9,  30 => 8,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="panel panel-primary">*/
/*     <div class="panel-heading">*/
/*         <h2 class="panel-title">Register</h2>*/
/*     </div>*/
/*     <div class="panel-body">*/
/*         {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/*         {{ form_widget(form) }}*/
/*         <div>*/
/*             <input type="submit" class="btn btn-primary" value="{{ 'registration.submit'|trans }}" />*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* */
/* */
