<?php

/* SgDatatablesBundle:Action:icon.html.twig */
class __TwigTemplate_9b858315f2b634fd4d53a87792f882cfa10fc73d55f021cffd8cd158c97d923b extends Twig_Template
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
        $__internal_eada6c4b09dc0186a06c94b68e2dd8f92e6d0fc1a5129d33903e01d4977b14b9 = $this->env->getExtension("native_profiler");
        $__internal_eada6c4b09dc0186a06c94b68e2dd8f92e6d0fc1a5129d33903e01d4977b14b9->enter($__internal_eada6c4b09dc0186a06c94b68e2dd8f92e6d0fc1a5129d33903e01d4977b14b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Action:icon.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "    <i class=\"";
        echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
        echo "\"></i> ";
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_eada6c4b09dc0186a06c94b68e2dd8f92e6d0fc1a5129d33903e01d4977b14b9->leave($__internal_eada6c4b09dc0186a06c94b68e2dd8f92e6d0fc1a5129d33903e01d4977b14b9_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Action:icon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  22 => 1,);
    }
}
/* {% spaceless %}*/
/*     <i class="{{ icon }}"></i> {{ label }}*/
/* {% endspaceless %}*/
/* */
