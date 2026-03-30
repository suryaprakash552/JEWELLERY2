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

/* extension/purpletree_pos/admin/view/template/events/catalog/product_form.twig */
class __TwigTemplate_252383048722c62224333139f3fae603 extends Template
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
        yield "<!-- pos tab -->
\t\t\t";
        // line 2
        if ((($context["module_purpletree_pos_status"] ?? null) == 1)) {
            // line 3
            yield "\t\t\t<div class=\"tab-pane\" id=\"tab-pos\">
\t\t\t     <div class=\"row mb-3\">
\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-quick-order\">POS Status</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<select name=\"pos\" id=\"input-pos\" class=\"form-select\">
                        <option value=\"1\" ";
            // line 8
            if (( !array_key_exists("pos", $context) || (($context["pos"] ?? null) == 1))) {
                yield "selected=\"selected\"";
            }
            yield ">
                        ";
            // line 9
            yield ($context["text_yes"] ?? null);
            yield "
                    </option>
                    <option value=\"0\" ";
            // line 11
            if ((array_key_exists("pos", $context) && (($context["pos"] ?? null) == 0))) {
                yield "selected=\"selected\"";
            }
            yield ">
                        ";
            // line 12
            yield ($context["text_no"] ?? null);
            yield "
                    </option>
                </select>

\t\t\t\t\t</div>
                </div>
\t\t\t\t<div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-pos_quentity\">POS Quantity</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"pos_quentity\" value=\"";
            // line 21
            yield ($context["pos_quentity"] ?? null);
            yield "\" placeholder=\"POS Quantity\" id=\"input-pos_quentity\" class=\"form-control\"/>
                </div>
              </div>
            </div>\t\t\t
\t\t\t";
        }
        // line 26
        yield "            <!-- End pos -->
\t\t\t<div id=\"tab-report\" class=\"tab-pane\">";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/purpletree_pos/admin/view/template/events/catalog/product_form.twig";
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
        return array (  91 => 26,  83 => 21,  71 => 12,  65 => 11,  60 => 9,  54 => 8,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- pos tab -->
\t\t\t{% if module_purpletree_pos_status == 1 %}
\t\t\t<div class=\"tab-pane\" id=\"tab-pos\">
\t\t\t     <div class=\"row mb-3\">
\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-quick-order\">POS Status</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<select name=\"pos\" id=\"input-pos\" class=\"form-select\">
                        <option value=\"1\" {% if pos is not defined or pos == 1 %}selected=\"selected\"{% endif %}>
                        {{ text_yes }}
                    </option>
                    <option value=\"0\" {% if pos is defined and pos == 0 %}selected=\"selected\"{% endif %}>
                        {{ text_no }}
                    </option>
                </select>

\t\t\t\t\t</div>
                </div>
\t\t\t\t<div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-pos_quentity\">POS Quantity</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"pos_quentity\" value=\"{{ pos_quentity }}\" placeholder=\"POS Quantity\" id=\"input-pos_quentity\" class=\"form-control\"/>
                </div>
              </div>
            </div>\t\t\t
\t\t\t{% endif %}
            <!-- End pos -->
\t\t\t<div id=\"tab-report\" class=\"tab-pane\">", "extension/purpletree_pos/admin/view/template/events/catalog/product_form.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY/extension/purpletree_pos/admin/view/template/events/catalog/product_form.twig");
    }
}
