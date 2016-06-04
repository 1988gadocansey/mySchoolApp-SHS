<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_40c94e9e4991f209998e2c2180f5239736e24aab1f3bfa82a70e1fa953e63687 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e17cf923991b4a03f435b22f4bbd51df690d832325225441d47032afe696632d = $this->env->getExtension("native_profiler");
        $__internal_e17cf923991b4a03f435b22f4bbd51df690d832325225441d47032afe696632d->enter($__internal_e17cf923991b4a03f435b22f4bbd51df690d832325225441d47032afe696632d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        // line 1
        echo "<!doctype html>
 <head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"initial-scale=1.0,maximum-scale=1.0,user-scalable=no\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name=\"msapplication-tap-highlight\" content=\"no\"/>
    <title>Shalom Academy | Auth</title>
     
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

";
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 115
        echo "
      
</body>
</html>";
        
        $__internal_e17cf923991b4a03f435b22f4bbd51df690d832325225441d47032afe696632d->leave($__internal_e17cf923991b4a03f435b22f4bbd51df690d832325225441d47032afe696632d_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dcd4d8c475d715d78b6b2f5004451bb439cb124e0cd4e3b6575c175f42285613 = $this->env->getExtension("native_profiler");
        $__internal_dcd4d8c475d715d78b6b2f5004451bb439cb124e0cd4e3b6575c175f42285613->enter($__internal_dcd4d8c475d715d78b6b2f5004451bb439cb124e0cd4e3b6575c175f42285613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        ";
        // line 22
        echo "
            
            <!-- uikit -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/uikit/css/uikit.almost-flat.min.css"), "html", null, true);
        echo "\"/>

    <!-- altair admin login page -->
   
     <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/login_page.min.css"), "html", null, true);
        echo "\"/>

        ";
        
        $__internal_dcd4d8c475d715d78b6b2f5004451bb439cb124e0cd4e3b6575c175f42285613->leave($__internal_dcd4d8c475d715d78b6b2f5004451bb439cb124e0cd4e3b6575c175f42285613_prof);

    }

    // line 38
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cdc7c11140aa256af710222294f9b1e1f70dc6cd60f6f2642666d3764ce025f3 = $this->env->getExtension("native_profiler");
        $__internal_cdc7c11140aa256af710222294f9b1e1f70dc6cd60f6f2642666d3764ce025f3->enter($__internal_cdc7c11140aa256af710222294f9b1e1f70dc6cd60f6f2642666d3764ce025f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 39
        echo "     
  <div class=\"login_page_wrapper\">
                   
                         

      ";
        // line 44
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 45
            echo "          <div class=\"uk-form-row\">
              <div class=\"alert alert-danger\" style=\"background-color: red;color: white\">

                  ";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
              </div>
          </div>";
        }
        // line 51
        echo "        <div class=\"md-card\" id=\"login_card\">
            <div class=\"md-card-content large-padding\" id=\"login_form\">
                <div class=\"login_heading\">
                    <center>  <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\"class=\"thumbnail\" style=\"\"/></center>
                </div>
                <form action=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" >
                     <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                    <div class=\"uk-form-row\">
                        <label for=\"username\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input class=\"md-input\" type=\"text\" id=\"login_username\" name=\"_username\" />
                    </div>
                    <div class=\"uk-form-row\">
                         <label for=\"password\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input class=\"md-input\" type=\"password\" id=\"login_password\" name=\"_password\" />
                    </div>
                    <div class=\"uk-margin-medium-top\">
                        <input type=\"submit\" class=\"md-btn md-btn-primary md-btn-block md-btn-large\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    
                    
                    </div>
                     
                    <div class=\"uk-margin-top\">
                           <span class=\"icheck-inline\">
                            <input type=\"checkbox\" name=\"login_page_stay_signed\" id=\"login_page_stay_signed\" data-md-icheck />
                                <a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\" class=\"inline-label\">Forgot password?</a>
           
                        </span>
                    </div>
                </form>
            </div>
            
            
            
        </div>
        
    </div>
 ";
        // line 99
        echo "  <!-- common functions -->
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/common.min.js"), "html", null, true);
        echo "\"></script>
    <!-- uikit functions -->
     
     <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/uikit_custom.min.js"), "html", null, true);
        echo "\"></script>
    <!-- altair core functions -->
    
 <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/altair_admin_common.min.js"), "html", null, true);
        echo "\"></script>
    <!-- altair login page functions -->
    
 <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/pages/login.min.js"), "html", null, true);
        echo "\"></script>
 <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
      
             
        ";
        
        $__internal_cdc7c11140aa256af710222294f9b1e1f70dc6cd60f6f2642666d3764ce025f3->leave($__internal_cdc7c11140aa256af710222294f9b1e1f70dc6cd60f6f2642666d3764ce025f3_prof);

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
        return array (  205 => 111,  201 => 110,  197 => 109,  191 => 106,  185 => 103,  179 => 100,  176 => 99,  161 => 76,  150 => 68,  143 => 64,  136 => 60,  130 => 57,  126 => 56,  121 => 54,  116 => 51,  110 => 48,  105 => 45,  103 => 44,  96 => 39,  90 => 38,  80 => 29,  73 => 25,  68 => 22,  66 => 11,  60 => 10,  50 => 115,  48 => 38,  45 => 37,  37 => 32,  35 => 10,  24 => 1,);
    }
}
/* <!doctype html>*/
/*  <head>*/
/*     <meta charset="UTF-8">*/
/*     <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <!-- Remove Tap Highlight on Windows Phone IE -->*/
/*     <meta name="msapplication-tap-highlight" content="no"/>*/
/*     <title>Shalom Academy | Auth</title>*/
/*      */
/*         {% block stylesheets %}*/
/*         {# uncomment the following lines to compile SCSS assets with Assetic*/
/* */
/*             {% stylesheets filter="scssphp" output="css/app.css"*/
/*                 "%kernel.root_dir%/Resources/assets/scss/bootstrap-flatly.scss"*/
/*                 "%kernel.root_dir%/Resources/assets/scss/font-awesome.scss"*/
/*                 "%kernel.root_dir%/Resources/assets/css/*.css"*/
/*                 "%kernel.root_dir%/Resources/assets/scss/main.scss"*/
/*             %}*/
/*                 <link rel="stylesheet" href="{{ asset_url }}" />*/
/*             {% endstylesheets %}*/
/*         #}*/
/* */
/*             */
/*             <!-- uikit -->*/
/*     <link rel="stylesheet" href="{{ asset('assets/plugins/uikit/css/uikit.almost-flat.min.css')}}"/>*/
/* */
/*     <!-- altair admin login page -->*/
/*    */
/*      <link rel="stylesheet" href="{{ asset('assets/css/login_page.min.css')}}"/>*/
/* */
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*      */
/*   <div class="login_page_wrapper">*/
/*                    */
/*                          */
/* */
/*       {% if error %}*/
/*           <div class="uk-form-row">*/
/*               <div class="alert alert-danger" style="background-color: red;color: white">*/
/* */
/*                   {{ error.messageKey|trans(error.messageData, 'security') }}*/
/*               </div>*/
/*           </div>{% endif %}*/
/*         <div class="md-card" id="login_card">*/
/*             <div class="md-card-content large-padding" id="login_form">*/
/*                 <div class="login_heading">*/
/*                     <center>  <img src="{{ asset('assets/img/logo.png') }}"class="thumbnail" style=""/></center>*/
/*                 </div>*/
/*                 <form action="{{ path('fos_user_security_check') }}" method="post" >*/
/*                      <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*                     <div class="uk-form-row">*/
/*                         <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*                         <input class="md-input" type="text" id="login_username" name="_username" />*/
/*                     </div>*/
/*                     <div class="uk-form-row">*/
/*                          <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*                         <input class="md-input" type="password" id="login_password" name="_password" />*/
/*                     </div>*/
/*                     <div class="uk-margin-medium-top">*/
/*                         <input type="submit" class="md-btn md-btn-primary md-btn-block md-btn-large" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/*                     */
/*                     */
/*                     </div>*/
/*                      */
/*                     <div class="uk-margin-top">*/
/*                            <span class="icheck-inline">*/
/*                             <input type="checkbox" name="login_page_stay_signed" id="login_page_stay_signed" data-md-icheck />*/
/*                                 <a href="{{ path('fos_user_resetting_request') }}" class="inline-label">Forgot password?</a>*/
/*            */
/*                         </span>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*             */
/*             */
/*             */
/*         </div>*/
/*         */
/*     </div>*/
/*  {# uncomment the following lines to combine and minimize JavaScript assets with Assetic*/
/*             {% javascripts filter="?jsqueeze" output="js/app.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/jquery-2.1.4.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/moment.min.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/bootstrap-3.3.4.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/highlight.pack.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/bootstrap-datetimepicker.min.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/main.js" %}*/
/*                 <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*         #}*/
/*   <!-- common functions -->*/
/*     <script src="{{ asset('assets/js/common.min.js')}}"></script>*/
/*     <!-- uikit functions -->*/
/*      */
/*      <script src="{{ asset('assets/js/uikit_custom.min.js')}}"></script>*/
/*     <!-- altair core functions -->*/
/*     */
/*  <script src="{{ asset('assets/js/altair_admin_common.min.js')}}"></script>*/
/*     <!-- altair login page functions -->*/
/*     */
/*  <script src="{{ asset('assets/js/pages/login.min.js')}}"></script>*/
/*  <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*             <script src="{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}"></script>*/
/*       */
/*              */
/*         {% endblock %}*/
/* */
/*       */
/* </body>*/
/* </html>*/
