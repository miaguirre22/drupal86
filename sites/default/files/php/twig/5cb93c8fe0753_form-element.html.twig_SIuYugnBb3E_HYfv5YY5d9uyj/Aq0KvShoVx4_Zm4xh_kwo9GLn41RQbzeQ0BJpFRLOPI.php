<?php

/* themes/bootstrap_barrio/templates/form/form-element.html.twig */
class __TwigTemplate_ea00b1c6b5327e2a00ca8f8bf3d341073e524bd7f3877cea1626af7960526a4d extends Twig_Template
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
        $tags = array("if" => 48, "set" => 50);
        $filters = array("clean_class" => 79, "raw" => 108);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
                array('clean_class', 'raw'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 47
        echo "
";
        // line 48
        if ((($context["type"] ?? null) == "checkbox")) {
            // line 49
            echo "  ";
            if ((($context["customtype"] ?? null) == "custom")) {
                // line 50
                echo "    ";
                $context["wrapperclass"] = "custom-control custom-checkbox";
                // line 51
                echo "    ";
                $context["labelclass"] = "custom-control-label";
                // line 52
                echo "    ";
                $context["inputclass"] = "custom-control-input";
                // line 53
                echo "  ";
            } elseif ((($context["customtype"] ?? null) == "switch")) {
                // line 54
                echo "    ";
                $context["wrapperclass"] = "custom-control custom-switch";
                // line 55
                echo "    ";
                $context["labelclass"] = "custom-control-label";
                // line 56
                echo "    ";
                $context["inputclass"] = "custom-control-input";
                // line 57
                echo "  ";
            } else {
                // line 58
                echo "    ";
                $context["wrapperclass"] = "form-check";
                // line 59
                echo "    ";
                $context["labelclass"] = "form-check-label";
                // line 60
                echo "    ";
                $context["inputclass"] = "form-check-input";
                // line 61
                echo "  ";
            }
        }
        // line 63
        echo "
";
        // line 64
        if ((($context["type"] ?? null) == "radio")) {
            // line 65
            echo "  ";
            if ((($context["customtype"] ?? null) == "custom")) {
                // line 66
                echo "    ";
                $context["wrapperclass"] = "custom-control custom-radio";
                // line 67
                echo "    ";
                $context["labelclass"] = "custom-control-label";
                // line 68
                echo "    ";
                $context["inputclass"] = "custom-control-input";
                // line 69
                echo "  ";
            } else {
                // line 70
                echo "    ";
                $context["wrapperclass"] = "form-check";
                // line 71
                echo "    ";
                $context["labelclass"] = "form-check-label";
                // line 72
                echo "    ";
                $context["inputclass"] = "form-check-input";
                // line 73
                echo "  ";
            }
        }
        // line 75
        echo "
";
        // line 77
        $context["classes"] = array(0 => "js-form-item", 1 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 79
($context["type"] ?? null))), 2 => ((twig_in_filter(        // line 80
($context["type"] ?? null), array(0 => "checkbox", 1 => "radio"))) ? (\Drupal\Component\Utility\Html::getClass(($context["type"] ?? null))) : (("form-type-" . \Drupal\Component\Utility\Html::getClass(($context["type"] ?? null))))), 3 => ((twig_in_filter(        // line 81
($context["type"] ?? null), array(0 => "checkbox", 1 => "radio"))) ? (($context["wrapperclass"] ?? null)) : ("")), 4 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 82
($context["name"] ?? null))), 5 => ("form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 83
($context["name"] ?? null))), 6 => ((!twig_in_filter(        // line 84
($context["title_display"] ?? null), array(0 => "after", 1 => "before"))) ? ("form-no-label") : ("")), 7 => (((        // line 85
($context["disabled"] ?? null) == "disabled")) ? ("disabled") : ("")), 8 => ((        // line 86
($context["errors"] ?? null)) ? ("has-error") : ("")));
        // line 90
        $context["description_classes"] = array(0 => "description", 1 => "text-muted", 2 => (((        // line 93
($context["description_display"] ?? null) == "invisible")) ? ("sr-only") : ("")));
        // line 96
        if (twig_in_filter(($context["type"] ?? null), array(0 => "checkbox", 1 => "radio"))) {
            // line 97
            echo "  <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">
    ";
            // line 98
            if ( !twig_test_empty(($context["prefix"] ?? null))) {
                // line 99
                echo "      <span class=\"field-prefix\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true));
                echo "</span>
    ";
            }
            // line 101
            echo "    ";
            if (((($context["description_display"] ?? null) == "before") && $this->getAttribute(($context["description"] ?? null), "content", array()))) {
                // line 102
                echo "      <div";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "attributes", array()), "html", null, true));
                echo ">
        ";
                // line 103
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 106
            echo "    ";
            if ((($context["label_display"] ?? null) == "before")) {
                // line 107
                echo "      <label ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["labelclass"] ?? null)), "method"), "setAttribute", array(0 => "for", 1 => $this->getAttribute(($context["input_attributes"] ?? null), "id", array())), "method"), "html", null, true));
                echo ">
        ";
                // line 108
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["input_title"] ?? null)));
                echo "
      </label>
    ";
            }
            // line 111
            echo "    <input";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["input_attributes"] ?? null), "addClass", array(0 => ($context["inputclass"] ?? null)), "method"), "html", null, true));
            echo ">
    ";
            // line 112
            if ((($context["label_display"] ?? null) == "after")) {
                // line 113
                echo "      <label ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["labelclass"] ?? null)), "method"), "setAttribute", array(0 => "for", 1 => $this->getAttribute(($context["input_attributes"] ?? null), "id", array())), "method"), "html", null, true));
                echo ">
        ";
                // line 114
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["input_title"] ?? null)));
                echo "
      </label>
    ";
            }
            // line 117
            echo "    ";
            if ( !twig_test_empty(($context["suffix"] ?? null))) {
                // line 118
                echo "      <span class=\"field-suffix\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true));
                echo "</span>
    ";
            }
            // line 120
            echo "    ";
            if (($context["errors"] ?? null)) {
                // line 121
                echo "      <div class=\"invalid-feedback\">
        ";
                // line 122
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 125
            echo "    ";
            if ((twig_in_filter(($context["description_display"] ?? null), array(0 => "after", 1 => "invisible")) && $this->getAttribute(($context["description"] ?? null), "content", array()))) {
                // line 126
                echo "      <small";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", array()), "addClass", array(0 => ($context["description_classes"] ?? null)), "method"), "html", null, true));
                echo ">
        ";
                // line 127
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", array()), "html", null, true));
                echo "
      </small>
    ";
            }
            // line 130
            echo "  </div>
";
        } else {
            // line 132
            echo "  <fieldset";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null), 1 => "form-group col-auto"), "method"), "html", null, true));
            echo ">
    ";
            // line 133
            if (twig_in_filter(($context["label_display"] ?? null), array(0 => "before", 1 => "invisible"))) {
                // line 134
                echo "      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
                echo "
    ";
            }
            // line 136
            echo "    ";
            if ( !twig_test_empty(($context["prefix"] ?? null))) {
                // line 137
                echo "      <span class=\"field-prefix\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true));
                echo "</span>
    ";
            }
            // line 139
            echo "    ";
            if (((($context["description_display"] ?? null) == "before") && $this->getAttribute(($context["description"] ?? null), "content", array()))) {
                // line 140
                echo "      <div";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "attributes", array()), "html", null, true));
                echo ">
        ";
                // line 141
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 144
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
            echo "
    ";
            // line 145
            if ( !twig_test_empty(($context["suffix"] ?? null))) {
                // line 146
                echo "      <span class=\"field-suffix\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true));
                echo "</span>
    ";
            }
            // line 148
            echo "    ";
            if ((($context["label_display"] ?? null) == "after")) {
                // line 149
                echo "      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
                echo "
    ";
            }
            // line 151
            echo "    ";
            if (($context["errors"] ?? null)) {
                // line 152
                echo "      <div class=\"invalid-feedback\">
        ";
                // line 153
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 156
            echo "    ";
            if ((twig_in_filter(($context["description_display"] ?? null), array(0 => "after", 1 => "invisible")) && $this->getAttribute(($context["description"] ?? null), "content", array()))) {
                // line 157
                echo "      <small";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", array()), "addClass", array(0 => ($context["description_classes"] ?? null)), "method"), "html", null, true));
                echo ">
        ";
                // line 158
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", array()), "html", null, true));
                echo "
      </small>
    ";
            }
            // line 161
            echo "  </fieldset>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_barrio/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 161,  315 => 158,  310 => 157,  307 => 156,  301 => 153,  298 => 152,  295 => 151,  289 => 149,  286 => 148,  280 => 146,  278 => 145,  273 => 144,  267 => 141,  262 => 140,  259 => 139,  253 => 137,  250 => 136,  244 => 134,  242 => 133,  237 => 132,  233 => 130,  227 => 127,  222 => 126,  219 => 125,  213 => 122,  210 => 121,  207 => 120,  201 => 118,  198 => 117,  192 => 114,  187 => 113,  185 => 112,  180 => 111,  174 => 108,  169 => 107,  166 => 106,  160 => 103,  155 => 102,  152 => 101,  146 => 99,  144 => 98,  139 => 97,  137 => 96,  135 => 93,  134 => 90,  132 => 86,  131 => 85,  130 => 84,  129 => 83,  128 => 82,  127 => 81,  126 => 80,  125 => 79,  124 => 77,  121 => 75,  117 => 73,  114 => 72,  111 => 71,  108 => 70,  105 => 69,  102 => 68,  99 => 67,  96 => 66,  93 => 65,  91 => 64,  88 => 63,  84 => 61,  81 => 60,  78 => 59,  75 => 58,  72 => 57,  69 => 56,  66 => 55,  63 => 54,  60 => 53,  57 => 52,  54 => 51,  51 => 50,  48 => 49,  46 => 48,  43 => 47,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/bootstrap_barrio/templates/form/form-element.html.twig", "/var/www/drupal86/themes/bootstrap_barrio/templates/form/form-element.html.twig");
    }
}
