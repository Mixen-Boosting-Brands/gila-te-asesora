<?php
	$category_id = get_cat_ID( 'Blog' );
	$blog_category_link = get_category_link( $category_id );
	get_header();
?>

	<section data-aos="fade-in" data-aos-duration="1000" id="featured-img" style="background: url('<?php echo get_the_post_thumbnail_url( null, 'full' ); ?>');">
        <div class="bg-gradient"></div>
	</section>

    <section data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" id="contenido">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="bg-contenido">
                        <div class="row">
                            <div class="col-10 offset-1 col-lg-1 ofsset-lg-0">
                                <!-- Aquí va social sharing -->
								<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
                            </div>
                            <div class="col-10 offset-1 col-lg-9 offset-lg-0">
							<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
                                <h1><?php the_title(); ?></h1>
                                <p class="small date text-muted">Por: Gila Granillo | <?php the_date( 'l, F j, Y' ); ?> a la(s) <?php the_time(); ?></p>
                                <?php the_content(); ?>
								<?php edit_post_link(); // Always handy to have Edit Post Links available. ?>
							<?php endwhile; ?>
							<?php else: ?>
							<?php endif; ?>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog">
        <div class="container">
            <div class="row articulos-relacionados">
                <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" class="col-md-4 my-auto text-md-end">
                    <div class="row">
                        <div class="col left">
                        	<h1>Te</h1>
                            <h1>recomiendo estos</h1>
                            <h1>artículos</h1>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo-footer.png" alt="" id="logo">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3 mb-md-0">
                            <a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000" href="<?php echo esc_url( $blog_category_link ); ?>" class="btn btn-secondary rounded-pill">Ver todos los artículos</a>
                        </div>
                    </div>
                </div>
			<?php 
                $args = array(
					'post__not_in' => array(get_the_ID()),
                    'posts_per_page' => 2,
                    'orderby' => 'rand'
                );
                $the_query = new WP_Query( $args );
            ?>
           	<?php if ($the_query->have_posts()): $row = 6; while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?php echo $row; ?>00" class="col-md-4 mb-3 mb-md-0">
                    <a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('thumb-post', array('class' => 'thumb-post img-fluid')); ?>
                        <h2 class="titulo-post"><?php the_title(); ?></h2>
                    </a>
                    <small class="date text-muted"><?php echo get_the_date( 'd/m/Y' ); ?></small>
                    <p><?php html5wp_excerpt('html5wp_custom_post'); ?></p>
                    <a href="<?php the_permalink(); ?>">
                        <i class="fa-solid fa-circle-plus"></i> Leer artículo
                    </a>
                </div>
			<?php $row+=2; endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
