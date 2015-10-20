<?php

/* audio.twig */
class __TwigTemplate_3377f2e99de78b350ae655e6eccb424982dc112a5dda77c1710464bdb16659ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.twig", "audio.twig", 1);
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
    <div class=\"video-wrapper teaser-wrapper\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["vimeoapi"]) ? $context["vimeoapi"] : null), "videoTitle", array(0 => $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "group_id", array())), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 7
            echo "
        <a href=\"#\" class=\"js-open-overlay teaser\" data-overlay=\"\" >

            <h3 class=\"teaser-headline\"><span class=\"text-shadow\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "name", array(), "array"), "html", null, true);
            echo "</span></h3>

        </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "

    </div>
</main>

";
    }

    public function getTemplateName()
    {
        return "audio.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  44 => 10,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "master.twig" %}*/
/* */
/* {% block main %}*/
/* <main class="main">*/
/*     <div class="video-wrapper teaser-wrapper">*/
/*         {% for video in vimeoapi.videoTitle(record.group_id) %}*/
/* */
/*         <a href="#" class="js-open-overlay teaser" data-overlay="" >*/
/* */
/*             <h3 class="teaser-headline"><span class="text-shadow">{{ video['name'] }}</span></h3>*/
/* */
/*         </a>*/
/*         {% endfor %}*/
/* */
/* */
/*     </div>*/
/* </main>*/
/* */
/* {% endblock %}*/
/* */
