<?php

/* SgDatatablesBundle:Datatable:before_events.js.twig */
class __TwigTemplate_a5e5c21bcb4e6d13bd6376f28903e99b5a1dfe88d1746eccb48c6002d89ddf2c extends Twig_Template
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
        $__internal_e47fc06da067f7ae2da048e96647fde73446f022e785fa0f046eaa8b9d2f8d2f = $this->env->getExtension("native_profiler");
        $__internal_e47fc06da067f7ae2da048e96647fde73446f022e785fa0f046eaa8b9d2f8d2f->enter($__internal_e47fc06da067f7ae2da048e96647fde73446f022e785fa0f046eaa8b9d2f8d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:before_events.js.twig"));

        // line 1
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "processing", array())) {
            // line 2
            echo ".on('processing.dt', ";
            $this->loadTemplate($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "processing", array()), "SgDatatablesBundle:Datatable:before_events.js.twig", 2)->display($context);
            echo ")
";
        }
        // line 4
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "error", array())) {
            // line 5
            echo ".on('error.dt', ";
            $this->loadTemplate($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "error", array()), "SgDatatablesBundle:Datatable:before_events.js.twig", 5)->display($context);
            echo ")
";
        }
        // line 7
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "preInit", array())) {
            // line 8
            echo ".on('preInit.dt', ";
            $this->loadTemplate($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "preInit", array()), "SgDatatablesBundle:Datatable:before_events.js.twig", 8)->display($context);
            echo ")
";
        }
        // line 10
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "preXhr", array())) {
            // line 11
            echo ".on('preXhr.dt', ";
            $this->loadTemplate($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "preXhr", array()), "SgDatatablesBundle:Datatable:before_events.js.twig", 11)->display($context);
            echo ")
";
        }
        // line 13
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "xhr", array())) {
            // line 14
            echo ".on('xhr.dt', ";
            $this->loadTemplate($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "xhr", array()), "SgDatatablesBundle:Datatable:before_events.js.twig", 14)->display($context);
            echo ")
";
        }
        
        $__internal_e47fc06da067f7ae2da048e96647fde73446f022e785fa0f046eaa8b9d2f8d2f->leave($__internal_e47fc06da067f7ae2da048e96647fde73446f022e785fa0f046eaa8b9d2f8d2f_prof);

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
        return array (  56 => 14,  54 => 13,  48 => 11,  46 => 10,  40 => 8,  38 => 7,  32 => 5,  30 => 4,  24 => 2,  22 => 1,);
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
