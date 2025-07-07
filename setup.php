<?php

    function plugin_version_myinventor() {
        return [
            'name'           => 'My Inventor',
            'version'        => '1.0.0',
            'author'         => 'Your Name',
            'license'        => 'GPLv3+',
            'homepage'       => 'https://github.com/HellNmc5/myinventor',
            'minGlpiVersion' => '10.0.0'
        ];
    }

    function plugin_myinventor_check_prerequisites() {
        if (version_compare(GLPI_VERSION, '10.0.0', '<')) {
            echo "This plugin requires GLPI 10.0.0 or higher";
            return false;
        }
        return true;
    }

    function plugin_myinventor_check_config() {
        return true;
    }
    
    function plugin_init_myinventor() {
    global $PLUGIN_HOOKS;

    // ✅ Это говорит GLPI, что плагин поддерживает CSRF
    $PLUGIN_HOOKS['csrf_compliant']['myinventor'] = true;

    // Если у тебя есть свои классы, регистрируй их здесь, например:
    // Plugin::registerClass('PluginMyinventorPort');
    // Plugin::registerClass('PluginMyinventorSwitch');
}
