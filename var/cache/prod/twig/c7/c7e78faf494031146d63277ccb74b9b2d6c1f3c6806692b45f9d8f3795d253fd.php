<?php

/* SgDatatablesBundle:Datatable:render_functions.html.twig */
class __TwigTemplate_91f3257fe84261c407705c7b5fa69acbfdc7dc129e8404d1e417149ed9bcad5f extends Twig_Template
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
        echo "<script>
    function render_boolean(data, type, row, meta, trueIcon, falseIcon, trueLabel, falseLabel) {
        if (\"\" == trueIcon && \"\" == trueLabel) {
            trueLabel = \"true\";
        }

        if (\"\" == falseIcon && \"\" == falseLabel) {
            falseLabel = \"false\";
        }

        if (data == true) {
            return \"<span class='\" + trueIcon + \"'></span> \" + trueLabel;
        } else {
            return \"<span class='\" + falseIcon + \"'></span> \" + falseLabel;
        }
    }

    function render_datetime(data, type, row, meta, dateFormat) {
        if (data != null && typeof data.timestamp != \"undefined\") {
            moment.locale(\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()), "html", null, true);
        echo "\");
            return moment.unix(data.timestamp).format(dateFormat);
        } else {
            return null;
        }
    }

    function render_timeago(data, type, row, meta) {
        if (data != null && typeof data.timestamp != \"undefined\") {
            moment.locale(\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()), "html", null, true);
        echo "\");
            return moment.unix(data.timestamp).fromNow();
        } else {
            return null;
        }
    }

    function render_progress_bar(data, type, row, meta, barClasses, min, max, label, multi) {
        if (!data) {
            return '';
        }

        var valueNow = 'aria-valuenow=\"' + data + '\"';
        var valueMin = 'aria-valuemin=\"' + min + '\"';
        var valueMax = 'aria-valuemax=\"' + max + '\"';
        var intData = parseInt(data, 10);
        var size = (intData-min)*100/(max-min);
        var classNames = 'class=\"progress-bar ';

        if (true == multi) {
            if (size <= 35) {
                classNames += 'progress-bar-success' + '\"';
            }
            if (size > 35 && size <= 70) {
                classNames += 'progress-bar-warning' + '\"';
            }
            if (size > 70) {
                classNames += 'progress-bar-danger' + '\"';
            }
        } else {
            classNames += barClasses + '\"';
        }

        var style = 'style=\"width:' + size +  '%; color: black;\"';
        var result = '<div class=\"progress\">';
            result += '<div ' + classNames;
            result += 'role=\"progressbar\"' + valueNow + ' ' + valueMin + ' ' + valueMax + ' ' + style + '>';
            if (true == label) {
                result += data;
            }
            result += '</div></div>';

        return result;
    }

    function render_editable_text(data, type, row, meta, colData) {
        if (data != null) {
            var str = colData.split(\".\").join(\"_\");
            var spanClass = \"sg-editable-\" + str;
            var result = '<span class=\"' + spanClass + '\"';
            result += 'data-pk=\"' + row.id + '\"data-type=\"text\"' + '>' + data + '</span>';

            return result;
        } else {
            return null;
        }
    }

    function render_editable_datetime(data, type, row, meta, colData, dateFormat) {
        if (data != null && typeof data.timestamp != \"undefined\") {
            moment.locale(\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()), "html", null, true);
        echo "\");
            var spanClass = \"sg-editable-\" + colData;
            var result = '<span class=\"' + spanClass + '\"';
                result += 'data-pk=\"' + row.id + '\"data-type=\"combodate\"' + '>';
                result += moment.unix(data.timestamp).format(dateFormat);
                result += '</span>';

            return result;
        } else {
            return null;
        }
    }

    function render_editable_boolean(data, type, row, meta, colData, trueLabel, falseLabel) {
        if (\"\" == trueLabel) {
            trueLabel = \"true\";
        }

        if (\"\" == falseLabel) {
            falseLabel = \"false\";
        }

        var spanClass = \"sg-editable-\" + colData;
        var result = '<span class=\"' + spanClass + '\"';
            result += 'data-pk=\"' + row.id + '\"data-type=\"select\"' + 'data-value=\"' + data + '\"' + '>';

        if (data == true) {
            result += trueLabel;
        } else {
            result += falseLabel;
        }

        result += '</span>';

        return result;
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Datatable:render_functions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 97,  52 => 37,  40 => 28,  19 => 9,);
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
/* <script>*/
/*     function render_boolean(data, type, row, meta, trueIcon, falseIcon, trueLabel, falseLabel) {*/
/*         if ("" == trueIcon && "" == trueLabel) {*/
/*             trueLabel = "true";*/
/*         }*/
/* */
/*         if ("" == falseIcon && "" == falseLabel) {*/
/*             falseLabel = "false";*/
/*         }*/
/* */
/*         if (data == true) {*/
/*             return "<span class='" + trueIcon + "'></span> " + trueLabel;*/
/*         } else {*/
/*             return "<span class='" + falseIcon + "'></span> " + falseLabel;*/
/*         }*/
/*     }*/
/* */
/*     function render_datetime(data, type, row, meta, dateFormat) {*/
/*         if (data != null && typeof data.timestamp != "undefined") {*/
/*             moment.locale("{{ app.request.locale }}");*/
/*             return moment.unix(data.timestamp).format(dateFormat);*/
/*         } else {*/
/*             return null;*/
/*         }*/
/*     }*/
/* */
/*     function render_timeago(data, type, row, meta) {*/
/*         if (data != null && typeof data.timestamp != "undefined") {*/
/*             moment.locale("{{ app.request.locale }}");*/
/*             return moment.unix(data.timestamp).fromNow();*/
/*         } else {*/
/*             return null;*/
/*         }*/
/*     }*/
/* */
/*     function render_progress_bar(data, type, row, meta, barClasses, min, max, label, multi) {*/
/*         if (!data) {*/
/*             return '';*/
/*         }*/
/* */
/*         var valueNow = 'aria-valuenow="' + data + '"';*/
/*         var valueMin = 'aria-valuemin="' + min + '"';*/
/*         var valueMax = 'aria-valuemax="' + max + '"';*/
/*         var intData = parseInt(data, 10);*/
/*         var size = (intData-min)*100/(max-min);*/
/*         var classNames = 'class="progress-bar ';*/
/* */
/*         if (true == multi) {*/
/*             if (size <= 35) {*/
/*                 classNames += 'progress-bar-success' + '"';*/
/*             }*/
/*             if (size > 35 && size <= 70) {*/
/*                 classNames += 'progress-bar-warning' + '"';*/
/*             }*/
/*             if (size > 70) {*/
/*                 classNames += 'progress-bar-danger' + '"';*/
/*             }*/
/*         } else {*/
/*             classNames += barClasses + '"';*/
/*         }*/
/* */
/*         var style = 'style="width:' + size +  '%; color: black;"';*/
/*         var result = '<div class="progress">';*/
/*             result += '<div ' + classNames;*/
/*             result += 'role="progressbar"' + valueNow + ' ' + valueMin + ' ' + valueMax + ' ' + style + '>';*/
/*             if (true == label) {*/
/*                 result += data;*/
/*             }*/
/*             result += '</div></div>';*/
/* */
/*         return result;*/
/*     }*/
/* */
/*     function render_editable_text(data, type, row, meta, colData) {*/
/*         if (data != null) {*/
/*             var str = colData.split(".").join("_");*/
/*             var spanClass = "sg-editable-" + str;*/
/*             var result = '<span class="' + spanClass + '"';*/
/*             result += 'data-pk="' + row.id + '"data-type="text"' + '>' + data + '</span>';*/
/* */
/*             return result;*/
/*         } else {*/
/*             return null;*/
/*         }*/
/*     }*/
/* */
/*     function render_editable_datetime(data, type, row, meta, colData, dateFormat) {*/
/*         if (data != null && typeof data.timestamp != "undefined") {*/
/*             moment.locale("{{ app.request.locale }}");*/
/*             var spanClass = "sg-editable-" + colData;*/
/*             var result = '<span class="' + spanClass + '"';*/
/*                 result += 'data-pk="' + row.id + '"data-type="combodate"' + '>';*/
/*                 result += moment.unix(data.timestamp).format(dateFormat);*/
/*                 result += '</span>';*/
/* */
/*             return result;*/
/*         } else {*/
/*             return null;*/
/*         }*/
/*     }*/
/* */
/*     function render_editable_boolean(data, type, row, meta, colData, trueLabel, falseLabel) {*/
/*         if ("" == trueLabel) {*/
/*             trueLabel = "true";*/
/*         }*/
/* */
/*         if ("" == falseLabel) {*/
/*             falseLabel = "false";*/
/*         }*/
/* */
/*         var spanClass = "sg-editable-" + colData;*/
/*         var result = '<span class="' + spanClass + '"';*/
/*             result += 'data-pk="' + row.id + '"data-type="select"' + 'data-value="' + data + '"' + '>';*/
/* */
/*         if (data == true) {*/
/*             result += trueLabel;*/
/*         } else {*/
/*             result += falseLabel;*/
/*         }*/
/* */
/*         result += '</span>';*/
/* */
/*         return result;*/
/*     }*/
/* </script>*/
/* */
