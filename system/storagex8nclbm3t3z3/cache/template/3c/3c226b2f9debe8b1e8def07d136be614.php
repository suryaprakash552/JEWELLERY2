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

/* admin/view/template/customer/customer_transaction.twig */
class __TwigTemplate_ceaae28f02e74fc5be6151c223537583 extends Template
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
        yield "<div class=\"table-responsive\">
                      
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr align=\"center\">
        <th>";
        // line 6
        yield ($context["column_date_added"] ?? null);
        yield "</th>
        <th>";
        // line 7
        yield ($context["column_username"] ?? null);
        yield "</th>
        <th>";
        // line 8
        yield ($context["column_description"] ?? null);
        yield "</th>
        <th>";
        // line 9
        yield ($context["column_transactiontype"] ?? null);
        yield "</th>
        <th>";
        // line 10
        yield ($context["column_transactionsubtype"] ?? null);
        yield "</th>
        <th class=\"text-end\">";
        // line 11
        yield ($context["column_amount"] ?? null);
        yield "</th>
        <th class=\"text-end\">";
        // line 12
        yield ($context["column_balance"] ?? null);
        yield "</th>
        <th>";
        // line 13
        yield ($context["column_txtid"] ?? null);
        yield "</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 17
        if (($context["transactions"] ?? null)) {
            // line 18
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["transactions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
                // line 19
                yield "          <tr>
            <td>";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "date_added", [], "any", false, false, false, 20);
                yield "</td>
            <td>";
                // line 21
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "firstname", [], "any", false, false, false, 21) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "lastname", [], "any", false, false, false, 21));
                yield "</td>
            <td>";
                // line 22
                yield CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "description", [], "any", false, false, false, 22);
                yield "</td>
            <td>";
                // line 23
                yield CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "transactiontype", [], "any", false, false, false, 23);
                yield "</td>
            <td>";
                // line 24
                yield CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "transactionsubtype", [], "any", false, false, false, 24);
                yield "</td>
            <td class=\"text-end\">";
                // line 25
                yield CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "amount", [], "any", false, false, false, 25);
                yield "</td>
            <td class=\"text-end\">";
                // line 26
                yield CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "balance", [], "any", false, false, false, 26);
                yield "</td>
            <td>";
                // line 27
                yield CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "txtid", [], "any", false, false, false, 27);
                yield "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['transaction'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "        
        ";
            // line 41
            yield "      ";
        } else {
            // line 42
            yield "        <tr>
          <td class=\"text-center\" colspan=\"8\">";
            // line 43
            yield ($context["text_no_results"] ?? null);
            yield "</td>
        </tr>
      ";
        }
        // line 46
        yield "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">";
        // line 50
        yield ($context["pagination"] ?? null);
        yield "</div>
  <div class=\"col-sm-6 text-end\">";
        // line 51
        yield ($context["results"] ?? null);
        yield "</div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/customer/customer_transaction.twig";
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
        return array (  156 => 51,  152 => 50,  146 => 46,  140 => 43,  137 => 42,  134 => 41,  131 => 30,  122 => 27,  118 => 26,  114 => 25,  110 => 24,  106 => 23,  102 => 22,  98 => 21,  94 => 20,  91 => 19,  86 => 18,  84 => 17,  77 => 13,  73 => 12,  69 => 11,  65 => 10,  61 => 9,  57 => 8,  53 => 7,  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"table-responsive\">
                      
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr align=\"center\">
        <th>{{ column_date_added }}</th>
        <th>{{ column_username }}</th>
        <th>{{ column_description }}</th>
        <th>{{ column_transactiontype }}</th>
        <th>{{ column_transactionsubtype }}</th>
        <th class=\"text-end\">{{ column_amount }}</th>
        <th class=\"text-end\">{{ column_balance }}</th>
        <th>{{ column_txtid }}</th>
      </tr>
    </thead>
    <tbody>
      {% if transactions %}
        {% for transaction in transactions %}
          <tr>
            <td>{{ transaction.date_added }}</td>
            <td>{{ transaction.firstname ~ \" \" ~ transaction.lastname}}</td>
            <td>{{ transaction.description }}</td>
            <td>{{ transaction.transactiontype }}</td>
            <td>{{ transaction.transactionsubtype }}</td>
            <td class=\"text-end\">{{ transaction.amount }}</td>
            <td class=\"text-end\">{{ transaction.balance }}</td>
            <td>{{ transaction.txtid }}</td>
          </tr>
        {% endfor %}
        
        {#<tr>
          <td colspan=\"4\">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class=\"text-end\" colspan=\"2\"><b>{{ text_balance }}</b></td>
          <td colspan=\"2\">{{ aepsbalance }}</td>
        
        </tr>#}
      {% else %}
        <tr>
          <td class=\"text-center\" colspan=\"8\">{{ text_no_results }}</td>
        </tr>
      {% endif %}
    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
  <div class=\"col-sm-6 text-end\">{{ results }}</div>
</div>
", "admin/view/template/customer/customer_transaction.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/admin/view/template/customer/customer_transaction.twig");
    }
}
