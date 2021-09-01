<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/helpet/templates/page.html.twig */
class __TwigTemplate_32b5658b25f2f6739acf8a0045ba03010ef4305aa7aca56c551ee3c7214f7722 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/helpet/templates/page.html.twig"));

        // line 1
        echo "<div class=\"layout-container\">
";
        // line 2
        $this->loadTemplate("@helpet/partials/header.html.twig", "themes/custom/helpet/templates/page.html.twig", 2)->display($context);
        // line 3
        $this->loadTemplate("@helpet/partials/primary_menu.html.twig", "themes/custom/helpet/templates/page.html.twig", 3)->display($context);
        // line 4
        echo "
";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 5)) {
            // line 6
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "
";
        }
        // line 8
        echo "
";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 9)) {
            // line 10
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "
";
        }
        // line 12
        echo "
";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_top", [], "any", false, false, true, 13)) {
            // line 14
            echo "<div class=\"layaud-banner-top\" role=\"contentinfo\">
    ";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_top", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "
</div>
";
        }
        // line 18
        echo "

<div class=\"container \">
   <div class=\"row text-center\">
    <div class=\"col-md-12\">
      ";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "
    </div>
   </div>
</div>
<div class=\"section mt-4\" id=\"footer\">
";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 28)) {
            // line 29
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "
";
        }
        // line 31
        echo "<div class=\"container text-center\" style=\"width: 65%\">
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "socialmedia", [], "any", false, false, true, 34)) {
            // line 35
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "socialmedia", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 37
        echo "    </div>
   </div>
</div>
</div>


";
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 43)) {
            // line 44
            echo "<nav class=\"navbar-banner navbar-expand-lg navbar-dark bg-dark mt-2\">
   ";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "
</nav>
";
        }
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo "
</div>

";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/helpet/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 48,  134 => 45,  131 => 44,  129 => 43,  121 => 37,  115 => 35,  113 => 34,  108 => 31,  102 => 29,  100 => 28,  92 => 23,  85 => 18,  79 => 15,  76 => 14,  74 => 13,  71 => 12,  65 => 10,  63 => 9,  60 => 8,  54 => 6,  52 => 5,  49 => 4,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/helpet/templates/page.html.twig", "/var/www/html/curso_drupal/web/themes/custom/helpet/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 2, "if" => 5);
        static $filters = array("escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
