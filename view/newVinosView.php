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

    <div class="row main">
        <div class="col-lg-12 body">
            <div class="title">
                <h3>Añadir vinos</h3>
                <a href="index.php?controller=bodegas&action=detallesBodega&idBodega=<?= $_GET['idBodega'] ?>" class="btn btn-outline-info">Volver</a>
            </div>

            <form action="index.php?controller=vinos&action=altaVino&idBodega=<?= $_GET['idBodega'] ?>" method="post">
                <div class="form-group">
                    <label for="nombreVino">Nombre :</label>
                    <input type="text" name="nombreVino" class="form-control" id="nombreVino" aria-describedby="emailHelp" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <label for="descVino">Descripción :</label>
                    <textarea class="form-control" rows="5" name="descVino" id="descVino"></textarea>
                </div>
                <div class="form-group">
                    <label for="annoVino">Año :</label>
                    <input type="text" name="annoVino" class="form-control" id="annoVino" aria-describedby="emailHelp" pattern="[0-9]{4}" placeholder="Año">
                </div>
                <div class="form-group">
                    <label for="alcoholVino">Alcohol :</label>
                    <input type="text" name="alcoholVino" class="form-control" id="alcoholVino" aria-describedby="emailHelp" pattern="[0-9]+([.][0-9]+)?" placeholder="Alcohol">
                </div>
                <div class="form-group">
                    <label for="tipoVino">Tipo de vino :</label>
                    <select class="form-control" name="tipoVino" id="tipoVino">
                        <option value="Tinto">Tinto</option>
                        <option value="Blanco">Blanco</option>
                        <option value="Rosado">Rosado</option>
                        <option value="Espumoso">Espumoso</option>
                        <option value="Generoso">Generoso</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-outline-primary mt-3">Añadir</button>
            </form>
        </div>
    </div>


</div>

</body>
</html>