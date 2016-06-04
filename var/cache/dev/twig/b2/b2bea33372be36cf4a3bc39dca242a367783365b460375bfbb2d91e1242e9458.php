<?php

/* SgDatatablesBundle:Datatable:after_events.js.twig */
class __TwigTemplate_a3bc36dcb272b1ad64de7edf3df8e52565df94e1fcb87f055680c7a75d16d259 extends Twig_Template
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
        $__internal_6e76c2c6d6b2124961f86a0d84f5c02973723fdc7f31b6e661f4f97b30e9fed6 = $this->env->getExtension("native_profiler");
        $__internal_6e76c2c6d6b2124961f86a0d84f5c02973723fdc7f31b6e661f4f97b30e9fed6->enter($__internal_6e76c2c6d6b2124961f86a0d84f5c02973723fdc7f31b6e661f4f97b30e9fed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:after_events.js.twig"));

        // line 1
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "columnSizing", array())) {
            // line 2
            echo ".on('column-sizing.dt', ";
            $this->loadTemplate($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "columnSizing", array()), "SgDatatablesBundle:Datatable:after_events.js.twig", 2)->display($context);
            echo ")
";
        }
        // line 4
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "columnVisibility", array())) {
            // line 5
            echo ".on('column-visibility.dt', ";
            $this->loadTemplate($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "columnVisibility", array()), "SgDatatablesBundle:Datatable:after_events.js.twig", 5)->display($context);
            echo ")
";
        }
        // line 7
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "destroy", array())) {
            // line 8
            echo ".on('destroy.dt', ";
            $this->loadTemplate($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "destroy", array()), "SgDatatablesBundle:Datatable:after_events.js.twig", 8)->display($context);
            echo ")
";
        }
        // line 10
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "length", array())) {
            // line 11
            echo ".on('length.dt', ";
            $this->loadTemplate($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "length", array()), "SgDatatablesBundle:Datatable:after_events.js.twig", 11)->display($context);
            echo ")
";
        }
        // line 13
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "order", array())) {
            // line 14
            echo ".on('order.dt', ";
            $this->loadTemplate($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "order", array()), "SgDatatablesBundle:Datatable:after_events.js.twig", 14)->display($context);
            echo ")
";
        }
        // line 16
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "page", array())) {
            // line 17
            echo ".on('page.dt', ";
            $this->loadTemplate($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "page", array()), "SgDatatablesBundle:Datatable:after_events.js.twig", 17)->display($context);
            echo ")
";
        }
        // line 19
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "search", array())) {
            // line 20
            echo ".on('search.dt', ";
            $this->loadTemplate($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "search", array()), "SgDatatablesBundle:Datatable:after_events.js.twig", 20)->display($context);
            echo ")
";
        }
        // line 22
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "stateLoaded", array())) {
            // line 23
            echo ".on('stateLoaded.dt', ";
            $this->loadTemplate($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "stateLoaded", array()), "SgDatatablesBundle:Datatable:after_events.js.twig", 23)->display($context);
            echo ")
";
        }
        // line 25
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "stateLoadParams", array())) {
            // line 26
            echo ".on('stateLoadParams.dt', ";
            $this->loadTemplate($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "stateLoadParams", array()), "SgDatatablesBundle:Datatable:after_events.js.twig", 26)->display($context);
            echo ")
";
        }
        // line 28
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "stateSaveParams", array())) {
            // line 29
            echo ".on('stateSaveParams.dt', ";
            $this->loadTemplate($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "stateSaveParams", array()), "SgDatatablesBundle:Datatable:after_events.js.twig", 29)->display($context);
            echo ")
";
        }
        
        $__internal_6e76c2c6d6b2124961f86a0d84f5c02973723fdc7f31b6e661f4f97b30e9fed6->leave($__internal_6e76c2c6d6b2124961f86a0d84f5c02973723fdc7f31b6e661f4f97b30e9fed6_prof);

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
        return array (  96 => 29,  94 => 28,  88 => 26,  86 => 25,  80 => 23,  78 => 22,  72 => 20,  70 => 19,  64 => 17,  62 => 16,  56 => 14,  54 => 13,  48 => 11,  46 => 10,  40 => 8,  38 => 7,  32 => 5,  30 => 4,  24 => 2,  22 => 1,);
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
