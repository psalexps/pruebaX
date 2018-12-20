<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/css/indexViewCss.css">
    <link rel="stylesheet" href="view/css/glyphicons.css">
    <link rel="stylesheet" href="view/css/indexViewCss.css">
    <script type="text/javascript" src="view/js/jquery.js"></script>
    <script src="view/js/bootstrap.min.js"></script>


</head>
<body>

<div class="container">

    <div class="row mt-3">
        <div class="col-md-12 col-lg-12">
            <h3 id="tBodega" class="text-center">Bodegas</h3>
            <a href="index.php?controller=bodegas&action=newBodega" class="btn btn-outline-primary newBodega mb-1">Añadir bodega</a>
            <div class="card scroll scrollbar-ripe-malinka">
                <div class="card-body">
                    <table class="table mt-2 text-center body">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Localización</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Email</th>
                            <th scope="col">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($datos['bodegas'] as $bodega) {?>
                            <tr>
                                <td><?php echo $bodega["nombre"]; ?></td>
                                <td><?php echo $bodega["direccion"]; ?></td>
                                <td><?php echo $bodega["telefono"]; ?></td>
                                <td><?php echo $bodega["email"]; ?></td>
                                <td>
                                    <a href="index.php?controller=bodegas&action=detallesBodega&idBodega=<?= $bodega["id"] ?>" class="btn btn-outline-info">Entrar</a>
                                    <a href="index.php?controller=bodegas&action=borrar&idBodega=<?= $bodega["id"] ?>" class="btn btn-outline-danger">Borrar</a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

</body>
</html>