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

/* admin/view/template/customer/customer_authorize.twig */
class __TwigTemplate_cab53b316ba2446e1755af80174df735 extends Template
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
        yield ($context["column_ip"] ?? null);
        yield "</th>
        <th>";
        // line 6
        yield ($context["column_user_agent"] ?? null);
        yield "</th>
        <th>";
        // line 7
        yield ($context["column_date_added"] ?? null);
        yield "</th>
        <th>";
        // line 8
        yield ($context["column_date_expire"] ?? null);
        yield "</th>
        <th class=\"text-end\">";
        // line 9
        yield ($context["column_action"] ?? null);
        yield "</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 13
        if (($context["authorizes"] ?? null)) {
            // line 14
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["authorizes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["authorize"]) {
                // line 15
                yield "          <tr";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["authorize"], "status", [], "any", false, false, false, 15)) {
                    yield " class=\"table-active opacity-50\"";
                }
                yield ">
            <td><a href=\"https://whatismyipaddress.com/ip/";
                // line 16
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["user_login"] ?? null), "ip", [], "any", false, false, false, 16);
                yield "\" target=\"_blank\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["authorize"], "ip", [], "any", false, false, false, 16);
                yield "</a></td>
            <td>";
                // line 17
                yield CoreExtension::getAttribute($this->env, $this->source, $context["authorize"], "user_agent", [], "any", false, false, false, 17);
                yield "</td>
            <td>";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["authorize"], "date_added", [], "any", false, false, false, 18);
                yield "</td>
            <td>";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["authorize"], "date_expire", [], "any", false, false, false, 19);
                yield "</td>
            <td class=\"text-end\"><a href=\"";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["authorize"], "delete", [], "any", false, false, false, 20);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_remove"] ?? null);
                yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></a></td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['authorize'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            yield "      ";
        } else {
            // line 24
            yield "        <tr>
          <td class=\"text-center\" colspan=\"5\">";
            // line 25
            yield ($context["text_no_results"] ?? null);
            yield "</td>
        </tr>
      ";
        }
        // line 28
        yield "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">";
        // line 32
        yield ($context["pagination"] ?? null);
        yield "</div>
  <div class=\"col-sm-6 text-end\">";
        // line 33
        yield ($context["results"] ?? null);
        yield "</div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/customer/customer_authorize.twig";
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
        return array (  136 => 33,  132 => 32,  126 => 28,  120 => 25,  117 => 24,  114 => 23,  103 => 20,  99 => 19,  95 => 18,  91 => 17,  85 => 16,  78 => 15,  73 => 14,  71 => 13,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <th>{{ column_ip }}</th>
        <th>{{ column_user_agent }}</th>
        <th>{{ column_date_added }}</th>
        <th>{{ column_date_expire }}</th>
        <th class=\"text-end\">{{ column_action }}</th>
      </tr>
    </thead>
    <tbody>
      {% if authorizes %}
        {% for authorize in authorizes %}
          <tr{% if not authorize.status %} class=\"table-active opacity-50\"{% endif %}>
            <td><a href=\"https://whatismyipaddress.com/ip/{{ user_login.ip }}\" target=\"_blank\">{{ authorize.ip }}</a></td>
            <td>{{ authorize.user_agent }}</td>
            <td>{{ authorize.date_added }}</td>
            <td>{{ authorize.date_expire }}</td>
            <td class=\"text-end\"><a href=\"{{ authorize.delete }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></a></td>
          </tr>
        {% endfor %}
      {% else %}
        <tr>
          <td class=\"text-center\" colspan=\"5\">{{ text_no_results }}</td>
        </tr>
      {% endif %}
    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
  <div class=\"col-sm-6 text-end\">{{ results }}</div>
</div>", "admin/view/template/customer/customer_authorize.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/admin/view/template/customer/customer_authorize.twig");
    }
}
