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

/* admin/view/template/catalog/category_form.twig */
class __TwigTemplate_365356b1644abe99dfaa45a8a3c4a38e extends Template
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
      <div class=\"float-end\"><button type=\"submit\" form=\"form-category\" data-bs-toggle=\"tooltip\" title=\"";
        // line 5
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 6
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
      </div>
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
        <form id=\"form-category\" action=\"";
        // line 20
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 22
        yield ($context["tab_general"] ?? null);
        yield "</a></li>
            ";
        // line 24
        yield "            ";
        // line 25
        yield "            ";
        // line 26
        yield "          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              ";
        // line 30
        yield "              ";
        // line 31
        yield "              ";
        // line 32
        yield "              ";
        // line 33
        yield "              ";
        // line 34
        yield "              <div class=\"tab-content\">
                ";
        // line 35
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
            // line 36
            yield "                  <div id=\"language-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 36);
            yield "\" class=\"tab-pane";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 36)) {
                yield " active";
            }
            yield "\">
                   <div class=\"row mb-3 align-items-start\">

  <!-- LEFT SIDE FIELDS -->
 <div class=\"row\">

  <!-- LEFT SIDE FORM -->
  <div class=\"col-sm-8\">

    <!-- ROW 1 -->
    <div class=\"row mb-3\">
      <div class=\"col-sm-6\">
        <input type=\"text\"
               name=\"category_description[";
            // line 49
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 49);
            yield "][name]\"
               value=\"";
            // line 50
            yield (((($_v0 = ($context["category_description"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 50)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["category_description"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 50)] ?? null) : null), "name", [], "any", false, false, false, 50)) : (""));
            yield "\"
               placeholder=\"Category Name\"
               class=\"form-control\">
                 </div>
            
                  <div class=\"col-sm-6\">
                    <input type=\"text\"
                           name=\"path\"
                           value=\"";
            // line 58
            yield ($context["path"] ?? null);
            yield "\"
                           placeholder=\"Parent\"
                           class=\"form-control\">
                  </div>
                </div>
            
                <!-- ROW 2 -->
               <div class=\"row mb-3\">
            
              <div class=\"col-sm-6\">
                <select name=\"offer\" id=\"input-offer\" class=\"form-control\">
                  <option value=\"0\" ";
            // line 69
            if ((($context["offer"] ?? null) == 0)) {
                yield "selected";
            }
            yield ">No Offer</option>
                  <option value=\"1\" ";
            // line 70
            if ((($context["offer"] ?? null) == 1)) {
                yield "selected";
            }
            yield ">Yes Offer</option>
                </select>
              </div>
            
              <div class=\"col-sm-6\">
                <input type=\"number\"
                       name=\"offer_percentage\"
                       id=\"offer-percentage\"
                       class=\"form-control\"
                       placeholder=\"Offer %\"
                       value=\"";
            // line 80
            yield ($context["offer_percentage"] ?? null);
            yield "\">
              </div>
            
            </div>
            
            
            <div class=\"row mb-3\">
            
              <div class=\"col-sm-6\">
                <input type=\"date\"
                       name=\"offer_from\"
                       id=\"offer-from\"
                       value=\"";
            // line 92
            yield ($context["offer_from"] ?? null);
            yield "\"
                       class=\"form-control\">
              </div>
            
              <div class=\"col-sm-6\">
                <input type=\"date\"
                       name=\"offer_to\"
                       id=\"offer-to\"
                       value=\"";
            // line 100
            yield ($context["offer_to"] ?? null);
            yield "\"
                       class=\"form-control\">
              </div>
            
            </div>
            
                <!-- ROW 4 -->
                <div class=\"row mb-3\">
            
                  <div class=\"col-sm-6\">
                    <input type=\"number\"
                           name=\"gst\"
                           value=\"";
            // line 112
            yield ($context["gst"] ?? null);
            yield "\"
                           placeholder=\"GST %\"
                           class=\"form-control\">
                  </div>
            
                </div>
            
              </div>
            
            
              <!-- RIGHT SIDE -->
              <div class=\"border rounded d-inline-block position-relative\" style=\"max-width:300px; margin-left:100px;\">
            
             
            
              <!-- IMAGE -->
              <img src=\"";
            // line 128
            yield ($context["thumb"] ?? null);
            yield "\" alt=\"\" id=\"thumb-image\" class=\"img-fluid\"/>
            
              <input type=\"hidden\" name=\"image\" value=\"";
            // line 130
            yield ($context["image"] ?? null);
            yield "\" id=\"input-image\"/>
            
              <div class=\"d-grid\">
                <button type=\"button\"
                        data-oc-toggle=\"image\"
                        data-oc-target=\"#input-image\"
                        data-oc-thumb=\"#thumb-image\"
                        class=\"btn btn-primary rounded-0\">
                  Edit
                </button>
            
                <button type=\"button\"
                        data-oc-toggle=\"clear\"
                        data-oc-target=\"#input-image\"
                        data-oc-thumb=\"#thumb-image\"
                        class=\"btn btn-warning rounded-0\">
                  Clear
                </button>
              </div>
             <!-- STATUS TOGGLE -->
              <div style=\"position:absolute; top:10px; right:-70px;\">
                <div class=\"form-check form-switch form-switch-lg\">
                  <input type=\"hidden\" name=\"status\" value=\"0\"/>
                  <input type=\"checkbox\"
                         name=\"status\"
                         value=\"1\"
                         class=\"form-check-input\"
                         ";
            // line 157
            if (($context["status"] ?? null)) {
                yield "checked";
            }
            yield ">
                </div>
              </div>
            </div>

                    <div class=\"row mb-3\" style=\"display:none\">
                      <label for=\"input-description-";
            // line 163
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 163);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_description"] ?? null);
            yield "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"category_description[";
            // line 165
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 165);
            yield "][description]\" placeholder=\"";
            yield ($context["entry_description"] ?? null);
            yield "\" id=\"input-description-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 165);
            yield "\" data-oc-toggle=\"ckeditor\" data-lang=\"";
            yield ($context["ckeditor"] ?? null);
            yield "\" class=\"form-control\">";
            yield (((($_v2 = ($context["category_description"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 165)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v3 = ($context["category_description"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 165)] ?? null) : null), "description", [], "any", false, false, false, 165)) : (""));
            yield "</textarea>
                      </div>
                    </div>
                    <div class=\"row mb-3 required\" style=\"display:none\">
                      <label for=\"input-meta-title-";
            // line 169
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 169);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_meta_title"] ?? null);
            yield "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" value=\"SHA\" name=\"category_description[";
            // line 171
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 171);
            yield "][meta_title]\" value=\"";
            yield (((($_v4 = ($context["category_description"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 171)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v5 = ($context["category_description"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 171)] ?? null) : null), "meta_title", [], "any", false, false, false, 171)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_meta_title"] ?? null);
            yield "\" id=\"input-meta-title-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 171);
            yield "\" class=\"form-control\"/>
                        <div id=\"error-meta-title-";
            // line 172
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 172);
            yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                    <div class=\"row mb-3\" style=\"display:none\">
                      <label for=\"input-meta-description-";
            // line 176
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 176);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_meta_description"] ?? null);
            yield "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"category_description[";
            // line 178
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 178);
            yield "][meta_description]\" rows=\"5\" placeholder=\"";
            yield ($context["entry_meta_description"] ?? null);
            yield "\" id=\"input-meta-description-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 178);
            yield "\" class=\"form-control\">";
            yield (((($_v6 = ($context["category_description"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 178)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v7 = ($context["category_description"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 178)] ?? null) : null), "meta_description", [], "any", false, false, false, 178)) : (""));
            yield "</textarea>
                      </div>
                    </div>
                    <div class=\"row mb-3\" style=\"display:none\">
                      <label for=\"input-meta-keyword-";
            // line 182
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 182);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_meta_keyword"] ?? null);
            yield "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"category_description[";
            // line 184
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 184);
            yield "][meta_keyword]\" rows=\"5\" placeholder=\"";
            yield ($context["entry_meta_keyword"] ?? null);
            yield "\" id=\"input-meta-keyword-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 184);
            yield "\" class=\"form-control\">";
            yield (((($_v8 = ($context["category_description"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 184)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v9 = ($context["category_description"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 184)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 184)) : (""));
            yield "</textarea>
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
        // line 189
        yield "              </div>
            </div>
          
            <div id=\"tab-data\" class=\"tab-pane\">
              <div class=\"row mb-3\">
              ";
        // line 195
        yield "              ";
        // line 196
        yield "              ";
        // line 197
        yield "              ";
        // line 198
        yield "              ";
        // line 199
        yield "              ";
        // line 200
        yield "              ";
        // line 201
        yield "              ";
        // line 202
        yield "              ";
        // line 203
        yield "              <div class=\"row mb-3\" style=\"display:none\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 204
        yield ($context["entry_filter"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 206
        yield ($context["entry_filter"] ?? null);
        yield "\" id=\"input-filter\" data-oc-target=\"autocomplete-filter\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-filter\" class=\"dropdown-menu\"></ul>
                  <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                    <table id=\"category-filter\" class=\"table m-0\">
                      <tbody>
                        ";
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["category_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_filter"]) {
            // line 212
            yield "                          <tr id=\"category-filter-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category_filter"], "filter_id", [], "any", false, false, false, 212);
            yield "\">
                            <td>";
            // line 213
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category_filter"], "name", [], "any", false, false, false, 213);
            yield "<input type=\"hidden\" name=\"category_filter[]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category_filter"], "filter_id", [], "any", false, false, false, 213);
            yield "\"/></td>
                            <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                          </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category_filter'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        yield "                      </tbody>
                    </table>
                  </div>
                  <div class=\"form-text\">";
        // line 220
        yield ($context["help_filter"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"row mb-3\" style=\"display:none\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 224
        yield ($context["entry_store"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 227
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 228
            yield "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"category_store[]\" value=\"";
            // line 229
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 229);
            yield "\" id=\"input-store-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 229);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 229), ($context["category_store"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-store-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 229);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 229);
            yield "</label>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        yield "                  </div>
                </div>
              </div>
              ";
        // line 236
        yield "              ";
        // line 237
        yield "              ";
        // line 238
        yield "              ";
        // line 239
        yield "              ";
        // line 240
        yield "              ";
        // line 241
        yield "              ";
        // line 242
        yield "              ";
        // line 243
        yield "              ";
        // line 244
        yield "              ";
        // line 245
        yield "              ";
        // line 246
        yield "              ";
        // line 247
        yield "              ";
        // line 248
        yield "              <div class=\"row mb-3\" style=\"display:none\">
                <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 249
        yield ($context["entry_sort_order"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"number\" name=\"sort_order\" value=\"";
        // line 251
        yield ($context["sort_order"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_sort_order"] ?? null);
        yield "\" id=\"input-sort-order\" class=\"form-control\"/>
                </div>
              </div>
              ";
        // line 255
        yield "              ";
        // line 256
        yield "              ";
        // line 257
        yield "              ";
        // line 258
        yield "              ";
        // line 259
        yield "              ";
        // line 260
        yield "              ";
        // line 261
        yield "              ";
        // line 262
        yield "              ";
        // line 263
        yield "            </div>
            <div id=\"tab-seo\" class=\"tab-pane\" style=\"display:none\">
              <div class=\"alert alert-info\"><i class=\"fa-solid fa-info-circle\"></i> ";
        // line 265
        yield ($context["text_keyword"] ?? null);
        yield "</div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>";
        // line 270
        yield ($context["entry_store"] ?? null);
        yield "</th>
                      <th>";
        // line 271
        yield ($context["entry_keyword"] ?? null);
        yield "</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 275
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 276
            yield "                      <tr>
                        <td>";
            // line 277
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 277);
            yield "</td>
                        <td>
                          ";
            // line 279
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 280
                yield "                            <div class=\"input-group\">
                              <div class=\"input-group-text\"><img src=\"";
                // line 281
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 281);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 281);
                yield "\"/></div>
                              <input type=\"text\" name=\"category_seo_url[";
                // line 282
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 282);
                yield "][";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 282);
                yield "]\" value=\"";
                if ((($_v10 = (($_v11 = ($context["category_seo_url"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 282)] ?? null) : null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 282)] ?? null) : null)) {
                    yield (($_v12 = (($_v13 = ($context["category_seo_url"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 282)] ?? null) : null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 282)] ?? null) : null);
                }
                yield "\" placeholder=\"";
                yield ($context["entry_keyword"] ?? null);
                yield "\" id=\"input-keyword-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 282);
                yield "-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 282);
                yield "\" class=\"form-control\"/>
                            </div>
                            <div id=\"error-keyword-";
                // line 284
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 284);
                yield "-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 284);
                yield "\" class=\"invalid-feedback\"></div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 285
            yield "</td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 288
        yield "                  </tbody>
                </table>
              </div>
            </div>
            <div id=\"tab-design\" class=\"tab-pane\" style=\"display:none\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>";
        // line 297
        yield ($context["entry_store"] ?? null);
        yield "</th>
                      <th>";
        // line 298
        yield ($context["entry_layout"] ?? null);
        yield "</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 302
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 303
            yield "                      <tr>
                        <td>";
            // line 304
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 304);
            yield "</td>
                        <td><select name=\"category_layout[";
            // line 305
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 305);
            yield "]\" class=\"form-select\">
                            <option value=\"\"></option>
                            ";
            // line 307
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 308
                yield "                              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 308);
                yield "\"";
                if (((($_v14 = ($context["category_layout"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 308)] ?? null) : null) && ((($_v15 = ($context["category_layout"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 308)] ?? null) : null) == CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 308)))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 308);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['layout'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 310
            yield "                          </select></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 313
        yield "                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <input type=\"hidden\" name=\"category_id\" value=\"";
        // line 318
        yield ($context["category_id"] ?? null);
        yield "\" id=\"input-category-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('textarea[data-oc-toggle=\\'ckeditor\\']').ckeditor({
    language: '";
        // line 326
        yield ($context["ckeditor"] ?? null);
        yield "'
});

\$('#input-parent').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/category.autocomplete&user_token=";
        // line 332
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    'category_id': '0',
                    'name': '";
        // line 337
        yield ($context["text_none"] ?? null);
        yield "'
                });

                response(\$.map(json, function(item) {
                    return {
                        value: item['category_id'],
                        label: item['name']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-parent').val(decodeHTMLEntities(item['label']));
        \$('#input-parent-id').val(item['value']);
    }
});

\$('#input-filter').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/filter.autocomplete&user_token=";
        // line 358
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

        \$('#category-filter-' + item['value']).remove();

        html = '<tr id=\"category-filter-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"category_filter[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#category-filter tbody').append(html);
    }
});

\$('#category-filter').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});
document.addEventListener(\"DOMContentLoaded\", function () {

  const offer = document.getElementById(\"input-offer\");
  const percentage = document.getElementById(\"offer-percentage\");
  const from = document.getElementById(\"offer-from\");
  const to = document.getElementById(\"offer-to\");

  function toggleFields() {

    if (offer.value == \"1\") {

      percentage.disabled = false;
      from.disabled = false;
      to.disabled = false;

    } else {

      percentage.disabled = true;
      from.disabled = true;
      to.disabled = true;

      percentage.value = \"\";
      from.value = \"\";
      to.value = \"\";

    }

  }

  toggleFields(); // run on page load
  offer.addEventListener(\"change\", toggleFields);

});

</script>
";
        // line 422
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
        return "admin/view/template/catalog/category_form.twig";
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
        return array (  853 => 422,  786 => 358,  762 => 337,  754 => 332,  745 => 326,  734 => 318,  727 => 313,  719 => 310,  704 => 308,  700 => 307,  695 => 305,  691 => 304,  688 => 303,  684 => 302,  677 => 298,  673 => 297,  662 => 288,  654 => 285,  644 => 284,  627 => 282,  621 => 281,  618 => 280,  614 => 279,  609 => 277,  606 => 276,  602 => 275,  595 => 271,  591 => 270,  583 => 265,  579 => 263,  577 => 262,  575 => 261,  573 => 260,  571 => 259,  569 => 258,  567 => 257,  565 => 256,  563 => 255,  555 => 251,  550 => 249,  547 => 248,  545 => 247,  543 => 246,  541 => 245,  539 => 244,  537 => 243,  535 => 242,  533 => 241,  531 => 240,  529 => 239,  527 => 238,  525 => 237,  523 => 236,  518 => 232,  499 => 229,  496 => 228,  492 => 227,  486 => 224,  479 => 220,  474 => 217,  462 => 213,  457 => 212,  453 => 211,  445 => 206,  440 => 204,  437 => 203,  435 => 202,  433 => 201,  431 => 200,  429 => 199,  427 => 198,  425 => 197,  423 => 196,  421 => 195,  414 => 189,  389 => 184,  382 => 182,  369 => 178,  362 => 176,  355 => 172,  345 => 171,  338 => 169,  323 => 165,  316 => 163,  305 => 157,  275 => 130,  270 => 128,  251 => 112,  236 => 100,  225 => 92,  210 => 80,  195 => 70,  189 => 69,  175 => 58,  164 => 50,  160 => 49,  139 => 36,  122 => 35,  119 => 34,  117 => 33,  115 => 32,  113 => 31,  111 => 30,  106 => 26,  104 => 25,  102 => 24,  98 => 22,  93 => 20,  88 => 18,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  54 => 6,  50 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\"><button type=\"submit\" form=\"form-category\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
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
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_form }}</div>
      <div class=\"card-body\">
        <form id=\"form-category\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">{{ tab_general }}</a></li>
            {#<li class=\"nav-item\"><a href=\"#tab-data\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_data }}</a></li>#}
            {#<li class=\"nav-item\"><a href=\"#tab-seo\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_seo }}</a></li>#}
            {#<li class=\"nav-item\"><a href=\"#tab-design\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_design }}</a></li>#}
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              {#<ul class=\"nav nav-tabs\">#}
              {#  {% for language in languages %}#}
              {#    <li class=\"nav-item\"><a href=\"#language-{{ language.language_id }}\" data-bs-toggle=\"tab\" class=\"nav-link{% if loop.first %} active{% endif %}\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/> {{ language.name }}</a></li>#}
              {#  {% endfor %}#}
              {#</ul>#}
              <div class=\"tab-content\">
                {% for language in languages %}
                  <div id=\"language-{{ language.language_id }}\" class=\"tab-pane{% if loop.first %} active{% endif %}\">
                   <div class=\"row mb-3 align-items-start\">

  <!-- LEFT SIDE FIELDS -->
 <div class=\"row\">

  <!-- LEFT SIDE FORM -->
  <div class=\"col-sm-8\">

    <!-- ROW 1 -->
    <div class=\"row mb-3\">
      <div class=\"col-sm-6\">
        <input type=\"text\"
               name=\"category_description[{{ language.language_id }}][name]\"
               value=\"{{ category_description[language.language_id] ? category_description[language.language_id].name }}\"
               placeholder=\"Category Name\"
               class=\"form-control\">
                 </div>
            
                  <div class=\"col-sm-6\">
                    <input type=\"text\"
                           name=\"path\"
                           value=\"{{ path }}\"
                           placeholder=\"Parent\"
                           class=\"form-control\">
                  </div>
                </div>
            
                <!-- ROW 2 -->
               <div class=\"row mb-3\">
            
              <div class=\"col-sm-6\">
                <select name=\"offer\" id=\"input-offer\" class=\"form-control\">
                  <option value=\"0\" {% if offer == 0 %}selected{% endif %}>No Offer</option>
                  <option value=\"1\" {% if offer == 1 %}selected{% endif %}>Yes Offer</option>
                </select>
              </div>
            
              <div class=\"col-sm-6\">
                <input type=\"number\"
                       name=\"offer_percentage\"
                       id=\"offer-percentage\"
                       class=\"form-control\"
                       placeholder=\"Offer %\"
                       value=\"{{ offer_percentage }}\">
              </div>
            
            </div>
            
            
            <div class=\"row mb-3\">
            
              <div class=\"col-sm-6\">
                <input type=\"date\"
                       name=\"offer_from\"
                       id=\"offer-from\"
                       value=\"{{ offer_from }}\"
                       class=\"form-control\">
              </div>
            
              <div class=\"col-sm-6\">
                <input type=\"date\"
                       name=\"offer_to\"
                       id=\"offer-to\"
                       value=\"{{ offer_to }}\"
                       class=\"form-control\">
              </div>
            
            </div>
            
                <!-- ROW 4 -->
                <div class=\"row mb-3\">
            
                  <div class=\"col-sm-6\">
                    <input type=\"number\"
                           name=\"gst\"
                           value=\"{{ gst }}\"
                           placeholder=\"GST %\"
                           class=\"form-control\">
                  </div>
            
                </div>
            
              </div>
            
            
              <!-- RIGHT SIDE -->
              <div class=\"border rounded d-inline-block position-relative\" style=\"max-width:300px; margin-left:100px;\">
            
             
            
              <!-- IMAGE -->
              <img src=\"{{ thumb }}\" alt=\"\" id=\"thumb-image\" class=\"img-fluid\"/>
            
              <input type=\"hidden\" name=\"image\" value=\"{{ image }}\" id=\"input-image\"/>
            
              <div class=\"d-grid\">
                <button type=\"button\"
                        data-oc-toggle=\"image\"
                        data-oc-target=\"#input-image\"
                        data-oc-thumb=\"#thumb-image\"
                        class=\"btn btn-primary rounded-0\">
                  Edit
                </button>
            
                <button type=\"button\"
                        data-oc-toggle=\"clear\"
                        data-oc-target=\"#input-image\"
                        data-oc-thumb=\"#thumb-image\"
                        class=\"btn btn-warning rounded-0\">
                  Clear
                </button>
              </div>
             <!-- STATUS TOGGLE -->
              <div style=\"position:absolute; top:10px; right:-70px;\">
                <div class=\"form-check form-switch form-switch-lg\">
                  <input type=\"hidden\" name=\"status\" value=\"0\"/>
                  <input type=\"checkbox\"
                         name=\"status\"
                         value=\"1\"
                         class=\"form-check-input\"
                         {% if status %}checked{% endif %}>
                </div>
              </div>
            </div>

                    <div class=\"row mb-3\" style=\"display:none\">
                      <label for=\"input-description-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_description }}</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"category_description[{{ language.language_id }}][description]\" placeholder=\"{{ entry_description }}\" id=\"input-description-{{ language.language_id }}\" data-oc-toggle=\"ckeditor\" data-lang=\"{{ ckeditor }}\" class=\"form-control\">{{ category_description[language.language_id] ? category_description[language.language_id].description }}</textarea>
                      </div>
                    </div>
                    <div class=\"row mb-3 required\" style=\"display:none\">
                      <label for=\"input-meta-title-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_meta_title }}</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" value=\"SHA\" name=\"category_description[{{ language.language_id }}][meta_title]\" value=\"{{ category_description[language.language_id] ? category_description[language.language_id].meta_title }}\" placeholder=\"{{ entry_meta_title }}\" id=\"input-meta-title-{{ language.language_id }}\" class=\"form-control\"/>
                        <div id=\"error-meta-title-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                    <div class=\"row mb-3\" style=\"display:none\">
                      <label for=\"input-meta-description-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_meta_description }}</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"category_description[{{ language.language_id }}][meta_description]\" rows=\"5\" placeholder=\"{{ entry_meta_description }}\" id=\"input-meta-description-{{ language.language_id }}\" class=\"form-control\">{{ category_description[language.language_id] ? category_description[language.language_id].meta_description }}</textarea>
                      </div>
                    </div>
                    <div class=\"row mb-3\" style=\"display:none\">
                      <label for=\"input-meta-keyword-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_meta_keyword }}</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"category_description[{{ language.language_id }}][meta_keyword]\" rows=\"5\" placeholder=\"{{ entry_meta_keyword }}\" id=\"input-meta-keyword-{{ language.language_id }}\" class=\"form-control\">{{ category_description[language.language_id] ? category_description[language.language_id].meta_keyword }}</textarea>
                      </div>
                    </div>
                  </div>
                {% endfor %}
              </div>
            </div>
          
            <div id=\"tab-data\" class=\"tab-pane\">
              <div class=\"row mb-3\">
              {#  <label for=\"input-parent\" class=\"col-sm-2 col-form-label\">{{ entry_parent }}</label>#}
              {#  <div class=\"col-sm-10\">#}
              {#    <input type=\"text\" name=\"path\" value=\"{{ path }}\" placeholder=\"{{ entry_parent }}\" id=\"input-parent\" data-oc-target=\"autocomplete-parent\" class=\"form-control\" autocomplete=\"off\"/>#}
              {#    <ul id=\"autocomplete-parent\" class=\"dropdown-menu\"></ul>#}
              {#    <input type=\"hidden\" name=\"parent_id\" value=\"{{ parent_id }}\" id=\"input-parent-id\"/>#}
              {#    <div class=\"form-text\">{{ help_parent }}</div>#}
              {#    <div id=\"error-parent\" class=\"invalid-feedback\"></div>#}
              {#  </div>#}
              {#</div>#}
              <div class=\"row mb-3\" style=\"display:none\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_filter }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"{{ entry_filter }}\" id=\"input-filter\" data-oc-target=\"autocomplete-filter\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-filter\" class=\"dropdown-menu\"></ul>
                  <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                    <table id=\"category-filter\" class=\"table m-0\">
                      <tbody>
                        {% for category_filter in category_filters %}
                          <tr id=\"category-filter-{{ category_filter.filter_id }}\">
                            <td>{{ category_filter.name }}<input type=\"hidden\" name=\"category_filter[]\" value=\"{{ category_filter.filter_id }}\"/></td>
                            <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                          </tr>
                        {% endfor %}
                      </tbody>
                    </table>
                  </div>
                  <div class=\"form-text\">{{ help_filter }}</div>
                </div>
              </div>
              <div class=\"row mb-3\" style=\"display:none\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_store }}</label>
                <div class=\"col-sm-10\">
                  <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    {% for store in stores %}
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"category_store[]\" value=\"{{ store.store_id }}\" id=\"input-store-{{ store.store_id }}\" class=\"form-check-input\"{% if store.store_id in category_store %} checked{% endif %}/> <label for=\"input-store-{{ store.store_id }}\" class=\"form-check-label\">{{ store.name }}</label>
                      </div>
                    {% endfor %}
                  </div>
                </div>
              </div>
              {#<div class=\"row mb-3\" >#}
              {#  <label class=\"col-sm-2 col-form-label\">{{ entry_image }}</label>#}
              {#  <div class=\"col-sm-10\">#}
              {#    <div class=\"border rounded d-block\" style=\"max-width: 300px;\">#}
              {#      <img src=\"{{ thumb }}\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/>#}
              {#      <input type=\"hidden\" name=\"image\" value=\"{{ image }}\" id=\"input-image\"/>#}
              {#      <div class=\"d-grid\">#}
              {#        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>#}
              {#        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>#}
              {#      </div>#}
              {#    </div>#}
              {#  </div>#}
              {#</div>#}
              <div class=\"row mb-3\" style=\"display:none\">
                <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">{{ entry_sort_order }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"number\" name=\"sort_order\" value=\"{{ sort_order }}\" placeholder=\"{{ entry_sort_order }}\" id=\"input-sort-order\" class=\"form-control\"/>
                </div>
              </div>
              {#<div class=\"row mb-3\">#}
              {#  <label class=\"col-sm-2 col-form-label\">{{ entry_status }}</label>#}
              {#  <div class=\"col-sm-10\">#}
              {#    <div class=\"form-check form-switch form-switch-lg\">#}
              {#      <input type=\"hidden\" name=\"status\" value=\"0\"/>#}
              {#      <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\" {% if status %} checked{% endif %}/>#}
              {#    </div>#}
              {#  </div>#}
              {#</div>#}
            </div>
            <div id=\"tab-seo\" class=\"tab-pane\" style=\"display:none\">
              <div class=\"alert alert-info\"><i class=\"fa-solid fa-info-circle\"></i> {{ text_keyword }}</div>
              <div class=\"table-responsive\">
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
                              <input type=\"text\" name=\"category_seo_url[{{ store.store_id }}][{{ language.language_id }}]\" value=\"{% if category_seo_url[store.store_id][language.language_id] %}{{ category_seo_url[store.store_id][language.language_id] }}{% endif %}\" placeholder=\"{{ entry_keyword }}\" id=\"input-keyword-{{ store.store_id }}-{{ language.language_id }}\" class=\"form-control\"/>
                            </div>
                            <div id=\"error-keyword-{{ store.store_id }}-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
                          {% endfor %}</td>
                      </tr>
                    {% endfor %}
                  </tbody>
                </table>
              </div>
            </div>
            <div id=\"tab-design\" class=\"tab-pane\" style=\"display:none\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>{{ entry_store }}</th>
                      <th>{{ entry_layout }}</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% for store in stores %}
                      <tr>
                        <td>{{ store.name }}</td>
                        <td><select name=\"category_layout[{{ store.store_id }}]\" class=\"form-select\">
                            <option value=\"\"></option>
                            {% for layout in layouts %}
                              <option value=\"{{ layout.layout_id }}\"{% if category_layout[store.store_id] and category_layout[store.store_id] == layout.layout_id %} selected{% endif %}>{{ layout.name }}</option>
                            {% endfor %}
                          </select></td>
                      </tr>
                    {% endfor %}
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <input type=\"hidden\" name=\"category_id\" value=\"{{ category_id }}\" id=\"input-category-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('textarea[data-oc-toggle=\\'ckeditor\\']').ckeditor({
    language: '{{ ckeditor }}'
});

\$('#input-parent').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/category.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    'category_id': '0',
                    'name': '{{ text_none }}'
                });

                response(\$.map(json, function(item) {
                    return {
                        value: item['category_id'],
                        label: item['name']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-parent').val(decodeHTMLEntities(item['label']));
        \$('#input-parent-id').val(item['value']);
    }
});

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

        \$('#category-filter-' + item['value']).remove();

        html = '<tr id=\"category-filter-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"category_filter[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#category-filter tbody').append(html);
    }
});

\$('#category-filter').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});
document.addEventListener(\"DOMContentLoaded\", function () {

  const offer = document.getElementById(\"input-offer\");
  const percentage = document.getElementById(\"offer-percentage\");
  const from = document.getElementById(\"offer-from\");
  const to = document.getElementById(\"offer-to\");

  function toggleFields() {

    if (offer.value == \"1\") {

      percentage.disabled = false;
      from.disabled = false;
      to.disabled = false;

    } else {

      percentage.disabled = true;
      from.disabled = true;
      to.disabled = true;

      percentage.value = \"\";
      from.value = \"\";
      to.value = \"\";

    }

  }

  toggleFields(); // run on page load
  offer.addEventListener(\"change\", toggleFields);

});

</script>
{{ footer }}
", "admin/view/template/catalog/category_form.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/admin/view/template/catalog/category_form.twig");
    }
}
