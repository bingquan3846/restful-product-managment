<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_53a0eb3ddc443ea22ed8f9aadc04963f812922def816325db42a1b611c416257 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_391bfef30ac3ffe19e23185a41a6e74514c139d29d439732a959d1d01d6695e5 = $this->env->getExtension("native_profiler");
        $__internal_391bfef30ac3ffe19e23185a41a6e74514c139d29d439732a959d1d01d6695e5->enter($__internal_391bfef30ac3ffe19e23185a41a6e74514c139d29d439732a959d1d01d6695e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_391bfef30ac3ffe19e23185a41a6e74514c139d29d439732a959d1d01d6695e5->leave($__internal_391bfef30ac3ffe19e23185a41a6e74514c139d29d439732a959d1d01d6695e5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
