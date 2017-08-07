<?php

/* base.html.twig */
class __TwigTemplate_0d308a0ecfc98af1f03100099b77ab37d1448aec37dbbc7b9f2087289108fdb9 extends Twig_Template
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
        $__internal_bb72b439534ed6d9583892f7a0a8c1e413274f981eb5d9e766499af0d95430a3 = $this->env->getExtension("native_profiler");
        $__internal_bb72b439534ed6d9583892f7a0a8c1e413274f981eb5d9e766499af0d95430a3->enter($__internal_bb72b439534ed6d9583892f7a0a8c1e413274f981eb5d9e766499af0d95430a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_bb72b439534ed6d9583892f7a0a8c1e413274f981eb5d9e766499af0d95430a3->leave($__internal_bb72b439534ed6d9583892f7a0a8c1e413274f981eb5d9e766499af0d95430a3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3989b6bce8193542307e271e0ed628dcde71ee11bcb8225ce013846b4640979 = $this->env->getExtension("native_profiler");
        $__internal_f3989b6bce8193542307e271e0ed628dcde71ee11bcb8225ce013846b4640979->enter($__internal_f3989b6bce8193542307e271e0ed628dcde71ee11bcb8225ce013846b4640979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f3989b6bce8193542307e271e0ed628dcde71ee11bcb8225ce013846b4640979->leave($__internal_f3989b6bce8193542307e271e0ed628dcde71ee11bcb8225ce013846b4640979_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_987f2bcdca3ca00195fb7d88c8720558878f42337ce1fd7b79651abb9b7773ab = $this->env->getExtension("native_profiler");
        $__internal_987f2bcdca3ca00195fb7d88c8720558878f42337ce1fd7b79651abb9b7773ab->enter($__internal_987f2bcdca3ca00195fb7d88c8720558878f42337ce1fd7b79651abb9b7773ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_987f2bcdca3ca00195fb7d88c8720558878f42337ce1fd7b79651abb9b7773ab->leave($__internal_987f2bcdca3ca00195fb7d88c8720558878f42337ce1fd7b79651abb9b7773ab_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c7327155ce46c3ab709ad682537bfc3e02f2d7fe9eaca718d0714806fb837c6 = $this->env->getExtension("native_profiler");
        $__internal_2c7327155ce46c3ab709ad682537bfc3e02f2d7fe9eaca718d0714806fb837c6->enter($__internal_2c7327155ce46c3ab709ad682537bfc3e02f2d7fe9eaca718d0714806fb837c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2c7327155ce46c3ab709ad682537bfc3e02f2d7fe9eaca718d0714806fb837c6->leave($__internal_2c7327155ce46c3ab709ad682537bfc3e02f2d7fe9eaca718d0714806fb837c6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_faa52e2842bfe90576497d63bd7511ab8ed917aef40c17269c5e368076ecbead = $this->env->getExtension("native_profiler");
        $__internal_faa52e2842bfe90576497d63bd7511ab8ed917aef40c17269c5e368076ecbead->enter($__internal_faa52e2842bfe90576497d63bd7511ab8ed917aef40c17269c5e368076ecbead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_faa52e2842bfe90576497d63bd7511ab8ed917aef40c17269c5e368076ecbead->leave($__internal_faa52e2842bfe90576497d63bd7511ab8ed917aef40c17269c5e368076ecbead_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
