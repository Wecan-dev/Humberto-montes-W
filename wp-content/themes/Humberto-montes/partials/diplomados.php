<section class="main-grid__before">
  <div class="main-grid__before--content container">

    <?php $loop = new WP_Query( 'post_type=LoQueTenemos' ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="main-grid__before--img">
        <img alt="<?php the_title(); ?>" class="img-before" src="<?php echo get_the_post_thumbnail_url(); ?>">
        <div class="ms-thumbnail-caption-content">
          <h3 class="ms-thumbnail-caption-title"><?php the_title(); ?></h3>
          <!-- <p><?php the_title(); ?></p> -->
			
			<?php $enlace = get_field( 'enlace' ); ?>
<?php if ( $enlace ) : ?>
			<a class="btn btn-white" href="<?php echo esc_url( $enlace['url'] ); ?>" target="<?php echo esc_attr( $enlace['target'] ); ?>">
            <i class="zmdi zmdi-eye"></i>
            <?php echo esc_html( $enlace['title'] ); ?>
          </a>
<?php endif; ?>
          
			
			
        </div>
      </div>
    <?php endwhile; ?>
  </div>
  <div class="main-grid__before--title">
    <h2>
      Conoce <strong><em>  todo lo que tenemos</em></strong> todo lo que tenemos para Tí.
    </h2>
  </div>
</section>