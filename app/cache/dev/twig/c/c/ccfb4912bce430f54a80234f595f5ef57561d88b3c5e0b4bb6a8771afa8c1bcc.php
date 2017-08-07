<?php

/* products/overview.html.twig */
class __TwigTemplate_aaacdca961b32a4f0c62c579a2531e02e89b142da77317089e57be4606307098 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "products/overview.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d065f7f707e2239a5756a63a288dfe6e8d08fdd714c9d2d322972656c333115 = $this->env->getExtension("native_profiler");
        $__internal_6d065f7f707e2239a5756a63a288dfe6e8d08fdd714c9d2d322972656c333115->enter($__internal_6d065f7f707e2239a5756a63a288dfe6e8d08fdd714c9d2d322972656c333115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "products/overview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d065f7f707e2239a5756a63a288dfe6e8d08fdd714c9d2d322972656c333115->leave($__internal_6d065f7f707e2239a5756a63a288dfe6e8d08fdd714c9d2d322972656c333115_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c68fac083c290ef9f575e4549cf5a0bdcabc38b03438358a2a737700772787bd = $this->env->getExtension("native_profiler");
        $__internal_c68fac083c290ef9f575e4549cf5a0bdcabc38b03438358a2a737700772787bd->enter($__internal_c68fac083c290ef9f575e4549cf5a0bdcabc38b03438358a2a737700772787bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <h1>PRODUCT OVERVIEW</h1>
    
    <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("products/add");
        echo "\" method=\"POST\">
        <label for=\"name\"> Name: </label>
        <input type=\"text\" name=\"name\"><br> 
        
        <label for=\"description\"> Description: </label>
        <input type=\"text\" name=\"description\"><br> 
        
        <label for=\"price\"> Price: </label>
        <input type=\"text\" name=\"price\"><br> 
        
        <input type=\"submit\" name=\"btnAdd\" value=\"Add product\">
    </form>
    
    
    
    ";
        // line 24
        if ((twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : $this->getContext($context, "products"))) == 0)) {
            // line 25
            echo "        <h3>No products found..</h3>
    ";
        }
        // line 27
        echo "    <ul>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 29
            echo "            <li>
                ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getName", array(), "method"), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getPrice", array(), "method"), "html", null, true);
            echo " \$ 
                <br>
                <p> Description: ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getDescription", array(), "method"), "html", null, true);
            echo "
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </ul>
    
";
        
        $__internal_c68fac083c290ef9f575e4549cf5a0bdcabc38b03438358a2a737700772787bd->leave($__internal_c68fac083c290ef9f575e4549cf5a0bdcabc38b03438358a2a737700772787bd_prof);

    }

    public function getTemplateName()
    {
        return "products/overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 35,  86 => 32,  79 => 30,  76 => 29,  72 => 28,  69 => 27,  65 => 25,  63 => 24,  45 => 9,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* */
/* {% block body %}*/
/* */
/*     <h1>PRODUCT OVERVIEW</h1>*/
/*     */
/*     <form action="{{ path('products/add') }}" method="POST">*/
/*         <label for="name"> Name: </label>*/
/*         <input type="text" name="name"><br> */
/*         */
/*         <label for="description"> Description: </label>*/
/*         <input type="text" name="description"><br> */
/*         */
/*         <label for="price"> Price: </label>*/
/*         <input type="text" name="price"><br> */
/*         */
/*         <input type="submit" name="btnAdd" value="Add product">*/
/*     </form>*/
/*     */
/*     */
/*     */
/*     {% if products|length == 0 %}*/
/*         <h3>No products found..</h3>*/
/*     {% endif %}*/
/*     <ul>*/
/*         {% for product in products %}*/
/*             <li>*/
/*                 {{ product.getName() }} : {{ product.getPrice() }} $ */
/*                 <br>*/
/*                 <p> Description: {{ product.getDescription() }}*/
/*             </li>*/
/*         {% endfor %}*/
/*     </ul>*/
/*     */
/* {% endblock %}*/
