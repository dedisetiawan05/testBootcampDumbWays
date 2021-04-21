<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Hero</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <Nav-Draft></Nav-Draft>

    <div class="container">
        <center>
            <h1 class="mt-3">Form Edit Type</h1>
        </center>
        <form action="editType.php" method="POST">
            <?php
            require_once("lib/connection.php");

            $sql = "SELECT * FROM type_tb WHERE type_tb.id = '$_GET[id]'";
            $result = mysqli_query($connection, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            ?>
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example3">Name Type</label>
                <input type="text" name="typeName" id="form6Example1" placeholder="<?= $row['name'] ?>" class="form-control">
                <input type="hidden" name="id" id="form6Example1" value="<?= $row['id'] ?>" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary btn-block mb-4">Edit Type</button>
        </form>
    </div>
    <script src="/js/bootstrap.min.js"></script>
</body>

</html>