<?php

/* layout.html.twig */
class __TwigTemplate_a3cfc0aeca9fb069daba1b5b021d0be6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("lib/bootstrap.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'nav' => array($this, 'block_nav'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "lib/bootstrap.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        $this->displayBlock('nav', $context, $blocks);
        // line 80
        echo "
  <div class=\"container-fluid\">
    <header>
    ";
        // line 83
        $this->displayBlock('header', $context, $blocks);
        // line 86
        echo "    </header>

    ";
        // line 88
        $this->displayBlock('content', $context, $blocks);
        // line 91
        echo "
    <footer>
    ";
        // line 93
        $this->displayBlock('footer', $context, $blocks);
        // line 96
        echo "    </footer>
  </div> <!-- End main container -->
";
    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"navbar navbar-inverse navbar-static-top\">
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
  ";
    }

    // line 83
    public function block_header($context, array $blocks = array())
    {
        // line 84
        echo "
    ";
    }

    // line 88
    public function block_content($context, array $blocks = array())
    {
        // line 89
        echo "
    ";
    }

    // line 93
    public function block_footer($context, array $blocks = array())
    {
        // line 94
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 94,  158 => 93,  153 => 89,  150 => 88,  145 => 84,  142 => 83,  64 => 5,  61 => 4,  55 => 96,  53 => 93,  49 => 91,  47 => 88,  43 => 86,  41 => 83,  36 => 80,  33 => 4,  30 => 3,);
    }
}
