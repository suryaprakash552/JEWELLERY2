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

/* admin/view/template/gst/retail_order.twig */
class __TwigTemplate_d44b12f7968aa0255ece40b5db8988e0 extends Template
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
<style>

.horizontal-scroll{
  overflow-x: auto;
  overflow-y: hidden;
  white-space: nowrap;
}

.horizontal-scroll table{
  min-width: 1200px;
}

</style>
<div id=\"content\">
  <div class=\"page-header\">
  <div class=\"table-responsive horizontal-scroll\">
      <h1>Retail Orders by Date</h1>
    </div>
  </div>

<div class=\"table-responsive horizontal-scroll\">

    <div class=\"card\">
      <div class=\"card-header\">
        <h3 class=\"card-title\">Search Orders</h3>
      </div>

      <div class=\"card-body\">

        <div class=\"row\">

          <div class=\"col-md-4\">
            <label>Select Date</label>
            <input type=\"date\" id=\"filter_date\" class=\"form-control\">
          </div>

          <div class=\"col-md-2\">
            <label>&nbsp;</label>
            <button id=\"button-search\" class=\"btn btn-primary form-control \" style=\"margin-top:19px;\">
              Search
            </button>
            <button type=\"reset\"
          data-bs-toggle=\"tooltip\"
          title=\"";
        // line 45
        yield ($context["button_reset"] ?? null);
        yield "\"
          class=\"btn btn-outline-secondary btn-reset\" style=\"margin-top:20px;\">
    <i class=\"fa-solid fa-filter-circle-xmark\"></i>
  </button>
          </div>

        </div>

      </div>
    </div>


    <div class=\"card mt-3\">
      <div class=\"card-body\">

        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover\">

            <thead>
              <tr>
                <th>S.No</th>
                <th>Date</th>
                <th>Order IDs</th>
              </tr>
            </thead>

            <tbody id=\"order-data\">

              ";
        // line 73
        if (($context["orders"] ?? null)) {
            // line 74
            yield "                ";
            $context["i"] = 1;
            // line 75
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 76
                yield "                <tr>
                  <td>";
                // line 77
                yield ($context["i"] ?? null);
                yield "</td>
                  <td>";
                // line 78
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 78);
                yield "</td>
                  <td>";
                // line 79
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "order_ids", [], "any", false, false, false, 79);
                yield "</td>
                </tr>
                ";
                // line 81
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 82
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            yield "              ";
        } else {
            // line 84
            yield "                <tr>
                  <td colspan=\"3\" class=\"text-center\">No Orders Found</td>
                </tr>
              ";
        }
        // line 88
        yield "
            </tbody>

          </table>
        </div>

      </div>
    </div>

  </div>
</div>


<script>

function loadOrders(date = '') {

    let url = 'index.php?route=gst/retail_order.getRetailOrders&user_token=";
        // line 105
        yield ($context["user_token"] ?? null);
        yield "';

    if (date) {
        url += '&date=' + date;
    }

    fetch(url)
    .then(response => response.text())
    .then(html => {
        document.getElementById('order-data').innerHTML = html;
    });
}

document.getElementById('button-search').addEventListener('click', function () {

    const date = document.getElementById('filter_date').value;

    if(!date){
        alert('Please select date');
        return;
    }

    loadOrders(date);

});

/* Load all orders when page opens */
window.onload = function () {
    loadOrders();
};
document.querySelector('.btn-reset').addEventListener('click', function () {

    // Clear the date field
    document.getElementById('filter_date').value = '';

    // Reload all orders
    loadOrders();

});
</script>

";
        // line 146
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/gst/retail_order.twig";
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
        return array (  227 => 146,  183 => 105,  164 => 88,  158 => 84,  155 => 83,  149 => 82,  147 => 81,  142 => 79,  138 => 78,  134 => 77,  131 => 76,  126 => 75,  123 => 74,  121 => 73,  90 => 45,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<style>

.horizontal-scroll{
  overflow-x: auto;
  overflow-y: hidden;
  white-space: nowrap;
}

.horizontal-scroll table{
  min-width: 1200px;
}

</style>
<div id=\"content\">
  <div class=\"page-header\">
  <div class=\"table-responsive horizontal-scroll\">
      <h1>Retail Orders by Date</h1>
    </div>
  </div>

<div class=\"table-responsive horizontal-scroll\">

    <div class=\"card\">
      <div class=\"card-header\">
        <h3 class=\"card-title\">Search Orders</h3>
      </div>

      <div class=\"card-body\">

        <div class=\"row\">

          <div class=\"col-md-4\">
            <label>Select Date</label>
            <input type=\"date\" id=\"filter_date\" class=\"form-control\">
          </div>

          <div class=\"col-md-2\">
            <label>&nbsp;</label>
            <button id=\"button-search\" class=\"btn btn-primary form-control \" style=\"margin-top:19px;\">
              Search
            </button>
            <button type=\"reset\"
          data-bs-toggle=\"tooltip\"
          title=\"{{ button_reset }}\"
          class=\"btn btn-outline-secondary btn-reset\" style=\"margin-top:20px;\">
    <i class=\"fa-solid fa-filter-circle-xmark\"></i>
  </button>
          </div>

        </div>

      </div>
    </div>


    <div class=\"card mt-3\">
      <div class=\"card-body\">

        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover\">

            <thead>
              <tr>
                <th>S.No</th>
                <th>Date</th>
                <th>Order IDs</th>
              </tr>
            </thead>

            <tbody id=\"order-data\">

              {% if orders %}
                {% set i = 1 %}
                {% for order in orders %}
                <tr>
                  <td>{{ i }}</td>
                  <td>{{ order.date_added }}</td>
                  <td>{{ order.order_ids }}</td>
                </tr>
                {% set i = i + 1 %}
                {% endfor %}
              {% else %}
                <tr>
                  <td colspan=\"3\" class=\"text-center\">No Orders Found</td>
                </tr>
              {% endif %}

            </tbody>

          </table>
        </div>

      </div>
    </div>

  </div>
</div>


<script>

function loadOrders(date = '') {

    let url = 'index.php?route=gst/retail_order.getRetailOrders&user_token={{ user_token }}';

    if (date) {
        url += '&date=' + date;
    }

    fetch(url)
    .then(response => response.text())
    .then(html => {
        document.getElementById('order-data').innerHTML = html;
    });
}

document.getElementById('button-search').addEventListener('click', function () {

    const date = document.getElementById('filter_date').value;

    if(!date){
        alert('Please select date');
        return;
    }

    loadOrders(date);

});

/* Load all orders when page opens */
window.onload = function () {
    loadOrders();
};
document.querySelector('.btn-reset').addEventListener('click', function () {

    // Clear the date field
    document.getElementById('filter_date').value = '';

    // Reload all orders
    loadOrders();

});
</script>

{{ footer }}", "admin/view/template/gst/retail_order.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/admin/view/template/gst/retail_order.twig");
    }
}
