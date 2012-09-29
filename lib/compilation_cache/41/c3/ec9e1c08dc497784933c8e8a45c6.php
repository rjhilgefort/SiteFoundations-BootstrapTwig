<?php

/* lib/bootstrap.html.twig */
class __TwigTemplate_41c3ec9e1c08dc497784933c8e8a45c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("lib/base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'otherIncludes' => array($this, 'block_otherIncludes'),
            'body' => array($this, 'block_body'),
            'googleAnalytics' => array($this, 'block_googleAnalytics'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "lib/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "  <link href=\"lib/bootstrap/css/bootstrap.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
  <link href=\"lib/bootstrap/css/bootstrap-responsive.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
  <link href=\"app/main.less\" type=\"text/less\" rel=\"stylesheet\" media=\"screen\" />
";
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        // line 12
        echo "  <!-- Libraries -->
  <script src=\"lib/jquery-1.8.0.js\" type=\"text/javascript\"></script>
  <script src=\"lib/bootstrap/js/bootstrap.js\" type=\"text/javascript\"></script>
  <script src=\"lib/jquery.bootstrap-growl.js\" type=\"text/javascript\"></script>
  <script src=\"lib/less-1.3.0.min.js\" type=\"text/javascript\"></script>
  <!-- Application custom scripting -->
  <script src=\"lib/lib-functions.js\" type=\"text/javascript\"></script>
  <script src=\"app/main.js\" type=\"text/javascript\"></script>
  
";
    }

    // line 23
    public function block_otherIncludes($context, array $blocks = array())
    {
        // line 24
        echo "  <!--[if lt IE 9]>
      <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
  <![endif]-->
  <link rel=\"shortcut icon\" href=\"http://robhilgefort.com/rhcircle.ico\" />
";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 31
        echo "
";
    }

    // line 34
    public function block_googleAnalytics($context, array $blocks = array())
    {
        // line 35
        echo "  ";
    }

    public function getTemplateName()
    {
        return "lib/bootstrap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 35,  81 => 34,  76 => 31,  73 => 30,  65 => 24,  62 => 23,  49 => 12,  46 => 11,  39 => 6,  36 => 5,  31 => 3,);
    }
}
