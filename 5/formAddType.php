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
            <h1 class="mt-3">Form Tambah Type</h1>
        </center>
        <form action="addType.php" method="POST">
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example3">Name Type</label>
                <input type="text" name="typeName" id="form6Example1" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary btn-block mb-4">Tambah Type</button>
        </form>
    </div>
    <script src="/js/bootstrap.min.js"></script>
</body>

</html>