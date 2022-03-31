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
                    <span href="#inicio" class="w3-bar-item w3-hide-small">Inicio</span>
                    <span class="w3-bar-item w3-hide-small">&bull;</span>
                    <span href="#nosotros" class="w3-bar-item w3-hide-small">Nosotros</span>
                    <span   class="w3-bar-item w3-hide-small">&bull;</span>
                    <span href="#galeria" class="w3-bar-item w3-hide-small">Galería&nbsp;de&nbsp;servicios</span>
                    <span class="w3-bar-item w3-hide-small">&bull;</span>
                    <span href="#scontacto" class="w3-bar-item w3-hide-small">Contacto</span>
                    <a href="javascript:void(0)" class="w3-hide-large w3-hide-medium" 
                        style="font-size: 2.5em; cursor:pointer" onclick="mostrarMenu()">
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
        <div id="collapsing-menu" class="w3-bar-block w3-hide w3-hide-medium w3-hide-large contenido">
            <span href="#inicio" class="w3-bar-item">Inicio</span>
            <span href="#nosotros" class="w3-bar-item">Nosotros</span>
            <span href="#galeria" class="w3-bar-item">Galería de servicios</span>
            <span href="#scontacto" class="w3-bar-item">Contacto</span>    
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

