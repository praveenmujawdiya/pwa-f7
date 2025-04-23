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

/* components/Footer.html.twig */
class __TwigTemplate_dd4c61e52262ec022b14999078030b1d extends Template
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
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Footer.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Footer.html.twig"));

        // line 1
        yield "<footer ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "html", null, true);
        yield " class=\"p-4 bg-white md:p-8 lg:p-10 dark:bg-gray-800\">
    <div class=\"mx-auto max-w-screen-xl text-center\">
        <a data-turbo-action=\"replace\" href=\"";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        yield "\" class=\"flex justify-center items-center text-2xl font-semibold text-gray-900 dark:text-white\">
            <img class=\"mr-2 h-8\" src=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pwabundlelogo.svg"), "html", null, true);
        yield "\" alt=\"\">
        </a>
        <p class=\"my-6 text-gray-500 dark:text-gray-400\">
            Open-source Symfony Bundle for creating Progressive Web Applications.<br>
            This demo is a showcase of the features provided by the bundle.<br>
            It is based in the excellent <a href=\"https://whatpwacando.today/\" class=\"font-medium text-primary-600 dark:text-primary-500 hover:underline\" target=\"_blank\" rel=\"noopener noreferrer nofollow\" class=\"hover:underline\">What Web Can Do Today</a> website.
        </p>
        <ul class=\"flex flex-wrap justify-center items-center mb-6 text-gray-900 dark:text-white\">
            <li>
                <a data-turbo-action=\"replace\" href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_information");
        yield "\" class=\"mr-4 hover:underline md:mr-6 \">Information</a>
            </li>
            <li>
                <a href=\"https://github.com/spomky-Labs/phpwa-demo\" target=\"_blank\" rel=\"noopener noreferrer nofollow\" class=\"mr-4 hover:underline md:mr-6\">Bugs</a>
            </li>
        </ul>
        <span class=\"text-sm text-gray-500 sm:text-center dark:text-gray-400\">© 2024 <a href=\"https://github.com/spomky-Labs\" class=\"hover:underline\">Spomky-Labs</a>. Under the MIT license.</span>
    </div>
</footer>
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
        return "components/Footer.html.twig";
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
        return array (  73 => 13,  61 => 4,  57 => 3,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer {{ attributes }} class=\"p-4 bg-white md:p-8 lg:p-10 dark:bg-gray-800\">
    <div class=\"mx-auto max-w-screen-xl text-center\">
        <a data-turbo-action=\"replace\" href=\"{{ path('app_homepage') }}\" class=\"flex justify-center items-center text-2xl font-semibold text-gray-900 dark:text-white\">
            <img class=\"mr-2 h-8\" src=\"{{ asset('images/pwabundlelogo.svg') }}\" alt=\"\">
        </a>
        <p class=\"my-6 text-gray-500 dark:text-gray-400\">
            Open-source Symfony Bundle for creating Progressive Web Applications.<br>
            This demo is a showcase of the features provided by the bundle.<br>
            It is based in the excellent <a href=\"https://whatpwacando.today/\" class=\"font-medium text-primary-600 dark:text-primary-500 hover:underline\" target=\"_blank\" rel=\"noopener noreferrer nofollow\" class=\"hover:underline\">What Web Can Do Today</a> website.
        </p>
        <ul class=\"flex flex-wrap justify-center items-center mb-6 text-gray-900 dark:text-white\">
            <li>
                <a data-turbo-action=\"replace\" href=\"{{ path('app_information') }}\" class=\"mr-4 hover:underline md:mr-6 \">Information</a>
            </li>
            <li>
                <a href=\"https://github.com/spomky-Labs/phpwa-demo\" target=\"_blank\" rel=\"noopener noreferrer nofollow\" class=\"mr-4 hover:underline md:mr-6\">Bugs</a>
            </li>
        </ul>
        <span class=\"text-sm text-gray-500 sm:text-center dark:text-gray-400\">© 2024 <a href=\"https://github.com/spomky-Labs\" class=\"hover:underline\">Spomky-Labs</a>. Under the MIT license.</span>
    </div>
</footer>
", "components/Footer.html.twig", "/Users/praveenmujawdiya/Documents/survos/pwa-f7/templates/components/Footer.html.twig");
    }
}
