<?php

/* post/new.html.twig */
class __TwigTemplate_f783a6dd59c10046987277a8862d40422299e3abbef089b1aa677e63ba967f10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/new.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>Post creation</h2>
    <hr>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" class=\"btn btn-primary\">
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

    <hr>

    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("post_index");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
";
    }

    public function getTemplateName()
    {
        return "post/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  45 => 10,  40 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/*     <h2>Post creation</h2>*/
/*     <hr>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" class="btn btn-primary">*/
/*     {{ form_end(form) }}*/
/* */
/*     <hr>*/
/* */
/*     <a href="{{ path('post_index') }}" class="btn btn-primary">Back to the list</a>*/
/* {% endblock %}*/
/* */
