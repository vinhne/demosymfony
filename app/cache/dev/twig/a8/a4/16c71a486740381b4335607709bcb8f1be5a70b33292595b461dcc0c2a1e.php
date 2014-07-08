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
        echo "\t<script>
\t\t";
        // line 6
        if ((isset($context["Message"]) ? $context["Message"] : $this->getContext($context, "Message"))) {
            // line 7
            echo "\t\t\t\$( document ).ready(function() {
\t\t\t\t";
            // line 8
            if (($this->getAttribute((isset($context["Message"]) ? $context["Message"] : $this->getContext($context, "Message")), "type", array(), "array") == 1)) {
                // line 9
                echo "\t\t\t\t\tThanhCong(\"Thêm danh mục thành công!\");
\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["Message"]) ? $context["Message"] : $this->getContext($context, "Message")), "type", array(), "array") == 0)) {
                // line 11
                echo "\t\t\t\t\tThatBai(\"Thêm không thành công!\");\t\t\t\t
\t\t\t\t";
            }
            // line 13
            echo "\t\t\t});
\t\t";
        }
        // line 15
        echo "\t</script>
<a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("_categogy");
        echo "\">Danh sách danh mục</a>
\t<div class=\"frm_categogy\" >
\t\t";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
\t</div>
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
        return array (  68 => 18,  63 => 16,  60 => 15,  56 => 13,  52 => 11,  48 => 9,  46 => 8,  43 => 7,  41 => 6,  38 => 5,  35 => 4,  29 => 2,);
    }
}
