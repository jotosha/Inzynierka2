<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_06fce03501b05dd7b67dc4ff86faa46967972ac6bf5f413b65f792fdfade35e6 extends Twig_Template
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
        $__internal_8a47c289fa93937014f43f3e4be8a361d02cd262970a9e5a03119f678450e4f9 = $this->env->getExtension("native_profiler");
        $__internal_8a47c289fa93937014f43f3e4be8a361d02cd262970a9e5a03119f678450e4f9->enter($__internal_8a47c289fa93937014f43f3e4be8a361d02cd262970a9e5a03119f678450e4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a47c289fa93937014f43f3e4be8a361d02cd262970a9e5a03119f678450e4f9->leave($__internal_8a47c289fa93937014f43f3e4be8a361d02cd262970a9e5a03119f678450e4f9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d3ca02ebbd5b8277ff667e14b8437588739083a527261980cf12044d3a2924cb = $this->env->getExtension("native_profiler");
        $__internal_d3ca02ebbd5b8277ff667e14b8437588739083a527261980cf12044d3a2924cb->enter($__internal_d3ca02ebbd5b8277ff667e14b8437588739083a527261980cf12044d3a2924cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d3ca02ebbd5b8277ff667e14b8437588739083a527261980cf12044d3a2924cb->leave($__internal_d3ca02ebbd5b8277ff667e14b8437588739083a527261980cf12044d3a2924cb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fdb83a7e7a47c84cac7f5d263d92d38d17e13e50395792f3acd5c203b302f04f = $this->env->getExtension("native_profiler");
        $__internal_fdb83a7e7a47c84cac7f5d263d92d38d17e13e50395792f3acd5c203b302f04f->enter($__internal_fdb83a7e7a47c84cac7f5d263d92d38d17e13e50395792f3acd5c203b302f04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fdb83a7e7a47c84cac7f5d263d92d38d17e13e50395792f3acd5c203b302f04f->leave($__internal_fdb83a7e7a47c84cac7f5d263d92d38d17e13e50395792f3acd5c203b302f04f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7143880f630adbbe56583198f2cfb09a4634da1a7903ed3f1a1e591c90243c01 = $this->env->getExtension("native_profiler");
        $__internal_7143880f630adbbe56583198f2cfb09a4634da1a7903ed3f1a1e591c90243c01->enter($__internal_7143880f630adbbe56583198f2cfb09a4634da1a7903ed3f1a1e591c90243c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7143880f630adbbe56583198f2cfb09a4634da1a7903ed3f1a1e591c90243c01->leave($__internal_7143880f630adbbe56583198f2cfb09a4634da1a7903ed3f1a1e591c90243c01_prof);

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
