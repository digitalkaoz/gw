<?php

/* email/firstuser.twig */
class __TwigTemplate_c5da8e8ef499d7d9c5b8995f25ababf882f4f9779d91c9fd317dd7a0f7880909 extends Twig_Template
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
        echo "<p style=\"color: #204460;\"><strong>Congratulations! Bolt Set-up Complete</strong></p>
<p></p>
<p>
    If you have received this e-mail, your new Bolt site '";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["sitename"]) ? $context["sitename"] : null), "html", null, true);
        echo "' is up
    and running and your outbound e-mail settings are correct.
</p>
<p></p>
<p>
    Thank you from all of the people that contribute to creating Bolt, we
    welcome your new site and hope that you enjoy using it as much as we enjoy
    creating it!
</p>
";
    }

    public function getTemplateName()
    {
        return "email/firstuser.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
/* <p style="color: #204460;"><strong>Congratulations! Bolt Set-up Complete</strong></p>*/
/* <p></p>*/
/* <p>*/
/*     If you have received this e-mail, your new Bolt site '{{ sitename }}' is up*/
/*     and running and your outbound e-mail settings are correct.*/
/* </p>*/
/* <p></p>*/
/* <p>*/
/*     Thank you from all of the people that contribute to creating Bolt, we*/
/*     welcome your new site and hope that you enjoy using it as much as we enjoy*/
/*     creating it!*/
/* </p>*/
/* */
