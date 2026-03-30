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

/* admin/view/template/localisation/zone.twig */
class __TwigTemplate_2607e7fd1b0d696da036894e17b13ba0 extends Template
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
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_filter"] ?? null);
        yield "\" onclick=\"\$('#filter-zone').toggleClass('d-none');\" class=\"btn btn-light d-lg-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-zone\" formaction=\"";
        // line 8
        yield ($context["delete"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_delete"] ?? null);
        yield "\" onclick=\"return confirm('";
        yield ($context["text_confirm"] ?? null);
        yield "');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
      </div>
      <h1>";
        // line 10
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div id=\"filter-zone\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 22
        yield ($context["text_filter"] ?? null);
        yield "</div>
          <div class=\"card-body\">
            <form id=\"form-filter\">
              <div class=\"mb-3\">
                <label class=\"form-label\">";
        // line 26
        yield ($context["entry_name"] ?? null);
        yield "</label>
                <input type=\"text\" name=\"filter_name\" value=\"";
        // line 27
        yield ($context["filter_name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label class=\"form-label\">";
        // line 30
        yield ($context["entry_country"] ?? null);
        yield "</label>
                <input type=\"text\" name=\"filter_country\" value=\"";
        // line 31
        yield ($context["filter_country"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_country"] ?? null);
        yield "\" id=\"input-country\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label class=\"form-label\">";
        // line 34
        yield ($context["entry_code"] ?? null);
        yield "</label>
                <input type=\"text\" name=\"filter_code\" value=\"";
        // line 35
        yield ($context["filter_code"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_code"] ?? null);
        yield "\" id=\"input-code\" class=\"form-control\"/>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"style=\"background-color:#1872a2;color:white;\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 38
        yield ($context["button_filter"] ?? null);
        yield "</button>
                <button type=\"button\" id=\"button-reset\" data-bs-toggle=\"tooltip\" title=\"";
        // line 39
        yield ($context["button_reset"] ?? null);
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fa-solid fa-filter-circle-xmark\"></i>
               </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class=\"col-lg-9 col-md-122\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> ";
        // line 49
        yield ($context["text_list"] ?? null);
        yield "</div>
          <div id=\"zone\" class=\"card-body\">";
        // line 50
        yield ($context["list"] ?? null);
        yield "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#zone').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#zone').load(this.href);
});

\$('#button-filter').on('click', function() {
    var url = '';

    var filter_name = \$('#input-name').val();

    if (filter_name) {
        url += '&filter_name=' + encodeURIComponent(filter_name);
    }

    var filter_country = \$('#input-country').val();

    if (filter_country) {
        url += '&filter_country=' + encodeURIComponent(filter_country);
    }

    var filter_code = \$('#input-code').val();

    if (filter_code) {
        url += '&filter_code=' + encodeURIComponent(filter_code);
    }

    window.history.pushState({}, null, 'index.php?route=localisation/zone&user_token=";
        // line 84
        yield ($context["user_token"] ?? null);
        yield "' + url);

    \$('#zone').load('index.php?route=localisation/zone.list&user_token=";
        // line 86
        yield ($context["user_token"] ?? null);
        yield "' + url);
});
\$('#button-reset').on('click', function () {
    \$('#form-filter')[0].reset();

    window.location.href = 'index.php?route=localisation/zone&user_token=";
        // line 91
        yield ($context["user_token"] ?? null);
        yield "';
});
//--></script>
";
        // line 94
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
        return "admin/view/template/localisation/zone.twig";
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
        return array (  219 => 94,  213 => 91,  205 => 86,  200 => 84,  163 => 50,  159 => 49,  146 => 39,  142 => 38,  134 => 35,  130 => 34,  122 => 31,  118 => 30,  110 => 27,  106 => 26,  99 => 22,  90 => 15,  79 => 13,  75 => 12,  70 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_filter }}\" onclick=\"\$('#filter-zone').toggleClass('d-none');\" class=\"btn btn-light d-lg-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <a href=\"{{ add }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-zone\" formaction=\"{{ delete }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_delete }}\" onclick=\"return confirm('{{ text_confirm }}');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
      </div>
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div id=\"filter-zone\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> {{ text_filter }}</div>
          <div class=\"card-body\">
            <form id=\"form-filter\">
              <div class=\"mb-3\">
                <label class=\"form-label\">{{ entry_name }}</label>
                <input type=\"text\" name=\"filter_name\" value=\"{{ filter_name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label class=\"form-label\">{{ entry_country }}</label>
                <input type=\"text\" name=\"filter_country\" value=\"{{ filter_country }}\" placeholder=\"{{ entry_country }}\" id=\"input-country\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label class=\"form-label\">{{ entry_code }}</label>
                <input type=\"text\" name=\"filter_code\" value=\"{{ filter_code }}\" placeholder=\"{{ entry_code }}\" id=\"input-code\" class=\"form-control\"/>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"style=\"background-color:#1872a2;color:white;\"><i class=\"fa-solid fa-filter\"></i> {{ button_filter }}</button>
                <button type=\"button\" id=\"button-reset\" data-bs-toggle=\"tooltip\" title=\"{{ button_reset }}\" class=\"btn btn-outline-secondary\">
                <i class=\"fa-solid fa-filter-circle-xmark\"></i>
               </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class=\"col-lg-9 col-md-122\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> {{ text_list }}</div>
          <div id=\"zone\" class=\"card-body\">{{ list }}</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#zone').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#zone').load(this.href);
});

\$('#button-filter').on('click', function() {
    var url = '';

    var filter_name = \$('#input-name').val();

    if (filter_name) {
        url += '&filter_name=' + encodeURIComponent(filter_name);
    }

    var filter_country = \$('#input-country').val();

    if (filter_country) {
        url += '&filter_country=' + encodeURIComponent(filter_country);
    }

    var filter_code = \$('#input-code').val();

    if (filter_code) {
        url += '&filter_code=' + encodeURIComponent(filter_code);
    }

    window.history.pushState({}, null, 'index.php?route=localisation/zone&user_token={{ user_token }}' + url);

    \$('#zone').load('index.php?route=localisation/zone.list&user_token={{ user_token }}' + url);
});
\$('#button-reset').on('click', function () {
    \$('#form-filter')[0].reset();

    window.location.href = 'index.php?route=localisation/zone&user_token={{ user_token }}';
});
//--></script>
{{ footer }}
", "admin/view/template/localisation/zone.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/admin/view/template/localisation/zone.twig");
    }
}
