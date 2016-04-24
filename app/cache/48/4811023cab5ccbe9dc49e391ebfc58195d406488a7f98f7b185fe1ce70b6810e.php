<?php

/* home.twig */
class __TwigTemplate_be4cfc8aae1c752f355e53ddb7ff6837180f99ce44dcd3da67b4d09f3f22f1f5 extends Twig_Template
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
        $this->loadTemplate("_header.twig", "home.twig", 1)->display($context);
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
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute($context["home"], "image", array())), "html", null, true);
            echo "\" class=\"img-responsive\">
<h1>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["home"], "title", array()), "html", null, true);
            echo "</h1>
<p class=\"lead\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["home"], "subtitle", array()), "html", null, true);
            echo "</p>
<hr>
<h2>About SOA</h2>
<p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["home"], "mission_statement", array()), "html", null, true);
            echo "</p>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['home'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
";
        // line 15
        $this->loadTemplate("_footer.twig", "home.twig", 15)->display($context);
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 15,  58 => 14,  49 => 11,  43 => 8,  39 => 7,  34 => 6,  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* {% setcontent home = 'home' %}*/
/* */
/* {% for home in home %}*/
/* <img src="{{ image(home.image) }}" class="img-responsive">*/
/* <h1>{{ home.title }}</h1>*/
/* <p class="lead">{{ home.subtitle }}</p>*/
/* <hr>*/
/* <h2>About SOA</h2>*/
/* <p>{{ home.mission_statement }}</p>*/
/* */
/* {% endfor %}*/
/* */
/* {% include '_footer.twig' %}*/
