<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f1d2c38c75cdca39140a356547b38700ee1f0d3c8d05004e6aaef5957ee7de7a extends Twig_Template
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
        $__internal_f57cc2d825cd80af3e2241551cbf35462465b0078e12833bfeede62b5d9c0227 = $this->env->getExtension("native_profiler");
        $__internal_f57cc2d825cd80af3e2241551cbf35462465b0078e12833bfeede62b5d9c0227->enter($__internal_f57cc2d825cd80af3e2241551cbf35462465b0078e12833bfeede62b5d9c0227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f57cc2d825cd80af3e2241551cbf35462465b0078e12833bfeede62b5d9c0227->leave($__internal_f57cc2d825cd80af3e2241551cbf35462465b0078e12833bfeede62b5d9c0227_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f55fdd7f5f699550569d063e7b69eeab64ddf89f04ae5465809749605716aa7f = $this->env->getExtension("native_profiler");
        $__internal_f55fdd7f5f699550569d063e7b69eeab64ddf89f04ae5465809749605716aa7f->enter($__internal_f55fdd7f5f699550569d063e7b69eeab64ddf89f04ae5465809749605716aa7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f55fdd7f5f699550569d063e7b69eeab64ddf89f04ae5465809749605716aa7f->leave($__internal_f55fdd7f5f699550569d063e7b69eeab64ddf89f04ae5465809749605716aa7f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a990f2103e17c5a2b0d2f0a47e197d5086e4b00e6b88ce9f4fce5f11e246fed1 = $this->env->getExtension("native_profiler");
        $__internal_a990f2103e17c5a2b0d2f0a47e197d5086e4b00e6b88ce9f4fce5f11e246fed1->enter($__internal_a990f2103e17c5a2b0d2f0a47e197d5086e4b00e6b88ce9f4fce5f11e246fed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a990f2103e17c5a2b0d2f0a47e197d5086e4b00e6b88ce9f4fce5f11e246fed1->leave($__internal_a990f2103e17c5a2b0d2f0a47e197d5086e4b00e6b88ce9f4fce5f11e246fed1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8a2f25f080ea47b249c542b2ec7bdde92ecdae87225c5da2ad9e67db6059f460 = $this->env->getExtension("native_profiler");
        $__internal_8a2f25f080ea47b249c542b2ec7bdde92ecdae87225c5da2ad9e67db6059f460->enter($__internal_8a2f25f080ea47b249c542b2ec7bdde92ecdae87225c5da2ad9e67db6059f460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8a2f25f080ea47b249c542b2ec7bdde92ecdae87225c5da2ad9e67db6059f460->leave($__internal_8a2f25f080ea47b249c542b2ec7bdde92ecdae87225c5da2ad9e67db6059f460_prof);

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
