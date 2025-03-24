<section class="seccion-footer">
    <div class="container">
        <div class="row">

            <div class="col text-center">
                <img src="<?php echo base_url('app-assets/images/logo.png') ?>" class="img-fluid" alt="logo"> <br><br><br>
                <div class="container d-flex justify-content-center align-items-center">
                    <ul class="list-unstyled d-flex gap-3">
                        <li class="c-blanco">SIGUENOS</li>
                        <li><a title="Redes" target="_blank" href="https://www.facebook.com/profile.php?id=61566148617307"><img src="<?php echo base_url('app-assets/images/icono-facebook.png') ?>" alt="Logo" class="img-fluid" width="30"></li>
                        <li><a title="Redes" target="_blank" href="https://www.instagram.com/zrunner7/"><img src="<?php echo base_url('app-assets/images/icono-insta.png') ?>" alt="Logo" class="img-fluid" width="30"></li></a><!-- Logo -->
                    </ul>
                </div>
                <div class="container d-flex justify-content-center">
                    <ul class="list-unstyled d-flex gap-3">
                        <li><a title="Dirigir a sus respectivas secciones" class="c-blanco d-none d-sm-block" href="#quienes" class="menu-link" data-bs-dismiss="modal">Quiénes somos</a></li>
                        <li><a title="Dirigir a sus respectivas secciones" class="c-blanco d-none d-sm-block" href="#eventos" class="menu-link" data-bs-dismiss="modal">Eventos en Marcha</a></li>
                        <li><a title="Dirigir a sus respectivas secciones" class="c-blanco d-none d-sm-block" href="#registro" class="menu-link" data-bs-dismiss="modal">Registro</a></li>
                        <li><a title="Dirigir a sus respectivas secciones" class="c-blanco d-none d-sm-block" href="#galeria" class="menu-link" data-bs-dismiss="modal">Galeria</a></li>
                        <li><a title="Dirigir a sus respectivas secciones" class="c-blanco d-none d-sm-block" href="#patrocinio" class="menu-link" data-bs-dismiss="modal">Patrocinadores</a></li>
                    </ul>
                </div>
                <div class="container d-flex justify-content-center align-items-center d-block d-sm-none">
                    <ul class="list-unstyled d-flex gap-3">
                        <li><a title="Dirigir a sus respectivas secciones" class="c-blanco d-block d-sm-none" href="#quienes-movil" class="menu-link" data-bs-dismiss="modal">Quiénes somos</a></li>
                        <li><a title="Dirigir a sus respectivas secciones" class="c-blanco" href="#eventos" class="menu-link" data-bs-dismiss="modal">Eventos en Marcha</a></li>
                    </ul>
                </div>
                <div class="container d-flex justify-content-center align-items-center d-block d-sm-none">
                    <ul class="list-unstyled d-flex gap-3">
                        <li><a title="Dirigir a sus respectivas secciones" class="c-blanco" href="#registro" class="menu-link" data-bs-dismiss="modal">Registro</a></li>
                        <li><a title="Dirigir a sus respectivas secciones" class="c-blanco" href="#galeria" class="menu-link" data-bs-dismiss="modal">Galeria</a></li>
                        <li><a title="Dirigir a sus respectivas secciones" class="c-blanco" href="#patrocinio" class="menu-link" data-bs-dismiss="modal">Patrocinadores</a></li>
                    </ul>
                </div>
                <p class="c-blanco text-center texto-footer" id="footer-copy-movil">
                    &copy; 2025 Zrunner | Todos los derechos reservados 
                </p>
            </div>

        </div>
    </div>
</section>

<!-- icono de whatsapp -->
<a title="Whatsapp" href="https://wa.link/0l3q8u" target="_blank">
    <div class="whatsapp-float">
        <img src="<?php echo base_url('app-assets/images/recursos/whatsapp.png') ?>" class="img-responsive center-block" id="boton_whats" alt="boton_whats" width="60">
    </div>
</a>



<!-- Javascript Files -->
<script src="<?php echo base_url('app-assets/js/plugins.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('app-assets/js/designesia.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('app-assets/js/swiper.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('app-assets/js/custom-marquee.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('app-assets/js/custom-swiper-1.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/main.js')?>" type="text/javascript"></script>

<?php if (isset($scripts) && is_array($scripts)) : ?>
    <?php foreach ($scripts as $script) : ?>
        <script type="text/javascript" src="<?php echo !$script['es_rel'] ? $script['src'] : base_url() . 'assets/js/' . $script['src']; ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>

<script>
    // Cambiar la opacidad del navbar al hacer scroll
    window.onscroll = function() {
        var navbar = document.getElementById("navbar");
        if (document.documentElement.scrollTop > 50) {
            navbar.classList.add("navbar-scrolled");
        } else {
            navbar.classList.remove("navbar-scrolled");
        }
    };

    // Desplazamiento suave al hacer clic en un enlace
    document.querySelectorAll('.menu-link').forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            var target = document.querySelector(this.getAttribute('href'));
            if (target) {
                var modal = bootstrap.Modal.getInstance(document.getElementById('menuModal'));
                modal.hide();
                setTimeout(function() {
                    scrollToElement(target, 800);
                }, 300);
            }
        });
    });

    // Función para desplazamiento suave
    function scrollToElement(element, duration) {
        const start = window.pageYOffset;
        const end = element.getBoundingClientRect().top + start;
        const distance = end - start;
        let startTime = null;

        function animation(currentTime) {
            if (startTime === null) startTime = currentTime;
            const timeElapsed = currentTime - startTime;
            const progress = Math.min(timeElapsed / duration, 1);
            window.scrollTo(0, start + distance * progress);
            if (timeElapsed < duration) requestAnimationFrame(animation);
        }
        requestAnimationFrame(animation);
    }

    // Añadir el año dinámico al footer
    document.addEventListener('DOMContentLoaded', function() {
        const year = new Date().getFullYear();
        document.getElementById('footer-copy-movil').innerHTML = `&copy; ${year} Zrunner | Todos los derechos reservados `;
    });
</script>

</body>

</html>