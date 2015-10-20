<?php

/* nav/_secondary.twig */
class __TwigTemplate_d2a557ff9be7d2dc3d26431c747e3be184b998a70a4a312d00a84f3a12b1ec2c extends Twig_Template
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
        $context["nav"] = $this->loadTemplate("nav/_macros.twig", "nav/_secondary.twig", 1);
        // line 2
        echo "
<ul class=\"nav\">
    ";
        // line 4
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "user"), "method"))) {
            // line 5
            echo "
        ";
            // line 7
            echo "        ";
            $this->loadTemplate("nav/_secondary-search.twig", "nav/_secondary.twig", 7)->display($context);
            // line 8
            echo "        
        ";
            // line 10
            echo "        ";
            echo $context["nav"]->getlink("fa:dashboard", $this->env->getExtension('Bolt')->trans("Dashboard"), "dashboard", ((isset($context["page_nav"]) ? $context["page_nav"] : null) == "Dashboard"));
            echo "

        ";
            // line 13
            echo "        <li class=\"visible-xs\">
            <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"icon fa fa-external-link-square\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("View site");
            echo "</a>
        </li>

        ";
            // line 18
            echo "        ";
            echo $context["nav"]->getheading($this->env->getExtension('Bolt')->trans("Content"), "fa:file-text");
            echo "
        ";
            // line 19
            $this->loadTemplate("nav/_secondary-content.twig", "nav/_secondary.twig", 19)->display($context);
            // line 20
            echo "
        ";
            // line 22
            echo "        ";
            if ($this->env->getExtension('Bolt')->isAllowed("settings")) {
                // line 23
                echo "            ";
                ob_start();
                $this->loadTemplate("nav/_secondary-configuration.twig", "nav/_secondary.twig", 23)->display($context);
                $context["nav_config"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 24
                echo "            ";
                ob_start();
                $this->loadTemplate("nav/_secondary-filemanagement.twig", "nav/_secondary.twig", 24)->display($context);
                $context["nav_files"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 25
                echo "            ";
                ob_start();
                $this->loadTemplate("nav/_secondary-translations.twig", "nav/_secondary.twig", 25)->display($context);
                $context["nav_trans"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 26
                echo "            ";
                // line 27
                echo "            ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "extensions", array()), "hasMenuoptions", array()) || $this->env->getExtension('Bolt')->isAllowed("extensions||extensions:config"))) {
                    // line 28
                    echo "                ";
                    ob_start();
                    $this->loadTemplate("nav/_secondary-extensions.twig", "nav/_secondary.twig", 28)->display($context);
                    $context["nav_extend"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 29
                    echo "            ";
                } else {
                    // line 30
                    echo "                ";
                    $context["nav_extend"] = "";
                    // line 31
                    echo "            ";
                }
                // line 32
                echo "
            ";
                // line 33
                if ((((trim((isset($context["nav_config"]) ? $context["nav_config"] : null)) || trim((isset($context["nav_files"]) ? $context["nav_files"] : null))) || trim((isset($context["nav_trans"]) ? $context["nav_trans"] : null))) || trim((isset($context["nav_extend"]) ? $context["nav_extend"] : null)))) {
                    // line 34
                    echo "                ";
                    echo $context["nav"]->getheading($this->env->getExtension('Bolt')->trans("Settings"), "fa:wrench");
                    echo "

                ";
                    // line 36
                    echo twig_escape_filter($this->env, (isset($context["nav_config"]) ? $context["nav_config"] : null), "html", null, true);
                    echo "
                ";
                    // line 37
                    echo twig_escape_filter($this->env, (isset($context["nav_files"]) ? $context["nav_files"] : null), "html", null, true);
                    echo "
                ";
                    // line 38
                    echo twig_escape_filter($this->env, (isset($context["nav_trans"]) ? $context["nav_trans"] : null), "html", null, true);
                    echo "
                ";
                    // line 39
                    echo twig_escape_filter($this->env, (isset($context["nav_extend"]) ? $context["nav_extend"] : null), "html", null, true);
                    echo "
            ";
                }
                // line 41
                echo "
        ";
            }
            // line 43
            echo "

        ";
            // line 45
            echo $context["nav"]->getcollapse();
            echo "

    ";
        } else {
            // line 48
            echo "
        ";
            // line 50
            echo "        <li>
            <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-external-link-square\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("View site");
            echo "</a>
        </li>

        ";
            // line 55
            echo "        <li>
            <a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\"><i class=\"fa fa-signin\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("Login");
            echo "</a>
        </li>
    ";
        }
        // line 59
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "nav/_secondary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 59,  159 => 56,  156 => 55,  148 => 51,  145 => 50,  142 => 48,  136 => 45,  132 => 43,  128 => 41,  123 => 39,  119 => 38,  115 => 37,  111 => 36,  105 => 34,  103 => 33,  100 => 32,  97 => 31,  94 => 30,  91 => 29,  86 => 28,  83 => 27,  81 => 26,  76 => 25,  71 => 24,  66 => 23,  63 => 22,  60 => 20,  58 => 19,  53 => 18,  45 => 14,  42 => 13,  36 => 10,  33 => 8,  30 => 7,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% import 'nav/_macros.twig' as nav %}*/
/* */
/* <ul class="nav">*/
/*     {% if app.session.get('user') is not null %}*/
/* */
/*         {# Omnisearch: one here for "extra small", the other in the header-navbar #}*/
/*         {% include 'nav/_secondary-search.twig' %}*/
/*         */
/*         {# Dashboard #}*/
/*         {{ nav.link('fa:dashboard', __('Dashboard'), 'dashboard', (page_nav == 'Dashboard')) }}*/
/* */
/*         {# View site #}*/
/*         <li class="visible-xs">*/
/*             <a href="{{ paths.root }}" target="_blank"><i class="icon fa fa-external-link-square"></i> {{ __('View site') }}</a>*/
/*         </li>*/
/* */
/*         {# Contenttypes #}*/
/*         {{ nav.heading(__('Content'), 'fa:file-text') }}*/
/*         {% include 'nav/_secondary-content.twig' %}*/
/* */
/*         {# Settings #}*/
/*         {% if isallowed('settings') %}*/
/*             {% set nav_config %}{% include 'nav/_secondary-configuration.twig' %}{% endset %}*/
/*             {% set nav_files %}{% include 'nav/_secondary-filemanagement.twig' %}{% endset %}*/
/*             {% set nav_trans %}{% include 'nav/_secondary-translations.twig' %}{% endset %}*/
/*             {# Link to Extend Bolt #}*/
/*             {% if app.extensions.hasMenuoptions or isallowed('extensions||extensions:config') %}*/
/*                 {% set nav_extend %}{% include 'nav/_secondary-extensions.twig' %}{% endset %}*/
/*             {% else %}*/
/*                 {% set nav_extend = '' %}*/
/*             {% endif %}*/
/* */
/*             {% if nav_config|trim or nav_files|trim or nav_trans|trim or nav_extend|trim %}*/
/*                 {{ nav.heading(__('Settings'), 'fa:wrench') }}*/
/* */
/*                 {{ nav_config }}*/
/*                 {{ nav_files }}*/
/*                 {{ nav_trans }}*/
/*                 {{ nav_extend }}*/
/*             {% endif %}*/
/* */
/*         {% endif %}*/
/* */
/* */
/*         {{ nav.collapse() }}*/
/* */
/*     {% else %}*/
/* */
/*         {# View site #}*/
/*         <li>*/
/*             <a href="{{ paths.root }}" target="_blank"><i class="fa fa-external-link-square"></i> {{ __('View site') }}</a>*/
/*         </li>*/
/* */
/*         {# Login #}*/
/*         <li>*/
/*             <a href="{{ path('login') }}"><i class="fa fa-signin"></i> {{ __('Login') }}</a>*/
/*         </li>*/
/*     {% endif %}*/
/* </ul>*/
/* */
