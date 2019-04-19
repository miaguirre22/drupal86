<?php

/* themes/zurb_foundation/templates/page.html.twig */
class __TwigTemplate_d213655768cbc56707e529e6e421afc5077acaa1fead3159c014955eb0c242fb extends Twig_Template
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
        $tags = array("if" => 69, "spaceless" => 157);
        $filters = array("t" => 81, "date" => 200);
        $functions = array("path" => 108);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'spaceless'),
                array('t', 'date'),
                array('path')
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

        // line 57
        echo "
<div class=\"off-canvas-wrapper\">
  <div class=\"inner-wrap off-canvas-wrapper-inner\" id=\"inner-wrap\" data-off-canvas-wrapper>
    <aside id=\"left-off-canvas-menu\" class=\"off-canvas left-off-canvas-menu position-left\" role=\"complementary\" data-off-canvas>
      ";
        // line 61
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "left_off_canvas", array()), "html", null, true));
        echo "
    </aside>

    <aside id=\"right-off-canvas-menu\" class=\"off-canvas right-off-canvas-menu position-right\" role=\"complementary\" data-off-canvas>
      ";
        // line 65
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "right_off_canvas", array()), "html", null, true));
        echo "
    </aside>

    <div class=\"off-canvas-content\" data-off-canvas-content>
      ";
        // line 69
        if ($this->getAttribute(($context["page"] ?? null), "meta_header", array())) {
            // line 70
            echo "        ";
            if (($context["meta_header_grid"] ?? null)) {
                // line 71
                echo "          <div class=\"row\">
            <div class=\"large-12 columns\">
        ";
            }
            // line 74
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "meta_header", array()), "html", null, true));
            echo "
        ";
            // line 75
            if (($context["meta_header_grid"] ?? null)) {
                // line 76
                echo "            </div>
          </div>
        ";
            }
            // line 79
            echo "      ";
        }
        // line 80
        echo "
      <header class=\"row\" role=\"banner\" aria-label=\"";
        // line 81
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header")));
        echo "\">
        ";
        // line 82
        if ((($context["linked_site_name"] ?? null) || ($context["linked_logo"] ?? null))) {
            // line 83
            echo "          <div class=\"large-2 columns\">
            ";
            // line 84
            if (($context["linked_logo"] ?? null)) {
                // line 85
                echo "              ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["linked_logo"] ?? null), "html", null, true));
                echo "
            ";
            }
            // line 87
            echo "          </div>
          <div class=\"left large-4 columns\">
            ";
            // line 89
            if (($context["is_front"] ?? null)) {
                // line 90
                echo "              <h1 id=\"site-name\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["linked_site_name"] ?? null), "html", null, true));
                echo "</h1>
            ";
            } else {
                // line 92
                echo "              <div id=\"site-name\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["linked_site_name"] ?? null), "html", null, true));
                echo "</div>
            ";
            }
            // line 94
            echo "          </div>
        ";
        }
        // line 96
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 97
            echo "          <div class=\"large-12 columns\">
            ";
            // line 98
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 101
        echo "      </header>

      <div class=\"row\">
        ";
        // line 104
        if (($context["show_account_info"] ?? null)) {
            // line 105
            echo "          <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["site_slogan"] ?? null)) ? ("large-6") : ("large-4 columns large-offset-8"))));
            echo " columns hide-for-small\">
            <p>
              ";
            // line 107
            if (($context["logged_in"] ?? null)) {
                // line 108
                echo "                <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.page")));
                echo "\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("My Account")));
                echo "</a>
                <a href=\"";
                // line 109
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.logout")));
                echo "\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Logout")));
                echo "</a>
              ";
            } else {
                // line 111
                echo "                <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.login")));
                echo "\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Login")));
                echo "</a>
                <a href=\"";
                // line 112
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.register")));
                echo "\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Sign Up")));
                echo "</a>
              ";
            }
            // line 114
            echo "            </p>
          </div>
        ";
        }
        // line 117
        echo "        ";
        if (($context["site_slogan"] ?? null)) {
            // line 118
            echo "          <div class=\"large-6 columns hide-for-small\">
            ";
            // line 119
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 122
        echo "        ";
        if (($context["show_account_info"] ?? null)) {
            // line 123
            echo "          <div class=\"show-for-small\">
            <div class=\"six mobile-two columns\">
              <p>
                <a href=\"";
            // line 126
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.login")));
            echo "\" class=\"radius button\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Login")));
            echo "</a>
              </p>
            </div>
            <div class=\"six mobile-two columns\">
              <p>
                <a href=\"";
            // line 131
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.register")));
            echo "\" class=\"radius success button\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Sign Up")));
            echo "</a>
              </p>
            </div>
          </div>
        ";
        }
        // line 136
        echo "      </div>

      ";
        // line 138
        if ((($context["messages"] ?? null) &&  !($context["zurb_foundation_messages_modal"] ?? null))) {
            // line 139
            echo "      <div class=\"l-messages row\">
        <div class=\"large-12 columns\">
          ";
            // line 141
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["messages"] ?? null), "html", null, true));
            echo "
        </div>
      </div>
      ";
        }
        // line 145
        echo "
      ";
        // line 146
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 147
            echo "      <div class=\"l-help row\">
        <div class=\"large-12 columns\">
          ";
            // line 149
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
            echo "
        </div>
      </div>
      ";
        }
        // line 153
        echo "
      <div class=\"row\">
        <main id=\"main\" class=\"";
        // line 155
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["main_grid"] ?? null), "html", null, true));
        echo " columns\" role=\"main\">
          ";
        // line 156
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 157
            echo "            ";
            ob_start();
            // line 158
            echo "              ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 160
            echo "          ";
        }
        // line 161
        echo "          <a id=\"main-content\"></a>
          ";
        // line 162
        if (($context["breadcrumb"] ?? null)) {
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["breadcrumb"] ?? null), "html", null, true));
            echo " ";
        }
        // line 163
        echo "          <section>
            ";
        // line 164
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
          </section>
        </main>
        ";
        // line 167
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 168
            echo "          <div id=\"sidebar-first\" class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_first_grid"] ?? null), "html", null, true));
            echo " columns sidebar \">
            ";
            // line 169
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 172
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 173
            echo "          <div id=\"sidebar-second\" class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_sec_grid"] ?? null), "html", null, true));
            echo " columns sidebar\">
            ";
            // line 174
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 177
        echo "      </div>
      ";
        // line 178
        if ((($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_middle", array())) || $this->getAttribute(($context["page"] ?? null), "footer_last", array()))) {
            // line 179
            echo "        <footer class=\"row\">
          ";
            // line 180
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", array())) {
                // line 181
                echo "            <div id=\"footer-first\" class=\"large-4 columns\">
              ";
                // line 182
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 185
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_middle", array())) {
                // line 186
                echo "            <div id=\"footer-middle\" class=\"large-4 columns\">
              ";
                // line 187
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_middle", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 190
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_last", array())) {
                // line 191
                echo "            <div id=\"footer-last\" class=\"large-4 columns\">
              ";
                // line 192
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_last", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 195
            echo "        </footer>
      ";
        }
        // line 197
        echo "      <div class=\"bottom-bar callout secondary\">
        <div class=\"row\">
          <div class=\"large-12 columns\">
          &copy; ";
        // line 200
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("All rights reserved.")));
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/zurb_foundation/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 200,  377 => 197,  373 => 195,  367 => 192,  364 => 191,  361 => 190,  355 => 187,  352 => 186,  349 => 185,  343 => 182,  340 => 181,  338 => 180,  335 => 179,  333 => 178,  330 => 177,  324 => 174,  319 => 173,  316 => 172,  310 => 169,  305 => 168,  303 => 167,  297 => 164,  294 => 163,  288 => 162,  285 => 161,  282 => 160,  276 => 158,  273 => 157,  271 => 156,  267 => 155,  263 => 153,  256 => 149,  252 => 147,  250 => 146,  247 => 145,  240 => 141,  236 => 139,  234 => 138,  230 => 136,  220 => 131,  210 => 126,  205 => 123,  202 => 122,  196 => 119,  193 => 118,  190 => 117,  185 => 114,  178 => 112,  171 => 111,  164 => 109,  157 => 108,  155 => 107,  149 => 105,  147 => 104,  142 => 101,  136 => 98,  133 => 97,  130 => 96,  126 => 94,  120 => 92,  114 => 90,  112 => 89,  108 => 87,  102 => 85,  100 => 84,  97 => 83,  95 => 82,  91 => 81,  88 => 80,  85 => 79,  80 => 76,  78 => 75,  73 => 74,  68 => 71,  65 => 70,  63 => 69,  56 => 65,  49 => 61,  43 => 57,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/zurb_foundation/templates/page.html.twig", "/var/www/drupal86/themes/zurb_foundation/templates/page.html.twig");
    }
}
