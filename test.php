<?php
require "connection.php";

$rs = Database::search("SELECT * FROM `app_type`");
$data = $rs->fetch_assoc();
echo $data["id"];
?>