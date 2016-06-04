<?php

/* SgDatatablesBundle:Filters:filter_text.html.twig */
class __TwigTemplate_87d715c872c6ccb17c06b0bd72813037feda1e70089e5b24e5c84cd54c7763fa extends Twig_Template
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
        // line 18
        echo "
";
    }

    // line 9
    public function block_html($context, array $blocks = array())
    {
        // line 10
        echo "    <input type=\"text\"
           class=\"individual_filtering";
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
    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Filters:filter_text.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  65 => 16,  55 => 14,  51 => 13,  43 => 12,  36 => 11,  33 => 10,  30 => 9,  25 => 18,  23 => 16,  21 => 9,);
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
/*            class="individual_filtering{% if column.filter.class %} {{ column.filter.class }}{% endif %}"*/
/*            style="{% if column.width %} width:{{ column.width }};{% endif %}"*/
/*            placeholder="{{ column.title|striptags|trim }}"*/
/*            {% if column.name %}name="{{ column.name }}"{% endif %} />*/
/* {% endblock %}*/
/* {% block javascript %}*/
/* {% endblock %}*/
/* */
/* */
