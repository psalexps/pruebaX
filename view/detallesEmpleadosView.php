<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <script type="text/javascript" src="view/js/jquery.js"></script>
    <script src="view/js/bootstrap.min.js"></script>

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Detalles</h3>
                <form action="index.php?controller=Empleados&action=update" method="post">
                    <input type="hidden" name="id" value="<?= $empleados[0]["id"] ?>">
                    <div class="form-group">
                        <label for="nombre">Nombre :</label>
                        <input type="text" name="nombre" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Name" required value="<?= $empleados[0]["nombre"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellidos :</label>
                        <input type="text" name="apellidos" class="form-control" id="apellidos" aria-describedby="emailHelp" placeholder="Apellidos" value="<?= $empleados[0]["apellidos"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" value="<?= $empleados[0]["email"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Telefono :</label>
                        <input type="text" name="telefono" class="form-control" id="telefono" pattern="[9|6|7][0-9]{8}" placeholder="Telefono" value="<?= $empleados[0]["telefono"] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="index.php?controller=Empleados&action=index" class="btn btn-success">Volver</a>
                </form>
            </div>
        </div>
    </div>

</body>
</html>