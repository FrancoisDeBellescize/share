<?php

/* DefaultBundle:Default:folder.html.twig */
class __TwigTemplate_97f74029d84262a91d2c55f7dd398b8b2106f99e2900fd5f527d018e1df0ccd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "DefaultBundle:Default:folder.html.twig", 1);
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
                <label>Public URL to edit</label>
                <div class=\"input-control text full-size\">
                    <div class=\"input-control file full-size\" data-role=\"input\">
                        <input value=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("folder_direct_edit", array("slug" => $this->getAttribute((isset($context["folder"]) ? $context["folder"] : $this->getContext($context, "folder")), "editSlug", array()))), "html", null, true);
            echo "\" type=\"text\"
                               class=\"input-file-wrapper\" readonly=\"\" style=\"z-index: 1; cursor: default;\">
                        <button class=\"button\" type=\"button\"><span class=\"mif-link\"></span></button>
                    </div>
                </div>
            </div>
            <br>
            <div class=\"cell\">
                <label>Public URL to show</label>
                <div class=\"input-control text full-size\">
                    <div class=\"input-control file full-size\" data-role=\"input\">
                        <input value=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("folder_direct_show", array("slug" => $this->getAttribute((isset($context["folder"]) ? $context["folder"] : $this->getContext($context, "folder")), "showSlug", array()))), "html", null, true);
            echo "\" type=\"text\"
                               class=\"input-file-wrapper\" readonly=\"\" style=\"z-index: 1; cursor: default;\">
                        <button class=\"button\" type=\"button\"><span class=\"mif-link\"></span></button>
                    </div>
                </div>
            </div>
            <br><br>
            <div class=\"cell\" style=\"text-align: right\">
                <button type=\"button\" class=\"button alert rounded\" onclick=\"showDialog('dialog5')\">Delete</button>
                <button type=\"submit\" class=\"button rounded\">Save</button>
            </div>
            ";
            // line 68
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_folder"]) ? $context["form_folder"] : $this->getContext($context, "form_folder")), 'rest');
            echo "
            ";
            // line 69
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_folder"]) ? $context["form_folder"] : $this->getContext($context, "form_folder")), 'form_end');
            echo "
            <br>
        </div>

        <div class=\"padding20 align-center\">
            <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("folder_direct_show", array("slug" => $this->getAttribute((isset($context["folder"]) ? $context["folder"] : $this->getContext($context, "folder")), "showSlug", array()))), "html", null, true);
            echo "\">
                <button class=\"button\"><span class=\"mif-search\"></span> Afficher</button>
            </a>
            <button class=\"button\" id=\"define_cover_image\" style=\"display:none\"><span class=\"mif-bookmark\"></span>
                Definir en tant que photo
                de couverture
            </button>
            <button class=\"button\" id=\"delete_image\" style=\"display:none\"><span class=\"mif-bin\"></span> Supprimer
            </button>
            <button class=\"button\" onclick=\"showCharm('left')\"><span class=\"mif-cog\"></span> Parametres</button>
        </div>

        <form enctype=\"multipart/form-data\" class=\"dropzone\" action=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
            echo "\" method=\"post\"
              name=\"acme_dropzone_form\" id=\"acme_dropzone_form\">
            ";
            // line 88
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
            ";
            // line 89
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
        </form>
        ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 92
                echo "            <div data-image=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
                echo "\" class=\"tile bg-transparent fg-white\" data-role=\"tile\"
                 style=\"overflow: hidden\">
                <div class=\"tile-content iconic\">
                    <div style=\"width: 100%; height: 150px; border-radius: 0px; background-image: url('";
                // line 95
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["image"], "media", array()), "big");
                echo "'); background-size: cover; background-repeat: no-repeat;\"></div>
                    <div class=\"tile-label\">";
                // line 96
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["image"], "media", array()), "big");
                echo "</div>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "
        <div data-role=\"dialog\" id=\"dialog5\" class=\"padding20 dialog alert\" data-close-button=\"true\" data-type=\"alert\"
             style=\"width: auto; height: auto; visibility: visible; left: 251px; top: 427px;\">
            <h1>Delete Folder</h1>
            <p>
                Do you really want to delete this folder and <b>";
            // line 105
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["images"]) ? $context["images"] : $this->getContext($context, "images"))), "html", null, true);
            echo "</b> images ?
            </p><br>
            <div style=\"text-align:center\">
                <button class=\"button\"><span class=\"mif-cross\"></span> No</button>
                <a href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("folder_delete", array("id" => $this->getAttribute((isset($context["folder"]) ? $context["folder"] : $this->getContext($context, "folder")), "id", array()))), "html", null, true);
            echo "\">
                    <button class=\"button\"><span class=\"mif-checkmark\"></span> Yes</button>
                </a>
            </div>
            <span class=\"dialog-close-button\"></span>
        </div>

    ";
        } else {
            // line 117
            echo "        No folder found
    ";
        }
    }

    // line 121
    public function block_javascripts($context, array $blocks = array())
    {
        // line 122
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ae18e9a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae18e9a_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ae18e9a_modernizr.custom.70736_1.js");
            // line 130
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
        // line 132
        echo "
    <script type=\"text/javascript\">

        var selected = 0;

        function unselectTiles() {
            selected = 0;
            \$(\"#delete_image\").hide();
            \$(\"#define_cover_image\").hide();

            \$(\".tile.element-selected\").each(function (index) {
                \$(this).removeClass(\"element-selected\");
            })
        }


        \$(\".tile\").click(function () {
            if (\$(this).hasClass(\"element-selected\")) {
                \$(this).removeClass(\"element-selected\");
                selected--;
            }
            else {
                \$(this).addClass(\"element-selected\");
                selected++;
            }

            if (selected == 1)
                \$(\"#define_cover_image\").show();
            else
                \$(\"#define_cover_image\").hide();

            if (selected > 0)
                \$(\"#delete_image\").show();
            else
                \$(\"#delete_image\").hide();
        });

        \$(\"#define_cover_image\").click(function () {
            var element = null;
            \$(\".tile.element-selected\").each(function (index) {
                element = \$(this).attr(\"data-image\");
            })
            \$.ajax({
                url: '";
        // line 175
        echo $this->env->getExtension('routing')->getPath("folder_set_cover");
        echo "',
                type: 'POST',
                data: {
                    image: element, folder: '";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : $this->getContext($context, "folder")), "id", array()), "html", null, true);
        echo "'
                },
                success: function (data) {
                    \$.Notify({
                        caption: data[\"status\"],
                        content: data[\"message\"],
                        type: data[\"status\"]
                    });
                    unselectTiles();
                },

                error: function (data) {
                    console.log(data);
                },
            })
        })

        \$(\"#delete_image\").click(function () {
            var elements = [];
            \$(\".tile.element-selected\").each(function (index) {
                elements.push(\$(this).attr(\"data-image\"));
            })
            \$.ajax({
                url: '";
        // line 201
        echo $this->env->getExtension('routing')->getPath("folder_delete_image");
        echo "',
                type: 'POST',
                data: {
                    elements: elements, folder: '";
        // line 204
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : $this->getContext($context, "folder")), "id", array()), "html", null, true);
        echo "'
                },
                success: function (data) {
                    \$.Notify({
                        caption: data[\"status\"],
                        content: data[\"message\"],
                        type: data[\"status\"]
                    });
                    \$(\".tile.element-selected\").each(function (index) {
                        \$(this).hide();
                    })
                    unselectTiles();
                },

                error: function (data) {
                    console.log(data);
                },
            });
        })


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
        return "DefaultBundle:Default:folder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 204,  419 => 201,  393 => 178,  387 => 175,  342 => 132,  292 => 130,  287 => 122,  284 => 121,  278 => 117,  267 => 109,  260 => 105,  253 => 100,  243 => 96,  239 => 95,  232 => 92,  228 => 91,  223 => 89,  219 => 88,  214 => 86,  199 => 74,  191 => 69,  187 => 68,  173 => 57,  159 => 46,  148 => 38,  144 => 37,  134 => 30,  130 => 29,  123 => 25,  119 => 24,  111 => 20,  109 => 19,  106 => 18,  103 => 17,  94 => 12,  91 => 11,  83 => 12,  80 => 11,  73 => 12,  70 => 11,  63 => 12,  60 => 11,  53 => 12,  50 => 11,  43 => 12,  40 => 11,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
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
/*                 <label>Public URL to edit</label>*/
/*                 <div class="input-control text full-size">*/
/*                     <div class="input-control file full-size" data-role="input">*/
/*                         <input value="{{ url('folder_direct_edit', {'slug':folder.editSlug}) }}" type="text"*/
/*                                class="input-file-wrapper" readonly="" style="z-index: 1; cursor: default;">*/
/*                         <button class="button" type="button"><span class="mif-link"></span></button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <br>*/
/*             <div class="cell">*/
/*                 <label>Public URL to show</label>*/
/*                 <div class="input-control text full-size">*/
/*                     <div class="input-control file full-size" data-role="input">*/
/*                         <input value="{{ url('folder_direct_show', {'slug':folder.showSlug}) }}" type="text"*/
/*                                class="input-file-wrapper" readonly="" style="z-index: 1; cursor: default;">*/
/*                         <button class="button" type="button"><span class="mif-link"></span></button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <br><br>*/
/*             <div class="cell" style="text-align: right">*/
/*                 <button type="button" class="button alert rounded" onclick="showDialog('dialog5')">Delete</button>*/
/*                 <button type="submit" class="button rounded">Save</button>*/
/*             </div>*/
/*             {{ form_rest(form_folder) }}*/
/*             {{ form_end(form_folder) }}*/
/*             <br>*/
/*         </div>*/
/* */
/*         <div class="padding20 align-center">*/
/*             <a href="{{ url('folder_direct_show', {'slug':folder.showSlug}) }}">*/
/*                 <button class="button"><span class="mif-search"></span> Afficher</button>*/
/*             </a>*/
/*             <button class="button" id="define_cover_image" style="display:none"><span class="mif-bookmark"></span>*/
/*                 Definir en tant que photo*/
/*                 de couverture*/
/*             </button>*/
/*             <button class="button" id="delete_image" style="display:none"><span class="mif-bin"></span> Supprimer*/
/*             </button>*/
/*             <button class="button" onclick="showCharm('left')"><span class="mif-cog"></span> Parametres</button>*/
/*         </div>*/
/* */
/*         <form enctype="multipart/form-data" class="dropzone" action="{{ app.request.uri }}" method="post"*/
/*               name="acme_dropzone_form" id="acme_dropzone_form">*/
/*             {{ form_widget(form) }}*/
/*             {{ form_end(form) }}*/
/*         </form>*/
/*         {% for image in images %}*/
/*             <div data-image="{{ image.id }}" class="tile bg-transparent fg-white" data-role="tile"*/
/*                  style="overflow: hidden">*/
/*                 <div class="tile-content iconic">*/
/*                     <div style="width: 100%; height: 150px; border-radius: 0px; background-image: url('{% path image.media, 'big' %}'); background-size: cover; background-repeat: no-repeat;"></div>*/
/*                     <div class="tile-label">{% path image.media, 'big' %}</div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*         <div data-role="dialog" id="dialog5" class="padding20 dialog alert" data-close-button="true" data-type="alert"*/
/*              style="width: auto; height: auto; visibility: visible; left: 251px; top: 427px;">*/
/*             <h1>Delete Folder</h1>*/
/*             <p>*/
/*                 Do you really want to delete this folder and <b>{{ images|length }}</b> images ?*/
/*             </p><br>*/
/*             <div style="text-align:center">*/
/*                 <button class="button"><span class="mif-cross"></span> No</button>*/
/*                 <a href="{{ path('folder_delete', {'id': folder.id}) }}">*/
/*                     <button class="button"><span class="mif-checkmark"></span> Yes</button>*/
/*                 </a>*/
/*             </div>*/
/*             <span class="dialog-close-button"></span>*/
/*         </div>*/
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
/* */
/*         var selected = 0;*/
/* */
/*         function unselectTiles() {*/
/*             selected = 0;*/
/*             $("#delete_image").hide();*/
/*             $("#define_cover_image").hide();*/
/* */
/*             $(".tile.element-selected").each(function (index) {*/
/*                 $(this).removeClass("element-selected");*/
/*             })*/
/*         }*/
/* */
/* */
/*         $(".tile").click(function () {*/
/*             if ($(this).hasClass("element-selected")) {*/
/*                 $(this).removeClass("element-selected");*/
/*                 selected--;*/
/*             }*/
/*             else {*/
/*                 $(this).addClass("element-selected");*/
/*                 selected++;*/
/*             }*/
/* */
/*             if (selected == 1)*/
/*                 $("#define_cover_image").show();*/
/*             else*/
/*                 $("#define_cover_image").hide();*/
/* */
/*             if (selected > 0)*/
/*                 $("#delete_image").show();*/
/*             else*/
/*                 $("#delete_image").hide();*/
/*         });*/
/* */
/*         $("#define_cover_image").click(function () {*/
/*             var element = null;*/
/*             $(".tile.element-selected").each(function (index) {*/
/*                 element = $(this).attr("data-image");*/
/*             })*/
/*             $.ajax({*/
/*                 url: '{{ path('folder_set_cover') }}',*/
/*                 type: 'POST',*/
/*                 data: {*/
/*                     image: element, folder: '{{ folder.id }}'*/
/*                 },*/
/*                 success: function (data) {*/
/*                     $.Notify({*/
/*                         caption: data["status"],*/
/*                         content: data["message"],*/
/*                         type: data["status"]*/
/*                     });*/
/*                     unselectTiles();*/
/*                 },*/
/* */
/*                 error: function (data) {*/
/*                     console.log(data);*/
/*                 },*/
/*             })*/
/*         })*/
/* */
/*         $("#delete_image").click(function () {*/
/*             var elements = [];*/
/*             $(".tile.element-selected").each(function (index) {*/
/*                 elements.push($(this).attr("data-image"));*/
/*             })*/
/*             $.ajax({*/
/*                 url: '{{ path('folder_delete_image') }}',*/
/*                 type: 'POST',*/
/*                 data: {*/
/*                     elements: elements, folder: '{{ folder.id }}'*/
/*                 },*/
/*                 success: function (data) {*/
/*                     $.Notify({*/
/*                         caption: data["status"],*/
/*                         content: data["message"],*/
/*                         type: data["status"]*/
/*                     });*/
/*                     $(".tile.element-selected").each(function (index) {*/
/*                         $(this).hide();*/
/*                     })*/
/*                     unselectTiles();*/
/*                 },*/
/* */
/*                 error: function (data) {*/
/*                     console.log(data);*/
/*                 },*/
/*             });*/
/*         })*/
/* */
/* */
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
