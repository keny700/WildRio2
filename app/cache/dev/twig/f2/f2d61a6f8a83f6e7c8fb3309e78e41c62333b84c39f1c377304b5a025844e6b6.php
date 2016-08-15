<?php

/* epreuves/new.html.twig */
class __TwigTemplate_e994b5c95fe9647f5f1376ffff1e95f534f9e7f5d48682e5162fc44de08d864a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "epreuves/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c986c20d469f1604e9159380f81bb57d0a7bd55cb974f7fe248ebc6736e9ec1 = $this->env->getExtension("native_profiler");
        $__internal_5c986c20d469f1604e9159380f81bb57d0a7bd55cb974f7fe248ebc6736e9ec1->enter($__internal_5c986c20d469f1604e9159380f81bb57d0a7bd55cb974f7fe248ebc6736e9ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "epreuves/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c986c20d469f1604e9159380f81bb57d0a7bd55cb974f7fe248ebc6736e9ec1->leave($__internal_5c986c20d469f1604e9159380f81bb57d0a7bd55cb974f7fe248ebc6736e9ec1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1746e5fc9fbbc37e33f5a1e4bb86bf2890793efbe0c7669449aac1d2e925e16e = $this->env->getExtension("native_profiler");
        $__internal_1746e5fc9fbbc37e33f5a1e4bb86bf2890793efbe0c7669449aac1d2e925e16e->enter($__internal_1746e5fc9fbbc37e33f5a1e4bb86bf2890793efbe0c7669449aac1d2e925e16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Epreuves creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("epreuves_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_1746e5fc9fbbc37e33f5a1e4bb86bf2890793efbe0c7669449aac1d2e925e16e->leave($__internal_1746e5fc9fbbc37e33f5a1e4bb86bf2890793efbe0c7669449aac1d2e925e16e_prof);

    }

    public function getTemplateName()
    {
        return "epreuves/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Epreuves creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('epreuves_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
