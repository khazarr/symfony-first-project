<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_de0813d65bed581ff9415819c54bfc3995c1119a7a9cf2f4f3b9a89895743fd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4117e0de7f190e519e99e93a36fea00e913347795e6eb687128012d0e81ec653 = $this->env->getExtension("native_profiler");
        $__internal_4117e0de7f190e519e99e93a36fea00e913347795e6eb687128012d0e81ec653->enter($__internal_4117e0de7f190e519e99e93a36fea00e913347795e6eb687128012d0e81ec653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4117e0de7f190e519e99e93a36fea00e913347795e6eb687128012d0e81ec653->leave($__internal_4117e0de7f190e519e99e93a36fea00e913347795e6eb687128012d0e81ec653_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_74fbea4aca92496da2de577fb1153010d562b1a681aa075ed3a7f592e7d80743 = $this->env->getExtension("native_profiler");
        $__internal_74fbea4aca92496da2de577fb1153010d562b1a681aa075ed3a7f592e7d80743->enter($__internal_74fbea4aca92496da2de577fb1153010d562b1a681aa075ed3a7f592e7d80743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_74fbea4aca92496da2de577fb1153010d562b1a681aa075ed3a7f592e7d80743->leave($__internal_74fbea4aca92496da2de577fb1153010d562b1a681aa075ed3a7f592e7d80743_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c922c20d445e3a1ef73f469557b0b62bae8eb392348a4880b80d89a2c1d87a7 = $this->env->getExtension("native_profiler");
        $__internal_1c922c20d445e3a1ef73f469557b0b62bae8eb392348a4880b80d89a2c1d87a7->enter($__internal_1c922c20d445e3a1ef73f469557b0b62bae8eb392348a4880b80d89a2c1d87a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1c922c20d445e3a1ef73f469557b0b62bae8eb392348a4880b80d89a2c1d87a7->leave($__internal_1c922c20d445e3a1ef73f469557b0b62bae8eb392348a4880b80d89a2c1d87a7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb6cd34120a255c8739e2b15503fbdac00d3c955297de5953d057a32dcaad5b9 = $this->env->getExtension("native_profiler");
        $__internal_cb6cd34120a255c8739e2b15503fbdac00d3c955297de5953d057a32dcaad5b9->enter($__internal_cb6cd34120a255c8739e2b15503fbdac00d3c955297de5953d057a32dcaad5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_cb6cd34120a255c8739e2b15503fbdac00d3c955297de5953d057a32dcaad5b9->leave($__internal_cb6cd34120a255c8739e2b15503fbdac00d3c955297de5953d057a32dcaad5b9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
