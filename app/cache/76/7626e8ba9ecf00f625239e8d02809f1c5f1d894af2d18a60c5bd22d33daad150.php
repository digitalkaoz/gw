<?php

/* nav/_secondary-translations.twig */
class __TwigTemplate_4b1a1c8bafe1764e3486b748cd16ea9867dd4661981ea8e1f9869a314be64c67 extends Twig_Template
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
        $context["sub"] = array(0 => array("icon" => "fa:flag", "label" => $this->env->getExtension('Bolt')->trans("Messages"), "link" => $this->env->getExtension('routing')->getPath("translation", array("domain" => "messages")), "isallowed" => "translation"), 1 => array("icon" => "fa:flag", "label" => $this->env->getExtension('Bolt')->trans("Long messages"), "link" => $this->env->getExtension('routing')->getPath("translation", array("domain" => "infos")), "isallowed" => "translation"), 2 => array("icon" => "fa:flag", "label" => $this->env->getExtension('Bolt')->trans("Contenttypes"), "link" => $this->env->getExtension('routing')->getPath("translation", array("domain" => "contenttypes")), "isallowed" => "translation"));
        // line 19
        echo "
";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "submenu", array(0 => "fa:flag", 1 => $this->env->getExtension('Bolt')->trans("Translations"), 2 => (isset($context["sub"]) ? $context["sub"] : null), 3 => ((isset($context["page_nav"]) ? $context["page_nav"] : null) == "Settings/Translations")), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "nav/_secondary-translations.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 20,  21 => 19,  19 => 1,);
    }
}
/* {% set sub = [*/
/*     {*/
/*         icon: 'fa:flag',*/
/*         label: __('Messages'),*/
/*         link: path('translation', {'domain': 'messages'}),*/
/*         isallowed: 'translation'*/
/*     }, {*/
/*         icon: 'fa:flag',*/
/*         label: __('Long messages'),*/
/*         link: path('translation', {'domain': 'infos'}),*/
/*         isallowed: 'translation'*/
/*     }, {*/
/*         icon: 'fa:flag',*/
/*         label: __('Contenttypes'),*/
/*         link: path('translation', {'domain': 'contenttypes'}),*/
/*         isallowed: 'translation'*/
/*     }*/
/* ] %}*/
/* */
/* {{ nav.submenu('fa:flag', __('Translations'), sub, (page_nav == 'Settings/Translations')) }}*/
/* */
