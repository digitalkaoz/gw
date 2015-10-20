<?php

/* editcontent/_includes-data.twig */
class __TwigTemplate_af77391551b2897d472e1f38ba8d04fba4f97bd105bbdd7d4975540aa013c1bf extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        $context["used_fieldtypes"] = array();
        // line 4
        echo "
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "fields", array()));
        foreach ($context['_seq'] as $context["key"] => $context["field"]) {
            // line 7
            echo "    ";
            if (!twig_in_filter($this->getAttribute($context["field"], "type", array()), (isset($context["used_fieldtypes"]) ? $context["used_fieldtypes"] : null))) {
                // line 8
                echo "        ";
                $context["used_fieldtypes"] = twig_array_merge((isset($context["used_fieldtypes"]) ? $context["used_fieldtypes"] : null), array(0 => $this->getAttribute($context["field"], "type", array())));
                // line 9
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
";
        // line 13
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => "templatefields"), "method", false, true), "contenttype", array(), "any", false, true), "fields", array(), "any", true, true)) {
            // line 14
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => "templatefields"), "method"), "contenttype", array()), "fields", array()));
            foreach ($context['_seq'] as $context["key"] => $context["field"]) {
                // line 15
                echo "        ";
                if (!twig_in_filter($this->getAttribute($context["field"], "type", array()), (isset($context["used_fieldtypes"]) ? $context["used_fieldtypes"] : null))) {
                    // line 16
                    echo "            ";
                    $context["used_fieldtypes"] = twig_array_merge((isset($context["used_fieldtypes"]) ? $context["used_fieldtypes"] : null), array(0 => $this->getAttribute($context["field"], "type", array())));
                    // line 17
                    echo "        ";
                }
                // line 18
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        if (twig_in_filter("html", (isset($context["used_fieldtypes"]) ? $context["used_fieldtypes"] : null))) {
            // line 24
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
            echo "view/js/ckeditor/ckeditor.js\"></script>
";
        }
        // line 26
        echo "
";
        // line 27
        if (twig_in_filter("markdown", (isset($context["used_fieldtypes"]) ? $context["used_fieldtypes"] : null))) {
            // line 28
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
            echo "view/js/uikit/uikit.min.js\"></script>
    <script src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
            echo "view/js/uikit/marked.js\"></script>
    <script src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
            echo "view/js/uikit/codemirror-compressed.js\"></script>
    <script src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
            echo "view/js/uikit/htmleditor.js\"></script>
    <link rel=\"stylesheet\" property=\"stylesheet\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
            echo "view/js/ckeditor/plugins/codemirror/css/codemirror.min.css\">
    <link rel=\"stylesheet\" property=\"stylesheet\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
            echo "view/js/uikit/htmleditor.min.css\">
";
        }
        // line 35
        echo "
";
        // line 36
        if (twig_in_filter("geolocation", (isset($context["used_fieldtypes"]) ? $context["used_fieldtypes"] : null))) {
            // line 37
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("field.geolocation.title-pin", $this->env->getExtension('Bolt')->trans("field.geolocation.title-pin")), "html", null, true);
            echo "
    <script src=\"https://maps.google.com/maps/api/js?sensor=false\"></script>
";
        }
        // line 40
        echo "
";
        // line 41
        if (twig_in_filter("slug", (isset($context["used_fieldtypes"]) ? $context["used_fieldtypes"] : null))) {
            // line 42
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("field.slug.message.set", $this->env->getExtension('Bolt')->trans("field.slug.message.set")), "html", null, true);
            echo "
    ";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("field.slug.message.unlock", $this->env->getExtension('Bolt')->trans("field.slug.message.unlock")), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "editcontent/_includes-data.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 43,  132 => 42,  130 => 41,  127 => 40,  120 => 37,  118 => 36,  115 => 35,  110 => 33,  106 => 32,  102 => 31,  98 => 30,  94 => 29,  89 => 28,  87 => 27,  84 => 26,  78 => 24,  76 => 23,  73 => 22,  70 => 20,  63 => 18,  60 => 17,  57 => 16,  54 => 15,  49 => 14,  47 => 13,  44 => 11,  37 => 9,  34 => 8,  31 => 7,  27 => 6,  24 => 4,  22 => 3,  19 => 2,);
    }
}
/* {# Check which field types are used #}*/
/* */
/* {% set used_fieldtypes = [] %}*/
/* */
/* {# Regular fields #}*/
/* {% for key, field in context.contenttype.fields %}*/
/*     {% if field.type not in used_fieldtypes %}*/
/*         {% set used_fieldtypes = used_fieldtypes|merge([field.type]) %}*/
/*     {% endif %}*/
/* {% endfor %}*/
/* */
/* {# Templatefield fields #}*/
/* {% if context.content.get('templatefields').contenttype.fields is defined %}*/
/*     {% for key, field in context.content.get('templatefields').contenttype.fields %}*/
/*         {% if field.type not in used_fieldtypes %}*/
/*             {% set used_fieldtypes = used_fieldtypes|merge([field.type]) %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* {% endif %}*/
/* */
/* {# Output includes #}*/
/* */
/* {% if 'html' in used_fieldtypes %}*/
/*     <script src="{{ paths.app }}view/js/ckeditor/ckeditor.js"></script>*/
/* {% endif %}*/
/* */
/* {% if 'markdown' in used_fieldtypes %}*/
/*     <script src="{{ paths.app }}view/js/uikit/uikit.min.js"></script>*/
/*     <script src="{{ paths.app }}view/js/uikit/marked.js"></script>*/
/*     <script src="{{ paths.app }}view/js/uikit/codemirror-compressed.js"></script>*/
/*     <script src="{{ paths.app }}view/js/uikit/htmleditor.js"></script>*/
/*     <link rel="stylesheet" property="stylesheet" href="{{ paths.app }}view/js/ckeditor/plugins/codemirror/css/codemirror.min.css">*/
/*     <link rel="stylesheet" property="stylesheet" href="{{ paths.app }}view/js/uikit/htmleditor.min.css">*/
/* {% endif %}*/
/* */
/* {% if 'geolocation' in used_fieldtypes %}*/
/*     {{ data('field.geolocation.title-pin', __('field.geolocation.title-pin')) }}*/
/*     <script src="https://maps.google.com/maps/api/js?sensor=false"></script>*/
/* {% endif %}*/
/* */
/* {% if 'slug' in used_fieldtypes %}*/
/*     {{ data('field.slug.message.set', __('field.slug.message.set')) }}*/
/*     {{ data('field.slug.message.unlock', __('field.slug.message.unlock')) }}*/
/* {% endif %}*/
/* */
