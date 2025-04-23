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

/* @SurvosFw/components/menu.html.twig */
class __TwigTemplate_bf40f6efa4ae575a5a509b5a975e6750 extends Template
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
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosFw/components/menu.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosFw/components/menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosFw/components/menu.html.twig"));

        // line 3
        $context["theme"] = false;
        // line 4
        yield "    ";
        if (CoreExtension::inFilter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 4, $this->source); })()), [(isset($context["MOBILE_TAB_MENU"]) || array_key_exists("MOBILE_TAB_MENU", $context) ? $context["MOBILE_TAB_MENU"] : (function () { throw new RuntimeError('Variable "MOBILE_TAB_MENU" does not exist.', 4, $this->source); })())])) {
            // line 5
            yield "        ";
            // line 6
            yield "        ";
            yield $this->env->getRuntime('Knp\Menu\Twig\MenuRuntimeExtension')->render((isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 6, $this->source); })()), ["template" => "@SurvosFw/menu/tab_menu.html.twig", "debug" => ((            // line 8
array_key_exists("debug", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["debug"]) || array_key_exists("debug", $context) ? $context["debug"] : (function () { throw new RuntimeError('Variable "debug" does not exist.', 8, $this->source); })()), false)) : (false)), "allow_safe_labels" => true, "comment" => "This is an custom option passed in knp_menu_render. Only used by our custom renderer.", "rootAttributes" => ["class" => "menu-inner py-1", "role" => "menu"]]);
            // line 16
            yield "
    ";
        } elseif (CoreExtension::inFilter(        // line 17
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 17, $this->source); })()), [(isset($context["MOBILE_PAGE_MENU"]) || array_key_exists("MOBILE_PAGE_MENU", $context) ? $context["MOBILE_PAGE_MENU"] : (function () { throw new RuntimeError('Variable "MOBILE_PAGE_MENU" does not exist.', 17, $this->source); })())])) {
            // line 18
            yield "        ";
            yield $this->env->getRuntime('Knp\Menu\Twig\MenuRuntimeExtension')->render((isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 18, $this->source); })()), ["template" => "@SurvosFw/menu/page_menu.html.twig", "debug" => ((            // line 20
array_key_exists("debug", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["debug"]) || array_key_exists("debug", $context) ? $context["debug"] : (function () { throw new RuntimeError('Variable "debug" does not exist.', 20, $this->source); })()), false)) : (false)), "allow_safe_labels" => true, "comment" => "This is an custom option passed in knp_menu_render. Only used by our custom renderer.", "rootAttributes" => ["class" => "menu-inner py-1", "role" => "menu"]]);
            // line 28
            yield "
    ";
        } else {
            // line 30
            yield "        <div class=\"text-danger\">Invalid menu type: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 30, $this->source); })()), "html", null, true);
            yield "</div>
    ";
        }
        
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
        return "@SurvosFw/components/menu.html.twig";
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
        return array (  75 => 30,  71 => 28,  69 => 20,  67 => 18,  65 => 17,  62 => 16,  60 => 8,  58 => 6,  56 => 5,  53 => 4,  51 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#  this fires an event, all listeners/subscribers will respond.  use A #}
{#    {% set menuItem = knp_menu_get(menuAlias, path, options) %} #}
{% set theme = false %}
    {% if type in [MOBILE_TAB_MENU] %}
        {#        \"template\"      : \"@SurvosBootstrap/knp_sidebar_menu.html.twig\", #}
        {{ knp_menu_render(menuItem, {
            \"template\"      : \"@SurvosFw/menu/tab_menu.html.twig\",
            \"debug\": debug|default(false),
            \"allow_safe_labels\": true,
            'comment': \"This is an custom option passed in knp_menu_render. Only used by our custom renderer.\",
            rootAttributes: {
                class: 'menu-inner py-1',
                role: 'menu'
            },

        }) }}
    {% elseif type in [MOBILE_PAGE_MENU] %}
        {{ knp_menu_render(menuItem, {
            \"template\"      : \"@SurvosFw/menu/page_menu.html.twig\",
            \"debug\": debug|default(false),
            \"allow_safe_labels\": true,
            'comment': \"This is an custom option passed in knp_menu_render. Only used by our custom renderer.\",
            rootAttributes: {
                class: 'menu-inner py-1',
                role: 'menu'
            },

        }) }}
    {% else %}
        <div class=\"text-danger\">Invalid menu type: {{ type }}</div>
    {% endif %}
{#    { #}
{#    debug: app.request.get('debug', false), #}
{#    menuItem: menuItem, #}
{#    project: project, #}
{#    title: project.code #}
{#    } #}
", "@SurvosFw/components/menu.html.twig", "/Users/praveenmujawdiya/Documents/survos/pwa-f7/vendor/survos/fw-bundle/templates/components/menu.html.twig");
    }
}
