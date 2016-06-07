<?php

/* schoolsandteams.twig */
class __TwigTemplate_a68c8f287c77798ef83bb317eaa540dee370890b95fc6fe653b7a01e397e3115 extends Twig_Template
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
        $this->loadTemplate("_header.twig", "schoolsandteams.twig", 1)->display($context);
        // line 2
        echo "
<h1 class=\"center\"><a href=\"#HighSchools\">High Schools</a></h1>
<h1 class=\"center\"><a href=\"#ElementaryMiddleSchools\">Elementary / Middle Schools</a><h1>
<h1 class=\"center\"><a href=\"#CharterPrivateSchools\">Charter & Private Schools</a></h1>
<h1 class=\"center\"><a href=\"#YouthLeague\">Youth League</a></h1>

";
        // line 8
        $template_storage = new Bolt\Storage($context['app']);
        $context['schoolsandteams'] =         $template_storage->getContent("schoolandteam", array() );
        // line 9
        echo "
<!-- High Schools -->
<h2 id=\"HighSchools\" class=\"center\">High Schools</h2>

<div class=\"row\">

  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schoolsandteams"]) ? $context["schoolsandteams"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["schoolandteam"]) {
            // line 16
            echo "
  ";
            // line 17
            if (($this->getAttribute($context["schoolandteam"], "type_of_school", array()) == "High_School")) {
                // line 18
                echo "
  <div class=\"col-xs-8 col-sm-4 col-md-3 col-xs-offset-2 col-sm-offset-0 col-md-offset-0\">
    <p>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["schoolandteam"], "school", array()), "html", null, true);
                echo "
    <br>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["schoolandteam"], "address", array()), "html", null, true);
                echo "
    <br>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["schoolandteam"], "city_state_zip", array()), "html", null, true);
                echo "
    <br>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["schoolandteam"], "phone_number", array()), "html", null, true);
                echo "</p>
  </div>
  ";
            }
            // line 26
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schoolandteam'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
</div>
<!-- END High Schools -->

<!-- Elementary / Middle Schools -->
<h2 id=\"ElementaryMiddleSchools\" class=\"center\">Elementary / Middle Schools</h2>

<div class=\"row\">

  ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schoolsandteams"]) ? $context["schoolsandteams"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["schoolandteam"]) {
            // line 38
            echo "
  ";
            // line 39
            if (($this->getAttribute($context["schoolandteam"], "type_of_school", array()) == "Elem/Middle_School")) {
                // line 40
                echo "
  <div class=\"col-xs-8 col-sm-4 col-md-3 col-xs-offset-2 col-sm-offset-0 col-md-offset-0\">
    <p>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["schoolandteam"], "school", array()), "html", null, true);
                echo "
    <br>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["schoolandteam"], "address", array()), "html", null, true);
                echo "
    <br>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["schoolandteam"], "city_state_zip", array()), "html", null, true);
                echo "
    <br>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["schoolandteam"], "phone_number", array()), "html", null, true);
                echo "</p>
  </div>
  ";
            }
            // line 48
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schoolandteam'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
</div>
<!-- END Elementary / Middle Schools -->

<!-- Charter & Private Schools -->
<h2 id=\"CharterPrivateSchools\" class=\"center\">Charter & Private Schools</h2>

<div class=\"row\">

  ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schoolsandteams"]) ? $context["schoolsandteams"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["schoolandteam"]) {
            // line 60
            echo "
  ";
            // line 61
            if (($this->getAttribute($context["schoolandteam"], "type_of_school", array()) == "Charter/Private_School")) {
                // line 62
                echo "
  <div class=\"col-xs-8 col-sm-4 col-md-3 col-xs-offset-2 col-sm-offset-0 col-md-offset-0\">
    <p>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["schoolandteam"], "school", array()), "html", null, true);
                echo "
    <br>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["schoolandteam"], "address", array()), "html", null, true);
                echo "
    <br>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["schoolandteam"], "city_state_zip", array()), "html", null, true);
                echo "
    <br>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["schoolandteam"], "phone_number", array()), "html", null, true);
                echo "</p>
  </div>
  ";
            }
            // line 70
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schoolandteam'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "
</div>
<!-- END Charter & Private Schools -->

<!-- Youth League -->
<h2 id=\"YouthLeague\" class=\"center\">Youth League</h2>

<div class=\"row\">

  ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schoolsandteams"]) ? $context["schoolsandteams"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["schoolandteam"]) {
            // line 82
            echo "
  ";
            // line 83
            if (($this->getAttribute($context["schoolandteam"], "type_of_school", array()) == "Youth_League")) {
                // line 84
                echo "
  <div class=\"col-xs-8 col-sm-4 col-md-3 col-xs-offset-2 col-sm-offset-0 col-md-offset-0\">
    <p>";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["schoolandteam"], "school", array()), "html", null, true);
                echo "
    <br>";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["schoolandteam"], "address", array()), "html", null, true);
                echo "
    <br>";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["schoolandteam"], "city_state_zip", array()), "html", null, true);
                echo "
    <br>";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["schoolandteam"], "phone_number", array()), "html", null, true);
                echo "</p>
  </div>
  ";
            }
            // line 92
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schoolandteam'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "
</div>
<!-- END Youth League -->

";
        // line 98
        $this->loadTemplate("_footer.twig", "schoolsandteams.twig", 98)->display($context);
    }

    public function getTemplateName()
    {
        return "schoolsandteams.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 98,  225 => 94,  218 => 92,  212 => 89,  208 => 88,  204 => 87,  200 => 86,  196 => 84,  194 => 83,  191 => 82,  187 => 81,  176 => 72,  169 => 70,  163 => 67,  159 => 66,  155 => 65,  151 => 64,  147 => 62,  145 => 61,  142 => 60,  138 => 59,  127 => 50,  120 => 48,  114 => 45,  110 => 44,  106 => 43,  102 => 42,  98 => 40,  96 => 39,  93 => 38,  89 => 37,  78 => 28,  71 => 26,  65 => 23,  61 => 22,  57 => 21,  53 => 20,  49 => 18,  47 => 17,  44 => 16,  40 => 15,  32 => 9,  29 => 8,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* <h1 class="center"><a href="#HighSchools">High Schools</a></h1>*/
/* <h1 class="center"><a href="#ElementaryMiddleSchools">Elementary / Middle Schools</a><h1>*/
/* <h1 class="center"><a href="#CharterPrivateSchools">Charter & Private Schools</a></h1>*/
/* <h1 class="center"><a href="#YouthLeague">Youth League</a></h1>*/
/* */
/* {% setcontent schoolsandteams = "schoolandteam" %}*/
/* */
/* <!-- High Schools -->*/
/* <h2 id="HighSchools" class="center">High Schools</h2>*/
/* */
/* <div class="row">*/
/* */
/*   {% for schoolandteam in schoolsandteams %}*/
/* */
/*   {% if schoolandteam.type_of_school == 'High_School' %}*/
/* */
/*   <div class="col-xs-8 col-sm-4 col-md-3 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">*/
/*     <p>{{ schoolandteam.school }}*/
/*     <br>{{ schoolandteam.address }}*/
/*     <br>{{ schoolandteam.city_state_zip }}*/
/*     <br>{{ schoolandteam.phone_number }}</p>*/
/*   </div>*/
/*   {% endif %}*/
/* */
/*   {% endfor %}*/
/* */
/* </div>*/
/* <!-- END High Schools -->*/
/* */
/* <!-- Elementary / Middle Schools -->*/
/* <h2 id="ElementaryMiddleSchools" class="center">Elementary / Middle Schools</h2>*/
/* */
/* <div class="row">*/
/* */
/*   {% for schoolandteam in schoolsandteams %}*/
/* */
/*   {% if schoolandteam.type_of_school == 'Elem/Middle_School' %}*/
/* */
/*   <div class="col-xs-8 col-sm-4 col-md-3 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">*/
/*     <p>{{ schoolandteam.school }}*/
/*     <br>{{ schoolandteam.address }}*/
/*     <br>{{ schoolandteam.city_state_zip }}*/
/*     <br>{{ schoolandteam.phone_number }}</p>*/
/*   </div>*/
/*   {% endif %}*/
/* */
/*   {% endfor %}*/
/* */
/* </div>*/
/* <!-- END Elementary / Middle Schools -->*/
/* */
/* <!-- Charter & Private Schools -->*/
/* <h2 id="CharterPrivateSchools" class="center">Charter & Private Schools</h2>*/
/* */
/* <div class="row">*/
/* */
/*   {% for schoolandteam in schoolsandteams %}*/
/* */
/*   {% if schoolandteam.type_of_school == 'Charter/Private_School' %}*/
/* */
/*   <div class="col-xs-8 col-sm-4 col-md-3 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">*/
/*     <p>{{ schoolandteam.school }}*/
/*     <br>{{ schoolandteam.address }}*/
/*     <br>{{ schoolandteam.city_state_zip }}*/
/*     <br>{{ schoolandteam.phone_number }}</p>*/
/*   </div>*/
/*   {% endif %}*/
/* */
/*   {% endfor %}*/
/* */
/* </div>*/
/* <!-- END Charter & Private Schools -->*/
/* */
/* <!-- Youth League -->*/
/* <h2 id="YouthLeague" class="center">Youth League</h2>*/
/* */
/* <div class="row">*/
/* */
/*   {% for schoolandteam in schoolsandteams %}*/
/* */
/*   {% if schoolandteam.type_of_school == 'Youth_League' %}*/
/* */
/*   <div class="col-xs-8 col-sm-4 col-md-3 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">*/
/*     <p>{{ schoolandteam.school }}*/
/*     <br>{{ schoolandteam.address }}*/
/*     <br>{{ schoolandteam.city_state_zip }}*/
/*     <br>{{ schoolandteam.phone_number }}</p>*/
/*   </div>*/
/*   {% endif %}*/
/* */
/*   {% endfor %}*/
/* */
/* </div>*/
/* <!-- END Youth League -->*/
/* */
/* {% include '_footer.twig' %}*/
/* */
