<?php
function plugin_init_myinventor() {
    global $PLUGIN_HOOKS;

    $PLUGIN_HOOKS['csrf_compliant']['myinventor'] = true;
    $PLUGIN_HOOKS['menu_toadd']['myinventor'] = ['plugins' => 'myinventor.menu'];
}

function plugin_version_myinventor() {
    return [
        'name'           => "myinventor",
        'version'        => '1.0.0',
        'author'         => 'YourName',
        'license'        => 'GPLv2+',
        'homepage'       => 'https://example.com',
        'minGlpiVersion' => '10.0.0'
    ];
}

function plugin_myinventor_check_prerequisites() {
    return true;
}

function plugin_myinventor_check_config($verbose = false) {
    return true;
}
