<?php

/* SgDatatablesBundle:Datatable:columns.html.twig */
class __TwigTemplate_1b53b681618b7210c0ea9a69a129eb4ec1ac647e65fe7020fbb2299dbd88b89c extends Twig_Template
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
        $__internal_be7f1c528eeaf9795644af55ff77b409dfd4711cabda3f32e5cdc6feee1c8ec8 = $this->env->getExtension("native_profiler");
        $__internal_be7f1c528eeaf9795644af55ff77b409dfd4711cabda3f32e5cdc6feee1c8ec8->enter($__internal_be7f1c528eeaf9795644af55ff77b409dfd4711cabda3f32e5cdc6feee1c8ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:columns.html.twig"));

        // line 1
        echo "\"columns\": [
    ";
        // line 2
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
            // line 3
            echo "        ";
            $this->loadTemplate($this->getAttribute($context["column"], "getTemplate", array()), "SgDatatablesBundle:Datatable:columns.html.twig", 3)->display($context);
            // line 4
            echo "    ";
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
        // line 5
        echo "]
";
        
        $__internal_be7f1c528eeaf9795644af55ff77b409dfd4711cabda3f32e5cdc6feee1c8ec8->leave($__internal_be7f1c528eeaf9795644af55ff77b409dfd4711cabda3f32e5cdc6feee1c8ec8_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Datatable:columns.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 5,  45 => 4,  42 => 3,  25 => 2,  22 => 1,);
    }
}
/* "columns": [*/
/*     {% for column in view_columns %}*/
/*         {% include column.getTemplate %}*/
/*     {% endfor %}*/
/* ]*/
/* */
