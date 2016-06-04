<?php

/* SgDatatablesBundle:Datatable:editable.html.twig */
class __TwigTemplate_c7b3a42f7d97212e20b02f85c0612eda937df2eae6857cf5209a4c8842ba4019 extends Twig_Template
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
        $__internal_5dbe1749a3b64a50b6dc110c798d1c91997568261035602f8c269470ba660a08 = $this->env->getExtension("native_profiler");
        $__internal_5dbe1749a3b64a50b6dc110c798d1c91997568261035602f8c269470ba660a08->enter($__internal_5dbe1749a3b64a50b6dc110c798d1c91997568261035602f8c269470ba660a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:editable.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["view_columns"]) ? $context["view_columns"] : $this->getContext($context, "view_columns")));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 2
            echo "    ";
            if ($this->getAttribute($context["column"], "editable", array(), "any", true, true)) {
                // line 3
                echo "        ";
                if ((true == $this->getAttribute($context["column"], "editable", array()))) {
                    // line 4
                    echo "            ";
                    $context["token"] = $this->env->getExtension('form')->renderCsrfToken("editable");
                    // line 5
                    echo "            var str = '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "data", array()), "html", null, true);
                    echo "'.split(\".\").join(\"_\");
            str = 'span.sg-editable-' + str;
            \$(str).editable({
                ";
                    // line 9
                    echo "                ";
                    if (("datetime" == $this->getAttribute($context["column"], "alias", array()))) {
                        // line 10
                        echo "                viewformat: '";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "dateFormat", array()), "html", null, true);
                        echo "',
                combodate: {maxYear: 2050},
                ";
                    }
                    // line 13
                    echo "                ";
                    // line 14
                    echo "                ";
                    if (("boolean" == $this->getAttribute($context["column"], "alias", array()))) {
                        // line 15
                        echo "                source: [{'true': \"";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["column"], "trueLabel", array())) ? ($this->getAttribute($context["column"], "trueLabel", array())) : ("true")), "html", null, true);
                        echo "\"}, {'false': \"";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["column"], "falseLabel", array())) ? ($this->getAttribute($context["column"], "falseLabel", array())) : ("false")), "html", null, true);
                        echo "\"}],
                emptytext: 'false',
                ";
                    }
                    // line 18
                    echo "                name: '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "data", array()), "html", null, true);
                    echo "',
                url: \"";
                    // line 19
                    echo $this->env->getExtension('routing')->getPath("sg_datatables_edit");
                    echo "\",
                title: '";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "title", array()), "html", null, true);
                    echo " ' + \"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("datatables.actions.edit", array(), "messages"), "html", null, true);
                    echo "\",
                params: function (params) {
                    params.entity = '";
                    // line 22
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["datatable"]) ? $context["datatable"] : $this->getContext($context, "datatable")), "entity", array()), "js"), "html", null, true);
                    echo "';
                    params.token = '";
                    // line 23
                    echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
                    echo "';

                    return params;
                },
                container: 'body',
                ";
                    // line 29
                    echo "                ";
                    if ($this->getAttribute($context["column"], "isAssociation", array())) {
                        // line 30
                        echo "                success: function(response, newValue) {
                    oTable.draw();
                    alert(\"";
                        // line 32
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("editable.tableRedraw", array(), "messages"), "html", null, true);
                        echo "\");
                }
                ";
                    }
                    // line 35
                    echo "            });
        ";
                }
                // line 37
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5dbe1749a3b64a50b6dc110c798d1c91997568261035602f8c269470ba660a08->leave($__internal_5dbe1749a3b64a50b6dc110c798d1c91997568261035602f8c269470ba660a08_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Datatable:editable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 37,  107 => 35,  101 => 32,  97 => 30,  94 => 29,  86 => 23,  82 => 22,  75 => 20,  71 => 19,  66 => 18,  57 => 15,  54 => 14,  52 => 13,  45 => 10,  42 => 9,  35 => 5,  32 => 4,  29 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for column in view_columns %}*/
/*     {% if column.editable is defined %}*/
/*         {% if true == column.editable %}*/
/*             {% set token = csrf_token('editable') %}*/
/*             var str = '{{ column.data }}'.split(".").join("_");*/
/*             str = 'span.sg-editable-' + str;*/
/*             $(str).editable({*/
/*                 {# datetime column #}*/
/*                 {% if 'datetime' == column.alias %}*/
/*                 viewformat: '{{ column.dateFormat }}',*/
/*                 combodate: {maxYear: 2050},*/
/*                 {% endif %}*/
/*                 {# boolean column #}*/
/*                 {% if 'boolean' == column.alias %}*/
/*                 source: [{'true': "{{ column.trueLabel ? column.trueLabel : 'true' }}"}, {'false': "{{ column.falseLabel ? column.falseLabel : 'false' }}"}],*/
/*                 emptytext: 'false',*/
/*                 {% endif %}*/
/*                 name: '{{ column.data }}',*/
/*                 url: "{{ path('sg_datatables_edit') }}",*/
/*                 title: '{{ column.title }} ' + "{{ 'datatables.actions.edit'|trans({}, 'messages') }}",*/
/*                 params: function (params) {*/
/*                     params.entity = '{{ datatable.entity|e('js') }}';*/
/*                     params.token = '{{ token }}';*/
/* */
/*                     return params;*/
/*                 },*/
/*                 container: 'body',*/
/*                 {# many-to-one association needs a complete table redraw #}*/
/*                 {% if column.isAssociation %}*/
/*                 success: function(response, newValue) {*/
/*                     oTable.draw();*/
/*                     alert("{{ 'editable.tableRedraw'|trans({}, 'messages') }}");*/
/*                 }*/
/*                 {% endif %}*/
/*             });*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {% endfor %}*/
/* */
