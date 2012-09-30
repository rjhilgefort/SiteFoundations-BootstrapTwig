<?php

/* lib/base.html.twig */
class __TwigTemplate_39d2bc66c29acf01941af0c8055a7649 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'otherIncludes' => array($this, 'block_otherIncludes'),
            'body' => array($this, 'block_body'),
            'googleAnalytics' => array($this, 'block_googleAnalytics'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
    <meta charset=\"utf-8\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " | RH.com</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"A Website By Rob Hilgefort\">
    <meta name=\"author\" content=\"Rob Hilgefort\">

    <!-- CSS Includes -->
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
    <!-- JS Includes -->
    ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "
    <!-- Other Includes -->
    ";
        // line 18
        $this->displayBlock('otherIncludes', $context, $blocks);
        // line 19
        echo "
  </head>
  <body>
    ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "
    <!-- Google Analytics -->
    ";
        // line 27
        $this->displayBlock('googleAnalytics', $context, $blocks);
        // line 28
        echo "
  </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 18
    public function block_otherIncludes($context, array $blocks = array())
    {
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "      ";
        // line 24
        echo "    ";
    }

    // line 27
    public function block_googleAnalytics($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "lib/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  103 => 27,  99 => 24,  97 => 23,  94 => 22,  89 => 18,  79 => 12,  66 => 28,  64 => 27,  60 => 25,  58 => 22,  53 => 19,  51 => 18,  47 => 16,  45 => 15,  41 => 13,  30 => 6,  23 => 1,  84 => 15,  81 => 34,  76 => 31,  73 => 6,  65 => 24,  62 => 23,  49 => 12,  46 => 11,  39 => 12,  36 => 5,  31 => 3,);
    }
}
