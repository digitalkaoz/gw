<?php

/* dashboard/_suggestloripsum.twig */
class __TwigTemplate_afb203c5e7480e78674b71acd65a66036844e8469c68f65f92e7282faebeef34 extends Twig_Template
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
        echo "<div class=\"alert alert-info\">
    <button class=\"close\" data-dismiss=\"alert\">×</button>
    ";
        // line 3
        echo $this->env->getExtension('Bolt')->trans("page.dashboard.empty-database");
        echo "
    ";
        // line 4
        if ($this->env->getExtension('Bolt')->isAllowed("prefill")) {
            // line 5
            echo "        ";
            echo $this->env->getExtension('Bolt')->trans("page.dashboard.quickstart", array("%url%" => $this->env->getExtension('routing')->getPath("prefill", array("force" => 1))));
            echo "
    ";
        }
        // line 7
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "dashboard/_suggestloripsum.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  29 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="alert alert-info">*/
/*     <button class="close" data-dismiss="alert">×</button>*/
/*     {{ __("page.dashboard.empty-database") }}*/
/*     {% if isallowed('prefill') %}*/
/*         {{ __("page.dashboard.quickstart", {'%url%': path('prefill', {'force': 1})}) }}*/
/*     {% endif %}*/
/* </div>*/
/* */
