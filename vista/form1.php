
    <div class="contenedor-estetica">
        <div class="imagen1 wall"></div>
        <div class="app">
            <header class="header">
                <h1>App Peluqueria</h1>
            </header>

<?php include "menu.php"; ?>

            <form method="post" action="agregar.php">               
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

                <button type="submit" value="Guardar" id="siguiente" style="float: right;" >
                    Guardar
                </button>
            </form>

        </div>
    </div>
