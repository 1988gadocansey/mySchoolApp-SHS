<?php

/* user/profile.html.twig */
class __TwigTemplate_36a778e0fbfc799935ac23db2095293c23bc8f8d8409e797b63dccb130002f01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/profile.html.twig", 1);
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
        echo "    <h2>Public Profile</h2>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Username</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Posts</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "posts", array())), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("post_index");
        echo "\" class=\"btn btn-primary\">Back to the list</a>

";
    }

    public function getTemplateName()
    {
        return "user/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 19,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/*     <h2>Public Profile</h2>*/
/* */
/*     <table class="table">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Username</th>*/
/*                 <td>{{ user.username }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Posts</th>*/
/*                 <td>{{ user.posts|length }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <a href="{{ path('post_index') }}" class="btn btn-primary">Back to the list</a>*/
/* */
/* {% endblock %}*/
/* */
