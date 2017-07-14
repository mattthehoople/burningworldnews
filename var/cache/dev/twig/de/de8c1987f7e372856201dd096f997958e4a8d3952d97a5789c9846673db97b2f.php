<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_010742bacd7922f8c0ef3868b50c1fd85132c12a1b910d45f0522f422e756bf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8721218b14dc6ebcf1bdff9c142a6dcc90bd457987816893e07cc16dd850a1e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8721218b14dc6ebcf1bdff9c142a6dcc90bd457987816893e07cc16dd850a1e8->enter($__internal_8721218b14dc6ebcf1bdff9c142a6dcc90bd457987816893e07cc16dd850a1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6907c1d2c42a95b5e678f40c6b48e896b376cb0a3936a9097329d169beae749e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6907c1d2c42a95b5e678f40c6b48e896b376cb0a3936a9097329d169beae749e->enter($__internal_6907c1d2c42a95b5e678f40c6b48e896b376cb0a3936a9097329d169beae749e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8721218b14dc6ebcf1bdff9c142a6dcc90bd457987816893e07cc16dd850a1e8->leave($__internal_8721218b14dc6ebcf1bdff9c142a6dcc90bd457987816893e07cc16dd850a1e8_prof);

        
        $__internal_6907c1d2c42a95b5e678f40c6b48e896b376cb0a3936a9097329d169beae749e->leave($__internal_6907c1d2c42a95b5e678f40c6b48e896b376cb0a3936a9097329d169beae749e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0811e4f071457226f7f8ad9a4c89953baaa9b91b4c14ff12a9d336cde6dd3303 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0811e4f071457226f7f8ad9a4c89953baaa9b91b4c14ff12a9d336cde6dd3303->enter($__internal_0811e4f071457226f7f8ad9a4c89953baaa9b91b4c14ff12a9d336cde6dd3303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fdf6327b02ca887cb52c604ff43b182e27e112cc22ba41537bd34f76634c4cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdf6327b02ca887cb52c604ff43b182e27e112cc22ba41537bd34f76634c4cc9->enter($__internal_fdf6327b02ca887cb52c604ff43b182e27e112cc22ba41537bd34f76634c4cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fdf6327b02ca887cb52c604ff43b182e27e112cc22ba41537bd34f76634c4cc9->leave($__internal_fdf6327b02ca887cb52c604ff43b182e27e112cc22ba41537bd34f76634c4cc9_prof);

        
        $__internal_0811e4f071457226f7f8ad9a4c89953baaa9b91b4c14ff12a9d336cde6dd3303->leave($__internal_0811e4f071457226f7f8ad9a4c89953baaa9b91b4c14ff12a9d336cde6dd3303_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b1eab086211f5f95fc1eaf2c17d966a5e63f1b38718b67a69307c37af3b1544d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1eab086211f5f95fc1eaf2c17d966a5e63f1b38718b67a69307c37af3b1544d->enter($__internal_b1eab086211f5f95fc1eaf2c17d966a5e63f1b38718b67a69307c37af3b1544d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_643dfc0f868fe7dd39799c939e99dd0ad23a567a4bcb6ce45f0108442bcf57b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_643dfc0f868fe7dd39799c939e99dd0ad23a567a4bcb6ce45f0108442bcf57b6->enter($__internal_643dfc0f868fe7dd39799c939e99dd0ad23a567a4bcb6ce45f0108442bcf57b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_643dfc0f868fe7dd39799c939e99dd0ad23a567a4bcb6ce45f0108442bcf57b6->leave($__internal_643dfc0f868fe7dd39799c939e99dd0ad23a567a4bcb6ce45f0108442bcf57b6_prof);

        
        $__internal_b1eab086211f5f95fc1eaf2c17d966a5e63f1b38718b67a69307c37af3b1544d->leave($__internal_b1eab086211f5f95fc1eaf2c17d966a5e63f1b38718b67a69307c37af3b1544d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_29f17735547d0b183ed321af62d65252b16a449c3a184584fbb6cefaae038477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29f17735547d0b183ed321af62d65252b16a449c3a184584fbb6cefaae038477->enter($__internal_29f17735547d0b183ed321af62d65252b16a449c3a184584fbb6cefaae038477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_36f8282f72b32554c6a11b036d7cb11b4224efa57f7bc0543f682ea1d447dfff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36f8282f72b32554c6a11b036d7cb11b4224efa57f7bc0543f682ea1d447dfff->enter($__internal_36f8282f72b32554c6a11b036d7cb11b4224efa57f7bc0543f682ea1d447dfff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_36f8282f72b32554c6a11b036d7cb11b4224efa57f7bc0543f682ea1d447dfff->leave($__internal_36f8282f72b32554c6a11b036d7cb11b4224efa57f7bc0543f682ea1d447dfff_prof);

        
        $__internal_29f17735547d0b183ed321af62d65252b16a449c3a184584fbb6cefaae038477->leave($__internal_29f17735547d0b183ed321af62d65252b16a449c3a184584fbb6cefaae038477_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/vagrant/Development/burningworldnews/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
