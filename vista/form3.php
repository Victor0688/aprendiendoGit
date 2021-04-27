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
        <div class="imagen3 wall"></div>
        <div class="app">
            <header class="header">
                <h1>App Peluqueria</h1>
            </header>

            <?php include "menu.php"; ?>


            <form class="text-center" method="POST" action="../controller/agregar_form3.php">

                <fieldset>
                    <legend>Informacion Personal</legend>
                    <div class="campo">
                        <label for="nombre">Nombre:</label>
                        <input type="text" placeholder="Tu Nombre" id="nombre" name="nombre">
                    </div>
    
                    <div class="campo">
                        <label for="email">E-mail</label>
                        <input type="email" placeholder="Tu E-mail" id="email" name="email">
                    </div>
                
                    <div class="campo">
                        <label for="telefono">Telefono</label>
                        <input type="tel" placeholder="Tu Telefono" id="telefono" name="telefono">
                    </div>

                    <div class="campo">
                        <label for="mensaje">Mensaje:</label>
                        <textarea id="mensaje" name="mensaje"></textarea>
                    </div>
                 </fieldset>
    
                <fieldset>
                    <legend>Informacion sobre la propiedad</legend>

                    <div class="campo">
                        <label for="opciones">Vende o Compra:</label>
                        <select id="opciones" name="VoC">
                            <option value="" disabled selected>-- Seleccione --</option>
                            <option value="Compra">Compra</option>
                            <option value="Vende">Vende</option>
                        </select>
                    </div>

                    <div class="campo">
                        <label for="presupuesto">Tu Precio o Presupuesto</label>
                        <input type="number" placeholder="Tu Precio o Presupuesto" id="presupuesto" name="presupuesto">
                    </div>

                </fieldset>
    
                <fieldset>
                    <legend>Contacto</legend>
    
                    <p>Como desea ser contactado:</p>
    
                    <div class="forma-contacto">
                        
                        <label for="contactar-telefono">Telefono</label>
                        <input name="tipocontacto" type="radio" value="telefono" id="contactar-telefono">
                        
                        <label for="contactar-email" name="contactar_email">E-mail</label>
                        <input name="tipocontacto" type="radio" value="e-mail" id="contactar-email">
                    </div>
    
                    <p>Si eligió teléfono, elija la fecha y hora</p>

                    <div class="campo">
                        <label for="fecha">Fecha:</label>
                        <input type="date" id="fecha" name="fecha">
                    </div>
                    <div class="campo">   
                        <label for="hora">Hora:</label>
                        <input type="time" id="hora" name="hora" min="9:00" max="18:00">
                    </div>
    
                 </fieldset>
    
                 <button type="submit" value="Guardar" id="siguiente" style="float: right;" >
                    Guardar
                 </button>
            </form>
        </main>

        </div>
    </div>

</body>
</html>