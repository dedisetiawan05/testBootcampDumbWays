    <?php
    require_once("lib/connection.php");
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Test Bootcamp</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
    </head>
    <nav class="navbar navbar-light bg-light p-5">
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <a href="index.php" class="btn btn-outline-success" type="button">Back</a>
        </div>
    </nav>
    <div class="p-5" style="margin-left:10%">
        <?php

        $sql = "SELECT heroes_tb.*, type_tb.name as type FROM heroes_tb LEFT JOIN
            type_tb ON heroes_tb.type_id = type_tb.id WHERE heroes_tb.id = '$_GET[id]'";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        ?>
        <Center>
            <h1 class="card-title mb-5 color-light"><?= $row['name'] . " is a " . $row['type'] ?></h1>
            <?php echo "<img src='$row[photo]' style='width: 500px;'>"; ?>
        </Center>
    </div>
    <center>
        <a href="formUpdateHero.php?id=<?= $row['id'] ?>" class="btn btn-success mb-5 mt-3 btn-lg">Update</a>
    </center>
    </body>

    </html>