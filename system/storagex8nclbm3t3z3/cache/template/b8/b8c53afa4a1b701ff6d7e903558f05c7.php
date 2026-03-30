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

/* admin/view/template/sale/returns.twig */
class __TwigTemplate_76b8a6d7b2fe3c2b09b56f139ae62813 extends Template
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
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_filter"] ?? null);
        yield "\" onclick=\"\$('#filter-return').toggleClass('d-none');\" class=\"btn btn-light d-md-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-return\" formaction=\"";
        // line 8
        yield ($context["delete"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_delete"] ?? null);
        yield "\" onclick=\"return confirm('";
        yield ($context["text_confirm"] ?? null);
        yield "');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
      </div>
      <h1>";
        // line 10
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
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
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div id=\"filter-return\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 22
        yield ($context["text_filter"] ?? null);
        yield "</div>
          <div class=\"card-body\">
            <form id=\"form-filter\">
              <div class=\"mb-3\">
                <label for=\"input-return-id\" class=\"form-label\">";
        // line 26
        yield ($context["entry_return_id"] ?? null);
        yield "</label> <input type=\"text\" name=\"filter_return_id\" value=\"";
        yield ($context["filter_return_id"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_return_id"] ?? null);
        yield "\" id=\"input-return-id\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-order-id\" class=\"form-label\">";
        // line 29
        yield ($context["entry_order_id"] ?? null);
        yield "</label> <input type=\"text\" name=\"filter_order_id\" value=\"";
        yield ($context["filter_order_id"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_order_id"] ?? null);
        yield "\" id=\"input-order-id\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label class=\"form-label\">";
        // line 32
        yield ($context["entry_customer"] ?? null);
        yield "</label> <input type=\"text\" name=\"filter_customer\" value=\"";
        yield ($context["filter_customer"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_customer"] ?? null);
        yield "\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label class=\"form-label\">";
        // line 36
        yield ($context["entry_product"] ?? null);
        yield "</label> <input type=\"text\" name=\"filter_product\" value=\"";
        yield ($context["filter_product"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_product"] ?? null);
        yield "\" id=\"input-product\" data-oc-target=\"autocomplete-product\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-product\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label class=\"form-label\">";
        // line 40
        yield ($context["entry_model"] ?? null);
        yield "</label> <input type=\"text\" name=\"filter_model\" value=\"";
        yield ($context["filter_model"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_model"] ?? null);
        yield "\" id=\"input-model\" data-oc-target=\"autocomplete-model\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-model\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-return-status\" class=\"form-label\">";
        // line 44
        yield ($context["entry_return_status"] ?? null);
        yield "</label> <select name=\"filter_return_status_id\" id=\"input-return-status\" class=\"form-select\"style=\"width:100%;\">
                  <option value=\"\"></option>
                  ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 47
            yield "                    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 47);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 47) == ($context["filter_return_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 47);
            yield "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['return_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-date-from\" class=\"form-label\">";
        // line 52
        yield ($context["entry_date_from"] ?? null);
        yield "</label>
                <input type=\"date\" name=\"filter_date_from\" value=\"";
        // line 53
        yield ($context["filter_date_from"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_from"] ?? null);
        yield "\" id=\"input-date-from\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-date-to\" class=\"form-label\">";
        // line 56
        yield ($context["entry_date_to"] ?? null);
        yield "</label>
                <input type=\"date\" name=\"filter_date_to\" value=\"";
        // line 57
        yield ($context["filter_date_to"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_to"] ?? null);
        yield "\" id=\"input-date-to\" class=\"form-control\"/>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"style=\"color:white;background-color:#1872a2;border-color:#0b3349;\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 60
        yield ($context["button_filter"] ?? null);
        yield "</button>
                <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"";
        // line 61
        yield ($context["button_reset"] ?? null);
        yield "\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-filter-circle-xmark\"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class=\"col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> ";
        // line 69
        yield ($context["text_list"] ?? null);
        yield "</div>
          <div id=\"return\" class=\"card-body\">";
        // line 70
        yield ($context["list"] ?? null);
        yield "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#return').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#return').load(this.href);
});

\$('#button-filter').on('click', function() {
    url = '';

    var filter_return_id = \$('#input-return-id').val();

    if (filter_return_id) {
        url += '&filter_return_id=' + filter_return_id;
    }

    var filter_order_id = \$('#input-order-id').val();

    if (filter_order_id) {
        url += '&filter_order_id=' + filter_order_id;
    }

    var filter_customer = \$('#input-customer').val();

    if (filter_customer) {
        url += '&filter_customer=' + encodeURIComponent(filter_customer);
    }

    var filter_product = \$('#input-product').val();

    if (filter_product) {
        url += '&filter_product=' + encodeURIComponent(filter_product);
    }

    var filter_model = \$('#input-model').val();

    if (filter_model) {
        url += '&filter_model=' + encodeURIComponent(filter_model);
    }

    var filter_return_status_id = \$('#input-return-status').val();

    if (filter_return_status_id !== '') {
        url += '&filter_return_status_id=' + filter_return_status_id;
    }

    var filter_date_from = \$('#input-date-from').val();

    if (filter_date_from) {
        url += '&filter_date_from=' + encodeURIComponent(filter_date_from);
    }

    var filter_date_to = \$('#input-date-to').val();

    if (filter_date_to) {
        url += '&filter_date_to=' + encodeURIComponent(filter_date_to);
    }

    window.history.pushState({}, null, 'index.php?route=sale/returns&user_token=";
        // line 134
        yield ($context["user_token"] ?? null);
        yield "' + url);

    \$('#return').load('index.php?route=sale/returns.list&user_token=";
        // line 136
        yield ($context["user_token"] ?? null);
        yield "' + url);
});

\$('#input-customer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token=";
        // line 142
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-customer').val(decodeHTMLEntities(item['label']));
    }
});

\$('#input-product').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token=";
        // line 162
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
        \$('#input-product').val(decodeHTMLEntities(item['label']));
    }
});

\$('#input-model').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token=";
        // line 182
        yield ($context["user_token"] ?? null);
        yield "&filter_model=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['model'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-model').val(decodeHTMLEntities(item['label']));
    }
});
//--></script>
";
        // line 199
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
        return "admin/view/template/sale/returns.twig";
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
        return array (  378 => 199,  358 => 182,  335 => 162,  312 => 142,  303 => 136,  298 => 134,  231 => 70,  227 => 69,  216 => 61,  212 => 60,  204 => 57,  200 => 56,  192 => 53,  188 => 52,  183 => 49,  168 => 47,  164 => 46,  159 => 44,  148 => 40,  137 => 36,  126 => 32,  116 => 29,  106 => 26,  99 => 22,  90 => 15,  79 => 13,  75 => 12,  70 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_filter }}\" onclick=\"\$('#filter-return').toggleClass('d-none');\" class=\"btn btn-light d-md-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <a href=\"{{ add }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-return\" formaction=\"{{ delete }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_delete }}\" onclick=\"return confirm('{{ text_confirm }}');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
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
    <div class=\"row\">
      <div id=\"filter-return\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> {{ text_filter }}</div>
          <div class=\"card-body\">
            <form id=\"form-filter\">
              <div class=\"mb-3\">
                <label for=\"input-return-id\" class=\"form-label\">{{ entry_return_id }}</label> <input type=\"text\" name=\"filter_return_id\" value=\"{{ filter_return_id }}\" placeholder=\"{{ entry_return_id }}\" id=\"input-return-id\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-order-id\" class=\"form-label\">{{ entry_order_id }}</label> <input type=\"text\" name=\"filter_order_id\" value=\"{{ filter_order_id }}\" placeholder=\"{{ entry_order_id }}\" id=\"input-order-id\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label class=\"form-label\">{{ entry_customer }}</label> <input type=\"text\" name=\"filter_customer\" value=\"{{ filter_customer }}\" placeholder=\"{{ entry_customer }}\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label class=\"form-label\">{{ entry_product }}</label> <input type=\"text\" name=\"filter_product\" value=\"{{ filter_product }}\" placeholder=\"{{ entry_product }}\" id=\"input-product\" data-oc-target=\"autocomplete-product\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-product\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label class=\"form-label\">{{ entry_model }}</label> <input type=\"text\" name=\"filter_model\" value=\"{{ filter_model }}\" placeholder=\"{{ entry_model }}\" id=\"input-model\" data-oc-target=\"autocomplete-model\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-model\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-return-status\" class=\"form-label\">{{ entry_return_status }}</label> <select name=\"filter_return_status_id\" id=\"input-return-status\" class=\"form-select\"style=\"width:100%;\">
                  <option value=\"\"></option>
                  {% for return_status in return_statuses %}
                    <option value=\"{{ return_status.return_status_id }}\"{% if return_status.return_status_id == filter_return_status_id %} selected{% endif %}>{{ return_status.name }}</option>
                  {% endfor %}
                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-date-from\" class=\"form-label\">{{ entry_date_from }}</label>
                <input type=\"date\" name=\"filter_date_from\" value=\"{{ filter_date_from }}\" placeholder=\"{{ entry_date_from }}\" id=\"input-date-from\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-date-to\" class=\"form-label\">{{ entry_date_to }}</label>
                <input type=\"date\" name=\"filter_date_to\" value=\"{{ filter_date_to }}\" placeholder=\"{{ entry_date_to }}\" id=\"input-date-to\" class=\"form-control\"/>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"style=\"color:white;background-color:#1872a2;border-color:#0b3349;\"><i class=\"fa-solid fa-filter\"></i> {{ button_filter }}</button>
                <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"{{ button_reset }}\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-filter-circle-xmark\"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class=\"col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> {{ text_list }}</div>
          <div id=\"return\" class=\"card-body\">{{ list }}</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#return').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#return').load(this.href);
});

\$('#button-filter').on('click', function() {
    url = '';

    var filter_return_id = \$('#input-return-id').val();

    if (filter_return_id) {
        url += '&filter_return_id=' + filter_return_id;
    }

    var filter_order_id = \$('#input-order-id').val();

    if (filter_order_id) {
        url += '&filter_order_id=' + filter_order_id;
    }

    var filter_customer = \$('#input-customer').val();

    if (filter_customer) {
        url += '&filter_customer=' + encodeURIComponent(filter_customer);
    }

    var filter_product = \$('#input-product').val();

    if (filter_product) {
        url += '&filter_product=' + encodeURIComponent(filter_product);
    }

    var filter_model = \$('#input-model').val();

    if (filter_model) {
        url += '&filter_model=' + encodeURIComponent(filter_model);
    }

    var filter_return_status_id = \$('#input-return-status').val();

    if (filter_return_status_id !== '') {
        url += '&filter_return_status_id=' + filter_return_status_id;
    }

    var filter_date_from = \$('#input-date-from').val();

    if (filter_date_from) {
        url += '&filter_date_from=' + encodeURIComponent(filter_date_from);
    }

    var filter_date_to = \$('#input-date-to').val();

    if (filter_date_to) {
        url += '&filter_date_to=' + encodeURIComponent(filter_date_to);
    }

    window.history.pushState({}, null, 'index.php?route=sale/returns&user_token={{ user_token }}' + url);

    \$('#return').load('index.php?route=sale/returns.list&user_token={{ user_token }}' + url);
});

\$('#input-customer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-customer').val(decodeHTMLEntities(item['label']));
    }
});

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
        \$('#input-product').val(decodeHTMLEntities(item['label']));
    }
});

\$('#input-model').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token={{ user_token }}&filter_model=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['model'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-model').val(decodeHTMLEntities(item['label']));
    }
});
//--></script>
{{ footer }}
", "admin/view/template/sale/returns.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/admin/view/template/sale/returns.twig");
    }
}
