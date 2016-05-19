<?php

/* socialmediapolicies.twig */
class __TwigTemplate_8bae6ab857358084c3dc6edc8b5e230a79a07cecc548202aa073c6bb3a993899 extends Twig_Template
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
        $this->loadTemplate("_header.twig", "socialmediapolicies.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $template_storage = new Bolt\Storage($context['app']);
        $context['socialmediapolicies'] =         $template_storage->getContent("socialmediapolicy", array() );
        // line 4
        echo "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["socialmediapolicies"]) ? $context["socialmediapolicies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["socialmediapolicy"]) {
            // line 6
            echo "
  ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["socialmediapolicy"], "content", array()), "html", null, true);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['socialmediapolicy'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
";
        // line 11
        $this->loadTemplate("_footer.twig", "socialmediapolicies.twig", 11)->display($context);
    }

    public function getTemplateName()
    {
        return "socialmediapolicies.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  46 => 10,  37 => 7,  34 => 6,  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* {% setcontent socialmediapolicies = "socialmediapolicy" %}*/
/* */
/* {% for socialmediapolicy in socialmediapolicies %}*/
/* */
/*   {{ socialmediapolicy.content }}*/
/* */
/* {% endfor %}*/
/* */
/* {% include '_footer.twig' %}*/
/* */
