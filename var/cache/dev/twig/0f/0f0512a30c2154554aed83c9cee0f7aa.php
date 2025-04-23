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

/* features-old/offline_support.html.twig */
class __TwigTemplate_25f29245befc20041351fdd19feb84ef extends Template
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
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/offline_support.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/offline_support.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/offline_support.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "features-old/offline_support.html.twig", 1);
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

        yield "Offline support";
        
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
    <section class=\"bg-white dark:bg-gray-900\">
        <div class=\"py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 \">
            <h2 class=\"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white\">
                Offline support
            </h2>
            <div
                data-controller=\"pwa--connection-status\"
                data-pwa--connection-status-target=\"attribute\"
                class=\"flex items-center p-4 mb-4 text-sm border rounded-lg online:text-green-800 online:bg-green-50 online:dark:bg-gray-800 online:dark:text-green-400 offline:text-yellow-800 offline:bg-yellow-50 offline:dark:bg-gray-800 offline:dark:text-yellow-300\"
                role=\"alert\"
            >
                <svg class=\"flex-shrink-0 inline w-4 h-4 me-3\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                    <path d=\"M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z\"/>
                </svg>
                <div>
                    <span class=\"font-medium\">Connection status</span>: <span ";
        // line 22
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget("@pwa/connection-status", "message");
        yield ">We are trying to guess what is the current status of your Internet connection</span>
                </div>
            </div>
            <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                A Service Worker is a special kind of Web Worker that serves as a proxy for the web app, allowing it to intercept and control network requests.
                When a request is made while the web app is offline, the Service Worker can intercept it and serve a response from its cache.
                This cache typically contains static assets like images, stylesheets, JavaScript etc. but it can also contain full HTML pages.
                In addition to this, it can also defer requests that are made while the user is offline and retry them later when the network is back.
            </p>
            <h2 class=\"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white\">
                Demo
            </h2>
            <p class=\"mt-3 mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                Disconnect your device from the internet by switching off your Wi-Fi or put your device in Airplane Mode.
                Visit any demo in this app and notice how they keep working (except for demos that require network access like geolocation for example).
            </p>
            <p class=\"mt-3 mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                To implement offline support for your web app with the PWA Bundle, you just have to enable the service worker.<br>
                You can precache routes by adding them to the configuration file.
            </p>
            ";
        // line 42
        $context["configuration"] = "pwa:
    serviceworker: \"sw.js\"";
        // line 44
        yield "            <pre><code class=\"language-yaml\" data-controller=\"code\">";
        yield (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 44, $this->source); })());
        yield "</code></pre>
            <p class=\"mt-3 mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                The service worker also takes care of installing a new version of your web app automatically and as soon as possible.
                <br>
                Please refer to the documentation for more advanced features like URL preload.
            </p>
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
        return "features-old/offline_support.html.twig";
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
        return array (  159 => 44,  156 => 42,  133 => 22,  115 => 6,  99 => 5,  70 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Offline support{% endblock %}

{% block body %}
<turbo-frame id=\"content\">
    <section class=\"bg-white dark:bg-gray-900\">
        <div class=\"py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 \">
            <h2 class=\"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white\">
                Offline support
            </h2>
            <div
                data-controller=\"pwa--connection-status\"
                data-pwa--connection-status-target=\"attribute\"
                class=\"flex items-center p-4 mb-4 text-sm border rounded-lg online:text-green-800 online:bg-green-50 online:dark:bg-gray-800 online:dark:text-green-400 offline:text-yellow-800 offline:bg-yellow-50 offline:dark:bg-gray-800 offline:dark:text-yellow-300\"
                role=\"alert\"
            >
                <svg class=\"flex-shrink-0 inline w-4 h-4 me-3\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                    <path d=\"M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z\"/>
                </svg>
                <div>
                    <span class=\"font-medium\">Connection status</span>: <span {{ stimulus_target('@pwa/connection-status', 'message') }}>We are trying to guess what is the current status of your Internet connection</span>
                </div>
            </div>
            <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                A Service Worker is a special kind of Web Worker that serves as a proxy for the web app, allowing it to intercept and control network requests.
                When a request is made while the web app is offline, the Service Worker can intercept it and serve a response from its cache.
                This cache typically contains static assets like images, stylesheets, JavaScript etc. but it can also contain full HTML pages.
                In addition to this, it can also defer requests that are made while the user is offline and retry them later when the network is back.
            </p>
            <h2 class=\"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white\">
                Demo
            </h2>
            <p class=\"mt-3 mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                Disconnect your device from the internet by switching off your Wi-Fi or put your device in Airplane Mode.
                Visit any demo in this app and notice how they keep working (except for demos that require network access like geolocation for example).
            </p>
            <p class=\"mt-3 mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                To implement offline support for your web app with the PWA Bundle, you just have to enable the service worker.<br>
                You can precache routes by adding them to the configuration file.
            </p>
            {% set configuration = 'pwa:
    serviceworker: \"sw.js\"' %}
            <pre><code class=\"language-yaml\" data-controller=\"code\">{{ configuration|raw }}</code></pre>
            <p class=\"mt-3 mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                The service worker also takes care of installing a new version of your web app automatically and as soon as possible.
                <br>
                Please refer to the documentation for more advanced features like URL preload.
            </p>
        </div>
    </section>
</turbo-frame>
{% endblock %}
", "features-old/offline_support.html.twig", "/Users/praveenmujawdiya/Documents/survos/pwa-f7/templates/features-old/offline_support.html.twig");
    }
}
