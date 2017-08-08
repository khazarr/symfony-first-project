<?php

/* blog/baseblog.html.twig */
class __TwigTemplate_f5991b1fadf9a4f783a460a26abfb93b93c441279462f149ef789bc98fe9c2ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff0b15a16531a359d416cf3630588420b89ef22ff45dba632f812aeefc8d7b0c = $this->env->getExtension("native_profiler");
        $__internal_ff0b15a16531a359d416cf3630588420b89ef22ff45dba632f812aeefc8d7b0c->enter($__internal_ff0b15a16531a359d416cf3630588420b89ef22ff45dba632f812aeefc8d7b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/baseblog.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css\">
    </head>
    <body>
            <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
              <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"#\">Cool dog blog</a>
              </div>
              <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"#\">Blog</a></li>          
                <li><a href=\"blog/addrandom\">Add random post</a></li>
                <li><a href=\"blog/remove\">Remove last post</a></li>
              </ul>
            </div>
            </nav>
        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "    </body>
</html>
";
        
        $__internal_ff0b15a16531a359d416cf3630588420b89ef22ff45dba632f812aeefc8d7b0c->leave($__internal_ff0b15a16531a359d416cf3630588420b89ef22ff45dba632f812aeefc8d7b0c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ef0c6feb0bf38ce4bc0e752bc1ecda22041b7208be45911eeeae7a702a17042 = $this->env->getExtension("native_profiler");
        $__internal_7ef0c6feb0bf38ce4bc0e752bc1ecda22041b7208be45911eeeae7a702a17042->enter($__internal_7ef0c6feb0bf38ce4bc0e752bc1ecda22041b7208be45911eeeae7a702a17042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_7ef0c6feb0bf38ce4bc0e752bc1ecda22041b7208be45911eeeae7a702a17042->leave($__internal_7ef0c6feb0bf38ce4bc0e752bc1ecda22041b7208be45911eeeae7a702a17042_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0242233abb7de15998dc650c2d65d5eb2138d001cc5573bbbcb41697e80df948 = $this->env->getExtension("native_profiler");
        $__internal_0242233abb7de15998dc650c2d65d5eb2138d001cc5573bbbcb41697e80df948->enter($__internal_0242233abb7de15998dc650c2d65d5eb2138d001cc5573bbbcb41697e80df948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0242233abb7de15998dc650c2d65d5eb2138d001cc5573bbbcb41697e80df948->leave($__internal_0242233abb7de15998dc650c2d65d5eb2138d001cc5573bbbcb41697e80df948_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4eb1a0fac117475d2a549241d789d3e62e4759abf437a00aeba9469cd37fc80 = $this->env->getExtension("native_profiler");
        $__internal_f4eb1a0fac117475d2a549241d789d3e62e4759abf437a00aeba9469cd37fc80->enter($__internal_f4eb1a0fac117475d2a549241d789d3e62e4759abf437a00aeba9469cd37fc80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f4eb1a0fac117475d2a549241d789d3e62e4759abf437a00aeba9469cd37fc80->leave($__internal_f4eb1a0fac117475d2a549241d789d3e62e4759abf437a00aeba9469cd37fc80_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_52e0e396c550e01c6946844555102508820903cabc3abd38acf275136944039e = $this->env->getExtension("native_profiler");
        $__internal_52e0e396c550e01c6946844555102508820903cabc3abd38acf275136944039e->enter($__internal_52e0e396c550e01c6946844555102508820903cabc3abd38acf275136944039e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_52e0e396c550e01c6946844555102508820903cabc3abd38acf275136944039e->leave($__internal_52e0e396c550e01c6946844555102508820903cabc3abd38acf275136944039e_prof);

    }

    public function getTemplateName()
    {
        return "blog/baseblog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 24,  95 => 23,  84 => 6,  72 => 5,  63 => 25,  60 => 24,  58 => 23,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Blog{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">*/
/*     </head>*/
/*     <body>*/
/*             <nav class="navbar navbar-default">*/
/*             <div class="container-fluid">*/
/*               <div class="navbar-header">*/
/*                 <a class="navbar-brand" href="#">Cool dog blog</a>*/
/*               </div>*/
/*               <ul class="nav navbar-nav">*/
/*                 <li class="active"><a href="#">Blog</a></li>          */
/*                 <li><a href="blog/addrandom">Add random post</a></li>*/
/*                 <li><a href="blog/remove">Remove last post</a></li>*/
/*               </ul>*/
/*             </div>*/
/*             </nav>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
