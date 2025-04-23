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

/* components/Feature.html.twig */
class __TwigTemplate_6db4f2d97eb9a6044ad060af48656e41 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ba1c37b184061724dbe82aef62fe32a3 = $this->extensions["Inspector\\Symfony\\Bundle\\Twig\\TwigTracer"];
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Feature.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Feature.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Feature.html.twig"));

        // line 1
        yield "<a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "\" class=\"item-link height-100\">
    <div class=\"item-content height-100\">
        <div class=\"item-inner item-cell height-100\">
            <div class=\"item-row\">
                <div class=\"item-cell align-self-flex-start flex-shrink-0 width-auto\">
                    <div class=\"shape-container mask mask-squircle size-64 bg-color-primary\">
                        ";
        // line 7
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 8
        yield "                    </div>
                </div>
                <div class=\"item-cell align-self-flex-start\">
                    <div class=\"font-size-16 font-weight-800\">";
        // line 11
        yield (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 11, $this->source); })());
        yield "</div>
                    <div class=\"font-size-14 text-muted\">";
        // line 12
        yield (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 12, $this->source); })());
        yield "</div>
                </div>
                <div class=\"item-cell align-self-flex-start flex-shrink-0 width-auto\">
                    ";
        // line 15
        if ((array_key_exists("available", $context) && ((isset($context["available"]) || array_key_exists("available", $context) ? $context["available"] : (function () { throw new RuntimeError('Variable "available" does not exist.', 15, $this->source); })()) == "true"))) {
            // line 16
            yield "                    ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "material-symbols:check-circle", "class" => "icon size-24 color-green tooltip-init", "data-tooltip" => "Supported"]);
            yield "
                    ";
        } else {
            // line 18
            yield "                    ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "material-symbols:error", "class" => "icon size-24 color-red tooltip-init", "data-tooltip" => "Not Supported"]);
            yield "
                    ";
        }
        // line 20
        yield "                </div>
            </div>
        </div>
    </div>
</a>";
        
        $__internal_ba1c37b184061724dbe82aef62fe32a3->leave($__internal_ba1c37b184061724dbe82aef62fe32a3_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ba1c37b184061724dbe82aef62fe32a3 = $this->extensions["Inspector\\Symfony\\Bundle\\Twig\\TwigTracer"];
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
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
        return "components/Feature.html.twig";
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
        return array (  111 => 7,  93 => 20,  87 => 18,  81 => 16,  79 => 15,  73 => 12,  69 => 11,  64 => 8,  62 => 7,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<a href=\"{{ link }}\" class=\"item-link height-100\">
    <div class=\"item-content height-100\">
        <div class=\"item-inner item-cell height-100\">
            <div class=\"item-row\">
                <div class=\"item-cell align-self-flex-start flex-shrink-0 width-auto\">
                    <div class=\"shape-container mask mask-squircle size-64 bg-color-primary\">
                        {% block content %}{% endblock %}
                    </div>
                </div>
                <div class=\"item-cell align-self-flex-start\">
                    <div class=\"font-size-16 font-weight-800\">{{ title|raw }}</div>
                    <div class=\"font-size-14 text-muted\">{{ description|raw }}</div>
                </div>
                <div class=\"item-cell align-self-flex-start flex-shrink-0 width-auto\">
                    {% if available is defined and available == \"true\" %}
                    {{ component('ux:icon', { name: 'material-symbols:check-circle', class: 'icon size-24 color-green tooltip-init', 'data-tooltip': 'Supported' }) }}
                    {% else %}
                    {{ component('ux:icon', { name: 'material-symbols:error', class: 'icon size-24 color-red tooltip-init', 'data-tooltip': 'Not Supported' }) }}
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</a>", "components/Feature.html.twig", "/Users/praveenmujawdiya/Documents/survos/pwa-f7/templates/components/Feature.html.twig");
    }
}
