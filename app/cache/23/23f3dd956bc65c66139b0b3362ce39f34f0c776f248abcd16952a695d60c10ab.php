<?php

/* rulechanges.twig */
class __TwigTemplate_0a7d4851e805a15610492a9d41488fae8c34138e4b9e3c112a838454765edae6 extends Twig_Template
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
        $this->loadTemplate("_header.twig", "rulechanges.twig", 1)->display($context);
        // line 2
        echo "
<h1 class=\"center\"><a href=\"#Basketball\"><i class=\"icon-nba\"></i> Basketball Rules Changes</a></h1>
<h1 class=\"center\"><a href=\"#Football\"><i class=\"icon-nfl\"></i> Football Rules Changes</a></h1>

<br>
";
        // line 7
        $template_storage = new Bolt\Storage($context['app']);
        $context['rulechanges'] =         $template_storage->getContent("rulechange", array() );
        // line 8
        echo "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rulechanges"]) ? $context["rulechanges"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["rulechange"]) {
            // line 10
            echo "
\t<img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute($context["rulechange"], "logo", array())), "html", null, true);
            echo "\" class=\"img-responsive centered\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rulechange"], "sport", array()), "html", null, true);
            echo "\">

\t";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["rulechange"], "text", array()), "html", null, true);
            echo "


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rulechange'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
";
        // line 18
        $this->loadTemplate("_footer.twig", "rulechanges.twig", 18)->display($context);
    }

    public function getTemplateName()
    {
        return "rulechanges.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 18,  58 => 17,  48 => 13,  41 => 11,  38 => 10,  34 => 9,  31 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* <h1 class="center"><a href="#Basketball"><i class="icon-nba"></i> Basketball Rules Changes</a></h1>*/
/* <h1 class="center"><a href="#Football"><i class="icon-nfl"></i> Football Rules Changes</a></h1>*/
/* */
/* <br>*/
/* {% setcontent rulechanges = "rulechange" %}*/
/* */
/* {% for rulechange in rulechanges %}*/
/* */
/* 	<img src="{{ image(rulechange.logo) }}" class="img-responsive centered" id="{{ rulechange.sport }}">*/
/* */
/* 	{{ rulechange.text }}*/
/* */
/* */
/* {% endfor %}*/
/* */
/* {% include '_footer.twig' %}*/
/* */
