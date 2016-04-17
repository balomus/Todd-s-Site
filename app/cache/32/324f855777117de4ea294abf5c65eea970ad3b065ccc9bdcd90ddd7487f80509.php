<?php

/* index.twig */
class __TwigTemplate_a27f06accb4b4e4dd0eddc916f3fec43bfb89dc1cad5e8d6cc0173d6d4c01cce extends Twig_Template
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
        // line 1
        $this->loadTemplate("_header.twig", "index.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $template_storage = new Bolt\Storage($context['app']);
        $context['home'] =         $template_storage->getContent("home", array() );
        // line 4
        echo "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["home"]);
        foreach ($context['_seq'] as $context["_key"] => $context["home"]) {
            // line 6
            echo "
<h1>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["home"], "title", array()), "html", null, true);
            echo "</h1>
<p class=\"lead\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["home"], "subtitle", array()), "html", null, true);
            echo "</p>
<hr>
<p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["home"], "body", array()), "html", null, true);
            echo "</p>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['home'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
";
        // line 14
        $this->loadTemplate("_footer.twig", "index.twig", 14)->display($context);
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  55 => 13,  46 => 10,  41 => 8,  37 => 7,  34 => 6,  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* {% setcontent home = 'home' %}*/
/* */
/* {% for home in home %}*/
/* */
/* <h1>{{ home.title }}</h1>*/
/* <p class="lead">{{ home.subtitle }}</p>*/
/* <hr>*/
/* <p>{{ home.body }}</p>*/
/* */
/* {% endfor %}*/
/* */
/* {% include '_footer.twig' %}*/
