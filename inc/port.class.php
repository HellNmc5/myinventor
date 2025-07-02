<?php
if (!defined('GLPI_ROOT')) {
    die("Sorry. You can't access this file directly");
}

class PluginMyinventorPort extends CommonDBTM {

    static function getTypeName($nb = 0) {
        return _n('Port', 'Ports', $nb, 'myinventor');
    }

    function showForm($ID, $options = []) {
        $this->initForm($ID, $options);
        $this->showFormHeader();

        echo '<tr class="tab_bg_1"><td>' . __('Switch ID') . '</td><td>';
        Dropdown::show('PluginMyinventorSwitch', ['name' => 'switch_id', 'value' => $this->fields['switch_id']]);
        echo '</td></tr>';

        echo '<tr class="tab_bg_1"><td>' . __('Port Number') . '</td><td>';
        Html::autocompletionTextField($this, 'port_number');
        echo '</td></tr>';

        echo '<tr class="tab_bg_1"><td>' . __('MAC Address') . '</td><td>';
        Html::autocompletionTextField($this, 'mac_address');
        echo '</td></tr>';

        echo '<tr class="tab_bg_1"><td>' . __('Status') . '</td><td>';
        Html::autocompletionTextField($this, 'status');
        echo '</td></tr>';

        $this->showFormButtons($options);

        return true;
    }
}
?>
