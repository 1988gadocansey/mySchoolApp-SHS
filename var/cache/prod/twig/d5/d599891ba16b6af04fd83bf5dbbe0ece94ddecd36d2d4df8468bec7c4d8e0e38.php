<?php

/* ::base.html.twig */
class __TwigTemplate_e28e8de49059b8126b46109d59492eb43216e1f2f329952e0465ec31946e9510 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head_javascripts' => array($this, 'block_head_javascripts'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('head_javascripts', $context, $blocks);
        // line 23
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 26
        $this->displayBlock('header', $context, $blocks);
        // line 67
        echo "
        <div class=\"container body-container\">
            ";
        // line 69
        $this->displayBlock('body', $context, $blocks);
        // line 82
        echo "        </div>

        <hr />

        ";
        // line 86
        $this->displayBlock('footer', $context, $blocks);
        // line 98
        echo "
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "SgDatatablesBundleDemo";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css\">
            <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/s/bs-3.3.5/jszip-2.5.0,pdfmake-0.1.18,dt-1.10.10,b-1.1.0,b-colvis-1.1.0,b-flash-1.1.0,b-html5-1.1.0,b-print-1.1.0,r-2.0.0/datatables.min.css\">
            <link href=\"//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css\" rel=\"stylesheet\"/>
        ";
    }

    // line 13
    public function block_head_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "            <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
            <script src=\"//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment-with-locales.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
            <script src=\"//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js\"></script>
            <script src=\"https://cdn.datatables.net/s/bs-3.3.5/jszip-2.5.0,pdfmake-0.1.18,dt-1.10.10,b-1.1.0,b-colvis-1.1.0,b-flash-1.1.0,b-html5-1.1.0,b-print-1.1.0,r-2.0.0/datatables.min.js\"></script>
            <script src=\"//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js\"></script>
            <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
        ";
    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        // line 27
        echo "            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
                                SgDatatablesBundle Demo
                            </a>
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">
                                ";
        // line 43
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 44
            echo "                                    <li>
                                        <a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("post_index");
            echo "\">
                                            <i class=\"glyphicon glyphicon-th-list\"></i> Posts
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                                            <i class=\"glyphicon glyphicon-log-out\"></i> Logout
                                        </a>
                                    </li>
                                ";
        } else {
            // line 55
            echo "                                    <li>
                                        <a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">
                                            <i class=\"glyphicon glyphicon-log-in\"></i> Login
                                        </a>
                                    </li>
                                ";
        }
        // line 61
        echo "                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        ";
    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
        // line 70
        echo "                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-9\">
                        ";
        // line 72
        $this->displayBlock('main', $context, $blocks);
        // line 73
        echo "                        ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 74
        echo "                    </div>

                    <div id=\"sidebar\" class=\"col-sm-3\">
                        ";
        // line 77
        $this->displayBlock('sidebar', $context, $blocks);
        // line 79
        echo "                    </div>
                </div>
            ";
    }

    // line 72
    public function block_main($context, array $blocks = array())
    {
    }

    // line 73
    public function block_fos_user_content($context, array $blocks = array())
    {
    }

    // line 77
    public function block_sidebar($context, array $blocks = array())
    {
        // line 78
        echo "                        ";
    }

    // line 86
    public function block_footer($context, array $blocks = array())
    {
        // line 87
        echo "            <footer style=\"text-align: center\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-12\">
                            <p><small>&copy; ";
        // line 91
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - stwe</small></p>
                            <p><small>MIT License</small></p>
                        </div>
                    </div>
                </div>
            </footer>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 91,  222 => 87,  219 => 86,  215 => 78,  212 => 77,  207 => 73,  202 => 72,  196 => 79,  194 => 77,  189 => 74,  186 => 73,  184 => 72,  180 => 70,  177 => 69,  168 => 61,  160 => 56,  157 => 55,  149 => 50,  141 => 45,  138 => 44,  136 => 43,  121 => 31,  115 => 27,  112 => 26,  106 => 21,  102 => 20,  94 => 14,  91 => 13,  82 => 7,  79 => 6,  73 => 5,  66 => 98,  64 => 86,  58 => 82,  56 => 69,  52 => 67,  50 => 26,  43 => 23,  40 => 13,  38 => 6,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}SgDatatablesBundleDemo{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">*/
/*             <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">*/
/*             <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css">*/
/*             <link rel="stylesheet" href="https://cdn.datatables.net/s/bs-3.3.5/jszip-2.5.0,pdfmake-0.1.18,dt-1.10.10,b-1.1.0,b-colvis-1.1.0,b-flash-1.1.0,b-html5-1.1.0,b-print-1.1.0,r-2.0.0/datatables.min.css">*/
/*             <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>*/
/*         {% endblock %}*/
/*         {% block head_javascripts %}*/
/*             <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>*/
/*             <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment-with-locales.min.js"></script>*/
/*             <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>*/
/*             <script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>*/
/*             <script src="https://cdn.datatables.net/s/bs-3.3.5/jszip-2.5.0,pdfmake-0.1.18,dt-1.10.10,b-1.1.0,b-colvis-1.1.0,b-flash-1.1.0,b-html5-1.1.0,b-print-1.1.0,r-2.0.0/datatables.min.js"></script>*/
/*             <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>*/
/*             <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*             <script src="{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}"></script>*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block header %}*/
/*             <header>*/
/*                 <div class="navbar navbar-default navbar-static-top" role="navigation">*/
/*                     <div class="container">*/
/*                         <div class="navbar-header">*/
/*                             <a class="navbar-brand" href="{{ path('homepage') }}">*/
/*                                 SgDatatablesBundle Demo*/
/*                             </a>*/
/*                             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                                 <span class="sr-only">Toggle navigation</span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                             </button>*/
/*                         </div>*/
/*                         <div class="navbar-collapse collapse">*/
/*                             <ul class="nav navbar-nav navbar-right">*/
/*                                 {% if app.user %}*/
/*                                     <li>*/
/*                                         <a href="{{ path('post_index') }}">*/
/*                                             <i class="glyphicon glyphicon-th-list"></i> Posts*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{ path('fos_user_security_logout') }}">*/
/*                                             <i class="glyphicon glyphicon-log-out"></i> Logout*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 {% else %}*/
/*                                     <li>*/
/*                                         <a href="{{ path('fos_user_security_login') }}">*/
/*                                             <i class="glyphicon glyphicon-log-in"></i> Login*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 {% endif %}*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </header>*/
/*         {% endblock %}*/
/* */
/*         <div class="container body-container">*/
/*             {% block body %}*/
/*                 <div class="row">*/
/*                     <div id="main" class="col-sm-9">*/
/*                         {% block main %}{% endblock %}*/
/*                         {% block fos_user_content %}{% endblock %}*/
/*                     </div>*/
/* */
/*                     <div id="sidebar" class="col-sm-3">*/
/*                         {% block sidebar %}*/
/*                         {% endblock %}*/
/*                     </div>*/
/*                 </div>*/
/*             {% endblock %}*/
/*         </div>*/
/* */
/*         <hr />*/
/* */
/*         {% block footer %}*/
/*             <footer style="text-align: center">*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div id="footer-copyright" class="col-md-12">*/
/*                             <p><small>&copy; {{ 'now'|date('Y') }} - stwe</small></p>*/
/*                             <p><small>MIT License</small></p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </footer>*/
/*         {% endblock %}*/
/* */
/*     </body>*/
/* </html>*/
/* */
