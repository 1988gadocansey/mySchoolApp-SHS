<?php

/* SgDatatablesBundle:Filters:filter_text.html.twig */
class __TwigTemplate_21c6666ca1ab926f2f85f3f01f977a66af31991a8e7c07f280bcb93fb4939162 extends Twig_Template
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
        $__internal_b57037d334183b4aafeb9067567e3995d0eb03761669692d0c6a873f5bebe521 = $this->env->getExtension("native_profiler");
        $__internal_b57037d334183b4aafeb9067567e3995d0eb03761669692d0c6a873f5bebe521->enter($__internal_b57037d334183b4aafeb9067567e3995d0eb03761669692d0c6a873f5bebe521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Filters:filter_text.html.twig"));

        // line 9
        $this->displayBlock('html', $context, $blocks);
        // line 16
        $this->displayBlock('javascript', $context, $blocks);
        // line 18
        echo "
";
        
        $__internal_b57037d334183b4aafeb9067567e3995d0eb03761669692d0c6a873f5bebe521->leave($__internal_b57037d334183b4aafeb9067567e3995d0eb03761669692d0c6a873f5bebe521_prof);

    }

    // line 9
    public function block_html($context, array $blocks = array())
    {
        $__internal_a9cf2a09730cca46ddbaef252c226361f6fe8804a34ba4bfa48b4ff9b538a1c4 = $this->env->getExtension("native_profiler");
        $__internal_a9cf2a09730cca46ddbaef252c226361f6fe8804a34ba4bfa48b4ff9b538a1c4->enter($__internal_a9cf2a09730cca46ddbaef252c226361f6fe8804a34ba4bfa48b4ff9b538a1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

        // line 10
        echo "    <input type=\"text\"
           class=\"individual_filtering";
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
        
        $__internal_a9cf2a09730cca46ddbaef252c226361f6fe8804a34ba4bfa48b4ff9b538a1c4->leave($__internal_a9cf2a09730cca46ddbaef252c226361f6fe8804a34ba4bfa48b4ff9b538a1c4_prof);

    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_47254633388bd117e9a5a9e56c18e281cf40dc622c0edb266b0e6fdae18f57d6 = $this->env->getExtension("native_profiler");
        $__internal_47254633388bd117e9a5a9e56c18e281cf40dc622c0edb266b0e6fdae18f57d6->enter($__internal_47254633388bd117e9a5a9e56c18e281cf40dc622c0edb266b0e6fdae18f57d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_47254633388bd117e9a5a9e56c18e281cf40dc622c0edb266b0e6fdae18f57d6->leave($__internal_47254633388bd117e9a5a9e56c18e281cf40dc622c0edb266b0e6fdae18f57d6_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Filters:filter_text.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  77 => 16,  64 => 14,  60 => 13,  52 => 12,  45 => 11,  42 => 10,  36 => 9,  28 => 18,  26 => 16,  24 => 9,);
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
