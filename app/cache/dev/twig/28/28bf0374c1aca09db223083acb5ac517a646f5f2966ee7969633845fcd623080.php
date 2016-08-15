<?php

/* default/epreuve1.html.twig */
class __TwigTemplate_d990ecca011b48b22789deb2ae2e7174e019655fbc9d63ab83d526a23829a2d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home.html.twig", "default/epreuve1.html.twig", 1);
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
        $__internal_ebd908330560c194a8ad401fbff7c1e47238deefd8c0df362ddd71005c26f95a = $this->env->getExtension("native_profiler");
        $__internal_ebd908330560c194a8ad401fbff7c1e47238deefd8c0df362ddd71005c26f95a->enter($__internal_ebd908330560c194a8ad401fbff7c1e47238deefd8c0df362ddd71005c26f95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/epreuve1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebd908330560c194a8ad401fbff7c1e47238deefd8c0df362ddd71005c26f95a->leave($__internal_ebd908330560c194a8ad401fbff7c1e47238deefd8c0df362ddd71005c26f95a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b01c352967cc00e24cd9299cf1714e188b1057535f25f1a331ff542d1df1ebd9 = $this->env->getExtension("native_profiler");
        $__internal_b01c352967cc00e24cd9299cf1714e188b1057535f25f1a331ff542d1df1ebd9->enter($__internal_b01c352967cc00e24cd9299cf1714e188b1057535f25f1a331ff542d1df1ebd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["epreuves"]) ? $context["epreuves"] : $this->getContext($context, "epreuves")), "texte", array()), "html", null, true);
        echo " 
  </div>
  <div class=\"col-md-12 tab\">
  </div>
  <div class=\"col-md-12 vote\">
  </div>
  <div class=\"col-md-12 footer\">
    <div class=\"col-md-3 vide\"></div>
    <div class=\"col-md-1 logo\"><img  src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/fb.png"), "html", null, true);
        echo "\" /></div>
    <div class=\"col-md-1 logo\"><img  src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/g.png"), "html", null, true);
        echo "\" /></div>
    <div class=\"col-md-1 logo\"><img  src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/t.png"), "html", null, true);
        echo "\" /></div>
    <div class=\"col-md-3 vide\"></div>
  </div>

  
";
        
        $__internal_b01c352967cc00e24cd9299cf1714e188b1057535f25f1a331ff542d1df1ebd9->leave($__internal_b01c352967cc00e24cd9299cf1714e188b1057535f25f1a331ff542d1df1ebd9_prof);

    }

    public function getTemplateName()
    {
        return "default/epreuve1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  66 => 19,  62 => 18,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
/*   <div class="col-md-12 txtx">{# Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla Bla bla #}{{ epreuves.texte }} */
/*   </div>*/
/*   <div class="col-md-12 tab">*/
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
