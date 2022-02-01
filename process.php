<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$target = "uploads/".$_FILES['photo']["name"];
is_uploaded_file($_FILES['photo']["tmp_name"]);
move_uploaded_file($_FILES['photo']["tmp_name"], $target);
header('Location: form.php');
 ?>
