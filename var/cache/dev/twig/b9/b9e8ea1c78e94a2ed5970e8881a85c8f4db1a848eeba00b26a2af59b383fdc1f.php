<?php

/* :post:init.js.twig */
class __TwigTemplate_666a1a9c130336d9a175c4493e9d8b011a355d3ffca56c5ef937efe734e13e69 extends Twig_Template
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
        $__internal_4f7742254011886a95ff2b32dd6df8c758413189351bd4f185145e80bf45e959 = $this->env->getExtension("native_profiler");
        $__internal_4f7742254011886a95ff2b32dd6df8c758413189351bd4f185145e80bf45e959->enter($__internal_4f7742254011886a95ff2b32dd6df8c758413189351bd4f185145e80bf45e959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":post:init.js.twig"));

        // line 1
        echo "function initComplete(settings) {
    alert('DataTables has redrawn the table.');
}
";
        
        $__internal_4f7742254011886a95ff2b32dd6df8c758413189351bd4f185145e80bf45e959->leave($__internal_4f7742254011886a95ff2b32dd6df8c758413189351bd4f185145e80bf45e959_prof);

    }

    public function getTemplateName()
    {
        return ":post:init.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* function initComplete(settings) {*/
/*     alert('DataTables has redrawn the table.');*/
/* }*/
/* */
