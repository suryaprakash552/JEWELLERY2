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

/* admin/view/template/sale/order_info.twig */
class __TwigTemplate_30e03bf3f76622908d9d1941e9ff6ca0 extends Template
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
          <button type=\"button\" onclick=\"showInvoiceIframe(";
        // line 6
        yield ($context["order_id"] ?? null);
        yield ")\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_invoice_print"] ?? null);
        yield "\" class=\"btn btn-info";
        if ( !($context["order_id"] ?? null)) {
            yield " disabled";
        }
        yield "\"><i class=\"fa-solid fa-print\"></i></button>
          <a href=\"";
        // line 7
        yield ($context["shipping"] ?? null);
        yield "\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_shipping_print"] ?? null);
        yield "\" class=\"btn btn-info";
        if ( !($context["shipping_method_code"] ?? null)) {
            yield " disabled";
        }
        yield "\"><i class=\"fa-solid fa-truck\"></i></a>
          
        ";
        // line 10
        yield "        ";
        // line 11
        yield "        ";
        // line 12
        yield "        ";
        // line 13
        yield "        ";
        // line 14
        yield "          
          <a href=\"";
        // line 15
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
        </div>
      <h1>";
        // line 17
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 20
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 20);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 20);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card mb-3\">
    <div class=\"card-header\">
        <div class=\"row\">
            <div class=\"col\">
                <i class=\"fa-solid fa-info-circle\"></i> ";
        // line 30
        yield ($context["text_form"] ?? null);
        yield "
            </div>

            <div class=\"col\">
                <i class=\"fa-solid fa-info-circle\"></i>Date: ";
        // line 34
        yield ($context["date_added"] ?? null);
        yield "
            </div>
            ";
        // line 37
        yield "            ";
        $context["display"] = ((array_key_exists("invoice_display", $context)) ? (Twig\Extension\CoreExtension::default(($context["invoice_display"] ?? null), "")) : (""));
        // line 38
        yield "            
            ";
        // line 40
        yield "            ";
        if ( !($context["display"] ?? null)) {
            // line 41
            yield "                ";
            // line 42
            yield "                ";
            $context["prefix"] = ((array_key_exists("invoice_prefix", $context)) ? (Twig\Extension\CoreExtension::default(($context["invoice_prefix"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["order_info"] ?? null), "invoice_prefix", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["order_info"] ?? null), "invoice_prefix", [], "any", false, false, false, 42), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["order_info"] ?? null), "invoice_prefix", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["order_info"] ?? null), "invoice_prefix", [], "any", false, false, false, 42), "")) : (""))));
            // line 43
            yield "                ";
            $context["raw_no"] = ((array_key_exists("invoice_raw_no", $context)) ? (Twig\Extension\CoreExtension::default(($context["invoice_raw_no"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["order_info"] ?? null), "invoice_no", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["order_info"] ?? null), "invoice_no", [], "any", false, false, false, 43), ((array_key_exists("invoice_no", $context)) ? (Twig\Extension\CoreExtension::default(($context["invoice_no"] ?? null), "")) : ("")))) : (((array_key_exists("invoice_no", $context)) ? (Twig\Extension\CoreExtension::default(($context["invoice_no"] ?? null), "")) : ("")))))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["order_info"] ?? null), "invoice_no", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["order_info"] ?? null), "invoice_no", [], "any", false, false, false, 43), ((array_key_exists("invoice_no", $context)) ? (Twig\Extension\CoreExtension::default(($context["invoice_no"] ?? null), "")) : ("")))) : (((array_key_exists("invoice_no", $context)) ? (Twig\Extension\CoreExtension::default(($context["invoice_no"] ?? null), "")) : (""))))));
            // line 44
            yield "            
                ";
            // line 45
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["raw_no"] ?? null))) {
                // line 46
                yield "                    ";
                // line 47
                yield "                    ";
                if ((($context["prefix"] ?? null) && (Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["raw_no"] ?? null), 0, Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["prefix"] ?? null))) != ($context["prefix"] ?? null)))) {
                    // line 48
                    yield "                        ";
                    $context["display"] = ((($context["prefix"] ?? null) . "-") . ($context["raw_no"] ?? null));
                    // line 49
                    yield "                    ";
                } else {
                    // line 50
                    yield "                        ";
                    $context["display"] = ($context["raw_no"] ?? null);
                    // line 51
                    yield "                    ";
                }
                // line 52
                yield "                ";
            } elseif (($context["prefix"] ?? null)) {
                // line 53
                yield "                    ";
                // line 54
                yield "                    ";
                $context["display"] = (($context["prefix"] ?? null) . "-");
                // line 55
                yield "                ";
            } else {
                // line 56
                yield "                    ";
                $context["display"] = "";
                // line 57
                yield "                ";
            }
            // line 58
            yield "            ";
        }
        // line 59
        yield "            <div class=\"col\">
                <i class=\"fa-solid fa-info-circle\"></i>
                ";
        // line 61
        if (($context["display"] ?? null)) {
            // line 62
            yield "                    Invoice: ";
            yield ($context["display"] ?? null);
            yield "
                ";
        } else {
            // line 64
            yield "                    Invoice: <span class=\"text-muted\">Not generated</span>
                ";
        }
        // line 66
        yield "            </div>
        </div>
    </div>
</div>
      <div class=\"card-body\">
<div class=\"row mb-3 g-3\">

    ";
        // line 74
        yield "    ";
        // line 75
        yield "    ";
        // line 76
        yield "    ";
        // line 78
        yield "    ";
        // line 79
        yield "    ";
        // line 80
        yield "    ";
        // line 81
        yield "    ";
        // line 82
        yield "
    <!-- Customer -->
    <div class=\"col\">
        <label class=\"custom-label\">Customer</label>
        <div class=\"d-flex\">
            <div class=\"form-control\"style=\"height:36px;background: #0f172a; border: 1px solid #334155; color: #fff; padding: 8px 10px;\" >
                ";
        // line 88
        if (($context["customer_id"] ?? null)) {
            // line 89
            yield "                <a href=\"";
            yield ($context["customer_edit"] ?? null);
            yield "\" target=\"_blank\">
                    ";
            // line 90
            yield ($context["firstname"] ?? null);
            yield " ";
            yield ($context["lastname"] ?? null);
            yield "
                </a>
                ";
        } else {
            // line 93
            yield "                    ";
            yield ($context["firstname"] ?? null);
            yield " ";
            yield ($context["lastname"] ?? null);
            yield "
                ";
        }
        // line 95
        yield "            </div>

            <button type=\"button\" 
                    data-bs-toggle=\"modal\" 
                    data-bs-target=\"#modal-customer\" 
                    class=\"btn btn-outline-primary btn-sm ms-2\">
                <i class=\"fa-solid fa-cog\"></i>
            </button>
        </div>
    </div>
    <div class=\"col\">
        <label class=\"custom-label\">Payment Address</label>
        <div class=\"d-flex\">
            <div class=\"form-control\"style=\"height:36px;background: #0f172a; border: 1px solid #334155; color: #fff; padding: 8px 10px;\" >
                ";
        // line 109
        yield ($context["payment_firstname"] ?? null);
        yield " ";
        yield ($context["payment_lastname"] ?? null);
        yield "
            </div>

            <button type=\"button\" 
                    data-bs-toggle=\"modal\" 
                    data-bs-target=\"#modal-payment-address\" 
                    class=\"btn btn-outline-primary btn-sm ms-2\">
                <i class=\"fa-solid fa-cog\"></i>
            </button>
        </div>
    </div>

    <!-- Store -->
    <div class=\"col\">
        <label class=\"custom-label\">Store</label>
        <div class=\"form-control\" style=\"height:36px;background:#0f172a;border:1px solid #334155;color:#fff;padding:8px 10px;\">
        <select id=\"input-store\">
            ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 127
            yield "                <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 127);
            yield "\"
                    ";
            // line 128
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 128) == ($context["store_id"] ?? null))) {
                yield "selected";
            }
            // line 129
            yield "                    style=\"background:#0f172a;color:#fff;\">
                    ";
            // line 130
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 130);
            yield "
                </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        yield "        </select>
    </div>
    </div>

    <!-- Language -->
    <div class=\"col\">
        <label class=\"custom-label\">Language</label>
        <div class=\"form-control\"style=\"height:36px;background: #0f172a; border: 1px solid #334155; color: #fff; padding: 8px 10px;\" >
            <select id=\"input-language\">
                ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 143
            yield "                    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 143);
            yield "\"
                        ";
            // line 144
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 144) == ($context["language_code"] ?? null))) {
                yield "selected";
            }
            // line 145
            yield "                         style=\"background:#0f172a;color:#fff;\">
                        ";
            // line 146
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 146);
            yield "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        yield "            </select>
        </div>
    </div>

    <!-- Currency -->
    <div class=\"col\">
        <label class=\"custom-label\">Currency</label>
        <div class=\"form-control\"style=\"background: #0f172a; border: 1px solid #334155; color: #fff; padding: 8px 10px;\" >
            <select id=\"input-currency\">
                ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 159
            yield "                    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 159);
            yield "\"
                        ";
            // line 160
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 160) == ($context["currency_code"] ?? null))) {
                yield "selected";
            }
            // line 161
            yield "                        style=\"background:#0f172a;color:#fff;\">
                        ";
            // line 162
            yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 162);
            yield "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['currency'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        yield "            </select>
        </div>
    </div>

    <!-- Payment Address -->
    ";
        // line 171
        yield "    ";
        // line 172
        yield "    ";
        // line 173
        yield "    ";
        // line 174
        yield "    ";
        // line 175
        yield "    ";
        // line 176
        yield "
    ";
        // line 178
        yield "    ";
        // line 179
        yield "    ";
        // line 180
        yield "    ";
        // line 181
        yield "    ";
        // line 182
        yield "    ";
        // line 183
        yield "    ";
        // line 184
        yield "    ";
        // line 185
        yield "
    <!-- Payment Method -->
    <div class=\"col\">
        <label class=\"custom-label\">Credit Points</label>
        <div class=\"d-flex\">
            <div class=\"form-control\"style=\"height:36px;background: #0f172a; border: 1px solid #334155; color: #fff; padding: 8px 10px;\" >
               ";
        // line 191
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["invoice"] ?? null), "credit_points", [], "any", false, false, false, 191);
        yield "
            </div>
        </div>
    </div>

</div>

         
        <form id=\"form-cart\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <th>";
        // line 203
        yield ($context["column_product"] ?? null);
        yield "</th>
                <th class=\"text-end\">";
        // line 204
        yield ($context["column_quantity"] ?? null);
        yield "</th>
                <th class=\"text-end\">";
        // line 205
        yield ($context["column_price"] ?? null);
        yield "</th>
                <th class=\"text-end\">";
        // line 206
        yield ($context["column_total"] ?? null);
        yield "</th>
                ";
        // line 208
        yield "              </tr>
            </thead>
            <tbody id=\"order-product\">
              ";
        // line 211
        $context["order_product_row"] = 0;
        // line 212
        yield "              ";
        if (($context["order_products"] ?? null)) {
            // line 213
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["order_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order_product"]) {
                // line 214
                yield "                  <tr>
                    <td>
                      <a href=\"";
                // line 216
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "product_edit", [], "any", false, false, false, 216);
                yield "\" target=\"_blank\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "name", [], "any", false, false, false, 216);
                yield "</a>
                      <div id=\"error-product-";
                // line 217
                yield ($context["order_product_row"] ?? null);
                yield "-product\" class=\"invalid-feedback mt-0\"></div>
                      <ul class=\"list-unstyled mb-0\">
                        <li>
                          <small> - ";
                // line 220
                yield ($context["text_model"] ?? null);
                yield ": ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "model", [], "any", false, false, false, 220);
                yield "</small>
                        </li>
                        ";
                // line 222
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "option", [], "any", false, false, false, 222));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 223
                    yield "                          ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 223) != "file")) {
                        // line 224
                        yield "                            <li>
                              <small> - ";
                        // line 225
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 225);
                        yield ": ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 225);
                        yield "</small>
                              <div id=\"error-product-";
                        // line 226
                        yield ($context["order_product_row"] ?? null);
                        yield "-option-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 226);
                        yield "\" class=\"invalid-feedback mt-0\"></div>
                            </li>
                          ";
                    } else {
                        // line 229
                        yield "                            <li>
                              <small> - ";
                        // line 230
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 230);
                        yield ": <a href=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "href", [], "any", false, false, false, 230);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "filename", [], "any", false, false, false, 230);
                        yield "</a></small>
                              <div id=\"error-product-";
                        // line 231
                        yield ($context["order_product_row"] ?? null);
                        yield "-option-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 231);
                        yield "\" class=\"invalid-feedback mt-0\"></div>
                            </li>
                          ";
                    }
                    // line 234
                    yield "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 235
                yield "                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "subscription_plan_id", [], "any", false, false, false, 235)) {
                    // line 236
                    yield "                          <li>
                            <small> - ";
                    // line 237
                    yield ($context["text_subscription"] ?? null);
                    yield ": ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "subscription_edit", [], "any", false, false, false, 237)) {
                        yield "<a href=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "subscription_edit", [], "any", false, false, false, 237);
                        yield "\" target=\"_blank\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "subscription_plan", [], "any", false, false, false, 237);
                        yield "</a>";
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "subscription_plan", [], "any", false, false, false, 237);
                    }
                    yield "</small>
                            <div id=\"error-product-";
                    // line 238
                    yield ($context["order_product_row"] ?? null);
                    yield "-subscription\" class=\"invalid-feedback mt-0\"></div>
                          </li>
                        ";
                }
                // line 241
                yield "                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "reward", [], "any", false, false, false, 241)) {
                    // line 242
                    yield "                          <li>
                            <small> - ";
                    // line 243
                    yield ($context["text_points"] ?? null);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "reward", [], "any", false, false, false, 243);
                    yield "</small>
                          </li>
                        ";
                }
                // line 246
                yield "                      </ul>
                      <input type=\"hidden\" name=\"product[";
                // line 247
                yield ($context["order_product_row"] ?? null);
                yield "][product_id]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "product_id", [], "any", false, false, false, 247);
                yield "\"/> <input type=\"hidden\" name=\"product[";
                yield ($context["order_product_row"] ?? null);
                yield "][quantity]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "quantity", [], "any", false, false, false, 247);
                yield "\"/>
                      ";
                // line 248
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "option", [], "any", false, false, false, 248));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 249
                    yield "                        ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 249) == "select") || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 249) == "radio"))) {
                        // line 250
                        yield "                          <input type=\"hidden\" name=\"product[";
                        yield ($context["order_product_row"] ?? null);
                        yield "][option][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 250);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value_id", [], "any", false, false, false, 250);
                        yield "\"/>
                        ";
                    }
                    // line 252
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 252) == "checkbox")) {
                        // line 253
                        yield "                          <input type=\"hidden\" name=\"product[";
                        yield ($context["order_product_row"] ?? null);
                        yield "][option][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 253);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value_id", [], "any", false, false, false, 253);
                        yield "\"/>
                        ";
                    }
                    // line 255
                    yield "                        ";
                    if (((((((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 255) == "text") || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 255) == "textarea")) || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 255) == "file")) || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 255) == "date")) || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 255) == "datetime")) || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 255) == "time"))) {
                        // line 256
                        yield "                          <input type=\"hidden\" name=\"product[";
                        yield ($context["order_product_row"] ?? null);
                        yield "][option][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 256);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 256);
                        yield "\"/>
                        ";
                    }
                    // line 258
                    yield "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 259
                yield "                      <input type=\"hidden\" name=\"product[";
                yield ($context["order_product_row"] ?? null);
                yield "][subscription_plan_id]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "subscription_plan_id", [], "any", false, false, false, 259);
                yield "\"/>
                    </td>
                    <td class=\"text-end\">";
                // line 261
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "quantity", [], "any", false, false, false, 261);
                yield "</td>
                    <td class=\"text-end\">";
                // line 262
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "price", [], "any", false, false, false, 262);
                yield "</td>
                    <td class=\"text-end\">";
                // line 263
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "total", [], "any", false, false, false, 263);
                yield "</td>
                    ";
                // line 265
                yield "                  </tr>
                  ";
                // line 266
                $context["order_product_row"] = (($context["order_product_row"] ?? null) + 1);
                // line 267
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order_product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 268
            yield "              ";
        } else {
            // line 269
            yield "                <tr>
                  <td colspan=\"5\" class=\"text-center\">";
            // line 270
            yield ($context["text_no_results"] ?? null);
            yield "</td>
                </tr>
              ";
        }
        // line 273
        yield "            </tbody>
            <tfoot>
              <tr>
                ";
        // line 277
        yield "              </tr>
            </tfoot>
            ";
        // line 279
        if (($context["invoice"] ?? null)) {
            // line 280
            yield "<tr>
  <!-- Empty cells to push invoice under Total column -->
  <td style=\"border:none !important; padding:0; margin:0;\"></td>
<td style=\"border:none !important; padding:0; margin:0;\"></td>
<td style=\"border:none !important; padding:0; margin:0;\"></td>


  <!-- Invoice Table starts under Total column -->
  <td colspan=\"2\" style=\"vertical-align: top; padding:0;\">

    <table class=\"table table-bordered\" style=\"margin:0; width:100%;\">
  <tbody>
    <tr>
      <td><strong>Subtotal</strong></td>
      <td style=\"text-align:right;\"><strong>₹ ";
            // line 294
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["invoice"] ?? null), "sub_total", [], "any", false, false, false, 294);
            yield "</strong></td>
    </tr>

    <tr>
      <td>Discount</td>
      <td style=\"text-align:right;\">₹ ";
            // line 299
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["invoice"] ?? null), "discount", [], "any", false, false, false, 299);
            yield "</td>
    </tr>

    <tr>
      <td style=\"font-weight:700; color:#6c757d;\">Subtotal After Discount</td>
      <td style=\"text-align:right; font-weight:700; color:#6c757d;\">
        ₹ ";
            // line 305
            yield (CoreExtension::getAttribute($this->env, $this->source, ($context["invoice"] ?? null), "sub_total", [], "any", false, false, false, 305) - CoreExtension::getAttribute($this->env, $this->source, ($context["invoice"] ?? null), "discount", [], "any", false, false, false, 305));
            yield "
      </td>
    </tr>

    <tr>
      <td style=\"color:#6c757d;\">Total Tax</td>
      <td style=\"text-align:right; color:#6c757d;\">
        ₹ ";
            // line 312
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["invoice"] ?? null), "total_tax", [], "any", false, false, false, 312);
            yield "
      </td>
    </tr>

    <tr>
      <th>Total Amount</th>
      <th style=\"text-align:right;\">₹ ";
            // line 318
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["invoice"] ?? null), "total_received", [], "any", false, false, false, 318);
            yield "</th>
    </tr>

    <tr>
      <td>Cash Amount</td>
      <td style=\"text-align:right;\">₹ ";
            // line 323
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["invoice"] ?? null), "cash_amount", [], "any", false, false, false, 323);
            yield "</td>
    </tr>

    <tr>
      <td>UPI Amount</td>
      <td style=\"text-align:right;\">₹ ";
            // line 328
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["invoice"] ?? null), "upi_amount", [], "any", false, false, false, 328);
            yield "</td>
    </tr>

    <tr>
      <td>UPI Ref</td>
      <td style=\"text-align:right;\">";
            // line 333
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["invoice"] ?? null), "upi_ref", [], "any", false, false, false, 333);
            yield "</td> 
    </tr>

    <tr>
      <td>Coupon</td>
      <td style=\"text-align:right;\">";
            // line 338
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["invoice"] ?? null), "coupon", [], "any", false, false, false, 338);
            yield "</td>
    </tr>

    <tr>
      <td style=\"font-weight:700; color:";
            // line 342
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["invoice"] ?? null), "pending_amount", [], "any", false, false, false, 342) > 0)) {
                yield "red";
            } else {
                yield "green";
            }
            yield ";\">
        Due Amount
      </td>
      <td style=\"text-align:right; font-weight:700;
          color:";
            // line 346
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["invoice"] ?? null), "pending_amount", [], "any", false, false, false, 346) > 0)) {
                yield "red";
            } else {
                yield "green";
            }
            yield ";\">
        ₹ ";
            // line 347
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["invoice"] ?? null), "pending_amount", [], "any", false, false, false, 347);
            yield "
      </td>
    </tr>
  </tbody>
</table>
  </td>
</tr>
";
        }
        // line 355
        yield "          </table>
        </form>
        <table class=\"table table-bordered\">
          <tbody id=\"order-total\">
            ";
        // line 359
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_total"]) {
            // line 360
            yield "              <tr>
                <td class=\"text-end\"><strong style=\"color:black\">";
            // line 361
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_total"], "title", [], "any", false, false, false, 361);
            yield "</strong></td>
                <td class=\"text-end\" style=\"width: 1px;\">";
            // line 362
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_total"], "text", [], "any", false, false, false, 362);
            yield "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_total'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 365
        yield "          </tbody>
        </table>
        <!-- Invoice iframe -->
        <div id=\"invoiceBox\" class=\"mt-4\">
            <iframe id=\"invoiceFrame\" style=\"width:100%; height:900px; border:1px solid #ddd; display:none;\"></iframe>
        </div>
      </div>
    </div>
    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fa-solid fa-comment\"></i> ";
        // line 374
        yield ($context["text_history"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a href=\"#tab-history\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 377
        yield ($context["tab_history"] ?? null);
        yield "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-additional\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 378
        yield ($context["tab_additional"] ?? null);
        yield "</a></li>
          ";
        // line 379
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 380
            yield "            <li class=\"nav-item\"><a href=\"#tab-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "code", [], "any", false, false, false, 380);
            yield "\" data-bs-toggle=\"tab\" class=\"nav-link\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 380);
            yield "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 382
        yield "        </ul>
        <div class=\"tab-content\">
          <div id=\"tab-history\" class=\"tab-pane active\">
            <fieldset>
              <legend>";
        // line 386
        yield ($context["text_history"] ?? null);
        yield "</legend>
              <div id=\"history\">";
        // line 387
        yield ($context["history"] ?? null);
        yield "</div>
            </fieldset>
            <form id=\"form-history\">
              <fieldset>
                <legend>";
        // line 391
        yield ($context["text_history_add"] ?? null);
        yield "</legend>
               <div class=\"row mb-3 align-items-center\" style=\"display:flex; gap:25px; flex-wrap:nowrap;\">

    <!-- Order Status -->
    <div class=\"col-auto\">
        <label for=\"input-order-status\" style=\"font-weight: bold; color:white; display:block; margin-bottom:5px;\">
            ";
        // line 397
        yield ($context["entry_order_status"] ?? null);
        yield "
        </label>
        <select name=\"order_status_id\"
                id=\"input-order-status\"
                class=\"form-select\"
                style=\"height: 45px; font-size: 13px; color:black; background:white; width:350px;\">
            ";
        // line 403
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 404
            yield "                <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 404);
            yield "\"
                    ";
            // line 405
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 405) == ($context["order_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">
                    ";
            // line 406
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 406);
            yield "
                </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 409
        yield "        </select>
    </div>

    <!-- Override Switch -->
    <div class=\"col-auto\">
        <label class=\"form-label\" style=\"margin-bottom: 5px; display:block;\">";
        // line 414
        yield ($context["entry_override"] ?? null);
        yield "</label>
        <div class=\"form-check form-switch form-switch-lg\">
            <input type=\"hidden\" name=\"override\" value=\"0\"/>
            <input type=\"checkbox\" name=\"override\" value=\"1\" id=\"input-override\" class=\"form-check-input\"/>
        </div>
    </div>

    <!-- Notify Switch -->
    <div class=\"col-auto\">
        <label class=\"form-label\" style=\"margin-bottom: 5px; display:block;\">";
        // line 423
        yield ($context["entry_notify"] ?? null);
        yield "</label>
        <div class=\"form-check form-switch form-switch-lg\">
            <input type=\"hidden\" name=\"notify\" value=\"0\"/>
            <input type=\"checkbox\" name=\"notify\" value=\"1\" id=\"input-notify\" class=\"form-check-input\"/>
        </div>
    </div>

    <!-- Comment Box -->
    <div class=\"col-auto\">
        <label for=\"input-history\" class=\"form-label\" style=\"display:block;\">";
        // line 432
        yield ($context["entry_comment"] ?? null);
        yield "</label>
        <textarea name=\"comment\"
                  rows=\"1\"
                  id=\"input-history\"
                  class=\"form-control\"
                  style=\"width:500px; height:45px;\">
        </textarea>
    </div>
        <!-- Add Button -->
        <div class=\"col-auto\">
        <button type=\"submit\" id=\"button-history\" class=\"btn btn-primary\" style=\"margin-top:25px;\">
            Submit
        </button>
         </div>
              <div class=\"col-auto\" style=\"margin-bottom:-27px\">
                <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"";
        // line 447
        yield ($context["button_reset"] ?? null);
        yield "\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-filter-circle-xmark\"></i></button>
              </div>
              </div>
              </fieldset>
              <input type=\"hidden\" name=\"order_id\" value=\"";
        // line 451
        yield ($context["order_id"] ?? null);
        yield "\" id=\"input-order-id\"/>
            </form>
          </div>
          <div id=\"tab-additional\" class=\"tab-pane\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <th colspan=\"2\">";
        // line 459
        yield ($context["text_browser"] ?? null);
        yield "</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>";
        // line 464
        yield ($context["text_ip"] ?? null);
        yield "</td>
                    <td>";
        // line 465
        yield ($context["ip"] ?? null);
        yield "</td>
                  </tr>
                  ";
        // line 467
        if (($context["forwarded_ip"] ?? null)) {
            // line 468
            yield "                    <tr>
                      <td>";
            // line 469
            yield ($context["text_forwarded_ip"] ?? null);
            yield "</td>
                      <td>";
            // line 470
            yield ($context["forwarded_ip"] ?? null);
            yield "</td>
                    </tr>
                  ";
        }
        // line 473
        yield "                  <tr>
                    <td>";
        // line 474
        yield ($context["text_user_agent"] ?? null);
        yield "</td>
                    <td>";
        // line 475
        yield ($context["user_agent"] ?? null);
        yield "</td>
                  </tr>
                  <tr>
                    <td>";
        // line 478
        yield ($context["text_accept_language"] ?? null);
        yield "</td>
                    <td>";
        // line 479
        yield ($context["accept_language"] ?? null);
        yield "</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          ";
        // line 485
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 486
            yield "            <div id=\"tab-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "code", [], "any", false, false, false, 486);
            yield "\" class=\"tab-pane\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "content", [], "any", false, false, false, 486);
            yield "</div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 488
        yield "        </div>
      </div>
    </div>
  </div>
</div>

<!-- All your existing modals remain the same -->
<div id=\"modal-customer\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"style=\"color:black;\">";
        // line 499
        yield ($context["text_customer"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-customer\" data-oc-target=\"#section-customer\">
          <div class=\"mb-3\">
            <label for=\"input-customer\" class=\"form-label\" style=\"color:black;\">";
        // line 505
        yield ($context["entry_customer"] ?? null);
        yield "</label>
            <div class=\"input-group\">
              <input type=\"text\" value=\"";
        // line 507
        yield ($context["firstname"] ?? null);
        yield " ";
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_customer"] ?? null);
        yield "\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\" autocomplete=\"off\"/> <a href=\"";
        yield ($context["customer_add"] ?? null);
        yield "\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_customer_add"] ?? null);
        yield "\" class=\"btn btn-outline-secondary\" style=\"background:black\"><i class=\"fa-solid fa-user-plus\"></i></a>
            </div>
            <input type=\"hidden\" name=\"customer_id\" value=\"";
        // line 509
        yield ($context["customer_id"] ?? null);
        yield "\" id=\"input-customer-id\"/>
            <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-customer-group\" class=\"form-label\"style=\"color:black;\">";
        // line 513
        yield ($context["entry_customer_group"] ?? null);
        yield "</label> <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
              ";
        // line 514
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 515
            yield "                <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 515);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 515) == ($context["customer_group_id"] ?? null))) {
                yield " selected";
            }
            yield "style=\"color:black;\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 515);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 517
        yield "            </select>
            <div id=\"error-customer-group\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-firstname\" class=\"form-label\"style=\"color:black;\">";
        // line 521
        yield ($context["entry_firstname"] ?? null);
        yield "</label> <input type=\"text\" name=\"firstname\" value=\"";
        yield ($context["firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-firstname\" class=\"form-control\"/>
            <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-lastname\" class=\"form-label\"style=\"color:black;\">";
        // line 525
        yield ($context["entry_lastname"] ?? null);
        yield "</label> <input type=\"text\" name=\"lastname\" value=\"";
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-lastname\" class=\"form-control\"/>
            <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-email\" class=\"form-label\"style=\"color:black;\">";
        // line 529
        yield ($context["entry_email"] ?? null);
        yield "</label>
            <div class=\"input-group\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 531
        yield ($context["email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\"/><a href=\"mailto:";
        yield ($context["email"] ?? null);
        yield "\" class=\"btn btn-outline-secondary\"style=\"background:black\"><i class=\"fa-solid fa-envelope\"></i></a>
            </div>
            <div id=\"error-email\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3";
        // line 535
        if (($context["config_telephone_required"] ?? null)) {
            yield " required";
        }
        yield "\">
            <label for=\"input-telephone\" class=\"form-label\"style=\"color:black;\">";
        // line 536
        yield ($context["entry_telephone"] ?? null);
        yield "</label> <input type=\"text\" name=\"telephone\" value=\"";
        yield ($context["telephone"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_telephone"] ?? null);
        yield "\" id=\"input-telephone\" class=\"form-control\"/>
            <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
          </div>

          ";
        // line 540
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 541
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 541) == "account")) {
                // line 542
                yield "              ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 542) == "select")) {
                    // line 543
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 543);
                    yield "\">
                  <label for=\"input-custom-field-";
                    // line 544
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 544);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 544);
                    yield "</label> <select name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 544);
                    yield "]\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 544);
                    yield "\" class=\"form-select\">
                    <option value=\"\">";
                    // line 545
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                    ";
                    // line 546
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 546));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 547
                        yield "                      <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 547);
                        yield "\"";
                        if (((($_v0 = ($context["account_custom_field"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 547)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 547) == (($_v1 = ($context["account_custom_field"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 547)] ?? null) : null)))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 547);
                        yield "</option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 549
                    yield "                  </select>
                  <div id=\"error-custom-field-";
                    // line 550
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 550);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 553
                yield "
              ";
                // line 554
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 554) == "radio")) {
                    // line 555
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 555);
                    yield "\">
                  <label class=\"form-label\">";
                    // line 556
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 556);
                    yield "</label>
                  <div id=\"input-custom-field-";
                    // line 557
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 557);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 558
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 558));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 559
                        yield "                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"custom_field[";
                        // line 560
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 560);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 560);
                        yield "\" id=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 560);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v2 = ($context["account_custom_field"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 560)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 560) == (($_v3 = ($context["account_custom_field"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 560)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 560);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 560);
                        yield "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 563
                    yield "                  </div>
                  <div id=\"error-custom-field-";
                    // line 564
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 564);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 567
                yield "
              ";
                // line 568
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 568) == "checkbox")) {
                    // line 569
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 569);
                    yield "\">
                  <label class=\"form-label\">";
                    // line 570
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 570);
                    yield "</label>
                  <div id=\"input-custom-field-";
                    // line 571
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 571);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 572
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 572));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 573
                        yield "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"custom_field[";
                        // line 574
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 574);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 574);
                        yield "\" id=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 574);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v4 = ($context["account_custom_field"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 574)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 574), (($_v5 = ($context["account_custom_field"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 574)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 574);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 574);
                        yield "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 577
                    yield "                  </div>
                  <div id=\"error-custom-field-";
                    // line 578
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 578);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 581
                yield "
              ";
                // line 582
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 582) == "text")) {
                    // line 583
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 583);
                    yield "\">
                  <label for=\"input-custom-field-";
                    // line 584
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 584);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 584);
                    yield "</label> <input type=\"text\" name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 584);
                    yield "]\" value=\"";
                    yield (((($_v6 = ($context["account_custom_field"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 584)] ?? null) : null)) ? ((($_v7 = ($context["account_custom_field"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 584)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 584)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 584);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 584);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                    // line 585
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 585);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 588
                yield "
              ";
                // line 589
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 589) == "textarea")) {
                    // line 590
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 590);
                    yield "\">
                  <label for=\"input-custom-field-";
                    // line 591
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 591);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 591);
                    yield "</label> <textarea name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 591);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 591);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 591);
                    yield "\" class=\"form-control\">";
                    yield (((($_v8 = ($context["account_custom_field"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 591)] ?? null) : null)) ? ((($_v9 = ($context["account_custom_field"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 591)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 591)));
                    yield "</textarea>
                  <div id=\"error-custom-field-";
                    // line 592
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 592);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 595
                yield "
              ";
                // line 596
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 596) == "file")) {
                    // line 597
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 597);
                    yield "\">
                  <label class=\"form-label\">";
                    // line 598
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 598);
                    yield "</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 600
                    yield ($context["upload"] ?? null);
                    yield "\" data-oc-target=\"#input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 600);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                    <input type=\"text\" name=\"custom_field[";
                    // line 601
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 601);
                    yield "]\" value=\"";
                    yield (((($_v10 = ($context["account_custom_field"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 601)] ?? null) : null)) ? ((($_v11 = ($context["account_custom_field"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 601)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 601)));
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 601);
                    yield "\" class=\"form-control\"/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-custom-field-";
                    // line 602
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 602);
                    yield "\"";
                    if ( !(($_v12 = ($context["account_custom_field"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 602)] ?? null) : null)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    yield ($context["button_download"] ?? null);
                    yield "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 603
                    yield ($context["button_clear"] ?? null);
                    yield "\" data-oc-target=\"#input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 603);
                    yield "\"";
                    if ( !(($_v13 = ($context["account_custom_field"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 603)] ?? null) : null)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-custom-field-";
                    // line 605
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 605);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 608
                yield "
              ";
                // line 609
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 609) == "date")) {
                    // line 610
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 610);
                    yield "\">
                  <label for=\"input-custom-field-";
                    // line 611
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 611);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 611);
                    yield "</label> <input type=\"date\" name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 611);
                    yield "]\" value=\"";
                    yield (((($_v14 = ($context["account_custom_field"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 611)] ?? null) : null)) ? ((($_v15 = ($context["account_custom_field"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 611)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 611)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 611);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 611);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                    // line 612
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 612);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 615
                yield "
              ";
                // line 616
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 616) == "time")) {
                    // line 617
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 617);
                    yield "\">
                  <label for=\"input-custom-field-";
                    // line 618
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 618);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 618);
                    yield "</label> <input type=\"time\" name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 618);
                    yield "]\" value=\"";
                    yield (((($_v16 = ($context["account_custom_field"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 618)] ?? null) : null)) ? ((($_v17 = ($context["account_custom_field"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 618)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 618)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 618);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 618);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                    // line 619
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 619);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 622
                yield "
              ";
                // line 623
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 623) == "datetime")) {
                    // line 624
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 624);
                    yield "\">
                  <label for=\"input-custom-field-";
                    // line 625
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 625);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 625);
                    yield "</label> <input type=\"datetime-local\" name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 625);
                    yield "]\" value=\"";
                    yield (((($_v18 = ($context["account_custom_field"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 625)] ?? null) : null)) ? ((($_v19 = ($context["account_custom_field"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 625)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 625)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 625);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 625);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                    // line 626
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 626);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 629
                yield "
            ";
            }
            // line 631
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 632
        yield "
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-customer\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> ";
        // line 634
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

";
        // line 643
        yield "<div id=\"modal-payment-address\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"style=\"color:black;\">";
        // line 647
        yield ($context["text_payment_address"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <div class=\"modal-body\">
        <form id=\"form-payment-address\">
          <div class=\"mb-3 required\">
            <label for=\"input-payment-firstname\" class=\"form-label\" style=\"color:black;\">";
        // line 654
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"payment_firstname\" value=\"";
        // line 655
        yield ($context["payment_firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-payment-firstname\" class=\"form-control\"/>
            <div id=\"error-payment-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-lastname\" class=\"form-label\" style=\"color:black;\">";
        // line 659
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"payment_lastname\" value=\"";
        // line 660
        yield ($context["payment_lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-payment-lastname\" class=\"form-control\"/>
            <div id=\"error-payment-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-company\" class=\"form-label\" style=\"color:black;\">";
        // line 664
        yield ($context["entry_company"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"payment_company\" value=\"";
        // line 665
        yield ($context["payment_company"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_company"] ?? null);
        yield "\" id=\"input-payment-company\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-address-1\" class=\"form-label\" style=\"color:black;\">";
        // line 668
        yield ($context["entry_address_1"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"payment_address_1\" value=\"";
        // line 669
        yield ($context["payment_address_1"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_address_1"] ?? null);
        yield "\" id=\"input-payment-address-1\" class=\"form-control\"/>
            <div id=\"error-payment-address-1\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-address-2\" class=\"form-label\" style=\"color:black;\">";
        // line 673
        yield ($context["entry_address_2"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"payment_address_2\" value=\"";
        // line 674
        yield ($context["payment_address_2"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_address_2"] ?? null);
        yield "\" id=\"input-payment-address-2\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-city\" class=\"form-label\" style=\"color:black;\">";
        // line 677
        yield ($context["entry_city"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"payment_city\" value=\"";
        // line 678
        yield ($context["payment_city"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_city"] ?? null);
        yield "\" id=\"input-payment-city\" class=\"form-control\"/>
            <div id=\"error-payment-city\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-postcode\" class=\"form-label\" style=\"color:black;\">";
        // line 682
        yield ($context["entry_postcode"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"payment_postcode\" value=\"";
        // line 683
        yield ($context["payment_postcode"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_postcode"] ?? null);
        yield "\" id=\"input-payment-postcode\" class=\"form-control\"/>
            <div id=\"error-payment-postcode\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-country\" class=\"form-label\" style=\"color:black;\">";
        // line 687
        yield ($context["entry_country"] ?? null);
        yield "</label>
            <select name=\"payment_country_id\" id=\"input-payment-country\" class=\"form-select\">
              <option value=\"\">";
        // line 689
        yield ($context["text_select"] ?? null);
        yield "</option>
              ";
        // line 690
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 691
            yield "                <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 691);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 691) == ($context["payment_country_id"] ?? null))) {
                yield " selected";
            }
            yield " style=\"color:black;\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 691);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['country'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 693
        yield "            </select>
            <div id=\"error-payment-country\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-zone\" class=\"form-label\" style=\"color:black;\">";
        // line 697
        yield ($context["entry_zone"] ?? null);
        yield "</label>
            <select name=\"payment_zone_id\" id=\"input-payment-zone\" class=\"form-select\">
              <option value=\"\">";
        // line 699
        yield ($context["text_select"] ?? null);
        yield "</option>
              ";
        // line 700
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["payment_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["zone"]) {
            // line 701
            yield "                <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "zone_id", [], "any", false, false, false, 701);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "zone_id", [], "any", false, false, false, 701) == ($context["payment_zone_id"] ?? null))) {
                yield " selected";
            }
            yield " style=\"color:black;\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "name", [], "any", false, false, false, 701);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['zone'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 703
        yield "            </select>
            <div id=\"error-payment-zone\" class=\"invalid-feedback\"></div>
          </div>
          
          ";
        // line 707
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 708
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 708) == "address")) {
                // line 709
                yield "              ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 709) == "select")) {
                    // line 710
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 710);
                    yield "\">
                  <label for=\"input-payment-custom-field-";
                    // line 711
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 711);
                    yield "\" class=\"form-label\" style=\"color:black;\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 711);
                    yield "</label>
                  <select name=\"payment_custom_field[";
                    // line 712
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 712);
                    yield "]\" id=\"input-payment-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 712);
                    yield "\" class=\"form-select\">
                    <option value=\"\">";
                    // line 713
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                    ";
                    // line 714
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 714));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 715
                        yield "                      <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 715);
                        yield "\"";
                        if (((($_v20 = ($context["payment_custom_field"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 715)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 715) == (($_v21 = ($context["payment_custom_field"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 715)] ?? null) : null)))) {
                            yield " selected";
                        }
                        yield " style=\"color:black;\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 715);
                        yield "</option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 717
                    yield "                  </select>
                  <div id=\"error-payment-custom-field-";
                    // line 718
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 718);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 721
                yield "              
              ";
                // line 722
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 722) == "text")) {
                    // line 723
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 723);
                    yield "\">
                  <label for=\"input-payment-custom-field-";
                    // line 724
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 724);
                    yield "\" class=\"form-label\" style=\"color:black;\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 724);
                    yield "</label>
                  <input type=\"text\" name=\"payment_custom_field[";
                    // line 725
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 725);
                    yield "]\" value=\"";
                    yield (((($_v22 = ($context["payment_custom_field"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 725)] ?? null) : null)) ? ((($_v23 = ($context["payment_custom_field"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 725)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 725)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 725);
                    yield "\" id=\"input-payment-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 725);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-payment-custom-field-";
                    // line 726
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 726);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 729
                yield "            ";
            }
            // line 730
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 731
        yield "          
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-payment-address\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> ";
        // line 733
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
         </form>
      </div>
    </div>
  </div>
<script type=\"text/javascript\"><!--
// All your existing JavaScript remains exactly the same until the bottom functions

let printedOnce = false;

function showInvoiceIframe(orderId) {
    printedOnce = false;
    var iframe = document.getElementById('invoiceFrame');
    var url = 'index.php?route=sale/order.invoice&order_id=' + orderId + '&user_token=";
        // line 747
        yield ($context["user_token"] ?? null);
        yield "';
    iframe.style.display = \"block\";
    iframe.height = \"900\";
    iframe.src = url;
    iframe.onload = function () {
        if (printedOnce) return;
        printedOnce = true;
        const win = iframe.contentWindow;
        win.focus();
        win.print();
        win.onafterprint = function () {
            closeInvoiceIframe();
        };
    };
}

function printInvoiceDirect(orderId) {
    if (!orderId) {
        alert(\"Order ID missing!\");
        return;
    }
    const url = \"index.php?route=sale/order.invoice&order_id=\" + orderId + \"&user_token=";
        // line 768
        yield ($context["user_token"] ?? null);
        yield "\";
    
    // Open a new hidden window
    let printWindow = window.open(\"\", \"_blank\", \"width=400,height=600\");
    
    if (!printWindow) {
        alert(\"Pop-up blocked! Please allow pop-ups for this site.\");
        return;
    }
    
    // Load invoice HTML
    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to fetch invoice');
            }
            return response.text();
        })
        .then(html => {
            printWindow.document.open();
            printWindow.document.write(html);
            printWindow.document.close();
            
            // Wait for content to render then print
            printWindow.onload = function () {
                printWindow.focus();
                printWindow.print();
                
                // Auto-close after printing
                printWindow.onafterprint = function () {
                    printWindow.close();
                };
            };
        })
        .catch(err => {
            alert(\"Unable to load invoice for printing\");
            console.error(err);
            if (printWindow && !printWindow.closed) {
                printWindow.close();
            }
        });
}

function closeInvoiceIframe() {
    var iframe = document.getElementById('invoiceFrame');
    iframe.style.display = \"none\";
    iframe.src = \"about:blank\";
    iframe.height = 0;
    window.scrollTo(0, 0);
}


</script>

<style>

.custom-label {
    font-size: 12px;
    font-weight: bold;
    color: white !important;
    margin-bottom: 4px;
    display: block;
}

.custom-box {
    background: white !important;
    color: black !important;
    border-radius: 8px;
    font-size: 13px;
    padding: 8px 10px;
}

.custom-box a {
    color: black !important;
}

.input-select {
    background: transparent !important;
    border: none !important;
    font-size: 13px;
    height: auto;
    padding: 0;
}

#input-store,#input-language,#input-currency {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background: transparent !important;
    border: none;
    outline: none;
    color: #fff;
    width: 100%;
    font-size: 14px;
    padding: 0;
    cursor: pointer;
}

#input-store::-ms-expand,#input-language::-ms-expand,#input-currency::-ms-expand {
    display: none;
}

#input-store option,#input-language option,#input-currency option {
    background: #0f172a !important;
    color: #fff !important;
}

.dropdown-menu,
.dropdown-menu.show {
    background: #1e293b !important;
    color: white !important;
    border: 1px solid #334155 !important;
}

.dropdown-item {
    color: white !important;
    background: transparent !important;
}

.dropdown-item:hover,
.dropdown-item:focus {
    background: #334155 !important;
    color: white !important;
}

/* Payment button styling */
.btn-primary {
    background-color: #0d6efd;
    border-color: #0d6efd;
    color: white;
}

.btn-primary:hover {
    background-color: #0b5ed7;
    border-color: #0a58ca;
}

.btn-primary:disabled {
    opacity: 0.65;
    cursor: not-allowed;
}
</style>

";
        // line 911
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/sale/order_info.twig";
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
        return array (  2097 => 911,  1951 => 768,  1927 => 747,  1910 => 733,  1906 => 731,  1900 => 730,  1897 => 729,  1891 => 726,  1881 => 725,  1875 => 724,  1870 => 723,  1868 => 722,  1865 => 721,  1859 => 718,  1856 => 717,  1841 => 715,  1837 => 714,  1833 => 713,  1827 => 712,  1821 => 711,  1816 => 710,  1813 => 709,  1810 => 708,  1806 => 707,  1800 => 703,  1785 => 701,  1781 => 700,  1777 => 699,  1772 => 697,  1766 => 693,  1751 => 691,  1747 => 690,  1743 => 689,  1738 => 687,  1729 => 683,  1725 => 682,  1716 => 678,  1712 => 677,  1704 => 674,  1700 => 673,  1691 => 669,  1687 => 668,  1679 => 665,  1675 => 664,  1666 => 660,  1662 => 659,  1653 => 655,  1649 => 654,  1639 => 647,  1633 => 643,  1622 => 634,  1618 => 632,  1612 => 631,  1608 => 629,  1602 => 626,  1588 => 625,  1583 => 624,  1581 => 623,  1578 => 622,  1572 => 619,  1558 => 618,  1553 => 617,  1551 => 616,  1548 => 615,  1542 => 612,  1528 => 611,  1523 => 610,  1521 => 609,  1518 => 608,  1512 => 605,  1501 => 603,  1491 => 602,  1483 => 601,  1471 => 600,  1466 => 598,  1461 => 597,  1459 => 596,  1456 => 595,  1450 => 592,  1436 => 591,  1431 => 590,  1429 => 589,  1426 => 588,  1420 => 585,  1406 => 584,  1401 => 583,  1399 => 582,  1396 => 581,  1390 => 578,  1387 => 577,  1366 => 574,  1363 => 573,  1359 => 572,  1355 => 571,  1351 => 570,  1346 => 569,  1344 => 568,  1341 => 567,  1335 => 564,  1332 => 563,  1311 => 560,  1308 => 559,  1304 => 558,  1300 => 557,  1296 => 556,  1291 => 555,  1289 => 554,  1286 => 553,  1280 => 550,  1277 => 549,  1262 => 547,  1258 => 546,  1254 => 545,  1244 => 544,  1239 => 543,  1236 => 542,  1233 => 541,  1229 => 540,  1218 => 536,  1212 => 535,  1201 => 531,  1196 => 529,  1185 => 525,  1174 => 521,  1168 => 517,  1153 => 515,  1149 => 514,  1145 => 513,  1138 => 509,  1125 => 507,  1120 => 505,  1111 => 499,  1098 => 488,  1087 => 486,  1083 => 485,  1074 => 479,  1070 => 478,  1064 => 475,  1060 => 474,  1057 => 473,  1051 => 470,  1047 => 469,  1044 => 468,  1042 => 467,  1037 => 465,  1033 => 464,  1025 => 459,  1014 => 451,  1007 => 447,  989 => 432,  977 => 423,  965 => 414,  958 => 409,  949 => 406,  943 => 405,  938 => 404,  934 => 403,  925 => 397,  916 => 391,  909 => 387,  905 => 386,  899 => 382,  888 => 380,  884 => 379,  880 => 378,  876 => 377,  870 => 374,  859 => 365,  850 => 362,  846 => 361,  843 => 360,  839 => 359,  833 => 355,  822 => 347,  814 => 346,  803 => 342,  796 => 338,  788 => 333,  780 => 328,  772 => 323,  764 => 318,  755 => 312,  745 => 305,  736 => 299,  728 => 294,  712 => 280,  710 => 279,  706 => 277,  701 => 273,  695 => 270,  692 => 269,  689 => 268,  683 => 267,  681 => 266,  678 => 265,  674 => 263,  670 => 262,  666 => 261,  658 => 259,  652 => 258,  642 => 256,  639 => 255,  629 => 253,  626 => 252,  616 => 250,  613 => 249,  609 => 248,  599 => 247,  596 => 246,  588 => 243,  585 => 242,  582 => 241,  576 => 238,  562 => 237,  559 => 236,  556 => 235,  550 => 234,  542 => 231,  534 => 230,  531 => 229,  523 => 226,  517 => 225,  514 => 224,  511 => 223,  507 => 222,  500 => 220,  494 => 217,  488 => 216,  484 => 214,  479 => 213,  476 => 212,  474 => 211,  469 => 208,  465 => 206,  461 => 205,  457 => 204,  453 => 203,  438 => 191,  430 => 185,  428 => 184,  426 => 183,  424 => 182,  422 => 181,  420 => 180,  418 => 179,  416 => 178,  413 => 176,  411 => 175,  409 => 174,  407 => 173,  405 => 172,  403 => 171,  396 => 165,  387 => 162,  384 => 161,  380 => 160,  375 => 159,  371 => 158,  360 => 149,  351 => 146,  348 => 145,  344 => 144,  339 => 143,  335 => 142,  324 => 133,  315 => 130,  312 => 129,  308 => 128,  303 => 127,  299 => 126,  277 => 109,  261 => 95,  253 => 93,  245 => 90,  240 => 89,  238 => 88,  230 => 82,  228 => 81,  226 => 80,  224 => 79,  222 => 78,  220 => 76,  218 => 75,  216 => 74,  207 => 66,  203 => 64,  197 => 62,  195 => 61,  191 => 59,  188 => 58,  185 => 57,  182 => 56,  179 => 55,  176 => 54,  174 => 53,  171 => 52,  168 => 51,  165 => 50,  162 => 49,  159 => 48,  156 => 47,  154 => 46,  152 => 45,  149 => 44,  146 => 43,  143 => 42,  141 => 41,  138 => 40,  135 => 38,  132 => 37,  127 => 34,  120 => 30,  110 => 22,  99 => 20,  95 => 19,  90 => 17,  83 => 15,  80 => 14,  78 => 13,  76 => 12,  74 => 11,  72 => 10,  61 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
          <button type=\"button\" onclick=\"showInvoiceIframe({{ order_id }})\" data-bs-toggle=\"tooltip\" title=\"{{ button_invoice_print }}\" class=\"btn btn-info{% if not order_id %} disabled{% endif %}\"><i class=\"fa-solid fa-print\"></i></button>
          <a href=\"{{ shipping }}\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"{{ button_shipping_print }}\" class=\"btn btn-info{% if not shipping_method_code %} disabled{% endif %}\"><i class=\"fa-solid fa-truck\"></i></a>
          
        {#  <!-- NEW PAYMENT BUTTON -->#}
        {#  <button type=\"button\" onclick=\"printInvoiceDirect({{ order_id }})\"#}
        {#        class=\"btn btn-primary\">#}
        {#    <i class=\"fa-solid fa-money-bill\"></i> Payment#}
        {#</button>#}
          
          <a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
        </div>
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card mb-3\">
    <div class=\"card-header\">
        <div class=\"row\">
            <div class=\"col\">
                <i class=\"fa-solid fa-info-circle\"></i> {{ text_form }}
            </div>

            <div class=\"col\">
                <i class=\"fa-solid fa-info-circle\"></i>Date: {{ date_added }}
            </div>
            {# Prefer controller prepared value if present #}
            {% set display = invoice_display|default('') %}
            
            {# Build display only when invoice_display not provided #}
            {% if not display %}
                {# Prefer explicit controller vars, then order_info fields, then invoice_no #}
                {% set prefix = invoice_prefix|default(order_info.invoice_prefix|default('')) %}
                {% set raw_no = invoice_raw_no|default(order_info.invoice_no|default(invoice_no|default(''))) %}
            
                {% if raw_no is not empty %}
                    {# If raw_no already begins with prefix, use it as-is; otherwise attach prefix + '-' #}
                    {% if prefix and (raw_no|slice(0, prefix|length) != prefix) %}
                        {% set display = prefix ~ '-' ~ raw_no %}
                    {% else %}
                        {% set display = raw_no %}
                    {% endif %}
                {% elseif prefix %}
                    {# Prefix exists but no number yet (optional behaviour) #}
                    {% set display = prefix ~ '-' %}
                {% else %}
                    {% set display = '' %}
                {% endif %}
            {% endif %}
            <div class=\"col\">
                <i class=\"fa-solid fa-info-circle\"></i>
                {% if display %}
                    Invoice: {{ display }}
                {% else %}
                    Invoice: <span class=\"text-muted\">Not generated</span>
                {% endif %}
            </div>
        </div>
    </div>
</div>
      <div class=\"card-body\">
<div class=\"row mb-3 g-3\">

    {#<!-- Invoice -->#}
    {#<div class=\"col\">#}
    {#    <label class=\"custom-label\">Invoice</label>#}
    {#    <div class=\"d-flex\">-#}
    {#        <div class=\"form-control\" style=\"background: #0f172a; border: 1px solid #334155; color: #fff; padding: 8px 10px;\" >#}
    {#                {{ invoice.invoice_prefix }}{{ invoice.invoice_no }}#}
    {#        </div>#}
    {#    </div>#}
    {#</div>#}

    <!-- Customer -->
    <div class=\"col\">
        <label class=\"custom-label\">Customer</label>
        <div class=\"d-flex\">
            <div class=\"form-control\"style=\"height:36px;background: #0f172a; border: 1px solid #334155; color: #fff; padding: 8px 10px;\" >
                {% if customer_id %}
                <a href=\"{{ customer_edit }}\" target=\"_blank\">
                    {{ firstname }} {{ lastname }}
                </a>
                {% else %}
                    {{ firstname }} {{ lastname }}
                {% endif %}
            </div>

            <button type=\"button\" 
                    data-bs-toggle=\"modal\" 
                    data-bs-target=\"#modal-customer\" 
                    class=\"btn btn-outline-primary btn-sm ms-2\">
                <i class=\"fa-solid fa-cog\"></i>
            </button>
        </div>
    </div>
    <div class=\"col\">
        <label class=\"custom-label\">Payment Address</label>
        <div class=\"d-flex\">
            <div class=\"form-control\"style=\"height:36px;background: #0f172a; border: 1px solid #334155; color: #fff; padding: 8px 10px;\" >
                {{ payment_firstname }} {{ payment_lastname }}
            </div>

            <button type=\"button\" 
                    data-bs-toggle=\"modal\" 
                    data-bs-target=\"#modal-payment-address\" 
                    class=\"btn btn-outline-primary btn-sm ms-2\">
                <i class=\"fa-solid fa-cog\"></i>
            </button>
        </div>
    </div>

    <!-- Store -->
    <div class=\"col\">
        <label class=\"custom-label\">Store</label>
        <div class=\"form-control\" style=\"height:36px;background:#0f172a;border:1px solid #334155;color:#fff;padding:8px 10px;\">
        <select id=\"input-store\">
            {% for store in stores %}
                <option value=\"{{ store.store_id }}\"
                    {% if store.store_id == store_id %}selected{% endif %}
                    style=\"background:#0f172a;color:#fff;\">
                    {{ store.name }}
                </option>
            {% endfor %}
        </select>
    </div>
    </div>

    <!-- Language -->
    <div class=\"col\">
        <label class=\"custom-label\">Language</label>
        <div class=\"form-control\"style=\"height:36px;background: #0f172a; border: 1px solid #334155; color: #fff; padding: 8px 10px;\" >
            <select id=\"input-language\">
                {% for language in languages %}
                    <option value=\"{{ language.code }}\"
                        {% if language.code == language_code %}selected{% endif %}
                         style=\"background:#0f172a;color:#fff;\">
                        {{ language.name }}
                    </option>
                {% endfor %}
            </select>
        </div>
    </div>

    <!-- Currency -->
    <div class=\"col\">
        <label class=\"custom-label\">Currency</label>
        <div class=\"form-control\"style=\"background: #0f172a; border: 1px solid #334155; color: #fff; padding: 8px 10px;\" >
            <select id=\"input-currency\">
                {% for currency in currencies %}
                    <option value=\"{{ currency.code }}\"
                        {% if currency.code == currency_code %}selected{% endif %}
                        style=\"background:#0f172a;color:#fff;\">
                        {{ currency.title }}
                    </option>
                {% endfor %}
            </select>
        </div>
    </div>

    <!-- Payment Address -->
    {#<div class=\"col\">#}
    {#    <label class=\"custom-label\">Payment Address</label>#}
    {#    <div class=\"d-flex\">#}
    {#        <div class=\"form-control\"style=\"height:36px;background: #0f172a; border: 1px solid #334155; color: #fff; padding: 8px 10px;\" >#}
    {#            {{ payment_firstname }} {{ payment_lastname }}#}
    {#        </div>#}

    {#        <button type=\"button\" #}
    {#                data-bs-toggle=\"modal\" #}
    {#                data-bs-target=\"#modal-payment-address\" #}
    {#                class=\"btn btn-outline-primary btn-sm ms-2\">#}
    {#            <i class=\"fa-solid fa-cog\"></i>#}
    {#        </button>#}
    {#    </div>#}
    {#</div>#}

    <!-- Payment Method -->
    <div class=\"col\">
        <label class=\"custom-label\">Credit Points</label>
        <div class=\"d-flex\">
            <div class=\"form-control\"style=\"height:36px;background: #0f172a; border: 1px solid #334155; color: #fff; padding: 8px 10px;\" >
               {{ invoice.credit_points }}
            </div>
        </div>
    </div>

</div>

         
        <form id=\"form-cart\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <th>{{ column_product }}</th>
                <th class=\"text-end\">{{ column_quantity }}</th>
                <th class=\"text-end\">{{ column_price }}</th>
                <th class=\"text-end\">{{ column_total }}</th>
                {#<th class=\"text-end\" style=\"width: 1px;\">{{ column_action }}</th>#}
              </tr>
            </thead>
            <tbody id=\"order-product\">
              {% set order_product_row = 0 %}
              {% if order_products %}
                {% for order_product in order_products %}
                  <tr>
                    <td>
                      <a href=\"{{ order_product.product_edit }}\" target=\"_blank\">{{ order_product.name }}</a>
                      <div id=\"error-product-{{ order_product_row }}-product\" class=\"invalid-feedback mt-0\"></div>
                      <ul class=\"list-unstyled mb-0\">
                        <li>
                          <small> - {{ text_model }}: {{ order_product.model }}</small>
                        </li>
                        {% for option in order_product.option %}
                          {% if option.type != 'file' %}
                            <li>
                              <small> - {{ option.name }}: {{ option.value }}</small>
                              <div id=\"error-product-{{ order_product_row }}-option-{{ option.product_option_id }}\" class=\"invalid-feedback mt-0\"></div>
                            </li>
                          {% else %}
                            <li>
                              <small> - {{ option.name }}: <a href=\"{{ option.href }}\">{{ option.filename }}</a></small>
                              <div id=\"error-product-{{ order_product_row }}-option-{{ option.product_option_id }}\" class=\"invalid-feedback mt-0\"></div>
                            </li>
                          {% endif %}
                        {% endfor %}
                        {% if order_product.subscription_plan_id %}
                          <li>
                            <small> - {{ text_subscription }}: {% if order_product.subscription_edit %}<a href=\"{{ order_product.subscription_edit }}\" target=\"_blank\">{{ order_product.subscription_plan }}</a>{% else %}{{ order_product.subscription_plan }}{% endif %}</small>
                            <div id=\"error-product-{{ order_product_row }}-subscription\" class=\"invalid-feedback mt-0\"></div>
                          </li>
                        {% endif %}
                        {% if order_product.reward %}
                          <li>
                            <small> - {{ text_points }}: {{ order_product.reward }}</small>
                          </li>
                        {% endif %}
                      </ul>
                      <input type=\"hidden\" name=\"product[{{ order_product_row }}][product_id]\" value=\"{{ order_product.product_id }}\"/> <input type=\"hidden\" name=\"product[{{ order_product_row }}][quantity]\" value=\"{{ order_product.quantity }}\"/>
                      {% for option in order_product.option %}
                        {% if option.type == 'select' or option.type == 'radio' %}
                          <input type=\"hidden\" name=\"product[{{ order_product_row }}][option][{{ option.product_option_id }}]\" value=\"{{ option.product_option_value_id }}\"/>
                        {% endif %}
                        {% if option.type == 'checkbox' %}
                          <input type=\"hidden\" name=\"product[{{ order_product_row }}][option][{{ option.product_option_id }}][]\" value=\"{{ option.product_option_value_id }}\"/>
                        {% endif %}
                        {% if option.type == 'text' or option.type == 'textarea' or option.type == 'file' or option.type == 'date' or option.type == 'datetime' or option.type == 'time' %}
                          <input type=\"hidden\" name=\"product[{{ order_product_row }}][option][{{ option.product_option_id }}]\" value=\"{{ option.value }}\"/>
                        {% endif %}
                      {% endfor %}
                      <input type=\"hidden\" name=\"product[{{ order_product_row }}][subscription_plan_id]\" value=\"{{ order_product.subscription_plan_id }}\"/>
                    </td>
                    <td class=\"text-end\">{{ order_product.quantity }}</td>
                    <td class=\"text-end\">{{ order_product.price }}</td>
                    <td class=\"text-end\">{{ order_product.total }}</td>
                    {#<td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>#}
                  </tr>
                  {% set order_product_row = order_product_row + 1 %}
                {% endfor %}
              {% else %}
                <tr>
                  <td colspan=\"5\" class=\"text-center\">{{ text_no_results }}</td>
                </tr>
              {% endif %}
            </tbody>
            <tfoot>
              <tr>
                {#<td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-product\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>#}
              </tr>
            </tfoot>
            {% if invoice %}
<tr>
  <!-- Empty cells to push invoice under Total column -->
  <td style=\"border:none !important; padding:0; margin:0;\"></td>
<td style=\"border:none !important; padding:0; margin:0;\"></td>
<td style=\"border:none !important; padding:0; margin:0;\"></td>


  <!-- Invoice Table starts under Total column -->
  <td colspan=\"2\" style=\"vertical-align: top; padding:0;\">

    <table class=\"table table-bordered\" style=\"margin:0; width:100%;\">
  <tbody>
    <tr>
      <td><strong>Subtotal</strong></td>
      <td style=\"text-align:right;\"><strong>₹ {{ invoice.sub_total }}</strong></td>
    </tr>

    <tr>
      <td>Discount</td>
      <td style=\"text-align:right;\">₹ {{ invoice.discount }}</td>
    </tr>

    <tr>
      <td style=\"font-weight:700; color:#6c757d;\">Subtotal After Discount</td>
      <td style=\"text-align:right; font-weight:700; color:#6c757d;\">
        ₹ {{ invoice.sub_total - invoice.discount }}
      </td>
    </tr>

    <tr>
      <td style=\"color:#6c757d;\">Total Tax</td>
      <td style=\"text-align:right; color:#6c757d;\">
        ₹ {{ invoice.total_tax }}
      </td>
    </tr>

    <tr>
      <th>Total Amount</th>
      <th style=\"text-align:right;\">₹ {{ invoice.total_received }}</th>
    </tr>

    <tr>
      <td>Cash Amount</td>
      <td style=\"text-align:right;\">₹ {{ invoice.cash_amount }}</td>
    </tr>

    <tr>
      <td>UPI Amount</td>
      <td style=\"text-align:right;\">₹ {{ invoice.upi_amount }}</td>
    </tr>

    <tr>
      <td>UPI Ref</td>
      <td style=\"text-align:right;\">{{ invoice.upi_ref }}</td> 
    </tr>

    <tr>
      <td>Coupon</td>
      <td style=\"text-align:right;\">{{ invoice.coupon }}</td>
    </tr>

    <tr>
      <td style=\"font-weight:700; color:{% if invoice.pending_amount > 0 %}red{% else %}green{% endif %};\">
        Due Amount
      </td>
      <td style=\"text-align:right; font-weight:700;
          color:{% if invoice.pending_amount > 0 %}red{% else %}green{% endif %};\">
        ₹ {{ invoice.pending_amount }}
      </td>
    </tr>
  </tbody>
</table>
  </td>
</tr>
{% endif %}
          </table>
        </form>
        <table class=\"table table-bordered\">
          <tbody id=\"order-total\">
            {% for order_total in order_totals %}
              <tr>
                <td class=\"text-end\"><strong style=\"color:black\">{{ order_total.title }}</strong></td>
                <td class=\"text-end\" style=\"width: 1px;\">{{ order_total.text }}</td>
              </tr>
            {% endfor %}
          </tbody>
        </table>
        <!-- Invoice iframe -->
        <div id=\"invoiceBox\" class=\"mt-4\">
            <iframe id=\"invoiceFrame\" style=\"width:100%; height:900px; border:1px solid #ddd; display:none;\"></iframe>
        </div>
      </div>
    </div>
    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fa-solid fa-comment\"></i> {{ text_history }}</div>
      <div class=\"card-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a href=\"#tab-history\" data-bs-toggle=\"tab\" class=\"nav-link active\">{{ tab_history }}</a></li>
          <li class=\"nav-item\"><a href=\"#tab-additional\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_additional }}</a></li>
          {% for tab in tabs %}
            <li class=\"nav-item\"><a href=\"#tab-{{ tab.code }}\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab.title }}</a></li>
          {% endfor %}
        </ul>
        <div class=\"tab-content\">
          <div id=\"tab-history\" class=\"tab-pane active\">
            <fieldset>
              <legend>{{ text_history }}</legend>
              <div id=\"history\">{{ history }}</div>
            </fieldset>
            <form id=\"form-history\">
              <fieldset>
                <legend>{{ text_history_add }}</legend>
               <div class=\"row mb-3 align-items-center\" style=\"display:flex; gap:25px; flex-wrap:nowrap;\">

    <!-- Order Status -->
    <div class=\"col-auto\">
        <label for=\"input-order-status\" style=\"font-weight: bold; color:white; display:block; margin-bottom:5px;\">
            {{ entry_order_status }}
        </label>
        <select name=\"order_status_id\"
                id=\"input-order-status\"
                class=\"form-select\"
                style=\"height: 45px; font-size: 13px; color:black; background:white; width:350px;\">
            {% for order_status in order_statuses %}
                <option value=\"{{ order_status.order_status_id }}\"
                    {% if order_status.order_status_id == order_status_id %} selected{% endif %}>
                    {{ order_status.name }}
                </option>
            {% endfor %}
        </select>
    </div>

    <!-- Override Switch -->
    <div class=\"col-auto\">
        <label class=\"form-label\" style=\"margin-bottom: 5px; display:block;\">{{ entry_override }}</label>
        <div class=\"form-check form-switch form-switch-lg\">
            <input type=\"hidden\" name=\"override\" value=\"0\"/>
            <input type=\"checkbox\" name=\"override\" value=\"1\" id=\"input-override\" class=\"form-check-input\"/>
        </div>
    </div>

    <!-- Notify Switch -->
    <div class=\"col-auto\">
        <label class=\"form-label\" style=\"margin-bottom: 5px; display:block;\">{{ entry_notify }}</label>
        <div class=\"form-check form-switch form-switch-lg\">
            <input type=\"hidden\" name=\"notify\" value=\"0\"/>
            <input type=\"checkbox\" name=\"notify\" value=\"1\" id=\"input-notify\" class=\"form-check-input\"/>
        </div>
    </div>

    <!-- Comment Box -->
    <div class=\"col-auto\">
        <label for=\"input-history\" class=\"form-label\" style=\"display:block;\">{{ entry_comment }}</label>
        <textarea name=\"comment\"
                  rows=\"1\"
                  id=\"input-history\"
                  class=\"form-control\"
                  style=\"width:500px; height:45px;\">
        </textarea>
    </div>
        <!-- Add Button -->
        <div class=\"col-auto\">
        <button type=\"submit\" id=\"button-history\" class=\"btn btn-primary\" style=\"margin-top:25px;\">
            Submit
        </button>
         </div>
              <div class=\"col-auto\" style=\"margin-bottom:-27px\">
                <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"{{ button_reset }}\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-filter-circle-xmark\"></i></button>
              </div>
              </div>
              </fieldset>
              <input type=\"hidden\" name=\"order_id\" value=\"{{ order_id }}\" id=\"input-order-id\"/>
            </form>
          </div>
          <div id=\"tab-additional\" class=\"tab-pane\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <th colspan=\"2\">{{ text_browser }}</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{ text_ip }}</td>
                    <td>{{ ip }}</td>
                  </tr>
                  {% if forwarded_ip %}
                    <tr>
                      <td>{{ text_forwarded_ip }}</td>
                      <td>{{ forwarded_ip }}</td>
                    </tr>
                  {% endif %}
                  <tr>
                    <td>{{ text_user_agent }}</td>
                    <td>{{ user_agent }}</td>
                  </tr>
                  <tr>
                    <td>{{ text_accept_language }}</td>
                    <td>{{ accept_language }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          {% for tab in tabs %}
            <div id=\"tab-{{ tab.code }}\" class=\"tab-pane\">{{ tab.content }}</div>
          {% endfor %}
        </div>
      </div>
    </div>
  </div>
</div>

<!-- All your existing modals remain the same -->
<div id=\"modal-customer\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"style=\"color:black;\">{{ text_customer }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-customer\" data-oc-target=\"#section-customer\">
          <div class=\"mb-3\">
            <label for=\"input-customer\" class=\"form-label\" style=\"color:black;\">{{ entry_customer }}</label>
            <div class=\"input-group\">
              <input type=\"text\" value=\"{{ firstname }} {{ lastname }}\" placeholder=\"{{ entry_customer }}\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\" autocomplete=\"off\"/> <a href=\"{{ customer_add }}\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"{{ button_customer_add }}\" class=\"btn btn-outline-secondary\" style=\"background:black\"><i class=\"fa-solid fa-user-plus\"></i></a>
            </div>
            <input type=\"hidden\" name=\"customer_id\" value=\"{{ customer_id }}\" id=\"input-customer-id\"/>
            <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-customer-group\" class=\"form-label\"style=\"color:black;\">{{ entry_customer_group }}</label> <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
              {% for customer_group in customer_groups %}
                <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == customer_group_id %} selected{% endif %}style=\"color:black;\">{{ customer_group.name }}</option>
              {% endfor %}
            </select>
            <div id=\"error-customer-group\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-firstname\" class=\"form-label\"style=\"color:black;\">{{ entry_firstname }}</label> <input type=\"text\" name=\"firstname\" value=\"{{ firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\" class=\"form-control\"/>
            <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-lastname\" class=\"form-label\"style=\"color:black;\">{{ entry_lastname }}</label> <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-lastname\" class=\"form-control\"/>
            <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-email\" class=\"form-label\"style=\"color:black;\">{{ entry_email }}</label>
            <div class=\"input-group\">
              <input type=\"text\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\"/><a href=\"mailto:{{ email }}\" class=\"btn btn-outline-secondary\"style=\"background:black\"><i class=\"fa-solid fa-envelope\"></i></a>
            </div>
            <div id=\"error-email\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3{% if config_telephone_required %} required{% endif %}\">
            <label for=\"input-telephone\" class=\"form-label\"style=\"color:black;\">{{ entry_telephone }}</label> <input type=\"text\" name=\"telephone\" value=\"{{ telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\"/>
            <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
          </div>

          {% for custom_field in custom_fields %}
            {% if custom_field.location == 'account' %}
              {% if custom_field.type == 'select' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <select name=\"custom_field[{{ custom_field.custom_field_id }}]\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                    <option value=\"\">{{ text_select }}</option>
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <option value=\"{{ custom_field_value.custom_field_value_id }}\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %} selected{% endif %}>{{ custom_field_value.name }}</option>
                    {% endfor %}
                  </select>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'radio' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label class=\"form-label\">{{ custom_field.name }}</label>
                  <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                      </div>
                    {% endfor %}
                  </div>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'checkbox' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label class=\"form-label\">{{ custom_field.name }}</label>
                  <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"custom_field[{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in account_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                      </div>
                    {% endfor %}
                  </div>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'text' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'textarea' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <textarea name=\"custom_field[{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'file' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label class=\"form-label\">{{ custom_field.name }}</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                    <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\"{% if not account_custom_field[custom_field.custom_field_id] %} disabled{% endif %} class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> {{ button_download }}</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"{{ button_clear }}\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\"{% if not account_custom_field[custom_field.custom_field_id] %} disabled{% endif %} class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'date' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"date\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'time' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"time\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'datetime' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"datetime-local\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

            {% endif %}
          {% endfor %}

          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-customer\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> {{ button_continue }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

{# Rest of modals - keeping them from original file #}
<div id=\"modal-payment-address\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"style=\"color:black;\">{{ text_payment_address }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <div class=\"modal-body\">
        <form id=\"form-payment-address\">
          <div class=\"mb-3 required\">
            <label for=\"input-payment-firstname\" class=\"form-label\" style=\"color:black;\">{{ entry_firstname }}</label>
            <input type=\"text\" name=\"payment_firstname\" value=\"{{ payment_firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-payment-firstname\" class=\"form-control\"/>
            <div id=\"error-payment-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-lastname\" class=\"form-label\" style=\"color:black;\">{{ entry_lastname }}</label>
            <input type=\"text\" name=\"payment_lastname\" value=\"{{ payment_lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-payment-lastname\" class=\"form-control\"/>
            <div id=\"error-payment-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-company\" class=\"form-label\" style=\"color:black;\">{{ entry_company }}</label>
            <input type=\"text\" name=\"payment_company\" value=\"{{ payment_company }}\" placeholder=\"{{ entry_company }}\" id=\"input-payment-company\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-address-1\" class=\"form-label\" style=\"color:black;\">{{ entry_address_1 }}</label>
            <input type=\"text\" name=\"payment_address_1\" value=\"{{ payment_address_1 }}\" placeholder=\"{{ entry_address_1 }}\" id=\"input-payment-address-1\" class=\"form-control\"/>
            <div id=\"error-payment-address-1\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-address-2\" class=\"form-label\" style=\"color:black;\">{{ entry_address_2 }}</label>
            <input type=\"text\" name=\"payment_address_2\" value=\"{{ payment_address_2 }}\" placeholder=\"{{ entry_address_2 }}\" id=\"input-payment-address-2\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-city\" class=\"form-label\" style=\"color:black;\">{{ entry_city }}</label>
            <input type=\"text\" name=\"payment_city\" value=\"{{ payment_city }}\" placeholder=\"{{ entry_city }}\" id=\"input-payment-city\" class=\"form-control\"/>
            <div id=\"error-payment-city\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-postcode\" class=\"form-label\" style=\"color:black;\">{{ entry_postcode }}</label>
            <input type=\"text\" name=\"payment_postcode\" value=\"{{ payment_postcode }}\" placeholder=\"{{ entry_postcode }}\" id=\"input-payment-postcode\" class=\"form-control\"/>
            <div id=\"error-payment-postcode\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-country\" class=\"form-label\" style=\"color:black;\">{{ entry_country }}</label>
            <select name=\"payment_country_id\" id=\"input-payment-country\" class=\"form-select\">
              <option value=\"\">{{ text_select }}</option>
              {% for country in countries %}
                <option value=\"{{ country.country_id }}\"{% if country.country_id == payment_country_id %} selected{% endif %} style=\"color:black;\">{{ country.name }}</option>
              {% endfor %}
            </select>
            <div id=\"error-payment-country\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-zone\" class=\"form-label\" style=\"color:black;\">{{ entry_zone }}</label>
            <select name=\"payment_zone_id\" id=\"input-payment-zone\" class=\"form-select\">
              <option value=\"\">{{ text_select }}</option>
              {% for zone in payment_zones %}
                <option value=\"{{ zone.zone_id }}\"{% if zone.zone_id == payment_zone_id %} selected{% endif %} style=\"color:black;\">{{ zone.name }}</option>
              {% endfor %}
            </select>
            <div id=\"error-payment-zone\" class=\"invalid-feedback\"></div>
          </div>
          
          {% for custom_field in custom_fields %}
            {% if custom_field.location == 'address' %}
              {% if custom_field.type == 'select' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\" style=\"color:black;\">{{ custom_field.name }}</label>
                  <select name=\"payment_custom_field[{{ custom_field.custom_field_id }}]\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                    <option value=\"\">{{ text_select }}</option>
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <option value=\"{{ custom_field_value.custom_field_value_id }}\"{% if payment_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == payment_custom_field[custom_field.custom_field_id] %} selected{% endif %} style=\"color:black;\">{{ custom_field_value.name }}</option>
                    {% endfor %}
                  </select>
                  <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}
              
              {% if custom_field.type == 'text' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\" style=\"color:black;\">{{ custom_field.name }}</label>
                  <input type=\"text\" name=\"payment_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ payment_custom_field[custom_field.custom_field_id] ? payment_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}
            {% endif %}
          {% endfor %}
          
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-payment-address\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> {{ button_continue }}</button>
          </div>
         </form>
      </div>
    </div>
  </div>
<script type=\"text/javascript\"><!--
// All your existing JavaScript remains exactly the same until the bottom functions

let printedOnce = false;

function showInvoiceIframe(orderId) {
    printedOnce = false;
    var iframe = document.getElementById('invoiceFrame');
    var url = 'index.php?route=sale/order.invoice&order_id=' + orderId + '&user_token={{ user_token }}';
    iframe.style.display = \"block\";
    iframe.height = \"900\";
    iframe.src = url;
    iframe.onload = function () {
        if (printedOnce) return;
        printedOnce = true;
        const win = iframe.contentWindow;
        win.focus();
        win.print();
        win.onafterprint = function () {
            closeInvoiceIframe();
        };
    };
}

function printInvoiceDirect(orderId) {
    if (!orderId) {
        alert(\"Order ID missing!\");
        return;
    }
    const url = \"index.php?route=sale/order.invoice&order_id=\" + orderId + \"&user_token={{ user_token }}\";
    
    // Open a new hidden window
    let printWindow = window.open(\"\", \"_blank\", \"width=400,height=600\");
    
    if (!printWindow) {
        alert(\"Pop-up blocked! Please allow pop-ups for this site.\");
        return;
    }
    
    // Load invoice HTML
    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to fetch invoice');
            }
            return response.text();
        })
        .then(html => {
            printWindow.document.open();
            printWindow.document.write(html);
            printWindow.document.close();
            
            // Wait for content to render then print
            printWindow.onload = function () {
                printWindow.focus();
                printWindow.print();
                
                // Auto-close after printing
                printWindow.onafterprint = function () {
                    printWindow.close();
                };
            };
        })
        .catch(err => {
            alert(\"Unable to load invoice for printing\");
            console.error(err);
            if (printWindow && !printWindow.closed) {
                printWindow.close();
            }
        });
}

function closeInvoiceIframe() {
    var iframe = document.getElementById('invoiceFrame');
    iframe.style.display = \"none\";
    iframe.src = \"about:blank\";
    iframe.height = 0;
    window.scrollTo(0, 0);
}


</script>

<style>

.custom-label {
    font-size: 12px;
    font-weight: bold;
    color: white !important;
    margin-bottom: 4px;
    display: block;
}

.custom-box {
    background: white !important;
    color: black !important;
    border-radius: 8px;
    font-size: 13px;
    padding: 8px 10px;
}

.custom-box a {
    color: black !important;
}

.input-select {
    background: transparent !important;
    border: none !important;
    font-size: 13px;
    height: auto;
    padding: 0;
}

#input-store,#input-language,#input-currency {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background: transparent !important;
    border: none;
    outline: none;
    color: #fff;
    width: 100%;
    font-size: 14px;
    padding: 0;
    cursor: pointer;
}

#input-store::-ms-expand,#input-language::-ms-expand,#input-currency::-ms-expand {
    display: none;
}

#input-store option,#input-language option,#input-currency option {
    background: #0f172a !important;
    color: #fff !important;
}

.dropdown-menu,
.dropdown-menu.show {
    background: #1e293b !important;
    color: white !important;
    border: 1px solid #334155 !important;
}

.dropdown-item {
    color: white !important;
    background: transparent !important;
}

.dropdown-item:hover,
.dropdown-item:focus {
    background: #334155 !important;
    color: white !important;
}

/* Payment button styling */
.btn-primary {
    background-color: #0d6efd;
    border-color: #0d6efd;
    color: white;
}

.btn-primary:hover {
    background-color: #0b5ed7;
    border-color: #0a58ca;
}

.btn-primary:disabled {
    opacity: 0.65;
    cursor: not-allowed;
}
</style>

{{ footer }}", "admin/view/template/sale/order_info.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/admin/view/template/sale/order_info.twig");
    }
}
