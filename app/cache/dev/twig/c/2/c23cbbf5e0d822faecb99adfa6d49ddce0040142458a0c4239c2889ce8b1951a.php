<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_c23cbbf5e0d822faecb99adfa6d49ddce0040142458a0c4239c2889ce8b1951a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a9f22c7df2943f375b107780313099766de1472a8712b55f859e2a94b8211e7 = $this->env->getExtension("native_profiler");
        $__internal_6a9f22c7df2943f375b107780313099766de1472a8712b55f859e2a94b8211e7->enter($__internal_6a9f22c7df2943f375b107780313099766de1472a8712b55f859e2a94b8211e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a9f22c7df2943f375b107780313099766de1472a8712b55f859e2a94b8211e7->leave($__internal_6a9f22c7df2943f375b107780313099766de1472a8712b55f859e2a94b8211e7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_593d88ae44cfe45e06215a8b091f3f03a14fc4497cd72b30ac7f5f83143e3ddf = $this->env->getExtension("native_profiler");
        $__internal_593d88ae44cfe45e06215a8b091f3f03a14fc4497cd72b30ac7f5f83143e3ddf->enter($__internal_593d88ae44cfe45e06215a8b091f3f03a14fc4497cd72b30ac7f5f83143e3ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_593d88ae44cfe45e06215a8b091f3f03a14fc4497cd72b30ac7f5f83143e3ddf->leave($__internal_593d88ae44cfe45e06215a8b091f3f03a14fc4497cd72b30ac7f5f83143e3ddf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f88b665ddf63ee09049c644e6f704e6e655091072f085c52af5840adf69e6b8f = $this->env->getExtension("native_profiler");
        $__internal_f88b665ddf63ee09049c644e6f704e6e655091072f085c52af5840adf69e6b8f->enter($__internal_f88b665ddf63ee09049c644e6f704e6e655091072f085c52af5840adf69e6b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_f88b665ddf63ee09049c644e6f704e6e655091072f085c52af5840adf69e6b8f->leave($__internal_f88b665ddf63ee09049c644e6f704e6e655091072f085c52af5840adf69e6b8f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_dcb1d4c065fc76e3f3930624b9b6bea3dda00adcabd1aef1a811496e0ed825ca = $this->env->getExtension("native_profiler");
        $__internal_dcb1d4c065fc76e3f3930624b9b6bea3dda00adcabd1aef1a811496e0ed825ca->enter($__internal_dcb1d4c065fc76e3f3930624b9b6bea3dda00adcabd1aef1a811496e0ed825ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_dcb1d4c065fc76e3f3930624b9b6bea3dda00adcabd1aef1a811496e0ed825ca->leave($__internal_dcb1d4c065fc76e3f3930624b9b6bea3dda00adcabd1aef1a811496e0ed825ca_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_8d5c5b0631ee3ed757702d1029da26a12ba52b0be7bd3c99850bfed065dfc62c = $this->env->getExtension("native_profiler");
        $__internal_8d5c5b0631ee3ed757702d1029da26a12ba52b0be7bd3c99850bfed065dfc62c->enter($__internal_8d5c5b0631ee3ed757702d1029da26a12ba52b0be7bd3c99850bfed065dfc62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_8d5c5b0631ee3ed757702d1029da26a12ba52b0be7bd3c99850bfed065dfc62c->leave($__internal_8d5c5b0631ee3ed757702d1029da26a12ba52b0be7bd3c99850bfed065dfc62c_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
