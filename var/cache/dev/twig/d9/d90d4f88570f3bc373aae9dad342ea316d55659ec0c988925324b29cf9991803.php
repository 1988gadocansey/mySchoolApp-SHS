<?php

/* SgDatatablesBundle:Datatable:search_columns.html.twig */
class __TwigTemplate_9e8eadd84477b5f8e469b31255feff110aace7be1231f3eedfb7904a6f10a8f8 extends Twig_Template
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
        $__internal_db72248e45a0e707697669417c112a95b3ec5d8e2da1f4afbb882be40c39efb5 = $this->env->getExtension("native_profiler");
        $__internal_db72248e45a0e707697669417c112a95b3ec5d8e2da1f4afbb882be40c39efb5->enter($__internal_db72248e45a0e707697669417c112a95b3ec5d8e2da1f4afbb882be40c39efb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:search_columns.html.twig"));

        // line 1
        echo "\"searchCols\": [
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["view_columns"]) ? $context["view_columns"] : $this->getContext($context, "view_columns")));
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
        
        $__internal_db72248e45a0e707697669417c112a95b3ec5d8e2da1f4afbb882be40c39efb5->leave($__internal_db72248e45a0e707697669417c112a95b3ec5d8e2da1f4afbb882be40c39efb5_prof);

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
        return array (  44 => 5,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* "searchCols": [*/
/*     {% for column in view_columns %}*/
/*         {% if column.filterSearchColumn is defined and column.filterSearchColumn|length > 0 %}{"search" : "{{ column.filterSearchColumn }}"}{% else %}null{% endif %},*/
/*     {% endfor %}*/
/* ]*/
/* */
