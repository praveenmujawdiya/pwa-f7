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

/* @SpomkyLabsPwa/Collector/template.html.twig */
class __TwigTemplate_de49b1fd9d727e68d0defb3e5e927fef extends Template
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

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'head' => [$this, 'block_head'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ba1c37b184061724dbe82aef62fe32a3 = $this->extensions["Inspector\\Symfony\\Bundle\\Twig\\TwigTracer"];
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SpomkyLabsPwa/Collector/template.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SpomkyLabsPwa/Collector/template.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SpomkyLabsPwa/Collector/template.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@SpomkyLabsPwa/Collector/template.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba1c37b184061724dbe82aef62fe32a3->leave($__internal_ba1c37b184061724dbe82aef62fe32a3_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ba1c37b184061724dbe82aef62fe32a3 = $this->extensions["Inspector\\Symfony\\Bundle\\Twig\\TwigTracer"];
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        yield "    ";
        $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 5
            yield "        ";
            yield Twig\Extension\CoreExtension::source($this->env, "@SpomkyLabsPwa/Collector/pwa.svg");
            yield "
        <span class=\"sf-toolbar-value\">PWA</span>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        yield "
    ";
        // line 9
        $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 10
            yield "        <div class=\"sf-toolbar-info-piece\">
            <b>Manifest</b>
            ";
            // line 12
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 12, $this->source); })()), "data", [], "any", false, false, false, 12), "manifest", [], "any", false, false, false, 12), "enabled", [], "any", false, false, false, 12)) {
                // line 13
                yield "                <span class=\"sf-toolbar-status sf-toolbar-status-green\">Enabled</span>
            ";
            } else {
                // line 15
                yield "                <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">Disabled</span>
            ";
            }
            // line 17
            yield "        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Service worker</b>
            ";
            // line 20
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 20, $this->source); })()), "data", [], "any", false, false, false, 20), "serviceWorker", [], "any", false, false, false, 20), "enabled", [], "any", false, false, false, 20)) {
                // line 21
                yield "                <span class=\"sf-toolbar-status sf-toolbar-status-green\">Enabled</span>
            ";
            } else {
                // line 23
                yield "                <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">Disabled</span>
            ";
            }
            // line 25
            yield "        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>└&nbsp;Workbox</b>
            ";
            // line 28
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 28, $this->source); })()), "workbox", [], "any", false, false, false, 28), "enabled", [], "any", false, false, false, 28)) {
                // line 29
                yield "                <span class=\"sf-toolbar-status sf-toolbar-status-green\">Enabled</span>
            ";
            } else {
                // line 31
                yield "                <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">Disabled</span>
            ";
            }
            // line 33
            yield "        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Favicons</b>
            ";
            // line 36
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 36, $this->source); })()), "data", [], "any", false, false, false, 36), "favicons", [], "any", false, false, false, 36), "enabled", [], "any", false, false, false, 36)) {
                // line 37
                yield "                <span class=\"sf-toolbar-status sf-toolbar-status-green\">Enabled</span>
            ";
            } else {
                // line 39
                yield "                <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">Disabled</span>
            ";
            }
            // line 41
            yield "        </div>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        yield "
    ";
        // line 44
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true]);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_ba1c37b184061724dbe82aef62fe32a3->leave($__internal_ba1c37b184061724dbe82aef62fe32a3_prof);

        yield from [];
    }

    // line 47
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ba1c37b184061724dbe82aef62fe32a3 = $this->extensions["Inspector\\Symfony\\Bundle\\Twig\\TwigTracer"];
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 48
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "
    <style>
        .status-badge {
            background-color: var(--badge-background);
            border-radius: 4px;
            color: var(--badge-color);
            display: inline-block;
            font-size: 15px;
            font-weight: bold;
            margin: 10px 0 5px;
            padding: 3px 7px;
            white-space: nowrap;
        }
        .status-success {
            background-color: var(--badge-success-background);
            color: var(--badge-success-color);
        }
        .status-warning {
            background-color: var(--badge-warning-background);
            color: var(--badge-warning-color);
        }
        .status-error {
            background-color: var(--badge-danger-background);
            color: var(--badge-danger-color);
        }
        .output {
            background-color: var(--page-background);
            background-image: url(\"data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' stroke='%23e5e5e5' stroke-width='4' stroke-dasharray='6%2c 14' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e\");
            border-radius: 6px;
            box-shadow: 0 0 0 5px var(--page-background);
            color: var(--color-muted);
            margin: 1em 0;
            padding: .5em 2em;
            line-height: 0.7rem;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_ba1c37b184061724dbe82aef62fe32a3->leave($__internal_ba1c37b184061724dbe82aef62fe32a3_prof);

        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ba1c37b184061724dbe82aef62fe32a3 = $this->extensions["Inspector\\Symfony\\Bundle\\Twig\\TwigTracer"];
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 87
        yield "    <span class=\"label\">
        <span class=\"icon\">";
        // line 88
        yield Twig\Extension\CoreExtension::source($this->env, "@SpomkyLabsPwa/Collector/pwa.svg");
        yield "</span>
        <strong>PWA</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_ba1c37b184061724dbe82aef62fe32a3->leave($__internal_ba1c37b184061724dbe82aef62fe32a3_prof);

        yield from [];
    }

    // line 93
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ba1c37b184061724dbe82aef62fe32a3 = $this->extensions["Inspector\\Symfony\\Bundle\\Twig\\TwigTracer"];
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 94
        yield "    <h2>Progressive Web App</h2>
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Manifest</h3>
            <div class=\"tab-content\">
                ";
        // line 99
        yield from $this->loadTemplate("@SpomkyLabsPwa/Collector/manifest-tab.html.twig", "@SpomkyLabsPwa/Collector/template.html.twig", 99)->unwrap()->yield($context);
        // line 100
        yield "            </div>
        </div>
        <div class=\"tab\">
            <h3 class=\"tab-title\">Service Worker</h3>
            <div class=\"tab-content\">
                ";
        // line 105
        yield from $this->loadTemplate("@SpomkyLabsPwa/Collector/serviceworker-tab.html.twig", "@SpomkyLabsPwa/Collector/template.html.twig", 105)->unwrap()->yield($context);
        // line 106
        yield "            </div>
        </div>
        <div class=\"tab\">
            <h3 class=\"tab-title\">Favicons</h3>
            <div class=\"tab-content\">
                ";
        // line 111
        yield from $this->loadTemplate("@SpomkyLabsPwa/Collector/favicons-tab.html.twig", "@SpomkyLabsPwa/Collector/template.html.twig", 111)->unwrap()->yield($context);
        // line 112
        yield "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_ba1c37b184061724dbe82aef62fe32a3->leave($__internal_ba1c37b184061724dbe82aef62fe32a3_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SpomkyLabsPwa/Collector/template.html.twig";
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
        return array (  335 => 112,  333 => 111,  326 => 106,  324 => 105,  317 => 100,  315 => 99,  308 => 94,  292 => 93,  274 => 88,  271 => 87,  255 => 86,  203 => 48,  187 => 47,  171 => 44,  168 => 43,  163 => 41,  159 => 39,  155 => 37,  153 => 36,  148 => 33,  144 => 31,  140 => 29,  138 => 28,  133 => 25,  129 => 23,  125 => 21,  123 => 20,  118 => 17,  114 => 15,  110 => 13,  108 => 12,  104 => 10,  102 => 9,  99 => 8,  91 => 5,  88 => 4,  72 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ source('@SpomkyLabsPwa/Collector/pwa.svg') }}
        <span class=\"sf-toolbar-value\">PWA</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Manifest</b>
            {% if collector.data.manifest.enabled %}
                <span class=\"sf-toolbar-status sf-toolbar-status-green\">Enabled</span>
            {% else %}
                <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">Disabled</span>
            {% endif %}
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Service worker</b>
            {% if collector.data.serviceWorker.enabled %}
                <span class=\"sf-toolbar-status sf-toolbar-status-green\">Enabled</span>
            {% else %}
                <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">Disabled</span>
            {% endif %}
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>└&nbsp;Workbox</b>
            {% if collector.workbox.enabled %}
                <span class=\"sf-toolbar-status sf-toolbar-status-green\">Enabled</span>
            {% else %}
                <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">Disabled</span>
            {% endif %}
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Favicons</b>
            {% if collector.data.favicons.enabled %}
                <span class=\"sf-toolbar-status sf-toolbar-status-green\">Enabled</span>
            {% else %}
                <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">Disabled</span>
            {% endif %}
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': true }) }}
{% endblock %}

{% block head %}
    {{ parent() }}
    <style>
        .status-badge {
            background-color: var(--badge-background);
            border-radius: 4px;
            color: var(--badge-color);
            display: inline-block;
            font-size: 15px;
            font-weight: bold;
            margin: 10px 0 5px;
            padding: 3px 7px;
            white-space: nowrap;
        }
        .status-success {
            background-color: var(--badge-success-background);
            color: var(--badge-success-color);
        }
        .status-warning {
            background-color: var(--badge-warning-background);
            color: var(--badge-warning-color);
        }
        .status-error {
            background-color: var(--badge-danger-background);
            color: var(--badge-danger-color);
        }
        .output {
            background-color: var(--page-background);
            background-image: url(\"data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' stroke='%23e5e5e5' stroke-width='4' stroke-dasharray='6%2c 14' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e\");
            border-radius: 6px;
            box-shadow: 0 0 0 5px var(--page-background);
            color: var(--color-muted);
            margin: 1em 0;
            padding: .5em 2em;
            line-height: 0.7rem;
        }
    </style>
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">{{ source('@SpomkyLabsPwa/Collector/pwa.svg') }}</span>
        <strong>PWA</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Progressive Web App</h2>
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Manifest</h3>
            <div class=\"tab-content\">
                {% include '@SpomkyLabsPwa/Collector/manifest-tab.html.twig' %}
            </div>
        </div>
        <div class=\"tab\">
            <h3 class=\"tab-title\">Service Worker</h3>
            <div class=\"tab-content\">
                {% include '@SpomkyLabsPwa/Collector/serviceworker-tab.html.twig' %}
            </div>
        </div>
        <div class=\"tab\">
            <h3 class=\"tab-title\">Favicons</h3>
            <div class=\"tab-content\">
                {% include '@SpomkyLabsPwa/Collector/favicons-tab.html.twig' %}
            </div>
        </div>
    </div>
{% endblock %}", "@SpomkyLabsPwa/Collector/template.html.twig", "/Users/praveenmujawdiya/Documents/survos/pwa-f7/vendor/spomky-labs/pwa-bundle/templates/Collector/template.html.twig");
    }
}
