<?php

/* blocks/header.twig */
class __TwigTemplate_eb217c84ea079eafd85b72dc850b72971e25cc2cf9fda92fe7e44968b3691730 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('header', $context, $blocks);
    }

    public function block_header($context, array $blocks = array())
    {
        // line 2
        echo "<head>
\t<title> ";
        // line 3
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
\t<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
\t<meta name=\"viewport\" content=\"width=device-width\" />

\t<!-- Bootstrap core CSS     -->
\t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, base_url("public/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

\t<!--  Material Dashboard CSS    -->
\t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, base_url("public/assets/css/material-dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

\t<!--     Fonts and icons     -->
\t<link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" rel=\"stylesheet\">
\t<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>
";
    }

    public function getTemplateName()
    {
        return "blocks/header.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  37 => 8,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block header %}
<head>
\t<title> {{ title }}</title>
\t<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
\t<meta name=\"viewport\" content=\"width=device-width\" />

\t<!-- Bootstrap core CSS     -->
\t<link href=\"{{ base_url('public/assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\" />

\t<!--  Material Dashboard CSS    -->
\t<link href=\"{{ base_url('public/assets/css/material-dashboard.css') }}\" rel=\"stylesheet\"/>

\t<!--     Fonts and icons     -->
\t<link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" rel=\"stylesheet\">
\t<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>
{% endblock %}", "blocks/header.twig", "C:\\wamp64\\www\\ci_test\\application\\views\\blocks\\header.twig");
    }
}
