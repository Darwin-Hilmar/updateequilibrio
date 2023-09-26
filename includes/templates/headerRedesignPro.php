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

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo_eq">
                            <img src="/assets/img/Logo Equilibrio.png" width="170px"  class="img-logo">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/" class="active">Inicio</a></li>
                            <li class="scroll-to-section"><a href="programas.php">Programas</a></li>
                            <li class="scroll-to-section"><a href="index.php#cita">Psicohelp</a></li>

                            <li class="scroll-to-section">
                                <a href="#">
                                    <button  id="btn-donar-open" class="btn btn_apoya">Apoyar</button>
                                </a>
                            </li>

                            <dialog id="modal">
                                <button id="btn-donar-close">X</button>
                                <h2>Gracias por tu apoyo voluntario</h2>
                                <p>Puedes donar en nuestras cuentas bancarias o directamente mediante Plin a traves del QR</p>
                                <img src="/assets/redesign/qr_code.png" class="image_modal"></img>
                                <p>Plin:991 874 158</p>
                                <p>Interbank:2483120288404</p>
                                <p>CCI Interbank:0032483120288404</p>
                                <p>"Tu gesto solidario transforma vidas. Comparte tu generosidad y juntos contrutamos un futuro mejor."</p>
                            </dialog>

                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header><br>   
    <!-- ***** Header Area End ***** -->