<?php

/* DefaultBundle:Default:dashboard.html.twig */
class __TwigTemplate_062732fa8dca1751665487c495866c431bd8e37f4e9ac818946c61f198b59391 extends Twig_Template
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
        echo "    <h1>Hello world!</h1>
    <div class=\"countdown\" data-role=\"countdown\" data-days=\"2\"></div>
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
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Hello world!</h1>*/
/*     <div class="countdown" data-role="countdown" data-days="2"></div>*/
/* {% endblock %}*/
