<?php

/* ::base.html.twig */
class __TwigTemplate_a231d6fa9c78441b38af8eedb0c95a3066fdc32f0116d0551e3d5c128a15de77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'head_javascripts' => array($this, 'block_head_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c4aa0d8fd2c7be64af929bfede60ed2b5c10f16551aad03f7468289bd52335f = $this->env->getExtension("native_profiler");
        $__internal_9c4aa0d8fd2c7be64af929bfede60ed2b5c10f16551aad03f7468289bd52335f->enter($__internal_9c4aa0d8fd2c7be64af929bfede60ed2b5c10f16551aad03f7468289bd52335f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
     
 <head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"initial-scale=1.0,maximum-scale=1.0,user-scalable=no\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name=\"msapplication-tap-highlight\" content=\"no\"/>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/favicon-16x16.png"), "html", null, true);
        echo "\" sizes=\"32x32\"/>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/favicon-32x32.png"), "html", null, true);
        echo "\" sizes=\"32x32\"/>
    
    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

   ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo " 
</head>
    <body class=\"top_menu\">
        ";
        // line 32
        $this->displayBlock('header', $context, $blocks);
        // line 347
        echo "        <div id=\"page_content\">
            <div id=\"page_content_inner\">
                ";
        // line 349
        $this->displayBlock('body', $context, $blocks);
        // line 352
        echo "
            </div>
        </div><!-- common functions -->
     ";
        // line 355
        $this->displayBlock('head_javascripts', $context, $blocks);
        // line 462
        echo "</body>
</html>
";
        
        $__internal_9c4aa0d8fd2c7be64af929bfede60ed2b5c10f16551aad03f7468289bd52335f->leave($__internal_9c4aa0d8fd2c7be64af929bfede60ed2b5c10f16551aad03f7468289bd52335f_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_236781922c57c75b1136d4d0b978d7bbb975967122a8da026ede2e7ebbdc1220 = $this->env->getExtension("native_profiler");
        $__internal_236781922c57c75b1136d4d0b978d7bbb975967122a8da026ede2e7ebbdc1220->enter($__internal_236781922c57c75b1136d4d0b978d7bbb975967122a8da026ede2e7ebbdc1220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Shalom Academy | App";
        
        $__internal_236781922c57c75b1136d4d0b978d7bbb975967122a8da026ede2e7ebbdc1220->leave($__internal_236781922c57c75b1136d4d0b978d7bbb975967122a8da026ede2e7ebbdc1220_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f5d387fdfa7f5cb89cabce90f036d26da402a5ad84566ecda675c8106e15e278 = $this->env->getExtension("native_profiler");
        $__internal_f5d387fdfa7f5cb89cabce90f036d26da402a5ad84566ecda675c8106e15e278->enter($__internal_f5d387fdfa7f5cb89cabce90f036d26da402a5ad84566ecda675c8106e15e278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "    <!-- uikit framework -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/uikit/css/uikit.almost-flat.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/main.min.css"), "html", null, true);
        echo "\" media=\"all\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/combined.min.css"), "html", null, true);
        echo "\" media=\"all\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/sweet-alert/sweet-alert.min.css"), "html", null, true);
        echo "\" media=\"all\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/select2.min.css"), "html", null, true);
        echo "\" media=\"all\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/dropify.css"), "html", null, true);
        echo "\" media=\"all\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("datatables/css/jquery.dataTables.min.css"), "html", null, true);
        echo "\" media=\"all\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("datatables/css/dataTables.uikit.min.css"), "html", null, true);
        echo "\" media=\"all\"/>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

  
  ";
        
        $__internal_f5d387fdfa7f5cb89cabce90f036d26da402a5ad84566ecda675c8106e15e278->leave($__internal_f5d387fdfa7f5cb89cabce90f036d26da402a5ad84566ecda675c8106e15e278_prof);

    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
        $__internal_626d38ef75100169a1b0dafc7b0e8b97a421209341993ac618eadf85a8d6dc63 = $this->env->getExtension("native_profiler");
        $__internal_626d38ef75100169a1b0dafc7b0e8b97a421209341993ac618eadf85a8d6dc63->enter($__internal_626d38ef75100169a1b0dafc7b0e8b97a421209341993ac618eadf85a8d6dc63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 33
        echo "             <header id=\"header_main\">
        <div class=\"header_main_content\">
            <nav class=\"uk-navbar\">
                                    <div class=\"main_logo_top\">
                                        <a href=\"/dashboard\"><img  src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"\" height=\"15\" width=\"71\"/></a>
                                        <span  style=\"color:white\"  >Shalom Academy High School  | Mr Ocansey</span>
                                    </div>
                                
                <!-- secondary sidebar switch -->
                <a href=\"#\" id=\"sidebar_secondary_toggle\" class=\"sSwitch sSwitch_right sidebar_secondary_check\">
                    <span class=\"sSwitchIcon\"></span>
                </a>
                
                <div class=\"uk-navbar-flip\">
                    <ul class=\"uk-navbar-nav user_actions\">
                        <li><a href=\"#\" id=\"full_screen_toggle\" class=\"user_action_icon uk-visible-large\"><i class=\"material-icons md-24 md-light\">&#xE5D0;</i></a></li>
                        <li><a href=\"#\" id=\"main_search_btn\" class=\"user_action_icon\"><i class=\"material-icons md-24 md-light\">&#xE8B6;</i></a></li>
                        <li data-uk-dropdown=\"{mode:'click',pos:'bottom-right'}\">
                            <a href=\"#\" class=\"user_action_icon\"><i class=\"material-icons md-24 md-light\">&#xE7F4;</i><span class=\"uk-badge\">16</span></a>
                            <div class=\"uk-dropdown uk-dropdown-xlarge\">
                                <div class=\"md-card-content\">
                                    <ul class=\"uk-tab uk-tab-grid\" data-uk-tab=\"{connect:'#header_alerts',animation:'slide-horizontal'}\">
                                        <li class=\"uk-width-1-2 uk-active\"><a href=\"#\" class=\"js-uk-prevent uk-text-small\">Messages (12)</a></li>
                                        <li class=\"uk-width-1-2\"><a href=\"#\" class=\"js-uk-prevent uk-text-small\">Alerts (4)</a></li>
                                    </ul>
                                    <ul id=\"header_alerts\" class=\"uk-switcher uk-margin\">
                                        <li>
                                            <ul class=\"md-list md-list-addon\">
                                                <li>
                                                    <div class=\"md-list-addon-element\">
                                                        <span class=\"md-user-letters md-bg-cyan\">ao</span>
                                                    </div>
                                                    <div class=\"md-list-content\">
                                                        <span class=\"md-list-heading\"><a href=\"pages_mailbox.html\">Consequatur ut repudiandae.</a></span>
                                                        <span class=\"uk-text-small uk-text-muted\">Et sunt qui quod aut laborum et nisi.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"md-list-addon-element\">
                                                        <img class=\"md-user-image md-list-addon-avatar\" src=\"assets/img/avatars/avatar_07_tn.png\" alt=\"\"/>
                                                    </div>
                                                    <div class=\"md-list-content\">
                                                        <span class=\"md-list-heading\"><a href=\"pages_mailbox.html\">Sunt sequi.</a></span>
                                                        <span class=\"uk-text-small uk-text-muted\">Beatae quibusdam sed possimus pariatur optio repellendus.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"md-list-addon-element\">
                                                        <span class=\"md-user-letters md-bg-light-green\">qi</span>
                                                    </div>
                                                    <div class=\"md-list-content\">
                                                        <span class=\"md-list-heading\"><a href=\"pages_mailbox.html\">Et voluptatum ut.</a></span>
                                                        <span class=\"uk-text-small uk-text-muted\">Est et nostrum dignissimos suscipit nihil animi voluptatem quam.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"md-list-addon-element\">
                                                        <img class=\"md-user-image md-list-addon-avatar\" src=\"assets/img/avatars/avatar_02_tn.png\" alt=\"\"/>
                                                    </div>
                                                    <div class=\"md-list-content\">
                                                        <span class=\"md-list-heading\"><a href=\"pages_mailbox.html\">Similique iure et.</a></span>
                                                        <span class=\"uk-text-small uk-text-muted\">Laborum et alias veritatis accusamus sit consequatur quod.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"md-list-addon-element\">
                                                        <img class=\"md-user-image md-list-addon-avatar\" src=\"assets/img/avatars/avatar_09_tn.png\" alt=\"\"/>
                                                    </div>
                                                    <div class=\"md-list-content\">
                                                        <span class=\"md-list-heading\"><a href=\"pages_mailbox.html\">Repellendus consequuntur.</a></span>
                                                        <span class=\"uk-text-small uk-text-muted\">Nesciunt et id eum quas est soluta aut et.</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class=\"uk-text-center uk-margin-top uk-margin-small-bottom\">
                                                <a href=\"page_mailbox.html\" class=\"md-btn md-btn-flat md-btn-flat-primary js-uk-prevent\">Show All</a>
                                            </div>
                                        </li>
                                        <li>
                                            <ul class=\"md-list md-list-addon\">
                                                <li>
                                                    <div class=\"md-list-addon-element\">
                                                        <i class=\"md-list-addon-icon material-icons uk-text-warning\">&#xE8B2;</i>
                                                    </div>
                                                    <div class=\"md-list-content\">
                                                        <span class=\"md-list-heading\">Repudiandae accusantium.</span>
                                                        <span class=\"uk-text-small uk-text-muted uk-text-truncate\">Et fugit ipsum quia non ducimus quo.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"md-list-addon-element\">
                                                        <i class=\"md-list-addon-icon material-icons uk-text-success\">&#xE88F;</i>
                                                    </div>
                                                    <div class=\"md-list-content\">
                                                        <span class=\"md-list-heading\">Eos earum qui.</span>
                                                        <span class=\"uk-text-small uk-text-muted uk-text-truncate\">Accusamus nisi vitae dolorem et vel repudiandae ratione tenetur.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"md-list-addon-element\">
                                                        <i class=\"md-list-addon-icon material-icons uk-text-danger\">&#xE001;</i>
                                                    </div>
                                                    <div class=\"md-list-content\">
                                                        <span class=\"md-list-heading\">Rerum accusantium.</span>
                                                        <span class=\"uk-text-small uk-text-muted uk-text-truncate\">Ut voluptatem eos sapiente hic qui molestiae.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"md-list-addon-element\">
                                                        <i class=\"md-list-addon-icon material-icons uk-text-primary\">&#xE8FD;</i>
                                                    </div>
                                                    <div class=\"md-list-content\">
                                                        <span class=\"md-list-heading\">Id molestias.</span>
                                                        <span class=\"uk-text-small uk-text-muted uk-text-truncate\">Excepturi delectus rem doloribus quia fugiat.</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li data-uk-dropdown=\"{mode:'click',pos:'bottom-right'}\">
                            <a href=\"#\" class=\"user_action_image\"><img class=\"md-user-image\" style=\"height: auto;width: 30px\" src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("albums/profile/gad.jpg"), "html", null, true);
        echo "\"  alt=\"\"/></a>
                            <div class=\"uk-dropdown uk-dropdown-small\">
                                <ul class=\"uk-nav js-uk-prevent\">
                                    <li><a href=\"page_user_profile.html\">My profile</a></li>
                                    <li><a href=\"page_settings.html\">Settings</a></li>
                                   <li><a href='";
        // line 161
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "'>Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class=\"header_main_search_form\">
            <i class=\"md-icon header_main_search_close material-icons\">&#xE5CD;</i>
            
        </div>
    </header><!-- main header end -->
     <div id=\"top_bar\">
    <div class=\"md-top-bar\">
        <ul id=\"menu_top\" class=\"uk-clearfix\">
            <li class=\"uk-hidden-small\"><a href=\"dashboard\"><i class=\"material-icons\">&#xE88A;</i></a></li>
            <li data-uk-dropdown class=\"uk-hidden-small\">
               
               
                <a href=\"#\"><i class=\"sidebar-menu-icon material-icons md-18\">school</i><span>Administration Module</span></a>
                <div class=\"uk-dropdown uk-dropdown-scrollable\">
                    <ul class=\"uk-nav uk-nav-dropdown\">
                         
                        <li><a href=''>Students</a></li>
                        <li><a href=''>Add Students</a></li>
                        <li><a href=''>Add Students</a></li>
                     
                        <li><a href=\"components_buttons.html\"> Buttons</a></li>
                        <li><a href=\"components_cards.html\">Cards</a></li>
                        <li><a href=\"components_colors.html\">Colors</a></li>
                        <li><a href=\"components_common.html\">Common</a></li>
                        <li><a href=\"components_dropdowns.html\">Dropdowns</a></li>
                        <li><a href=\"components_dynamic_grid.html\">Dynamic Grid</a></li>
                        <li><a href=\"components_grid.html\">Grid</a></li>
                        <li><a href=\"components_icons.html\">Icons</a></li>
                        <li><a href=\"components_modal.html\">Lightbox/Modal</a></li>
                        <li><a href=\"components_lists.html\">Lists</a></li>
                        <li><a href=\"components_nestable.html\">Nestable</a></li>
                        <li><a href=\"components_notifications.html\">Notifications</a></li>
                        <li><a href=\"components_preloaders.html\">Preloaders</a></li>
                        <li><a href=\"components_sortable.html\">Sortable</a></li>
                        <li><a href=\"components_tables.html\">Tables</a></li>
                        <li><a href=\"components_tables_examples.html\">Tables Examples</a></li>
                        <li><a href=\"components_tabs.html\">Tabs</a></li>
                        <li><a href=\"components_tooltips.html\">Tooltips</a></li>
                        <li><a href=\"components_typography.html\">Typography</a></li>
                    </ul>
                </div>
            </li>
            <li data-uk-dropdown class=\"uk-hidden-small\">
                <a href=\"#\"><i class=\"sidebar-menu-icon material-icons md-18\">book</i><span>Academics Modules</span></a>
                <div class=\"uk-dropdown uk-dropdown-scrollable\">
                    <ul class=\"uk-nav uk-nav-dropdown\">
                        <li><a href=\"components_accordion.html\">Accordions</a></li>
                        <li><a href=\"components_buttons.html\"> Buttons</a></li>
                        <li><a href=\"components_cards.html\">Cards</a></li>
                        <li><a href=\"components_colors.html\">Colors</a></li>
                        <li><a href=\"components_common.html\">Common</a></li>
                        <li><a href=\"components_dropdowns.html\">Dropdowns</a></li>
                        <li><a href=\"components_dynamic_grid.html\">Dynamic Grid</a></li>
                        <li><a href=\"components_grid.html\">Grid</a></li>
                        <li><a href=\"components_icons.html\">Icons</a></li>
                        <li><a href=\"components_modal.html\">Lightbox/Modal</a></li>
                        <li><a href=\"components_lists.html\">Lists</a></li>
                        <li><a href=\"components_nestable.html\">Nestable</a></li>
                        <li><a href=\"components_notifications.html\">Notifications</a></li>
                        <li><a href=\"components_preloaders.html\">Preloaders</a></li>
                        <li><a href=\"components_sortable.html\">Sortable</a></li>
                        <li><a href=\"components_tables.html\">Tables</a></li>
                        <li><a href=\"components_tables_examples.html\">Tables Examples</a></li>
                        <li><a href=\"components_tabs.html\">Tabs</a></li>
                        <li><a href=\"components_tooltips.html\">Tooltips</a></li>
                        <li><a href=\"components_typography.html\">Typography</a></li>
                    </ul>
                </div>
            </li>
            
             <li data-uk-dropdown class=\"uk-hidden-small\">
                <a href=\"#\"> <i class=\"sidebar-menu-icon material-icons\">work</i><span>Finance Module</span></a>
                <div class=\"uk-dropdown uk-dropdown-scrollable\">
                    <ul class=\"uk-nav uk-nav-dropdown\">
                        <li><a href=''>Create Banks</a></li>
                       
                         
                    </ul>
                </div>
            </li>
             
               <li data-uk-dropdown class=\"uk-hidden-small\">
                <a href=\"#\"> <i class=\"sidebar-menu-icon material-icons\">work</i><span>HR Module</span></a>
                <div class=\"uk-dropdown uk-dropdown-scrollable\">
                    <ul class=\"uk-nav uk-nav-dropdown\">
                        <li><a href=\"components_accordion.html\">Accordions</a></li>
                        <li><a href=\"components_buttons.html\"> Buttons</a></li>
                        <li><a href=\"components_cards.html\">Cards</a></li>
                        <li><a href=\"components_colors.html\">Colors</a></li>
                        <li><a href=\"components_common.html\">Common</a></li>
                        <li><a href=\"components_dropdowns.html\">Dropdowns</a></li>
                        <li><a href=\"components_dynamic_grid.html\">Dynamic Grid</a></li>
                        <li><a href=\"components_grid.html\">Grid</a></li>
                        <li><a href=\"components_icons.html\">Icons</a></li>
                        <li><a href=\"components_modal.html\">Lightbox/Modal</a></li>
                        <li><a href=\"components_lists.html\">Lists</a></li>
                        <li><a href=\"components_nestable.html\">Nestable</a></li>
                        <li><a href=\"components_notifications.html\">Notifications</a></li>
                        <li><a href=\"components_preloaders.html\">Preloaders</a></li>
                        <li><a href=\"components_sortable.html\">Sortable</a></li>
                        <li><a href=\"components_tables.html\">Tables</a></li>
                        <li><a href=\"components_tables_examples.html\">Tables Examples</a></li>
                        <li><a href=\"components_tabs.html\">Tabs</a></li>
                        <li><a href=\"components_tooltips.html\">Tooltips</a></li>
                        <li><a href=\"components_typography.html\">Typography</a></li>
                    </ul>
                </div>
            </li>
               <li data-uk-dropdown class=\"uk-hidden-small\">
                <a href=\"#\"> <i class=\"sidebar-menu-icon material-icons\">work</i><span>Laiason Module</span></a>
                <div class=\"uk-dropdown uk-dropdown-scrollable\">
                    <ul class=\"uk-nav uk-nav-dropdown\">
                        <li><a href=\"components_accordion.html\">Accordions</a></li>
                        <li><a href=\"components_buttons.html\"> Buttons</a></li>
                        <li><a href=\"components_cards.html\">Cards</a></li>
                        <li><a href=\"components_colors.html\">Colors</a></li>
                        <li><a href=\"components_common.html\">Common</a></li>
                        <li><a href=\"components_dropdowns.html\">Dropdowns</a></li>
                        <li><a href=\"components_dynamic_grid.html\">Dynamic Grid</a></li>
                        <li><a href=\"components_grid.html\">Grid</a></li>
                        <li><a href=\"components_icons.html\">Icons</a></li>
                        <li><a href=\"components_modal.html\">Lightbox/Modal</a></li>
                        <li><a href=\"components_lists.html\">Lists</a></li>
                        <li><a href=\"components_nestable.html\">Nestable</a></li>
                        <li><a href=\"components_notifications.html\">Notifications</a></li>
                        <li><a href=\"components_preloaders.html\">Preloaders</a></li>
                        <li><a href=\"components_sortable.html\">Sortable</a></li>
                        <li><a href=\"components_tables.html\">Tables</a></li>
                        <li><a href=\"components_tables_examples.html\">Tables Examples</a></li>
                        <li><a href=\"components_tabs.html\">Tabs</a></li>
                        <li><a href=\"components_tooltips.html\">Tooltips</a></li>
                        <li><a href=\"components_typography.html\">Typography</a></li>
                    </ul>
                </div>
            </li>
               <li data-uk-dropdown class=\"uk-hidden-small\">
                <a href=\"#\"> <i class=\"sidebar-menu-icon material-icons\">work</i><span>Users</span></a>
                <div class=\"uk-dropdown uk-dropdown-scrollable\">
                    <ul class=\"uk-nav uk-nav-dropdown\">
                        <li><a href=\"components_accordion.html\">Accordions</a></li>
                        <li><a href=\"components_buttons.html\"> Buttons</a></li>
                        <li><a href=\"components_cards.html\">Cards</a></li>
                        <li><a href=\"components_colors.html\">Colors</a></li>
                        <li><a href=\"components_common.html\">Common</a></li>
                        <li><a href=\"components_dropdowns.html\">Dropdowns</a></li>
                        <li><a href=\"components_dynamic_grid.html\">Dynamic Grid</a></li>
                        <li><a href=\"components_grid.html\">Grid</a></li>
                        <li><a href=\"components_icons.html\">Icons</a></li>
                        <li><a href=\"components_modal.html\">Lightbox/Modal</a></li>
                        <li><a href=\"components_lists.html\">Lists</a></li>
                        <li><a href=\"components_nestable.html\">Nestable</a></li>
                        <li><a href=\"components_notifications.html\">Notifications</a></li>
                        <li><a href=\"components_preloaders.html\">Preloaders</a></li>
                        <li><a href=\"components_sortable.html\">Sortable</a></li>
                        <li><a href=\"components_tables.html\">Tables</a></li>
                        <li><a href=\"components_tables_examples.html\">Tables Examples</a></li>
                        <li><a href=\"components_tabs.html\">Tabs</a></li>
                        <li><a href=\"components_tooltips.html\">Tooltips</a></li>
                        <li><a href=\"components_typography.html\">Typography</a></li>
                    </ul>
                </div>
            </li>
          
               <li data-uk-dropdown class=\"uk-hidden-small\">
                <a href=\"#\"> <span class=\"menu_icon\"><i class=\"material-icons\">&#xE8C0;</i></span><span>Settings</span></a>
                <div class=\"uk-dropdown uk-dropdown-scrollable\">
                    <ul class=\"uk-nav uk-nav-dropdown\">
                         
                        <li><a href='";
        // line 337
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "'>Logout</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>   
        
        
        ";
        
        $__internal_626d38ef75100169a1b0dafc7b0e8b97a421209341993ac618eadf85a8d6dc63->leave($__internal_626d38ef75100169a1b0dafc7b0e8b97a421209341993ac618eadf85a8d6dc63_prof);

    }

    // line 349
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4818b68e7e426738101f7397c898d29be79d68a96a9f0170155429ffdf0f209 = $this->env->getExtension("native_profiler");
        $__internal_f4818b68e7e426738101f7397c898d29be79d68a96a9f0170155429ffdf0f209->enter($__internal_f4818b68e7e426738101f7397c898d29be79d68a96a9f0170155429ffdf0f209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 350
        echo " 
                ";
        
        $__internal_f4818b68e7e426738101f7397c898d29be79d68a96a9f0170155429ffdf0f209->leave($__internal_f4818b68e7e426738101f7397c898d29be79d68a96a9f0170155429ffdf0f209_prof);

    }

    // line 355
    public function block_head_javascripts($context, array $blocks = array())
    {
        $__internal_910489b572d2b714cf295a4f7849bf84d99904e1f381490f61675ee29f835075 = $this->env->getExtension("native_profiler");
        $__internal_910489b572d2b714cf295a4f7849bf84d99904e1f381490f61675ee29f835075->enter($__internal_910489b572d2b714cf295a4f7849bf84d99904e1f381490f61675ee29f835075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascripts"));

        // line 356
        echo "         <!-- common functions -->
         <script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/common.min.js"), "html", null, true);
        echo "\"></script>
         <!-- uikit functions -->

         <script src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/uikit_custom.min.js"), "html", null, true);
        echo "\"></script>
         <!-- altair core functions -->

         <script src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/altair_admin_common.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/dropify.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/file_input.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/uikit/uikit.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/sweet-alert/sweet-alert.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/vue.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/vue-form.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/tableexport/tableExport.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/tableexport/jquery.base64.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/tableexport/html2canvas.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/tableexport/jspdf/libs/sprintf.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/tableexport/jspdf/jspdf.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/tableexport/jspdf/libs/base64.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("datatables/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("datatables/js/dataTables.uikit.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("datatables/js/plugins_datatables.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("datatables/js/datatables_uikit.min.js"), "html", null, true);
        echo "\"></script>

         <script src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/tablesorter/dist/js/jquery.tablesorter.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/tablesorter/dist/js/jquery.tablesorter.widgets.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/tablesorter/dist/js/widgets/widget-alignChar.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/tablesorter/dist/js/widgets/widget-columnSelector.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/tablesorter/dist/js/widgets/widget-print.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/pages/plugins_tablesorter.min.js"), "html", null, true);
        echo "\"></script>

      
         
      
   
     <script language=\"javascript\" type=\"text/javascript\">
      
       \$(document).ready(function(){
         \$('select').select2({ width: \"resolve\" });

  
       });


        
            function printDiv(divID) {
               //Get the HTML of div
               var divElements = document.getElementById(divID).innerHTML;
               //Get the HTML of whole page
               var oldPage = document.body.innerHTML;

               //Reset the page's HTML with div's HTML only
               document.body.innerHTML = 
                 \"<html><head><title></title></head><body>\" + 
                 divElements + \"</body>\";

               //Print Page
               window.print();

               //Restore orignal HTML
               document.body.innerHTML = oldPage;


           }
      
       function recalculateSum()
       {
           var num1 = parseFloat(document.getElementById(\"pay\").value);
           var num2 = parseFloat(document.getElementById(\"bill\").value);



                   document.getElementById(\"amount_left\").value =( num2-  num1)    ;

        }         
       function MM_openBrWindow(theURL,winName,features) { //v2.0
         window.open(theURL,winName,features);
       }      
\t\t\t\t\t\t
       function printpage()
       {
          type=document.getElementById(\"type\").value;
             draft=document.getElementById(\"draft\").value;

         if(draft==''){ alert('PLEASE TYPE DRAFT NO');
         return false;
         }
  
         if(type==''){ alert('PLEASE SELECT PAYMENT TYPE');
         return false;
         }
  
          pay=document.getElementById(\"pay\").value;
          stuid=document.getElementById(\"indexno\").value;
          receipt=document.getElementById(\"receiptno\").value;
          draft=document.getElementById(\"draft\").value;
 
       }
       </script>
       
        <script src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
       <script src=\"";
        // line 460
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    ";
        
        $__internal_910489b572d2b714cf295a4f7849bf84d99904e1f381490f61675ee29f835075->leave($__internal_910489b572d2b714cf295a4f7849bf84d99904e1f381490f61675ee29f835075_prof);

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
        return array (  692 => 460,  688 => 459,  614 => 388,  610 => 387,  606 => 386,  602 => 385,  598 => 384,  594 => 383,  589 => 381,  585 => 380,  581 => 379,  577 => 378,  573 => 377,  569 => 376,  565 => 375,  561 => 374,  557 => 373,  553 => 372,  549 => 371,  545 => 370,  541 => 369,  537 => 368,  533 => 367,  529 => 366,  525 => 365,  521 => 364,  517 => 363,  511 => 360,  505 => 357,  502 => 356,  496 => 355,  488 => 350,  482 => 349,  465 => 337,  286 => 161,  278 => 156,  156 => 37,  150 => 33,  144 => 32,  132 => 24,  128 => 23,  124 => 22,  120 => 21,  116 => 20,  112 => 19,  108 => 18,  104 => 17,  101 => 16,  95 => 15,  83 => 13,  74 => 462,  72 => 355,  67 => 352,  65 => 349,  61 => 347,  59 => 32,  54 => 29,  52 => 15,  47 => 13,  42 => 11,  38 => 10,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*      */
/*  <head>*/
/*     <meta charset="UTF-8">*/
/*     <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <!-- Remove Tap Highlight on Windows Phone IE -->*/
/*     <meta name="msapplication-tap-highlight" content="no"/>*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon-16x16.png') }}" sizes="32x32"/>*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon-32x32.png') }}" sizes="32x32"/>*/
/*     */
/*     <title>{% block title %}Shalom Academy | App{% endblock %}</title>*/
/* */
/*    {% block stylesheets %}*/
/*     <!-- uikit framework -->*/
/*     <link rel="stylesheet" href="{{ asset('assets/plugins/uikit/css/uikit.almost-flat.min.css')}}"/>*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/main.min.css')}}" media="all"/>*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/combined.min.css')}}" media="all"/>*/
/*     <link rel="stylesheet" href="{{ asset('assets/plugins/sweet-alert/sweet-alert.min.css')}}" media="all"/>*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css')}}" media="all"/>*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/dropify.css')}}" media="all"/>*/
/*     <link rel="stylesheet" href="{{ asset('datatables/css/jquery.dataTables.min.css')}}" media="all"/>*/
/*     <link rel="stylesheet" href="{{ asset('datatables/css/dataTables.uikit.min.css')}}" media="all"/>*/
/*     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/
/* */
/*   */
/*   {% endblock %}*/
/*  */
/* </head>*/
/*     <body class="top_menu">*/
/*         {% block header %}*/
/*              <header id="header_main">*/
/*         <div class="header_main_content">*/
/*             <nav class="uk-navbar">*/
/*                                     <div class="main_logo_top">*/
/*                                         <a href="/dashboard"><img  src="{{ asset('assets/img/logo.png') }}" alt="" height="15" width="71"/></a>*/
/*                                         <span  style="color:white"  >Shalom Academy High School  | Mr Ocansey</span>*/
/*                                     </div>*/
/*                                 */
/*                 <!-- secondary sidebar switch -->*/
/*                 <a href="#" id="sidebar_secondary_toggle" class="sSwitch sSwitch_right sidebar_secondary_check">*/
/*                     <span class="sSwitchIcon"></span>*/
/*                 </a>*/
/*                 */
/*                 <div class="uk-navbar-flip">*/
/*                     <ul class="uk-navbar-nav user_actions">*/
/*                         <li><a href="#" id="full_screen_toggle" class="user_action_icon uk-visible-large"><i class="material-icons md-24 md-light">&#xE5D0;</i></a></li>*/
/*                         <li><a href="#" id="main_search_btn" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE8B6;</i></a></li>*/
/*                         <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">*/
/*                             <a href="#" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE7F4;</i><span class="uk-badge">16</span></a>*/
/*                             <div class="uk-dropdown uk-dropdown-xlarge">*/
/*                                 <div class="md-card-content">*/
/*                                     <ul class="uk-tab uk-tab-grid" data-uk-tab="{connect:'#header_alerts',animation:'slide-horizontal'}">*/
/*                                         <li class="uk-width-1-2 uk-active"><a href="#" class="js-uk-prevent uk-text-small">Messages (12)</a></li>*/
/*                                         <li class="uk-width-1-2"><a href="#" class="js-uk-prevent uk-text-small">Alerts (4)</a></li>*/
/*                                     </ul>*/
/*                                     <ul id="header_alerts" class="uk-switcher uk-margin">*/
/*                                         <li>*/
/*                                             <ul class="md-list md-list-addon">*/
/*                                                 <li>*/
/*                                                     <div class="md-list-addon-element">*/
/*                                                         <span class="md-user-letters md-bg-cyan">ao</span>*/
/*                                                     </div>*/
/*                                                     <div class="md-list-content">*/
/*                                                         <span class="md-list-heading"><a href="pages_mailbox.html">Consequatur ut repudiandae.</a></span>*/
/*                                                         <span class="uk-text-small uk-text-muted">Et sunt qui quod aut laborum et nisi.</span>*/
/*                                                     </div>*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <div class="md-list-addon-element">*/
/*                                                         <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_07_tn.png" alt=""/>*/
/*                                                     </div>*/
/*                                                     <div class="md-list-content">*/
/*                                                         <span class="md-list-heading"><a href="pages_mailbox.html">Sunt sequi.</a></span>*/
/*                                                         <span class="uk-text-small uk-text-muted">Beatae quibusdam sed possimus pariatur optio repellendus.</span>*/
/*                                                     </div>*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <div class="md-list-addon-element">*/
/*                                                         <span class="md-user-letters md-bg-light-green">qi</span>*/
/*                                                     </div>*/
/*                                                     <div class="md-list-content">*/
/*                                                         <span class="md-list-heading"><a href="pages_mailbox.html">Et voluptatum ut.</a></span>*/
/*                                                         <span class="uk-text-small uk-text-muted">Est et nostrum dignissimos suscipit nihil animi voluptatem quam.</span>*/
/*                                                     </div>*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <div class="md-list-addon-element">*/
/*                                                         <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt=""/>*/
/*                                                     </div>*/
/*                                                     <div class="md-list-content">*/
/*                                                         <span class="md-list-heading"><a href="pages_mailbox.html">Similique iure et.</a></span>*/
/*                                                         <span class="uk-text-small uk-text-muted">Laborum et alias veritatis accusamus sit consequatur quod.</span>*/
/*                                                     </div>*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <div class="md-list-addon-element">*/
/*                                                         <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_09_tn.png" alt=""/>*/
/*                                                     </div>*/
/*                                                     <div class="md-list-content">*/
/*                                                         <span class="md-list-heading"><a href="pages_mailbox.html">Repellendus consequuntur.</a></span>*/
/*                                                         <span class="uk-text-small uk-text-muted">Nesciunt et id eum quas est soluta aut et.</span>*/
/*                                                     </div>*/
/*                                                 </li>*/
/*                                             </ul>*/
/*                                             <div class="uk-text-center uk-margin-top uk-margin-small-bottom">*/
/*                                                 <a href="page_mailbox.html" class="md-btn md-btn-flat md-btn-flat-primary js-uk-prevent">Show All</a>*/
/*                                             </div>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <ul class="md-list md-list-addon">*/
/*                                                 <li>*/
/*                                                     <div class="md-list-addon-element">*/
/*                                                         <i class="md-list-addon-icon material-icons uk-text-warning">&#xE8B2;</i>*/
/*                                                     </div>*/
/*                                                     <div class="md-list-content">*/
/*                                                         <span class="md-list-heading">Repudiandae accusantium.</span>*/
/*                                                         <span class="uk-text-small uk-text-muted uk-text-truncate">Et fugit ipsum quia non ducimus quo.</span>*/
/*                                                     </div>*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <div class="md-list-addon-element">*/
/*                                                         <i class="md-list-addon-icon material-icons uk-text-success">&#xE88F;</i>*/
/*                                                     </div>*/
/*                                                     <div class="md-list-content">*/
/*                                                         <span class="md-list-heading">Eos earum qui.</span>*/
/*                                                         <span class="uk-text-small uk-text-muted uk-text-truncate">Accusamus nisi vitae dolorem et vel repudiandae ratione tenetur.</span>*/
/*                                                     </div>*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <div class="md-list-addon-element">*/
/*                                                         <i class="md-list-addon-icon material-icons uk-text-danger">&#xE001;</i>*/
/*                                                     </div>*/
/*                                                     <div class="md-list-content">*/
/*                                                         <span class="md-list-heading">Rerum accusantium.</span>*/
/*                                                         <span class="uk-text-small uk-text-muted uk-text-truncate">Ut voluptatem eos sapiente hic qui molestiae.</span>*/
/*                                                     </div>*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <div class="md-list-addon-element">*/
/*                                                         <i class="md-list-addon-icon material-icons uk-text-primary">&#xE8FD;</i>*/
/*                                                     </div>*/
/*                                                     <div class="md-list-content">*/
/*                                                         <span class="md-list-heading">Id molestias.</span>*/
/*                                                         <span class="uk-text-small uk-text-muted uk-text-truncate">Excepturi delectus rem doloribus quia fugiat.</span>*/
/*                                                     </div>*/
/*                                                 </li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </li>*/
/*                         <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">*/
/*                             <a href="#" class="user_action_image"><img class="md-user-image" style="height: auto;width: 30px" src="{{ asset('albums/profile/gad.jpg') }}"  alt=""/></a>*/
/*                             <div class="uk-dropdown uk-dropdown-small">*/
/*                                 <ul class="uk-nav js-uk-prevent">*/
/*                                     <li><a href="page_user_profile.html">My profile</a></li>*/
/*                                     <li><a href="page_settings.html">Settings</a></li>*/
/*                                    <li><a href='{{ path('fos_user_security_logout') }}'>Logout</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </nav>*/
/*         </div>*/
/*         <div class="header_main_search_form">*/
/*             <i class="md-icon header_main_search_close material-icons">&#xE5CD;</i>*/
/*             */
/*         </div>*/
/*     </header><!-- main header end -->*/
/*      <div id="top_bar">*/
/*     <div class="md-top-bar">*/
/*         <ul id="menu_top" class="uk-clearfix">*/
/*             <li class="uk-hidden-small"><a href="dashboard"><i class="material-icons">&#xE88A;</i></a></li>*/
/*             <li data-uk-dropdown class="uk-hidden-small">*/
/*                */
/*                */
/*                 <a href="#"><i class="sidebar-menu-icon material-icons md-18">school</i><span>Administration Module</span></a>*/
/*                 <div class="uk-dropdown uk-dropdown-scrollable">*/
/*                     <ul class="uk-nav uk-nav-dropdown">*/
/*                          */
/*                         <li><a href=''>Students</a></li>*/
/*                         <li><a href=''>Add Students</a></li>*/
/*                         <li><a href=''>Add Students</a></li>*/
/*                      */
/*                         <li><a href="components_buttons.html"> Buttons</a></li>*/
/*                         <li><a href="components_cards.html">Cards</a></li>*/
/*                         <li><a href="components_colors.html">Colors</a></li>*/
/*                         <li><a href="components_common.html">Common</a></li>*/
/*                         <li><a href="components_dropdowns.html">Dropdowns</a></li>*/
/*                         <li><a href="components_dynamic_grid.html">Dynamic Grid</a></li>*/
/*                         <li><a href="components_grid.html">Grid</a></li>*/
/*                         <li><a href="components_icons.html">Icons</a></li>*/
/*                         <li><a href="components_modal.html">Lightbox/Modal</a></li>*/
/*                         <li><a href="components_lists.html">Lists</a></li>*/
/*                         <li><a href="components_nestable.html">Nestable</a></li>*/
/*                         <li><a href="components_notifications.html">Notifications</a></li>*/
/*                         <li><a href="components_preloaders.html">Preloaders</a></li>*/
/*                         <li><a href="components_sortable.html">Sortable</a></li>*/
/*                         <li><a href="components_tables.html">Tables</a></li>*/
/*                         <li><a href="components_tables_examples.html">Tables Examples</a></li>*/
/*                         <li><a href="components_tabs.html">Tabs</a></li>*/
/*                         <li><a href="components_tooltips.html">Tooltips</a></li>*/
/*                         <li><a href="components_typography.html">Typography</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </li>*/
/*             <li data-uk-dropdown class="uk-hidden-small">*/
/*                 <a href="#"><i class="sidebar-menu-icon material-icons md-18">book</i><span>Academics Modules</span></a>*/
/*                 <div class="uk-dropdown uk-dropdown-scrollable">*/
/*                     <ul class="uk-nav uk-nav-dropdown">*/
/*                         <li><a href="components_accordion.html">Accordions</a></li>*/
/*                         <li><a href="components_buttons.html"> Buttons</a></li>*/
/*                         <li><a href="components_cards.html">Cards</a></li>*/
/*                         <li><a href="components_colors.html">Colors</a></li>*/
/*                         <li><a href="components_common.html">Common</a></li>*/
/*                         <li><a href="components_dropdowns.html">Dropdowns</a></li>*/
/*                         <li><a href="components_dynamic_grid.html">Dynamic Grid</a></li>*/
/*                         <li><a href="components_grid.html">Grid</a></li>*/
/*                         <li><a href="components_icons.html">Icons</a></li>*/
/*                         <li><a href="components_modal.html">Lightbox/Modal</a></li>*/
/*                         <li><a href="components_lists.html">Lists</a></li>*/
/*                         <li><a href="components_nestable.html">Nestable</a></li>*/
/*                         <li><a href="components_notifications.html">Notifications</a></li>*/
/*                         <li><a href="components_preloaders.html">Preloaders</a></li>*/
/*                         <li><a href="components_sortable.html">Sortable</a></li>*/
/*                         <li><a href="components_tables.html">Tables</a></li>*/
/*                         <li><a href="components_tables_examples.html">Tables Examples</a></li>*/
/*                         <li><a href="components_tabs.html">Tabs</a></li>*/
/*                         <li><a href="components_tooltips.html">Tooltips</a></li>*/
/*                         <li><a href="components_typography.html">Typography</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </li>*/
/*             */
/*              <li data-uk-dropdown class="uk-hidden-small">*/
/*                 <a href="#"> <i class="sidebar-menu-icon material-icons">work</i><span>Finance Module</span></a>*/
/*                 <div class="uk-dropdown uk-dropdown-scrollable">*/
/*                     <ul class="uk-nav uk-nav-dropdown">*/
/*                         <li><a href=''>Create Banks</a></li>*/
/*                        */
/*                          */
/*                     </ul>*/
/*                 </div>*/
/*             </li>*/
/*              */
/*                <li data-uk-dropdown class="uk-hidden-small">*/
/*                 <a href="#"> <i class="sidebar-menu-icon material-icons">work</i><span>HR Module</span></a>*/
/*                 <div class="uk-dropdown uk-dropdown-scrollable">*/
/*                     <ul class="uk-nav uk-nav-dropdown">*/
/*                         <li><a href="components_accordion.html">Accordions</a></li>*/
/*                         <li><a href="components_buttons.html"> Buttons</a></li>*/
/*                         <li><a href="components_cards.html">Cards</a></li>*/
/*                         <li><a href="components_colors.html">Colors</a></li>*/
/*                         <li><a href="components_common.html">Common</a></li>*/
/*                         <li><a href="components_dropdowns.html">Dropdowns</a></li>*/
/*                         <li><a href="components_dynamic_grid.html">Dynamic Grid</a></li>*/
/*                         <li><a href="components_grid.html">Grid</a></li>*/
/*                         <li><a href="components_icons.html">Icons</a></li>*/
/*                         <li><a href="components_modal.html">Lightbox/Modal</a></li>*/
/*                         <li><a href="components_lists.html">Lists</a></li>*/
/*                         <li><a href="components_nestable.html">Nestable</a></li>*/
/*                         <li><a href="components_notifications.html">Notifications</a></li>*/
/*                         <li><a href="components_preloaders.html">Preloaders</a></li>*/
/*                         <li><a href="components_sortable.html">Sortable</a></li>*/
/*                         <li><a href="components_tables.html">Tables</a></li>*/
/*                         <li><a href="components_tables_examples.html">Tables Examples</a></li>*/
/*                         <li><a href="components_tabs.html">Tabs</a></li>*/
/*                         <li><a href="components_tooltips.html">Tooltips</a></li>*/
/*                         <li><a href="components_typography.html">Typography</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </li>*/
/*                <li data-uk-dropdown class="uk-hidden-small">*/
/*                 <a href="#"> <i class="sidebar-menu-icon material-icons">work</i><span>Laiason Module</span></a>*/
/*                 <div class="uk-dropdown uk-dropdown-scrollable">*/
/*                     <ul class="uk-nav uk-nav-dropdown">*/
/*                         <li><a href="components_accordion.html">Accordions</a></li>*/
/*                         <li><a href="components_buttons.html"> Buttons</a></li>*/
/*                         <li><a href="components_cards.html">Cards</a></li>*/
/*                         <li><a href="components_colors.html">Colors</a></li>*/
/*                         <li><a href="components_common.html">Common</a></li>*/
/*                         <li><a href="components_dropdowns.html">Dropdowns</a></li>*/
/*                         <li><a href="components_dynamic_grid.html">Dynamic Grid</a></li>*/
/*                         <li><a href="components_grid.html">Grid</a></li>*/
/*                         <li><a href="components_icons.html">Icons</a></li>*/
/*                         <li><a href="components_modal.html">Lightbox/Modal</a></li>*/
/*                         <li><a href="components_lists.html">Lists</a></li>*/
/*                         <li><a href="components_nestable.html">Nestable</a></li>*/
/*                         <li><a href="components_notifications.html">Notifications</a></li>*/
/*                         <li><a href="components_preloaders.html">Preloaders</a></li>*/
/*                         <li><a href="components_sortable.html">Sortable</a></li>*/
/*                         <li><a href="components_tables.html">Tables</a></li>*/
/*                         <li><a href="components_tables_examples.html">Tables Examples</a></li>*/
/*                         <li><a href="components_tabs.html">Tabs</a></li>*/
/*                         <li><a href="components_tooltips.html">Tooltips</a></li>*/
/*                         <li><a href="components_typography.html">Typography</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </li>*/
/*                <li data-uk-dropdown class="uk-hidden-small">*/
/*                 <a href="#"> <i class="sidebar-menu-icon material-icons">work</i><span>Users</span></a>*/
/*                 <div class="uk-dropdown uk-dropdown-scrollable">*/
/*                     <ul class="uk-nav uk-nav-dropdown">*/
/*                         <li><a href="components_accordion.html">Accordions</a></li>*/
/*                         <li><a href="components_buttons.html"> Buttons</a></li>*/
/*                         <li><a href="components_cards.html">Cards</a></li>*/
/*                         <li><a href="components_colors.html">Colors</a></li>*/
/*                         <li><a href="components_common.html">Common</a></li>*/
/*                         <li><a href="components_dropdowns.html">Dropdowns</a></li>*/
/*                         <li><a href="components_dynamic_grid.html">Dynamic Grid</a></li>*/
/*                         <li><a href="components_grid.html">Grid</a></li>*/
/*                         <li><a href="components_icons.html">Icons</a></li>*/
/*                         <li><a href="components_modal.html">Lightbox/Modal</a></li>*/
/*                         <li><a href="components_lists.html">Lists</a></li>*/
/*                         <li><a href="components_nestable.html">Nestable</a></li>*/
/*                         <li><a href="components_notifications.html">Notifications</a></li>*/
/*                         <li><a href="components_preloaders.html">Preloaders</a></li>*/
/*                         <li><a href="components_sortable.html">Sortable</a></li>*/
/*                         <li><a href="components_tables.html">Tables</a></li>*/
/*                         <li><a href="components_tables_examples.html">Tables Examples</a></li>*/
/*                         <li><a href="components_tabs.html">Tabs</a></li>*/
/*                         <li><a href="components_tooltips.html">Tooltips</a></li>*/
/*                         <li><a href="components_typography.html">Typography</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </li>*/
/*           */
/*                <li data-uk-dropdown class="uk-hidden-small">*/
/*                 <a href="#"> <span class="menu_icon"><i class="material-icons">&#xE8C0;</i></span><span>Settings</span></a>*/
/*                 <div class="uk-dropdown uk-dropdown-scrollable">*/
/*                     <ul class="uk-nav uk-nav-dropdown">*/
/*                          */
/*                         <li><a href='{{ path('fos_user_security_logout') }}'>Logout</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* </div>   */
/*         */
/*         */
/*         {% endblock %}*/
/*         <div id="page_content">*/
/*             <div id="page_content_inner">*/
/*                 {% block body %}*/
/*  */
/*                 {% endblock %}*/
/* */
/*             </div>*/
/*         </div><!-- common functions -->*/
/*      {% block head_javascripts %}*/
/*          <!-- common functions -->*/
/*          <script src="{{ asset('assets/js/common.min.js')}}"></script>*/
/*          <!-- uikit functions -->*/
/* */
/*          <script src="{{ asset('assets/js/uikit_custom.min.js')}}"></script>*/
/*          <!-- altair core functions -->*/
/* */
/*          <script src="{{ asset('assets/js/altair_admin_common.min.js')}}"></script>*/
/*          <script src="{{ asset('assets/js/dropify.min.js')}}"></script>*/
/*          <script src="{{ asset('assets/js/file_input.min.js')}}"></script>*/
/*          <script src="{{ asset('assets/js/uikit/uikit.min.js')}}"></script>*/
/*          <script src="{{ asset('assets/js/select2.full.min.js')}}"></script>*/
/*          <script src="{{ asset('assets/plugins/sweet-alert/sweet-alert.min.js')}}"></script>*/
/*          <script src="{{ asset('assets/js/vue.min.js')}}"></script>*/
/*          <script src="{{ asset('assets/js/vue-form.min.js')}}"></script>*/
/*          <script src="{{ asset('assets/js/jquery-ui.min.js')}}"></script>*/
/*          <script src="{{ asset('assets/tableexport/tableExport.js')}}"></script>*/
/*          <script src="{{ asset('assets/tableexport/jquery.base64.js')}}"></script>*/
/*          <script src="{{ asset('assets/tableexport/html2canvas.js')}}"></script>*/
/*          <script src="{{ asset('assets/tableexport/jspdf/libs/sprintf.js')}}"></script>*/
/*          <script src="{{ asset('assets/tableexport/jspdf/jspdf.js')}}"></script>*/
/*          <script src="{{ asset('assets/tableexport/jspdf/libs/base64.js')}}"></script>*/
/*          <script src="{{ asset('datatables/js/jquery.dataTables.min.js')}}"></script>*/
/*          <script src="{{ asset('datatables/js/dataTables.uikit.min.js')}}"></script>*/
/*          <script src="{{ asset('datatables/js/plugins_datatables.min.js')}}"></script>*/
/*          <script src="{{ asset('datatables/js/datatables_uikit.min.js')}}"></script>*/
/* */
/*          <script src="{{ asset('assets/plugins/tablesorter/dist/js/jquery.tablesorter.min.js')}}"></script>*/
/*          <script src="{{ asset('assets/plugins/tablesorter/dist/js/jquery.tablesorter.widgets.min.js')}}"></script>*/
/*          <script src="{{ asset('assets/plugins/tablesorter/dist/js/widgets/widget-alignChar.min.js')}}"></script>*/
/*          <script src="{{ asset('assets/plugins/tablesorter/dist/js/widgets/widget-columnSelector.min.js')}}"></script>*/
/*          <script src="{{ asset('assets/plugins/tablesorter/dist/js/widgets/widget-print.min.js')}}"></script>*/
/*          <script src="{{ asset('assets/js/pages/plugins_tablesorter.min.js')}}"></script>*/
/* */
/*       */
/*          */
/*       */
/*    */
/*      <script language="javascript" type="text/javascript">*/
/*       */
/*        $(document).ready(function(){*/
/*          $('select').select2({ width: "resolve" });*/
/* */
/*   */
/*        });*/
/* */
/* */
/*         */
/*             function printDiv(divID) {*/
/*                //Get the HTML of div*/
/*                var divElements = document.getElementById(divID).innerHTML;*/
/*                //Get the HTML of whole page*/
/*                var oldPage = document.body.innerHTML;*/
/* */
/*                //Reset the page's HTML with div's HTML only*/
/*                document.body.innerHTML = */
/*                  "<html><head><title></title></head><body>" + */
/*                  divElements + "</body>";*/
/* */
/*                //Print Page*/
/*                window.print();*/
/* */
/*                //Restore orignal HTML*/
/*                document.body.innerHTML = oldPage;*/
/* */
/* */
/*            }*/
/*       */
/*        function recalculateSum()*/
/*        {*/
/*            var num1 = parseFloat(document.getElementById("pay").value);*/
/*            var num2 = parseFloat(document.getElementById("bill").value);*/
/* */
/* */
/* */
/*                    document.getElementById("amount_left").value =( num2-  num1)    ;*/
/* */
/*         }         */
/*        function MM_openBrWindow(theURL,winName,features) { //v2.0*/
/*          window.open(theURL,winName,features);*/
/*        }      */
/* 						*/
/*        function printpage()*/
/*        {*/
/*           type=document.getElementById("type").value;*/
/*              draft=document.getElementById("draft").value;*/
/* */
/*          if(draft==''){ alert('PLEASE TYPE DRAFT NO');*/
/*          return false;*/
/*          }*/
/*   */
/*          if(type==''){ alert('PLEASE SELECT PAYMENT TYPE');*/
/*          return false;*/
/*          }*/
/*   */
/*           pay=document.getElementById("pay").value;*/
/*           stuid=document.getElementById("indexno").value;*/
/*           receipt=document.getElementById("receiptno").value;*/
/*           draft=document.getElementById("draft").value;*/
/*  */
/*        }*/
/*        </script>*/
/*        */
/*         <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*        <script src="{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}"></script>*/
/*     {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
