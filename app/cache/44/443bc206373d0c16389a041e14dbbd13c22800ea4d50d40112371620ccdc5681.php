<?php

/* boardmember.twig */
class __TwigTemplate_03e7b59ff9f5780160a04f102ada6d89cfe8296d6678d5c87b36f813af688ce3 extends Twig_Template
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
        $this->loadTemplate("_header.twig", "boardmember.twig", 1)->display($context);
        // line 2
        echo "
<article>
  \t<header class=\"article__header\">
    \t<h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "html", null, true);
        echo "</h1>
    \t<hr>
  \t</header>
  \t<div class=\"article__body\">
    \t<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image", array())), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "name", array()), "html", null, true);
        echo "\" class=\"pull-left img-responsive\" width=\"120\" height=\"120\" style=\"margin-right: 12px;\">
    \t";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "body", array()), "html", null, true);
        echo "
  \t</div>
</article>

";
        // line 14
        $this->loadTemplate("_footer.twig", "boardmember.twig", 14)->display($context);
    }

    public function getTemplateName()
    {
        return "boardmember.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,  39 => 10,  33 => 9,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* <article>*/
/*   	<header class="article__header">*/
/*     	<h1>{{ record.title }}</h1>*/
/*     	<hr>*/
/*   	</header>*/
/*   	<div class="article__body">*/
/*     	<img src="{{ image(record.image) }}" alt="{{ record.name }}" class="pull-left img-responsive" width="120" height="120" style="margin-right: 12px;">*/
/*     	{{ record.body }}*/
/*   	</div>*/
/* </article>*/
/* */
/* {% include '_footer.twig' %}*/
