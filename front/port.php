<?php
include ('../../../inc/includes.php');

    Session::checkRight('config', READ);

    Html::header(__('Ports', 'myinventor'), $_SERVER['PHP_SELF'], 'plugins', 'myinventor');

    Search::show('PluginMyinventorPort');

    Html::footer();
?>
