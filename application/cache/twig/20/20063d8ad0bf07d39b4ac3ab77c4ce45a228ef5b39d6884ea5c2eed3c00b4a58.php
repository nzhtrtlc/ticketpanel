<?php

/* pages/ticketac.twig */
class __TwigTemplate_a4799c97d8b69c90e0b118d2bd163000c5517948f4dab053c253d3dd6d57d69e extends Twig_Template
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
        echo "    ";
        if ((($context["ticketSuccess"] ?? null) == 1)) {
            // line 4
            echo "        <div class=\"alert alert-success\">
            <button type=\"button\" aria-hidden=\"true\" class=\"close\">×</button>
            <span><b> Başarılı - </b> Ticketınız açıldı. </span>
        </div>
    ";
        } elseif ((        // line 8
($context["ticketSuccess"] ?? null) ==  -1)) {
            // line 9
            echo "            <div class=\"alert alert-warning\">
                <button type=\"button\" aria-hidden=\"true\" class=\"close\">×</button>
                <span><b> Hata - </b> Ticket açılırken bir sorun yaşandı. </span>
            </div>
    ";
        }
        // line 14
        echo "

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <form method=\"post\" action=\"";
        // line 19
        echo twig_escape_filter($this->env, base_url("ticket/create"), "html", null, true);
        echo "\" class=\"form-horizontal\">
                    <div class=\"card-header card-header-text\" data-background-color=\"rose\">
                        <i class=\"material-icons\">loyalty</i>
                    </div>
                    <div class=\"card-content\">
                        <div class=\"row\">
                            <label class=\"col-sm-2 label-on-left\">Kime</label>
                            <div class=\"col-sm-10\">
                                <div class=\"form-group label-floating is-empty\">
                                    <select name=\"ticket_to\" class=\"selectpicker\" data-active-color=\"rose\" data-style=\"btn btn-xs btn-primary btn-round\" title=\"Single Select\" data-size=\"7\">
                                        <option value=\"0\" selected>Seçiniz</option>
                                        <option disabled>Nezih Tartılacı</option>
                                        <option value=\"2\">Alperen Uzun</option>
                                        <option value=\"3\">Erkan Akar</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-sm-2 label-on-left\">Konu</label>
                            <div class=\"col-sm-10\">
                                <div class=\"form-group label-floating is-empty\">
                                    <label class=\"control-label\"></label>
                                    <input name=\"ticket_subject\" type=\"text\" class=\"form-control\" value=\"\">
                                    <span class=\"material-input\"></span>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-sm-2 label-on-left\">Aciliyet</label>
                            <div class=\"col-sm-10\">
                                <div class=\"form-group label-floating is-empty\">
                                    <div class=\"radio radio-inline\">
                                        <label>
                                            <input value=\"0\" type=\"radio\" name=\"ticket_priority\">Normal
                                        </label>
                                    </div>
                                    <div class=\"radio radio-inline\">
                                        <label>
                                            <input value=\"1\" type=\"radio\" name=\"ticket_priority\">Biraz Önemli
                                        </label>
                                    </div>
                                    <div class=\"radio radio-inline\">
                                        <label>
                                            <input value=\"2\" type=\"radio\" name=\"ticket_priority\">Önemli
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-sm-2 label-on-left\">İçerik</label>
                            <div class=\"col-sm-10\">
                                <div class=\"form-group label-floating is-empty\">
                                    <textarea name=\"ticket_content\"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-sm-2 label-on-left\"></label>
                            <div class=\"col-sm-10\">
                                <button type=\"submit\" class=\"btn btn-fill btn-rose\">Gönder</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src=\"//cdn.ckeditor.com/4.6.2/standard/ckeditor.js\"></script>
    <script>
        CKEDITOR.replace( 'ticket_content' );
    </script>
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
        return array (  56 => 19,  49 => 14,  42 => 9,  40 => 8,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
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
    {% if ticketSuccess == 1 %}
        <div class=\"alert alert-success\">
            <button type=\"button\" aria-hidden=\"true\" class=\"close\">×</button>
            <span><b> Başarılı - </b> Ticketınız açıldı. </span>
        </div>
    {% elseif ticketSuccess == -1 %}
            <div class=\"alert alert-warning\">
                <button type=\"button\" aria-hidden=\"true\" class=\"close\">×</button>
                <span><b> Hata - </b> Ticket açılırken bir sorun yaşandı. </span>
            </div>
    {% endif %}


    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <form method=\"post\" action=\"{{ base_url('ticket/create') }}\" class=\"form-horizontal\">
                    <div class=\"card-header card-header-text\" data-background-color=\"rose\">
                        <i class=\"material-icons\">loyalty</i>
                    </div>
                    <div class=\"card-content\">
                        <div class=\"row\">
                            <label class=\"col-sm-2 label-on-left\">Kime</label>
                            <div class=\"col-sm-10\">
                                <div class=\"form-group label-floating is-empty\">
                                    <select name=\"ticket_to\" class=\"selectpicker\" data-active-color=\"rose\" data-style=\"btn btn-xs btn-primary btn-round\" title=\"Single Select\" data-size=\"7\">
                                        <option value=\"0\" selected>Seçiniz</option>
                                        <option disabled>Nezih Tartılacı</option>
                                        <option value=\"2\">Alperen Uzun</option>
                                        <option value=\"3\">Erkan Akar</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-sm-2 label-on-left\">Konu</label>
                            <div class=\"col-sm-10\">
                                <div class=\"form-group label-floating is-empty\">
                                    <label class=\"control-label\"></label>
                                    <input name=\"ticket_subject\" type=\"text\" class=\"form-control\" value=\"\">
                                    <span class=\"material-input\"></span>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-sm-2 label-on-left\">Aciliyet</label>
                            <div class=\"col-sm-10\">
                                <div class=\"form-group label-floating is-empty\">
                                    <div class=\"radio radio-inline\">
                                        <label>
                                            <input value=\"0\" type=\"radio\" name=\"ticket_priority\">Normal
                                        </label>
                                    </div>
                                    <div class=\"radio radio-inline\">
                                        <label>
                                            <input value=\"1\" type=\"radio\" name=\"ticket_priority\">Biraz Önemli
                                        </label>
                                    </div>
                                    <div class=\"radio radio-inline\">
                                        <label>
                                            <input value=\"2\" type=\"radio\" name=\"ticket_priority\">Önemli
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-sm-2 label-on-left\">İçerik</label>
                            <div class=\"col-sm-10\">
                                <div class=\"form-group label-floating is-empty\">
                                    <textarea name=\"ticket_content\"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-sm-2 label-on-left\"></label>
                            <div class=\"col-sm-10\">
                                <button type=\"submit\" class=\"btn btn-fill btn-rose\">Gönder</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src=\"//cdn.ckeditor.com/4.6.2/standard/ckeditor.js\"></script>
    <script>
        CKEDITOR.replace( 'ticket_content' );
    </script>
{% endblock %}", "pages/ticketac.twig", "C:\\wamp64\\www\\ci_test\\application\\views\\pages\\ticketac.twig");
    }
}
