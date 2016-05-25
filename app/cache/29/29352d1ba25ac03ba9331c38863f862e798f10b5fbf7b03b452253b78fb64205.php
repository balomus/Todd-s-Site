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
  <div class=\"col-xs-8 col-sm-4 col-md-3 col-xs-offset-2\">
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

";
        // line 32
        $this->loadTemplate("_footer.twig", "schoolsandteams.twig", 32)->display($context);
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
        return array (  84 => 32,  78 => 28,  71 => 26,  65 => 23,  61 => 22,  57 => 21,  53 => 20,  49 => 18,  47 => 17,  44 => 16,  40 => 15,  32 => 9,  29 => 8,  21 => 2,  19 => 1,);
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
/*   <div class="col-xs-8 col-sm-4 col-md-3 col-xs-offset-2">*/
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
/* {% include '_footer.twig' %}*/
/* */
