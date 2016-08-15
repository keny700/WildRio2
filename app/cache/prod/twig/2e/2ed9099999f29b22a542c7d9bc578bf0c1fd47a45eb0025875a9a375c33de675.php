<?php

/* default/login.html.twig */
class __TwigTemplate_443c966ed20fd9f072cceb4f9e262e45483900df49964574e5b9b1e1be54cc8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("yourFavIcon.png"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/stylesheet.css"), "html", null, true);
        echo "\">
        <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" ></script>
        <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script> 
    </head>

";
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Guessr";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "        <div class=\"container-fluid rambo\">
            <div class=\"col-md-12 vide\"></div>
            <div class=\"col-md-12\">
                
                <div class=\"col-md-4 blanc\">
                    <div class=\"col-md-12\">
                        <h2 class=\"log-title\">GUESSR</h2>
                    </div>
                    <div class=\"col-md-12\">
                        ";
        // line 26
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 27
            echo "                            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 29
        echo "                    </div>
                <div>
                    <form action=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("user_login_check");
        echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />
                        <div class=\"row\">
        <div class=\"col-lg-offset-2 col-md-offset-2 col-lg-8 col-md-8\">
            <label for=\"username\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" placeholder=\"Username\"/>
            </div>
        </div>
    </div>
    <br>

    <div class=\"row\">
        <div class=\"col-lg-offset-2 col-md-offset-2 col-lg-8 col-md-8\">
            <label for=\"password\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Mot de passe\">
            </div>
        </div>
    </div>
    <br>

    <div class=\"row\">
        <div class=\"col-lg-offset-2 col-md-offset-2 col-lg-8 col-md-8\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                </span>
                <label class=\"remember-me form-group\" for=\"remember_me\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            </div>

        </div>
    </div>
    <br>
    <div class=\"row\">
        <div class=\"col-lg-offset-2 col-md-offset-2 col-lg-8 col-md-8\">
            <input class=\"login btn-primary btn-lg\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo " /><a href=\"";
        echo $this->env->getExtension('routing')->getPath("user_register");
        echo "\"><button type=\"button\" class=\"btn btn-primary\">Rejoins nous !</button></a>
        </div>
    </div>
</form>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 69,  143 => 61,  125 => 46,  114 => 38,  108 => 35,  102 => 32,  98 => 31,  94 => 29,  88 => 27,  86 => 26,  75 => 17,  72 => 16,  66 => 5,  62 => 76,  60 => 16,  57 => 15,  51 => 11,  47 => 10,  43 => 9,  39 => 8,  35 => 7,  31 => 6,  27 => 5,  21 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Guessr{% endblock %}</title>*/
/*         <link rel="icon" type="image/png" href="{{ asset('yourFavIcon.png') }}">*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheet.css') }}">*/
/*         <script type="text/javascript" src="{{ asset('js/jquery.js') }}" ></script>*/
/*         <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}" ></script> */
/*     </head>*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/*     {% block body %}*/
/*         <div class="container-fluid rambo">*/
/*             <div class="col-md-12 vide"></div>*/
/*             <div class="col-md-12">*/
/*                 */
/*                 <div class="col-md-4 blanc">*/
/*                     <div class="col-md-12">*/
/*                         <h2 class="log-title">GUESSR</h2>*/
/*                     </div>*/
/*                     <div class="col-md-12">*/
/*                         {% if error %}*/
/*                             <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 <div>*/
/*                     <form action="{{ path("user_login_check") }}" method="post">*/
/*                         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                         <div class="row">*/
/*         <div class="col-lg-offset-2 col-md-offset-2 col-lg-8 col-md-8">*/
/*             <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*             <div class="input-group">*/
/*                 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>*/
/*                 <input class="form-control" type="text" id="username" name="_username" value="{{ last_username }}" required="required" placeholder="Username"/>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <br>*/
/* */
/*     <div class="row">*/
/*         <div class="col-lg-offset-2 col-md-offset-2 col-lg-8 col-md-8">*/
/*             <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*             <div class="input-group">*/
/*                 <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>*/
/*                 <input class="form-control" type="password" id="password" name="_password" required="required" placeholder="Mot de passe">*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <br>*/
/* */
/*     <div class="row">*/
/*         <div class="col-lg-offset-2 col-md-offset-2 col-lg-8 col-md-8">*/
/*             <div class="input-group">*/
/*                 <span class="input-group-addon">*/
/*                 <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                 </span>*/
/*                 <label class="remember-me form-group" for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/*     <br>*/
/*     <div class="row">*/
/*         <div class="col-lg-offset-2 col-md-offset-2 col-lg-8 col-md-8">*/
/*             <input class="login btn-primary btn-lg" type="submit" id="_submit" name="_submit" value={{ 'security.login.submit'|trans }} /><a href="{{ path('user_register') }}"><button type="button" class="btn btn-primary">Rejoins nous !</button></a>*/
/*         </div>*/
/*     </div>*/
/* </form>*/
/* </div>*/
/* </div>*/
/* {% endblock %}*/
/* </html>*/
