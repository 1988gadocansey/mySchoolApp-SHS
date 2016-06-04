<?php

/* SgDatatablesBundle:Action:action.html.twig */
class __TwigTemplate_6afdd23e6398e8484867569858f5b5d1ee4dd588ce32fc8dc9aa5c6c2156a644 extends Twig_Template
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
        // line 9
        echo "var actionsString = \"\";

";
        // line 12
        if (($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "startHtml", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "startHtml", array())))) {
            // line 13
            echo "    actionsString += '";
            echo $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "startHtml", array());
            echo "';
";
        }
        // line 15
        echo "
var routeParameters, attributes, visibleFlag, roleFlag;

";
        // line 19
        if (twig_test_iterable((isset($context["actions"]) ? $context["actions"] : null))) {
            // line 20
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) ? $context["actions"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 21
                echo "        ";
                $this->loadTemplate("SgDatatablesBundle:Action:actions_string.html.twig", "SgDatatablesBundle:Action:action.html.twig", 21)->display($context);
                // line 22
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 24
            echo "    ";
            $this->loadTemplate("SgDatatablesBundle:Action:actions_string.html.twig", "SgDatatablesBundle:Action:action.html.twig", 24)->display(array_merge($context, array("action" => (isset($context["actions"]) ? $context["actions"] : null))));
        }
        // line 26
        echo "
";
        // line 28
        if (($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "endHtml", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "endHtml", array())))) {
            // line 29
            echo "    actionsString += '";
            echo $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "endHtml", array());
            echo "';
";
        }
        // line 31
        echo "
return actionsString;
";
    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Action:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 31,  83 => 29,  81 => 28,  78 => 26,  74 => 24,  59 => 22,  56 => 21,  38 => 20,  36 => 19,  31 => 15,  25 => 13,  23 => 12,  19 => 9,);
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
/* var actionsString = "";*/
/* */
/* {# startHtml - for ActionColumn #}*/
/* {% if column.startHtml is defined and column.startHtml is not empty %}*/
/*     actionsString += '{{ column.startHtml|raw }}';*/
/* {% endif %}*/
/* */
/* var routeParameters, attributes, visibleFlag, roleFlag;*/
/* */
/* {# build actionsString #}*/
/* {% if actions is iterable %}*/
/*     {% for action in actions %}*/
/*         {% include 'SgDatatablesBundle:Action:actions_string.html.twig' %}*/
/*     {% endfor %}*/
/* {% else %}*/
/*     {% include 'SgDatatablesBundle:Action:actions_string.html.twig' with { 'action': actions } %}*/
/* {% endif %}*/
/* */
/* {# endHtml - for ActionColumn #}*/
/* {% if column.endHtml is defined and column.endHtml is not empty %}*/
/*     actionsString += '{{ column.endHtml|raw }}';*/
/* {% endif %}*/
/* */
/* return actionsString;*/
/* */
