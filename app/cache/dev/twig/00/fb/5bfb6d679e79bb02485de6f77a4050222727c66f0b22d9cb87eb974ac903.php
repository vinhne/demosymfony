<?php

/* PageSaleBundle:Categogy:index.html.twig */
class __TwigTemplate_00fb5bfb6d679e79bb02485de6f77a4050222727c66f0b22d9cb87eb974ac903 extends Twig_Template
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
\t
\t\t<script>
\t\t\t\$( document ).ready(function() {
\t\t\t\tlistcategogy(0);  
\t\t\t\t});
\t\t\t\t
\t\t\tfunction listcategogy(page)
\t\t\t{
\t\t\t\t\$(\".loading\").show();
\t\t\t\tvar URL = 'categogy/listcategogy';
\t\t\t\t \$.ajax({
\t\t\t\t type: \"post\",
\t\t\t\t url : URL,  
\t\t\t\t data:{'page':page,'name':''},
\t\t\t\t dataType : \"html\",
\t\t\t\t success : function(data){\t\t\t 
\t\t\t\t\t\t\$(\".content_categogy\").html(data);
\t\t\t\t\t\t\$(\".loading\").hide();
\t\t\t\t\t}\t\t\t 
\t\t\t\t });
\t\t\t}
\t\t\t
\t\t\tfunction deletecategogy(id)
\t\t\t{
\t\t\t\tvar URL = 'categogy/delete';
\t\t\t\t \$.ajax({
\t\t\t\t type: \"post\",
\t\t\t\t url : URL,  
\t\t\t\t data:{'id':id},
\t\t\t\t dataType : \"html\",
\t\t\t\t success : function(data){\t\t\t 
\t\t\t\t\t\t\$(\".row\"+id).hide();
\t\t\t\t\t\t
\t\t\t\t\t\tThanhCong(\"Xóa danh mục thành công!\");  
\t\t\t\t\t}\t\t\t 
\t\t\t\t });
\t\t\t}
\t\t\t
\t\t\t                               
                    
\t\t\t
\t\t</script>
\t\t
\t\t
\t\t               
\t\t
\t<a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("_categogy_add");
        echo "\">Thêm mới</a>
\t<div class=\"content_categogy\" >
\t
\t</div>
 ";
    }

    public function getTemplateName()
    {
        return "PageSaleBundle:Categogy:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 52,  38 => 5,  35 => 4,  29 => 2,);
    }
}
