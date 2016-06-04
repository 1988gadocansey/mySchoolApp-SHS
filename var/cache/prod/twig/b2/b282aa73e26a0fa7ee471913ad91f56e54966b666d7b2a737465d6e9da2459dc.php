<?php

/* SgDatatablesBundle:Datatable:ajax.html.twig */
class __TwigTemplate_595eb82146b56a7a7ac1cccd6113fe65f91b7bf004555b51fcd7c82872de643e extends Twig_Template
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
        if ($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : null), "serverSide", array())) {
            // line 2
            echo "    \"serverSide\": true,
    \"ajax\": {
        \"url\": \"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_ajax"]) ? $context["view_ajax"] : null), "url", array()), "html", null, true);
            echo "\",
        \"type\": \"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_ajax"]) ? $context["view_ajax"] : null), "type", array()), "html", null, true);
            echo "\"
    },
";
        } else {
            // line 8
            echo "    \"serverSide\": false,
    \"data\": ";
            // line 9
            echo (isset($context["view_data"]) ? $context["view_data"] : null);
            echo ",
";
        }
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
        return array (  38 => 9,  35 => 8,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
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
