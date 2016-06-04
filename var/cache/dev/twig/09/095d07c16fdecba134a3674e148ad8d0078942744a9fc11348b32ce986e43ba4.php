<?php

/* SgDatatablesBundle:Filters:filter_daterange.html.twig */
class __TwigTemplate_dbaba50cc72e9a38446b22bc537c9a2267a759097bb7667286537891372e1604 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html' => array($this, 'block_html'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c33d51c0248b5c4ac84ec1c5644fdff958b5742c0b6d271d932a63756476812 = $this->env->getExtension("native_profiler");
        $__internal_8c33d51c0248b5c4ac84ec1c5644fdff958b5742c0b6d271d932a63756476812->enter($__internal_8c33d51c0248b5c4ac84ec1c5644fdff958b5742c0b6d271d932a63756476812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Filters:filter_daterange.html.twig"));

        // line 9
        $this->displayBlock('html', $context, $blocks);
        // line 16
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_8c33d51c0248b5c4ac84ec1c5644fdff958b5742c0b6d271d932a63756476812->leave($__internal_8c33d51c0248b5c4ac84ec1c5644fdff958b5742c0b6d271d932a63756476812_prof);

    }

    // line 9
    public function block_html($context, array $blocks = array())
    {
        $__internal_28ba321cfb0ee7d5be97a80e175cccfdebd6337da4c1a4da0118b553f6174ac6 = $this->env->getExtension("native_profiler");
        $__internal_28ba321cfb0ee7d5be97a80e175cccfdebd6337da4c1a4da0118b553f6174ac6->enter($__internal_28ba321cfb0ee7d5be97a80e175cccfdebd6337da4c1a4da0118b553f6174ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

        // line 10
        echo "    <input type=\"text\"
           class=\"individual_filtering sg-daterange";
        // line 11
        if ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "class", array()), "html", null, true);
        }
        echo "\"
           style=\"";
        // line 12
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "width", array())) {
            echo " width:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "width", array()), "html", null, true);
            echo ";";
        }
        echo "\"
           placeholder=\"";
        // line 13
        echo twig_escape_filter($this->env, trim(strip_tags($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "title", array()))), "html", null, true);
        echo "\"
           ";
        // line 14
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "name", array())) {
            echo "name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "name", array()), "html", null, true);
            echo "\"";
        }
        echo " />
";
        
        $__internal_28ba321cfb0ee7d5be97a80e175cccfdebd6337da4c1a4da0118b553f6174ac6->leave($__internal_28ba321cfb0ee7d5be97a80e175cccfdebd6337da4c1a4da0118b553f6174ac6_prof);

    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_673ce0b0dd71ea4d0e037669853019048f42d079a98367fd8ff6526c832c9a00 = $this->env->getExtension("native_profiler");
        $__internal_673ce0b0dd71ea4d0e037669853019048f42d079a98367fd8ff6526c832c9a00->enter($__internal_673ce0b0dd71ea4d0e037669853019048f42d079a98367fd8ff6526c832c9a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 17
        echo "    <script type=\"text/javascript\">
        try {
            moment.locale(\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\");
            \$(\"#";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["tableId"]) ? $context["tableId"] : $this->getContext($context, "tableId")), "html", null, true);
        echo " .sg-daterange\").daterangepicker({
                autoUpdateInput: false,
                locale: {
                    format: \"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("daterange.format", array(), "messages"), "html", null, true);
        echo "\",
                    applyLabel: \"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("daterange.apply", array(), "messages"), "html", null, true);
        echo "\",
                    cancelLabel: \"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("daterange.cancel", array(), "messages"), "html", null, true);
        echo "\",
                    daysOfWeek: moment.weekdaysMin(),
                    monthNames: moment.monthsShort(),
                    firstDay: moment.localeData().firstDayOfWeek()
                }
            }).on('cancel.daterangepicker', function(ev, picker) {
                        \$(this).val('');
                        \$(this).change();
                    })
                    .on('apply.daterangepicker', function(ev, picker) {
                        \$(this).val(picker.startDate.format(\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("daterange.format", array(), "messages"), "html", null, true);
        echo "\") + ' - ' + picker.endDate.format(\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("daterange.format", array(), "messages"), "html", null, true);
        echo "\"));
                        \$(this).change();
                    });
        } catch (e) {
            console.log(e.message);
        }
    </script>
";
        
        $__internal_673ce0b0dd71ea4d0e037669853019048f42d079a98367fd8ff6526c832c9a00->leave($__internal_673ce0b0dd71ea4d0e037669853019048f42d079a98367fd8ff6526c832c9a00_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Filters:filter_daterange.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  115 => 35,  102 => 25,  98 => 24,  94 => 23,  88 => 20,  84 => 19,  80 => 17,  74 => 16,  61 => 14,  57 => 13,  49 => 12,  42 => 11,  39 => 10,  33 => 9,  26 => 16,  24 => 9,);
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
/* {% block html %}*/
/*     <input type="text"*/
/*            class="individual_filtering sg-daterange{% if column.filter.class %} {{ column.filter.class }}{% endif %}"*/
/*            style="{% if column.width %} width:{{ column.width }};{% endif %}"*/
/*            placeholder="{{ column.title|striptags|trim }}"*/
/*            {% if column.name %}name="{{ column.name }}"{% endif %} />*/
/* {% endblock %}*/
/* {% block javascript %}*/
/*     <script type="text/javascript">*/
/*         try {*/
/*             moment.locale("{{ app.request.locale }}");*/
/*             $("#{{ tableId }} .sg-daterange").daterangepicker({*/
/*                 autoUpdateInput: false,*/
/*                 locale: {*/
/*                     format: "{{ 'daterange.format'|trans({}, 'messages') }}",*/
/*                     applyLabel: "{{ 'daterange.apply'|trans({}, 'messages') }}",*/
/*                     cancelLabel: "{{ 'daterange.cancel'|trans({}, 'messages') }}",*/
/*                     daysOfWeek: moment.weekdaysMin(),*/
/*                     monthNames: moment.monthsShort(),*/
/*                     firstDay: moment.localeData().firstDayOfWeek()*/
/*                 }*/
/*             }).on('cancel.daterangepicker', function(ev, picker) {*/
/*                         $(this).val('');*/
/*                         $(this).change();*/
/*                     })*/
/*                     .on('apply.daterangepicker', function(ev, picker) {*/
/*                         $(this).val(picker.startDate.format("{{ 'daterange.format'|trans({}, 'messages') }}") + ' - ' + picker.endDate.format("{{ 'daterange.format'|trans({}, 'messages') }}"));*/
/*                         $(this).change();*/
/*                     });*/
/*         } catch (e) {*/
/*             console.log(e.message);*/
/*         }*/
/*     </script>*/
/* {% endblock %}*/
/* */
