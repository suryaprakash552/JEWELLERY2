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

/* extension/purpletree_pos/catalog/view/template/pos/quote_invoice.twig */
class __TwigTemplate_3ec17b46e15c6ca402279d8ee67426f3 extends Template
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


    </style>
</head>
<body>

";
        // line 279
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["orders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 280
            $context["cgst"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "invoice", [], "any", false, false, false, 280), "sub_total", [], "any", false, false, false, 280) * 0.015);
            // line 281
            $context["sgst"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "invoice", [], "any", false, false, false, 281), "sub_total", [], "any", false, false, false, 281) * 0.015);
            // line 282
            $context["gst_total"] = (($context["cgst"] ?? null) + ($context["sgst"] ?? null));
            // line 283
            yield "
<div class=\"receipt-container\">
   
    <!-- Watermark -->
    ";
            // line 288
            yield "    ";
            // line 289
            yield "    ";
            // line 290
            yield "
    <div class=\"content-wrapper\">
        <div class=\"header-top text-center\">DRAFT INVOICE</div>
        <div style=\"display:flex; justify-content:space-between; font-size:10px; font-weight:500; width:100%;\">
            <div>
                Invoice : ";
            // line 295
            yield (CoreExtension::getAttribute($this->env, $this->source, $context["order"], "invoice_prefix", [], "any", false, false, false, 295) . CoreExtension::getAttribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 295));
            yield "
            </div>
            <div>
               ";
            // line 298
            yield $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d-m-Y h:i A", "Asia/Kolkata");
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
            // line 320
            yield "                    ";
            // line 321
            yield "                    ";
            // line 322
            yield "                </div>
            </div>
        </div>

        <div class=\"line\"></div>

        <div class=\"store-info\">
            38/109-B-4,Chittor Road, Rayachoty,Annamayya Dist,<br>
            Andhra Pradesh - 516269.Phone : +917330611206<br>
        </div>

        <div class=\"line\"></div>

        <div class=\"gst-info\">
            GST : 37BBBPB0938F1Z4
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspOrder ID: ";
            // line 337
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 337);
            yield "
        </div>

        <div class=\"line\"></div>

        <div class=\"bill-details\"
             style=\"display:flex; justify-content:space-between; align-items:center; width:100%;\">

            <span style=\"white-space:nowrap; margin-right:20px;\">
                Name :&nbsp";
            // line 346
            yield (CoreExtension::getAttribute($this->env, $this->source, $context["order"], "firstname", [], "any", false, false, false, 346) . CoreExtension::getAttribute($this->env, $this->source, $context["order"], "lastname", [], "any", false, false, false, 346));
            yield "
            </span>

            <span style=\"white-space:nowrap; margin-right:20px;\">
                Phone : ";
            // line 350
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "telephone", [], "any", false, false, false, 350);
            yield "
            </span>
        </div>

        <div class=\"line\"></div>

        <table class=\"items-table\">
            <thead>
                <tr>
                    <th width=\"35%\">Sl. Item Name</th>
                    <th width=\"12%\">Qty</th>
                    ";
            // line 362
            yield "                    <th width=\"18%\">MRP</th>
                    <th width=\"17%\">AMT</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 367
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "product", [], "any", false, false, false, 367));
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
                // line 368
                yield "                
                <tr class=\"item-name-row ";
                // line 369
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "excluded", [], "any", false, false, false, 369)) {
                    yield "excluded-item";
                }
                yield "\">
                    <td style=\"margin-left:15px;\">";
                // line 370
                yield CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 370);
                yield " &nbsp; ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 370);
                yield "</td>
                    <td>";
                // line 371
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 371);
                yield "</td>
                    <td>";
                // line 372
                yield Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 372), ["₹" => "", "Rs." => "", "Rs" => ""]), "."));
                yield "</td>
                    <td>";
                // line 373
                yield Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 373), ["₹" => "", "Rs." => "", "Rs" => ""]);
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
            // line 377
            yield "            </tbody>

        </table>

        <div class=\"total-qty-bar\">
    ";
            // line 382
            $context["total_items"] = 0;
            // line 383
            yield "    ";
            $context["total_qty"] = 0;
            // line 384
            yield "
    ";
            // line 385
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "product", [], "any", false, false, false, 385));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 386
                yield "        ";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "excluded", [], "any", false, false, false, 386)) {
                    // line 387
                    yield "            ";
                    $context["total_items"] = (($context["total_items"] ?? null) + 1);
                    // line 388
                    yield "            ";
                    $context["total_qty"] = (($context["total_qty"] ?? null) + CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 388));
                    // line 389
                    yield "        ";
                }
                // line 390
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 391
            yield "
    <span>Total Item : ( ";
            // line 392
            yield ($context["total_items"] ?? null);
            yield " )</span>
    <span>
        Total Qty : ( ";
            // line 394
            yield ($context["total_qty"] ?? null);
            yield " )
    </span>
</div>


        <div class=\"summary-table\">
            <div style=\"display:flex; justify-content:space-between; margin-bottom: 2px;\">
                <span></span><span>Bill Amount : ";
            // line 401
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "invoice", [], "any", false, false, false, 401), "sub_total", [], "any", false, false, false, 401);
            yield "</span>
            </div>
            <div style=\"display:flex; justify-content:space-between; margin-bottom: 2px;\">
                <span></span><span style=\"font-weight:700;\">Discount Amt : ";
            // line 404
            yield $this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["gst_total"] ?? null), 2);
            yield "</span>
            </div>
            ";
            // line 407
            yield "            ";
            // line 408
            yield "            ";
            // line 409
            yield "        </div>

        <div class=\"line\"></div>

<div class=\"tax-row\">
    <span>CGST (1.5%)</span>
    <span>: ";
            // line 415
            yield $this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["cgst"] ?? null), 2);
            yield "</span>
</div>

<div class=\"tax-row\">
    <span>SGST (1.5%)</span>
    <span>: ";
            // line 420
            yield $this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["sgst"] ?? null), 2);
            yield "</span>
</div>

        <div class=\"line\"></div>

        <div style=\"display:flex; justify-content:space-between; padding: 5px 0;\" class=\"bold\">
            <span></span>
            <span style=\"font-size:18px;font-weight: 700;\">
                Net Payable : ";
            // line 428
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "invoice", [], "any", false, false, false, 428), "sub_total", [], "any", false, false, false, 428);
            yield "
            </span>
        </div>

        <div class=\"line\"></div>

        <div class=\"savings-line\">
            Total Amount Save On This Bills : ";
            // line 435
            yield $this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["gst_total"] ?? null), 2);
            yield "/-
        </div>

        <div class=\"line\"></div>

        ";
            // line 449
            yield "        <div style=\"display: flex; justify-content: space-between; font-size: 11px; font-weight: 700; margin-top: 3px; color: red;\">
            <span>DUE AMOUNT</span><span>";
            // line 450
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "invoice", [], "any", false, false, false, 450), "sub_total", [], "any", false, false, false, 450);
            yield "</span>
        </div>

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
        // line 470
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
        return "extension/purpletree_pos/catalog/view/template/pos/quote_invoice.twig";
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
        return array (  662 => 470,  636 => 450,  633 => 449,  625 => 435,  615 => 428,  604 => 420,  596 => 415,  588 => 409,  586 => 408,  584 => 407,  579 => 404,  573 => 401,  563 => 394,  558 => 392,  555 => 391,  549 => 390,  546 => 389,  543 => 388,  540 => 387,  537 => 386,  533 => 385,  530 => 384,  527 => 383,  525 => 382,  518 => 377,  500 => 373,  496 => 372,  492 => 371,  486 => 370,  480 => 369,  477 => 368,  460 => 367,  453 => 362,  439 => 350,  432 => 346,  420 => 337,  403 => 322,  401 => 321,  399 => 320,  375 => 298,  369 => 295,  362 => 290,  360 => 289,  358 => 288,  352 => 283,  350 => 282,  348 => 281,  346 => 280,  342 => 279,  71 => 11,  67 => 10,  63 => 9,  59 => 8,  55 => 7,  45 => 2,  42 => 1,);
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


    </style>
</head>
<body>

{% for order in orders %}
{% set cgst = order.invoice.sub_total * 0.015 %}
{% set sgst = order.invoice.sub_total * 0.015 %}
{% set gst_total = cgst + sgst %}

<div class=\"receipt-container\">
   
    <!-- Watermark -->
    {#<div class=\"watermark\">#}
    {#    <img src=\"/MTL/image/saleem_logo.jpg\" alt=\"Watermark\">#}
    {#</div>#}

    <div class=\"content-wrapper\">
        <div class=\"header-top text-center\">DRAFT INVOICE</div>
        <div style=\"display:flex; justify-content:space-between; font-size:10px; font-weight:500; width:100%;\">
            <div>
                Invoice : {{ order.invoice_prefix ~ order.invoice_no }}
            </div>
            <div>
               {{ \"now\"|date(\"d-m-Y h:i A\", \"Asia/Kolkata\") }}
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
            Andhra Pradesh - 516269.Phone : +917330611206<br>
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
                Name :&nbsp{{order.firstname ~ order.lastname}}
            </span>

            <span style=\"white-space:nowrap; margin-right:20px;\">
                Phone : {{ order.telephone }}
            </span>
        </div>

        <div class=\"line\"></div>

        <table class=\"items-table\">
            <thead>
                <tr>
                    <th width=\"35%\">Sl. Item Name</th>
                    <th width=\"12%\">Qty</th>
                    {#<th width=\"18%\">Rate</th>#}
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
    <span>
        Total Qty : ( {{ total_qty }} )
    </span>
</div>


        <div class=\"summary-table\">
            <div style=\"display:flex; justify-content:space-between; margin-bottom: 2px;\">
                <span></span><span>Bill Amount : {{ order.invoice.sub_total }}</span>
            </div>
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
                Net Payable : {{ order.invoice.sub_total }}
            </span>
        </div>

        <div class=\"line\"></div>

        <div class=\"savings-line\">
            Total Amount Save On This Bills : {{ gst_total|number_format(2) }}/-
        </div>

        <div class=\"line\"></div>

        {#<div style=\"display: flex; justify-content: space-between; font-size: 11px; font-weight: 700;\">
            <span>CASH RECEIVED</span><span>{{ order.invoice.cash_amount }}</span>
        </div>

        {% if order.invoice.upi_amount > 0 %}
        <div style=\"display: flex; justify-content: space-between; font-size: 11px; font-weight: 700; margin-top: 3px;\">
            <span>UPI RECEIVED</span><span>{{ order.invoice.upi_amount }}</span>
        </div> 
        {% endif %}#}
        <div style=\"display: flex; justify-content: space-between; font-size: 11px; font-weight: 700; margin-top: 3px; color: red;\">
            <span>DUE AMOUNT</span><span>{{ order.invoice.sub_total }}</span>
        </div>

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
", "extension/purpletree_pos/catalog/view/template/pos/quote_invoice.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/extension/purpletree_pos/catalog/view/template/pos/quote_invoice.twig");
    }
}
