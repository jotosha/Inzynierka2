<?php

/* form_div_layout.html.twig */
class __TwigTemplate_9d8c3e9e7468504d85481c0841d71e976aa2686de7d60f395965ac93fa4813a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_enctype' => array($this, 'block_form_enctype'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5492de660f797fa1f679c25e8d94643812c23500ecf1fa111442d598c36c609 = $this->env->getExtension("native_profiler");
        $__internal_e5492de660f797fa1f679c25e8d94643812c23500ecf1fa111442d598c36c609->enter($__internal_e5492de660f797fa1f679c25e8d94643812c23500ecf1fa111442d598c36c609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 88
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 92
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 96
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 109
        $this->displayBlock('date_widget', $context, $blocks);
        // line 123
        $this->displayBlock('time_widget', $context, $blocks);
        // line 134
        $this->displayBlock('number_widget', $context, $blocks);
        // line 140
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 145
        $this->displayBlock('money_widget', $context, $blocks);
        // line 149
        $this->displayBlock('url_widget', $context, $blocks);
        // line 154
        $this->displayBlock('search_widget', $context, $blocks);
        // line 159
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 164
        $this->displayBlock('password_widget', $context, $blocks);
        // line 169
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 174
        $this->displayBlock('email_widget', $context, $blocks);
        // line 179
        $this->displayBlock('button_widget', $context, $blocks);
        // line 193
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 198
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 205
        $this->displayBlock('form_label', $context, $blocks);
        // line 227
        $this->displayBlock('button_label', $context, $blocks);
        // line 231
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 239
        $this->displayBlock('form_row', $context, $blocks);
        // line 247
        $this->displayBlock('button_row', $context, $blocks);
        // line 253
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 259
        $this->displayBlock('form', $context, $blocks);
        // line 265
        $this->displayBlock('form_start', $context, $blocks);
        // line 278
        $this->displayBlock('form_end', $context, $blocks);
        // line 285
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 289
        $this->displayBlock('form_errors', $context, $blocks);
        // line 299
        $this->displayBlock('form_rest', $context, $blocks);
        // line 306
        echo "
";
        // line 309
        $this->displayBlock('form_rows', $context, $blocks);
        // line 315
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 332
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 346
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 360
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_e5492de660f797fa1f679c25e8d94643812c23500ecf1fa111442d598c36c609->leave($__internal_e5492de660f797fa1f679c25e8d94643812c23500ecf1fa111442d598c36c609_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_626223c0a5c0e942c8709885389c3fa339cf6a1c078a2645ee2b9e9ffaaa7364 = $this->env->getExtension("native_profiler");
        $__internal_626223c0a5c0e942c8709885389c3fa339cf6a1c078a2645ee2b9e9ffaaa7364->enter($__internal_626223c0a5c0e942c8709885389c3fa339cf6a1c078a2645ee2b9e9ffaaa7364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_626223c0a5c0e942c8709885389c3fa339cf6a1c078a2645ee2b9e9ffaaa7364->leave($__internal_626223c0a5c0e942c8709885389c3fa339cf6a1c078a2645ee2b9e9ffaaa7364_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_1c52b4fbd4f22f8fb7afb7f851d65c347b7c0d677b8f24fe14de0a0876198f64 = $this->env->getExtension("native_profiler");
        $__internal_1c52b4fbd4f22f8fb7afb7f851d65c347b7c0d677b8f24fe14de0a0876198f64->enter($__internal_1c52b4fbd4f22f8fb7afb7f851d65c347b7c0d677b8f24fe14de0a0876198f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_1c52b4fbd4f22f8fb7afb7f851d65c347b7c0d677b8f24fe14de0a0876198f64->leave($__internal_1c52b4fbd4f22f8fb7afb7f851d65c347b7c0d677b8f24fe14de0a0876198f64_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_fbf521d990398cca96c598d82e163a0ccf9e979a634f0a59a877de6a08dbffaf = $this->env->getExtension("native_profiler");
        $__internal_fbf521d990398cca96c598d82e163a0ccf9e979a634f0a59a877de6a08dbffaf->enter($__internal_fbf521d990398cca96c598d82e163a0ccf9e979a634f0a59a877de6a08dbffaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()))) {
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_fbf521d990398cca96c598d82e163a0ccf9e979a634f0a59a877de6a08dbffaf->leave($__internal_fbf521d990398cca96c598d82e163a0ccf9e979a634f0a59a877de6a08dbffaf_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_373e1a43bc8d096b3e6fd4b17af1d7c72415554a5ff5e6a8c6925f15913cd540 = $this->env->getExtension("native_profiler");
        $__internal_373e1a43bc8d096b3e6fd4b17af1d7c72415554a5ff5e6a8c6925f15913cd540->enter($__internal_373e1a43bc8d096b3e6fd4b17af1d7c72415554a5ff5e6a8c6925f15913cd540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_373e1a43bc8d096b3e6fd4b17af1d7c72415554a5ff5e6a8c6925f15913cd540->leave($__internal_373e1a43bc8d096b3e6fd4b17af1d7c72415554a5ff5e6a8c6925f15913cd540_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_aae90ee51aa4d70a8d6b85f53e09a7c876f0a9e5f045360c512928eda3619d13 = $this->env->getExtension("native_profiler");
        $__internal_aae90ee51aa4d70a8d6b85f53e09a7c876f0a9e5f045360c512928eda3619d13->enter($__internal_aae90ee51aa4d70a8d6b85f53e09a7c876f0a9e5f045360c512928eda3619d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_aae90ee51aa4d70a8d6b85f53e09a7c876f0a9e5f045360c512928eda3619d13->leave($__internal_aae90ee51aa4d70a8d6b85f53e09a7c876f0a9e5f045360c512928eda3619d13_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_6692f388e462cc0153651bab624abce852686c146590947413a0237cb3887b35 = $this->env->getExtension("native_profiler");
        $__internal_6692f388e462cc0153651bab624abce852686c146590947413a0237cb3887b35->enter($__internal_6692f388e462cc0153651bab624abce852686c146590947413a0237cb3887b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_6692f388e462cc0153651bab624abce852686c146590947413a0237cb3887b35->leave($__internal_6692f388e462cc0153651bab624abce852686c146590947413a0237cb3887b35_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_692fdd42e00fc835401f3f4a4d26366dec2a080f3b61d479a14f1117973f0837 = $this->env->getExtension("native_profiler");
        $__internal_692fdd42e00fc835401f3f4a4d26366dec2a080f3b61d479a14f1117973f0837->enter($__internal_692fdd42e00fc835401f3f4a4d26366dec2a080f3b61d479a14f1117973f0837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_692fdd42e00fc835401f3f4a4d26366dec2a080f3b61d479a14f1117973f0837->leave($__internal_692fdd42e00fc835401f3f4a4d26366dec2a080f3b61d479a14f1117973f0837_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_8105aa5eeff54845b306460340a9d487586f74db373d10dcf31dbca35da802a1 = $this->env->getExtension("native_profiler");
        $__internal_8105aa5eeff54845b306460340a9d487586f74db373d10dcf31dbca35da802a1->enter($__internal_8105aa5eeff54845b306460340a9d487586f74db373d10dcf31dbca35da802a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if (((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('translator')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_8105aa5eeff54845b306460340a9d487586f74db373d10dcf31dbca35da802a1->leave($__internal_8105aa5eeff54845b306460340a9d487586f74db373d10dcf31dbca35da802a1_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_9adee5cfe076f9a76ded40ccd8a4703f606f18ac985c63b21c256a30a63d99ae = $this->env->getExtension("native_profiler");
        $__internal_9adee5cfe076f9a76ded40ccd8a4703f606f18ac985c63b21c256a30a63d99ae->enter($__internal_9adee5cfe076f9a76ded40ccd8a4703f606f18ac985c63b21c256a30a63d99ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('translator')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                // line 83
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\" ";
                $this->displayBlock("attributes", $context, $blocks);
                if ($this->env->getExtension('form')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('translator')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_9adee5cfe076f9a76ded40ccd8a4703f606f18ac985c63b21c256a30a63d99ae->leave($__internal_9adee5cfe076f9a76ded40ccd8a4703f606f18ac985c63b21c256a30a63d99ae_prof);

    }

    // line 88
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_6dcbe3a0bc98dacf1827fd1512dbb8c4439c8daad772ee1ff2b27b3af7482d5e = $this->env->getExtension("native_profiler");
        $__internal_6dcbe3a0bc98dacf1827fd1512dbb8c4439c8daad772ee1ff2b27b3af7482d5e->enter($__internal_6dcbe3a0bc98dacf1827fd1512dbb8c4439c8daad772ee1ff2b27b3af7482d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 89
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_6dcbe3a0bc98dacf1827fd1512dbb8c4439c8daad772ee1ff2b27b3af7482d5e->leave($__internal_6dcbe3a0bc98dacf1827fd1512dbb8c4439c8daad772ee1ff2b27b3af7482d5e_prof);

    }

    // line 92
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_95c342ce5e3be049db30d2fb5c1a2e374105562f6dfa54f0ea2bc965c4db5af0 = $this->env->getExtension("native_profiler");
        $__internal_95c342ce5e3be049db30d2fb5c1a2e374105562f6dfa54f0ea2bc965c4db5af0->enter($__internal_95c342ce5e3be049db30d2fb5c1a2e374105562f6dfa54f0ea2bc965c4db5af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 93
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_95c342ce5e3be049db30d2fb5c1a2e374105562f6dfa54f0ea2bc965c4db5af0->leave($__internal_95c342ce5e3be049db30d2fb5c1a2e374105562f6dfa54f0ea2bc965c4db5af0_prof);

    }

    // line 96
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_689a04a6dc146035b0413134791efd6448bc1508c322ef7205d09ff4b2add21c = $this->env->getExtension("native_profiler");
        $__internal_689a04a6dc146035b0413134791efd6448bc1508c322ef7205d09ff4b2add21c->enter($__internal_689a04a6dc146035b0413134791efd6448bc1508c322ef7205d09ff4b2add21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 97
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 98
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 102
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 103
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
            // line 104
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
            // line 105
            echo "</div>";
        }
        
        $__internal_689a04a6dc146035b0413134791efd6448bc1508c322ef7205d09ff4b2add21c->leave($__internal_689a04a6dc146035b0413134791efd6448bc1508c322ef7205d09ff4b2add21c_prof);

    }

    // line 109
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_d607c310e4bcb7102358bbdb4b681c2fb52d607fb7404813ea0af67fd418aa9f = $this->env->getExtension("native_profiler");
        $__internal_d607c310e4bcb7102358bbdb4b681c2fb52d607fb7404813ea0af67fd418aa9f->enter($__internal_d607c310e4bcb7102358bbdb4b681c2fb52d607fb7404813ea0af67fd418aa9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 110
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 111
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 113
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 114
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 115
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 116
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 117
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 119
            echo "</div>";
        }
        
        $__internal_d607c310e4bcb7102358bbdb4b681c2fb52d607fb7404813ea0af67fd418aa9f->leave($__internal_d607c310e4bcb7102358bbdb4b681c2fb52d607fb7404813ea0af67fd418aa9f_prof);

    }

    // line 123
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_6db5bba1d725ac5f3c6d952fc32dcbd8cdbcb128cc75d3cdb993b46110bbae42 = $this->env->getExtension("native_profiler");
        $__internal_6db5bba1d725ac5f3c6d952fc32dcbd8cdbcb128cc75d3cdb993b46110bbae42->enter($__internal_6db5bba1d725ac5f3c6d952fc32dcbd8cdbcb128cc75d3cdb993b46110bbae42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 124
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 125
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 127
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 128
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 129
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            // line 130
            echo "        </div>";
        }
        
        $__internal_6db5bba1d725ac5f3c6d952fc32dcbd8cdbcb128cc75d3cdb993b46110bbae42->leave($__internal_6db5bba1d725ac5f3c6d952fc32dcbd8cdbcb128cc75d3cdb993b46110bbae42_prof);

    }

    // line 134
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_41e36ec805c6bc5b0cebf91651699810b2cf2aa7fc8540def6464a911819f873 = $this->env->getExtension("native_profiler");
        $__internal_41e36ec805c6bc5b0cebf91651699810b2cf2aa7fc8540def6464a911819f873->enter($__internal_41e36ec805c6bc5b0cebf91651699810b2cf2aa7fc8540def6464a911819f873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 136
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 137
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_41e36ec805c6bc5b0cebf91651699810b2cf2aa7fc8540def6464a911819f873->leave($__internal_41e36ec805c6bc5b0cebf91651699810b2cf2aa7fc8540def6464a911819f873_prof);

    }

    // line 140
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_c04f531d54f5bb2b16a29428f93249e58204cd1a123871e3ecf793ff4634b367 = $this->env->getExtension("native_profiler");
        $__internal_c04f531d54f5bb2b16a29428f93249e58204cd1a123871e3ecf793ff4634b367->enter($__internal_c04f531d54f5bb2b16a29428f93249e58204cd1a123871e3ecf793ff4634b367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 141
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "number")) : ("number"));
        // line 142
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_c04f531d54f5bb2b16a29428f93249e58204cd1a123871e3ecf793ff4634b367->leave($__internal_c04f531d54f5bb2b16a29428f93249e58204cd1a123871e3ecf793ff4634b367_prof);

    }

    // line 145
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_9173c8d244aef953061be05e122992ac984e9837f7140860dbcac6f5c68fc71a = $this->env->getExtension("native_profiler");
        $__internal_9173c8d244aef953061be05e122992ac984e9837f7140860dbcac6f5c68fc71a->enter($__internal_9173c8d244aef953061be05e122992ac984e9837f7140860dbcac6f5c68fc71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 146
        echo twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_9173c8d244aef953061be05e122992ac984e9837f7140860dbcac6f5c68fc71a->leave($__internal_9173c8d244aef953061be05e122992ac984e9837f7140860dbcac6f5c68fc71a_prof);

    }

    // line 149
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_ffa16fc4301fef558b8685b03e4fd109f1fca9186d69269eef1ccf9e4769e5d0 = $this->env->getExtension("native_profiler");
        $__internal_ffa16fc4301fef558b8685b03e4fd109f1fca9186d69269eef1ccf9e4769e5d0->enter($__internal_ffa16fc4301fef558b8685b03e4fd109f1fca9186d69269eef1ccf9e4769e5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 150
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "url")) : ("url"));
        // line 151
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ffa16fc4301fef558b8685b03e4fd109f1fca9186d69269eef1ccf9e4769e5d0->leave($__internal_ffa16fc4301fef558b8685b03e4fd109f1fca9186d69269eef1ccf9e4769e5d0_prof);

    }

    // line 154
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_817d96d70d4c769b2261d9fe85568cb68068a8613b04d1e04f7f5c70df56b186 = $this->env->getExtension("native_profiler");
        $__internal_817d96d70d4c769b2261d9fe85568cb68068a8613b04d1e04f7f5c70df56b186->enter($__internal_817d96d70d4c769b2261d9fe85568cb68068a8613b04d1e04f7f5c70df56b186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 155
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "search")) : ("search"));
        // line 156
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_817d96d70d4c769b2261d9fe85568cb68068a8613b04d1e04f7f5c70df56b186->leave($__internal_817d96d70d4c769b2261d9fe85568cb68068a8613b04d1e04f7f5c70df56b186_prof);

    }

    // line 159
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_b2996e5ca29670cb9841247fd83f752c542533422e2b35cc272a2fc2f6b84735 = $this->env->getExtension("native_profiler");
        $__internal_b2996e5ca29670cb9841247fd83f752c542533422e2b35cc272a2fc2f6b84735->enter($__internal_b2996e5ca29670cb9841247fd83f752c542533422e2b35cc272a2fc2f6b84735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 160
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 161
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_b2996e5ca29670cb9841247fd83f752c542533422e2b35cc272a2fc2f6b84735->leave($__internal_b2996e5ca29670cb9841247fd83f752c542533422e2b35cc272a2fc2f6b84735_prof);

    }

    // line 164
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_d31a0e92a0844d14c24fc45695eb78f744ad8b6f8fbf643c5e5807e79d96d614 = $this->env->getExtension("native_profiler");
        $__internal_d31a0e92a0844d14c24fc45695eb78f744ad8b6f8fbf643c5e5807e79d96d614->enter($__internal_d31a0e92a0844d14c24fc45695eb78f744ad8b6f8fbf643c5e5807e79d96d614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 165
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "password")) : ("password"));
        // line 166
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d31a0e92a0844d14c24fc45695eb78f744ad8b6f8fbf643c5e5807e79d96d614->leave($__internal_d31a0e92a0844d14c24fc45695eb78f744ad8b6f8fbf643c5e5807e79d96d614_prof);

    }

    // line 169
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_3fc1a8fcaa385c584f1de4552406f7012f7c58182bf9b3e0ed8557731f2702fe = $this->env->getExtension("native_profiler");
        $__internal_3fc1a8fcaa385c584f1de4552406f7012f7c58182bf9b3e0ed8557731f2702fe->enter($__internal_3fc1a8fcaa385c584f1de4552406f7012f7c58182bf9b3e0ed8557731f2702fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_3fc1a8fcaa385c584f1de4552406f7012f7c58182bf9b3e0ed8557731f2702fe->leave($__internal_3fc1a8fcaa385c584f1de4552406f7012f7c58182bf9b3e0ed8557731f2702fe_prof);

    }

    // line 174
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_df9d8967329ef2617eb6d76b031a9d8f10385724dc9ab27943649bc609cfb546 = $this->env->getExtension("native_profiler");
        $__internal_df9d8967329ef2617eb6d76b031a9d8f10385724dc9ab27943649bc609cfb546->enter($__internal_df9d8967329ef2617eb6d76b031a9d8f10385724dc9ab27943649bc609cfb546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "email")) : ("email"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_df9d8967329ef2617eb6d76b031a9d8f10385724dc9ab27943649bc609cfb546->leave($__internal_df9d8967329ef2617eb6d76b031a9d8f10385724dc9ab27943649bc609cfb546_prof);

    }

    // line 179
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_1511ad97a28c76c5f1b9163adc248cfefe605dfbd49bffa1b7bc663242a0c97a = $this->env->getExtension("native_profiler");
        $__internal_1511ad97a28c76c5f1b9163adc248cfefe605dfbd49bffa1b7bc663242a0c97a->enter($__internal_1511ad97a28c76c5f1b9163adc248cfefe605dfbd49bffa1b7bc663242a0c97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 180
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 181
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                // line 182
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 183
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 184
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 187
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 190
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</button>";
        
        $__internal_1511ad97a28c76c5f1b9163adc248cfefe605dfbd49bffa1b7bc663242a0c97a->leave($__internal_1511ad97a28c76c5f1b9163adc248cfefe605dfbd49bffa1b7bc663242a0c97a_prof);

    }

    // line 193
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_98cbe1300a09874a97b42b074f933495ffbd6747b0a2c3f922cc04dba3768647 = $this->env->getExtension("native_profiler");
        $__internal_98cbe1300a09874a97b42b074f933495ffbd6747b0a2c3f922cc04dba3768647->enter($__internal_98cbe1300a09874a97b42b074f933495ffbd6747b0a2c3f922cc04dba3768647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 195
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_98cbe1300a09874a97b42b074f933495ffbd6747b0a2c3f922cc04dba3768647->leave($__internal_98cbe1300a09874a97b42b074f933495ffbd6747b0a2c3f922cc04dba3768647_prof);

    }

    // line 198
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_0eea0a4aec60a7b609708191841645f1edc06c7fd01726d1e4b7215d0bffe2e8 = $this->env->getExtension("native_profiler");
        $__internal_0eea0a4aec60a7b609708191841645f1edc06c7fd01726d1e4b7215d0bffe2e8->enter($__internal_0eea0a4aec60a7b609708191841645f1edc06c7fd01726d1e4b7215d0bffe2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 200
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_0eea0a4aec60a7b609708191841645f1edc06c7fd01726d1e4b7215d0bffe2e8->leave($__internal_0eea0a4aec60a7b609708191841645f1edc06c7fd01726d1e4b7215d0bffe2e8_prof);

    }

    // line 205
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_01d38b577c8335ac842b7f22fa33a8c190122489834c39565465ce13e496ac40 = $this->env->getExtension("native_profiler");
        $__internal_01d38b577c8335ac842b7f22fa33a8c190122489834c39565465ce13e496ac40->enter($__internal_01d38b577c8335ac842b7f22fa33a8c190122489834c39565465ce13e496ac40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 206
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 207
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 208
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 210
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 211
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 213
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 214
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 215
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 216
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 217
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 220
                    $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 223
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_01d38b577c8335ac842b7f22fa33a8c190122489834c39565465ce13e496ac40->leave($__internal_01d38b577c8335ac842b7f22fa33a8c190122489834c39565465ce13e496ac40_prof);

    }

    // line 227
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_777567c7af9ec7eddadf0f40cde534740527ff9bccfd6e4682a9221190d0460b = $this->env->getExtension("native_profiler");
        $__internal_777567c7af9ec7eddadf0f40cde534740527ff9bccfd6e4682a9221190d0460b->enter($__internal_777567c7af9ec7eddadf0f40cde534740527ff9bccfd6e4682a9221190d0460b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_777567c7af9ec7eddadf0f40cde534740527ff9bccfd6e4682a9221190d0460b->leave($__internal_777567c7af9ec7eddadf0f40cde534740527ff9bccfd6e4682a9221190d0460b_prof);

    }

    // line 231
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_1ec30d924e2130bdeb613b691a9d84f94fe5771a5eedb2ea9b4775e431d4bfe6 = $this->env->getExtension("native_profiler");
        $__internal_1ec30d924e2130bdeb613b691a9d84f94fe5771a5eedb2ea9b4775e431d4bfe6->enter($__internal_1ec30d924e2130bdeb613b691a9d84f94fe5771a5eedb2ea9b4775e431d4bfe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 236
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_1ec30d924e2130bdeb613b691a9d84f94fe5771a5eedb2ea9b4775e431d4bfe6->leave($__internal_1ec30d924e2130bdeb613b691a9d84f94fe5771a5eedb2ea9b4775e431d4bfe6_prof);

    }

    // line 239
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_cb1d0ead23d2cb19a723f065892560e1c0747e96b970986aea816f8f3897e41d = $this->env->getExtension("native_profiler");
        $__internal_cb1d0ead23d2cb19a723f065892560e1c0747e96b970986aea816f8f3897e41d->enter($__internal_cb1d0ead23d2cb19a723f065892560e1c0747e96b970986aea816f8f3897e41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 240
        echo "<div>";
        // line 241
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 242
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 243
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 244
        echo "</div>";
        
        $__internal_cb1d0ead23d2cb19a723f065892560e1c0747e96b970986aea816f8f3897e41d->leave($__internal_cb1d0ead23d2cb19a723f065892560e1c0747e96b970986aea816f8f3897e41d_prof);

    }

    // line 247
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_76e5db24160669ae789d5f48821cdedc00230b1891bddc6ec971c15542f7ee39 = $this->env->getExtension("native_profiler");
        $__internal_76e5db24160669ae789d5f48821cdedc00230b1891bddc6ec971c15542f7ee39->enter($__internal_76e5db24160669ae789d5f48821cdedc00230b1891bddc6ec971c15542f7ee39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 248
        echo "<div>";
        // line 249
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 250
        echo "</div>";
        
        $__internal_76e5db24160669ae789d5f48821cdedc00230b1891bddc6ec971c15542f7ee39->leave($__internal_76e5db24160669ae789d5f48821cdedc00230b1891bddc6ec971c15542f7ee39_prof);

    }

    // line 253
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_77ea2d4ccc7aca0a578c878e2033705eae0d4c422d3d7ab3cabfeef81841e4ed = $this->env->getExtension("native_profiler");
        $__internal_77ea2d4ccc7aca0a578c878e2033705eae0d4c422d3d7ab3cabfeef81841e4ed->enter($__internal_77ea2d4ccc7aca0a578c878e2033705eae0d4c422d3d7ab3cabfeef81841e4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 254
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        
        $__internal_77ea2d4ccc7aca0a578c878e2033705eae0d4c422d3d7ab3cabfeef81841e4ed->leave($__internal_77ea2d4ccc7aca0a578c878e2033705eae0d4c422d3d7ab3cabfeef81841e4ed_prof);

    }

    // line 259
    public function block_form($context, array $blocks = array())
    {
        $__internal_ff65785779c4003b2a2e81596a00f4fc3cf986e0dddb2e22aea5dbef2e4659ce = $this->env->getExtension("native_profiler");
        $__internal_ff65785779c4003b2a2e81596a00f4fc3cf986e0dddb2e22aea5dbef2e4659ce->enter($__internal_ff65785779c4003b2a2e81596a00f4fc3cf986e0dddb2e22aea5dbef2e4659ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 260
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        // line 261
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 262
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_ff65785779c4003b2a2e81596a00f4fc3cf986e0dddb2e22aea5dbef2e4659ce->leave($__internal_ff65785779c4003b2a2e81596a00f4fc3cf986e0dddb2e22aea5dbef2e4659ce_prof);

    }

    // line 265
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_1f2c3e274bdf0da55bec87c736d1516cf451ba6909f1025e190137af876ffb98 = $this->env->getExtension("native_profiler");
        $__internal_1f2c3e274bdf0da55bec87c736d1516cf451ba6909f1025e190137af876ffb98->enter($__internal_1f2c3e274bdf0da55bec87c736d1516cf451ba6909f1025e190137af876ffb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 266
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 267
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 268
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
        } else {
            // line 270
            $context["form_method"] = "POST";
        }
        // line 272
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 273
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 274
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_1f2c3e274bdf0da55bec87c736d1516cf451ba6909f1025e190137af876ffb98->leave($__internal_1f2c3e274bdf0da55bec87c736d1516cf451ba6909f1025e190137af876ffb98_prof);

    }

    // line 278
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_ea37214a4105e6a76fc2391c84fe70c5a509536077a29732ae6caf85f38a5dbc = $this->env->getExtension("native_profiler");
        $__internal_ea37214a4105e6a76fc2391c84fe70c5a509536077a29732ae6caf85f38a5dbc->enter($__internal_ea37214a4105e6a76fc2391c84fe70c5a509536077a29732ae6caf85f38a5dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 279
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) ? $context["render_rest"] : $this->getContext($context, "render_rest")))) {
            // line 280
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        }
        // line 282
        echo "</form>";
        
        $__internal_ea37214a4105e6a76fc2391c84fe70c5a509536077a29732ae6caf85f38a5dbc->leave($__internal_ea37214a4105e6a76fc2391c84fe70c5a509536077a29732ae6caf85f38a5dbc_prof);

    }

    // line 285
    public function block_form_enctype($context, array $blocks = array())
    {
        $__internal_0a5396923a3ff4c2b337be7880c098a6dcffca16a7e6b06d8c31be36df28fd90 = $this->env->getExtension("native_profiler");
        $__internal_0a5396923a3ff4c2b337be7880c098a6dcffca16a7e6b06d8c31be36df28fd90->enter($__internal_0a5396923a3ff4c2b337be7880c098a6dcffca16a7e6b06d8c31be36df28fd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_enctype"));

        // line 286
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo "enctype=\"multipart/form-data\"";
        }
        
        $__internal_0a5396923a3ff4c2b337be7880c098a6dcffca16a7e6b06d8c31be36df28fd90->leave($__internal_0a5396923a3ff4c2b337be7880c098a6dcffca16a7e6b06d8c31be36df28fd90_prof);

    }

    // line 289
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_0ab27ea2f412b53bf25f2f5485ac5659919bf43461ec5917e69c426645c8af85 = $this->env->getExtension("native_profiler");
        $__internal_0ab27ea2f412b53bf25f2f5485ac5659919bf43461ec5917e69c426645c8af85->enter($__internal_0ab27ea2f412b53bf25f2f5485ac5659919bf43461ec5917e69c426645c8af85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 290
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 291
            echo "<ul>";
            // line 292
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 293
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 295
            echo "</ul>";
        }
        
        $__internal_0ab27ea2f412b53bf25f2f5485ac5659919bf43461ec5917e69c426645c8af85->leave($__internal_0ab27ea2f412b53bf25f2f5485ac5659919bf43461ec5917e69c426645c8af85_prof);

    }

    // line 299
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_334acd660fe273182f23cb547e7bbcb7e2ede4d663951c28d6ed02162287bfa7 = $this->env->getExtension("native_profiler");
        $__internal_334acd660fe273182f23cb547e7bbcb7e2ede4d663951c28d6ed02162287bfa7->enter($__internal_334acd660fe273182f23cb547e7bbcb7e2ede4d663951c28d6ed02162287bfa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 300
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 301
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 302
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_334acd660fe273182f23cb547e7bbcb7e2ede4d663951c28d6ed02162287bfa7->leave($__internal_334acd660fe273182f23cb547e7bbcb7e2ede4d663951c28d6ed02162287bfa7_prof);

    }

    // line 309
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_a0c0b770e9d393d347c69782e9499d68ba5b84bcf44db1c6edbfffb60d9bb010 = $this->env->getExtension("native_profiler");
        $__internal_a0c0b770e9d393d347c69782e9499d68ba5b84bcf44db1c6edbfffb60d9bb010->enter($__internal_a0c0b770e9d393d347c69782e9499d68ba5b84bcf44db1c6edbfffb60d9bb010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 310
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 311
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a0c0b770e9d393d347c69782e9499d68ba5b84bcf44db1c6edbfffb60d9bb010->leave($__internal_a0c0b770e9d393d347c69782e9499d68ba5b84bcf44db1c6edbfffb60d9bb010_prof);

    }

    // line 315
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_07881b142ee22881f5d9348553e302b257d4b68d4087ca560440dc10ee13a435 = $this->env->getExtension("native_profiler");
        $__internal_07881b142ee22881f5d9348553e302b257d4b68d4087ca560440dc10ee13a435->enter($__internal_07881b142ee22881f5d9348553e302b257d4b68d4087ca560440dc10ee13a435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 316
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 317
        if (((isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only")) &&  !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "readonly", array(), "any", true, true))) {
            echo " readonly=\"readonly\"";
        }
        // line 318
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 319
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 320
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 321
            echo " ";
            // line 322
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 323
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 324
$context["attrvalue"] === true)) {
                // line 325
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 326
$context["attrvalue"] === false)) {
                // line 327
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_07881b142ee22881f5d9348553e302b257d4b68d4087ca560440dc10ee13a435->leave($__internal_07881b142ee22881f5d9348553e302b257d4b68d4087ca560440dc10ee13a435_prof);

    }

    // line 332
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_0c5e87da265441d6e7ebe35e87537fa53e21c0b3e02e21b701135888bc7a0079 = $this->env->getExtension("native_profiler");
        $__internal_0c5e87da265441d6e7ebe35e87537fa53e21c0b3e02e21b701135888bc7a0079->enter($__internal_0c5e87da265441d6e7ebe35e87537fa53e21c0b3e02e21b701135888bc7a0079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 333
        if ( !twig_test_empty((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 334
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 335
            echo " ";
            // line 336
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 337
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 338
$context["attrvalue"] === true)) {
                // line 339
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 340
$context["attrvalue"] === false)) {
                // line 341
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_0c5e87da265441d6e7ebe35e87537fa53e21c0b3e02e21b701135888bc7a0079->leave($__internal_0c5e87da265441d6e7ebe35e87537fa53e21c0b3e02e21b701135888bc7a0079_prof);

    }

    // line 346
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_b395d619e368fc76b5efda26bbdfa9156886cf91d8fe7a90e5be34233b0ca9f2 = $this->env->getExtension("native_profiler");
        $__internal_b395d619e368fc76b5efda26bbdfa9156886cf91d8fe7a90e5be34233b0ca9f2->enter($__internal_b395d619e368fc76b5efda26bbdfa9156886cf91d8fe7a90e5be34233b0ca9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 347
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 348
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 349
            echo " ";
            // line 350
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 351
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 352
$context["attrvalue"] === true)) {
                // line 353
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 354
$context["attrvalue"] === false)) {
                // line 355
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b395d619e368fc76b5efda26bbdfa9156886cf91d8fe7a90e5be34233b0ca9f2->leave($__internal_b395d619e368fc76b5efda26bbdfa9156886cf91d8fe7a90e5be34233b0ca9f2_prof);

    }

    // line 360
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_6b555f1e550da5d53d4da5026af1ec48a44cf9b00a31a79a881179d093b907a9 = $this->env->getExtension("native_profiler");
        $__internal_6b555f1e550da5d53d4da5026af1ec48a44cf9b00a31a79a881179d093b907a9->enter($__internal_6b555f1e550da5d53d4da5026af1ec48a44cf9b00a31a79a881179d093b907a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 361
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 362
            echo " ";
            // line 363
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 364
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 365
$context["attrvalue"] === true)) {
                // line 366
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 367
$context["attrvalue"] === false)) {
                // line 368
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6b555f1e550da5d53d4da5026af1ec48a44cf9b00a31a79a881179d093b907a9->leave($__internal_6b555f1e550da5d53d4da5026af1ec48a44cf9b00a31a79a881179d093b907a9_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1267 => 368,  1265 => 367,  1260 => 366,  1258 => 365,  1253 => 364,  1251 => 363,  1249 => 362,  1245 => 361,  1239 => 360,  1224 => 355,  1222 => 354,  1217 => 353,  1215 => 352,  1210 => 351,  1208 => 350,  1206 => 349,  1202 => 348,  1193 => 347,  1187 => 346,  1172 => 341,  1170 => 340,  1165 => 339,  1163 => 338,  1158 => 337,  1156 => 336,  1154 => 335,  1150 => 334,  1144 => 333,  1138 => 332,  1123 => 327,  1121 => 326,  1116 => 325,  1114 => 324,  1109 => 323,  1107 => 322,  1105 => 321,  1101 => 320,  1097 => 319,  1093 => 318,  1089 => 317,  1083 => 316,  1077 => 315,  1066 => 311,  1062 => 310,  1056 => 309,  1044 => 302,  1042 => 301,  1038 => 300,  1032 => 299,  1024 => 295,  1016 => 293,  1012 => 292,  1010 => 291,  1008 => 290,  1002 => 289,  993 => 286,  987 => 285,  980 => 282,  977 => 280,  975 => 279,  969 => 278,  959 => 274,  957 => 273,  933 => 272,  930 => 270,  927 => 268,  925 => 267,  923 => 266,  917 => 265,  910 => 262,  908 => 261,  906 => 260,  900 => 259,  893 => 254,  887 => 253,  880 => 250,  878 => 249,  876 => 248,  870 => 247,  863 => 244,  861 => 243,  859 => 242,  857 => 241,  855 => 240,  849 => 239,  842 => 236,  836 => 231,  825 => 227,  802 => 223,  798 => 220,  795 => 217,  794 => 216,  793 => 215,  791 => 214,  789 => 213,  786 => 211,  784 => 210,  781 => 208,  779 => 207,  777 => 206,  771 => 205,  764 => 200,  762 => 199,  756 => 198,  749 => 195,  747 => 194,  741 => 193,  728 => 190,  724 => 187,  721 => 184,  720 => 183,  719 => 182,  717 => 181,  715 => 180,  709 => 179,  702 => 176,  700 => 175,  694 => 174,  687 => 171,  685 => 170,  679 => 169,  672 => 166,  670 => 165,  664 => 164,  656 => 161,  654 => 160,  648 => 159,  641 => 156,  639 => 155,  633 => 154,  626 => 151,  624 => 150,  618 => 149,  611 => 146,  605 => 145,  598 => 142,  596 => 141,  590 => 140,  583 => 137,  581 => 136,  575 => 134,  567 => 130,  557 => 129,  552 => 128,  550 => 127,  547 => 125,  545 => 124,  539 => 123,  531 => 119,  529 => 117,  528 => 116,  527 => 115,  526 => 114,  522 => 113,  519 => 111,  517 => 110,  511 => 109,  503 => 105,  501 => 104,  499 => 103,  497 => 102,  495 => 101,  491 => 100,  488 => 98,  486 => 97,  480 => 96,  463 => 93,  457 => 92,  440 => 89,  434 => 88,  405 => 83,  403 => 82,  400 => 80,  398 => 79,  396 => 78,  391 => 77,  389 => 76,  372 => 75,  366 => 74,  359 => 71,  357 => 70,  355 => 69,  349 => 66,  347 => 65,  345 => 64,  343 => 63,  341 => 62,  332 => 60,  330 => 59,  323 => 58,  320 => 56,  318 => 55,  312 => 54,  305 => 51,  299 => 49,  297 => 48,  293 => 47,  289 => 46,  283 => 45,  275 => 41,  272 => 39,  270 => 38,  264 => 37,  253 => 34,  247 => 33,  240 => 30,  237 => 28,  235 => 27,  229 => 26,  222 => 23,  220 => 22,  218 => 21,  215 => 19,  213 => 18,  209 => 17,  203 => 16,  186 => 13,  184 => 12,  178 => 11,  170 => 7,  167 => 5,  165 => 4,  159 => 3,  152 => 360,  150 => 346,  148 => 332,  146 => 315,  144 => 309,  141 => 306,  139 => 299,  137 => 289,  135 => 285,  133 => 278,  131 => 265,  129 => 259,  127 => 253,  125 => 247,  123 => 239,  121 => 231,  119 => 227,  117 => 205,  115 => 198,  113 => 193,  111 => 179,  109 => 174,  107 => 169,  105 => 164,  103 => 159,  101 => 154,  99 => 149,  97 => 145,  95 => 140,  93 => 134,  91 => 123,  89 => 109,  87 => 96,  85 => 92,  83 => 88,  81 => 74,  79 => 54,  77 => 45,  75 => 37,  73 => 33,  71 => 26,  69 => 16,  67 => 11,  65 => 3,);
    }
}
/* {# Widgets #}*/
/* */
/* {%- block form_widget -%}*/
/*     {% if compound %}*/
/*         {{- block('form_widget_compound') -}}*/
/*     {% else %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% endif %}*/
/* {%- endblock form_widget -%}*/
/* */
/* {%- block form_widget_simple -%}*/
/*     {%- set type = type|default('text') -%}*/
/*     <input type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/* {%- endblock form_widget_simple -%}*/
/* */
/* {%- block form_widget_compound -%}*/
/*     <div {{ block('widget_container_attributes') }}>*/
/*         {%- if form.parent is empty -%}*/
/*             {{ form_errors(form) }}*/
/*         {%- endif -%}*/
/*         {{- block('form_rows') -}}*/
/*         {{- form_rest(form) -}}*/
/*     </div>*/
/* {%- endblock form_widget_compound -%}*/
/* */
/* {%- block collection_widget -%}*/
/*     {% if prototype is defined %}*/
/*         {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}*/
/*     {% endif %}*/
/*     {{- block('form_widget') -}}*/
/* {%- endblock collection_widget -%}*/
/* */
/* {%- block textarea_widget -%}*/
/*     <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>*/
/* {%- endblock textarea_widget -%}*/
/* */
/* {%- block choice_widget -%}*/
/*     {% if expanded %}*/
/*         {{- block('choice_widget_expanded') -}}*/
/*     {% else %}*/
/*         {{- block('choice_widget_collapsed') -}}*/
/*     {% endif %}*/
/* {%- endblock choice_widget -%}*/
/* */
/* {%- block choice_widget_expanded -%}*/
/*     <div {{ block('widget_container_attributes') }}>*/
/*     {%- for child in form %}*/
/*         {{- form_widget(child) -}}*/
/*         {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}*/
/*     {% endfor -%}*/
/*     </div>*/
/* {%- endblock choice_widget_expanded -%}*/
/* */
/* {%- block choice_widget_collapsed -%}*/
/*     {%- if required and placeholder is none and not placeholder_in_choices and not multiple -%}*/
/*         {% set required = false %}*/
/*     {%- endif -%}*/
/*     <select {{ block('widget_attributes') }}{% if multiple %} multiple="multiple"{% endif %}>*/
/*         {%- if placeholder is not none -%}*/
/*             <option value=""{% if required and value is empty %} selected="selected"{% endif %}>{{ placeholder != '' ? placeholder|trans({}, translation_domain) }}</option>*/
/*         {%- endif -%}*/
/*         {%- if preferred_choices|length > 0 -%}*/
/*             {% set options = preferred_choices %}*/
/*             {{- block('choice_widget_options') -}}*/
/*             {%- if choices|length > 0 and separator is not none -%}*/
/*                 <option disabled="disabled">{{ separator }}</option>*/
/*             {%- endif -%}*/
/*         {%- endif -%}*/
/*         {%- set options = choices -%}*/
/*         {{- block('choice_widget_options') -}}*/
/*     </select>*/
/* {%- endblock choice_widget_collapsed -%}*/
/* */
/* {%- block choice_widget_options -%}*/
/*     {% for group_label, choice in options %}*/
/*         {%- if choice is iterable -%}*/
/*             <optgroup label="{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}">*/
/*                 {% set options = choice %}*/
/*                 {{- block('choice_widget_options') -}}*/
/*             </optgroup>*/
/*         {%- else -%}*/
/*             {% set attr = choice.attr %}*/
/*             <option value="{{ choice.value }}" {{ block('attributes') }}{% if choice is selectedchoice(value) %} selected="selected"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>*/
/*         {%- endif -%}*/
/*     {% endfor %}*/
/* {%- endblock choice_widget_options -%}*/
/* */
/* {%- block checkbox_widget -%}*/
/*     <input type="checkbox" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} />*/
/* {%- endblock checkbox_widget -%}*/
/* */
/* {%- block radio_widget -%}*/
/*     <input type="radio" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} />*/
/* {%- endblock radio_widget -%}*/
/* */
/* {%- block datetime_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {%- else -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- form_errors(form.date) -}}*/
/*             {{- form_errors(form.time) -}}*/
/*             {{- form_widget(form.date) -}}*/
/*             {{- form_widget(form.time) -}}*/
/*         </div>*/
/*     {%- endif -%}*/
/* {%- endblock datetime_widget -%}*/
/* */
/* {%- block date_widget -%}*/
/*     {%- if widget == 'single_text' -%}*/
/*         {{ block('form_widget_simple') }}*/
/*     {%- else -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- date_pattern|replace({*/
/*                 '{{ year }}':  form_widget(form.year),*/
/*                 '{{ month }}': form_widget(form.month),*/
/*                 '{{ day }}':   form_widget(form.day),*/
/*             })|raw -}}*/
/*         </div>*/
/*     {%- endif -%}*/
/* {%- endblock date_widget -%}*/
/* */
/* {%- block time_widget -%}*/
/*     {%- if widget == 'single_text' -%}*/
/*         {{ block('form_widget_simple') }}*/
/*     {%- else -%}*/
/*         {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}*/
/*         </div>*/
/*     {%- endif -%}*/
/* {%- endblock time_widget -%}*/
/* */
/* {%- block number_widget -%}*/
/*     {# type="number" doesn't work with floats #}*/
/*     {%- set type = type|default('text') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock number_widget -%}*/
/* */
/* {%- block integer_widget -%}*/
/*     {%- set type = type|default('number') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock integer_widget -%}*/
/* */
/* {%- block money_widget -%}*/
/*     {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}*/
/* {%- endblock money_widget -%}*/
/* */
/* {%- block url_widget -%}*/
/*     {%- set type = type|default('url') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock url_widget -%}*/
/* */
/* {%- block search_widget -%}*/
/*     {%- set type = type|default('search') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock search_widget -%}*/
/* */
/* {%- block percent_widget -%}*/
/*     {%- set type = type|default('text') -%}*/
/*     {{ block('form_widget_simple') }} %*/
/* {%- endblock percent_widget -%}*/
/* */
/* {%- block password_widget -%}*/
/*     {%- set type = type|default('password') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock password_widget -%}*/
/* */
/* {%- block hidden_widget -%}*/
/*     {%- set type = type|default('hidden') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock hidden_widget -%}*/
/* */
/* {%- block email_widget -%}*/
/*     {%- set type = type|default('email') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock email_widget -%}*/
/* */
/* {%- block button_widget -%}*/
/*     {%- if label is empty -%}*/
/*         {%- if label_format is not empty -%}*/
/*             {% set label = label_format|replace({*/
/*                 '%name%': name,*/
/*                 '%id%': id,*/
/*             }) %}*/
/*         {%- else -%}*/
/*             {% set label = name|humanize %}*/
/*         {%- endif -%}*/
/*     {%- endif -%}*/
/*     <button type="{{ type|default('button') }}" {{ block('button_attributes') }}>{{ label|trans({}, translation_domain) }}</button>*/
/* {%- endblock button_widget -%}*/
/* */
/* {%- block submit_widget -%}*/
/*     {%- set type = type|default('submit') -%}*/
/*     {{ block('button_widget') }}*/
/* {%- endblock submit_widget -%}*/
/* */
/* {%- block reset_widget -%}*/
/*     {%- set type = type|default('reset') -%}*/
/*     {{ block('button_widget') }}*/
/* {%- endblock reset_widget -%}*/
/* */
/* {# Labels #}*/
/* */
/* {%- block form_label -%}*/
/*     {% if label is not same as(false) -%}*/
/*         {% if not compound -%}*/
/*             {% set label_attr = label_attr|merge({'for': id}) %}*/
/*         {%- endif -%}*/
/*         {% if required -%}*/
/*             {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {%- endif -%}*/
/*         {% if label is empty -%}*/
/*             {%- if label_format is not empty -%}*/
/*                 {% set label = label_format|replace({*/
/*                     '%name%': name,*/
/*                     '%id%': id,*/
/*                 }) %}*/
/*             {%- else -%}*/
/*                 {% set label = name|humanize %}*/
/*             {%- endif -%}*/
/*         {%- endif -%}*/
/*         <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>*/
/*     {%- endif -%}*/
/* {%- endblock form_label -%}*/
/* */
/* {%- block button_label -%}{%- endblock -%}*/
/* */
/* {# Rows #}*/
/* */
/* {%- block repeated_row -%}*/
/*     {#*/
/*     No need to render the errors here, as all errors are mapped*/
/*     to the first child (see RepeatedTypeValidatorExtension).*/
/*     #}*/
/*     {{- block('form_rows') -}}*/
/* {%- endblock repeated_row -%}*/
/* */
/* {%- block form_row -%}*/
/*     <div>*/
/*         {{- form_label(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*         {{- form_widget(form) -}}*/
/*     </div>*/
/* {%- endblock form_row -%}*/
/* */
/* {%- block button_row -%}*/
/*     <div>*/
/*         {{- form_widget(form) -}}*/
/*     </div>*/
/* {%- endblock button_row -%}*/
/* */
/* {%- block hidden_row -%}*/
/*     {{ form_widget(form) }}*/
/* {%- endblock hidden_row -%}*/
/* */
/* {# Misc #}*/
/* */
/* {%- block form -%}*/
/*     {{ form_start(form) }}*/
/*         {{- form_widget(form) -}}*/
/*     {{ form_end(form) }}*/
/* {%- endblock form -%}*/
/* */
/* {%- block form_start -%}*/
/*     {% set method = method|upper %}*/
/*     {%- if method in ["GET", "POST"] -%}*/
/*         {% set form_method = method %}*/
/*     {%- else -%}*/
/*         {% set form_method = "POST" %}*/
/*     {%- endif -%}*/
/*     <form name="{{ name }}" method="{{ form_method|lower }}" action="{{ action }}"{% for attrname, attrvalue in attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}{% if multipart %} enctype="multipart/form-data"{% endif %}>*/
/*     {%- if form_method != method -%}*/
/*         <input type="hidden" name="_method" value="{{ method }}" />*/
/*     {%- endif -%}*/
/* {%- endblock form_start -%}*/
/* */
/* {%- block form_end -%}*/
/*     {%- if not render_rest is defined or render_rest -%}*/
/*         {{ form_rest(form) }}*/
/*     {%- endif -%}*/
/*     </form>*/
/* {%- endblock form_end -%}*/
/* */
/* {%- block form_enctype -%}*/
/*     {% if multipart %}enctype="multipart/form-data"{% endif %}*/
/* {%- endblock form_enctype -%}*/
/* */
/* {%- block form_errors -%}*/
/*     {%- if errors|length > 0 -%}*/
/*     <ul>*/
/*         {%- for error in errors -%}*/
/*             <li>{{ error.message }}</li>*/
/*         {%- endfor -%}*/
/*     </ul>*/
/*     {%- endif -%}*/
/* {%- endblock form_errors -%}*/
/* */
/* {%- block form_rest -%}*/
/*     {% for child in form -%}*/
/*         {% if not child.rendered %}*/
/*             {{- form_row(child) -}}*/
/*         {% endif %}*/
/*     {%- endfor %}*/
/* {% endblock form_rest %}*/
/* */
/* {# Support #}*/
/* */
/* {%- block form_rows -%}*/
/*     {% for child in form %}*/
/*         {{- form_row(child) -}}*/
/*     {% endfor %}*/
/* {%- endblock form_rows -%}*/
/* */
/* {%- block widget_attributes -%}*/
/*     id="{{ id }}" name="{{ full_name }}"*/
/*     {%- if read_only and attr.readonly is not defined %} readonly="readonly"{% endif -%}*/
/*     {%- if disabled %} disabled="disabled"{% endif -%}*/
/*     {%- if required %} required="required"{% endif -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock widget_attributes -%}*/
/* */
/* {%- block widget_container_attributes -%}*/
/*     {%- if id is not empty %}id="{{ id }}"{% endif -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock widget_container_attributes -%}*/
/* */
/* {%- block button_attributes -%}*/
/*     id="{{ id }}" name="{{ full_name }}"{% if disabled %} disabled="disabled"{% endif -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock button_attributes -%}*/
/* */
/* {% block attributes -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock attributes -%}*/
/* */
