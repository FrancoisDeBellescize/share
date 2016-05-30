<?php

/* ::layout.html.twig */
class __TwigTemplate_0de5f712c241277a72244732d2fb6e47720a88b4c63f166a42c76ae96a7c8a49 extends Twig_Template
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
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('body', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  41 => 4,  36 => 1,  32 => 7,  29 => 6,  27 => 4,  24 => 3,  22 => 1,);
    }
}
/* {% block stylesheets %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {% endblock %}*/
