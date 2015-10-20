<?php

/* nav/_secondary-filemanagement.twig */
class __TwigTemplate_8297b2ad75f363158cc83dabba873bea9f1fbf9f75d85b5c0c4c6d480b48d88e extends Twig_Template
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
        $context["sub"] = array(0 => array("icon" => "fa:folder-open-o", "label" => $this->env->getExtension('Bolt')->trans("Uploaded files"), "link" => $this->env->getExtension('routing')->getPath("files", array("namespace" => "files", "path" => "")), "isallowed" => "files:uploads"), 1 => array("icon" => "fa:desktop", "label" => $this->env->getExtension('Bolt')->trans("View/edit Templates"), "link" => $this->env->getExtension('routing')->getPath("files", array("namespace" => "theme", "path" => "")), "isallowed" => "files:theme"));
        // line 14
        echo "
";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "submenu", array(0 => "fa:folder-open", 1 => $this->env->getExtension('Bolt')->trans("File Management"), 2 => (isset($context["sub"]) ? $context["sub"] : null), 3 => ((isset($context["page_nav"]) ? $context["page_nav"] : null) == "Settings/FileManagement")), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "nav/_secondary-filemanagement.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 15,  21 => 14,  19 => 1,);
    }
}
/* {% set sub = [*/
/*     {*/
/*         icon: 'fa:folder-open-o',*/
/*         label: __('Uploaded files'),*/
/*         link: path('files', {'namespace': 'files', 'path': ''}),*/
/*         isallowed: 'files:uploads'*/
/*     }, {*/
/*         icon: 'fa:desktop',*/
/*         label: __('View/edit Templates'),*/
/*         link: path('files', {'namespace': 'theme', 'path': ''}),*/
/*         isallowed: 'files:theme'*/
/*     }*/
/* ] %}*/
/* */
/* {{ nav.submenu('fa:folder-open', __('File Management'), sub, (page_nav == 'Settings/FileManagement')) }}*/
/* */
