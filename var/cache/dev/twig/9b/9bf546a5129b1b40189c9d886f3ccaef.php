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

/* features-old/view_transition.html.twig */
class __TwigTemplate_5163c164d52fe818ec563b3e2ba7f70c extends Template
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
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/view_transition.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/view_transition.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/view_transition.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "features-old/view_transition.html.twig", 1);
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

        yield "View transition";
        
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
                View transition
            </h2>
            <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                🎉 When you install Symfony UX Turbo, it comes with Turbo 8 that supports view transitions. <br>
                You just have to ensure the following meta tag is present on each page.
            </p>
                ";
        // line 16
        $context["meta"] = "<meta name=\"view-transition\" content=\"same-origin\" />";
        // line 17
        yield "            <pre><code class=\"language-twig\" data-controller=\"code\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 17, $this->source); })()), "html");
        yield "</code></pre>
            <p class=\"mt-3 mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                Next, update your CSS to customize the transition.

            </p>
            <h2 class=\"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white\">
                References
            </h2>
            <ul>
                <li>";
        // line 26
        $_v0 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v0->preRender("Link", Twig\Extension\CoreExtension::toArray(["target" => "_blank", "rel" => "noopener noreferrer nofollow", "href" => "https://symfony.com/bundles/ux-turbo/current/index.html"]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v0->startEmbedComponent("Link", Twig\Extension\CoreExtension::toArray(["target" => "_blank", "rel" => "noopener noreferrer nofollow", "href" => "https://symfony.com/bundles/ux-turbo/current/index.html"]), $context, "features-old/view_transition.html.twig", 27472921101);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 27472921101);
            $this->loadTemplate("features-old/view_transition.html.twig", "features-old/view_transition.html.twig", 26, "27472921101")->display($embeddedContext, $embeddedBlocks);
            $_v0->finishEmbedComponent();
        }
        yield "</li>
                <li>";
        // line 27
        $_v1 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v1->preRender("Link", Twig\Extension\CoreExtension::toArray(["target" => "_blank", "rel" => "noopener noreferrer nofollow", "href" => "https://turbo.hotwired.dev/handbook/drive#view-transitions"]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v1->startEmbedComponent("Link", Twig\Extension\CoreExtension::toArray(["target" => "_blank", "rel" => "noopener noreferrer nofollow", "href" => "https://turbo.hotwired.dev/handbook/drive#view-transitions"]), $context, "features-old/view_transition.html.twig", 35698384241);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 35698384241);
            $this->loadTemplate("features-old/view_transition.html.twig", "features-old/view_transition.html.twig", 27, "35698384241")->display($embeddedContext, $embeddedBlocks);
            $_v1->finishEmbedComponent();
        }
        yield "</li>
                <li>";
        // line 28
        $_v2 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v2->preRender("Link", Twig\Extension\CoreExtension::toArray(["target" => "_blank", "rel" => "noopener noreferrer nofollow", "href" => "https://youtu.be/gdePV0Beihg?si=86BaqHtXNSHLoLGC"]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v2->startEmbedComponent("Link", Twig\Extension\CoreExtension::toArray(["target" => "_blank", "rel" => "noopener noreferrer nofollow", "href" => "https://youtu.be/gdePV0Beihg?si=86BaqHtXNSHLoLGC"]), $context, "features-old/view_transition.html.twig", 11487449051);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 11487449051);
            $this->loadTemplate("features-old/view_transition.html.twig", "features-old/view_transition.html.twig", 28, "11487449051")->display($embeddedContext, $embeddedBlocks);
            $_v2->finishEmbedComponent();
        }
        yield "</li>
            </ul>
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
        return "features-old/view_transition.html.twig";
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
        return array (  174 => 28,  158 => 27,  142 => 26,  129 => 17,  127 => 16,  115 => 6,  99 => 5,  70 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}View transition{% endblock %}

{% block body %}
<turbo-frame id=\"content\">
    <section class=\"bg-white dark:bg-gray-900\">
        <div class=\"py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 \">
            <h2 class=\"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white\">
                View transition
            </h2>
            <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                🎉 When you install Symfony UX Turbo, it comes with Turbo 8 that supports view transitions. <br>
                You just have to ensure the following meta tag is present on each page.
            </p>
                {% set meta = '<meta name=\"view-transition\" content=\"same-origin\" />' %}
            <pre><code class=\"language-twig\" data-controller=\"code\">{{ meta|escape('html')|raw }}</code></pre>
            <p class=\"mt-3 mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                Next, update your CSS to customize the transition.

            </p>
            <h2 class=\"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white\">
                References
            </h2>
            <ul>
                <li>{% component 'Link' with { target: '_blank', rel: 'noopener noreferrer nofollow', href: 'https://symfony.com/bundles/ux-turbo/current/index.html' } %}{% block content %}Symfony UX Turbo{% endblock %}{% endcomponent %}</li>
                <li>{% component 'Link' with { target: '_blank', rel: 'noopener noreferrer nofollow', href: 'https://turbo.hotwired.dev/handbook/drive#view-transitions' } %}{% block content %}Hotwire Turbo documentation{% endblock %}{% endcomponent %}</li>
                <li>{% component 'Link' with { target: '_blank', rel: 'noopener noreferrer nofollow', href: 'https://youtu.be/gdePV0Beihg?si=86BaqHtXNSHLoLGC' } %}{% block content %}Digging into View Transitions with Turbo 8 and Rails{% endblock %}{% endcomponent %}</li>
            </ul>
        </div>
    </section>
</turbo-frame>
{% endblock %}
", "features-old/view_transition.html.twig", "/Users/praveenmujawdiya/Documents/survos/pwa-f7/templates/features-old/view_transition.html.twig");
    }
}


/* features-old/view_transition.html.twig */
class __TwigTemplate_5163c164d52fe818ec563b3e2ba7f70c___27472921101 extends Template
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
        // line 26
        return $this->loadTemplate((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 26, $this->source); })()), "features-old/view_transition.html.twig", 26);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ba1c37b184061724dbe82aef62fe32a3 = $this->extensions["Inspector\\Symfony\\Bundle\\Twig\\TwigTracer"];
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/view_transition.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/view_transition.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/view_transition.html.twig"));

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

        yield "Symfony UX Turbo";
        
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
        return "features-old/view_transition.html.twig";
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
        return array (  293 => 26,  174 => 28,  158 => 27,  142 => 26,  129 => 17,  127 => 16,  115 => 6,  99 => 5,  70 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}View transition{% endblock %}

{% block body %}
<turbo-frame id=\"content\">
    <section class=\"bg-white dark:bg-gray-900\">
        <div class=\"py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 \">
            <h2 class=\"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white\">
                View transition
            </h2>
            <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                🎉 When you install Symfony UX Turbo, it comes with Turbo 8 that supports view transitions. <br>
                You just have to ensure the following meta tag is present on each page.
            </p>
                {% set meta = '<meta name=\"view-transition\" content=\"same-origin\" />' %}
            <pre><code class=\"language-twig\" data-controller=\"code\">{{ meta|escape('html')|raw }}</code></pre>
            <p class=\"mt-3 mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                Next, update your CSS to customize the transition.

            </p>
            <h2 class=\"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white\">
                References
            </h2>
            <ul>
                <li>{% component 'Link' with { target: '_blank', rel: 'noopener noreferrer nofollow', href: 'https://symfony.com/bundles/ux-turbo/current/index.html' } %}{% block content %}Symfony UX Turbo{% endblock %}{% endcomponent %}</li>
                <li>{% component 'Link' with { target: '_blank', rel: 'noopener noreferrer nofollow', href: 'https://turbo.hotwired.dev/handbook/drive#view-transitions' } %}{% block content %}Hotwire Turbo documentation{% endblock %}{% endcomponent %}</li>
                <li>{% component 'Link' with { target: '_blank', rel: 'noopener noreferrer nofollow', href: 'https://youtu.be/gdePV0Beihg?si=86BaqHtXNSHLoLGC' } %}{% block content %}Digging into View Transitions with Turbo 8 and Rails{% endblock %}{% endcomponent %}</li>
            </ul>
        </div>
    </section>
</turbo-frame>
{% endblock %}
", "features-old/view_transition.html.twig", "/Users/praveenmujawdiya/Documents/survos/pwa-f7/templates/features-old/view_transition.html.twig");
    }
}


/* features-old/view_transition.html.twig */
class __TwigTemplate_5163c164d52fe818ec563b3e2ba7f70c___35698384241 extends Template
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
        // line 27
        return $this->loadTemplate((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 27, $this->source); })()), "features-old/view_transition.html.twig", 27);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ba1c37b184061724dbe82aef62fe32a3 = $this->extensions["Inspector\\Symfony\\Bundle\\Twig\\TwigTracer"];
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/view_transition.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/view_transition.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/view_transition.html.twig"));

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

        yield "Hotwire Turbo documentation";
        
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
        return "features-old/view_transition.html.twig";
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
        return array (  463 => 27,  293 => 26,  174 => 28,  158 => 27,  142 => 26,  129 => 17,  127 => 16,  115 => 6,  99 => 5,  70 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}View transition{% endblock %}

{% block body %}
<turbo-frame id=\"content\">
    <section class=\"bg-white dark:bg-gray-900\">
        <div class=\"py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 \">
            <h2 class=\"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white\">
                View transition
            </h2>
            <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                🎉 When you install Symfony UX Turbo, it comes with Turbo 8 that supports view transitions. <br>
                You just have to ensure the following meta tag is present on each page.
            </p>
                {% set meta = '<meta name=\"view-transition\" content=\"same-origin\" />' %}
            <pre><code class=\"language-twig\" data-controller=\"code\">{{ meta|escape('html')|raw }}</code></pre>
            <p class=\"mt-3 mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                Next, update your CSS to customize the transition.

            </p>
            <h2 class=\"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white\">
                References
            </h2>
            <ul>
                <li>{% component 'Link' with { target: '_blank', rel: 'noopener noreferrer nofollow', href: 'https://symfony.com/bundles/ux-turbo/current/index.html' } %}{% block content %}Symfony UX Turbo{% endblock %}{% endcomponent %}</li>
                <li>{% component 'Link' with { target: '_blank', rel: 'noopener noreferrer nofollow', href: 'https://turbo.hotwired.dev/handbook/drive#view-transitions' } %}{% block content %}Hotwire Turbo documentation{% endblock %}{% endcomponent %}</li>
                <li>{% component 'Link' with { target: '_blank', rel: 'noopener noreferrer nofollow', href: 'https://youtu.be/gdePV0Beihg?si=86BaqHtXNSHLoLGC' } %}{% block content %}Digging into View Transitions with Turbo 8 and Rails{% endblock %}{% endcomponent %}</li>
            </ul>
        </div>
    </section>
</turbo-frame>
{% endblock %}
", "features-old/view_transition.html.twig", "/Users/praveenmujawdiya/Documents/survos/pwa-f7/templates/features-old/view_transition.html.twig");
    }
}


/* features-old/view_transition.html.twig */
class __TwigTemplate_5163c164d52fe818ec563b3e2ba7f70c___11487449051 extends Template
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
        // line 28
        return $this->loadTemplate((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 28, $this->source); })()), "features-old/view_transition.html.twig", 28);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ba1c37b184061724dbe82aef62fe32a3 = $this->extensions["Inspector\\Symfony\\Bundle\\Twig\\TwigTracer"];
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/view_transition.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/view_transition.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "features-old/view_transition.html.twig"));

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

        yield "Digging into View Transitions with Turbo 8 and Rails";
        
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
        return "features-old/view_transition.html.twig";
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
        return array (  633 => 28,  463 => 27,  293 => 26,  174 => 28,  158 => 27,  142 => 26,  129 => 17,  127 => 16,  115 => 6,  99 => 5,  70 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}View transition{% endblock %}

{% block body %}
<turbo-frame id=\"content\">
    <section class=\"bg-white dark:bg-gray-900\">
        <div class=\"py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 \">
            <h2 class=\"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white\">
                View transition
            </h2>
            <p class=\"mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                🎉 When you install Symfony UX Turbo, it comes with Turbo 8 that supports view transitions. <br>
                You just have to ensure the following meta tag is present on each page.
            </p>
                {% set meta = '<meta name=\"view-transition\" content=\"same-origin\" />' %}
            <pre><code class=\"language-twig\" data-controller=\"code\">{{ meta|escape('html')|raw }}</code></pre>
            <p class=\"mt-3 mb-3 font-light text-gray-500 dark:text-gray-400 sm:text-xl\">
                Next, update your CSS to customize the transition.

            </p>
            <h2 class=\"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white\">
                References
            </h2>
            <ul>
                <li>{% component 'Link' with { target: '_blank', rel: 'noopener noreferrer nofollow', href: 'https://symfony.com/bundles/ux-turbo/current/index.html' } %}{% block content %}Symfony UX Turbo{% endblock %}{% endcomponent %}</li>
                <li>{% component 'Link' with { target: '_blank', rel: 'noopener noreferrer nofollow', href: 'https://turbo.hotwired.dev/handbook/drive#view-transitions' } %}{% block content %}Hotwire Turbo documentation{% endblock %}{% endcomponent %}</li>
                <li>{% component 'Link' with { target: '_blank', rel: 'noopener noreferrer nofollow', href: 'https://youtu.be/gdePV0Beihg?si=86BaqHtXNSHLoLGC' } %}{% block content %}Digging into View Transitions with Turbo 8 and Rails{% endblock %}{% endcomponent %}</li>
            </ul>
        </div>
    </section>
</turbo-frame>
{% endblock %}
", "features-old/view_transition.html.twig", "/Users/praveenmujawdiya/Documents/survos/pwa-f7/templates/features-old/view_transition.html.twig");
    }
}
