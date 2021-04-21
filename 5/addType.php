<?php
require_once("lib/connection.php");

$sql = " INSERT INTO type_tb(name)
        VALUES ('$_POST[typeName]')";
$result = mysqli_query($connection, $sql);
if ($result) {
    header("location: index.php");
}
