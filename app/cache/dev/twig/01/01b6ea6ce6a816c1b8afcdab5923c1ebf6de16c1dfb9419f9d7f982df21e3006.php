<?php

/* epreuves/index.html.twig */
class __TwigTemplate_0d5993a5c3c4ccf0d23014425b2bef6f656aabe316c26f0d716e9da11387c91c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "epreuves/index.html.twig", 1);
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
        $__internal_79690db5ea16a8419e87159ceedcfc4b07b6c44698844ccf60ea68d4047b2be5 = $this->env->getExtension("native_profiler");
        $__internal_79690db5ea16a8419e87159ceedcfc4b07b6c44698844ccf60ea68d4047b2be5->enter($__internal_79690db5ea16a8419e87159ceedcfc4b07b6c44698844ccf60ea68d4047b2be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "epreuves/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79690db5ea16a8419e87159ceedcfc4b07b6c44698844ccf60ea68d4047b2be5->leave($__internal_79690db5ea16a8419e87159ceedcfc4b07b6c44698844ccf60ea68d4047b2be5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_23846b7fa796f4942fda7b849d71d120d82649434842752f763b97f60649dfe3 = $this->env->getExtension("native_profiler");
        $__internal_23846b7fa796f4942fda7b849d71d120d82649434842752f763b97f60649dfe3->enter($__internal_23846b7fa796f4942fda7b849d71d120d82649434842752f763b97f60649dfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Epreuves list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Texte</th>
                <th>Athletes</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["epreuves"]) ? $context["epreuves"] : $this->getContext($context, "epreuves")));
        foreach ($context['_seq'] as $context["_key"] => $context["epreufe"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("epreuves_show", array("id" => $this->getAttribute($context["epreufe"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["epreufe"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["epreufe"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["epreufe"], "texte", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["epreufe"], "athletes", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("epreuves_show", array("id" => $this->getAttribute($context["epreufe"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("epreuves_edit", array("id" => $this->getAttribute($context["epreufe"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['epreufe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("epreuves_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_23846b7fa796f4942fda7b849d71d120d82649434842752f763b97f60649dfe3->leave($__internal_23846b7fa796f4942fda7b849d71d120d82649434842752f763b97f60649dfe3_prof);

    }

    public function getTemplateName()
    {
        return "epreuves/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 35,  89 => 29,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Epreuves list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Texte</th>*/
/*                 <th>Athletes</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for epreufe in epreuves %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('epreuves_show', { 'id': epreufe.id }) }}">{{ epreufe.id }}</a></td>*/
/*                 <td>{{ epreufe.nom }}</td>*/
/*                 <td>{{ epreufe.texte }}</td>*/
/*                 <td>{{ epreufe.athletes }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('epreuves_show', { 'id': epreufe.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('epreuves_edit', { 'id': epreufe.id }) }}">edit</a>*/
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
/*             <a href="{{ path('epreuves_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
