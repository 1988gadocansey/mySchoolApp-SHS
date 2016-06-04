<?php

/* SgDatatablesBundle:Action:top_actions.html.twig */
class __TwigTemplate_ba0d06cc11ade47373194cc9a8c2b0826a482f96e8944fde1b1729977266d3d7 extends Twig_Template
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
        ob_start();
        // line 2
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : null), "route", array()), "html", null, true);
        echo "\"
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "attributes", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 4
            echo "            ";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "        ";
        if ($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "confirm", array())) {
            // line 7
            echo "            ";
            if ($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "confirmMessage", array())) {
                // line 8
                echo "                onclick=\"return confirm('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : null), "confirmMessage", array()), "html", null, true);
                echo "');\"
            ";
            } else {
                // line 10
                echo "                onclick=\"return confirm('";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("datatables.bulk.confirmMsg", array(), "messages"), "html", null, true);
                echo "');\"
            ";
            }
            // line 12
            echo "        ";
        }
        // line 13
        echo "    >";
        echo $this->env->getExtension('sg_datatables_twig_extension')->datatableIcon($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : null), "icon", array()), $this->getAttribute((isset($context["action"]) ? $context["action"] : null), "label", array()));
        echo "</a>
";
        $context["link"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 15
        echo "
";
        // line 16
        if ($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "role", array())) {
            // line 17
            echo "    ";
            if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) && $this->env->getExtension('security')->isGranted($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "role", array())))) {
                // line 18
                echo "        ";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo "
    ";
            }
        } else {
            // line 21
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
            echo "
";
        }
        // line 23
        echo "
";
    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Action:top_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 23,  83 => 21,  76 => 18,  73 => 17,  71 => 16,  68 => 15,  62 => 13,  59 => 12,  53 => 10,  47 => 8,  44 => 7,  41 => 6,  30 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set link %}*/
/*     <a href="{{action.route }}"*/
/*         {% for key, value in action.attributes %}*/
/*             {{ key }}="{{ value }}"*/
/*         {% endfor %}*/
/*         {% if action.confirm %}*/
/*             {% if action.confirmMessage %}*/
/*                 onclick="return confirm('{{ action.confirmMessage }}');"*/
/*             {% else %}*/
/*                 onclick="return confirm('{{ 'datatables.bulk.confirmMsg'|trans({}, 'messages') }}');"*/
/*             {% endif %}*/
/*         {% endif %}*/
/*     >{{ datatable_icon(action.icon, action.label) }}</a>*/
/* {% endset %}*/
/* */
/* {% if action.role %}*/
/*     {% if app.user is not null and is_granted(action.role) %}*/
/*         {{ link }}*/
/*     {% endif %}*/
/* {% else %}*/
/*     {{ link }}*/
/* {% endif %}*/
/* */
/* */
