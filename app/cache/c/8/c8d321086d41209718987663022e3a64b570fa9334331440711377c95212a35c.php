<?php

/* editcontent/fields/_video.twig */
class __TwigTemplate_7b946892165c50c8314b435700a04f06344e6a2b47fcc10cb667d95dfd8f5d18 extends Twig_Template
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
        $context["option"] = array("label" => (($this->getAttribute(        // line 4
(isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), "")) : ("")), "info" => (($this->getAttribute(        // line 5
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "info.upload.video")) : ("info.upload.video")));
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $context["video"] = $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method");
        // line 11
        echo "
";
        // line 12
        $context["videotitle"] = (($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title", array(), "any", true, true)) ? (((("\"<b>" . $this->env->getExtension('Bolt')->trim($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title", array()), 18)) . "</b>\" by ") . $this->env->getExtension('Bolt')->trim($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "authorname", array()), 18))) : (""));
        // line 13
        echo "
";
        // line 14
        $context["attr_url"] = array("_bind" => array(0 => "video", 1 => array("key" =>         // line 15
(isset($context["key"]) ? $context["key"] : null))), "class" => "form-control", "id" => ("video-" .         // line 17
(isset($context["key"]) ? $context["key"] : null)), "name" => (        // line 18
(isset($context["name"]) ? $context["name"] : null) . "[url]"), "type" => "url", "placeholder" => ($this->env->getExtension('Bolt')->trans("field.video.placeholder.url") . " …"), "value" => (($this->getAttribute(        // line 21
(isset($context["video"]) ? $context["video"] : null), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "url", array()), "")) : ("")));
        // line 23
        echo "
";
        // line 24
        $context["attr_width"] = array("class" => "form-control pull-left", "id" => (("video-" .         // line 26
(isset($context["key"]) ? $context["key"] : null)) . "-width"), "name" => (        // line 27
(isset($context["name"]) ? $context["name"] : null) . "[width]"), "style" => "width: 80px; min-width: 80px;", "type" => "number", "value" => (($this->getAttribute(        // line 30
(isset($context["video"]) ? $context["video"] : null), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "width", array()), "")) : ("")));
        // line 32
        echo "
";
        // line 33
        $context["attr_height"] = array("class" => "form-control pull-left", "id" => (("video-" .         // line 35
(isset($context["key"]) ? $context["key"] : null)) . "-height"), "name" => (        // line 36
(isset($context["name"]) ? $context["name"] : null) . "[height]"), "style" => "width: 80px; min-width: 80px;", "type" => "number", "value" => (($this->getAttribute(        // line 39
(isset($context["video"]) ? $context["video"] : null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "height", array()), "")) : ("")));
        // line 41
        echo "
";
        // line 42
        $context["attr_hid_ratio"] = array("id" => (("video-" .         // line 43
(isset($context["key"]) ? $context["key"] : null)) . "-ratio"), "name" => (        // line 44
(isset($context["name"]) ? $context["name"] : null) . "[ratio]"), "type" => "hidden", "value" => (($this->getAttribute(        // line 46
(isset($context["video"]) ? $context["video"] : null), "ratio", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "ratio", array()), "")) : ("")));
        // line 48
        echo "
";
        // line 49
        $context["attr_hid_title"] = array("id" => (("video-" .         // line 50
(isset($context["key"]) ? $context["key"] : null)) . "-title"), "name" => (        // line 51
(isset($context["name"]) ? $context["name"] : null) . "[title]"), "readonly" => true, "type" => "hidden", "value" => (($this->getAttribute(        // line 54
(isset($context["video"]) ? $context["video"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title", array()), "")) : ("")));
        // line 56
        echo "
";
        // line 57
        $context["attr_hid_authorname"] = array("id" => (("video-" .         // line 58
(isset($context["key"]) ? $context["key"] : null)) . "-author_name"), "name" => (        // line 59
(isset($context["name"]) ? $context["name"] : null) . "[authorname]"), "readonly" => true, "type" => "hidden", "value" => (($this->getAttribute(        // line 62
(isset($context["video"]) ? $context["video"] : null), "authorname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "authorname", array()), "")) : ("")));
        // line 64
        echo "
";
        // line 65
        $context["attr_hid_authorurl"] = array("id" => (("video-" .         // line 66
(isset($context["key"]) ? $context["key"] : null)) . "-author_url"), "name" => (        // line 67
(isset($context["name"]) ? $context["name"] : null) . "[authorurl]"), "readonly" => true, "type" => "hidden", "value" => (($this->getAttribute(        // line 70
(isset($context["video"]) ? $context["video"] : null), "authorurl", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "authorurl", array()), "")) : ("")));
        // line 72
        echo "
";
        // line 73
        $context["attr_hid_html"] = array("id" => (("video-" .         // line 74
(isset($context["key"]) ? $context["key"] : null)) . "-html"), "name" => (        // line 75
(isset($context["name"]) ? $context["name"] : null) . "[html]"), "readonly" => true, "type" => "hidden", "value" => (($this->getAttribute(        // line 78
(isset($context["video"]) ? $context["video"] : null), "html", array(), "any", true, true)) ? (twig_replace_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "html", array()), array("\"" => "'"))) : ("")));
        // line 80
        echo "
";
        // line 81
        $context["attr_hid_thumbnail"] = array("id" => (("video-" .         // line 82
(isset($context["key"]) ? $context["key"] : null)) . "-thumbnail"), "name" => (        // line 83
(isset($context["name"]) ? $context["name"] : null) . "[thumbnail]"), "readonly" => true, "type" => "hidden", "value" => (($this->getAttribute(        // line 86
(isset($context["video"]) ? $context["video"] : null), "thumbnail", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "thumbnail", array()), "")) : ("")));
        // line 88
        echo "
";
        // line 90
        echo "
<fieldset class=\"video\">
    <label class=\"col-xs-12 control-label\">";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "infopop", array(0 => (isset($context["labelkey"]) ? $context["labelkey"] : null), 1 => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())), "method"), "html", null, true);
        echo "</label>
    <div class=\"col-sm-8\">
        <div class=\"form-group\">
            <div class=\"col-sm-12\">
                <label>";
        // line 96
        echo $this->env->getExtension('Bolt')->trans("field.video.label.url");
        echo "</label>
                <input";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_url"]) ? $context["attr_url"] : null)), "method"), "html", null, true);
        echo ">
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"col-sm-2\">
                <label class=\"control-label-inline\">";
        // line 103
        echo $this->env->getExtension('Bolt')->trans("field.video.label.size");
        echo "</label>
            </div>
            <div class=\"col-sm-10\">
                <input";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_width"]) ? $context["attr_width"] : null)), "method"), "html", null, true);
        echo ">
                <span class=\"pull-left\" style=\"margin: 6px 8px 0;\">×</span>
                <input";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_height"]) ? $context["attr_height"] : null)), "method"), "html", null, true);
        echo ">
                <span class=\"pull-left\" style=\"margin: 6px 8px 0;\">";
        // line 109
        echo $this->env->getExtension('Bolt')->trans("field.video.pixel");
        echo "</span>
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"col-sm-9\">
                <span><b>";
        // line 115
        echo $this->env->getExtension('Bolt')->trans("field.video.matched-video");
        echo "</b></span>
                <p id=\"video-";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
        echo "-text\">";
        echo (isset($context["videotitle"]) ? $context["videotitle"] : null);
        echo "</p>
            </div>

            <div class=\"hidden-xs col-sm-3\">
                <span class=\"hidden-xs\" style=\"float:right\">
                    <a href=\"#myModal\" role=\"button\" class=\"btn btn-default\" data-toggle=\"modal\">
                    <i class=\"fa fa-youtube-play\"></i>
                    ";
        // line 123
        echo $this->env->getExtension('Bolt')->trans("field.video.button.preview");
        echo "</a>
                </span>
            </div>

            <input";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_hid_ratio"]) ? $context["attr_hid_ratio"] : null)), "method"), "html", null, true);
        echo ">
            <input";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_hid_title"]) ? $context["attr_hid_title"] : null)), "method"), "html", null, true);
        echo ">
            <input";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_hid_authorname"]) ? $context["attr_hid_authorname"] : null)), "method"), "html", null, true);
        echo ">
            <input";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_hid_authorurl"]) ? $context["attr_hid_authorurl"] : null)), "method"), "html", null, true);
        echo ">
            <input";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_hid_html"]) ? $context["attr_hid_html"] : null)), "method"), "html", null, true);
        echo ">
            <input";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_hid_thumbnail"]) ? $context["attr_hid_thumbnail"] : null)), "method"), "html", null, true);
        echo ">
        </div>
    </div>

    <div class=\"col-sm-4\">
        <div class=\"right-on-large\">";
        // line 138
        echo "            <label>";
        echo $this->env->getExtension('Bolt')->trans("field.video.label.preview");
        echo "</label>
            <div class=\"imageholder\" id=\"thumbnail-";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
        echo "\">
                ";
        // line 140
        if ((($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "thumbnail", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "thumbnail", array()), "")) : (""))) {
            // line 141
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "thumbnail", array()), "html", null, true);
            echo "\" width=\"200\" height=\"150\">
                ";
        } else {
            // line 143
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "paths", array()), "app", array()), "html", null, true);
            echo "view/img/default_empty_4x3.png\" width=\"200\" height=\"150\">
                ";
        }
        // line 145
        echo "            </div>
        </div>
    </div>

    ";
        // line 150
        echo "    <div class=\"modal\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-body\">
                    ";
        // line 154
        if ($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "html", array(), "any", true, true)) {
            // line 155
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "html", array()), "html", null, true);
            echo "
                    ";
        } else {
            // line 157
            echo "                        <p>";
            echo $this->env->getExtension('Bolt')->trans("field.video.preview.no-url");
            echo "</p>
                    ";
        }
        // line 159
        echo "                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-tertiary \" data-dismiss=\"modal\" aria-hidden=\"true\">";
        // line 161
        echo $this->env->getExtension('Bolt')->trans("field.video.preview.button.close");
        echo "</button>
                </div>
            </div>
        </div>
    </div>

</fieldset>
";
    }

    public function getTemplateName()
    {
        return "editcontent/fields/_video.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 161,  263 => 159,  257 => 157,  251 => 155,  249 => 154,  243 => 150,  237 => 145,  231 => 143,  225 => 141,  223 => 140,  219 => 139,  214 => 138,  206 => 132,  202 => 131,  198 => 130,  194 => 129,  190 => 128,  186 => 127,  179 => 123,  167 => 116,  163 => 115,  154 => 109,  150 => 108,  145 => 106,  139 => 103,  130 => 97,  126 => 96,  119 => 92,  115 => 90,  112 => 88,  110 => 86,  109 => 83,  108 => 82,  107 => 81,  104 => 80,  102 => 78,  101 => 75,  100 => 74,  99 => 73,  96 => 72,  94 => 70,  93 => 67,  92 => 66,  91 => 65,  88 => 64,  86 => 62,  85 => 59,  84 => 58,  83 => 57,  80 => 56,  78 => 54,  77 => 51,  76 => 50,  75 => 49,  72 => 48,  70 => 46,  69 => 44,  68 => 43,  67 => 42,  64 => 41,  62 => 39,  61 => 36,  60 => 35,  59 => 33,  56 => 32,  54 => 30,  53 => 27,  52 => 26,  51 => 24,  48 => 23,  46 => 21,  45 => 18,  44 => 17,  43 => 15,  42 => 14,  39 => 13,  37 => 12,  34 => 11,  32 => 10,  29 => 9,  26 => 7,  24 => 5,  23 => 4,  22 => 3,  19 => 2,);
    }
}
/* {#=== OPTIONS ========================================================================================================#}*/
/* */
/* {% set option = {*/
/*     label:  field.label|default(''),*/
/*     info:   field.info|default('info.upload.video'),*/
/* } %}*/
/* */
/* {#=== INIT ===========================================================================================================#}*/
/* */
/* {% set video = context.content.get(contentkey) %}*/
/* */
/* {% set videotitle = (video.title is defined) ? '"<b>' ~ video.title|trimtext(18) ~ '</b>" by ' ~ video.authorname|trimtext(18) %}*/
/* */
/* {% set attr_url = {*/
/*     _bind:        ['video', {key: key}],*/
/*     class:        'form-control',*/
/*     id:           'video-' ~ key,*/
/*     name:         name ~ '[url]',*/
/*     type:         'url',*/
/*     placeholder:  __('field.video.placeholder.url') ~ ' …',*/
/*     value:        video.url|default(''),*/
/* } %}*/
/* */
/* {% set attr_width = {*/
/*     class:  'form-control pull-left',*/
/*     id:     'video-' ~ key ~ '-width',*/
/*     name:   name ~ '[width]',*/
/*     style:  'width: 80px; min-width: 80px;',*/
/*     type:   'number',*/
/*     value:  video.width|default(''),*/
/* } %}*/
/* */
/* {% set attr_height = {*/
/*     class:  'form-control pull-left',*/
/*     id:     'video-' ~ key ~ '-height',*/
/*     name:   name ~ '[height]',*/
/*     style:  'width: 80px; min-width: 80px;',*/
/*     type:   'number',*/
/*     value:  video.height|default(''),*/
/* } %}*/
/* */
/* {% set attr_hid_ratio = {*/
/*     id:        'video-' ~ key ~ '-ratio',*/
/*     name:      name ~ '[ratio]',*/
/*     type:      'hidden',*/
/*     value:     video.ratio|default(''),*/
/* } %}*/
/* */
/* {% set attr_hid_title = {*/
/*     id:        'video-' ~ key ~ '-title',*/
/*     name:      name ~ '[title]',*/
/*     readonly:  true,*/
/*     type:      'hidden',*/
/*     value:     video.title|default(''),*/
/* } %}*/
/* */
/* {% set attr_hid_authorname = {*/
/*     id:        'video-' ~ key ~ '-author_name',*/
/*     name:      name ~ '[authorname]',*/
/*     readonly:  true,*/
/*     type:      'hidden',*/
/*     value:     video.authorname|default(''),*/
/* } %}*/
/* */
/* {% set attr_hid_authorurl = {*/
/*     id:        'video-' ~ key ~ '-author_url',*/
/*     name:      name ~ '[authorurl]',*/
/*     readonly:  true,*/
/*     type:      'hidden',*/
/*     value:     video.authorurl|default(''),*/
/* } %}*/
/* */
/* {% set attr_hid_html = {*/
/*     id:        'video-' ~ key ~ '-html',*/
/*     name:      name ~ '[html]',*/
/*     readonly:  true,*/
/*     type:      'hidden',*/
/*     value:     (video.html is defined ? video.html|replace({'"': '\''}) : ''),*/
/* } %}*/
/* */
/* {% set attr_hid_thumbnail = {*/
/*     id:        'video-' ~ key ~ '-thumbnail',*/
/*     name:      name ~ '[thumbnail]',*/
/*     readonly:  true,*/
/*     type:      'hidden',*/
/*     value:     video.thumbnail|default(''),*/
/* } %}*/
/* */
/* {#=== FIELDSET =======================================================================================================#}*/
/* */
/* <fieldset class="video">*/
/*     <label class="col-xs-12 control-label">{{ macro.infopop(labelkey, option.info) }}</label>*/
/*     <div class="col-sm-8">*/
/*         <div class="form-group">*/
/*             <div class="col-sm-12">*/
/*                 <label>{{ __('field.video.label.url') }}</label>*/
/*                 <input{{ macro.attr(attr_url) }}>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <div class="col-sm-2">*/
/*                 <label class="control-label-inline">{{ __('field.video.label.size') }}</label>*/
/*             </div>*/
/*             <div class="col-sm-10">*/
/*                 <input{{ macro.attr(attr_width) }}>*/
/*                 <span class="pull-left" style="margin: 6px 8px 0;">×</span>*/
/*                 <input{{ macro.attr(attr_height) }}>*/
/*                 <span class="pull-left" style="margin: 6px 8px 0;">{{ __('field.video.pixel') }}</span>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <div class="col-sm-9">*/
/*                 <span><b>{{ __('field.video.matched-video') }}</b></span>*/
/*                 <p id="video-{{ key }}-text">{{ videotitle|raw }}</p>*/
/*             </div>*/
/* */
/*             <div class="hidden-xs col-sm-3">*/
/*                 <span class="hidden-xs" style="float:right">*/
/*                     <a href="#myModal" role="button" class="btn btn-default" data-toggle="modal">*/
/*                     <i class="fa fa-youtube-play"></i>*/
/*                     {{ __('field.video.button.preview') }}</a>*/
/*                 </span>*/
/*             </div>*/
/* */
/*             <input{{ macro.attr(attr_hid_ratio) }}>*/
/*             <input{{ macro.attr(attr_hid_title) }}>*/
/*             <input{{ macro.attr(attr_hid_authorname) }}>*/
/*             <input{{ macro.attr(attr_hid_authorurl) }}>*/
/*             <input{{ macro.attr(attr_hid_html) }}>*/
/*             <input{{ macro.attr(attr_hid_thumbnail) }}>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="col-sm-4">*/
/*         <div class="right-on-large">{# to make the preview align right on wide screens #}*/
/*             <label>{{ __('field.video.label.preview') }}</label>*/
/*             <div class="imageholder" id="thumbnail-{{ key }}">*/
/*                 {% if video.thumbnail|default('') %}*/
/*                     <img src="{{ video.thumbnail }}" width="200" height="150">*/
/*                 {% else %}*/
/*                     <img src="{{ app.paths.app }}view/img/default_empty_4x3.png" width="200" height="150">*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {# Modal video preview #}*/
/*     <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*         <div class="modal-dialog modal-lg">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-body">*/
/*                     {% if video.html is defined %}*/
/*                         {{ video.html }}*/
/*                     {% else %}*/
/*                         <p>{{ __('field.video.preview.no-url') }}</p>*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <button class="btn btn-tertiary " data-dismiss="modal" aria-hidden="true">{{ __('field.video.preview.button.close') }}</button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* </fieldset>*/
/* */
