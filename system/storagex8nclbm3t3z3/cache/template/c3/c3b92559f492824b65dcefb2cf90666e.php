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

/* extension/opencart/admin/view/template/api/coupon.twig */
class __TwigTemplate_8495faa17a5d46c9ef7fe300972ce83d extends Template
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
        yield "<div class=\"input-group\">
  <section id=\"section-coupon\" class=\"form-control\" style=\"min-height: 64px;\">
    <div class=\"lead\">
      <strong>";
        // line 4
        yield ($context["text_coupon"] ?? null);
        yield "</strong>
      <br/>
      <div id=\"output-coupon\">";
        // line 6
        yield ($context["coupon"] ?? null);
        yield "</div>
    </div>
  </section>
  <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-coupon\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
</div>
<div id=\"modal-coupon\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 15
        yield ($context["text_coupon"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-coupon\" data-oc-target=\"section-coupon\">
          <div class=\"mb-3\">
            <label for=\"input-coupon\" class=\"form-label\">";
        // line 21
        yield ($context["entry_coupon"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"coupon\" value=\"";
        // line 22
        yield ($context["coupon"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_coupon"] ?? null);
        yield "\" id=\"input-coupon\" class=\"form-control\"/>
          </div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-coupon\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> ";
        // line 25
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#form-coupon').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 37
        yield ($context["user_token"] ?? null);
        yield "&call=extension&code=coupon&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-coupon').button('loading');
        },
        complete: function() {
            \$('#button-coupon').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                \$('#form-coupon').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#input-coupon').addClass('is-invalid');
            }

            if (json['success']) {
                \$('#form-coupon').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#output-coupon').html(\$('#input-coupon').val());

                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/opencart/admin/view/template/api/coupon.twig";
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
        return array (  100 => 37,  85 => 25,  77 => 22,  73 => 21,  64 => 15,  52 => 6,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"input-group\">
  <section id=\"section-coupon\" class=\"form-control\" style=\"min-height: 64px;\">
    <div class=\"lead\">
      <strong>{{ text_coupon }}</strong>
      <br/>
      <div id=\"output-coupon\">{{ coupon }}</div>
    </div>
  </section>
  <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-coupon\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
</div>
<div id=\"modal-coupon\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">{{ text_coupon }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-coupon\" data-oc-target=\"section-coupon\">
          <div class=\"mb-3\">
            <label for=\"input-coupon\" class=\"form-label\">{{ entry_coupon }}</label>
            <input type=\"text\" name=\"coupon\" value=\"{{ coupon }}\" placeholder=\"{{ entry_coupon }}\" id=\"input-coupon\" class=\"form-control\"/>
          </div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-coupon\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> {{ button_continue }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#form-coupon').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=extension&code=coupon&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-coupon').button('loading');
        },
        complete: function() {
            \$('#button-coupon').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                \$('#form-coupon').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#input-coupon').addClass('is-invalid');
            }

            if (json['success']) {
                \$('#form-coupon').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#output-coupon').html(\$('#input-coupon').val());

                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>", "extension/opencart/admin/view/template/api/coupon.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY/extension/opencart/admin/view/template/api/coupon.twig");
    }
}
