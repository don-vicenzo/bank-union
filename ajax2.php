<?php
include 'config.php';

$db = new Database();
echo $db->renderFile2('no_payments_grid.php', ['db' => $db]);


?>