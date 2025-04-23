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

/* features-old/picture_in_picture.html.twig */
class __TwigTemplate_6012f49d9a9898edbd2bcc5e0b190318 extends Template
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
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/picture_in_picture.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/picture_in_picture.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/picture_in_picture.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "features-old/picture_in_picture.html.twig", 1);
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

        yield "Picture in picture";
        
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
                Picture in picture
            </h2>
            <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                With the Picture-in-Picture API you can display an element in a floating window. <br>
                It is not limited to videos; you can use it for any DOM element.
            </p>
            <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                To use it, you need to add the <code>data-pwa--picture-in-picture-target=\"container\"</code> attribute to the container element.
                <br>
                If the container element has a child with the <code>data-pwa--picture-in-picture-target=\"floating\"</code> attribute,
                it will be displayed in the floating window. Otherwise, the first child will be used.
            </p>
            <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                If possible when the PIP window is closed, the floating element will be placed back in the container at the original position.
            </p>
            ";
        // line 25
        $context["button"] = "<div data-controller=\"pwa--picture-in-picture\">
    <button
        type=\"button\"
        class=\"text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800\"
        data-action=\"click->pwa--picture-in-picture#toggle\"
    >
        Toggle Picture-in-Picture
    </button>
    <div data-pwa--picture-in-picture-target=\"container\">
        <video class=\"w-full h-auto max-w-full\" controls data-pwa--picture-in-picture-target=\"floating\">
            <source src=\"...\" type=\"video/mp4\">
            Your browser does not support the video tag.
        </video>
    </div>
</div>";
        // line 40
        yield "            <pre><code class=\"language-twig\" data-controller=\"code\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 40, $this->source); })()), "html");
        yield "</code></pre>
            <div
                data-controller=\"pwa--picture-in-picture pip\"
                ";
        // line 43
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusAction("pip", "disabled", "pwa--picture-in-picture:pwa:pip:unsupported");
        yield "
            >
                <button
                    type=\"button\"
                    class=\"text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800\"
                    data-action=\"click->pwa--picture-in-picture#toggle\"
                >
                    Toggle Picture-in-Picture
                </button>
                <div class=\"rounded-md bg-yellow-50 p-4 hidden\" ";
        // line 52
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget("pip", "message");
        yield ">
                    <div class=\"flex\">
                        <div class=\"shrink-0\">
                            <svg class=\"size-5 text-yellow-400\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\" data-slot=\"icon\">
                                <path fill-rule=\"evenodd\" d=\"M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495ZM10 5a.75.75 0 0 1 .75.75v3.5a.75.75 0 0 1-1.5 0v-3.5A.75.75 0 0 1 10 5Zm0 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z\" clip-rule=\"evenodd\" />
                            </svg>
                        </div>
                        <div class=\"ml-3\">
                            <h3 class=\"text-sm font-medium text-yellow-800\">Not available</h3>
                            <div class=\"mt-2 text-sm text-yellow-700\">
                                <p>This feautre is not available on your platform or not granted.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-pwa--picture-in-picture-target=\"container\">
                    <video class=\"w-full h-auto max-w-full\" controls data-pwa--picture-in-picture-target=\"floating\">
                        <source src=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/BigBuckBunny.mp4"), "html", null, true);
        yield "\" type=\"video/mp4\">
                        Your browser does not support the video tag.
                    </video>
                </div>
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
        return "features-old/picture_in_picture.html.twig";
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
        return array (  191 => 69,  171 => 52,  159 => 43,  152 => 40,  136 => 25,  115 => 6,  99 => 5,  70 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Picture in picture{% endblock %}

{% block body %}
<turbo-frame id=\"content\">
    <section class=\"bg-white dark:bg-gray-900\">
        <div class=\"py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 \">
            <h2 class=\"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white\">
                Picture in picture
            </h2>
            <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                With the Picture-in-Picture API you can display an element in a floating window. <br>
                It is not limited to videos; you can use it for any DOM element.
            </p>
            <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                To use it, you need to add the <code>data-pwa--picture-in-picture-target=\"container\"</code> attribute to the container element.
                <br>
                If the container element has a child with the <code>data-pwa--picture-in-picture-target=\"floating\"</code> attribute,
                it will be displayed in the floating window. Otherwise, the first child will be used.
            </p>
            <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                If possible when the PIP window is closed, the floating element will be placed back in the container at the original position.
            </p>
            {% set button = '<div data-controller=\"pwa--picture-in-picture\">
    <button
        type=\"button\"
        class=\"text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800\"
        data-action=\"click->pwa--picture-in-picture#toggle\"
    >
        Toggle Picture-in-Picture
    </button>
    <div data-pwa--picture-in-picture-target=\"container\">
        <video class=\"w-full h-auto max-w-full\" controls data-pwa--picture-in-picture-target=\"floating\">
            <source src=\"...\" type=\"video/mp4\">
            Your browser does not support the video tag.
        </video>
    </div>
</div>' %}
            <pre><code class=\"language-twig\" data-controller=\"code\">{{ button|escape('html')|raw }}</code></pre>
            <div
                data-controller=\"pwa--picture-in-picture pip\"
                {{ stimulus_action('pip', 'disabled', 'pwa--picture-in-picture:pwa:pip:unsupported') }}
            >
                <button
                    type=\"button\"
                    class=\"text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800\"
                    data-action=\"click->pwa--picture-in-picture#toggle\"
                >
                    Toggle Picture-in-Picture
                </button>
                <div class=\"rounded-md bg-yellow-50 p-4 hidden\" {{ stimulus_target('pip', 'message')}}>
                    <div class=\"flex\">
                        <div class=\"shrink-0\">
                            <svg class=\"size-5 text-yellow-400\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\" data-slot=\"icon\">
                                <path fill-rule=\"evenodd\" d=\"M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495ZM10 5a.75.75 0 0 1 .75.75v3.5a.75.75 0 0 1-1.5 0v-3.5A.75.75 0 0 1 10 5Zm0 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z\" clip-rule=\"evenodd\" />
                            </svg>
                        </div>
                        <div class=\"ml-3\">
                            <h3 class=\"text-sm font-medium text-yellow-800\">Not available</h3>
                            <div class=\"mt-2 text-sm text-yellow-700\">
                                <p>This feautre is not available on your platform or not granted.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-pwa--picture-in-picture-target=\"container\">
                    <video class=\"w-full h-auto max-w-full\" controls data-pwa--picture-in-picture-target=\"floating\">
                        <source src=\"{{ asset('videos/BigBuckBunny.mp4') }}\" type=\"video/mp4\">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </section>
</turbo-frame>
{% endblock %}
", "features-old/picture_in_picture.html.twig", "/Users/praveenmujawdiya/Documents/survos/pwa-f7/templates/features-old/picture_in_picture.html.twig");
    }
}
