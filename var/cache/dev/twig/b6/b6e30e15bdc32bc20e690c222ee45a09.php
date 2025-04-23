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

/* components/DeviceOrientation.html.twig */
class __TwigTemplate_329f5fe8170914197e09c644ac5f4576 extends Template
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
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/DeviceOrientation.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/DeviceOrientation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/DeviceOrientation.html.twig"));

        // line 1
        yield "<div";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "html", null, true);
        yield " class=\"p-6\">
    <div
        data-controller=\"pwa--device-orientation orientation\"
        data-pwa--device-orientation-throttle-value=\"25\"
    ";
        // line 5
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusAction("orientation", "update", "pwa--device-orientation:pwa:device:orientation");
        yield "
    >
    <dl>
        <dt id=\"alpha\" class=\"font-medium text-gray-500 dark:text-gray-400\">Alpha</dt>
        <dd class=\"text-gray-900 dark:text-white\" ";
        // line 9
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget("orientation", "alpha");
        yield ">--</dd>
        <dt id=\"beta\" class=\"font-medium text-gray-500 dark:text-gray-400\">Beta</dt>
        <dd class=\"text-gray-900 dark:text-white\" ";
        // line 11
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget("orientation", "beta");
        yield ">--</dd>
        <dt id=\"gamma\" class=\"font-medium text-gray-500 dark:text-gray-400\">Gamma</dt>
        <dd class=\"text-gray-900 dark:text-white\" ";
        // line 13
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget("orientation", "gamma");
        yield ">--</dd>
    </dl>
    <canvas ";
        // line 15
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget("orientation", "canvas");
        yield " id=\"myCanvas\" class=\"w-full h-96\">
        Your browser does not support the HTML canvas element.
    </canvas>
    </div>
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
        return "components/DeviceOrientation.html.twig";
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
        return array (  81 => 15,  76 => 13,  71 => 11,  66 => 9,  59 => 5,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div{{ attributes }} class=\"p-6\">
    <div
        data-controller=\"pwa--device-orientation orientation\"
        data-pwa--device-orientation-throttle-value=\"25\"
    {{ stimulus_action('orientation', 'update', 'pwa--device-orientation:pwa:device:orientation') }}
    >
    <dl>
        <dt id=\"alpha\" class=\"font-medium text-gray-500 dark:text-gray-400\">Alpha</dt>
        <dd class=\"text-gray-900 dark:text-white\" {{ stimulus_target('orientation', 'alpha') }}>--</dd>
        <dt id=\"beta\" class=\"font-medium text-gray-500 dark:text-gray-400\">Beta</dt>
        <dd class=\"text-gray-900 dark:text-white\" {{ stimulus_target('orientation', 'beta') }}>--</dd>
        <dt id=\"gamma\" class=\"font-medium text-gray-500 dark:text-gray-400\">Gamma</dt>
        <dd class=\"text-gray-900 dark:text-white\" {{ stimulus_target('orientation', 'gamma') }}>--</dd>
    </dl>
    <canvas {{ stimulus_target('orientation', 'canvas') }} id=\"myCanvas\" class=\"w-full h-96\">
        Your browser does not support the HTML canvas element.
    </canvas>
    </div>
</div>
", "components/DeviceOrientation.html.twig", "/Users/praveenmujawdiya/Documents/survos/pwa-f7/templates/components/DeviceOrientation.html.twig");
    }
}
