<?php

/* clinicsandmeetings.twig */
class __TwigTemplate_3650d4b5d6f35ff9d2e379065c649cf508d34c1fa0f9d222e2cde22702308245 extends Twig_Template
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
<h1 class=\"center\"><a href=\"#Basketball\"><i class=\"icon-nba\"></i> Basketball Clinics/Meetings</a></h1>
<h1 class=\"center\"><a href=\"#Football\"><i class=\"icon-nfl\"></i> Football Clinics/Meetings</a></h1>

<!-- Basketball -->
<h2 id=\"Basketball\" class=\"center\">Basketball</h2>

<div class=\"table-responsive\">
    <table class=\"table table-striped\">
        <thead>
            <tr>
            <td><strong>Meeting</strong></td>
                <td><strong>Date</strong></td>
                <td><strong>Time</strong></td>
                <td><strong>Location</strong></td>
                <td><strong>Site</strong></td>
            </tr>
        </thead>

        ";
        // line 21
        $template_storage = new Bolt\Storage($context['app']);
        $context['clinicsandmeetings'] =         $template_storage->getContent("clinicormeeting", array() );
        // line 22
        echo "
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clinicsandmeetings"]) ? $context["clinicsandmeetings"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["clinicormeeting"]) {
            // line 24
            echo "
        ";
            // line 25
            if (($this->getAttribute($context["clinicormeeting"], "sport", array()) == "Basketball")) {
                // line 26
                echo "
        <tr>
            <td><p>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["clinicormeeting"], "meeting", array()), "html", null, true);
                echo "</p></td>
            <td><p>";
                // line 29
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["clinicormeeting"], "date_and_time", array()), "m/d/Y"), "html", null, true);
                echo "</p></td>
            <td><p>";
                // line 30
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["clinicormeeting"], "date_and_time", array()), "g:ia"), "html", null, true);
                echo "</p></td>
            <td><p>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["clinicormeeting"], "location", array()), "html", null, true);
                echo "</p></td>
            <td><p>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["clinicormeeting"], "site", array()), "html", null, true);
                echo "</p></td>
        </tr>

        ";
            }
            // line 36
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clinicormeeting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
    </table>
</div>

<!-- END Basketball -->

<ul>
    <li>The Local Association meeting is required by the association.</li>
    <li>The State Clinic is required in order to officiate post-season play.</li>
    <li>You must attend all six (6) clinics to qualify for play-offs, unless an appeal is approved by the board. </li>
    <li>A sign-up sheet will be forwarded to each clinician by the Regional Supervisor prior to the meeting.</li>
    <li>All meetings will start promptly at the time designated, thus don't be late!  The maximum length of each meeting is two (2) hours, but in most cases will end much sooner.  Please plan accordingly.</li>
    <li>You may attend a local clinic in your area, or at another location, as long as it is attended within that week. Attending two sites in one week, does not give you credit for two clinics!!!</li>
    <li>Clinicians for each clinic will be assigned at a later date by the Regional Supervisor.</li>
    <li>Materials and information covered at each clinic will be decided by the Regional Supervisor.</li>
    <li>Each local clinic site will cover the same information on the same dates.</li>
    <li>Local clinic dates and times may not be changed.  Locations may be changed with approval from the board.</li>
</ul>

<!-- Football -->

<h2 id=\"Football\" class=\"center\">Football</h2>

<div class=\"table-responsive\">
    <table class=\"table table-striped\">
        <thead>
            <tr>
            <td><strong>Meeting</strong></td>
                <td><strong>Date</strong></td>
                <td><strong>Time</strong></td>
                <td><strong>Location</strong></td>
                <td><strong>Site</strong></td>
            </tr>
        </thead>

        ";
        // line 73
        $template_storage = new Bolt\Storage($context['app']);
        $context['clinicsandmeetings'] =         $template_storage->getContent("clinicormeeting", array() );
        // line 74
        echo "
        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clinicsandmeetings"]) ? $context["clinicsandmeetings"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["clinicormeeting"]) {
            // line 76
            echo "
        ";
            // line 77
            if (($this->getAttribute($context["clinicormeeting"], "sport", array()) == "Football")) {
                // line 78
                echo "
        <tr>
            <td><p>";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["clinicormeeting"], "meeting", array()), "html", null, true);
                echo "</p></td>
            <td><p>";
                // line 81
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["clinicormeeting"], "date_and_time", array()), "m/d/Y"), "html", null, true);
                echo "</p></td>
            <td><p>";
                // line 82
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["clinicormeeting"], "date_and_time", array()), "g:ia"), "html", null, true);
                echo "</p></td>
            <td><p>";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["clinicormeeting"], "location", array()), "html", null, true);
                echo "</p></td>
            <td><p>";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["clinicormeeting"], "site", array()), "html", null, true);
                echo "</p></td>
        </tr>

        ";
            }
            // line 88
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clinicormeeting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "
    </table>
</div>

<!-- END Football -->

<ul>
    <li>The Local Association meeting is required by the association.</li>
    <li>The State Clinic is required in order to officiate post-season play.</li>
    <li>You must attend all six (6) clinics to qualify for play-offs, unless an appeal is approved by the board. </li>
    <li>A sign-up sheet will be forwarded to each clinician by the Regional Supervisor prior to the meeting.</li>
    <li>All meetings will start promptly at the time designated, thus don't be late!  The maximum length of each meeting is two (2) hours, but in most cases will end much sooner.  Please plan accordingly.</li>
    <li>You may attend a local clinic in your area, or at another location, as long as it is attended within that week. Attending two sites in one week, does not give you credit for two clinics!!!</li>
    <li>Clinicians for each clinic will be assigned at a later date by the Regional Supervisor.</li>
    <li>Materials and information covered at each clinic will be decided by the Regional Supervisor.</li>
    <li>Each local clinic site will cover the same information on the same dates.</li>
    <li>Local clinic dates and times may not be changed.  Locations may be changed with approval from the board.</li>
</ul>

";
        // line 109
        $this->loadTemplate("_footer.twig", "clinicsandmeetings.twig", 109)->display($context);
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
        return array (  198 => 109,  177 => 90,  170 => 88,  163 => 84,  159 => 83,  155 => 82,  151 => 81,  147 => 80,  143 => 78,  141 => 77,  138 => 76,  134 => 75,  131 => 74,  128 => 73,  91 => 38,  84 => 36,  77 => 32,  73 => 31,  69 => 30,  65 => 29,  61 => 28,  57 => 26,  55 => 25,  52 => 24,  48 => 23,  45 => 22,  42 => 21,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* <h1 class="center"><a href="#Basketball"><i class="icon-nba"></i> Basketball Clinics/Meetings</a></h1>*/
/* <h1 class="center"><a href="#Football"><i class="icon-nfl"></i> Football Clinics/Meetings</a></h1>*/
/* */
/* <!-- Basketball -->*/
/* <h2 id="Basketball" class="center">Basketball</h2>*/
/* */
/* <div class="table-responsive">*/
/*     <table class="table table-striped">*/
/*         <thead>*/
/*             <tr>*/
/*             <td><strong>Meeting</strong></td>*/
/*                 <td><strong>Date</strong></td>*/
/*                 <td><strong>Time</strong></td>*/
/*                 <td><strong>Location</strong></td>*/
/*                 <td><strong>Site</strong></td>*/
/*             </tr>*/
/*         </thead>*/
/* */
/*         {% setcontent clinicsandmeetings = 'clinicormeeting' %}*/
/* */
/*         {% for clinicormeeting in clinicsandmeetings %}*/
/* */
/*         {% if clinicormeeting.sport == 'Basketball' %}*/
/* */
/*         <tr>*/
/*             <td><p>{{ clinicormeeting.meeting }}</p></td>*/
/*             <td><p>{{ clinicormeeting.date_and_time|date('m/d/Y') }}</p></td>*/
/*             <td><p>{{ clinicormeeting.date_and_time|date('g:ia') }}</p></td>*/
/*             <td><p>{{ clinicormeeting.location }}</p></td>*/
/*             <td><p>{{ clinicormeeting.site }}</p></td>*/
/*         </tr>*/
/* */
/*         {% endif %}*/
/* */
/*         {% endfor %}*/
/* */
/*     </table>*/
/* </div>*/
/* */
/* <!-- END Basketball -->*/
/* */
/* <ul>*/
/*     <li>The Local Association meeting is required by the association.</li>*/
/*     <li>The State Clinic is required in order to officiate post-season play.</li>*/
/*     <li>You must attend all six (6) clinics to qualify for play-offs, unless an appeal is approved by the board. </li>*/
/*     <li>A sign-up sheet will be forwarded to each clinician by the Regional Supervisor prior to the meeting.</li>*/
/*     <li>All meetings will start promptly at the time designated, thus don't be late!  The maximum length of each meeting is two (2) hours, but in most cases will end much sooner.  Please plan accordingly.</li>*/
/*     <li>You may attend a local clinic in your area, or at another location, as long as it is attended within that week. Attending two sites in one week, does not give you credit for two clinics!!!</li>*/
/*     <li>Clinicians for each clinic will be assigned at a later date by the Regional Supervisor.</li>*/
/*     <li>Materials and information covered at each clinic will be decided by the Regional Supervisor.</li>*/
/*     <li>Each local clinic site will cover the same information on the same dates.</li>*/
/*     <li>Local clinic dates and times may not be changed.  Locations may be changed with approval from the board.</li>*/
/* </ul>*/
/* */
/* <!-- Football -->*/
/* */
/* <h2 id="Football" class="center">Football</h2>*/
/* */
/* <div class="table-responsive">*/
/*     <table class="table table-striped">*/
/*         <thead>*/
/*             <tr>*/
/*             <td><strong>Meeting</strong></td>*/
/*                 <td><strong>Date</strong></td>*/
/*                 <td><strong>Time</strong></td>*/
/*                 <td><strong>Location</strong></td>*/
/*                 <td><strong>Site</strong></td>*/
/*             </tr>*/
/*         </thead>*/
/* */
/*         {% setcontent clinicsandmeetings = 'clinicormeeting' %}*/
/* */
/*         {% for clinicormeeting in clinicsandmeetings %}*/
/* */
/*         {% if clinicormeeting.sport == 'Football' %}*/
/* */
/*         <tr>*/
/*             <td><p>{{ clinicormeeting.meeting }}</p></td>*/
/*             <td><p>{{ clinicormeeting.date_and_time|date('m/d/Y') }}</p></td>*/
/*             <td><p>{{ clinicormeeting.date_and_time|date('g:ia') }}</p></td>*/
/*             <td><p>{{ clinicormeeting.location }}</p></td>*/
/*             <td><p>{{ clinicormeeting.site }}</p></td>*/
/*         </tr>*/
/* */
/*         {% endif %}*/
/* */
/*         {% endfor %}*/
/* */
/*     </table>*/
/* </div>*/
/* */
/* <!-- END Football -->*/
/* */
/* <ul>*/
/*     <li>The Local Association meeting is required by the association.</li>*/
/*     <li>The State Clinic is required in order to officiate post-season play.</li>*/
/*     <li>You must attend all six (6) clinics to qualify for play-offs, unless an appeal is approved by the board. </li>*/
/*     <li>A sign-up sheet will be forwarded to each clinician by the Regional Supervisor prior to the meeting.</li>*/
/*     <li>All meetings will start promptly at the time designated, thus don't be late!  The maximum length of each meeting is two (2) hours, but in most cases will end much sooner.  Please plan accordingly.</li>*/
/*     <li>You may attend a local clinic in your area, or at another location, as long as it is attended within that week. Attending two sites in one week, does not give you credit for two clinics!!!</li>*/
/*     <li>Clinicians for each clinic will be assigned at a later date by the Regional Supervisor.</li>*/
/*     <li>Materials and information covered at each clinic will be decided by the Regional Supervisor.</li>*/
/*     <li>Each local clinic site will cover the same information on the same dates.</li>*/
/*     <li>Local clinic dates and times may not be changed.  Locations may be changed with approval from the board.</li>*/
/* </ul>*/
/* */
/* {% include '_footer.twig' %}*/
/* */
