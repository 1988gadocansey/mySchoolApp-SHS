<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_375b898ba3d7fb3fbec1d3fea286b59b1f6a2edb5dfa51ee94ed0fc7f23e6b77 extends Twig_Template
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
        $__internal_eaf8729a3f5442fbf192c364e7acb1f3fc5fd78bb18e2e80149e43a7b08939de = $this->env->getExtension("native_profiler");
        $__internal_eaf8729a3f5442fbf192c364e7acb1f3fc5fd78bb18e2e80149e43a7b08939de->enter($__internal_eaf8729a3f5442fbf192c364e7acb1f3fc5fd78bb18e2e80149e43a7b08939de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_eaf8729a3f5442fbf192c364e7acb1f3fc5fd78bb18e2e80149e43a7b08939de->leave($__internal_eaf8729a3f5442fbf192c364e7acb1f3fc5fd78bb18e2e80149e43a7b08939de_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
