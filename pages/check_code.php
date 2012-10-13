<?php
include('db.php');

$checkQuery = $db->query("SELECT COUNT(*) FROM participant WHERE code=".$db->quote($_GET['c']));
$num = $checkQuery->fetchColumn();

echo $num;
?>