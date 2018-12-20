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
    <script src="view/js/editarBodega.js"></script>

</head>
<body>

<div class="container">

    <div class="row main">
        <div class="col-lg-6 body">
            <div class="title">
                <h3>Datos bodega</h3>
                <button id="editarBodega" class="btn btn-outline-warning">Editar</button>
                <a href="index.php?controller=bodegas&action=index" class="btn btn-outline-info">Volver</a>
                <a href="index.php?controller=bodegas&action=borrar&idBodega=<?= $datos['bodegas'][0]["id"] ?>" class="btn btn-outline-danger">Borrar</a>
            </div>
            <hr>
            <form action="index.php?controller=bodegas&action=updateBodega&idBodega=<?= $datos['bodegas'][0]["id"] ?>" method="post">
                <div class="form-group">
                    <label for="nombreBodega">Nombre :</label>
                    <input type="text" name="nombreBodega" class="form-control" id="nombreBodega" value="<?= $datos['bodegas'][0]["nombre"] ?>" aria-describedby="emailHelp" disabled>
                </div>
                <div class="form-group">
                    <label for="direccionBodega">Dirección :</label>
                    <input type="text" name="direccionBodega" class="form-control" id="direccionBodega" value="<?= $datos['bodegas'][0]["direccion"] ?>" aria-describedby="emailHelp" disabled>
                </div>
                <div class="form-group">
                    <label for="emailBodega">Email :</label>
                    <input type="email" name="emailBodega" class="form-control" id="emailBodega" value="<?= $datos['bodegas'][0]["email"] ?>" aria-describedby="emailHelp" disabled>
                </div>
                <div class="form-group">
                    <label for="telefonoBodega">Telefono :</label>
                    <input type="text" name="telefonoBodega" class="form-control" id="telefonoBodega" value="<?= $datos['bodegas'][0]["telefono"] ?>" pattern="[9|6|7][0-9]{8}" disabled>
                </div>
                <div class="form-group">
                    <label for="personaContactoBodega">Persona de contacto :</label>
                    <input type="text" name="personaContactoBodega" class="form-control" id="personaContactoBodega" value="<?= $datos['bodegas'][0]["personaContacto"] ?>" aria-describedby="emailHelp" disabled>
                </div>
                <div class="form-group">
                    <label for="annoFundacionBodega">Año de fundación :</label>
                    <input type="text" name="annoFundacionBodega" class="form-control" id="annoFundacionBodega" aria-describedby="emailHelp" value="<?= $datos['bodegas'][0]["annoFundacion"] ?>" pattern="[0-9]{4}" disabled>
                </div>

                <h5>¿Disponible de restaurante?</h5>
                <!--Comprobar si esta disponible en restaurante y poner checked el input radio-->
                <?php
                    if($datos['bodegas'][0]['disponibleRestaurante'] == 1){
                        echo '<div class="form-check">
                        <input class="form-check-input" type="radio" name="disponibleRestauranteBodega" id="disponibleRestauranteBodegaSi" value="1" checked disabled>
                        <label class="form-check-label" for="si">
                        Si
                        </label>
                        </div>';
                        echo '<div class="form-check">
                        <input class="form-check-input" type="radio" name="disponibleRestauranteBodega" id="disponibleRestauranteBodegaNo" value="0" disabled>
                        <label class="form-check-label" for="no">
                        No
                        </label>
                        </div>';
                    }
                    else {
                        echo '<div class="form-check">
                        <input class="form-check-input" type="radio" name="disponibleRestauranteBodega" id="disponibleRestauranteBodegaSi" value="1" disabled>
                        <label class="form-check-label" for="si">
                        Si
                        </label>
                        </div>';
                        echo '<div class="form-check">
                        <input class="form-check-input" type="radio" name="disponibleRestauranteBodega" id="disponibleRestauranteBodegaNo" value="0" checked disabled>
                        <label class="form-check-label" for="no">
                        No
                        </label>
                        </div>';
                    }
                ?>

                <h5>¿Disponible de hotel?</h5>
                <!--Comprobar si esta disponible en hotel y poner checked el input radio-->
                <?php
                  if($datos['bodegas'][0]['disponibleHotel'] == 1){
                    echo '<div class="form-check">
                    <input class="form-check-input" type="radio" name="disponibleHotelBodega" id="disponibleHotelBodegaSi" value="1" checked disabled>
                    <label class="form-check-label" for="si">
                      Si
                    </label>
                    </div>';
                    echo '<div class="form-check">
                    <input class="form-check-input" type="radio" name="disponibleHotelBodega" id="disponibleHotelBodegaNo" value="0" disabled>
                    <label class="form-check-label" for="no">
                      No
                    </label>
                    </div>';
                  }
                  else {
                    echo '<div class="form-check">
                    <input class="form-check-input" type="radio" name="disponibleHotelBodega" id="disponibleHotelBodegaSi" value="1" disabled>
                    <label class="form-check-label" for="si">
                      Si
                    </label>
                    </div>';
                    echo '<div class="form-check">
                    <input class="form-check-input" type="radio" name="disponibleHotelBodega" id="disponibleHotelBodegaNo" value="0" checked disabled>
                    <label class="form-check-label" for="no">
                      No
                    </label>
                    </div>';
                  }
                ?>

                <button id="updateBodega" type="submit" class="btn btn-outline-primary mt-3" disabled>Guardar</button>
            </form>
        </div>

        <div class="col-lg-6 body">
            <div class="title">
                <h3>Vinos disponibles</h3>
                <a href="index.php?controller=vinos&action=newVinos&idBodega=<?= $datos['bodegas'][0]["id"] ?>" class="btn btn-outline-primary">Añadir vino</a>
            </div>
            <hr>
            <div class="card scroll scrollbar-ripe-malinka">
                <div class="card-body">
                <table class="table mt-2 text-center tableVinos">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($datos['vinos'] as $vino) {?>
                        <tr>
                            <td><?php echo $vino["nombre"]; ?></td>
                            <td><?php echo $vino["tipoVino"]; ?></td>
                            <td>
                                <a href="index.php?controller=vinos&action=detallesVino&idVino=<?= $vino["id"] ?>" class="btn btn-outline-info">Ver</a>
                                <a href="index.php?controller=vinos&action=delVino&idVino=<?= $vino["id"] ?>&idBodega=<?= $datos['bodegas'][0]["id"] ?>" class="btn btn-outline-danger">Borrar</a>
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