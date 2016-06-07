<?php

/* links.twig */
class __TwigTemplate_8c7e7746439a79569794f7728bb8ac2204c9189e7f37666abe8e25ea94853d0f extends Twig_Template
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
        $this->loadTemplate("_header.twig", "links.twig", 1)->display($context);
        // line 2
        echo "
<h1 class=\"center\">Links</h1>
<br>

<div class=\"row-eq-height\">
    ";
        // line 7
        $template_storage = new Bolt\Storage($context['app']);
        $context['links'] =         $template_storage->getContent("link", array() );
        // line 8
        echo "
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 10
            echo "
        <div class=\"col-md-4\">
            <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "url", array()), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute($context["link"], "image", array())), "html", null, true);
            echo "\" class=\"img-responsive logo centered\"></a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
</div>

";
        // line 18
        $this->loadTemplate("_footer.twig", "links.twig", 18)->display($context);
    }

    public function getTemplateName()
    {
        return "links.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 18,  53 => 15,  42 => 12,  38 => 10,  34 => 9,  31 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* <h1 class="center">Links</h1>*/
/* <br>*/
/* */
/* <div class="row-eq-height">*/
/*     {% setcontent links = "link" %}*/
/* */
/*     {% for link in links %}*/
/* */
/*         <div class="col-md-4">*/
/*             <a href="{{ link.url }}"><img src="{{ image(link.image) }}" class="img-responsive logo centered"></a>*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/* </div>*/
/* */
/* {% include '_footer.twig' %}*/
/* */
