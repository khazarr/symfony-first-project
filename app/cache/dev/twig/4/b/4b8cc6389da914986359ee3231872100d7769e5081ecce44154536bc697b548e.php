<?php

/* base.html.twig */
class __TwigTemplate_b95aa9767a483eda3034b13849a671c97b9f8a5388bc835a6de9d72b9a970069 extends Twig_Template
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
        $__internal_3ea5fbafbd5d87e40e39f5fee660b29a52bd2447f5f794330c0b5750a018df72 = $this->env->getExtension("native_profiler");
        $__internal_3ea5fbafbd5d87e40e39f5fee660b29a52bd2447f5f794330c0b5750a018df72->enter($__internal_3ea5fbafbd5d87e40e39f5fee660b29a52bd2447f5f794330c0b5750a018df72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_3ea5fbafbd5d87e40e39f5fee660b29a52bd2447f5f794330c0b5750a018df72->leave($__internal_3ea5fbafbd5d87e40e39f5fee660b29a52bd2447f5f794330c0b5750a018df72_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_66052deaffe829e7083cc2454d155331f6b183fccc4358bc3a04a40457ab6234 = $this->env->getExtension("native_profiler");
        $__internal_66052deaffe829e7083cc2454d155331f6b183fccc4358bc3a04a40457ab6234->enter($__internal_66052deaffe829e7083cc2454d155331f6b183fccc4358bc3a04a40457ab6234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Products";
        
        $__internal_66052deaffe829e7083cc2454d155331f6b183fccc4358bc3a04a40457ab6234->leave($__internal_66052deaffe829e7083cc2454d155331f6b183fccc4358bc3a04a40457ab6234_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d9dd080fa112fa84bd9699bee86f9898b9e51652ef252d5988a43bcc87fd10e0 = $this->env->getExtension("native_profiler");
        $__internal_d9dd080fa112fa84bd9699bee86f9898b9e51652ef252d5988a43bcc87fd10e0->enter($__internal_d9dd080fa112fa84bd9699bee86f9898b9e51652ef252d5988a43bcc87fd10e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d9dd080fa112fa84bd9699bee86f9898b9e51652ef252d5988a43bcc87fd10e0->leave($__internal_d9dd080fa112fa84bd9699bee86f9898b9e51652ef252d5988a43bcc87fd10e0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f8f397a6b51fddf28eaca0875599073c95fe5f5ac3fe7e637367264aed2d950 = $this->env->getExtension("native_profiler");
        $__internal_7f8f397a6b51fddf28eaca0875599073c95fe5f5ac3fe7e637367264aed2d950->enter($__internal_7f8f397a6b51fddf28eaca0875599073c95fe5f5ac3fe7e637367264aed2d950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7f8f397a6b51fddf28eaca0875599073c95fe5f5ac3fe7e637367264aed2d950->leave($__internal_7f8f397a6b51fddf28eaca0875599073c95fe5f5ac3fe7e637367264aed2d950_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d52c9639302e4242215dee180cee5a8b52e73b284e237cd911303af5b476888 = $this->env->getExtension("native_profiler");
        $__internal_0d52c9639302e4242215dee180cee5a8b52e73b284e237cd911303af5b476888->enter($__internal_0d52c9639302e4242215dee180cee5a8b52e73b284e237cd911303af5b476888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0d52c9639302e4242215dee180cee5a8b52e73b284e237cd911303af5b476888->leave($__internal_0d52c9639302e4242215dee180cee5a8b52e73b284e237cd911303af5b476888_prof);

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
        return array (  94 => 12,  83 => 11,  72 => 6,  60 => 5,  51 => 13,  48 => 12,  46 => 11,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Products{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
