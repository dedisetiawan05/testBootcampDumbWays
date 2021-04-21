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

    <body>
        <nav class="navbar navbar-light bg-light p-5">
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <a href="index.php" class="btn btn-outline-success">Show Hero</a>
                <a href="formAddType.php" class="btn btn-outline-success">Add Type</a>
            </div>
        </nav>
        <div class="p-5">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th colspan="2">Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once("lib/connection.php");
                    $sql = "SELECT * FROM type_tb";
                    $result = mysqli_query($connection, $sql);
                    $i = 1;
                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= $row['name'] ?></td>
                            <td>
                                <a href="formUpdateType.php?id=<?= $row['id'] ?>" class="btn btn-outline-success">~</a>
                            </td>
                            <td><a href="deleteType.php?id=<?= $row['id'] ?>" class="btn btn-outline-danger" onclick="return confirm('Are You Sure?')">X</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>

    </html>