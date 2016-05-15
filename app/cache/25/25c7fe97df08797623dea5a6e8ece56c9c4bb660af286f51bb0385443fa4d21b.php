<?php

/* committees.twig */
class __TwigTemplate_98627f6ad715c7ade92e70abed8f657f844327667f1f9ab97b0858e265fd8747 extends Twig_Template
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
        $this->loadTemplate("_header.twig", "committees.twig", 1)->display($context);
        // line 2
        echo "

";
        // line 4
        $template_storage = new Bolt\Storage($context['app']);
        $context['committees'] =         $template_storage->getContent("committee", array() );
        // line 5
        echo "
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["committees"]) ? $context["committees"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["committee"]) {
            // line 7
            echo "
  <h2>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["committee"], "committee", array()), "html", null, true);
            echo "</h2>
\t<p>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["committee"], "members", array()), "html", null, true);
            echo "</p>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['committee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
";
        // line 13
        $this->loadTemplate("_footer.twig", "committees.twig", 13)->display($context);
    }

    public function getTemplateName()
    {
        return "committees.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  51 => 12,  42 => 9,  38 => 8,  35 => 7,  31 => 6,  28 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* */
/* {% setcontent committees = "committee" %}*/
/* */
/* {% for committee in committees %}*/
/* */
/*   <h2>{{ committee.committee }}</h2>*/
/* 	<p>{{ committee.members }}</p>*/
/* */
/* {% endfor %}*/
/* */
/* {% include '_footer.twig' %}*/
/* */
