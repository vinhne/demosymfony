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
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t\t
\t\t
\t\t
\t\t
\t\t

       
\t\t
\t\t";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "\t\t
    </head>
    <body>
\t<div class=\"page\">
\t\t<div class=\"header\">
\t\t\t<div class=\"administrator\">
\t\t\t\tADMINISTRATOR
\t\t\t</div>
\t\t\t<div class=\"infor-login\">
\t\t\t\t";
        // line 35
        if ((isset($context["Admin"]) ? $context["Admin"] : $this->getContext($context, "Admin"))) {
            // line 36
            echo "\t\t\t\tXin chào:\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Admin"]) ? $context["Admin"] : $this->getContext($context, "Admin")), "username", array(), "method"), "html", null, true);
            echo " 
\t\t\t\t
\t\t\t\t<a href=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("_admin_logout");
            echo "\">Thoát</a>
\t\t\t\t";
        }
        // line 40
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"menu\">
\t\t\t";
        // line 43
        $this->env->loadTemplate("PageSaleBundle:Components:menu.twig.html")->display($context);
        // line 44
        echo "\t\t</div>
\t\t<div class=\"content\">
\t\t\t";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "\t\t</div>
\t\t
\t\t<div class=\"footer\">
\t\t\t";
        // line 52
        $this->env->loadTemplate("PageSaleBundle:Components:footer.twig.html")->display($context);
        // line 53
        echo "\t\t</div>
\t</div>
\t<div class=\"loading\">
\t\t<img src=\"http://";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "getHost", array(), "method"), "html", null, true);
        echo "/assets/images/loading.gif\" />
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
\t\t\t<link media=\"all\" href=\"http://";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "getHost", array(), "method"), "html", null, true);
        echo "/assets/font/css/font-awesome.css\" type=\"text/css\" rel=\"stylesheet\" />
\t\t\t <link href=\"http://";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "getHost", array(), "method"), "html", null, true);
        echo "/assets/css/jquery_notification.css\" type=\"text/css\" rel=\"stylesheet\"/>
\t\t";
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        // line 21
        echo "\t\t\t <script type=\"text/javascript\" src=\"http://";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "getHost", array(), "method"), "html", null, true);
        echo "/assets/js/jquery-1.4.4.min.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pagesale/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"http://";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "getHost", array(), "method"), "html", null, true);
        echo "/assets/js/common.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"http://";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "getHost", array(), "method"), "html", null, true);
        echo "/assets/js/jquery_notification_v.1.js\"></script>
\t\t";
    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        // line 47
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
        return array (  160 => 47,  157 => 46,  151 => 24,  147 => 23,  143 => 22,  138 => 21,  135 => 20,  129 => 9,  125 => 8,  120 => 7,  117 => 6,  111 => 5,  99 => 56,  94 => 53,  92 => 52,  87 => 49,  85 => 46,  81 => 44,  79 => 43,  74 => 40,  69 => 38,  63 => 36,  61 => 35,  50 => 26,  48 => 20,  33 => 6,  23 => 1,  86 => 51,  38 => 5,  35 => 11,  29 => 5,);
    }
}
