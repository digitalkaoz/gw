<?php

/* record.twig */
class __TwigTemplate_735687a3116d834ee55abf42b9a32a904f16e6da0395be26328cd04547236c82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "record.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"text\">

    ";
        // line 7
        if (array_key_exists("record", $context)) {
            // line 8
            echo "    ";
            $context["home"] = (isset($context["record"]) ? $context["record"] : null);
            // line 9
            echo "
    ";
            // line 10
            if ( !twig_test_empty($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "body", array()))) {
                // line 11
                echo "    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "body", array()), "html", null, true);
                echo "
    ";
            }
            // line 13
            echo "    ";
        }
        // line 14
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->printDump((isset($context["record"]) ? $context["record"] : null)), "html", null, true);
        echo "


</div>
";
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
        return array (  55 => 14,  52 => 13,  46 => 11,  44 => 10,  41 => 9,  38 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "index.twig" %}*/
/* */
/* {% block content %}*/
/* */
/* <div class="text">*/
/* */
/*     {% if record is defined %}*/
/*     {% set home = record %}*/
/* */
/*     {% if home.body is not empty %}*/
/*     {{ home.body }}*/
/*     {% endif %}*/
/*     {% endif %}*/
/*     {{ dump(record) }}*/
/* */
/* */
/* </div>*/
/* {% endblock %}*/
