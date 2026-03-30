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

/* admin/view/template/sale/order_invoice.twig */
class __TwigTemplate_2d438b4854e195364a610a62e438a5ce extends Template
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
<html dir=\"";
        // line 2
        yield ($context["direction"] ?? null);
        yield "\" lang=\"";
        yield ($context["lang"] ?? null);
        yield "\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Saleem Gold Covering Receipt</title>
    <base href=\"";
        // line 7
        yield ($context["base"] ?? null);
        yield "\"/>
    <link href=\"";
        // line 8
        yield ($context["bootstrap_css"] ?? null);
        yield "\" type=\"text/css\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 9
        yield ($context["icons"] ?? null);
        yield "\" type=\"text/css\" rel=\"stylesheet\"/>
    <script src=\"";
        // line 10
        yield ($context["jquery"] ?? null);
        yield "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 11
        yield ($context["bootstrap_js"] ?? null);
        yield "\" type=\"text/javascript\"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&family=Noto+Sans+Devanagari:wght@400;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f3f3f3;
            font-family: 'Roboto', 'Noto Sans Devanagari', sans-serif;
            display: flex;
            justify-content: center;
            padding-top: 20px;
            color: #000;
        }

        .receipt-container {
            width: 80mm;
            max-width: 80mm;
            background-color: #fff;
            padding: 5mm;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            position: relative;
            overflow: hidden;
        }

        .text-center { text-align: center; }
        .text-right { text-align: right; }
        .text-left { text-align: left; }
        .bold { font-weight: 700; }
        
        .line {
            border-bottom: 1px solid #000;
            margin: 5px 0;
        }

        .header-top {
            font-size: 10px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .logo-section {
            text-align: center;
            margin-bottom: 5px;
        }
        
        .logo-main {
            font-size: 20px;
            font-weight: 900;
            line-height: 1.2;
            font-family: serif;
            text-transform: uppercase;
            word-wrap: break-word;
            color:#000;
        }
        
        .logo-tagline {
            font-size: 9px;
            color: #000;
            font-weight: bold;
            margin-bottom: 5px;
            margin-top: 2px;
        }

        .store-info {
            font-size: 10px;
            font-weight: 700;
            line-height: 1.3;
            color: #000;
        }

        .gst-info {
            font-size: 10px;
            font-weight: 700;
            margin-top: 5px;
        }

        .bill-details {
            display: flex;
            justify-content: space-between;
            font-size: 10px;
            font-weight: 700;
            margin-top: 5px;
        }


        .items-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 10px;
            table-layout: fixed;
        }

        .items-table th {
            text-align: center;
            border-bottom: 1px solid #000;
            padding: 3px 0;
            white-space: nowrap;
        }
        .items-table th:first-child { text-align: left; }

        .item-name-row td {
            padding-top: 5px;
            font-weight: 700;
            font-size: 11px;
        }

        .item-data-row td {
            text-align: center;
            padding-bottom: 5px;
            font-size: 10px;
            white-space: nowrap;
            overflow: hidden;
            padding: 3px 0;
        }

        .total-qty-bar {
            display: flex;
            justify-content: space-between;
            border-top: 1px solid #000;
            border-bottom: 1px solid #000;
            padding: 3px 0;
            font-weight: 700;
            font-size: 11px;
            margin-top: 5px;
        }

        .summary-table {
            width: 100%;
            font-size: 12px;
            font-weight: 500;
            text-align: right;
            margin-top: 5px;
        }
        
        .amount-words {
            font-size: 10px;
            font-weight: 700;
            margin-top: 5px;
            border-bottom: 1px solid #000;
            padding-bottom: 5px;
        }

        .savings-line {
            text-align: center;
            font-weight: 700;
            font-size: 11px;
            margin: 10px 0;
        }

        .terms {
            font-size: 9px;
            font-weight: 600;
            margin-top: 10px;
        }
        
        .align-right { text-align: right; }
        .align-center { text-align: center; }
        
        .total-row {
            font-weight: bold;
            background-color: #fafafa;
        }
        .items-table tbody td {
    text-align: center !important;   /* Horizontal center */
    vertical-align: top !important;  /* Vertical top */
}

/* First column (Item Name) left aligned */
.items-table tbody td:first-child {
    text-align: left !important;
}


        @media print {
            body {
                background: white;
                padding: 0;
                margin: 0;
                color: #000 !important;
            }

            .receipt-container {
                width: 80mm;
                max-width: 80mm;
                box-shadow: none;
                padding: 3mm;
                margin: 0;
                page-break-after: always;
            }

            * {
                color: #000 !important;
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
            }

            @page {
                size: 80mm auto;
                margin: 0;
            }
            
            html, body {
                height: auto;
                overflow: hidden;
            }
        }
        
        /* Watermark styling - mostly black but details visible */
        .watermark {
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0.35;
            pointer-events: none;
            z-index: 0;
            width: 90%;
            height: auto;
        }

        .watermark img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 50%;
            /* ~90% black, 10% light details visible */
           image-rendering: pixelated;
           image-rendering: crisp-edges;
        }
        
        

        /* Content wrapper to ensure it's above watermark */
        .content-wrapper {
            position: relative;
            z-index: 1;
        }

        .bold { font-weight: 700; }
        .line { border-bottom: 1px solid #000; margin: 5px 0; }
        .tax-row {
    display: flex;
    justify-content: flex-end;
    font-size: 12px;
    font-weight: 500;
    font-family: 'Roboto', 'Noto Sans Devanagari', sans-serif;
    margin-bottom: 3px;
}

.tax-row span:first-child {
    min-width: 90px;
    text-align: left;
}
.excluded-item {
    text-decoration: line-through;
    opacity: 0.6;
}

.cancelled-invoice {
    position: relative;
}

.cancelled-invoice::after {
    content: \"CANCELLED\";
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) rotate(-35deg);
    font-size: 60px;
    font-weight: 900;
    color: rgba(255, 0, 0, 0.25);
    z-index: 999;
    pointer-events: none;
}

.cancelled-invoice {
    opacity: 0.7;
}


    </style>
</head>
<body>

";
        // line 300
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["orders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 301
            $context["cgst"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "invoice", [], "any", false, false, false, 301), "sub_total", [], "any", false, false, false, 301) * 0.015);
            // line 302
            $context["sgst"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "invoice", [], "any", false, false, false, 302), "sub_total", [], "any", false, false, false, 302) * 0.015);
            // line 303
            $context["gst_total"] = (($context["cgst"] ?? null) + ($context["sgst"] ?? null));
            // line 304
            yield "
<div class=\"receipt-container ";
            // line 305
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "order_status_id", [], "any", false, false, false, 305) == 7)) {
                yield "cancelled-invoice";
            }
            yield "\">
   
    <!-- Watermark -->
    ";
            // line 309
            yield "    ";
            // line 310
            yield "    ";
            // line 311
            yield "
    <div class=\"content-wrapper\">
        <div class=\"header-top text-center\">INVOICE</div>
        <div style=\"display:flex; justify-content:space-between; font-size:10px; font-weight:500; width:100%;\">
            <div>
                Invoice : ";
            // line 316
            yield (CoreExtension::getAttribute($this->env, $this->source, $context["order"], "invoice_prefix", [], "any", false, false, false, 316) . CoreExtension::getAttribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 316));
            yield "
            </div>
            <div>
              ";
            // line 319
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 319);
            yield "
            </div>
        </div>

        <div class=\"line\"></div>

        <div class=\"logo-section\">
            <div style=\"display: flex; align-items: center; justify-content: center; gap: 10px;\">
                <!-- MAIN LOGO: 90% black, 10% detail -->
                <img src=\"https://myteknoland.com/MTL/image/saleem_logo.jpg\"
                     alt=\"Logo\"
                     style=\"
                        width: 70px;
                        height: 70px;
                        object-fit: contain;
                     \">
                <div>
                    <div class=\"logo-main\" style=\"margin-left:-25px;\">
                        SALEEM GOLD COVERING
                    </div>
                    <h6 style = \"margin-right:20px;\">WHOLESALE - +91 7337011206</h6>
                    ";
            // line 341
            yield "                    ";
            // line 342
            yield "                    ";
            // line 343
            yield "                </div>
            </div>
        </div>

        <div class=\"line\"></div>

        <div class=\"store-info\">
            38/109-B-4,Chittor Road, Rayachoty,Annamayya Dist,<br>
            Andhra Pradesh - 516269.<br>
        </div>

        <div class=\"line\"></div>

        <div class=\"gst-info\">
            GST : 37BBBPB0938F1Z4
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspOrder ID: ";
            // line 358
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 358);
            yield "
        </div>

        <div class=\"line\"></div>

        <div class=\"bill-details\"
             style=\"display:flex; justify-content:space-between; align-items:center; width:100%;\">

            <span style=\"white-space:nowrap; margin-right:20px;\">
                 Name : ";
            // line 367
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "payment_firstname", [], "any", false, false, false, 367);
            yield " ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "payment_lastname", [], "any", false, false, false, 367);
            yield "
            </span>

            <span style=\"white-space:nowrap; margin-right:20px;\">
                Phone : ";
            // line 371
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "telephone", [], "any", false, false, false, 371);
            yield "
            </span>
        </div>

        <div class=\"line\"></div>

        ";
            // line 377
            if ( !($context["small_print"] ?? null)) {
                // line 378
                yield "    <table class=\"items-table\">
        <thead>
            <tr>
                <th width=\"35%\">Sl. Item Name</th>
                <th width=\"12%\">Qty</th>
                <th width=\"18%\">MRP</th>
                <th width=\"17%\">AMT</th>
            </tr>
        </thead>
        <tbody>
            ";
                // line 388
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "product", [], "any", false, false, false, 388));
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
                    // line 389
                    yield "            <tr class=\"item-name-row ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "excluded", [], "any", false, false, false, 389)) {
                        yield "excluded-item";
                    }
                    yield "\">
                <td style=\"margin-left:15px;\">";
                    // line 390
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 390);
                    yield " &nbsp; ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 390);
                    yield "</td>
                <td>";
                    // line 391
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 391);
                    yield "</td>
                <td>";
                    // line 392
                    yield Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 392), ["₹" => "", "Rs." => "", "Rs" => ""]), "."));
                    yield "</td>
                <td>";
                    // line 393
                    yield Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 393), ["₹" => "", "Rs." => "", "Rs" => ""]);
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
                // line 396
                yield "        </tbody>
    </table>

    <div class=\"total-qty-bar\">
        ";
                // line 400
                $context["total_items"] = 0;
                // line 401
                yield "        ";
                $context["total_qty"] = 0;
                // line 402
                yield "
        ";
                // line 403
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "product", [], "any", false, false, false, 403));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 404
                    yield "            ";
                    if ( !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "excluded", [], "any", false, false, false, 404)) {
                        // line 405
                        yield "                ";
                        $context["total_items"] = (($context["total_items"] ?? null) + 1);
                        // line 406
                        yield "                ";
                        $context["total_qty"] = (($context["total_qty"] ?? null) + CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 406));
                        // line 407
                        yield "            ";
                    }
                    // line 408
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 409
                yield "
        <span>Total Item : ( ";
                // line 410
                yield ($context["total_items"] ?? null);
                yield " )</span>
        <span>Total Qty : ( ";
                // line 411
                yield ($context["total_qty"] ?? null);
                yield " )</span>
    </div>
";
            }
            // line 414
            yield "


        <div class=\"summary-table\">
            <div style=\"display:flex; justify-content:space-between; margin-bottom: 2px;\">
                <span></span><span>Bill Amount : ";
            // line 419
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "invoice", [], "any", false, false, false, 419), "sub_total", [], "any", false, false, false, 419);
            yield "</span>
            </div>
            ";
            // line 421
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "invoice", [], "any", false, false, false, 421), "coupon", [], "any", false, false, false, 421)) {
                // line 422
                yield "            ";
                $context["coupon_parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "invoice", [], "any", false, false, false, 422), "coupon", [], "any", false, false, false, 422), "-");
                // line 423
                yield "            ";
                $context["coupon_name"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["coupon_parts"] ?? null), 0, [], "array", true, true, false, 423) &&  !(null === (($_v0 = ($context["coupon_parts"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null)))) ? ((($_v1 = ($context["coupon_parts"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[0] ?? null) : null)) : (""));
                // line 424
                yield "            ";
                $context["coupon_amt"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["coupon_parts"] ?? null), 1, [], "array", true, true, false, 424) &&  !(null === (($_v2 = ($context["coupon_parts"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[1] ?? null) : null)))) ? ((($_v3 = ($context["coupon_parts"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[1] ?? null) : null)) : (""));
                // line 425
                yield "        
            <div style=\"display:flex; justify-content:space-between; margin-bottom: 2px;\">
                <span></span><span>COUPON (";
                // line 427
                yield ($context["coupon_name"] ?? null);
                yield ") : ";
                yield ($context["coupon_amt"] ?? null);
                yield "</span>
               ";
                // line 429
                yield "            </div>
        ";
            }
            // line 431
            yield "            <div style=\"display:flex; justify-content:space-between; margin-bottom: 2px;\">
                <span></span><span style=\"font-weight:700;\">Discount Amt : ";
            // line 432
            yield $this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["gst_total"] ?? null), 2);
            yield "</span>
            </div>
            ";
            // line 435
            yield "            ";
            // line 436
            yield "            ";
            // line 437
            yield "        </div>

        <div class=\"line\"></div>

<div class=\"tax-row\">
    <span>CGST (1.5%)</span>
    <span>: ";
            // line 443
            yield $this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["cgst"] ?? null), 2);
            yield "</span>
</div>

<div class=\"tax-row\">
    <span>SGST (1.5%)</span>
    <span>: ";
            // line 448
            yield $this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["sgst"] ?? null), 2);
            yield "</span>
</div>

        <div class=\"line\"></div>

        <div style=\"display:flex; justify-content:space-between; padding: 5px 0;\" class=\"bold\">
            <span></span>
            <span style=\"font-size:18px;font-weight: 700;\">
                Net Payable : ";
            // line 456
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "invoice", [], "any", false, false, false, 456), "total_received", [], "any", false, false, false, 456);
            yield "
            </span>
        </div>

        <div class=\"line\"></div>

        <div class=\"savings-line\">
            Total Amount Save On This Bills : ";
            // line 463
            yield $this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["gst_total"] ?? null), 2);
            yield "/-
        </div>

        <div class=\"line\"></div>

        <div style=\"display: flex; justify-content: space-between; font-size: 11px; font-weight: 700;\">
            <span>CASH RECEIVED</span><span>";
            // line 469
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "invoice", [], "any", false, false, false, 469), "cash_amount", [], "any", false, false, false, 469);
            yield "</span>
        </div>

        ";
            // line 472
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "invoice", [], "any", false, false, false, 472), "upi_amount", [], "any", false, false, false, 472) > 0)) {
                // line 473
                yield "        <div style=\"display: flex; justify-content: space-between; font-size: 11px; font-weight: 700; margin-top: 3px;\">
            <span>UPI RECEIVED</span><span>";
                // line 474
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "invoice", [], "any", false, false, false, 474), "upi_amount", [], "any", false, false, false, 474);
                yield "</span>
        </div> 
        ";
            }
            // line 477
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "invoice", [], "any", false, false, false, 477), "advance_used", [], "any", false, false, false, 477) > 0)) {
                // line 478
                yield " <div style=\"display: flex; justify-content: space-between; font-size: 11px; font-weight: 700; margin-top: 3px;\">
            <span>ADVANCE USED</span><span>";
                // line 479
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "invoice", [], "any", false, false, false, 479), "advance_used", [], "any", false, false, false, 479);
                yield ".00</span>
        </div> 
";
            }
            // line 482
            yield "
        ";
            // line 483
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "invoice", [], "any", false, false, false, 483), "balance", [], "any", false, false, false, 483) > 0)) {
                // line 484
                yield "        <div style=\"display: flex; justify-content: space-between; font-size: 11px; font-weight: 700; margin-top: 3px; color: red;\">
            <span>DUE AMOUNT</span><span>";
                // line 485
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "invoice", [], "any", false, false, false, 485), "balance", [], "any", false, false, false, 485);
                yield ".00</span>
        </div>
        ";
            }
            // line 488
            yield "
        <div class=\"line\"></div>

        <div class=\"terms text-center\">
            <div style=\"text-decoration: underline; margin-bottom: 5px;\">Terms & conditions</div>
            <div class=\"text-center\" style=\"font-weight: 700; font-size: 18px; white-space: nowrap;\">
                No exchange & No Return
            </div>
        </div>

        <div class=\"line\"></div>

        <div class=\"text-center\" style=\"font-weight: 500; font-size: 12px;\">
            “Your next visit deserves something special. Come back and enjoy exclusive in-store benefits!”
        </div>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 506
        yield "
</body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/sale/order_invoice.twig";
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
        return array (  755 => 506,  732 => 488,  726 => 485,  723 => 484,  721 => 483,  718 => 482,  712 => 479,  709 => 478,  706 => 477,  700 => 474,  697 => 473,  695 => 472,  689 => 469,  680 => 463,  670 => 456,  659 => 448,  651 => 443,  643 => 437,  641 => 436,  639 => 435,  634 => 432,  631 => 431,  627 => 429,  621 => 427,  617 => 425,  614 => 424,  611 => 423,  608 => 422,  606 => 421,  601 => 419,  594 => 414,  588 => 411,  584 => 410,  581 => 409,  575 => 408,  572 => 407,  569 => 406,  566 => 405,  563 => 404,  559 => 403,  556 => 402,  553 => 401,  551 => 400,  545 => 396,  528 => 393,  524 => 392,  520 => 391,  514 => 390,  507 => 389,  490 => 388,  478 => 378,  476 => 377,  467 => 371,  458 => 367,  446 => 358,  429 => 343,  427 => 342,  425 => 341,  401 => 319,  395 => 316,  388 => 311,  386 => 310,  384 => 309,  376 => 305,  373 => 304,  371 => 303,  369 => 302,  367 => 301,  363 => 300,  71 => 11,  67 => 10,  63 => 9,  59 => 8,  55 => 7,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html dir=\"{{ direction }}\" lang=\"{{ lang }}\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Saleem Gold Covering Receipt</title>
    <base href=\"{{ base }}\"/>
    <link href=\"{{ bootstrap_css }}\" type=\"text/css\" rel=\"stylesheet\"/>
    <link href=\"{{ icons }}\" type=\"text/css\" rel=\"stylesheet\"/>
    <script src=\"{{ jquery }}\" type=\"text/javascript\"></script>
    <script src=\"{{ bootstrap_js }}\" type=\"text/javascript\"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&family=Noto+Sans+Devanagari:wght@400;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f3f3f3;
            font-family: 'Roboto', 'Noto Sans Devanagari', sans-serif;
            display: flex;
            justify-content: center;
            padding-top: 20px;
            color: #000;
        }

        .receipt-container {
            width: 80mm;
            max-width: 80mm;
            background-color: #fff;
            padding: 5mm;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            position: relative;
            overflow: hidden;
        }

        .text-center { text-align: center; }
        .text-right { text-align: right; }
        .text-left { text-align: left; }
        .bold { font-weight: 700; }
        
        .line {
            border-bottom: 1px solid #000;
            margin: 5px 0;
        }

        .header-top {
            font-size: 10px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .logo-section {
            text-align: center;
            margin-bottom: 5px;
        }
        
        .logo-main {
            font-size: 20px;
            font-weight: 900;
            line-height: 1.2;
            font-family: serif;
            text-transform: uppercase;
            word-wrap: break-word;
            color:#000;
        }
        
        .logo-tagline {
            font-size: 9px;
            color: #000;
            font-weight: bold;
            margin-bottom: 5px;
            margin-top: 2px;
        }

        .store-info {
            font-size: 10px;
            font-weight: 700;
            line-height: 1.3;
            color: #000;
        }

        .gst-info {
            font-size: 10px;
            font-weight: 700;
            margin-top: 5px;
        }

        .bill-details {
            display: flex;
            justify-content: space-between;
            font-size: 10px;
            font-weight: 700;
            margin-top: 5px;
        }


        .items-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 10px;
            table-layout: fixed;
        }

        .items-table th {
            text-align: center;
            border-bottom: 1px solid #000;
            padding: 3px 0;
            white-space: nowrap;
        }
        .items-table th:first-child { text-align: left; }

        .item-name-row td {
            padding-top: 5px;
            font-weight: 700;
            font-size: 11px;
        }

        .item-data-row td {
            text-align: center;
            padding-bottom: 5px;
            font-size: 10px;
            white-space: nowrap;
            overflow: hidden;
            padding: 3px 0;
        }

        .total-qty-bar {
            display: flex;
            justify-content: space-between;
            border-top: 1px solid #000;
            border-bottom: 1px solid #000;
            padding: 3px 0;
            font-weight: 700;
            font-size: 11px;
            margin-top: 5px;
        }

        .summary-table {
            width: 100%;
            font-size: 12px;
            font-weight: 500;
            text-align: right;
            margin-top: 5px;
        }
        
        .amount-words {
            font-size: 10px;
            font-weight: 700;
            margin-top: 5px;
            border-bottom: 1px solid #000;
            padding-bottom: 5px;
        }

        .savings-line {
            text-align: center;
            font-weight: 700;
            font-size: 11px;
            margin: 10px 0;
        }

        .terms {
            font-size: 9px;
            font-weight: 600;
            margin-top: 10px;
        }
        
        .align-right { text-align: right; }
        .align-center { text-align: center; }
        
        .total-row {
            font-weight: bold;
            background-color: #fafafa;
        }
        .items-table tbody td {
    text-align: center !important;   /* Horizontal center */
    vertical-align: top !important;  /* Vertical top */
}

/* First column (Item Name) left aligned */
.items-table tbody td:first-child {
    text-align: left !important;
}


        @media print {
            body {
                background: white;
                padding: 0;
                margin: 0;
                color: #000 !important;
            }

            .receipt-container {
                width: 80mm;
                max-width: 80mm;
                box-shadow: none;
                padding: 3mm;
                margin: 0;
                page-break-after: always;
            }

            * {
                color: #000 !important;
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
            }

            @page {
                size: 80mm auto;
                margin: 0;
            }
            
            html, body {
                height: auto;
                overflow: hidden;
            }
        }
        
        /* Watermark styling - mostly black but details visible */
        .watermark {
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0.35;
            pointer-events: none;
            z-index: 0;
            width: 90%;
            height: auto;
        }

        .watermark img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 50%;
            /* ~90% black, 10% light details visible */
           image-rendering: pixelated;
           image-rendering: crisp-edges;
        }
        
        

        /* Content wrapper to ensure it's above watermark */
        .content-wrapper {
            position: relative;
            z-index: 1;
        }

        .bold { font-weight: 700; }
        .line { border-bottom: 1px solid #000; margin: 5px 0; }
        .tax-row {
    display: flex;
    justify-content: flex-end;
    font-size: 12px;
    font-weight: 500;
    font-family: 'Roboto', 'Noto Sans Devanagari', sans-serif;
    margin-bottom: 3px;
}

.tax-row span:first-child {
    min-width: 90px;
    text-align: left;
}
.excluded-item {
    text-decoration: line-through;
    opacity: 0.6;
}

.cancelled-invoice {
    position: relative;
}

.cancelled-invoice::after {
    content: \"CANCELLED\";
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) rotate(-35deg);
    font-size: 60px;
    font-weight: 900;
    color: rgba(255, 0, 0, 0.25);
    z-index: 999;
    pointer-events: none;
}

.cancelled-invoice {
    opacity: 0.7;
}


    </style>
</head>
<body>

{% for order in orders %}
{% set cgst = order.invoice.sub_total * 0.015 %}
{% set sgst = order.invoice.sub_total * 0.015 %}
{% set gst_total = cgst + sgst %}

<div class=\"receipt-container {% if order.order_status_id == 7 %}cancelled-invoice{% endif %}\">
   
    <!-- Watermark -->
    {#<div class=\"watermark\">#}
    {#    <img src=\"/MTL/image/saleem_logo.jpg\" alt=\"Watermark\">#}
    {#</div>#}

    <div class=\"content-wrapper\">
        <div class=\"header-top text-center\">INVOICE</div>
        <div style=\"display:flex; justify-content:space-between; font-size:10px; font-weight:500; width:100%;\">
            <div>
                Invoice : {{ order.invoice_prefix ~ order.invoice_no }}
            </div>
            <div>
              {{ order.date_added }}
            </div>
        </div>

        <div class=\"line\"></div>

        <div class=\"logo-section\">
            <div style=\"display: flex; align-items: center; justify-content: center; gap: 10px;\">
                <!-- MAIN LOGO: 90% black, 10% detail -->
                <img src=\"https://myteknoland.com/MTL/image/saleem_logo.jpg\"
                     alt=\"Logo\"
                     style=\"
                        width: 70px;
                        height: 70px;
                        object-fit: contain;
                     \">
                <div>
                    <div class=\"logo-main\" style=\"margin-left:-25px;\">
                        SALEEM GOLD COVERING
                    </div>
                    <h6 style = \"margin-right:20px;\">WHOLESALE - +91 7337011206</h6>
                    {#<div class=\"logo-tagline\" style=\"margin-left:-25px;\">#}
                    {#     WHOLESALE STORE#}
                    {#</div>#}
                </div>
            </div>
        </div>

        <div class=\"line\"></div>

        <div class=\"store-info\">
            38/109-B-4,Chittor Road, Rayachoty,Annamayya Dist,<br>
            Andhra Pradesh - 516269.<br>
        </div>

        <div class=\"line\"></div>

        <div class=\"gst-info\">
            GST : 37BBBPB0938F1Z4
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspOrder ID: {{ order.order_id }}
        </div>

        <div class=\"line\"></div>

        <div class=\"bill-details\"
             style=\"display:flex; justify-content:space-between; align-items:center; width:100%;\">

            <span style=\"white-space:nowrap; margin-right:20px;\">
                 Name : {{ order.payment_firstname }} {{ order.payment_lastname }}
            </span>

            <span style=\"white-space:nowrap; margin-right:20px;\">
                Phone : {{ order.telephone }}
            </span>
        </div>

        <div class=\"line\"></div>

        {% if not small_print %}
    <table class=\"items-table\">
        <thead>
            <tr>
                <th width=\"35%\">Sl. Item Name</th>
                <th width=\"12%\">Qty</th>
                <th width=\"18%\">MRP</th>
                <th width=\"17%\">AMT</th>
            </tr>
        </thead>
        <tbody>
            {% for product in order.product %}
            <tr class=\"item-name-row {% if product.excluded %}excluded-item{% endif %}\">
                <td style=\"margin-left:15px;\">{{ loop.index }} &nbsp; {{ product.name }}</td>
                <td>{{ product.quantity }}</td>
                <td>{{ product.price|replace({'₹': '', 'Rs.': '', 'Rs': ''})|split('.')|first }}</td>
                <td>{{ product.total|replace({'₹': '', 'Rs.': '', 'Rs': ''}) }}</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>

    <div class=\"total-qty-bar\">
        {% set total_items = 0 %}
        {% set total_qty = 0 %}

        {% for product in order.product %}
            {% if not product.excluded %}
                {% set total_items = total_items + 1 %}
                {% set total_qty = total_qty + product.quantity %}
            {% endif %}
        {% endfor %}

        <span>Total Item : ( {{ total_items }} )</span>
        <span>Total Qty : ( {{ total_qty }} )</span>
    </div>
{% endif %}



        <div class=\"summary-table\">
            <div style=\"display:flex; justify-content:space-between; margin-bottom: 2px;\">
                <span></span><span>Bill Amount : {{ order.invoice.sub_total }}</span>
            </div>
            {% if order.invoice.coupon %}
            {% set coupon_parts = order.invoice.coupon|split('-') %}
            {% set coupon_name = coupon_parts[0] ?? '' %}
            {% set coupon_amt = coupon_parts[1] ?? '' %}
        
            <div style=\"display:flex; justify-content:space-between; margin-bottom: 2px;\">
                <span></span><span>COUPON ({{ coupon_name }}) : {{ coupon_amt }}</span>
               {# <span></span>#}
            </div>
        {% endif %}
            <div style=\"display:flex; justify-content:space-between; margin-bottom: 2px;\">
                <span></span><span style=\"font-weight:700;\">Discount Amt : {{ gst_total|number_format(2) }}</span>
            </div>
            {#<div style=\"display:flex; justify-content:space-between; margin-bottom: 2px;\">#}
            {#    <span></span><span>Round Off : 0.00</span>#}
            {#</div>#}
        </div>

        <div class=\"line\"></div>

<div class=\"tax-row\">
    <span>CGST (1.5%)</span>
    <span>: {{ cgst|number_format(2) }}</span>
</div>

<div class=\"tax-row\">
    <span>SGST (1.5%)</span>
    <span>: {{ sgst|number_format(2) }}</span>
</div>

        <div class=\"line\"></div>

        <div style=\"display:flex; justify-content:space-between; padding: 5px 0;\" class=\"bold\">
            <span></span>
            <span style=\"font-size:18px;font-weight: 700;\">
                Net Payable : {{ order.invoice.total_received }}
            </span>
        </div>

        <div class=\"line\"></div>

        <div class=\"savings-line\">
            Total Amount Save On This Bills : {{ gst_total|number_format(2) }}/-
        </div>

        <div class=\"line\"></div>

        <div style=\"display: flex; justify-content: space-between; font-size: 11px; font-weight: 700;\">
            <span>CASH RECEIVED</span><span>{{ order.invoice.cash_amount }}</span>
        </div>

        {% if order.invoice.upi_amount > 0 %}
        <div style=\"display: flex; justify-content: space-between; font-size: 11px; font-weight: 700; margin-top: 3px;\">
            <span>UPI RECEIVED</span><span>{{ order.invoice.upi_amount }}</span>
        </div> 
        {% endif %}
        {% if order.invoice.advance_used > 0 %}
 <div style=\"display: flex; justify-content: space-between; font-size: 11px; font-weight: 700; margin-top: 3px;\">
            <span>ADVANCE USED</span><span>{{ order.invoice.advance_used }}.00</span>
        </div> 
{% endif %}

        {% if order.invoice.balance > 0 %}
        <div style=\"display: flex; justify-content: space-between; font-size: 11px; font-weight: 700; margin-top: 3px; color: red;\">
            <span>DUE AMOUNT</span><span>{{ order.invoice.balance }}.00</span>
        </div>
        {% endif %}

        <div class=\"line\"></div>

        <div class=\"terms text-center\">
            <div style=\"text-decoration: underline; margin-bottom: 5px;\">Terms & conditions</div>
            <div class=\"text-center\" style=\"font-weight: 700; font-size: 18px; white-space: nowrap;\">
                No exchange & No Return
            </div>
        </div>

        <div class=\"line\"></div>

        <div class=\"text-center\" style=\"font-weight: 500; font-size: 12px;\">
            “Your next visit deserves something special. Come back and enjoy exclusive in-store benefits!”
        </div>
    </div>
</div>
{% endfor %}

</body>
</html>
", "admin/view/template/sale/order_invoice.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/admin/view/template/sale/order_invoice.twig");
    }
}
