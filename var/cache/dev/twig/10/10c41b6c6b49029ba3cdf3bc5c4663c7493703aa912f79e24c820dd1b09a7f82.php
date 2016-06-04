<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c5000de81fc7821fa7a5203a35705c47bad0a8f450341117cdc6da4ee7850847 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ca2c87824091ed96ba1845a82e26d2e5a40b4c7d2adce30740e8f5a152bbc4f0 = $this->env->getExtension("native_profiler");
        $__internal_ca2c87824091ed96ba1845a82e26d2e5a40b4c7d2adce30740e8f5a152bbc4f0->enter($__internal_ca2c87824091ed96ba1845a82e26d2e5a40b4c7d2adce30740e8f5a152bbc4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca2c87824091ed96ba1845a82e26d2e5a40b4c7d2adce30740e8f5a152bbc4f0->leave($__internal_ca2c87824091ed96ba1845a82e26d2e5a40b4c7d2adce30740e8f5a152bbc4f0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_190207d977f99330d5cad7183094b52ffb0fd7a1277c9eec8e40c2215e3e50b2 = $this->env->getExtension("native_profiler");
        $__internal_190207d977f99330d5cad7183094b52ffb0fd7a1277c9eec8e40c2215e3e50b2->enter($__internal_190207d977f99330d5cad7183094b52ffb0fd7a1277c9eec8e40c2215e3e50b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_190207d977f99330d5cad7183094b52ffb0fd7a1277c9eec8e40c2215e3e50b2->leave($__internal_190207d977f99330d5cad7183094b52ffb0fd7a1277c9eec8e40c2215e3e50b2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_894a4b91a942500c514ffc6b7666eb1f1af5adfd4308d5b0df4d2a43e2e2e7a2 = $this->env->getExtension("native_profiler");
        $__internal_894a4b91a942500c514ffc6b7666eb1f1af5adfd4308d5b0df4d2a43e2e2e7a2->enter($__internal_894a4b91a942500c514ffc6b7666eb1f1af5adfd4308d5b0df4d2a43e2e2e7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_894a4b91a942500c514ffc6b7666eb1f1af5adfd4308d5b0df4d2a43e2e2e7a2->leave($__internal_894a4b91a942500c514ffc6b7666eb1f1af5adfd4308d5b0df4d2a43e2e2e7a2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f89d70e8e553c7d6df56611d6f0e6e6778a5081b457bb2ff5c28f59a5253540c = $this->env->getExtension("native_profiler");
        $__internal_f89d70e8e553c7d6df56611d6f0e6e6778a5081b457bb2ff5c28f59a5253540c->enter($__internal_f89d70e8e553c7d6df56611d6f0e6e6778a5081b457bb2ff5c28f59a5253540c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f89d70e8e553c7d6df56611d6f0e6e6778a5081b457bb2ff5c28f59a5253540c->leave($__internal_f89d70e8e553c7d6df56611d6f0e6e6778a5081b457bb2ff5c28f59a5253540c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
