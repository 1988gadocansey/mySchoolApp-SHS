<?php

/* SgDatatablesBundle:Filters:filter_select.html.twig */
class __TwigTemplate_8d068bcd37c6511975b938c5d64123af6b766f4355e8807a08ef3e5d38e11eb4 extends Twig_Template
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
        $__internal_1b51b7485bc5882a6bcd9e2c3ff714f5007999bbea805c7b0f1c7643bede5719 = $this->env->getExtension("native_profiler");
        $__internal_1b51b7485bc5882a6bcd9e2c3ff714f5007999bbea805c7b0f1c7643bede5719->enter($__internal_1b51b7485bc5882a6bcd9e2c3ff714f5007999bbea805c7b0f1c7643bede5719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Filters:filter_select.html.twig"));

        // line 9
        echo "<select
    class=\"individual_filtering";
        // line 10
        if ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "class", array()), "html", null, true);
        }
        echo "\"
    style=\"";
        // line 11
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "width", array())) {
            echo " width:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "width", array()), "html", null, true);
            echo ";";
        }
        echo "\"
    ";
        // line 12
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "name", array())) {
            echo "name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "name", array()), "html", null, true);
            echo "\"";
        }
        // line 13
        echo "    data-filter-property-id=\"";
        echo twig_escape_filter($this->env, (isset($context["filterColumnId"]) ? $context["filterColumnId"] : $this->getContext($context, "filterColumnId")), "html", null, true);
        echo "\"
    >
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "selectOptions", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["name"]) {
            // line 16
            echo "        ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 17
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" selected=\"selected\">";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</option>
        ";
            } else {
                // line 19
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</option>
        ";
            }
            // line 21
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</select>
";
        
        $__internal_1b51b7485bc5882a6bcd9e2c3ff714f5007999bbea805c7b0f1c7643bede5719->leave($__internal_1b51b7485bc5882a6bcd9e2c3ff714f5007999bbea805c7b0f1c7643bede5719_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Filters:filter_select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 22,  88 => 21,  80 => 19,  72 => 17,  69 => 16,  52 => 15,  46 => 13,  40 => 12,  32 => 11,  25 => 10,  22 => 9,);
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
/* <select*/
/*     class="individual_filtering{% if column.filter.class %} {{ column.filter.class }}{% endif %}"*/
/*     style="{% if column.width %} width:{{ column.width }};{% endif %}"*/
/*     {% if column.name %}name="{{ column.name }}"{% endif %}*/
/*     data-filter-property-id="{{ filterColumnId }}"*/
/*     >*/
/*     {% for key, name in column.filter.selectOptions %}*/
/*         {% if loop.first %}*/
/*             <option value="{{ key }}" selected="selected">{{ name }}</option>*/
/*         {% else %}*/
/*             <option value="{{ key }}">{{ name }}</option>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* </select>*/
/* */
