<?php

/* SgDatatablesBundle:Column:multiselect.html.twig */
class __TwigTemplate_5ec97870166e3eb438703969a3c98fc41ce5656ff233abf8262bdb670a62187e extends Twig_Template
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
        $__internal_b68606614546d950e1aa021f210519ef5e10744d2628f34239fc08137a3dfe31 = $this->env->getExtension("native_profiler");
        $__internal_b68606614546d950e1aa021f210519ef5e10744d2628f34239fc08137a3dfe31->enter($__internal_b68606614546d950e1aa021f210519ef5e10744d2628f34239fc08137a3dfe31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:multiselect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b68606614546d950e1aa021f210519ef5e10744d2628f34239fc08137a3dfe31->leave($__internal_b68606614546d950e1aa021f210519ef5e10744d2628f34239fc08137a3dfe31_prof);

    }

    // line 11
    public function block_common($context, array $blocks = array())
    {
        $__internal_d9025f39ceb25f292e921904dea7a1333a3deb6f7b0b3d976a20b4a7474010ab = $this->env->getExtension("native_profiler");
        $__internal_d9025f39ceb25f292e921904dea7a1333a3deb6f7b0b3d976a20b4a7474010ab->enter($__internal_d9025f39ceb25f292e921904dea7a1333a3deb6f7b0b3d976a20b4a7474010ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

        // line 12
        echo "    \"contentPadding\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "padding", array()), "html", null, true);
        echo "\",
    \"defaultContent\": \"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "defaultContent", array()), "html", null, true);
        echo "\",
    \"name\": \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "name", array()), "html", null, true);
        echo "\",
    \"orderable\": false,
    \"searchable\": false,
    \"title\": \"<input type='checkbox' name='";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["view_table_id"]) ? $context["view_table_id"] : $this->getContext($context, "view_table_id")), "html", null, true);
        echo "_multiselect_checkall' class='";
        echo twig_escape_filter($this->env, (isset($context["view_table_id"]) ? $context["view_table_id"] : $this->getContext($context, "view_table_id")), "html", null, true);
        echo "_multiselect_checkall' />\",
    ";
        // line 18
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "type", array())) {
            // line 19
            echo "        \"type\": \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "type", array()), "html", null, true);
            echo "\",
    ";
        }
        // line 21
        echo "    ";
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "visible", array())) {
            // line 22
            echo "        \"visible\": true,
        \"className\": \"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "class", array()), "html", null, true);
            echo "\",
    ";
        } else {
            // line 25
            echo "        \"visible\": false,
        \"className\": \"never ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "class", array()), "html", null, true);
            echo "\",
    ";
        }
        // line 28
        echo "    \"width\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "width", array()), "html", null, true);
        echo "\",
";
        
        $__internal_d9025f39ceb25f292e921904dea7a1333a3deb6f7b0b3d976a20b4a7474010ab->leave($__internal_d9025f39ceb25f292e921904dea7a1333a3deb6f7b0b3d976a20b4a7474010ab_prof);

    }

    // line 31
    public function block_data($context, array $blocks = array())
    {
        $__internal_f3abbc22bc05eb55d4498944eb4533396a50f9c18fd949eede37579a0184fc56 = $this->env->getExtension("native_profiler");
        $__internal_f3abbc22bc05eb55d4498944eb4533396a50f9c18fd949eede37579a0184fc56->enter($__internal_f3abbc22bc05eb55d4498944eb4533396a50f9c18fd949eede37579a0184fc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "startHtml", array())) {
            // line 41
            echo "            startHtml = '";
            echo $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "startHtml", array());
            echo "';
        ";
        }
        // line 43
        echo "
        ";
        // line 45
        echo "        ";
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "endHtml", array())) {
            // line 46
            echo "            endHtml = '";
            echo $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "endHtml", array());
            echo "';
        ";
        }
        // line 48
        echo "
        ";
        // line 50
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "attributes", array()));
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "value", array()), "html", null, true);
        echo "') && typeof('";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "value", array()), "html", null, true);
        echo "') !== 'function') {
            first = row['";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "value", array()), "html", null, true);
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
        
        $__internal_f3abbc22bc05eb55d4498944eb4533396a50f9c18fd949eede37579a0184fc56->leave($__internal_f3abbc22bc05eb55d4498944eb4533396a50f9c18fd949eede37579a0184fc56_prof);

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
        return array (  172 => 61,  166 => 57,  160 => 56,  157 => 55,  154 => 53,  143 => 51,  138 => 50,  135 => 48,  129 => 46,  126 => 45,  123 => 43,  117 => 41,  114 => 40,  105 => 32,  99 => 31,  89 => 28,  84 => 26,  81 => 25,  76 => 23,  73 => 22,  70 => 21,  64 => 19,  62 => 18,  56 => 17,  50 => 14,  46 => 13,  41 => 12,  35 => 11,  11 => 9,);
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
