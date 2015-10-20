<?php

/* _sub/_listing.twig */
class __TwigTemplate_ae2f2dae357d5b6abbccf59485646b40f5fb81cd1950e7dfe42f89491e6b7f05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_base/_listing.twig", "_sub/_listing.twig", 1);
        $this->blocks = array(
            'listing_columns' => array($this, 'block_listing_columns'),
            'listing_header' => array($this, 'block_listing_header'),
            'listing_id' => array($this, 'block_listing_id'),
            'listing_content' => array($this, 'block_listing_content'),
            'listing_meta' => array($this, 'block_listing_meta'),
            'listing_actions' => array($this, 'block_listing_actions'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_listing.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_listing_columns($context, array $blocks = array())
    {
        $this->displayParentBlock("listing_columns", $context, $blocks);
    }

    // line 5
    public function block_listing_header($context, array $blocks = array())
    {
        $this->displayParentBlock("listing_header", $context, $blocks);
    }

    // line 7
    public function block_listing_id($context, array $blocks = array())
    {
        $this->displayParentBlock("listing_id", $context, $blocks);
    }

    // line 9
    public function block_listing_content($context, array $blocks = array())
    {
        $this->displayParentBlock("listing_content", $context, $blocks);
    }

    // line 11
    public function block_listing_meta($context, array $blocks = array())
    {
        $this->displayParentBlock("listing_meta", $context, $blocks);
    }

    // line 13
    public function block_listing_actions($context, array $blocks = array())
    {
        $this->displayParentBlock("listing_actions", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "_sub/_listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 13,  57 => 11,  51 => 9,  45 => 7,  39 => 5,  33 => 3,  11 => 1,);
    }
}
/* {% extends '_base/_listing.twig' %}*/
/* */
/* {% block listing_columns %}{{ parent() }}{% endblock %}*/
/* */
/* {% block listing_header %}{{ parent() }}{% endblock %}*/
/* */
/* {% block listing_id %}{{ parent() }}{% endblock %}*/
/* */
/* {% block listing_content %}{{ parent() }}{% endblock %}*/
/* */
/* {% block listing_meta %}{{ parent() }}{% endblock %}*/
/* */
/* {% block listing_actions %}{{ parent() }}{% endblock %}*/
/* */
