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

/* js/routes.js.twig */
class __TwigTemplate_64ce1bffd423c12c4047168a473a1217 extends Template
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
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "js/routes.js.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "js/routes.js.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "js/routes.js.twig"));

        // line 1
        yield "'use strict';

/*
|------------------------------------------------------------------------------
| Define Namespace
|------------------------------------------------------------------------------
*/

window.routes = window.routes || [];

/*
|------------------------------------------------------------------------------
| Define Routes
|------------------------------------------------------------------------------
*/

window.routes.push(
    {
        path: '/',
        componentUrl: '";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("f7_app_partial_home_html"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_ar_vr"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_ar_vr"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_audio"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_audio"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_audio_recording"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_audio_recording"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_audio_session"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_audio_session"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_authentication"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_authentication"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_background_fetch"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_background_fetch"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_background_sync"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_background_sync"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_barcode_detection"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_barcode_detection"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_bluetooth"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_bluetooth"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_contact_picker"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_contact_picker"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_device_motion"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_device_motion"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_element_capture"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_element_capture"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_face_detection"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_face_detection"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_file_handling"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_file_handling"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_file_system"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_file_system"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_geolocation"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_geolocation"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_i18n"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_i18n"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_installation"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_installation"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_media_capture"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_media_capture"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_multi_touch"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_multi_touch"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_network_info"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_network_info"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_nfc"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_nfc"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_notifications"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_notifications"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_offline_support"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_offline_support"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_orientation"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_orientation"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_payment"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_payment"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_picture_in_picture"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_picture_in_picture"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_presentation"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_presentation"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_receiver"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_receiver"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_protocol_handling"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_protocol_handling"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_screen_capture"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_screen_capture"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_shortcuts"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_shortcuts"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_speech_recognition"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_speech_recognition"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_speech_synthesis"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_speech_synthesis"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_storage"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_storage"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_vibration"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_vibration"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_view_transition"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_view_transition"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_wake_lock"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_wake_lock"), "js", null, true);
        yield "'
    },
    {
        path: '";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_web_share"), "js", null, true);
        yield "',
        componentUrl: '";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_web_share"), "js", null, true);
        yield "'
    }
);";
        
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
        return "js/routes.js.twig";
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
        return array (  462 => 176,  458 => 175,  452 => 172,  448 => 171,  442 => 168,  438 => 167,  432 => 164,  428 => 163,  422 => 160,  418 => 159,  412 => 156,  408 => 155,  402 => 152,  398 => 151,  392 => 148,  388 => 147,  382 => 144,  378 => 143,  372 => 140,  368 => 139,  362 => 136,  358 => 135,  352 => 132,  348 => 131,  342 => 128,  338 => 127,  332 => 124,  328 => 123,  322 => 120,  318 => 119,  312 => 116,  308 => 115,  302 => 112,  298 => 111,  292 => 108,  288 => 107,  282 => 104,  278 => 103,  272 => 100,  268 => 99,  262 => 96,  258 => 95,  252 => 92,  248 => 91,  242 => 88,  238 => 87,  232 => 84,  228 => 83,  222 => 80,  218 => 79,  212 => 76,  208 => 75,  202 => 72,  198 => 71,  192 => 68,  188 => 67,  182 => 64,  178 => 63,  172 => 60,  168 => 59,  162 => 56,  158 => 55,  152 => 52,  148 => 51,  142 => 48,  138 => 47,  132 => 44,  128 => 43,  122 => 40,  118 => 39,  112 => 36,  108 => 35,  102 => 32,  98 => 31,  92 => 28,  88 => 27,  82 => 24,  78 => 23,  72 => 20,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("'use strict';

/*
|------------------------------------------------------------------------------
| Define Namespace
|------------------------------------------------------------------------------
*/

window.routes = window.routes || [];

/*
|------------------------------------------------------------------------------
| Define Routes
|------------------------------------------------------------------------------
*/

window.routes.push(
    {
        path: '/',
        componentUrl: '{{path(\"f7_app_partial_home_html\")}}'
    },
    {
        path: '{{ path('app_feature_ar_vr') }}',
        componentUrl: '{{ path('app_feature_ar_vr') }}'
    },
    {
        path: '{{ path('app_feature_audio') }}',
        componentUrl: '{{ path('app_feature_audio') }}'
    },
    {
        path: '{{ path('app_feature_audio_recording') }}',
        componentUrl: '{{ path('app_feature_audio_recording') }}'
    },
    {
        path: '{{ path('app_feature_audio_session') }}',
        componentUrl: '{{ path('app_feature_audio_session') }}'
    },
    {
        path: '{{ path('app_feature_authentication') }}',
        componentUrl: '{{ path('app_feature_authentication') }}'
    },
    {
        path: '{{ path('app_feature_background_fetch') }}',
        componentUrl: '{{ path('app_feature_background_fetch') }}'
    },
    {
        path: '{{ path('app_feature_background_sync') }}',
        componentUrl: '{{ path('app_feature_background_sync') }}'
    },
    {
        path: '{{ path('app_feature_barcode_detection') }}',
        componentUrl: '{{ path('app_feature_barcode_detection') }}'
    },
    {
        path: '{{ path('app_feature_bluetooth') }}',
        componentUrl: '{{ path('app_feature_bluetooth') }}'
    },
    {
        path: '{{ path('app_feature_contact_picker') }}',
        componentUrl: '{{ path('app_feature_contact_picker') }}'
    },
    {
        path: '{{ path('app_feature_device_motion') }}',
        componentUrl: '{{ path('app_feature_device_motion') }}'
    },
    {
        path: '{{ path('app_feature_element_capture') }}',
        componentUrl: '{{ path('app_feature_element_capture') }}'
    },
    {
        path: '{{ path('app_feature_face_detection') }}',
        componentUrl: '{{ path('app_feature_face_detection') }}'
    },
    {
        path: '{{ path('app_feature_file_handling') }}',
        componentUrl: '{{ path('app_feature_file_handling') }}'
    },
    {
        path: '{{ path('app_feature_file_system') }}',
        componentUrl: '{{ path('app_feature_file_system') }}'
    },
    {
        path: '{{ path('app_feature_geolocation') }}',
        componentUrl: '{{ path('app_feature_geolocation') }}'
    },
    {
        path: '{{ path('app_feature_i18n') }}',
        componentUrl: '{{ path('app_feature_i18n') }}'
    },
    {
        path: '{{ path('app_feature_installation') }}',
        componentUrl: '{{ path('app_feature_installation') }}'
    },
    {
        path: '{{ path('app_feature_media_capture') }}',
        componentUrl: '{{ path('app_feature_media_capture') }}'
    },
    {
        path: '{{ path('app_feature_multi_touch') }}',
        componentUrl: '{{ path('app_feature_multi_touch') }}'
    },
    {
        path: '{{ path('app_feature_network_info') }}',
        componentUrl: '{{ path('app_feature_network_info') }}'
    },
    {
        path: '{{ path('app_feature_nfc') }}',
        componentUrl: '{{ path('app_feature_nfc') }}'
    },
    {
        path: '{{ path('app_feature_notifications') }}',
        componentUrl: '{{ path('app_feature_notifications') }}'
    },
    {
        path: '{{ path('app_feature_offline_support') }}',
        componentUrl: '{{ path('app_feature_offline_support') }}'
    },
    {
        path: '{{ path('app_feature_orientation') }}',
        componentUrl: '{{ path('app_feature_orientation') }}'
    },
    {
        path: '{{ path('app_feature_payment') }}',
        componentUrl: '{{ path('app_feature_payment') }}'
    },
    {
        path: '{{ path('app_feature_picture_in_picture') }}',
        componentUrl: '{{ path('app_feature_picture_in_picture') }}'
    },
    {
        path: '{{ path('app_feature_presentation') }}',
        componentUrl: '{{ path('app_feature_presentation') }}'
    },
    {
        path: '{{ path('app_feature_receiver') }}',
        componentUrl: '{{ path('app_feature_receiver') }}'
    },
    {
        path: '{{ path('app_feature_protocol_handling') }}',
        componentUrl: '{{ path('app_feature_protocol_handling') }}'
    },
    {
        path: '{{ path('app_feature_screen_capture') }}',
        componentUrl: '{{ path('app_feature_screen_capture') }}'
    },
    {
        path: '{{ path('app_feature_shortcuts') }}',
        componentUrl: '{{ path('app_feature_shortcuts') }}'
    },
    {
        path: '{{ path('app_feature_speech_recognition') }}',
        componentUrl: '{{ path('app_feature_speech_recognition') }}'
    },
    {
        path: '{{ path('app_feature_speech_synthesis') }}',
        componentUrl: '{{ path('app_feature_speech_synthesis') }}'
    },
    {
        path: '{{ path('app_feature_storage') }}',
        componentUrl: '{{ path('app_feature_storage') }}'
    },
    {
        path: '{{ path('app_feature_vibration') }}',
        componentUrl: '{{ path('app_feature_vibration') }}'
    },
    {
        path: '{{ path('app_feature_view_transition') }}',
        componentUrl: '{{ path('app_feature_view_transition') }}'
    },
    {
        path: '{{ path('app_feature_wake_lock') }}',
        componentUrl: '{{ path('app_feature_wake_lock') }}'
    },
    {
        path: '{{ path('app_feature_web_share') }}',
        componentUrl: '{{ path('app_feature_web_share') }}'
    }
);", "js/routes.js.twig", "/Users/praveenmujawdiya/Documents/survos/pwa-f7/templates/js/routes.js.twig");
    }
}
