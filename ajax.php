<?php
include 'config.php';

$db = new Database();
echo $db->renderFile($_GET['file'], ['db' => $db]);
// echo $db->renderFile('all_payments_grid.php', ['db' => $db]);
?>
