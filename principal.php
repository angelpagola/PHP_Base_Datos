<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLA PERSONAS</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <?php
    include("Controlador.php");
    ?>
</head>

<body>

    <div class="form-group row badge-info" id="titulo">
        <div class="col" align="center">
            <h1>TABLA PERSONAS
            </h1>
        </div>
    </div>
    <form name="form1" method="get" action="Insertar_Personas.php">
        <div class="container">
            <div class="container-fluid">

                <div class="form-group row mr-sm-1">
                    <div class="col col-md-3 ">
                        <label for="txtdni">DNI: </label>
                    </div>
                    <div class="col col-md-9">
                        <input id="txtdni" type="number" class="text  form-control" name="txtdni" placeholder="Ingrese DNI... ">
                    </div>
                </div>
                <div class="form-group row mr-sm-1">
                    <div class="col col-md-3">
                        <label for="txtnom">Nombres: </label>
                    </div>
                    <div class="col col-md-9">
                        <input id="txtnom" class="text form-control" name="txtnom" placeholder="Ingrese Nombre... ">
                    </div>
                </div>
                <div class="form-group row mr-sm-1">
                    <div class="col col-md-3">
                        <label for="txtapepat">Apellido Paterno: </label>
                    </div>
                    <div class="col col-md-9">
                        <input id="txtapepat" class="text form-control" name="txtapepat" placeholder="Ingrese Apellido Paterno... ">
                    </div>
                </div>
                <div class="form-group row mr-sm-1">
                    <div class="col col-md-3">
                        <label for="txtapemat">Apellido Materno: </label>
                    </div>
                    <div class="col col-md-9">
                        <input id="txtapemat" class="text form-control" name="txtapemat" placeholder="Ingrese Apellido Materno... ">
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="container">
                <div class="form-group row mr-sm-1">
                    <div class="col col-md-3">
                        <button type="submit" id="btn_insert" class="btn btn-success">
                            <img src="Imagenes/Recursos/check.png" width="25px">
                            Guardar
                        </button>
                    </div>
                    <div class="col col-md-3">
                        <button type="button" id="btn_update" class="btn btn-warning">
                            <img src="Imagenes/Recursos/update.png" width="25px">
                            Modificar
                        </button>

                    </div>
                    <div class="col col-md-3">
                        <button type="button" id="btn_delete" class="btn btn-dark">
                            <img src="Imagenes/Recursos/trash.png" width="25px">
                            Eliminar
                        </button>
                    </div>
                    <div class="col col-md-3">
                        <button type="button" id="btn_cancel" class="btn btn-danger">
                            <img src="Imagenes/Recursos/deletehd.png" width="25px">
                            Cancelar
                        </button>
                    </div>

                </div>

            </div>
        </div>

    </form>
    <div class="container" align="center">
        <?php
        // echo DevolverRegistroDato("Select * from personas");
        $cabeceraPersonas = array("DNI", "NOMBRES", "A.PATERNO", "A.MATERNO");
        echo  LenarTabla("Select*from personas", $cabeceraPersonas, 4);

        ?>
    </div>
</body>

</html>