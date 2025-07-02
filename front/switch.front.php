<?php
    include ('../../../inc/includes.php');

    Session::checkRight('config', UPDATE);

    $switch = new PluginMyinventorSwitch();

    if (isset($_POST["add"])) {
        $switch->check(-1, CREATE, $_POST);
        $newID = $switch->add($_POST);
        Html::redirect(Toolbox::getItemTypeFormURL('PluginMyinventorSwitch') . "?id=$newID");
    } elseif (isset($_POST["update"])) {
        $switch->check($_POST["id"], UPDATE);
        $switch->update($_POST);
        Html::back();
    } elseif (isset($_POST["delete"])) {
        $switch->check($_POST["id"], DELETE);
        $switch->delete($_POST);
        Html::redirect($CFG_GLPI["root_doc"] . "/plugins/myinventor/front/switch.php");
    }

    Html::header(__('Switch', 'myinventor'), $_SERVER['PHP_SELF'], 'plugins', 'myinventor');

    $switch->display(['id' => $_GET["id"]]);

    Html::footer();
?>
