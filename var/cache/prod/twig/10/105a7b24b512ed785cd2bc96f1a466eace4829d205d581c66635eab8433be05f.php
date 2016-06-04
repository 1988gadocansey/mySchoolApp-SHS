<?php

/* SgDatatablesBundle:Datatable:datatable_html.html.twig */
class __TwigTemplate_45f5dd8904dba4db68eb548302f190b7b3928478198e1b3def1d7115cb1559f3 extends Twig_Template
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
        echo $this->getAttribute((isset($context["view_actions"]) ? $context["view_actions"] : null), "startHtml", array());
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["view_actions"]) ? $context["view_actions"] : null), "actions", array()));
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
            // line 3
            echo "    ";
            $this->loadTemplate("SgDatatablesBundle:Action:top_actions.html.twig", "SgDatatablesBundle:Datatable:datatable_html.html.twig", 3)->display($context);
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
        // line 5
        echo $this->getAttribute((isset($context["view_actions"]) ? $context["view_actions"] : null), "endHtml", array());
        echo "

<table cellpadding=\"0\" cellspacing=\"0\" class=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : null), "class", array()), "html", null, true);
        echo "\" border=\"0\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["view_table_id"]) ? $context["view_table_id"] : null), "html", null, true);
        echo "\" width=\"100%\">
    <thead>
    </thead>
    ";
        // line 10
        if (($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : null), "individualFiltering", array()) || (isset($context["view_multiselect"]) ? $context["view_multiselect"] : null))) {
            // line 11
            echo "        <tfoot>
            ";
            // line 12
            if ($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : null), "individualFiltering", array())) {
                // line 13
                echo "            <tr>
                ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["view_columns"]) ? $context["view_columns"] : null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 15
                    echo "                    <td>
                        ";
                    // line 16
                    if ($this->getAttribute($context["column"], "searchable", array())) {
                        // line 17
                        echo "                            ";
                        echo $this->env->getExtension('sg_datatables_twig_extension')->datatableFilterRender($this->env, (isset($context["datatable"]) ? $context["datatable"] : null), $context["column"], $this->getAttribute($context["loop"], "index0", array()));
                        echo "
                        ";
                    }
                    // line 19
                    echo "                    </td>
                ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "            </tr>
            ";
            }
            // line 23
            echo "        </tfoot>
    ";
        }
        // line 25
        echo "    <tbody>
    </tbody>
</table>

";
        // line 29
        if ((isset($context["view_multiselect"]) ? $context["view_multiselect"] : null)) {
            // line 30
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, (isset($context["view_table_id"]) ? $context["view_table_id"] : null), "html", null, true);
            echo "_multiselect_actions\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Datatable:datatable_html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 30,  135 => 29,  129 => 25,  125 => 23,  121 => 21,  106 => 19,  100 => 17,  98 => 16,  95 => 15,  78 => 14,  75 => 13,  73 => 12,  70 => 11,  68 => 10,  60 => 7,  55 => 5,  40 => 3,  23 => 2,  19 => 1,);
    }
}
/* {{ view_actions.startHtml|raw }}*/
/* {% for action in view_actions.actions %}*/
/*     {% include 'SgDatatablesBundle:Action:top_actions.html.twig' %}*/
/* {% endfor %}*/
/* {{ view_actions.endHtml|raw }}*/
/* */
/* <table cellpadding="0" cellspacing="0" class="{{ view_options.class }}" border="0" id="{{ view_table_id }}" width="100%">*/
/*     <thead>*/
/*     </thead>*/
/*     {% if view_options.individualFiltering or view_multiselect %}*/
/*         <tfoot>*/
/*             {% if view_options.individualFiltering %}*/
/*             <tr>*/
/*                 {% for column in view_columns %}*/
/*                     <td>*/
/*                         {% if column.searchable %}*/
/*                             {{ datatable_filter_render(datatable, column, loop.index0) }}*/
/*                         {% endif %}*/
/*                     </td>*/
/*                 {% endfor %}*/
/*             </tr>*/
/*             {% endif %}*/
/*         </tfoot>*/
/*     {% endif %}*/
/*     <tbody>*/
/*     </tbody>*/
/* </table>*/
/* */
/* {% if view_multiselect %}*/
/*     <div id="{{ view_table_id }}_multiselect_actions"></div>*/
/* {% endif %}*/
/* */
