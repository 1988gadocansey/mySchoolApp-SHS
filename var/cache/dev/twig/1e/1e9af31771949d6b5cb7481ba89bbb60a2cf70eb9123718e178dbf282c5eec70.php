<?php

/* SgDatatablesBundle:Datatable:options.html.twig */
class __TwigTemplate_4403967c3777220d2129f06608f0b3d8718d92af0ed513e07038dd585bf58023 extends Twig_Template
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
        $__internal_cbd5f306f566d1c1a7426e404cc00d4b22e957f9789fd19a7c6b53ebe0db5827 = $this->env->getExtension("native_profiler");
        $__internal_cbd5f306f566d1c1a7426e404cc00d4b22e957f9789fd19a7c6b53ebe0db5827->enter($__internal_cbd5f306f566d1c1a7426e404cc00d4b22e957f9789fd19a7c6b53ebe0db5827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:options.html.twig"));

        // line 1
        echo "\"displayStart\": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "displayStart", array()), "html", null, true);
        echo ",

";
        // line 3
        if (($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "deferLoading", array()) >= 0)) {
            // line 4
            echo "    \"deferLoading\": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "deferLoading", array()), "html", null, true);
            echo ",
";
        }
        // line 6
        echo "
";
        // line 7
        if (((false == $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "useIntegrationOptions", array())) || (true == $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "forceDom", array())))) {
            // line 8
            echo "    \"dom\": \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "dom", array()), "js"), "html", null, true);
            echo "\",
";
        }
        // line 10
        echo "
\"lengthMenu\": ";
        // line 11
        echo $this->env->getExtension('sg_datatables_twig_extension')->lengthJoin($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "lengthMenu", array()));
        echo ",
\"orderClasses\": ";
        // line 12
        echo (($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "orderClasses", array())) ? ("true") : ("false"));
        echo ",
\"order\": ";
        // line 13
        echo twig_jsonencode_filter($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "order", array()));
        echo ",
\"orderMulti\": ";
        // line 14
        echo (($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "orderMulti", array())) ? ("true") : ("false"));
        echo ",

\"pageLength\": ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "pageLength", array()), "html", null, true);
        echo ",
\"pagingType\": \"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "pagingType", array()), "html", null, true);
        echo "\",

";
        // line 19
        if ((false == $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "useIntegrationOptions", array()))) {
            // line 20
            echo "    \"renderer\": \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "renderer", array()), "html", null, true);
            echo "\",
";
        }
        // line 22
        echo "
\"scrollCollapse\": ";
        // line 23
        echo (($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "scrollCollapse", array())) ? ("true") : ("false"));
        echo ",
\"searchDelay\": ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "searchDelay", array()), "html", null, true);
        echo ",
\"stateDuration\": ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "stateDuration", array()), "html", null, true);
        echo ",

";
        // line 27
        if ($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "stripeClasses", array())) {
            // line 28
            echo "    \"stripeClasses\": [";
            echo twig_jsonencode_filter(twig_join_filter($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "stripeClasses", array()), ", "));
            echo "],
";
        }
        // line 30
        echo "
";
        
        $__internal_cbd5f306f566d1c1a7426e404cc00d4b22e957f9789fd19a7c6b53ebe0db5827->leave($__internal_cbd5f306f566d1c1a7426e404cc00d4b22e957f9789fd19a7c6b53ebe0db5827_prof);

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
        return array (  108 => 30,  102 => 28,  100 => 27,  95 => 25,  91 => 24,  87 => 23,  84 => 22,  78 => 20,  76 => 19,  71 => 17,  67 => 16,  62 => 14,  58 => 13,  54 => 12,  50 => 11,  47 => 10,  41 => 8,  39 => 7,  36 => 6,  30 => 4,  28 => 3,  22 => 1,);
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
