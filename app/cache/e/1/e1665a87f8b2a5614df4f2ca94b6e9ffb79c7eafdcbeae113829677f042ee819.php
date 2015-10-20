<?php

/* editcontent/_templatefields.twig */
class __TwigTemplate_1116166c1696d59db8293640eb417c36ee2beebccc0d2c01b1ac1905ddbe0244 extends Twig_Template
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
        if ( !$this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) {
            // line 2
            echo "    <hr>
    <h3>
        ";
            // line 4
            echo $this->env->getExtension('Bolt')->trans("Template");
            echo "
    </h3>
";
        }
        // line 7
        echo "
";
        // line 8
        $context["templatefields"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => "templatefields"), "method"), "contenttype", array());
        // line 9
        if ( !twig_test_empty((isset($context["templatefields"]) ? $context["templatefields"] : null))) {
            // line 10
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["templatefields"]) ? $context["templatefields"] : null), "fields", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["templatekey"] => $context["templatefield"]) {
                // line 11
                echo "
            <div class=\"form-group\" data-fieldtype=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["templatefield"], "type", array()), "html", null, true);
                echo "\">
                ";
                // line 14
                echo "                ";
                if (($this->getAttribute($context["templatefield"], "prefix", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($context["templatefield"], "prefix", array())))) {
                    // line 15
                    echo "                    <div class=\"prefix\">
                        ";
                    // line 16
                    echo $this->env->getExtension('Bolt')->markdown($this->getAttribute($context["templatefield"], "prefix", array()));
                    echo "
                    </div>
                ";
                }
                // line 19
                echo "
                ";
                // line 21
                echo "                ";
                $context["templatelabelkey"] = (($this->getAttribute($context["templatefield"], "label", array())) ? ($this->getAttribute($context["templatefield"], "label", array())) : ($this->env->getExtension('Bolt')->ucfirst($context["templatekey"])));
                // line 22
                echo "
                ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "fields", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["fieldtype"]) {
                    // line 24
                    echo "                    ";
                    if (($this->getAttribute($context["templatefield"], "type", array()) == $this->getAttribute($context["fieldtype"], "name", array()))) {
                        // line 25
                        echo "                        ";
                        $this->loadTemplate($this->getAttribute($context["fieldtype"], "template", array()), "editcontent/_templatefields.twig", 25)->display(array_merge($context, array("field" =>                         // line 26
$context["templatefield"], "key" => ("templatefields-" .                         // line 27
$context["templatekey"]), "contentkey" =>                         // line 28
$context["templatekey"], "context" => twig_array_merge(                        // line 29
(isset($context["context"]) ? $context["context"] : null), array("content" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => "templatefields"), "method"))), "name" => (("templatefields[" .                         // line 30
$context["templatekey"]) . "]"), "labelkey" =>                         // line 31
(isset($context["templatelabelkey"]) ? $context["templatelabelkey"] : null))));
                        // line 33
                        echo "                    ";
                    }
                    // line 34
                    echo "                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fieldtype'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "
                ";
                // line 37
                echo "                ";
                if (($this->getAttribute($context["templatefield"], "postfix", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($context["templatefield"], "postfix", array())))) {
                    // line 38
                    echo "                    <div class=\"postfix\">
                        ";
                    // line 39
                    echo $this->env->getExtension('Bolt')->markdown($this->getAttribute($context["templatefield"], "postfix", array()));
                    echo "
                    </div>
                ";
                }
                // line 42
                echo "
                ";
                // line 44
                echo "                ";
                if (($this->getAttribute($context["templatefield"], "separator", array(), "any", true, true) && ($this->getAttribute($context["templatefield"], "separator", array()) == true))) {
                    // line 45
                    echo "                    <hr>
                ";
                }
                // line 47
                echo "            </div>

    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['templatekey'], $context['templatefield'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 51
        echo "
";
        // line 52
        if ( !$this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) {
            // line 53
            echo "    <hr>
";
        }
    }

    public function getTemplateName()
    {
        return "editcontent/_templatefields.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 53,  175 => 52,  172 => 51,  155 => 47,  151 => 45,  148 => 44,  145 => 42,  139 => 39,  136 => 38,  133 => 37,  130 => 35,  116 => 34,  113 => 33,  111 => 31,  110 => 30,  109 => 29,  108 => 28,  107 => 27,  106 => 26,  104 => 25,  101 => 24,  84 => 23,  81 => 22,  78 => 21,  75 => 19,  69 => 16,  66 => 15,  63 => 14,  59 => 12,  56 => 11,  38 => 10,  36 => 9,  34 => 8,  31 => 7,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if not context.has.tabs %}*/
/*     <hr>*/
/*     <h3>*/
/*         {{ __('Template') }}*/
/*     </h3>*/
/* {% endif %}*/
/* */
/* {% set templatefields = context.content.get('templatefields').contenttype %}*/
/* {% if templatefields is not empty %}*/
/*     {% for templatekey, templatefield in templatefields.fields %}*/
/* */
/*             <div class="form-group" data-fieldtype="{{ templatefield.type }}">*/
/*                 {# Prefix #}*/
/*                 {% if templatefield.prefix is defined and templatefield.prefix is not empty %}*/
/*                     <div class="prefix">*/
/*                         {{ templatefield.prefix|markdown }}*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {# Fields #}*/
/*                 {% set templatelabelkey = templatefield.label ?: templatekey|ucfirst %}*/
/* */
/*                 {% for fieldtype in context.fields %}*/
/*                     {% if templatefield.type == fieldtype.name %}*/
/*                         {% include fieldtype.template with {*/
/*                             field: templatefield,*/
/*                             key: 'templatefields-' ~ templatekey,*/
/*                             contentkey: templatekey,*/
/*                             context: context|merge({ content: context.content.get('templatefields') }),*/
/*                             name: 'templatefields[' ~ templatekey ~ ']',*/
/*                             labelkey:  templatelabelkey*/
/*                         } %}*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/* */
/*                 {# Postfix #}*/
/*                 {% if templatefield.postfix is defined and templatefield.postfix is not empty %}*/
/*                     <div class="postfix">*/
/*                         {{ templatefield.postfix|markdown }}*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {# Divider #}*/
/*                 {% if templatefield.separator is defined and templatefield.separator == true %}*/
/*                     <hr>*/
/*                 {% endif %}*/
/*             </div>*/
/* */
/*     {% endfor %}*/
/* {% endif %}*/
/* */
/* {% if not context.has.tabs %}*/
/*     <hr>*/
/* {% endif %}*/
/* */
