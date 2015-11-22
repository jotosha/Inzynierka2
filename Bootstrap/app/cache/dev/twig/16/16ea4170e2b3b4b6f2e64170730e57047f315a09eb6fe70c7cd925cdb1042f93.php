<?php

/* GregwarCaptchaBundle::captcha.html.twig */
class __TwigTemplate_e4c777206efe699b09e73b629c920408fff665f126bf4c3ff9c888d9a25a6071 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'captcha_widget' => array($this, 'block_captcha_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b18d4221c2ad4143308f15b2916ac0b13f16a7836de901efdc88f1a01163de0 = $this->env->getExtension("native_profiler");
        $__internal_7b18d4221c2ad4143308f15b2916ac0b13f16a7836de901efdc88f1a01163de0->enter($__internal_7b18d4221c2ad4143308f15b2916ac0b13f16a7836de901efdc88f1a01163de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GregwarCaptchaBundle::captcha.html.twig"));

        // line 1
        $this->displayBlock('captcha_widget', $context, $blocks);
        // line 20
        echo "
";
        
        $__internal_7b18d4221c2ad4143308f15b2916ac0b13f16a7836de901efdc88f1a01163de0->leave($__internal_7b18d4221c2ad4143308f15b2916ac0b13f16a7836de901efdc88f1a01163de0_prof);

    }

    // line 1
    public function block_captcha_widget($context, array $blocks = array())
    {
        $__internal_38c536d5ae9184a16b53060b995d8669df98f43f5b205d256b2a0885f1de2f79 = $this->env->getExtension("native_profiler");
        $__internal_38c536d5ae9184a16b53060b995d8669df98f43f5b205d256b2a0885f1de2f79->enter($__internal_38c536d5ae9184a16b53060b995d8669df98f43f5b205d256b2a0885f1de2f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "captcha_widget"));

        // line 2
        if ((isset($context["is_human"]) ? $context["is_human"] : $this->getContext($context, "is_human"))) {
            // line 3
            echo "-
";
        } else {
            // line 5
            ob_start();
            // line 6
            echo "    <img id=\"";
            echo twig_escape_filter($this->env, (isset($context["image_id"]) ? $context["image_id"] : $this->getContext($context, "image_id")), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["captcha_code"]) ? $context["captcha_code"] : $this->getContext($context, "captcha_code")), "html", null, true);
            echo "\" alt=\"\" title=\"captcha\" width=\"";
            echo twig_escape_filter($this->env, (isset($context["captcha_width"]) ? $context["captcha_width"] : $this->getContext($context, "captcha_width")), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, (isset($context["captcha_height"]) ? $context["captcha_height"] : $this->getContext($context, "captcha_height")), "html", null, true);
            echo "\" />
    ";
            // line 7
            if ((isset($context["reload"]) ? $context["reload"] : $this->getContext($context, "reload"))) {
                // line 8
                echo "    <script type=\"text/javascript\">
        function reload_";
                // line 9
                echo twig_escape_filter($this->env, (isset($context["image_id"]) ? $context["image_id"] : $this->getContext($context, "image_id")), "html", null, true);
                echo "() {
            var img = document.getElementById('";
                // line 10
                echo twig_escape_filter($this->env, (isset($context["image_id"]) ? $context["image_id"] : $this->getContext($context, "image_id")), "html", null, true);
                echo "');
            img.src = '";
                // line 11
                echo twig_escape_filter($this->env, (isset($context["captcha_code"]) ? $context["captcha_code"] : $this->getContext($context, "captcha_code")), "html", null, true);
                echo "?n=' + (new Date()).getTime();
        }
    </script>
    <a class=\"captcha_reload\" href=\"javascript:reload_";
                // line 14
                echo twig_escape_filter($this->env, (isset($context["image_id"]) ? $context["image_id"] : $this->getContext($context, "image_id")), "html", null, true);
                echo "();\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Renew", array(), "gregwar_captcha"), "html", null, true);
                echo "</a>
    ";
            }
            // line 16
            echo "    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        
        $__internal_38c536d5ae9184a16b53060b995d8669df98f43f5b205d256b2a0885f1de2f79->leave($__internal_38c536d5ae9184a16b53060b995d8669df98f43f5b205d256b2a0885f1de2f79_prof);

    }

    public function getTemplateName()
    {
        return "GregwarCaptchaBundle::captcha.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 16,  77 => 14,  71 => 11,  67 => 10,  63 => 9,  60 => 8,  58 => 7,  47 => 6,  45 => 5,  41 => 3,  39 => 2,  33 => 1,  25 => 20,  23 => 1,);
    }
}
/* {% block captcha_widget %}*/
/* {% if is_human %}*/
/* -*/
/* {% else %}*/
/* {% spaceless %}*/
/*     <img id="{{ image_id }}" src="{{ captcha_code }}" alt="" title="captcha" width="{{ captcha_width }}" height="{{ captcha_height }}" />*/
/*     {% if reload %}*/
/*     <script type="text/javascript">*/
/*         function reload_{{ image_id }}() {*/
/*             var img = document.getElementById('{{ image_id }}');*/
/*             img.src = '{{ captcha_code }}?n=' + (new Date()).getTime();*/
/*         }*/
/*     </script>*/
/*     <a class="captcha_reload" href="javascript:reload_{{ image_id }}();">{{ 'Renew'|trans({}, 'gregwar_captcha') }}</a>*/
/*     {% endif %}*/
/*     {{ form_widget(form) }}*/
/* {% endspaceless %}*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* */
