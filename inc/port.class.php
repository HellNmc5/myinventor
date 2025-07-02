<?php
    if (!defined('GLPI_ROOT')) {
        die("Sorry. You can't access this file directly");
    }

    class PluginMyinventorPort extends CommonDBTM {
        public $dohistory = true;

        static function getTypeName($nb = 0) {
            return __('Switch Port', 'myinventor');
        }
    }
?>