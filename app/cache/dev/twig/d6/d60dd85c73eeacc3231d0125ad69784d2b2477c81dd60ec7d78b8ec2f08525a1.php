<?php

/* DefaultBundle:Default:folder_show.html.twig */
class __TwigTemplate_803ff5ee7b1c2d4d2887bbae50fc4e009d42515d9a018aefadd82a1612513ed2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "DefaultBundle:Default:folder_show.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "95b7c7a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_95b7c7a_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/95b7c7a_dropzone_1.css");
            // line 11
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>

    ";
            // asset "95b7c7a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_95b7c7a_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/95b7c7a_demo_2.css");
            // line 11
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>

    ";
            // asset "95b7c7a_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_95b7c7a_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/95b7c7a_style_3.css");
            // line 11
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>

    ";
            // asset "95b7c7a_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_95b7c7a_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/95b7c7a_noJS_4.css");
            // line 11
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>

    ";
            // asset "95b7c7a_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_95b7c7a_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/95b7c7a_gamma_5.css");
            // line 11
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>

    ";
        } else {
            // asset "95b7c7a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_95b7c7a") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/95b7c7a.css");
            // line 11
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>

    ";
        }
        unset($context["asset_url"]);
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "
    ";
        // line 19
        if ((isset($context["folder"]) ? $context["folder"] : $this->getContext($context, "folder"))) {
            // line 20
            echo "        <h1 class=\"tile-area-title\" style=\"text-align: center\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : $this->getContext($context, "folder")), "name", array()), "html", null, true);
            echo "</h1><br>

        <div data-role=\"charm\" data-position=\"left\" id=\"left-charm\">
            <h1 class=\"text-light\">Parametres</h1><br>
            ";
            // line 24
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_folder"]) ? $context["form_folder"] : $this->getContext($context, "form_folder")), 'form_start');
            echo "
            ";
            // line 25
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_folder"]) ? $context["form_folder"] : $this->getContext($context, "form_folder")), 'errors');
            echo "
            <div class=\"cell\">
                <label>Nom</label>
                <div class=\"input-control text full-size\">
                    ";
            // line 29
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_folder"]) ? $context["form_folder"] : $this->getContext($context, "form_folder")), "name", array()), 'errors');
            echo "
                    ";
            // line 30
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_folder"]) ? $context["form_folder"] : $this->getContext($context, "form_folder")), "name", array()), 'widget');
            echo "
                </div>
            </div>
            <br>
            <div class=\"cell\">
                <label>Taille</label>
                <div class=\"input-control text full-size\">
                    ";
            // line 37
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_folder"]) ? $context["form_folder"] : $this->getContext($context, "form_folder")), "size", array()), 'errors');
            echo "
                    ";
            // line 38
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_folder"]) ? $context["form_folder"] : $this->getContext($context, "form_folder")), "size", array()), 'widget');
            echo "
                </div>
            </div>
            <br>
            <div class=\"cell\">
                <label>Cover photo</label>
                <div class=\"input-control text full-size\">
                    <div class=\"input-control file\" data-role=\"input\">
                        <input type=\"file\">
                        <button class=\"button\"><span class=\"mif-folder\"></span></button>
                    </div>
                </div>
            </div>
            <br>
            <div class=\"cell\">
                <label>Public URL to edit</label>
                <div class=\"input-control text full-size\">
                    <div class=\"input-control file full-size\" data-role=\"input\">
                        <input value=\"http://share/folder/edit/";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : $this->getContext($context, "folder")), "editSlug", array()), "html", null, true);
            echo "\" type=\"text\"
                               class=\"input-file-wrapper\" readonly=\"\" style=\"z-index: 1; cursor: default;\">
                        <button class=\"button\" type=\"button\"><span class=\"mif-folder\"></span></button>
                    </div>
                </div>
            </div>
            <div class=\"cell\">
                <label>Public URL to show</label>
                <div class=\"input-control text full-size\">
                    <div class=\"input-control file full-size\" data-role=\"input\">
                        <input value=\"http://share/folder/show/";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : $this->getContext($context, "folder")), "showSlug", array()), "html", null, true);
            echo "\" type=\"text\"
                               class=\"input-file-wrapper\" readonly=\"\" style=\"z-index: 1; cursor: default;\">
                        <button class=\"button\" type=\"button\"><span class=\"mif-folder\"></span></button>
                    </div>
                </div>
            </div>
            <br>
            <button type=\"submit\" class=\"button rounded\">Save</button>
            ";
            // line 74
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_folder"]) ? $context["form_folder"] : $this->getContext($context, "form_folder")), 'rest');
            echo "
            ";
            // line 75
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_folder"]) ? $context["form_folder"] : $this->getContext($context, "form_folder")), 'form_end');
            echo "
            <br>
        </div>

        <div class=\"padding20 align-center\">
            <button class=\"button\" onclick=\"showCharm('left')\"><span class=\"mif-cog\"></span> Parametres</button>
        </div>

        <form enctype=\"multipart/form-data\" class=\"dropzone\" action=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
            echo "\" method=\"post\"
              name=\"acme_dropzone_form\" id=\"acme_dropzone_form\">
            ";
            // line 85
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
            ";
            // line 86
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
        </form>
        <div class=\"gamma-container gamma-loading\" id=\"gamma-container\">
            <ul class=\"gamma-gallery\">
                ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 91
                echo "                    <li>
                        <div data-alt=\"image\" data-description='<h3>Sky high</h3>' data-max-width=\"1800\"
                             data-max-height=\"1350\">
                            <div data-src=\"";
                // line 94
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["image"], "media", array()), "big");
                echo "\" data-min-width=\"1300\"></div>
                            <div data-src=\"";
                // line 95
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["image"], "media", array()), "big");
                echo "\" data-min-width=\"1000\"></div>
                            <div data-src=\"";
                // line 96
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["image"], "media", array()), "big");
                echo "\" data-min-width=\"700\"></div>
                            <div data-src=\"";
                // line 97
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["image"], "media", array()), "big");
                echo "\" data-min-width=\"300\"></div>
                            <div data-src=\"";
                // line 98
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["image"], "media", array()), "big");
                echo "\" data-min-width=\"200\"></div>
                            <div data-src=\"";
                // line 99
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["image"], "media", array()), "big");
                echo "\" data-min-width=\"140\"></div>
                            <div data-src=\"";
                // line 100
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["image"], "media", array()), "big");
                echo "\"></div>
                            <noscript>
                                <img src=\"";
                // line 102
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["image"], "media", array()), "big");
                echo "\"/>
                            </noscript>
                        </div>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "            </ul>

            <div class=\"gamma-overlay\"></div>
        </div>


    ";
        } else {
            // line 114
            echo "        No folder found
    ";
        }
    }

    // line 118
    public function block_javascripts($context, array $blocks = array())
    {
        // line 119
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ae18e9a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae18e9a_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ae18e9a_modernizr.custom.70736_1.js");
            // line 127
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ae18e9a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae18e9a_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ae18e9a_jquery.masonry.min_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ae18e9a_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae18e9a_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ae18e9a_jquery.history_3.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ae18e9a_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae18e9a_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ae18e9a_js-url.min_4.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ae18e9a_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae18e9a_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ae18e9a_jquerypp.custom_5.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ae18e9a_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae18e9a_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ae18e9a_gamma_6.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ae18e9a_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae18e9a_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ae18e9a_dropzone_7.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "ae18e9a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae18e9a") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ae18e9a.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 129
        echo "
    <script type=\"text/javascript\">
        \$(function () {
            var GammaSettings = {
                // order is important!
                viewport: [{
                    width: 1200,
                    columns: 5
                }, {
                    width: 900,
                    columns: 4
                }, {
                    width: 500,
                    columns: 3
                }, {
                    width: 320,
                    columns: 2
                }, {
                    width: 0,
                    columns: 2
                }]
            };
            Gamma.init(GammaSettings, fncallback);
            // Example how to add more items (just a dummy):
            var page = 0,
                    items = ['<li><div data-alt=\"img03\" data-description=\"<h3>Sky high</h3>\" data-max-width=\"1800\" data-max-height=\"1350\"><div data-src=\"images/xxxlarge/3.jpg\" data-min-width=\"1300\"></div><div data-src=\"images/xxlarge/3.jpg\" data-min-width=\"1000\"></div><div data-src=\"images/xlarge/3.jpg\" data-min-width=\"700\"></div><div data-src=\"images/large/3.jpg\" data-min-width=\"300\"></div><div data-src=\"images/medium/3.jpg\" data-min-width=\"200\"></div><div data-src=\"images/small/3.jpg\" data-min-width=\"140\"></div><div data-src=\"images/xsmall/3.jpg\"></div><noscript><img src=\"images/xsmall/3.jpg\" alt=\"img03\"/></noscript></div></li><li><div data-alt=\"img03\" data-description=\"<h3>Sky high</h3>\" data-max-width=\"1800\" data-max-height=\"1350\"><div data-src=\"images/xxxlarge/3.jpg\" data-min-width=\"1300\"></div><div data-src=\"images/xxlarge/3.jpg\" data-min-width=\"1000\"></div><div data-src=\"images/xlarge/3.jpg\" data-min-width=\"700\"></div><div data-src=\"images/large/3.jpg\" data-min-width=\"300\"></div><div data-src=\"images/medium/3.jpg\" data-min-width=\"200\"></div><div data-src=\"images/small/3.jpg\" data-min-width=\"140\"></div><div data-src=\"images/xsmall/3.jpg\"></div><noscript><img src=\"images/xsmall/3.jpg\" alt=\"img03\"/></noscript></div></li><li><div data-alt=\"img03\" data-description=\"<h3>Sky high</h3>\" data-max-width=\"1800\" data-max-height=\"1350\"><div data-src=\"images/xxxlarge/3.jpg\" data-min-width=\"1300\"></div><div data-src=\"images/xxlarge/3.jpg\" data-min-width=\"1000\"></div><div data-src=\"images/xlarge/3.jpg\" data-min-width=\"700\"></div><div data-src=\"images/large/3.jpg\" data-min-width=\"300\"></div><div data-src=\"images/medium/3.jpg\" data-min-width=\"200\"></div><div data-src=\"images/small/3.jpg\" data-min-width=\"140\"></div><div data-src=\"images/xsmall/3.jpg\"></div><noscript><img src=\"images/xsmall/3.jpg\" alt=\"img03\"/></noscript></div></li><li><div data-alt=\"img03\" data-description=\"<h3>Sky high</h3>\" data-max-width=\"1800\" data-max-height=\"1350\"><div data-src=\"images/xxxlarge/3.jpg\" data-min-width=\"1300\"></div><div data-src=\"images/xxlarge/3.jpg\" data-min-width=\"1000\"></div><div data-src=\"images/xlarge/3.jpg\" data-min-width=\"700\"></div><div data-src=\"images/large/3.jpg\" data-min-width=\"300\"></div><div data-src=\"images/medium/3.jpg\" data-min-width=\"200\"></div><div data-src=\"images/small/3.jpg\" data-min-width=\"140\"></div><div data-src=\"images/xsmall/3.jpg\"></div><noscript><img src=\"images/xsmall/3.jpg\" alt=\"img03\"/></noscript></div></li><li><div data-alt=\"img03\" data-description=\"<h3>Sky high</h3>\" data-max-width=\"1800\" data-max-height=\"1350\"><div data-src=\"images/xxxlarge/3.jpg\" data-min-width=\"1300\"></div><div data-src=\"images/xxlarge/3.jpg\" data-min-width=\"1000\"></div><div data-src=\"images/xlarge/3.jpg\" data-min-width=\"700\"></div><div data-src=\"images/large/3.jpg\" data-min-width=\"300\"></div><div data-src=\"images/medium/3.jpg\" data-min-width=\"200\"></div><div data-src=\"images/small/3.jpg\" data-min-width=\"140\"></div><div data-src=\"images/xsmall/3.jpg\"></div><noscript><img src=\"images/xsmall/3.jpg\" alt=\"img03\"/></noscript></div></li>']

            function fncallback() {
                \$('#loadmore').show().on('click', function () {
                    ++page;
                    var newitems = items[page - 1]
                    if (page <= 1) {
                        Gamma.add(\$(newitems));
                    }
                    if (page === 1) {
                        \$(this).remove();
                    }
                });
            }
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "DefaultBundle:Default:folder_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 129,  296 => 127,  291 => 119,  288 => 118,  282 => 114,  273 => 107,  262 => 102,  257 => 100,  253 => 99,  249 => 98,  245 => 97,  241 => 96,  237 => 95,  233 => 94,  228 => 91,  224 => 90,  217 => 86,  213 => 85,  208 => 83,  197 => 75,  193 => 74,  182 => 66,  169 => 56,  148 => 38,  144 => 37,  134 => 30,  130 => 29,  123 => 25,  119 => 24,  111 => 20,  109 => 19,  106 => 18,  103 => 17,  94 => 12,  91 => 11,  83 => 12,  80 => 11,  73 => 12,  70 => 11,  63 => 12,  60 => 11,  53 => 12,  50 => 11,  43 => 12,  40 => 11,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* */
/*     {% stylesheets filter='cssrewrite'*/
/*     '@DefaultBundle/Resources/public/css/dropzone.css'*/
/*     '@DefaultBundle/Resources/public/css/demo.css'*/
/*     '@DefaultBundle/Resources/public/css/style.css'*/
/*     '@DefaultBundle/Resources/public/css/noJS.css'*/
/*     '@DefaultBundle/Resources/public/css/gamma.css' %}*/
/* */
/*     <link rel="stylesheet" href="{{ asset_url }}"/>*/
/* */
/*     {% endstylesheets %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     {% if folder %}*/
/*         <h1 class="tile-area-title" style="text-align: center">{{ folder.name }}</h1><br>*/
/* */
/*         <div data-role="charm" data-position="left" id="left-charm">*/
/*             <h1 class="text-light">Parametres</h1><br>*/
/*             {{ form_start(form_folder) }}*/
/*             {{ form_errors(form_folder) }}*/
/*             <div class="cell">*/
/*                 <label>Nom</label>*/
/*                 <div class="input-control text full-size">*/
/*                     {{ form_errors(form_folder.name) }}*/
/*                     {{ form_widget(form_folder.name) }}*/
/*                 </div>*/
/*             </div>*/
/*             <br>*/
/*             <div class="cell">*/
/*                 <label>Taille</label>*/
/*                 <div class="input-control text full-size">*/
/*                     {{ form_errors(form_folder.size) }}*/
/*                     {{ form_widget(form_folder.size) }}*/
/*                 </div>*/
/*             </div>*/
/*             <br>*/
/*             <div class="cell">*/
/*                 <label>Cover photo</label>*/
/*                 <div class="input-control text full-size">*/
/*                     <div class="input-control file" data-role="input">*/
/*                         <input type="file">*/
/*                         <button class="button"><span class="mif-folder"></span></button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <br>*/
/*             <div class="cell">*/
/*                 <label>Public URL to edit</label>*/
/*                 <div class="input-control text full-size">*/
/*                     <div class="input-control file full-size" data-role="input">*/
/*                         <input value="http://share/folder/edit/{{ folder.editSlug }}" type="text"*/
/*                                class="input-file-wrapper" readonly="" style="z-index: 1; cursor: default;">*/
/*                         <button class="button" type="button"><span class="mif-folder"></span></button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="cell">*/
/*                 <label>Public URL to show</label>*/
/*                 <div class="input-control text full-size">*/
/*                     <div class="input-control file full-size" data-role="input">*/
/*                         <input value="http://share/folder/show/{{ folder.showSlug }}" type="text"*/
/*                                class="input-file-wrapper" readonly="" style="z-index: 1; cursor: default;">*/
/*                         <button class="button" type="button"><span class="mif-folder"></span></button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <br>*/
/*             <button type="submit" class="button rounded">Save</button>*/
/*             {{ form_rest(form_folder) }}*/
/*             {{ form_end(form_folder) }}*/
/*             <br>*/
/*         </div>*/
/* */
/*         <div class="padding20 align-center">*/
/*             <button class="button" onclick="showCharm('left')"><span class="mif-cog"></span> Parametres</button>*/
/*         </div>*/
/* */
/*         <form enctype="multipart/form-data" class="dropzone" action="{{ app.request.uri }}" method="post"*/
/*               name="acme_dropzone_form" id="acme_dropzone_form">*/
/*             {{ form_widget(form) }}*/
/*             {{ form_end(form) }}*/
/*         </form>*/
/*         <div class="gamma-container gamma-loading" id="gamma-container">*/
/*             <ul class="gamma-gallery">*/
/*                 {% for image in images %}*/
/*                     <li>*/
/*                         <div data-alt="image" data-description='<h3>Sky high</h3>' data-max-width="1800"*/
/*                              data-max-height="1350">*/
/*                             <div data-src="{% path image.media, 'big' %}" data-min-width="1300"></div>*/
/*                             <div data-src="{% path image.media, 'big' %}" data-min-width="1000"></div>*/
/*                             <div data-src="{% path image.media, 'big' %}" data-min-width="700"></div>*/
/*                             <div data-src="{% path image.media, 'big' %}" data-min-width="300"></div>*/
/*                             <div data-src="{% path image.media, 'big' %}" data-min-width="200"></div>*/
/*                             <div data-src="{% path image.media, 'big' %}" data-min-width="140"></div>*/
/*                             <div data-src="{% path image.media, 'big' %}"></div>*/
/*                             <noscript>*/
/*                                 <img src="{% path image.media, 'big' %}"/>*/
/*                             </noscript>*/
/*                         </div>*/
/*                     </li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/* */
/*             <div class="gamma-overlay"></div>*/
/*         </div>*/
/* */
/* */
/*     {% else %}*/
/*         No folder found*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {% javascripts*/
/*     '@DefaultBundle/Resources/public/js/modernizr.custom.70736.js'*/
/*     '@DefaultBundle/Resources/public/js/jquery.masonry.min.js'*/
/*     '@DefaultBundle/Resources/public/js/jquery.history.js'*/
/*     '@DefaultBundle/Resources/public/js/js-url.min.js'*/
/*     '@DefaultBundle/Resources/public/js/jquerypp.custom.js'*/
/*     '@DefaultBundle/Resources/public/js/gamma.js'*/
/*     '@DefaultBundle/Resources/public/js/dropzone.js' %}*/
/*     <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* */
/*     <script type="text/javascript">*/
/*         $(function () {*/
/*             var GammaSettings = {*/
/*                 // order is important!*/
/*                 viewport: [{*/
/*                     width: 1200,*/
/*                     columns: 5*/
/*                 }, {*/
/*                     width: 900,*/
/*                     columns: 4*/
/*                 }, {*/
/*                     width: 500,*/
/*                     columns: 3*/
/*                 }, {*/
/*                     width: 320,*/
/*                     columns: 2*/
/*                 }, {*/
/*                     width: 0,*/
/*                     columns: 2*/
/*                 }]*/
/*             };*/
/*             Gamma.init(GammaSettings, fncallback);*/
/*             // Example how to add more items (just a dummy):*/
/*             var page = 0,*/
/*                     items = ['<li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li>']*/
/* */
/*             function fncallback() {*/
/*                 $('#loadmore').show().on('click', function () {*/
/*                     ++page;*/
/*                     var newitems = items[page - 1]*/
/*                     if (page <= 1) {*/
/*                         Gamma.add($(newitems));*/
/*                     }*/
/*                     if (page === 1) {*/
/*                         $(this).remove();*/
/*                     }*/
/*                 });*/
/*             }*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
