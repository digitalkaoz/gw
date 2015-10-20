<?php

/* relatedto/relatedto.twig */
class __TwigTemplate_6f8635987b11206ba5dd2be82853219a09027ff1dd8f69d3fde60ca463a413c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("_base/_page-nav.twig", "relatedto/relatedto.twig", 6);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_842a52d377d7b2cb4fca9826b94010ad0c5f1edb36cadbe46da34dbc5ce384d2"] = $this->loadTemplate("_sub/_editable_record_list.twig", "relatedto/relatedto.twig", 3);
        // line 4
        $context["panels"] = $this->loadTemplate("_macro/_panels.twig", "relatedto/relatedto.twig", 4);
        // line 6
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_page_nav($context, array $blocks = array())
    {
        echo "Content/*";
    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt')->trans("Related content");
    }

    // line 12
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "name", array()) . " › ") . $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "title", array())), "html", null, true);
    }

    // line 14
    public function block_page_main($context, array $blocks = array())
    {
        // line 15
        echo "
    ";
        // line 29
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
        ";
        // line 32
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "show_contenttype", array())) {
            // line 33
            echo "            <div class=\"col-md-9\">
                ";
            // line 34
            $this->loadTemplate("relatedto/_toolbar.twig", "relatedto/relatedto.twig", 34)->display($context);
            // line 35
            echo "                ";
            // line 36
            echo "                ";
            echo $context["__internal_842a52d377d7b2cb4fca9826b94010ad0c5f1edb36cadbe46da34dbc5ce384d2"]->geteditable_record_list($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "show_contenttype", array()), $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "related_content", array()), $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "permissions", array()), "");
            echo "
            </div>

            <aside class=\"col-md-3\">
                ";
            // line 40
            $this->loadTemplate("relatedto/_panel-actions_relatedto.twig", "relatedto/relatedto.twig", 40)->display($context);
            // line 41
            echo "                ";
            echo $context["panels"]->getlastmodified($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "show_contenttype", array()), "slug", array()));
            echo "
                ";
            // line 42
            echo $context["panels"]->getstack(5);
            echo "
            </aside>

        ";
        } else {
            // line 46
            echo "
            <div class=\"col-xs-12\">
                ";
            // line 48
            echo $this->env->getExtension('Bolt')->trans("No relations found!");
            echo "
            </div>

        ";
        }
        // line 52
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "relatedto/relatedto.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 52,  100 => 48,  96 => 46,  89 => 42,  84 => 41,  82 => 40,  74 => 36,  72 => 35,  70 => 34,  67 => 33,  65 => 32,  60 => 29,  57 => 15,  54 => 14,  48 => 12,  42 => 10,  36 => 8,  32 => 6,  30 => 4,  28 => 3,  11 => 6,);
    }
}
/* {# Page: NavSecondary > Content ... > Edit ^ View related content #}*/
/* */
/* {% from '_sub/_editable_record_list.twig' import editable_record_list as list %}*/
/* {% import '_macro/_panels.twig' as panels %}*/
/* */
/* {% extends '_base/_page-nav.twig' %}*/
/* */
/* {% block page_nav 'Content/*' %}*/
/* */
/* {% block page_title __('Related content') %}*/
/* */
/* {% block page_subtitle context.name ~ ' › ' ~ context.title %}*/
/* */
/* {% block page_main %}*/
/* */
/*     {# TODO: add pager*/
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/*             <h1 class="page-header">*/
/*                 {% if pager is defined and pager.totalpages > 1 %}*/
/*                     <span>*/
/*                     {{ __('Showing') }} {{ pager.showing_from }} - {{ pager.showing_to }} {{ __('of') }} {{ pager.count }}*/
/*                     </span>*/
/*                 {% endif %}*/
/*             </h1>*/
/*         </div>*/
/*     </div>*/
/*                 #}*/
/* */
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/*         {% if context.show_contenttype %}*/
/*             <div class="col-md-9">*/
/*                 {% include 'relatedto/_toolbar.twig' %}*/
/*                 {# TODO: add order #}*/
/*                 {{ list(context.show_contenttype, context.related_content, context.permissions, '') }}*/
/*             </div>*/
/* */
/*             <aside class="col-md-3">*/
/*                 {% include 'relatedto/_panel-actions_relatedto.twig' %}*/
/*                 {{ panels.lastmodified(context.show_contenttype.slug) }}*/
/*                 {{ panels.stack(5) }}*/
/*             </aside>*/
/* */
/*         {% else %}*/
/* */
/*             <div class="col-xs-12">*/
/*                 {{ __('No relations found!') }}*/
/*             </div>*/
/* */
/*         {% endif %}*/
/*     </div>*/
/* */
/* {% endblock page_main %}*/
/* */
