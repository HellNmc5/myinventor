<?php
class PluginMyInventorMyInventor extends CommonDBTM {

    public function getTabNameForItem(CommonGLPI $item, $withtemplate = 0) {
        return __('MyInventor', 'myinventor');
    }

    public static function displayTabContentForItem(CommonGLPI $item, $tabnum = 1, $withtemplate = 0) {
        echo "<p>Здесь будет отображаться информация о коммутаторах.</p>";
        return true;
    }
}
