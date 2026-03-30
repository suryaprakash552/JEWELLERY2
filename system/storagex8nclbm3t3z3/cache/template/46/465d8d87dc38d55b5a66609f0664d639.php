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

/* extension/purpletree_pos/admin/view/template/events/customer/customer_form.twig */
class __TwigTemplate_0c29740d2f07f5c57000d8994ffead52 extends Template
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
        yield "\t\t<div class=\"form-text\">";
        yield ($context["help_safe"] ?? null);
        yield "</div>
\t</div>
</div>
<div class=\"form-group row\">
 <label class=\"col-sm-2 col-form-label\">";
        // line 5
        yield ($context["text_pos_user"] ?? null);
        yield "</label>
<div class=\"col-sm-10 p-2\">
<label class=\"radio-inline\">
<input type=\"radio\" name=\"agent_status\" id=\"pts_no\" value=\"0\" ";
        // line 8
        if ((($context["agent_status"] ?? null) == 0)) {
            yield " checked=\"checked\" ";
        }
        yield "id=\"add_document\"/>
";
        // line 9
        yield ($context["text_no"] ?? null);
        yield "</label>
<label class=\"radio-inline\">
<input type=\"radio\" name=\"agent_status\" id=\"pts_pos_agent\" value=\"1\" ";
        // line 11
        if ((($context["agent_status"] ?? null) == 1)) {
            yield " checked=\"checked\" ";
        }
        yield " id=\"remove_document\"/>
";
        // line 12
        yield ($context["text_pos_user_admin"] ?? null);
        yield "</label>
<label class=\"radio-inline\">
<input type=\"radio\" name=\"agent_status\" id=\"pts_pos_admin\" value=\"2\" ";
        // line 14
        if ((($context["agent_status"] ?? null) == 2)) {
            yield " checked=\"checked\" ";
        }
        yield " id=\"remove_document\"/>
";
        // line 15
        yield ($context["text_pos_user_agent"] ?? null);
        yield "</label>
<!-- POS ACTION SECTION -->
<div id=\"pos-action-section\"class=\"col-sm-6 p-2\"style=\"margin-left:-106px;\">
    <label class=\"col-sm-2 col-form-label\">POS Action </label>
<label>
    <input type=\"checkbox\" name=\"wallet\" value=\"1\"
    ";
        // line 21
        if ((($context["wallet"] ?? null) == 1)) {
            yield "checked=\"checked\"";
        }
        yield ">
    Wallet
</label>

<label>
    <input type=\"checkbox\" name=\"return_order\" value=\"1\"
    ";
        // line 27
        if ((($context["return_order"] ?? null) == 1)) {
            yield "checked=\"checked\"";
        }
        yield ">
    Return
</label>

<label>
    <input type=\"checkbox\" name=\"cancel_order\" value=\"1\"
    ";
        // line 33
        if ((($context["cancel_order"] ?? null) == 1)) {
            yield "checked=\"checked\"";
        }
        yield ">
    Cancel
</label>

<label>
    <input type=\"checkbox\" name=\"delete_order\" value=\"1\"
    ";
        // line 39
        if ((($context["delete_order"] ?? null) == 1)) {
            yield "checked=\"checked\"";
        }
        yield ">
    Delete
</label>


</div>

<script>
document.addEventListener(\"DOMContentLoaded\", function () {

    const posUserInputs = document.querySelectorAll('[name=\"agent_status\"]');
    const posActionSection = document.getElementById('pos-action-section');

    function togglePosAction() {
        let selected = document.querySelector('[name=\"agent_status\"]:checked');

        if (!selected) return;

        if (selected.value === \"1\" || selected.value === \"2\") {
            posActionSection.style.display = \"block\";
        } else {
            posActionSection.style.display = \"none\";
        }
    }

    togglePosAction();

    posUserInputs.forEach(function(input) {
        input.addEventListener(\"change\", togglePosAction);
    });

});
</script>


\t
\t";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/purpletree_pos/admin/view/template/events/customer/customer_form.twig";
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
        return array (  126 => 39,  115 => 33,  104 => 27,  93 => 21,  84 => 15,  78 => 14,  73 => 12,  67 => 11,  62 => 9,  56 => 8,  50 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("\t\t<div class=\"form-text\">{{ help_safe }}</div>
\t</div>
</div>
<div class=\"form-group row\">
 <label class=\"col-sm-2 col-form-label\">{{ text_pos_user }}</label>
<div class=\"col-sm-10 p-2\">
<label class=\"radio-inline\">
<input type=\"radio\" name=\"agent_status\" id=\"pts_no\" value=\"0\" {% if agent_status == 0 %} checked=\"checked\" {% endif %}id=\"add_document\"/>
{{ text_no }}</label>
<label class=\"radio-inline\">
<input type=\"radio\" name=\"agent_status\" id=\"pts_pos_agent\" value=\"1\" {% if agent_status == 1 %} checked=\"checked\" {% endif %} id=\"remove_document\"/>
{{ text_pos_user_admin }}</label>
<label class=\"radio-inline\">
<input type=\"radio\" name=\"agent_status\" id=\"pts_pos_admin\" value=\"2\" {% if agent_status == 2 %} checked=\"checked\" {% endif %} id=\"remove_document\"/>
{{ text_pos_user_agent }}</label>
<!-- POS ACTION SECTION -->
<div id=\"pos-action-section\"class=\"col-sm-6 p-2\"style=\"margin-left:-106px;\">
    <label class=\"col-sm-2 col-form-label\">POS Action </label>
<label>
    <input type=\"checkbox\" name=\"wallet\" value=\"1\"
    {% if wallet == 1 %}checked=\"checked\"{% endif %}>
    Wallet
</label>

<label>
    <input type=\"checkbox\" name=\"return_order\" value=\"1\"
    {% if return_order == 1 %}checked=\"checked\"{% endif %}>
    Return
</label>

<label>
    <input type=\"checkbox\" name=\"cancel_order\" value=\"1\"
    {% if cancel_order == 1 %}checked=\"checked\"{% endif %}>
    Cancel
</label>

<label>
    <input type=\"checkbox\" name=\"delete_order\" value=\"1\"
    {% if delete_order == 1 %}checked=\"checked\"{% endif %}>
    Delete
</label>


</div>

<script>
document.addEventListener(\"DOMContentLoaded\", function () {

    const posUserInputs = document.querySelectorAll('[name=\"agent_status\"]');
    const posActionSection = document.getElementById('pos-action-section');

    function togglePosAction() {
        let selected = document.querySelector('[name=\"agent_status\"]:checked');

        if (!selected) return;

        if (selected.value === \"1\" || selected.value === \"2\") {
            posActionSection.style.display = \"block\";
        } else {
            posActionSection.style.display = \"none\";
        }
    }

    togglePosAction();

    posUserInputs.forEach(function(input) {
        input.addEventListener(\"change\", togglePosAction);
    });

});
</script>


\t
\t", "extension/purpletree_pos/admin/view/template/events/customer/customer_form.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/extension/purpletree_pos/admin/view/template/events/customer/customer_form.twig");
    }
}
