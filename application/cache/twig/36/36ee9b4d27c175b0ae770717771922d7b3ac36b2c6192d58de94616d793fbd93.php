<?php

/* layout.twig */
class __TwigTemplate_e9d9f7996c0d59dfd5bab34ea7de1120f099e8d169cdcd9c75d97c419b392a46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<body>
";
        // line 4
        $this->loadTemplate("blocks/header.twig", "layout.twig", 4)->display($context);
        // line 5
        echo "<div class=\"wrapper\">
    ";
        // line 6
        $this->loadTemplate("blocks/sidebar.twig", "layout.twig", 6)->display($context);
        // line 7
        echo "    <div class=\"main-panel\">
        ";
        // line 8
        $this->loadTemplate("blocks/navbar.twig", "layout.twig", 8)->display($context);
        // line 9
        echo "        <div class=\"content view-effect\">
            <div class=\"container-fluid\">
                ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "            </div>
        </div>
        ";
        // line 14
        $this->loadTemplate("blocks/footer.twig", "layout.twig", 14)->display($context);
        // line 15
        echo "    </div>
</div>
<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, base_url("public/assets/js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, base_url("public/assets/js/jquery.select-bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, base_url("public/assets/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, base_url("public/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, base_url("public/assets/js/material.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, base_url("public/assets/js/material-dashboard.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
</body>
</html>";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 11,  73 => 22,  69 => 21,  65 => 20,  61 => 19,  57 => 18,  53 => 17,  49 => 15,  47 => 14,  43 => 12,  41 => 11,  37 => 9,  35 => 8,  32 => 7,  30 => 6,  27 => 5,  25 => 4,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<body>
{% include('blocks/header.twig') %}
<div class=\"wrapper\">
    {% include('blocks/sidebar.twig') %}
    <div class=\"main-panel\">
        {% include('blocks/navbar.twig') %}
        <div class=\"content view-effect\">
            <div class=\"container-fluid\">
                {% block content %}{% endblock %}
            </div>
        </div>
        {% include('blocks/footer.twig') %}
    </div>
</div>
<script src=\"{{ base_url('public/assets/js/jquery-3.1.1.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ base_url('public/assets/js/jquery.select-bootstrap.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ base_url('public/assets/js/perfect-scrollbar.jquery.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ base_url('public/assets/js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ base_url('public/assets/js/material.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ base_url('public/assets/js/material-dashboard.js') }}\" type=\"text/javascript\"></script>
</body>
</html>", "layout.twig", "C:\\wamp64\\www\\ci_test\\application\\views\\layout.twig");
    }
}
