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

/* admin/view/template/customer/customer_reward.twig */
class __TwigTemplate_3f83726bddcaf383f6975a393ece4c70 extends Template
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
      <tr>
        <th>";
        // line 5
        yield ($context["column_date_added"] ?? null);
        yield "</th>
        <th>";
        // line 6
        yield ($context["column_description"] ?? null);
        yield "</th>
        <th class=\"text-end\">";
        // line 7
        yield ($context["column_points"] ?? null);
        yield "</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 11
        if (($context["rewards"] ?? null)) {
            // line 12
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["rewards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reward"]) {
                // line 13
                yield "          <tr>
            <td>";
                // line 14
                yield CoreExtension::getAttribute($this->env, $this->source, $context["reward"], "date_added", [], "any", false, false, false, 14);
                yield "</td>
            <td>";
                // line 15
                yield CoreExtension::getAttribute($this->env, $this->source, $context["reward"], "description", [], "any", false, false, false, 15);
                yield "</td>
            <td class=\"text-end\">";
                // line 16
                yield CoreExtension::getAttribute($this->env, $this->source, $context["reward"], "points", [], "any", false, false, false, 16);
                yield "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reward'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "        <tr>
          <td></td>
          <td class=\"text-end\"><b>";
            // line 21
            yield ($context["text_balance"] ?? null);
            yield "</b></td>
          <td class=\"text-end\">";
            // line 22
            yield ($context["balance"] ?? null);
            yield "</td>
        </tr>
      ";
        } else {
            // line 25
            yield "        <tr>
          <td class=\"text-center\" colspan=\"3\">";
            // line 26
            yield ($context["text_no_results"] ?? null);
            yield "</td>
        </tr>
      ";
        }
        // line 29
        yield "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">";
        // line 33
        yield ($context["pagination"] ?? null);
        yield "</div>
  <div class=\"col-sm-6 text-end\">";
        // line 34
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
        return "admin/view/template/customer/customer_reward.twig";
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
        return array (  123 => 34,  119 => 33,  113 => 29,  107 => 26,  104 => 25,  98 => 22,  94 => 21,  90 => 19,  81 => 16,  77 => 15,  73 => 14,  70 => 13,  65 => 12,  63 => 11,  56 => 7,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <th>{{ column_date_added }}</th>
        <th>{{ column_description }}</th>
        <th class=\"text-end\">{{ column_points }}</th>
      </tr>
    </thead>
    <tbody>
      {% if rewards %}
        {% for reward in rewards %}
          <tr>
            <td>{{ reward.date_added }}</td>
            <td>{{ reward.description }}</td>
            <td class=\"text-end\">{{ reward.points }}</td>
          </tr>
        {% endfor %}
        <tr>
          <td></td>
          <td class=\"text-end\"><b>{{ text_balance }}</b></td>
          <td class=\"text-end\">{{ balance }}</td>
        </tr>
      {% else %}
        <tr>
          <td class=\"text-center\" colspan=\"3\">{{ text_no_results }}</td>
        </tr>
      {% endif %}
    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
  <div class=\"col-sm-6 text-end\">{{ results }}</div>
</div>
", "admin/view/template/customer/customer_reward.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/admin/view/template/customer/customer_reward.twig");
    }
}
