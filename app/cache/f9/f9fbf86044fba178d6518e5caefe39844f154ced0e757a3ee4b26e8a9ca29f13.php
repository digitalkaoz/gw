<?php

/* extend/extend.twig */
class __TwigTemplate_1fe7299952e392574501bf463f2fa07cb8a89c6203e456cbc72197ade4130e0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("_base/_page-nav.twig", "extend/extend.twig", 3);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'messages' => array($this, 'block_messages'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_nav($context, array $blocks = array())
    {
        echo "ExtendBolt";
    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt')->trans("Extend %boltname%", array("%boltname%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/branding/name"), "method")));
    }

    // line 10
    public function block_messages($context, array $blocks = array())
    {
        echo "";
    }

    // line 12
    public function block_page_main($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->loadTemplate("extend/_package.twig", "extend/extend.twig", 13)->display($context);
        // line 14
        echo "
    ";
        // line 15
        if ((isset($context["messages"]) ? $context["messages"] : null)) {
            // line 16
            echo "        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"alert alert-info\">
                    <button class=\"close\" data-dismiss=\"alert\">×</button>
                    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 21
                echo "                        ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "<br>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                </div>
            </div>
        </div>
    ";
        }
        // line 27
        echo "
    <div class=\"row extend-bolt-container\">
        <div class=\"col-md-9\">

            ";
        // line 31
        if ( !(isset($context["writeable"]) ? $context["writeable"] : null)) {
            // line 32
            echo "            ";
            $context["msg"] = $this->env->getExtension('Bolt')->trans(((("The extensions directory (<code>%dir%</code>) does not exist, or it is not writable. " . "This means that you cannot manage Bolt extensions through the backend; consider ") . "managing extensions manually, or changing file permissions to allow Bolt ") . "write access to (<code>%dir%</code>)."), array("%dir%" =>             // line 35
(isset($context["extensionsPath"]) ? $context["extensionsPath"] : null)));
            // line 36
            echo "            <div class=\"alert alert-warning\">
                <button class=\"close\" data-dismiss=\"alert\">×</button>
                    ";
            // line 38
            echo $this->env->getExtension('Bolt')->ymllink((isset($context["msg"]) ? $context["msg"] : null));
            echo "
            </div>
            ";
        }
        // line 41
        echo "
            ";
        // line 42
        if ( !(isset($context["enabled"]) ? $context["enabled"] : null)) {
            // line 43
            echo "            ";
            $context["msg"] = $this->env->getExtension('Bolt')->trans((("Extensions loading has been disabled by an administrator in the %config% file. " . "You may install, update and uninstall extensions but they will not load until this setting ") . "has been changed."), array("%config%" => $this->env->getExtension('Bolt')->ymllink("config.yml")));
            // line 46
            echo "            <div class=\"alert alert-warning\">
                <button class=\"close\" data-dismiss=\"alert\">×</button>
                    ";
            // line 48
            echo $this->env->getExtension('Bolt')->ymllink((isset($context["msg"]) ? $context["msg"] : null));
            echo "
            </div>
            ";
        }
        // line 51
        echo "
            ";
        // line 52
        $this->loadTemplate("_sub/_messages.twig", "extend/extend.twig", 52)->display($context);
        // line 53
        echo "
            <section>
                <h2>";
        // line 55
        echo $this->env->getExtension('Bolt')->trans("Install a new Extension");
        echo "</h2>
                <p>
                    ";
        // line 57
        if (((isset($context["writeable"]) ? $context["writeable"] : null) && (isset($context["online"]) ? $context["online"] : null))) {
            // line 58
            echo "                    ";
            echo $this->env->getExtension('Bolt')->trans("Add a new extension using the form below.");
            echo "
                    ";
        }
        // line 60
        echo "                    ";
        echo $this->env->getExtension('Bolt')->trans("You can discover new extensions by visiting");
        echo "
                    <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["site"]) ? $context["site"] : null), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, (isset($context["site"]) ? $context["site"] : null), "html", null, true);
        echo "</a>
                </p>
                ";
        // line 63
        if (((isset($context["writeable"]) ? $context["writeable"] : null) && (isset($context["online"]) ? $context["online"] : null))) {
            // line 64
            echo "                <div class=\"install-container\">
                        <div class=\"auto-search hide-block\"></div>
                        <input type=\"text\" name=\"check-package\" placeholder=\"Extension name eg: bolt/widget\">
                        <a class=\"btn btn-tertiary check-package\" data-request=\"check-package\" data-toggle=\"modal\" data-target=\"#installModal\">
                            <i class=\"icon-gears\"></i> ";
            // line 68
            echo $this->env->getExtension('Bolt')->trans("Browse Versions");
            echo "
                        </a>

                        <div class=\"modal fade\" id=\"installModal\" tabindex=\"-1\" role=\"dialog\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    ";
            // line 74
            $this->loadTemplate("extend/install-package.twig", "extend/extend.twig", 74)->display($context);
            // line 75
            echo "                                </div>
                            </div>
                        </div>
                </div>
                ";
        }
        // line 80
        echo "            </section>

            <hr />

            <div class=\"update-container hide-block\">
                <h3>";
        // line 85
        echo $this->env->getExtension('Bolt')->trans("Updates");
        echo "</h3>
                ";
        // line 86
        if ((isset($context["writeable"]) ? $context["writeable"] : null)) {
            // line 87
            echo "                <pre class=\"update-output console\">";
            echo $this->env->getExtension('Bolt')->trans("Checking for available updates (this may take up to 60 seconds)");
            echo "..</pre>
                ";
        } else {
            // line 89
            echo "                <pre class=\"update-output\">";
            echo $this->env->getExtension('Bolt')->trans("Cannot check for updates in read-only mode");
            echo "</pre>
                ";
        }
        // line 91
        echo "                <div class=\"update-list hide-block\">
                    <table class=\"dashboardlisting table\">
                        <thead>
                            <tr>
                                <th>";
        // line 95
        echo $this->env->getExtension('Bolt')->trans("Extension");
        echo "</th>
                                <th>";
        // line 96
        echo $this->env->getExtension('Bolt')->trans("Version");
        echo "</th>
                                <th>";
        // line 97
        echo $this->env->getExtension('Bolt')->trans("Actions");
        echo "</th>
                            </tr>
                        </thead>
                        <tbody class=\"update-list-items\">

                        </tbody>
                    </table>
                </div>
            </div>
            <section class=\"installed-container\">
                <h2>";
        // line 107
        echo $this->env->getExtension('Bolt')->trans("Your Currently Installed Extensions");
        echo "</h2>
                ";
        // line 108
        if ((isset($context["writeable"]) ? $context["writeable"] : null)) {
            // line 109
            echo "                <pre class=\"installed console\" data-request=\"installed\">";
            echo $this->env->getExtension('Bolt')->trans("Checking installed packages");
            echo "..</pre>
                ";
        } else {
            // line 111
            echo "                <pre class=\"installed\">";
            echo $this->env->getExtension('Bolt')->trans("Cannot check installed packages in read-only mode");
            echo "</pre>
                ";
        }
        // line 113
        echo "                <div class=\"installed-list hide-block\">
                    <div class=\"installed-list-items\">

                    </div>
                </div>
            </section>

            <!-- Modal for readmes -->
            <div class=\"modal fade\" id=\"readmeModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
              <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Modal title</h4>
                  </div>
                  <div class=\"modal-body\">
                    ...
                  </div>
                </div>
              </div>
            </div>

        </div>

        <aside class=\"col-md-3\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\"><i class=\"fa fa-cog fa-fw\"></i>Extensions Options</div>
                <div class=\"panel-body\">
                        <p><strong>";
        // line 141
        echo $this->env->getExtension('Bolt')->trans("Check for updates");
        echo "</strong></p>
                        <div class=\"btn-group\">
                            <a class=\"btn btn-tertiary";
        // line 143
        if (( !(isset($context["writeable"]) ? $context["writeable"] : null) ||  !(isset($context["online"]) ? $context["online"] : null))) {
            echo " disabled";
        }
        echo "\" data-request=\"update-check\">
                                <i class=\"fa fa-refresh fa-fw\"></i> ";
        // line 144
        echo $this->env->getExtension('Bolt')->trans("Run update check");
        echo "
                            </a>
                        </div>
                        <p>";
        // line 147
        echo $this->env->getExtension('Bolt')->trans("This won't install anything, just show you available updates");
        echo "</p>
                        <hr>
                        <p><strong>";
        // line 149
        echo $this->env->getExtension('Bolt')->trans("Install all updates");
        echo "</strong></p>
                        <div class=\"btn-group\">
                            <a class=\"btn btn-primary";
        // line 151
        if (( !(isset($context["writeable"]) ? $context["writeable"] : null) ||  !(isset($context["online"]) ? $context["online"] : null))) {
            echo " disabled";
        }
        echo "\" data-request=\"update-run\">
                                <i class=\"fa fa-refresh fa-fw\"></i> ";
        // line 152
        echo $this->env->getExtension('Bolt')->trans("Run all Updates");
        echo "
                            </a>
                        </div>
                        <p>";
        // line 155
        echo $this->env->getExtension('Bolt')->trans("This will install all available updates.");
        echo "</p>
                        <hr>
                        <div class=\"btn-group\">
                            <a class=\"btn btn-primary";
        // line 158
        if (( !(isset($context["writeable"]) ? $context["writeable"] : null) ||  !(isset($context["online"]) ? $context["online"] : null))) {
            echo " disabled";
        }
        echo "\" data-request=\"install-run\">
                                <i class=\"fa fa-download fa-fw\"></i> ";
        // line 159
        echo $this->env->getExtension('Bolt')->trans("Install all Packages");
        echo "
                            </a>
                        </div>
                        <p>";
        // line 162
        echo $this->env->getExtension('Bolt')->trans("This will make sure all packages listed are installed. Use this if you've recently moved to a new server or if you have manually added an extension.");
        echo "</p>
                </div>
            </div>
        </aside>

    </div>

    <script>
        var site = '";
        // line 170
        echo twig_escape_filter($this->env, (isset($context["site"]) ? $context["site"] : null), "html", null, true);
        echo "';
        var baseurl = '";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "bolt", array()), "html", null, true);
        echo "extend/';
        var rootpath = '";
        // line 172
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "rootpath", array()), "html", null, true);
        echo "';

        jQuery(document).ready(function(\$) {
            var boltExt = new BoltExtender();
            boltExt.setMessage('badJson', '";
        // line 176
        echo $this->env->getExtension('Bolt')->trans("Malformed JSON response. Ensure no debugging or other code is being added to the response");
        echo "' );
            boltExt.setMessage('confirmRemove', '";
        // line 177
        echo $this->env->getExtension('Bolt')->trans("Please confirm that you want to remove this extension?");
        echo "');
            boltExt.setMessage('copying', '";
        // line 178
        echo $this->env->getExtension('Bolt')->trans("Copying theme assets …");
        echo "');
            boltExt.setMessage('extError', '";
        // line 179
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('Bolt')->trans("Bolt Extension could not be found. Please check at %site% to ensure correct name."), array("%site%" => (isset($context["site"]) ? $context["site"] : null))), "html", null, true);
        echo "' );
            boltExt.setMessage('installAll', '";
        // line 180
        echo $this->env->getExtension('Bolt')->trans("Running install of all packages …");
        echo "');
            boltExt.setMessage('installing', '";
        // line 181
        echo $this->env->getExtension('Bolt')->trans("Preparing to install package …");
        echo "');
            boltExt.setMessage('noStable', '";
        // line 182
        echo $this->env->getExtension('Bolt')->trans("No Stable Versions Available");
        echo "');
            boltExt.setMessage('noTest', '";
        // line 183
        echo $this->env->getExtension('Bolt')->trans("No Test Versions Available");
        echo "');
            boltExt.setMessage('nothtingInstalled', '";
        // line 184
        echo $this->env->getExtension('Bolt')->trans("No Bolt Extensions installed.");
        echo "');
            boltExt.setMessage('overwrite', '";
        // line 185
        echo $this->env->getExtension('Bolt')->trans("This will overwrite any existing files! Are you sure?");
        echo "');
            boltExt.setMessage('removing', '";
        // line 186
        echo $this->env->getExtension('Bolt')->trans("Preparing to remove package …");
        echo "');
            boltExt.setMessage('runningUpdate', '";
        // line 187
        echo $this->env->getExtension('Bolt')->trans("Running update …");
        echo "');
            boltExt.setMessage('updating', '";
        // line 188
        echo $this->env->getExtension('Bolt')->trans("Searching for available updates …");
        echo "');
            boltExt.setMessage('updated', '";
        // line 189
        echo $this->env->getExtension('Bolt')->trans("Everything is up to date!");
        echo "');
            boltExt.setPath('extensionsconfigpath', '";
        // line 190
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "extensionsconfigpath", array()), "html", null, true);
        echo "');
            boltExt.setPath('extensionspath', '";
        // line 191
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "extensionspath", array()), "html", null, true);
        echo "');
        });
    </script>

";
    }

    public function getTemplateName()
    {
        return "extend/extend.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 191,  424 => 190,  420 => 189,  416 => 188,  412 => 187,  408 => 186,  404 => 185,  400 => 184,  396 => 183,  392 => 182,  388 => 181,  384 => 180,  380 => 179,  376 => 178,  372 => 177,  368 => 176,  361 => 172,  357 => 171,  353 => 170,  342 => 162,  336 => 159,  330 => 158,  324 => 155,  318 => 152,  312 => 151,  307 => 149,  302 => 147,  296 => 144,  290 => 143,  285 => 141,  255 => 113,  249 => 111,  243 => 109,  241 => 108,  237 => 107,  224 => 97,  220 => 96,  216 => 95,  210 => 91,  204 => 89,  198 => 87,  196 => 86,  192 => 85,  185 => 80,  178 => 75,  176 => 74,  167 => 68,  161 => 64,  159 => 63,  152 => 61,  147 => 60,  141 => 58,  139 => 57,  134 => 55,  130 => 53,  128 => 52,  125 => 51,  119 => 48,  115 => 46,  112 => 43,  110 => 42,  107 => 41,  101 => 38,  97 => 36,  95 => 35,  93 => 32,  91 => 31,  85 => 27,  79 => 23,  70 => 21,  66 => 20,  60 => 16,  58 => 15,  55 => 14,  52 => 13,  49 => 12,  43 => 10,  37 => 7,  31 => 5,  11 => 3,);
    }
}
/* {# Page: NavSecondary > Extend Bolt #}*/
/* */
/* {% extends "_base/_page-nav.twig" %}*/
/* */
/* {% block page_nav 'ExtendBolt' %}*/
/* */
/* {% block page_title __('Extend %boltname%', {'%boltname%': app.config.get('general/branding/name')}) %}*/
/* */
/* {# clear default messages, because we use them in a different spot, in this template #}*/
/* {% block messages "" %}*/
/* */
/* {% block page_main %}*/
/*     {% include 'extend/_package.twig' %}*/
/* */
/*     {% if messages %}*/
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 <div class="alert alert-info">*/
/*                     <button class="close" data-dismiss="alert">×</button>*/
/*                     {% for message in messages %}*/
/*                         {{ message }}<br>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     <div class="row extend-bolt-container">*/
/*         <div class="col-md-9">*/
/* */
/*             {% if not writeable %}*/
/*             {% set msg = __('The extensions directory (<code>%dir%</code>) does not exist, or it is not writable. ' ~*/
/*                    'This means that you cannot manage Bolt extensions through the backend; consider ' ~*/
/*                    'managing extensions manually, or changing file permissions to allow Bolt ' ~*/
/*                    'write access to (<code>%dir%</code>).', {'%dir%': extensionsPath}) %}*/
/*             <div class="alert alert-warning">*/
/*                 <button class="close" data-dismiss="alert">×</button>*/
/*                     {{ msg|ymllink }}*/
/*             </div>*/
/*             {% endif %}*/
/* */
/*             {% if not enabled %}*/
/*             {% set msg = __('Extensions loading has been disabled by an administrator in the %config% file. ' ~*/
/*                    'You may install, update and uninstall extensions but they will not load until this setting ' ~*/
/*                    'has been changed.', {'%config%': 'config.yml'|ymllink }) %}*/
/*             <div class="alert alert-warning">*/
/*                 <button class="close" data-dismiss="alert">×</button>*/
/*                     {{ msg|ymllink }}*/
/*             </div>*/
/*             {% endif %}*/
/* */
/*             {% include '_sub/_messages.twig' %}*/
/* */
/*             <section>*/
/*                 <h2>{{ __('Install a new Extension') }}</h2>*/
/*                 <p>*/
/*                     {% if writeable and online %}*/
/*                     {{ __('Add a new extension using the form below.') }}*/
/*                     {% endif %}*/
/*                     {{ __('You can discover new extensions by visiting') }}*/
/*                     <a href="{{ site }}" target="_blank">{{ site }}</a>*/
/*                 </p>*/
/*                 {% if writeable and online %}*/
/*                 <div class="install-container">*/
/*                         <div class="auto-search hide-block"></div>*/
/*                         <input type="text" name="check-package" placeholder="Extension name eg: bolt/widget">*/
/*                         <a class="btn btn-tertiary check-package" data-request="check-package" data-toggle="modal" data-target="#installModal">*/
/*                             <i class="icon-gears"></i> {{ __('Browse Versions') }}*/
/*                         </a>*/
/* */
/*                         <div class="modal fade" id="installModal" tabindex="-1" role="dialog">*/
/*                             <div class="modal-dialog">*/
/*                                 <div class="modal-content">*/
/*                                     {% include 'extend/install-package.twig' %}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                 </div>*/
/*                 {% endif %}*/
/*             </section>*/
/* */
/*             <hr />*/
/* */
/*             <div class="update-container hide-block">*/
/*                 <h3>{{ __('Updates') }}</h3>*/
/*                 {% if writeable %}*/
/*                 <pre class="update-output console">{{ __('Checking for available updates (this may take up to 60 seconds)') }}..</pre>*/
/*                 {% else %}*/
/*                 <pre class="update-output">{{ __('Cannot check for updates in read-only mode') }}</pre>*/
/*                 {% endif %}*/
/*                 <div class="update-list hide-block">*/
/*                     <table class="dashboardlisting table">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>{{ __('Extension') }}</th>*/
/*                                 <th>{{ __('Version') }}</th>*/
/*                                 <th>{{ __('Actions') }}</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody class="update-list-items">*/
/* */
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/*             <section class="installed-container">*/
/*                 <h2>{{ __('Your Currently Installed Extensions') }}</h2>*/
/*                 {% if writeable %}*/
/*                 <pre class="installed console" data-request="installed">{{ __('Checking installed packages') }}..</pre>*/
/*                 {% else %}*/
/*                 <pre class="installed">{{ __('Cannot check installed packages in read-only mode') }}</pre>*/
/*                 {% endif %}*/
/*                 <div class="installed-list hide-block">*/
/*                     <div class="installed-list-items">*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
/* */
/*             <!-- Modal for readmes -->*/
/*             <div class="modal fade" id="readmeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*               <div class="modal-dialog">*/
/*                 <div class="modal-content">*/
/*                   <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>*/
/*                     <h4 class="modal-title" id="myModalLabel">Modal title</h4>*/
/*                   </div>*/
/*                   <div class="modal-body">*/
/*                     ...*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*         <aside class="col-md-3">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading"><i class="fa fa-cog fa-fw"></i>Extensions Options</div>*/
/*                 <div class="panel-body">*/
/*                         <p><strong>{{ __('Check for updates') }}</strong></p>*/
/*                         <div class="btn-group">*/
/*                             <a class="btn btn-tertiary{% if not writeable or not online %} disabled{% endif %}" data-request="update-check">*/
/*                                 <i class="fa fa-refresh fa-fw"></i> {{ __('Run update check') }}*/
/*                             </a>*/
/*                         </div>*/
/*                         <p>{{ __("This won't install anything, just show you available updates") }}</p>*/
/*                         <hr>*/
/*                         <p><strong>{{ __('Install all updates') }}</strong></p>*/
/*                         <div class="btn-group">*/
/*                             <a class="btn btn-primary{% if not writeable or not online %} disabled{% endif %}" data-request="update-run">*/
/*                                 <i class="fa fa-refresh fa-fw"></i> {{ __('Run all Updates') }}*/
/*                             </a>*/
/*                         </div>*/
/*                         <p>{{ __("This will install all available updates.") }}</p>*/
/*                         <hr>*/
/*                         <div class="btn-group">*/
/*                             <a class="btn btn-primary{% if not writeable or not online %} disabled{% endif %}" data-request="install-run">*/
/*                                 <i class="fa fa-download fa-fw"></i> {{ __('Install all Packages') }}*/
/*                             </a>*/
/*                         </div>*/
/*                         <p>{{ __("This will make sure all packages listed are installed. Use this if you've recently moved to a new server or if you have manually added an extension.") }}</p>*/
/*                 </div>*/
/*             </div>*/
/*         </aside>*/
/* */
/*     </div>*/
/* */
/*     <script>*/
/*         var site = '{{ site }}';*/
/*         var baseurl = '{{ paths.bolt }}extend/';*/
/*         var rootpath = '{{ paths.rootpath }}';*/
/* */
/*         jQuery(document).ready(function($) {*/
/*             var boltExt = new BoltExtender();*/
/*             boltExt.setMessage('badJson', '{{ __('Malformed JSON response. Ensure no debugging or other code is being added to the response') }}' );*/
/*             boltExt.setMessage('confirmRemove', '{{ __('Please confirm that you want to remove this extension?') }}');*/
/*             boltExt.setMessage('copying', '{{ __('Copying theme assets …') }}');*/
/*             boltExt.setMessage('extError', '{{ __('Bolt Extension could not be found. Please check at %site% to ensure correct name.')|replace({'%site%': site}) }}' );*/
/*             boltExt.setMessage('installAll', '{{ __('Running install of all packages …') }}');*/
/*             boltExt.setMessage('installing', '{{ __('Preparing to install package …') }}');*/
/*             boltExt.setMessage('noStable', '{{ __('No Stable Versions Available') }}');*/
/*             boltExt.setMessage('noTest', '{{ __('No Test Versions Available') }}');*/
/*             boltExt.setMessage('nothtingInstalled', '{{ __('No Bolt Extensions installed.') }}');*/
/*             boltExt.setMessage('overwrite', '{{ __('This will overwrite any existing files! Are you sure?') }}');*/
/*             boltExt.setMessage('removing', '{{ __('Preparing to remove package …') }}');*/
/*             boltExt.setMessage('runningUpdate', '{{ __('Running update …') }}');*/
/*             boltExt.setMessage('updating', '{{ __('Searching for available updates …') }}');*/
/*             boltExt.setMessage('updated', '{{ __('Everything is up to date!') }}');*/
/*             boltExt.setPath('extensionsconfigpath', '{{ paths.extensionsconfigpath }}');*/
/*             boltExt.setPath('extensionspath', '{{ paths.extensionspath }}');*/
/*         });*/
/*     </script>*/
/* */
/* {% endblock page_main %}*/
/* */
