<?php

/* AppBundle:category:category.html.twig */
class __TwigTemplate_7cc73f9f460c467c872a36cc856bca2884981f7cf981ffd12b1bfcb8e88b0900 extends Twig_Template
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
        $__internal_318c5da39f2563fb3353841802b3f13b4d785d8673dab1afd61579a9f30e47d5 = $this->env->getExtension("native_profiler");
        $__internal_318c5da39f2563fb3353841802b3f13b4d785d8673dab1afd61579a9f30e47d5->enter($__internal_318c5da39f2563fb3353841802b3f13b4d785d8673dab1afd61579a9f30e47d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:category:category.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 2
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "<br/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_318c5da39f2563fb3353841802b3f13b4d785d8673dab1afd61579a9f30e47d5->leave($__internal_318c5da39f2563fb3353841802b3f13b4d785d8673dab1afd61579a9f30e47d5_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:category:category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  22 => 1,);
    }
}
/* {% for category in categories %}*/
/* {{ category.name }}<br/>*/
/* {% endfor %}*/
