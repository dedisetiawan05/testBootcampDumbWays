<?php
require_once("lib/connection.php");

$sql = "UPDATE type_tb SET name = '$_POST[typeName]' WHERE id = '$_POST[id]'";
$result = mysqli_query($connection, $sql);
if ($result) {
    header("location: showType.php");
}
