<?php

/* DefaultBundle:Default:direct_show.html.twig */
class __TwigTemplate_6351caea89a0489449f244a425eb2c0efd192c9393e6860f70cdbcafdec3374a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "DefaultBundle:Default:direct_show.html.twig", 1);
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
        <div class=\"gamma-container gamma-loading\" id=\"gamma-container\">
            <ul class=\"gamma-gallery\">
                ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 24
                echo "                    <li>
                        <div data-alt=\"image\" data-description='<h3>Sky high</h3>' data-max-width=\"1800\"
                             data-max-height=\"1350\">
                            <div data-src=\"";
                // line 27
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["image"], "media", array()), "big");
                echo "\" data-min-width=\"1300\"></div>
                            <div data-src=\"";
                // line 28
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["image"], "media", array()), "big");
                echo "\" data-min-width=\"1000\"></div>
                            <div data-src=\"";
                // line 29
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["image"], "media", array()), "big");
                echo "\" data-min-width=\"700\"></div>
                            <div data-src=\"";
                // line 30
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["image"], "media", array()), "big");
                echo "\" data-min-width=\"300\"></div>
                            <div data-src=\"";
                // line 31
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["image"], "media", array()), "big");
                echo "\" data-min-width=\"200\"></div>
                            <div data-src=\"";
                // line 32
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["image"], "media", array()), "big");
                echo "\" data-min-width=\"140\"></div>
                            <div data-src=\"";
                // line 33
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["image"], "media", array()), "big");
                echo "\"></div>
                            <noscript>
                                <img src=\"";
                // line 35
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
            // line 40
            echo "            </ul>

            <div class=\"gamma-overlay\"></div>
        </div>


    ";
        } else {
            // line 47
            echo "        No folder found
    ";
        }
    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        // line 52
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ae18e9a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae18e9a_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ae18e9a_modernizr.custom.70736_1.js");
            // line 60
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
        // line 62
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
        return "DefaultBundle:Default:direct_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 62,  190 => 60,  185 => 52,  182 => 51,  176 => 47,  167 => 40,  156 => 35,  151 => 33,  147 => 32,  143 => 31,  139 => 30,  135 => 29,  131 => 28,  127 => 27,  122 => 24,  118 => 23,  111 => 20,  109 => 19,  106 => 18,  103 => 17,  94 => 12,  91 => 11,  83 => 12,  80 => 11,  73 => 12,  70 => 11,  63 => 12,  60 => 11,  53 => 12,  50 => 11,  43 => 12,  40 => 11,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
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
