<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_90926815a320bef6153c549cc2cff0093fe3a633921b0425b0adc8ba8ec514d2 extends Twig_Template
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
        $__internal_395f628101fc19b5fe1c4d573dad4a0ffe183fed19c475559b60bf1d69c2515c = $this->env->getExtension("native_profiler");
        $__internal_395f628101fc19b5fe1c4d573dad4a0ffe183fed19c475559b60bf1d69c2515c->enter($__internal_395f628101fc19b5fe1c4d573dad4a0ffe183fed19c475559b60bf1d69c2515c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_395f628101fc19b5fe1c4d573dad4a0ffe183fed19c475559b60bf1d69c2515c->leave($__internal_395f628101fc19b5fe1c4d573dad4a0ffe183fed19c475559b60bf1d69c2515c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b5d03991104aea4475e14116b8b781e6f215cd0938c806fdcef91bfc43e3b66 = $this->env->getExtension("native_profiler");
        $__internal_3b5d03991104aea4475e14116b8b781e6f215cd0938c806fdcef91bfc43e3b66->enter($__internal_3b5d03991104aea4475e14116b8b781e6f215cd0938c806fdcef91bfc43e3b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3b5d03991104aea4475e14116b8b781e6f215cd0938c806fdcef91bfc43e3b66->leave($__internal_3b5d03991104aea4475e14116b8b781e6f215cd0938c806fdcef91bfc43e3b66_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8535077c038dd4402055f59755469f3b322de54946f3f6b260ae37127d383796 = $this->env->getExtension("native_profiler");
        $__internal_8535077c038dd4402055f59755469f3b322de54946f3f6b260ae37127d383796->enter($__internal_8535077c038dd4402055f59755469f3b322de54946f3f6b260ae37127d383796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8535077c038dd4402055f59755469f3b322de54946f3f6b260ae37127d383796->leave($__internal_8535077c038dd4402055f59755469f3b322de54946f3f6b260ae37127d383796_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f544bf088e3f72604163bedd5ca778f08eb8e024c6e65fb761a91ac8c468fae = $this->env->getExtension("native_profiler");
        $__internal_2f544bf088e3f72604163bedd5ca778f08eb8e024c6e65fb761a91ac8c468fae->enter($__internal_2f544bf088e3f72604163bedd5ca778f08eb8e024c6e65fb761a91ac8c468fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2f544bf088e3f72604163bedd5ca778f08eb8e024c6e65fb761a91ac8c468fae->leave($__internal_2f544bf088e3f72604163bedd5ca778f08eb8e024c6e65fb761a91ac8c468fae_prof);

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
