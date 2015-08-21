<?php

/* base.html.twig */
class __TwigTemplate_06f13e79151947a5e0870c0f407be917b1d1678a290eafccd9bdd849557ade80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6c0157dfb6b28c7b68a4003e8683cdf0f459438c28f2a0a848aef5643d3ab1b = $this->env->getExtension("native_profiler");
        $__internal_d6c0157dfb6b28c7b68a4003e8683cdf0f459438c28f2a0a848aef5643d3ab1b->enter($__internal_d6c0157dfb6b28c7b68a4003e8683cdf0f459438c28f2a0a848aef5643d3ab1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_d6c0157dfb6b28c7b68a4003e8683cdf0f459438c28f2a0a848aef5643d3ab1b->leave($__internal_d6c0157dfb6b28c7b68a4003e8683cdf0f459438c28f2a0a848aef5643d3ab1b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e20614b7c95641559f5362386cbb6e9ddd07a583bd3c69f5716170e22be6a26 = $this->env->getExtension("native_profiler");
        $__internal_3e20614b7c95641559f5362386cbb6e9ddd07a583bd3c69f5716170e22be6a26->enter($__internal_3e20614b7c95641559f5362386cbb6e9ddd07a583bd3c69f5716170e22be6a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3e20614b7c95641559f5362386cbb6e9ddd07a583bd3c69f5716170e22be6a26->leave($__internal_3e20614b7c95641559f5362386cbb6e9ddd07a583bd3c69f5716170e22be6a26_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_902bfc7144c9bb1b9eff1100f7cccbf392b980f98be5e47e22b3f1d0b0932ce1 = $this->env->getExtension("native_profiler");
        $__internal_902bfc7144c9bb1b9eff1100f7cccbf392b980f98be5e47e22b3f1d0b0932ce1->enter($__internal_902bfc7144c9bb1b9eff1100f7cccbf392b980f98be5e47e22b3f1d0b0932ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_902bfc7144c9bb1b9eff1100f7cccbf392b980f98be5e47e22b3f1d0b0932ce1->leave($__internal_902bfc7144c9bb1b9eff1100f7cccbf392b980f98be5e47e22b3f1d0b0932ce1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc417d9fbe1d872acc65ba062f3840be1de1df25939c6b4926af8b5670484269 = $this->env->getExtension("native_profiler");
        $__internal_dc417d9fbe1d872acc65ba062f3840be1de1df25939c6b4926af8b5670484269->enter($__internal_dc417d9fbe1d872acc65ba062f3840be1de1df25939c6b4926af8b5670484269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dc417d9fbe1d872acc65ba062f3840be1de1df25939c6b4926af8b5670484269->leave($__internal_dc417d9fbe1d872acc65ba062f3840be1de1df25939c6b4926af8b5670484269_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b63dd8f86069e53131966bc12249a5aeac025621dc3db599ab1f9298ebb539b9 = $this->env->getExtension("native_profiler");
        $__internal_b63dd8f86069e53131966bc12249a5aeac025621dc3db599ab1f9298ebb539b9->enter($__internal_b63dd8f86069e53131966bc12249a5aeac025621dc3db599ab1f9298ebb539b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b63dd8f86069e53131966bc12249a5aeac025621dc3db599ab1f9298ebb539b9->leave($__internal_b63dd8f86069e53131966bc12249a5aeac025621dc3db599ab1f9298ebb539b9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
