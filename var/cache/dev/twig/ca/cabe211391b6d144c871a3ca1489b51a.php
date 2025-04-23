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

/* components/DeviceMotion.html.twig */
class __TwigTemplate_7d690f686bf385d63f1e7647ae26b94c extends Template
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
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/DeviceMotion.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/DeviceMotion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/DeviceMotion.html.twig"));

        // line 1
        yield "<div";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "html", null, true);
        yield " class=\"p-6\">
    <div
        data-controller=\"pwa--device-motion motion\"
        ";
        // line 4
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusAction("motion", "update", "pwa--device-motion:pwa:device:motion");
        yield "
        ";
        // line 5
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusAction("motion", "disable", "pwa--device-motion:pwa:device:motion:unavailable");
        yield "
    >
        <div class=\"rounded-md bg-yellow-50 p-4 hidden\" ";
        // line 7
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget("motion", "message");
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
    <dl>
        <dt class=\"font-medium text-gray-500 dark:text-gray-400\">Acceleration</dt>
        <dd class=\"text-gray-900 dark:text-white\" ";
        // line 24
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget("motion", "acceleration");
        yield ">--</dd>
        <dt class=\"font-medium text-gray-500 dark:text-gray-400\">Acceleration with gravity</dt>
        <dd class=\"text-gray-900 dark:text-white\"";
        // line 26
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget("motion", "accelerationIncludingGravity");
        yield ">--</dd>
        <dt class=\"font-medium text-gray-500 dark:text-gray-400\">Rotation rate</dt>
        <dd class=\"text-gray-900 dark:text-white\"";
        // line 28
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget("motion", "rotationRate");
        yield ">--</dd>
        <dt class=\"font-medium text-gray-500 dark:text-gray-400\">Interval</dt>
        <dd class=\"text-gray-900 dark:text-white\"";
        // line 30
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget("motion", "interval");
        yield ">--</dd>
    </dl>
    <canvas ";
        // line 32
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget("motion", "canvas");
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
        return "components/DeviceMotion.html.twig";
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
        return array (  107 => 32,  102 => 30,  97 => 28,  92 => 26,  87 => 24,  67 => 7,  62 => 5,  58 => 4,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div{{ attributes }} class=\"p-6\">
    <div
        data-controller=\"pwa--device-motion motion\"
        {{ stimulus_action('motion', 'update', 'pwa--device-motion:pwa:device:motion') }}
        {{ stimulus_action('motion', 'disable', 'pwa--device-motion:pwa:device:motion:unavailable') }}
    >
        <div class=\"rounded-md bg-yellow-50 p-4 hidden\" {{ stimulus_target('motion', 'message')}}>
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
    <dl>
        <dt class=\"font-medium text-gray-500 dark:text-gray-400\">Acceleration</dt>
        <dd class=\"text-gray-900 dark:text-white\" {{ stimulus_target('motion', 'acceleration') }}>--</dd>
        <dt class=\"font-medium text-gray-500 dark:text-gray-400\">Acceleration with gravity</dt>
        <dd class=\"text-gray-900 dark:text-white\"{{ stimulus_target('motion', 'accelerationIncludingGravity') }}>--</dd>
        <dt class=\"font-medium text-gray-500 dark:text-gray-400\">Rotation rate</dt>
        <dd class=\"text-gray-900 dark:text-white\"{{ stimulus_target('motion', 'rotationRate') }}>--</dd>
        <dt class=\"font-medium text-gray-500 dark:text-gray-400\">Interval</dt>
        <dd class=\"text-gray-900 dark:text-white\"{{ stimulus_target('motion', 'interval') }}>--</dd>
    </dl>
    <canvas {{ stimulus_target('motion', 'canvas') }} id=\"myCanvas\" class=\"w-full h-96\">
        Your browser does not support the HTML canvas element.
    </canvas>
    </div>
</div>
", "components/DeviceMotion.html.twig", "/Users/praveenmujawdiya/Documents/survos/pwa-f7/templates/components/DeviceMotion.html.twig");
    }
}
