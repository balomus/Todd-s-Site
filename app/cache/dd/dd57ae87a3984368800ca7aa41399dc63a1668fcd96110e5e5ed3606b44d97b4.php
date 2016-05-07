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
        echo "<!-- Basketball -->
<h2>Basketball</h2>

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
        // line 17
        $template_storage = new Bolt\Storage($context['app']);
        $context['clinicsandmeetings'] =         $template_storage->getContent("clinicormeeting", array() );
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clinicsandmeetings"]) ? $context["clinicsandmeetings"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["clinicormeeting"]) {
            // line 20
            echo "
        ";
            // line 21
            if (($this->getAttribute($context["clinicormeeting"], "sport", array()) == "Basketball")) {
                // line 22
                echo "
        <tr>
            <td><p>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["clinicormeeting"], "meeting", array()), "html", null, true);
                echo "</p></td>
            <td><p>";
                // line 25
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["clinicormeeting"], "date_and_time", array()), "m/d/Y"), "html", null, true);
                echo "</p></td>
            <td><p>";
                // line 26
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["clinicormeeting"], "date_and_time", array()), "g:ia"), "html", null, true);
                echo "</p></td>
            <td><p>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["clinicormeeting"], "location", array()), "html", null, true);
                echo "</p></td>
            <td><p>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["clinicormeeting"], "site", array()), "html", null, true);
                echo "</p></td>
        </tr>

        ";
            }
            // line 32
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clinicormeeting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        
    </table>
</div>

<!-- END Basketball -->

<!-- Football -->

<h2>Football</h2>

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
        // line 56
        $template_storage = new Bolt\Storage($context['app']);
        $context['clinicsandmeetings'] =         $template_storage->getContent("clinicormeeting", array() );
        // line 57
        echo "
        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clinicsandmeetings"]) ? $context["clinicsandmeetings"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["clinicormeeting"]) {
            // line 59
            echo "
        ";
            // line 60
            if (($this->getAttribute($context["clinicormeeting"], "sport", array()) == "Football")) {
                // line 61
                echo "
        <tr>
            <td><p>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["clinicormeeting"], "meeting", array()), "html", null, true);
                echo "</p></td>
            <td><p>";
                // line 64
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["clinicormeeting"], "date_and_time", array()), "m/d/Y"), "html", null, true);
                echo "</p></td>
            <td><p>";
                // line 65
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["clinicormeeting"], "date_and_time", array()), "g:ia"), "html", null, true);
                echo "</p></td>
            <td><p>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["clinicormeeting"], "location", array()), "html", null, true);
                echo "</p></td>
            <td><p>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["clinicormeeting"], "site", array()), "html", null, true);
                echo "</p></td>
        </tr>

        ";
            }
            // line 71
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clinicormeeting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
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
        // line 92
        $this->loadTemplate("_footer.twig", "clinicsandmeetings.twig", 92)->display($context);
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
        return array (  181 => 92,  160 => 73,  153 => 71,  146 => 67,  142 => 66,  138 => 65,  134 => 64,  130 => 63,  126 => 61,  124 => 60,  121 => 59,  117 => 58,  114 => 57,  111 => 56,  87 => 34,  80 => 32,  73 => 28,  69 => 27,  65 => 26,  61 => 25,  57 => 24,  53 => 22,  51 => 21,  48 => 20,  44 => 19,  41 => 18,  38 => 17,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* <!-- Basketball -->*/
/* <h2>Basketball</h2>*/
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
/*         */
/*     </table>*/
/* </div>*/
/* */
/* <!-- END Basketball -->*/
/* */
/* <!-- Football -->*/
/* */
/* <h2>Football</h2>*/
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
/*         */
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
