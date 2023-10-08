
     <footer class="footer_redis">
        <div class="footer-content">
            
            <div class="footer-logo">
                <img src="/assets/img/Logo png en blanco.png" alt="equilibrio">
            </div>
            <div class="footer-contact">
                <div class="contact-item">
                    <i class="fa-solid fa-mobile-screen"></i>
                    <span>+51 977721046</span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <span>contacto@equilibrio.org.pe</span>
                </div>
            </div>
            <div class="footer-social">
                <a href="https://youtube.com/@ongdasociacionequilibrio1275"><i class="fab fa-youtube"></i></a>
                <a href="https://instagram.com/asociacion_equilibrio?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>
                <a href="https://www.tiktok.com/@asociacion_equilibrio?_t=8beiipSB3Wo&_r=1"><i class="fab fa-tiktok"></i></a>
                <a href="https://www.facebook.com/113727953664448?referrer=whatsapp"><i class="fab fa-facebook"></i></a>
                <a href="https://www.linkedin.com/company/asociación-equilibrio"><i class="fab fa-linkedin"></i></a>
                <a href="https://twitter.com/asociacinequil1?s=11"><i class="fab fa-twitter"></i></a>
            </div>
            <div class="footer-copyright">
                <p>&copy; 2023 Equilibrio Salud Emocional - Todos los derechos reservados</p>
            </div>
        </div>
    </footer>
     

    <!-- jQuery -->
    <script src="/assets/js/jquery-2.1.0.min.js"></script>  

    <!-- Bootstrap -->
    <script src="/assets/js/popper.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="/assets/js/owl-carousel.js"></script>
    <script src="/assets/js/accordions.js"></script>
    <script src="/assets/js/datepicker.js"></script>
    <script src="/assets/js/scrollreveal.min.js"></script>
    <script src="/assets/js/waypoints.min.js"></script>
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <script src="/assets/js/imgfix.min.js"></script>
    <script src="/assets/js/slick.js"></script>
    <script src="/assets/js/lightbox.js"></script>
    <script src="/assets/js/isotope.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/mainjs.js"></script>
    <script src="/assets/js/modals.js"></script>
    <script src="/node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

    <!-- Global Init -->
    <script src="/assets/js/custom.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.carrusel-programa').slick({
                infinite: true,
                slidesToShow: 4, 
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                draggable: true, 
                swipeToSlide: true, 
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1 
                        }
                    }
                ]
            });
        });
    </script>
     
    <script>
        $(document).ready(function(){
            $('.carrusel-servicios').slick({
                infinite: true,
                slidesToShow: 3, 
                slidesToScroll: 0,
                autoplay: true,
                autoplaySpeed: 2000,
                draggable: true, 
                swipeToSlide: true, 
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1 
                        }
                    }
                ]
            });
        });
    </script>
   
</body>

</html>