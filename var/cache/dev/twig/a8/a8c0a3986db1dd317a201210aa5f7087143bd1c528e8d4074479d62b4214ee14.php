<?php

/* SgDatatablesBundle:Datatable:ajax.html.twig */
class __TwigTemplate_3f689ac066c7fe48f88a2f4420ccfaca09af34e3f25fce8a0e17e7122e902f77 extends Twig_Template
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
        $__internal_937709549e2d375c546c60725945985d4e645a146071321a05d300aa6cf9a5c9 = $this->env->getExtension("native_profiler");
        $__internal_937709549e2d375c546c60725945985d4e645a146071321a05d300aa6cf9a5c9->enter($__internal_937709549e2d375c546c60725945985d4e645a146071321a05d300aa6cf9a5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:ajax.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : $this->getContext($context, "view_features")), "serverSide", array())) {
            // line 2
            echo "    \"serverSide\": true,
    \"ajax\": {
        \"url\": \"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_ajax"]) ? $context["view_ajax"] : $this->getContext($context, "view_ajax")), "url", array()), "html", null, true);
            echo "\",
        \"type\": \"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_ajax"]) ? $context["view_ajax"] : $this->getContext($context, "view_ajax")), "type", array()), "html", null, true);
            echo "\"
    },
";
        } else {
            // line 8
            echo "    \"serverSide\": false,
    \"data\": ";
            // line 9
            echo (isset($context["view_data"]) ? $context["view_data"] : $this->getContext($context, "view_data"));
            echo ",
";
        }
        
        $__internal_937709549e2d375c546c60725945985d4e645a146071321a05d300aa6cf9a5c9->leave($__internal_937709549e2d375c546c60725945985d4e645a146071321a05d300aa6cf9a5c9_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Datatable:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  38 => 8,  32 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if view_features.serverSide %}*/
/*     "serverSide": true,*/
/*     "ajax": {*/
/*         "url": "{{ view_ajax.url }}",*/
/*         "type": "{{ view_ajax.type }}"*/
/*     },*/
/* {% else %}*/
/*     "serverSide": false,*/
/*     "data": {{ view_data|raw }},*/
/* {% endif %}*/
/* */
