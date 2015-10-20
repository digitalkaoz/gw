<?php

/* relatedto/_panel-actions_relatedto.twig */
class __TwigTemplate_290e3e79af3e3053b322015f72c4ba68254651c3821a0d4e30c6648756c9e220 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("_base/_panel.twig", "relatedto/_panel-actions_relatedto.twig", 4);
        $this->blocks = array(
            'panel_class' => array($this, 'block_panel_class'),
            'panel_icon' => array($this, 'block_panel_icon'),
            'panel_head' => array($this, 'block_panel_head'),
            'panel_body' => array($this, 'block_panel_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_panel.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_panel_class($context, array $blocks = array())
    {
        echo "panel-actions";
    }

    // line 8
    public function block_panel_icon($context, array $blocks = array())
    {
        echo "fa-cog";
    }

    // line 10
    public function block_panel_head($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.actions-all", array("%contenttypes%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "show_contenttype", array()), "slug", array())));
    }

    // line 12
    public function block_panel_body($context, array $blocks = array())
    {
        // line 13
        echo "
    ";
        // line 14
        $context["panels"] = $this->loadTemplate("_macro/_panels.twig", "relatedto/_panel-actions_relatedto.twig", 14);
        // line 15
        echo "
    <a class=\"btn btn-default\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "show_contenttype", array()), "slug", array()), "id" => "", "relation" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()), "relationid" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "id", array()))), "html", null, true);
        echo "\">
        <i class=\"fa fa-plus\"></i> ";
        // line 17
        echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.new", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "show_contenttype", array()), "slug", array())));
        echo "
    </a>

    ";
        // line 20
        if ($this->env->getExtension('Bolt')->isAllowed("edit", $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()))) {
            // line 21
            echo "        <a class=\"btn btn-default\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "id", array()))), "html", null, true);
            echo "\">
            <i class=\"fa fa-edit\"></i> ";
            // line 22
            echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.edit", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
            echo "
        </a>
    ";
        }
        // line 25
        echo "
    ";
        // line 38
        echo "
";
    }

    public function getTemplateName()
    {
        return "relatedto/_panel-actions_relatedto.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 38,  83 => 25,  77 => 22,  72 => 21,  70 => 20,  64 => 17,  60 => 16,  57 => 15,  55 => 14,  52 => 13,  49 => 12,  43 => 10,  37 => 8,  31 => 6,  11 => 4,);
    }
}
/* {##*/
/*  # Sidebar-Panel: Displays actions for contenttype*/
/*  #}*/
/* {% extends '_base/_panel.twig' %}*/
/* */
/* {% block panel_class 'panel-actions' %}*/
/* */
/* {% block panel_icon 'fa-cog' %}*/
/* */
/* {% block panel_head __('contenttypes.generic.actions-all', {'%contenttypes%': context.show_contenttype.slug}) %}*/
/* */
/* {% block panel_body %}*/
/* */
/*     {% import '_macro/_panels.twig' as panels %}*/
/* */
/*     <a class="btn btn-default" href="{{ path('editcontent', {'contenttypeslug': context.show_contenttype.slug, 'id': '', 'relation': context.contenttype.slug, 'relationid': context.id}) }}">*/
/*         <i class="fa fa-plus"></i> {{ __('contenttypes.generic.new', {'%contenttype%': context.show_contenttype.slug}) }}*/
/*     </a>*/
/* */
/*     {% if isallowed('edit', context.contenttype) %}*/
/*         <a class="btn btn-default" href="{{ path('editcontent', {'contenttypeslug': context.contenttype.slug, 'id': context.id}) }}">*/
/*             <i class="fa fa-edit"></i> {{ __('contenttypes.generic.edit', {'%contenttype%': context.contenttype.slug}) }}*/
/*         </a>*/
/*     {% endif %}*/
/* */
/*     {# TODO: add filtering*/
/*     {% if request('filter') or request('order') %}*/
/*         <a class="btn" href="?">{{ __('Clear sort/filter') }}</a>*/
/*     {% endif %}*/
/* */
/*     <form class="form-inline" style="margin-top:15px;">*/
/*         <input type="hidden" value="{{ request('show', '', true) }}" name="show">*/
/*         <input type="text" class="form-control" value="{{ request('filter', '', true) }}" name="filter" style="width: 110px;" placeholder="{{ __('Filtering') }}">*/
/*         <button type="submit" class="btn">{{ __('Filter') }}</button>*/
/*         {% if request('filter') %}<p><a href="?">{{ __('Clear filter') }}</a></p>{% endif %}*/
/*     </form>*/
/*     #}*/
/* */
/* {% endblock panel_body %}*/
/* */
