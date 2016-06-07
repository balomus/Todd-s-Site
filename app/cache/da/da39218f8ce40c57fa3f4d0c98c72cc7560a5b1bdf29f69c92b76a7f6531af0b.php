<?php

/* gamefees.twig */
class __TwigTemplate_24a998b17625a5f0b2bb3a4069c69df94faaf689043dbee9afba750792cfae16 extends Twig_Template
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
        $this->loadTemplate("_header.twig", "gamefees.twig", 1)->display($context);
        // line 2
        echo "
<h1 class=\"center\">Game Fees</h1>

";
        // line 5
        $template_storage = new Bolt\Storage($context['app']);
        $context['gamefees'] =         $template_storage->getContent("gamefee", array() );
        // line 6
        echo "
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gamefees"]) ? $context["gamefees"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["gamefee"]) {
            // line 8
            echo "
<h2>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["gamefee"], "sport", array()), "html", null, true);
            echo "</h2>
<p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["gamefee"], "content", array()), "html", null, true);
            echo "</p>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gamefee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
";
        // line 14
        $this->loadTemplate("_footer.twig", "gamefees.twig", 14)->display($context);
    }

    public function getTemplateName()
    {
        return "gamefees.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  52 => 13,  43 => 10,  39 => 9,  36 => 8,  32 => 7,  29 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* <h1 class="center">Game Fees</h1>*/
/* */
/* {% setcontent gamefees = "gamefee" %}*/
/* */
/* {% for gamefee in gamefees %}*/
/* */
/* <h2>{{ gamefee.sport }}</h2>*/
/* <p>{{ gamefee.content }}</p>*/
/* */
/* {% endfor %}*/
/* */
/* {% include '_footer.twig' %}*/
/* */
