<?php

/* SgDatatablesBundle:Column:boolean.html.twig */
class __TwigTemplate_71841877bea083af8ec0ab33f7a8f01d6b528e55675dcd2e26c98b9f1c7acc6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "SgDatatablesBundle:Column:boolean.html.twig", 9);
        $this->blocks = array(
            'data' => array($this, 'block_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SgDatatablesBundle:Column:column.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0098363ccbfcf7c15d11854885fbab809e49f7289961ed6e49d38365c5363388 = $this->env->getExtension("native_profiler");
        $__internal_0098363ccbfcf7c15d11854885fbab809e49f7289961ed6e49d38365c5363388->enter($__internal_0098363ccbfcf7c15d11854885fbab809e49f7289961ed6e49d38365c5363388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0098363ccbfcf7c15d11854885fbab809e49f7289961ed6e49d38365c5363388->leave($__internal_0098363ccbfcf7c15d11854885fbab809e49f7289961ed6e49d38365c5363388_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_491a7b604f8093687306af9dbba0f36cface3ca3fe1d00e916e44e8fb3f0fde2 = $this->env->getExtension("native_profiler");
        $__internal_491a7b604f8093687306af9dbba0f36cface3ca3fe1d00e916e44e8fb3f0fde2->enter($__internal_491a7b604f8093687306af9dbba0f36cface3ca3fe1d00e916e44e8fb3f0fde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        // line 12
        echo "    \"data\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
        echo "\",
    ";
        // line 13
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "editable", array())) {
            // line 14
            echo "        \"render\": function(data, type, row, meta) {
            return render_editable_boolean(data, type, row, meta, '";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "trueLabel", array()), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "falseLabel", array()), "html", null, true);
            echo "');
        },
    ";
        } else {
            // line 18
            echo "        \"render\": function(data, type, row, meta) {
            return ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "render", array()), "html", null, true);
            echo "(data, type, row, meta, \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "trueIcon", array()), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "falseIcon", array()), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "trueLabel", array()), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "falseLabel", array()), "html", null, true);
            echo "\");
        },
    ";
        }
        
        $__internal_491a7b604f8093687306af9dbba0f36cface3ca3fe1d00e916e44e8fb3f0fde2->leave($__internal_491a7b604f8093687306af9dbba0f36cface3ca3fe1d00e916e44e8fb3f0fde2_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Column:boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 19,  60 => 18,  50 => 15,  47 => 14,  45 => 13,  40 => 12,  34 => 11,  11 => 9,);
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
/* {% block data %}*/
/*     "data": "{{ column.data }}",*/
/*     {% if column.editable %}*/
/*         "render": function(data, type, row, meta) {*/
/*             return render_editable_boolean(data, type, row, meta, '{{ column.data }}', '{{ column.trueLabel }}', '{{ column.falseLabel }}');*/
/*         },*/
/*     {% else %}*/
/*         "render": function(data, type, row, meta) {*/
/*             return {{ column.render }}(data, type, row, meta, "{{ column.trueIcon }}", "{{ column.falseIcon }}", "{{ column.trueLabel }}", "{{ column.falseLabel }}");*/
/*         },*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
