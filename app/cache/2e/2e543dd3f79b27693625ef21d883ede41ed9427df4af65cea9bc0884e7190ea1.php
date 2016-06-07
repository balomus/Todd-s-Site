<?php

/* awards.twig */
class __TwigTemplate_e129edb61b256f0ddd2d6b279aa1d4058ef5d4c6b061ee6da5ce6bf00546a3db extends Twig_Template
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
        $this->loadTemplate("_header.twig", "awards.twig", 1)->display($context);
        // line 2
        echo "
<h1 class=\"center\"><a href=\"#Basketball\"><i class=\"icon-nba\"></i> Basketball Awards</a></h1>
<h1 class=\"center\"><a href=\"#Football\"><i class=\"icon-nfl\"></i> Football Awards</a></h1>

<h2 id=\"Basketball\" class=\"center\">Basketball</h2>


<div class=\"row\">
    ";
        // line 10
        $template_storage = new Bolt\Storage($context['app']);
        $context['awards'] =         $template_storage->getContent("award", array() );
        // line 11
        echo "
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["awards"]) ? $context["awards"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["award"]) {
            // line 13
            echo "
    ";
            // line 14
            if (($this->getAttribute($context["award"], "sport", array()) == "Basketball")) {
                // line 15
                echo "
    <div class=\"col-md-4 col-sm-6 col-xs-12\">
        <h3>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["award"], "title", array()), "html", null, true);
                echo "</h3>
        <p>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["award"], "content", array()), "html", null, true);
                echo "</p>
    </div>
    ";
            }
            // line 21
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['award'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
</div>

<div class=\"row\">

    <h2 id=\"Football\" class=\"center\">Football</h2>

    ";
        // line 30
        $template_storage = new Bolt\Storage($context['app']);
        $context['awards'] =         $template_storage->getContent("award", array() );
        // line 31
        echo "
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["awards"]) ? $context["awards"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["award"]) {
            // line 33
            echo "
    ";
            // line 34
            if (($this->getAttribute($context["award"], "sport", array()) == "Football")) {
                // line 35
                echo "
    <div class=\"col-md-4 col-sm-6 col-xs-12\">
        <h3>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["award"], "title", array()), "html", null, true);
                echo "</h3>
        <p>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["award"], "content", array()), "html", null, true);
                echo "</p>
    </div>
    ";
            }
            // line 41
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['award'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
</div>

";
        // line 46
        $this->loadTemplate("_footer.twig", "awards.twig", 46)->display($context);
    }

    public function getTemplateName()
    {
        return "awards.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 46,  112 => 43,  105 => 41,  99 => 38,  95 => 37,  91 => 35,  89 => 34,  86 => 33,  82 => 32,  79 => 31,  76 => 30,  67 => 23,  60 => 21,  54 => 18,  50 => 17,  46 => 15,  44 => 14,  41 => 13,  37 => 12,  34 => 11,  31 => 10,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* <h1 class="center"><a href="#Basketball"><i class="icon-nba"></i> Basketball Awards</a></h1>*/
/* <h1 class="center"><a href="#Football"><i class="icon-nfl"></i> Football Awards</a></h1>*/
/* */
/* <h2 id="Basketball" class="center">Basketball</h2>*/
/* */
/* */
/* <div class="row">*/
/*     {% setcontent awards = "award" %}*/
/* */
/*     {% for award in awards %}*/
/* */
/*     {% if award.sport == 'Basketball' %}*/
/* */
/*     <div class="col-md-4 col-sm-6 col-xs-12">*/
/*         <h3>{{ award.title }}</h3>*/
/*         <p>{{ award.content }}</p>*/
/*     </div>*/
/*     {% endif %}*/
/* */
/*     {% endfor %}*/
/* */
/* </div>*/
/* */
/* <div class="row">*/
/* */
/*     <h2 id="Football" class="center">Football</h2>*/
/* */
/*     {% setcontent awards = "award" %}*/
/* */
/*     {% for award in awards %}*/
/* */
/*     {% if award.sport == 'Football' %}*/
/* */
/*     <div class="col-md-4 col-sm-6 col-xs-12">*/
/*         <h3>{{ award.title }}</h3>*/
/*         <p>{{ award.content }}</p>*/
/*     </div>*/
/*     {% endif %}*/
/* */
/*     {% endfor %}*/
/* */
/* </div>*/
/* */
/* {% include '_footer.twig' %}*/
/* */
