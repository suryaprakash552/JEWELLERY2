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

/* admin/view/template/customer/address_form.twig */
class __TwigTemplate_95cacb97cba0c66f813acd59a4254603 extends Template
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
        yield "<div id=\"modal-address\" class=\"modal fade\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"><i class=\"fa-solid fa-cog\"></i> ";
        // line 5
        yield ($context["heading_title"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-address\" action=\"";
        // line 9
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#address\">
          ";
        // line 20
        yield "          <div class=\"mb-3\">
            <label for=\"input-address-company\" class=\"form-label\">";
        // line 21
        yield ($context["entry_company"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"company\" value=\"";
        // line 22
        yield ($context["company"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_company"] ?? null);
        yield "\" id=\"input-address-company\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-address-address-1\" class=\"form-label\">";
        // line 25
        yield ($context["entry_address_1"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"address_1\" value=\"";
        // line 26
        yield ($context["address_1"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_address_1"] ?? null);
        yield "\" id=\"input-address-address-1\" class=\"form-control\"/>
            <div id=\"error-address-address-1\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-address-address-2\" class=\"form-label\">";
        // line 30
        yield ($context["entry_address_2"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"address_2\" value=\"";
        // line 31
        yield ($context["address_2"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_address_2"] ?? null);
        yield "\" id=\"input-address-address-2\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-address-city\" class=\"form-label\">";
        // line 34
        yield ($context["entry_city"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"city\" value=\"";
        // line 35
        yield ($context["city"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_city"] ?? null);
        yield "\" id=\"input-address-city\" class=\"form-control\"/>
            <div id=\"error-address-city\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-address-postcode\" class=\"form-label\">";
        // line 39
        yield ($context["entry_postcode"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"postcode\" value=\"";
        // line 40
        yield ($context["postcode"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_postcode"] ?? null);
        yield "\" id=\"input-address-postcode\" class=\"form-control\"/>
            <div id=\"error-address-postcode\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-address-country\" class=\"form-label\">";
        // line 44
        yield ($context["entry_country"] ?? null);
        yield "</label>
            <select name=\"country_id\" id=\"input-address-country\" class=\"form-select\">
              <option value=\"\">";
        // line 46
        yield ($context["text_select"] ?? null);
        yield "</option>
              ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 48
            yield "                <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 48);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 48) == ($context["country_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 48);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['country'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "            </select>
            <div id=\"error-address-country\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"col-sm-4 required\">
                  <label for=\"input-address-zone\" class=\"form-label\">";
        // line 54
        yield ($context["entry_zone"] ?? null);
        yield "</label>
                    <select name=\"zone_id\" id=\"input-address-zone\" class=\"form-select\">
                        <option value=\"\"></option>
                      ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["zone"]) {
            // line 58
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "zone_id", [], "any", false, false, false, 58);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "zone_id", [], "any", false, false, false, 58) == ($context["zone_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "name", [], "any", false, false, false, 58);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['zone'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "                    </select>
                  </div>

          ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 64
            yield "
            ";
            // line 65
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 65) == "select")) {
                // line 66
                yield "              <div class=\"mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 66)) {
                    yield " required";
                }
                yield "\">
                <label for=\"input-address-custom-field-";
                // line 67
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 67);
                yield "\" class=\"form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 67);
                yield "</label>
                <select name=\"custom_field[";
                // line 68
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 68);
                yield "]\" id=\"input-address-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 68);
                yield "\" class=\"form-select\">
                  <option value=\"\">";
                // line 69
                yield ($context["text_select"] ?? null);
                yield "</option>
                  ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 70));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 71
                    yield "                    <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 71);
                    yield "\"";
                    if (((($_v0 = ($context["address_custom_field"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 71)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 71) == (($_v1 = ($context["address_custom_field"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 71)] ?? null) : null)))) {
                        yield " selected";
                    }
                    yield ">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 71);
                    yield "</option>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                yield "                </select>
                <div id=\"error-address-custom-field-";
                // line 74
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 74);
                yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
            }
            // line 77
            yield "
            ";
            // line 78
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 78) == "radio")) {
                // line 79
                yield "              <div class=\"mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 79)) {
                    yield " required";
                }
                yield "\">
                <label class=\"form-label\">";
                // line 80
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 80);
                yield "</label>
                <div id=\"input-address-custom-field-";
                // line 81
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 81);
                yield "\">
                  ";
                // line 82
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 82));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 83
                    yield "                    <div class=\"form-check\">
                      <input type=\"radio\" name=\"custom_field[";
                    // line 84
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 84);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 84);
                    yield "\" id=\"input-address-custom-value-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 84);
                    yield "\" class=\"form-check-input\"";
                    if (((($_v2 = ($context["address_custom_field"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 84)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 84) == (($_v3 = ($context["address_custom_field"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 84)] ?? null) : null)))) {
                        yield " checked";
                    }
                    yield "/>
                      <label for=\"input-address-custom-value-";
                    // line 85
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 85);
                    yield "\" class=\"form-check-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 85);
                    yield "</label>
                    </div>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                yield "                </div>
                <div id=\"error-custom-field-";
                // line 89
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 89);
                yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
            }
            // line 92
            yield "
            ";
            // line 93
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 93) == "checkbox")) {
                // line 94
                yield "              <div class=\"mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 94)) {
                    yield " required";
                }
                yield "\">
                <label class=\"form-label\">";
                // line 95
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 95);
                yield "</label>
                <div id=\"input-address-custom-field-";
                // line 96
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96);
                yield "\">
                  ";
                // line 97
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 97));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 98
                    yield "                    <div class=\"form-check\">
                      <input type=\"checkbox\" name=\"custom_field[";
                    // line 99
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 99);
                    yield "][]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 99);
                    yield "\" id=\"input-address-custom-value-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 99);
                    yield "\" class=\"form-check-input\"";
                    if (((($_v4 = ($context["address_custom_field"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 99)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 99), (($_v5 = ($context["address_custom_field"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 99)] ?? null) : null)))) {
                        yield " checked";
                    }
                    yield "/>
                      <label for=\"input-address-custom-value-";
                    // line 100
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 100);
                    yield "\" class=\"form-check-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 100);
                    yield "</label>
                    </div>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                yield "                </div>
                <div id=\"error-address-custom-field-";
                // line 104
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104);
                yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
            }
            // line 107
            yield "
            ";
            // line 108
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 108) == "text")) {
                // line 109
                yield "              <div class=\"mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 109)) {
                    yield " required";
                }
                yield "\">
                <label for=\"input-address-custom-field-";
                // line 110
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110);
                yield "\" class=\"form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 110);
                yield "</label>
                <input type=\"text\" name=\"custom_field[";
                // line 111
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111);
                yield "]\" value=\"";
                if ((($_v6 = ($context["address_custom_field"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111)] ?? null) : null)) {
                    yield (($_v7 = ($context["address_custom_field"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 111);
                }
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 111);
                yield "\" id=\"input-address-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111);
                yield "\" class=\"form-control\"/>
                <div id=\"error-address-custom-field-";
                // line 112
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 112);
                yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
            }
            // line 115
            yield "
            ";
            // line 116
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 116) == "textarea")) {
                // line 117
                yield "              <div class=\"mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 117)) {
                    yield " required";
                }
                yield "\">
                <label for=\"input-address-custom-field-";
                // line 118
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 118);
                yield "\" class=\"form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 118);
                yield "</label>
                <textarea name=\"custom_field[";
                // line 119
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119);
                yield "]\" rows=\"5\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 119);
                yield "\" id=\"input-address-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119);
                yield "\" class=\"form-control\">";
                if ((($_v8 = ($context["address_custom_field"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119)] ?? null) : null)) {
                    yield (($_v9 = ($context["address_custom_field"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 119);
                }
                yield "</textarea>
                <div id=\"error-address-custom-field-";
                // line 120
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 120);
                yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
            }
            // line 123
            yield "
            ";
            // line 124
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 124) == "file")) {
                // line 125
                yield "              <div class=\"mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 125)) {
                    yield " required";
                }
                yield "\">
                <label class=\"form-label\">";
                // line 126
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 126);
                yield "</label>
                <div class=\"input-group\">
                <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                // line 128
                yield ($context["upload"] ?? null);
                yield "\" data-oc-size-max=\"";
                yield ($context["config_file_max_size"] ?? null);
                yield "\" data-oc-size-error=\"";
                yield ($context["error_upload_size"] ?? null);
                yield "\" data-oc-target=\"#input-address-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128);
                yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                yield ($context["button_upload"] ?? null);
                yield "</button>
                <input type=\"hidden\" name=\"custom_field[";
                // line 129
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129);
                yield "]\" value=\"";
                if ((($_v10 = ($context["address_custom_field"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129)] ?? null) : null)) {
                    yield (($_v11 = ($context["address_custom_field"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129)] ?? null) : null);
                }
                yield "\" id=\"input-address-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129);
                yield "\"/>
                </div>
                  <div id=\"error-address-custom-field-";
                // line 131
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
            }
            // line 134
            yield "
            ";
            // line 135
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 135) == "date")) {
                // line 136
                yield "              <div class=\"mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 136)) {
                    yield " required";
                }
                yield "\">
                <label for=\"input-address-custom-field-";
                // line 137
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137);
                yield "\" class=\"form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 137);
                yield "</label>
                <input type=\"date\" name=\"custom_field[";
                // line 138
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138);
                yield "]\" value=\"";
                if ((($_v12 = ($context["address_custom_field"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138)] ?? null) : null)) {
                    yield (($_v13 = ($context["address_custom_field"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 138);
                }
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 138);
                yield "\" id=\"input-address-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138);
                yield "\" class=\"form-control\"/>
                <div id=\"error-address-custom-field-";
                // line 139
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139);
                yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
            }
            // line 142
            yield "
            ";
            // line 143
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 143) == "time")) {
                // line 144
                yield "              <div class=\"mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 144)) {
                    yield " required";
                }
                yield "\">
                <label for=\"input-address-custom-field-";
                // line 145
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 145);
                yield "\" class=\"form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 145);
                yield "</label>
                <input type=\"time\" name=\"custom_field[";
                // line 146
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 146);
                yield "]\" value=\"";
                if ((($_v14 = ($context["address_custom_field"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 146)] ?? null) : null)) {
                    yield (($_v15 = ($context["address_custom_field"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 146)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 146);
                }
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 146);
                yield "\" id=\"input-address-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 146);
                yield "\" class=\"form-control\"/>
                <div id=\"error-address-custom-field-";
                // line 147
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 147);
                yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
            }
            // line 150
            yield "
            ";
            // line 151
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 151) == "datetime")) {
                // line 152
                yield "              <div class=\"mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 152)) {
                    yield " required";
                }
                yield "\">
                <label for=\"input-address-custom-field-";
                // line 153
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153);
                yield "\" class=\"form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 153);
                yield "</label>
                <input type=\"datetime-local\" name=\"custom_field[";
                // line 154
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154);
                yield "]\" value=\"";
                if ((($_v16 = ($context["address_custom_field"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154)] ?? null) : null)) {
                    yield (($_v17 = ($context["address_custom_field"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 154);
                }
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 154);
                yield "\" id=\"input-address-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154);
                yield "\" class=\"form-control\"/>
                <div id=\"error-address-custom-field-";
                // line 155
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 155);
                yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
            }
            // line 158
            yield "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        yield "          <div>
            <label class=\"form-label\">";
        // line 161
        yield ($context["entry_default"] ?? null);
        yield "</label>
            <div class=\"form-check form-switch form-switch-lg\">
              <input type=\"hidden\" name=\"default\" value=\"0\"/>
              <input type=\"checkbox\" name=\"default\" value=\"1\" id=\"input-address-default\" class=\"form-check-input\"";
        // line 164
        if (($context["default"] ?? null)) {
            yield " checked";
        }
        yield "/>
            </div>
          </div>
          <div class=\"text-end\">
            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> ";
        // line 168
        yield ($context["button_save"] ?? null);
        yield "</button>
          </div>
          <input type=\"hidden\" name=\"address_id\" value=\"";
        // line 170
        yield ($context["address_id"] ?? null);
        yield "\" id=\"input-address-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-address-country').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country.country&user_token=";
        // line 181
        yield ($context["user_token"] ?? null);
        yield "&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
            \$('#input-address-zone').prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
            \$('#input-address-zone').prop('disabled', false);
        },
        success: function(json) {
            if (json['postcode_required'] == '1') {
                \$('#input-address-postcode').parent().parent().addClass('required');
            } else {
                \$('#input-address-postcode').parent().parent().removeClass('required');
            }

            html = '<option value=\"\">";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_select"] ?? null), "js");
        yield "</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == '";
        // line 204
        yield ($context["zone_id"] ?? null);
        yield "') {
                        html += ' selected';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected>";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_none"] ?? null), "js");
        yield "</option>';
            }

            \$('#input-address-zone').html(html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-address-country').trigger('change');
//--></script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/customer/address_form.twig";
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
        return array (  688 => 211,  678 => 204,  669 => 198,  649 => 181,  635 => 170,  630 => 168,  621 => 164,  615 => 161,  612 => 160,  605 => 158,  599 => 155,  585 => 154,  579 => 153,  572 => 152,  570 => 151,  567 => 150,  561 => 147,  547 => 146,  541 => 145,  534 => 144,  532 => 143,  529 => 142,  523 => 139,  509 => 138,  503 => 137,  496 => 136,  494 => 135,  491 => 134,  485 => 131,  474 => 129,  462 => 128,  457 => 126,  450 => 125,  448 => 124,  445 => 123,  439 => 120,  425 => 119,  419 => 118,  412 => 117,  410 => 116,  407 => 115,  401 => 112,  387 => 111,  381 => 110,  374 => 109,  372 => 108,  369 => 107,  363 => 104,  360 => 103,  349 => 100,  337 => 99,  334 => 98,  330 => 97,  326 => 96,  322 => 95,  315 => 94,  313 => 93,  310 => 92,  304 => 89,  301 => 88,  290 => 85,  278 => 84,  275 => 83,  271 => 82,  267 => 81,  263 => 80,  256 => 79,  254 => 78,  251 => 77,  245 => 74,  242 => 73,  227 => 71,  223 => 70,  219 => 69,  213 => 68,  207 => 67,  200 => 66,  198 => 65,  195 => 64,  191 => 63,  186 => 60,  171 => 58,  167 => 57,  161 => 54,  155 => 50,  140 => 48,  136 => 47,  132 => 46,  127 => 44,  118 => 40,  114 => 39,  105 => 35,  101 => 34,  93 => 31,  89 => 30,  80 => 26,  76 => 25,  68 => 22,  64 => 21,  61 => 20,  55 => 9,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"modal-address\" class=\"modal fade\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"><i class=\"fa-solid fa-cog\"></i> {{ heading_title }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-address\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#address\">
          {#<div class=\"mb-3 required\">
            <label for=\"input-address-firstname\" class=\"form-label\">{{ entry_firstname }}</label>
            <input type=\"text\" name=\"firstname\" value=\"{{ firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-address-firstname\" class=\"form-control\"/>
            <div id=\"error-address-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-address-lastname\" class=\"form-label\">{{ entry_lastname }}</label>
            <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-address-lastname\" class=\"form-control\"/>
            <div id=\"error-address-lastname\" class=\"invalid-feedback\"></div>
          </div>#}
          <div class=\"mb-3\">
            <label for=\"input-address-company\" class=\"form-label\">{{ entry_company }}</label>
            <input type=\"text\" name=\"company\" value=\"{{ company }}\" placeholder=\"{{ entry_company }}\" id=\"input-address-company\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-address-address-1\" class=\"form-label\">{{ entry_address_1 }}</label>
            <input type=\"text\" name=\"address_1\" value=\"{{ address_1 }}\" placeholder=\"{{ entry_address_1 }}\" id=\"input-address-address-1\" class=\"form-control\"/>
            <div id=\"error-address-address-1\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-address-address-2\" class=\"form-label\">{{ entry_address_2 }}</label>
            <input type=\"text\" name=\"address_2\" value=\"{{ address_2 }}\" placeholder=\"{{ entry_address_2 }}\" id=\"input-address-address-2\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-address-city\" class=\"form-label\">{{ entry_city }}</label>
            <input type=\"text\" name=\"city\" value=\"{{ city }}\" placeholder=\"{{ entry_city }}\" id=\"input-address-city\" class=\"form-control\"/>
            <div id=\"error-address-city\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-address-postcode\" class=\"form-label\">{{ entry_postcode }}</label>
            <input type=\"text\" name=\"postcode\" value=\"{{ postcode }}\" placeholder=\"{{ entry_postcode }}\" id=\"input-address-postcode\" class=\"form-control\"/>
            <div id=\"error-address-postcode\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-address-country\" class=\"form-label\">{{ entry_country }}</label>
            <select name=\"country_id\" id=\"input-address-country\" class=\"form-select\">
              <option value=\"\">{{ text_select }}</option>
              {% for country in countries %}
                <option value=\"{{ country.country_id }}\"{% if country.country_id == country_id %} selected{% endif %}>{{ country.name }}</option>
              {% endfor %}
            </select>
            <div id=\"error-address-country\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"col-sm-4 required\">
                  <label for=\"input-address-zone\" class=\"form-label\">{{ entry_zone }}</label>
                    <select name=\"zone_id\" id=\"input-address-zone\" class=\"form-select\">
                        <option value=\"\"></option>
                      {% for zone in zones %}
                        <option value=\"{{ zone.zone_id }}\"{% if zone.zone_id == zone_id %} selected{% endif %}>{{ zone.name }}</option>
                      {% endfor %}
                    </select>
                  </div>

          {% for custom_field in custom_fields %}

            {% if custom_field.type == 'select' %}
              <div class=\"mb-3{% if custom_field.required %} required{% endif %}\">
                <label for=\"input-address-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
                <select name=\"custom_field[{{ custom_field.custom_field_id }}]\" id=\"input-address-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                  <option value=\"\">{{ text_select }}</option>
                  {% for custom_field_value in custom_field.custom_field_value %}
                    <option value=\"{{ custom_field_value.custom_field_value_id }}\"{% if address_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == address_custom_field[custom_field.custom_field_id] %} selected{% endif %}>{{ custom_field_value.name }}</option>
                  {% endfor %}
                </select>
                <div id=\"error-address-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}

            {% if custom_field.type == 'radio' %}
              <div class=\"mb-3{% if custom_field.required %} required{% endif %}\">
                <label class=\"form-label\">{{ custom_field.name }}</label>
                <div id=\"input-address-custom-field-{{ custom_field.custom_field_id }}\">
                  {% for custom_field_value in custom_field.custom_field_value %}
                    <div class=\"form-check\">
                      <input type=\"radio\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-address-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if address_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == address_custom_field[custom_field.custom_field_id] %} checked{% endif %}/>
                      <label for=\"input-address-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                    </div>
                  {% endfor %}
                </div>
                <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}

            {% if custom_field.type == 'checkbox' %}
              <div class=\"mb-3{% if custom_field.required %} required{% endif %}\">
                <label class=\"form-label\">{{ custom_field.name }}</label>
                <div id=\"input-address-custom-field-{{ custom_field.custom_field_id }}\">
                  {% for custom_field_value in custom_field.custom_field_value %}
                    <div class=\"form-check\">
                      <input type=\"checkbox\" name=\"custom_field[{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-address-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if address_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in address_custom_field[custom_field.custom_field_id] %} checked{% endif %}/>
                      <label for=\"input-address-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                    </div>
                  {% endfor %}
                </div>
                <div id=\"error-address-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}

            {% if custom_field.type == 'text' %}
              <div class=\"mb-3{% if custom_field.required %} required{% endif %}\">
                <label for=\"input-address-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
                <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-address-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                <div id=\"error-address-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}

            {% if custom_field.type == 'textarea' %}
              <div class=\"mb-3{% if custom_field.required %} required{% endif %}\">
                <label for=\"input-address-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
                <textarea name=\"custom_field[{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-address-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>
                <div id=\"error-address-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}

            {% if custom_field.type == 'file' %}
              <div class=\"mb-3{% if custom_field.required %} required{% endif %}\">
                <label class=\"form-label\">{{ custom_field.name }}</label>
                <div class=\"input-group\">
                <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" data-oc-target=\"#input-address-custom-field-{{ custom_field.custom_field_id }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                <input type=\"hidden\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% endif %}\" id=\"input-address-custom-field-{{ custom_field.custom_field_id }}\"/>
                </div>
                  <div id=\"error-address-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}

            {% if custom_field.type == 'date' %}
              <div class=\"mb-3{% if custom_field.required %} required{% endif %}\">
                <label for=\"input-address-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
                <input type=\"date\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-address-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                <div id=\"error-address-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}

            {% if custom_field.type == 'time' %}
              <div class=\"mb-3{% if custom_field.required %} required{% endif %}\">
                <label for=\"input-address-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
                <input type=\"time\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-address-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                <div id=\"error-address-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}

            {% if custom_field.type == 'datetime' %}
              <div class=\"mb-3{% if custom_field.required %} required{% endif %}\">
                <label for=\"input-address-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
                <input type=\"datetime-local\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-address-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                <div id=\"error-address-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}

          {% endfor %}
          <div>
            <label class=\"form-label\">{{ entry_default }}</label>
            <div class=\"form-check form-switch form-switch-lg\">
              <input type=\"hidden\" name=\"default\" value=\"0\"/>
              <input type=\"checkbox\" name=\"default\" value=\"1\" id=\"input-address-default\" class=\"form-check-input\"{% if default %} checked{% endif %}/>
            </div>
          </div>
          <div class=\"text-end\">
            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> {{ button_save }}</button>
          </div>
          <input type=\"hidden\" name=\"address_id\" value=\"{{ address_id }}\" id=\"input-address-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-address-country').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country.country&user_token={{ user_token }}&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
            \$('#input-address-zone').prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
            \$('#input-address-zone').prop('disabled', false);
        },
        success: function(json) {
            if (json['postcode_required'] == '1') {
                \$('#input-address-postcode').parent().parent().addClass('required');
            } else {
                \$('#input-address-postcode').parent().parent().removeClass('required');
            }

            html = '<option value=\"\">{{ text_select|escape('js') }}</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == '{{ zone_id }}') {
                        html += ' selected';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected>{{ text_none|escape('js') }}</option>';
            }

            \$('#input-address-zone').html(html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-address-country').trigger('change');
//--></script>", "admin/view/template/customer/address_form.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/admin/view/template/customer/address_form.twig");
    }
}
