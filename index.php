<?php
    declare(strict_types= 1);

    require 'includes/app.php';
    
    includeTemplate('headerRedesign');
?>
    <?php include 'includes/views/banner.php'; ?>

    <?php include 'includes/views/descripcion.php'; ?>

    <?php include 'includes/views/servicios.php'; ?>

    <?php include 'includes/views/impacto.php'; ?>

    <?php
        use PHPMailer\PHPMailer\PHPMailer;
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $alerta = true;
            $respuestas = $_POST['cita'];
            
            // Crear una instancia PHPMailer
            $phpmailer = new PHPMailer();

            // Configurar SMTP
            $phpmailer->SMTPDebug = 0;
            $phpmailer->isSMTP();
            $phpmailer->Host = $_ENV['EMAIL_HOST'];
            $phpmailer->SMTPAuth = true;
            $phpmailer->Port = $_ENV['EMAIL_PORT'];
            $phpmailer->Username = $_ENV['EMAIL_USERC'];
            $phpmailer->Password = $_ENV['EMAIL_PASSC'];
            $phpmailer->SMTPSecure = 'ssl'; 


            // Configurar el contenido de email
            $phpmailer->setFrom($_ENV['EMAIL_SEND'],  $respuestas['name'] . " " . $respuestas['lastname']);

            $phpmailer->addAddress($_ENV['EMAIL_USERC'], 'Equilibrio');
            $phpmailer->Subject = 'Tienes un nuevo mensaje';


            // Habilitar HTML
            $phpmailer->isHTML(true);
            $phpmailer->CharSet = 'UTF-8';

            // Definir el contenido
            $contenido = '<html>';
            $contenido .= "<p><strong>Has Recibido un email:</strong></p>";

                $contenido .= "<p>Nombre: " . $respuestas['name'] . " " . $respuestas['lastname'] . "</p>";
                $contenido .= "<p>Teléfono: " . $respuestas['phone'] . "</p>";
                $contenido .= "<p>Correo: " . $respuestas['email'] . "</p>";
                $contenido .= "<p>Fecha: " . $respuestas['fecha'] . "</p>";
                $contenido .= "<p>Hora: " . $respuestas['hora'] . "</p>";
            
            $contenido .= '</html>';
            
            $phpmailer->Body = $contenido;
            $phpmailer->AltBody = 'Esto es texto alternativo sin HTML';

            // Enviar el mensaje
            if(!$phpmailer->send()){
                $alerta = false;
            } else {
                $alerta = true;
            }
        }
?>

<?php include 'includes/views/reserva.php'; ?>

        <script>
            document.getElementById("contact").addEventListener("submit", function(event) {
            event.preventDefault();

            // Tu código para enviar el formulario
            var formularioEnviado = <?php echo json_encode($alerta); ?>; 
            console.log(formularioEnviado);
            document.getElementById('modalform').style.display = 'none';


            if (formularioEnviado) {
                Swal.fire({
                icon: 'success',
                title: '¡Formulario enviado!',
                text: 'Gracias por reservar su cita',
                showConfirmButton: false,
                timer: 1500
                }).then(function() {
                    window.location = "/";
                });
                
            } else {
                Swal.fire({
                icon: 'error',
                title: 'Error al enviar el formulario',
                text: 'No se ha podido enviar el formulario. Por favor, intenta nuevamente.',
                showConfirmButton: false,
                timer: 1500
                }).then(function() {
                    window.location = "/";
                });
            }

            });
        </script>


    <?php include 'includes/views/reconocimientos.php'; ?>

    <?php include 'includes/views/alianzas.php'; ?>

    <?php include 'includes/views/equipo.php'; ?>

    <?php
        includeTemplate('footerRedesign');
    ?>


