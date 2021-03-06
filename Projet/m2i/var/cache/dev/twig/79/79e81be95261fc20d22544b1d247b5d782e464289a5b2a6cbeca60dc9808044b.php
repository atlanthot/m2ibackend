<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_be4d1cec9070807712a715a9780d24ad57ccc6b94a94437daf23cc99cf8bb023 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f97d688672498ba9ed1c358410aae8daa9d5a8a249201ec1c70e9fb1e68ebfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f97d688672498ba9ed1c358410aae8daa9d5a8a249201ec1c70e9fb1e68ebfd->enter($__internal_9f97d688672498ba9ed1c358410aae8daa9d5a8a249201ec1c70e9fb1e68ebfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_40d44a5ed527d75376dd044b28db9cf944d33e6871105d552782f3bebe932011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40d44a5ed527d75376dd044b28db9cf944d33e6871105d552782f3bebe932011->enter($__internal_40d44a5ed527d75376dd044b28db9cf944d33e6871105d552782f3bebe932011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f97d688672498ba9ed1c358410aae8daa9d5a8a249201ec1c70e9fb1e68ebfd->leave($__internal_9f97d688672498ba9ed1c358410aae8daa9d5a8a249201ec1c70e9fb1e68ebfd_prof);

        
        $__internal_40d44a5ed527d75376dd044b28db9cf944d33e6871105d552782f3bebe932011->leave($__internal_40d44a5ed527d75376dd044b28db9cf944d33e6871105d552782f3bebe932011_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3632c2fade61ebd8d17dded0fde88bed96d3fc966af2abdebeffdab506b88736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3632c2fade61ebd8d17dded0fde88bed96d3fc966af2abdebeffdab506b88736->enter($__internal_3632c2fade61ebd8d17dded0fde88bed96d3fc966af2abdebeffdab506b88736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_495c9ea4344a657cb830a620cc3e27640ab97ba8bf756b9e1a1c70abb6380ed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_495c9ea4344a657cb830a620cc3e27640ab97ba8bf756b9e1a1c70abb6380ed8->enter($__internal_495c9ea4344a657cb830a620cc3e27640ab97ba8bf756b9e1a1c70abb6380ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_495c9ea4344a657cb830a620cc3e27640ab97ba8bf756b9e1a1c70abb6380ed8->leave($__internal_495c9ea4344a657cb830a620cc3e27640ab97ba8bf756b9e1a1c70abb6380ed8_prof);

        
        $__internal_3632c2fade61ebd8d17dded0fde88bed96d3fc966af2abdebeffdab506b88736->leave($__internal_3632c2fade61ebd8d17dded0fde88bed96d3fc966af2abdebeffdab506b88736_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c960afc62171ab1983a028e1fbaa65079a0c71c47d771af55222e84ccbab83e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c960afc62171ab1983a028e1fbaa65079a0c71c47d771af55222e84ccbab83e->enter($__internal_6c960afc62171ab1983a028e1fbaa65079a0c71c47d771af55222e84ccbab83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4b769173223d9d967edca09d1e86ff860a02ba5762a491fc097ad218bc2e935d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b769173223d9d967edca09d1e86ff860a02ba5762a491fc097ad218bc2e935d->enter($__internal_4b769173223d9d967edca09d1e86ff860a02ba5762a491fc097ad218bc2e935d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4b769173223d9d967edca09d1e86ff860a02ba5762a491fc097ad218bc2e935d->leave($__internal_4b769173223d9d967edca09d1e86ff860a02ba5762a491fc097ad218bc2e935d_prof);

        
        $__internal_6c960afc62171ab1983a028e1fbaa65079a0c71c47d771af55222e84ccbab83e->leave($__internal_6c960afc62171ab1983a028e1fbaa65079a0c71c47d771af55222e84ccbab83e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0ea19d4b108222b2206dc081e19b13b9b86f3f1f968589bfdce613ad2cb0a33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0ea19d4b108222b2206dc081e19b13b9b86f3f1f968589bfdce613ad2cb0a33->enter($__internal_d0ea19d4b108222b2206dc081e19b13b9b86f3f1f968589bfdce613ad2cb0a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_44f04583f2438a302028d2b842880d16359bd440a34dc6987659c40ce590027b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f04583f2438a302028d2b842880d16359bd440a34dc6987659c40ce590027b->enter($__internal_44f04583f2438a302028d2b842880d16359bd440a34dc6987659c40ce590027b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_44f04583f2438a302028d2b842880d16359bd440a34dc6987659c40ce590027b->leave($__internal_44f04583f2438a302028d2b842880d16359bd440a34dc6987659c40ce590027b_prof);

        
        $__internal_d0ea19d4b108222b2206dc081e19b13b9b86f3f1f968589bfdce613ad2cb0a33->leave($__internal_d0ea19d4b108222b2206dc081e19b13b9b86f3f1f968589bfdce613ad2cb0a33_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\M2i\\Projet\\m2i\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
