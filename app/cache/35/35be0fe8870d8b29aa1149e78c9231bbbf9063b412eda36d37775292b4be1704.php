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
<h1 class=\"center\">Board</h1>
<p class=\"lead centered\">Below are all the current board members.</p>
<hr>

";
        // line 7
        $template_storage = new Bolt\Storage($context['app']);
        $context['board'] =         $template_storage->getContent("board", array() );
        // line 8
        echo "
<h2 class=\"center\">Officials</h2>

";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["board"]) ? $context["board"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["boardmember"]) {
            // line 12
            echo "
";
            // line 13
            if (($this->getAttribute($context["boardmember"], "officals_group", array()) == "Officials")) {
                // line 14
                echo "
<article>
  <div class=\"row\">
    <div class = \"col-md-4 col-xs-8 col-xs-offset-2 col-md-offset-0\">
      <img src=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute($context["boardmember"], "image", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["boardmember"], "name", array()), "html", null, true);
                echo "\" class=\"img-responsive\">
    </div>

    <div class=\"col-md-8 col-xs-12\">
      <h3>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["boardmember"], "name", array()), "html", null, true);
                echo "</h3>
    </div>
    <div class=\"col-md-8 col-xs-12\">
      <p>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["boardmember"], "body", array()), "html", null, true);
                echo "</p>
    </div>
  </div>
</article>
<br>

";
            }
            // line 32
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boardmember'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
<h2 class=\"center\">School Representatives</h2>

";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["board"]) ? $context["board"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["boardmember"]) {
            // line 38
            echo "
";
            // line 39
            if (($this->getAttribute($context["boardmember"], "officals_group", array()) == "School Representatives")) {
                // line 40
                echo "
<article>
  <div class=\"row\">
    <div class = \"col-md-4 col-xs-8 col-xs-offset-2 col-md-offset-0\">
      <img src=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute($context["boardmember"], "image", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["boardmember"], "name", array()), "html", null, true);
                echo "\" class=\"img-responsive\">
    </div>

    <div class=\"col-md-8 col-xs-12\">
      <h3>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["boardmember"], "name", array()), "html", null, true);
                echo "</h3>
    </div>
    <div class=\"col-md-8 col-xs-12\">
      <p>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["boardmember"], "body", array()), "html", null, true);
                echo "</p>
    </div>
  </div>
</article>
<br>

";
            }
            // line 58
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boardmember'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
<h2 class=\"center\">Regional Supervisor of Officials</h2>

";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["board"]) ? $context["board"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["boardmember"]) {
            // line 64
            echo "
";
            // line 65
            if (($this->getAttribute($context["boardmember"], "officals_group", array()) == "Regional Supervisor of Officials")) {
                // line 66
                echo "
<article>
  <div class=\"row\">
    <div class = \"col-md-4 col-xs-8 col-xs-offset-2 col-md-offset-0\">
      <img src=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute($context["boardmember"], "image", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["boardmember"], "name", array()), "html", null, true);
                echo "\" class=\"img-responsive\">
    </div>

    <div class=\"col-md-8 col-xs-12\">
      <h3>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["boardmember"], "name", array()), "html", null, true);
                echo "</h3>
    </div>
    <div class=\"col-md-8 col-xs-12\">
      <p>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["boardmember"], "body", array()), "html", null, true);
                echo "</p>
    </div>
  </div>
</article>
<br>

";
            }
            // line 84
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boardmember'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "
<h2 class=\"center\">Treasurer</h2>

";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["board"]) ? $context["board"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["boardmember"]) {
            // line 90
            echo "
";
            // line 91
            if (($this->getAttribute($context["boardmember"], "officals_group", array()) == "Treasurer")) {
                // line 92
                echo "
<article>
  <div class=\"row\">
    <div class = \"col-md-4 col-xs-8 col-xs-offset-2 col-md-offset-0\">
      <img src=\"";
                // line 96
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute($context["boardmember"], "image", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["boardmember"], "name", array()), "html", null, true);
                echo "\" class=\"img-responsive\">
    </div>

    <div class=\"col-md-8 col-xs-12\">
      <h3>";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($context["boardmember"], "name", array()), "html", null, true);
                echo "</h3>
    </div>
    <div class=\"col-md-8 col-xs-12\">
      <p>";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute($context["boardmember"], "body", array()), "html", null, true);
                echo "</p>
    </div>
  </div>
</article>
<br>

";
            }
            // line 110
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boardmember'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "
";
        // line 113
        $this->loadTemplate("_footer.twig", "board.twig", 113)->display($context);
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
        return array (  242 => 113,  239 => 112,  232 => 110,  222 => 103,  216 => 100,  207 => 96,  201 => 92,  199 => 91,  196 => 90,  192 => 89,  187 => 86,  180 => 84,  170 => 77,  164 => 74,  155 => 70,  149 => 66,  147 => 65,  144 => 64,  140 => 63,  135 => 60,  128 => 58,  118 => 51,  112 => 48,  103 => 44,  97 => 40,  95 => 39,  92 => 38,  88 => 37,  83 => 34,  76 => 32,  66 => 25,  60 => 22,  51 => 18,  45 => 14,  43 => 13,  40 => 12,  36 => 11,  31 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* <h1 class="center">Board</h1>*/
/* <p class="lead centered">Below are all the current board members.</p>*/
/* <hr>*/
/* */
/* {% setcontent board = 'board' %}*/
/* */
/* <h2 class="center">Officials</h2>*/
/* */
/* {% for boardmember in board %}*/
/* */
/* {% if boardmember.officals_group == 'Officials' %}*/
/* */
/* <article>*/
/*   <div class="row">*/
/*     <div class = "col-md-4 col-xs-8 col-xs-offset-2 col-md-offset-0">*/
/*       <img src="{{ image(boardmember.image) }}" alt="{{ boardmember.name }}" class="img-responsive">*/
/*     </div>*/
/* */
/*     <div class="col-md-8 col-xs-12">*/
/*       <h3>{{ boardmember.name }}</h3>*/
/*     </div>*/
/*     <div class="col-md-8 col-xs-12">*/
/*       <p>{{ boardmember.body }}</p>*/
/*     </div>*/
/*   </div>*/
/* </article>*/
/* <br>*/
/* */
/* {% endif %}*/
/* */
/* {% endfor %}*/
/* */
/* <h2 class="center">School Representatives</h2>*/
/* */
/* {% for boardmember in board %}*/
/* */
/* {% if boardmember.officals_group == 'School Representatives' %}*/
/* */
/* <article>*/
/*   <div class="row">*/
/*     <div class = "col-md-4 col-xs-8 col-xs-offset-2 col-md-offset-0">*/
/*       <img src="{{ image(boardmember.image) }}" alt="{{ boardmember.name }}" class="img-responsive">*/
/*     </div>*/
/* */
/*     <div class="col-md-8 col-xs-12">*/
/*       <h3>{{ boardmember.name }}</h3>*/
/*     </div>*/
/*     <div class="col-md-8 col-xs-12">*/
/*       <p>{{ boardmember.body }}</p>*/
/*     </div>*/
/*   </div>*/
/* </article>*/
/* <br>*/
/* */
/* {% endif %}*/
/* */
/* {% endfor %}*/
/* */
/* <h2 class="center">Regional Supervisor of Officials</h2>*/
/* */
/* {% for boardmember in board %}*/
/* */
/* {% if boardmember.officals_group == 'Regional Supervisor of Officials' %}*/
/* */
/* <article>*/
/*   <div class="row">*/
/*     <div class = "col-md-4 col-xs-8 col-xs-offset-2 col-md-offset-0">*/
/*       <img src="{{ image(boardmember.image) }}" alt="{{ boardmember.name }}" class="img-responsive">*/
/*     </div>*/
/* */
/*     <div class="col-md-8 col-xs-12">*/
/*       <h3>{{ boardmember.name }}</h3>*/
/*     </div>*/
/*     <div class="col-md-8 col-xs-12">*/
/*       <p>{{ boardmember.body }}</p>*/
/*     </div>*/
/*   </div>*/
/* </article>*/
/* <br>*/
/* */
/* {% endif %}*/
/* */
/* {% endfor %}*/
/* */
/* <h2 class="center">Treasurer</h2>*/
/* */
/* {% for boardmember in board %}*/
/* */
/* {% if boardmember.officals_group == 'Treasurer' %}*/
/* */
/* <article>*/
/*   <div class="row">*/
/*     <div class = "col-md-4 col-xs-8 col-xs-offset-2 col-md-offset-0">*/
/*       <img src="{{ image(boardmember.image) }}" alt="{{ boardmember.name }}" class="img-responsive">*/
/*     </div>*/
/* */
/*     <div class="col-md-8 col-xs-12">*/
/*       <h3>{{ boardmember.name }}</h3>*/
/*     </div>*/
/*     <div class="col-md-8 col-xs-12">*/
/*       <p>{{ boardmember.body }}</p>*/
/*     </div>*/
/*   </div>*/
/* </article>*/
/* <br>*/
/* */
/* {% endif %}*/
/* */
/* {% endfor %}*/
/* */
/* {% include '_footer.twig' %}*/
/* */
