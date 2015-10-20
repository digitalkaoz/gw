<?php

/* files/_upload.twig */
class __TwigTemplate_645c671b5faa2df2419bc3349ab83e3276ac876e5698e35e5c8e3c1a978a411d extends Twig_Template
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
        echo "<form method=\"post\" id=\"filescreenuploader\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()), 'enctype');
        echo ">
    <fieldset>
        ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()), 'widget');
        echo "
        <div>
        <button type=\"submit\" class=\"btn btn-primary\" disabled>
            <i class=\"fa fa-fw fa-upload\"></i>
            <span>";
        // line 7
        echo $this->env->getExtension('Bolt')->trans("Upload file");
        echo "</span>
        </button>
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "typepopover", array(), "method"), "html", null, true);
        echo "
        </div>
    </fieldset>
</form>

<script>
    \$(function() {
        \$('input[type=file]').addClass('btn-secondary').bootstrapFileInput();

        \$('input:file').change(
            function(){
                if (\$(this).val()) {
                    \$('button:submit').removeAttr('disabled');
                }
            }
        );

    });

</script>
";
    }

    public function getTemplateName()
    {
        return "files/_upload.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  32 => 7,  25 => 3,  19 => 1,);
    }
}
/* <form method="post" id="filescreenuploader" {{ form_enctype(context.form) }}>*/
/*     <fieldset>*/
/*         {{ form_widget(context.form) }}*/
/*         <div>*/
/*         <button type="submit" class="btn btn-primary" disabled>*/
/*             <i class="fa fa-fw fa-upload"></i>*/
/*             <span>{{ __('Upload file') }}</span>*/
/*         </button>*/
/*         {{ macro.typepopover() }}*/
/*         </div>*/
/*     </fieldset>*/
/* </form>*/
/* */
/* <script>*/
/*     $(function() {*/
/*         $('input[type=file]').addClass('btn-secondary').bootstrapFileInput();*/
/* */
/*         $('input:file').change(*/
/*             function(){*/
/*                 if ($(this).val()) {*/
/*                     $('button:submit').removeAttr('disabled');*/
/*                 }*/
/*             }*/
/*         );*/
/* */
/*     });*/
/* */
/* </script>*/
/* */
