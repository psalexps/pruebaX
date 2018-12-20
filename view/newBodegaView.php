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
                <h3>Añadir bodegas</h3>
                <a href="index.php?controller=bodegas&action=index" class="btn btn-outline-info">Volver</a>
            </div>
            <form action="index.php?controller=bodegas&action=altaBodega" method="post">
                <div class="form-group">
                    <label for="nombreBodega">Nombre :</label>
                    <input type="text" name="nombreBodega" class="form-control" id="nombreBodega" aria-describedby="emailHelp" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <label for="direccionBodega">Dirección :</label>
                    <input type="text" name="direccionBodega" class="form-control" id="direccionBodega" aria-describedby="emailHelp" placeholder="Dirección" required>
                </div>
                <div class="form-group">
                    <label for="emailBodega">Email :</label>
                    <input type="email" name="emailBodega" class="form-control" id="emailBodega" aria-describedby="emailHelp" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="telefonoBodega">Telefono :</label>
                    <input type="text" name="telefonoBodega" class="form-control" id="telefonoBodega" pattern="[9|6|7][0-9]{8}" placeholder="Telefono" required>
                </div>
                <div class="form-group">
                    <label for="personaContactoBodega">Persona de contacto :</label>
                    <input type="text" name="personaContactoBodega" class="form-control" id="personaContactoBodega" aria-describedby="emailHelp" placeholder="Persona de contacto">
                </div>
                <div class="form-group">
                    <label for="annoFundacionBodega">Año de fundación :</label>
                    <input type="text" name="annoFundacionBodega" class="form-control" id="annoFundacionBodega" aria-describedby="emailHelp" pattern="[0-9]{4}" placeholder="Año de fundación">
                </div>

                <h5>¿Disponible de restaurante?</h5>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="disponibleRestauranteBodega" id="disponibleRestauranteBodega" value="1" checked>
                    <label class="form-check-label" for="si">
                        Si
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="disponibleRestauranteBodega" id="disponibleRestauranteBodega" value="0">
                    <label class="form-check-label" for="no">
                        No
                    </label>
                </div>

                <h5>¿Disponible de hotel?</h5>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="disponibleHotelBodega" id="disponibleHotelBodega" value="1" checked>
                    <label class="form-check-label" for="si">
                        Si
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="disponibleHotelBodega" id="disponibleHotelBodega" value="0">
                    <label class="form-check-label" for="no">
                        No
                    </label>
                </div>

                <button type="submit" class="btn btn-outline-primary mt-3">Crear</button>
            </form>
        </div>
    </div>


</div>

</body>
</html>