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

/* admin/view/template/user/user.twig */
class __TwigTemplate_d08e5d552563eea4a8a7f3e36f15316d extends Template
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
        yield "\" onclick=\"\$('#filter-user').toggleClass('d-none');\" class=\"btn btn-light d-lg-none\">
          <i class=\"fa-solid fa-filter\"></i>
        </button>
        <a href=\"";
        // line 9
        yield ($context["add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_add"] ?? null);
        yield "\" class=\"btn btn-primary\">
          <i class=\"fa-solid fa-plus\"></i>
        </a>
        <button type=\"submit\" form=\"form-user\" formaction=\"";
        // line 12
        yield ($context["delete"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_delete"] ?? null);
        yield "\" onclick=\"return confirm('";
        yield ($context["text_confirm"] ?? null);
        yield "');\" class=\"btn btn-danger\">
          <i class=\"fa-regular fa-trash-can\"></i>
        </button>
      </div> 
      <h1>";
        // line 16
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 19
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 19);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 19);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "      </ol>
    </div>
  </div>

  <div class=\"container-fluid\">

    <!-- FILTER SECTION FIRST (TOP) -->
           <div class=\"row mb-3\">
            <div id=\"filter-user\" class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <form id=\"form-filter\">
                            <div class=\"row\">
                                <div class=\"col-md-2 mb-3\">
                                    <label class=\"form-label\">";
        // line 35
        yield ($context["entry_username"] ?? null);
        yield "</label>
                                    <input type=\"text\" name=\"filter_username\" value=\"";
        // line 36
        yield ($context["filter_username"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_username"] ?? null);
        yield "\" id=\"input-username\" data-oc-target=\"autocomplete-username\" class=\"form-control\" autocomplete=\"off\"/>
                                    <ul id=\"autocomplete-username\" class=\"dropdown-menu\"></ul>
                                </div>
        
                                <div class=\"col-md-2 mb-3\">
                                    <label class=\"form-label\">";
        // line 41
        yield ($context["entry_name"] ?? null);
        yield "</label>
                                    <input type=\"text\" name=\"filter_name\" value=\"";
        // line 42
        yield ($context["filter_name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" data-oc-target=\"autocomplete-name\" class=\"form-control\" autocomplete=\"off\"/>
                                    <ul id=\"autocomplete-name\" class=\"dropdown-menu\"></ul>
                                </div>
        
                                <div class=\"col-md-2 mb-3\">
                                    <label class=\"form-label\">";
        // line 47
        yield ($context["entry_email"] ?? null);
        yield "</label>
                                    <input type=\"text\" name=\"filter_email\" value=\"";
        // line 48
        yield ($context["filter_email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" data-oc-target=\"autocomplete-email\" class=\"form-control\" autocomplete=\"off\"/>
                                    <ul id=\"autocomplete-email\" class=\"dropdown-menu\"></ul>
                                </div>
        
                                <div class=\"col-md-2 mb-3\">
                                    <label for=\"input-user-group\" class=\"form-label\">";
        // line 53
        yield ($context["entry_user_group"] ?? null);
        yield "</label>
                                    <select name=\"filter_user_group_id\" id=\"input-user-group\" class=\"form-select\"style=\"width:100%;\">
                                        <option value=\"\"></option>
                                        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["user_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user_group"]) {
            // line 57
            yield "                                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["user_group"], "user_group_id", [], "any", false, false, false, 57);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user_group"], "user_group_id", [], "any", false, false, false, 57) == ($context["filter_user_group_id"] ?? null))) {
                yield " selected";
            }
            yield ">
                                            ";
            // line 58
            yield CoreExtension::getAttribute($this->env, $this->source, $context["user_group"], "name", [], "any", false, false, false, 58);
            yield "
                                        </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "                                    </select>
                                </div>
        
                                <div class=\"col-md-2 mb-3\">
                                    <label for=\"input-status\" class=\"form-label\">";
        // line 65
        yield ($context["entry_status"] ?? null);
        yield "</label>
                                    <select name=\"filter_status\" id=\"input-status\" class=\"form-select\"style=\"width:100%;\">
                                        <option value=\"\"></option>
                                        <option value=\"1\"";
        // line 68
        if ((($context["filter_status"] ?? null) == "1")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_enabled"] ?? null);
        yield "</option>
                                        <option value=\"0\"";
        // line 69
        if ((($context["filter_status"] ?? null) == "0")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_disabled"] ?? null);
        yield "</option>
                                    </select>
                                </div>
        
                                <div class=\"col-md-2 mb-3\">
                                    <label for=\"input-ip\" class=\"form-label\">";
        // line 74
        yield ($context["entry_ip"] ?? null);
        yield "</label>
                                    <input type=\"text\" name=\"filter_ip\" value=\"";
        // line 75
        yield ($context["filter_ip"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_ip"] ?? null);
        yield "\" id=\"input-ip\" class=\"form-control\"/>
                                </div>
        
                                <div class=\"col-md-2 mb-3 d-flex align-items-end gap-2\">
                                    <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary flex-grow-1\">
                                        <i class=\"fa-solid fa-filter\"></i> ";
        // line 80
        yield ($context["button_filter"] ?? null);
        yield "
                                    </button>
        
                                    <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"";
        // line 83
        yield ($context["button_reset"] ?? null);
        yield "\" class=\"btn btn-outline-secondary\">
                                        <i class=\"fa-solid fa-filter-circle-xmark\"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
  </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <i class=\"fa-solid fa-list\"></i> ";
        // line 98
        yield ($context["text_list"] ?? null);
        yield "
                    </div>
                    <div id=\"user\" class=\"card-body\">";
        // line 100
        yield ($context["list"] ?? null);
        yield "</div>
                </div>
            </div>
        </div>

<script type=\"text/javascript\"><!--
\$(document).ready(function() {
    // Helper to load user list
    function loadUserList(url) {
        \$('#user').load(url);
    }

    // Handle pagination and sorting inside user list
    \$('#user').on('click', 'thead a, .pagination a', function(e) {
        e.preventDefault();
        loadUserList(this.href);
    });

    // Filter button click
    \$('#button-filter').on('click', function(e) {
        e.preventDefault();

        var params = [];

        var filter_username = \$('#input-username').val();
        if (filter_username) params.push('filter_username=' + encodeURIComponent(filter_username));

        var filter_name = \$('#input-name').val();
        if (filter_name) params.push('filter_name=' + encodeURIComponent(filter_name));

        var filter_email = \$('#input-email').val();
        if (filter_email) params.push('filter_email=' + encodeURIComponent(filter_email));

        var filter_user_group_id = \$('#input-user-group').val();
        if (filter_user_group_id !== '') params.push('filter_user_group_id=' + encodeURIComponent(filter_user_group_id));

        var filter_status = \$('#input-status').val();
        if (filter_status !== '') params.push('filter_status=' + encodeURIComponent(filter_status));

        var filter_ip = \$('#input-ip').val();
        if (filter_ip) params.push('filter_ip=' + encodeURIComponent(filter_ip));

        var query = params.length ? '&' + params.join('&') : '';

        // Update the browser URL
        window.history.pushState({}, null, 'index.php?route=user/user&user_token=";
        // line 145
        yield ($context["user_token"] ?? null);
        yield "' + query);

        // Load filtered list
        loadUserList('index.php?route=user/user.list&user_token=";
        // line 148
        yield ($context["user_token"] ?? null);
        yield "' + query);
    });

    // Autocomplete setup
    \$('#input-username').autocomplete({
        'source': function(request, response) {
            \$.ajax({
                url: 'index.php?route=user/user.autocomplete&user_token=";
        // line 155
        yield ($context["user_token"] ?? null);
        yield "&filter_username=' + encodeURIComponent(request),
                dataType: 'json',
                success: function(json) {
                    response(\$.map(json, function(item) {
                        return { label: item['username'], value: item['user_id'] };
                    }));
                }
            });
        },
        'select': function(item) {
            \$('#input-username').val(decodeHTMLEntities(item['label']));
        }
    });

    \$('#input-name').autocomplete({
        'source': function(request, response) {
            \$.ajax({
                url: 'index.php?route=user/user.autocomplete&user_token=";
        // line 172
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
                dataType: 'json',
                success: function(json) {
                    response(\$.map(json, function(item) {
                        return { label: item['name'], value: item['user_id'] };
                    }));
                }
            });
        },
        'select': function(item) {
            \$('#input-name').val(decodeHTMLEntities(item['label']));
        }
    });

    \$('#input-email').autocomplete({
        'source': function(request, response) {
            \$.ajax({
                url: 'index.php?route=user/user.autocomplete&user_token=";
        // line 189
        yield ($context["user_token"] ?? null);
        yield "&filter_email=' + encodeURIComponent(request),
                dataType: 'json',
                success: function(json) {
                    response(\$.map(json, function(item) {
                        return { label: item['email'], value: item['user_id'] };
                    }));
                }
            });
        },
        'select': function(item) {
            \$('#input-email').val(decodeHTMLEntities(item['label']));
        }
    });
});
//--></script>
";
        // line 204
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
        return "admin/view/template/user/user.twig";
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
        return array (  379 => 204,  361 => 189,  341 => 172,  321 => 155,  311 => 148,  305 => 145,  257 => 100,  252 => 98,  234 => 83,  228 => 80,  218 => 75,  214 => 74,  202 => 69,  194 => 68,  188 => 65,  182 => 61,  173 => 58,  164 => 57,  160 => 56,  154 => 53,  144 => 48,  140 => 47,  130 => 42,  126 => 41,  116 => 36,  112 => 35,  96 => 21,  85 => 19,  81 => 18,  76 => 16,  65 => 12,  57 => 9,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_filter }}\" onclick=\"\$('#filter-user').toggleClass('d-none');\" class=\"btn btn-light d-lg-none\">
          <i class=\"fa-solid fa-filter\"></i>
        </button>
        <a href=\"{{ add }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_add }}\" class=\"btn btn-primary\">
          <i class=\"fa-solid fa-plus\"></i>
        </a>
        <button type=\"submit\" form=\"form-user\" formaction=\"{{ delete }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_delete }}\" onclick=\"return confirm('{{ text_confirm }}');\" class=\"btn btn-danger\">
          <i class=\"fa-regular fa-trash-can\"></i>
        </button>
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

    <!-- FILTER SECTION FIRST (TOP) -->
           <div class=\"row mb-3\">
            <div id=\"filter-user\" class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <form id=\"form-filter\">
                            <div class=\"row\">
                                <div class=\"col-md-2 mb-3\">
                                    <label class=\"form-label\">{{ entry_username }}</label>
                                    <input type=\"text\" name=\"filter_username\" value=\"{{ filter_username }}\" placeholder=\"{{ entry_username }}\" id=\"input-username\" data-oc-target=\"autocomplete-username\" class=\"form-control\" autocomplete=\"off\"/>
                                    <ul id=\"autocomplete-username\" class=\"dropdown-menu\"></ul>
                                </div>
        
                                <div class=\"col-md-2 mb-3\">
                                    <label class=\"form-label\">{{ entry_name }}</label>
                                    <input type=\"text\" name=\"filter_name\" value=\"{{ filter_name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name\" data-oc-target=\"autocomplete-name\" class=\"form-control\" autocomplete=\"off\"/>
                                    <ul id=\"autocomplete-name\" class=\"dropdown-menu\"></ul>
                                </div>
        
                                <div class=\"col-md-2 mb-3\">
                                    <label class=\"form-label\">{{ entry_email }}</label>
                                    <input type=\"text\" name=\"filter_email\" value=\"{{ filter_email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" data-oc-target=\"autocomplete-email\" class=\"form-control\" autocomplete=\"off\"/>
                                    <ul id=\"autocomplete-email\" class=\"dropdown-menu\"></ul>
                                </div>
        
                                <div class=\"col-md-2 mb-3\">
                                    <label for=\"input-user-group\" class=\"form-label\">{{ entry_user_group }}</label>
                                    <select name=\"filter_user_group_id\" id=\"input-user-group\" class=\"form-select\"style=\"width:100%;\">
                                        <option value=\"\"></option>
                                        {% for user_group in user_groups %}
                                        <option value=\"{{ user_group.user_group_id }}\"{% if user_group.user_group_id == filter_user_group_id %} selected{% endif %}>
                                            {{ user_group.name }}
                                        </option>
                                        {% endfor %}
                                    </select>
                                </div>
        
                                <div class=\"col-md-2 mb-3\">
                                    <label for=\"input-status\" class=\"form-label\">{{ entry_status }}</label>
                                    <select name=\"filter_status\" id=\"input-status\" class=\"form-select\"style=\"width:100%;\">
                                        <option value=\"\"></option>
                                        <option value=\"1\"{% if filter_status == '1' %} selected{% endif %}>{{ text_enabled }}</option>
                                        <option value=\"0\"{% if filter_status == '0' %} selected{% endif %}>{{ text_disabled }}</option>
                                    </select>
                                </div>
        
                                <div class=\"col-md-2 mb-3\">
                                    <label for=\"input-ip\" class=\"form-label\">{{ entry_ip }}</label>
                                    <input type=\"text\" name=\"filter_ip\" value=\"{{ filter_ip }}\" placeholder=\"{{ entry_ip }}\" id=\"input-ip\" class=\"form-control\"/>
                                </div>
        
                                <div class=\"col-md-2 mb-3 d-flex align-items-end gap-2\">
                                    <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary flex-grow-1\">
                                        <i class=\"fa-solid fa-filter\"></i> {{ button_filter }}
                                    </button>
        
                                    <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"{{ button_reset }}\" class=\"btn btn-outline-secondary\">
                                        <i class=\"fa-solid fa-filter-circle-xmark\"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
  </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <i class=\"fa-solid fa-list\"></i> {{ text_list }}
                    </div>
                    <div id=\"user\" class=\"card-body\">{{ list }}</div>
                </div>
            </div>
        </div>

<script type=\"text/javascript\"><!--
\$(document).ready(function() {
    // Helper to load user list
    function loadUserList(url) {
        \$('#user').load(url);
    }

    // Handle pagination and sorting inside user list
    \$('#user').on('click', 'thead a, .pagination a', function(e) {
        e.preventDefault();
        loadUserList(this.href);
    });

    // Filter button click
    \$('#button-filter').on('click', function(e) {
        e.preventDefault();

        var params = [];

        var filter_username = \$('#input-username').val();
        if (filter_username) params.push('filter_username=' + encodeURIComponent(filter_username));

        var filter_name = \$('#input-name').val();
        if (filter_name) params.push('filter_name=' + encodeURIComponent(filter_name));

        var filter_email = \$('#input-email').val();
        if (filter_email) params.push('filter_email=' + encodeURIComponent(filter_email));

        var filter_user_group_id = \$('#input-user-group').val();
        if (filter_user_group_id !== '') params.push('filter_user_group_id=' + encodeURIComponent(filter_user_group_id));

        var filter_status = \$('#input-status').val();
        if (filter_status !== '') params.push('filter_status=' + encodeURIComponent(filter_status));

        var filter_ip = \$('#input-ip').val();
        if (filter_ip) params.push('filter_ip=' + encodeURIComponent(filter_ip));

        var query = params.length ? '&' + params.join('&') : '';

        // Update the browser URL
        window.history.pushState({}, null, 'index.php?route=user/user&user_token={{ user_token }}' + query);

        // Load filtered list
        loadUserList('index.php?route=user/user.list&user_token={{ user_token }}' + query);
    });

    // Autocomplete setup
    \$('#input-username').autocomplete({
        'source': function(request, response) {
            \$.ajax({
                url: 'index.php?route=user/user.autocomplete&user_token={{ user_token }}&filter_username=' + encodeURIComponent(request),
                dataType: 'json',
                success: function(json) {
                    response(\$.map(json, function(item) {
                        return { label: item['username'], value: item['user_id'] };
                    }));
                }
            });
        },
        'select': function(item) {
            \$('#input-username').val(decodeHTMLEntities(item['label']));
        }
    });

    \$('#input-name').autocomplete({
        'source': function(request, response) {
            \$.ajax({
                url: 'index.php?route=user/user.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
                dataType: 'json',
                success: function(json) {
                    response(\$.map(json, function(item) {
                        return { label: item['name'], value: item['user_id'] };
                    }));
                }
            });
        },
        'select': function(item) {
            \$('#input-name').val(decodeHTMLEntities(item['label']));
        }
    });

    \$('#input-email').autocomplete({
        'source': function(request, response) {
            \$.ajax({
                url: 'index.php?route=user/user.autocomplete&user_token={{ user_token }}&filter_email=' + encodeURIComponent(request),
                dataType: 'json',
                success: function(json) {
                    response(\$.map(json, function(item) {
                        return { label: item['email'], value: item['user_id'] };
                    }));
                }
            });
        },
        'select': function(item) {
            \$('#input-email').val(decodeHTMLEntities(item['label']));
        }
    });
});
//--></script>
{{ footer }}
", "admin/view/template/user/user.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/admin/view/template/user/user.twig");
    }
}
