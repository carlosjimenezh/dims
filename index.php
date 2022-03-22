<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="w3pro.css">
    <link rel="stylesheet" href="estilo.css">
    <title>Dims</title>
</head>
<body> 
    <?php include('header.php'); ?>

    <section id="banner-principal">
        <div class="banner-principal"></div>
        <div class="w3-row w3-center contenido contenido-small">
            <div class="w3-half mitadizq">
                <h2>Nosotros</h2>
                <span class="txtamarillo">prueba</span> <br>
                omos una empresa dedicada a la planeación y ejecución de proyectos constructivos. Fundada en la ciudad de Ensenada, Baja California en el año 2017. <br>
                Destaca nuestra honestidad, ingenio y la calidad en nuestros servicios. Si deseas invertir en una propiedad, hablemos de construir.
            </div>
            <div class="w3-half mitadder">
                <h2>Misión</h2>
                <span class="txtamarillo">prueba</span> <br>
                Brindar soluciones creativas y facilitar los procesos constructivos para asegurar el éxito de los proyectos de nuestros clientes.
            </div>
        </div>
    </section>

    <section id="valores">
        <div class="w3-center contenido contenido-small">
            <h2>Valores</h2>
            <div class="w3-row">
                <div class="w3-col m4 s6">
                    <img src="assets/valores/trabajo.png" alt="">
                    <h3>Trabajo en equipo.</h3>
                </div>
                <div class="w3-col m4 s6">
                    <img src="assets/valores/respeto.png" alt="">
                    <h3>Respeto.</h3>
                </div>
                <div class="w3-col m4 s6">
                    <img src="assets/valores/lealtad.png" alt="">
                    <h3>Lealtad al cliente.</h3>
                </div>
                <div class="w3-col m4 s6">
                    <img src="assets/valores/seguridad.png" alt="">
                    <h3>Seguridad y bienestar de nuestro equipo de trabajo.</h3>
                </div>
                <div class="w3-col m4 s6">
                    <img src="assets/valores/honestidad.png" alt="">
                    <h3>honestidad.</h3>
                </div>
                <div class="w3-col m4 s6">
                    <img src="assets/valores/creatividad.png" alt="">
                    <h3>Creatividad.</h3>
                </div>
            </div>
        </div>
    </section>

    <section id="servicios" class="contenido">
        <h2 class="contenido contenido-small w3-center">Servicios</h2>
        <div class="contenido-small" style="margin: 80px auto 15px;">
            <h1>Proyectos Habitacionales o comerciales</h1>
            <ul>
                <li>Desarrollo arquitectónico</li>
                <li>Presupuesto y calendarización de obra</li>
                <li>Administración de obra</li>
                <li>Ejecución de obra.</li>
                <li>Nivelado y compactación de terrenos</li>
            </ul>
        </div>
        <div class="w3-row">
            <div class="w3-third mitadizq">
                <img src="assets/rectangle.png" alt="">
            </div>
            <div class="w3-third mitadcentro">
                <img src="assets/rectangle.png" alt="">
            </div>
            <div class="w3-third mitadder">
                <img src="assets/rectangle.png" alt="">
            </div>
            <div class="w3-third mitadizq">
                <img src="assets/rectangle.png" alt="">
            </div>
            <div class="w3-third mitadcentro">
                <img src="assets/rectangle.png" alt="">
            </div>
            <div class="w3-third mitadder">
                <img src="assets/rectangle.png" alt="">
            </div>
        </div>
        <div class="contenido-small" style="margin: 80px auto 15px;">
            <h1>Acabados, remodelaciones y más</h1>
            <ul>
                <li>Aplanado de muros</li>
                <li>Pisos y recubrimientos</li>
                <li>Muebles de baños</li>
                <li>Carpintería (muebles de baño, cocinas, closets, pérgolas, etc.)</li>
            </ul>
        </div>
        <div class="w3-row">
            <div class="w3-third mitadizq">
                <img src="assets/rectangle.png" alt="">
            </div>
            <div class="w3-third mitadcentro">
                <img src="assets/rectangle.png" alt="">
            </div>
            <div class="w3-third mitadder">
                <img src="assets/rectangle.png" alt="">
            </div>
            <div class="w3-third mitadizq">
                <img src="assets/rectangle.png" alt="">
            </div>
            <div class="w3-third mitadcentro">
                <img src="assets/rectangle.png" alt="">
            </div>
            <div class="w3-third mitadder">
                <img src="assets/rectangle.png" alt="">
            </div>
        </div>
    </section>

    <section id="lo-que-hacemos">
        <div class="contenido">
            <h4 class="txtamarillo w3-center">Lo que hacemos</h4>
        </div>
    </section>

    <section id="contacto" class="contenido contenido-small">
        <h2 class="w3-center">Contacto</h2>
        <form action="" class="w3-row">
            <div class="w3-half mitadizq">
                <label for="nombre">Nombre*:</label>
                <input id="nombre" type="text" name="nombre">
                <label for="horario">Horario:</label>
                <input id="horario" type="text" name="horario">
            </div>
            <div class="w3-half mitadder">
                <label for="telefono">Teléfono*:</label>
                <input id="telefono" type="text" name="telefono">
                <label for="correo">Correo:</label>
                <input id="correo" type="text" name="correo">
            </div>
            <div>
                <label for="mensaje">Mensaje*:</label>
                <textarea name="mensaje" id="" cols="30" rows="7"></textarea>
            </div>
        </form>
    </section>
    

    <?php include('footer.html'); ?>
</body>
</html>