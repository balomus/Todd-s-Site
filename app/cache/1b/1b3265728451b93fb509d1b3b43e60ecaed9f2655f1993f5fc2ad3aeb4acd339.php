<?php

/* _header.twig */
class __TwigTemplate_9db1b51386aea2342385bd66bf2443f229d226173c734017ec546a9b32c24e02 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>My Site</title>
  <!-- References -->
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
  <link rel=\"stylesheet\" href=\"https://bootswatch.com/cosmo/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "css/soa.css\">
  <!-- END References -->
</head>
<body>

<header>
  <nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"/bolt\">Southwestern Officials Association</a>
      </div>
      <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
        <ul class=\"nav navbar-nav navbar-right\">
          <li><a href=\"/bolt\">Home</a></li>
          <li><a href=\"news\">News</a></li>
          <li><a href=\"clinicsmeetings\">Clinics / Meetings</a></li>
          <li><a href=\"#\">Contact Us</a></li>
          <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">More <span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu\">
              <li><a href=\"promotionalpoints\">Promotional Points</a></li>
              <li><a href=\"rulechanges\">Rule Changes</a></li>
              <li><a href=\"board\">Board of Directors</a></li>
              <li><a href=\"committees\">Committees</a></li>
              <li><a href=\"constitutionandbylaws\">Constitution / Bylaws</a></li>
              <li><a href=\"socialmediapolicies\">Social Media Policy</a></li>
              <li><a href=\"#\">Schools / Leagues / Teams</a></li>
              <li><a href=\"#\">Game Fees</a></li>
              <li><a href=\"#\">Evaluations</a></li>
              <li><a href=\"#\">Awards</a></li>
              <li><a href=\"#\">Pictures</a></li>
              <li><a href=\"#\">Application / Registration</a></li>
              <li><a href=\"#\">Links</a></li>
            </ul>
        </ul>
      </div>
    </div>
  </nav><!-- /nav -->
</header><!-- /header -->

<main>
<div class=\"container\">
";
    }

    public function getTemplateName()
    {
        return "_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 11,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*   <meta charset="UTF-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*   <title>My Site</title>*/
/*   <!-- References -->*/
/*   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>*/
/*   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*   <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">*/
/*   <link rel="stylesheet" href="{{ paths.theme }}css/soa.css">*/
/*   <!-- END References -->*/
/* </head>*/
/* <body>*/
/* */
/* <header>*/
/*   <nav class="navbar navbar-default">*/
/*     <div class="container-fluid">*/
/*       <div class="navbar-header">*/
/*         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">*/
/*           <span class="sr-only">Toggle navigation</span>*/
/*           <span class="icon-bar"></span>*/
/*           <span class="icon-bar"></span>*/
/*           <span class="icon-bar"></span>*/
/*         </button>*/
/*         <a class="navbar-brand" href="/bolt">Southwestern Officials Association</a>*/
/*       </div>*/
/*       <div class="collapse navbar-collapse" id="myNavbar">*/
/*         <ul class="nav navbar-nav navbar-right">*/
/*           <li><a href="/bolt">Home</a></li>*/
/*           <li><a href="news">News</a></li>*/
/*           <li><a href="clinicsmeetings">Clinics / Meetings</a></li>*/
/*           <li><a href="#">Contact Us</a></li>*/
/*           <li class="dropdown">*/
/*             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>*/
/*             <ul class="dropdown-menu">*/
/*               <li><a href="promotionalpoints">Promotional Points</a></li>*/
/*               <li><a href="rulechanges">Rule Changes</a></li>*/
/*               <li><a href="board">Board of Directors</a></li>*/
/*               <li><a href="committees">Committees</a></li>*/
/*               <li><a href="constitutionandbylaws">Constitution / Bylaws</a></li>*/
/*               <li><a href="socialmediapolicies">Social Media Policy</a></li>*/
/*               <li><a href="#">Schools / Leagues / Teams</a></li>*/
/*               <li><a href="#">Game Fees</a></li>*/
/*               <li><a href="#">Evaluations</a></li>*/
/*               <li><a href="#">Awards</a></li>*/
/*               <li><a href="#">Pictures</a></li>*/
/*               <li><a href="#">Application / Registration</a></li>*/
/*               <li><a href="#">Links</a></li>*/
/*             </ul>*/
/*         </ul>*/
/*       </div>*/
/*     </div>*/
/*   </nav><!-- /nav -->*/
/* </header><!-- /header -->*/
/* */
/* <main>*/
/* <div class="container">*/
/* */
