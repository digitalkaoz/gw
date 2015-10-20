<?php

/* _header.twig */
class __TwigTemplate_f77f06d504e0d21fe479bd73acb3bfd640a410f1d931a8bbeb2db1cec0452983 extends Twig_Template
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
        echo "<div class=\"page-wrapper\">
    <header class=\"header\">
        <a href=\"";
        // line 3
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
        // line 23
        echo $this->env->getExtension('Bolt')->menu($this->env, "main", "_sub_menu.twig");
        echo "
            </ul>
        </nav>
    </header>
    <div class=\"app-bar\"></div>";
    }

    public function getTemplateName()
    {
        return "_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 23,  23 => 3,  19 => 1,);
    }
}
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
/*                 {{ menu('main', '_sub_menu.twig') }}*/
/*             </ul>*/
/*         </nav>*/
/*     </header>*/
/*     <div class="app-bar"></div>*/
