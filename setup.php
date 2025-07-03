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



return [
    'plugin_myinventor1' => [ // ключ — обязательно plugin_ + название папки плагина
        'class'   => 'PluginMyinventor1', // имя основного класса плагина (может быть фиктивным, если класс еще не используешь)
        'name'    => 'My Inventor 1',     // название плагина
        'version' => '1.0.0',             // версия плагина
        'author'  => 'Your Name',         // автор
        'license' => 'GPLv2+',            // лицензия
        'homepage' => 'https://yourwebsite.com', // ссылка на сайт/документацию

        // ⚙️ Минимально необходимые методы:
        'install'   => 'plugin_myinventor1_install',
        'uninstall' => 'plugin_myinventor1_uninstall'
    ]
];



