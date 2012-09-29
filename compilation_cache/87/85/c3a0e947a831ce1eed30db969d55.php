<?php

/* bootstrap.html.twig */
class __TwigTemplate_8785c3a0e947a831ce1eed30db969d55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'otherIncludes' => array($this, 'block_otherIncludes'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'googleAnalytics' => array($this, 'block_googleAnalytics'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
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
        echo "  <link href=\"../../lib/bootstrap/css/bootstrap.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
  <link href=\"../../lib/bootstrap/css/bootstrap-responsive.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
  <link href=\"app/main.less\" type=\"text/less\" rel=\"stylesheet\" media=\"screen\" />
";
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        // line 12
        echo "  <!-- Libraries -->
  <script src=\"../../lib/jquery-1.8.0.js\" type=\"text/javascript\"></script>
  <script src=\"../../lib/bootstrap/js/bootstrap.js\" type=\"text/javascript\"></script>
  <script src=\"../../lib/jquery.bootstrap-growl.js\" type=\"text/javascript\"></script>
  <script src=\"../../lib/less-1.3.0.min.js\" type=\"text/javascript\"></script>
  <!-- Application custom scripting -->
  <script src=\"app/main.js\" type=\"text/javascript\"></script>
";
    }

    // line 21
    public function block_otherIncludes($context, array $blocks = array())
    {
        // line 22
        echo "  <!--[if lt IE 9]>
      <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
  <![endif]-->
  <link rel=\"shortcut icon\" href=\"http://robhilgefort.com/rhcircle.ico\" />
";
    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        // line 29
        echo "  <div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"navbar-inner\">
      <div class=\"container-fluid\">
        
        <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </a>
        
        <a class=\"brand\" href=\"Home\">PNG IMS</a>
        
        <div class=\"btn-group pull-right\">
          <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            <i class=\"icon-user\"></i> Username
            <span class=\"caret\"></span>
          </a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"#\">Profile</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"#\">Sign Out</a></li>
          </ul>
        </div>
        
        <div class=\"nav-collapse\">
          <ul class=\"nav\">
            <li>
              <a href=\"Home\">
                <i class=\"icon-search icon-white\"></i> Search
              </a>
            </li>
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                <i class=\"icon-list-alt icon-white\"></i> Product Orders
                <b class=\"caret\"></b>
              </a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"Pos\"><i class=\"icon-home\"></i> Home</a></li>
                <li><a href=\"Pos_Create\"><i class=\"icon-pencil\"></i> Create</a></li>
                <li><a href=\"Pos_View\"><i class=\"icon-eye-open\"></i> View/Edit</a></li>
              </ul>
            </li>
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                <i class=\"icon-hdd icon-white\"></i> Devices
                <b class=\"caret\"></b>
              </a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"Devices\"><i class=\"icon-home\"></i> Home</a></li>
                <li><a href=\"Devices_Create\"><i class=\"icon-pencil\"></i> Create</a></li>
                <li><a href=\"Devices_View\"><i class=\"icon-eye-open\"></i> View/Edit</a></li>
              </ul>
            </li>
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                <i class=\"icon-hand-right icon-white\"></i> Actions
                <b class=\"caret\"></b>
              </a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"#\"><i class=\"icon-hand-up\"></i> Pick</a></li>
                <li><a href=\"#\"><i class=\"icon-hand-down\"></i> Return</a></li>
              </ul>
            </li>
            <li>
              <a href=\"#\">
                <i class=\"icon-file icon-white\"></i> Reports
              </a>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      
      </div>
    </div>
  </div>
    
  <div class=\"container-fluid\">
    ";
        // line 105
        $this->displayBlock('content', $context, $blocks);
        // line 106
        echo "
    <footer>
      ";
        // line 108
        $this->displayBlock('footer', $context, $blocks);
        // line 109
        echo "    </footer>

  </div> <!-- End main container -->
";
    }

    // line 105
    public function block_content($context, array $blocks = array())
    {
    }

    // line 108
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 114
    public function block_googleAnalytics($context, array $blocks = array())
    {
        // line 115
        echo "  ";
    }

    public function getTemplateName()
    {
        return "bootstrap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 115,  179 => 114,  174 => 108,  169 => 105,  162 => 109,  160 => 108,  156 => 106,  154 => 105,  76 => 29,  73 => 28,  65 => 22,  62 => 21,  51 => 12,  48 => 11,  41 => 6,  38 => 5,  33 => 3,);
    }
}
