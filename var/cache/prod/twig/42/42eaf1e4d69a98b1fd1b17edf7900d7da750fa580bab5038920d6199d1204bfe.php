<?php

/* SgDatatablesBundle:Column:action.html.twig */
class __TwigTemplate_6255418d7005dafc2418aa9167d396cda78e9c0a770045ebb8072812f6801f07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "SgDatatablesBundle:Column:action.html.twig", 9);
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
    \"title\": \"";
        // line 17
        echo $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "title", array());
        echo "\",
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
        echo "    \"data\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "data", array()), "html", null, true);
        echo "\",
    \"render\": function(data, type, row, meta) {
        ";
        // line 34
        $this->loadTemplate("SgDatatablesBundle:Action:action.html.twig", "SgDatatablesBundle:Column:action.html.twig", 34)->display(array_merge($context, array("column" => (isset($context["column"]) ? $context["column"] : null), "actions" => $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "actions", array()))));
        // line 35
        echo "    },
";
    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Column:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 35,  94 => 34,  88 => 32,  85 => 31,  78 => 28,  73 => 26,  70 => 25,  65 => 23,  62 => 22,  59 => 21,  53 => 19,  51 => 18,  47 => 17,  41 => 14,  37 => 13,  32 => 12,  29 => 11,  11 => 9,);
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
/*     "title": "{{ column.title|raw }}",*/
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
/*     "data": "{{ column.data }}",*/
/*     "render": function(data, type, row, meta) {*/
/*         {% include 'SgDatatablesBundle:Action:action.html.twig' with { 'column': column, 'actions': column.actions } %}*/
/*     },*/
/* {% endblock %}*/
/* */
