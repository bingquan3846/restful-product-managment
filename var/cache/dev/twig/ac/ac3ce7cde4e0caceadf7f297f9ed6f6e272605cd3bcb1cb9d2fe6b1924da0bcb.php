<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1fab00803c6044b5b1e5b61115de4676e72d428002a10c2500d0e15e309228ad extends Twig_Template
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
        $__internal_56a801bf2fd16e654ad2f92e89be6a23fd02a31831b6fced7efd1118723bf752 = $this->env->getExtension("native_profiler");
        $__internal_56a801bf2fd16e654ad2f92e89be6a23fd02a31831b6fced7efd1118723bf752->enter($__internal_56a801bf2fd16e654ad2f92e89be6a23fd02a31831b6fced7efd1118723bf752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56a801bf2fd16e654ad2f92e89be6a23fd02a31831b6fced7efd1118723bf752->leave($__internal_56a801bf2fd16e654ad2f92e89be6a23fd02a31831b6fced7efd1118723bf752_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8d46bb6011dfc5848947fbcf0da675acd65e2928b37af6794b1eb9bdc2a5c245 = $this->env->getExtension("native_profiler");
        $__internal_8d46bb6011dfc5848947fbcf0da675acd65e2928b37af6794b1eb9bdc2a5c245->enter($__internal_8d46bb6011dfc5848947fbcf0da675acd65e2928b37af6794b1eb9bdc2a5c245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8d46bb6011dfc5848947fbcf0da675acd65e2928b37af6794b1eb9bdc2a5c245->leave($__internal_8d46bb6011dfc5848947fbcf0da675acd65e2928b37af6794b1eb9bdc2a5c245_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4dfe8e677ea883c5f799da1db166d39a1305944fd6ed19b9c8036665889f58e3 = $this->env->getExtension("native_profiler");
        $__internal_4dfe8e677ea883c5f799da1db166d39a1305944fd6ed19b9c8036665889f58e3->enter($__internal_4dfe8e677ea883c5f799da1db166d39a1305944fd6ed19b9c8036665889f58e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4dfe8e677ea883c5f799da1db166d39a1305944fd6ed19b9c8036665889f58e3->leave($__internal_4dfe8e677ea883c5f799da1db166d39a1305944fd6ed19b9c8036665889f58e3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e264e7ab181f9f2c3bfd087483df9721dabcb1e7e0da9303856eae1164a0535e = $this->env->getExtension("native_profiler");
        $__internal_e264e7ab181f9f2c3bfd087483df9721dabcb1e7e0da9303856eae1164a0535e->enter($__internal_e264e7ab181f9f2c3bfd087483df9721dabcb1e7e0da9303856eae1164a0535e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e264e7ab181f9f2c3bfd087483df9721dabcb1e7e0da9303856eae1164a0535e->leave($__internal_e264e7ab181f9f2c3bfd087483df9721dabcb1e7e0da9303856eae1164a0535e_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
