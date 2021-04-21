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
    <div class="container">
        <center>
            <h1 class="mt-3">Form Edit Hero</h1>
        </center>
        <?php
        require_once("lib/connection.php");

        $sql = "SELECT * FROM heroes_tb WHERE id = '$_GET[id]'";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        ?>
        <form action="editHero.php?id=<?= $row['id'] ?>" method="POST">
            <input type="hidden" id="form6Example1" class="form-control" name="id" value="<?= $row['id'] ?>" />

            <div class="row mb-4">
                <div class="form-outline">
                    <label class="form-label" for="form6Example1">Nama Hero</label>
                    <input type="text" id="form6Example1" class="form-control" name="name" value="<?= $row['name'] ?>" />
                </div>
            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example3">Type</label>
                <select class="form-select" aria-label="Default select example" name="type_id">
                    <?php
                    $sqlType = "SELECT * FROM type_tb";
                    $resultType = mysqli_query($connection, $sqlType);
                    while ($rowType = mysqli_fetch_array($resultType, MYSQLI_ASSOC)) {
                    ?>
                        <option value="<?= $rowType['id'] ?>" selected><?= $rowType['name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example7">Photo</label>
                <input type="text" id="form6Example5" class="form-control" name="photo" value="<?= $row['photo']; ?>" />
            </div>
            <button type="submit" class="btn btn-primary btn-block mb-4">Edit Hero</button>
        </form>
    </div>
    <script src="/js/bootstrap.min.js"></script>
</body>

</html>