<?php

/* SgDatatablesBundle:Datatable:datatable_js.html.twig */
class __TwigTemplate_516a101217a428617a262d0f53870e7f5738586b71f213b01d1d7886f410fab5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sg_datatable_render_functions' => array($this, 'block_sg_datatable_render_functions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script type=\"text/javascript\">
    \$(document).ready(function () {

        var selector = \"#";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["view_table_id"]) ? $context["view_table_id"] : null), "html", null, true);
        echo "\";

        var defaults = {
            ";
        // line 7
        $this->loadTemplate("SgDatatablesBundle:Datatable:language.html.twig", "SgDatatablesBundle:Datatable:datatable_js.html.twig", 7)->display($context);
        // line 8
        echo "        };

        var features = {
            ";
        // line 11
        $this->loadTemplate("SgDatatablesBundle:Datatable:features.html.twig", "SgDatatablesBundle:Datatable:datatable_js.html.twig", 11)->display($context);
        // line 12
        echo "        };

        var options = {
            ";
        // line 15
        $this->loadTemplate("SgDatatablesBundle:Datatable:options.html.twig", "SgDatatablesBundle:Datatable:datatable_js.html.twig", 15)->display($context);
        // line 16
        echo "        };

        var callbacks = {
            ";
        // line 19
        $this->loadTemplate("SgDatatablesBundle:Datatable:callbacks.html.twig", "SgDatatablesBundle:Datatable:datatable_js.html.twig", 19)->display($context);
        // line 20
        echo "        };

        var ajax = {
            ";
        // line 23
        $this->loadTemplate("SgDatatablesBundle:Datatable:ajax.html.twig", "SgDatatablesBundle:Datatable:datatable_js.html.twig", 23)->display($context);
        // line 24
        echo "        };

        var searchCols = {
            ";
        // line 27
        $this->loadTemplate("SgDatatablesBundle:Datatable:search_columns.html.twig", "SgDatatablesBundle:Datatable:datatable_js.html.twig", 27)->display($context);
        // line 28
        echo "        };

        setTimeout(function() {
            var columns = {
                ";
        // line 32
        $this->loadTemplate("SgDatatablesBundle:Datatable:columns.html.twig", "SgDatatablesBundle:Datatable:datatable_js.html.twig", 32)->display($context);
        // line 33
        echo "            };

            \$.extend(defaults, features);
            \$.extend(defaults, options);
            \$.extend(defaults, callbacks);
            \$.extend(defaults, ajax);
            \$.extend(defaults, columns);
            \$.extend(defaults, searchCols);

            if (\$.fn.DataTable.isDataTable(selector)) {
                ";
        // line 46
        echo "            } else {
                var oTable = \$(selector)
                ";
        // line 49
        echo "                ";
        if ($this->getAttribute($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : null), "extensions", array(), "any", false, true), "buttons", array(), "any", true, true)) {
            // line 50
            echo "                    ";
            if (((true == $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : null), "useIntegrationOptions", array())) && (false == $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : null), "getForceDom", array())))) {
                // line 51
                echo "                        .on('init.dt',
                            function() {
                                if ('bootstrap' == oTable.context[0].renderer) {
                                    oTable.buttons().container().appendTo('#' + oTable.table().container().id + ' .col-sm-6:eq(0)');
                                }

                                if ('foundation' == oTable.context[0].renderer) {
                                    oTable.buttons().container().appendTo('#' + oTable.table().container().id + ' .small-6.columns:eq(0)');
                                }

                                if ('jqueryui' == oTable.context[0].renderer) {
                                    oTable.buttons().container().appendTo('#' + oTable.table().container().id);
                                }
                            }
                        )
                    ";
            }
            // line 67
            echo "                ";
        }
        // line 68
        echo "                ";
        $this->loadTemplate("SgDatatablesBundle:Datatable:before_events.js.twig", "SgDatatablesBundle:Datatable:datatable_js.html.twig", 68)->display($context);
        // line 69
        echo "                .DataTable(defaults)
                        .on('draw.dt', function() {
                            ";
        // line 71
        $this->loadTemplate("SgDatatablesBundle:Datatable:editable.html.twig", "SgDatatablesBundle:Datatable:datatable_js.html.twig", 71)->display($context);
        // line 72
        echo "                        })
                        ";
        // line 73
        $this->loadTemplate("SgDatatablesBundle:Datatable:after_events.js.twig", "SgDatatablesBundle:Datatable:datatable_js.html.twig", 73)->display($context);
        // line 74
        echo "            }

            ";
        // line 76
        if ($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : null), "individualFiltering", array())) {
            // line 77
            echo "
                ";
            // line 78
            if (("head" == $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : null), "individualFilteringPosition", array()))) {
                // line 79
                echo "                    \$(selector + '_wrapper tfoot tr').insertAfter(\$(selector + '_wrapper thead tr').first());
                ";
            }
            // line 81
            echo "
                ";
            // line 82
            if (("both" == $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : null), "individualFilteringPosition", array()))) {
                // line 83
                echo "                    \$(selector + '_wrapper tfoot tr').clone().insertAfter(\$(selector + '_wrapper thead tr').first());
                ";
            }
            // line 85
            echo "
                ";
            // line 87
            echo "
                var throttledSearch = \$.fn.DataTable.util.throttle(
                    function (event) {
                        if (event.type == \"keyup\") {
                            if (
                                    event.keyCode == 37 ||
                                    event.keyCode == 38 ||
                                    event.keyCode == 39 ||
                                    event.keyCode == 40 ||
                                    event.keyCode == 16 ||
                                    event.keyCode == 17 ||
                                    event.keyCode == 18
                            )
                                return;
                        }

                        oTable
                                .column(\$(this).parent().index() + ':visible')
                                .search(this.value)
                                .draw();
                    },
                    options.searchDelay
                );
                
                \$(selector + \"_wrapper\").find(\"tr input.individual_filtering\").on(\"keyup change\", throttledSearch);

                \$(selector + \"_wrapper\" + \" select.individual_filtering\").on(\"keyup change\", function(event) {
                    var searchFieldId = \$(event.currentTarget).data('filter-property-id');
                    var searchValue = \$(this).val();
                    searchValue = searchValue ? searchValue.toString() : '';
                    oTable
                        .column(searchFieldId)
                        .search(searchValue)
                        .draw();
                });

            ";
        }
        // line 124
        echo "
            ";
        // line 125
        if ((isset($context["view_multiselect"]) ? $context["view_multiselect"] : null)) {
            // line 126
            echo "                ";
            $this->loadTemplate("SgDatatablesBundle:Action:multiselect_actions.html.twig", "SgDatatablesBundle:Datatable:datatable_js.html.twig", 126)->display(array_merge($context, array("column" => (isset($context["view_multiselect_column"]) ? $context["view_multiselect_column"] : null))));
            // line 127
            echo "            ";
        }
        // line 128
        echo "
        }, features.delay);
    });

</script>

";
        // line 134
        $this->displayBlock('sg_datatable_render_functions', $context, $blocks);
    }

    public function block_sg_datatable_render_functions($context, array $blocks = array())
    {
        // line 135
        echo "
    ";
        // line 136
        $this->loadTemplate("SgDatatablesBundle:Datatable:render_functions.html.twig", "SgDatatablesBundle:Datatable:datatable_js.html.twig", 136)->display($context);
        // line 137
        echo "
";
    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Datatable:datatable_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 137,  227 => 136,  224 => 135,  218 => 134,  210 => 128,  207 => 127,  204 => 126,  202 => 125,  199 => 124,  160 => 87,  157 => 85,  153 => 83,  151 => 82,  148 => 81,  144 => 79,  142 => 78,  139 => 77,  137 => 76,  133 => 74,  131 => 73,  128 => 72,  126 => 71,  122 => 69,  119 => 68,  116 => 67,  98 => 51,  95 => 50,  92 => 49,  88 => 46,  76 => 33,  74 => 32,  68 => 28,  66 => 27,  61 => 24,  59 => 23,  54 => 20,  52 => 19,  47 => 16,  45 => 15,  40 => 12,  38 => 11,  33 => 8,  31 => 7,  25 => 4,  20 => 1,);
    }
}
/* <script type="text/javascript">*/
/*     $(document).ready(function () {*/
/* */
/*         var selector = "#{{ view_table_id }}";*/
/* */
/*         var defaults = {*/
/*             {% include "SgDatatablesBundle:Datatable:language.html.twig" %}*/
/*         };*/
/* */
/*         var features = {*/
/*             {% include "SgDatatablesBundle:Datatable:features.html.twig" %}*/
/*         };*/
/* */
/*         var options = {*/
/*             {% include "SgDatatablesBundle:Datatable:options.html.twig" %}*/
/*         };*/
/* */
/*         var callbacks = {*/
/*             {% include "SgDatatablesBundle:Datatable:callbacks.html.twig" %}*/
/*         };*/
/* */
/*         var ajax = {*/
/*             {% include "SgDatatablesBundle:Datatable:ajax.html.twig" %}*/
/*         };*/
/* */
/*         var searchCols = {*/
/*             {% include "SgDatatablesBundle:Datatable:search_columns.html.twig" %}*/
/*         };*/
/* */
/*         setTimeout(function() {*/
/*             var columns = {*/
/*                 {% include "SgDatatablesBundle:Datatable:columns.html.twig" %}*/
/*             };*/
/* */
/*             $.extend(defaults, features);*/
/*             $.extend(defaults, options);*/
/*             $.extend(defaults, callbacks);*/
/*             $.extend(defaults, ajax);*/
/*             $.extend(defaults, columns);*/
/*             $.extend(defaults, searchCols);*/
/* */
/*             if ($.fn.DataTable.isDataTable(selector)) {*/
/*                 {#*/
/*                     to check if datatable already exists*/
/*                 #}*/
/*             } else {*/
/*                 var oTable = $(selector)*/
/*                 {# Use the Button-Extension with integration options #}*/
/*                 {% if view_features.extensions.buttons is defined %}*/
/*                     {% if true == view_options.useIntegrationOptions and false == view_options.getForceDom %}*/
/*                         .on('init.dt',*/
/*                             function() {*/
/*                                 if ('bootstrap' == oTable.context[0].renderer) {*/
/*                                     oTable.buttons().container().appendTo('#' + oTable.table().container().id + ' .col-sm-6:eq(0)');*/
/*                                 }*/
/* */
/*                                 if ('foundation' == oTable.context[0].renderer) {*/
/*                                     oTable.buttons().container().appendTo('#' + oTable.table().container().id + ' .small-6.columns:eq(0)');*/
/*                                 }*/
/* */
/*                                 if ('jqueryui' == oTable.context[0].renderer) {*/
/*                                     oTable.buttons().container().appendTo('#' + oTable.table().container().id);*/
/*                                 }*/
/*                             }*/
/*                         )*/
/*                     {% endif %}*/
/*                 {% endif %}*/
/*                 {% include "SgDatatablesBundle:Datatable:before_events.js.twig" %}*/
/*                 .DataTable(defaults)*/
/*                         .on('draw.dt', function() {*/
/*                             {% include "SgDatatablesBundle:Datatable:editable.html.twig" %}*/
/*                         })*/
/*                         {% include "SgDatatablesBundle:Datatable:after_events.js.twig" %}*/
/*             }*/
/* */
/*             {% if view_options.individualFiltering %}*/
/* */
/*                 {% if "head" == view_options.individualFilteringPosition %}*/
/*                     $(selector + '_wrapper tfoot tr').insertAfter($(selector + '_wrapper thead tr').first());*/
/*                 {% endif %}*/
/* */
/*                 {% if "both" == view_options.individualFilteringPosition %}*/
/*                     $(selector + '_wrapper tfoot tr').clone().insertAfter($(selector + '_wrapper thead tr').first());*/
/*                 {% endif %}*/
/* */
/*                 {# "foot" position -> datatable_html.html.twig #}*/
/* */
/*                 var throttledSearch = $.fn.DataTable.util.throttle(*/
/*                     function (event) {*/
/*                         if (event.type == "keyup") {*/
/*                             if (*/
/*                                     event.keyCode == 37 ||*/
/*                                     event.keyCode == 38 ||*/
/*                                     event.keyCode == 39 ||*/
/*                                     event.keyCode == 40 ||*/
/*                                     event.keyCode == 16 ||*/
/*                                     event.keyCode == 17 ||*/
/*                                     event.keyCode == 18*/
/*                             )*/
/*                                 return;*/
/*                         }*/
/* */
/*                         oTable*/
/*                                 .column($(this).parent().index() + ':visible')*/
/*                                 .search(this.value)*/
/*                                 .draw();*/
/*                     },*/
/*                     options.searchDelay*/
/*                 );*/
/*                 */
/*                 $(selector + "_wrapper").find("tr input.individual_filtering").on("keyup change", throttledSearch);*/
/* */
/*                 $(selector + "_wrapper" + " select.individual_filtering").on("keyup change", function(event) {*/
/*                     var searchFieldId = $(event.currentTarget).data('filter-property-id');*/
/*                     var searchValue = $(this).val();*/
/*                     searchValue = searchValue ? searchValue.toString() : '';*/
/*                     oTable*/
/*                         .column(searchFieldId)*/
/*                         .search(searchValue)*/
/*                         .draw();*/
/*                 });*/
/* */
/*             {% endif %}*/
/* */
/*             {% if view_multiselect %}*/
/*                 {% include "SgDatatablesBundle:Action:multiselect_actions.html.twig" with {'column': view_multiselect_column} %}*/
/*             {% endif %}*/
/* */
/*         }, features.delay);*/
/*     });*/
/* */
/* </script>*/
/* */
/* {% block sg_datatable_render_functions %}*/
/* */
/*     {% include "SgDatatablesBundle:Datatable:render_functions.html.twig" %}*/
/* */
/* {% endblock %}*/
/* */
