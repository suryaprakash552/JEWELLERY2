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

/* admin/view/template/user/user_login.twig */
class __TwigTemplate_145fad792a81fb2d4c2dcf00825d7e78 extends Template
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
        yield "<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <th>";
        // line 5
        yield ($context["column_ip"] ?? null);
        yield "</th>
        <th>";
        // line 6
        yield ($context["column_user_agent"] ?? null);
        yield "</th>
        <th>";
        // line 7
        yield ($context["column_date_added"] ?? null);
        yield "</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 11
        if (($context["logins"] ?? null)) {
            // line 12
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["logins"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["login"]) {
                // line 13
                yield "          <tr>
            <td><a href=\"https://whatismyipaddress.com/ip/";
                // line 14
                yield CoreExtension::getAttribute($this->env, $this->source, $context["login"], "ip", [], "any", false, false, false, 14);
                yield "\" target=\"_blank\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["login"], "ip", [], "any", false, false, false, 14);
                yield "</a></td>
            <td>";
                // line 15
                yield CoreExtension::getAttribute($this->env, $this->source, $context["login"], "user_agent", [], "any", false, false, false, 15);
                yield "</td>
            <td>";
                // line 16
                yield CoreExtension::getAttribute($this->env, $this->source, $context["login"], "date_added", [], "any", false, false, false, 16);
                yield "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['login'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "      ";
        } else {
            // line 20
            yield "        <tr>
          <td class=\"text-center\" colspan=\"3\">";
            // line 21
            yield ($context["text_no_results"] ?? null);
            yield "</td>
        </tr>
      ";
        }
        // line 24
        yield "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">";
        // line 28
        yield ($context["pagination"] ?? null);
        yield "</div>
  <div class=\"col-sm-6 text-end\">";
        // line 29
        yield ($context["results"] ?? null);
        yield "</div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/user/user_login.twig";
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
        return array (  114 => 29,  110 => 28,  104 => 24,  98 => 21,  95 => 20,  92 => 19,  83 => 16,  79 => 15,  73 => 14,  70 => 13,  65 => 12,  63 => 11,  56 => 7,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <th>{{ column_ip }}</th>
        <th>{{ column_user_agent }}</th>
        <th>{{ column_date_added }}</th>
      </tr>
    </thead>
    <tbody>
      {% if logins %}
        {% for login in logins %}
          <tr>
            <td><a href=\"https://whatismyipaddress.com/ip/{{ login.ip }}\" target=\"_blank\">{{ login.ip }}</a></td>
            <td>{{ login.user_agent }}</td>
            <td>{{ login.date_added }}</td>
          </tr>
        {% endfor %}
      {% else %}
        <tr>
          <td class=\"text-center\" colspan=\"3\">{{ text_no_results }}</td>
        </tr>
      {% endif %}
    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
  <div class=\"col-sm-6 text-end\">{{ results }}</div>
</div>", "admin/view/template/user/user_login.twig", "/home/k5ahkheh1fv2/public_html/JEWELLERY2/admin/view/template/user/user_login.twig");
    }
}
