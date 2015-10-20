<?php

/* _base/_page.twig */
class __TwigTemplate_fd7f3f63180a5b1a524799d4975bc30adbaa3f8f4ab449699ef9ee26e9330424 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_plain' => array($this, 'block_page_plain'),
            'page_script' => array($this, 'block_page_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 12
        ob_start();
        // line 13
        echo "
";
        // line 14
        $context["page_locale_long"] = $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array());
        // line 15
        $context["page_locale_short"] = twig_slice($this->env, (isset($context["page_locale_long"]) ? $context["page_locale_long"] : null), 0, 2);
        // line 16
        $context["page_timezone_offset"] = $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "timezone_offset", array());
        // line 17
        echo "
";
        // line 18
        if (twig_test_empty($this->renderBlock("page_subtitle", $context, $blocks))) {
            // line 19
            echo "    ";
            $context["page_title"] = $this->renderBlock("page_title", $context, $blocks);
        } else {
            // line 21
            echo "    ";
            $context["page_title"] = (($this->renderBlock("page_title", $context, $blocks) . " » ") . $this->renderBlock("page_subtitle", $context, $blocks));
        }
        // line 23
        echo "
";
        // line 25
        $context["page_scripts_inc"] = array(0 => "view/js/lib.min.js");
        // line 28
        echo "
";
        // line 30
        $context["localepath"] = "view/js/locale/datepicker/";
        // line 31
        if ($this->env->getExtension('Bolt')->fileExists((((($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "apppath", array()) . "/") . (isset($context["localepath"]) ? $context["localepath"] : null)) . (isset($context["page_locale_long"]) ? $context["page_locale_long"] : null)) . ".min.js"))) {
            // line 32
            echo "    ";
            $context["page_scripts_inc"] = twig_array_merge((isset($context["page_scripts_inc"]) ? $context["page_scripts_inc"] : null), array(0 => (((isset($context["localepath"]) ? $context["localepath"] : null) . (isset($context["page_locale_long"]) ? $context["page_locale_long"] : null)) . ".min.js")));
        } elseif (((        // line 33
(isset($context["page_locale_short"]) ? $context["page_locale_short"] : null) != "en") && $this->env->getExtension('Bolt')->fileExists((((($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "apppath", array()) . "/") . (isset($context["localepath"]) ? $context["localepath"] : null)) . (isset($context["page_locale_short"]) ? $context["page_locale_short"] : null)) . ".min.js")))) {
            // line 34
            echo "    ";
            $context["page_scripts_inc"] = twig_array_merge((isset($context["page_scripts_inc"]) ? $context["page_scripts_inc"] : null), array(0 => (((isset($context["localepath"]) ? $context["localepath"] : null) . (isset($context["page_locale_short"]) ? $context["page_locale_short"] : null)) . ".min.js")));
        }
        // line 36
        echo "
";
        // line 38
        $context["localepath"] = "view/js/locale/moment/";
        // line 39
        if ($this->env->getExtension('Bolt')->fileExists((((($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "apppath", array()) . "/") . (isset($context["localepath"]) ? $context["localepath"] : null)) . (isset($context["page_locale_long"]) ? $context["page_locale_long"] : null)) . ".min.js"))) {
            // line 40
            echo "    ";
            $context["page_scripts_inc"] = twig_array_merge((isset($context["page_scripts_inc"]) ? $context["page_scripts_inc"] : null), array(0 => (((isset($context["localepath"]) ? $context["localepath"] : null) . (isset($context["page_locale_long"]) ? $context["page_locale_long"] : null)) . ".min.js")));
        } elseif (((        // line 41
(isset($context["page_locale_short"]) ? $context["page_locale_short"] : null) != "en") && $this->env->getExtension('Bolt')->fileExists((((($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "apppath", array()) . "/") . (isset($context["localepath"]) ? $context["localepath"] : null)) . (isset($context["page_locale_short"]) ? $context["page_locale_short"] : null)) . ".min.js")))) {
            // line 42
            echo "    ";
            $context["page_scripts_inc"] = twig_array_merge((isset($context["page_scripts_inc"]) ? $context["page_scripts_inc"] : null), array(0 => (((isset($context["localepath"]) ? $context["localepath"] : null) . (isset($context["page_locale_short"]) ? $context["page_locale_short"] : null)) . ".min.js")));
        }
        // line 44
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 47
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["page_locale_short"]) ? $context["page_locale_short"] : null), "html", null, true);
        echo "\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">

    <title>";
        // line 54
        echo trim(strip_tags((isset($context["page_title"]) ? $context["page_title"] : null)));
        echo " – ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/branding/name"), "method"), "html", null, true);
        echo "</title>

    <link rel=\"stylesheet\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
        echo "view/css/lib.css\">

    <!--[if lt IE 9]>
        <link rel=\"stylesheet\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
        echo "view/css/bolt-old-ie.css\" media=\"screen, projection\">
    <![endif]-->

    <!--[if gte IE 9]><!-->
        <link rel=\"stylesheet\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
        echo "view/css/bolt.css\" media=\"screen, projection\">
    <!--<![endif]-->

    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["page_scripts_inc"]) ? $context["page_scripts_inc"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 67
            echo "<script src=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()) . $context["script"]), "html", null, true);
            echo "\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
    <link rel=\"shortcut icon\" href=\"";
        // line 70
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/branding/favicon"), "method")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/branding/favicon"), "method"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
            echo "view/img/favicon-bolt.ico";
        }
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 71
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/branding/apple-touch-icon"), "method")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/branding/apple-touch-icon"), "method"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
            echo "view/img/apple-touch-icon.png";
        }
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 72
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/branding/apple-touch-icon-72x72"), "method")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/branding/apple-touch-icon-72x72"), "method"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
            echo "view/img/apple-touch-icon-72x72.png";
        }
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 73
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/branding/apple-touch-icon-114x114"), "method")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/branding/apple-touch-icon-114x114"), "method"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
            echo "view/img/apple-touch-icon-114x114.png";
        }
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 74
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/branding/apple-touch-icon-144x144"), "method")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/branding/apple-touch-icon-144x144"), "method"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
            echo "view/img/apple-touch-icon-144x144.png";
        }
        echo "\">

    ";
        // line 77
        echo "<!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body";
        // line 83
        if ((isset($context["page_bodyclass"]) ? $context["page_bodyclass"] : null)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, (isset($context["page_bodyclass"]) ? $context["page_bodyclass"] : null), "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 84
        $this->displayBlock('page_plain', $context, $blocks);
        // line 85
        echo "
";
        // line 86
        $context["bconfig"] = array("locale" => array("short" =>         // line 88
(isset($context["page_locale_short"]) ? $context["page_locale_short"] : null), "long" =>         // line 89
(isset($context["page_locale_long"]) ? $context["page_locale_long"] : null)), "timezone" => array("offset" =>         // line 92
(isset($context["page_timezone_offset"]) ? $context["page_timezone_offset"] : null)), "paths" => array("bolt" => $this->getAttribute(        // line 95
(isset($context["paths"]) ? $context["paths"] : null), "bolt", array()), "async" => $this->getAttribute(        // line 96
(isset($context["paths"]) ? $context["paths"] : null), "async", array()), "app" => $this->getAttribute(        // line 97
(isset($context["paths"]) ? $context["paths"] : null), "app", array()), "root" => $this->getAttribute(        // line 98
(isset($context["paths"]) ? $context["paths"] : null), "root", array()), "origin" => $this->getAttribute(        // line 99
(isset($context["paths"]) ? $context["paths"] : null), "rooturl", array())), "uploadConfig" => array("maxSize" => $this->getAttribute($this->getAttribute(        // line 102
(isset($context["app"]) ? $context["app"] : null), "filepermissions", array(), "array"), "getMaxUploadSize", array(), "method"), "maxSizeNice" => $this->getAttribute($this->getAttribute(        // line 103
(isset($context["app"]) ? $context["app"] : null), "filepermissions", array(), "array"), "getMaxUploadSizeNice", array(), "method")), "ckeditor" => array("images" => (0 + $this->getAttribute(        // line 106
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/images"), "method")), "styles" => (0 + $this->getAttribute(        // line 107
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/styles"), "method")), "tables" => (0 + $this->getAttribute(        // line 108
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/tables"), "method")), "anchor" => (0 + $this->getAttribute(        // line 109
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/anchor"), "method")), "fontcolor" => (0 + $this->getAttribute(        // line 110
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/fontcolor"), "method")), "align" => (0 + $this->getAttribute(        // line 111
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/align"), "method")), "subsuper" => (0 + $this->getAttribute(        // line 112
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/subsuper"), "method")), "embed" => (0 + $this->getAttribute(        // line 113
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/embed"), "method")), "blockquote" => (0 + $this->getAttribute(        // line 114
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/blockquote"), "method")), "ruler" => (0 + $this->getAttribute(        // line 115
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/ruler"), "method")), "strike" => (0 + $this->getAttribute(        // line 116
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/strike"), "method")), "underline" => (0 + $this->getAttribute(        // line 117
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/underline"), "method")), "codesnippet" => (0 + $this->getAttribute(        // line 118
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/codesnippet"), "method")), "specialchar" => (0 + $this->getAttribute(        // line 119
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/specialchar"), "method")), "ck" => ((twig_test_iterable($this->getAttribute(        // line 120
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/ck"), "method"))) ? ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/ck"), "method")) : (false)), "filebrowser" => ((twig_test_iterable($this->getAttribute(        // line 121
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/filebrowser"), "method"))) ? ($this->getAttribute(        // line 122
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/filebrowser"), "method")) : (false))));
        // line 125
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
        echo "view/js/bolt.min.js\" data-config=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["bconfig"]) ? $context["bconfig"] : null)), "html", null, true);
        echo "\" data-jsdata=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "jsdata", array())), "html", null, true);
        echo "\"></script>

";
        // line 127
        $this->displayBlock('page_script', $context, $blocks);
        // line 129
        echo "
";
        // line 131
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/grunt/livereload"), "method")) {
            // line 132
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "hosturl", array()), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/grunt/livereloadport"), "method"), "html", null, true);
            echo "/livereload.js\"></script>
";
        }
        // line 134
        echo "
</body>
</html>
";
    }

    // line 84
    public function block_page_plain($context, array $blocks = array())
    {
    }

    // line 127
    public function block_page_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_base/_page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 127,  268 => 84,  261 => 134,  253 => 132,  251 => 131,  248 => 129,  246 => 127,  236 => 125,  234 => 122,  233 => 121,  232 => 120,  231 => 119,  230 => 118,  229 => 117,  228 => 116,  227 => 115,  226 => 114,  225 => 113,  224 => 112,  223 => 111,  222 => 110,  221 => 109,  220 => 108,  219 => 107,  218 => 106,  217 => 103,  216 => 102,  215 => 99,  214 => 98,  213 => 97,  212 => 96,  211 => 95,  210 => 92,  209 => 89,  208 => 88,  207 => 86,  204 => 85,  202 => 84,  194 => 83,  186 => 77,  176 => 74,  167 => 73,  158 => 72,  149 => 71,  140 => 70,  137 => 69,  128 => 67,  124 => 66,  118 => 63,  111 => 59,  105 => 56,  98 => 54,  89 => 48,  86 => 47,  82 => 44,  78 => 42,  76 => 41,  73 => 40,  71 => 39,  69 => 38,  66 => 36,  62 => 34,  60 => 33,  57 => 32,  55 => 31,  53 => 30,  50 => 28,  48 => 25,  45 => 23,  41 => 21,  37 => 19,  35 => 18,  32 => 17,  30 => 16,  28 => 15,  26 => 14,  23 => 13,  21 => 12,);
    }
}
/* {##*/
/*  # Standard HTML page template*/
/*  #*/
/*  # Dont't use, use "_page-<nav|no_nav|popup>.twig" instead!*/
/*  #*/
/*  # Blocks: page_nav:      Navigation path, like: "Dashboard", "Settings/Configuration", "Content/*", ...*/
/*  #         page_main:     content*/
/*  #         page_title:    used as html title*/
/*  #         page_subtitle: used as html title (optional)*/
/*  #         page_script:   script added after the body tag (script tags needed!)*/
/*  #}*/
/* {%- spaceless %}*/
/* */
/* {% set page_locale_long = app.locale %}*/
/* {% set page_locale_short = page_locale_long|slice(0, 2) %}*/
/* {% set page_timezone_offset = app.timezone_offset %}*/
/* */
/* {% if block('page_subtitle') is empty %}*/
/*     {% set page_title = block('page_title') %}*/
/* {% else %}*/
/*     {% set page_title = block('page_title') ~ ' » ' ~ block('page_subtitle') %}*/
/* {% endif %}*/
/* */
/* {# TODO: Refactor this out. Too much business logic in the template. #}*/
/* {% set page_scripts_inc = [*/
/*     'view/js/lib.min.js'*/
/* ] %}*/
/* */
/* {# Add locale include for datepicker #}*/
/* {% set localepath = 'view/js/locale/datepicker/' %}*/
/* {% if file_exists(paths.apppath ~ '/' ~ localepath ~ page_locale_long ~ '.min.js') %}*/
/*     {% set page_scripts_inc = page_scripts_inc|merge([localepath ~ page_locale_long ~ '.min.js']) %}*/
/* {% elseif page_locale_short != 'en' and file_exists(paths.apppath ~ '/' ~ localepath ~ page_locale_short ~ '.min.js') %}*/
/*     {% set page_scripts_inc = page_scripts_inc|merge([localepath ~ page_locale_short ~ '.min.js']) %}*/
/* {% endif %}*/
/* */
/* {# Add locale include for moment #}*/
/* {% set localepath = 'view/js/locale/moment/' %}*/
/* {% if file_exists(paths.apppath ~ '/' ~ localepath ~ page_locale_long ~ '.min.js') %}*/
/*     {% set page_scripts_inc = page_scripts_inc|merge([localepath ~ page_locale_long ~ '.min.js']) %}*/
/* {% elseif page_locale_short != 'en' and file_exists(paths.apppath ~ '/' ~ localepath ~ page_locale_short ~ '.min.js') %}*/
/*     {% set page_scripts_inc = page_scripts_inc|merge([localepath ~ page_locale_short ~ '.min.js']) %}*/
/* {% endif %}*/
/* */
/* {% endspaceless -%}*/
/* */
/* <!DOCTYPE html>*/
/* <html lang="{{ page_locale_short }}">*/
/* <head>*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">*/
/* */
/*     <title>{{ page_title|striptags|trim|raw }} – {{ app.config.get('general/branding/name') }}</title>*/
/* */
/*     <link rel="stylesheet" href="{{ paths.app }}view/css/lib.css">*/
/* */
/*     <!--[if lt IE 9]>*/
/*         <link rel="stylesheet" href="{{ paths.app }}view/css/bolt-old-ie.css" media="screen, projection">*/
/*     <![endif]-->*/
/* */
/*     <!--[if gte IE 9]><!-->*/
/*         <link rel="stylesheet" href="{{ paths.app }}view/css/bolt.css" media="screen, projection">*/
/*     <!--<![endif]-->*/
/* */
/*     {% for script in page_scripts_inc -%}*/
/*         <script src="{{ paths.app ~ script }}"></script>*/
/*     {% endfor %}*/
/* */
/*     <link rel="shortcut icon" href="{% if app.config.get('general/branding/favicon') %}{{ app.config.get('general/branding/favicon') }}{% else %}{{ paths.app }}view/img/favicon-bolt.ico{% endif %}">*/
/*     <link rel="apple-touch-icon" sizes="57x57" href="{% if app.config.get('general/branding/apple-touch-icon') %}{{ app.config.get('general/branding/apple-touch-icon') }}{% else %}{{ paths.app }}view/img/apple-touch-icon.png{% endif %}">*/
/*     <link rel="apple-touch-icon" sizes="72x72" href="{% if app.config.get('general/branding/apple-touch-icon-72x72') %}{{ app.config.get('general/branding/apple-touch-icon-72x72') }}{% else %}{{ paths.app }}view/img/apple-touch-icon-72x72.png{% endif %}">*/
/*     <link rel="apple-touch-icon" sizes="114x114" href="{% if app.config.get('general/branding/apple-touch-icon-114x114') %}{{ app.config.get('general/branding/apple-touch-icon-114x114') }}{% else %}{{ paths.app }}view/img/apple-touch-icon-114x114.png{% endif %}">*/
/*     <link rel="apple-touch-icon" sizes="144x144" href="{% if app.config.get('general/branding/apple-touch-icon-144x144') %}{{ app.config.get('general/branding/apple-touch-icon-144x144') }}{% else %}{{ paths.app }}view/img/apple-touch-icon-144x144.png{% endif %}">*/
/* */
/*     {# HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -#}*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*         <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* */
/* <body{% if page_bodyclass %} class="{{ page_bodyclass }}"{% endif %}>*/
/*     {% block page_plain %}{% endblock page_plain %}*/
/* */
/* {% set bconfig = {*/
/*     locale: {*/
/*         short: page_locale_short,*/
/*         long: page_locale_long,*/
/*     },*/
/*     timezone: {*/
/*         offset: page_timezone_offset,*/
/*     },*/
/*     paths: {*/
/*         bolt:  paths.bolt,*/
/*         async: paths.async,*/
/*         app:   paths.app,*/
/*         root:  paths.root,*/
/*         origin: paths.rooturl*/
/*     },*/
/*     uploadConfig: {*/
/*         maxSize: app['filepermissions'].getMaxUploadSize(),*/
/*         maxSizeNice: app['filepermissions'].getMaxUploadSizeNice(),*/
/*     },*/
/*     ckeditor: {*/
/*         images:      0 + config.get('general/wysiwyg/images'),*/
/*         styles:      0 + config.get('general/wysiwyg/styles'),*/
/*         tables:      0 + config.get('general/wysiwyg/tables'),*/
/*         anchor:      0 + config.get('general/wysiwyg/anchor'),*/
/*         fontcolor:   0 + config.get('general/wysiwyg/fontcolor'),*/
/*         align:       0 + config.get('general/wysiwyg/align'),*/
/*         subsuper:    0 + config.get('general/wysiwyg/subsuper'),*/
/*         embed:       0 + config.get('general/wysiwyg/embed'),*/
/*         blockquote:  0 + config.get('general/wysiwyg/blockquote'),*/
/*         ruler:       0 + config.get('general/wysiwyg/ruler'),*/
/*         strike:      0 + config.get('general/wysiwyg/strike'),*/
/*         underline:   0 + config.get('general/wysiwyg/underline'),*/
/*         codesnippet: 0 + config.get('general/wysiwyg/codesnippet'),*/
/*         specialchar: 0 + config.get('general/wysiwyg/specialchar'),*/
/*         ck:          (config.get('general/wysiwyg/ck') is iterable) ? config.get('general/wysiwyg/ck') : false,*/
/*         filebrowser: (config.get('general/wysiwyg/filebrowser') is iterable)*/
/*                         ? config.get('general/wysiwyg/filebrowser') : false,*/
/*     },*/
/* } %}*/
/* <script src="{{ paths.app }}view/js/bolt.min.js" data-config="{{ bconfig|json_encode }}" data-jsdata="{{ app.jsdata|json_encode }}"></script>*/
/* */
/* {% block page_script %}*/
/* {% endblock page_script %}*/
/* */
/* {# Add the Grunt livereload script, if Grunt livereload is enabled in config.yml. #}*/
/* {% if app.config.get('general/grunt/livereload') %}*/
/*     <script src="{{ paths.hosturl }}:{{ app.config.get('general/grunt/livereloadport') }}/livereload.js"></script>*/
/* {% endif %}*/
/* */
/* </body>*/
/* </html>*/
/* */
