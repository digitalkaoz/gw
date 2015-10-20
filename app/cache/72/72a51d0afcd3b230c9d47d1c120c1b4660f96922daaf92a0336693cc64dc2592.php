<?php

/* master.twig */
class __TwigTemplate_fe95c9f8fcbd101ecac9fadaacab398dd69ce59429c6a12f06e57c92f2a00330 extends Twig_Template
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
        echo "<!DOCTYPE html>
";
        // line 2
        ob_start();
        // line 4
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "canonicalpath", array())) {
            // line 5
            $context["languageslug"] = $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "canonicalpath", array()), "/"), 1, array(), "array");
        } else {
            // line 7
            $context["languageslug"] = $this->getAttribute(twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "paths", array()), "current", array()), "/"), 1, array(), "array");
        }
        // line 9
        echo "
";
        // line 11
        if (twig_in_filter((isset($context["languageslug"]) ? $context["languageslug"] : null), array(0 => "en", 1 => "de"))) {
            // line 12
            $context["language"] = (isset($context["languageslug"]) ? $context["languageslug"] : null);
        } else {
            // line 14
            $context["language"] = "de";
        }
        // line 16
        echo "
";
        // line 17
        $context["pagescontenttype"] = ((isset($context["language"]) ? $context["language"] : null) . "-pages");
        // line 18
        $context["entriescontenttype"] = ((isset($context["language"]) ? $context["language"] : null) . "-entries");
        // line 19
        $context["menumain"] = ((isset($context["language"]) ? $context["language"] : null) . "-main");
        // line 20
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 22
        echo "<html class=\"no-js\" lang=\"";
        echo twig_escape_filter($this->env, (isset($context["language"]) ? $context["language"] : null), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\" />

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    ";
        // line 29
        echo "    <title>
        ";
        // line 30
        if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array())), "html", null, true);
            echo " | ";
        }
        // line 31
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        echo "
        ";
        // line 32
        if (( !$this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/payoff"), "method"))) {
            echo " | ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/payoff"), "method"), "html", null, true);
        }
        // line 33
        echo "    </title>

    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "css/main.css\">

    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/lib/modernizr-custom.js\"></script>
</head>
<body >

";
        // line 41
        $this->loadTemplate("_sprite.svg.twig", "master.twig", 41)->display($context);
        // line 42
        $this->loadTemplate("_logo.svg.twig", "master.twig", 42)->display($context);
        // line 43
        echo "
<!-- @TODO loop video wenn intro fertig ist - auf allen Seiten -->
<!-- Main Blog Content -->
<div class=\"background-wrapper\">
    <video class=\"background-video js-video\" preload=\"auto\" width=\"100%\" height=\"auto\" data-video-url=\"";
        // line 47
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
        // line 60
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
        // line 80
        echo $this->env->getExtension('Bolt')->menu($this->env, (isset($context["menumain"]) ? $context["menumain"] : null), "_sub_menu.twig");
        echo "
            </ul>
        </nav>
    </header>
    <div class=\"app-bar\"></div>

<!-- Main Page Content and Sidebar -->
";
        // line 87
        $this->displayBlock('main', $context, $blocks);
        // line 88
        echo "
<!-- End Main Content -->


<!-- Footer -->

</div>
<div class=\"language\">
    ";
        // line 96
        $context["relatedrecords"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "related", array(), "method");
        // line 97
        echo "
    ";
        // line 98
        if ( !twig_test_empty($this->getAttribute((isset($context["relatedrecords"]) ? $context["relatedrecords"] : null), "en-pages", array(), "array"))) {
            // line 99
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["relatedrecords"]) ? $context["relatedrecords"] : null), "en-pages", array(), "array"), "link", array()), "html", null, true);
            echo "\">English</a>
    ";
        } else {
            // line 101
            echo "    <a href=\"/en\">English</a>
    ";
        }
        // line 103
        echo "    |
    ";
        // line 104
        if ( !twig_test_empty($this->getAttribute((isset($context["relatedrecords"]) ? $context["relatedrecords"] : null), "nl-pages", array(), "array"))) {
            // line 105
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["relatedrecords"]) ? $context["relatedrecords"] : null), "de-pages", array(), "array"), "link", array()), "html", null, true);
            echo "\">Nederlands</a>
    ";
        } else {
            // line 107
            echo "    <a href=\"/de\">Deutsch</a>
    ";
        }
        // line 109
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
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/lib/jquery-2.1.4.min.js\"></script>
<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/main-build.js\"></script>

<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/tsunami/utils/Debug.js\"></script>
<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/tsunami/geom/Rectangle.js\"></script>
<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/tsunami/geom/Point.js\"></script>
<script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/tsunami/geom/Ratio.js\"></script>
<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/tsunami/filters/Blendmode.js\"></script>
<script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/tsunami/filters/ColorHalftoneFilter.js\"></script>
<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/tsunami/halftone.js\"></script>



</body>
</html>
";
    }

    // line 87
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
        return array (  260 => 87,  249 => 129,  245 => 128,  241 => 127,  237 => 126,  233 => 125,  229 => 124,  225 => 123,  220 => 121,  216 => 120,  203 => 109,  199 => 107,  193 => 105,  191 => 104,  188 => 103,  184 => 101,  178 => 99,  176 => 98,  173 => 97,  171 => 96,  161 => 88,  159 => 87,  149 => 80,  126 => 60,  110 => 47,  104 => 43,  102 => 42,  100 => 41,  93 => 37,  88 => 35,  84 => 33,  79 => 32,  74 => 31,  69 => 30,  66 => 29,  57 => 22,  53 => 20,  51 => 19,  49 => 18,  47 => 17,  44 => 16,  41 => 14,  38 => 12,  36 => 11,  33 => 9,  30 => 7,  27 => 5,  25 => 4,  23 => 2,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* {% spaceless %}*/
/* {# --- attempt to get the language from the URL --- #}*/
/* {% if app.canonicalpath %}*/
/* {% set languageslug = app.canonicalpath|split('/')[1] %}*/
/* {% else %}*/
/* {% set languageslug = app.paths.current|split('/')[1] %}*/
/* {% endif %}*/
/* */
/* {# --- set the language, otherwise fallback to default language --- #}*/
/* {% if languageslug in ['en', 'de'] %}*/
/* {% set language = languageslug %}*/
/* {% else %}*/
/* {% set language = 'de' %}*/
/* {% endif %}*/
/* */
/* {% set pagescontenttype      = language ~ '-pages' %}*/
/* {% set entriescontenttype    = language ~ '-entries' %}*/
/* {% set menumain              = language ~ '-main' %}*/
/* */
/* {% endspaceless %}*/
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
/* <body >*/
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
/* <script src="{{ paths.theme }}js/lib/jquery-2.1.4.min.js"></script>*/
/* <script src="{{ paths.theme }}js/main-build.js"></script>*/
/* */
/* <script src="{{ paths.theme }}js/tsunami/utils/Debug.js"></script>*/
/* <script src="{{ paths.theme }}js/tsunami/geom/Rectangle.js"></script>*/
/* <script src="{{ paths.theme }}js/tsunami/geom/Point.js"></script>*/
/* <script src="{{ paths.theme }}js/tsunami/geom/Ratio.js"></script>*/
/* <script src="{{ paths.theme }}js/tsunami/filters/Blendmode.js"></script>*/
/* <script src="{{ paths.theme }}js/tsunami/filters/ColorHalftoneFilter.js"></script>*/
/* <script src="{{ paths.theme }}js/tsunami/halftone.js"></script>*/
/* */
/* */
/* */
/* </body>*/
/* </html>*/
/* */
