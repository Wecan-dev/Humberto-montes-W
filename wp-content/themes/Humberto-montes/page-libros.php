<?php get_header(); ?>


<?php $loop = new WP_Query( 'product_type=product&product_cat=libros' ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<section class="main-libro">
		<div class="mask">
			<div class="main-cuadro__title">
				<h1>Libros</h1>
			</div>
		</div>
	</section>
	<section class="main-libros__cuadro container">

		<div class="main-cuadro">
			<div class="main-libros__cuadro--title">
				<h2>
					<?php the_title(); ?>
				</h2>
				<p>
				<?php the_field( 'subtitulo_de_producto' ); ?>
				</p>
			</div>
			<div class="main-libros__text--content">
				<div class="main-libros__text">
					<div class="text-libros">
						<?php the_content(); ?>
					</div>
				</div>
				<div class="main-libros__img">
					<img class="img-libros" src="<?php echo get_template_directory_uri();?>/assets/img/tarjeta3.jpg">
				</div>
			</div>
			<hr class="dotted">
			<div class="main-libros__compra">
				<div class="main-libros__card">
					<!-- <div class="main-libros__card--icono">
						<i class="fa fa-market color-warning font-big"></i>
						<p>
							Comprar el libro en Amazon
						</p>
					</div> -->
					<div class="main-libros__buttom">
						<a class="btn btn-comprar" href="<?php echo bloginfo('url'); ?>/?add-to-cart=<?php the_id();?>">
							COMPRAR AHORA
							<i class="fa fa-chevron-right fa-lg"></i>
						</a>
					</div>
				</div>
				<div class="main-libros__compra--venezuela">
					<p>
						Para compras en Venezuela llama a
					</p>
					<h3>
						Daniel Montes
					</h3>
					<p>
						<i class="fa fa-phone fa-lg"></i>
						04129620562
						<br>
						<i class="fa fa-envelope-o fa-lg"></i>
						daniel@humbertomontes.com
					</p>

				</div>
			</div>
		</div>

	</section>
<?php endwhile; ?>
<?php get_footer(); ?>