<?php
    include (GLPI_ROOT . '/inc/includes.php');

    Session::checkRight('plugin_myinventor', READ);

    $ID = Toolbox::cleanInteger($_GET['id'] ?? 0);

    $pluginSwitch = new PluginMyinventorSwitch();

    if ($pluginSwitch->can($ID, READ)) {
        Html::header(__('Switch', 'myinventor'), $_SERVER['PHP_SELF'], 'plugins', 'myinventor');

        $pluginSwitch->showForm($ID);

        Html::footer();
    }
?>
