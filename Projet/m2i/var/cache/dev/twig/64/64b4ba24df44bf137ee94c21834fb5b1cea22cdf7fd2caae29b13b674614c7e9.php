<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_45dce907d27a40e6934735514931f4cfa806c6c8455173bf727c6611838b4700 extends Twig_Template
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
        $__internal_637e017418196ab8cc485a35c1b41ee5b65851b52e966d9129a4796725b70ffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_637e017418196ab8cc485a35c1b41ee5b65851b52e966d9129a4796725b70ffb->enter($__internal_637e017418196ab8cc485a35c1b41ee5b65851b52e966d9129a4796725b70ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0c5beaa53e30fd919d28f856aa449467c9dd3968c1b2b91726746cffa72900af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c5beaa53e30fd919d28f856aa449467c9dd3968c1b2b91726746cffa72900af->enter($__internal_0c5beaa53e30fd919d28f856aa449467c9dd3968c1b2b91726746cffa72900af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_637e017418196ab8cc485a35c1b41ee5b65851b52e966d9129a4796725b70ffb->leave($__internal_637e017418196ab8cc485a35c1b41ee5b65851b52e966d9129a4796725b70ffb_prof);

        
        $__internal_0c5beaa53e30fd919d28f856aa449467c9dd3968c1b2b91726746cffa72900af->leave($__internal_0c5beaa53e30fd919d28f856aa449467c9dd3968c1b2b91726746cffa72900af_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a8e394d082b7435ab3bb09de56625258ddfd7f03464dd949686001b4bf018ab0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8e394d082b7435ab3bb09de56625258ddfd7f03464dd949686001b4bf018ab0->enter($__internal_a8e394d082b7435ab3bb09de56625258ddfd7f03464dd949686001b4bf018ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8e5838bfd4fd8387161eeb688d44726fe4d640dbda73e1b84c55805c994ca9e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e5838bfd4fd8387161eeb688d44726fe4d640dbda73e1b84c55805c994ca9e2->enter($__internal_8e5838bfd4fd8387161eeb688d44726fe4d640dbda73e1b84c55805c994ca9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8e5838bfd4fd8387161eeb688d44726fe4d640dbda73e1b84c55805c994ca9e2->leave($__internal_8e5838bfd4fd8387161eeb688d44726fe4d640dbda73e1b84c55805c994ca9e2_prof);

        
        $__internal_a8e394d082b7435ab3bb09de56625258ddfd7f03464dd949686001b4bf018ab0->leave($__internal_a8e394d082b7435ab3bb09de56625258ddfd7f03464dd949686001b4bf018ab0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8c92ac604ee43f253f6668626f99f10e5dcebea4134d23dc376ac2bfb60b8bda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c92ac604ee43f253f6668626f99f10e5dcebea4134d23dc376ac2bfb60b8bda->enter($__internal_8c92ac604ee43f253f6668626f99f10e5dcebea4134d23dc376ac2bfb60b8bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_42ecc3e5291035b6a769147a6994703646d5f393eff890aea10c8506a6834101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42ecc3e5291035b6a769147a6994703646d5f393eff890aea10c8506a6834101->enter($__internal_42ecc3e5291035b6a769147a6994703646d5f393eff890aea10c8506a6834101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_42ecc3e5291035b6a769147a6994703646d5f393eff890aea10c8506a6834101->leave($__internal_42ecc3e5291035b6a769147a6994703646d5f393eff890aea10c8506a6834101_prof);

        
        $__internal_8c92ac604ee43f253f6668626f99f10e5dcebea4134d23dc376ac2bfb60b8bda->leave($__internal_8c92ac604ee43f253f6668626f99f10e5dcebea4134d23dc376ac2bfb60b8bda_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3d6af644b4d02bb568fe410768d3c0dfd954ad1ac5af343da0762bed5e260e71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d6af644b4d02bb568fe410768d3c0dfd954ad1ac5af343da0762bed5e260e71->enter($__internal_3d6af644b4d02bb568fe410768d3c0dfd954ad1ac5af343da0762bed5e260e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_16466d6530d26d997829aca2a50467c53eed43ce8edc6e4c9236899b1259fc07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16466d6530d26d997829aca2a50467c53eed43ce8edc6e4c9236899b1259fc07->enter($__internal_16466d6530d26d997829aca2a50467c53eed43ce8edc6e4c9236899b1259fc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_16466d6530d26d997829aca2a50467c53eed43ce8edc6e4c9236899b1259fc07->leave($__internal_16466d6530d26d997829aca2a50467c53eed43ce8edc6e4c9236899b1259fc07_prof);

        
        $__internal_3d6af644b4d02bb568fe410768d3c0dfd954ad1ac5af343da0762bed5e260e71->leave($__internal_3d6af644b4d02bb568fe410768d3c0dfd954ad1ac5af343da0762bed5e260e71_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\M2i\\Projet\\m2i\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
