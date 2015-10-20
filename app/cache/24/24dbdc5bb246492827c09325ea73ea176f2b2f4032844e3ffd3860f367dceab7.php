<?php

/* users/_userlist-actions.twig */
class __TwigTemplate_1ef4ec9c0ccd76493cda386d625b4dfbab2438da9103feaed4eecf406c2aa745 extends Twig_Template
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
        echo "
";
        // line 2
        if ($this->env->getExtension('Bolt')->isAllowed("useredit")) {
            // line 3
            echo "    <div class=\"btn-group\">

        <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("useredit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default btn-xs\">
            <i class=\"fa fa-edit\"></i> ";
            // line 6
            echo $this->env->getExtension('Bolt')->trans("Edit");
            echo "
        </a>

        <button class=\"btn dropdown-toggle btn-default btn-xs\" data-toggle=\"dropdown\">
            <i class=\"fa fa-info-sign\"></i>
            <span class=\"caret\"></span>
        </button>

        <ul class=\"dropdown-menu pull-right\">
            ";
            // line 15
            if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "currentuser", array()), "id", array()) != $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))) {
                // line 16
                echo "                ";
                if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "enabled", array())) {
                    // line 17
                    echo "                    <li>
                        <form action=\"";
                    // line 18
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("useraction", array("action" => "disable", "id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                    echo "\" method=\"post\">
                            ";
                    // line 19
                    $this->loadTemplate("_sub/_csrf_token.twig", "users/_userlist-actions.twig", 19)->display($context);
                    // line 20
                    echo "                            <button type=\"submit\" class=\"btn btn-block btn-link\">
                                <span class=\"pull-left\">";
                    // line 21
                    echo $this->env->getExtension('Bolt')->trans("Disable %username%", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "displayname", array())));
                    echo "</span>
                            </button>
                        </form>
                    </li>
                ";
                } else {
                    // line 26
                    echo "                    <li>
                        <form action=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("useraction", array("action" => "enable", "id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                    echo "\" method=\"post\">
                            ";
                    // line 28
                    $this->loadTemplate("_sub/_csrf_token.twig", "users/_userlist-actions.twig", 28)->display($context);
                    // line 29
                    echo "                            <button type=\"submit\" class=\"btn btn-block btn-link\">
                                <span class=\"pull-left\">";
                    // line 30
                    echo $this->env->getExtension('Bolt')->trans("Enable %username%", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "displayname", array())));
                    echo "</span>
                            </button>
                        </form>
                    </li>
                ";
                }
                // line 35
                echo "                <li>
                    <form action=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("useraction", array("action" => "delete", "id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\" method=\"post\">
                        ";
                // line 37
                $this->loadTemplate("_sub/_csrf_token.twig", "users/_userlist-actions.twig", 37)->display($context);
                // line 38
                echo "                        <button type=\"submit\" class=\"btn btn-block btn-link confirm\"
                        data-confirm=\"";
                // line 39
                echo $this->env->getExtension('Bolt')->trans("Are you sure you want to delete %username%?", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "displayname", array())));
                echo "\" >
                            <span class=\"pull-left\">";
                // line 40
                echo $this->env->getExtension('Bolt')->trans("Delete %username%", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "displayname", array())));
                echo "</span>
                        </button>
                    </form>
                </li>

                <li class=\"divider\">
                </li>
            ";
            }
            // line 48
            echo "
            <li>
                <a class=\"nolink\">
                    ";
            // line 51
            echo $this->env->getExtension('Bolt')->trans("Last seen");
            echo ": <strong>";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastseen", array()) > "1000")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastseen", array()), "Y-m-d H:i"), "html", null, true);
            } else {
                echo "-";
            }
            echo "</strong>
                </a>
            </li>

            <li>
                <a class=\"nolink\">
                    ";
            // line 57
            echo $this->env->getExtension('Bolt')->trans("Last known IP");
            echo ": <strong>";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastip", array()) != "")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastip", array()), "html", null, true);
            } else {
                echo "-";
            }
            echo "</strong>
                </a>
            </li>
        </ul>
    </div>
";
        } elseif (($this->getAttribute($this->getAttribute(        // line 62
(isset($context["context"]) ? $context["context"] : null), "currentuser", array()), "id", array()) == $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))) {
            // line 63
            echo "    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("profile");
            echo "\" class=\"btn btn-default btn-xs\">
        <i class=\"fa fa-edit\"></i> ";
            // line 64
            echo $this->env->getExtension('Bolt')->trans("Profile");
            echo "
    </a>
";
        }
    }

    public function getTemplateName()
    {
        return "users/_userlist-actions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 64,  152 => 63,  150 => 62,  136 => 57,  121 => 51,  116 => 48,  105 => 40,  101 => 39,  98 => 38,  96 => 37,  92 => 36,  89 => 35,  81 => 30,  78 => 29,  76 => 28,  72 => 27,  69 => 26,  61 => 21,  58 => 20,  56 => 19,  52 => 18,  49 => 17,  46 => 16,  44 => 15,  32 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {% if isallowed('useredit') %}*/
/*     <div class="btn-group">*/
/* */
/*         <a href="{{ path('useredit', {'id': user.id}) }}" class="btn btn-default btn-xs">*/
/*             <i class="fa fa-edit"></i> {{ __('Edit') }}*/
/*         </a>*/
/* */
/*         <button class="btn dropdown-toggle btn-default btn-xs" data-toggle="dropdown">*/
/*             <i class="fa fa-info-sign"></i>*/
/*             <span class="caret"></span>*/
/*         </button>*/
/* */
/*         <ul class="dropdown-menu pull-right">*/
/*             {% if context.currentuser.id != user.id  %}*/
/*                 {% if user.enabled %}*/
/*                     <li>*/
/*                         <form action="{{ path('useraction', {'action': 'disable', 'id': user.id}) }}" method="post">*/
/*                             {% include('_sub/_csrf_token.twig') %}*/
/*                             <button type="submit" class="btn btn-block btn-link">*/
/*                                 <span class="pull-left">{{ __('Disable %username%',{'%username%':user.displayname}) }}</span>*/
/*                             </button>*/
/*                         </form>*/
/*                     </li>*/
/*                 {% else %}*/
/*                     <li>*/
/*                         <form action="{{ path('useraction', {'action': 'enable', 'id': user.id}) }}" method="post">*/
/*                             {% include('_sub/_csrf_token.twig') %}*/
/*                             <button type="submit" class="btn btn-block btn-link">*/
/*                                 <span class="pull-left">{{ __('Enable %username%',{'%username%':user.displayname}) }}</span>*/
/*                             </button>*/
/*                         </form>*/
/*                     </li>*/
/*                 {% endif %}*/
/*                 <li>*/
/*                     <form action="{{ path('useraction', {'action': 'delete', 'id': user.id}) }}" method="post">*/
/*                         {% include('_sub/_csrf_token.twig') %}*/
/*                         <button type="submit" class="btn btn-block btn-link confirm"*/
/*                         data-confirm="{{ __('Are you sure you want to delete %username%?',{'%username%':user.displayname}) }}" >*/
/*                             <span class="pull-left">{{ __('Delete %username%',{'%username%':user.displayname}) }}</span>*/
/*                         </button>*/
/*                     </form>*/
/*                 </li>*/
/* */
/*                 <li class="divider">*/
/*                 </li>*/
/*             {% endif %}*/
/* */
/*             <li>*/
/*                 <a class="nolink">*/
/*                     {{ __('Last seen') }}: <strong>{% if user.lastseen>"1000" %}{{ user.lastseen|date("Y-m-d H:i") }}{% else %}-{% endif %}</strong>*/
/*                 </a>*/
/*             </li>*/
/* */
/*             <li>*/
/*                 <a class="nolink">*/
/*                     {{ __('Last known IP') }}: <strong>{% if user.lastip!="" %}{{ user.lastip }}{% else %}-{% endif %}</strong>*/
/*                 </a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* {% elseif context.currentuser.id == user.id %}*/
/*     <a href="{{ path('profile') }}" class="btn btn-default btn-xs">*/
/*         <i class="fa fa-edit"></i> {{ __('Profile') }}*/
/*     </a>*/
/* {% endif %}*/
/* */
