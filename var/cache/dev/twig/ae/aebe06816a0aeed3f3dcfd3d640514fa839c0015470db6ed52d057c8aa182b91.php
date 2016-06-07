<?php

/* KnpPaginatorBundle:Pagination:uikit.html.twig */
class __TwigTemplate_e55cfa986864076ee087752eafde1a848affc7601882a2b3fa101ed54b90467e extends Twig_Template
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
        $__internal_4792e731b72fb29f7dfac612d338a53f9e27c950f5b4aa8c68ea2ca128274e84 = $this->env->getExtension("native_profiler");
        $__internal_4792e731b72fb29f7dfac612d338a53f9e27c950f5b4aa8c68ea2ca128274e84->enter($__internal_4792e731b72fb29f7dfac612d338a53f9e27c950f5b4aa8c68ea2ca128274e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:uikit.html.twig"));

        // line 17
        echo "
";
        // line 18
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 19
            echo "    <ul class=\"uk-pagination\">

    ";
            // line 21
            if (array_key_exists("previous", $context)) {
                // line 22
                echo "        <li class=\"\">
            <a rel=\"prev\" href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">&laquo;&nbsp;";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
                echo "</a>
        </li>
    ";
            } else {
                // line 26
                echo "        <li class=\"uk-disabled\">
            <span>&laquo;&nbsp;";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
                echo "</span>
        </li>
    ";
            }
            // line 30
            echo "
    ";
            // line 31
            if (((isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) > 1)) {
                // line 32
                echo "        <li>
            <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => 1))), "html", null, true);
                echo "\">1</a>
        </li>
        ";
                // line 35
                if (((isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) == 3)) {
                    // line 36
                    echo "            <li>
                <a href=\"";
                    // line 37
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => 2))), "html", null, true);
                    echo "\">2</a>
            </li>
        ";
                } elseif ((                // line 39
(isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) != 2)) {
                    // line 40
                    echo "        <li class=\"uk-disabled\">
            <span>&hellip;</span>
        </li>
        ";
                }
                // line 44
                echo "    ";
            }
            // line 45
            echo "
    ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 47
                echo "        ";
                if (($context["page"] != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                    // line 48
                    echo "            <li>
                <a href=\"";
                    // line 49
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => $context["page"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
            </li>
        ";
                } else {
                    // line 52
                    echo "            <li class=\"uk-active\">
                <span>";
                    // line 53
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
            </li>
        ";
                }
                // line 56
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "
    ";
            // line 59
            if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > (isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")))) {
                // line 60
                echo "        ";
                if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > ((isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")) + 1))) {
                    // line 61
                    echo "            ";
                    if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > ((isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")) + 2))) {
                        // line 62
                        echo "                <li class=\"uk-disabled\">
                    <span>&hellip;</span>
                </li>
            ";
                    } else {
                        // line 66
                        echo "                <li>
                    <a href=\"";
                        // line 67
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => ((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) - 1)))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) - 1), "html", null, true);
                        echo "</a>
                </li>
            ";
                    }
                    // line 70
                    echo "        ";
                }
                // line 71
                echo "        <li>
            <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount"))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")), "html", null, true);
                echo "</a>
        </li>
    ";
            }
            // line 75
            echo "
    ";
            // line 76
            if (array_key_exists("next", $context)) {
                // line 77
                echo "        <li class=\"\">
            <a rel=\"next\" href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
                echo "&nbsp;&raquo;</a>
        </li>
    ";
            } else {
                // line 81
                echo "        <li class=\"uk-disabled\">
            <span>";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
                echo "&nbsp;&raquo;</span>
        </li>
    ";
            }
            // line 85
            echo "    </ul>
";
        }
        
        $__internal_4792e731b72fb29f7dfac612d338a53f9e27c950f5b4aa8c68ea2ca128274e84->leave($__internal_4792e731b72fb29f7dfac612d338a53f9e27c950f5b4aa8c68ea2ca128274e84_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:uikit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 85,  185 => 82,  182 => 81,  174 => 78,  171 => 77,  169 => 76,  166 => 75,  158 => 72,  155 => 71,  152 => 70,  144 => 67,  141 => 66,  135 => 62,  132 => 61,  129 => 60,  127 => 59,  124 => 58,  117 => 56,  111 => 53,  108 => 52,  100 => 49,  97 => 48,  94 => 47,  90 => 46,  87 => 45,  84 => 44,  78 => 40,  76 => 39,  71 => 37,  68 => 36,  66 => 35,  61 => 33,  58 => 32,  56 => 31,  53 => 30,  47 => 27,  44 => 26,  36 => 23,  33 => 22,  31 => 21,  27 => 19,  25 => 18,  22 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * UIKIT Sliding pagination control implementation.*/
/*  **/
/*  * View that can be used with the pagination module*/
/*  * from the Twitter Bootstrap CSS Toolkit*/
/*  * http://getUIkit.com/components/#pagination*/
/*  **/
/*  * @author Pablo Díez <pablodip@gmail.com>*/
/*  * @author Jan Sorgalla <jsorgalla@gmail.com>*/
/*  * @author Artem Ponomarenko <imenem@inbox.ru>*/
/*  * @author Artem Zabelin <artjomzabelin@gmail.com>*/
/*  * @author Gad Ocansey <gadocansey@gmail.com>*/
/*  *//* */
/* #}*/
/* */
/* {% if pageCount > 1 %}*/
/*     <ul class="uk-pagination">*/
/* */
/*     {% if previous is defined %}*/
/*         <li class="">*/
/*             <a rel="prev" href="{{ path(route, query|merge({(pageParameterName): previous})) }}">&laquo;&nbsp;{{ 'Previous'|trans }}</a>*/
/*         </li>*/
/*     {% else %}*/
/*         <li class="uk-disabled">*/
/*             <span>&laquo;&nbsp;{{ 'Previous'|trans }}</span>*/
/*         </li>*/
/*     {% endif %}*/
/* */
/*     {% if startPage > 1 %}*/
/*         <li>*/
/*             <a href="{{ path(route, query|merge({(pageParameterName): 1})) }}">1</a>*/
/*         </li>*/
/*         {% if startPage == 3 %}*/
/*             <li>*/
/*                 <a href="{{ path(route, query|merge({(pageParameterName): 2})) }}">2</a>*/
/*             </li>*/
/*         {% elseif startPage != 2 %}*/
/*         <li class="uk-disabled">*/
/*             <span>&hellip;</span>*/
/*         </li>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* */
/*     {% for page in pagesInRange %}*/
/*         {% if page != current %}*/
/*             <li>*/
/*                 <a href="{{ path(route, query|merge({(pageParameterName): page})) }}">{{ page }}</a>*/
/*             </li>*/
/*         {% else %}*/
/*             <li class="uk-active">*/
/*                 <span>{{ page }}</span>*/
/*             </li>*/
/*         {% endif %}*/
/* */
/*     {% endfor %}*/
/* */
/*     {% if pageCount > endPage %}*/
/*         {% if pageCount > (endPage + 1) %}*/
/*             {% if pageCount > (endPage + 2) %}*/
/*                 <li class="uk-disabled">*/
/*                     <span>&hellip;</span>*/
/*                 </li>*/
/*             {% else %}*/
/*                 <li>*/
/*                     <a href="{{ path(route, query|merge({(pageParameterName): (pageCount - 1)})) }}">{{ pageCount -1 }}</a>*/
/*                 </li>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         <li>*/
/*             <a href="{{ path(route, query|merge({(pageParameterName): pageCount})) }}">{{ pageCount }}</a>*/
/*         </li>*/
/*     {% endif %}*/
/* */
/*     {% if next is defined %}*/
/*         <li class="">*/
/*             <a rel="next" href="{{ path(route, query|merge({(pageParameterName): next})) }}">{{ 'Next'|trans }}&nbsp;&raquo;</a>*/
/*         </li>*/
/*     {% else %}*/
/*         <li class="uk-disabled">*/
/*             <span>{{ 'Next'|trans }}&nbsp;&raquo;</span>*/
/*         </li>*/
/*     {% endif %}*/
/*     </ul>*/
/* {% endif %}*/
/* */
