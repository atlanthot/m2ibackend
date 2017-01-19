<?php

/* base.html.twig */
class __TwigTemplate_4121a87bcfe731533423ab6c3c7ef40f0f275283f6f10104a91411921f8965f1 extends Twig_Template
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
        $__internal_defa7d5c7e1b7a95a8c487a806e70cac994ec311ea8afeed41ef64a9ccb614ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_defa7d5c7e1b7a95a8c487a806e70cac994ec311ea8afeed41ef64a9ccb614ca->enter($__internal_defa7d5c7e1b7a95a8c487a806e70cac994ec311ea8afeed41ef64a9ccb614ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1a24849b8075ec4c42b895c8f04130fc5e7fe6ae04d482c89522d8f0a94caee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a24849b8075ec4c42b895c8f04130fc5e7fe6ae04d482c89522d8f0a94caee1->enter($__internal_1a24849b8075ec4c42b895c8f04130fc5e7fe6ae04d482c89522d8f0a94caee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_defa7d5c7e1b7a95a8c487a806e70cac994ec311ea8afeed41ef64a9ccb614ca->leave($__internal_defa7d5c7e1b7a95a8c487a806e70cac994ec311ea8afeed41ef64a9ccb614ca_prof);

        
        $__internal_1a24849b8075ec4c42b895c8f04130fc5e7fe6ae04d482c89522d8f0a94caee1->leave($__internal_1a24849b8075ec4c42b895c8f04130fc5e7fe6ae04d482c89522d8f0a94caee1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3b8bdb3e0f4e2461eb3aef4a2cc119ece6634b1a84b73c3b8374ca0f40306f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3b8bdb3e0f4e2461eb3aef4a2cc119ece6634b1a84b73c3b8374ca0f40306f0->enter($__internal_b3b8bdb3e0f4e2461eb3aef4a2cc119ece6634b1a84b73c3b8374ca0f40306f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_97719def669d7955af33cbe867a05e296f3ddd70f58bd63dcdc42ca6bb3ec78f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97719def669d7955af33cbe867a05e296f3ddd70f58bd63dcdc42ca6bb3ec78f->enter($__internal_97719def669d7955af33cbe867a05e296f3ddd70f58bd63dcdc42ca6bb3ec78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_97719def669d7955af33cbe867a05e296f3ddd70f58bd63dcdc42ca6bb3ec78f->leave($__internal_97719def669d7955af33cbe867a05e296f3ddd70f58bd63dcdc42ca6bb3ec78f_prof);

        
        $__internal_b3b8bdb3e0f4e2461eb3aef4a2cc119ece6634b1a84b73c3b8374ca0f40306f0->leave($__internal_b3b8bdb3e0f4e2461eb3aef4a2cc119ece6634b1a84b73c3b8374ca0f40306f0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a56625362f78b54754dff0d3ecb5ba261309aec483f8fc71c9773009084f2594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a56625362f78b54754dff0d3ecb5ba261309aec483f8fc71c9773009084f2594->enter($__internal_a56625362f78b54754dff0d3ecb5ba261309aec483f8fc71c9773009084f2594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c29d0c035dfaaffae6cf5c40c263505536fe3bdcbfbe79cc9f3cc13b520b42ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c29d0c035dfaaffae6cf5c40c263505536fe3bdcbfbe79cc9f3cc13b520b42ec->enter($__internal_c29d0c035dfaaffae6cf5c40c263505536fe3bdcbfbe79cc9f3cc13b520b42ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c29d0c035dfaaffae6cf5c40c263505536fe3bdcbfbe79cc9f3cc13b520b42ec->leave($__internal_c29d0c035dfaaffae6cf5c40c263505536fe3bdcbfbe79cc9f3cc13b520b42ec_prof);

        
        $__internal_a56625362f78b54754dff0d3ecb5ba261309aec483f8fc71c9773009084f2594->leave($__internal_a56625362f78b54754dff0d3ecb5ba261309aec483f8fc71c9773009084f2594_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_df924a0dd89eced18d8d680b4a632f1c6b5e6f157cdcd5a38d69909cedb4fa2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df924a0dd89eced18d8d680b4a632f1c6b5e6f157cdcd5a38d69909cedb4fa2e->enter($__internal_df924a0dd89eced18d8d680b4a632f1c6b5e6f157cdcd5a38d69909cedb4fa2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_352844f744a9b29b8e3bc8f7d5d06d2dafd2dbdf36641d63eb04ac819e0e4c18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_352844f744a9b29b8e3bc8f7d5d06d2dafd2dbdf36641d63eb04ac819e0e4c18->enter($__internal_352844f744a9b29b8e3bc8f7d5d06d2dafd2dbdf36641d63eb04ac819e0e4c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_352844f744a9b29b8e3bc8f7d5d06d2dafd2dbdf36641d63eb04ac819e0e4c18->leave($__internal_352844f744a9b29b8e3bc8f7d5d06d2dafd2dbdf36641d63eb04ac819e0e4c18_prof);

        
        $__internal_df924a0dd89eced18d8d680b4a632f1c6b5e6f157cdcd5a38d69909cedb4fa2e->leave($__internal_df924a0dd89eced18d8d680b4a632f1c6b5e6f157cdcd5a38d69909cedb4fa2e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_121b98bbe7771727389d59eda05de780430deb2547a1634cbc0c3f65a6868c5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_121b98bbe7771727389d59eda05de780430deb2547a1634cbc0c3f65a6868c5f->enter($__internal_121b98bbe7771727389d59eda05de780430deb2547a1634cbc0c3f65a6868c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c2e1a66ddee41412606542ce713967f8654a44be46b755a722c3578c4ae5ab74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e1a66ddee41412606542ce713967f8654a44be46b755a722c3578c4ae5ab74->enter($__internal_c2e1a66ddee41412606542ce713967f8654a44be46b755a722c3578c4ae5ab74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c2e1a66ddee41412606542ce713967f8654a44be46b755a722c3578c4ae5ab74->leave($__internal_c2e1a66ddee41412606542ce713967f8654a44be46b755a722c3578c4ae5ab74_prof);

        
        $__internal_121b98bbe7771727389d59eda05de780430deb2547a1634cbc0c3f65a6868c5f->leave($__internal_121b98bbe7771727389d59eda05de780430deb2547a1634cbc0c3f65a6868c5f_prof);

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
", "base.html.twig", "C:\\wamp\\www\\M2i\\Projet\\m2i\\app\\Resources\\views\\base.html.twig");
    }
}
