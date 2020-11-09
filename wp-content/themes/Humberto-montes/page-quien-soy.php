<?php get_header() ?>
<?php $args = array( 'post_type' => 'QuienesSomos', 'posts_per_page' => 1);?>   
<?php $loop = new WP_Query( $args ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<section class="main-about__background" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/coaching.jpg);">
	<div class="mask-quienes_soy">
		<div class="main-about__cuadros" >
		<div class="main-about__cuadro--title">
			<h1><?php the_title(); ?></h1>
			<h5><?php the_field( 'subtitulo' ); ?></h5>
		</div>
		<div class="main-about__cuadro1 container wow  zoomInDown" data-wow-delay='.2s'>
			<?php the_content(); ?>
		</div>
	</div>
	</div>
	
</section>
<section class="main-about">
	
	<div class="main-about__cuadro2 container  wow  zoomInDown" data-wow-delay='.4s'> 
	<?php the_field( 'descripcion' ); ?>
	</div>

	<div class="main-about__cuadro3 container wow  zoomInDown" data-wow-delay='.6s'>
		<div class="main-about__text--cuadro3">
			<p class="text-about__cuadro3">
			<?php the_field( 'cita_1' ); ?>
			</p>
		</div>
	</div>
	<div class="main-about__cuadro2 container wow  zoomInDown" data-wow-delay='.8s'>
		<?php the_field( 'descripcion_conferencia' ); ?>
	</div>
	<div class="main-about__cuadro3 container wow  zoomInDown" data-wow-delay='.8s'>
		<div class="main-about__text--cuadro3">
			<p class="text-about__cuadro3">
			<?php the_field( 'cita_2' ); ?>
			</p>
		</div>
	</div>
</section>

<?php endwhile; ?>

<br>
<br>

<?php $args = array( 'post_type' => 'Peregrinaje', 'posts_per_page' => 1);?>   
<?php $loop = new WP_Query( $args ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<section class="main-peregrinaje__cuadro container">
	
	<div class="main-cuadro">
		<div class="main-peregrinaje__cuadro--title">
			<h1>
				<?php the_title(); ?>
			</h1>
			
		</div>
		<div class="main-peregrinaje__slick">
			<div class="main-peregrinaje__content">
				<div class="main-peregrinaje__items">
					<div class="main-peregrinaje__card">
						<div class="main-peregrinaje__card--img">
							<?php if ( get_field( 'imagen_1' ) ) : ?>
								<img src="<?php the_field( 'imagen_1' ); ?>" />
							<?php endif ?>
						</div>
						<div class="main-peregrinaje__card--title">
							<p>
								<?php the_field( 'texto_1' ); ?>
							</p>
						</div>
					</div>
				</div>
				<div class="main-peregrinaje__items">
					<div class="main-peregrinaje__card">
						<div class="main-peregrinaje__card--img">
							<?php if ( get_field( 'imagen_2' ) ) : ?>
								<img src="<?php the_field( 'imagen_2' ); ?>" />
							<?php endif ?>
						</div>
						<div class="main-peregrinaje__card--title">
							<p>
								<?php the_field( 'texto_2' ); ?>
							</p>
						</div>
					</div>
				</div>
				<div class="main-peregrinaje__items">
					<div class="main-peregrinaje__card">
						<div class="main-peregrinaje__card--img">
							<?php if ( get_field( 'imagen_3' ) ) : ?>
								<img src="<?php the_field( 'imagen_3' ); ?>" />
							<?php endif ?>
						</div>
						<div class="main-peregrinaje__card--title">
							<p>
								<?php the_field( 'texto_3' ); ?>
							</p>
						</div>
					</div>
				</div>
				<div class="main-peregrinaje__items">
					<div class="main-peregrinaje__card">
						<div class="main-peregrinaje__card--img">
							<?php if ( get_field( 'imagen_4' ) ) : ?>
								<img src="<?php the_field( 'imagen_4' ); ?>" />
							<?php endif ?>
						</div>
						<div class="main-peregrinaje__card--title">
							<p>
								<?php the_field( 'texto_4' ); ?>
							</p>
						</div>
					</div>
				</div>
				<div class="main-peregrinaje__items">
					<div class="main-peregrinaje__card">
						<div class="main-peregrinaje__card--img">
	<?php $imagen_5 = get_field( 'imagen_5' ); ?>
<?php if ( $imagen_5 ) : ?>
	<img src="<?php echo esc_url( $imagen_5['url'] ); ?>" alt="<?php echo esc_attr( $imagen_5['alt'] ); ?>" />
<?php endif; ?>
						</div>
						<div class="main-peregrinaje__card--title">
							<p>
								<?php the_field( 'texto_5' ); ?>
							</p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<hr>
		<div class="main-peregrinaje__text">
			<?php the_content(); ?>
		</div>
	
	</div>
</section>
<?php endwhile; ?>
<?php get_footer() ?>