<header>
    <div class="contactos txtamarillo fgris">
        <div class="contenido">
            <a href="">
                (33)&nbsp;3124&nbsp;3922
            </a>
            <a href="">
                (55)&nbsp;4612&nbsp;0706
            </a>
            <a href="">
                contacto@insoftnc.com
            </a>
        </div>
    </div>
    <nav class="w3-bar famarillo">
        <div class="contenido txtblanco">
            <div class="w3-half">
                <a href="contacto.php" class="w3-bar-item w3-hide-small">Inicio</a>
                <a href="contacto.php" class="w3-bar-item w3-hide-small">Nosotros</a>
                <a href="contacto.php" class="w3-bar-item w3-hide-small">Galería de servicios</a>
                <a href="contacto.php" class="w3-bar-item w3-hide-small">Contacto</a>
            </div>
            <div class="w3-half w3-center">
                    Ensenada, Baja California.
            </div>
            <a href="javascript:void(0)" class="w3-hide-large w3-hide-medium" 
            style="font-size: 2.5em" onclick="mostrarMenu()">
                &#9776;
            </a>
        </div>

        <!-- collapsing menu -->
        <div id="collapsing-menu" class="w3-bar-block w3-hide w3-hide-medium w3-hide-large contenido txtblanco">
            <a href="contacto.php" class="w3-bar-item">Inicio</a>
            <a href="contacto.php" class="w3-bar-item">Nosotros</a>
            <a href="contacto.php" class="w3-bar-item">Galería de servicios</a>
            <a href="contacto.php" class="w3-bar-item">Contacto</a>    
        </div>
        <script>
            function mostrarMenu() {
                var x = document.getElementById("collapsing-menu");
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else { 
                    x.className = x.className.replace(" w3-show", "");
                }
            }
        </script>
    </nav>
</header>

<a href="#" class="icon-fixed wa-icon" target="_blank">
    <img src="assets/whatsapp.svg" alt="">
</a>

