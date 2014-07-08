<?php

/* PageSaleBundle:Categogy:ajaxcategogy.html.twig */
class __TwigTemplate_a2a3c023838b330842aae6454940e54b31c3f5354c99e909a476f4db5e007a27 extends Twig_Template
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
        echo " <table class=\"table table-bordered\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Tên danh mục</th>
\t\t\t\t\t\t<th>Thứ thự</th>
\t\t\t\t\t\t<th>Trạng thái</th>
\t\t\t\t\t\t<th>Chức năng</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 11
        if ((isset($context["Categorys"]) ? $context["Categorys"] : $this->getContext($context, "Categorys"))) {
            // line 12
            echo "\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Categorys"]) ? $context["Categorys"] : $this->getContext($context, "Categorys")));
            foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                // line 13
                echo "\t\t\t\t\t\t\t<tr class=\"row";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Category"]) ? $context["Category"] : $this->getContext($context, "Category")), "id", array(), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<td>";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Category"]) ? $context["Category"] : $this->getContext($context, "Category")), "name", array(), "method"), "html", null, true);
                echo " </td>
\t\t\t\t\t\t\t\t<td>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Category"]) ? $context["Category"] : $this->getContext($context, "Category")), "orderS", array(), "method"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 16
                if (($this->getAttribute((isset($context["Category"]) ? $context["Category"] : $this->getContext($context, "Category")), "status", array(), "method") == 0)) {
                    echo " Hiện ";
                } else {
                    echo " Ẩn ";
                }
                echo " </td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "baseUrl"), "html", null, true);
                echo "/categogy/edit/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Category"]) ? $context["Category"] : $this->getContext($context, "Category")), "id", array(), "method"), "html", null, true);
                echo "\" class=\"btn btn-inverse\">sửa</a>
\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"deletecategogy(";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Category"]) ? $context["Category"] : $this->getContext($context, "Category")), "id", array(), "method"), "html", null, true);
                echo ");\" >Xóa</a></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t\t\t\t\t";
        } else {
            // line 26
            echo "\t\t\t\t\t<tr><td colspan=\"4\">No Record</td></tr>
\t\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t</tbody>
</table>

<div class=\"phantrang\">
\t<ul>
\t";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 34
            echo "\t\t<li><a  href=\"javascript:void(0);\" onclick=\"listcategogy(";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo ")\">";
            echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1), "html", null, true);
            echo "</a> </li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t</ul>
</div>



";
    }

    public function getTemplateName()
    {
        return "PageSaleBundle:Categogy:ajaxcategogy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  96 => 34,  92 => 33,  85 => 28,  81 => 26,  78 => 25,  69 => 22,  60 => 18,  51 => 16,  47 => 15,  43 => 14,  38 => 13,  33 => 12,  31 => 11,  19 => 1,);
    }
}
