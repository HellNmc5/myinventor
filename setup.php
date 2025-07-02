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


function plugin_myinventor_install() {
    global $DB;

    // Create switches table
    $query = "CREATE TABLE IF NOT EXISTS `glpi_plugin_myinventor_switches` (
                `id` INT NOT NULL AUTO_INCREMENT,
                `name` VARCHAR(255) NOT NULL,
                `ip_address` VARCHAR(255) NOT NULL,
                `community` VARCHAR(255) DEFAULT 'public',
                `comment` TEXT,
                PRIMARY KEY (`id`)
              ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    $DB->queryOrDie($query, "Create switches table");

    // Create ports table
    $query = "CREATE TABLE IF NOT EXISTS `glpi_plugin_myinventor_ports` (
                `id` INT NOT NULL AUTO_INCREMENT,
                `switch_id` INT NOT NULL,
                `port_number` VARCHAR(255) NOT NULL,
                `mac_address` VARCHAR(255) NOT NULL,
                `comment` TEXT,
                `last_update` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                PRIMARY KEY (`id`),
                FOREIGN KEY (`switch_id`) REFERENCES `glpi_plugin_myinventor_switches`(`id`) ON DELETE CASCADE
              ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    $DB->queryOrDie($query, "Create ports table");

    return true;
}

function plugin_myinventor_uninstall() {
    global $DB;

    $DB->query("DROP TABLE IF EXISTS `glpi_plugin_myinventor_ports`");
    $DB->query("DROP TABLE IF EXISTS `glpi_plugin_myinventor_switches`");

    return true;
}

