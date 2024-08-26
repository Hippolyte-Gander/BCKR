<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/commentaire/new' => [[['_route' => 'new_commentaire', '_controller' => 'App\\Controller\\CommentaireController::new_edit'], null, null, null, false, false, null]],
        '/evenement' => [[['_route' => 'app_evenement', '_controller' => 'App\\Controller\\EvenementController::index'], null, null, null, false, false, null]],
        '/evenement/new' => [[['_route' => 'new_evenement', '_controller' => 'App\\Controller\\EvenementController::new_edit'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/mentions' => [[['_route' => 'mentions_home', '_controller' => 'App\\Controller\\HomeController::mentions'], null, null, null, false, false, null]],
        '/club' => [[['_route' => 'club_home', '_controller' => 'App\\Controller\\HomeController::club'], null, null, null, false, false, null]],
        '/membre' => [[['_route' => 'app_membre', '_controller' => 'App\\Controller\\MembreController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/espace-perso' => [[['_route' => 'pageperso_user', '_controller' => 'App\\Controller\\UserController::pagePerso'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/evenement/([^/]++)(?'
                    .'|/(?'
                        .'|edit(*:232)'
                        .'|suppr(*:245)'
                        .'|participer(*:263)'
                        .'|ne\\-pas\\-participer(*:290)'
                    .')'
                    .'|(*:299)'
                .')'
                .'|/membre/([^/]++)(*:324)'
                .'|/user/([^/]++)(*:346)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        232 => [[['_route' => 'edit_evenement', '_controller' => 'App\\Controller\\EvenementController::new_edit'], ['id'], null, null, false, false, null]],
        245 => [[['_route' => 'suppr_evenement', '_controller' => 'App\\Controller\\EvenementController::supprEvenement'], ['id'], null, null, false, false, null]],
        263 => [[['_route' => 'participer_evenement', '_controller' => 'App\\Controller\\EvenementController::participerEvenement'], ['id'], null, null, false, false, null]],
        290 => [[['_route' => 'pas_participer_evenement', '_controller' => 'App\\Controller\\EvenementController::nePasParticiperEvenement'], ['id'], null, null, false, false, null]],
        299 => [[['_route' => 'show_evenement', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], null, null, false, true, null]],
        324 => [[['_route' => 'show_membre', '_controller' => 'App\\Controller\\MembreController::show'], ['id'], null, null, false, true, null]],
        346 => [
            [['_route' => 'show_user', '_controller' => 'App\\Controller\\UserController::show'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
