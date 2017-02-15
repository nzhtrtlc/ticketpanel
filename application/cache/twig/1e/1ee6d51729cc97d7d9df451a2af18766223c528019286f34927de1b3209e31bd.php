<?php

/* pages/dashboard.twig */
class __TwigTemplate_0ef555a8f4ed390f7ed294264af5582a59f76c7b6b27d79181618dbf1225f215 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "pages/dashboard.twig", 1);
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
        <div class=\"col-lg-3 col-md-6 col-sm-6\">
            <div class=\"card card-stats\">
                <div class=\"card-header\" data-background-color=\"orange\">
                    <i class=\"material-icons\">content_copy</i>
                </div>
                <div class=\"card-content\">
                    <p class=\"category\">Size açılan ticket</p>
                    <h3 class=\"card-title\">42</h3>
                </div>
                <div class=\"card-footer\">
                    <div class=\"stats\">
                        <i class=\"material-icons text-danger\">warning</i> <a href=\"#pablo\">Get More Space...</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-sm-6\">
            <div class=\"card card-stats\">
                <div class=\"card-header\" data-background-color=\"green\">
                    <i class=\"material-icons\">store</i>
                </div>
                <div class=\"card-content\">
                    <p class=\"category\">Ticketlar</p>
                    <h3 class=\"card-title\">17<small>/42</small></h3>
                </div>
                <div class=\"card-footer\">
                    <div class=\"stats\">
                        <i class=\"material-icons\">date_range</i> Last 24 Hours
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-sm-6\">
            <div class=\"card card-stats\">
                <div class=\"card-header\" data-background-color=\"red\">
                    <i class=\"material-icons\">info_outline</i>
                </div>
                <div class=\"card-content\">
                    <p class=\"category\">Toplam Ticket</p>
                    <h3 class=\"card-title\">75</h3>
                </div>
                <div class=\"card-footer\">
                    <div class=\"stats\">
                        <i class=\"material-icons\">local_offer</i> Sizin açtığınız ticket sayısı
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-header card-chart\" data-background-color=\"green\">
                    <div class=\"ct-chart\" id=\"dailySalesChart\"></div>
                </div>
                <div class=\"card-content\">
                    <h4 class=\"title\">Daily Sales</h4>
                    <p class=\"category\"><span class=\"text-success\"><i class=\"fa fa-long-arrow-up\"></i> 55%  </span> increase in today sales.</p>
                </div>
                <div class=\"card-footer\">
                    <div class=\"stats\">
                        <i class=\"material-icons\">access_time</i> updated 4 minutes ago
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-header card-chart\" data-background-color=\"orange\">
                    <div class=\"ct-chart\" id=\"emailsSubscriptionChart\"></div>
                </div>
                <div class=\"card-content\">
                    <h4 class=\"title\">Email Subscriptions</h4>
                    <p class=\"category\">Last Campaign Performance</p>
                </div>
                <div class=\"card-footer\">
                    <div class=\"stats\">
                        <i class=\"material-icons\">access_time</i> campaign sent 2 days ago
                    </div>
                </div>

            </div>
        </div>

        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-header card-chart\" data-background-color=\"red\">
                    <div class=\"ct-chart\" id=\"completedTasksChart\"></div>
                </div>
                <div class=\"card-content\">
                    <h4 class=\"title\">Completed Tasks</h4>
                    <p class=\"category\">Last Campaign Performance</p>
                </div>
                <div class=\"card-footer\">
                    <div class=\"stats\">
                        <i class=\"material-icons\">access_time</i> campaign sent 2 days ago
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "pages/dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
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
        <div class=\"col-lg-3 col-md-6 col-sm-6\">
            <div class=\"card card-stats\">
                <div class=\"card-header\" data-background-color=\"orange\">
                    <i class=\"material-icons\">content_copy</i>
                </div>
                <div class=\"card-content\">
                    <p class=\"category\">Size açılan ticket</p>
                    <h3 class=\"card-title\">42</h3>
                </div>
                <div class=\"card-footer\">
                    <div class=\"stats\">
                        <i class=\"material-icons text-danger\">warning</i> <a href=\"#pablo\">Get More Space...</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-sm-6\">
            <div class=\"card card-stats\">
                <div class=\"card-header\" data-background-color=\"green\">
                    <i class=\"material-icons\">store</i>
                </div>
                <div class=\"card-content\">
                    <p class=\"category\">Ticketlar</p>
                    <h3 class=\"card-title\">17<small>/42</small></h3>
                </div>
                <div class=\"card-footer\">
                    <div class=\"stats\">
                        <i class=\"material-icons\">date_range</i> Last 24 Hours
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-sm-6\">
            <div class=\"card card-stats\">
                <div class=\"card-header\" data-background-color=\"red\">
                    <i class=\"material-icons\">info_outline</i>
                </div>
                <div class=\"card-content\">
                    <p class=\"category\">Toplam Ticket</p>
                    <h3 class=\"card-title\">75</h3>
                </div>
                <div class=\"card-footer\">
                    <div class=\"stats\">
                        <i class=\"material-icons\">local_offer</i> Sizin açtığınız ticket sayısı
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-header card-chart\" data-background-color=\"green\">
                    <div class=\"ct-chart\" id=\"dailySalesChart\"></div>
                </div>
                <div class=\"card-content\">
                    <h4 class=\"title\">Daily Sales</h4>
                    <p class=\"category\"><span class=\"text-success\"><i class=\"fa fa-long-arrow-up\"></i> 55%  </span> increase in today sales.</p>
                </div>
                <div class=\"card-footer\">
                    <div class=\"stats\">
                        <i class=\"material-icons\">access_time</i> updated 4 minutes ago
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-header card-chart\" data-background-color=\"orange\">
                    <div class=\"ct-chart\" id=\"emailsSubscriptionChart\"></div>
                </div>
                <div class=\"card-content\">
                    <h4 class=\"title\">Email Subscriptions</h4>
                    <p class=\"category\">Last Campaign Performance</p>
                </div>
                <div class=\"card-footer\">
                    <div class=\"stats\">
                        <i class=\"material-icons\">access_time</i> campaign sent 2 days ago
                    </div>
                </div>

            </div>
        </div>

        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-header card-chart\" data-background-color=\"red\">
                    <div class=\"ct-chart\" id=\"completedTasksChart\"></div>
                </div>
                <div class=\"card-content\">
                    <h4 class=\"title\">Completed Tasks</h4>
                    <p class=\"category\">Last Campaign Performance</p>
                </div>
                <div class=\"card-footer\">
                    <div class=\"stats\">
                        <i class=\"material-icons\">access_time</i> campaign sent 2 days ago
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "pages/dashboard.twig", "C:\\wamp64\\www\\ci_test\\application\\views\\pages\\dashboard.twig");
    }
}
