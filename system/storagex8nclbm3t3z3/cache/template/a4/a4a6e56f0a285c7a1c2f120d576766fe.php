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

/* admin/view/template/user/user_form.twig */
class __TwigTemplate_f4d516d484af7197ecad36e46614f0b1 extends Template
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
/* Autocomplete dropdown box */
.ui-autocomplete {
    background: #1f2a33 !important;   /* Dark background */
    border: 1px solid #3c4a57 !important;
    max-height: 200px;
    overflow-y: auto;
    overflow-x: hidden;
    border-radius: 8px !important;    /* Rounded edges */
    padding: 5px 0;
    z-index: 99999 !important;        /* Make sure it shows above all */
}

/* Each item in dropdown */
.ui-autocomplete li {
    padding: 8px 12px;
    color: #ffffff !important;
    font-size: 14px;
    border-bottom: 1px solid #2e3a45;
}

/* Remove last border */
.ui-autocomplete li:last-child {
    border-bottom: none;
}

/* Highlight item */
.ui-state-active {
    background: #007bff !important;   /* Blue highlight */
    color: #ffffff !important;
    border-radius: 6px;
}
</style>

<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-user\" data-bs-toggle=\"tooltip\" title=\"";
        // line 40
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 41
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 42
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 45
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 45);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 45);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 52
        yield ($context["text_form"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-user\" action=\"";
        // line 54
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\" style=\"width:225px;\">";
        // line 56
        yield ($context["tab_general"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-personalinfo\" data-bs-toggle=\"tab\" class=\"nav-link\"style=\"width:225px;\">";
        // line 57
        yield ($context["tab_personalinfo"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-logininfo\" data-bs-toggle=\"tab\" class=\"nav-link\"style=\"width:225px;\">";
        // line 58
        yield ($context["tab_logininfo"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-workinfo\" data-bs-toggle=\"tab\" class=\"nav-link\"style=\"width:225px;\">";
        // line 59
        yield ($context["tab_workinfo"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-hierarchyinfo\" data-bs-toggle=\"tab\" class=\"nav-link\"style=\"width:225px;\">";
        // line 60
        yield ($context["tab_hierarchyinfo"] ?? null);
        yield "</a></li>
             <li class=\"nav-item\"><a href=\"#tab-identityinfo\" data-bs-toggle=\"tab\" class=\"nav-link\"style=\"width:225px;\">";
        // line 61
        yield ($context["tab_identityinfo"] ?? null);
        yield "</a></li>
             <li class=\"nav-item\"><a href=\"#tab-payroll\" data-bs-toggle=\"tab\" class=\"nav-link\"style=\"width:225px;\">";
        // line 62
        yield ($context["tab_payroll"] ?? null);
        yield "</a></li>
             ";
        // line 65
        yield "          </ul><br> 
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <fieldset>
                <div class=\"mb-12 row\" style=\"position:absolute; top: 125px; right:25px;\">
                    <div class=\"col-sm-12 d-flex align-items-center\">
                    
                     
                      <div class=\"form-check form-switch form-switch-lg\">
                       <input type=\"hidden\" name=\"status\" value=\"0\"/>
                       <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 75
        if (($context["status"] ?? null)) {
            yield " checked";
        }
        yield "/>
                     </div>
                     <label class=\"col-sm-7 col-form-label\">";
        // line 77
        yield ($context["entry_status"] ?? null);
        yield "</label>
                   </div>
                   </div><br>
                <div class=\"row mb-12\">
                <div class=\"col-sm-4 required\">
                  <label for=\"input-firstname\" class=\" col-form-label\">";
        // line 82
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
                    <input type=\"text\" name=\"firstname\" value=\"";
        // line 83
        yield ($context["firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-firstname\" class=\"form-control\"/>
                    <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
                  </div>
                <div class=\"col-sm-4 required\">
                  <label for=\"input-lastname\" class=\" col-form-label\">";
        // line 87
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
                    <input type=\"text\" name=\"lastname\" value=\"";
        // line 88
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-lastname\" class=\"form-control\"/>
                    <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
                  </div>
                <div class=\"col-sm-4 required\">
                  <label for=\"input-email\" class=\" col-form-label\">";
        // line 92
        yield ($context["entry_email"] ?? null);
        yield "</label>
                    <input type=\"text\" name=\"email\" value=\"";
        // line 93
        yield ($context["email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\"/>
                    <div id=\"error-email\" class=\"invalid-feedback\"></div>
                  </div>
                
                
                ";
        // line 99
        yield "               
                <br><br>
                 ";
        // line 103
        yield "
                <div class=\"col-md-5 d-flex justify-content-end text-center ms-auto mt-3 me-4\">
                    ";
        // line 106
        yield "                    <div class=\"border rounded p-2 mx-auto\" style=\"max-width: 300px;\">
                      <img src=\"";
        // line 107
        yield ($context["logoimage"] ?? null);
        yield "\" alt=\"\" title=\"\" id=\"thumb-logo\" data-oc-placeholder=\"";
        yield ($context["logoplaceholder"] ?? null);
        yield "\" class=\"img-fluid\" style=\"display: block;\"/>
                      <input type=\"hidden\" name=\"logoimage\" value=\"";
        // line 108
        yield ($context["logoimageinput"] ?? null);
        yield "\" id=\"input-logo-image\"/>
                      <div class=\"d-grid gap-2 mt-2\">
                        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-logo-image\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 110
        yield ($context["button_edit"] ?? null);
        yield "</button>
                        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-logo-image\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 111
        yield ($context["button_clear"] ?? null);
        yield "</button>
                      </div>
                    </div>
                  
                  </div>
                  
                ";
        // line 119
        yield "              </fieldset>
              <input type=\"hidden\" name=\"user_id\" value=\"";
        // line 120
        yield ($context["user_id"] ?? null);
        yield "\" id=\"input-user-id\"/>
            </div>
            <div id=\"tab-personalinfo\" class=\"tab-pane\">
             <fieldset>
                <div id=\"personalinfo\">";
        // line 124
        yield ($context["personalinfo"] ?? null);
        yield "</div> 
              <div class=\"row mb-12\">
                <div class=\"col-sm-4 required\">
                  <label for=\"input-employeeid\" class=\" col-form-label\">";
        // line 127
        yield ($context["entry_employeeid"] ?? null);
        yield "</label>
                    <input type=\"text\" name=\"employeeid\" value=\"";
        // line 128
        yield ($context["employeeid"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_employeeid"] ?? null);
        yield "\" id=\"input-employeeid\" class=\"form-control\"/>
                    <div id=\"error-employeeid\" class=\"invalid-feedback\"></div>
                  </div>
                 <div class=\"col-sm-4 required\">
                  <label for=\"input-mobilenumber\" class=\" col-form-label\">";
        // line 132
        yield ($context["entry_number"] ?? null);
        yield "</label>
                    <input type=\"number\" name=\"mobilenumber\" value=\"";
        // line 133
        yield ($context["mobilenumber"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mobilenumber"] ?? null);
        yield "\" id=\"input-mobilenumber\" class=\"form-control\"/>
                    <div id=\"error-mobilenumber\" class=\"invalid-feedback\"></div>
                  </div>
                 <div class=\"col-sm-4 required\">
                  <label for=\"input-date\" class=\" col-form-label\">";
        // line 137
        yield ($context["entry_date"] ?? null);
        yield "</label>
                  <input type=\"date\" name=\"date_of_birth\" value=\"";
        // line 138
        yield ($context["date_of_birth"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date"] ?? null);
        yield "\" id=\"input-date\" class=\"form-control\"/>
                  <div id=\"error-date\" class=\"invalid-feedback\"></div>
                 </div>
                <div class=\"col-sm-4 required\">
                  <label for=\"input-age\" class=\" col-form-label\">";
        // line 142
        yield ($context["entry_age"] ?? null);
        yield "</label>
                   <input type=\"text\" name=\"age\" id=\"input-age\" value=\"";
        // line 143
        yield ($context["age"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_age"] ?? null);
        yield "\" class=\"form-control\" readonly />
                  <div id=\"error-age\" class=\"invalid-feedback\"></div>
                 </div>
                <div class=\"col-sm-4 required\">
                  <label for=\"input-gender\" class=\" col-form-label\">";
        // line 147
        yield ($context["entry_gender"] ?? null);
        yield "</label>
                    <select name=\"user_gender\" id=\"input-gender\" class=\"form-select\">
                         ";
        // line 149
        if ((($context["user_gender"] ?? null) == "1")) {
            // line 150
            yield "                       <option value=\"1\" selected=\"selected\">";
            yield ($context["text_male"] ?? null);
            yield "</option>
                      <option value=\"0\">";
            // line 151
            yield ($context["text_female"] ?? null);
            yield "</option> 
                    ";
        } else {
            // line 153
            yield "                      <option value=\"1\">";
            yield ($context["text_male"] ?? null);
            yield "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 154
            yield ($context["text_female"] ?? null);
            yield "</option>
                    ";
        }
        // line 156
        yield "                    </select>
                    </div>
                <div class=\"col-sm-4 required\">
                  <label for=\"input-marital_status\" class=\"col-form-label\">";
        // line 159
        yield ($context["entry_marital_status"] ?? null);
        yield "</label>
                    <select name=\"user_marital_status\" id=\"input-marital_status\" class=\"form-select\">
                    ";
        // line 161
        if ((($context["user_marital_status"] ?? null) == "1")) {
            // line 162
            yield "                       <option value=\"1\" selected=\"selected\">";
            yield ($context["text_married"] ?? null);
            yield "</option>
                      <option value=\"0\">";
            // line 163
            yield ($context["text_unmarried"] ?? null);
            yield "</option> 
                    ";
        } else {
            // line 165
            yield "                      <option value=\"1\">";
            yield ($context["text_married"] ?? null);
            yield "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 166
            yield ($context["text_unmarried"] ?? null);
            yield "</option>
                    ";
        }
        // line 168
        yield "                  </select>
                    </div>
                <div class=\"col-sm-6 required\">
                  <label for=\"input-presentadd\" class=\" col-form-label\">";
        // line 171
        yield ($context["entry_presentadd"] ?? null);
        yield "</label>
                  
                    <textarea class=\"form-control\" id=\"input-presentadd\" name=\"presentadd\" rows=\"2\" placeholder=\"";
        // line 173
        yield ($context["entry_presentadd"] ?? null);
        yield "\">";
        yield ($context["presentadd"] ?? null);
        yield "</textarea>
                    <div id=\"error-presentadd\" class=\"invalid-feedback\"></div>
                  
                </div>
                <div class=\"col-sm-6 required\">
  
                  <label for=\"input-permanentadd\" class=\" col-form-label\">";
        // line 179
        yield ($context["entry_permanentadd"] ?? null);
        yield "</label>
                  
                    <textarea class=\"form-control\" id=\"input-permanentadd\" name=\"permanentadd\" rows=\"2\" placeholder=\"";
        // line 181
        yield ($context["entry_permanentadd"] ?? null);
        yield "\">";
        yield ($context["permanentadd"] ?? null);
        yield "</textarea>
                    <div id=\"error-permanentadd\" class=\"invalid-feedback\"></div>
                  </div>
                  
             </div>
            </fieldset>
            </div>
            <div id=\"tab-logininfo\" class=\"tab-pane\">
              <fieldset>
                <div id=\"logininfo\">";
        // line 190
        yield ($context["logininfo"] ?? null);
        yield "</div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-username\" class=\"col-sm-2 col-form-label\">";
        // line 192
        yield ($context["entry_username"] ?? null);
        yield "</label>
                  <div class=\"col-sm-7\">
                    <input type=\"text\" name=\"username\" value=\"";
        // line 194
        yield ($context["username"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_username"] ?? null);
        yield "\" id=\"input-username\" class=\"form-control\"/>
                    <div id=\"error-username\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-password\" class=\"col-sm-2 col-form-label\">";
        // line 199
        yield ($context["entry_password"] ?? null);
        yield "</label>
                  <div class=\"col-sm-7\">
                    <input type=\"password\" name=\"password\" value=\"";
        // line 201
        yield ($context["password"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_password"] ?? null);
        yield "\" id=\"input-password\" class=\"form-control\" autocomplete=\"new-password\"/>
                    <div id=\"error-password\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-confirm\" class=\"col-sm-2 col-form-label\">";
        // line 206
        yield ($context["entry_confirm"] ?? null);
        yield "</label>
                  <div class=\"col-sm-7\">
                    <input type=\"password\" name=\"confirm\" value=\"";
        // line 208
        yield ($context["confirm"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_confirm"] ?? null);
        yield "\" id=\"input-confirm\" class=\"form-control\"/>
                    <div id=\"error-confirm\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-workinfo\" class=\"tab-pane\">
              <fieldset>
                <div id=\"workinfo\">";
        // line 216
        yield ($context["workinfoinfo"] ?? null);
        yield "</div>
                <div class=\"row mb-12\">
                <div class=\"col-sm-4 required\">
                  <label for=\"input-user-group\" class=\" col-form-label\">";
        // line 219
        yield ($context["entry_user_group"] ?? null);
        yield "</label>
                    <select name=\"user_group_id\" id=\"input-user-group\" class=\"form-select\">
                        <option value=\"\"></option>
                      ";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["user_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user_group"]) {
            // line 223
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["user_group"], "user_group_id", [], "any", false, false, false, 223);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user_group"], "user_group_id", [], "any", false, false, false, 223) == ($context["user_group_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["user_group"], "name", [], "any", false, false, false, 223);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        yield "                    </select>
                  </div>
                 <div class=\"col-sm-4 required\">
                  <label for=\"input-zone\" class=\" col-form-label\">";
        // line 228
        yield ($context["entry_zone"] ?? null);
        yield "</label>
                    <select name=\"zone_id\" id=\"input-zone\" class=\"form-select\">
                        <option value=\"\"></option>
                      ";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["zone"]) {
            // line 232
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "zone_id", [], "any", false, false, false, 232);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "zone_id", [], "any", false, false, false, 232) == ($context["zone_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "name", [], "any", false, false, false, 232);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['zone'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 234
        yield "                    </select>
                  </div>
                  <div class=\"col-sm-4 required\">
                  <label for=\"input-designation\" class=\" col-form-label\">";
        // line 237
        yield ($context["entry_designation"] ?? null);
        yield "</label>
                    <select name=\"designation_id\" id=\"input-designation\" class=\"form-select\">
                        <option value=\"\"></option>
                      ";
        // line 240
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["designations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["designation"]) {
            // line 241
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["designation"], "designation_id", [], "any", false, false, false, 241);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["designation"], "designation_id", [], "any", false, false, false, 241) == ($context["designation_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["designation"], "name", [], "any", false, false, false, 241);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['designation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        yield "                    </select>
                  </div>
                  <div class=\"col-sm-4 required\">
                  <label for=\"input-employmenttype\" class=\" col-form-label\">";
        // line 246
        yield ($context["entry_employmenttype"] ?? null);
        yield "</label>
                    <select name=\"employmenttype_id\" id=\"input-employmenttype\" class=\"form-select\">
                        <option value=\"\"></option>
                      ";
        // line 249
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["employmenttypes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["employmenttype"]) {
            // line 250
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["employmenttype"], "employmenttype_id", [], "any", false, false, false, 250);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["employmenttype"], "employmenttype_id", [], "any", false, false, false, 250) == ($context["employmenttype_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["employmenttype"], "name", [], "any", false, false, false, 250);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['employmenttype'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 252
        yield "                    </select>
                  </div>
                  <div class=\"col-sm-4 required\">
                  <label for=\"input-employmentstatus\" class=\" col-form-label\">";
        // line 255
        yield ($context["entry_employmentstatus"] ?? null);
        yield "</label>
                    <select name=\"employmentstatus_id\" id=\"input-employmentstatus\" class=\"form-select\">
                        <option value=\"\"></option>
                      ";
        // line 258
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["listemploymentstatus"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["employmentstatus"]) {
            // line 259
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["employmentstatus"], "employmentstatus_id", [], "any", false, false, false, 259);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["employmentstatus"], "employmentstatus_id", [], "any", false, false, false, 259) == ($context["employmentstatus_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["employmentstatus"], "name", [], "any", false, false, false, 259);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['employmentstatus'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 261
        yield "                    </select>
                  </div>
                  <div class=\"col-sm-4 required\">
                  <label for=\"input-sourceofhire\" class=\" col-form-label\">";
        // line 264
        yield ($context["entry_sourceofhire"] ?? null);
        yield "</label>
                    <select name=\"sourceofhire_id\" id=\"input-sourceofhire\" class=\"form-select\">
                        <option value=\"\"></option>
                      ";
        // line 267
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["listsourceofhire"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sourceofhire"]) {
            // line 268
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["sourceofhire"], "sourceofhire_id", [], "any", false, false, false, 268);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["sourceofhire"], "sourceofhire_id", [], "any", false, false, false, 268) == ($context["sourceofhire_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["sourceofhire"], "name", [], "any", false, false, false, 268);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sourceofhire'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 270
        yield "                    </select>
                  </div>
                  <div class=\"row\">
  
                      <div class=\"col-sm-4 required\">
                        <label for=\"input-date_of_joining\" class=\"col-form-label\">Date of Joining</label>
                        <input type=\"date\" name=\"date_of_joining\" id=\"input-date_of_joining\" value=\"";
        // line 276
        yield ($context["date_of_joining"] ?? null);
        yield "\"class=\"form-control\" onchange=\"calculateExperience()\" />
                        <div id=\"error-date\" class=\"invalid-feedback\"></div>
                      </div>
                      <div class=\"col-sm-4 required\">
                        <label for=\"input-experience\" class=\"col-form-label\">Past Experience</label>
                        <input type=\"number\" min=\"0\" name=\"experience\" id=\"input-experience\" value=\"";
        // line 281
        yield ($context["experience"] ?? null);
        yield "\"class=\"form-control\" oninput=\"calculateExperience()\" />
                        <div id=\"error-experience\" class=\"invalid-feedback\"></div>
                      </div>
                      <div class=\"col-sm-4 required\">
                        <label for=\"input-total_experience\" class=\"col-form-label\">Total Experience</label>
                        <input type=\"text\" name=\"total_experience\" id=\"input-total_experience\"value=\"";
        // line 286
        yield ($context["total_experience_text"] ?? null);
        yield "\" class=\"form-control\" readonly />
                        <div id=\"error-total_experience\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                 </div>
              </fieldset>
            </div>
            <div id=\"tab-hierarchyinfo\" class=\"tab-pane\">
              <fieldset>
                <div id=\"hierarchyinfo\">";
        // line 295
        yield ($context["hierarchyinfo"] ?? null);
        yield "</div>
                <div class=\"row mb-10 \" style=\"display:flex; gap:70px;margin-left:300px\">
                 <div class=\"col-sm-5 required\">
                  <label for=\"input-reportingempid\" class=\"col-form-label\">Report By :</label>
                 <input type=\"text\" id=\"reportingemp_name\" class=\"form-control\" value=\"";
        // line 299
        yield ($context["reportingemp_name"] ?? null);
        yield "\">
                 <input type=\"hidden\" name=\"reportingempid\" id=\"reportingempid\" value=\"";
        // line 300
        yield ($context["reportingempid"] ?? null);
        yield "\">
                 </div>
                 <div class=\"col-sm-5 required\">
                  <label for=\"input-referredby\" class=\"col-form-label\">Referred By :</label>
                 <input type=\"text\" id=\"referredby_name\" class=\"form-control\" value=\"";
        // line 304
        yield ($context["referredby_name"] ?? null);
        yield "\">
                 <input type=\"hidden\" name=\"referredby_id\" id=\"referredby_id\" value=\"";
        // line 305
        yield ($context["referredby_id"] ?? null);
        yield "\">
                 </div>
                 </div>
              </fieldset>
            </div>
            <div id=\"tab-identityinfo\" class=\"tab-pane\">
              <fieldset>
                <div id=\"identityinfo\">";
        // line 312
        yield ($context["identityinfo"] ?? null);
        yield "</div>
                <div class=\"row mb-10 \" style=\"display:flex; gap:70px;margin-left:300px\">
                <div class=\"col-sm-3 required\">
                  <label for=\"input-image\" class=\"col-sm-3 col-form-label\">";
        // line 315
        yield ($context["entry_pan"] ?? null);
        yield "</label>
                  
                  <input type=\"text\" name=\"pan\" value=\"";
        // line 317
        yield ($context["pan"] ?? null);
        yield "\" placeholder=\"Enter PAN Number\" id=\"input-pan\" class=\"form-control\" oninput=\"this.value = this.value.toUpperCase().replace(/[^A-Z0-9]/g, '');\"/><br><br>
                 <div class=\"col-sm-15\">
                    <div class=\"border rounded p-2 mx-auto\" style=\"max-width: 300px; \">
                      <img src=\"";
        // line 320
        yield ($context["panimage"] ?? null);
        yield "\" alt=\"\" title=\"\" id=\"thumb-pan\" data-oc-placeholder=\"";
        yield ($context["panplaceholder"] ?? null);
        yield "\" class=\"img-fluid\" style=\"display: block;\"/>
                      <input type=\"hidden\" name=\"panimage\" value=\"";
        // line 321
        yield ($context["panimageinput"] ?? null);
        yield "\" id=\"input-pan-image\"/>
                      <div class=\"d-grid gap-2 mt-2\">
                        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-pan-image\" data-oc-thumb=\"#thumb-pan\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 323
        yield ($context["button_edit"] ?? null);
        yield "</button>
                        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-pan-image\" data-oc-thumb=\"#thumb-pan\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 324
        yield ($context["button_clear"] ?? null);
        yield "</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"col-sm-3 required\">
                  <label for=\"input-image\" class=\"col-sm-4 col-form-label\">";
        // line 330
        yield ($context["entry_aadhar"] ?? null);
        yield "</label>
                  
                  <input type=\"number\" name=\"aadhar\" value=\"";
        // line 332
        yield ($context["aadhar"] ?? null);
        yield "\" placeholder=\"Enter Aadhar number\" id=\"input-aadhar\" class=\"form-control\"/><br><br>
                  <div class=\"col-sm-15\">
                    <div class=\"border rounded p-2 mx-auto\" style=\"max-width: 300px;\">
                      <img src=\"";
        // line 335
        yield ($context["aadharimage"] ?? null);
        yield "\" alt=\"\" title=\"\" id=\"thumb-aadhar\" data-oc-placeholder=\"";
        yield ($context["aadharplaceholder"] ?? null);
        yield "\" class=\"img-fluid\"/>
                      <input type=\"hidden\" name=\"aadharimage\" value=\"";
        // line 336
        yield ($context["aadharimageinput"] ?? null);
        yield "\" id=\"input-aadhar-image\"/>
                      <div class=\"d-grid gap-2 mt-2\">
                        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-aadhar-image\" data-oc-thumb=\"#thumb-aadhar\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 338
        yield ($context["button_edit"] ?? null);
        yield "</button>
                        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-aadhar-image\" data-oc-thumb=\"#thumb-aadhar\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 339
        yield ($context["button_clear"] ?? null);
        yield "</button>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              </fieldset>
            </div>
";
        // line 368
        yield "                  
";
        // line 420
        yield "<!--changes-->
<div id=\"tab-payroll\" class=\"tab-pane\">
  <fieldset>
    <table class=\"table table-bordered\">
      <thead>
          <div class=\"row mb-3\">
      <div class=\"col-sm-4\">
        <label for=\"input-annualctc\" class=\"col-form-label\">";
        // line 427
        yield ($context["entry_annualctc"] ?? null);
        yield "</label>
        <input type=\"number\" name=\"annualctc\" onchange=\"calculateCTC()\" value=\"";
        // line 428
        yield ($context["annualctc"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_annualctc"] ?? null);
        yield "\" id=\"input-annualctc\" class=\"form-control\"/>
        <div id=\"error-annualctc\" class=\"invalid-feedback\"></div>
        <span id=\"input-cal-monthlyctc\"></span>
      </div>
    </div>
        <tr>
          <th>SALARY COMPONENTS</th>
          <th>CALCULATION TYPE</th>
          <th>MONTHLY AMOUNT</th>
          <th>ANNUAL AMOUNT</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td colspan=\"4\"><strong>Earnings</strong></td>
        </tr>
        <tr>
          <td>Basic</td>
          <td>
            <input type=\"number\" name=\"basic\" onchange=\"calculateCTC()\" value=\"";
        // line 447
        yield ((($context["basic"] ?? null)) ? (($context["basic"] ?? null)) : (50));
        yield "\" placeholder=\"";
        yield ($context["entry_basic"] ?? null);
        yield "\" id=\"input-basic\" class=\"form-control\" style=\"width:80px; display:inline;\"/>
            <span>% of CTC</span>
            <div id=\"error-basic\" class=\"invalid-feedback\"></div>
          </td>
          <td><span id=\"input-cal-basic\">";
        // line 451
        yield ($context["calbasic"] ?? null);
        yield "</span></td>
          <td><span id=\"input-cal-ybasic\">";
        // line 452
        yield ($context["ybasic"] ?? null);
        yield "</span></td>
        </tr>
        <tr>
          <td>House Rent Allowance</td>
          <td>
            <input type=\"number\" name=\"hra\" onchange=\"calculateCTC()\" value=\"";
        // line 457
        yield ((($context["hra"] ?? null)) ? (($context["hra"] ?? null)) : (50));
        yield "\" placeholder=\"";
        yield ($context["entry_hra"] ?? null);
        yield "\" id=\"input-hra\" class=\"form-control\" style=\"width:80px; display:inline;\"/>
            <span>% of Basic</span>
            <div id=\"error-hra\" class=\"invalid-feedback\"></div>
          </td>
          <td><span id=\"input-cal-hra\">";
        // line 461
        yield ($context["calhra"] ?? null);
        yield "</span></td>
          <td><span id=\"input-cal-yhra\">";
        // line 462
        yield ($context["yhra"] ?? null);
        yield "</span></td>
        </tr>
       <tr>
          <td>Conveyance Allowance</td>
          <td>Fixed amount</td>
          <td>
            <input type=\"number\" name=\"conveyance\" onchange=\"calculateConveyance()\" value=\"";
        // line 468
        yield ($context["conveyance"] ?? null);
        yield "\"
                   id=\"input-conveyance\"
                   placeholder=\"Enter Monthly Conveyance\" class=\"form-control\"
                   style=\"width:100%; display:inline;\"/>
          </td>
          <td>
              <span id=\"input-cal-yconveyance\">";
        // line 474
        yield ($context["yconveyance"] ?? null);
        yield "</span>
          </td>
        </tr>
        <tr>
          <td>Variable Pay</td>
          <td>
            <input type=\"number\" name=\"variablepay\" onchange=\"calculateCTC()\" value=\"";
        // line 480
        yield ((($context["variablepay"] ?? null)) ? (($context["variablepay"] ?? null)) : (10));
        yield "\" placeholder=\"";
        yield ($context["entry_variablepay"] ?? null);
        yield "\" id=\"input-variablepay\" class=\"form-control\" style=\"width:80px; display:inline;\"/>
            <span>% of CTC</span>
            <div id=\"error-variablepay\" class=\"invalid-feedback\"></div>
          </td>
          <td><span id=\"input-cal-variablepay\">";
        // line 484
        yield ($context["calvariablepay"] ?? null);
        yield "</span></td>
          <td><span id=\"input-cal-yvariablepay\">";
        // line 485
        yield ($context["yvariablepay"] ?? null);
        yield "</span></td>
        </tr>
        <tr>
          <td>Fixed Allowance<br><small>Monthly CTC - Sum of all other components</small></td>
          <td>Fixed amount</td>
          <td><span id=\"input-cal-fixed\">";
        // line 490
        yield ($context["fixed"] ?? null);
        yield "</span></td>
          <td><span id=\"input-cal-yfixed\">";
        // line 491
        yield ($context["yfixed"] ?? null);
        yield "</span></td>
        </tr>
        <tr>
          <td colspan=\"4\"><strong>Deductions</strong></td>
        </tr>
        <tr>
          <td>Provident Fund (PF)<br><small>Employee contribution</small></td>
          <td>
            <input type=\"number\" name=\"pf\" onchange=\"calculateCTC()\" value=\"";
        // line 499
        yield ((($context["pf"] ?? null)) ? (($context["pf"] ?? null)) : (12));
        yield "\" placeholder=\"";
        yield ($context["entry_pf"] ?? null);
        yield "\" id=\"input-pf\" class=\"form-control\" style=\"width:80px; display:inline;\"/>
            <span>% of Basic</span>
            <div id=\"error-pf\" class=\"invalid-feedback\"></div>
          </td>
          <td><span id=\"input-cal-pf\">";
        // line 503
        yield ($context["calpf"] ?? null);
        yield "</span></td>
          <td><span id=\"input-cal-ypf\">";
        // line 504
        yield ($context["ypf"] ?? null);
        yield "</span></td>
        </tr>
        <tr>
          <td colspan=\"4\"><strong>Summary</strong></td>
        </tr>
        
        <tr style=\"background-color: #e8f5e8;\">
          <td><strong>Cost to Company</strong></td>
          <td></td>
          <td><strong>₹<span id=\"input-cal-total\">";
        // line 513
        yield ($context["total"] ?? null);
        yield "</span></strong></td>
          <td><strong>₹<span id=\"input-cal-ytotal\">";
        // line 514
        yield ($context["ytotal"] ?? null);
        yield "</span></strong></td>
        </tr>
      </tbody>
    </table>
  </fieldset>
</div>
</form>
    </div>
    </div>
  </div>
</div>
<!--changes-->

<script type=\"text/javascript\"><!--
\$('#authorize').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#authorize').load(this.href);
});

function calculateConveyance()
{
  value = \$('#input-annualctc').val();
  basic = \$('#input-basic').val();
  hra = \$('#input-hra').val();
  variablepay = \$('#input-variablepay').val();
  conveyance = \$('#input-conveyance').val();
  pf = \$('#input-pf').val();
  
  calmonthly = (value/12);
  calbasic = (calmonthly * basic)/100;
  calhra = (calbasic * hra)/100;
  calvariablepay = (calmonthly * variablepay)/100;
  calpf = (calbasic * pf)/100;
  calfixed = calmonthly-(calbasic+calhra+calvariablepay+calpf);
  caltotal = calbasic+calhra+calvariablepay+calpf+calfixed;
  calconveyancefixed = calfixed - conveyance;
  document.getElementById('input-cal-monthlyctc').textContent = calmonthly;
  document.getElementById('input-cal-basic').textContent = calbasic;
  document.getElementById('input-cal-hra').textContent = calhra;
  document.getElementById('input-cal-variablepay').textContent = calvariablepay;
  document.getElementById('input-cal-pf').textContent = calpf;
   
  document.getElementById('input-cal-fixed').textContent = calconveyancefixed;
  document.getElementById('input-cal-total').textContent = caltotal;
   
  document.getElementById('input-cal-ybasic').textContent = calbasic * 12;
  document.getElementById('input-cal-yhra').textContent = calhra * 12;
  document.getElementById('input-cal-yvariablepay').textContent = calvariablepay * 12;
  document.getElementById('input-cal-ypf').textContent = calpf * 12;
  document.getElementById('input-cal-yconveyance').textContent = conveyance * 12;
  document.getElementById('input-cal-yfixed').textContent = calconveyancefixed * 12;
  document.getElementById('input-cal-ytotal').textContent = caltotal * 12;
};

function calculateCTC()
{
  document.getElementById('input-cal-yconveyance').textContent =0;
  document.getElementById('input-conveyance').value =0;
  value = \$('#input-annualctc').val();
  basic = \$('#input-basic').val();
  hra = \$('#input-hra').val();
  variablepay = \$('#input-variablepay').val();
  pf = \$('#input-pf').val();
  calmonthly = (value/12);
  calbasic = (calmonthly * basic)/100;
  calhra = (calbasic * hra)/100;
  calvariablepay = (calmonthly * variablepay)/100;
  calpf = (calbasic * pf)/100;
  calfixed = calmonthly-(calbasic+calhra+calvariablepay+calpf);
  caltotal = calbasic+calhra+calvariablepay+calpf+calfixed;
  document.getElementById('input-cal-monthlyctc').textContent = calmonthly;
  document.getElementById('input-cal-basic').textContent = calbasic;
  document.getElementById('input-cal-hra').textContent = calhra;
  document.getElementById('input-cal-variablepay').textContent = calvariablepay;
  document.getElementById('input-cal-pf').textContent = calpf;
  document.getElementById('input-cal-fixed').textContent = calfixed;
  document.getElementById('input-cal-total').textContent = caltotal;
  
  document.getElementById('input-cal-ybasic').textContent = calbasic * 12;
  document.getElementById('input-cal-yhra').textContent = calhra * 12;
  document.getElementById('input-cal-yvariablepay').textContent = calvariablepay * 12;
  document.getElementById('input-cal-ypf').textContent = calpf * 12;
  document.getElementById('input-cal-yfixed').textContent = calfixed * 12;
  document.getElementById('input-cal-ytotal').textContent = caltotal * 12;
};

\$('#authorize').on('click', 'a', function(e) {
    e.preventDefault();

    var element = this;

    if (confirm('";
        // line 606
        yield ($context["text_confirm"] ?? null);
        yield "')) {
        \$.ajax({
            url: \$(element).attr('href'),
            dataType: 'json',
            beforeSend: function() {
                \$(element).prop('disabled', true);
            },
            complete: function() {
                \$(element).prop('disabled', false);
            },
            success: function(json) {
                \$('.alert-dismissible').remove();

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#authorize').load('index.php?route=user/user.authorize&user_token=";
        // line 630
        yield ($context["user_token"] ?? null);
        yield "&user_id=";
        yield ($context["user_id"] ?? null);
        yield "');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }
});
\$('#logininfo').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#logininfo').load(this.href);
});

\$('#login').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#login').load(this.href);
});
\$('#user-group').on('click', function() {
    url = '';
     var filter_user_group_id = \$('#input-user_group_id').val();

    if (filter_user_group_id !== '') {
        url += '&filter_user_group_id=' + encodeURIComponent(filter_user_group_id);
    }
});
document.getElementById('input-date').addEventListener('change', function () {
    const dob = new Date(this.value);
    const today = new Date();

    if (isNaN(dob.getTime())) {
      document.getElementById('input-age').value = '';
      return;
    }

    let age = today.getFullYear() - dob.getFullYear();
    const m = today.getMonth() - dob.getMonth();

    if (m < 0 || (m === 0 && today.getDate() < dob.getDate())) {
      age--;
    }

    document.getElementById('input-age').value = age >= 0 ? age + ' years' : '';
  });
  
  function calculateExperience() {
  let date_of_joining = document.getElementById(\"input-date_of_joining\").value;
  let pastExp = parseFloat(document.getElementById(\"input-experience\").value) || 0;

  let totalExp = pastExp;

  if (date_of_joining) {
    let dojDate = new Date(date_of_joining);
    let today = new Date();

    // Calculate year difference
    let years = today.getFullYear() - dojDate.getFullYear();
    let months = today.getMonth() - dojDate.getMonth();

    if (months < 0 || (months === 0 && today.getDate() < dojDate.getDate())) {
      years--;
    }

    if (years < 0) years = 0; // safeguard

    totalExp += years;
  }

  document.getElementById(\"input-total_experience\").value = totalExp + \" Years\";
}
//--></script>
<script>
let users = ";
        // line 704
        yield json_encode(($context["all_users"] ?? null));
        yield ";

function setAuto(idText, idHidden) {
    \$(\"#\" + idText).autocomplete({
        source: users.map(u => ({
            label: u.name,
            value: u.name,
            id: u.user_id
        })),
        select: function(event, ui) {
            \$(\"#\" + idHidden).val(ui.item.id);
        }
    });
}

\$(document).ready(function () {
    setAuto('referredby_name', 'referredby_id');
    setAuto('reportingemp_name', 'reportingempid');
});
</script>
<!-- jQuery UI CSS -->
<link rel=\"stylesheet\" href=\"https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css\">

<!-- jQuery UI JS -->
<script src=\"https://code.jquery.com/ui/1.13.2/jquery-ui.min.js\"></script>

";
        // line 730
        yield ($context["footer"] ?? null);
        yield " ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/user/user_form.twig";
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
        return array (  1205 => 730,  1176 => 704,  1097 => 630,  1070 => 606,  975 => 514,  971 => 513,  959 => 504,  955 => 503,  946 => 499,  935 => 491,  931 => 490,  923 => 485,  919 => 484,  910 => 480,  901 => 474,  892 => 468,  883 => 462,  879 => 461,  870 => 457,  862 => 452,  858 => 451,  849 => 447,  825 => 428,  821 => 427,  812 => 420,  809 => 368,  798 => 339,  794 => 338,  789 => 336,  783 => 335,  777 => 332,  772 => 330,  763 => 324,  759 => 323,  754 => 321,  748 => 320,  742 => 317,  737 => 315,  731 => 312,  721 => 305,  717 => 304,  710 => 300,  706 => 299,  699 => 295,  687 => 286,  679 => 281,  671 => 276,  663 => 270,  648 => 268,  644 => 267,  638 => 264,  633 => 261,  618 => 259,  614 => 258,  608 => 255,  603 => 252,  588 => 250,  584 => 249,  578 => 246,  573 => 243,  558 => 241,  554 => 240,  548 => 237,  543 => 234,  528 => 232,  524 => 231,  518 => 228,  513 => 225,  498 => 223,  494 => 222,  488 => 219,  482 => 216,  469 => 208,  464 => 206,  454 => 201,  449 => 199,  439 => 194,  434 => 192,  429 => 190,  415 => 181,  410 => 179,  399 => 173,  394 => 171,  389 => 168,  384 => 166,  379 => 165,  374 => 163,  369 => 162,  367 => 161,  362 => 159,  357 => 156,  352 => 154,  347 => 153,  342 => 151,  337 => 150,  335 => 149,  330 => 147,  321 => 143,  317 => 142,  308 => 138,  304 => 137,  295 => 133,  291 => 132,  282 => 128,  278 => 127,  272 => 124,  265 => 120,  262 => 119,  253 => 111,  249 => 110,  244 => 108,  238 => 107,  235 => 106,  231 => 103,  227 => 99,  217 => 93,  213 => 92,  204 => 88,  200 => 87,  191 => 83,  187 => 82,  179 => 77,  172 => 75,  160 => 65,  156 => 62,  152 => 61,  148 => 60,  144 => 59,  140 => 58,  136 => 57,  132 => 56,  127 => 54,  122 => 52,  115 => 47,  104 => 45,  100 => 44,  95 => 42,  89 => 41,  85 => 40,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<style>
/* Autocomplete dropdown box */
.ui-autocomplete {
    background: #1f2a33 !important;   /* Dark background */
    border: 1px solid #3c4a57 !important;
    max-height: 200px;
    overflow-y: auto;
    overflow-x: hidden;
    border-radius: 8px !important;    /* Rounded edges */
    padding: 5px 0;
    z-index: 99999 !important;        /* Make sure it shows above all */
}

/* Each item in dropdown */
.ui-autocomplete li {
    padding: 8px 12px;
    color: #ffffff !important;
    font-size: 14px;
    border-bottom: 1px solid #2e3a45;
}

/* Remove last border */
.ui-autocomplete li:last-child {
    border-bottom: none;
}

/* Highlight item */
.ui-state-active {
    background: #007bff !important;   /* Blue highlight */
    color: #ffffff !important;
    border-radius: 6px;
}
</style>

<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-user\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
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
        <form id=\"form-user\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\" style=\"width:225px;\">{{ tab_general }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-personalinfo\" data-bs-toggle=\"tab\" class=\"nav-link\"style=\"width:225px;\">{{ tab_personalinfo }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-logininfo\" data-bs-toggle=\"tab\" class=\"nav-link\"style=\"width:225px;\">{{ tab_logininfo }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-workinfo\" data-bs-toggle=\"tab\" class=\"nav-link\"style=\"width:225px;\">{{ tab_workinfo }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-hierarchyinfo\" data-bs-toggle=\"tab\" class=\"nav-link\"style=\"width:225px;\">{{ tab_hierarchyinfo }}</a></li>
             <li class=\"nav-item\"><a href=\"#tab-identityinfo\" data-bs-toggle=\"tab\" class=\"nav-link\"style=\"width:225px;\">{{ tab_identityinfo }}</a></li>
             <li class=\"nav-item\"><a href=\"#tab-payroll\" data-bs-toggle=\"tab\" class=\"nav-link\"style=\"width:225px;\">{{ tab_payroll }}</a></li>
             {#<li class=\"nav-item\"><a href=\"#tab-authorize\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_authorize }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-login\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_login }}</a></li>#}
          </ul><br> 
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <fieldset>
                <div class=\"mb-12 row\" style=\"position:absolute; top: 125px; right:25px;\">
                    <div class=\"col-sm-12 d-flex align-items-center\">
                    
                     
                      <div class=\"form-check form-switch form-switch-lg\">
                       <input type=\"hidden\" name=\"status\" value=\"0\"/>
                       <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"{% if status %} checked{% endif %}/>
                     </div>
                     <label class=\"col-sm-7 col-form-label\">{{ entry_status }}</label>
                   </div>
                   </div><br>
                <div class=\"row mb-12\">
                <div class=\"col-sm-4 required\">
                  <label for=\"input-firstname\" class=\" col-form-label\">{{ entry_firstname }}</label>
                    <input type=\"text\" name=\"firstname\" value=\"{{ firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\" class=\"form-control\"/>
                    <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
                  </div>
                <div class=\"col-sm-4 required\">
                  <label for=\"input-lastname\" class=\" col-form-label\">{{ entry_lastname }}</label>
                    <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-lastname\" class=\"form-control\"/>
                    <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
                  </div>
                <div class=\"col-sm-4 required\">
                  <label for=\"input-email\" class=\" col-form-label\">{{ entry_email }}</label>
                    <input type=\"text\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\"/>
                    <div id=\"error-email\" class=\"invalid-feedback\"></div>
                  </div>
                
                
                {#This will be calculated Automatically#}
               
                <br><br>
                 {#<div class=\"row mb-12\"style=\"margin-left:500px;\"> 
                 <div class=\"col-md-12\">#}

                <div class=\"col-md-5 d-flex justify-content-end text-center ms-auto mt-3 me-4\">
                    {#<label for=\"input-image\" class=\"form-label text-end\" ><b>{{ entry_image }}</b></label>#}
                    <div class=\"border rounded p-2 mx-auto\" style=\"max-width: 300px;\">
                      <img src=\"{{ logoimage }}\" alt=\"\" title=\"\" id=\"thumb-logo\" data-oc-placeholder=\"{{ logoplaceholder }}\" class=\"img-fluid\" style=\"display: block;\"/>
                      <input type=\"hidden\" name=\"logoimage\" value=\"{{ logoimageinput }}\" id=\"input-logo-image\"/>
                      <div class=\"d-grid gap-2 mt-2\">
                        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-logo-image\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-logo-image\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                      </div>
                    </div>
                  
                  </div>
                  
                {#</div>
                </div>#}
              </fieldset>
              <input type=\"hidden\" name=\"user_id\" value=\"{{ user_id }}\" id=\"input-user-id\"/>
            </div>
            <div id=\"tab-personalinfo\" class=\"tab-pane\">
             <fieldset>
                <div id=\"personalinfo\">{{ personalinfo }}</div> 
              <div class=\"row mb-12\">
                <div class=\"col-sm-4 required\">
                  <label for=\"input-employeeid\" class=\" col-form-label\">{{ entry_employeeid }}</label>
                    <input type=\"text\" name=\"employeeid\" value=\"{{ employeeid }}\" placeholder=\"{{ entry_employeeid }}\" id=\"input-employeeid\" class=\"form-control\"/>
                    <div id=\"error-employeeid\" class=\"invalid-feedback\"></div>
                  </div>
                 <div class=\"col-sm-4 required\">
                  <label for=\"input-mobilenumber\" class=\" col-form-label\">{{ entry_number }}</label>
                    <input type=\"number\" name=\"mobilenumber\" value=\"{{ mobilenumber }}\" placeholder=\"{{ entry_mobilenumber }}\" id=\"input-mobilenumber\" class=\"form-control\"/>
                    <div id=\"error-mobilenumber\" class=\"invalid-feedback\"></div>
                  </div>
                 <div class=\"col-sm-4 required\">
                  <label for=\"input-date\" class=\" col-form-label\">{{ entry_date }}</label>
                  <input type=\"date\" name=\"date_of_birth\" value=\"{{ date_of_birth }}\" placeholder=\"{{ entry_date }}\" id=\"input-date\" class=\"form-control\"/>
                  <div id=\"error-date\" class=\"invalid-feedback\"></div>
                 </div>
                <div class=\"col-sm-4 required\">
                  <label for=\"input-age\" class=\" col-form-label\">{{ entry_age }}</label>
                   <input type=\"text\" name=\"age\" id=\"input-age\" value=\"{{ age }}\" placeholder=\"{{ entry_age }}\" class=\"form-control\" readonly />
                  <div id=\"error-age\" class=\"invalid-feedback\"></div>
                 </div>
                <div class=\"col-sm-4 required\">
                  <label for=\"input-gender\" class=\" col-form-label\">{{ entry_gender }}</label>
                    <select name=\"user_gender\" id=\"input-gender\" class=\"form-select\">
                         {% if user_gender == '1' %}
                       <option value=\"1\" selected=\"selected\">{{ text_male }}</option>
                      <option value=\"0\">{{ text_female }}</option> 
                    {% else %}
                      <option value=\"1\">{{ text_male }}</option>
                      <option value=\"0\" selected=\"selected\">{{ text_female }}</option>
                    {% endif %}
                    </select>
                    </div>
                <div class=\"col-sm-4 required\">
                  <label for=\"input-marital_status\" class=\"col-form-label\">{{ entry_marital_status }}</label>
                    <select name=\"user_marital_status\" id=\"input-marital_status\" class=\"form-select\">
                    {% if user_marital_status == '1' %}
                       <option value=\"1\" selected=\"selected\">{{ text_married }}</option>
                      <option value=\"0\">{{ text_unmarried }}</option> 
                    {% else %}
                      <option value=\"1\">{{ text_married }}</option>
                      <option value=\"0\" selected=\"selected\">{{ text_unmarried }}</option>
                    {% endif %}
                  </select>
                    </div>
                <div class=\"col-sm-6 required\">
                  <label for=\"input-presentadd\" class=\" col-form-label\">{{ entry_presentadd }}</label>
                  
                    <textarea class=\"form-control\" id=\"input-presentadd\" name=\"presentadd\" rows=\"2\" placeholder=\"{{ entry_presentadd }}\">{{ presentadd }}</textarea>
                    <div id=\"error-presentadd\" class=\"invalid-feedback\"></div>
                  
                </div>
                <div class=\"col-sm-6 required\">
  
                  <label for=\"input-permanentadd\" class=\" col-form-label\">{{ entry_permanentadd }}</label>
                  
                    <textarea class=\"form-control\" id=\"input-permanentadd\" name=\"permanentadd\" rows=\"2\" placeholder=\"{{ entry_permanentadd }}\">{{ permanentadd }}</textarea>
                    <div id=\"error-permanentadd\" class=\"invalid-feedback\"></div>
                  </div>
                  
             </div>
            </fieldset>
            </div>
            <div id=\"tab-logininfo\" class=\"tab-pane\">
              <fieldset>
                <div id=\"logininfo\">{{ logininfo }}</div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-username\" class=\"col-sm-2 col-form-label\">{{ entry_username }}</label>
                  <div class=\"col-sm-7\">
                    <input type=\"text\" name=\"username\" value=\"{{ username }}\" placeholder=\"{{ entry_username }}\" id=\"input-username\" class=\"form-control\"/>
                    <div id=\"error-username\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-password\" class=\"col-sm-2 col-form-label\">{{ entry_password }}</label>
                  <div class=\"col-sm-7\">
                    <input type=\"password\" name=\"password\" value=\"{{ password }}\" placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control\" autocomplete=\"new-password\"/>
                    <div id=\"error-password\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-confirm\" class=\"col-sm-2 col-form-label\">{{ entry_confirm }}</label>
                  <div class=\"col-sm-7\">
                    <input type=\"password\" name=\"confirm\" value=\"{{ confirm }}\" placeholder=\"{{ entry_confirm }}\" id=\"input-confirm\" class=\"form-control\"/>
                    <div id=\"error-confirm\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-workinfo\" class=\"tab-pane\">
              <fieldset>
                <div id=\"workinfo\">{{ workinfoinfo }}</div>
                <div class=\"row mb-12\">
                <div class=\"col-sm-4 required\">
                  <label for=\"input-user-group\" class=\" col-form-label\">{{ entry_user_group }}</label>
                    <select name=\"user_group_id\" id=\"input-user-group\" class=\"form-select\">
                        <option value=\"\"></option>
                      {% for user_group in user_groups %}
                        <option value=\"{{ user_group.user_group_id }}\"{% if user_group.user_group_id == user_group_id %} selected{% endif %}>{{ user_group.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                 <div class=\"col-sm-4 required\">
                  <label for=\"input-zone\" class=\" col-form-label\">{{ entry_zone }}</label>
                    <select name=\"zone_id\" id=\"input-zone\" class=\"form-select\">
                        <option value=\"\"></option>
                      {% for zone in zones %}
                        <option value=\"{{ zone.zone_id }}\"{% if zone.zone_id == zone_id %} selected{% endif %}>{{ zone.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                  <div class=\"col-sm-4 required\">
                  <label for=\"input-designation\" class=\" col-form-label\">{{ entry_designation }}</label>
                    <select name=\"designation_id\" id=\"input-designation\" class=\"form-select\">
                        <option value=\"\"></option>
                      {% for designation in designations %}
                        <option value=\"{{ designation.designation_id }}\"{% if designation.designation_id == designation_id %} selected{% endif %}>{{ designation.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                  <div class=\"col-sm-4 required\">
                  <label for=\"input-employmenttype\" class=\" col-form-label\">{{ entry_employmenttype }}</label>
                    <select name=\"employmenttype_id\" id=\"input-employmenttype\" class=\"form-select\">
                        <option value=\"\"></option>
                      {% for employmenttype in employmenttypes %}
                        <option value=\"{{ employmenttype.employmenttype_id }}\"{% if employmenttype.employmenttype_id == employmenttype_id %} selected{% endif %}>{{ employmenttype.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                  <div class=\"col-sm-4 required\">
                  <label for=\"input-employmentstatus\" class=\" col-form-label\">{{ entry_employmentstatus }}</label>
                    <select name=\"employmentstatus_id\" id=\"input-employmentstatus\" class=\"form-select\">
                        <option value=\"\"></option>
                      {% for employmentstatus in listemploymentstatus %}
                        <option value=\"{{ employmentstatus.employmentstatus_id }}\"{% if employmentstatus.employmentstatus_id == employmentstatus_id %} selected{% endif %}>{{ employmentstatus.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                  <div class=\"col-sm-4 required\">
                  <label for=\"input-sourceofhire\" class=\" col-form-label\">{{ entry_sourceofhire }}</label>
                    <select name=\"sourceofhire_id\" id=\"input-sourceofhire\" class=\"form-select\">
                        <option value=\"\"></option>
                      {% for sourceofhire in listsourceofhire %}
                        <option value=\"{{ sourceofhire.sourceofhire_id }}\"{% if sourceofhire.sourceofhire_id == sourceofhire_id %} selected{% endif %}>{{ sourceofhire.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                  <div class=\"row\">
  
                      <div class=\"col-sm-4 required\">
                        <label for=\"input-date_of_joining\" class=\"col-form-label\">Date of Joining</label>
                        <input type=\"date\" name=\"date_of_joining\" id=\"input-date_of_joining\" value=\"{{ date_of_joining }}\"class=\"form-control\" onchange=\"calculateExperience()\" />
                        <div id=\"error-date\" class=\"invalid-feedback\"></div>
                      </div>
                      <div class=\"col-sm-4 required\">
                        <label for=\"input-experience\" class=\"col-form-label\">Past Experience</label>
                        <input type=\"number\" min=\"0\" name=\"experience\" id=\"input-experience\" value=\"{{ experience }}\"class=\"form-control\" oninput=\"calculateExperience()\" />
                        <div id=\"error-experience\" class=\"invalid-feedback\"></div>
                      </div>
                      <div class=\"col-sm-4 required\">
                        <label for=\"input-total_experience\" class=\"col-form-label\">Total Experience</label>
                        <input type=\"text\" name=\"total_experience\" id=\"input-total_experience\"value=\"{{ total_experience_text }}\" class=\"form-control\" readonly />
                        <div id=\"error-total_experience\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                 </div>
              </fieldset>
            </div>
            <div id=\"tab-hierarchyinfo\" class=\"tab-pane\">
              <fieldset>
                <div id=\"hierarchyinfo\">{{ hierarchyinfo }}</div>
                <div class=\"row mb-10 \" style=\"display:flex; gap:70px;margin-left:300px\">
                 <div class=\"col-sm-5 required\">
                  <label for=\"input-reportingempid\" class=\"col-form-label\">Report By :</label>
                 <input type=\"text\" id=\"reportingemp_name\" class=\"form-control\" value=\"{{ reportingemp_name }}\">
                 <input type=\"hidden\" name=\"reportingempid\" id=\"reportingempid\" value=\"{{ reportingempid }}\">
                 </div>
                 <div class=\"col-sm-5 required\">
                  <label for=\"input-referredby\" class=\"col-form-label\">Referred By :</label>
                 <input type=\"text\" id=\"referredby_name\" class=\"form-control\" value=\"{{ referredby_name }}\">
                 <input type=\"hidden\" name=\"referredby_id\" id=\"referredby_id\" value=\"{{ referredby_id }}\">
                 </div>
                 </div>
              </fieldset>
            </div>
            <div id=\"tab-identityinfo\" class=\"tab-pane\">
              <fieldset>
                <div id=\"identityinfo\">{{ identityinfo }}</div>
                <div class=\"row mb-10 \" style=\"display:flex; gap:70px;margin-left:300px\">
                <div class=\"col-sm-3 required\">
                  <label for=\"input-image\" class=\"col-sm-3 col-form-label\">{{ entry_pan }}</label>
                  
                  <input type=\"text\" name=\"pan\" value=\"{{ pan }}\" placeholder=\"Enter PAN Number\" id=\"input-pan\" class=\"form-control\" oninput=\"this.value = this.value.toUpperCase().replace(/[^A-Z0-9]/g, '');\"/><br><br>
                 <div class=\"col-sm-15\">
                    <div class=\"border rounded p-2 mx-auto\" style=\"max-width: 300px; \">
                      <img src=\"{{ panimage }}\" alt=\"\" title=\"\" id=\"thumb-pan\" data-oc-placeholder=\"{{ panplaceholder }}\" class=\"img-fluid\" style=\"display: block;\"/>
                      <input type=\"hidden\" name=\"panimage\" value=\"{{ panimageinput }}\" id=\"input-pan-image\"/>
                      <div class=\"d-grid gap-2 mt-2\">
                        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-pan-image\" data-oc-thumb=\"#thumb-pan\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-pan-image\" data-oc-thumb=\"#thumb-pan\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"col-sm-3 required\">
                  <label for=\"input-image\" class=\"col-sm-4 col-form-label\">{{ entry_aadhar }}</label>
                  
                  <input type=\"number\" name=\"aadhar\" value=\"{{ aadhar }}\" placeholder=\"Enter Aadhar number\" id=\"input-aadhar\" class=\"form-control\"/><br><br>
                  <div class=\"col-sm-15\">
                    <div class=\"border rounded p-2 mx-auto\" style=\"max-width: 300px;\">
                      <img src=\"{{ aadharimage }}\" alt=\"\" title=\"\" id=\"thumb-aadhar\" data-oc-placeholder=\"{{ aadharplaceholder }}\" class=\"img-fluid\"/>
                      <input type=\"hidden\" name=\"aadharimage\" value=\"{{ aadharimageinput }}\" id=\"input-aadhar-image\"/>
                      <div class=\"d-grid gap-2 mt-2\">
                        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-aadhar-image\" data-oc-thumb=\"#thumb-aadhar\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-aadhar-image\" data-oc-thumb=\"#thumb-aadhar\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              </fieldset>
            </div>
{#            <div id=\"tab-payroll\" class=\"tab-pane\">#}
{#              <fieldset>#}
{#                <div class=\"row mb-12\">#}
{#                <div class=\"col-sm-4 required\">#}
{#                  <label for=\"input-employeeid\" class=\" col-form-label\">{{ entry_annualctc }}</label>#}
{#                    <input type=\"number\" name=\"annualctc\" onchange=\"calculateCTC()\" value=\"{{ annualctc }}\" placeholder=\"{{ entry_annualctc }}\" id=\"input-annualctc\" class=\"form-control\"/>#}
{#                    <div id=\"error-annualctc\" class=\"invalid-feedback\"></div>#}
{#                    <span id=\"input-cal-monthlyctc\"></span>#}
{#                  </div>#}
{#                <div class=\"col-sm-4 required\">#}
{#                  <label for=\"input-basic\" class=\" col-form-label\">{{ entry_basic }}</label>#}
{#                    <input type=\"number\" name=\"basic\" onchange=\"calculateCTC()\" value=\"{{ basic?basic:50 }}\" placeholder=\"{{ entry_basic }}\" id=\"input-basic\" class=\"form-control\"/>#}
{#                    <div id=\"error-basic\" class=\"invalid-feedback\"></div>#}
{#                    <span id=\"input-cal-basic\"></span>#}
{#                  </div>#}
{#                <div class=\"col-sm-4 required\">#}
{#                  <label for=\"input-hra\" class=\" col-form-label\">{{ entry_hra }}</label>#}
{#                    <input type=\"number\" name=\"hra\" onchange=\"calculateCTC()\" value=\"{{ hra?hra:50 }}\" placeholder=\"{{ entry_hra }}\" id=\"input-hra\" class=\"form-control\"/>#}
{#                    <div id=\"error-hra\" class=\"invalid-feedback\"></div>#}
{#                    <span id=\"input-cal-hra\"></span>#}
{#                  </div>#}
                  
{#                <div class=\"col-sm-4 required\">#}
{#                  <label for=\"input-variablepay\" class=\" col-form-label\">{{ entry_variablepay }}</label>#}
{#                    <input type=\"number\" name=\"variablepay\" onchange=\"calculateCTC()\" value=\"{{ variablepay?variablepay:10 }}\" placeholder=\"{{ entry_variablepay }}\" id=\"input-variablepay\" class=\"form-control\"/>#}
{#                    <div id=\"error-variablepay\" class=\"invalid-feedback\"></div>#}
{#                    <span id=\"input-cal-variablepay\"></span>#}
{#                  </div>#}
{#                <div class=\"col-sm-4 required\">#}
{#                  <label for=\"input-conveyance\" class=\" col-form-label\">{{ entry_conveyance }}</label>#}
{#                    <input type=\"number\" name=\"conveyance\" onchange=\"calculateConveyance()\" value=\"{{ conveyance }}\" placeholder=\"{{ entry_conveyance }}\" id=\"input-conveyance\" class=\"form-control\"/>#}
{#                    <div id=\"error-conveyance\" class=\"invalid-feedback\"></div>#}
{#                    <span id=\"input-cal-conveyance\"></span>#}
{#                  </div>#}
{#                <div class=\"col-sm-4 required\">#}
{#                  <label for=\"input-pf\" class=\" col-form-label\">{{ entry_pf }}</label>#}
{#                  <input type=\"number\" name=\"pf\" onchange=\"calculateCTC()\" value=\"{{ pf?pf:10 }}\" placeholder=\"{{ entry_pf }}\" id=\"input-pf\" class=\"form-control\"/>#}
{#                  <div id=\"error-pf\" class=\"invalid-feedback\"></div>#}
{#                  <span id=\"input-cal-pf\"></span>#}
{#                </div>#}
{#                  </div>#}
{#                  <span id=\"input-cal-conveyance\"></span>#}
{#                  <span id=\"input-cal-fixed\"></span>#}
{#                  <span id=\"input-cal-total\"></span>#}
{#                  </br>#}
{#                  <span id=\"input-cal-ymonthlyctc\"></span>#}
{#                  <span id=\"input-cal-ybasic\"></span>#}
{#                  <span id=\"input-cal-yhra\"></span>#}
{#                  <span id=\"input-cal-yvariablepay\"></span>#}
{#                  <span id=\"input-cal-ypf\"></span>#}
{#                  <span id=\"input-cal-yconveyance\"></span>#}
{#                  <span id=\"input-cal-yfixed\"></span>#}
{#                  <span id=\"input-cal-ytotal\"></span>#}
{#              </fieldset>#}
{#            </div>#}
{#            <div id=\"tab-authorize\" class=\"tab-pane\">#}
{#              <fieldset>#}
{#                <legend>{{ text_authorize }}</legend>#}
{#                <div id=\"authorize\">{{ authorize }}</div>#}
{#              </fieldset>#}
{#            </div>#}
{#            <div id=\"tab-login\" class=\"tab-pane\">#}
{#              <fieldset>#}
{#                <legend>{{ text_login }}</legend>#}
{#                <div id=\"login\">{{ login }}</div>#}
{#              </fieldset>#}
{#            </div>#}
{#          </div>#}
{#        </form>#}
{#      </div>#}
{#    </div>#}
{#  </div>#}
{#</div>#}
<!--changes-->
<div id=\"tab-payroll\" class=\"tab-pane\">
  <fieldset>
    <table class=\"table table-bordered\">
      <thead>
          <div class=\"row mb-3\">
      <div class=\"col-sm-4\">
        <label for=\"input-annualctc\" class=\"col-form-label\">{{ entry_annualctc }}</label>
        <input type=\"number\" name=\"annualctc\" onchange=\"calculateCTC()\" value=\"{{ annualctc }}\" placeholder=\"{{ entry_annualctc }}\" id=\"input-annualctc\" class=\"form-control\"/>
        <div id=\"error-annualctc\" class=\"invalid-feedback\"></div>
        <span id=\"input-cal-monthlyctc\"></span>
      </div>
    </div>
        <tr>
          <th>SALARY COMPONENTS</th>
          <th>CALCULATION TYPE</th>
          <th>MONTHLY AMOUNT</th>
          <th>ANNUAL AMOUNT</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td colspan=\"4\"><strong>Earnings</strong></td>
        </tr>
        <tr>
          <td>Basic</td>
          <td>
            <input type=\"number\" name=\"basic\" onchange=\"calculateCTC()\" value=\"{{ basic?basic:50 }}\" placeholder=\"{{ entry_basic }}\" id=\"input-basic\" class=\"form-control\" style=\"width:80px; display:inline;\"/>
            <span>% of CTC</span>
            <div id=\"error-basic\" class=\"invalid-feedback\"></div>
          </td>
          <td><span id=\"input-cal-basic\">{{calbasic}}</span></td>
          <td><span id=\"input-cal-ybasic\">{{ybasic}}</span></td>
        </tr>
        <tr>
          <td>House Rent Allowance</td>
          <td>
            <input type=\"number\" name=\"hra\" onchange=\"calculateCTC()\" value=\"{{ hra?hra:50 }}\" placeholder=\"{{ entry_hra }}\" id=\"input-hra\" class=\"form-control\" style=\"width:80px; display:inline;\"/>
            <span>% of Basic</span>
            <div id=\"error-hra\" class=\"invalid-feedback\"></div>
          </td>
          <td><span id=\"input-cal-hra\">{{calhra}}</span></td>
          <td><span id=\"input-cal-yhra\">{{yhra}}</span></td>
        </tr>
       <tr>
          <td>Conveyance Allowance</td>
          <td>Fixed amount</td>
          <td>
            <input type=\"number\" name=\"conveyance\" onchange=\"calculateConveyance()\" value=\"{{ conveyance }}\"
                   id=\"input-conveyance\"
                   placeholder=\"Enter Monthly Conveyance\" class=\"form-control\"
                   style=\"width:100%; display:inline;\"/>
          </td>
          <td>
              <span id=\"input-cal-yconveyance\">{{yconveyance}}</span>
          </td>
        </tr>
        <tr>
          <td>Variable Pay</td>
          <td>
            <input type=\"number\" name=\"variablepay\" onchange=\"calculateCTC()\" value=\"{{ variablepay?variablepay:10 }}\" placeholder=\"{{ entry_variablepay }}\" id=\"input-variablepay\" class=\"form-control\" style=\"width:80px; display:inline;\"/>
            <span>% of CTC</span>
            <div id=\"error-variablepay\" class=\"invalid-feedback\"></div>
          </td>
          <td><span id=\"input-cal-variablepay\">{{calvariablepay}}</span></td>
          <td><span id=\"input-cal-yvariablepay\">{{yvariablepay}}</span></td>
        </tr>
        <tr>
          <td>Fixed Allowance<br><small>Monthly CTC - Sum of all other components</small></td>
          <td>Fixed amount</td>
          <td><span id=\"input-cal-fixed\">{{fixed}}</span></td>
          <td><span id=\"input-cal-yfixed\">{{yfixed}}</span></td>
        </tr>
        <tr>
          <td colspan=\"4\"><strong>Deductions</strong></td>
        </tr>
        <tr>
          <td>Provident Fund (PF)<br><small>Employee contribution</small></td>
          <td>
            <input type=\"number\" name=\"pf\" onchange=\"calculateCTC()\" value=\"{{ pf?pf:12 }}\" placeholder=\"{{ entry_pf }}\" id=\"input-pf\" class=\"form-control\" style=\"width:80px; display:inline;\"/>
            <span>% of Basic</span>
            <div id=\"error-pf\" class=\"invalid-feedback\"></div>
          </td>
          <td><span id=\"input-cal-pf\">{{calpf}}</span></td>
          <td><span id=\"input-cal-ypf\">{{ypf}}</span></td>
        </tr>
        <tr>
          <td colspan=\"4\"><strong>Summary</strong></td>
        </tr>
        
        <tr style=\"background-color: #e8f5e8;\">
          <td><strong>Cost to Company</strong></td>
          <td></td>
          <td><strong>₹<span id=\"input-cal-total\">{{total}}</span></strong></td>
          <td><strong>₹<span id=\"input-cal-ytotal\">{{ytotal}}</span></strong></td>
        </tr>
      </tbody>
    </table>
  </fieldset>
</div>
</form>
    </div>
    </div>
  </div>
</div>
<!--changes-->

<script type=\"text/javascript\"><!--
\$('#authorize').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#authorize').load(this.href);
});

function calculateConveyance()
{
  value = \$('#input-annualctc').val();
  basic = \$('#input-basic').val();
  hra = \$('#input-hra').val();
  variablepay = \$('#input-variablepay').val();
  conveyance = \$('#input-conveyance').val();
  pf = \$('#input-pf').val();
  
  calmonthly = (value/12);
  calbasic = (calmonthly * basic)/100;
  calhra = (calbasic * hra)/100;
  calvariablepay = (calmonthly * variablepay)/100;
  calpf = (calbasic * pf)/100;
  calfixed = calmonthly-(calbasic+calhra+calvariablepay+calpf);
  caltotal = calbasic+calhra+calvariablepay+calpf+calfixed;
  calconveyancefixed = calfixed - conveyance;
  document.getElementById('input-cal-monthlyctc').textContent = calmonthly;
  document.getElementById('input-cal-basic').textContent = calbasic;
  document.getElementById('input-cal-hra').textContent = calhra;
  document.getElementById('input-cal-variablepay').textContent = calvariablepay;
  document.getElementById('input-cal-pf').textContent = calpf;
   
  document.getElementById('input-cal-fixed').textContent = calconveyancefixed;
  document.getElementById('input-cal-total').textContent = caltotal;
   
  document.getElementById('input-cal-ybasic').textContent = calbasic * 12;
  document.getElementById('input-cal-yhra').textContent = calhra * 12;
  document.getElementById('input-cal-yvariablepay').textContent = calvariablepay * 12;
  document.getElementById('input-cal-ypf').textContent = calpf * 12;
  document.getElementById('input-cal-yconveyance').textContent = conveyance * 12;
  document.getElementById('input-cal-yfixed').textContent = calconveyancefixed * 12;
  document.getElementById('input-cal-ytotal').textContent = caltotal * 12;
};

function calculateCTC()
{
  document.getElementById('input-cal-yconveyance').textContent =0;
  document.getElementById('input-conveyance').value =0;
  value = \$('#input-annualctc').val();
  basic = \$('#input-basic').val();
  hra = \$('#input-hra').val();
  variablepay = \$('#input-variablepay').val();
  pf = \$('#input-pf').val();
  calmonthly = (value/12);
  calbasic = (calmonthly * basic)/100;
  calhra = (calbasic * hra)/100;
  calvariablepay = (calmonthly * variablepay)/100;
  calpf = (calbasic * pf)/100;
  calfixed = calmonthly-(calbasic+calhra+calvariablepay+calpf);
  caltotal = calbasic+calhra+calvariablepay+calpf+calfixed;
  document.getElementById('input-cal-monthlyctc').textContent = calmonthly;
  document.getElementById('input-cal-basic').textContent = calbasic;
  document.getElementById('input-cal-hra').textContent = calhra;
  document.getElementById('input-cal-variablepay').textContent = calvariablepay;
  document.getElementById('input-cal-pf').textContent = calpf;
  document.getElementById('input-cal-fixed').textContent = calfixed;
  document.getElementById('input-cal-total').textContent = caltotal;
  
  document.getElementById('input-cal-ybasic').textContent = calbasic * 12;
  document.getElementById('input-cal-yhra').textContent = calhra * 12;
  document.getElementById('input-cal-yvariablepay').textContent = calvariablepay * 12;
  document.getElementById('input-cal-ypf').textContent = calpf * 12;
  document.getElementById('input-cal-yfixed').textContent = calfixed * 12;
  document.getElementById('input-cal-ytotal').textContent = caltotal * 12;
};

\$('#authorize').on('click', 'a', function(e) {
    e.preventDefault();

    var element = this;

    if (confirm('{{ text_confirm }}')) {
        \$.ajax({
            url: \$(element).attr('href'),
            dataType: 'json',
            beforeSend: function() {
                \$(element).prop('disabled', true);
            },
            complete: function() {
                \$(element).prop('disabled', false);
            },
            success: function(json) {
                \$('.alert-dismissible').remove();

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#authorize').load('index.php?route=user/user.authorize&user_token={{ user_token }}&user_id={{ user_id }}');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }
});
\$('#logininfo').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#logininfo').load(this.href);
});

\$('#login').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#login').load(this.href);
});
\$('#user-group').on('click', function() {
    url = '';
     var filter_user_group_id = \$('#input-user_group_id').val();

    if (filter_user_group_id !== '') {
        url += '&filter_user_group_id=' + encodeURIComponent(filter_user_group_id);
    }
});
document.getElementById('input-date').addEventListener('change', function () {
    const dob = new Date(this.value);
    const today = new Date();

    if (isNaN(dob.getTime())) {
      document.getElementById('input-age').value = '';
      return;
    }

    let age = today.getFullYear() - dob.getFullYear();
    const m = today.getMonth() - dob.getMonth();

    if (m < 0 || (m === 0 && today.getDate() < dob.getDate())) {
      age--;
    }

    document.getElementById('input-age').value = age >= 0 ? age + ' years' : '';
  });
  
  function calculateExperience() {
  let date_of_joining = document.getElementById(\"input-date_of_joining\").value;
  let pastExp = parseFloat(document.getElementById(\"input-experience\").value) || 0;

  let totalExp = pastExp;

  if (date_of_joining) {
    let dojDate = new Date(date_of_joining);
    let today = new Date();

    // Calculate year difference
    let years = today.getFullYear() - dojDate.getFullYear();
    let months = today.getMonth() - dojDate.getMonth();

    if (months < 0 || (months === 0 && today.getDate() < dojDate.getDate())) {
      years--;
    }

    if (years < 0) years = 0; // safeguard

    totalExp += years;
  }

  document.getElementById(\"input-total_experience\").value = totalExp + \" Years\";
}
//--></script>
<script>
let users = {{ all_users|json_encode()|raw }};

function setAuto(idText, idHidden) {
    \$(\"#\" + idText).autocomplete({
        source: users.map(u => ({
            label: u.name,
            value: u.name,
            id: u.user_id
        })),
        select: function(event, ui) {
            \$(\"#\" + idHidden).val(ui.item.id);
        }
    });
}

\$(document).ready(function () {
    setAuto('referredby_name', 'referredby_id');
    setAuto('reportingemp_name', 'reportingempid');
});
</script>
<!-- jQuery UI CSS -->
<link rel=\"stylesheet\" href=\"https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css\">

<!-- jQuery UI JS -->
<script src=\"https://code.jquery.com/ui/1.13.2/jquery-ui.min.js\"></script>

{{ footer }} ", "admin/view/template/user/user_form.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/admin/view/template/user/user_form.twig");
    }
}
