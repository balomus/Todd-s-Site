<?php

/* rulechanges.twig */
class __TwigTemplate_f8878eb3bdb810d90f1cdc2c01e04fdf8f3d1b6f139842b9614aca72b987aaa3 extends Twig_Template
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
<h1 class=\"center\"><a href=\"#Basketball\">Basketball Rules Changes</a></h1>
<h1 class=\"center\"><a href=\"#Football\">Football Rules Changes</a></h1>
<br>
";
        // line 6
        $template_storage = new Bolt\Storage($context['app']);
        $context['rulechanges'] =         $template_storage->getContent("rulechange", array() );
        // line 7
        echo "
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rulechanges"]) ? $context["rulechanges"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["rulechange"]) {
            // line 9
            echo "
\t<img src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute($context["rulechange"], "logo", array())), "html", null, true);
            echo "\" class=\"img-responsive centered\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rulechange"], "sport", array()), "html", null, true);
            echo "\">

\t";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["rulechange"], "text", array()), "html", null, true);
            echo "


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rulechange'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
";
        // line 17
        $this->loadTemplate("_footer.twig", "rulechanges.twig", 17)->display($context);
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
        return array (  60 => 17,  57 => 16,  47 => 12,  40 => 10,  37 => 9,  33 => 8,  30 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* <h1 class="center"><a href="#Basketball">Basketball Rules Changes</a></h1>*/
/* <h1 class="center"><a href="#Football">Football Rules Changes</a></h1>*/
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
