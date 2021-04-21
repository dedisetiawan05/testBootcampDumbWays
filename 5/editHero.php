<?php
require_once("lib/connection.php");

$sql = "UPDATE heroes_tb SET name = '$_POST[name]',
                            type_id = '$_POST[type_id]',
                            photo  = '$_POST[photo]'
        WHERE id = '$_POST[id]'";
$result = mysqli_query($connection, $sql);
if ($result) {
    header("location: index.php");
}
