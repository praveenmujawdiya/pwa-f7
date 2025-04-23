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

/* @SpomkyLabsPwa/Collector/serviceworker-tab.html.twig */
class __TwigTemplate_9a8275dc4ca939514662428811911923 extends Template
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
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SpomkyLabsPwa/Collector/serviceworker-tab.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SpomkyLabsPwa/Collector/serviceworker-tab.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SpomkyLabsPwa/Collector/serviceworker-tab.html.twig"));

        // line 1
        yield "<h3>Details</h3>
<p>Status:
    ";
        // line 3
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 3, $this->source); })()), "data", [], "any", false, false, false, 3), "serviceWorker", [], "any", false, false, false, 3), "enabled", [], "any", false, false, false, 3)) {
            // line 4
            yield "        <span class=\"status-badge status-success\">enabled</span>
    ";
        } else {
            // line 6
            yield "        <span class=\"status-badge status-warning\">disabled</span>
    ";
        }
        // line 8
        yield "<table>
    <thead>
    <tr>
        <th scope=\"col\" class=\"key\">Key</th>
        <th scope=\"col\">Value</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Destination</td>
        <td>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 18, $this->source); })()), "serviceWorker", [], "any", false, false, false, 18), "dest", [], "any", false, false, false, 18), "html", null, true);
        yield "</td>
    </tr>
    <tr>
        <td>Scope</td>
        <td>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 22, $this->source); })()), "serviceWorker", [], "any", false, false, false, 22), "scope", [], "any", false, false, false, 22), "html", null, true);
        yield "</td>
    </tr>
    <tr>
        <td>Use Cache</td>
        <td>";
        // line 26
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 26, $this->source); })()), "serviceWorker", [], "any", false, false, false, 26), "useCache", [], "any", false, false, false, 26)) ? ("Yes") : ("No"));
        yield "</td>
    </tr>
    <tr>
        <td>Skip Waiting</td>
        <td>";
        // line 30
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 30, $this->source); })()), "serviceWorker", [], "any", false, false, false, 30), "skipWaiting", [], "any", false, false, false, 30)) ? ("Yes") : ("No"));
        yield "</td>
    </tr>
</table>
<h3>Workbox</h3>
<p>Status: ";
        // line 34
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 34, $this->source); })()), "workbox", [], "any", false, false, false, 34), "enabled", [], "any", false, false, false, 34)) {
            // line 35
            yield "        <span class=\"status-badge status-success\">enabled</span>
    ";
        } else {
            // line 37
            yield "        <span class=\"status-badge status-warning\">disabled</span>
    ";
        }
        // line 39
        yield "<table>
    <thead>
    <tr>
        <th scope=\"col\" class=\"key\">Key</th>
        <th scope=\"col\">Value</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Use CDN?</td>
        <td>
            ";
        // line 50
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 50, $this->source); })()), "workbox", [], "any", false, false, false, 50), "useCDN", [], "any", false, false, false, 50)) {
            // line 51
            yield "                Yes, version: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 51, $this->source); })()), "workbox", [], "any", false, false, false, 51), "version", [], "any", false, false, false, 51), "html", null, true);
            yield "
            ";
        } else {
            // line 53
            yield "                No
            ";
        }
        // line 55
        yield "        </td>
    </tr>
    <tr>
        <td>Clear cache?</td>
        <td>";
        // line 59
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 59, $this->source); })()), "workbox", [], "any", false, false, false, 59), "clearCache", [], "any", false, false, false, 59)) {
            yield "Yes";
        } else {
            yield "No";
        }
        yield "</td>
    </tr>
    <tr>
        <td>Cache manifest?</td>
        <td>";
        // line 63
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 63, $this->source); })()), "workbox", [], "any", false, false, false, 63), "cacheManifest", [], "any", false, false, false, 63)) {
            yield "Yes";
        } else {
            yield "No";
        }
        yield "</td>
    </tr>
    <tr>
        <td>Asset cache</td>
        <td>
            ";
        // line 68
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 68, $this->source); })()), "workbox", [], "any", false, false, false, 68), "assetCache", [], "any", false, false, false, 68), "enabled", [], "any", false, false, false, 68)) {
            // line 69
            yield "                <span class=\"badge status-success\">Enabled</span><br>
                Cache name: <span class=\"badge\">";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 70, $this->source); })()), "workbox", [], "any", false, false, false, 70), "assetCache", [], "any", false, false, false, 70), "cacheName", [], "any", false, false, false, 70), "html", null, true);
            yield "</span><br>
                Regex: <span class=\"badge\">";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 71, $this->source); })()), "workbox", [], "any", false, false, false, 71), "assetCache", [], "any", false, false, false, 71), "regex", [], "any", false, false, false, 71), "html", null, true);
            yield "</span>
            ";
        } else {
            // line 73
            yield "                <span class=\"badge status-warning\">Disabled</span><br>
            ";
        }
        // line 75
        yield "        </td>
    </tr>
    <tr>
        <td>Font cache</td>
        <td>
            ";
        // line 80
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 80, $this->source); })()), "workbox", [], "any", false, false, false, 80), "fontCache", [], "any", false, false, false, 80), "enabled", [], "any", false, false, false, 80)) {
            // line 81
            yield "                <span class=\"badge status-success\">Enabled</span>
            ";
        } else {
            // line 83
            yield "                <span class=\"badge status-warning\">Disabled</span><br>
            ";
        }
        // line 85
        yield "        </td>
    </tr>
    <tr>
        <td>Google Font cache</td>
        <td>
            ";
        // line 90
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 90, $this->source); })()), "workbox", [], "any", false, false, false, 90), "googleFontCache", [], "any", false, false, false, 90), "enabled", [], "any", false, false, false, 90)) {
            // line 91
            yield "                <span class=\"badge status-success\">Enabled</span><br>
                Cache name: <span class=\"badge\">";
            // line 92
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "workbox", [], "any", false, true, false, 92), "googleFontCache", [], "any", false, true, false, 92), "cacheName", [], "any", true, true, false, 92) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 92, $this->source); })()), "workbox", [], "any", false, false, false, 92), "googleFontCache", [], "any", false, false, false, 92), "cacheName", [], "any", false, false, false, 92)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 92, $this->source); })()), "workbox", [], "any", false, false, false, 92), "googleFontCache", [], "any", false, false, false, 92), "cacheName", [], "any", false, false, false, 92), "html", null, true)) : ("default"));
            yield "</span>
            ";
        } else {
            // line 94
            yield "                <span class=\"badge status-warning\">Disabled</span><br>
            ";
        }
        // line 96
        yield "        </td>
    </tr>
    <tr>
        <td>Image cache</td>
        <td>
            ";
        // line 101
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 101, $this->source); })()), "workbox", [], "any", false, false, false, 101), "imageCache", [], "any", false, false, false, 101), "enabled", [], "any", false, false, false, 101)) {
            // line 102
            yield "                <span class=\"badge status-success\">Enabled</span><br>
                Cache name: <span class=\"badge\">";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 103, $this->source); })()), "workbox", [], "any", false, false, false, 103), "imageCache", [], "any", false, false, false, 103), "cacheName", [], "any", false, false, false, 103), "html", null, true);
            yield "</span><br>
                Regex: <span class=\"badge\">";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 104, $this->source); })()), "workbox", [], "any", false, false, false, 104), "imageCache", [], "any", false, false, false, 104), "regex", [], "any", false, false, false, 104), "html", null, true);
            yield "</span>
            ";
        } else {
            // line 106
            yield "                <span class=\"badge status-warning\">Disabled</span><br>
            ";
        }
        // line 108
        yield "        </td>
    </tr>
    </tbody>
</table>
<h3>Caching Strategies</h3>
<table>
    <thead>
    <tr>
        <th scope=\"col\" class=\"key\">Name</th>
        <th scope=\"col\">
            Enabled? <br>
            Workbox?
        </th>
        <th scope=\"col\">
            Strategy<br>
            Match Callback<br>
            Method
        </th>
        <th scope=\"col\">Plugins</th>
        <th scope=\"col\">URL Preload</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 131, $this->source); })()), "cachingStrategies", [], "any", false, false, false, 131));
        foreach ($context['_seq'] as $context["id"] => $context["cachingStrategy"]) {
            // line 132
            yield "        <tr>
            <td>";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cachingStrategy"], "getName", [], "method", false, false, false, 133), "html", null, true);
            yield "</td>
            <td class=\"break-long-words font-normal\">
                ";
            // line 135
            if (CoreExtension::getAttribute($this->env, $this->source, $context["cachingStrategy"], "isEnabled", [], "method", false, false, false, 135)) {
                yield "Yes";
            } else {
                yield "No";
            }
            yield " <br>
                ";
            // line 136
            if (CoreExtension::getAttribute($this->env, $this->source, $context["cachingStrategy"], "needsWorkbox", [], "method", false, false, false, 136)) {
                yield "Yes";
            } else {
                yield "No";
            }
            // line 137
            yield "            </td>
            <td class=\"break-long-words\">
                ";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cachingStrategy"], "strategy", [], "any", false, false, false, 139), "html", null, true);
            yield " <br>
                <span class=\"badge\">";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cachingStrategy"], "matchCallback", [], "any", false, false, false, 140), "html", null, true);
            yield "</span><br>
                ";
            // line 141
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["cachingStrategy"], "getMethod", [], "method", true, true, false, 141) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["cachingStrategy"], "getMethod", [], "method", false, false, false, 141)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cachingStrategy"], "getMethod", [], "method", false, false, false, 141), "html", null, true)) : ("GET"));
            yield "
            </td>
            <td class=\"break-long-words font-normal\">
                ";
            // line 144
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["cachingStrategy"], "plugins", [], "any", false, false, false, 144)) == 0)) {
                // line 145
                yield "                    None
                ";
            } else {
                // line 147
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["cachingStrategy"], "plugins", [], "any", false, false, false, 147));
                foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                    // line 148
                    yield "                        ";
                    if ($this->extensions['SpomkyLabs\PwaBundle\Twig\InstanceOfExtension']->isInstanceOf($context["plugin"], "SpomkyLabs\\PwaBundle\\WorkboxPlugin\\HasDebugInterface")) {
                        // line 149
                        yield "                            <h4><b>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "getName", [], "method", false, false, false, 149), "html", null, true);
                        yield "</b></h4>
                            <pre style=\"line-height: 0.70rem;\">";
                        // line 150
                        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "debug", [], "method", false, false, false, 150), Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT")), "html", null, true));
                        yield "</pre>
                        ";
                    } else {
                        // line 152
                        yield "                            ";
                        yield $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, $context["plugin"]);
                        yield "
                        ";
                    }
                    // line 154
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['plugin'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 155
                yield "                ";
            }
            // line 156
            yield "            </td>
            <td class=\"break-long-words font-normal\">
                ";
            // line 158
            $context["preloadedUrls"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["cachingStrategy"], "preloadUrls", [], "any", false, false, false, 158));
            // line 159
            yield "                ";
            if (((isset($context["preloadedUrls"]) || array_key_exists("preloadedUrls", $context) ? $context["preloadedUrls"] : (function () { throw new RuntimeError('Variable "preloadedUrls" does not exist.', 159, $this->source); })()) == 0)) {
                // line 160
                yield "                    None
                ";
            } else {
                // line 162
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["preloadedUrls"]) || array_key_exists("preloadedUrls", $context) ? $context["preloadedUrls"] : (function () { throw new RuntimeError('Variable "preloadedUrls" does not exist.', 162, $this->source); })()), "html", null, true);
                yield " URL";
                yield ((((isset($context["preloadedUrls"]) || array_key_exists("preloadedUrls", $context) ? $context["preloadedUrls"] : (function () { throw new RuntimeError('Variable "preloadedUrls" does not exist.', 162, $this->source); })()) > 1)) ? ("s") : (""));
                yield "
                ";
            }
            // line 164
            yield "            </td>
        </tr>
        ";
            // line 166
            if (((isset($context["preloadedUrls"]) || array_key_exists("preloadedUrls", $context) ? $context["preloadedUrls"] : (function () { throw new RuntimeError('Variable "preloadedUrls" does not exist.', 166, $this->source); })()) > 0)) {
                // line 167
                yield "            <tr>
                <td colspan=\"5\">
                    <div>
                        <a class=\"btn btn-link text-small sf-toggle sf-toggle-off\" data-toggle-selector=\"#data-serialize-";
                // line 170
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
                yield "\" data-toggle-alt-content=\"Hide preloaded URLs\" data-toggle-original-content=\"Show preloaded URLs\">
                            Show preloaded URLs
                        </a>
                        <div id=\"data-serialize-";
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
                yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                            ";
                // line 174
                yield $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["cachingStrategy"], "preloadUrls", [], "any", false, false, false, 174));
                yield "
                        </div>
                    </div>
                </td>
            </tr>
        ";
            }
            // line 180
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['id'], $context['cachingStrategy'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        yield "    </tbody>
</table>
<h3>Generated files</h3>
<ul>
    ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 185, $this->source); })()), "serviceWorkerFiles", [], "any", false, false, false, 185));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 186
            yield "        <li>
            <a href=\"";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "url", [], "any", false, false, false, 187), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "url", [], "any", false, false, false, 187), "html", null, true);
            yield "</a>
            ";
            // line 188
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["file"], "html", [], "any", false, false, false, 188))) {
                // line 189
                yield "                (will be included in the HTML)
            ";
            }
            // line 191
            yield "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['file'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        yield "</ul>
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
        return "@SpomkyLabsPwa/Collector/serviceworker-tab.html.twig";
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
        return array (  447 => 193,  440 => 191,  436 => 189,  434 => 188,  428 => 187,  425 => 186,  421 => 185,  415 => 181,  409 => 180,  400 => 174,  396 => 173,  390 => 170,  385 => 167,  383 => 166,  379 => 164,  371 => 162,  367 => 160,  364 => 159,  362 => 158,  358 => 156,  355 => 155,  349 => 154,  343 => 152,  338 => 150,  333 => 149,  330 => 148,  325 => 147,  321 => 145,  319 => 144,  313 => 141,  309 => 140,  305 => 139,  301 => 137,  295 => 136,  287 => 135,  282 => 133,  279 => 132,  275 => 131,  250 => 108,  246 => 106,  241 => 104,  237 => 103,  234 => 102,  232 => 101,  225 => 96,  221 => 94,  216 => 92,  213 => 91,  211 => 90,  204 => 85,  200 => 83,  196 => 81,  194 => 80,  187 => 75,  183 => 73,  178 => 71,  174 => 70,  171 => 69,  169 => 68,  157 => 63,  146 => 59,  140 => 55,  136 => 53,  130 => 51,  128 => 50,  115 => 39,  111 => 37,  107 => 35,  105 => 34,  98 => 30,  91 => 26,  84 => 22,  77 => 18,  65 => 8,  61 => 6,  57 => 4,  55 => 3,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h3>Details</h3>
<p>Status:
    {% if collector.data.serviceWorker.enabled %}
        <span class=\"status-badge status-success\">enabled</span>
    {% else %}
        <span class=\"status-badge status-warning\">disabled</span>
    {% endif %}
<table>
    <thead>
    <tr>
        <th scope=\"col\" class=\"key\">Key</th>
        <th scope=\"col\">Value</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Destination</td>
        <td>{{ collector.serviceWorker.dest }}</td>
    </tr>
    <tr>
        <td>Scope</td>
        <td>{{ collector.serviceWorker.scope }}</td>
    </tr>
    <tr>
        <td>Use Cache</td>
        <td>{{ collector.serviceWorker.useCache ? 'Yes' : 'No' }}</td>
    </tr>
    <tr>
        <td>Skip Waiting</td>
        <td>{{ collector.serviceWorker.skipWaiting ? 'Yes' : 'No' }}</td>
    </tr>
</table>
<h3>Workbox</h3>
<p>Status: {% if collector.workbox.enabled %}
        <span class=\"status-badge status-success\">enabled</span>
    {% else %}
        <span class=\"status-badge status-warning\">disabled</span>
    {% endif %}
<table>
    <thead>
    <tr>
        <th scope=\"col\" class=\"key\">Key</th>
        <th scope=\"col\">Value</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Use CDN?</td>
        <td>
            {% if collector.workbox.useCDN %}
                Yes, version: {{ collector.workbox.version }}
            {% else %}
                No
            {% endif %}
        </td>
    </tr>
    <tr>
        <td>Clear cache?</td>
        <td>{% if collector.workbox.clearCache %}Yes{% else %}No{% endif %}</td>
    </tr>
    <tr>
        <td>Cache manifest?</td>
        <td>{% if collector.workbox.cacheManifest %}Yes{% else %}No{% endif %}</td>
    </tr>
    <tr>
        <td>Asset cache</td>
        <td>
            {% if collector.workbox.assetCache.enabled %}
                <span class=\"badge status-success\">Enabled</span><br>
                Cache name: <span class=\"badge\">{{ collector.workbox.assetCache.cacheName }}</span><br>
                Regex: <span class=\"badge\">{{ collector.workbox.assetCache.regex }}</span>
            {% else %}
                <span class=\"badge status-warning\">Disabled</span><br>
            {% endif %}
        </td>
    </tr>
    <tr>
        <td>Font cache</td>
        <td>
            {% if collector.workbox.fontCache.enabled %}
                <span class=\"badge status-success\">Enabled</span>
            {% else %}
                <span class=\"badge status-warning\">Disabled</span><br>
            {% endif %}
        </td>
    </tr>
    <tr>
        <td>Google Font cache</td>
        <td>
            {% if collector.workbox.googleFontCache.enabled %}
                <span class=\"badge status-success\">Enabled</span><br>
                Cache name: <span class=\"badge\">{{ collector.workbox.googleFontCache.cacheName ?? 'default' }}</span>
            {% else %}
                <span class=\"badge status-warning\">Disabled</span><br>
            {% endif %}
        </td>
    </tr>
    <tr>
        <td>Image cache</td>
        <td>
            {% if collector.workbox.imageCache.enabled %}
                <span class=\"badge status-success\">Enabled</span><br>
                Cache name: <span class=\"badge\">{{ collector.workbox.imageCache.cacheName }}</span><br>
                Regex: <span class=\"badge\">{{ collector.workbox.imageCache.regex }}</span>
            {% else %}
                <span class=\"badge status-warning\">Disabled</span><br>
            {% endif %}
        </td>
    </tr>
    </tbody>
</table>
<h3>Caching Strategies</h3>
<table>
    <thead>
    <tr>
        <th scope=\"col\" class=\"key\">Name</th>
        <th scope=\"col\">
            Enabled? <br>
            Workbox?
        </th>
        <th scope=\"col\">
            Strategy<br>
            Match Callback<br>
            Method
        </th>
        <th scope=\"col\">Plugins</th>
        <th scope=\"col\">URL Preload</th>
    </tr>
    </thead>
    <tbody>
    {% for id, cachingStrategy in collector.cachingStrategies %}
        <tr>
            <td>{{ cachingStrategy.getName() }}</td>
            <td class=\"break-long-words font-normal\">
                {% if cachingStrategy.isEnabled() %}Yes{% else %}No{% endif %} <br>
                {% if cachingStrategy.needsWorkbox() %}Yes{% else %}No{% endif %}
            </td>
            <td class=\"break-long-words\">
                {{ cachingStrategy.strategy }} <br>
                <span class=\"badge\">{{ cachingStrategy.matchCallback }}</span><br>
                {{ cachingStrategy.getMethod() ?? \"GET\" }}
            </td>
            <td class=\"break-long-words font-normal\">
                {% if cachingStrategy.plugins|length == 0 %}
                    None
                {% else %}
                    {% for plugin in cachingStrategy.plugins %}
                        {% if plugin is instanceof('SpomkyLabs\\\\PwaBundle\\\\WorkboxPlugin\\\\HasDebugInterface') %}
                            <h4><b>{{ plugin.getName() }}</b></h4>
                            <pre style=\"line-height: 0.70rem;\">{{ plugin.debug()|json_encode(constant('JSON_PRETTY_PRINT'))|nl2br }}</pre>
                        {% else %}
                            {{ dump(plugin) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            </td>
            <td class=\"break-long-words font-normal\">
                {% set preloadedUrls = cachingStrategy.preloadUrls|length %}
                {% if preloadedUrls == 0 %}
                    None
                {% else %}
                    {{ preloadedUrls }} URL{{ preloadedUrls > 1 ? 's' : '' }}
                {% endif %}
            </td>
        </tr>
        {% if preloadedUrls > 0 %}
            <tr>
                <td colspan=\"5\">
                    <div>
                        <a class=\"btn btn-link text-small sf-toggle sf-toggle-off\" data-toggle-selector=\"#data-serialize-{{ id }}\" data-toggle-alt-content=\"Hide preloaded URLs\" data-toggle-original-content=\"Show preloaded URLs\">
                            Show preloaded URLs
                        </a>
                        <div id=\"data-serialize-{{ id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                            {{ dump(cachingStrategy.preloadUrls) }}
                        </div>
                    </div>
                </td>
            </tr>
        {% endif %}
    {% endfor %}
    </tbody>
</table>
<h3>Generated files</h3>
<ul>
    {% for file in collector.serviceWorkerFiles %}
        <li>
            <a href=\"{{ file.url }}\">{{ file.url }}</a>
            {% if file.html is not null %}
                (will be included in the HTML)
            {% endif %}
        </li>
    {% endfor %}
</ul>
", "@SpomkyLabsPwa/Collector/serviceworker-tab.html.twig", "/Users/praveenmujawdiya/Documents/survos/pwa-f7/vendor/spomky-labs/pwa-bundle/templates/Collector/serviceworker-tab.html.twig");
    }
}
