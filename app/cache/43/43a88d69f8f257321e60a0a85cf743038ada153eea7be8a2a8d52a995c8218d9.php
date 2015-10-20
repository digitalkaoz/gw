<?php

/* _footer.twig */
class __TwigTemplate_93fbc6b2f667d02eb87fdd442095392a46c6186b3913d2c8176f50d9a7e26e38 extends Twig_Template
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
        echo "
<!-- Footer -->

</div>
    <div class=\"social-wrapper\">
        <a href=\"https://twitter.com/GermanWahnsinn\" target=\"_blank\" class=\"twitter\">
            <svg viewBox=\"0 0 50 50\" class=\"icon\">
                <use xlink:href=\"#twitter\"></use>
            </svg>
            Brandaktuelles
        </a>
    </div>

    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/main-build.js\" async defer></script>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 14,  19 => 1,);
    }
}
/* */
/* <!-- Footer -->*/
/* */
/* </div>*/
/*     <div class="social-wrapper">*/
/*         <a href="https://twitter.com/GermanWahnsinn" target="_blank" class="twitter">*/
/*             <svg viewBox="0 0 50 50" class="icon">*/
/*                 <use xlink:href="#twitter"></use>*/
/*             </svg>*/
/*             Brandaktuelles*/
/*         </a>*/
/*     </div>*/
/* */
/*     <script src="{{ paths.theme }}js/main-build.js" async defer></script>*/
/* */
/* </body>*/
/* </html>*/
/* */
