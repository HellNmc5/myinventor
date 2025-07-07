<?php
include ('../../../inc/includes.php');

Html::header(__('MyInventor', 'myinventor'), $_SERVER['PHP_SELF'], "plugins");

echo "<h2>MyInventor</h2>";
echo "<p>Плагин установлен и работает. Здесь позже появится информация о сетевых устройствах.</p>";

Html::footer();
