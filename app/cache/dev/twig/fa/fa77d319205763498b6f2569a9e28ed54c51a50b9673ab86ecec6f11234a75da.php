<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b7043adc809477eac76c13abe0c0cd380453be6b734c0bf6a597a0d64ab0d4d5 extends Twig_Template
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
        $__internal_9adfee9506590140b92bba552483aca6d88a42a1cfb8ed123ca49b61b07db409 = $this->env->getExtension("native_profiler");
        $__internal_9adfee9506590140b92bba552483aca6d88a42a1cfb8ed123ca49b61b07db409->enter($__internal_9adfee9506590140b92bba552483aca6d88a42a1cfb8ed123ca49b61b07db409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9adfee9506590140b92bba552483aca6d88a42a1cfb8ed123ca49b61b07db409->leave($__internal_9adfee9506590140b92bba552483aca6d88a42a1cfb8ed123ca49b61b07db409_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4fba434d9610e43b74c125b84e26fd8722625270189574930a2c9c8f093a2a7b = $this->env->getExtension("native_profiler");
        $__internal_4fba434d9610e43b74c125b84e26fd8722625270189574930a2c9c8f093a2a7b->enter($__internal_4fba434d9610e43b74c125b84e26fd8722625270189574930a2c9c8f093a2a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4fba434d9610e43b74c125b84e26fd8722625270189574930a2c9c8f093a2a7b->leave($__internal_4fba434d9610e43b74c125b84e26fd8722625270189574930a2c9c8f093a2a7b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a129b286ce592da3e1aecf1b00780853c6a423f63e1cb5b4a9d6a1e516f7aead = $this->env->getExtension("native_profiler");
        $__internal_a129b286ce592da3e1aecf1b00780853c6a423f63e1cb5b4a9d6a1e516f7aead->enter($__internal_a129b286ce592da3e1aecf1b00780853c6a423f63e1cb5b4a9d6a1e516f7aead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a129b286ce592da3e1aecf1b00780853c6a423f63e1cb5b4a9d6a1e516f7aead->leave($__internal_a129b286ce592da3e1aecf1b00780853c6a423f63e1cb5b4a9d6a1e516f7aead_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b46ef0676ef851aceb04c7ac3bcea945e2fff215c61af2294d14c0349e90ee2d = $this->env->getExtension("native_profiler");
        $__internal_b46ef0676ef851aceb04c7ac3bcea945e2fff215c61af2294d14c0349e90ee2d->enter($__internal_b46ef0676ef851aceb04c7ac3bcea945e2fff215c61af2294d14c0349e90ee2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b46ef0676ef851aceb04c7ac3bcea945e2fff215c61af2294d14c0349e90ee2d->leave($__internal_b46ef0676ef851aceb04c7ac3bcea945e2fff215c61af2294d14c0349e90ee2d_prof);

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
