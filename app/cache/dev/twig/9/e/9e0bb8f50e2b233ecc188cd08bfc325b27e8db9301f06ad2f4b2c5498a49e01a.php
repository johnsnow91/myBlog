<?php

/* lucky/number.html.twig */
class __TwigTemplate_9e0bb8f50e2b233ecc188cd08bfc325b27e8db9301f06ad2f4b2c5498a49e01a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "lucky/number.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ae8fb11b39efe41eedd2310a6119edc2baad5d5686bf9e4cb5c924750ef1358 = $this->env->getExtension("native_profiler");
        $__internal_4ae8fb11b39efe41eedd2310a6119edc2baad5d5686bf9e4cb5c924750ef1358->enter($__internal_4ae8fb11b39efe41eedd2310a6119edc2baad5d5686bf9e4cb5c924750ef1358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ae8fb11b39efe41eedd2310a6119edc2baad5d5686bf9e4cb5c924750ef1358->leave($__internal_4ae8fb11b39efe41eedd2310a6119edc2baad5d5686bf9e4cb5c924750ef1358_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_facf89bf103b265016bb964b1dcc2d890575cc43890641196d04e29af959f6d2 = $this->env->getExtension("native_profiler");
        $__internal_facf89bf103b265016bb964b1dcc2d890575cc43890641196d04e29af959f6d2->enter($__internal_facf89bf103b265016bb964b1dcc2d890575cc43890641196d04e29af959f6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Lucky Numbers: ";
        echo twig_escape_filter($this->env, (isset($context["luckyNumberList"]) ? $context["luckyNumberList"] : $this->getContext($context, "luckyNumberList")), "html", null, true);
        echo "</h1>
    ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 7
            echo "\t    <div class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $context["i"]), "html", null, true);
            echo "\">
\t      ";
            // line 8
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "
\t    </div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_facf89bf103b265016bb964b1dcc2d890575cc43890641196d04e29af959f6d2->leave($__internal_facf89bf103b265016bb964b1dcc2d890575cc43890641196d04e29af959f6d2_prof);

    }

    public function getTemplateName()
    {
        return "lucky/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  49 => 7,  45 => 6,  40 => 5,  34 => 4,  11 => 2,);
    }
}
