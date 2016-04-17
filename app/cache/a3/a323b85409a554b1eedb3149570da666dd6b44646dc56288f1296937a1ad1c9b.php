<?php

/* newsitem.twig */
class __TwigTemplate_5a5548db43d207226d188ca79226f3a338c1c32d6a553c4355ebfa6f5376f2b2 extends Twig_Template
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
        $this->loadTemplate("_header.twig", "newsitem.twig", 1)->display($context);
        // line 2
        echo "
<article>
  <header class=\"article__header\">
    <h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "html", null, true);
        echo "</h1>
    <p class=\"lead\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "excerpt", array()), "html", null, true);
        echo "</p>
    <hr>
  </header>
  <div class=\"article__body\">
    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image", array())), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "html", null, true);
        echo "\" class=\"pull-left\" width=\"120\" height=\"120\" style=\"margin-right: 12px;\">
    ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "body", array()), "html", null, true);
        echo "
  </div>
</article>

";
        // line 15
        $this->loadTemplate("_footer.twig", "newsitem.twig", 15)->display($context);
    }

    public function getTemplateName()
    {
        return "newsitem.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  43 => 11,  37 => 10,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* <article>*/
/*   <header class="article__header">*/
/*     <h1>{{ record.title }}</h1>*/
/*     <p class="lead">{{ record.excerpt }}</p>*/
/*     <hr>*/
/*   </header>*/
/*   <div class="article__body">*/
/*     <img src="{{ image(record.image) }}" alt="{{ record.title }}" class="pull-left" width="120" height="120" style="margin-right: 12px;">*/
/*     {{ record.body }}*/
/*   </div>*/
/* </article>*/
/* */
/* {% include '_footer.twig' %}*/
