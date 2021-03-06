<?php

/* SgDatatablesBundle:Filters:filter_daterange.html.twig */
class __TwigTemplate_4958ff263183a7fd287c45d2f4c33dd7877385164afee25ad9f29d119b7d18f9 extends Twig_Template
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
        // line 9
        $this->displayBlock('html', $context, $blocks);
        // line 16
        $this->displayBlock('javascript', $context, $blocks);
    }

    // line 9
    public function block_html($context, array $blocks = array())
    {
        // line 10
        echo "    <input type=\"text\"
           class=\"individual_filtering sg-daterange";
        // line 11
        if ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "filter", array()), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "filter", array()), "class", array()), "html", null, true);
        }
        echo "\"
           style=\"";
        // line 12
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "width", array())) {
            echo " width:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "width", array()), "html", null, true);
            echo ";";
        }
        echo "\"
           placeholder=\"";
        // line 13
        echo twig_escape_filter($this->env, trim(strip_tags($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "title", array()))), "html", null, true);
        echo "\"
           ";
        // line 14
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "name", array())) {
            echo "name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "name", array()), "html", null, true);
            echo "\"";
        }
        echo " />
";
    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        // line 17
        echo "    <script type=\"text/javascript\">
        try {
            moment.locale(\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()), "html", null, true);
        echo "\");
            \$(\"#";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["tableId"]) ? $context["tableId"] : null), "html", null, true);
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
    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Filters:filter_daterange.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  100 => 35,  87 => 25,  83 => 24,  79 => 23,  73 => 20,  69 => 19,  65 => 17,  62 => 16,  52 => 14,  48 => 13,  40 => 12,  33 => 11,  30 => 10,  27 => 9,  23 => 16,  21 => 9,);
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
