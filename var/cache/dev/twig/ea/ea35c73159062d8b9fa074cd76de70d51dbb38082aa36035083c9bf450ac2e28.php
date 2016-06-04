<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_3001d5e3fe3f4215eb2db6e131b7890820a853f9762e5643956b7e80a13cc5e3 extends Twig_Template
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
        $__internal_66c78ae22a3dff3bc8bf117b47f65dc06121240f259004d87fc78f30dbcbaa4f = $this->env->getExtension("native_profiler");
        $__internal_66c78ae22a3dff3bc8bf117b47f65dc06121240f259004d87fc78f30dbcbaa4f->enter($__internal_66c78ae22a3dff3bc8bf117b47f65dc06121240f259004d87fc78f30dbcbaa4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h2 class=\"panel-title\">Forgot Password</h2>
    </div>
    <div class=\"panel-body\">
        <form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
            <div>
                ";
        // line 10
        if (array_key_exists("invalid_username", $context)) {
            // line 11
            echo "                    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
                ";
        }
        // line 13
        echo "                <div class=\"form-group\">
                    <label for=\"username\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"text\" id=\"username\" class=\"form-control\" name=\"username\" required=\"required\" />
                </div>
            </div>
            <div>
                <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </div>
        </form>
    </div>
</div>
";
        
        $__internal_66c78ae22a3dff3bc8bf117b47f65dc06121240f259004d87fc78f30dbcbaa4f->leave($__internal_66c78ae22a3dff3bc8bf117b47f65dc06121240f259004d87fc78f30dbcbaa4f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 19,  46 => 14,  43 => 13,  37 => 11,  35 => 10,  30 => 8,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="panel panel-primary">*/
/*     <div class="panel-heading">*/
/*         <h2 class="panel-title">Forgot Password</h2>*/
/*     </div>*/
/*     <div class="panel-body">*/
/*         <form action="{{ path('fos_user_resetting_send_email') }}" method="POST" class="fos_user_resetting_request">*/
/*             <div>*/
/*                 {% if invalid_username is defined %}*/
/*                     <p>{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}) }}</p>*/
/*                 {% endif %}*/
/*                 <div class="form-group">*/
/*                     <label for="username">{{ 'resetting.request.username'|trans }}</label>*/
/*                     <input type="text" id="username" class="form-control" name="username" required="required" />*/
/*                 </div>*/
/*             </div>*/
/*             <div>*/
/*                 <input type="submit" class="btn btn-primary" value="{{ 'resetting.request.submit'|trans }}" />*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* */
