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

/* admin/view/template/localisation/country_form.twig */
class __TwigTemplate_1022a389bf7cadc08561f7b1c9af54b3 extends Template
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
      <div class=\"float-end\"><button type=\"submit\" form=\"form-country\" formaction=\"";
        // line 5
        yield ($context["save"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 6
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 7
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 17
        yield ($context["text_form"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-country\" action=\"";
        // line 19
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 21
        yield ($context["entry_name"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 24
            yield "                <div class=\"input-group\">
                  <div class=\"input-group-text\"><img src=\"";
            // line 25
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 25);
            yield "\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 25);
            yield "\" alt=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 25);
            yield "\"/></div>
                  <input type=\"text\" name=\"country_description[";
            // line 26
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 26);
            yield "][name]\" value=\"";
            yield (((($_v0 = ($context["country_description"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 26)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["country_description"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 26)] ?? null) : null), "name", [], "any", false, false, false, 26)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_name"] ?? null);
            yield "\" id=\"input-name-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 26);
            yield "\" class=\"form-control\"/>
                </div>
                <div id=\"error-name-";
            // line 28
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 28);
            yield "\" class=\"invalid-feedback\"></div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-iso-code-2\" class=\"col-sm-2 col-form-label\">";
        // line 33
        yield ($context["entry_iso_code_2"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"iso_code_2\" value=\"";
        // line 35
        yield ($context["iso_code_2"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_iso_code_2"] ?? null);
        yield "\" id=\"input-iso-code-2\" class=\"form-control\"/>
              <div id=\"error-iso-code-2\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-iso-code-3\" class=\"col-sm-2 col-form-label\">";
        // line 40
        yield ($context["entry_iso_code_3"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"iso_code_3\" value=\"";
        // line 42
        yield ($context["iso_code_3"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_iso_code_3"] ?? null);
        yield "\" id=\"input-iso-code-3\" class=\"form-control\"/>
              <div id=\"error-iso-code-3\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-address-format\" class=\"col-sm-2 col-form-label\">";
        // line 47
        yield ($context["entry_address_format"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"address_format_id\" id=\"input-address-format\" class=\"form-select\">
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["address_formats"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address_format"]) {
            // line 51
            yield "                  <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address_format"], "address_format_id", [], "any", false, false, false, 51);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["address_format"], "address_format_id", [], "any", false, false, false, 51) == ($context["address_format_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address_format"], "name", [], "any", false, false, false, 51);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['address_format'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 57
        yield ($context["entry_postcode_required"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"postcode_required\" value=\"0\"/> <input type=\"checkbox\" name=\"postcode_required\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 60
        if (($context["postcode_required"] ?? null)) {
            yield " checked";
        }
        yield "/>
              </div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 65
        yield ($context["entry_status"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"status\" value=\"0\"/> <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 68
        if (($context["status"] ?? null)) {
            yield " checked";
        }
        yield "/>
              </div>
            </div>
          </div>


          <input type=\"hidden\" name=\"country_id\" value=\"";
        // line 74
        yield ($context["country_id"] ?? null);
        yield "\" id=\"input-country-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 80
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
        return "admin/view/template/localisation/country_form.twig";
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
        return array (  246 => 80,  237 => 74,  226 => 68,  220 => 65,  210 => 60,  204 => 57,  198 => 53,  183 => 51,  179 => 50,  173 => 47,  163 => 42,  158 => 40,  148 => 35,  143 => 33,  138 => 30,  130 => 28,  119 => 26,  111 => 25,  108 => 24,  104 => 23,  99 => 21,  94 => 19,  89 => 17,  82 => 12,  71 => 10,  67 => 9,  62 => 7,  56 => 6,  50 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\"><button type=\"submit\" form=\"form-country\" formaction=\"{{ save }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
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
        <form id=\"form-country\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label class=\"col-sm-2 col-form-label\">{{ entry_name }}</label>
            <div class=\"col-sm-10\">
              {% for language in languages %}
                <div class=\"input-group\">
                  <div class=\"input-group-text\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\" alt=\"{{ language.name }}\"/></div>
                  <input type=\"text\" name=\"country_description[{{ language.language_id }}][name]\" value=\"{{ country_description[language.language_id] ? country_description[language.language_id].name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name-{{ language.language_id }}\" class=\"form-control\"/>
                </div>
                <div id=\"error-name-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
              {% endfor %}
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-iso-code-2\" class=\"col-sm-2 col-form-label\">{{ entry_iso_code_2 }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"iso_code_2\" value=\"{{ iso_code_2 }}\" placeholder=\"{{ entry_iso_code_2 }}\" id=\"input-iso-code-2\" class=\"form-control\"/>
              <div id=\"error-iso-code-2\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-iso-code-3\" class=\"col-sm-2 col-form-label\">{{ entry_iso_code_3 }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"iso_code_3\" value=\"{{ iso_code_3 }}\" placeholder=\"{{ entry_iso_code_3 }}\" id=\"input-iso-code-3\" class=\"form-control\"/>
              <div id=\"error-iso-code-3\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-address-format\" class=\"col-sm-2 col-form-label\">{{ entry_address_format }}</label>
            <div class=\"col-sm-10\">
              <select name=\"address_format_id\" id=\"input-address-format\" class=\"form-select\">
                {% for address_format in address_formats %}
                  <option value=\"{{ address_format.address_format_id }}\"{% if address_format.address_format_id == address_format_id %} selected{% endif %}>{{ address_format.name }}</option>
                {% endfor %}
              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">{{ entry_postcode_required }}</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"postcode_required\" value=\"0\"/> <input type=\"checkbox\" name=\"postcode_required\" value=\"1\" id=\"input-status\" class=\"form-check-input\"{% if postcode_required %} checked{% endif %}/>
              </div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">{{ entry_status }}</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"status\" value=\"0\"/> <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"{% if status %} checked{% endif %}/>
              </div>
            </div>
          </div>


          <input type=\"hidden\" name=\"country_id\" value=\"{{ country_id }}\" id=\"input-country-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
{{ footer }}
", "admin/view/template/localisation/country_form.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/admin/view/template/localisation/country_form.twig");
    }
}
