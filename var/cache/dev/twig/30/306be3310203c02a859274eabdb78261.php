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

/* features-old/screen_capture.html.twig */
class __TwigTemplate_849515ed26223a8ae054dc0b572cd4c4 extends Template
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
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/screen_capture.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/screen_capture.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/screen_capture.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "features-old/screen_capture.html.twig", 1);
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

        yield "Screen capture";
        
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
                Screen capture
            </h2>
            <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                With the Screen Capture API, you can capture the screen, stream it to a video element, and download it. <br>
                The PWA Screen Capture controller provides a simple way to do this.
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
                >
                    ";
        // line 29
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "ix:video-camera-record-filled", "class" => "w-3.5 h-3.5 me-2", "fill" => "currentColor"]);
        yield "
                    Capture now!
                </button>
                <button
                    class=\"text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800\"
                    data-action=\"click->pwa--capture#stop\"
                >
                    ";
        // line 36
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
        // line 46
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
            <h2 class=\"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white\">
                Code example
            </h2>
            ";
        // line 58
        $context["button"] = "<button
    data-action=\"click->pwa--capture#capture\"
>
    Start the capture
</button>";
        // line 63
        yield "            <pre><code class=\"language-twig\" data-controller=\"code\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 63, $this->source); })()), "html");
        yield "</code></pre>
            <p class=\"mt-3 mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                On compatible browsers, when the button is clicked the user will be asked to select the screen to capture. <br>
                It can be a browser tab, a specific application or an entire screen.
            </p>
            ";
        // line 68
        $context["button"] = "<video
    data-pwa--capture-target=\"destination\"
    width=\"800\" height=\"600\" class=\"mx-auto\"
    autoplay playsinline
>
</video>";
        // line 74
        yield "            <pre><code class=\"language-twig\" data-controller=\"code\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 74, $this->source); })()), "html");
        yield "</code></pre>
            <p class=\"mt-3 mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                To show the captured screen, you can use the code above. <br>
                The video element will be automatically displayed and updated with the captured screen.
            </p>
            ";
        // line 79
        $context["button"] = "<a
    hidden=\"hidden\"
    data-pwa--capture-target=\"download\"
    href=\"#\" download=\"capture.mp4\"
>
    Download the capture
</a>";
        // line 86
        yield "            <pre><code class=\"language-twig\" data-controller=\"code\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 86, $this->source); })()), "html");
        yield "</code></pre>
            <p class=\"mt-3 mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                To download the captured screen, you can use the code above. <br>
                The download link will be automatically displayed and updated with the captured screen.
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
        return "features-old/screen_capture.html.twig";
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
        return array (  217 => 86,  209 => 79,  200 => 74,  193 => 68,  184 => 63,  178 => 58,  163 => 46,  150 => 36,  140 => 29,  115 => 6,  99 => 5,  70 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Screen capture{% endblock %}

{% block body %}
<turbo-frame id=\"content\">
    <section
        data-controller=\"pwa--capture\"
        class=\"bg-white dark:bg-gray-900\"
    >
        <div class=\"py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 \">
            <h2 class=\"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white\">
                Screen capture
            </h2>
            <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                With the Screen Capture API, you can capture the screen, stream it to a video element, and download it. <br>
                The PWA Screen Capture controller provides a simple way to do this.
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
            <h2 class=\"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white\">
                Code example
            </h2>
            {% set button = '<button
    data-action=\"click->pwa--capture#capture\"
>
    Start the capture
</button>' %}
            <pre><code class=\"language-twig\" data-controller=\"code\">{{ button|escape('html')|raw }}</code></pre>
            <p class=\"mt-3 mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                On compatible browsers, when the button is clicked the user will be asked to select the screen to capture. <br>
                It can be a browser tab, a specific application or an entire screen.
            </p>
            {% set button = '<video
    data-pwa--capture-target=\"destination\"
    width=\"800\" height=\"600\" class=\"mx-auto\"
    autoplay playsinline
>
</video>' %}
            <pre><code class=\"language-twig\" data-controller=\"code\">{{ button|escape('html')|raw }}</code></pre>
            <p class=\"mt-3 mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                To show the captured screen, you can use the code above. <br>
                The video element will be automatically displayed and updated with the captured screen.
            </p>
            {% set button = '<a
    hidden=\"hidden\"
    data-pwa--capture-target=\"download\"
    href=\"#\" download=\"capture.mp4\"
>
    Download the capture
</a>' %}
            <pre><code class=\"language-twig\" data-controller=\"code\">{{ button|escape('html')|raw }}</code></pre>
            <p class=\"mt-3 mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                To download the captured screen, you can use the code above. <br>
                The download link will be automatically displayed and updated with the captured screen.
            </p>
        </div>
    </section>
</turbo-frame>
{% endblock %}
", "features-old/screen_capture.html.twig", "/Users/praveenmujawdiya/Documents/survos/pwa-f7/templates/features-old/screen_capture.html.twig");
    }
}
