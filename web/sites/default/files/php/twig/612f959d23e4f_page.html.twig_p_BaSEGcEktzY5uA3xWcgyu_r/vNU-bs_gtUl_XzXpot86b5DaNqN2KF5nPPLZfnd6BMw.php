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

/* themes/custom/den_theme/templates/page.html.twig */
class __TwigTemplate_c513a23cbdbbc70397d84c9884b483b0337bd4bb0ab9f2dab2c3b8d86d8d181b extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/den_theme/templates/page.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<!-- basic -->
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<!-- mobile metas -->
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta
\t\tname=\"viewport\" content=\"initial-scale=1, maximum-scale=1\">
\t\t<!-- site metas -->
\t\t<title>Den</title>
\t\t<meta name=\"keywords\" content=\"\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"author\" content=\"\">

\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css\" media=\"screen\">

\t</head>
\t<body>
\t\t<header>
\t\t\t<div
\t\t\t\tclass=\"layout_padding banner_section_start\">
\t\t\t\t<!-- header inner -->
\t\t\t\t<div class=\"header\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section\">
\t\t\t\t\t\t\t\t<div class=\"full\">
\t\t\t\t\t\t\t\t\t<div class=\"center-desk\">
\t\t\t\t\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#home\"><img src=\"";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 34, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 34, $this->source)), "html", null, true);
        echo "/images/logo.png\" style=\"max-width: 100%;\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xl-9 col-lg-9 col-md-9 col-sm-9\">
\t\t\t\t\t\t\t\t<div class=\"menu-area\">
\t\t\t\t\t\t\t\t\t<div class=\"limit-box\">
\t\t\t\t\t\t\t\t\t\t<nav class=\"main-menu\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-area-main\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#home\">Home</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#about\">About</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#products\">products</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#gallery\">gallery</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#contact\">Contact Us</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- end header inner -->
\t\t\t\t<!-- banner start-->
\t\t\t
\t\t\t\t<div class=\"layout_padding banner_section\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div id=\"main_slider\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 taital\">
\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"taital\">Quality<strong class=\"banner_taital\">Products with breads sweet Den</strong>
\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"lorem_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"banner-image\"><img src=\"";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 83, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 83, $this->source)), "html", null, true);
        echo "/images/banner-image.png\" style=\"max-width: 100%;\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"banner_bt\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"bt_main\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Read More</a>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 taital\">
\t\t\t\t\t\t\t\t\t\t\t<h1>Quality<strong class=\"banner_taital\">Products with breads sweet Den</strong>
\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"lorem_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"banner-image\"><img src=\"";
        // line 100
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 100, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 100, $this->source)), "html", null, true);
        echo "/images/banner-image.png\" style=\"max-width: 100%;\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"banner_bt\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"bt_main\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Read More</a>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 taital\">
\t\t\t\t\t\t\t\t\t\t\t<h1>Quality<strong class=\"banner_taital\">Products with breads sweet Den</strong>
\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"lorem_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"banner-image\"><img src=\"";
        // line 117
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 117, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 117, $this->source)), "html", null, true);
        echo "/images/banner-image.png\" style=\"max-width: 100%;\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"banner_bt\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"bt_main\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Read More</a>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#main_slider\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#main_slider\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
\t\t<!-- banner end-->
\t\t<!-- about start-->
\t
\t\t<div id=\"about\" class=\"layout_padding about_section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div><img src=\"";
        // line 152
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 152, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 152, $this->source)), "html", null, true);
        echo "/images/cupcake-img.png\" style=\"max-width: 100%;\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h1 class=\"about_text\">
\t\t\t\t\t\t\t<strong>About Den
\t\t\t\t\t\t\t\t<span class=\"color\">Shop</span>
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</h1>
\t\t\t\t\t\t<p class=\"about_taital\">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ve niam, quis nostrud exercitationconsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
\t\t\t\t\t\t<button class=\"read_more\">
\t\t\t\t\t\t\t<a href=\"#\">Read More</a>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- product start-->
\t\t<div id=\"products\" class=\"layout_padding product_section \">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t<h1 class=\"product_text\">
\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t<span class=\"den\">Den</span>Products</strong>
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"product_section_2 images\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"images\"><img src=\"";
        // line 182
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 182, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 182, $this->source)), "html", null, true);
        echo "/images/about-img1.png\" style=\"max-width: 100%; width: 100%;\"></div>
\t\t\t\t\t\t\t<h2 class=\"den_text croissants\">
\t\t\t\t\t\t\t\t<a href=\"#\">Croissants Breakfast</a>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"images\"><img src=\"";
        // line 188
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 188, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 188, $this->source)), "html", null, true);
        echo "/images/about-img2.png\" style=\"max-width: 100%; width: 100%;\"></div>
\t\t\t\t\t\t\t<h2 class=\"den_text\">
\t\t\t\t\t\t\t\t<a href=\"#\">Roll Cake</a>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"images\"><img src=\"";
        // line 194
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 194, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 194, $this->source)), "html", null, true);
        echo "/images/about-img3.png\" style=\"max-width: 100%; width: 100%;\"></div>
\t\t\t\t\t\t\t<h2 class=\"den_text\">
\t\t\t\t\t\t\t\t<a href=\"#\">BreadFrench Toast</a>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"images\"><img src=\"";
        // line 202
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 202, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 202, $this->source)), "html", null, true);
        echo "/images/about-img4.png\" style=\"max-width: 100%; width: 100%;\"></div>
\t\t\t\t\t\t\t<h2 class=\"den_text\">
\t\t\t\t\t\t\t\t<a href=\"#\">Cup Cake</a>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"images\"><img src=\"";
        // line 208
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 208, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 208, $this->source)), "html", null, true);
        echo "/images/about-img5.png\" style=\"max-width: 100%; width: 100%;\"></div>
\t\t\t\t\t\t\t<h2 class=\"den_text\">
\t\t\t\t\t\t\t\t<a href=\"#\">Donut</a>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"images\"><img src=\"";
        // line 214
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 214, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 214, $this->source)), "html", null, true);
        echo "/images/about-img6.png\" style=\"max-width: 100%; width: 100%;\"></div>
\t\t\t\t\t\t\t<h2 class=\"den_text\">
\t\t\t\t\t\t\t\t<a href=\"#\">Chocolate Cup Cake</a>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- product end-->
\t\t<!-- Gallery start-->
\t\t<div id=\"gallery\" class=\"layout_padding2 gallery_section\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t<div class=\"gallery_main\">
\t\t\t\t\t\t\t<h1 class=\"gallery_taital\">
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t<span class=\"our_text\">Our</span>
\t\t\t\t\t\t\t\t\tGallery</strong>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-12 gallery_maain\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-3 padding_0\">
\t\t\t\t\t\t\t\t<div class=\"gallery_blog\">
\t\t\t\t\t\t\t\t\t<img class=\"img-responive\" src=\"";
        // line 241
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 241, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 241, $this->source)), "html", null, true);
        echo "/images/gallery-img1.png\">
\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t<h2>Breakfast Breads</h2>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-3 padding_0\">
\t\t\t\t\t\t\t\t<div class=\"gallery_blog\">
\t\t\t\t\t\t\t\t\t<img class=\"img-responive\" src=\"";
        // line 249
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 249, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 249, $this->source)), "html", null, true);
        echo "/images/gallery-img2.png\">
\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t<h2>Breakfast Breads</h2>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-3 padding_0\">
\t\t\t\t\t\t\t\t<div class=\"gallery_blog\">
\t\t\t\t\t\t\t\t\t<img class=\"img-responive\" src=\"";
        // line 257
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 257, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 257, $this->source)), "html", null, true);
        echo "/images/gallery-img3.png\">
\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t<h2>Breakfast Breads</h2>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-3 padding_0\">
\t\t\t\t\t\t\t\t<div class=\"gallery_blog\">
\t\t\t\t\t\t\t\t\t<img class=\"img-responive\" src=\"";
        // line 265
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 265, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 265, $this->source)), "html", null, true);
        echo "/images/gallery-img4.png\">
\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t<h2>Breakfast Breads</h2>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- end Gallery-->
\t\t<!-- Touch start-->
\t\t<div class=\"layout_padding gallery_section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t<div class=\"gallery_main\">
\t\t\t\t\t\t\t<h1 class=\"gallery_taital\">
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t<span class=\"our_text\">Get in</span>Touch</strong>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"touch_main\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"input_main\">
\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t<div class=\"\">";
        // line 295
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 295), 295, $this->source), "html", null, true);
        echo " </div>
\t\t\t\t\t\t\t\t\t<form action=\"/action_page.php\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"email-bt\" placeholder=\"YOUR NAME\" name=\"Name\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"email-bt\" placeholder=\"EMAIL\" name=\"Email\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"email-bt\" placeholder=\"PHONE NUMBER\" name=\"Email\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"massage-bt\" placeholder=\"MASSAGE\" rows=\"5\" id=\"comment\" name=\"text\"></textarea>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"send_btn\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"main_bt\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">SEND</a>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"images\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 320
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 320, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 320, $this->source)), "html", null, true);
        echo "/images/bread-img.png\" style=\"max-width: 100%;\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"map_section\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">

\t\t\t\t\t<div id=\"map\"></div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t<!-- Touch end-->
\t\t<!-- contact start-->
\t\t<div id=\"contact\" class=\"contact_section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"contact-taital\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<h1 class=\"contact_text\">
\t\t\t\t\t\t\t\t<strong>Contact Us</strong>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 col-md-6 col-lg-3\">
\t\t\t\t\t\t<h2 class=\"adderess_text\">Adderess</h2>
\t\t\t\t\t\t<div class=\"image-icon\"><img src=\"";
        // line 352
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 352, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 352, $this->source)), "html", null, true);
        echo "/images/map-icon.png\"><span class=\"email_text\">Gb road 123 london Uk
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"image-icon\"><img src=\"";
        // line 355
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 355, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 355, $this->source)), "html", null, true);
        echo "/images/phone-icon.png\"><span class=\"email_text\">(+71) 56982424536</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"image-icon\"><img src=\"";
        // line 357
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 357, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 357, $this->source)), "html", null, true);
        echo "/images/email-icon.png\"><span class=\"email_text\">bacerim@gmail.com</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-6 col-lg-3\">
\t\t\t\t\t\t<h2 class=\"adderess_text\">Useful Links</h2>
\t\t\t\t\t\t<div class=\"image-icon\"><img src=\"";
        // line 362
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 362, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 362, $this->source)), "html", null, true);
        echo "/images/bulit-icon.png\"><span class=\"email_text\">Bacerim Dictionary</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"image-icon\"><img src=\"";
        // line 364
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 364, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 364, $this->source)), "html", null, true);
        echo "/images/bulit-icon.png\"><span class=\"email_text\">Help Links</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"image-icon\"><img src=\"";
        // line 366
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 366, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 366, $this->source)), "html", null, true);
        echo "/images/bulit-icon.png\"><span class=\"email_text\">bacerim Attitudes</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"image-icon\"><img src=\"";
        // line 368
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 368, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 368, $this->source)), "html", null, true);
        echo "/images/bulit-icon.png\"><span class=\"email_text\">Call a Cutumer</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"image-icon\"><img src=\"";
        // line 370
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 370, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 370, $this->source)), "html", null, true);
        echo "/images/bulit-icon.png\"><span class=\"email_text\">Help a Bacerim</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-6 col-lg-3\">
\t\t\t\t\t\t<h2 class=\"adderess_text\">Overview</h2>
\t\t\t\t\t\t<div class=\"image-icon\"><img src=\"";
        // line 375
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 375, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 375, $this->source)), "html", null, true);
        echo "/images/bulit-icon.png\"><span class=\"email_text\">Bacerim Dictionary</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"image-icon\"><img src=\"";
        // line 377
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 377, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 377, $this->source)), "html", null, true);
        echo "/images/bulit-icon.png\"><span class=\"email_text\">Help Links</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"image-icon\"><img src=\"";
        // line 379
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 379, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 379, $this->source)), "html", null, true);
        echo "/images/bulit-icon.png\"><span class=\"email_text\">bacerim Attitudes</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"social_icon\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<imgsrc=\"";
        // line 385
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 385, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 385, $this->source)), "html", null, true);
        echo "/images/fb-icon.png\"></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<imgsrc=\"";
        // line 390
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 390, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 390, $this->source)), "html", null, true);
        echo "/images/twitter-icon.png\"></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<imgsrc=\"";
        // line 395
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 395, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 395, $this->source)), "html", null, true);
        echo "/images/google-icon.png\"></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<imgsrc=\"";
        // line 400
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 400, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 400, $this->source)), "html", null, true);
        echo "/images/linkedin-icon.png\"></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-6 col-lg-3\">
\t\t\t\t\t\t<h2 class=\"adderess_text\">Instagram</h2>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"footer-img\"><img src=\"";
        // line 410
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 410, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 410, $this->source)), "html", null, true);
        echo "/images/footer-img1.png\" style=\"width: 100%;\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"footer-img\"><img src=\"";
        // line 413
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 413, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 413, $this->source)), "html", null, true);
        echo "/images/footer-img2.png\" style=\"width: 100%;\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"footer-img\"><img src=\"";
        // line 418
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 418, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 418, $this->source)), "html", null, true);
        echo "/images/footer-img2.png\" style=\"width: 100%;\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"footer-img\"><img src=\"";
        // line 421
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 421, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 421, $this->source)), "html", null, true);
        echo "/images/footer-img3.png\" style=\"width: 100%;\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- contact end-->
\t\t<!-- copyright start-->
\t\t<div class=\"copyright_section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t<p class=\"copyright_taital\">";
        // line 434
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
\t\t\t\t\t\t\tAll Rights Reserved.
\t\t\t\t\t\t\t<a href=\"https://html.design\">Free html  Templates</p>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<script>
\t\t\t\$(document).ready(function(){
      \t\t\t\$(\".fancybox\").fancybox({
         \t\t\topenEffect: \"none\",
         \t\t\tcloseEffect: \"none\" 
\t\t\t\t});
         
         \t\t\$(\".zoom\").hover(function(){
         
         \t\t\t\$(this).addClass('transition');
         \t\t}, function(){
         
         \t\t\t\$(this).removeClass('transition');
         \t\t});
         \t});

\t\t</script>


\t\t<script>
\t\t\tfunction initMap() {
\t\t\t\tvar map = new google.maps.Map(document.getElementById('map'), {
\t\t\t\t\tzoom: 14,
\t\t\t\t\tcenter: {
\t\t\t\t\t\tlat: 3.5350512,
\t\t\t\t\t\tlng: -76.2903836
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tvar beachMarker = new google.maps.Marker({
\t\t\t\t\tposition: {
\t\t\t\t\t\tlat: 3.5350512,
\t\t\t\t\t\tlng: -76.2903836
\t\t\t\t\t},
\t\t\t\t\tmap: map,
\t\t\t\t});
\t\t\t}
\t\t</script>


\t\t<!-- google map js -->
\t\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap\"></script>
\t\t<!-- end google map js -->


\t</body>
</html>



";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/den_theme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  588 => 434,  572 => 421,  566 => 418,  558 => 413,  552 => 410,  539 => 400,  531 => 395,  523 => 390,  515 => 385,  506 => 379,  501 => 377,  496 => 375,  488 => 370,  483 => 368,  478 => 366,  473 => 364,  468 => 362,  460 => 357,  455 => 355,  449 => 352,  414 => 320,  386 => 295,  353 => 265,  342 => 257,  331 => 249,  320 => 241,  290 => 214,  281 => 208,  272 => 202,  261 => 194,  252 => 188,  243 => 182,  210 => 152,  172 => 117,  152 => 100,  132 => 83,  105 => 59,  77 => 34,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/den_theme/templates/page.html.twig", "/var/www/html/curso_drupal/web/themes/custom/den_theme/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 34, "date" => 434);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'date'],
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
