<?php

/* SgDatatablesBundle:Column:action.html.twig */
class __TwigTemplate_45192564d1a3e9ebc9cdda57a766402cfff2317adf892925fdca7d89532ecc31 extends Twig_Template
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
        $__internal_6b12e617151762d9810e70c1073dd98dbfe1c623b9c8d8553e32f59d5cde4d9f = $this->env->getExtension("native_profiler");
        $__internal_6b12e617151762d9810e70c1073dd98dbfe1c623b9c8d8553e32f59d5cde4d9f->enter($__internal_6b12e617151762d9810e70c1073dd98dbfe1c623b9c8d8553e32f59d5cde4d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:action.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b12e617151762d9810e70c1073dd98dbfe1c623b9c8d8553e32f59d5cde4d9f->leave($__internal_6b12e617151762d9810e70c1073dd98dbfe1c623b9c8d8553e32f59d5cde4d9f_prof);

    }

    // line 11
    public function block_common($context, array $blocks = array())
    {
        $__internal_a5aac628bfff45d0a9379fcf7ad9b852f8c320a437b2959f5a1658c937f6c128 = $this->env->getExtension("native_profiler");
        $__internal_a5aac628bfff45d0a9379fcf7ad9b852f8c320a437b2959f5a1658c937f6c128->enter($__internal_a5aac628bfff45d0a9379fcf7ad9b852f8c320a437b2959f5a1658c937f6c128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

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
    \"title\": \"";
        // line 17
        echo $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "title", array());
        echo "\",
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
        
        $__internal_a5aac628bfff45d0a9379fcf7ad9b852f8c320a437b2959f5a1658c937f6c128->leave($__internal_a5aac628bfff45d0a9379fcf7ad9b852f8c320a437b2959f5a1658c937f6c128_prof);

    }

    // line 31
    public function block_data($context, array $blocks = array())
    {
        $__internal_53d947783955721cc603ddbdeb26fb13b821042979e6a14c28ed779e71dd1ab7 = $this->env->getExtension("native_profiler");
        $__internal_53d947783955721cc603ddbdeb26fb13b821042979e6a14c28ed779e71dd1ab7->enter($__internal_53d947783955721cc603ddbdeb26fb13b821042979e6a14c28ed779e71dd1ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        // line 32
        echo "    \"data\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
        echo "\",
    \"render\": function(data, type, row, meta) {
        ";
        // line 34
        $this->loadTemplate("SgDatatablesBundle:Action:action.html.twig", "SgDatatablesBundle:Column:action.html.twig", 34)->display(array_merge($context, array("column" => (isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "actions" => $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "actions", array()))));
        // line 35
        echo "    },
";
        
        $__internal_53d947783955721cc603ddbdeb26fb13b821042979e6a14c28ed779e71dd1ab7->leave($__internal_53d947783955721cc603ddbdeb26fb13b821042979e6a14c28ed779e71dd1ab7_prof);

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
        return array (  111 => 35,  109 => 34,  103 => 32,  97 => 31,  87 => 28,  82 => 26,  79 => 25,  74 => 23,  71 => 22,  68 => 21,  62 => 19,  60 => 18,  56 => 17,  50 => 14,  46 => 13,  41 => 12,  35 => 11,  11 => 9,);
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