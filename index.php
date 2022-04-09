<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="lightbox/css/lightbox.css">
    <link rel="stylesheet" href="w3pro.css">
    <link rel="stylesheet" href="estilo.css">
    <link rel="shortcut icon" href="favicon.png">
    <link href="http://fonts.cdnfonts.com/css/sangharia" rel="stylesheet">
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="js/jquery.touchSwipe.min.js"></script>
    <script src="lightbox/js/lightbox.js"></script>
    <style>
        .swiper-slide {
        background-position: center;
        background-size: cover;
        height: 300px;
        }
    </style>
    <script type="text/javascript">
        function verifica()
        {
            if(document.contacto.nombre.value.trim()==""  || document.contacto.telefono.value.trim()=="" 
            || document.contacto.mensaje.value.trim()=="")
            {
                alert("Es necesario escribir tu nombre, teléfono y mensaje");     
            }
            else
            {
                var s = document.contacto.telefono.value;
                // var filter=/^[A-Za-z][A-Za-z0-9_.ñÑ-]*@[A-Za-z0-9_ñÑ-]+\.[A-Za-z0-9_.ñÑ-]+[A-za-z]$/;
                var filter=/^[0-9]{10}$/;
                if(filter.test(s))
                {            
                    document.contacto.submit();
                }
                else
                {
                    alert("Por favor, escribe una dirección de e-mail válida");
                }
            }
        }
	</script>
    <title>DIMS Construcciones</title>
</head>
<body> 
    <!-- Script para el efecto slow scroll  -->
    <script type="text/javascript">
    $(function() 
    {
        $('span').bind('click',function(event){
            var $anchor = $(this);
            
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top-80
            }, 1500,'easeInOutCirc');
            /*
            if you don't want to use the easing effects:
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 1000);easeInOutBack
            */
            event.preventDefault();
        });
    });
    </script>
    <?php include('header.php'); ?>

    <section id="banner-principal" class="fgris">
        <div class="swiper1">
            <div class="swiper-wrapper">
                <div class="swiper-slide banner-principal"></div>
                <div class="swiper-slide banner-principal" style="background-image: url(assets/principal2.jpg);"></div>
                <div class="swiper-slide banner-principal" style="background-image: url(assets/principal3.jpg);"></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <span id="nosotros" style="margin-top: -60px; position:absolute"></span>
        <div class="w3-row w3-center contenido contenido-small">
            <div class="w3-half mitadizq">
                <h2>Nosotros</h2><br>
                <strong class="txtamarillo">DIMS S.A. DE C.V.</strong> 
                <div style="text-align: justify; text-align-last:center">
                    Somos una empresa dedicada a la planeación y ejecución de proyectos constructivos. Fundada en la ciudad de Ensenada, Baja California en el año 2017.<br><br>
                    Destaca nuestra honestidad, ingenio y la calidad en nuestros servicios. Si deseas invertir en una propiedad, hablemos de construir.
                </div>
            </div>
            <div class="w3-half mitadder"><br>
                <h2>Misión</h2><br>
                <strong class="txtamarillo">Misión</strong> 
                <div style="text-align: justify; text-align-last:center">
                    Brindar soluciones creativas y facilitar los procesos constructivos para asegurar el éxito de los proyectos de nuestros clientes.
                </div>
            </div>
        </div>
        <div class="w3-row" style="background-image:url(assets/fgris.svg); background-position:bottom; background-size:cover; height:115px; background-repeat:no-repeat; background-color:#fff!important"></div>
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

    <section id="servicios" class="contenido fgris">
    	<span id="galeria" style="margin-top: -60px; position:absolute"></span>
        <h2 class="contenido contenido-small w3-center">Servicios</h2>
        <div class="contenido-small" style="margin: 80px auto 15px;">
            <h1>Proyectos Habitacionales o comerciales</h1>
            <ul>
                <li>Desarrollo arquitectónico</li>
                <li>Presupuesto y calendarización de obra</li>
                <li>Administración de obra</li>
                <li>Ejecución de obra</li>
                <li>Nivelado y compactación de terrenos</li>
            </ul><br>
        </div>
        <div class="w3-row">
            <div class="w3-col m4 s6 mitadizq">
                <a href="assets/proyectos/habitacionales/habitacional1.jpg" data-lightbox="proyectos" data-title="Proyectos Habitacionales y comerciales">
                    <img src="assets/proyectos/habitacionales/gal/habitacional1.jpg" alt="" class="imgmax">
                </a>
            </div>
            <div class="w3-col m4 s6 mitadcentro">
                <a href="assets/proyectos/habitacionales/habitacional2.jpg" data-lightbox="proyectos" data-title="Proyectos Habitacionales y comerciales">
                    <img src="assets/proyectos/habitacionales/gal/habitacional2.jpg" alt="" class="imgmax">
                </a>
            </div>
            <div class="w3-col m4 s6 mitadder">
                <a href="assets/proyectos/habitacionales/habitacional3.jpg" data-lightbox="proyectos" data-title="Proyectos Habitacionales y comerciales">
                    <img src="assets/proyectos/habitacionales/gal/habitacional3.jpg" alt="" class="imgmax">
                </a>
            </div>
            <div class="w3-col m4 s6 mitadizq">
                <a href="assets/proyectos/habitacionales/habitacional4.jpg" data-lightbox="proyectos" data-title="Proyectos Habitacionales y comerciales">
                    <img src="assets/proyectos/habitacionales/gal/habitacional4.jpg" alt="" class="imgmax">
                </a>
            </div>
            <div class="w3-col m4 s6 mitadcentro">
                <a href="assets/proyectos/habitacionales/habitacional5.jpg" data-lightbox="proyectos" data-title="Proyectos Habitacionales y comerciales">
                    <img src="assets/proyectos/habitacionales/gal/habitacional5.jpg" alt="" class="imgmax">
                </a>
            </div>
            <div class="w3-col m4 s6 mitadder">
                <a href="assets/proyectos/habitacionales/habitacional6.jpg" data-lightbox="proyectos" data-title="Proyectos Habitacionales y comerciales">
                    <img src="assets/proyectos/habitacionales/gal/habitacional6.jpg" alt="" class="imgmax">
                </a>
            </div>
        </div>
        <div class="contenido-small" style="margin: 80px auto 15px;">
            <h1>Acabados, remodelaciones y más</h1>
            <ul>
                <li>Aplanado de muros</li>
                <li>Pisos y recubrimientos</li>
                <li>Muebles de baños</li>
                <li>Carpintería (muebles de baño, cocinas, closets, pérgolas, etc.)</li>
            </ul><br>
        </div>
        <div class="w3-row">
            <div class="w3-col m4 s6 mitadizq">
                <a href="assets/proyectos/acabados/acabado1.jpg" data-lightbox="acabados" data-title="Acabados, remodelaciones y más">
                    <img src="assets/proyectos/acabados/gal/acabado1.jpg" alt="" class="imgmax">
                </a>
            </div>
            <div class="w3-col m4 s6 mitadcentro">
                <a href="assets/proyectos/acabados/acabado2.jpg" data-lightbox="acabados" data-title="Acabados, remodelaciones y más">
                    <img src="assets/proyectos/acabados/gal/acabado2.jpg" alt="" class="imgmax">
                </a>
            </div>
            <div class="w3-col m4 s6 mitadder">
                <a href="assets/proyectos/acabados/acabado3.jpg" data-lightbox="acabados" data-title="Acabados, remodelaciones y más">
                    <img src="assets/proyectos/acabados/gal/acabado3.jpg" alt="" class="imgmax">
                </a>
            </div>
            <div class="w3-col m4 s6 mitadizq">
                <a href="assets/proyectos/acabados/acabado4.jpg" data-lightbox="acabados" data-title="Acabados, remodelaciones y más">
                    <img src="assets/proyectos/acabados/gal/acabado4.jpg" alt="" class="imgmax">
                </a>
            </div>
            <div class="w3-col m4 s6 mitadcentro">
                <a href="assets/proyectos/acabados/acabado5.jpg" data-lightbox="acabados" data-title="Acabados, remodelaciones y más">
                    <img src="assets/proyectos/acabados/gal/acabado5.jpg" alt="" class="imgmax">
                </a>
            </div>
            <div class="w3-col m4 s6 mitadder">
                <a href="assets/proyectos/acabados/acabado6.jpg" data-lightbox="acabados" data-title="Acabados, remodelaciones y más">
                    <img src="assets/proyectos/acabados/gal/acabado6.jpg" alt="" class="imgmax">
                </a>
            </div>
        </div>
    </section>

    <section id="lo-que-hacemos">
        <div class="contenido"><br>
            <h4 class="txtamarillo w3-center">Lo que hacemos</h4>
            <div class="swiper2">
                <div class="swiper-wrapper">
                    <?php 
                        $dir_name = 'assets/fotos/';
                        $images = glob($dir_name."*.{JPG,jpg,png,PNG}", GLOB_BRACE);
                        foreach($images as $image) {
                            echo '<div class="swiper-slide" style="background-image:url('.$image.')"></div>';
                        } 
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section id="contacto-seccion" class="contenido contenido-small">
        <a name="scontacto"></a>
    	<?php
	    if(isset($_GET['a']) && $_GET['a']==2 && isset($_POST['telefono']) && isset($_POST['nombre']) 
        && isset($_POST['producto']) && trim($_POST['telefono'])!="" && trim($_POST['nombre'])!="" 
        && trim($_POST['producto'])!=""){

			if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){	
				$nombre=strip_tags($_POST['nombre']);
				$from = $_POST['email'];
				$email_from = $from;
				$email_txt = "Este es un correo enviado desde la página web DIMS<br><br>
                &middot; Nombre: ".$nombre."<br>
                &middot; E-mail: ".$_POST['email']."<br>
                &middot; Teléfono: ".strip_tags($_POST['telefono'])."<br>
                &middot; Horario: ".strip_tags($_POST['horario'])."<br>
				&middot; Mensaje: ".strip_tags($_POST['producto'])."<br><br>";
				
				// if($_POST['capacitacion'] || $_POST['licencias']){
				// 	$email_txt.="INTERÉS:<br>";
				// 	if($_POST['capacitacion'])
				// 		$email_txt.="- Capacitación<br>";
				// 	if($_POST['licencias'])
				// 		$email_txt.="- Implementar licencias<br>";
				// }
				
                
					$email_to= "carlosejimenezh95@gmail.com";
					$email_subject = "contacto de ".$nombre;
				
				$headers = "From: ".$email_from;
				
				$semi_rand = md5(time());
				$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
                
				$headers .= "\nMIME-Version: 1.0\n" . 
							"Content-Type: multipart/mixed;\n" . 
							" boundary=\"{$mime_boundary}\"";  
				$email_message .= $email_txt. "\n\n" . 
								"--{$mime_boundary}\n" . 
								"Content-Type:text/html; charset=\"utf-8\"\n" . 
							   "Content-Transfer-Encoding: 7bit\n\n" . 
				$email_txt . "\n\n";  
				
				$data = chunk_split(base64_encode($data)); 
				
				$ok = @mail($email_to, $email_subject, $email_message, $headers); 
				if($ok)
					echo "<br><br><div class=\"aviso txtazul\">Gracias por escribirnos,<br>
                    nos pondremos en contacto lo antes posible.</div><br><br><br>";
				else
					echo "<br><br><div class=\"aviso txtazul\">Hubo un error al enviar su mensaje, 
                    inténtelo de nuevo o escríbanos a <span style=\"font-family:arial, 
                    sans-serif\">hablemos@dimsconstruye.mx</span></div><br><br><br>";
				
			}
			else
				echo "<br><br><div class=\"aviso\">E-mail no válido.</div><br><br><br>";
	    }
	    else{?>
        <span id="scrollcontacto" style="margin-top: -80px; position:absolute"></span>
        <h2 class="w3-center" style="margin-bottom: 70px;">Contacto</h2>
        <form action="index.php?a=2#scontacto" class="w3-row" name="contacto" id="contacto" method="POST">
            <div class="w3-half mitadizq">
                <label for="nombre">Nombre*:</label>
                <input id="nombre" type="text" name="nombre">
                <label for="horario">Horario:</label>
                <input id="horario" type="text" name="horario">
            </div>
            <div class="w3-half mitadder">
                <label for="telefono">Teléfono (10 dígitos)*:</label>
                <input id="telefono" type="text" name="telefono">
                <label for="email">Correo:</label>
                <input id="email" type="text" name="email">
            </div>
            <div>
                <label for="mensaje">Mensaje*:</label>
                <textarea name="mensaje" id="" cols="30" rows="7"></textarea>
            </div>
            <a onclick="verifica()" class="btn txtgris">Enviar</a>
        </form>
        <?php
	    }?>
    </section>
    

    <?php include('footer.html'); ?>
    <script src="swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper1 = new Swiper('.swiper1', {
            spaceBetween: 30,
            speed: 800,
            disableOnInteraction: false,
            effect: 'fade',
            adeEffect: {
                crossFade: true
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 3000,
            }
        }
        );
        var swiper2 = new Swiper('.swiper2', {
        effect: 'coverflow',
        slidesPerView: 2,
        grabCursor: true, 
        centeredSlides: true,
        coverflowEffect: {
            rotate: 10,
            stretch: 25,
            depth: 200,
            modifier: 1,
            slideShadows: true,
        },
        // breakpoints: {
        //     600: {
        //         slidesPerView: 2,
        //     }
        // },
        loop: true,
        autoplay: {
            delay: 3000,
        },
        slideToClickedSlide: true,
        });
    </script>
    
    

	<script>
        lightbox.option({
          'albumLabel': "Imagen %1 de %2",
          'wrapAround': true
        })
    </script>


</body>
</html>