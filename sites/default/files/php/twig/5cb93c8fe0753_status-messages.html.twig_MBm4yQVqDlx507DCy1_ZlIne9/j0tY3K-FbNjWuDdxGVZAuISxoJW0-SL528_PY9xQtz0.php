<?php

/* themes/zurb_foundation/templates/status-messages.html.twig */
class __TwigTemplate_3924283d4cc67d2ae1334814c180dc3be368e53b81498644153314e8bd2332bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'messages' => array($this, 'block_messages'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 26, "if" => 28, "for" => 32, "set" => 34);
        $filters = array("without" => 40, "length" => 45, "first" => 52);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'if', 'for', 'set'),
                array('without', 'length', 'first'),
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

        // line 26
        $this->displayBlock('messages', $context, $blocks);
    }

    public function block_messages($context, array $blocks = array())
    {
        // line 27
        echo "
";
        // line 28
        if (($context["zurb_foundation_status_in_reveal"] ?? null)) {
            // line 29
            echo "<div id=\"status-messages\" data-reveal class=\"reveal\" role=\"dialog\" data-animation-in=\"fade-in\" data-animation-out=\"fade-out\">
";
        }
        // line 31
        echo "
";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 33
            echo "  ";
            // line 34
            $context["classes"] = array(0 => "zurb-foundation-callout", 1 => "callout", 2 => (($this->getAttribute(            // line 37
($context["zurb_status_class_mapping"] ?? null), $context["type"], array(), "array")) ? ($this->getAttribute(($context["zurb_status_class_mapping"] ?? null), $context["type"], array(), "array")) : ("")));
            // line 40
            echo "  <div role=\"contentinfo\" aria-label=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["status_headings"] ?? null), $context["type"], array(), "array"), "html", null, true));
            echo "\" data-closable=\"fade-out\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "role", "aria-label", "data-closable"), "html", null, true));
            echo ">
    ";
            // line 41
            if ($this->getAttribute(($context["status_headings"] ?? null), $context["type"], array(), "array")) {
                // line 42
                echo "      <h2 class=\"visually-hidden\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["status_headings"] ?? null), $context["type"], array(), "array"), "html", null, true));
                echo "</h2>
    ";
            }
            // line 44
            echo "
    ";
            // line 45
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 46
                echo "      <ul class=\"messages__list\">
        ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 48
                    echo "          <li class=\"messages__item\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["message"], "html", null, true));
                    echo "</li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "      </ul>
    ";
            } else {
                // line 52
                echo "      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_first($this->env, $context["messages"]), "html", null, true));
                echo "
    ";
            }
            // line 54
            echo "
    ";
            // line 55
            if ( !($context["zurb_foundation_status_in_reveal"] ?? null)) {
                // line 56
                echo "      <button class=\"close-button\" aria-label=\"Dismiss alert\" type=\"button\" data-close>
        <span aria-hidden=\"true\">&times;</span>
      </button>
    ";
            }
            // line 60
            echo "  </div>

  ";
            // line 63
            echo "  ";
            $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "removeClass", array(0 => ($context["classes"] ?? null)), "method");
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
";
        // line 66
        if (($context["zurb_foundation_status_in_reveal"] ?? null)) {
            // line 67
            echo "  <button class=\"close-button\" aria-label=\"Dismiss alert\" type=\"button\" data-close>
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>
";
        }
        // line 72
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/zurb_foundation/templates/status-messages.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  151 => 72,  144 => 67,  142 => 66,  139 => 65,  132 => 63,  128 => 60,  122 => 56,  120 => 55,  117 => 54,  111 => 52,  107 => 50,  98 => 48,  94 => 47,  91 => 46,  89 => 45,  86 => 44,  80 => 42,  78 => 41,  71 => 40,  69 => 37,  68 => 34,  66 => 33,  62 => 32,  59 => 31,  55 => 29,  53 => 28,  50 => 27,  44 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/zurb_foundation/templates/status-messages.html.twig", "/var/www/drupal86/themes/zurb_foundation/templates/status-messages.html.twig");
    }
}
