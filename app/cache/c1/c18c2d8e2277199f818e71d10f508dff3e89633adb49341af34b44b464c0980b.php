<?php

/* videos.twig */
class __TwigTemplate_3fcadc733dcdb0d4b66112c656efd20d140b49a575c4dd1b4f90f2368c845b57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.twig", "videos.twig", 1);
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
        <div class=\"video-wrapper teaser-wrapper\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["vimeoapi"]) ? $context["vimeoapi"] : null), "videoGroup", array(0 => $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "group_id", array())), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 7
            echo "                <a href=\"#\" class=\"js-open-overlay teaser\" data-overlay=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["related"]) ? $context["related"] : null), "id", array()), "html", null, true);
            echo "\" >
                    <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["video"], "pictures", array(), "array"), "sizes", array(), "array"), 2, array(), "array"), "link", array(), "array"), "html", null, true);
            echo "\" class=\"teaser-image--first\">

                    <canvas class=\"halftone\"></canvas>

                    <div class=\"teaser-rollover\">
                        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["vimeoapi"]) ? $context["vimeoapi"] : null), "videoImages", array(0 => $this->getAttribute($context["video"], "uri", array(), "array")), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["videoImage"]) {
                // line 14
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $context["videoImage"], "html", null, true);
                echo "\" class=\"teaser-image\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['videoImage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "                    </div>

                    <h3 class=\"teaser-headline\"><span class=\"text-shadow\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "name", array(), "array"), "html", null, true);
            echo "</span></h3>

                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </div>
    </main>

";
    }

    public function getTemplateName()
    {
        return "videos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 22,  69 => 18,  65 => 16,  56 => 14,  52 => 13,  44 => 8,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "master.twig" %}*/
/* */
/* {% block main %}*/
/*     <main class="main">*/
/*         <div class="video-wrapper teaser-wrapper">*/
/*             {% for video in vimeoapi.videoGroup(record.group_id) %}*/
/*                 <a href="#" class="js-open-overlay teaser" data-overlay="{{ related.id }}" >*/
/*                     <img src="{{ video['pictures']['sizes'][2]['link'] }}" class="teaser-image--first">*/
/* */
/*                     <canvas class="halftone"></canvas>*/
/* */
/*                     <div class="teaser-rollover">*/
/*                         {% for videoImage in vimeoapi.videoImages(video['uri']) %}*/
/*                             <img src="{{ videoImage }}" class="teaser-image">*/
/*                         {% endfor %}*/
/*                     </div>*/
/* */
/*                     <h3 class="teaser-headline"><span class="text-shadow">{{ video['name'] }}</span></h3>*/
/* */
/*                 </a>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </main>*/
/* */
/* {% endblock %}*/
/* */
