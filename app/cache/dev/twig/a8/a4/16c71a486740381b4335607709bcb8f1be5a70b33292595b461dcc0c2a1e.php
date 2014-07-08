<?php

/* PageSaleBundle:Categogy:add.html.twig */
class __TwigTemplate_a8a416c71a486740381b4335607709bcb8f1be5a70b33292595b461dcc0c2a1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PageSaleBundle::layoutadmin.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PageSaleBundle::layoutadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Trang chủ quản lý!";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t
\t";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
 
 ";
    }

    public function getTemplateName()
    {
        return "PageSaleBundle:Categogy:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  38 => 5,  35 => 4,  29 => 2,);
    }
}
