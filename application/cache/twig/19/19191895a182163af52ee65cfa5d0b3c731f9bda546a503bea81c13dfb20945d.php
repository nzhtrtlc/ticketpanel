<?php

/* welcome.twig */
class __TwigTemplate_6a40dedd48237d89798826ee12bd5db24971007621e15425b0ea9f724af3f8d4 extends Twig_Template
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
        echo "<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\">
\t<title>Welcome to CodeIgniter</title>
</head>
<body>

<div id=\"container\">
\t<h1>Welcome to CodeIgniter ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "name", array()), "html", null, true);
        echo "!</h1>
</div>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "welcome.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 12,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\">
\t<title>Welcome to CodeIgniter</title>
</head>
<body>

<div id=\"container\">
\t<h1>Welcome to CodeIgniter {{ data.name }}!</h1>
</div>

</body>
</html>", "welcome.twig", "C:\\wamp64\\www\\ci_test\\application\\views\\welcome.twig");
    }
}
