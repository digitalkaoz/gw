<?php

/* _macro/_pager.twig */
class __TwigTemplate_c368819e6cdf3188b4381063d4bdd4530131bb9a509659d87b760f52befb468d extends Twig_Template
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
    }

    // line 7
    public function getpager($__pager__ = null, $__pagerName__ = null, $__surr__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "pager" => $__pager__,
            "pagerName" => $__pagerName__,
            "surr" => $__surr__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 8
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->pager($this->env, ((array_key_exists("pagerName", $context)) ? (_twig_default_filter((isset($context["pagerName"]) ? $context["pagerName"] : null), "")) : ("")), ((array_key_exists("surr", $context)) ? (_twig_default_filter((isset($context["surr"]) ? $context["surr"] : null), 4)) : (4)), "backend"), "html", null, true);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_macro/_pager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  21 => 7,);
    }
}
/* {##*/
/*  # Renders a backend pager*/
/*  #*/
/*  # @param string  pagerName (default: '')*/
/*  # @param int     surr (default: 4)*/
/*  #}*/
/* {% macro pager(pager, pagerName, surr) %}*/
/*     {{ pager(pagerName|default(''), surr|default(4), 'backend') }}*/
/* {% endmacro %}*/
/* */
