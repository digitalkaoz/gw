<?php

/* _base/_page-nav.twig */
class __TwigTemplate_734f7811ee0aa2d46e4309836694ea35192ca67d923606830f6fa07b7f586d4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 10
        $this->parent = $this->loadTemplate("_base/_page.twig", "_base/_page-nav.twig", 10);
        $this->blocks = array(
            'page_plain' => array($this, 'block_page_plain'),
            'messages' => array($this, 'block_messages'),
            'page_main' => array($this, 'block_page_main'),
            'page_main_extra_content' => array($this, 'block_page_main_extra_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_page.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 12
        $context["page_bodyclass"] = "";
        // line 14
        $context["page_hasnav"] = true;
        // line 16
        $context["page_nav"] = _twig_default_filter($this->renderBlock("page_nav", $context, $blocks), "NO NAV");
        // line 10
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_page_plain($context, array $blocks = array())
    {
        // line 19
        echo "
    <div id=\"navpage-wrapper\"";
        // line 20
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "cookies", array()), "get", array(0 => "sidebar"), "method")) {
            echo " class=\"nav-secondary-collapsed nav-secondary-collapsed-hoverable\"";
        }
        echo ">
        <nav id=\"navpage-primary\" class=\"navbar navbar-static-top navbar-inverse navbar-bolt\" role=\"navigation\">
            ";
        // line 22
        $this->loadTemplate("nav/_primary.twig", "_base/_page-nav.twig", 22)->display($context);
        // line 23
        echo "        </nav>

        <nav id=\"navpage-secondary\" class=\"navbar-default navbar-static-side\" role=\"navigation\">
            ";
        // line 26
        $this->loadTemplate("nav/_secondary.twig", "_base/_page-nav.twig", 26)->display($context);
        // line 27
        echo "        </nav>

        <div id=\"navpage-content\" class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <h1 class=\"page-header\">
                        ";
        // line 33
        if (twig_test_empty($this->renderBlock("page_subtitle", $context, $blocks))) {
            // line 34
            echo "                            <strong>";
            $this->displayBlock("page_title", $context, $blocks);
            echo "</strong>
                        ";
        } else {
            // line 36
            echo "                            <strong>";
            $this->displayBlock("page_title", $context, $blocks);
            echo " »</strong>
                            <i style=\"font-style: normal;\">";
            // line 37
            $this->displayBlock("page_subtitle", $context, $blocks);
            echo "</i>
                        ";
        }
        // line 39
        echo "
                        ";
        // line 41
        echo "                        ";
        if (array_key_exists("pager", $context)) {
            // line 42
            echo "                            ";
            $context["pager_ct"] = $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()), array(), "array");
            // line 43
            echo "                            ";
            if (((isset($context["pager_ct"]) ? $context["pager_ct"] : null) && ($this->getAttribute((isset($context["pager_ct"]) ? $context["pager_ct"] : null), "totalpages", array()) > 1))) {
                // line 44
                echo "                                <span>
                                    ";
                // line 45
                echo $this->env->getExtension('Bolt')->trans("Showing");
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager_ct"]) ? $context["pager_ct"] : null), "showing_from", array()), "html", null, true);
                echo " -
                                    ";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager_ct"]) ? $context["pager_ct"] : null), "showing_to", array()), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Bolt')->trans("of");
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager_ct"]) ? $context["pager_ct"] : null), "count", array()), "html", null, true);
                echo "
                                </span>
                            ";
            }
            // line 49
            echo "                        ";
        }
        // line 50
        echo "
                    </h1>
                </div>
            </div>

            ";
        // line 55
        $this->displayBlock('messages', $context, $blocks);
        // line 58
        echo "
            ";
        // line 59
        $this->displayBlock('page_main', $context, $blocks);
        // line 60
        echo "        </div>
        
        ";
        // line 62
        $this->displayBlock('page_main_extra_content', $context, $blocks);
        // line 64
        echo "    </div>

    <footer id=\"bolt-footer\" class=\"hidden-xs\">
        ";
        // line 67
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/branding/provided_by/0"), "method")) {
            // line 68
            echo "            ";
            echo $this->env->getExtension('Bolt')->trans("Provided by:");
            echo "
            <a href=\"mailto:";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/branding/provided_by/0"), "method"), "html", null, true);
            echo "\">
                ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/branding/provided_by/1"), "method"), "html", null, true);
            echo "
            </a> -
        ";
        }
        // line 73
        echo "        <i class=\"fa fa-cog\"></i> <b>Bolt ";
        echo twig_escape_filter($this->env, (isset($context["bolt_version"]) ? $context["bolt_version"] : null), "html", null, true);
        echo "</b>: ";
        echo $this->env->getExtension('Bolt')->trans("Sophisticated, lightweight & simple CMS");
        echo " -
        <i class=\"fa fa-heart\"></i > <a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">";
        echo $this->env->getExtension('Bolt')->trans("general.about");
        echo "</a> &ndash;
        <i class=\"fa fa-external-link-square\"></i> <a href=\"http://bolt.cm\" target=\"_blank\">Bolt.cm</a>
    </footer>

";
    }

    // line 55
    public function block_messages($context, array $blocks = array())
    {
        // line 56
        echo "                ";
        $this->loadTemplate("_sub/_messages.twig", "_base/_page-nav.twig", 56)->display(array_merge($context, array("wrapper" => true)));
        // line 57
        echo "            ";
    }

    // line 59
    public function block_page_main($context, array $blocks = array())
    {
        echo "[PAGE_MAIN]";
    }

    // line 62
    public function block_page_main_extra_content($context, array $blocks = array())
    {
        // line 63
        echo "        ";
    }

    public function getTemplateName()
    {
        return "_base/_page-nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 63,  196 => 62,  190 => 59,  186 => 57,  183 => 56,  180 => 55,  169 => 74,  162 => 73,  156 => 70,  152 => 69,  147 => 68,  145 => 67,  140 => 64,  138 => 62,  134 => 60,  132 => 59,  129 => 58,  127 => 55,  120 => 50,  117 => 49,  107 => 46,  101 => 45,  98 => 44,  95 => 43,  92 => 42,  89 => 41,  86 => 39,  81 => 37,  76 => 36,  70 => 34,  68 => 33,  60 => 27,  58 => 26,  53 => 23,  51 => 22,  44 => 20,  41 => 19,  38 => 18,  34 => 10,  32 => 16,  30 => 14,  28 => 12,  11 => 10,);
    }
}
/* {##*/
/*  # HTML page template for pages with navigation*/
/*  #*/
/*  # Blocks: page_nav:      Navigation path, like: "Dashboard", "Settings/Configuration", "Content/*", ...*/
/*  #         page_main:     content*/
/*  #         page_title:    used as html title*/
/*  #         page_subtitle: used as html title (optional)*/
/*  #         page_script:   script added after the body tag (script tags needed!)*/
/*  #}*/
/* {% extends '_base/_page.twig' %}*/
/* */
/* {% set page_bodyclass = '' %}*/
/* */
/* {% set page_hasnav = true %}*/
/* */
/* {% set page_nav = block('page_nav')|default('NO NAV') %}*/
/* */
/* {% block page_plain %}*/
/* */
/*     <div id="navpage-wrapper"{% if app.request.cookies.get('sidebar') %} class="nav-secondary-collapsed nav-secondary-collapsed-hoverable"{% endif %}>*/
/*         <nav id="navpage-primary" class="navbar navbar-static-top navbar-inverse navbar-bolt" role="navigation">*/
/*             {% include 'nav/_primary.twig' %}*/
/*         </nav>*/
/* */
/*         <nav id="navpage-secondary" class="navbar-default navbar-static-side" role="navigation">*/
/*             {% include 'nav/_secondary.twig' %}*/
/*         </nav>*/
/* */
/*         <div id="navpage-content" class="container-fluid">*/
/*             <div class="row">*/
/*                 <div class="col-xs-12">*/
/*                     <h1 class="page-header">*/
/*                         {% if block('page_subtitle') is empty %}*/
/*                             <strong>{{ block('page_title') }}</strong>*/
/*                         {% else %}*/
/*                             <strong>{{ block('page_title') }} »</strong>*/
/*                             <i style="font-style: normal;">{{ block('page_subtitle') }}</i>*/
/*                         {% endif %}*/
/* */
/*                         {# optional "showing 1-X of Y" for overview pages. #}*/
/*                         {% if pager is defined %}*/
/*                             {% set pager_ct = pager[context.contenttype.slug] %}*/
/*                             {% if pager_ct and pager_ct.totalpages > 1 %}*/
/*                                 <span>*/
/*                                     {{ __('Showing') }} {{ pager_ct.showing_from }} -*/
/*                                     {{ pager_ct.showing_to }} {{ __('of') }} {{ pager_ct.count }}*/
/*                                 </span>*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/* */
/*                     </h1>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             {% block messages %}*/
/*                 {% include '_sub/_messages.twig' with {'wrapper': true} %}*/
/*             {% endblock messages %}*/
/* */
/*             {% block page_main %}[PAGE_MAIN]{% endblock page_main %}*/
/*         </div>*/
/*         */
/*         {% block page_main_extra_content %}*/
/*         {% endblock %}*/
/*     </div>*/
/* */
/*     <footer id="bolt-footer" class="hidden-xs">*/
/*         {% if app.config.get('general/branding/provided_by/0') %}*/
/*             {{ __("Provided by:") }}*/
/*             <a href="mailto:{{ app.config.get('general/branding/provided_by/0') }}">*/
/*                 {{ app.config.get('general/branding/provided_by/1') }}*/
/*             </a> -*/
/*         {% endif %}*/
/*         <i class="fa fa-cog"></i> <b>Bolt {{ bolt_version }}</b>: {{ __('Sophisticated, lightweight & simple CMS') }} -*/
/*         <i class="fa fa-heart"></i > <a href="{{ path('about') }}">{{ __('general.about') }}</a> &ndash;*/
/*         <i class="fa fa-external-link-square"></i> <a href="http://bolt.cm" target="_blank">Bolt.cm</a>*/
/*     </footer>*/
/* */
/* {% endblock page_plain %}*/
/* */
