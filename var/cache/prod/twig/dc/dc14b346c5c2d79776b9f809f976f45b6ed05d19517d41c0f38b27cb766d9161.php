<?php

/* SgDatatablesBundle:Column:column.html.twig */
class __TwigTemplate_4be57413e388c3cdf6fcad61dc7f74ee729eaef09f01c24a3c58a5fabc3d8b94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'common' => array($this, 'block_common'),
            'data' => array($this, 'block_data'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        echo "{
    ";
        // line 10
        $this->displayBlock('common', $context, $blocks);
        // line 37
        echo "
    ";
        // line 38
        $this->displayBlock('data', $context, $blocks);
        // line 60
        echo "},
";
    }

    // line 10
    public function block_common($context, array $blocks = array())
    {
        // line 11
        echo "        \"contentPadding\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "padding", array()), "html", null, true);
        echo "\",
        \"defaultContent\": \"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "defaultContent", array()), "html", null, true);
        echo "\",
        \"name\": \"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "name", array()), "html", null, true);
        echo "\",
        ";
        // line 14
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "orderable", array())) {
            // line 15
            echo "            \"orderable\": true,
        ";
        } else {
            // line 17
            echo "            \"orderable\": false,
        ";
        }
        // line 19
        echo "        ";
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "searchable", array())) {
            // line 20
            echo "            \"searchable\": true,
        ";
        } else {
            // line 22
            echo "            \"searchable\": false,
        ";
        }
        // line 24
        echo "        \"title\": \"";
        echo $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "title", array());
        echo "\",
        ";
        // line 25
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "type", array())) {
            // line 26
            echo "            \"type\": \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "type", array()), "html", null, true);
            echo "\",
        ";
        }
        // line 28
        echo "        ";
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "visible", array())) {
            // line 29
            echo "            \"visible\": true,
            \"className\": \"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "class", array()), "html", null, true);
            echo "\",
        ";
        } else {
            // line 32
            echo "            \"visible\": false,
            \"className\": \"never ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "class", array()), "html", null, true);
            echo "\",
        ";
        }
        // line 35
        echo "        \"width\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "width", array()), "html", null, true);
        echo "\",
    ";
    }

    // line 38
    public function block_data($context, array $blocks = array())
    {
        // line 39
        echo "        \"data\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "data", array()), "html", null, true);
        echo "\",
        ";
        // line 40
        if (($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "default", array()) && (null === $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "render", array())))) {
            // line 41
            echo "            \"render\": function(data) {
                if (\"\" == data) {
                    return \"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "default", array()), "html", null, true);
            echo "\";
                } else {
                    return data;
                }
            },
        ";
        }
        // line 49
        echo "        ";
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "render", array())) {
            // line 50
            echo "            \"render\": function(data, type, row, meta) {
                return ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "render", array()), "html", null, true);
            echo "(data, type, row, meta);
            },
        ";
        }
        // line 54
        echo "        ";
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "editable", array())) {
            // line 55
            echo "            \"render\": function(data, type, row, meta) {
                return render_editable_text(data, type, row, meta, '";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "data", array()), "html", null, true);
            echo "');
            },
        ";
        }
        // line 59
        echo "    ";
    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Column:column.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  159 => 59,  153 => 56,  150 => 55,  147 => 54,  141 => 51,  138 => 50,  135 => 49,  126 => 43,  122 => 41,  120 => 40,  115 => 39,  112 => 38,  105 => 35,  100 => 33,  97 => 32,  92 => 30,  89 => 29,  86 => 28,  80 => 26,  78 => 25,  73 => 24,  69 => 22,  65 => 20,  62 => 19,  58 => 17,  54 => 15,  52 => 14,  48 => 13,  44 => 12,  39 => 11,  36 => 10,  31 => 60,  29 => 38,  26 => 37,  24 => 10,  21 => 9,);
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
/* {*/
/*     {% block common %}*/
/*         "contentPadding": "{{ column.padding }}",*/
/*         "defaultContent": "{{ column.defaultContent }}",*/
/*         "name": "{{ column.name }}",*/
/*         {% if column.orderable %}*/
/*             "orderable": true,*/
/*         {% else %}*/
/*             "orderable": false,*/
/*         {% endif %}*/
/*         {% if column.searchable %}*/
/*             "searchable": true,*/
/*         {% else %}*/
/*             "searchable": false,*/
/*         {% endif %}*/
/*         "title": "{{ column.title|raw }}",*/
/*         {% if column.type %}*/
/*             "type": "{{ column.type }}",*/
/*         {% endif %}*/
/*         {% if column.visible %}*/
/*             "visible": true,*/
/*             "className": "{{ column.class }}",*/
/*         {% else %}*/
/*             "visible": false,*/
/*             "className": "never {{ column.class }}",*/
/*         {% endif %}*/
/*         "width": "{{ column.width }}",*/
/*     {% endblock %}*/
/* */
/*     {% block data %}*/
/*         "data": "{{ column.data }}",*/
/*         {% if column.default and column.render is null %}*/
/*             "render": function(data) {*/
/*                 if ("" == data) {*/
/*                     return "{{ column.default }}";*/
/*                 } else {*/
/*                     return data;*/
/*                 }*/
/*             },*/
/*         {% endif %}*/
/*         {% if column.render %}*/
/*             "render": function(data, type, row, meta) {*/
/*                 return {{ column.render }}(data, type, row, meta);*/
/*             },*/
/*         {% endif %}*/
/*         {% if column.editable %}*/
/*             "render": function(data, type, row, meta) {*/
/*                 return render_editable_text(data, type, row, meta, '{{ column.data }}');*/
/*             },*/
/*         {% endif %}*/
/*     {% endblock %}*/
/* },*/
/* */
