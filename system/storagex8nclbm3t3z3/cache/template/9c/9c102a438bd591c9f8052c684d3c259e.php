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

/* admin/view/template/sale/order_list.twig */
class __TwigTemplate_ebd45a3d34a32751a7502fec0c4174dc extends Template
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
        yield "<form id=\"form-order\" method=\"post\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#order\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').trigger('click');\" class=\"form-check-input\"/></th>
          <th class=\"text-end\"><a href=\"";
        // line 7
        yield ($context["sort_order"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "o.order_id")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_order_id"] ?? null);
        yield "</a></th>
          <th><a href=\"";
        // line 8
        yield ($context["sort_store_name"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "o.store_name")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_store"] ?? null);
        yield "</a></th>
          <th><a href=\"";
        // line 9
        yield ($context["sort_customer"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "customer")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_customer"] ?? null);
        yield "</a></th>
          <th><a href=\"";
        // line 10
        yield ($context["sort_status"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "order_status")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_status"] ?? null);
        yield "</a></th>
          <th class=\"text-end d-none d-lg-table-cell\"><a href=\"";
        // line 11
        yield ($context["sort_total"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "o.total")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_total"] ?? null);
        yield "</a></th>
          <th class=\"d-none d-lg-table-cell\"><a href=\"";
        // line 12
        yield ($context["sort_date_added"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "o.date_added")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_date_added"] ?? null);
        yield "</a></th>
          <th class=\"d-none d-xl-table-cell\"><a href=\"";
        // line 13
        yield ($context["sort_date_modified"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "o.date_modified")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_date_modified"] ?? null);
        yield "</a></th>
          <th class=\"text-end\">";
        // line 14
        yield ($context["column_action"] ?? null);
        yield "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 18
        if (($context["orders"] ?? null)) {
            // line 19
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 20
                yield "            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 21
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 21);
                yield "\" class=\"form-check-input\"/><input type=\"hidden\" name=\"shipping_method[]\" value=\"";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["order"], "shipping_method", [], "any", false, false, false, 21)) {
                    yield "1";
                } else {
                    yield "0";
                }
                yield "\"/></td>
              <td class=\"text-end\">";
                // line 22
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 22);
                yield "</td>
              <td>";
                // line 23
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "store_name", [], "any", false, false, false, 23);
                yield "</td>
              <td>";
                // line 24
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 24);
                yield "</td>
              <td>";
                // line 25
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "order_status", [], "any", false, false, false, 25);
                yield "</td>
              <td class=\"text-end d-none d-lg-table-cell\">";
                // line 26
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 26);
                yield "</td>
              <td class=\"d-none d-lg-table-cell\">";
                // line 27
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 27);
                yield "</td>
              <td class=\"d-none d-xl-table-cell\">";
                // line 28
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "date_modified", [], "any", false, false, false, 28);
                yield "</td>
              <td class=\"text-end\"><a href=\"";
                // line 29
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 29);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_view"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-eye\"></i></a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            yield "        ";
        } else {
            // line 33
            yield "          <tr>
            <td class=\"text-center\" colspan=\"9\">";
            // line 34
            yield ($context["text_no_results"] ?? null);
            yield "</td>
          </tr>
        ";
        }
        // line 37
        yield "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 41
        yield ($context["pagination"] ?? null);
        yield "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 42
        yield ($context["results"] ?? null);
        yield "</div>
  </div>
</form>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/sale/order_list.twig";
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
        return array (  224 => 42,  220 => 41,  214 => 37,  208 => 34,  205 => 33,  202 => 32,  191 => 29,  187 => 28,  183 => 27,  179 => 26,  175 => 25,  171 => 24,  167 => 23,  163 => 22,  153 => 21,  150 => 20,  145 => 19,  143 => 18,  136 => 14,  124 => 13,  112 => 12,  100 => 11,  88 => 10,  76 => 9,  64 => 8,  52 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-order\" method=\"post\" data-oc-load=\"{{ action }}\" data-oc-target=\"#order\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').trigger('click');\" class=\"form-check-input\"/></th>
          <th class=\"text-end\"><a href=\"{{ sort_order }}\"{% if sort == 'o.order_id' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_order_id }}</a></th>
          <th><a href=\"{{ sort_store_name }}\"{% if sort == 'o.store_name' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_store }}</a></th>
          <th><a href=\"{{ sort_customer }}\"{% if sort == 'customer' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_customer }}</a></th>
          <th><a href=\"{{ sort_status }}\"{% if sort == 'order_status' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_status }}</a></th>
          <th class=\"text-end d-none d-lg-table-cell\"><a href=\"{{ sort_total }}\"{% if sort == 'o.total' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_total }}</a></th>
          <th class=\"d-none d-lg-table-cell\"><a href=\"{{ sort_date_added }}\"{% if sort == 'o.date_added' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_date_added }}</a></th>
          <th class=\"d-none d-xl-table-cell\"><a href=\"{{ sort_date_modified }}\"{% if sort == 'o.date_modified' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_date_modified }}</a></th>
          <th class=\"text-end\">{{ column_action }}</th>
        </tr>
      </thead>
      <tbody>
        {% if orders %}
          {% for order in orders %}
            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ order.order_id }}\" class=\"form-check-input\"/><input type=\"hidden\" name=\"shipping_method[]\" value=\"{% if order.shipping_method %}1{% else %}0{% endif %}\"/></td>
              <td class=\"text-end\">{{ order.order_id }}</td>
              <td>{{ order.store_name }}</td>
              <td>{{ order.customer }}</td>
              <td>{{ order.order_status }}</td>
              <td class=\"text-end d-none d-lg-table-cell\">{{ order.total }}</td>
              <td class=\"d-none d-lg-table-cell\">{{ order.date_added }}</td>
              <td class=\"d-none d-xl-table-cell\">{{ order.date_modified }}</td>
              <td class=\"text-end\"><a href=\"{{ order.view }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_view }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-eye\"></i></a></td>
            </tr>
          {% endfor %}
        {% else %}
          <tr>
            <td class=\"text-center\" colspan=\"9\">{{ text_no_results }}</td>
          </tr>
        {% endif %}
      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
    <div class=\"col-sm-6 text-end\">{{ results }}</div>
  </div>
</form>", "admin/view/template/sale/order_list.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/admin/view/template/sale/order_list.twig");
    }
}
