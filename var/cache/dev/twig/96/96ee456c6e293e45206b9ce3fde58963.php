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

/* @SpomkyLabsPwa/Collector/manifest-tab.html.twig */
class __TwigTemplate_97bb6132ace037c7ae2264a053a44b12 extends Template
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
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SpomkyLabsPwa/Collector/manifest-tab.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SpomkyLabsPwa/Collector/manifest-tab.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SpomkyLabsPwa/Collector/manifest-tab.html.twig"));

        // line 1
        yield "<h3>General information</h3>
<p>
    Status:
    ";
        // line 4
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "data", [], "any", false, false, false, 4), "manifest", [], "any", false, false, false, 4), "enabled", [], "any", false, false, false, 4)) {
            // line 5
            yield "        <span class=\"status-badge status-success\">enabled</span>
    ";
        } else {
            // line 7
            yield "        <span class=\"status-badge status-warning\">disabled</span>
    ";
        }
        // line 9
        yield "    <br>
    Can be installed:
    ";
        // line 11
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 11, $this->source); })()), "data", [], "any", false, false, false, 11), "manifest", [], "any", false, false, false, 11), "installable", [], "any", false, false, false, 11), "status", [], "any", false, false, false, 11)) {
            // line 12
            yield "    <span class=\"status-badge status-success\">yes</span>
";
        } else {
            // line 14
            yield "    <span class=\"status-badge status-warning\">no</span>
";
        }
        // line 16
        yield "</p>
<ul>
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 18, $this->source); })()), "data", [], "any", false, false, false, 18), "manifest", [], "any", false, false, false, 18), "installable", [], "any", false, false, false, 18), "reasons", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["reason"] => $context["value"]) {
            // line 19
            yield "        <li>
            ";
            // line 20
            if ( !$context["value"]) {
                // line 21
                yield "            <span class=\"badge status-success\">success</span>
        ";
            } else {
                // line 23
                yield "            <span class=\"badge status-error\">failure</span>
            ";
            }
            // line 24
            yield ":
            ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["reason"], "html", null, true);
            yield "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['reason'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "</ul>
<h3>Details</h3>
<table>
    <thead>
    <tr>
        <th scope=\"col\" class=\"key\">Key</th>
        <th scope=\"col\">Value</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>ID</td>
        <td>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 40, $this->source); })()), "manifest", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40), "html", null, true);
        yield "</td>
    </tr>
    <tr>
        <td>Name</td>
        <td>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 44, $this->source); })()), "manifest", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44)), "html", null, true);
        yield "</td>
    </tr>
    <tr>
        <td>Short name</td>
        <td>";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 48, $this->source); })()), "manifest", [], "any", false, false, false, 48), "shortName", [], "any", false, false, false, 48)), "html", null, true);
        yield "</td>
    </tr>
    <tr>
        <td>Description name</td>
        <td>";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 52, $this->source); })()), "manifest", [], "any", false, false, false, 52), "description", [], "any", false, false, false, 52)), "html", null, true);
        yield "</td>
    </tr>
    <tr>
        <td>Theme color</td>
        <td>
            ";
        // line 57
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 57, $this->source); })()), "manifest", [], "any", false, false, false, 57), "themeColor", [], "any", false, false, false, 57)) {
            // line 58
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 58, $this->source); })()), "manifest", [], "any", false, false, false, 58), "themeColor", [], "any", false, false, false, 58), "html", null, true);
            yield "
                <span style=\"background-color: ";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 59, $this->source); })()), "manifest", [], "any", false, false, false, 59), "themeColor", [], "any", false, false, false, 59), "html", null, true);
            yield "; padding: 0.25rem; color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 59, $this->source); })()), "manifest", [], "any", false, false, false, 59), "themeColor", [], "any", false, false, false, 59), "html", null, true);
            yield ";\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 59, $this->source); })()), "manifest", [], "any", false, false, false, 59), "themeColor", [], "any", false, false, false, 59), "html", null, true);
            yield "</span>
            ";
        } else {
            // line 61
            yield "                n/a
            ";
        }
        // line 63
        yield "        </td>
    </tr>
    <tr>
        <td>Background color</td>
        <td>
            ";
        // line 68
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 68, $this->source); })()), "manifest", [], "any", false, false, false, 68), "backgroundColor", [], "any", false, false, false, 68)) {
            // line 69
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 69, $this->source); })()), "manifest", [], "any", false, false, false, 69), "backgroundColor", [], "any", false, false, false, 69), "html", null, true);
            yield "
                <span style=\"background-color: ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 70, $this->source); })()), "manifest", [], "any", false, false, false, 70), "backgroundColor", [], "any", false, false, false, 70), "html", null, true);
            yield "; padding: 0.25rem; color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 70, $this->source); })()), "manifest", [], "any", false, false, false, 70), "backgroundColor", [], "any", false, false, false, 70), "html", null, true);
            yield ";\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 70, $this->source); })()), "manifest", [], "any", false, false, false, 70), "backgroundColor", [], "any", false, false, false, 70), "html", null, true);
            yield "</span>
            ";
        } else {
            // line 72
            yield "                n/a
            ";
        }
        // line 74
        yield "        </td>
    </tr>
    <tr>
        <td>Display</td>
        <td>";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 78, $this->source); })()), "manifest", [], "any", false, false, false, 78), "display", [], "any", false, false, false, 78), "html", null, true);
        yield "</td>
    </tr>
    <tr>
        <td>Orientation</td>
        <td>";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 82, $this->source); })()), "manifest", [], "any", false, false, false, 82), "orientation", [], "any", false, false, false, 82), "html", null, true);
        yield "</td>
    </tr>
    <tr>
        <td>Scope</td>
        <td>";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 86, $this->source); })()), "manifest", [], "any", false, false, false, 86), "scope", [], "any", false, false, false, 86), "html", null, true);
        yield "</td>
    </tr>
    <tr>
        <td>Start URL</td>
        <td>";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 90, $this->source); })()), "manifest", [], "any", false, false, false, 90), "startUrl", [], "any", false, false, false, 90), "html", null, true);
        yield "</td>
    </tr>
    <tr>
        <td>Categories</td>
        <td>
            ";
        // line 95
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 95, $this->source); })()), "manifest", [], "any", false, false, false, 95), "categories", [], "any", false, false, false, 95)) == 0)) {
            // line 96
            yield "                <span class=\"badge\">none</span>
            ";
        } else {
            // line 98
            yield "                <ul>
                    ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 99, $this->source); })()), "manifest", [], "any", false, false, false, 99), "categories", [], "any", false, false, false, 99));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 100
                yield "                        <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["category"]), "html", null, true);
                yield "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            yield "                </ul>
            ";
        }
        // line 104
        yield "        </td>
    </tr>
    </tbody>
</table>
<h3 class=\"tab-title\">Application Icons</h3>
<div class=\"tab-content\">
    <table>
        <thead>
        <tr>
            <th scope=\"col\" class=\"key\">Source</th>
            <th scope=\"col\">Sizes</th>
            <th scope=\"col\">Type</th>
            <th scope=\"col\">Purpose</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 120, $this->source); })()), "manifest", [], "any", false, false, false, 120), "icons", [], "any", false, false, false, 120));
        foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
            // line 121
            yield "            <tr>
                <td>";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["icon"], "src", [], "any", false, false, false, 122), "src", [], "any", false, false, false, 122), "html", null, true);
            yield "</td>
                <td>";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["icon"], "getSizeList", [], "method", false, false, false, 123), "html", null, true);
            yield "</td>
                <td>";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["icon"], "type", [], "any", true, true, false, 124)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["icon"], "type", [], "any", false, false, false, 124), "n/a")) : ("n/a")), "html", null, true);
            yield "</td>
                <td>";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["icon"], "purpose", [], "any", true, true, false, 125)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["icon"], "purpose", [], "any", false, false, false, 125), "n/a")) : ("n/a")), "html", null, true);
            yield "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['icon'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        yield "        </tbody>
    </table>
</div>
<h3 class=\"tab-title\">Application screenshots</h3>
<div class=\"tab-content\">
    <table>
        <thead>
        <tr>
            <th scope=\"col\" class=\"key\">Source</th>
            <th scope=\"col\">Size</th>
            <th scope=\"col\">Type</th>
            <th scope=\"col\">Form factor</th>
            <th scope=\"col\">Label</th>
            <th scope=\"col\">Platform</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 145, $this->source); })()), "manifest", [], "any", false, false, false, 145), "screenshots", [], "any", false, false, false, 145));
        foreach ($context['_seq'] as $context["_key"] => $context["screenshot"]) {
            // line 146
            yield "            <tr>
                <td>
                    ";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["screenshot"], "src", [], "any", false, false, false, 148), "src", [], "any", false, false, false, 148), "html", null, true);
            yield "<br>
                    <span class=\"badge\">";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["screenshot"], "reference", [], "any", true, true, false, 149)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["screenshot"], "reference", [], "any", false, false, false, 149), "No reference")) : ("No reference")), "html", null, true);
            yield "</span>
                </td>
                <td>
                    ";
            // line 152
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["screenshot"], "height", [], "any", false, false, false, 152) && CoreExtension::getAttribute($this->env, $this->source, $context["screenshot"], "width", [], "any", false, false, false, 152))) {
                // line 153
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["screenshot"], "width", [], "any", false, false, false, 153), "html", null, true);
                yield "x";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["screenshot"], "height", [], "any", false, false, false, 153), "html", null, true);
                yield "
                    ";
            } else {
                // line 155
                yield "                        n/a
                    ";
            }
            // line 157
            yield "                </td>
                <td>";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["screenshot"], "type", [], "any", true, true, false, 158)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["screenshot"], "type", [], "any", false, false, false, 158), "n/a")) : ("n/a")), "html", null, true);
            yield "</td>
                <td>";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["screenshot"], "formFactor", [], "any", true, true, false, 159)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["screenshot"], "formFactor", [], "any", false, false, false, 159), "n/a")) : ("n/a")), "html", null, true);
            yield "</td>
                <td>";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["screenshot"], "label", [], "any", true, true, false, 160)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["screenshot"], "label", [], "any", false, false, false, 160), "n/a")) : ("n/a")), "html", null, true);
            yield "</td>
                <td>";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["screenshot"], "platform", [], "any", true, true, false, 161)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["screenshot"], "platform", [], "any", false, false, false, 161), "n/a")) : ("n/a")), "html", null, true);
            yield "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['screenshot'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        yield "        </tbody>
    </table>
</div>
<h3 class=\"tab-title\">Output</h3>
<div class=\"tab-content\">
    <pre class=\"output\">";
        // line 169
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 169, $this->source); })()), "data", [], "any", false, false, false, 169), "manifest", [], "any", false, false, false, 169), "output", [], "any", false, false, false, 169), "html", null, true));
        yield "</pre>
</div>
<h3>Generated files</h3>
<ul>
    ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 173, $this->source); })()), "manifestFiles", [], "any", false, false, false, 173));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 174
            yield "        <li>
            <a href=\"";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "url", [], "any", false, false, false, 175), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "url", [], "any", false, false, false, 175), "html", null, true);
            yield "</a>
            ";
            // line 176
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["file"], "html", [], "any", false, false, false, 176))) {
                // line 177
                yield "                (will be included in the HTML)
            ";
            }
            // line 179
            yield "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['file'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        yield "</ul>";
        
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
        return "@SpomkyLabsPwa/Collector/manifest-tab.html.twig";
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
        return array (  425 => 181,  418 => 179,  414 => 177,  412 => 176,  406 => 175,  403 => 174,  399 => 173,  392 => 169,  385 => 164,  376 => 161,  372 => 160,  368 => 159,  364 => 158,  361 => 157,  357 => 155,  349 => 153,  347 => 152,  341 => 149,  337 => 148,  333 => 146,  329 => 145,  310 => 128,  301 => 125,  297 => 124,  293 => 123,  289 => 122,  286 => 121,  282 => 120,  264 => 104,  260 => 102,  251 => 100,  247 => 99,  244 => 98,  240 => 96,  238 => 95,  230 => 90,  223 => 86,  216 => 82,  209 => 78,  203 => 74,  199 => 72,  190 => 70,  185 => 69,  183 => 68,  176 => 63,  172 => 61,  163 => 59,  158 => 58,  156 => 57,  148 => 52,  141 => 48,  134 => 44,  127 => 40,  113 => 28,  104 => 25,  101 => 24,  97 => 23,  93 => 21,  91 => 20,  88 => 19,  84 => 18,  80 => 16,  76 => 14,  72 => 12,  70 => 11,  66 => 9,  62 => 7,  58 => 5,  56 => 4,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h3>General information</h3>
<p>
    Status:
    {% if collector.data.manifest.enabled %}
        <span class=\"status-badge status-success\">enabled</span>
    {% else %}
        <span class=\"status-badge status-warning\">disabled</span>
    {% endif %}
    <br>
    Can be installed:
    {% if collector.data.manifest.installable.status %}
    <span class=\"status-badge status-success\">yes</span>
{% else %}
    <span class=\"status-badge status-warning\">no</span>
{% endif %}
</p>
<ul>
    {% for reason, value in collector.data.manifest.installable.reasons %}
        <li>
            {% if not value %}
            <span class=\"badge status-success\">success</span>
        {% else %}
            <span class=\"badge status-error\">failure</span>
            {% endif %}:
            {{ reason }}
        </li>
    {% endfor %}
</ul>
<h3>Details</h3>
<table>
    <thead>
    <tr>
        <th scope=\"col\" class=\"key\">Key</th>
        <th scope=\"col\">Value</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>ID</td>
        <td>{{ collector.manifest.id }}</td>
    </tr>
    <tr>
        <td>Name</td>
        <td>{{ collector.manifest.name|trans }}</td>
    </tr>
    <tr>
        <td>Short name</td>
        <td>{{ collector.manifest.shortName|trans }}</td>
    </tr>
    <tr>
        <td>Description name</td>
        <td>{{ collector.manifest.description|trans }}</td>
    </tr>
    <tr>
        <td>Theme color</td>
        <td>
            {% if collector.manifest.themeColor %}
                {{ collector.manifest.themeColor }}
                <span style=\"background-color: {{ collector.manifest.themeColor }}; padding: 0.25rem; color: {{ collector.manifest.themeColor }};\">{{ collector.manifest.themeColor }}</span>
            {% else %}
                n/a
            {% endif %}
        </td>
    </tr>
    <tr>
        <td>Background color</td>
        <td>
            {% if collector.manifest.backgroundColor %}
                {{ collector.manifest.backgroundColor }}
                <span style=\"background-color: {{ collector.manifest.backgroundColor }}; padding: 0.25rem; color: {{ collector.manifest.backgroundColor }};\">{{ collector.manifest.backgroundColor }}</span>
            {% else %}
                n/a
            {% endif %}
        </td>
    </tr>
    <tr>
        <td>Display</td>
        <td>{{ collector.manifest.display }}</td>
    </tr>
    <tr>
        <td>Orientation</td>
        <td>{{ collector.manifest.orientation }}</td>
    </tr>
    <tr>
        <td>Scope</td>
        <td>{{ collector.manifest.scope }}</td>
    </tr>
    <tr>
        <td>Start URL</td>
        <td>{{ collector.manifest.startUrl }}</td>
    </tr>
    <tr>
        <td>Categories</td>
        <td>
            {% if collector.manifest.categories|length == 0 %}
                <span class=\"badge\">none</span>
            {% else %}
                <ul>
                    {% for category in collector.manifest.categories %}
                        <li>{{ category|trans }}</li>
                    {% endfor %}
                </ul>
            {% endif %}
        </td>
    </tr>
    </tbody>
</table>
<h3 class=\"tab-title\">Application Icons</h3>
<div class=\"tab-content\">
    <table>
        <thead>
        <tr>
            <th scope=\"col\" class=\"key\">Source</th>
            <th scope=\"col\">Sizes</th>
            <th scope=\"col\">Type</th>
            <th scope=\"col\">Purpose</th>
        </tr>
        </thead>
        <tbody>
        {% for icon in collector.manifest.icons %}
            <tr>
                <td>{{ icon.src.src }}</td>
                <td>{{ icon.getSizeList() }}</td>
                <td>{{ icon.type|default('n/a') }}</td>
                <td>{{ icon.purpose|default('n/a') }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
<h3 class=\"tab-title\">Application screenshots</h3>
<div class=\"tab-content\">
    <table>
        <thead>
        <tr>
            <th scope=\"col\" class=\"key\">Source</th>
            <th scope=\"col\">Size</th>
            <th scope=\"col\">Type</th>
            <th scope=\"col\">Form factor</th>
            <th scope=\"col\">Label</th>
            <th scope=\"col\">Platform</th>
        </tr>
        </thead>
        <tbody>
        {% for screenshot in collector.manifest.screenshots %}
            <tr>
                <td>
                    {{ screenshot.src.src }}<br>
                    <span class=\"badge\">{{ screenshot.reference|default('No reference') }}</span>
                </td>
                <td>
                    {% if screenshot.height and screenshot.width %}
                        {{ screenshot.width }}x{{ screenshot.height }}
                    {% else %}
                        n/a
                    {% endif %}
                </td>
                <td>{{ screenshot.type|default('n/a') }}</td>
                <td>{{ screenshot.formFactor|default('n/a') }}</td>
                <td>{{ screenshot.label|default('n/a') }}</td>
                <td>{{ screenshot.platform|default('n/a') }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
<h3 class=\"tab-title\">Output</h3>
<div class=\"tab-content\">
    <pre class=\"output\">{{ collector.data.manifest.output|nl2br }}</pre>
</div>
<h3>Generated files</h3>
<ul>
    {% for file in collector.manifestFiles %}
        <li>
            <a href=\"{{ file.url }}\">{{ file.url }}</a>
            {% if file.html is not null %}
                (will be included in the HTML)
            {% endif %}
        </li>
    {% endfor %}
</ul>", "@SpomkyLabsPwa/Collector/manifest-tab.html.twig", "/Users/praveenmujawdiya/Documents/survos/pwa-f7/vendor/spomky-labs/pwa-bundle/templates/Collector/manifest-tab.html.twig");
    }
}
