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

/* admin/view/template/customer/customer_form.twig */
class __TwigTemplate_55da8120b3dbfab3467dafbdcbdf2e5c extends Template
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
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        ";
        // line 6
        if (($context["orders"] ?? null)) {
            // line 7
            yield "          <a href=\"";
            yield ($context["orders"] ?? null);
            yield "\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_order"] ?? null);
            yield "\" class=\"btn btn-warning\"><i class=\"fa-solid fa-receipt\"></i></a>
        ";
        }
        // line 9
        yield "        <button type=\"submit\" id=\"button-save\" form=\"form-customer\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 10
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
        </div>
       <h1 style=\"color:white\">";
        // line 12
        yield ($context["heading_title"] ?? null);
        yield "</h1>
     <ol class=\"breadcrumb\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 22
        yield ($context["text_form"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-customer\" action=\"";
        // line 24
        yield ($context["save"] ?? null);
        yield "\" method=\"post\">
        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 26
        yield ($context["tab_general"] ?? null);
        yield "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-address\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 27
        yield ($context["tab_address"] ?? null);
        yield "</a></li>
          ";
        // line 29
        yield "          <li class=\"nav-item\"><a href=\"#tab-history\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        yield ($context["tab_history"] ?? null);
        yield "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-transaction\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 30
        yield ($context["tab_transaction"] ?? null);
        yield "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-reward\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 31
        yield ($context["tab_reward"] ?? null);
        yield "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-ip\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 32
        yield ($context["tab_ip"] ?? null);
        yield "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-authorize\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 33
        yield ($context["tab_authorize"] ?? null);
        yield "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-kyc\" data-bs-toggle=\"tab\" class=\"nav-link\">KYC Details</a></li>
          <li class=\"nav-item\"><a href=\"#tab-localbank\" data-bs-toggle=\"tab\" class=\"nav-link\">Local Bank Details</a></li>
          <li class=\"nav-item\"><a href=\"#tab-nationalbank\" data-bs-toggle=\"tab\" class=\"nav-link\">National Bank Details</a></li>
          <li class=\"nav-item\"><a href=\"#tab-subsciption\" data-bs-toggle=\"tab\" class=\"nav-link\">Subscripyion Details</a></li>
        </ul>
        <div class=\"tab-content\">
          <div id=\"tab-general\" class=\"tab-pane active\">
            
              <fieldset>
                <legend>";
        // line 43
        yield ($context["text_customer"] ?? null);
        yield "</legend>
                 <div class=\"row mb-12\" style=\"row-gap: 20px;margin-left:100px\">
                
                    <div class=\"col-sm-3\">
                  <label for=\"input-store\" class=\"col-form-label\">";
        // line 47
        yield ($context["entry_store"] ?? null);
        yield "</label>
                  
                    <select name=\"store_id\" id=\"input-store\" class=\"form-select\" style=\"width:100%\">
                      ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 51
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 51);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 51) == ($context["store_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 51);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "                    </select>
                  </div>
                

                
                    <div class=\"col-sm-3\">
                  <label for=\"input-language\" class=\"col-form-label\">";
        // line 59
        yield ($context["entry_language"] ?? null);
        yield "</label>
                  
                    <select name=\"language_id\" id=\"input-language\" class=\"form-select\" style=\"width:100%\">
                      ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 63
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63) == ($context["language_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 63);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "                    </select>
                  </div>
                

                
                     <div class=\"col-sm-3\">
                  <label for=\"input-customer-group\" class=\"col-form-label\">";
        // line 71
        yield ($context["entry_customer_group"] ?? null);
        yield "</label>
                 
                    <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\" style=\"width:100%\">
                      ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 75
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 75);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 75) == ($context["customer_group_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 75);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "                    </select>
                  </div>
                
                
                    <div class=\"col-sm-3 required\">
                  <label for=\"input-firstname\" class=\"col-form-label\">";
        // line 82
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
                  
                    <input type=\"text\" name=\"firstname\" value=\"";
        // line 84
        yield ($context["firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-firstname\" class=\"form-control\"/>
                    <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
                  </div>
                
                
                     <div class=\"col-sm-3 required\">
                  <label for=\"input-lastname\" class=\"col-form-label\">";
        // line 90
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
                 
                    <input type=\"text\" name=\"lastname\" value=\"";
        // line 92
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-lastname\" class=\"form-control\"/>
                    <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
                  </div>
                
                
                     <div class=\"col-sm-3 required\">
                  <label for=\"input-email\" class=\"col-form-label\">";
        // line 98
        yield ($context["entry_email"] ?? null);
        yield "</label>
                 
                    <input type=\"text\" name=\"email\" value=\"";
        // line 100
        yield ($context["email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\"/>
                    <div id=\"error-email\" class=\"invalid-feedback\"></div>
                  </div>
                
                 ";
        // line 104
        if (($context["config_telephone_required"] ?? null)) {
            yield " required";
        }
        // line 105
        yield "                     <div class=\"col-sm-3\">
                  <label for=\"input-telephone\" class=\"col-form-label\">";
        // line 106
        yield ($context["entry_telephone"] ?? null);
        yield "</label>
                 
                    <input type=\"text\" name=\"telephone\" value=\"";
        // line 108
        yield ($context["telephone"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_telephone"] ?? null);
        yield "\" id=\"input-telephone\" class=\"form-control\"/>
                    <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-sm-3 required\">
                  <label for=\"input-gst\" class=\" col-form-label\">GSTIN</label>
                 
                    <input type=\"text\" name=\"gst\" value=\"";
        // line 114
        yield ($context["gst"] ?? null);
        yield "\" placeholder=\"GSTIN\" id=\"input-gst\" class=\"form-control\"/>
                    <div id=\"error-gst\" class=\"invalid-feedback\"></div>
                  </div>
                </div><br><br>
                
                <div class=\"row\"style=\"margin-left:100px\">
                  ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 121
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 121) == "account")) {
                // line 122
                yield "                      <div class=\"col-sm-3 mb-3 custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122);
                yield "\">
                        
                        <!-- Label (always on top) -->
                        <label for=\"input-custom-field-";
                // line 125
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125);
                yield "\" class=\"form-label fw-bold\">
                          ";
                // line 126
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 126);
                yield "
                        </label>
                
                        ";
                // line 130
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 130) == "select")) {
                    // line 131
                    yield "                          <select name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                    yield "]\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                    yield "\"  class=\"form-select\">
                            <option value=\"\">";
                    // line 132
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                            ";
                    // line 133
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 133));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 134
                        yield "                              <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 134);
                        yield "\"
                                ";
                        // line 135
                        if (((($_v0 = ($context["account_custom_field"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 135) == (($_v1 = ($context["account_custom_field"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135)] ?? null) : null)))) {
                            yield " selected";
                        }
                        yield ">
                                ";
                        // line 136
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 136);
                        yield "
                              </option>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 139
                    yield "                          </select>
                        ";
                }
                // line 141
                yield "                
                        ";
                // line 143
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 143) == "radio")) {
                    // line 144
                    yield "                          <div class=\"border rounded p-2\" style=\"height: 150px; overflow: auto;\">
                            ";
                    // line 145
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 145));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 146
                        yield "                              <div class=\"form-check\">
                                <input type=\"radio\" name=\"custom_field[";
                        // line 147
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 147);
                        yield "]\"  value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 147);
                        yield "\"  id=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 147);
                        yield "\"  class=\"form-check-input\"
                                       ";
                        // line 148
                        if (((($_v2 = ($context["account_custom_field"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 148) == (($_v3 = ($context["account_custom_field"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> 
                                <label for=\"input-custom-value-";
                        // line 149
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 149);
                        yield "\" class=\"form-check-label\">
                                  ";
                        // line 150
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 150);
                        yield "
                                </label>
                              </div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 154
                    yield "                          </div>
                        ";
                }
                // line 156
                yield "                
                        ";
                // line 158
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 158) == "checkbox")) {
                    // line 159
                    yield "                          <div class=\"border rounded p-2\" style=\"height: 150px; overflow: auto;\">
                            ";
                    // line 160
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 160));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 161
                        yield "                              <div class=\"form-check\">
                                <input type=\"checkbox\"  name=\"custom_field[";
                        // line 162
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 162);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 162);
                        yield "\" id=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 162);
                        yield "\"  class=\"form-check-input\"
                                       ";
                        // line 163
                        if (((($_v4 = ($context["account_custom_field"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 163), (($_v5 = ($context["account_custom_field"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> 
                                <label for=\"input-custom-value-";
                        // line 164
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 164);
                        yield "\" class=\"form-check-label\">
                                  ";
                        // line 165
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 165);
                        yield "
                                </label>
                              </div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 169
                    yield "                          </div>
                        ";
                }
                // line 171
                yield "                
                        ";
                // line 173
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 173) == "text")) {
                    // line 174
                    yield "                          <input type=\"text\" name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 174);
                    yield "]\" value=\"";
                    yield (((($_v6 = ($context["account_custom_field"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 174)] ?? null) : null)) ? ((($_v7 = ($context["account_custom_field"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 174)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 174)));
                    yield "\"  placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 174);
                    yield "\"  id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 174);
                    yield "\"  class=\"form-control\"/>
                        ";
                }
                // line 176
                yield "                
                        ";
                // line 178
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 178) == "textarea")) {
                    // line 179
                    yield "                          <textarea name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 179);
                    yield "]\" rows=\"3\"  placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 179);
                    yield "\"  id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 179);
                    yield "\"  class=\"form-control\">
                              ";
                    // line 180
                    yield (((($_v8 = ($context["account_custom_field"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180)] ?? null) : null)) ? ((($_v9 = ($context["account_custom_field"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 180)));
                    yield "</textarea>
                        ";
                }
                // line 182
                yield "                
                        ";
                // line 184
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 184) == "file")) {
                    // line 185
                    yield "                          <div class=\"input-group\">
                            <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 186
                    yield ($context["upload"] ?? null);
                    yield "\" data-oc-target=\"#input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 186);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\"  data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" class=\"btn btn-primary\">
                              <i class=\"fa-solid fa-upload\"></i> ";
                    // line 187
                    yield ($context["button_upload"] ?? null);
                    yield "
                            </button>
                            <input type=\"text\" name=\"custom_field[";
                    // line 189
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189);
                    yield "]\" value=\"";
                    yield (((($_v10 = ($context["account_custom_field"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189)] ?? null) : null)) ? ((($_v11 = ($context["account_custom_field"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189)] ?? null) : null)) : (""));
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189);
                    yield "\" class=\"form-control\" readonly/>
                            <button type=\"button\" data-oc-toggle=\"download\" 
                                    data-oc-target=\"#input-custom-field-";
                    // line 191
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 191);
                    yield "\" 
                                    ";
                    // line 192
                    if ( !(($_v12 = ($context["account_custom_field"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 192)] ?? null) : null)) {
                        yield " disabled";
                    }
                    yield " 
                                    class=\"btn btn-outline-secondary\">
                              <i class=\"fa-solid fa-download\"></i> ";
                    // line 194
                    yield ($context["button_download"] ?? null);
                    yield "
                            </button>
                            <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" 
                                    title=\"";
                    // line 197
                    yield ($context["button_clear"] ?? null);
                    yield "\" 
                                    data-oc-target=\"#input-custom-field-";
                    // line 198
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198);
                    yield "\" 
                                    ";
                    // line 199
                    if ( !(($_v13 = ($context["account_custom_field"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 199)] ?? null) : null)) {
                        yield " disabled";
                    }
                    yield " 
                                    class=\"btn btn-outline-danger\">
                              <i class=\"fa-solid fa-eraser\"></i>
                            </button>
                          </div>
                        ";
                }
                // line 205
                yield "                
                        ";
                // line 207
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 207) == "date")) {
                    // line 208
                    yield "                          <input type=\"date\" 
                                 name=\"custom_field[";
                    // line 209
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 209);
                    yield "]\" 
                                 value=\"";
                    // line 210
                    yield (((($_v14 = ($context["account_custom_field"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 210)] ?? null) : null)) ? ((($_v15 = ($context["account_custom_field"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 210)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 210)));
                    yield "\" 
                                 id=\"input-custom-field-";
                    // line 211
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 211);
                    yield "\" 
                                 class=\"form-control\"/>
                        ";
                }
                // line 214
                yield "                
                        ";
                // line 216
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 216) == "time")) {
                    // line 217
                    yield "                          <input type=\"time\" 
                                 name=\"custom_field[";
                    // line 218
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 218);
                    yield "]\" 
                                 value=\"";
                    // line 219
                    yield (((($_v16 = ($context["account_custom_field"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 219)] ?? null) : null)) ? ((($_v17 = ($context["account_custom_field"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 219)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 219)));
                    yield "\" 
                                 id=\"input-custom-field-";
                    // line 220
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 220);
                    yield "\" 
                                 class=\"form-control\"/>
                        ";
                }
                // line 223
                yield "                
                        ";
                // line 225
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 225) == "datetime")) {
                    // line 226
                    yield "                          <input type=\"datetime-local\" 
                                 name=\"custom_field[";
                    // line 227
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 227);
                    yield "]\" 
                                 value=\"";
                    // line 228
                    yield (((($_v18 = ($context["account_custom_field"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228)] ?? null) : null)) ? ((($_v19 = ($context["account_custom_field"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 228)));
                    yield "\" 
                                 id=\"input-custom-field-";
                    // line 229
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 229);
                    yield "\" 
                                 class=\"form-control\"/>
                        ";
                }
                // line 232
                yield "                
                        <div id=\"error-custom-field-";
                // line 233
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 233);
                yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
            }
            // line 236
            yield "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        yield "                </div>

              </fieldset>
              <fieldset>
                <legend>";
        // line 241
        yield ($context["text_password"] ?? null);
        yield "</legend>
                  <div class=\"row mb-3\" style=\"row-gap: 20px;margin-left:90px\">
                
                    <div class=\"col-sm-4 required\">
                  <label for=\"input-password\" class=\" col-form-label\">";
        // line 245
        yield ($context["entry_password"] ?? null);
        yield "</label>
                  
                    <input type=\"password\" name=\"password\" value=\"";
        // line 247
        yield ($context["password"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_password"] ?? null);
        yield "\" id=\"input-password\" class=\"form-control\" autocomplete=\"new-password\"/>
                    <div id=\"error-password\" class=\"invalid-feedback\"></div>
                  </div>
                
               
                    <div class=\"col-sm-4 required\">
                  <label for=\"input-confirm\" class=\" col-form-label\">";
        // line 253
        yield ($context["entry_confirm"] ?? null);
        yield "</label>
                  
                    <input type=\"password\" name=\"confirm\" value=\"";
        // line 255
        yield ($context["confirm"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_confirm"] ?? null);
        yield "\" id=\"input-confirm\" class=\"form-control\"/>
                    <div id=\"error-confirm\" class=\"invalid-feedback\"></div>
                  </div>
                <div class=\"col-sm-4 required\">
                  <label for=\"input-authpin\" class=\" col-form-label\">Authpin</label>
                  
                    <input type=\"password\" name=\"authpin\" value=\"";
        // line 261
        yield ($context["authpin"] ?? null);
        yield "\" placeholder=\"Authpin\" id=\"input-authpin\" class=\"form-control\" autocomplete=\"new-authpin\"/>
                    <div id=\"error-authpin\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                
              </fieldset>
              <fieldset>
                <legend>";
        // line 268
        yield ($context["text_other"] ?? null);
        yield "</legend>
                <div class=\"row mb-12\">
                    <div class=\"col-sm-3\">
                  <label class=\" col-form-label\">";
        // line 271
        yield ($context["entry_newsletter"] ?? null);
        yield "</label>
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"newsletter\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"input-newsletter\" class=\"form-check-input\"";
        // line 274
        if (($context["newsletter"] ?? null)) {
            yield " checked";
        }
        yield "/>
                    </div>
                </div>
                <div class=\"col-sm-3\">
                  <label class=\" col-form-label\">";
        // line 278
        yield ($context["entry_status"] ?? null);
        yield "</label>
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"status\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 281
        if (($context["status"] ?? null)) {
            yield " checked";
        }
        yield "/>
                    </div>
                  </div>
                
                 <div class=\"col-sm-3\">
                  <label class=\" col-form-label\">";
        // line 286
        yield ($context["entry_safe"] ?? null);
        yield "</label>
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"safe\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"safe\" value=\"1\" id=\"input-safe\" class=\"form-check-input\"";
        // line 289
        if (($context["safe"] ?? null)) {
            yield " checked";
        }
        yield "/>
                    </div>
                    <div class=\"form-text\">";
        // line 291
        yield ($context["help_safe"] ?? null);
        yield "</div>
                  </div>
               
                    <div class=\"col-sm-3\">
                  <label class=\" col-form-label\">";
        // line 295
        yield ($context["entry_commenter"] ?? null);
        yield "</label>
                  
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"commenter\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"commenter\" value=\"1\" id=\"input-commenter\" class=\"form-check-input\"";
        // line 299
        if (($context["commenter"] ?? null)) {
            yield " checked";
        }
        yield "/>
                    </div>
                    <div class=\"form-text\">";
        // line 301
        yield ($context["help_commenter"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
              <input type=\"hidden\" name=\"customer_id\" value=\"";
        // line 305
        yield ($context["customer_id"] ?? null);
        yield "\" id=\"input-customer-id\"/>
            
          </div>
          <div id=\"tab-address\" class=\"tab-pane\">
            <fieldset>
              <legend>";
        // line 310
        yield ($context["text_address"] ?? null);
        yield "</legend>
              <div id=\"address\">";
        // line 311
        yield ($context["address"] ?? null);
        yield "</div>
            </fieldset>
          </div>
          ";
        // line 320
        yield "          <div id=\"tab-history\" class=\"tab-pane\">
            <fieldset>
              <legend>";
        // line 322
        yield ($context["text_history"] ?? null);
        yield "</legend>
              <div id=\"history\">";
        // line 323
        yield ($context["history"] ?? null);
        yield "</div>
            </fieldset>
            <fieldset>
              <legend>";
        // line 326
        yield ($context["text_history_add"] ?? null);
        yield "</legend>
              <div class=\"row mb-3\">
                <label for=\"input-history\" class=\"col-sm-2 col-form-label\">";
        // line 328
        yield ($context["entry_comment"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"comment\" rows=\"8\" placeholder=\"";
        // line 330
        yield ($context["entry_comment"] ?? null);
        yield "\" id=\"input-history\" class=\"form-control\"></textarea>
                </div>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-history\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 334
        yield ($context["button_history_add"] ?? null);
        yield "</button>
              </div>
            </fieldset>
          </div>
          <div id=\"tab-transaction\" class=\"tab-pane\">
              
            <fieldset>
              <legend>";
        // line 341
        yield ($context["text_transaction"] ?? null);
        yield "</legend>
              <div id=\"transaction\"style=\"width:85%;margin-left:105px\">";
        // line 342
        yield ($context["transaction"] ?? null);
        yield "</div>
            </fieldset>
            
            <fieldset>
              <legend>";
        // line 346
        yield ($context["text_transaction_add"] ?? null);
        yield "<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
              <td><b style=\"font-size: 18px;margin-left:400px\">Trade Balance : </b></td><td><b style=\"font-size: 16px\">";
        // line 347
        yield ($context["amount"] ?? null);
        yield "</b></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
              <td><b style=\"font-size: 18px\">AEPS Balance : </b></td><td><b style=\"font-size: 16px\">";
        // line 348
        yield ($context["aepsbalance"] ?? null);
        yield "</b></td>
        </legend>
              
            
              <label class=\"col-sm-2 col-form-label\" style=\"margin-left:100px;font-size:18px\">Transaction Type</label>
              
              <input type=\"radio\" id=\"input-transactionsubtype-trade\" name=\"input-transactionsubtype\" value=\"TRADE\" style=\"margin-left:40px\">
              <label for=\"input-transactionsubtype-trade\" style=\"font-size:15px\">TRADE</label>
            
              <input type=\"radio\" id=\"input-transactionsubtype-aeps\" name=\"input-transactionsubtype\" value=\"AEPS\" style=\"margin-left:10px\">
              <label for=\"input-transactionsubtype-aeps\" style=\"font-size:15px\">AEPS</label>
              
              <br>
            
              <label class=\"col-sm-2 col-form-label\" style=\"margin-left:100px;font-size:18px\">Transaction Subtype</label>
              
              <input type=\"radio\" id=\"input-transactiontype-credit\" name=\"input-transactiontype\" value=\"CREDIT\" style=\"margin-left:40px\">
              <label for=\"input-transactiontype-credit\" style=\"font-size:15px\">Credit</label>
            
              <input type=\"radio\" id=\"input-transactiontype-debit\" name=\"input-transactiontype\" value=\"DEBIT\" style=\"margin-left:10px\">
              <label for=\"input-transactiontype-debit\" style=\"font-size:15px\">Debit</label>
              
              <br>
              <div class=\"row mb-3\">
                <label for=\"input-amount\" class=\"col-sm-2 col-form-label\">";
        // line 372
        yield ($context["entry_amount"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"amount\" value=\"\" placeholder=\"";
        // line 374
        yield ($context["entry_amount"] ?? null);
        yield "\" id=\"input-amount\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-transaction\" class=\"col-sm-2 col-form-label\">";
        // line 378
        yield ($context["entry_description"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
        // line 380
        yield ($context["entry_description"] ?? null);
        yield "\" id=\"input-transaction\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-transaction\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 384
        yield ($context["button_transaction_add"] ?? null);
        yield "</button>
              </div>
            </fieldset>
          </div>
          <div id=\"tab-reward\" class=\"tab-pane\">
            <fieldset>
              <legend>";
        // line 390
        yield ($context["text_reward"] ?? null);
        yield "</legend>
              <div id=\"reward\">";
        // line 391
        yield ($context["reward"] ?? null);
        yield "</div>
            </fieldset>
            <fieldset>
              <legend>";
        // line 394
        yield ($context["text_reward_add"] ?? null);
        yield "</legend>
              <div class=\"row mb-3\">
                <label for=\"input-reward\" class=\"col-sm-2 col-form-label\">";
        // line 396
        yield ($context["entry_description"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
        // line 398
        yield ($context["entry_description"] ?? null);
        yield "\" id=\"input-reward\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-points\" class=\"col-sm-2 col-form-label\">";
        // line 402
        yield ($context["entry_points"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"points\" value=\"\" placeholder=\"";
        // line 404
        yield ($context["entry_points"] ?? null);
        yield "\" id=\"input-points\" class=\"form-control\"/>
                  <div class=\"form-text\">";
        // line 405
        yield ($context["help_points"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-reward\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 409
        yield ($context["button_reward_add"] ?? null);
        yield "</button>
              </div>
            </fieldset>
          </div>
          <div id=\"tab-ip\" class=\"tab-pane\">
            <fieldset>
              <legend>";
        // line 415
        yield ($context["text_ip"] ?? null);
        yield "</legend>
              <div id=\"ip\">";
        // line 416
        yield ($context["ip"] ?? null);
        yield "</div>
            </fieldset>
          </div>
          <div id=\"tab-authorize\" class=\"tab-pane\">
            <fieldset>
              <legend>";
        // line 421
        yield ($context["text_authorize"] ?? null);
        yield "</legend>
              <div id=\"authorize\">";
        // line 422
        yield ($context["authorize"] ?? null);
        yield "</div>
            </fieldset>
          </div>
          <div id=\"tab-kyc\" class=\"tab-pane\">
              <fieldset>
                <div id=\"kyc\">";
        // line 427
        yield ($context["tab_kyc"] ?? null);
        yield "</div>
                <div class=\"row mb-20\" style=\"display:flex; gap:60px;margin-left:100px\">
                <div class=\"col-sm-2 required\">
                  <label for=\"input-image\" class=\"col-form-label\">PAN</label>
                  
                  <input type=\"text\" name=\"kycpanidno\" value=\"";
        // line 432
        yield ($context["pan"] ?? null);
        yield "\" placeholder=\"Enter PAN Number\" id=\"input-pan\" class=\"form-control\" oninput=\"this.value = this.value.toUpperCase().replace(/[^A-Z0-9]/g, '');\" style=\"width:200px\"/><br><br>
                 <div class=\"col-sm-10\">
                    <div class=\"border rounded p-2 mx-auto\" style=\"max-width: 400px;\">
                      <img src=\"";
        // line 435
        yield ($context["panimage"] ?? null);
        yield "\" alt=\"\" title=\"\" id=\"thumb-pan\" data-oc-placeholder=\"";
        yield ($context["panplaceholder"] ?? null);
        yield "\" class=\"img-fluid\" style=\"display: block;\"/>
                      <input type=\"hidden\" name=\"kycpanimage\" value=\"";
        // line 436
        yield ($context["panimageinput"] ?? null);
        yield "\" id=\"input-pan-image\"/>
                      <div class=\"d-grid gap-2 mt-2\">
                        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-pan-image\" data-oc-thumb=\"#thumb-pan\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 438
        yield ($context["button_edit"] ?? null);
        yield "</button>
                        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-pan-image\" data-oc-thumb=\"#thumb-pan\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 439
        yield ($context["button_clear"] ?? null);
        yield "</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"col-sm-2 required\">
                  <label for=\"input-image\" class=\"col-form-label\">AADHAR</label>
                  
                  <input type=\"number\" name=\"kycaadharidno\" value=\"";
        // line 447
        yield ($context["aadhar"] ?? null);
        yield "\" placeholder=\"Enter Aadhar number\" id=\"input-aadhar\" class=\"form-control\" style=\"width:200px\"/><br><br>
                  <div class=\"col-sm-10\">
                    <div class=\"border rounded p-2 mx-auto\" style=\"max-width: 400px;\">
                      <img src=\"";
        // line 450
        yield ($context["aadharimage"] ?? null);
        yield "\" alt=\"\" title=\"\" id=\"thumb-aadhar\" data-oc-placeholder=\"";
        yield ($context["aadharplaceholder"] ?? null);
        yield "\" class=\"img-fluid\" style=\"display: block;\"/>
                      <input type=\"hidden\" name=\"kycaadharimage\" value=\"";
        // line 451
        yield ($context["aadharimageinput"] ?? null);
        yield "\" id=\"input-aadhar-image\"/>
                      <div class=\"d-grid gap-2 mt-2\">
                        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-aadhar-image\" data-oc-thumb=\"#thumb-aadhar\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 453
        yield ($context["button_edit"] ?? null);
        yield "</button>
                        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-aadhar-image\" data-oc-thumb=\"#thumb-aadhar\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 454
        yield ($context["button_clear"] ?? null);
        yield "</button>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class=\"col-sm-2 required\">
                  <label for=\"input-image\" class=\"col-form-label\">PROFILE</label>
                  
                  <input type=\"text\" name=\"kycprofileidno\" value=\"";
        // line 463
        yield ($context["profile"] ?? null);
        yield "\" placeholder=\"Enter Profile Number\" id=\"input-profile\" class=\"form-control\" oninput=\"this.value = this.value.toUpperCase().replace(/[^A-Z0-9]/g, '');\" style=\"width:200px\"/><br><br>
                 <div class=\"col-sm-10\">
                    <div class=\"border rounded p-2 mx-auto\" style=\"max-width: 400px;\">
                      <img src=\"";
        // line 466
        yield ($context["profileimage"] ?? null);
        yield "\" alt=\"\" title=\"\" id=\"thumb-profile\" data-oc-placeholder=\"";
        yield ($context["profileplaceholder"] ?? null);
        yield "\" class=\"img-fluid\" style=\"display: block;\"/>
                      <input type=\"hidden\" name=\"kycprofileimage\" value=\"";
        // line 467
        yield ($context["profileimageinput"] ?? null);
        yield "\" id=\"input-profile-image\"/>
                      <div class=\"d-grid gap-2 mt-2\">
                        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-profile-image\" data-oc-thumb=\"#thumb-profile\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 469
        yield ($context["button_edit"] ?? null);
        yield "</button>
                        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-profile-image\" data-oc-thumb=\"#thumb-profile\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 470
        yield ($context["button_clear"] ?? null);
        yield "</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"col-sm-2 required\">
                  <label for=\"input-image\" class=\"col-form-label\">SHOP</label>
                  
                  <input type=\"text\" name=\"kycshopidno\" value=\"";
        // line 478
        yield ($context["shop"] ?? null);
        yield "\" placeholder=\"Enter Shop number\" id=\"input-shop\" class=\"form-control\" style=\"width:200px\" /><br><br>
                  <div class=\"col-sm-10\">
                    <div class=\"border rounded p-2 mx-auto\" style=\"max-width: 400px;\">
                      <img src=\"";
        // line 481
        yield ($context["shopimage"] ?? null);
        yield "\" alt=\"\" title=\"\" id=\"thumb-shop\" data-oc-placeholder=\"";
        yield ($context["shopplaceholder"] ?? null);
        yield "\" class=\"img-fluid\" style=\"display: block;\"/>
                      <input type=\"hidden\" name=\"kycshopimage\" value=\"";
        // line 482
        yield ($context["shopimageinput"] ?? null);
        yield "\" id=\"input-shop-image\"/>
                      <div class=\"d-grid gap-2 mt-2\">
                        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-shop-image\" data-oc-thumb=\"#thumb-shop\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 484
        yield ($context["button_edit"] ?? null);
        yield "</button>
                        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-shop-image\" data-oc-thumb=\"#thumb-shop\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 485
        yield ($context["button_clear"] ?? null);
        yield "</button>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-localbank\" class=\"tab-pane\">
            <fieldset>
              <legend>Local Bank Details</legend>
              <div class=\"row mb-12\" style=\"row-gap: 20px;margin-left:100px\">
              <div class=\"col-sm-4 required\">
                  <label for=\"input-date_of_birth\" class=\" col-form-label\">";
        // line 498
        yield ($context["entry_date_of_birth"] ?? null);
        yield "</label>
                  
                    <input type=\"date\" name=\"date_of_birth\" value=\"";
        // line 500
        yield ($context["date_of_birth"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_of_birth"] ?? null);
        yield "\" id=\"input-date_of_birth\" class=\"form-control\"/>
                    <div id=\"error-date_of_birth\" class=\"invalid-feedback\"></div>
                  </div>
                
                <div class=\"col-sm-4 required\">
                  <label for=\"input-gender\" class=\"col-form-label\">";
        // line 505
        yield ($context["entry_gender"] ?? null);
        yield "</label>
                  <select name=\"customer_gender\" id=\"input-gender\" class=\"form-select\" style=\"width:100%\">
                    <option value=\"Male\" ";
        // line 507
        if ((($context["customer_gender"] ?? null) == "Male")) {
            yield "selected=\"selected\"";
        }
        yield ">";
        yield ($context["text_male"] ?? null);
        yield "</option>
                    <option value=\"Female\" ";
        // line 508
        if ((($context["customer_gender"] ?? null) == "Female")) {
            yield "selected=\"selected\"";
        }
        yield ">";
        yield ($context["text_female"] ?? null);
        yield "</option>
                  </select>
                </div>

                <div class=\"col-sm-4 required\">
                  <label for=\"input-fathername\" class=\"col-form-label\">";
        // line 513
        yield ($context["entry_fathername"] ?? null);
        yield "</label>
                 
                    <input type=\"text\" name=\"fathername\" value=\"";
        // line 515
        yield ($context["fathername"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_fathername"] ?? null);
        yield "\" id=\"input-fathername\" class=\"form-control\"/>
                    <div id=\"error-fathername\" class=\"invalid-feedback\"></div>
                  </div>
                <div class=\"col-sm-4 required\">
                  <label for=\"input-company_name\" class=\" col-form-label\">";
        // line 519
        yield ($context["entry_company"] ?? null);
        yield "</label>
                 
                    <input type=\"text\" name=\"company_name\" value=\"";
        // line 521
        yield ($context["company_name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_company"] ?? null);
        yield "\" id=\"input-company_name\" class=\"form-control\"/>
                    <div id=\"error-company_name\" class=\"invalid-feedback\"></div>
                  </div>
                    <div class=\"col-sm-4 required\">
                      <label for=\"input-cif\" class=\"col-form-label\">";
        // line 525
        yield ($context["entry_cif"] ?? null);
        yield "</label>
                     
                        <input type=\"text\" name=\"cif\" value=\"";
        // line 527
        yield ($context["cif"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_cif"] ?? null);
        yield "\" id=\"input-cif\" class=\"form-control\"/>
                        <div id=\"error-cif\" class=\"invalid-feedback\"></div>
                      </div>
                      
                 <div class=\"col-sm-4 required\">
                  <label for=\"input-userid\" class=\" col-form-label\">";
        // line 532
        yield ($context["entry_userid"] ?? null);
        yield "</label>
                 
                    <input type=\"number\" name=\"userid\" value=\"";
        // line 534
        yield ($context["userid"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_userid"] ?? null);
        yield "\" id=\"input-userid\" class=\"form-control\"/>
                    <div id=\"error-userid\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-sm-4 required\">
                  <label for=\"input-accountno\" class=\" col-form-label\">";
        // line 538
        yield ($context["entry_accountno"] ?? null);
        yield "</label>
                 
                    <input type=\"number\" name=\"accountno\" value=\"";
        // line 540
        yield ($context["accountno"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_accountno"] ?? null);
        yield "\" id=\"input-accountno\" class=\"form-control\"/>
                    <div id=\"error-accountno\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-sm-4 required\">
                  <label for=\"input-actype\" class=\" col-form-label\">";
        // line 544
        yield ($context["entry_actype"] ?? null);
        yield "</label>
                 
                    <input type=\"text\" name=\"actype\" value=\"";
        // line 546
        yield ($context["actype"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_actype"] ?? null);
        yield "\" id=\"input-actype\" class=\"form-control\"/>
                    <div id=\"error-actype\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-sm-4 required\">
                  <label for=\"input-branch\" class=\" col-form-label\">";
        // line 550
        yield ($context["entry_branch"] ?? null);
        yield "</label>
                 
                    <input type=\"text\" name=\"branch\" value=\"";
        // line 552
        yield ($context["branch"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_branch"] ?? null);
        yield "\" id=\"input-branch\" class=\"form-control\"/>
                    <div id=\"error-branch\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-sm-4 required\">
                  <label for=\"input-Pennydropamount\" class=\" col-form-label\">PennyDrop Amount</label>
                 
                    <input type=\"number\" name=\"Pennydropamount\" value=\"";
        // line 558
        yield ($context["Pennydropamount"] ?? null);
        yield "\" placeholder=\"PennyDrop Amount\" id=\"input-PennyDropamount\" class=\"form-control\"/>
                    <div id=\"error-Pennydropamount\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-sm-4 required\">
                  <label for=\"input-Pennydroptax\" class=\" col-form-label\">PennyDrop Tax</label>
                 
                    <input type=\"number\" name=\"Pennydroptax\" value=\"";
        // line 564
        yield ($context["Pennydroptax"] ?? null);
        yield "\" placeholder=\"PennyDrop Tax\" id=\"input-Pennydroptax\" class=\"form-control\"/>
                    <div id=\"error-Pennydroptax\" class=\"invalid-feedback\"></div>
                  </div>
                 
                  </div>
                  </fieldset>
                </div>
                <div id=\"tab-nationalbank\" class=\"tab-pane\">
                <fieldset>
                 <legend>National Bank Details</legend>
                 <div class=\"row mb-12\" style=\"row-gap: 20px;margin-left:100px\">
                  <div class=\"col-sm-4 required\">
                  <label for=\"input-ifsc\" class=\" col-form-label\">";
        // line 576
        yield ($context["entry_ifsc"] ?? null);
        yield "</label>
                 
                    <input type=\"text\" name=\"ifsc\" value=\"";
        // line 578
        yield ($context["ifsc"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_ifsc"] ?? null);
        yield "\" id=\"input-ifsc\" class=\"form-control\"/>
                    <div id=\"error-ifsc\" class=\"invalid-feedback\"></div>
                  </div>
                <div class=\"col-sm-4 required\">
                  <label for=\"input-acno\" class=\" col-form-label\">";
        // line 582
        yield ($context["entry_acno"] ?? null);
        yield "</label>
                 
                    <input type=\"number\" name=\"acno\" value=\"";
        // line 584
        yield ($context["acno"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_acno"] ?? null);
        yield "\" id=\"input-acno\" class=\"form-control\"/>
                    <div id=\"error-acno\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-sm-4 required\">
                  <label for=\"input-bankname\" class=\" col-form-label\">";
        // line 588
        yield ($context["entry_bank"] ?? null);
        yield "</label>
                 
                    <input type=\"text\" name=\"bankname\" value=\"";
        // line 590
        yield ($context["bankname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_bank"] ?? null);
        yield "\" id=\"input-bankname\" class=\"form-control\"/>
                    <div id=\"error-bankname\" class=\"invalid-feedback\"></div>
                  </div>
                 
                  <div class=\"col-sm-4 required\">
                    <label for=\"input-acname\" class=\" col-form-label\">";
        // line 595
        yield ($context["entry_acname"] ?? null);
        yield "</label>
                 
                    <input type=\"text\" name=\"acname\" value=\"";
        // line 597
        yield ($context["acname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_acname"] ?? null);
        yield "\" id=\"input-acname\" class=\"form-control\"/>
                    <div id=\"error-acname\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-sm-4 required\">
                    <label for=\"input-acctype\" class=\" col-form-label\">";
        // line 601
        yield ($context["entry_actype"] ?? null);
        yield "</label>
                 
                    <input type=\"text\" name=\"acctype\" value=\"";
        // line 603
        yield ($context["acctype"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_actype"] ?? null);
        yield "\" id=\"input-acctype\" class=\"form-control\"/>
                    <div id=\"error-acctype\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-sm-4 required\">
                  <label for=\"input-branchname\" class=\" col-form-label\">";
        // line 607
        yield ($context["entry_branch"] ?? null);
        yield "</label>
                 
                    <input type=\"text\" name=\"branchname\" value=\"";
        // line 609
        yield ($context["branchname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_branch"] ?? null);
        yield "\" id=\"input-branchname\" class=\"form-control\"/>
                    <div id=\"error-branchname\" class=\"invalid-feedback\"></div>
                  </div>
              </div>
            </fieldset>
          </div>
          <div id=\"tab-subsciption\" class=\"tab-pane\">
            <fieldset>  
                <div class=\"row mb-12\" style=\"row-gap: 20px;margin-left:100px\">
                    <div class=\"col-sm-5\">
                    <label for=\"input-package\" class=\"col-form-label\" style=\"color:white\">Package Name</label>
                    <select name=\"packagename\" id=\"input-package\" class=\"form-select\">
                    <option value=\"\">Select Package</option>
                    ";
        // line 622
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["packages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["package"]) {
            // line 623
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["package"], "packageid", [], "any", false, false, false, 623);
            yield "\"
                            ";
            // line 624
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["package"], "packageid", [], "any", false, false, false, 624) == ($context["selected_package"] ?? null))) {
                yield " selected";
            }
            yield ">
                            ";
            // line 625
            yield CoreExtension::getAttribute($this->env, $this->source, $context["package"], "packagename", [], "any", false, false, false, 625);
            yield "
                        </option>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['package'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 629
        yield "                </select>

                    ";
        // line 631
        if (($context["error_packagename"] ?? null)) {
            // line 632
            yield "                        <div class=\"text-danger\">";
            yield ($context["error_packagename"] ?? null);
            yield "</div>
                    ";
        }
        // line 634
        yield "                </div>
 
                </div>
            </fieldset>
          </div>    
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#form-customer').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('action'),
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-save').button('loading');
        },
        complete: function() {
            \$('#button-save').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$(element).find('.is-invalid').removeClass('is-invalid');
            \$(element).find('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (json['customer_id']) {
                    \$('#input-customer-id').val(json['customer_id']);

                    \$('#address').load('index.php?route=customer/address&user_token=";
        // line 687
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + json['customer_id']);
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').on('change', function() {
    \$.ajax({
        url: 'index.php?route=customer/customer.customfield&user_token=";
        // line 699
        yield ($context["user_token"] ?? null);
        yield "&customer_group_id=' + this.value,
        dataType: 'json',
        success: function(json) {
            \$('.custom-field').hide();
            \$('.custom-field').removeClass('required');

            for (i = 0; i < json.length; i++) {
                custom_field = json[i];

                \$('.custom-field-' + custom_field['custom_field_id']).show();

                if (custom_field['required']) {
                    \$('.custom-field-' + custom_field['custom_field_id']).addClass('required');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').trigger('change');

\$('#address').on('click', '.btn-primary', function(e) {
    e.preventDefault();

    var element = this;

    \$('#modal-address').remove();

    \$.ajax({
        url: \$(element).val(),
        dataType: 'html',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(html) {
            \$('body').append(html);

            var modal = new bootstrap.Modal(document.querySelector('#modal-address'));

            modal.show();
        }
    });
});

\$('#payment-method').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#payment-method').load(this.href);
});

\$('#payment-method').on('click', 'button', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#payment-method').load('index.php?route=customer/customer.getPayment&user_token=";
        // line 782
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val());
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#payment-method').on('change', 'input[name=\\'status\\']', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=customer/customer.disablePayment&user_token=";
        // line 797
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#payment-method').load('index.php?route=customer/customer.getPayment&user_token=";
        // line 818
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val());
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#history').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
});

\$('#button-history').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=customer/customer.addHistory&user_token=";
        // line 837
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val(),
        type: 'post',
        data: 'comment=' + encodeURIComponent(\$('#input-history').val()),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-history').button('loading');
        },
        complete: function() {
            \$('#button-history').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#history').load('index.php?route=customer/customer.history&user_token=";
        // line 860
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val());

                \$('#input-history').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#transaction').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#transaction').load(this.href);
});

\$('#button-transaction').on('click', function(e) {
    e.preventDefault();
    
   description= encodeURIComponent(\$('#input-transaction').val())
   let amount = \$.trim(\$('#input-amount').val());
   
    let transactionType = null;
    const typeRadios = document.getElementsByName(\"input-transactiontype\");
    for (const radio of typeRadios) {
        if (radio.checked) {
            transactionType = radio.value;
            break;
        }
    }
    let transactionSubtype = null;
    const subtypeRadios = document.getElementsByName(\"input-transactionsubtype\");
    for (const radio of subtypeRadios) {
        if (radio.checked) {
            transactionSubtype = radio.value;
            break;
        }
    }
    if (transactionType !== null && transactionSubtype !== null) 
    {
        if (\$.trim(\$('#input-transaction').val()) !== '')
        {
            if (amount !== '' && !isNaN(amount) && parseFloat(amount) > 0)
            {
                    \$.ajax({
                        url: 'index.php?route=customer/customer.addTransaction&user_token=";
        // line 906
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val(),
                        type: 'post',
                        data: 'description=' + encodeURIComponent(\$('#input-transaction').val()) + '&amount=' + \$('#input-amount').val() + '&transactiontype=' + transactionType + '&transactionsubtype=' + transactionSubtype,
                        dataType: 'json',
                        contentType: 'application/x-www-form-urlencoded',
                        beforeSend: function() {
                            \$('#button-transaction').button('loading');
                        },
                        complete: function() {
                            \$('#button-transaction').button('reset');
                        },
                        success: function(json) {
                            console.log(json);
                
                            \$('.alert-dismissible').remove();
                
                            if (json['error']) {
                                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                            }
                
                            if (json['success']) {
                                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                
                                \$('#transaction').load('index.php?route=customer/customer.transaction&user_token=";
        // line 929
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val());
                
                                \$('#input-transaction').val('');
                                \$('#input-amount').val('');
                                \$(\"input[name='input-transactiontype']\").prop(\"checked\", false);
                                \$(\"input[name='input-transactionsubtype']\").prop(\"checked\", false);
                            }
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);

                        }
                    });
                }else
                {
                   \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> Please enter valid Amount <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>'); 
                }
                
        }else
        {
            \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> Please enter the Description <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
        }
    }
    else
    {
        \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> Transactions must be selected <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
    }
    
});

\$('#reward').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#reward').load(this.href);
});

\$('#button-reward').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=customer/customer.addReward&user_token=";
        // line 969
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val(),
        type: 'post',
        data: 'description=' + encodeURIComponent(\$('#input-reward').val()) + '&points=' + \$('#input-points').val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-reward').button('loading');
        },
        complete: function() {
            \$('#button-reward').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#reward').load('index.php?route=customer/customer.reward&user_token=";
        // line 992
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val());

                \$('#input-reward').val('');
                \$('#input-points').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#ip').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#ip').load(this.href);
});

\$('#authorize').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#authorize').load(this.href);
});

\$('#authorize').on('click', 'a', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#authorize').load('index.php?route=customer/customer.authorize&user_token=";
        // line 1046
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val());
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 1055
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/customer/customer_form.twig";
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
        return array (  1928 => 1055,  1916 => 1046,  1859 => 992,  1833 => 969,  1790 => 929,  1764 => 906,  1715 => 860,  1689 => 837,  1667 => 818,  1643 => 797,  1625 => 782,  1539 => 699,  1524 => 687,  1469 => 634,  1463 => 632,  1461 => 631,  1457 => 629,  1447 => 625,  1441 => 624,  1436 => 623,  1432 => 622,  1414 => 609,  1409 => 607,  1400 => 603,  1395 => 601,  1386 => 597,  1381 => 595,  1371 => 590,  1366 => 588,  1357 => 584,  1352 => 582,  1343 => 578,  1338 => 576,  1323 => 564,  1314 => 558,  1303 => 552,  1298 => 550,  1289 => 546,  1284 => 544,  1275 => 540,  1270 => 538,  1261 => 534,  1256 => 532,  1246 => 527,  1241 => 525,  1232 => 521,  1227 => 519,  1218 => 515,  1213 => 513,  1201 => 508,  1193 => 507,  1188 => 505,  1178 => 500,  1173 => 498,  1157 => 485,  1153 => 484,  1148 => 482,  1142 => 481,  1136 => 478,  1125 => 470,  1121 => 469,  1116 => 467,  1110 => 466,  1104 => 463,  1092 => 454,  1088 => 453,  1083 => 451,  1077 => 450,  1071 => 447,  1060 => 439,  1056 => 438,  1051 => 436,  1045 => 435,  1039 => 432,  1031 => 427,  1023 => 422,  1019 => 421,  1011 => 416,  1007 => 415,  998 => 409,  991 => 405,  987 => 404,  982 => 402,  975 => 398,  970 => 396,  965 => 394,  959 => 391,  955 => 390,  946 => 384,  939 => 380,  934 => 378,  927 => 374,  922 => 372,  895 => 348,  891 => 347,  887 => 346,  880 => 342,  876 => 341,  866 => 334,  859 => 330,  854 => 328,  849 => 326,  843 => 323,  839 => 322,  835 => 320,  829 => 311,  825 => 310,  817 => 305,  810 => 301,  803 => 299,  796 => 295,  789 => 291,  782 => 289,  776 => 286,  766 => 281,  760 => 278,  751 => 274,  745 => 271,  739 => 268,  729 => 261,  718 => 255,  713 => 253,  702 => 247,  697 => 245,  690 => 241,  684 => 237,  678 => 236,  672 => 233,  669 => 232,  663 => 229,  659 => 228,  655 => 227,  652 => 226,  649 => 225,  646 => 223,  640 => 220,  636 => 219,  632 => 218,  629 => 217,  626 => 216,  623 => 214,  617 => 211,  613 => 210,  609 => 209,  606 => 208,  603 => 207,  600 => 205,  589 => 199,  585 => 198,  581 => 197,  575 => 194,  568 => 192,  564 => 191,  555 => 189,  550 => 187,  540 => 186,  537 => 185,  534 => 184,  531 => 182,  526 => 180,  517 => 179,  514 => 178,  511 => 176,  499 => 174,  496 => 173,  493 => 171,  489 => 169,  479 => 165,  475 => 164,  469 => 163,  461 => 162,  458 => 161,  454 => 160,  451 => 159,  448 => 158,  445 => 156,  441 => 154,  431 => 150,  427 => 149,  421 => 148,  413 => 147,  410 => 146,  406 => 145,  403 => 144,  400 => 143,  397 => 141,  393 => 139,  384 => 136,  378 => 135,  373 => 134,  369 => 133,  365 => 132,  358 => 131,  355 => 130,  349 => 126,  345 => 125,  338 => 122,  335 => 121,  331 => 120,  322 => 114,  311 => 108,  306 => 106,  303 => 105,  299 => 104,  290 => 100,  285 => 98,  274 => 92,  269 => 90,  258 => 84,  253 => 82,  246 => 77,  231 => 75,  227 => 74,  221 => 71,  213 => 65,  198 => 63,  194 => 62,  188 => 59,  180 => 53,  165 => 51,  161 => 50,  155 => 47,  148 => 43,  135 => 33,  131 => 32,  127 => 31,  123 => 30,  118 => 29,  114 => 27,  110 => 26,  105 => 24,  100 => 22,  93 => 17,  82 => 15,  78 => 14,  73 => 12,  66 => 10,  61 => 9,  53 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        {% if orders %}
          <a href=\"{{ orders }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_order }}\" class=\"btn btn-warning\"><i class=\"fa-solid fa-receipt\"></i></a>
        {% endif %}
        <button type=\"submit\" id=\"button-save\" form=\"form-customer\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
        </div>
       <h1 style=\"color:white\">{{ heading_title }}</h1>
     <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_form }}</div>
      <div class=\"card-body\">
        <form id=\"form-customer\" action=\"{{ save }}\" method=\"post\">
        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">{{ tab_general }}</a></li>
          <li class=\"nav-item\"><a href=\"#tab-address\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_address }}</a></li>
          {#<li class=\"nav-item\"><a href=\"#tab-payment\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_payment_method }}</a></li>#}
          <li class=\"nav-item\"><a href=\"#tab-history\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_history }}</a></li>
          <li class=\"nav-item\"><a href=\"#tab-transaction\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_transaction }}</a></li>
          <li class=\"nav-item\"><a href=\"#tab-reward\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_reward }}</a></li>
          <li class=\"nav-item\"><a href=\"#tab-ip\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_ip }}</a></li>
          <li class=\"nav-item\"><a href=\"#tab-authorize\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_authorize }}</a></li>
          <li class=\"nav-item\"><a href=\"#tab-kyc\" data-bs-toggle=\"tab\" class=\"nav-link\">KYC Details</a></li>
          <li class=\"nav-item\"><a href=\"#tab-localbank\" data-bs-toggle=\"tab\" class=\"nav-link\">Local Bank Details</a></li>
          <li class=\"nav-item\"><a href=\"#tab-nationalbank\" data-bs-toggle=\"tab\" class=\"nav-link\">National Bank Details</a></li>
          <li class=\"nav-item\"><a href=\"#tab-subsciption\" data-bs-toggle=\"tab\" class=\"nav-link\">Subscripyion Details</a></li>
        </ul>
        <div class=\"tab-content\">
          <div id=\"tab-general\" class=\"tab-pane active\">
            
              <fieldset>
                <legend>{{ text_customer }}</legend>
                 <div class=\"row mb-12\" style=\"row-gap: 20px;margin-left:100px\">
                
                    <div class=\"col-sm-3\">
                  <label for=\"input-store\" class=\"col-form-label\">{{ entry_store }}</label>
                  
                    <select name=\"store_id\" id=\"input-store\" class=\"form-select\" style=\"width:100%\">
                      {% for store in stores %}
                        <option value=\"{{ store.store_id }}\"{% if store.store_id == store_id %} selected{% endif %}>{{ store.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                

                
                    <div class=\"col-sm-3\">
                  <label for=\"input-language\" class=\"col-form-label\">{{ entry_language }}</label>
                  
                    <select name=\"language_id\" id=\"input-language\" class=\"form-select\" style=\"width:100%\">
                      {% for language in languages %}
                        <option value=\"{{ language.language_id }}\"{% if language.language_id == language_id %} selected{% endif %}>{{ language.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                

                
                     <div class=\"col-sm-3\">
                  <label for=\"input-customer-group\" class=\"col-form-label\">{{ entry_customer_group }}</label>
                 
                    <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\" style=\"width:100%\">
                      {% for customer_group in customer_groups %}
                        <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == customer_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                
                
                    <div class=\"col-sm-3 required\">
                  <label for=\"input-firstname\" class=\"col-form-label\">{{ entry_firstname }}</label>
                  
                    <input type=\"text\" name=\"firstname\" value=\"{{ firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\" class=\"form-control\"/>
                    <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
                  </div>
                
                
                     <div class=\"col-sm-3 required\">
                  <label for=\"input-lastname\" class=\"col-form-label\">{{ entry_lastname }}</label>
                 
                    <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-lastname\" class=\"form-control\"/>
                    <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
                  </div>
                
                
                     <div class=\"col-sm-3 required\">
                  <label for=\"input-email\" class=\"col-form-label\">{{ entry_email }}</label>
                 
                    <input type=\"text\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\"/>
                    <div id=\"error-email\" class=\"invalid-feedback\"></div>
                  </div>
                
                 {% if config_telephone_required %} required{% endif %}
                     <div class=\"col-sm-3\">
                  <label for=\"input-telephone\" class=\"col-form-label\">{{ entry_telephone }}</label>
                 
                    <input type=\"text\" name=\"telephone\" value=\"{{ telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\"/>
                    <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-sm-3 required\">
                  <label for=\"input-gst\" class=\" col-form-label\">GSTIN</label>
                 
                    <input type=\"text\" name=\"gst\" value=\"{{ gst }}\" placeholder=\"GSTIN\" id=\"input-gst\" class=\"form-control\"/>
                    <div id=\"error-gst\" class=\"invalid-feedback\"></div>
                  </div>
                </div><br><br>
                
                <div class=\"row\"style=\"margin-left:100px\">
                  {% for custom_field in custom_fields %}
                    {% if custom_field.location == 'account' %}
                      <div class=\"col-sm-3 mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        
                        <!-- Label (always on top) -->
                        <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label fw-bold\">
                          {{ custom_field.name }}
                        </label>
                
                        {# Select #}
                        {% if custom_field.type == 'select' %}
                          <select name=\"custom_field[{{ custom_field.custom_field_id }}]\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\"  class=\"form-select\">
                            <option value=\"\">{{ text_select }}</option>
                            {% for custom_field_value in custom_field.custom_field_value %}
                              <option value=\"{{ custom_field_value.custom_field_value_id }}\"
                                {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %} selected{% endif %}>
                                {{ custom_field_value.name }}
                              </option>
                            {% endfor %}
                          </select>
                        {% endif %}
                
                        {# Radio #}
                        {% if custom_field.type == 'radio' %}
                          <div class=\"border rounded p-2\" style=\"height: 150px; overflow: auto;\">
                            {% for custom_field_value in custom_field.custom_field_value %}
                              <div class=\"form-check\">
                                <input type=\"radio\" name=\"custom_field[{{ custom_field.custom_field_id }}]\"  value=\"{{ custom_field_value.custom_field_value_id }}\"  id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\"  class=\"form-check-input\"
                                       {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> 
                                <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">
                                  {{ custom_field_value.name }}
                                </label>
                              </div>
                            {% endfor %}
                          </div>
                        {% endif %}
                
                        {# Checkbox #}
                        {% if custom_field.type == 'checkbox' %}
                          <div class=\"border rounded p-2\" style=\"height: 150px; overflow: auto;\">
                            {% for custom_field_value in custom_field.custom_field_value %}
                              <div class=\"form-check\">
                                <input type=\"checkbox\"  name=\"custom_field[{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\"  class=\"form-check-input\"
                                       {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in account_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> 
                                <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">
                                  {{ custom_field_value.name }}
                                </label>
                              </div>
                            {% endfor %}
                          </div>
                        {% endif %}
                
                        {# Text #}
                        {% if custom_field.type == 'text' %}
                          <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\"  placeholder=\"{{ custom_field.name }}\"  id=\"input-custom-field-{{ custom_field.custom_field_id }}\"  class=\"form-control\"/>
                        {% endif %}
                
                        {# Textarea #}
                        {% if custom_field.type == 'textarea' %}
                          <textarea name=\"custom_field[{{ custom_field.custom_field_id }}]\" rows=\"3\"  placeholder=\"{{ custom_field.name }}\"  id=\"input-custom-field-{{ custom_field.custom_field_id }}\"  class=\"form-control\">
                              {{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>
                        {% endif %}
                
                        {# File #}
                        {% if custom_field.type == 'file' %}
                          <div class=\"input-group\">
                            <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\" data-oc-size-max=\"{{ config_file_max_size }}\"  data-oc-size-error=\"{{ error_upload_size }}\" class=\"btn btn-primary\">
                              <i class=\"fa-solid fa-upload\"></i> {{ button_upload }}
                            </button>
                            <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" readonly/>
                            <button type=\"button\" data-oc-toggle=\"download\" 
                                    data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\" 
                                    {% if not account_custom_field[custom_field.custom_field_id] %} disabled{% endif %} 
                                    class=\"btn btn-outline-secondary\">
                              <i class=\"fa-solid fa-download\"></i> {{ button_download }}
                            </button>
                            <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" 
                                    title=\"{{ button_clear }}\" 
                                    data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\" 
                                    {% if not account_custom_field[custom_field.custom_field_id] %} disabled{% endif %} 
                                    class=\"btn btn-outline-danger\">
                              <i class=\"fa-solid fa-eraser\"></i>
                            </button>
                          </div>
                        {% endif %}
                
                        {# Date #}
                        {% if custom_field.type == 'date' %}
                          <input type=\"date\" 
                                 name=\"custom_field[{{ custom_field.custom_field_id }}]\" 
                                 value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" 
                                 id=\"input-custom-field-{{ custom_field.custom_field_id }}\" 
                                 class=\"form-control\"/>
                        {% endif %}
                
                        {# Time #}
                        {% if custom_field.type == 'time' %}
                          <input type=\"time\" 
                                 name=\"custom_field[{{ custom_field.custom_field_id }}]\" 
                                 value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" 
                                 id=\"input-custom-field-{{ custom_field.custom_field_id }}\" 
                                 class=\"form-control\"/>
                        {% endif %}
                
                        {# DateTime #}
                        {% if custom_field.type == 'datetime' %}
                          <input type=\"datetime-local\" 
                                 name=\"custom_field[{{ custom_field.custom_field_id }}]\" 
                                 value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" 
                                 id=\"input-custom-field-{{ custom_field.custom_field_id }}\" 
                                 class=\"form-control\"/>
                        {% endif %}
                
                        <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    {% endif %}
                  {% endfor %}
                </div>

              </fieldset>
              <fieldset>
                <legend>{{ text_password }}</legend>
                  <div class=\"row mb-3\" style=\"row-gap: 20px;margin-left:90px\">
                
                    <div class=\"col-sm-4 required\">
                  <label for=\"input-password\" class=\" col-form-label\">{{ entry_password }}</label>
                  
                    <input type=\"password\" name=\"password\" value=\"{{ password }}\" placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control\" autocomplete=\"new-password\"/>
                    <div id=\"error-password\" class=\"invalid-feedback\"></div>
                  </div>
                
               
                    <div class=\"col-sm-4 required\">
                  <label for=\"input-confirm\" class=\" col-form-label\">{{ entry_confirm }}</label>
                  
                    <input type=\"password\" name=\"confirm\" value=\"{{ confirm }}\" placeholder=\"{{ entry_confirm }}\" id=\"input-confirm\" class=\"form-control\"/>
                    <div id=\"error-confirm\" class=\"invalid-feedback\"></div>
                  </div>
                <div class=\"col-sm-4 required\">
                  <label for=\"input-authpin\" class=\" col-form-label\">Authpin</label>
                  
                    <input type=\"password\" name=\"authpin\" value=\"{{ authpin }}\" placeholder=\"Authpin\" id=\"input-authpin\" class=\"form-control\" autocomplete=\"new-authpin\"/>
                    <div id=\"error-authpin\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                
              </fieldset>
              <fieldset>
                <legend>{{ text_other }}</legend>
                <div class=\"row mb-12\">
                    <div class=\"col-sm-3\">
                  <label class=\" col-form-label\">{{ entry_newsletter }}</label>
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"newsletter\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"input-newsletter\" class=\"form-check-input\"{% if newsletter %} checked{% endif %}/>
                    </div>
                </div>
                <div class=\"col-sm-3\">
                  <label class=\" col-form-label\">{{ entry_status }}</label>
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"status\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"{% if status %} checked{% endif %}/>
                    </div>
                  </div>
                
                 <div class=\"col-sm-3\">
                  <label class=\" col-form-label\">{{ entry_safe }}</label>
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"safe\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"safe\" value=\"1\" id=\"input-safe\" class=\"form-check-input\"{% if safe %} checked{% endif %}/>
                    </div>
                    <div class=\"form-text\">{{ help_safe }}</div>
                  </div>
               
                    <div class=\"col-sm-3\">
                  <label class=\" col-form-label\">{{ entry_commenter }}</label>
                  
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"commenter\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"commenter\" value=\"1\" id=\"input-commenter\" class=\"form-check-input\"{% if commenter %} checked{% endif %}/>
                    </div>
                    <div class=\"form-text\">{{ help_commenter }}</div>
                  </div>
                </div>
              </fieldset>
              <input type=\"hidden\" name=\"customer_id\" value=\"{{ customer_id }}\" id=\"input-customer-id\"/>
            
          </div>
          <div id=\"tab-address\" class=\"tab-pane\">
            <fieldset>
              <legend>{{ text_address }}</legend>
              <div id=\"address\">{{ address }}</div>
            </fieldset>
          </div>
          {#<div id=\"tab-payment\" class=\"tab-pane\">
            <fieldset>
              <legend>{{ text_payment_method }}</legend>
              <div id=\"payment-method\">{{ payment_method }}</div>
            </fieldset>
          </div>#}
          <div id=\"tab-history\" class=\"tab-pane\">
            <fieldset>
              <legend>{{ text_history }}</legend>
              <div id=\"history\">{{ history }}</div>
            </fieldset>
            <fieldset>
              <legend>{{ text_history_add }}</legend>
              <div class=\"row mb-3\">
                <label for=\"input-history\" class=\"col-sm-2 col-form-label\">{{ entry_comment }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"comment\" rows=\"8\" placeholder=\"{{ entry_comment }}\" id=\"input-history\" class=\"form-control\"></textarea>
                </div>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-history\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> {{ button_history_add }}</button>
              </div>
            </fieldset>
          </div>
          <div id=\"tab-transaction\" class=\"tab-pane\">
              
            <fieldset>
              <legend>{{ text_transaction }}</legend>
              <div id=\"transaction\"style=\"width:85%;margin-left:105px\">{{ transaction }}</div>
            </fieldset>
            
            <fieldset>
              <legend>{{ text_transaction_add }}<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
              <td><b style=\"font-size: 18px;margin-left:400px\">Trade Balance : </b></td><td><b style=\"font-size: 16px\">{{ amount }}</b></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
              <td><b style=\"font-size: 18px\">AEPS Balance : </b></td><td><b style=\"font-size: 16px\">{{ aepsbalance }}</b></td>
        </legend>
              
            
              <label class=\"col-sm-2 col-form-label\" style=\"margin-left:100px;font-size:18px\">Transaction Type</label>
              
              <input type=\"radio\" id=\"input-transactionsubtype-trade\" name=\"input-transactionsubtype\" value=\"TRADE\" style=\"margin-left:40px\">
              <label for=\"input-transactionsubtype-trade\" style=\"font-size:15px\">TRADE</label>
            
              <input type=\"radio\" id=\"input-transactionsubtype-aeps\" name=\"input-transactionsubtype\" value=\"AEPS\" style=\"margin-left:10px\">
              <label for=\"input-transactionsubtype-aeps\" style=\"font-size:15px\">AEPS</label>
              
              <br>
            
              <label class=\"col-sm-2 col-form-label\" style=\"margin-left:100px;font-size:18px\">Transaction Subtype</label>
              
              <input type=\"radio\" id=\"input-transactiontype-credit\" name=\"input-transactiontype\" value=\"CREDIT\" style=\"margin-left:40px\">
              <label for=\"input-transactiontype-credit\" style=\"font-size:15px\">Credit</label>
            
              <input type=\"radio\" id=\"input-transactiontype-debit\" name=\"input-transactiontype\" value=\"DEBIT\" style=\"margin-left:10px\">
              <label for=\"input-transactiontype-debit\" style=\"font-size:15px\">Debit</label>
              
              <br>
              <div class=\"row mb-3\">
                <label for=\"input-amount\" class=\"col-sm-2 col-form-label\">{{ entry_amount }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"amount\" value=\"\" placeholder=\"{{ entry_amount }}\" id=\"input-amount\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-transaction\" class=\"col-sm-2 col-form-label\">{{ entry_description }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"description\" value=\"\" placeholder=\"{{ entry_description }}\" id=\"input-transaction\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-transaction\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> {{ button_transaction_add }}</button>
              </div>
            </fieldset>
          </div>
          <div id=\"tab-reward\" class=\"tab-pane\">
            <fieldset>
              <legend>{{ text_reward }}</legend>
              <div id=\"reward\">{{ reward }}</div>
            </fieldset>
            <fieldset>
              <legend>{{ text_reward_add }}</legend>
              <div class=\"row mb-3\">
                <label for=\"input-reward\" class=\"col-sm-2 col-form-label\">{{ entry_description }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"description\" value=\"\" placeholder=\"{{ entry_description }}\" id=\"input-reward\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-points\" class=\"col-sm-2 col-form-label\">{{ entry_points }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"points\" value=\"\" placeholder=\"{{ entry_points }}\" id=\"input-points\" class=\"form-control\"/>
                  <div class=\"form-text\">{{ help_points }}</div>
                </div>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-reward\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> {{ button_reward_add }}</button>
              </div>
            </fieldset>
          </div>
          <div id=\"tab-ip\" class=\"tab-pane\">
            <fieldset>
              <legend>{{ text_ip }}</legend>
              <div id=\"ip\">{{ ip }}</div>
            </fieldset>
          </div>
          <div id=\"tab-authorize\" class=\"tab-pane\">
            <fieldset>
              <legend>{{ text_authorize }}</legend>
              <div id=\"authorize\">{{ authorize }}</div>
            </fieldset>
          </div>
          <div id=\"tab-kyc\" class=\"tab-pane\">
              <fieldset>
                <div id=\"kyc\">{{ tab_kyc }}</div>
                <div class=\"row mb-20\" style=\"display:flex; gap:60px;margin-left:100px\">
                <div class=\"col-sm-2 required\">
                  <label for=\"input-image\" class=\"col-form-label\">PAN</label>
                  
                  <input type=\"text\" name=\"kycpanidno\" value=\"{{ pan }}\" placeholder=\"Enter PAN Number\" id=\"input-pan\" class=\"form-control\" oninput=\"this.value = this.value.toUpperCase().replace(/[^A-Z0-9]/g, '');\" style=\"width:200px\"/><br><br>
                 <div class=\"col-sm-10\">
                    <div class=\"border rounded p-2 mx-auto\" style=\"max-width: 400px;\">
                      <img src=\"{{ panimage }}\" alt=\"\" title=\"\" id=\"thumb-pan\" data-oc-placeholder=\"{{ panplaceholder }}\" class=\"img-fluid\" style=\"display: block;\"/>
                      <input type=\"hidden\" name=\"kycpanimage\" value=\"{{ panimageinput }}\" id=\"input-pan-image\"/>
                      <div class=\"d-grid gap-2 mt-2\">
                        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-pan-image\" data-oc-thumb=\"#thumb-pan\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-pan-image\" data-oc-thumb=\"#thumb-pan\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"col-sm-2 required\">
                  <label for=\"input-image\" class=\"col-form-label\">AADHAR</label>
                  
                  <input type=\"number\" name=\"kycaadharidno\" value=\"{{ aadhar }}\" placeholder=\"Enter Aadhar number\" id=\"input-aadhar\" class=\"form-control\" style=\"width:200px\"/><br><br>
                  <div class=\"col-sm-10\">
                    <div class=\"border rounded p-2 mx-auto\" style=\"max-width: 400px;\">
                      <img src=\"{{ aadharimage }}\" alt=\"\" title=\"\" id=\"thumb-aadhar\" data-oc-placeholder=\"{{ aadharplaceholder }}\" class=\"img-fluid\" style=\"display: block;\"/>
                      <input type=\"hidden\" name=\"kycaadharimage\" value=\"{{ aadharimageinput }}\" id=\"input-aadhar-image\"/>
                      <div class=\"d-grid gap-2 mt-2\">
                        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-aadhar-image\" data-oc-thumb=\"#thumb-aadhar\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-aadhar-image\" data-oc-thumb=\"#thumb-aadhar\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class=\"col-sm-2 required\">
                  <label for=\"input-image\" class=\"col-form-label\">PROFILE</label>
                  
                  <input type=\"text\" name=\"kycprofileidno\" value=\"{{ profile }}\" placeholder=\"Enter Profile Number\" id=\"input-profile\" class=\"form-control\" oninput=\"this.value = this.value.toUpperCase().replace(/[^A-Z0-9]/g, '');\" style=\"width:200px\"/><br><br>
                 <div class=\"col-sm-10\">
                    <div class=\"border rounded p-2 mx-auto\" style=\"max-width: 400px;\">
                      <img src=\"{{ profileimage }}\" alt=\"\" title=\"\" id=\"thumb-profile\" data-oc-placeholder=\"{{ profileplaceholder }}\" class=\"img-fluid\" style=\"display: block;\"/>
                      <input type=\"hidden\" name=\"kycprofileimage\" value=\"{{ profileimageinput }}\" id=\"input-profile-image\"/>
                      <div class=\"d-grid gap-2 mt-2\">
                        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-profile-image\" data-oc-thumb=\"#thumb-profile\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-profile-image\" data-oc-thumb=\"#thumb-profile\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"col-sm-2 required\">
                  <label for=\"input-image\" class=\"col-form-label\">SHOP</label>
                  
                  <input type=\"text\" name=\"kycshopidno\" value=\"{{ shop }}\" placeholder=\"Enter Shop number\" id=\"input-shop\" class=\"form-control\" style=\"width:200px\" /><br><br>
                  <div class=\"col-sm-10\">
                    <div class=\"border rounded p-2 mx-auto\" style=\"max-width: 400px;\">
                      <img src=\"{{ shopimage }}\" alt=\"\" title=\"\" id=\"thumb-shop\" data-oc-placeholder=\"{{ shopplaceholder }}\" class=\"img-fluid\" style=\"display: block;\"/>
                      <input type=\"hidden\" name=\"kycshopimage\" value=\"{{ shopimageinput }}\" id=\"input-shop-image\"/>
                      <div class=\"d-grid gap-2 mt-2\">
                        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-shop-image\" data-oc-thumb=\"#thumb-shop\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-shop-image\" data-oc-thumb=\"#thumb-shop\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-localbank\" class=\"tab-pane\">
            <fieldset>
              <legend>Local Bank Details</legend>
              <div class=\"row mb-12\" style=\"row-gap: 20px;margin-left:100px\">
              <div class=\"col-sm-4 required\">
                  <label for=\"input-date_of_birth\" class=\" col-form-label\">{{ entry_date_of_birth }}</label>
                  
                    <input type=\"date\" name=\"date_of_birth\" value=\"{{ date_of_birth }}\" placeholder=\"{{ entry_date_of_birth }}\" id=\"input-date_of_birth\" class=\"form-control\"/>
                    <div id=\"error-date_of_birth\" class=\"invalid-feedback\"></div>
                  </div>
                
                <div class=\"col-sm-4 required\">
                  <label for=\"input-gender\" class=\"col-form-label\">{{ entry_gender }}</label>
                  <select name=\"customer_gender\" id=\"input-gender\" class=\"form-select\" style=\"width:100%\">
                    <option value=\"Male\" {% if customer_gender == 'Male' %}selected=\"selected\"{% endif %}>{{ text_male }}</option>
                    <option value=\"Female\" {% if customer_gender == 'Female' %}selected=\"selected\"{% endif %}>{{ text_female }}</option>
                  </select>
                </div>

                <div class=\"col-sm-4 required\">
                  <label for=\"input-fathername\" class=\"col-form-label\">{{ entry_fathername }}</label>
                 
                    <input type=\"text\" name=\"fathername\" value=\"{{ fathername }}\" placeholder=\"{{ entry_fathername }}\" id=\"input-fathername\" class=\"form-control\"/>
                    <div id=\"error-fathername\" class=\"invalid-feedback\"></div>
                  </div>
                <div class=\"col-sm-4 required\">
                  <label for=\"input-company_name\" class=\" col-form-label\">{{ entry_company }}</label>
                 
                    <input type=\"text\" name=\"company_name\" value=\"{{ company_name }}\" placeholder=\"{{ entry_company }}\" id=\"input-company_name\" class=\"form-control\"/>
                    <div id=\"error-company_name\" class=\"invalid-feedback\"></div>
                  </div>
                    <div class=\"col-sm-4 required\">
                      <label for=\"input-cif\" class=\"col-form-label\">{{ entry_cif }}</label>
                     
                        <input type=\"text\" name=\"cif\" value=\"{{ cif }}\" placeholder=\"{{ entry_cif }}\" id=\"input-cif\" class=\"form-control\"/>
                        <div id=\"error-cif\" class=\"invalid-feedback\"></div>
                      </div>
                      
                 <div class=\"col-sm-4 required\">
                  <label for=\"input-userid\" class=\" col-form-label\">{{ entry_userid }}</label>
                 
                    <input type=\"number\" name=\"userid\" value=\"{{ userid }}\" placeholder=\"{{ entry_userid }}\" id=\"input-userid\" class=\"form-control\"/>
                    <div id=\"error-userid\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-sm-4 required\">
                  <label for=\"input-accountno\" class=\" col-form-label\">{{ entry_accountno  }}</label>
                 
                    <input type=\"number\" name=\"accountno\" value=\"{{ accountno  }}\" placeholder=\"{{ entry_accountno }}\" id=\"input-accountno\" class=\"form-control\"/>
                    <div id=\"error-accountno\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-sm-4 required\">
                  <label for=\"input-actype\" class=\" col-form-label\">{{ entry_actype }}</label>
                 
                    <input type=\"text\" name=\"actype\" value=\"{{ actype }}\" placeholder=\"{{ entry_actype }}\" id=\"input-actype\" class=\"form-control\"/>
                    <div id=\"error-actype\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-sm-4 required\">
                  <label for=\"input-branch\" class=\" col-form-label\">{{ entry_branch }}</label>
                 
                    <input type=\"text\" name=\"branch\" value=\"{{ branch }}\" placeholder=\"{{ entry_branch }}\" id=\"input-branch\" class=\"form-control\"/>
                    <div id=\"error-branch\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-sm-4 required\">
                  <label for=\"input-Pennydropamount\" class=\" col-form-label\">PennyDrop Amount</label>
                 
                    <input type=\"number\" name=\"Pennydropamount\" value=\"{{ Pennydropamount }}\" placeholder=\"PennyDrop Amount\" id=\"input-PennyDropamount\" class=\"form-control\"/>
                    <div id=\"error-Pennydropamount\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-sm-4 required\">
                  <label for=\"input-Pennydroptax\" class=\" col-form-label\">PennyDrop Tax</label>
                 
                    <input type=\"number\" name=\"Pennydroptax\" value=\"{{ Pennydroptax }}\" placeholder=\"PennyDrop Tax\" id=\"input-Pennydroptax\" class=\"form-control\"/>
                    <div id=\"error-Pennydroptax\" class=\"invalid-feedback\"></div>
                  </div>
                 
                  </div>
                  </fieldset>
                </div>
                <div id=\"tab-nationalbank\" class=\"tab-pane\">
                <fieldset>
                 <legend>National Bank Details</legend>
                 <div class=\"row mb-12\" style=\"row-gap: 20px;margin-left:100px\">
                  <div class=\"col-sm-4 required\">
                  <label for=\"input-ifsc\" class=\" col-form-label\">{{ entry_ifsc }}</label>
                 
                    <input type=\"text\" name=\"ifsc\" value=\"{{ ifsc }}\" placeholder=\"{{ entry_ifsc }}\" id=\"input-ifsc\" class=\"form-control\"/>
                    <div id=\"error-ifsc\" class=\"invalid-feedback\"></div>
                  </div>
                <div class=\"col-sm-4 required\">
                  <label for=\"input-acno\" class=\" col-form-label\">{{ entry_acno  }}</label>
                 
                    <input type=\"number\" name=\"acno\" value=\"{{ acno  }}\" placeholder=\"{{ entry_acno }}\" id=\"input-acno\" class=\"form-control\"/>
                    <div id=\"error-acno\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-sm-4 required\">
                  <label for=\"input-bankname\" class=\" col-form-label\">{{ entry_bank  }}</label>
                 
                    <input type=\"text\" name=\"bankname\" value=\"{{ bankname  }}\" placeholder=\"{{ entry_bank }}\" id=\"input-bankname\" class=\"form-control\"/>
                    <div id=\"error-bankname\" class=\"invalid-feedback\"></div>
                  </div>
                 
                  <div class=\"col-sm-4 required\">
                    <label for=\"input-acname\" class=\" col-form-label\">{{ entry_acname }}</label>
                 
                    <input type=\"text\" name=\"acname\" value=\"{{ acname }}\" placeholder=\"{{ entry_acname }}\" id=\"input-acname\" class=\"form-control\"/>
                    <div id=\"error-acname\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-sm-4 required\">
                    <label for=\"input-acctype\" class=\" col-form-label\">{{ entry_actype }}</label>
                 
                    <input type=\"text\" name=\"acctype\" value=\"{{ acctype }}\" placeholder=\"{{ entry_actype }}\" id=\"input-acctype\" class=\"form-control\"/>
                    <div id=\"error-acctype\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-sm-4 required\">
                  <label for=\"input-branchname\" class=\" col-form-label\">{{ entry_branch }}</label>
                 
                    <input type=\"text\" name=\"branchname\" value=\"{{ branchname }}\" placeholder=\"{{ entry_branch }}\" id=\"input-branchname\" class=\"form-control\"/>
                    <div id=\"error-branchname\" class=\"invalid-feedback\"></div>
                  </div>
              </div>
            </fieldset>
          </div>
          <div id=\"tab-subsciption\" class=\"tab-pane\">
            <fieldset>  
                <div class=\"row mb-12\" style=\"row-gap: 20px;margin-left:100px\">
                    <div class=\"col-sm-5\">
                    <label for=\"input-package\" class=\"col-form-label\" style=\"color:white\">Package Name</label>
                    <select name=\"packagename\" id=\"input-package\" class=\"form-select\">
                    <option value=\"\">Select Package</option>
                    {% for package in packages %}
                        <option value=\"{{ package.packageid }}\"
                            {% if package.packageid == selected_package %} selected{% endif %}>
                            {{ package.packagename }}
                        </option>

                    {% endfor %}
                </select>

                    {% if error_packagename %}
                        <div class=\"text-danger\">{{ error_packagename }}</div>
                    {% endif %}
                </div>
 
                </div>
            </fieldset>
          </div>    
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#form-customer').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('action'),
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-save').button('loading');
        },
        complete: function() {
            \$('#button-save').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$(element).find('.is-invalid').removeClass('is-invalid');
            \$(element).find('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (json['customer_id']) {
                    \$('#input-customer-id').val(json['customer_id']);

                    \$('#address').load('index.php?route=customer/address&user_token={{ user_token }}&customer_id=' + json['customer_id']);
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').on('change', function() {
    \$.ajax({
        url: 'index.php?route=customer/customer.customfield&user_token={{ user_token }}&customer_group_id=' + this.value,
        dataType: 'json',
        success: function(json) {
            \$('.custom-field').hide();
            \$('.custom-field').removeClass('required');

            for (i = 0; i < json.length; i++) {
                custom_field = json[i];

                \$('.custom-field-' + custom_field['custom_field_id']).show();

                if (custom_field['required']) {
                    \$('.custom-field-' + custom_field['custom_field_id']).addClass('required');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').trigger('change');

\$('#address').on('click', '.btn-primary', function(e) {
    e.preventDefault();

    var element = this;

    \$('#modal-address').remove();

    \$.ajax({
        url: \$(element).val(),
        dataType: 'html',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(html) {
            \$('body').append(html);

            var modal = new bootstrap.Modal(document.querySelector('#modal-address'));

            modal.show();
        }
    });
});

\$('#payment-method').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#payment-method').load(this.href);
});

\$('#payment-method').on('click', 'button', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#payment-method').load('index.php?route=customer/customer.getPayment&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val());
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#payment-method').on('change', 'input[name=\\'status\\']', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=customer/customer.disablePayment&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#payment-method').load('index.php?route=customer/customer.getPayment&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val());
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#history').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
});

\$('#button-history').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=customer/customer.addHistory&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val(),
        type: 'post',
        data: 'comment=' + encodeURIComponent(\$('#input-history').val()),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-history').button('loading');
        },
        complete: function() {
            \$('#button-history').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#history').load('index.php?route=customer/customer.history&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val());

                \$('#input-history').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#transaction').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#transaction').load(this.href);
});

\$('#button-transaction').on('click', function(e) {
    e.preventDefault();
    
   description= encodeURIComponent(\$('#input-transaction').val())
   let amount = \$.trim(\$('#input-amount').val());
   
    let transactionType = null;
    const typeRadios = document.getElementsByName(\"input-transactiontype\");
    for (const radio of typeRadios) {
        if (radio.checked) {
            transactionType = radio.value;
            break;
        }
    }
    let transactionSubtype = null;
    const subtypeRadios = document.getElementsByName(\"input-transactionsubtype\");
    for (const radio of subtypeRadios) {
        if (radio.checked) {
            transactionSubtype = radio.value;
            break;
        }
    }
    if (transactionType !== null && transactionSubtype !== null) 
    {
        if (\$.trim(\$('#input-transaction').val()) !== '')
        {
            if (amount !== '' && !isNaN(amount) && parseFloat(amount) > 0)
            {
                    \$.ajax({
                        url: 'index.php?route=customer/customer.addTransaction&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val(),
                        type: 'post',
                        data: 'description=' + encodeURIComponent(\$('#input-transaction').val()) + '&amount=' + \$('#input-amount').val() + '&transactiontype=' + transactionType + '&transactionsubtype=' + transactionSubtype,
                        dataType: 'json',
                        contentType: 'application/x-www-form-urlencoded',
                        beforeSend: function() {
                            \$('#button-transaction').button('loading');
                        },
                        complete: function() {
                            \$('#button-transaction').button('reset');
                        },
                        success: function(json) {
                            console.log(json);
                
                            \$('.alert-dismissible').remove();
                
                            if (json['error']) {
                                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                            }
                
                            if (json['success']) {
                                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                
                                \$('#transaction').load('index.php?route=customer/customer.transaction&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val());
                
                                \$('#input-transaction').val('');
                                \$('#input-amount').val('');
                                \$(\"input[name='input-transactiontype']\").prop(\"checked\", false);
                                \$(\"input[name='input-transactionsubtype']\").prop(\"checked\", false);
                            }
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);

                        }
                    });
                }else
                {
                   \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> Please enter valid Amount <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>'); 
                }
                
        }else
        {
            \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> Please enter the Description <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
        }
    }
    else
    {
        \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> Transactions must be selected <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
    }
    
});

\$('#reward').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#reward').load(this.href);
});

\$('#button-reward').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=customer/customer.addReward&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val(),
        type: 'post',
        data: 'description=' + encodeURIComponent(\$('#input-reward').val()) + '&points=' + \$('#input-points').val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-reward').button('loading');
        },
        complete: function() {
            \$('#button-reward').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#reward').load('index.php?route=customer/customer.reward&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val());

                \$('#input-reward').val('');
                \$('#input-points').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#ip').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#ip').load(this.href);
});

\$('#authorize').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#authorize').load(this.href);
});

\$('#authorize').on('click', 'a', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#authorize').load('index.php?route=customer/customer.authorize&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val());
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
{{ footer }}
", "admin/view/template/customer/customer_form.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/admin/view/template/customer/customer_form.twig");
    }
}
