<section class="main-aliados">
  <div class="main-aliados__title">
    <h1>Nuestros Aliados</h1>
  </div>
  <div class="main-aliados__text">
    <p class="text-aliados">
      Detrás de los resultados de las empresas están las personas, es allí donde coaching trabaja.
    </p>
    <h5>¡Las persona son la organización!</h5>
  </div>
  <div class="main-aliados__img--grid">
    <div class="main-aliados__img--content container">
      <?php $args = array( 'post_type' => 'Aliados');?>   
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="main-aliados__img">
          <img class="img-aliados" alt="<?php the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(); ?>">
        </div>
        <?php endwhile; ?>
    </div>
  </div>
</section>