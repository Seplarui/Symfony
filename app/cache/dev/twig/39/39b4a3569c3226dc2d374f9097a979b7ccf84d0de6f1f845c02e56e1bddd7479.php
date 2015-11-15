<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d7da0274ad03c56331a8c33590bc8f708dc9e5440e0b5fd99ef9255a636cac36 extends Twig_Template
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
        $__internal_24810f906764bbe918d5d916c07c01be34a2ec8e76e0bf616744c7b0a44cdab2 = $this->env->getExtension("native_profiler");
        $__internal_24810f906764bbe918d5d916c07c01be34a2ec8e76e0bf616744c7b0a44cdab2->enter($__internal_24810f906764bbe918d5d916c07c01be34a2ec8e76e0bf616744c7b0a44cdab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24810f906764bbe918d5d916c07c01be34a2ec8e76e0bf616744c7b0a44cdab2->leave($__internal_24810f906764bbe918d5d916c07c01be34a2ec8e76e0bf616744c7b0a44cdab2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_42d883de6f7428fc823d35492d912c8c1a8cd78970f16f999fd0b680bb83af5f = $this->env->getExtension("native_profiler");
        $__internal_42d883de6f7428fc823d35492d912c8c1a8cd78970f16f999fd0b680bb83af5f->enter($__internal_42d883de6f7428fc823d35492d912c8c1a8cd78970f16f999fd0b680bb83af5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_42d883de6f7428fc823d35492d912c8c1a8cd78970f16f999fd0b680bb83af5f->leave($__internal_42d883de6f7428fc823d35492d912c8c1a8cd78970f16f999fd0b680bb83af5f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd8aefbd0fd628950d4a60319b637b9973b79fb1be21373f29f1d8ff4a44f92b = $this->env->getExtension("native_profiler");
        $__internal_cd8aefbd0fd628950d4a60319b637b9973b79fb1be21373f29f1d8ff4a44f92b->enter($__internal_cd8aefbd0fd628950d4a60319b637b9973b79fb1be21373f29f1d8ff4a44f92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cd8aefbd0fd628950d4a60319b637b9973b79fb1be21373f29f1d8ff4a44f92b->leave($__internal_cd8aefbd0fd628950d4a60319b637b9973b79fb1be21373f29f1d8ff4a44f92b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebc6f8501979b6ac18f32432929b004935fd9c14ad0b01d21edf6e34cd908023 = $this->env->getExtension("native_profiler");
        $__internal_ebc6f8501979b6ac18f32432929b004935fd9c14ad0b01d21edf6e34cd908023->enter($__internal_ebc6f8501979b6ac18f32432929b004935fd9c14ad0b01d21edf6e34cd908023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ebc6f8501979b6ac18f32432929b004935fd9c14ad0b01d21edf6e34cd908023->leave($__internal_ebc6f8501979b6ac18f32432929b004935fd9c14ad0b01d21edf6e34cd908023_prof);

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
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
