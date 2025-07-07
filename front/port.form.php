<form method="post" action="<?php echo $CFG_GLPI["root_doc"]; ?>/plugins/myinventor/front/port.php">
   <?php echo Html::hidden('_glpi_csrf_token', ['value' => Session::getNewCSRFToken()]); ?>
   <!-- остальные поля -->
</form>
