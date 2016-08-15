<?php

/* epreuves/show.html.twig */
class __TwigTemplate_89be573768f09496a12a8ac06d3388a652cf011760cce1dc7b4efd412f72ea01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home.html.twig", "epreuves/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe5fe6eca4157089613fa562e2001333dcce6c98263bb0896cce46da9e6723e1 = $this->env->getExtension("native_profiler");
        $__internal_fe5fe6eca4157089613fa562e2001333dcce6c98263bb0896cce46da9e6723e1->enter($__internal_fe5fe6eca4157089613fa562e2001333dcce6c98263bb0896cce46da9e6723e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "epreuves/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe5fe6eca4157089613fa562e2001333dcce6c98263bb0896cce46da9e6723e1->leave($__internal_fe5fe6eca4157089613fa562e2001333dcce6c98263bb0896cce46da9e6723e1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e41327560387b5d4c944b58c618cff7cec558aec141545cd60cfa8755a3bfb1d = $this->env->getExtension("native_profiler");
        $__internal_e41327560387b5d4c944b58c618cff7cec558aec141545cd60cfa8755a3bfb1d->enter($__internal_e41327560387b5d4c944b58c618cff7cec558aec141545cd60cfa8755a3bfb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"container_fluid\">
  <div class=\"col-md-12 retour\"> <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Retour </a>   
  </div>
  <div class=\"col-md-12 top1\">
  </div> 
  <div class=\"col-md-12 txtx\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["epreufe"]) ? $context["epreufe"] : $this->getContext($context, "epreufe")), "texte", array()), "html", null, true);
        echo " 
  </div>
  <div class=\"col-md-12 tab\">
    ";
        // line 14
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["athletes"]);
        foreach ($context['_seq'] as $context["_key"] => $context["athletes"]) {
            // line 15
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["athletes"], "nom", array()), "html", null, true);
            echo "<br />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['athletes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "  </div>
  <div class=\"col-md-12 vote\">
  </div>
  <div class=\"col-md-12 footer\">
    <div class=\"col-md-3 vide\"></div>
    <div class=\"col-md-1 logo\"><img  src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/fb.png"), "html", null, true);
        echo "\" /></div>
    <div class=\"col-md-1 logo\"><img  src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/g.png"), "html", null, true);
        echo "\" /></div>
    <div class=\"col-md-1 logo\"><img  src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/t.png"), "html", null, true);
        echo "\" /></div>
    <div class=\"col-md-3 vide\"></div>
  </div>

  
";
        
        $__internal_e41327560387b5d4c944b58c618cff7cec558aec141545cd60cfa8755a3bfb1d->leave($__internal_e41327560387b5d4c944b58c618cff7cec558aec141545cd60cfa8755a3bfb1d_prof);

    }

    public function getTemplateName()
    {
        return "epreuves/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 24,  82 => 23,  78 => 22,  71 => 17,  62 => 15,  57 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'home.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="container_fluid">*/
/*   <div class="col-md-12 retour"> <a href="{{ path('home') }}">Retour </a>   */
/*   </div>*/
/*   <div class="col-md-12 top1">*/
/*   </div> */
/*   <div class="col-md-12 txtx">{# Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla #}{{ epreufe.texte }} */
/*   </div>*/
/*   <div class="col-md-12 tab">*/
/*     {# {{ epreufe.athletes }} #}*/
/*     {% for athletes in athletes %}*/
/*         {{ athletes.nom }}<br />*/
/*     {% endfor %}*/
/*   </div>*/
/*   <div class="col-md-12 vote">*/
/*   </div>*/
/*   <div class="col-md-12 footer">*/
/*     <div class="col-md-3 vide"></div>*/
/*     <div class="col-md-1 logo"><img  src="{{ asset ('img/fb.png') }}" /></div>*/
/*     <div class="col-md-1 logo"><img  src="{{ asset ('img/g.png') }}" /></div>*/
/*     <div class="col-md-1 logo"><img  src="{{ asset ('img/t.png') }}" /></div>*/
/*     <div class="col-md-3 vide"></div>*/
/*   </div>*/
/* */
/*   */
/* {% endblock %}*/
/* */
