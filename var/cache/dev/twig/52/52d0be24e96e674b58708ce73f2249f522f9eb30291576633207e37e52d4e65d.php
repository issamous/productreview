<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_052d57704a405ac0e394cebb58914e0dfd98b97fa7d60779224334cf5e4ce1bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9429b15d99732c2e299ae8438206a7c9a811a267d2eef0ab21309b2fdbe482b = $this->env->getExtension("native_profiler");
        $__internal_d9429b15d99732c2e299ae8438206a7c9a811a267d2eef0ab21309b2fdbe482b->enter($__internal_d9429b15d99732c2e299ae8438206a7c9a811a267d2eef0ab21309b2fdbe482b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9429b15d99732c2e299ae8438206a7c9a811a267d2eef0ab21309b2fdbe482b->leave($__internal_d9429b15d99732c2e299ae8438206a7c9a811a267d2eef0ab21309b2fdbe482b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5f636dae05c4eb0af18381ceb8b46497426142973dc2a9f34a58934f0f0a5c72 = $this->env->getExtension("native_profiler");
        $__internal_5f636dae05c4eb0af18381ceb8b46497426142973dc2a9f34a58934f0f0a5c72->enter($__internal_5f636dae05c4eb0af18381ceb8b46497426142973dc2a9f34a58934f0f0a5c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5f636dae05c4eb0af18381ceb8b46497426142973dc2a9f34a58934f0f0a5c72->leave($__internal_5f636dae05c4eb0af18381ceb8b46497426142973dc2a9f34a58934f0f0a5c72_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c920aa968dabe2b61a1958f409bd9f191a1ba58914fc5ecca2f501771b27e103 = $this->env->getExtension("native_profiler");
        $__internal_c920aa968dabe2b61a1958f409bd9f191a1ba58914fc5ecca2f501771b27e103->enter($__internal_c920aa968dabe2b61a1958f409bd9f191a1ba58914fc5ecca2f501771b27e103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c920aa968dabe2b61a1958f409bd9f191a1ba58914fc5ecca2f501771b27e103->leave($__internal_c920aa968dabe2b61a1958f409bd9f191a1ba58914fc5ecca2f501771b27e103_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5dd4662863532813e1760afb15154808107fc6bde876e54dfea495443dc79420 = $this->env->getExtension("native_profiler");
        $__internal_5dd4662863532813e1760afb15154808107fc6bde876e54dfea495443dc79420->enter($__internal_5dd4662863532813e1760afb15154808107fc6bde876e54dfea495443dc79420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5dd4662863532813e1760afb15154808107fc6bde876e54dfea495443dc79420->leave($__internal_5dd4662863532813e1760afb15154808107fc6bde876e54dfea495443dc79420_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
