<?php

/* index.twig */
class __TwigTemplate_5e9d4942cb3760b07a1886206e4a1fedfc753514efba62884b45ff668f50bec3 extends Twig_Template
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
        $this->loadTemplate("_header.twig", "index.twig", 1)->display($context);
        // line 2
        echo "
<h1>Welcome to my site</h1>
<p class=\"lead\">All the latest news, tips, and tricks for Bolt CMS.</p>
<hr>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae ratione veniam esse earum, voluptatem itaque in aut reprehenderit nostrum aspernatur minus. Iste iusto, id expedita esse? Dolorem, iusto, ipsam. Incidunt.</p>

";
        // line 8
        $this->loadTemplate("_footer.twig", "index.twig", 8)->display($context);
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 8,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* <h1>Welcome to my site</h1>*/
/* <p class="lead">All the latest news, tips, and tricks for Bolt CMS.</p>*/
/* <hr>*/
/* <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae ratione veniam esse earum, voluptatem itaque in aut reprehenderit nostrum aspernatur minus. Iste iusto, id expedita esse? Dolorem, iusto, ipsam. Incidunt.</p>*/
/* */
/* {% include '_footer.twig' %}*/
