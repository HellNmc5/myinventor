<?php
    include (GLPI_ROOT . '/inc/includes.php');

    Session::checkRight('plugin_myinventor', READ);

    Html::header(__('Switches', 'myinventor'), $_SERVER['PHP_SELF'], 'plugins', 'myinventor');

    Search::show('PluginMyinventorSwitch');

    Html::footer();
?>