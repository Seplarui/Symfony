<?php

/* base.html.twig */
class __TwigTemplate_67031aaf81cb49e82bbf46ba72e74a583965dba72373dd0f787ad6c359a09945 extends Twig_Template
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
        $__internal_b6e0a164da1ffe0940cd51c586733307ada415b637102a6f1d18597fb343958c = $this->env->getExtension("native_profiler");
        $__internal_b6e0a164da1ffe0940cd51c586733307ada415b637102a6f1d18597fb343958c->enter($__internal_b6e0a164da1ffe0940cd51c586733307ada415b637102a6f1d18597fb343958c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b6e0a164da1ffe0940cd51c586733307ada415b637102a6f1d18597fb343958c->leave($__internal_b6e0a164da1ffe0940cd51c586733307ada415b637102a6f1d18597fb343958c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_18f3a7a4e0027c2ef31c8d1c8c7d0acb65a6bca7008219f2ce28ef9a9329547e = $this->env->getExtension("native_profiler");
        $__internal_18f3a7a4e0027c2ef31c8d1c8c7d0acb65a6bca7008219f2ce28ef9a9329547e->enter($__internal_18f3a7a4e0027c2ef31c8d1c8c7d0acb65a6bca7008219f2ce28ef9a9329547e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_18f3a7a4e0027c2ef31c8d1c8c7d0acb65a6bca7008219f2ce28ef9a9329547e->leave($__internal_18f3a7a4e0027c2ef31c8d1c8c7d0acb65a6bca7008219f2ce28ef9a9329547e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e651c05bafcf4349a9c947152b4acd7341d16e5e59aec50b693c12a0182ceda5 = $this->env->getExtension("native_profiler");
        $__internal_e651c05bafcf4349a9c947152b4acd7341d16e5e59aec50b693c12a0182ceda5->enter($__internal_e651c05bafcf4349a9c947152b4acd7341d16e5e59aec50b693c12a0182ceda5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e651c05bafcf4349a9c947152b4acd7341d16e5e59aec50b693c12a0182ceda5->leave($__internal_e651c05bafcf4349a9c947152b4acd7341d16e5e59aec50b693c12a0182ceda5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_56684a6142455c6ffd02055556717281ab352da013dfc9ee4d6d7e250c17d9f0 = $this->env->getExtension("native_profiler");
        $__internal_56684a6142455c6ffd02055556717281ab352da013dfc9ee4d6d7e250c17d9f0->enter($__internal_56684a6142455c6ffd02055556717281ab352da013dfc9ee4d6d7e250c17d9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_56684a6142455c6ffd02055556717281ab352da013dfc9ee4d6d7e250c17d9f0->leave($__internal_56684a6142455c6ffd02055556717281ab352da013dfc9ee4d6d7e250c17d9f0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6d7641dc1ae87840e4d9c87eb98aa4c0e88702029eb6c0330ab0c226f49d23eb = $this->env->getExtension("native_profiler");
        $__internal_6d7641dc1ae87840e4d9c87eb98aa4c0e88702029eb6c0330ab0c226f49d23eb->enter($__internal_6d7641dc1ae87840e4d9c87eb98aa4c0e88702029eb6c0330ab0c226f49d23eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6d7641dc1ae87840e4d9c87eb98aa4c0e88702029eb6c0330ab0c226f49d23eb->leave($__internal_6d7641dc1ae87840e4d9c87eb98aa4c0e88702029eb6c0330ab0c226f49d23eb_prof);

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
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
