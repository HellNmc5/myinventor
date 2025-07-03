<?php
    // plugins/myinventor/front/switch.php

    include ('../../../inc/includes.php');

    Html::header('Switches', $_SERVER['PHP_SELF'], 'plugins', 'myinventor');

    echo "<h2>Список коммутаторов</h2>";
    echo "<a class='btn btn-primary' href='switch.form.php'>Добавить коммутатор</a>";

    Html::footer();
