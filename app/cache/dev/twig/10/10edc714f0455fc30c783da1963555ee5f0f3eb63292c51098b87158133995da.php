<?php

/* default/login.html.twig */
class __TwigTemplate_1b710056d05b96534efbf3a6f8d209b656266bc3c4fd1b9ab6291e6495e06f2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7541b3e74dcc29503e177f76d22d6d16029ea827ecbc801b115940c3e0776db9 = $this->env->getExtension("native_profiler");
        $__internal_7541b3e74dcc29503e177f76d22d6d16029ea827ecbc801b115940c3e0776db9->enter($__internal_7541b3e74dcc29503e177f76d22d6d16029ea827ecbc801b115940c3e0776db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        // line 1
        echo "

";
        // line 4
        echo "

";
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
<form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    \t\t\t  <h2>Connexion</h2>
                  <hr/>
                  <div class=\"col-md-12\">
                  <label for=\"username\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                  </div>
                   <div class=\"col-md-12\">
                  <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                    </div>
                   <div class=\"col-md-12\"> 
                   <label for=\"password\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                   </div>
                    <div class=\"col-md-12\">
                   <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                   </div>
                  <hr/>
                  <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />


    
</form>
 
                  

";
        
        $__internal_7541b3e74dcc29503e177f76d22d6d16029ea827ecbc801b115940c3e0776db9->leave($__internal_7541b3e74dcc29503e177f76d22d6d16029ea827ecbc801b115940c3e0776db9_prof);

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
        return array (  74 => 28,  65 => 22,  59 => 19,  53 => 16,  45 => 11,  41 => 10,  38 => 9,  32 => 7,  30 => 6,  26 => 4,  22 => 1,);
    }
}
/* */
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*     			  <h2>Connexion</h2>*/
/*                   <hr/>*/
/*                   <div class="col-md-12">*/
/*                   <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*                   </div>*/
/*                    <div class="col-md-12">*/
/*                   <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*                     </div>*/
/*                    <div class="col-md-12"> */
/*                    <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*                    </div>*/
/*                     <div class="col-md-12">*/
/*                    <input type="password" id="password" name="_password" required="required" />*/
/*                    </div>*/
/*                   <hr/>*/
/*                   <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/* */
/* */
/*     */
/* </form>*/
/*  */
/*                   */
/* */
/* {# */
/*                   <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*     <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*     <input type="password" id="password" name="_password" required="required" />*/
/* */
/*     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/* */
/*     <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" /> #}*/
