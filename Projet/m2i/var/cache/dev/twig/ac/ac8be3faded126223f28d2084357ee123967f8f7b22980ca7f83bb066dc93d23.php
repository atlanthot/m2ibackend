<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60b558f13f212622b71429dd386fc723affe025f7fe41bce03aef6d62d5c4bda extends Twig_Template
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
        $__internal_f6c81ba37c36792a7f0ae4c263b9832142774fe639b4c524c06a93195cd1e953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6c81ba37c36792a7f0ae4c263b9832142774fe639b4c524c06a93195cd1e953->enter($__internal_f6c81ba37c36792a7f0ae4c263b9832142774fe639b4c524c06a93195cd1e953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d3a8e0e1a19c328c3e512bd6bf31e2f13ec7090c3e63bdcfa2f2a2801ed13c88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3a8e0e1a19c328c3e512bd6bf31e2f13ec7090c3e63bdcfa2f2a2801ed13c88->enter($__internal_d3a8e0e1a19c328c3e512bd6bf31e2f13ec7090c3e63bdcfa2f2a2801ed13c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6c81ba37c36792a7f0ae4c263b9832142774fe639b4c524c06a93195cd1e953->leave($__internal_f6c81ba37c36792a7f0ae4c263b9832142774fe639b4c524c06a93195cd1e953_prof);

        
        $__internal_d3a8e0e1a19c328c3e512bd6bf31e2f13ec7090c3e63bdcfa2f2a2801ed13c88->leave($__internal_d3a8e0e1a19c328c3e512bd6bf31e2f13ec7090c3e63bdcfa2f2a2801ed13c88_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cec37a507912fa132a199f9c67d7fa6deb9c74a158708a85f759b5215f3a3db1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cec37a507912fa132a199f9c67d7fa6deb9c74a158708a85f759b5215f3a3db1->enter($__internal_cec37a507912fa132a199f9c67d7fa6deb9c74a158708a85f759b5215f3a3db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_78b413cc4dbba42e00c23101342417d74bc530c0c9c334df78f4142679132429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78b413cc4dbba42e00c23101342417d74bc530c0c9c334df78f4142679132429->enter($__internal_78b413cc4dbba42e00c23101342417d74bc530c0c9c334df78f4142679132429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_78b413cc4dbba42e00c23101342417d74bc530c0c9c334df78f4142679132429->leave($__internal_78b413cc4dbba42e00c23101342417d74bc530c0c9c334df78f4142679132429_prof);

        
        $__internal_cec37a507912fa132a199f9c67d7fa6deb9c74a158708a85f759b5215f3a3db1->leave($__internal_cec37a507912fa132a199f9c67d7fa6deb9c74a158708a85f759b5215f3a3db1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a99215fc94d20b5d4d24bb3e7b16dfa409154e3a5ff74d0c58bc56aae4d3e3a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a99215fc94d20b5d4d24bb3e7b16dfa409154e3a5ff74d0c58bc56aae4d3e3a5->enter($__internal_a99215fc94d20b5d4d24bb3e7b16dfa409154e3a5ff74d0c58bc56aae4d3e3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_87591f7a30a14badd015f09341a18630d9ecf5961095d2dd3930b594351ab63c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87591f7a30a14badd015f09341a18630d9ecf5961095d2dd3930b594351ab63c->enter($__internal_87591f7a30a14badd015f09341a18630d9ecf5961095d2dd3930b594351ab63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_87591f7a30a14badd015f09341a18630d9ecf5961095d2dd3930b594351ab63c->leave($__internal_87591f7a30a14badd015f09341a18630d9ecf5961095d2dd3930b594351ab63c_prof);

        
        $__internal_a99215fc94d20b5d4d24bb3e7b16dfa409154e3a5ff74d0c58bc56aae4d3e3a5->leave($__internal_a99215fc94d20b5d4d24bb3e7b16dfa409154e3a5ff74d0c58bc56aae4d3e3a5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc0a8076721cb34bece773b0d2fab007c05d0a572b70ea23bc4e9e3f95fcd30c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc0a8076721cb34bece773b0d2fab007c05d0a572b70ea23bc4e9e3f95fcd30c->enter($__internal_bc0a8076721cb34bece773b0d2fab007c05d0a572b70ea23bc4e9e3f95fcd30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3de320fb16dbc9de91d5673d116e4eb73b7502cd4a059970dcd309bb0e3a43cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3de320fb16dbc9de91d5673d116e4eb73b7502cd4a059970dcd309bb0e3a43cf->enter($__internal_3de320fb16dbc9de91d5673d116e4eb73b7502cd4a059970dcd309bb0e3a43cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3de320fb16dbc9de91d5673d116e4eb73b7502cd4a059970dcd309bb0e3a43cf->leave($__internal_3de320fb16dbc9de91d5673d116e4eb73b7502cd4a059970dcd309bb0e3a43cf_prof);

        
        $__internal_bc0a8076721cb34bece773b0d2fab007c05d0a572b70ea23bc4e9e3f95fcd30c->leave($__internal_bc0a8076721cb34bece773b0d2fab007c05d0a572b70ea23bc4e9e3f95fcd30c_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\M2i\\Projet\\m2i\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
