<?php

/* editcontent/_relationships.twig */
class __TwigTemplate_2027f7f4803f17a830e9d87ea1310a9bdc0d178f5035a34914801db92561163a extends Twig_Template
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
<div class=\"form-group\">

    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "relations", array()));
        foreach ($context['_seq'] as $context["relcontenttype"] => $context["relation"]) {
            // line 6
            echo "
        ";
            // line 8
            echo "        ";
            if (($this->getAttribute($context["relation"], "prefix", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($context["relation"], "prefix", array())))) {
                // line 9
                echo "            <div class=\"prefix\">
                ";
                // line 10
                echo $this->env->getExtension('Bolt')->markdown($this->getAttribute($context["relation"], "prefix", array()));
                echo "
            </div>
        ";
            }
            // line 13
            echo "
        ";
            // line 15
            echo "        <fieldset>
            ";
            // line 17
            echo "            ";
            $context["format"] = (($this->getAttribute($context["relation"], "format", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["relation"], "format", array()), "{{ item.title|escape }} <span>(№ {{ item.id }})</span>")) : ("{{ item.title|escape }} <span>(№ {{ item.id }})</span>"));
            // line 18
            echo "
            ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "label", array(0 => $this->getAttribute($context["relation"], "label", array()), 1 => $this->env->getExtension('Bolt')->ucfirst($context["relcontenttype"]), 2 => "col-sm-4 control-label", 3 => ("relation-" . $context["relcontenttype"])), "method"), "html", null, true);
            echo "
            <div class=\"col-sm-8\">

                ";
            // line 22
            if (($this->getAttribute($context["relation"], "multiple", array(), "any", true, true) && ($this->getAttribute($context["relation"], "multiple", array()) == 1))) {
                // line 23
                echo "                    <select name=\"relation[";
                echo twig_escape_filter($this->env, $context["relcontenttype"], "html", null, true);
                echo "][]\" id=\"relation-";
                echo twig_escape_filter($this->env, $context["relcontenttype"], "html", null, true);
                echo "\" class=\"wide\" multiple style=\"width: 100%;\" data-placeholder=\"";
                echo $this->env->getExtension('Bolt')->trans("(none)");
                echo "\">
                ";
            } else {
                // line 25
                echo "                    <select name=\"relation[";
                echo twig_escape_filter($this->env, $context["relcontenttype"], "html", null, true);
                echo "][]\" id=\"relation-";
                echo twig_escape_filter($this->env, $context["relcontenttype"], "html", null, true);
                echo "\" class=\"wide\" style=\"width: 100%;\" data-placeholder=\"";
                echo $this->env->getExtension('Bolt')->trans("(none)");
                echo "\">
                        <option value=\"0\">";
                // line 26
                echo $this->env->getExtension('Bolt')->trans("(none)");
                echo "</option>
                ";
            }
            // line 28
            echo "
                    ";
            // line 29
            $context["groupby"] = (($this->getAttribute($context["relation"], "groupby", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["relation"], "groupby", array()), false)) : (false));
            // line 30
            echo "                    ";
            $context["optgroup"] = "";
            // line 31
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Bolt')->listContent($context["relcontenttype"], $context["relation"], $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 32
                echo "                        ";
                if ((($context["relcontenttype"] == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "relation"), "method")) && ($this->getAttribute($context["item"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "relationid"), "method")))) {
                    // line 33
                    echo "                            ";
                    $context["selectedbyrelation"] = true;
                    // line 34
                    echo "                        ";
                } else {
                    // line 35
                    echo "                            ";
                    $context["selectedbyrelation"] = false;
                    // line 36
                    echo "                        ";
                }
                // line 37
                echo "                        ";
                if (((isset($context["groupby"]) ? $context["groupby"] : null) && ((isset($context["optgroup"]) ? $context["optgroup"] : null) != $this->getAttribute($context["item"], (isset($context["groupby"]) ? $context["groupby"] : null), array(), "array")))) {
                    // line 38
                    echo "                            ";
                    if (((isset($context["optgroup"]) ? $context["optgroup"] : null) != "")) {
                        echo "</optgroup>";
                    }
                    // line 39
                    echo "                            ";
                    $context["optgroup"] = $this->getAttribute($context["item"], (isset($context["groupby"]) ? $context["groupby"] : null), array(), "array");
                    // line 40
                    echo "                            <optgroup label=\"";
                    echo twig_escape_filter($this->env, (isset($context["optgroup"]) ? $context["optgroup"] : null), "html", null, true);
                    echo "\">
                        ";
                }
                // line 42
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\"";
                if (($this->getAttribute($context["item"], "selected", array()) || (isset($context["selectedbyrelation"]) ? $context["selectedbyrelation"] : null))) {
                    echo " selected";
                }
                echo ">
                            ";
                // line 43
                echo $this->env->getExtension('Bolt')->twig((isset($context["format"]) ? $context["format"] : null), array("item" => $context["item"]));
                echo "
                        </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                    ";
            if (((isset($context["optgroup"]) ? $context["optgroup"] : null) != "")) {
                echo "</optgroup>";
            }
            // line 47
            echo "
                </select>

                <script>
                    \$(function() {
                        \$('#relation-";
            // line 52
            echo twig_escape_filter($this->env, $context["relcontenttype"], "html", null, true);
            echo "').select2({
                            placeholder: \"";
            // line 53
            echo $this->env->getExtension('Bolt')->trans("(none)");
            echo "\",
                            allowClear: true
                            ";
            // line 55
            if ((isset($context["groupby"]) ? $context["groupby"] : null)) {
                echo ", formatSelection: function (item) {
                                return \$(item.element).parent().attr('label') + ': ' + item.text;
                            }";
            }
            // line 58
            echo "                        });
                    });
                </script>

            </div>
        </fieldset>

        ";
            // line 66
            echo "        ";
            if (($this->getAttribute($context["relation"], "postfix", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($context["relation"], "postfix", array())))) {
                // line 67
                echo "            <div class=\"postfix\">
                ";
                // line 68
                echo $this->env->getExtension('Bolt')->markdown($this->getAttribute($context["relation"], "postfix", array()));
                echo "
            </div>
        ";
            }
            // line 71
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['relcontenttype'], $context['relation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "editcontent/_relationships.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 73,  198 => 71,  192 => 68,  189 => 67,  186 => 66,  177 => 58,  171 => 55,  166 => 53,  162 => 52,  155 => 47,  150 => 46,  141 => 43,  132 => 42,  126 => 40,  123 => 39,  118 => 38,  115 => 37,  112 => 36,  109 => 35,  106 => 34,  103 => 33,  100 => 32,  95 => 31,  92 => 30,  90 => 29,  87 => 28,  82 => 26,  73 => 25,  63 => 23,  61 => 22,  55 => 19,  52 => 18,  49 => 17,  46 => 15,  43 => 13,  37 => 10,  34 => 9,  31 => 8,  28 => 6,  24 => 5,  19 => 2,);
    }
}
/* {# Relationships for this record #}*/
/* */
/* <div class="form-group">*/
/* */
/*     {% for relcontenttype, relation in context.contenttype.relations %}*/
/* */
/*         {# Prefix #}*/
/*         {% if relation.prefix is defined and relation.prefix is not empty %}*/
/*             <div class="prefix">*/
/*                 {{ relation.prefix|markdown }}*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         {# Relationship #}*/
/*         <fieldset>*/
/*             {# We set the 'format' for the rendering of each <option>. With fallback to a sensible default. #}*/
/*             {% set format = relation.format|default("{{ item.title|escape }} <span>(№ {{ item.id }})</span>") %}*/
/* */
/*             {{ macro.label(relation.label, relcontenttype|ucfirst, 'col-sm-4 control-label', 'relation-' ~ relcontenttype) }}*/
/*             <div class="col-sm-8">*/
/* */
/*                 {% if relation.multiple is defined and relation.multiple == 1 %}*/
/*                     <select name="relation[{{ relcontenttype }}][]" id="relation-{{ relcontenttype }}" class="wide" multiple style="width: 100%;" data-placeholder="{{ __('(none)') }}">*/
/*                 {% else %}*/
/*                     <select name="relation[{{ relcontenttype }}][]" id="relation-{{ relcontenttype }}" class="wide" style="width: 100%;" data-placeholder="{{ __('(none)') }}">*/
/*                         <option value="0">{{ __('(none)') }}</option>*/
/*                 {% endif %}*/
/* */
/*                     {% set groupby = relation.groupby|default(false) %}*/
/*                     {% set optgroup = '' %}*/
/*                     {% for item in listcontent(relcontenttype, relation, context.content) %}*/
/*                         {% if relcontenttype == app.request.get('relation') and item.id == app.request.get('relationid') %}*/
/*                             {% set selectedbyrelation = true %}*/
/*                         {% else %}*/
/*                             {% set selectedbyrelation = false %}*/
/*                         {% endif %}*/
/*                         {% if groupby and optgroup != item[groupby] %}*/
/*                             {% if optgroup != '' %}</optgroup>{% endif %}*/
/*                             {% set optgroup = item[groupby] %}*/
/*                             <optgroup label="{{ optgroup }}">*/
/*                         {% endif %}*/
/*                         <option value="{{ item.id }}"{% if item.selected or selectedbyrelation %} selected{% endif %}>*/
/*                             {{ format|twig({'item': item}) }}*/
/*                         </option>*/
/*                     {% endfor %}*/
/*                     {% if optgroup != '' %}</optgroup>{% endif %}*/
/* */
/*                 </select>*/
/* */
/*                 <script>*/
/*                     $(function() {*/
/*                         $('#relation-{{ relcontenttype }}').select2({*/
/*                             placeholder: "{{ __('(none)') }}",*/
/*                             allowClear: true*/
/*                             {% if groupby %}, formatSelection: function (item) {*/
/*                                 return $(item.element).parent().attr('label') + ': ' + item.text;*/
/*                             }{% endif %}*/
/*                         });*/
/*                     });*/
/*                 </script>*/
/* */
/*             </div>*/
/*         </fieldset>*/
/* */
/*         {# Postfix #}*/
/*         {% if relation.postfix is defined and relation.postfix is not empty %}*/
/*             <div class="postfix">*/
/*                 {{ relation.postfix|markdown }}*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*     {% endfor %}*/
/* */
/* </div>*/
/* */
