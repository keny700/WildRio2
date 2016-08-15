<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_67884eef62a2f3aa67931c27f3d0df0c9234c07922d98096dd70b6a0b7a0e1f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_2e851c2820881513d84a7865e7e6da16f4aacdb0f7d32b7de8971377d1e7a961 = $this->env->getExtension("native_profiler");
        $__internal_2e851c2820881513d84a7865e7e6da16f4aacdb0f7d32b7de8971377d1e7a961->enter($__internal_2e851c2820881513d84a7865e7e6da16f4aacdb0f7d32b7de8971377d1e7a961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e851c2820881513d84a7865e7e6da16f4aacdb0f7d32b7de8971377d1e7a961->leave($__internal_2e851c2820881513d84a7865e7e6da16f4aacdb0f7d32b7de8971377d1e7a961_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c29a33c9b2320269e0f3a378dc93cacc597c4aa4a4d8d7c6d79071b411c513f = $this->env->getExtension("native_profiler");
        $__internal_9c29a33c9b2320269e0f3a378dc93cacc597c4aa4a4d8d7c6d79071b411c513f->enter($__internal_9c29a33c9b2320269e0f3a378dc93cacc597c4aa4a4d8d7c6d79071b411c513f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_9c29a33c9b2320269e0f3a378dc93cacc597c4aa4a4d8d7c6d79071b411c513f->leave($__internal_9c29a33c9b2320269e0f3a378dc93cacc597c4aa4a4d8d7c6d79071b411c513f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
