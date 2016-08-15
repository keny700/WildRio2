<?php

/* athletes/new.html.twig */
class __TwigTemplate_8113e9064886ec1028e4df31ca4716f532184ae241efca112c4bca15a00eb536 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "athletes/new.html.twig", 1);
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
        $__internal_c85db281e6eef55068e2fa6fa486ce935e48155c5125666f06deedec24d1600d = $this->env->getExtension("native_profiler");
        $__internal_c85db281e6eef55068e2fa6fa486ce935e48155c5125666f06deedec24d1600d->enter($__internal_c85db281e6eef55068e2fa6fa486ce935e48155c5125666f06deedec24d1600d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "athletes/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c85db281e6eef55068e2fa6fa486ce935e48155c5125666f06deedec24d1600d->leave($__internal_c85db281e6eef55068e2fa6fa486ce935e48155c5125666f06deedec24d1600d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c8785847e421e3ce068f92f28dc9b95ead67223dcabf4d281a8351df2fcd64c = $this->env->getExtension("native_profiler");
        $__internal_8c8785847e421e3ce068f92f28dc9b95ead67223dcabf4d281a8351df2fcd64c->enter($__internal_8c8785847e421e3ce068f92f28dc9b95ead67223dcabf4d281a8351df2fcd64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Athletes creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("athletes_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_8c8785847e421e3ce068f92f28dc9b95ead67223dcabf4d281a8351df2fcd64c->leave($__internal_8c8785847e421e3ce068f92f28dc9b95ead67223dcabf4d281a8351df2fcd64c_prof);

    }

    public function getTemplateName()
    {
        return "athletes/new.html.twig";
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
/*     <h1>Athletes creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('athletes_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
