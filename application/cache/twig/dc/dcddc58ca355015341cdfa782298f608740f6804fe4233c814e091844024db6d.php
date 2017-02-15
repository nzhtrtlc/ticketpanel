<?php

/* blocks/footer.twig */
class __TwigTemplate_f4949d9bf58a4a88a091801e83797c881496edf4ed3f6fc935eddde7e9e7efa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('footer', $context, $blocks);
    }

    public function block_footer($context, array $blocks = array())
    {
        // line 2
        echo "    <footer class=\"footer\">
        <div class=\"container-fluid\">
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
                &copy; <script>document.write(new Date().getFullYear())</script> <a href=\"http://www.creative-tim.com\">Creative Tim</a>, made with love for a better web
            </p>
        </div>
    </footer>
";
    }

    public function getTemplateName()
    {
        return "blocks/footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block footer %}
    <footer class=\"footer\">
        <div class=\"container-fluid\">
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
                &copy; <script>document.write(new Date().getFullYear())</script> <a href=\"http://www.creative-tim.com\">Creative Tim</a>, made with love for a better web
            </p>
        </div>
    </footer>
{% endblock %}", "blocks/footer.twig", "C:\\wamp64\\www\\ci_test\\application\\views\\blocks\\footer.twig");
    }
}
