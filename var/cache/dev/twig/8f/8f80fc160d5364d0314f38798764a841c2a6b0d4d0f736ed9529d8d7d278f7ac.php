<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ff745af4c9785908df5f50f3220a611a7a8150c8acb4b2d4fa58002236a15742 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_009adc365ede70eb45dbfcd65b1f90179651f76784c18060954ed96899bfaa1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_009adc365ede70eb45dbfcd65b1f90179651f76784c18060954ed96899bfaa1e->enter($__internal_009adc365ede70eb45dbfcd65b1f90179651f76784c18060954ed96899bfaa1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e064dfb0ebfb4d1e7437ea21fb87c8ab7001f664a089327307e971d8be86b21c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e064dfb0ebfb4d1e7437ea21fb87c8ab7001f664a089327307e971d8be86b21c->enter($__internal_e064dfb0ebfb4d1e7437ea21fb87c8ab7001f664a089327307e971d8be86b21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_009adc365ede70eb45dbfcd65b1f90179651f76784c18060954ed96899bfaa1e->leave($__internal_009adc365ede70eb45dbfcd65b1f90179651f76784c18060954ed96899bfaa1e_prof);

        
        $__internal_e064dfb0ebfb4d1e7437ea21fb87c8ab7001f664a089327307e971d8be86b21c->leave($__internal_e064dfb0ebfb4d1e7437ea21fb87c8ab7001f664a089327307e971d8be86b21c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_857c0bb91e25b7963a33b94be415f0b595a6c5085bf4c52ee51bd269fcf73ba6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_857c0bb91e25b7963a33b94be415f0b595a6c5085bf4c52ee51bd269fcf73ba6->enter($__internal_857c0bb91e25b7963a33b94be415f0b595a6c5085bf4c52ee51bd269fcf73ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9c5f50ccf3382b4bb52389dc6cca030ef34cde443b7cc119bbd35c42aca71ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c5f50ccf3382b4bb52389dc6cca030ef34cde443b7cc119bbd35c42aca71ae1->enter($__internal_9c5f50ccf3382b4bb52389dc6cca030ef34cde443b7cc119bbd35c42aca71ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9c5f50ccf3382b4bb52389dc6cca030ef34cde443b7cc119bbd35c42aca71ae1->leave($__internal_9c5f50ccf3382b4bb52389dc6cca030ef34cde443b7cc119bbd35c42aca71ae1_prof);

        
        $__internal_857c0bb91e25b7963a33b94be415f0b595a6c5085bf4c52ee51bd269fcf73ba6->leave($__internal_857c0bb91e25b7963a33b94be415f0b595a6c5085bf4c52ee51bd269fcf73ba6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1c9f1499bf6768f13a03f4ac5499a69955230235e2b2d191a6d0f10d09f42de4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c9f1499bf6768f13a03f4ac5499a69955230235e2b2d191a6d0f10d09f42de4->enter($__internal_1c9f1499bf6768f13a03f4ac5499a69955230235e2b2d191a6d0f10d09f42de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b09c326d7adb4c4272324124552aac627865c32e0f65b1d06cfd280b99536187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b09c326d7adb4c4272324124552aac627865c32e0f65b1d06cfd280b99536187->enter($__internal_b09c326d7adb4c4272324124552aac627865c32e0f65b1d06cfd280b99536187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b09c326d7adb4c4272324124552aac627865c32e0f65b1d06cfd280b99536187->leave($__internal_b09c326d7adb4c4272324124552aac627865c32e0f65b1d06cfd280b99536187_prof);

        
        $__internal_1c9f1499bf6768f13a03f4ac5499a69955230235e2b2d191a6d0f10d09f42de4->leave($__internal_1c9f1499bf6768f13a03f4ac5499a69955230235e2b2d191a6d0f10d09f42de4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aabb34a7ce64b5e1b5edfaf5684023e1a52244e7e65b79708c50c5cb63332636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aabb34a7ce64b5e1b5edfaf5684023e1a52244e7e65b79708c50c5cb63332636->enter($__internal_aabb34a7ce64b5e1b5edfaf5684023e1a52244e7e65b79708c50c5cb63332636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_08daf5b674682155b11913fe1a723437e97052e2384d3c49f5dbf07b98bcdfc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08daf5b674682155b11913fe1a723437e97052e2384d3c49f5dbf07b98bcdfc2->enter($__internal_08daf5b674682155b11913fe1a723437e97052e2384d3c49f5dbf07b98bcdfc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_08daf5b674682155b11913fe1a723437e97052e2384d3c49f5dbf07b98bcdfc2->leave($__internal_08daf5b674682155b11913fe1a723437e97052e2384d3c49f5dbf07b98bcdfc2_prof);

        
        $__internal_aabb34a7ce64b5e1b5edfaf5684023e1a52244e7e65b79708c50c5cb63332636->leave($__internal_aabb34a7ce64b5e1b5edfaf5684023e1a52244e7e65b79708c50c5cb63332636_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/vagrant/Development/burningworldnews/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
