<?php

/* default/home.html.twig */
class __TwigTemplate_0f4632321072b262464ebf51491ec681f0d502bc9b46f55e63cf1b449e7eece3 extends Twig_Template
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
        $__internal_15b3628a7d1b70388c5bb3c5a3e1d9e46008e5058419d02328195b3dd5a71667 = $this->env->getExtension("native_profiler");
        $__internal_15b3628a7d1b70388c5bb3c5a3e1d9e46008e5058419d02328195b3dd5a71667->enter($__internal_15b3628a7d1b70388c5bb3c5a3e1d9e46008e5058419d02328195b3dd5a71667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/home.html.twig"));

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
        // line 101
        echo "</html>";
        
        $__internal_15b3628a7d1b70388c5bb3c5a3e1d9e46008e5058419d02328195b3dd5a71667->leave($__internal_15b3628a7d1b70388c5bb3c5a3e1d9e46008e5058419d02328195b3dd5a71667_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab919faa7ede9e0d5608fdf6dd9ab413f9dcca9d847c3e23e1ec213ea9367dd3 = $this->env->getExtension("native_profiler");
        $__internal_ab919faa7ede9e0d5608fdf6dd9ab413f9dcca9d847c3e23e1ec213ea9367dd3->enter($__internal_ab919faa7ede9e0d5608fdf6dd9ab413f9dcca9d847c3e23e1ec213ea9367dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to Rio
          !";
        
        $__internal_ab919faa7ede9e0d5608fdf6dd9ab413f9dcca9d847c3e23e1ec213ea9367dd3->leave($__internal_ab919faa7ede9e0d5608fdf6dd9ab413f9dcca9d847c3e23e1ec213ea9367dd3_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0facf40202d1b9029d30691574260c51195a1b9d7e4194364a8efffe7846eb87 = $this->env->getExtension("native_profiler");
        $__internal_0facf40202d1b9029d30691574260c51195a1b9d7e4194364a8efffe7846eb87->enter($__internal_0facf40202d1b9029d30691574260c51195a1b9d7e4194364a8efffe7846eb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0facf40202d1b9029d30691574260c51195a1b9d7e4194364a8efffe7846eb87->leave($__internal_0facf40202d1b9029d30691574260c51195a1b9d7e4194364a8efffe7846eb87_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_5da3a764ff3059feea566b3024c767239b07594f255a54e15176a49db4e8351c = $this->env->getExtension("native_profiler");
        $__internal_5da3a764ff3059feea566b3024c767239b07594f255a54e15176a49db4e8351c->enter($__internal_5da3a764ff3059feea566b3024c767239b07594f255a54e15176a49db4e8351c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "
<div class=\"container_fluid\">
  <div class=\"col-md-12 up\">
    
          
          <a href=\"#openModal\"><p class=\"connect\">Se connecter</p></a>
          <div id=\"openModal\" class=\"modalbook\">
            

              <div class=\"col-md-4 \"><a href=\"#close\" title=\"Close\" class=\"close\">X</a>";
        // line 35
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Security:login"));
        echo "
                  ";
        // line 43
        echo "  
              </div>
                          
          </div>
        
  </div>

  <div class=\"col-md-12 row mid\">
    <h2>Prochaines Epreuves</h2>
          <div class=\"col-md-12\">
            ";
        // line 54
        echo "                  <div class=\"col-md-1 vide\"></div>
                  <div class=\"col-md-3 art\">
                      <div class=\"col-md-12\">
                          <img  src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/nat.jpg"), "html", null, true);
        echo "\" />
                      </div>
                      <div class=\"col-md-12 txt\">Bla blaBla blaBla blaBla blaBla blaBla blaBla blaBla bla
                      </div>
                      <div class=\"col-md-12 voir\"><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("show");
        echo "\"><img  src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/voir.png"), "html", null, true);
        echo "\" /></a></div>
                  </div>
                  <div class=\"col-md-3 art\">
                    <div class=\"col-md-12\">
                      <img  src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/esc.jpg"), "html", null, true);
        echo "\" />
                    </div>
                    <div class=\"col-md-12 txt\">Bla blaBla blaBla blaBla blaBla blaBla blaBla blaBla blaBla bla
                    </div><div class=\"col-md-12 voir\"><a href=\"\"><img  src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/voir.png"), "html", null, true);
        echo "\" /></a></div>
                  </div>
                  
                  <div class=\"col-md-3 art\">
                    <div class=\"col-md-12\">
                      <img  src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/golf.jpg"), "html", null, true);
        echo "\" />
                    </div>
                    <div class=\"col-md-12 txt\">Bla blaBla blaBla blaBla blaBla blaBla blaBla blaBla blaBla bla
                    </div><div class=\"col-md-12 voir\"><a href=\"\"><img  src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/voir.png"), "html", null, true);
        echo "\" /></a></div>
                  </div>
                  <div class=\"col-md-1 vide\"></div>
            ";
        // line 80
        echo "          </div>
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
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/fb.png"), "html", null, true);
        echo "\" /></div>
    <div class=\"col-md-1 logo\"><img  src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/g.png"), "html", null, true);
        echo "\" /></div>
    <div class=\"col-md-1 logo\"><img  src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/t.png"), "html", null, true);
        echo "\" /></div>
    <div class=\"col-md-3 vide\"></div>
  </div>


    

";
        
        $__internal_5da3a764ff3059feea566b3024c767239b07594f255a54e15176a49db4e8351c->leave($__internal_5da3a764ff3059feea566b3024c767239b07594f255a54e15176a49db4e8351c_prof);

    }

    public function getTemplateName()
    {
        return "default/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 93,  213 => 92,  209 => 91,  196 => 80,  190 => 76,  184 => 73,  176 => 68,  170 => 65,  161 => 61,  154 => 57,  149 => 54,  137 => 43,  133 => 35,  122 => 26,  116 => 25,  105 => 8,  92 => 6,  85 => 101,  83 => 25,  79 => 23,  73 => 19,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  52 => 13,  47 => 11,  43 => 10,  38 => 9,  36 => 8,  33 => 7,  31 => 6,  25 => 2,);
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
/*           <div class="col-md-12">*/
/*             {# {% for epreuve in epreuves %} #}*/
/*                   <div class="col-md-1 vide"></div>*/
/*                   <div class="col-md-3 art">*/
/*                       <div class="col-md-12">*/
/*                           <img  src="{{ asset ('img/nat.jpg') }}" />*/
/*                       </div>*/
/*                       <div class="col-md-12 txt">Bla blaBla blaBla blaBla blaBla blaBla blaBla blaBla bla*/
/*                       </div>*/
/*                       <div class="col-md-12 voir"><a href="{{ path('show') }}"><img  src="{{ asset ('img/voir.png') }}" /></a></div>*/
/*                   </div>*/
/*                   <div class="col-md-3 art">*/
/*                     <div class="col-md-12">*/
/*                       <img  src="{{ asset ('img/esc.jpg') }}" />*/
/*                     </div>*/
/*                     <div class="col-md-12 txt">Bla blaBla blaBla blaBla blaBla blaBla blaBla blaBla blaBla bla*/
/*                     </div><div class="col-md-12 voir"><a href=""><img  src="{{ asset ('img/voir.png') }}" /></a></div>*/
/*                   </div>*/
/*                   */
/*                   <div class="col-md-3 art">*/
/*                     <div class="col-md-12">*/
/*                       <img  src="{{ asset ('img/golf.jpg') }}" />*/
/*                     </div>*/
/*                     <div class="col-md-12 txt">Bla blaBla blaBla blaBla blaBla blaBla blaBla blaBla blaBla bla*/
/*                     </div><div class="col-md-12 voir"><a href=""><img  src="{{ asset ('img/voir.png') }}" /></a></div>*/
/*                   </div>*/
/*                   <div class="col-md-1 vide"></div>*/
/*             {# {% endfor %} #}*/
/*           </div>*/
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
