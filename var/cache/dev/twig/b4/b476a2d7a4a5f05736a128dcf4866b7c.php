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

/* @SurvosFw/onsPage.html.twig */
class __TwigTemplate_f1c7fa0d2a01f22957cbbd82f3fc7d94 extends Template
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
            'toolbar' => [$this, 'block_toolbar'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ba1c37b184061724dbe82aef62fe32a3 = $this->extensions["Inspector\\Symfony\\Bundle\\Twig\\TwigTracer"];
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosFw/onsPage.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosFw/onsPage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosFw/onsPage.html.twig"));

        // line 3
        yield "

";
        // line 5
        $context["_sc"] = ((        $this->unwrap()->hasBlock("pageController", $context, $blocks)) ? (        $this->unwrap()->renderBlock("pageController", $context, $blocks)) : (false));
        // line 6
        yield "<ons-page id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["onsMeta"]) || array_key_exists("onsMeta", $context) ? $context["onsMeta"] : (function () { throw new RuntimeError('Variable "onsMeta" does not exist.', 6, $this->source); })()), "templateId", [], "any", false, false, false, 6), "html", null, true);
        yield "\" ";
        yield (((isset($context["_sc"]) || array_key_exists("_sc", $context) ? $context["_sc"] : (function () { throw new RuntimeError('Variable "_sc" does not exist.', 6, $this->source); })())) ? ($this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusController((isset($context["_sc"]) || array_key_exists("_sc", $context) ? $context["_sc"] : (function () { throw new RuntimeError('Variable "_sc" does not exist.', 6, $this->source); })()))) : (""));
        yield ">

    ";
        // line 8
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["onsMeta"]) || array_key_exists("onsMeta", $context) ? $context["onsMeta"] : (function () { throw new RuntimeError('Variable "onsMeta" does not exist.', 8, $this->source); })()), "isPage", [], "any", false, false, false, 8)) {
            // line 9
            yield "        <ons-toolbar>
            <div class=\"center\">";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["onsMeta"]) || array_key_exists("onsMeta", $context) ? $context["onsMeta"] : (function () { throw new RuntimeError('Variable "onsMeta" does not exist.', 10, $this->source); })()), "templateId", [], "any", false, false, false, 10), "html", null, true);
            yield "</div>
            <div class=\"right\">
                <ons-toolbar-button>-</ons-toolbar-button>
                <ons-toolbar-button>+</ons-toolbar-button>
            </div>
        </ons-toolbar>
    ";
        }
        // line 17
        yield "
    <ons-toolbar>
        <div class=\"left\">
            <ons-toolbar-button icon=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["onsMeta"] ?? null), "icon", [], "any", true, true, false, 20)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["onsMeta"]) || array_key_exists("onsMeta", $context) ? $context["onsMeta"] : (function () { throw new RuntimeError('Variable "onsMeta" does not exist.', 20, $this->source); })()), "icon", [], "any", false, false, false, 20), "fa-bug")) : ("fa-bug")), "html", null, true);
        yield "\"></ons-toolbar-button>
        </div>

        <div class=\"center\">
            ";
        // line 25
        yield "            ";
        yield ((        $this->unwrap()->hasBlock("title", $context, $blocks)) ? (        $this->unwrap()->renderBlock("title", $context, $blocks)) : ("~"));
        yield "
        </div>

        <div class=\"right\">
            <ons-toolbar-button>-</ons-toolbar-button>
            <ons-toolbar-button>+</ons-toolbar-button>
        </div>
    </ons-toolbar>




    ";
        // line 38
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["onsMeta"]) || array_key_exists("onsMeta", $context) ? $context["onsMeta"] : (function () { throw new RuntimeError('Variable "onsMeta" does not exist.', 38, $this->source); })()), "isPage", [], "any", false, false, false, 38)) {
            // line 39
            yield "        <ons-toolbar id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["onsMeta"]) || array_key_exists("onsMeta", $context) ? $context["onsMeta"] : (function () { throw new RuntimeError('Variable "onsMeta" does not exist.', 39, $this->source); })()), "templateId", [], "any", false, false, false, 39), "html", null, true);
            yield "-toolbar\">
            ";
            // line 40
            yield from $this->unwrap()->yieldBlock('toolbar', $context, $blocks);
            // line 60
            yield "        </ons-toolbar>
    ";
        }
        // line 62
        yield "
    <div class=\"content\" ";
        // line 63
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget("app", "content");
        yield ">
";
        // line 64
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "request", [], "any", false, false, false, 64), "get", ["debug"], "method", false, false, false, 64)) {
            // line 65
            yield "    <p>
        This is the ";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->getTemplateName(), "html", null, true);
            yield " page, served from twig. ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now"), "html", null, true);
            yield ".
    </p>
        <pre>";
            // line 68
            yield $this->extensions['Survos\CoreBundle\Twig\TwigExtension']->json_pretty((isset($context["onsMeta"]) || array_key_exists("onsMeta", $context) ? $context["onsMeta"] : (function () { throw new RuntimeError('Variable "onsMeta" does not exist.', 68, $this->source); })()));
            yield "</pre>
        ";
        }
        // line 70
        yield "        ";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 72
        yield "    </div>

</ons-page>


";
        
        $__internal_ba1c37b184061724dbe82aef62fe32a3->leave($__internal_ba1c37b184061724dbe82aef62fe32a3_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ba1c37b184061724dbe82aef62fe32a3 = $this->extensions["Inspector\\Symfony\\Bundle\\Twig\\TwigTracer"];
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 41
        yield "                <div class=\"left\">
                    <ons-back-button></ons-back-button>
                </div>

                <div class=\"left\">
";
        // line 47
        yield "                </div>

                <div class=\"center\" ";
        // line 49
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget((isset($context["_app_sc"]) || array_key_exists("_app_sc", $context) ? $context["_app_sc"] : (function () { throw new RuntimeError('Variable "_app_sc" does not exist.', 49, $this->source); })()), "pageTitle");
        yield ">

                    ";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["onsMeta"]) || array_key_exists("onsMeta", $context) ? $context["onsMeta"] : (function () { throw new RuntimeError('Variable "onsMeta" does not exist.', 51, $this->source); })()), "templateId", [], "any", false, false, false, 51))), "html", null, true);
        yield "
                </div>
                <div class=\"right\">

";
        // line 57
        yield "                </div>

            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_ba1c37b184061724dbe82aef62fe32a3->leave($__internal_ba1c37b184061724dbe82aef62fe32a3_prof);

        yield from [];
    }

    // line 70
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

        // line 71
        yield "        ";
        
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
        return "@SurvosFw/onsPage.html.twig";
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
        return array (  241 => 71,  225 => 70,  209 => 57,  202 => 51,  197 => 49,  193 => 47,  186 => 41,  170 => 40,  151 => 72,  148 => 70,  143 => 68,  136 => 66,  133 => 65,  131 => 64,  127 => 63,  124 => 62,  120 => 60,  118 => 40,  113 => 39,  110 => 38,  94 => 25,  87 => 20,  82 => 17,  72 => 10,  69 => 9,  67 => 8,  59 => 6,  57 => 5,  53 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# add stimulus controller for title? #}
{#{% set _sc = pageController|default(false) %}#}


{% set _sc = block('pageController') is defined ? block('pageController') : false %}
<ons-page id=\"{{ onsMeta.templateId }}\" {{ _sc ? stimulus_controller(_sc) }}>

    {% if onsMeta.isPage %}
        <ons-toolbar>
            <div class=\"center\">{{ onsMeta.templateId }}</div>
            <div class=\"right\">
                <ons-toolbar-button>-</ons-toolbar-button>
                <ons-toolbar-button>+</ons-toolbar-button>
            </div>
        </ons-toolbar>
    {% endif %}

    <ons-toolbar>
        <div class=\"left\">
            <ons-toolbar-button icon=\"{{ onsMeta.icon|default('fa-bug')}}\"></ons-toolbar-button>
        </div>

        <div class=\"center\">
            {# does not change, this is a tab title #}
            {{ block('title')??'~' }}
        </div>

        <div class=\"right\">
            <ons-toolbar-button>-</ons-toolbar-button>
            <ons-toolbar-button>+</ons-toolbar-button>
        </div>
    </ons-toolbar>




    {#    {% set toolbarContent = block('toolbar')|default(false) %} #}
    {% if onsMeta.isPage %}
        <ons-toolbar id=\"{{ onsMeta.templateId }}-toolbar\">
            {% block toolbar %}
                <div class=\"left\">
                    <ons-back-button></ons-back-button>
                </div>

                <div class=\"left\">
{#                    <ons-toolbar-button icon=\"md-face\"></ons-toolbar-button>#}
                </div>

                <div class=\"center\" {{ stimulus_target(_app_sc,'pageTitle') }}>

                    {{ onsMeta.templateId|trans|title }}
                </div>
                <div class=\"right\">

{#                    <ons-toolbar-button>-</ons-toolbar-button>#}
{#                    <ons-toolbar-button>+</ons-toolbar-button>#}
                </div>

            {% endblock %}
        </ons-toolbar>
    {% endif %}

    <div class=\"content\" {{ stimulus_target('app', 'content') }}>
{% if app.request.get('debug') %}
    <p>
        This is the {{ _self }} page, served from twig. {{ 'now'|date }}.
    </p>
        <pre>{{ onsMeta|json_pretty }}</pre>
        {% endif %}
        {% block body %}
        {% endblock %}
    </div>

</ons-page>


", "@SurvosFw/onsPage.html.twig", "/Users/praveenmujawdiya/Documents/survos/pwa-f7/vendor/survos/fw-bundle/templates/onsPage.html.twig");
    }
}
