<?php

/* _sub/_csrf_token.twig */
class __TwigTemplate_a99cdba769c3a71eb5ff0b43d572a27ae88fb72e9643a32aaaec591e2cf00180 extends Twig_Template
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
        echo "<input type=\"hidden\" name=\"bolt_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->token(), "html", null, true);
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "_sub/_csrf_token.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <input type="hidden" name="bolt_csrf_token" value="{{ token() }}">*/
/* */
