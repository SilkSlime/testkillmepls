<?php
$sitename = $_POST["sitename"];

$path = $_FILES['kekimage']['tmp_name'];
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$imgsrc = 'data:image/' . $type . ';base64,' . base64_encode($data);


require "templates/white.php";
?>