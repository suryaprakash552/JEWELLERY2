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

/* admin/view/template/catalog/category_list.twig */
class __TwigTemplate_c288e9e48427113ba3d5165c707357a0 extends Template
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
        yield "<form id=\"form-category\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#category\">
    <div class=\"card mb-3\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th class=\"text-center col-1\">";
        // line 8
        yield ($context["column_image"] ?? null);
        yield "</th>
          <th><a href=\"";
        // line 9
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
          ";
        // line 11
        yield "          <th class=\"text-end col-1\">";
        yield ($context["column_action"] ?? null);
        yield "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 15
        if (($context["categories"] ?? null)) {
            // line 16
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 17
                yield "            <tr";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["category"], "status", [], "any", false, false, false, 17)) {
                    yield " class=\"table-active opacity-50\"";
                }
                yield ">
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 18);
                yield "\" class=\"form-check-input\"/></td>
              <td class=\"text-center\"><img src=\"";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 19);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 19);
                yield "\" class=\"img-thumbnail\"/></td>
              <td>";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 20);
                yield "</td>
              ";
                // line 22
                yield "              <td class=\"text-end\"><a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "edit", [], "any", false, false, false, 22);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            yield "        ";
        } else {
            // line 26
            yield "          <tr>
            <td class=\"text-center\" colspan=\"5\">";
            // line 27
            yield ($context["text_no_results"] ?? null);
            yield "</td>
          </tr>
        ";
        }
        // line 30
        yield "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 34
        yield ($context["pagination"] ?? null);
        yield "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 35
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
        return "admin/view/template/catalog/category_list.twig";
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
        return array (  139 => 35,  135 => 34,  129 => 30,  123 => 27,  120 => 26,  117 => 25,  105 => 22,  101 => 20,  95 => 19,  91 => 18,  84 => 17,  79 => 16,  77 => 15,  69 => 11,  57 => 9,  53 => 8,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-category\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#category\">
    <div class=\"card mb-3\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th class=\"text-center col-1\">{{ column_image }}</th>
          <th><a href=\"{{ sort_name }}\"{% if sort == 'name' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_name }}</a></th>
          {#<th class=\"text-end\"><a href=\"{{ sort_sort_order }}\"{% if sort == 'sort_order' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_sort_order }}</a></th>#}
          <th class=\"text-end col-1\">{{ column_action }}</th>
        </tr>
      </thead>
      <tbody>
        {% if categories %}
          {% for category in categories %}
            <tr{% if not category.status %} class=\"table-active opacity-50\"{% endif %}>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ category.category_id }}\" class=\"form-check-input\"/></td>
              <td class=\"text-center\"><img src=\"{{ category.image }}\" alt=\"{{ category.name }}\" class=\"img-thumbnail\"/></td>
              <td>{{ category.name }}</td>
              {#<td class=\"text-end\">{{ category.sort_order }}</td>#}
              <td class=\"text-end\"><a href=\"{{ category.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
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

", "admin/view/template/catalog/category_list.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/admin/view/template/catalog/category_list.twig");
    }
}
