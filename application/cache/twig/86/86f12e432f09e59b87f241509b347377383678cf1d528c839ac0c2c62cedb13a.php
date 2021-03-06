<?php

/* pages/page1.twig */
class __TwigTemplate_c76769dfbfe98576ce855387403f83aa021e8cb327f5a5ad40388fd5372f1355 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "pages/page1.twig", 1);
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
                    <p class=\"category\">Used Space</p>
                    <h3 class=\"title\">49/50<small>GB</small></h3>
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
                    <p class=\"category\">Revenue</p>
                    <h3 class=\"title\">\$34,245</h3>
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
                    <p class=\"category\">Fixed Issues</p>
                    <h3 class=\"title\">75</h3>
                </div>
                <div class=\"card-footer\">
                    <div class=\"stats\">
                        <i class=\"material-icons\">local_offer</i> Tracked from Github
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-lg-3 col-md-6 col-sm-6\">
            <div class=\"card card-stats\">
                <div class=\"card-header\" data-background-color=\"blue\">
                    <i class=\"fa fa-twitter\"></i>
                </div>
                <div class=\"card-content\">
                    <p class=\"category\">Followers</p>
                    <h3 class=\"title\">+245</h3>
                </div>
                <div class=\"card-footer\">
                    <div class=\"stats\">
                        <i class=\"material-icons\">update</i> Just Updated
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
        return "pages/page1.twig";
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
                    <p class=\"category\">Used Space</p>
                    <h3 class=\"title\">49/50<small>GB</small></h3>
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
                    <p class=\"category\">Revenue</p>
                    <h3 class=\"title\">\$34,245</h3>
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
                    <p class=\"category\">Fixed Issues</p>
                    <h3 class=\"title\">75</h3>
                </div>
                <div class=\"card-footer\">
                    <div class=\"stats\">
                        <i class=\"material-icons\">local_offer</i> Tracked from Github
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-lg-3 col-md-6 col-sm-6\">
            <div class=\"card card-stats\">
                <div class=\"card-header\" data-background-color=\"blue\">
                    <i class=\"fa fa-twitter\"></i>
                </div>
                <div class=\"card-content\">
                    <p class=\"category\">Followers</p>
                    <h3 class=\"title\">+245</h3>
                </div>
                <div class=\"card-footer\">
                    <div class=\"stats\">
                        <i class=\"material-icons\">update</i> Just Updated
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
{% endblock %}", "pages/page1.twig", "C:\\wamp64\\www\\ci_test\\application\\views\\pages\\page1.twig");
    }
}
