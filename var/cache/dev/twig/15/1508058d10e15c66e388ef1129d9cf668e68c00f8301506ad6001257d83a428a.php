<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3ee217b7a06262a23935e839eacb1d5944b4b5d8b2db84d14503849894ffebf7 extends Twig_Template
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
        $__internal_2653f342b7f55f90a47394e2bad314c8dfb86189df1a5b70067b650dd4c7ef7e = $this->env->getExtension("native_profiler");
        $__internal_2653f342b7f55f90a47394e2bad314c8dfb86189df1a5b70067b650dd4c7ef7e->enter($__internal_2653f342b7f55f90a47394e2bad314c8dfb86189df1a5b70067b650dd4c7ef7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2653f342b7f55f90a47394e2bad314c8dfb86189df1a5b70067b650dd4c7ef7e->leave($__internal_2653f342b7f55f90a47394e2bad314c8dfb86189df1a5b70067b650dd4c7ef7e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8f2385cae85ddd8bf6a1712e5aeddf44bcdbff0976ccca96bd1898be38a82e87 = $this->env->getExtension("native_profiler");
        $__internal_8f2385cae85ddd8bf6a1712e5aeddf44bcdbff0976ccca96bd1898be38a82e87->enter($__internal_8f2385cae85ddd8bf6a1712e5aeddf44bcdbff0976ccca96bd1898be38a82e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8f2385cae85ddd8bf6a1712e5aeddf44bcdbff0976ccca96bd1898be38a82e87->leave($__internal_8f2385cae85ddd8bf6a1712e5aeddf44bcdbff0976ccca96bd1898be38a82e87_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_114263980dbfa4ba6be3a6397adcec391ed2cff17025a3c59b58e909de2092de = $this->env->getExtension("native_profiler");
        $__internal_114263980dbfa4ba6be3a6397adcec391ed2cff17025a3c59b58e909de2092de->enter($__internal_114263980dbfa4ba6be3a6397adcec391ed2cff17025a3c59b58e909de2092de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_114263980dbfa4ba6be3a6397adcec391ed2cff17025a3c59b58e909de2092de->leave($__internal_114263980dbfa4ba6be3a6397adcec391ed2cff17025a3c59b58e909de2092de_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_553d02deb7b6282b81994f78311471dcfa334f126d06188f3eb596a46ea60cec = $this->env->getExtension("native_profiler");
        $__internal_553d02deb7b6282b81994f78311471dcfa334f126d06188f3eb596a46ea60cec->enter($__internal_553d02deb7b6282b81994f78311471dcfa334f126d06188f3eb596a46ea60cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_553d02deb7b6282b81994f78311471dcfa334f126d06188f3eb596a46ea60cec->leave($__internal_553d02deb7b6282b81994f78311471dcfa334f126d06188f3eb596a46ea60cec_prof);

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
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
