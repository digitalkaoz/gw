<?php

/* _footer.twig */
class __TwigTemplate_cc26db160ef85dcf5b44d0c5b2d6f093476dffd60965d3a572966a016e025e3f extends Twig_Template
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
        // line 15
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
        return array (  35 => 15,  19 => 1,);
    }
}
/* */
/* <!-- Footer -->*/
/* */
/* </div>*/
/* */
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
