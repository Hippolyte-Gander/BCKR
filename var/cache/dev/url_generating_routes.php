<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_entrainements' => [[], ['_controller' => 'App\\Controller\\EntrainementController::listEntrainements'], [], [['text', '/entrainements']], [], [], []],
    'app_evenement' => [[], ['_controller' => 'App\\Controller\\EvenementController::index'], [], [['text', '/evenement']], [], [], []],
    'new_evenement' => [[], ['_controller' => 'App\\Controller\\EvenementController::new_edit'], [], [['text', '/evenement/new']], [], [], []],
    'edit_evenement' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::new_edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/evenement']], [], [], []],
    'suppr_evenement' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::supprEvenement'], [], [['text', '/suppr'], ['variable', '/', '[^/]++', 'id', true], ['text', '/evenement']], [], [], []],
    'show_evenement' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/evenement']], [], [], []],
    'app_evenement_participation' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::participer'], [], [['text', '/participation'], ['variable', '/', '[^/]++', 'id', true], ['text', '/evenement']], [], [], []],
    'app_evenement_retirer_participation' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::nePlusParticiper'], [], [['text', '/retirer_participation'], ['variable', '/', '[^/]++', 'id', true], ['text', '/evenement']], [], [], []],
    'suppr_commentaire' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::supprCommentaire'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/commentaire/delete']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'mentions_home' => [[], ['_controller' => 'App\\Controller\\HomeController::mentions'], [], [['text', '/mentions']], [], [], []],
    'club_home' => [[], ['_controller' => 'App\\Controller\\HomeController::club'], [], [['text', '/club']], [], [], []],
    'entrainements_home' => [[], ['_controller' => 'App\\Controller\\HomeController::entrainement'], [], [['text', '/entrainements']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_register_membre' => [[], ['_controller' => 'App\\Controller\\RegistrationController::registerMembre'], [], [['text', '/register_membre']], [], [], []],
    'verify_user' => [['token'], ['_controller' => 'App\\Controller\\RegistrationController::verifUser'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/verif']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'forgotten_password' => [[], ['_controller' => 'App\\Controller\\SecurityController::forgottenPassword'], [], [['text', '/mot-de-passe-oublie']], [], [], []],
    'reset_password' => [['token'], ['_controller' => 'App\\Controller\\SecurityController::resetPassword'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/mot-de-passe-oublie']], [], [], []],
    'app_user' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user']], [], [], []],
    'show_user' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'pageperso_user' => [[], ['_controller' => 'App\\Controller\\UserController::pagePerso'], [], [['text', '/espace-perso']], [], [], []],
    'edit_user' => [['id'], ['_controller' => 'App\\Controller\\UserController::editCurrentUser'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'suppr_user' => [['id'], ['_controller' => 'App\\Controller\\UserController::supprUser'], [], [['text', '/suppr'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'App\Controller\EntrainementController::listEntrainements' => [[], ['_controller' => 'App\\Controller\\EntrainementController::listEntrainements'], [], [['text', '/entrainements']], [], [], []],
    'App\Controller\EvenementController::index' => [[], ['_controller' => 'App\\Controller\\EvenementController::index'], [], [['text', '/evenement']], [], [], []],
    'App\Controller\EvenementController::supprEvenement' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::supprEvenement'], [], [['text', '/suppr'], ['variable', '/', '[^/]++', 'id', true], ['text', '/evenement']], [], [], []],
    'App\Controller\EvenementController::show' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/evenement']], [], [], []],
    'App\Controller\EvenementController::participer' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::participer'], [], [['text', '/participation'], ['variable', '/', '[^/]++', 'id', true], ['text', '/evenement']], [], [], []],
    'App\Controller\EvenementController::nePlusParticiper' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::nePlusParticiper'], [], [['text', '/retirer_participation'], ['variable', '/', '[^/]++', 'id', true], ['text', '/evenement']], [], [], []],
    'App\Controller\EvenementController::supprCommentaire' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::supprCommentaire'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/commentaire/delete']], [], [], []],
    'App\Controller\HomeController::index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\HomeController::mentions' => [[], ['_controller' => 'App\\Controller\\HomeController::mentions'], [], [['text', '/mentions']], [], [], []],
    'App\Controller\HomeController::club' => [[], ['_controller' => 'App\\Controller\\HomeController::club'], [], [['text', '/club']], [], [], []],
    'App\Controller\HomeController::entrainement' => [[], ['_controller' => 'App\\Controller\\HomeController::entrainement'], [], [['text', '/entrainements']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\RegistrationController::registerMembre' => [[], ['_controller' => 'App\\Controller\\RegistrationController::registerMembre'], [], [['text', '/register_membre']], [], [], []],
    'App\Controller\RegistrationController::verifUser' => [['token'], ['_controller' => 'App\\Controller\\RegistrationController::verifUser'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/verif']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\SecurityController::forgottenPassword' => [[], ['_controller' => 'App\\Controller\\SecurityController::forgottenPassword'], [], [['text', '/mot-de-passe-oublie']], [], [], []],
    'App\Controller\SecurityController::resetPassword' => [['token'], ['_controller' => 'App\\Controller\\SecurityController::resetPassword'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/mot-de-passe-oublie']], [], [], []],
    'App\Controller\UserController::index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user']], [], [], []],
    'App\Controller\UserController::show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'App\Controller\UserController::pagePerso' => [[], ['_controller' => 'App\\Controller\\UserController::pagePerso'], [], [['text', '/espace-perso']], [], [], []],
    'App\Controller\UserController::editCurrentUser' => [['id'], ['_controller' => 'App\\Controller\\UserController::editCurrentUser'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'App\Controller\UserController::supprUser' => [['id'], ['_controller' => 'App\\Controller\\UserController::supprUser'], [], [['text', '/suppr'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
];
