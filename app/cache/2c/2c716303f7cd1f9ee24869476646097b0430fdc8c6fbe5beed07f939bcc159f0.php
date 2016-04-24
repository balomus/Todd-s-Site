<?php

/* clinicsandmeetings.twig */
class __TwigTemplate_964e6a7fb92a284d54c9957e4e65130838056721d7dffcf7f8b448f519e7d387 extends Twig_Template
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
        $this->loadTemplate("_header.twig", "clinicsandmeetings.twig", 1)->display($context);
        // line 2
        echo "
<h2>Basketball</h2>

<div class=\"header-row\">
  <div class=\"row\">
    <div class=\"col-sm-1\">
    </div>
    <div class=\"col-xs-2 col-sm-2 col-md-2\">
        <p class=\"under\">Meeting</p>
    </div>
    <div class=\"col-xs-3 col-sm-2 col-md-2\">
      <p class=\"under\">Date</p>
    </div>
    <div class=\"col-xs-2 col-sm-2 col-md-2\">
      <p class=\"under\">Time</p>
    </div>
    <div class=\"col-xs-2 col-sm-2 col-md-2\">
      <p class=\"under\">Location</p>
    </div>
    <div class=\"col-xs-3 col-sm-2 col-md-2\">
      <p class=\"under\">Site</p>
    </div>
    <div class=\"col-sm-1\">
    </div>
  </div>
</div>

";
        // line 29
        $template_storage = new Bolt\Storage($context['app']);
        $context['clinicsandmeetings'] =         $template_storage->getContent("clinicormeeting", array() );
        // line 30
        echo "
";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["clinicsandmeetings"]) ? $context["clinicsandmeetings"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["clinicormeeting"]) {
            // line 32
            echo "
";
            // line 33
            if (($this->getAttribute($context["clinicormeeting"], "sport", array()) == "Basketball")) {
                // line 34
                echo "
<div class=\"row\">
  <div class=\"col-sm-1\">
  </div>
  <div class=\"col-xs-2 col-sm-2 col-md-2\">
    ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["clinicormeeting"], "meeting", array()), "html", null, true);
                echo "
  </div>
  <div class=\"col-xs-3 col-sm-2 col-md-2\">
    ";
                // line 42
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["clinicormeeting"], "date_and_time", array()), "m/d/Y"), "html", null, true);
                echo "
  </div>
  <div class=\"col-xs-2 col-sm-2 col-md-2\">
    ";
                // line 45
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["clinicormeeting"], "date_and_time", array()), "g:ia"), "html", null, true);
                echo "
  </div>
  <div class=\"col-xs-2 col-sm-2 col-md-2\">
    ";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["clinicormeeting"], "location", array()), "html", null, true);
                echo "
  </div>
  <div class=\"col-xs-3 col-sm-2 col-md-2\">
    ";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["clinicormeeting"], "site", array()), "html", null, true);
                echo "
  </div>
  <div class=\"col-sm-1\">
  </div>
</div>

";
            }
            // line 58
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clinicormeeting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
<h2>Football</h2>

";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clinicsandmeetings"]) ? $context["clinicsandmeetings"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["clinicormeeting"]) {
            // line 64
            echo "
";
            // line 65
            if (($this->getAttribute($context["clinicormeeting"], "sport", array()) == "Football")) {
                // line 66
                echo "
<div class=\"row\">
  <div class=\"col-sm-1\">
  </div>
  <div class=\"col-xs-2 col-sm-2 col-md-2\">
    ";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["clinicormeeting"], "meeting", array()), "html", null, true);
                echo "
  </div>
  <div class=\"col-xs-3 col-sm-2 col-md-2\">
    ";
                // line 74
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["clinicormeeting"], "date_and_time", array()), "m/d/Y"), "html", null, true);
                echo "
  </div>
  <div class=\"col-xs-2 col-sm-2 col-md-2\">
    ";
                // line 77
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["clinicormeeting"], "date_and_time", array()), "g:ia"), "html", null, true);
                echo "
  </div>
  <div class=\"col-xs-2 col-sm-2 col-md-2\">
    ";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["clinicormeeting"], "location", array()), "html", null, true);
                echo "
  </div>
  <div class=\"col-xs-3 col-sm-2 col-md-2\">
    ";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["clinicormeeting"], "site", array()), "html", null, true);
                echo "
  </div>
  <div class=\"col-sm-1\">
  </div>
</div>

";
            }
            // line 90
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clinicormeeting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "
";
        // line 117
        echo "
";
        // line 118
        $this->loadTemplate("_footer.twig", "clinicsandmeetings.twig", 118)->display($context);
    }

    public function getTemplateName()
    {
        return "clinicsandmeetings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 118,  178 => 117,  175 => 92,  168 => 90,  158 => 83,  152 => 80,  146 => 77,  140 => 74,  134 => 71,  127 => 66,  125 => 65,  122 => 64,  118 => 63,  113 => 60,  106 => 58,  96 => 51,  90 => 48,  84 => 45,  78 => 42,  72 => 39,  65 => 34,  63 => 33,  60 => 32,  56 => 31,  53 => 30,  50 => 29,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* <h2>Basketball</h2>*/
/* */
/* <div class="header-row">*/
/*   <div class="row">*/
/*     <div class="col-sm-1">*/
/*     </div>*/
/*     <div class="col-xs-2 col-sm-2 col-md-2">*/
/*         <p class="under">Meeting</p>*/
/*     </div>*/
/*     <div class="col-xs-3 col-sm-2 col-md-2">*/
/*       <p class="under">Date</p>*/
/*     </div>*/
/*     <div class="col-xs-2 col-sm-2 col-md-2">*/
/*       <p class="under">Time</p>*/
/*     </div>*/
/*     <div class="col-xs-2 col-sm-2 col-md-2">*/
/*       <p class="under">Location</p>*/
/*     </div>*/
/*     <div class="col-xs-3 col-sm-2 col-md-2">*/
/*       <p class="under">Site</p>*/
/*     </div>*/
/*     <div class="col-sm-1">*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* {% setcontent clinicsandmeetings = 'clinicormeeting' %}*/
/* */
/* {% for clinicormeeting in clinicsandmeetings|sort %}*/
/* */
/* {% if clinicormeeting.sport == 'Basketball' %}*/
/* */
/* <div class="row">*/
/*   <div class="col-sm-1">*/
/*   </div>*/
/*   <div class="col-xs-2 col-sm-2 col-md-2">*/
/*     {{ clinicormeeting.meeting }}*/
/*   </div>*/
/*   <div class="col-xs-3 col-sm-2 col-md-2">*/
/*     {{ clinicormeeting.date_and_time|date('m/d/Y') }}*/
/*   </div>*/
/*   <div class="col-xs-2 col-sm-2 col-md-2">*/
/*     {{ clinicormeeting.date_and_time|date('g:ia') }}*/
/*   </div>*/
/*   <div class="col-xs-2 col-sm-2 col-md-2">*/
/*     {{ clinicormeeting.location }}*/
/*   </div>*/
/*   <div class="col-xs-3 col-sm-2 col-md-2">*/
/*     {{ clinicormeeting.site }}*/
/*   </div>*/
/*   <div class="col-sm-1">*/
/*   </div>*/
/* </div>*/
/* */
/* {% endif %}*/
/* */
/* {% endfor %}*/
/* */
/* <h2>Football</h2>*/
/* */
/* {% for clinicormeeting in clinicsandmeetings %}*/
/* */
/* {% if clinicormeeting.sport == 'Football' %}*/
/* */
/* <div class="row">*/
/*   <div class="col-sm-1">*/
/*   </div>*/
/*   <div class="col-xs-2 col-sm-2 col-md-2">*/
/*     {{ clinicormeeting.meeting }}*/
/*   </div>*/
/*   <div class="col-xs-3 col-sm-2 col-md-2">*/
/*     {{ clinicormeeting.date_and_time|date('m/d/Y') }}*/
/*   </div>*/
/*   <div class="col-xs-2 col-sm-2 col-md-2">*/
/*     {{ clinicormeeting.date_and_time|date('g:ia') }}*/
/*   </div>*/
/*   <div class="col-xs-2 col-sm-2 col-md-2">*/
/*     {{ clinicormeeting.location }}*/
/*   </div>*/
/*   <div class="col-xs-3 col-sm-2 col-md-2">*/
/*     {{ clinicormeeting.site }}*/
/*   </div>*/
/*   <div class="col-sm-1">*/
/*   </div>*/
/* </div>*/
/* */
/* {% endif %}*/
/* */
/* {% endfor %}*/
/* */
/* {# <h1>Board</h1>*/
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
/* {% endfor %} #}*/
/* */
/* {% include '_footer.twig' %}*/
