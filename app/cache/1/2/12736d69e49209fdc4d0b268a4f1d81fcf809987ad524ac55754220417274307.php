<?php

/* _html_head.twig */
class __TwigTemplate_1e9289b68098c0b43522931b04971d61752d3df491cf2d04279a01eeedb97863 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->htmlLang(), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\" />

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    ";
        // line 9
        echo "    <title>
        ";
        // line 10
        if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array())), "html", null, true);
            echo " | ";
        }
        // line 11
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        echo "
        ";
        // line 12
        if (( !$this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/payoff"), "method"))) {
            echo " | ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/payoff"), "method"), "html", null, true);
        }
        // line 13
        echo "    </title>

    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "css/main.css\">



    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/lib/modernizr-custom.js\"></script>
    ";
        // line 21
        echo "
</head>
<body>


";
        // line 26
        $this->loadTemplate("_sprite.svg.twig", "_html_head.twig", 26)->display($context);
        // line 27
        $this->loadTemplate("_logo.svg.twig", "_html_head.twig", 27)->display($context);
    }

    public function getTemplateName()
    {
        return "_html_head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 27,  70 => 26,  63 => 21,  59 => 19,  52 => 15,  48 => 13,  43 => 12,  38 => 11,  33 => 10,  30 => 9,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html class="no-js" lang="{{ htmllang() }}">*/
/* <head>*/
/*     <meta charset="utf-8" />*/
/* */
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0" />*/
/*     {# make sure we always display a proper title: The record's title if there is one, appended with the*/
/*        sitename. If there is no title, we append the sitename with the payoff, if there is one. #}*/
/*     <title>*/
/*         {% if record.title is defined %}{{ record.title|striptags }} | {% endif %}*/
/*             {{ app.config.get('general/sitename') }}*/
/*         {% if record.title is not defined and app.config.get('general/payoff') %} | {{ app.config.get('general/payoff') }}{% endif %}*/
/*     </title>*/
/* */
/*     <link rel="stylesheet" href="{{ paths.theme }}css/main.css">*/
/* */
/* */
/* */
/*     <script src="{{ paths.theme }}js/lib/modernizr-custom.js"></script>*/
/*     {#<!-- A variable from the theme's config: {{ theme.foo }} -->#}*/
/* */
/* </head>*/
/* <body>*/
/* */
/* */
/* {% include '_sprite.svg.twig' %}*/
/* {% include '_logo.svg.twig' %}*/
/* */
