<?php

/* editlocale/editlocale.twig */
class __TwigTemplate_a468b850ec7f6a0d3264f4f2a5811c831d9d3a7e7ab29ae48154d81524b5f6a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("_base/_page-nav.twig", "editlocale/editlocale.twig", 3);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_nav($context, array $blocks = array())
    {
        echo "Settings/Translations";
    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        echo (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "write_allowed", array())) ? ($this->env->getExtension('Bolt')->trans("page.edit-locale.title.edit")) : ($this->env->getExtension('Bolt')->trans("page.edit-locale.title.view")));
    }

    // line 9
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "basename", array()), "html", null, true);
    }

    // line 11
    public function block_page_main($context, array $blocks = array())
    {
        // line 12
        echo "
    ";
        // line 13
        $context["macro"] = $this->loadTemplate("_macro/_macro.twig", "editlocale/editlocale.twig", 13);
        // line 14
        echo "
    ";
        // line 15
        $context["attr_text"] = array("_bind" => (($this->env->getExtension('Bolt')->isMobileClient()) ? ("") : (array(0 => "editlocale", 1 => array("readonly" => (($this->getAttribute(        // line 16
(isset($context["context"]) ? $context["context"] : null), "write_allowed", array())) ? (false) : (true)))))), "class" => "CodeMirror-scroll", "id" => "form_contents", "name" => "form[contents]", "required" => true, "style" => "width: 98%;");
        // line 23
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <form method=\"post\" class=\"form-inline\" autocomplete=\"off\">
                <div>
                    <textarea";
        // line 28
        echo $context["macro"]->getattr((isset($context["attr_text"]) ? $context["attr_text"] : null));
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()), "vars", array()), "value", array()), "contents", array()), "html", null, true);
        echo "</textarea>
                </div>
                ";
        // line 30
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "write_allowed", array())) {
            // line 31
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()), "_token", array()), 'widget');
            echo "
                    <br>
                    <input type=\"submit\" id=\"saveeditlocale\" name=\"submit\" value=\"";
            // line 33
            echo $this->env->getExtension('Bolt')->trans("page.edit-locale.button.save");
            echo "\" class=\"btn btn-primary\" ";
            if ( !$this->getAttribute((isset($context["context"]) ? $context["context"] : null), "write_allowed", array())) {
                echo "disabled";
            }
            echo " />
                ";
        }
        // line 35
        echo "            </form>
        </div>
    </div>

    ";
        // line 39
        if ( !$this->env->getExtension('Bolt')->isMobileClient()) {
            // line 40
            echo "        ";
            // line 41
            echo "        <link rel=\"stylesheet\" property=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
            echo "view/js/ckeditor/plugins/codemirror/css/codemirror.min.css\">
        <script src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
            echo "view/js/ckeditor/ckeditor.js\"></script>
        <script src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
            echo "view/js/ckeditor/plugins/codemirror/js/codemirror.min.js\"></script>
        <script src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
            echo "view/js/ckeditor/plugins/codemirror/plugins/yaml.min.js\"></script>
    ";
        }
        // line 46
        echo "
";
    }

    public function getTemplateName()
    {
        return "editlocale/editlocale.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 46,  117 => 44,  113 => 43,  109 => 42,  104 => 41,  102 => 40,  100 => 39,  94 => 35,  85 => 33,  79 => 31,  77 => 30,  70 => 28,  63 => 23,  61 => 16,  60 => 15,  57 => 14,  55 => 13,  52 => 12,  49 => 11,  43 => 9,  37 => 7,  31 => 5,  11 => 3,);
    }
}
/* {# Page: NavSecondary > Translations > Messages | Long messages | Contentypes #}*/
/* */
/* {% extends '_base/_page-nav.twig' %}*/
/* */
/* {% block page_nav 'Settings/Translations' %}*/
/* */
/* {% block page_title context.write_allowed ? __('page.edit-locale.title.edit') : __('page.edit-locale.title.view') %}*/
/* */
/* {% block page_subtitle context.basename %}*/
/* */
/* {% block page_main %}*/
/* */
/*     {% import '_macro/_macro.twig' as macro %}*/
/* */
/*     {% set attr_text = {*/
/*         _bind:     ismobileclient() ? '' : ['editlocale', {readonly: context.write_allowed ? false : true}],*/
/*         class:     'CodeMirror-scroll',*/
/*         id:        'form_contents',*/
/*         name:      'form[contents]',*/
/*         required:  true,*/
/*         style:     'width: 98%;',*/
/*     } %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/*             <form method="post" class="form-inline" autocomplete="off">*/
/*                 <div>*/
/*                     <textarea{{ macro.attr(attr_text) }}>{{ context.form.vars.value.contents }}</textarea>*/
/*                 </div>*/
/*                 {% if context.write_allowed %}*/
/*                     {{ form_widget(context.form._token) }}*/
/*                     <br>*/
/*                     <input type="submit" id="saveeditlocale" name="submit" value="{{ __('page.edit-locale.button.save') }}" class="btn btn-primary" {% if not context.write_allowed %}disabled{% endif %} />*/
/*                 {% endif %}*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% if not ismobileclient() %}*/
/*         {# use the files includes in ckeditor/codemirror plugin, instead of duplicating files. #}*/
/*         <link rel="stylesheet" property="stylesheet" href="{{ paths.app }}view/js/ckeditor/plugins/codemirror/css/codemirror.min.css">*/
/*         <script src="{{ paths.app }}view/js/ckeditor/ckeditor.js"></script>*/
/*         <script src="{{ paths.app }}view/js/ckeditor/plugins/codemirror/js/codemirror.min.js"></script>*/
/*         <script src="{{ paths.app }}view/js/ckeditor/plugins/codemirror/plugins/yaml.min.js"></script>*/
/*     {% endif %}*/
/* */
/* {% endblock page_main %}*/
/* */
