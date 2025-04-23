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

/* js/store.js.twig */
class __TwigTemplate_c8aa8da6880a55ec27ab32e402480e38 extends Template
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
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "js/store.js.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "js/store.js.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "js/store.js.twig"));

        // line 1
        yield "'use strict';

/*
|------------------------------------------------------------------------------
| Initialize Store
|------------------------------------------------------------------------------
*/

window.store = Framework7.createStore({
    state: {
        themeColor: null,
        themeMode: null,
        themeTone: null
    },
    actions: {
        setThemeColor: function({state, dispatch}, color) {
            state.themeColor = color;
        },
        setThemeMode: function({state, dispatch}, mode) {
            state.themeMode = mode;
        },
        setThemeTone: function({state, dispatch}, tone) {
            state.themeTone = tone;
        }
    },
    getters: {
        themeColor: function({state}) {
            return state.themeColor;
        },
        themeMode: function({state}) {
            return state.themeMode;
        },
        themeTone: function({state}) {
            return state.themeTone;
        }
    }
});";
        
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
        return "js/store.js.twig";
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
| Initialize Store
|------------------------------------------------------------------------------
*/

window.store = Framework7.createStore({
    state: {
        themeColor: null,
        themeMode: null,
        themeTone: null
    },
    actions: {
        setThemeColor: function({state, dispatch}, color) {
            state.themeColor = color;
        },
        setThemeMode: function({state, dispatch}, mode) {
            state.themeMode = mode;
        },
        setThemeTone: function({state, dispatch}, tone) {
            state.themeTone = tone;
        }
    },
    getters: {
        themeColor: function({state}) {
            return state.themeColor;
        },
        themeMode: function({state}) {
            return state.themeMode;
        },
        themeTone: function({state}) {
            return state.themeTone;
        }
    }
});", "js/store.js.twig", "/Users/praveenmujawdiya/Documents/survos/pwa-f7/templates/js/store.js.twig");
    }
}
