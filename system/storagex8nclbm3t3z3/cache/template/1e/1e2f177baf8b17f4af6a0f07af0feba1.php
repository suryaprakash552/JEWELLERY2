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

/* admin/view/template/gst/gst.twig */
class __TwigTemplate_d6236219c832565ee69564497b6d6939 extends Template
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
      <h1>GST</h1>
    </div>
  </div>

  <div class=\"container-fluid\">
      <div class=\"modal fade\" id=\"gstModal\" tabindex=\"-1\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg modal-dialog-centered\">
    <div class=\"modal-content\" style=\"background:#0f172a; color:#fff; border-radius:10px;\">

      <!-- Header -->
      <div class=\"modal-header\" style=\"border-bottom:1px solid #334155;\">
        <h5 class=\"modal-title\">
          <i class=\"fa fa-percent text-warning\"></i> GST Calculation
        </h5>
        <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
      </div>

      <!-- Body -->
      <div class=\"modal-body\">
        <div class=\"row g-3\">

          <!-- From Date -->
          <div class=\"col-md-4\">
            <label class=\"filter-label\">From Date</label>
            <div class=\"input-group date\">
              <input type=\"date\" id=\"gst_from_date\" class=\"form-control\">
            </div>
          </div>

          <!-- To Date -->
          <div class=\"col-md-4\">
            <label class=\"filter-label\">To Date</label>
            <div class=\"input-group date\">
              <input type=\"date\" id=\"gst_to_date\" class=\"form-control\">
            </div>
          </div>

          <!-- GST % -->
          <div class=\"col-md-4\">
            <label class=\"filter-label\">GST Percentage (%)</label>
            <input type=\"number\" id=\"gst_percentage\"
                   class=\"form-control\"
                   placeholder=\"Eg: 3, 5, 18\"
                   style=\"background:#0f172a;color:#fff;border:1px solid #334155;\">
          </div>

          <!-- Tax Percentage -->
<<div class=\"col-md-6\">
  <label class=\"filter-label\">Tax Percentage (%)</label>
  <input type=\"number\" id=\"gst_tax_percentage\"
         class=\"form-control\"
         value=\"30\"
         readonly
         style=\"background:#0f172a;color:#fff;border:1px solid #334155;\">
</div>

          <!-- Search -->
          <div class=\"col-md-6 d-flex align-items-end\">
            <button type=\"button\" id=\"button-gst-search\"
                    class=\"btn btn-success w-100\">
              <i class=\"fa fa-search\"></i> Search
            </button>
          </div>

        </div>
      </div>

      <!-- Footer -->
      <div class=\"modal-footer\" style=\"border-top:1px solid #334155;\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
          Close
        </button>
      </div>

    </div>
  </div>
</div>
  </div>
</div>
<script>

document.addEventListener('DOMContentLoaded', function () {

    // Open GST modal automatically
    const modalElement = document.getElementById('gstModal');

    if (modalElement) {
        const gstModal = new bootstrap.Modal(modalElement);
        gstModal.show();
    }

    // Search Button
    const searchBtn = document.getElementById('button-gst-search');

    if (!searchBtn) return;

    searchBtn.addEventListener('click', function () {

        const fromDate = document.getElementById('gst_from_date').value;
        const toDate   = document.getElementById('gst_to_date').value;
        const gstPct   = parseFloat(document.getElementById('gst_percentage').value) || 0;
        const taxPct   = parseFloat(document.getElementById('gst_tax_percentage').value) || 0;

        if (!fromDate || !toDate) {
            alert('Please select From and To dates');
            return;
        }

        fetch(
            'index.php?route=gst/gst.getSalesByTotalData'
            + '&user_token=";
        // line 116
        yield ($context["user_token"] ?? null);
        yield "'
            + '&filter_date_added=' + encodeURIComponent(fromDate)
            + '&filter_date_modified=' + encodeURIComponent(toDate)
        )
        .then(res => res.json())
        .then(data => {

            if (!data.status) {
                alert('No data found');
                return;
            }

            let billData = [];

          data.rows.forEach(row => {

    const rowDate = row.date;

    // filter only selected range
    if (rowDate < fromDate || rowDate > toDate) {
        return;
    }

    const saleTotal = parseFloat(row.s_total) || 0;

    const taxAmount = (saleTotal * 30) / 100;
    const gstAmount = (taxAmount * gstPct) / 100;
    const finalTotal = taxAmount + gstAmount;

    billData.push({
        date: rowDate,
        sale: taxAmount.toFixed(2),
        gst: gstAmount.toFixed(2),
        total: finalTotal.toFixed(2)
    });

});
            if (!billData.length) {
                alert('No data found for selected range');
                return;
            }

            sessionStorage.setItem('MONTHLY_BILL_DATA', JSON.stringify({
                gstPct: gstPct,
                taxPct: taxPct,
                rows: billData
            }));

            window.open(
                'index.php?route=sale/monthly_sale&user_token=";
        // line 165
        yield ($context["user_token"] ?? null);
        yield "',
                '_blank'
            );

        })
        .catch(err => {
            console.error(err);
            alert('Error loading data');
        });

    });

});

</script>
";
        // line 180
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/gst/gst.twig";
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
        return array (  231 => 180,  213 => 165,  161 => 116,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}

<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <h1>GST</h1>
    </div>
  </div>

  <div class=\"container-fluid\">
      <div class=\"modal fade\" id=\"gstModal\" tabindex=\"-1\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg modal-dialog-centered\">
    <div class=\"modal-content\" style=\"background:#0f172a; color:#fff; border-radius:10px;\">

      <!-- Header -->
      <div class=\"modal-header\" style=\"border-bottom:1px solid #334155;\">
        <h5 class=\"modal-title\">
          <i class=\"fa fa-percent text-warning\"></i> GST Calculation
        </h5>
        <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
      </div>

      <!-- Body -->
      <div class=\"modal-body\">
        <div class=\"row g-3\">

          <!-- From Date -->
          <div class=\"col-md-4\">
            <label class=\"filter-label\">From Date</label>
            <div class=\"input-group date\">
              <input type=\"date\" id=\"gst_from_date\" class=\"form-control\">
            </div>
          </div>

          <!-- To Date -->
          <div class=\"col-md-4\">
            <label class=\"filter-label\">To Date</label>
            <div class=\"input-group date\">
              <input type=\"date\" id=\"gst_to_date\" class=\"form-control\">
            </div>
          </div>

          <!-- GST % -->
          <div class=\"col-md-4\">
            <label class=\"filter-label\">GST Percentage (%)</label>
            <input type=\"number\" id=\"gst_percentage\"
                   class=\"form-control\"
                   placeholder=\"Eg: 3, 5, 18\"
                   style=\"background:#0f172a;color:#fff;border:1px solid #334155;\">
          </div>

          <!-- Tax Percentage -->
<<div class=\"col-md-6\">
  <label class=\"filter-label\">Tax Percentage (%)</label>
  <input type=\"number\" id=\"gst_tax_percentage\"
         class=\"form-control\"
         value=\"30\"
         readonly
         style=\"background:#0f172a;color:#fff;border:1px solid #334155;\">
</div>

          <!-- Search -->
          <div class=\"col-md-6 d-flex align-items-end\">
            <button type=\"button\" id=\"button-gst-search\"
                    class=\"btn btn-success w-100\">
              <i class=\"fa fa-search\"></i> Search
            </button>
          </div>

        </div>
      </div>

      <!-- Footer -->
      <div class=\"modal-footer\" style=\"border-top:1px solid #334155;\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
          Close
        </button>
      </div>

    </div>
  </div>
</div>
  </div>
</div>
<script>

document.addEventListener('DOMContentLoaded', function () {

    // Open GST modal automatically
    const modalElement = document.getElementById('gstModal');

    if (modalElement) {
        const gstModal = new bootstrap.Modal(modalElement);
        gstModal.show();
    }

    // Search Button
    const searchBtn = document.getElementById('button-gst-search');

    if (!searchBtn) return;

    searchBtn.addEventListener('click', function () {

        const fromDate = document.getElementById('gst_from_date').value;
        const toDate   = document.getElementById('gst_to_date').value;
        const gstPct   = parseFloat(document.getElementById('gst_percentage').value) || 0;
        const taxPct   = parseFloat(document.getElementById('gst_tax_percentage').value) || 0;

        if (!fromDate || !toDate) {
            alert('Please select From and To dates');
            return;
        }

        fetch(
            'index.php?route=gst/gst.getSalesByTotalData'
            + '&user_token={{ user_token }}'
            + '&filter_date_added=' + encodeURIComponent(fromDate)
            + '&filter_date_modified=' + encodeURIComponent(toDate)
        )
        .then(res => res.json())
        .then(data => {

            if (!data.status) {
                alert('No data found');
                return;
            }

            let billData = [];

          data.rows.forEach(row => {

    const rowDate = row.date;

    // filter only selected range
    if (rowDate < fromDate || rowDate > toDate) {
        return;
    }

    const saleTotal = parseFloat(row.s_total) || 0;

    const taxAmount = (saleTotal * 30) / 100;
    const gstAmount = (taxAmount * gstPct) / 100;
    const finalTotal = taxAmount + gstAmount;

    billData.push({
        date: rowDate,
        sale: taxAmount.toFixed(2),
        gst: gstAmount.toFixed(2),
        total: finalTotal.toFixed(2)
    });

});
            if (!billData.length) {
                alert('No data found for selected range');
                return;
            }

            sessionStorage.setItem('MONTHLY_BILL_DATA', JSON.stringify({
                gstPct: gstPct,
                taxPct: taxPct,
                rows: billData
            }));

            window.open(
                'index.php?route=sale/monthly_sale&user_token={{ user_token }}',
                '_blank'
            );

        })
        .catch(err => {
            console.error(err);
            alert('Error loading data');
        });

    });

});

</script>
{{ footer }}", "admin/view/template/gst/gst.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/admin/view/template/gst/gst.twig");
    }
}
