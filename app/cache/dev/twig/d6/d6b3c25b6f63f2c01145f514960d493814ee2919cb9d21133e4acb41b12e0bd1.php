<?php

/* ::layout.html.twig */
class __TwigTemplate_ce71d95697bf6d9546c0ad5fc610cae49a980ae82e4474d80293387ff1cefcf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c150338_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c150338_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c150338_metro_1.css");
            // line 9
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "c150338_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c150338_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c150338_metro-icons_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "c150338_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c150338_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c150338_select2_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "c150338_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c150338_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c150338_style_4.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        } else {
            // asset "c150338"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c150338") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c150338.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "

    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "</head>
<body>
<div class=\"app-bar\" data-role=\"appbar\">
    <a class=\"app-bar-element\">
        <span id=\"toggle-tiles-dropdown2\" class=\"mif-apps mif-2x\"></span>
        <div class=\"app-bar-drop-container\" data-role=\"dropdown\" data-toggle-element=\"#toggle-tiles-dropdown2\"
             data-no-close=\"false\" style=\"width: 324px; display: none;\">
            <div class=\"tile-container bg-white\">
                <div class=\"tile-small bg-cyan\">
                    <div class=\"tile-content iconic\">
                        <span class=\"icon mif-onedrive\"></span>
                    </div>
                </div>
                <div class=\"tile-small bg-yellow\">
                    <div class=\"tile-content iconic\">
                        <span class=\"icon mif-google\"></span>
                    </div>
                </div>
                <div class=\"tile-small bg-red\">
                    <div class=\"tile-content iconic\">
                        <span class=\"icon mif-facebook\"></span>
                    </div>
                </div>
                <div class=\"tile-small bg-green\">
                    <div class=\"tile-content iconic\">
                        <span class=\"icon mif-twitter\"></span>
                    </div>
                </div>
            </div>
        </div>
    </a>

    <div class=\"app-bar-divider\"></div>
    <ul class=\"app-bar-menu\">
        <li data-flexorderorigin=\"0\" data-flexorder=\"1\"><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("default_homepage");
        echo "\">Home</a></li>
        <li data-flexorderorigin=\"1\" data-flexorder=\"2\">
            <a href=\"\" class=\"dropdown-toggle\">Products</a>
            <ul class=\"d-menu\" data-role=\"dropdown\">
                <li><a href=\"\">Windows 10</a></li>
                <li><a href=\"\">Spartan</a></li>
                <li><a href=\"\">Outlook</a></li>
                <li><a href=\"\">Office 2015</a></li>
                <li class=\"divider\"></li>
                <li><a href=\"\" class=\"dropdown-toggle\">Other Products</a>
                    <ul class=\"d-menu\" data-role=\"dropdown\">
                        <li><a href=\"\">Internet Explorer 10</a></li>
                        <li><a href=\"\">Skype</a></li>
                        <li><a href=\"\">Surface</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li data-flexorderorigin=\"2\" data-flexorder=\"3\"><a href=\"\">Support</a></li>
        <li data-flexorderorigin=\"3\" data-flexorder=\"4\"><a href=\"\">Help</a></li>
    </ul>
    <div class=\"app-bar-element\">
        <span class=\"dropdown-toggle\">Ups</span>
        <ul class=\"d-menu\" data-role=\"dropdown\">
            <li><a href=\"\">Windows 10</a></li>
            <li><a href=\"\">Spartan</a></li>
            <li><a href=\"\">Outlook</a></li>
            <li><a href=\"\">Office 2015</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"\" class=\"dropdown-toggle\">Other Products</a>
                <ul class=\"d-menu\" data-role=\"dropdown\">
                    <li><a href=\"\">Internet Explorer 10</a></li>
                    <li><a href=\"\">Skype</a></li>
                    <li><a href=\"\">Surface</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div class=\"app-bar-element place-right\">
        <a class=\"dropdown-toggle fg-white\"><span class=\"mif-enter\"></span> Enter</a>
        <div class=\"app-bar-drop-container bg-white fg-dark place-right\" data-role=\"dropdown\" data-no-close=\"true\">
            <div class=\"padding20\">
                <form>
                    <h4 class=\"text-light\">Login to service...</h4>
                    <div class=\"input-control text\">
                        <span class=\"mif-user prepend-icon\"></span>
                        <input type=\"text\">
                    </div>
                    <div class=\"input-control text\">
                        <span class=\"mif-lock prepend-icon\"></span>
                        <input type=\"password\">
                    </div>
                    <label class=\"input-control checkbox small-check\">
                        <input type=\"checkbox\">
                        <span class=\"check\"></span>
                        <span class=\"caption\">Remember me</span>
                    </label>
                    <div class=\"form-actions\">
                        <button class=\"button\">Login</button>
                        <button class=\"button link\">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class=\"app-bar-divider place-right\"></div>
    <div class=\"app-bar-pullbutton automatic\" style=\"display: none;\"></div>
    <div class=\"clearfix\" style=\"width: 0;\"></div>
    <nav class=\"app-bar-pullmenu hidden flexstyle-app-bar-menu\" style=\"display: none;\">
        <ul class=\"app-bar-pullmenubar hidden app-bar-menu\"></ul>
    </nav>
</div>";
        // line 122
        $this->displayBlock('body', $context, $blocks);
        // line 125
        echo "

";
        // line 127
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "997b15c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_997b15c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/997b15c_jquery-2.2.3.min_1.js");
            // line 131
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "997b15c_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_997b15c_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/997b15c_metro_2.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "997b15c_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_997b15c_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/997b15c_select2_3.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "997b15c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_997b15c") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/997b15c.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 133
        echo "
<script>
    function showCharm(id) {
        var charm = \$(\"#\" + id + \"-charm\").data(\"charm\");
        if (charm.element.data(\"opened\") === true) {
            charm.close();
        } else {
            charm.open();
        }
    }

    function showDialog(id) {
        var dialog = \$(\"#\" + id).data('dialog');
        if (!dialog.element.data('opened')) {
            dialog.open();
        } else {
            dialog.close();
        }
    }

</script>

";
        // line 155
        $this->displayBlock('javascripts', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 159
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 160
                echo "        <script>
            \$(document).ready(function () {
                \$.Notify({
                    caption: '";
                // line 163
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "',
                    content: '";
                // line 164
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "DefaultBundle"), "html", null, true);
                echo "',
                    type: '";
                // line 165
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "'
                });
            });
        </script>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "

</body>
</html>";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "    ";
    }

    // line 122
    public function block_body($context, array $blocks = array())
    {
        // line 123
        echo "
";
    }

    // line 155
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 155,  300 => 123,  297 => 122,  293 => 14,  290 => 13,  283 => 171,  268 => 165,  264 => 164,  260 => 163,  255 => 160,  250 => 159,  246 => 158,  243 => 157,  241 => 155,  217 => 133,  191 => 131,  187 => 127,  183 => 125,  181 => 122,  105 => 49,  69 => 15,  67 => 13,  63 => 11,  31 => 9,  27 => 4,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     {% stylesheets filter='cssrewrite'*/
/*     '@DefaultBundle/Resources/public/css/metro.css'*/
/*     '@DefaultBundle/Resources/public/css/metro-icons.css'*/
/*     '@DefaultBundle/Resources/public/css/select2.css'*/
/*     '@DefaultBundle/Resources/public/css/style.css' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}"/>*/
/*     {% endstylesheets %}*/
/* */
/* */
/*     {% block stylesheets %}*/
/*     {% endblock %}*/
/* </head>*/
/* <body>*/
/* <div class="app-bar" data-role="appbar">*/
/*     <a class="app-bar-element">*/
/*         <span id="toggle-tiles-dropdown2" class="mif-apps mif-2x"></span>*/
/*         <div class="app-bar-drop-container" data-role="dropdown" data-toggle-element="#toggle-tiles-dropdown2"*/
/*              data-no-close="false" style="width: 324px; display: none;">*/
/*             <div class="tile-container bg-white">*/
/*                 <div class="tile-small bg-cyan">*/
/*                     <div class="tile-content iconic">*/
/*                         <span class="icon mif-onedrive"></span>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="tile-small bg-yellow">*/
/*                     <div class="tile-content iconic">*/
/*                         <span class="icon mif-google"></span>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="tile-small bg-red">*/
/*                     <div class="tile-content iconic">*/
/*                         <span class="icon mif-facebook"></span>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="tile-small bg-green">*/
/*                     <div class="tile-content iconic">*/
/*                         <span class="icon mif-twitter"></span>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </a>*/
/* */
/*     <div class="app-bar-divider"></div>*/
/*     <ul class="app-bar-menu">*/
/*         <li data-flexorderorigin="0" data-flexorder="1"><a href="{{ path('default_homepage') }}">Home</a></li>*/
/*         <li data-flexorderorigin="1" data-flexorder="2">*/
/*             <a href="" class="dropdown-toggle">Products</a>*/
/*             <ul class="d-menu" data-role="dropdown">*/
/*                 <li><a href="">Windows 10</a></li>*/
/*                 <li><a href="">Spartan</a></li>*/
/*                 <li><a href="">Outlook</a></li>*/
/*                 <li><a href="">Office 2015</a></li>*/
/*                 <li class="divider"></li>*/
/*                 <li><a href="" class="dropdown-toggle">Other Products</a>*/
/*                     <ul class="d-menu" data-role="dropdown">*/
/*                         <li><a href="">Internet Explorer 10</a></li>*/
/*                         <li><a href="">Skype</a></li>*/
/*                         <li><a href="">Surface</a></li>*/
/*                     </ul>*/
/*                 </li>*/
/*             </ul>*/
/*         </li>*/
/*         <li data-flexorderorigin="2" data-flexorder="3"><a href="">Support</a></li>*/
/*         <li data-flexorderorigin="3" data-flexorder="4"><a href="">Help</a></li>*/
/*     </ul>*/
/*     <div class="app-bar-element">*/
/*         <span class="dropdown-toggle">Ups</span>*/
/*         <ul class="d-menu" data-role="dropdown">*/
/*             <li><a href="">Windows 10</a></li>*/
/*             <li><a href="">Spartan</a></li>*/
/*             <li><a href="">Outlook</a></li>*/
/*             <li><a href="">Office 2015</a></li>*/
/*             <li class="divider"></li>*/
/*             <li><a href="" class="dropdown-toggle">Other Products</a>*/
/*                 <ul class="d-menu" data-role="dropdown">*/
/*                     <li><a href="">Internet Explorer 10</a></li>*/
/*                     <li><a href="">Skype</a></li>*/
/*                     <li><a href="">Surface</a></li>*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* */
/*     <div class="app-bar-element place-right">*/
/*         <a class="dropdown-toggle fg-white"><span class="mif-enter"></span> Enter</a>*/
/*         <div class="app-bar-drop-container bg-white fg-dark place-right" data-role="dropdown" data-no-close="true">*/
/*             <div class="padding20">*/
/*                 <form>*/
/*                     <h4 class="text-light">Login to service...</h4>*/
/*                     <div class="input-control text">*/
/*                         <span class="mif-user prepend-icon"></span>*/
/*                         <input type="text">*/
/*                     </div>*/
/*                     <div class="input-control text">*/
/*                         <span class="mif-lock prepend-icon"></span>*/
/*                         <input type="password">*/
/*                     </div>*/
/*                     <label class="input-control checkbox small-check">*/
/*                         <input type="checkbox">*/
/*                         <span class="check"></span>*/
/*                         <span class="caption">Remember me</span>*/
/*                     </label>*/
/*                     <div class="form-actions">*/
/*                         <button class="button">Login</button>*/
/*                         <button class="button link">Cancel</button>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="app-bar-divider place-right"></div>*/
/*     <div class="app-bar-pullbutton automatic" style="display: none;"></div>*/
/*     <div class="clearfix" style="width: 0;"></div>*/
/*     <nav class="app-bar-pullmenu hidden flexstyle-app-bar-menu" style="display: none;">*/
/*         <ul class="app-bar-pullmenubar hidden app-bar-menu"></ul>*/
/*     </nav>*/
/* </div>{% block body %}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% javascripts*/
/* '@DefaultBundle/Resources/public/js/jquery-2.2.3.min.js'*/
/* '@DefaultBundle/Resources/public/js/metro.js'*/
/* '@DefaultBundle/Resources/public/js/select2.js' %}*/
/* <script src="{{ asset_url }}"></script>*/
/* {% endjavascripts %}*/
/* */
/* <script>*/
/*     function showCharm(id) {*/
/*         var charm = $("#" + id + "-charm").data("charm");*/
/*         if (charm.element.data("opened") === true) {*/
/*             charm.close();*/
/*         } else {*/
/*             charm.open();*/
/*         }*/
/*     }*/
/* */
/*     function showDialog(id) {*/
/*         var dialog = $("#" + id).data('dialog');*/
/*         if (!dialog.element.data('opened')) {*/
/*             dialog.open();*/
/*         } else {*/
/*             dialog.close();*/
/*         }*/
/*     }*/
/* */
/* </script>*/
/* */
/* {% block javascripts %}*/
/* {% endblock %}*/
/* */
/* {% for type, messages in app.session.flashBag.all %}*/
/*     {% for message in messages %}*/
/*         <script>*/
/*             $(document).ready(function () {*/
/*                 $.Notify({*/
/*                     caption: '{{ type }}',*/
/*                     content: '{{ message|trans({}, 'DefaultBundle') }}',*/
/*                     type: '{{ type }}'*/
/*                 });*/
/*             });*/
/*         </script>*/
/*     {% endfor %}*/
/* {% endfor %}*/
/* */
/* */
/* </body>*/
/* </html>*/
