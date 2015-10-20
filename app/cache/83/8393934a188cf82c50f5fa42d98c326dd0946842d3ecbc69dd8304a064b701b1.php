<?php

/* editcontent/_aside-save.twig */
class __TwigTemplate_528cf463d0557fda2abfb28be2bef01eb3be887eb890f227d6b112d4562de1be extends Twig_Template
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
        echo "<div class=\"btn-group\">
    <button type=\"button\" class=\"btn btn-primary\" id=\"sidebarsavecontinuebutton\">
        <i class=\"fa fa-flag\"></i> ";
        // line 3
        echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.save", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
        echo "
    </button>

    <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
        <span class=\"sr-only\">Toggle Dropdown</span>
    </button>

    <ul class=\"dropdown-menu\" role=\"menu\">
        <li>
            <button type=\"submit\" class=\"btn btn-link\" id=\"sidebarsavebutton\">
                <i class=\"fa fa-flag\"></i> ";
        // line 14
        echo $this->env->getExtension('Bolt')->trans("Save & return to overview");
        echo "
            </button>
        </li>

        <li>
            <button type=\"submit\" class=\"btn btn-link\" id=\"sidebarsavenewbutton\">
                <i class=\"fa fa-flag\"></i> ";
        // line 20
        echo $this->env->getExtension('Bolt')->trans("Save & create new record");
        echo "
            </button>
        </li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "editcontent/_aside-save.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 20,  37 => 14,  23 => 3,  19 => 1,);
    }
}
/* <div class="btn-group">*/
/*     <button type="button" class="btn btn-primary" id="sidebarsavecontinuebutton">*/
/*         <i class="fa fa-flag"></i> {{ __('contenttypes.generic.save', {'%contenttype%': context.contenttype.slug}) }}*/
/*     </button>*/
/* */
/*     <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">*/
/*         <span class="caret"></span>*/
/*         <span class="sr-only">Toggle Dropdown</span>*/
/*     </button>*/
/* */
/*     <ul class="dropdown-menu" role="menu">*/
/*         <li>*/
/*             <button type="submit" class="btn btn-link" id="sidebarsavebutton">*/
/*                 <i class="fa fa-flag"></i> {{ __('Save & return to overview') }}*/
/*             </button>*/
/*         </li>*/
/* */
/*         <li>*/
/*             <button type="submit" class="btn btn-link" id="sidebarsavenewbutton">*/
/*                 <i class="fa fa-flag"></i> {{ __('Save & create new record') }}*/
/*             </button>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
/* */
