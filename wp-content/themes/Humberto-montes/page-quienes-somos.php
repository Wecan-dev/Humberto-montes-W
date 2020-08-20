<?php get_header() ?>
<?php $args = array( 'post_type' => 'QuienesSomos', 'posts_per_page' => 1);?>   
<?php $loop = new WP_Query( $args ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<section class="main-about__background" style="background-image: url('http://www.humbertomontes.com/assets/img/humberto.jpg');">
	<div class="main-about__cuadros" >
		<div class="main-about__cuadro--title">
			<h1><?php the_title(); ?></h1>
			<h5><?php the_field( 'subtitulo' ); ?></h5>
		</div>
		<div class="main-about__cuadro1 container wow  zoomInDown" data-wow-delay='.2s'>
			<?php the_content(); ?>
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
<?php get_footer() ?>