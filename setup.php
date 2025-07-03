<?php

/**
 * -------------------------------------------------------------------------
 * myinvent plugin for GLPI
 * Copyright (C) 2025 by the myinvent Development Team.
 * -------------------------------------------------------------------------
 *
 * MIT License
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * --------------------------------------------------------------------------
 */

define('PLUGIN_MYINVENT_VERSION', '0.0.1');

// Minimal GLPI version, inclusive
define("PLUGIN_MYINVENT_MIN_GLPI_VERSION", "10.0.0");
// Maximum GLPI version, exclusive
define("PLUGIN_MYINVENT_MAX_GLPI_VERSION", "10.0.99");




// plugins/myinventor/setup.php

function plugin_init_myinventor() {
    global $PLUGIN_HOOKS;

    $PLUGIN_HOOKS['csrf_compliant']['myinventor'] = true;

    $PLUGIN_HOOKS['menu_toadd']['myinventor'] = [
        'plugins' => 'menu.php'
    ];
}

function plugin_version_myinventor() {
    return [
        'name'           => 'MyInventor',
        'version'        => '1.0.0',
        'author'         => 'Your Name',
        'license'        => 'GPLv3+',
        'homepage'       => 'https://yourprojectsite.com',
        'minGlpiVersion' => '10.0.0'
    ];
}

function plugin_myinventor_check_prerequisites() {
    return true;
}

function plugin_myinventor_check_config() {
    return true;
}
?>

