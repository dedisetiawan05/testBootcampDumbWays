<?php
require_once("lib/connection.php");

$sql = " INSERT INTO heroes_tb(name, type_id, photo)
        VALUES ('$_POST[name]','$_POST[type_id]','$_POST[images]')";
$result = mysqli_query($connection, $sql);
if ($result) {
    header("location: index.php");
}
