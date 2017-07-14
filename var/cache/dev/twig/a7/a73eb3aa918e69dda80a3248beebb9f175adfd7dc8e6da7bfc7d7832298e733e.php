<?php

/* AppBundle:Home:index.html.twig */
class __TwigTemplate_7bdf7fcae468e1ab745a45d308584cb0f5afe590d1ad94a31bddf74b572d300f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Home:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0a36d6d6f24768b9046bb4550e3ef020fa0c6ad914fef7ba047e9b6f4384ba0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0a36d6d6f24768b9046bb4550e3ef020fa0c6ad914fef7ba047e9b6f4384ba0->enter($__internal_c0a36d6d6f24768b9046bb4550e3ef020fa0c6ad914fef7ba047e9b6f4384ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:index.html.twig"));

        $__internal_4c1229d0b5be8776cdbede94631ccacbde9bc6be9a83bb663570cd7f68159fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c1229d0b5be8776cdbede94631ccacbde9bc6be9a83bb663570cd7f68159fc6->enter($__internal_4c1229d0b5be8776cdbede94631ccacbde9bc6be9a83bb663570cd7f68159fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0a36d6d6f24768b9046bb4550e3ef020fa0c6ad914fef7ba047e9b6f4384ba0->leave($__internal_c0a36d6d6f24768b9046bb4550e3ef020fa0c6ad914fef7ba047e9b6f4384ba0_prof);

        
        $__internal_4c1229d0b5be8776cdbede94631ccacbde9bc6be9a83bb663570cd7f68159fc6->leave($__internal_4c1229d0b5be8776cdbede94631ccacbde9bc6be9a83bb663570cd7f68159fc6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_60a473b33672ea7dbce937b744cb253317145006d9ebe27f8850104cea237f8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60a473b33672ea7dbce937b744cb253317145006d9ebe27f8850104cea237f8f->enter($__internal_60a473b33672ea7dbce937b744cb253317145006d9ebe27f8850104cea237f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3f94bf89736185e0e01dbf74f9192a1c4a9aec18d37b2a0b1281748e9402d90b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f94bf89736185e0e01dbf74f9192a1c4a9aec18d37b2a0b1281748e9402d90b->enter($__internal_3f94bf89736185e0e01dbf74f9192a1c4a9aec18d37b2a0b1281748e9402d90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Home:index";
        
        $__internal_3f94bf89736185e0e01dbf74f9192a1c4a9aec18d37b2a0b1281748e9402d90b->leave($__internal_3f94bf89736185e0e01dbf74f9192a1c4a9aec18d37b2a0b1281748e9402d90b_prof);

        
        $__internal_60a473b33672ea7dbce937b744cb253317145006d9ebe27f8850104cea237f8f->leave($__internal_60a473b33672ea7dbce937b744cb253317145006d9ebe27f8850104cea237f8f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_867e5f4ab79d6014e2ea0573e146bfdb36d29b295ae25186fea563248ac57783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_867e5f4ab79d6014e2ea0573e146bfdb36d29b295ae25186fea563248ac57783->enter($__internal_867e5f4ab79d6014e2ea0573e146bfdb36d29b295ae25186fea563248ac57783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_236233aa004aca67ebef76823e63bc6da6046cbe1767c3de0504bcc08db1ae80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236233aa004aca67ebef76823e63bc6da6046cbe1767c3de0504bcc08db1ae80->enter($__internal_236233aa004aca67ebef76823e63bc6da6046cbe1767c3de0504bcc08db1ae80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Home:index page</h1>
";
        
        $__internal_236233aa004aca67ebef76823e63bc6da6046cbe1767c3de0504bcc08db1ae80->leave($__internal_236233aa004aca67ebef76823e63bc6da6046cbe1767c3de0504bcc08db1ae80_prof);

        
        $__internal_867e5f4ab79d6014e2ea0573e146bfdb36d29b295ae25186fea563248ac57783->leave($__internal_867e5f4ab79d6014e2ea0573e146bfdb36d29b295ae25186fea563248ac57783_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AppBundle:Home:index{% endblock %}

{% block body %}
<h1>Welcome to the Home:index page</h1>
{% endblock %}
", "AppBundle:Home:index.html.twig", "/home/vagrant/Development/burningworldnews/src/AppBundle/Resources/views/Home/index.html.twig");
    }
}
