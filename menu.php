<?php

class PluginMyinventorMenu extends CommonGLPI {

    /**
     * Меню плагина
     */
    public static function getMenuContent() {
        return [
            'title' => 'My Inventor',
            'page'  => '/plugins/myinventor1/front/switch.php',
            'icon'  => ''
        ];
    }
}
