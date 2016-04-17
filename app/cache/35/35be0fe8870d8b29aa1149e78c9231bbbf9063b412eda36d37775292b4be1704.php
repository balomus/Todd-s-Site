<?php

/* board.twig */
class __TwigTemplate_0102f74254ea09829042cc8df5e1fd63464577835a94df7af190af4269f8c632 extends Twig_Template
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
        $this->loadTemplate("_header.twig", "board.twig", 1)->display($context);
        // line 2
        echo "
<h1>Board</h1>
<p class=\"lead\">Below are all the current board members.</p>
<hr>

";
        // line 7
        $template_storage = new Bolt\Storage($context['app']);
        $context['board'] =         $template_storage->getContent("board", array() );
        // line 8
        echo "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["board"]) ? $context["board"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["boardmember"]) {
            // line 10
            echo "
<article>
  <div class=\"row\">
    <div class = \"col-md-4 col-xs-8 col-xs-offset-2 col-md-offset-0\">
      <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute($context["boardmember"], "image", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["boardmember"], "name", array()), "html", null, true);
            echo "\" class=\"img-responsive\">
    </div>
  
    <div class=\"col-md-8 col-xs-12\">
      <h2>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["boardmember"], "name", array()), "html", null, true);
            echo "</h2>
    </div>
    <div class=\"col-md-8 col-xs-12\">
      <p>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["boardmember"], "body", array()), "html", null, true);
            echo "</p>
    </div>
</div>
</article>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boardmember'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
";
        // line 28
        $this->loadTemplate("_footer.twig", "board.twig", 28)->display($context);
    }

    public function getTemplateName()
    {
        return "board.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  71 => 27,  59 => 21,  53 => 18,  44 => 14,  38 => 10,  34 => 9,  31 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* <h1>Board</h1>*/
/* <p class="lead">Below are all the current board members.</p>*/
/* <hr>*/
/* */
/* {% setcontent board = 'board' %}*/
/* */
/* {% for boardmember in board %}*/
/* */
/* <article>*/
/*   <div class="row">*/
/*     <div class = "col-md-4 col-xs-8 col-xs-offset-2 col-md-offset-0">*/
/*       <img src="{{ image(boardmember.image) }}" alt="{{ boardmember.name }}" class="img-responsive">*/
/*     </div>*/
/*   */
/*     <div class="col-md-8 col-xs-12">*/
/*       <h2>{{ boardmember.name }}</h2>*/
/*     </div>*/
/*     <div class="col-md-8 col-xs-12">*/
/*       <p>{{ boardmember.body }}</p>*/
/*     </div>*/
/* </div>*/
/* </article>*/
/* */
/* {% endfor %}*/
/* */
/* {% include '_footer.twig' %}*/
