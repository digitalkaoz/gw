<?php

/* videos.twig */
class __TwigTemplate_4aeb35b6bba76d95bf49fcfecbc154d424db5456b59c8599a87dae8cbdbbb088 extends Twig_Template
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
        <div class=\"video-wrapper\">
            <div class=\"teaser-wrapper\">
                ";
        // line 7
        $context["relatedrecords"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "related", array(), "method");
        // line 8
        echo "                ";
        if ( !twig_test_empty((isset($context["relatedrecords"]) ? $context["relatedrecords"] : null))) {
            // line 9
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["relatedrecords"]) ? $context["relatedrecords"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["related"]) {
                // line 10
                echo "                        <a href=\"#\" class=\"js-open-overlay teaser\" data-overlay=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["related"], "id", array()), "html", null, true);
                echo "\">
                            <div class=\"teaser-image--first\" style=\"background-image:
                                    radial-gradient(circle farthest-corner, transparent 0%, transparent 35%, #fff 30%, #fff 40%, transparent 90%),
                                    radial-gradient(circle farthest-corner at 0px 0px, transparent 0%, transparent 20%, #fff 15%, #fff 20%, transparent 50%),
                                    radial-gradient(circle farthest-corner at 6px 6px, transparent 0%, transparent 20%, #fff 15%, #fff 20%, transparent 50%),
                                    radial-gradient(circle farthest-corner at 0px 6px, transparent 0%, transparent 20%, #fff 15%, #fff 20%, transparent 40%),
                                    radial-gradient(circle farthest-corner at 6px 0px, transparent 0%, transparent 20%, #fff 15%, #fff 20%, transparent 50%),
                                    url('";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["vimeoapi"]) ? $context["vimeoapi"] : null), "videoImages", array(0 => $this->getAttribute($context["related"], "videoid", array())), "method"), 0, array(), "array"), "html", null, true);
                echo "');
                                \">

                            </div>
                            <div class=\"teaser-rollover\">
                                ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["vimeoapi"]) ? $context["vimeoapi"] : null), "videoImages", array(0 => $this->getAttribute($context["related"], "videoid", array())), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
                    // line 23
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $context["video"], "html", null, true);
                    echo "\" class=\"teaser-image\">
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "                            </div>

                            <h3 class=\"teaser-headline\"><span class=\"text-shadow\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vimeoapi"]) ? $context["vimeoapi"] : null), "videoTitle", array(0 => $this->getAttribute($context["related"], "videoid", array())), "method"), "html", null, true);
                echo "</span></h3>

                        </a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                ";
        }
        // line 32
        echo "            </div>
        </div>
    </main>
    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["relatedrecords"]) ? $context["relatedrecords"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["related"]) {
            // line 36
            echo "    <div class=\"overlay js-overlay js-overlay-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["related"], "id", array()), "html", null, true);
            echo "\">
        <button class=\"close close-overlay js-close-overlay\">
            <svg viewBox=\"0 0 50 50\" class=\"icon\">
                <use xlink:href=\"#x\"></use>
            </svg>
        </button>
        <div class=\"video\">

            ";
            // line 44
            echo $this->getAttribute((isset($context["vimeoapi"]) ? $context["vimeoapi"] : null), "video", array(0 => $this->getAttribute($context["related"], "videoid", array())), "method");
            echo "
        </div>
        <div class=\"content\">
            <div class=\"headline\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vimeoapi"]) ? $context["vimeoapi"] : null), "videoTitle", array(0 => $this->getAttribute($context["related"], "videoid", array())), "method"), "html", null, true);
            echo "</div>

            ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["related"], "body", array()), "html", null, true);
            echo "
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  127 => 49,  122 => 47,  116 => 44,  104 => 36,  100 => 35,  95 => 32,  92 => 31,  82 => 27,  78 => 25,  69 => 23,  65 => 22,  57 => 17,  46 => 10,  41 => 9,  38 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "master.twig" %}*/
/* */
/* {% block main %}*/
/*     <main class="main">*/
/*         <div class="video-wrapper">*/
/*             <div class="teaser-wrapper">*/
/*                 {% set relatedrecords = record.related() %}*/
/*                 {% if relatedrecords is not empty %}*/
/*                     {% for related in relatedrecords|reverse %}*/
/*                         <a href="#" class="js-open-overlay teaser" data-overlay="{{ related.id }}">*/
/*                             <div class="teaser-image--first" style="background-image:*/
/*                                     radial-gradient(circle farthest-corner, transparent 0%, transparent 35%, #fff 30%, #fff 40%, transparent 90%),*/
/*                                     radial-gradient(circle farthest-corner at 0px 0px, transparent 0%, transparent 20%, #fff 15%, #fff 20%, transparent 50%),*/
/*                                     radial-gradient(circle farthest-corner at 6px 6px, transparent 0%, transparent 20%, #fff 15%, #fff 20%, transparent 50%),*/
/*                                     radial-gradient(circle farthest-corner at 0px 6px, transparent 0%, transparent 20%, #fff 15%, #fff 20%, transparent 40%),*/
/*                                     radial-gradient(circle farthest-corner at 6px 0px, transparent 0%, transparent 20%, #fff 15%, #fff 20%, transparent 50%),*/
/*                                     url('{{ vimeoapi.videoImages(related.videoid)[0] }}');*/
/*                                 ">*/
/* */
/*                             </div>*/
/*                             <div class="teaser-rollover">*/
/*                                 {% for video in vimeoapi.videoImages(related.videoid) %}*/
/*                                     <img src="{{ video }}" class="teaser-image">*/
/*                                 {% endfor %}*/
/*                             </div>*/
/* */
/*                             <h3 class="teaser-headline"><span class="text-shadow">{{ vimeoapi.videoTitle(related.videoid) }}</span></h3>*/
/* */
/*                         </a>*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     </main>*/
/*     {% for related in relatedrecords %}*/
/*     <div class="overlay js-overlay js-overlay-{{ related.id }}">*/
/*         <button class="close close-overlay js-close-overlay">*/
/*             <svg viewBox="0 0 50 50" class="icon">*/
/*                 <use xlink:href="#x"></use>*/
/*             </svg>*/
/*         </button>*/
/*         <div class="video">*/
/* */
/*             {{ vimeoapi.video(related.videoid)|raw }}*/
/*         </div>*/
/*         <div class="content">*/
/*             <div class="headline">{{ vimeoapi.videoTitle(related.videoid) }}</div>*/
/* */
/*             {{ related.body }}*/
/*         </div>*/
/*     </div>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
