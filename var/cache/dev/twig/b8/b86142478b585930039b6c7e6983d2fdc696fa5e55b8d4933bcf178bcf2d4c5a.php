<?php

/* SgDatatablesBundle:Column:datetime.html.twig */
class __TwigTemplate_0e0a1f15580e266ee76f146e124adf8585b01b18dd127d6815f9269eccefd7ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "SgDatatablesBundle:Column:datetime.html.twig", 9);
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
        $__internal_592604569025520cf19efc2b2728de771bb1515aa27b0ccf655018eae3078d79 = $this->env->getExtension("native_profiler");
        $__internal_592604569025520cf19efc2b2728de771bb1515aa27b0ccf655018eae3078d79->enter($__internal_592604569025520cf19efc2b2728de771bb1515aa27b0ccf655018eae3078d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_592604569025520cf19efc2b2728de771bb1515aa27b0ccf655018eae3078d79->leave($__internal_592604569025520cf19efc2b2728de771bb1515aa27b0ccf655018eae3078d79_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_a8a0850474073f494a0776a758a4fc1f662fe37ffafe3ca98c1c590de51a2559 = $this->env->getExtension("native_profiler");
        $__internal_a8a0850474073f494a0776a758a4fc1f662fe37ffafe3ca98c1c590de51a2559->enter($__internal_a8a0850474073f494a0776a758a4fc1f662fe37ffafe3ca98c1c590de51a2559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        // line 12
        echo "    \"data\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
        echo "\",
    ";
        // line 13
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "editable", array())) {
            // line 14
            echo "        \"render\": function(data, type, row, meta) {
            return render_editable_datetime(data, type, row, meta, '";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "dateFormat", array()), "html", null, true);
            echo "');
        },
    ";
        } else {
            // line 18
            echo "        \"render\": function(data, type, row, meta) {
            return ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "render", array()), "html", null, true);
            echo "(data, type, row, meta, '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "dateFormat", array()), "html", null, true);
            echo "');
        },
    ";
        }
        
        $__internal_a8a0850474073f494a0776a758a4fc1f662fe37ffafe3ca98c1c590de51a2559->leave($__internal_a8a0850474073f494a0776a758a4fc1f662fe37ffafe3ca98c1c590de51a2559_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Column:datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 19,  58 => 18,  50 => 15,  47 => 14,  45 => 13,  40 => 12,  34 => 11,  11 => 9,);
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
/*             return render_editable_datetime(data, type, row, meta, '{{ column.data }}', '{{ column.dateFormat }}');*/
/*         },*/
/*     {% else %}*/
/*         "render": function(data, type, row, meta) {*/
/*             return {{ column.render }}(data, type, row, meta, '{{ column.dateFormat }}');*/
/*         },*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
