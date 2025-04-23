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

/* features-old/network_info.html.twig */
class __TwigTemplate_f7c3cfe0e40238b0df2db0d6bb1dc9d8 extends Template
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
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/network_info.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/network_info.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/network_info.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "features-old/network_info.html.twig", 1);
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

        yield "Network info";
        
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
        yield "    <turbo-frame id=\"content\">
        <section class=\"bg-white dark:bg-gray-900\" data-controller=\"network-information\">
            <div class=\"py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 \">
                <h2 class=\"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white\">
                    Network info
                </h2>
                <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                    Your network information is:
                </p>
                <div class=\"relative overflow-x-auto\">
                    <table class=\"w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400\">
                        <thead class=\"text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400\">
                        <tr>
                            <th scope=\"col\" class=\"px-6 py-3\">
                                Property
                            </th>
                            <th scope=\"col\" class=\"px-6 py-3\">
                                Value
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class=\"bg-white dark:bg-gray-800\">
                            <th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white\">
                                Downlink
                            </th>
                            <td class=\"px-6 py-4\">
                                <span data-network-information-target=\"downlink downlinkContent\">...</span>&nbsp;Mbps
                            </td>
                        </tr>
                        <tr class=\"bg-white dark:bg-gray-800\">
                            <th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white\">
                                Downlink max
                            </th>
                            <td class=\"px-6 py-4\">
                                <span data-network-information-target=\"downlinkMax downlinkMaxContent\">...</span>&nbsp;Mbps
                            </td>
                        </tr>
                        <tr class=\"bg-white dark:bg-gray-800\">
                            <th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white\">
                                Effective connection type
                            </th>
                            <td class=\"px-6 py-4\">
                                <span data-network-information-target=\"effectiveType effectiveTypeContent\">...</span>
                            </td>
                        </tr>
                        <tr class=\"bg-white dark:bg-gray-800\">
                            <th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white\">
                                RTT
                            </th>
                            <td class=\"px-6 py-4\">
                                <span data-network-information-target=\"rtt rttContent\">...</span>
                            </td>
                        </tr>
                        <tr class=\"bg-white dark:bg-gray-800\">
                            <th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white\">
                                Save data
                            </th>
                            <td class=\"px-6 py-4\">
                                <span data-network-information-target=\"saveData saveDataContent\">...</span>
                            </td>
                        </tr>
                        <tr class=\"bg-white dark:bg-gray-800\">
                            <th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white\">
                                Type
                            </th>
                            <td class=\"px-6 py-4\">
                                <span data-network-information-target=\"type typeContent\">...</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
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
        return "features-old/network_info.html.twig";
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
        return array (  115 => 6,  99 => 5,  70 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Network info{% endblock %}

{% block body %}
    <turbo-frame id=\"content\">
        <section class=\"bg-white dark:bg-gray-900\" data-controller=\"network-information\">
            <div class=\"py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 \">
                <h2 class=\"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white\">
                    Network info
                </h2>
                <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                    Your network information is:
                </p>
                <div class=\"relative overflow-x-auto\">
                    <table class=\"w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400\">
                        <thead class=\"text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400\">
                        <tr>
                            <th scope=\"col\" class=\"px-6 py-3\">
                                Property
                            </th>
                            <th scope=\"col\" class=\"px-6 py-3\">
                                Value
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class=\"bg-white dark:bg-gray-800\">
                            <th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white\">
                                Downlink
                            </th>
                            <td class=\"px-6 py-4\">
                                <span data-network-information-target=\"downlink downlinkContent\">...</span>&nbsp;Mbps
                            </td>
                        </tr>
                        <tr class=\"bg-white dark:bg-gray-800\">
                            <th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white\">
                                Downlink max
                            </th>
                            <td class=\"px-6 py-4\">
                                <span data-network-information-target=\"downlinkMax downlinkMaxContent\">...</span>&nbsp;Mbps
                            </td>
                        </tr>
                        <tr class=\"bg-white dark:bg-gray-800\">
                            <th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white\">
                                Effective connection type
                            </th>
                            <td class=\"px-6 py-4\">
                                <span data-network-information-target=\"effectiveType effectiveTypeContent\">...</span>
                            </td>
                        </tr>
                        <tr class=\"bg-white dark:bg-gray-800\">
                            <th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white\">
                                RTT
                            </th>
                            <td class=\"px-6 py-4\">
                                <span data-network-information-target=\"rtt rttContent\">...</span>
                            </td>
                        </tr>
                        <tr class=\"bg-white dark:bg-gray-800\">
                            <th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white\">
                                Save data
                            </th>
                            <td class=\"px-6 py-4\">
                                <span data-network-information-target=\"saveData saveDataContent\">...</span>
                            </td>
                        </tr>
                        <tr class=\"bg-white dark:bg-gray-800\">
                            <th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white\">
                                Type
                            </th>
                            <td class=\"px-6 py-4\">
                                <span data-network-information-target=\"type typeContent\">...</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </turbo-frame>
{% endblock %}
", "features-old/network_info.html.twig", "/Users/praveenmujawdiya/Documents/survos/pwa-f7/templates/features-old/network_info.html.twig");
    }
}
