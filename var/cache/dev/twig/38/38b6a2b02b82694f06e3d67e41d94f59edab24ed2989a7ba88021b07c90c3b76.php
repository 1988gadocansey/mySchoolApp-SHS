<?php

/* SgDatatablesBundle:Action:actions_string.html.twig */
class __TwigTemplate_5e54b3359a70d6cc2c20b994257b6999da8a74b10630759d590906883d71c60a extends Twig_Template
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
        $__internal_0bf05a8c14eb3109e5e7bec0c006a8a7505fae0da0b2007253ff270eea3e5362 = $this->env->getExtension("native_profiler");
        $__internal_0bf05a8c14eb3109e5e7bec0c006a8a7505fae0da0b2007253ff270eea3e5362->enter($__internal_0bf05a8c14eb3109e5e7bec0c006a8a7505fae0da0b2007253ff270eea3e5362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Action:actions_string.html.twig"));

        // line 9
        echo "routeParameters = new Array();
attributes = \"\";
roleFlag = true;

";
        // line 13
        if ($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "role", array())) {
            // line 14
            echo "    roleFlag = false;
    ";
            // line 15
            if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('security')->isGranted($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "role", array())))) {
                // line 16
                echo "        roleFlag = true;
    ";
            }
        }
        // line 19
        echo "
if (row.actions.";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "route", array()), "html", null, true);
        echo " && true == roleFlag) {
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "routeParameters", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 22
            echo "        routeParameters[\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"] = row.";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo ";
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
    var route  = Routing.generate(\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "route", array()), "html", null, true);
        echo "\", routeParameters);

    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "attributes", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 28
            echo "        attributes += '";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\" ';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    var url  = \"<a \";
    url += 'href=\"' + route + '\" ';
    url += attributes;
    ";
        // line 34
        if ($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "confirm", array())) {
            // line 35
            echo "        url += 'onclick=\"';
        ";
            // line 36
            if ($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "confirmMessage", array())) {
                // line 37
                echo "            url += \"return confirm('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "confirmMessage", array()), "html", null, true);
                echo "')\" + '\" ';
        ";
            } else {
                // line 39
                echo "            url += \"return confirm('";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("datatables.bulk.confirmMsg", array(), "messages"), "html", null, true);
                echo "')\" + '\" ';
        ";
            }
            // line 41
            echo "    ";
        }
        // line 42
        echo "    url += \">\";

    ";
        // line 45
        echo "    ";
        if (("array" == $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "alias", array()))) {
            // line 46
            echo "        if (count !== 'undefined') {
            url += count + ' ';
        }
    ";
        }
        // line 50
        echo "
    url += '";
        // line 51
        echo $this->env->getExtension('sg_datatables_twig_extension')->datatableIcon($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "icon", array()), $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "label", array()));
        echo "';
    url += \"</a>\";

    actionsString += url;
}
";
        
        $__internal_0bf05a8c14eb3109e5e7bec0c006a8a7505fae0da0b2007253ff270eea3e5362->leave($__internal_0bf05a8c14eb3109e5e7bec0c006a8a7505fae0da0b2007253ff270eea3e5362_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Action:actions_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 51,  126 => 50,  120 => 46,  117 => 45,  113 => 42,  110 => 41,  104 => 39,  98 => 37,  96 => 36,  93 => 35,  91 => 34,  85 => 30,  74 => 28,  70 => 27,  65 => 25,  62 => 24,  51 => 22,  47 => 21,  43 => 20,  40 => 19,  35 => 16,  33 => 15,  30 => 14,  28 => 13,  22 => 9,);
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
/* routeParameters = new Array();*/
/* attributes = "";*/
/* roleFlag = true;*/
/* */
/* {% if action.role %}*/
/*     roleFlag = false;*/
/*     {% if app.user is not null and is_granted(action.role) %}*/
/*         roleFlag = true;*/
/*     {% endif %}*/
/* {% endif %}*/
/* */
/* if (row.actions.{{ action.route }} && true == roleFlag) {*/
/*     {% for key, value in action.routeParameters %}*/
/*         routeParameters["{{ key }}"] = row.{{ value }};*/
/*     {% endfor %}*/
/* */
/*     var route  = Routing.generate("{{ action.route }}", routeParameters);*/
/* */
/*     {% for key, value in action.attributes %}*/
/*         attributes += '{{ key }}="{{ value }}" ';*/
/*     {% endfor %}*/
/* */
/*     var url  = "<a ";*/
/*     url += 'href="' + route + '" ';*/
/*     url += attributes;*/
/*     {% if action.confirm %}*/
/*         url += 'onclick="';*/
/*         {% if action.confirmMessage %}*/
/*             url += "return confirm('{{ action.confirmMessage }}')" + '" ';*/
/*         {% else %}*/
/*             url += "return confirm('{{ 'datatables.bulk.confirmMsg'|trans({}, 'messages') }}')" + '" ';*/
/*         {% endif %}*/
/*     {% endif %}*/
/*     url += ">";*/
/* */
/*     {# count - for ArrayColumn #}*/
/*     {% if 'array' == column.alias %}*/
/*         if (count !== 'undefined') {*/
/*             url += count + ' ';*/
/*         }*/
/*     {% endif %}*/
/* */
/*     url += '{{ datatable_icon(action.icon, action.label) }}';*/
/*     url += "</a>";*/
/* */
/*     actionsString += url;*/
/* }*/
/* */
