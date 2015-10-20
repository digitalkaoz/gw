<?php

/* editcontent/_aside.twig */
class __TwigTemplate_5f1572bcd3bf0293905fb5c64377db8aabc05010437e9d440676d8a340854450 extends Twig_Template
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
        $context["panels"] = $this->loadTemplate("_macro/_panels.twig", "editcontent/_aside.twig", 1);
        // line 2
        echo "
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <i class=\"fa fa-cog fa-fw\"></i> ";
        // line 5
        echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.actions-one", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
        echo "
    </div>

    <div class=\"panel-body\">
        ";
        // line 9
        $this->loadTemplate("editcontent/_aside-save.twig", "editcontent/_aside.twig", 9)->display($context);
        // line 10
        echo "        ";
        $this->loadTemplate("editcontent/_aside-live-editor.twig", "editcontent/_aside.twig", 10)->display($context);
        // line 11
        echo "        ";
        $this->loadTemplate("editcontent/_aside-preview.twig", "editcontent/_aside.twig", 11)->display($context);
        // line 12
        echo "        ";
        $this->loadTemplate("editcontent/_aside-status.twig", "editcontent/_aside.twig", 12)->display($context);
        // line 13
        echo "        ";
        if (($this->env->getExtension('Bolt')->isAllowed("delete", $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array())) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array())))) {
            // line 14
            echo "            ";
            $this->loadTemplate("editcontent/_aside-delete.twig", "editcontent/_aside.twig", 14)->display($context);
            // line 15
            echo "        ";
        }
        // line 16
        echo "    </div>
</div>

";
        // line 19
        echo $context["panels"]->getchanges($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()), (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "id", array()), null)) : (null)));
        echo "

";
        // line 21
        echo $context["panels"]->getlastmodified($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()), $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array()));
        echo "

";
        // line 23
        echo $context["panels"]->getstack(5);
        echo "
";
    }

    public function getTemplateName()
    {
        return "editcontent/_aside.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  63 => 21,  58 => 19,  53 => 16,  50 => 15,  47 => 14,  44 => 13,  41 => 12,  38 => 11,  35 => 10,  33 => 9,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% import '_macro/_panels.twig' as panels %}*/
/* */
/* <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*         <i class="fa fa-cog fa-fw"></i> {{ __('contenttypes.generic.actions-one',{'%contenttype%': context.contenttype.slug}) }}*/
/*     </div>*/
/* */
/*     <div class="panel-body">*/
/*         {% include 'editcontent/_aside-save.twig' %}*/
/*         {% include 'editcontent/_aside-live-editor.twig' %}*/
/*         {% include 'editcontent/_aside-preview.twig' %}*/
/*         {% include 'editcontent/_aside-status.twig' %}*/
/*         {% if isallowed('delete', context.content) and context.content.id is not empty %}*/
/*             {% include 'editcontent/_aside-delete.twig' %}*/
/*         {% endif %}*/
/*     </div>*/
/* </div>*/
/* */
/* {{ panels.changes(context.contenttype.slug, context.content.id|default(null)) }}*/
/* */
/* {{ panels.lastmodified(context.contenttype.slug, context.content.id) }}*/
/* */
/* {{ panels.stack(5) }}*/
/* */
