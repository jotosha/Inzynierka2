<?php

/* base.html.twig */
class __TwigTemplate_341815fe94b64619489ffd1f7ddc2a4efc1a81cbc6f23d0fcabdc6b81f7d0baa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7454d28a4fef8b1d3e468254687c4ffb77b72e5bf902700b4e4759963da6c0f = $this->env->getExtension("native_profiler");
        $__internal_e7454d28a4fef8b1d3e468254687c4ffb77b72e5bf902700b4e4759963da6c0f->enter($__internal_e7454d28a4fef8b1d3e468254687c4ffb77b72e5bf902700b4e4759963da6c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
        ";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0c961fa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0c961fa_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/0c961fa_part_1_style_1.css");
            // line 11
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "0c961fa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0c961fa") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/0c961fa.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c263a4c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c263a4c_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/c263a4c_part_1_bootstrap-datepicker_1.css");
            // line 14
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "c263a4c_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c263a4c_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/c263a4c_part_1_bootstrap-datepicker.css_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "c263a4c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c263a4c") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/c263a4c.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2858745_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2858745_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/2858745_bootstrap-datepicker_1.js");
            // line 17
            echo "        <link rel=\"javascript\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "2858745"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2858745") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/2858745.js");
            echo "        <link rel=\"javascript\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 19
        echo "    </head>
    <body>
    ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "

        <nav class=\"navbar navbar-default navbar-fixed-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("StronaGlowna");
        echo "\">Cztery Ściany</a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("NoweOgloszenie");
        echo "\">DODAJ OGŁOSZENIE</a></li>
                        <li><a href=\"#\">PROFIL</a></li>
                        <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("Login");
        echo "\">ZALOGUJ</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class=\"footer navbar-default navbar-fixed-bottom\" id=\"footer\">
            <footer class=\"container\" >
                <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"#\">Regulamin</a></li>
                        <li><a href=\"#\">Polityka prywatności</a></li>
                        <li><a href=\"#\">Kontakt</a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </body>
</html>
";
        
        $__internal_e7454d28a4fef8b1d3e468254687c4ffb77b72e5bf902700b4e4759963da6c0f->leave($__internal_e7454d28a4fef8b1d3e468254687c4ffb77b72e5bf902700b4e4759963da6c0f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c44abad3c86f8526f10efcc8ef5fc810b41cf9b375eccf308202734654f80d9 = $this->env->getExtension("native_profiler");
        $__internal_9c44abad3c86f8526f10efcc8ef5fc810b41cf9b375eccf308202734654f80d9->enter($__internal_9c44abad3c86f8526f10efcc8ef5fc810b41cf9b375eccf308202734654f80d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cztery Ściany";
        
        $__internal_9c44abad3c86f8526f10efcc8ef5fc810b41cf9b375eccf308202734654f80d9->leave($__internal_9c44abad3c86f8526f10efcc8ef5fc810b41cf9b375eccf308202734654f80d9_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a9e19af9df271123dee57387d05fd41378ddcf63b59e9937251c237cbc5de07 = $this->env->getExtension("native_profiler");
        $__internal_8a9e19af9df271123dee57387d05fd41378ddcf63b59e9937251c237cbc5de07->enter($__internal_8a9e19af9df271123dee57387d05fd41378ddcf63b59e9937251c237cbc5de07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8a9e19af9df271123dee57387d05fd41378ddcf63b59e9937251c237cbc5de07->leave($__internal_8a9e19af9df271123dee57387d05fd41378ddcf63b59e9937251c237cbc5de07_prof);

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
        return array (  169 => 21,  157 => 5,  130 => 38,  125 => 36,  118 => 32,  106 => 22,  104 => 21,  100 => 19,  86 => 17,  81 => 16,  61 => 14,  56 => 13,  42 => 11,  38 => 10,  30 => 5,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Cztery Ściany{% endblock %}</title>*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*         <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>*/
/*         {% stylesheets '@AppBundle/Resources/css/style.css*' filter='cssrewrite' %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" />*/
/*         {% endstylesheets %}*/
/*         {% stylesheets '@AppBundle/Resources/public/plugins/bootstrap-datepicker-master/dist/css/bootstrap-datepicker.css*' filter='cssrewrite' %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" />*/
/*         {% endstylesheets %}*/
/*         {% javascripts '@AppBundle/Resources/public/plugins/bootstrap-datepicker-master/dist/js/bootstrap-datepicker.js' %}*/
/*         <link rel="javascript" href="{{ asset_url }}" />*/
/*         {% endjavascripts %}*/
/*     </head>*/
/*     <body>*/
/*     {% block body %}{% endblock %}*/
/* */
/* */
/*         <nav class="navbar navbar-default navbar-fixed-top">*/
/*             <div class="container">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="{{ path('StronaGlowna') }}">Cztery Ściany</a>*/
/*                 </div>*/
/*                 <div class="collapse navbar-collapse" id="myNavbar">*/
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         <li><a href="{{ path('NoweOgloszenie') }}">DODAJ OGŁOSZENIE</a></li>*/
/*                         <li><a href="#">PROFIL</a></li>*/
/*                         <li><a href="{{ path('Login') }}">ZALOGUJ</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/* */
/*         <div class="footer navbar-default navbar-fixed-bottom" id="footer">*/
/*             <footer class="container" >*/
/*                 <div class="collapse navbar-collapse" id="myNavbar">*/
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         <li><a href="#">Regulamin</a></li>*/
/*                         <li><a href="#">Polityka prywatności</a></li>*/
/*                         <li><a href="#">Kontakt</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </footer>*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
