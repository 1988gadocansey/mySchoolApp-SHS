<?php

/* :post:order.js.twig */
class __TwigTemplate_3073d662c8f8a9f15193f1bcd4831462b33d0413d94b32475cb090817c615cb1 extends Twig_Template
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
        // line 1
        echo "function order() {
    var order = oTable.order();
    console.info('Ordering on column '+order[0][0]+' ('+order[0][1]+')');
}
";
    }

    public function getTemplateName()
    {
        return ":post:order.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* function order() {*/
/*     var order = oTable.order();*/
/*     console.info('Ordering on column '+order[0][0]+' ('+order[0][1]+')');*/
/* }*/
/* */
