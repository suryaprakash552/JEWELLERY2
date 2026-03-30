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

/* admin/view/template/catalog/category.twig */
class __TwigTemplate_80d46a9010a442f5f3a00e2e9fff9f87 extends Template
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
        <button id=\"filter-category-button\" type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_filter"] ?? null);
        yield "\" onclick=\"\$('#filter-category').toggleClass('d-none');\" class=\"btn btn-light d-lg-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <button type=\"button\" id=\"button-repair\" data-bs-toggle=\"tooltip\" title=\"";
        // line 7
        yield ($context["button_rebuild"] ?? null);
        yield "\" class=\"btn btn-warning\"><i class=\"fa-solid fa-rotate\"></i></button>
        <a href=\"";
        // line 8
        yield ($context["add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-category\" formaction=\"";
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
      <div id=\"filter-category\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 24
        yield ($context["text_filter"] ?? null);
        yield "</div>
          <div class=\"card-body\">
            <form id=\"form-filter\">
              <div class=\"mb-3\">
                ";
        // line 29
        yield "                <input type=\"text\" name=\"filter_name\" value=\"";
        yield ($context["filter_name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" data-oc-target=\"autocomplete-name\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-name\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-status\" class=\"form-label\">";
        // line 33
        yield ($context["entry_status"] ?? null);
        yield "</label>
                <select name=\"filter_status\" id=\"input-status\" class=\"form-select\">
                  <option value=\"\"></option>
                  <option value=\"1\"";
        // line 36
        if ((($context["filter_status"] ?? null) == "1")) {
            yield " selected";
        }
        yield "style=\"color:black;\">";
        yield ($context["text_enabled"] ?? null);
        yield "</option>
                  <option value=\"0\"";
        // line 37
        if ((($context["filter_status"] ?? null) == "0")) {
            yield " selected";
        }
        yield "style=\"color:black;\">";
        yield ($context["text_disabled"] ?? null);
        yield "</option>
                </select>
              </div>
              <div class=\"text-end\" style=\"margin-bottom:16px\">
                <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\" style=\"color:white;background-color:#1872a2;border-color:#0b3349;\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 41
        yield ($context["button_filter"] ?? null);
        yield "</button>
               <button type=\"button\"
        id=\"button-reset\"
        data-bs-toggle=\"tooltip\"
        title=\"";
        // line 45
        yield ($context["button_reset"] ?? null);
        yield "\"
        class=\"btn btn-outline-secondary\">
    <i class=\"fa-solid fa-filter-circle-xmark\"></i>
</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class=\"col col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> ";
        // line 56
        yield ($context["text_list"] ?? null);
        yield "</div>
          <div id=\"category\" class=\"card-body\">";
        // line 57
        yield ($context["list"] ?? null);
        yield "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<style>
.container-fluid .row {
  display: flex !important;
  flex-direction: column !important;
  gap: 0.8rem;
  align-items: stretch;
}

#filter-category {
  order: -1 !important;
  width: 100% !important;
  margin: 0 !important;
  position: relative !important;
  left: auto !important;
  right: auto !important;
  top: auto !important;
  box-sizing: border-box !important;
}

.container-fluid .row > div:not(#filter-category) {
  order: 1 !important;
  width: 100% !important;
  box-sizing: border-box !important;
}

#filter-category .card,
#filter-category .filter-card {
  width: 100% !important;
  box-sizing: border-box !important;
}

#form-filter .form-control,
#form-filter .form-select {
  width: 100% !important;
  min-width: 0 !important;
  box-sizing: border-box !important;
}

#form-filter {
  display: flex !important;
  flex-wrap: wrap !important;
  gap: 20px !important;
  align-items: flex-end !important;
}

#form-filter .mb-3 {
  width: 25% !important;
  min-width: 250px !important;
}

#form-filter .btn-reset {
  height: 38px;
  border-radius: 20px;
  padding: 6px 14px;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  color:#121111;
  background-color:#f0e7e7;
}

#category .table,
#category table {
  table-layout: fixed !important;
  width: 100% !important;
  border-collapse: collapse !important;
  box-sizing: border-box !important;
}

#category table th,
#category table td {
  white-space: nowrap !important;
  overflow: hidden !important;
  text-overflow: ellipsis !important;
  vertical-align: middle !important;
  box-sizing: border-box !important;
}

#category table th:nth-child(1),
#category table td:nth-child(1) { width: 48px !important; max-width: 60px !important; }

#category table th:nth-child(2),
#category table td:nth-child(2) { width: 120px !important; max-width: 200px !important; }

#category table th:nth-child(3),
#category table td:nth-child(3) { width: auto !important; }

#category table th:nth-child(4),
#category table td:nth-child(4) { width: 80px !important; max-width: 120px !important; }

.category-list,
#category {
  overflow-x: auto !important;
  -webkit-overflow-scrolling: touch !important;
}

#filter-category[style],
#filter-category[style*=\"margin-left\"],
#filter-category[style*=\"width\"],
[style*=\"margin-left:-1500px\"],
[style*=\"width:1500px\"] {
  margin-left: 0 !important;
  width: 100% !important;
}

html, body {
  -webkit-text-size-adjust: 100% !important;
  text-size-adjust: 100% !important;
}

.top-filter { margin-bottom: 0.8rem; }
.filter-actions { gap: 0.5rem; display: inline-flex; align-items: center; }

/* Optional small-screen override */
/*
@media (max-width: 480px) {
  #category table th, #category table td {
    white-space: normal !important;
  }
}
*/
</style>
<script type=\"text/javascript\"><!--
\$('#category').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#category').load(this.href);
});

\$('#button-repair').on('click', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=catalog/category.repair&user_token=";
        // line 198
        yield ($context["user_token"] ?? null);
        yield "',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#category').load('index.php?route=catalog/category.list&user_token=";
        // line 214
        yield ($context["user_token"] ?? null);
        yield "');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#button-filter').on('click', function() {
    var url = '';

    var filter_name = \$('#input-name').val();

    if (filter_name !== '') {
        url += '&filter_name=' + encodeURIComponent(filter_name);
    }

    var filter_status = \$('#input-status').val();

    if (filter_status !== '') {
        url += '&filter_status=' + filter_status;
    }

    window.history.pushState({}, null, 'index.php?route=catalog/category&user_token=";
        // line 238
        yield ($context["user_token"] ?? null);
        yield "' + url);

    \$('#category').load('index.php?route=catalog/category.list&user_token=";
        // line 240
        yield ($context["user_token"] ?? null);
        yield "' + url);
});

\$('#input-name').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/category.autocomplete&user_token=";
        // line 246
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    name: '";
        // line 250
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
            \$('#input-name').val(decodeHTMLEntities(item['label']));
        } else {
            \$('#input-name').val('');
        }
    }
});
\$('#button-reset').on('click', function() {

    // Clear filter inputs
    \$('#input-name').val('');
    \$('#input-status').val('').trigger('change');

    // Reset URL (remove filters)
    window.history.pushState(
        {},
        null,
        'index.php?route=catalog/category&user_token=";
        // line 281
        yield ($context["user_token"] ?? null);
        yield "'
    );

    // Reload category list without filters
    \$('#category').load(
        'index.php?route=catalog/category.list&user_token=";
        // line 286
        yield ($context["user_token"] ?? null);
        yield "'
    );
});
//--></script>
";
        // line 290
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
        return "admin/view/template/catalog/category.twig";
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
        return array (  431 => 290,  424 => 286,  416 => 281,  382 => 250,  375 => 246,  366 => 240,  361 => 238,  334 => 214,  315 => 198,  171 => 57,  167 => 56,  153 => 45,  146 => 41,  135 => 37,  127 => 36,  121 => 33,  111 => 29,  104 => 24,  94 => 16,  83 => 14,  79 => 13,  74 => 11,  65 => 9,  59 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button id=\"filter-category-button\" type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_filter }}\" onclick=\"\$('#filter-category').toggleClass('d-none');\" class=\"btn btn-light d-lg-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <button type=\"button\" id=\"button-repair\" data-bs-toggle=\"tooltip\" title=\"{{ button_rebuild }}\" class=\"btn btn-warning\"><i class=\"fa-solid fa-rotate\"></i></button>
        <a href=\"{{ add }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-category\" formaction=\"{{ delete }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_delete }}\" onclick=\"return confirm('{{ text_confirm }}');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
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
      <div id=\"filter-category\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> {{ text_filter }}</div>
          <div class=\"card-body\">
            <form id=\"form-filter\">
              <div class=\"mb-3\">
                {#<label for=\"input-name\" class=\"form-label\">{{ entry_name }}</label>#}
                <input type=\"text\" name=\"filter_name\" value=\"{{ filter_name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name\" data-oc-target=\"autocomplete-name\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-name\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-status\" class=\"form-label\">{{ entry_status }}</label>
                <select name=\"filter_status\" id=\"input-status\" class=\"form-select\">
                  <option value=\"\"></option>
                  <option value=\"1\"{% if filter_status == '1' %} selected{% endif %}style=\"color:black;\">{{ text_enabled }}</option>
                  <option value=\"0\"{% if filter_status == '0' %} selected{% endif %}style=\"color:black;\">{{ text_disabled }}</option>
                </select>
              </div>
              <div class=\"text-end\" style=\"margin-bottom:16px\">
                <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\" style=\"color:white;background-color:#1872a2;border-color:#0b3349;\"><i class=\"fa-solid fa-filter\"></i> {{ button_filter }}</button>
               <button type=\"button\"
        id=\"button-reset\"
        data-bs-toggle=\"tooltip\"
        title=\"{{ button_reset }}\"
        class=\"btn btn-outline-secondary\">
    <i class=\"fa-solid fa-filter-circle-xmark\"></i>
</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class=\"col col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> {{ text_list }}</div>
          <div id=\"category\" class=\"card-body\">{{ list }}</div>
        </div>
      </div>
    </div>
  </div>
</div>
<style>
.container-fluid .row {
  display: flex !important;
  flex-direction: column !important;
  gap: 0.8rem;
  align-items: stretch;
}

#filter-category {
  order: -1 !important;
  width: 100% !important;
  margin: 0 !important;
  position: relative !important;
  left: auto !important;
  right: auto !important;
  top: auto !important;
  box-sizing: border-box !important;
}

.container-fluid .row > div:not(#filter-category) {
  order: 1 !important;
  width: 100% !important;
  box-sizing: border-box !important;
}

#filter-category .card,
#filter-category .filter-card {
  width: 100% !important;
  box-sizing: border-box !important;
}

#form-filter .form-control,
#form-filter .form-select {
  width: 100% !important;
  min-width: 0 !important;
  box-sizing: border-box !important;
}

#form-filter {
  display: flex !important;
  flex-wrap: wrap !important;
  gap: 20px !important;
  align-items: flex-end !important;
}

#form-filter .mb-3 {
  width: 25% !important;
  min-width: 250px !important;
}

#form-filter .btn-reset {
  height: 38px;
  border-radius: 20px;
  padding: 6px 14px;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  color:#121111;
  background-color:#f0e7e7;
}

#category .table,
#category table {
  table-layout: fixed !important;
  width: 100% !important;
  border-collapse: collapse !important;
  box-sizing: border-box !important;
}

#category table th,
#category table td {
  white-space: nowrap !important;
  overflow: hidden !important;
  text-overflow: ellipsis !important;
  vertical-align: middle !important;
  box-sizing: border-box !important;
}

#category table th:nth-child(1),
#category table td:nth-child(1) { width: 48px !important; max-width: 60px !important; }

#category table th:nth-child(2),
#category table td:nth-child(2) { width: 120px !important; max-width: 200px !important; }

#category table th:nth-child(3),
#category table td:nth-child(3) { width: auto !important; }

#category table th:nth-child(4),
#category table td:nth-child(4) { width: 80px !important; max-width: 120px !important; }

.category-list,
#category {
  overflow-x: auto !important;
  -webkit-overflow-scrolling: touch !important;
}

#filter-category[style],
#filter-category[style*=\"margin-left\"],
#filter-category[style*=\"width\"],
[style*=\"margin-left:-1500px\"],
[style*=\"width:1500px\"] {
  margin-left: 0 !important;
  width: 100% !important;
}

html, body {
  -webkit-text-size-adjust: 100% !important;
  text-size-adjust: 100% !important;
}

.top-filter { margin-bottom: 0.8rem; }
.filter-actions { gap: 0.5rem; display: inline-flex; align-items: center; }

/* Optional small-screen override */
/*
@media (max-width: 480px) {
  #category table th, #category table td {
    white-space: normal !important;
  }
}
*/
</style>
<script type=\"text/javascript\"><!--
\$('#category').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#category').load(this.href);
});

\$('#button-repair').on('click', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=catalog/category.repair&user_token={{ user_token }}',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#category').load('index.php?route=catalog/category.list&user_token={{ user_token }}');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#button-filter').on('click', function() {
    var url = '';

    var filter_name = \$('#input-name').val();

    if (filter_name !== '') {
        url += '&filter_name=' + encodeURIComponent(filter_name);
    }

    var filter_status = \$('#input-status').val();

    if (filter_status !== '') {
        url += '&filter_status=' + filter_status;
    }

    window.history.pushState({}, null, 'index.php?route=catalog/category&user_token={{ user_token }}' + url);

    \$('#category').load('index.php?route=catalog/category.list&user_token={{ user_token }}' + url);
});

\$('#input-name').autocomplete({
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
            \$('#input-name').val(decodeHTMLEntities(item['label']));
        } else {
            \$('#input-name').val('');
        }
    }
});
\$('#button-reset').on('click', function() {

    // Clear filter inputs
    \$('#input-name').val('');
    \$('#input-status').val('').trigger('change');

    // Reset URL (remove filters)
    window.history.pushState(
        {},
        null,
        'index.php?route=catalog/category&user_token={{ user_token }}'
    );

    // Reload category list without filters
    \$('#category').load(
        'index.php?route=catalog/category.list&user_token={{ user_token }}'
    );
});
//--></script>
{{ footer }}
", "admin/view/template/catalog/category.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/admin/view/template/catalog/category.twig");
    }
}
