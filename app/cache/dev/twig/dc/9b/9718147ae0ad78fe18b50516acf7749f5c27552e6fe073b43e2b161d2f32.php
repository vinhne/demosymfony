<?php

/* PageSaleBundle:Admin:login.html.twig */
class __TwigTemplate_dc9b9718147ae0ad78fe18b50516acf7749f5c27552e6fe073b43e2b161d2f32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t\t
\t\t
\t\t";
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "\t\t
    </head>
    <body>
\t<div class=\"page\">
\t\t<div class=\"top_login\">Đăng nhập hệ thống</div>
\t\t<div class=\"frm_login\">
\t\t\t";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
\t\t\t
\t\t</div>
\t\t<div class=\"footer\">
\t\t\t";
        // line 26
        $this->env->loadTemplate("PageSaleBundle:Components:footer.twig.html")->display($context);
        // line 27
        echo "\t\t</div>
\t</div>
\t
        
        
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Đăng nhập hệ thống..";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t\t\t<link media=\"all\" href=\"http://";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "getHost", array(), "method"), "html", null, true);
        echo "/assets/css/style.css\" type=\"text/css\" rel=\"stylesheet\" />
\t\t";
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        // line 13
        echo "\t\t\t <script type=\"text/javascript\" src=\"http://";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "getHost", array(), "method"), "html", null, true);
        echo "/assets/js/jquery-1.4.4.min.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pagesale/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
\t\t";
    }

    public function getTemplateName()
    {
        return "PageSaleBundle:Admin:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 14,  90 => 13,  87 => 12,  80 => 7,  77 => 6,  71 => 5,  60 => 27,  58 => 26,  51 => 22,  43 => 16,  41 => 12,  34 => 9,  32 => 6,  28 => 5,  22 => 1,);
    }
}
