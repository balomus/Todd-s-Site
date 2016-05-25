<?php

/* evaluations.twig */
class __TwigTemplate_62ecf0fa182e575916fed37abd48417d580305778c5398fb7c40869ae8a7a639 extends Twig_Template
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
        $this->loadTemplate("_header.twig", "evaluations.twig", 1)->display($context);
        // line 2
        echo "
<h1 class=\"center\">Officials Evaluation</h1>

<form action=\"MAILTO:balom.us@gmail.com\" method=\"post\" enctyp=\"text/plain\">

    <fieldset class=\"form-group\">
        <label for=\"date\">Date</label>
        <input type=\"text\" class=\"form-control\" id=\"date\" placeholder=\"Today's Date (ex: 5/22/2016)\">
    </fieldset>

    <fieldset class=\"form-group\">
        <label for=\"referee\">Referee / Observer</label>
        <input type=\"text\" class=\"form-control\" id=\"referee\" placeholder=\"Referee or Observer's Name\">
    </fieldset>

    <fieldset class=\"form-group\">
        <label for=\"homeTeam\">Home Team</label>
        <input type=\"text\" class=\"form-control\" id=\"homeTeam\" placeholder=\"Home Team\">
    </fieldset>

    <fieldset class=\"form-group\">
        <label for=\"visitingTeam\">Visiting Team</label>
        <input type=\"text\" class=\"form-control\" id=\"visitingTeam\" placeholder=\"Visiting Team\">
    </fieldset>

    <label for=\"sport\">Sport</label>
    <div>
        <label class=\"radio-inline\">
            <input type=\"radio\" name=\"sport\" id=\"football\" value=\"football\">Football
        </label>
        <label class=\"radio-inline\">
            <input type=\"radio\" name=\"sport\" id=\"basketball\" value=\"basketball\">Basketball
        </label>
    </div>
    <br>

    <label for=\"level\">Level</label>
    <div class=\"checkbox\" name=\"level\">
        <label>
            <input type=\"checkbox\" value=\"\">Varsity
        </label>
    </div>

    <div class=\"checkbox\">
        <label>
            <input type=\"checkbox\" value=\"\">JV
        </label>
    </div>

    <div class=\"checkbox\">
        <label>
            <input type=\"checkbox\" value=\"\">Middle School
        </label>
    </div>

    <div class=\"checkbox\">
        <label>
            <input type=\"checkbox\" value=\"\">Elementary
        </label>
    </div>

    <div class=\"checkbox\">
        <label>
            <input type=\"checkbox\" value=\"\">Youth League
        </label>
    </div>

    <input type=\"submit\" value=\"Send\">

</form>

";
        // line 73
        $this->loadTemplate("_footer.twig", "evaluations.twig", 73)->display($context);
    }

    public function getTemplateName()
    {
        return "evaluations.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 73,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* <h1 class="center">Officials Evaluation</h1>*/
/* */
/* <form action="MAILTO:balom.us@gmail.com" method="post" enctyp="text/plain">*/
/* */
/*     <fieldset class="form-group">*/
/*         <label for="date">Date</label>*/
/*         <input type="text" class="form-control" id="date" placeholder="Today's Date (ex: 5/22/2016)">*/
/*     </fieldset>*/
/* */
/*     <fieldset class="form-group">*/
/*         <label for="referee">Referee / Observer</label>*/
/*         <input type="text" class="form-control" id="referee" placeholder="Referee or Observer's Name">*/
/*     </fieldset>*/
/* */
/*     <fieldset class="form-group">*/
/*         <label for="homeTeam">Home Team</label>*/
/*         <input type="text" class="form-control" id="homeTeam" placeholder="Home Team">*/
/*     </fieldset>*/
/* */
/*     <fieldset class="form-group">*/
/*         <label for="visitingTeam">Visiting Team</label>*/
/*         <input type="text" class="form-control" id="visitingTeam" placeholder="Visiting Team">*/
/*     </fieldset>*/
/* */
/*     <label for="sport">Sport</label>*/
/*     <div>*/
/*         <label class="radio-inline">*/
/*             <input type="radio" name="sport" id="football" value="football">Football*/
/*         </label>*/
/*         <label class="radio-inline">*/
/*             <input type="radio" name="sport" id="basketball" value="basketball">Basketball*/
/*         </label>*/
/*     </div>*/
/*     <br>*/
/* */
/*     <label for="level">Level</label>*/
/*     <div class="checkbox" name="level">*/
/*         <label>*/
/*             <input type="checkbox" value="">Varsity*/
/*         </label>*/
/*     </div>*/
/* */
/*     <div class="checkbox">*/
/*         <label>*/
/*             <input type="checkbox" value="">JV*/
/*         </label>*/
/*     </div>*/
/* */
/*     <div class="checkbox">*/
/*         <label>*/
/*             <input type="checkbox" value="">Middle School*/
/*         </label>*/
/*     </div>*/
/* */
/*     <div class="checkbox">*/
/*         <label>*/
/*             <input type="checkbox" value="">Elementary*/
/*         </label>*/
/*     </div>*/
/* */
/*     <div class="checkbox">*/
/*         <label>*/
/*             <input type="checkbox" value="">Youth League*/
/*         </label>*/
/*     </div>*/
/* */
/*     <input type="submit" value="Send">*/
/* */
/* </form>*/
/* */
/* {% include '_footer.twig' %}*/
/* */
