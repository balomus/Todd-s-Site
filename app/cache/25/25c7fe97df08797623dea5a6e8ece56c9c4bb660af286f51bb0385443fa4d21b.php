<?php

/* committees.twig */
class __TwigTemplate_98627f6ad715c7ade92e70abed8f657f844327667f1f9ab97b0858e265fd8747 extends Twig_Template
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
        $this->loadTemplate("_header.twig", "committees.twig", 1)->display($context);
        // line 2
        echo "

";
        // line 4
        $template_storage = new Bolt\Storage($context['app']);
        $context['committees'] =         $template_storage->getContent("committee", array() );
        // line 5
        echo "
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["committees"]) ? $context["committees"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["committee"]) {
            // line 7
            echo "
";
            // line 8
            if (($this->getAttribute($context["committee"], "sport", array()) == "Basketball")) {
                // line 9
                echo "  <h2>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["committee"], "committee", array()), "html", null, true);
                echo " <i class=\"icon-nba\"></i></h2>
\t<p>";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["committee"], "members", array()), "html", null, true);
                echo "</p>
";
            }
            // line 12
            echo "
";
            // line 13
            if (($this->getAttribute($context["committee"], "sport", array()) == "Football")) {
                // line 14
                echo "  <h2>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["committee"], "committee", array()), "html", null, true);
                echo " <i class=\"icon-nfl\"></i></h2>
\t<p>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["committee"], "members", array()), "html", null, true);
                echo "</p>
";
            }
            // line 17
            echo "
";
            // line 18
            if (($this->getAttribute($context["committee"], "sport", array()) == "Both")) {
                // line 19
                echo "  <h2>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["committee"], "committee", array()), "html", null, true);
                echo " <i class=\"icon-nba\"></i><i class=\"icon-nfl\"></i></h2>
\t<p>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["committee"], "members", array()), "html", null, true);
                echo "</p>
";
            }
            // line 22
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['committee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
";
        // line 25
        $this->loadTemplate("_footer.twig", "committees.twig", 25)->display($context);
    }

    public function getTemplateName()
    {
        return "committees.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 25,  87 => 24,  80 => 22,  75 => 20,  70 => 19,  68 => 18,  65 => 17,  60 => 15,  55 => 14,  53 => 13,  50 => 12,  45 => 10,  40 => 9,  38 => 8,  35 => 7,  31 => 6,  28 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* */
/* {% setcontent committees = "committee" %}*/
/* */
/* {% for committee in committees %}*/
/* */
/* {% if committee.sport == 'Basketball' %}*/
/*   <h2>{{ committee.committee }} <i class="icon-nba"></i></h2>*/
/* 	<p>{{ committee.members }}</p>*/
/* {% endif %}*/
/* */
/* {% if committee.sport == 'Football' %}*/
/*   <h2>{{ committee.committee }} <i class="icon-nfl"></i></h2>*/
/* 	<p>{{ committee.members }}</p>*/
/* {% endif %}*/
/* */
/* {% if committee.sport == 'Both' %}*/
/*   <h2>{{ committee.committee }} <i class="icon-nba"></i><i class="icon-nfl"></i></h2>*/
/* 	<p>{{ committee.members }}</p>*/
/* {% endif %}*/
/* */
/* {% endfor %}*/
/* */
/* {% include '_footer.twig' %}*/
/* */
