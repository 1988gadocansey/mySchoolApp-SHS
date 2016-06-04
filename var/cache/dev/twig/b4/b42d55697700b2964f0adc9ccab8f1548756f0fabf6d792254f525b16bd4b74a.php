<?php

/* post/index.html.twig */
class __TwigTemplate_78c75c0be96aefd814a1ab9af9c60d0e98d52a837f3d35f95b388dd5a25307a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "post/index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0beed7703232d4dfafb7ebc5ef58be98097885992cbbbb3c9400973f65451c51 = $this->env->getExtension("native_profiler");
        $__internal_0beed7703232d4dfafb7ebc5ef58be98097885992cbbbb3c9400973f65451c51->enter($__internal_0beed7703232d4dfafb7ebc5ef58be98097885992cbbbb3c9400973f65451c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0beed7703232d4dfafb7ebc5ef58be98097885992cbbbb3c9400973f65451c51->leave($__internal_0beed7703232d4dfafb7ebc5ef58be98097885992cbbbb3c9400973f65451c51_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_b7694f0d555816bbe80b02de8cf705c54c08b3a0a11368d65907cfe9713e0ee3 = $this->env->getExtension("native_profiler");
        $__internal_b7694f0d555816bbe80b02de8cf705c54c08b3a0a11368d65907cfe9713e0ee3->enter($__internal_b7694f0d555816bbe80b02de8cf705c54c08b3a0a11368d65907cfe9713e0ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('sg_datatables_twig_extension')->datatableRender((isset($context["datatable"]) ? $context["datatable"] : $this->getContext($context, "datatable")));
        echo "
";
        
        $__internal_b7694f0d555816bbe80b02de8cf705c54c08b3a0a11368d65907cfe9713e0ee3->leave($__internal_b7694f0d555816bbe80b02de8cf705c54c08b3a0a11368d65907cfe9713e0ee3_prof);

    }

    public function getTemplateName()
    {
        return "post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block main %}*/
/*     {{ datatable_render(datatable) }}*/
/* {% endblock %}*/
/* */
