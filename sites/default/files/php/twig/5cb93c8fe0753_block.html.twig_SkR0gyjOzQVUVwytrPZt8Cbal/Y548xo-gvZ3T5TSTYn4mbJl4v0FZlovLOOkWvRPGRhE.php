<?php

/* themes/zurb_foundation/templates/block.html.twig */
class __TwigTemplate_2c6e47fd6229972d6458fc7291c894beb24a41cb836456b6f073934ceb4f7e79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 45, "set" => 47, "block" => 66);
        $filters = array("clean_class" => 49, "length" => 62);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set', 'block'),
                array('clean_class', 'length'),
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

        // line 45
        if (($this->getAttribute(($context["block"] ?? null), "delta", array()) != "main")) {
            // line 47
            $context["classes"] = array(0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(            // line 49
($context["configuration"] ?? null), "provider", array()))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass(            // line 50
($context["plugin_id"] ?? null))));
            // line 53
            echo "<section";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">
  ";
        }
        // line 55
        echo "
  ";
        // line 56
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
  ";
        // line 57
        if (($context["label"] ?? null)) {
            // line 58
            echo "    <h2 ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_attributes"] ?? null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</h2>
  ";
        }
        // line 60
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

  ";
        // line 62
        if (twig_length_filter($this->env, ($context["content_attributes"] ?? null))) {
            // line 63
            echo "  <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_attributes"] ?? null), "html", null, true));
            echo ">
    ";
        }
        // line 65
        echo "
    ";
        // line 66
        $this->displayBlock('content', $context, $blocks);
        // line 69
        echo "
    ";
        // line 70
        if (twig_length_filter($this->env, ($context["content_attributes"] ?? null))) {
            // line 71
            echo "  </div>
  ";
        }
        // line 73
        echo "
  ";
        // line 74
        if (($this->getAttribute(($context["block"] ?? null), "delta", array()) != "main")) {
            // line 75
            echo "</section>
";
        }
    }

    // line 66
    public function block_content($context, array $blocks = array())
    {
        // line 67
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/zurb_foundation/templates/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 67,  112 => 66,  106 => 75,  104 => 74,  101 => 73,  97 => 71,  95 => 70,  92 => 69,  90 => 66,  87 => 65,  81 => 63,  79 => 62,  73 => 60,  65 => 58,  63 => 57,  59 => 56,  56 => 55,  50 => 53,  48 => 50,  47 => 49,  46 => 47,  44 => 45,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/zurb_foundation/templates/block.html.twig", "/var/www/drupal86/themes/zurb_foundation/templates/block.html.twig");
    }
}
