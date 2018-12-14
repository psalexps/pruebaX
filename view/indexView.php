<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/css/indexViewCss.css">
    <link rel="stylesheet" href="view/css/glyphicons.css">
    <script type="text/javascript" src="view/js/jquery.js"></script>
    <script src="view/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h3>Añadir empleados</h3>
            <form action="index.php?controller=Empleados&action=alta" method="post">
                <div class="form-group">
                    <label for="nombre">Nombre :</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <label for="apellidos">Apellidos :</label>
                    <input type="text" name="apellidos" class="form-control" id="apellidos" aria-describedby="emailHelp" placeholder="Apellido">
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="telefono">Telefono :</label>
                    <input type="text" name="telefono" class="form-control" id="telefono" pattern="[9|6|7][0-9]{8}" placeholder="Telefono">
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        </div>
        <div class="col-lg-6 lista">
            <h3>Empleados</h3>
            <div class="card example-1 scrollbar-ripe-malinka">
                <div class="card-body">
                    <div class="list-group">
                        <?php foreach($empleados as $empleado) {?>
                            <div class="list-group-item list-group-item-action listaE">
                                <?php echo $empleado["id"]; ?> -
                                <?php echo $empleado["nombre"]; ?> -
                                <?php echo $empleado["email"]; ?> -
                                <?php echo $empleado["telefono"]; ?>
                                <a href="index.php?controller=Empleados&action=borrar&id=<?= $empleado["id"] ?>" class="btn btn-danger">Borrar</a>
                                <a href="index.php?controller=Empleados&action=detalles&id=<?= $empleado["id"] ?>" class="btn btn-info">Detalles</a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


</body>
</html>