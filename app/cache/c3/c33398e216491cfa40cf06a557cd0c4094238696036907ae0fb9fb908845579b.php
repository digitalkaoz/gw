<?php

/* _base/_listing.twig */
class __TwigTemplate_f247cde957e949f3cffd5048cbb81e203c9313c7433eb9670c8e49a42616b031 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'listing_columns' => array($this, 'block_listing_columns'),
            'listing_header' => array($this, 'block_listing_header'),
            'listing_id' => array($this, 'block_listing_id'),
            'listing_content' => array($this, 'block_listing_content'),
            'listing_meta' => array($this, 'block_listing_meta'),
            'listing_actions' => array($this, 'block_listing_actions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["macro"] = $this->loadTemplate("_macro/_macro.twig", "_base/_listing.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["modifiable"] = (((($this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "create", array()) || $this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "edit", array())) || $this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "delete", array())) || $this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "publish", array())) || $this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "depublish", array()));
        // line 4
        echo "
";
        // line 6
        if (((( !(isset($context["compact"]) ? $context["compact"] : null) && $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array(), "any", true, true)) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first", array()) || ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array()), "name", array()) != (isset($context["lastgroup"]) ? $context["lastgroup"] : null)))) && ($this->env->getExtension('Bolt')->request("order") == ""))) {
            // line 7
            echo "    ";
            if ( !$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first", array())) {
                echo "</tbody>";
            }
            // line 8
            echo "    <tbody ";
            if ((isset($context["modifiable"]) ? $context["modifiable"] : null)) {
                echo "class=\"sortable\"";
            }
            echo ">
    <tr class=\"grouping\">
        <th colspan=\"";
            // line 10
            $this->displayBlock('listing_columns', $context, $blocks);
            echo "\">
            <h3 ";
            // line 11
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first", array())) {
                echo "class=\"first\"";
            }
            echo ">
                ";
            // line 12
            if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array()), "name", array())) {
                // line 13
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array()), "name", array()), "html", null, true);
                echo "
                ";
            } else {
                // line 15
                echo "                    ";
                echo $this->env->getExtension('Bolt')->trans("(no group)");
                echo "
                ";
            }
            // line 17
            echo "            </h3>
        </th>
    </tr>
";
        }
        // line 21
        echo "
";
        // line 23
        if (( !(isset($context["compact"]) ? $context["compact"] : null) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first", array()) || (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array()), "name", array()) != (isset($context["lastgroup"]) ? $context["lastgroup"] : null))) && ($this->env->getExtension('Bolt')->request("order") == ""))))) {
            // line 24
            echo "    ";
            $context["lastgroup"] = (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array()))) : (""));
            // line 25
            echo "    ";
            if (twig_in_filter("filter", twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "all", array())))) {
                // line 26
                echo "        ";
                $context["filter"] = (("filter=" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "all", array()), "filter", array())) . "&");
                // line 27
                echo "    ";
            } else {
                // line 28
                echo "        ";
                $context["filter"] = "";
                // line 29
                echo "    ";
            }
            // line 30
            echo "
    ";
            // line 31
            $context["link"] = (("?" . (isset($context["filter"]) ? $context["filter"] : null)) . "order=");
            // line 32
            echo "    <tr>
        ";
            // line 33
            $this->displayBlock('listing_header', $context, $blocks);
            // line 56
            echo "    </tr>
";
        }
        // line 58
        echo "
<tr ";
        // line 59
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()) != "published")) {
            echo "class=\"dim\"";
        }
        if (( !(isset($context["compact"]) ? $context["compact"] : null) && (isset($context["modifiable"]) ? $context["modifiable"] : null))) {
            echo " id=\"item_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 60
        $this->displayBlock('listing_id', $context, $blocks);
        // line 70
        echo "
    ";
        // line 71
        $this->displayBlock('listing_content', $context, $blocks);
        // line 104
        echo "
    ";
        // line 105
        if ( !(isset($context["compact"]) ? $context["compact"] : null)) {
            // line 106
            echo "        ";
            $this->displayBlock('listing_meta', $context, $blocks);
            // line 125
            echo "    ";
        }
        // line 126
        echo "
    ";
        // line 127
        $this->displayBlock('listing_actions', $context, $blocks);
        // line 214
        echo "
</tr>
";
    }

    // line 10
    public function block_listing_columns($context, array $blocks = array())
    {
        echo "6";
    }

    // line 33
    public function block_listing_header($context, array $blocks = array())
    {
        // line 34
        echo "        ";
        if (( !(isset($context["compact"]) ? $context["compact"] : null) && (isset($context["modifiable"]) ? $context["modifiable"] : null))) {
            // line 35
            echo "            <th class=\"check hidden-xs\"><input type=\"checkbox\" name=\"checkRow\" title=\"";
            echo $this->env->getExtension('Bolt')->trans("Select all");
            echo "\" /></th>
        ";
        } else {
            // line 37
            echo "            <th style=\"margin: 0; padding: 0;\"></th>
        ";
        }
        // line 39
        echo "
        <th class=\"hidden-xs\"><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        if (($this->env->getExtension('Bolt')->request("order") == "id")) {
            echo "-";
        }
        echo "id\">
            ";
        // line 41
        echo $this->env->getExtension('Bolt')->trans("Id");
        echo "
        </a></th>

        <th style=\"width:80%\">
            <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        if (($this->env->getExtension('Bolt')->request("order") == $this->env->getExtension('Bolt')->first($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "TitleColumnName", array(), "method")))) {
            echo "-";
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->first($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "TitleColumnName", array(), "method")), "html", null, true);
        echo "\">
                ";
        // line 46
        echo $this->env->getExtension('Bolt')->trans("Title");
        echo " / ";
        echo $this->env->getExtension('Bolt')->trans("Excerpt");
        echo "
            </a>
        </th>

        <th>&nbsp;</th>

        <th class=\"username hidden-xs\"><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        if (($this->env->getExtension('Bolt')->request("order") == "datecreated")) {
            echo "-";
        }
        echo "datecreated\">";
        echo $this->env->getExtension('Bolt')->trans("Meta");
        echo "</a></th>

        <th><a href=\"?\">";
        // line 54
        echo $this->env->getExtension('Bolt')->trans("Actions");
        echo "</a></th>
        ";
    }

    // line 60
    public function block_listing_id($context, array $blocks = array())
    {
        // line 61
        echo "
        ";
        // line 62
        if (( !(isset($context["compact"]) ? $context["compact"] : null) && $this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "delete", array()))) {
            // line 63
            echo "            <td class=\"check hidden-xs\"><input type=\"checkbox\" name=\"checkRow\"></td>
        ";
        } else {
            // line 65
            echo "            <td style=\"margin: 0; padding: 0;\"></td>
        ";
        }
        // line 67
        echo "        <td class=\"id hidden-xs\">№ ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "html", null, true);
        echo "</td>

    ";
    }

    // line 71
    public function block_listing_content($context, array $blocks = array())
    {
        // line 72
        echo "        <td class=\"excerpt ";
        if ( !(isset($context["compact"]) ? $context["compact"] : null)) {
            echo "large";
        }
        echo "\">
            ";
        // line 73
        $context["title"] = (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getTitle", array()), (("<em>(" . $this->env->getExtension('Bolt')->trans("no title …")) . ")</em>"))) : ((("<em>(" . $this->env->getExtension('Bolt')->trans("no title …")) . ")</em>")));
        // line 74
        echo "            <span>
                <strong class=\"visible-xs\">№ ";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "html", null, true);
        echo ". </strong>
                <strong>
                    ";
        // line 77
        if ((isset($context["modifiable"]) ? $context["modifiable"] : null)) {
            // line 78
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
            echo "\" title=\"Slug: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "slug", array()), "html", null, true);
            echo "\">
                            ";
            // line 79
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 82
            echo "                        <strong>
                            ";
            // line 83
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "
                        </strong>
                     ";
        }
        // line 86
        echo "                </strong>
                ";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "excerpt", array(0 => ((isset($context["excerptlength"]) ? $context["excerptlength"] : null) - twig_length_filter($this->env, (isset($context["title"]) ? $context["title"] : null)))), "method"), "html", null, true);
        echo "
            </span>
        </td>
        <td class=\"listthumb\">
            ";
        // line 91
        if ( !twig_test_empty($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getImage", array()))) {
            // line 92
            echo "                ";
            // line 93
            echo "                ";
            // line 94
            echo "                ";
            $context["thumb_height"] = twig_round(((isset($context["thumbsize"]) ? $context["thumbsize"] : null) * 0.75));
            // line 95
            echo "                ";
            $context["thumb_small"] = $this->env->getExtension('Bolt')->thumbnail($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getImage", array()), (isset($context["thumbsize"]) ? $context["thumbsize"] : null), (isset($context["thumb_height"]) ? $context["thumb_height"] : null), "c");
            // line 96
            echo "                ";
            $context["thumb_large"] = $this->env->getExtension('Bolt')->thumbnail($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getImage", array()), 1000, 800, "r");
            // line 97
            echo "                ";
            $context["thumb_title"] = (($this->env->getExtension('Bolt')->trans("Image") . ": ") . $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getImage", array()));
            // line 98
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["thumb_large"]) ? $context["thumb_large"] : null), "html", null, true);
            echo "\" class=\"magnific\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["thumb_title"]) ? $context["thumb_title"] : null), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 99
            echo twig_escape_filter($this->env, (isset($context["thumb_small"]) ? $context["thumb_small"] : null), "html", null, true);
            echo "\" width=\"";
            echo twig_escape_filter($this->env, (isset($context["thumbsize"]) ? $context["thumbsize"] : null), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, (isset($context["thumb_height"]) ? $context["thumb_height"] : null), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Bolt')->trans("Thumbnail");
            echo "\">
                </a>
            ";
        }
        // line 102
        echo "        </td>
    ";
    }

    // line 106
    public function block_listing_meta($context, array $blocks = array())
    {
        // line 107
        echo "            <td class=\"username hidden-xs\">
                <i class=\"fa fa-user fa-fw\"></i>
                ";
        // line 109
        if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array(), "any", false, true), "displayname", array(), "any", true, true)) {
            // line 110
            echo "                    ";
            echo $this->env->getExtension('Bolt')->trim($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array()), "displayname", array()), 15);
            echo "
                ";
        } else {
            // line 112
            echo "                    <s>";
            echo $this->env->getExtension('Bolt')->trim($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "values", array()), "ownerid", array()), 15);
            echo "</s>
                ";
        }
        // line 113
        echo "<br>
                ";
        // line 114
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()) == "timed")) {
            // line 115
            echo "                    <i class=\"fa fa-clock-o status-timed fa-fw\"></i> <time class=\"moment\" datetime=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish", array()), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish", array()), "html", null, true);
            echo "</time><br>
                ";
        } else {
            // line 117
            echo "                    <i class=\"fa fa-circle status-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()), "html", null, true);
            echo " fa-fw\"></i> ";
            echo $this->env->getExtension('Bolt')->localeDateTime($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish", array()), "%x");
            echo "<br>
                ";
        }
        // line 119
        echo "
                ";
        // line 120
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder", array(), "any", true, true) &&  !($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder", array()) === false))) {
            // line 121
            echo "                    <i class=\"fa fa-sort fa-fw\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("Order: %sort%", array("%sort%" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder", array())));
            echo "<br>
                ";
        }
        // line 123
        echo "            </td>
        ";
    }

    // line 127
    public function block_listing_actions($context, array $blocks = array())
    {
        // line 128
        echo "        <td class=\"actions\">
            <div class=\"btn-group\">
                ";
        // line 130
        if ((isset($context["modifiable"]) ? $context["modifiable"] : null)) {
            // line 131
            echo "                <a class=\"btn btn-default btn-xs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
            echo "\">
                    <i class=\"fa fa-edit\"></i> ";
            // line 132
            echo $this->env->getExtension('Bolt')->trans("Edit");
            echo "
                </a>
                ";
        }
        // line 135
        echo "                <button class=\"btn btn-default dropdown-toggle btn-xs\" data-toggle=\"dropdown\">

                    <i class=\"fa fa-info-sign\"></i>
                    <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu pull-right\">
                ";
        // line 141
        if ((($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()) == "published") && $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "link", array(), "any", true, true))) {
            // line 142
            echo "                    <li>
                        <a href=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "link", array()), "html", null, true);
            echo "\" target=\"_blank\">
                            <i class=\"fa fa-external-link-square\"></i> ";
            // line 144
            echo $this->env->getExtension('Bolt')->trans("View on site");
            echo "
                        </a>
                    </li>
                ";
        }
        // line 148
        echo "                ";
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "relation", array())) {
            // line 149
            echo "                    <li>
                        <a href=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("relatedto", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
            echo "\">
                            <i class=\"fa fa-link\"></i> ";
            // line 151
            echo $this->env->getExtension('Bolt')->trans("View related content");
            echo "
                        </a>
                    </li>
                ";
        }
        // line 155
        echo "

                ";
        // line 157
        $context["__internal_77b1761e1a7492081337e1d687ea604aa2f35f5e10f0697d1ca103364ed2aba0"] = $this;
        // line 158
        echo "                ";
        if ((isset($context["modifiable"]) ? $context["modifiable"] : null)) {
            // line 159
            echo "                    ";
            if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()) != "published")) {
                // line 160
                echo "                        ";
                if ($this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "publish", array())) {
                    // line 161
                    echo "                        <li>";
                    echo $context["macro"]->getactionform((isset($context["content"]) ? $context["content"] : null), "publish", "fa-circle status-published", $this->env->getExtension('Bolt')->trans("contenttypes.generic.publish", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()))));
                    echo "</li>
                        ";
                }
                // line 163
                echo "                    ";
            } else {
                // line 164
                echo "                        ";
                if ($this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "depublish", array())) {
                    // line 165
                    echo "                        <li>";
                    echo $context["macro"]->getactionform((isset($context["content"]) ? $context["content"] : null), "held", "fa-circle status-held", $this->env->getExtension('Bolt')->trans("Change status to 'held'"));
                    echo "</li>
                        <li>";
                    // line 166
                    echo $context["macro"]->getactionform((isset($context["content"]) ? $context["content"] : null), "draft", "fa-circle status-draft", $this->env->getExtension('Bolt')->trans("Change status to 'draft'"));
                    echo "</li>

                        ";
                }
                // line 169
                echo "                    ";
            }
            // line 170
            echo "                    ";
            if ($this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "create", array())) {
                // line 171
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "duplicate" => 1)), "html", null, true);
                echo "\">
                        <i class=\"fa fa-copy\"></i> ";
                // line 172
                echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.duplicate", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array())));
                echo "</a></li>
                    ";
            }
            // line 174
            echo "                    ";
            if ($this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "delete", array())) {
                // line 175
                echo "                    <li>";
                echo $context["macro"]->getactionform((isset($context["content"]) ? $context["content"] : null), "delete", "fa-trash", $this->env->getExtension('Bolt')->trans("contenttypes.generic.delete", array("%contenttype%" => $this->getAttribute($this->getAttribute(                // line 177
(isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()))), (("Are you sure you want to delete '" . $this->getAttribute(                // line 178
(isset($context["content"]) ? $context["content"] : null), "getTitle", array())) . "'?"));
                echo "
                    </li>

                    ";
            }
            // line 182
            echo "                    <li class=\"divider\"></li>
                ";
        }
        // line 184
        echo "                    <li><a class=\"nolink\">";
        echo $this->env->getExtension('Bolt')->trans("Author:");
        echo " <strong><i class=\"fa fa-user\"></i>
                        ";
        // line 185
        if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array(), "any", false, true), "displayname", array(), "any", true, true)) {
            // line 186
            echo "                            ";
            echo $this->env->getExtension('Bolt')->trim($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array()), "displayname", array()), 15);
            echo "
                        ";
        } else {
            // line 188
            echo "                            <s>user ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "values", array()), "ownerid", array()), "html", null, true);
            echo " </s>
                        ";
        }
        // line 189
        echo "</strong></a></li>
                    <li><a class=\"nolink\">";
        // line 190
        echo $this->env->getExtension('Bolt')->trans("Current status:");
        echo "
                        <strong>";
        // line 191
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()), "html", null, true);
        echo "</strong></a></li>
                    <li><a class=\"nolink\">";
        // line 192
        echo $this->env->getExtension('Bolt')->trans("Slug:");
        echo "
                        <code title=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "slug", array()), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Bolt')->trim($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "slug", array()), 24);
        echo "</code></a></li>
                    <li><a class=\"nolink\">";
        // line 194
        echo $this->env->getExtension('Bolt')->trans("Created on:");
        echo "
                        <i class=\"fa fa-asterisk\"></i> ";
        // line 195
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datecreated", array()), "Y-m-d H:i"), "html", null, true);
        echo "</a></li>
                    <li><a class=\"nolink\">";
        // line 196
        echo $this->env->getExtension('Bolt')->trans("Published on:");
        echo "
                        <i class=\"fa fa-calendar\"></i> ";
        // line 197
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish", array()), "Y-m-d H:i"), "html", null, true);
        echo "</a></li>
                    <li><a class=\"nolink\">";
        // line 198
        echo $this->env->getExtension('Bolt')->trans("Last edited on:");
        echo "
                        <i class=\"fa fa-refresh\"></i> ";
        // line 199
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datechanged", array()), "Y-m-d H:i"), "html", null, true);
        echo "</a></li>
                    ";
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy", array()));
        foreach ($context['_seq'] as $context["taxonomyslug"] => $context["values"]) {
            // line 201
            echo "                        ";
            if ((twig_length_filter($this->env, $context["values"]) > 1)) {
                // line 202
                echo "                            <li><a class=\"nolink\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method"), $context["taxonomyslug"], array(), "array"), "name", array()), "html", null, true);
                echo ":
                                <i class=\"fa fa-tag\"></i> ";
                // line 203
                echo $this->env->getExtension('Bolt')->trim(twig_join_filter($context["values"], ", "), 24);
                echo "</a></li>
                        ";
            } else {
                // line 205
                echo "                            <li><a class=\"nolink\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method"), $context["taxonomyslug"], array(), "array"), "singular_name", array()), "html", null, true);
                echo ":
                                <i class=\"fa fa-tag\"></i> ";
                // line 206
                echo $this->env->getExtension('Bolt')->trim($this->env->getExtension('Bolt')->first($context["values"]), 24);
                echo "</a></li>
                        ";
            }
            // line 208
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['taxonomyslug'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "                </ul>
            </div>

        </td>
    ";
    }

    public function getTemplateName()
    {
        return "_base/_listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  643 => 209,  637 => 208,  632 => 206,  627 => 205,  622 => 203,  617 => 202,  614 => 201,  610 => 200,  606 => 199,  602 => 198,  598 => 197,  594 => 196,  590 => 195,  586 => 194,  580 => 193,  576 => 192,  572 => 191,  568 => 190,  565 => 189,  559 => 188,  553 => 186,  551 => 185,  546 => 184,  542 => 182,  535 => 178,  534 => 177,  532 => 175,  529 => 174,  524 => 172,  519 => 171,  516 => 170,  513 => 169,  507 => 166,  502 => 165,  499 => 164,  496 => 163,  490 => 161,  487 => 160,  484 => 159,  481 => 158,  479 => 157,  475 => 155,  468 => 151,  464 => 150,  461 => 149,  458 => 148,  451 => 144,  447 => 143,  444 => 142,  442 => 141,  434 => 135,  428 => 132,  423 => 131,  421 => 130,  417 => 128,  414 => 127,  409 => 123,  403 => 121,  401 => 120,  398 => 119,  390 => 117,  380 => 115,  378 => 114,  375 => 113,  369 => 112,  363 => 110,  361 => 109,  357 => 107,  354 => 106,  349 => 102,  337 => 99,  330 => 98,  327 => 97,  324 => 96,  321 => 95,  318 => 94,  316 => 93,  314 => 92,  312 => 91,  305 => 87,  302 => 86,  296 => 83,  293 => 82,  287 => 79,  280 => 78,  278 => 77,  273 => 75,  270 => 74,  268 => 73,  261 => 72,  258 => 71,  250 => 67,  246 => 65,  242 => 63,  240 => 62,  237 => 61,  234 => 60,  228 => 54,  218 => 52,  207 => 46,  199 => 45,  192 => 41,  185 => 40,  182 => 39,  178 => 37,  172 => 35,  169 => 34,  166 => 33,  160 => 10,  154 => 214,  152 => 127,  149 => 126,  146 => 125,  143 => 106,  141 => 105,  138 => 104,  136 => 71,  133 => 70,  131 => 60,  120 => 59,  117 => 58,  113 => 56,  111 => 33,  108 => 32,  106 => 31,  103 => 30,  100 => 29,  97 => 28,  94 => 27,  91 => 26,  88 => 25,  85 => 24,  83 => 23,  80 => 21,  74 => 17,  68 => 15,  62 => 13,  60 => 12,  54 => 11,  50 => 10,  42 => 8,  37 => 7,  35 => 6,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }
}
/* {% import '_macro/_macro.twig' as macro %}*/
/* */
/* {% set modifiable = permissions.create or permissions.edit or permissions.delete or permissions.publish or permissions.depublish %}*/
/* */
/* {# If we have 'grouping', print the row with the groupname. #}*/
/* {% if not compact and content.group.name is defined and (loop.first or content.group.name != lastgroup) and request('order') == '' %}*/
/*     {% if not loop.first %}</tbody>{% endif %}*/
/*     <tbody {% if modifiable %}class="sortable"{% endif %}>*/
/*     <tr class="grouping">*/
/*         <th colspan="{% block listing_columns %}6{% endblock %}">*/
/*             <h3 {% if loop.first %}class="first"{% endif %}>*/
/*                 {% if content.group.name %}*/
/*                     {{ content.group.name }}*/
/*                 {% else %}*/
/*                     {{ __('(no group)') }}*/
/*                 {% endif %}*/
/*             </h3>*/
/*         </th>*/
/*     </tr>*/
/* {% endif %}*/
/* */
/* {# print the header for the first row. #}*/
/* {% if not compact and (loop.first or (content.group.name is defined and content.group.name != lastgroup) and request('order') == '') %}*/
/*     {% set lastgroup = content.group.name|default %}*/
/*     {% if "filter" in app.request.query.all|keys %}*/
/*         {% set filter = "filter=" ~ app.request.query.all.filter ~ "&" %}*/
/*     {% else %}*/
/*         {% set filter = "" %}*/
/*     {% endif %}*/
/* */
/*     {% set link = "?" ~ filter ~ "order=" %}*/
/*     <tr>*/
/*         {% block listing_header %}*/
/*         {% if not compact and modifiable %}*/
/*             <th class="check hidden-xs"><input type="checkbox" name="checkRow" title="{{ __('Select all') }}" /></th>*/
/*         {% else %}*/
/*             <th style="margin: 0; padding: 0;"></th>*/
/*         {% endif %}*/
/* */
/*         <th class="hidden-xs"><a href="{{ link }}{% if request('order') == 'id' %}-{% endif %}id">*/
/*             {{ __('Id') }}*/
/*         </a></th>*/
/* */
/*         <th style="width:80%">*/
/*             <a href="{{ link }}{% if request('order') == content.TitleColumnName()|first %}-{% endif %}{{ content.TitleColumnName()|first }}">*/
/*                 {{ __('Title') }} / {{ __('Excerpt') }}*/
/*             </a>*/
/*         </th>*/
/* */
/*         <th>&nbsp;</th>*/
/* */
/*         <th class="username hidden-xs"><a href="{{ link }}{% if request('order') == "datecreated" %}-{% endif %}datecreated">{{ __('Meta') }}</a></th>*/
/* */
/*         <th><a href="?">{{ __('Actions') }}</a></th>*/
/*         {% endblock %}*/
/*     </tr>*/
/* {% endif %}*/
/* */
/* <tr {% if content.status!='published' %}class="dim"{% endif %}{% if not compact and modifiable %} id="item_{{ content.id }}"{% endif %}>*/
/*     {% block listing_id %}*/
/* */
/*         {% if not compact and permissions.delete %}*/
/*             <td class="check hidden-xs"><input type="checkbox" name="checkRow"></td>*/
/*         {% else %}*/
/*             <td style="margin: 0; padding: 0;"></td>*/
/*         {% endif %}*/
/*         <td class="id hidden-xs">№ {{ content.id }}</td>*/
/* */
/*     {% endblock %}*/
/* */
/*     {% block listing_content %}*/
/*         <td class="excerpt {% if not compact %}large{% endif %}">*/
/*             {% set title = content.getTitle|default("<em>(" ~ __("no title …") ~ ")</em>")|raw %}*/
/*             <span>*/
/*                 <strong class="visible-xs">№ {{ content.id }}. </strong>*/
/*                 <strong>*/
/*                     {% if modifiable %}*/
/*                         <a href="{{ path('editcontent', {'contenttypeslug': content.contenttype.slug, 'id': content.id}) }}" title="Slug: {{ content.slug }}">*/
/*                             {{ title }}*/
/*                         </a>*/
/*                     {% else %}*/
/*                         <strong>*/
/*                             {{ title }}*/
/*                         </strong>*/
/*                      {% endif %}*/
/*                 </strong>*/
/*                 {{ content.excerpt(excerptlength - title|length) }}*/
/*             </span>*/
/*         </td>*/
/*         <td class="listthumb">*/
/*             {% if content.getImage is not empty %}*/
/*                 {# Hack to add alt attribute #}*/
/*                 {#{ content.getImage|popup(thumbsize, thumbsize * 0.75, 'c') }#}*/
/*                 {% set thumb_height = (thumbsize * 0.75)|round %}*/
/*                 {% set thumb_small = content.getImage|thumbnail(thumbsize, thumb_height, 'c') %}*/
/*                 {% set thumb_large = content.getImage|thumbnail(1000, 800, 'r') %}*/
/*                 {% set thumb_title = __('Image') ~ ': ' ~ content.getImage %}*/
/*                 <a href="{{ thumb_large }}" class="magnific" title="{{ thumb_title }}">*/
/*                     <img src="{{ thumb_small }}" width="{{ thumbsize }}" height="{{ thumb_height }}" alt="{{ __('Thumbnail') }}">*/
/*                 </a>*/
/*             {% endif %}*/
/*         </td>*/
/*     {% endblock %}*/
/* */
/*     {% if not compact %}*/
/*         {% block listing_meta %}*/
/*             <td class="username hidden-xs">*/
/*                 <i class="fa fa-user fa-fw"></i>*/
/*                 {% if content.user.displayname is defined %}*/
/*                     {{ content.user.displayname|trimtext(15) }}*/
/*                 {% else %}*/
/*                     <s>{{ content.values.ownerid|trimtext(15) }}</s>*/
/*                 {% endif %}<br>*/
/*                 {% if content.status=="timed" %}*/
/*                     <i class="fa fa-clock-o status-timed fa-fw"></i> <time class="moment" datetime="{{ content.datepublish|date("c") }}" title="{{ content.datepublish }}">{{ content.datepublish }}</time><br>*/
/*                 {% else %}*/
/*                     <i class="fa fa-circle status-{{ content.status }} fa-fw"></i> {{ content.datepublish|localdate('%x') }}<br>*/
/*                 {% endif %}*/
/* */
/*                 {% if content.sortorder is defined and content.sortorder is not sameas(false) %}*/
/*                     <i class="fa fa-sort fa-fw"></i> {{ __('Order: %sort%',{'%sort%': content.sortorder}) }}<br>*/
/*                 {% endif %}*/
/*             </td>*/
/*         {% endblock %}*/
/*     {% endif %}*/
/* */
/*     {% block listing_actions %}*/
/*         <td class="actions">*/
/*             <div class="btn-group">*/
/*                 {% if modifiable %}*/
/*                 <a class="btn btn-default btn-xs" href="{{ path('editcontent', {'contenttypeslug': content.contenttype.slug, 'id': content.id}) }}">*/
/*                     <i class="fa fa-edit"></i> {{ __('Edit') }}*/
/*                 </a>*/
/*                 {% endif %}*/
/*                 <button class="btn btn-default dropdown-toggle btn-xs" data-toggle="dropdown">*/
/* */
/*                     <i class="fa fa-info-sign"></i>*/
/*                     <span class="caret"></span>*/
/*                 </button>*/
/*                 <ul class="dropdown-menu pull-right">*/
/*                 {% if content.status == "published" and content.link is defined %}*/
/*                     <li>*/
/*                         <a href="{{ content.link }}" target="_blank">*/
/*                             <i class="fa fa-external-link-square"></i> {{ __('View on site') }}*/
/*                         </a>*/
/*                     </li>*/
/*                 {% endif %}*/
/*                 {% if content.relation %}{# i.e. we're viewing this as "related content" on the "edit record" page. #}*/
/*                     <li>*/
/*                         <a href="{{ path('relatedto', {'contenttypeslug': content.contenttype.slug, 'id': content.id}) }}">*/
/*                             <i class="fa fa-link"></i> {{ __('View related content') }}*/
/*                         </a>*/
/*                     </li>*/
/*                 {% endif %}*/
/* */
/* */
/*                 {% from _self import actionform %}*/
/*                 {% if modifiable %}*/
/*                     {% if content.status != 'published' %}*/
/*                         {% if permissions.publish %}*/
/*                         <li>{{ macro.actionform(content, 'publish', 'fa-circle status-published', __('contenttypes.generic.publish',{'%contenttype%':content.contenttype.slug})) }}</li>*/
/*                         {% endif %}*/
/*                     {% else %}*/
/*                         {% if permissions.depublish %}*/
/*                         <li>{{ macro.actionform(content, 'held', 'fa-circle status-held', __("Change status to 'held'")) }}</li>*/
/*                         <li>{{ macro.actionform(content, 'draft', 'fa-circle status-draft', __("Change status to 'draft'")) }}</li>*/
/* */
/*                         {% endif %}*/
/*                     {% endif %}*/
/*                     {% if permissions.create %}*/
/*                     <li><a href="{{ path('editcontent', {'contenttypeslug': content.contenttype.slug, 'id': content.id, 'duplicate': 1}) }}">*/
/*                         <i class="fa fa-copy"></i> {{ __('contenttypes.generic.duplicate', {'%contenttype%': content.contenttype.slug}) }}</a></li>*/
/*                     {% endif %}*/
/*                     {% if permissions.delete %}*/
/*                     <li>{{ macro.actionform(content, 'delete',*/
/*                                           'fa-trash',*/
/*                                           __('contenttypes.generic.delete', {'%contenttype%': content.contenttype.slug}),*/
/*                                           "Are you sure you want to delete '" ~ content.getTitle ~ "'?" ) }}*/
/*                     </li>*/
/* */
/*                     {% endif %}*/
/*                     <li class="divider"></li>*/
/*                 {% endif %}*/
/*                     <li><a class="nolink">{{ __('Author:') }} <strong><i class="fa fa-user"></i>*/
/*                         {% if content.user.displayname is defined %}*/
/*                             {{ content.user.displayname|trimtext(15) }}*/
/*                         {% else %}*/
/*                             <s>user {{ content.values.ownerid }} </s>*/
/*                         {% endif %}</strong></a></li>*/
/*                     <li><a class="nolink">{{ __('Current status:') }}*/
/*                         <strong>{{ content.status }}</strong></a></li>*/
/*                     <li><a class="nolink">{{ __('Slug:') }}*/
/*                         <code title="{{ content.slug }}">{{ content.slug|trimtext(24) }}</code></a></li>*/
/*                     <li><a class="nolink">{{ __('Created on:') }}*/
/*                         <i class="fa fa-asterisk"></i> {{ content.datecreated|date("Y-m-d H:i") }}</a></li>*/
/*                     <li><a class="nolink">{{ __('Published on:') }}*/
/*                         <i class="fa fa-calendar"></i> {{ content.datepublish|date("Y-m-d H:i") }}</a></li>*/
/*                     <li><a class="nolink">{{ __('Last edited on:') }}*/
/*                         <i class="fa fa-refresh"></i> {{ content.datechanged|date("Y-m-d H:i") }}</a></li>*/
/*                     {% for taxonomyslug, values in content.taxonomy %}*/
/*                         {% if values|length > 1 %}*/
/*                             <li><a class="nolink">{{ config.get('taxonomy')[taxonomyslug].name }}:*/
/*                                 <i class="fa fa-tag"></i> {{ values|join(", ")|trimtext(24) }}</a></li>*/
/*                         {% else %}*/
/*                             <li><a class="nolink">{{ config.get('taxonomy')[taxonomyslug].singular_name }}:*/
/*                                 <i class="fa fa-tag"></i> {{ values|first|trimtext(24) }}</a></li>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/* */
/*         </td>*/
/*     {% endblock %}*/
/* */
/* </tr>*/
/* */
