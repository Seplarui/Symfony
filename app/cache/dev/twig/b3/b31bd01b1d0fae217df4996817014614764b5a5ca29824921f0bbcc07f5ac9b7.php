<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_3a7001cbf6e039b85c6c3bab3ebbd7fbb469b34f20f95edf477184c73a1d6882 extends Twig_Template
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
        $__internal_a70ebb98112fc981c064e41b33184eccac458465c10cbb9a0793506e60da607d = $this->env->getExtension("native_profiler");
        $__internal_a70ebb98112fc981c064e41b33184eccac458465c10cbb9a0793506e60da607d->enter($__internal_a70ebb98112fc981c064e41b33184eccac458465c10cbb9a0793506e60da607d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a70ebb98112fc981c064e41b33184eccac458465c10cbb9a0793506e60da607d->leave($__internal_a70ebb98112fc981c064e41b33184eccac458465c10cbb9a0793506e60da607d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3624cc628b28d68917065e92fb5862018459270583a2920165c146dde0583a87 = $this->env->getExtension("native_profiler");
        $__internal_3624cc628b28d68917065e92fb5862018459270583a2920165c146dde0583a87->enter($__internal_3624cc628b28d68917065e92fb5862018459270583a2920165c146dde0583a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_3624cc628b28d68917065e92fb5862018459270583a2920165c146dde0583a87->leave($__internal_3624cc628b28d68917065e92fb5862018459270583a2920165c146dde0583a87_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_62604aa8002ac81b8f02bb8d472f658765d76f8abd71daab008583650d1072fb = $this->env->getExtension("native_profiler");
        $__internal_62604aa8002ac81b8f02bb8d472f658765d76f8abd71daab008583650d1072fb->enter($__internal_62604aa8002ac81b8f02bb8d472f658765d76f8abd71daab008583650d1072fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_62604aa8002ac81b8f02bb8d472f658765d76f8abd71daab008583650d1072fb->leave($__internal_62604aa8002ac81b8f02bb8d472f658765d76f8abd71daab008583650d1072fb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_13b831f1e42c7243569b71587ffc76283c1e725a9c90111934eae178c5b35ce5 = $this->env->getExtension("native_profiler");
        $__internal_13b831f1e42c7243569b71587ffc76283c1e725a9c90111934eae178c5b35ce5->enter($__internal_13b831f1e42c7243569b71587ffc76283c1e725a9c90111934eae178c5b35ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_13b831f1e42c7243569b71587ffc76283c1e725a9c90111934eae178c5b35ce5->leave($__internal_13b831f1e42c7243569b71587ffc76283c1e725a9c90111934eae178c5b35ce5_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_4f1408bf3fab34227ae8bffd6676435d306f26e87bb68b3bdb6b4e20daeeb826 = $this->env->getExtension("native_profiler");
        $__internal_4f1408bf3fab34227ae8bffd6676435d306f26e87bb68b3bdb6b4e20daeeb826->enter($__internal_4f1408bf3fab34227ae8bffd6676435d306f26e87bb68b3bdb6b4e20daeeb826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_4f1408bf3fab34227ae8bffd6676435d306f26e87bb68b3bdb6b4e20daeeb826->leave($__internal_4f1408bf3fab34227ae8bffd6676435d306f26e87bb68b3bdb6b4e20daeeb826_prof);

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
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
