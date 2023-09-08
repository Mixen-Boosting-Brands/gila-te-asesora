<?php get_header(); ?>

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

<?php get_footer(); ?>
