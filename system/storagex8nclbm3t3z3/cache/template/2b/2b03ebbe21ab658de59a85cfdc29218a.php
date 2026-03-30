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

/* extension/purpletree_pos/catalog/view/template/pos/tax_invoice.twig */
class __TwigTemplate_1541649258f788600455d4628389239f extends Template
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
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Tax Invoice - SALEEM GOLD COVERING</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            
            font-family: \"Roboto Mono\", \"Courier New\", monospace;
            background-color: white;
            padding: 20px;
        }
        
        .invoice-container {
            max-width: 900px;
            margin: 0 auto;
            background-color: white;
            padding: 12px;
            border: 2px solid #888;
        }
        
        .header {
            background-color: #d3d3d3;
            padding: 5px 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 5px;
        }
        
        .header-title {
            font-weight: bold;
            font-size: 14px;
        }
        
        .original-tag {
            font-size: 12px;
        }
        
        .company-name {
            text-align: center;
            font-size: 23px;
            font-weight: bold;
            margin: 10px 0;
            letter-spacing: 2px;
        }
        
        .company-details {
            text-align: center;
            font-size: 11px;
            line-height: 1.6;
            margin-bottom: 10px;
        }
        
        .invoice-header-info {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 10px;
        }
        
        .invoice-info-table {
            border-collapse: collapse;
        }
        
        .invoice-info-table td {
            border: 1px solid #888;
            padding: 3px 8px;
            font-size: 11px;
        }
        
        .section-header {
            background-color: #a9a9a9;
            color: rgb(19, 18, 18);
            padding: 5px 10px;
            font-weight: bold;
            font-size: 12px;
            margin-top: 5px;
        }
        
        .details-row {
            display: flex;
            gap: 10px;
            margin-top: 5px;
        }
        
        .details-box {
            flex: 1;
            font-size: 11px;
            line-height: 1.8;
        }
        
        .details-label {
            font-weight: bold;
            display: inline-block;
            width: 70px;
        }
        
        .pan-section {
            text-align: left;
            font-size: 11px;
            margin: 4px 0;
            font-weight: bold;
        }
        
        table.items-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 5px;
            font-size: 11px;
        }
        
        table.items-table th,
        table.items-table td {
            border: 1px solid #888;
            padding: 5px 8px;
            text-align: left;
        }
        
        table.items-table th {
            background-color: #d3d3d3;
            font-weight: bold;
        }
        
        table.items-table td.center {
            text-align: center;
        }
        
        table.items-table td.right {
            text-align: right;
        }
        
        .total-row {
            text-align: right;
            font-weight: bold;
            padding: 8px 0;
            font-size: 12px;
        }
        
        .bottom-section {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }
        
        .transport-details {
            flex: 1;
        
            color: rgb(7, 7, 7);
            padding: 5px 10px;
            font-size: 11px;
        }
        
        .remarks-section {
            flex: 1;
            font-size: 11px;
        }
        
        .remarks-header {
            background-color: #a9a9a9;
            color: white;
            padding: 5px 10px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .remarks-table {
            width: 100%;
        }
        
        .remarks-table td {
            padding: 3px 8px;
        }
        
        .remarks-table td:first-child {
            font-weight: bold;
        }
        
        .remarks-table td:last-child {
            text-align: right;
        }
        
        .tax-breakdown {
            margin-top: 10px;
            font-size: 11px;
        }
        
        .tax-breakdown table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .tax-breakdown th,
        .tax-breakdown td {
            border: 1px solid #888;
            padding: 4px;
            text-align: center;
        }
        
        .tax-breakdown th {
            background-color: #d3d3d3;
            font-weight: bold;
        }
        
        .amount-in-words {
            margin-top: 5px;
            padding: 5px 10px;
            background-color:white;
            font-weight: bold;
            font-size: 11px;
        }
        
        .signature-section {
            text-align: right;
            margin-top: 10px;
            font-size: 11px;
        }
        
        .terms-section {
            margin-top: 10px;
            font-size: 10px;
            line-height: 1.6;
        }
        
        .terms-header {
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .footer {
            margin-top: 10px;
            font-size: 18px;
            text-align: center;
            color: #666;
        }
        
        .bank-details {
            font-size: 11px;
            margin-top: 5px;
        }
        
        .bank-details-row {
            display: flex;
            gap: 20px;
        }
        
        .bank-detail-item {
            display: flex;
            gap: 10px;
        }
        .details-row {
  display: flex;
  align-items: flex-start;
}

.details-label {
  min-width: 90px;      /* adjust if needed */
  font-weight: bold;
}

.details-value {
  margin-left: 5px;
}
.address-row {
  display: grid;
  grid-template-columns: 80px 10px auto;
  align-items: start;
}

.address-row .details-label {
  font-weight: bold;
}

.address-row .details-colon {
  text-align: center;
}

.address-row .details-value {
  word-break: break-word;
}
/* ===== html2pdf ONLY fix ===== */
.no-break,
.items-table,
.items-table tr,
.items-table td,
.bottom-section {
    page-break-inside: avoid !important;
    break-inside: avoid !important;
}


      @media print {
    * {
        -webkit-print-color-adjust: exact !important;
        print-color-adjust: exact !important;
        color-adjust: exact !important;
    }

    body {
        background: #ffffff !important;
    }

    .invoice-container {
        background: white !important; /* keep pink */
    }

    /* Force dark text */
    body, table, td, th, div, span {
        color: #000000 !important;
        font-weight: 700;
    }
}

@media print {
    .no-print {
        display: none !important;
    }
}


    </style>
    
</head>

<body>
   

    <div class=\"invoice-container\">
        <!-- Header -->
        <div class=\"header\">
            <span class=\"header-title\">Tax Invoice</span>
            <span class=\"original-tag\">Original</span>
        </div>
        
        <!-- Company Name -->
        <div class=\"company-name\">SALEEM GOLD COVERING WHOLESALE</div>
        
        <!-- Company Details -->
        <div class=\"company-details\">
            62/95,SHUKURMIAH
                        STREET,RAYACHOTI,RAYACHOTI - 516269<br>
                        <span class=\"details-label\">State</span>: Andhra Pradesh<br>
            <strong style =\"margin-left : 200px\">GSTIN :</strong>24AUAPK1016G1ZC
            <span style=\"float: right; margin-right: 0px; font-size:15px\"><a href=\"/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"3d4e555c5451584e5556555252514f5c090f047d5a505c5451135e5250\">sgcwholesale@gmail.com</a></span>
        </div>
        <hr>
        <div class=\"no-print\" style=\"text-align:right; margin-bottom:10px;\">
    <button onclick=\"printInvoice()\" 
            style=\"
                padding:6px 14px;
                font-size:12px;
                font-weight:bold;
                background:#007bff;
                color:#fff;
                border:none;
                cursor:pointer;
            \">
         Print
    </button>
    <button onclick=\"downloadInvoice()\"
        style=\"
            padding:6px 14px;
            font-size:12px;
            font-weight:bold;
            background:#d977bc;
            color:#fff;
            border:none;
            cursor:pointer;
            margin-left:6px;
        \">
    ⬇ Download
</button>

</div>

        <!-- Invoice Info -->
        <div class=\"invoice-header-info\">
            <table class=\"invoice-info-table\">
                <tr>
                    <td><strong>Invoice No</strong></td>
                    <td>";
        // line 387
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "order_id", [], "any", false, false, false, 387);
        yield "
                </td>
                </tr>
                <tr>
                    <td><strong>Invoice Date</strong></td>
                    <td>  ";
        // line 392
        yield $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "date_added", [], "any", false, false, false, 392), "d-m-Y h:i A", "Asia/Kolkata");
        yield "
                </td>
                </tr>
            </table>
        </div>
        
        <!-- Receiver and Consignee Details Section -->
        <div style=\"display: flex; gap: 10px; margin-top: -11px;\">
            <!-- Receiver Details -->
            <div style=\"flex: 1;\">
                <div class=\"section-header\">Details of Receiver (Billed to)</div>
                <div class=\"details-box\" style=\"margin-top: 5px;\">
<div><span class=\"details-label\">Name</span>: <b>";
        // line 404
        yield ($context["r_name"] ?? null);
        yield "</b></div>

<div class=\"details-row address-row\">
  <span class=\"details-label\">Address</span>
  <span class=\"details-colon\">:</span>
  <span class=\"details-value\">";
        // line 409
        yield ($context["r_address"] ?? null);
        yield "</span>
</div>


<div style=\"margin-top: 10px;\">
  <span class=\"details-label\">State</span>: ";
        // line 414
        yield ($context["r_state"] ?? null);
        yield "
</div>

<div>
  <span class=\"details-label\">Mob.No</span>: ";
        // line 418
        yield ($context["r_mobile"] ?? null);
        yield "
</div>

";
        // line 421
        if (($context["r_gstin"] ?? null)) {
            // line 422
            yield "<div>
  <span class=\"details-label\">GSTIN</span>: ";
            // line 423
            yield ($context["r_gstin"] ?? null);
            yield "
</div>
";
        }
        // line 426
        yield "
";
        // line 427
        if (($context["c_pan"] ?? null)) {
            // line 428
            yield "<div>
  <span class=\"details-label\">Pan No</span>: ";
            // line 429
            yield ($context["r_pan"] ?? null);
            yield "
</div>
";
        }
        // line 432
        yield "                </div>
                        
            </div>
            
            <!-- Consignee Details -->
            <div style=\"flex: 1;\">
                <div class=\"section-header\">Details of Consignee (shipped to)</div>
                <div class=\"details-box\" style=\"margin-top: 5px;\">
                   <div><span class=\"details-label\">Name</span>: <b>";
        // line 440
        yield ($context["c_name"] ?? null);
        yield "</b></div>

<div class=\"details-row address-row\">
  <span class=\"details-label\">Address</span>
  <span class=\"details-colon\">:</span>
  <span class=\"details-value\">";
        // line 445
        yield ($context["c_address"] ?? null);
        yield "</span>
</div>


<div style=\"margin-top: 10px;\">
  <span class=\"details-label\">State</span>: ";
        // line 450
        yield ($context["c_state"] ?? null);
        yield "
</div>

<div>
  <span class=\"details-label\">Mob.No</span>: ";
        // line 454
        yield ($context["c_mobile"] ?? null);
        yield "
</div>

";
        // line 457
        if (($context["c_gstin"] ?? null)) {
            // line 458
            yield "<div>
  <span class=\"details-label\">GSTIN</span>: ";
            // line 459
            yield ($context["c_gstin"] ?? null);
            yield "
</div>
";
        }
        // line 462
        yield "
";
        // line 463
        if (($context["c_pan"] ?? null)) {
            // line 464
            yield "<div>
  <span class=\"details-label\">Pan No</span>: ";
            // line 465
            yield ($context["c_pan"] ?? null);
            yield "
</div>
";
        }
        // line 468
        yield "
                </div>
            </div>
        </div>
        
        <!-- Items Table -->
    ";
        // line 475
        $context["total_qty"] = 0;
        // line 476
        $context["total_taxable"] = 0;
        // line 477
        yield "
<table class=\"items-table\">
    <thead>
        <tr>
            <th style=\"width:40px;\">S.No</th>
            <th>Particulars</th>
            <th style=\"width:80px;\">HSN / SAC</th>
            <th style=\"width:70px;\">MRP</th>
            <th style=\"width:60px;\">PCS</th>
            <th style=\"width:60px;\">GST (%)</th>
            <th style=\"width:70px;\">Rate</th>
            <th style=\"width:60px;\">Disc (%)</th>
            <th style=\"width:90px;\">Taxable Value</th>
        </tr>
    </thead>

    <tbody>

";
        // line 495
        $context["total_qty"] = 0;
        // line 496
        $context["total_taxable"] = 0;
        // line 497
        yield "
";
        // line 498
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "products", [], "any", false, false, false, 498));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 499
            yield "

    ";
            // line 501
            $context["total_qty"] = (($context["total_qty"] ?? null) + CoreExtension::getAttribute($this->env, $this->source, $context["p"], "qty", [], "any", false, false, false, 501));
            // line 502
            yield "    ";
            $context["total_taxable"] = (($context["total_taxable"] ?? null) + CoreExtension::getAttribute($this->env, $this->source, $context["p"], "taxable_value", [], "any", false, false, false, 502));
            // line 503
            yield "
    <tr>
        <td class=\"center\">";
            // line 505
            yield CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 505);
            yield "</td>

        <td>";
            // line 507
            yield CoreExtension::getAttribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 507);
            yield "</td>

        <td class=\"center\">7117</td>

        <td class=\"right\">";
            // line 511
            yield CoreExtension::getAttribute($this->env, $this->source, $context["p"], "rate", [], "any", false, false, false, 511);
            yield "</td>

        <td class=\"center\">";
            // line 513
            yield CoreExtension::getAttribute($this->env, $this->source, $context["p"], "qty", [], "any", false, false, false, 513);
            yield "</td>

        <td class=\"center\">";
            // line 515
            yield CoreExtension::getAttribute($this->env, $this->source, $context["p"], "gst", [], "any", false, false, false, 515);
            yield "%</td>

        <td class=\"right\">";
            // line 517
            yield CoreExtension::getAttribute($this->env, $this->source, $context["p"], "rate", [], "any", false, false, false, 517);
            yield "</td>

        <td class=\"center\">0</td>

        <td class=\"right\">";
            // line 521
            yield CoreExtension::getAttribute($this->env, $this->source, $context["p"], "taxable_value", [], "any", false, false, false, 521);
            yield "</td>
    </tr>

";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 525
            yield "
    <tr>
        <td colspan=\"9\">No products found</td>
    </tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 531
        yield "
<tr>
    <td colspan=\"9\" style=\"height:80px;\"></td>
</tr>

</tbody>

</table>
";
        // line 540
        yield "<div class=\"total-row\">
    <span style=\"margin-right:40px;\">
        <strong>Total Qty :</strong> ";
        // line 542
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "total_qty", [], "any", false, false, false, 542);
        yield "
    </span>

    <span>
        <strong>Total Taxable :</strong> ";
        // line 546
        yield $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "total_taxable", [], "any", false, false, false, 546), 2, ".", "");
        yield "
    </span>
</div>

  <div class=\"bottom-section\" style=\"border: 1px solid #888; padding: 10px; margin-top: -3px;\">

            <!-- Left Side: Transport, Bank, Tax Details -->
            <div style=\"flex: 1.2;\">
                <div class=\"transport-details\" style=\"border: 1px solid #888;\">
                    <div style=\"font-weight: bold;color: black;background-color: #a9a9a9;height: 21px;padding: 5px 1px;\">Transportation Details</div>
                    <div style=\"display: flex; gap: 30px;\">
                        <div>
                            <div>Trans Name :</div>
                            <div>Lr.no :</div>
                        </div>
                        <div>
                            <div>Veh No :</div>
                            <div>Station : </div>
                        </div>
                    </div>
                </div>
                
                <!-- Bank Details -->
                <div style=\"margin-top: 10px; font-size: 11px;  color: rgb(7, 7, 7); padding: 5px 10px; border: 1px solid #888;\">
                    <div style=\"font-weight: bold; margin-bottom: 5px;color: black;background-color: #a9a9a9;height: 21px;padding: 5px 1px;\">Bank Details</div>
                    <div style=\"display: flex; gap: 30px;\">
                        <div>
                            <div>Bank Name : IDBI BANK</div>
                            <div>Branch Name : varachha road</div>
                        </div>
                        <div>
                            <div>A/c No : 0290102000063504</div>
                            <div>IFSC Code : IBKL0000290</div>
                        </div>
                    </div>
                </div>
                
                <!-- Tax Breakdown -->
                <div class=\"tax-breakdown\" style=\"margin-top: 10px;\">
                   ";
        // line 585
        $context["cgst"] = ((($context["total_taxable"] ?? null) * 3) / 100);
        // line 586
        yield "                ";
        $context["total_amount"] = (($context["total_taxable"] ?? null) + ($context["cgst"] ?? null));
        // line 587
        yield "                    <table>
                        <tr>
                            <th rowspan=\"2\" style=\"font-size: 10px;\">GST Taxable<br>(%) Value</th>
                            <th colspan=\"2\">Central Tax</th>
                            <th colspan=\"2\">State Tax</th>
                            <th colspan=\"2\">Integrated Tax</th>
                        </tr>
                        <tr>
                            <th>Rate</th>
                            <th>Amount</th>
                            <th>Rate</th>
                            <th>Amount</th>
                            <th>Rate</th>
                            <th>Amount</th>
                        </tr>
                        <tr>
                            <td style=\"font-size: 10px;\">3% ";
        // line 603
        yield $this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["total_taxable"] ?? null), 2, ".", "");
        yield "</td>
                              <td> 0.00%</td>
                            <td> 0.00%</td>
                            <td>0.00%</td>
                            <td>0.00</td>
                            <td>3.00%</td>
                            <td>";
        // line 609
        yield $this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["cgst"] ?? null), 2, ".", "");
        yield "</td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <!-- Right Side: Remarks Section -->
            <div style=\"flex: 0.8;\">
                <div class=\"remarks-header\">Remarks</div>
                ";
        // line 618
        $context["cgst"] = ((($context["total_taxable"] ?? null) * 3) / 100);
        // line 619
        yield "                ";
        $context["total_amount"] = (($context["total_taxable"] ?? null) + ($context["cgst"] ?? null));
        // line 620
        yield "

                <table style=\"width: 100%; border-collapse: collapse; font-size: 11px;border: 1px solid #888;\">
                    <tr>
                        <td style=\"padding: 5px 8px; border-bottom: 1px solid #888;\"><b>Gross Amt</b></td>
                        <td style=\"padding: 5px 8px; text-align: right; border-bottom: 1px solid #888;\"><b>";
        // line 625
        yield $this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["total_taxable"] ?? null), 2, ".", "");
        yield "</b></td>
                    </tr>
                    <tr>
                        <td style=\"padding: 5px 8px; border-bottom: 1px solid #888;\">Tot.Discount</td>
                        <td style=\"padding: 5px 8px; text-align: right; border-bottom: 1px solid #888;\">0.00</td>
                    </tr>
                   <tr>
                    <td style=\"padding: 5px 8px; border-bottom: 1px solid #888;\">
                        CGST @ 3%
                    </td>
                    <td style=\"padding: 5px 8px; text-align: right; border-bottom: 1px solid #888;\">
                        ";
        // line 636
        yield $this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["cgst"] ?? null), 2, ".", "");
        yield "
                    </td>
                </tr>

                    <tr>
                        <td style=\"padding: 5px 8px; border-bottom: 1px solid #888;\">SGST</td>
                        <td style=\"padding: 5px 8px; text-align: right; border-bottom: 1px solid #888;\">0.00</td>
                    </tr>
                    <tr>
                        <td style=\"padding: 5px 8px; border-bottom: 1px solid #888;\">IGST</td>
                        <td style=\"padding: 5px 8px; text-align: right; border-bottom: 1px solid #888;\">0.00</td>
                    </tr>
                    <tr>
                        <td style=\"padding: 5px 8px; border-bottom: 1px solid #888;\">Add charges</td>
                        <td style=\"padding: 5px 8px; text-align: right; border-bottom: 1px solid #888;\">0.00</td>
                    </tr>
                    <tr>
                        <td style=\"padding: 5px 8px; border-bottom: 1px solid #888;\">Add Disc</td>
                        <td style=\"padding: 5px 8px; text-align: right; border-bottom: 1px solid #888;\">0.00</td>
                    </tr>
                    <tr>
                        <td style=\"padding: 5px 8px; border-bottom: 1px solid #888; font-weight:bold;\">
                            Total Amount
                        </td>
                        <td style=\"padding: 5px 8px; text-align: right; border-bottom: 1px solid #888; font-weight:bold;\">
                            ";
        // line 661
        yield $this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["total_amount"] ?? null), 2, ".", "");
        yield "
                        </td>
                    </tr>

                    <tr><td style=\"padding: 5px 8px; border-bottom: 1px solid #888;\">GST Payable on Reverse Charge : N.A.</td>
                    <td style=\"padding: 5px 8px; text-align: right; font-weight: bold; font-size: 12px;\"></td></tr>

                </table>
                
                
                <!-- Amount in Words -->
               <div style=\"margin-top: 0px; padding: 8px; background-color: #ffb6c1; font-size: 11px; border: 1px solid #888;\">
    <div style=\"text-decoration: underline; margin-bottom: 3px; font-weight: bold; text-align:center;\">
        Amount In Words
    </div>
    <div id=\"amountInWords\" style=\"text-align:center; font-weight:bold;\">
        Loading...
    </div>
</div>

                
                <!-- Signature Section -->
                
            </div>
        </div>
        
        <!-- Terms & Conditions -->
        <div class=\"terms-section\">
            <div class=\"terms-header\">Terms & Conditions :</div>
            1) Subject To Kadapa Jurisdiction.<br>
            2) Goods Once Sold will not be taken back.<br>
            3) Interest @24% will be charged if bill not paid on 0.<br>
            4) Cheque Return charges Rs.500/-<br>
            5) Goods are Delivered at Owner's Risk and Insurance options.
            <div style=\"text-align: right; margin-top: -98px; font-size: 11px;\">
                    <div style=\"margin-bottom: 10px;\">For,&nbsp;&nbsp;SALEEM GOLD COVERING</div>
                    <div style=\"margin-top: 40px; border-top: 1px solid #888; display: inline-block; padding-top: 5px;\">
                        <div style=\"font-style: italic;\">Authorized Signatory</div>
                    </div>
                </div>
        </div>
        
        <!-- Footer -->
        <div class=\"footer\">
            <div> This is System Generated Bill </div>
        </div>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js\"></script>

        <script>
function numberToWordsIndian(num) {
    if (!num || isNaN(num)) return 'Zero Only';

    const a = ['', 'One','Two','Three','Four','Five','Six','Seven','Eight','Nine',
        'Ten','Eleven','Twelve','Thirteen','Fourteen','Fifteen','Sixteen',
        'Seventeen','Eighteen','Nineteen'];
    const b = ['', '', 'Twenty','Thirty','Forty','Fifty','Sixty','Seventy','Eighty','Ninety'];

    function inWords(n) {
        if (n < 20) return a[n];
        if (n < 100) return b[Math.floor(n / 10)] + ' ' + a[n % 10];
        if (n < 1000) return a[Math.floor(n / 100)] + ' Hundred ' + inWords(n % 100);
        if (n < 100000) return inWords(Math.floor(n / 1000)) + ' Thousand ' + inWords(n % 1000);
        if (n < 10000000) return inWords(Math.floor(n / 100000)) + ' Lakh ' + inWords(n % 100000);
        return inWords(Math.floor(n / 10000000)) + ' Crore ' + inWords(n % 10000000);
    }

    return inWords(Math.floor(num)).trim() + ' Only';
}

function printInvoice() {
    window.print();
}

// AUTO SET AMOUNT IN WORDS
document.addEventListener('DOMContentLoaded', function () {
    const totalAmount = ";
        // line 736
        yield Twig\Extension\CoreExtension::round(($context["total_amount"] ?? null), 2);
        yield ";
    document.getElementById('amountInWords').innerText =
        numberToWordsIndian(totalAmount);
});
function downloadInvoice() {
    const invoice = document.querySelector('.invoice-container');
    const noPrintEls = document.querySelectorAll('.no-print');

    noPrintEls.forEach(el => el.style.display = 'none');

    html2pdf()
      .set({
        margin: 10,
        filename: 'Tax_Invoice_";
        // line 749
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "order_id", [], "any", false, false, false, 749);
        yield ".pdf',
        image: { type: 'jpeg', quality: 1 },
        html2canvas: {
            scale: 2,
            useCORS: true,
            scrollY: 0
        },
        jsPDF: {
            unit: 'mm',
            format: 'a4',
            orientation: 'portrait'
        },
        pagebreak: {
            mode: ['avoid-all', 'css']
        }
      })
      .from(invoice)
      .save()
      .then(() => {
          noPrintEls.forEach(el => el.style.display = '');
      });
}

</script>


</body>
</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/purpletree_pos/catalog/view/template/pos/tax_invoice.twig";
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
        return array (  958 => 749,  942 => 736,  864 => 661,  836 => 636,  822 => 625,  815 => 620,  812 => 619,  810 => 618,  798 => 609,  789 => 603,  771 => 587,  768 => 586,  766 => 585,  724 => 546,  717 => 542,  713 => 540,  703 => 531,  692 => 525,  675 => 521,  668 => 517,  663 => 515,  658 => 513,  653 => 511,  646 => 507,  641 => 505,  637 => 503,  634 => 502,  632 => 501,  628 => 499,  610 => 498,  607 => 497,  605 => 496,  603 => 495,  583 => 477,  581 => 476,  579 => 475,  571 => 468,  565 => 465,  562 => 464,  560 => 463,  557 => 462,  551 => 459,  548 => 458,  546 => 457,  540 => 454,  533 => 450,  525 => 445,  517 => 440,  507 => 432,  501 => 429,  498 => 428,  496 => 427,  493 => 426,  487 => 423,  484 => 422,  482 => 421,  476 => 418,  469 => 414,  461 => 409,  453 => 404,  438 => 392,  430 => 387,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Tax Invoice - SALEEM GOLD COVERING</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            
            font-family: \"Roboto Mono\", \"Courier New\", monospace;
            background-color: white;
            padding: 20px;
        }
        
        .invoice-container {
            max-width: 900px;
            margin: 0 auto;
            background-color: white;
            padding: 12px;
            border: 2px solid #888;
        }
        
        .header {
            background-color: #d3d3d3;
            padding: 5px 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 5px;
        }
        
        .header-title {
            font-weight: bold;
            font-size: 14px;
        }
        
        .original-tag {
            font-size: 12px;
        }
        
        .company-name {
            text-align: center;
            font-size: 23px;
            font-weight: bold;
            margin: 10px 0;
            letter-spacing: 2px;
        }
        
        .company-details {
            text-align: center;
            font-size: 11px;
            line-height: 1.6;
            margin-bottom: 10px;
        }
        
        .invoice-header-info {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 10px;
        }
        
        .invoice-info-table {
            border-collapse: collapse;
        }
        
        .invoice-info-table td {
            border: 1px solid #888;
            padding: 3px 8px;
            font-size: 11px;
        }
        
        .section-header {
            background-color: #a9a9a9;
            color: rgb(19, 18, 18);
            padding: 5px 10px;
            font-weight: bold;
            font-size: 12px;
            margin-top: 5px;
        }
        
        .details-row {
            display: flex;
            gap: 10px;
            margin-top: 5px;
        }
        
        .details-box {
            flex: 1;
            font-size: 11px;
            line-height: 1.8;
        }
        
        .details-label {
            font-weight: bold;
            display: inline-block;
            width: 70px;
        }
        
        .pan-section {
            text-align: left;
            font-size: 11px;
            margin: 4px 0;
            font-weight: bold;
        }
        
        table.items-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 5px;
            font-size: 11px;
        }
        
        table.items-table th,
        table.items-table td {
            border: 1px solid #888;
            padding: 5px 8px;
            text-align: left;
        }
        
        table.items-table th {
            background-color: #d3d3d3;
            font-weight: bold;
        }
        
        table.items-table td.center {
            text-align: center;
        }
        
        table.items-table td.right {
            text-align: right;
        }
        
        .total-row {
            text-align: right;
            font-weight: bold;
            padding: 8px 0;
            font-size: 12px;
        }
        
        .bottom-section {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }
        
        .transport-details {
            flex: 1;
        
            color: rgb(7, 7, 7);
            padding: 5px 10px;
            font-size: 11px;
        }
        
        .remarks-section {
            flex: 1;
            font-size: 11px;
        }
        
        .remarks-header {
            background-color: #a9a9a9;
            color: white;
            padding: 5px 10px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .remarks-table {
            width: 100%;
        }
        
        .remarks-table td {
            padding: 3px 8px;
        }
        
        .remarks-table td:first-child {
            font-weight: bold;
        }
        
        .remarks-table td:last-child {
            text-align: right;
        }
        
        .tax-breakdown {
            margin-top: 10px;
            font-size: 11px;
        }
        
        .tax-breakdown table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .tax-breakdown th,
        .tax-breakdown td {
            border: 1px solid #888;
            padding: 4px;
            text-align: center;
        }
        
        .tax-breakdown th {
            background-color: #d3d3d3;
            font-weight: bold;
        }
        
        .amount-in-words {
            margin-top: 5px;
            padding: 5px 10px;
            background-color:white;
            font-weight: bold;
            font-size: 11px;
        }
        
        .signature-section {
            text-align: right;
            margin-top: 10px;
            font-size: 11px;
        }
        
        .terms-section {
            margin-top: 10px;
            font-size: 10px;
            line-height: 1.6;
        }
        
        .terms-header {
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .footer {
            margin-top: 10px;
            font-size: 18px;
            text-align: center;
            color: #666;
        }
        
        .bank-details {
            font-size: 11px;
            margin-top: 5px;
        }
        
        .bank-details-row {
            display: flex;
            gap: 20px;
        }
        
        .bank-detail-item {
            display: flex;
            gap: 10px;
        }
        .details-row {
  display: flex;
  align-items: flex-start;
}

.details-label {
  min-width: 90px;      /* adjust if needed */
  font-weight: bold;
}

.details-value {
  margin-left: 5px;
}
.address-row {
  display: grid;
  grid-template-columns: 80px 10px auto;
  align-items: start;
}

.address-row .details-label {
  font-weight: bold;
}

.address-row .details-colon {
  text-align: center;
}

.address-row .details-value {
  word-break: break-word;
}
/* ===== html2pdf ONLY fix ===== */
.no-break,
.items-table,
.items-table tr,
.items-table td,
.bottom-section {
    page-break-inside: avoid !important;
    break-inside: avoid !important;
}


      @media print {
    * {
        -webkit-print-color-adjust: exact !important;
        print-color-adjust: exact !important;
        color-adjust: exact !important;
    }

    body {
        background: #ffffff !important;
    }

    .invoice-container {
        background: white !important; /* keep pink */
    }

    /* Force dark text */
    body, table, td, th, div, span {
        color: #000000 !important;
        font-weight: 700;
    }
}

@media print {
    .no-print {
        display: none !important;
    }
}


    </style>
    
</head>

<body>
   

    <div class=\"invoice-container\">
        <!-- Header -->
        <div class=\"header\">
            <span class=\"header-title\">Tax Invoice</span>
            <span class=\"original-tag\">Original</span>
        </div>
        
        <!-- Company Name -->
        <div class=\"company-name\">SALEEM GOLD COVERING WHOLESALE</div>
        
        <!-- Company Details -->
        <div class=\"company-details\">
            62/95,SHUKURMIAH
                        STREET,RAYACHOTI,RAYACHOTI - 516269<br>
                        <span class=\"details-label\">State</span>: Andhra Pradesh<br>
            <strong style =\"margin-left : 200px\">GSTIN :</strong>24AUAPK1016G1ZC
            <span style=\"float: right; margin-right: 0px; font-size:15px\"><a href=\"/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"3d4e555c5451584e5556555252514f5c090f047d5a505c5451135e5250\">sgcwholesale@gmail.com</a></span>
        </div>
        <hr>
        <div class=\"no-print\" style=\"text-align:right; margin-bottom:10px;\">
    <button onclick=\"printInvoice()\" 
            style=\"
                padding:6px 14px;
                font-size:12px;
                font-weight:bold;
                background:#007bff;
                color:#fff;
                border:none;
                cursor:pointer;
            \">
         Print
    </button>
    <button onclick=\"downloadInvoice()\"
        style=\"
            padding:6px 14px;
            font-size:12px;
            font-weight:bold;
            background:#d977bc;
            color:#fff;
            border:none;
            cursor:pointer;
            margin-left:6px;
        \">
    ⬇ Download
</button>

</div>

        <!-- Invoice Info -->
        <div class=\"invoice-header-info\">
            <table class=\"invoice-info-table\">
                <tr>
                    <td><strong>Invoice No</strong></td>
                    <td>{{ order.order_id }}
                </td>
                </tr>
                <tr>
                    <td><strong>Invoice Date</strong></td>
                    <td>  {{ order.date_added|date(\"d-m-Y h:i A\", \"Asia/Kolkata\") }}
                </td>
                </tr>
            </table>
        </div>
        
        <!-- Receiver and Consignee Details Section -->
        <div style=\"display: flex; gap: 10px; margin-top: -11px;\">
            <!-- Receiver Details -->
            <div style=\"flex: 1;\">
                <div class=\"section-header\">Details of Receiver (Billed to)</div>
                <div class=\"details-box\" style=\"margin-top: 5px;\">
<div><span class=\"details-label\">Name</span>: <b>{{ r_name }}</b></div>

<div class=\"details-row address-row\">
  <span class=\"details-label\">Address</span>
  <span class=\"details-colon\">:</span>
  <span class=\"details-value\">{{ r_address }}</span>
</div>


<div style=\"margin-top: 10px;\">
  <span class=\"details-label\">State</span>: {{ r_state }}
</div>

<div>
  <span class=\"details-label\">Mob.No</span>: {{ r_mobile }}
</div>

{% if r_gstin %}
<div>
  <span class=\"details-label\">GSTIN</span>: {{ r_gstin }}
</div>
{% endif %}

{% if c_pan %}
<div>
  <span class=\"details-label\">Pan No</span>: {{ r_pan }}
</div>
{% endif %}
                </div>
                        
            </div>
            
            <!-- Consignee Details -->
            <div style=\"flex: 1;\">
                <div class=\"section-header\">Details of Consignee (shipped to)</div>
                <div class=\"details-box\" style=\"margin-top: 5px;\">
                   <div><span class=\"details-label\">Name</span>: <b>{{ c_name }}</b></div>

<div class=\"details-row address-row\">
  <span class=\"details-label\">Address</span>
  <span class=\"details-colon\">:</span>
  <span class=\"details-value\">{{ c_address }}</span>
</div>


<div style=\"margin-top: 10px;\">
  <span class=\"details-label\">State</span>: {{ c_state }}
</div>

<div>
  <span class=\"details-label\">Mob.No</span>: {{ c_mobile }}
</div>

{% if c_gstin %}
<div>
  <span class=\"details-label\">GSTIN</span>: {{ c_gstin }}
</div>
{% endif %}

{% if c_pan %}
<div>
  <span class=\"details-label\">Pan No</span>: {{ c_pan }}
</div>
{% endif %}

                </div>
            </div>
        </div>
        
        <!-- Items Table -->
    {# ================= INITIALIZE TOTALS ================= #}
{% set total_qty = 0 %}
{% set total_taxable = 0 %}

<table class=\"items-table\">
    <thead>
        <tr>
            <th style=\"width:40px;\">S.No</th>
            <th>Particulars</th>
            <th style=\"width:80px;\">HSN / SAC</th>
            <th style=\"width:70px;\">MRP</th>
            <th style=\"width:60px;\">PCS</th>
            <th style=\"width:60px;\">GST (%)</th>
            <th style=\"width:70px;\">Rate</th>
            <th style=\"width:60px;\">Disc (%)</th>
            <th style=\"width:90px;\">Taxable Value</th>
        </tr>
    </thead>

    <tbody>

{% set total_qty = 0 %}
{% set total_taxable = 0 %}

{% for p in order.products %}


    {% set total_qty = total_qty + p.qty %}
    {% set total_taxable = total_taxable + p.taxable_value %}

    <tr>
        <td class=\"center\">{{ loop.index }}</td>

        <td>{{ p.name }}</td>

        <td class=\"center\">7117</td>

        <td class=\"right\">{{ p.rate }}</td>

        <td class=\"center\">{{ p.qty }}</td>

        <td class=\"center\">{{ p.gst }}%</td>

        <td class=\"right\">{{ p.rate }}</td>

        <td class=\"center\">0</td>

        <td class=\"right\">{{ p.taxable_value }}</td>
    </tr>

{% else %}

    <tr>
        <td colspan=\"9\">No products found</td>
    </tr>

{% endfor %}

<tr>
    <td colspan=\"9\" style=\"height:80px;\"></td>
</tr>

</tbody>

</table>
{# ================= TOTAL ROW ================= #}
<div class=\"total-row\">
    <span style=\"margin-right:40px;\">
        <strong>Total Qty :</strong> {{ order.total_qty }}
    </span>

    <span>
        <strong>Total Taxable :</strong> {{ order.total_taxable|number_format(2, '.', '') }}
    </span>
</div>

  <div class=\"bottom-section\" style=\"border: 1px solid #888; padding: 10px; margin-top: -3px;\">

            <!-- Left Side: Transport, Bank, Tax Details -->
            <div style=\"flex: 1.2;\">
                <div class=\"transport-details\" style=\"border: 1px solid #888;\">
                    <div style=\"font-weight: bold;color: black;background-color: #a9a9a9;height: 21px;padding: 5px 1px;\">Transportation Details</div>
                    <div style=\"display: flex; gap: 30px;\">
                        <div>
                            <div>Trans Name :</div>
                            <div>Lr.no :</div>
                        </div>
                        <div>
                            <div>Veh No :</div>
                            <div>Station : </div>
                        </div>
                    </div>
                </div>
                
                <!-- Bank Details -->
                <div style=\"margin-top: 10px; font-size: 11px;  color: rgb(7, 7, 7); padding: 5px 10px; border: 1px solid #888;\">
                    <div style=\"font-weight: bold; margin-bottom: 5px;color: black;background-color: #a9a9a9;height: 21px;padding: 5px 1px;\">Bank Details</div>
                    <div style=\"display: flex; gap: 30px;\">
                        <div>
                            <div>Bank Name : IDBI BANK</div>
                            <div>Branch Name : varachha road</div>
                        </div>
                        <div>
                            <div>A/c No : 0290102000063504</div>
                            <div>IFSC Code : IBKL0000290</div>
                        </div>
                    </div>
                </div>
                
                <!-- Tax Breakdown -->
                <div class=\"tax-breakdown\" style=\"margin-top: 10px;\">
                   {% set cgst = total_taxable * 3 / 100 %}
                {% set total_amount = total_taxable + cgst %}
                    <table>
                        <tr>
                            <th rowspan=\"2\" style=\"font-size: 10px;\">GST Taxable<br>(%) Value</th>
                            <th colspan=\"2\">Central Tax</th>
                            <th colspan=\"2\">State Tax</th>
                            <th colspan=\"2\">Integrated Tax</th>
                        </tr>
                        <tr>
                            <th>Rate</th>
                            <th>Amount</th>
                            <th>Rate</th>
                            <th>Amount</th>
                            <th>Rate</th>
                            <th>Amount</th>
                        </tr>
                        <tr>
                            <td style=\"font-size: 10px;\">3% {{ total_taxable|number_format(2, '.', '') }}</td>
                              <td> 0.00%</td>
                            <td> 0.00%</td>
                            <td>0.00%</td>
                            <td>0.00</td>
                            <td>3.00%</td>
                            <td>{{ cgst|number_format(2, '.', '') }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <!-- Right Side: Remarks Section -->
            <div style=\"flex: 0.8;\">
                <div class=\"remarks-header\">Remarks</div>
                {% set cgst = total_taxable * 3 / 100 %}
                {% set total_amount = total_taxable + cgst %}


                <table style=\"width: 100%; border-collapse: collapse; font-size: 11px;border: 1px solid #888;\">
                    <tr>
                        <td style=\"padding: 5px 8px; border-bottom: 1px solid #888;\"><b>Gross Amt</b></td>
                        <td style=\"padding: 5px 8px; text-align: right; border-bottom: 1px solid #888;\"><b>{{ total_taxable|number_format(2, '.', '') }}</b></td>
                    </tr>
                    <tr>
                        <td style=\"padding: 5px 8px; border-bottom: 1px solid #888;\">Tot.Discount</td>
                        <td style=\"padding: 5px 8px; text-align: right; border-bottom: 1px solid #888;\">0.00</td>
                    </tr>
                   <tr>
                    <td style=\"padding: 5px 8px; border-bottom: 1px solid #888;\">
                        CGST @ 3%
                    </td>
                    <td style=\"padding: 5px 8px; text-align: right; border-bottom: 1px solid #888;\">
                        {{ cgst|number_format(2, '.', '') }}
                    </td>
                </tr>

                    <tr>
                        <td style=\"padding: 5px 8px; border-bottom: 1px solid #888;\">SGST</td>
                        <td style=\"padding: 5px 8px; text-align: right; border-bottom: 1px solid #888;\">0.00</td>
                    </tr>
                    <tr>
                        <td style=\"padding: 5px 8px; border-bottom: 1px solid #888;\">IGST</td>
                        <td style=\"padding: 5px 8px; text-align: right; border-bottom: 1px solid #888;\">0.00</td>
                    </tr>
                    <tr>
                        <td style=\"padding: 5px 8px; border-bottom: 1px solid #888;\">Add charges</td>
                        <td style=\"padding: 5px 8px; text-align: right; border-bottom: 1px solid #888;\">0.00</td>
                    </tr>
                    <tr>
                        <td style=\"padding: 5px 8px; border-bottom: 1px solid #888;\">Add Disc</td>
                        <td style=\"padding: 5px 8px; text-align: right; border-bottom: 1px solid #888;\">0.00</td>
                    </tr>
                    <tr>
                        <td style=\"padding: 5px 8px; border-bottom: 1px solid #888; font-weight:bold;\">
                            Total Amount
                        </td>
                        <td style=\"padding: 5px 8px; text-align: right; border-bottom: 1px solid #888; font-weight:bold;\">
                            {{ total_amount|number_format(2, '.', '') }}
                        </td>
                    </tr>

                    <tr><td style=\"padding: 5px 8px; border-bottom: 1px solid #888;\">GST Payable on Reverse Charge : N.A.</td>
                    <td style=\"padding: 5px 8px; text-align: right; font-weight: bold; font-size: 12px;\"></td></tr>

                </table>
                
                
                <!-- Amount in Words -->
               <div style=\"margin-top: 0px; padding: 8px; background-color: #ffb6c1; font-size: 11px; border: 1px solid #888;\">
    <div style=\"text-decoration: underline; margin-bottom: 3px; font-weight: bold; text-align:center;\">
        Amount In Words
    </div>
    <div id=\"amountInWords\" style=\"text-align:center; font-weight:bold;\">
        Loading...
    </div>
</div>

                
                <!-- Signature Section -->
                
            </div>
        </div>
        
        <!-- Terms & Conditions -->
        <div class=\"terms-section\">
            <div class=\"terms-header\">Terms & Conditions :</div>
            1) Subject To Kadapa Jurisdiction.<br>
            2) Goods Once Sold will not be taken back.<br>
            3) Interest @24% will be charged if bill not paid on 0.<br>
            4) Cheque Return charges Rs.500/-<br>
            5) Goods are Delivered at Owner's Risk and Insurance options.
            <div style=\"text-align: right; margin-top: -98px; font-size: 11px;\">
                    <div style=\"margin-bottom: 10px;\">For,&nbsp;&nbsp;SALEEM GOLD COVERING</div>
                    <div style=\"margin-top: 40px; border-top: 1px solid #888; display: inline-block; padding-top: 5px;\">
                        <div style=\"font-style: italic;\">Authorized Signatory</div>
                    </div>
                </div>
        </div>
        
        <!-- Footer -->
        <div class=\"footer\">
            <div> This is System Generated Bill </div>
        </div>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js\"></script>

        <script>
function numberToWordsIndian(num) {
    if (!num || isNaN(num)) return 'Zero Only';

    const a = ['', 'One','Two','Three','Four','Five','Six','Seven','Eight','Nine',
        'Ten','Eleven','Twelve','Thirteen','Fourteen','Fifteen','Sixteen',
        'Seventeen','Eighteen','Nineteen'];
    const b = ['', '', 'Twenty','Thirty','Forty','Fifty','Sixty','Seventy','Eighty','Ninety'];

    function inWords(n) {
        if (n < 20) return a[n];
        if (n < 100) return b[Math.floor(n / 10)] + ' ' + a[n % 10];
        if (n < 1000) return a[Math.floor(n / 100)] + ' Hundred ' + inWords(n % 100);
        if (n < 100000) return inWords(Math.floor(n / 1000)) + ' Thousand ' + inWords(n % 1000);
        if (n < 10000000) return inWords(Math.floor(n / 100000)) + ' Lakh ' + inWords(n % 100000);
        return inWords(Math.floor(n / 10000000)) + ' Crore ' + inWords(n % 10000000);
    }

    return inWords(Math.floor(num)).trim() + ' Only';
}

function printInvoice() {
    window.print();
}

// AUTO SET AMOUNT IN WORDS
document.addEventListener('DOMContentLoaded', function () {
    const totalAmount = {{ total_amount|round(2) }};
    document.getElementById('amountInWords').innerText =
        numberToWordsIndian(totalAmount);
});
function downloadInvoice() {
    const invoice = document.querySelector('.invoice-container');
    const noPrintEls = document.querySelectorAll('.no-print');

    noPrintEls.forEach(el => el.style.display = 'none');

    html2pdf()
      .set({
        margin: 10,
        filename: 'Tax_Invoice_{{ order.order_id }}.pdf',
        image: { type: 'jpeg', quality: 1 },
        html2canvas: {
            scale: 2,
            useCORS: true,
            scrollY: 0
        },
        jsPDF: {
            unit: 'mm',
            format: 'a4',
            orientation: 'portrait'
        },
        pagebreak: {
            mode: ['avoid-all', 'css']
        }
      })
      .from(invoice)
      .save()
      .then(() => {
          noPrintEls.forEach(el => el.style.display = '');
      });
}

</script>


</body>
</html>", "extension/purpletree_pos/catalog/view/template/pos/tax_invoice.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/extension/purpletree_pos/catalog/view/template/pos/tax_invoice.twig");
    }
}
