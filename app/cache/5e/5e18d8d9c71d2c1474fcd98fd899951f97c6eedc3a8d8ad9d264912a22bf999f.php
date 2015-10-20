<?php

/* werbung.twig */
class __TwigTemplate_02538a8acf14561491b5054a3dfe10d939122e93c763409451e2587c2be15aae extends Twig_Template
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
        $this->loadTemplate("_html_head.twig", "werbung.twig", 1)->display($context);
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
        $this->loadTemplate("_header.twig", "werbung.twig", 17)->display($context);
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
                echo "                ";
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
        echo "


        <div class=\"teaser-wrapper\">
            ";
        // line 46
        echo "            ";
        $template_storage = new Bolt\Storage($context['app']);
        $context['records'] =         $template_storage->getContent("entries/latest/6", array("paging" => true) );
        // line 47
        echo "
            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 49
            echo "
                <a href=\"#\" class=\"js-open-overlay teaser\" data-overlay=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "id", array()), "html", null, true);
            echo "\">

                    <img src=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["vimeoapi"]) ? $context["vimeoapi"] : null), "videoCall", array(0 => $this->getAttribute($context["record"], "videoid", array())), "method"), 0, array(), "array"), "html", null, true);
            echo "\" class=\"teaser-image--first\">


                    <div class=\"teaser-rollover\">
                        ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["vimeoapi"]) ? $context["vimeoapi"] : null), "videoCall", array(0 => $this->getAttribute($context["record"], "videoid", array())), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
                // line 57
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $context["video"], "html", null, true);
                echo "\"  class=\"teaser-image\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "
                    </div>


                    <h3 class=\"teaser-headline headline\"><span class=\"text-shadow\">";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["record"], "video", array()), "title", array()), "html", null, true);
            echo "</span></h3>
                </a>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        </div>

        <canvas id=\"canvas\"> </canvas>

    </div>
</main>
";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 74
            echo "<div class=\"overlay js-overlay js-overlay-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "id", array()), "html", null, true);
            echo "\">
        <button class=\"close close-overlay js-close-overlay\">
            <svg viewBox=\"0 0 50 50\" class=\"icon\">
                <use xlink:href=\"#x\"></use>
            </svg>
        </button>
            ";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["record"], "video", array()), "responsive", array()), "html", null, true);
            echo "
        <div class=\"content\">
            <div class=\"headline\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["record"], "video", array()), "title", array()), "html", null, true);
            echo "</div>

            ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "body", array()), "html", null, true);
            echo "
        </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "

<!-- End Main Content -->





";
        // line 96
        $this->loadTemplate("_footer.twig", "werbung.twig", 96)->display($context);
    }

    public function getTemplateName()
    {
        return "werbung.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 96,  190 => 88,  180 => 84,  175 => 82,  170 => 80,  160 => 74,  156 => 73,  148 => 67,  138 => 63,  132 => 59,  123 => 57,  119 => 56,  112 => 52,  107 => 50,  104 => 49,  100 => 48,  97 => 47,  93 => 46,  87 => 38,  81 => 35,  77 => 34,  74 => 33,  70 => 31,  64 => 29,  62 => 28,  59 => 27,  56 => 25,  54 => 24,  51 => 23,  49 => 22,  43 => 18,  41 => 17,  28 => 7,  21 => 2,  19 => 1,);
    }
}
/* {% include '_html_head.twig' %}*/
/* */
/* <!-- Main Page Content and Sidebar -->*/
/* */
/*     <!-- Main Blog Content -->*/
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
/*             {% set home = record %}*/
/* */
/*             {# display something introduction-like.. #}*/
/* */
/*             {% if home.body is not empty %}*/
/*                 {{ home.body }}*/
/*             {% endif %}*/
/* */
/*         {% else %}*/
/*         <p>*/
/*             {{ __('Content for home not found!') }}*/
/*             {{ __("You should set 'homepage:' in your 'app/config/config.yml' to an existing record. Make sure that the content is published, otherwise it will not be shown.") }}*/
/*         </p>*/
/*         {% endif %}*/
/* */
/* */
/* */
/*         <div class="teaser-wrapper">*/
/*             {# Here we use 'setcontent' to set the variable 'records' to "entries/latest/6",*/
/*             which is shorthand for "the 6 latest records in Entries. Note that we are*/
/*             requesting multiple entries, so 'records' will be an array containing each*/
/*             of the entries. That's why we use the 'for' loop to iterate over them all. #}*/
/*             {% setcontent records = "entries/latest/6" allowpaging %}*/
/* */
/*             {% for record in records %}*/
/* */
/*                 <a href="#" class="js-open-overlay teaser" data-overlay="{{ record.id }}">*/
/* */
/*                     <img src="{{ vimeoapi.videoCall(record.videoid)[0] }}" class="teaser-image--first">*/
/* */
/* */
/*                     <div class="teaser-rollover">*/
/*                         {% for video in vimeoapi.videoCall(record.videoid) %}*/
/*                         <img src="{{ video }}"  class="teaser-image">*/
/*                         {% endfor %}*/
/* */
/*                     </div>*/
/* */
/* */
/*                     <h3 class="teaser-headline headline"><span class="text-shadow">{{ record.video.title }}</span></h3>*/
/*                 </a>*/
/* */
/*             {% endfor %}*/
/*         </div>*/
/* */
/*         <canvas id="canvas"> </canvas>*/
/* */
/*     </div>*/
/* </main>*/
/* {% for record in records %}*/
/* <div class="overlay js-overlay js-overlay-{{ record.id }}">*/
/*         <button class="close close-overlay js-close-overlay">*/
/*             <svg viewBox="0 0 50 50" class="icon">*/
/*                 <use xlink:href="#x"></use>*/
/*             </svg>*/
/*         </button>*/
/*             {{ record.video.responsive}}*/
/*         <div class="content">*/
/*             <div class="headline">{{ record.video.title }}</div>*/
/* */
/*             {{ record.body }}*/
/*         </div>*/
/* </div>*/
/* {% endfor %}*/
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
