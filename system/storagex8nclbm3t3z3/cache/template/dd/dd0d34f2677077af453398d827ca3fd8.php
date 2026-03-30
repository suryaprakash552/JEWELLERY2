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

/* admin/view/template/localisation/geo_zone_form.twig */
class __TwigTemplate_32b70d3aeff21c0f20395deeceed016f extends Template
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
        <button type=\"submit\" form=\"form-geo-zone\" formaction=\"";
        // line 6
        yield ($context["save"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
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
        <form id=\"form-geo-zone\" action=\"";
        // line 20
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 22
        yield ($context["entry_name"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 24
        yield ($context["name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\"/>
              <div id=\"error-name\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-description\" class=\"col-sm-2 col-form-label\">";
        // line 29
        yield ($context["entry_description"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"description\" value=\"";
        // line 31
        yield ($context["description"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_description"] ?? null);
        yield "\" id=\"input-description\" class=\"form-control\"/>
              <div id=\"error-description\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <fieldset>
            <legend>";
        // line 36
        yield ($context["text_geo_zone"] ?? null);
        yield "</legend>
            <table id=\"zone-to-geo-zone\" class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <th>";
        // line 40
        yield ($context["entry_country"] ?? null);
        yield "</th>
                  <th>";
        // line 41
        yield ($context["entry_zone"] ?? null);
        yield "</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 46
        $context["zone_to_geo_zone_row"] = 0;
        // line 47
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["zone_to_geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["zone_to_geo_zone"]) {
            // line 48
            yield "                  <tr id=\"zone-to-geo-zone-row-";
            yield ($context["zone_to_geo_zone_row"] ?? null);
            yield "\">
                    <td><select name=\"zone_to_geo_zone[";
            // line 49
            yield ($context["zone_to_geo_zone_row"] ?? null);
            yield "][country_id]\" class=\"form-select\" data-zone-to-geo-zone-row=\"";
            yield ($context["zone_to_geo_zone_row"] ?? null);
            yield "\" data-zone-id=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["zone_to_geo_zone"], "zone_id", [], "any", false, false, false, 49);
            yield "\" disabled>
                        ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 51
                yield "                          <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 51);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 51) == CoreExtension::getAttribute($this->env, $this->source, $context["zone_to_geo_zone"], "country_id", [], "any", false, false, false, 51))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 51);
                yield "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['country'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "                      </select></td>
                    <td><select name=\"zone_to_geo_zone[";
            // line 54
            yield ($context["zone_to_geo_zone_row"] ?? null);
            yield "][zone_id]\" class=\"form-select\" disabled></select></td>
                    <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#zone-to-geo-zone-row-";
            // line 55
            yield ($context["zone_to_geo_zone_row"] ?? null);
            yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            // line 57
            $context["zone_to_geo_zone_row"] = (($context["zone_to_geo_zone_row"] ?? null) + 1);
            // line 58
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['zone_to_geo_zone'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"2\"></td>
                  <td class=\"text-end\"><button type=\"button\" id=\"button-geo-zone\" data-bs-toggle=\"tooltip\" title=\"";
        // line 63
        yield ($context["button_geo_zone_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
          <input type=\"hidden\" name=\"geo_zone_id\" value=\"";
        // line 68
        yield ($context["geo_zone_id"] ?? null);
        yield "\" id=\"input-geo-zone-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
var zone_to_geo_zone_row = ";
        // line 75
        yield ($context["zone_to_geo_zone_row"] ?? null);
        yield ";

\$('#button-geo-zone').on('click', function() {
    html = '<tr id=\"zone-to-geo-zone-row-' + zone_to_geo_zone_row + '\">';
    html += '  <td><select name=\"zone_to_geo_zone[' + zone_to_geo_zone_row + '][country_id]\" class=\"form-select\" data-zone-to-geo-zone-row=\"' + zone_to_geo_zone_row + '\" disabled>';
  ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 81
            yield "    html += '    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 81);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 81), "js");
            yield "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['country'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        yield "    html += '  </select></td>';
    html += '  <td><select name=\"zone_to_geo_zone[' + zone_to_geo_zone_row + '][zone_id]\" class=\"form-select\" disabled><option value=\"0\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_all_zones"] ?? null), "js");
        yield "</option></select></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#zone-to-geo-zone-row-' + zone_to_geo_zone_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#zone-to-geo-zone tbody').append(html);

    \$('select[name=\\'zone_to_geo_zone[' + zone_to_geo_zone_row + '][country_id]\\']').trigger('change');

    zone_to_geo_zone_row++;
});

var zone = [];

\$('#zone-to-geo-zone').on('change', 'select[name\$=\\'[country_id]\\']', function() {
    var element = this;

    \$(element).prop('disabled', true);

    \$('select[name=\\'zone_to_geo_zone[' + \$(element).attr('data-zone-to-geo-zone-row') + '][zone_id]\\']').prop('disabled', false);

    if (!zone[\$(element).val()]) {
        \$.ajax({
            url: 'index.php?route=localisation/country.country&user_token=";
        // line 106
        yield ($context["user_token"] ?? null);
        yield "&country_id=' + \$(element).val(),
            dataType: 'json',
            beforeSend: function() {
                \$('button[form=\\'form-geo-zone\\']').prop('disabled', true);
            },
            complete: function() {
                \$('button[form=\\'form-geo-zone\\']').prop('disabled', false);
            },
            success: function(json) {
                zone[\$(element).val()] = json;

                html = '<option value=\"0\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_all_zones"] ?? null), "js");
        yield "</option>';

                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == \$(element).attr('data-zone-id')) {
                        html += ' selected';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }

                \$('#zone-to-geo-zone select[name=\\'zone_to_geo_zone[' + \$(element).attr('data-zone-to-geo-zone-row') + '][zone_id]\\']').html(html);

                \$('#zone-to-geo-zone select[name=\\'zone_to_geo_zone[' + \$(element).attr('data-zone-to-geo-zone-row') + '][zone_id]\\']').prop('disabled', false);

                \$(element).prop('disabled', false);

                \$('#zone-to-geo-zone select[name\$=\\'[country_id]\\']:disabled:first').trigger('change');
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    } else {
        html = '<option value=\"0\">";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_all_zones"] ?? null), "js");
        yield "</option>';

        for (i = 0; i < zone[\$(element).val()]['zone'].length; i++) {
            html += '<option value=\"' + zone[element.value]['zone'][i]['zone_id'] + '\"';

            if (zone[\$(element).val()]['zone'][i]['zone_id'] == \$(element).attr('data-zone-id')) {
                html += ' selected';
            }

            html += '>' + zone[\$(element).val()]['zone'][i]['name'] + '</option>';
        }

        \$('#zone-to-geo-zone select[name=\\'zone_to_geo_zone[' + \$(element).attr('data-zone-to-geo-zone-row') + '][zone_id]\\']').html(html);

        \$(element).prop('disabled', false);

        \$('#zone-to-geo-zone select[name\$=\\'[country_id]\\']:disabled:first').trigger('change');
    }
});

\$('#zone-to-geo-zone select[name\$=\\'[country_id]\\']:first').trigger('change');
//--></script>
";
        // line 164
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
        return "admin/view/template/localisation/geo_zone_form.twig";
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
        return array (  355 => 164,  330 => 142,  302 => 117,  288 => 106,  264 => 85,  260 => 84,  257 => 83,  246 => 81,  242 => 80,  234 => 75,  224 => 68,  216 => 63,  210 => 59,  204 => 58,  202 => 57,  195 => 55,  191 => 54,  188 => 53,  173 => 51,  169 => 50,  161 => 49,  156 => 48,  151 => 47,  149 => 46,  141 => 41,  137 => 40,  130 => 36,  120 => 31,  115 => 29,  105 => 24,  100 => 22,  95 => 20,  90 => 18,  83 => 13,  72 => 11,  68 => 10,  63 => 8,  57 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-geo-zone\" formaction=\"{{ save }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
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
        <form id=\"form-geo-zone\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label for=\"input-name\" class=\"col-sm-2 col-form-label\">{{ entry_name }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"{{ name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name\" class=\"form-control\"/>
              <div id=\"error-name\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-description\" class=\"col-sm-2 col-form-label\">{{ entry_description }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"description\" value=\"{{ description }}\" placeholder=\"{{ entry_description }}\" id=\"input-description\" class=\"form-control\"/>
              <div id=\"error-description\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <fieldset>
            <legend>{{ text_geo_zone }}</legend>
            <table id=\"zone-to-geo-zone\" class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <th>{{ entry_country }}</th>
                  <th>{{ entry_zone }}</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                {% set zone_to_geo_zone_row = 0 %}
                {% for zone_to_geo_zone in zone_to_geo_zones %}
                  <tr id=\"zone-to-geo-zone-row-{{ zone_to_geo_zone_row }}\">
                    <td><select name=\"zone_to_geo_zone[{{ zone_to_geo_zone_row }}][country_id]\" class=\"form-select\" data-zone-to-geo-zone-row=\"{{ zone_to_geo_zone_row }}\" data-zone-id=\"{{ zone_to_geo_zone.zone_id }}\" disabled>
                        {% for country in countries %}
                          <option value=\"{{ country.country_id }}\"{% if country.country_id == zone_to_geo_zone.country_id %} selected{% endif %}>{{ country.name }}</option>
                        {% endfor %}
                      </select></td>
                    <td><select name=\"zone_to_geo_zone[{{ zone_to_geo_zone_row }}][zone_id]\" class=\"form-select\" disabled></select></td>
                    <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#zone-to-geo-zone-row-{{ zone_to_geo_zone_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                  </tr>
                  {% set zone_to_geo_zone_row = zone_to_geo_zone_row + 1 %}
                {% endfor %}
              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"2\"></td>
                  <td class=\"text-end\"><button type=\"button\" id=\"button-geo-zone\" data-bs-toggle=\"tooltip\" title=\"{{ button_geo_zone_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
          <input type=\"hidden\" name=\"geo_zone_id\" value=\"{{ geo_zone_id }}\" id=\"input-geo-zone-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
var zone_to_geo_zone_row = {{ zone_to_geo_zone_row }};

\$('#button-geo-zone').on('click', function() {
    html = '<tr id=\"zone-to-geo-zone-row-' + zone_to_geo_zone_row + '\">';
    html += '  <td><select name=\"zone_to_geo_zone[' + zone_to_geo_zone_row + '][country_id]\" class=\"form-select\" data-zone-to-geo-zone-row=\"' + zone_to_geo_zone_row + '\" disabled>';
  {% for country in countries %}
    html += '    <option value=\"{{ country.country_id }}\">{{ country.name|escape('js') }}</option>';
  {% endfor %}
    html += '  </select></td>';
    html += '  <td><select name=\"zone_to_geo_zone[' + zone_to_geo_zone_row + '][zone_id]\" class=\"form-select\" disabled><option value=\"0\">{{ text_all_zones|escape('js') }}</option></select></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#zone-to-geo-zone-row-' + zone_to_geo_zone_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#zone-to-geo-zone tbody').append(html);

    \$('select[name=\\'zone_to_geo_zone[' + zone_to_geo_zone_row + '][country_id]\\']').trigger('change');

    zone_to_geo_zone_row++;
});

var zone = [];

\$('#zone-to-geo-zone').on('change', 'select[name\$=\\'[country_id]\\']', function() {
    var element = this;

    \$(element).prop('disabled', true);

    \$('select[name=\\'zone_to_geo_zone[' + \$(element).attr('data-zone-to-geo-zone-row') + '][zone_id]\\']').prop('disabled', false);

    if (!zone[\$(element).val()]) {
        \$.ajax({
            url: 'index.php?route=localisation/country.country&user_token={{ user_token }}&country_id=' + \$(element).val(),
            dataType: 'json',
            beforeSend: function() {
                \$('button[form=\\'form-geo-zone\\']').prop('disabled', true);
            },
            complete: function() {
                \$('button[form=\\'form-geo-zone\\']').prop('disabled', false);
            },
            success: function(json) {
                zone[\$(element).val()] = json;

                html = '<option value=\"0\">{{ text_all_zones|escape('js') }}</option>';

                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == \$(element).attr('data-zone-id')) {
                        html += ' selected';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }

                \$('#zone-to-geo-zone select[name=\\'zone_to_geo_zone[' + \$(element).attr('data-zone-to-geo-zone-row') + '][zone_id]\\']').html(html);

                \$('#zone-to-geo-zone select[name=\\'zone_to_geo_zone[' + \$(element).attr('data-zone-to-geo-zone-row') + '][zone_id]\\']').prop('disabled', false);

                \$(element).prop('disabled', false);

                \$('#zone-to-geo-zone select[name\$=\\'[country_id]\\']:disabled:first').trigger('change');
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    } else {
        html = '<option value=\"0\">{{ text_all_zones|escape('js') }}</option>';

        for (i = 0; i < zone[\$(element).val()]['zone'].length; i++) {
            html += '<option value=\"' + zone[element.value]['zone'][i]['zone_id'] + '\"';

            if (zone[\$(element).val()]['zone'][i]['zone_id'] == \$(element).attr('data-zone-id')) {
                html += ' selected';
            }

            html += '>' + zone[\$(element).val()]['zone'][i]['name'] + '</option>';
        }

        \$('#zone-to-geo-zone select[name=\\'zone_to_geo_zone[' + \$(element).attr('data-zone-to-geo-zone-row') + '][zone_id]\\']').html(html);

        \$(element).prop('disabled', false);

        \$('#zone-to-geo-zone select[name\$=\\'[country_id]\\']:disabled:first').trigger('change');
    }
});

\$('#zone-to-geo-zone select[name\$=\\'[country_id]\\']:first').trigger('change');
//--></script>
{{ footer }}
", "admin/view/template/localisation/geo_zone_form.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/admin/view/template/localisation/geo_zone_form.twig");
    }
}
