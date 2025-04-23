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

/* features-old/speech_synthesis.html.twig */
class __TwigTemplate_433bbb8bcfb6265d64a161894a61812c extends Template
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
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/speech_synthesis.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/speech_synthesis.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/speech_synthesis.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "features-old/speech_synthesis.html.twig", 1);
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

        yield "Speech synthesis";
        
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
                Speech synthesis
            </h2>
            <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                Click on the button below to hear a synthesized voice.
            </p>
            <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                TO BE COMPLETED
            </p>
            <input
                type=\"text\"
                id=\"text\"
                name=\"text\"
                class=\"w-full px-3 py-2 mb-4 text-sm text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring focus:ring-blue-500 focus:border-blue-500\"
                placeholder=\"Enter text to speak\"
            >
            <select
                id=\"voice\"
                name=\"voice\"
                class=\"w-full px-3 py-2 mb-4 text-sm text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring focus:ring-blue-500 focus:border-blue-500\"
            >
                <option value=\"Google français\">Google français</option>
            </select>
            <select
                id=\"locale\"
                name=\"locale\"
                class=\"w-full px-3 py-2 mb-4 text-sm text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring focus:ring-blue-500 focus:border-blue-500\"
            >
            </select>
            <input
                type=\"number\"
                id=\"rate\"
                name=\"rate\"
                class=\"w-full px-3 py-2 mb-4 text-sm text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring focus:ring-blue-500 focus:border-blue-500\"
                placeholder=\"Rate\"
            >
            <input
                type=\"number\"
                id=\"pitch\"
                name=\"pitch\"
                class=\"w-full px-3 py-2 mb-4 text-sm text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring focus:ring-blue-500 focus:border-blue-500\"
                placeholder=\"Pitch\"
            >

            <button
                data-controller=\"speech\"
                ";
        // line 55
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusAction("speech", "speak", "click", ["text" => "Hi developers! Welcome to the PWA Bundle. This is a demo of the Speech Synthesis API.", "voice" => "Google English", "locale" => "en-US", "rate" => 1, "pitch" => 0.7]);
        // line 61
        yield "
            >Listen
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
        return "features-old/speech_synthesis.html.twig";
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
        return array (  168 => 61,  166 => 55,  115 => 6,  99 => 5,  70 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Speech synthesis{% endblock %}

{% block body %}
<turbo-frame id=\"content\">
    <section class=\"bg-white dark:bg-gray-900\">
        <div class=\"py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 \">
            <h2 class=\"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white\">
                Speech synthesis
            </h2>
            <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                Click on the button below to hear a synthesized voice.
            </p>
            <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                TO BE COMPLETED
            </p>
            <input
                type=\"text\"
                id=\"text\"
                name=\"text\"
                class=\"w-full px-3 py-2 mb-4 text-sm text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring focus:ring-blue-500 focus:border-blue-500\"
                placeholder=\"Enter text to speak\"
            >
            <select
                id=\"voice\"
                name=\"voice\"
                class=\"w-full px-3 py-2 mb-4 text-sm text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring focus:ring-blue-500 focus:border-blue-500\"
            >
                <option value=\"Google français\">Google français</option>
            </select>
            <select
                id=\"locale\"
                name=\"locale\"
                class=\"w-full px-3 py-2 mb-4 text-sm text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring focus:ring-blue-500 focus:border-blue-500\"
            >
            </select>
            <input
                type=\"number\"
                id=\"rate\"
                name=\"rate\"
                class=\"w-full px-3 py-2 mb-4 text-sm text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring focus:ring-blue-500 focus:border-blue-500\"
                placeholder=\"Rate\"
            >
            <input
                type=\"number\"
                id=\"pitch\"
                name=\"pitch\"
                class=\"w-full px-3 py-2 mb-4 text-sm text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring focus:ring-blue-500 focus:border-blue-500\"
                placeholder=\"Pitch\"
            >

            <button
                data-controller=\"speech\"
                {{ stimulus_action('speech', 'speak', 'click', {
                    text: 'Hi developers! Welcome to the PWA Bundle. This is a demo of the Speech Synthesis API.',
                    voice: 'Google English',
                    locale: 'en-US',
                    rate: 1,
                    pitch: 0.7
                }) }}
            >Listen
            </button>
        </div>
    </section>
</turbo-frame>
{% endblock %}
", "features-old/speech_synthesis.html.twig", "/Users/praveenmujawdiya/Documents/survos/pwa-f7/templates/features-old/speech_synthesis.html.twig");
    }
}
