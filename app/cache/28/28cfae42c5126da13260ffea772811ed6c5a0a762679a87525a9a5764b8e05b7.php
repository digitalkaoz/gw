<?php

/* nav/_macros.twig */
class __TwigTemplate_6736316fc5595963f35a88f87622b04d5d0a7350d18762b98cae6073aae88f19 extends Twig_Template
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
        // line 10
        echo "

";
        // line 76
        echo "

";
        // line 95
        echo "

";
        // line 111
        echo "

";
        // line 126
        echo "

";
    }

    // line 4
    public function getheading($__title__ = null, $__icon__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 5
            echo "    ";
            $context["__internal_359eba826ca754d7cdebb9346f5014d16fa2a80cabd7bf2a760299dd60cbee8f"] = $this;
            // line 6
            echo "    <li class=\"divider\">
        <em>";
            // line 7
            echo $context["__internal_359eba826ca754d7cdebb9346f5014d16fa2a80cabd7bf2a760299dd60cbee8f"]->getlabel((isset($context["icon"]) ? $context["icon"] : null), (isset($context["title"]) ? $context["title"] : null));
            echo "</em>
    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function getsubmenu($__icon__ = null, $__label__ = null, $__popoveritems__ = null, $__active__ = null, $__wide__ = null, $__subitems__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
            "popoveritems" => $__popoveritems__,
            "active" => $__active__,
            "wide" => $__wide__,
            "subitems" => $__subitems__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 23
            echo "
    ";
            // line 24
            $context["__internal_6c04da20f4936de69287665a44d1747483f3507dce5bd2b092f07eda2490412e"] = $this;
            // line 25
            echo "
    ";
            // line 26
            if (twig_test_empty((isset($context["subitems"]) ? $context["subitems"] : null))) {
                // line 27
                echo "        ";
                $context["subitems"] = (isset($context["popoveritems"]) ? $context["popoveritems"] : null);
                // line 28
                echo "    ";
            }
            // line 29
            echo "
    ";
            // line 31
            echo "    ";
            $context["allowedany"] = false;
            // line 32
            echo "    ";
            $context["allowedamount"] = 0;
            // line 33
            echo "    ";
            $context["allowedsingle"] = "";
            // line 34
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subitems"]) ? $context["subitems"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 35
                echo "        ";
                if ((($context["item"] != "-") && $this->env->getExtension('Bolt')->isAllowed((($this->getAttribute($context["item"], "isallowed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "isallowed", array()), "dashboard")) : ("dashboard"))))) {
                    // line 36
                    echo "            ";
                    $context["allowedany"] = true;
                    // line 37
                    echo "            ";
                    $context["allowedamount"] = ((isset($context["allowedamount"]) ? $context["allowedamount"] : null) + 1);
                    // line 38
                    echo "            ";
                    $context["allowedsingle"] = $context["item"];
                    // line 39
                    echo "        ";
                }
                // line 40
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "
    ";
            // line 42
            $context["class"] = trim(((((isset($context["wide"]) ? $context["wide"] : null)) ? (" menu-pop-wide") : ("")) . (((isset($context["active"]) ? $context["active"] : null)) ? (" active") : (""))));
            // line 43
            echo "
    ";
            // line 45
            echo "    ";
            if ((isset($context["allowedany"]) ? $context["allowedany"] : null)) {
                // line 46
                echo "        <li";
                if ((isset($context["class"]) ? $context["class"] : null)) {
                    echo " class=\"";
                    echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                    echo "\"";
                }
                echo ">
            ";
                // line 47
                if (((isset($context["allowedamount"]) ? $context["allowedamount"] : null) == 1)) {
                    // line 48
                    echo "                ";
                    $context["item"] = (isset($context["allowedsingle"]) ? $context["allowedsingle"] : null);
                    // line 49
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "html", null, true);
                    echo "\">
                    ";
                    // line 50
                    echo $context["__internal_6c04da20f4936de69287665a44d1747483f3507dce5bd2b092f07eda2490412e"]->geticon($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "icon", array()), "icon");
                    echo (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array()), (("<em>(" . $this->env->getExtension('Bolt')->trans("no content …")) . ")</em>"))) : ((("<em>(" . $this->env->getExtension('Bolt')->trans("no content …")) . ")</em>")));
                    echo "
                </a>
            ";
                } else {
                    // line 53
                    echo "                <a  href=\"";
                    if ((isset($context["popoveritems"]) ? $context["popoveritems"] : null)) {
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["popoveritems"]) ? $context["popoveritems"] : null), 0, array()), "link", array()), "html", null, true);
                    } else {
                        echo "#";
                    }
                    echo "\" class=\"menu-pop\">
                    ";
                    // line 54
                    echo $context["__internal_6c04da20f4936de69287665a44d1747483f3507dce5bd2b092f07eda2490412e"]->getlabel((isset($context["icon"]) ? $context["icon"] : null), (isset($context["label"]) ? $context["label"] : null));
                    echo "
                </a>
                <ul class=\"nav submenu\">
                    ";
                    // line 57
                    $context["divider"] = false;
                    // line 58
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["popoveritems"]) ? $context["popoveritems"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 59
                        echo "                        ";
                        if (($context["item"] == "-")) {
                            // line 60
                            echo "                            ";
                            $context["divider"] = true;
                            // line 61
                            echo "                        ";
                        } elseif ($this->env->getExtension('Bolt')->isAllowed((($this->getAttribute($context["item"], "isallowed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "isallowed", array()), "dashboard")) : ("dashboard")))) {
                            // line 62
                            echo "                            <li";
                            if ((isset($context["divider"]) ? $context["divider"] : null)) {
                                echo " class=\"subdivider\"";
                            }
                            echo ">
                                <a href=\"";
                            // line 63
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
                            echo "\">
                                    ";
                            // line 64
                            echo $context["__internal_6c04da20f4936de69287665a44d1747483f3507dce5bd2b092f07eda2490412e"]->geticon($this->getAttribute($context["item"], "icon", array()));
                            echo (($this->getAttribute($context["item"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "label", array()), (("<em>(" . $this->env->getExtension('Bolt')->trans("no content …")) . ")</em>"))) : ((("<em>(" . $this->env->getExtension('Bolt')->trans("no content …")) . ")</em>")));
                            echo "
                                </a>
                            </li>
                            ";
                            // line 67
                            $context["divider"] = false;
                            // line 68
                            echo "                        ";
                        }
                        // line 69
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 70
                    echo "                </ul>
            ";
                }
                // line 72
                echo "        </li>
    ";
            }
            // line 74
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 81
    public function getcollapse(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 82
            echo "    ";
            $context["__internal_2ca873f82b69b93e2fff9fccf9db0bfcdf2389ccb6b15ff98cc5eadd8d296d52"] = $this;
            // line 83
            echo "
    <li class=\"nav-secondary-collapse\">
        <a href=\"#\">
            ";
            // line 86
            echo $context["__internal_2ca873f82b69b93e2fff9fccf9db0bfcdf2389ccb6b15ff98cc5eadd8d296d52"]->getlabel("fa:compress", $this->env->getExtension('Bolt')->trans("Collapse sidebar"));
            echo "
        </a>
    </li>
    <li class=\"nav-secondary-expand\">
        <a href=\"#\">
            ";
            // line 91
            echo $context["__internal_2ca873f82b69b93e2fff9fccf9db0bfcdf2389ccb6b15ff98cc5eadd8d296d52"]->getlabel("fa:expand", $this->env->getExtension('Bolt')->trans("Expand sidebar"));
            echo "
        </a>
    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 100
    public function getlink($__icon__ = null, $__label__ = null, $__pathname__ = null, $__active__ = null, $__divider__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
            "pathname" => $__pathname__,
            "active" => $__active__,
            "divider" => $__divider__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 101
            echo "    ";
            $context["__internal_95922a38df1cc7bb031e546bcf7002459ab6dbc9dac4deaa8f14c211cb41b653"] = $this;
            // line 102
            echo "    ";
            $context["class"] = "";
            // line 103
            echo "    ";
            if (((isset($context["pathname"]) ? $context["pathname"] : null) == "dashboard")) {
                $context["class"] = "nav-secondary-dashboard";
            }
            // line 104
            echo "    ";
            if ((isset($context["active"]) ? $context["active"] : null)) {
                $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . " active");
            }
            // line 105
            echo "    ";
            if ((isset($context["divider"]) ? $context["divider"] : null)) {
                $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . " divider");
            }
            // line 106
            echo "
    <li";
            // line 107
            if ((isset($context["class"]) ? $context["class"] : null)) {
                echo " class=\"";
                echo twig_escape_filter($this->env, trim((isset($context["class"]) ? $context["class"] : null)), "html", null, true);
                echo "\" ";
            }
            echo ">
        <a href=\"";
            // line 108
            echo $this->env->getExtension('routing')->getPath((isset($context["pathname"]) ? $context["pathname"] : null));
            echo "\">";
            echo $context["__internal_95922a38df1cc7bb031e546bcf7002459ab6dbc9dac4deaa8f14c211cb41b653"]->getlabel((isset($context["icon"]) ? $context["icon"] : null), (isset($context["label"]) ? $context["label"] : null));
            echo "</a>
    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 116
    public function getlabel($__icon__ = null, $__label__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 117
            echo "    ";
            $context["__internal_52d82a47576c555538e5ce74a5100a575c3869f1ee6739a14515a5bd4e89fefe"] = $this;
            // line 118
            echo "
    ";
            // line 119
            if (twig_test_empty((isset($context["icon"]) ? $context["icon"] : null))) {
                // line 120
                echo "        <i class=\"icon\">";
                echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["label"]) ? $context["label"] : null), 0, 1), "html", null, true);
                echo "</i>
    ";
            } elseif ((            // line 121
(isset($context["icon"]) ? $context["icon"] : null) != "-")) {
                // line 122
                echo "        ";
                echo $context["__internal_52d82a47576c555538e5ce74a5100a575c3869f1ee6739a14515a5bd4e89fefe"]->geticon((isset($context["icon"]) ? $context["icon"] : null), true);
                echo "
    ";
            }
            // line 124
            echo "    ";
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 131
    public function geticon($__icon__ = null, $__box__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "box" => $__box__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 132
            echo "    ";
            $context["class"] = ((((array_key_exists("box", $context)) ? (_twig_default_filter((isset($context["box"]) ? $context["box"] : null), false)) : (false))) ? ("icon") : ("fa-fw"));
            // line 133
            echo "    ";
            // line 134
            echo "    ";
            if ((twig_slice($this->env, (isset($context["icon"]) ? $context["icon"] : null), 0, 3) == "fa:")) {
                // line 135
                echo "        <i class=\"fa fa-";
                echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["icon"]) ? $context["icon"] : null), 3), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\"></i>
    ";
                // line 137
                echo "    ";
            } else {
                // line 138
                echo "        <i class=\"fa fa-question-circle ";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
                echo "\"></i>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "nav/_macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 138,  444 => 137,  437 => 135,  434 => 134,  432 => 133,  429 => 132,  416 => 131,  402 => 124,  396 => 122,  394 => 121,  389 => 120,  387 => 119,  384 => 118,  381 => 117,  368 => 116,  352 => 108,  344 => 107,  341 => 106,  336 => 105,  331 => 104,  326 => 103,  323 => 102,  320 => 101,  304 => 100,  289 => 91,  281 => 86,  276 => 83,  273 => 82,  262 => 81,  250 => 74,  246 => 72,  242 => 70,  236 => 69,  233 => 68,  231 => 67,  224 => 64,  220 => 63,  213 => 62,  210 => 61,  207 => 60,  204 => 59,  199 => 58,  197 => 57,  191 => 54,  182 => 53,  175 => 50,  170 => 49,  167 => 48,  165 => 47,  156 => 46,  153 => 45,  150 => 43,  148 => 42,  145 => 41,  139 => 40,  136 => 39,  133 => 38,  130 => 37,  127 => 36,  124 => 35,  119 => 34,  116 => 33,  113 => 32,  110 => 31,  107 => 29,  104 => 28,  101 => 27,  99 => 26,  96 => 25,  94 => 24,  91 => 23,  74 => 22,  60 => 7,  57 => 6,  54 => 5,  41 => 4,  35 => 126,  31 => 111,  27 => 95,  23 => 76,  19 => 10,);
    }
}
/* {##*/
/*  # Sidebar-menu heading*/
/*  #}*/
/* {% macro heading(title, icon) %}*/
/*     {% from _self import label %}*/
/*     <li class="divider">*/
/*         <em>{{ label(icon, title) }}</em>*/
/*     </li>*/
/* {% endmacro %}*/
/* */
/* */
/* {##*/
/*  # Sidebar-menu blocks with links, popover (for desktop) and touch-to-show (for mobile)*/
/*  #*/
/*  # @param string  icon*/
/*  # @param string  label (default: slug())*/
/*  # @param array   popoveritems*/
/*  # @param bool    active*/
/*  # @param bool    wide*/
/*  # @param array   subitems*/
/*  #}*/
/* {% macro submenu(icon, label, popoveritems, active, wide, subitems) %}*/
/* */
/*     {% from _self import label, icon %}*/
/* */
/*     {% if subitems is empty %}*/
/*         {% set subitems = popoveritems %}*/
/*     {% endif %}*/
/* */
/*     {# Only display the 'root' option, if any of the subitems are allowed to be shown. #}*/
/*     {% set allowedany = false %}*/
/*     {% set allowedamount = 0 %}*/
/*     {% set allowedsingle = "" %}*/
/*     {% for item in subitems %}*/
/*         {% if item != '-' and isallowed(item.isallowed|default('dashboard')) %}*/
/*             {% set allowedany = true %}*/
/*             {% set allowedamount = allowedamount + 1 %}*/
/*             {% set allowedsingle = item %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     {% set class = ((wide ? ' menu-pop-wide' : '') ~ (active ? ' active' : ''))|trim %}*/
/* */
/*     {# Show stuff! #}*/
/*     {% if allowedany %}*/
/*         <li{% if class %} class="{{ class }}"{% endif %}>*/
/*             {% if allowedamount == 1 %}*/
/*                 {% set item = allowedsingle %}*/
/*                 <a href="{{ item.link }}">*/
/*                     {{ icon(item.icon, "icon") }}{{ item.label|default("<em>(" ~ __("no content …") ~ ")</em>")|raw }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a  href="{% if popoveritems %}{{ popoveritems.0.link }}{% else %}#{% endif %}" class="menu-pop">*/
/*                     {{ label(icon, label) }}*/
/*                 </a>*/
/*                 <ul class="nav submenu">*/
/*                     {% set divider = false %}*/
/*                     {% for item in popoveritems %}*/
/*                         {% if item == '-' %}*/
/*                             {% set divider = true %}*/
/*                         {% elseif isallowed(item.isallowed|default('dashboard')) %}*/
/*                             <li{% if divider %} class="subdivider"{% endif %}>*/
/*                                 <a href="{{ item.link }}">*/
/*                                     {{ icon(item.icon) }}{{ item.label|default("<em>(" ~ __("no content …") ~ ")</em>")|raw }}*/
/*                                 </a>*/
/*                             </li>*/
/*                             {% set divider = false %}*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         </li>*/
/*     {% endif %}*/
/* */
/* {% endmacro %}*/
/* */
/* */
/* {##*/
/*  # Sidebar-menu collapse/expand*/
/*  #}*/
/* {% macro collapse() %}*/
/*     {% from _self import label %}*/
/* */
/*     <li class="nav-secondary-collapse">*/
/*         <a href="#">*/
/*             {{ label('fa:compress', __('Collapse sidebar')) }}*/
/*         </a>*/
/*     </li>*/
/*     <li class="nav-secondary-expand">*/
/*         <a href="#">*/
/*             {{ label('fa:expand', __('Expand sidebar')) }}*/
/*         </a>*/
/*     </li>*/
/* {% endmacro %}*/
/* */
/* */
/* {##*/
/*  # Sidebar-menu link*/
/*  #}*/
/* {% macro link(icon, label, pathname, active, divider) %}*/
/*     {% from _self import label %}*/
/*     {% set class = '' %}*/
/*     {% if pathname == 'dashboard' %}{% set class = 'nav-secondary-dashboard' %}{% endif %}*/
/*     {% if active %}{% set class = class ~ ' active' %}{% endif %}*/
/*     {% if divider %}{% set class = class ~ ' divider' %}{% endif %}*/
/* */
/*     <li{% if class %} class="{{ class|trim }}" {% endif %}>*/
/*         <a href="{{ path(pathname) }}">{{ label(icon, label) }}</a>*/
/*     </li>*/
/* {% endmacro %}*/
/* */
/* */
/* {##*/
/*  # Sidebar-menu label*/
/*  #}*/
/* {% macro label(icon, label) %}*/
/*     {% from _self import icon %}*/
/* */
/*     {% if icon is empty %}*/
/*         <i class="icon">{{ label|slice(0, 1) }}</i>*/
/*     {% elseif icon != '-' %}*/
/*         {{ icon(icon, true) }}*/
/*     {% endif %}*/
/*     {{ label|raw }}*/
/* {% endmacro %}*/
/* */
/* */
/* {##*/
/*  # Icon*/
/*  #}*/
/* {% macro icon(icon, box) %}*/
/*     {% set class = box|default(false) ? 'icon' : 'fa-fw' %}*/
/*     {# Font Awsome #}*/
/*     {% if icon|slice(0,3) == 'fa:' %}*/
/*         <i class="fa fa-{{ icon|slice(3) }} {{ class }}"></i>*/
/*     {# Defaults to (?) #}*/
/*     {% else %}*/
/*         <i class="fa fa-question-circle {{ class }}" title="{{ icon }}"></i>*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
