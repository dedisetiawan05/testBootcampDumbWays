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
            <h1 class="mt-3">Form Tambah Hero</h1>
        </center>
        <form action="addHero.php" method="POST">
            <div class="row mb-4">
                <div class="form-outline">
                    <label class="form-label" for="form6Example1">Nama Hero</label>
                    <input type="text" id="form6Example1" class="form-control" name="name" />
                </div>
            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example3">Type</label>
                <select class="form-select" aria-label="Default select example" name="type_id">
                    <option selected>Pilih Salah Satu</option>
                    <?php
                    require_once("lib/connection.php");
                    $sql = "SELECT * FROM type_tb";
                    $result = mysqli_query($connection, $sql);
                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    ?>
                        <option value="<?= $row['id'] ?>"><?= $row["name"] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example4">URL Images</label>
                <input type="text" id="form6Example4" class="form-control" name="images" />
            </div>

            <button type="submit" class="btn btn-primary btn-block mb-4">Tambah Hero</button>
        </form>
    </div>
    <script src="/js/bootstrap.min.js"></script>
</body>

</html>