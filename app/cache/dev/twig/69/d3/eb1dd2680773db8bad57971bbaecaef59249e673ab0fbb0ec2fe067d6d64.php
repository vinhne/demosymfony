<?php

/* PageSaleBundle:Admin:index.html.twig */
class __TwigTemplate_69d3eb1dd2680773db8bad57971bbaecaef59249e673ab0fbb0ec2fe067d6d64 extends Twig_Template
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
\tTRang quản lý
\t

 <textarea class=\"ckeditor\" id=\"dfs\" ></textarea>
 
\t
 
 
 ";
    }

    public function getTemplateName()
    {
        return "PageSaleBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  35 => 4,  29 => 2,);
    }
}
