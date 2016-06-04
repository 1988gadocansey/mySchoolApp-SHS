<?php

/* SgDatatablesBundle:Action:multiselect_actions.html.twig */
class __TwigTemplate_11b455b69d54f7d020382e4a2058e7237d5f455f99a5adbb78ce46d4277fa70b extends Twig_Template
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
        $context["visible"] = false;
        // line 10
        echo "
";
        // line 11
        ob_start();
        // line 12
        echo "    <div>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "actions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 14
            echo "            ";
            $context["visible"] = ((((($this->getAttribute($context["action"], "role", array()) &&  !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) && $this->env->getExtension('security')->isGranted($this->getAttribute($context["action"], "role", array()))) ||  !$this->getAttribute($context["action"], "role", array()))) ? (true) : (false));
            // line 15
            echo "
            ";
            // line 16
            if ((isset($context["visible"]) ? $context["visible"] : null)) {
                // line 17
                echo "                ";
                $context["route"] = (($this->getAttribute($context["action"], "route", array())) ? ($this->env->getExtension('routing')->getPath($this->getAttribute($context["action"], "route", array()), $this->getAttribute($context["action"], "routeParameters", array()))) : (""));
                // line 18
                echo "                ";
                ob_start();
                // line 19
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["action"], "attributes", array()));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "='";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "'";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "                ";
                $context["attributes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 21
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["route"]) ? $context["route"] : null), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
                echo ">";
                echo $this->env->getExtension('sg_datatables_twig_extension')->datatableIcon($this->env, $this->getAttribute($context["action"], "icon", array()), $this->getAttribute($context["action"], "label", array()));
                echo "</a>
            ";
            }
            // line 23
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </div>
";
        $context["multiple_actions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 26
        echo "
\$(\"#";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["view_table_id"]) ? $context["view_table_id"] : null), "html", null, true);
        echo "_multiselect_actions\").append(\"";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["multiple_actions"]) ? $context["multiple_actions"] : null), "js"), "html", null, true);
        echo "\");

\$(\".";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["view_table_id"]) ? $context["view_table_id"] : null), "html", null, true);
        echo "_multiselect_checkall\").click(function(event) {
    var that = this;
    \$(\"input.";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["view_table_id"]) ? $context["view_table_id"] : null), "html", null, true);
        echo "_multiselect_checkbox:checkbox\").each(function() {
        this.checked = that.checked;
    });
});

\$(\".";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["view_table_id"]) ? $context["view_table_id"] : null), "html", null, true);
        echo "_multiselect_action_click\").on('click', function(event) {
    var length = \$(\"input.";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["view_table_id"]) ? $context["view_table_id"] : null), "html", null, true);
        echo "_multiselect_checkbox:checkbox:checked\").length;

    event.preventDefault();

    if (length > 0) {
        if (!confirm( \"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("datatables.bulk.confirmMsg", array(), "messages"), "html", null, true);
        echo "\" )) {
            return;
        }

        ";
        // line 46
        $context["token"] = $this->env->getExtension('form')->renderCsrfToken("multiselect");
        // line 47
        echo "
        \$.ajax({
            url: \$(this).attr(\"href\"),
            type: \"POST\",
            cache: false,
            data: {
                'data': \$(\"input:checkbox:checked.";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["view_table_id"]) ? $context["view_table_id"] : null), "html", null, true);
        echo "_multiselect_checkbox\", oTable.rows().nodes()).serializeArray(),
                'token': '";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
        echo "'
            },
            success: function(msg) {
                oTable.draw();
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log(XMLHttpRequest + ' ' + textStatus + ' ' +errorThrown);
            }
        })
    } else {
        alert(\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("datatables.bulk.selectError", array(), "messages"), "html", null, true);
        echo "\");
    }
});
";
    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Action:multiselect_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 64,  140 => 54,  136 => 53,  128 => 47,  126 => 46,  119 => 42,  111 => 37,  107 => 36,  99 => 31,  94 => 29,  87 => 27,  84 => 26,  80 => 24,  74 => 23,  64 => 21,  61 => 20,  47 => 19,  44 => 18,  41 => 17,  39 => 16,  36 => 15,  33 => 14,  29 => 13,  26 => 12,  24 => 11,  21 => 10,  19 => 9,);
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
/* {% set visible = false %}*/
/* */
/* {% set multiple_actions %}*/
/*     <div>*/
/*         {% for action in column.actions %}*/
/*             {% set visible = (action.role and app.user is not null and is_granted(action.role) or not action.role) ? true : false %}*/
/* */
/*             {% if visible %}*/
/*                 {% set route = action.route ? path(action.route, action.routeParameters) : '' %}*/
/*                 {% set attributes %}*/
/*                     {% for key, value in action.attributes %} {{ key }}='{{ value }}'{% endfor %}*/
/*                 {% endset %}*/
/*                 <a href="{{ route }}" {{ attributes }}>{{ datatable_icon(action.icon, action.label) }}</a>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endset %}*/
/* */
/* $("#{{ view_table_id }}_multiselect_actions").append("{{ multiple_actions|e('js') }}");*/
/* */
/* $(".{{ view_table_id }}_multiselect_checkall").click(function(event) {*/
/*     var that = this;*/
/*     $("input.{{ view_table_id }}_multiselect_checkbox:checkbox").each(function() {*/
/*         this.checked = that.checked;*/
/*     });*/
/* });*/
/* */
/* $(".{{ view_table_id }}_multiselect_action_click").on('click', function(event) {*/
/*     var length = $("input.{{ view_table_id }}_multiselect_checkbox:checkbox:checked").length;*/
/* */
/*     event.preventDefault();*/
/* */
/*     if (length > 0) {*/
/*         if (!confirm( "{{ 'datatables.bulk.confirmMsg'|trans({}, 'messages') }}" )) {*/
/*             return;*/
/*         }*/
/* */
/*         {% set token = csrf_token('multiselect') %}*/
/* */
/*         $.ajax({*/
/*             url: $(this).attr("href"),*/
/*             type: "POST",*/
/*             cache: false,*/
/*             data: {*/
/*                 'data': $("input:checkbox:checked.{{ view_table_id }}_multiselect_checkbox", oTable.rows().nodes()).serializeArray(),*/
/*                 'token': '{{ token }}'*/
/*             },*/
/*             success: function(msg) {*/
/*                 oTable.draw();*/
/*             },*/
/*             error: function (XMLHttpRequest, textStatus, errorThrown) {*/
/*                 console.log(XMLHttpRequest + ' ' + textStatus + ' ' +errorThrown);*/
/*             }*/
/*         })*/
/*     } else {*/
/*         alert("{{ 'datatables.bulk.selectError'|trans({}, 'messages') }}");*/
/*     }*/
/* });*/
/* */
