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

/* admin/view/template/sale/gstinvoice.twig */
class __TwigTemplate_6ee4c0c0d9523b1f726941c6cd2ff409 extends Template
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
            
            font-family: \"Open Sans\", sans-serif;
            background-color: #fff;
            padding: 20px;
        }
        
        .invoice-container {
            max-width: 900px;
            margin: 0 auto;
            background-color: #fff;
            padding: 12px;
            border: 2px solid #888;
        }
        
        .header {
            background-color: ##e0d2d2;
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
            background-color: #e0d2d2;
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
            background-color: #e0d2d2;
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
            background-color: #e0d2d2;
            color: black;
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
            background-color: #e0d2d2;
            font-weight: bold;
        }
        
        .amount-in-words {
            margin-top: 5px;
            padding: 5px 10px;
            background-color: #e0d2d2;
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
  margin-left:-6px;
}

.address-row .details-value {
  word-break: break-word;
  margin-left:-14px;
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
    }

    body {
        background: #ffffff !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    .invoice-container {
        background: #ffffff !important;
        width: 100% !important;
    }

    body, table, td, th, div, span {
        color: #000000 !important;
    }

    .no-print {
        display: none !important;
    }
}

.items-table tr {
    page-break-inside: avoid !important;
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
                        ";
        // line 352
        yield "                         <strong style =\"margin-left : -38px\">STATE :</strong>Andhra Pradesh<br>
            <strong style =\"margin-left : 158px\">GSTIN :</strong>24AUAPK1016G1ZC
            <span style=\"float: right; margin-right: 0px; font-size:15px\"><a href=\"/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"3d4e555c5451584e5556555252514f5c090f047d5a505c5451135e5250\">sgcwholesale@gmail.com</a></span>
        </div>
        <hr>
        <div class=\"no-print\" style=\"text-align:right; margin-bottom:10px;\">
    <button onclick=\"printInvoice()\" 
            style=\"
                padding:8px 30px;
                font-size:12px;
                font-weight:bold;
                background:#e0d2d2;
                color:black;
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
            background:#e0d2d2;
            color:black;
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
        // line 391
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "order_id", [], "any", false, false, false, 391);
        yield "
                </td>
                </tr>
                <tr>
                    <td><strong>Invoice Date</strong></td>
                    <td>  ";
        // line 396
        yield $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "date_added", [], "any", false, false, false, 396), "d-m-Y h:i A", "Asia/Kolkata");
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
        // line 408
        yield ($context["r_name"] ?? null);
        yield "</b></div>

<div class=\"details-row address-row\">
  <span class=\"details-label\">Address</span>
  <span class=\"details-colon\">:</span>
  <span class=\"details-value\">";
        // line 413
        yield ($context["r_address"] ?? null);
        yield "</span>
</div>


<div>
  <span class=\"details-label\">State</span>: ";
        // line 418
        yield ($context["r_state"] ?? null);
        yield "
</div>

<div>
  <span class=\"details-label\">Mob.No</span>: ";
        // line 422
        yield ($context["r_mobile"] ?? null);
        yield "
</div>

";
        // line 425
        if (($context["r_gstin"] ?? null)) {
            // line 426
            yield "<div>
  <span class=\"details-label\">GSTIN</span>: ";
            // line 427
            yield ($context["r_gstin"] ?? null);
            yield "
</div>
";
        }
        // line 430
        yield "
";
        // line 431
        if (($context["c_pan"] ?? null)) {
            // line 432
            yield "<div>
  <span class=\"details-label\">Pan No</span>: ";
            // line 433
            yield ($context["r_pan"] ?? null);
            yield "
</div>
";
        }
        // line 436
        yield "                </div>
                        
            </div>
            
            <!-- Consignee Details -->
            <div style=\"flex: 1;\">
                <div class=\"section-header\">Details of Consignee (shipped to)</div>
                <div class=\"details-box\" style=\"margin-top: 5px;\">
                   <div><span class=\"details-label\">Name</span>: <b>";
        // line 444
        yield ($context["c_name"] ?? null);
        yield "</b></div>

<div class=\"details-row address-row\">
  <span class=\"details-label\">Address</span>
  <span class=\"details-colon\">:</span>
  <span class=\"details-value\">";
        // line 449
        yield ($context["c_address"] ?? null);
        yield "</span>
</div>


<div>
  <span class=\"details-label\">State</span>: ";
        // line 454
        yield ($context["c_state"] ?? null);
        yield "
</div>

<div>
  <span class=\"details-label\">Mob.No</span>: ";
        // line 458
        yield ($context["c_mobile"] ?? null);
        yield "
</div>

";
        // line 461
        if (($context["c_gstin"] ?? null)) {
            // line 462
            yield "<div>
  <span class=\"details-label\">GSTIN</span>: ";
            // line 463
            yield ($context["c_gstin"] ?? null);
            yield "
</div>
";
        }
        // line 466
        yield "
";
        // line 467
        if (($context["c_pan"] ?? null)) {
            // line 468
            yield "<div>
  <span class=\"details-label\">Pan No</span>: ";
            // line 469
            yield ($context["c_pan"] ?? null);
            yield "
</div>
";
        }
        // line 472
        yield "
                </div>
            </div>
        </div>
        
        <!-- Items Table -->
    ";
        // line 479
        $context["total_qty"] = 0;
        // line 480
        $context["total_taxable"] = 0;
        // line 481
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
            <th style=\"width:70px;\">Disc (%)</th>
            <th style=\"width:90px;\">Taxable Value</th>
        </tr>
    </thead>

    <tbody>
    ";
        // line 498
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "products", [], "any", false, false, false, 498));
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
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 499
            yield "    ";
            $context["cgst"] = ((($context["total_taxable"] ?? null) * 3) / 100);
            // line 500
            yield "

        ";
            // line 503
            yield "        ";
            $context["original_rate"] = $this->extensions['Twig\Extension\CoreExtension']->formatNumber(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 503), ["â‚¹" => "", "," => "", "Rs." => "", "Rs" => ""])), 2, ".", "");
            // line 508
            yield "
        ";
            // line 509
            $context["qty"] = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 509);
            // line 510
            yield "
        ";
            // line 512
            yield "        ";
            $context["rate"] = ((($context["original_rate"] ?? null) * ($context["tax_percent"] ?? null)) / 100);
            // line 513
            yield "
        ";
            // line 515
            yield "        ";
            $context["taxable"] = (($context["qty"] ?? null) * ($context["rate"] ?? null));
            // line 516
            yield "
        ";
            // line 518
            yield "        ";
            $context["total_qty"] = (($context["total_qty"] ?? null) + ($context["qty"] ?? null));
            // line 519
            yield "        ";
            $context["total_taxable"] = (($context["total_taxable"] ?? null) + ($context["taxable"] ?? null));
            // line 520
            yield "
        <tr>
            <td class=\"center\">";
            // line 522
            yield CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 522);
            yield "</td>

            <td>";
            // line 524
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 524);
            yield "</td>

            <td class=\"center\">";
            // line 526
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "hsn", [], "any", true, true, false, 526) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["product"], "hsn", [], "any", false, false, false, 526)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "hsn", [], "any", false, false, false, 526)) : ("7117"));
            yield "</td>

            ";
            // line 529
            yield "            <td class=\"center\">";
            yield $this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["rate"] ?? null), 2, ".", "");
            yield "</td>

            <td class=\"center\">";
            // line 531
            yield ($context["qty"] ?? null);
            yield "</td>

            ";
            // line 534
            yield "            <td class=\"center\">3%</td>

            <td class=\"center\">";
            // line 536
            yield $this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["rate"] ?? null), 2, ".", "");
            yield "</td>

            <td class=\"center\">0</td>

            <td class=\"center\">";
            // line 540
            yield $this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["taxable"] ?? null), 2, ".", "");
            yield "</td>
        </tr>

    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 544
        yield "
        ";
        // line 546
        yield "        <tr>
            <td colspan=\"9\" style=\"height:80px;\"></td>
        </tr>
    </tbody>
</table>
";
        // line 552
        yield "<div class=\"total-row\">
    <span style=\"margin-right:40px;\">
        <strong>Total Qty :</strong> ";
        // line 554
        yield ($context["total_qty"] ?? null);
        yield "
    </span>

    <span>
        <strong>Total Taxable :</strong> ";
        // line 558
        yield $this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["total_taxable"] ?? null), 2, ".", "");
        yield "
    </span>
</div>


        
        <!-- Bottom Section -->
        <div class=\"no-break\">
  <div class=\"bottom-section\" style=\"border: 1px solid #888; padding: 10px; margin-top: -3px;\">

            <!-- Left Side: Transport, Bank, Tax Details -->
            <div style=\"flex: 1.2;\">
                <div class=\"transport-details\" style=\"border: 1px solid #888;\">
                    <div style=\"font-weight: bold;color: black;background-color: #e0d2d2;;height: 21px;padding: 5px 1px;\">Transportation Details</div>
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
                    <div style=\"font-weight: bold; margin-bottom: 5px;color: black;background-color: #e0d2d2;height: 21px;padding: 5px 1px;\">Bank Details</div>
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
        // line 601
        $context["cgst"] = ((($context["total_taxable"] ?? null) * 3) / 100);
        // line 602
        yield "                ";
        $context["total_amount"] = (($context["total_taxable"] ?? null) + ($context["cgst"] ?? null));
        // line 603
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
        // line 619
        yield $this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["total_taxable"] ?? null), 2, ".", "");
        yield "</td>
                              <td> 0.00%</td>
                            <td> 0.00%</td>
                            <td>0.00%</td>
                            <td>0.00</td>
                            <td>3.00%</td>
                            <td>";
        // line 625
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
        // line 634
        $context["cgst"] = ((($context["total_taxable"] ?? null) * 3) / 100);
        // line 635
        yield "                ";
        $context["total_amount"] = (($context["total_taxable"] ?? null) + ($context["cgst"] ?? null));
        // line 636
        yield "

                <table style=\"width: 100%; border-collapse: collapse; font-size: 11px;border: 1px solid #888;\">
                    <tr>
                        <td style=\"padding: 5px 8px; border-bottom: 1px solid #888;\"><b>Gross Amt</b></td>
                        <td style=\"padding: 5px 8px; text-align: right; border-bottom: 1px solid #888;\"><b>";
        // line 641
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
        // line 652
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
        // line 677
        yield $this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["total_amount"] ?? null), 2, ".", "");
        yield "
                        </td>
                    </tr>

                    <tr><td style=\"padding: 5px 8px; border-bottom: 1px solid #888;\">GST Payable on Reverse Charge : N.A.</td>
                    <td style=\"padding: 5px 8px; text-align: right; font-weight: bold; font-size: 12px;\"></td></tr>

                </table>
                
                
                <!-- Amount in Words -->
               <div style=\"margin-top: 0px; padding: 8px; background-color: #e0d2d2;; font-size: 11px; border: 1px solid #888;\">
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
        // line 752
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
        // line 765
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "order_id", [], "any", false, false, false, 765);
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
        return "admin/view/template/sale/gstinvoice.twig";
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
        return array (  978 => 765,  962 => 752,  884 => 677,  856 => 652,  842 => 641,  835 => 636,  832 => 635,  830 => 634,  818 => 625,  809 => 619,  791 => 603,  788 => 602,  786 => 601,  740 => 558,  733 => 554,  729 => 552,  722 => 546,  719 => 544,  701 => 540,  694 => 536,  690 => 534,  685 => 531,  679 => 529,  674 => 526,  669 => 524,  664 => 522,  660 => 520,  657 => 519,  654 => 518,  651 => 516,  648 => 515,  645 => 513,  642 => 512,  639 => 510,  637 => 509,  634 => 508,  631 => 503,  627 => 500,  624 => 499,  607 => 498,  588 => 481,  586 => 480,  584 => 479,  576 => 472,  570 => 469,  567 => 468,  565 => 467,  562 => 466,  556 => 463,  553 => 462,  551 => 461,  545 => 458,  538 => 454,  530 => 449,  522 => 444,  512 => 436,  506 => 433,  503 => 432,  501 => 431,  498 => 430,  492 => 427,  489 => 426,  487 => 425,  481 => 422,  474 => 418,  466 => 413,  458 => 408,  443 => 396,  435 => 391,  394 => 352,  42 => 1,);
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
            
            font-family: \"Open Sans\", sans-serif;
            background-color: #fff;
            padding: 20px;
        }
        
        .invoice-container {
            max-width: 900px;
            margin: 0 auto;
            background-color: #fff;
            padding: 12px;
            border: 2px solid #888;
        }
        
        .header {
            background-color: ##e0d2d2;
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
            background-color: #e0d2d2;
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
            background-color: #e0d2d2;
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
            background-color: #e0d2d2;
            color: black;
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
            background-color: #e0d2d2;
            font-weight: bold;
        }
        
        .amount-in-words {
            margin-top: 5px;
            padding: 5px 10px;
            background-color: #e0d2d2;
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
  margin-left:-6px;
}

.address-row .details-value {
  word-break: break-word;
  margin-left:-14px;
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
    }

    body {
        background: #ffffff !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    .invoice-container {
        background: #ffffff !important;
        width: 100% !important;
    }

    body, table, td, th, div, span {
        color: #000000 !important;
    }

    .no-print {
        display: none !important;
    }
}

.items-table tr {
    page-break-inside: avoid !important;
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
                        {#<span class=\"details-label\" style=\"margin-left:-38px;\">STATE :</span> Andhra Pradesh<br>#}
                         <strong style =\"margin-left : -38px\">STATE :</strong>Andhra Pradesh<br>
            <strong style =\"margin-left : 158px\">GSTIN :</strong>24AUAPK1016G1ZC
            <span style=\"float: right; margin-right: 0px; font-size:15px\"><a href=\"/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"3d4e555c5451584e5556555252514f5c090f047d5a505c5451135e5250\">sgcwholesale@gmail.com</a></span>
        </div>
        <hr>
        <div class=\"no-print\" style=\"text-align:right; margin-bottom:10px;\">
    <button onclick=\"printInvoice()\" 
            style=\"
                padding:8px 30px;
                font-size:12px;
                font-weight:bold;
                background:#e0d2d2;
                color:black;
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
            background:#e0d2d2;
            color:black;
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


<div>
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


<div>
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
            <th style=\"width:70px;\">Disc (%)</th>
            <th style=\"width:90px;\">Taxable Value</th>
        </tr>
    </thead>

    <tbody>
    {% for product in order.products %}
    {% set cgst = total_taxable * 3 / 100 %}


        {# ORIGINAL RATE FROM DB #}
        {% set original_rate = product.price
            |replace({'â‚¹':'', ',':'', 'Rs.':'', 'Rs':''})
            |trim
            |number_format(2, '.', '')
        %}

        {% set qty = product.quantity %}

        {# RATE = ONLY TAX % OF ORIGINAL RATE #}
        {% set rate = (original_rate * tax_percent) / 100 %}

        {# TAXABLE VALUE = QTY Ã— RATE #}
        {% set taxable = qty * rate %}

        {# ADD TO TOTALS #}
        {% set total_qty = total_qty + qty %}
        {% set total_taxable = total_taxable + taxable %}

        <tr>
            <td class=\"center\">{{ loop.index }}</td>

            <td>{{ product.name }}</td>

            <td class=\"center\">{{ product.hsn ?? '7117' }}</td>

            {# MRP SAME AS RATE #}
            <td class=\"center\">{{ rate|number_format(2, '.', '') }}</td>

            <td class=\"center\">{{ qty }}</td>

            {# GST DISPLAY ONLY (FIXED) #}
            <td class=\"center\">3%</td>

            <td class=\"center\">{{ rate|number_format(2, '.', '') }}</td>

            <td class=\"center\">0</td>

            <td class=\"center\">{{ taxable|number_format(2, '.', '') }}</td>
        </tr>

    {% endfor %}

        {# EMPTY SPACE ROW #}
        <tr>
            <td colspan=\"9\" style=\"height:80px;\"></td>
        </tr>
    </tbody>
</table>
{# ================= TOTAL ROW ================= #}
<div class=\"total-row\">
    <span style=\"margin-right:40px;\">
        <strong>Total Qty :</strong> {{ total_qty }}
    </span>

    <span>
        <strong>Total Taxable :</strong> {{ total_taxable|number_format(2, '.', '') }}
    </span>
</div>


        
        <!-- Bottom Section -->
        <div class=\"no-break\">
  <div class=\"bottom-section\" style=\"border: 1px solid #888; padding: 10px; margin-top: -3px;\">

            <!-- Left Side: Transport, Bank, Tax Details -->
            <div style=\"flex: 1.2;\">
                <div class=\"transport-details\" style=\"border: 1px solid #888;\">
                    <div style=\"font-weight: bold;color: black;background-color: #e0d2d2;;height: 21px;padding: 5px 1px;\">Transportation Details</div>
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
                    <div style=\"font-weight: bold; margin-bottom: 5px;color: black;background-color: #e0d2d2;height: 21px;padding: 5px 1px;\">Bank Details</div>
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
               <div style=\"margin-top: 0px; padding: 8px; background-color: #e0d2d2;; font-size: 11px; border: 1px solid #888;\">
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
</html>", "admin/view/template/sale/gstinvoice.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/admin/view/template/sale/gstinvoice.twig");
    }
}
