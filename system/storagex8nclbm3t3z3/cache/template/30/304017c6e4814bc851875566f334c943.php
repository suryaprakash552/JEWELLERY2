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

/* admin/view/template/localisation/country_list.twig */
class __TwigTemplate_8fbbc302122306f14aebb47e2366470c extends Template
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
        yield "<form id=\"form-country\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#country\">
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
        yield ($context["sort_iso_code_2"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "iso_code_2")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_iso_code_2"] ?? null);
        yield "</a></th>
          <th><a href=\"";
        // line 9
        yield ($context["sort_iso_code_3"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "iso_code_3")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_iso_code_3"] ?? null);
        yield "</a></th>
          <th class=\"text-end\">";
        // line 10
        yield ($context["column_action"] ?? null);
        yield "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 14
        if (($context["countries"] ?? null)) {
            // line 15
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 16
                yield "            <tr";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["country"], "status", [], "any", false, false, false, 16)) {
                    yield " class=\"table-active opacity-50\"";
                }
                yield ">
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 17
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 17);
                yield "\" class=\"form-check-input\"/></td>
              <td>";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 18);
                yield "</td>
              <td>";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "iso_code_2", [], "any", false, false, false, 19);
                yield "</td>
              <td>";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "iso_code_3", [], "any", false, false, false, 20);
                yield "</td>
              <td class=\"text-end\"><a href=\"";
                // line 21
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "edit", [], "any", false, false, false, 21);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['country'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            yield "        ";
        } else {
            // line 25
            yield "          <tr>
            <td class=\"text-center\" colspan=\"5\">";
            // line 26
            yield ($context["text_no_results"] ?? null);
            yield "</td>
          </tr>
        ";
        }
        // line 29
        yield "      </tbody>
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
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/localisation/country_list.twig";
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
        return array (  158 => 34,  154 => 33,  148 => 29,  142 => 26,  139 => 25,  136 => 24,  125 => 21,  121 => 20,  117 => 19,  113 => 18,  109 => 17,  102 => 16,  97 => 15,  95 => 14,  88 => 10,  76 => 9,  64 => 8,  52 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-country\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#country\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th><a href=\"{{ sort_name }}\"{% if sort == 'name' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_name }}</a></th>
          <th><a href=\"{{ sort_iso_code_2 }}\"{% if sort == 'iso_code_2' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_iso_code_2 }}</a></th>
          <th><a href=\"{{ sort_iso_code_3 }}\"{% if sort == 'iso_code_3' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_iso_code_3 }}</a></th>
          <th class=\"text-end\">{{ column_action }}</th>
        </tr>
      </thead>
      <tbody>
        {% if countries %}
          {% for country in countries %}
            <tr{% if not country.status %} class=\"table-active opacity-50\"{% endif %}>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ country.country_id }}\" class=\"form-check-input\"/></td>
              <td>{{ country.name }}</td>
              <td>{{ country.iso_code_2 }}</td>
              <td>{{ country.iso_code_3 }}</td>
              <td class=\"text-end\"><a href=\"{{ country.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
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
  </div>
</form>
", "admin/view/template/localisation/country_list.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/admin/view/template/localisation/country_list.twig");
    }
}
