<?php

function plugin_version_myinventor() {
    return [
        'name'           => 'My Inventor',
        'version'        => '1.0.0',
        'author'         => 'Your Name',
        'license'        => 'GPLv2+',
        'homepage'       => 'https://github.com/HellNmc5/myinventor',
        'minGlpiVersion' => '10.0.0',
    ];
}

function plugin_myinventor_install() {
    return true;
}

function plugin_myinventor_uninstall() {
    return true;
}
