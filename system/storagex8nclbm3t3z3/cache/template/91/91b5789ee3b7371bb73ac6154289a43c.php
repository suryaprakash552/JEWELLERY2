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

/* extension/purpletree_pos/admin/view/template/posproduct_list.twig */
class __TwigTemplate_f8ba8ae0c10153d7fe373878ace6c47b extends Template
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
        yield "
";
        // line 2
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\"><div class=\"float-end\">
\t\t<button class=\"btn btn-success radius-0\" data-original-title=\"";
        // line 6
        yield ($context["text_original_title"] ?? null);
        yield "\" data-bs-toggle=\"modal\" id=\"massPrintbarcode\" data-bs-target=\"#massprint\"><i class=\"fa fa-print\"></i> ";
        yield ($context["button_massbarcodeprint"] ?? null);
        yield "</button>
\t\t<a href=\"";
        // line 7
        yield ($context["add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" form=\"form-product\" formaction=\"";
        // line 8
        yield ($context["delete"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_delete"] ?? null);
        yield "\" class=\"btn btn-danger\" onclick=\"confirm('";
        yield ($context["text_confirm"] ?? null);
        yield "') ? \$('#form-product').submit() : false;\"><i class=\"fa-regular fa-trash-can\"></i></button>
      </div>
\t\t\t<h1>";
        // line 10
        yield ($context["heading_title"] ?? null);
        yield "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            yield "\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            yield "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            yield "\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "
\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t</div>
\t\t";
        }
        // line 24
        yield "\t\t";
        if (($context["success"] ?? null)) {
            // line 25
            yield "\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            yield ($context["success"] ?? null);
            yield "
\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t</div>
\t\t";
        }
        // line 29
        yield "\t\t<div class=\"panel panel-default card\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title card-header\"><i class=\"fa fa-list\"></i> ";
        // line 31
        yield ($context["text_list"] ?? null);
        yield "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body card-body\">
\t\t\t\t<div class=\"filter-row\">
        
            <div class=\"filter-item\">
                ";
        // line 38
        yield "                <input type=\"text\" name=\"filter_name\" value=\"";
        yield ($context["filter_name"] ?? null);
        yield "\"
                       placeholder=\"";
        // line 39
        yield ($context["entry_name"] ?? null);
        yield "\"
                       id=\"input-name\"
                       data-oc-target=\"autocomplete-name\"
                       class=\"form-control\">
                <ul id=\"autocomplete-name\" class=\"dropdown-menu\"></ul>
            </div>
        
            <div class=\"filter-item\">
                ";
        // line 48
        yield "                <input type=\"text\" name=\"filter_model\" value=\"";
        yield ($context["filter_model"] ?? null);
        yield "\"
                       placeholder=\"";
        // line 49
        yield ($context["entry_model"] ?? null);
        yield "\"
                       id=\"input-model\"
                       data-oc-target=\"autocomplete-model\"
                       class=\"form-control\">
                <ul id=\"autocomplete-model\" class=\"dropdown-menu\"></ul>
            </div>
        
            <div class=\"filter-item\">
                ";
        // line 58
        yield "                <input type=\"text\" name=\"filter_price\" value=\"";
        yield ($context["filter_price"] ?? null);
        yield "\"
                       placeholder=\"";
        // line 59
        yield ($context["entry_price"] ?? null);
        yield "\"
                       id=\"input-price\"
                       class=\"form-control\">
            </div>
            <div class=\"filter-item\">
                ";
        // line 65
        yield "                <input type=\"text\"
                   name=\"filter_box_id\"
                   value=\"";
        // line 67
        yield ($context["filter_box_id"] ?? null);
        yield "\"
                   placeholder=\"Box ID\"
                   data-oc-target=\"autocomplete-box-id\"
                   id=\"input-box-id\"
                   class=\"form-control\">
                   <ul id=\"autocomplete-box-id\" class=\"dropdown-menu\"></ul>
            </div>
            <div class=\"filter-item\">
                ";
        // line 76
        yield "                <input type=\"text\" name=\"filter_rack_code\"
                       value=\"";
        // line 77
        yield ($context["filter_rack_code"] ?? null);
        yield "\"
                       id=\"input-rack-code\"
                       placeholder=\"Rack code\"
                       data-oc-target=\"autocomplete-rack-code\"
                       class=\"form-control\">
                <ul id=\"autocomplete-rack-code\" class=\"dropdown-menu\"></ul>
            </div>

                ";
        // line 92
        yield "                <div class=\"filter-item\">
                    <input type=\"text\"
                           name=\"filter_barcode\"
                           value=\"";
        // line 95
        yield ($context["filter_barcode"] ?? null);
        yield "\"
                           id=\"input-barcode\"
                           placeholder=\"Barcode\"
                           class=\"form-control\">
                           <ul id=\"autocomplete-barcode\" class=\"dropdown-menu\"></ul>
                </div>


                <div class=\"filter-btn\">
                    <label>&nbsp;</label>
                    <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\">
                        <i class=\"fa fa-filter\"></i> ";
        // line 106
        yield ($context["button_filter"] ?? null);
        yield "
                    </button>
                </div>
                 <button type=\"reset\"
                  data-bs-toggle=\"tooltip\"
                  title=\"";
        // line 111
        yield ($context["button_reset"] ?? null);
        yield "\"
                  class=\"btn btn-outline-secondary btn-reset\">
            <i class=\"fa-solid fa-filter-circle-xmark\"></i>
          </button>
            
            </div>
            \t\t\t
\t\t\t\t</div>
\t\t\t\t<form action=\"";
        // line 119
        yield ($context["delete"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\">
\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 125
        yield ($context["column_image"] ?? null);
        yield "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">Type</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><a href=\"";
        // line 127
        yield ($context["sort_box_id"] ?? null);
        yield "\" ";
        if ((($context["sort"] ?? null) == "p.box_id")) {
            yield "class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">Box ID</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">Rack</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-start\">";
        // line 129
        if ((($context["sort"] ?? null) == "pd.name")) {
            // line 130
            yield "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            yield ($context["sort_name"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_name"] ?? null);
            yield "</a>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 132
            yield "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            yield ($context["sort_name"] ?? null);
            yield "\">";
            yield ($context["column_name"] ?? null);
            yield "</a>
\t\t\t\t\t\t\t\t\t";
        }
        // line 133
        yield "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-start\">";
        // line 134
        if ((($context["sort"] ?? null) == "p.model")) {
            // line 135
            yield "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            yield ($context["sort_model"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_model"] ?? null);
            yield "</a>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 137
            yield "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            yield ($context["sort_model"] ?? null);
            yield "\">";
            yield ($context["column_model"] ?? null);
            yield "</a>
\t\t\t\t\t\t\t\t\t";
        }
        // line 138
        yield "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-end\">";
        // line 139
        if ((($context["sort"] ?? null) == "p.price")) {
            // line 140
            yield "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            yield ($context["sort_price"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_price"] ?? null);
            yield "</a>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 142
            yield "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            yield ($context["sort_price"] ?? null);
            yield "\">";
            yield ($context["column_price"] ?? null);
            yield "</a>
\t\t\t\t\t\t\t\t\t";
        }
        // line 143
        yield "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 144
        yield ($context["column_barcode"] ?? null);
        yield "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-end\">";
        // line 145
        if ((($context["sort"] ?? null) == "p.quantity")) {
            // line 146
            yield "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            yield ($context["sort_quantity"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_quantity"] ?? null);
            yield "</a>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 148
            yield "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            yield ($context["sort_quantity"] ?? null);
            yield "\">";
            yield ($context["column_quantity"] ?? null);
            yield "</a>
\t\t\t\t\t\t\t\t\t";
        }
        // line 149
        yield "</td>
\t\t\t\t\t\t\t\t\t<th class=\"text-end\">Box Quantity</th>
\t\t\t\t\t\t\t\t\t<td class=\"text-end\">";
        // line 151
        if ((($context["sort"] ?? null) == "p.status")) {
            // line 152
            yield "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            yield ($context["sort_status"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_status"] ?? null);
            yield "</a>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 154
            yield "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            yield ($context["sort_status"] ?? null);
            yield "\">";
            yield ($context["column_status"] ?? null);
            yield "</a>
\t\t\t\t\t\t\t\t\t";
        }
        // line 155
        yield "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-end\">";
        // line 156
        yield ($context["column_action"] ?? null);
        yield "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
        // line 160
        if (($context["products"] ?? null)) {
            // line 161
            yield "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 162
                yield "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<!--start barcode-->
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
                                        <input type=\"checkbox\"
                                               name=\"selected[]\"
                                               value=\"";
                // line 167
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 167);
                yield "\"
                                               data-type=\"";
                // line 168
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "upc", [], "any", false, false, false, 168)) {
                    yield "box";
                } else {
                    yield "unit";
                }
                yield "\"
                                               data-sku=\"";
                // line 169
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "sku", [], "any", false, false, false, 169);
                yield "\"
                                               data-upc=\"";
                // line 170
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "upc", [], "any", false, false, false, 170);
                yield "\" />
                                    </td>

\t\t\t\t\t\t\t\t\t<!--start barcode-->
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
                // line 174
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 174)) {
                    // line 175
                    yield "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 175);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 175);
                    yield "\" class=\"img-thumbnail\" />
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 177
                    yield "\t\t\t\t\t\t\t\t\t\t<span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span>
\t\t\t\t\t\t\t\t\t";
                }
                // line 178
                yield "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
                                        ";
                // line 180
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "upc", [], "any", false, false, false, 180)) {
                    // line 181
                    yield "                                            <span class=\"badge bg-primary\">BOX</span>
                                        ";
                } else {
                    // line 183
                    yield "                                            <span class=\"badge bg-secondary\">UNIT</span>
                                        ";
                }
                // line 185
                yield "                                    </td>
                                    <td class=\"text-center\">
                                        ";
                // line 187
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "upc", [], "any", false, false, false, 187)) {
                    // line 188
                    yield "                                            ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 188);
                    yield "
                                        ";
                } else {
                    // line 190
                    yield "                                            ";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "box_id", [], "any", false, false, false, 190)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "box_id", [], "any", false, false, false, 190)) : (("U" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 190))));
                    yield "
                                        ";
                }
                // line 192
                yield "                                    </td>
                                    <td class=\"text-center\">
                                    ";
                // line 194
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rack_code", [], "any", false, false, false, 194)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rack_code", [], "any", false, false, false, 194)) : ("-"));
                yield "
                                    </td>
\t\t\t\t\t\t\t\t\t<td class=\"barcodename text-start\">";
                // line 196
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 196);
                yield "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-start\">";
                // line 197
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 197);
                yield "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-end\">";
                // line 198
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 198)) {
                    // line 199
                    yield "\t\t\t\t\t\t\t\t\t\t<span class=\"barcodeprice ptsc-sellprod-textdecor\" style=\"color:gold;text-decoration: line-through;\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "wholesale_price", [], "any", false, false, false, 199);
                    yield "</span><br/>
\t\t\t\t\t\t\t\t\t\t<div class=\"barcodespecialprice text-danger\">";
                    // line 200
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 200);
                    yield "</div>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 202
                    yield "\t\t\t\t\t\t\t\t\t\t<span class=\"barcodeprice ptsc-sellprod-textdecor\"style=\"color:gold;\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "wholesale_price", [], "any", false, false, false, 202);
                    yield "</span>
\t\t\t\t\t\t\t\t\t";
                }
                // line 203
                yield "</td>
\t\t\t\t\t\t\t\t\t<!--start barcode-->
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">\t\t\t\t\t\t\t\t
                                      ";
                // line 206
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "upc", [], "any", false, false, false, 206)) {
                    yield "                                      \t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t     ";
                    // line 207
                    $context["result_barcode"] = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "upc", [], "any", false, false, false, 207);
                    // line 208
                    yield "\t\t\t\t\t\t\t\t\t  ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "ean", [], "any", false, false, false, 208)) {
                    // line 209
                    yield "\t\t\t\t\t\t\t\t\t\t  ";
                    $context["result_barcode"] = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "ean", [], "any", false, false, false, 209);
                    // line 210
                    yield "\t\t\t\t\t\t\t\t\t  ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "mpn", [], "any", false, false, false, 210)) {
                    // line 211
                    yield "\t\t\t\t\t\t\t\t\t\t  ";
                    $context["result_barcode"] = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "mpn", [], "any", false, false, false, 211);
                    // line 212
                    yield "\t\t\t\t\t\t\t\t\t  ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "jan", [], "any", false, false, false, 212)) {
                    // line 213
                    yield "\t\t\t\t\t\t\t\t\t\t  ";
                    $context["result_barcode"] = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "jan", [], "any", false, false, false, 213);
                    // line 214
                    yield "\t\t\t\t\t\t\t\t\t  ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isbn", [], "any", false, false, false, 214)) {
                    // line 215
                    yield "\t\t\t\t\t\t\t\t\t\t  ";
                    $context["result_barcode"] = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isbn", [], "any", false, false, false, 215);
                    // line 216
                    yield "\t\t\t\t\t\t\t\t\t  ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "sku", [], "any", false, false, false, 216)) {
                    // line 217
                    yield "\t\t\t\t\t\t\t\t\t\t  ";
                    $context["result_barcode"] = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "sku", [], "any", false, false, false, 217);
                    // line 218
                    yield "\t\t\t\t\t\t\t\t\t ";
                }
                // line 219
                yield "\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t  <svg class=\"barcode\"
                                         data-barcode=\"";
                // line 221
                yield ($context["result_barcode"] ?? null);
                yield "\"
                                         data-box=\"";
                // line 222
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "box_code", [], "any", false, false, false, 222);
                yield "\"
                                         data-sku=\"";
                // line 223
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "sku", [], "any", false, false, false, 223);
                yield "\"
                                         jsbarcode-format=\"code39\"
                                         jsbarcode-value=\"";
                // line 225
                yield ($context["result_barcode"] ?? null);
                yield "\"
                                         jsbarcode-displayValue=\"false\"
                                         jsbarcode-width=\"1px\"
                                         jsbarcode-height=\"30px\"
                                         jsbarcode-fontSize=\"15px\">
                                    </svg>

\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                // line 235
                yield "\t\t\t\t\t\t\t\t\t<!--start barcode-->
\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t";
                // line 237
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 237) <= 0)) {
                    // line 238
                    yield "\t\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\" style=\"color:yellow;\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 238);
                    yield "</span>
\t\t\t\t\t\t\t\t\t\t";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 239
$context["product"], "quantity", [], "any", false, false, false, 239) <= 5)) {
                    // line 240
                    yield "\t\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\"style=\"color:yellow;\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 240);
                    yield "</span>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 242
                    yield "\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\"style=\"color:yellow;\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 242);
                    yield "</span>
\t\t\t\t\t\t\t\t\t";
                }
                // line 243
                yield "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
                                        ";
                // line 245
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "upc", [], "any", false, false, false, 245)) {
                    // line 246
                    yield "                                            ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "max_quantity", [], "any", false, false, false, 246);
                    yield "
                                        ";
                } else {
                    // line 248
                    yield "                                            -
                                        ";
                }
                // line 250
                yield "                                    </td>

\t\t\t\t\t\t\t\t\t<td class=\"text-start\">";
                // line 252
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 252);
                yield "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-end\">

                                    ";
                // line 255
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "box_code", [], "any", false, false, false, 255)) {
                    // line 256
                    yield "                                       
                                        <button type=\"button\" class=\"btn btn-secondary\" disabled title=\"Barcode printing disabled for BOX\"><i class=\"fa fa-print\"></i></button>
                                    ";
                } else {
                    // line 259
                    yield "                                        ";
                    // line 260
                    yield "                                        <button type=\"button\"
                                                class=\"ptsbarcodeselect btn-success btn\"
                                                data-maxqty=\"";
                    // line 262
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "max_quantity", [], "any", false, false, false, 262);
                    yield "\"
                                                data-price=\"";
                    // line 263
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price_raw", [], "any", false, false, false, 263);
                    yield "\"
                                                data-wholesale=\"";
                    // line 264
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "wholesale_price", [], "any", false, false, false, 264);
                    yield "\"
                                                data-rtag=\"";
                    // line 265
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "r_tag", [], "any", false, false, false, 265);
                    yield "\"
                                                data-wtag=\"";
                    // line 266
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "w_tag", [], "any", false, false, false, 266);
                    yield "\"
                                                data-rackcode=\"";
                    // line 267
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rack_code", [], "any", false, false, false, 267);
                    yield "\"
                                                data-boxid=\"";
                    // line 268
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "box_id", [], "any", false, false, false, 268);
                    yield "\"
                                                data-productid=\"";
                    // line 269
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 269);
                    yield "\"
                                                data-bs-toggle=\"modal\"
                                                data-bs-target=\"#mymodel\"
                                                ";
                    // line 272
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "upc", [], "any", false, false, false, 272)) {
                        // line 273
                        yield "                                                    disabled
                                                ";
                    }
                    // line 274
                    yield ">
                                            <i class=\"fa fa-print\"></i>
                                        </button>
                                    ";
                }
                // line 278
                yield "\t\t\t\t\t\t\t\t\t<a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 278);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil fas fa-edit\"></i></a></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 281
            yield "\t\t\t\t\t\t\t\t";
        } else {
            // line 282
            yield "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\" colspan=\"10\">";
            // line 283
            yield ($context["text_no_results"] ?? null);
            yield "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        // line 286
        yield "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 text-start\">";
        // line 291
        yield ($context["pagination"] ?? null);
        yield "</div>
\t\t\t\t\t<div class=\"col-sm-6 text-end\">";
        // line 292
        yield ($context["results"] ?? null);
        yield "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Start barcode-->
\t<div class=\"modal\" id=\"mymodel\">
     <div class=\"modal-dialog\">
\t\t <div class=\"modal-content masspopup\">
\t\t\t <div class=\"modal-header\">
\t\t\t
\t\t\t\t <h6 class=\"modal-title\" style =\"color:black\">";
        // line 303
        yield ($context["text_popupheading"] ?? null);
        yield "</h6>
\t\t\t\t  <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t </div>
\t\t\t <div class=\"modal-body\">
\t\t\t\t <form method=\"post\" target=\"_blank\" action=\"";
        // line 307
        yield ($context["action_printbarcode"] ?? null);
        yield "\">
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t  <label class=\"masspopuplabel\" style =\"color:black\">";
        // line 309
        yield ($context["text_qty"] ?? null);
        yield "</label>
\t\t\t\t\t\t  <input type=\"hidden\" class\"form-control\" id=\"printbarcode\" name=\"printbarcode\">
\t\t\t\t\t\t  <input type=\"hidden\" class\"form-control\" id=\"printbarcodename\" name=\"printbarcodename\">
\t\t\t\t\t\t  <input type=\"hidden\" class\"form-control\" id=\"printbarcodeprice\" name=\"printbarcodeprice\">
\t\t\t\t\t\t  <input type=\"hidden\" id=\"printsku\" name=\"printsku\">
\t\t\t\t\t\t  <input type=\"hidden\" id=\"printmaxqty\" name=\"printmaxqty\">
\t\t\t\t\t\t  <input type=\"hidden\" id=\"print_r_tag\" name=\"print_r_tag\">
                            <input type=\"hidden\" id=\"print_w_tag\" name=\"print_w_tag\">
                            <input type=\"hidden\" id=\"print_price\" name=\"print_price\">
                            <input type=\"hidden\" id=\"print_product_id\" name=\"print_product_id\">
                            <input type=\"hidden\" id=\"print_rack_code\" name=\"print_rack_code\">
                            <input type=\"hidden\" id=\"print_box_id\" name=\"print_box_id\">
                            <input type=\"hidden\" id=\"print_wholesale\" name=\"print_wholesale\">
\t\t\t\t\t\t  <!-- <input type=\"hidden\" class\"form-control\" id=\"printbarcodespecialprice\" name=\"printbarcodespecialprice\"> -->
\t\t\t\t\t\t  <input type=\"number\" class\"form-control massinputpopup\" style =\"color:black\" name=\"qty\" required>
\t\t\t\t\t\t  
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t\t<button type=\"button\"class=\"btn btn-secondary\"data-bs-dismiss=\"modal\">";
        // line 327
        yield ($context["text_close"] ?? null);
        yield "</button>
\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-success\" value=\"Print\">
\t\t\t\t\t\t</div>
\t\t\t\t </form>\t\t\t\t 
\t\t\t </div>
\t\t </div>
\t </div>
 </div>
 <style>
 .filter-row {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    align-items: flex-end;
}

.filter-item {
    min-width: 160px;
    flex: 1;
}

.filter-item label {
    font-size: 12px;
    margin-bottom: 4px;
    display: block;
}

.filter-btn {
    min-width: 120px;
}
</style>
 <link rel=\"stylesheet\" href=\"";
        // line 358
        yield ($context["baseurl"] ?? null);
        yield "extension/purpletree_pos/admin/view/stylesheet/posproduct/customproduct.css\">    
<script type=\"text/javascript\" src=\"";
        // line 359
        yield ($context["baseurl"] ?? null);
        yield "extension/purpletree_pos/admin/view/javascript/ptsbarcode/JsBarcode.all.min.js\"></script> 
";
        // line 361
        yield "\t
\t<script type=\"text/javascript\">\t    
\t\tJsBarcode(\".barcode\").init();\t
\t</script>
\t
\t
\t<script>
\t\t\t\$(document).ready(function () {

    \$(document).on('click', '.ptsbarcodeselect', function () {

    var btn = \$(this);                 // ALWAYS the button
    var row = btn.closest(\"tr\");

    var barcodeprint     = row.find(\".barcode\").data(\"barcode\");
    var sku              = row.find(\".barcode\").data(\"sku\");
    var barcodeprintname = row.find(\".barcodename\").text().trim();

    var price        = btn.data(\"price\");
    var wholesale    = btn.data(\"wholesale\");
    var r_tag        = btn.data(\"rtag\");
    var w_tag        = btn.data(\"wtag\");
    var product_id   = btn.data(\"productid\");   // ðŸ”¥ FIX
    var rack_code    = btn.data(\"rackcode\");
    var maxqty       = btn.data(\"maxqty\");
    var box_id = btn.data('boxid'); // or from input where you enter box id

    console.log('PRODUCT ID:', product_id);

    \$(\"#printbarcode\").val(barcodeprint);
    \$(\"#printbarcodename\").val(barcodeprintname);
    \$(\"#printsku\").val(sku);
    \$(\"#printmaxqty\").val(maxqty);

    \$(\"#print_price\").val(price);
    \$(\"#print_wholesale\").val(wholesale);
    \$(\"#print_r_tag\").val(r_tag);
    \$(\"#print_w_tag\").val(w_tag);
    \$(\"#print_product_id\").val(product_id);   // ðŸ”¥ CRITICAL
    \$(\"#print_rack_code\").val(rack_code);
    \$(\"#print_box_id\").val(box_id);
});


});


\t</script>
\t<!--<script>
\t\t\t\$(function () {
\t\t\t\t\$(\".ptsselect\").click(function () {
\t\t\t\t\tvar barcodeprints =
\t\t\t\t\t\$(this).parents(\"tr\").find(\".barcode\").text();
\t\t\t\t\tJsBarcode(\".barcode\", barcodeprints, {
\t\t\t\t\t\tformat: 'code39',
\t\t\t\t\t\tdisplayValue: 'true',
\t\t\t\t\t\tlineColor: \"#24292e\",
\t\t\t\t\t\twidth:1,
\t\t\t\t\t\theight:30,\t
\t\t\t\t\t\tfontSize: 15\t\t\t\t\t
\t\t\t\t\t});\t
\t\t\t\t});
\t\t\t});
\t
\t</script>-->
\t<!-- end barcode-->
\t
\t<!-- Start mass barcode print-->
\t<div class=\"modal\" id=\"massprint\">
     <div class=\"modal-dialog\">
\t\t <div class=\"modal-content masspopup\">
\t\t\t <div class=\"modal-header\">
\t\t\t\t <h4 class=\"modal-title\">";
        // line 433
        yield ($context["text_masspopupheading"] ?? null);
        yield "</h4>
\t\t\t\t <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t </div>
\t\t\t <div class=\"modal-body\">
\t\t\t\t <form method=\"post\" target=\"_blank\" action=\"";
        // line 437
        yield ($context["action_massprintbarcode"] ?? null);
        yield "\">
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t  <label class=\"masspopuplabel\">";
        // line 439
        yield ($context["text_qty"] ?? null);
        yield "</label>
\t\t\t\t\t\t  <input type=\"hidden\" class=\"form-control\" id=\"massprintbarcode\" name=\"massprintbarcode\">\t\t\t\t\t\t 
\t\t\t\t\t\t  <input type=\"number\" class=\"form-control massinputpopup\" name=\"qty\" required>
\t\t\t\t\t\t  <input type=\"submit\" class=\"btn btn-success\" value=\"";
        // line 442
        yield ($context["text_printsall"] ?? null);
        yield "\">
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t\t<button type=\"button\"
\t\t\t\t\t\t\t\t\tclass=\"btn btn-secondary\"
\t\t\t\t\t\t\t\t\tdata-bs-dismiss=\"modal\">
\t\t\t\t\t\t\t";
        // line 448
        yield ($context["text_close"] ?? null);
        yield "</button>
\t\t\t\t\t\t</div>
\t\t\t\t </form>\t\t\t\t 
\t\t\t </div>
\t\t </div>
\t </div>
 </div>


<script>
\$(document).ready(function () {

    \$('#massprint form').on('submit', function (e) {

        let selected = [];

        \$('input[name=\"selected[]\"]:checked').each(function () {
            selected.push({
                product_id: \$(this).val(),
               upc: \$(this).data('upc') || '',
                sku: \$(this).data('sku') || '',
                type: \$(this).data('type') || 'unit'
            });
        });

        if (selected.length === 0) {
            alert('Please select at least one product');
            e.preventDefault();
            return false;
        }

        // âœ… IMPORTANT: stringify ONCE, no HTML escaping
        const json = JSON.stringify(selected);

        \$('#massprintbarcode').val(json);

        console.log('FINAL JSON SENT:', json);
    });

});
</script>


<script>
\$(document).ready(function () {

    // When print popup opens
    \$('#mymodel').on('show.bs.modal', function () {

        // Reset quantity field
        \$(this).find('input[name=\"qty\"]').val('');

    });

});
</script>


\t
\t<!-- end mass barcode print-->
\t<script type=\"text/javascript\"><!--
\t\t\$('#button-approve, #button-unassign').on('click', function(e) {
\t\t\t
\t\t\tif(confirm('";
        // line 511
        yield ($context["text_confirm"] ?? null);
        yield "')) {
\t\t\t\t\$('#form-product').attr('action', this.getAttribute('formAction'));   
\t\t\t}
\t\t\telse { 
\t\t\t\treturn false;
\t\t\t}
\t\t});
\t\t
\t\$('#button-filter').on('click', function() {
    var url = 'index.php?route=extension/purpletree_pos/pos/posproduct&user_token=";
        // line 520
        yield ($context["user_token"] ?? null);
        yield "';\t
    
    var filter_name = \$('input[name=\\'filter_name\\']').val();
    console.log('filter_name:', filter_name);
    if (filter_name) {
        url += '&filter_name=' + encodeURIComponent(filter_name);
    }
    
    var filter_model = \$('input[name=\\'filter_model\\']').val();
    console.log('filter_model:', filter_model);
    if (filter_model) {
        url += '&filter_model=' + encodeURIComponent(filter_model);
    }
    var filter_box_id = \$('input[name=\"filter_box_id\"]').val();
if (filter_box_id) {
    url += '&filter_box_id=' + encodeURIComponent(filter_box_id);
}
    
    var filter_rack_code = \$('input[name=\\'filter_rack_code\\']').val();
    console.log('filter_rack_code:', filter_rack_code);
    if (filter_rack_code) {
        url += '&filter_rack_code=' + encodeURIComponent(filter_rack_code);
    }
    var filter_barcode = \$('input[name=\"filter_barcode\"]').val();
    console.log('filter_barcode:', filter_barcode);
    
    if (filter_barcode) {
        url += '&filter_barcode=' + encodeURIComponent(filter_barcode);
    }

    var filter_price = \$('input[name=\\'filter_price\\']').val();
    console.log('filter_price:', filter_price);
    if (filter_price) {
        url += '&filter_price=' + encodeURIComponent(filter_price);
    }
    
    var filter_quantity = \$('input[name=\\'filter_quantity\\']').val();
    console.log('filter_quantity:', filter_quantity);
    if (filter_quantity) {
        url += '&filter_quantity=' + encodeURIComponent(filter_quantity);
    }
    
    var filter_status = \$('select[name=\\'filter_status\\']').val();
    console.log('filter_status:', filter_status);
    if (filter_status && filter_status != '*') {
        url += '&filter_status=' + encodeURIComponent(filter_status);
    }

    
    var filter_tag = \$('input[name=\\'filter_tag\\']').val();
    console.log('filter_tag:', filter_tag);
    if (filter_tag) {
        url += '&filter_tag=' + encodeURIComponent(filter_tag);
    }
    
    console.log('Final URL:', url);
    location = url;
});
\t//--></script>
\t<script type=\"text/javascript\">
\$(function () {

    function fieldWrapperFor(el) {
        return \$(el).closest('.form-group');
    }

    // PRODUCT NAME
    \$('#input-name').autocomplete({
        appendTo: fieldWrapperFor('#input-name'),
        source: function (request, response) {
            \$.ajax({
                url: 'index.php?route=catalog/product.autocomplete&user_token=";
        // line 591
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
                dataType: 'json',
                success: function (json) {
                    response(\$.map(json, function (item) {
                        return {
                            label: item.name,
                            value: item.product_id
                        };
                    }));
                }
            });
        },
        select: function (item) {
            \$('#input-name').val(item.label);
        }
    });

    // MODEL
    \$('#input-model').autocomplete({
        appendTo: fieldWrapperFor('#input-model'),
        source: function (request, response) {
            \$.ajax({
                url: 'index.php?route=catalog/product.autocomplete&user_token=";
        // line 613
        yield ($context["user_token"] ?? null);
        yield "&filter_model=' + encodeURIComponent(request),
                dataType: 'json',
                success: function (json) {
                    response(\$.map(json, function (item) {
                        return {
                            label: item.model,
                            value: item.product_id
                        };
                    }));
                }
            });
        },
        select: function (item) {
            \$('#input-model').val(item.label);
        }
    });
   \$('#input-rack-code').autocomplete({
    minLength: 1,

    source: function (request, response) {
        \$.ajax({
            url: 'index.php?route=extension/purpletree_pos/pos/posproduct|autocomplete'
                + '&user_token=";
        // line 635
        yield ($context["user_token"] ?? null);
        yield "'
                + '&filter_rack_code=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {

                const seen = {};
                const unique = [];

                \$.each(json, function (i, item) {
                    if (item.rack_code && !seen[item.rack_code]) {
                        seen[item.rack_code] = true;
                        unique.push({
                            label: item.rack_code,
                            value: item.rack_code
                        });
                    }
                });

                response(unique);
            }
        });
    },

    select: function (item) {
        \$('#input-rack-code').val(item.label);
    }
});


\$('#input-box-id').autocomplete({
    minLength: 1,

    source: function (request, response) {
        \$.ajax({
            url: 'index.php?route=extension/purpletree_pos/pos/posproduct|autocomplete'
                + '&user_token=";
        // line 670
        yield ($context["user_token"] ?? null);
        yield "'
                + '&filter_box_id=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {

                const seen = {};
                const unique = [];

                \$.each(json, function (i, item) {
                    if (item.box_id && !seen[item.box_id]) {
                        seen[item.box_id] = true;
                        unique.push({
                            label: item.box_id,
                            value: item.box_id
                        });
                    }
                });

                response(unique);
            }
        });
    },

    // 🔥 THIS IS THE KEY FIX
    select: function (item) {
        \$('#input-box-id').val(item.label);
    }
});


\$('#input-barcode').autocomplete({
    appendTo: fieldWrapperFor('#input-barcode'),
    source: function (request, response) {
        \$.ajax({
            url: 'index.php?route=extension/purpletree_pos/pos/posproduct|autocomplete'
                + '&user_token=";
        // line 705
        yield ($context["user_token"] ?? null);
        yield "'
                + '&filter_barcode=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {

                let suggestions = [];

                \$.each(json, function (i, item) {

                    if (item.sku) {
                        suggestions.push({
                            label: item.sku + ' (SKU)',
                            value: item.sku
                        });
                    }

                    if (item.upc) {
                        suggestions.push({
                            label: item.upc + ' (UPC)',
                            value: item.upc
                        });
                    }

                });

                response(suggestions);
            }
        });
    },

    select: function (event, ui) {
        \$('#input-barcode').val(ui.item.value);
        return false;
    }
});


});
</script>
<script type=\"text/javascript\">
\$(document).on('click', '.btn-reset', function (e) {
    e.preventDefault();

    // 1️⃣ Clear filter inputs
    \$('#input-name').val('');
    \$('#input-model').val('');
    \$('#input-price').val('');
    \$('#input-box-id').val('');
    \$('#input-rack-code').val('');
    \$('#input-barcode').val('');

    // 2️⃣ Reload ONLY Purpletree POS product page
    window.location.href =
        'index.php?route=extension/purpletree_pos/pos/posproduct&user_token=";
        // line 758
        yield ($context["user_token"] ?? null);
        yield "';
});
</script>

</div>
\t";
        // line 763
        yield ($context["footer"] ?? null);
        yield "\t";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/purpletree_pos/admin/view/template/posproduct_list.twig";
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
        return array (  1266 => 763,  1258 => 758,  1202 => 705,  1164 => 670,  1126 => 635,  1101 => 613,  1076 => 591,  1002 => 520,  990 => 511,  924 => 448,  915 => 442,  909 => 439,  904 => 437,  897 => 433,  823 => 361,  819 => 359,  815 => 358,  781 => 327,  760 => 309,  755 => 307,  748 => 303,  734 => 292,  730 => 291,  723 => 286,  717 => 283,  714 => 282,  711 => 281,  699 => 278,  693 => 274,  689 => 273,  687 => 272,  681 => 269,  677 => 268,  673 => 267,  669 => 266,  665 => 265,  661 => 264,  657 => 263,  653 => 262,  649 => 260,  647 => 259,  642 => 256,  640 => 255,  634 => 252,  630 => 250,  626 => 248,  620 => 246,  618 => 245,  614 => 243,  608 => 242,  602 => 240,  600 => 239,  595 => 238,  593 => 237,  589 => 235,  577 => 225,  572 => 223,  568 => 222,  564 => 221,  560 => 219,  557 => 218,  554 => 217,  551 => 216,  548 => 215,  545 => 214,  542 => 213,  539 => 212,  536 => 211,  533 => 210,  530 => 209,  527 => 208,  525 => 207,  521 => 206,  516 => 203,  510 => 202,  505 => 200,  500 => 199,  498 => 198,  494 => 197,  490 => 196,  485 => 194,  481 => 192,  475 => 190,  469 => 188,  467 => 187,  463 => 185,  459 => 183,  455 => 181,  453 => 180,  449 => 178,  445 => 177,  437 => 175,  435 => 174,  428 => 170,  424 => 169,  416 => 168,  412 => 167,  405 => 162,  400 => 161,  398 => 160,  391 => 156,  388 => 155,  380 => 154,  370 => 152,  368 => 151,  364 => 149,  356 => 148,  346 => 146,  344 => 145,  340 => 144,  337 => 143,  329 => 142,  319 => 140,  317 => 139,  314 => 138,  306 => 137,  296 => 135,  294 => 134,  291 => 133,  283 => 132,  273 => 130,  271 => 129,  260 => 127,  255 => 125,  246 => 119,  235 => 111,  227 => 106,  213 => 95,  208 => 92,  197 => 77,  194 => 76,  183 => 67,  179 => 65,  171 => 59,  166 => 58,  155 => 49,  150 => 48,  139 => 39,  134 => 38,  125 => 31,  121 => 29,  113 => 25,  110 => 24,  102 => 20,  100 => 19,  94 => 15,  83 => 13,  79 => 12,  74 => 10,  65 => 8,  59 => 7,  53 => 6,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
{{ column_left }}
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\"><div class=\"float-end\">
\t\t<button class=\"btn btn-success radius-0\" data-original-title=\"{{ text_original_title }}\" data-bs-toggle=\"modal\" id=\"massPrintbarcode\" data-bs-target=\"#massprint\"><i class=\"fa fa-print\"></i> {{ button_massbarcodeprint }}</button>
\t\t<a href=\"{{ add }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_add }}\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" form=\"form-product\" formaction=\"{{ delete }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_delete }}\" class=\"btn btn-danger\" onclick=\"confirm('{{ text_confirm }}') ? \$('#form-product').submit() : false;\"><i class=\"fa-regular fa-trash-can\"></i></button>
      </div>
\t\t\t<h1>{{ heading_title }}</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t{% for breadcrumb in breadcrumbs %}
\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t{% if error_warning %}
\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}
\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t</div>
\t\t{% endif %}
\t\t{% if success %}
\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> {{ success }}
\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t</div>
\t\t{% endif %}
\t\t<div class=\"panel panel-default card\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title card-header\"><i class=\"fa fa-list\"></i> {{ text_list }}</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body card-body\">
\t\t\t\t<div class=\"filter-row\">
        
            <div class=\"filter-item\">
                {#<label for=\"input-name\">{{ entry_name }}</label>#}
                <input type=\"text\" name=\"filter_name\" value=\"{{ filter_name }}\"
                       placeholder=\"{{ entry_name }}\"
                       id=\"input-name\"
                       data-oc-target=\"autocomplete-name\"
                       class=\"form-control\">
                <ul id=\"autocomplete-name\" class=\"dropdown-menu\"></ul>
            </div>
        
            <div class=\"filter-item\">
                {#<label for=\"input-model\">{{ entry_model }}</label>#}
                <input type=\"text\" name=\"filter_model\" value=\"{{ filter_model }}\"
                       placeholder=\"{{ entry_model }}\"
                       id=\"input-model\"
                       data-oc-target=\"autocomplete-model\"
                       class=\"form-control\">
                <ul id=\"autocomplete-model\" class=\"dropdown-menu\"></ul>
            </div>
        
            <div class=\"filter-item\">
                {#<label for=\"input-price\">{{ entry_price }}</label>#}
                <input type=\"text\" name=\"filter_price\" value=\"{{ filter_price }}\"
                       placeholder=\"{{ entry_price }}\"
                       id=\"input-price\"
                       class=\"form-control\">
            </div>
            <div class=\"filter-item\">
                {#<label for=\"input-quantity\">{{ entry_quantity }}</label>#}
                <input type=\"text\"
                   name=\"filter_box_id\"
                   value=\"{{ filter_box_id }}\"
                   placeholder=\"Box ID\"
                   data-oc-target=\"autocomplete-box-id\"
                   id=\"input-box-id\"
                   class=\"form-control\">
                   <ul id=\"autocomplete-box-id\" class=\"dropdown-menu\"></ul>
            </div>
            <div class=\"filter-item\">
                {#<label>Rack Code</label>#}
                <input type=\"text\" name=\"filter_rack_code\"
                       value=\"{{ filter_rack_code }}\"
                       id=\"input-rack-code\"
                       placeholder=\"Rack code\"
                       data-oc-target=\"autocomplete-rack-code\"
                       class=\"form-control\">
                <ul id=\"autocomplete-rack-code\" class=\"dropdown-menu\"></ul>
            </div>

                {#<div class=\"filter-item\">
                    <label for=\"input-tag\">{{ entry_prodcttag }}</label>
                    <input type=\"text\" name=\"filter_tag\" value=\"{{ filter_tag }}\"
                           placeholder=\"{{ entry_prodcttag }}\"
                           id=\"input-tag\"
                           class=\"form-control\">
                </div>#}
                <div class=\"filter-item\">
                    <input type=\"text\"
                           name=\"filter_barcode\"
                           value=\"{{ filter_barcode }}\"
                           id=\"input-barcode\"
                           placeholder=\"Barcode\"
                           class=\"form-control\">
                           <ul id=\"autocomplete-barcode\" class=\"dropdown-menu\"></ul>
                </div>


                <div class=\"filter-btn\">
                    <label>&nbsp;</label>
                    <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\">
                        <i class=\"fa fa-filter\"></i> {{ button_filter }}
                    </button>
                </div>
                 <button type=\"reset\"
                  data-bs-toggle=\"tooltip\"
                  title=\"{{ button_reset }}\"
                  class=\"btn btn-outline-secondary btn-reset\">
            <i class=\"fa-solid fa-filter-circle-xmark\"></i>
          </button>
            
            </div>
            \t\t\t
\t\t\t\t</div>
\t\t\t\t<form action=\"{{ delete }}\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\">
\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ column_image }}</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">Type</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><a href=\"{{ sort_box_id }}\" {% if sort == 'p.box_id' %}class=\"{{ order|lower }}\"{% endif %}>Box ID</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">Rack</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-start\">{% if sort == 'pd.name' %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ sort_name }}\" class=\"{{ order|lower }}\">{{ column_name }}</a>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ sort_name }}\">{{ column_name }}</a>
\t\t\t\t\t\t\t\t\t{% endif %}</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-start\">{% if sort == 'p.model' %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ sort_model }}\" class=\"{{ order|lower }}\">{{ column_model }}</a>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ sort_model }}\">{{ column_model }}</a>
\t\t\t\t\t\t\t\t\t{% endif %}</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-end\">{% if sort == 'p.price' %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ sort_price }}\" class=\"{{ order|lower }}\">{{ column_price }}</a>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ sort_price }}\">{{ column_price }}</a>
\t\t\t\t\t\t\t\t\t{% endif %}</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ column_barcode }}</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-end\">{% if sort == 'p.quantity' %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ sort_quantity }}\" class=\"{{ order|lower }}\">{{ column_quantity }}</a>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ sort_quantity }}\">{{ column_quantity }}</a>
\t\t\t\t\t\t\t\t\t{% endif %}</td>
\t\t\t\t\t\t\t\t\t<th class=\"text-end\">Box Quantity</th>
\t\t\t\t\t\t\t\t\t<td class=\"text-end\">{% if sort == 'p.status' %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ sort_status }}\" class=\"{{ order|lower }}\">{{ column_status }}</a>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ sort_status }}\">{{ column_status }}</a>
\t\t\t\t\t\t\t\t\t{% endif %}</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-end\">{{ column_action }}</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t{% if products %}
\t\t\t\t\t\t\t\t{% for product in products %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<!--start barcode-->
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
                                        <input type=\"checkbox\"
                                               name=\"selected[]\"
                                               value=\"{{ product.product_id }}\"
                                               data-type=\"{% if product.upc %}box{% else %}unit{% endif %}\"
                                               data-sku=\"{{ product.sku }}\"
                                               data-upc=\"{{ product.upc }}\" />
                                    </td>

\t\t\t\t\t\t\t\t\t<!--start barcode-->
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{% if product.image %}
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ product.image }}\" alt=\"{{ product.name }}\" class=\"img-thumbnail\" />
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span>
\t\t\t\t\t\t\t\t\t{% endif %}</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
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
\t\t\t\t\t\t\t\t\t<td class=\"barcodename text-start\">{{ product.name }}</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-start\">{{ product.model }}</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-end\">{% if product.special %}
\t\t\t\t\t\t\t\t\t\t<span class=\"barcodeprice ptsc-sellprod-textdecor\" style=\"color:gold;text-decoration: line-through;\">{{ product.wholesale_price }}</span><br/>
\t\t\t\t\t\t\t\t\t\t<div class=\"barcodespecialprice text-danger\">{{ product.special }}</div>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<span class=\"barcodeprice ptsc-sellprod-textdecor\"style=\"color:gold;\">{{ product.wholesale_price }}</span>
\t\t\t\t\t\t\t\t\t{% endif %}</td>
\t\t\t\t\t\t\t\t\t<!--start barcode-->
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">\t\t\t\t\t\t\t\t
                                      {% if product.upc %}                                      \t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t     {% set result_barcode = product.upc %}
\t\t\t\t\t\t\t\t\t  {% elseif product.ean %}
\t\t\t\t\t\t\t\t\t\t  {% set result_barcode = product.ean %}
\t\t\t\t\t\t\t\t\t  {% elseif product.mpn %}
\t\t\t\t\t\t\t\t\t\t  {% set result_barcode = product.mpn %}
\t\t\t\t\t\t\t\t\t  {% elseif product.jan %}
\t\t\t\t\t\t\t\t\t\t  {% set result_barcode = product.jan %}
\t\t\t\t\t\t\t\t\t  {% elseif product.isbn %}
\t\t\t\t\t\t\t\t\t\t  {% set result_barcode = product.isbn %}
\t\t\t\t\t\t\t\t\t  {% elseif product.sku %}
\t\t\t\t\t\t\t\t\t\t  {% set result_barcode = product.sku %}
\t\t\t\t\t\t\t\t\t {% endif %}
\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t  <svg class=\"barcode\"
                                         data-barcode=\"{{ result_barcode }}\"
                                         data-box=\"{{ product.box_code }}\"
                                         data-sku=\"{{ product.sku }}\"
                                         jsbarcode-format=\"code39\"
                                         jsbarcode-value=\"{{ result_barcode }}\"
                                         jsbarcode-displayValue=\"false\"
                                         jsbarcode-width=\"1px\"
                                         jsbarcode-height=\"30px\"
                                         jsbarcode-fontSize=\"15px\">
                                    </svg>

\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t{#<td class=\"barcode-sku\" data-sku=\"{{ product.sku }}\" style=\"display:none;\">{{ product.sku }}</td>#}
\t\t\t\t\t\t\t\t\t<!--start barcode-->
\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t{% if product.quantity <= 0 %}
\t\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\" style=\"color:yellow;\">{{ product.quantity }}</span>
\t\t\t\t\t\t\t\t\t\t{% elseif product.quantity <= 5 %}
\t\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\"style=\"color:yellow;\">{{ product.quantity }}</span>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\"style=\"color:yellow;\">{{ product.quantity }}</span>
\t\t\t\t\t\t\t\t\t{% endif %}</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
                                        {% if product.upc %}
                                            {{ product.max_quantity }}
                                        {% else %}
                                            -
                                        {% endif %}
                                    </td>

\t\t\t\t\t\t\t\t\t<td class=\"text-start\">{{ product.status }}</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-end\">

                                    {% if product.box_code %}
                                       
                                        <button type=\"button\" class=\"btn btn-secondary\" disabled title=\"Barcode printing disabled for BOX\"><i class=\"fa fa-print\"></i></button>
                                    {% else %}
                                        {# UNIT â†’ Allow print #}
                                        <button type=\"button\"
                                                class=\"ptsbarcodeselect btn-success btn\"
                                                data-maxqty=\"{{ product.max_quantity }}\"
                                                data-price=\"{{ product.price_raw }}\"
                                                data-wholesale=\"{{ product.wholesale_price }}\"
                                                data-rtag=\"{{ product.r_tag }}\"
                                                data-wtag=\"{{ product.w_tag }}\"
                                                data-rackcode=\"{{ product.rack_code }}\"
                                                data-boxid=\"{{ product.box_id }}\"
                                                data-productid=\"{{ product.product_id }}\"
                                                data-bs-toggle=\"modal\"
                                                data-bs-target=\"#mymodel\"
                                                {% if product.upc %}
                                                    disabled
                                                {% endif %}>
                                            <i class=\"fa fa-print\"></i>
                                        </button>
                                    {% endif %}
\t\t\t\t\t\t\t\t\t<a href=\"{{ product.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa fa-pencil fas fa-edit\"></i></a></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\" colspan=\"10\">{{ text_no_results }}</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 text-start\">{{ pagination }}</div>
\t\t\t\t\t<div class=\"col-sm-6 text-end\">{{ results }}</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Start barcode-->
\t<div class=\"modal\" id=\"mymodel\">
     <div class=\"modal-dialog\">
\t\t <div class=\"modal-content masspopup\">
\t\t\t <div class=\"modal-header\">
\t\t\t
\t\t\t\t <h6 class=\"modal-title\" style =\"color:black\">{{ text_popupheading }}</h6>
\t\t\t\t  <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t </div>
\t\t\t <div class=\"modal-body\">
\t\t\t\t <form method=\"post\" target=\"_blank\" action=\"{{ action_printbarcode }}\">
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t  <label class=\"masspopuplabel\" style =\"color:black\">{{ text_qty }}</label>
\t\t\t\t\t\t  <input type=\"hidden\" class\"form-control\" id=\"printbarcode\" name=\"printbarcode\">
\t\t\t\t\t\t  <input type=\"hidden\" class\"form-control\" id=\"printbarcodename\" name=\"printbarcodename\">
\t\t\t\t\t\t  <input type=\"hidden\" class\"form-control\" id=\"printbarcodeprice\" name=\"printbarcodeprice\">
\t\t\t\t\t\t  <input type=\"hidden\" id=\"printsku\" name=\"printsku\">
\t\t\t\t\t\t  <input type=\"hidden\" id=\"printmaxqty\" name=\"printmaxqty\">
\t\t\t\t\t\t  <input type=\"hidden\" id=\"print_r_tag\" name=\"print_r_tag\">
                            <input type=\"hidden\" id=\"print_w_tag\" name=\"print_w_tag\">
                            <input type=\"hidden\" id=\"print_price\" name=\"print_price\">
                            <input type=\"hidden\" id=\"print_product_id\" name=\"print_product_id\">
                            <input type=\"hidden\" id=\"print_rack_code\" name=\"print_rack_code\">
                            <input type=\"hidden\" id=\"print_box_id\" name=\"print_box_id\">
                            <input type=\"hidden\" id=\"print_wholesale\" name=\"print_wholesale\">
\t\t\t\t\t\t  <!-- <input type=\"hidden\" class\"form-control\" id=\"printbarcodespecialprice\" name=\"printbarcodespecialprice\"> -->
\t\t\t\t\t\t  <input type=\"number\" class\"form-control massinputpopup\" style =\"color:black\" name=\"qty\" required>
\t\t\t\t\t\t  
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t\t<button type=\"button\"class=\"btn btn-secondary\"data-bs-dismiss=\"modal\">{{ text_close }}</button>
\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-success\" value=\"Print\">
\t\t\t\t\t\t</div>
\t\t\t\t </form>\t\t\t\t 
\t\t\t </div>
\t\t </div>
\t </div>
 </div>
 <style>
 .filter-row {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    align-items: flex-end;
}

.filter-item {
    min-width: 160px;
    flex: 1;
}

.filter-item label {
    font-size: 12px;
    margin-bottom: 4px;
    display: block;
}

.filter-btn {
    min-width: 120px;
}
</style>
 <link rel=\"stylesheet\" href=\"{{baseurl}}extension/purpletree_pos/admin/view/stylesheet/posproduct/customproduct.css\">    
<script type=\"text/javascript\" src=\"{{baseurl}}extension/purpletree_pos/admin/view/javascript/ptsbarcode/JsBarcode.all.min.js\"></script> 
{#<script type=\"text/javascript\" src=\"{{baseurl}}extension/purpletree_pos/admin/view/javascript/ptsbarcode/jquery.min.js\"></script> #}
\t
\t<script type=\"text/javascript\">\t    
\t\tJsBarcode(\".barcode\").init();\t
\t</script>
\t
\t
\t<script>
\t\t\t\$(document).ready(function () {

    \$(document).on('click', '.ptsbarcodeselect', function () {

    var btn = \$(this);                 // ALWAYS the button
    var row = btn.closest(\"tr\");

    var barcodeprint     = row.find(\".barcode\").data(\"barcode\");
    var sku              = row.find(\".barcode\").data(\"sku\");
    var barcodeprintname = row.find(\".barcodename\").text().trim();

    var price        = btn.data(\"price\");
    var wholesale    = btn.data(\"wholesale\");
    var r_tag        = btn.data(\"rtag\");
    var w_tag        = btn.data(\"wtag\");
    var product_id   = btn.data(\"productid\");   // ðŸ”¥ FIX
    var rack_code    = btn.data(\"rackcode\");
    var maxqty       = btn.data(\"maxqty\");
    var box_id = btn.data('boxid'); // or from input where you enter box id

    console.log('PRODUCT ID:', product_id);

    \$(\"#printbarcode\").val(barcodeprint);
    \$(\"#printbarcodename\").val(barcodeprintname);
    \$(\"#printsku\").val(sku);
    \$(\"#printmaxqty\").val(maxqty);

    \$(\"#print_price\").val(price);
    \$(\"#print_wholesale\").val(wholesale);
    \$(\"#print_r_tag\").val(r_tag);
    \$(\"#print_w_tag\").val(w_tag);
    \$(\"#print_product_id\").val(product_id);   // ðŸ”¥ CRITICAL
    \$(\"#print_rack_code\").val(rack_code);
    \$(\"#print_box_id\").val(box_id);
});


});


\t</script>
\t<!--<script>
\t\t\t\$(function () {
\t\t\t\t\$(\".ptsselect\").click(function () {
\t\t\t\t\tvar barcodeprints =
\t\t\t\t\t\$(this).parents(\"tr\").find(\".barcode\").text();
\t\t\t\t\tJsBarcode(\".barcode\", barcodeprints, {
\t\t\t\t\t\tformat: 'code39',
\t\t\t\t\t\tdisplayValue: 'true',
\t\t\t\t\t\tlineColor: \"#24292e\",
\t\t\t\t\t\twidth:1,
\t\t\t\t\t\theight:30,\t
\t\t\t\t\t\tfontSize: 15\t\t\t\t\t
\t\t\t\t\t});\t
\t\t\t\t});
\t\t\t});
\t
\t</script>-->
\t<!-- end barcode-->
\t
\t<!-- Start mass barcode print-->
\t<div class=\"modal\" id=\"massprint\">
     <div class=\"modal-dialog\">
\t\t <div class=\"modal-content masspopup\">
\t\t\t <div class=\"modal-header\">
\t\t\t\t <h4 class=\"modal-title\">{{ text_masspopupheading }}</h4>
\t\t\t\t <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t </div>
\t\t\t <div class=\"modal-body\">
\t\t\t\t <form method=\"post\" target=\"_blank\" action=\"{{ action_massprintbarcode }}\">
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t  <label class=\"masspopuplabel\">{{ text_qty }}</label>
\t\t\t\t\t\t  <input type=\"hidden\" class=\"form-control\" id=\"massprintbarcode\" name=\"massprintbarcode\">\t\t\t\t\t\t 
\t\t\t\t\t\t  <input type=\"number\" class=\"form-control massinputpopup\" name=\"qty\" required>
\t\t\t\t\t\t  <input type=\"submit\" class=\"btn btn-success\" value=\"{{ text_printsall }}\">
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t\t<button type=\"button\"
\t\t\t\t\t\t\t\t\tclass=\"btn btn-secondary\"
\t\t\t\t\t\t\t\t\tdata-bs-dismiss=\"modal\">
\t\t\t\t\t\t\t{{ text_close }}</button>
\t\t\t\t\t\t</div>
\t\t\t\t </form>\t\t\t\t 
\t\t\t </div>
\t\t </div>
\t </div>
 </div>


<script>
\$(document).ready(function () {

    \$('#massprint form').on('submit', function (e) {

        let selected = [];

        \$('input[name=\"selected[]\"]:checked').each(function () {
            selected.push({
                product_id: \$(this).val(),
               upc: \$(this).data('upc') || '',
                sku: \$(this).data('sku') || '',
                type: \$(this).data('type') || 'unit'
            });
        });

        if (selected.length === 0) {
            alert('Please select at least one product');
            e.preventDefault();
            return false;
        }

        // âœ… IMPORTANT: stringify ONCE, no HTML escaping
        const json = JSON.stringify(selected);

        \$('#massprintbarcode').val(json);

        console.log('FINAL JSON SENT:', json);
    });

});
</script>


<script>
\$(document).ready(function () {

    // When print popup opens
    \$('#mymodel').on('show.bs.modal', function () {

        // Reset quantity field
        \$(this).find('input[name=\"qty\"]').val('');

    });

});
</script>


\t
\t<!-- end mass barcode print-->
\t<script type=\"text/javascript\"><!--
\t\t\$('#button-approve, #button-unassign').on('click', function(e) {
\t\t\t
\t\t\tif(confirm('{{ text_confirm }}')) {
\t\t\t\t\$('#form-product').attr('action', this.getAttribute('formAction'));   
\t\t\t}
\t\t\telse { 
\t\t\t\treturn false;
\t\t\t}
\t\t});
\t\t
\t\$('#button-filter').on('click', function() {
    var url = 'index.php?route=extension/purpletree_pos/pos/posproduct&user_token={{ user_token }}';\t
    
    var filter_name = \$('input[name=\\'filter_name\\']').val();
    console.log('filter_name:', filter_name);
    if (filter_name) {
        url += '&filter_name=' + encodeURIComponent(filter_name);
    }
    
    var filter_model = \$('input[name=\\'filter_model\\']').val();
    console.log('filter_model:', filter_model);
    if (filter_model) {
        url += '&filter_model=' + encodeURIComponent(filter_model);
    }
    var filter_box_id = \$('input[name=\"filter_box_id\"]').val();
if (filter_box_id) {
    url += '&filter_box_id=' + encodeURIComponent(filter_box_id);
}
    
    var filter_rack_code = \$('input[name=\\'filter_rack_code\\']').val();
    console.log('filter_rack_code:', filter_rack_code);
    if (filter_rack_code) {
        url += '&filter_rack_code=' + encodeURIComponent(filter_rack_code);
    }
    var filter_barcode = \$('input[name=\"filter_barcode\"]').val();
    console.log('filter_barcode:', filter_barcode);
    
    if (filter_barcode) {
        url += '&filter_barcode=' + encodeURIComponent(filter_barcode);
    }

    var filter_price = \$('input[name=\\'filter_price\\']').val();
    console.log('filter_price:', filter_price);
    if (filter_price) {
        url += '&filter_price=' + encodeURIComponent(filter_price);
    }
    
    var filter_quantity = \$('input[name=\\'filter_quantity\\']').val();
    console.log('filter_quantity:', filter_quantity);
    if (filter_quantity) {
        url += '&filter_quantity=' + encodeURIComponent(filter_quantity);
    }
    
    var filter_status = \$('select[name=\\'filter_status\\']').val();
    console.log('filter_status:', filter_status);
    if (filter_status && filter_status != '*') {
        url += '&filter_status=' + encodeURIComponent(filter_status);
    }

    
    var filter_tag = \$('input[name=\\'filter_tag\\']').val();
    console.log('filter_tag:', filter_tag);
    if (filter_tag) {
        url += '&filter_tag=' + encodeURIComponent(filter_tag);
    }
    
    console.log('Final URL:', url);
    location = url;
});
\t//--></script>
\t<script type=\"text/javascript\">
\$(function () {

    function fieldWrapperFor(el) {
        return \$(el).closest('.form-group');
    }

    // PRODUCT NAME
    \$('#input-name').autocomplete({
        appendTo: fieldWrapperFor('#input-name'),
        source: function (request, response) {
            \$.ajax({
                url: 'index.php?route=catalog/product.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
                dataType: 'json',
                success: function (json) {
                    response(\$.map(json, function (item) {
                        return {
                            label: item.name,
                            value: item.product_id
                        };
                    }));
                }
            });
        },
        select: function (item) {
            \$('#input-name').val(item.label);
        }
    });

    // MODEL
    \$('#input-model').autocomplete({
        appendTo: fieldWrapperFor('#input-model'),
        source: function (request, response) {
            \$.ajax({
                url: 'index.php?route=catalog/product.autocomplete&user_token={{ user_token }}&filter_model=' + encodeURIComponent(request),
                dataType: 'json',
                success: function (json) {
                    response(\$.map(json, function (item) {
                        return {
                            label: item.model,
                            value: item.product_id
                        };
                    }));
                }
            });
        },
        select: function (item) {
            \$('#input-model').val(item.label);
        }
    });
   \$('#input-rack-code').autocomplete({
    minLength: 1,

    source: function (request, response) {
        \$.ajax({
            url: 'index.php?route=extension/purpletree_pos/pos/posproduct|autocomplete'
                + '&user_token={{ user_token }}'
                + '&filter_rack_code=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {

                const seen = {};
                const unique = [];

                \$.each(json, function (i, item) {
                    if (item.rack_code && !seen[item.rack_code]) {
                        seen[item.rack_code] = true;
                        unique.push({
                            label: item.rack_code,
                            value: item.rack_code
                        });
                    }
                });

                response(unique);
            }
        });
    },

    select: function (item) {
        \$('#input-rack-code').val(item.label);
    }
});


\$('#input-box-id').autocomplete({
    minLength: 1,

    source: function (request, response) {
        \$.ajax({
            url: 'index.php?route=extension/purpletree_pos/pos/posproduct|autocomplete'
                + '&user_token={{ user_token }}'
                + '&filter_box_id=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {

                const seen = {};
                const unique = [];

                \$.each(json, function (i, item) {
                    if (item.box_id && !seen[item.box_id]) {
                        seen[item.box_id] = true;
                        unique.push({
                            label: item.box_id,
                            value: item.box_id
                        });
                    }
                });

                response(unique);
            }
        });
    },

    // 🔥 THIS IS THE KEY FIX
    select: function (item) {
        \$('#input-box-id').val(item.label);
    }
});


\$('#input-barcode').autocomplete({
    appendTo: fieldWrapperFor('#input-barcode'),
    source: function (request, response) {
        \$.ajax({
            url: 'index.php?route=extension/purpletree_pos/pos/posproduct|autocomplete'
                + '&user_token={{ user_token }}'
                + '&filter_barcode=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {

                let suggestions = [];

                \$.each(json, function (i, item) {

                    if (item.sku) {
                        suggestions.push({
                            label: item.sku + ' (SKU)',
                            value: item.sku
                        });
                    }

                    if (item.upc) {
                        suggestions.push({
                            label: item.upc + ' (UPC)',
                            value: item.upc
                        });
                    }

                });

                response(suggestions);
            }
        });
    },

    select: function (event, ui) {
        \$('#input-barcode').val(ui.item.value);
        return false;
    }
});


});
</script>
<script type=\"text/javascript\">
\$(document).on('click', '.btn-reset', function (e) {
    e.preventDefault();

    // 1️⃣ Clear filter inputs
    \$('#input-name').val('');
    \$('#input-model').val('');
    \$('#input-price').val('');
    \$('#input-box-id').val('');
    \$('#input-rack-code').val('');
    \$('#input-barcode').val('');

    // 2️⃣ Reload ONLY Purpletree POS product page
    window.location.href =
        'index.php?route=extension/purpletree_pos/pos/posproduct&user_token={{ user_token }}';
});
</script>

</div>
\t{{ footer }}\t", "extension/purpletree_pos/admin/view/template/posproduct_list.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY/extension/purpletree_pos/admin/view/template/posproduct_list.twig");
    }
}
