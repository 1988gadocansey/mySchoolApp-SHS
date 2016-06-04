<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e1ae5cfac4b8caa9aa00b1f414bf9d87a4e0fa00fac434e9a7912c6b73ad4d64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de547f33e6515105955ab2afc53f549d36720f08999383a57265c99307206440 = $this->env->getExtension("native_profiler");
        $__internal_de547f33e6515105955ab2afc53f549d36720f08999383a57265c99307206440->enter($__internal_de547f33e6515105955ab2afc53f549d36720f08999383a57265c99307206440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de547f33e6515105955ab2afc53f549d36720f08999383a57265c99307206440->leave($__internal_de547f33e6515105955ab2afc53f549d36720f08999383a57265c99307206440_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b34102f6d487456c19784ea2e172ccd1a0f725f60d24c30e8a5336e2794d3f15 = $this->env->getExtension("native_profiler");
        $__internal_b34102f6d487456c19784ea2e172ccd1a0f725f60d24c30e8a5336e2794d3f15->enter($__internal_b34102f6d487456c19784ea2e172ccd1a0f725f60d24c30e8a5336e2794d3f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b34102f6d487456c19784ea2e172ccd1a0f725f60d24c30e8a5336e2794d3f15->leave($__internal_b34102f6d487456c19784ea2e172ccd1a0f725f60d24c30e8a5336e2794d3f15_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2a543005e98ef8b4079beaf4ddf258f9788809e16c6d637119e436d83b64100f = $this->env->getExtension("native_profiler");
        $__internal_2a543005e98ef8b4079beaf4ddf258f9788809e16c6d637119e436d83b64100f->enter($__internal_2a543005e98ef8b4079beaf4ddf258f9788809e16c6d637119e436d83b64100f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2a543005e98ef8b4079beaf4ddf258f9788809e16c6d637119e436d83b64100f->leave($__internal_2a543005e98ef8b4079beaf4ddf258f9788809e16c6d637119e436d83b64100f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_059beb0e9e514d06c255fc5f290dbdc4c1e1854285d33702cc9cd1d68e601510 = $this->env->getExtension("native_profiler");
        $__internal_059beb0e9e514d06c255fc5f290dbdc4c1e1854285d33702cc9cd1d68e601510->enter($__internal_059beb0e9e514d06c255fc5f290dbdc4c1e1854285d33702cc9cd1d68e601510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_059beb0e9e514d06c255fc5f290dbdc4c1e1854285d33702cc9cd1d68e601510->leave($__internal_059beb0e9e514d06c255fc5f290dbdc4c1e1854285d33702cc9cd1d68e601510_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
