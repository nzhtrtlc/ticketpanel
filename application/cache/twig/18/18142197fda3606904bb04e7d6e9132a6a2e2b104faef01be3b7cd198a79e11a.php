<?php

/* login.twig */
class __TwigTemplate_98f79b2648359b1647b1fcfc1cbfaca4d4e70be686f036169203e8f7264d5dfd extends Twig_Template
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
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Giriş Yap</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name=\"viewport\" content=\"width=device-width\" />

    <!-- Bootstrap core CSS     -->
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, base_url("public/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!--  Material Dashboard CSS    -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, base_url("public/assets/css/material-dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    <!--     Fonts and icons     -->
    <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>
<body style=\"overflow: inherit;\">
<div class=\"wrapper wrapper-full-page\">
    <div class=\"full-page login-page\" filter-color=\"black\" data-image=\"";
        // line 21
        echo twig_escape_filter($this->env, base_url("public/assets/img/login.jpeg"), "html", null, true);
        echo "\">
        <!--   you can change the color of the filter page using: data-color=\"blue | purple | green | orange | red | rose \" -->
        <div class=\"content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3\">
                        <form method=\"post\" action=\"";
        // line 27
        echo twig_escape_filter($this->env, base_url("login/checkUser"), "html", null, true);
        echo "\">
                            <div class=\"card card-login\">
                                <div class=\"card-header text-center\" data-background-color=\"rose\">
                                    <h4 class=\"card-title\">Giriş</h4>
                                </div>
                                <div class=\"card-content\">
                                    <div class=\"input-group\">
                                            <span class=\"input-group-addon\">
                                                <i class=\"material-icons\">email</i>
                                            </span>
                                        <div class=\"form-group label-floating is-empty\">
                                            <label class=\"control-label\">Email address</label>
                                            <input name=\"email\" type=\"email\" class=\"form-control\" required>
                                            <span class=\"material-input\"></span></div>
                                    </div>
                                    <div class=\"input-group\">
                                            <span class=\"input-group-addon\">
                                                <i class=\"material-icons\">lock_outline</i>
                                            </span>
                                        <div class=\"form-group label-floating is-empty\">
                                            <label class=\"control-label\">Password</label>
                                            <input name=\"pass\" type=\"password\" class=\"form-control\" required>
                                            <span class=\"material-input\"></span></div>
                                    </div>
                                    ";
        // line 51
        if ((($context["loginError"] ?? null) == true)) {
            // line 52
            echo "                                    <div class=\"card\">
                                        <div class=\"alert alert-danger\">
                                            <button type=\"button\" aria-hidden=\"true\" class=\"close\">×</button>
                                            <span><b> Hata - </b> Kullanici bilgileri hatali.</span>
                                        </div>
                                    </div>
                                    ";
        }
        // line 59
        echo "                                </div>
                                <div class=\"footer text-center\">
                                    <button type=\"submit\" class=\"btn btn-rose btn-primary btn-wd btn-lg\">Gİrİş Yap<div class=\"ripple-container\"></div></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--<footer class=\"footer\">
            <div class=\"container\">
                <nav class=\"pull-left\">
                    <ul>
                        <li>
                            <a href=\"#\">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class=\"copyright pull-right\">
                    ©
                    <script async=\"\" src=\"//www.google-analytics.com/analytics.js\"></script><script>
                        document.write(new Date().getFullYear())
                    </script>2017
                    <a href=\"http://www.creative-tim.com\">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>-->
        <div class=\"full-page-background\" style=\"background-image: url(";
        // line 104
        echo twig_escape_filter($this->env, base_url("public/assets/img/login.jpeg"), "html", null, true);
        echo ");\"></div></div>
</div>
<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, base_url("public/assets/js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, base_url("public/assets/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, base_url("public/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, base_url("public/assets/js/material.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, base_url("public/assets/js/material-dashboard.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 110,  158 => 109,  154 => 108,  150 => 107,  146 => 106,  141 => 104,  94 => 59,  85 => 52,  83 => 51,  56 => 27,  47 => 21,  36 => 13,  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Giriş Yap</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name=\"viewport\" content=\"width=device-width\" />

    <!-- Bootstrap core CSS     -->
    <link href=\"{{ base_url('public/assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\" />

    <!--  Material Dashboard CSS    -->
    <link href=\"{{ base_url('public/assets/css/material-dashboard.css') }}\" rel=\"stylesheet\"/>

    <!--     Fonts and icons     -->
    <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>
<body style=\"overflow: inherit;\">
<div class=\"wrapper wrapper-full-page\">
    <div class=\"full-page login-page\" filter-color=\"black\" data-image=\"{{ base_url('public/assets/img/login.jpeg') }}\">
        <!--   you can change the color of the filter page using: data-color=\"blue | purple | green | orange | red | rose \" -->
        <div class=\"content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3\">
                        <form method=\"post\" action=\"{{ base_url('login/checkUser') }}\">
                            <div class=\"card card-login\">
                                <div class=\"card-header text-center\" data-background-color=\"rose\">
                                    <h4 class=\"card-title\">Giriş</h4>
                                </div>
                                <div class=\"card-content\">
                                    <div class=\"input-group\">
                                            <span class=\"input-group-addon\">
                                                <i class=\"material-icons\">email</i>
                                            </span>
                                        <div class=\"form-group label-floating is-empty\">
                                            <label class=\"control-label\">Email address</label>
                                            <input name=\"email\" type=\"email\" class=\"form-control\" required>
                                            <span class=\"material-input\"></span></div>
                                    </div>
                                    <div class=\"input-group\">
                                            <span class=\"input-group-addon\">
                                                <i class=\"material-icons\">lock_outline</i>
                                            </span>
                                        <div class=\"form-group label-floating is-empty\">
                                            <label class=\"control-label\">Password</label>
                                            <input name=\"pass\" type=\"password\" class=\"form-control\" required>
                                            <span class=\"material-input\"></span></div>
                                    </div>
                                    {% if loginError == true %}
                                    <div class=\"card\">
                                        <div class=\"alert alert-danger\">
                                            <button type=\"button\" aria-hidden=\"true\" class=\"close\">×</button>
                                            <span><b> Hata - </b> Kullanici bilgileri hatali.</span>
                                        </div>
                                    </div>
                                    {% endif %}
                                </div>
                                <div class=\"footer text-center\">
                                    <button type=\"submit\" class=\"btn btn-rose btn-primary btn-wd btn-lg\">Gİrİş Yap<div class=\"ripple-container\"></div></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--<footer class=\"footer\">
            <div class=\"container\">
                <nav class=\"pull-left\">
                    <ul>
                        <li>
                            <a href=\"#\">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class=\"copyright pull-right\">
                    ©
                    <script async=\"\" src=\"//www.google-analytics.com/analytics.js\"></script><script>
                        document.write(new Date().getFullYear())
                    </script>2017
                    <a href=\"http://www.creative-tim.com\">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>-->
        <div class=\"full-page-background\" style=\"background-image: url({{ base_url('public/assets/img/login.jpeg') }});\"></div></div>
</div>
<script src=\"{{ base_url('public/assets/js/jquery-3.1.1.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ base_url('public/assets/js/perfect-scrollbar.jquery.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ base_url('public/assets/js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ base_url('public/assets/js/material.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ base_url('public/assets/js/material-dashboard.js') }}\" type=\"text/javascript\"></script>
</body>
</html>", "login.twig", "C:\\wamp64\\www\\ci_test\\application\\views\\login.twig");
    }
}
