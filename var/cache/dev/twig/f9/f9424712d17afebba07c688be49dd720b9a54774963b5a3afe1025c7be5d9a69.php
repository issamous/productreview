<?php

/* base.html.twig */
class __TwigTemplate_086c8d6194ddad1c039094e02ff76df23e5a0efa0e2436cddd28430250932b09 extends Twig_Template
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
        $__internal_afb7fa9cd0efca776fc1c096e54e8886a2d5e3e0980e5bde992c1e348bb8e1db = $this->env->getExtension("native_profiler");
        $__internal_afb7fa9cd0efca776fc1c096e54e8886a2d5e3e0980e5bde992c1e348bb8e1db->enter($__internal_afb7fa9cd0efca776fc1c096e54e8886a2d5e3e0980e5bde992c1e348bb8e1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_afb7fa9cd0efca776fc1c096e54e8886a2d5e3e0980e5bde992c1e348bb8e1db->leave($__internal_afb7fa9cd0efca776fc1c096e54e8886a2d5e3e0980e5bde992c1e348bb8e1db_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8166e6cebaaed36e7f74bc9a19e4dce687260b3fc5f521c2f27a7efc8274a2a = $this->env->getExtension("native_profiler");
        $__internal_a8166e6cebaaed36e7f74bc9a19e4dce687260b3fc5f521c2f27a7efc8274a2a->enter($__internal_a8166e6cebaaed36e7f74bc9a19e4dce687260b3fc5f521c2f27a7efc8274a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a8166e6cebaaed36e7f74bc9a19e4dce687260b3fc5f521c2f27a7efc8274a2a->leave($__internal_a8166e6cebaaed36e7f74bc9a19e4dce687260b3fc5f521c2f27a7efc8274a2a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e8bf1030748ae42c1d67b2c466c37d6c832e58c42f84e4490fe67da9808e91eb = $this->env->getExtension("native_profiler");
        $__internal_e8bf1030748ae42c1d67b2c466c37d6c832e58c42f84e4490fe67da9808e91eb->enter($__internal_e8bf1030748ae42c1d67b2c466c37d6c832e58c42f84e4490fe67da9808e91eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e8bf1030748ae42c1d67b2c466c37d6c832e58c42f84e4490fe67da9808e91eb->leave($__internal_e8bf1030748ae42c1d67b2c466c37d6c832e58c42f84e4490fe67da9808e91eb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_706eeb4f818574736f86cb3eb42e0117f822179545d06679e7741aa97e3bddaf = $this->env->getExtension("native_profiler");
        $__internal_706eeb4f818574736f86cb3eb42e0117f822179545d06679e7741aa97e3bddaf->enter($__internal_706eeb4f818574736f86cb3eb42e0117f822179545d06679e7741aa97e3bddaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_706eeb4f818574736f86cb3eb42e0117f822179545d06679e7741aa97e3bddaf->leave($__internal_706eeb4f818574736f86cb3eb42e0117f822179545d06679e7741aa97e3bddaf_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_656e138d722bcbdd2f3ce223a591838b200f8b880cde3b636e413a819d0bfd62 = $this->env->getExtension("native_profiler");
        $__internal_656e138d722bcbdd2f3ce223a591838b200f8b880cde3b636e413a819d0bfd62->enter($__internal_656e138d722bcbdd2f3ce223a591838b200f8b880cde3b636e413a819d0bfd62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_656e138d722bcbdd2f3ce223a591838b200f8b880cde3b636e413a819d0bfd62->leave($__internal_656e138d722bcbdd2f3ce223a591838b200f8b880cde3b636e413a819d0bfd62_prof);

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
