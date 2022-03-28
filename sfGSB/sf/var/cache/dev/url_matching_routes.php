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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/presentation' => [[['_route' => 'presentation', '_controller' => 'App\\Controller\\DefaultController::presentation'], null, null, null, false, false, null]],
        '/gestion' => [[['_route' => 'gestion', '_controller' => 'App\\Controller\\DefaultController::gestion'], null, null, null, false, false, null]],
        '/equipement' => [[['_route' => 'equipement', '_controller' => 'App\\Controller\\DefaultController::equipement'], null, null, null, false, false, null]],
        '/repartition' => [[['_route' => 'repartition', '_controller' => 'App\\Controller\\DefaultController::repartition'], null, null, null, false, false, null]],
        '/segmentation' => [[['_route' => 'segmentation', '_controller' => 'App\\Controller\\DefaultController::segmentation'], null, null, null, false, false, null]],
        '/presentationSI' => [[['_route' => 'presentationSI', '_controller' => 'App\\Controller\\DefaultController::presSI'], null, null, null, false, false, null]],
        '/utilisateurs' => [[['_route' => 'liste_utilisateurs', '_controller' => 'App\\Controller\\DefaultController::listUtili'], null, null, null, false, false, null]],
        '/listeCarduciens' => [[['_route' => 'listeCarducien', '_controller' => 'App\\Controller\\DefaultController::listInscriCahors'], null, null, null, false, false, null]],
        '/listeAyantFrais' => [[['_route' => 'listeAyantFrais', '_controller' => 'App\\Controller\\DefaultController::listAyantFrais'], null, null, null, false, false, null]],
        '/listeNAyantPasFrais' => [[['_route' => 'listeNAyantPasFrais', '_controller' => 'App\\Controller\\DefaultController::listNAyantPasFrais'], null, null, null, false, false, null]],
        '/listNbFrais' => [[['_route' => 'listeNbFrais', '_controller' => 'App\\Controller\\DefaultController::listNbFrais'], null, null, null, false, false, null]],
        '/domaines' => [[['_route' => 'liste_domaine', '_controller' => 'App\\Controller\\DefaultController::listDomaine'], null, null, null, false, false, null]],
        '/utiliconcerne' => [[['_route' => 'utiliConcerne', '_controller' => 'App\\Controller\\DefaultController::listUtiliConcerne'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\DefaultController::connexion'], null, null, null, false, false, null]],
        '/etat' => [[['_route' => 'etat_index', '_controller' => 'App\\Controller\\EtatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/etat/new' => [[['_route' => 'etat_new', '_controller' => 'App\\Controller\\EtatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/etat/([^/]++)(?'
                    .'|(*:185)'
                    .'|/edit(*:198)'
                    .'|(*:206)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        185 => [[['_route' => 'etat_show', '_controller' => 'App\\Controller\\EtatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        198 => [[['_route' => 'etat_edit', '_controller' => 'App\\Controller\\EtatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        206 => [
            [['_route' => 'etat_delete', '_controller' => 'App\\Controller\\EtatController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
