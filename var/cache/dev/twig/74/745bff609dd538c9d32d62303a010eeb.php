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

/* components/Hero.html.twig */
class __TwigTemplate_9e2f090ae2cfc52ff2390c80333c578f extends Template
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
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Hero.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Hero.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Hero.html.twig"));

        // line 1
        yield "<section ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "html", null, true);
        yield ">

    <div class=\"block block-strong no-hairlines no-margin-vertical dark\" style=\"height: 288px;\">
        <div class=\"flexbox-centered\">
            <div class=\"shape-container mask mask-squircle padding-half size-80 bg-color-white\">
                <img src=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pwabundlelogo.svg"), "html", null, true);
        yield "\" alt=\"Element capture\" />
            </div>
            <h1 class=\"font-size-24 font-weight-900 margin-top\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.name", [], "pwa"), "html", null, true);
        yield "</h1>
            <p class=\"font-size-16 margin-top-half\">A showcase of what is possible with Progressive Web Apps today.</p>
        </div>
    </div>

    <div class=\"block block-strong inset margin-vertical\">
        <h2 class=\"block-title block-title-medium\">What is Progressive Web App?</h2>
        <p>A Progressive Web App (PWA) is a website that can be installed on your device and provide an app-like experience read more.</p>
        <h2 class=\"block-title block-title-medium\">How to use this app?</h2>
        <p>This app is itself a Progressive Web App which means it can be installed to the home screen of your mobile device or to your desktop.</p>
        <p>When the button below is visible, you can install this app. If is not visible, it means that the app is already installed, or you cannot install it.</p>
        <button hidden data-controller=\"pwa--install\" data-pwa--install-target=\"install\" data-action=\"click->pwa--install#install\" class=\"button button-fill button-large\">Install this app</button>
    </div>

    <div class=\"block block-strong inset margin-vertical\">
        <div class=\"flexbox-centered\">
            <img class=\"size-128\" src=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Endroid\QrCodeBundle\Twig\QrCodeRuntime')->qrCodeUrlFunction($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "get", ["_route"], "method", false, false, false, 24))), "html", null, true);
        yield "\" alt=\"\" />
            <div class=\"font-size-14 text-muted\">Scan the QR code on your mobile phone to access the app.</div>
        </div>
    </div>

</section>";
        
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
        return "components/Hero.html.twig";
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
        return array (  84 => 24,  65 => 8,  60 => 6,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<section {{ attributes }}>

    <div class=\"block block-strong no-hairlines no-margin-vertical dark\" style=\"height: 288px;\">
        <div class=\"flexbox-centered\">
            <div class=\"shape-container mask mask-squircle padding-half size-80 bg-color-white\">
                <img src=\"{{ asset('images/pwabundlelogo.svg') }}\" alt=\"Element capture\" />
            </div>
            <h1 class=\"font-size-24 font-weight-900 margin-top\">{{ 'app.name'|trans(domain: 'pwa') }}</h1>
            <p class=\"font-size-16 margin-top-half\">A showcase of what is possible with Progressive Web Apps today.</p>
        </div>
    </div>

    <div class=\"block block-strong inset margin-vertical\">
        <h2 class=\"block-title block-title-medium\">What is Progressive Web App?</h2>
        <p>A Progressive Web App (PWA) is a website that can be installed on your device and provide an app-like experience read more.</p>
        <h2 class=\"block-title block-title-medium\">How to use this app?</h2>
        <p>This app is itself a Progressive Web App which means it can be installed to the home screen of your mobile device or to your desktop.</p>
        <p>When the button below is visible, you can install this app. If is not visible, it means that the app is already installed, or you cannot install it.</p>
        <button hidden data-controller=\"pwa--install\" data-pwa--install-target=\"install\" data-action=\"click->pwa--install#install\" class=\"button button-fill button-large\">Install this app</button>
    </div>

    <div class=\"block block-strong inset margin-vertical\">
        <div class=\"flexbox-centered\">
            <img class=\"size-128\" src=\"{{ qr_code_url(url(app.request.get('_route'))) }}\" alt=\"\" />
            <div class=\"font-size-14 text-muted\">Scan the QR code on your mobile phone to access the app.</div>
        </div>
    </div>

</section>", "components/Hero.html.twig", "/Users/praveenmujawdiya/Documents/survos/pwa-f7/templates/components/Hero.html.twig");
    }
}
