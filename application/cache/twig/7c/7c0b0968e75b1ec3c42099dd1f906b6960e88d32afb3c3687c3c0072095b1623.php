<?php

/* blocks/sidebar.twig */
class __TwigTemplate_c6b5b5deafd00ac1c1fdf13db13afa23dbbcf97cb52ffcfd25ac48003947c9fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sidebar', $context, $blocks);
    }

    public function block_sidebar($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"sidebar\" data-active-color=\"rose\" data-background-color=\"black\" data-image=\"";
        echo twig_escape_filter($this->env, base_url("public/assets/img/sidebar-1.jpg"), "html", null, true);
        echo "\">
        <!--
    Tip 1: You can change the color of active element of the sidebar using: data-active-color=\"purple | blue | green | orange | red | rose\"
    Tip 2: you can also add an image using data-image tag
    Tip 3: you can change the color of the sidebar with data-background-color=\"white | black\"
-->
        <div class=\"sidebar-wrapper ps-container ps-theme-default ps-active-y\">
            <div class=\"user\">
                <div class=\"photo\">
                    <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, base_url("public/assets/img/faces/marc.jpg"), "html", null, true);
        echo "\">
                </div>
                <div class=\"info\">
                    <a data-toggle=\"collapse\" href=\"#collapseExample\" class=\"collapsed\">
                        ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["session"] ?? null), "fullName", array()), "html", null, true);
        echo "
                        <b class=\"caret\"></b>
                    </a>
                    <div class=\"collapse\" id=\"collapseExample\">
                        <ul class=\"nav\">
                            <li>
                                <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, base_url("logout"), "html", null, true);
        echo "\">Çıkış</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class=\"nav\">
                <li class=\"";
        // line 28
        if ((current_url() == base_url())) {
            echo " active ";
        } elseif ((current_url() == base_url("dashboard"))) {
            echo " active ";
        }
        echo "\">
                    <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, base_url("dashboard"), "html", null, true);
        echo "\">
                        <i class=\"material-icons\">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class=\"";
        // line 34
        if ((current_url() == base_url("ticket/open"))) {
            echo " active ";
        }
        echo "\">
                    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, base_url("ticket/open"), "html", null, true);
        echo "\">
                        <i class=\"material-icons\">timeline</i>
                        <p>Ticket Aç</p>
                    </a>
                </li>
                <li class=\"";
        // line 40
        if ((current_url() == base_url("ticket/all"))) {
            echo " active ";
        }
        echo "\">
                    <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, base_url("ticket/all"), "html", null, true);
        echo "\">
                        <i class=\"material-icons\">timeline</i>
                        <p>Açık Ticketlar</p>
                    </a>
                </li>
            </ul>
            <div class=\"ps-scrollbar-x-rail\" style=\"left: 0px; bottom: 0px;\"><div class=\"ps-scrollbar-x\" tabindex=\"0\" style=\"left: 0px; width: 0px;\"></div></div><div class=\"ps-scrollbar-y-rail\" style=\"top: 0px; height: 231px; right: 0px;\"><div class=\"ps-scrollbar-y\" tabindex=\"0\" style=\"top: 0px; height: 73px;\"></div></div></div>
        <div class=\"sidebar-background\" style=\"background-image: url(";
        // line 48
        echo twig_escape_filter($this->env, base_url("public/assets/img/sidebar-1.jpg"), "html", null, true);
        echo ") \"></div></div>
";
    }

    public function getTemplateName()
    {
        return "blocks/sidebar.twig";
    }

    public function getDebugInfo()
    {
        return array (  111 => 48,  101 => 41,  95 => 40,  87 => 35,  81 => 34,  73 => 29,  65 => 28,  55 => 21,  46 => 15,  39 => 11,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block sidebar %}
    <div class=\"sidebar\" data-active-color=\"rose\" data-background-color=\"black\" data-image=\"{{ base_url('public/assets/img/sidebar-1.jpg')}}\">
        <!--
    Tip 1: You can change the color of active element of the sidebar using: data-active-color=\"purple | blue | green | orange | red | rose\"
    Tip 2: you can also add an image using data-image tag
    Tip 3: you can change the color of the sidebar with data-background-color=\"white | black\"
-->
        <div class=\"sidebar-wrapper ps-container ps-theme-default ps-active-y\">
            <div class=\"user\">
                <div class=\"photo\">
                    <img src=\"{{ base_url('public/assets/img/faces/marc.jpg') }}\">
                </div>
                <div class=\"info\">
                    <a data-toggle=\"collapse\" href=\"#collapseExample\" class=\"collapsed\">
                        {{ session.fullName }}
                        <b class=\"caret\"></b>
                    </a>
                    <div class=\"collapse\" id=\"collapseExample\">
                        <ul class=\"nav\">
                            <li>
                                <a href=\"{{ base_url('logout') }}\">Çıkış</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class=\"nav\">
                <li class=\"{% if current_url() == base_url() %} active {% elseif current_url() == base_url('dashboard') %} active {% endif %}\">
                    <a href=\"{{ base_url('dashboard') }}\">
                        <i class=\"material-icons\">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class=\"{% if current_url() == base_url('ticket/open') %} active {% endif %}\">
                    <a href=\"{{ base_url('ticket/open') }}\">
                        <i class=\"material-icons\">timeline</i>
                        <p>Ticket Aç</p>
                    </a>
                </li>
                <li class=\"{% if current_url() == base_url('ticket/all') %} active {% endif %}\">
                    <a href=\"{{ base_url('ticket/all') }}\">
                        <i class=\"material-icons\">timeline</i>
                        <p>Açık Ticketlar</p>
                    </a>
                </li>
            </ul>
            <div class=\"ps-scrollbar-x-rail\" style=\"left: 0px; bottom: 0px;\"><div class=\"ps-scrollbar-x\" tabindex=\"0\" style=\"left: 0px; width: 0px;\"></div></div><div class=\"ps-scrollbar-y-rail\" style=\"top: 0px; height: 231px; right: 0px;\"><div class=\"ps-scrollbar-y\" tabindex=\"0\" style=\"top: 0px; height: 73px;\"></div></div></div>
        <div class=\"sidebar-background\" style=\"background-image: url({{ base_url('public/assets/img/sidebar-1.jpg') }}) \"></div></div>
{% endblock %}", "blocks/sidebar.twig", "C:\\wamp64\\www\\ci_test\\application\\views\\blocks\\sidebar.twig");
    }
}
