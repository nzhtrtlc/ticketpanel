<?php

/* pages/ticketac.twig */
class __TwigTemplate_e54e28e46903f00c3603fd79bf69e122a4208a39d45a517e71f9f6dd96095e3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "pages/ticketac.twig", 1);
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
        <div class=\"col-md-12\">
            <div class=\"card\">
                <form method=\"get\" action=\"/\" class=\"form-horizontal\">
                    <div class=\"card-header card-header-text\" data-background-color=\"rose\">
                        <i class=\"material-icons\">loyalty</i>
                    </div>
                    <div class=\"card-content\">
                        <div class=\"row\">
                            <label class=\"col-sm-2 label-on-left\">Kime</label>
                            <div class=\"col-sm-10\">
                                <div class=\"form-group label-floating is-empty\">
                                    <select class=\"selectpicker\" data-style=\"btn btn-xs btn-primary btn-round\" title=\"Single Select\" data-size=\"7\">
                                        <option value=\"0\" selected>Seçiniz</option>
                                        <option disabled>Choose city</option>
                                        <option value=\"2\">Foobar</option>
                                        <option value=\"3\">Is great</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-sm-2 label-on-left\">Konu</label>
                            <div class=\"col-sm-10\">
                                <div class=\"form-group label-floating is-empty\">
                                    <label class=\"control-label\"></label>
                                    <input type=\"text\" class=\"form-control\" value=\"\">
                                    <span class=\"material-input\"></span></div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-sm-2 label-on-left\">Aciliyet</label>
                            <div class=\"col-sm-10\">
                                <div class=\"form-group label-floating is-empty\">
                                    <div class=\"radio\">
                                        <label>
                                            <input type=\"radio\" name=\"optionsRadios\"> Radio is off
                                        </label>
                                    </div>
                                    <div class=\"radio\">
                                        <label>
                                            <input type=\"radio\" name=\"optionsRadios\"> Radio is off
                                        </label>
                                    </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-sm-2 label-on-left\">Disabled</label>
                            <div class=\"col-sm-10\">
                                <div class=\"form-group label-floating is-empty\">
                                    <label class=\"control-label\"></label>
                                    <input type=\"text\" placeholder=\"Disabled input here...\" disabled=\"\" class=\"form-control\">
                                    <span class=\"material-input\"></span></div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-sm-2 label-on-left\">Static control</label>
                            <div class=\"col-sm-10\">
                                <div class=\"form-group\">
                                    <p class=\"form-control-static\">hello@creative-tim.com</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-sm-2 label-on-left\">Checkboxes and radios</label>
                            <div class=\"col-sm-10 checkbox-radios\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" name=\"optionsCheckboxes\"><span class=\"checkbox-material\"><span class=\"check\"></span></span> First Checkbox
                                    </label>
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" name=\"optionsCheckboxes\"><span class=\"checkbox-material\"><span class=\"check\"></span></span> Second Checkbox
                                    </label>
                                </div>
                                <div class=\"radio\">
                                    <label>
                                        <input type=\"radio\" name=\"optionsRadios\" checked=\"true\"><span class=\"circle\"></span><span class=\"check\"></span> First Radio
                                    </label>
                                </div>
                                <div class=\"radio\">
                                    <label>
                                        <input type=\"radio\" name=\"optionsRadios\"><span class=\"circle\"></span><span class=\"check\"></span> Second Radio
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-sm-2 label-on-left\">Inline checkboxes</label>
                            <div class=\"col-sm-10\">
                                <div class=\"checkbox checkbox-inline\">
                                    <label>
                                        <input type=\"checkbox\" name=\"optionsCheckboxes\"><span class=\"checkbox-material\"><span class=\"check\"></span></span>a
                                    </label>
                                </div>
                                <div class=\"checkbox checkbox-inline\">
                                    <label>
                                        <input type=\"checkbox\" name=\"optionsCheckboxes\"><span class=\"checkbox-material\"><span class=\"check\"></span></span>b
                                    </label>
                                </div>
                                <div class=\"checkbox checkbox-inline\">
                                    <label>
                                        <input type=\"checkbox\" name=\"optionsCheckboxes\"><span class=\"checkbox-material\"><span class=\"check\"></span></span>c
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "pages/ticketac.twig";
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
        <div class=\"col-md-12\">
            <div class=\"card\">
                <form method=\"get\" action=\"/\" class=\"form-horizontal\">
                    <div class=\"card-header card-header-text\" data-background-color=\"rose\">
                        <i class=\"material-icons\">loyalty</i>
                    </div>
                    <div class=\"card-content\">
                        <div class=\"row\">
                            <label class=\"col-sm-2 label-on-left\">Kime</label>
                            <div class=\"col-sm-10\">
                                <div class=\"form-group label-floating is-empty\">
                                    <select class=\"selectpicker\" data-style=\"btn btn-xs btn-primary btn-round\" title=\"Single Select\" data-size=\"7\">
                                        <option value=\"0\" selected>Seçiniz</option>
                                        <option disabled>Choose city</option>
                                        <option value=\"2\">Foobar</option>
                                        <option value=\"3\">Is great</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-sm-2 label-on-left\">Konu</label>
                            <div class=\"col-sm-10\">
                                <div class=\"form-group label-floating is-empty\">
                                    <label class=\"control-label\"></label>
                                    <input type=\"text\" class=\"form-control\" value=\"\">
                                    <span class=\"material-input\"></span></div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-sm-2 label-on-left\">Aciliyet</label>
                            <div class=\"col-sm-10\">
                                <div class=\"form-group label-floating is-empty\">
                                    <div class=\"radio\">
                                        <label>
                                            <input type=\"radio\" name=\"optionsRadios\"> Radio is off
                                        </label>
                                    </div>
                                    <div class=\"radio\">
                                        <label>
                                            <input type=\"radio\" name=\"optionsRadios\"> Radio is off
                                        </label>
                                    </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-sm-2 label-on-left\">Disabled</label>
                            <div class=\"col-sm-10\">
                                <div class=\"form-group label-floating is-empty\">
                                    <label class=\"control-label\"></label>
                                    <input type=\"text\" placeholder=\"Disabled input here...\" disabled=\"\" class=\"form-control\">
                                    <span class=\"material-input\"></span></div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-sm-2 label-on-left\">Static control</label>
                            <div class=\"col-sm-10\">
                                <div class=\"form-group\">
                                    <p class=\"form-control-static\">hello@creative-tim.com</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-sm-2 label-on-left\">Checkboxes and radios</label>
                            <div class=\"col-sm-10 checkbox-radios\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" name=\"optionsCheckboxes\"><span class=\"checkbox-material\"><span class=\"check\"></span></span> First Checkbox
                                    </label>
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" name=\"optionsCheckboxes\"><span class=\"checkbox-material\"><span class=\"check\"></span></span> Second Checkbox
                                    </label>
                                </div>
                                <div class=\"radio\">
                                    <label>
                                        <input type=\"radio\" name=\"optionsRadios\" checked=\"true\"><span class=\"circle\"></span><span class=\"check\"></span> First Radio
                                    </label>
                                </div>
                                <div class=\"radio\">
                                    <label>
                                        <input type=\"radio\" name=\"optionsRadios\"><span class=\"circle\"></span><span class=\"check\"></span> Second Radio
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-sm-2 label-on-left\">Inline checkboxes</label>
                            <div class=\"col-sm-10\">
                                <div class=\"checkbox checkbox-inline\">
                                    <label>
                                        <input type=\"checkbox\" name=\"optionsCheckboxes\"><span class=\"checkbox-material\"><span class=\"check\"></span></span>a
                                    </label>
                                </div>
                                <div class=\"checkbox checkbox-inline\">
                                    <label>
                                        <input type=\"checkbox\" name=\"optionsCheckboxes\"><span class=\"checkbox-material\"><span class=\"check\"></span></span>b
                                    </label>
                                </div>
                                <div class=\"checkbox checkbox-inline\">
                                    <label>
                                        <input type=\"checkbox\" name=\"optionsCheckboxes\"><span class=\"checkbox-material\"><span class=\"check\"></span></span>c
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}", "pages/ticketac.twig", "C:\\wamp64\\www\\ci_test\\application\\views/pages/ticketac.twig");
    }
}
