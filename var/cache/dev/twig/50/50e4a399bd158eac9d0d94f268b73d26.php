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

/* components/Feature-old.html.twig */
class __TwigTemplate_1a82380871c6b28711c72fb456e6ea2e extends Template
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
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Feature-old.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Feature-old.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Feature-old.html.twig"));

        // line 1
        yield "<div ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "html", null, true);
        yield " class=\"";
        if ((array_key_exists("available", $context) && ((isset($context["available"]) || array_key_exists("available", $context) ? $context["available"] : (function () { throw new RuntimeError('Variable "available" does not exist.', 1, $this->source); })()) == "true"))) {
            yield "rounded-lg border border-green-200 bg-white p-6 shadow-sm dark:border-green-700 dark:bg-green-800 bg-green-50 hover:bg-green-100";
        } else {
            yield "rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800 bg-gray-50 hover:bg-gray-100";
        }
        yield "\">
    <div class=\"h-56 w-full\">
        <a data-turbo-action=\"replace\" href=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 3, $this->source); })()), "html", null, true);
        yield "\">
            ";
        // line 4
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 5
        yield "        </a>
    </div>
    <div class=\"pt-6\">
        <a data-turbo-action=\"replace\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 8, $this->source); })()), "html", null, true);
        yield "\" class=\"";
        if ((array_key_exists("available", $context) && ((isset($context["available"]) || array_key_exists("available", $context) ? $context["available"] : (function () { throw new RuntimeError('Variable "available" does not exist.', 8, $this->source); })()) == "true"))) {
            yield "text-lg font-semibold leading-tight text-green-900 hover:underline dark:text-white";
        } else {
            yield "text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white";
        }
        yield "\">
            ";
        // line 9
        if ((array_key_exists("available", $context) && ((isset($context["available"]) || array_key_exists("available", $context) ? $context["available"] : (function () { throw new RuntimeError('Variable "available" does not exist.', 9, $this->source); })()) == "true"))) {
            // line 10
            yield "                <span class=\"inline-flex items-center justify-center w-4 h-4 ms-2 text-xs font-semibold text-green-800 bg-green-200 rounded-full\">✅</span>
            ";
        }
        // line 12
        yield "            ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "
        </a>
        <div class=\"mt-2 flex items-center gap-2\">
            <p class=\"";
        // line 15
        if ((array_key_exists("available", $context) && ((isset($context["available"]) || array_key_exists("available", $context) ? $context["available"] : (function () { throw new RuntimeError('Variable "available" does not exist.', 15, $this->source); })()) == "true"))) {
            yield "text-sm font-medium text-green-900 dark:text-white";
        } else {
            yield "text-sm font-medium text-gray-900 dark:text-white";
        }
        yield "\">
                ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 16, $this->source); })()), "html", null, true);
        yield "
            </p>
        </div>
    </div>
</div>
";
        
        $__internal_ba1c37b184061724dbe82aef62fe32a3->leave($__internal_ba1c37b184061724dbe82aef62fe32a3_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
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
        return "components/Feature-old.html.twig";
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
        return array (  126 => 4,  106 => 16,  98 => 15,  91 => 12,  87 => 10,  85 => 9,  75 => 8,  70 => 5,  68 => 4,  64 => 3,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div {{  attributes }} class=\"{% if available is defined and available == \"true\" %}rounded-lg border border-green-200 bg-white p-6 shadow-sm dark:border-green-700 dark:bg-green-800 bg-green-50 hover:bg-green-100{% else %}rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800 bg-gray-50 hover:bg-gray-100{% endif %}\">
    <div class=\"h-56 w-full\">
        <a data-turbo-action=\"replace\" href=\"{{ link }}\">
            {% block content %}{% endblock %}
        </a>
    </div>
    <div class=\"pt-6\">
        <a data-turbo-action=\"replace\" href=\"{{ link }}\" class=\"{% if available is defined and available == \"true\" %}text-lg font-semibold leading-tight text-green-900 hover:underline dark:text-white{% else %}text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white{% endif %}\">
            {% if available is defined and available == \"true\" %}
                <span class=\"inline-flex items-center justify-center w-4 h-4 ms-2 text-xs font-semibold text-green-800 bg-green-200 rounded-full\">✅</span>
            {% endif %}
            {{ title }}
        </a>
        <div class=\"mt-2 flex items-center gap-2\">
            <p class=\"{% if available is defined and available == \"true\" %}text-sm font-medium text-green-900 dark:text-white{% else %}text-sm font-medium text-gray-900 dark:text-white{% endif %}\">
                {{ description }}
            </p>
        </div>
    </div>
</div>
", "components/Feature-old.html.twig", "/Users/praveenmujawdiya/Documents/survos/pwa-f7/templates/components/Feature-old.html.twig");
    }
}
