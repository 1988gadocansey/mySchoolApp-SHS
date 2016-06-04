<?php

/* SgDatatablesBundle:Datatable:after_events.js.twig */
class __TwigTemplate_5558fbadb5b25756806da467026bf4687ea9badd5c44037e9ba43ae72d9c1027 extends Twig_Template
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
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "columnSizing", array())) {
            // line 2
            echo ".on('column-sizing.dt', ";
            $this->loadTemplate($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "columnSizing", array()), "SgDatatablesBundle:Datatable:after_events.js.twig", 2)->display($context);
            echo ")
";
        }
        // line 4
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "columnVisibility", array())) {
            // line 5
            echo ".on('column-visibility.dt', ";
            $this->loadTemplate($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "columnVisibility", array()), "SgDatatablesBundle:Datatable:after_events.js.twig", 5)->display($context);
            echo ")
";
        }
        // line 7
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "destroy", array())) {
            // line 8
            echo ".on('destroy.dt', ";
            $this->loadTemplate($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "destroy", array()), "SgDatatablesBundle:Datatable:after_events.js.twig", 8)->display($context);
            echo ")
";
        }
        // line 10
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "length", array())) {
            // line 11
            echo ".on('length.dt', ";
            $this->loadTemplate($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "length", array()), "SgDatatablesBundle:Datatable:after_events.js.twig", 11)->display($context);
            echo ")
";
        }
        // line 13
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "order", array())) {
            // line 14
            echo ".on('order.dt', ";
            $this->loadTemplate($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "order", array()), "SgDatatablesBundle:Datatable:after_events.js.twig", 14)->display($context);
            echo ")
";
        }
        // line 16
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "page", array())) {
            // line 17
            echo ".on('page.dt', ";
            $this->loadTemplate($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "page", array()), "SgDatatablesBundle:Datatable:after_events.js.twig", 17)->display($context);
            echo ")
";
        }
        // line 19
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "search", array())) {
            // line 20
            echo ".on('search.dt', ";
            $this->loadTemplate($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "search", array()), "SgDatatablesBundle:Datatable:after_events.js.twig", 20)->display($context);
            echo ")
";
        }
        // line 22
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "stateLoaded", array())) {
            // line 23
            echo ".on('stateLoaded.dt', ";
            $this->loadTemplate($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "stateLoaded", array()), "SgDatatablesBundle:Datatable:after_events.js.twig", 23)->display($context);
            echo ")
";
        }
        // line 25
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "stateLoadParams", array())) {
            // line 26
            echo ".on('stateLoadParams.dt', ";
            $this->loadTemplate($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "stateLoadParams", array()), "SgDatatablesBundle:Datatable:after_events.js.twig", 26)->display($context);
            echo ")
";
        }
        // line 28
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "stateSaveParams", array())) {
            // line 29
            echo ".on('stateSaveParams.dt', ";
            $this->loadTemplate($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "stateSaveParams", array()), "SgDatatablesBundle:Datatable:after_events.js.twig", 29)->display($context);
            echo ")
";
        }
    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Datatable:after_events.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 29,  91 => 28,  85 => 26,  83 => 25,  77 => 23,  75 => 22,  69 => 20,  67 => 19,  61 => 17,  59 => 16,  53 => 14,  51 => 13,  45 => 11,  43 => 10,  37 => 8,  35 => 7,  29 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if (view_events.columnSizing) %}*/
/* .on('column-sizing.dt', {% include view_events.columnSizing %})*/
/* {% endif %}*/
/* {% if (view_events.columnVisibility) %}*/
/* .on('column-visibility.dt', {% include view_events.columnVisibility %})*/
/* {% endif %}*/
/* {% if (view_events.destroy) %}*/
/* .on('destroy.dt', {% include view_events.destroy %})*/
/* {% endif %}*/
/* {% if (view_events.length) %}*/
/* .on('length.dt', {% include view_events.length %})*/
/* {% endif %}*/
/* {% if (view_events.order) %}*/
/* .on('order.dt', {% include view_events.order %})*/
/* {% endif %}*/
/* {% if (view_events.page) %}*/
/* .on('page.dt', {% include view_events.page %})*/
/* {% endif %}*/
/* {% if (view_events.search) %}*/
/* .on('search.dt', {% include view_events.search %})*/
/* {% endif %}*/
/* {% if (view_events.stateLoaded) %}*/
/* .on('stateLoaded.dt', {% include view_events.stateLoaded %})*/
/* {% endif %}*/
/* {% if (view_events.stateLoadParams) %}*/
/* .on('stateLoadParams.dt', {% include view_events.stateLoadParams %})*/
/* {% endif %}*/
/* {% if (view_events.stateSaveParams) %}*/
/* .on('stateSaveParams.dt', {% include view_events.stateSaveParams %})*/
/* {% endif %}*/
/* */
