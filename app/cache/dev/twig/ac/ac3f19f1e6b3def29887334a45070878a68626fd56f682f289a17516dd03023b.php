<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_05e73c650a8ec554fe7f7b4bbe26dd4ccb6128e7ca25eabe774629d6abea22c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e49877191d4d2419b36dcf963520b578b0873c225a6f8b4db01982ea83ed7c2 = $this->env->getExtension("native_profiler");
        $__internal_8e49877191d4d2419b36dcf963520b578b0873c225a6f8b4db01982ea83ed7c2->enter($__internal_8e49877191d4d2419b36dcf963520b578b0873c225a6f8b4db01982ea83ed7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e49877191d4d2419b36dcf963520b578b0873c225a6f8b4db01982ea83ed7c2->leave($__internal_8e49877191d4d2419b36dcf963520b578b0873c225a6f8b4db01982ea83ed7c2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f34d506ed9e73968da9df75cc08cf4fa632be23828b6df47db67e1ffb7a7a1e1 = $this->env->getExtension("native_profiler");
        $__internal_f34d506ed9e73968da9df75cc08cf4fa632be23828b6df47db67e1ffb7a7a1e1->enter($__internal_f34d506ed9e73968da9df75cc08cf4fa632be23828b6df47db67e1ffb7a7a1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f34d506ed9e73968da9df75cc08cf4fa632be23828b6df47db67e1ffb7a7a1e1->leave($__internal_f34d506ed9e73968da9df75cc08cf4fa632be23828b6df47db67e1ffb7a7a1e1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2536ec8cdc34efcdd9d6a47d467ab47d5851848fad8258298d54bcda21c1f711 = $this->env->getExtension("native_profiler");
        $__internal_2536ec8cdc34efcdd9d6a47d467ab47d5851848fad8258298d54bcda21c1f711->enter($__internal_2536ec8cdc34efcdd9d6a47d467ab47d5851848fad8258298d54bcda21c1f711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2536ec8cdc34efcdd9d6a47d467ab47d5851848fad8258298d54bcda21c1f711->leave($__internal_2536ec8cdc34efcdd9d6a47d467ab47d5851848fad8258298d54bcda21c1f711_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2aace1c8f50c2b3734736e059936ef2933b9c71182783d24a6bbebefceae0536 = $this->env->getExtension("native_profiler");
        $__internal_2aace1c8f50c2b3734736e059936ef2933b9c71182783d24a6bbebefceae0536->enter($__internal_2aace1c8f50c2b3734736e059936ef2933b9c71182783d24a6bbebefceae0536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2aace1c8f50c2b3734736e059936ef2933b9c71182783d24a6bbebefceae0536->leave($__internal_2aace1c8f50c2b3734736e059936ef2933b9c71182783d24a6bbebefceae0536_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
