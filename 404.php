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
							<div class="col-10 offset-1 col-lg-9 offset-lg-2">
								<h1>Error 404: Página no encontrada</h1>
								<p>La página solicitada no se encontró en el servidor, probablemente cambió de lugar o fue eliminada.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
