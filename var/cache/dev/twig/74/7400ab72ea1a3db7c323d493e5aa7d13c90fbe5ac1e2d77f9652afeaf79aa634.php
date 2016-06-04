<?php

/* SgDatatablesBundle:Action:top_actions.html.twig */
class __TwigTemplate_015cea36be5572d2d9f4abcfca79c3fb4fcf5433ae994212ca925b83b356588e extends Twig_Template
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
        $__internal_06dc24ecb507e5a9557b50362c695d3a4bc680eeeb1ba3f3e3d45876916f5b9b = $this->env->getExtension("native_profiler");
        $__internal_06dc24ecb507e5a9557b50362c695d3a4bc680eeeb1ba3f3e3d45876916f5b9b->enter($__internal_06dc24ecb507e5a9557b50362c695d3a4bc680eeeb1ba3f3e3d45876916f5b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Action:top_actions.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "route", array()), "html", null, true);
        echo "\"
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "attributes", array()));
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
        if ($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "confirm", array())) {
            // line 7
            echo "            ";
            if ($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "confirmMessage", array())) {
                // line 8
                echo "                onclick=\"return confirm('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "confirmMessage", array()), "html", null, true);
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
        echo $this->env->getExtension('sg_datatables_twig_extension')->datatableIcon($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "icon", array()), $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "label", array()));
        echo "</a>
";
        $context["link"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 15
        echo "
";
        // line 16
        if ($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "role", array())) {
            // line 17
            echo "    ";
            if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('security')->isGranted($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "role", array())))) {
                // line 18
                echo "        ";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                echo "
    ";
            }
        } else {
            // line 21
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
            echo "
";
        }
        // line 23
        echo "
";
        
        $__internal_06dc24ecb507e5a9557b50362c695d3a4bc680eeeb1ba3f3e3d45876916f5b9b->leave($__internal_06dc24ecb507e5a9557b50362c695d3a4bc680eeeb1ba3f3e3d45876916f5b9b_prof);

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
        return array (  92 => 23,  86 => 21,  79 => 18,  76 => 17,  74 => 16,  71 => 15,  65 => 13,  62 => 12,  56 => 10,  50 => 8,  47 => 7,  44 => 6,  33 => 4,  29 => 3,  24 => 2,  22 => 1,);
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
