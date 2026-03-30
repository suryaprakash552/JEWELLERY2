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

/* admin/view/template/catalog/product_form.twig */
class __TwigTemplate_7de5e143e29a947eef221784a4492dc9 extends Template
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
<style>
.price-highlight-area {
    background: rgb(190 194 74 / 67%);
    padding: 15px;
    border-radius: 12px;
    margin-top: 10px;
}

.price-highlight-area .form-control,
.price-highlight-area .form-select {
    background-color: #fff;
}

</style>
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-product\" data-bs-toggle=\"tooltip\" title=\"";
        // line 20
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 21
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 22
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 25
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 25);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 25);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 31
        if (($context["master_id"] ?? null)) {
            // line 32
            yield "      <div class=\"alert alert-warning\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
            yield ($context["text_variant"] ?? null);
            yield "</div>
    ";
        }
        // line 34
        yield "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 35
        yield ($context["text_form"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-product\" action=\"";
        // line 37
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 39
        yield ($context["tab_general"] ?? null);
        yield "</a></li>
            ";
        // line 41
        yield "            ";
        // line 42
        yield "            ";
        // line 43
        yield "            ";
        // line 44
        yield "            ";
        // line 45
        yield "            ";
        // line 46
        yield "            <li class=\"nav-item\"><a href=\"#tab-image\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        yield ($context["tab_image"] ?? null);
        yield "</a></li>
            ";
        // line 48
        yield "            ";
        // line 49
        yield "            ";
        // line 50
        yield "            <li class=\"nav-item\"><a href=\"#tab-report\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        yield ($context["tab_report"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-batch\" data-bs-toggle=\"tab\" class=\"nav-link\">Batch Details</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" style=\"display:none\">
                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 57
            yield "                  <li class=\"nav-item\"><a href=\"#language-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57);
            yield "\" data-bs-toggle=\"tab\" class=\"nav-link";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 57)) {
                yield " active";
            }
            yield "\"><img src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 57);
            yield "\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 57);
            yield "\"/> ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 57);
            yield "</a></li>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "              </ul>
              <div class=\"tab-content\">
                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 62
            yield "                  <div id=\"language-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 62);
            yield "\" class=\"tab-pane";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 62)) {
                yield " active";
            }
            yield "\">
                      <div class=\"row align-items-end\" style=\"gap:5px;\">
                        <div class=\"col-sm-2\">
                            <label class=\"col-form-label\">";
            // line 65
            yield ($context["entry_category"] ?? null);
            yield "</label>
                            
                              <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
            // line 67
            yield ($context["entry_category"] ?? null);
            yield "\" id=\"input-category\" data-oc-target=\"autocomplete-category\" class=\"form-control\" autocomplete=\"off\"/>
                              <ul id=\"autocomplete-category\" class=\"dropdown-menu\"></ul>
                              <div class=\"input-group\">
                                <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                                  <table id=\"product-category\" class=\"table m-0\">
                                    <tbody>
                                      ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["product_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
                // line 74
                yield "                                        <tr id=\"product-category-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 74);
                yield "\">
                                          <td>";
                // line 75
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_category"], "name", [], "any", false, false, false, 75);
                yield "<input type=\"hidden\" name=\"product_category[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 75);
                yield "\"/></td>
                                          <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                                        </tr>
                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product_category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            yield "                                    </tbody>
                                  </table>
                                </div>
                                ";
            // line 82
            if (($context["master_id"] ?? null)) {
                // line 83
                yield "                                  <div class=\"input-group-text\">
                                    <div class=\"form-check form-switch\">
                                      <input type=\"checkbox\" name=\"override[product_category]\" value=\"1\" id=\"input-variant-category\" data-oc-toggle=\"switch\" data-oc-target=\"#input-category, #product-category\" class=\"form-check-input\"";
                // line 85
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_category", [], "any", false, false, false, 85)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-category\" class=\"form-check-label\"></label>
                                    </div>
                                  </div>
                                ";
            }
            // line 89
            yield "                              </div>
                              <div class=\"form-text\">";
            // line 90
            yield ($context["help_category"] ?? null);
            yield "</div>
                            
                          </div>
                          <div class=\"col-sm-1\">
                          </div>
                        <div class=\"col-sm-2\">
                            <label class=\"col-form-label\">Barcode Type</label>
                            <select id=\"barcodeType\" name=\"barcode_type\" class=\"form-select\">
                                <option value=\"unit\" ";
            // line 98
            if ( !($context["upc"] ?? null)) {
                yield "selected";
            }
            yield ">Unit</option>
                                <option value=\"box\" ";
            // line 99
            if (($context["upc"] ?? null)) {
                yield "selected";
            }
            yield ">Box</option>
                            </select>
                    
                            <input type=\"hidden\" id=\"skuValue\" value=\"";
            // line 102
            yield ($context["sku"] ?? null);
            yield "\">
                            <input type=\"hidden\" id=\"upcValue\" value=\"";
            // line 103
            yield ($context["upc"] ?? null);
            yield "\">
                        </div>
                        <div class=\"col-sm-2\">
                            <label class=\"col-form-label\">Box ID</label>
                            <input type=\"text\" name=\"box_id\" id=\"input-box-id\" value=\"";
            // line 107
            yield ($context["box_id"] ?? null);
            yield "\"class=\"form-control\"placeholder=\"Enter Box ID\">
                        </div>
                        <div class=\"col-sm-2 required\">
                          <label for=\"input-name-";
            // line 110
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 110);
            yield "\" class=\"col-form-label\">";
            yield ($context["entry_name"] ?? null);
            yield "</label>
                          
                            <div class=\"input-group\">
                              <input type=\"text\" name=\"product_description[";
            // line 113
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 113);
            yield "][name]\" value=\"";
            yield (((($_v0 = ($context["product_description"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 113)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["product_description"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 113)] ?? null) : null), "name", [], "any", false, false, false, 113)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_name"] ?? null);
            yield "\" id=\"input-name-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 113);
            yield "\" class=\"form-control\"/>
                              ";
            // line 114
            if (($context["master_id"] ?? null)) {
                // line 115
                yield "                                <div class=\"input-group-text\">
                                  <div class=\"form-check form-switch\">
                                    <input type=\"checkbox\" name=\"override[product_description][";
                // line 117
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 117);
                yield "][name]\" value=\"1\" id=\"input-variant-name-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 117);
                yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-name-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 117);
                yield "\" class=\"form-check-input\"";
                if (CoreExtension::getAttribute($this->env, $this->source, (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 117)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 117)] ?? null) : null), "name", [], "any", false, false, false, 117)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-name-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 117);
                yield "\" class=\"form-check-label\"></label>
                                  </div>
                                </div>
                              ";
            }
            // line 121
            yield "                            </div>
                            <div id=\"error-name-";
            // line 122
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 122);
            yield "\" class=\"invalid-feedback\"></div>
                      </div>
                        <div class=\"col-sm-2\" style=\"display:none\">
                          <label class=\"col-form-label\">Rack</label>
                              <input type=\"text\" name=\"rack_code\" id=\"input-rack\" class=\"form-control\"value=\"RACK-";
            // line 126
            yield ($context["rack_number"] ?? null);
            yield "\"placeholder=\"RACK-01\"autocomplete=\"off\"oninput=\"fixRackPrefix(this)\"onkeydown=\"protectRackPrefix(event, this)\">
                        </div>
                    </div>
                    <div class=\"row mb-5\">
                      <div class=\"col-sm-4\" style=\"display:none\">
                      <label for=\"input-meta-title-";
            // line 131
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 131);
            yield "\" class=\"col-form-label\">";
            yield ($context["entry_meta_title"] ?? null);
            yield "</label>
                      
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[";
            // line 134
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 134);
            yield "][meta_title]\" value=\"";
            yield (((($_v3 = ($context["product_description"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 134)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v4 = ($context["product_description"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 134)] ?? null) : null), "meta_title", [], "any", false, false, false, 134)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_meta_title"] ?? null);
            yield "\" id=\"input-meta-title-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 134);
            yield "\" class=\"form-control\"/>
                          ";
            // line 135
            if (($context["master_id"] ?? null)) {
                // line 136
                yield "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 138
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 138);
                yield "][meta_title]\" value=\"1\" id=\"input-variant-meta-title-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 138);
                yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-title-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 138);
                yield "\" class=\"form-check-input\"";
                if (CoreExtension::getAttribute($this->env, $this->source, (($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 138)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 138)] ?? null) : null), "meta_title", [], "any", false, false, false, 138)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-meta-title-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 138);
                yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 142
            yield "                        </div>
                        <div id=\"error-meta-title-";
            // line 143
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 143);
            yield "\" class=\"invalid-feedback\"></div>
                      </div>
                      <input type=\"hidden\" name=\"master_id\" value=\"";
            // line 145
            yield ($context["master_id"] ?? null);
            yield "\"/>
                    ";
            // line 147
            yield "                      ";
            // line 148
            yield "                     
                      ";
            // line 150
            yield "                      ";
            // line 151
            yield "                      ";
            // line 152
            yield "                      ";
            // line 153
            yield "                      ";
            // line 154
            yield "                      ";
            // line 155
            yield "                      ";
            // line 156
            yield "                      ";
            // line 157
            yield "                      ";
            // line 158
            yield "                      ";
            // line 159
            yield "                      ";
            // line 160
            yield "                     
                    ";
            // line 162
            yield "                    
                    
                     ";
            // line 165
            yield "                     <hr style=\"color:white\">

                <!-- Received Price -->
                ";
            // line 178
            yield "                  
                  
                  <h3 style=\"margin-top: 13px;\">Price Details</h3>
                  <hr style=\"color:white\">
                <div class=\"price-highlight-area\">
                    <div class=\"row\">

                      <div class=\"col-sm-4\">
                        <label for=\"input-wholesale-price\" class=\"col-form-label\">
                          <b style=\"color: lightgoldenrodyellow;font-style: italic;\">Wholesale Price</b>
                        </label>
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"wholesale_price\" value=\"";
            // line 190
            yield ($context["wholesale_price"] ?? null);
            yield "\"
                                 placeholder=\"";
            // line 191
            yield ($context["entry_price"] ?? null);
            yield "\" id=\"input-wholesale-price\"
                                 class=\"form-control\"/>
                          ";
            // line 193
            if (($context["master_id"] ?? null)) {
                // line 194
                yield "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[wholesale_price]\" value=\"1\"
                                       id=\"input-variant-wholesale-price\"
                                       data-oc-toggle=\"switch\"
                                       data-oc-target=\"#input-wholesale-price\"
                                       class=\"form-check-input\"";
                // line 200
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "wholesale_price", [], "any", false, false, false, 200)) {
                    yield " checked";
                }
                yield "/>
                                <label for=\"input-variant-wholesale-price\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 205
            yield "                        </div>
                      </div>
                    
                      <div class=\"col-sm-4\">
                        <label class=\"col-form-label\" style =\"color:black\">Retail Price</label>
                        <input type=\"text\" name=\"price\" value=\"";
            // line 210
            yield ($context["price"] ?? null);
            yield "\" id=\"input-price\" class=\"form-control\"/>
                      </div>
                    
                      <div class=\"col-sm-4\">
                        <label class=\"col-form-label\" style =\"color:black\">Additional Price (%)</label>
                        <input type=\"text\" readonly name=\"additional_price\" value=\"25\"
                               id=\"input-additional-price\" class=\"form-control\"/>
                      </div>
                    
                      <div class=\"col-sm-4\" style=\"display:none\">
                        <label for=\"input-tax-class\" class=\"col-form-label\" style =\"color:black\">";
            // line 220
            yield ($context["entry_tax_class"] ?? null);
            yield "</label>
                        <div class=\"input-group\">
                          <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-select\">
                            <option value=\"0\">";
            // line 223
            yield ($context["text_none"] ?? null);
            yield "</option>
                            ";
            // line 224
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["tax_classes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
                // line 225
                yield "                              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 225);
                yield "\"
                                ";
                // line 226
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 226) == ($context["tax_class_id"] ?? null))) {
                    yield " selected";
                }
                yield ">
                                ";
                // line 227
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 227);
                yield "
                              </option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tax_class'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 230
            yield "                          </select>
                        </div>
                      </div>
                      <div class=\"col-sm-4\" required>
                        <label class=\"col-form-label\" style=\"color:black\">Barcode ID</label>
                        <div class=\"input-group mb-1\">
                            <input type=\"number\" name=\"sku\" id=\"barcodeInput\"
                                   class=\"form-control\" placeholder=\"Enter or generate barcode\">
                            <button class=\"btn btn-primary\" type=\"button\" onclick=\"generateBarcode()\">Generate</button>
                        </div>
                        <div id=\"error-sku\" class=\"invalid-feedback\"></div>
                    </div>
                      <div class=\"col-sm-4\">
                        <label class=\"col-form-label\" style =\"color:black\">Box Details</label>
                        <input type=\"number\" name=\"max_quantity\" value=\"";
            // line 244
            yield ($context["max_quantity"] ?? null);
            yield "\"
                               id=\"input-max_quantity\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-4\">
                  <label for=\"input-minimum\" class=\"col-form-label\" style =\"color:black\">";
            // line 248
            yield ($context["entry_minimum"] ?? null);
            yield "</label>
                 
                    <div class=\"input-group\">
                      <input type=\"number\" name=\"minimum\" value=\"";
            // line 251
            yield ($context["minimum"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_minimum"] ?? null);
            yield "\" id=\"input-minimum\" class=\"form-control\"/>
                      ";
            // line 252
            if (($context["master_id"] ?? null)) {
                // line 253
                yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[minimum]\" value=\"1\" id=\"input-variant-minimum\" data-oc-toggle=\"switch\" data-oc-target=\"#input-minimum\" class=\"form-check-input\"";
                // line 255
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "minimum", [], "any", false, false, false, 255)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-minimum\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
            }
            // line 259
            yield "                    </div>
                    ";
            // line 261
            yield "                  </div>
                    </div>
                    </div>
                      <div class=\"col-sm-4\">
    <label class=\"col-form-label\" style=\"color:white\">Special Price</label>
    <input type=\"text\"
           name=\"special_price\"
           value=\"";
            // line 268
            yield ($context["special_price"] ?? null);
            yield "\"
           id=\"input-special-price\"
           class=\"form-control\"/>
</div>

<div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
            // line 274
            yield ($context["entry_related"] ?? null);
            yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
            // line 276
            yield ($context["entry_related"] ?? null);
            yield "\" id=\"input-related\" data-oc-target=\"autocomplete-related\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-related\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-related\" class=\"table m-0\">
                        <tbody>
                          ";
            // line 282
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["product_relateds"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
                // line 283
                yield "                            <tr id=\"product-related-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 283);
                yield "\">
                              <td>";
                // line 284
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 284);
                yield "<input type=\"hidden\" name=\"product_related[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 284);
                yield "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product_related'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 288
            yield "                        </tbody>
                      </table>
                    </div>
                    ";
            // line 291
            if (($context["master_id"] ?? null)) {
                // line 292
                yield "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_related]\" value=\"1\" id=\"input-variant-related\" data-oc-toggle=\"switch\" data-oc-target=\"#input-related, #product-related\" class=\"form-check-input\"";
                // line 294
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_related", [], "any", false, false, false, 294)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-related\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
            }
            // line 298
            yield "                  </div>
                  <div class=\"form-text\">";
            // line 299
            yield ($context["help_related"] ?? null);
            yield "</div>
                </div>
              </div>
                ";
            // line 303
            yield "                 <div class=\"col-sm-4\">
                    ";
            // line 305
            yield "                        <input type=\"hidden\" name=\"w_tag\" value=\"";
            yield ((($context["w_tag"] ?? null)) ? ($context["w_tag"]) : ("W999"));
            yield "\" data-prefix=\"W\" id=\"input-w_tag\"class=\"form-control\"/> 
                </div>
            
                <div class=\"col-sm-4\">
                    ";
            // line 310
            yield "                    <input type=\"hidden\" name=\"r_tag\" value=\"";
            yield ((($context["r_tag"] ?? null)) ? ($context["r_tag"]) : ("R888"));
            yield "\" id=\"input-r_tag\" data-prefix=\"R\" class=\"form-control\"/>
                </div>
                
                ";
            // line 314
            yield "                <hr>
                <div class=\"col-sm-4\">
                  ";
            // line 317
            yield "                  
                    <input type=\"hidden\" name=\"quantity\" value=\"";
            // line 318
            yield ($context["quantity"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_quantity"] ?? null);
            yield "\" id=\"input-quantity\" class=\"form-control\"/>
                  
                </div>
                ";
            // line 322
            yield "                ";
            // line 323
            yield "                 
                ";
            // line 325
            yield "                ";
            // line 326
            yield "                ";
            // line 327
            yield "                ";
            // line 328
            yield "                ";
            // line 329
            yield "                ";
            // line 330
            yield "                ";
            // line 331
            yield "                ";
            // line 332
            yield "                ";
            // line 333
            yield "                ";
            // line 334
            yield "                ";
            // line 335
            yield "                ";
            // line 336
            yield "                <div class=\"col-sm-4\" style=\"display:none\">
                  <label for=\"input-stock-status\" class=\"col-form-label\">";
            // line 337
            yield ($context["entry_stock_status"] ?? null);
            yield "</label>
            
                    <div class=\"input-group\">
                      <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-select\">
                        ";
            // line 341
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["stock_statuses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
                // line 342
                yield "                          <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 342);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 342) == ($context["stock_status_id"] ?? null))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 342);
                yield "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['stock_status'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 344
            yield "                      </select>
                      ";
            // line 345
            if (($context["master_id"] ?? null)) {
                // line 346
                yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[stock_status_id]\" value=\"1\" id=\"input-variant-stock-status\" data-oc-toggle=\"switch\" data-oc-target=\"#input-stock-status\" class=\"form-check-input\"";
                // line 348
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "stock_status_id", [], "any", false, false, false, 348)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-stock-status\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
            }
            // line 352
            yield "                    </div>
                    <div class=\"form-text\">";
            // line 353
            yield ($context["help_stock_status"] ?? null);
            yield "</div>
                </div>
                <div class=\"col-sm-4\">
                  ";
            // line 357
            yield "                  
                    <div class=\"input-group\">
                      <input type=\"hidden\" name=\"location\" value=\"";
            // line 359
            yield ($context["location"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_location"] ?? null);
            yield "\" id=\"input-location\" class=\"form-control\"/>
                      ";
            // line 360
            if (($context["master_id"] ?? null)) {
                // line 361
                yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[location]\" value=\"1\" id=\"input-variant-location\" data-oc-toggle=\"switch\" data-oc-target=\"#input-location\" class=\"form-check-input\"";
                // line 363
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "location", [], "any", false, false, false, 363)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-location\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
            }
            // line 367
            yield "                    </div>
                 
                </div>
                <div class=\"col-sm-4\" style=\"display:none\">
                  <label for=\"input-date-available\" class=\"col-form-label\">";
            // line 371
            yield ($context["entry_date_available"] ?? null);
            yield "</label>

                    <div class=\"input-group\">
                      <input type=\"date\" name=\"date_available\" value=\"";
            // line 374
            yield ($context["date_available"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_date_available"] ?? null);
            yield "\" id=\"input-date-available\" class=\"form-control\"/>
                      ";
            // line 375
            if (($context["master_id"] ?? null)) {
                // line 376
                yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[date_available]\" value=\"1\" id=\"input-variant-date-available\" data-oc-toggle=\"switch\" data-oc-target=\"#input-date-available\" class=\"form-check-input\"";
                // line 378
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "date_available", [], "any", false, false, false, 378)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-date-available\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
            }
            // line 382
            yield "                    </div>
                
                </div>
                <div class=\"col-12\">
    <div class=\"row justify-content-start\">

        <div class=\"col-sm-2\">
            <label class=\"col-form-label\">";
            // line 389
            yield ($context["entry_subtract"] ?? null);
            yield "</label>
            <div class=\"input-group\">
                <div id=\"input-subtract\" class=\"form-check form-switch form-switch-lg\">
                    <input type=\"hidden\" name=\"subtract\" value=\"0\"/>
                    <input type=\"checkbox\" name=\"subtract\" value=\"1\"
                           class=\"form-check-input\"";
            // line 394
            if (($context["subtract"] ?? null)) {
                yield " checked";
            }
            yield "/>
                </div>

                ";
            // line 397
            if (($context["master_id"] ?? null)) {
                // line 398
                yield "                <div class=\"input-group-text\">
                    <div class=\"form-check form-switch\">
                        <input type=\"checkbox\" name=\"override[subtract]\" value=\"1\"
                               id=\"input-variant-subtract\"
                               data-oc-toggle=\"switch\"
                               data-oc-target=\"#input-subtract\"
                               class=\"form-check-input\"";
                // line 404
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "subtract", [], "any", false, false, false, 404)) {
                    yield " checked";
                }
                yield "/>
                        <label for=\"input-variant-subtract\" class=\"form-check-label\"></label>
                    </div>
                </div>
                ";
            }
            // line 409
            yield "            </div>
        </div>

        <div class=\"col-sm-2\">
            <label class=\"col-form-label\">Specification status</label>
            <div class=\"input-group\">
                <div class=\"form-check form-switch form-switch-lg\">
                    <input type=\"hidden\" name=\"status\" value=\"0\"/>
                    <input type=\"checkbox\" name=\"status\" value=\"1\"
                           id=\"input-status\"
                           class=\"form-check-input\"";
            // line 419
            if (($context["status"] ?? null)) {
                yield " checked";
            }
            yield "/>
                </div>

                ";
            // line 422
            if (($context["master_id"] ?? null)) {
                // line 423
                yield "                <div class=\"input-group-text\">
                    <div class=\"form-check form-switch\">
                        <input type=\"checkbox\" name=\"override[status]\" value=\"1\"
                               id=\"input-variant-status\"
                               data-oc-toggle=\"switch\"
                               data-oc-target=\"#input-status\"
                               class=\"form-check-input\"";
                // line 429
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "status", [], "any", false, false, false, 429)) {
                    yield " checked";
                }
                yield "/>
                        <label for=\"input-variant-status\" class=\"form-check-label\"></label>
                    </div>
                </div>
                ";
            }
            // line 434
            yield "            </div>
        </div>

    </div>
</div>
                <div class=\"col-sm-4\" style=\"display:none\">
                <label class=\"col-form-label\">";
            // line 440
            yield ($context["entry_manufacturer"] ?? null);
            yield "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"manufacturer\" value=\"";
            // line 442
            yield ($context["manufacturer"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_manufacturer"] ?? null);
            yield "\" id=\"input-manufacturer\" data-oc-target=\"autocomplete-manufacturer\" class=\"form-control\" autocomplete=\"off\"/>
                    ";
            // line 443
            if (($context["master_id"] ?? null)) {
                // line 444
                yield "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[manufacturer]\" value=\"1\" id=\"input-variant-manufacturer\" data-oc-toggle=\"switch\" data-oc-target=\"#input-manufacturer\" class=\"form-check-input\"";
                // line 446
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "manufacturer", [], "any", false, false, false, 446)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-manufacturer\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
            }
            // line 450
            yield "                  </div>
                  <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
            // line 451
            yield ($context["manufacturer_id"] ?? null);
            yield "\" id=\"input-manufacturer-id\"/>
                  <ul id=\"autocomplete-manufacturer\" class=\"dropdown-menu\"></ul>
                  <div class=\"form-text\">";
            // line 453
            yield ($context["help_manufacturer"] ?? null);
            yield "</div>
              </div>
                </div>
                    
                    <div class=\"row mb-3\" style =\"display:none\">
                      <label for=\"input-description-";
            // line 458
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 458);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_description"] ?? null);
            yield "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <div class=\"form-control h-100 p-0 border-0 rounded-0\">
                            <textarea name=\"product_description[";
            // line 462
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 462);
            yield "][description]\" placeholder=\"";
            yield ($context["entry_description"] ?? null);
            yield "\" id=\"input-description-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 462);
            yield "\" data-oc-toggle=\"ckeditor\" data-lang=\"";
            yield ($context["ckeditor"] ?? null);
            yield "\" class=\"w-100 position-relative\">";
            yield (((($_v6 = ($context["product_description"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 462)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v7 = ($context["product_description"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 462)] ?? null) : null), "description", [], "any", false, false, false, 462)) : (""));
            yield "</textarea>
                          </div>
                          ";
            // line 464
            if (($context["master_id"] ?? null)) {
                // line 465
                yield "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 467
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 467);
                yield "][description]\" value=\"1\" id=\"input-variant-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 467);
                yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 467);
                yield "\" class=\"form-check-input\"";
                if (CoreExtension::getAttribute($this->env, $this->source, (($_v8 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 467)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 467)] ?? null) : null), "description", [], "any", false, false, false, 467)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 467);
                yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 471
            yield "                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3\" style =\"display:none\">
                      <label for=\"input-meta-description-";
            // line 475
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 475);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_meta_description"] ?? null);
            yield "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <textarea name=\"product_description[";
            // line 478
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 478);
            yield "][meta_description]\" rows=\"5\" placeholder=\"";
            yield ($context["entry_meta_description"] ?? null);
            yield "\" id=\"input-meta-description-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 478);
            yield "\" class=\"form-control\">";
            yield (((($_v9 = ($context["product_description"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 478)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v10 = ($context["product_description"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 478)] ?? null) : null), "meta_description", [], "any", false, false, false, 478)) : (""));
            yield "</textarea>
                          ";
            // line 479
            if (($context["master_id"] ?? null)) {
                // line 480
                yield "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 482
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 482);
                yield "][meta_description]\" value=\"1\" id=\"input-variant-meta-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 482);
                yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 482);
                yield "\" class=\"form-check-input\"";
                if (CoreExtension::getAttribute($this->env, $this->source, (($_v11 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 482)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 482)] ?? null) : null), "meta_description", [], "any", false, false, false, 482)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-meta-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 482);
                yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 486
            yield "                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3\" style =\"display:none\">
                      <label for=\"input-meta-keyword-";
            // line 490
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 490);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_meta_keyword"] ?? null);
            yield "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <textarea name=\"product_description[";
            // line 493
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 493);
            yield "][meta_keyword]\" rows=\"5\" placeholder=\"";
            yield ($context["entry_meta_keyword"] ?? null);
            yield "\" id=\"input-meta-keyword-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 493);
            yield "\" class=\"form-control\">";
            yield (((($_v12 = ($context["product_description"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 493)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v13 = ($context["product_description"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 493)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 493)) : (""));
            yield "</textarea>
                          ";
            // line 494
            if (($context["master_id"] ?? null)) {
                // line 495
                yield "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 497
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 497);
                yield "][meta_keyword]\" value=\"1\" id=\"input-variant-meta-keyword-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 497);
                yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-keyword-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 497);
                yield "\" class=\"form-check-input\"";
                if (CoreExtension::getAttribute($this->env, $this->source, (($_v14 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 497)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 497)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 497)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-meta-keyword-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 497);
                yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 501
            yield "                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3\" style =\"display:none\">
                      <label for=\"input-tag-";
            // line 505
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 505);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_tag"] ?? null);
            yield "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[";
            // line 508
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 508);
            yield "][tag]\" value=\"";
            yield (((($_v15 = ($context["product_description"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 508)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v16 = ($context["product_description"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 508)] ?? null) : null), "tag", [], "any", false, false, false, 508)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_tag"] ?? null);
            yield "\" id=\"input-tag-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 508);
            yield "\" class=\"form-control\"/>
                          ";
            // line 509
            if (($context["master_id"] ?? null)) {
                // line 510
                yield "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 512
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 512);
                yield "][tag]\" value=\"1\" id=\"input-variant-tag-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 512);
                yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-tag-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 512);
                yield "\" class=\"form-check-input\"";
                if (CoreExtension::getAttribute($this->env, $this->source, (($_v17 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 512)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 512)] ?? null) : null), "tag", [], "any", false, false, false, 512)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-tag-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 512);
                yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 516
            yield "                        </div>
                        <div class=\"form-text\">";
            // line 517
            yield ($context["help_tag"] ?? null);
            yield "</div>
                      </div>
                    </div>
                  </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 522
        yield "              </div>
            </div>
            <div id=\"tab-data\" class=\"tab-pane\">
               
              <input type=\"hidden\" name=\"master_id\" value=\"";
        // line 526
        yield ($context["master_id"] ?? null);
        yield "\"/>
              <fieldset>
                ";
        // line 545
        yield "                
                <div class=\"row mb-3\" style =\"display:none\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 547
        yield ($context["entry_product_code"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select id=\"input-code\" class=\"form-select\">
                        ";
        // line 551
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["identifiers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["identifier"]) {
            // line 552
            yield "                          <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["identifier"], "code", [], "any", false, false, false, 552);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["identifier"], "code", [], "any", false, false, false, 552);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['identifier'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 554
        yield "                      </select>
                      <input type=\"text\" value=\"\" placeholder=\"";
        // line 555
        yield ($context["entry_product_code"] ?? null);
        yield "\" id=\"input-value\" class=\"form-control w-75\"/>
                      <button type=\"button\" id=\"button-code\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button>
                    </div>
                    <div class=\"input-group\">
                      <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                        <table id=\"product-code\" class=\"table m-0\">
                          <tbody>
                            ";
        // line 562
        $context["code_row"] = 0;
        // line 563
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_codes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_code"]) {
            // line 564
            yield "                              <tr id=\"code-row-";
            yield ($context["code_row"] ?? null);
            yield "\">
                                <td style=\"width: 1px;\">";
            // line 565
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_code"], "code", [], "any", false, false, false, 565);
            yield "<input type=\"hidden\" name=\"product_code[";
            yield ($context["code_row"] ?? null);
            yield "][code]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_code"], "code", [], "any", false, false, false, 565);
            yield "\"/></td>
                                <td id=\"input-code-";
            // line 566
            yield ($context["code_row"] ?? null);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_code"], "value", [], "any", false, false, false, 566);
            yield "
                                  <div id=\"error-code-";
            // line 567
            yield ($context["code_row"] ?? null);
            yield "\" class=\"invalid-feedback\"></div>
                                  <input type=\"hidden\" name=\"product_code[";
            // line 568
            yield ($context["code_row"] ?? null);
            yield "][value]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_code"], "value", [], "any", false, false, false, 568);
            yield "\"></td>
                                <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                              </tr>
                              ";
            // line 571
            $context["code_row"] = (($context["code_row"] ?? null) + 1);
            // line 572
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_code'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 573
        yield "                          </tbody>
                        </table>
                      </div>
                      ";
        // line 576
        if (($context["master_id"] ?? null)) {
            // line 577
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[product_code]\" value=\"1\" id=\"input-variant-code\" data-oc-toggle=\"switch\" data-oc-target=\"#input-code, #product-code\" class=\"form-check-input\"";
            // line 579
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_code", [], "any", false, false, false, 579)) {
                yield " checked";
            }
            yield "/>
                            <label for=\"input-variant-code\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 584
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 585
        yield ($context["help_product_code"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
              ";
        // line 661
        yield "            
            <fieldset>
            ";
        // line 671
        yield "            </fieldset>
            <fieldset>
                ";
        // line 688
        yield "            </fieldset>

              <fieldset>
                <legend>";
        // line 691
        yield ($context["text_stock"] ?? null);
        yield "</legend>
                ";
        // line 698
        yield "                ";
        // line 714
        yield "                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 715
        yield ($context["entry_subtract"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div id=\"input-subtract\" class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"subtract\" value=\"0\"/> <input type=\"checkbox\" name=\"subtract\" value=\"1\" class=\"form-check-input\"";
        // line 719
        if (($context["subtract"] ?? null)) {
            yield " checked";
        }
        yield "/>
                      </div>
                      ";
        // line 721
        if (($context["master_id"] ?? null)) {
            // line 722
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[subtract]\" value=\"1\" id=\"input-variant-subtract\" data-oc-toggle=\"switch\" data-oc-target=\"#input-subtract\" class=\"form-check-input\"";
            // line 724
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "subtract", [], "any", false, false, false, 724)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-subtract\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 728
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-stock-status\" class=\"col-sm-2 col-form-label\">";
        // line 732
        yield ($context["entry_stock_status"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-select\">
                        ";
        // line 736
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 737
            yield "                          <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 737);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 737) == ($context["stock_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 737);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stock_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 739
        yield "                      </select>
                      ";
        // line 740
        if (($context["master_id"] ?? null)) {
            // line 741
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[stock_status_id]\" value=\"1\" id=\"input-variant-stock-status\" data-oc-toggle=\"switch\" data-oc-target=\"#input-stock-status\" class=\"form-check-input\"";
            // line 743
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "stock_status_id", [], "any", false, false, false, 743)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-stock-status\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 747
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 748
        yield ($context["help_stock_status"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-location\" class=\"col-sm-2 col-form-label\">";
        // line 752
        yield ($context["entry_location"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"location\" value=\"";
        // line 755
        yield ($context["location"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_location"] ?? null);
        yield "\" id=\"input-location\" class=\"form-control\"/>
                      ";
        // line 756
        if (($context["master_id"] ?? null)) {
            // line 757
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[location]\" value=\"1\" id=\"input-variant-location\" data-oc-toggle=\"switch\" data-oc-target=\"#input-location\" class=\"form-check-input\"";
            // line 759
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "location", [], "any", false, false, false, 759)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-location\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 763
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-date-available\" class=\"col-sm-2 col-form-label\">";
        // line 767
        yield ($context["entry_date_available"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10 col-md-4\">
                    <div class=\"input-group\">
                      <input type=\"date\" name=\"date_available\" value=\"";
        // line 770
        yield ($context["date_available"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_available"] ?? null);
        yield "\" id=\"input-date-available\" class=\"form-control\"/>
                      ";
        // line 771
        if (($context["master_id"] ?? null)) {
            // line 772
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[date_available]\" value=\"1\" id=\"input-variant-date-available\" data-oc-toggle=\"switch\" data-oc-target=\"#input-date-available\" class=\"form-check-input\"";
            // line 774
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "date_available", [], "any", false, false, false, 774)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-date-available\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 778
        yield "                    </div>
                  </div>
                </div>
              </fieldset>
              
              <fieldset>
                <legend>";
        // line 784
        yield ($context["text_specification"] ?? null);
        yield "</legend>
                ";
        // line 802
        yield "                <div class=\"row mb-3\" style =\"display:none\">
                  <label for=\"input-length\" class=\"col-sm-2 col-form-label\">";
        // line 803
        yield ($context["entry_dimension"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"length\" value=\"";
        // line 806
        yield ($context["length"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_length"] ?? null);
        yield "\" id=\"input-length\" class=\"form-control\"/>
                      ";
        // line 807
        if (($context["master_id"] ?? null)) {
            // line 808
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[length]\" value=\"1\" id=\"input-variant-length\" data-oc-toggle=\"switch\" data-oc-target=\"#input-length\" class=\"form-check-input\"";
            // line 810
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "length", [], "any", false, false, false, 810)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-length\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 814
        yield "                      <input type=\"text\" name=\"width\" value=\"";
        yield ($context["width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-width\" class=\"form-control\"/>
                      ";
        // line 815
        if (($context["master_id"] ?? null)) {
            // line 816
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[width]\" value=\"1\" id=\"input-variant-width\" data-oc-toggle=\"switch\" data-oc-target=\"#input-width\" class=\"form-check-input\"";
            // line 818
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "width", [], "any", false, false, false, 818)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-width\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 822
        yield "                      <input type=\"text\" name=\"height\" value=\"";
        yield ($context["height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-height\" class=\"form-control\"/>
                      ";
        // line 823
        if (($context["master_id"] ?? null)) {
            // line 824
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[height]\" value=\"1\" id=\"input-variant-height\" data-oc-toggle=\"switch\" data-oc-target=\"#input-height\" class=\"form-check-input\"";
            // line 826
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "height", [], "any", false, false, false, 826)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-height\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 830
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\" style =\"display:none\">
                  <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">";
        // line 834
        yield ($context["entry_length_class"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-select\">
                        ";
        // line 838
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 839
            yield "                          <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 839);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 839) == ($context["length_class_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 839);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['length_class'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 841
        yield "                      </select>
                      ";
        // line 842
        if (($context["master_id"] ?? null)) {
            // line 843
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[length_class_id]\" value=\"1\" id=\"input-variant-length-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-length-class\" class=\"form-check-input\"";
            // line 845
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "length_class_id", [], "any", false, false, false, 845)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-length-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 849
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\" style =\"display:none\">
                  <label for=\"input-weight\" class=\"col-sm-2 col-form-label\">";
        // line 853
        yield ($context["entry_weight"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"weight\" value=\"";
        // line 856
        yield ($context["weight"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_weight"] ?? null);
        yield "\" id=\"input-weight\" class=\"form-control\"/>
                      ";
        // line 857
        if (($context["master_id"] ?? null)) {
            // line 858
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[weight]\" value=\"1\" id=\"input-variant-weight\" data-oc-toggle=\"switch\" data-oc-target=\"#input-weight\" class=\"form-check-input\"";
            // line 860
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "weight", [], "any", false, false, false, 860)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-weight\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 864
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\" style =\"display:none\">
                  <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">";
        // line 868
        yield ($context["entry_weight_class"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-select\">
                        ";
        // line 872
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 873
            yield "                          <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 873);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 873) == ($context["weight_class_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 873);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['weight_class'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 875
        yield "                      </select>
                      ";
        // line 876
        if (($context["master_id"] ?? null)) {
            // line 877
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[weight_class_id]\" value=\"1\" id=\"input-variant-weight-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-weight-class\" class=\"form-check-input\"";
            // line 879
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "weight_class_id", [], "any", false, false, false, 879)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-weight-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 883
        yield "                    </div>
                  </div>
                </div>
                ";
        // line 903
        yield "                <div class=\"row mb-3\"style =\"display:none\">
                  <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 904
        yield ($context["entry_sort_order"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"number\" name=\"sort_order\" value=\"";
        // line 907
        yield ($context["sort_order"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_sort_order"] ?? null);
        yield "\" id=\"input-sort-order\" class=\"form-control\"/>
                      ";
        // line 908
        if (($context["master_id"] ?? null)) {
            // line 909
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[sort_order]\" value=\"1\" id=\"input-variant-sort-order\" data-oc-toggle=\"switch\" data-oc-target=\"#input-sort-order\" class=\"form-check-input\"";
            // line 911
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "sort_order", [], "any", false, false, false, 911)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-sort-order\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 915
        yield "                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-links\" class=\"tab-pane\">
              ";
        // line 939
        yield "              ";
        // line 968
        yield "              ";
        // line 997
        yield "              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 998
        yield ($context["entry_store"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <div id=\"product-store\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 1002
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1003
            yield "                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"product_store[]\" value=\"";
            // line 1004
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1004);
            yield "\" id=\"input-store-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1004);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1004), ($context["product_store"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-store-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1004);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1004);
            yield "</label>
                        </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1007
        yield "                    </div>
                    ";
        // line 1008
        if (($context["master_id"] ?? null)) {
            // line 1009
            yield "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_store]\" value=\"1\" id=\"input-variant-store\" data-oc-toggle=\"switch\" data-oc-target=\"#product-store\" class=\"form-check-input\"";
            // line 1011
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_store", [], "any", false, false, false, 1011)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-store\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 1015
        yield "                  </div>
                </div>
              </div>
              ";
        // line 1076
        yield "              
            </div>
            <div id=\"tab-attribute\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-attribute\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>";
        // line 1083
        yield ($context["entry_attribute"] ?? null);
        yield "</th>
                      <th>";
        // line 1084
        yield ($context["entry_text"] ?? null);
        yield "</th>
                      <th>";
        // line 1085
        if (($context["master_id"] ?? null)) {
            // line 1086
            yield "                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_attribute]\" value=\"1\" id=\"input-variant-product-attribute\" data-oc-toggle=\"switch\" data-oc-target=\"#product-attribute\" class=\"form-check-input\"";
            // line 1087
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_attribute", [], "any", false, false, false, 1087)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-product-attribute\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1089
        yield "</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1093
        $context["attribute_row"] = 0;
        // line 1094
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 1095
            yield "                      <tr id=\"attribute-row-";
            yield ($context["attribute_row"] ?? null);
            yield "\">
                        <td>
                          <input type=\"hidden\" name=\"product_attribute[";
            // line 1097
            yield ($context["attribute_row"] ?? null);
            yield "][attribute_id]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 1097);
            yield "\" id=\"input-attribute-id-";
            yield ($context["attribute_row"] ?? null);
            yield "\"/> <input type=\"text\" name=\"product_attribute[";
            yield ($context["attribute_row"] ?? null);
            yield "][name]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_attribute"], "name", [], "any", false, false, false, 1097);
            yield "\" placeholder=\"";
            yield ($context["entry_attribute"] ?? null);
            yield "\" id=\"input-attribute-";
            yield ($context["attribute_row"] ?? null);
            yield "\" data-oc-target=\"autocomplete-attribute-";
            yield ($context["attribute_row"] ?? null);
            yield "\" class=\"form-control\" autocomplete=\"new-password\"/>
                          <ul id=\"autocomplete-attribute-";
            // line 1098
            yield ($context["attribute_row"] ?? null);
            yield "\" class=\"dropdown-menu\"></ul>
                        </td>

                        <td>";
            // line 1101
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1102
                yield "                            <div class=\"input-group mb-12\">
                              <div class=\"input-group-text\"><img src=\"";
                // line 1103
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 1103);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1103);
                yield "\"/></div>
                              <textarea name=\"product_attribute[";
                // line 1104
                yield ($context["attribute_row"] ?? null);
                yield "][product_attribute_description][";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1104);
                yield "][text]\" rows=\"5\" placeholder=\"";
                yield ($context["entry_text"] ?? null);
                yield "\" id=\"input-text-";
                yield ($context["attribute_row"] ?? null);
                yield "-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1104);
                yield "\" class=\"form-control\">";
                yield (((($_v18 = CoreExtension::getAttribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 1104)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1104)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v19 = CoreExtension::getAttribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 1104)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1104)] ?? null) : null), "text", [], "any", false, false, false, 1104)) : (""));
                yield "</textarea>
                            </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1106
            yield "</td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#attribute-row-";
            // line 1107
            yield ($context["attribute_row"] ?? null);
            yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1109
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 1110
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_attribute'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1111
        yield "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-attribute\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1115
        yield ($context["button_attribute_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            ";
        // line 1121
        if ( !($context["master_id"] ?? null)) {
            // line 1122
            yield "              <div id=\"tab-option\" class=\"tab-pane\">

                <div id=\"option\">

                  ";
            // line 1126
            $context["option_row"] = 0;
            // line 1127
            yield "                  ";
            $context["option_value_row"] = 0;
            // line 1128
            yield "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["product_options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
                // line 1129
                yield "
                    <fieldset id=\"option-row-";
                // line 1130
                yield ($context["option_row"] ?? null);
                yield "\">
                      <legend>";
                // line 1131
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 1131);
                yield "</legend>
                      <input type=\"hidden\" name=\"product_option[";
                // line 1132
                yield ($context["option_row"] ?? null);
                yield "][product_option_id]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 1132);
                yield "\"/> <input type=\"hidden\" name=\"product_option[";
                yield ($context["option_row"] ?? null);
                yield "][name]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 1132);
                yield "\"/> <input type=\"hidden\" name=\"product_option[";
                yield ($context["option_row"] ?? null);
                yield "][option_id]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 1132);
                yield "\"/> <input type=\"hidden\" name=\"product_option[";
                yield ($context["option_row"] ?? null);
                yield "][type]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1132);
                yield "\"/>

                      <div class=\"row align-items-center\">
                        <div class=\"col-11\">

                          <div class=\"mb-3\">
                            <label for=\"input-required-";
                // line 1138
                yield ($context["option_row"] ?? null);
                yield "\" class=\"form-label\">";
                yield ($context["entry_required"] ?? null);
                yield "</label> <select name=\"product_option[";
                yield ($context["option_row"] ?? null);
                yield "][required]\" id=\"input-required-";
                yield ($context["option_row"] ?? null);
                yield "\" class=\"form-select\">
                              <option value=\"1\"";
                // line 1139
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 1139)) {
                    yield " selected";
                }
                yield ">";
                yield ($context["text_enabled"] ?? null);
                yield "</option>
                              <option value=\"0\"";
                // line 1140
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 1140)) {
                    yield " selected";
                }
                yield ">";
                yield ($context["text_disabled"] ?? null);
                yield "</option>
                            </select>
                          </div>

                          ";
                // line 1144
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1144) == "text")) {
                    // line 1145
                    yield "                            <div class=\"mb-3\">
                              <label for=\"input-option-";
                    // line 1146
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-label\">";
                    yield ($context["entry_option_value"] ?? null);
                    yield "</label> <input type=\"text\" name=\"product_option[";
                    yield ($context["option_row"] ?? null);
                    yield "][value]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 1146);
                    yield "\" placeholder=\"";
                    yield ($context["entry_option_value"] ?? null);
                    yield "\" id=\"input-option-";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-control\"/>
                            </div>
                          ";
                }
                // line 1149
                yield "
                          ";
                // line 1150
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1150) == "textarea")) {
                    // line 1151
                    yield "                            <div class=\"mb-3\">
                              <label for=\"input-option-";
                    // line 1152
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-label\">";
                    yield ($context["entry_option_value"] ?? null);
                    yield "</label> <textarea name=\"product_option[";
                    yield ($context["option_row"] ?? null);
                    yield "][value]\" rows=\"5\" placeholder=\"";
                    yield ($context["entry_option_value"] ?? null);
                    yield "\" id=\"input-option-";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-control\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 1152);
                    yield "</textarea>
                            </div>
                          ";
                }
                // line 1155
                yield "
                          ";
                // line 1156
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1156) == "file")) {
                    // line 1157
                    yield "                            <div class=\"mb-3 d-none\">
                              <label for=\"input-option-";
                    // line 1158
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-label\">";
                    yield ($context["entry_option_value"] ?? null);
                    yield "</label> <input type=\"text\" name=\"product_option[";
                    yield ($context["option_row"] ?? null);
                    yield "][value]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 1158);
                    yield "\" placeholder=\"";
                    yield ($context["entry_option_value"] ?? null);
                    yield "\" id=\"input-option-";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-control\"/>
                            </div>
                          ";
                }
                // line 1161
                yield "
                          ";
                // line 1162
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1162) == "date")) {
                    // line 1163
                    yield "                            <div class=\"mb-3\">
                              <label for=\"input-option-";
                    // line 1164
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-label\">";
                    yield ($context["entry_option_value"] ?? null);
                    yield "</label> <input type=\"date\" name=\"product_option[";
                    yield ($context["option_row"] ?? null);
                    yield "][value]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 1164);
                    yield "\" placeholder=\"";
                    yield ($context["entry_option_value"] ?? null);
                    yield "\" id=\"input-option-";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-control\"/>
                            </div>
                          ";
                }
                // line 1167
                yield "
                          ";
                // line 1168
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1168) == "time")) {
                    // line 1169
                    yield "                            <div class=\"mb-3\">
                              <label for=\"input-option-";
                    // line 1170
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-label\">";
                    yield ($context["entry_option_value"] ?? null);
                    yield "</label> <input type=\"time\" name=\"product_option[";
                    yield ($context["option_row"] ?? null);
                    yield "][value]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 1170);
                    yield "\" placeholder=\"";
                    yield ($context["entry_option_value"] ?? null);
                    yield "\" id=\"input-option-";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-control\"/>
                            </div>
                          ";
                }
                // line 1173
                yield "
                          ";
                // line 1174
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1174) == "datetime")) {
                    // line 1175
                    yield "                            <div class=\"mb-3\">
                              <label for=\"input-option-";
                    // line 1176
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-label\">";
                    yield ($context["entry_option_value"] ?? null);
                    yield "</label> <input type=\"datetime-local\" name=\"product_option[";
                    yield ($context["option_row"] ?? null);
                    yield "][value]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 1176);
                    yield "\" placeholder=\"";
                    yield ($context["entry_option_value"] ?? null);
                    yield "\" id=\"input-option-";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-control\"/>
                            </div>
                          ";
                }
                // line 1179
                yield "
                          ";
                // line 1180
                if (((((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1180) == "select") || (CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1180) == "radio")) || (CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1180) == "checkbox")) || (CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1180) == "image"))) {
                    // line 1181
                    yield "                            <div class=\"table-responsive\">
                              <table class=\"table table-bordered table-hover\">
                                <thead>
                                  <tr>
                                    <th>";
                    // line 1185
                    yield ($context["entry_option_value"] ?? null);
                    yield "</th>
                                    <th class=\"text-end\">";
                    // line 1186
                    yield ($context["entry_quantity"] ?? null);
                    yield "</th>
                                    <th>";
                    // line 1187
                    yield ($context["entry_subtract"] ?? null);
                    yield "</th>
                                    <th class=\"text-end\">";
                    // line 1188
                    yield ($context["entry_price"] ?? null);
                    yield "</th>
                                    <th class=\"text-end\">";
                    // line 1189
                    yield ($context["entry_points"] ?? null);
                    yield "</th>
                                    <th class=\"text-end\">";
                    // line 1190
                    yield ($context["entry_weight"] ?? null);
                    yield "</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody id=\"option-value-";
                    // line 1194
                    yield ($context["option_row"] ?? null);
                    yield "\">
                                  ";
                    // line 1195
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 1195));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                        // line 1196
                        yield "                                    <tr id=\"option-value-row-";
                        yield ($context["option_value_row"] ?? null);
                        yield "\">
                                      <td>";
                        // line 1197
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "name", [], "any", false, false, false, 1197);
                        yield "
                                        <input type=\"hidden\" name=\"product_option[";
                        // line 1198
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][option_value_id]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 1198);
                        yield "\"/> <input type=\"hidden\" name=\"product_option[";
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][product_option_value_id]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 1198);
                        yield "\"/></td>
                                      <td class=\"text-end\">";
                        // line 1199
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 1199);
                        yield " <input type=\"hidden\" name=\"product_option[";
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][quantity]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 1199);
                        yield "\"/></td>
                                      <td>";
                        // line 1200
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 1200)) {
                            // line 1201
                            yield "                                          ";
                            yield ($context["text_yes"] ?? null);
                            yield "
                                        ";
                        } else {
                            // line 1203
                            yield "                                          ";
                            yield ($context["text_no"] ?? null);
                            yield "
                                        ";
                        }
                        // line 1205
                        yield "                                        <input type=\"hidden\" name=\"product_option[";
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][subtract]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 1205);
                        yield "\"/></td>
                                      <td class=\"text-end\">";
                        // line 1206
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 1206);
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 1206);
                        yield "
                                        <input type=\"hidden\" name=\"product_option[";
                        // line 1207
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][price_prefix]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 1207);
                        yield "\"/> <input type=\"hidden\" name=\"product_option[";
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][price]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 1207);
                        yield "\"/></td>
                                      <td class=\"text-end\">";
                        // line 1208
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 1208);
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 1208);
                        yield "
                                        <input type=\"hidden\" name=\"product_option[";
                        // line 1209
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][points_prefix]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 1209);
                        yield "\"/> <input type=\"hidden\" name=\"product_option[";
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][points]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 1209);
                        yield "\"/></td>
                                      <td class=\"text-end\">";
                        // line 1210
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 1210);
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 1210);
                        yield "
                                        <input type=\"hidden\" name=\"product_option[";
                        // line 1211
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][weight_prefix]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 1211);
                        yield "\"/> <input type=\"hidden\" name=\"product_option[";
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][weight]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 1211);
                        yield "\"/></td>
                                      <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                        // line 1212
                        yield ($context["button_edit"] ?? null);
                        yield "\" data-option-row=\"";
                        yield ($context["option_row"] ?? null);
                        yield "\" data-option-value-row=\"";
                        yield ($context["option_value_row"] ?? null);
                        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></button> <button type=\"button\" onclick=\"\$('#option-value-row-";
                        yield ($context["option_value_row"] ?? null);
                        yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
                        yield ($context["button_remove"] ?? null);
                        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                                    </tr>
                                    ";
                        // line 1214
                        $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                        // line 1215
                        yield "                                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['product_option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1216
                    yield "                                </tbody>
                                <tfoot>
                                  <tr>
                                    <td colspan=\"6\"></td>
                                    <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 1220
                    yield ($context["button_option_value_add"] ?? null);
                    yield "\" data-option-row=\"";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                                  </tr>
                                </tfoot>
                              </table>
                              <select id=\"product-option-values-";
                    // line 1224
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"d-none\">
                                ";
                    // line 1225
                    if ((($_v20 = ($context["option_values"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20[CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 1225)] ?? null) : null)) {
                        // line 1226
                        yield "                                  ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((($_v21 = ($context["option_values"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21[CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 1226)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 1227
                            yield "                                    <option value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 1227);
                            yield "\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1227);
                            yield "</option>
                                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1229
                        yield "                                ";
                    }
                    // line 1230
                    yield "                              </select>
                            </div>
                          ";
                }
                // line 1233
                yield "                        </div>

                        <div class=\"col\">
                          <button type=\"button\" class=\"btn btn-danger\" data-bs-toggle=\"tooltip\" title=\"";
                // line 1236
                yield ($context["button_remove"] ?? null);
                yield "\" onclick=\"\$('#option-row-";
                yield ($context["option_row"] ?? null);
                yield "').remove();\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                        </div>
                      </div>
                    </fieldset>
                    ";
                // line 1240
                $context["option_row"] = (($context["option_row"] ?? null) + 1);
                // line 1241
                yield "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product_option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1242
            yield "                </div>
                <fieldset>
                  <legend class=\"float-none\">";
            // line 1244
            yield ($context["text_option_add"] ?? null);
            yield "</legend>
                  <div class=\"row mb-3\">
                    <label for=\"input-option\" class=\"col-sm-2 col-form-label\">";
            // line 1246
            yield ($context["entry_option"] ?? null);
            yield "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
            // line 1248
            yield ($context["entry_option"] ?? null);
            yield "\" id=\"input-option\" data-oc-target=\"autocomplete-option\" class=\"form-control\" autocomplete=\"off\"/>
                      <ul id=\"autocomplete-option\" class=\"dropdown-menu\"></ul>
                      <div class=\"form-text\">";
            // line 1250
            yield ($context["help_option"] ?? null);
            yield "</div>
                    </div>
                  </div>
                </fieldset>
              </div>
            ";
        } else {
            // line 1256
            yield "              <div id=\"tab-option\" class=\"tab-pane\">
                ";
            // line 1257
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 1258
                yield "                  <fieldset>
                    <legend class=\"float-none\">";
                // line 1259
                yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1259);
                yield "</legend>

                    ";
                // line 1261
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1261) == "select")) {
                    // line 1262
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1262)) {
                        yield " required";
                    }
                    yield "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 1263
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1263);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <select name=\"variant[";
                    // line 1266
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1266);
                    yield "]\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1266);
                    yield "\" class=\"form-select\">
                              <option value=\"\">";
                    // line 1267
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                              ";
                    // line 1268
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 1268));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 1269
                        yield "                                <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1269);
                        yield "\"";
                        if (((($_v22 = ($context["variant"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1269)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1269) == (($_v23 = ($context["variant"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1269)] ?? null) : null)))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1269);
                        yield "
                                  ";
                        // line 1270
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1270)) {
                            // line 1271
                            yield "                                    (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 1271);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1271);
                            yield ")
                                  ";
                        }
                        // line 1272
                        yield "</option>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1274
                    yield "                            </select>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1277
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1277);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1277);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1277);
                    yield "\" class=\"form-check-input\"";
                    if ((($_v24 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1277)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1277)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1277);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1281
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1281);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1285
                yield "
                    ";
                // line 1286
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1286) == "radio")) {
                    // line 1287
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1287)) {
                        yield " required";
                    }
                    yield "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 1288
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1288);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option-";
                    // line 1291
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1291);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              ";
                    // line 1292
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 1292));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 1293
                        yield "                                <div class=\"form-check\">
                                  <input type=\"radio\" name=\"variant[";
                        // line 1294
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1294);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1294);
                        yield "\" id=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1294);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v25 = ($context["variant"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1294)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1294) == (($_v26 = ($context["variant"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1294)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> 
\t\t\t\t\t\t\t\t                  <label for=\"input-option-value-";
                        // line 1295
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1295);
                        yield "\" class=\"form-check-label\">
                                    ";
                        // line 1296
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 1296)) {
                            // line 1297
                            yield "                                      <img src=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 1297);
                            yield "\" alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1297);
                            yield " ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1297)) {
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 1297);
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1297);
                                yield " ";
                            }
                            yield "\" class=\"img-thumbnail\"/>";
                        }
                        // line 1298
                        yield "                                    ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1298);
                        yield "
                                    ";
                        // line 1299
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1299)) {
                            // line 1300
                            yield "                                      (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 1300);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1300);
                            yield ")
                                    ";
                        }
                        // line 1301
                        yield "</label>
                                </div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1304
                    yield "                            </div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1307
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1307);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1307);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1307);
                    yield "\" class=\"form-check-input\"";
                    if ((($_v27 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1307)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1307)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1307);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1311
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1311);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1315
                yield "
                    ";
                // line 1316
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1316) == "checkbox")) {
                    // line 1317
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1317)) {
                        yield " required";
                    }
                    yield "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 1318
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1318);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option-";
                    // line 1321
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1321);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              ";
                    // line 1322
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 1322));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 1323
                        yield "                                <div class=\"form-check\">
                                  <input type=\"checkbox\" name=\"variant[";
                        // line 1324
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1324);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1324);
                        yield "\" id=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1324);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v28 = ($context["variant"] ?? null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1324)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1324), (($_v29 = ($context["variant"] ?? null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1324)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> 
                                  <label for=\"input-option-value-";
                        // line 1325
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1325);
                        yield "\" class=\"form-check-label\">
                                    ";
                        // line 1326
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 1326)) {
                            yield " 
                                      <img src=\"";
                            // line 1327
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 1327);
                            yield "\" alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1327);
                            yield " ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1327)) {
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 1327);
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1327);
                                yield " ";
                            }
                            yield "\" class=\"img-thumbnail\"/>";
                        }
                        // line 1328
                        yield "                                    ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1328);
                        yield "
                                    ";
                        // line 1329
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1329)) {
                            // line 1330
                            yield "                                      (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 1330);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1330);
                            yield ")
                                    ";
                        }
                        // line 1331
                        yield "</label>
                                </div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1334
                    yield "                            </div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1337
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1337);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1337);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1337);
                    yield "\" class=\"form-check-input\"";
                    if ((($_v30 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1337)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1337)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1337);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1341
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1341);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1345
                yield "
                    ";
                // line 1346
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1346) == "text")) {
                    // line 1347
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1347)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 1348
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1348);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1348);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"variant[";
                    // line 1351
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1351);
                    yield "]\" value=\"";
                    yield (((($_v31 = ($context["variant"] ?? null)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1351)] ?? null) : null)) ? ((($_v32 = ($context["variant"] ?? null)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1351)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1351)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1351);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1351);
                    yield "\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1354
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1354);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1354);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1354);
                    yield "\" class=\"form-check-input\"";
                    if ((($_v33 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1354)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1354)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1354);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1358
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1358);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1362
                yield "
                    ";
                // line 1363
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1363) == "textarea")) {
                    // line 1364
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1364)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 1365
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1365);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1365);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <textarea name=\"variant[";
                    // line 1368
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1368);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1368);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1368);
                    yield "\" class=\"form-control\">";
                    yield (((($_v34 = ($context["variant"] ?? null)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1368)] ?? null) : null)) ? ((($_v35 = ($context["variant"] ?? null)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1368)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1368)));
                    yield "</textarea>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1371
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1371);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1371);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1371);
                    yield "\" class=\"form-check-input\"";
                    if ((($_v36 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1371)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1371)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1371);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1375
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1375);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1379
                yield "
                    ";
                // line 1380
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1380) == "file")) {
                    // line 1381
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1381)) {
                        yield " required";
                    }
                    yield "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 1382
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1382);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 1385
                    yield ($context["upload"] ?? null);
                    yield "\" id=\"button-upload-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1385);
                    yield "\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1385);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                            <input type=\"text\" name=\"variant[";
                    // line 1386
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1386);
                    yield "]\" value=\"";
                    yield (((($_v37 = ($context["variant"] ?? null)) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1386)] ?? null) : null)) ? ((($_v38 = ($context["variant"] ?? null)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1386)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1386)));
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1386);
                    yield "\" class=\"form-control\"/>
                            <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-option-";
                    // line 1387
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1387);
                    yield "\"";
                    if ( !(($_v39 = ($context["variant"] ?? null)) && is_array($_v39) || $_v39 instanceof ArrayAccess ? ($_v39[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1387)] ?? null) : null)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    yield ($context["button_download"] ?? null);
                    yield "</button>
                            <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 1388
                    yield ($context["button_clear"] ?? null);
                    yield "\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1388);
                    yield "\"";
                    if ( !(($_v40 = ($context["variant"] ?? null)) && is_array($_v40) || $_v40 instanceof ArrayAccess ? ($_v40[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1388)] ?? null) : null)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1391
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1391);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1391);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#button-upload-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1391);
                    yield "\" class=\"form-check-input\"";
                    if ((($_v41 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1391)) && is_array($_v41) || $_v41 instanceof ArrayAccess ? ($_v41[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1391)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1391);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1395
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1395);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1399
                yield "
                    ";
                // line 1400
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1400) == "date")) {
                    // line 1401
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1401)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 1402
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1402);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1402);
                    yield "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group\">
                            <input type=\"date\" name=\"variant[";
                    // line 1405
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1405);
                    yield "]\" value=\"";
                    yield (((($_v42 = ($context["variant"] ?? null)) && is_array($_v42) || $_v42 instanceof ArrayAccess ? ($_v42[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1405)] ?? null) : null)) ? ((($_v43 = ($context["variant"] ?? null)) && is_array($_v43) || $_v43 instanceof ArrayAccess ? ($_v43[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1405)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1405)));
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1405);
                    yield "\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1408
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1408);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1408);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1408);
                    yield "\" class=\"form-check-input\"";
                    if ((($_v44 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1408)) && is_array($_v44) || $_v44 instanceof ArrayAccess ? ($_v44[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1408)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1408);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1412
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1412);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1416
                yield "
                    ";
                // line 1417
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1417) == "time")) {
                    // line 1418
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1418)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 1419
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1419);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1419);
                    yield "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div id=\"input-option-";
                    // line 1421
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1421);
                    yield "\" class=\"input-group\">
                            <input type=\"time\" name=\"variant[";
                    // line 1422
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1422);
                    yield "]\" value=\"";
                    yield (((($_v45 = ($context["variant"] ?? null)) && is_array($_v45) || $_v45 instanceof ArrayAccess ? ($_v45[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1422)] ?? null) : null)) ? ((($_v46 = ($context["variant"] ?? null)) && is_array($_v46) || $_v46 instanceof ArrayAccess ? ($_v46[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1422)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1422)));
                    yield "\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1425
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1425);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1425);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1425);
                    yield "\" class=\"form-check-input\"";
                    if ((($_v47 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1425)) && is_array($_v47) || $_v47 instanceof ArrayAccess ? ($_v47[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1425)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1425);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1429
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1429);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1433
                yield "
                    ";
                // line 1434
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1434) == "datetime")) {
                    // line 1435
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1435)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 1436
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1436);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1436);
                    yield "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group\">
                            <input type=\"datetime-local\" name=\"variant[";
                    // line 1439
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1439);
                    yield "]\" value=\"";
                    yield (((($_v48 = ($context["variant"] ?? null)) && is_array($_v48) || $_v48 instanceof ArrayAccess ? ($_v48[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1439)] ?? null) : null)) ? ((($_v49 = ($context["variant"] ?? null)) && is_array($_v49) || $_v49 instanceof ArrayAccess ? ($_v49[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1439)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1439)));
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1439);
                    yield "\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1442
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1442);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1442);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1442);
                    yield "\" class=\"form-check-input\"";
                    if ((($_v50 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1442)) && is_array($_v50) || $_v50 instanceof ArrayAccess ? ($_v50[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1442)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1442);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1446
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1446);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1450
                yield "                  </fieldset>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1452
            yield "              </div>
            ";
        }
        // line 1454
        yield "            <div id=\"tab-subscription\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-subscription\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>";
        // line 1459
        yield ($context["entry_subscription"] ?? null);
        yield "</th>
                      <th>";
        // line 1460
        yield ($context["entry_customer_group"] ?? null);
        yield "</th>
                      <th>";
        // line 1461
        yield ($context["entry_trial_price"] ?? null);
        yield "</th>
                      <th>";
        // line 1462
        yield ($context["entry_price"] ?? null);
        yield "</th>
                      <th>
                        ";
        // line 1464
        if (($context["master_id"] ?? null)) {
            // line 1465
            yield "                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_subscription]\" value=\"1\" id=\"input-variant-product-subscription\" data-oc-toggle=\"switch\" data-oc-target=\"#product-subscription\" class=\"form-check-input\"";
            // line 1466
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_subscription", [], "any", false, false, false, 1466)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-product-subscription\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1468
        yield "</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1472
        $context["subscription_row"] = 0;
        // line 1473
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_subscriptions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_subscription"]) {
            // line 1474
            yield "                      <tr id=\"subscription-row-";
            yield ($context["subscription_row"] ?? null);
            yield "\">
                        <td><select name=\"product_subscription[";
            // line 1475
            yield ($context["subscription_row"] ?? null);
            yield "][subscription_plan_id]\" class=\"form-select\">
                            ";
            // line 1476
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 1477
                yield "                              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 1477);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 1477) == CoreExtension::getAttribute($this->env, $this->source, $context["product_subscription"], "subscription_plan_id", [], "any", false, false, false, 1477))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 1477);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['subscription_plan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1479
            yield "                          </select></td>
                        <td><select name=\"product_subscription[";
            // line 1480
            yield ($context["subscription_row"] ?? null);
            yield "][customer_group_id]\" class=\"form-select\">
                            ";
            // line 1481
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1482
                yield "                              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1482);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1482) == CoreExtension::getAttribute($this->env, $this->source, $context["product_subscription"], "customer_group_id", [], "any", false, false, false, 1482))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1482);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1484
            yield "                          </select></td>
                        <td><input type=\"text\" name=\"product_subscription[";
            // line 1485
            yield ($context["subscription_row"] ?? null);
            yield "][trial_price]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_subscription"], "trial_price", [], "any", false, false, false, 1485);
            yield "\" placeholder=\"";
            yield ($context["entry_trial_price"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td><input type=\"text\" name=\"product_subscription[";
            // line 1486
            yield ($context["subscription_row"] ?? null);
            yield "][price]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_subscription"], "price", [], "any", false, false, false, 1486);
            yield "\" placeholder=\"";
            yield ($context["entry_price"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#subscription-row-";
            // line 1487
            yield ($context["subscription_row"] ?? null);
            yield "').remove()\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1489
            $context["subscription_row"] = (($context["subscription_row"] ?? null) + 1);
            // line 1490
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_subscription'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1491
        yield "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"4\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-subscription\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1495
        yield ($context["button_subscription_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div id=\"tab-discount\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-discount\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>";
        // line 1506
        yield ($context["entry_customer_group"] ?? null);
        yield "</th>
                      <th class=\"text-end\">";
        // line 1507
        yield ($context["entry_quantity"] ?? null);
        yield "</th>
                      <th class=\"text-end\">";
        // line 1508
        yield ($context["entry_priority"] ?? null);
        yield "</th>
                      <th class=\"text-end\">";
        // line 1509
        yield ($context["entry_price"] ?? null);
        yield "</th>
                      <th class=\"text-end\">";
        // line 1510
        yield ($context["entry_type"] ?? null);
        yield "</th>
                      <th class=\"text-end\">";
        // line 1511
        yield ($context["entry_special"] ?? null);
        yield "</th>
                      <th>";
        // line 1512
        yield ($context["entry_date_start"] ?? null);
        yield "</th>
                      <th>";
        // line 1513
        yield ($context["entry_date_end"] ?? null);
        yield "</th>
                      <th class=\"text-end\">";
        // line 1514
        if (($context["master_id"] ?? null)) {
            // line 1515
            yield "                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[product_discount]\" value=\"1\" id=\"input-variant-product-discount\" data-oc-toggle=\"switch\" data-oc-target=\"#product-discount\" class=\"form-check-input\"";
            // line 1516
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_discount", [], "any", false, false, false, 1516)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-product-discount\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1518
        yield "</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1522
        $context["discount_row"] = 0;
        // line 1523
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 1524
            yield "                      <tr id=\"discount-row-";
            yield ($context["discount_row"] ?? null);
            yield "\">
                        <td><select name=\"product_discount[";
            // line 1525
            yield ($context["discount_row"] ?? null);
            yield "][customer_group_id]\" class=\"form-select\">
                            ";
            // line 1526
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1527
                yield "                              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1527);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1527) == CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 1527))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1527);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1529
            yield "                          </select></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[";
            // line 1530
            yield ($context["discount_row"] ?? null);
            yield "][quantity]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 1530);
            yield "\" placeholder=\"";
            yield ($context["entry_quantity"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[";
            // line 1531
            yield ($context["discount_row"] ?? null);
            yield "][priority]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 1531);
            yield "\" placeholder=\"";
            yield ($context["entry_priority"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[";
            // line 1532
            yield ($context["discount_row"] ?? null);
            yield "][price]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 1532);
            yield "\" placeholder=\"";
            yield ($context["entry_price"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td><select name=\"product_discount[";
            // line 1533
            yield ($context["discount_row"] ?? null);
            yield "][type]\" class=\"form-select\">
                            <option value=\"F\"";
            // line 1534
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "type", [], "any", false, false, false, 1534) == "F")) {
                yield " selected";
            }
            yield ">";
            yield ($context["text_fixed"] ?? null);
            yield "</option>
                            <option value=\"S\"";
            // line 1535
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "type", [], "any", false, false, false, 1535) == "S")) {
                yield " selected";
            }
            yield ">";
            yield ($context["text_subtract"] ?? null);
            yield "</option>
                            <option value=\"P\"";
            // line 1536
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "type", [], "any", false, false, false, 1536) == "P")) {
                yield " selected";
            }
            yield ">";
            yield ($context["text_percentage"] ?? null);
            yield "</option>
                          </select></td>
                        <td><div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"product_discount[";
            // line 1539
            yield ($context["discount_row"] ?? null);
            yield "][special]\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"product_discount[";
            // line 1540
            yield ($context["discount_row"] ?? null);
            yield "][special]\" value=\"1\" class=\"form-check-input\"";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "special", [], "any", false, false, false, 1540)) {
                yield " checked";
            }
            yield "/>
                          </div></td>
                        <td><input type=\"date\" name=\"product_discount[";
            // line 1542
            yield ($context["discount_row"] ?? null);
            yield "][date_start]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 1542);
            yield "\" placeholder=\"";
            yield ($context["entry_date_start"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td><input type=\"date\" name=\"product_discount[";
            // line 1543
            yield ($context["discount_row"] ?? null);
            yield "][date_end]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 1543);
            yield "\" placeholder=\"";
            yield ($context["entry_date_end"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#discount-row-";
            // line 1544
            yield ($context["discount_row"] ?? null);
            yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1546
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 1547
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_discount'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1548
        yield "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"8\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-discount\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1552
        yield ($context["button_discount_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div id=\"tab-image\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1560
        yield ($context["text_image"] ?? null);
        yield "</legend>
                <div id=\"image\" class=\"border rounded d-block\" style=\"max-width: 300px;\">
                  <img src=\"";
        // line 1562
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"image\" value=\"";
        yield ($context["image"] ?? null);
        yield "\" id=\"input-image\"/>
                  <div class=\"d-grid\">
                    <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 1564
        yield ($context["button_edit"] ?? null);
        yield "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 1565
        yield ($context["button_clear"] ?? null);
        yield "</button>
                    ";
        // line 1566
        if (($context["master_id"] ?? null)) {
            // line 1567
            yield "                      <div class=\"mx-auto w-25\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[image]\" value=\"1\" id=\"input-variant-image\" data-oc-toggle=\"switch\" data-oc-target=\"#image\" class=\"form-check-input\"";
            // line 1569
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "image", [], "any", false, false, false, 1569)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-image\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 1573
        yield "                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1577
        yield ($context["text_image_additional"] ?? null);
        yield "</legend>
                <div class=\"table-responsive\">
                  <table id=\"product-image\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <th>";
        // line 1582
        yield ($context["entry_image"] ?? null);
        yield "</th>
                        <th>";
        // line 1583
        yield ($context["entry_sort_order"] ?? null);
        yield "</th>
                        <th class=\"text-end\">
                          ";
        // line 1585
        if (($context["master_id"] ?? null)) {
            // line 1586
            yield "                            <div class=\"form-check form-switch\">
                              <input type=\"checkbox\" name=\"override[product_image]\" value=\"1\" id=\"input-variant-product-image\" data-oc-toggle=\"switch\" data-oc-target=\"#product-image\" class=\"form-check-input\"";
            // line 1587
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_image", [], "any", false, false, false, 1587)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-product-image\" class=\"form-check-label\"></label>
                            </div>
                          ";
        }
        // line 1589
        yield "</th>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 1593
        $context["image_row"] = 0;
        // line 1594
        yield "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1595
            yield "                        <tr id=\"product-image-row-";
            yield ($context["image_row"] ?? null);
            yield "\">
                          <td>
                            <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                              <img src=\"";
            // line 1598
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 1598);
            yield "\" alt=\"\" title=\"\" id=\"product-image-";
            yield ($context["image_row"] ?? null);
            yield "\" data-oc-placeholder=\"";
            yield ($context["placeholder"] ?? null);
            yield "\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"product_image[";
            yield ($context["image_row"] ?? null);
            yield "][image]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 1598);
            yield "\" id=\"input-product-image-";
            yield ($context["image_row"] ?? null);
            yield "\"/>
                              <div class=\"d-grid\">
                                <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-";
            // line 1600
            yield ($context["image_row"] ?? null);
            yield "\" data-oc-thumb=\"#product-image-";
            yield ($context["image_row"] ?? null);
            yield "\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
            yield ($context["button_edit"] ?? null);
            yield "</button>
                                <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-";
            // line 1601
            yield ($context["image_row"] ?? null);
            yield "\" data-oc-thumb=\"#product-image-";
            yield ($context["image_row"] ?? null);
            yield "\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
            yield ($context["button_clear"] ?? null);
            yield "</button>
                              </div>
                            </div>
                          </td>
                          <td><input type=\"text\" name=\"product_image[";
            // line 1605
            yield ($context["image_row"] ?? null);
            yield "][sort_order]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 1605);
            yield "\" placeholder=\"";
            yield ($context["entry_sort_order"] ?? null);
            yield "\" class=\"form-control\"/></td>
                          <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#product-image-row-";
            // line 1606
            yield ($context["image_row"] ?? null);
            yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                        </tr>
                        ";
            // line 1608
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 1609
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_image'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1610
        yield "                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan=\"2\"></td>
                        <td class=\"text-end\"><button type=\"button\" id=\"button-image\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1614
        yield ($context["button_image_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </fieldset>
            </div>

            ";
        // line 1668
        yield "
            ";
        // line 1697
        yield "
            ";
        // line 1727
        yield "
            <div id=\"tab-report\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1730
        yield ($context["text_report"] ?? null);
        yield "</legend>
                <div id=\"report\">";
        // line 1731
        yield ($context["report"] ?? null);
        yield "</div>
              </fieldset>
            </div>
            
            <div id=\"tab-batch\" class=\"tab-pane\">
              <fieldset>
                <legend>Batch Details</legend>
            
                <div class=\"row mb-3\">
                    <div class=\"col-sm-3\">
                    <label class=\"col-form-label\">Batch Number</label>
                    <input type=\"text\" name=\"batch_number\" id=\"input-batch-number\"class=\"form-control\" placeholder=\"Enter Batch Number\">
                  </div>
                    <div class=\"col-sm-3\">
                  <label class=\"col-form-label\">Purchase Price</label>
                      <input type=\"text\" name=\"received_price\" value=\"";
        // line 1746
        yield ($context["received_price"] ?? null);
        yield "\" id=\"input-received_price\" class=\"form-control\"/>
                  </div>
                
                
                <div class=\"col-sm-3\">
                  <label class=\" col-form-label\">Purchase Quantity</label>
                      <input type=\"text\" name=\"r_tax\" value=\"";
        // line 1752
        yield ($context["r_tax"] ?? null);
        yield "\" id=\"input-r_tax\" class=\"form-control\"/>
                  </div>
            
                  <div class=\"col-sm-3\">
                    <label class=\"col-form-label\">Total Purchase Price</label>
                    <input type=\"text\" name=\"total_received_price\"id=\"input-total-received-price\"class=\"form-control\" readonly>
                  </div>
            
                  <div class=\"col-sm-3\">
                    <label class=\"col-form-label\">Total Wholesale Price</label>
                    <input type=\"text\" name=\"total_wholesale_price\"id=\"input-total-wholesale-price\"class=\"form-control\" readonly>
                  </div>
            
                  <div class=\"col-sm-3\">
                    <label class=\"col-form-label\">Total Retail Price</label>
                    <input type=\"text\" name=\"total_retail_price\"id=\"input-total-retail-price\"class=\"form-control\" readonly>
                  </div>
                </div>
            
              </fieldset>
            </div>

          </div>
          <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 1775
        yield ($context["product_id"] ?? null);
        yield "\" id=\"input-product-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('textarea[data-oc-toggle=\\'ckeditor\\']').ckeditor({
    language: '";
        // line 1783
        yield ($context["ckeditor"] ?? null);
        yield "'
});

var code_row = ";
        // line 1786
        yield ($context["code_row"] ?? null);
        yield ";

\$('#button-code').on('click', function() {
    var html = '';

    let code = \$('#input-code').val();
    let value = \$('#input-value').val();

    html += '<tr id=\"code-row-' + code_row + '\">';
    html += '  <td style=\"width: 1px;\">' + code + '<input type=\"hidden\" name=\"product_code[' + code_row + '][code]\" value=\"' + code + '\"/></td>';
    html += '  <td>' + value + '<div id=\"error-code-' + code_row + '\" class=\"invalid-feedback\"></div><input type=\"hidden\" name=\"product_code[' + code_row + '][value]\" value=\"' + value + '\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-code').append(html);

    code_row++;
});

\$('#product-code').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Manufacturer
\$('#input-manufacturer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/manufacturer.autocomplete&user_token=";
        // line 1813
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    manufacturer_id: 0,
                    name: '";
        // line 1818
        yield ($context["text_none"] ?? null);
        yield "'
                });

                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['manufacturer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-manufacturer').val(decodeHTMLEntities(item['label']));
        \$('#input-manufacturer-id').val(item['value']);
    }
});

// Category
\$('#input-category').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/category.autocomplete&user_token=";
        // line 1840
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['category_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-category').val('');

        \$('#product-category-' + item['value']).remove();

        html = '<tr id=\"product-category-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-category tbody').append(html);
    }
});

\$('#product-category').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Filter
\$('#input-filter').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/filter.autocomplete&user_token=";
        // line 1874
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['filter_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-filter').val('');

        \$('#product-filter-' + item['value']).remove();

        html = '<tr id=\"product-filter-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-filter tbody').append(html);
    }
});

\$('#product-filter').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Downloads
\$('#input-download').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/download.autocomplete&user_token=";
        // line 1908
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['download_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-download').val('');

        \$('#product-download-' + item['value']).remove();

        html = '<tr id=\"product-download-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-download tbody').append(html);
    }
});

\$('#product-download').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Related
\$('#input-related').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token=";
        // line 1942
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-related').val('');

        \$('#product-related-' + item['value']).remove();

        html = '<tr id=\"product-related-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-related tbody').append(html);
    }
});

\$('#product-related').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

var attributeautocomplete = function(attribute_row) {
    \$('#input-attribute-' + attribute_row).autocomplete({
        'source': function(request, response) {
            \$.ajax({
                url: 'index.php?route=catalog/attribute.autocomplete&user_token=";
        // line 1976
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
                dataType: 'json',
                success: function(json) {
                    response(\$.map(json, function(item) {
                        return {
                            category: item.attribute_group,
                            label: item.name,
                            value: item.attribute_id
                        }
                    }));
                }
            });
        },
        'select': function(item) {
            \$('#input-attribute-' + attribute_row).val(decodeHTMLEntities(item['label']));
            \$('#input-attribute-id-' + attribute_row).val(item['value']);
        }
    });
}

var attribute_row = ";
        // line 1996
        yield ($context["attribute_row"] ?? null);
        yield ";

\$('#product-attribute tr').each(function(index) {
    attributeautocomplete(index);
});

\$('#button-attribute').on('click', function() {
    html = '<tr id=\"attribute-row-' + attribute_row + '\">';
    html += '  <td>';
    html += '    <input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 2005
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_attribute"] ?? null), "js");
        yield "\" id=\"input-attribute-' + attribute_row + '\" data-oc-target=\"autocomplete-attribute-' + attribute_row + '\" class=\"form-control\" autocomplete=\"off\"/>';
    html += '    <input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" id=\"input-attribute-id-' + attribute_row + '\"/>';
    html += '    <ul id=\"autocomplete-attribute-' + attribute_row + '\" class=\"dropdown-menu\"></ul>';
    html += '  </td>';
    html += '  <td>';
  ";
        // line 2010
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2011
            yield "    html += '<div class=\"input-group\">';
    html += '  <div class=\"input-group-text\"><img src=\"";
            // line 2012
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 2012);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2012), "js");
            yield "\" /></div>';
    html += '  <textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            // line 2013
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2013);
            yield "][text]\" rows=\"5\" placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_text"] ?? null), "js");
            yield "\" id=\"input-text-' + attribute_row + '-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2013);
            yield "\" class=\"form-control\"></textarea>';
    html += '</div>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2016
        yield "    html += '  </td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#attribute-row-' + attribute_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2017
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-attribute').append(html);

    attributeautocomplete(attribute_row);

    attribute_row++;
});

";
        // line 2027
        if ( !($context["master_id"] ?? null)) {
            // line 2028
            yield "var option_row = ";
            yield ($context["option_row"] ?? null);
            yield ";

\$('#input-option').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/option.autocomplete&user_token=";
            // line 2033
            yield ($context["user_token"] ?? null);
            yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        category: item['category'],
                        label: item['name'],
                        value: item['option_id'],
                        type: item['type'],
                        option_value: item['option_value']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        html = '<fieldset id=\"option-row-' + option_row + '\">';
        html += '  <legend class=\"float-none\">' + item['label'] + '</legend>';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + decodeHTMLEntities(item['label']) + '\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

        html += '  <div class=\"row align-items-center\">';
        html += '    <div class=\"col-11\">';

        html += '      <div class=\"mb-3\">';
        html += '        <label for=\"input-required-' + option_row + '\" class=\"form-label\">";
            // line 2060
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_required"] ?? null), "js");
            yield "</label>';
        html += '\t       <select name=\"product_option[' + option_row + '][required]\" id=\"input-required-' + option_row + '\" class=\"form-select\">';
        html += '\t         <option value=\"1\">";
            // line 2062
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_yes"] ?? null), "js");
            yield "</option>';
        html += '\t         <option value=\"0\">";
            // line 2063
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_no"] ?? null), "js");
            yield "</option>';
        html += '\t       </select>';
        html += '      </div>';

        if (item['type'] == 'text') {
            html += '  <div class=\"mb-3\">';
            html += '     <label for=\"input-option-' + option_row + '\" class=\"form-label\">";
            // line 2069
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
            html += '     <input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 2070
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '\t </div>';
        }

        if (item['type'] == 'textarea') {
            html += '  <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">";
            // line 2076
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
            html += '    <textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
            // line 2077
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-' + option_row + '\" class=\"form-control\"></textarea>';
            html += '\t </div>';
        }

        if (item['type'] == 'file') {
            html += '  <div class=\"mb-3 d-none\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">";
            // line 2083
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
            html += '    <input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 2084
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'date') {
            html += '  <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">";
            // line 2090
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
            html += '    <input type=\"date\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 2091
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'time') {
            html += '  <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">";
            // line 2097
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
            html += '    <input type=\"time\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 2098
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'datetime') {
            html += '\t <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">";
            // line 2104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
            html += '    <input type=\"datetime-local\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 2105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
            html += '<div class=\"table-responsive\">';
            html += '  <table class=\"table table-bordered table-hover\">';
            html += '  \t <thead>';
            html += '      <tr>';
            html += '        <td>";
            // line 2114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</td>';
            html += '        <td class=\"text-end\">";
            // line 2115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_quantity"] ?? null), "js");
            yield "</td>';
            html += '        <td>";
            // line 2116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_subtract"] ?? null), "js");
            yield "</td>';
            html += '        <td class=\"text-end\">";
            // line 2117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_price"] ?? null), "js");
            yield "</td>';
            html += '        <td class=\"text-end\">";
            // line 2118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_points"] ?? null), "js");
            yield "</td>';
            html += '        <td class=\"text-end\">";
            // line 2119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_weight"] ?? null), "js");
            yield "</td>';
            html += '        <td></td>';
            html += '      </tr>';
            html += '    </thead>';
            html += '    <tbody id=\"option-value-' + option_row + '\"></tbody>';
            html += '    <tfoot>';
            html += '      <tr>';
            html += '        <td colspan=\"6\"></td>';
            html += '        <td class=\"text-end\"><button type=\"button\" data-option-row=\"' + option_row + '\" data-bs-toggle=\"tooltip\" title=\"";
            // line 2127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_option_value_add"] ?? null), "js");
            yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>';
            html += '      </tr>';
            html += '    </tfoot>';
            html += '  </table>';
            html += '</div>';

            html += '<select id=\"product-option-values-' + option_row + '\" class=\"d-none\">';

            for (i = 0; i < item['option_value'].length; i++) {
                html += '<option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
            }

            html += '</select>';
        }

        html += '\t </div>';
        html += '\t <div class=\"col\">';
        html += '    <button type=\"button\" class=\"btn btn-danger\" onclick=\"\$(\\'#option-row-' + option_row + '\\').remove();\"><i class=\"fa-solid fa-minus-circle\"></i></button>';
        html += '  </div>';
        html += '</fieldset>';

        \$('#option').append(html);

        option_row++;
    }
});

var option_value_row = ";
            // line 2154
            yield ($context["option_value_row"] ?? null);
            yield ";

\$('#option').on('click', '.btn-primary', function() {
    var element = this;

    if (\$(element).attr('data-option-value-row')) {
        element.option_value_row = \$(element).attr('data-option-value-row');
    } else {
        element.option_value_row = option_value_row;
    }

    \$('.modal').remove();

    html = '<div id=\"modal-option\" class=\"modal fade\">';
    html += '  <div class=\"modal-dialog\">';
    html += '    <div class=\"modal-content\">';
    html += '      <div class=\"modal-header\">';
    html += '        <h5 class=\"modal-title\"><i class=\"fa-solid fa-pencil\"></i> ";
            // line 2171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_option_value"] ?? null), "js");
            yield "</h5> <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>';
    html += '      </div>';
    html += '      <div class=\"modal-body\">';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-option-value\" class=\"form-label\">";
            // line 2175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
    html += '      \t   <select name=\"option_value_id\" id=\"input-modal-option-value\" class=\"form-select\">';

    option_value = \$('#product-option-values-' + \$(element).attr('data-option-row') + ' option');

    for (i = 0; i < option_value.length; i++) {
        if (\$(element).attr('data-option-value-row') && \$(option_value[i]).val() == \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][option_value_id]\\']').val()) {
            html += '<option value=\"' + \$(option_value[i]).val() + '\" selected>' + \$(option_value[i]).text() + '</option>';
        } else {
            html += '<option value=\"' + \$(option_value[i]).val() + '\">' + \$(option_value[i]).text() + '</option>';
        }
    }

    html += '      \t   </select>';
    html += '          <input type=\"hidden\" name=\"product_option_value_id\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][product_option_value_id]\\']').val() : '') + '\"/>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-quantity\" class=\"form-label\">";
            // line 2192
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_quantity"] ?? null), "js");
            yield "</label>';
    html += '      \t   <input type=\"text\" name=\"quantity\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][quantity]\\']').val() : '1') + '\" placeholder=\"";
            // line 2193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_quantity"] ?? null), "js");
            yield "\" id=\"input-modal-quantity\" class=\"form-control\"/>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-subtract\" class=\"form-label\">";
            // line 2196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_subtract"] ?? null), "js");
            yield "</label>';
    html += '      \t   <select name=\"subtract\" id=\"input-modal-subtract\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\\']').val() == '1') {
        html += '        <option value=\"1\" selected>";
            // line 2200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_yes"] ?? null), "js");
            yield "</option>';
        html += '      \t <option value=\"0\">";
            // line 2201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_no"] ?? null), "js");
            yield "</option>';
    } else {
        html += '      \t <option value=\"1\">";
            // line 2203
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_yes"] ?? null), "js");
            yield "</option>';
        html += '      \t <option value=\"0\" selected>";
            // line 2204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_no"] ?? null), "js");
            yield "</option>';
    }

    html += '      \t   </select>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-price\" class=\"form-label\">";
            // line 2210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_price"] ?? null), "js");
            yield "</label>';
    html += '          <div class=\"input-group\">';
    html += '            <select name=\"price_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\\']').val() == '+') {
        html += '      \t   <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t   <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"price\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price]\\']').val() : '0') + '\" placeholder=\"";
            // line 2227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_price"] ?? null), "js");
            yield "\" id=\"input-modal-price\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-points\" class=\"form-label\">";
            // line 2231
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_points"] ?? null), "js");
            yield "</label>';
    html += '          <div class=\"input-group\">';
    html += '      \t     <select name=\"points_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\\']').val() == '+') {
        html += '      \t       <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t       <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"points\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points]\\']').val() : '0') + '\" placeholder=\"";
            // line 2248
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_points"] ?? null), "js");
            yield "\" id=\"input-modal-points\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-weight\" class=\"form-label\">";
            // line 2252
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_weight"] ?? null), "js");
            yield "</label>';
    html += '          <div class=\"input-group\">';
    html += '      \t     <select name=\"weight_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\\']').val() == '+') {
        html += '      \t       <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t       <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"weight\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight]\\']').val() : '0') + '\" placeholder=\"";
            // line 2269
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_weight"] ?? null), "js");
            yield "\" id=\"input-modal-weight\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';
    html += '      </div>';
    html += '      <div class=\"modal-footer\">';
    html += '\t       <button type=\"button\" id=\"button-save\" data-option-row=\"' + \$(element).attr('data-option-row') + '\" data-option-value-row=\"' + element.option_value_row + '\" class=\"btn btn-primary\">";
            // line 2274
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_save"] ?? null), "js");
            yield "</button> <button type=\"button\" class=\"btn btn-light\" data-bs-dismiss=\"modal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_cancel"] ?? null), "js");
            yield "</button>';
    html += '      </div>';
    html += '    </div>';
    html += '  </div>';
    html += '</div>';

    \$('body').append(html);

    \$('#modal-option').modal('show');

    \$('#modal-option #button-save').on('click', function() {
        html = '<tr id=\"option-value-row-' + element.option_value_row + '\">';
        html += '  <td>' + \$('#modal-option select[name=\\'option_value_id\\'] option:selected').text() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][option_value_id]\" value=\"' + \$('#modal-option select[name=\\'option_value_id\\']').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][product_option_value_id]\" value=\"' + \$('#modal-option input[name=\\'product_option_value_id\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option input[name=\\'quantity\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][quantity]\" value=\"' + \$('#modal-option input[name=\\'quantity\\']').val() + '\"/></td>';
        html += '  <td>' + (\$('#modal-option select[name=\\'subtract\\'] option:selected').val() == '1' ? '";
            // line 2288
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_yes"] ?? null), "js");
            yield "' : '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_no"] ?? null), "js");
            yield "') + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\" value=\"' + \$('#modal-option select[name=\\'subtract\\'] option:selected').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'price\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\" value=\"' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price]\" value=\"' + \$('#modal-option input[name=\\'price\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\"> ' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'points\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\" value=\"' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points]\" value=\"' + \$('#modal-option input[name=\\'points\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'weight\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\" value=\"' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight]\" value=\"' + \$('#modal-option input[name=\\'weight\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
            // line 2292
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_edit"] ?? null), "js");
            yield "\" data-option-row=\"' + \$(element).attr('data-option-row') + '\" data-option-value-row=\"' + element.option_value_row + '\"class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></button> <button type=\"button\" onclick=\"\$(\\'#option-value-row-' + element.option_value_row + '\\').remove();\" data-bs-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        if (\$(element).attr('data-option-value-row')) {
            \$('#option-value-row-' + element.option_value_row).replaceWith(html);
        } else {
            \$('#option-value-' + \$(element).attr('data-option-row')).append(html);

            option_value_row++;
        }

        \$('#modal-option').modal('hide');
    });
});
";
        }
        // line 2307
        yield "
var discount_row = ";
        // line 2308
        yield ($context["discount_row"] ?? null);
        yield ";

\$('#button-discount').on('click', function() {
    html = '<tr id=\"discount-row-' + discount_row + '\">';
    html += '  <td><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-select\">';
  ";
        // line 2313
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2314
            yield "    html += '    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2314);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2314), "js");
            yield "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2316
        yield "    html += '  </select><input type=\"hidden\" name=\"product_discount[' + discount_row + '][product_discount_id]\" value=\"\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"1\" placeholder=\"";
        // line 2317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_quantity"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 2318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_priority"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 2319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_price"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td><select name=\"product_discount[' + discount_row + '][type]\" class=\"form-select\">';
    html += '    <option value=\"F\">";
        // line 2321
        yield ($context["text_fixed"] ?? null);
        yield "</option>';
    html += '    <option value=\"S\">";
        // line 2322
        yield ($context["text_subtract"] ?? null);
        yield "</option>';
    html += '    <option value=\"P\">";
        // line 2323
        yield ($context["text_percentage"] ?? null);
        yield "</option>';
    html += '  </select></td>';
    html += '  <td><div class=\"form-check form-switch form-switch-lg\">';
    html += '    <input type=\"hidden\" name=\"product_discount[' + discount_row + '][special]\" value=\"0\"/>';
    html += '    <input type=\"checkbox\" name=\"product_discount[' + discount_row + '][special]\" value=\"1\" class=\"form-check-input\"/>';
    html += '  </div></td>';
    html += '  <td><input type=\"date\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 2329
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_date_start"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td><input type=\"date\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 2330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_date_end"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#discount-row-' + discount_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2331
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-discount tbody').append(html);

    discount_row++;
});

var image_row = ";
        // line 2339
        yield ($context["image_row"] ?? null);
        yield ";

\$('#button-image').on('click', function() {
    html = '<tr id=\"product-image-row-' + image_row + '\">';
    html += '  <td><div class=\"border rounded d-block\" style=\"max-width: 300px;\">';
    html += '    <img src=\"";
        // line 2344
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["placeholder"] ?? null), "js");
        yield "\" alt=\"\" title=\"\" id=\"thumb-image-' + image_row + '\" data-oc-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["placeholder"] ?? null), "js");
        yield "\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-product-image-' + image_row + '\"/>';
    html += '    <div class=\"d-grid\">';
    html += '      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#thumb-image-' + image_row + '\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 2346
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_edit"] ?? null), "js");
        yield "</button>';
    html += '      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#thumb-image-' + image_row + '\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 2347
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_clear"] ?? null), "js");
        yield "</button>';
    html += '    </div>';
    html += '  </div></td>';
    html += '  <td><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"0\" placeholder=\"";
        // line 2350
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_sort_order"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#product-image-row-' + image_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2351
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-image tbody').append(html);

    image_row++;
});

var subscription_row = ";
        // line 2359
        yield ($context["subscription_row"] ?? null);
        yield ";

\$('#button-subscription').on('click', function() {
    html = '<tr id=\"subscription-row-' + subscription_row + '\">';
    html += '  <td><select name=\"product_subscription[' + subscription_row + '][subscription_plan_id]\" class=\"form-select\">';
  ";
        // line 2364
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_plans"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
            // line 2365
            yield "    html += '      <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 2365);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 2365), "js");
            yield "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription_plan'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2367
        yield "    html += '  </select></td>';
    html += '  <td><select name=\"product_subscription[' + subscription_row + '][customer_group_id]\" class=\"form-select\">';
  ";
        // line 2369
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2370
            yield "    html += '      <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2370);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2370), "js");
            yield "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2372
        yield "    html += '  <select></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_subscription[' + subscription_row + '][trial_price]\" value=\"\" placeholder=\"";
        // line 2373
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_trial_price"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_subscription[' + subscription_row + '][price]\" value=\"\" placeholder=\"";
        // line 2374
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_price"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#subscription-row-' + subscription_row + '\\').remove()\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-subscription tbody').append(html);

    subscription_row++;
});

";
        // line 2383
        if (($context["master_id"] ?? null)) {
            // line 2384
            yield "// Variable products
\$('input[data-oc-toggle=\\'switch\\']').on('change', function(e) {
    var element = this;

    var target = \$(this).attr('data-oc-target');

    // First we need to grab the default values
    // Now we need to enable or disable any fields in the targets
    \$.merge(\$(target), \$(target).find('input, textarea, select, button')).not('[data-oc-toggle=\\'switch\\']').each(function(i, elem) {
        // Text Textarea
        if (\$(this).is('input[type=\\'text\\'], textarea')) {
            \$(this).prop('readonly', !\$(element).prop('checked'));
        }

        // CKEditor readonly
        if (\$(this).is('[data-oc-toggle=\\'ckeditor\\']')) {
            var editor = CKEDITOR.instances[\$(this).attr('id')];

            if (editor.editable() == undefined) {
                editor.on('instanceReady', function() {
                    this.setReadOnly(!\$(element).prop('checked'));
                });
            } else {
                editor.setReadOnly(!\$(element).prop('checked'));
            }
        }

        // Radio Checkbox
        if (\$(this).is('input[type=\\'radio\\'], input[type=\\'checkbox\\'], div[data-bs-toggle=\\'buttons\\']')) {
            if (!\$(element).prop('checked')) {
                \$(this).on('click', function(e) {
                    return false;
                });
            } else {
                \$(this).off('click');
            }
        }

        // Select
        if (\$(this).is('select')) {
            if (!\$(element).prop('checked')) {
                \$(this).addClass('.disabled');

                \$(this).prop('readonly', true);
            } else {
                \$(this).removeClass('disabled');

                \$(this).prop('readonly', false);
            }

            \$(this).find('option').not(':selected').prop('disabled', !\$(element).prop('checked'));
        }

        // Button
        if (\$(this).is('button')) {
            if (!\$(element).prop('checked')) {
                \$(this).prop('disabled', true);
            } else {
                \$(this).prop('disabled', false);
            }
        }
    });
});

\$('input[data-oc-toggle=\\'switch\\']').trigger('change');
";
        }
        // line 2450
        yield "
\$('#report').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#report').load(this.href);
});


//-->
</script>
<script>
window.generateBarcode = function () {
    const type = document.getElementById('barcodeType').value;

    fetch(
        'index.php?route=catalog/product.generateBarcode'
        + '&user_token=";
        // line 2466
        yield ($context["user_token"] ?? null);
        yield "'
        + '&type=' + type
    )
    .then(res => res.json())
    .then(data => {
        if (!data.success) return;

        const input = document.getElementById('barcodeInput');
        input.value = data.barcode;
        input.name  = data.field;
    });
};

document.addEventListener('DOMContentLoaded', function () {

    const barcodeType  = document.getElementById('barcodeType');
    const barcodeInput = document.getElementById('barcodeInput');

    const skuValue = document.getElementById('skuValue').value;
    const upcValue = document.getElementById('upcValue').value;

    function updateBarcodeField() {
        if (barcodeType.value === 'box') {
            barcodeInput.value = upcValue;
            barcodeInput.name  = 'upc'; 
        } else {
            barcodeInput.value = skuValue;
            barcodeInput.name  = 'sku';
        }
    }

    updateBarcodeField();
    barcodeType.addEventListener('change', updateBarcodeField);
});


const RACK_PREFIX = 'RACK-';

function fixRackPrefix(input) {
    if (!input.value.startsWith(RACK_PREFIX)) {
        let num = input.value.replace(/[^0-9]/g, '');
        input.value = RACK_PREFIX + num;
    }
}

function protectRackPrefix(e, input) {
    const cursorPos = input.selectionStart;

    // Prevent deleting/modifying \"RACK-\"
    if (cursorPos <= RACK_PREFIX.length &&
        (e.key === 'Backspace' || e.key === 'Delete')) {
        e.preventDefault();
    }
}

// Force prefix on page load
document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('input-rack');
    if (input && input.value.trim() === '') {
        input.value = RACK_PREFIX;
    }
});



document.addEventListener('DOMContentLoaded', function () {

    function lockPrefix(input) {
        const prefix = input.dataset.prefix;

        function normalize() {
            if (!input.value.startsWith(prefix)) {
                input.value = prefix;
            }

            const number = input.value.slice(prefix.length).replace(/\\D/g, '');
            input.value = prefix + number;
        }

        // Initial cleanup
        normalize();

        // On typing
        input.addEventListener('input', normalize);

        // Prevent deleting prefix
        input.addEventListener('keydown', function (e) {
            const cursorPos = input.selectionStart;

            if (
                (e.key === 'Backspace' || e.key === 'Delete') &&
                cursorPos <= prefix.length
            ) {
                e.preventDefault();
            }
        });

        // Force cursor after prefix
        input.addEventListener('click', function () {
            if (input.selectionStart < prefix.length) {
                input.setSelectionRange(prefix.length, prefix.length);
            }
        });
    }

    lockPrefix(document.getElementById('input-r_tag'));
    lockPrefix(document.getElementById('input-w_tag'));

});
document.addEventListener('DOMContentLoaded', function () {
    const barcodeType = document.getElementById('barcodeType');
    const boxInput = document.getElementById('input-box-id');

    function toggleBoxInput() {
        if (barcodeType.value === 'box') {
            boxInput.disabled = true;
            boxInput.value = '';
        } else {
            boxInput.disabled = false;
        }
    }
    toggleBoxInput();
    barcodeType.addEventListener('change', toggleBoxInput);
});

function calculateBatchTotals() {
    const quantity = parseFloat(document.getElementById('input-r_tax')?.value) || 0;

    const receivedPrice  = parseFloat(document.getElementById('input-received_price')?.value) || 0;
    const wholesalePrice = parseFloat(document.getElementById('input-wholesale-price')?.value) || 0;
    const retailPrice    = parseFloat(document.getElementById('input-price')?.value) || 0;

    document.getElementById('input-total-received-price').value =
        (receivedPrice * quantity).toFixed(2);

    document.getElementById('input-total-wholesale-price').value =
        (wholesalePrice * quantity).toFixed(2);

    document.getElementById('input-total-retail-price').value =
        (retailPrice * quantity).toFixed(2);
}

// Recalculate when values change
['input-r_tax', 'input-received_price', 'input-wholesale-price', 'input-price']
  .forEach(id => {
    const el = document.getElementById(id);
    if (el) el.addEventListener('input', calculateBatchTotals);
});
</script>
<script>
document.addEventListener(\"DOMContentLoaded\", function () {

    const barcodeType = document.getElementById(\"barcodeType\");
    const boxInput = document.getElementById(\"input-box-id\");

    if (!barcodeType || !boxInput) return;

    boxInput.addEventListener(\"change\", function () {

        if (barcodeType.value !== \"unit\") return;

        const boxId = boxInput.value.trim();
        if (!boxId) return;

        fetch(\"index.php?route=catalog/product.getBoxProductName&user_token=";
        // line 2630
        yield ($context["user_token"] ?? null);
        yield "&box_id=\" + encodeURIComponent(boxId))
            .then(res => res.json())
            .then(json => {
                if (json.success && json.name) {

                    // Fill name in ALL language inputs
                    ";
        // line 2636
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2637
            yield "                        const nameInput";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2637);
            yield " = document.getElementById(\"input-name-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2637);
            yield "\");
                        if (nameInput";
            // line 2638
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2638);
            yield ") {
                            nameInput";
            // line 2639
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2639);
            yield ".value = json.name;
                        }
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2642
        yield "                }
            })
            .catch(err => console.log(err));
    });

});
</script>


";
        // line 2651
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
        return "admin/view/template/catalog/product_form.twig";
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
        return array (  4994 => 2651,  4983 => 2642,  4974 => 2639,  4970 => 2638,  4963 => 2637,  4959 => 2636,  4950 => 2630,  4783 => 2466,  4765 => 2450,  4697 => 2384,  4695 => 2383,  4684 => 2375,  4680 => 2374,  4676 => 2373,  4673 => 2372,  4662 => 2370,  4658 => 2369,  4654 => 2367,  4643 => 2365,  4639 => 2364,  4631 => 2359,  4620 => 2351,  4616 => 2350,  4610 => 2347,  4606 => 2346,  4599 => 2344,  4591 => 2339,  4580 => 2331,  4576 => 2330,  4572 => 2329,  4563 => 2323,  4559 => 2322,  4555 => 2321,  4550 => 2319,  4546 => 2318,  4542 => 2317,  4539 => 2316,  4528 => 2314,  4524 => 2313,  4516 => 2308,  4513 => 2307,  4493 => 2292,  4484 => 2288,  4465 => 2274,  4457 => 2269,  4437 => 2252,  4430 => 2248,  4410 => 2231,  4403 => 2227,  4383 => 2210,  4374 => 2204,  4370 => 2203,  4365 => 2201,  4361 => 2200,  4354 => 2196,  4348 => 2193,  4344 => 2192,  4324 => 2175,  4317 => 2171,  4297 => 2154,  4267 => 2127,  4256 => 2119,  4252 => 2118,  4248 => 2117,  4244 => 2116,  4240 => 2115,  4236 => 2114,  4224 => 2105,  4220 => 2104,  4211 => 2098,  4207 => 2097,  4198 => 2091,  4194 => 2090,  4185 => 2084,  4181 => 2083,  4172 => 2077,  4168 => 2076,  4159 => 2070,  4155 => 2069,  4146 => 2063,  4142 => 2062,  4137 => 2060,  4107 => 2033,  4098 => 2028,  4096 => 2027,  4083 => 2017,  4080 => 2016,  4067 => 2013,  4061 => 2012,  4058 => 2011,  4054 => 2010,  4046 => 2005,  4034 => 1996,  4011 => 1976,  3974 => 1942,  3937 => 1908,  3900 => 1874,  3863 => 1840,  3838 => 1818,  3830 => 1813,  3800 => 1786,  3794 => 1783,  3783 => 1775,  3757 => 1752,  3748 => 1746,  3730 => 1731,  3726 => 1730,  3721 => 1727,  3718 => 1697,  3715 => 1668,  3704 => 1614,  3698 => 1610,  3692 => 1609,  3690 => 1608,  3683 => 1606,  3675 => 1605,  3664 => 1601,  3656 => 1600,  3641 => 1598,  3634 => 1595,  3629 => 1594,  3627 => 1593,  3621 => 1589,  3613 => 1587,  3610 => 1586,  3608 => 1585,  3603 => 1583,  3599 => 1582,  3591 => 1577,  3585 => 1573,  3576 => 1569,  3572 => 1567,  3570 => 1566,  3566 => 1565,  3562 => 1564,  3553 => 1562,  3548 => 1560,  3537 => 1552,  3531 => 1548,  3525 => 1547,  3523 => 1546,  3516 => 1544,  3508 => 1543,  3500 => 1542,  3491 => 1540,  3487 => 1539,  3477 => 1536,  3469 => 1535,  3461 => 1534,  3457 => 1533,  3449 => 1532,  3441 => 1531,  3433 => 1530,  3430 => 1529,  3415 => 1527,  3411 => 1526,  3407 => 1525,  3402 => 1524,  3397 => 1523,  3395 => 1522,  3389 => 1518,  3381 => 1516,  3378 => 1515,  3376 => 1514,  3372 => 1513,  3368 => 1512,  3364 => 1511,  3360 => 1510,  3356 => 1509,  3352 => 1508,  3348 => 1507,  3344 => 1506,  3330 => 1495,  3324 => 1491,  3318 => 1490,  3316 => 1489,  3309 => 1487,  3301 => 1486,  3293 => 1485,  3290 => 1484,  3275 => 1482,  3271 => 1481,  3267 => 1480,  3264 => 1479,  3249 => 1477,  3245 => 1476,  3241 => 1475,  3236 => 1474,  3231 => 1473,  3229 => 1472,  3223 => 1468,  3215 => 1466,  3212 => 1465,  3210 => 1464,  3205 => 1462,  3201 => 1461,  3197 => 1460,  3193 => 1459,  3186 => 1454,  3182 => 1452,  3175 => 1450,  3168 => 1446,  3151 => 1442,  3141 => 1439,  3133 => 1436,  3126 => 1435,  3124 => 1434,  3121 => 1433,  3114 => 1429,  3097 => 1425,  3089 => 1422,  3085 => 1421,  3078 => 1419,  3071 => 1418,  3069 => 1417,  3066 => 1416,  3059 => 1412,  3042 => 1408,  3032 => 1405,  3024 => 1402,  3017 => 1401,  3015 => 1400,  3012 => 1399,  3005 => 1395,  2988 => 1391,  2976 => 1388,  2966 => 1387,  2958 => 1386,  2944 => 1385,  2938 => 1382,  2931 => 1381,  2929 => 1380,  2926 => 1379,  2919 => 1375,  2902 => 1371,  2890 => 1368,  2882 => 1365,  2875 => 1364,  2873 => 1363,  2870 => 1362,  2863 => 1358,  2846 => 1354,  2834 => 1351,  2826 => 1348,  2819 => 1347,  2817 => 1346,  2814 => 1345,  2807 => 1341,  2790 => 1337,  2785 => 1334,  2777 => 1331,  2770 => 1330,  2768 => 1329,  2763 => 1328,  2749 => 1327,  2745 => 1326,  2741 => 1325,  2729 => 1324,  2726 => 1323,  2722 => 1322,  2718 => 1321,  2712 => 1318,  2705 => 1317,  2703 => 1316,  2700 => 1315,  2693 => 1311,  2676 => 1307,  2671 => 1304,  2663 => 1301,  2656 => 1300,  2654 => 1299,  2649 => 1298,  2634 => 1297,  2632 => 1296,  2628 => 1295,  2616 => 1294,  2613 => 1293,  2609 => 1292,  2605 => 1291,  2599 => 1288,  2592 => 1287,  2590 => 1286,  2587 => 1285,  2580 => 1281,  2563 => 1277,  2558 => 1274,  2551 => 1272,  2544 => 1271,  2542 => 1270,  2531 => 1269,  2527 => 1268,  2523 => 1267,  2517 => 1266,  2511 => 1263,  2504 => 1262,  2502 => 1261,  2497 => 1259,  2494 => 1258,  2490 => 1257,  2487 => 1256,  2478 => 1250,  2473 => 1248,  2468 => 1246,  2463 => 1244,  2459 => 1242,  2453 => 1241,  2451 => 1240,  2442 => 1236,  2437 => 1233,  2432 => 1230,  2429 => 1229,  2418 => 1227,  2413 => 1226,  2411 => 1225,  2407 => 1224,  2398 => 1220,  2392 => 1216,  2386 => 1215,  2384 => 1214,  2371 => 1212,  2357 => 1211,  2352 => 1210,  2338 => 1209,  2333 => 1208,  2319 => 1207,  2314 => 1206,  2305 => 1205,  2299 => 1203,  2293 => 1201,  2291 => 1200,  2281 => 1199,  2267 => 1198,  2263 => 1197,  2258 => 1196,  2254 => 1195,  2250 => 1194,  2243 => 1190,  2239 => 1189,  2235 => 1188,  2231 => 1187,  2227 => 1186,  2223 => 1185,  2217 => 1181,  2215 => 1180,  2212 => 1179,  2196 => 1176,  2193 => 1175,  2191 => 1174,  2188 => 1173,  2172 => 1170,  2169 => 1169,  2167 => 1168,  2164 => 1167,  2148 => 1164,  2145 => 1163,  2143 => 1162,  2140 => 1161,  2124 => 1158,  2121 => 1157,  2119 => 1156,  2116 => 1155,  2100 => 1152,  2097 => 1151,  2095 => 1150,  2092 => 1149,  2076 => 1146,  2073 => 1145,  2071 => 1144,  2060 => 1140,  2052 => 1139,  2042 => 1138,  2019 => 1132,  2015 => 1131,  2011 => 1130,  2008 => 1129,  2003 => 1128,  2000 => 1127,  1998 => 1126,  1992 => 1122,  1990 => 1121,  1981 => 1115,  1975 => 1111,  1969 => 1110,  1967 => 1109,  1960 => 1107,  1957 => 1106,  1938 => 1104,  1932 => 1103,  1929 => 1102,  1925 => 1101,  1919 => 1098,  1901 => 1097,  1895 => 1095,  1890 => 1094,  1888 => 1093,  1882 => 1089,  1874 => 1087,  1871 => 1086,  1869 => 1085,  1865 => 1084,  1861 => 1083,  1852 => 1076,  1847 => 1015,  1838 => 1011,  1834 => 1009,  1832 => 1008,  1829 => 1007,  1810 => 1004,  1807 => 1003,  1803 => 1002,  1796 => 998,  1793 => 997,  1791 => 968,  1789 => 939,  1781 => 915,  1772 => 911,  1768 => 909,  1766 => 908,  1760 => 907,  1754 => 904,  1751 => 903,  1746 => 883,  1737 => 879,  1733 => 877,  1731 => 876,  1728 => 875,  1713 => 873,  1709 => 872,  1702 => 868,  1696 => 864,  1687 => 860,  1683 => 858,  1681 => 857,  1675 => 856,  1669 => 853,  1663 => 849,  1654 => 845,  1650 => 843,  1648 => 842,  1645 => 841,  1630 => 839,  1626 => 838,  1619 => 834,  1613 => 830,  1604 => 826,  1600 => 824,  1598 => 823,  1591 => 822,  1582 => 818,  1578 => 816,  1576 => 815,  1569 => 814,  1560 => 810,  1556 => 808,  1554 => 807,  1548 => 806,  1542 => 803,  1539 => 802,  1535 => 784,  1527 => 778,  1518 => 774,  1514 => 772,  1512 => 771,  1506 => 770,  1500 => 767,  1494 => 763,  1485 => 759,  1481 => 757,  1479 => 756,  1473 => 755,  1467 => 752,  1460 => 748,  1457 => 747,  1448 => 743,  1444 => 741,  1442 => 740,  1439 => 739,  1424 => 737,  1420 => 736,  1413 => 732,  1407 => 728,  1398 => 724,  1394 => 722,  1392 => 721,  1385 => 719,  1378 => 715,  1375 => 714,  1373 => 698,  1369 => 691,  1364 => 688,  1360 => 671,  1356 => 661,  1349 => 585,  1346 => 584,  1336 => 579,  1332 => 577,  1330 => 576,  1325 => 573,  1319 => 572,  1317 => 571,  1309 => 568,  1305 => 567,  1299 => 566,  1291 => 565,  1286 => 564,  1281 => 563,  1279 => 562,  1269 => 555,  1266 => 554,  1255 => 552,  1251 => 551,  1244 => 547,  1240 => 545,  1235 => 526,  1229 => 522,  1210 => 517,  1207 => 516,  1190 => 512,  1186 => 510,  1184 => 509,  1174 => 508,  1166 => 505,  1160 => 501,  1143 => 497,  1139 => 495,  1137 => 494,  1127 => 493,  1119 => 490,  1113 => 486,  1096 => 482,  1092 => 480,  1090 => 479,  1080 => 478,  1072 => 475,  1066 => 471,  1049 => 467,  1045 => 465,  1043 => 464,  1030 => 462,  1021 => 458,  1013 => 453,  1008 => 451,  1005 => 450,  996 => 446,  992 => 444,  990 => 443,  984 => 442,  979 => 440,  971 => 434,  961 => 429,  953 => 423,  951 => 422,  943 => 419,  931 => 409,  921 => 404,  913 => 398,  911 => 397,  903 => 394,  895 => 389,  886 => 382,  877 => 378,  873 => 376,  871 => 375,  865 => 374,  859 => 371,  853 => 367,  844 => 363,  840 => 361,  838 => 360,  832 => 359,  828 => 357,  822 => 353,  819 => 352,  810 => 348,  806 => 346,  804 => 345,  801 => 344,  786 => 342,  782 => 341,  775 => 337,  772 => 336,  770 => 335,  768 => 334,  766 => 333,  764 => 332,  762 => 331,  760 => 330,  758 => 329,  756 => 328,  754 => 327,  752 => 326,  750 => 325,  747 => 323,  745 => 322,  737 => 318,  734 => 317,  730 => 314,  723 => 310,  715 => 305,  712 => 303,  706 => 299,  703 => 298,  694 => 294,  690 => 292,  688 => 291,  683 => 288,  671 => 284,  666 => 283,  662 => 282,  653 => 276,  648 => 274,  639 => 268,  630 => 261,  627 => 259,  618 => 255,  614 => 253,  612 => 252,  606 => 251,  600 => 248,  593 => 244,  577 => 230,  568 => 227,  562 => 226,  557 => 225,  553 => 224,  549 => 223,  543 => 220,  530 => 210,  523 => 205,  513 => 200,  505 => 194,  503 => 193,  498 => 191,  494 => 190,  480 => 178,  475 => 165,  471 => 162,  468 => 160,  466 => 159,  464 => 158,  462 => 157,  460 => 156,  458 => 155,  456 => 154,  454 => 153,  452 => 152,  450 => 151,  448 => 150,  445 => 148,  443 => 147,  439 => 145,  434 => 143,  431 => 142,  414 => 138,  410 => 136,  408 => 135,  398 => 134,  390 => 131,  382 => 126,  375 => 122,  372 => 121,  355 => 117,  351 => 115,  349 => 114,  339 => 113,  331 => 110,  325 => 107,  318 => 103,  314 => 102,  306 => 99,  300 => 98,  289 => 90,  286 => 89,  277 => 85,  273 => 83,  271 => 82,  266 => 79,  254 => 75,  249 => 74,  245 => 73,  236 => 67,  231 => 65,  220 => 62,  203 => 61,  199 => 59,  172 => 57,  155 => 56,  145 => 50,  143 => 49,  141 => 48,  136 => 46,  134 => 45,  132 => 44,  130 => 43,  128 => 42,  126 => 41,  122 => 39,  117 => 37,  112 => 35,  109 => 34,  103 => 32,  101 => 31,  95 => 27,  84 => 25,  80 => 24,  75 => 22,  69 => 21,  65 => 20,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<style>
.price-highlight-area {
    background: rgb(190 194 74 / 67%);
    padding: 15px;
    border-radius: 12px;
    margin-top: 10px;
}

.price-highlight-area .form-control,
.price-highlight-area .form-select {
    background-color: #fff;
}

</style>
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-product\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
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
    {% if master_id %}
      <div class=\"alert alert-warning\"><i class=\"fa-solid fa-circle-exclamation\"></i> {{ text_variant }}</div>
    {% endif %}
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_form }}</div>
      <div class=\"card-body\">
        <form id=\"form-product\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">{{ tab_general }}</a></li>
            {#<li class=\"nav-item\"><a href=\"#tab-data\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_data }}</a></li>#}
            {#<li class=\"nav-item\"><a href=\"#tab-links\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_links }}</a></li>#}
            {#<li class=\"nav-item\"><a href=\"#tab-attribute\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_attribute }}</a></li>#}
            {#<li class=\"nav-item\"><a href=\"#tab-option\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_option }}</a></li>#}
            {#<li class=\"nav-item\"><a href=\"#tab-subscription\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_subscription }}</a></li>#}
            {#<li class=\"nav-item\"><a href=\"#tab-discount\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_discount }}</a></li>#}
            <li class=\"nav-item\"><a href=\"#tab-image\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_image }}</a></li>
            {#<li class=\"nav-item\"><a href=\"#tab-reward\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_reward }}</a></li>#}
            {#<li class=\"nav-item\"><a href=\"#tab-seo\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_seo }}</a></li>#}
            {#<li class=\"nav-item\"><a href=\"#tab-design\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_design }}</a></li>#}
            <li class=\"nav-item\"><a href=\"#tab-report\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_report }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-batch\" data-bs-toggle=\"tab\" class=\"nav-link\">Batch Details</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" style=\"display:none\">
                {% for language in languages %}
                  <li class=\"nav-item\"><a href=\"#language-{{ language.language_id }}\" data-bs-toggle=\"tab\" class=\"nav-link{% if loop.first %} active{% endif %}\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/> {{ language.name }}</a></li>
                {% endfor %}
              </ul>
              <div class=\"tab-content\">
                {% for language in languages %}
                  <div id=\"language-{{ language.language_id }}\" class=\"tab-pane{% if loop.first %} active{% endif %}\">
                      <div class=\"row align-items-end\" style=\"gap:5px;\">
                        <div class=\"col-sm-2\">
                            <label class=\"col-form-label\">{{ entry_category }}</label>
                            
                              <input type=\"text\" name=\"category\" value=\"\" placeholder=\"{{ entry_category }}\" id=\"input-category\" data-oc-target=\"autocomplete-category\" class=\"form-control\" autocomplete=\"off\"/>
                              <ul id=\"autocomplete-category\" class=\"dropdown-menu\"></ul>
                              <div class=\"input-group\">
                                <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                                  <table id=\"product-category\" class=\"table m-0\">
                                    <tbody>
                                      {% for product_category in product_categories %}
                                        <tr id=\"product-category-{{ product_category.category_id }}\">
                                          <td>{{ product_category.name }}<input type=\"hidden\" name=\"product_category[]\" value=\"{{ product_category.category_id }}\"/></td>
                                          <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                                        </tr>
                                      {% endfor %}
                                    </tbody>
                                  </table>
                                </div>
                                {% if master_id %}
                                  <div class=\"input-group-text\">
                                    <div class=\"form-check form-switch\">
                                      <input type=\"checkbox\" name=\"override[product_category]\" value=\"1\" id=\"input-variant-category\" data-oc-toggle=\"switch\" data-oc-target=\"#input-category, #product-category\" class=\"form-check-input\"{% if override.product_category %} checked{% endif %}/> <label for=\"input-variant-category\" class=\"form-check-label\"></label>
                                    </div>
                                  </div>
                                {% endif %}
                              </div>
                              <div class=\"form-text\">{{ help_category }}</div>
                            
                          </div>
                          <div class=\"col-sm-1\">
                          </div>
                        <div class=\"col-sm-2\">
                            <label class=\"col-form-label\">Barcode Type</label>
                            <select id=\"barcodeType\" name=\"barcode_type\" class=\"form-select\">
                                <option value=\"unit\" {% if not upc %}selected{% endif %}>Unit</option>
                                <option value=\"box\" {% if upc %}selected{% endif %}>Box</option>
                            </select>
                    
                            <input type=\"hidden\" id=\"skuValue\" value=\"{{ sku }}\">
                            <input type=\"hidden\" id=\"upcValue\" value=\"{{ upc }}\">
                        </div>
                        <div class=\"col-sm-2\">
                            <label class=\"col-form-label\">Box ID</label>
                            <input type=\"text\" name=\"box_id\" id=\"input-box-id\" value=\"{{ box_id }}\"class=\"form-control\"placeholder=\"Enter Box ID\">
                        </div>
                        <div class=\"col-sm-2 required\">
                          <label for=\"input-name-{{ language.language_id }}\" class=\"col-form-label\">{{ entry_name }}</label>
                          
                            <div class=\"input-group\">
                              <input type=\"text\" name=\"product_description[{{ language.language_id }}][name]\" value=\"{{ product_description[language.language_id] ? product_description[language.language_id].name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name-{{ language.language_id }}\" class=\"form-control\"/>
                              {% if master_id %}
                                <div class=\"input-group-text\">
                                  <div class=\"form-check form-switch\">
                                    <input type=\"checkbox\" name=\"override[product_description][{{ language.language_id }}][name]\" value=\"1\" id=\"input-variant-name-{{ language.language_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-name-{{ language.language_id }}\" class=\"form-check-input\"{% if override.product_description[language.language_id].name %} checked{% endif %}/> <label for=\"input-variant-name-{{ language.language_id }}\" class=\"form-check-label\"></label>
                                  </div>
                                </div>
                              {% endif %}
                            </div>
                            <div id=\"error-name-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                        <div class=\"col-sm-2\" style=\"display:none\">
                          <label class=\"col-form-label\">Rack</label>
                              <input type=\"text\" name=\"rack_code\" id=\"input-rack\" class=\"form-control\"value=\"RACK-{{ rack_number }}\"placeholder=\"RACK-01\"autocomplete=\"off\"oninput=\"fixRackPrefix(this)\"onkeydown=\"protectRackPrefix(event, this)\">
                        </div>
                    </div>
                    <div class=\"row mb-5\">
                      <div class=\"col-sm-4\" style=\"display:none\">
                      <label for=\"input-meta-title-{{ language.language_id }}\" class=\"col-form-label\">{{ entry_meta_title }}</label>
                      
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[{{ language.language_id }}][meta_title]\" value=\"{{ product_description[language.language_id] ? product_description[language.language_id].meta_title }}\" placeholder=\"{{ entry_meta_title }}\" id=\"input-meta-title-{{ language.language_id }}\" class=\"form-control\"/>
                          {% if master_id %}
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][{{ language.language_id }}][meta_title]\" value=\"1\" id=\"input-variant-meta-title-{{ language.language_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-title-{{ language.language_id }}\" class=\"form-check-input\"{% if override.product_description[language.language_id].meta_title %} checked{% endif %}/> <label for=\"input-variant-meta-title-{{ language.language_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          {% endif %}
                        </div>
                        <div id=\"error-meta-title-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                      <input type=\"hidden\" name=\"master_id\" value=\"{{ master_id }}\"/>
                    {#    <div class=\"col-sm-4 required\">#}
                      {#<label for=\"input-model\" class=\"col-form-label\">{{ entry_model }}</label>#}
                     
                      {#  <div class=\"input-group\">#}
                      {#    <input type=\"hidden\" name=\"model\" value=\"{{ model }}\" placeholder=\"{{ entry_model }}\" id=\"input-model\" class=\"form-control\"/>#}
                      {#    {% if master_id %}#}
                      {#      <div class=\"input-group-text\">#}
                      {#        <div class=\"form-check form-switch\">#}
                      {#          <input type=\"checkbox\" name=\"override[model]\" value=\"1\" id=\"input-variant-model\" data-oc-toggle=\"switch\" data-oc-target=\"#input-model\" class=\"form-check-input\"{% if override.model %} checked{% endif %}/> <label for=\"input-variant-model\" class=\"form-check-label\"></label>#}
                      {#        </div>#}
                      {#      </div>#}
                      {#    {% endif %}#}
                      {#  </div>#}
                      {#  <div id=\"error-model\" class=\"invalid-feedback\"></div>#}
                     
                    {#</div>#}
                    
                    
                     {#<h3 style=\"margin-top: 13px;\" style=\"display:none\">Received Price</h3>#}
                     <hr style=\"color:white\">

                <!-- Received Price -->
                {#<div class=\"col-sm-4\">
                  <label class=\"col-form-label\">{{ entry_price }}</label>
                      <input type=\"text\" name=\"received_price\" value=\"{{ received_price }}\" id=\"input-received_price\" class=\"form-control\"/>
                  </div>
                
                
                <div class=\"col-sm-4\">
                  <label class=\" col-form-label\">Recieved Quantity</label>
                      <input type=\"text\" name=\"r_tax\" value=\"{{ r_tax }}\" id=\"input-r_tax\" class=\"form-control\"/>
                  </div>#}
                  
                  
                  <h3 style=\"margin-top: 13px;\">Price Details</h3>
                  <hr style=\"color:white\">
                <div class=\"price-highlight-area\">
                    <div class=\"row\">

                      <div class=\"col-sm-4\">
                        <label for=\"input-wholesale-price\" class=\"col-form-label\">
                          <b style=\"color: lightgoldenrodyellow;font-style: italic;\">Wholesale Price</b>
                        </label>
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"wholesale_price\" value=\"{{ wholesale_price }}\"
                                 placeholder=\"{{ entry_price }}\" id=\"input-wholesale-price\"
                                 class=\"form-control\"/>
                          {% if master_id %}
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[wholesale_price]\" value=\"1\"
                                       id=\"input-variant-wholesale-price\"
                                       data-oc-toggle=\"switch\"
                                       data-oc-target=\"#input-wholesale-price\"
                                       class=\"form-check-input\"{% if override.wholesale_price %} checked{% endif %}/>
                                <label for=\"input-variant-wholesale-price\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          {% endif %}
                        </div>
                      </div>
                    
                      <div class=\"col-sm-4\">
                        <label class=\"col-form-label\" style =\"color:black\">Retail Price</label>
                        <input type=\"text\" name=\"price\" value=\"{{ price }}\" id=\"input-price\" class=\"form-control\"/>
                      </div>
                    
                      <div class=\"col-sm-4\">
                        <label class=\"col-form-label\" style =\"color:black\">Additional Price (%)</label>
                        <input type=\"text\" readonly name=\"additional_price\" value=\"25\"
                               id=\"input-additional-price\" class=\"form-control\"/>
                      </div>
                    
                      <div class=\"col-sm-4\" style=\"display:none\">
                        <label for=\"input-tax-class\" class=\"col-form-label\" style =\"color:black\">{{ entry_tax_class }}</label>
                        <div class=\"input-group\">
                          <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for tax_class in tax_classes %}
                              <option value=\"{{ tax_class.tax_class_id }}\"
                                {% if tax_class.tax_class_id == tax_class_id %} selected{% endif %}>
                                {{ tax_class.title }}
                              </option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>
                      <div class=\"col-sm-4\" required>
                        <label class=\"col-form-label\" style=\"color:black\">Barcode ID</label>
                        <div class=\"input-group mb-1\">
                            <input type=\"number\" name=\"sku\" id=\"barcodeInput\"
                                   class=\"form-control\" placeholder=\"Enter or generate barcode\">
                            <button class=\"btn btn-primary\" type=\"button\" onclick=\"generateBarcode()\">Generate</button>
                        </div>
                        <div id=\"error-sku\" class=\"invalid-feedback\"></div>
                    </div>
                      <div class=\"col-sm-4\">
                        <label class=\"col-form-label\" style =\"color:black\">Box Details</label>
                        <input type=\"number\" name=\"max_quantity\" value=\"{{ max_quantity }}\"
                               id=\"input-max_quantity\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-4\">
                  <label for=\"input-minimum\" class=\"col-form-label\" style =\"color:black\">{{ entry_minimum }}</label>
                 
                    <div class=\"input-group\">
                      <input type=\"number\" name=\"minimum\" value=\"{{ minimum }}\" placeholder=\"{{ entry_minimum }}\" id=\"input-minimum\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[minimum]\" value=\"1\" id=\"input-variant-minimum\" data-oc-toggle=\"switch\" data-oc-target=\"#input-minimum\" class=\"form-check-input\"{% if override.minimum %} checked{% endif %}/> <label for=\"input-variant-minimum\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    {#<div class=\"form-text\">{{ help_minimum }}</div>#}
                  </div>
                    </div>
                    </div>
                      <div class=\"col-sm-4\">
    <label class=\"col-form-label\" style=\"color:white\">Special Price</label>
    <input type=\"text\"
           name=\"special_price\"
           value=\"{{ special_price }}\"
           id=\"input-special-price\"
           class=\"form-control\"/>
</div>

<div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_related }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"{{ entry_related }}\" id=\"input-related\" data-oc-target=\"autocomplete-related\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-related\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-related\" class=\"table m-0\">
                        <tbody>
                          {% for product_related in product_relateds %}
                            <tr id=\"product-related-{{ product_related.product_id }}\">
                              <td>{{ product_related.name }}<input type=\"hidden\" name=\"product_related[]\" value=\"{{ product_related.product_id }}\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          {% endfor %}
                        </tbody>
                      </table>
                    </div>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_related]\" value=\"1\" id=\"input-variant-related\" data-oc-toggle=\"switch\" data-oc-target=\"#input-related, #product-related\" class=\"form-check-input\"{% if override.product_related %} checked{% endif %}/> <label for=\"input-variant-related\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                  <div class=\"form-text\">{{ help_related }}</div>
                </div>
              </div>
                {#<h3>Price Tags</h3>#}
                 <div class=\"col-sm-4\">
                    {#<label class=\"col-form-label\">Wholesale tag</label>#}
                        <input type=\"hidden\" name=\"w_tag\" value=\"{{ w_tag ?: 'W999' }}\" data-prefix=\"W\" id=\"input-w_tag\"class=\"form-control\"/> 
                </div>
            
                <div class=\"col-sm-4\">
                    {#<label class=\"col-form-label\">Retail tag</label>#}
                    <input type=\"hidden\" name=\"r_tag\" value=\"{{ r_tag ?: 'R888' }}\" id=\"input-r_tag\" data-prefix=\"R\" class=\"form-control\"/>
                </div>
                
                {#<h3 style=\"margin-top: 13px;\">{{ text_stock }}</h3>#}
                <hr>
                <div class=\"col-sm-4\">
                  {#<label for=\"input-quantity\" class=\"col-form-label\">{{ entry_quantity }}</label>#}
                  
                    <input type=\"hidden\" name=\"quantity\" value=\"{{ quantity }}\" placeholder=\"{{ entry_quantity }}\" id=\"input-quantity\" class=\"form-control\"/>
                  
                </div>
                {#<div class=\"col-sm-4\">#}
                {#  <label for=\"input-minimum\" class=\"col-form-label\">{{ entry_minimum }}</label>#}
                 
                {#    <div class=\"input-group\">#}
                {#      <input type=\"number\" name=\"minimum\" value=\"{{ minimum }}\" placeholder=\"{{ entry_minimum }}\" id=\"input-minimum\" class=\"form-control\"/>#}
                {#      {% if master_id %}#}
                {#        <div class=\"input-group-text\">#}
                {#          <div class=\"form-check form-switch\">#}
                {#            <input type=\"checkbox\" name=\"override[minimum]\" value=\"1\" id=\"input-variant-minimum\" data-oc-toggle=\"switch\" data-oc-target=\"#input-minimum\" class=\"form-check-input\"{% if override.minimum %} checked{% endif %}/> <label for=\"input-variant-minimum\" class=\"form-check-label\"></label>#}
                {#          </div>#}
                {#        </div>#}
                {#      {% endif %}#}
                {#    </div>#}
                {#    <div class=\"form-text\">{{ help_minimum }}</div>#}
                {#  </div>#}
                <div class=\"col-sm-4\" style=\"display:none\">
                  <label for=\"input-stock-status\" class=\"col-form-label\">{{ entry_stock_status }}</label>
            
                    <div class=\"input-group\">
                      <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-select\">
                        {% for stock_status in stock_statuses %}
                          <option value=\"{{ stock_status.stock_status_id }}\"{% if stock_status.stock_status_id == stock_status_id %} selected{% endif %}>{{ stock_status.name }}</option>
                        {% endfor %}
                      </select>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[stock_status_id]\" value=\"1\" id=\"input-variant-stock-status\" data-oc-toggle=\"switch\" data-oc-target=\"#input-stock-status\" class=\"form-check-input\"{% if override.stock_status_id %} checked{% endif %}/> <label for=\"input-variant-stock-status\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"form-text\">{{ help_stock_status }}</div>
                </div>
                <div class=\"col-sm-4\">
                  {#<label for=\"input-location\" class=\"col-form-label\">{{ entry_location }}</label>#}
                  
                    <div class=\"input-group\">
                      <input type=\"hidden\" name=\"location\" value=\"{{ location }}\" placeholder=\"{{ entry_location }}\" id=\"input-location\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[location]\" value=\"1\" id=\"input-variant-location\" data-oc-toggle=\"switch\" data-oc-target=\"#input-location\" class=\"form-check-input\"{% if override.location %} checked{% endif %}/> <label for=\"input-variant-location\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                 
                </div>
                <div class=\"col-sm-4\" style=\"display:none\">
                  <label for=\"input-date-available\" class=\"col-form-label\">{{ entry_date_available }}</label>

                    <div class=\"input-group\">
                      <input type=\"date\" name=\"date_available\" value=\"{{ date_available }}\" placeholder=\"{{ entry_date_available }}\" id=\"input-date-available\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[date_available]\" value=\"1\" id=\"input-variant-date-available\" data-oc-toggle=\"switch\" data-oc-target=\"#input-date-available\" class=\"form-check-input\"{% if override.date_available %} checked{% endif %}/> <label for=\"input-variant-date-available\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                
                </div>
                <div class=\"col-12\">
    <div class=\"row justify-content-start\">

        <div class=\"col-sm-2\">
            <label class=\"col-form-label\">{{ entry_subtract }}</label>
            <div class=\"input-group\">
                <div id=\"input-subtract\" class=\"form-check form-switch form-switch-lg\">
                    <input type=\"hidden\" name=\"subtract\" value=\"0\"/>
                    <input type=\"checkbox\" name=\"subtract\" value=\"1\"
                           class=\"form-check-input\"{% if subtract %} checked{% endif %}/>
                </div>

                {% if master_id %}
                <div class=\"input-group-text\">
                    <div class=\"form-check form-switch\">
                        <input type=\"checkbox\" name=\"override[subtract]\" value=\"1\"
                               id=\"input-variant-subtract\"
                               data-oc-toggle=\"switch\"
                               data-oc-target=\"#input-subtract\"
                               class=\"form-check-input\"{% if override.subtract %} checked{% endif %}/>
                        <label for=\"input-variant-subtract\" class=\"form-check-label\"></label>
                    </div>
                </div>
                {% endif %}
            </div>
        </div>

        <div class=\"col-sm-2\">
            <label class=\"col-form-label\">Specification status</label>
            <div class=\"input-group\">
                <div class=\"form-check form-switch form-switch-lg\">
                    <input type=\"hidden\" name=\"status\" value=\"0\"/>
                    <input type=\"checkbox\" name=\"status\" value=\"1\"
                           id=\"input-status\"
                           class=\"form-check-input\"{% if status %} checked{% endif %}/>
                </div>

                {% if master_id %}
                <div class=\"input-group-text\">
                    <div class=\"form-check form-switch\">
                        <input type=\"checkbox\" name=\"override[status]\" value=\"1\"
                               id=\"input-variant-status\"
                               data-oc-toggle=\"switch\"
                               data-oc-target=\"#input-status\"
                               class=\"form-check-input\"{% if override.status %} checked{% endif %}/>
                        <label for=\"input-variant-status\" class=\"form-check-label\"></label>
                    </div>
                </div>
                {% endif %}
            </div>
        </div>

    </div>
</div>
                <div class=\"col-sm-4\" style=\"display:none\">
                <label class=\"col-form-label\">{{ entry_manufacturer }}</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"manufacturer\" value=\"{{ manufacturer }}\" placeholder=\"{{ entry_manufacturer }}\" id=\"input-manufacturer\" data-oc-target=\"autocomplete-manufacturer\" class=\"form-control\" autocomplete=\"off\"/>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[manufacturer]\" value=\"1\" id=\"input-variant-manufacturer\" data-oc-toggle=\"switch\" data-oc-target=\"#input-manufacturer\" class=\"form-check-input\"{% if override.manufacturer %} checked{% endif %}/> <label for=\"input-variant-manufacturer\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                  <input type=\"hidden\" name=\"manufacturer_id\" value=\"{{ manufacturer_id }}\" id=\"input-manufacturer-id\"/>
                  <ul id=\"autocomplete-manufacturer\" class=\"dropdown-menu\"></ul>
                  <div class=\"form-text\">{{ help_manufacturer }}</div>
              </div>
                </div>
                    
                    <div class=\"row mb-3\" style =\"display:none\">
                      <label for=\"input-description-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_description }}</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <div class=\"form-control h-100 p-0 border-0 rounded-0\">
                            <textarea name=\"product_description[{{ language.language_id }}][description]\" placeholder=\"{{ entry_description }}\" id=\"input-description-{{ language.language_id }}\" data-oc-toggle=\"ckeditor\" data-lang=\"{{ ckeditor }}\" class=\"w-100 position-relative\">{{ product_description[language.language_id] ? product_description[language.language_id].description }}</textarea>
                          </div>
                          {% if master_id %}
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][{{ language.language_id }}][description]\" value=\"1\" id=\"input-variant-description-{{ language.language_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-description-{{ language.language_id }}\" class=\"form-check-input\"{% if override.product_description[language.language_id].description %} checked{% endif %}/> <label for=\"input-variant-description-{{ language.language_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          {% endif %}
                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3\" style =\"display:none\">
                      <label for=\"input-meta-description-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_meta_description }}</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <textarea name=\"product_description[{{ language.language_id }}][meta_description]\" rows=\"5\" placeholder=\"{{ entry_meta_description }}\" id=\"input-meta-description-{{ language.language_id }}\" class=\"form-control\">{{ product_description[language.language_id] ? product_description[language.language_id].meta_description }}</textarea>
                          {% if master_id %}
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][{{ language.language_id }}][meta_description]\" value=\"1\" id=\"input-variant-meta-description-{{ language.language_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-description-{{ language.language_id }}\" class=\"form-check-input\"{% if override.product_description[language.language_id].meta_description %} checked{% endif %}/> <label for=\"input-variant-meta-description-{{ language.language_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          {% endif %}
                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3\" style =\"display:none\">
                      <label for=\"input-meta-keyword-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_meta_keyword }}</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <textarea name=\"product_description[{{ language.language_id }}][meta_keyword]\" rows=\"5\" placeholder=\"{{ entry_meta_keyword }}\" id=\"input-meta-keyword-{{ language.language_id }}\" class=\"form-control\">{{ product_description[language.language_id] ? product_description[language.language_id].meta_keyword }}</textarea>
                          {% if master_id %}
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][{{ language.language_id }}][meta_keyword]\" value=\"1\" id=\"input-variant-meta-keyword-{{ language.language_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-keyword-{{ language.language_id }}\" class=\"form-check-input\"{% if override.product_description[language.language_id].meta_keyword %} checked{% endif %}/> <label for=\"input-variant-meta-keyword-{{ language.language_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          {% endif %}
                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3\" style =\"display:none\">
                      <label for=\"input-tag-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_tag }}</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[{{ language.language_id }}][tag]\" value=\"{{ product_description[language.language_id] ? product_description[language.language_id].tag }}\" placeholder=\"{{ entry_tag }}\" id=\"input-tag-{{ language.language_id }}\" class=\"form-control\"/>
                          {% if master_id %}
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][{{ language.language_id }}][tag]\" value=\"1\" id=\"input-variant-tag-{{ language.language_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-tag-{{ language.language_id }}\" class=\"form-check-input\"{% if override.product_description[language.language_id].tag %} checked{% endif %}/> <label for=\"input-variant-tag-{{ language.language_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          {% endif %}
                        </div>
                        <div class=\"form-text\">{{ help_tag }}</div>
                      </div>
                    </div>
                  </div>
                {% endfor %}
              </div>
            </div>
            <div id=\"tab-data\" class=\"tab-pane\">
               
              <input type=\"hidden\" name=\"master_id\" value=\"{{ master_id }}\"/>
              <fieldset>
                {#<legend>{{ text_model }}</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-model\" class=\"col-sm-2 col-form-label\">{{ entry_model }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"model\" value=\"{{ model }}\" placeholder=\"{{ entry_model }}\" id=\"input-model\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[model]\" value=\"1\" id=\"input-variant-model\" data-oc-toggle=\"switch\" data-oc-target=\"#input-model\" class=\"form-check-input\"{% if override.model %} checked{% endif %}/> <label for=\"input-variant-model\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div id=\"error-model\" class=\"invalid-feedback\"></div>
                  </div>
                </div>#}
                
                <div class=\"row mb-3\" style =\"display:none\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_product_code }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select id=\"input-code\" class=\"form-select\">
                        {% for identifier in identifiers %}
                          <option value=\"{{ identifier.code }}\">{{ identifier.code }}</option>
                        {% endfor %}
                      </select>
                      <input type=\"text\" value=\"\" placeholder=\"{{ entry_product_code }}\" id=\"input-value\" class=\"form-control w-75\"/>
                      <button type=\"button\" id=\"button-code\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button>
                    </div>
                    <div class=\"input-group\">
                      <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                        <table id=\"product-code\" class=\"table m-0\">
                          <tbody>
                            {% set code_row = 0 %}
                            {% for product_code in product_codes %}
                              <tr id=\"code-row-{{ code_row }}\">
                                <td style=\"width: 1px;\">{{ product_code.code }}<input type=\"hidden\" name=\"product_code[{{ code_row }}][code]\" value=\"{{ product_code.code }}\"/></td>
                                <td id=\"input-code-{{ code_row }}\">{{ product_code.value }}
                                  <div id=\"error-code-{{ code_row }}\" class=\"invalid-feedback\"></div>
                                  <input type=\"hidden\" name=\"product_code[{{ code_row }}][value]\" value=\"{{ product_code.value }}\"></td>
                                <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                              </tr>
                              {% set code_row = code_row + 1 %}
                            {% endfor %}
                          </tbody>
                        </table>
                      </div>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[product_code]\" value=\"1\" id=\"input-variant-code\" data-oc-toggle=\"switch\" data-oc-target=\"#input-code, #product-code\" class=\"form-check-input\"{% if override.product_code %} checked{% endif %}/>
                            <label for=\"input-variant-code\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"form-text\">{{ help_product_code }}</div>
                  </div>
                </div>
              </fieldset>
              {#<fieldset>
                  <legend>Received Price</legend>

                <!-- Received Price -->
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_price }}</label>
                  <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"received_price\" value=\"{{ received_price }}\" id=\"input-received_price\" class=\"form-control\"/>
                  </div>
                </div>
                
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">R_tax</label>
                  <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"r_tax\" value=\"{{ r_tax }}\" id=\"input-r_tax\" class=\"form-control\"/>
                  </div>
                </div>
                <legend><b style=\"color: lightgoldenrodyellow;font-style: italic;\">Wholesale Price</b></legend>
                <div class=\"row mb-3\">
                  <label for=\"input-wholesale-price\" class=\"col-sm-2 col-form-label\">{{ entry_price }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"wholesale_price\" value=\"{{ wholesale_price }}\" placeholder=\"{{ entry_price }}\" id=\"input-wholesale-price\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[wholesale_price]\" value=\"1\" id=\"input-variant-wholesale-price\" data-oc-toggle=\"switch\" data-oc-target=\"#input-wholesale-price\" class=\"form-check-input\"{% if override.wholesale_price %} checked{% endif %}/> <label for=\"input-variant-wholesale-price\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-tax-class\" class=\"col-sm-2 col-form-label\">{{ entry_tax_class }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-select\">
                        <option value=\"0\">{{ text_none }}</option>
                        {% for tax_class in tax_classes %}
                          <option value=\"{{ tax_class.tax_class_id }}\"{% if tax_class.tax_class_id == tax_class_id %} selected{% endif %}>{{ tax_class.title }}</option>
                        {% endfor %}
                      </select>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[tax_class_id]\" value=\"1\" id=\"input-variant-tax-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-tax-class\" class=\"form-check-input\"{% if override.tax_class_id %} checked{% endif %}/> <label for=\"input-variant-tax-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <legend>Retail Price</legend>

                <!-- BASE PRICE -->
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_price }}</label>
                  <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"price\" value=\"{{ price }}\" id=\"input-price\" class=\"form-control\"/>
                  </div>
                </div>
                
                <!-- ADDITIONAL PRICE (%) -->
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">Additional Price (%)</label>
                  <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"additional_price\" value=\"{{ additional_price }}\" id=\"input-additional-price\" class=\"form-control\"/>
                  </div>
                </div>
                
              </fieldset>#}
            
            <fieldset>
            {#<legend>Box Details</legend>
                
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">Max Quantity</label>
                  <div class=\"col-sm-10\">
                      <input type=\"number\" name=\"max_quantity\" value=\"{{ max_quantity }}\" id=\"input-max_quantity\" class=\"form-control\"/>
                  </div>
                </div>#}
            </fieldset>
            <fieldset>
                {#<legend>Price Tags</legend>
                
                 <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">Wholesale tag</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"w_tag\" value=\"{{ w_tag ?: 'W999' }}\" data-prefix=\"W\" id=\"input-w_tag\"class=\"form-control\"/> 
                    </div>
                </div>
            
                <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">Retail tag</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"r_tag\" value=\"{{ r_tag ?: 'R888' }}\" id=\"input-r_tag\" data-prefix=\"R\" class=\"form-control\"/>
                    </div>
                </div>#}
            </fieldset>

              <fieldset>
                <legend>{{ text_stock }}</legend>
                {#<div class=\"row mb-3\">
                  <label for=\"input-quantity\" class=\"col-sm-2 col-form-label\">{{ entry_quantity }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"quantity\" value=\"{{ quantity }}\" placeholder=\"{{ entry_quantity }}\" id=\"input-quantity\" class=\"form-control\"/>
                  </div>
                </div>#}
                {#<div class=\"row mb-3\">
                  <label for=\"input-minimum\" class=\"col-sm-2 col-form-label\">{{ entry_minimum }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"minimum\" value=\"{{ minimum }}\" placeholder=\"{{ entry_minimum }}\" id=\"input-minimum\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[minimum]\" value=\"1\" id=\"input-variant-minimum\" data-oc-toggle=\"switch\" data-oc-target=\"#input-minimum\" class=\"form-check-input\"{% if override.minimum %} checked{% endif %}/> <label for=\"input-variant-minimum\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"form-text\">{{ help_minimum }}</div>
                  </div>
                </div>#}
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_subtract }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div id=\"input-subtract\" class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"subtract\" value=\"0\"/> <input type=\"checkbox\" name=\"subtract\" value=\"1\" class=\"form-check-input\"{% if subtract %} checked{% endif %}/>
                      </div>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[subtract]\" value=\"1\" id=\"input-variant-subtract\" data-oc-toggle=\"switch\" data-oc-target=\"#input-subtract\" class=\"form-check-input\"{% if override.subtract %} checked{% endif %}/> <label for=\"input-variant-subtract\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-stock-status\" class=\"col-sm-2 col-form-label\">{{ entry_stock_status }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-select\">
                        {% for stock_status in stock_statuses %}
                          <option value=\"{{ stock_status.stock_status_id }}\"{% if stock_status.stock_status_id == stock_status_id %} selected{% endif %}>{{ stock_status.name }}</option>
                        {% endfor %}
                      </select>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[stock_status_id]\" value=\"1\" id=\"input-variant-stock-status\" data-oc-toggle=\"switch\" data-oc-target=\"#input-stock-status\" class=\"form-check-input\"{% if override.stock_status_id %} checked{% endif %}/> <label for=\"input-variant-stock-status\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"form-text\">{{ help_stock_status }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-location\" class=\"col-sm-2 col-form-label\">{{ entry_location }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"location\" value=\"{{ location }}\" placeholder=\"{{ entry_location }}\" id=\"input-location\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[location]\" value=\"1\" id=\"input-variant-location\" data-oc-toggle=\"switch\" data-oc-target=\"#input-location\" class=\"form-check-input\"{% if override.location %} checked{% endif %}/> <label for=\"input-variant-location\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-date-available\" class=\"col-sm-2 col-form-label\">{{ entry_date_available }}</label>
                  <div class=\"col-sm-10 col-md-4\">
                    <div class=\"input-group\">
                      <input type=\"date\" name=\"date_available\" value=\"{{ date_available }}\" placeholder=\"{{ entry_date_available }}\" id=\"input-date-available\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[date_available]\" value=\"1\" id=\"input-variant-date-available\" data-oc-toggle=\"switch\" data-oc-target=\"#input-date-available\" class=\"form-check-input\"{% if override.date_available %} checked{% endif %}/> <label for=\"input-variant-date-available\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
              </fieldset>
              
              <fieldset>
                <legend>{{ text_specification }}</legend>
                {#<div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_shipping }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div id=\"input-shipping\" class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"shipping\" value=\"0\"/> <input type=\"checkbox\" name=\"shipping\" value=\"1\" class=\"form-check-input\"{% if shipping %} checked{% endif %}/>
                      </div>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[shipping]\" value=\"1\" id=\"input-variant-shipping\" data-oc-toggle=\"switch\" data-oc-target=\"#input-shipping\" class=\"form-check-input\"{% if override.shipping %} checked{% endif %}/> <label for=\"input-variant-shipping\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>#}
                <div class=\"row mb-3\" style =\"display:none\">
                  <label for=\"input-length\" class=\"col-sm-2 col-form-label\">{{ entry_dimension }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"length\" value=\"{{ length }}\" placeholder=\"{{ entry_length }}\" id=\"input-length\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[length]\" value=\"1\" id=\"input-variant-length\" data-oc-toggle=\"switch\" data-oc-target=\"#input-length\" class=\"form-check-input\"{% if override.length %} checked{% endif %}/> <label for=\"input-variant-length\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                      <input type=\"text\" name=\"width\" value=\"{{ width }}\" placeholder=\"{{ entry_width }}\" id=\"input-width\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[width]\" value=\"1\" id=\"input-variant-width\" data-oc-toggle=\"switch\" data-oc-target=\"#input-width\" class=\"form-check-input\"{% if override.width %} checked{% endif %}/> <label for=\"input-variant-width\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                      <input type=\"text\" name=\"height\" value=\"{{ height }}\" placeholder=\"{{ entry_height }}\" id=\"input-height\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[height]\" value=\"1\" id=\"input-variant-height\" data-oc-toggle=\"switch\" data-oc-target=\"#input-height\" class=\"form-check-input\"{% if override.height %} checked{% endif %}/> <label for=\"input-variant-height\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\" style =\"display:none\">
                  <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">{{ entry_length_class }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-select\">
                        {% for length_class in length_classes %}
                          <option value=\"{{ length_class.length_class_id }}\"{% if length_class.length_class_id == length_class_id %} selected{% endif %}>{{ length_class.title }}</option>
                        {% endfor %}
                      </select>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[length_class_id]\" value=\"1\" id=\"input-variant-length-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-length-class\" class=\"form-check-input\"{% if override.length_class_id %} checked{% endif %}/> <label for=\"input-variant-length-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\" style =\"display:none\">
                  <label for=\"input-weight\" class=\"col-sm-2 col-form-label\">{{ entry_weight }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"weight\" value=\"{{ weight }}\" placeholder=\"{{ entry_weight }}\" id=\"input-weight\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[weight]\" value=\"1\" id=\"input-variant-weight\" data-oc-toggle=\"switch\" data-oc-target=\"#input-weight\" class=\"form-check-input\"{% if override.weight %} checked{% endif %}/> <label for=\"input-variant-weight\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\" style =\"display:none\">
                  <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">{{ entry_weight_class }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-select\">
                        {% for weight_class in weight_classes %}
                          <option value=\"{{ weight_class.weight_class_id }}\"{% if weight_class.weight_class_id == weight_class_id %} selected{% endif %}>{{ weight_class.title }}</option>
                        {% endfor %}
                      </select>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[weight_class_id]\" value=\"1\" id=\"input-variant-weight-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-weight-class\" class=\"form-check-input\"{% if override.weight_class_id %} checked{% endif %}/> <label for=\"input-variant-weight-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                {#<div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_status }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"status\" value=\"0\"/> <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"{% if status %} checked{% endif %}/>
                      </div>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[status]\" value=\"1\" id=\"input-variant-status\" data-oc-toggle=\"switch\" data-oc-target=\"#input-status\" class=\"form-check-input\"{% if override.status %} checked{% endif %}/> <label for=\"input-variant-status\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>#}
                <div class=\"row mb-3\"style =\"display:none\">
                  <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">{{ entry_sort_order }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"number\" name=\"sort_order\" value=\"{{ sort_order }}\" placeholder=\"{{ entry_sort_order }}\" id=\"input-sort-order\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[sort_order]\" value=\"1\" id=\"input-variant-sort-order\" data-oc-toggle=\"switch\" data-oc-target=\"#input-sort-order\" class=\"form-check-input\"{% if override.sort_order %} checked{% endif %}/> <label for=\"input-variant-sort-order\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-links\" class=\"tab-pane\">
              {#<div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_manufacturer }}</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"manufacturer\" value=\"{{ manufacturer }}\" placeholder=\"{{ entry_manufacturer }}\" id=\"input-manufacturer\" data-oc-target=\"autocomplete-manufacturer\" class=\"form-control\" autocomplete=\"off\"/>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[manufacturer]\" value=\"1\" id=\"input-variant-manufacturer\" data-oc-toggle=\"switch\" data-oc-target=\"#input-manufacturer\" class=\"form-check-input\"{% if override.manufacturer %} checked{% endif %}/> <label for=\"input-variant-manufacturer\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                  <input type=\"hidden\" name=\"manufacturer_id\" value=\"{{ manufacturer_id }}\" id=\"input-manufacturer-id\"/>
                  <ul id=\"autocomplete-manufacturer\" class=\"dropdown-menu\"></ul>
                  <div class=\"form-text\">{{ help_manufacturer }}</div>
                </div>
              </div>#}
              {#<div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_category }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"{{ entry_category }}\" id=\"input-category\" data-oc-target=\"autocomplete-category\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-category\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-category\" class=\"table m-0\">
                        <tbody>
                          {% for product_category in product_categories %}
                            <tr id=\"product-category-{{ product_category.category_id }}\">
                              <td>{{ product_category.name }}<input type=\"hidden\" name=\"product_category[]\" value=\"{{ product_category.category_id }}\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          {% endfor %}
                        </tbody>
                      </table>
                    </div>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_category]\" value=\"1\" id=\"input-variant-category\" data-oc-toggle=\"switch\" data-oc-target=\"#input-category, #product-category\" class=\"form-check-input\"{% if override.product_category %} checked{% endif %}/> <label for=\"input-variant-category\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                  <div class=\"form-text\">{{ help_category }}</div>
                </div>
              </div>#}
              {#<div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_filter }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"{{ entry_filter }}\" id=\"input-filter\" data-oc-target=\"autocomplete-filter\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-filter\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-filter\" class=\"table m-0\">
                        <tbody>
                          {% for product_filter in product_filters %}
                            <tr id=\"product-filter-{{ product_filter.filter_id }}\">
                              <td>{{ product_filter.name }}<input type=\"hidden\" name=\"product_filter[]\" value=\"{{ product_filter.filter_id }}\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          {% endfor %}
                        </tbody>
                      </table>
                    </div>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_filter]\" value=\"1\" id=\"input-variant-filter\" data-oc-toggle=\"switch\" data-oc-target=\"#input-filter, #product-filter\" class=\"form-check-input\"{% if override.product_filter %} checked{% endif %}/> <label for=\"input-variant-filter\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                  <div class=\"form-text\">{{ help_filter }}</div>
                </div>
              </div>#}
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_store }}</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <div id=\"product-store\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      {% for store in stores %}
                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"product_store[]\" value=\"{{ store.store_id }}\" id=\"input-store-{{ store.store_id }}\" class=\"form-check-input\"{% if store.store_id in product_store %} checked{% endif %}/> <label for=\"input-store-{{ store.store_id }}\" class=\"form-check-label\">{{ store.name }}</label>
                        </div>
                      {% endfor %}
                    </div>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_store]\" value=\"1\" id=\"input-variant-store\" data-oc-toggle=\"switch\" data-oc-target=\"#product-store\" class=\"form-check-input\"{% if override.product_store %} checked{% endif %}/> <label for=\"input-variant-store\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                </div>
              </div>
              {#<div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_download }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"{{ entry_download }}\" id=\"input-download\" data-oc-target=\"autocomplete-download\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-download\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-download\" class=\"table m-0\">
                        <tbody>
                          {% for product_download in product_downloads %}
                            <tr id=\"product-download-{{ product_download.download_id }}\">
                              <td>{{ product_download.name }}<input type=\"hidden\" name=\"product_download[]\" value=\"{{ product_download.download_id }}\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          {% endfor %}
                        </tbody>
                      </table>
                    </div>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_download]\" value=\"1\" id=\"input-variant-download\" data-oc-toggle=\"switch\" data-oc-target=\"#input-download, #product-download\" class=\"form-check-input\"{% if override.product_download %} checked{% endif %}/> <label for=\"input-variant-download\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                  <div class=\"form-text\">{{ help_download }}</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_related }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"{{ entry_related }}\" id=\"input-related\" data-oc-target=\"autocomplete-related\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-related\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-related\" class=\"table m-0\">
                        <tbody>
                          {% for product_related in product_relateds %}
                            <tr id=\"product-related-{{ product_related.product_id }}\">
                              <td>{{ product_related.name }}<input type=\"hidden\" name=\"product_related[]\" value=\"{{ product_related.product_id }}\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          {% endfor %}
                        </tbody>
                      </table>
                    </div>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_related]\" value=\"1\" id=\"input-variant-related\" data-oc-toggle=\"switch\" data-oc-target=\"#input-related, #product-related\" class=\"form-check-input\"{% if override.product_related %} checked{% endif %}/> <label for=\"input-variant-related\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                  <div class=\"form-text\">{{ help_related }}</div>
                </div>
              </div>#}
              
            </div>
            <div id=\"tab-attribute\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-attribute\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>{{ entry_attribute }}</th>
                      <th>{{ entry_text }}</th>
                      <th>{% if master_id %}
                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_attribute]\" value=\"1\" id=\"input-variant-product-attribute\" data-oc-toggle=\"switch\" data-oc-target=\"#product-attribute\" class=\"form-check-input\"{% if override.product_attribute %} checked{% endif %}/> <label for=\"input-variant-product-attribute\" class=\"form-check-label\"></label>
                          </div>
                        {% endif %}</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% set attribute_row = 0 %}
                    {% for product_attribute in product_attributes %}
                      <tr id=\"attribute-row-{{ attribute_row }}\">
                        <td>
                          <input type=\"hidden\" name=\"product_attribute[{{ attribute_row }}][attribute_id]\" value=\"{{ product_attribute.attribute_id }}\" id=\"input-attribute-id-{{ attribute_row }}\"/> <input type=\"text\" name=\"product_attribute[{{ attribute_row }}][name]\" value=\"{{ product_attribute.name }}\" placeholder=\"{{ entry_attribute }}\" id=\"input-attribute-{{ attribute_row }}\" data-oc-target=\"autocomplete-attribute-{{ attribute_row }}\" class=\"form-control\" autocomplete=\"new-password\"/>
                          <ul id=\"autocomplete-attribute-{{ attribute_row }}\" class=\"dropdown-menu\"></ul>
                        </td>

                        <td>{% for language in languages %}
                            <div class=\"input-group mb-12\">
                              <div class=\"input-group-text\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/></div>
                              <textarea name=\"product_attribute[{{ attribute_row }}][product_attribute_description][{{ language.language_id }}][text]\" rows=\"5\" placeholder=\"{{ entry_text }}\" id=\"input-text-{{ attribute_row }}-{{ language.language_id }}\" class=\"form-control\">{{ product_attribute.product_attribute_description[language.language_id] ? product_attribute.product_attribute_description[language.language_id].text }}</textarea>
                            </div>
                          {% endfor %}</td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#attribute-row-{{ attribute_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      {% set attribute_row = attribute_row + 1 %}
                    {% endfor %}
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-attribute\" data-bs-toggle=\"tooltip\" title=\"{{ button_attribute_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            {% if not master_id %}
              <div id=\"tab-option\" class=\"tab-pane\">

                <div id=\"option\">

                  {% set option_row = 0 %}
                  {% set option_value_row = 0 %}
                  {% for product_option in product_options %}

                    <fieldset id=\"option-row-{{ option_row }}\">
                      <legend>{{ product_option.name }}</legend>
                      <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_id]\" value=\"{{ product_option.product_option_id }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][name]\" value=\"{{ product_option.name }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][option_id]\" value=\"{{ product_option.option_id }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][type]\" value=\"{{ product_option.type }}\"/>

                      <div class=\"row align-items-center\">
                        <div class=\"col-11\">

                          <div class=\"mb-3\">
                            <label for=\"input-required-{{ option_row }}\" class=\"form-label\">{{ entry_required }}</label> <select name=\"product_option[{{ option_row }}][required]\" id=\"input-required-{{ option_row }}\" class=\"form-select\">
                              <option value=\"1\"{% if product_option.required %} selected{% endif %}>{{ text_enabled }}</option>
                              <option value=\"0\"{% if not product_option.required %} selected{% endif %}>{{ text_disabled }}</option>
                            </select>
                          </div>

                          {% if product_option.type == 'text' %}
                            <div class=\"mb-3\">
                              <label for=\"input-option-{{ option_row }}\" class=\"form-label\">{{ entry_option_value }}</label> <input type=\"text\" name=\"product_option[{{ option_row }}][value]\" value=\"{{ product_option.value }}\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-{{ option_row }}\" class=\"form-control\"/>
                            </div>
                          {% endif %}

                          {% if product_option.type == 'textarea' %}
                            <div class=\"mb-3\">
                              <label for=\"input-option-{{ option_row }}\" class=\"form-label\">{{ entry_option_value }}</label> <textarea name=\"product_option[{{ option_row }}][value]\" rows=\"5\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-{{ option_row }}\" class=\"form-control\">{{ product_option.value }}</textarea>
                            </div>
                          {% endif %}

                          {% if product_option.type == 'file' %}
                            <div class=\"mb-3 d-none\">
                              <label for=\"input-option-{{ option_row }}\" class=\"form-label\">{{ entry_option_value }}</label> <input type=\"text\" name=\"product_option[{{ option_row }}][value]\" value=\"{{ product_option.value }}\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-{{ option_row }}\" class=\"form-control\"/>
                            </div>
                          {% endif %}

                          {% if product_option.type == 'date' %}
                            <div class=\"mb-3\">
                              <label for=\"input-option-{{ option_row }}\" class=\"form-label\">{{ entry_option_value }}</label> <input type=\"date\" name=\"product_option[{{ option_row }}][value]\" value=\"{{ product_option.value }}\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-{{ option_row }}\" class=\"form-control\"/>
                            </div>
                          {% endif %}

                          {% if product_option.type == 'time' %}
                            <div class=\"mb-3\">
                              <label for=\"input-option-{{ option_row }}\" class=\"form-label\">{{ entry_option_value }}</label> <input type=\"time\" name=\"product_option[{{ option_row }}][value]\" value=\"{{ product_option.value }}\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-{{ option_row }}\" class=\"form-control\"/>
                            </div>
                          {% endif %}

                          {% if product_option.type == 'datetime' %}
                            <div class=\"mb-3\">
                              <label for=\"input-option-{{ option_row }}\" class=\"form-label\">{{ entry_option_value }}</label> <input type=\"datetime-local\" name=\"product_option[{{ option_row }}][value]\" value=\"{{ product_option.value }}\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-{{ option_row }}\" class=\"form-control\"/>
                            </div>
                          {% endif %}

                          {% if product_option.type == 'select' or product_option.type == 'radio' or product_option.type == 'checkbox' or product_option.type == 'image' %}
                            <div class=\"table-responsive\">
                              <table class=\"table table-bordered table-hover\">
                                <thead>
                                  <tr>
                                    <th>{{ entry_option_value }}</th>
                                    <th class=\"text-end\">{{ entry_quantity }}</th>
                                    <th>{{ entry_subtract }}</th>
                                    <th class=\"text-end\">{{ entry_price }}</th>
                                    <th class=\"text-end\">{{ entry_points }}</th>
                                    <th class=\"text-end\">{{ entry_weight }}</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody id=\"option-value-{{ option_row }}\">
                                  {% for product_option_value in product_option.product_option_value %}
                                    <tr id=\"option-value-row-{{ option_value_row }}\">
                                      <td>{{ product_option_value.name }}
                                        <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][option_value_id]\" value=\"{{ product_option_value.option_value_id }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][product_option_value_id]\" value=\"{{ product_option_value.product_option_value_id }}\"/></td>
                                      <td class=\"text-end\">{{ product_option_value.quantity }} <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][quantity]\" value=\"{{ product_option_value.quantity }}\"/></td>
                                      <td>{% if product_option_value.subtract %}
                                          {{ text_yes }}
                                        {% else %}
                                          {{ text_no }}
                                        {% endif %}
                                        <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][subtract]\" value=\"{{ product_option_value.subtract }}\"/></td>
                                      <td class=\"text-end\">{{ product_option_value.price_prefix }}{{ product_option_value.price }}
                                        <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][price_prefix]\" value=\"{{ product_option_value.price_prefix }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][price]\" value=\"{{ product_option_value.price }}\"/></td>
                                      <td class=\"text-end\">{{ product_option_value.points_prefix }}{{ product_option_value.points }}
                                        <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][points_prefix]\" value=\"{{ product_option_value.points_prefix }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][points]\" value=\"{{ product_option_value.points }}\"/></td>
                                      <td class=\"text-end\">{{ product_option_value.weight_prefix }}{{ product_option_value.weight }}
                                        <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][weight_prefix]\" value=\"{{ product_option_value.weight_prefix }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][weight]\" value=\"{{ product_option_value.weight }}\"/></td>
                                      <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" data-option-row=\"{{ option_row }}\" data-option-value-row=\"{{ option_value_row }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></button> <button type=\"button\" onclick=\"\$('#option-value-row-{{ option_value_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                                    </tr>
                                    {% set option_value_row = option_value_row + 1 %}
                                  {% endfor %}
                                </tbody>
                                <tfoot>
                                  <tr>
                                    <td colspan=\"6\"></td>
                                    <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_option_value_add }}\" data-option-row=\"{{ option_row }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                                  </tr>
                                </tfoot>
                              </table>
                              <select id=\"product-option-values-{{ option_row }}\" class=\"d-none\">
                                {% if option_values[product_option.option_id] %}
                                  {% for option_value in option_values[product_option.option_id] %}
                                    <option value=\"{{ option_value.option_value_id }}\">{{ option_value.name }}</option>
                                  {% endfor %}
                                {% endif %}
                              </select>
                            </div>
                          {% endif %}
                        </div>

                        <div class=\"col\">
                          <button type=\"button\" class=\"btn btn-danger\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" onclick=\"\$('#option-row-{{ option_row }}').remove();\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                        </div>
                      </div>
                    </fieldset>
                    {% set option_row = option_row + 1 %}
                  {% endfor %}
                </div>
                <fieldset>
                  <legend class=\"float-none\">{{ text_option_add }}</legend>
                  <div class=\"row mb-3\">
                    <label for=\"input-option\" class=\"col-sm-2 col-form-label\">{{ entry_option }}</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"{{ entry_option }}\" id=\"input-option\" data-oc-target=\"autocomplete-option\" class=\"form-control\" autocomplete=\"off\"/>
                      <ul id=\"autocomplete-option\" class=\"dropdown-menu\"></ul>
                      <div class=\"form-text\">{{ help_option }}</div>
                    </div>
                  </div>
                </fieldset>
              </div>
            {% else %}
              <div id=\"tab-option\" class=\"tab-pane\">
                {% for option in options %}
                  <fieldset>
                    <legend class=\"float-none\">{{ option.name }}</legend>

                    {% if option.type == 'select' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <select name=\"variant[{{ option.product_option_id }}]\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-select\">
                              <option value=\"\">{{ text_select }}</option>
                              {% for option_value in option.product_option_value %}
                                <option value=\"{{ option_value.product_option_value_id }}\"{% if variant[option.product_option_id] and option_value.product_option_value_id == variant[option.product_option_id] %} selected{% endif %}>{{ option_value.name }}
                                  {% if option_value.price %}
                                    ({{ option_value.price_prefix }}{{ option_value.price }})
                                  {% endif %}</option>
                              {% endfor %}
                            </select>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'radio' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              {% for option_value in option.product_option_value %}
                                <div class=\"form-check\">
                                  <input type=\"radio\" name=\"variant[{{ option.product_option_id }}]\" value=\"{{ option_value.product_option_value_id }}\" id=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-input\"{% if variant[option.product_option_id] and option_value.product_option_value_id == variant[option.product_option_id] %} checked{% endif %}/> 
\t\t\t\t\t\t\t\t                  <label for=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-label\">
                                    {% if option_value.image %}
                                      <img src=\"{{ option_value.image }}\" alt=\"{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}\" class=\"img-thumbnail\"/>{% endif %}
                                    {{ option_value.name }}
                                    {% if option_value.price %}
                                      ({{ option_value.price_prefix }}{{ option_value.price }})
                                    {% endif %}</label>
                                </div>
                              {% endfor %}
                            </div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'checkbox' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              {% for option_value in option.product_option_value %}
                                <div class=\"form-check\">
                                  <input type=\"checkbox\" name=\"variant[{{ option.product_option_id }}][]\" value=\"{{ option_value.product_option_value_id }}\" id=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-input\"{% if variant[option.product_option_id] and option_value.product_option_value_id in variant[option.product_option_id] %} checked{% endif %}/> 
                                  <label for=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-label\">
                                    {% if option_value.image %} 
                                      <img src=\"{{ option_value.image }}\" alt=\"{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}\" class=\"img-thumbnail\"/>{% endif %}
                                    {{ option_value.name }}
                                    {% if option_value.price %}
                                      ({{ option_value.price_prefix }}{{ option_value.price }})
                                    {% endif %}</label>
                                </div>
                              {% endfor %}
                            </div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'text' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"variant[{{ option.product_option_id }}]\" value=\"{{ variant[option.product_option_id] ? variant[option.product_option_id] : option.value }}\" placeholder=\"{{ option.name }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'textarea' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <textarea name=\"variant[{{ option.product_option_id }}]\" rows=\"5\" placeholder=\"{{ option.name }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\">{{ variant[option.product_option_id] ? variant[option.product_option_id] : option.value }}</textarea>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'file' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" id=\"button-upload-{{ option.product_option_id }}\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                            <input type=\"text\" name=\"variant[{{ option.product_option_id }}]\" value=\"{{ variant[option.product_option_id] ? variant[option.product_option_id] : option.value }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                            <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-option-{{ option.product_option_id }}\"{% if not variant[option.product_option_id] %} disabled{% endif %} class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> {{ button_download }}</button>
                            <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"{{ button_clear }}\" data-oc-target=\"#input-option-{{ option.product_option_id }}\"{% if not variant[option.product_option_id] %} disabled{% endif %} class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#button-upload-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'date' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group\">
                            <input type=\"date\" name=\"variant[{{ option.product_option_id }}]\" value=\"{{ variant[option.product_option_id] ? variant[option.product_option_id] : option.value }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'time' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div id=\"input-option-{{ option.product_option_id }}\" class=\"input-group\">
                            <input type=\"time\" name=\"variant[{{ option.product_option_id }}]\" value=\"{{ variant[option.product_option_id] ? variant[option.product_option_id] : option.value }}\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'datetime' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group\">
                            <input type=\"datetime-local\" name=\"variant[{{ option.product_option_id }}]\" value=\"{{ variant[option.product_option_id] ? variant[option.product_option_id] : option.value }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}
                  </fieldset>
                {% endfor %}
              </div>
            {% endif %}
            <div id=\"tab-subscription\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-subscription\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>{{ entry_subscription }}</th>
                      <th>{{ entry_customer_group }}</th>
                      <th>{{ entry_trial_price }}</th>
                      <th>{{ entry_price }}</th>
                      <th>
                        {% if master_id %}
                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_subscription]\" value=\"1\" id=\"input-variant-product-subscription\" data-oc-toggle=\"switch\" data-oc-target=\"#product-subscription\" class=\"form-check-input\"{% if override.product_subscription %} checked{% endif %}/> <label for=\"input-variant-product-subscription\" class=\"form-check-label\"></label>
                          </div>
                        {% endif %}</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% set subscription_row = 0 %}
                    {% for product_subscription in product_subscriptions %}
                      <tr id=\"subscription-row-{{ subscription_row }}\">
                        <td><select name=\"product_subscription[{{ subscription_row }}][subscription_plan_id]\" class=\"form-select\">
                            {% for subscription_plan in subscription_plans %}
                              <option value=\"{{ subscription_plan.subscription_plan_id }}\"{% if subscription_plan.subscription_plan_id == product_subscription.subscription_plan_id %} selected{% endif %}>{{ subscription_plan.name }}</option>
                            {% endfor %}
                          </select></td>
                        <td><select name=\"product_subscription[{{ subscription_row }}][customer_group_id]\" class=\"form-select\">
                            {% for customer_group in customer_groups %}
                              <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == product_subscription.customer_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
                            {% endfor %}
                          </select></td>
                        <td><input type=\"text\" name=\"product_subscription[{{ subscription_row }}][trial_price]\" value=\"{{ product_subscription.trial_price }}\" placeholder=\"{{ entry_trial_price }}\" class=\"form-control\"/></td>
                        <td><input type=\"text\" name=\"product_subscription[{{ subscription_row }}][price]\" value=\"{{ product_subscription.price }}\" placeholder=\"{{ entry_price }}\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#subscription-row-{{ subscription_row }}').remove()\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      {% set subscription_row = subscription_row + 1 %}
                    {% endfor %}
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"4\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-subscription\" data-bs-toggle=\"tooltip\" title=\"{{ button_subscription_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div id=\"tab-discount\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-discount\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>{{ entry_customer_group }}</th>
                      <th class=\"text-end\">{{ entry_quantity }}</th>
                      <th class=\"text-end\">{{ entry_priority }}</th>
                      <th class=\"text-end\">{{ entry_price }}</th>
                      <th class=\"text-end\">{{ entry_type }}</th>
                      <th class=\"text-end\">{{ entry_special }}</th>
                      <th>{{ entry_date_start }}</th>
                      <th>{{ entry_date_end }}</th>
                      <th class=\"text-end\">{% if master_id %}
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[product_discount]\" value=\"1\" id=\"input-variant-product-discount\" data-oc-toggle=\"switch\" data-oc-target=\"#product-discount\" class=\"form-check-input\"{% if override.product_discount %} checked{% endif %}/> <label for=\"input-variant-product-discount\" class=\"form-check-label\"></label>
                          </div>
                        {% endif %}</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% set discount_row = 0 %}
                    {% for product_discount in product_discounts %}
                      <tr id=\"discount-row-{{ discount_row }}\">
                        <td><select name=\"product_discount[{{ discount_row }}][customer_group_id]\" class=\"form-select\">
                            {% for customer_group in customer_groups %}
                              <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == product_discount.customer_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
                            {% endfor %}
                          </select></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[{{ discount_row }}][quantity]\" value=\"{{ product_discount.quantity }}\" placeholder=\"{{ entry_quantity }}\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[{{ discount_row }}][priority]\" value=\"{{ product_discount.priority }}\" placeholder=\"{{ entry_priority }}\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[{{ discount_row }}][price]\" value=\"{{ product_discount.price }}\" placeholder=\"{{ entry_price }}\" class=\"form-control\"/></td>
                        <td><select name=\"product_discount[{{ discount_row }}][type]\" class=\"form-select\">
                            <option value=\"F\"{% if product_discount.type == 'F' %} selected{% endif %}>{{ text_fixed }}</option>
                            <option value=\"S\"{% if product_discount.type == 'S' %} selected{% endif %}>{{ text_subtract }}</option>
                            <option value=\"P\"{% if product_discount.type == 'P' %} selected{% endif %}>{{ text_percentage }}</option>
                          </select></td>
                        <td><div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"product_discount[{{ discount_row }}][special]\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"product_discount[{{ discount_row }}][special]\" value=\"1\" class=\"form-check-input\"{% if product_discount.special %} checked{% endif %}/>
                          </div></td>
                        <td><input type=\"date\" name=\"product_discount[{{ discount_row }}][date_start]\" value=\"{{ product_discount.date_start }}\" placeholder=\"{{ entry_date_start }}\" class=\"form-control\"/></td>
                        <td><input type=\"date\" name=\"product_discount[{{ discount_row }}][date_end]\" value=\"{{ product_discount.date_end }}\" placeholder=\"{{ entry_date_end }}\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#discount-row-{{ discount_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      {% set discount_row = discount_row + 1 %}
                    {% endfor %}
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"8\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-discount\" data-bs-toggle=\"tooltip\" title=\"{{ button_discount_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div id=\"tab-image\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_image }}</legend>
                <div id=\"image\" class=\"border rounded d-block\" style=\"max-width: 300px;\">
                  <img src=\"{{ thumb }}\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"image\" value=\"{{ image }}\" id=\"input-image\"/>
                  <div class=\"d-grid\">
                    <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                    {% if master_id %}
                      <div class=\"mx-auto w-25\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[image]\" value=\"1\" id=\"input-variant-image\" data-oc-toggle=\"switch\" data-oc-target=\"#image\" class=\"form-check-input\"{% if override.image %} checked{% endif %}/> <label for=\"input-variant-image\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_image_additional }}</legend>
                <div class=\"table-responsive\">
                  <table id=\"product-image\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <th>{{ entry_image }}</th>
                        <th>{{ entry_sort_order }}</th>
                        <th class=\"text-end\">
                          {% if master_id %}
                            <div class=\"form-check form-switch\">
                              <input type=\"checkbox\" name=\"override[product_image]\" value=\"1\" id=\"input-variant-product-image\" data-oc-toggle=\"switch\" data-oc-target=\"#product-image\" class=\"form-check-input\"{% if override.product_image %} checked{% endif %}/> <label for=\"input-variant-product-image\" class=\"form-check-label\"></label>
                            </div>
                          {% endif %}</th>
                      </tr>
                    </thead>
                    <tbody>
                      {% set image_row = 0 %}
                      {% for product_image in product_images %}
                        <tr id=\"product-image-row-{{ image_row }}\">
                          <td>
                            <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                              <img src=\"{{ product_image.thumb }}\" alt=\"\" title=\"\" id=\"product-image-{{ image_row }}\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"product_image[{{ image_row }}][image]\" value=\"{{ product_image.image }}\" id=\"input-product-image-{{ image_row }}\"/>
                              <div class=\"d-grid\">
                                <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-{{ image_row }}\" data-oc-thumb=\"#product-image-{{ image_row }}\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                                <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-{{ image_row }}\" data-oc-thumb=\"#product-image-{{ image_row }}\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                              </div>
                            </div>
                          </td>
                          <td><input type=\"text\" name=\"product_image[{{ image_row }}][sort_order]\" value=\"{{ product_image.sort_order }}\" placeholder=\"{{ entry_sort_order }}\" class=\"form-control\"/></td>
                          <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#product-image-row-{{ image_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                        </tr>
                        {% set image_row = image_row + 1 %}
                      {% endfor %}
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan=\"2\"></td>
                        <td class=\"text-end\"><button type=\"button\" id=\"button-image\" data-bs-toggle=\"tooltip\" title=\"{{ button_image_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </fieldset>
            </div>

            {#<div id=\"tab-reward\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_reward }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-points\" class=\"col-sm-2 col-form-label\">{{ entry_points }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"points\" value=\"{{ points }}\" placeholder=\"{{ entry_points }}\" id=\"input-points\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[points]\" value=\"1\" id=\"input-variant-points\" data-oc-toggle=\"switch\" data-oc-target=\"#input-points\" class=\"form-check-input\"{% if override.points %} checked{% endif %}/> <label for=\"input-variant-points\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"form-text\">{{ help_points }}</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_points }}</legend>
                <div class=\"table-responsive\">
                  <table id=\"product-reward\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <th>{{ entry_customer_group }}</th>
                        <th class=\"text-end\">{{ entry_reward }}&nbsp;&nbsp;{% if master_id %}
                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_reward]\" value=\"1\" id=\"input-variant-product-reward\" data-oc-toggle=\"switch\" data-oc-target=\"#product-reward\" class=\"form-check-input\"{% if override.product_reward %} checked{% endif %}/> <label for=\"input-variant-product-reward\" class=\"form-check-label\"></label>
                          </div>
                          {% endif %}</th>
                      </tr>
                    </thead>
                    <tbody>
                      {% for customer_group in customer_groups %}
                        <tr>
                          <td>{{ customer_group.name }}</td>
                          <td class=\"text-end\"><input type=\"text\" name=\"product_reward[{{ customer_group.customer_group_id }}][points]\" value=\"{{ product_reward[customer_group.customer_group_id] ? product_reward[customer_group.customer_group_id].points }}\" class=\"form-control\"/></td>
                        </tr>
                      {% endfor %}
                    </tbody>
                  </table>
                </div>
              </fieldset>
            </div>#}

            {#<div id=\"tab-seo\" class=\"tab-pane\">
              <div class=\"alert alert-info\"><i class=\"fa-solid fa-info-circle\"></i> {{ text_keyword }}</div>
              <div id=\"product-seo\" class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>{{ entry_store }}</th>
                      <th>{{ entry_keyword }}</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% for store in stores %}
                      <tr>
                        <td>{{ store.name }}</td>
                        <td>
                          {% for language in languages %}
                            <div class=\"input-group\">
                              <div class=\"input-group-text\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/></div>
                              <input type=\"text\" name=\"product_seo_url[{{ store.store_id }}][{{ language.language_id }}]\" value=\"{% if product_seo_url[store.store_id][language.language_id] %}{{ product_seo_url[store.store_id][language.language_id] }}{% endif %}\" id=\"input-keyword-{{ store.store_id }}-{{ language.language_id }}\" placeholder=\"{{ entry_keyword }}\" class=\"form-control\"/>
                            </div>
                            <div id=\"error-keyword-{{ store.store_id }}-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
                          {% endfor %}</td>
                      </tr>
                    {% endfor %}
                  </tbody>
                </table>
              </div>
            </div>#}

            {#<div id=\"tab-design\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-layout\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>{{ entry_store }}</th>
                      <th>{{ entry_layout }}{% if master_id %}
                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_layout]\" value=\"1\" id=\"input-variant-product-layout\" data-oc-toggle=\"switch\" data-oc-target=\"#product-layout\" class=\"form-check-input\"{% if override.product_layout %} checked{% endif %}/> <label for=\"input-variant-product-layout\" class=\"form-check-label\"></label>
                          </div>
                        {% endif %}</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% for store in stores %}
                      <tr>
                        <td>{{ store.name }}</td>
                        <td><select name=\"product_layout[{{ store.store_id }}]\" class=\"form-select\">
                            <option value=\"\"></option>
                            {% for layout in layouts %}
                              <option value=\"{{ layout.layout_id }}\"{% if product_layout[store.store_id] and product_layout[store.store_id] == layout.layout_id %} selected{% endif %}>{{ layout.name }}</option>
                            {% endfor %}
                          </select></td>
                      </tr>
                    {% endfor %}
                  </tbody>
                </table>
              </div>
            </div>#}

            <div id=\"tab-report\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_report }}</legend>
                <div id=\"report\">{{ report }}</div>
              </fieldset>
            </div>
            
            <div id=\"tab-batch\" class=\"tab-pane\">
              <fieldset>
                <legend>Batch Details</legend>
            
                <div class=\"row mb-3\">
                    <div class=\"col-sm-3\">
                    <label class=\"col-form-label\">Batch Number</label>
                    <input type=\"text\" name=\"batch_number\" id=\"input-batch-number\"class=\"form-control\" placeholder=\"Enter Batch Number\">
                  </div>
                    <div class=\"col-sm-3\">
                  <label class=\"col-form-label\">Purchase Price</label>
                      <input type=\"text\" name=\"received_price\" value=\"{{ received_price }}\" id=\"input-received_price\" class=\"form-control\"/>
                  </div>
                
                
                <div class=\"col-sm-3\">
                  <label class=\" col-form-label\">Purchase Quantity</label>
                      <input type=\"text\" name=\"r_tax\" value=\"{{ r_tax }}\" id=\"input-r_tax\" class=\"form-control\"/>
                  </div>
            
                  <div class=\"col-sm-3\">
                    <label class=\"col-form-label\">Total Purchase Price</label>
                    <input type=\"text\" name=\"total_received_price\"id=\"input-total-received-price\"class=\"form-control\" readonly>
                  </div>
            
                  <div class=\"col-sm-3\">
                    <label class=\"col-form-label\">Total Wholesale Price</label>
                    <input type=\"text\" name=\"total_wholesale_price\"id=\"input-total-wholesale-price\"class=\"form-control\" readonly>
                  </div>
            
                  <div class=\"col-sm-3\">
                    <label class=\"col-form-label\">Total Retail Price</label>
                    <input type=\"text\" name=\"total_retail_price\"id=\"input-total-retail-price\"class=\"form-control\" readonly>
                  </div>
                </div>
            
              </fieldset>
            </div>

          </div>
          <input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\" id=\"input-product-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('textarea[data-oc-toggle=\\'ckeditor\\']').ckeditor({
    language: '{{ ckeditor }}'
});

var code_row = {{ code_row }};

\$('#button-code').on('click', function() {
    var html = '';

    let code = \$('#input-code').val();
    let value = \$('#input-value').val();

    html += '<tr id=\"code-row-' + code_row + '\">';
    html += '  <td style=\"width: 1px;\">' + code + '<input type=\"hidden\" name=\"product_code[' + code_row + '][code]\" value=\"' + code + '\"/></td>';
    html += '  <td>' + value + '<div id=\"error-code-' + code_row + '\" class=\"invalid-feedback\"></div><input type=\"hidden\" name=\"product_code[' + code_row + '][value]\" value=\"' + value + '\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-code').append(html);

    code_row++;
});

\$('#product-code').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Manufacturer
\$('#input-manufacturer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/manufacturer.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    manufacturer_id: 0,
                    name: '{{ text_none }}'
                });

                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['manufacturer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-manufacturer').val(decodeHTMLEntities(item['label']));
        \$('#input-manufacturer-id').val(item['value']);
    }
});

// Category
\$('#input-category').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/category.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['category_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-category').val('');

        \$('#product-category-' + item['value']).remove();

        html = '<tr id=\"product-category-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-category tbody').append(html);
    }
});

\$('#product-category').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Filter
\$('#input-filter').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/filter.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['filter_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-filter').val('');

        \$('#product-filter-' + item['value']).remove();

        html = '<tr id=\"product-filter-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-filter tbody').append(html);
    }
});

\$('#product-filter').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Downloads
\$('#input-download').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/download.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['download_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-download').val('');

        \$('#product-download-' + item['value']).remove();

        html = '<tr id=\"product-download-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-download tbody').append(html);
    }
});

\$('#product-download').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Related
\$('#input-related').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-related').val('');

        \$('#product-related-' + item['value']).remove();

        html = '<tr id=\"product-related-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-related tbody').append(html);
    }
});

\$('#product-related').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

var attributeautocomplete = function(attribute_row) {
    \$('#input-attribute-' + attribute_row).autocomplete({
        'source': function(request, response) {
            \$.ajax({
                url: 'index.php?route=catalog/attribute.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
                dataType: 'json',
                success: function(json) {
                    response(\$.map(json, function(item) {
                        return {
                            category: item.attribute_group,
                            label: item.name,
                            value: item.attribute_id
                        }
                    }));
                }
            });
        },
        'select': function(item) {
            \$('#input-attribute-' + attribute_row).val(decodeHTMLEntities(item['label']));
            \$('#input-attribute-id-' + attribute_row).val(item['value']);
        }
    });
}

var attribute_row = {{ attribute_row }};

\$('#product-attribute tr').each(function(index) {
    attributeautocomplete(index);
});

\$('#button-attribute').on('click', function() {
    html = '<tr id=\"attribute-row-' + attribute_row + '\">';
    html += '  <td>';
    html += '    <input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"{{ entry_attribute|escape('js') }}\" id=\"input-attribute-' + attribute_row + '\" data-oc-target=\"autocomplete-attribute-' + attribute_row + '\" class=\"form-control\" autocomplete=\"off\"/>';
    html += '    <input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" id=\"input-attribute-id-' + attribute_row + '\"/>';
    html += '    <ul id=\"autocomplete-attribute-' + attribute_row + '\" class=\"dropdown-menu\"></ul>';
    html += '  </td>';
    html += '  <td>';
  {% for language in languages %}
    html += '<div class=\"input-group\">';
    html += '  <div class=\"input-group-text\"><img src=\"{{ language.image }}\" title=\"{{ language.name|escape('js') }}\" /></div>';
    html += '  <textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][{{ language.language_id }}][text]\" rows=\"5\" placeholder=\"{{ entry_text|escape('js') }}\" id=\"input-text-' + attribute_row + '-{{ language.language_id }}\" class=\"form-control\"></textarea>';
    html += '</div>';
  {% endfor %}
    html += '  </td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#attribute-row-' + attribute_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-attribute').append(html);

    attributeautocomplete(attribute_row);

    attribute_row++;
});

{% if not master_id %}
var option_row = {{ option_row }};

\$('#input-option').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/option.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        category: item['category'],
                        label: item['name'],
                        value: item['option_id'],
                        type: item['type'],
                        option_value: item['option_value']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        html = '<fieldset id=\"option-row-' + option_row + '\">';
        html += '  <legend class=\"float-none\">' + item['label'] + '</legend>';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + decodeHTMLEntities(item['label']) + '\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

        html += '  <div class=\"row align-items-center\">';
        html += '    <div class=\"col-11\">';

        html += '      <div class=\"mb-3\">';
        html += '        <label for=\"input-required-' + option_row + '\" class=\"form-label\">{{ entry_required|escape('js') }}</label>';
        html += '\t       <select name=\"product_option[' + option_row + '][required]\" id=\"input-required-' + option_row + '\" class=\"form-select\">';
        html += '\t         <option value=\"1\">{{ text_yes|escape('js') }}</option>';
        html += '\t         <option value=\"0\">{{ text_no|escape('js') }}</option>';
        html += '\t       </select>';
        html += '      </div>';

        if (item['type'] == 'text') {
            html += '  <div class=\"mb-3\">';
            html += '     <label for=\"input-option-' + option_row + '\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
            html += '     <input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '\t </div>';
        }

        if (item['type'] == 'textarea') {
            html += '  <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
            html += '    <textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-' + option_row + '\" class=\"form-control\"></textarea>';
            html += '\t </div>';
        }

        if (item['type'] == 'file') {
            html += '  <div class=\"mb-3 d-none\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
            html += '    <input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'date') {
            html += '  <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
            html += '    <input type=\"date\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'time') {
            html += '  <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
            html += '    <input type=\"time\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'datetime') {
            html += '\t <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
            html += '    <input type=\"datetime-local\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
            html += '<div class=\"table-responsive\">';
            html += '  <table class=\"table table-bordered table-hover\">';
            html += '  \t <thead>';
            html += '      <tr>';
            html += '        <td>{{ entry_option_value|escape('js') }}</td>';
            html += '        <td class=\"text-end\">{{ entry_quantity|escape('js') }}</td>';
            html += '        <td>{{ entry_subtract|escape('js') }}</td>';
            html += '        <td class=\"text-end\">{{ entry_price|escape('js') }}</td>';
            html += '        <td class=\"text-end\">{{ entry_points|escape('js') }}</td>';
            html += '        <td class=\"text-end\">{{ entry_weight|escape('js') }}</td>';
            html += '        <td></td>';
            html += '      </tr>';
            html += '    </thead>';
            html += '    <tbody id=\"option-value-' + option_row + '\"></tbody>';
            html += '    <tfoot>';
            html += '      <tr>';
            html += '        <td colspan=\"6\"></td>';
            html += '        <td class=\"text-end\"><button type=\"button\" data-option-row=\"' + option_row + '\" data-bs-toggle=\"tooltip\" title=\"{{ button_option_value_add|escape('js') }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>';
            html += '      </tr>';
            html += '    </tfoot>';
            html += '  </table>';
            html += '</div>';

            html += '<select id=\"product-option-values-' + option_row + '\" class=\"d-none\">';

            for (i = 0; i < item['option_value'].length; i++) {
                html += '<option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
            }

            html += '</select>';
        }

        html += '\t </div>';
        html += '\t <div class=\"col\">';
        html += '    <button type=\"button\" class=\"btn btn-danger\" onclick=\"\$(\\'#option-row-' + option_row + '\\').remove();\"><i class=\"fa-solid fa-minus-circle\"></i></button>';
        html += '  </div>';
        html += '</fieldset>';

        \$('#option').append(html);

        option_row++;
    }
});

var option_value_row = {{ option_value_row }};

\$('#option').on('click', '.btn-primary', function() {
    var element = this;

    if (\$(element).attr('data-option-value-row')) {
        element.option_value_row = \$(element).attr('data-option-value-row');
    } else {
        element.option_value_row = option_value_row;
    }

    \$('.modal').remove();

    html = '<div id=\"modal-option\" class=\"modal fade\">';
    html += '  <div class=\"modal-dialog\">';
    html += '    <div class=\"modal-content\">';
    html += '      <div class=\"modal-header\">';
    html += '        <h5 class=\"modal-title\"><i class=\"fa-solid fa-pencil\"></i> {{ text_option_value|escape('js') }}</h5> <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>';
    html += '      </div>';
    html += '      <div class=\"modal-body\">';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-option-value\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
    html += '      \t   <select name=\"option_value_id\" id=\"input-modal-option-value\" class=\"form-select\">';

    option_value = \$('#product-option-values-' + \$(element).attr('data-option-row') + ' option');

    for (i = 0; i < option_value.length; i++) {
        if (\$(element).attr('data-option-value-row') && \$(option_value[i]).val() == \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][option_value_id]\\']').val()) {
            html += '<option value=\"' + \$(option_value[i]).val() + '\" selected>' + \$(option_value[i]).text() + '</option>';
        } else {
            html += '<option value=\"' + \$(option_value[i]).val() + '\">' + \$(option_value[i]).text() + '</option>';
        }
    }

    html += '      \t   </select>';
    html += '          <input type=\"hidden\" name=\"product_option_value_id\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][product_option_value_id]\\']').val() : '') + '\"/>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-quantity\" class=\"form-label\">{{ entry_quantity|escape('js') }}</label>';
    html += '      \t   <input type=\"text\" name=\"quantity\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][quantity]\\']').val() : '1') + '\" placeholder=\"{{ entry_quantity|escape('js') }}\" id=\"input-modal-quantity\" class=\"form-control\"/>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-subtract\" class=\"form-label\">{{ entry_subtract|escape('js') }}</label>';
    html += '      \t   <select name=\"subtract\" id=\"input-modal-subtract\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\\']').val() == '1') {
        html += '        <option value=\"1\" selected>{{ text_yes|escape('js') }}</option>';
        html += '      \t <option value=\"0\">{{ text_no|escape('js') }}</option>';
    } else {
        html += '      \t <option value=\"1\">{{ text_yes|escape('js') }}</option>';
        html += '      \t <option value=\"0\" selected>{{ text_no|escape('js') }}</option>';
    }

    html += '      \t   </select>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-price\" class=\"form-label\">{{ entry_price|escape('js') }}</label>';
    html += '          <div class=\"input-group\">';
    html += '            <select name=\"price_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\\']').val() == '+') {
        html += '      \t   <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t   <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"price\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price]\\']').val() : '0') + '\" placeholder=\"{{ entry_price|escape('js') }}\" id=\"input-modal-price\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-points\" class=\"form-label\">{{ entry_points|escape('js') }}</label>';
    html += '          <div class=\"input-group\">';
    html += '      \t     <select name=\"points_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\\']').val() == '+') {
        html += '      \t       <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t       <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"points\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points]\\']').val() : '0') + '\" placeholder=\"{{ entry_points|escape('js') }}\" id=\"input-modal-points\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-weight\" class=\"form-label\">{{ entry_weight|escape('js') }}</label>';
    html += '          <div class=\"input-group\">';
    html += '      \t     <select name=\"weight_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\\']').val() == '+') {
        html += '      \t       <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t       <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"weight\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight]\\']').val() : '0') + '\" placeholder=\"{{ entry_weight|escape('js') }}\" id=\"input-modal-weight\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';
    html += '      </div>';
    html += '      <div class=\"modal-footer\">';
    html += '\t       <button type=\"button\" id=\"button-save\" data-option-row=\"' + \$(element).attr('data-option-row') + '\" data-option-value-row=\"' + element.option_value_row + '\" class=\"btn btn-primary\">{{ button_save|escape('js') }}</button> <button type=\"button\" class=\"btn btn-light\" data-bs-dismiss=\"modal\">{{ button_cancel|escape('js') }}</button>';
    html += '      </div>';
    html += '    </div>';
    html += '  </div>';
    html += '</div>';

    \$('body').append(html);

    \$('#modal-option').modal('show');

    \$('#modal-option #button-save').on('click', function() {
        html = '<tr id=\"option-value-row-' + element.option_value_row + '\">';
        html += '  <td>' + \$('#modal-option select[name=\\'option_value_id\\'] option:selected').text() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][option_value_id]\" value=\"' + \$('#modal-option select[name=\\'option_value_id\\']').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][product_option_value_id]\" value=\"' + \$('#modal-option input[name=\\'product_option_value_id\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option input[name=\\'quantity\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][quantity]\" value=\"' + \$('#modal-option input[name=\\'quantity\\']').val() + '\"/></td>';
        html += '  <td>' + (\$('#modal-option select[name=\\'subtract\\'] option:selected').val() == '1' ? '{{ text_yes|escape('js') }}' : '{{ text_no|escape('js') }}') + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\" value=\"' + \$('#modal-option select[name=\\'subtract\\'] option:selected').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'price\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\" value=\"' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price]\" value=\"' + \$('#modal-option input[name=\\'price\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\"> ' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'points\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\" value=\"' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points]\" value=\"' + \$('#modal-option input[name=\\'points\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'weight\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\" value=\"' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight]\" value=\"' + \$('#modal-option input[name=\\'weight\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit|escape('js') }}\" data-option-row=\"' + \$(element).attr('data-option-row') + '\" data-option-value-row=\"' + element.option_value_row + '\"class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></button> <button type=\"button\" onclick=\"\$(\\'#option-value-row-' + element.option_value_row + '\\').remove();\" data-bs-toggle=\"tooltip\" rel=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        if (\$(element).attr('data-option-value-row')) {
            \$('#option-value-row-' + element.option_value_row).replaceWith(html);
        } else {
            \$('#option-value-' + \$(element).attr('data-option-row')).append(html);

            option_value_row++;
        }

        \$('#modal-option').modal('hide');
    });
});
{% endif %}

var discount_row = {{ discount_row }};

\$('#button-discount').on('click', function() {
    html = '<tr id=\"discount-row-' + discount_row + '\">';
    html += '  <td><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-select\">';
  {% for customer_group in customer_groups %}
    html += '    <option value=\"{{ customer_group.customer_group_id }}\">{{ customer_group.name|escape('js') }}</option>';
  {% endfor %}
    html += '  </select><input type=\"hidden\" name=\"product_discount[' + discount_row + '][product_discount_id]\" value=\"\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"1\" placeholder=\"{{ entry_quantity|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"{{ entry_priority|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"{{ entry_price|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td><select name=\"product_discount[' + discount_row + '][type]\" class=\"form-select\">';
    html += '    <option value=\"F\">{{ text_fixed }}</option>';
    html += '    <option value=\"S\">{{ text_subtract }}</option>';
    html += '    <option value=\"P\">{{ text_percentage }}</option>';
    html += '  </select></td>';
    html += '  <td><div class=\"form-check form-switch form-switch-lg\">';
    html += '    <input type=\"hidden\" name=\"product_discount[' + discount_row + '][special]\" value=\"0\"/>';
    html += '    <input type=\"checkbox\" name=\"product_discount[' + discount_row + '][special]\" value=\"1\" class=\"form-check-input\"/>';
    html += '  </div></td>';
    html += '  <td><input type=\"date\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"{{ entry_date_start|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td><input type=\"date\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"{{ entry_date_end|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#discount-row-' + discount_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-discount tbody').append(html);

    discount_row++;
});

var image_row = {{ image_row }};

\$('#button-image').on('click', function() {
    html = '<tr id=\"product-image-row-' + image_row + '\">';
    html += '  <td><div class=\"border rounded d-block\" style=\"max-width: 300px;\">';
    html += '    <img src=\"{{ placeholder|escape('js') }}\" alt=\"\" title=\"\" id=\"thumb-image-' + image_row + '\" data-oc-placeholder=\"{{ placeholder|escape('js') }}\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-product-image-' + image_row + '\"/>';
    html += '    <div class=\"d-grid\">';
    html += '      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#thumb-image-' + image_row + '\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit|escape('js') }}</button>';
    html += '      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#thumb-image-' + image_row + '\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear|escape('js') }}</button>';
    html += '    </div>';
    html += '  </div></td>';
    html += '  <td><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"0\" placeholder=\"{{ entry_sort_order|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#product-image-row-' + image_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-image tbody').append(html);

    image_row++;
});

var subscription_row = {{ subscription_row }};

\$('#button-subscription').on('click', function() {
    html = '<tr id=\"subscription-row-' + subscription_row + '\">';
    html += '  <td><select name=\"product_subscription[' + subscription_row + '][subscription_plan_id]\" class=\"form-select\">';
  {% for subscription_plan in subscription_plans %}
    html += '      <option value=\"{{ subscription_plan.subscription_plan_id }}\">{{ subscription_plan.name|escape('js') }}</option>';
  {% endfor %}
    html += '  </select></td>';
    html += '  <td><select name=\"product_subscription[' + subscription_row + '][customer_group_id]\" class=\"form-select\">';
  {% for customer_group in customer_groups %}
    html += '      <option value=\"{{ customer_group.customer_group_id }}\">{{ customer_group.name|escape('js') }}</option>';
  {% endfor %}
    html += '  <select></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_subscription[' + subscription_row + '][trial_price]\" value=\"\" placeholder=\"{{ entry_trial_price|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_subscription[' + subscription_row + '][price]\" value=\"\" placeholder=\"{{ entry_price|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#subscription-row-' + subscription_row + '\\').remove()\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-subscription tbody').append(html);

    subscription_row++;
});

{% if master_id %}
// Variable products
\$('input[data-oc-toggle=\\'switch\\']').on('change', function(e) {
    var element = this;

    var target = \$(this).attr('data-oc-target');

    // First we need to grab the default values
    // Now we need to enable or disable any fields in the targets
    \$.merge(\$(target), \$(target).find('input, textarea, select, button')).not('[data-oc-toggle=\\'switch\\']').each(function(i, elem) {
        // Text Textarea
        if (\$(this).is('input[type=\\'text\\'], textarea')) {
            \$(this).prop('readonly', !\$(element).prop('checked'));
        }

        // CKEditor readonly
        if (\$(this).is('[data-oc-toggle=\\'ckeditor\\']')) {
            var editor = CKEDITOR.instances[\$(this).attr('id')];

            if (editor.editable() == undefined) {
                editor.on('instanceReady', function() {
                    this.setReadOnly(!\$(element).prop('checked'));
                });
            } else {
                editor.setReadOnly(!\$(element).prop('checked'));
            }
        }

        // Radio Checkbox
        if (\$(this).is('input[type=\\'radio\\'], input[type=\\'checkbox\\'], div[data-bs-toggle=\\'buttons\\']')) {
            if (!\$(element).prop('checked')) {
                \$(this).on('click', function(e) {
                    return false;
                });
            } else {
                \$(this).off('click');
            }
        }

        // Select
        if (\$(this).is('select')) {
            if (!\$(element).prop('checked')) {
                \$(this).addClass('.disabled');

                \$(this).prop('readonly', true);
            } else {
                \$(this).removeClass('disabled');

                \$(this).prop('readonly', false);
            }

            \$(this).find('option').not(':selected').prop('disabled', !\$(element).prop('checked'));
        }

        // Button
        if (\$(this).is('button')) {
            if (!\$(element).prop('checked')) {
                \$(this).prop('disabled', true);
            } else {
                \$(this).prop('disabled', false);
            }
        }
    });
});

\$('input[data-oc-toggle=\\'switch\\']').trigger('change');
{% endif %}

\$('#report').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#report').load(this.href);
});


//-->
</script>
<script>
window.generateBarcode = function () {
    const type = document.getElementById('barcodeType').value;

    fetch(
        'index.php?route=catalog/product.generateBarcode'
        + '&user_token={{ user_token }}'
        + '&type=' + type
    )
    .then(res => res.json())
    .then(data => {
        if (!data.success) return;

        const input = document.getElementById('barcodeInput');
        input.value = data.barcode;
        input.name  = data.field;
    });
};

document.addEventListener('DOMContentLoaded', function () {

    const barcodeType  = document.getElementById('barcodeType');
    const barcodeInput = document.getElementById('barcodeInput');

    const skuValue = document.getElementById('skuValue').value;
    const upcValue = document.getElementById('upcValue').value;

    function updateBarcodeField() {
        if (barcodeType.value === 'box') {
            barcodeInput.value = upcValue;
            barcodeInput.name  = 'upc'; 
        } else {
            barcodeInput.value = skuValue;
            barcodeInput.name  = 'sku';
        }
    }

    updateBarcodeField();
    barcodeType.addEventListener('change', updateBarcodeField);
});


const RACK_PREFIX = 'RACK-';

function fixRackPrefix(input) {
    if (!input.value.startsWith(RACK_PREFIX)) {
        let num = input.value.replace(/[^0-9]/g, '');
        input.value = RACK_PREFIX + num;
    }
}

function protectRackPrefix(e, input) {
    const cursorPos = input.selectionStart;

    // Prevent deleting/modifying \"RACK-\"
    if (cursorPos <= RACK_PREFIX.length &&
        (e.key === 'Backspace' || e.key === 'Delete')) {
        e.preventDefault();
    }
}

// Force prefix on page load
document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('input-rack');
    if (input && input.value.trim() === '') {
        input.value = RACK_PREFIX;
    }
});



document.addEventListener('DOMContentLoaded', function () {

    function lockPrefix(input) {
        const prefix = input.dataset.prefix;

        function normalize() {
            if (!input.value.startsWith(prefix)) {
                input.value = prefix;
            }

            const number = input.value.slice(prefix.length).replace(/\\D/g, '');
            input.value = prefix + number;
        }

        // Initial cleanup
        normalize();

        // On typing
        input.addEventListener('input', normalize);

        // Prevent deleting prefix
        input.addEventListener('keydown', function (e) {
            const cursorPos = input.selectionStart;

            if (
                (e.key === 'Backspace' || e.key === 'Delete') &&
                cursorPos <= prefix.length
            ) {
                e.preventDefault();
            }
        });

        // Force cursor after prefix
        input.addEventListener('click', function () {
            if (input.selectionStart < prefix.length) {
                input.setSelectionRange(prefix.length, prefix.length);
            }
        });
    }

    lockPrefix(document.getElementById('input-r_tag'));
    lockPrefix(document.getElementById('input-w_tag'));

});
document.addEventListener('DOMContentLoaded', function () {
    const barcodeType = document.getElementById('barcodeType');
    const boxInput = document.getElementById('input-box-id');

    function toggleBoxInput() {
        if (barcodeType.value === 'box') {
            boxInput.disabled = true;
            boxInput.value = '';
        } else {
            boxInput.disabled = false;
        }
    }
    toggleBoxInput();
    barcodeType.addEventListener('change', toggleBoxInput);
});

function calculateBatchTotals() {
    const quantity = parseFloat(document.getElementById('input-r_tax')?.value) || 0;

    const receivedPrice  = parseFloat(document.getElementById('input-received_price')?.value) || 0;
    const wholesalePrice = parseFloat(document.getElementById('input-wholesale-price')?.value) || 0;
    const retailPrice    = parseFloat(document.getElementById('input-price')?.value) || 0;

    document.getElementById('input-total-received-price').value =
        (receivedPrice * quantity).toFixed(2);

    document.getElementById('input-total-wholesale-price').value =
        (wholesalePrice * quantity).toFixed(2);

    document.getElementById('input-total-retail-price').value =
        (retailPrice * quantity).toFixed(2);
}

// Recalculate when values change
['input-r_tax', 'input-received_price', 'input-wholesale-price', 'input-price']
  .forEach(id => {
    const el = document.getElementById(id);
    if (el) el.addEventListener('input', calculateBatchTotals);
});
</script>
<script>
document.addEventListener(\"DOMContentLoaded\", function () {

    const barcodeType = document.getElementById(\"barcodeType\");
    const boxInput = document.getElementById(\"input-box-id\");

    if (!barcodeType || !boxInput) return;

    boxInput.addEventListener(\"change\", function () {

        if (barcodeType.value !== \"unit\") return;

        const boxId = boxInput.value.trim();
        if (!boxId) return;

        fetch(\"index.php?route=catalog/product.getBoxProductName&user_token={{ user_token }}&box_id=\" + encodeURIComponent(boxId))
            .then(res => res.json())
            .then(json => {
                if (json.success && json.name) {

                    // Fill name in ALL language inputs
                    {% for language in languages %}
                        const nameInput{{ language.language_id }} = document.getElementById(\"input-name-{{ language.language_id }}\");
                        if (nameInput{{ language.language_id }}) {
                            nameInput{{ language.language_id }}.value = json.name;
                        }
                    {% endfor %}
                }
            })
            .catch(err => console.log(err));
    });

});
</script>


{{ footer }}
", "admin/view/template/catalog/product_form.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/admin/view/template/catalog/product_form.twig");
    }
}
