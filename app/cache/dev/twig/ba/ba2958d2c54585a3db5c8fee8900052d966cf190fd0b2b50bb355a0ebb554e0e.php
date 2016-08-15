<?php

/* home.html.twig */
class __TwigTemplate_8f77cfb29fe7f7e559b8190f6101e3644fdf092f85854d1d8931a4335a86ecfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b79d42ae85c6e2030369ca9f913eebe6b32f1ac064d0578f2924002f80d6c9f = $this->env->getExtension("native_profiler");
        $__internal_2b79d42ae85c6e2030369ca9f913eebe6b32f1ac064d0578f2924002f80d6c9f->enter($__internal_2b79d42ae85c6e2030369ca9f913eebe6b32f1ac064d0578f2924002f80d6c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/stylesheet.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://cdn.datatables.net/1.10.12/css/jquery.dataTables.css"), "html", null, true);
        echo "\">
  
        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.2.3.min.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://code.highcharts.com/highcharts.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://code.highcharts.com/modules/exporting.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/onglet.js"), "html", null, true);
        echo "\" ></script>   
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

";
        // line 23
        echo "

";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 99
        echo "</html>";
        
        $__internal_2b79d42ae85c6e2030369ca9f913eebe6b32f1ac064d0578f2924002f80d6c9f->leave($__internal_2b79d42ae85c6e2030369ca9f913eebe6b32f1ac064d0578f2924002f80d6c9f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a740148b3535c11628fd7e6a9def2e16608ce6cdc9331ccbcbfc85ffa0d50e3 = $this->env->getExtension("native_profiler");
        $__internal_1a740148b3535c11628fd7e6a9def2e16608ce6cdc9331ccbcbfc85ffa0d50e3->enter($__internal_1a740148b3535c11628fd7e6a9def2e16608ce6cdc9331ccbcbfc85ffa0d50e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to Rio
          !";
        
        $__internal_1a740148b3535c11628fd7e6a9def2e16608ce6cdc9331ccbcbfc85ffa0d50e3->leave($__internal_1a740148b3535c11628fd7e6a9def2e16608ce6cdc9331ccbcbfc85ffa0d50e3_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a8a49b825b361e1596be548420a7b9aa03dcaa044ef4d3af4f3c0721e4689583 = $this->env->getExtension("native_profiler");
        $__internal_a8a49b825b361e1596be548420a7b9aa03dcaa044ef4d3af4f3c0721e4689583->enter($__internal_a8a49b825b361e1596be548420a7b9aa03dcaa044ef4d3af4f3c0721e4689583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a8a49b825b361e1596be548420a7b9aa03dcaa044ef4d3af4f3c0721e4689583->leave($__internal_a8a49b825b361e1596be548420a7b9aa03dcaa044ef4d3af4f3c0721e4689583_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_e92f4a05197d76ea5a571b6bf59495df34752fdf25b15f85396ddc0af210dd64 = $this->env->getExtension("native_profiler");
        $__internal_e92f4a05197d76ea5a571b6bf59495df34752fdf25b15f85396ddc0af210dd64->enter($__internal_e92f4a05197d76ea5a571b6bf59495df34752fdf25b15f85396ddc0af210dd64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "
<div class=\"container_fluid\">
  <div class=\"col-md-12 up\">
    
          
          <a href=\"#openModal\"><p class=\"connect\">Se connecter</p></a>
          <div id=\"openModal\" class=\"modalbook\">
            

              
              <div class=\"col-md-4 \"><a href=\"#close\" title=\"Close\" class=\"close\">X</a>";
        // line 36
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Security:login"));
        echo "
                  ";
        // line 44
        echo "  
              </div>
                          
          </div>
        
  </div>

  <div class=\"col-md-12 row mid\">
    <h2>Prochaines Epreuves</h2>
      <div class=\"col-md-1 vide\"></div>
      <div class=\"col-md-3 art\">
          <div class=\"col-md-12\">
              <img  src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/nat.jpg"), "html", null, true);
        echo "\" />
          </div>
          <div class=\"col-md-12 txt\">";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["epreufe"]) ? $context["epreufe"] : $this->getContext($context, "epreufe")), "texte", array()), "html", null, true);
        echo "
          </div>
          <div class=\"col-md-12 voir\"><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("epreuves", array("idepreuves" => $this->getAttribute((isset($context["epreuves"]) ? $context["epreuves"] : $this->getContext($context, "epreuves")), "id", array()))), "html", null, true);
        echo "\"><img  src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/voir.png"), "html", null, true);
        echo "\" /></a></div>
      </div>
      ";
        // line 63
        echo "      <div class=\"col-md-3 art\">
        <div class=\"col-md-12\">
          <img  src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/esc.jpg"), "html", null, true);
        echo "\" />
        </div>
        <div class=\"col-md-12 txt\">Bla blaBla blaBla blaBla blaBla blaBla blaBla blaBla blaBla bla
        </div><div class=\"col-md-12 voir\"><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("epreuves");
        echo "\"><img  src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/voir.png"), "html", null, true);
        echo "\" /></a></div>
      </div>
      ";
        // line 71
        echo "      <div class=\"col-md-3 art\">
        <div class=\"col-md-12\">
          <img  src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/golf.jpg"), "html", null, true);
        echo "\" />
        </div>
        <div class=\"col-md-12 txt\">Bla blaBla blaBla blaBla blaBla blaBla blaBla blaBla blaBla bla
        </div><div class=\"col-md-12 voir\"><a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("epreuves");
        echo "\"><img  src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/voir.png"), "html", null, true);
        echo "\" /></a></div>
      </div>
      <div class=\"col-md-1 vide\"></div>
  </div>
  <div class=\"col-md-12 down\">
      <div class=\"col-md-1 vide\"></div>
      <div class=\"col-md-6 yt\"><iframe height=\"300\" width=\"550\" src=\"https://www.youtube.com/embed/videoseries?list=\" frameborder=\"0\" allowfullscreen></iframe></div>
      <div class=\"col-md-4 comment\"><p class=\"tt\">Bla bla<br />Bla bla<br />Bla bla<br />Bla bla<br />Bla bla<br />Bla bla<br />Bla bla<br />Bla bla<br />Bla bla<br />Bla bla<br />Bla bla<br /></p></div>
      <div class=\"col-md-1 vide\"></div>
  </div>
  <div class=\"col-md-12 ecart\"></div>
  <div class=\"col-md-12 footer\">
    <div class=\"col-md-3 vide\"></div>
    <div class=\"col-md-1 logo\"><img  src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/fb.png"), "html", null, true);
        echo "\" /></div>
    <div class=\"col-md-1 logo\"><img  src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/g.png"), "html", null, true);
        echo "\" /></div>
    <div class=\"col-md-1 logo\"><img  src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/t.png"), "html", null, true);
        echo "\" /></div>
    <div class=\"col-md-3 vide\"></div>
  </div>


    

";
        
        $__internal_e92f4a05197d76ea5a571b6bf59495df34752fdf25b15f85396ddc0af210dd64->leave($__internal_e92f4a05197d76ea5a571b6bf59495df34752fdf25b15f85396ddc0af210dd64_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 91,  218 => 90,  214 => 89,  196 => 76,  190 => 73,  186 => 71,  179 => 68,  173 => 65,  169 => 63,  162 => 60,  157 => 58,  152 => 56,  138 => 44,  134 => 36,  122 => 26,  116 => 25,  105 => 8,  92 => 6,  85 => 99,  83 => 25,  79 => 23,  73 => 19,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  52 => 13,  47 => 11,  43 => 10,  38 => 9,  36 => 8,  33 => 7,  31 => 6,  25 => 2,);
    }
}
/* {# {% extends 'base.html.twig' %} #}*/
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome to Rio*/
/*           !{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheet.css') }}">*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('https://cdn.datatables.net/1.10.12/css/jquery.dataTables.css') }}">*/
/*   */
/*         <script type="text/javascript" src="{{ asset('js/jquery-2.2.3.min.js') }}" ></script>*/
/*         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}" ></script>*/
/*         <script src="{{ asset('https://code.highcharts.com/highcharts.js')}}"></script>*/
/*         <script src="{{ asset('https://code.highcharts.com/modules/exporting.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/onglet.js') }}" ></script>   */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* {% block body %}*/
/* */
/* <div class="container_fluid">*/
/*   <div class="col-md-12 up">*/
/*     */
/*           */
/*           <a href="#openModal"><p class="connect">Se connecter</p></a>*/
/*           <div id="openModal" class="modalbook">*/
/*             */
/* */
/*               */
/*               <div class="col-md-4 "><a href="#close" title="Close" class="close">X</a>{{ render(controller('AppBundle:Security:login')) }}*/
/*                   {# <h2>Connexion</h2>*/
/*                   <hr/>*/
/*                   <p> Username : </p>*/
/*                   <input  placeholder="Username"/> */
/*                    <p> password : </p>*/
/*                   <input  placeholder="Password"/>*/
/*                   <hr/>*/
/*                   <input type="submit" class="btn-lg btn-info" value="Se Connecter"/>  #}  */
/*               </div>*/
/*                           */
/*           </div>*/
/*         */
/*   </div>*/
/* */
/*   <div class="col-md-12 row mid">*/
/*     <h2>Prochaines Epreuves</h2>*/
/*       <div class="col-md-1 vide"></div>*/
/*       <div class="col-md-3 art">*/
/*           <div class="col-md-12">*/
/*               <img  src="{{ asset ('img/nat.jpg') }}" />*/
/*           </div>*/
/*           <div class="col-md-12 txt">{# Bla blaBla blaBla blaBla blaBla blaBla blaBla blaBla bla #}{{ epreufe.texte }}*/
/*           </div>*/
/*           <div class="col-md-12 voir"><a href="{{ path('epreuves', { 'idepreuves': epreuves.id }) }}"><img  src="{{ asset ('img/voir.png') }}" /></a></div>*/
/*       </div>*/
/*       {# <div class="col-md-1 vide"></div> #}*/
/*       <div class="col-md-3 art">*/
/*         <div class="col-md-12">*/
/*           <img  src="{{ asset ('img/esc.jpg') }}" />*/
/*         </div>*/
/*         <div class="col-md-12 txt">Bla blaBla blaBla blaBla blaBla blaBla blaBla blaBla blaBla bla*/
/*         </div><div class="col-md-12 voir"><a href="{{ path('epreuves') }}"><img  src="{{ asset ('img/voir.png') }}" /></a></div>*/
/*       </div>*/
/*       {# <div class="col-md-1 vide"></div> #}*/
/*       <div class="col-md-3 art">*/
/*         <div class="col-md-12">*/
/*           <img  src="{{ asset ('img/golf.jpg') }}" />*/
/*         </div>*/
/*         <div class="col-md-12 txt">Bla blaBla blaBla blaBla blaBla blaBla blaBla blaBla blaBla bla*/
/*         </div><div class="col-md-12 voir"><a href="{{ path('epreuves') }}"><img  src="{{ asset ('img/voir.png') }}" /></a></div>*/
/*       </div>*/
/*       <div class="col-md-1 vide"></div>*/
/*   </div>*/
/*   <div class="col-md-12 down">*/
/*       <div class="col-md-1 vide"></div>*/
/*       <div class="col-md-6 yt"><iframe height="300" width="550" src="https://www.youtube.com/embed/videoseries?list=" frameborder="0" allowfullscreen></iframe></div>*/
/*       <div class="col-md-4 comment"><p class="tt">Bla bla<br />Bla bla<br />Bla bla<br />Bla bla<br />Bla bla<br />Bla bla<br />Bla bla<br />Bla bla<br />Bla bla<br />Bla bla<br />Bla bla<br /></p></div>*/
/*       <div class="col-md-1 vide"></div>*/
/*   </div>*/
/*   <div class="col-md-12 ecart"></div>*/
/*   <div class="col-md-12 footer">*/
/*     <div class="col-md-3 vide"></div>*/
/*     <div class="col-md-1 logo"><img  src="{{ asset ('img/fb.png') }}" /></div>*/
/*     <div class="col-md-1 logo"><img  src="{{ asset ('img/g.png') }}" /></div>*/
/*     <div class="col-md-1 logo"><img  src="{{ asset ('img/t.png') }}" /></div>*/
/*     <div class="col-md-3 vide"></div>*/
/*   </div>*/
/* */
/* */
/*     */
/* */
/* {% endblock %}*/
/* </html>*/
