	<footer id="contacto">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-5 offset-lg-1 my-auto text-center text-lg-end">
                    <a href="<?php echo esc_url( home_url() ); ?>" data-aos="fade-up" data-aos-once="true" data-aos-duration="750">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png" alt="Logotipo de Gila te asesora" class="img-fluid mb-5 mb-lg-0">
                    </a>
                </div>
                <div class="col-lg-5 offset-lg-1 my-auto">
                    <h3 data-aos="fade-up" data-aos-once="true" data-aos-duration="750" data-aos-delay="250">Contacto</h3>
                    <ul class="list-unstyled" data-aos="fade-up" data-aos-once="true" data-aos-duration="750" data-aos-delay="500">
                        <li>
                            <a href="tel:+526144952241">
                                <i class="fa-solid fa-phone"></i> 614 495 2241
                            </a>
                        </li>
                        <li>
                            <a href="mailto:gila.teasesora@gmail.com">
                                <i class="fa-solid fa-envelope"></i> gila.teasesora@gmail.com
                            </a>
                        </li>
                    </ul>
                    <h3 data-aos="fade-up" data-aos-once="true" data-aos-duration="750" data-aos-delay="750">Sígueme</h3>
                    <ul id="social" class="list-inline" data-aos="fade-up" data-aos-once="true" data-aos-duration="750" data-aos-delay="1000">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/gilateasesora/" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.tiktok.com/@gilateasesora" target="_blank">
                                <i class="fab fa-tiktok"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <hr>
                </div>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/526144952241?text=Hola%20Gila,%20necesito%20información." class="whatsapp" target="_blank">
        <i class="fab fa-whatsapp whatsapp-icon"></i>
    </a>

	<?php wp_footer(); ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/app.bundle.js"></script>

    <!-- Initialize Swipers -->
    <script>
        var swiper = new Swiper(".testimonios", {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                576: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
                992: {
                    slidesPerView: 4,
                    spaceBetween: 50,
                },
            },
        });
    </script>

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-X5SYX9VM3F"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-X5SYX9VM3F');
	</script>
</body>
</html>
