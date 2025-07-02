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

function plugin_myinventor_install() {
    global $DB;

    $query = "CREATE TABLE IF NOT EXISTS `glpi_plugin_myinventor_switches` (
                `id` INT AUTO_INCREMENT PRIMARY KEY,
                `name` VARCHAR(255) NOT NULL,
                `ip` VARCHAR(255),
                `model` VARCHAR(255),
                `location` VARCHAR(255)
              ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
    $DB->queryOrDie($query, "Error creating switches table");

    $query = "CREATE TABLE IF NOT EXISTS `glpi_plugin_myinventor_ports` (
                `id` INT AUTO_INCREMENT PRIMARY KEY,
                `switch_id` INT NOT NULL,
                `port_number` VARCHAR(255) NOT NULL,
                `mac_address` VARCHAR(255),
                `status` VARCHAR(255),
                FOREIGN KEY (`switch_id`) REFERENCES `glpi_plugin_myinventor_switches`(`id`) ON DELETE CASCADE
              ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
    $DB->queryOrDie($query, "Error creating ports table");

    return true;
}

function plugin_myinventor_uninstall() {
    global $DB;

    $DB->queryOrDie("DROP TABLE IF EXISTS `glpi_plugin_myinventor_ports`", "Error dropping ports table");
    $DB->queryOrDie("DROP TABLE IF EXISTS `glpi_plugin_myinventor_switches`", "Error dropping switches table");

    return true;
}
?>

