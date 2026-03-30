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

/* admin/view/template/marketing/coupon_list.twig */
class __TwigTemplate_230639b1549067d29960b07d675c2347 extends Template
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
        yield "<form id=\"form-coupon\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#coupon\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th><a href=\"";
        // line 7
        yield ($context["sort_name"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "name")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_name"] ?? null);
        yield "</a></th>
          <th><a href=\"";
        // line 8
        yield ($context["sort_code"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "code")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_code"] ?? null);
        yield "</a></th>
          <th class=\"text-end\"><a href=\"";
        // line 9
        yield ($context["sort_discount"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "discount")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_discount"] ?? null);
        yield "</a></th>
          <th class=\"text-end\"><a href=\"";
        // line 10
        yield ($context["sort_minimum_total"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "minimum_total")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">Minimum Bill</a></th>
          <th class=\"d-none d-lg-table-cell\"><a href=\"";
        // line 11
        yield ($context["sort_date_start"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "date_start")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_date_start"] ?? null);
        yield "</a></th>
          <th class=\"d-none d-lg-table-cell\"><a href=\"";
        // line 12
        yield ($context["sort_date_end"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "date_end")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_date_end"] ?? null);
        yield "</a></th>
          <th class=\"text-end\">";
        // line 13
        yield ($context["column_action"] ?? null);
        yield "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 17
        if (($context["coupons"] ?? null)) {
            // line 18
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["coupons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
                // line 19
                yield "            <tr";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "status", [], "any", false, false, false, 19)) {
                    yield " class=\"table-active opacity-50\"";
                }
                yield ">
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "coupon_id", [], "any", false, false, false, 20);
                yield "\" class=\"form-check-input\"/></td>
              <td>";
                // line 21
                yield CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "name", [], "any", false, false, false, 21);
                yield "</td>
              <td>";
                // line 22
                yield CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 22);
                yield "</td>
              <td class=\"text-end\">";
                // line 23
                yield CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 23);
                yield "</td>
              <td class=\"text-end\">";
                // line 24
                yield CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "minimum_total", [], "any", false, false, false, 24);
                yield "</td>
              <td class=\"d-none d-lg-table-cell\">";
                // line 25
                yield CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "date_start", [], "any", false, false, false, 25);
                yield "</td>
              <td class=\"d-none d-lg-table-cell\">";
                // line 26
                yield CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 26);
                yield "</td>
              <td class=\"text-end\"><a href=\"";
                // line 27
                yield CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "edit", [], "any", false, false, false, 27);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['coupon'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "        ";
        } else {
            // line 31
            yield "          <tr>
            <td class=\"text-center\" colspan=\"8\">";
            // line 32
            yield ($context["text_no_results"] ?? null);
            yield "</td>
          </tr>
        ";
        }
        // line 35
        yield "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 39
        yield ($context["pagination"] ?? null);
        yield "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 40
        yield ($context["results"] ?? null);
        yield "</div>
  </div>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/marketing/coupon_list.twig";
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
        return array (  204 => 40,  200 => 39,  194 => 35,  188 => 32,  185 => 31,  182 => 30,  171 => 27,  167 => 26,  163 => 25,  159 => 24,  155 => 23,  151 => 22,  147 => 21,  143 => 20,  136 => 19,  131 => 18,  129 => 17,  122 => 13,  110 => 12,  98 => 11,  88 => 10,  76 => 9,  64 => 8,  52 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-coupon\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#coupon\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th><a href=\"{{ sort_name }}\"{% if sort == 'name' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_name }}</a></th>
          <th><a href=\"{{ sort_code }}\"{% if sort == 'code' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_code }}</a></th>
          <th class=\"text-end\"><a href=\"{{ sort_discount }}\"{% if sort == 'discount' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_discount }}</a></th>
          <th class=\"text-end\"><a href=\"{{ sort_minimum_total }}\"{% if sort == 'minimum_total' %} class=\"{{ order|lower }}\"{% endif %}>Minimum Bill</a></th>
          <th class=\"d-none d-lg-table-cell\"><a href=\"{{ sort_date_start }}\"{% if sort == 'date_start' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_date_start }}</a></th>
          <th class=\"d-none d-lg-table-cell\"><a href=\"{{ sort_date_end }}\"{% if sort == 'date_end' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_date_end }}</a></th>
          <th class=\"text-end\">{{ column_action }}</th>
        </tr>
      </thead>
      <tbody>
        {% if coupons %}
          {% for coupon in coupons %}
            <tr{% if not coupon.status %} class=\"table-active opacity-50\"{% endif %}>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ coupon.coupon_id }}\" class=\"form-check-input\"/></td>
              <td>{{ coupon.name }}</td>
              <td>{{ coupon.code }}</td>
              <td class=\"text-end\">{{ coupon.discount }}</td>
              <td class=\"text-end\">{{ coupon.minimum_total }}</td>
              <td class=\"d-none d-lg-table-cell\">{{ coupon.date_start }}</td>
              <td class=\"d-none d-lg-table-cell\">{{ coupon.date_end }}</td>
              <td class=\"text-end\"><a href=\"{{ coupon.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          {% endfor %}
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
</form>
", "admin/view/template/marketing/coupon_list.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/admin/view/template/marketing/coupon_list.twig");
    }
}
