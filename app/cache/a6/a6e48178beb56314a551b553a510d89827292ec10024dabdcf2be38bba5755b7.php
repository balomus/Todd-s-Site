<?php

/* news.twig */
class __TwigTemplate_6f09d92f0a84dab2da92c9a473fd375fed61185e9b1028bdf66950c9fff5bde5 extends Twig_Template
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
        $this->loadTemplate("_header.twig", "news.twig", 1)->display($context);
        // line 2
        echo "
<h1 class=\"center\">News</h1>
<p class=\"lead centered\">View all the news articles here.</p>
<hr>

";
        // line 7
        $template_storage = new Bolt\Storage($context['app']);
        $context['news'] =         $template_storage->getContent("news/latest/3", array("paging" => true) );
        // line 8
        echo "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["newsitem"]) {
            // line 10
            echo "
<article class=\"media\">
  <div class=\"media-left\">
    <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsitem"], "link", array()), "html", null, true);
            echo "\">
      <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute($context["newsitem"], "image", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsitem"], "title", array()), "html", null, true);
            echo "\">
    </a>
  </div>
  <div class=\"media-body\">
    <h2 class=\"media-heading\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsitem"], "title", array()), "html", null, true);
            echo "</h2>
    <p class=\"media-excerpt\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsitem"], "excerpt", array()), "html", null, true);
            echo "</p>
    <a href=\"#\" class=\"btn btn-primary btn-sm\">Read Full Article</a>
  </div>
</article>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newsitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->pager($this->env), "html", null, true);
        echo "

<hr>

";
        // line 30
        $this->loadTemplate("_footer.twig", "news.twig", 30)->display($context);
    }

    public function getTemplateName()
    {
        return "news.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 30,  75 => 26,  72 => 25,  60 => 19,  56 => 18,  47 => 14,  43 => 13,  38 => 10,  34 => 9,  31 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* <h1 class="center">News</h1>*/
/* <p class="lead centered">View all the news articles here.</p>*/
/* <hr>*/
/* */
/* {% setcontent news = 'news/latest/3' allowpaging %}*/
/* */
/* {% for newsitem in news %}*/
/* */
/* <article class="media">*/
/*   <div class="media-left">*/
/*     <a href="{{ newsitem.link }}">*/
/*       <img src="{{ image(newsitem.image) }}" alt="{{ newsitem.title }}">*/
/*     </a>*/
/*   </div>*/
/*   <div class="media-body">*/
/*     <h2 class="media-heading">{{ newsitem.title }}</h2>*/
/*     <p class="media-excerpt">{{ newsitem.excerpt }}</p>*/
/*     <a href="#" class="btn btn-primary btn-sm">Read Full Article</a>*/
/*   </div>*/
/* </article>*/
/* */
/* {% endfor %}*/
/* */
/* {{ pager() }}*/
/* */
/* <hr>*/
/* */
/* {% include '_footer.twig' %}*/
/* */
