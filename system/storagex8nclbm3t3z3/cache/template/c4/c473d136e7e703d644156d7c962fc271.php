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

/* admin/view/template/catalog/product_list.twig */
class __TwigTemplate_452cba9ca67af323dcae6257ed50c110 extends Template
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
        yield "<form id=\"form-product\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#product\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th class=\"text-center\">";
        // line 7
        yield ($context["column_image"] ?? null);
        yield "</th>
          <th class=\"text-center\">Type</th>
            <th class=\"text-center\"><a href=\"";
        // line 9
        yield ($context["sort_box_id"] ?? null);
        yield "\" ";
        if ((($context["sort"] ?? null) == "p.box_id")) {
            yield "class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">Box ID</th>
            <th class=\"text-center\">Rack</th>
          <th><a href=\"";
        // line 11
        yield ($context["sort_name"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "pd.name")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_name"] ?? null);
        yield "</a></th>
          <th class=\"d-none d-lg-table-cell\"><a href=\"";
        // line 12
        yield ($context["sort_model"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "p.model")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_model"] ?? null);
        yield "</a></th>
          <th class=\"text-end\"><a href=\"";
        // line 13
        yield ($context["sort_price"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "p.price")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_price"] ?? null);
        yield "</a></th>
          <th class=\"text-end\"><a href=\"";
        // line 14
        yield ($context["sort_quantity"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "p.quantity")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_quantity"] ?? null);
        yield "</a></th>
          <th class=\"text-end\">";
        // line 15
        yield ($context["column_action"] ?? null);
        yield "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 19
        if (($context["products"] ?? null)) {
            // line 20
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 21
                yield "            <tr class=\"";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "variant", [], "any", false, false, false, 21)) {
                    yield "table-warning";
                }
                yield " ";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 21)) {
                    yield "opacity-50";
                }
                yield "\">
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 22
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 22);
                yield "\" class=\"form-check-input\"/></td>
              <td class=\"text-center\"><img src=\"";
                // line 23
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 23);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 23);
                yield "\" class=\"img-thumbnail\"/></td>
              <td class=\"text-center\">
              ";
                // line 25
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "upc", [], "any", false, false, false, 25)) {
                    // line 26
                    yield "                <span class=\"badge bg-primary\">BOX</span>
              ";
                } else {
                    // line 28
                    yield "                <span class=\"badge bg-secondary\">UNIT</span>
              ";
                }
                // line 30
                yield "            </td>
            <td class=\"text-center\">
                ";
                // line 32
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "upc", [], "any", false, false, false, 32)) {
                    // line 33
                    yield "                    ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 33);
                    yield "
                ";
                } else {
                    // line 35
                    yield "                    ";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "box_id", [], "any", false, false, false, 35)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "box_id", [], "any", false, false, false, 35)) : (("U" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 35))));
                    yield "
                ";
                }
                // line 37
                yield "            </td>
            
            <td class=\"text-center\">
              ";
                // line 40
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rack_code", [], "any", false, false, false, 40)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rack_code", [], "any", false, false, false, 40)) : ("-"));
                yield "
            </td>
              <td>";
                // line 42
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 42);
                yield "</td>
              <td class=\"d-none d-lg-table-cell\">";
                // line 43
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 43);
                yield "</td>
              <td class=\"text-end\">
                ";
                // line 45
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 45)) {
                    yield "<span style=\"text-decoration: line-through;\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "wholesale_price", [], "any", false, false, false, 45);
                    yield "</span>
                  <br/>
                  <div class=\"text-danger\">";
                    // line 47
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 47);
                    yield "</div>
                ";
                } else {
                    // line 49
                    yield "                  ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "wholesale_price", [], "any", false, false, false, 49);
                    yield "
                ";
                }
                // line 50
                yield "</td>
              <td class=\"text-end\">
                ";
                // line 52
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "pos_quentity", [], "any", false, false, false, 52) <= 0)) {
                    // line 53
                    yield "                  <span class=\"badge bg-warning\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "pos_quentity", [], "any", false, false, false, 53);
                    yield "</span>
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 54
$context["product"], "pos_quentity", [], "any", false, false, false, 54) <= 5)) {
                    // line 55
                    yield "                  <span class=\"badge bg-danger\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "pos_quentity", [], "any", false, false, false, 55);
                    yield "</span>
                ";
                } else {
                    // line 57
                    yield "                  <span class=\"badge bg-success\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "pos_quentity", [], "any", false, false, false, 57);
                    yield "</span>
                ";
                }
                // line 58
                yield "</td>
              <td class=\"text-end\">
                ";
                // line 60
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "variant", [], "any", false, false, false, 60)) {
                    // line 61
                    yield "                  <div class=\"btn-group\">
                    <a href=\"";
                    // line 62
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 62);
                    yield "\" data-bs-toggle=\"tooltip\" title=\"";
                    yield ($context["button_edit"] ?? null);
                    yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a>
                    <button type=\"button\" class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\" data-bs-toggle=\"dropdown\"><i class=\"fa-solid fa-caret-down\"></i></button>
                    <div class=\"dropdown-menu dropdown-menu-end\"><a href=\"";
                    // line 64
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "variant", [], "any", false, false, false, 64);
                    yield "\" class=\"dropdown-item\"><i class=\"fa-solid fa-plus\"></i> ";
                    yield ($context["text_variant_add"] ?? null);
                    yield "</a></div>
                  </div>
                ";
                } else {
                    // line 67
                    yield "                  <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 67);
                    yield "\" data-bs-toggle=\"tooltip\" title=\"";
                    yield ($context["button_edit"] ?? null);
                    yield "\" class=\"btn btn-warning\"><i class=\"fa-solid fa-pencil\"></i></a>
                ";
                }
                // line 68
                yield "</td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            yield "        ";
        } else {
            // line 72
            yield "          <tr>
            <td class=\"text-center\" colspan=\"7\">";
            // line 73
            yield ($context["text_no_results"] ?? null);
            yield "</td>
          </tr>
        ";
        }
        // line 76
        yield "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 80
        yield ($context["pagination"] ?? null);
        yield "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 81
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
        return "admin/view/template/catalog/product_list.twig";
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
        return array (  304 => 81,  300 => 80,  294 => 76,  288 => 73,  285 => 72,  282 => 71,  274 => 68,  266 => 67,  258 => 64,  251 => 62,  248 => 61,  246 => 60,  242 => 58,  236 => 57,  230 => 55,  228 => 54,  223 => 53,  221 => 52,  217 => 50,  211 => 49,  206 => 47,  199 => 45,  194 => 43,  190 => 42,  185 => 40,  180 => 37,  174 => 35,  168 => 33,  166 => 32,  162 => 30,  158 => 28,  154 => 26,  152 => 25,  145 => 23,  141 => 22,  130 => 21,  125 => 20,  123 => 19,  116 => 15,  104 => 14,  92 => 13,  80 => 12,  68 => 11,  57 => 9,  52 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-product\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#product\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th class=\"text-center\">{{ column_image }}</th>
          <th class=\"text-center\">Type</th>
            <th class=\"text-center\"><a href=\"{{ sort_box_id }}\" {% if sort == 'p.box_id' %}class=\"{{ order|lower }}\"{% endif %}>Box ID</th>
            <th class=\"text-center\">Rack</th>
          <th><a href=\"{{ sort_name }}\"{% if sort == 'pd.name' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_name }}</a></th>
          <th class=\"d-none d-lg-table-cell\"><a href=\"{{ sort_model }}\"{% if sort == 'p.model' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_model }}</a></th>
          <th class=\"text-end\"><a href=\"{{ sort_price }}\"{% if sort == 'p.price' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_price }}</a></th>
          <th class=\"text-end\"><a href=\"{{ sort_quantity }}\"{% if sort == 'p.quantity' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_quantity }}</a></th>
          <th class=\"text-end\">{{ column_action }}</th>
        </tr>
      </thead>
      <tbody>
        {% if products %}
          {% for product in products %}
            <tr class=\"{% if not product.variant %}table-warning{% endif %} {% if not product.status %}opacity-50{% endif %}\">
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ product.product_id }}\" class=\"form-check-input\"/></td>
              <td class=\"text-center\"><img src=\"{{ product.image }}\" alt=\"{{ product.name }}\" class=\"img-thumbnail\"/></td>
              <td class=\"text-center\">
              {% if product.upc %}
                <span class=\"badge bg-primary\">BOX</span>
              {% else %}
                <span class=\"badge bg-secondary\">UNIT</span>
              {% endif %}
            </td>
            <td class=\"text-center\">
                {% if product.upc %}
                    {{ product.product_id }}
                {% else %}
                    {{ product.box_id ?: 'U'~product.product_id }}
                {% endif %}
            </td>
            
            <td class=\"text-center\">
              {{ product.rack_code ?: '-' }}
            </td>
              <td>{{ product.name }}</td>
              <td class=\"d-none d-lg-table-cell\">{{ product.model }}</td>
              <td class=\"text-end\">
                {% if product.special %}<span style=\"text-decoration: line-through;\">{{ product.wholesale_price }}</span>
                  <br/>
                  <div class=\"text-danger\">{{ product.special }}</div>
                {% else %}
                  {{ product.wholesale_price }}
                {% endif %}</td>
              <td class=\"text-end\">
                {% if product.pos_quentity <= 0 %}
                  <span class=\"badge bg-warning\">{{ product.pos_quentity }}</span>
                {% elseif product.pos_quentity <= 5 %}
                  <span class=\"badge bg-danger\">{{ product.pos_quentity }}</span>
                {% else %}
                  <span class=\"badge bg-success\">{{ product.pos_quentity }}</span>
                {% endif %}</td>
              <td class=\"text-end\">
                {% if product.variant %}
                  <div class=\"btn-group\">
                    <a href=\"{{ product.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a>
                    <button type=\"button\" class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\" data-bs-toggle=\"dropdown\"><i class=\"fa-solid fa-caret-down\"></i></button>
                    <div class=\"dropdown-menu dropdown-menu-end\"><a href=\"{{ product.variant }}\" class=\"dropdown-item\"><i class=\"fa-solid fa-plus\"></i> {{ text_variant_add }}</a></div>
                  </div>
                {% else %}
                  <a href=\"{{ product.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-warning\"><i class=\"fa-solid fa-pencil\"></i></a>
                {% endif %}</td>
            </tr>
          {% endfor %}
        {% else %}
          <tr>
            <td class=\"text-center\" colspan=\"7\">{{ text_no_results }}</td>
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
", "admin/view/template/catalog/product_list.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/admin/view/template/catalog/product_list.twig");
    }
}
