<?php

/* SgDatatablesBundle:Datatable:datatable_html.html.twig */
class __TwigTemplate_e5abf654607d7adb74d55483e42e14bf3a91c490ef7520d3a083a2bf76b8212b extends Twig_Template
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
        $__internal_83eccff0673be32fb10adea73aff0e7bd774572a4f20864fb01b0974be9afbe8 = $this->env->getExtension("native_profiler");
        $__internal_83eccff0673be32fb10adea73aff0e7bd774572a4f20864fb01b0974be9afbe8->enter($__internal_83eccff0673be32fb10adea73aff0e7bd774572a4f20864fb01b0974be9afbe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:datatable_html.html.twig"));

        // line 1
        echo $this->getAttribute((isset($context["view_actions"]) ? $context["view_actions"] : $this->getContext($context, "view_actions")), "startHtml", array());
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["view_actions"]) ? $context["view_actions"] : $this->getContext($context, "view_actions")), "actions", array()));
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
        echo $this->getAttribute((isset($context["view_actions"]) ? $context["view_actions"] : $this->getContext($context, "view_actions")), "endHtml", array());
        echo "

<table cellpadding=\"0\" cellspacing=\"0\" class=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "class", array()), "html", null, true);
        echo "\" border=\"0\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["view_table_id"]) ? $context["view_table_id"] : $this->getContext($context, "view_table_id")), "html", null, true);
        echo "\" width=\"100%\">
    <thead>
    </thead>
    ";
        // line 10
        if (($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "individualFiltering", array()) || (isset($context["view_multiselect"]) ? $context["view_multiselect"] : $this->getContext($context, "view_multiselect")))) {
            // line 11
            echo "        <tfoot>
            ";
            // line 12
            if ($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "individualFiltering", array())) {
                // line 13
                echo "            <tr>
                ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["view_columns"]) ? $context["view_columns"] : $this->getContext($context, "view_columns")));
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
                        echo $this->env->getExtension('sg_datatables_twig_extension')->datatableFilterRender($this->env, (isset($context["datatable"]) ? $context["datatable"] : $this->getContext($context, "datatable")), $context["column"], $this->getAttribute($context["loop"], "index0", array()));
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
        if ((isset($context["view_multiselect"]) ? $context["view_multiselect"] : $this->getContext($context, "view_multiselect"))) {
            // line 30
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, (isset($context["view_table_id"]) ? $context["view_table_id"] : $this->getContext($context, "view_table_id")), "html", null, true);
            echo "_multiselect_actions\"></div>
";
        }
        
        $__internal_83eccff0673be32fb10adea73aff0e7bd774572a4f20864fb01b0974be9afbe8->leave($__internal_83eccff0673be32fb10adea73aff0e7bd774572a4f20864fb01b0974be9afbe8_prof);

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
        return array (  140 => 30,  138 => 29,  132 => 25,  128 => 23,  124 => 21,  109 => 19,  103 => 17,  101 => 16,  98 => 15,  81 => 14,  78 => 13,  76 => 12,  73 => 11,  71 => 10,  63 => 7,  58 => 5,  43 => 3,  26 => 2,  22 => 1,);
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
