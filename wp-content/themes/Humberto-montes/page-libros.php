<?php get_header(); ?>


<?php $loop = new WP_Query( 'product_type=product&product_cat=libros&posts_per_page=-1' ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<section class="main-libro" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/libro.jpg');">
		<div class="mask">
			<div class="main-cuadro__title">
				<h1>Libros</h1>
			</div>
		</div>
	</section>
	<section class="main-libros__cuadro container">

		<div class="main-cuadro">
		
		
			
			<div class="main-libros__compra">
				<div class="main-libros__card">
					<!-- <div class="main-libros__card--icono">
						<i class="fa fa-market color-warning font-big"></i>
						<p>
							Comprar el libro en Amazon
						</p>
					</div> -->
					<div class="main-libros__buttom">
						    <div class="main-card">
                <div class="card-img">
                  <a href="<?php the_permalink();?>">
						<img class="img-fluid"  src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
					</a>
                </div>
                <div class="main-card__text">
					 <a href="<?php the_permalink();?>">
                  <h3 class="color-primary no-mt"><?php the_title(); ?></h3>
					</a>
                  <p class="text-info">
                    <i class="fa fa-phone">
                      <a href="">
                        0424 2740589
                      </a>
                      <a href="">
                        0424 117 3470
                      </a>
                      <a href="">
                        0412 128 8201
                      </a>
                           
                    </i>
                    <br>
                    <i class="fa fa-envelope-o">
                      <a href="">
                        humbertomontes@gmail.com
                      </a>
                    </i>
					  
			
                  </p>
					
                </div>
              </div>
						<a class="btn btn-comprar" href="<?php echo bloginfo('url'); ?>/?add-to-cart=<?php the_id();?>">
							COMPRAR AHORA
							<i class="fa fa-chevron-right fa-lg"></i>
						</a>
					</div>
				</div>
				<div class="main-libros__compra--venezuela">
					    <div class="main-card">
                <div class="card-img">
                  <img class="img-fluid"  src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                </div>
						
                <div class="main-card__text">
                  <h3 class="color-primary no-mt"><?php the_title(); ?></h3>
                  <p class="text-info">
                    <i class="fa fa-phone">
                      <a href="">
                        0424 2740589
                      </a>
                      <a href="">
                        0424 117 3470
                      </a>
                      <a href="">
                        0412 128 8201
                      </a>
                           
                    </i>
                    <br>
                    <i class="fa fa-envelope-o">
                      <a href="">
                        humbertomontes@gmail.com
                      </a>
                    </i>
					  
			
                  </p>
				
                </div>
              </div>
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
	<a class="btn btn-comprar" href="<?php echo bloginfo('url'); ?>/?add-to-cart=<?php the_id();?>">
							DESCARGAR
							<i class="fa fa-download fa-5"></i>
						</a>
				</div>
			</div>
		</div>

	</section>
<?php endwhile; ?>
<?php get_footer(); ?>