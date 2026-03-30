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

/* admin/view/template/user/user_group_list.twig */
class __TwigTemplate_45ee2de6af1ed63b923930a73fc67dc5 extends Template
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
        yield "<form id=\"form-user-group\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#user-group\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr align=\"center\">
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
          <th align=\"center\">";
        // line 8
        yield ($context["column_action"] ?? null);
        yield "</th>
        </tr>
      </thead>
      <tbody align=\"center\">
        ";
        // line 12
        if (($context["user_groups"] ?? null)) {
            // line 13
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["user_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user_group"]) {
                // line 14
                yield "            <tr align=\"center\">
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 15
                yield CoreExtension::getAttribute($this->env, $this->source, $context["user_group"], "user_group_id", [], "any", false, false, false, 15);
                yield "\" class=\"form-check-input\"/></td>
              <td>";
                // line 16
                yield CoreExtension::getAttribute($this->env, $this->source, $context["user_group"], "name", [], "any", false, false, false, 16);
                yield "</td>
              <td><a href=\"";
                // line 17
                yield CoreExtension::getAttribute($this->env, $this->source, $context["user_group"], "edit", [], "any", false, false, false, 17);
                yield "\" align=\"center\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['user_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "        ";
        } else {
            // line 21
            yield "          <tr>
            <td class=\"text-center\" colspan=\"3\">";
            // line 22
            yield ($context["text_no_results"] ?? null);
            yield "</td>
          </tr>
        ";
        }
        // line 25
        yield "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-2 text-start\">";
        // line 29
        yield ($context["pagination"] ?? null);
        yield "</div>
    <div class=\"col-sm-6 text-end\"style=\"margin-left:280px\">";
        // line 30
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
        return "admin/view/template/user/user_group_list.twig";
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
        return array (  122 => 30,  118 => 29,  112 => 25,  106 => 22,  103 => 21,  100 => 20,  89 => 17,  85 => 16,  81 => 15,  78 => 14,  73 => 13,  71 => 12,  64 => 8,  52 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-user-group\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#user-group\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr align=\"center\">
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th><a href=\"{{ sort_name }}\"{% if sort == 'name' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_name }}</a></th>
          <th align=\"center\">{{ column_action }}</th>
        </tr>
      </thead>
      <tbody align=\"center\">
        {% if user_groups %}
          {% for user_group in user_groups %}
            <tr align=\"center\">
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ user_group.user_group_id }}\" class=\"form-check-input\"/></td>
              <td>{{ user_group.name }}</td>
              <td><a href=\"{{ user_group.edit }}\" align=\"center\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          {% endfor %}
        {% else %}
          <tr>
            <td class=\"text-center\" colspan=\"3\">{{ text_no_results }}</td>
          </tr>
        {% endif %}
      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-2 text-start\">{{ pagination }}</div>
    <div class=\"col-sm-6 text-end\"style=\"margin-left:280px\">{{ results }}</div>
  </div>
</form>
", "admin/view/template/user/user_group_list.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/admin/view/template/user/user_group_list.twig");
    }
}
