<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_ba55d452ac744e0b16447047ed62ecc749720b508b4bb72a796be5b65e5991d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9067f079e7b941d10a8223cbd874f71366f8ae0c43c70d25648d4692f09a3ce8 = $this->env->getExtension("native_profiler");
        $__internal_9067f079e7b941d10a8223cbd874f71366f8ae0c43c70d25648d4692f09a3ce8->enter($__internal_9067f079e7b941d10a8223cbd874f71366f8ae0c43c70d25648d4692f09a3ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9067f079e7b941d10a8223cbd874f71366f8ae0c43c70d25648d4692f09a3ce8->leave($__internal_9067f079e7b941d10a8223cbd874f71366f8ae0c43c70d25648d4692f09a3ce8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f7845cdc9682fc3b8948206bd0beae12cfc4a72ade36c1b7d988d5f0790cb5fd = $this->env->getExtension("native_profiler");
        $__internal_f7845cdc9682fc3b8948206bd0beae12cfc4a72ade36c1b7d988d5f0790cb5fd->enter($__internal_f7845cdc9682fc3b8948206bd0beae12cfc4a72ade36c1b7d988d5f0790cb5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_f7845cdc9682fc3b8948206bd0beae12cfc4a72ade36c1b7d988d5f0790cb5fd->leave($__internal_f7845cdc9682fc3b8948206bd0beae12cfc4a72ade36c1b7d988d5f0790cb5fd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
