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

/* features-old/element_capture.html.twig */
class __TwigTemplate_413c140601acef64c4ee98052cd7aabc extends Template
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
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/element_capture.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/element_capture.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/element_capture.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "features-old/element_capture.html.twig", 1);
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

        yield "Element capture";
        
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
    <section
        data-controller=\"pwa--capture\"
        class=\"bg-white dark:bg-gray-900\"
    >
        <div class=\"py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 \">
            <h2 class=\"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white\">
                Element capture
            </h2>
            <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                The Element Capture is very similar to the ";
        // line 16
        $_v0 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v0->preRender("Link", Twig\Extension\CoreExtension::toArray(["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_screen_capture")]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v0->startEmbedComponent("Link", Twig\Extension\CoreExtension::toArray(["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_screen_capture")]), $context, "features-old/element_capture.html.twig", 34944768801);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 34944768801);
            $this->loadTemplate("features-old/element_capture.html.twig", "features-old/element_capture.html.twig", 16, "34944768801")->display($embeddedContext, $embeddedBlocks);
            $_v0->finishEmbedComponent();
        }
        yield ".<br>
                The difference is that you can capture a specific DOM element on a tab instead of the tab or the entire screen.
            </p>
            <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                It is important to note that the Element Capture feature is only available when sharing the current screen
                and with a unique target region or element.
            </p>
            <h2 class=\"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white\">
                Demo
            </h2>
            <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                <button
                    class=\"text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800\"
                    data-action=\"click->pwa--capture#capture\"
                    data-pwa--capture-video-constraints-param=\"{&quot;width&quot;:{&quot;ideal&quot;:3440,&quot;max&quot;:3440},&quot;height&quot;:{&quot;ideal&quot;:1440},&quot;frameRate&quot;:{&quot;max&quot;:60}}\"
                    data-pwa--capture-audio-constraints-param=\"true\"
                    data-pwa--capture-prefer-current-tab-param=\"true\"
                >
                    ";
        // line 34
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "ix:video-camera-record-filled", "class" => "w-3.5 h-3.5 me-2", "fill" => "currentColor"]);
        yield "
                    Capture now!
                </button>
                <button
                    class=\"text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800\"
                    data-action=\"click->pwa--capture#stop\"
                >
                    ";
        // line 41
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "material-symbols:stop-circle-outline-rounded", "class" => "w-3.5 h-3.5 me-2", "fill" => "currentColor"]);
        yield "
                    Stop!
                </button>
            </p>
            <a
                hidden=\"hidden\"
                class=\"text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800\"
                data-pwa--capture-target=\"download\"
                href=\"#\" download=\"capture.mp4\"
            >
                ";
        // line 51
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "fa6-solid:download", "class" => "w-3.5 h-3.5 me-2", "fill" => "currentColor"]);
        yield "
                Download
            </a>
            <video
                hidden=\"hidden\"
                data-pwa--capture-target=\"destination\"
                autoplay playsinline
            >
            </video>
            <section class=\"capture\" data-pwa--capture-target=\"region\">
                <label for=\"element-capture\" class=\"block mb-2 text-sm font-medium text-gray-900 dark:text-white\">Captured area</label>
                <textarea
                    id=\"element-capture\"
                    class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\"
                    placeholder=\"Write your thoughts here...\"
                    rows=\"15\"
                ></textarea>
            </section>
            <h2 class=\"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white\">
                Code example
            </h2>
            ";
        // line 72
        $context["button"] = "<button
    data-action=\"click->pwa--capture#capture\"
    data-pwa--capture-prefer-current-tab-param=\"true\"
>
    Start the capture
</button>
<section data-pwa--capture-target=\"region\">
    <label for=\"element-capture\" class=\"block mb-2 text-sm font-medium text-gray-900 dark:text-white\">Captured area</label>
    <textarea
        id=\"element-capture\"
        class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\"
        placeholder=\"Write your thoughts here...\"
        rows=\"15\"
    ></textarea>
</section>";
        // line 87
        yield "            <pre><code class=\"language-twig\" data-controller=\"code\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 87, $this->source); })()), "html");
        yield "</code></pre>
            <p class=\"mt-3 mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                On compatible browsers, when the button is clicked the user will be asked to select the screen to capture. <br>
                It can be a browser tab, a specific application or an entire screen.
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
        return "features-old/element_capture.html.twig";
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
        return array (  223 => 87,  207 => 72,  183 => 51,  170 => 41,  160 => 34,  127 => 16,  115 => 6,  99 => 5,  70 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Element capture{% endblock %}

{% block body %}
<turbo-frame id=\"content\">
    <section
        data-controller=\"pwa--capture\"
        class=\"bg-white dark:bg-gray-900\"
    >
        <div class=\"py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 \">
            <h2 class=\"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white\">
                Element capture
            </h2>
            <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                The Element Capture is very similar to the {% component 'Link' with { href: (path('app_feature_screen_capture')) } %}{% block content %}Screen Capture feature{% endblock %}{% endcomponent %}.<br>
                The difference is that you can capture a specific DOM element on a tab instead of the tab or the entire screen.
            </p>
            <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                It is important to note that the Element Capture feature is only available when sharing the current screen
                and with a unique target region or element.
            </p>
            <h2 class=\"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white\">
                Demo
            </h2>
            <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                <button
                    class=\"text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800\"
                    data-action=\"click->pwa--capture#capture\"
                    data-pwa--capture-video-constraints-param=\"{&quot;width&quot;:{&quot;ideal&quot;:3440,&quot;max&quot;:3440},&quot;height&quot;:{&quot;ideal&quot;:1440},&quot;frameRate&quot;:{&quot;max&quot;:60}}\"
                    data-pwa--capture-audio-constraints-param=\"true\"
                    data-pwa--capture-prefer-current-tab-param=\"true\"
                >
                    {{ component('ux:icon', { name: 'ix:video-camera-record-filled', class: 'w-3.5 h-3.5 me-2', fill: 'currentColor' }) }}
                    Capture now!
                </button>
                <button
                    class=\"text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800\"
                    data-action=\"click->pwa--capture#stop\"
                >
                    {{ component('ux:icon', { name: 'material-symbols:stop-circle-outline-rounded', class: 'w-3.5 h-3.5 me-2', fill: 'currentColor' }) }}
                    Stop!
                </button>
            </p>
            <a
                hidden=\"hidden\"
                class=\"text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800\"
                data-pwa--capture-target=\"download\"
                href=\"#\" download=\"capture.mp4\"
            >
                {{ component('ux:icon', { name: 'fa6-solid:download', class: 'w-3.5 h-3.5 me-2', fill: 'currentColor' }) }}
                Download
            </a>
            <video
                hidden=\"hidden\"
                data-pwa--capture-target=\"destination\"
                autoplay playsinline
            >
            </video>
            <section class=\"capture\" data-pwa--capture-target=\"region\">
                <label for=\"element-capture\" class=\"block mb-2 text-sm font-medium text-gray-900 dark:text-white\">Captured area</label>
                <textarea
                    id=\"element-capture\"
                    class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\"
                    placeholder=\"Write your thoughts here...\"
                    rows=\"15\"
                ></textarea>
            </section>
            <h2 class=\"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white\">
                Code example
            </h2>
            {% set button = '<button
    data-action=\"click->pwa--capture#capture\"
    data-pwa--capture-prefer-current-tab-param=\"true\"
>
    Start the capture
</button>
<section data-pwa--capture-target=\"region\">
    <label for=\"element-capture\" class=\"block mb-2 text-sm font-medium text-gray-900 dark:text-white\">Captured area</label>
    <textarea
        id=\"element-capture\"
        class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\"
        placeholder=\"Write your thoughts here...\"
        rows=\"15\"
    ></textarea>
</section>' %}
            <pre><code class=\"language-twig\" data-controller=\"code\">{{ button|escape('html')|raw }}</code></pre>
            <p class=\"mt-3 mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                On compatible browsers, when the button is clicked the user will be asked to select the screen to capture. <br>
                It can be a browser tab, a specific application or an entire screen.
            </p>
        </div>
    </section>
</turbo-frame>
{% endblock %}
", "features-old/element_capture.html.twig", "/Users/praveenmujawdiya/Documents/survos/pwa-f7/templates/features-old/element_capture.html.twig");
    }
}


/* features-old/element_capture.html.twig */
class __TwigTemplate_413c140601acef64c4ee98052cd7aabc___34944768801 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 16
        return $this->loadTemplate((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 16, $this->source); })()), "features-old/element_capture.html.twig", 16);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ba1c37b184061724dbe82aef62fe32a3 = $this->extensions["Inspector\\Symfony\\Bundle\\Twig\\TwigTracer"];
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/element_capture.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/element_capture.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/element_capture.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba1c37b184061724dbe82aef62fe32a3->leave($__internal_ba1c37b184061724dbe82aef62fe32a3_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ba1c37b184061724dbe82aef62fe32a3 = $this->extensions["Inspector\\Symfony\\Bundle\\Twig\\TwigTracer"];
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_ba1c37b184061724dbe82aef62fe32a3->leave($__internal_ba1c37b184061724dbe82aef62fe32a3_prof);

        yield from [];
    }

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

        yield "Screen Capture feature";
        
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
        return "features-old/element_capture.html.twig";
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
        return array (  396 => 16,  223 => 87,  207 => 72,  183 => 51,  170 => 41,  160 => 34,  127 => 16,  115 => 6,  99 => 5,  70 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Element capture{% endblock %}

{% block body %}
<turbo-frame id=\"content\">
    <section
        data-controller=\"pwa--capture\"
        class=\"bg-white dark:bg-gray-900\"
    >
        <div class=\"py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 \">
            <h2 class=\"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white\">
                Element capture
            </h2>
            <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                The Element Capture is very similar to the {% component 'Link' with { href: (path('app_feature_screen_capture')) } %}{% block content %}Screen Capture feature{% endblock %}{% endcomponent %}.<br>
                The difference is that you can capture a specific DOM element on a tab instead of the tab or the entire screen.
            </p>
            <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                It is important to note that the Element Capture feature is only available when sharing the current screen
                and with a unique target region or element.
            </p>
            <h2 class=\"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white\">
                Demo
            </h2>
            <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                <button
                    class=\"text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800\"
                    data-action=\"click->pwa--capture#capture\"
                    data-pwa--capture-video-constraints-param=\"{&quot;width&quot;:{&quot;ideal&quot;:3440,&quot;max&quot;:3440},&quot;height&quot;:{&quot;ideal&quot;:1440},&quot;frameRate&quot;:{&quot;max&quot;:60}}\"
                    data-pwa--capture-audio-constraints-param=\"true\"
                    data-pwa--capture-prefer-current-tab-param=\"true\"
                >
                    {{ component('ux:icon', { name: 'ix:video-camera-record-filled', class: 'w-3.5 h-3.5 me-2', fill: 'currentColor' }) }}
                    Capture now!
                </button>
                <button
                    class=\"text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800\"
                    data-action=\"click->pwa--capture#stop\"
                >
                    {{ component('ux:icon', { name: 'material-symbols:stop-circle-outline-rounded', class: 'w-3.5 h-3.5 me-2', fill: 'currentColor' }) }}
                    Stop!
                </button>
            </p>
            <a
                hidden=\"hidden\"
                class=\"text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800\"
                data-pwa--capture-target=\"download\"
                href=\"#\" download=\"capture.mp4\"
            >
                {{ component('ux:icon', { name: 'fa6-solid:download', class: 'w-3.5 h-3.5 me-2', fill: 'currentColor' }) }}
                Download
            </a>
            <video
                hidden=\"hidden\"
                data-pwa--capture-target=\"destination\"
                autoplay playsinline
            >
            </video>
            <section class=\"capture\" data-pwa--capture-target=\"region\">
                <label for=\"element-capture\" class=\"block mb-2 text-sm font-medium text-gray-900 dark:text-white\">Captured area</label>
                <textarea
                    id=\"element-capture\"
                    class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\"
                    placeholder=\"Write your thoughts here...\"
                    rows=\"15\"
                ></textarea>
            </section>
            <h2 class=\"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white\">
                Code example
            </h2>
            {% set button = '<button
    data-action=\"click->pwa--capture#capture\"
    data-pwa--capture-prefer-current-tab-param=\"true\"
>
    Start the capture
</button>
<section data-pwa--capture-target=\"region\">
    <label for=\"element-capture\" class=\"block mb-2 text-sm font-medium text-gray-900 dark:text-white\">Captured area</label>
    <textarea
        id=\"element-capture\"
        class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\"
        placeholder=\"Write your thoughts here...\"
        rows=\"15\"
    ></textarea>
</section>' %}
            <pre><code class=\"language-twig\" data-controller=\"code\">{{ button|escape('html')|raw }}</code></pre>
            <p class=\"mt-3 mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                On compatible browsers, when the button is clicked the user will be asked to select the screen to capture. <br>
                It can be a browser tab, a specific application or an entire screen.
            </p>
        </div>
    </section>
</turbo-frame>
{% endblock %}
", "features-old/element_capture.html.twig", "/Users/praveenmujawdiya/Documents/survos/pwa-f7/templates/features-old/element_capture.html.twig");
    }
}
