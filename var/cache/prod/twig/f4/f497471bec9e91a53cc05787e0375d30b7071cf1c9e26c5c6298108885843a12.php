<?php

/* SgDatatablesBundle:Datatable:before_events.js.twig */
class __TwigTemplate_7d65b47a18e0671f1748c81921bd2b3e476e60ac42859e9a9be3c1f6b206ed96 extends Twig_Template
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
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "processing", array())) {
            // line 2
            echo ".on('processing.dt', ";
            $this->loadTemplate($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "processing", array()), "SgDatatablesBundle:Datatable:before_events.js.twig", 2)->display($context);
            echo ")
";
        }
        // line 4
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "error", array())) {
            // line 5
            echo ".on('error.dt', ";
            $this->loadTemplate($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "error", array()), "SgDatatablesBundle:Datatable:before_events.js.twig", 5)->display($context);
            echo ")
";
        }
        // line 7
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "preInit", array())) {
            // line 8
            echo ".on('preInit.dt', ";
            $this->loadTemplate($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "preInit", array()), "SgDatatablesBundle:Datatable:before_events.js.twig", 8)->display($context);
            echo ")
";
        }
        // line 10
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "preXhr", array())) {
            // line 11
            echo ".on('preXhr.dt', ";
            $this->loadTemplate($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "preXhr", array()), "SgDatatablesBundle:Datatable:before_events.js.twig", 11)->display($context);
            echo ")
";
        }
        // line 13
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "xhr", array())) {
            // line 14
            echo ".on('xhr.dt', ";
            $this->loadTemplate($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "xhr", array()), "SgDatatablesBundle:Datatable:before_events.js.twig", 14)->display($context);
            echo ")
";
        }
    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Datatable:before_events.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  51 => 13,  45 => 11,  43 => 10,  37 => 8,  35 => 7,  29 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if (view_events.processing) %}*/
/* .on('processing.dt', {% include view_events.processing %})*/
/* {% endif %}*/
/* {% if (view_events.error) %}*/
/* .on('error.dt', {% include view_events.error %})*/
/* {% endif %}*/
/* {% if (view_events.preInit) %}*/
/* .on('preInit.dt', {% include view_events.preInit %})*/
/* {% endif %}*/
/* {% if (view_events.preXhr) %}*/
/* .on('preXhr.dt', {% include view_events.preXhr %})*/
/* {% endif %}*/
/* {% if (view_events.xhr) %}*/
/* .on('xhr.dt', {% include view_events.xhr %})*/
/* {% endif %}*/
/* */
