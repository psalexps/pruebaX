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
    <script src="view/js/editarVino.js"></script>


</head>
<body>

<div class="container">

    <div class="row main">
        <div class="col-lg-9 mt-3">
            <h3>Datos vino</h3>
        </div>
        <div class="col-lg-3 mt-4">
            <button id="editarVino" class="btn btn-outline-warning">Editar</button>
            <a href="index.php?controller=bodegas&action=detallesBodega&idBodega=<?= $datos['vinos'][0]["idBodega"] ?>" class="btn btn-outline-info">Volver</a>
            <a href="index.php?controller=vinos&action=delVino&idVino=<?= $datos['vinos'][0]["id"] ?>&idBodega=<?= $datos['vinos'][0]["idBodega"] ?>" class="btn btn-outline-danger">Borrar</a>
        </div>
        <div class="col-lg-12 body">
            <form action="index.php?controller=vinos&action=updateVino&idVino=<?= $datos['vinos'][0]["id"] ?>&idBodega=<?= $datos['vinos'][0]["idBodega"] ?>" method="post">
                <div class="form-group">
                    <label for="nombreVino">Nombre :</label>
                    <input type="text" name="nombreVino" class="form-control" id="nombreVino" value="<?= $datos['vinos'][0]["nombre"] ?>" aria-describedby="emailHelp" placeholder="Name" required disabled>
                </div>
                <div class="form-group">
                    <label for="descVino">Descripción :</label>
                    <textarea class="form-control" rows="5" name="descVino" id="descVino" disabled><?= $datos['vinos'][0]["descripcion"] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="annoVino">Año :</label>
                    <input type="text" name="annoVino" class="form-control" id="annoVino" value="<?= $datos['vinos'][0]["anno"] ?>" aria-describedby="emailHelp" pattern="[0-9]{4}" placeholder="Año" disabled>
                </div>
                <div class="form-group">
                    <label for="alcoholVino">Alcohol :</label>
                    <input type="text" name="alcoholVino" class="form-control" id="alcoholVino" value="<?= $datos['vinos'][0]["alcohol"] ?>" aria-describedby="emailHelp" pattern="[0-9]+([.][0-9]+)?" placeholder="Alcohol" disabled>
                </div>
                <div class="form-group">
                    <label for="tipoVino">Tipo de vino :</label>
                    <select class="form-control" name="tipoVino" id="tipoVino" disabled>
                        <?php
                            if ($datos['vinos'][0]["tipoVino"] == "Tinto"){
                                echo '<option selected value="Tinto">Tinto</option>
                                    <option value="Blanco">Blanco</option>
                                    <option value="Rosado">Rosado</option>
                                    <option value="Espumoso">Espumoso</option>
                                    <option value="Generoso">Generoso</option>';
                            }
                            elseif ($datos['vinos'][0]["tipoVino"] == "Blanco"){
                                echo '<option value="Tinto">Tinto</option>
                                    <option selected value="Blanco">Blanco</option>
                                    <option value="Rosado">Rosado</option>
                                    <option value="Espumoso">Espumoso</option>
                                    <option value="Generoso">Generoso</option>';
                            }
                            elseif ($datos['vinos'][0]["tipoVino"] == "Rosado"){
                                echo '<option value="Tinto">Tinto</option>
                                    <option value="Blanco">Blanco</option>
                                    <option selected value="Rosado">Rosado</option>
                                    <option value="Espumoso">Espumoso</option>
                                    <option value="Generoso">Generoso</option>';
                            }
                            elseif ($datos['vinos'][0]["tipoVino"] == "Espumoso"){
                                echo '<option value="Tinto">Tinto</option>
                                    <option value="Blanco">Blanco</option>
                                    <option value="Rosado">Rosado</option>
                                    <option selected value="Espumoso">Espumoso</option>
                                    <option value="Generoso">Generoso</option>';
                            }
                            elseif ($datos['vinos'][0]["tipoVino"] == "Generoso"){
                                echo '<option value="Tinto">Tinto</option>
                                    <option value="Blanco">Blanco</option>
                                    <option value="Rosado">Rosado</option>
                                    <option value="Espumoso">Espumoso</option>
                                    <option selected value="Generoso">Generoso</option>';
                            }
                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-outline-primary mt-3" id="updateVino" disabled>Guardar</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>