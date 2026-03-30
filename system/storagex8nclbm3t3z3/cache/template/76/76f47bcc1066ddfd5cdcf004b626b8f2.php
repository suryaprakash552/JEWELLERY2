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

/* admin/view/template/catalog/product.twig */
class __TwigTemplate_d71f2064fb5d0eb3b74058a4f626612e extends Template
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
        yield "\" onclick=\"\$('#filter-product').toggleClass('d-none');\" class=\"btn btn-light d-lg-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-product\" formaction=\"";
        // line 8
        yield ($context["copy"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_copy"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-regular fa-copy\"></i></button>
        <button type=\"submit\" form=\"form-product\" formaction=\"";
        // line 9
        yield ($context["delete"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_delete"] ?? null);
        yield "\" onclick=\"return confirm('";
        yield ($context["text_confirm"] ?? null);
        yield "');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
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
    <div class=\"row\">
      <!-- FILTER AREA -->
      <div class=\"col-12\">
        <div class=\"filter-bar\">
          <div class=\"card border-0\" style=\"background: linear-gradient(135deg, #1a2332 0%, #0f1419 100%);\">
            <div class=\"card-body p-0\">
              <form id=\"form-filter\">
                <div class=\"filter-grid\">

                  <!-- Product Name -->
                  <div class=\"field\">
                    ";
        // line 33
        yield "                    <input type=\"text\" name=\"filter_name\" value=\"";
        yield ($context["filter_name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" data-oc-target=\"autocomplete-name\" class=\"form-control\" autocomplete=\"off\"/>
                    <ul id=\"autocomplete-name\" class=\"dropdown-menu\" style=\"margin-top:40px;\"></ul>
                  </div>

                  <!-- Model -->
                  <div class=\"field\">
                    ";
        // line 40
        yield "                    <input type=\"text\" name=\"filter_model\" value=\"";
        yield ($context["filter_model"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_model"] ?? null);
        yield "\" id=\"input-model\" data-oc-target=\"autocomplete-model\" class=\"form-control\" autocomplete=\"off\"/>
                    <ul id=\"autocomplete-model\" class=\"dropdown-menu\" style=\"margin-top:40px;\"></ul>
                  </div>
                  <div class=\"filter-item\">
                ";
        // line 45
        yield "                <input type=\"text\"
                   name=\"filter_box_id\"
                   value=\"";
        // line 47
        yield ($context["filter_box_id"] ?? null);
        yield "\"
                   placeholder=\"Box ID\"
                   data-oc-target=\"autocomplete-box-id\"
                   id=\"input-box-id\"
                   class=\"form-control\">
                   <ul id=\"autocomplete-box-id\" class=\"dropdown-menu\"></ul>
            </div>
            <div class=\"filter-item\">
                ";
        // line 56
        yield "                <input type=\"text\" name=\"filter_rack_code\"
                       value=\"";
        // line 57
        yield ($context["filter_rack_code"] ?? null);
        yield "\"
                       id=\"input-rack-code\"
                       placeholder=\"Rack code\"
                       data-oc-target=\"autocomplete-rack-code\"
                       class=\"form-control\">
                <ul id=\"autocomplete-rack-code\" class=\"dropdown-menu\"></ul>
            </div>
                <div class=\"filter-item\">
                    <input type=\"text\"
                           name=\"filter_barcode\"
                           value=\"";
        // line 67
        yield ($context["filter_barcode"] ?? null);
        yield "\"
                           id=\"input-barcode\"
                           placeholder=\"Barcode (SKU / UPC)\"
                           class=\"form-control\">
                           <ul id=\"autocomplete-barcode\" class=\"dropdown-menu\"></ul>
                </div>

                  <!-- Category -->
                  <div class=\"field\">
                    ";
        // line 77
        yield "                    <input type=\"text\" name=\"filter_category\" value=\"";
        yield ($context["filter_category"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_category"] ?? null);
        yield "\" id=\"input-category\" data-oc-target=\"autocomplete-category\" class=\"form-control\" autocomplete=\"off\"/>
                    <input type=\"hidden\" name=\"filter_category_id\" value=\"";
        // line 78
        yield ($context["filter_category_id"] ?? null);
        yield "\" id=\"input-category-id\"/>
                    <ul id=\"autocomplete-category\" class=\"dropdown-menu\"style=\"margin-top:40px;\"></ul>
                  </div>

                  <!-- Manufacturer -->
                  ";
        // line 103
        yield "
                  <!-- Quantity Range (span 2 columns) -->
                  ";
        // line 106
        yield "                  ";
        // line 107
        yield "                  ";
        // line 108
        yield "                  ";
        // line 109
        yield "                  ";
        // line 110
        yield "                  ";
        // line 111
        yield "                  ";
        // line 112
        yield "                  ";
        // line 113
        yield "                  ";
        // line 114
        yield "                  ";
        // line 115
        yield "                  ";
        // line 116
        yield "                  ";
        // line 117
        yield "
                  <!-- Status -->
                  <div class=\"field\"style=\"margin-top:-12px;\">
                    <label for=\"input-status\" class=\"form-label\">";
        // line 120
        yield ($context["entry_status"] ?? null);
        yield "</label>
                    <select name=\"filter_status\" id=\"input-status\" class=\"form-select\" style=\"width:100%;\">
                      <option value=\"\"></option>
                      <option value=\"1\"";
        // line 123
        if ((($context["filter_status"] ?? null) == "1")) {
            yield " selected";
        }
        yield "style=\"color:black;\">";
        yield ($context["text_enabled"] ?? null);
        yield "</option>
                      <option value=\"0\"";
        // line 124
        if ((($context["filter_status"] ?? null) == "0")) {
            yield " selected";
        }
        yield "style=\"color:black;\">";
        yield ($context["text_disabled"] ?? null);
        yield "</option>
                    </select>
                  </div>

                  <!-- Buttons (aligned to right on desktop) -->
                 <div class=\"field status-and-buttons\">
  <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\">
    <i class=\"fa-solid fa-filter\"></i> ";
        // line 131
        yield ($context["button_filter"] ?? null);
        yield "
  </button>

  <button type=\"reset\"
          data-bs-toggle=\"tooltip\"
          title=\"";
        // line 136
        yield ($context["button_reset"] ?? null);
        yield "\"
          class=\"btn btn-outline-secondary btn-reset\">
    <i class=\"fa-solid fa-filter-circle-xmark\"></i>
  </button>
</div>


                </div> <!-- /.filter-grid -->
              </form>
            </div>
          </div>
        </div>
      </div> <!-- /.col filter -->

  <!-- PRODUCT LIST -->
  <div class=\"col-12\">
    <div class=\"card mt-2\" style=\"background:#0f1724;\">
      <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> ";
        // line 153
        yield ($context["text_list"] ?? null);
        yield "</div>
      <div id=\"product\" class=\"card-body\">
        ";
        // line 156
        yield "        ";
        yield ($context["list"] ?? null);
        yield "
      </div>
 <style>
 /* FILTER BAR */
.filter-bar {
  background: linear-gradient(135deg, #1a2332 0%, #0f1419 100%);
  padding: 12px 14px;              /* ⬅ reduced */
  border-radius: 8px;
  margin-bottom: 12px;
  color: #fff;
}

/* GRID LAYOUT */
.filter-grid {
  display: grid;
  grid-template-columns: repeat(6, 1fr);  /* ⬅ more columns = compact */
  gap: 10px 16px;                          /* ⬅ reduced gaps */
  align-items: end;
}

/* FIELDS */
.filter-grid .field {
  display: flex;
  flex-direction: column;
  gap: 4px;
}

/* RANGE FIELDS */
.filter-grid .range {
  grid-column: span 2;
}

/* LABEL */
.filter-bar .form-label {
  font-size: 12px;       /* ⬅ smaller */
  font-weight: 500;
  margin: 0;
  color: #e5e7eb;
}

/* INPUTS & SELECTS */
.filter-bar input.form-control,
.filter-bar select.form-select {
  height: 32px;          /* ⬅ smaller height */
  padding: 4px 10px;
  border-radius: 14px;
  font-size: 13px;
  background: #fff;
  color: #000;
  border: 1px solid #d1d5db;
}

/* RANGE DASH */
.range .col-auto.col-form-label {
  padding: 0 6px;
  font-size: 12px;
  color: #fff;
}

/* BUTTON CONTAINER — FORCE SIDE BY SIDE */
.field.status-and-buttons {
  display: flex;
  flex-direction: row;      
  align-items: center;  
  gap: 10px;
  flex-wrap: nowrap; 
  margin-top:15px;
}

/* FILTER BUTTON */
#button-filter {
  height: 34px;
  padding: 0 18px;
  border-radius: 18px;
  font-size: 13px;

  display: inline-flex;
  align-items: center;
  justify-content: center;
  color:white;
  background-color:#1872a2;
  border-color:#0b3349;
}

/* RESET BUTTON (CIRCLE ICON) */
.btn-reset {
  height: 34px;
  width: 34px;              /* 🔥 keeps it circular */
  padding: 0;
  border-radius: 50%;

  display: inline-flex;
  align-items: center;
  justify-content: center;
}



/* DESKTOP → ONE LINE */
@media (min-width: 1200px) {
  .filter-grid {
    grid-template-columns: repeat(8, 1fr);
  }
}

/* TABLET → TWO LINES */
@media (max-width: 1199px) {
  .filter-grid {
    grid-template-columns: repeat(4, 1fr);
  }
}

/* MOBILE */
@media (max-width: 768px) {
  .filter-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}


/* ========= NUCLEAR OPTION - APPEND TO BODY ========= */
/* This moves the dropdown visually on top of everything */
body > .ui-autocomplete,
body > ul.ui-autocomplete {
  z-index: 2147483647 !important;
  position: absolute !important;
}

/* Force all parent divs to not create stacking context */
* {
  isolation: auto !important;
}

div:not(.ui-autocomplete):not(.ui-menu) {
  contain: none !important;
}
</style>
<script type=\"text/javascript\"><!--
\$('#product').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#product').load(this.href);
});

\$('#button-filter').on('click', function() {
    var url = '';

    var filter_name = \$('#input-name').val();

    if (filter_name) {
        url += '&filter_name=' + encodeURIComponent(filter_name);
    }

    var filter_model = \$('#input-model').val();

    if (filter_model) {
        url += '&filter_model=' + encodeURIComponent(filter_model);
    }
    var filter_box_id = \$('#input-box-id').val();

    if (filter_box_id) {
        url += '&filter_box_id=' + encodeURIComponent(filter_box_id);
    }
    var filter_rack_code = \$('#input-rack-code').val();

    if (filter_rack_code) {
        url += '&filter_rack_code=' + encodeURIComponent(filter_rack_code);
    }
    var filter_barcode = \$('#input-barcode').val();

    if (filter_barcode) {
        url += '&filter_barcode=' + encodeURIComponent(filter_barcode);
    }

    var filter_category_id = \$('#input-category-id').val();

    if (filter_category_id) {
        url += '&filter_category_id=' + filter_category_id;
\t}

    var filter_manufacturer_id = \$('#input-manufacturer-id').val();

    if (filter_manufacturer_id) {
        url += '&filter_manufacturer_id=' + filter_manufacturer_id;
    }

    var filter_price_from = \$('#input-price-from').val();

    if (filter_price_from) {
        url += '&filter_price_from=' + encodeURIComponent(filter_price_from);
    }

    var filter_price_to = \$('#input-price-to').val();

    if (filter_price_to) {
        url += '&filter_price_to=' + encodeURIComponent(filter_price_to);
    }

    var filter_quantity_from = \$('#input-quantity-from').val();

    if (filter_quantity_from) {
        url += '&filter_quantity_from=' + filter_quantity_from;
    }

    var filter_quantity_to = \$('#input-quantity-to').val();

    if (filter_quantity_to) {
        url += '&filter_quantity_to=' + filter_quantity_to;
    }

    var filter_status = \$('#input-status').val();

    if (filter_status !== '') {
        url += '&filter_status=' + filter_status;
    }

    window.history.pushState({}, null, 'index.php?route=catalog/product&user_token=";
        // line 372
        yield ($context["user_token"] ?? null);
        yield "' + url);

    \$('#product').load('index.php?route=catalog/product.list&user_token=";
        // line 374
        yield ($context["user_token"] ?? null);
        yield "' + url);
});

// Helper: returns the field wrapper element for a given input id
function fieldWrapperFor(inputSelector) {
    var \$inp = \$(inputSelector);
    var \$field = \$inp.closest('.field');
    return \$field.length ? \$field : \$inp.parent();
}

/* ---------- Autocomplete initializations with appendTo set ---------- */

\$('#input-name').autocomplete({
    appendTo: fieldWrapperFor('#input-name'), // ensure menu is inside .field
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token=";
        // line 390
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
        \$('#input-name').val(decodeHTMLEntities(item['label']));
    }
});

\$('#input-model').autocomplete({
    appendTo: fieldWrapperFor('#input-model'),
    source: function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token=";
        // line 411
        yield ($context["user_token"] ?? null);
        yield "&filter_model=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['model'],
                        value: item['model']
                    };
                }));
            }
        });
    },
    select: function(item) {
        \$('#input-model').val(decodeHTMLEntities(item.value));
    }
});


\$('#input-category').autocomplete({
    appendTo: fieldWrapperFor('#input-category'),
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/category.autocomplete&user_token=";
        // line 433
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    name: '";
        // line 437
        yield ($context["text_none"] ?? null);
        yield "',
                    category_id: '',
                });

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
        if (item['value']) {
            \$('#input-category').val(decodeHTMLEntities(item['label']));
            \$('#input-category-id').val(item['value']);
        } else {
            \$('#input-category').val('');
            \$('#input-category-id').val('');
        }
    }
});

\$('#input-manufacturer').autocomplete({
    appendTo: fieldWrapperFor('#input-manufacturer'),
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/manufacturer.autocomplete&user_token=";
        // line 465
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    name: '";
        // line 469
        yield ($context["text_none"] ?? null);
        yield "',
                    category_id: '',
                });

                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['manufacturer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        if (item['value']) {
            \$('#input-manufacturer').val(decodeHTMLEntities(item['label']));
            \$('#input-manufacturer-id').val(item['value']);
        } else {
            \$('#input-manufacturer').val('');
            \$('#input-manufacturer-id').val('');
        }
    }
});
 \$('#input-rack-code').autocomplete({
    minLength: 1,

    source: function (request, response) {
        \$.ajax({
            url: 'index.php?route=extension/purpletree_pos/pos/posproduct|autocomplete'
                + '&user_token=";
        // line 498
        yield ($context["user_token"] ?? null);
        yield "'
                + '&filter_rack_code=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {

                const seen = {};
                const unique = [];

                \$.each(json, function (i, item) {
                    if (item.rack_code && !seen[item.rack_code]) {
                        seen[item.rack_code] = true;
                        unique.push({
                            label: item.rack_code,
                            value: item.rack_code
                        });
                    }
                });

                response(unique);
            }
        });
    },

    select: function (item) {
        \$('#input-rack-code').val(item.label);
    }
});


\$('#input-box-id').autocomplete({
    minLength: 1,

    source: function (request, response) {
        \$.ajax({
            url: 'index.php?route=extension/purpletree_pos/pos/posproduct|autocomplete'
                + '&user_token=";
        // line 533
        yield ($context["user_token"] ?? null);
        yield "'
                + '&filter_box_id=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {

                const seen = {};
                const unique = [];

                \$.each(json, function (i, item) {
                    if (item.box_id && !seen[item.box_id]) {
                        seen[item.box_id] = true;
                        unique.push({
                            label: item.box_id,
                            value: item.box_id
                        });
                    }
                });

                response(unique);
            }
        });
    },

    // 🔥 THIS IS THE KEY FIX
    select: function (item) {
        \$('#input-box-id').val(item.label);
    }
});


/* Safety: if autocomplete plugin appended menus outside the .field already,
   move them into the correct wrapper on DOM ready (harmless if not needed). */

//--></script>
<script type=\"text/javascript\">
\$(document).on('click', '.btn-reset', function (e) {
    e.preventDefault();

    // Clear text filters
    \$('#input-name').val('');
    \$('#input-model').val('');
    \$('#input-box-id').val('');
    \$('#input-rack-code').val('');
    \$('#input-barcode').val('');

    // 🔥 Reset CATEGORY (IMPORTANT)
    \$('input[name=\"filter_category\"]').val('');        // visible input
    \$('input[name=\"filter_category_id\"]').val('');     // hidden input

    // Reset STATUS dropdown
    \$('#input-status').prop('selectedIndex', 0).trigger('change');

    // Reset URL
    window.history.pushState(
        {},
        null,
        'index.php?route=catalog/product&user_token=";
        // line 589
        yield ($context["user_token"] ?? null);
        yield "'
    );

    // Reload only product list
    \$('#product').load(
        'index.php?route=catalog/product.list&user_token=";
        // line 594
        yield ($context["user_token"] ?? null);
        yield "'
    );
});
</script>

";
        // line 599
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
        return "admin/view/template/catalog/product.twig";
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
        return array (  769 => 599,  761 => 594,  753 => 589,  694 => 533,  656 => 498,  624 => 469,  617 => 465,  586 => 437,  579 => 433,  554 => 411,  530 => 390,  511 => 374,  506 => 372,  286 => 156,  281 => 153,  261 => 136,  253 => 131,  239 => 124,  231 => 123,  225 => 120,  220 => 117,  218 => 116,  216 => 115,  214 => 114,  212 => 113,  210 => 112,  208 => 111,  206 => 110,  204 => 109,  202 => 108,  200 => 107,  198 => 106,  194 => 103,  186 => 78,  179 => 77,  167 => 67,  154 => 57,  151 => 56,  140 => 47,  136 => 45,  126 => 40,  114 => 33,  96 => 16,  85 => 14,  81 => 13,  76 => 11,  67 => 9,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_filter }}\" onclick=\"\$('#filter-product').toggleClass('d-none');\" class=\"btn btn-light d-lg-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <a href=\"{{ add }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-product\" formaction=\"{{ copy }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_copy }}\" class=\"btn btn-light\"><i class=\"fa-regular fa-copy\"></i></button>
        <button type=\"submit\" form=\"form-product\" formaction=\"{{ delete }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_delete }}\" onclick=\"return confirm('{{ text_confirm }}');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
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
      <!-- FILTER AREA -->
      <div class=\"col-12\">
        <div class=\"filter-bar\">
          <div class=\"card border-0\" style=\"background: linear-gradient(135deg, #1a2332 0%, #0f1419 100%);\">
            <div class=\"card-body p-0\">
              <form id=\"form-filter\">
                <div class=\"filter-grid\">

                  <!-- Product Name -->
                  <div class=\"field\">
                    {#<label for=\"input-name\" class=\"form-label\">{{ entry_name }}</label>#}
                    <input type=\"text\" name=\"filter_name\" value=\"{{ filter_name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name\" data-oc-target=\"autocomplete-name\" class=\"form-control\" autocomplete=\"off\"/>
                    <ul id=\"autocomplete-name\" class=\"dropdown-menu\" style=\"margin-top:40px;\"></ul>
                  </div>

                  <!-- Model -->
                  <div class=\"field\">
                    {#<label for=\"input-model\" class=\"form-label\">{{ entry_model }}</label>#}
                    <input type=\"text\" name=\"filter_model\" value=\"{{ filter_model }}\" placeholder=\"{{ entry_model }}\" id=\"input-model\" data-oc-target=\"autocomplete-model\" class=\"form-control\" autocomplete=\"off\"/>
                    <ul id=\"autocomplete-model\" class=\"dropdown-menu\" style=\"margin-top:40px;\"></ul>
                  </div>
                  <div class=\"filter-item\">
                {#<label for=\"input-quantity\">{{ entry_quantity }}</label>#}
                <input type=\"text\"
                   name=\"filter_box_id\"
                   value=\"{{ filter_box_id }}\"
                   placeholder=\"Box ID\"
                   data-oc-target=\"autocomplete-box-id\"
                   id=\"input-box-id\"
                   class=\"form-control\">
                   <ul id=\"autocomplete-box-id\" class=\"dropdown-menu\"></ul>
            </div>
            <div class=\"filter-item\">
                {#<label>Rack Code</label>#}
                <input type=\"text\" name=\"filter_rack_code\"
                       value=\"{{ filter_rack_code }}\"
                       id=\"input-rack-code\"
                       placeholder=\"Rack code\"
                       data-oc-target=\"autocomplete-rack-code\"
                       class=\"form-control\">
                <ul id=\"autocomplete-rack-code\" class=\"dropdown-menu\"></ul>
            </div>
                <div class=\"filter-item\">
                    <input type=\"text\"
                           name=\"filter_barcode\"
                           value=\"{{ filter_barcode }}\"
                           id=\"input-barcode\"
                           placeholder=\"Barcode (SKU / UPC)\"
                           class=\"form-control\">
                           <ul id=\"autocomplete-barcode\" class=\"dropdown-menu\"></ul>
                </div>

                  <!-- Category -->
                  <div class=\"field\">
                    {#<label for=\"input-category\" class=\"form-label\">{{ entry_category }}</label>#}
                    <input type=\"text\" name=\"filter_category\" value=\"{{ filter_category }}\" placeholder=\"{{ entry_category }}\" id=\"input-category\" data-oc-target=\"autocomplete-category\" class=\"form-control\" autocomplete=\"off\"/>
                    <input type=\"hidden\" name=\"filter_category_id\" value=\"{{ filter_category_id }}\" id=\"input-category-id\"/>
                    <ul id=\"autocomplete-category\" class=\"dropdown-menu\"style=\"margin-top:40px;\"></ul>
                  </div>

                  <!-- Manufacturer -->
                  {#<div class=\"field\">
                    <label for=\"input-manufacturer\" class=\"form-label\">{{ entry_manufacturer }}</label>
                    <input type=\"text\" name=\"filter_manufacturer\" value=\"{{ filter_manufacturer }}\" placeholder=\"{{ entry_manufacturer }}\" id=\"input-manufacturer\" data-oc-target=\"autocomplete-manufacturer\" class=\"form-control\" autocomplete=\"off\"/>
                    <input type=\"hidden\" name=\"filter_manufacturer_id\" value=\"{{ filter_manufacturer_id }}\" id=\"input-manufacturer-id\"/>
                    <ul id=\"autocomplete-manufacturer\" class=\"dropdown-menu\"style=\"margin-top:40px;\"></ul>
                  </div>

                  <!-- Price Range (span 2 columns) -->
                  <div class=\"field range\">
                    <label for=\"input-price-from\" class=\"form-label\">{{ entry_price }}</label>
                    <div class=\"row g-0\">
                      <div class=\"col\">
                        <input type=\"text\" name=\"filter_price_from\" value=\"{{ filter_price_from }}\" placeholder=\"{{ text_from }}\" id=\"input-price-from\" class=\"form-control\"/>
                      </div>
                      <label class=\"col-auto col-form-label px-2\"><i class=\"fa-solid fa-minus\"></i></label>
                      <div class=\"col\">
                        <input type=\"text\" name=\"filter_price_to\" value=\"{{ filter_price_to }}\" placeholder=\"{{ text_to }}\" id=\"input-price-to\" class=\"form-control\"/>
                      </div>
                    </div>
                  </div>#}

                  <!-- Quantity Range (span 2 columns) -->
                  {#<div class=\"field range\">#}
                  {#  <label for=\"input-quantity-from\" class=\"form-label\">{{ entry_quantity }}</label>#}
                  {#  <div class=\"row g-0\">#}
                  {#    <div class=\"col\">#}
                  {#      <input type=\"text\" name=\"filter_quantity_from\" value=\"{{ filter_quantity_from }}\" placeholder=\"{{ text_from }}\" id=\"input-quantity-from\" class=\"form-control\"/>#}
                  {#    </div>#}
                  {#    <label class=\"col-auto col-form-label px-2\"><i class=\"fa-solid fa-minus\"></i></label>#}
                  {#    <div class=\"col\">#}
                  {#      <input type=\"text\" name=\"filter_quantity_to\" value=\"{{ filter_quantity_to }}\" placeholder=\"{{ text_to }}\" id=\"input-quantity-to\" class=\"form-control\"/>#}
                  {#    </div>#}
                  {#  </div>#}
                  {#</div>#}

                  <!-- Status -->
                  <div class=\"field\"style=\"margin-top:-12px;\">
                    <label for=\"input-status\" class=\"form-label\">{{ entry_status }}</label>
                    <select name=\"filter_status\" id=\"input-status\" class=\"form-select\" style=\"width:100%;\">
                      <option value=\"\"></option>
                      <option value=\"1\"{% if filter_status == '1' %} selected{% endif %}style=\"color:black;\">{{ text_enabled }}</option>
                      <option value=\"0\"{% if filter_status == '0' %} selected{% endif %}style=\"color:black;\">{{ text_disabled }}</option>
                    </select>
                  </div>

                  <!-- Buttons (aligned to right on desktop) -->
                 <div class=\"field status-and-buttons\">
  <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\">
    <i class=\"fa-solid fa-filter\"></i> {{ button_filter }}
  </button>

  <button type=\"reset\"
          data-bs-toggle=\"tooltip\"
          title=\"{{ button_reset }}\"
          class=\"btn btn-outline-secondary btn-reset\">
    <i class=\"fa-solid fa-filter-circle-xmark\"></i>
  </button>
</div>


                </div> <!-- /.filter-grid -->
              </form>
            </div>
          </div>
        </div>
      </div> <!-- /.col filter -->

  <!-- PRODUCT LIST -->
  <div class=\"col-12\">
    <div class=\"card mt-2\" style=\"background:#0f1724;\">
      <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> {{ text_list }}</div>
      <div id=\"product\" class=\"card-body\">
        {# The server-generated product list HTML will be inserted here as before #}
        {{ list }}
      </div>
 <style>
 /* FILTER BAR */
.filter-bar {
  background: linear-gradient(135deg, #1a2332 0%, #0f1419 100%);
  padding: 12px 14px;              /* ⬅ reduced */
  border-radius: 8px;
  margin-bottom: 12px;
  color: #fff;
}

/* GRID LAYOUT */
.filter-grid {
  display: grid;
  grid-template-columns: repeat(6, 1fr);  /* ⬅ more columns = compact */
  gap: 10px 16px;                          /* ⬅ reduced gaps */
  align-items: end;
}

/* FIELDS */
.filter-grid .field {
  display: flex;
  flex-direction: column;
  gap: 4px;
}

/* RANGE FIELDS */
.filter-grid .range {
  grid-column: span 2;
}

/* LABEL */
.filter-bar .form-label {
  font-size: 12px;       /* ⬅ smaller */
  font-weight: 500;
  margin: 0;
  color: #e5e7eb;
}

/* INPUTS & SELECTS */
.filter-bar input.form-control,
.filter-bar select.form-select {
  height: 32px;          /* ⬅ smaller height */
  padding: 4px 10px;
  border-radius: 14px;
  font-size: 13px;
  background: #fff;
  color: #000;
  border: 1px solid #d1d5db;
}

/* RANGE DASH */
.range .col-auto.col-form-label {
  padding: 0 6px;
  font-size: 12px;
  color: #fff;
}

/* BUTTON CONTAINER — FORCE SIDE BY SIDE */
.field.status-and-buttons {
  display: flex;
  flex-direction: row;      
  align-items: center;  
  gap: 10px;
  flex-wrap: nowrap; 
  margin-top:15px;
}

/* FILTER BUTTON */
#button-filter {
  height: 34px;
  padding: 0 18px;
  border-radius: 18px;
  font-size: 13px;

  display: inline-flex;
  align-items: center;
  justify-content: center;
  color:white;
  background-color:#1872a2;
  border-color:#0b3349;
}

/* RESET BUTTON (CIRCLE ICON) */
.btn-reset {
  height: 34px;
  width: 34px;              /* 🔥 keeps it circular */
  padding: 0;
  border-radius: 50%;

  display: inline-flex;
  align-items: center;
  justify-content: center;
}



/* DESKTOP → ONE LINE */
@media (min-width: 1200px) {
  .filter-grid {
    grid-template-columns: repeat(8, 1fr);
  }
}

/* TABLET → TWO LINES */
@media (max-width: 1199px) {
  .filter-grid {
    grid-template-columns: repeat(4, 1fr);
  }
}

/* MOBILE */
@media (max-width: 768px) {
  .filter-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}


/* ========= NUCLEAR OPTION - APPEND TO BODY ========= */
/* This moves the dropdown visually on top of everything */
body > .ui-autocomplete,
body > ul.ui-autocomplete {
  z-index: 2147483647 !important;
  position: absolute !important;
}

/* Force all parent divs to not create stacking context */
* {
  isolation: auto !important;
}

div:not(.ui-autocomplete):not(.ui-menu) {
  contain: none !important;
}
</style>
<script type=\"text/javascript\"><!--
\$('#product').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#product').load(this.href);
});

\$('#button-filter').on('click', function() {
    var url = '';

    var filter_name = \$('#input-name').val();

    if (filter_name) {
        url += '&filter_name=' + encodeURIComponent(filter_name);
    }

    var filter_model = \$('#input-model').val();

    if (filter_model) {
        url += '&filter_model=' + encodeURIComponent(filter_model);
    }
    var filter_box_id = \$('#input-box-id').val();

    if (filter_box_id) {
        url += '&filter_box_id=' + encodeURIComponent(filter_box_id);
    }
    var filter_rack_code = \$('#input-rack-code').val();

    if (filter_rack_code) {
        url += '&filter_rack_code=' + encodeURIComponent(filter_rack_code);
    }
    var filter_barcode = \$('#input-barcode').val();

    if (filter_barcode) {
        url += '&filter_barcode=' + encodeURIComponent(filter_barcode);
    }

    var filter_category_id = \$('#input-category-id').val();

    if (filter_category_id) {
        url += '&filter_category_id=' + filter_category_id;
\t}

    var filter_manufacturer_id = \$('#input-manufacturer-id').val();

    if (filter_manufacturer_id) {
        url += '&filter_manufacturer_id=' + filter_manufacturer_id;
    }

    var filter_price_from = \$('#input-price-from').val();

    if (filter_price_from) {
        url += '&filter_price_from=' + encodeURIComponent(filter_price_from);
    }

    var filter_price_to = \$('#input-price-to').val();

    if (filter_price_to) {
        url += '&filter_price_to=' + encodeURIComponent(filter_price_to);
    }

    var filter_quantity_from = \$('#input-quantity-from').val();

    if (filter_quantity_from) {
        url += '&filter_quantity_from=' + filter_quantity_from;
    }

    var filter_quantity_to = \$('#input-quantity-to').val();

    if (filter_quantity_to) {
        url += '&filter_quantity_to=' + filter_quantity_to;
    }

    var filter_status = \$('#input-status').val();

    if (filter_status !== '') {
        url += '&filter_status=' + filter_status;
    }

    window.history.pushState({}, null, 'index.php?route=catalog/product&user_token={{ user_token }}' + url);

    \$('#product').load('index.php?route=catalog/product.list&user_token={{ user_token }}' + url);
});

// Helper: returns the field wrapper element for a given input id
function fieldWrapperFor(inputSelector) {
    var \$inp = \$(inputSelector);
    var \$field = \$inp.closest('.field');
    return \$field.length ? \$field : \$inp.parent();
}

/* ---------- Autocomplete initializations with appendTo set ---------- */

\$('#input-name').autocomplete({
    appendTo: fieldWrapperFor('#input-name'), // ensure menu is inside .field
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
        \$('#input-name').val(decodeHTMLEntities(item['label']));
    }
});

\$('#input-model').autocomplete({
    appendTo: fieldWrapperFor('#input-model'),
    source: function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token={{ user_token }}&filter_model=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['model'],
                        value: item['model']
                    };
                }));
            }
        });
    },
    select: function(item) {
        \$('#input-model').val(decodeHTMLEntities(item.value));
    }
});


\$('#input-category').autocomplete({
    appendTo: fieldWrapperFor('#input-category'),
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/category.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    name: '{{ text_none }}',
                    category_id: '',
                });

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
        if (item['value']) {
            \$('#input-category').val(decodeHTMLEntities(item['label']));
            \$('#input-category-id').val(item['value']);
        } else {
            \$('#input-category').val('');
            \$('#input-category-id').val('');
        }
    }
});

\$('#input-manufacturer').autocomplete({
    appendTo: fieldWrapperFor('#input-manufacturer'),
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/manufacturer.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    name: '{{ text_none }}',
                    category_id: '',
                });

                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['manufacturer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        if (item['value']) {
            \$('#input-manufacturer').val(decodeHTMLEntities(item['label']));
            \$('#input-manufacturer-id').val(item['value']);
        } else {
            \$('#input-manufacturer').val('');
            \$('#input-manufacturer-id').val('');
        }
    }
});
 \$('#input-rack-code').autocomplete({
    minLength: 1,

    source: function (request, response) {
        \$.ajax({
            url: 'index.php?route=extension/purpletree_pos/pos/posproduct|autocomplete'
                + '&user_token={{ user_token }}'
                + '&filter_rack_code=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {

                const seen = {};
                const unique = [];

                \$.each(json, function (i, item) {
                    if (item.rack_code && !seen[item.rack_code]) {
                        seen[item.rack_code] = true;
                        unique.push({
                            label: item.rack_code,
                            value: item.rack_code
                        });
                    }
                });

                response(unique);
            }
        });
    },

    select: function (item) {
        \$('#input-rack-code').val(item.label);
    }
});


\$('#input-box-id').autocomplete({
    minLength: 1,

    source: function (request, response) {
        \$.ajax({
            url: 'index.php?route=extension/purpletree_pos/pos/posproduct|autocomplete'
                + '&user_token={{ user_token }}'
                + '&filter_box_id=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {

                const seen = {};
                const unique = [];

                \$.each(json, function (i, item) {
                    if (item.box_id && !seen[item.box_id]) {
                        seen[item.box_id] = true;
                        unique.push({
                            label: item.box_id,
                            value: item.box_id
                        });
                    }
                });

                response(unique);
            }
        });
    },

    // 🔥 THIS IS THE KEY FIX
    select: function (item) {
        \$('#input-box-id').val(item.label);
    }
});


/* Safety: if autocomplete plugin appended menus outside the .field already,
   move them into the correct wrapper on DOM ready (harmless if not needed). */

//--></script>
<script type=\"text/javascript\">
\$(document).on('click', '.btn-reset', function (e) {
    e.preventDefault();

    // Clear text filters
    \$('#input-name').val('');
    \$('#input-model').val('');
    \$('#input-box-id').val('');
    \$('#input-rack-code').val('');
    \$('#input-barcode').val('');

    // 🔥 Reset CATEGORY (IMPORTANT)
    \$('input[name=\"filter_category\"]').val('');        // visible input
    \$('input[name=\"filter_category_id\"]').val('');     // hidden input

    // Reset STATUS dropdown
    \$('#input-status').prop('selectedIndex', 0).trigger('change');

    // Reset URL
    window.history.pushState(
        {},
        null,
        'index.php?route=catalog/product&user_token={{ user_token }}'
    );

    // Reload only product list
    \$('#product').load(
        'index.php?route=catalog/product.list&user_token={{ user_token }}'
    );
});
</script>

{{ footer }}
", "admin/view/template/catalog/product.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/admin/view/template/catalog/product.twig");
    }
}
