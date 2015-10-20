<?php

/* relatedto/_toolbar.twig */
class __TwigTemplate_354d1e3135f03f6b347e787b31d1d24413fa7e66bc9b37f6ded67afb16617760 extends Twig_Template
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
        $context["href"] = $this->env->getExtension('routing')->getPath("relatedto", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "id", array())));
        // line 2
        echo "
<div class=\"btn-toolbar semi-block align-left\" style=\"margin-bottom:25px; border-bottom: 1px solid #eee; width:100%\">
    <div class=\"btn-group\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "relations", array()));
        foreach ($context['_seq'] as $context["slug"] => $context["relation"]) {
            // line 6
            echo "            <a class=\"btn";
            echo (($this->getAttribute($context["relation"], "active", array())) ? (" active") : (""));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["href"]) ? $context["href"] : null), "html", null, true);
            echo "?show=";
            echo twig_escape_filter($this->env, $context["slug"], "html", null, true);
            echo "\">
                ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["relation"], "name", array()), "html", null, true);
            echo "
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['relation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "relatedto/_toolbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  39 => 7,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% set href = path('relatedto', {'contenttypeslug': context.contenttype.slug, 'id': context.id}) %}*/
/* */
/* <div class="btn-toolbar semi-block align-left" style="margin-bottom:25px; border-bottom: 1px solid #eee; width:100%">*/
/*     <div class="btn-group">*/
/*         {% for slug, relation in context.relations %}*/
/*             <a class="btn{{ relation.active ? ' active' : '' }}" href="{{ href }}?show={{ slug }}">*/
/*                 {{ relation.name }}*/
/*             </a>*/
/*         {% endfor %}*/
/*     </div>*/
/* </div>*/
/* */
