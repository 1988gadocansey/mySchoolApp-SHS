<?php

/* SgDatatablesBundle:Action:action.html.twig */
class __TwigTemplate_5b7dd66ebb5bea3abfe7915edaa016428853b455a4154b1b9c24f84469a8e245 extends Twig_Template
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
        $__internal_5c963d5beddb88d2557cf92a53d8b4573206a8eea6c507c3873513311f3e60ea = $this->env->getExtension("native_profiler");
        $__internal_5c963d5beddb88d2557cf92a53d8b4573206a8eea6c507c3873513311f3e60ea->enter($__internal_5c963d5beddb88d2557cf92a53d8b4573206a8eea6c507c3873513311f3e60ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Action:action.html.twig"));

        // line 9
        echo "var actionsString = \"\";

";
        // line 12
        if (($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "startHtml", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "startHtml", array())))) {
            // line 13
            echo "    actionsString += '";
            echo $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "startHtml", array());
            echo "';
";
        }
        // line 15
        echo "
var routeParameters, attributes, visibleFlag, roleFlag;

";
        // line 19
        if (twig_test_iterable((isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")))) {
            // line 20
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")));
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
            $this->loadTemplate("SgDatatablesBundle:Action:actions_string.html.twig", "SgDatatablesBundle:Action:action.html.twig", 24)->display(array_merge($context, array("action" => (isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")))));
        }
        // line 26
        echo "
";
        // line 28
        if (($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "endHtml", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "endHtml", array())))) {
            // line 29
            echo "    actionsString += '";
            echo $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "endHtml", array());
            echo "';
";
        }
        // line 31
        echo "
return actionsString;
";
        
        $__internal_5c963d5beddb88d2557cf92a53d8b4573206a8eea6c507c3873513311f3e60ea->leave($__internal_5c963d5beddb88d2557cf92a53d8b4573206a8eea6c507c3873513311f3e60ea_prof);

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
        return array (  92 => 31,  86 => 29,  84 => 28,  81 => 26,  77 => 24,  62 => 22,  59 => 21,  41 => 20,  39 => 19,  34 => 15,  28 => 13,  26 => 12,  22 => 9,);
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
