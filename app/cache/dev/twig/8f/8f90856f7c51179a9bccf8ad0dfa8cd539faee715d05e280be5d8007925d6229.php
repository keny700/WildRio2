<?php

/* athletes/index.html.twig */
class __TwigTemplate_1049c0330bd68a3903536f1b2e5f354ca75d758aefb30932e9745a554e8f07ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "athletes/index.html.twig", 1);
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
        $__internal_a3b570b52e29f08092f4511ee21ee7ce8b3c593e7d3e7a5544558e6b838714fe = $this->env->getExtension("native_profiler");
        $__internal_a3b570b52e29f08092f4511ee21ee7ce8b3c593e7d3e7a5544558e6b838714fe->enter($__internal_a3b570b52e29f08092f4511ee21ee7ce8b3c593e7d3e7a5544558e6b838714fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "athletes/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3b570b52e29f08092f4511ee21ee7ce8b3c593e7d3e7a5544558e6b838714fe->leave($__internal_a3b570b52e29f08092f4511ee21ee7ce8b3c593e7d3e7a5544558e6b838714fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc63f8e15ed8b159ca32fe44954aeb16c59d0ea2e9846b6ca2cb914271799460 = $this->env->getExtension("native_profiler");
        $__internal_dc63f8e15ed8b159ca32fe44954aeb16c59d0ea2e9846b6ca2cb914271799460->enter($__internal_dc63f8e15ed8b159ca32fe44954aeb16c59d0ea2e9846b6ca2cb914271799460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Athletes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Sport</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["athletes"]) ? $context["athletes"] : $this->getContext($context, "athletes")));
        foreach ($context['_seq'] as $context["_key"] => $context["athlete"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("athletes_show", array("id" => $this->getAttribute($context["athlete"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["athlete"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["athlete"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["athlete"], "sport", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("athletes_show", array("id" => $this->getAttribute($context["athlete"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("athletes_edit", array("id" => $this->getAttribute($context["athlete"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['athlete'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("athletes_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_dc63f8e15ed8b159ca32fe44954aeb16c59d0ea2e9846b6ca2cb914271799460->leave($__internal_dc63f8e15ed8b159ca32fe44954aeb16c59d0ea2e9846b6ca2cb914271799460_prof);

    }

    public function getTemplateName()
    {
        return "athletes/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Athletes list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Sport</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for athlete in athletes %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('athletes_show', { 'id': athlete.id }) }}">{{ athlete.id }}</a></td>*/
/*                 <td>{{ athlete.nom }}</td>*/
/*                 <td>{{ athlete.sport }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('athletes_show', { 'id': athlete.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('athletes_edit', { 'id': athlete.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('athletes_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
