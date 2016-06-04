<?php

/* SgDatatablesBundle:Action:actions_string.html.twig */
class __TwigTemplate_931430971564ad5965f6252a8707133fa206f3643878cc3e52b20fb143e2ff2d extends Twig_Template
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
        echo "routeParameters = new Array();
attributes = \"\";
roleFlag = true;

";
        // line 13
        if ($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "role", array())) {
            // line 14
            echo "    roleFlag = false;
    ";
            // line 15
            if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) && $this->env->getExtension('security')->isGranted($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "role", array())))) {
                // line 16
                echo "        roleFlag = true;
    ";
            }
        }
        // line 19
        echo "
if (row.actions.";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : null), "route", array()), "html", null, true);
        echo " && true == roleFlag) {
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "routeParameters", array()));
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : null), "route", array()), "html", null, true);
        echo "\", routeParameters);

    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "attributes", array()));
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
        if ($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "confirm", array())) {
            // line 35
            echo "        url += 'onclick=\"';
        ";
            // line 36
            if ($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "confirmMessage", array())) {
                // line 37
                echo "            url += \"return confirm('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : null), "confirmMessage", array()), "html", null, true);
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
        if (("array" == $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "alias", array()))) {
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
        echo $this->env->getExtension('sg_datatables_twig_extension')->datatableIcon($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : null), "icon", array()), $this->getAttribute((isset($context["action"]) ? $context["action"] : null), "label", array()));
        echo "';
    url += \"</a>\";

    actionsString += url;
}
";
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
        return array (  126 => 51,  123 => 50,  117 => 46,  114 => 45,  110 => 42,  107 => 41,  101 => 39,  95 => 37,  93 => 36,  90 => 35,  88 => 34,  82 => 30,  71 => 28,  67 => 27,  62 => 25,  59 => 24,  48 => 22,  44 => 21,  40 => 20,  37 => 19,  32 => 16,  30 => 15,  27 => 14,  25 => 13,  19 => 9,);
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
