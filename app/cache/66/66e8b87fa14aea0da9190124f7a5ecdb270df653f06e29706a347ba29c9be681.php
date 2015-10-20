<?php

/* index.twig */
class __TwigTemplate_8d46dcef1daf903f1334aab699d0fd8e376ebd4d9b2b1cc72b67c6778df39172 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.twig", "index.twig", 1);
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
        echo "    <main class=\"main\">
        <div class=\"text\">
            ";
        // line 6
        if (array_key_exists("record", $context)) {
            // line 7
            echo "                ";
            $context["home"] = (isset($context["record"]) ? $context["record"] : null);
            // line 8
            echo "
                ";
            // line 9
            if ( !twig_test_empty($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "body", array()))) {
                // line 10
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "body", array()), "html", null, true);
                echo "
                ";
            }
            // line 12
            echo "            ";
        }
        // line 13
        echo "        </div>
        <div class=\"intro-video\">
            <iframe src=\"https://player.vimeo.com/video/128864720?color=ff0179&title=0&byline=0&portrait=0\" width=\"350\" height=\"197\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
    </main>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  51 => 12,  45 => 10,  43 => 9,  40 => 8,  37 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "master.twig" %}*/
/* */
/* {% block main %}*/
/*     <main class="main">*/
/*         <div class="text">*/
/*             {% if record is defined %}*/
/*                 {% set home = record %}*/
/* */
/*                 {% if home.body is not empty %}*/
/*                     {{ home.body }}*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*         </div>*/
/*         <div class="intro-video">*/
/*             <iframe src="https://player.vimeo.com/video/128864720?color=ff0179&title=0&byline=0&portrait=0" width="350" height="197" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>*/
/*         </div>*/
/*     </main>*/
/* {% endblock %}*/
