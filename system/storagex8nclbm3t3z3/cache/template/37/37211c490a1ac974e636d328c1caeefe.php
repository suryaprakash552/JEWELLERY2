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

/* admin/view/template/customer/customer_group_form.twig */
class __TwigTemplate_abde071036b914b681bd98afd45e4925 extends Template
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
        yield ($context["header"] ?? null);
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-customer-group\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 8
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 18
        yield ($context["text_form"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-customer-group\" action=\"";
        // line 20
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 22
        yield ($context["entry_name"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 25
            yield "                <div class=\"input-group\">
                  <div class=\"input-group-text\"><img src=\"";
            // line 26
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 26);
            yield "\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 26);
            yield "\"/></div>
                  <input type=\"text\" name=\"customer_group_description[";
            // line 27
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 27);
            yield "][name]\" value=\"";
            yield (((($_v0 = ($context["customer_group_description"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 27)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["customer_group_description"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 27)] ?? null) : null), "name", [], "any", false, false, false, 27)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_name"] ?? null);
            yield "\" id=\"input-name-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 27);
            yield "\" class=\"form-control\"/>
                  <div id=\"error-name-";
            // line 28
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 28);
            yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "            </div>
          </div>
          ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 34
            yield "            <div class=\"row mb-3\">
              <label for=\"input-description-";
            // line 35
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 35);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_description"] ?? null);
            yield "</label>
              <div class=\"col-sm-10\">
                <div class=\"input-group\">
                  <div class=\"input-group-text\"><img src=\"";
            // line 38
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 38);
            yield "\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 38);
            yield "\"/></div>
                  <textarea name=\"customer_group_description[";
            // line 39
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 39);
            yield "][description]\" rows=\"5\" placeholder=\"";
            yield ($context["entry_description"] ?? null);
            yield "\" id=\"input-description-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 39);
            yield "\" class=\"form-control\">";
            yield (((($_v2 = ($context["customer_group_description"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 39)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v3 = ($context["customer_group_description"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 39)] ?? null) : null), "description", [], "any", false, false, false, 39)) : (""));
            yield "</textarea>
                </div>
              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 45
        yield ($context["entry_approval"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"approval\" value=\"0\"/>
                <input type=\"checkbox\" name=\"approval\" value=\"1\" id=\"input-approval\" class=\"form-check-input\"";
        // line 49
        if (($context["approval"] ?? null)) {
            yield " checked";
        }
        yield "/>
              </div>
              <div class=\"form-text\">";
        // line 51
        yield ($context["help_approval"] ?? null);
        yield "</div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 55
        yield ($context["entry_sort_order"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" name=\"sort_order\" value=\"";
        // line 57
        yield ($context["sort_order"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_sort_order"] ?? null);
        yield "\" id=\"input-sort-order\" class=\"form-control\"/>
            </div>
          </div>
          <input type=\"hidden\" name=\"customer_group_id\" value=\"";
        // line 60
        yield ($context["customer_group_id"] ?? null);
        yield "\" id=\"input-customer-group-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 66
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/customer/customer_group_form.twig";
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
        return array (  223 => 66,  214 => 60,  206 => 57,  201 => 55,  194 => 51,  187 => 49,  180 => 45,  177 => 44,  160 => 39,  154 => 38,  146 => 35,  143 => 34,  139 => 33,  135 => 31,  126 => 28,  116 => 27,  110 => 26,  107 => 25,  103 => 24,  98 => 22,  93 => 20,  88 => 18,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-customer-group\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_form }}</div>
      <div class=\"card-body\">
        <form id=\"form-customer-group\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label class=\"col-sm-2 col-form-label\">{{ entry_name }}</label>
            <div class=\"col-sm-10\">
              {% for language in languages %}
                <div class=\"input-group\">
                  <div class=\"input-group-text\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/></div>
                  <input type=\"text\" name=\"customer_group_description[{{ language.language_id }}][name]\" value=\"{{ customer_group_description[language.language_id] ? customer_group_description[language.language_id].name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name-{{ language.language_id }}\" class=\"form-control\"/>
                  <div id=\"error-name-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endfor %}
            </div>
          </div>
          {% for language in languages %}
            <div class=\"row mb-3\">
              <label for=\"input-description-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_description }}</label>
              <div class=\"col-sm-10\">
                <div class=\"input-group\">
                  <div class=\"input-group-text\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/></div>
                  <textarea name=\"customer_group_description[{{ language.language_id }}][description]\" rows=\"5\" placeholder=\"{{ entry_description }}\" id=\"input-description-{{ language.language_id }}\" class=\"form-control\">{{ customer_group_description[language.language_id] ? customer_group_description[language.language_id].description }}</textarea>
                </div>
              </div>
            </div>
          {% endfor %}
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">{{ entry_approval }}</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"approval\" value=\"0\"/>
                <input type=\"checkbox\" name=\"approval\" value=\"1\" id=\"input-approval\" class=\"form-check-input\"{% if approval %} checked{% endif %}/>
              </div>
              <div class=\"form-text\">{{ help_approval }}</div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">{{ entry_sort_order }}</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" name=\"sort_order\" value=\"{{ sort_order }}\" placeholder=\"{{ entry_sort_order }}\" id=\"input-sort-order\" class=\"form-control\"/>
            </div>
          </div>
          <input type=\"hidden\" name=\"customer_group_id\" value=\"{{ customer_group_id }}\" id=\"input-customer-group-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
{{ footer }}
", "admin/view/template/customer/customer_group_form.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/admin/view/template/customer/customer_group_form.twig");
    }
}
