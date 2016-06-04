<?php

/* SgDatatablesBundle:Datatable:options.html.twig */
class __TwigTemplate_aeb54cba777ea9641cba8027c43b880ce45cc55b8892d66bd7fc3b286a3feb9e extends Twig_Template
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
        // line 1
        echo "\"displayStart\": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : null), "displayStart", array()), "html", null, true);
        echo ",

";
        // line 3
        if (($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : null), "deferLoading", array()) >= 0)) {
            // line 4
            echo "    \"deferLoading\": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : null), "deferLoading", array()), "html", null, true);
            echo ",
";
        }
        // line 6
        echo "
";
        // line 7
        if (((false == $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : null), "useIntegrationOptions", array())) || (true == $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : null), "forceDom", array())))) {
            // line 8
            echo "    \"dom\": \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : null), "dom", array()), "js"), "html", null, true);
            echo "\",
";
        }
        // line 10
        echo "
\"lengthMenu\": ";
        // line 11
        echo $this->env->getExtension('sg_datatables_twig_extension')->lengthJoin($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : null), "lengthMenu", array()));
        echo ",
\"orderClasses\": ";
        // line 12
        echo (($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : null), "orderClasses", array())) ? ("true") : ("false"));
        echo ",
\"order\": ";
        // line 13
        echo twig_jsonencode_filter($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : null), "order", array()));
        echo ",
\"orderMulti\": ";
        // line 14
        echo (($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : null), "orderMulti", array())) ? ("true") : ("false"));
        echo ",

\"pageLength\": ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : null), "pageLength", array()), "html", null, true);
        echo ",
\"pagingType\": \"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : null), "pagingType", array()), "html", null, true);
        echo "\",

";
        // line 19
        if ((false == $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : null), "useIntegrationOptions", array()))) {
            // line 20
            echo "    \"renderer\": \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : null), "renderer", array()), "html", null, true);
            echo "\",
";
        }
        // line 22
        echo "
\"scrollCollapse\": ";
        // line 23
        echo (($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : null), "scrollCollapse", array())) ? ("true") : ("false"));
        echo ",
\"searchDelay\": ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : null), "searchDelay", array()), "html", null, true);
        echo ",
\"stateDuration\": ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : null), "stateDuration", array()), "html", null, true);
        echo ",

";
        // line 27
        if ($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : null), "stripeClasses", array())) {
            // line 28
            echo "    \"stripeClasses\": [";
            echo twig_jsonencode_filter(twig_join_filter($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : null), "stripeClasses", array()), ", "));
            echo "],
";
        }
        // line 30
        echo "
";
    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Datatable:options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 30,  99 => 28,  97 => 27,  92 => 25,  88 => 24,  84 => 23,  81 => 22,  75 => 20,  73 => 19,  68 => 17,  64 => 16,  59 => 14,  55 => 13,  51 => 12,  47 => 11,  44 => 10,  38 => 8,  36 => 7,  33 => 6,  27 => 4,  25 => 3,  19 => 1,);
    }
}
/* "displayStart": {{ view_options.displayStart }},*/
/* */
/* {% if view_options.deferLoading >= 0 %}*/
/*     "deferLoading": {{ view_options.deferLoading }},*/
/* {% endif %}*/
/* */
/* {% if false == view_options.useIntegrationOptions or true == view_options.forceDom %}*/
/*     "dom": "{{ view_options.dom|e('js') }}",*/
/* {% endif %}*/
/* */
/* "lengthMenu": {{ view_options.lengthMenu|length_join|raw }},*/
/* "orderClasses": {{ view_options.orderClasses ? 'true' : 'false' }},*/
/* "order": {{ view_options.order|json_encode()|raw }},*/
/* "orderMulti": {{ view_options.orderMulti ? 'true' : 'false' }},*/
/* */
/* "pageLength": {{ view_options.pageLength }},*/
/* "pagingType": "{{ view_options.pagingType }}",*/
/* */
/* {% if false == view_options.useIntegrationOptions %}*/
/*     "renderer": "{{ view_options.renderer }}",*/
/* {% endif %}*/
/* */
/* "scrollCollapse": {{ view_options.scrollCollapse ? 'true' : 'false' }},*/
/* "searchDelay": {{ view_options.searchDelay }},*/
/* "stateDuration": {{ view_options.stateDuration }},*/
/* */
/* {% if view_options.stripeClasses %}*/
/*     "stripeClasses": [{{ view_options.stripeClasses|join(", ")|json_encode|raw }}],*/
/* {% endif %}*/
/* */
/* {#*/
/* "class"               -> datatable_html.html.twig*/
/* "individualFiltering" -> datatable_js.html.twig*/
/* #}*/
/* */
