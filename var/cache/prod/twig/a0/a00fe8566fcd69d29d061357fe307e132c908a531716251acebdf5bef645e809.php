<?php

/* SgDatatablesBundle:Datatable:features.html.twig */
class __TwigTemplate_8b1dee51f463355d9e95b2f6042438d568029dc1522009f4569239d5ff1cd269 extends Twig_Template
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
        // line 1
        echo "\"autoWidth\": ";
        echo (($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : null), "autoWidth", array())) ? ("true") : ("false"));
        echo ",
\"deferRender\": ";
        // line 2
        echo (($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : null), "deferRender", array())) ? ("true") : ("false"));
        echo ",
\"info\": ";
        // line 3
        echo (($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : null), "info", array())) ? ("true") : ("false"));
        echo ",
\"jQueryUI\": ";
        // line 4
        echo (($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : null), "jQueryUI", array())) ? ("true") : ("false"));
        echo ",
\"lengthChange\": ";
        // line 5
        echo (($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : null), "lengthChange", array())) ? ("true") : ("false"));
        echo ",
\"ordering\": ";
        // line 6
        echo (($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : null), "ordering", array())) ? ("true") : ("false"));
        echo ",
\"paging\": ";
        // line 7
        echo (($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : null), "paging", array())) ? ("true") : ("false"));
        echo ",
\"processing\": ";
        // line 8
        echo (($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : null), "processing", array())) ? ("true") : ("false"));
        echo ",
\"scrollX\": ";
        // line 9
        echo (($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : null), "scrollX", array())) ? ("true") : ("false"));
        echo ",
\"scrollY\": \"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : null), "scrollY", array()), "html", null, true);
        echo "\",
\"searching\": ";
        // line 11
        echo (($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : null), "searching", array())) ? ("true") : ("false"));
        echo ",

";
        // line 14
        echo "
\"stateSave\": ";
        // line 15
        echo (($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : null), "stateSave", array())) ? ("true") : ("false"));
        echo ",
\"delay\": ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : null), "delay", array()), "html", null, true);
        echo ",

";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : null), "extensions", array()));
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
        foreach ($context['_seq'] as $context["extension"] => $context["options"]) {
            // line 19
            echo "    ";
            if (("buttons" == $context["extension"])) {
                // line 20
                echo "        \"buttons\": [
            ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["options"]);
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
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 22
                    echo "                ";
                    if ($this->getAttribute($context["option"], "action", array(), "any", true, true)) {
                        // line 23
                        echo "                {
                    \"text\": \"";
                        // line 24
                        echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "text", array()), "html", null, true);
                        echo "\",
                    \"action\": ";
                        // line 25
                        echo twig_include($this->env, $context, $this->getAttribute($context["option"], "action", array()));
                        echo "
                },
                ";
                    } else {
                        // line 28
                        echo "                    ";
                        echo twig_jsonencode_filter($context["option"]);
                        echo ",
                ";
                    }
                    // line 30
                    echo "            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "        ],
    ";
            } else {
                // line 33
                echo "        \"";
                echo twig_escape_filter($this->env, $context["extension"], "html", null, true);
                echo "\": ";
                echo twig_jsonencode_filter($context["options"]);
                echo ",
    ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['extension'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Datatable:features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 33,  153 => 31,  139 => 30,  133 => 28,  127 => 25,  123 => 24,  120 => 23,  117 => 22,  100 => 21,  97 => 20,  94 => 19,  77 => 18,  72 => 16,  68 => 15,  65 => 14,  60 => 11,  56 => 10,  52 => 9,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
/* "autoWidth": {{ view_features.autoWidth ? 'true' : 'false' }},*/
/* "deferRender": {{ view_features.deferRender ? 'true' : 'false' }},*/
/* "info": {{ view_features.info ? 'true' : 'false' }},*/
/* "jQueryUI": {{ view_features.jQueryUI ? 'true' : 'false' }},*/
/* "lengthChange": {{ view_features.lengthChange ? 'true' : 'false' }},*/
/* "ordering": {{ view_features.ordering ? 'true' : 'false' }},*/
/* "paging": {{ view_features.paging ? 'true' : 'false' }},*/
/* "processing": {{ view_features.processing ? 'true' : 'false' }},*/
/* "scrollX": {{ view_features.scrollX ? 'true' : 'false' }},*/
/* "scrollY": "{{ view_features.scrollY }}",*/
/* "searching": {{ view_features.searching ? 'true' : 'false' }},*/
/* */
/* {# "serverSide" -> Ajax.html.twig #}*/
/* */
/* "stateSave": {{ view_features.stateSave ? 'true' : 'false' }},*/
/* "delay": {{ view_features.delay }},*/
/* */
/* {% for extension, options in view_features.extensions %}*/
/*     {% if 'buttons' == extension %}*/
/*         "buttons": [*/
/*             {% for option in options %}*/
/*                 {% if option.action is defined %}*/
/*                 {*/
/*                     "text": "{{ option.text }}",*/
/*                     "action": {{ include(option.action|raw) }}*/
/*                 },*/
/*                 {% else %}*/
/*                     {{ option|json_encode|raw }},*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         ],*/
/*     {% else %}*/
/*         "{{ extension }}": {{ options|json_encode|raw }},*/
/*     {% endif %}*/
/* {% endfor %}*/
/* */
