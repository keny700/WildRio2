<?php

/* athletes/show.html.twig */
class __TwigTemplate_91ee53f23fe078ba2d53614bbd5848135a1035c4ef23bde429ef892b349ed9a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "athletes/show.html.twig", 1);
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
        $__internal_c182bbe83338a0cf30cfa963d2f84f05c41fc9e9ae5d69843efcf60525a2ec42 = $this->env->getExtension("native_profiler");
        $__internal_c182bbe83338a0cf30cfa963d2f84f05c41fc9e9ae5d69843efcf60525a2ec42->enter($__internal_c182bbe83338a0cf30cfa963d2f84f05c41fc9e9ae5d69843efcf60525a2ec42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "athletes/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c182bbe83338a0cf30cfa963d2f84f05c41fc9e9ae5d69843efcf60525a2ec42->leave($__internal_c182bbe83338a0cf30cfa963d2f84f05c41fc9e9ae5d69843efcf60525a2ec42_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e2c9a38507b83e4be9ea2cd363c52635d9ad8901619389c6ecf3f6d8e6b6558 = $this->env->getExtension("native_profiler");
        $__internal_1e2c9a38507b83e4be9ea2cd363c52635d9ad8901619389c6ecf3f6d8e6b6558->enter($__internal_1e2c9a38507b83e4be9ea2cd363c52635d9ad8901619389c6ecf3f6d8e6b6558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Athletes</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["athlete"]) ? $context["athlete"] : $this->getContext($context, "athlete")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["athlete"]) ? $context["athlete"] : $this->getContext($context, "athlete")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sport</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["athlete"]) ? $context["athlete"] : $this->getContext($context, "athlete")), "sport", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("athletes_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("athletes_edit", array("id" => $this->getAttribute((isset($context["athlete"]) ? $context["athlete"] : $this->getContext($context, "athlete")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_1e2c9a38507b83e4be9ea2cd363c52635d9ad8901619389c6ecf3f6d8e6b6558->leave($__internal_1e2c9a38507b83e4be9ea2cd363c52635d9ad8901619389c6ecf3f6d8e6b6558_prof);

    }

    public function getTemplateName()
    {
        return "athletes/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Athletes</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ athlete.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <td>{{ athlete.nom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Sport</th>*/
/*                 <td>{{ athlete.sport }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('athletes_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('athletes_edit', { 'id': athlete.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
