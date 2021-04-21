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
          <a href="formAddHero.php" class="btn btn-outline-success">Add Hero</a>
          <a href="showType.php" class="btn btn-outline-success">Show Type</a>
        </div>
      </nav>
      <div class="p-5">
        <?php
        require_once("lib/connection.php");
        $sql = "SELECT * FROM heroes_tb";
        $result = mysqli_query($connection, $sql);
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        ?>
          <div class="card p-3" style="width: 18rem;" style="float:left">
            <center><?php echo "<img src='$row[photo]' class='card-img-top' alt='...'>"; ?></center>
            <div class="card-body">
              <h5 class="card-title bg-info p-2 color-light"><?= $row['name'] ?></h5>
              <center><a href="details.php?id=<?= $row['id'] ?>" class="btn btn-danger mt-3 btn-lg">Details</a></center>
            </div>
            <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-outline-danger" onclick="return confirm('Are You Sure?')" class="btn btn-danger btn-sm">
              X
            </a>
          </div>
        <?php } ?>
      </div>
    </body>

    </html>