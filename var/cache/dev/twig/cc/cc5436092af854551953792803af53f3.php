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

/* js/config.js.twig */
class __TwigTemplate_eb61585a4efe2be2bd21f6e7edb30c1c extends Template
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
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "js/config.js.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "js/config.js.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "js/config.js.twig"));

        // line 1
        yield "'use strict';

/*
|------------------------------------------------------------------------------
| Define Namespace
|------------------------------------------------------------------------------
*/

window.config = window.config || {};

/*
|------------------------------------------------------------------------------
| App
|------------------------------------------------------------------------------
*/

window.config.app = {
    id: 'com.survos.pwabundle',
    version: '1.0.0',
    name: 'What PWA Bundle Can Do Today',
    logos: {
        logomarkLight: 'assets/custom/img/logos/logomark-light.svg',
        logomarkDark: 'assets/custom/img/logos/logomark-dark.svg',
        logotypeLight: 'assets/custom/img/logos/logotype-light.svg',
        logotypeDark: 'assets/custom/img/logos/logotype-dark.svg',
        logomarkCircleLight: 'assets/custom/img/logos/logomark-circle-light.svg',
        logomarkCircleDark: 'assets/custom/img/logos/logomark-circle-dark.svg',
        logomarkSquareLight: 'assets/custom/img/logos/logomark-square-light.svg',
        logomarkSquareDark: 'assets/custom/img/logos/logomark-square-dark.svg'
    }
}

/*
|------------------------------------------------------------------------------
| Theming
|------------------------------------------------------------------------------
*/

window.config.theming = {
    theme: 'auto',
    color: '#2563EB',
    mode: 'system',
    tone: 'warm'
}";
        
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
        return "js/config.js.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("'use strict';

/*
|------------------------------------------------------------------------------
| Define Namespace
|------------------------------------------------------------------------------
*/

window.config = window.config || {};

/*
|------------------------------------------------------------------------------
| App
|------------------------------------------------------------------------------
*/

window.config.app = {
    id: 'com.survos.pwabundle',
    version: '1.0.0',
    name: 'What PWA Bundle Can Do Today',
    logos: {
        logomarkLight: 'assets/custom/img/logos/logomark-light.svg',
        logomarkDark: 'assets/custom/img/logos/logomark-dark.svg',
        logotypeLight: 'assets/custom/img/logos/logotype-light.svg',
        logotypeDark: 'assets/custom/img/logos/logotype-dark.svg',
        logomarkCircleLight: 'assets/custom/img/logos/logomark-circle-light.svg',
        logomarkCircleDark: 'assets/custom/img/logos/logomark-circle-dark.svg',
        logomarkSquareLight: 'assets/custom/img/logos/logomark-square-light.svg',
        logomarkSquareDark: 'assets/custom/img/logos/logomark-square-dark.svg'
    }
}

/*
|------------------------------------------------------------------------------
| Theming
|------------------------------------------------------------------------------
*/

window.config.theming = {
    theme: 'auto',
    color: '#2563EB',
    mode: 'system',
    tone: 'warm'
}", "js/config.js.twig", "/Users/praveenmujawdiya/Documents/survos/pwa-f7/templates/js/config.js.twig");
    }
}
