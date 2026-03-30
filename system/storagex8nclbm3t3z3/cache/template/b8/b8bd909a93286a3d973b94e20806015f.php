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

/* extension/purpletree_pos/admin/view/template/posagent_list.twig */
class __TwigTemplate_904779d053308c7b663074cb8d7e30f9 extends Template
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
\t\t\t<h1>";
        // line 6
        yield ($context["heading_title"] ?? null);
        yield "</h1>
\t\t\t<ol class=\"breadcrumb\">
\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            yield "\t\t\t  <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            yield "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "\t\t  </ol>
\t\t\t<div class=\"pull-right  float-end\">\t\t\t
\t\t\t<a href=\"";
        // line 13
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["addnewcustomer"] ?? null), "href", [], "any", false, false, false, 13);
        yield "\" data-toggle=\"tooltip\" title=\"";
        yield ($context["button_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 14
        yield ($context["button_delete"] ?? null);
        yield "\" class=\"btn btn-danger\" onclick=\"confirm('";
        yield ($context["text_confirm"] ?? null);
        yield "') ? \$('#form-customer').submit() : false;\"><i class=\"fa-regular fa-trash-can\"></i></button>
            </div>\t
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            yield "\t\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "
\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t</div>
\t\t";
        }
        // line 24
        yield "\t\t";
        if (($context["success"] ?? null)) {
            // line 25
            yield "\t\t<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            yield ($context["success"] ?? null);
            yield "
\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t</div>
\t\t";
        }
        // line 29
        yield "\t<div class=\"panel panel-default card\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title card-header\">
            <i class=\"fa fa-list\"></i> ";
        // line 32
        yield ($context["text_list"] ?? null);
        yield "
        </h3>
    </div>

    <div class=\"panel-body card-body\">

        <div class=\"filter-row\">

            <div class=\"filter-item\">
                <input type=\"text\"
                       name=\"filter_name\"
                       value=\"";
        // line 43
        yield ($context["filter_name"] ?? null);
        yield "\"
                       placeholder=\"";
        // line 44
        yield ($context["column_name"] ?? null);
        yield "\"
                       id=\"input-name\"
                       class=\"form-control\">
            </div>

            <div class=\"filter-item\">
                <input type=\"text\"
                       name=\"filter_email\"
                       value=\"";
        // line 52
        yield ($context["filter_email"] ?? null);
        yield "\"
                       placeholder=\"";
        // line 53
        yield ($context["column_email"] ?? null);
        yield "\"
                       id=\"input-email\"
                       class=\"form-control\">
            </div>

            <div class=\"filter-item\">
                <select name=\"filter_status\"
                        id=\"input-status\"
                        class=\"form-select\"style=\"width:100%;\">
                    <option value=\"\">";
        // line 62
        yield ($context["text_all"] ?? null);
        yield "</option>
                    <option value=\"1\" ";
        // line 63
        if ((($context["filter_status"] ?? null) == "1")) {
            yield "selected";
        }
        yield ">";
        yield ($context["text_enabled"] ?? null);
        yield "</option>
                    <option value=\"0\" ";
        // line 64
        if ((($context["filter_status"] ?? null) == "0")) {
            yield "selected";
        }
        yield ">";
        yield ($context["text_disabled"] ?? null);
        yield "</option>
                </select>
            </div>

            <div class=\"filter-item\">
                <input type=\"date\"
                       name=\"filter_date_added\"
                       value=\"";
        // line 71
        yield ($context["filter_date_added"] ?? null);
        yield "\"
                       class=\"form-control\">
            </div>

            <div class=\"filter-item filter-btn\">
                <button type=\"button\"
                        id=\"button-filter\"
                        class=\"btn btn-primary w-100\">
                    <i class=\"fa fa-filter\"></i> ";
        // line 79
        yield ($context["button_filter"] ?? null);
        yield "
                </button>
            </div>

        </div>
    </div>
</div>

        
        </div>
\t\t\t<form action=\"";
        // line 89
        yield ($context["delete"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-customer\">
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table table-bordered table-hover\"style=\"margin-top:15px;\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-center ptsc-vendorlis-width\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td class=\"text-start\">";
        // line 96
        if ((($context["sort"] ?? null) == "name")) {
            yield "<a href=\"";
            yield ($context["sort_name"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_name"] ?? null);
            yield "</a>";
        } else {
            yield "<a href=\"";
            yield ($context["sort_name"] ?? null);
            yield "\">";
            yield ($context["column_name"] ?? null);
            yield "</a>";
        }
        yield "</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td class=\"text-start\">";
        // line 98
        if ((($context["sort"] ?? null) == "user_type")) {
            yield "<a href=\"";
            yield ($context["sort_user_type"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_user_type"] ?? null);
            yield "</a>";
        } else {
            yield "<a href=\"";
            yield ($context["sort_user_type"] ?? null);
            yield "\">";
            yield ($context["column_user_type"] ?? null);
            yield "</a>";
        }
        yield "</td>
\t\t\t\t\t\t\t\t
                                <td class=\"text-start\">";
        // line 100
        if ((($context["sort"] ?? null) == "c.email")) {
            yield "<a href=\"";
            yield ($context["sort_email"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_email"] ?? null);
            yield "</a>";
        } else {
            yield "<a href=\"";
            yield ($context["sort_email"] ?? null);
            yield "\">";
            yield ($context["column_email"] ?? null);
            yield "</a>";
        }
        yield "</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td class=\"text-start\">";
        // line 102
        if ((($context["sort"] ?? null) == "c.status")) {
            yield "<a href=\"";
            yield ($context["sort_status"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_status"] ?? null);
            yield "</a>";
        } else {
            yield "<a href=\"";
            yield ($context["sort_status"] ?? null);
            yield "\">";
            yield ($context["column_status"] ?? null);
            yield "</a>";
        }
        yield "</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td class=\"text-start\">";
        // line 104
        if ((($context["sort"] ?? null) == "c.date_added")) {
            yield "<a href=\"";
            yield ($context["sort_date_added"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_date_added"] ?? null);
            yield "</a>";
        } else {
            yield "<a href=\"";
            yield ($context["sort_date_added"] ?? null);
            yield "\">";
            yield ($context["column_date_added"] ?? null);
            yield "</a>";
        }
        yield "</td>
\t\t\t\t\t\t\t\t<td class=\"text-end\">";
        // line 105
        yield ($context["column_action"] ?? null);
        yield "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 109
        if (($context["posagents"] ?? null)) {
            // line 110
            yield "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["posagents"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["posagent"]) {
                // line 111
                yield "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-center\">";
                // line 113
                if (CoreExtension::inFilter(($context["selected"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["posagent"], "customer_id", [], "any", false, false, false, 113))) {
                    // line 114
                    yield "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["posagent"], "customer_id", [], "any", false, false, false, 114);
                    yield "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 116
                    yield "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["posagent"], "customer_id", [], "any", false, false, false, 116);
                    yield "\" />
\t\t\t\t\t\t\t\t";
                }
                // line 117
                yield "</td>
\t\t\t\t\t\t\t\t<td class=\"text-start\">";
                // line 118
                yield CoreExtension::getAttribute($this->env, $this->source, $context["posagent"], "firstname", [], "any", false, false, false, 118);
                yield " ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["posagent"], "lastname", [], "any", false, false, false, 118);
                yield "</td>
\t\t\t\t\t\t\t\t<td class=\"text-start\">";
                // line 119
                yield CoreExtension::getAttribute($this->env, $this->source, $context["posagent"], "user_type", [], "any", false, false, false, 119);
                yield "</td>
\t\t\t\t\t\t\t\t<td class=\"text-start\">";
                // line 120
                yield CoreExtension::getAttribute($this->env, $this->source, $context["posagent"], "email", [], "any", false, false, false, 120);
                yield "</td>
\t\t\t\t\t\t\t\t<td class=\"text-start\">";
                // line 121
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["posagent"], "status", [], "any", false, false, false, 121) == "1")) {
                    yield " ";
                    yield ($context["text_enabled"] ?? null);
                    yield " ";
                } else {
                    yield " ";
                    yield ($context["text_disabled"] ?? null);
                    yield " ";
                }
                yield "</td>
\t\t\t\t\t\t\t\t<td class=\"text-start\">";
                // line 122
                yield CoreExtension::getAttribute($this->env, $this->source, $context["posagent"], "date_added", [], "any", false, false, false, 122);
                yield "</td>
\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 124
                yield (($_v0 = $context["posagent"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["edit"] ?? null) : null);
                yield "\" data-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil fas fa-edit\"></i></a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['posagent'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            yield "\t\t\t\t\t\t\t";
        } else {
            // line 130
            yield "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-center\" colspan=\"8\">";
            // line 131
            yield ($context["text_no_results"] ?? null);
            yield "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        // line 134
        yield "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6 text-start\">";
        // line 139
        yield ($context["pagination"] ?? null);
        yield "</div>
\t\t\t\t<div class=\"col-sm-6 text-end\">";
        // line 140
        yield ($context["results"] ?? null);
        yield "</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<style>
.filter-row {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    align-items: flex-end;
}

.filter-item {
    min-width: 180px;
    flex: 1;
}

.filter-item label {
    font-size: 12px;
    margin-bottom: 4px;
    display: block;
}

.filter-btn {
    min-width: 120px;
}
.filter-row {
    display: flex;
    align-items: center;
    gap: 10px;
    flex-wrap: nowrap;
}

.filter-item {
    flex: 1;
    min-width: 160px;
}

.filter-btn {
    flex: 0 0 auto;
    min-width: 120px;
}

/* Responsive safety */
@media (max-width: 1200px) {
    .filter-row {
        flex-wrap: wrap;
    }
}

</style>
\t<script type=\"text/javascript\"><!--
  \$('.table-responsive').on('shown.bs.dropdown', function (e) {
    var t = \$(this),
      m = \$(e.target).find('.dropdown-menu'),
      tb = t.offset().top + t.height(),
      mb = m.offset().top + m.outerHeight(true),
      d = 20;
    if (t[0].scrollWidth > t.innerWidth()) {
      if (mb + d > tb) {
        t.css('padding-bottom', ((mb + d) - tb));
      }
    } else {
      t.css('overflow', 'visible');
    }
  }).on('hidden.bs.dropdown', function () {
    \$(this).css({'padding-bottom': '', 'overflow': ''});
  });
  //--></script>
  <script type=\"text/javascript\">
  \$('#button-filter').on('click', function() {
    url = 'index.php?route=extension/purpletree_pos/pos/posagent&user_token=";
        // line 212
        yield ($context["user_token"] ?? null);
        yield "';
    var filter_name = \$('input[name=\\'filter_name\\']').val();
    if (filter_name) {
      url += '&filter_name=' + encodeURIComponent(filter_name);
    } 
     var filter_email = \$('input[name=\\'filter_email\\']').val();
    if (filter_email) {
      url += '&filter_email=' + encodeURIComponent(filter_email);
    }\t
    var filter_status = \$('select[name=\\'filter_status\\']').val();
    if (filter_status !== '') {
      url += '&filter_status=' + encodeURIComponent(filter_status); 
    }    
    var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();
    if (filter_date_added) {
      url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
    }
    location = url;
  });
  </script>
  <script type=\"text/javascript\">
  \$('input[name=\\'filter_name\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=extension/purpletree_pos/posagent|autocomplete&user_token=";
        // line 236
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' +  encodeURIComponent(request),
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
      \$('input[name=\\'filter_name\\']').val(item['label']);
    }
  });
  \$('input[name=\\'filter_email\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=extension/purpletree_pos/posagent|autocomplete&user_token=";
        // line 255
        yield ($context["user_token"] ?? null);
        yield "&filter_email=' +  encodeURIComponent(request),
        dataType: 'json',
        success: function(json) {
          response(\$.map(json, function(item) {
            return {
              label: item['email'],
              value: item['customer_id']
            }
          }));
        }
      });
    },
    'select': function(item) {
      \$('input[name=\\'filter_email\\']').val(item['label']);
    }
  });
  </script>
  <script type=\"text/javascript\"><!--
   \$(function() {
  \$('input[name=\"filter_date_added\"]').daterangepicker({
      autoUpdateInput: false,
\t  singleDatePicker: true,
\t  showDropdowns: true,
      locale: {
          cancelLabel: 'Clear'
      }
  });

  \$('input[name=\"filter_date_added\"]').on('apply.daterangepicker', function(ev, picker) {
      \$(this).val(picker.startDate.format('YYYY-MM-DD'));
  });

  \$('input[name=\"filter_date_added\"]').on('cancel.daterangepicker', function(ev, picker) {
      \$(this).val('');
  });
});
  //--></script>
</div>
";
        // line 293
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/purpletree_pos/admin/view/template/posagent_list.twig";
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
        return array (  585 => 293,  544 => 255,  522 => 236,  495 => 212,  420 => 140,  416 => 139,  409 => 134,  403 => 131,  400 => 130,  397 => 129,  384 => 124,  379 => 122,  367 => 121,  363 => 120,  359 => 119,  353 => 118,  350 => 117,  344 => 116,  338 => 114,  336 => 113,  332 => 111,  327 => 110,  325 => 109,  318 => 105,  300 => 104,  281 => 102,  262 => 100,  243 => 98,  224 => 96,  214 => 89,  201 => 79,  190 => 71,  176 => 64,  168 => 63,  164 => 62,  152 => 53,  148 => 52,  137 => 44,  133 => 43,  119 => 32,  114 => 29,  106 => 25,  103 => 24,  95 => 20,  93 => 19,  83 => 14,  77 => 13,  73 => 11,  62 => 9,  58 => 8,  53 => 6,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
{{ column_left }}
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<h1>{{ heading_title }}</h1>
\t\t\t<ol class=\"breadcrumb\">
\t\t\t{% for breadcrumb in breadcrumbs %}
\t\t\t  <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
\t\t\t{% endfor %}
\t\t  </ol>
\t\t\t<div class=\"pull-right  float-end\">\t\t\t
\t\t\t<a href=\"{{ addnewcustomer.href }}\" data-toggle=\"tooltip\" title=\"{{ button_add }}\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"{{ button_delete }}\" class=\"btn btn-danger\" onclick=\"confirm('{{ text_confirm }}') ? \$('#form-customer').submit() : false;\"><i class=\"fa-regular fa-trash-can\"></i></button>
            </div>\t
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t{% if error_warning %}
\t\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}
\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t</div>
\t\t{% endif %}
\t\t{% if success %}
\t\t<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> {{ success }}
\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t</div>
\t\t{% endif %}
\t<div class=\"panel panel-default card\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title card-header\">
            <i class=\"fa fa-list\"></i> {{ text_list }}
        </h3>
    </div>

    <div class=\"panel-body card-body\">

        <div class=\"filter-row\">

            <div class=\"filter-item\">
                <input type=\"text\"
                       name=\"filter_name\"
                       value=\"{{ filter_name }}\"
                       placeholder=\"{{ column_name }}\"
                       id=\"input-name\"
                       class=\"form-control\">
            </div>

            <div class=\"filter-item\">
                <input type=\"text\"
                       name=\"filter_email\"
                       value=\"{{ filter_email }}\"
                       placeholder=\"{{ column_email }}\"
                       id=\"input-email\"
                       class=\"form-control\">
            </div>

            <div class=\"filter-item\">
                <select name=\"filter_status\"
                        id=\"input-status\"
                        class=\"form-select\"style=\"width:100%;\">
                    <option value=\"\">{{ text_all }}</option>
                    <option value=\"1\" {% if filter_status == '1' %}selected{% endif %}>{{ text_enabled }}</option>
                    <option value=\"0\" {% if filter_status == '0' %}selected{% endif %}>{{ text_disabled }}</option>
                </select>
            </div>

            <div class=\"filter-item\">
                <input type=\"date\"
                       name=\"filter_date_added\"
                       value=\"{{ filter_date_added }}\"
                       class=\"form-control\">
            </div>

            <div class=\"filter-item filter-btn\">
                <button type=\"button\"
                        id=\"button-filter\"
                        class=\"btn btn-primary w-100\">
                    <i class=\"fa fa-filter\"></i> {{ button_filter }}
                </button>
            </div>

        </div>
    </div>
</div>

        
        </div>
\t\t\t<form action=\"{{ delete }}\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-customer\">
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table table-bordered table-hover\"style=\"margin-top:15px;\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-center ptsc-vendorlis-width\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td class=\"text-start\">{% if sort == 'name' %}<a href=\"{{ sort_name }}\" class=\"{{ order|lower }}\">{{ column_name }}</a>{% else %}<a href=\"{{ sort_name }}\">{{ column_name }}</a>{% endif %}</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td class=\"text-start\">{% if sort == 'user_type' %}<a href=\"{{ sort_user_type }}\" class=\"{{ order|lower }}\">{{ column_user_type }}</a>{% else %}<a href=\"{{ sort_user_type }}\">{{ column_user_type }}</a>{% endif %}</td>
\t\t\t\t\t\t\t\t
                                <td class=\"text-start\">{% if sort == 'c.email' %}<a href=\"{{ sort_email }}\" class=\"{{ order|lower }}\">{{ column_email }}</a>{% else %}<a href=\"{{ sort_email }}\">{{ column_email }}</a>{% endif %}</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td class=\"text-start\">{% if sort == 'c.status' %}<a href=\"{{ sort_status }}\" class=\"{{ order|lower }}\">{{ column_status }}</a>{% else %}<a href=\"{{ sort_status }}\">{{ column_status }}</a>{% endif %}</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td class=\"text-start\">{% if sort == 'c.date_added' %}<a href=\"{{ sort_date_added }}\" class=\"{{ order|lower }}\">{{ column_date_added }}</a>{% else %}<a href=\"{{ sort_date_added }}\">{{ column_date_added }}</a>{% endif %}</td>
\t\t\t\t\t\t\t\t<td class=\"text-end\">{{ column_action }}</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t{% if posagents %}
\t\t\t\t\t\t\t{% for posagent in posagents %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-center\">{% if selected in posagent.customer_id %}
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"{{ posagent.customer_id }}\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"{{ posagent.customer_id }}\" />
\t\t\t\t\t\t\t\t{% endif %}</td>
\t\t\t\t\t\t\t\t<td class=\"text-start\">{{ posagent.firstname }} {{ posagent.lastname }}</td>
\t\t\t\t\t\t\t\t<td class=\"text-start\">{{ posagent.user_type }}</td>
\t\t\t\t\t\t\t\t<td class=\"text-start\">{{ posagent.email }}</td>
\t\t\t\t\t\t\t\t<td class=\"text-start\">{% if posagent.status == '1' %} {{ text_enabled }} {% else %} {{ text_disabled }} {% endif %}</td>
\t\t\t\t\t\t\t\t<td class=\"text-start\">{{ posagent.date_added }}</td>
\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ posagent['edit'] }}\" data-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa fa-pencil fas fa-edit\"></i></a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-center\" colspan=\"8\">{{ text_no_results }}</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6 text-start\">{{ pagination }}</div>
\t\t\t\t<div class=\"col-sm-6 text-end\">{{ results }}</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<style>
.filter-row {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    align-items: flex-end;
}

.filter-item {
    min-width: 180px;
    flex: 1;
}

.filter-item label {
    font-size: 12px;
    margin-bottom: 4px;
    display: block;
}

.filter-btn {
    min-width: 120px;
}
.filter-row {
    display: flex;
    align-items: center;
    gap: 10px;
    flex-wrap: nowrap;
}

.filter-item {
    flex: 1;
    min-width: 160px;
}

.filter-btn {
    flex: 0 0 auto;
    min-width: 120px;
}

/* Responsive safety */
@media (max-width: 1200px) {
    .filter-row {
        flex-wrap: wrap;
    }
}

</style>
\t<script type=\"text/javascript\"><!--
  \$('.table-responsive').on('shown.bs.dropdown', function (e) {
    var t = \$(this),
      m = \$(e.target).find('.dropdown-menu'),
      tb = t.offset().top + t.height(),
      mb = m.offset().top + m.outerHeight(true),
      d = 20;
    if (t[0].scrollWidth > t.innerWidth()) {
      if (mb + d > tb) {
        t.css('padding-bottom', ((mb + d) - tb));
      }
    } else {
      t.css('overflow', 'visible');
    }
  }).on('hidden.bs.dropdown', function () {
    \$(this).css({'padding-bottom': '', 'overflow': ''});
  });
  //--></script>
  <script type=\"text/javascript\">
  \$('#button-filter').on('click', function() {
    url = 'index.php?route=extension/purpletree_pos/pos/posagent&user_token={{ user_token }}';
    var filter_name = \$('input[name=\\'filter_name\\']').val();
    if (filter_name) {
      url += '&filter_name=' + encodeURIComponent(filter_name);
    } 
     var filter_email = \$('input[name=\\'filter_email\\']').val();
    if (filter_email) {
      url += '&filter_email=' + encodeURIComponent(filter_email);
    }\t
    var filter_status = \$('select[name=\\'filter_status\\']').val();
    if (filter_status !== '') {
      url += '&filter_status=' + encodeURIComponent(filter_status); 
    }    
    var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();
    if (filter_date_added) {
      url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
    }
    location = url;
  });
  </script>
  <script type=\"text/javascript\">
  \$('input[name=\\'filter_name\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=extension/purpletree_pos/posagent|autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),
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
      \$('input[name=\\'filter_name\\']').val(item['label']);
    }
  });
  \$('input[name=\\'filter_email\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=extension/purpletree_pos/posagent|autocomplete&user_token={{ user_token }}&filter_email=' +  encodeURIComponent(request),
        dataType: 'json',
        success: function(json) {
          response(\$.map(json, function(item) {
            return {
              label: item['email'],
              value: item['customer_id']
            }
          }));
        }
      });
    },
    'select': function(item) {
      \$('input[name=\\'filter_email\\']').val(item['label']);
    }
  });
  </script>
  <script type=\"text/javascript\"><!--
   \$(function() {
  \$('input[name=\"filter_date_added\"]').daterangepicker({
      autoUpdateInput: false,
\t  singleDatePicker: true,
\t  showDropdowns: true,
      locale: {
          cancelLabel: 'Clear'
      }
  });

  \$('input[name=\"filter_date_added\"]').on('apply.daterangepicker', function(ev, picker) {
      \$(this).val(picker.startDate.format('YYYY-MM-DD'));
  });

  \$('input[name=\"filter_date_added\"]').on('cancel.daterangepicker', function(ev, picker) {
      \$(this).val('');
  });
});
  //--></script>
</div>
{{ footer }}", "extension/purpletree_pos/admin/view/template/posagent_list.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY/extension/purpletree_pos/admin/view/template/posagent_list.twig");
    }
}
