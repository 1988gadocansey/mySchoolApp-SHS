<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_7aea3378c767f823b91a71446eb360c43eac706dcae48139cd9d260b0af7151b extends Twig_Template
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
        // line 2
        echo "
<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h2 class=\"panel-title\">Register</h2>
    </div>
    <div class=\"panel-body\">
        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        <div>
            <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </div>
        ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    </div>
</div>



";
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
        return array (  41 => 13,  36 => 11,  31 => 9,  27 => 8,  19 => 2,);
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
