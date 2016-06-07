<?php

/* pictures.twig */
class __TwigTemplate_fe8581de9af729e1fb7973e4d9cc975c0d66e3f485a3b8683058057f5d768b72 extends Twig_Template
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
        $this->loadTemplate("_header.twig", "pictures.twig", 1)->display($context);
        // line 2
        echo "
<h1 class=\"center\">Pictures</h1>

<div class=\"row\">

    ";
        // line 7
        $template_storage = new Bolt\Storage($context['app']);
        $context['pictures'] =         $template_storage->getContent("picture", array() );
        // line 8
        echo "
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pictures"]) ? $context["pictures"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 10
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["picture"], "imagelist", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 11
                echo "            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                <a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('Bolt')->imageInfo($this->getAttribute($context["image"], "filename", array())), "url", array()), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute($context["image"], "filename", array())), "html", null, true);
                echo "\" class=\"img-responsive limit\"></a>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
</div>

";
        // line 19
        $this->loadTemplate("_footer.twig", "pictures.twig", 19)->display($context);
    }

    public function getTemplateName()
    {
        return "pictures.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 19,  63 => 16,  57 => 15,  46 => 12,  43 => 11,  38 => 10,  34 => 9,  31 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* <h1 class="center">Pictures</h1>*/
/* */
/* <div class="row">*/
/* */
/*     {% setcontent pictures = "picture" %}*/
/* */
/*     {% for picture in pictures %}*/
/*         {% for image in picture.imagelist %}*/
/*             <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">*/
/*                 <a href="{{ imageinfo(image.filename).url }}"><img src="{{ image.filename|image }}" class="img-responsive limit"></a>*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endfor %}*/
/* */
/* </div>*/
/* */
/* {% include '_footer.twig' %}*/
/* */
