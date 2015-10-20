<?php

/* editcontent/_live-editor.twig */
class __TwigTemplate_1915f03f3f2596391e049fd8f59d712a05380aa541c6b1f8841f4a1dac4f0c7e extends Twig_Template
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
        if (( !$this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "liveeditor", array(), "any", true, true) || $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "liveeditor", array()))) {
            // line 2
            echo "<div class=\"live-editor\">
    <iframe id=\"live-editor-iframe\" name=\"live-editor-iframe\"></iframe>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "editcontent/_live-editor.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
/* {% if context.contenttype.liveeditor is not defined or context.contenttype.liveeditor %}{# don't show for viewless contenttypes. #}*/
/* <div class="live-editor">*/
/*     <iframe id="live-editor-iframe" name="live-editor-iframe"></iframe>*/
/* </div>*/
/* {% endif %}*/
/* */
