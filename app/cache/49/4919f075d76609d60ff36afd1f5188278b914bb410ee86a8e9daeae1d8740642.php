<?php

/* users/_panel-actions_users.twig */
class __TwigTemplate_b64ecefd77280ba121ab5b42febd92724f1d8ebe9bf16f44b9b3af25748ca741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("_base/_panel.twig", "users/_panel-actions_users.twig", 4);
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
        echo "panel-news";
    }

    // line 8
    public function block_panel_icon($context, array $blocks = array())
    {
        echo "fa-cog";
    }

    // line 10
    public function block_panel_head($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt')->trans("users.actions-for-users");
    }

    // line 12
    public function block_panel_body($context, array $blocks = array())
    {
        // line 13
        echo "<div class=\"span6\" style=\"text-align:center\"><a class=\"btn btn-primary\" href=\"";
        echo $this->env->getExtension('routing')->getPath("useredit", array("id" => ""));
        echo "\">";
        echo $this->env->getExtension('Bolt')->trans("panel.user-actions.button.add");
        echo "</a></div>
";
    }

    public function getTemplateName()
    {
        return "users/_panel-actions_users.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  49 => 12,  43 => 10,  37 => 8,  31 => 6,  11 => 4,);
    }
}
/* {##*/
/*  # Sidebar-Panel: Displays actions for users*/
/*  #}*/
/* {% extends '_base/_panel.twig' %}*/
/* */
/* {% block panel_class 'panel-news' %}*/
/* */
/* {% block panel_icon 'fa-cog' %}*/
/* */
/* {% block panel_head __('users.actions-for-users') %}*/
/* */
/* {% block panel_body %}*/
/* <div class="span6" style="text-align:center"><a class="btn btn-primary" href="{{ path('useredit', {'id': ''}) }}">{{ __('panel.user-actions.button.add') }}</a></div>*/
/* {% endblock panel_body %}*/
/* */
