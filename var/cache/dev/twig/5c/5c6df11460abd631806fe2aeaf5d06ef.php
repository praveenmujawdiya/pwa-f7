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

/* @SurvosFw/fw-base.html.twig */
class __TwigTemplate_cb8ec196f14b55b4ea7973f23ec45ab1 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'importmap' => [$this, 'block_importmap'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ba1c37b184061724dbe82aef62fe32a3 = $this->extensions["Inspector\\Symfony\\Bundle\\Twig\\TwigTracer"];
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosFw/fw-base.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosFw/fw-base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosFw/fw-base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <title>";
        // line 4
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
  <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">

  <meta charset=\"utf-8\">
  <!--
  Customize this policy to fit your own app's needs. For more guidance, please refer to the docs:
      https://cordova.apache.org/docs/en/latest/
  Some notes:
    * https://ssl.gstatic.com is required only on Android and is needed for TalkBack to function properly
    * Disables use of inline scripts in order to mitigate risk of XSS vulnerabilities. To change this:
      * Enable inline JS: add 'unsafe-inline' to default-src
  -->
  <meta http-equiv=\"Content-Security-Policy\" content=\"default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: content:\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover\">

  <meta name=\"theme-color\" content=\"#fff\">
  <meta name=\"format-detection\" content=\"telephone=no\">
  <meta name=\"msapplication-tap-highlight\" content=\"no\">
  <title>My App</title>

  <meta name=\"mobile-web-app-capable\" content=\"yes\">
  <meta name=\"mobile-web-app-status-bar-style\" content=\"black-translucent\">
  ";
        // line 26
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 35
        yield "
  ";
        // line 36
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 54
        yield "
</head>


<body data-turbo=\"false\">
";
        // line 59
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 282
        yield "
</html>
";
        
        $__internal_ba1c37b184061724dbe82aef62fe32a3->leave($__internal_ba1c37b184061724dbe82aef62fe32a3_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ba1c37b184061724dbe82aef62fe32a3 = $this->extensions["Inspector\\Symfony\\Bundle\\Twig\\TwigTracer"];
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_ba1c37b184061724dbe82aef62fe32a3->leave($__internal_ba1c37b184061724dbe82aef62fe32a3_prof);

        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ba1c37b184061724dbe82aef62fe32a3 = $this->extensions["Inspector\\Symfony\\Bundle\\Twig\\TwigTracer"];
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 30
        yield "
";
        // line 34
        yield "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_ba1c37b184061724dbe82aef62fe32a3->leave($__internal_ba1c37b184061724dbe82aef62fe32a3_prof);

        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ba1c37b184061724dbe82aef62fe32a3 = $this->extensions["Inspector\\Symfony\\Bundle\\Twig\\TwigTracer"];
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 37
        yield "
    ";
        // line 38
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 39
        yield "
";
        // line 41
        yield "

";
        // line 44
        yield "

";
        // line 52
        yield "
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_ba1c37b184061724dbe82aef62fe32a3->leave($__internal_ba1c37b184061724dbe82aef62fe32a3_prof);

        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_importmap(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ba1c37b184061724dbe82aef62fe32a3 = $this->extensions["Inspector\\Symfony\\Bundle\\Twig\\TwigTracer"];
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_ba1c37b184061724dbe82aef62fe32a3->leave($__internal_ba1c37b184061724dbe82aef62fe32a3_prof);

        yield from [];
    }

    // line 59
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

        // line 60
        yield "
  <div id=\"app\">
    <!-- Left panel with cover effect-->
    <div class=\"panel panel-left panel-cover dark panel-init\">
      <div class=\"view\">
        <div class=\"page\">
          <div class=\"navbar\">
            <div class=\"navbar-bg\"></div>
            <div class=\"navbar-inner\">
              <div class=\"title\">Left Panel</div>
            </div>
          </div>
          <div class=\"page-content\">
            <div class=\"block\">Left panel content goes here</div>
          </div>
        </div>
      </div>
    </div>
    <!-- Right panel with reveal effect-->
    <div class=\"panel panel-right panel-reveal dark\">
      <div class=\"view\">
        <div class=\"page\">
          <div class=\"navbar\">
            <div class=\"navbar-bg\"></div>
            <div class=\"navbar-inner\">
              <div class=\"title\">Right Panel</div>
            </div>
          </div>
          <div class=\"page-content\">
            <div class=\"block\">Right panel content goes here</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Views/Tabs container -->
    <div class=\"views tabs safe-areas\">
      <!-- Tabbar for switching views-tabs -->
      ";
        // line 98
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("mobile_menu", ["type" => "MOBILE_TAB_MENU", "caller" => $this->getTemplateName()]);
        yield "

      <div class=\"toolbar toolbar-bottom tabbar-icons\">
        <div class=\"toolbar-inner\">
          <a href=\"#view-home\" class=\"tab-link tab-link-active\">
            <i class=\"icon f7-icons if-not-md\">house_fill</i>
            ";
        // line 104
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:home-filled"]);
        yield "
            <span class=\"tabbar-label\">Home</span>
          </a>
          <a href=\"#view-catalog\" class=\"tab-link\">
            <i class=\"icon f7-icons if-not-md\">square_list_fill</i>
            <i class=\"icon material-icons if-md\">view_list</i>
            <span class=\"tabbar-label\">Catalog</span>
          </a>
          <a href=\"#view-settings\" class=\"tab-link\">
            <i class=\"icon f7-icons if-not-md\">gear</i>
            <i class=\"icon material-icons if-md\">settings</i>
            <span class=\"tabbar-label\">Settings</span>
          </a>
        </div>
      </div>

      <!-- Your main view/tab, should have \"view-main\" class. It also has \"tab-active\" class -->
      <div id=\"view-home\" class=\"view view-main view-init tab tab-active\">
        <div class=\"page\" data-name=\"home\">
          <!-- Top Navbar -->
          <div class=\"navbar navbar-large\">
            <div class=\"navbar-bg\"></div>
            <div class=\"navbar-inner\">
              <div class=\"left\">
                <a href=\"#\" class=\"link icon-only panel-open\" data-panel=\"left\">
                  <i class=\"icon f7-icons if-not-md\">menu</i>
                  <i class=\"icon material-icons if-md\">menu</i>
                </a>
              </div>
              <div class=\"title sliding\">My App</div>
              <div class=\"right\">
                <a href=\"#\" class=\"link icon-only panel-open\" data-panel=\"right\">
                  <i class=\"icon f7-icons if-not-md\">menu</i>
                  <i class=\"icon material-icons if-md\">menu</i>
                </a>
              </div>
              <div class=\"title-large\">
                <div class=\"title-large-text\">My App</div>
              </div>
            </div>
          </div>

          <!-- Scrollable page content-->
          <div class=\"page-content\">
            <div class=\"block\">
              <p>This is an example of tabs-layout application. The main point of such tabbed layout is that each tab contains independent view with its own routing and navigation.</p>

              <p>Each tab/view may have different layout, different navbar type (dynamic, fixed or static) or without navbar like this tab.</p>
            </div>
            <div class=\"block-title\">Navigation</div>
            <div class=\"list list-strong inset list-dividers-ios\">
              <ul>
                <li>
                  <a href=\"/about/\" class=\"item-content item-link\">
                    <div class=\"item-inner\">
                      <div class=\"item-title\">About</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href=\"/form/\" class=\"item-content item-link\">
                    <div class=\"item-inner\">
                      <div class=\"item-title\">Form</div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>

            <div class=\"block-title\">Modals</div>
            <div class=\"block grid grid-cols-2 grid-gap\">
              <a href=\"#\" class=\"button button-fill popup-open\" data-popup=\"#my-popup\">Popup</a>
              <a href=\"#\" class=\"button button-fill login-screen-open\" data-login-screen=\"#my-login-screen\">Login Screen</a>
            </div>

            <div class=\"block-title\">Panels</div>
            <div class=\"block grid grid-cols-2 grid-gap\">
              <a href=\"#\" class=\"button button-fill panel-open\" data-panel=\"left\">Left Panel</a>
              <a href=\"#\" class=\"button button-fill panel-open\" data-panel=\"right\">Right Panel</a>
            </div>

            <div class=\"list list-strong inset list-dividers-ios links-list\">
              <ul>
                <li>
                  <a href=\"/dynamic-route/blog/45/post/125/?foo=bar#about\">Dynamic (Component) Route</a>
                </li>
                <li>
                  <a href=\"/load-something-that-doesnt-exist/\">Default Route (404)</a>
                </li>
                <li>
                  <a href=\"/request-and-load/user/123456/\">Request Data & Load</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Catalog View -->
      <div id=\"view-catalog\" class=\"view view-init tab\" data-name=\"catalog\" data-url=\"/catalog/\">
        <!-- Catalog page will be loaded here dynamically from /catalog/ route -->
      </div>

      <!-- Settings View -->
      <div id=\"view-settings\" class=\"view view-init tab\" data-name=\"settings\" data-url=\"/settings/\">
        <!-- Settings page will be loaded here dynamically from /settings/ route -->
      </div>
    </div>


    <!-- Popup -->
    <div class=\"popup\" id=\"my-popup\">
      <div class=\"view\">
        <div class=\"page\">
          <div class=\"navbar\">
            <div class=\"navbar-bg\"></div>
            <div class=\"navbar-inner\">
              <div class=\"title\">Popup</div>
              <div class=\"right\">
                <a href=\"#\" class=\"link popup-close\">Close</a>
              </div>
            </div>
          </div>
          <div class=\"page-content\">
            <div class=\"block\">
              <p>Popup content goes here.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Login Screen -->
    <div class=\"login-screen\" id=\"my-login-screen\">
      <div class=\"view\">
        <div class=\"page\">
          <div class=\"page-content login-screen-content\">
            <div class=\"login-screen-title\">Login</div>
            <div class=\"list\">
              <ul>
                <li class=\"item-content item-input\">
                  <div class=\"item-inner\">
                    <div class=\"item-title item-label\">Username</div>
                    <div class=\"item-input-wrap\">

                      <input type=\"text\" name=\"username\" placeholder=\"Your username\"/>
                    </div>
                  </div>
                </li>
                <li class=\"item-content item-input\">
                  <div class=\"item-inner\">
                    <div class=\"item-title item-label\">Password</div>
                    <div class=\"item-input-wrap\">

                      <input type=\"password\" name=\"password\" placeholder=\"Your password\"/>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class=\"list\">
              <ul>
                <li>

                  <a href=\"#\" class=\"item-link list-button login-button\">Sign In</a>
                </li>
              </ul>
              <div class=\"block-footer\">Some text about login information.<br/>Click \"Sign In\" to close Login Screen</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Framework7 library -->
</body>
";
        
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
        return "@SurvosFw/fw-base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  321 => 104,  312 => 98,  272 => 60,  256 => 59,  227 => 38,  212 => 52,  208 => 44,  204 => 41,  201 => 39,  199 => 38,  196 => 37,  180 => 36,  166 => 34,  163 => 30,  147 => 26,  118 => 4,  102 => 282,  100 => 59,  93 => 54,  91 => 36,  88 => 35,  86 => 26,  61 => 4,  56 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <title>{% block title %}Welcome!{% endblock %}</title>
  <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">

  <meta charset=\"utf-8\">
  <!--
  Customize this policy to fit your own app's needs. For more guidance, please refer to the docs:
      https://cordova.apache.org/docs/en/latest/
  Some notes:
    * https://ssl.gstatic.com is required only on Android and is needed for TalkBack to function properly
    * Disables use of inline scripts in order to mitigate risk of XSS vulnerabilities. To change this:
      * Enable inline JS: add 'unsafe-inline' to default-src
  -->
  <meta http-equiv=\"Content-Security-Policy\" content=\"default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: content:\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover\">

  <meta name=\"theme-color\" content=\"#fff\">
  <meta name=\"format-detection\" content=\"telephone=no\">
  <meta name=\"msapplication-tap-highlight\" content=\"no\">
  <title>My App</title>

  <meta name=\"mobile-web-app-capable\" content=\"yes\">
  <meta name=\"mobile-web-app-status-bar-style\" content=\"black-translucent\">
  {% block stylesheets %}
{#  <link rel=\"apple-touch-icon\" href=\"assets/icons/apple-touch-icon.png\">#}
{#  <link rel=\"icon\" href=\"assets/icons/favicon.png\">#}
{#  <link rel=\"manifest\" href=\"/manifest.json\">#}

{#  <link rel=\"stylesheet\" href=\"framework7/framework7-bundle.min.css\">#}
{#  <link rel=\"stylesheet\" href=\"css/icons.css\">#}
{#  <link rel=\"stylesheet\" href=\"css/app.css\">#}
  {% endblock %}

  {% block javascripts %}

    {% block importmap %}{{ importmap('app') }}{% endblock %}

{#    <script src=\"framework7/framework7-bundle.min.js\"></script>#}


{#    <script src=\"framework7/framework7-bundle.min.js\"></script>#}


{#    <!-- App routes -->#}
{#    <script src=\"js/routes.js\"></script>#}
{#    <!-- App store -->#}
{#    <script src=\"js/store.js\"></script>#}
{#    <!-- App scripts -->#}
{#    <script src=\"js/app.js\"></script>#}

  {% endblock %}

</head>


<body data-turbo=\"false\">
{% block body %}

  <div id=\"app\">
    <!-- Left panel with cover effect-->
    <div class=\"panel panel-left panel-cover dark panel-init\">
      <div class=\"view\">
        <div class=\"page\">
          <div class=\"navbar\">
            <div class=\"navbar-bg\"></div>
            <div class=\"navbar-inner\">
              <div class=\"title\">Left Panel</div>
            </div>
          </div>
          <div class=\"page-content\">
            <div class=\"block\">Left panel content goes here</div>
          </div>
        </div>
      </div>
    </div>
    <!-- Right panel with reveal effect-->
    <div class=\"panel panel-right panel-reveal dark\">
      <div class=\"view\">
        <div class=\"page\">
          <div class=\"navbar\">
            <div class=\"navbar-bg\"></div>
            <div class=\"navbar-inner\">
              <div class=\"title\">Right Panel</div>
            </div>
          </div>
          <div class=\"page-content\">
            <div class=\"block\">Right panel content goes here</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Views/Tabs container -->
    <div class=\"views tabs safe-areas\">
      <!-- Tabbar for switching views-tabs -->
      {{ component('mobile_menu', {type: 'MOBILE_TAB_MENU', caller: _self}) }}

      <div class=\"toolbar toolbar-bottom tabbar-icons\">
        <div class=\"toolbar-inner\">
          <a href=\"#view-home\" class=\"tab-link tab-link-active\">
            <i class=\"icon f7-icons if-not-md\">house_fill</i>
            {{ component('ux:icon', { name: 'tabler:home-filled' }) }}
            <span class=\"tabbar-label\">Home</span>
          </a>
          <a href=\"#view-catalog\" class=\"tab-link\">
            <i class=\"icon f7-icons if-not-md\">square_list_fill</i>
            <i class=\"icon material-icons if-md\">view_list</i>
            <span class=\"tabbar-label\">Catalog</span>
          </a>
          <a href=\"#view-settings\" class=\"tab-link\">
            <i class=\"icon f7-icons if-not-md\">gear</i>
            <i class=\"icon material-icons if-md\">settings</i>
            <span class=\"tabbar-label\">Settings</span>
          </a>
        </div>
      </div>

      <!-- Your main view/tab, should have \"view-main\" class. It also has \"tab-active\" class -->
      <div id=\"view-home\" class=\"view view-main view-init tab tab-active\">
        <div class=\"page\" data-name=\"home\">
          <!-- Top Navbar -->
          <div class=\"navbar navbar-large\">
            <div class=\"navbar-bg\"></div>
            <div class=\"navbar-inner\">
              <div class=\"left\">
                <a href=\"#\" class=\"link icon-only panel-open\" data-panel=\"left\">
                  <i class=\"icon f7-icons if-not-md\">menu</i>
                  <i class=\"icon material-icons if-md\">menu</i>
                </a>
              </div>
              <div class=\"title sliding\">My App</div>
              <div class=\"right\">
                <a href=\"#\" class=\"link icon-only panel-open\" data-panel=\"right\">
                  <i class=\"icon f7-icons if-not-md\">menu</i>
                  <i class=\"icon material-icons if-md\">menu</i>
                </a>
              </div>
              <div class=\"title-large\">
                <div class=\"title-large-text\">My App</div>
              </div>
            </div>
          </div>

          <!-- Scrollable page content-->
          <div class=\"page-content\">
            <div class=\"block\">
              <p>This is an example of tabs-layout application. The main point of such tabbed layout is that each tab contains independent view with its own routing and navigation.</p>

              <p>Each tab/view may have different layout, different navbar type (dynamic, fixed or static) or without navbar like this tab.</p>
            </div>
            <div class=\"block-title\">Navigation</div>
            <div class=\"list list-strong inset list-dividers-ios\">
              <ul>
                <li>
                  <a href=\"/about/\" class=\"item-content item-link\">
                    <div class=\"item-inner\">
                      <div class=\"item-title\">About</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href=\"/form/\" class=\"item-content item-link\">
                    <div class=\"item-inner\">
                      <div class=\"item-title\">Form</div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>

            <div class=\"block-title\">Modals</div>
            <div class=\"block grid grid-cols-2 grid-gap\">
              <a href=\"#\" class=\"button button-fill popup-open\" data-popup=\"#my-popup\">Popup</a>
              <a href=\"#\" class=\"button button-fill login-screen-open\" data-login-screen=\"#my-login-screen\">Login Screen</a>
            </div>

            <div class=\"block-title\">Panels</div>
            <div class=\"block grid grid-cols-2 grid-gap\">
              <a href=\"#\" class=\"button button-fill panel-open\" data-panel=\"left\">Left Panel</a>
              <a href=\"#\" class=\"button button-fill panel-open\" data-panel=\"right\">Right Panel</a>
            </div>

            <div class=\"list list-strong inset list-dividers-ios links-list\">
              <ul>
                <li>
                  <a href=\"/dynamic-route/blog/45/post/125/?foo=bar#about\">Dynamic (Component) Route</a>
                </li>
                <li>
                  <a href=\"/load-something-that-doesnt-exist/\">Default Route (404)</a>
                </li>
                <li>
                  <a href=\"/request-and-load/user/123456/\">Request Data & Load</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Catalog View -->
      <div id=\"view-catalog\" class=\"view view-init tab\" data-name=\"catalog\" data-url=\"/catalog/\">
        <!-- Catalog page will be loaded here dynamically from /catalog/ route -->
      </div>

      <!-- Settings View -->
      <div id=\"view-settings\" class=\"view view-init tab\" data-name=\"settings\" data-url=\"/settings/\">
        <!-- Settings page will be loaded here dynamically from /settings/ route -->
      </div>
    </div>


    <!-- Popup -->
    <div class=\"popup\" id=\"my-popup\">
      <div class=\"view\">
        <div class=\"page\">
          <div class=\"navbar\">
            <div class=\"navbar-bg\"></div>
            <div class=\"navbar-inner\">
              <div class=\"title\">Popup</div>
              <div class=\"right\">
                <a href=\"#\" class=\"link popup-close\">Close</a>
              </div>
            </div>
          </div>
          <div class=\"page-content\">
            <div class=\"block\">
              <p>Popup content goes here.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Login Screen -->
    <div class=\"login-screen\" id=\"my-login-screen\">
      <div class=\"view\">
        <div class=\"page\">
          <div class=\"page-content login-screen-content\">
            <div class=\"login-screen-title\">Login</div>
            <div class=\"list\">
              <ul>
                <li class=\"item-content item-input\">
                  <div class=\"item-inner\">
                    <div class=\"item-title item-label\">Username</div>
                    <div class=\"item-input-wrap\">

                      <input type=\"text\" name=\"username\" placeholder=\"Your username\"/>
                    </div>
                  </div>
                </li>
                <li class=\"item-content item-input\">
                  <div class=\"item-inner\">
                    <div class=\"item-title item-label\">Password</div>
                    <div class=\"item-input-wrap\">

                      <input type=\"password\" name=\"password\" placeholder=\"Your password\"/>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class=\"list\">
              <ul>
                <li>

                  <a href=\"#\" class=\"item-link list-button login-button\">Sign In</a>
                </li>
              </ul>
              <div class=\"block-footer\">Some text about login information.<br/>Click \"Sign In\" to close Login Screen</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Framework7 library -->
</body>
{% endblock %}

</html>
", "@SurvosFw/fw-base.html.twig", "/Users/praveenmujawdiya/Documents/survos/pwa-f7/vendor/survos/fw-bundle/templates/fw-base.html.twig");
    }
}
