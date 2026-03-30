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

/* extension/purpletree_pos/catalog/view/template/pos/product_invoice.twig */
class __TwigTemplate_90395cc44d55cb844de5092fbc2eda2c extends Template
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
        // line 8
        yield ($context["base"] ?? null);
        yield "\"/>
    <link href=\"";
        // line 9
        yield ($context["bootstrap_css"] ?? null);
        yield "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 10
        yield ($context["icons"] ?? null);
        yield "\" rel=\"stylesheet\"/>

    <script src=\"";
        // line 12
        yield ($context["jquery"] ?? null);
        yield "\"></script>
    <script src=\"";
        // line 13
        yield ($context["bootstrap_js"] ?? null);
        yield "\"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&family=Noto+Sans+Devanagari:wght@400;700&display=swap');

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            background: #f3f3f3;
            font-family: 'Roboto','Noto Sans Devanagari',sans-serif;
            display: flex;
            justify-content: center;
            padding-top: 20px;
            color: #000;
        }

        .receipt-container {
            width: 80mm;
            max-width: 80mm;
            background: #fff;
            padding: 5mm;
            position: relative;
            overflow: hidden;
        }

        .content-wrapper { position: relative; z-index: 1; }

        .text-center { text-align: center; }
        .bold { font-weight: 700; }

        .line {
            border-bottom: 1px solid #000;
            margin: 5px 0;
        }

        .header-top {
            font-size: 10px;
            font-weight: bold;
            margin-bottom: 5px;
            text-align: center;
        }

        .logo-section {
            text-align: center;
            margin-bottom: 5px;
        }

        .logo-main {
            font-size: 20px;
            font-weight: 900;
            font-family: serif;
            text-transform: uppercase;
            line-height: 1.2;
        }

        .store-info, .gst-info {
            font-size: 10px;
            font-weight: 700;
            line-height: 1.3;
        }

        .items-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 10px;
            table-layout: fixed;
        }

        .items-table th {
            border-bottom: 1px solid #000;
            padding: 3px 0;
            text-align: center;
            white-space: nowrap;
        }

        .items-table th:first-child { text-align: left; }

        .item-name-row td {
            padding-top: 5px;
            font-weight: 700;
            font-size: 11px;
        }

        .items-table tbody td {
            text-align: center !important;
            vertical-align: top !important;
            padding: 3px 0;
        }

        .items-table tbody td:first-child {
            text-align: left !important;
        }

        .excluded-item {
            text-decoration: line-through;
            opacity: 0.6;
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
            text-align: right;
            margin-top: 5px;
        }

        .tax-row {
            display: flex;
            justify-content: flex-end;
            font-size: 12px;
            font-weight: 500;
            margin-bottom: 3px;
        }

        .tax-row span:first-child {
            min-width: 90px;
            text-align: left;
        }

        @media print {
            body {
                background: #fff;
                padding: 0;
                margin: 0;
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
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
            }

            @page {
                size: 80mm auto;
                margin: 0;
            }
        }
    </style>
</head>

<body>

";
        // line 173
        $context["cgst"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "sub_total", [], "any", false, false, false, 173) * 0.015);
        // line 174
        $context["sgst"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "sub_total", [], "any", false, false, false, 174) * 0.015);
        // line 175
        $context["gst_total"] = (($context["cgst"] ?? null) + ($context["sgst"] ?? null));
        // line 176
        yield "
<div class=\"receipt-container\">
<div class=\"content-wrapper\">

    <div class=\"header-top\">INVOICE</div>

    <div style=\"display:flex; justify-content:space-between; font-size:10px; font-weight:500;\">
        <div>Invoice : ";
        // line 183
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "invoice_no", [], "any", false, false, false, 183);
        yield "</div>
        <div>";
        // line 184
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "date", [], "any", false, false, false, 184);
        yield "</div>
    </div>

    <div class=\"line\"></div>

    <div class=\"logo-section\">
        <div style=\"display:flex; align-items:center; justify-content:center; gap:10px;\">
            <img src=\"https://myteknoland.com/MTL/image/saleem_logo.jpg\"
                 style=\"width:70px;height:70px;object-fit:contain;\">
            <div>
                <div class=\"logo-main\" style=\"margin-left:-25px;\">
                    SALEEM GOLD COVERING
                </div>
                <h6 style=\"margin-right:20px;\">WHOLESALE - +91 7337011206</h6>
            </div>
        </div>
    </div>

    <div class=\"line\"></div>

    <div class=\"store-info\">
        38/109-B-4, Chittor Road, Rayachoty, Annamayya Dist,<br>
        Andhra Pradesh - 516269. Phone : +91 7330611206
    </div>

    <div class=\"line\"></div>

    <div class=\"gst-info\">
        GST : 37BBBPB0938F1Z4
    </div>

    <div class=\"line\"></div>

    <div style=\"font-size:10px; font-weight:700;\">
        Name : Walk-in Customer&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Order ID : ";
        // line 218
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "order_id", [], "any", false, false, false, 218);
        yield "
    </div>
    
    ";
        // line 224
        yield "
    <div class=\"line\"></div>

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
        ";
        // line 237
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "products", [], "any", false, false, false, 237));
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
            // line 238
            yield "            <tr class=\"item-name-row ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "excluded", [], "any", false, false, false, 238)) {
                yield "excluded-item";
            }
            yield "\">
                <td style=\"margin-left:15px;\">
                    ";
            // line 240
            yield CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 240);
            yield " &nbsp; ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 240);
            yield "
                </td>
                <td>";
            // line 242
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 242);
            yield "</td>
                <td>";
            // line 243
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 243);
            yield "</td>
                <td>";
            // line 244
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 244);
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
        // line 247
        yield "        </tbody>
    </table>

    ";
        // line 250
        $context["total_items"] = 0;
        // line 251
        yield "    ";
        $context["total_qty"] = 0;
        // line 252
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "products", [], "any", false, false, false, 252));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 253
            yield "        ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "excluded", [], "any", false, false, false, 253)) {
                // line 254
                yield "            ";
                $context["total_items"] = (($context["total_items"] ?? null) + 1);
                // line 255
                yield "            ";
                $context["total_qty"] = (($context["total_qty"] ?? null) + CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 255));
                // line 256
                yield "        ";
            }
            // line 257
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 258
        yield "
    <div class=\"total-qty-bar\">
        <span>Total Item : ( ";
        // line 260
        yield ($context["total_items"] ?? null);
        yield " )</span>
        <span>Total Qty : ( ";
        // line 261
        yield ($context["total_qty"] ?? null);
        yield " )</span>
    </div>

    <div class=\"summary-table\">
        <div style=\"display:flex; justify-content:space-between; margin-bottom:2px;\">
            <span></span><span>Bill Amount : ";
        // line 266
        yield $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "sub_total", [], "any", false, false, false, 266), 2);
        yield "</span>
        </div>
        <div style=\"display:flex; justify-content:space-between; margin-bottom:2px;\">
            <span></span>
            <span style=\"font-weight:700;\">
                Discount Amt : ";
        // line 271
        yield $this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["gst_total"] ?? null), 2);
        yield "
            </span>
        </div>
    </div>

    <div class=\"line\"></div>

    <div class=\"tax-row\">
        <span>CGST (1.5%)</span>
        <span>: ";
        // line 280
        yield $this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["cgst"] ?? null), 2);
        yield "</span>
    </div>

    <div class=\"tax-row\">
        <span>SGST (1.5%)</span>
        <span>: ";
        // line 285
        yield $this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["sgst"] ?? null), 2);
        yield "</span>
    </div>

    <div class=\"line\"></div>

    <div style=\"display:flex; justify-content:space-between; padding:5px 0;\" class=\"bold\">
        <span></span>
        <span style=\"font-size:18px;\">
            Net Payable : ";
        // line 293
        yield $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "final_total", [], "any", false, false, false, 293), 2);
        yield "
        </span>
    </div>

    <div class=\"line\"></div>

    <div class=\"text-center\" style=\"font-size:11px; font-weight:700;\">
        Total Amount Save On This Bills : ";
        // line 300
        yield $this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["gst_total"] ?? null), 2);
        yield "/-
    </div>

    <div class=\"line\"></div>

    <div class=\"text-center\" style=\"font-size:10px; font-weight:700;\">
        No exchange & No Return
    </div>

    <div class=\"line\"></div>

    <div class=\"text-center\" style=\"font-size:12px;\">
        “Your next visit deserves something special. Come back and enjoy exclusive in-store benefits!”
    </div>

</div>
</div>

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
        return "extension/purpletree_pos/catalog/view/template/pos/product_invoice.twig";
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
        return array (  468 => 300,  458 => 293,  447 => 285,  439 => 280,  427 => 271,  419 => 266,  411 => 261,  407 => 260,  403 => 258,  397 => 257,  394 => 256,  391 => 255,  388 => 254,  385 => 253,  380 => 252,  377 => 251,  375 => 250,  370 => 247,  353 => 244,  349 => 243,  345 => 242,  338 => 240,  330 => 238,  313 => 237,  298 => 224,  292 => 218,  255 => 184,  251 => 183,  242 => 176,  240 => 175,  238 => 174,  236 => 173,  73 => 13,  69 => 12,  64 => 10,  60 => 9,  56 => 8,  45 => 2,  42 => 1,);
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
    <link href=\"{{ bootstrap_css }}\" rel=\"stylesheet\"/>
    <link href=\"{{ icons }}\" rel=\"stylesheet\"/>

    <script src=\"{{ jquery }}\"></script>
    <script src=\"{{ bootstrap_js }}\"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&family=Noto+Sans+Devanagari:wght@400;700&display=swap');

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            background: #f3f3f3;
            font-family: 'Roboto','Noto Sans Devanagari',sans-serif;
            display: flex;
            justify-content: center;
            padding-top: 20px;
            color: #000;
        }

        .receipt-container {
            width: 80mm;
            max-width: 80mm;
            background: #fff;
            padding: 5mm;
            position: relative;
            overflow: hidden;
        }

        .content-wrapper { position: relative; z-index: 1; }

        .text-center { text-align: center; }
        .bold { font-weight: 700; }

        .line {
            border-bottom: 1px solid #000;
            margin: 5px 0;
        }

        .header-top {
            font-size: 10px;
            font-weight: bold;
            margin-bottom: 5px;
            text-align: center;
        }

        .logo-section {
            text-align: center;
            margin-bottom: 5px;
        }

        .logo-main {
            font-size: 20px;
            font-weight: 900;
            font-family: serif;
            text-transform: uppercase;
            line-height: 1.2;
        }

        .store-info, .gst-info {
            font-size: 10px;
            font-weight: 700;
            line-height: 1.3;
        }

        .items-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 10px;
            table-layout: fixed;
        }

        .items-table th {
            border-bottom: 1px solid #000;
            padding: 3px 0;
            text-align: center;
            white-space: nowrap;
        }

        .items-table th:first-child { text-align: left; }

        .item-name-row td {
            padding-top: 5px;
            font-weight: 700;
            font-size: 11px;
        }

        .items-table tbody td {
            text-align: center !important;
            vertical-align: top !important;
            padding: 3px 0;
        }

        .items-table tbody td:first-child {
            text-align: left !important;
        }

        .excluded-item {
            text-decoration: line-through;
            opacity: 0.6;
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
            text-align: right;
            margin-top: 5px;
        }

        .tax-row {
            display: flex;
            justify-content: flex-end;
            font-size: 12px;
            font-weight: 500;
            margin-bottom: 3px;
        }

        .tax-row span:first-child {
            min-width: 90px;
            text-align: left;
        }

        @media print {
            body {
                background: #fff;
                padding: 0;
                margin: 0;
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
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
            }

            @page {
                size: 80mm auto;
                margin: 0;
            }
        }
    </style>
</head>

<body>

{% set cgst = cart.sub_total * 0.015 %}
{% set sgst = cart.sub_total * 0.015 %}
{% set gst_total = cgst + sgst %}

<div class=\"receipt-container\">
<div class=\"content-wrapper\">

    <div class=\"header-top\">INVOICE</div>

    <div style=\"display:flex; justify-content:space-between; font-size:10px; font-weight:500;\">
        <div>Invoice : {{ cart.invoice_no }}</div>
        <div>{{ cart.date }}</div>
    </div>

    <div class=\"line\"></div>

    <div class=\"logo-section\">
        <div style=\"display:flex; align-items:center; justify-content:center; gap:10px;\">
            <img src=\"https://myteknoland.com/MTL/image/saleem_logo.jpg\"
                 style=\"width:70px;height:70px;object-fit:contain;\">
            <div>
                <div class=\"logo-main\" style=\"margin-left:-25px;\">
                    SALEEM GOLD COVERING
                </div>
                <h6 style=\"margin-right:20px;\">WHOLESALE - +91 7337011206</h6>
            </div>
        </div>
    </div>

    <div class=\"line\"></div>

    <div class=\"store-info\">
        38/109-B-4, Chittor Road, Rayachoty, Annamayya Dist,<br>
        Andhra Pradesh - 516269. Phone : +91 7330611206
    </div>

    <div class=\"line\"></div>

    <div class=\"gst-info\">
        GST : 37BBBPB0938F1Z4
    </div>

    <div class=\"line\"></div>

    <div style=\"font-size:10px; font-weight:700;\">
        Name : Walk-in Customer&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Order ID : {{ cart.order_id }}
    </div>
    
    {#<div style=\"font-size:10px; font-weight:700;\">
    Order ID : {{ cart.order_id }}
</div>#}

    <div class=\"line\"></div>

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
        {% for product in cart.products %}
            <tr class=\"item-name-row {% if product.excluded %}excluded-item{% endif %}\">
                <td style=\"margin-left:15px;\">
                    {{ loop.index }} &nbsp; {{ product.name }}
                </td>
                <td>{{ product.quantity }}</td>
                <td>{{ product.price }}</td>
                <td>{{ product.total }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    {% set total_items = 0 %}
    {% set total_qty = 0 %}
    {% for product in cart.products %}
        {% if not product.excluded %}
            {% set total_items = total_items + 1 %}
            {% set total_qty = total_qty + product.quantity %}
        {% endif %}
    {% endfor %}

    <div class=\"total-qty-bar\">
        <span>Total Item : ( {{ total_items }} )</span>
        <span>Total Qty : ( {{ total_qty }} )</span>
    </div>

    <div class=\"summary-table\">
        <div style=\"display:flex; justify-content:space-between; margin-bottom:2px;\">
            <span></span><span>Bill Amount : {{ cart.sub_total|number_format(2) }}</span>
        </div>
        <div style=\"display:flex; justify-content:space-between; margin-bottom:2px;\">
            <span></span>
            <span style=\"font-weight:700;\">
                Discount Amt : {{ gst_total|number_format(2) }}
            </span>
        </div>
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

    <div style=\"display:flex; justify-content:space-between; padding:5px 0;\" class=\"bold\">
        <span></span>
        <span style=\"font-size:18px;\">
            Net Payable : {{ cart.final_total|number_format(2) }}
        </span>
    </div>

    <div class=\"line\"></div>

    <div class=\"text-center\" style=\"font-size:11px; font-weight:700;\">
        Total Amount Save On This Bills : {{ gst_total|number_format(2) }}/-
    </div>

    <div class=\"line\"></div>

    <div class=\"text-center\" style=\"font-size:10px; font-weight:700;\">
        No exchange & No Return
    </div>

    <div class=\"line\"></div>

    <div class=\"text-center\" style=\"font-size:12px;\">
        “Your next visit deserves something special. Come back and enjoy exclusive in-store benefits!”
    </div>

</div>
</div>

</body>
</html>
", "extension/purpletree_pos/catalog/view/template/pos/product_invoice.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/extension/purpletree_pos/catalog/view/template/pos/product_invoice.twig");
    }
}
