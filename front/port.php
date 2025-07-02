<?php
    include (GLPI_ROOT . '/inc/includes.php');

    Session::checkRight('plugin_myinventor', READ);

    $ID = Toolbox::cleanInteger($_GET['id'] ?? 0);

    Html::header(__('Ports', 'myinventor'), $_SERVER['PHP_SELF'], 'plugins', 'myinventor');

    Search::show('PluginMyinventorPort', ['criteria' => [['field' => 'switch_id', 'searchtype' => 'equals', 'value' => $ID]]]);

    Html::footer();
?>