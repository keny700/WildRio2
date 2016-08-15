<?php

/* base.html.twig */
class __TwigTemplate_9b38251d50346dca67182b669a963ec081e961f0a27c61e3e46511be7d50e30d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59228c7ca023ea1bcf0985336ad96da3d5ab0d42fd59f88d41193dd8a9f8f2d9 = $this->env->getExtension("native_profiler");
        $__internal_59228c7ca023ea1bcf0985336ad96da3d5ab0d42fd59f88d41193dd8a9f8f2d9->enter($__internal_59228c7ca023ea1bcf0985336ad96da3d5ab0d42fd59f88d41193dd8a9f8f2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/stylesheet.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://cdn.datatables.net/1.10.12/css/jquery.dataTables.css"), "html", null, true);
        echo "\">
  
        <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.2.3.min.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://code.highcharts.com/highcharts.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://code.highcharts.com/modules/exporting.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/onglet.js"), "html", null, true);
        echo "\" ></script>   
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 23
        echo "        <nav class=\"navbar navbar-default\">
          <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
              <a class=\"navbar-brand\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
              <ul class=\"nav navbar-nav\">
              </ul>
              <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#\">Bienvenue ";
        // line 41
        echo "</a></li>
                <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("user_logout");
        echo "\">LOGOUT</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "    </body>
</html>
";
        
        $__internal_59228c7ca023ea1bcf0985336ad96da3d5ab0d42fd59f88d41193dd8a9f8f2d9->leave($__internal_59228c7ca023ea1bcf0985336ad96da3d5ab0d42fd59f88d41193dd8a9f8f2d9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dca27a4c6cd5de965a8b849bffff4c55943f8f841c74a0e612129e3840520889 = $this->env->getExtension("native_profiler");
        $__internal_dca27a4c6cd5de965a8b849bffff4c55943f8f841c74a0e612129e3840520889->enter($__internal_dca27a4c6cd5de965a8b849bffff4c55943f8f841c74a0e612129e3840520889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to Survirvor!";
        
        $__internal_dca27a4c6cd5de965a8b849bffff4c55943f8f841c74a0e612129e3840520889->leave($__internal_dca27a4c6cd5de965a8b849bffff4c55943f8f841c74a0e612129e3840520889_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5ffa00312673e328808eae3d373b8fb8a0fc0e76376af7087e15ee030975baa2 = $this->env->getExtension("native_profiler");
        $__internal_5ffa00312673e328808eae3d373b8fb8a0fc0e76376af7087e15ee030975baa2->enter($__internal_5ffa00312673e328808eae3d373b8fb8a0fc0e76376af7087e15ee030975baa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5ffa00312673e328808eae3d373b8fb8a0fc0e76376af7087e15ee030975baa2->leave($__internal_5ffa00312673e328808eae3d373b8fb8a0fc0e76376af7087e15ee030975baa2_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_83725e611d5232b142e9c8ae43e1a8db7bca2d4e84bf7a1e7154900b84e2ee50 = $this->env->getExtension("native_profiler");
        $__internal_83725e611d5232b142e9c8ae43e1a8db7bca2d4e84bf7a1e7154900b84e2ee50->enter($__internal_83725e611d5232b142e9c8ae43e1a8db7bca2d4e84bf7a1e7154900b84e2ee50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_83725e611d5232b142e9c8ae43e1a8db7bca2d4e84bf7a1e7154900b84e2ee50->leave($__internal_83725e611d5232b142e9c8ae43e1a8db7bca2d4e84bf7a1e7154900b84e2ee50_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7b0c8aadffaeb5a47d8cf3ce4c7d1460929877034e42121c9d3d7382798bf398 = $this->env->getExtension("native_profiler");
        $__internal_7b0c8aadffaeb5a47d8cf3ce4c7d1460929877034e42121c9d3d7382798bf398->enter($__internal_7b0c8aadffaeb5a47d8cf3ce4c7d1460929877034e42121c9d3d7382798bf398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7b0c8aadffaeb5a47d8cf3ce4c7d1460929877034e42121c9d3d7382798bf398->leave($__internal_7b0c8aadffaeb5a47d8cf3ce4c7d1460929877034e42121c9d3d7382798bf398_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 49,  151 => 48,  140 => 6,  128 => 5,  119 => 50,  116 => 49,  114 => 48,  105 => 42,  102 => 41,  91 => 33,  79 => 23,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  52 => 11,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome to Survirvor!{% endblock %}</title>*/
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
/*     <body>*/
/*         {#*/
/*             My NavBAr*/
/*         #}*/
/*         <nav class="navbar navbar-default">*/
/*           <div class="container-fluid">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*               </button>*/
/*               <a class="navbar-brand" href="{{ path('home') }}"></a>*/
/*             </div>*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*               <ul class="nav navbar-nav">*/
/*               </ul>*/
/*               <ul class="nav navbar-nav navbar-right">*/
/*                 <li><a href="#">Bienvenue {# {{ app.user.username }} #}</a></li>*/
/*                 <li><a href="{{ path('user_logout') }}">LOGOUT</a></li>*/
/*               </ul>*/
/*             </div><!-- /.navbar-collapse -->*/
/*           </div><!-- /.container-fluid -->*/
/*         </nav>*/
/* */
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
