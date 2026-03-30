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

/* admin/view/template/catalog/option_form.twig */
class __TwigTemplate_a208a0b7f672b5fea09f38ab6d514ea6 extends Template
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
        <button type=\"submit\" form=\"form-option\" data-bs-toggle=\"tooltip\" title=\"";
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
        <form id=\"form-option\" action=\"";
        // line 20
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <fieldset>
            <legend>";
        // line 22
        yield ($context["text_option"] ?? null);
        yield "</legend>
            <div class=\"row mb-3 required\">
              <label class=\"col-sm-2 col-form-label\">";
        // line 24
        yield ($context["entry_name"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 27
            yield "                  <div class=\"input-group\">
                    <div class=\"input-group-text\"><img src=\"";
            // line 28
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 28);
            yield "\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 28);
            yield "\"/></div>
                    <input type=\"text\" name=\"option_description[";
            // line 29
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 29);
            yield "][name]\" value=\"";
            yield (((($_v0 = ($context["option_description"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 29)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["option_description"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 29)] ?? null) : null), "name", [], "any", false, false, false, 29)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_name"] ?? null);
            yield "\" id=\"input-name-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 29);
            yield "\" class=\"form-control\"/>
                  </div>
                  <div id=\"error-name-";
            // line 31
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 31);
            yield "\" class=\"invalid-feedback\"></div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-type\" class=\"col-sm-2 col-form-label\">";
        // line 36
        yield ($context["entry_type"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <select name=\"type\" id=\"input-type\" class=\"form-select\">
                  <optgroup label=\"";
        // line 39
        yield ($context["text_choose"] ?? null);
        yield "\">
                    <option value=\"select\"";
        // line 40
        if ((($context["type"] ?? null) == "select")) {
            yield " selected";
        }
        yield "style=\"color:black;\">";
        yield ($context["text_select"] ?? null);
        yield "</option>
                    <option value=\"radio\"";
        // line 41
        if ((($context["type"] ?? null) == "radio")) {
            yield " selected";
        }
        yield "style=\"color:black;\">";
        yield ($context["text_radio"] ?? null);
        yield "</option>
                    <option value=\"checkbox\"";
        // line 42
        if ((($context["type"] ?? null) == "checkbox")) {
            yield " selected";
        }
        yield "style=\"color:black;\">";
        yield ($context["text_checkbox"] ?? null);
        yield "</option>
                  </optgroup>
                  <optgroup label=\"";
        // line 44
        yield ($context["text_input"] ?? null);
        yield "\">
                    <option value=\"text\"";
        // line 45
        if ((($context["type"] ?? null) == "text")) {
            yield " selected";
        }
        yield "style=\"color:black;\">";
        yield ($context["text_text"] ?? null);
        yield "</option>
                    <option value=\"textarea\"";
        // line 46
        if ((($context["type"] ?? null) == "textarea")) {
            yield " selected";
        }
        yield "style=\"color:black;\">";
        yield ($context["text_textarea"] ?? null);
        yield "</option>
                  </optgroup>
                  <optgroup label=\"";
        // line 48
        yield ($context["text_file"] ?? null);
        yield "\">
                    <option value=\"file\"";
        // line 49
        if ((($context["type"] ?? null) == "file")) {
            yield " selected";
        }
        yield "style=\"color:black;\">";
        yield ($context["text_file"] ?? null);
        yield "</option>
                  </optgroup>
                  <optgroup label=\"";
        // line 51
        yield ($context["text_date"] ?? null);
        yield "\">
                    <option value=\"date\"";
        // line 52
        if ((($context["type"] ?? null) == "date")) {
            yield " selected";
        }
        yield "style=\"color:black;\">";
        yield ($context["text_date"] ?? null);
        yield "</option>
                    <option value=\"time\"";
        // line 53
        if ((($context["type"] ?? null) == "time")) {
            yield " selected";
        }
        yield "style=\"color:black;\">";
        yield ($context["text_time"] ?? null);
        yield "</option>
                    <option value=\"datetime\"";
        // line 54
        if ((($context["type"] ?? null) == "datetime")) {
            yield " selected";
        }
        yield "style=\"color:black;\">";
        yield ($context["text_datetime"] ?? null);
        yield "</option>
                  </optgroup>
                </select>
              </div>
            </div>
            <div class=\"row mb-3\" id=\"display-validation\">
              <label for=\"input-validation\" class=\"col-sm-2 col-form-label\">";
        // line 60
        yield ($context["entry_validation"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"validation\" id=\"input-validation\" value=\"";
        // line 62
        yield ($context["validation"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["text_regex"] ?? null);
        yield "\" class=\"form-control\"/>
                <div class=\"form-text\">";
        // line 63
        yield ($context["help_regex"] ?? null);
        yield "</div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 67
        yield ($context["entry_sort_order"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <input type=\"number\" name=\"sort_order\" value=\"";
        // line 69
        yield ($context["sort_order"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_sort_order"] ?? null);
        yield "\" id=\"input-sort-order\" class=\"form-control\"/>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 74
        yield ($context["text_value"] ?? null);
        yield "</legend>
            <table id=\"option-value\" class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <th class=\"required\">";
        // line 78
        yield ($context["entry_option_value"] ?? null);
        yield "</th>
                  <th class=\"text-center\">";
        // line 79
        yield ($context["entry_image"] ?? null);
        yield "</th>
                  <th class=\"text-end\">";
        // line 80
        yield ($context["entry_sort_order"] ?? null);
        yield "</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 85
        $context["option_value_row"] = 0;
        // line 86
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["option_values"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
            // line 87
            yield "                  <tr id=\"option-value-row-";
            yield ($context["option_value_row"] ?? null);
            yield "\">
                    <td class=\"text-center\"><input type=\"hidden\" name=\"option_value[";
            // line 88
            yield ($context["option_value_row"] ?? null);
            yield "][option_value_id]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 88);
            yield "\"/>
                      ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 90
                yield "                        <div class=\"input-group\">
                          <div class=\"input-group-text\"><img src=\"";
                // line 91
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 91);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 91);
                yield "\"/></div>
                          <input type=\"text\" name=\"option_value[";
                // line 92
                yield ($context["option_value_row"] ?? null);
                yield "][option_value_description][";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92);
                yield "][name]\" value=\"";
                yield (((($_v2 = CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "option_value_description", [], "any", false, false, false, 92)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v3 = CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "option_value_description", [], "any", false, false, false, 92)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92)] ?? null) : null), "name", [], "any", false, false, false, 92)) : (""));
                yield "\" placeholder=\"";
                yield ($context["entry_option_value"] ?? null);
                yield "\" id=\"input-option-value-";
                yield ($context["option_value_row"] ?? null);
                yield "-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92);
                yield "\" class=\"form-control\"/>
                        </div>
                        <div id=\"error-option-value-";
                // line 94
                yield ($context["option_value_row"] ?? null);
                yield "-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 94);
                yield "\" class=\"invalid-feedback\"></div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            yield "</td>
                    <td class=\"text-center\">
                      <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                        <img src=\"";
            // line 98
            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "thumb", [], "any", false, false, false, 98);
            yield "\" alt=\"\" title=\"\" id=\"thumb-image-";
            yield ($context["option_value_row"] ?? null);
            yield "\" data-oc-placeholder=\"";
            yield ($context["placeholder"] ?? null);
            yield "\" class=\"img-fluid\"/>
                        <input type=\"hidden\" name=\"option_value[";
            // line 99
            yield ($context["option_value_row"] ?? null);
            yield "][image]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 99);
            yield "\" id=\"input-image-";
            yield ($context["option_value_row"] ?? null);
            yield "\"/>
                        <div class=\"d-grid\">
                          <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image-";
            // line 101
            yield ($context["option_value_row"] ?? null);
            yield "\" data-oc-thumb=\"#thumb-image-";
            yield ($context["option_value_row"] ?? null);
            yield "\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
            yield ($context["button_edit"] ?? null);
            yield "</button>
                          <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image-";
            // line 102
            yield ($context["option_value_row"] ?? null);
            yield "\" data-oc-thumb=\"#thumb-image-";
            yield ($context["option_value_row"] ?? null);
            yield "\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
            yield ($context["button_clear"] ?? null);
            yield "</button>
                        </div>
                      </div></td>
                    <td class=\"text-end\"><input type=\"text\" name=\"option_value[";
            // line 105
            yield ($context["option_value_row"] ?? null);
            yield "][sort_order]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "sort_order", [], "any", false, false, false, 105);
            yield "\" placeholder=\"";
            yield ($context["entry_sort_order"] ?? null);
            yield "\" class=\"form-control\"/></td>
                    <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#option-value-row-";
            // line 106
            yield ($context["option_value_row"] ?? null);
            yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            // line 108
            $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
            // line 109
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        yield "              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"3\"></td>
                  <td class=\"text-end\"><button type=\"button\" onclick=\"addOptionValue();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 114
        yield ($context["button_option_value_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
          <input type=\"hidden\" name=\"option_id\" value=\"";
        // line 119
        yield ($context["option_id"] ?? null);
        yield "\" id=\"input-option-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-type').on('change', function() {
    if (this.value == 'select' || this.value == 'radio' || this.value == 'checkbox' || this.value == 'image') {
        \$('#option-value').parent().show();
    } else {
        \$('#option-value').parent().hide();
    }

    if (this.value == 'text' || this.value == 'textarea') {
        \$('#display-validation').show();
    } else {
        \$('#display-validation').hide();
        \$('#input-validation').val('');
    }
});

\$('#input-type').trigger('change');

var option_value_row = ";
        // line 143
        yield ($context["option_value_row"] ?? null);
        yield ";

function addOptionValue() {
    html = '<tr id=\"option-value-row-' + option_value_row + '\">';
    html += '  <td><input type=\"hidden\" name=\"option_value[' + option_value_row + '][option_value_id]\" value=\"\" />';
  ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 149
            yield "    html += '    <div class=\"input-group\">';
    html += '      <div class=\"input-group-text\"><img src=\"";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 150), "js");
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 150), "js");
            yield "\" /></div>';
    html += '      <input type=\"text\" name=\"option_value[' + option_value_row + '][option_value_description][";
            // line 151
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 151);
            yield "][name]\" value=\"\" placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-value-' + option_value_row + '-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 151);
            yield "\" class=\"form-control\"/>';
    html += '    </div>';
    html += '    <div id=\"error-option-value-' + option_value_row + '-";
            // line 153
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 153);
            yield "\" class=\"invalid-feedback\"></div>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        yield "    html += '  </td>';
    html += '  <td class=\"text-center\"><div class=\"border rounded d-block\" style=\"max-width: 300px;\">';
    html += '    <img src=\"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["placeholder"] ?? null), "js");
        yield "\" alt=\"\" title=\"\" id=\"thumb-image-' + option_value_row + '\" data-oc-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["placeholder"] ?? null), "js");
        yield "\" class=\"img-fluid\"/>';
    html += '    <input type=\"hidden\" name=\"option_value[' + option_value_row + '][image]\" value=\"\" id=\"input-image-' + option_value_row + '\"/>';
    html += '    <div class=\"d-grid\">';
    html += '      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image-' + option_value_row + '\" data-oc-thumb=\"#thumb-image-' + option_value_row + '\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_edit"] ?? null), "js");
        yield "</button>';
    html += '      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image-' + option_value_row + '\" data-oc-thumb=\"#thumb-image-' + option_value_row + '\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_clear"] ?? null), "js");
        yield "</button>';
    html += '    </div>';
    html += '  </div></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"option_value[' + option_value_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_sort_order"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#option-value-row-' + option_value_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#option-value tbody').append(html);

    option_value_row++;
}
//--></script>
";
        // line 173
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
        return "admin/view/template/catalog/option_form.twig";
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
        return array (  538 => 173,  527 => 165,  523 => 164,  517 => 161,  513 => 160,  505 => 157,  501 => 155,  493 => 153,  484 => 151,  478 => 150,  475 => 149,  471 => 148,  463 => 143,  436 => 119,  428 => 114,  422 => 110,  416 => 109,  414 => 108,  407 => 106,  399 => 105,  389 => 102,  381 => 101,  372 => 99,  364 => 98,  359 => 95,  349 => 94,  334 => 92,  328 => 91,  325 => 90,  321 => 89,  315 => 88,  310 => 87,  305 => 86,  303 => 85,  295 => 80,  291 => 79,  287 => 78,  280 => 74,  270 => 69,  265 => 67,  258 => 63,  252 => 62,  247 => 60,  234 => 54,  226 => 53,  218 => 52,  214 => 51,  205 => 49,  201 => 48,  192 => 46,  184 => 45,  180 => 44,  171 => 42,  163 => 41,  155 => 40,  151 => 39,  145 => 36,  140 => 33,  132 => 31,  121 => 29,  115 => 28,  112 => 27,  108 => 26,  103 => 24,  98 => 22,  93 => 20,  88 => 18,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-option\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
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
        <form id=\"form-option\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <fieldset>
            <legend>{{ text_option }}</legend>
            <div class=\"row mb-3 required\">
              <label class=\"col-sm-2 col-form-label\">{{ entry_name }}</label>
              <div class=\"col-sm-10\">
                {% for language in languages %}
                  <div class=\"input-group\">
                    <div class=\"input-group-text\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/></div>
                    <input type=\"text\" name=\"option_description[{{ language.language_id }}][name]\" value=\"{{ option_description[language.language_id] ? option_description[language.language_id].name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name-{{ language.language_id }}\" class=\"form-control\"/>
                  </div>
                  <div id=\"error-name-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
                {% endfor %}
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-type\" class=\"col-sm-2 col-form-label\">{{ entry_type }}</label>
              <div class=\"col-sm-10\">
                <select name=\"type\" id=\"input-type\" class=\"form-select\">
                  <optgroup label=\"{{ text_choose }}\">
                    <option value=\"select\"{% if type == 'select' %} selected{% endif %}style=\"color:black;\">{{ text_select }}</option>
                    <option value=\"radio\"{% if type == 'radio' %} selected{% endif %}style=\"color:black;\">{{ text_radio }}</option>
                    <option value=\"checkbox\"{% if type == 'checkbox' %} selected{% endif %}style=\"color:black;\">{{ text_checkbox }}</option>
                  </optgroup>
                  <optgroup label=\"{{ text_input }}\">
                    <option value=\"text\"{% if type == 'text' %} selected{% endif %}style=\"color:black;\">{{ text_text }}</option>
                    <option value=\"textarea\"{% if type == 'textarea' %} selected{% endif %}style=\"color:black;\">{{ text_textarea }}</option>
                  </optgroup>
                  <optgroup label=\"{{ text_file }}\">
                    <option value=\"file\"{% if type == 'file' %} selected{% endif %}style=\"color:black;\">{{ text_file }}</option>
                  </optgroup>
                  <optgroup label=\"{{ text_date }}\">
                    <option value=\"date\"{% if type == 'date' %} selected{% endif %}style=\"color:black;\">{{ text_date }}</option>
                    <option value=\"time\"{% if type == 'time' %} selected{% endif %}style=\"color:black;\">{{ text_time }}</option>
                    <option value=\"datetime\"{% if type == 'datetime' %} selected{% endif %}style=\"color:black;\">{{ text_datetime }}</option>
                  </optgroup>
                </select>
              </div>
            </div>
            <div class=\"row mb-3\" id=\"display-validation\">
              <label for=\"input-validation\" class=\"col-sm-2 col-form-label\">{{ entry_validation }}</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"validation\" id=\"input-validation\" value=\"{{ validation }}\" placeholder=\"{{ text_regex }}\" class=\"form-control\"/>
                <div class=\"form-text\">{{ help_regex }}</div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">{{ entry_sort_order }}</label>
              <div class=\"col-sm-10\">
                <input type=\"number\" name=\"sort_order\" value=\"{{ sort_order }}\" placeholder=\"{{ entry_sort_order }}\" id=\"input-sort-order\" class=\"form-control\"/>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>{{ text_value }}</legend>
            <table id=\"option-value\" class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <th class=\"required\">{{ entry_option_value }}</th>
                  <th class=\"text-center\">{{ entry_image }}</th>
                  <th class=\"text-end\">{{ entry_sort_order }}</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                {% set option_value_row = 0 %}
                {% for option_value in option_values %}
                  <tr id=\"option-value-row-{{ option_value_row }}\">
                    <td class=\"text-center\"><input type=\"hidden\" name=\"option_value[{{ option_value_row }}][option_value_id]\" value=\"{{ option_value.option_value_id }}\"/>
                      {% for language in languages %}
                        <div class=\"input-group\">
                          <div class=\"input-group-text\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/></div>
                          <input type=\"text\" name=\"option_value[{{ option_value_row }}][option_value_description][{{ language.language_id }}][name]\" value=\"{{ option_value.option_value_description[language.language_id] ? option_value.option_value_description[language.language_id].name }}\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-value-{{ option_value_row }}-{{ language.language_id }}\" class=\"form-control\"/>
                        </div>
                        <div id=\"error-option-value-{{ option_value_row }}-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
                      {% endfor %}</td>
                    <td class=\"text-center\">
                      <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                        <img src=\"{{ option_value.thumb }}\" alt=\"\" title=\"\" id=\"thumb-image-{{ option_value_row }}\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/>
                        <input type=\"hidden\" name=\"option_value[{{ option_value_row }}][image]\" value=\"{{ option_value.image }}\" id=\"input-image-{{ option_value_row }}\"/>
                        <div class=\"d-grid\">
                          <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image-{{ option_value_row }}\" data-oc-thumb=\"#thumb-image-{{ option_value_row }}\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                          <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image-{{ option_value_row }}\" data-oc-thumb=\"#thumb-image-{{ option_value_row }}\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                        </div>
                      </div></td>
                    <td class=\"text-end\"><input type=\"text\" name=\"option_value[{{ option_value_row }}][sort_order]\" value=\"{{ option_value.sort_order }}\" placeholder=\"{{ entry_sort_order }}\" class=\"form-control\"/></td>
                    <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#option-value-row-{{ option_value_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                  </tr>
                  {% set option_value_row = option_value_row + 1 %}
                {% endfor %}
              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"3\"></td>
                  <td class=\"text-end\"><button type=\"button\" onclick=\"addOptionValue();\" data-bs-toggle=\"tooltip\" title=\"{{ button_option_value_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
          <input type=\"hidden\" name=\"option_id\" value=\"{{ option_id }}\" id=\"input-option-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-type').on('change', function() {
    if (this.value == 'select' || this.value == 'radio' || this.value == 'checkbox' || this.value == 'image') {
        \$('#option-value').parent().show();
    } else {
        \$('#option-value').parent().hide();
    }

    if (this.value == 'text' || this.value == 'textarea') {
        \$('#display-validation').show();
    } else {
        \$('#display-validation').hide();
        \$('#input-validation').val('');
    }
});

\$('#input-type').trigger('change');

var option_value_row = {{ option_value_row }};

function addOptionValue() {
    html = '<tr id=\"option-value-row-' + option_value_row + '\">';
    html += '  <td><input type=\"hidden\" name=\"option_value[' + option_value_row + '][option_value_id]\" value=\"\" />';
  {% for language in languages %}
    html += '    <div class=\"input-group\">';
    html += '      <div class=\"input-group-text\"><img src=\"{{ language.image|escape('js') }}\" title=\"{{ language.name|escape('js') }}\" /></div>';
    html += '      <input type=\"text\" name=\"option_value[' + option_value_row + '][option_value_description][{{ language.language_id }}][name]\" value=\"\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-value-' + option_value_row + '-{{ language.language_id }}\" class=\"form-control\"/>';
    html += '    </div>';
    html += '    <div id=\"error-option-value-' + option_value_row + '-{{ language.language_id }}\" class=\"invalid-feedback\"></div>';
  {% endfor %}
    html += '  </td>';
    html += '  <td class=\"text-center\"><div class=\"border rounded d-block\" style=\"max-width: 300px;\">';
    html += '    <img src=\"{{ placeholder|escape('js') }}\" alt=\"\" title=\"\" id=\"thumb-image-' + option_value_row + '\" data-oc-placeholder=\"{{ placeholder|escape('js') }}\" class=\"img-fluid\"/>';
    html += '    <input type=\"hidden\" name=\"option_value[' + option_value_row + '][image]\" value=\"\" id=\"input-image-' + option_value_row + '\"/>';
    html += '    <div class=\"d-grid\">';
    html += '      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image-' + option_value_row + '\" data-oc-thumb=\"#thumb-image-' + option_value_row + '\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit|escape('js') }}</button>';
    html += '      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image-' + option_value_row + '\" data-oc-thumb=\"#thumb-image-' + option_value_row + '\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear|escape('js') }}</button>';
    html += '    </div>';
    html += '  </div></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"option_value[' + option_value_row + '][sort_order]\" value=\"\" placeholder=\"{{ entry_sort_order|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#option-value-row-' + option_value_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#option-value tbody').append(html);

    option_value_row++;
}
//--></script>
{{ footer }}
", "admin/view/template/catalog/option_form.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/admin/view/template/catalog/option_form.twig");
    }
}
