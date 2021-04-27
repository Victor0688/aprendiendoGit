<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Salón de Belleza</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>

    <div class="contenedor-estetica">
        <div class="imagen1 wall"></div>
        <div class="app">
            <header class="header">
                <h1>App Peluqueria</h1>
            </header>

            <?php include "menu.php"; ?>

            <form method="post" action="../controller/agregar.php">
                <div class="campo">
                    <label for="nombre">Nombre</label>
                    <input id="nombre" name="nombre" type="text" placeholder="Tu Nombre">
                </div>
                <div class="campo">
                    <label for="fecha">Fecha</label>
                    <input id="fecha" name="fecha" type="date" min="10-03-2021">
                </div>
                <div class="campo">
                    <label for="hora">Hora</label>
                    <input id="hora" name="hora" type="time">
                </div>

                <button type="submit" value="Guardar" id="siguiente" style="float: right;">
                    Guardar
                </button>
            </form>

        </div>
    </div>



</body>

</html>