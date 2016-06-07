<?php

/* evaluations.twig */
class __TwigTemplate_8892621bc989fd46b148373463a7a47ed2db4492846e613fc5aaf6e382d88b78 extends Twig_Template
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
<script language=\"JavaScript\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "jss/gen_validator31.js\" type=\"text/javascript\"></script>

<h1 class=\"center\">Officials Evaluation</h1>

";
        // line 7
        $template_storage = new Bolt\Storage($context['app']);
        $context['evaluations'] =         $template_storage->getContent("evaluation", array() );
        // line 8
        echo "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evaluations"]) ? $context["evaluations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
            // line 10
            echo "
<form method=\"post\" action=\"form-to-email.php\">

    <label for=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "date", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "date", array()), "html", null, true);
            echo "</label>
    <input type=\"text\" class=\"form-control\" name=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "date", array()), "html", null, true);
            echo "\">

    <label for=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "referee", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "referee", array()), "html", null, true);
            echo "</label>
    <input type=\"text\" class=\"form-control\" name=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "referee", array()), "html", null, true);
            echo "\">

    <label for=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "hometeam", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "hometeam", array()), "html", null, true);
            echo "</label>
    <input type=\"text\" class=\"form-control\" name=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "hometeam", array()), "html", null, true);
            echo "\">

    <label for=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "visitingteam", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "visitingteam", array()), "html", null, true);
            echo "</label>
    <input type=\"text\" class=\"form-control\" name=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "visitingteam", array()), "html", null, true);
            echo "\">

    <label for=\"sport\">Sport:</label><br>
    <input type=\"checkbox\" name=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "football", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "football", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "football", array()), "html", null, true);
            echo "<br>
    <input type=\"checkbox\" name=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "basketball", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "basketball", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "basketball", array()), "html", null, true);
            echo "<br>

    <label for=\"level\">Level:</label><br>

    <input type=\"checkbox\" name=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "varsity", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "varsity", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "varsity", array()), "html", null, true);
            echo "<br>
    <input type=\"checkbox\" name=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "jv", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "jv", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "jv", array()), "html", null, true);
            echo "<br>
    <input type=\"checkbox\" name=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "middleschool", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "middleschool", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "middleschool", array()), "html", null, true);
            echo "<br>
    <input type=\"checkbox\" name=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "elementary", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "elementary", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "elementary", array()), "html", null, true);
            echo "<br>
    <input type=\"checkbox\" name=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "youthleague", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "youthleague", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "youthleague", array()), "html", null, true);
            echo "<br>

    <div class=\"centered\">
        <p>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "scale", array()), "html", null, true);
            echo "</p>
    </div>

    <label for=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "appearance", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "appearance", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "appearancedesc", array()), "html", null, true);
            echo "</label>
    <input type=\"text\" class=\"form-control\" name=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "appearance", array()), "html", null, true);
            echo "\">

    <label for=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "professionalism", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "professionalism", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "professionalismdesc", array()), "html", null, true);
            echo "</label>
    <input type=\"text\" class=\"form-control\" name=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "professionalism", array()), "html", null, true);
            echo "\">

    <label for=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "gamemanagement", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "gamemanagement", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "gamemanagementdesc", array()), "html", null, true);
            echo "</label>
    <input type=\"text\" class=\"form-control\" name=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "gamemanagement", array()), "html", null, true);
            echo "\">

    <label for=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "whistle", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "whistle", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "whistledesc", array()), "html", null, true);
            echo "</label>
    <input type=\"text\" class=\"form-control\" name=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "whistle", array()), "html", null, true);
            echo "\">

    <label for=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "signals", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "signals", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "signalsdesc", array()), "html", null, true);
            echo "</label>
    <input type=\"text\" class=\"form-control\" name=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "signalsdesc", array()), "html", null, true);
            echo "\">

    <label for=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "position", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "position", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "positiondesc", array()), "html", null, true);
            echo "</label>
    <input type=\"text\" class=\"form-control\" name=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "position", array()), "html", null, true);
            echo "\">

    <label for=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "callselection", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "callselection", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "callselectiondesc", array()), "html", null, true);
            echo "</label>
    <input type=\"text\" class=\"form-control\" name=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "callselection", array()), "html", null, true);
            echo "\">

    <label for=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "communication", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "communication", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "communicationdesc", array()), "html", null, true);
            echo "</label>
    <input type=\"text\" class=\"form-control\" name=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "communication", array()), "html", null, true);
            echo "\">

    <label for=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "rulesknowledge", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "rulesknowledge", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "rulesknowledgedesc", array()), "html", null, true);
            echo "</label>
    <input type=\"text\" class=\"form-control\" name=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "rulesknowledge", array()), "html", null, true);
            echo "\">

    <label for=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "comments", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "comments", array()), "html", null, true);
            echo "</label>
    <input type=\"text\" class=\"form-control\" name=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "comments", array()), "html", null, true);
            echo "\">

</form>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evaluation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
<!-- <form method=\"post\" action=\"form-to-email.php\">

    <label for=\"date\">Date</label>
    <input type=\"text\" class=\"form-control\" name=\"date\" placeholder=\"Today's Date (ex: 5/22/2016)\">
    <label for=\"referee\">Referee / Observer</label>
    <input type=\"text\" class=\"form-control\" id=\"referee\" placeholder=\"Referee or Observer's Name\">
    <label for=\"homeTeam\">Home Team</label>
    <input type=\"text\" class=\"form-control\" id=\"homeTeam\" placeholder=\"Home Team\">
    <label for=\"visitingTeam\">Visiting Team</label>
    <input type=\"text\" class=\"form-control\" id=\"visitingTeam\" placeholder=\"Visiting Team\">
    <label for=\"sport\">Sport</label>

    <br>

    <input type=\"submit\" value=\"Send\">

</form> -->

";
        // line 93
        $this->loadTemplate("_footer.twig", "evaluations.twig", 93)->display($context);
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
        return array (  313 => 93,  292 => 74,  281 => 69,  275 => 68,  270 => 66,  262 => 65,  257 => 63,  249 => 62,  244 => 60,  236 => 59,  231 => 57,  223 => 56,  218 => 54,  210 => 53,  205 => 51,  197 => 50,  192 => 48,  184 => 47,  179 => 45,  171 => 44,  166 => 42,  158 => 41,  152 => 38,  142 => 35,  134 => 34,  126 => 33,  118 => 32,  110 => 31,  99 => 27,  91 => 26,  85 => 23,  79 => 22,  74 => 20,  68 => 19,  63 => 17,  57 => 16,  52 => 14,  46 => 13,  41 => 10,  37 => 9,  34 => 8,  31 => 7,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* <script language="JavaScript" src="{{ paths.theme }}jss/gen_validator31.js" type="text/javascript"></script>*/
/* */
/* <h1 class="center">Officials Evaluation</h1>*/
/* */
/* {% setcontent evaluations = "evaluation" %}*/
/* */
/* {% for evaluation in evaluations %}*/
/* */
/* <form method="post" action="form-to-email.php">*/
/* */
/*     <label for="{{ evaluation.date }}">{{ evaluation.date }}</label>*/
/*     <input type="text" class="form-control" name="{{ evaluation.date }}">*/
/* */
/*     <label for="{{ evaluation.referee }}">{{ evaluation.referee }}</label>*/
/*     <input type="text" class="form-control" name="{{ evaluation.referee }}">*/
/* */
/*     <label for="{{ evaluation.hometeam }}">{{ evaluation.hometeam }}</label>*/
/*     <input type="text" class="form-control" name="{{ evaluation.hometeam }}">*/
/* */
/*     <label for="{{ evaluation.visitingteam }}">{{ evaluation.visitingteam }}</label>*/
/*     <input type="text" class="form-control" name="{{ evaluation.visitingteam }}">*/
/* */
/*     <label for="sport">Sport:</label><br>*/
/*     <input type="checkbox" name="{{ evaluation.football }}" value="{{ evaluation.football }}"> {{ evaluation.football }}<br>*/
/*     <input type="checkbox" name="{{ evaluation.basketball }}" value="{{ evaluation.basketball }}"> {{ evaluation.basketball }}<br>*/
/* */
/*     <label for="level">Level:</label><br>*/
/* */
/*     <input type="checkbox" name="{{ evaluation.varsity }}" value="{{ evaluation.varsity }}"> {{ evaluation.varsity }}<br>*/
/*     <input type="checkbox" name="{{ evaluation.jv }}" value="{{ evaluation.jv }}"> {{ evaluation.jv }}<br>*/
/*     <input type="checkbox" name="{{ evaluation.middleschool }}" value="{{ evaluation.middleschool }}"> {{ evaluation.middleschool }}<br>*/
/*     <input type="checkbox" name="{{ evaluation.elementary }}" value="{{ evaluation.elementary }}"> {{ evaluation.elementary }}<br>*/
/*     <input type="checkbox" name="{{ evaluation.youthleague }}" value="{{ evaluation.youthleague }}"> {{ evaluation.youthleague }}<br>*/
/* */
/*     <div class="centered">*/
/*         <p>{{ evaluation.scale }}</p>*/
/*     </div>*/
/* */
/*     <label for="{{ evaluation.appearance }}">{{ evaluation.appearance }} - {{ evaluation.appearancedesc }}</label>*/
/*     <input type="text" class="form-control" name="{{ evaluation.appearance }}">*/
/* */
/*     <label for="{{ evaluation.professionalism }}">{{ evaluation.professionalism }} - {{ evaluation.professionalismdesc }}</label>*/
/*     <input type="text" class="form-control" name="{{ evaluation.professionalism }}">*/
/* */
/*     <label for="{{ evaluation.gamemanagement }}">{{ evaluation.gamemanagement }} - {{ evaluation.gamemanagementdesc }}</label>*/
/*     <input type="text" class="form-control" name="{{ evaluation.gamemanagement }}">*/
/* */
/*     <label for="{{ evaluation.whistle }}">{{ evaluation.whistle }} - {{ evaluation.whistledesc }}</label>*/
/*     <input type="text" class="form-control" name="{{ evaluation.whistle }}">*/
/* */
/*     <label for="{{ evaluation.signals }}">{{ evaluation.signals }} - {{ evaluation.signalsdesc }}</label>*/
/*     <input type="text" class="form-control" name="{{ evaluation.signalsdesc }}">*/
/* */
/*     <label for="{{ evaluation.position }}">{{ evaluation.position }} - {{ evaluation.positiondesc }}</label>*/
/*     <input type="text" class="form-control" name="{{ evaluation.position }}">*/
/* */
/*     <label for="{{ evaluation.callselection }}">{{ evaluation.callselection }} - {{ evaluation.callselectiondesc }}</label>*/
/*     <input type="text" class="form-control" name="{{ evaluation.callselection }}">*/
/* */
/*     <label for="{{ evaluation.communication }}">{{ evaluation.communication }} - {{ evaluation.communicationdesc }}</label>*/
/*     <input type="text" class="form-control" name="{{ evaluation.communication }}">*/
/* */
/*     <label for="{{ evaluation.rulesknowledge }}">{{ evaluation.rulesknowledge }} - {{ evaluation.rulesknowledgedesc }}</label>*/
/*     <input type="text" class="form-control" name="{{ evaluation.rulesknowledge }}">*/
/* */
/*     <label for="{{ evaluation.comments }}">{{ evaluation.comments }}</label>*/
/*     <input type="text" class="form-control" name="{{ evaluation.comments }}">*/
/* */
/* </form>*/
/* */
/* {% endfor %}*/
/* */
/* <!-- <form method="post" action="form-to-email.php">*/
/* */
/*     <label for="date">Date</label>*/
/*     <input type="text" class="form-control" name="date" placeholder="Today's Date (ex: 5/22/2016)">*/
/*     <label for="referee">Referee / Observer</label>*/
/*     <input type="text" class="form-control" id="referee" placeholder="Referee or Observer's Name">*/
/*     <label for="homeTeam">Home Team</label>*/
/*     <input type="text" class="form-control" id="homeTeam" placeholder="Home Team">*/
/*     <label for="visitingTeam">Visiting Team</label>*/
/*     <input type="text" class="form-control" id="visitingTeam" placeholder="Visiting Team">*/
/*     <label for="sport">Sport</label>*/
/* */
/*     <br>*/
/* */
/*     <input type="submit" value="Send">*/
/* */
/* </form> -->*/
/* */
/* {% include '_footer.twig' %}*/
/* */
