<?php
    // plugins/myinventor/front/port.php

    include ('../../../inc/includes.php');

    Html::header('Ports', $_SERVER['PHP_SELF'], 'plugins', 'myinventor');

    echo "<h2>Список портов</h2>";
    echo "<a class='btn btn-primary' href='port.form.php'>Добавить порт</a>";

    Html::footer();
?>