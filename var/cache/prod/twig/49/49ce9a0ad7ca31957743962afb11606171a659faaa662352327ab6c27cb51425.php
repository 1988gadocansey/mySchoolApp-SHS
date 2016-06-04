<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f1ed6c68a4bb731a3e04c406124203b22ce7673a6d8a0a157863638a8e52fcd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h2 class=\"panel-title\">Login</h2>
        </div>

        <div class=\"panel-body\">
            ";
        // line 12
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 13
            echo "                <div class=\"alert alert-danger alert-error\">
                    ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 17
        echo "
            <form action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />

                <div class=\"form-group\">
                    <label for=\"username\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" />
                </div>

                <div class=\"form-group\">
                    <label for=\"password\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" />
                </div>

                <div class=\"form-group\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                </div>

                <input type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\" class=\"btn btn-primary\" role=\"button\">Forgot password?</a>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 37,  89 => 36,  83 => 33,  74 => 27,  67 => 23,  63 => 22,  57 => 19,  53 => 18,  50 => 17,  44 => 14,  41 => 13,  39 => 12,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <div class="panel panel-primary">*/
/*         <div class="panel-heading">*/
/*             <h2 class="panel-title">Login</h2>*/
/*         </div>*/
/* */
/*         <div class="panel-body">*/
/*             {% if error %}*/
/*                 <div class="alert alert-danger alert-error">*/
/*                     {{ error.messageKey|trans(error.messageData, 'security') }}*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             <form action="{{ path('fos_user_security_check') }}" method="post" class="form">*/
/*                 <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*                     <input type="text" class="form-control" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*                     <input type="password" class="form-control" id="password" name="_password" required="required" />*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                     <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*                 </div>*/
/* */
/*                 <input type="submit" class="btn btn-primary" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/*                 <a href="{{ path('fos_user_resetting_request') }}" class="btn btn-primary" role="button">Forgot password?</a>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
