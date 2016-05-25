<?php

/* constitutionandbylaws.twig */
class __TwigTemplate_08bce7e2a31e7ae85a457976adbd89147cfdbb4d874047b643e42609f60e9c01 extends Twig_Template
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
        $this->loadTemplate("_header.twig", "constitutionandbylaws.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $template_storage = new Bolt\Storage($context['app']);
        $context['constitutionandbylaws'] =         $template_storage->getContent("constitutionorbylaw", array() );
        // line 4
        echo "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["constitutionandbylaws"]) ? $context["constitutionandbylaws"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["constitutionorbylaw"]) {
            // line 6
            echo "
    <h2>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["constitutionorbylaw"], "name", array()), "html", null, true);
            echo "</h2>
    <p>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["constitutionorbylaw"], "content", array()), "html", null, true);
            echo "</p>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['constitutionorbylaw'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
";
        // line 12
        $this->loadTemplate("_footer.twig", "constitutionandbylaws.twig", 12)->display($context);
    }

    public function getTemplateName()
    {
        return "constitutionandbylaws.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  50 => 11,  41 => 8,  37 => 7,  34 => 6,  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* {% setcontent constitutionandbylaws = "constitutionorbylaw" %}*/
/* */
/* {% for constitutionorbylaw in constitutionandbylaws %}*/
/* */
/*     <h2>{{ constitutionorbylaw.name }}</h2>*/
/*     <p>{{ constitutionorbylaw.content }}</p>*/
/* */
/* {% endfor %}*/
/* */
/* {% include '_footer.twig' %}*/
/* */
