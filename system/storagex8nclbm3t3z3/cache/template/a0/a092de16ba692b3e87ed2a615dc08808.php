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

/* extension/purpletree_pos/catalog/view/template/pos/smallprint_invoice.twig */
class __TwigTemplate_28f4d28a1d92aa8439fc4c9f5474fde4 extends Template
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
    <title>Saleem Gold Covering - Day Summary</title>
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
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap');

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            background: #f3f3f3;
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            padding-top: 20px;
            color: #000;
        }

        .receipt-container {
            width: 80mm;
            background: #fff;
            padding: 5mm;
        }

        .text-center { text-align: center; }
        .bold { font-weight: 700; }

        .line {
            border-bottom: 1px solid #000;
            margin: 5px 0;
        }

        .logo-main {
            font-size: 20px;
            font-weight: 900;
            font-family: serif;
        }

        .store-info {
            font-size: 10px;
            font-weight: 700;
            line-height: 1.3;
        }

        .summary-table {
            font-size: 12px;
            margin-top: 5px;
        }

        @media print {
            body { background: #fff; margin: 0; padding: 0; }
            @page { size: 80mm auto; margin: 0; }
        }
    </style>
</head>

<body onload=\"window.print();\">

<div class=\"receipt-container\">

    <div class=\"text-center bold\">TOTAL INVOICE</div>
    <div class=\"text-center\" style=\"font-size:10px;\">
        ";
        // line 71
        yield $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d-m-Y h:i A", "Asia/Kolkata");
        yield "
    </div>

    <div class=\"line\"></div>

    <div class=\"text-center\">
        <img src=\"https://myteknoland.com/MTL/image/saleem_logo.jpg\" style=\"width:70px;\">
        <div class=\"logo-main\">SALEEM GOLD COVERING</div>
        <div style=\"font-size:10px;\">WHOLESALE - +91 7337011206</div>
    </div>

    <div class=\"line\"></div>

    <div class=\"store-info text-center\">
        38/109-B-4, Chittor Road, Rayachoty<br>
        Annamayya Dist, Andhra Pradesh - 516269<br>
        Phone : +91 7330611206
    </div>

    <div class=\"line\"></div>

    <div class=\"summary-table\">

        <div style=\"display:flex; justify-content:space-between;\">
            <span>Total Orders</span>
            <span>";
        // line 96
        yield ($context["total_orders"] ?? null);
        yield "</span>
        </div>

        <div class=\"line\"></div>

        <div style=\"display:flex; justify-content:space-between;\">
            <span>Cash</span>
            <span>";
        // line 103
        yield ($context["cash"] ?? null);
        yield "</span>
        </div>

        <div style=\"display:flex; justify-content:space-between;\">
            <span>UPI</span>
            <span>";
        // line 108
        yield ($context["upi"] ?? null);
        yield "</span>
        </div>

        <div style=\"display:flex; justify-content:space-between;\">
            <span>Returnable</span>
            <span>";
        // line 113
        yield ($context["ra"] ?? null);
        yield "</span>
        </div>

        <div style=\"display:flex; justify-content:space-between;\">
            <span>Due</span>
            <span>";
        // line 118
        yield ($context["due"] ?? null);
        yield "</span>
        </div>

        <div class=\"line\"></div>

        <div style=\"display:flex; justify-content:space-between; font-weight:700;\">
            <span>Received</span>
            <span>";
        // line 125
        yield ($context["rc"] ?? null);
        yield "</span>
        </div>

        <div style=\"display:flex; justify-content:space-between; font-weight:700;\">
            <span>Subtotal</span>
            <span>";
        // line 130
        yield ($context["sbt"] ?? null);
        yield "</span>
        </div>

    </div>

    <div class=\"line\"></div>

    <div class=\"text-center\" style=\"font-size:11px; font-weight:700;\">
        No Exchange • No Return
    </div>

    <div class=\"line\"></div>

    <div class=\"text-center\" style=\"font-size:11px;\">
        Thank you for your business 🙏
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
        return "extension/purpletree_pos/catalog/view/template/pos/smallprint_invoice.twig";
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
        return array (  214 => 130,  206 => 125,  196 => 118,  188 => 113,  180 => 108,  172 => 103,  162 => 96,  134 => 71,  71 => 11,  67 => 10,  63 => 9,  59 => 8,  55 => 7,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html dir=\"{{ direction }}\" lang=\"{{ lang }}\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Saleem Gold Covering - Day Summary</title>
    <base href=\"{{ base }}\"/>
    <link href=\"{{ bootstrap_css }}\" type=\"text/css\" rel=\"stylesheet\"/>
    <link href=\"{{ icons }}\" type=\"text/css\" rel=\"stylesheet\"/>
    <script src=\"{{ jquery }}\" type=\"text/javascript\"></script>
    <script src=\"{{ bootstrap_js }}\" type=\"text/javascript\"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap');

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            background: #f3f3f3;
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            padding-top: 20px;
            color: #000;
        }

        .receipt-container {
            width: 80mm;
            background: #fff;
            padding: 5mm;
        }

        .text-center { text-align: center; }
        .bold { font-weight: 700; }

        .line {
            border-bottom: 1px solid #000;
            margin: 5px 0;
        }

        .logo-main {
            font-size: 20px;
            font-weight: 900;
            font-family: serif;
        }

        .store-info {
            font-size: 10px;
            font-weight: 700;
            line-height: 1.3;
        }

        .summary-table {
            font-size: 12px;
            margin-top: 5px;
        }

        @media print {
            body { background: #fff; margin: 0; padding: 0; }
            @page { size: 80mm auto; margin: 0; }
        }
    </style>
</head>

<body onload=\"window.print();\">

<div class=\"receipt-container\">

    <div class=\"text-center bold\">TOTAL INVOICE</div>
    <div class=\"text-center\" style=\"font-size:10px;\">
        {{ \"now\"|date(\"d-m-Y h:i A\", \"Asia/Kolkata\") }}
    </div>

    <div class=\"line\"></div>

    <div class=\"text-center\">
        <img src=\"https://myteknoland.com/MTL/image/saleem_logo.jpg\" style=\"width:70px;\">
        <div class=\"logo-main\">SALEEM GOLD COVERING</div>
        <div style=\"font-size:10px;\">WHOLESALE - +91 7337011206</div>
    </div>

    <div class=\"line\"></div>

    <div class=\"store-info text-center\">
        38/109-B-4, Chittor Road, Rayachoty<br>
        Annamayya Dist, Andhra Pradesh - 516269<br>
        Phone : +91 7330611206
    </div>

    <div class=\"line\"></div>

    <div class=\"summary-table\">

        <div style=\"display:flex; justify-content:space-between;\">
            <span>Total Orders</span>
            <span>{{ total_orders }}</span>
        </div>

        <div class=\"line\"></div>

        <div style=\"display:flex; justify-content:space-between;\">
            <span>Cash</span>
            <span>{{ cash }}</span>
        </div>

        <div style=\"display:flex; justify-content:space-between;\">
            <span>UPI</span>
            <span>{{ upi }}</span>
        </div>

        <div style=\"display:flex; justify-content:space-between;\">
            <span>Returnable</span>
            <span>{{ ra }}</span>
        </div>

        <div style=\"display:flex; justify-content:space-between;\">
            <span>Due</span>
            <span>{{ due }}</span>
        </div>

        <div class=\"line\"></div>

        <div style=\"display:flex; justify-content:space-between; font-weight:700;\">
            <span>Received</span>
            <span>{{ rc }}</span>
        </div>

        <div style=\"display:flex; justify-content:space-between; font-weight:700;\">
            <span>Subtotal</span>
            <span>{{ sbt }}</span>
        </div>

    </div>

    <div class=\"line\"></div>

    <div class=\"text-center\" style=\"font-size:11px; font-weight:700;\">
        No Exchange • No Return
    </div>

    <div class=\"line\"></div>

    <div class=\"text-center\" style=\"font-size:11px;\">
        Thank you for your business 🙏
    </div>

</div>

</body>
</html>
", "extension/purpletree_pos/catalog/view/template/pos/smallprint_invoice.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/extension/purpletree_pos/catalog/view/template/pos/smallprint_invoice.twig");
    }
}
