<section class="main-eventos container">
  <div class="main-eventos__title">
    <h1 >
      Próximos Eventos
    </h1>
    <p>
      Para el año en curso
    </p>
  </div>
  <div class="main-eventos__slider">
    <div class="main-eventos__slider--content">  
      <?php $loop = new WP_Query( 'product_type=product&product_cat=eventos' ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <a href="<?php the_permalink(); ?>">
          <div class="main-eventos__slider--items">
            <div class="main-eventos__silder--img">
              <img alt="<?php the_title(); ?>" class="img-slider__eventos" src="<?php echo get_the_post_thumbnail_url(); ?>">
            </div>
          </div>
          </a>
      <?php endwhile; ?>
    </div>
    <div class="main-eventos__btn">
      <a href="<?php echo bloginfo('url')?>/eventos" class="btn btn-eventos" href="">
        VER TODOS LOS EVENTOS
        <i class="zmdi zmdi-eye"></i>
      </a>
    </div>
  </div>
</section>