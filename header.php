<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri() ); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php echo esc_url( get_template_directory_uri() ); ?>/site.webmanifest">
    <link rel="mask-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/styles.css">

	<?php wp_head(); ?>
</head>
<body>
    <div id="backdrop"></div>
    <div class="menu">
        <a id="cerrar-menu" href="javascript:void(0)">
            <i class="fas fa-times"></i>
        </a>
        <div class="menu-contenido">
            <a class="anchor" id="btn-logo" href="<?php echo esc_url( home_url() ); ?>">
                <img class="logo img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png" alt="Logotipo de Gila te asesora">
            </a>
            <nav>
                <ul class="list-unstyled">
                    <li>
                        <a class="anchor" id="btn-nav-1" href="<?php if( is_home() ): ?>#quien-soy<?php else: ?><?php echo esc_url( home_url() ); ?>#quien-soy<?php endif; ?>">Sobre mí</a>
                    </li>
                    <li>
                        <a class="anchor" id="btn-nav-2" href="<?php if( is_home() ): ?>#mis-servicios<?php else: ?><?php echo esc_url( home_url() ); ?>#mis-servicios<?php endif; ?>">Mis servicios</a>
                    </li>
                    <li>
                        <a class="anchor" id="btn-nav-3" href="<?php if( is_home() ): ?>#por-que-yo<?php else: ?><?php echo esc_url( home_url() ); ?>#por-que-yo<?php endif; ?>">¿Por qué yo?</a>
                    </li>
                    <li>
                        <a class="anchor" id="btn-nav-4" href="<?php if( is_home() ): ?>#trabaja-a-mi-lado<?php else: ?><?php echo esc_url( home_url() ); ?>#trabaja-a-mi-lado<?php endif; ?>">Trabaja a mi lado</a>
                    </li>
                </ul>
            </nav>
            <a href="<?php if( is_home() ): ?>#contacto<?php else: ?><?php echo esc_url( home_url() ); ?>#contacto<?php endif; ?>" class="anchor btn btn-primary rounded-pill" id="btn-contacto">Déjame asesorarte</a>
            <div id="social">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/" target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.tiktok.com/" target="_blank">
                            <i class="fab fa-tiktok"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div id="contacto-menu">
                <ul class="list-unstyled">
                    <li>
                        <i class="far fa-envelope"></i> <a href="mailto:gila.teasesora@gmail.com">gila.teasesora@gmail.com</a>
                    </li>
                    <li>
                        <i class="fas fa-phone"></i> <a href="tel:+526144952241">(614) 495 2241</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <header id="navbar">
        <div class="container">
            <div class="row">
                <div class="col-4 my-auto">
                    <a href="<?php echo esc_url( home_url() ); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png" alt="Logotipo de Gila te asesora" class="logo img-fluid" id="logo-navbar">
                    </a>
                </div>
                <div class="col-8 my-auto text-end">
                    <nav class="d-none d-lg-block">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="btn btn-primary rounded-pill" href="<?php if( is_home() ): ?>#contacto<?php else: ?><?php echo esc_url( home_url() ); ?>#contacto<?php endif; ?>">
                                    Déjame asesorarte
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="<?php if( is_home() ): ?>#quien-soy<?php else: ?><?php echo esc_url( home_url() ); ?>#quien-soy<?php endif; ?>">
                                    Sobre mí
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="<?php if( is_home() ): ?>#mis-servicios<?php else: ?><?php echo esc_url( home_url() ); ?>#mis-servicios<?php endif; ?>">
                                    Mis servicios
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="<?php if( is_home() ): ?>#por-que-yo<?php else: ?><?php echo esc_url( home_url() ); ?>#por-que-yo<?php endif; ?>">
                                    ¿Por qué yo?
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="<?php if( is_home() ): ?>#trabaja-a-mi-lado<?php else: ?><?php echo esc_url( home_url() ); ?>#trabaja-a-mi-lado<?php endif; ?>">
                                    Trabaja a mi lado
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <a id="mburger" class="d-lg-none" href="javascript:void(0)">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>