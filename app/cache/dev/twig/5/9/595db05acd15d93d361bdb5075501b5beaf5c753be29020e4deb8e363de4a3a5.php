<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_595db05acd15d93d361bdb5075501b5beaf5c753be29020e4deb8e363de4a3a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8554f95bc8cf0b3a9211719f883bc09b43f566f6b4832a7bdf1189937748e3b = $this->env->getExtension("native_profiler");
        $__internal_e8554f95bc8cf0b3a9211719f883bc09b43f566f6b4832a7bdf1189937748e3b->enter($__internal_e8554f95bc8cf0b3a9211719f883bc09b43f566f6b4832a7bdf1189937748e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8554f95bc8cf0b3a9211719f883bc09b43f566f6b4832a7bdf1189937748e3b->leave($__internal_e8554f95bc8cf0b3a9211719f883bc09b43f566f6b4832a7bdf1189937748e3b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6a8754ddba14896fac98befc0dea04a50130e9729319ff560b6528668084190d = $this->env->getExtension("native_profiler");
        $__internal_6a8754ddba14896fac98befc0dea04a50130e9729319ff560b6528668084190d->enter($__internal_6a8754ddba14896fac98befc0dea04a50130e9729319ff560b6528668084190d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6a8754ddba14896fac98befc0dea04a50130e9729319ff560b6528668084190d->leave($__internal_6a8754ddba14896fac98befc0dea04a50130e9729319ff560b6528668084190d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1ab67d6b1bfb5f0ca016677c04df8291f9912f4b25595a0e829a87d43e5fd95 = $this->env->getExtension("native_profiler");
        $__internal_b1ab67d6b1bfb5f0ca016677c04df8291f9912f4b25595a0e829a87d43e5fd95->enter($__internal_b1ab67d6b1bfb5f0ca016677c04df8291f9912f4b25595a0e829a87d43e5fd95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b1ab67d6b1bfb5f0ca016677c04df8291f9912f4b25595a0e829a87d43e5fd95->leave($__internal_b1ab67d6b1bfb5f0ca016677c04df8291f9912f4b25595a0e829a87d43e5fd95_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee4893e5a4b72ab595e9ee3711d5d036469dbc4f6bc6b7f39f3df4920c93d53d = $this->env->getExtension("native_profiler");
        $__internal_ee4893e5a4b72ab595e9ee3711d5d036469dbc4f6bc6b7f39f3df4920c93d53d->enter($__internal_ee4893e5a4b72ab595e9ee3711d5d036469dbc4f6bc6b7f39f3df4920c93d53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ee4893e5a4b72ab595e9ee3711d5d036469dbc4f6bc6b7f39f3df4920c93d53d->leave($__internal_ee4893e5a4b72ab595e9ee3711d5d036469dbc4f6bc6b7f39f3df4920c93d53d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
