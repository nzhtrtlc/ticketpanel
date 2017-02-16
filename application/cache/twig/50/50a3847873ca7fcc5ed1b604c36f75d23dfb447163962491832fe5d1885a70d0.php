<?php

/* pages/acikticketlar.twig */
class __TwigTemplate_afdcec8e7a80c312ff22d6fe997541c722a02b0fadb205b3c697765797db6e79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "pages/acikticketlar.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"card card-stats\">
                <style>
                    .card [data-background-color]{
                        padding:2px;
                    }
                </style>
                <div class=\"card-header\" data-background-color=\"black\">
                    <img style=\"width: 70px\" src=\"http://localhost:82/ci_test/public/assets/img/faces/marc.jpg\">
                </div>
                <div class=\"card-content\">
                    <p class=\"category\"></p>
                    <h4 class=\"card-title\">
                        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, base_url("ticketincele"), "html", null, true);
        echo "/deneme-ticket\"> dosyalar burası ne kadar uzun olabilir sence ?</a>
                    </h4>
                </div>
                <div class=\"card-footer\">
                    <div class=\"stats\">
                        <i class=\"material-icons\">update</i>&nbsp;1 saat önce&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Alperen Uzun tarafından
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"card card-stats\">
                <style>
                    .card [data-background-color]{
                        padding:2px;
                    }
                </style>
                <div class=\"card-header\" data-background-color=\"black\">
                    <img style=\"width: 70px\" src=\"http://localhost:82/ci_test/public/assets/img/faces/marc.jpg\">
                </div>
                <div class=\"card-content\">
                    <p class=\"category\"></p>
                    <h4 class=\"card-title\">Güncellenecek dosyalar burası ne kadar uzun olabilir sence ?</h4>
                </div>
                <div class=\"card-footer\">
                    <div class=\"stats\">
                        <i class=\"material-icons\">update</i>&nbsp;1 saat önce&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Alperen Uzun tarafından
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "pages/acikticketlar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 17,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}
{% block content %}
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"card card-stats\">
                <style>
                    .card [data-background-color]{
                        padding:2px;
                    }
                </style>
                <div class=\"card-header\" data-background-color=\"black\">
                    <img style=\"width: 70px\" src=\"http://localhost:82/ci_test/public/assets/img/faces/marc.jpg\">
                </div>
                <div class=\"card-content\">
                    <p class=\"category\"></p>
                    <h4 class=\"card-title\">
                        <a href=\"{{ base_url('ticketincele') }}/deneme-ticket\"> dosyalar burası ne kadar uzun olabilir sence ?</a>
                    </h4>
                </div>
                <div class=\"card-footer\">
                    <div class=\"stats\">
                        <i class=\"material-icons\">update</i>&nbsp;1 saat önce&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Alperen Uzun tarafından
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"card card-stats\">
                <style>
                    .card [data-background-color]{
                        padding:2px;
                    }
                </style>
                <div class=\"card-header\" data-background-color=\"black\">
                    <img style=\"width: 70px\" src=\"http://localhost:82/ci_test/public/assets/img/faces/marc.jpg\">
                </div>
                <div class=\"card-content\">
                    <p class=\"category\"></p>
                    <h4 class=\"card-title\">Güncellenecek dosyalar burası ne kadar uzun olabilir sence ?</h4>
                </div>
                <div class=\"card-footer\">
                    <div class=\"stats\">
                        <i class=\"material-icons\">update</i>&nbsp;1 saat önce&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Alperen Uzun tarafından
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "pages/acikticketlar.twig", "C:\\wamp64\\www\\ci_test\\application\\views\\pages\\acikticketlar.twig");
    }
}
