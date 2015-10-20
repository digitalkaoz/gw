<?php

/* editfile/editfile.twig */
class __TwigTemplate_3d4a88100f21870f4b38bcabd88e7af7e7a31f833f1b5fc09348c3998b901831 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("_base/_page-nav.twig", "editfile/editfile.twig", 3);
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
        echo "Settings/Configuration";
    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        echo (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "write_allowed", array())) ? ($this->env->getExtension('Bolt')->trans("page.edit-file.title.edit")) : ($this->env->getExtension('Bolt')->trans("page.edit-file.title.view")));
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
        $context["macro"] = $this->loadTemplate("_macro/_macro.twig", "editfile/editfile.twig", 13);
        // line 14
        echo "    ";
        $context["__internal_010f74b86d186ca5a3ebbd1ee6dbf0be2b02ff4ca1eeb3786e4e129c85c8d900"] = $this->loadTemplate("_macro/_files_path.twig", "editfile/editfile.twig", 14);
        // line 15
        echo "
    ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("editcontent.msg", array("change_quit" => $this->env->getExtension('Bolt')->trans("You have unfinished changes on this page. If you continue without saving, you will lose these changes."), "saving" => $this->env->getExtension('Bolt')->trans("Saving …"))), "html", null, true);
        // line 19
        echo "

    ";
        // line 21
        $context["attr_text"] = array("_bind" => array(0 => "editfile", 1 => array("readonly" => (($this->getAttribute(        // line 22
(isset($context["context"]) ? $context["context"] : null), "write_allowed", array())) ? (false) : (true)))), "class" => "CodeMirror-scroll", "id" => "form_contents", "name" => "form[contents]", "required" => false, "style" => "width: 98%; min-height: 350px; white-space: pre; word-wrap: normal; overflow-x: scroll;");
        // line 29
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 32
        echo $context["__internal_010f74b86d186ca5a3ebbd1ee6dbf0be2b02ff4ca1eeb3786e4e129c85c8d900"]->getfiles_path($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pathsegments", array()), $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), array("path" => "", "namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array())));
        echo "


            <form method=\"post\" class=\"form-inline\" id=\"editfile\" autocomplete=\"off\">
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()), "_token", array()), 'widget');
        echo "

                <div>
                    <textarea";
        // line 39
        echo $context["macro"]->getattr((isset($context["attr_text"]) ? $context["attr_text"] : null));
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()), "vars", array()), "value", array()), "contents", array()), "html", null, true);
        echo "</textarea>
                </div>

                <div>
                    <button type=\"button\" id=\"saveeditfile\" class=\"btn btn-primary\" ";
        // line 43
        if ( !$this->getAttribute((isset($context["context"]) ? $context["context"] : null), "write_allowed", array())) {
            echo "disabled";
        }
        echo ">
                        <i class=\"fa fa-flag\"></i> ";
        // line 44
        echo $this->env->getExtension('Bolt')->trans("page.edit-file.button.save");
        echo "
                    </button>
                    <a class=\"btn btn-default confirm ";
        // line 46
        if ( !$this->getAttribute((isset($context["context"]) ? $context["context"] : null), "write_allowed", array())) {
            echo "disabled";
        }
        echo "\" style=\"margin-left: 24px;\"
                       data-confirm=\"";
        // line 47
        echo $this->env->getExtension('Bolt')->trans("page.edit-file.confirm-revert");
        echo "\"
                       href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fileedit", array("namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "file" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "file", array()))), "html", null, true);
        echo "\"
                    >
                        <i class=\"fa fa-undo\"></i> ";
        // line 50
        echo $this->env->getExtension('Bolt')->trans("page.edit-file.button.revert");
        echo "
                    </a>

                  <div class=\"relatedfiles\">
                    ";
        // line 54
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filegroup", array())) > 1)) {
            // line 55
            echo "                      ";
            echo $this->env->getExtension('Bolt')->trans("page.edit-file.note-related");
            echo "
                      ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filegroup", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["related"]) {
                // line 57
                echo "                        ";
                if (($context["related"] != $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "basename", array()))) {
                    // line 58
                    echo "                          <a class=\"btn btn-tertiary btn-small\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fileedit", array("namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "file" => ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "additionalpath", array()) . $context["related"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["related"], "html", null, true);
                    echo "</a>
                        ";
                }
                // line 60
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                    ";
        }
        // line 62
        echo "                  </div>
                </div>

            <p class='lastsaved' style='padding-top: 12px;'>
                ";
        // line 66
        echo $this->env->getExtension('Bolt')->trans("Saved on:");
        echo "
                <strong>";
        // line 67
        echo $this->env->getExtension('Bolt')->localeDateTime($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "datechanged", array()), "%c");
        echo "</strong>
                <small>(";
        // line 68
        echo $context["macro"]->getdatetime($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "datechanged", array()));
        echo ")</small>
            </p>

            </form>
        </div>
    </div>

    ";
        // line 75
        if ( !$this->env->getExtension('Bolt')->isMobileClient()) {
            // line 76
            echo "        ";
            if (twig_in_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filetype", array()), array(0 => "twig", 1 => "html", 2 => "htm"))) {
                // line 77
                echo "            ";
                $context["codemirror"] = array(0 => "xml", 1 => "javascript", 2 => "css", 3 => "htmlmixed");
                // line 78
                echo "        ";
            } elseif (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filetype", array()) == "php")) {
                // line 79
                echo "            ";
                $context["codemirror"] = array(0 => "matchbrackets", 1 => "javascript", 2 => "css", 3 => "htmlmixed", 4 => "clike", 5 => "php");
                // line 80
                echo "        ";
            } elseif (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filetype", array()) == "yml")) {
                // line 81
                echo "            ";
                $context["codemirror"] = array(0 => "yaml");
                // line 82
                echo "        ";
            } elseif (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filetype", array()) == "md")) {
                // line 83
                echo "            ";
                $context["codemirror"] = array(0 => "markdown");
                // line 84
                echo "        ";
            } elseif (twig_in_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filetype", array()), array(0 => "css", 1 => "less"))) {
                // line 85
                echo "            ";
                $context["codemirror"] = "css";
                // line 86
                echo "        ";
            } elseif (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filetype", array()) == "js")) {
                // line 87
                echo "            ";
                $context["codemirror"] = array(0 => "javascript");
                // line 88
                echo "        ";
            } else {
                // line 89
                echo "            ";
                $context["codemirror"] = array();
                // line 90
                echo "        ";
            }
            // line 91
            echo "
        ";
            // line 93
            echo "        <link rel=\"stylesheet\" property=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
            echo "view/js/ckeditor/plugins/codemirror/css/codemirror.min.css\">
        <script src=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
            echo "view/js/ckeditor/ckeditor.js\"></script>
        <script src=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
            echo "view/js/ckeditor/plugins/codemirror/js/codemirror.min.js\"></script>
        ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["codemirror"]) ? $context["codemirror"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 97
                echo "            <script src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
                echo "view/js/ckeditor/plugins/codemirror/plugins/";
                echo twig_escape_filter($this->env, $context["file"], "html", null, true);
                echo ".min.js\"></script>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "    ";
        }
        // line 100
        echo "
";
    }

    public function getTemplateName()
    {
        return "editfile/editfile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 100,  265 => 99,  254 => 97,  250 => 96,  246 => 95,  242 => 94,  237 => 93,  234 => 91,  231 => 90,  228 => 89,  225 => 88,  222 => 87,  219 => 86,  216 => 85,  213 => 84,  210 => 83,  207 => 82,  204 => 81,  201 => 80,  198 => 79,  195 => 78,  192 => 77,  189 => 76,  187 => 75,  177 => 68,  173 => 67,  169 => 66,  163 => 62,  160 => 61,  154 => 60,  146 => 58,  143 => 57,  139 => 56,  134 => 55,  132 => 54,  125 => 50,  120 => 48,  116 => 47,  110 => 46,  105 => 44,  99 => 43,  90 => 39,  84 => 36,  77 => 32,  72 => 29,  70 => 22,  69 => 21,  65 => 19,  63 => 16,  60 => 15,  57 => 14,  55 => 13,  52 => 12,  49 => 11,  43 => 9,  37 => 7,  31 => 5,  11 => 3,);
    }
}
/* {# Page: NavSecondary > Configuration > Main configuration | Contenttypes | Taxonomy | ... #}*/
/* */
/* {% extends '_base/_page-nav.twig' %}*/
/* */
/* {% block page_nav 'Settings/Configuration' %}*/
/* */
/* {% block page_title context.write_allowed ? __('page.edit-file.title.edit') : __('page.edit-file.title.view') %}*/
/* */
/* {% block page_subtitle context.basename %}*/
/* */
/* {% block page_main %}*/
/* */
/*     {% import '_macro/_macro.twig' as macro %}*/
/*     {% from '_macro/_files_path.twig' import files_path %}*/
/* */
/*     {{ data('editcontent.msg', {*/
/*         'change_quit': __('You have unfinished changes on this page. If you continue without saving, you will lose these changes.'),*/
/*         'saving':      __('Saving …')*/
/*     }) }}*/
/* */
/*     {% set attr_text = {*/
/*         _bind:     ['editfile', {readonly: context.write_allowed ? false : true}],*/
/*         class:     'CodeMirror-scroll',*/
/*         id:        'form_contents',*/
/*         name:      'form[contents]',*/
/*         required:  false,*/
/*         style:     'width: 98%; min-height: 350px; white-space: pre; word-wrap: normal; overflow-x: scroll;',*/
/*     } %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/*             {{ files_path(context.pathsegments, context.namespace, {'path': '', 'namespace': context.namespace}) }}*/
/* */
/* */
/*             <form method="post" class="form-inline" id="editfile" autocomplete="off">*/
/*                 {{ form_widget(context.form._token) }}*/
/* */
/*                 <div>*/
/*                     <textarea{{ macro.attr(attr_text) }}>{{ context.form.vars.value.contents }}</textarea>*/
/*                 </div>*/
/* */
/*                 <div>*/
/*                     <button type="button" id="saveeditfile" class="btn btn-primary" {% if not context.write_allowed %}disabled{% endif %}>*/
/*                         <i class="fa fa-flag"></i> {{ __('page.edit-file.button.save') }}*/
/*                     </button>*/
/*                     <a class="btn btn-default confirm {% if not context.write_allowed %}disabled{% endif %}" style="margin-left: 24px;"*/
/*                        data-confirm="{{ __("page.edit-file.confirm-revert") }}"*/
/*                        href="{{ path('fileedit', {'namespace': context.namespace, 'file': context.file}) }}"*/
/*                     >*/
/*                         <i class="fa fa-undo"></i> {{ __("page.edit-file.button.revert") }}*/
/*                     </a>*/
/* */
/*                   <div class="relatedfiles">*/
/*                     {% if context.filegroup|length > 1 %}*/
/*                       {{ __("page.edit-file.note-related") }}*/
/*                       {% for related in context.filegroup %}*/
/*                         {% if related != context.basename %}*/
/*                           <a class="btn btn-tertiary btn-small" href="{{ path('fileedit', {'namespace': context.namespace, 'file': context.additionalpath ~ related}) }}">{{ related }}</a>*/
/*                         {% endif %}*/
/*                       {% endfor %}*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/* */
/*             <p class='lastsaved' style='padding-top: 12px;'>*/
/*                 {{ __('Saved on:') }}*/
/*                 <strong>{{ context.datechanged|localdate("%c") }}</strong>*/
/*                 <small>({{ macro.datetime(context.datechanged) }})</small>*/
/*             </p>*/
/* */
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% if not ismobileclient() %}*/
/*         {% if context.filetype in ['twig', 'html', 'htm'] %}*/
/*             {% set codemirror = ['xml', 'javascript', 'css', 'htmlmixed'] %}*/
/*         {% elseif context.filetype == "php" %}*/
/*             {% set codemirror = ['matchbrackets', 'javascript', 'css', 'htmlmixed', 'clike', 'php'] %}*/
/*         {% elseif context.filetype == "yml" %}*/
/*             {% set codemirror = ['yaml'] %}*/
/*         {% elseif context.filetype == "md" %}*/
/*             {% set codemirror = ['markdown'] %}*/
/*         {% elseif context.filetype in ['css', 'less'] %}*/
/*             {% set codemirror = 'css' %}*/
/*         {% elseif context.filetype == "js" %}*/
/*             {% set codemirror = ['javascript'] %}*/
/*         {% else %}*/
/*             {% set codemirror = [] %}*/
/*         {% endif %}*/
/* */
/*         {# use the files includes in ckeditor/codemirror plugin, instead of duplicating files. #}*/
/*         <link rel="stylesheet" property="stylesheet" href="{{ paths.app }}view/js/ckeditor/plugins/codemirror/css/codemirror.min.css">*/
/*         <script src="{{ paths.app }}view/js/ckeditor/ckeditor.js"></script>*/
/*         <script src="{{ paths.app }}view/js/ckeditor/plugins/codemirror/js/codemirror.min.js"></script>*/
/*         {% for file in codemirror %}*/
/*             <script src="{{ paths.app }}view/js/ckeditor/plugins/codemirror/plugins/{{ file }}.min.js"></script>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* */
/* {% endblock page_main %}*/
/* */
