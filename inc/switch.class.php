<?php
if (!defined('GLPI_ROOT')) {
    die("Sorry. You can't access this file directly");
}

class PluginMyinventorSwitch extends CommonDBTM {

    static function getTypeName($nb = 0) {
        return _n('Switch', 'Switches', $nb, 'myinventor');
    }

    function getTabNameForItem(CommonGLPI $item, $withtemplate = 0) {
        if (static::canView()) {
            return self::createTabEntry('Ports');
        }
        return '';
    }

    function showForm($ID, $options = []) {
        $this->initForm($ID, $options);
        $this->showFormHeader();

        echo '<tr class="tab_bg_1"><td>' . __('Name') . '</td><td>';
        Html::autocompletionTextField($this, 'name');
        echo '</td></tr>';

        echo '<tr class="tab_bg_1"><td>' . __('IP Address') . '</td><td>';
        Html::autocompletionTextField($this, 'ip');
        echo '</td></tr>';

        echo '<tr class="tab_bg_1"><td>' . __('Model') . '</td><td>';
        Html::autocompletionTextField($this, 'model');
        echo '</td></tr>';

        echo '<tr class="tab_bg_1"><td>' . __('Location') . '</td><td>';
        Html::autocompletionTextField($this, 'location');
        echo '</td></tr>';

        $this->showFormButtons($options);

        return true;
    }
}
?>
