<?php

/* picture.twig */
class __TwigTemplate_d318f3ffdfa78d9989e57dcb55d7783cad225d521f1afbfbe004ab2c25fcb46a extends Twig_Template
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
        $this->loadTemplate("_header.twig", "picture.twig", 1)->display($context);
        // line 2
        echo "
<img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image", array())), "html", null, true);
        echo "\" class=\"img-responsive\">

";
        // line 5
        $this->loadTemplate("_footer.twig", "picture.twig", 5)->display($context);
    }

    public function getTemplateName()
    {
        return "picture.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* <img src="{{ image(record.image) }}" class="img-responsive">*/
/* */
/* {% include '_footer.twig' %}*/
/* */
