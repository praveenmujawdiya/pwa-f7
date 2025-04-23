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

/* /partials/app.html.twig */
class __TwigTemplate_4b880837b1a9d1ebefd315806e9dd300 extends Template
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
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/partials/app.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/partials/app.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/partials/app.html.twig"));

        // line 1
        yield "<template>
    <div id=\"app\">

        <div id=\"view-main\" class=\"view view-main safe-areas\"></div>

    </div>
</template>

<script>
    export default function(props, {\$, \$el, \$f7, \$f7ready, \$f7route, \$f7router, \$h, \$on, \$onMounted, \$store, \$theme, \$update}) {

        let initializeViews = function() {

            \$f7.views.create(\$el.value.find('#view-main'), {
                name: 'main',
                main: true,
                url: '/'
            });

        }

        \$onMounted(function() {
            \$f7ready(function() {
                initializeViews();
            });
        });

        return \$render;
    }
</script>";
        
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
        return "/partials/app.html.twig";
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
        return new Source("<template>
    <div id=\"app\">

        <div id=\"view-main\" class=\"view view-main safe-areas\"></div>

    </div>
</template>

<script>
    export default function(props, {\$, \$el, \$f7, \$f7ready, \$f7route, \$f7router, \$h, \$on, \$onMounted, \$store, \$theme, \$update}) {

        let initializeViews = function() {

            \$f7.views.create(\$el.value.find('#view-main'), {
                name: 'main',
                main: true,
                url: '/'
            });

        }

        \$onMounted(function() {
            \$f7ready(function() {
                initializeViews();
            });
        });

        return \$render;
    }
</script>", "/partials/app.html.twig", "/Users/praveenmujawdiya/Documents/survos/pwa-f7/templates/partials/app.html.twig");
    }
}
