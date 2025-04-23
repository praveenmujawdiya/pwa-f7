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

/* components/Geolocation.html.twig */
class __TwigTemplate_dca44efc91e8d822e914d5a86307ab96 extends Template
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
        $__internal_ba1c37b184061724dbe82aef62fe32a3 = $this->extensions["Inspector\\Symfony\\Bundle\\Twig\\TwigTracer"];
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Geolocation.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Geolocation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Geolocation.html.twig"));

        // line 1
        yield "<div
    data-controller=\"pwa--geolocation live\"
    ";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 3, $this->source); })()), "html", null, true);
        yield "
    class=\"rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800 bg-gray-50 hover:bg-gray-100\"
>
        <button
            data-action=\"click->pwa--geolocation#watch\"
            data-pwa--geolocation-enable-high-accuracy-param=true
            data-pwa--geolocation-maximum-age-param=500
            data-pwa--geolocation-timeout-param=1000
            class=\"text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800\"
        >
            Tell me where I am
        </button>
        <dl>
            <dt class=\"font-medium text-gray-500 dark:text-gray-400\">Latitude</dt>
            <dd class=\"text-gray-900 dark:text-white\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 17, $this->source); })()), "latitude", [], "any", false, false, false, 17), "html", null, true);
        yield "</dd>
            <dt class=\"font-medium text-gray-500 dark:text-gray-400\">Longitude</dt>
            <dd class=\"text-gray-900 dark:text-white\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 19, $this->source); })()), "longitude", [], "any", false, false, false, 19), "html", null, true);
        yield "</dd>
        </dl>
        ";
        // line 21
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:map", ["center" => [CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 21, $this->source); })()), "latitude", [], "any", false, false, false, 21), CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 21, $this->source); })()), "longitude", [], "any", false, false, false, 21)], "zoom" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 21, $this->source); })()), "zoom", [], "any", false, false, false, 21), "class" => "w-full h-96 mt-4", "markers" => [["position" => [CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 21, $this->source); })()), "latitude", [], "any", false, false, false, 21), CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 21, $this->source); })()), "longitude", [], "any", false, false, false, 21)], "title" => "Your location"]]]);
        yield "
</div>
";
        
        $__internal_ba1c37b184061724dbe82aef62fe32a3->leave($__internal_ba1c37b184061724dbe82aef62fe32a3_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/Geolocation.html.twig";
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
        return array (  82 => 21,  77 => 19,  72 => 17,  55 => 3,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div
    data-controller=\"pwa--geolocation live\"
    {{ attributes }}
    class=\"rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800 bg-gray-50 hover:bg-gray-100\"
>
        <button
            data-action=\"click->pwa--geolocation#watch\"
            data-pwa--geolocation-enable-high-accuracy-param=true
            data-pwa--geolocation-maximum-age-param=500
            data-pwa--geolocation-timeout-param=1000
            class=\"text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800\"
        >
            Tell me where I am
        </button>
        <dl>
            <dt class=\"font-medium text-gray-500 dark:text-gray-400\">Latitude</dt>
            <dd class=\"text-gray-900 dark:text-white\">{{ this.latitude }}</dd>
            <dt class=\"font-medium text-gray-500 dark:text-gray-400\">Longitude</dt>
            <dd class=\"text-gray-900 dark:text-white\">{{ this.longitude }}</dd>
        </dl>
        {{ component('ux:map', { center: [this.latitude, this.longitude], zoom: this.zoom, class: 'w-full h-96 mt-4', markers: [{\"position\": [this.latitude, this.longitude], \"title\": \"Your location\"}] }) }}
</div>
", "components/Geolocation.html.twig", "/Users/praveenmujawdiya/Documents/survos/pwa-f7/templates/components/Geolocation.html.twig");
    }
}
