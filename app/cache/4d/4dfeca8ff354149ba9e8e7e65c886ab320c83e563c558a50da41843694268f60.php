<?php

/* contactus.twig */
class __TwigTemplate_de7ffdf2312ee22458e48ffbed6b95ca0c91d71e52534acca33ef8826b9799de extends Twig_Template
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
        $this->loadTemplate("_header.twig", "contactus.twig", 1)->display($context);
        // line 2
        echo "
<h1 class=\"center\">Contact Us</h1>

";
        // line 5
        $template_storage = new Bolt\Storage($context['app']);
        $context['contactus'] =         $template_storage->getContent("contact", array() );
        // line 6
        echo "
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contactus"]) ? $context["contactus"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 8
            echo "<form method=\"post\" action=\"form-to-email.php\">

    <label for=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "name", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "name", array()), "html", null, true);
            echo "</label>
    <input type=\"text\" class=\"form-control\" name=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "name", array()), "html", null, true);
            echo "\">

    <label for=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "email", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "email", array()), "html", null, true);
            echo "</label>
    <input type=\"text\" class=\"form-control\" name=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "email", array()), "html", null, true);
            echo "\">

    <label for=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "phone", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "phone", array()), "html", null, true);
            echo "</label>
    <input type=\"text\" class=\"form-control\" name=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "phone", array()), "html", null, true);
            echo "\">

    <label for=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "subject", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "subject", array()), "html", null, true);
            echo "</label>
    <input type=\"text\" class=\"form-control\" name=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "subect", array()), "html", null, true);
            echo "\">

    <label for=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "message", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "message", array()), "html", null, true);
            echo "</label>
    <!-- <input type=\"text\" class=\"form-control\" name=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "message", array()), "html", null, true);
            echo "\"> -->
    <textarea class=\"form-control\" rows=\"5\" name=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "message", array()), "html", null, true);
            echo "\"></textarea>

    <br>

    <input type=\"submit\" value=\"Send\">

</form>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
";
        // line 34
        $this->loadTemplate("_footer.twig", "contactus.twig", 34)->display($context);
    }

    public function getTemplateName()
    {
        return "contactus.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 34,  109 => 33,  94 => 24,  90 => 23,  84 => 22,  79 => 20,  73 => 19,  68 => 17,  62 => 16,  57 => 14,  51 => 13,  46 => 11,  40 => 10,  36 => 8,  32 => 7,  29 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* <h1 class="center">Contact Us</h1>*/
/* */
/* {% setcontent contactus = "contact" %}*/
/* */
/* {% for contact in contactus %}*/
/* <form method="post" action="form-to-email.php">*/
/* */
/*     <label for="{{ contact.name }}">{{ contact.name }}</label>*/
/*     <input type="text" class="form-control" name="{{ contact.name }}">*/
/* */
/*     <label for="{{ contact.email }}">{{ contact.email }}</label>*/
/*     <input type="text" class="form-control" name="{{ contact.email }}">*/
/* */
/*     <label for="{{ contact.phone }}">{{ contact.phone }}</label>*/
/*     <input type="text" class="form-control" name="{{ contact.phone }}">*/
/* */
/*     <label for="{{ contact.subject }}">{{ contact.subject }}</label>*/
/*     <input type="text" class="form-control" name="{{ contact.subect }}">*/
/* */
/*     <label for="{{ contact.message }}">{{ contact.message }}</label>*/
/*     <!-- <input type="text" class="form-control" name="{{ contact.message }}"> -->*/
/*     <textarea class="form-control" rows="5" name="{{ contact.message }}"></textarea>*/
/* */
/*     <br>*/
/* */
/*     <input type="submit" value="Send">*/
/* */
/* </form>*/
/* */
/* {% endfor %}*/
/* */
/* {% include '_footer.twig' %}*/
/* */
