<?php
    include ('../../../inc/includes.php');

    Session::checkRight('config', READ);

    Html::header(__('Switches', 'myinventor'), $_SERVER['PHP_SELF'], 'plugins', 'myinventor');

    Search::show('PluginMyinventorSwitch');

    Html::footer();
?>
