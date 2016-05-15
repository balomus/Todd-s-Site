<?php

/* promotionalpoints.twig */
class __TwigTemplate_18cce1706ff93b990a01ba8c6af3c4b7c6e7cc881d939dbdba217ea4f6b575f0 extends Twig_Template
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
        $this->loadTemplate("_header.twig", "promotionalpoints.twig", 1)->display($context);
        // line 2
        echo "

";
        // line 4
        $template_storage = new Bolt\Storage($context['app']);
        $context['promotionalpoints'] =         $template_storage->getContent("promotionalpoint", array() );
        // line 5
        echo "
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promotionalpoints"]) ? $context["promotionalpoints"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["promotionalpoint"]) {
            // line 7
            echo "
\t";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["promotionalpoint"], "text", array()), "html", null, true);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotionalpoint'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
";
        // line 12
        $this->loadTemplate("_footer.twig", "promotionalpoints.twig", 12)->display($context);
    }

    public function getTemplateName()
    {
        return "promotionalpoints.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  47 => 11,  38 => 8,  35 => 7,  31 => 6,  28 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* */
/* {% setcontent promotionalpoints = "promotionalpoint" %}*/
/* */
/* {% for promotionalpoint in promotionalpoints %}*/
/* */
/* 	{{ promotionalpoint.text }}*/
/* */
/* {% endfor %}*/
/* */
/* {% include '_footer.twig' %}*/
