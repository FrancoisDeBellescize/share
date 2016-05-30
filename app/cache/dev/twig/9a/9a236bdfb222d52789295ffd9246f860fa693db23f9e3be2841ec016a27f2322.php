<?php

/* DefaultBundle:Default:dropzone.html.twig */
class __TwigTemplate_2c92be5d9f551ff1fb3abdee0e076aee2ead8a165aef20930b939b67266c71b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "DefaultBundle:Default:dropzone.html.twig", 1);
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
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4eb1342_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4eb1342_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4eb1342_dropzone_1.css");
            // line 5
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "4eb1342"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4eb1342") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4eb1342.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
    <form enctype=\"multipart/form-data\" class=\"dropzone\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
        echo "\" method=\"post\" name=\"acme_dropzone_form\" id=\"acme_dropzone_form\">
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "39ef954_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_39ef954_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/39ef954_dropzone_1.js");
            // line 19
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "39ef954"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_39ef954") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/39ef954.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "DefaultBundle:Default:dropzone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 19,  78 => 18,  75 => 17,  68 => 13,  64 => 12,  60 => 11,  57 => 10,  54 => 9,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {% stylesheets '@DefaultBundle/Resources/public/css/dropzone.css' filter='cssrewrite' %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <form enctype="multipart/form-data" class="dropzone" action="{{ app.request.uri }}" method="post" name="acme_dropzone_form" id="acme_dropzone_form">*/
/*         {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {% javascripts '@DefaultBundle/Resources/public/js/dropzone.js' %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* {% endblock %}*/
