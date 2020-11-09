<?php get_header(); ?>

<section class="main-libro" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/coaching.jpg');">
	<div class="mask">
		<div class="main-cuadro__title">
			<h1>Diplomados</h1>
		</div>
	</div>
</section>
<section class="main-cuadro container">
	<div class="box-grid box-grid__col2">
        <?php $loop = new WP_Query( 'product_type=product&product_cat=diplomados&posts_per_page=-1' ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
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
					
   					        <div class="main-diplomado__lugares--text">
          <p><?php echo excerpt(20); ?></p>
        </div>
                  <p class="text-info">
                    <i class="fa fa-phone">
                      <a href="tel:584242740589">
                        04242740589
                      </a>
                      <a href="tel:584241173470">
                      	04241173470
                      </a>
                      <a href="tel:584121288201">
                        04121288201
                      </a>
                           
                    </i>
                    <br>
                    <i class="fa fa-envelope-o">
                      <a href="mailto:humbertomontes@gmail.com">
                        humbertomontes@gmail.com
                      </a>
                    </i>
					  
			
                  </p>
					<a class="btn btn-blue" href="#">
                COMPRAR
              </a>
                </div>
              </div>
              <?php endwhile; ?>
        </div>
        



</section>

<?php get_footer(); ?>