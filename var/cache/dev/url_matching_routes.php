<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_root', '_controller' => 'App\\Controller\\RootController'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:37)'
                        .'|\\.well\\-known/genid/([^/]++)(*:72)'
                        .'|validation_errors/([^/]++)(*:105)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:142)'
                    .'|/(?'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:185)'
                        .'|errors/(\\d+)(?:\\.([^/]++))?(*:220)'
                        .'|validation_errors/([^/]++)(?'
                            .'|(*:257)'
                        .')'
                    .')'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:296)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:335)'
                    .'|components/([^/]++)(?:/([^/]++))?(*:376)'
                    .'|wdt/([^/]++)(*:396)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:438)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:475)'
                                .'|router(*:489)'
                                .'|exception(?'
                                    .'|(*:509)'
                                    .'|\\.css(*:522)'
                                .')'
                            .')'
                            .'|(*:532)'
                        .')'
                    .')'
                .')'
                .'|/(en_US|fr_FR)(?'
                    .'|/(?'
                        .'|a(?'
                            .'|r\\-vr(*:573)'
                            .'|u(?'
                                .'|dio(?'
                                    .'|(*:591)'
                                    .'|\\-(?'
                                        .'|recording(*:613)'
                                        .'|session(*:628)'
                                    .')'
                                .')'
                                .'|thentication(*:650)'
                            .')'
                            .'|dd(*:661)'
                            .'|bout(*:673)'
                        .')'
                        .'|b(?'
                            .'|a(?'
                                .'|ckground\\-(?'
                                    .'|fetch(*:708)'
                                    .'|sync(*:720)'
                                .')'
                                .'|rcode\\-detection(*:745)'
                            .')'
                            .'|luetooth(*:762)'
                        .')'
                        .'|contact\\-picker(*:786)'
                        .'|device\\-motion(*:808)'
                        .'|element\\-capture(*:832)'
                        .'|f(?'
                            .'|ace\\-detection(*:858)'
                            .'|ile\\-(?'
                                .'|handling(*:882)'
                                .'|system(*:896)'
                            .')'
                        .')'
                        .'|geolocation(*:917)'
                        .'|i(?'
                            .'|18n(*:932)'
                            .'|n(?'
                                .'|stallation(*:954)'
                                .'|formation(*:971)'
                            .')'
                            .'|tems/([^/]++)/(?'
                                .'|toggle(*:1003)'
                                .'|remove(*:1018)'
                            .')'
                        .')'
                        .'|m(?'
                            .'|edia\\-capture(*:1046)'
                            .'|ulti\\-touch(*:1066)'
                        .')'
                        .'|n(?'
                            .'|etwork\\-info(*:1092)'
                            .'|fc(*:1103)'
                            .'|otifications(*:1124)'
                        .')'
                        .'|o(?'
                            .'|ffline\\-support(*:1153)'
                            .'|rientation(*:1172)'
                        .')'
                        .'|p(?'
                            .'|a(?'
                                .'|yment(*:1195)'
                                .'|rtials/(?'
                                    .'|app\\.html(*:1223)'
                                    .'|home\\.html(*:1242)'
                                .')'
                            .')'
                            .'|icture\\-in\\-picture(*:1272)'
                            .'|r(?'
                                .'|esentation(*:1295)'
                                .'|otocol\\-handling(*:1320)'
                            .')'
                        .')'
                        .'|receiver(*:1339)'
                        .'|s(?'
                            .'|creen\\-capture(*:1366)'
                            .'|hortcuts(*:1383)'
                            .'|peech\\-(?'
                                .'|recognition(*:1413)'
                                .'|synthesis(*:1431)'
                            .')'
                            .'|torage(*:1447)'
                        .')'
                        .'|vi(?'
                            .'|bration(*:1469)'
                            .'|ew\\-transition(*:1492)'
                        .')'
                        .'|w(?'
                            .'|ake\\-lock(*:1515)'
                            .'|eb\\-share(*:1533)'
                        .')'
                        .'|js/(?'
                            .'|config\\.js(*:1559)'
                            .'|routes\\.js(*:1578)'
                            .'|store\\.js(*:1596)'
                            .'|init\\.js(*:1613)'
                        .')'
                        .'|handler(*:1630)'
                    .')'
                    .'|(*:1640)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        37 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        72 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        105 => [[['_route' => 'api_validation_errors', '_controller' => 'api_platform.action.not_exposed'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        142 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        185 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        220 => [[['_route' => '_api_errors', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors'], ['status', '_format'], ['GET' => 0], null, false, true, null]],
        257 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        296 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        335 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        376 => [[['_route' => 'ux_live_component', '_live_action' => 'get'], ['_live_component', '_live_action'], null, null, false, true, null]],
        396 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        438 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        475 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        489 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        509 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        522 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        532 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        573 => [[['_route' => 'app_feature_ar_vr', '_controller' => 'App\\Controller\\Feature\\ArVrController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        591 => [[['_route' => 'app_feature_audio', '_controller' => 'App\\Controller\\Feature\\AudioController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        613 => [[['_route' => 'app_feature_audio_recording', '_controller' => 'App\\Controller\\Feature\\AudioRecordingController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        628 => [[['_route' => 'app_feature_audio_session', '_controller' => 'App\\Controller\\Feature\\AudioSessionController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        650 => [[['_route' => 'app_feature_authentication', '_controller' => 'App\\Controller\\Feature\\AuthenticationController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        661 => [[['_route' => 'app_add_item', '_controller' => 'App\\Controller\\HomepageController::addItem'], ['_locale'], ['POST' => 0], null, false, false, null]],
        673 => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\HomepageController::about'], ['_locale'], ['GET' => 0], null, false, false, null]],
        708 => [[['_route' => 'app_feature_background_fetch', '_controller' => 'App\\Controller\\Feature\\BackgroundFetchController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        720 => [[['_route' => 'app_feature_background_sync', '_controller' => 'App\\Controller\\Feature\\BackgroundSyncController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        745 => [[['_route' => 'app_feature_barcode_detection', '_controller' => 'App\\Controller\\Feature\\BarcodeDetectionController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        762 => [[['_route' => 'app_feature_bluetooth', '_controller' => 'App\\Controller\\Feature\\BluetoothController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        786 => [[['_route' => 'app_feature_contact_picker', '_controller' => 'App\\Controller\\Feature\\ContactPickerController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        808 => [[['_route' => 'app_feature_device_motion', '_controller' => 'App\\Controller\\Feature\\DeviceMotionController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        832 => [[['_route' => 'app_feature_element_capture', '_controller' => 'App\\Controller\\Feature\\ElementCaptureController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        858 => [[['_route' => 'app_feature_face_detection', '_controller' => 'App\\Controller\\Feature\\FaceDetectionController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        882 => [[['_route' => 'app_feature_file_handling', '_controller' => 'App\\Controller\\Feature\\FileHandlingController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        896 => [[['_route' => 'app_feature_file_system', '_controller' => 'App\\Controller\\Feature\\FileSystemController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        917 => [[['_route' => 'app_feature_geolocation', '_controller' => 'App\\Controller\\Feature\\GeolocationController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        932 => [[['_route' => 'app_feature_i18n', '_controller' => 'App\\Controller\\Feature\\I18nController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        954 => [[['_route' => 'app_feature_installation', '_controller' => 'App\\Controller\\Feature\\InstallationController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        971 => [[['_route' => 'app_information', '_controller' => 'App\\Controller\\InformationController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1003 => [[['_route' => 'app_toggle', '_controller' => 'App\\Controller\\HomepageController::toggle'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        1018 => [[['_route' => 'app_remove', '_controller' => 'App\\Controller\\HomepageController::remove'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        1046 => [[['_route' => 'app_feature_media_capture', '_controller' => 'App\\Controller\\Feature\\MediaCaptureController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1066 => [[['_route' => 'app_feature_multi_touch', '_controller' => 'App\\Controller\\Feature\\MultiTouchController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1092 => [[['_route' => 'app_feature_network_info', '_controller' => 'App\\Controller\\Feature\\NetworkInfoController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1103 => [[['_route' => 'app_feature_nfc', '_controller' => 'App\\Controller\\Feature\\NfcController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1124 => [[['_route' => 'app_feature_notifications', '_controller' => 'App\\Controller\\Feature\\NotificationController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1153 => [[['_route' => 'app_feature_offline_support', '_controller' => 'App\\Controller\\Feature\\OfflineSupportController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1172 => [[['_route' => 'app_feature_orientation', '_controller' => 'App\\Controller\\Feature\\OrientationController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1195 => [[['_route' => 'app_feature_payment', '_controller' => 'App\\Controller\\Feature\\PaymentController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1223 => [[['_route' => 'f7_app_partial_root_html', '_controller' => 'App\\Controller\\HomepageController::f7_app_partial_root_html'], ['_locale'], null, null, false, false, null]],
        1242 => [[['_route' => 'f7_app_partial_home_html', '_controller' => 'App\\Controller\\HomepageController::f7_app_partial_home_html'], ['_locale'], null, null, false, false, null]],
        1272 => [[['_route' => 'app_feature_picture_in_picture', '_controller' => 'App\\Controller\\Feature\\PictureInPictureController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1295 => [[['_route' => 'app_feature_presentation', '_controller' => 'App\\Controller\\Feature\\PresentationController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1320 => [[['_route' => 'app_feature_protocol_handling', '_controller' => 'App\\Controller\\Feature\\ProtocolHandlingController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1339 => [[['_route' => 'app_feature_receiver', '_controller' => 'App\\Controller\\Feature\\PresentationController::receiver'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1366 => [[['_route' => 'app_feature_screen_capture', '_controller' => 'App\\Controller\\Feature\\ScreenCaptureController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1383 => [[['_route' => 'app_feature_shortcuts', '_controller' => 'App\\Controller\\Feature\\ShortcutsController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1413 => [[['_route' => 'app_feature_speech_recognition', '_controller' => 'App\\Controller\\Feature\\SpeechRecognitionController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1431 => [[['_route' => 'app_feature_speech_synthesis', '_controller' => 'App\\Controller\\Feature\\SpeechSynthesisController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1447 => [[['_route' => 'app_feature_storage', '_controller' => 'App\\Controller\\Feature\\StorageController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1469 => [[['_route' => 'app_feature_vibration', '_controller' => 'App\\Controller\\Feature\\VibrationController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1492 => [[['_route' => 'app_feature_view_transition', '_controller' => 'App\\Controller\\Feature\\ViewTransitionController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1515 => [[['_route' => 'app_feature_wake_lock', '_controller' => 'App\\Controller\\Feature\\WakeLockController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1533 => [[['_route' => 'app_feature_web_share', '_controller' => 'App\\Controller\\Feature\\WebShareController'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1559 => [[['_route' => 'f7_app_config_js', '_controller' => 'App\\Controller\\HomepageController::f7_app_config_js'], ['_locale'], null, null, false, false, null]],
        1578 => [[['_route' => 'f7_app_routes_js', '_controller' => 'App\\Controller\\HomepageController::f7_app_routes_js'], ['_locale'], null, null, false, false, null]],
        1596 => [[['_route' => 'f7_app_store_js', '_controller' => 'App\\Controller\\HomepageController::f7_app_store_js'], ['_locale'], null, null, false, false, null]],
        1613 => [[['_route' => 'f7_app_init_js', '_controller' => 'App\\Controller\\HomepageController::f7_app_init_js'], ['_locale'], null, null, false, false, null]],
        1630 => [[['_route' => 'app_protocol_handler', '_controller' => 'App\\Controller\\ProtocolHandlerController'], ['_locale'], null, null, false, false, null]],
        1640 => [
            [['_route' => 'app_homepage', '_controller' => 'App\\Controller\\HomepageController'], ['_locale'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
