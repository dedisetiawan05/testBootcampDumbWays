 <?php
    require_once("lib/connection.php");
    $sql = "DELETE FROM type_tb WHERE id = '$_GET[id]'";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        header("location: showType.php");
    }
