<?php get_header();?>
<section class="main-eventos__background" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/meeting2.jpg');">

  <div class="main-cuadro__title">
    <h1>EVENTOS</h1>
    <p>EXPERIENCIAS DE APRENDIZAJE 100% VIVENCIALES, LIBERADORAS Y MOTIVADORAS.</p>
  </div>

</section>


<section>
  <div class="container">
    <div class="box_general">
    


    </div>
    
      
        <div class="box-grid box-grid__col2">
        <?php $loop = new WP_Query( 'product_type=product&product_cat=eventos&posts_per_page=-1' ); ?>
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
                  
                  <p class="text-info">
                    <i class="fa fa-phone">
                      <a href="tel4242740589">
                        0424 2740589
                      </a>
                      <a href="tel:4241173470">
                        0424 117 3470
                      </a>
                      <a href="tel:4121288201">
                        0412 128 8201
                      </a>
                           
                    </i>
                    <br>
                    <i class="fa fa-envelope-o">
                      <a href="mailto: humbertomontes@gmail.com">
                        humbertomontes@gmail.com
                      </a>
                    </i>
					  
			
                  </p>
					<a class="btn btn-blue" href="<?php the_permalink();?>">
                COMPRAR
              </a>
                </div>
              </div>
              <?php endwhile; ?>
        </div>
        
    
  </div>
</section>
<section class="main-video container">
  <div class="card card-danger">
    <div class="card-header">
      <h3 class="card-title">
        <i class="zmdi zmdi-graduation-cap"></i>
        Conversaciones para el alma // Humberto Montes
      </h3>
    </div>
    <div class="main-video__content">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/4FAugrk09is" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    
    <div class="card-block text-center">
      <p class="color-royal lead">Una muestra de lo que se ha vivido en nuestros seminarios</p>
      <a class="btn btn-danger btn-raised" href="https://www.youtube.com/watch?v=4FAugrk09is&amp;t=19s" target="_blank">
        <i class="fa fa-youtube fa-lg"></i>
        Ver en youtube
      </a>
    </div>
  </div>
</section>
<?php get_footer();?>