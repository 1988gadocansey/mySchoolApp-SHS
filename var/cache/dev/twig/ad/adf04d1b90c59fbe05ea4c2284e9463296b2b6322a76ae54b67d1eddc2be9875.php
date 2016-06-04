<?php

/* :post:order.js.twig */
class __TwigTemplate_cc91ecb99885ad08667a69c32d7aedc2ecf98786a074f1b36c3273b8e6120502 extends Twig_Template
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
        $__internal_49d3d55b6df23eba30a912f06121d2c1948795f78b2ba37f20deed4f628c4f03 = $this->env->getExtension("native_profiler");
        $__internal_49d3d55b6df23eba30a912f06121d2c1948795f78b2ba37f20deed4f628c4f03->enter($__internal_49d3d55b6df23eba30a912f06121d2c1948795f78b2ba37f20deed4f628c4f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":post:order.js.twig"));

        // line 1
        echo "function order() {
    var order = oTable.order();
    console.info('Ordering on column '+order[0][0]+' ('+order[0][1]+')');
}
";
        
        $__internal_49d3d55b6df23eba30a912f06121d2c1948795f78b2ba37f20deed4f628c4f03->leave($__internal_49d3d55b6df23eba30a912f06121d2c1948795f78b2ba37f20deed4f628c4f03_prof);

    }

    public function getTemplateName()
    {
        return ":post:order.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* function order() {*/
/*     var order = oTable.order();*/
/*     console.info('Ordering on column '+order[0][0]+' ('+order[0][1]+')');*/
/* }*/
/* */
