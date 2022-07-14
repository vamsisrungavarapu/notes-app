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
        '/' => [[['_route' => 'display_home', '_controller' => 'App\\Controller\\NoteController::showAll'], null, ['GET' => 0], null, false, false, null]],
        '/notes' => [
            [['_route' => 'all_notes', '_controller' => 'App\\Controller\\NoteController::getAll'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'create_note', '_controller' => 'App\\Controller\\NoteController::create'], null, ['POST' => 0], null, false, false, null],
        ],
        '/tags' => [
            [['_route' => 'all_tags', '_controller' => 'App\\Controller\\TagController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'create_tag', '_controller' => 'App\\Controller\\TagController::create'], null, ['POST' => 0], null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/notes/(?'
                    .'|([^/]++)(*:187)'
                    .'|(\\d+)(*:200)'
                    .'|([^/]++)(*:216)'
                .')'
                .'|/tags/([^/]++)(*:239)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        187 => [[['_route' => 'update_note', '_controller' => 'App\\Controller\\NoteController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        200 => [[['_route' => 'note_show', '_controller' => 'App\\Controller\\NoteController::showOne'], ['id'], ['GET' => 0], null, false, true, null]],
        216 => [[['_route' => 'delete_note', '_controller' => 'App\\Controller\\NoteController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        239 => [
            [['_route' => 'delete_tag', '_controller' => 'App\\Controller\\TagController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
