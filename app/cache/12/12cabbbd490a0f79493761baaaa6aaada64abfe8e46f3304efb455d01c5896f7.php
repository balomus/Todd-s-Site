<?php

/* applications.twig */
class __TwigTemplate_deb915aa7d1e1dac961098e5cd6308472ba98137ac747fd0416abf307dc0d918 extends Twig_Template
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
        $this->loadTemplate("_header.twig", "applications.twig", 1)->display($context);
        // line 2
        echo "
<h1 class=\"center\"><a href=\"#new\">New Officials</a></h1>
<h1 class=\"center\"><a href=\"#member\">Members</a></h1>

";
        // line 6
        $template_storage = new Bolt\Storage($context['app']);
        $context['applications'] =         $template_storage->getContent("application", array() );
        // line 7
        echo "
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["applications"]) ? $context["applications"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["application"]) {
            // line 9
            echo "
    <h2 id=\"new\" class=\"center\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "intro_text_header", array()), "html", null, true);
            echo "</h2>
    <br>
    <p>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "intro_text", array()), "html", null, true);
            echo "</p>

    <br>

    <h2 id=\"member\" class=\"center\">Southwestern Officials Association</h2>

    <form method=\"post\" action=\"form-to-email.php\">

        <label for=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "full_name", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "full_name", array()), "html", null, true);
            echo "</label>
        <input type=\"text\" class=\"form-control\" name=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "full_name", array()), "html", null, true);
            echo "\">

        <label for=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "address", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "address", array()), "html", null, true);
            echo "</label>
        <input type=\"text\" class=\"form-control\" name=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "address", array()), "html", null, true);
            echo "\">

        <label for=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "city_state_zip", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "city_state_zip", array()), "html", null, true);
            echo "</label>
        <input type=\"text\" class=\"form-control\" name=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "city_state_zip", array()), "html", null, true);
            echo "\">

        <label for=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "home_phone", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "home_phone", array()), "html", null, true);
            echo "</label>
        <input type=\"text\" class=\"form-control\" name=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "home_phone", array()), "html", null, true);
            echo "\">

        <label for=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "work_phone", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "work_phone", array()), "html", null, true);
            echo "</label>
        <input type=\"text\" class=\"form-control\" name=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "work_phone", array()), "html", null, true);
            echo "\">

        <label for=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "cell_phone", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "cell_phone", array()), "html", null, true);
            echo "</label>
        <input type=\"text\" class=\"form-control\" name=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "cell_phone", array()), "html", null, true);
            echo "\">

        <label for=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "email", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "email", array()), "html", null, true);
            echo "</label>
        <input type=\"text\" class=\"form-control\" name=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "email", array()), "html", null, true);
            echo "\">

        <label for=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "occupation", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "occupation", array()), "html", null, true);
            echo "</label>
        <input type=\"text\" class=\"form-control\" name=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "occupation", array()), "html", null, true);
            echo "\">

        <label for=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "social_security", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "social_security", array()), "html", null, true);
            echo "</label>
        <input type=\"text\" class=\"form-control\" name=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "social_security", array()), "html", null, true);
            echo "\">

        <label for=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "date_of_birth", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "date_of_birth", array()), "html", null, true);
            echo "</label>
        <input type=\"text\" class=\"form-control\" name=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "date_of_birth", array()), "html", null, true);
            echo "\">

        <label for=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "high_school", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "high_school", array()), "html", null, true);
            echo "</label>
        <input type=\"text\" class=\"form-control\" name=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "high_school", array()), "html", null, true);
            echo "\">

        <label for=\"sport\">Sport(s) of interest:</label><br>
        <input type=\"checkbox\" name=\"Football\" value=\"Football\"> Football<br>
        <input type=\"checkbox\" name=\"Basketball\" value=\"Basketball\"> Basketball<br>

        <p><em>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "application_footer", array()), "html", null, true);
            echo "</em></p>

        <div class=\"centered\">
            <input type=\"submit\" value=\"Submit\">
        </div>

    </form>





";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['application'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
";
        // line 71
        $this->loadTemplate("_footer.twig", "applications.twig", 71)->display($context);
    }

    public function getTemplateName()
    {
        return "applications.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 71,  200 => 70,  181 => 57,  172 => 51,  166 => 50,  161 => 48,  155 => 47,  150 => 45,  144 => 44,  139 => 42,  133 => 41,  128 => 39,  122 => 38,  117 => 36,  111 => 35,  106 => 33,  100 => 32,  95 => 30,  89 => 29,  84 => 27,  78 => 26,  73 => 24,  67 => 23,  62 => 21,  56 => 20,  45 => 12,  40 => 10,  37 => 9,  33 => 8,  30 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* <h1 class="center"><a href="#new">New Officials</a></h1>*/
/* <h1 class="center"><a href="#member">Members</a></h1>*/
/* */
/* {% setcontent applications = "application" %}*/
/* */
/* {% for application in applications %}*/
/* */
/*     <h2 id="new" class="center">{{ application.intro_text_header }}</h2>*/
/*     <br>*/
/*     <p>{{ application.intro_text }}</p>*/
/* */
/*     <br>*/
/* */
/*     <h2 id="member" class="center">Southwestern Officials Association</h2>*/
/* */
/*     <form method="post" action="form-to-email.php">*/
/* */
/*         <label for="{{ application.full_name }}">{{ application.full_name }}</label>*/
/*         <input type="text" class="form-control" name="{{ application.full_name }}">*/
/* */
/*         <label for="{{ application.address }}">{{ application.address }}</label>*/
/*         <input type="text" class="form-control" name="{{ application.address }}">*/
/* */
/*         <label for="{{ application.city_state_zip }}">{{ application.city_state_zip }}</label>*/
/*         <input type="text" class="form-control" name="{{ application.city_state_zip }}">*/
/* */
/*         <label for="{{ application.home_phone }}">{{ application.home_phone }}</label>*/
/*         <input type="text" class="form-control" name="{{ application.home_phone }}">*/
/* */
/*         <label for="{{ application.work_phone }}">{{ application.work_phone }}</label>*/
/*         <input type="text" class="form-control" name="{{ application.work_phone }}">*/
/* */
/*         <label for="{{ application.cell_phone }}">{{ application.cell_phone }}</label>*/
/*         <input type="text" class="form-control" name="{{ application.cell_phone }}">*/
/* */
/*         <label for="{{ application.email }}">{{ application.email }}</label>*/
/*         <input type="text" class="form-control" name="{{ application.email }}">*/
/* */
/*         <label for="{{ application.occupation }}">{{ application.occupation }}</label>*/
/*         <input type="text" class="form-control" name="{{ application.occupation }}">*/
/* */
/*         <label for="{{ application.social_security }}">{{ application.social_security }}</label>*/
/*         <input type="text" class="form-control" name="{{ application.social_security }}">*/
/* */
/*         <label for="{{ application.date_of_birth }}">{{ application.date_of_birth }}</label>*/
/*         <input type="text" class="form-control" name="{{ application.date_of_birth }}">*/
/* */
/*         <label for="{{ application.high_school }}">{{ application.high_school }}</label>*/
/*         <input type="text" class="form-control" name="{{ application.high_school }}">*/
/* */
/*         <label for="sport">Sport(s) of interest:</label><br>*/
/*         <input type="checkbox" name="Football" value="Football"> Football<br>*/
/*         <input type="checkbox" name="Basketball" value="Basketball"> Basketball<br>*/
/* */
/*         <p><em>{{ application.application_footer }}</em></p>*/
/* */
/*         <div class="centered">*/
/*             <input type="submit" value="Submit">*/
/*         </div>*/
/* */
/*     </form>*/
/* */
/* */
/* */
/* */
/* */
/* {% endfor %}*/
/* */
/* {% include '_footer.twig' %}*/
/* */
