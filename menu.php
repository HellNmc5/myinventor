<?php
// plugins/myinventor/menu.php

function plugin_myinventor_getMenu() {
    return [
        'title' => 'MyInventor',
        'page'  => '/plugins/myinventor/front/switch.php',
        'links' => [
            'Switches' => '/plugins/myinventor/front/switch.php',
            'Ports'    => '/plugins/myinventor/front/port.php',
        ]
    ];
}
?>