<?php

/* editcontent/_taxonomies.twig */
class __TwigTemplate_bf6e953bd4a661163672100d96c136fc38ee7bfaac58dc36677d5102cb3d8f1a extends Twig_Template
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
        if ( !$this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) {
            // line 4
            echo "    <h3>
        ";
            // line 5
            echo $this->env->getExtension('Bolt')->trans("Taxonomy");
            echo "
        <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
            // line 6
            echo $this->env->getExtension('Bolt')->trans("Taxonomy");
            echo "\"
                  data-content=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator", array()), "trans", array(0 => "info.taxonomy", 1 => array(), 2 => "infos"), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Bolt')->trans("Info");
            echo "</span>
    </h3>
";
        }
        // line 10
        echo "
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "taxonomy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "taxonomy", array()), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["taxonomyslug"]) {
            // line 12
            echo "    <div class=\"form-group\">
        <fieldset>

        ";
            // line 15
            if ($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method", false, true), $context["taxonomyslug"], array(), "array", true, true)) {
                // line 16
                echo "
            ";
                // line 17
                $context["taxonomy"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method"), $context["taxonomyslug"], array(), "array");
                // line 18
                echo "
            ";
                // line 20
                echo "            ";
                if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "prefix", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "prefix", array())))) {
                    // line 21
                    echo "                <div class=\"prefix\">
                    ";
                    // line 22
                    echo $this->env->getExtension('Bolt')->markdown($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "prefix", array()));
                    echo "
                </div>
            ";
                }
                // line 25
                echo "
            ";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "label", array(0 => $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "name", array()), 1 => "", 2 => "col-sm-3 control-label", 3 => ("taxonomy-" . $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()))), "method"), "html", null, true);
                echo "
            <div class=\"col-sm-9\">

            ";
                // line 30
                echo "
            ";
                // line 31
                if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "behaves_like", array()) == "tags")) {
                    // line 32
                    echo "
                ";
                    // line 33
                    if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "taxonomy", array(), "any", false, true), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), array(), "array", true, true)) {
                        // line 34
                        echo "                    ";
                        $context["tags"] = twig_join_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "taxonomy", array()), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), array(), "array"), ",");
                        // line 35
                        echo "                ";
                    } else {
                        // line 36
                        echo "                    ";
                        $context["tags"] = "";
                        // line 37
                        echo "                ";
                    }
                    // line 38
                    echo "
                <input type=\"text\" name=\"taxonomy[";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                    echo "]\" id=\"taxonomy-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null), "html", null, true);
                    echo "\" style=\"width: 100%;\" />

                <div class=\"tagcloud\" id=\"tagcloud-";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                    echo "\"></div>
                <script>
                \$(function() {

                    ";
                    // line 45
                    if ($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "allow_spaces", array())) {
                        // line 46
                        echo "                        var separators = [\",\"];
                    ";
                    } else {
                        // line 48
                        echo "                        var separators = [\",\", \" \"];
                    ";
                    }
                    // line 50
                    echo "
                    // load all tags
                    \$.ajax({
                        url: \"";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
                    echo "async/tags/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                    echo "\",
                        dataType: \"json\",
                        success: function(data) {
                            var results = [];
                            \$.each(data, function(index, item){
                                results.push( item.name );
                            });
                            \$('#taxonomy-";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                    echo "').select2({tags: results, minimumInputLength: 1, tokenSeparators: separators});
                        },
                        error: function() {
                            \$('#taxonomy-";
                    // line 63
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                    echo "').select2({tags: [], minimumInputLength: 1, tokenSeparators: separators});
                        }
                    });

                    ";
                    // line 67
                    if ($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "tagcloud", array())) {
                        // line 68
                        echo "                    // popular tags
                    \$.ajax({
                        url: \"";
                        // line 70
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
                        echo "async/populartags/";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo "\",
                        dataType: \"json\",
                        data : {limit: 40},
                        success: function(data) {
                            if (data.length > 0) {
                                \$.each(data, function(index, item){
                                    \$(\"#tagcloud-";
                        // line 76
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo "\").append('<a href=\"#\" rel=\"' + item.count + '\">' + item.name + '</a>');
                                });
                                \$(\"#tagcloud-";
                        // line 78
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo " a\").on('click', function (e) {
                                    e.preventDefault();
                                    var data = \$(\"#taxonomy-";
                        // line 80
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo "\").select2(\"data\")
                                    data.push({id:\$(this).text(), text:\$(this).text()});
                                    \$(\"#taxonomy-";
                        // line 82
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo "\").select2(\"data\", data);
                                });

                                \$.fn.tagcloud.defaults = {
                                    size: {start: 12, end: 22, unit: 'px'},
                                    color: {start: '#888', end: '#194770'}
                                };
                                \$('#tagcloud-";
                        // line 89
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo " a').tagcloud();
                            }
                        }
                    });
                    ";
                    }
                    // line 94
                    echo "
                });
                </script>

            ";
                }
                // line 99
                echo "
            ";
                // line 101
                echo "
            ";
                // line 102
                if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "behaves_like", array()) == "categories")) {
                    // line 103
                    echo "
                ";
                    // line 104
                    if ((($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "autocomplete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "autocomplete", array()), false)) : (false))) {
                        // line 105
                        echo "                <select name=\"taxonomy[";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo "][]\" id=\"taxonomy-";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo "\" style=\"width: 100%;\" ";
                        if ((($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "multiple", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "multiple", array()), false)) : (false))) {
                            echo "multiple";
                        }
                        echo ">
                ";
                    } elseif ((($this->getAttribute(                    // line 106
(isset($context["taxonomy"]) ? $context["taxonomy"] : null), "multiple", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "multiple", array()), false)) : (false))) {
                        // line 107
                        echo "                <select name=\"taxonomy[";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo "][]\" id=\"taxonomy-";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo "\" class=\"form-control\"
                    multiple style=\"height: ";
                        // line 108
                        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "height", array()), "5em")) : ("5em")), "html", null, true);
                        echo ";\">
                ";
                    } else {
                        // line 110
                        echo "                <select name=\"taxonomy[";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo "][]\" id=\"taxonomy-";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo "\" class=\"form-control\">
                    <option value=\"\">";
                        // line 111
                        echo $this->env->getExtension('Bolt')->trans("(no category)");
                        echo "</option>
                    <option value=\"\" disabled>-----------</option>
                ";
                    }
                    // line 114
                    echo "
                ";
                    // line 115
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "options", array()));
                    foreach ($context['_seq'] as $context["slug"] => $context["cat"]) {
                        // line 116
                        echo "                    <option value=\"";
                        echo twig_escape_filter($this->env, $context["slug"], "html", null, true);
                        echo "\" ";
                        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "taxonomy", array(), "any", false, true), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), array(), "array", true, true) && twig_in_filter($context["cat"], $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "taxonomy", array()), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), array(), "array")))) {
                            echo "selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, $context["cat"], "html", null, true);
                        echo "</option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['slug'], $context['cat'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 118
                    echo "
                </select>

                ";
                    // line 121
                    if (((($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "multiple", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "multiple", array()), false)) : (false)) &&  !(($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "autocomplete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "autocomplete", array()), false)) : (false)))) {
                        // line 122
                        echo "                <label><span class=\"left\" style=\"line-height: 1px;\">&nbsp;</span></label>
                <div style=\"margin-top: -14px;\">";
                        // line 124
                        echo "                    <a href=\"#\" class=\"btn btn-default btn-xs\" onclick=\"jQuery('#taxonomy-";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo " option').prop('selected', true); return false;\">
                        <i class=\"fa fa-fw fa-check-square-o\"></i>";
                        // line 125
                        echo $this->env->getExtension('Bolt')->trans("Select all");
                        echo "
                    </a>
                    <a href=\"#\" class=\"btn btn-default btn-xs\" onclick=\"jQuery('#taxonomy-";
                        // line 127
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo " option').prop('selected', false); return false;\">
                        <i class=\"fa fa-fw fa-square-o\"></i>";
                        // line 128
                        echo $this->env->getExtension('Bolt')->trans("Select none");
                        echo "
                    </a>
                </div>
                ";
                    }
                    // line 132
                    echo "
                ";
                    // line 133
                    if ((($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "autocomplete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "autocomplete", array()), false)) : (false))) {
                        // line 134
                        echo "                <script>
                    \$(function() {
                        \$('#taxonomy-";
                        // line 136
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo "').select2({
                            placeholder: \"";
                        // line 137
                        echo $this->env->getExtension('Bolt')->trans("(none)");
                        echo "\",
                            allowClear: true
                        });
                    });
                </script>
                ";
                    }
                    // line 143
                    echo "
            ";
                }
                // line 145
                echo "
            ";
                // line 147
                echo "
            ";
                // line 148
                if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "behaves_like", array()) == "grouping")) {
                    // line 149
                    echo "
                <select name=\"taxonomy[";
                    // line 150
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                    echo "][]\" id=\"taxonomy-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                    echo "\" class=\"narrow form-control pull-left\">
                    <option value=\"\">";
                    // line 151
                    echo $this->env->getExtension('Bolt')->trans("(no group)");
                    echo "</option>
                    <option value=\"\" disabled>-----------</option>
                ";
                    // line 153
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "options", array()));
                    foreach ($context['_seq'] as $context["slug"] => $context["group"]) {
                        // line 154
                        echo "                    <option value=\"";
                        echo twig_escape_filter($this->env, $context["slug"], "html", null, true);
                        echo "\" ";
                        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "taxonomy", array(), "any", false, true), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), array(), "array", true, true) && twig_in_filter($context["group"], $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "taxonomy", array()), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), array(), "array"))) || (( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "taxonomy", array(), "any", false, true), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), array(), "array", true, true) && $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "default", array(), "any", true, true)) && ($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "default", array()) == $context["slug"])))) {
                            echo "selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, $context["group"], "html", null, true);
                        echo "</option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['slug'], $context['group'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 156
                    echo "                </select>

                ";
                    // line 158
                    if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "has_sortorder", array(), "any", true, true) && ($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "has_sortorder", array()) == true))) {
                        // line 159
                        echo "                    <label for=\"taxonomy-order-";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo "\" class=\" pull-left\" style=\"margin: 6px 8px 0;\">- Order:</label>
                    ";
                        // line 160
                        if ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "sortorder", array())) {
                            // line 161
                            echo "                        ";
                            $context["sortorder"] = $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "sortorder", array());
                            // line 162
                            echo "                    ";
                        } else {
                            // line 163
                            echo "                        ";
                            $context["sortorder"] = 0;
                            // line 164
                            echo "                    ";
                        }
                        // line 165
                        echo "                    <input type=\"number\" name=\"taxonomy-order[";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo "]\" id=\"taxonomy-order-";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo "\" step=\"1\"
                           value=\"";
                        // line 166
                        echo twig_escape_filter($this->env, (isset($context["sortorder"]) ? $context["sortorder"] : null), "html", null, true);
                        echo "\" class=\"verynarrow form-control pull-left\">
                ";
                    }
                    // line 168
                    echo "
            ";
                }
                // line 170
                echo "
            </div>

            ";
                // line 174
                echo "            ";
                if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "postfix", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "postfix", array())))) {
                    // line 175
                    echo "                <div class=\"postfix\">
                    ";
                    // line 176
                    echo $this->env->getExtension('Bolt')->markdown($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "postfix", array()));
                    echo "
                </div>
            ";
                }
                // line 179
                echo "
        ";
            }
            // line 181
            echo "
        </fieldset>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxonomyslug'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "
";
        // line 186
        if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array()) && twig_in_filter("taxonomy", $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "groups", array())))) {
            // line 187
            echo "    ";
            $this->loadTemplate("editcontent/_fields.twig", "editcontent/_taxonomies.twig", 187)->display($context);
        }
        // line 189
        echo "
";
        // line 190
        if ( !$this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) {
            // line 191
            echo "    <hr>
";
        }
    }

    public function getTemplateName()
    {
        return "editcontent/_taxonomies.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 191,  478 => 190,  475 => 189,  471 => 187,  469 => 186,  466 => 185,  457 => 181,  453 => 179,  447 => 176,  444 => 175,  441 => 174,  436 => 170,  432 => 168,  427 => 166,  420 => 165,  417 => 164,  414 => 163,  411 => 162,  408 => 161,  406 => 160,  401 => 159,  399 => 158,  395 => 156,  380 => 154,  376 => 153,  371 => 151,  365 => 150,  362 => 149,  360 => 148,  357 => 147,  354 => 145,  350 => 143,  341 => 137,  337 => 136,  333 => 134,  331 => 133,  328 => 132,  321 => 128,  317 => 127,  312 => 125,  307 => 124,  304 => 122,  302 => 121,  297 => 118,  282 => 116,  278 => 115,  275 => 114,  269 => 111,  262 => 110,  257 => 108,  250 => 107,  248 => 106,  237 => 105,  235 => 104,  232 => 103,  230 => 102,  227 => 101,  224 => 99,  217 => 94,  209 => 89,  199 => 82,  194 => 80,  189 => 78,  184 => 76,  173 => 70,  169 => 68,  167 => 67,  160 => 63,  154 => 60,  142 => 53,  137 => 50,  133 => 48,  129 => 46,  127 => 45,  120 => 41,  111 => 39,  108 => 38,  105 => 37,  102 => 36,  99 => 35,  96 => 34,  94 => 33,  91 => 32,  89 => 31,  86 => 30,  80 => 26,  77 => 25,  71 => 22,  68 => 21,  65 => 20,  62 => 18,  60 => 17,  57 => 16,  55 => 15,  50 => 12,  46 => 11,  43 => 10,  35 => 7,  31 => 6,  27 => 5,  24 => 4,  22 => 3,  19 => 2,);
    }
}
/* {# taxonomies for the contenttype that this record is part of. #}*/
/* */
/* {% if not context.has.tabs %}*/
/*     <h3>*/
/*         {{ __('Taxonomy') }}*/
/*         <span class="label info-pop" data-html="true" data-title="{{ __('Taxonomy') }}"*/
/*                   data-content="{{ app.translator.trans('info.taxonomy',{},'infos') }}">{{ __('Info') }}</span>*/
/*     </h3>*/
/* {% endif %}*/
/* */
/* {% for taxonomyslug in context.contenttype.taxonomy|default([]) %}*/
/*     <div class="form-group">*/
/*         <fieldset>*/
/* */
/*         {% if config.get('taxonomy')[taxonomyslug] is defined %}*/
/* */
/*             {% set taxonomy = config.get('taxonomy')[taxonomyslug] %}*/
/* */
/*             {# --------------- prefix --------------- #}*/
/*             {% if taxonomy.prefix is defined and taxonomy.prefix is not empty %}*/
/*                 <div class="prefix">*/
/*                     {{ taxonomy.prefix|markdown }}*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             {{ macro.label(taxonomy.name, '', 'col-sm-3 control-label', 'taxonomy-' ~ taxonomy.slug) }}*/
/*             <div class="col-sm-9">*/
/* */
/*             {# ---------- tags ---------- #}*/
/* */
/*             {% if taxonomy.behaves_like == "tags" %}*/
/* */
/*                 {% if context.content.taxonomy[taxonomy.slug] is defined %}*/
/*                     {% set tags = context.content.taxonomy[taxonomy.slug]|join(",") %}*/
/*                 {% else %}*/
/*                     {% set tags = "" %}*/
/*                 {% endif %}*/
/* */
/*                 <input type="text" name="taxonomy[{{ taxonomy.slug }}]" id="taxonomy-{{ taxonomy.slug }}" value="{{ tags }}" style="width: 100%;" />*/
/* */
/*                 <div class="tagcloud" id="tagcloud-{{ taxonomy.slug }}"></div>*/
/*                 <script>*/
/*                 $(function() {*/
/* */
/*                     {% if taxonomy.allow_spaces %}*/
/*                         var separators = [","];*/
/*                     {% else %}*/
/*                         var separators = [",", " "];*/
/*                     {% endif %}*/
/* */
/*                     // load all tags*/
/*                     $.ajax({*/
/*                         url: "{{ paths.root }}async/tags/{{ taxonomy.slug }}",*/
/*                         dataType: "json",*/
/*                         success: function(data) {*/
/*                             var results = [];*/
/*                             $.each(data, function(index, item){*/
/*                                 results.push( item.name );*/
/*                             });*/
/*                             $('#taxonomy-{{ taxonomy.slug }}').select2({tags: results, minimumInputLength: 1, tokenSeparators: separators});*/
/*                         },*/
/*                         error: function() {*/
/*                             $('#taxonomy-{{ taxonomy.slug }}').select2({tags: [], minimumInputLength: 1, tokenSeparators: separators});*/
/*                         }*/
/*                     });*/
/* */
/*                     {% if taxonomy.tagcloud %}*/
/*                     // popular tags*/
/*                     $.ajax({*/
/*                         url: "{{ paths.root }}async/populartags/{{ taxonomy.slug }}",*/
/*                         dataType: "json",*/
/*                         data : {limit: 40},*/
/*                         success: function(data) {*/
/*                             if (data.length > 0) {*/
/*                                 $.each(data, function(index, item){*/
/*                                     $("#tagcloud-{{ taxonomy.slug }}").append('<a href="#" rel="' + item.count + '">' + item.name + '</a>');*/
/*                                 });*/
/*                                 $("#tagcloud-{{ taxonomy.slug }} a").on('click', function (e) {*/
/*                                     e.preventDefault();*/
/*                                     var data = $("#taxonomy-{{ taxonomy.slug }}").select2("data")*/
/*                                     data.push({id:$(this).text(), text:$(this).text()});*/
/*                                     $("#taxonomy-{{ taxonomy.slug }}").select2("data", data);*/
/*                                 });*/
/* */
/*                                 $.fn.tagcloud.defaults = {*/
/*                                     size: {start: 12, end: 22, unit: 'px'},*/
/*                                     color: {start: '#888', end: '#194770'}*/
/*                                 };*/
/*                                 $('#tagcloud-{{ taxonomy.slug }} a').tagcloud();*/
/*                             }*/
/*                         }*/
/*                     });*/
/*                     {% endif %}*/
/* */
/*                 });*/
/*                 </script>*/
/* */
/*             {% endif %}*/
/* */
/*             {# ---------- categories ---------- #}*/
/* */
/*             {% if taxonomy.behaves_like == "categories" %}*/
/* */
/*                 {% if taxonomy.autocomplete|default(false) %}*/
/*                 <select name="taxonomy[{{ taxonomy.slug }}][]" id="taxonomy-{{ taxonomy.slug }}" style="width: 100%;" {% if taxonomy.multiple|default(false) %}multiple{% endif %}>*/
/*                 {% elseif taxonomy.multiple|default(false) %}*/
/*                 <select name="taxonomy[{{ taxonomy.slug }}][]" id="taxonomy-{{ taxonomy.slug }}" class="form-control"*/
/*                     multiple style="height: {{ taxonomy.height|default('5em') }};">*/
/*                 {% else %}*/
/*                 <select name="taxonomy[{{ taxonomy.slug }}][]" id="taxonomy-{{ taxonomy.slug }}" class="form-control">*/
/*                     <option value="">{{ __('(no category)') }}</option>*/
/*                     <option value="" disabled>-----------</option>*/
/*                 {% endif %}*/
/* */
/*                 {% for slug, cat in taxonomy.options %}*/
/*                     <option value="{{ slug }}" {% if context.content.taxonomy[taxonomy.slug] is defined and cat in context.content.taxonomy[taxonomy.slug] %}selected{% endif %}>{{ cat }}</option>*/
/*                 {% endfor %}*/
/* */
/*                 </select>*/
/* */
/*                 {% if taxonomy.multiple|default(false) and not taxonomy.autocomplete|default(false) %}*/
/*                 <label><span class="left" style="line-height: 1px;">&nbsp;</span></label>*/
/*                 <div style="margin-top: -14px;">{# TODO:onclick-events to JS #}*/
/*                     <a href="#" class="btn btn-default btn-xs" onclick="jQuery('#taxonomy-{{ taxonomy.slug }} option').prop('selected', true); return false;">*/
/*                         <i class="fa fa-fw fa-check-square-o"></i>{{ __("Select all") }}*/
/*                     </a>*/
/*                     <a href="#" class="btn btn-default btn-xs" onclick="jQuery('#taxonomy-{{ taxonomy.slug }} option').prop('selected', false); return false;">*/
/*                         <i class="fa fa-fw fa-square-o"></i>{{ __("Select none") }}*/
/*                     </a>*/
/*                 </div>*/
/*                 {% endif %}*/
/* */
/*                 {% if taxonomy.autocomplete|default(false) %}*/
/*                 <script>*/
/*                     $(function() {*/
/*                         $('#taxonomy-{{ taxonomy.slug }}').select2({*/
/*                             placeholder: "{{ __('(none)') }}",*/
/*                             allowClear: true*/
/*                         });*/
/*                     });*/
/*                 </script>*/
/*                 {% endif %}*/
/* */
/*             {% endif %}*/
/* */
/*             {# ---------- grouping ---------- #}*/
/* */
/*             {% if taxonomy.behaves_like == "grouping" %}*/
/* */
/*                 <select name="taxonomy[{{ taxonomy.slug }}][]" id="taxonomy-{{ taxonomy.slug }}" class="narrow form-control pull-left">*/
/*                     <option value="">{{ __('(no group)') }}</option>*/
/*                     <option value="" disabled>-----------</option>*/
/*                 {% for slug, group in taxonomy.options %}*/
/*                     <option value="{{ slug }}" {% if context.content.taxonomy[taxonomy.slug] is defined and group in context.content.taxonomy[taxonomy.slug] or context.content.taxonomy[taxonomy.slug] is not defined and taxonomy.default is defined and taxonomy.default == slug %}selected{% endif %}>{{ group }}</option>*/
/*                 {% endfor %}*/
/*                 </select>*/
/* */
/*                 {% if taxonomy.has_sortorder is defined and taxonomy.has_sortorder == true %}*/
/*                     <label for="taxonomy-order-{{ taxonomy.slug }}" class=" pull-left" style="margin: 6px 8px 0;">- Order:</label>*/
/*                     {% if context.content.sortorder %}*/
/*                         {% set sortorder = context.content.sortorder %}*/
/*                     {% else %}*/
/*                         {% set sortorder = 0 %}*/
/*                     {% endif %}*/
/*                     <input type="number" name="taxonomy-order[{{ taxonomy.slug }}]" id="taxonomy-order-{{ taxonomy.slug }}" step="1"*/
/*                            value="{{ sortorder }}" class="verynarrow form-control pull-left">*/
/*                 {% endif %}*/
/* */
/*             {% endif %}*/
/* */
/*             </div>*/
/* */
/*             {# --------------- postfix --------------- #}*/
/*             {% if taxonomy.postfix is defined and taxonomy.postfix is not empty %}*/
/*                 <div class="postfix">*/
/*                     {{ taxonomy.postfix|markdown }}*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*         {% endif %}*/
/* */
/*         </fieldset>*/
/*     </div>*/
/* {% endfor %}*/
/* */
/* {% if context.has.tabs and 'taxonomy' in context.contenttype.groups %}*/
/*     {% include 'editcontent/_fields.twig' %}*/
/* {% endif %}*/
/* */
/* {% if not context.has.tabs %}*/
/*     <hr>*/
/* {% endif %}*/
/* */
