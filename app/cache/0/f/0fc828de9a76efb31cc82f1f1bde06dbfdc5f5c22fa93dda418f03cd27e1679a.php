<?php

/* _base/_panel.twig */
class __TwigTemplate_efa054a4f91e5eb151343ca4ab106d045b3efcbf19d1efdcc5903645c42e191a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel_class' => array($this, 'block_panel_class'),
            'panel_alert' => array($this, 'block_panel_alert'),
            'panel_icon' => array($this, 'block_panel_icon'),
            'panel_head' => array($this, 'block_panel_head'),
            'panel_body' => array($this, 'block_panel_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"panel panel-default ";
        $this->displayBlock('panel_class', $context, $blocks);
        echo "\">
    <div ";
        // line 10
        $this->displayBlock('panel_alert', $context, $blocks);
        echo ">
        <i class=\"fa fa-fw ";
        // line 11
        $this->displayBlock('panel_icon', $context, $blocks);
        echo "\"></i>
        ";
        // line 12
        $this->displayBlock('panel_head', $context, $blocks);
        // line 13
        echo "    </div>

    <div class=\"panel-body\">
        ";
        // line 16
        $this->displayBlock('panel_body', $context, $blocks);
        // line 17
        echo "    </div>
</div>
";
    }

    // line 9
    public function block_panel_class($context, array $blocks = array())
    {
    }

    // line 10
    public function block_panel_alert($context, array $blocks = array())
    {
        echo "class=\"panel-heading\"";
    }

    // line 11
    public function block_panel_icon($context, array $blocks = array())
    {
        echo "fa-circle-o";
    }

    // line 12
    public function block_panel_head($context, array $blocks = array())
    {
        echo "[PANEL_HEAD]";
    }

    // line 16
    public function block_panel_body($context, array $blocks = array())
    {
        echo "[PANEL_BODY]";
    }

    public function getTemplateName()
    {
        return "_base/_panel.twig";
    }

    public function getDebugInfo()
    {
        return array (  75 => 16,  69 => 12,  63 => 11,  57 => 10,  52 => 9,  46 => 17,  44 => 16,  39 => 13,  37 => 12,  33 => 11,  29 => 10,  24 => 9,);
    }
}
/* {##*/
/*  # Template for sidebar panels*/
/*  #*/
/*  # Blocks: panel_class:  A classname used for styling*/
/*  #         panel_icon:   A fontawsome CSS class name (Optional)*/
/*  #         panel_head:   The headline*/
/*  #         panel_body:   The Body*/
/*  #}*/
/* <div class="panel panel-default {% block panel_class %}{% endblock panel_class %}">*/
/*     <div {% block panel_alert %}class="panel-heading"{% endblock panel_alert %}>*/
/*         <i class="fa fa-fw {% block panel_icon %}fa-circle-o{% endblock panel_icon %}"></i>*/
/*         {% block panel_head %}[PANEL_HEAD]{% endblock panel_head %}*/
/*     </div>*/
/* */
/*     <div class="panel-body">*/
/*         {% block panel_body %}[PANEL_BODY]{% endblock panel_body %}*/
/*     </div>*/
/* </div>*/
/* */
