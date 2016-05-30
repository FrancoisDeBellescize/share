<?php

/* DefaultBundle:Default:dashboard.html.twig */
class __TwigTemplate_3242b1166af964d2bb9f7526e3b4f93f8de58b466d166338878038fd9726f031 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "DefaultBundle:Default:dashboard.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div data-role=\"charm\" data-position=\"left\" id=\"left-charm\">
        <h1 class=\"text-light\">Nouveau dossier</h1><br>
        ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        <div class=\"cell\">
            <label>Nom</label>
            <div class=\"input-control text full-size\">
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
            </div>
        </div>
        <br>
        <div class=\"cell\">
            <label>Taille</label>
            <div class=\"input-control text full-size\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "size", array()), 'errors');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "size", array()), 'widget');
        echo "
            </div>
        </div>
        <br>
        <br>
        <button type=\"submit\" class=\"button rounded\">Save</button>
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        <br>
    </div>
    <div class=\"padding20 align-center\">
        <button class=\"button\" onclick=\"showCharm('left')\"><span class=\"mif-folder-plus\"></span> Nouveau dossier
        </button>
    </div>
    <div class=\"tile-group double\">
        <span class=\"tile-group-title\">General</span>
        <div class=\"tile-container\">
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["folders"]) ? $context["folders"] : $this->getContext($context, "folders")));
        foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
            // line 38
            echo "                <a class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["folder"], "size", array()), "html", null, true);
            echo " bg-red fg-white\" data-role=\"tile\"  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("folder_page", array("id" => $this->getAttribute($context["folder"], "id", array()))), "html", null, true);
            echo "\">
                    <div class=\"tile-content ";
            // line 39
            if ($this->getAttribute($context["folder"], "cover", array())) {
                echo "zooming";
            } else {
                echo "iconic";
            }
            echo "\">
                        ";
            // line 40
            if ($this->getAttribute($context["folder"], "cover", array())) {
                // line 41
                echo "                            <div class=\"slide\">
                                <img class=\"img-tiles\" src=\"";
                // line 42
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($this->getAttribute($context["folder"], "cover", array()), "media", array()), "big");
                echo "\">
                            </div>
                        ";
            } else {
                // line 45
                echo "                            <span class=\"icon mif-image\"></span>
                        ";
            }
            // line 47
            echo "                        <div class=\"tile-label\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["folder"], "name", array()), "html", null, true);
            echo "</div>
                    </div>
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "DefaultBundle:Default:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 51,  124 => 47,  120 => 45,  114 => 42,  111 => 41,  109 => 40,  101 => 39,  94 => 38,  90 => 37,  77 => 27,  73 => 26,  64 => 20,  60 => 19,  50 => 12,  46 => 11,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div data-role="charm" data-position="left" id="left-charm">*/
/*         <h1 class="text-light">Nouveau dossier</h1><br>*/
/*         {{ form_start(form) }}*/
/*         {{ form_errors(form) }}*/
/*         <div class="cell">*/
/*             <label>Nom</label>*/
/*             <div class="input-control text full-size">*/
/*                 {{ form_errors(form.name) }}*/
/*                 {{ form_widget(form.name) }}*/
/*             </div>*/
/*         </div>*/
/*         <br>*/
/*         <div class="cell">*/
/*             <label>Taille</label>*/
/*             <div class="input-control text full-size">*/
/*                 {{ form_errors(form.size) }}*/
/*                 {{ form_widget(form.size) }}*/
/*             </div>*/
/*         </div>*/
/*         <br>*/
/*         <br>*/
/*         <button type="submit" class="button rounded">Save</button>*/
/*         {{ form_rest(form) }}*/
/*         {{ form_end(form) }}*/
/*         <br>*/
/*     </div>*/
/*     <div class="padding20 align-center">*/
/*         <button class="button" onclick="showCharm('left')"><span class="mif-folder-plus"></span> Nouveau dossier*/
/*         </button>*/
/*     </div>*/
/*     <div class="tile-group double">*/
/*         <span class="tile-group-title">General</span>*/
/*         <div class="tile-container">*/
/*             {% for folder in folders %}*/
/*                 <a class="{{ folder.size }} bg-red fg-white" data-role="tile"  href="{{ path('folder_page', {'id': folder.id}) }}">*/
/*                     <div class="tile-content {% if folder.cover %}zooming{% else %}iconic{% endif %}">*/
/*                         {% if folder.cover %}*/
/*                             <div class="slide">*/
/*                                 <img class="img-tiles" src="{% path folder.cover.media, 'big' %}">*/
/*                             </div>*/
/*                         {% else %}*/
/*                             <span class="icon mif-image"></span>*/
/*                         {% endif %}*/
/*                         <div class="tile-label">{{ folder.name }}</div>*/
/*                     </div>*/
/*                 </a>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
