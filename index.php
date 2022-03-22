<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="w3pro.css">
    <link rel="stylesheet" href="estilo.css">
    <script type="text/javascript">
        function verifica()
        {
            if(document.contacto.nombre.value.trim()==""  || document.contacto.email.value.trim()=="" || document.contacto.producto.value.trim()=="")
            {
                alert("Es necesario escribir tu nombre, e-mail y el diseño de producto");     
            }
            else
            {
                var s = document.contacto.email.value;
                var filter=/^[A-Za-z][A-Za-z0-9_.ñÑ-]*@[A-Za-z0-9_ñÑ-]+\.[A-Za-z0-9_.ñÑ-]+[A-za-z]$/;
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
        <a name="scontacto"></a>
    	<?php
	    if(isset($_GET['a']) && $_GET['a']==2 && isset($_POST['email']) && isset($_POST['nombre']) 
        && isset($_POST['producto']) && trim($_POST['email'])!="" && trim($_POST['nombre'])!="" 
        && trim($_POST['producto'])!=""){

			if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){	
				$nombre=strip_tags($_POST['nombre']);
				$from = $_POST['email'];
				$email_from = $from;
				$email_txt = "Este es un correo enviado desde el formulario web de SOLIDWORKS<br><br>
                &middot; Nombre: ".$nombre."<br>
                &middot; E-mail: ".$_POST['email']."<br>
                &middot; Empresa: ".strip_tags($_POST['empresa'])."<br>
                &middot; Teléfono: ".strip_tags($_POST['telefono'])."<br>
				&middot; Diseño de producto: ".strip_tags($_POST['producto'])."<br><br>";
				
				if($_POST['capacitacion'] || $_POST['licencias']){
					$email_txt.="INTERÉS:<br>";
					if($_POST['capacitacion'])
						$email_txt.="- Capacitación<br>";
					if($_POST['licencias'])
						$email_txt.="- Implementar licencias<br>";
				}
				
                
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
                    sans-serif\">ventas@.com</span></div><br><br><br>";
				
			}
			else
				echo "<br><br><div class=\"aviso\">E-mail no válido.</div><br><br><br>";
	    }
	    else{?>
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
        <?php
	    }?>
    </section>
    

    <?php include('footer.html'); ?>
    <script src="swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper', {
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
        });
    </script>
</body>
</html>