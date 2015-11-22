<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_6c12e5c000a69e1f79c90e572aa751e589653d824e5028b442855f8aca3f3e5f extends Twig_Template
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
        $__internal_68c60aafa8ef4effc4521a12f39b4bc94e5e71ed49935ec5ba5c94c6a136b193 = $this->env->getExtension("native_profiler");
        $__internal_68c60aafa8ef4effc4521a12f39b4bc94e5e71ed49935ec5ba5c94c6a136b193->enter($__internal_68c60aafa8ef4effc4521a12f39b4bc94e5e71ed49935ec5ba5c94c6a136b193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_68c60aafa8ef4effc4521a12f39b4bc94e5e71ed49935ec5ba5c94c6a136b193->leave($__internal_68c60aafa8ef4effc4521a12f39b4bc94e5e71ed49935ec5ba5c94c6a136b193_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
