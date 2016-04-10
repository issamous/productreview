<?php

/* base.html.twig */
class __TwigTemplate_50bb03a2f0c4c96b04af207b7da2864a895dbdaf95348d2676c69b134372d624 extends Twig_Template
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
        $__internal_a6d6cafa2414a3a2a297a8e72520ad00d2e0198359aacc0bfe94f574f737bd4f = $this->env->getExtension("native_profiler");
        $__internal_a6d6cafa2414a3a2a297a8e72520ad00d2e0198359aacc0bfe94f574f737bd4f->enter($__internal_a6d6cafa2414a3a2a297a8e72520ad00d2e0198359aacc0bfe94f574f737bd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a6d6cafa2414a3a2a297a8e72520ad00d2e0198359aacc0bfe94f574f737bd4f->leave($__internal_a6d6cafa2414a3a2a297a8e72520ad00d2e0198359aacc0bfe94f574f737bd4f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a886a9345e0290a7f8eb8dd5a3272e2d584751a7c46652715aad59f7fad02823 = $this->env->getExtension("native_profiler");
        $__internal_a886a9345e0290a7f8eb8dd5a3272e2d584751a7c46652715aad59f7fad02823->enter($__internal_a886a9345e0290a7f8eb8dd5a3272e2d584751a7c46652715aad59f7fad02823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a886a9345e0290a7f8eb8dd5a3272e2d584751a7c46652715aad59f7fad02823->leave($__internal_a886a9345e0290a7f8eb8dd5a3272e2d584751a7c46652715aad59f7fad02823_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_defe370a6301513ad66c94e5d33b6a81a7367eaef576d26a5564db00e7a11d72 = $this->env->getExtension("native_profiler");
        $__internal_defe370a6301513ad66c94e5d33b6a81a7367eaef576d26a5564db00e7a11d72->enter($__internal_defe370a6301513ad66c94e5d33b6a81a7367eaef576d26a5564db00e7a11d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_defe370a6301513ad66c94e5d33b6a81a7367eaef576d26a5564db00e7a11d72->leave($__internal_defe370a6301513ad66c94e5d33b6a81a7367eaef576d26a5564db00e7a11d72_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_186e37acf86ab39cb6585eafde27076b39c6f616ed8ea53bd8c6b25e603aab84 = $this->env->getExtension("native_profiler");
        $__internal_186e37acf86ab39cb6585eafde27076b39c6f616ed8ea53bd8c6b25e603aab84->enter($__internal_186e37acf86ab39cb6585eafde27076b39c6f616ed8ea53bd8c6b25e603aab84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_186e37acf86ab39cb6585eafde27076b39c6f616ed8ea53bd8c6b25e603aab84->leave($__internal_186e37acf86ab39cb6585eafde27076b39c6f616ed8ea53bd8c6b25e603aab84_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ac81393326800565612866453c907478ab45c5191bf97ce6900a586077372b17 = $this->env->getExtension("native_profiler");
        $__internal_ac81393326800565612866453c907478ab45c5191bf97ce6900a586077372b17->enter($__internal_ac81393326800565612866453c907478ab45c5191bf97ce6900a586077372b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ac81393326800565612866453c907478ab45c5191bf97ce6900a586077372b17->leave($__internal_ac81393326800565612866453c907478ab45c5191bf97ce6900a586077372b17_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
