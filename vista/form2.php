
    <div class="contenedor-estetica">
        <div class="imagen2 wall"></div>
        <div class="app">

            <header class="header">
                <h1>App Peluqueria</h1>
            </header>

            <?php include "menu.php"; ?>

            <form class="text-center" method="post" action="agregar_sesion.php">               
                 <div class="campo">
                    <label for="nombre">Nombre:</label>
                    <input id="nombre" name="nombre" type="text" placeholder="Tu Nombre">
                </div>
                <div class="campo">
                    <label for="apellido">Apellido:</label>
                    <input id="apellido" name="apellido" type="text" placeholder="Tu Apellido">
                </div>
                <div class="campo">
                    <label for="email">Correo:</label>
                    <input id="email" name="email" type="email" placeholder="Tu e-mail">
                </div>
                <div class="campo">
                    <label for="telefono">Telefono:</label>
                    <input id="telefono" name="telefono" type="tel" placeholder="Tu Telefono">
                </div>

                 <button type="submit" value="Guardar" id="siguiente" style="float: right;" >
                        Guardar
                 </button>
            </form>

        </div>
    </div>

