<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a22fd570d68a7692635ec86c77ccc896cafa57439dc66c1418ef1eddfd5a6161 extends Twig_Template
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
        $__internal_2bc67906bcde21ef4a1d29130706f0b7d5b3d937e860e4c6e785c797c30b6833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bc67906bcde21ef4a1d29130706f0b7d5b3d937e860e4c6e785c797c30b6833->enter($__internal_2bc67906bcde21ef4a1d29130706f0b7d5b3d937e860e4c6e785c797c30b6833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bc67906bcde21ef4a1d29130706f0b7d5b3d937e860e4c6e785c797c30b6833->leave($__internal_2bc67906bcde21ef4a1d29130706f0b7d5b3d937e860e4c6e785c797c30b6833_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c394611114b2fdbd8f06f23426c92fb5a1aa1999c09983918518e8a5cdf14130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c394611114b2fdbd8f06f23426c92fb5a1aa1999c09983918518e8a5cdf14130->enter($__internal_c394611114b2fdbd8f06f23426c92fb5a1aa1999c09983918518e8a5cdf14130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c394611114b2fdbd8f06f23426c92fb5a1aa1999c09983918518e8a5cdf14130->leave($__internal_c394611114b2fdbd8f06f23426c92fb5a1aa1999c09983918518e8a5cdf14130_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc633a402bf9b5ac10575455c7b295b266e16edbb03a2947397dad5801698cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc633a402bf9b5ac10575455c7b295b266e16edbb03a2947397dad5801698cbe->enter($__internal_cc633a402bf9b5ac10575455c7b295b266e16edbb03a2947397dad5801698cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cc633a402bf9b5ac10575455c7b295b266e16edbb03a2947397dad5801698cbe->leave($__internal_cc633a402bf9b5ac10575455c7b295b266e16edbb03a2947397dad5801698cbe_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_66a11913895c4f5dd9c80652ac622f0272ba3bf33f04344dc1ba872a2c439c09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a11913895c4f5dd9c80652ac622f0272ba3bf33f04344dc1ba872a2c439c09->enter($__internal_66a11913895c4f5dd9c80652ac622f0272ba3bf33f04344dc1ba872a2c439c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_66a11913895c4f5dd9c80652ac622f0272ba3bf33f04344dc1ba872a2c439c09->leave($__internal_66a11913895c4f5dd9c80652ac622f0272ba3bf33f04344dc1ba872a2c439c09_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/abdoulaye/Projets/Symfony/api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
