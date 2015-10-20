<?php

/* overview/overview.twig */
class __TwigTemplate_562ec6d9fbffa6e05356db5c73a26e5eb0419dc36d2ca3535c885648656c74ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("_base/_page-nav.twig", "overview/overview.twig", 6);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'messages' => array($this, 'block_messages'),
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
        $context["__internal_2d6a7d63740acd3c4b0a88757852867928a0fd4149aebb5e38e1b951e16931e4"] = $this->loadTemplate("_sub/_editable_record_list.twig", "overview/overview.twig", 3);
        // line 4
        $context["panels"] = $this->loadTemplate("_macro/_panels.twig", "overview/overview.twig", 4);
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
        echo $this->env->getExtension('Bolt')->trans("Overview");
    }

    // line 12
    public function block_page_subtitle($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        echo $this->env->getExtension('Bolt')->trans(array(0 => "contenttypes", 1 => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()), 2 => "name", 3 => "plural"), array("DEFAULT" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "name", array())));
        echo "
    ";
        // line 14
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filter", array())) {
            // line 15
            echo "        <small>(";
            echo $this->env->getExtension('Bolt')->trans("filtered by <em>'%filter%'</em>", array("%filter%" => twig_join_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filter", array()), ", ")));
            echo ")</small>
    ";
        }
    }

    // line 20
    public function block_messages($context, array $blocks = array())
    {
        echo "";
    }

    // line 22
    public function block_page_main($context, array $blocks = array())
    {
        // line 23
        echo "
    <div class=\"row\">
        <div class=\"col-md-8\">

            ";
        // line 27
        $this->loadTemplate("_sub/_messages.twig", "overview/overview.twig", 27)->display($context);
        // line 28
        echo "
            ";
        // line 29
        echo $context["__internal_2d6a7d63740acd3c4b0a88757852867928a0fd4149aebb5e38e1b951e16931e4"]->geteditable_record_list($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "multiplecontent", array()), $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "permissions", array()), "table-striped");
        echo "

        </div>

        <aside class=\"col-md-4\">
            ";
        // line 34
        $this->loadTemplate("overview/_panel-actions_overview.twig", "overview/overview.twig", 34)->display($context);
        // line 35
        echo "            ";
        echo $context["panels"]->getlastmodified($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()));
        echo "
        </aside>
    </div>

";
    }

    public function getTemplateName()
    {
        return "overview/overview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 35,  95 => 34,  87 => 29,  84 => 28,  82 => 27,  76 => 23,  73 => 22,  67 => 20,  59 => 15,  57 => 14,  52 => 13,  49 => 12,  43 => 10,  37 => 8,  33 => 6,  31 => 4,  29 => 3,  11 => 6,);
    }
}
/* {# Page: NavSecondary > Content ... > #}*/
/* */
/* {% from '_sub/_editable_record_list.twig' import editable_record_list as list %}*/
/* {% import '_macro/_panels.twig' as panels %}*/
/* */
/* {% extends '_base/_page-nav.twig' %}*/
/* */
/* {% block page_nav 'Content/*' %}*/
/* */
/* {% block page_title __('Overview') %}*/
/* */
/* {% block page_subtitle %}*/
/*     {{ __(['contenttypes', context.contenttype.slug, 'name', 'plural'], {DEFAULT: context.contenttype.name}) }}*/
/*     {% if context.filter %}*/
/*         <small>({{ __("filtered by <em>'%filter%'</em>", {'%filter%': context.filter|join(', ') }) }})</small>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {# clear default messages, because we use them in a different spot, in this template #}*/
/* {% block messages "" %}*/
/* */
/* {% block page_main %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-8">*/
/* */
/*             {% include '_sub/_messages.twig' %}*/
/* */
/*             {{ list(context.contenttype, context.multiplecontent, context.permissions, 'table-striped') }}*/
/* */
/*         </div>*/
/* */
/*         <aside class="col-md-4">*/
/*             {% include 'overview/_panel-actions_overview.twig' %}*/
/*             {{ panels.lastmodified(context.contenttype.slug) }}*/
/*         </aside>*/
/*     </div>*/
/* */
/* {% endblock page_main %}*/
/* */
