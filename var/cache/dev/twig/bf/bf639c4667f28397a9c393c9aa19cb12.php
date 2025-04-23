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

/* @SpomkyLabsPwa/Collector/favicons-tab.html.twig */
class __TwigTemplate_652576354a6a2786be795273d5b72d20 extends Template
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
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SpomkyLabsPwa/Collector/favicons-tab.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SpomkyLabsPwa/Collector/favicons-tab.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SpomkyLabsPwa/Collector/favicons-tab.html.twig"));

        // line 1
        yield "<h3>General information</h3>
<p>
    Status:
    ";
        // line 4
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "data", [], "any", false, false, false, 4), "favicons", [], "any", false, false, false, 4), "enabled", [], "any", false, false, false, 4)) {
            // line 5
            yield "        <span class=\"status-badge status-success\">enabled</span>
    ";
        } else {
            // line 7
            yield "        <span class=\"status-badge status-warning\">disabled</span>
    ";
        }
        // line 9
        yield "</p>
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
        <td>Low resolution included?</td>
        <td>
            ";
        // line 22
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 22, $this->source); })()), "favicons", [], "any", false, false, false, 22), "lowResolution", [], "any", false, false, false, 22)) {
            // line 23
            yield "                Yes, included sizes are:
                <ul>
                    <li>16x16 (ICO and PNG): basic favicons</li>
                    <li>32x32 (PNG): basic favicon</li>
                    <li>57x57, 72x72, 114x114 (PNG): prior iOS 6</li>
                    <li>60x60, 76x76, 120x120, 152x152 (PNG): prior iOS 7</li>
                    <li>180x180 (PNG): iOS 7+</li>
                    <li>36x36, 48x48, 72x72, 96x96, 144x144, 256x256, 384x384, 192x192, 512x512 (PNG): all platforms/browsers</li>
                </ul>
            ";
        } else {
            // line 33
            yield "                No, included sizes are:
                <ul>
                    <li>16x16 (ICO and PNG): basic favicons</li>
                    <li>32x32 (PNG): basic favicon</li>
                    <li>180x180 (PNG): iOS 7+</li>
                    <li>192x192, 512x512 (PNG): all platforms/browsers</li>
                </ul>
            ";
        }
        // line 41
        yield "        </td>
    </tr>
    <tr>
        <td>Image scale</td>
        <td>
            ";
        // line 46
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 46, $this->source); })()), "favicons", [], "any", false, false, false, 46), "imageScale", [], "any", false, false, false, 46)) {
            // line 47
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 47, $this->source); })()), "favicons", [], "any", false, false, false, 47), "imageScale", [], "any", false, false, false, 47), "html", null, true);
            yield "%
            ";
        } else {
            // line 49
            yield "                n / a
            ";
        }
        // line 51
        yield "        </td>
    </tr>
    <tr>
        <td>Tile color</td>
        <td>
            ";
        // line 56
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 56, $this->source); })()), "favicons", [], "any", false, false, false, 56), "tileColor", [], "any", false, false, false, 56)) {
            // line 57
            yield "                ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 57, $this->source); })()), "favicons", [], "any", false, false, false, 57), "useSilhouette", [], "any", false, false, false, 57)) {
                // line 58
                yield "                    A silhouette is used as
                ";
            } else {
                // line 60
                yield "                    The icon is used as
                ";
            }
            // line 62
            yield "                Windows 8/10 tile with color
                ";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 63, $this->source); })()), "favicons", [], "any", false, false, false, 63), "tileColor", [], "any", false, false, false, 63), "html", null, true);
            yield "
                <span style=\"background-color: ";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 64, $this->source); })()), "favicons", [], "any", false, false, false, 64), "tileColor", [], "any", false, false, false, 64), "html", null, true);
            yield "; padding: 0.25rem; color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 64, $this->source); })()), "favicons", [], "any", false, false, false, 64), "tileColor", [], "any", false, false, false, 64), "html", null, true);
            yield ";\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 64, $this->source); })()), "favicons", [], "any", false, false, false, 64), "tileColor", [], "any", false, false, false, 64), "html", null, true);
            yield "</span>
                <br>
                Note that this will add instructions to the HTML to enable the tile color (XML file provided, see below).
                <br>
                Also, the following sizes are served:
                <ul>
                    <li>70x70 (PNG)</li>
                    <li>150x150 (PNG)</li>
                    <li>310x150 (PNG)</li>
                    <li>310x310 (PNG)</li>
                </ul>
            ";
        } else {
            // line 76
            yield "                Windows 8/10 tiles not enabled
            ";
        }
        // line 78
        yield "        </td>
    </tr>
    <tr>
        <td>Composed images</td>
        <td>
            ";
        // line 83
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 83, $this->source); })()), "favicons", [], "any", false, false, false, 83), "backgroundColor", [], "any", false, false, false, 83)) {
            // line 84
            yield "                The composed images have a background color of
                ";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 85, $this->source); })()), "favicons", [], "any", false, false, false, 85), "backgroundColor", [], "any", false, false, false, 85), "html", null, true);
            yield "
                <span style=\"background-color: ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 86, $this->source); })()), "favicons", [], "any", false, false, false, 86), "backgroundColor", [], "any", false, false, false, 86), "html", null, true);
            yield "; padding: 0.25rem; color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 86, $this->source); })()), "favicons", [], "any", false, false, false, 86), "backgroundColor", [], "any", false, false, false, 86), "html", null, true);
            yield ";\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 86, $this->source); })()), "favicons", [], "any", false, false, false, 86), "backgroundColor", [], "any", false, false, false, 86), "html", null, true);
            yield "</span>
                ";
            // line 87
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 87, $this->source); })()), "favicons", [], "any", false, false, false, 87), "borderRadius", [], "any", false, false, false, 87)) {
                // line 88
                yield "                    <br>
                    And a border radius of
                    ";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 90, $this->source); })()), "favicons", [], "any", false, false, false, 90), "borderRadius", [], "any", false, false, false, 90), "html", null, true);
                yield "% (rounded corners). 50% is a circle.
                ";
            }
            // line 92
            yield "            ";
        } else {
            // line 93
            yield "                Composed images are transparent
            ";
        }
        // line 95
        yield "        </td>
    </tr>
    <tr>
        <td>Safari pinned tab</td>
        <td>
            ";
        // line 100
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 100, $this->source); })()), "favicons", [], "any", false, false, false, 100), "useSilhouette", [], "any", false, false, false, 100) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 100, $this->source); })()), "favicons", [], "any", false, false, false, 100), "safariPinnedTabColor", [], "any", false, false, false, 100))) {
            // line 101
            yield "                Yes, a silhouette is used with the pinned tab color ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 101, $this->source); })()), "favicons", [], "any", false, false, false, 101), "safariPinnedTabColor", [], "any", false, false, false, 101), "html", null, true);
            yield " <span style=\"background-color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 101, $this->source); })()), "favicons", [], "any", false, false, false, 101), "tileColor", [], "any", false, false, false, 101), "html", null, true);
            yield "; padding: 0.25rem; color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 101, $this->source); })()), "favicons", [], "any", false, false, false, 101), "tileColor", [], "any", false, false, false, 101), "html", null, true);
            yield ";\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 101, $this->source); })()), "favicons", [], "any", false, false, false, 101), "safariPinnedTabColor", [], "any", false, false, false, 101), "html", null, true);
            yield "</span>
            ";
        } else {
            // line 103
            yield "                No, no silhouette is used.
            ";
        }
        // line 105
        yield "        </td>
    </tr>
    </tbody>
</table>
<h3>Generated files</h3>
<ul>
    ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 111, $this->source); })()), "faviconsFiles", [], "any", false, false, false, 111));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 112
            yield "        <li>
            <a href=\"";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "url", [], "any", false, false, false, 113), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "url", [], "any", false, false, false, 113), "html", null, true);
            yield "</a>
            ";
            // line 114
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["file"], "html", [], "any", false, false, false, 114))) {
                // line 115
                yield "                (will be included in the HTML)
            ";
            }
            // line 117
            yield "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['file'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
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
        return "@SpomkyLabsPwa/Collector/favicons-tab.html.twig";
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
        return array (  275 => 119,  268 => 117,  264 => 115,  262 => 114,  256 => 113,  253 => 112,  249 => 111,  241 => 105,  237 => 103,  225 => 101,  223 => 100,  216 => 95,  212 => 93,  209 => 92,  204 => 90,  200 => 88,  198 => 87,  190 => 86,  186 => 85,  183 => 84,  181 => 83,  174 => 78,  170 => 76,  151 => 64,  147 => 63,  144 => 62,  140 => 60,  136 => 58,  133 => 57,  131 => 56,  124 => 51,  120 => 49,  114 => 47,  112 => 46,  105 => 41,  95 => 33,  83 => 23,  81 => 22,  66 => 9,  62 => 7,  58 => 5,  56 => 4,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h3>General information</h3>
<p>
    Status:
    {% if collector.data.favicons.enabled %}
        <span class=\"status-badge status-success\">enabled</span>
    {% else %}
        <span class=\"status-badge status-warning\">disabled</span>
    {% endif %}
</p>
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
        <td>Low resolution included?</td>
        <td>
            {% if collector.favicons.lowResolution %}
                Yes, included sizes are:
                <ul>
                    <li>16x16 (ICO and PNG): basic favicons</li>
                    <li>32x32 (PNG): basic favicon</li>
                    <li>57x57, 72x72, 114x114 (PNG): prior iOS 6</li>
                    <li>60x60, 76x76, 120x120, 152x152 (PNG): prior iOS 7</li>
                    <li>180x180 (PNG): iOS 7+</li>
                    <li>36x36, 48x48, 72x72, 96x96, 144x144, 256x256, 384x384, 192x192, 512x512 (PNG): all platforms/browsers</li>
                </ul>
            {% else %}
                No, included sizes are:
                <ul>
                    <li>16x16 (ICO and PNG): basic favicons</li>
                    <li>32x32 (PNG): basic favicon</li>
                    <li>180x180 (PNG): iOS 7+</li>
                    <li>192x192, 512x512 (PNG): all platforms/browsers</li>
                </ul>
            {% endif %}
        </td>
    </tr>
    <tr>
        <td>Image scale</td>
        <td>
            {% if collector.favicons.imageScale %}
                {{ collector.favicons.imageScale }}%
            {% else %}
                n / a
            {% endif %}
        </td>
    </tr>
    <tr>
        <td>Tile color</td>
        <td>
            {% if collector.favicons.tileColor %}
                {% if collector.favicons.useSilhouette %}
                    A silhouette is used as
                {% else %}
                    The icon is used as
                {% endif %}
                Windows 8/10 tile with color
                {{ collector.favicons.tileColor }}
                <span style=\"background-color: {{ collector.favicons.tileColor }}; padding: 0.25rem; color: {{ collector.favicons.tileColor }};\">{{ collector.favicons.tileColor }}</span>
                <br>
                Note that this will add instructions to the HTML to enable the tile color (XML file provided, see below).
                <br>
                Also, the following sizes are served:
                <ul>
                    <li>70x70 (PNG)</li>
                    <li>150x150 (PNG)</li>
                    <li>310x150 (PNG)</li>
                    <li>310x310 (PNG)</li>
                </ul>
            {% else %}
                Windows 8/10 tiles not enabled
            {% endif %}
        </td>
    </tr>
    <tr>
        <td>Composed images</td>
        <td>
            {% if collector.favicons.backgroundColor %}
                The composed images have a background color of
                {{ collector.favicons.backgroundColor }}
                <span style=\"background-color: {{ collector.favicons.backgroundColor }}; padding: 0.25rem; color: {{ collector.favicons.backgroundColor }};\">{{ collector.favicons.backgroundColor }}</span>
                {% if collector.favicons.borderRadius %}
                    <br>
                    And a border radius of
                    {{ collector.favicons.borderRadius }}% (rounded corners). 50% is a circle.
                {% endif %}
            {% else %}
                Composed images are transparent
            {% endif %}
        </td>
    </tr>
    <tr>
        <td>Safari pinned tab</td>
        <td>
            {% if collector.favicons.useSilhouette and collector.favicons.safariPinnedTabColor %}
                Yes, a silhouette is used with the pinned tab color {{ collector.favicons.safariPinnedTabColor }} <span style=\"background-color: {{ collector.favicons.tileColor }}; padding: 0.25rem; color: {{ collector.favicons.tileColor }};\">{{ collector.favicons.safariPinnedTabColor }}</span>
            {% else %}
                No, no silhouette is used.
            {% endif %}
        </td>
    </tr>
    </tbody>
</table>
<h3>Generated files</h3>
<ul>
    {% for file in collector.faviconsFiles %}
        <li>
            <a href=\"{{ file.url }}\">{{ file.url }}</a>
            {% if file.html is not null %}
                (will be included in the HTML)
            {% endif %}
        </li>
    {% endfor %}
</ul>", "@SpomkyLabsPwa/Collector/favicons-tab.html.twig", "/Users/praveenmujawdiya/Documents/survos/pwa-f7/vendor/spomky-labs/pwa-bundle/templates/Collector/favicons-tab.html.twig");
    }
}
