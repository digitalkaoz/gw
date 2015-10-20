<?php

/* record.twig */
class __TwigTemplate_f919b48ead4701f25102f7872848bb581a533d8cd813702fa3af16bc08a886be extends Twig_Template
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
        $this->loadTemplate("_html_head.twig", "record.twig", 1)->display($context);
        // line 2
        echo "
<!-- Main Page Content and Sidebar -->

<!-- Main Blog Content -->
<div class=\"background-wrapper\">
    <video class=\"background-video js-video\" preload=\"auto\" width=\"100%\" height=\"auto\" data-video-url=\"";
        // line 7
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
";
        // line 17
        $this->loadTemplate("_header.twig", "record.twig", 17)->display($context);
        // line 18
        echo "

<main class=\"main\">
    <div class=\"text\">
        ";
        // line 22
        if (array_key_exists("record", $context)) {
            // line 23
            echo "
        ";
            // line 24
            $context["home"] = (isset($context["record"]) ? $context["record"] : null);
            // line 25
            echo "
        ";
            // line 27
            echo "
        ";
            // line 28
            if ( !twig_test_empty($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "body", array()))) {
                // line 29
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "body", array()), "html", null, true);
                echo "
        ";
            }
            // line 31
            echo "
        ";
        } else {
            // line 33
            echo "        <p>
            ";
            // line 34
            echo $this->env->getExtension('Bolt')->trans("Content for home not found!");
            echo "
            ";
            // line 35
            echo $this->env->getExtension('Bolt')->trans("You should set 'homepage:' in your 'app/config/config.yml' to an existing record. Make sure that the content is published, otherwise it will not be shown.");
            echo "
        </p>
        ";
        }
        // line 38
        echo "    </div>
</main>


<!-- End Main Content -->





";
        // line 48
        $this->loadTemplate("_footer.twig", "record.twig", 48)->display($context);
    }

    public function getTemplateName()
    {
        return "record.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 48,  87 => 38,  81 => 35,  77 => 34,  74 => 33,  70 => 31,  64 => 29,  62 => 28,  59 => 27,  56 => 25,  54 => 24,  51 => 23,  49 => 22,  43 => 18,  41 => 17,  28 => 7,  21 => 2,  19 => 1,);
    }
}
/* {% include '_html_head.twig' %}*/
/* */
/* <!-- Main Page Content and Sidebar -->*/
/* */
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
/* {% include '_header.twig' %}*/
/* */
/* */
/* <main class="main">*/
/*     <div class="text">*/
/*         {% if record is defined %}*/
/* */
/*         {% set home = record %}*/
/* */
/*         {# display something introduction-like.. #}*/
/* */
/*         {% if home.body is not empty %}*/
/*         {{ home.body }}*/
/*         {% endif %}*/
/* */
/*         {% else %}*/
/*         <p>*/
/*             {{ __('Content for home not found!') }}*/
/*             {{ __("You should set 'homepage:' in your 'app/config/config.yml' to an existing record. Make sure that the content is published, otherwise it will not be shown.") }}*/
/*         </p>*/
/*         {% endif %}*/
/*     </div>*/
/* </main>*/
/* */
/* */
/* <!-- End Main Content -->*/
/* */
/* */
/* */
/* */
/* */
/* {% include '_footer.twig' %}*/
/* */
