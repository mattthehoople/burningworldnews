<?php

/* base.html.twig */
class __TwigTemplate_47fd51b039e5f4fb7e336b9f260737cefed48cbce97d781ee1d74e5c39c4c062 extends Twig_Template
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
        $__internal_e2d23e39b7c8f7d6f67cc424d380cb7a968eb7398e56522d5fcdfe1d3f3663ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2d23e39b7c8f7d6f67cc424d380cb7a968eb7398e56522d5fcdfe1d3f3663ed->enter($__internal_e2d23e39b7c8f7d6f67cc424d380cb7a968eb7398e56522d5fcdfe1d3f3663ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_aff9c4bb72286ca2b3ed0c2f0e8e7d1f69cb192b5a0b5f1d8cea6b4255b1edad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff9c4bb72286ca2b3ed0c2f0e8e7d1f69cb192b5a0b5f1d8cea6b4255b1edad->enter($__internal_aff9c4bb72286ca2b3ed0c2f0e8e7d1f69cb192b5a0b5f1d8cea6b4255b1edad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e2d23e39b7c8f7d6f67cc424d380cb7a968eb7398e56522d5fcdfe1d3f3663ed->leave($__internal_e2d23e39b7c8f7d6f67cc424d380cb7a968eb7398e56522d5fcdfe1d3f3663ed_prof);

        
        $__internal_aff9c4bb72286ca2b3ed0c2f0e8e7d1f69cb192b5a0b5f1d8cea6b4255b1edad->leave($__internal_aff9c4bb72286ca2b3ed0c2f0e8e7d1f69cb192b5a0b5f1d8cea6b4255b1edad_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6075525edb387a77c1d672227c7a207823b05b7deee0349186e2920e987b111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6075525edb387a77c1d672227c7a207823b05b7deee0349186e2920e987b111->enter($__internal_e6075525edb387a77c1d672227c7a207823b05b7deee0349186e2920e987b111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0b7a15d89842dac639472d93313247f67a53e604d7a9e739208c6aa168cae7fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b7a15d89842dac639472d93313247f67a53e604d7a9e739208c6aa168cae7fb->enter($__internal_0b7a15d89842dac639472d93313247f67a53e604d7a9e739208c6aa168cae7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0b7a15d89842dac639472d93313247f67a53e604d7a9e739208c6aa168cae7fb->leave($__internal_0b7a15d89842dac639472d93313247f67a53e604d7a9e739208c6aa168cae7fb_prof);

        
        $__internal_e6075525edb387a77c1d672227c7a207823b05b7deee0349186e2920e987b111->leave($__internal_e6075525edb387a77c1d672227c7a207823b05b7deee0349186e2920e987b111_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9f6ec577288e661cce323bbdb1d3ea4d574e27ea4c118cf3a41a874a3e66a21c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f6ec577288e661cce323bbdb1d3ea4d574e27ea4c118cf3a41a874a3e66a21c->enter($__internal_9f6ec577288e661cce323bbdb1d3ea4d574e27ea4c118cf3a41a874a3e66a21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c085fce8ffbe712d141f4df7ab55b06164fc2a0144ecf63aba8092b5e832c360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c085fce8ffbe712d141f4df7ab55b06164fc2a0144ecf63aba8092b5e832c360->enter($__internal_c085fce8ffbe712d141f4df7ab55b06164fc2a0144ecf63aba8092b5e832c360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c085fce8ffbe712d141f4df7ab55b06164fc2a0144ecf63aba8092b5e832c360->leave($__internal_c085fce8ffbe712d141f4df7ab55b06164fc2a0144ecf63aba8092b5e832c360_prof);

        
        $__internal_9f6ec577288e661cce323bbdb1d3ea4d574e27ea4c118cf3a41a874a3e66a21c->leave($__internal_9f6ec577288e661cce323bbdb1d3ea4d574e27ea4c118cf3a41a874a3e66a21c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b76a9941e18d82b8631c5f6fcb7ecbe431b54858650137ce318ea609081b6cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b76a9941e18d82b8631c5f6fcb7ecbe431b54858650137ce318ea609081b6cc->enter($__internal_2b76a9941e18d82b8631c5f6fcb7ecbe431b54858650137ce318ea609081b6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f78fd92c49108bb0fb3d8ef5b9702ad95437d0e84a77c025fd2e7675492d7011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f78fd92c49108bb0fb3d8ef5b9702ad95437d0e84a77c025fd2e7675492d7011->enter($__internal_f78fd92c49108bb0fb3d8ef5b9702ad95437d0e84a77c025fd2e7675492d7011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f78fd92c49108bb0fb3d8ef5b9702ad95437d0e84a77c025fd2e7675492d7011->leave($__internal_f78fd92c49108bb0fb3d8ef5b9702ad95437d0e84a77c025fd2e7675492d7011_prof);

        
        $__internal_2b76a9941e18d82b8631c5f6fcb7ecbe431b54858650137ce318ea609081b6cc->leave($__internal_2b76a9941e18d82b8631c5f6fcb7ecbe431b54858650137ce318ea609081b6cc_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_57f4a723a1be645f3023a69030651decd692dfc0383ecdd978d8a801ad0b2436 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57f4a723a1be645f3023a69030651decd692dfc0383ecdd978d8a801ad0b2436->enter($__internal_57f4a723a1be645f3023a69030651decd692dfc0383ecdd978d8a801ad0b2436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1aeafca0dc747916bdb9550ca57d95a8c1a7ba55b11734bcffe0758f0fa43cea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aeafca0dc747916bdb9550ca57d95a8c1a7ba55b11734bcffe0758f0fa43cea->enter($__internal_1aeafca0dc747916bdb9550ca57d95a8c1a7ba55b11734bcffe0758f0fa43cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1aeafca0dc747916bdb9550ca57d95a8c1a7ba55b11734bcffe0758f0fa43cea->leave($__internal_1aeafca0dc747916bdb9550ca57d95a8c1a7ba55b11734bcffe0758f0fa43cea_prof);

        
        $__internal_57f4a723a1be645f3023a69030651decd692dfc0383ecdd978d8a801ad0b2436->leave($__internal_57f4a723a1be645f3023a69030651decd692dfc0383ecdd978d8a801ad0b2436_prof);

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
