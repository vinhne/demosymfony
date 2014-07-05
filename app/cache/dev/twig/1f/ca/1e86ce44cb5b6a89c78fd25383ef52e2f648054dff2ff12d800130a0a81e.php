<?php

/* PageSaleBundle::layoutadmin.html.twig */
class __TwigTemplate_1fca1e86ce44cb5b6a89c78fd25383ef52e2f648054dff2ff12d800130a0a81e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
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
\t\t<div class=\"header\">
\t\t\t
\t\t</div>
\t\t<div class=\"menu\">
\t\t\t";
        // line 24
        $this->env->loadTemplate("PageSaleBundle:Components:menu.twig.html")->display($context);
        // line 25
        echo "\t\t</div>
\t\t<div class=\"content\">
\t\t\t";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "\t\t</div>
\t\t
\t\t<div class=\"footer\">
\t\t\t
\t\t</div>
\t</div>
\t
        
        
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Admin!";
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

    // line 27
    public function block_body($context, array $blocks = array())
    {
        // line 28
        echo "\t\t\t
\t\t\t";
    }

    public function getTemplateName()
    {
        return "PageSaleBundle::layoutadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 28,  107 => 27,  101 => 14,  96 => 13,  93 => 12,  86 => 7,  83 => 6,  77 => 5,  62 => 30,  60 => 27,  56 => 25,  54 => 24,  44 => 16,  42 => 12,  33 => 6,  23 => 1,  38 => 5,  35 => 9,  29 => 5,);
    }
}
