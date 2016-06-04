<?php

/* SgDatatablesBundle:Datatable:search_columns.html.twig */
class __TwigTemplate_0b9f47f43431f3184e46690244b86f61f5f8a44f9ca1e8454057d0d726fd49ed extends Twig_Template
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
        echo "\"searchCols\": [
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["view_columns"]) ? $context["view_columns"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 3
            echo "        ";
            if (($this->getAttribute($context["column"], "filterSearchColumn", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($context["column"], "filterSearchColumn", array())) > 0))) {
                echo "{\"search\" : \"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "filterSearchColumn", array()), "html", null, true);
                echo "\"}";
            } else {
                echo "null";
            }
            echo ",
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "]
";
    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Datatable:search_columns.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* "searchCols": [*/
/*     {% for column in view_columns %}*/
/*         {% if column.filterSearchColumn is defined and column.filterSearchColumn|length > 0 %}{"search" : "{{ column.filterSearchColumn }}"}{% else %}null{% endif %},*/
/*     {% endfor %}*/
/* ]*/
/* */
