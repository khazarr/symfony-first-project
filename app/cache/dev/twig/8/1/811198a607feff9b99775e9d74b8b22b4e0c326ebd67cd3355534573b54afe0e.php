<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c9abf166be586e42eb95032d9cc90dbc168e845d76362769087102ecbfbb61c0 extends Twig_Template
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
        $__internal_ea0edda178fec6cb9a2aa5e41eb740bb8535034969f26f5feadca8d6cb771794 = $this->env->getExtension("native_profiler");
        $__internal_ea0edda178fec6cb9a2aa5e41eb740bb8535034969f26f5feadca8d6cb771794->enter($__internal_ea0edda178fec6cb9a2aa5e41eb740bb8535034969f26f5feadca8d6cb771794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea0edda178fec6cb9a2aa5e41eb740bb8535034969f26f5feadca8d6cb771794->leave($__internal_ea0edda178fec6cb9a2aa5e41eb740bb8535034969f26f5feadca8d6cb771794_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_db1c47882c0faa3fa6e24a492f1be9c4b8d9b01adcc48995ada80ce752e661c3 = $this->env->getExtension("native_profiler");
        $__internal_db1c47882c0faa3fa6e24a492f1be9c4b8d9b01adcc48995ada80ce752e661c3->enter($__internal_db1c47882c0faa3fa6e24a492f1be9c4b8d9b01adcc48995ada80ce752e661c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_db1c47882c0faa3fa6e24a492f1be9c4b8d9b01adcc48995ada80ce752e661c3->leave($__internal_db1c47882c0faa3fa6e24a492f1be9c4b8d9b01adcc48995ada80ce752e661c3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8896daf05564b07241c8dd01e696b45f8ca2cba6129395aa2630d842b29c0427 = $this->env->getExtension("native_profiler");
        $__internal_8896daf05564b07241c8dd01e696b45f8ca2cba6129395aa2630d842b29c0427->enter($__internal_8896daf05564b07241c8dd01e696b45f8ca2cba6129395aa2630d842b29c0427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8896daf05564b07241c8dd01e696b45f8ca2cba6129395aa2630d842b29c0427->leave($__internal_8896daf05564b07241c8dd01e696b45f8ca2cba6129395aa2630d842b29c0427_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea845a65ded1eb517f34f68781276adc43f3552a79a34ec2cb2fcc7ee6425886 = $this->env->getExtension("native_profiler");
        $__internal_ea845a65ded1eb517f34f68781276adc43f3552a79a34ec2cb2fcc7ee6425886->enter($__internal_ea845a65ded1eb517f34f68781276adc43f3552a79a34ec2cb2fcc7ee6425886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ea845a65ded1eb517f34f68781276adc43f3552a79a34ec2cb2fcc7ee6425886->leave($__internal_ea845a65ded1eb517f34f68781276adc43f3552a79a34ec2cb2fcc7ee6425886_prof);

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
