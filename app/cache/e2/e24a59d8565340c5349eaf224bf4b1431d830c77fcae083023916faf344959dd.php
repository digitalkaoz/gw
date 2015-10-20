<?php

/* master.twig */
class __TwigTemplate_4b77c15a495247a7a0d9c5e990131a0c53f3077a69ec49740779f07db60150b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 3
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "canonicalpath", array())) {
            // line 4
            echo "    ";
            $context["languageslug"] = $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "canonicalpath", array()), "/"), 1, array(), "array");
        } else {
            // line 6
            echo "    ";
            $context["languageslug"] = $this->getAttribute(twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "paths", array()), "current", array()), "/"), 1, array(), "array");
        }
        // line 8
        echo "
";
        // line 10
        if (twig_in_filter((isset($context["languageslug"]) ? $context["languageslug"] : null), array(0 => "en", 1 => "de"))) {
            // line 11
            echo "    ";
            $context["language"] = (isset($context["languageslug"]) ? $context["languageslug"] : null);
        } else {
            // line 13
            echo "    ";
            $context["language"] = "de";
        }
        // line 15
        echo "
";
        // line 16
        $context["pagescontenttype"] = ((isset($context["language"]) ? $context["language"] : null) . "-pages");
        // line 17
        $context["entriescontenttype"] = ((isset($context["language"]) ? $context["language"] : null) . "-entries");
        // line 18
        $context["menumain"] = ((isset($context["language"]) ? $context["language"] : null) . "-main");
        // line 19
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 21
        echo "

<!DOCTYPE html>
<html class=\"no-js\" lang=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["language"]) ? $context["language"] : null), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\" />

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    ";
        // line 31
        echo "    <title>
        ";
        // line 32
        if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array())), "html", null, true);
            echo " | ";
        }
        // line 33
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        echo "
        ";
        // line 34
        if (( !$this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/payoff"), "method"))) {
            echo " | ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/payoff"), "method"), "html", null, true);
        }
        // line 35
        echo "    </title>

    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "css/main.css\">

    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/lib/modernizr-custom.js\"></script>
</head>
<body>

";
        // line 43
        $this->loadTemplate("_sprite.svg.twig", "master.twig", 43)->display($context);
        // line 44
        $this->loadTemplate("_logo.svg.twig", "master.twig", 44)->display($context);
        // line 45
        echo "
<!-- @TODO loop video wenn intro fertig ist - auf allen Seiten -->
<!-- Main Blog Content -->
<div class=\"background-wrapper\">
    <video class=\"background-video js-video\" preload=\"auto\" width=\"100%\" height=\"auto\" data-video-url=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "background_video", array()), "html", null, true);
        echo "\"></video>
    <div class=\"video-controls js-toggle-video\">
        <svg viewBox=\"0 0 50 50\" class=\"icon video-pause\">
            <use xlink:href=\"#pause\"></use>
        </svg>
        <svg viewBox=\"0 0 50 50\" class=\"icon video-play\">
            <use xlink:href=\"#play\"></use>
        </svg>
    </div>
</div>

<div class=\"page-wrapper\">
    <header class=\"header\">
        <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
        echo "\" class=\"logo\">
            <svg viewBox=\"0 0 175 61\" class=\"logo-plain\">
                <use xlink:href=\"#gw_logo\"></use>
            </svg>
            <svg viewBox=\"0 0 175 61\" class=\"logo-hover\">
                <use xlink:href=\"#gw_logo_mouseover\"></use>
            </svg>
        </a>
        <button class=\"menu nav-button\">
            <svg viewBox=\"0 0 50 50\" class=\"icon\">
                <use xlink:href=\"#burger\"></use>
            </svg>
        </button>
        <button class=\"close close-nav nav-button\">
            <svg viewBox=\"0 0 50 50\" class=\"icon\">
                <use xlink:href=\"#x\"></use>
            </svg>
        </button>
        <nav class=\"nav-container promote-layer\">
            <ul class=\"nav main-nav\">
                ";
        // line 82
        echo $this->env->getExtension('Bolt')->menu($this->env, (isset($context["menumain"]) ? $context["menumain"] : null), "_sub_menu.twig");
        echo "
            </ul>
        </nav>
    </header>
    <div class=\"app-bar\"></div>

<!-- Main Page Content and Sidebar -->
";
        // line 89
        $this->displayBlock('main', $context, $blocks);
        // line 90
        echo "
<!-- End Main Content -->


<!-- Footer -->

</div>
<div class=\"language\">
    ";
        // line 98
        $context["relatedrecords"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "related", array(), "method");
        // line 99
        echo "
    ";
        // line 100
        if ( !twig_test_empty($this->getAttribute((isset($context["relatedrecords"]) ? $context["relatedrecords"] : null), "en-pages", array(), "array"))) {
            // line 101
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["relatedrecords"]) ? $context["relatedrecords"] : null), "en-pages", array(), "array"), "link", array()), "html", null, true);
            echo "\">English</a>
    ";
        } else {
            // line 103
            echo "    <a href=\"/en\">English</a>
    ";
        }
        // line 105
        echo "    |
    ";
        // line 106
        if ( !twig_test_empty($this->getAttribute((isset($context["relatedrecords"]) ? $context["relatedrecords"] : null), "nl-pages", array(), "array"))) {
            // line 107
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["relatedrecords"]) ? $context["relatedrecords"] : null), "de-pages", array(), "array"), "link", array()), "html", null, true);
            echo "\">Nederlands</a>
    ";
        } else {
            // line 109
            echo "    <a href=\"/de\">Deutsch</a>
    ";
        }
        // line 111
        echo "</div>

<div class=\"social-wrapper\">
    <a href=\"https://twitter.com/GermanWahnsinn\" target=\"_blank\" class=\"twitter\">
        <svg viewBox=\"0 0 50 50\" class=\"icon\">
            <use xlink:href=\"#twitter\"></use>
        </svg>
        Brandaktuelles
    </a>
</div>

<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/main-build.js\" async defer></script>

</body>
</html>
";
    }

    // line 89
    public function block_main($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "master.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 89,  221 => 122,  208 => 111,  204 => 109,  198 => 107,  196 => 106,  193 => 105,  189 => 103,  183 => 101,  181 => 100,  178 => 99,  176 => 98,  166 => 90,  164 => 89,  154 => 82,  131 => 62,  115 => 49,  109 => 45,  107 => 44,  105 => 43,  98 => 39,  93 => 37,  89 => 35,  84 => 34,  79 => 33,  74 => 32,  71 => 31,  63 => 24,  58 => 21,  54 => 19,  52 => 18,  50 => 17,  48 => 16,  45 => 15,  41 => 13,  37 => 11,  35 => 10,  32 => 8,  28 => 6,  24 => 4,  22 => 3,  20 => 1,);
    }
}
/* {% spaceless %}*/
/* {# --- attempt to get the language from the URL --- #}*/
/* {% if app.canonicalpath %}*/
/*     {% set languageslug = app.canonicalpath|split('/')[1] %}*/
/* {% else %}*/
/*     {% set languageslug = app.paths.current|split('/')[1] %}*/
/* {% endif %}*/
/* */
/* {# --- set the language, otherwise fallback to default language --- #}*/
/* {% if languageslug in ['en', 'de'] %}*/
/*     {% set language = languageslug %}*/
/* {% else %}*/
/*     {% set language = 'de' %}*/
/* {% endif %}*/
/* */
/* {% set pagescontenttype      = language ~ '-pages' %}*/
/* {% set entriescontenttype    = language ~ '-entries' %}*/
/* {% set menumain              = language ~ '-main' %}*/
/* */
/* {% endspaceless %}*/
/* */
/* */
/* <!DOCTYPE html>*/
/* <html class="no-js" lang="{{ language }}">*/
/* <head>*/
/*     <meta charset="utf-8" />*/
/* */
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0" />*/
/*     {# make sure we always display a proper title: The record's title if there is one, appended with the*/
/*     sitename. If there is no title, we append the sitename with the payoff, if there is one. #}*/
/*     <title>*/
/*         {% if record.title is defined %}{{ record.title|striptags }} | {% endif %}*/
/*         {{ app.config.get('general/sitename') }}*/
/*         {% if record.title is not defined and app.config.get('general/payoff') %} | {{ app.config.get('general/payoff') }}{% endif %}*/
/*     </title>*/
/* */
/*     <link rel="stylesheet" href="{{ paths.theme }}css/main.css">*/
/* */
/*     <script src="{{ paths.theme }}js/lib/modernizr-custom.js"></script>*/
/* </head>*/
/* <body>*/
/* */
/* {% include '_sprite.svg.twig' %}*/
/* {% include '_logo.svg.twig' %}*/
/* */
/* <!-- @TODO loop video wenn intro fertig ist - auf allen Seiten -->*/
/* <!-- Main Blog Content -->*/
/* <div class="background-wrapper">*/
/*     <video class="background-video js-video" preload="auto" width="100%" height="auto" data-video-url="{{ record.background_video }}"></video>*/
/*     <div class="video-controls js-toggle-video">*/
/*         <svg viewBox="0 0 50 50" class="icon video-pause">*/
/*             <use xlink:href="#pause"></use>*/
/*         </svg>*/
/*         <svg viewBox="0 0 50 50" class="icon video-play">*/
/*             <use xlink:href="#play"></use>*/
/*         </svg>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="page-wrapper">*/
/*     <header class="header">*/
/*         <a href="{{ paths.root }}" class="logo">*/
/*             <svg viewBox="0 0 175 61" class="logo-plain">*/
/*                 <use xlink:href="#gw_logo"></use>*/
/*             </svg>*/
/*             <svg viewBox="0 0 175 61" class="logo-hover">*/
/*                 <use xlink:href="#gw_logo_mouseover"></use>*/
/*             </svg>*/
/*         </a>*/
/*         <button class="menu nav-button">*/
/*             <svg viewBox="0 0 50 50" class="icon">*/
/*                 <use xlink:href="#burger"></use>*/
/*             </svg>*/
/*         </button>*/
/*         <button class="close close-nav nav-button">*/
/*             <svg viewBox="0 0 50 50" class="icon">*/
/*                 <use xlink:href="#x"></use>*/
/*             </svg>*/
/*         </button>*/
/*         <nav class="nav-container promote-layer">*/
/*             <ul class="nav main-nav">*/
/*                 {{ menu(menumain, '_sub_menu.twig') }}*/
/*             </ul>*/
/*         </nav>*/
/*     </header>*/
/*     <div class="app-bar"></div>*/
/* */
/* <!-- Main Page Content and Sidebar -->*/
/* {% block main %} {% endblock %}*/
/* */
/* <!-- End Main Content -->*/
/* */
/* */
/* <!-- Footer -->*/
/* */
/* </div>*/
/* <div class="language">*/
/*     {% set relatedrecords = record.related() %}*/
/* */
/*     {% if relatedrecords['en-pages'] is not empty %}*/
/*     <a href="{{ relatedrecords['en-pages'].link }}">English</a>*/
/*     {% else %}*/
/*     <a href="/en">English</a>*/
/*     {% endif %}*/
/*     |*/
/*     {% if relatedrecords['nl-pages'] is not empty %}*/
/*     <a href="{{ relatedrecords['de-pages'].link }}">Nederlands</a>*/
/*     {% else %}*/
/*     <a href="/de">Deutsch</a>*/
/*     {% endif %}*/
/* </div>*/
/* */
/* <div class="social-wrapper">*/
/*     <a href="https://twitter.com/GermanWahnsinn" target="_blank" class="twitter">*/
/*         <svg viewBox="0 0 50 50" class="icon">*/
/*             <use xlink:href="#twitter"></use>*/
/*         </svg>*/
/*         Brandaktuelles*/
/*     </a>*/
/* </div>*/
/* */
/* <script src="{{ paths.theme }}js/main-build.js" async defer></script>*/
/* */
/* </body>*/
/* </html>*/
/* */
