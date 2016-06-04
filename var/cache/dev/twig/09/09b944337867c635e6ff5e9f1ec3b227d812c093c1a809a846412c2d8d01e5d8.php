<?php

/* SgDatatablesBundle:Column:column.html.twig */
class __TwigTemplate_124e573858edcf55175004385b55014da43166e445f1889852ef0d3f8ef3189a extends Twig_Template
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
        $__internal_611db40b05b6c24ff9cc853b0a7667b86c16ae261b277a43ba01897aedff3937 = $this->env->getExtension("native_profiler");
        $__internal_611db40b05b6c24ff9cc853b0a7667b86c16ae261b277a43ba01897aedff3937->enter($__internal_611db40b05b6c24ff9cc853b0a7667b86c16ae261b277a43ba01897aedff3937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:column.html.twig"));

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
        
        $__internal_611db40b05b6c24ff9cc853b0a7667b86c16ae261b277a43ba01897aedff3937->leave($__internal_611db40b05b6c24ff9cc853b0a7667b86c16ae261b277a43ba01897aedff3937_prof);

    }

    // line 10
    public function block_common($context, array $blocks = array())
    {
        $__internal_bf5a2f78601db5e4e8e340be849538acebbafbb2da2a8bf6666592f3a9797cd0 = $this->env->getExtension("native_profiler");
        $__internal_bf5a2f78601db5e4e8e340be849538acebbafbb2da2a8bf6666592f3a9797cd0->enter($__internal_bf5a2f78601db5e4e8e340be849538acebbafbb2da2a8bf6666592f3a9797cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

        // line 11
        echo "        \"contentPadding\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "padding", array()), "html", null, true);
        echo "\",
        \"defaultContent\": \"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "defaultContent", array()), "html", null, true);
        echo "\",
        \"name\": \"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "name", array()), "html", null, true);
        echo "\",
        ";
        // line 14
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "orderable", array())) {
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
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "searchable", array())) {
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
        echo $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "title", array());
        echo "\",
        ";
        // line 25
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "type", array())) {
            // line 26
            echo "            \"type\": \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "type", array()), "html", null, true);
            echo "\",
        ";
        }
        // line 28
        echo "        ";
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "visible", array())) {
            // line 29
            echo "            \"visible\": true,
            \"className\": \"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "class", array()), "html", null, true);
            echo "\",
        ";
        } else {
            // line 32
            echo "            \"visible\": false,
            \"className\": \"never ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "class", array()), "html", null, true);
            echo "\",
        ";
        }
        // line 35
        echo "        \"width\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "width", array()), "html", null, true);
        echo "\",
    ";
        
        $__internal_bf5a2f78601db5e4e8e340be849538acebbafbb2da2a8bf6666592f3a9797cd0->leave($__internal_bf5a2f78601db5e4e8e340be849538acebbafbb2da2a8bf6666592f3a9797cd0_prof);

    }

    // line 38
    public function block_data($context, array $blocks = array())
    {
        $__internal_d97f7b45aa2843dad3d42d547034f10da07fb1da5b4c14c7b373f02045824187 = $this->env->getExtension("native_profiler");
        $__internal_d97f7b45aa2843dad3d42d547034f10da07fb1da5b4c14c7b373f02045824187->enter($__internal_d97f7b45aa2843dad3d42d547034f10da07fb1da5b4c14c7b373f02045824187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        // line 39
        echo "        \"data\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
        echo "\",
        ";
        // line 40
        if (($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "default", array()) && (null === $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "render", array())))) {
            // line 41
            echo "            \"render\": function(data) {
                if (\"\" == data) {
                    return \"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "default", array()), "html", null, true);
            echo "\";
                } else {
                    return data;
                }
            },
        ";
        }
        // line 49
        echo "        ";
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "render", array())) {
            // line 50
            echo "            \"render\": function(data, type, row, meta) {
                return ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "render", array()), "html", null, true);
            echo "(data, type, row, meta);
            },
        ";
        }
        // line 54
        echo "        ";
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "editable", array())) {
            // line 55
            echo "            \"render\": function(data, type, row, meta) {
                return render_editable_text(data, type, row, meta, '";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
            echo "');
            },
        ";
        }
        // line 59
        echo "    ";
        
        $__internal_d97f7b45aa2843dad3d42d547034f10da07fb1da5b4c14c7b373f02045824187->leave($__internal_d97f7b45aa2843dad3d42d547034f10da07fb1da5b4c14c7b373f02045824187_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Column:column.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  174 => 59,  168 => 56,  165 => 55,  162 => 54,  156 => 51,  153 => 50,  150 => 49,  141 => 43,  137 => 41,  135 => 40,  130 => 39,  124 => 38,  114 => 35,  109 => 33,  106 => 32,  101 => 30,  98 => 29,  95 => 28,  89 => 26,  87 => 25,  82 => 24,  78 => 22,  74 => 20,  71 => 19,  67 => 17,  63 => 15,  61 => 14,  57 => 13,  53 => 12,  48 => 11,  42 => 10,  34 => 60,  32 => 38,  29 => 37,  27 => 10,  24 => 9,);
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
