<?php

/* kontakt.twig */
class __TwigTemplate_fc6f7a64f5bb1a682088b089126b5dad11a2e104ff0aac2bc02a34104e84ee83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.twig", "kontakt.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "master.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "<main class=\"main\">
    <div class=\"text\">
        ";
        // line 6
        if (array_key_exists("record", $context)) {
            // line 7
            echo "
        ";
            // line 8
            $context["home"] = (isset($context["record"]) ? $context["record"] : null);
            // line 9
            echo "
        ";
            // line 11
            echo "
        ";
            // line 12
            if ( !twig_test_empty($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "body", array()))) {
                // line 13
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "body", array()), "html", null, true);
                echo "
        ";
            }
            // line 15
            echo "
        <a href=\"#\" class=\"js-open-overlay text-open-overlay\" data-overlay=\"team\">Team</a>
        <a href=\"#\" class=\"js-open-overlay text-open-overlay\" data-overlay=\"impressum\">Impressum</a>

        <div class=\"overlay js-overlay js-overlay-team overlay-odd\">
            <button class=\"close close-overlay js-close-overlay\">
                <svg viewBox=\"0 0 50 50\" class=\"icon\">
                    <use xlink:href=\"#x\"></use>
                </svg>
            </button>
            <div class=\"content\">
                <div class=\"headline\">Team</div>

            </div>
        </div>

        <div class=\"overlay js-overlay js-overlay-impressum overlay-even\" data-content=\"impressum\">
            <button class=\"close close-overlay js-close-overlay\">
                <svg viewBox=\"0 0 50 50\" class=\"icon\">
                    <use xlink:href=\"#x\"></use>
                </svg>
            </button>
            <div class=\"content\">
                <div class=\"headline\">Impressum</div>
                ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "templatefields", array()), "impressum", array()), "html", null, true);
            echo "
            </div>
        </div>

        ";
        } else {
            // line 44
            echo "        <p>
            ";
            // line 45
            echo $this->env->getExtension('Bolt')->trans("Content for home not found!");
            echo "
            ";
            // line 46
            echo $this->env->getExtension('Bolt')->trans("You should set 'homepage:' in your 'app/config/config.yml' to an existing record. Make sure that the content is published, otherwise it will not be shown.");
            echo "
        </p>
        ";
        }
        // line 49
        echo "    </div>
</main>
";
    }

    public function getTemplateName()
    {
        return "kontakt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 49,  97 => 46,  93 => 45,  90 => 44,  82 => 39,  56 => 15,  50 => 13,  48 => 12,  45 => 11,  42 => 9,  40 => 8,  37 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "master.twig" %}*/
/* */
/* {% block main %}*/
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
/*         <a href="#" class="js-open-overlay text-open-overlay" data-overlay="team">Team</a>*/
/*         <a href="#" class="js-open-overlay text-open-overlay" data-overlay="impressum">Impressum</a>*/
/* */
/*         <div class="overlay js-overlay js-overlay-team overlay-odd">*/
/*             <button class="close close-overlay js-close-overlay">*/
/*                 <svg viewBox="0 0 50 50" class="icon">*/
/*                     <use xlink:href="#x"></use>*/
/*                 </svg>*/
/*             </button>*/
/*             <div class="content">*/
/*                 <div class="headline">Team</div>*/
/* */
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="overlay js-overlay js-overlay-impressum overlay-even" data-content="impressum">*/
/*             <button class="close close-overlay js-close-overlay">*/
/*                 <svg viewBox="0 0 50 50" class="icon">*/
/*                     <use xlink:href="#x"></use>*/
/*                 </svg>*/
/*             </button>*/
/*             <div class="content">*/
/*                 <div class="headline">Impressum</div>*/
/*                 {{ record.templatefields.impressum }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         {% else %}*/
/*         <p>*/
/*             {{ __('Content for home not found!') }}*/
/*             {{ __("You should set 'homepage:' in your 'app/config/config.yml' to an existing record. Make sure that the content is published, otherwise it will not be shown.") }}*/
/*         </p>*/
/*         {% endif %}*/
/*     </div>*/
/* </main>*/
/* {% endblock %}*/
/* */
