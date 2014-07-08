<?php

/* PageSaleBundle:Components:menu.twig.html */
class __TwigTemplate_eb9d7d05521e0d4693aa735ffe124eebaade7c269407475bfc60012d193cc120 extends Twig_Template
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
        echo "<ul>
\t<li> <i class=\"fa fa-list-ul\"></i><a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("_categogy");
        echo "\">Danh mục</a></li>
\t<li><i class=\"fa fa-archive\"></i><a href=\"\">Sản phẩm</a></li>
\t<li><i class=\"fa fa-book\"></i><a href=\"\">Tin tức</a></li>
\t<li><i class=\"fa fa-hdd-o\"></i><a href=\"\">Slideshow & Hình ảnh </a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "PageSaleBundle:Components:menu.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
