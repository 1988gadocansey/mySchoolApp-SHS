<?php

/* :post:order.js.twig */
class __TwigTemplate_3751186b35b0d6b93d5d6f969244bb9eed361ea3f8a6366c9aa67f56897b4f9d extends Twig_Template
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
