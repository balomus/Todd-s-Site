<?php

/* rulechangesselect.twig */
class __TwigTemplate_57829d1488058818abca968ba8b3b84bbccbd04b36ce8915d0345c91a82097f2 extends Twig_Template
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
        $this->loadTemplate("_header.twig", "rulechangesselect.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $template_storage = new Bolt\Storage($context['app']);
        $context['rulechangesselect'] =         $template_storage->getContent("rulechangeselect", array() );
        // line 4
        echo "
\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rulechangesselect"]) ? $context["rulechangesselect"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["rulechangeselect"]) {
            // line 6
            echo "
\t<img src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute($context["rulechangeselect"], "logo", array())), "html", null, true);
            echo "\" class=\"img-responsive centered\">

\t<h1><a href=\"rulechangesselect\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["rulechangeselect"], "baskeballText", array()), "html", null, true);
            echo "</a></h1>
\t<h1><a href=\"#\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["rulechangeselect"], "footballText", array()), "html", null, true);
            echo "</a></h1>
\t";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["rulechangeselect"], "basketballText", array()), "html", null, true);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rulechangeselect'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
";
        // line 15
        $this->loadTemplate("_footer.twig", "rulechangesselect.twig", 15)->display($context);
    }

    public function getTemplateName()
    {
        return "rulechangesselect.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  59 => 14,  50 => 11,  46 => 10,  42 => 9,  37 => 7,  34 => 6,  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* {% setcontent rulechangesselect = "rulechangeselect" %}*/
/* */
/* 	{% for rulechangeselect in rulechangesselect %}*/
/* */
/* 	<img src="{{ image(rulechangeselect.logo) }}" class="img-responsive centered">*/
/* */
/* 	<h1><a href="rulechangesselect">{{ rulechangeselect.baskeballText }}</a></h1>*/
/* 	<h1><a href="#">{{ rulechangeselect.footballText }}</a></h1>*/
/* 	{{ rulechangeselect.basketballText }}*/
/* */
/* {% endfor %}*/
/* */
/* {% include '_footer.twig' %}*/
