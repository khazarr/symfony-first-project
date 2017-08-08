<?php

/* blog/blogview.html.twig */
class __TwigTemplate_83201d26419377c2b52e8be638b5fdf80c5ca8017cd630bdba140a56beb701eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blog/baseblog.html.twig", "blog/blogview.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "blog/baseblog.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc86ab0b98c6281a16f12612a274c7d30a95465d96881bbc02e506acf25b9d45 = $this->env->getExtension("native_profiler");
        $__internal_cc86ab0b98c6281a16f12612a274c7d30a95465d96881bbc02e506acf25b9d45->enter($__internal_cc86ab0b98c6281a16f12612a274c7d30a95465d96881bbc02e506acf25b9d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/blogview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc86ab0b98c6281a16f12612a274c7d30a95465d96881bbc02e506acf25b9d45->leave($__internal_cc86ab0b98c6281a16f12612a274c7d30a95465d96881bbc02e506acf25b9d45_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c7c8c742d3bdbde76f2d3c90f42563e5d9e6835cf0c3b01042f084e02af518a = $this->env->getExtension("native_profiler");
        $__internal_0c7c8c742d3bdbde76f2d3c90f42563e5d9e6835cf0c3b01042f084e02af518a->enter($__internal_0c7c8c742d3bdbde76f2d3c90f42563e5d9e6835cf0c3b01042f084e02af518a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
    
   

    <div class=\"container\">
        <div class=\"header\" style=\"
             text-align: center;
             padding: 1em;
             margin-bottom: 20px;
             background-color: #eee;\">
            <h1>COOL DOG BLOG</h1>
         
            
        </div>
        
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")));
        foreach ($context['_seq'] as $context["_key"] => $context["posts"]) {
            // line 22
            echo "           <div class=\"well\">
                <div class=\"media\">
                    <a class=\"pull-left\" href=\"#\">
                        <img class=\"media-object\" src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["posts"], "getImg", array(), "method"), "html", null, true);
            echo "\" 
                             style=\"width: 150px; height: 150px \">
                    </a>
                    <div class=\"media-body\">
                    <h4 class=\"media-heading\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["posts"], "getTitle", array(), "method"), "html", null, true);
            echo " </h4>
                    <p> ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["posts"], "getBody", array(), "method"), "html", null, true);
            echo " </p>
          
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['posts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            
    </div>
";
        
        $__internal_0c7c8c742d3bdbde76f2d3c90f42563e5d9e6835cf0c3b01042f084e02af518a->leave($__internal_0c7c8c742d3bdbde76f2d3c90f42563e5d9e6835cf0c3b01042f084e02af518a_prof);

    }

    public function getTemplateName()
    {
        return "blog/blogview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  77 => 30,  73 => 29,  66 => 25,  61 => 22,  57 => 21,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends 'blog/baseblog.html.twig' %}*/
/* */
/* */
/* */
/* {% block body %}*/
/*     */
/*     */
/*    */
/* */
/*     <div class="container">*/
/*         <div class="header" style="*/
/*              text-align: center;*/
/*              padding: 1em;*/
/*              margin-bottom: 20px;*/
/*              background-color: #eee;">*/
/*             <h1>COOL DOG BLOG</h1>*/
/*          */
/*             */
/*         </div>*/
/*         */
/*         {% for posts in blog %}*/
/*            <div class="well">*/
/*                 <div class="media">*/
/*                     <a class="pull-left" href="#">*/
/*                         <img class="media-object" src="{{ posts.getImg() }}" */
/*                              style="width: 150px; height: 150px ">*/
/*                     </a>*/
/*                     <div class="media-body">*/
/*                     <h4 class="media-heading">{{ posts.getTitle() }} </h4>*/
/*                     <p> {{ posts.getBody() }} </p>*/
/*           */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/*             */
/*     </div>*/
/* {% endblock %}*/
