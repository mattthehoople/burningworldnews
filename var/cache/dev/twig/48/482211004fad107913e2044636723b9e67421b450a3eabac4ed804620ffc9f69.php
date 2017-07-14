<?php

/* base.html.twig */
class __TwigTemplate_42a4a1dc6b6ff71d8d79cf6382ba36fc18b265bfb50fe94e70c9087c6dab2dc6 extends Twig_Template
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
        $__internal_af4df7dd7e23da711be85b13fc2d2e716e37d1dd2ac10c0f399d0722bdd9ce3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af4df7dd7e23da711be85b13fc2d2e716e37d1dd2ac10c0f399d0722bdd9ce3e->enter($__internal_af4df7dd7e23da711be85b13fc2d2e716e37d1dd2ac10c0f399d0722bdd9ce3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_de6e697ea20f907879b3d8901d598ac07d48d779da07c7865f61e350dd5b65cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de6e697ea20f907879b3d8901d598ac07d48d779da07c7865f61e350dd5b65cf->enter($__internal_de6e697ea20f907879b3d8901d598ac07d48d779da07c7865f61e350dd5b65cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_af4df7dd7e23da711be85b13fc2d2e716e37d1dd2ac10c0f399d0722bdd9ce3e->leave($__internal_af4df7dd7e23da711be85b13fc2d2e716e37d1dd2ac10c0f399d0722bdd9ce3e_prof);

        
        $__internal_de6e697ea20f907879b3d8901d598ac07d48d779da07c7865f61e350dd5b65cf->leave($__internal_de6e697ea20f907879b3d8901d598ac07d48d779da07c7865f61e350dd5b65cf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_261578dd63ad90332149880ef63cc41903f14a331c6c6b6265ccaa2f0d0a9b8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_261578dd63ad90332149880ef63cc41903f14a331c6c6b6265ccaa2f0d0a9b8b->enter($__internal_261578dd63ad90332149880ef63cc41903f14a331c6c6b6265ccaa2f0d0a9b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d6abb04755df048ddbce83fb74e5b1e6da4da17605c7c216448c290bb043a0c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6abb04755df048ddbce83fb74e5b1e6da4da17605c7c216448c290bb043a0c9->enter($__internal_d6abb04755df048ddbce83fb74e5b1e6da4da17605c7c216448c290bb043a0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d6abb04755df048ddbce83fb74e5b1e6da4da17605c7c216448c290bb043a0c9->leave($__internal_d6abb04755df048ddbce83fb74e5b1e6da4da17605c7c216448c290bb043a0c9_prof);

        
        $__internal_261578dd63ad90332149880ef63cc41903f14a331c6c6b6265ccaa2f0d0a9b8b->leave($__internal_261578dd63ad90332149880ef63cc41903f14a331c6c6b6265ccaa2f0d0a9b8b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e61d797292c60417e13a415e8ddf91b737a9e2b6589667fc72711ef0fa02089f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e61d797292c60417e13a415e8ddf91b737a9e2b6589667fc72711ef0fa02089f->enter($__internal_e61d797292c60417e13a415e8ddf91b737a9e2b6589667fc72711ef0fa02089f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5c6b82d1e4c417e9fb2843fafb84e012b8fb9da29f03440b686fdc947f336b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c6b82d1e4c417e9fb2843fafb84e012b8fb9da29f03440b686fdc947f336b5c->enter($__internal_5c6b82d1e4c417e9fb2843fafb84e012b8fb9da29f03440b686fdc947f336b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5c6b82d1e4c417e9fb2843fafb84e012b8fb9da29f03440b686fdc947f336b5c->leave($__internal_5c6b82d1e4c417e9fb2843fafb84e012b8fb9da29f03440b686fdc947f336b5c_prof);

        
        $__internal_e61d797292c60417e13a415e8ddf91b737a9e2b6589667fc72711ef0fa02089f->leave($__internal_e61d797292c60417e13a415e8ddf91b737a9e2b6589667fc72711ef0fa02089f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9eae09e171c8bf8feef1c05e103a7e4d5a64b6be96cd3655cc627cb6bff59eae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eae09e171c8bf8feef1c05e103a7e4d5a64b6be96cd3655cc627cb6bff59eae->enter($__internal_9eae09e171c8bf8feef1c05e103a7e4d5a64b6be96cd3655cc627cb6bff59eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_240b65c1949f1cfeee1aefdc3d69432debbafd2547de41681ecc0fbc155a41f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_240b65c1949f1cfeee1aefdc3d69432debbafd2547de41681ecc0fbc155a41f8->enter($__internal_240b65c1949f1cfeee1aefdc3d69432debbafd2547de41681ecc0fbc155a41f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_240b65c1949f1cfeee1aefdc3d69432debbafd2547de41681ecc0fbc155a41f8->leave($__internal_240b65c1949f1cfeee1aefdc3d69432debbafd2547de41681ecc0fbc155a41f8_prof);

        
        $__internal_9eae09e171c8bf8feef1c05e103a7e4d5a64b6be96cd3655cc627cb6bff59eae->leave($__internal_9eae09e171c8bf8feef1c05e103a7e4d5a64b6be96cd3655cc627cb6bff59eae_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_708fcfe99fec6fc2607ba55aee0cbc8410bb46c7bdc76e465f5b35bd0974b1f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_708fcfe99fec6fc2607ba55aee0cbc8410bb46c7bdc76e465f5b35bd0974b1f6->enter($__internal_708fcfe99fec6fc2607ba55aee0cbc8410bb46c7bdc76e465f5b35bd0974b1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b042a4e07f2473a0d98f793d878f1655a9e9242bfb7982719a6abf4959bcf4a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b042a4e07f2473a0d98f793d878f1655a9e9242bfb7982719a6abf4959bcf4a4->enter($__internal_b042a4e07f2473a0d98f793d878f1655a9e9242bfb7982719a6abf4959bcf4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b042a4e07f2473a0d98f793d878f1655a9e9242bfb7982719a6abf4959bcf4a4->leave($__internal_b042a4e07f2473a0d98f793d878f1655a9e9242bfb7982719a6abf4959bcf4a4_prof);

        
        $__internal_708fcfe99fec6fc2607ba55aee0cbc8410bb46c7bdc76e465f5b35bd0974b1f6->leave($__internal_708fcfe99fec6fc2607ba55aee0cbc8410bb46c7bdc76e465f5b35bd0974b1f6_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/vagrant/Development/burningworldnews/app/Resources/views/base.html.twig");
    }
}
