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

/* features-old/presentation.html.twig */
class __TwigTemplate_499fb7651c700108c51d70e0568a6b23 extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ba1c37b184061724dbe82aef62fe32a3 = $this->extensions["Inspector\\Symfony\\Bundle\\Twig\\TwigTracer"];
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/presentation.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/presentation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/presentation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "features-old/presentation.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba1c37b184061724dbe82aef62fe32a3->leave($__internal_ba1c37b184061724dbe82aef62fe32a3_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ba1c37b184061724dbe82aef62fe32a3 = $this->extensions["Inspector\\Symfony\\Bundle\\Twig\\TwigTracer"];
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Presentation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_ba1c37b184061724dbe82aef62fe32a3->leave($__internal_ba1c37b184061724dbe82aef62fe32a3_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ba1c37b184061724dbe82aef62fe32a3 = $this->extensions["Inspector\\Symfony\\Bundle\\Twig\\TwigTracer"];
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<turbo-frame id=\"content\">
    <section class=\"bg-white dark:bg-gray-900\"
             data-controller=\"pwa--presentation spotlight\"
             data-pwa--presentation-urls-value=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode([$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_feature_receiver")]), "html", null, true);
        yield "\"
    >
        <div class=\"py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 \">
            <h2 class=\"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white\">
                Presentation
            </h2>
            <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                The PWA Bundle provides a way to create presentations using the Presentation API.
                This allows you to display pages on a remote screen or projector. <br>
                Google ChromeCast, Microsoft Wireless Display Adapter are some of the devices that support this feature.
            </p>
            <button
                class=\"px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600\"
                data-action=\"click->pwa--presentation#start\"
            >
                Start
            </button>
            <button
                class=\"px-4 py-2 text-white bg-red-500 rounded hover:bg-red-600\"
                data-action=\"click->pwa--presentation#terminate\"
            >
                Stop
            </button>
            <button
                id=\"next\"
                class=\"px-4 py-2 text-white bg-green-500 rounded hover:bg-green-600\"
                data-action=\"click->pwa--presentation#send\"
                data-pwa--presentation-message-param=\"next\"
                data-spotlight-target=\"next\"
            >
                Next
            </button>
            <button
                id=\"previous\"
                class=\"px-4 py-2 text-white bg-yellow-500 rounded hover:bg-yellow-600\"
                data-action=\"click->pwa--presentation#send\"
                data-pwa--presentation-message-param=\"previous\"
                data-spotlight-target=\"previous\"
            >
                Previous
            </button>
        </div>
    </section>
</turbo-frame>
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
        return "features-old/presentation.html.twig";
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
        return array (  120 => 9,  115 => 6,  99 => 5,  70 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Presentation{% endblock %}

{% block body %}
<turbo-frame id=\"content\">
    <section class=\"bg-white dark:bg-gray-900\"
             data-controller=\"pwa--presentation spotlight\"
             data-pwa--presentation-urls-value=\"{{ [url('app_feature_receiver')]|json_encode }}\"
    >
        <div class=\"py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 \">
            <h2 class=\"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white\">
                Presentation
            </h2>
            <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                The PWA Bundle provides a way to create presentations using the Presentation API.
                This allows you to display pages on a remote screen or projector. <br>
                Google ChromeCast, Microsoft Wireless Display Adapter are some of the devices that support this feature.
            </p>
            <button
                class=\"px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600\"
                data-action=\"click->pwa--presentation#start\"
            >
                Start
            </button>
            <button
                class=\"px-4 py-2 text-white bg-red-500 rounded hover:bg-red-600\"
                data-action=\"click->pwa--presentation#terminate\"
            >
                Stop
            </button>
            <button
                id=\"next\"
                class=\"px-4 py-2 text-white bg-green-500 rounded hover:bg-green-600\"
                data-action=\"click->pwa--presentation#send\"
                data-pwa--presentation-message-param=\"next\"
                data-spotlight-target=\"next\"
            >
                Next
            </button>
            <button
                id=\"previous\"
                class=\"px-4 py-2 text-white bg-yellow-500 rounded hover:bg-yellow-600\"
                data-action=\"click->pwa--presentation#send\"
                data-pwa--presentation-message-param=\"previous\"
                data-spotlight-target=\"previous\"
            >
                Previous
            </button>
        </div>
    </section>
</turbo-frame>
{% endblock %}
", "features-old/presentation.html.twig", "/Users/praveenmujawdiya/Documents/survos/pwa-f7/templates/features-old/presentation.html.twig");
    }
}
