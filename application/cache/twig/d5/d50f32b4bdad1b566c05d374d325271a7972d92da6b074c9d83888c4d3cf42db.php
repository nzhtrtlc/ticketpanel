<?php

/* blocks/navbar.twig */
class __TwigTemplate_565013541bf50fca6652b24a0a9be5c47a49137e92680524b2d9c62017406bf0 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-transparent navbar-absolute\">
    <div class=\"container-fluid\">
        <div class=\"navbar-minimize\">
            <button id=\"minimizeSidebar\" class=\"btn btn-round btn-white btn-fill btn-just-icon\">
                <i class=\"material-icons visible-on-sidebar-regular\">more_vert</i>
                <i class=\"material-icons visible-on-sidebar-mini\">view_list</i>
                <div class=\"ripple-container\"></div></button>
        </div>
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\"> Dashboard </a>
        </div>
        <div class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <a href=\"#pablo\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"material-icons\">dashboard</i>
                        <p class=\"hidden-lg hidden-md\">Dashboard</p>
                    </a>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"material-icons\">notifications</i>
                        <span class=\"notification\">5</span>
                        <p class=\"hidden-lg hidden-md\">
                            Notifications
                            <b class=\"caret\"></b>
                        </p>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a href=\"#\">Mike John responded to your email</a>
                        </li>
                        <li>
                            <a href=\"#\">You have 5 new tasks</a>
                        </li>
                        <li>
                            <a href=\"#\">You're now friend with Andrew</a>
                        </li>
                        <li>
                            <a href=\"#\">Another Notification</a>
                        </li>
                        <li>
                            <a href=\"#\">Another One</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href=\"#pablo\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"material-icons\">person</i>
                        <p class=\"hidden-lg hidden-md\">Profile</p>
                    </a>
                </li>
                <li class=\"separator hidden-lg hidden-md\"></li>
            </ul>
            <form class=\"navbar-form navbar-right\" role=\"search\">
                <div class=\"form-group form-search is-empty\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                    <span class=\"material-input\"></span>
                    <span class=\"material-input\"></span></div>
                <button type=\"submit\" class=\"btn btn-white btn-round btn-just-icon\">
                    <i class=\"material-icons\">search</i>
                    <div class=\"ripple-container\"></div>
                </button>
            </form>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "blocks/navbar.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-transparent navbar-absolute\">
    <div class=\"container-fluid\">
        <div class=\"navbar-minimize\">
            <button id=\"minimizeSidebar\" class=\"btn btn-round btn-white btn-fill btn-just-icon\">
                <i class=\"material-icons visible-on-sidebar-regular\">more_vert</i>
                <i class=\"material-icons visible-on-sidebar-mini\">view_list</i>
                <div class=\"ripple-container\"></div></button>
        </div>
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\"> Dashboard </a>
        </div>
        <div class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <a href=\"#pablo\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"material-icons\">dashboard</i>
                        <p class=\"hidden-lg hidden-md\">Dashboard</p>
                    </a>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"material-icons\">notifications</i>
                        <span class=\"notification\">5</span>
                        <p class=\"hidden-lg hidden-md\">
                            Notifications
                            <b class=\"caret\"></b>
                        </p>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a href=\"#\">Mike John responded to your email</a>
                        </li>
                        <li>
                            <a href=\"#\">You have 5 new tasks</a>
                        </li>
                        <li>
                            <a href=\"#\">You're now friend with Andrew</a>
                        </li>
                        <li>
                            <a href=\"#\">Another Notification</a>
                        </li>
                        <li>
                            <a href=\"#\">Another One</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href=\"#pablo\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"material-icons\">person</i>
                        <p class=\"hidden-lg hidden-md\">Profile</p>
                    </a>
                </li>
                <li class=\"separator hidden-lg hidden-md\"></li>
            </ul>
            <form class=\"navbar-form navbar-right\" role=\"search\">
                <div class=\"form-group form-search is-empty\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                    <span class=\"material-input\"></span>
                    <span class=\"material-input\"></span></div>
                <button type=\"submit\" class=\"btn btn-white btn-round btn-just-icon\">
                    <i class=\"material-icons\">search</i>
                    <div class=\"ripple-container\"></div>
                </button>
            </form>
        </div>
    </div>
</nav>", "blocks/navbar.twig", "C:\\wamp64\\www\\ci_test\\application\\views\\blocks\\navbar.twig");
    }
}
