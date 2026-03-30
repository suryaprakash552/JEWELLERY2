<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* extension/purpletree_pos/admin/view/template/module/purpletree_pos.twig */
class __TwigTemplate_7025cba2afd7d5e5276a0412dd3c7490 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield ($context["header"] ?? null);
        yield "
";
        // line 2
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right float-end\">
\t\t\t\t<button type=\"submit\" form=\"form-pos\" data-toggle=\"tooltip\" title=\"";
        // line 7
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
\t\t\t\t<a href=\"";
        // line 8
        yield ($context["cancel"] ?? null);
        yield "\" data-toggle=\"tooltip\" title=\"";
        yield ($context["button_cancel"] ?? null);
        yield "\" class=\"btn btn-default btn-light\"><i class=\"fa fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1>";
        // line 10
        yield ($context["heading_title"] ?? null);
        yield "</h1>
\t\t\t <ol class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "      </ol>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            yield "\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "
\t\t</div>
\t\t";
        }
        // line 23
        yield "\t\t";
        if (($context["success"] ?? null)) {
            // line 24
            yield "\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            yield ($context["success"] ?? null);
            yield "
\t\t</div>
\t\t";
        }
        // line 27
        yield "\t\t<div class=\"panel panel-default card\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title card-header\"><i class=\"fa fa-pencil fas fa-edit\"></i> ";
        // line 29
        yield ($context["text_edit"] ?? null);
        yield "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body card-body\">
\t\t\t\t<form action=\"";
        // line 32
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-pos\" class=\"form-horizontal\">\t\t\t\t\t
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t<div class=\"form-group py-1 row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label control-label\" for=\"input-status\">";
        // line 35
        yield ($context["entry_status"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"module_purpletree_pos_status\" id=\"input-status\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t";
        // line 38
        if (($context["module_purpletree_pos_status"] ?? null)) {
            // line 39
            yield "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 40
            yield ($context["text_disabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 42
            yield "\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 43
            yield ($context["text_disabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 45
        yield "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"form-group  required\">
\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t  <input type=\"hidden\" name=\"module_purpletree_pos_process_data\" value=\"";
        // line 50
        yield ($context["module_purpletree_pos_process_data"] ?? null);
        yield "\" class=\"form-control\" id=\"setlicensee\"/>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t  <input type=\"hidden\" name=\"module_purpletree_pos_validate_text\" value=\"";
        // line 52
        yield ($context["module_purpletree_pos_validate_text"] ?? null);
        yield "\">
\t\t\t\t\t\t\t  <input type=\"hidden\" name=\"module_purpletree_pos_live_validate_text\" value=\"";
        // line 53
        yield ($context["module_purpletree_pos_live_validate_text"] ?? null);
        yield "\">
\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t  <input type=\"hidden\" name=\"module_purpletree_pos_encypt_text\" value=\"";
        // line 55
        yield ($context["module_purpletree_pos_encypt_text"] ?? null);
        yield "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10 col-sm-offset-2 offset-sm-2\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t   <button type=\"button\" class=\"btn btn-primary\" style=\"padding: 8px 20px;\" id=\"getLicensee\">";
        // line 59
        yield ($context["button_get_license"] ?? null);
        yield "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group py-1 row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label control-label\" >";
        // line 67
        yield ($context["entry_return_action"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"module_purpletree_pos_return_action\" id=\"input-return-action\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["return_actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
            // line 71
            yield "\t\t\t\t\t\t\t\t\t\t<option ";
            if ((($context["module_purpletree_pos_return_action"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["actions"], "return_action_id", [], "any", false, false, false, 71))) {
                yield " selected ";
            }
            yield " value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["actions"], "return_action_id", [], "any", false, false, false, 71);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["actions"], "name", [], "any", false, false, false, 71);
            yield "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['actions'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group py-1 row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label control-label\" >";
        // line 78
        yield ($context["entry_return_status"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"module_purpletree_pos_return_status\" id=\"input-return-status\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["return_status"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 82
            yield "\t\t\t\t\t\t\t\t\t\t<option ";
            if ((($context["module_purpletree_pos_return_status"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["status"], "return_status_id", [], "any", false, false, false, 82))) {
                yield " selected ";
            }
            yield " value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["status"], "return_status_id", [], "any", false, false, false, 82);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["status"], "name", [], "any", false, false, false, 82);
            yield "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t<div class=\"form-group row py-1\">
                  <label class=\"col-sm-2 col-form-label control-label\">";
        // line 89
        yield ($context["entry_receipt_footer_detail"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"module_purpletree_pos_receipt_detail\" rows=\"8\" placeholder=\"receipt footer details\" id=\"input-receipt\" class=\"form-control\">";
        // line 91
        yield ($context["module_purpletree_pos_receipt_detail"] ?? null);
        yield "</textarea>
                  </div>
                </div>
\t\t\t\t
\t\t\t\t<div class=\"form-group row py-1\">
                  <label class=\"col-sm-2 col-form-label control-label\">";
        // line 96
        yield ($context["entry_receipt_store_detail"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"module_purpletree_pos_receipt_store_detail\" rows=\"8\" placeholder=\"receipt store details\" id=\"input-receipt\" class=\"form-control\">";
        // line 98
        yield ($context["module_purpletree_pos_receipt_store_detail"] ?? null);
        yield "</textarea>
                  </div>
                </div>
\t\t\t\t
<!--- Guest user code --->\t\t\t\t\t\t
<!--legend>";
        // line 103
        yield ($context["entry_guest_user"] ?? null);
        yield "</legend>\t\t\t\t\t\t
\t<div class=\"form-group py-1 row\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">";
        // line 105
        yield ($context["entry_first_name"] ?? null);
        yield "</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_first_name\" class=\"form-control\" value=\"";
        // line 107
        yield ((array_key_exists("module_purpletree_pos_guest_first_name", $context)) ? (($context["module_purpletree_pos_guest_first_name"] ?? null)) : (""));
        yield "\" id = \"guest_first_name\"/>
\t\t</div>
\t</div>
\t<div class=\"form-group py-1 row\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">";
        // line 111
        yield ($context["entry_last_name"] ?? null);
        yield "</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_last_name\" class=\"form-control\" value=\"";
        // line 113
        yield ((array_key_exists("module_purpletree_pos_guest_last_name", $context)) ? (($context["module_purpletree_pos_guest_last_name"] ?? null)) : (""));
        yield "\" id = \"guest_last_name\"/>
\t\t</div>
\t</div>
\t<div class=\"form-group py-1 row\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">";
        // line 117
        yield ($context["entry_email"] ?? null);
        yield "</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_email\" class=\"form-control\" value=\"";
        // line 119
        yield ((array_key_exists("module_purpletree_pos_guest_email", $context)) ? (($context["module_purpletree_pos_guest_email"] ?? null)) : (""));
        yield "\" id = \"guest_email\"/>
\t\t</div>
\t</div>
\t<div class=\"form-group py-1 row\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">";
        // line 123
        yield ($context["entry_telephone"] ?? null);
        yield "</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_telephone\" class=\"form-control\" value=\"";
        // line 125
        yield ((array_key_exists("module_purpletree_pos_guest_telephone", $context)) ? (($context["module_purpletree_pos_guest_telephone"] ?? null)) : (""));
        yield "\" id = \"guest_telephone\"/>
\t\t</div>
\t</div>

\t<legend class=\"pts-legend-text\">
\t<label class=\"radio-inline\">
    ";
        // line 131
        yield ($context["entry_default_shipping_address"] ?? null);
        yield "</label>
\t <label class=\"radio-inline pts_shipping_address\">
     <input type=\"radio\" name=\"module_purpletree_pos_guest_shipping_address\" ";
        // line 133
        if ((($context["module_purpletree_pos_guest_shipping_address"] ?? null) == 1)) {
            yield " checked=\"checked\" ";
        }
        yield " value=\"1\">";
        yield ($context["entry_shipping_address"] ?? null);
        yield "</label>
\t <label class=\"radio-inline pts_shipping_address\">
     <input type=\"radio\" name=\"module_purpletree_pos_guest_shipping_address\" ";
        // line 135
        if ((($context["module_purpletree_pos_guest_shipping_address"] ?? null) == 2)) {
            yield " checked=\"checked\" ";
        }
        yield "  value=\"2\">";
        yield ($context["entry_payment_address"] ?? null);
        yield "</label>
\t </legend>\t
\t 
\t<div class=\"form-group py-1 row shipping_address\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">";
        // line 139
        yield ($context["entry_company"] ?? null);
        yield "</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_s_company\" class=\"form-control\" value=\"";
        // line 141
        yield ((array_key_exists("module_purpletree_pos_guest_s_company", $context)) ? (($context["module_purpletree_pos_guest_s_company"] ?? null)) : (""));
        yield "\" id = \"guest_s_company\"/>
\t\t</div>
\t</div>
\t<div class=\"form-group py-1 row shipping_address\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">";
        // line 145
        yield ($context["entry_address_1"] ?? null);
        yield "</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_s_address_1\" class=\"form-control\" value=\"";
        // line 147
        yield ((array_key_exists("module_purpletree_pos_guest_s_address_1", $context)) ? (($context["module_purpletree_pos_guest_s_address_1"] ?? null)) : (""));
        yield "\" id = \"guest_s_address_1\"/>
\t\t</div>
\t</div>
\t<div class=\"form-group py-1 row shipping_address\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">";
        // line 151
        yield ($context["entry_address_2"] ?? null);
        yield "</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_s_address_2\" class=\"form-control\" value=\"";
        // line 153
        yield ((array_key_exists("module_purpletree_pos_guest_s_address_2", $context)) ? (($context["module_purpletree_pos_guest_s_address_2"] ?? null)) : (""));
        yield "\" id = \"guest_s_address_2\"/>
\t\t</div>
\t</div>
\t<div class=\"form-group py-1 row shipping_address\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">";
        // line 157
        yield ($context["entry_city"] ?? null);
        yield "</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_s_city\" class=\"form-control\" value=\"";
        // line 159
        yield ((array_key_exists("module_purpletree_pos_guest_s_city", $context)) ? (($context["module_purpletree_pos_guest_s_city"] ?? null)) : (""));
        yield "\" id = \"guest_s_city\"/>
\t\t</div>
\t</div>
\t<div class=\"form-group py-1 row shipping_address\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">";
        // line 163
        yield ($context["entry_post_code"] ?? null);
        yield "</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_s_post_code\" class=\"form-control\" value=\"";
        // line 165
        yield ((array_key_exists("module_purpletree_pos_guest_s_post_code", $context)) ? (($context["module_purpletree_pos_guest_s_post_code"] ?? null)) : (""));
        yield "\" id = \"guest_s_post_code\"/>
\t\t</div>
\t</div>
\t<div class=\"form-group py-1 row shipping_address\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">";
        // line 169
        yield ($context["entry_country"] ?? null);
        yield "</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_s_country\" class=\"form-control\" value=\"";
        // line 171
        yield ((array_key_exists("module_purpletree_pos_guest_s_country", $context)) ? (($context["module_purpletree_pos_guest_s_country"] ?? null)) : (""));
        yield "\" id = \"guest_s_country\"/>
\t\t</div>
\t</div>\t
\t
\t<div class=\"form-group py-1 row shipping_address\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">";
        // line 176
        yield ($context["entry_state"] ?? null);
        yield "</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_s_state\" class=\"form-control\" value=\"";
        // line 178
        yield ((array_key_exists("module_purpletree_pos_guest_s_state", $context)) ? (($context["module_purpletree_pos_guest_s_state"] ?? null)) : (""));
        yield "\" id = \"guest_s_state\"/>
\t\t</div>
\t</div>
\t
\t<legend class=\"pts-legend-text\">
\t<label class=\"radio-inline\">
\t";
        // line 184
        yield ($context["entry_default_payment_address"] ?? null);
        yield "</label>
\t <label class=\"radio-inline pts_payment_address\">
     <input ";
        // line 186
        if ((($context["module_purpletree_pos_guest_payment_address"] ?? null) == 1)) {
            yield " checked=\"checked\" ";
        }
        yield " type=\"radio\" name=\"module_purpletree_pos_guest_payment_address\" value=\"1\">";
        yield ($context["entry_payment_address"] ?? null);
        yield "</label>
\t <label class=\"radio-inline pts_payment_address\">
     <input type=\"radio\" name=\"module_purpletree_pos_guest_payment_address\" ";
        // line 188
        if ((($context["module_purpletree_pos_guest_payment_address"] ?? null) == 2)) {
            yield " checked=\"checked\" ";
        }
        yield " value=\"2\">";
        yield ($context["entry_store_address"] ?? null);
        yield "</label>
\t </legend>\t
\t 
\t<div class=\"form-group py-1 row payment_address\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">";
        // line 192
        yield ($context["entry_company"] ?? null);
        yield "</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_p_company\" class=\"form-control\" value=\"";
        // line 194
        yield ((array_key_exists("module_purpletree_pos_guest_p_company", $context)) ? (($context["module_purpletree_pos_guest_p_company"] ?? null)) : (""));
        yield "\" id = \"guest_p_company\"/>
\t\t</div>
\t</div>
\t<div class=\"form-group py-1 row payment_address\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">";
        // line 198
        yield ($context["entry_address_1"] ?? null);
        yield "</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_p_address_1\" class=\"form-control\" value=\"";
        // line 200
        yield ((array_key_exists("module_purpletree_pos_guest_p_address_1", $context)) ? (($context["module_purpletree_pos_guest_p_address_1"] ?? null)) : (""));
        yield "\" id = \"guest_p_address_1\"/>
\t\t</div>
\t</div>
\t<div class=\"form-group py-1 row payment_address\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">";
        // line 204
        yield ($context["entry_address_2"] ?? null);
        yield "</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_p_address_2\" class=\"form-control\" value=\"";
        // line 206
        yield ((array_key_exists("module_purpletree_pos_guest_p_address_2", $context)) ? (($context["module_purpletree_pos_guest_p_address_2"] ?? null)) : (""));
        yield "\" id = \"guest_p_address_2\"/>
\t\t</div>
\t</div>
\t<div class=\"form-group py-1 row payment_address\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">";
        // line 210
        yield ($context["entry_city"] ?? null);
        yield "</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_p_city\" class=\"form-control\" value=\"";
        // line 212
        yield ((array_key_exists("module_purpletree_pos_guest_p_city", $context)) ? (($context["module_purpletree_pos_guest_p_city"] ?? null)) : (""));
        yield "\" id = \"guest_p_city\"/>
\t\t</div>
\t</div>
\t<div class=\"form-group py-1 row payment_address\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">";
        // line 216
        yield ($context["entry_post_code"] ?? null);
        yield "</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_p_post_code\" class=\"form-control\" value=\"";
        // line 218
        yield ((array_key_exists("module_purpletree_pos_guest_p_post_code", $context)) ? (($context["module_purpletree_pos_guest_p_post_code"] ?? null)) : (""));
        yield "\" id = \"guest_p_post_code\"/>
\t\t</div>
\t</div>
\t<div class=\"form-group py-1 row payment_address\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">";
        // line 222
        yield ($context["entry_country"] ?? null);
        yield "</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_p_country\" class=\"form-control\" value=\"";
        // line 224
        yield ((array_key_exists("module_purpletree_pos_guest_p_country", $context)) ? (($context["module_purpletree_pos_guest_p_country"] ?? null)) : (""));
        yield "\" id = \"guest_p_country\"/>
\t\t</div>
\t</div>\t
\t
\t<div class=\"form-group py-1 row payment_address\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">";
        // line 229
        yield ($context["entry_state"] ?? null);
        yield "</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_p_state\" class=\"form-control\" value=\"";
        // line 231
        yield ((array_key_exists("module_purpletree_pos_guest_p_state", $context)) ? (($context["module_purpletree_pos_guest_p_state"] ?? null)) : (""));
        yield "\" id = \"guest_p_state\"/>
\t\t</div>
\t</div-->
<!--- Guest user code --->\t\t
\t\t\t\t\t
\t\t\t</div>
\t\t\t<div id=\"poslicenseModal\" class=\"modal modall\">
\t\t\t\t   <!-- Modal content -->
\t\t   <div class=\"modal-content modal-contentt\">
\t\t\t  <div class=\"row\">
\t\t\t\t <div class=\"col-lg-12 liceform\">
\t\t\t\t   <span class=\"close\">&times;</span>
\t\t\t\t   
\t\t\t\t\t   <div style=\"display:none\" class=\"alert alert-danger\" id=\"modal_lic_error\">
                      </div>
\t\t\t\t   <div class=\"form-group row\" name=\"Licencekeyval1\" style=\"margin-top: 15px;\" >
\t\t\t\t
\t\t\t\t\t  <div class=\"col-lg-10\" style=\"padding:0;\">
\t\t\t\t\t  
                       <label class=\"control-label\" for=\"input-name\">";
        // line 250
        yield ($context["enter_license_key1"] ?? null);
        yield "</label>
                       <input name=\"\" id=\"licenskey1\" value=\"\" placeholder=\"";
        // line 251
        yield ($context["enter_license_key1"] ?? null);
        yield "\" class=\"form-control\" autocomplete=\"off\" type=\"text\" name=\"Licencekeyval\" /><ul class=\"dropdown-menu\"></ul>
\t\t\t\t\t   </div>
\t\t\t\t\t   <div class=\"col-lg-2\">
\t\t\t\t\t   <label class=\"control-label\" for=\"input-name\" style=\"color:#fff\">.</label>
\t\t\t\t     \t<input value=\"";
        // line 255
        yield ($context["button_ok"] ?? null);
        yield "\" class=\"btn btn-primary okbtn\" type=\"button\" onclick=\"savelicc()\"/>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-12 \" style=\"left:-13px; top:10px\";>
\t\t\t\t     <input value=\"";
        // line 259
        yield ($context["dont_have_lisence_key"] ?? null);
        yield "\" class=\"btn btn-primary licencekey2\" style=\"margin-top:14px \" type=\"button\" onclick=\"dontlice()\"/>\t
\t\t\t\t</div>
                    </div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"orderdiv mt-3\" style=\"display:none;\">
                       <label class=\"control-label\" for=\"input-name\">";
        // line 264
        yield ($context["entry_order_id"] ?? null);
        yield "</label>
                       <input name=\"order_id\" id=\"order_id\" value=\"\" placeholder=\"";
        // line 265
        yield ($context["entry_order_id"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\" autocomplete=\"off\" type=\"text\"><ul class=\"dropdown-menu\" ></ul>
 
\t\t\t\t    <div class=\"form-group\">
                       <label class=\"control-label\" for=\"input-name\">";
        // line 268
        yield ($context["entry_email_id"] ?? null);
        yield "</label>
                       <input name=\"email_id\" id=\"email_id\" value=\"\" placeholder=\"";
        // line 269
        yield ($context["entry_email_id"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\" autocomplete=\"off\" type=\"text\"><ul class=\"dropdown-menu\"></ul>
                  </div>
                  <div class=\"form-group mt-3\">
\t\t\t\t  \t<input value=\"";
        // line 272
        yield         // line 273
($context["button_submit"] ?? null);
        yield "\" class=\"btn btn-primary getlicbtn\" style=\" padding: 8px 20px 8px 20px; \" type=\"button\" onclick=\"getlicense()\"/>
\t\t\t\t\t\t\t\t
\t\t\t\t  </div>
\t\t\t\t  </div>
\t\t\t\t  
\t\t\t\t</div>
\t\t\t </div>
\t\t    </div>
           \t\t\t
\t\t</div>
\t\t</form>
\t\t<div class=\"panel-footer card-footer text-center ptsc-pos-version\">";
        // line 284
        yield ($context["version"] ?? null);
        yield "</div>
\t</div>
</div>
</div>
</div>
<style>

<!-- body {font-family: Arial, Helvetica, sans-serif;} -->
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 15px;
    border: 1px solid #888;
\twidth: 30%;
}
.mbutton{
margin-top: 62px;
margin-left: 282px;
}


/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.liceform .form-group {
margin:0;
}\t

.pts-legend-text {

    font-size: 16px;
    padding-left: 50px;

}\t
</style>
<script>
\$('.shipping_address').css('display','none');
\$('.payment_address').css('display','none');

var modal = document.getElementById('poslicenseModal');
var btn = document.getElementById(\"getLicensee\");
var span = document.getElementsByClassName(\"close\")[0];
btn.onclick = function() {
    modal.style.display = \"block\";
\t// \$('#modal_lic_error').html('');
\t \$('#modal_lic_error').css('display','none');
}
span.onclick = function() {
    modal.style.display = \"none\";
\t\$('.orderdiv').css('display','none');
}


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = \"none\";
    }
}
</script>

";
        // line 373
        if ((($context["module_purpletree_pos_guest_shipping_address"] ?? null) == 1)) {
            // line 374
            yield "<script> \$('.shipping_address').css('display','block');</script>
";
        }
        // line 376
        if ((($context["module_purpletree_pos_guest_payment_address"] ?? null) == 1)) {
            // line 377
            yield "<script> \$('.payment_address').css('display','block');</script>
";
        }
        // line 379
        yield "
<script>
function savelicc(){
\tvar licenskey1 = \$('#licenskey1').val();
\tif (licenskey1 == \"\") {
        \$('#modal_lic_error').html(\"Enter license key\");
\t\t\$('#modal_lic_error').css('display','block');
\t    \$('.alertseucess').css('display','none');
    } else {
\t\$('.alertseucess').text(\"License key has been Changed. Click on Save button to save changes\");
\t\t\$('.alertseucess').css('display','block');
\t\$('#setlicensee').val(licenskey1);
\t\t\$('.orderdiv').css('display','none');
\t\t\t   \$('.close').click();
\t}
}
function dontlice(){
\t\$('.orderdiv').css('display','block');
}
function getlicense(order_id,Email_id){
\$('.getlicbtn').addClass('disabled');
\$('.getlicbtn').val(\"";
        // line 400
        yield ($context["please_wait"] ?? null);
        yield "\");
var order_id = document.getElementById('order_id').value;
var email_id = document.getElementById('email_id').value;
    if (!order_id.match(/^\\d+/)) {
\t\t\t\t\$('#modal_lic_error').html(\"";
        // line 404
        yield ($context["error_order_id"] ?? null);
        yield "\");
\t\t\t    \$('#modal_lic_error').css('display','block');
\t\t\t\t\$('.getlicbtn').removeClass('disabled');
\t\t\t    \$('.getlicbtn').val(\"";
        // line 407
        yield ($context["button_submit"] ?? null);
        yield "\");
\t  return false;
    } 
    var atpos = email_id.indexOf(\"@\");
    var dotpos = email_id.lastIndexOf(\".\");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email_id.length) {
\t\t \$('#modal_lic_error').html(\"";
        // line 413
        yield ($context["error_email_id"] ?? null);
        yield "\");
\t\t\t    \$('#modal_lic_error').css('display','block');
\t\t\t\t\$('.getlicbtn').removeClass('disabled');
\t\t\t\$('.getlicbtn').val(\"";
        // line 416
        yield ($context["button_submit"] ?? null);
        yield "\")
        return false;
    }
\$.ajax ({
            url: \"https://process.purpletreesoftware.com/processorder.php\",
            data:'order_id='+order_id+'&email_id='+email_id+'&module=opencart_pos',
\t\t\ttype: 'POST',
\t\t\tdataType: \"json\",
            success: function( result ) {
\t\t\t\$('.getlicbtn').removeClass('disabled');
\t\t\t\$('.getlicbtn').val(\"";
        // line 426
        yield ($context["button_submit"] ?? null);
        yield "\")
\t\t\tif(result.status == 'success') {
\t\t\t\$('.alertseucess').text(\"License key has been Changed. Click on Save button to save changes\");
\t\t\t\t\$('.alertseucess').css('display','block');
               \$('#setlicensee').val(result.process_data);
\t\t\t   \$('.orderdiv').css('display','none');
\t\t\t   \$('.close').click();
\t\t\t   } else {
\t\t\t    \$('#modal_lic_error').html(result.msg);
\t\t\t    \$('#modal_lic_error').css('display','block');
\t\t\t   }
            }
        });
    }
\t
\t\$(\".pts_payment_address input[type=radio]\").on('click',function(e){
\t\tif(e.target.value == 1){
\t\t\t\$('.payment_address').css('display','block');
\t\t}
\t\tif(e.target.value == 2){
\t\t\t\$('.payment_address').css('display','none');
\t\t}
\t});
\t
\t\t\$(\".pts_shipping_address input[type=radio]\").on('click',function(e){
\t\tif(e.target.value == 1){
\t\t\t\$('.shipping_address').css('display','block');
\t\t}
\t\tif(e.target.value == 2){
\t\t\t\$('.shipping_address').css('display','none');
\t\t}
\t});
</script>
";
        // line 459
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/purpletree_pos/admin/view/template/module/purpletree_pos.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  840 => 459,  804 => 426,  791 => 416,  785 => 413,  776 => 407,  770 => 404,  763 => 400,  740 => 379,  736 => 377,  734 => 376,  730 => 374,  728 => 373,  636 => 284,  622 => 273,  621 => 272,  615 => 269,  611 => 268,  605 => 265,  601 => 264,  593 => 259,  586 => 255,  579 => 251,  575 => 250,  553 => 231,  548 => 229,  540 => 224,  535 => 222,  528 => 218,  523 => 216,  516 => 212,  511 => 210,  504 => 206,  499 => 204,  492 => 200,  487 => 198,  480 => 194,  475 => 192,  464 => 188,  455 => 186,  450 => 184,  441 => 178,  436 => 176,  428 => 171,  423 => 169,  416 => 165,  411 => 163,  404 => 159,  399 => 157,  392 => 153,  387 => 151,  380 => 147,  375 => 145,  368 => 141,  363 => 139,  352 => 135,  343 => 133,  338 => 131,  329 => 125,  324 => 123,  317 => 119,  312 => 117,  305 => 113,  300 => 111,  293 => 107,  288 => 105,  283 => 103,  275 => 98,  270 => 96,  262 => 91,  257 => 89,  250 => 84,  235 => 82,  231 => 81,  225 => 78,  218 => 73,  203 => 71,  199 => 70,  193 => 67,  182 => 59,  175 => 55,  170 => 53,  166 => 52,  161 => 50,  154 => 45,  149 => 43,  144 => 42,  139 => 40,  134 => 39,  132 => 38,  126 => 35,  120 => 32,  114 => 29,  110 => 27,  103 => 24,  100 => 23,  93 => 20,  91 => 19,  85 => 15,  74 => 13,  70 => 12,  65 => 10,  58 => 8,  54 => 7,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
{{ column_left }}
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right float-end\">
\t\t\t\t<button type=\"submit\" form=\"form-pos\" data-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
\t\t\t\t<a href=\"{{ cancel }}\" data-toggle=\"tooltip\" title=\"{{ button_cancel }}\" class=\"btn btn-default btn-light\"><i class=\"fa fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1>{{ heading_title }}</h1>
\t\t\t <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t{% if error_warning %}
\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}
\t\t</div>
\t\t{% endif %}
\t\t{% if success %}
\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> {{ success }}
\t\t</div>
\t\t{% endif%}
\t\t<div class=\"panel panel-default card\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title card-header\"><i class=\"fa fa-pencil fas fa-edit\"></i> {{ text_edit }}</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body card-body\">
\t\t\t\t<form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-pos\" class=\"form-horizontal\">\t\t\t\t\t
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t<div class=\"form-group py-1 row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label control-label\" for=\"input-status\">{{ entry_status }}</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"module_purpletree_pos_status\" id=\"input-status\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t{% if module_purpletree_pos_status %}
\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">{{ text_enabled }}</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">{{ text_disabled }}</option>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<option value=\"1\">{{ text_enabled }}</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">{{ text_disabled }}</option>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"form-group  required\">
\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t  <input type=\"hidden\" name=\"module_purpletree_pos_process_data\" value=\"{{ module_purpletree_pos_process_data }}\" class=\"form-control\" id=\"setlicensee\"/>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t  <input type=\"hidden\" name=\"module_purpletree_pos_validate_text\" value=\"{{ module_purpletree_pos_validate_text }}\">
\t\t\t\t\t\t\t  <input type=\"hidden\" name=\"module_purpletree_pos_live_validate_text\" value=\"{{ module_purpletree_pos_live_validate_text }}\">
\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t  <input type=\"hidden\" name=\"module_purpletree_pos_encypt_text\" value=\"{{ module_purpletree_pos_encypt_text }}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10 col-sm-offset-2 offset-sm-2\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t   <button type=\"button\" class=\"btn btn-primary\" style=\"padding: 8px 20px;\" id=\"getLicensee\">{{ button_get_license }}</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group py-1 row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label control-label\" >{{ entry_return_action }}</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"module_purpletree_pos_return_action\" id=\"input-return-action\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t{% for actions in return_actions %}
\t\t\t\t\t\t\t\t\t\t<option {% if module_purpletree_pos_return_action == actions.return_action_id %} selected {% endif %} value=\"{{actions.return_action_id}}\">{{ actions.name }}</option>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group py-1 row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label control-label\" >{{ entry_return_status }}</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"module_purpletree_pos_return_status\" id=\"input-return-status\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t{% for status in return_status %}
\t\t\t\t\t\t\t\t\t\t<option {% if module_purpletree_pos_return_status == status.return_status_id %} selected {% endif %} value=\"{{status.return_status_id}}\">{{ status.name }}</option>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t<div class=\"form-group row py-1\">
                  <label class=\"col-sm-2 col-form-label control-label\">{{ entry_receipt_footer_detail }}</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"module_purpletree_pos_receipt_detail\" rows=\"8\" placeholder=\"receipt footer details\" id=\"input-receipt\" class=\"form-control\">{{ module_purpletree_pos_receipt_detail }}</textarea>
                  </div>
                </div>
\t\t\t\t
\t\t\t\t<div class=\"form-group row py-1\">
                  <label class=\"col-sm-2 col-form-label control-label\">{{ entry_receipt_store_detail }}</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"module_purpletree_pos_receipt_store_detail\" rows=\"8\" placeholder=\"receipt store details\" id=\"input-receipt\" class=\"form-control\">{{ module_purpletree_pos_receipt_store_detail }}</textarea>
                  </div>
                </div>
\t\t\t\t
<!--- Guest user code --->\t\t\t\t\t\t
<!--legend>{{ entry_guest_user }}</legend>\t\t\t\t\t\t
\t<div class=\"form-group py-1 row\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">{{ entry_first_name }}</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_first_name\" class=\"form-control\" value=\"{{ module_purpletree_pos_guest_first_name is defined?module_purpletree_pos_guest_first_name:'' }}\" id = \"guest_first_name\"/>
\t\t</div>
\t</div>
\t<div class=\"form-group py-1 row\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">{{ entry_last_name }}</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_last_name\" class=\"form-control\" value=\"{{ module_purpletree_pos_guest_last_name is defined?module_purpletree_pos_guest_last_name:'' }}\" id = \"guest_last_name\"/>
\t\t</div>
\t</div>
\t<div class=\"form-group py-1 row\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">{{ entry_email }}</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_email\" class=\"form-control\" value=\"{{ module_purpletree_pos_guest_email is defined?module_purpletree_pos_guest_email:'' }}\" id = \"guest_email\"/>
\t\t</div>
\t</div>
\t<div class=\"form-group py-1 row\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">{{ entry_telephone }}</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_telephone\" class=\"form-control\" value=\"{{ module_purpletree_pos_guest_telephone is defined?module_purpletree_pos_guest_telephone:'' }}\" id = \"guest_telephone\"/>
\t\t</div>
\t</div>

\t<legend class=\"pts-legend-text\">
\t<label class=\"radio-inline\">
    {{ entry_default_shipping_address }}</label>
\t <label class=\"radio-inline pts_shipping_address\">
     <input type=\"radio\" name=\"module_purpletree_pos_guest_shipping_address\" {% if module_purpletree_pos_guest_shipping_address == 1 %} checked=\"checked\" {% endif %} value=\"1\">{{ entry_shipping_address }}</label>
\t <label class=\"radio-inline pts_shipping_address\">
     <input type=\"radio\" name=\"module_purpletree_pos_guest_shipping_address\" {% if module_purpletree_pos_guest_shipping_address == 2 %} checked=\"checked\" {% endif %}  value=\"2\">{{ entry_payment_address }}</label>
\t </legend>\t
\t 
\t<div class=\"form-group py-1 row shipping_address\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">{{ entry_company }}</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_s_company\" class=\"form-control\" value=\"{{ module_purpletree_pos_guest_s_company is defined?module_purpletree_pos_guest_s_company:'' }}\" id = \"guest_s_company\"/>
\t\t</div>
\t</div>
\t<div class=\"form-group py-1 row shipping_address\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">{{ entry_address_1 }}</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_s_address_1\" class=\"form-control\" value=\"{{ module_purpletree_pos_guest_s_address_1 is defined?module_purpletree_pos_guest_s_address_1:'' }}\" id = \"guest_s_address_1\"/>
\t\t</div>
\t</div>
\t<div class=\"form-group py-1 row shipping_address\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">{{ entry_address_2 }}</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_s_address_2\" class=\"form-control\" value=\"{{ module_purpletree_pos_guest_s_address_2 is defined?module_purpletree_pos_guest_s_address_2:'' }}\" id = \"guest_s_address_2\"/>
\t\t</div>
\t</div>
\t<div class=\"form-group py-1 row shipping_address\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">{{ entry_city }}</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_s_city\" class=\"form-control\" value=\"{{ module_purpletree_pos_guest_s_city is defined?module_purpletree_pos_guest_s_city:'' }}\" id = \"guest_s_city\"/>
\t\t</div>
\t</div>
\t<div class=\"form-group py-1 row shipping_address\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">{{ entry_post_code }}</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_s_post_code\" class=\"form-control\" value=\"{{ module_purpletree_pos_guest_s_post_code is defined?module_purpletree_pos_guest_s_post_code:'' }}\" id = \"guest_s_post_code\"/>
\t\t</div>
\t</div>
\t<div class=\"form-group py-1 row shipping_address\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">{{ entry_country }}</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_s_country\" class=\"form-control\" value=\"{{ module_purpletree_pos_guest_s_country is defined?module_purpletree_pos_guest_s_country:'' }}\" id = \"guest_s_country\"/>
\t\t</div>
\t</div>\t
\t
\t<div class=\"form-group py-1 row shipping_address\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">{{ entry_state }}</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_s_state\" class=\"form-control\" value=\"{{ module_purpletree_pos_guest_s_state is defined?module_purpletree_pos_guest_s_state:'' }}\" id = \"guest_s_state\"/>
\t\t</div>
\t</div>
\t
\t<legend class=\"pts-legend-text\">
\t<label class=\"radio-inline\">
\t{{ entry_default_payment_address }}</label>
\t <label class=\"radio-inline pts_payment_address\">
     <input {% if module_purpletree_pos_guest_payment_address == 1 %} checked=\"checked\" {% endif %} type=\"radio\" name=\"module_purpletree_pos_guest_payment_address\" value=\"1\">{{ entry_payment_address }}</label>
\t <label class=\"radio-inline pts_payment_address\">
     <input type=\"radio\" name=\"module_purpletree_pos_guest_payment_address\" {% if module_purpletree_pos_guest_payment_address == 2 %} checked=\"checked\" {% endif %} value=\"2\">{{ entry_store_address }}</label>
\t </legend>\t
\t 
\t<div class=\"form-group py-1 row payment_address\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">{{ entry_company }}</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_p_company\" class=\"form-control\" value=\"{{ module_purpletree_pos_guest_p_company is defined?module_purpletree_pos_guest_p_company:'' }}\" id = \"guest_p_company\"/>
\t\t</div>
\t</div>
\t<div class=\"form-group py-1 row payment_address\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">{{ entry_address_1 }}</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_p_address_1\" class=\"form-control\" value=\"{{ module_purpletree_pos_guest_p_address_1 is defined?module_purpletree_pos_guest_p_address_1:'' }}\" id = \"guest_p_address_1\"/>
\t\t</div>
\t</div>
\t<div class=\"form-group py-1 row payment_address\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">{{ entry_address_2 }}</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_p_address_2\" class=\"form-control\" value=\"{{ module_purpletree_pos_guest_p_address_2 is defined?module_purpletree_pos_guest_p_address_2:'' }}\" id = \"guest_p_address_2\"/>
\t\t</div>
\t</div>
\t<div class=\"form-group py-1 row payment_address\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">{{ entry_city }}</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_p_city\" class=\"form-control\" value=\"{{ module_purpletree_pos_guest_p_city is defined?module_purpletree_pos_guest_p_city:'' }}\" id = \"guest_p_city\"/>
\t\t</div>
\t</div>
\t<div class=\"form-group py-1 row payment_address\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">{{ entry_post_code }}</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_p_post_code\" class=\"form-control\" value=\"{{ module_purpletree_pos_guest_p_post_code is defined?module_purpletree_pos_guest_p_post_code:'' }}\" id = \"guest_p_post_code\"/>
\t\t</div>
\t</div>
\t<div class=\"form-group py-1 row payment_address\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">{{ entry_country }}</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_p_country\" class=\"form-control\" value=\"{{ module_purpletree_pos_guest_p_country is defined?module_purpletree_pos_guest_p_country:'' }}\" id = \"guest_p_country\"/>
\t\t</div>
\t</div>\t
\t
\t<div class=\"form-group py-1 row payment_address\">
\t\t<label class=\"col-sm-3 col-form-label control-label\" for=\"input-status\">{{ entry_state }}</label>
\t\t<div class=\"col-md-9\">
\t\t\t<input type=\"text\" name=\"module_purpletree_pos_guest_p_state\" class=\"form-control\" value=\"{{ module_purpletree_pos_guest_p_state is defined?module_purpletree_pos_guest_p_state:'' }}\" id = \"guest_p_state\"/>
\t\t</div>
\t</div-->
<!--- Guest user code --->\t\t
\t\t\t\t\t
\t\t\t</div>
\t\t\t<div id=\"poslicenseModal\" class=\"modal modall\">
\t\t\t\t   <!-- Modal content -->
\t\t   <div class=\"modal-content modal-contentt\">
\t\t\t  <div class=\"row\">
\t\t\t\t <div class=\"col-lg-12 liceform\">
\t\t\t\t   <span class=\"close\">&times;</span>
\t\t\t\t   
\t\t\t\t\t   <div style=\"display:none\" class=\"alert alert-danger\" id=\"modal_lic_error\">
                      </div>
\t\t\t\t   <div class=\"form-group row\" name=\"Licencekeyval1\" style=\"margin-top: 15px;\" >
\t\t\t\t
\t\t\t\t\t  <div class=\"col-lg-10\" style=\"padding:0;\">
\t\t\t\t\t  
                       <label class=\"control-label\" for=\"input-name\">{{ enter_license_key1 }}</label>
                       <input name=\"\" id=\"licenskey1\" value=\"\" placeholder=\"{{ enter_license_key1 }}\" class=\"form-control\" autocomplete=\"off\" type=\"text\" name=\"Licencekeyval\" /><ul class=\"dropdown-menu\"></ul>
\t\t\t\t\t   </div>
\t\t\t\t\t   <div class=\"col-lg-2\">
\t\t\t\t\t   <label class=\"control-label\" for=\"input-name\" style=\"color:#fff\">.</label>
\t\t\t\t     \t<input value=\"{{ button_ok }}\" class=\"btn btn-primary okbtn\" type=\"button\" onclick=\"savelicc()\"/>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-12 \" style=\"left:-13px; top:10px\";>
\t\t\t\t     <input value=\"{{ dont_have_lisence_key }}\" class=\"btn btn-primary licencekey2\" style=\"margin-top:14px \" type=\"button\" onclick=\"dontlice()\"/>\t
\t\t\t\t</div>
                    </div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"orderdiv mt-3\" style=\"display:none;\">
                       <label class=\"control-label\" for=\"input-name\">{{ entry_order_id }}</label>
                       <input name=\"order_id\" id=\"order_id\" value=\"\" placeholder=\"{{ entry_order_id }}\" id=\"input-name\" class=\"form-control\" autocomplete=\"off\" type=\"text\"><ul class=\"dropdown-menu\" ></ul>
 
\t\t\t\t    <div class=\"form-group\">
                       <label class=\"control-label\" for=\"input-name\">{{ entry_email_id }}</label>
                       <input name=\"email_id\" id=\"email_id\" value=\"\" placeholder=\"{{ entry_email_id }}\" id=\"input-name\" class=\"form-control\" autocomplete=\"off\" type=\"text\"><ul class=\"dropdown-menu\"></ul>
                  </div>
                  <div class=\"form-group mt-3\">
\t\t\t\t  \t<input value=\"{{
\t\t\t\t\tbutton_submit }}\" class=\"btn btn-primary getlicbtn\" style=\" padding: 8px 20px 8px 20px; \" type=\"button\" onclick=\"getlicense()\"/>
\t\t\t\t\t\t\t\t
\t\t\t\t  </div>
\t\t\t\t  </div>
\t\t\t\t  
\t\t\t\t</div>
\t\t\t </div>
\t\t    </div>
           \t\t\t
\t\t</div>
\t\t</form>
\t\t<div class=\"panel-footer card-footer text-center ptsc-pos-version\">{{ version}}</div>
\t</div>
</div>
</div>
</div>
<style>

<!-- body {font-family: Arial, Helvetica, sans-serif;} -->
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 15px;
    border: 1px solid #888;
\twidth: 30%;
}
.mbutton{
margin-top: 62px;
margin-left: 282px;
}


/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.liceform .form-group {
margin:0;
}\t

.pts-legend-text {

    font-size: 16px;
    padding-left: 50px;

}\t
</style>
<script>
\$('.shipping_address').css('display','none');
\$('.payment_address').css('display','none');

var modal = document.getElementById('poslicenseModal');
var btn = document.getElementById(\"getLicensee\");
var span = document.getElementsByClassName(\"close\")[0];
btn.onclick = function() {
    modal.style.display = \"block\";
\t// \$('#modal_lic_error').html('');
\t \$('#modal_lic_error').css('display','none');
}
span.onclick = function() {
    modal.style.display = \"none\";
\t\$('.orderdiv').css('display','none');
}


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = \"none\";
    }
}
</script>

{% if module_purpletree_pos_guest_shipping_address == 1 %}
<script> \$('.shipping_address').css('display','block');</script>
{% endif %}
{% if module_purpletree_pos_guest_payment_address == 1 %}
<script> \$('.payment_address').css('display','block');</script>
{% endif %}

<script>
function savelicc(){
\tvar licenskey1 = \$('#licenskey1').val();
\tif (licenskey1 == \"\") {
        \$('#modal_lic_error').html(\"Enter license key\");
\t\t\$('#modal_lic_error').css('display','block');
\t    \$('.alertseucess').css('display','none');
    } else {
\t\$('.alertseucess').text(\"License key has been Changed. Click on Save button to save changes\");
\t\t\$('.alertseucess').css('display','block');
\t\$('#setlicensee').val(licenskey1);
\t\t\$('.orderdiv').css('display','none');
\t\t\t   \$('.close').click();
\t}
}
function dontlice(){
\t\$('.orderdiv').css('display','block');
}
function getlicense(order_id,Email_id){
\$('.getlicbtn').addClass('disabled');
\$('.getlicbtn').val(\"{{ please_wait }}\");
var order_id = document.getElementById('order_id').value;
var email_id = document.getElementById('email_id').value;
    if (!order_id.match(/^\\d+/)) {
\t\t\t\t\$('#modal_lic_error').html(\"{{ error_order_id }}\");
\t\t\t    \$('#modal_lic_error').css('display','block');
\t\t\t\t\$('.getlicbtn').removeClass('disabled');
\t\t\t    \$('.getlicbtn').val(\"{{ button_submit }}\");
\t  return false;
    } 
    var atpos = email_id.indexOf(\"@\");
    var dotpos = email_id.lastIndexOf(\".\");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email_id.length) {
\t\t \$('#modal_lic_error').html(\"{{ error_email_id }}\");
\t\t\t    \$('#modal_lic_error').css('display','block');
\t\t\t\t\$('.getlicbtn').removeClass('disabled');
\t\t\t\$('.getlicbtn').val(\"{{ button_submit }}\")
        return false;
    }
\$.ajax ({
            url: \"https://process.purpletreesoftware.com/processorder.php\",
            data:'order_id='+order_id+'&email_id='+email_id+'&module=opencart_pos',
\t\t\ttype: 'POST',
\t\t\tdataType: \"json\",
            success: function( result ) {
\t\t\t\$('.getlicbtn').removeClass('disabled');
\t\t\t\$('.getlicbtn').val(\"{{ button_submit }}\")
\t\t\tif(result.status == 'success') {
\t\t\t\$('.alertseucess').text(\"License key has been Changed. Click on Save button to save changes\");
\t\t\t\t\$('.alertseucess').css('display','block');
               \$('#setlicensee').val(result.process_data);
\t\t\t   \$('.orderdiv').css('display','none');
\t\t\t   \$('.close').click();
\t\t\t   } else {
\t\t\t    \$('#modal_lic_error').html(result.msg);
\t\t\t    \$('#modal_lic_error').css('display','block');
\t\t\t   }
            }
        });
    }
\t
\t\$(\".pts_payment_address input[type=radio]\").on('click',function(e){
\t\tif(e.target.value == 1){
\t\t\t\$('.payment_address').css('display','block');
\t\t}
\t\tif(e.target.value == 2){
\t\t\t\$('.payment_address').css('display','none');
\t\t}
\t});
\t
\t\t\$(\".pts_shipping_address input[type=radio]\").on('click',function(e){
\t\tif(e.target.value == 1){
\t\t\t\$('.shipping_address').css('display','block');
\t\t}
\t\tif(e.target.value == 2){
\t\t\t\$('.shipping_address').css('display','none');
\t\t}
\t});
</script>
{{ footer }}", "extension/purpletree_pos/admin/view/template/module/purpletree_pos.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY/extension/purpletree_pos/admin/view/template/module/purpletree_pos.twig");
    }
}
