<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <script src="https://kit.fontawesome.com/ded965e364.js" crossorigin="anonymous"></script>


    <!-- Agrega esto antes del cierre del </body> -->
    <title>Equilibrio</title>
    
    <!-- Additional CSS Files -->

    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.css">
    <link rel="stylesheet" href="/assets/css/templatemo-klassy-cafe.css">
    <link rel="stylesheet" href="/assets/css/owl-carousel.css">
    <link rel="stylesheet" href="/assets/css/lightbox.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/blog.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/tareas.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/donar.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/redesign.css">
    <link rel="stylesheet" type="text/css" href="/node_modules/sweetalert2/dist/sweetalert2.min.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>  
</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->






    <?php

        use PHPMailer\PHPMailer\PHPMailer;
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $alerta = null;
            $respuestas = $_POST['sumate'];
            
            // Crear una instancia PHPMailer
            $phpmailer = new PHPMailer();

            // Configurar SMTP
            $phpmailer->SMTPDebug = 0;
            $phpmailer->isSMTP();
            $phpmailer->Host = 'mail.equilibrio.org.pe';
            $phpmailer->SMTPAuth = true;
            $phpmailer->Port = 465;
            $phpmailer->Username = 'sumate@equilibrio.org.pe';
            $phpmailer->Password = 'ARAsumate123';
            $phpmailer->SMTPSecure = 'ssl'; 


            // Configurar el contenido de email
            $phpmailer->setFrom('usuarios@equilibrio.org.pe',  $respuestas['nombre'] . " " . $respuestas['apellido']);

            $phpmailer->addAddress('sumate@equilibrio.org.pe', 'Equilibrio');
            $phpmailer->Subject = 'Tienes un nuevo mensaje';


            // Habilitar HTML
            $phpmailer->isHTML(true);
            $phpmailer->CharSet = 'UTF-8';

            // Definir el contenido
            $contenido = '<html>';
            $contenido .= "<p><strong>Has Recibido un email:</strong></p>";

            $contenido .= "<p>Nombre: " . $respuestas['nombre'] . " " . $respuestas['apellido'] . "</p>";
            $contenido .= "<p>Teléfono: " . $respuestas['telefono'] . "</p>";
            $contenido .= "<p>Correo: " . $respuestas['correo'] . "</p>";
            $contenido .= "<p>Tipo Documento: " . $respuestas['tipoDocumento'] . " - " . $respuestas['documento'] . "</p>";            
            
            $contenido .= '</html>';
            
            $phpmailer->Body = $contenido;
            $phpmailer->AltBody = 'Esto es texto alternativo sin HTML';

            // Enviar el mensaje
            if(!$phpmailer->send()){
                $alerta = 'Hubo un Error... intente de nuevo';
            } else {
                $alerta = 'Email enviado Correctamente';
            }
        }


        includeTemplate('header');
    ?>







    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <!-- <div class="row">
                <div class="col-12">
                    <nav class="main-nav">

                        <a href="/" class="logo_eq">
                            <img src="/assets/img/Logo Equilibrio.png" width="170px"  class="img-logo">
                        </a>

                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/" class="active">Inicio</a></li>
                            <li class="scroll-to-section"><a href="programas.php">Programas</a></li>
                            <li class="scroll-to-section"><a href="#cita">Psicohelp</a></li>
                            <li class="scroll-to-section"><a href="blog.php">Blog</a></li>

                            <li class="scroll-to-section">
                                <a href="#">
                                    <button  id="btn-donar-open" class="btn btn_apoya">Súmate</button>
                                </a>
                            </li>

                            <dialog id="modal">
                                <div class="apoya-modal">
                                    <button id="btn-donar-close">X</button>
                                    <h2>Gracias por tu apoyo voluntario</h2>
                                    <p>Puedes donar en nuestras cuentas bancarias o directamente mediante Plin a traves del QR</p>
                                    <div class="center-image">
                                        <img src="/assets/redesign/qr_code.png" alt="plin equilibrio"></img>
                                    </div>
                                    <p>Plin:991 874 158</p>
                                    <p>Interbank:2483120288404</p>
                                    <p>CCI Interbank:0032483120288404</p>
                                    <p>"Tu gesto solidario transforma vidas. Comparte tu generosidad y juntos contrutamos un futuro mejor."</p>
                                </div>
                            </dialog>

                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>

                    </nav>
                </div>
            </div> -->
            <nav>
                <input type="checkbox" id="toogle">
                <div class="logo">
                    <img src="/assets/redesign/logoEQ.png" alt="Equilibrio">
                </div>
                <ul class="list-nav">
                    <li><a href="/">Inicio</a></li>
                    <li><a href="programas.php">Programas</a></li>
                    <li><input type="button" value="Psicohelp"s id="btn-form-open"></li>
                    <li><a href="blogs.php">Blog</a></li>
                    <li><button class="btn btn_apoya"  id="btn-donar-open">Súmate</button></li>
                </ul>
                <label for="toogle" class="icon-bars">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </label>
            </nav>
        </div>

        <!-- <dialog id="modalform">
            <button id="btn-form-close">X</button>
            <div class="contact-form">
                <form id="contact" action="/" method="post">    
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Reserva tu cita ahora</h4>
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <fieldset>Nombre:
                                <input name="cita[name]" type="text" id="name" placeholder="Nombres" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <fieldset>Apellidos:
                                <input name="cita[lastname]" type="text" id="lastname" placeholder="Apellidos"
                                    required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <fieldset>Móvil:
                                <input name="cita[phone]" type="text" id="phone" placeholder="Teléfono" required="">
                            </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <fieldset>Correo:
                                <input name="cita[email]" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                    placeholder="Email" required="">
                            </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <fieldset>Fecha:
                                <input name="cita[fecha]" type="date" id="fecha" 
                                    placeholder="00/00/0000" required="">
                            </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <fieldset>Hora:
                                <input name="cita[hora]" type="time" id="hora"
                                    placeholder="00:00 am/pm" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="d-flex form-control"
                                    style="font-size: 21px;">Reservar cita</button>
                            </fieldset>
                        </div>
                        <div id="contact-form-text">"Tu gesto solidario transforma vidas. Comparte tu generosidad y juntos construyamos un futuro mejor"</div>
                        </div>
                    </form>
                </div>
        </dialog> -->


        <dialog id="modalform">
            <button id="btn-form-close">X</button>
            <div class="contact-form">
                
                <form id="contact" action="/" method="post">    
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Sumarte ahora</h4>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <fieldset>Nombre:
                                <input name="sumate[nombre]" type="text" id="name" placeholder="Nombres" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <fieldset>Apellidos:
                                <input name="sumate[apellido]" type="text" id="lastname" placeholder="Apellidos"
                                    required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <fieldset>Móvil:
                                <input name="sumate[telefono]" type="text" id="phone" placeholder="Teléfono" required="">
                            </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <fieldset>Correo:
                                <input name="sumate[email]" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                    placeholder="Email" required="">
                            </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <fieldset>Tipo de documento:
                                <select aria-required="true" aria-invalid="false" name="sumate[tipoDocumento]" required>
                                    <option value="" disabled selected>Selecciona una opción</option>
                                    <option value="opcion1">DNI</option>
                                    <option value="opcion2">PASAPORTE</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <fieldset>N° de documento:
                                <input name="sumate[documento]" type="text" id="documento" 
                                    placeholder="Documento" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="d-flex form-control"
                                    style="font-size: 21px;">Sumarse</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </dialog>

        <dialog id="modal">
            <div class="apoya-modal">
                <button id="btn-donar-close">X</button>
                <h2>Gracias por tu apoyo voluntario</h2>
                <p>Puedes donar en nuestras cuentas bancarias o directamente mediante Plin a traves del QR</p>
                <div class="center-image">
                    <img src="/assets/redesign/qr_code.png" alt="plin equilibrio"></img>
                </div>
                <p>Plin:991 874 158</p>
                <p>Interbank:2483120288404</p>
                <p>CCI Interbank:0032483120288404</p>
                <p>"Tu gesto solidario transforma vidas. Comparte tu generosidad y juntos contrutamos un futuro mejor."</p>
            </div>
        </dialog>

    </header><br>   
    <?php if($alerta): ?>
					<p class="check_tls"><?php echo $alerta; ?></p>
				<?php endif; ?>
    <!-- ***** Header Area End ***** -->