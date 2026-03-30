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

/* admin/view/template/marketing/coupon_form.twig */
class __TwigTemplate_e7cce7fed1d521f71f8cb4d226f364a4 extends Template
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
        <button type=\"submit\" form=\"form-coupon\" formaction=\"";
        // line 7
        yield ($context["save"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 8
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
      </div>

      <h1>";
        // line 11
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 21
        yield ($context["text_form"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-coupon\" action=\"";
        // line 23
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 25
        yield ($context["tab_general"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-history\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 26
        yield ($context["tab_history"] ?? null);
        yield "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <div class=\"row mb-3 required\">
                <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 31
        yield ($context["entry_name"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"name\" value=\"";
        // line 33
        yield ($context["name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\"/>
                  <div id=\"error-name\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-code\" class=\"col-sm-2 col-form-label\">";
        // line 38
        yield ($context["entry_code"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"code\" value=\"";
        // line 40
        yield ($context["code"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_code"] ?? null);
        yield "\" id=\"input-code\" class=\"form-control\"/>
                  <div class=\"form-text\">";
        // line 41
        yield ($context["help_code"] ?? null);
        yield "</div>
                  <div id=\"error-code\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-type\" class=\"col-sm-2 col-form-label\">";
        // line 46
        yield ($context["entry_type"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <select name=\"type\" id=\"input-type\" class=\"form-select\">
                    ";
        // line 49
        if ((($context["type"] ?? null) == "P")) {
            // line 50
            yield "                      <option value=\"P\" selected>";
            yield ($context["text_percent"] ?? null);
            yield "</option>
                    ";
        } else {
            // line 52
            yield "                      <option value=\"P\">";
            yield ($context["text_percent"] ?? null);
            yield "</option>
                    ";
        }
        // line 54
        yield "                    ";
        if ((($context["type"] ?? null) == "F")) {
            // line 55
            yield "                      <option value=\"F\" selected>";
            yield ($context["text_amount"] ?? null);
            yield "</option>
                    ";
        } else {
            // line 57
            yield "                      <option value=\"F\">";
            yield ($context["text_amount"] ?? null);
            yield "</option>
                    ";
        }
        // line 59
        yield "                  </select>
                  <div class=\"form-text\">";
        // line 60
        yield ($context["help_type"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-discount\" class=\"col-sm-2 col-form-label\">";
        // line 64
        yield ($context["entry_discount"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"discount\" value=\"";
        // line 66
        yield ($context["discount"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_discount"] ?? null);
        yield "\" id=\"input-discount\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-total\" class=\"col-sm-2 col-form-label\">";
        // line 70
        yield ($context["entry_total"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"total\" value=\"";
        // line 72
        yield ($context["total"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_total"] ?? null);
        yield "\" id=\"input-total\" class=\"form-control\"/>
                  <div class=\"form-text\">";
        // line 73
        yield ($context["help_total"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                  <label for=\"input-minimum\" class=\"col-sm-2 col-form-label\">Minimum Bill Amount</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"minimum_total\" value=\"";
        // line 79
        yield ($context["minimum_total"] ?? null);
        yield "\" placeholder=\"Enter minimum order total\" id=\"input-minimum\" class=\"form-control\"/>
                    <div class=\"form-text\">Coupon will apply only if the order total is greater than or equal to this amount.</div>
                  </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 84
        yield ($context["entry_logged"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <div class=\"form-check form-switch form-switch-lg\">
                    <input type=\"hidden\" name=\"logged\" value=\"0\"/> <input type=\"checkbox\" name=\"logged\" value=\"1\" id=\"input-logged\" class=\"form-check-input\"";
        // line 87
        if (($context["logged"] ?? null)) {
            yield " checked";
        }
        yield "/>
                  </div>
                  <div class=\"form-text\">";
        // line 89
        yield ($context["help_logged"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 93
        yield ($context["entry_shipping"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <div class=\"form-check form-switch form-switch-lg\">
                    <input type=\"hidden\" name=\"shipping\" value=\"0\"/> <input type=\"checkbox\" name=\"shipping\" value=\"1\" id=\"input-shipping\" class=\"form-check-input\"";
        // line 96
        if (($context["shipping"] ?? null)) {
            yield " checked";
        }
        yield "/>
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 101
        yield ($context["entry_product"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 103
        yield ($context["entry_product"] ?? null);
        yield "\" id=\"input-product\" data-oc-target=\"autocomplete-product\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-product\" class=\"dropdown-menu\"></ul>
                  <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                    <table id=\"coupon-product\" class=\"table m-0\">
                      <tbody>
                        ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["coupon_products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["coupon_product"]) {
            // line 109
            yield "                          <tr id=\"coupon-product-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["coupon_product"], "product_id", [], "any", false, false, false, 109);
            yield "\">
                            <td>";
            // line 110
            yield CoreExtension::getAttribute($this->env, $this->source, $context["coupon_product"], "name", [], "any", false, false, false, 110);
            yield "<input type=\"hidden\" name=\"coupon_product[]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["coupon_product"], "product_id", [], "any", false, false, false, 110);
            yield "\"/></td>
                            <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                          </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['coupon_product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        yield "                      </tbody>
                    </table>
                  </div>
                  <div class=\"form-text\">";
        // line 117
        yield ($context["help_product"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 121
        yield ($context["entry_category"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 123
        yield ($context["entry_category"] ?? null);
        yield "\" id=\"input-category\" data-oc-target=\"autocomplete-category\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-category\" class=\"dropdown-menu\"></ul>
                  <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                    <table id=\"coupon-category\" class=\"table m-0\">
                      <tbody>
                        ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["coupon_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["coupon_category"]) {
            // line 129
            yield "                          <tr id=\"coupon-category-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["coupon_category"], "category_id", [], "any", false, false, false, 129);
            yield "\">
                            <td>";
            // line 130
            yield CoreExtension::getAttribute($this->env, $this->source, $context["coupon_category"], "name", [], "any", false, false, false, 130);
            yield "<input type=\"hidden\" name=\"coupon_category[]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["coupon_category"], "category_id", [], "any", false, false, false, 130);
            yield "\"/></td>
                            <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                          </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['coupon_category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        yield "                      </tbody>
                    </table>
                  </div>
                  <div class=\"form-text\">";
        // line 137
        yield ($context["help_category"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 141
        yield ($context["entry_date"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <input type=\"date\" name=\"date_start\" value=\"";
        // line 144
        yield ($context["date_start"] ?? null);
        yield "\" id=\"input-date-start\" class=\"form-control\"/>
                    <div class=\"input-group-text\"> - </div>
                    <input type=\"date\" name=\"date_end\" value=\"";
        // line 146
        yield ($context["date_end"] ?? null);
        yield "\" id=\"input-date-end\" class=\"form-control\"/>
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-uses-total\" class=\"col-sm-2 col-form-label\">";
        // line 151
        yield ($context["entry_uses_total"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"uses_total\" value=\"";
        // line 153
        yield ($context["uses_total"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_uses_total"] ?? null);
        yield "\" id=\"input-uses-total\" class=\"form-control\"/>
                  <div class=\"form-text\">";
        // line 154
        yield ($context["help_uses_total"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-uses-customer\" class=\"col-sm-2 col-form-label\">";
        // line 158
        yield ($context["entry_uses_customer"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"uses_customer\" value=\"";
        // line 160
        yield ($context["uses_customer"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_uses_customer"] ?? null);
        yield "\" id=\"input-uses-customer\" class=\"form-control\"/>
                  <div class=\"form-text\">";
        // line 161
        yield ($context["help_uses_customer"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 165
        yield ($context["entry_status"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <div class=\"form-check form-switch form-switch-lg\">
                    <input type=\"hidden\" name=\"status\" value=\"0\"/> <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 168
        if (($context["status"] ?? null)) {
            yield " checked";
        }
        yield "/>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"tab-history\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 175
        yield ($context["text_coupon"] ?? null);
        yield "</legend>
                <div id=\"history\">";
        // line 176
        yield ($context["history"] ?? null);
        yield "</div>
              </fieldset>
            </div>
          </div>
          <input type=\"hidden\" name=\"coupon_id\" value=\"";
        // line 180
        yield ($context["coupon_id"] ?? null);
        yield "\" id=\"input-coupon-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-product').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token=";
        // line 190
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-product').val('');

        \$('#coupon-product-' + item['value']).remove();

        html = '<tr id=\"coupon-product-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"coupon_product[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#coupon-product tbody').append(html);
    }
});

\$('#coupon-product').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Category
\$('#input-category').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/category.autocomplete&user_token=";
        // line 224
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['category_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-category').val('');

        \$('#coupon-category-' + item['value']).remove();

        html = '<tr id=\"coupon-category-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"coupon_category[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#coupon-category tbody').append(html);
    }
});

\$('#coupon-category').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

\$('#history').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
});
//--></script>
";
        // line 260
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
        return "admin/view/template/marketing/coupon_form.twig";
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
        return array (  537 => 260,  498 => 224,  461 => 190,  448 => 180,  441 => 176,  437 => 175,  425 => 168,  419 => 165,  412 => 161,  406 => 160,  401 => 158,  394 => 154,  388 => 153,  383 => 151,  375 => 146,  370 => 144,  364 => 141,  357 => 137,  352 => 134,  340 => 130,  335 => 129,  331 => 128,  323 => 123,  318 => 121,  311 => 117,  306 => 114,  294 => 110,  289 => 109,  285 => 108,  277 => 103,  272 => 101,  262 => 96,  256 => 93,  249 => 89,  242 => 87,  236 => 84,  228 => 79,  219 => 73,  213 => 72,  208 => 70,  199 => 66,  194 => 64,  187 => 60,  184 => 59,  178 => 57,  172 => 55,  169 => 54,  163 => 52,  157 => 50,  155 => 49,  149 => 46,  141 => 41,  135 => 40,  130 => 38,  120 => 33,  115 => 31,  107 => 26,  103 => 25,  98 => 23,  93 => 21,  86 => 16,  75 => 14,  71 => 13,  66 => 11,  58 => 8,  52 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">

      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-coupon\" formaction=\"{{ save }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
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
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_form }}</div>
      <div class=\"card-body\">
        <form id=\"form-coupon\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">{{ tab_general }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-history\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_history }}</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <div class=\"row mb-3 required\">
                <label for=\"input-name\" class=\"col-sm-2 col-form-label\">{{ entry_name }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"name\" value=\"{{ name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name\" class=\"form-control\"/>
                  <div id=\"error-name\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-code\" class=\"col-sm-2 col-form-label\">{{ entry_code }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"code\" value=\"{{ code }}\" placeholder=\"{{ entry_code }}\" id=\"input-code\" class=\"form-control\"/>
                  <div class=\"form-text\">{{ help_code }}</div>
                  <div id=\"error-code\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-type\" class=\"col-sm-2 col-form-label\">{{ entry_type }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"type\" id=\"input-type\" class=\"form-select\">
                    {% if type == 'P' %}
                      <option value=\"P\" selected>{{ text_percent }}</option>
                    {% else %}
                      <option value=\"P\">{{ text_percent }}</option>
                    {% endif %}
                    {% if type == 'F' %}
                      <option value=\"F\" selected>{{ text_amount }}</option>
                    {% else %}
                      <option value=\"F\">{{ text_amount }}</option>
                    {% endif %}
                  </select>
                  <div class=\"form-text\">{{ help_type }}</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-discount\" class=\"col-sm-2 col-form-label\">{{ entry_discount }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"discount\" value=\"{{ discount }}\" placeholder=\"{{ entry_discount }}\" id=\"input-discount\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-total\" class=\"col-sm-2 col-form-label\">{{ entry_total }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"total\" value=\"{{ total }}\" placeholder=\"{{ entry_total }}\" id=\"input-total\" class=\"form-control\"/>
                  <div class=\"form-text\">{{ help_total }}</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                  <label for=\"input-minimum\" class=\"col-sm-2 col-form-label\">Minimum Bill Amount</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"minimum_total\" value=\"{{ minimum_total }}\" placeholder=\"Enter minimum order total\" id=\"input-minimum\" class=\"form-control\"/>
                    <div class=\"form-text\">Coupon will apply only if the order total is greater than or equal to this amount.</div>
                  </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_logged }}</label>
                <div class=\"col-sm-10\">
                  <div class=\"form-check form-switch form-switch-lg\">
                    <input type=\"hidden\" name=\"logged\" value=\"0\"/> <input type=\"checkbox\" name=\"logged\" value=\"1\" id=\"input-logged\" class=\"form-check-input\"{% if logged %} checked{% endif %}/>
                  </div>
                  <div class=\"form-text\">{{ help_logged }}</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_shipping }}</label>
                <div class=\"col-sm-10\">
                  <div class=\"form-check form-switch form-switch-lg\">
                    <input type=\"hidden\" name=\"shipping\" value=\"0\"/> <input type=\"checkbox\" name=\"shipping\" value=\"1\" id=\"input-shipping\" class=\"form-check-input\"{% if shipping %} checked{% endif %}/>
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_product }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"product\" value=\"\" placeholder=\"{{ entry_product }}\" id=\"input-product\" data-oc-target=\"autocomplete-product\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-product\" class=\"dropdown-menu\"></ul>
                  <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                    <table id=\"coupon-product\" class=\"table m-0\">
                      <tbody>
                        {% for coupon_product in coupon_products %}
                          <tr id=\"coupon-product-{{ coupon_product.product_id }}\">
                            <td>{{ coupon_product.name }}<input type=\"hidden\" name=\"coupon_product[]\" value=\"{{ coupon_product.product_id }}\"/></td>
                            <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                          </tr>
                        {% endfor %}
                      </tbody>
                    </table>
                  </div>
                  <div class=\"form-text\">{{ help_product }}</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_category }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"{{ entry_category }}\" id=\"input-category\" data-oc-target=\"autocomplete-category\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-category\" class=\"dropdown-menu\"></ul>
                  <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                    <table id=\"coupon-category\" class=\"table m-0\">
                      <tbody>
                        {% for coupon_category in coupon_categories %}
                          <tr id=\"coupon-category-{{ coupon_category.category_id }}\">
                            <td>{{ coupon_category.name }}<input type=\"hidden\" name=\"coupon_category[]\" value=\"{{ coupon_category.category_id }}\"/></td>
                            <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                          </tr>
                        {% endfor %}
                      </tbody>
                    </table>
                  </div>
                  <div class=\"form-text\">{{ help_category }}</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_date }}</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <input type=\"date\" name=\"date_start\" value=\"{{ date_start }}\" id=\"input-date-start\" class=\"form-control\"/>
                    <div class=\"input-group-text\"> - </div>
                    <input type=\"date\" name=\"date_end\" value=\"{{ date_end }}\" id=\"input-date-end\" class=\"form-control\"/>
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-uses-total\" class=\"col-sm-2 col-form-label\">{{ entry_uses_total }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"uses_total\" value=\"{{ uses_total }}\" placeholder=\"{{ entry_uses_total }}\" id=\"input-uses-total\" class=\"form-control\"/>
                  <div class=\"form-text\">{{ help_uses_total }}</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-uses-customer\" class=\"col-sm-2 col-form-label\">{{ entry_uses_customer }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"uses_customer\" value=\"{{ uses_customer }}\" placeholder=\"{{ entry_uses_customer }}\" id=\"input-uses-customer\" class=\"form-control\"/>
                  <div class=\"form-text\">{{ help_uses_customer }}</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_status }}</label>
                <div class=\"col-sm-10\">
                  <div class=\"form-check form-switch form-switch-lg\">
                    <input type=\"hidden\" name=\"status\" value=\"0\"/> <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"{% if status %} checked{% endif %}/>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"tab-history\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_coupon }}</legend>
                <div id=\"history\">{{ history }}</div>
              </fieldset>
            </div>
          </div>
          <input type=\"hidden\" name=\"coupon_id\" value=\"{{ coupon_id }}\" id=\"input-coupon-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-product').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-product').val('');

        \$('#coupon-product-' + item['value']).remove();

        html = '<tr id=\"coupon-product-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"coupon_product[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#coupon-product tbody').append(html);
    }
});

\$('#coupon-product').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Category
\$('#input-category').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/category.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['category_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-category').val('');

        \$('#coupon-category-' + item['value']).remove();

        html = '<tr id=\"coupon-category-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"coupon_category[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#coupon-category tbody').append(html);
    }
});

\$('#coupon-category').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

\$('#history').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
});
//--></script>
{{ footer }}
", "admin/view/template/marketing/coupon_form.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/admin/view/template/marketing/coupon_form.twig");
    }
}
