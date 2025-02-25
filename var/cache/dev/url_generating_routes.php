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
    'cal' => [[], ['_controller' => 'App\\Controller\\RendezVousController::cal'], [], [['text', '/cal']], [], [], []],
    'app_index' => [[], ['_controller' => 'App\\Controller\\RendezVousController::indeex'], [], [['text', '/']], [], [], []],
    'add_rendezVous' => [[], ['_controller' => 'App\\Controller\\RendezVousController::add'], [], [['text', '/addrdv']], [], [], []],
    'afficher_rendezVous' => [[], ['_controller' => 'App\\Controller\\RendezVousController::AfficheRendezVous'], [], [['text', '/afficher_rendezVous']], [], [], []],
    'deleterendez' => [['id'], ['_controller' => 'App\\Controller\\RendezVousController::Delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleterendez']], [], [], []],
    'updaterendez' => [['id'], ['_controller' => 'App\\Controller\\RendezVousController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updaterendez']], [], [], []],
    'app_search' => [[], ['_controller' => 'App\\Controller\\RendezVousController::search'], [], [['text', '/search']], [], [], []],
    'rendezvous_events' => [[], ['_controller' => 'App\\Controller\\RendezVousController::getEvents'], [], [['text', '/rendezvous/events']], [], [], []],
    'rendezvous_update' => [[], ['_controller' => 'App\\Controller\\RendezVousController::updateCalendar'], [], [['text', '/rendezvous/update']], [], [], []],
    'app_services' => [[], ['_controller' => 'App\\Controller\\ServicesController::index'], [], [['text', '/services']], [], [], []],
    'add_services' => [[], ['_controller' => 'App\\Controller\\ServicesController::add'], [], [['text', '/add_services']], [], [], []],
    'update_services' => [['id'], ['_controller' => 'App\\Controller\\ServicesController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/update_services']], [], [], []],
    'delete_services' => [['id'], ['_controller' => 'App\\Controller\\ServicesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete_services']], [], [], []],
    'all_services' => [[], ['_controller' => 'App\\Controller\\ServicesController::getAllServices'], [], [['text', '/allservices']], [], [], []],
    'service_by_id' => [['id'], ['_controller' => 'App\\Controller\\ServicesController::getServiceById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/service']], [], [], []],
    'App\Controller\RendezVousController::cal' => [[], ['_controller' => 'App\\Controller\\RendezVousController::cal'], [], [['text', '/cal']], [], [], []],
    'App\Controller\RendezVousController::indeex' => [[], ['_controller' => 'App\\Controller\\RendezVousController::indeex'], [], [['text', '/']], [], [], []],
    'App\Controller\RendezVousController::add' => [[], ['_controller' => 'App\\Controller\\RendezVousController::add'], [], [['text', '/addrdv']], [], [], []],
    'App\Controller\RendezVousController::AfficheRendezVous' => [[], ['_controller' => 'App\\Controller\\RendezVousController::AfficheRendezVous'], [], [['text', '/afficher_rendezVous']], [], [], []],
    'App\Controller\RendezVousController::Delete' => [['id'], ['_controller' => 'App\\Controller\\RendezVousController::Delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleterendez']], [], [], []],
    'App\Controller\RendezVousController::update' => [['id'], ['_controller' => 'App\\Controller\\RendezVousController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updaterendez']], [], [], []],
    'App\Controller\RendezVousController::search' => [[], ['_controller' => 'App\\Controller\\RendezVousController::search'], [], [['text', '/search']], [], [], []],
    'App\Controller\RendezVousController::getEvents' => [[], ['_controller' => 'App\\Controller\\RendezVousController::getEvents'], [], [['text', '/rendezvous/events']], [], [], []],
    'App\Controller\RendezVousController::updateCalendar' => [[], ['_controller' => 'App\\Controller\\RendezVousController::updateCalendar'], [], [['text', '/rendezvous/update']], [], [], []],
    'App\Controller\ServicesController::index' => [[], ['_controller' => 'App\\Controller\\ServicesController::index'], [], [['text', '/services']], [], [], []],
    'App\Controller\ServicesController::add' => [[], ['_controller' => 'App\\Controller\\ServicesController::add'], [], [['text', '/add_services']], [], [], []],
    'App\Controller\ServicesController::update' => [['id'], ['_controller' => 'App\\Controller\\ServicesController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/update_services']], [], [], []],
    'App\Controller\ServicesController::delete' => [['id'], ['_controller' => 'App\\Controller\\ServicesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete_services']], [], [], []],
    'App\Controller\ServicesController::getAllServices' => [[], ['_controller' => 'App\\Controller\\ServicesController::getAllServices'], [], [['text', '/allservices']], [], [], []],
    'App\Controller\ServicesController::getServiceById' => [['id'], ['_controller' => 'App\\Controller\\ServicesController::getServiceById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/service']], [], [], []],
];
