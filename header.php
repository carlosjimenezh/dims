<span id="inicio"></span>
<header>
    <div class="contactos txtamarillo fgrisosc">
        <div class="contenido">
            <a href="">
                T.&nbsp;11&nbsp;1111&nbsp;1111
            </a>
            <a href="">
                T.&nbsp;11&nbsp;1111&nbsp;1111
            </a>
            <a href="">
                hablemos@dimsconstrucciones.com
            </a>
        </div>
    </div>
    <nav class="w3-bar famarillo">
        <div class="contenido txtgris">
            <a href="" class="w3-hide-small">
                <img src="assets/logo.svg" alt="" class="logo">
            </a>
            <div class="w3-half">
                <div class="navbar">
                    <a href="" class="w3-hide-large w3-hide-medium">
                        <img src="assets/logo.svg" alt="" width="135px">
                    </a>
                    <a href="#inicio" class="w3-bar-item w3-hide-small">Inicio</a>
                    <span class="w3-bar-item w3-hide-small">&bull;</span>
                    <a href="#nosotros" class="w3-bar-item w3-hide-small">Nosotros</a>
                    <span class="w3-bar-item w3-hide-small">&bull;</span>
                    <a href="#galeria" class="w3-bar-item w3-hide-small">Galería&nbsp;de&nbsp;servicios</a>
                    <span class="w3-bar-item w3-hide-small">&bull;</span>
                    <a href="#contacto" class="w3-bar-item w3-hide-small">Contacto</a>
                    <a href="javascript:void(0)" class="w3-hide-large w3-hide-medium" 
                        style="font-size: 2.5em" onclick="mostrarMenu()">
                        &#9776;
                    </a>
                </div>
            </div>
            <div class="w3-half w3-center">
                <div class="ubicacion">
                    Ensenada,&nbsp;Baja&nbsp;California.
                </div>
            </div>
        </div>

        <!-- collapsing menu -->
        <div id="collapsing-menu" class="w3-bar-block w3-hide w3-hide-medium w3-hide-large contenido txtgris">
            <a href="#inicio" class="w3-bar-item">Inicio</a>
            <a href="#nosotros" class="w3-bar-item">Nosotros</a>
            <a href="#galeria" class="w3-bar-item">Galería de servicios</a>
            <a href="#contacto" class="w3-bar-item">Contacto</a>    
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

