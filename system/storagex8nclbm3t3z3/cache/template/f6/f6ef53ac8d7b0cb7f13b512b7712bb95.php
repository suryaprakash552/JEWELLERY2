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

/* admin/view/template/sale/returns_list.twig */
class __TwigTemplate_34f7e5d82bacfa9d772785b534dc18f5 extends Template
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
        yield "<form id=\"form-return\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#return\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th class=\"text-end\"><a href=\"";
        // line 7
        yield ($context["sort_return_id"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "r.return_id")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_return_id"] ?? null);
        yield "</a></th>
          <th class=\"text-end\"><a href=\"";
        // line 8
        yield ($context["sort_order_id"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "r.order_id")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_order_id"] ?? null);
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
        yield ($context["sort_product"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "r.product")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_product"] ?? null);
        yield "</a></th>
          <th class=\"d-none d-lg-table-cell\"><a href=\"";
        // line 11
        yield ($context["sort_model"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "r.model")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_model"] ?? null);
        yield "</a></th>
          <th><a href=\"";
        // line 12
        yield ($context["sort_status"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "return_status")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_status"] ?? null);
        yield "</a></th>
          <th class=\"d-none d-lg-table-cell\"><a href=\"";
        // line 13
        yield ($context["sort_date_added"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "r.date_added")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_date_added"] ?? null);
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
        if (($context["returns"] ?? null)) {
            // line 19
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["returns"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["return"]) {
                // line 20
                yield "            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 21
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return"], "return_id", [], "any", false, false, false, 21);
                yield "\" class=\"form-check-input\"/></td>
              <td class=\"text-end\">";
                // line 22
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return"], "return_id", [], "any", false, false, false, 22);
                yield "</td>
              <td class=\"text-end\">";
                // line 23
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return"], "order_id", [], "any", false, false, false, 23);
                yield "</td>
              <td>";
                // line 24
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return"], "customer", [], "any", false, false, false, 24);
                yield "</td>
              <td>";
                // line 25
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return"], "product", [], "any", false, false, false, 25);
                yield "</td>
              <td class=\"d-none d-lg-table-cell\">";
                // line 26
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return"], "model", [], "any", false, false, false, 26);
                yield "</td>
              <td>";
                // line 27
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return"], "return_status", [], "any", false, false, false, 27);
                yield "</td>
              <td class=\"d-none d-lg-table-cell\">";
                // line 28
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return"], "date_added", [], "any", false, false, false, 28);
                yield "</td>
              <td class=\"text-end\"><a href=\"";
                // line 29
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return"], "edit", [], "any", false, false, false, 29);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['return'], $context['_parent']);
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
        return "admin/view/template/sale/returns_list.twig";
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
        return array (  218 => 42,  214 => 41,  208 => 37,  202 => 34,  199 => 33,  196 => 32,  185 => 29,  181 => 28,  177 => 27,  173 => 26,  169 => 25,  165 => 24,  161 => 23,  157 => 22,  153 => 21,  150 => 20,  145 => 19,  143 => 18,  136 => 14,  124 => 13,  112 => 12,  100 => 11,  88 => 10,  76 => 9,  64 => 8,  52 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-return\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#return\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th class=\"text-end\"><a href=\"{{ sort_return_id }}\"{% if sort == 'r.return_id' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_return_id }}</a></th>
          <th class=\"text-end\"><a href=\"{{ sort_order_id }}\"{% if sort == 'r.order_id' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_order_id }}</a></th>
          <th><a href=\"{{ sort_customer }}\"{% if sort == 'customer' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_customer }}</a></th>
          <th><a href=\"{{ sort_product }}\"{% if sort == 'r.product' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_product }}</a></th>
          <th class=\"d-none d-lg-table-cell\"><a href=\"{{ sort_model }}\"{% if sort == 'r.model' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_model }}</a></th>
          <th><a href=\"{{ sort_status }}\"{% if sort == 'return_status' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_status }}</a></th>
          <th class=\"d-none d-lg-table-cell\"><a href=\"{{ sort_date_added }}\"{% if sort == 'r.date_added' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_date_added }}</a></th>
          <th class=\"text-end\">{{ column_action }}</th>
        </tr>
      </thead>
      <tbody>
        {% if returns %}
          {% for return in returns %}
            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ return.return_id }}\" class=\"form-check-input\"/></td>
              <td class=\"text-end\">{{ return.return_id }}</td>
              <td class=\"text-end\">{{ return.order_id }}</td>
              <td>{{ return.customer }}</td>
              <td>{{ return.product }}</td>
              <td class=\"d-none d-lg-table-cell\">{{ return.model }}</td>
              <td>{{ return.return_status }}</td>
              <td class=\"d-none d-lg-table-cell\">{{ return.date_added }}</td>
              <td class=\"text-end\"><a href=\"{{ return.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
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
</form>", "admin/view/template/sale/returns_list.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/admin/view/template/sale/returns_list.twig");
    }
}
