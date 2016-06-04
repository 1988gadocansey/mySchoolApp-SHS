<?php

/* SgDatatablesBundle:Column:multiselect.html.twig */
class __TwigTemplate_bd2025b1fd9430c8c1d36c58e06a8afbf63dc16d5d7dacd6ef15ab5ba6e5fab5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "SgDatatablesBundle:Column:multiselect.html.twig", 9);
        $this->blocks = array(
            'common' => array($this, 'block_common'),
            'data' => array($this, 'block_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SgDatatablesBundle:Column:column.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_common($context, array $blocks = array())
    {
        // line 12
        echo "    \"contentPadding\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "padding", array()), "html", null, true);
        echo "\",
    \"defaultContent\": \"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "defaultContent", array()), "html", null, true);
        echo "\",
    \"name\": \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "name", array()), "html", null, true);
        echo "\",
    \"orderable\": false,
    \"searchable\": false,
    \"title\": \"<input type='checkbox' name='";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["view_table_id"]) ? $context["view_table_id"] : null), "html", null, true);
        echo "_multiselect_checkall' class='";
        echo twig_escape_filter($this->env, (isset($context["view_table_id"]) ? $context["view_table_id"] : null), "html", null, true);
        echo "_multiselect_checkall' />\",
    ";
        // line 18
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "type", array())) {
            // line 19
            echo "        \"type\": \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "type", array()), "html", null, true);
            echo "\",
    ";
        }
        // line 21
        echo "    ";
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "visible", array())) {
            // line 22
            echo "        \"visible\": true,
        \"className\": \"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "class", array()), "html", null, true);
            echo "\",
    ";
        } else {
            // line 25
            echo "        \"visible\": false,
        \"className\": \"never ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "class", array()), "html", null, true);
            echo "\",
    ";
        }
        // line 28
        echo "    \"width\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "width", array()), "html", null, true);
        echo "\",
";
    }

    // line 31
    public function block_data($context, array $blocks = array())
    {
        // line 32
        echo "    \"data\": null,
    \"render\": function(data, type, row, meta) {
        var output = \"\";
        var startHtml = \"\";
        var endHtml = \"\";
        var attributes = \"\";

        ";
        // line 40
        echo "        ";
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "startHtml", array())) {
            // line 41
            echo "            startHtml = '";
            echo $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "startHtml", array());
            echo "';
        ";
        }
        // line 43
        echo "
        ";
        // line 45
        echo "        ";
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "endHtml", array())) {
            // line 46
            echo "            endHtml = '";
            echo $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "endHtml", array());
            echo "';
        ";
        }
        // line 48
        echo "
        ";
        // line 50
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "attributes", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 51
            echo "            attributes += '";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\" ';
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
        ";
        // line 55
        echo "        var first;
        if (row.hasOwnProperty('";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "value", array()), "html", null, true);
        echo "') && typeof('";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "value", array()), "html", null, true);
        echo "') !== 'function') {
            first = row['";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "value", array()), "html", null, true);
        echo "'];
        }

        ";
        // line 61
        echo "        output += startHtml;
        output += \"<input type='checkbox' value='\";
        output += first;
        output += \"'\";
        output += attributes;
        output += \"/>\"
        output += endHtml;

        return output;
    },
";
    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Column:multiselect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 61,  151 => 57,  145 => 56,  142 => 55,  139 => 53,  128 => 51,  123 => 50,  120 => 48,  114 => 46,  111 => 45,  108 => 43,  102 => 41,  99 => 40,  90 => 32,  87 => 31,  80 => 28,  75 => 26,  72 => 25,  67 => 23,  64 => 22,  61 => 21,  55 => 19,  53 => 18,  47 => 17,  41 => 14,  37 => 13,  32 => 12,  29 => 11,  11 => 9,);
    }
}
/* {##*/
/*  # This file is part of the SgDatatablesBundle package.*/
/*  #*/
/*  # (c) stwe <https://github.com/stwe/DatatablesBundle>*/
/*  #*/
/*  # For the full copyright and license information, please view the LICENSE*/
/*  # file that was distributed with this source code.*/
/*  #}*/
/* {% extends 'SgDatatablesBundle:Column:column.html.twig' %}*/
/* */
/* {% block common %}*/
/*     "contentPadding": "{{ column.padding }}",*/
/*     "defaultContent": "{{ column.defaultContent }}",*/
/*     "name": "{{ column.name }}",*/
/*     "orderable": false,*/
/*     "searchable": false,*/
/*     "title": "<input type='checkbox' name='{{ view_table_id }}_multiselect_checkall' class='{{ view_table_id }}_multiselect_checkall' />",*/
/*     {% if column.type %}*/
/*         "type": "{{ column.type }}",*/
/*     {% endif %}*/
/*     {% if column.visible %}*/
/*         "visible": true,*/
/*         "className": "{{ column.class }}",*/
/*     {% else %}*/
/*         "visible": false,*/
/*         "className": "never {{ column.class }}",*/
/*     {% endif %}*/
/*     "width": "{{ column.width }}",*/
/* {% endblock %}*/
/* */
/* {% block data %}*/
/*     "data": null,*/
/*     "render": function(data, type, row, meta) {*/
/*         var output = "";*/
/*         var startHtml = "";*/
/*         var endHtml = "";*/
/*         var attributes = "";*/
/* */
/*         {# start_html #}*/
/*         {% if column.startHtml %}*/
/*             startHtml = '{{ column.startHtml|raw }}';*/
/*         {% endif %}*/
/* */
/*         {# end_html #}*/
/*         {% if column.endHtml %}*/
/*             endHtml = '{{ column.endHtml|raw }}';*/
/*         {% endif %}*/
/* */
/*         {# attributes #}*/
/*         {% for key, value in column.attributes %}*/
/*             attributes += '{{ key }}="{{ value }}" ';*/
/*         {% endfor %}*/
/* */
/*         {# get value (e.g. the id) #}*/
/*         var first;*/
/*         if (row.hasOwnProperty('{{ column.value }}') && typeof('{{ column.value }}') !== 'function') {*/
/*             first = row['{{ column.value }}'];*/
/*         }*/
/* */
/*         {# return html #}*/
/*         output += startHtml;*/
/*         output += "<input type='checkbox' value='";*/
/*         output += first;*/
/*         output += "'";*/
/*         output += attributes;*/
/*         output += "/>"*/
/*         output += endHtml;*/
/* */
/*         return output;*/
/*     },*/
/* {% endblock %}*/
/* */
/* */
