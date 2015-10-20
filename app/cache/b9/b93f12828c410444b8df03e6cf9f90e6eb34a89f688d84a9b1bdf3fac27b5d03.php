<?php

/* _sub_menu.twig */
class __TwigTemplate_1c4b5e2c121a9973ce86fef8b9a9d9022d008cfeddf801d67c18f83cfa3ecd37 extends Twig_Template
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
        // line 7
        echo "
";
        // line 8
        $context["__internal_2005a612fd171ec22d86b65098ba2fe098ada3cc31eb993f8db31c6c4f679e02"] = $this;
        // line 9
        echo "
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "    ";
            if ($this->getAttribute($context["item"], "label", array(), "any", true, true)) {
                // line 12
                echo "        ";
                echo $context["__internal_2005a612fd171ec22d86b65098ba2fe098ada3cc31eb993f8db31c6c4f679e02"]->getdisplay_menu_item($context["item"], $context["loop"]);
                echo "
    ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 1
    public function getdisplay_menu_item($__item__ = null, $__loop__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "loop" => $__loop__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["__internal_ea5f5ec1bfdebb569397143939d38bbc75ccbe55d97a15576669725a9987c19f"] = $this;
            // line 3
            echo "        <li class=\"nav-item";
            if ($this->env->getExtension('Bolt')->current((isset($context["item"]) ? $context["item"] : null))) {
                echo " active";
            }
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "class", array(), "any", true, true)) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "class", array()), "html", null, true);
            }
            echo "\">
            <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array()), "html", null, true);
            echo "\">";
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array()), "html", null, true);
            } else {
                echo " - ";
            }
            echo "</a>
        </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_sub_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 4,  83 => 3,  80 => 2,  67 => 1,  47 => 12,  44 => 11,  27 => 10,  24 => 9,  22 => 8,  19 => 7,);
    }
}
/* {% macro display_menu_item(item, loop) %}*/
/*     {% from _self import display_menu_item %}*/
/*         <li class="nav-item{% if item|current %} active{% endif %}{% if item.class is defined %} {{item.class}}{% endif %}">*/
/*             <a href="{{ item.link }}" title="{{item.label}}">{% if item.label is defined %}{{item.label}}{% else %} - {% endif %}</a>*/
/*         </li>*/
/* {% endmacro %}*/
/* */
/* {% from _self import display_menu_item %}*/
/* */
/* {% for item in menu %}*/
/*     {% if item.label is defined %}*/
/*         {{ display_menu_item(item, loop) }}*/
/*     {% endif %}*/
/* {% endfor %}*/
