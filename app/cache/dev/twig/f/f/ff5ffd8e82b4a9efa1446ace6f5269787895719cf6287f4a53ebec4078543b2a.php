<?php

/* products/overview.html.twig */
class __TwigTemplate_4c795f6427c9c1be8c5272ab81d8b741176f7ad6c3a3bd3680d3c90ce7009310 extends Twig_Template
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
        $__internal_872ba812e81f7d2e7754cedcc47b59ebf1397fba8ef10796d46ebeec000bb852 = $this->env->getExtension("native_profiler");
        $__internal_872ba812e81f7d2e7754cedcc47b59ebf1397fba8ef10796d46ebeec000bb852->enter($__internal_872ba812e81f7d2e7754cedcc47b59ebf1397fba8ef10796d46ebeec000bb852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "products/overview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_872ba812e81f7d2e7754cedcc47b59ebf1397fba8ef10796d46ebeec000bb852->leave($__internal_872ba812e81f7d2e7754cedcc47b59ebf1397fba8ef10796d46ebeec000bb852_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_65c5de9cf1d4e4c7835a8d52fe4ba764c511ccedd8d338e2648bead4adfb3e3a = $this->env->getExtension("native_profiler");
        $__internal_65c5de9cf1d4e4c7835a8d52fe4ba764c511ccedd8d338e2648bead4adfb3e3a->enter($__internal_65c5de9cf1d4e4c7835a8d52fe4ba764c511ccedd8d338e2648bead4adfb3e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"container\">
        
        

        <div class=\"row\" id=\"forms\">
            
            
            <div class=\"col-sm-4\">
                
                <h3> INPUT FORM </h3>
           
        
                <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("products/add");
        echo "\" method=\"POST\">
            
            <div class=\"form-group\">
                <label for=\"name\"> Name: </label>
                <input class=\"form-control\" type=\"text\" name=\"name\"><br> 
            </div>
            
            <div class=\"form-group\">
                <label for=\"description\"> Description: </label>
                <input class=\"form-control\" type=\"text\" name=\"description\"><br> 
            </div>
            
            <div class=\"form-group\">
                <label for=\"price\"> Price: </label>
                <input class=\"form-control\" type=\"text\" name=\"price\"><br> 
            </div>
            
            <input type=\"submit\" name=\"btnAdd\" value=\"Add product\">
        </form>
                
            </div>
    
                <div class=\"col-sm-4\">
                    <h3>REMOVE FORM</h3>
                    <form action=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("products/remove");
        echo "\" method=\"POST\">
                        <div class=\"form-group\">
                            <label for=\"id\"> ID: </label>
                            <input class=\"form-control\" type=\"text\" name=\"id\"><br> 
                        </div>
                        
                        <input type=\"submit\" name=\"btnRemove\" value=\"Remove item\">
                    </form>
                </div>
                
                <div class=\"col-sm-4\">
                    <h3> UPDATE FORM </h3>
                    
                        <form action=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("products/update");
        echo "\" method=\"POST\">
                            
                        <div class=\"form-group\">               
                            <label for=\"id\"> ID: </label>
                            <input class=\"form-control\" type=\"text\" name=\"id\"><br> 
                        </div>
                        
                         <div class=\"form-group\">
                            <label for=\"name\"> Name: </label>
                            <input class=\"form-control\" type=\"text\" name=\"name\"><br> 
                        </div>

                        <div class=\"form-group\">
                            <label for=\"description\"> Description: </label>
                            <input class=\"form-control\" type=\"text\" name=\"description\"><br> 
                        </div>

                        <div class=\"form-group\">
                            <label for=\"price\"> Price: </label>
                            <input class=\"form-control\" type=\"text\" name=\"price\"><br> 
                        </div>
            
                            
                        <input type=\"submit\" name=\"btnRemove\" value=\"Update item\">
                    </form>
                    
                </div>
        </div>
  
    <div class=\"header\">
        <h1>PRODUCT OVERVIEW</h1>
    </div>
        
    <div class=\"db-table\">
      <table class=\"table table-striped\">
    <thead>
      <tr>
        <th> ID </th>
        <th>Product Name</th>
        <th>Description</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      
        ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 102
            echo "              <tr>
                <td> ";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getId", array(), "method"), "html", null, true);
            echo "  </td>
                <td> ";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getName", array(), "method"), "html", null, true);
            echo " </td>
                <td> ";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getDescription", array(), "method"), "html", null, true);
            echo " </td>
                <td> ";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getPrice", array(), "method"), "html", null, true);
            echo " \$ </td>
              </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "      
 
    </tbody>
  </table>
</div> 
        
    </div>
";
        
        $__internal_65c5de9cf1d4e4c7835a8d52fe4ba764c511ccedd8d338e2648bead4adfb3e3a->leave($__internal_65c5de9cf1d4e4c7835a8d52fe4ba764c511ccedd8d338e2648bead4adfb3e3a_prof);

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
        return array (  174 => 109,  165 => 106,  161 => 105,  157 => 104,  153 => 103,  150 => 102,  146 => 101,  98 => 56,  82 => 43,  55 => 19,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* */
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         */
/*         */
/* */
/*         <div class="row" id="forms">*/
/*             */
/*             */
/*             <div class="col-sm-4">*/
/*                 */
/*                 <h3> INPUT FORM </h3>*/
/*            */
/*         */
/*                 <form action="{{ path('products/add') }}" method="POST">*/
/*             */
/*             <div class="form-group">*/
/*                 <label for="name"> Name: </label>*/
/*                 <input class="form-control" type="text" name="name"><br> */
/*             </div>*/
/*             */
/*             <div class="form-group">*/
/*                 <label for="description"> Description: </label>*/
/*                 <input class="form-control" type="text" name="description"><br> */
/*             </div>*/
/*             */
/*             <div class="form-group">*/
/*                 <label for="price"> Price: </label>*/
/*                 <input class="form-control" type="text" name="price"><br> */
/*             </div>*/
/*             */
/*             <input type="submit" name="btnAdd" value="Add product">*/
/*         </form>*/
/*                 */
/*             </div>*/
/*     */
/*                 <div class="col-sm-4">*/
/*                     <h3>REMOVE FORM</h3>*/
/*                     <form action="{{ path('products/remove') }}" method="POST">*/
/*                         <div class="form-group">*/
/*                             <label for="id"> ID: </label>*/
/*                             <input class="form-control" type="text" name="id"><br> */
/*                         </div>*/
/*                         */
/*                         <input type="submit" name="btnRemove" value="Remove item">*/
/*                     </form>*/
/*                 </div>*/
/*                 */
/*                 <div class="col-sm-4">*/
/*                     <h3> UPDATE FORM </h3>*/
/*                     */
/*                         <form action="{{ path('products/update') }}" method="POST">*/
/*                             */
/*                         <div class="form-group">               */
/*                             <label for="id"> ID: </label>*/
/*                             <input class="form-control" type="text" name="id"><br> */
/*                         </div>*/
/*                         */
/*                          <div class="form-group">*/
/*                             <label for="name"> Name: </label>*/
/*                             <input class="form-control" type="text" name="name"><br> */
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <label for="description"> Description: </label>*/
/*                             <input class="form-control" type="text" name="description"><br> */
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <label for="price"> Price: </label>*/
/*                             <input class="form-control" type="text" name="price"><br> */
/*                         </div>*/
/*             */
/*                             */
/*                         <input type="submit" name="btnRemove" value="Update item">*/
/*                     </form>*/
/*                     */
/*                 </div>*/
/*         </div>*/
/*   */
/*     <div class="header">*/
/*         <h1>PRODUCT OVERVIEW</h1>*/
/*     </div>*/
/*         */
/*     <div class="db-table">*/
/*       <table class="table table-striped">*/
/*     <thead>*/
/*       <tr>*/
/*         <th> ID </th>*/
/*         <th>Product Name</th>*/
/*         <th>Description</th>*/
/*         <th>Price</th>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       */
/*         {% for product in products %}*/
/*               <tr>*/
/*                 <td> {{ product.getId() }}  </td>*/
/*                 <td> {{ product.getName() }} </td>*/
/*                 <td> {{ product.getDescription() }} </td>*/
/*                 <td> {{ product.getPrice() }} $ </td>*/
/*               </tr>*/
/*         {% endfor %}*/
/*       */
/*  */
/*     </tbody>*/
/*   </table>*/
/* </div> */
/*         */
/*     </div>*/
/* {% endblock %}*/
