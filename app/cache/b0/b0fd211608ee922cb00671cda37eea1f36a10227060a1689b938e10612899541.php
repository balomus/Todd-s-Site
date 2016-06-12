<?php

/* conflictofinterest.twig */
class __TwigTemplate_de4b9dda3f4bb87d4c2a15c23e6e672621dbc38f87776eafc5ce20fc36c3bcc7 extends Twig_Template
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
        $this->loadTemplate("_header.twig", "conflictofinterest.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["conflictofinterest"]) ? $context["conflictofinterest"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["conflict"]) {
            // line 4
            echo "
    <h1 class=\"center\">";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["conflict"], "title", array()), "html", null, true);
            echo "</h1>

    <p>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["conflict"], "content", array()), "html", null, true);
            echo "</p>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conflict'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
";
        // line 11
        $this->loadTemplate("_footer.twig", "conflictofinterest.twig", 11)->display($context);
    }

    public function getTemplateName()
    {
        return "conflictofinterest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  45 => 10,  36 => 7,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* {% for conflict in conflictofinterest %}*/
/* */
/*     <h1 class="center">{{ conflict.title }}</h1>*/
/* */
/*     <p>{{ conflict.content }}</p>*/
/* */
/* {% endfor %}*/
/* */
/* {% include '_footer.twig' %}*/
/* */
