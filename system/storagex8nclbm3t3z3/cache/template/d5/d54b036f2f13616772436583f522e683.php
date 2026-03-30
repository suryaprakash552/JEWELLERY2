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

/* extension/purpletree_pos/admin/view/template/sale_report_list.twig */
class __TwigTemplate_ddf20ec7b98186029b3c7ad3f1a01d87 extends Template
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
        yield "\" onclick=\"\$('#filter-customer').toggleClass('d-none');\" class=\"btn btn-light d-lg-none\"><i class=\"fa fa-filter\"></i></button>
\t\t<a href=\"javascript:void(0)\" data-bs-toggle=\"tooltip\" onClick=\"print_report();\" title=\"";
        // line 7
        yield ($context["button_print"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-print\"></i></a>
      </div>
      <h1>";
        // line 9
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            yield "        <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            yield "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    ";
        }
        // line 22
        yield "    ";
        if (($context["success"] ?? null)) {
            // line 23
            yield "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            yield ($context["success"] ?? null);
            yield "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    ";
        }
        // line 27
        yield "    <div class=\"row\">
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default card\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title card-header\"><i class=\"fa fa-list\"></i> ";
        // line 31
        yield ($context["text_list"] ?? null);
        yield "</h3>
          </div>
          <div class=\"panel-body card-body\">
        <div id=\"print_report\" class=\"table-responsive\">
          <table class=\"table table-bordered\">
            <thead>
                <td class=\"text-start\">";
        // line 37
        yield ($context["column_date_start"] ?? null);
        yield "</td>
                <td class=\"text-start\">";
        // line 38
        yield ($context["column_date_end"] ?? null);
        yield "</td>
                <td class=\"text-end\">";
        // line 39
        yield ($context["column_no_order"] ?? null);
        yield "</td>
                <td class=\"text-end\">";
        // line 40
        yield ($context["column_no_products"] ?? null);
        yield "</td>
                <td class=\"text-end\">";
        // line 41
        yield ($context["column_tax"] ?? null);
        yield "</td>
                <td class=\"text-end\">";
        // line 42
        yield ($context["column_total"] ?? null);
        yield "</td>
              </tr>
            </thead>
            <tbody>
            
            ";
        // line 47
        if (($context["orders"] ?? null)) {
            // line 48
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 49
                yield "            <tr>
              <td class=\"text-start\">";
                // line 50
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "date_start", [], "any", false, false, false, 50);
                yield "</td>
              <td class=\"text-start\">";
                // line 51
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "date_end", [], "any", false, false, false, 51);
                yield "</td>
              <td class=\"text-end\">";
                // line 52
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orders", [], "any", false, false, false, 52);
                yield "</td>
              <td class=\"text-end\">";
                // line 53
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "products", [], "any", false, false, false, 53);
                yield "</td>
              <td class=\"text-end\">";
                // line 54
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "tax", [], "any", false, false, false, 54);
                yield "</td>
              <td class=\"text-end\">";
                // line 55
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 55);
                yield "</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            yield "\t\t\t  <tr>
              <td class=\"text-end\" colspan=\"5\">";
            // line 59
            yield ($context["column_grand_total"] ?? null);
            yield "</td>
              <td class=\"text-end\">";
            // line 60
            yield ($context["grand_total"] ?? null);
            yield "</td>
            </tr>
            ";
        } else {
            // line 63
            yield "            <tr>
              <td class=\"text-center\" colspan=\"6\">";
            // line 64
            yield ($context["text_no_results"] ?? null);
            yield "</td>
            </tr>
            ";
        }
        // line 67
        yield "            </tbody>
            
          </table>
        </div>
            </form>
          </div>
        </div>
      </div>
\t  
\t   <div id=\"filter-customer\" class=\"col-md-3 col-md-push-9 col-sm-12 d-none d-lg-block\">
        <div class=\"panel panel-default card\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title card-header\"><i class=\"fa fa-filter\"></i> ";
        // line 79
        yield ($context["text_filter"] ?? null);
        yield "</h3>
          </div>
          <div class=\"panel-body card-body\">
\t\t  <div class=\"mb-3\">
              <label class=\"form-label\" for=\"input-date-added\">";
        // line 83
        yield ($context["entry_date_start"] ?? null);
        yield "</label>
              <div class=\"input-group date\">
\t\t\t  ";
        // line 85
        if (($context["version4100"] ?? null)) {
            // line 86
            yield "\t\t\t  \t<input type=\"date\" name=\"filter_date_added\" value=\"\" placeholder=\"";
            yield ($context["entry_date_start"] ?? null);
            yield "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
\t\t\t  ";
        } else {
            // line 88
            yield "                <input type=\"text\" name=\"filter_date_added\" value=\"\" placeholder=\"";
            yield ($context["entry_date_start"] ?? null);
            yield "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-light\"><i class=\"fa fa-calendar\"></i></button>
                </span>
\t\t\t\t";
        }
        // line 93
        yield "              </div>
            </div>
\t\t\t
\t\t\t<div class=\"mb-3\">
              <label class=\"form-label\" for=\"input-date-added\">";
        // line 97
        yield ($context["entry_date_end"] ?? null);
        yield "</label>
              <div class=\"input-group date\">
\t\t\t   ";
        // line 99
        if (($context["version4100"] ?? null)) {
            // line 100
            yield "\t\t\t  \t<input type=\"date\" name=\"filter_date_ended\" value=\"";
            yield ($context["filter_date_ended"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_date_end"] ?? null);
            yield "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-ended\" class=\"form-control\" />
\t\t\t  ";
        } else {
            // line 102
            yield "                <input type=\"text\" name=\"filter_date_ended\" value=\"";
            yield ($context["filter_date_ended"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_date_end"] ?? null);
            yield "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-ended\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-light\"><i class=\"fa fa-calendar\"></i></button>
                </span>
\t\t\t\t";
        }
        // line 107
        yield "              </div>
            </div>
\t\t\t
            <div class=\"mb-3\">
              <label class=\"form-label\" for=\"input-name\">";
        // line 111
        yield ($context["entry_agent"] ?? null);
        yield "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 112
        yield ($context["filter_name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_agent"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\" />
              <input type=\"hidden\" name=\"filter_customer_id\" value=\"";
        // line 113
        yield ($context["filter_customer_id"] ?? null);
        yield "\"  id=\"input-customer-id\" />
            </div>
            <div class=\"form-group text-end\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"style=color:white;background-color:#1872a2;border-color:#0b3349;><i class=\"fa fa-filter\"></i> ";
        // line 116
        yield ($context["button_filter"] ?? null);
        yield "</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
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
  <script type=\"text/javascript\"><!--
  \$('#button-filter').on('click', function() {
    url = 'index.php?route=extension/purpletree_pos/pos/sale_report&user_token=";
        // line 143
        yield ($context["user_token"] ?? null);
        yield "';
\t
    var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();
    if (filter_date_added) {
      url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
    }  
\t
\tvar filter_date_ended = \$('input[name=\\'filter_date_ended\\']').val();
    if (filter_date_ended) {
      url += '&filter_date_ended=' + encodeURIComponent(filter_date_ended);
    }
\t
\t var filter_customer_id = \$('input[name=\\'filter_customer_id\\']').val();
    if (filter_customer_id) {
      url += '&filter_customer_id=' + encodeURIComponent(filter_customer_id);
    }
\t
    location = url;
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('input[name=\\'filter_name\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=extension/purpletree_pos/sale_report|autocomplete&user_token=";
        // line 167
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
      \$('input[name=\\'filter_customer_id\\']').val(item['value']);
      \$('input[name=\\'filter_name\\']').val(item['label']);
    }
  });

function print_report(){
\tvar printContents = '<div class=\"col-sm-12 text-center\"><h1>Sales Report</h1> </div>';
     printContents += document.getElementById('print_report').innerHTML;
\t console.log(printContents);
     var originalContents = document.body.innerHTML;
     document.body.innerHTML = printContents;
     window.print();\t \t 
     //document.body.onfocus = doneyet;
     document.body.innerHTML = originalContents;
\t 
\t   
}

  //--></script>
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
  
  \$('input[name=\"filter_date_ended\"]').daterangepicker({
      autoUpdateInput: false,
\t  singleDatePicker: true,
\t  showDropdowns: true,
      locale: {
          cancelLabel: 'Clear'
      }
  });

  \$('input[name=\"filter_date_ended\"]').on('apply.daterangepicker', function(ev, picker) {
      \$(this).val(picker.startDate.format('YYYY-MM-DD'));
  });

  \$('input[name=\"filter_date_ended\"]').on('cancel.daterangepicker', function(ev, picker) {
      \$(this).val('');
  });
});
  //--></script>
</div>
";
        // line 237
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
        return "extension/purpletree_pos/admin/view/template/sale_report_list.twig";
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
        return array (  437 => 237,  364 => 167,  337 => 143,  307 => 116,  301 => 113,  295 => 112,  291 => 111,  285 => 107,  274 => 102,  266 => 100,  264 => 99,  259 => 97,  253 => 93,  244 => 88,  238 => 86,  236 => 85,  231 => 83,  224 => 79,  210 => 67,  204 => 64,  201 => 63,  195 => 60,  191 => 59,  188 => 58,  179 => 55,  175 => 54,  171 => 53,  167 => 52,  163 => 51,  159 => 50,  156 => 49,  151 => 48,  149 => 47,  141 => 42,  137 => 41,  133 => 40,  129 => 39,  125 => 38,  121 => 37,  112 => 31,  106 => 27,  98 => 23,  95 => 22,  87 => 18,  85 => 17,  80 => 14,  69 => 12,  65 => 11,  60 => 9,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_filter }}\" onclick=\"\$('#filter-customer').toggleClass('d-none');\" class=\"btn btn-light d-lg-none\"><i class=\"fa fa-filter\"></i></button>
\t\t<a href=\"javascript:void(0)\" data-bs-toggle=\"tooltip\" onClick=\"print_report();\" title=\"{{ button_print}}\" class=\"btn btn-primary\"><i class=\"fa fa-print\"></i></a>
      </div>
      <h1>{{ heading_title }}</h1>
      <ul class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
        <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">{% if error_warning %}
    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    {% endif %}
    {% if success %}
    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> {{ success }}
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    {% endif %}
    <div class=\"row\">
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default card\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title card-header\"><i class=\"fa fa-list\"></i> {{ text_list }}</h3>
          </div>
          <div class=\"panel-body card-body\">
        <div id=\"print_report\" class=\"table-responsive\">
          <table class=\"table table-bordered\">
            <thead>
                <td class=\"text-start\">{{ column_date_start }}</td>
                <td class=\"text-start\">{{ column_date_end }}</td>
                <td class=\"text-end\">{{ column_no_order }}</td>
                <td class=\"text-end\">{{ column_no_products }}</td>
                <td class=\"text-end\">{{ column_tax }}</td>
                <td class=\"text-end\">{{ column_total }}</td>
              </tr>
            </thead>
            <tbody>
            
            {% if orders %}
            {% for order in orders %}
            <tr>
              <td class=\"text-start\">{{ order.date_start }}</td>
              <td class=\"text-start\">{{ order.date_end }}</td>
              <td class=\"text-end\">{{ order.orders }}</td>
              <td class=\"text-end\">{{ order.products }}</td>
              <td class=\"text-end\">{{ order.tax }}</td>
              <td class=\"text-end\">{{ order.total }}</td>
            </tr>
            {% endfor %}
\t\t\t  <tr>
              <td class=\"text-end\" colspan=\"5\">{{ column_grand_total }}</td>
              <td class=\"text-end\">{{ grand_total }}</td>
            </tr>
            {% else %}
            <tr>
              <td class=\"text-center\" colspan=\"6\">{{ text_no_results }}</td>
            </tr>
            {% endif %}
            </tbody>
            
          </table>
        </div>
            </form>
          </div>
        </div>
      </div>
\t  
\t   <div id=\"filter-customer\" class=\"col-md-3 col-md-push-9 col-sm-12 d-none d-lg-block\">
        <div class=\"panel panel-default card\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title card-header\"><i class=\"fa fa-filter\"></i> {{ text_filter }}</h3>
          </div>
          <div class=\"panel-body card-body\">
\t\t  <div class=\"mb-3\">
              <label class=\"form-label\" for=\"input-date-added\">{{ entry_date_start }}</label>
              <div class=\"input-group date\">
\t\t\t  {% if version4100 %}
\t\t\t  \t<input type=\"date\" name=\"filter_date_added\" value=\"\" placeholder=\"{{ entry_date_start }}\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
\t\t\t  {% else %}
                <input type=\"text\" name=\"filter_date_added\" value=\"\" placeholder=\"{{ entry_date_start }}\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-light\"><i class=\"fa fa-calendar\"></i></button>
                </span>
\t\t\t\t{% endif %}
              </div>
            </div>
\t\t\t
\t\t\t<div class=\"mb-3\">
              <label class=\"form-label\" for=\"input-date-added\">{{ entry_date_end }}</label>
              <div class=\"input-group date\">
\t\t\t   {% if version4100 %}
\t\t\t  \t<input type=\"date\" name=\"filter_date_ended\" value=\"{{ filter_date_ended }}\" placeholder=\"{{ entry_date_end }}\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-ended\" class=\"form-control\" />
\t\t\t  {% else %}
                <input type=\"text\" name=\"filter_date_ended\" value=\"{{ filter_date_ended }}\" placeholder=\"{{ entry_date_end }}\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-ended\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-light\"><i class=\"fa fa-calendar\"></i></button>
                </span>
\t\t\t\t{% endif %}
              </div>
            </div>
\t\t\t
            <div class=\"mb-3\">
              <label class=\"form-label\" for=\"input-name\">{{ entry_agent }}</label>
              <input type=\"text\" name=\"filter_name\" value=\"{{ filter_name }}\" placeholder=\"{{ entry_agent }}\" id=\"input-name\" class=\"form-control\" />
              <input type=\"hidden\" name=\"filter_customer_id\" value=\"{{ filter_customer_id }}\"  id=\"input-customer-id\" />
            </div>
            <div class=\"form-group text-end\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"style=color:white;background-color:#1872a2;border-color:#0b3349;><i class=\"fa fa-filter\"></i> {{ button_filter }}</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
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
  <script type=\"text/javascript\"><!--
  \$('#button-filter').on('click', function() {
    url = 'index.php?route=extension/purpletree_pos/pos/sale_report&user_token={{ user_token }}';
\t
    var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();
    if (filter_date_added) {
      url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
    }  
\t
\tvar filter_date_ended = \$('input[name=\\'filter_date_ended\\']').val();
    if (filter_date_ended) {
      url += '&filter_date_ended=' + encodeURIComponent(filter_date_ended);
    }
\t
\t var filter_customer_id = \$('input[name=\\'filter_customer_id\\']').val();
    if (filter_customer_id) {
      url += '&filter_customer_id=' + encodeURIComponent(filter_customer_id);
    }
\t
    location = url;
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('input[name=\\'filter_name\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=extension/purpletree_pos/sale_report|autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),
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
      \$('input[name=\\'filter_customer_id\\']').val(item['value']);
      \$('input[name=\\'filter_name\\']').val(item['label']);
    }
  });

function print_report(){
\tvar printContents = '<div class=\"col-sm-12 text-center\"><h1>Sales Report</h1> </div>';
     printContents += document.getElementById('print_report').innerHTML;
\t console.log(printContents);
     var originalContents = document.body.innerHTML;
     document.body.innerHTML = printContents;
     window.print();\t \t 
     //document.body.onfocus = doneyet;
     document.body.innerHTML = originalContents;
\t 
\t   
}

  //--></script>
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
  
  \$('input[name=\"filter_date_ended\"]').daterangepicker({
      autoUpdateInput: false,
\t  singleDatePicker: true,
\t  showDropdowns: true,
      locale: {
          cancelLabel: 'Clear'
      }
  });

  \$('input[name=\"filter_date_ended\"]').on('apply.daterangepicker', function(ev, picker) {
      \$(this).val(picker.startDate.format('YYYY-MM-DD'));
  });

  \$('input[name=\"filter_date_ended\"]').on('cancel.daterangepicker', function(ev, picker) {
      \$(this).val('');
  });
});
  //--></script>
</div>
{{ footer }}
", "extension/purpletree_pos/admin/view/template/sale_report_list.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY/extension/purpletree_pos/admin/view/template/sale_report_list.twig");
    }
}
