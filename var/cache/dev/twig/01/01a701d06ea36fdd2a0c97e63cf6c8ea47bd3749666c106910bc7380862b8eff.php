<?php

/* student/edit.html.twig */
class __TwigTemplate_e8b35a8f5ddcf7d728a23eb0e4670f8a03f98bfa3e3d5e7beb3c8abf0ebaceb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "student/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1b1a8a5d22c90064e904dc147dde88634a804840f774b65e23f7bbdd9fa19fe = $this->env->getExtension("native_profiler");
        $__internal_b1b1a8a5d22c90064e904dc147dde88634a804840f774b65e23f7bbdd9fa19fe->enter($__internal_b1b1a8a5d22c90064e904dc147dde88634a804840f774b65e23f7bbdd9fa19fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1b1a8a5d22c90064e904dc147dde88634a804840f774b65e23f7bbdd9fa19fe->leave($__internal_b1b1a8a5d22c90064e904dc147dde88634a804840f774b65e23f7bbdd9fa19fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2eaaee6ab884916c4f85bad90ee6e24c10a5681f66ced58e66c44b37f13eadc6 = $this->env->getExtension("native_profiler");
        $__internal_2eaaee6ab884916c4f85bad90ee6e24c10a5681f66ced58e66c44b37f13eadc6->enter($__internal_2eaaee6ab884916c4f85bad90ee6e24c10a5681f66ced58e66c44b37f13eadc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Student edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("student_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_2eaaee6ab884916c4f85bad90ee6e24c10a5681f66ced58e66c44b37f13eadc6->leave($__internal_2eaaee6ab884916c4f85bad90ee6e24c10a5681f66ced58e66c44b37f13eadc6_prof);

    }

    public function getTemplateName()
    {
        return "student/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Student edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('student_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
